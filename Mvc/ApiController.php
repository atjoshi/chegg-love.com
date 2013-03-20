<?php

/**
 * Description of ApiController
 *
 * @author      ben <ben@chegg.com>
 * @copyright   2013 Chegg INC
 * @link        http://mkp.chegg.com
 * @license     http://mkp.chegg.com/license
 * @version     1.0.0
 * @package     Msportal
 *
 */

namespace Lovecom\Mvc;

class ApiController extends \Lovecom\Mvc\BaseController
{

    private $router = array();
    private $function = '';
    private $arguments = array();
    private $conditions = array();

    protected function doController()
    {
        //NOTE need to overwrite this function otherwise it will return northing
    }

    protected function getView()
    {
        if ($this->view == null) {

            if (!empty($this->viewClass)) {
                $class = $this->viewClass;
                $this->view = new $class($this->getResponse());
            }
            else {
                $this->view = new \Lovecom\Mvc\ApiView($this->getResponse());
            }
        }
        return $this->view;
    }

    protected function getModel()
    {
        if ($this->model == null) {

            $method = $this->getRequest()->getServer('REQUEST_METHOD');

            if (isset($this->router[$method])) {
                $uri = '/' . join('/', $this->getRequest()->getArguments());
                foreach ($this->router[$method] as $pattern => $callable) {
                    if ($this->matchesPattern($uri, $pattern)) {
                        $user = $this->getRequest()->getSession()->getLoginUser();
                        if (!empty($callable[2]) && ($user == null || !$user->isPermitted($callable[2]))) {
                            $this->model = new \Lovecom\Api\Login\Model(
                                            $this->getRequest(), $this->getResponse());
                            $this->function = 'popupLoginModal';
                        }
                        else if (class_exists($callable[0])) {
                            $rc = new \ReflectionClass($callable[0]);
                            $this->model = $rc->newInstanceArgs(array($this->getRequest(),
                                $this->getResponse()));
                            $this->function = $callable[1];
                            $this->permission = $callable[2];
                        }
                        break;
                    }
                }
            }
        }
        return $this->model;
    }

    protected function doModel()
    {
        $model = $this->getModel();
        if (is_object($model) && is_callable(array($model, $this->function))) {
            call_user_func_array(array($model, $this->function),
                    $this->arguments);
        }
        else {
            error_log('Warning : ApiController::doModel function is not callable');
            $this->getResponse()->addHeader('HTTP/1.1 404 No API Method Found');
            $this->getResponse()->set('errors', array('No API Method Found'));
        }
    }

    protected function matchesPattern($resourceUri, $pattern)
    {
        //Extract URL arguments
        preg_match_all('@:([\w]+)@', $pattern, $paramNames, PREG_PATTERN_ORDER);
        $paramNames = $paramNames[0];

        //Convert URL arguments into regex patterns, construct a regex for this route
        $patternAsRegex = preg_replace_callback('@:[\w]+@',
                array($this, 'convertPatternToRegex'), $pattern);
        if (substr($pattern, -1) === '/') {
            $patternAsRegex = $patternAsRegex . '?';
        }
        $patternAsRegex = '@^' . $patternAsRegex . '$@';

        //Cache URL arguments' names and values if this route matches the current HTTP request
        if (preg_match($patternAsRegex, $resourceUri, $paramValues)) {
            array_shift($paramValues);
            foreach ($paramNames as $index => $value) {
                $val = substr($value, 1);
                if (isset($paramValues[$val])) {
                    $this->arguments[$val] = urldecode($paramValues[$val]);
                }
            }
            return true;
        }
        else {
            return false;
        }
    }

    /**
     * Convert a URL parameter (ie. ":id") into a regular expression
     * @param   array   URL parameters
     * @return  string  Regular expression for URL parameter
     */
    protected function convertPatternToRegex($matches)
    {
        $key = str_replace(':', '', $matches[0]);
        if (array_key_exists($key, $this->conditions)) {
            return '(?P<' . $key . '>' . $this->conditions[$key] . ')';
        }
        else {
            return '(?P<' . $key . '>[a-zA-Z0-9_\-\.\!\~\*\\\'\(\)\:\@\&\=\$\+,%]+)';
        }
    }

    protected function controllerNamespace()
    {
        return 'Api';
    }

    protected function mapRoute($method, $pattern, $model, $function,
            $permission = array())
    {
        if (!isset($this->router[$method])) {
            $this->router[$method] = array();
        }
        $this->router[$method][$pattern] = array($model, $function, $permission);
    }

    protected function get($pattern, $model, $function, $permission = array())
    {
        $this->mapRoute(\Lovecom\System\Request::METHOD_GET, $pattern, $model,
                $function, $permission);
        $this->mapRoute(\Lovecom\System\Request::METHOD_HEAD, $pattern, $model,
                $function, $permission);
    }

    protected function post($pattern, $model, $function, $permission = array())
    {
        $this->mapRoute(\Lovecom\System\Request::METHOD_POST, $pattern, $model,
                $function, $permission);
    }

    protected function put($pattern, $model, $function, $permission = array())
    {
        $this->mapRoute(\Lovecom\System\Request::METHOD_PUT, $pattern, $model,
                $function, $permission);
    }

    protected function delete($pattern, $model, $function, $permission = array())
    {
        $this->mapRoute(\Lovecom\System\Request::METHOD_DELETE, $pattern,
                $model, $function, $permission);
    }
    
    public function getFunction()
    {
        return $this->function; 
    }

}

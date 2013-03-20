<?php

/**
 * Base controller for page and ajax of BaseController
 *
 * @author      ben <ben@chegg.com>
 * @copyright   2013 Chegg INC
 * @link        http://mkp.chegg.com
 * @license     http://mkp.chegg.com/license
 * @version     1.0.0
 * @package     Lovecom
 *
 */

namespace Lovecom\Mvc;

abstract class BaseController
{
    /*     * *************************************** */
    /*     * *************************************** */
    /*     * ********** MEMBER VARIABLES *********** */
    /*     * *************************************** */
    /*     * *************************************** */

    /**
     *
     * @var \Lovecom\System\Request 
     */
    private $request;

    /**
     *
     * @var \Lovecom\System\Response 
     */
    private $response;
    protected $model;
    protected $view;
    protected $modelClass;
    protected $viewClass;

    /**
     *
     * @var array
     */
    protected $params;

    public function __construct($params = array())
    {
        $this->params = $params;
    }

    abstract protected function doController();

    abstract protected function doModel();

    abstract protected function controllerNamespace();

    final public function initialize()
    {
        
    }

    final public function execute(\Lovecom\System\Request $request,
            \Lovecom\System\Response $response)
    {
        $this->setRequest($request);
        $this->setResponse($response);

        $this->initialize();

        return $this->dispatch();
    }

    /**
     * This is the main method of the controller which is called from the
     * web app's index.php. Typically each page overrides this method but
     * a generic default is provided here. The function of the controller
     * is to call the page's model to get data, which is then passed to
     * the page's view for display in a web page.
     */
    public function dispatch()
    {
        $this->doController();
        $this->doModel();
        return $this->getView();
    }

    /**
     *
     * @return \Lovecom\System\Request 
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * 
     * @param \Lovecom\System\Request $request
     */
    public function setRequest(\Lovecom\System\Request $request)
    {
        $this->request = $request;
    }

    /**
     *
     * @return \Lovecom\System\Response 
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * 
     * @param \Lovecom\System\Response $response
     */
    public function setResponse(\Lovecom\System\Response $response)
    {
        $this->response = $response;
    }

    /**
     * 
     * @param string $modelClass
     */
    final public function setModelClass($modelClass)
    {
        $this->modelClass = $modelClass;
    }
    
    /**
     * 
     * @return string
     */
    final public function getModelClass()
    {
        return $this->modelClass; 
    }

    /**
     * 
     * @return \Lovecom\Mvc\BaseModel
     */
    protected function getModel()
    {
        if ($this->model == null) {
            //$class = str_replace('Controller', 'Model', __CLASS__); 
            if (!empty($this->modelClass)) {
                $class = $this->modelClass;
            }
            else {
                $parts = $this->getRequest()->getArguments();
                $class = \Lovecom\Mvc\MvcHelper::getBaseClassName(
                                $this->controllerNamespace(), 'Model', $parts);
            }
            $this->model = new $class($this->getRequest(), $this->getResponse());
        }
        return $this->model;
    }

    /**
     * For unit test only 
     * 
     * @param object $model
     */
    public function setModel($model)
    {
        $this->model = $model;
    }

    /**
     * 
     * @param string $viewClass
     */
    final public function setViewClass($viewClass)
    {
        $this->viewClass = $viewClass;
    }
    
    /**
     * 
     * @return string
     */
    final public function getViewClass()
    {
        return $this->viewClass; 
    }

    /**
     * 
     * @return \Lovecom\Mvc\BaseView
     */
    protected function getView()
    {
        if ($this->view == null) {
            if (!empty($this->viewClass)) {
                $class = $this->viewClass;
            }
            else {
                $parts = $this->getRequest()->getArguments();
                $class = \Lovecom\Mvc\MvcHelper::getBaseClassName(
                                $this->controllerNamespace(), 'View', $parts);
            }

            $this->view = new $class($this->getResponse());
        }
        return $this->view;
    }

    /**
     * For unit test only
     * 
     * @param object $view
     */
    public function setView($view)
    {
        $this->view = $view;
    }

}

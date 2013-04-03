<?php

/**
 * Description of BaseModel
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

abstract class BaseModel
{

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

    public function __construct(\Lovecom\System\Request $request,
            \Lovecom\System\Response $response)
    {
        $this->setRequest($request);
        $this->setResponse($response);
        $this->baseInit();
    }

    /**
     * base init to apply all model 
     */
    final public function baseInit()
    {
        $this->doInit();
    }

    abstract protected function doInit();
    

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

}
<?php
/**
 * Description of BaseView
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

abstract class BaseView
{

/* ================================================== *\
 * PROTECTED FIELDS
\* ================================================== */

	
    /**
     *
     * @var \Lovecom\System\Response 
     */
	protected $response;
	

/* ================================================== *\
 * CONSTRUCTOR
\* ================================================== */

	/**
	 * Constructor for the View
	 * Saves output passed from the Model and determines whether the request is AJAX
	 * 
	 * @param $output output passed by the model
	 */
	public function __construct(\Lovecom\System\Response $response)
	{
		$this->response = $response;
		$this->baseInit();
	}

/* ================================================== *\
 * FINAL FUNCTIONS
 * add-on will apply to all the view
\* ================================================== */
	final public function baseInit()
	{
		
		// remove headers
		$removeHeaders = $this->response->getRemoveHeaders();
		foreach($removeHeaders as $header)
		{
			header_remove($header);
		}
		
		// set headers
		$headers = $this->response->getHeaders();
		foreach($headers as $header)
		{
			header($header);
		}
		
		$this->doInit();
	}
	
/* ================================================== *\
 * OVERRIDABLE FUNCTIONS
\* ================================================== */

	/**
	 * doView
	 * 
	 * Called right after the View is constructed
	 * doView should be the only function that prints anything
	 * All the other helper functions should return a string and get printed here
	 */
	abstract public function render();
	
	/**
	 * doInit
	 * 
	 * do additional initialization without parent::construct
	 */
	abstract protected function doInit();
}
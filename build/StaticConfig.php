<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of StaticConfig
 *
 * @author ben
 */
class StaticConfig
{
    // page resource map
	public static $pages;
	private static $type;

	public static function getResourceMap()
	{
        $dir = __DIR__.'//'; 
		self::$type = 'source';
        require $dir .'conf/Source.php';
        return self::$pages; 
	}
    
	public static function getUniqueResources()
	{
		$pages = self::$pages; 
		unset($pages['_global']);
		unset($pages['styleguide']);
		$result = array();
		foreach ($pages as $page)
		{
			$result = array_merge($result, $page['css'], $page['js']);
		}
		return array_unique($result);	
	}
	
	public static function getType()
	{
		return self::$type;
	}
}


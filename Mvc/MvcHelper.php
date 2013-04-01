<?php

namespace Lovecom\Mvc;

class MvcHelper
{
    /**
     *
     * @var array 
     */
    private static $resourceMap; 
    private static $resourceDatabase; 

    /**
     * getBaseClassName
     * 
     * runs htmlspecialchars recursively on everything in $data
     * 
     * @param $class page-style class object (i.e. page_name_controller/model/view)
     * @return the base class name of the page ("page_name" from example above)
     */
    public static function getBaseClassName($namespace, $type, $parts)
    {
        $parts = array_map('ucfirst', $parts);
        
        if($namespace == 'Api'){
            $parts = array(reset($parts)); 
        }

        $className = '\\Lovecom\\' . $namespace . '\\'
                . join('\\', $parts) . '\\' . $type;

        if (!class_exists($className)) {
            $className = '\\Lovecom\\Mvc\\' . $namespace . $type;
        }
        
        return $className;
    }

    /**
     * htmlEscapeData
     * 
     * runs htmlspecialchars recursively on everything in $data
     * 
     * @param $data output coming from the model
     * @return recursively html escaped data
     */
    public static function htmlEscapeData($data)
    {
        if (is_string($data)) {
            return htmlspecialchars($data);
        }
        if (is_array($data)) {
            foreach ($data as $key => $value) {
                $data[$key] = self::htmlEscapeData($value);
            }
        }
        return $data;
    }

    /**
     * Strip new lines and tabs
     * What?! You say. XHP taught me that regex is not that heavy and definitely not the bottleneck
     * Kean: Please don't change the logic without seeing me
     * 
     * @return cool stuff
     */
    public static function minifyHtml($html)
    {
        return preg_replace('/\s{2,}/', ' ', $html);
    }

    public static function setResourceMap($resourceMap)
    {
        self::$resourceMap = $resourceMap;
    }

    public static function getResourceMap()
    {
        return self::$resourceMap;
    }
    public static function setResourceDatabase($resourceDatabase)
    {
        self::$resourceDatabase = $resourceDatabase;
    }

    public static function getResourceDatabase()
    {
        return self::$resourceDatabase;
    }

}

<?php

/**
 * Description of PageView
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

class PageView extends \Lovecom\Mvc\BaseView
{
    
    protected $resourceMap;

    protected function doInit()
    {
        $this->resourceMap = namespace\MvcHelper::getResourceMap();
    }

    protected function getTitle()
    {
        return 'Love.com';
    }

    /**
     * getHead
     * 
     * Called right after the View is constructed
     * doView should be the only function that prints anything
     * All the other helper functions should return a string and get printed here
     * 
     * @return a string that will be set as the page's <head> content
     */
    protected function getHead()
    {
        $title = $this->getTitle();

        $meta = $this->getMeta();

        $global = '';
        if (isset($this->resourceMap['_global']['css'])) {
            $css_array = $this->resourceMap['_global']['css'];
            foreach ($css_array as $url) {
                $global .= <<<LINK
<link id="css_$url" rel="stylesheet" type="text/css" href="$url" media="all" data-scope="global" />
LINK;
            }
        }

        $css = '';
        $class = $this->getAdditionalStaticFileKey(); 
        if (isset($this->resourceMap[$class]['css'])) {
            $css_array = $this->resourceMap[$class]['css'];
            foreach ($css_array as $url) {
                $css .= <<<LINK
<link id="css_$url" rel="stylesheet" type="text/css" href="$url" media="all" data-scope="content" />
LINK;
            }
        }

        return <<<HTML
{$meta}<title>{$title}</title>{$global}{$css}
HTML;
    }
    
    public function getAdditionalStaticFileKey()
    {
        return get_class($this); 
    }

    protected function getMeta()
    {
        $meta = '';
        $metaArray = $this->getMetaData();
        foreach ($metaArray as $key => $value) {
            $key = htmlspecialchars($key);
            $value = htmlspecialchars($value);
            $meta .= <<<META
<meta name="$key" content="$value" />
META;
        }
        return <<<META
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
{$meta}
META;
    }

    protected function getMetaData()
    {
        return array();
    }

    protected function getScript()
    {
        $global = '';

        if (isset($this->resourceMap['_global']['js'])) {
            $js_array = $this->resourceMap['_global']['js'];
            foreach ($js_array as $url) {
                $global .= "<script src=\"$url\"></script>\n";
            }
        }

        $js = '';
        $class = $this->getAdditionalStaticFileKey(); 
        if (isset($this->resourceMap[$class]['js'])) {
            $js_array = $this->resourceMap[$class]['js'];
            foreach ($js_array as $url) {
                $js .= "<script src=\"$url\"></script>\n";
            }
        }
        
        $pageJs = $this->getInitScript();
        if($pageJs === null)
        {
            $pageJs = "{}";
        }
        
        return <<<SCRIPT
{$global}{$js}
<script>
C('global');
$(function() {
    C.global.pageObject = $pageJs;
    if(typeof C.global.pageObject.postConstruct == 'function') {
        C.global.pageObject.postConstruct();
    }
});
</script>
<noscript>
    
</noscript>
SCRIPT;
    }
    
    protected function getInitScript()
    {
        return null;
    }
            

    public function render()
    {
        $head = $this->getHead();
        $body = $this->getBody();
        $script = $this->getScript(); 

        $server = php_uname("n");
        print <<<HTML
<!DOCTYPE html>
<html lang="en">
    <!--  $server --><head>{$head}</head><body>{$body}{$script}</body>
</html>
HTML;
    }

   

    protected function getActiveNavigationItem()
    {
        return NULL;
    }

    protected function getBody()
    {
        $content = $this->doContent();
       
        return <<<HTML

<header id="header">
    
</header>

<article>
    {$content}
</article>

<footer class="footer">
  <div class="container">
    <p>&copy; Love.com 2012</p>
  </div>
</footer>

HTML;
    }

    protected function doContent()
    {
        if (get_class($this) == __CLASS__) {
            return "Page not found.";
        }
        return "";
    }
}

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

class PageView extends BaseView
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
CC('global');
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
        if($this->response->getRedirect() != null)
        {
            $redirect = $this->response->getRedirect(); 
            $redirectHttpResponseCode = $this->response->getRedirectHttpResponseCode(); 
            header('Location: ' . $redirect, true, $redirectHttpResponseCode);
            return;
        }
        
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
        $header = $this->getBodyHeader(); 
        return <<<HTML


{$header}
<article>
    {$content}
</article>

<footer class="footer">
  <div class="container">
    <p>&copy; Love.com 2013</p>
  </div>
</footer>

HTML;
    }
    
    protected function getBodyHeader()
    {
        $title = $this->getTitle(); 
        return <<<HTML
<!-- NAVBAR ================================================== -->
<header class="navbar-wrapper">
  <!-- Wrap the .navbar in .container to center it within the absolutely positioned parent. -->
  <div class="container">

    <div class="navbar navbar-inverse">
      <div class="navbar-inner">
        <!-- Responsive Navbar Part 1: Button for triggering responsive navbar (not covered in tutorial). Include responsive CSS to utilize. -->
        <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="brand" href="/">{$title}</a>
        <!-- Responsive Navbar Part 2: Place all navbar contents you want collapsed withing .navbar-collapse.collapse. -->
        <div class="nav-collapse collapse">
          <p class="navbar-text pull-right">
            <a href="/myaccount" class="navbar-link">My Account</a>
          </p>
          <ul class="nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
            <!-- Read about Bootstrap dropdowns at http://twitter.github.com/bootstrap/javascript.html#dropdowns -->
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li class="nav-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div><!-- /.navbar-inner -->
    </div><!-- /.navbar -->

  </div> <!-- /.container -->
</header><!-- /.navbar-wrapper -->
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

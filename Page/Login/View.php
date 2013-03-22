<?php

/**
 * Description of View
 *
 * @author      ben <ben@chegg.com>
 * @copyright   2013 Chegg INC
 * @link        http://mkp.chegg.com
 * @license     http://mkp.chegg.com/license
 * @version     1.0.0
 * @package     Msportal
 *
 */

namespace Lovecom\Page\Login;

class View extends \Lovecom\Mvc\PageView
{

    protected function getBodyHeader()
    {
        return '';
    }
    protected function doContent()
    {
        $params = $this->response->get('loginParams'); 
        $p = ''; 
        if(!empty($params))
        {
            $p = '?'.http_build_query($params); 
        }
        return <<<HTML
<div class="container">
    <form class="form-signin" action="/login/{$p}" method="post">
      <h2 class="form-signin-heading">Please sign in</h2>
      <input type="text" class="input-block-level" placeholder="Email address" name="username" />
      <input type="password" class="input-block-level" placeholder="Password" name="password"/ >
      <label class="checkbox">
        <input type="checkbox" value="remember-me" name="remember"> Remember me
      </label>
      <button class="btn btn-large btn-primary" type="submit">Sign in</button>
    </form>

</div> <!-- /container -->
HTML;
    }
}
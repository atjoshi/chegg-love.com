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
namespace Lovecom\Page\Lovebutton;

class View extends \Lovecom\Mvc\PageView
{
    protected function getInitScript()
    {
        return 'new C.Page.Lovebutton()';
    }
    protected function getBody()
    {
        return <<<HTML
<div style="margin-left:-20px">
    <button class="btn btn-danger btn-small" data-action="love" type="button" data-loveid="47500">Love&nbsp;&nbsp;&nbsp;<span class="icon-heart"></span></button>
    <button class="btn btn-success btn-small" data-action="loved" type="button" style="display:none;">Loved&nbsp;&nbsp;&nbsp;<span class="icon-heart"></span></button>
</div>
HTML;
        
    }
}
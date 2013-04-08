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

namespace Lovecom\Page\Myaccount;

class View extends \Lovecom\Mvc\PageView
{

    protected function doContent()
    {
        $left = $this->getLeftNav(); 
        $right = $this->getCharities(); 
        return <<<HTML
<div class="container">
    <div class="row-fluid">
        <div class="span3">
        {$left}  
        </div>
        <div class="span9">
        {$right}
        </div>
    </div>
</div>
HTML;
    }
    protected function getLeftNav(){
        
        return <<<HTML
<form class="form-search">
  <div class="input-append">
    <input type="text" class="span12" placeholder="search">
    <span class="add-on"><i class="icon-search"></i></span>
  </div>
</form>
<div class="row-fluid">
  <div class="span3">
        <img src="/s/myaccount/img/natalia.png" />
  </div>
  <div class="span9">
        <h5>Natalia</h5>
        <p class="muted">edit profile</p>
  </div>
</div>
<br/>
<p class="muted nav-header1">LOVE THIS MONTH</p>
<div class="row-fluid">
        <div class="span10 offset2">
            <p class="nav-body">134 love button clicks</p>
            <p class="nav-body">12 charities loved</p>
            <p class="nav-body">120 givers influenced</p>
        </div>
</div>
<br/>
<p class="muted nav-header1">LOVE SHARED</p>
<div class="row-fluid">
        <div class="span10 offset2">
            <p class="nav-body">1,398 total clicks</p>
            <p class="nav-body">15 charities loved</p>
            <p class="nav-body">247 givers influenced</p>
        </div>
</div>
<br/>
<p class="muted nav-header1">LOVE SHOP</p>
<div class="row-fluid">
        <div class="span10 offset2">
            <p class="nav-body">642 love clicks credit</p>
        </div>
</div>
<br/>
<p class="muted nav-header1">CHARITIES</p>
<div class="row-fluid">
        <div class="span10 offset2">
            <p class="nav-body">The Naked Heart Found...</p>
            <p class="nav-body">The World Wildlife Fund</p>
            <p class="nav-body">Oxfam</p>
            <p class="nav-body">More...</p>
        </div>
</div>
<br/>
<p class="muted nav-header1">ACCOUNT SETTING</p>
<div class="row-fluid">
        <div class="span10 offset2">
            <p class="nav-body">Edit settings</p>
            <p class="nav-body">Edit profile</p>
        </div>
</div>
HTML;
    } 
    protected function getCharities(){
        $html = ''; 
        $html .= $this->getHrow('/s/myaccount/img/nike.png', 'You clicked a love button on <a href="">nike.com<a> so <a href="">Nike</a> will send love to <a href="">The Naked Heart Foundation</a>.', true); 
        $html .= $this->getHrow('/s/myaccount/img/nake.png', 'You changed your favourite charity to <a href="">The Naked Heart Foundation</a>. All your love button clicked will go to this charity (except for sponsored love buttons on charity sites).', true); 
        $html .= $this->getHrow('/s/myaccount/img/wildlife.png', 'Your current favourite charity, <a href="">The World Wildlife fund</a>, receives it\'s highest proportion of love (<a href="">17%</a> this month) from <a href="">The Body Shop</a>.'); 
        $html .= $this->getHrow('/s/myaccount/img/coco.png', 'Last month you clicked a <a href="">Coca Cola</a> love button that contributed to them donating <a href="">$5,345</a> to <a href="">The Fresh Water for Africa Fund. Thanks!</a>'); 
        $html .= $this->getHrow('/s/myaccount/img/pepsi.png', 'You clicked a love button on <a href="">pepsi.com</a> so <a href="">Pepsi</a> will send love to <a href="">Oxfam</a>. <a href="">Good on you!</a>', true); 
        $html .= $this->getHrow('/s/myaccount/img/greenpeace.png', 'A charity you direct love to, <a href="">Greenpeace</a>, received <a href="">8,704 love button clickes</a> yesterday, on <a href="">45 different givers\'</a> sites.'); 
        $html .= $this->getHrow('/s/myaccount/img/swatch.png', '<a href="">Love.com</a> is pleased to announce that <a href="">swatch</a> have donated 1,000 limited edition <a href="">Love Swatches</a> to the <a href="">Love Shop.</a> Check them out new and remember to use your <a href="">love clicks</a> to receive a great discount. Click <a href="">here</a> to open the <a href="">Love Shop</a>'); 
        $html .= $this->getHrow('/s/myaccount/img/mcdonalds.png', 'Last month <a href="">McDonalds</a> donated <strong>$23,023,897</strong> world-wide through <a href="">Love.com</a>. That is a lot of love!'); 
        return <<<HTML
<div class="v-border">
        <div class="h-border">
            <div class="row-fluid">
                <p class="pull-left nav-header1 muted">
                    LOVE ACTION
                </p>
                <p class="pull-right nav-header1 muted">
                    Hide extra details
                </p>
            </div>
        </div>
        {$html}
        <div class="h-border">
            <a href="" class="load-more">LOAD MORE...</a>
        </div>
</div>
HTML;
    }
    protected function getHrow($img, $title, $hasEdit = false){
        $editHtml = ''; 
        if($hasEdit){
            $editHtml = '<p class="muted">Edit charity settings - Share on Facebook - Twitter</p>';
        }
        return <<<HTML
 <div class="h-border">
    <div class="row-fluid">
        <div class="span1">
            <img src="{$img}" />
        </div>
        <div class="span11">
            <p class="body-txt">{$title}</p>{$editHtml}
        </div>
    </div>
</div>
HTML;
    }

}
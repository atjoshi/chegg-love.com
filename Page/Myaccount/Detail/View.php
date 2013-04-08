<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of View
 *
 * @author gavin
 */
namespace Lovecom\Page\Myaccount\Detail;

class View extends \Lovecom\Mvc\PageView{
    protected function doContent()
    {
        $left = $this->getLeftNav(); 
        $right = $this->getCharity(); 
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
<br/>
        <div style="text-align:center;">
        <img src="/s/myaccount/img/nakedheart.png" style="width:200px" />
        </div>
<br/>
<div>
        <a href="" class="load-more">SET AS FAVOURITE</a>
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
<p class="muted nav-header1">LOVE RECEIVED</p>
<div class="row-fluid">
        <div class="span10 offset2">
            <p class="nav-body">$34,564 in April</p>
            <p class="nav-body">$189,231 this year</p>
            <p class="nav-body">14,201,234 all time love</p>
        </div>
</div>
<br/>
<p class="muted nav-header1">BGGEST GIVERS</p>
<div class="row-fluid">
        <div class="span10 offset2">
            <p class="nav-body">Louis Vuitton</p>
            <p class="nav-body">Guerlain</p>
            <p class="nav-body">BMW Russia</p>
            <p class="nav-body">De Beers</p>
            <p class="nav-body">Christie's</p>
            <p class="nav-body">Salans</p>
            <p class="nav-body">Clifford Chance</p>
            <p class="nav-body">Weiser LLP</p>
            <p class="nav-body">Thompson Family Found...</p>
            <p class="nav-body">Centro</p>
            <p class="nav-body">More ...</p>
            
        </div>
</div>

HTML;
    }
    protected function getCharity(){
        return <<<HTML
<div class="v-border">
        <div class="h-border">
            <div class="row-fluid">
                <p class="pull-left nav-header1">
                    <strong>The Naked Heart Foundation</strong>
                </p>
                <p class="pull-right nav-header1">
                    Set as Favourite - Donate Now
                </p>
            </div>
        </div>
        <div class="h-border">
            <div class="row-fluid">
                <p class="pull-left nav-header1 muted">
                    ABOUT&nbsp;&nbsp;-&nbsp;&nbsp;EDUCATION&nbsp;&nbsp;-&nbsp;&nbsp;SUPPORTERS&nbsp;&nbsp;-&nbsp;&nbsp;CONTACT
                </p>
                <p class="pull-right nav-header1">
                    Website - Facebook
                </p>
            </div>
        </div>
        <div class="d-border">
        <p>We put smiles on children's faces throughout Russia. We support families raising children with disabilities</p>
        <p><img src="/s/myaccount/img/every_child_family.jpg" style="width:100%" /></p>
        <p>Our mission is to ensure that every child has the two things they need for a happy., fulfuilling childhood - a loving
        family and a safe and stimulating place to play. </p>
        <p>We work with Russian play park manufacturer KSIL to build our play parks at a discount (KSIL is an internationally respected playground manufacturer with over 30 years’ experience).
KSIL works with local subcontractors to construct the play park over a period of eight weeks.
We surround each play facility with a secure fence to protect the children from threats and dangers.</p>
        <p><a href="">&#62;&#62;&#62; What we're doing</a></p>
        <p>We visit our play parks regularly to ensure they are well maintained and kept secure.
We also ask parents, children and local children’s organisations to report back to us if they observe any vandalism, misuse of or damage to the play facility.
If a play park is not maintained adequately by our local partner, we reserve the right to relocate it.</p>
        <p><a href="">&#62;&#62;&#62; What we're doing</a></p>
        <p>We fund projects run by Russian non-profit organisations that work with children with special needs and their families and children from socially at-risk groups, and provide them with psychological, legal, medical and social support.</p>
        <p>Applications to take part in the programme are received and reviewed on either a competitive or a non-competitive basis.</p>
        <p>An Expert Committee evaluates the projects included in the programme and provides consultation on issues relating to the programme’s strategic development. The Committee is composed of leading Russian specialists that work in the field of child development and support families with special needs.</p>
        <p>It consists of three expert organisations and two independent experts. The Foundation’s Expert Committee is a key element in the Every Child Deserves a Family programme.</p>
        <p><a href="">&#62;&#62;&#62; You can help too!</a></p>
        </div>
</div>
HTML;
    }
}

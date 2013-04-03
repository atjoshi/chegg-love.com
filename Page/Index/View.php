<?php

/**
 * Description of View
 *
 * @author      ben <ben@chegg.com>
 * @copyright   2013 Chegg INC
 * @link        http://mkp.chegg.com
 * @license     http://mkp.chegg.com/license
 * @version     1.0.0
 * @package     Lovecom
 *
 */

namespace Lovecom\Page\Index;

class View extends \Lovecom\Mvc\PageView
{
    protected function getInitScript()
    {
        return 'new C.Page.Index()';
    }
    protected function doContent()
    {
        return <<<HTML
<!-- Carousel ================================================== -->
<div id="myCarousel" class="carousel slide">
  <div class="carousel-inner">
    <div class="item active">
      <img src="/s/index/images/s1.png" alt="">
      <div class="container">
        <div class="carousel-caption">
            <a href="#s1" class="lbtn-friends"></a>
        </div>
      </div>
    </div>
    <div class="item">
      <img src="/s/index/images/s2.png" alt="">
      <div class="container">
        <div class="carousel-caption">
          <a href="#s2" class="lbtn-education"></a>
        </div>
      </div>
    </div>
    <div class="item">
      <img src="/s/index/images/s3.png" alt="">
      <div class="container">
        <div class="carousel-caption">
          <a href="#s3" class="lbtn-water"></a>
        </div>
      </div>
    </div>
  </div>
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
</div><!-- /.carousel -->
<div class="desc-container">
    <div class="desc-item">
        <img id="s1" class="desc-img" src="/s/index/images/b1.png"/>
        <a href="#" class="top-link">Back Top</a>
    </div>
    <hr class="featurette-divider" />
    <div class="desc-item">
        <img class="desc-img" src="/s/index/images/b2.png"/>
        <a href="#" class="top-link">Back Top</a>
    </div>
    <hr class="featurette-divider" />
    <div class="desc-item">
        <img id="s2" class="desc-img" src="/s/index/images/b3.png"/>
        <a href="#" class="top-link">Back Top</a>
    </div>
    <hr class="featurette-divider" />
    <div class="desc-item">
        <img id="s3" class="desc-img" src="/s/index/images/b4.png"/>
        <a href="#" class="top-link">Back Top</a>
    </div>
    <hr class="featurette-divider" />
    <div class="desc-item">
        <img class="desc-img" src="/s/index/images/b5.png"/>
        <a href="#" class="top-link">Back Top</a>
    </div>
</div>
HTML;
    }
}

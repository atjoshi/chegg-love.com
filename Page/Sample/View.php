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

namespace Lovecom\Page\Sample;

class View extends \Lovecom\Mvc\BaseView{
    protected function doInit()
    {
        
    }

    public function render()
    {
        print <<<HTML

<!DOCTYPE html>
<html class="wf-active">
<!--  live-web06.prod2.cloud.cheggnet.com -->
<head>
	<meta name="format-detection" content="telephone=no">
				<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no" />
	<script type="text/javascript">var NREUMQ=NREUMQ||[];NREUMQ.push(["mark","firstbyte",new Date().getTime()]);</script>
<title>Chegg For Good | Chegg.com</title>
	<meta property="og:title" content="Chegg For Good | Chegg.com" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="http://www.chegg.com/cheggforgood" />
	<meta property="og:image" content="http://c.cheggcdn.com/s/_global/images/Chegg_75x75.png" />
	
	<link id="css_http://c.cheggcdn.com/_r/200db8991fadec31b49c6b3137aebcdc.css" rel="stylesheet" type="text/css" href="http://c.cheggcdn.com/_r/200db8991fadec31b49c6b3137aebcdc.css" media="all" data-scope="global" />
	<link id="css_http://c.cheggcdn.com/_r/79e5bb023a02b57693ffd8d95759e0bd.css" rel="stylesheet" type="text/css" href="http://c.cheggcdn.com/_r/79e5bb023a02b57693ffd8d95759e0bd.css" media="all" data-scope="content" />
<!--[if lt IE 9]>
<link rel="stylesheet" href="http://c.cheggcdn.com/s/_global/ie.css" />
<![endif]-->
	</head><body class="">
	<div class="chg-body">
		<div class="chg-root"></div>
		<div id="fb-root"></div>
		<div class="chg-header">
			
			<div class="chg-header-content">
				<span class="icn-menu-toggle hidden"></span>
				<a class="chg-logo" href="http://www.chegg.com/">Chegg</a>
				<a class="chg-home" href="http://www.chegg.com/"><span>Home</span></a>
				<div class="chg-header-search">
					<a id="header_autocomplete_submit" class="search-magnify-btn" href="#"><span class="icn-magnify">search</span></a>		
					<form class="chg-header-search-form" action="/search" onsubmit="return false">
						<input id="header_autocomplete" data-loggable="header-search" type="text" class="chg-header-search-input changed" name="search_by" placeholder="Search for book or course">
					</form>
				</div>
				<div class="chg-menu">
					<div><a class="chg-menu-item" data-noajax="data-noajax" href="http://www.chegg.com/homework-help/">Homework Help</a></div>
<div class="chg-hdr-orange"></div>
<div><a class="chg-menu-item" data-noajax="data-noajax" href="http://www.chegg.com/etextbooks/">eTextbooks</a></div>
<div class="chg-hdr-orange"></div>			<div><a class="chg-menu-item" rel="nofollow" href="http://site.chegg.com/login/">Sign In</a></div>
<div class="chg-hdr-orange"></div><div><a class="chg-menu-item" rel="nofollow" data-noajax="data-noajax" href="http://www.chegg.com/contactus/">Help</a></div><div class="chg-hdr-orange hide-with-cart"></div><div><a class="chg-cart-area chg-menu-item" rel="nofollow" data-noajax="data-noajax" href="http://site.chegg.com/shoppingcart/"><span class="chg-cart"></span><span class="chg-cart-count">--</span></a></div>
<div class="chg-hdr-orange hide-with-coupon"></div><div><a class="chg-hdr-coupon-area chg-menu-item"><span class="chg-hdr-coupon-icon"></span></a></div>
				</div>
			</div>
			<div class="chg-hdr-root"></div>
		</div>
		<div class="chg-container no-nav no-resize">
			<div class="chg-container-content">
				<div class="chg-nav">
					
				</div>
				<div class="chg-content">
					<div class="cfg-body">
<div class="txt-2-small global-breadcrumb">
	<a href="/">home</a> / chegg For good
</div>
<div class="row">
	<div class="col-8 col-first">
		<a id="top"></a>
		<img src="http://c.cheggcdn.com/s/cheggforgood/images/CFG_logo.png" />
		<p class="cfg-main">
			From planting a few trees (over 5 million and counting), to supporting student philanthropists that are leading the next generation of social entrepreneurs -- we are constantly looking for ways to do good in the world around us.
		</p>
		<p class="cfg-main">
			We are thankful to our employees, partners and student leaders that help us spread the good. Take a look at what we've been up to and see how you can get involved!
		</p>
	</div>
	<div class="col-4 col-last">
	<div style="background:url(/s/index/images/lovemessage2.png); width:239px; height:405px;position:relative;">
            <a href="#" id="love" style="background:url(/s/index/images/love1.png);width:211px;height:84px;position:absolute;top:276px;left:16px;"></a>
            <a href="#" id="loved" style="display:none;background:url(/s/index/images/love2.png);width:213px;height:79px;position:absolute;top:278px;left:18px;"></a>
        </div>
        
</div>
</div>
<div class="row">
	<div class="col-12 col-first col-last">
		<ul id="cfg-menu">
			<li onclick="window.location='#cfg-blog'" id="cfg-blog-li" class="link-body-bold"><a href="#cfg-blog">For Good Blog</a></li>
			<li onclick="window.location='#spotlights'" id="cfg-sat-li" class="link-body-bold"><a href="#spotlights">Spotlights around town</a></li>
			<li onclick="window.location='#section-four'" id="cfg-cc-li" class="link-body-bold"><a href="#section-four">"Are You The ONE?" Interns</a></li>
			<li onclick="window.location='#trees'" id="cfg-iaswt-li" class="link-body-bold"><a href="#trees">It all started with trees</a></li>
			<li onclick="window.location='#partners'" id="cfg-ofgp-li" class="link-body-bold"><a href="#partners">Our For Good Partners</a></li>
		</ul>
	</div>
</div>
<div class="row"  id="cfg-blog">
	<div class="col-12 col-first col-last">
		<div class="cfg-blog">
			<span class="txt-hdr-land">For good blog</span>
			<a class="link-body body-nav-padded" id="blog" href="http://blog.chegg.com/category/chegg-for-good/" target="_blank">See all &raquo;</a>
					<div class="cfg-blog-entry">
			<img class="alignnone size-full wp-image-7300" title="smll-blog-image" src="http://chegg.cdn.help.s3.amazonaws.com/wp-images/uploads/2012/08/smll-blog-image.png" alt="" width="200" height="135" />
			<p><span class="txt-small">2012-08-24 12:44:08</span> <a href="http://www.chegg.com/cheggforgood/blog/7286" target="_blank">Chegg for Good Supports Music Education</a></p>
			<p>&nbsp; As many of you may have heard, Chegg recently launched an exciting competition to award one lucky high school or college with an exclusive concert from Grammy Award winning artist Taylor Swift.  As if that wasn’t exciting enough, in honor of the partnership with Taylor, Chegg for Good has made a commitment to help [...]</p>
		</div>		<div class="cfg-blog-entry">
			<img class="alignnone size-medium wp-image-7146" src="http://chegg.cdn.help.s3.amazonaws.com/wp-images/uploads/2012/08/Shelby-post-300x201.jpg" alt="" width="300" height="201" />
			<p><span class="txt-small">2012-08-15 15:17:44</span> <a href="http://www.chegg.com/cheggforgood/blog/7144" target="_blank">How Zimbabwe Changed My Perspective on Education</a></p>
			<p>Reading about the Chegg for Good &amp; ONE trip and watching the videos of our awesome interns interacting with the children in Africa brought back so many wonderful memories from my trip last July. I was given the opportunity to visit Harare, Zimbabwe and surrounding cities for two weeks to serve at local orphanages, feeding [...]</p>
		</div>
		</div>
	</div>
</div>
<div class="row" id="spotlights">
	<div class="col-10 col-first">
		<h2 class="txt-hdr-land">Spotlights around town</h2>
	</div>
	<div class="col-2 col-last">
		<a href="#top" class="body-nav body-nav-white" data-noajax>Return to top &uArr;</a>
	</div>
</div>
<div class="row">
<div class="col-12 col-first col-last">
	<div class="cfg-sat-content">
		<img class="alignnone size-full wp-image-5967" title="MmofraTromBraceletPhoto_edit" src="http://chegg.cdn.help.s3.amazonaws.com/wp-images/uploads/2012/04/MmofraTromBraceletPhoto_edit1.png" alt="" width="215" height="169" />
<p>&nbsp;
		<h3 class="txt-hdr-sec">The Mmofra Trom Bead Project</h3>
		<h4 class="txt-body-bold">Student Spotlight: What YOU, our students, are up to!</h4>
		<p>I came to Bentley University in the fall of 2010 as a Freshman with a whole slew of other people. At that point in time, I had no idea that four months later my life would be changed forever by a  trip to Ghana, in Western Africa.  If you had told me in the fall [...]<a href="http://www.chegg.com/cheggforgood/blog/5935" target="_blank" class="link-body">Read more.</a></p>
	</div>
</div>
</div><div class="row">
<div class="col-12 col-first col-last">
	<div class="cfg-sat-content">
		<img class="aligncenter size-full wp-image-6675" title="Interns Volunteering_small" src="http://chegg.cdn.help.s3.amazonaws.com/wp-images/uploads/2012/07/Interns-Volunteering_small.png" alt="" width="200" height="135" />
		<h3 class="txt-hdr-sec">Chegg Interns and Employees Build Homes in Silicon Valley</h3>
		<h4 class="txt-body-bold">Employee Spotlight: What our Cheggsters are up to!</h4>
		<p>From employees planting trees in Pasadena to supporting student philanthropists as they travel to Africa, Chegg For Good has been busy. Last Thursday, we did some good a little closer to home: Chegg summer interns and employees joined Habitat For Humanity Silicon Valley at a project site in Cupertino. The site will house 4 families who meet the needs [...]<a href="http://www.chegg.com/cheggforgood/blog/6665" target="_blank" class="link-body">Read more.</a></p>
	</div>
</div>
</div>
<div class="row" id="cfg-sat-share">
	<div class="col-1 col-first">&nbsp;</div>
	<div class="col-1"><img src="http://c.cheggcdn.com/s/cheggforgood/images/i-icon.png" height="65" width="65" /></div>
	<div class="col-7">
		<div class="cfg-sat-content">
			<p class="txt-hdr-sec">
				What are you doing on your campus to make a difference? Tell us your story, share your ideas, because we want to highlight all YOU are doing For
				Good right here! Email <a href="mailto:cheggforgood@chegg.com">cheggforgood@chegg.com</a>
			</p>
		</div>
	</div>
	<div class="col-3 col-last">&nbsp;</div>
</div>
<div class="row">
	<div class="col-10 col-first">
		<h2 class="txt-hdr-land">Meet our 2012 "Are You The ONE?" Interns</h2>
		<p class="txt-body">
			Thousands of US College Students applied for an internship in Africa sponsored by Chegg and ONE.
			Eight amazing finalist below will be representing US college students, traveling to Africa and advocating for change.
			Meet them and follow along in their adventures.
			<a target="_blank" class="link-body" href="https://www.facebook.com/chegg/app_289968001085872">Read more &raquo;</a>
		</p>
	</div>
	<div class="col-2 col-last">
		<a id="section-four" class="body-nav body-nav-gray" href="#top" data-noajax>Return to top &uArr;</a>
	</div>
</div>
 <div class="row">
	<div class="col-1 col-first">
	</div>
	<div class="col-11 col-last">
		<div class="cfg-sf-table clearfix" onclick="window.open('https://www.facebook.com/chegg/app_289968001085872','_blank');">
			<div class="student-one"><div class="student-hover">Ted Guerrero</div></div>
			<div class="student-two"><div class="student-hover">Catherine Lynn</div></div>
			<div class="student-three"><div class="student-hover">Nicole Zamostny</div></div>
			<div class="student-four"><div class="student-hover">Kiara Cerda</div></div>
			<div class="student-five"><div class="student-hover">Allyson Myers</div></div>
			<div class="student-six"><div class="student-hover">Fallon Frappier</div></div>
			<div class="student-seven"><div class="student-hover">James Townsend</div></div>
			<div class="student-eight"><div class="student-hover">Kamra Hakim</div></div>
			<div class="cfg-social-links">
					<div class="social-media">
		<iframe src="https://www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.facebook.com%2Fchegg&send=false&layout=button_count&width=85&show_faces=false&action=like&colorscheme=light&height=20" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:85px; height:20px;" allowTransparency="true"></iframe>
		<iframe allowtransparency="true" frameborder="0" scrolling="no" src="//platform.twitter.com/widgets/follow_button.html?screen_name=chegg&show_count=false" style="width:65px; height:20px;"></iframe>
		<div class="g-plusone" data-size="medium" data-annotation="none" data-href="http://www.chegg.com"></div>
	</div>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-10 col-first">
		<h2 class="txt-hdr-land">Where are all the TREES?!?</h2>
	</div>
	<div class="col-2 col-last">
		<a id="trees" class="body-nav body-nav-white" href="#top" data-noajax>Return to top &uArr;</a>
	</div>
</div>
<div class="row">
	<div class="col-9 col-first">
		<p class="txt-body">Chegg has planted over 5 million trees through our partnership with American Forest Global ReLeaf Foundation! That is a lot of trees! From the San Juan National Forest to Pondicherry, India these new trees, planted worldwide, help regenerate areas damaged by wildfire, strengthen River Bounds, and restore wildlife habitats. Every quarter we fund critical reforestation projects that are improving the environment - so thank you, and we'll keep planting!</p>
	</div>
	<div class="col-3 col-last"></div>
</div>
<div class="row">
	<div class="col-12 col-first col-last">
		<div class="cfg-tree-images">
			<img class="alignnone size-medium wp-image-6846" title="Peru" src="http://chegg.cdn.help.s3.amazonaws.com/wp-images/uploads/2012/07/Peru-300x224.jpg" alt="" width="300" height="224" /><img class="alignnone size-medium wp-image-6822" title="California" src="http://chegg.cdn.help.s3.amazonaws.com/wp-images/uploads/2012/07/California-300x231.jpg" alt="" width="300" height="231" />
		</div>
	</div>
</div>
<div class="row">
	<div class="col-2 col-first">&nbsp;</div>
	<div class="col-10 col-last">
		<p class="txt-body" id="cfg-closer-look">Take a closer look at some of the most recent plantings <br />Chegg has sponsored! <a href="http://www.chegg.com/cheggforgood/trees">Learn more &raquo;</a></p>
	</div>
</div>
<div class="row">
	<div class="col-10 col-first">
		<h2 class="txt-hdr-land">Chegg Partners</h2>
	</div>
	<div class="col-2 col-last">
		<a href="#top" id="partners" class="body-nav" data-noajax>Return to top &uArr;</a>
	</div>
</div>
<div class="row">
	<div class="col-9 col-first">
		<p class="txt-body">
			Chegg for Good is about empowering students to be a catalyst for change on their campus, in their communities, and around the world.
			We strive to connect students with like-minded organizations to provide resources, tools, and opportunities to further those efforts towards social change.
			We are proud of our For Good partnerships and encourage you to reach out to learn more!
		</p>
		<p class="txt-body" style="margin-top:20px;margin-bottom:40px">Want to partner with Chegg for good? Let's talk: <a style="color:#159OD9" href="mailto:cheggforgood@chegg.com">cheggforgood@chegg.com</a>
	</div>
	<div class="col-3 col-last"></div>
</div>
<div class="row">
	<div class="col-12 col-first col-last">
		<div id="cfg-partnerships">
			<img src="http://c.cheggcdn.com/s/cheggforgood/images/logos_american_forests.png" />
			<img src="http://c.cheggcdn.com/s/cheggforgood/images/logos_ashoka.png" />
			<img src="http://c.cheggcdn.com/s/cheggforgood/images/logos_one.png" />
			<img src="http://c.cheggcdn.com/s/cheggforgood/images/logos_allstars.png" />
		</div>
	</div>
</div>
</div>
				</div>
			</div>
		</div>
		<div class="chg-footer">
			<div class="chg-footer-pattern">
			<div class="chg-footer-container">
			<nav>
			<div class="row chg-footer-nav">
				<div class="col-3 col-first">
						<h4>ABOUT CHEGG</h4>
<ul>
	<li><a href="http://www.chegg.com/mediacenter/" title="About Chegg">Media Center</a></li>
	<li><a href="http://www.chegg.com/cheggforgood/" title="Chegg For Good">Chegg For Good</a></li>
	<li><a rel="nofollow" href="http://www.chegg.com/privacypolicy/" title="Privacy Policy">Privacy Policy</a></li>
	<li><a rel="nofollow" href="http://www.chegg.com/privacypolicy/#california" title="Your CA Privacy Rights">Your CA Privacy Rights</a></li>
	<li><a rel="nofollow" href="http://www.chegg.com/termsofuse/" title="Terms of Use">Terms of Use</a></li>
	<li><a rel="nofollow" href="http://www.chegg.com/generalpolicies/" title="General Policies">General Policies</a></li>
	<li><a rel="nofollow" href="http://www.chegg.com/copyright/" title="Intellectual Property Rights">Intellectual Property Rights</a></li>
</ul>
				</div>
				<div class="col-3">
					<div class="footer-nav-blk">
						<h4>RESOURCES</h4>
					<ul>
						<li><a href="http://www.chegg.com/sitemap" title="Site Map">Site Map</a></li>
						<li><a href="http://www.chegg.com/mobile" title="Mobile" data-noajax="true" >Mobile</a></li>
						<li><a rel="nofollow" href="http://www.chegg.com/publishers" title="Publishers" data-noajax="true">Publishers</a></li>
						<li><a rel="nofollow" href="http://www.chegg.com/brandpartner" title="Brand Partners" data-noajax="true">Brand Partners</a></li>
						<li><a rel="nofollow" href="http://www.chegg.com/affiliatesignuppage/" title="Join Our Affiliate Program" data-noajax="true">Join Our Affiliate Program</a></li>
						<li><a rel="nofollow" href="http://preferences-mgr.truste.com/?pid=chegg01&aid=chegg_pub02&type=cheggdirect" target="_new" title="Advertising Choices" data-noajax>Advertising Choices</a></li>
					</ul>
						<h4 class="pub-resources">PUBLISHER PAGES</h4>
						<ul>
	<li><a href="http://www.chegg.com/mcgraw-hill" data-noajax="true" title="McGraw-Hill">McGraw-Hill</a></li>
	<li><a href="http://www.chegg.com/cengage" data-noajax="true" title="Cengage">Cengage</a></li>
	<li><a href="http://www.chegg.com/pearson" data-noajax="true" title="Pearson">Pearson</a></li>
	<li><a href="http://www.chegg.com/wiley" data-noajax="true" title="Wiley">Wiley</a></li>
</ul>
					</div>
				</div>
				<div class="col-3">
					<div class="footer-nav-blk">
						<h4>HELPFUL LINKS</h4>
					<ul>
						<li><a rel="nofollow" href="http://www.chegg.com/my/account/returnbooks">Return Your Books</a></li>
						<li><a href="http://www.chegg.com/etextbooks" title="eTextbooks" data-noajax="true" >eTextbooks</a></li>
						<li><a href="http://www.chegg.com/used-textbooks" title="Used Textbooks">Used Textbooks</a></li>
						<li><a href="http://www.chegg.com/cheap-textbooks" title="Cheap Textbooks">Cheap Textbooks</a></li>
						<li><a href="http://www.chegg.com/college-textbooks" title="College Textbooks">College Textbooks</a></li>
						<li><a href="http://www.chegg.com/sell-textbooks" title="Sell Textbooks" data-noajax="true" >Sell Textbooks</a></li>
						<li><a href="http://www.chegg.com/homework-help/" title="Homework Help" data-noajax="true" >Homework Help</a></li>
						<li><a href="http://www.chegg.com/chegg-coupon" title="Chegg Coupon">Chegg Coupon</a></li>
						<li><a href="http://www.chegg.com/homework-help/solutions-manual" data-noajax="true" >Solutions Manual</a></li>
					</ul>
					</div>
				</div>
				<div class="col-3 col-last">
					<div class="footer-nav-blk">
						<h4>COMPANY</h4>
<ul>
	<li><a rel="nofollow" href="http://www.chegg.com/managementteam/" title="Management">Management</a></li>
	<li><a href="http://blog.chegg.com/" title="Blog" data-noajax="true" >Blog</a></li>
	<li><a href="http://www.chegg.com/jobs/" title="Jobs">Jobs</a></li>
	<li><a rel="nofollow" href="http://www.chegg.com/contactus/" title="Customer Service" data-noajax="true" >Customer Service</a></li>
	<li><a rel="nofollow" href="&#109;&#97;&#105;&#108;&#116;&#111;&#58;&#100;&#97;&#110;&#108;&#114;&#64;&#99;&#104;&#101;&#103;&#103;&#46;&#99;&#111;&#109;" title="Give Us Feedback" data-noajax="true" >Give Us Feedback</a></li>
</ul>
					</div>
				</div>
			</div>
		</nav>
		<footer>
		<div class="row chg-footer-copyright">
			<div class="col-3 col-first">
				<div class="img-chg-plant-tree" title="Chegg Plants Trees">Chegg Plants Trees</div>
			</div>
			<div class="col-6 chg-copyright">
				<div class="chg-copyright-blk">
					<a rel="nofollow" href="http://www.paypal.com" title="PayPal" data-noajax="true" ><img src="http://c.cheggcdn.com/images/paypal_logo.gif" alt="PayPal" /></a>
					<a rel="nofollow" href="//privacy-policy.truste.com/click-with-confidence/wps/en/www.chegg.com/seal_m" title="TRUSTe online privacy certification" target="_blank" data-noajax="true" ><img width="200" style="border: none" src="http://c.cheggcdn.com/images/truste_seal_web.png" alt="TRUSTe online privacy certification"/></a>
					<a rel="nofollow" href="http://sanjose.bbb.org/business-reviews/Books-Retail-Store/Cheggcom-in-Santa-Clara-CA-238456" title="BBB" data-noajax="true" ><img src="http://c.cheggcdn.com/images/bbbseal1.gif" alt="BBB" /></a>
					<p>&#169; 2003-2013 Chegg Inc. All rights reserved.</p>
				</div>
			</div>
			<div class="col-3 col-last">
				<div title="Over 5 million trees planted" class="chg-mil-trees">Over 5 million trees planted</div>
			</div>
		</div>
	</footer>
</div>
			</div>
		</div>
	</div>
<script src="http://c.cheggcdn.com/_r/65015b6e3b6c424eea71cbb4dc34e96a.js"></script>
<script src="//s.btstatic.com/tag.js#site=ce4UWiM"></script>
<script src="//apis.google.com/js/plusone.js"></script>

<script src="http://c.cheggcdn.com/_r/2295115f4e5ff69ed69f812d55561784.js"></script>

<script>
C('global');
C.global.cachedJS['http://c.cheggcdn.com/_r/65015b6e3b6c424eea71cbb4dc34e96a.js'] = true;
C.global.cachedJS['//s.btstatic.com/tag.js#site=ce4UWiM'] = true;
C.global.cachedJS['//apis.google.com/js/plusone.js'] = true;
C.global.cachedJS['http://c.cheggcdn.com/_r/2295115f4e5ff69ed69f812d55561784.js'] = true;

C.global.csrfToken = '4e96367aa800375b64b857f3c93abfd0';
C.global.staticBaseUrl = 'http://c.cheggcdn.com/';
C.global.coversBaseUrl = 'https://a248.e.akamai.net/static.chegg.com/';
C.global.cheggSiteUrl = 'http://site.chegg.com/';
C.global.errorImage = 'https://a248.e.akamai.net/static.chegg.com/covers2/imagenalarge.gif'; 
C.global.liveSiteUrl = 'http://www.chegg.com/';
C.global.cookieDomain = '.chegg.com';
C.global.hasEverLoggedIn = '';
C.global.userId = '';
C.global.version = '2.0';

C('logger');
C.logger.loadTime=1364961046.93;
$(function() {
	C.global.pageObject = new C.page.cheggforgood({});
	if(typeof C.global.pageObject.postConstruct == 'function') {
		C.global.pageObject.postConstruct();
	}
	
					
});
// BrightTag requirement
$(window).load(function(){ $(window).trigger("navigatePage", [location.href, 'fresh']); });
var cheggPixel = new Image();
cheggPixel.src = 'http://www.chegg.com/_ajax/cheggpixel?js=1';
</script>
<noscript>
	<img src="http://www.chegg.com/_ajax/cheggpixel?ns=1" />
</noscript>
<script type="text/javascript">if(!NREUMQ.f){NREUMQ.f=function(){NREUMQ.push(["load",new Date().getTime()]);var e=document.createElement("script");e.type="text/javascript";e.src=(("http:"===document.location.protocol)?"http:":"https:")+"//"+"d1ros97qkrwjf5.cloudfront.net/42/eum/rum.js";document.body.appendChild(e);if(NREUMQ.a)NREUMQ.a();};NREUMQ.a=window.onload;window.onload=NREUMQ.f;};NREUMQ.push(["nrfj","beacon-1.newrelic.com","0788ceb48b","677809","blRWMEYCWBJUAUALDVcedxFHF1kMGgFcBwVeV1sWUwxZBR8=",0,1060,new Date().getTime(),"","","","",""]);</script>
<style>
.lovebutton{
    background: #dd6060 url(/s/sample/img/love1.png) no-repeat -9px -7px;
    height: 70px;
    border-radius: 10px;
    display: inline-block;
    width: 190px;
    border: 2px solid #cd4539;
    border-bottom: 5px solid #cd4539;
    border-right: 3px solid #cd4539;
}
.lovebutton2{
    background: #c7da5d url(/s/sample/img/love2.png) no-repeat -8px -2px;
    height: 70px;
    border-radius: 10px;
    display: inline-block;
    width: 190px;
    border: 2px solid #a9bc39;
    border-bottom: 5px solid #a9bc39;
    border-right: 3px solid #a9bc39;
}
.buttondiv{
    text-align: right;
}
</style>
<script src="/s/sample/sample.js"></script>
</body>
</html>
HTML;
    }
}
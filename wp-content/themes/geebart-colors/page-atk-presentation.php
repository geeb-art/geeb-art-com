<!DOCTYPE html>
<html>
<head>

	<title>The Story of Chris 'Geeb' Smith | An ATK Special Presentation</title>
  <link rel="icon" href="http://geebart.com/favicon.png" type="image/png"> 

  <!-- FACEBOOK OPEN GRAPH META -->
	<meta property="og:title" content="The Story of Chris 'Geeb' Smith | An ATK Special Presentation"/>
	<meta property="og:site_name" content="The Portfolio of Chris 'Geeb' Smith"/>
	<meta property="og:type" content="blog"/>
	<meta property="og:url" content="http://geebart.com/atk-presentation"/>
	<meta property="og:description" content="Witness the public presentation of ISU's 2014 Arts Technology Alumni Honoree, Chris 'Geeb' Smith.  Explore his interactive presentation and learn more about his career at Aisle Rocket Studios as the Lead Front-End Developer.  See him speak on Thursday, October 2nd in CVA 133.  Support ATK, bring friends and have fun."/>
	<meta property="og:image" content="http://geebart.com/wp-content/uploads/2014/09/atk-special-presentation-geeb.jpg"/>

  <!-- TWITTER CARDS -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:site" content="@theGreatGeeber">
  <meta name="twitter:creator" content="@theGreatGeeber">
  <meta name="twitter:title" content="The Story of Chris 'Geeb' Smith | An ATK Special Presentation">
  <meta name="twitter:description" content="Witness the public presentation of ISU's 2014 Arts Technology Alumni Honoree, Chris 'Geeb' Smith.  Explore his interactive presentation and learn more about his career at Aisle Rocket Studios as the Lead Front-End Developer.  See him speak on Thursday, October 2nd in CVA 133.  Support ATK, bring friends and have fun.">
  <meta name="twitter:image:src" content="http://geebart.com/wp-content/uploads/2014/09/atk-special-presentation-geeb.jpg">

	<link href="http://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="http://geebart.com/wp-content/themes/twentyfourteen/style.css">

  <?php
    $lowQuality = 0;
    if($_GET["quality"] == 'low'){
      $lowQuality = 1; 
    }
  ?>

	<style id="theme-styles">

  /* PRESENTATION STYLES */
  body{color:#333}
  #background-slider,#present{width:100%;height:100%;position:fixed;z-index:1}
  <?php
    if(!$lowQuality){
  ?>
    #background-slider{-webkit-filter:blur(4rem) brightness(60%);-moz-filter:blur(4rem) brightness(60%);filter:blur(4rem) brightness(60%)}
  <?php
    } else{
  ?>
    #background-slider{background: url('http://geebart.com/wp-content/uploads/2014/10/cookmore-chicago-cima-blur.jpg') no-repeat 50% 50% transparent;background-size:cover;}
  <?php
    }
  ?>
  #background-slider>ul,#background-slider>ul>li{position:absolute !important;float:left;width:100%;height:100%;left:0;top:0;background:50% 50% no-repeat transparent;background-size: cover;}
  #background-slider>ul>li{z-index:1 !important;opacity:0; -webkit-transition: opacity 12s ease-out;transition: opacity 12s ease-out;}
  #background-slider>ul>li.active{z-index:2 !important;opacity:1;visibility: visible;}
  #present{transform-style:preserve-3d;perspective:100rem;text-align:center;overflow:hidden;z-index:3;border-right:1px solid transparent;-webkit-transition:width .6s ease-out, background .6s ease-out;transition:width .6s ease-out, background .6s ease-out}
  #present-wrap.second-view #present{width:20%;background:rgba(0,0,0,.6);border-right:1px solid rgba(0,0,0,.6)}
  #present-wrap-2{position:fixed;height:100%;z-index:3}
  #present-nav,#page-headline{opacity:0; position:absolute;bottom:0;left:0;background:rgba(255,255,255,.1);z-index:4;width:20%;padding:0;-webkit-transform:translateY(100%);transform:translateY(100%);-webkit-transition:opacity .3s ease-out, -webkit-transform .3s ease-out;transition:opacity .3s ease-out, transform .3s ease-out;-webkit-transition-delay:0;transition-delay:0}
  #page-headline{padding:1rem 0;left:auto;bottom:auto;top:0;background:rgba(255,255,255,.6);-webkit-transform:translateY(-100%);transform:translateY(-100%)}
  #present-wrap.second-view #present-nav,#present-wrap.second-view #page-headline{opacity:1;-webkit-transform:translateY(0);transform:translateY(0);-webkit-transition-delay:.8s;transition-delay:.8s}
  #modal-close{position:fixed;right:0;top:0;width:auto;height:auto;line-height:2rem;padding:2rem;font-size:4rem;z-index:999999;opacity:0; -webkit-transform:translateY(-6rem);transform:translateY(-6rem);-webkit-transition:opacity .3s ease-out, -webkit-transform .3s ease-out;transition:opacity .3s ease-out, transform .3s ease-out;}
  #present-wrap.second-view #modal-close{opacity:1;-webkit-transform:translateY(0);transform:translateY(0)}
  #modal-close:hover{cursor:pointer;color:#FFF !important}
  #page-headline h1{text-align:center;font-size:1.8rem;padding:0 2rem;line-height:1;color:#222;margin:0 0 .5rem;font-weight:bold}
  #page-headline h2{font-size:1.68rem;text-align:center;color:#555;margin:0;padding:0 2rem;line-height:1;font-weight:normal}
  #present-nav h3{background:transparent;width:100%;position:absolute;left:0;bottom:0;font-size:1.4rem;text-align:center;line-height:1;height:100%;margin:0;padding:0;font-weight:normal;text-align:center}
  #present-nav h3>a{width:auto;height:100%;background:transparent;vertical-align:middle;float:none;display:inline-block;line-height:4rem;-webkit-box-shadow: 0 0 0;box-shadow: 0 0 0;padding:0 2rem}
  #present-nav>ul{position:relative}
  #present-nav>ul>li{width:auto;position:relative;z-index:1}
  #present-nav a{height:4rem;width:4rem;background:rgba(255,255,255,.1);-webkit-box-shadow:inset 0 0 2rem rgba(255,255,255,.1);box-shadow:inset 0 0 2rem rgba(255,255,255,.1);-webkit-transition:background .3s ease-out;transition:background .3s ease-out}
  #present-nav a:hover{cursor:pointer;background:rgba(255,255,255,.3)}
  #present-nav #nav-prev{float:left}
  #present-nav #nav-next{float:right}
  .window{position:relative;float:none;text-align:center;opacity:0;-webkit-transition:opacity .3s ease-out, -webkit-transform .3s ease-out;transition:opacity .3s ease-out, transform .3s ease-out;transform:translateZ(-720rem) translateX(0) translateY(-48rem);perspective:420rem;width:196rem;height:224rem}
  #present-wrap.active .window{opacity:1;transform:translateZ(-720rem) translateX(0) translateY(0)}
  .window>section{position:absolute;left:0;top:0}
  #group-top-wrap{height:56rem}
  #group-left-wrap{top:56rem;width:56rem}
  #group-bottom-wrap{top:auto;bottom:0;left:56rem}
  #group-right-wrap{top:auto;bottom:56rem;left:auto;right:0;width:56rem;height:84rem}
  #group-last-wrap{left:auto;top:auto;bottom:84rem;right:56rem;width:56rem;height:56rem}
  .cube{width:20rem;height:20rem;margin:4rem;padding:0;position:relative;-webkit-transition:background .3s ease-out, -webkit-transform .3s ease-out;transition:background .3s ease-out, transform .3s ease-out;transform-style:preserve-3d;transform:translateZ(-8rem) translateY(8rem);-webkit-box-shadow:0 0 8rem rgba(0,0,0,.8);box-shadow:0 0 8rem rgba(0,0,0,.8)}
  .cube.current{box-shadow:0 0 10rem rgba(255,255,255,1)}
  .cube>div{width:100%;height:100%;display:block;position:absolute;display:table;margin:0;padding:0;background-position:center center;left:0;top:0;bottom:0;right:0;background:#555;border-radius:2px;-webkit-transition:background .3s ease-out;transition:background .3s ease-out}
  .cube .front{transform:rotateY(0) translateZ(10rem);background:#777}
  .cube .back{transform:rotateX(180deg) translateZ(10rem)}
  .cube .right{transform:rotateY(90deg) translateZ(10rem)}
  .cube .left{transform:rotateY(-90deg) translateZ(10rem)}
  .cube .top{transform:rotateX(90deg) translateZ(10rem)}
  .cube .bottom{transform:rotateX(-90deg) translateZ(10rem)}
  .cube>div>div>div{float:none;height:auto;width:auto;vertical-align:middle;display:table-cell}
  .cube:hover{cursor:pointer}
  .cube.active>div{background:#AAA}
  .cube.active .front{background:#CCC}
  .cube.current>div,.cube:hover>div{background:#DDD}
  .cube.current .front,.cube:hover .front{background:#FFF}
  .group{width:28rem;height:56rem;position:static;transform-style:preserve-3d;-webkit-animation:flow-top 4s infinite;animation:flow-top 4s infinite}
  .group-top{float:right}
  .group-left{width:56rem;height:28rem}
  .group-bottom{height:56rem;width:28rem}
  .group-right{width:56rem;height:28rem}
  #present-modal{opacity:0; position:fixed;right:0;top:0;width:80%;height:100%;padding:6rem;-webkit-box-shadow:inset 0 0 14rem rgba(0,0,0,.6);box-shadow:inset 0 0 14rem rgba(0,0,0,.6);-webkit-transform:translateY(4rem);transform:translateY(4rem);-webkit-transition:opacity .6s ease-out .4s, -webkit-transform .6s ease-out .4s;transition:opacity .6s ease-out .4s, transform .6s ease-out .4s}
  #present-wrap.second-view #present-modal{opacity:1;-webkit-transform:translateY(0);transform:translateY(0);background:rgba(0,0,0,.2)}
  #present-modal>div{display:table;height:100%}
  #present-modal>div>div{display:table-cell;vertical-align:middle;float:none;text-align:center;position:relative}
  #present-modal>div>div>div{display:block;text-align:left;position:absolute;height:100%;left:0;top:0;z-index:1}
  #modals-wrap{color:#AAA}
  #modals-wrap>div{opacity:0;visibility: hidden; -webkit-transform:translateY(2rem);transform:translateY(2rem);-webkit-transition:visibility .3s ease-out, oapcity .3s ease-out, -webkit-transform .3s ease-out;transition:visibility .3s ease-out, opacity .3s ease-out, transform .3s ease-out}
  #modals-wrap>div.active{opacity:1;visibility:visible;-webkit-transform:translateY(0);transform:translateY(0);position:absolute;z-index:2;height:auto}
  #modals-wrap h2{color:#EEE;font-size:6rem;line-height:1;margin:0 0 2rem 0}
  #modals-wrap h3{color:#CCC;font-size:3.4rem;font-weight:normal;line-height:1.2;margin:0 0 6rem 0}
  #modals-wrap h4{font-size:2.4rem;line-height:1;margin:0 0 2rem 0}
  #modals-wrap p{color:#CCC;font-size:2.5rem;margin:0 0 2rem}
  #modals-wrap ul{margin:0 0 2rem}
  #modals-wrap ul>li{color:#CCC;font-size:2.5rem;list-style:square inside;margin:0 0 .5rem}
  #modals-wrap ul>li *,#modals-wrap p *,#modals-wrap blockquote *,#modal-wrap a *{color:#CCC;display:inline;width:auto;margin:0;padding:0;float:none}
  #modals-wrap a{font-weight:bold}
  #modals-wrap a:hover{cursor:pointer;color:#FFF !important}
  #modals-wrap blockquote{float:right;width:100%;background:transparent;margin:0;padding:0 0 0 4rem;quotes:"\201C""\201D""\2018""\2019";display:inline;color:#CCC;font-size:2.5rem;line-height:1.4}
  #modals-wrap blockquote.poem{margin:0 0 4rem;padding:0;width:auto;float:left}
  #modals-wrap blockquote>div{background:rgba(0,0,0,.6);float:left;width:100%;padding:4rem;-webkit-border-radius:2px;border-radius:2px;color:#DDD;border-left:.5rem solid rgba(0,0,0,.4);position:relative}
  #modals-wrap blockquote.poem>div{padding:4rem 4rem 6rem 6rem}
  #modals-wrap blockquote>div:before{color:#DDD;content:open-quote;font-size:9rem;line-height:0;margin-right:1rem;vertical-align:top;display:inline-block;float:none;width:auto;height:auto;position:relative;top:3rem}
  #modals-wrap blockquote>div:after{color:#CCC;content:close-quote;font-size:9rem;line-height:0;margin-left:1rem;vertical-align:top;display:inline-block;float:none;width:auto;position:relative;top:3.5rem;height:0}
  #modals-wrap blockquote.poem>div:before{position:absolute;left:0;top:0;line-height:1;margin:2rem;display:block}
  #modals-wrap blockquote.poem>div:after{position:absolute;top:auto;height:4rem;bottom:.5rem;left:0;line-height:1;margin:2rem;display:inline-block;vertical-align:baseline}
  #modals-wrap img{padding:0 2rem 0 0}
  #modals-wrap iframe{width:560px;margin:0 0 2rem;position: relative;z-index: 9;}
  #modals-wrap .lazy{opacity:0;}
  #modals-wrap img, #modals-wrap iframe{opacity:1;-webkit-transition: oapcity .6s ease-out;transition: opacity .6s ease-out}
  #group-19{position:absolute;bottom:0;left:0}
  #group-20{position:absolute;bottom:28rem;left:0}
  #group-21{position:absolute;left:0;top:0}
  #group-23{position:absolute;right:0;top:0}
  #group-24{position:absolute;left:0;top:0}
  #group-18 .cube:first-child,#group-24 .cube:first-child,#group-02 .cube:first-child,#group-04 .cube:first-child,#group-06 .cube:first-child{position:absolute;bottom:0;left:0}
  #group-18 .cube:last-child,#group-24 .cube:last-child,#group-02 .cube:last-child,#group-04 .cube:last-child,#group-06 .cube:last-child{position:absolute;top:0;left:0}
  #group-19 .cube:first-child,#group-21 .cube:first-child,#group-09 .cube:first-child,#group-11 .cube:first-child,#group-13 .cube:first-child{position:absolute;top:0;right:0}
  #group-19 .cube:last-child,#group-21 .cube:last-child,#group-21 .cube:last-child,#group-11 .cube:last-child,#group-13 .cube:last-child{position:absolute;top:0;left:0}
  #modals-wrap>#modal-44 h2,#modals-wrap>#modal-45 h2{margin-top:20rem}
  #social{width:auto;float:right;position:fixed;bottom:0;right:0;padding:0 0 1rem 0;z-index:99999}
  #social>*{float:left;width:auto !important;margin:0 0 0 1rem}
  #social>.twitter-tweet-button{max-width:9rem}
  #help{min-width: 6rem;text-align: right;position: absolute;right: 0;bottom: 100%;margin: 0;padding: 0;overflow: visible;font-size: 2rem;padding: 1rem;font-weight: bold;}
  #help h5{font-size: 2rem;margin: 0 0 .5rem;}
  #help p{font-size: 1.4rem;}
  #help a{text-decoration: underline;}
  #help a:hover{color: #FFF;}
  #help>div{text-align:left;visibility:hidden;opacity:0;position: absolute;bottom:100%;right: 0;min-width: 20rem;background: rgba(0,0,0,.2);border: 1px solid rgba(0,0,0,.2);padding: 1rem;margin: 0 1rem 0 0;-webkit-border-radius: 2px;border-radius: 2px;transform: translateY(-1rem);transform: translateY(-1rem);-webkit-transition: all .3s ease-out;transition: all .3s ease-out}
  #help:hover>div{visibility: visible;opacity: 1;transform: translateY(0);transform: translateY(0);}
  .group-top:nth-child(1){-webkit-animation-delay:.8s;animation-delay:.1s}
  .group-top:nth-child(2){-webkit-animation-delay:1.2s;animation-delay:.2s}
  .group-top:nth-child(3){-webkit-animation-delay:1.6s;animation-delay:.3s}
  .group-top:nth-child(4){-webkit-animation-delay:2s;animation-delay:.4s}
  .group-top:nth-child(5){-webkit-animation-delay:2.4s;animation-delay:.5s}
  .group-top:nth-child(6){-webkit-animation-delay:2.8s;animation-delay:.6s}
  .group-top:nth-child(7){-webkit-animation-delay:3.2s;animation-delay:.7s}
  .group-left:nth-child(1){-webkit-animation-delay:0;animation-delay:.1s}
  .group-left:nth-child(2){-webkit-animation-delay:.4s;animation-delay:.2s}
  .group-left:nth-child(3){-webkit-animation-delay:.8s;animation-delay:.3s}
  .group-left:nth-child(4){-webkit-animation-delay:1.2s;animation-delay:.4s}
  .group-left:nth-child(5){-webkit-animation-delay:1.6s;animation-delay:.5s}
  .group-left:nth-child(6){-webkit-animation-delay:2s;animation-delay:.6s}
  .group-bottom:nth-child(1){-webkit-animation-delay:2s;animation-delay:.1s}
  .group-bottom:nth-child(2){-webkit-animation-delay:2.4s;animation-delay:.2s}
  .group-bottom:nth-child(3){-webkit-animation-delay:2.8s;animation-delay:.3s}
  .group-bottom:nth-child(4){-webkit-animation-delay:3.2s;animation-delay:.4s}
  .group-bottom:nth-child(5){-webkit-animation-delay:3.6s;animation-delay:.5s}
  .group-bottom:nth-child(6){-webkit-animation-delay:4s;animation-delay:.6s}
  .group-right:nth-child(1){-webkit-animation-delay:.3.6s;animation-delay:.1s}
  .group-right:nth-child(2){-webkit-animation-delay:4s;animation-delay:.2s}
  .group-right:nth-child(3){-webkit-animation-delay:4.4s;animation-delay:.3s}
  .group-last:nth-child(1){-webkit-animation-delay:.4s;animation-delay:.1s}
  .group-last:nth-child(2){-webkit-animation-delay:4.4s;animation-delay:.2s}
  @-webkit-keyframes flow-top{0,100%{opacity:1;-webkit-transform:translateZ(4rem);transform:translateZ(4rem)}
  50%{opacity:.5;-webkit-transform:translateZ(-4rem);transform:translateZ(-4rem)}
  }
  @-moz-keyframes flow-top{0,100%{opacity:1;-webkit-transform:translateZ(4rem);transform:translateZ(4rem)}
  50%{opacity:.5;-webkit-transform:translateZ(-4rem);transform:translateZ(-4rem)}
  }
  @keyframes flow-top{0,100%{opacity:1;-webkit-transform:translateZ(4rem);transform:translateZ(4rem)}
  50%{opacity:.5;-webkit-transform:translateZ(-4rem);transform:translateZ(-4rem)}
  }
  #present-wrap.second-view .window{transform:translateZ(-920rem) !important}

  @media only screen and (max-width :980px){
    html{font-size:30px}
    #present,#social,#modal-close{display:none}
    #background-slider{-webkit-filter:blur(4rem) brightness(70%);-moz-filter:blur(4rem) brightness(70%);filter:blur(4rem) brightness(70%)}
    #page-headline,#present-nav,#present-modal{width:100% !important;opacity:1;-webkit-transform:translateY(0);transform:translateY(0)}
    #page-headline,#present-nav{position:fixed;width:100%;z-index:99999;background:#999 !important;-webkit-transition-delay:0 !important;transition-delay:0 !important}
    #present-nav{border-bottom:1px solid #000}
    #present-nav a{padding:2rem}
    #present-modal{background:rgba(0,0,0,.2)}
    #page-headline h1{font-size:2rem;text-align:left}
    #page-headline h2{font-size:1.8rem;text-align:left}
    #present-nav{background:#222 !important}
    #present-modal{position:relative;height:auto;width:100% !important;padding:9rem 2rem 4rem;margin-bottom:2rem;float:left;overflow:hidden}
    #modals-wrap *{float:left !important;display:block !important;width:100% !important;padding:0 !important}
    #modals-wrap li *,#modals-wrap p *, #modals-wrap blockquote>div *{width:auto !important;display:inline-block !important;float:none !important}
    #modals-wrap img{float:left !important;display:block !important;width:100% !important;margin:0 0 2rem !important;padding:0 !important;max-width:100% !important;height:auto !important}
    #modals-wrap h2{font-size:2.5rem;margin-bottom:1rem !important}
    #modals-wrap h3{font-size:1.8rem;margin-bottom:2.5rem !important;padding-bottom:2.5rem !important;border-bottom:1px solid #666}
    #modals-wrap h4{font-size:1.6rem;line-height:1.4}
    #modals-wrap p{font-size:1.4rem}
    #modals-wrap blockquote{font-size:1.6rem;padding:0 !important}
    #modals-wrap blockquote>div{padding:2rem !important}
    #modals-wrap blockquote>div:before,#modals-wrap blockquote>div:after{display:none !important}
    #modals-wrap ul>li{font-size:1.4rem;margin-bottom:1rem !important;list-style:square inside !important}
    #modals-wrap iframe{width:100% !important;margin:0 0 2rem !important;position: relative;z-index: 9;}
    #present-wrap-2{position:relative;z-index:9999}
    #present-modal>div,#present-modal>div>div{float:left;display:block;width:100%}
    #present-modal>div>div>div{position:absolute;left:0;top:0;float:left;width:100%;display:block;visibility:visible;-webkit-transition:visibility .3s ease-out, opacity .3s ease-out, -webkit-transform .3s ease-out;transition:visibility .3s ease-out, opacity .3s ease-out, transform .3s ease-out}
    #present-modal>div>div>div.active{position:relative}
    #modals-wrap>#modal-44 h2,#modals-wrap>#modal-45 h2{margin-top:0}
  }

</style>
</head>
<body class="classic use-fastclick">
	<section id="present-wrap">
			<div id="background-slider">
				<ul></ul>
			</div>
			<div id="present-wrap-2">
				<a id="modal-close" title="close-modal">&times;</a>
        <div id="social">
          <div id="help">
            ?
            <div>
              <h5>Need Help?</h5>
              <p>Try loading the <a href="http://geebart.com/atk-presentation?quality=low" title="Load the low quality version of this presentation">low quality version</a> of this page.</p>
            </div>
          </div>
          <div class="fb-like" data-href="http://geebart.com/atk-presentation" data-layout="button_count" data-action="like" data-show-faces="false" data-share="true"></div>
          <a href="https://twitter.com/share" class="twitter-share-button" data-url="http://geebart.com/atk-presentation" data-via="theGreatGeeber" data-hashtags="geebArt">Tweet</a>
          <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
        </div>
				<div id="page-headline">
					<h1>An ATK Special Presentation:</h1>
					<h2>The Story of Chris "Geeb" Smith</h2>
				</div>
				<nav id="present-nav">
					<ul>
						<h3><a href="http://geebart.com" target="_blank" title="Explore GeebArt.com">GeebArt.com</a></h3>
						<li id="nav-prev"><a title="Previous Slide"></a></li>
						<li id="nav-next"><a title="Next Slide"></a></li>
					</ul>
				</nav>
				<div id="present-modal">
					<div>
						<div id="modals-wrap">
							<div id="modal-1">
								<h2>Welcome</h2>
								<h3>Telling the story of Geeb</h3>
								<ul>
									<li>Find this presentation at <a href="http://geebart.com/atk-presentation" target="_blank" title="Follow Along!">geebart.com/atk-presentation</a>.  Feel free to follow along.</li>
									<li>Check out my site, <a href="http://geebart.com" target="_blank" title="Visit GeebArt!">geebart.com</a></li>
									<li>Friend me on Facebook at <a href="https://www.facebook.com/thegreatgeeber" target="_blank" title="Friend me on Facebook!">facebook.com/thegreatgeeber</a></li>
									<li>Add me on <a href="https://www.linkedin.com/pub/christopher-%22geeber%22-smith/28/73b/676" target="_blank" title="Geeb on LinkedIn">LinkedIn</a></li>
									<li>Send me an email at, <a href="mailto:thegreatgeeber@gmail.com" title="Email me!" target="_blank">thegreatgeeber@gmail.com</a></li>
									<li>Save questions for the end unless it has a short answer.</li>
									<li>Chat with me afterwards.  I'll be around all weekend.</li>
									<li>At the end of the presentation, I will detail my agenda for the next few days.</li>
                  <li>Enjoy!</li>
								</ul>
							</div>
							<div id="modal-2">
								<h2>Origins of Geeb</h2>
								<h3>The story behind the name</h3>
								<p style="width: 24%;">
									<a href="http://geebart.com/art/graphic-design/geeber" target="_blank"><img class="lazy" src="http://geebart.com/wp-content/themes/twentyfourteen/images/spacer_3x4.gif" data-original="http://geebart.com/wp-content/uploads/2011/05/geeber.jpg" alt="geeber" style="margin-top: 0;" /></a>
								</p>
								<blockquote style="width:76%">
									<div>
										It took me 6 years of college to realize that this nickname could have a significant impact on me as an artist and as a working professional.  I took it for granted for so long.  The idea of "Geeber" or "Geeb" eventually became more than just an family nickname&mdash;it is my brand.  The idea of "Geeb" will  evolve with me as I continue my career.
									</div>
								</blockquote>
							</div>
							<div id="modal-3">
								<h2>The Young Apprentice</h2>
								<h3>How I found my love for technology</h3>
								<ul>
									<li>Father as my teacher</li>
									<li>Designed my first level at 9 years old</li>
									<li>Helped build my first computer</li>
									<li><a href="http://en.wikipedia.org/wiki/Pie_in_the_Sky_(game_engine)" target="_blank" title="Pie in the Sky Wiki">Pie in the Sky</a> and the <a href="http://en.wikipedia.org/wiki/Game_creation_system" title="Game Creation System Wiki" target="_blank">Game Creation System</a></li>
									<li>Designing levels for Quake 1 on the <a href="http://www.amazon.com/Deathmatch-Maker-Editor-Authorized-Software/dp/B0007NE8IA" target="_blank" title="">Virtus Death Match Maker</a></li>
									<li>Half-life, Counter-Strike and the <a href="https://developer.valvesoftware.com/wiki/Valve_Hammer_Editor" target="_blank" title="Valve Hammer Editor">Valve Hammer Editor</a></li>
                  <li>LAN gaming</li>
                  <li>Borthers at testers</li>
								</ul>
							</div>
							<div id="modal-4">
								<h2>Geeb the Level Designer</h2>
								<h3>Designing levels for the BattleGrounds</h3>
                <p>
                  <a href="http://www.bgmod.com/" title="BattleGrounds Mod Official Website" target="_blank"><img class="lazy" style="width: 60%;float: left;" src="http://geebart.com/wp-content/themes/twentyfourteen/images/spacer_3x4.gif" data-original="http://geebart.com/wp-content/uploads/2014/09/bg-mod-screen.jpg" alt="BG Mod Website Image" /></a>
                  <iframe class="lazy" width="560" height="293" src="http://geebart.com/wp-content/themes/twentyfourteen/images/spacer_3x4.gif" data-original="http://www.youtube.com/embed/vge-nweS32o" frameborder="0" allowfullscreen style="width:40%;"></iframe>
                </p>
								<ul>
									<li>BattleGrounds (BG) mod released for free for Half-Life 1 and Half-Life 2</li>
                  <li>Most of my work was for BG 1</li>
                  <li>College eventually swayed me away from level design</li>
									<li>The BattleGrounds Website: <a href="http://www.bgmod.com/" target="_blank" title="The BattleGrounds Website">bgmod.com</a></li>
								</ul>
							</div>
							<div id="modal-5">
								<h2>Designer for Source</h2>
								<h3>Designing levels for the source game engine</h3>
								<p>
									<a href="http://geebart.com/art/level-design/bg_saratoga-bg2" target="_blank" title="bg_saratoga"><img class="lazy" src="http://geebart.com/wp-content/themes/twentyfourteen/images/spacer_3x4.gif" data-original="http://geebart.com/wp-content/uploads/2014/10/bg_saratoga_b70002.jpg" alt="bg_saratoga" style="width: 32.33%;padding: 0 2rem 0 0;margin: 0;" /></a>
									<a href="http://geebart.com/art/level-design/dod_flak-dods" target="_blank" title="dod_flak"><img class="lazy" src="http://geebart.com/wp-content/themes/twentyfourteen/images/spacer_3x4.gif" data-original="http://geebart.com/wp-content/uploads/2010/12/dod_abbey_b2_01_jpg.jpg" alt="dod_abbey" style="width: 32.33%;padding: 0 2rem 0 0;margin: 0;" /></a>
                  <a href="http://geebart.com/art/level-design/de_oregano-css" target="_blank" title="de_oregano"><img class="lazy" src="http://geebart.com/wp-content/themes/twentyfourteen/images/spacer_3x4.gif" data-original="http://geebart.com/wp-content/uploads/2014/10/de_oregano_f3_03.jpg" alt="de_organo" style="width: 32.33%;padding: 0 2rem 0 0;margin: 0;" /></a>
								</p>
								<ul>
									<li><a href="http://geebart.com/art/level-design/bg_saratoga-bg2" target="_blank" title="bg_saratoga">bg_saratoga</a></li>
									<li><a href="http://geebart.com/art/level-design/dod_abbey-dods" target="_blank" title="dod_abbey">dod_abbey</a></li>
                  <li><a href="http://geebart.com/art/level-design/de_oregano-css" target="_blank" title="de_oregano">de_oregano</a></li>
									<li><a href="http://geebart.com/art/level-design/dod_flak-dods" target="_blank" title="dod_flak">dod_flak</a></li>
								</ul>
							</div>
							<div id="modal-6">
								<h2>BattleGrounds in Retrospect</h2>
								<h3>A huge experience</h3>
                <p>
                  <a href="http://www.bgmod.com/" title="BattleGrounds Mod Official Website" target="_blank"><img class="lazy" src="http://geebart.com/wp-content/themes/twentyfourteen/images/spacer_3x4.gif" data-original="http://geebart.com/wp-content/uploads/2014/09/bg-mod-website.jpg" alt="BG Mod Website Image" /></a>
                </p>
								<ul>
									<li>Creative summers</li>
									<li>Worked with people from all over the world on a daily basis</li>
									<li>No contracts and no pay</li>
                  <li>We did this because we we loved it</li>
									<li>Greater community</li>
                  <li>Sense of purpose and belonging.</li>
									<li>First taste of fandom</li>
								</ul>
							</div>
							<div id="modal-7">
								<h2>Battling Crohn's Disease</h2>
								<h3>Sickness and despair</h3>
                <p style="width: 50%;">
                  <img class="lazy" src="http://geebart.com/wp-content/themes/twentyfourteen/images/spacer_3x4.gif" data-original="http://geebart.com/wp-content/uploads/2014/10/geeb-hospital.jpg" />
                </p>
								<ul>
                  <li>Gastrointestinal disease</li>
                  <li>Missguided and overactive immune system</li>
                  <li>Senior year of High School (2005)</li>
									<li>Friends, family and BattleGrounds community support</li>
									<li>Positive outlook and the drive to succeed</li>
									<li>Work hard, play hard</li>
								</ul>
							</div>
							<div id="modal-8">
								<h2>Getting Creative on Crohn's</h2>
								<h3>To Mr. IDGAS&mdash;The Crohn's Survivor who didn't Care</h3>
								<p>Download the full version, <a href="http://www.geebart.com/media/downloads/To%20Mr%20IDGAS.doc" target="_blank" title="To Mr. IDGAS&mdash;The Crohn's Survivor who didn't Care">"To Mr. IDGAS&mdash;The Crohn's Survivor who didn't Care"</a></p>
								<blockquote class="poem">
									<div>
										There I was.<br>
										A skeleton of a human being.<br>
										I was nothing&hellip;  Nobody.<br>
										"Chris Smith <strong>IS</strong> a generic person."<br>
										Just another careless high school kid.<br>
										I thought I always will be,<br>
										I thought I'd never be anything different from,<br>
										Naive, young, careless, conforming to the will&hellip;
									</div>
								</blockquote>
							</div>
							<div id="modal-9">
								<h2>Starting my College Career</h2>
								<h3>Liberation</h3>
								<p>
									<img class="lazy" src="http://geebart.com/wp-content/themes/twentyfourteen/images/spacer_3x4.gif" data-original="http://geebart.com/wp-content/uploads/2014/09/isu-dudes.jpg" alt="ISU Dudes" style="width:42%;margin:0 0 1rem"/>
								</p>
								<ul>
									<li>Social life went into overdrive.</li>
									<li>Crohn's wasn't going to stop me from having fun.</li>
									<li>A creative technologist who didn't know it yet.</li>
									<li>Started as a general education major and didn't know ATK existed.</li>
								</ul>
							</div>
							<div id="modal-10">
								<h2>Life in ATK</h2>
								<h3>Creative liberation</h3>
								<ul>
									<li>Lack of focus (good and bad)</li>
                  <li>Lots of experimentation</li>
									<li>Parents questioned everything</li>
									<li>Graduated wth some skills in a lot of different things</li>
									<li>Heat of the recession</li>
                  <li>I did not feel prepared</li>
                  <li>How do I market myself to businesses?</li>
                  <li>What are my most valuable skills?</li>
                  <li>What jobs did I qualify for?</li>
                  <li>Where do I find jobs?</li>
                  <li>What are the differences between big and small companies?</li>
									<li>Am I wasting my time?</li>
                  <li>Where do I belong?</li>
								</ul>
							</div>
							<div id="modal-11">
								<h2>Code as a Pillar</h2>
								<h3>Test Pattern, Sound Check</h3>
								<p style="width: 30%;float: left;">
									<img class="lazy" src="http://geebart.com/wp-content/themes/twentyfourteen/images/spacer_3x4.gif" data-original="http://geebart.com/wp-content/uploads/2010/12/code_as_pillar_01.jpg" alt="Code as a Pillar" style="width: 100%;margin: 0 0 2rem;padding: 0;">
								</p>
								<ul style="width: 70%; float:right; padding:0 0 0 4rem;">
									<li>First gallery show</li>
									<li>Large installation work</li>
									<li>First project with an actual budget</li>
									<li>Roughly 13 feet tall</li>
									<li>Four monitors at the base</li>
									<li>Hacked images that are made up of chapters of a story</li>
									<li>First time I seriously wrote about my work.</li>
									<li>Featured on the cover of the show's promo</li>
									<li><a href="http://geebart.com/art/installation/code-as-a-pillar" title="" target="_blank">Learn more about the project</a></li>
								</ul>
							</div>
							<div id="modal-12">
								<h2>For Inspiration:</h2>
								<h3>Visit ThisIsColossal.com</h3>
								<p>
									<a href="http://www.thisiscolossal.com" title="ThisIsColossal.com" target="_blank"><img class="lazy" src="http://geebart.com/wp-content/themes/twentyfourteen/images/spacer_3x4.gif" data-original="http://www.thisiscolossal.com/wp-content/themes/colossalv3/img/header-2014-jul-1200.jpg" alt="" /></a>
								</p>
								<ul>
									<li>I did not make this site, nor do I contribute to its content</li>
									<li>For real inspiration, check out <a href="http://www.thisiscolossal.com" target="_blank" title="visit this is colossal">thisiscolossal.com</a></li>
									<li>Large installation work</li>
									<li>Photography</li>
									<li>Street Art</li>
									<li>Video Art</li>
									<li>Architecture</li>
								</ul>
							</div>
							<div id="modal-13">
								<h2>Geeb Graduates</h2>
								<h3>The Recession was in full bloom</h3>
								<ul>
									<li>Felt unprepared and worried for my future</li>
									<li>Where will I work?</li>
									<li>What will I be doing?</li>
									<li>Will I be able to pay off my student loans?</li>
									<li>I have some skills, but where can I put them to use?</li>
                  <li>No one was hiring</li>
									<li>Grad school</li>
									<li>ISU vs. DePaul</li>
								</ul>
							</div>
							<div id="modal-14">
								<h2>The Gap by Ira Glass</h2>
								<h3>Graduating made me realize I wasn't good enough.</h3>
								<p>Taste usually comes before talent</p>
								<iframe class="lazy" src="http://geebart.com/wp-content/themes/twentyfourteen/images/spacer_3x4.gif" data-original="http://player.vimeo.com/video/85040589" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
							</div>
							<div id="modal-15">
								<h2>Life as an ATK Grad Student</h2>
								<h3>Creative rebirth</h3>
								<ul>
									<li>Extreme focus</li>
                  <li>Lots and lots and lots of projects</li>
									<li>Huge interest in web and video</li>
									<li>Big opportunities started to find me as much as I was making them</li>
                  <li>Started working in the CFA Dean's Office</li>
                  <li>More exposure to the classical arts</li>
                  <li>New friends in the community</li>
									<li>Wanting more out of my time at ISU</li>
								</ul>
							</div>
							<div id="modal-16">
								<h2>A Teacher's Assistant</h2>
								<h3>Teaching with the best</h3>
								<ul>
									<li>Aaron Paolucci</li>
									<li>Rick Valentin</li>
									<li>Learning how to teach</li>
									<li>Developing an eye for aesthetics</li>
                  <li>The power of critique</li>
                  <li>Putting my good taste to use</li>
                  <li>Improving my craft</li>
                  <li>Quality from quanity</li>
								</ul>
							</div>
							<div id="modal-17">
								<h2>Alumni Spectacular</h2>
								<h3>Working with Philippe Moore</h3>
								<ul>
									<li>Collaborative drawing</li>
									<li>60 second turns</li>
									<li><a href="http://geebart.com/art/video/45-minute-drawing-03" target="_blank" title="45 Minute Drawing #03">45 Minute Drawing #03</a></li>
								</ul>
								<iframe class="lazy" src="http://geebart.com/wp-content/themes/twentyfourteen/images/spacer_3x4.gif" data-original="http://player.vimeo.com/video/15108784" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
							</div>
							<div id="modal-18">
								<h2>Institutional Web Support Services</h2>
								<h3>First web design internship</h3>
								<ul>
									<li>Jacob DeGeal as a mentor</li>
									<li>WordPress</li>
									<li>Pitching work to clients</li>
									<li>Working for a client</li>
									<li>New relationships</li>
									<li><a href="http://maps.illinoisstate.edu/" title="ISU Maps" target="_blank">Google Maps</li>
                  <li><a href="http://geebart.com/professional/iwss/no-impact" title="No Impact Blog" target="_blank">No Impact Blog</a></li>
									<li><a href="http://search.illinoisstate.edu/" title="ISU Search" target="_blank">ISU Search</a></li>
								</ul>
							</div>
							<div id="modal-19">
								<h2>Katy and the Fucking Perrys (KFP)</h2>
								<h3>Following the band</h3>
								<p>
									<a href="http://geebart.com/art/graphic-design/poster-mayhem" title="Katy and the Fucking Perrys Posters" target="_blank"><img class="lazy" src="http://geebart.com/wp-content/themes/twentyfourteen/images/spacer_3x4.gif" data-original="http://geebart.com/wp-content/uploads/2011/04/posterMayhem.jpg" alt="" /></a>
								</p>
								<ul>
									<li>Cover band</li>
									<li>Band manager</li>
									<li>Find and book shows</li>
									<li>Handle venue owners</li>
									<li>Show photographer</li>
									<li>Show videographer</li>
									<li><a href="https://www.facebook.com/katyATFperrys" target="_blank" title="Like KFP on Facebook">Like KFP on Facebook</a></li>
								</ul>
							</div>
							<div id="modal-20">
								<h2>KFP - Videos</h2>
								<h4>Katy and the Fucking Perrys @ Blueline 3 (Shipping Up to Boston Cover)</h4>
								<iframe class="lazy" src="http://geebart.com/wp-content/themes/twentyfourteen/images/spacer_3x4.gif" data-original="http://player.vimeo.com/video/20441140" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen style="width:400px;height:225px;"></iframe>
								<h4>Katy and the Fucking Perrys @ Blueline 3 (Little Lion Man)</h4>
								<iframe class="lazy" src="http://geebart.com/wp-content/themes/twentyfourteen/images/spacer_3x4.gif" data-original="http://player.vimeo.com/video/20445783" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen style="width:400px;height:225px;"></iframe>
							</div>
							<div id="modal-21">
								<h2>KFP in Retrospect</h2>
								<h3>What I learned from the experience</h3>
								<ul>
									<li>Marketing campaigns</li>
									<li>Client relationships</li>
									<li>Graphic design and printing</li>
									<li>Social presence</li>
									<li>Live audio reinforcement</li>
									<li>Live recording</li>
									<li>Audio mastering</li>
									<li>Video capture and editing</li>
									<li>Living the mantra, "Work hard, play hard."</li>
								</ul>
							</div>
							<div id="modal-22">
								<h2>Geeb in Greece</h2>
								<h3>Jason Salavon in Post-Pop</h3>
								<p>
									<img class="lazy" src="http://geebart.com/wp-content/themes/twentyfourteen/images/spacer_3x4.gif" data-original="http://geebart.com/wp-content/uploads/2012/02/IMG_1981.jpg" alt="" style="width:293px; height:195px" />
									<img class="lazy" src="http://geebart.com/wp-content/themes/twentyfourteen/images/spacer_3x4.gif" data-original="http://geebart.com/wp-content/uploads/2012/02/IMG_2064.jpg" alt="" style="width:293px; height:195px" />
									<img class="lazy" src="http://geebart.com/wp-content/themes/twentyfourteen/images/spacer_3x4.gif" data-original="http://geebart.com/wp-content/uploads/2012/02/IMG_0142.jpg" alt="" style="width:293px; height:195px" />
								</p>
								<ul>
									<li>First paper as a grad student</li>
									<li>First time overseas</li>
									<li>Greece in chaos</li>
									<li>Presentation and speech skills</li>
									<li>Amazing experience</li>
									<li>2 years later, publication</li>
                  <li>Visual and Performing Arts [ISBN: 978-960-9549-65-3]</li>
									<li><a href="http://geebart.com/blog/greek-geeb-published" title="Greek Geeb" target="_blank">Learn more about the experience and read <a href="https://docs.google.com/document/d/1qwlb926j1CdiHUrh2WF9CHXeWKGu-TceLY0CpE07PDs/edit" title="Download Jason Salaon in Post-Pop" target="_blank">the paper</a>.</li>
								</ul>
							</div>
							<div id="modal-23">
								<h2>Blank Canvas</h2>
								<h3>Giving back to the community</h3>
								<p>
									<a href="http://geebart.com/professional/blank-canvas/wayc-blank-canvas-atk380" title="Blank Canvas Work" taget="_blank"><img class="lazy" src="http://geebart.com/wp-content/themes/twentyfourteen/images/spacer_3x4.gif" data-original="http://geebart.com/wp-content/uploads/2010/12/about_header.jpg" alt="" style="width:38%" /></a>
								</p>
								<ul>
									<li>First experience doing volunteer community work</li>
									<li>Helped run a tech summer camp</li>
									<li>Paid and non-paid work</li>
								</ul>
							</div>
							<div id="modal-24">
								<h2>Wordly Travels of Winston Brown</h2>
								<h3>Explore the familiar but micro-fantasical world of a small plastic bear.</h3>
								<p>
									<img class="lazy" src="http://geebart.com/wp-content/themes/twentyfourteen/images/spacer_3x4.gif" data-original="http://geebart.com/wp-content/uploads/2014/10/winston-brown-01.jpg" alt="" style="width: 22%;" />
									<img class="lazy" src="http://geebart.com/wp-content/themes/twentyfourteen/images/spacer_3x4.gif" data-original="http://geebart.com/wp-content/uploads/2014/10/winston-brown-02.jpg" alt="" style="width: 22%;" />
									<img class="lazy" src="http://geebart.com/wp-content/themes/twentyfourteen/images/spacer_3x4.gif" data-original="http://geebart.com/wp-content/uploads/2010/12/wb_013.jpg" alt="" style="width: 22%;" />
									<img class="lazy" src="http://geebart.com/wp-content/themes/twentyfourteen/images/spacer_3x4.gif" data-original="http://geebart.com/wp-content/uploads/2010/12/wb_018.jpg" alt="" style="width: 22%;" />
								</p>
								<ul>
									<li><a href="http://geebart.com/art/photography/the-worldly-travels-of-winston-brown-starved-rock-pt1" title="Winston Brown at Starved Rock" target="_blank">Winston Brown at Starved Rock</a></li>
									<li><a href="http://geebart.com/art/photography/the-worldly-travels-of-winston-brown-matthiessen-state-park-pt1" title="Winston Brown at Matthiessen State Park Pt. 1" target="_blank">Matthiessen State Park Pt. 1</a></li>
									<li><a href="http://geebart.com/art/photography/the-worldly-travels-of-winston-brown-matthiessen-pt-2" title="Winston Brown at Matthiessen State Park Pt. 2" target="_blank">Matthiessen State Park Pt. 2</a></li>
									<li><a href="http://geebart.com/art/photography/the-worldly-travels-of-winston-brown-matthiessen-state-park-pt-3" title="Winston Brown at Matthiessen State Park Pt. 3" target="_blank">Matthiessen State Park Pt. 3</a></li>
									<li><a href="http://geebart.com/art/photography/travels-of-wb-isu" title="Winston Brown at ISU" target="_blank">Winston Brown at ISU</a></li>
								</ul>
							</div>
							<div id="modal-25">
								<h2>Identity Reconnected</h2>
								<h3>Culminating Art Show of my ATK Career</h3>
								<p style="width:30%;">
									<a href="http://geebart.com/art/graphic-design/poster-identity-reconnected" target="_blank" title="Identity Reconnected Poster"><img class="lazy" src="http://geebart.com/wp-content/themes/twentyfourteen/images/spacer_3x4.gif" data-original="http://geebart.com/wp-content/uploads/2011/05/identity-reconnected_med.jpg" alt="" /></a>
								</p>
								<ul style="width:70%; padding:0 0 0 4rem;">
									<li>With Philippe Moore</li>
									<li>Won FOA grant</li>
									<li>Multimedia Art Show</li>
									<li>Rented own space</li>
									<li>Live music</li>
									<li>Participatory community art</li>
									<li>Free food and drink</li>
								</ul>
							</div>
							<div id="modal-26">
								<h2>TV Gods</h2>
								<h3>Identity Reconnected</h3>
								<p style="width:auto;">
									<a href="http://geebart.com/art/installation/tv-gods-identity-reconnected" target="_blank" title="Identity Reconnected Poster"><img class="lazy" src="http://geebart.com/wp-content/themes/twentyfourteen/images/spacer_3x4.gif" data-original="http://geebart.com/wp-content/uploads/2011/05/tvGods_01-400x266.jpg" alt="" /></a>
								</p>
								<p style="width:auto;">
									<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="400" height="225" data="http://www.flickr.com/apps/video/stewart.swf?v=71377" type="application/x-shockwave-flash"><param name="flashvars" value="intl_lang=en-us&amp;photo_secret=17902d1ed5&amp;photo_id=5704966523"><param name="movie" value="http://www.flickr.com/apps/video/stewart.swf?v=71377"><param name="bgcolor" value="#000000"><param name="allowFullScreen" value="true"><embed type="application/x-shockwave-flash" width="400" height="225" src="http://www.flickr.com/apps/video/stewart.swf?v=71377" flashvars="intl_lang=en-us&amp;photo_secret=17902d1ed5&amp;photo_id=5704966523" allowfullscreen="true" bgcolor="#000000"></object>
								</p>
							</div>
							<div id="modal-27">
								<h2>Baby Geniuses</h2>
								<h3>Identity Reconnected</h3>
								<p style="width:auto;width:auto;margin:0 2rem 2rem 0;">
									<a href="http://geebart.com/art/video/baby-geniuses" target="_blank" title="Identity Reconnected Baby Geniuses"><img class="lazy" src="http://geebart.com/wp-content/themes/twentyfourteen/images/spacer_3x4.gif" data-original="http://geebart.com/wp-content/uploads/2011/05/babyGeniusesLogo-200x174.jpg" alt="" /></a>
								</p>
								<p>	
									Check out <a href="http://www.imdb.com/chart/bottom" title="IMDB's Bottom 100" target="_blank">IMDB's Bottom 100.</a>
								</p>
								<p style="width:auto;margin:0 2rem 0 0;">
									<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="400" height="225" type="application/x-shockwave-flash" data="http://www.flickr.com/apps/video/stewart.swf?v=71377"><param name="flashvars" value="intl_lang=en-us&amp;photo_secret=fa743d304a&amp;photo_id=5705507022"><param name="movie" value="http://www.flickr.com/apps/video/stewart.swf?v=71377"><param name="bgcolor" value="#000000"><param name="allowFullScreen" value="true"><embed type="application/x-shockwave-flash" width="400" height="225" src="http://geebart.com/wp-content/themes/twentyfourteen/images/spacer_3x4.gif" data-original="http://www.flickr.com/apps/video/stewart.swf?v=71377" bgcolor="#000000" allowfullscreen="true" flashvars="intl_lang=en-us&amp;photo_secret=fa743d304a&amp;photo_id=5705507022"></object>
								</p>
								<p style="width:auto;">
									<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="400" height="225" type="application/x-shockwave-flash" data="http://www.flickr.com/apps/video/stewart.swf?v=71377"><param name="flashvars" value="intl_lang=en-us&amp;photo_secret=15c4497b46&amp;photo_id=5705510298"><param name="movie" value="http://www.flickr.com/apps/video/stewart.swf?v=71377"><param name="bgcolor" value="#000000"><param name="allowFullScreen" value="true"><embed type="application/x-shockwave-flash" width="400" height="225" src="http://www.flickr.com/apps/video/stewart.swf?v=71377" bgcolor="#000000" allowfullscreen="true" flashvars="intl_lang=en-us&amp;photo_secret=15c4497b46&amp;photo_id=5705510298"></object>
								</p>
							</div>
							<div id="modal-28">
								<h2>867 Herculean Tasks</h2>
								<h3>Identity Reconnected</h3>
								<iframe class="lazy" src="http://geebart.com/wp-content/themes/twentyfourteen/images/spacer_3x4.gif" data-original="http://player.vimeo.com/video/22757515" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
								<ul>
									<li>With hand-held camera, record the tasks of the day.</li>
									<li>Every task is cut down to .5 second clips per task, but is untouched before I leave my room in the morning and when I enter my room at the end of the work day.</li>
								</ul>
							</div>
							<div id="modal-29">
								<h2>Freelance</h2>
								<h3>Ninjatown.com</h3>
								<p style="width:50%;">
									<a href="http://www.ninjatown.com/" target="_blank" title="Ninjatown.com"><img class="lazy" src="http://geebart.com/wp-content/themes/twentyfourteen/images/spacer_3x4.gif" data-original="http://geebart.com/wp-content/uploads/2011/02/ninjatownSS01.jpg" alt="" /></a>
								</p>
								<ul style="width:50%; padding:0 0 0 4rem;">
									<li><a href="http://www.ninjatown.com/" title="Visit NinjaTown.com" target="_blank">NinjaTown.com</a></li>
									<li><a href="http://www.shawnimals.com/" title="Visit Shawnimals.com" target="_blank">Shawnimals</a></li>
									<li>Uncle, Shawn Smith</li>
									<li>WordPress</li>
									<li>Fun site, great design</li>
									<li>Thanks Unc!</li>
								</ul>
							</div>
							<div id="modal-30">
								<h2>Geeb Graduated a Second Time</h2>
								<h3>Masters of Science in Arts Technology</h3>
								<p>
									<a href="http://geebart.com/blog/2nd-graduation" target="_blank" title="Geeb's Second Graduation"><img class="lazy" src="http://geebart.com/wp-content/themes/twentyfourteen/images/spacer_3x4.gif" data-original="http://geebart.com/wp-content/uploads/2011/05/graduation.jpg" alt="" /></a>
								</p>
								<ul>
									<li>Focus on web design and development</li>
									<li>Freelance work</li>
									<li>New site, new brand identity</li>
								</ul>
							</div>							
							<div id="modal-31">
								<h2>Front-End Developer at ARS</h2>
								<h3>Geeb starts his career</h3>
								<p style="width:50%;">
									<a href="http://geebart.com/blog/front-end-developer-at-ars" target="_blank" title="Front-End Developer at ARS"><img class="lazy" src="http://geebart.com/wp-content/themes/twentyfourteen/images/spacer_3x4.gif" data-original="http://geebart.com/wp-content/uploads/2011/11/geebars.jpg" alt="" /></a>
								</p>
								<ul style="width:50%; padding:0 0 0 4rem;">
									<li><a href="http://aislerocket.com/blog/" title="Aisle Rocket Website" target="_blank">AisleRocket.com</a></li>
									<li>First real gig</li>
									<li>Very little JavaScript skills</li>
									<li>Excited to learn about the agency</li>
									<li>Passion and drive</li>
									<li>Work with IBM, Whirlpool, Sears, Kmart, Kenmore, Craftsman and more</li>
								</ul>
							</div>
							<div id="modal-32">
								<h2>Cookmore and the CIMAS</h2>
								<h3>Best B2C (Business to Consumer) Website</h3>
								<p>
									<a href="http://geebart.com/professional/cookmore" target="_blank" title="Geeb's Work on Cookmore"><img class="lazy" src="http://geebart.com/wp-content/themes/twentyfourteen/images/spacer_3x4.gif" data-original="http://geebart.com/wp-content/uploads/2012/10/cookmoreSS.jpg" alt="" style="width:47%;"/></a>
									<a href="http://geebart.com/blog/my-night-at-the-cimas" target="_blank" title="Geeb's Night at the CIMA's"><img class="lazy" src="http://geebart.com/wp-content/themes/twentyfourteen/images/spacer_3x4.gif" data-original="http://geebart.com/wp-content/uploads/2012/10/IMG_2415.jpg" alt="" style="width:30%;"/></a>
								</p>
								<ul>
									<li><a hre="http://www.chicagoima.org/" target="_blank" title="visit cookmore">Chicago Interactive Marketing Association</a></li>
									<li><a hre="https://cookmore.com" target="_blank" title="visit cookmore">cookmore.com</a></li>
									<li>85,000 Users</li>
									<li>50,000 Visits per month</li>
									<li>15,000 Likes</li>
									<li>6,500 Cookbooks</li>
									<li>2,500 Recipes</li>
								</ul>
							</div>
							<div id="modal-33">
								<h2>Kenmore Community Relaunch</h2>
								<h3>The complete package</h3>
								<p>
									<a href="http://geebart.com/professional/kenmore-community-relaunch" target="_blank" title="Geeb's Work on the Kenmore Blog"><img class="lazy" src="http://geebart.com/wp-content/themes/twentyfourteen/images/spacer_3x4.gif" data-original="http://geebart.com/wp-content/uploads/2014/04/kenmore_inspiration_screen_final.jpg" alt="" style="width:60%;" /></a>
								</p>
								<ul>
									<li>Visit: <a href="http://inspiration.kenmore.com" title="The Kenmore Community Blog" target="_blank">inspiration.kenmore.com</a></li>
									<li>Full stack developer (Back-to-Front)</li>
									<li>Sometimes an interactive designer</li>
									<li>WordPress</li>
									<li>JSON &amp; contextual content feeds</li>
									<li>YouTube API</li>
									<li>Custom WordPress API</li>
									<li>CRON jobs</li>
								</ul>
							</div>
							<div id="modal-34">
								<h2>ARS Sessions</h2>
								<h3>A Mobile First Session</h3>
								<ul>
									<li>1 second load times with 3G or better connection</li>
									<li>Speed = more $$$</li>
									<li>Speed as a feature</li>
									<li>Responsive Design</li>
									<li>Age of Device Pluralism</li>
									<li><a href="https://docs.google.com/presentation/d/1e74pIQEPNWNPDjMpHEcePvxuVOt_OfC57rAUkrUjCH4/edit?usp=sharing" title="" title="_blank">Download the Presentation</a></li>
								</ul>
							</div>
							<div id="modal-35">
								<h2>ATK Visits ARS</h2>
								<h3>Giving ATK a hands-on experience at a real agency</h3>
								<p>
									<a href="http://aislerocket.com/blog/atk-visits-aisle-rocket-studios/" title="ATK Visits ARS"><img class="lazy" src="http://geebart.com/wp-content/themes/twentyfourteen/images/spacer_3x4.gif" data-original="http://aislerocket.com/wp-content/uploads/2014/05/ISU_ATK_ARS_edit-600x260.jpg" alt="" /></a>
								</p>
								<ul>
									<li>Real project with creative brief</li>
									<li>Real brainstorm</li>
									<li>Ping-pong</li>
									<li>Downtown Party</li>
									<li><a href="http://aislerocket.com/blog/atk-visits-aisle-rocket-studios/" title="" title="_blank">Read the Blog Post</a> on AisleRocket.com</li>
								</ul>
							</div>
							<div id="modal-36">
								<h2>Kenmore Product Category Pages</h2>
								<h3>Animation Sells</h3>
                <p>
                  <a href="http://www.kenmore.com/kitchen-dishwashers/b-1040163" title="Kenomre Dish Category" target="_blank"><img class="lazy" src="http://geebart.com/wp-content/themes/twentyfourteen/images/spacer_3x4.gif" data-original="http://geebart.com/wp-content/uploads/2014/09/kenmore-dish-category-image.jpg" alt="Kenomre Dish Category" /></a>
                </p>
								<ul>
									<li><a href="http://www.kenmore.com/kitchen-dishwashers/b-1040163" title="Kenmore Dishwashers" target="_blank">Dishwashers Category</a></li>
									<li><a href="http://www.kenmore.com/home-vacuum-cleaners-floor-care/b-1040164" title="Kenmore Dishwashers" target="_blank">Floor Care Category</a></li>
									<li>Animation as a guide</li>
									<li>Interaction is key</li>
									<li>Nothing is "on/off"</li>
								</ul>
							</div>
							<div id="modal-37">
								<h2>Other Work at ARS</h2>
								<h3>The client list I work with:</h3>
                <p style="width:60%;">
                  <a href="http://aislerocket.com/" title="Visit AisleRocket.com" target="_blank"><img class="lazy" alt="" src="http://geebart.com/wp-content/themes/twentyfourteen/images/spacer_3x4.gif" data-original="http://geebart.com/wp-content/uploads/2014/09/aislerocket-com-screen.jpg" /></a>
                </p>
								<ul>
                  <li><a href="http://www.aislerocket.com/" title="AisleRocket.com" target="_blank">AisleRocket</a></li>
									<li><a href="http://www.amana.com/" title="Amana.com" target="_blank">Amana.com</a></li>
									<li><a href="http://www.gladiatorgarageworks.com/" title="gladiatorgarageworks.com" target="_blank">GladiatorGarageWorks.com</a></li>
									<li><a href="http://www.kenmore.com" title="Kenmore.com" target="_blank">Kenmore.com</a></li>
									<li><a href="http://www.craftsman.com" title="Craftsman.com" target="_blank">Craftsman.com</a></li>
									<li><a href="https://club.craftsman.com/community/#!/homepage" title="club.craftsman.com" target="_blank">Club.Craftsman.com</a></li>
									<li><a href="http://www.outlet.whirlpool.com" title="outlet.whirlpool.com" target="_blank">Outlet.Whirlpool.com</a></li>
									<li><a href="http://www.shopyourway.com/" title="shopyourway.com" target="_blank">ShopYourWay.com</a></li>
									<li>Emails, banner ads, ad systems, content management systems, small to large projects&hellip;</li>
								</ul>
							</div>
							<div id="modal-38">
								<h2>Lead Front-End Developer</h2>
								<h3>Stability, Support &amp; Leadership</h3>
								<ul>
									<li>Leading the Front-End Architecture on our biggest projects</li>
									<li>Managing the Front-End Team on tasks and projects</li>
									<li>Planning complete site builds</li>
									<li>Distribution and planning of resources</li>
									<li>Overseeing of project progress, execution and deadlines</li>
									<li>Overseeing QA or UAT for Dev on all Front-End projects</li>
									<li>Writing and developing basic QA processes and workflows</li>
									<li>Finding and recruiting new talent</li>
									<li>Participation in brain storm sessions</li>
									<li>Help prepare client correspondence for accounts</li>
									<li>Research and teaching new tech</li>
								</ul>
							</div>
							<div id="modal-39">
								<h2>GeebArt.com</h2>
								<h3>A digital chronicling of all things Geeb.</h3>
								<p><a href="http://geebart.com" target="_blank"><img class="lazy" src="http://geebart.com/wp-content/themes/twentyfourteen/images/spacer_3x4.gif" data-original="http://geebart.com/wp-content/uploads/2014/09/geeb-art-com.jpg" alt="geebart.com template image" /></a></p>
								<ul>
									<li>Visit: <a href="http://geebart.com" title="GeebArt.com">GeebArt.com</a></li>
									<li>WordPress</li>
									<li>Theme Picker</li>
									<li>Responsive</li>
									<li>On Load Animations</li>
									<li>Mobile and tablet friendly</li>
								</ul>
							</div>
							<div id="modal-40">
								<h2>The Latest</h2>
								<h3>The Greatest Source of Inspiration</h3>
								<p>
									<a href="http://latest.is/" title="The Latest" target="_blank"><img class="lazy" src="http://geebart.com/wp-content/themes/twentyfourteen/images/spacer_3x4.gif" data-original="http://geebart.com/wp-content/uploads/2014/09/the-latest.jpg" alt="" /></a>
								</p>
								<ul>
									<li><a href="http://latest.is/" title="The Latest" target="_blank">Latest.is</a></li>
									<li>You never need to click on another link on Twitter again</li>
									<li>The latest and greatest links on Twitter</li>
									<li>Share the wealth</li>
								</ul>
							</div>
							<div id="modal-41">
								<h2>Interviews with Large Corporations</h2>
								<h3>What they tell me about my skill set</h3>
								<ul>
									<li>Large companies want specialized talent</li>
                  <li>They lack the culture you want</li>
									<li>"Red tape" prevents creativity</li>
									<li>I get to do a lot more at a smaller company</li>
									<li>I'd rather wear many hats than one</li>
									<li>Work where you will be challenged</li>
                  <li>Have fun at work</li>
                  <li>Work friends can be real friends</li>
									<li>ATK students will flourish in a non-specialized role at a small to mid sized company</li>
								</ul>
							</div>
							<div id="modal-42">
								<h2>Building a Legacy Together</h2>
								<h3>How do we make the ATK program last?</h3>
								<ul>
									<li>Participate in the <a href="https://www.facebook.com/groups/5421211749/" title="ATK's Facebook Group" target="_blank">ATK Facebook group</a></li>
									<li>Let's be <a href="https://www.facebook.com/thegreatgeeber" target="_blank" title="Friend me on Facebook!">friends</a></li>
									<li>Tell the faculty what would make this program better</li>
									<li>Keep making great work</li>
									<li>Think about how your future will impact your fellow students and professors</li>
									<li>How can you make a difference?</li>
									<li>Don't be afraid to create</li>
									<li>Don't let people tell you you can't do something</li>
									<li>Aim high and exceed expecations</li>
								</ul>
							</div>
              <div id="modal-43">
                <h2>Restart, Rethink, Reimagine</h2>
                <h3>"Don't underestimate the role you will play in shaping the future."</h3>
                <h4>Great things can happen when Art and Tech get together.</h4>
                <iframe class="lazy" width="598" height="352" src="http://geebart.com/wp-content/themes/twentyfourteen/images/spacer_3x4.gif" data-original="http://www.youtube.com/embed/FvgdKfWnYCg" frameborder="0" allowfullscreen></iframe>
              </div>
							<div id="modal-44">
								<h2>Questions?</h2>
								<h3>I don't always have answers&hellip;</h3>
							</div>
							<div id="modal-45">
								<h2>Thank You!</h2>
                <h3>Thanks for the support and for your time</h3>
                <p><a id="restart">Restart?</a></p>
                <p>Or just continue to the last and final slide&hellip;</p>
							</div>
							<div id="modal-46">
								<h2>Where to Find Geeb</h2>
								<h3>Let's hang out!</h3>
								<h4>Today</h4>
								<ul>
									<li><strong>3:20</strong> - Max/MSP with Matthew Smith's Class</li>
									<li><strong>6:00</strong> - dinner and social time with ATK students</li>
									<li><strong>Late Night</strong> - shenanigans commence.</li>
								</ul>
								<h4>Friday, October 3</h4>
								<ul>
									<li><strong>10-11am</strong> - siscussion with ATK faculty Only, CVA 150</li>
									<li><strong>Noon-2pm</strong> - alumni Luncheon, Brown Ballroom, BSC</li>
									<li><strong>Free Time</strong> - let's Hang.</li>
								</ul>
								<h4>Saturday, October 4</h4>
								<ul>
									<li><strong>11:00am</strong> - CFA tailgate tent, Tent Zone North of Hancock Stadium</li>
									<li><strong>More Tailgating</strong></li>
									<li><strong>Late night</strong> - downtown Bloomington.</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			<div id="present">
				<div class="window">
					<section id="group-top-wrap">
						<div id="group-01" class="group-top group">
							<div class="cube" data-cube="1">
								<div class="front"></div><div class="back"></div><div class="right"></div><div class="left"></div><div class="top"></div><div class="bottom"></div>
							</div>
							<div class="cube" data-cube="2">
								<div class="front"></div><div class="back"></div><div class="right"></div><div class="left"></div><div class="top"></div><div class="bottom"></div>
							</div>
						</div>
						<div id="group-02" class="group-top group">
							<div class="cube" data-cube="3">
								<div class="front"></div><div class="back"></div><div class="right"></div><div class="left"></div><div class="top"></div><div class="bottom"></div>
							</div>
							<div class="cube" data-cube="4">
								<div class="front"></div><div class="back"></div><div class="right"></div><div class="left"></div><div class="top"></div><div class="bottom"></div>
							</div>
						</div>
						<div id="group-03" class="group-top group">
							<div class="cube" data-cube="5">
								<div class="front"></div><div class="back"></div><div class="right"></div><div class="left"></div><div class="top"></div><div class="bottom"></div>
							</div>
							<div class="cube" data-cube="6">
								<div class="front"></div><div class="back"></div><div class="right"></div><div class="left"></div><div class="top"></div><div class="bottom"></div>
							</div>
						</div>
						<div id="group-04" class="group-top group">
							<div class="cube" data-cube="7">
								<div class="front"></div><div class="back"></div><div class="right"></div><div class="left"></div><div class="top"></div><div class="bottom"></div>
							</div>
							<div class="cube" data-cube="8">
								<div class="front"></div><div class="back"></div><div class="right"></div><div class="left"></div><div class="top"></div><div class="bottom"></div>
							</div>
						</div>
						<div id="group-05" class="group-top group">
							<div class="cube" data-cube="9">
								<div class="front"></div><div class="back"></div><div class="right"></div><div class="left"></div><div class="top"></div><div class="bottom"></div>
							</div>
							<div class="cube" data-cube="10">
								<div class="front"></div><div class="back"></div><div class="right"></div><div class="left"></div><div class="top"></div><div class="bottom"></div>
							</div>
						</div>
						<div id="group-06" class="group-top group">
							<div class="cube" data-cube="11">
								<div class="front"></div><div class="back"></div><div class="right"></div><div class="left"></div><div class="top"></div><div class="bottom"></div>
							</div>
							<div class="cube" data-cube="12">
								<div class="front"></div><div class="back"></div><div class="right"></div><div class="left"></div><div class="top"></div><div class="bottom"></div>
							</div>
						</div>
						<div id="group-07" class="group-top group">
							<div class="cube" data-cube="13">
								<div class="front"></div><div class="back"></div><div class="right"></div><div class="left"></div><div class="top"></div><div class="bottom"></div>
							</div>
							<div class="cube" data-cube="14">
								<div class="front"></div><div class="back"></div><div class="right"></div><div class="left"></div><div class="top"></div><div class="bottom"></div>
							</div>
						</div>
					</section>
					<section id="group-left-wrap">
						<div id="group-08" class="group-left group">
							<div class="cube" data-cube="15">
								<div class="front"></div><div class="back"></div><div class="right"></div><div class="left"></div><div class="top"></div><div class="bottom"></div>
							</div>
							<div class="cube" data-cube="16">
								<div class="front"></div><div class="back"></div><div class="right"></div><div class="left"></div><div class="top"></div><div class="bottom"></div>
							</div>
						</div>
						<div id="group-09" class="group-left group">
							<div class="cube" data-cube="17">
								<div class="front"></div><div class="back"></div><div class="right"></div><div class="left"></div><div class="top"></div><div class="bottom"></div>
							</div>
							<div class="cube" data-cube="18">
								<div class="front"></div><div class="back"></div><div class="right"></div><div class="left"></div><div class="top"></div><div class="bottom"></div>
							</div>
						</div>
						<div id="group-10" class="group-left group">
							<div class="cube" data-cube="19">
								<div class="front"></div><div class="back"></div><div class="right"></div><div class="left"></div><div class="top"></div><div class="bottom"></div>
							</div>
							<div class="cube" data-cube="20">
								<div class="front"></div><div class="back"></div><div class="right"></div><div class="left"></div><div class="top"></div><div class="bottom"></div>
							</div>
						</div>
						<div id="group-11" class="group-left group">
							<div class="cube" data-cube="21">
								<div class="front"></div><div class="back"></div><div class="right"></div><div class="left"></div><div class="top"></div><div class="bottom"></div>
							</div>
							<div class="cube" data-cube="22">
								<div class="front"></div><div class="back"></div><div class="right"></div><div class="left"></div><div class="top"></div><div class="bottom"></div>
							</div>
						</div>
						<div id="group-12" class="group-left group">
							<div class="cube" data-cube="23">
								<div class="front"></div><div class="back"></div><div class="right"></div><div class="left"></div><div class="top"></div><div class="bottom"></div>
							</div>
							<div class="cube" data-cube="24">
								<div class="front"></div><div class="back"></div><div class="right"></div><div class="left"></div><div class="top"></div><div class="bottom"></div>
							</div>
						</div>
						<div id="group-13" class="group-left group">
							<div class="cube" data-cube="25">
								<div class="front"></div><div class="back"></div><div class="right"></div><div class="left"></div><div class="top"></div><div class="bottom"></div>
							</div>
							<div class="cube" data-cube="26">
								<div class="front"></div><div class="back"></div><div class="right"></div><div class="left"></div><div class="top"></div><div class="bottom"></div>
							</div>
						</div>
					</section>
					<section id="group-bottom-wrap">
						<div id="group-14" class="group-bottom group">
							<div class="cube" data-cube="27">
								<div class="front"></div><div class="back"></div><div class="right"></div><div class="left"></div><div class="top"></div><div class="bottom"></div>
							</div>
							<div class="cube" data-cube="28">
								<div class="front"></div><div class="back"></div><div class="right"></div><div class="left"></div><div class="top"></div><div class="bottom"></div>
							</div>
						</div>
						<div id="group-15" class="group-bottom group">
							<div class="cube" data-cube="29">
								<div class="front"></div><div class="back"></div><div class="right"></div><div class="left"></div><div class="top"></div><div class="bottom"></div>
							</div>
							<div class="cube" data-cube="30">
								<div class="front"></div><div class="back"></div><div class="right"></div><div class="left"></div><div class="top"></div><div class="bottom"></div>
							</div>
						</div>
						<div id="group-16" class="group-bottom group">
							<div class="cube" data-cube="31">
								<div class="front"></div><div class="back"></div><div class="right"></div><div class="left"></div><div class="top"></div><div class="bottom"></div>
							</div>
							<div class="cube" data-cube="32">
								<div class="front"></div><div class="back"></div><div class="right"></div><div class="left"></div><div class="top"></div><div class="bottom"></div>
							</div>
						</div>
						<div id="group-17" class="group-bottom group">
							<div class="cube" data-cube="33">
								<div class="front"></div><div class="back"></div><div class="right"></div><div class="left"></div><div class="top"></div><div class="bottom"></div>
							</div>
							<div class="cube" data-cube="34">
								<div class="front"></div><div class="back"></div><div class="right"></div><div class="left"></div><div class="top"></div><div class="bottom"></div>
							</div>
						</div>
						<div id="group-18" class="group-bottom group">
							<div class="cube" data-cube="35">
								<div class="front"></div><div class="back"></div><div class="right"></div><div class="left"></div><div class="top"></div><div class="bottom"></div>
							</div>
							<div class="cube" data-cube="36">
								<div class="front"></div><div class="back"></div><div class="right"></div><div class="left"></div><div class="top"></div><div class="bottom"></div>
							</div>
						</div>
					</section>
					<section id="group-right-wrap">
						<div id="group-19" class="group-right group">
							<div class="cube" data-cube="37">
								<div class="front"></div><div class="back"></div><div class="right"></div><div class="left"></div><div class="top"></div><div class="bottom"></div>
							</div>
							<div class="cube" data-cube="38">
								<div class="front"></div><div class="back"></div><div class="right"></div><div class="left"></div><div class="top"></div><div class="bottom"></div>
							</div>
						</div>
						<div id="group-20" class="group-right group">
							<div class="cube" data-cube="39">
								<div class="front"></div><div class="back"></div><div class="right"></div><div class="left"></div><div class="top"></div><div class="bottom"></div>
							</div>
							<div class="cube" data-cube="40">
								<div class="front"></div><div class="back"></div><div class="right"></div><div class="left"></div><div class="top"></div><div class="bottom"></div>
							</div>
						</div>
						<div id="group-21" class="group-right group">
							<div class="cube" data-cube="41">
								<div class="front"></div><div class="back"></div><div class="right"></div><div class="left"></div><div class="top"></div><div class="bottom"></div>
							</div>
							<div class="cube" data-cube="42">
								<div class="front"></div><div class="back"></div><div class="right"></div><div class="left"></div><div class="top"></div><div class="bottom"></div>
							</div>
						</div>
					</section>
					<section id="group-last-wrap">
						<div id="group-23" class="group-last group">
							<div class="cube" data-cube="43">
								<div class="front"></div><div class="back"></div><div class="right"></div><div class="left"></div><div class="top"></div><div class="bottom"></div>
							</div>
							<div class="cube" data-cube="44">
								<div class="front"></div><div class="back"></div><div class="right"></div><div class="left"></div><div class="top"></div><div class="bottom"></div>
							</div>
						</div>
						<div id="group-24" class="group-last group">
							<div class="cube" data-cube="45">
								<div class="front"></div><div class="back"></div><div class="right"></div><div class="left"></div><div class="top"></div><div class="bottom"></div>
							</div>
							<div class="cube" data-cube="46">
								<div class="front"></div><div class="back"></div><div class="right"></div><div class="left"></div><div class="top"></div><div class="bottom"></div>
							</div>
						</div>
					</section>
				</div>
			</div>
		</div>
    </section>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>

var mobile = 0;
var lowQuality = 0;
var highQuality = 1;

if(jQuery(window).outerWidth() < 981){
  mobile = 1;
  jQuery('object').remove();
  jQuery('#social').remove();
}

if(window.location.search.indexOf('quality=low') > -1){
  lowQuality = 1;
}

if(mobile || lowQuality){
  highQuality = 0;
}

jQuery(function($){

	var $presentWrap = $('#present-wrap');
	var $backSlider = $('#background-slider');
	var $present = $('#present');
	var $presentNav = $('#present-nav');
	var $navPrev = $('#nav-prev a');
	var $navNext = $('#nav-next a');
  var onOff = 0;
	var $canvas = $present.children('.window');
	var $modal = $('#present-modal');
	var $modals = $modal.find('#modals-wrap');
  var modalsLength = $modals.children().length
	var winWidth = $(window).width();
	var winHeight = $(window).height();
	var canvasWidth = $(window).width();
	var canvasHeight = $(window).height();

  if(highQuality){
  	//SETUP VARS
  	$canvas.attr('style', 'transform: translateZ(' + $canvas.css('transform').split(',')[14] + 'px)');
  	$present.kinetic().scrollTop((canvasHeight + winHeight) / 2).scrollLeft((canvasWidth - winWidth) / 2);
  }

	// CREATE SLIDES
	var slides = [
		"http://geebart.com/wp-content/uploads/2014/10/greece-titania-rooftop.jpg",
		"http://geebart.com/wp-content/uploads/2010/12/wb_017.jpg",
		"http://geebart.com/wp-content/uploads/2014/10/cookmore-chicago-cima.jpg",
		"http://geebart.com/wp-content/uploads/2014/10/greece-titania-rooftop-day.jpg",
		"http://geebart.com/wp-content/uploads/2014/10/lake-bloomington-screen.jpg",
		"http://geebart.com/wp-content/uploads/2014/10/lake-bloomington-screen-02.jpg",
	];

	function changeSlide(step){
		var $target = $modals.find('.active');
		$target.removeClass('active');
		if(step){
			$target = $target.next();
      if(!$target.length){
        $target = $modals.children(':first-child');
      }
		} else{
			$target = $target.prev();
      if(!$target.length){
        $target = $modals.children(':last-child');
      }
		}

    if(!mobile){
    	window.setTimeout(function(){
    		$target.addClass('active');
    	}, 400);
    } else{
      $target.addClass('active');
      $("html, body").animate({ scrollTop: 0});
    }
    $target.find('.lazy').each(function(){
      $(this).attr('src', $(this).attr('data-original')).removeClass('lazy');
    });
	}

  function slideView(){
    if(!mobile){
      if(!$presentWrap.hasClass('second-view')){
        $presentWrap.addClass('second-view');
        $present.scrollTop($canvas.width() / 2).scrollLeft($canvas.width() / 2);
      }
    }
  }

	// REVEAL CUBES
	window.setTimeout(function(){
		$presentWrap.addClass('active');
	}, 1600);

	var winWidth = $(window).width();

	$(document).on('click touchend', '.cube', function(event){
		event.preventDefault();

    slideView();

    var $current = $canvas.find('.cube.current');
    if($current.length){
      $current.removeClass('current').parent().removeClass('current');
    }
		$(this).addClass('active current').parent().addClass('current');

    var $target = $modals.children('#modal-' + $(this).attr('data-cube'));
		$target.addClass('active').find('.lazy').each(function(){
      $(this).attr('src', $(this).attr('data-original')).removeClass('lazy');
    });
    $target.siblings('.active').removeClass('active');

	}).on('click', '#nav-next a', function(event){
		event.preventDefault();

    slideView();

		// SPACEBAR OR RIGHT ARROW TRIGGERS THIS TOO
		var $current = $canvas.find('.cube.current');
    var $currentIndex = $current.attr('data-cube');

    if($current){
		  var $target = $canvas.find('.cube[data-cube=' + (parseInt($currentIndex) + 1) + ']');
    }
    if(!$target || !$currentIndex){
      $target = $canvas.children(':first-child').children(':first-child').children(':first-child');
    }

    $current.removeClass('current').parent().removeClass('current');
		$target.addClass('active current').parent().addClass('current');
		
		// CHANGE MODAL
		changeSlide(1);

	}).on('click', '#nav-prev a', function(event){
		event.preventDefault();

    slideView();

		// SPACE BAR OR RIGHT ARROW TRIGGERS THIS TOO
		var $current = $canvas.find('.cube.current');
    var $currentIndex = $current.attr('data-cube');
    if($current){
		  var $target = $canvas.find('.cube[data-cube=' + (parseInt($currentIndex) - 1) + ']');
    }
		if(!$target || !$currentIndex){
			var $target = $canvas.children(':last-child').children(':last-child').children(':last-child');
		}

		$current.removeClass('current').parent().removeClass('current');
    $target.addClass('active current').parent().addClass('current');
		
		// CHANGE MODAL
		changeSlide(0);

	}).on('keypress', function(event){

    console.log(event);
    console.log(event.charCode);

    if(onOff == 0){
      onOff = 1;
      if(event.charCode == 32 || event.charCode == 39 || event.charCode == 107){
        $navNext.trigger('click');
      }
      if(event.charCode == 37 || event.charCode == 109){
        $navPrev.trigger('click');
      }
      window.setTimeout(function(){
        onOff = 0;
      }, 800);

    }

	}).on('click', '#modal-close, #restart', function(event){
		event.preventDefault();

		$canvas.find('.active').removeClass('active');
		$canvas.find('.current').removeClass('current');

		$presentWrap.removeClass('second-view');
		$canvas.attr('style', 'transform: translateZ(-720rem)');

    if(!mobile){
		  $present.scrollTop((canvasHeight + winHeight) / 2).scrollLeft((canvasWidth - winWidth) / 2);
    }

	}).on('mousewheel', '#present', function(event, delta, trigger){
		event.preventDefault();

		var canvasTrans = $canvas.css('transform');

		if(canvasTrans.indexOf('matrix3d') >= 0){
			canvasTrans = parseInt(canvasTrans.split(',')[14]);
		} else{
			canvasTrans = 0;
		}

		if(delta > 0){
			delta = Math.ceil(delta);
			canvasTrans += (600 * delta);
		} else{
			delta = Math.floor(delta);
			canvasTrans += (600 * delta);
		}

		canvasTrans = Math.ceil(canvasTrans);

		if(canvasTrans < -12000){
			canvasTrans = -12000;
		}
		if(canvasTrans > 0){
			canvasTrans = 0;
		}

		$canvas.attr('style', 'transform: translateZ(' + canvasTrans + 'px)');

	});

  // MOBILE
  if(mobile){
    $canvas.children(':first-child').children(':first-child').children(':first-child').trigger('click');
  }

  // CREATE BACKSTRETCH SLIDER
  if(highQuality){
    $.each(slides, function(index, value){
      $backSlider.children('ul').append('<li style="background-image:url(' + value + ');"></li>');
    });
    $backSlider.children('ul').children('li:first-child').addClass('active');
  }

  if(highQuality){
    // START RECURSIVE SLIDER
    function changeBackground(){
      window.setTimeout(function(){
        var $slides = $backSlider.children('ul').children('li:not("li.active")');
        var $random = $($slides[Math.floor(Math.random() * $slides.length + 1)]);
        $random.addClass('active').siblings('.active').removeClass('active');
        changeBackground();
      }, 12000);
    }
   changeBackground();
  }

});

if(highQuality){
/*! jquery.kinetic - v2.0.3 - 2014-09-11 http://the-taylors.org/jquery.kinetic 
 * Copyright (c) 2014 Dave Taylor; Licensed MIT */
!function(a){"use strict";var b="kinetic-active";window.requestAnimationFrame||(window.requestAnimationFrame=function(){return window.webkitRequestAnimationFrame||window.mozRequestAnimationFrame||window.oRequestAnimationFrame||window.msRequestAnimationFrame||function(a){window.setTimeout(a,1e3/60)}}()),a.support=a.support||{},a.extend(a.support,{touch:"ontouchend"in document});var c=function(){return!1},d=function(b,c){return this.settings=c,this.el=b,this.$el=a(b),this._initElements(),this};d.DATA_KEY="kinetic",d.DEFAULTS={cursor:"move",decelerate:!0,triggerHardware:!1,y:!0,x:!0,slowdown:.9,maxvelocity:40,throttleFPS:60,movingClass:{up:"kinetic-moving-up",down:"kinetic-moving-down",left:"kinetic-moving-left",right:"kinetic-moving-right"},deceleratingClass:{up:"kinetic-decelerating-up",down:"kinetic-decelerating-down",left:"kinetic-decelerating-left",right:"kinetic-decelerating-right"}},d.prototype.start=function(b){this.settings=a.extend(this.settings,b),this.velocity=b.velocity||this.velocity,this.velocityY=b.velocityY||this.velocityY,this.settings.decelerate=!1,this._move()},d.prototype.end=function(){this.settings.decelerate=!0},d.prototype.stop=function(){this.velocity=0,this.velocityY=0,this.settings.decelerate=!0,a.isFunction(this.settings.stopped)&&this.settings.stopped.call(this)},d.prototype.detach=function(){this._detachListeners(),this.$el.removeClass(b).css("cursor","")},d.prototype.attach=function(){this.$el.hasClass(b)||(this._attachListeners(this.$el),this.$el.addClass(b).css("cursor",this.settings.cursor))},d.prototype._initElements=function(){this.$el.addClass(b),a.extend(this,{xpos:null,prevXPos:!1,ypos:null,prevYPos:!1,mouseDown:!1,throttleTimeout:1e3/this.settings.throttleFPS,lastMove:null,elementFocused:null}),this.velocity=0,this.velocityY=0,a(document).mouseup(a.proxy(this._resetMouse,this)).click(a.proxy(this._resetMouse,this)),this._initEvents(),this.$el.css("cursor",this.settings.cursor),this.settings.triggerHardware&&this.$el.css({"-webkit-transform":"translate3d(0,0,0)","-webkit-perspective":"1000","-webkit-backface-visibility":"hidden"})},d.prototype._initEvents=function(){var b=this;this.settings.events={touchStart:function(a){var c;b._useTarget(a.target,a)&&(c=a.originalEvent.touches[0],b._start(c.clientX,c.clientY),a.stopPropagation())},touchMove:function(a){var c;b.mouseDown&&(c=a.originalEvent.touches[0],b._inputmove(c.clientX,c.clientY),a.preventDefault&&a.preventDefault())},inputDown:function(a){b._useTarget(a.target,a)&&(b._start(a.clientX,a.clientY),b.elementFocused=a.target,"IMG"===a.target.nodeName&&a.preventDefault(),a.stopPropagation())},inputEnd:function(a){b._useTarget(a.target,a)&&(b._end(),b.elementFocused=null,a.preventDefault&&a.preventDefault())},inputMove:function(a){b.mouseDown&&(b._inputmove(a.clientX,a.clientY),a.preventDefault&&a.preventDefault())},scroll:function(c){a.isFunction(b.settings.moved)&&b.settings.moved.call(b,b.settings),c.preventDefault&&c.preventDefault()},inputClick:function(a){return Math.abs(b.velocity)>0?(a.preventDefault(),!1):void 0},dragStart:function(a){return b._useTarget(a.target,a)&&b.elementFocused?!1:void 0}},this._attachListeners(this.$el,this.settings)},d.prototype._inputmove=function(b,c){{var d=this.$el;this.el}if((!this.lastMove||new Date>new Date(this.lastMove.getTime()+this.throttleTimeout))&&(this.lastMove=new Date,this.mouseDown&&(this.xpos||this.ypos))){this.elementFocused&&(a(this.elementFocused).blur(),this.elementFocused=null,d.focus()),this.settings.decelerate=!1,this.velocity=this.velocityY=0;var e=this.scrollLeft(),f=this.scrollTop(),g=b-this.xpos,h=c-this.ypos;this.scrollLeft(this.settings.x?e-g:e),this.scrollTop(this.settings.y?f-h:f),this.prevXPos=this.xpos,this.prevYPos=this.ypos,this.xpos=b,this.ypos=c,this._calculateVelocities(),this._setMoveClasses(this.settings.movingClass),a.isFunction(this.settings.moved)&&this.settings.moved.call(d,this.settings)}},d.prototype._calculateVelocities=function(){this.velocity=this._capVelocity(this.prevXPos-this.xpos,this.settings.maxvelocity),this.velocityY=this._capVelocity(this.prevYPos-this.ypos,this.settings.maxvelocity)},d.prototype._end=function(){this.xpos&&this.prevXPos&&this.settings.decelerate===!1&&(this.settings.decelerate=!0,this._calculateVelocities(),this.xpos=this.prevXPos=this.mouseDown=!1,this._move())},d.prototype._useTarget=function(b,c){return a.isFunction(this.settings.filterTarget)?this.settings.filterTarget.call(this,b,c)!==!1:!0},d.prototype._start=function(a,b){this.mouseDown=!0,this.velocity=this.prevXPos=0,this.velocityY=this.prevYPos=0,this.xpos=a,this.ypos=b},d.prototype._resetMouse=function(){this.xpos=!1,this.ypos=!1,this.mouseDown=!1},d.prototype._decelerateVelocity=function(a,b){return 0===Math.floor(Math.abs(a))?0:a*b},d.prototype._capVelocity=function(a,b){var c=a;return a>0?a>b&&(c=b):0-b>a&&(c=0-b),c},d.prototype._setMoveClasses=function(a){var b=this.settings,c=this.$el;c.removeClass(b.movingClass.up).removeClass(b.movingClass.down).removeClass(b.movingClass.left).removeClass(b.movingClass.right).removeClass(b.deceleratingClass.up).removeClass(b.deceleratingClass.down).removeClass(b.deceleratingClass.left).removeClass(b.deceleratingClass.right),this.velocity>0&&c.addClass(a.right),this.velocity<0&&c.addClass(a.left),this.velocityY>0&&c.addClass(a.down),this.velocityY<0&&c.addClass(a.up)},d.prototype._move=function(){var b=(this.$el,this.el),c=this,d=c.settings;d.x&&b.scrollWidth>0?(this.scrollLeft(this.scrollLeft()+this.velocity),Math.abs(this.velocity)>0&&(this.velocity=d.decelerate?c._decelerateVelocity(this.velocity,d.slowdown):this.velocity)):this.velocity=0,d.y&&b.scrollHeight>0?(this.scrollTop(this.scrollTop()+this.velocityY),Math.abs(this.velocityY)>0&&(this.velocityY=d.decelerate?c._decelerateVelocity(this.velocityY,d.slowdown):this.velocityY)):this.velocityY=0,c._setMoveClasses(d.deceleratingClass),a.isFunction(d.moved)&&d.moved.call(this,d),Math.abs(this.velocity)>0||Math.abs(this.velocityY)>0?this.moving||(this.moving=!0,window.requestAnimationFrame(function(){c.moving=!1,c._move()})):c.stop()},d.prototype._getScroller=function(){var b=this.$el;return(this.$el.is("body")||this.$el.is("html"))&&(b=a(window)),b},d.prototype.scrollLeft=function(a){var b=this._getScroller();return"number"!=typeof a?b.scrollLeft():(b.scrollLeft(a),void(this.settings.scrollLeft=a))},d.prototype.scrollTop=function(a){var b=this._getScroller();return"number"!=typeof a?b.scrollTop():(b.scrollTop(a),void(this.settings.scrollTop=a))},d.prototype._attachListeners=function(){var b=this.$el,d=this.settings;a.support.touch?b.bind("touchstart",d.events.touchStart).bind("touchend",d.events.inputEnd).bind("touchmove",d.events.touchMove):b.mousedown(d.events.inputDown).mouseup(d.events.inputEnd).mousemove(d.events.inputMove),b.click(d.events.inputClick).scroll(d.events.scroll).bind("selectstart",c).bind("dragstart",d.events.dragStart)},d.prototype._detachListeners=function(){var b=this.$el,d=this.settings;a.support.touch?b.unbind("touchstart",d.events.touchStart).unbind("touchend",d.events.inputEnd).unbind("touchmove",d.events.touchMove):b.unbind("mousedown",d.events.inputDown).unbind("mouseup",d.events.inputEnd).unbind("mousemove",d.events.inputMove).unbind("scroll",d.events.scroll),b.unbind("click",d.events.inputClick).unbind("selectstart",c).unbind("dragstart",d.events.dragStart)},a.Kinetic=d,a.fn.kinetic=function(b,c){return this.each(function(){var e=a(this),f=e.data(d.DATA_KEY),g=a.extend({},d.DEFAULTS,e.data(),"object"==typeof b&&b);f||e.data(d.DATA_KEY,f=new d(this,g)),"string"==typeof b&&f[b](c)})}}(window.jQuery||window.Zepto);
} else{

  /* FAST CLICK PLUGIN */
  (function(e){e.event.special.fastClick={setup:function(){e(this).data("fastClick",new FastButton(this,e.event.special.fastClick.handler))},teardown:function(){e(this).data("fastClick").destroy();e(this).removeData("fastClick")},handler:function(t){t=e.event.fix(t);t.type="fastClick";e.event.dispatch.apply(this,arguments)}};e.fn.fastClick=function(t){return e(this).each(function(){return t?e(this).bind("fastClick",t):e(this).trigger("fastClick")})}})(jQuery)

}

/*! Copyright (c) 2013 Brandon Aaron (http://brandon.aaron.sh)
 * Licensed under the MIT License (LICENSE.txt).
 *
 * Version: 3.1.12
 *
 * Requires: jQuery 1.2.2+
 */
!function(a){"function"==typeof define&&define.amd?define(["jquery"],a):"object"==typeof exports?module.exports=a:a(jQuery)}(function(a){function b(b){var g=b||window.event,h=i.call(arguments,1),j=0,l=0,m=0,n=0,o=0,p=0;if(b=a.event.fix(g),b.type="mousewheel","detail"in g&&(m=-1*g.detail),"wheelDelta"in g&&(m=g.wheelDelta),"wheelDeltaY"in g&&(m=g.wheelDeltaY),"wheelDeltaX"in g&&(l=-1*g.wheelDeltaX),"axis"in g&&g.axis===g.HORIZONTAL_AXIS&&(l=-1*m,m=0),j=0===m?l:m,"deltaY"in g&&(m=-1*g.deltaY,j=m),"deltaX"in g&&(l=g.deltaX,0===m&&(j=-1*l)),0!==m||0!==l){if(1===g.deltaMode){var q=a.data(this,"mousewheel-line-height");j*=q,m*=q,l*=q}else if(2===g.deltaMode){var r=a.data(this,"mousewheel-page-height");j*=r,m*=r,l*=r}if(n=Math.max(Math.abs(m),Math.abs(l)),(!f||f>n)&&(f=n,d(g,n)&&(f/=40)),d(g,n)&&(j/=40,l/=40,m/=40),j=Math[j>=1?"floor":"ceil"](j/f),l=Math[l>=1?"floor":"ceil"](l/f),m=Math[m>=1?"floor":"ceil"](m/f),k.settings.normalizeOffset&&this.getBoundingClientRect){var s=this.getBoundingClientRect();o=b.clientX-s.left,p=b.clientY-s.top}return b.deltaX=l,b.deltaY=m,b.deltaFactor=f,b.offsetX=o,b.offsetY=p,b.deltaMode=0,h.unshift(b,j,l,m),e&&clearTimeout(e),e=setTimeout(c,200),(a.event.dispatch||a.event.handle).apply(this,h)}}function c(){f=null}function d(a,b){return k.settings.adjustOldDeltas&&"mousewheel"===a.type&&b%120===0}var e,f,g=["wheel","mousewheel","DOMMouseScroll","MozMousePixelScroll"],h="onwheel"in document||document.documentMode>=9?["wheel"]:["mousewheel","DomMouseScroll","MozMousePixelScroll"],i=Array.prototype.slice;if(a.event.fixHooks)for(var j=g.length;j;)a.event.fixHooks[g[--j]]=a.event.mouseHooks;var k=a.event.special.mousewheel={version:"3.1.12",setup:function(){if(this.addEventListener)for(var c=h.length;c;)this.addEventListener(h[--c],b,!1);else this.onmousewheel=b;a.data(this,"mousewheel-line-height",k.getLineHeight(this)),a.data(this,"mousewheel-page-height",k.getPageHeight(this))},teardown:function(){if(this.removeEventListener)for(var c=h.length;c;)this.removeEventListener(h[--c],b,!1);else this.onmousewheel=null;a.removeData(this,"mousewheel-line-height"),a.removeData(this,"mousewheel-page-height")},getLineHeight:function(b){var c=a(b),d=c["offsetParent"in a.fn?"offsetParent":"parent"]();return d.length||(d=a("body")),parseInt(d.css("fontSize"),10)||parseInt(c.css("fontSize"),10)||16},getPageHeight:function(b){return a(b).height()},settings:{adjustOldDeltas:!0,normalizeOffset:!0}};a.fn.extend({mousewheel:function(a){return a?this.bind("mousewheel",a):this.trigger("mousewheel")},unmousewheel:function(a){return this.unbind("mousewheel",a)}})});
</script>

<!-- FACEBOOK LIKE AND SHARE -->
<div id="fb-root"></div>
<script>
if(!mobile){
(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0&appId=547346978732503";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'))
}
;</script>

<!-- GOOGLE ANALYTICS -->
<script type="text/javascript">
	var _gaq = _gaq || [];
	_gaq.push(['_setAccount', 'UA-18545518-1']);
	_gaq.push(['_trackPageview']);

	(function() {
	var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	})();
</script>
</body>
<!--

                                                                                                                                                                              
                                                                                                                                                                              
                                                                                                                                                                              
                                                                                                                                                                              
                                                                                                                                                                              
                                                                                                                                                                              
                                                                                                                                                                              
                                                                                                                                                                              
                                                                                                                                                                              
                                                                                                                                                                              
                                                                                                                                                                              
                                                                                                                                                                              
                                                                                      ...                                                                                     
                                                                           .;+'''''''''+'''''''''';.                                                                          
                                                                      ,+''''''''''+''''''+''''''''''''''.                                                                     
                                                                  .'''''''''''''''+''''''''''''+++'''''''''+`                                                                 
                                                               .'''+'''''''':`                   .:''''''''''''.                                                              
                                                            `''''''+''',                               ,'+'''''+''                                                            
                                                          :'''''''':                                       :'''''''':                                                         
                                                        ''''''''.                                             :''''''''                                                       
                                                      ''''''':                                                   ;'''+'''                                                     
                                                    +''''''`                                                       .'''''''                                                   
                                                  ''''''+                                      :        :             '''''':                                                 
                                                .''''''                                       `'        '               '+''+'`                                               
                                               +''+''                                        ;',       ''    :            ''''''                                              
                                             ,'''++`                      .,;;;;;;''''''''''; '       ;`;   '              .'+'''.                                            
                                            ''''';                   `''',                     '    .'.'   :' .              '''+'+                                           
                                           '''''                   ''.               ';,..:''.  .'';` ;   '' ,,                '''''                                          
                                         :'''+;                  ';`           ,''.       `   :'`      '.''  '.                 ''++',                                        
                                        '''''                  ';  '          '':    ,   ';             ..: ''                   `'''''                                       
                                       '''''                 ''   '        `'''   ;'',  .'       `       `'''                      ''+''                                      
                                      '''';                ,'             , '.  '' '   ', ,'    '     `'    ':                      '''+'                                     
                                     +'''.                '.              .' ,':  '   '` '.    '   '';`       ''                     :''''                                    
                                    ''''                ;'     .         ''',        ;..'     :,        .''     '                     `''''                                   
                                  `+'''                '      ;:   ;                '''.     ;;        ',     , `;                      '++'                                  
                                  +'''               ,'     `'    '`                   ,  `''`        '        ' ;:   `                  ''+'                                 
                                 '''+               ',     ':   ';           ,'    :'';              ;`   '     :','''                    '+''                                
                                ''''               '     ''   .'      .    ':     ';                `;  ;'        `' :                     ''''                               
                               ''''               '    ,'    ',      '    '     :'                  '  '           , :'                     ''+'                              
                              '''+               '    '.   `'      ;'    '`    ,:                 ';   ,            '  '                     ''''                             
                             ''++               '    '    :'     :''           ;''''''''.    ,   '    ,                 '                    .''';                            
                            :''',              ' '  :    ;:    ;' '               ;'.     ''          '                  ;                    ;'''.                           
                            ''''              ' ,`      ,:   ''  '              ''    .'''                               '                     '''+                           
                           '+''              '  '       '  ,,   '             `',:'''; `'       '.                     ;:`.                     '''+                          
                          ''''              ,, '       '       `;        ..            '     `   .'.                    :.'                      ''+;                         
                         .'''`              '  ;     :'        '      `''            .'    `'      .'`                   ',.                     ,+''                         
                         '+''              '  '    `'`  .`    .`  `;''`;            .;  .''.                              ''                      '+''                        
                        ''''              :` ..   ':   '.     ''';.    ;            ''':                                  ..;                      ''';                       
                        ''+               '  '  :'    '               ,:           ;                                       '.'                     .+''                       
                       '''+              ' `'  '`    '                ' ,'                                                 .` '                     ''''                      
                      ,'''               ' '  '                       :',            `'                                     '  '                     '''.                     
                      ''',              '     ;                         ;'';':     '.  ',                                   ,  '                     ;'''                     
                     ;'''             . '                                  `:       ,'; .'.                                  ; '                      ''',                    
                     '''`             ': ..'                               '';            .',                                ' '                      ,'''                    
                    ''''             ':' ',`                                                                                   '                       ''+,                   
                    '''`             ',,' '                                                                                   ';                       .+''                   
                   :'''              ;' '.`                                                                                   ' ,                       '''.                  
                   +''.             . ', '                                                                                   '' '                       ,'''                  
                  .+''              '  ' :                                                                                   ;.`'                        '''                  
                  '+':              '   '                                                                                     ,':                        ''''                 
                  '''               '   '                                                                                     '' .                        '''                 
                 ;'''               ,  .                                                                                      :.`;                        ''',                
                 '''                .  '                                                                                       '''                        .'''                
                 '''                `  '                                                                                       '''                         '''                
                ''''                ,                                                                                          ;;'                         ''':               
                '''                 ;                                                                                          ,`,                         `'''               
                ''+                 '                                                                                       '  '  .                         '''               
               :'''                 '                                                                                      '   '  ;                         +''.              
               '''.                 '                                                                                      '   '  '                         :+''              
               '''                  '                                                                                       '  ; .'                          '''              
               '''                  ;                                                                                       ., ` :'                          '''              
              ,''+                  ,                                                                                     ''. .  ':                          '''`             
              ''',                  `.                                                                                   `,   .  '`.                         :'';             
              +''                    ,                                                                                   '     . ' ;                          '''             
              '''                    '                                                                                   ;     ; ' '                          '''             
              '''                    '                                                                                  '      ' ' '                          '+'             
             `'''                    '                                                                                 .;      ' ' :                          '''             
             ,'';                    '   ''                                                                                    . '  .                         +''.            
             ''',                    ;    '                                                                                    ` '  ;                         ;'':            
             '''                     .   ``                                                                                    ; ;  '                         .'''            
             '''                      .  ;     '                                                                               ' '  '                          '''            
             '''                      ;  ;     ;,                                                                 ,'           ; '  '                          '''            
             ''+                      '  ;''    .'                                                              `'.              ,  '                          '''            
             '''                      '  , ,      '                                                             '                ;  '                          '''            
             '''                      '   '`     `'                                                            '                 '  '                          '''            
             '''                      '  .,'      .'                                                           '                 :   '.                        '''            
             '''                      '  '`,        ''                                                        '                 . '   `'''''`                  +''            
             '''                      ; ' '           ,                                                   . `'                  ' .  ,    `';                  '''            
             '''                   '  ,  '                                                                 ,`                   '    ,'''''''                  '''            
             '''                   ;; , ' .                                                                   :                ``. ;    .  '                   +''            
             '''                   ';.;`  '                 ''                                              `; ' '             , ; .'`  :';                    '''            
             '''                    ',;  ,.                   ''`                                         ,':' :,.;            . '   `.'                       '''            
             '''                     ''. '                      .'''''''`                              .',  .'':' `'.    .      `'     ;                       '''            
             '''            ;'        ':' ',                                                          ;: '''. '`':      '        '    `':                      '''            
             '''            :'',`    .  `' `                                                         :: ''` :.`. ' '   ,         '   ': '                     .'''            
             '''.            `''''`  `.;. '                     . :    `                             '``''   ' '  '   ;;         ;  ''' '                     ,'';            
             ;'':              '';'';.  ;;                    ' `  ',, `;'                          '``.''   ' '  `''''   :      , '''' ;                     ''',            
             .'''                ;': .'',                    . `;'''''''; :'                       :'```';;;;'`' :..      '      . '''' ,                     '''             
              '''                   '`,  ;'                 ;  '',  :; ':' `'                      ',,``,';;'``''                .''''` .                     '+'             
              '''                  : :     '              `; `',. `'  ' :'  ,.                     ; ':```.```':           :    .`. ''  '                     '''             
              '''                  ' '     `                 ' '  ''   ' '   '                     '. `'``;'''                  .'  `' '.                     '''             
              '''                  '  '.                    '  ;  ''   '`:   :                           :               :'     .'  .' ':                    .'''             
              ;'':                 '   '                '`  '  ;``';;;;'`.   `                           `               :      ,'     ,'                    ''',             
              `'''                  ;   '                :' .  '``';;;'.`:   ,                          ```              '      ,''  ,' '                    '''              
               '''                  '    ''                ;''''```;''```;   .                         ````               .     ,'''  ' '                    '''              
               '''                  ;'     '`                   '```````        '.                     ```':.             .     ,'''` '``                   `'''              
               ''':                  ''     '                    ,'.      '.     '''                   `````                    ,'''' ''                    ''':              
               `''+                  ;''     ,                         '','        ' :'                ````                     ,''', ,'                    '''               
                '''                   '''    '        .,'''''''         ;'         '''                                          ;''    ,                    '''               
                '''.                  .''    '                       :''             `                                          ;:    ;                    :+''               
                ,'''                   '''   '                                    '              '                              ;     '                    '''`               
                 '''                    ''   ;                                   ,               '                         :    ;     ;                    '+'                
                 ''':                   ,''  .                                   ;               '                         ;    ;    :                    ''''                
                 .'''                    ''', '                                  ;          .',  '                         ;    '    '                    '''                 
                  '''                     ''' '                                  '   '.     :''' .                              '    ,                   `'''                 
                  ''''                    ''' ,                                  '  .'''    '''' '                              '   '                    ''':                 
                   '''                    ,''  ,                                 '  ,''''   ;'' '                               '   ;                    '''                  
                   ''''                    ''  '                                 `'  ''''  '                                    '  '                    ''''                  
                    '''                    ''' '                                      ''.  '                                    ' `,'                   '''                   
                    ''';                   ;'' ;                                           '          '                         , '  ;`                ''+'                   
                    `'''                    ''' ,                                       '  '          '                        ,'''    '               ''+                    
                     ''''                   ''' '                                       ;  '         .`                        ' :    '` '            ''''                    
                     `'''                  . '','                                       '  .         '                         '`       '`,.          '''                     
                      '''+                .   ';.`                               :      '   `        :                        : .'        ' '        ''''                     
                       '''`              ..'   '''                               '      '           ;    `                    ''.`    ;    .::.     ,+''                      
                       ''''             ::',  ''''                                '     ;           '   ``                   .. .'`   `      ' '    '+':                      
                        +'''           ,`''  ''''`.                               '    ;            '  ````                  '         '      ' ,, ''''                       
                        .'''         ,` ''  ''':  '                               `.   '            '  `````                ..          '         ''''                        
                         +'''       '  ''  '''    ;                                '        '';;''  '  `````                '            .        ''''                        
                          ''''     ;   ' .'''      '                               '    ,;;'      ;;'  ````                ;             .       '+''                         
                          `'''.  :    ;.;'''       '                               '  ;'           .'   ``                 '              ;     :'''                          
                           '+'' ;     '''''     ''' ;                              ' '`         ;'';:'                    '                ;    ''';                          
                            +'''     ,''''   ;''''' '                              ''          '''''''`                  .,                 .. ''''                           
                             ''''    ''''   '''''''' ;                             '   ;'''''''''    ,'                  '                    ''''                            
                             `''''  `'''  .''''''''' '                            ,.;''''''''''`       '                '                    ''''                             
                              :'''; '''. ;'''''''''''`'                           '';`  .:''',          '              :.                   ''''.                             
                               '''';'''   ,`  `''''''''    '                     ''               ;'    ;              '                   ;''':                              
                                ''''';               '''    '                    '             , `'      :            '                   ;''''                               
                                 '+'':                '''   `'                 ,'      '''';,''''';      '           '                   ;''''                                
                                  '''':                '''    '              .'        ;''''''''',       '          '                   ;''''                                 
                                   '''';                '''    `             '          ;''''',                    '                   '''''                                  
                                    '''+'                ''':                .           '''                      '                   '''''                                   
                                     +''''                ,'''.                          ''.                    ;;                   '+'+'                                    
                                      ;''''                 ''''.                                              '`                  `'''':                                     
                                       ,'''':                `''''.                                           ',                  ;'''+`                                      
                                         '''''                 `'''':                                        '                   '+'''                                        
                                          ''''+`                .''''''          ;                       `  '          ,       .'''+'                                         
                                           ;'''''                 ''''''';     '  '                     ``.'           '      +'''':                                          
                                             '''''.                 ,;.   :''`    ..:                   `;'            .    ,'''''                                            
                                              '''+''                     ,'''''';  ;       .`,';;';;'  `''`   .         ,  ''''''                                             
                                               `+'''''                    .;;'''''''.                 .'`.``  .         ;+'''''                                               
                                                 ;+'''''                  `'   '''''''':            `''`'```  .        '+'''':                                                
                                                   '+'+'''                  .,  ''''''''''';.    .;'''';```   .      '''''''                                                  
                                                     ''+''''.                 '  ;''''''''''''''''''', :      ,   .'''''''                                                    
                                                       ''''''''                ;. ,'''''''''''''''' ;:        , ''+'+'''                                                      
                                                         ''++'''';               .'.''''''''''''', '         '+'''''''                                                        
                                                           :'''''''''.              .'''''''''''  '      .+'''''''',                                                          
                                                              '''''''''+':           ;'''''''';  '   :'''''''''''                                                             
                                                                 ''''+''''''''';,.    '''''''',;''+'''''''''''                                                                
                                                                    ,'''''''''''++''+'''''''''''''''''''+',                                                                   
                                                                        .''''''''''+''''''''''''''''';.                                                                       
                                                                              .,;'+'+''''''''';,.                                                                             
                                                                                                                                                                              
                                                                                                                                                                              
                                                                                                                                                                              
                                                                                                                                                                              
                                                                                                                                                                              
                                                                                                                                                                              
                                                                                                                                                                              
                                                                                                         `                                                                    
                                                                                                        ```                                                                   
                                                                                                       ````                                                                   
                                                                                                       `````                                                                  
                                                                                                       `````                                                                  
                                                                                                       ````                                                                   
                        ,''''',                                                                                                                                               
                     :''''''''''':                                                                                                                                            
                   :+'''''+'''''''+; ;'''                                                   .''''''''                                                                         
                  ''++'''+'.  .'+'''+;'''                                                   .''''''''                                                                         
                 '''''''.        ,'''''''                                                   .''+'''''                                                                         
                '''''''            ''''''                                                      ''''''                                                                         
               '''''''             ;'''''                                                      ''''''                                                                         
              ''''''':              '''''                                                      ''''''                                                                         
              '''''''               '''''                                                      ''''''                                                                         
             ''''''''               '''''                                                      ''''''                                                                         
             ''''''',                                 .,;;:.                   .,;,.           ''''''                          `,;;;.                      ..                 
             '''''''                               ''''''+'''',            ,'''''''''':        ''''''  ''+''''',            ;''''''+''':      '''''+'.  `'++''+               
            :''''''+                             ;''''''''+'''''          +'''''''+'''''`      '''''';'''''+'''''.        ,'''+'''''''''+     '''''''. :''''''''              
            ''''''''                            ''+''''`  :''''''       .'+'''',  ;'''''+`     ''''''+'''+'''''''':      ;''''''.  :'''''+    '''''''..''''''''''             
            ''''''''          ,+''''''''''     ;'''''.      ''''''      ''''';      ''''''     ''''''';    .''''+''`    ,''''';      ''''''     ;''''.'+' +''''''             
            ''''''''          ,'''''''''''     ''''''       `''''+:    '''''+        ''''''    '''''+,       +''''''    ''''''        +'''''    ;''+''''  +''''''             
            ''''''''          ,'''''''''''    '+''''         ''''''   .+''''.        ''''''    ''''''    `   `''''''`  ;'''''.        ''''''    ;''''''   '''''''             
            ,'''''''               '''''''    +'''''         ''''''   ''''''         ''''''.   ''''''   ``    +''''''  ''''''         +'''''    ;''''''    ''+''              
             '''''''.              '''''''    '''''''''''''''''''''`  '''''''''''''''+''''';   ''''''  ````   '''''+'  '''''''''''''''+''''',   ;''''''    `''+               
             ''''''''              '''''''    ''''''''''''''''''''',  '''''''''''''+''''''''   ''''''  `````  '''''''  ''''''+'''''''''''''';   ;''''''                       
             +'+'''''              '''''''    '''''+...............   '+'''+................   ''''''  `````  '''''''  ''''''...............    ;''''''                       
             `'''''''.             '''''''    ''''''                  ''''''.                  ''''''  ````   '''''''  ''''++                   ;''''''                       
              '''''''+             '''''''    ''''''`                 +''''+'                  ''''''   ``    '''''+'  '''''':                  ;''''''                       
               ''''''''            '''''''    '''''''           '     :''''''           .      ''''''        +''''''.  ''''''+           ;      ;''''''                       
               .''''''''         ,''''''''     '''''';         +'      '''''''         ''      '''''',      :'''''''    '''''''         ''      ;''''''                       
                .''''+''''.   .'''''''''''     '''''''',    `'''+      .''''''',     ;'+'   `;;+'''''''`   '''''''+,    :''''''',     ''''    ..;'''''+..                     
                  +'+'''''+''''''''' :''''      '''''''+''''+''''       :''''''''''''''+'   .+++'''''''+'+'''''''''      ;'''''+''''''''''    '''''''''''                     
                   .''''''''''''+';   ;'''       .+''''''+''''''.         '''''+'+'''''''   .''''''+ '''''''''''',         '''''''''+'''',    '''''''''''                     
                      .'''''''''.                  `'''''+''''.             ''+''''''';     .'''''''   ''''+''':             '''''''''',      +''''''''''                     
                                                                                                                                                                              
                                                                                                                                                                              
                                                                                                                                                                              
                                                                                                                                                                              
                                                                                                                                                                              
                                                                                                                                                                              
                                                                                                                                                                              
                                                                                                                                                                              
                                                                                                                                                                              
                                                                                                                                                                              
                                                                                                                                                                              
                                                                                                                                                                              


-->
</html>
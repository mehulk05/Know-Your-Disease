
	

<html lang="en" ng-app="patientApp">
<head>
	
	
	
	
<script type="text/javascript">window.NREUM||(NREUM={}),__nr_require=function(e,t,n){function r(n){if(!t[n]){var o=t[n]={exports:{}};e[n][0].call(o.exports,function(t){var o=e[n][1][t];return r(o||t)},o,o.exports)}return t[n].exports}if("function"==typeof __nr_require)return __nr_require;for(var o=0;o<n.length;o++)r(n[o]);return r}({1:[function(e,t,n){function r(){}function o(e,t,n){return function(){return i(e,[f.now()].concat(u(arguments)),t?null:this,n),t?void 0:this}}var i=e("handle"),a=e(2),u=e(3),c=e("ee").get("tracer"),f=e("loader"),s=NREUM;"undefined"==typeof window.newrelic&&(newrelic=s);var p=["setPageViewName","setCustomAttribute","setErrorHandler","finished","addToTrace","inlineHit","addRelease"],d="api-",l=d+"ixn-";a(p,function(e,t){s[t]=o(d+t,!0,"api")}),s.addPageAction=o(d+"addPageAction",!0),s.setCurrentRouteName=o(d+"routeName",!0),t.exports=newrelic,s.interaction=function(){return(new r).get()};var m=r.prototype={createTracer:function(e,t){var n={},r=this,o="function"==typeof t;return i(l+"tracer",[f.now(),e,n],r),function(){if(c.emit((o?"":"no-")+"fn-start",[f.now(),r,o],n),o)try{return t.apply(this,arguments)}catch(e){throw c.emit("fn-err",[arguments,this,e],n),e}finally{c.emit("fn-end",[f.now()],n)}}}};a("setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","),function(e,t){m[t]=o(l+t)}),newrelic.noticeError=function(e){"string"==typeof e&&(e=new Error(e)),i("err",[e,f.now()])}},{}],2:[function(e,t,n){function r(e,t){var n=[],r="",i=0;for(r in e)o.call(e,r)&&(n[i]=t(r,e[r]),i+=1);return n}var o=Object.prototype.hasOwnProperty;t.exports=r},{}],3:[function(e,t,n){function r(e,t,n){t||(t=0),"undefined"==typeof n&&(n=e?e.length:0);for(var r=-1,o=n-t||0,i=Array(o<0?0:o);++r<o;)i[r]=e[t+r];return i}t.exports=r},{}],4:[function(e,t,n){t.exports={exists:"undefined"!=typeof window.performance&&window.performance.timing&&"undefined"!=typeof window.performance.timing.navigationStart}},{}],ee:[function(e,t,n){function r(){}function o(e){function t(e){return e&&e instanceof r?e:e?c(e,u,i):i()}function n(n,r,o,i){if(!d.aborted||i){e&&e(n,r,o);for(var a=t(o),u=m(n),c=u.length,f=0;f<c;f++)u[f].apply(a,r);var p=s[y[n]];return p&&p.push([b,n,r,a]),a}}function l(e,t){v[e]=m(e).concat(t)}function m(e){return v[e]||[]}function w(e){return p[e]=p[e]||o(n)}function g(e,t){f(e,function(e,n){t=t||"feature",y[n]=t,t in s||(s[t]=[])})}var v={},y={},b={on:l,emit:n,get:w,listeners:m,context:t,buffer:g,abort:a,aborted:!1};return b}function i(){return new r}function a(){(s.api||s.feature)&&(d.aborted=!0,s=d.backlog={})}var u="nr@context",c=e("gos"),f=e(2),s={},p={},d=t.exports=o();d.backlog=s},{}],gos:[function(e,t,n){function r(e,t,n){if(o.call(e,t))return e[t];var r=n();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(e,t,{value:r,writable:!0,enumerable:!1}),r}catch(i){}return e[t]=r,r}var o=Object.prototype.hasOwnProperty;t.exports=r},{}],handle:[function(e,t,n){function r(e,t,n,r){o.buffer([e],r),o.emit(e,t,n)}var o=e("ee").get("handle");t.exports=r,r.ee=o},{}],id:[function(e,t,n){function r(e){var t=typeof e;return!e||"object"!==t&&"function"!==t?-1:e===window?0:a(e,i,function(){return o++})}var o=1,i="nr@id",a=e("gos");t.exports=r},{}],loader:[function(e,t,n){function r(){if(!x++){var e=h.info=NREUM.info,t=d.getElementsByTagName("script")[0];if(setTimeout(s.abort,3e4),!(e&&e.licenseKey&&e.applicationID&&t))return s.abort();f(y,function(t,n){e[t]||(e[t]=n)}),c("mark",["onload",a()+h.offset],null,"api");var n=d.createElement("script");n.src="https://"+e.agent,t.parentNode.insertBefore(n,t)}}function o(){"complete"===d.readyState&&i()}function i(){c("mark",["domContent",a()+h.offset],null,"api")}function a(){return E.exists&&performance.now?Math.round(performance.now()):(u=Math.max((new Date).getTime(),u))-h.offset}var u=(new Date).getTime(),c=e("handle"),f=e(2),s=e("ee"),p=window,d=p.document,l="addEventListener",m="attachEvent",w=p.XMLHttpRequest,g=w&&w.prototype;NREUM.o={ST:setTimeout,SI:p.setImmediate,CT:clearTimeout,XHR:w,REQ:p.Request,EV:p.Event,PR:p.Promise,MO:p.MutationObserver};var v=""+location,y={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-1071.min.js"},b=w&&g&&g[l]&&!/CriOS/.test(navigator.userAgent),h=t.exports={offset:u,now:a,origin:v,features:{},xhrWrappable:b};e(1),d[l]?(d[l]("DOMContentLoaded",i,!1),p[l]("load",r,!1)):(d[m]("onreadystatechange",o),p[m]("onload",r)),c("mark",["firstbyte",u],null,"api");var x=0,E=e(4)},{}]},{},["loader"]);</script><link rel="dns-prefetch" href="//ajax.googleapis.com" />
	<link rel="dns-prefetch" href="//static.lybrate.com" />

	<meta name="fragment" content="!">
	<meta name="viewport"  content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<meta property="fb:admins" content="100005239324618" />
	<meta property="fb:app_id" content="160588397472348" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <meta id="lybrate-page-info" data-name="lybrate-page-info" data-page-not-found=""></meta>

	
		
	  		
	  		
	  			<title>Ayurveda Doctors - Book Instant Appointment, Consult Online, View Fees, Contact Numbers, Feedbacks</title>
				<meta name="description" content="Ayurveda Doctors, Ayurveda Specialists. Book Doctor&#039;s Appointment, Consult Online, View Doctor Fees, User Reviews, Address and Phone Numbers of Ayurveda Doctors | Lybrate
" />
	  			<meta property="og:title" content="Ayurveda Doctors - Book Instant Appointment, Consult Online, View Fees, Contact Numbers, Feedbacks" />
	  			<meta name="twitter:title" content="Ayurveda Doctors - Book Instant Appointment, Consult Online, View Fees, Contact Numbers, Feedbacks" />
	  			<meta property="og:description" content="Ayurveda Doctors, Ayurveda Specialists. Book Doctor&#039;s Appointment, Consult Online, View Doctor Fees, User Reviews, Address and Phone Numbers of Ayurveda Doctors | Lybrate
" />
  				<meta name="twitter:description" content="Ayurveda Doctors, Ayurveda Specialists. Book Doctor&#039;s Appointment, Consult Online, View Doctor Fees, User Reviews, Address and Phone Numbers of Ayurveda Doctors | Lybrate
" />
  				
				<link rel="amphtml" href="https://www.lybrate.com/amp/search">
	  		
	  	

		<meta name="robots" content="NOODP,NOYDIR" />
		<meta property="og:type" content="article" />
		<meta name="twitter:card" content="summary_large_image" />
		<link rel="apple-touch-icon" href="https://l4.lybcdn.com/img/favicon-ios.png" />
  		<link rel="shortcut icon" href="https://l4.lybcdn.com/img/favicon.ico" type="image/x-icon" />
  		<link rel="icon" sizes="192x192" href="https://l4.lybcdn.com/img/push-crew/logo_192_by_192.png">
		
		    
		    
		    	<link rel="canonical" href="https://www.lybrate.com/ayurveda" >
	        	
	        	
	        
        
	


  	<meta property="og:url" content="https://www.lybrate.com/ayurveda" />
  	<meta property="og:site_name" content="Lybrate" />
    <meta name="twitter:site" content="@Lybrate" />
	<meta name="og:type" content="article" />
   	
	
		
		
			








<link rel="stylesheet" href="https://l2.lybcdn.com/css/1B15D22AC62BDC7FCF63ECDA54025D87/dist/app.min.css">

		
	
    
		
		
			<meta property="og:image" content="https://l4.lybcdn.com/img/lybrate_icon_325x325.png" />
			<meta name="twitter:image" content="https://l4.lybcdn.com/img/lybrate_icon_325x325.png" />
		
	

    
    <!-- Inline styling for laoder -->
    <style type="text/css">@-webkit-keyframes grow{0%{-webkit-transform:scale(0);transform:scale(0);opacity:0}100%{-webkit-transform:scale(1);transform:scale(1);opacity:1}}@keyframes grow{0%{-webkit-transform:scale(0);transform:scale(0);opacity:0}100%{-webkit-transform:scale(1);transform:scale(1);opacity:1}}.page-wrapper{display:block;position:fixed;top:0;bottom:0;left:0;right:0;z-index:29;background-color:rgba(255,255,255,.5)}.loader,.loader span{position:absolute;height:12px}.loader{display:block;top:50%;left:50%;-webkit-transform:translate3d(-50%,-50%,0);transform:translate3d(-50%,-50%,0)}.loader span{top:0;left:-10px;width:12px;-webkit-transform:scale(0);transform:scale(0);background-color:#c82506;border-radius:50%;-webkit-animation:grow .45s ease-in-out infinite alternate;animation:grow .45s ease-in-out infinite alternate;-webkit-animation-delay:.2s;animation-delay:.2s}.loader span:first-child{left:-40px;-webkit-animation-delay:0s;animation-delay:0s}.loader span:last-child{left:20px;-webkit-animation-delay:.4s;animation-delay:.4s}</style>


  	<link rel="manifest" href="manifest.json" />

  	<script type="text/javascript">
	  	if (typeof Lybrate == 'undefined') { Lybrate = {};};
	  	Lybrate.getStaticPath = function (path) {
	  	  return 'https://www.lybrate.com' + path;
	  	};
	  	Lybrate.getResourcePath = function (path) {
	  	  return 'https://l1.lybcdn.com/' + path;
	  	};
	  	Lybrate.getExtResourcePath = function (path) {
	  		return 'https://static.lybrate.com/' + path;
	  	};
	  	Lybrate.getRealTimeService = function () {
	  		return 'wss://realtime.lybrate.io/xmpp';
	  	};

	  	var source = "web";
	  	var targetUrl="";
	  	var affCode = "undefined";
	  	var searchFormObj = {"find":"Ayurveda","near":"","page":1,"source":"FNB","sortBy":"BMS","zipSearch":false,"currentLocation":false,"cityName":"","seoRequest":false,"ffR":false,"isClinicSearch":false,"isHospitalSearch":false,"ampPage":false};
	  	var filterObj = null;
	  	var wt = false;
	  	var pageInt = true;
	  	var srpFilters = null;
	  	var isClinicSRP = "false";
		var isHospitalSRP = "false";

  		if(/MSIE \d|Trident.*rv:/.test(navigator.userAgent)) {
		  	var angJsfiles = [
				"//ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js",
				"//ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular-route.min.js",
				"//ajax.googleapis.com/ajax/libs/angularjs/1.5.8/angular-touch.min.js",
				'https://l3.lybcdn.com/js/9C0254A6D7943549909BC78E7F50B424/dist/app-rm-md.min.js',
		 	   	"https://l3.lybcdn.com/js/1B359EF658EC050FB1F6F13571146145/v3/vendor/strophe.min.js",
				"//cdnjs.cloudflare.com/ajax/libs/bluebird/3.3.4/bluebird.min.js"
			];
			for(i=0;i<angJsfiles.length;i++){
			    var head = document.getElementsByTagName('head')[0];
			    var script = document.createElement('script');
			    script.type = 'text/javascript';
			    script.onload = function() {
			        console.log(i)
			    }
			    script.src = angJsfiles[i];
			    head.appendChild(script);
			}

			var ies = document.createElement("link");
			ies.rel = "stylesheet";
			ies.href = "/css/A6EF5443F7FB90158ABF73C8CE201F12/ie-rm-md.css";
			document.head.appendChild(ies);

			/* ga */
		    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		     (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		     m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		     })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		    ga('create', 'UA-38191252-1', {'siteSpeedSampleRate': 100});
		    /* ga */
	  	}
  	</script>
	<!--[if lt IE 9]>
	  <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<base href="/">
</head>
<body itemscope itemtype="http://schema.org/WebPage">
	<a href="https://browsehappy.com/" rel="noindex, nofollow" target="_self" id="unsupported" style="display:none;position: fixed;left: 0;width: 100%;top: 0;height: 100%;background-color: rgba(0,0,0,0.2);z-index: 99;">
		<div style="padding: 12px;text-align: center;color: #c82506;background-color: white;font-size: 12px;z-index: 1;">We don't support your browser. Please upgrade your browser or download modern browsers from here!</div>
	</a>
	
	<div id="loggedInUserInfoOuter">
		
			<div id="loggedInUserInfo"
			name="Mehul"
			phoneNumber="+917984401123"
			email="tylerxyz4@gmail.com"
			uid="91505241587"
			gender="male"
			mvp="false"
			data-age-yrs=""
			data-age-mnths=""
			data-age-type="DOB"
			data-weight="54.0"
			data-weight-unit="KG"
			data-height="157.5"
			data-height-unit="CM"
			data-occupation=""
			data-line1=""
			data-city="ahmedabad"
			data-v3-user="true" style="display: none"></div>
		
	</div>
	
		
		
			
				
					
					
						
							
							
								
		
		<div class="lab-promo-header grid grid__col-20 grid--direction-row" id="srp_labPromo">
			<div class="grid grid--align-center grid--justify-center">
				<span class="lab-promo-offer">Offer</span><a class="lab-promo-a" target="_blank" href="https://www.lybrate.com/lab-tests/thyrocare-aarogyam-slp?utm_source=lyb_web&utm_medium=www_home&utm_content=lab_home&utm_campaign=lab_SRP&?lpt=PS-SRP">Full Health Checkup + FREE doctor consultation starting at Rs. 799 only! Limited offer. Book Now!</a>
				<svg id="srp_labClose" style="width:16px;height:16px;position: absolute;right: 0;fill: white; cursor:pointer" viewBox="0 0 24 24">
				    <path d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z"></path>
				</svg>
			</div>
		</div>
		<div class="header">
    <div class="grid grid__col-20 grid--direction-row layoutWrapper lybPad-left-right--half">
        <div class="grid__col-auto header__brand">
            <a href="https://www.lybrate.com" class="header__brand__icon" target="_self">
                <img src="https://l4.lybcdn.com/img/lybrate-logo-new.png" alt="Lybrate" class="lybVert-center">
            </a>
        </div>
        <ly-header></ly-header>
    </div>
</div>
	
	
							
						
					
				
			
			
		
	

	
		<!-- Only for swan -->
	  	<input type="hidden" value="SRP" id="swanPageType" />
		<input type="hidden" value="PS-SRP" id="swanSource" />
		
			
				<div data-position-type="BANNER" data-poistion-number="2,4" class="swanAttributes" style="display:none"></div>
			
		
		<!-- Only for swan -->
		<div id="powered_by_lybrate"></div>
			<div class="page-wrapper" id="srp_loader" style="display:none">
				<div class="loader">
					<span></span>
					<span></span>
					<span></span>
				</div>
			</div>
		
		












		<div ng-controller="appController">
		<div class="lyb-srp" id="srp-seo-data" ng-controller="srpController as ctrl">
			<ly-mobile-download-banner banner-type="download" ng-if="ctrl.pageLoaded && !$root.showSearchSRP && !ctrl.showBookAppointment && !$root.affSite"></ly-mobile-download-banner>

			<slider displayed="1" autoplay="false" data-ng-if="ctrl.showImageSlider" show-slider="ctrl.showImageSlider" is-full-screen="true" current-index="ctrl.current">
			    <slider-slide data-ng-repeat="video in ctrl.images">
			        <iframe data-ng-if="video.mediaType == 'video'" ng-class="{'ly-show': ctrl.showImageSlider}" class="ly-hide" id="profile_video_{{$index}}" ng-src="{{video.embedUrl}}" frameborder="{{ctrl.videoSliderFrameborder}}" height="{{ctrl.videoSliderHeight}}" width="{{ctrl.ctrl.videoSliderWidth}}"></iframe>
			        <img data-ng-if="video.mediaType == 'image'" ng-src="{{video.original}}" />
			    </slider-slide>
			</slider>


			<ly-auto-info show="ctrl.showautoinfo" data-ng-if="ctrl.showautoinfo" origin="ctrl.show" bookshow="ctrl.showcallbookappointment" display-appoint-btn="{{ctrl.showAppointBtnOnCallSucess}}"></ly-auto-info>


			<ly-call-book-appointment show="ctrl.showcallbookappointment" ng-if="ctrl.showcallbookappointment"></ly-call-book-appointment>

			<call-context-handler show="ctrl.showcallcontexthandler" ng-if="ctrl.showcallcontexthandler" is-treatment="{{ctrl.isTreatmentSearch}}" treatment-name="{{ctrl.selectedItem}}" ainf="ctrl.showautoinfo" call-context-type="{{ctrl.searchType}}"></call-context-handler>

			<div button id="bullshit" class="primary show grid--justify-center left-panel__apply-btn flicker-hack ly-hide" ng-click="ctrl.affSearch()" ng-show="$root.affSite && !ctrl.affSearchOverlay">
			    SEARCH
			</div>
			<div class="{{($root.affSite && !ctrl.affSearchOverlay) ?'aff-block':'search-overlay' }} flicker-hack ly-hide" ng-class="{ 'book': ctrl.bookAppointmentAction, 'consult': ctrl.consultOnlinetAction }" data-ng-show="$root.showSearchSRP">
			    <ly-search-autocomplete search-type="srp-search"
			        initial-speciality="ctrl.selectedItem"
			        initial-city="ctrl.searchCity"
			        initial-locality="ctrl.searchLocation"
			        initial-locality-id="ctrl.localityId"
			        search-text="Search"
			        submit-search="ctrl.quickSubmitted"
			        submit="ctrl.searchAction"
			        back-action="ctrl.hideSearchBar"
			        show-city="{{ctrl.showCitySerch}}"
			        show-locality="{{ctrl.showLocalitySerch}}">
			    </ly-search-autocomplete>
			    <div class="search-overlay__default-list" data-ng-if="!$root.affSite || ctrl.affSearchOverlay">
			        <div class="search-overlay__default-list__title">Common Specialities</div>
			        <div class="search-overlay__default-list__list-items">
			            <div class="search-overlay__default-list__list-items__item"
			            data-ng-repeat="speciality in ctrl.specialityList"
			            data-ng-click="ctrl.quickSearch(speciality.keyWord)">
			                <ly-svg-icon p="{{speciality.i}}"></ly-svg-icon>
			                {{speciality.keyWord}}
			            </div>
			        </div>
			        <div class="search-overlay__default-list__title">Common Issues</div>
			        <div class="search-overlay__default-list__list-items">
			            <div class="search-overlay__default-list__list-items__item"
			            data-ng-repeat="issue in ctrl.issueList"
			            data-ng-click="ctrl.quickSearch(issue.keyWord)">
			                <ly-svg-icon p="{{issue.i}}"></ly-svg-icon>
			                {{issue.keyWord}}
			            </div>
			        </div>
			        <div class="search-overlay__default-list__title">Common Treatments</div>
			        <div class="search-overlay__default-list__list-items">
			            <div class="search-overlay__default-list__list-items__item"
			            data-ng-repeat="treatment in ctrl.treatmentList"
			            data-ng-click="ctrl.quickSearch(treatment.keyWord)">
			                <ly-svg-icon p="{{treatment.i}}"></ly-svg-icon>
			                {{treatment.keyWord}}
			            </div>
			        </div>
			    </div>
			</div>

			<ly-quick-sign-up show="ctrl.showQuickSignUp" data-ng-if="ctrl.showQuickSignUp" action="ctrl.quickSignupSuccess" modal-text="ctrl.quickSignupModalText"></ly-quick-sign-up>

			<ly-treatment-enquiry show="ctrl.treatmentModal" data-ng-if="ctrl.treatmentModal" username="{{ctrl.treatmentDoctor.username}}" treatment="ctrl.treatment"></ly-treatment-enquiry>


			<input id="shareItem" type="hidden" share-permlink="https://www.lybrate.com/ayurveda" share-title="Ayurveda Doctors - Book Instant Appointment, Consult Online, View Fees, Contact Numbers, Feedbacks" share-desc="Ayurveda Doctors, Ayurveda Specialists. Book Doctor's Appointment, Consult Online, View Doctor Fees, User Reviews, Address and Phone Numbers of Ayurveda Doctors | Lybrate
">
			<div class="lyb-srp container grid grid--direction-row lybMar-center">
				
					<div class="grid__col-20" id="breadCrumb_wrapper"
						city=""
						locality=""
						speciality="ayurveda">
						<div class="breadcrumb grid__col-20 grid--direction-row lybMar-top lybPad-left-right--half" itemscope itemtype="http://schema.org/BreadcrumbList">
							
								<span itemprop="itemListElement" itemscope  itemtype="http://schema.org/ListItem">
									
										<a itemprop="item"  href="https://www.lybrate.com/" class="lybText--red" target="_self" title="Home">
											<span itemprop="name">Home</span>
										</a>
										&nbsp;&gt;&nbsp;
									
									
									<meta itemprop="position" content="1" />
								</span>
							
								<span itemprop="itemListElement" itemscope  itemtype="http://schema.org/ListItem">
									
									
										<span itemprop="name">Doctors</span>
										<link itemprop="url" href="https://www.lybrate.com/ayurveda">
									
									<meta itemprop="position" content="2" />
								</span>
							
						</div>
					</div>
					<div class="grid__col-20 lybMar-btm--half lybPad-left-right--half">
						<div class="ly-page-heading grid grid__col-15 grid--direction-row grid__col-lt-md-20">
							
								<div class="lybTrimStr grid__col-15 grid--align-self-center" id="header_wrapper">
									<h1 class="lybMar-no-margin lybTrimStr"> Doctors</h1>
								</div>
							
							
								
								
									<div hide-lt-md class="sortby grid__col-5">
									   <span class="filter-dropdown has-icon">
										   <label for="doctorFilter" class="filter">
											   <ly-svg-icon p="tune-vertical"></ly-svg-icon>
										   </label>
										   <select ng-model="ctrl.sortBySRP" ng-options="sortBy.code as sortBy.name for sortBy in ctrl.sortByLists" ng-change="ctrl.updateURL()"></select>
									   </span>
									</div>
								
							
							<div hide-gt-sm data-ng-if="ctrl.facetDTO" ng-click="ctrl.openFilter()" class="grid__col-5 grid--direction-row grid--align-center grid--justify-end lybText--small">
		                    	<ly-svg-icon p="filter-outline" style="height: 18px;"></ly-svg-icon>Filter
		                        <ly-svg-icon class="lybMar-top--half lybMar-left--half" data-ng-if="ctrl.filterApplyMob && $root.mobile" p="check-marked" style="color: #259b24"></ly-svg-icon>
							</div>
			             </div>
					</div>
				
				<div class="grid__col-20 grid--direction-row grid--wrap">
					<div class="grid__col-lt-md-20 grid__col-4 left-panel" data-ng-show="ctrl.showFilter">
			            <div class="left-panel__mobile-header {{$root.mobile ? 'lybShadow--depth-1' : ''}} grid__col-20 grid--direction-row grid--wrap grid--align-center flicker-hack ly-hide">
			                <ly-svg-icon hide-gt-sm p="close" ng-click="ctrl.closeFilter()"></ly-svg-icon>
			                <div class="grid--align-center grid__col-auto {{$root.mobile ? 'lybPad--half' : 'lybPad'}} grid--direction-row grid--justify-space-between">
			                    <span class="lybPull--left lybText--small lybText--bolder">Filter</span>
			                    <span class="lybPull--right lybText--tiny lybCursor--pointer lybText--red lybText--bolder" ng-show="ctrl.filterApplied" ng-click="ctrl.clearFilters()">Clear All</span>
			                </div>
			            </div>
			            <div class="grid__col-20 flicker-hack ly-hide">
			                <div class="left-panel__filter-panel grid__col-20" data-ng-if="ctrl.facetDTO && ctrl.facetDTO.filters && ctrl.facetDTO.filters.length>0">
			                    <div class="left-panel__filter-panel__filter-block">
			                        <span hide-gt-sm>
			                            <div class="left-panel__filter-panel__filter-block__header lybText--tiny head lybPad-top grid__col-lt-md-7" ng-click="ctrl.filterTitleClick('sort')" ng-class="ctrl.sortShow ? 'left-panel__selectedTiles':null">
			                                SORT BY
			                            </div>
			                            <div class="grid__col-lt-md-13 left-panel__filter-panel__filter-block__content" data-ng-show="ctrl.sortShow">
			                                <section>
			                                    <div class="content">
			                                        <input value="BMS" ng-click="ctrl.updateSort('BMS')" ng-model="ctrl.sortBySRP" class="lybMar-top-btm--half" type="radio" name="BMS" id="best_match">
			                                        <label class="lybText--tiny" for="best_match">Best Match</label>
			                                    </div>
			                                    <div class="content">
			                                        <input value="DBS" ng-click="ctrl.updateSort('DBS')" ng-model="ctrl.sortBySRP" class="lybMar-top-btm--half" type="radio" name="DBS" id="nearest">
			                                        <label class="lybText--tiny" for="nearest">Nearest First</label>
			                                    </div>
			                                </section>
			                            </div>
			                        </span>
			                        <span ng-repeat="filter in ctrl.facetDTO.filters" class="left-panel__filter-panel__filter-block__sections">
			                            <div class="left-panel__filter-panel__filter-block__header lybText--tiny head lybPad-top grid__col-lt-md-7" ng-init="displayName = filter.displayName ; code = filter.code" ng-click="ctrl.filterTitleClick(code)" ng-class="(ctrl.showFilterType && ctrl.showFilterType[code])? 'left-panel__selectedTiles':null">
			                                {{filter.displayName}}
			                            </div>
			                            <div class="grid__col-lt-md-13 left-panel__filter-panel__filter-block__content" ng-include="'shared-templates/srp_filter.tmpl.html'" data-ng-if="!filter.subFilters" data-ng-show="!$root.mobile || (ctrl.showFilterType && ctrl.showFilterType[code])" ng-init="isCstmChckbx= (filter.type=='CSTM_CHCKBX'? true : false)"></div>
			                            <div data-ng-if="filter.subFilters && filter.subFilters.length>0" data-ng-show="!$root.mobile || (ctrl.showFilterType && ctrl.showFilterType[code])" >
			                                <div class="grid__col-lt-md-13 left-panel__filter-panel__filter-block__content" ng-init="isCstmChckbx= (ctrl.searchCstm(filter.subFilters) ? true : false) ; subFilters= filter.subFilters">
			                                    <div ng-repeat="filter in filter.subFilters">
			                                        <div ng-include="'shared-templates/srp_filter.tmpl.html'"></div>
			                                    </div>
			                                </div>
			                            </div>
			                        </span>
			                    </div>
			                </div>
			                <div card class="left-panel__filter-panel grid__col-20 lybMar-top">
			                    <section>
			                        <div class="lybMar-top lybMar-btm lybPad-top--half lybText--tiny head">
			                            SHARE THIS PAGE
			                        </div>
			                        <div card-content class="grid">
			                            <div class="grid__col-20 grid--direction-row ppview-revamp__share-widget__share-icons">
			                                <li data-url="https://www.facebook.com/dialog/share?app_id=160588397472348&display=popup&href={{ctrl.shareUrl}}&redirect_uri={{ctrl.shareUrl}}" ng-click="ctrl.openShareWindow($event)" ga-category="{{$root.appView}}" ga-event="Share_Facebook">
			                                    <ly-svg-icon p="facebook" class="ly-svg--light-grey lybCursor--pointer lybMar-right--half"></ly-svg-icon>
			                                </li>
			                                <li data-url="https://twitter.com/intent/tweet?text={{ctrl.shareTitle}}&url={{ctrl.shareUrl}}?utm_source=twitter&utm_medium=referral&utm_campaign=profile_share; @Lybrate" ng-click="ctrl.openShareWindow($event)" ga-category="{{$root.appView}}" ga-event="Share_Twitter">
			                                    <ly-svg-icon p="twitter" class="ly-svg--light-grey lybCursor--pointer lybMar-right--half"></ly-svg-icon>
			                                </li>
			                                <li data-url="https://www.linkedin.com/shareArticle?mini=true&url={{ctrl.shareUrl}}&title={{ctrl.shareTitle}}&summary={{ctrl.shareDesc}}" ng-click="ctrl.openShareWindow($event)" ga-category="{{$root.appView}}" ga-event="Share_LinkedIn">
			                                    <ly-svg-icon p="linkedin" class="ly-svg--light-grey lybCursor--pointer lybMar-right--half linkedin"></ly-svg-icon>
			                                </li>
			                                <li data-url="https://plus.google.com/share?url={{ctrl.shareUrl}}" ng-click="ctrl.openShareWindow($event)" ga-category="{{$root.appView}}" ga-event="Share_GooglePlus">
			                                    <ly-svg-icon  p="google-plus" class="ly-svg--light-grey lybCursor--pointer lybMar-right--half googlePlus"></ly-svg-icon>
			                                </li>
			                            </div>
			                            <!--<div class="grid__col-20 lybPad-top">
			                                <div class="lybText--dark lybText--normal lybText--center lybPad-btm call-context-dialog__seperator">or</div>
			                            </div>
			                            <span class="grid__col-20 grid--direction-row ppview-revamp__share-widget__share-link">
			                                <input type="text" name="sharelink" value="{{ctrl.shareUrl}}" placeholder="{{ctrl.shareUrl}}" class="lybMar-no-margin lybPad-left--half" ng-model="ctrl.doctorLink" disabled=""/>
			                                <span button class="bordered grey flat lybText--capitalize"
			                                ng-click="ctrl.smsEmailClick('', )" ga-category="{{$root.appView}}" ga-event="Share SMS/Email">SMS/Email</span>
			                            </span>-->
			                        </div>
			                    </section>
			                </div>
			            </div>
            			<div button hide-gt-sm ng-click="ctrl.seachFilterApply()" class="primary flat left-panel__apply-btn flicker-hack ly-hide">Apply</div>
        			</div>
					<div class="grid__col-11 grid__col-lt-md-20">
						
						
							
							
							    <div class="grid__col-20 lybMar-top-btm--half lybPad--half" data-ng-if="!ctrl.applyFilters">
							        <div class="grid__col-20 grid--direction-row lybPad lybMar-btm" style="background:#f7f7f7;">
							            <div style="width:120px;height:120px;background:#eee;"></div>
							            <div class="dummy-container__info grid__col-auto grid--direction-column lybPad-left-right">
							                <div class="grid__col-12 lybMar-btm" style="height:20px;background:#eee;"></div>
							                <div class="grid__col-16 lybMar-top-btm" style="height:12px;background:#eee;"></div>
							                <div class="grid__col-10 lybMar-top-btm" style="height:12px;background:#eee;"></div>
							                <div class="grid__col-14 lybMar-top-btm" style="height:12px;background:#eee;"></div>
							            </div>
							        </div>
							        <div class="grid__col-20 grid--direction-row lybPad lybMar-top-btm" style="background:#f7f7f7;">
							            <div style="width:120px;height:120px;background:#eee;"></div>
							            <div class="dummy-container__info grid__col-auto grid--direction-column lybPad-left-right">
							                <div class="grid__col-12 lybMar-btm" style="height:20px;background:#eee;"></div>
							                <div class="grid__col-16 lybMar-top-btm" style="height:12px;background:#eee;"></div>
							                <div class="grid__col-10 lybMar-top-btm" style="height:12px;background:#eee;"></div>
							                <div class="grid__col-14 lybMar-top-btm" style="height:12px;background:#eee;"></div>
							            </div>
							        </div>
							        <div class="grid__col-20 grid--direction-row lybPad lybMar-top-btm" style="background:#f7f7f7;">
							            <div style="width:120px;height:120px;background:#eee;"></div>
							            <div class="dummy-container__info grid__col-auto grid--direction-column lybPad-left-right">
							                <div class="grid__col-12 lybMar-btm" style="height:20px;background:#eee;"></div>
							                <div class="grid__col-16 lybMar-top-btm" style="height:12px;background:#eee;"></div>
							                <div class="grid__col-10 lybMar-top-btm" style="height:12px;background:#eee;"></div>
							                <div class="grid__col-14 lybMar-top-btm" style="height:12px;background:#eee;"></div>
							            </div>
							        </div>
							        <div class="grid__col-20 grid--direction-row lybPad lybMar-top-btm" style="background:#f7f7f7;">
							            <div style="width:120px;height:120px;background:#eee;"></div>
							            <div class="dummy-container__info grid__col-auto grid--direction-column lybPad-left-right">
							                <div class="grid__col-12 lybMar-btm" style="height:20px;background:#eee;"></div>
							                <div class="grid__col-16 lybMar-top-btm" style="height:12px;background:#eee;"></div>
							                <div class="grid__col-10 lybMar-top-btm" style="height:12px;background:#eee;"></div>
							                <div class="grid__col-14 lybMar-top-btm" style="height:12px;background:#eee;"></div>
							            </div>
							        </div>
							        <div class="grid__col-20 grid--direction-row lybPad lybMar-top-btm" style="background:#f7f7f7;">
							            <div style="width:120px;height:120px;background:#eee;"></div>
							            <div class="dummy-container__info grid__col-auto grid--direction-column lybPad-left-right">
							                <div class="grid__col-12 lybMar-btm" style="height:20px;background:#eee;"></div>
							                <div class="grid__col-16 lybMar-top-btm" style="height:12px;background:#eee;"></div>
							                <div class="grid__col-10 lybMar-top-btm" style="height:12px;background:#eee;"></div>
							                <div class="grid__col-14 lybMar-top-btm" style="height:12px;background:#eee;"></div>
							            </div>
							        </div>
							    </div>
							
						
						<div class="grid__col-lt-20 lybMar-top-btm--half lybPad-left-right--half" data-ng-if="ctrl.applyFilters">
							
								
								
									
								
							
							<div card class="lybMar-btm lybPad no-result lybMar-top-btm--half flicker-hack ly-hide" ng-show="ctrl.noResultsFound">
								Sorry, your search did not match any doctors. Here are some other doctors that we have hand picked for you!
							</div>
			                <slider displayed="1" hide-pager="true" loop="true" data-ng-if="ctrl.sponsoredListingProfiles.length > 1 && ctrl.showListingSlider" class="lybMar-btm--half">
			                    <slider-slide class="green" data-ng-repeat="sponsoredProfile in ctrl.sponsoredListingProfiles">
			                        <ly-doctor-card profile="sponsoredProfile" buttons="ctrl.doctorbtns" show-clinic="true" zoom-slider="ctrl.showImageSlider" zoom-images="ctrl.images" repeat-index="{{$index+999}}" current-index="ctrl.current"
			                            show-quick-signup="ctrl.showQuickSignUp" quick-signup-success="ctrl.quickSignupSuccess" quick-signup-modal-text="ctrl.quickSignupModalText"
			                            treatment="ctrl.isTreatmentSearch" show-clinic-image="ctrl.showClinicImage" sponsored-tag="true" profile-type="{{ctrl.searchType}}">
			                        </ly-doctor-card>
			                    </slider-slide>
			                </slider>
			                <div data-ng-repeat="sponsoredProfile in ctrl.sponsoredListingProfiles" data-ng-if="ctrl.sponsoredListingProfiles.length == 1">
			                    <ly-doctor-card profile="sponsoredProfile" buttons="ctrl.doctorbtns" show-clinic="true" class="lybMar-btm" zoom-slider="ctrl.showImageSlider" zoom-images="ctrl.images" repeat-index="{{$index+999}}" current-index="ctrl.current"
			                        show-quick-signup="ctrl.showQuickSignUp" quick-signup-success="ctrl.quickSignupSuccess" quick-signup-modal-text="ctrl.quickSignupModalText"
			                        treatment="ctrl.isTreatmentSearch" show-clinic-image="ctrl.showClinicImage" sponsored-tag="true" profile-type="{{ctrl.searchType}}">
			                    </ly-doctor-card>
			                </div>

			                <div data-ng-repeat="(srpIndex, profile) in ctrl.listingProfiles">
			                    <ly-doctor-card profile="profile" buttons="ctrl.doctorbtns" show-clinic="true" class="lybMar-btm" zoom-slider="ctrl.showImageSlider" zoom-images="ctrl.images" repeat-index="{{$index}}" current-index="ctrl.current"
			                        show-quick-signup="ctrl.showQuickSignUp" quick-signup-success="ctrl.quickSignupSuccess" quick-signup-modal-text="ctrl.quickSignupModalText"  is-call-disable="ctrl.isCallDisable"
			                        treatment="ctrl.isTreatmentSearch" show-clinic-image="ctrl.showClinicImage" profile-type="{{ctrl.searchType}}">
			                    </ly-doctor-card>
								
								
									
										
											
											
										
									
								
								
								
								
								
								
			                    
			                    
								
			                </div>
			                <div class="grid grid__cell" ng-hide="ctrl.noResultsFound || ( ctrl.noMoreDoctors && ctrl.page <= 1)">
				                <a fab ng-href="{{ctrl.fetchPrevPage}}"  class="primary__inverted raised lybPull--left"
				                    rel="prev"
				                    target="_self"
				                    ng-class="{ 'ly-invis': ctrl.page < 2}" title="Previous"
				                    ga-category="{{$root.gaCategory}}"
				                    ga-event="Previous">
				                    <ly-svg-icon p="arrow-left"></ly-svg-icon>
				                </a>
				                <a fab ng-href="{{ctrl.fetchNextPage}}" class="primary__inverted raised lybPull--right"
				                    rel="next"
				                    target="_self"
				                    ng-class="{ 'ly-invis': ctrl.noMoreDoctors || ctrl.page >= ctrl.totalPages}" title="Next"
				                    ga-category="{{$root.gaCategory}}"
				                    ga-event="Next">
				                    <ly-svg-icon p="arrow-right"></ly-svg-icon>
				                </a>
				            </div>
			            </div>
					</div>
					
				            


				            
				            <div id="srp_tips_wraaper">
				            <div card  class="lybPad lybMar-top">
				                <div card-content>
				                    <div class="ly-tip-list ly-no-mar-top">
				                        <h3>Top Health Tips</h3>
				                        <div class="clear"></div>
				                        
											<div class="ly-tip-list__item lybSeperator lybPad-top--half">
												<div class="ly-tip-list__item__text-wrapper lybText--hover-underline">
												    <div class="subhead">
												     	<a href="https://www.lybrate.com/topic/when-to-check-when-to-worry-about-fever/a5313dddc99fd1bd624288c63706628d" target="_blank"
												     		class="lybCursor--pointer lybPad-top--half"
												     		title="When to Check, When to Worry About Fever! | Lybrate.com"
												     		ga-category="{{$root.appView}}" ga-event="">When to Check, When to Worry About Fever!</a>
												     </div>
											    </div>
											</div>
				                        
											<div class="ly-tip-list__item lybSeperator lybPad-top--half">
												<div class="ly-tip-list__item__text-wrapper lybText--hover-underline">
												    <div class="subhead">
												     	<a href="https://www.lybrate.com/topic/curing-long-term-osteoporosis/ec475514cef49e9345a94bee67758d16" target="_blank"
												     		class="lybCursor--pointer lybPad-top--half"
												     		title="Curing Long Term Osteoporosis | Lybrate.com"
												     		ga-category="{{$root.appView}}" ga-event="">Curing Long Term Osteoporosis</a>
												     </div>
											    </div>
											</div>
				                        
											<div class="ly-tip-list__item lybSeperator lybPad-top--half">
												<div class="ly-tip-list__item__text-wrapper lybText--hover-underline">
												    <div class="subhead">
												     	<a href="https://www.lybrate.com/topic/7-lifestyle-changes-you-must-do-if-you-are-suffering-from-insomnia/72a25c6b1f20ee1f4da6b692e079c34e" target="_blank"
												     		class="lybCursor--pointer lybPad-top--half"
												     		title="7 Lifestyle Changes You Must Do If You Are Suffering From Insomnia! | Lybrate.com"
												     		ga-category="{{$root.appView}}" ga-event="">7 Lifestyle Changes You Must Do If You Are Suffering From Insomnia!</a>
												     </div>
											    </div>
											</div>
				                        
											<div class="ly-tip-list__item lybSeperator lybPad-top--half">
												<div class="ly-tip-list__item__text-wrapper lybText--hover-underline">
												    <div class="subhead">
												     	<a href="https://www.lybrate.com/topic/suffering-from-lower-back-pain-5-ways-you-can-treat-it/8e7709138e8ab4fb0d8bb4de59d5bd40" target="_blank"
												     		class="lybCursor--pointer lybPad-top--half"
												     		title="Suffering From Lower Back Pain - 5 Ways You Can Treat it | Lybrate.com"
												     		ga-category="{{$root.appView}}" ga-event="">Suffering From Lower Back Pain - 5 Ways You Can Treat it</a>
												     </div>
											    </div>
											</div>
				                        
											<div class="ly-tip-list__item lybSeperator lybPad-top--half">
												<div class="ly-tip-list__item__text-wrapper lybText--hover-underline">
												    <div class="subhead">
												     	<a href="https://www.lybrate.com/topic/alcohol-addiction-and-ways-homeopathy-can-help-you-leaving-it/1549f7b0c96e35ebaac7c5fd4d35cf08" target="_blank"
												     		class="lybCursor--pointer lybPad-top--half"
												     		title="Alcohol Addiction And Ways Homeopathy Can Help You Leaving It! | Lybrate.com"
												     		ga-category="{{$root.appView}}" ga-event="">Alcohol Addiction And Ways Homeopathy Can Help You Leaving It!</a>
												     </div>
											    </div>
											</div>
				                        
											<div class="ly-tip-list__item lybSeperator lybPad-top--half">
												<div class="ly-tip-list__item__text-wrapper lybText--hover-underline">
												    <div class="subhead">
												     	<a href="https://www.lybrate.com/topic/diabetes-and-cancer-the-new-epidemic/cf7dea6924b9c5e2fe507b680fea2be7" target="_blank"
												     		class="lybCursor--pointer lybPad-top--half"
												     		title="Diabetes and Cancer: The New Epidemic? | Lybrate.com"
												     		ga-category="{{$root.appView}}" ga-event="">Diabetes and Cancer: The New Epidemic?</a>
												     </div>
											    </div>
											</div>
				                        
				                    </div>
				                </div>
				            </div>
				            </div>
				            
				        </div>

				</div>
			</div>
		</div>

		</div>
		
			


				

<div class="footer seo_footer_links" id="footer" style="display:none;" data-ng-show="$root.showFooter">
    <div class="layoutWrapper">
        <div class="lyp_padingWrapper">
            <div class="left">
              
                  
                  
                       
                       
                        
                        <div class="row-fluid" layout-gt-sm="row">
  
  </div>
  
  
  <div class="span3" flex>
    
  </div>
</div>
                        
                       
                  
              
            </div>
            <div class="right">
                <div class="section-title">Lybrate.com</div>
                <div>
                    
                </div>
            </div>
            <div class="clear"></div>
        </div>
        <div class="footer-outer lyp_padingWrapper">
            
           
            <div class="clear"></div>
        </div>
        
        </div>
    </div>
</div>

			
		
	
	 			
	 		
	 	
	 	
 	



<script>
if(!(/MSIE \d|Trident.*rv:/.test(navigator.userAgent))) {
    Lybrate.SCRIPTS = [
       '//ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js',
       '//ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular-route.min.js',
       '//ajax.googleapis.com/ajax/libs/angularjs/1.5.8/angular-touch.min.js',
	   'https://l3.lybcdn.com/js/9C0254A6D7943549909BC78E7F50B424/dist/app-rm-md.min.js',
	   
    ];
	(function () {
	    var failure = false;
	    var GROUPS = Lybrate.SCRIPTS || [];
	    !function(e,t,r){function n(){for(;d[0]&&"loaded"==d[0][f];)c=d.shift(),c[o]=!i.parentNode.insertBefore(c,i)}for(var s,a,c,d=[],i=e.scripts[0],o="onreadystatechange",f="readyState";s=r.shift();)a=e.createElement(t),"async"in i?(a.async=!1,e.head.appendChild(a)):i[f]?(d.push(a),a[o]=n):e.write("<"+t+' src="'+s+'" defer></'+t+">"),a.src=s}(document,"script", GROUPS);
	    //inlineCSS(document);
	})();
}


window.onload = function() {
    deferredFunction();
};

function deferredFunction(){
    if(!(/MSIE \d|Trident.*rv:/.test(navigator.userAgent))) {
	    /* ga */
	    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	     (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	     m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	     })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	    ga('create', 'UA-38191252-1', {'siteSpeedSampleRate': 100});
	    /* ga */
    }

     /* google tag manager */
    (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-NV4F68');
    /* google tag manager */

    
};

/* function inlineCSS(document) {
	var css = document.createElement('link');
    css.type = 'text/css';
    css.rel= "stylesheet";
    css.href = "https://l4.lybcdn.com/css/e00d951f-cda3-4142-9615-17c7b4dfcc28/dist/app-rm-md.min.css";
    document.body.appendChild(css);
    //css.parentElement.removeChild(css);
} */


</script>



<script type="text/javascript">
	if (detectIE() && detectIE() < 10) {document.getElementById("unsupported").style.display = "block";}
	function detectIE() {var ua = window.navigator.userAgent;var msie = ua.indexOf('MSIE ');if (msie > 0) {return parseInt(ua.substring(msie + 5, ua.indexOf('.', msie)), 10);}var trident = ua.indexOf('Trident/');if (trident > 0) {var rv = ua.indexOf('rv:');return parseInt(ua.substring(rv + 3, ua.indexOf('.', rv)), 10);}var edge = ua.indexOf('Edge/');if (edge > 0) {return parseInt(ua.substring(edge + 5, ua.indexOf('.', edge)), 10);}return false;}

	var ua = navigator.userAgent || navigator.vendor || navigator.opera;
	function getAndroid(ua) {
		var userAgent = ua || navigator.userAgent || navigator.vendor || navigator.opera;
		if (/windows phone/i.test(userAgent)) {
			return false;
		}
		if (/android/i.test(userAgent)) {
			return true;
		}
		return false;
	}
	function returnVersion() {
		if (getAndroid(ua)) {
			ua = ua.toLowerCase();
			var match = ua.match(/android\s([0-9\.]*)/);
			if (match[0]) {
				match = match[0].replace("android ", "");
				return parseFloat(match);
			}
			return false;
		}
	}
	if (returnVersion() && returnVersion() < 5.0) {
		var style = "<style type='text/css'>.search-overlay__default-list__list-items__item ly-svg-icon{padding:15px 0;}.search-overlay .autocomplete .icon__search--cta{padding:11px 9px 12px 12px;}.search-overlay .autocomplete .icon__search--left{padding:11px 8px 12px;}</style>";
		document.write(style);
	}
</script>


	<script type="text/javascript">
	window.addEventListener("moengage_loaded",function(){
    	Moengage.add_first_name('Mehul');
    	//Moengage.add_last_name("Neeson")
    	Moengage.add_gender('male');
    	Moengage.add_user_name("91505241587");
    	Moengage.add_user_attribute("User_City","ahmedabad");
    	Moengage.add_user_attribute("User_Affinity_Topic_1","145");
    	Moengage.add_user_attribute("User_Affinity_Topic_2","");
    	Moengage.add_user_attribute("User_Affinity_Topic_3","");
    });
  </script>


<script type="text/javascript">window.NREUM||(NREUM={});NREUM.info={"applicationID":"5988520","applicationTime":16,"beacon":"bam.nr-data.net","queueTime":0,"licenseKey":"8f1c6adb3b","transactionName":"MgMEN0JTDUZVVhVeCgtJNRNCWw1Sd1oPQxcKCgoGQh0QUFVHAl9FTSEjNxk=","agent":"","errorBeacon":"bam.nr-data.net"}</script></body>
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-NV4F68"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

</html>


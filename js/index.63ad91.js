(function(d){var h=[];d.loadImages=function(a,e){"string"==typeof a&&(a=[a]);for(var f=a.length,g=0,b=0;b<f;b++){var c=document.createElement("img");c.onload=function(){g++;g==f&&d.isFunction(e)&&e()};c.src=a[b];h.push(c)}}})(window.jQuery);
var wl;

ldsrcset=function(t){var e,r=document.querySelectorAll(t);for(e=0;e<r.length;e++){var c=r[e].getAttribute("data-srcset");r[e].setAttribute("srcset",c)}},ldsrc=function(t){var e=document.querySelector(t);if(e){var r=e.getAttribute("data-src");e.setAttribute("src",r)}};ldv=function(t){var e=document.querySelector(t);if(e){var r=document.querySelector(t+" source"),c=r.getAttribute("data-src");r.setAttribute("src",c),e.load()}};!function(){if("Promise"in window&&void 0!==window.performance){var e,t,r=document,n=function(){return r.createElement("link")},o=new Set,a=n(),i=a.relList&&a.relList.supports&&a.relList.supports("prefetch"),s=location.href.replace(/#[^#]+$/,"");o.add(s);var c=function(e){var t=location,r="http:",n="https:";if(e&&e.href&&e.origin==t.origin&&[r,n].includes(e.protocol)&&(e.protocol!=r||t.protocol!=n)){var o=e.pathname;if(!(e.hash&&o+e.search==t.pathname+t.search||"?preload=no"==e.search.substr(-11)||".html"!=o.substr(-5)&&".html"!=o.substr(-5)&&"/"!=o.substr(-1)))return!0}},u=function(e){var t=e.replace(/#[^#]+$/,"");if(!o.has(t)){if(i){var a=n();a.rel="prefetch",a.href=t,r.head.appendChild(a)}else{var s=new XMLHttpRequest;s.open("GET",t,s.withCredentials=!0),s.send()}o.add(t)}},p=function(e){return e.target.closest("a")},f=function(t){var r=t.relatedTarget;r&&p(t)==r.closest("a")||e&&(clearTimeout(e),e=void 0)},d={capture:!0,passive:!0};r.addEventListener("touchstart",function(e){t=performance.now();var r=p(e);c(r)&&u(r.href)},d),r.addEventListener("mouseover",function(r){if(!(performance.now()-t<1200)){var n=p(r);c(n)&&(n.addEventListener("mouseout",f,{passive:!0}),e=setTimeout(function(){u(n.href),e=void 0},80))}},d)}}();

$(function(){
r=function(){dpi=window.devicePixelRatio;var a='data-src';var e=document.querySelector('.un5');if(e.hasAttribute('src')){a='src';}e.setAttribute(a,(dpi>1)?((dpi>2)?'images/ipad-silver-portrait-1110.png':'images/ipad-silver-portrait-740.png'):'images/ipad-silver-portrait-370.png');
var a='data-src';var e=document.querySelector('.un6');if(e.hasAttribute('src')){a='src';}e.setAttribute(a,(dpi>1)?((dpi>2)?'images/ipad-silver-portrait-1110.png':'images/ipad-silver-portrait-740.png'):'images/ipad-silver-portrait-370.png');
var a='data-src';var e=document.querySelector('.un15');if(e.hasAttribute('src')){a='src';}e.setAttribute(a,(dpi>1)?((dpi>2)?'images/5673901-2880.jpg':'images/5673901-1920.jpg'):'images/5673901-960.jpg');
var a='data-src';var e=document.querySelector('.un17');if(e.hasAttribute('src')){a='src';}e.setAttribute(a,(dpi>1)?((dpi>2)?'images/apple-watch-series-6-44mm-space-gray-1044.png':'images/apple-watch-series-6-44mm-space-gray-696.png'):'images/apple-watch-series-6-44mm-space-gray-348.png');
var a='data-src';var e=document.querySelector('.un18');if(e.hasAttribute('src')){a='src';}e.setAttribute(a,(dpi>1)?((dpi>2)?'images/imac-24-silver-2025.jpeg':'images/imac-24-silver-1350.jpeg'):'images/imac-24-silver-675.jpeg');
var a='data-src';var e=document.querySelector('.un19');if(e.hasAttribute('src')){a='src';}e.setAttribute(a,(dpi>1)?((dpi>2)?'images/iphone-14-pro-max-space-black-portrait-882.png':'images/iphone-14-pro-max-space-black-portrait-588.png'):'images/iphone-14-pro-max-space-black-portrait-294.png');
var a='data-src';var e=document.querySelector('.un20');if(e.hasAttribute('src')){a='src';}e.setAttribute(a,(dpi>1)?((dpi>2)?'images/img_1467-438.png':'images/img_1467-292.png'):'images/img_1467-146.png');
var e=document.querySelector('.un1');e.setAttribute('src',(dpi>1)?((dpi>2)?'images/photo-copy-735.png':'images/photo-copy-490.png'):'images/photo-copy-245.png');
var a='data-src';var e=document.querySelector('.un2');if(e.hasAttribute('src')){a='src';}e.setAttribute(a,(dpi>1)?((dpi>2)?'images/215bbe0d-01c3-4847-8b64-f30410274556-786.jpg':'images/215bbe0d-01c3-4847-8b64-f30410274556-524.jpg'):'images/215bbe0d-01c3-4847-8b64-f30410274556-262.jpg');
var e=document.querySelector('.un3');e.setAttribute('src',(dpi>1)?((dpi>2)?'images/dnpninpue4o-2880.jpg':'images/dnpninpue4o-1920.jpg'):'images/dnpninpue4o-960.jpg');};
if(!window.HTMLPictureElement){r();}
!function(){var e=document.querySelectorAll('a[href^="#"]');[].forEach.call(e,function(e){e.addEventListener("click",function(t){var o=0;if(e.hash.length>1){var n=parseFloat(getComputedStyle(document.body).getPropertyValue("zoom"));n||(n=1);var r=document.querySelectorAll('[name="'+e.hash.slice(1)+'"]')[0];if(!r)return;var l=/chrome/i.test(navigator.userAgent);o=l?r.getBoundingClientRect().top*n+pageYOffset:(r.getBoundingClientRect().top+pageYOffset)*n}if("scrollBehavior"in document.documentElement.style)scroll({top:o,left:0,behavior:"smooth"});else if("requestAnimationFrame"in window){var a=pageYOffset,i=null;requestAnimationFrame(function e(t){i||(i=t);var n=t-i;scrollTo(0,a<o?(o-a)*n/400+a:a-(a-o)*n/400),n<400?requestAnimationFrame(e):scrollTo(0,o)})}else scrollTo(0,o);t.preventDefault()},!1)})}();
initMenu($('#m1')[0]);
wl=new woolite();
wl.init();
wl.addAnimation($('.un4'), "1.00s", "0.00s", 1, 100);
wl.addAnimation($('.un7'), "1.00s", "0.00s", 1, 100);
wl.addAnimation($('.un8'), "1.00s", "0.00s", 1, 100);
wl.addAnimation($('.un9'), "1.00s", "0.00s", 1, 100);
wl.addAnimation($('.un10'), "1.00s", "0.00s", 1, 100);
wl.addAnimation($('.un11'), "1.00s", "0.00s", 1, 100);
wl.addAnimation($('.un12'), "1.00s", "0.00s", 1, 100);
wl.addAnimation($('.un13'), "1.00s", "0.00s", 1, 100);
wl.addAnimation($('.un14'), "1.00s", "0.00s", 1, 100);
wl.addAnimation($('.un16'), "1.00s", "0.00s", 1, 100);
wl.start();
if(location.hash){var e=location.hash.replace("#",""),o=function(){var t=document.querySelectorAll('[name="'+e+'"]')[0];t&&t.scrollIntoView(),"0px"===window.getComputedStyle(document.body).getPropertyValue("min-width")&&setTimeout(o,100)};o()}

});lfn=function(){ldsrcset('.un21 source');ldsrcset('.un22 source');ldsrcset('.un23 source');ldsrcset('.un24 source');ldsrcset('.un25 source');ldsrcset('.un26 source');ldsrcset('.un27 source');ldsrcset('.un28 source');};if(document.readyState=="complete"){lfn();}else{$(window).on("load",lfn);}
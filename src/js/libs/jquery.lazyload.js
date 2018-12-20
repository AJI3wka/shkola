!function(l,r,t,s){var i=l(r);l.fn.lazyload=function(t){var e,a=this,f={threshold:0,failure_limit:0,event:"scroll.lazyload",effect:"show",container:r,data_attribute:"original",data_srcset:"srcset",skip_invisible:!1,appear:null,load:null,placeholder:"data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs="};function o(){var e=0;a.each(function(){var t=l(this);if(!f.skip_invisible||t.is(":visible"))if(l.abovethetop(this,f)||l.leftofbegin(this,f));else if(l.belowthefold(this,f)||l.rightoffold(this,f)){if(++e>f.failure_limit)return!1}else t.trigger("appear"),e=0})}return t&&(s!==t.failurelimit&&(t.failure_limit=t.failurelimit,delete t.failurelimit),s!==t.effectspeed&&(t.effect_speed=t.effectspeed,delete t.effectspeed),l.extend(f,t)),e=f.container===s||f.container===r?i:l(f.container),0===f.event.indexOf("scroll")&&e.off(f.event).on(f.event,function(){return o()}),this.each(function(){var i=this,n=l(i);i.loaded=!1,n.attr("src")!==s&&!1!==n.attr("src")||n.is("img")&&n.attr("src",f.placeholder),n.one("appear",function(){if(!this.loaded){if(f.appear){var t=a.length;f.appear.call(i,t,f)}l("<img />").one("load",function(){var t=n.attr("data-"+f.data_attribute),e=n.attr("data-"+f.data_srcset);t!=n.attr("src")&&(n.hide(),n.is("img")&&(n.attr("src",t),null!=e&&n.attr("srcset",e)),n.is("video")?n.attr("poster",t):n.css("background-image","url('"+t+"')"),n[f.effect](f.effect_speed)),i.loaded=!0;var o=l.grep(a,function(t){return!t.loaded});if(a=l(o),f.load){var r=a.length;f.load.call(i,r,f)}}).attr({src:n.attr("data-"+f.data_attribute),srcset:n.attr("data-"+f.data_srcset)||""})}}),0!==f.event.indexOf("scroll")&&n.off(f.event).on(f.event,function(){i.loaded||n.trigger("appear")})}),i.off("resize.lazyload").bind("resize.lazyload",function(){o()}),/(?:iphone|ipod|ipad).*os 5/gi.test(navigator.appVersion)&&i.on("pageshow",function(t){t.originalEvent&&t.originalEvent.persisted&&a.each(function(){l(this).trigger("appear")})}),l(function(){o()}),this},l.belowthefold=function(t,e){return(e.container===s||e.container===r?(r.innerHeight?r.innerHeight:i.height())+i.scrollTop():l(e.container).offset().top+l(e.container).height())<=l(t).offset().top-e.threshold},l.rightoffold=function(t,e){return(e.container===s||e.container===r?i.width()+i.scrollLeft():l(e.container).offset().left+l(e.container).width())<=l(t).offset().left-e.threshold},l.abovethetop=function(t,e){return(e.container===s||e.container===r?i.scrollTop():l(e.container).offset().top)>=l(t).offset().top+e.threshold+l(t).height()},l.leftofbegin=function(t,e){return(e.container===s||e.container===r?i.scrollLeft():l(e.container).offset().left)>=l(t).offset().left+e.threshold+l(t).width()},l.inviewport=function(t,e){return!(l.rightoffold(t,e)||l.leftofbegin(t,e)||l.belowthefold(t,e)||l.abovethetop(t,e))},l.extend(l.expr[":"],{"below-the-fold":function(t){return l.belowthefold(t,{threshold:0})},"above-the-top":function(t){return!l.belowthefold(t,{threshold:0})},"right-of-screen":function(t){return l.rightoffold(t,{threshold:0})},"left-of-screen":function(t){return!l.rightoffold(t,{threshold:0})},"in-viewport":function(t){return l.inviewport(t,{threshold:0})},"above-the-fold":function(t){return!l.belowthefold(t,{threshold:0})},"right-of-fold":function(t){return l.rightoffold(t,{threshold:0})},"left-of-fold":function(t){return!l.rightoffold(t,{threshold:0})}})}(jQuery,window,document);
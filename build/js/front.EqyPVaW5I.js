(()=>{"use strict";var t={n:e=>{var a=e&&e.__esModule?()=>e.default:()=>e;return t.d(a,{a}),a},d:(e,a)=>{for(var i in a)t.o(a,i)&&!t.o(e,i)&&Object.defineProperty(e,i,{enumerable:!0,get:a[i]})},o:(t,e)=>Object.prototype.hasOwnProperty.call(t,e)};const e=jQuery;!function(t){const e=PRHelper.getType(),a=PRHelper.getHook(),i=PRHelper.getHTML(),n=PRHelper.getSetting().getOption("cookie_guest_id");if(!e.isEmpty(n)){let o=PMPRUtil.getCookie(n);if(e.isEmpty(o)){function r(t){let e,a,i=0;for(e=0;e<t.length;e++)a=t.charCodeAt(e),i=(i<<5)-i+a,i|=0;return i}try{let l=[];e.each(navigator,((t,a)=>{"object"==typeof t&&(t=JSON.stringify(t)),e.isEmpty(t)||l.push(`${a}:${t}`)})),o=r(l.join(",").replace(/[ \t\r]+/g,""))}catch(c){o=""}}a.doAction("fingerprint_generated",o)}e.each(i.getElements(".nonce-container"),(t=>{i.is(t,":empty")&&i.getNonceValue(t)})),t.fn.PMPRAnimate=function(e,a=!1){!1!==a&&a.each((function(){let e=t(this),a=`animated ${e.attr("data-effect")}`;e.removeClass(a)})),setTimeout((()=>{e.each((function(){let e=t(this),a=e.data("delay"),i=`animated ${e.attr("data-effect")}`;e.css({"animation-delay":a,"-webkit-animation-delay":a}),e.addClass(i)}))}),100)},t.fn.scrollTo=function(e){let a,i=t(this);PMPRUtil.isEmpty(e)&&(e=i.attr("href")),a=i.data("scroll-duration"),PMPRUtil.isEmpty(a)&&(a=1300),PMPRUtil.isEmpty(e)||t("html, body").animate({scrollTop:t(e).offset().top},a)}}(t.n(e)())})();
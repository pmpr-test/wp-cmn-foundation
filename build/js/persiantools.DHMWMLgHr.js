/*! For license information please see persiantools.DHMWMLgHr.js.LICENSE.txt */
(()=>{"use strict";const t={verifyNationalID:t=>{if(!t)return!1;let r=t.toString();const n=r.length;if(r in{"0000000000":!0,1111111111:!0,2222222222:!0,3333333333:!0,4444444444:!0,5555555555:!0,6666666666:!0,7777777777:!0,8888888888:!0,9999999999:!0})return!1;if(n<8||n>10)return!1;if(r=("00"+r).substring(n+2-10),0==+r.substring(3,9))return!1;const e=parseInt(r.substring(0,3),10);if(!(e>=1&&e<=8||e>=11&&e<=75||e>=81&&e<=98||e>=105&&e<=129||e>=136&&e<=138||e>=145&&e<=146||e>=149&&e<=150||e>=152&&e<=155||e>=158&&e<=175||e>=181&&e<=275||e>=279&&e<=375||e>=376&&e<=387||e>=392&&e<=407||e>=412&&e<=428||e>=431&&e<=432||e>=438&&e<=439||e>=442&&e<=470||e>=481&&e<=493||e>=496&&e<=498||e>=499&&e<=599||e>=600&&e<=699||e>=700&&e<=732))return!1;const s=+r.substring(9);let i=0;for(let t=0;t<9;t++)i+=+r.substring(t,t+1)*(10-t);return i%=11,i<2&&s===i||i>=2&&s===11-i},verifyDebitCard:t=>{if(!t)return!1;const r=t.toString().replace(/\s/g,"");if(r.length<16||0===parseInt(r.substring(1,10),10)||0===parseInt(r.substring(10,16),10))return!1;let n,e,s=0;for(let t=0;t<16;t++)n=t%2==0?2:1,e=parseInt(r.substring(t,t+1),10)*n,s+=e>9?e-9:e;return s%10==0},verifyIBAN:t=>{if((t=t.toUpperCase().replace(/\s/g,"")).startsWith("IR")||(t=`IR${t}`),26!==t.length)return!1;const r=t.charCodeAt(0)-65+10,n=t.charCodeAt(1)-65+10;let e=t.substring(4);e+=r.toString()+n.toString()+t.substring(2,4);let s,i=e;for(;i.length>2;)s=i.slice(0,9),i=parseInt(s,10)%97+i.slice(s.length);return i=parseInt(i,10)%97,1===i}};window.PRPersianTools=t})();
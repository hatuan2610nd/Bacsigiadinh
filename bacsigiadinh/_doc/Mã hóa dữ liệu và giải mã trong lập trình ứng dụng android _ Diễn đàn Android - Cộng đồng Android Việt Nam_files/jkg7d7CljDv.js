/*!CK:2323283634!*//*1444075545,*/

if (self.CavalryLogger) { CavalryLogger.start_js(["7x34s"]); }

__d("FollowRequestResultEnum",[],function a(b,c,d,e,f,g){c.__markCompiled&&c.__markCompiled();f.exports={REVERT:"revert"};},null,{});
__d("ProfileSubFollowStatus",[],function a(b,c,d,e,f,g){c.__markCompiled&&c.__markCompiled();f.exports={REGULAR_FOLLOW:"follow",RECAP:"recap",SEE_FIRST:"see_first"};},null,{});
__d("SeeFirstNuxEvents",[],function a(b,c,d,e,f,g){c.__markCompiled&&c.__markCompiled();f.exports={SWITCHER_NUX_IMP:"switcher_nux_imp",SEE_FIRST_SELECTED:"see_first_selected",XOUT:"xout",NOT_NOW:"not_now",IMP:"imp",ENTER_DIALOG:"enter_dialog",BATCH_SEE_FIRST_SELECTED:"batch_see_first_selected"};},null,{});
__d('FeedBlacklistButton',['Arbiter','Event'],function a(b,c,d,e,f,g,h,i){if(c.__markCompiled)c.__markCompiled();var j={BLACKLIST:'feed_blacklist',UNBLACKLIST:'feed_unblacklist',init:function(k,l,m,n){i.listen(l,'click',function(){var o={profile_id:n};h.inform(j.BLACKLIST,o);h.inform('UnfollowingUser',o);});i.listen(m,'click',function(){var o={profile_id:n};h.inform(j.UNBLACKLIST,o);h.inform('FollowingUser',o);});h.subscribe(j.BLACKLIST,function(o,p){if(n==p.profile_id)k.swap();});h.subscribe(j.UNBLACKLIST,function(o,p){if(n==p.profile_id)k.unswap();});}};f.exports=b.FeedBlacklistButton||j;},null);
__d('Tooltip',['Event','AsyncRequest','ContextualLayer','ContextualLayerAutoFlip','CSS','DOM','Style','TooltipData','Vector','emptyFunction','getElementText','getInlineBoundingRect','nl2br','setImmediate','fbt'],function a(b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v){if(c.__markCompiled)c.__markCompiled();var w=null,x=null,y=null,z=null,aa=null,ba=[],ca=[];function da(){if(!z){aa=m.create('div',{className:'tooltipContent','data-testid':'tooltip_testid'});var ha=m.create('i',{className:'arrow'}),ia=m.create('div',{className:'uiTooltipX'},[aa,ha]);z=new j({},ia);z.shouldSetARIAProperties(false);z.enableBehavior(k);}}function ea(ha,ia){ga.set(ha,v._("\u0110ang t\u1ea3i..."));new i(ia).setHandler(function(ja){ga.set(ha,ja.getPayload());}).setErrorHandler(q).send();}var fa;h.listen(document.documentElement,'mouseover',function(event){fa=event;u(function(){fa=null;});});var ga=babelHelpers._extends({},o,{isActive:function(ha){return ha===w;},process:function(ha,ia){if(!m.contains(ha,ia))return;if(ha!==w){ga.fetchIfNecessary(ha);var ja=ha.getAttribute('data-tooltip-delay');if(ja){ja=parseInt(ja,10)||1000;ga._showWithDelay(ha,ja);}else ga.show(ha);}},fetchIfNecessary:function(ha){var ia=ha.getAttribute('data-tooltip-uri');if(ia){ha.removeAttribute('data-tooltip-uri');ea(ha,ia);}},hide:function(){if(w){z.hide();w=null;while(ba.length)ba.pop().remove();}},show:function(ha){da();ga.hide();var ia=o._get(ha);if(ia.suppress)return;var ja=ia.content;if(ia.overflowDisplay){if(ha.offsetWidth>=ha.scrollWidth)return;if(!ja)ja=r(ha);}if(!ja)return;var ka=0,la=0;if(ia.position==='left'||ia.position==='right'){la=(ha.offsetHeight-28)/2;}else if(ia.alignH!=='center'){var ma=ha.offsetWidth;if(ma<32)ka=(ma-32)/2*(ia.alignH==='right'?-1:1);}z.setContextWithBounds(ha,s(ha,fa&&p.getEventPosition(fa))).setOffsetX(ka).setOffsetY(la).setPosition(ia.position).setAlignment(ia.alignH);if(typeof ja==='string'){l.addClass(z.getRoot(),'invisible_elem');var na=m.create('span',{},t(ja));if(ia.textDirection)na=m.create('bdo',{dir:ia.textDirection},na);var oa=m.create('div',{className:'tooltipText'},na);m.setContent(aa,oa);z.show();var pa;if(oa.getClientRects){var qa=oa.getClientRects()[0];if(qa)pa=Math.ceil(qa.right-qa.left);}if(!pa)pa=oa.offsetWidth;if(pa<na.offsetWidth){l.addClass(oa,'tooltipWrap');z.updatePosition();}l.removeClass(z.getRoot(),'invisible_elem');}else{m.setContent(aa,ja);z.show();}var ra=function(ta){if(!m.contains(w,ta.getTarget()))ga.hide();};ba.push(h.listen(document.documentElement,'mouseover',ra),h.listen(document.documentElement,'focusin',ra));var sa=n.getScrollParent(ha);if(sa!==window)ba.push(h.listen(sa,'scroll',ga.hide));if(!ia.persistOnClick)ba.push(h.listen(ha,'click',ga.hide));w=ha;},_showWithDelay:function(ha,ia){if(ha!==x)ga._clearDelay();if(!y){var ja=function(ka){if(!m.contains(x,ka.getTarget()))ga._clearDelay();};ca.push(h.listen(document.documentElement,'mouseover',ja),h.listen(document.documentElement,'focusin',ja));x=ha;y=setTimeout(function(){ga._clearDelay();ga.show(ha);},ia);}},_clearDelay:function(){clearTimeout(y);x=null;y=null;while(ca.length)ca.pop().remove();}});h.listen(window,'scroll',ga.hide);f.exports=ga;},null);
__d("XPubcontentChainedSuggestionsController",["XController"],function a(b,c,d,e,f,g){c.__markCompiled&&c.__markCompiled();f.exports=c("XController").create("\/pubcontent\/chained_suggestions\/",{pageid:{type:"String"},profileid:{type:"Int"},eh:{type:"Bool",defaultValue:false},friendid:{type:"Int"}});},null,{});
__d('SubscribeButton',['Arbiter','AsyncRequest','Button','CSS','Event','Tooltip','XPubcontentChainedSuggestionsController'],function a(b,c,d,e,f,g,h,i,j,k,l,m,n){if(c.__markCompiled)c.__markCompiled();var o={SUBSCRIBED:'FollowingUser',UNSUBSCRIBED:'UnfollowingUser',RECAP:'RecapUser',_enable:function(p){j.setEnabled(p,true);m.remove(p);},_disable:function(p,q){j.setEnabled(p,false);if(q)m.set(p,q);},init:function(p,q,r,s,t,u,v,w,x){w=typeof w!=='undefined'?w:false;var y=typeof x!=='undefined';if(y&&!v&&!w)o._disable(q,x);l.listen(q,'click',function(){h.inform(o.SUBSCRIBED,{profile_id:s,suppress:true});});h.subscribe(o.SUBSCRIBED,function(z,aa){if(s==aa.profile_id){if(!t)r.suppressNextMouseEnter&&r.suppressNextMouseEnter();if(y){if(typeof aa.connected!=='undefined')v=aa.connected;if(v||w)o._enable(q);}p.swap();if(u===true&&aa.chaining!==false){var ba=n.getURIBuilder().setInt('profileid',s).getURI();new i().setURI(ba).send();}}});h.subscribe(o.UNSUBSCRIBED,function(z,aa){if(s==aa.profile_id){p.unswap();r.hideFlyout&&r.hideFlyout();if(y){if(typeof aa.connected!=='undefined')v=aa.connected;if(!v&&!w)o._disable(q,x);}h.inform('SubMenu/Reset');}});},initSubscribe:function(p,q){l.listen(p,'click',function(){setTimeout(h.inform.bind(h,o.SUBSCRIBED,{profile_id:q}),0);});},initUnsubscribe:function(p,q){l.listen(p,'click',function(){setTimeout(h.inform.bind(h,o.UNSUBSCRIBED,{profile_id:q}),0);});},initSubscribeMenuItem:function(p,q,r){k.hide(q);this._initMenuItem(p,q,r);},initUnsubscribeMenuItem:function(p,q,r){k.hide(p);this._initMenuItem(p,q,r);},_initMenuItem:function(p,q,r){this.initSubscribe(p,r);this.initUnsubscribe(q,r);h.subscribe(o.SUBSCRIBED,function(s,t){k.hide(p);k.show(q);});h.subscribe(o.UNSUBSCRIBED,function(s,t){k.hide(q);k.show(p);});}};f.exports=o;},null);
__d("XFeedSeeFirstNuxController",["XController"],function a(b,c,d,e,f,g){c.__markCompiled&&c.__markCompiled();f.exports=c("XController").create("\/feed\/control\/see_first\/nux\/",{});},null,{});
__d('ProfileHoverButton',['Arbiter','CSS','DOM','FeedBlacklistButton','ProfileSubFollowStatus','FollowRequestResultEnum','Run','AsyncRequest','Event','SubscriptionsHandler','SubscribeButton','SeeFirstNuxEvents','XFeedSeeFirstNuxController','cx','csx'],function a(b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v){if(c.__markCompiled)c.__markCompiled();var w=1;function x(y,z,aa,ba){'use strict';this.$ProfileHoverButton1=y;this.$ProfileHoverButton2=z;this.$ProfileHoverButton3=ba;this.$ProfileHoverButton4=aa;this.$ProfileHoverButton5=null;this.$ProfileHoverButton6=new q();this.$ProfileHoverButton2.subscribe('itemclick',(function(ca,da){var ea=da.item.getValue();if(ea==='unfollow'){h.inform(r.UNSUBSCRIBED,{profile_id:this.$ProfileHoverButton3.id});h.inform(k.BLACKLIST,{profile_id:this.$ProfileHoverButton3.id});if(this.$ProfileHoverButton4)this.$ProfileHoverButton4.hide();}else{this.setSelected(ea);if(ea===l.SEE_FIRST&&this.$ProfileHoverButton4){this.$ProfileHoverButton4.hide();this.logNux(s.SEE_FIRST_SELECTED);}}}).bind(this));this.$ProfileHoverButton6.addSubscriptions(h.subscribe(r.SUBSCRIBED,this.setSelected.bind(this,l.REGULAR_FOLLOW)));this.$ProfileHoverButton6.addSubscriptions(h.subscribe(m.REVERT,this.handleResponse.bind(this)));if(this.$ProfileHoverButton4){this.$ProfileHoverButton4.show();this.logNux(s.IMP);this.$ProfileHoverButton6.addSubscriptions(p.listen(j.find(this.$ProfileHoverButton4.getRoot(),"._50zy"),'click',this.logNux.bind(this,s.XOUT)));}n.onLeave(this.cleanUp.bind(this));}x.prototype.logNux=function(event){'use strict';var y=t.getURIBuilder().getURI();new o(y).setData({event:event,id:this.$ProfileHoverButton3.id}).send();};x.prototype.getButtons=function(){'use strict';return j.scry(this.$ProfileHoverButton1,"._3oz-");};x.prototype.getSelected=function(){'use strict';var y=this.getButtons(),z=null;y.forEach(function(aa){var ba=aa.getAttribute('data-status');if(i.hasClass(aa,"_52-0"))z=ba;});return z;};x.prototype.setSelected=function(y){'use strict';this.$ProfileHoverButton5=this.getSelected();var z=this.getButtons();z.forEach(function(aa){var ba=aa.getAttribute('data-status');if(ba===y){i.addClass(aa,"_52-0");}else i.removeClass(aa,"_52-0");});this.$ProfileHoverButton2.forEachItem(function(aa){if(!aa.getValue)return;var ba=aa.getValue();if(ba==='unfollow')return;var ca=aa.getRoot();if(ba===y){i.addClass(ca,"_52-0");}else i.removeClass(ca,"_52-0");});};x.prototype.handleResponse=function(event,y){'use strict';if(y.id!==this.$ProfileHoverButton3.id||y.location!==w)return;if(event===m.REVERT)this.revert();};x.prototype.revert=function(){'use strict';if(this.$ProfileHoverButton5===null)return;this.setSelected(this.$ProfileHoverButton5);};x.prototype.cleanUp=function(){'use strict';this.$ProfileHoverButton6&&this.$ProfileHoverButton6.release();this.$ProfileHoverButton6=null;this.$ProfileHoverButton1=null;this.$ProfileHoverButton2=null;this.$ProfileHoverButton3=null;};f.exports=x;},null);
__d('TidyArbiter',['TidyArbiterMixin'],function a(b,c,d,e,f,g,h){if(c.__markCompiled)c.__markCompiled();var i=babelHelpers._extends({},h);f.exports=i;},null);
__d('TimelineCoverCollapse',['Arbiter','DOMDimensions','Style','TidyArbiter','$'],function a(b,c,d,e,f,g,h,i,j,k,l){if(c.__markCompiled)c.__markCompiled();g.collapse=function(m,n){n--;var o=i.getViewportDimensions().height,p=i.getDocumentDimensions().height,q=o+n;if(p<=q)j.set(l('pagelet_timeline_main_column'),'min-height',q+'px');window.scrollBy(0,n);k.inform('TimelineCover/coverCollapsed',n,h.BEHAVIOR_STATE);};},null);
__d("XFacebarBootloadController",["XController"],function a(b,c,d,e,f,g){c.__markCompiled&&c.__markCompiled();f.exports=c("XController").create("\/typeahead\/search\/facebar\/bootload\/",{placeholder_id:{type:"String"}});},null,{});
__d('FacebarPlaceholderShortcut',['KeyEventController','Run','setTimeoutAcrossTransitions'],function a(b,c,d,e,f,g,h,i,j){if(c.__markCompiled)c.__markCompiled();function k(l){'use strict';this._input=l;this._listener=null;}k.prototype.enable=function(){'use strict';this._registerListener();};k.prototype._registerListener=function(){'use strict';this._listener&&this._listener.remove();this._listener=h.registerKey('SLASH',this._handleKeydown.bind(this));i.onLeave((function(){j(this._registerListener.bind(this),0);}).bind(this));};k.prototype.disable=function(){'use strict';this._listener&&this._listener.remove();this._listener=null;};k.prototype._handleKeydown=function(l){'use strict';this._input.focus();return false;};f.exports=k;},null);
__d('FacebarBootloader',['AsyncRequest','CSS','Event','$','Run','BanzaiODS','SubscriptionsHandler','getActiveElement','XFacebarBootloadController','FacebarPlaceholderShortcut'],function a(b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q){if(c.__markCompiled)c.__markCompiled();var r='facebar_bootloader',s=r+'_',t={isRequested:false,isFocused:false,isInitialized:false,init:function(u,v,w,x){this.reset();this.subscriptions=new n();this.placeholderID=w;this.searchInput=u;this.shortcutHandler=new q(u);this.loadingIndicator=v;this.shortcutHandler.enable();this.subscriptions.addSubscriptions(j.listen(u,'focus',(function(){this.requestSearch();this.showLoadingIndicator();}).bind(this)),j.listen(k(w),'mouseover',this.requestSearch.bind(this)));if(x)this.subscriptions.addSubscriptions(j.listen(window,'load',this.requestSearch.bind(this)));l.onUnload(this.reset.bind(this));this.isInitialized=true;if(u.value||o()==u){this.requestSearch();this.showLoadingIndicator();}},showLoadingIndicator:function(){if(this.loadingIndicator)i.show(this.loadingIndicator);},reset:function(){this.subscriptions&&this.subscriptions.release();this.shortcutHandler&&this.shortcutHandler.disable();this.searchInput=this.subscriptions=this.shortcutHandler=null;this.loadingIndicator=null;this.isRequested=this.isFocused=false;},requestSearch:function(){if(o()==this.searchInput&&!this.isFocused){this.isFocused=true;this.focusTime=Date.now();}if(this.isRequested||!this.isInitialized)return;this.isRequested=true;var u=p.getURIBuilder().setString('placeholder_id',this.placeholderID).getURI(),v=new h();v.setURI(u).setMethod('GET').setReadOnly(true).setAllowCrossPageTransition(true).setErrorHandler(function(w){m.bumpEntityKey(r,s+'request_failed');if(w&&w.errorSummary){m.bumpEntityKey(r,s+'request_failed_'+w.errorSummary);}else m.bumpEntityKey(r,s+'request_failed_no_error_summary');this.isRequested=false;}).send();},setFocus:function(u,v,w){if(!this.searchInput)return;m.bumpEntityKey(r,s+'response_arrived');if(this.searchInput.value||this.isFocused){u.getCore().isFocused=true;u.getCore().input.setValue(w.fromString(this.searchInput.value),true);u.getCore().setStartTime(this.focusTime);v.focus();v.setSelection({length:this.searchInput.selectionEnd-this.searchInput.selectionStart,offset:this.searchInput.selectionStart});v.togglePlaceholder();}this.reset();}};f.exports=t;},null);
__d('FacebarStructuredFragment',[],function a(b,c,d,e,f,g){if(c.__markCompiled)c.__markCompiled();function h(k,l){if(k&&l){return k.toLowerCase()==l.toLowerCase();}else return !k&&!l;}var i=new RegExp('['+'\\u0590-\\u07bf'+'\\u08a0-\\u08ff'+'\\ufb1d-\\ufb4f'+'\\ufb50-\\ufefc'+'\\u200e-\\u200f\\u202a-\\u202e'+']');function j(k){'use strict';this._text=String(k.text);this._uid=k.uid?String(k.uid):null;this._type=k.type?String(k.type):null;this._typeParts=null;}j.prototype.getText=function(){'use strict';return this._text;};j.prototype.getUID=function(){'use strict';return this._uid;};j.prototype.getType=function(){'use strict';return this._type;};j.prototype.getTypePart=function(k){'use strict';return this._getTypeParts()[k];};j.prototype.getLength=function(){'use strict';return this._text.length;};j.prototype.isType=function(k){'use strict';for(var l=0;l<arguments.length;l++)if(!h(arguments[l],this.getTypePart(l)))return false;return true;};j.prototype.isWhitespace=function(){'use strict';return (/^\s*$/.test(this._text));};j.prototype.hasRTL=function(){'use strict';return i.test(this._text);};j.prototype.toStruct=function(){'use strict';return {text:this._text,type:this._type,uid:this._uid};};j.prototype.getHash=function(k){'use strict';var l=k!=null?this._getTypeParts().slice(0,k).join(':'):this._type;return l+'::'+this._text;};j.prototype._getTypeParts=function(){'use strict';if(this._typeParts===null)this._typeParts=this._type?this._type.split(':'):[];return this._typeParts;};f.exports=j;},null);
__d('FacebarStructuredText',['createArrayFromMixed','FacebarStructuredFragment'],function a(b,c,d,e,f,g,h,i){if(c.__markCompiled)c.__markCompiled();var j=/\s+$/;function k(o){if(!o){return [];}else if(o instanceof n){return o.toArray();}else return h(o).map(function(p){return new i(p);});}function l(o){return new i({text:o,type:'text'});}function m(o,p,q){var r=o.getText(),s=r.replace(p,q);if(r!=s){return new i({text:s,type:o.getType(),uid:o.getUID()});}else return o;}function n(o){'use strict';this._fragments=o||[];this._hash=null;}n.prototype.matches=function(o,p){'use strict';if(o){var q=this._fragments,r=o._fragments;return q.length==r.length&&!q.some(function(s,t){if(!p&&s.getUID()){return s.getUID()!=r[t].getUID();}else return s.getText()!=r[t].getText()||s.getType()!=r[t].getType();});}return false;};n.prototype.trim=function(){'use strict';var o=null,p=null;this.forEach(function(r,s){if(!r.isWhitespace()){if(o===null)o=s;p=s;}});if(p!==null){var q=this._fragments.slice(o,p+1);q.push(m(q.pop(),j,''));return new n(q);}else return new n([]);};n.prototype.pad=function(){'use strict';var o=this.getFragment(-1);if(o&&!j.test(o.getText())&&o.getText()!==''){return new n(this._fragments.concat(l(' ')));}else return this;};n.prototype.forEach=function(o){'use strict';this._fragments.forEach(o);return this;};n.prototype.matchType=function(o){'use strict';var p=null;for(var q=0;q<this._fragments.length;q++){var r=this._fragments[q],s=r.isType.apply(r,arguments);if(s&&!p){p=r;}else if(s||!r.isWhitespace())return null;}return p;};n.prototype.hasType=function(o){'use strict';var p=arguments;return this._fragments.some(function(q){return !q.isWhitespace()&&q.isType.apply(q,p);});};n.prototype.endsOnType=function(o){'use strict';var p=arguments,q=this._fragments[this._fragments.length-1];return !!q&&!q.isWhitespace()&&q.isType.apply(q,p);};n.prototype.isEmptyOrWhitespace=function(){'use strict';return !this._fragments.some(function(o){return !o.isWhitespace();});};n.prototype.hasRTL=function(){'use strict';return this._fragments.some(function(o){return o.hasRTL();});};n.prototype.isEmpty=function(){'use strict';return this.getLength()===0;};n.prototype.getFragment=function(o){'use strict';return this._fragments[o>=0?o:this._fragments.length+o];};n.prototype.getCount=function(){'use strict';return this._fragments.length;};n.prototype.getLength=function(){'use strict';return this._fragments.reduce(function(o,p){return o+p.getLength();},0);};n.prototype.toStruct=function(){'use strict';return this._fragments.map(function(o){return o.toStruct();});};n.prototype.toArray=function(){'use strict';return this._fragments.slice();};n.prototype.toString=function(){'use strict';return this._fragments.map(function(o){return o.getText();}).join('');};n.prototype.getHash=function(){'use strict';if(this._hash===null)this._hash=this._fragments.map(function(o){if(o.getUID()){return '[['+o.getHash(1)+']]';}else return o.getText();}).join('');return this._hash;};n.fromStruct=function(o){'use strict';return new n(k(o));};n.fromString=function(o){'use strict';return new n([l(o)]);};f.exports=n;},null);
__d('FacebarNavigation',['Arbiter','DOMQuery','FacebarBootloader','FacebarStructuredText','Input','QueryHistory','URI','csx'],function a(b,c,d,e,f,g,h,i,j,k,l,m,n,o){if(c.__markCompiled)c.__markCompiled();var p=null,q=null,r=null,s=false,t=true,u=false;function v(y,z){if(!u)r=y;u=false;s=z;t=false;w();}function w(){if(t){return;}else if(q){s&&q.pageTransition();q.setPageQuery(r);t=true;}else if(p&&r&&!l.getValue(p))l.setValue(p,r.structure.toString()+' ');p&&p.blur();}h.subscribe('page_transition',function(y,z){if(!x.isTopControlTransition(z.uri)&&!x.isTimelineAbout(z.uri))v(m.get(z.uri),true);});h.subscribe('save_facebar_query',function(y,z){u=true;});var x={registerInput:function(y){p=i.scry(y,"._586f")[0];w();},registerBehavior:function(y){q=y;w();},setPageQuery:function(y){m.set(n.getNextURI(),y);if(!(y.structure instanceof k))y.structure=k.fromStruct(y.structure);v(y,false);j.requestSearch();},isTopControlTransition:function(y){return String(y.getPath()).startsWith('/search/')&&y.getQueryData().ref==='top_filter'&&!y.getQueryData().hard_refresh;},isTimelineAbout:function(y){return (/\/about$/.test(y.getPath())&&!y.getQueryData().hard_refresh);}};f.exports=x;},null);
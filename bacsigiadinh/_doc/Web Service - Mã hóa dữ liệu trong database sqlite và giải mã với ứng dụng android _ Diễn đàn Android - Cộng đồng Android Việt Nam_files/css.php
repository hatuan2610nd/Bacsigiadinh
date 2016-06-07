@CHARSET "UTF-8";

/* --- xenforo.css --- */

/*
 * YUI reset-fonts.css
 *
Copyright (c) 2009, Yahoo! Inc. All rights reserved.
Code licensed under the BSD License:
http://developer.yahoo.net/yui/license.txt
version: 2.7.0
*/
html{color:#000;background:#FFF;}body,div,dl,dt,dd,ul,ol,li,h1,h2,h3,h4,h5,h6,pre,code,form,fieldset,legend,input,button,textarea,p,blockquote,th,td{margin:0;padding:0;}table{border-collapse:collapse;border-spacing:0;}fieldset,img{border:0;}address,caption,cite,code,dfn,em,strong,th,var,optgroup{font-style:inherit;font-weight:inherit;}del,ins{text-decoration:none;}li{list-style:none;}caption,th{text-align:left;}h1,h2,h3,h4,h5,h6{font-size:100%;font-weight:normal;}q:before,q:after{content:'';}abbr,acronym{border:0;font-variant:normal;}sup{vertical-align:baseline;}sub{vertical-align:baseline;}legend{color:#000;}input,button,textarea,select,optgroup,option{font-family:inherit;font-size:inherit;font-style:inherit;font-weight:inherit;}input,button,textarea,select{*font-size:100%;}body{font:13px/1.231 arial,helvetica,clean,sans-serif;*font-size:small;*font:x-small;}select,input,button,textarea,button{font:99% arial,helvetica,clean,sans-serif;}table{font-size:inherit;font:100%;}pre,code,kbd,samp,tt{font-family:monospace;*font-size:108%;line-height:100%;}

/*
 * Firefox broken image placeholder support.
 *
http://lab.gmtplusone.com/image-placeholder/
*/ 
img:-moz-broken, img:-moz-user-disabled { -moz-force-broken-image-icon: 1; }
img:-moz-broken:not([width]), img:-moz-user-disabled:not([width]) { width: 50px; }
img:-moz-broken:not([height]), img:-moz-user-disabled:not([height]) { height: 50px; }

/*
 * XenForo Core CSS
 *
 */

html
{
	background-color: rgb(0, 155, 0);
min-height: 100%;
min-width: 320px;

	overflow-y: scroll !important;
}

body
{
	font-size: 15px;
font-family: 'Roboto',arial,sans-serif;
color: rgb(20,20,20);
word-wrap: break-word;
line-height: 1.15;

}

#headerMover
{
	background: rgb(255, 255, 255);
}

/* counteract the word-wrap setting in 'body' */
pre, textarea
{
	word-wrap: normal;
}

a:link,
a:visited
{
	color: rgb(0, 155, 0);
text-decoration: none;

}

	a[href]:hover
	{
		color: rgb(57,194,52);
text-decoration: underline;

	}
	
	a:hover
	{
		_color: rgb(57,194,52);
		_text-decoration: underline;
	}
	
	a.noOutline
	{
		outline: 0 none;
	}
	
	.emCtrl,
	.messageContent a
	{
		-webkit-border-radius: 5px; -moz-border-radius: 5px; -khtml-border-radius: 5px; border-radius: 5px;
	}
	
		.emCtrl:hover,
		.emCtrl:focus,
		.ugc a:hover,
		.ugc a:focus
		{
			/*position: relative;
			top: -1px;*/
			text-decoration: none;
			-webkit-box-shadow: 5px 5px 7px #CCCCCC; -moz-box-shadow: 5px 5px 7px #CCCCCC; -khtml-box-shadow: 5px 5px 7px #CCCCCC; box-shadow: 5px 5px 7px #CCCCCC;
			outline: 0 none;
		}
		
			.emCtrl:active,
			.ugc a:active
			{
				position: relative;
				top: 1px;
				-webkit-box-shadow: 2px 2px 7px #CCCCCC; -moz-box-shadow: 2px 2px 7px #CCCCCC; -khtml-box-shadow: 2px 2px 7px #CCCCCC; box-shadow: 2px 2px 7px #CCCCCC;
				outline: 0 none;
			}

	.ugc a:link,
	.ugc a:visited
	{
		padding: 0 3px;
margin: 0 -3px;
-webkit-border-radius: 5px; -moz-border-radius: 5px; -khtml-border-radius: 5px; border-radius: 5px;

	}
	
		.ugc a:hover,
		.ugc a:focus
		{
			color: rgb(57,194,52);
background-color: #ffffff;

		}
		
img.mceSmilie,
img.mceSmilieSprite
{
	vertical-align: text-bottom;
	margin: 0 1px;
}
		
/** title bar **/

.titleBar
{
	margin-bottom: 10px;
}

/* clearfix */ .titleBar { zoom: 1; } .titleBar:after { content: '.'; display: block; height: 0; clear: both; visibility: hidden; }

.titleBar h1
{
	font-size: 18pt;
overflow: hidden;
line-height: 28pt;
zoom: 1;

}

	.titleBar h1 em
	{
		color: rgb(64, 64, 64);
	}
		
	.titleBar h1 .Popup
	{
		float: left;
	}

#pageDescription
{
	font-size: 11px;
color: rgb(102, 102, 102);
margin-top: 2px;

}

.topCtrl
{
	float: right;
}
	
	.topCtrl h2
	{
		font-size: 12pt;
	}
		
/** images **/

img
{
	-ms-interpolation-mode: bicubic;
}

a.avatar 
{ 
	*cursor: pointer; /* IE7 refuses to do this */ 
} 

.avatar img,
.avatar .img,
.avatarCropper
{
	background-color: rgb(255, 255, 255);
padding: 2px;
border: 1px solid rgb(228, 228, 228);
-webkit-border-radius: 4px; -moz-border-radius: 4px; -khtml-border-radius: 4px; border-radius: 4px;

}

.avatar.plainImage img,
.avatar.plainImage .img
{
	border: none;
	-webkit-border-radius: 0; -moz-border-radius: 0; -khtml-border-radius: 0; border-radius: 0;
	padding: 0;
	background-color: transparent;
	background-position: left top;
}

	.avatar .img
	{
		display: block;
		background-repeat: no-repeat;
		background-position: 2px 2px;
		text-indent: 1000px;
		overflow: hidden;
		white-space: nowrap;
		word-wrap: normal;
	}

	.avatar .img.s { width: 48px;  height: 48px;  }
	.avatar .img.m { width: 96px;  height: 96px;  }
	.avatar .img.l { width: 192px; height: 192px; }

.avatarCropper
{
	width: 192px;
	height: 192px;
	direction: ltr;
}

.avatarCropper a,
.avatarCropper span,
.avatarCropper label
{
	overflow: hidden;
	position: relative;
	display: block;
	width: 192px;
	height: 192px;
}

.avatarCropper img
{
	padding: 0;
	border: none;
	-webkit-border-radius: 0; -moz-border-radius: 0; -khtml-border-radius: 0; border-radius: 0;

	position: relative;
	display: block;
}

.avatarScaler img
{
	max-width: 192px;
	_width: 192px;
}

/* ***************************** */

body .dimmed, body a.dimmed, body .dimmed a { color: rgb(64, 64, 64); }
body .muted, body a.muted, body .muted a { color: rgb(102, 102, 102); }
body .faint, body a.faint, body .faint a { color: rgb(144, 144, 144); }

.highlight { font-weight: bold; }

.concealed,
.concealed a,
.cloaked,
.cloaked a
{
	text-decoration: inherit !important;
	color: inherit !important;
	*clear:expression( style.color = parentNode.currentStyle.color, style.clear = "none", 0);
}

a.concealed:hover,
.concealed a:hover
{
	text-decoration: underline !important;
}

/* ***************************** */

.xenTooltip
{
	font-size: 11px;
color: rgb(255, 255, 255);
background: url(rgba.php?r=0&g=0&b=0&a=153); background: rgba(0,0,0, 0.6); _filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000,endColorstr=#99000000);;
padding: 5px 10px;
-webkit-border-radius: 5px; -moz-border-radius: 5px; -khtml-border-radius: 5px; border-radius: 5px;
display: none;
z-index: 15000;
cursor: default;

}

.xenTooltip a,
.xenTooltip a:hover
{
	color: rgb(255, 255, 255);
	text-decoration: underline;
}

	.xenTooltip .arrow
	{
		border-top:  6px solid rgb(0,0,0); border-top:  6px solid rgba(0,0,0, 0.6); _border-top:  6px solid rgb(0,0,0);
border-right: 6px solid transparent;
border-bottom: 1px none black;
border-left: 6px solid transparent;
position: absolute;
bottom: -6px;
line-height: 0px;
width: 0px;
height: 0px;

		left: 9px;
		
		/* Hide from IE6 */
		_display: none;
	}

	.xenTooltip.flipped .arrow
	{
		left: auto;
		right: 9px;
	}

.xenTooltip.statusTip
{
	/* Generated by XenForo.StatusTooltip JavaScript */
	padding: 5px 10px;
line-height: 17px;
width: 250px;
height: auto;

}

	.xenTooltip.statusTip .arrow
	{
		border: 6px solid transparent;
border-right-color:  rgb(0,0,0); border-right-color:  rgba(0,0,0, 0.6); _border-right-color:  rgb(0,0,0);
border-left: 1px none black;
top: 6px;
left: -6px;
bottom: auto;
right: auto;

	}
			
.xenTooltip.iconTip { margin-left: -6px; }
.xenTooltip.iconTip.flipped { margin-left: 7px; }

/* ***************************** */

#PreviewTooltip
{
	display: none;
}

.xenPreviewTooltip
{
	border: 10px solid #0f4c22;
-webkit-border-radius: 10px; -moz-border-radius: 10px; -khtml-border-radius: 10px; border-radius: 10px;
position: relative;
-webkit-box-shadow: 0px 12px 25px rgba(0,0,0, 0.5); -moz-box-shadow: 0px 12px 25px rgba(0,0,0, 0.5); -khtml-box-shadow: 0px 12px 25px rgba(0,0,0, 0.5); box-shadow: 0px 12px 25px rgba(0,0,0, 0.5);
width: 400px;

	
	display: none;	
	z-index: 15000;
	cursor: default;
	
	border-color:  rgb(15, 76, 34); border-color:  rgba(15, 76, 34, 0.5); _border-color:  rgb(15, 76, 34);
}

	.xenPreviewTooltip .arrow
	{
		border-top: 15px solid rgb(255, 255, 255);
border-right: 15px solid transparent;
border-bottom: 1px none #0f4c22;
border-left: 15px solid transparent;
position: absolute;
bottom: -15px;
left: 22px;

		
		_display: none;
	}
	
		.xenPreviewTooltip .arrow span
		{
			border-top: 15px solid rgb(255, 255, 255);
border-right: 15px solid transparent;
border-bottom: 1px none #0f4c22;
border-left: 15px solid transparent;
position: absolute;
top: -17px;
left: -15px;

		}

	.xenPreviewTooltip .section,
	.xenPreviewTooltip .sectionMain,
	.xenPreviewTooltip .primaryContent,
	.xenPreviewTooltip .secondaryContent
	{
		background: transparent none;
padding: 0;
margin: 0;
border-width: 0;
-webkit-border-radius: 0; -moz-border-radius: 0; -khtml-border-radius: 0; border-radius: 0;
box-shadow: none !important;

		margin: 0;
	}
	
	.xenPreviewTooltip .section
	{
		background-color: rgba(255, 255, 255, 0.9);
		-webkit-border-radius: 5px; -moz-border-radius: 5px; -khtml-border-radius: 5px; border-radius: 5px;
	}
	
		.xenPreviewTooltip .previewContent
		{
			overflow: hidden; zoom: 1;
			min-height: 1em;
			padding: 10px;
		}

/* ***************************** */

div.importantMessage,
p.importantMessage
{
	position: relative;
	color: rgb(20,92,17);
background-color: rgb(235,250,235);
padding: 5px;
margin: 10px 0 12px;
border: 1px solid rgb(146,222,143);
-webkit-border-radius: 5px; -moz-border-radius: 5px; -khtml-border-radius: 5px; border-radius: 5px;
text-align: center;

}

div.importantMessage a,
p.importantMessage a
{
	font-weight: bold;
	color: rgb(20,92,17);
}



/* ***************************** */

.section
{
	margin: 10px auto;

}

	.sectionMain > .section:first-child
	{
		margin-top: 0;
	}

	.sectionMain > .section:last-child
	{
		margin-bottom: 0;
	}

.heading,
.xenForm .formHeader
{
	font-weight: bold;
font-size: 11pt;
color: rgb(242, 251, 244);
background-color: rgb(119, 217, 148);
padding: 5px 10px;
margin-bottom: 3px;
border-bottom: 1px solid rgb(0, 155, 0);
-webkit-border-top-left-radius: 5px; -moz-border-radius-topleft: 5px; -khtml-border-top-left-radius: 5px; border-top-left-radius: 5px;
-webkit-border-top-right-radius: 5px; -moz-border-radius-topright: 5px; -khtml-border-top-right-radius: 5px; border-top-right-radius: 5px;

}

	.heading a { color: rgb(242, 251, 244); }

.subHeading
{
	font-size: 11px;
color: rgb(0, 155, 0);
padding: 5px 10px;
margin: 3px auto 0;

}

	.subHeading a { color: rgb(0, 155, 0); }

.textHeading,
.xenForm .sectionHeader
{
	font-weight: bold;
color: rgb(20,20,20);
padding-bottom: 2px;
margin: 10px auto 5px;
border-bottom: 1px solid rgb(232, 232, 232);

}

.xenForm .sectionHeader,
.xenForm .formHeader
{
	margin: 10px 0;
}

.primaryContent > .textHeading:first-child,
.secondaryContent > .textHeading:first-child
{
	margin-top: 0;
}

.larger.textHeading,
.xenForm .sectionHeader
{
	color: rgb(20,20,20);
	font-size: 11pt;
	margin-bottom: 6px;
}

	.larger.textHeading a,
	.xenForm .sectionHeader a
	{
	}

.primaryContent
{
	padding: 0;

}

	.primaryContent a
	{
		color: rgb(0, 155, 0);

	}

.secondaryContent
{
	
	/* See .sectionMain */
}

	.secondaryContent a
	{
		color: rgb(0, 155, 0);

	}

.sectionFooter
{
	font-size: 11px;
color: rgb(102, 102, 102);
background: transparent url('styles/soft_responsive_green/xenforo/gradients/category-23px-light.png') repeat-x top;
padding: 4px 10px;
border-top: 1px solid rgb(255, 255, 255);
border-bottom: 1px solid rgb(232, 232, 232);
line-height: 16px;

}

	.handleReportForm .sectionFooter
	{
		margin: 10px 0;
		background: rgb(255, 255, 255);
	}
	
	.section .secondaryContent + .sectionFooter
	{
		background-color: transparent;
		border-width: 0;
	}

/* used for section footers with central buttons, esp. in report viewing */

.actionList
{
	text-align: center;
}

/* left-right aligned options */

.opposedOptions
{
	overflow: hidden; zoom: 1;
}
	
	.opposedOptions .left
	{
		float: left;
	}
	
	.opposedOptions .right
	{
		float: right;
	}
	
/* Backgrounds for sections */
	
.sectionMain,
.primaryContent,
.secondaryContent,
.memberList,
.helpSideBar,
#recentActivity
{
	background-color: rgb(255, 255, 255);
padding: 9px;
margin-bottom: 10px;
border: 1px solid rgb(228, 228, 228);
-webkit-border-radius: 5px; -moz-border-radius: 5px; -khtml-border-radius: 5px; border-radius: 5px;
_-webkit-box-shadow: 0 0 0 1px #fff inset, 0 0 3px 1px rgba(128, 128, 128, 0.2) inset; -moz-box-shadow: 0 0 0 1px #fff inset, 0 0 3px 1px rgba(128, 128, 128, 0.2) inset; -khtml-box-shadow: 0 0 0 1px #fff inset, 0 0 3px 1px rgba(128, 128, 128, 0.2) inset; box-shadow: 0 0 0 1px #fff inset, 0 0 3px 1px rgba(128, 128, 128, 0.2) inset;
_position: relative;

}

	.sectionMain.discussionList,
	.memberList,
	.messageList .message.messageFullBlock,
	#ProfilePanes #info
	{
		background: rgb(255, 255, 255) url('styles/soft_responsive_green/xenforo/gradients/content.png') repeat-x 0 0;
padding: 9px;
margin-bottom: 10px;
_-webkit-border-radius: 5px; -moz-border-radius: 5px; -khtml-border-radius: 5px; border-radius: 5px;
_-webkit-box-shadow: 0 0 0 1px #fff inset, 0 0 3px 1px rgba(128, 128, 128, 0.2) inset; -moz-box-shadow: 0 0 0 1px #fff inset, 0 0 3px 1px rgba(128, 128, 128, 0.2) inset; -khtml-box-shadow: 0 0 0 1px #fff inset, 0 0 3px 1px rgba(128, 128, 128, 0.2) inset; box-shadow: 0 0 0 1px #fff inset, 0 0 3px 1px rgba(128, 128, 128, 0.2) inset;
_position: relative;

	}

	.FollowList.memberList,
	a.primaryContent,
	a.secondaryContent,
	form.sectionMain .secondaryContent
	{
		background: transparent none;
padding: 0;
margin: 0;
border-width: 0;
-webkit-border-radius: 0; -moz-border-radius: 0; -khtml-border-radius: 0; border-radius: 0;
box-shadow: none !important;

	}

	.sectionMain:after,
	.sidebar .secondaryContent:after,
	.profilePage .mast .primaryContent:after,
	.profilePage .mast .secondaryContent:after,
	.memberList:after,
	.errorPanel:after
	{
		_content: '';
_display: block;
_position: absolute;
_bottom: -10px;
_left: 3px;
_right: 3px;
_background-size: 100% 55px;
_pointer-events: none;
height: 10px;

	}

		.FollowList.memberList:after,
		form.sectionMain .secondaryContent:after
		{
			display: none;
		}
		
	.messageList .message.messageFullBlock:after,
	.message .messageInfo:after,
	.profilePage #info:after,
	#recentActivity:after,
	.importantMessage:after
	{
		_content: '';
_display: block;
_position: absolute;
_left: 0;
_right: 0;
_bottom: -10px;
_background: url('styles/soft_responsive_green/xenforo/layout/shadows.png') no-repeat 0 0,
	url('styles/soft_responsive_green/xenforo/layout/shadows.png') no-repeat 100% -15px,
	transparent url('styles/soft_responsive_green/xenforo/layout/shadows.png') repeat 0 -30px;
height: 10px;

	}
	
.sectionMain,
.sectionMain.discussionList
{
	padding: 3px 7px;
margin: 10px auto 20px;

}



.columns
{
	overflow: hidden; zoom: 1;
}

	.columns .columnContainer
	{
		float: left;
	}
	
		.columns .columnContainer .column
		{
			margin-left: 3px;
		}
		
		.columns .columnContainer:first-child .column
		{
			margin-left: 0;
		}

.c50_50 .c1,
.c50_50 .c2 { width: 49.99%; }

.c70_30 .c1 { width: 70%; }
.c70_30 .c2 { width: 29.99%; }

.c60_40 .c1 { width: 60%; }
.c60_40 .c2 { width: 39.99%; }

.c40_30_30 .c1 { width: 40%; }
.c40_30_30 .c2,
.c40_30_30 .c3 { width: 29.99%; }

.c50_25_25 .c1 { width: 50%; }
.c50_25_25 .c2,
.c50_25_25 .c3 { width: 25%; }

/* ***************************** */
/* Basic Tabs */

.tabs
{
	font-size: 11px;
border-bottom: 1px solid rgb(232, 232, 232);
word-wrap: normal;
min-height: 23px;
_height: 23px;

	
	display: table;
	width: 100%;
	*width: auto;
	-webkit-box-sizing: border-box; -moz-box-sizing: border-box; -ms-box-sizing: border-box; box-sizing: border-box;
}

.tabs li
{
	float: left;
}

.tabs li a,
.tabs.noLinks li
{
	color: #ffffff;
text-decoration: none;
background: rgb(0, 155, 0) url('styles/soft_responsive_green/xenforo/gradients/category-23px-light.png') repeat-x top;
padding: 0 8px;
margin-right: 1px;
margin-bottom: -1px;
border: 1px solid rgb(0, 155, 0);
-webkit-border-top-left-radius: 5px; -moz-border-radius-topleft: 5px; -khtml-border-top-left-radius: 5px; border-top-left-radius: 5px;
-webkit-border-top-right-radius: 5px; -moz-border-radius-topright: 5px; -khtml-border-top-right-radius: 5px; border-top-right-radius: 5px;
display: inline-block;
line-height: 22px;
cursor: pointer;
outline: 0 none;
white-space: nowrap;
word-wrap: normal;
height: 22px;

}

.tabs li.active a,
.tabs.noLinks li.active
{
	color: #ffffff;
background: rgb(57,194,52) url('styles/soft_responsive_green/xenforo/gradients/category-23px-light.png') repeat-x top;
padding-bottom: 1px;
border-color: rgb(57,194,52);
border-bottom: 1px none black;

}

.tabs li:hover a,
.tabs.noLinks li:hover
{
	color: #ffffff;
text-decoration: none;
background: rgb(57,194,52) url('styles/soft_responsive_green/xenforo/gradients/category-23px-light-r.png') repeat-x left bottom;
border-color: rgb(57,194,52);
		
}

/* Tabs inside forms */

.xenForm .tabs,
.xenFormTabs
{
	padding: 5px 30px 0;
}

/* 700px and lower - show tabs as list */
@media only screen and (max-width: 700px), only screen and (max-device-width: 700px)
{
	.tabs,
	.tabs li
	{
		display: block;
	}
	
	.tabs
	{
		border-bottom-width: 0;
	}
	
	.tabs:after
	{
		content: '';
		display: block;
		clear: both;
	}
	
	.tabs
	{
		margin-bottom: 5px;
	}
	
	.tabs li
	{
		float: none;
	}
	
	.tabs li a
	{
		display: block;
		-webkit-border-top-left-radius: 0; -moz-border-radius-topleft: 0; -khtml-border-top-left-radius: 0; border-top-left-radius: 0;
		-webkit-border-top-right-radius: 0; -moz-border-radius-topright: 0; -khtml-border-top-right-radius: 0; border-top-right-radius: 0;
		padding-bottom: 4px;
		padding-top: 4px;
	}
	
		.tabs li:first-child a
		{
			-webkit-border-top-left-radius: 5px; -moz-border-radius-topleft: 5px; -khtml-border-top-left-radius: 5px; border-top-left-radius: 5px;
			-webkit-border-top-right-radius: 5px; -moz-border-radius-topright: 5px; -khtml-border-top-right-radius: 5px; border-top-right-radius: 5px;
		}

		.tabs li:last-child a
		{
			-webkit-border-bottom-left-radius: 5px; -moz-border-radius-bottomleft: 5px; -khtml-border-bottom-left-radius: 5px; border-bottom-left-radius: 5px;
			-webkit-border-bottom-right-radius: 5px; -moz-border-radius-bottomright: 5px; -khtml-border-bottom-right-radius: 5px; border-bottom-right-radius: 5px;
		}
		
		.tabs li.active a, 
		.tabs.noLinks li.active
		{
			padding-bottom: 5px;
		}
}

/* ***************************** */
/* Popup Menus */

.Popup
{
	position: relative;
}

	.Popup.inline
	{
		display: inline;
	}
	
/** Popup menu trigger **/

.Popup .arrowWidget
{
	/* circle-arrow-down */
	background: transparent url('styles/soft_responsive_green/xenforo/xenforo-ui-sprite.png') no-repeat -64px 0;
margin-top: -2px;
margin-left: 2px;
display: inline-block;
*margin-top: 0;
vertical-align: middle;
width: 16px;
height: 14px;

}

	.Popup:hover .arrowWidget
	{
		background-position: -32px 0;
	}

.PopupOpen .arrowWidget,
.PopupOpen:hover .arrowWidget
{
	/* circle-arrow-up */
	background-position: -128px 0;

}

.Popup .PopupControl,
.Popup.PopupContainerControl
{
	display: inline-block;
	cursor: pointer;
}

	.Popup .PopupControl:hover,
	.Popup.PopupContainerControl:hover
	{
		color: rgb(57,194,52);
text-decoration: none;

	}

	.Popup .PopupControl:focus,
	.Popup .PopupControl:active,
	.Popup.PopupContainerControl:focus,
	.Popup.PopupContainerControl:active
	{
		outline: 0;
	}
	
	.Popup .PopupControl.PopupOpen,
	.Popup.PopupContainerControl.PopupOpen
	{
		color: #ffffff !important;
background: rgb(0, 155, 0) url('styles/soft_responsive_green/xenforo/gradients/category-23px-light.png') repeat-x top;
border-color: rgb(0, 155, 0);
-webkit-border-top-left-radius: 5px; -moz-border-radius-topleft: 5px; -khtml-border-top-left-radius: 5px; border-top-left-radius: 5px;
-webkit-border-top-right-radius: 5px; -moz-border-radius-topright: 5px; -khtml-border-top-right-radius: 5px; border-top-right-radius: 5px;
-webkit-border-bottom-right-radius: 0px; -moz-border-radius-bottomright: 0px; -khtml-border-bottom-right-radius: 0px; border-bottom-right-radius: 0px;
-webkit-border-bottom-left-radius: 0px; -moz-border-radius-bottomleft: 0px; -khtml-border-bottom-left-radius: 0px; border-bottom-left-radius: 0px;

	}
	
	.Popup .PopupControl.BottomControl.PopupOpen,
	.Popup.PopupContainerControl.BottomControl.PopupOpen
	{
		-webkit-border-top-left-radius: 0px; -moz-border-radius-topleft: 0px; -khtml-border-top-left-radius: 0px; border-top-left-radius: 0px;
		-webkit-border-top-right-radius: 0px; -moz-border-radius-topright: 0px; -khtml-border-top-right-radius: 0px; border-top-right-radius: 0px;
		-webkit-border-bottom-left-radius: 5px; -moz-border-radius-bottomleft: 5px; -khtml-border-bottom-left-radius: 5px; border-bottom-left-radius: 5px;
		-webkit-border-bottom-right-radius: 5px; -moz-border-radius-bottomright: 5px; -khtml-border-bottom-right-radius: 5px; border-bottom-right-radius: 5px;
	}
		
		.Popup .PopupControl.PopupOpen:hover,
		.Popup.PopupContainerControl.PopupOpen:hover
		{
			text-decoration: none;
		}
		
/** Menu body **/

.Menu
{
	/*background-color: #ffffff;*/
	
	font-size: 11px;
border: 1px solid rgb(0, 155, 0);
border-top-width: 5px;
overflow: hidden;
-webkit-box-shadow: 0px 5px 5px rgba(0,0,0, 0.5); -moz-box-shadow: 0px 5px 5px rgba(0,0,0, 0.5); -khtml-box-shadow: 0px 5px 5px rgba(0,0,0, 0.5); box-shadow: 0px 5px 5px rgba(0,0,0, 0.5);

	
	min-height: @menuMinheight;
	min-width: 200px;
	*width: 200px;
	
	/* makes menus actually work... */
	position: absolute;
	z-index: 7500;
	display: none;
}

/* allow menus to operate when JS is disabled */
.Popup:hover .Menu
{
	display: block;
}

.Popup:hover .Menu.JsOnly
{
	display: none;
}

.Menu.BottomControl
{
	border-top-width: 1px;
	border-bottom-width: 3px;
	-webkit-box-shadow: 0px 0px 0px transparent; -moz-box-shadow: 0px 0px 0px transparent; -khtml-box-shadow: 0px 0px 0px transparent; box-shadow: 0px 0px 0px transparent;
}

	.Menu > li > a,
	.Menu .menuRow
	{
		display: block;
	}
		
/* Menu header */

.Menu .menuHeader
{
	overflow: hidden; zoom: 1;
}

.Menu .menuHeader h3
{
	font-size: 15pt;

}

.Menu .menuHeader .muted
{
	font-size: 11px;

}

/* Standard menu sections */

.Menu .primaryContent
{
	background: transparent none;
padding: 0;
margin: 0;
border-width: 0;
-webkit-border-radius: 0; -moz-border-radius: 0; -khtml-border-radius: 0; border-radius: 0;
box-shadow: none !important;

	background: url(rgba.php?r=255&g=255&b=255&a=229); background: rgba(255, 255, 255, 0.9); _filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#E5FFFFFF,endColorstr=#E5FFFFFF);;
	border-bottom: 1px solid rgb(255, 255, 255);
	position: relative;
	padding: 10px;
}
	.Menu .primaryContent:after
	{
		content: '';
		display: block;
		position: absolute;
		bottom: 0;
		left: 0;
		right: 0;
		height: 0;
		border-bottom: 1px solid rgb(232, 232, 232);
	}

.Menu .secondaryContent
{
	background: transparent none;
padding: 0;
margin: 0;
border-width: 0;
-webkit-border-radius: 0; -moz-border-radius: 0; -khtml-border-radius: 0; border-radius: 0;
box-shadow: none !important;

	background: url(rgba.php?r=255&g=255&b=255&a=229); background: rgba(255, 255, 255, 0.9); _filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#E5FFFFFF,endColorstr=#E5FFFFFF);;
	border-bottom: 1px solid rgb(232, 232, 232);
	padding: 9px;
}

	.Menu .secondaryContent + .secondaryContent
	{
		border-top: 1px solid rgb(255, 255, 255);
	}
	
	.Menu .secondaryContent.menuColumns
	{
		padding: 2px;
	}

.Menu .sectionFooter
{
	background: url(rgba.php?r=255&g=255&b=255&a=229); background: rgba(255, 255, 255, 0.9); _filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#E5FFFFFF,endColorstr=#E5FFFFFF);;
}

/* Links lists */

.Menu .blockLinksList
{	
	max-height: 400px;
	overflow: auto;
	padding: 2px;
}

/* form popups */

.formPopup
{
	width: 250px;
	background: url(rgba.php?r=255&g=255&b=255&a=229); background: rgba(255, 255, 255, 0.9); _filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#E5FFFFFF,endColorstr=#E5FFFFFF);;
}

	.formPopup .formPopup,
	.formPopup .primaryControls,
	.formPopup .secondaryControls
	{
		background: transparent none;
	}

	.formPopup form,
	.formPopup .ctrlUnit
	{
		margin: 5px auto;
	}
	
		.formPopup .ctrlUnit
		{
		}
		
	.formPopup .textCtrl,
	.formPopup .button
	{
		width: 232px;
	}
		
	.formPopup .ctrlUnit dt label
	{
		display: block;
		margin-bottom: 2px;
	}
		
	.formPopup .submitUnit dd
	{
		text-align: center;
	}
	
		.formPopup .ctrlUnit dd .explain
		{
			margin: 2px 0 0;
		}
	
	.formPopup .primaryControls
	{
		zoom: 1;
		white-space: nowrap;
		word-wrap: normal;
		padding: 0 5px;
	}
	
		.formPopup .primaryControls input.textCtrl
		{
			margin-bottom: 0;
		}
	
	.formPopup .secondaryControls
	{
		padding: 0 5px;
	}
	
		.formPopup .controlsWrapper
		{
			-webkit-border-radius: 5px; -moz-border-radius: 5px; -khtml-border-radius: 5px; border-radius: 5px;
			padding: 5px;
			margin: 5px 0;
			font-size: 11px;
		}

			.formPopup .controlsWrapper .textCtrl
			{
				width: 222px;
			}
	
/* 500px and lower - align popup menu to left */
@media only screen and (max-width: 500px), only screen and (max-device-width: 500px)
{
	.Menu,
	.xenPreviewTooltip
	{
		left: 5px !important;
	}
}

/* Overlay background */
#exposeMask
{
	
	background-image: url('styles/soft_responsive_green/xenforo/layout/pattern.png');
	
	background-color: rgb(255, 255, 255) !important;
}

	#exposeMask.overlayExposeMask
	{
		background-color: rgb(0, 0, 0) !important;
	}

/* All overlays must have this */
.xenOverlay
{
	display: none;
	z-index: 10000;
	width: 690px; /*calc: 90=overlay padding+borders*/
}

	.xenOverlay .overlayScroll
	{
		max-height: 400px;
		overflow: auto;
	}

.overlayOnly /* needs a bit more specificity over regular buttons */
{
	display: none !important;
}

	.xenOverlay .overlayOnly
	{
		display: block !important;
	}
	
	.xenOverlay input.overlayOnly,
	.xenOverlay button.overlayOnly,
	.xenOverlay a.overlayOnly
	{
		display: inline !important;
	}
	
	.xenOverlay a.close 
	{
		background-image: url('styles/soft_responsive_green/xenforo/overlay/close.png');
position: absolute;
right: 4px;
top: 4px;
cursor: pointer;
width: 35px;
height: 35px;

	}
	
		.xenOverlay a.close:hover
		{
			background-position: 0 -40px;
		}

/* Generic form overlays */

.xenOverlay .formOverlay
{
	color: #e0e0e0;
background: #333333 url('styles/soft_responsive_green/xenforo/layout/pattern.png') repeat 0 0;
padding: 15px 25px;
border: 1px solid #282828;
-webkit-border-radius: 7px; -moz-border-radius: 7px; -khtml-border-radius: 7px; border-radius: 7px;
-webkit-box-shadow: 0px 25px 50px rgba(0, 0, 0, 0.5), 0 0 0 1px #3c3c3c inset, 0 0 3px 1px rgba(0, 0, 0, 0.2) inset; -moz-box-shadow: 0px 25px 50px rgba(0, 0, 0, 0.5), 0 0 0 1px #3c3c3c inset, 0 0 3px 1px rgba(0, 0, 0, 0.2) inset; -khtml-box-shadow: 0px 25px 50px rgba(0, 0, 0, 0.5), 0 0 0 1px #3c3c3c inset, 0 0 3px 1px rgba(0, 0, 0, 0.2) inset; box-shadow: 0px 25px 50px rgba(0, 0, 0, 0.5), 0 0 0 1px #3c3c3c inset, 0 0 3px 1px rgba(0, 0, 0, 0.2) inset;

	background-color: rgba(51, 51, 51, 0.9);
	_zoom: 1;
}

	.Touch .xenOverlay .formOverlay
	{
		background: #333333;
		-webkit-box-shadow: none; -moz-box-shadow: none; -khtml-box-shadow: none; box-shadow: none;
	}

	.xenOverlay .formOverlay a.muted,
	.xenOverlay .formOverlay .muted a
	{
		color: #888888;
	}

	.xenOverlay .formOverlay .heading
	{
		font-weight: bold;
font-size: 12pt;
color: #ffffff;
background: rgb(0, 155, 0) url('styles/soft_responsive_green/xenforo/layout/pattern.png') repeat 0 0;
padding: 5px 10px;
margin-bottom: 10px;
border: 1px solid rgb(64, 105, 76);
-webkit-border-radius: 5px; -moz-border-radius: 5px; -khtml-border-radius: 5px; border-radius: 5px;

	}

	.xenOverlay .formOverlay .subHeading
	{
		font-weight: bold;
font-size: 11px;
color: #ffffff;
background-color: rgb(64, 105, 76);
padding: 5px 10px;
margin-bottom: 10px;
border: 1px solid #0f4c22;
-webkit-border-radius: 3px; -moz-border-radius: 3px; -khtml-border-radius: 3px; border-radius: 3px;

	}
	
		.xenOverlay .subHeading
		{
			background-color: rgb(64, 105, 76);
			border-color: rgb(64, 105, 76);
			color: #ffffff;
		}
	
	.xenOverlay .formOverlay .textHeading
	{
		color: #ffffff;

	}
	
	.xenOverlay .formOverlay > p
	{
		padding-left: 10px;
		padding-right: 10px;
	}

	.xenOverlay .formOverlay .textCtrl
	{
		color: rgb(242, 251, 244);
background-color: black;
border-color: rgb(176, 231, 192);

	}

	.xenOverlay .formOverlay .textCtrl:focus,
	.xenOverlay .formOverlay .textCtrl.Focus
	{
		background: #0f4c22 none;

	}

	.xenOverlay .formOverlay .textCtrl.disabled
	{
		background: url(rgba.php?r=0&g=0&b=0&a=63); background: rgba(0,0,0, 0.25); _filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#3F000000,endColorstr=#3F000000);;

	}

	.xenOverlay .formOverlay .textCtrl.prompt
	{
		color: rgb(160,160,160);

	}

	.xenOverlay .formOverlay .ctrlUnit dt dfn,
	.xenOverlay .formOverlay .ctrlUnit dd li .hint,
	.xenOverlay .formOverlay .ctrlUnit dd .explain
	{
		color: #bbb;

	}

	.xenOverlay .formOverlay a
	{
		color: #ffffff;

	}

		.xenOverlay .formOverlay a.button
		{
			color: black;

		}

	.xenOverlay .formOverlay .avatar img,
	.xenOverlay .formOverlay .avatar .img,
	.xenOverlay .formOverlay .avatarCropper
	{
		padding: 0;
		background-color: rgb(255, 255, 255);
		border-width: 0;
		-webkit-border-radius: 0; -moz-border-radius: 0; -khtml-border-radius: 0; border-radius: 0;
	}
	
	/* tabs in form overlay */
	
	.xenOverlay .formOverlay .tabs /* the actual tabs */
	{
		background: transparent none;
border-color: rgb(176, 231, 192);

	}

		.xenOverlay .formOverlay .tabs a
		{
			background: transparent none;
border-color: rgb(176, 231, 192);

		}
		
			.xenOverlay .formOverlay .tabs a:hover
			{
				background: url(rgba.php?r=255&g=255&b=255&a=63); background: rgba(255,255,255, 0.25); _filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#3FFFFFFF,endColorstr=#3FFFFFFF);;

			}
			
			.xenOverlay .formOverlay .tabs .active a
			{
				background-color: black;

			}
			
	.xenOverlay .formOverlay .tabPanel /* panels switched with the tab controls */
	{
		background: transparent url('styles/soft_responsive_green/xenforo/color-picker/panel.png') repeat-x top;
border: 1px solid rgb(176, 231, 192);

	}


/* Generic overlays */

.xenOverlay .section,
.xenOverlay .sectionMain
{
	background: #333333 url('styles/soft_responsive_green/xenforo/layout/pattern.png') repeat 0 0;
padding: 14px 24px;
border: 1px solid #282828;
-webkit-border-radius: 7px; -moz-border-radius: 7px; -khtml-border-radius: 7px; border-radius: 7px;
-webkit-box-shadow: 0px 25px 50px rgba(0, 0, 0, 0.5), 0 0 0 1px #3c3c3c inset, 0 0 3px 1px rgba(0, 0, 0, 0.2) inset; -moz-box-shadow: 0px 25px 50px rgba(0, 0, 0, 0.5), 0 0 0 1px #3c3c3c inset, 0 0 3px 1px rgba(0, 0, 0, 0.2) inset; -khtml-box-shadow: 0px 25px 50px rgba(0, 0, 0, 0.5), 0 0 0 1px #3c3c3c inset, 0 0 3px 1px rgba(0, 0, 0, 0.2) inset; box-shadow: 0px 25px 50px rgba(0, 0, 0, 0.5), 0 0 0 1px #3c3c3c inset, 0 0 3px 1px rgba(0, 0, 0, 0.2) inset;

	background-color: rgba(51, 51, 51, 0.9);
	_zoom: 1;
}

	.Touch .xenOverlay .section,
	.Touch .xenOverlay .sectionMain
	{
		-webkit-box-shadow: none; -moz-box-shadow: none; -khtml-box-shadow: none; box-shadow: none;
	}
	
	.xenOverlay .section .heading,
	.xenOverlay .sectionMain .heading
	{
		-webkit-border-radius: 0; -moz-border-radius: 0; -khtml-border-radius: 0; border-radius: 0;
		margin-bottom: 0;background: rgb(0,155,0) !important;
	}

	.xenOverlay .section .subHeading,
	.xenOverlay .sectionMain .subHeading
	{
		margin-top: 0;
	}

	.xenOverlay .section .sectionFooter,
	.xenOverlay .sectionMain .sectionFooter
	{
		overflow: hidden; zoom: 1;
	}
	
		.xenOverlay .sectionFooter .button,
		.xenOverlay .sectionFooter .buttonContainer
		{
			min-width: 75px;
			*min-width: 0;
			float: right;
		}
		
			.xenOverlay .sectionFooter .buttonContainer .button
			{
				float: none;
			}

/* The AJAX progress indicator overlay */

#AjaxProgress.xenOverlay
{
	width: 100%;
	overflow: hidden; zoom: 1;
}

	#AjaxProgress.xenOverlay .content
	{
		background: rgb(0, 0, 0) url('styles/soft_responsive_green/xenforo/widgets/ajaxload.info_FFFFFF_facebook.gif') no-repeat center center; background: rgba(0,0,0, 0.5) url('styles/soft_responsive_green/xenforo/widgets/ajaxload.info_FFFFFF_facebook.gif') no-repeat center center;;
-webkit-border-bottom-left-radius: 10px; -moz-border-radius-bottomleft: 10px; -khtml-border-bottom-left-radius: 10px; border-bottom-left-radius: 10px;
float: right;
width: 85px;
height: 30px;

	}
	
		.Touch #AjaxProgress.xenOverlay .content
		{
			background-color: rgb(0, 0, 0);
		}

/* Timed message for redirects */

.xenOverlay.timedMessage
{
	color: black;
background: transparent url('styles/soft_responsive_green/xenforo/overlay/timed-message.png') repeat-x;
border-bottom: 1px solid black;
max-width: none;
width: 100%;

}

	.xenOverlay.timedMessage .content
	{
		font-size: 18pt;
padding: 30px;
text-align: center;

	}
	
/* Growl-style message */

#StackAlerts
{
	position: fixed;
bottom: 70px;
left: 35px;
z-index: 9999;
/* in front of the expose mask */

}

	#StackAlerts .stackAlert
	{
		margin-top: 5px;
border: 1px solid rgb(123, 231, 156);
-webkit-border-radius: 5px; -moz-border-radius: 5px; -khtml-border-radius: 5px; border-radius: 5px;
position: relative;
-webkit-box-shadow: 2px 2px 5px 0 rgba(0,0,0, 0.4); -moz-box-shadow: 2px 2px 5px 0 rgba(0,0,0, 0.4); -khtml-box-shadow: 2px 2px 5px 0 rgba(0,0,0, 0.4); box-shadow: 2px 2px 5px 0 rgba(0,0,0, 0.4);
width: 270px;

	}

		#StackAlerts .stackAlertContent
		{
			font-weight: bold;
font-size: 11px;
background-color: rgb(242, 251, 244);
padding: 10px 30px 10px 10px;
border: 2px solid rgb(217, 253, 227);
-webkit-border-radius: 4px; -moz-border-radius: 4px; -khtml-border-radius: 4px; border-radius: 4px;

			background-color: rgba(242, 251, 244, 0.9);
		}
	
/* Inline Editor */

.xenOverlay .section .secondaryContent.messageContainer
{
	padding: 0;
}

.xenOverlay .section .messageContainer .mceLayout
{
	border: none;	
}

.xenOverlay .section .messageContainer tr.mceFirst td.mceFirst
{
	border-top: none;
}

.xenOverlay .section .messageContainer tr.mceLast td.mceLast,
.xenOverlay .section .messageContaner tr.mceLast td.mceIframeContainer
{
	border-bottom: none;
}

.xenOverlay .section .textCtrl.MessageEditor,
.xenOverlay .section .mceLayout,
.xenOverlay .section .bbCodeEditorContainer textarea
{
	width: 100% !important;
	min-height: 260px;
	_height: 260px;
	-webkit-box-sizing: border-box; -moz-box-sizing: border-box; -ms-box-sizing: border-box; box-sizing: border-box;
}

.xenOverlay .primaryContent,
.xenOverlay .secondaryContent,
.xenOverlay .sectionFooter
{
	background: transparent none;
padding: 0;
margin: 0;
border-width: 0;
-webkit-border-radius: 0; -moz-border-radius: 0; -khtml-border-radius: 0; border-radius: 0;
box-shadow: none !important;

}

	.xenOverlay .primaryContent
	{
		background-color: rgb(255, 255, 255);
padding: 4px 10px;
border: 1px solid rgb(255, 255, 255);
border-right-color: rgb(232, 232, 232);
border-bottom-color: rgb(232, 232, 232);

	}

	.xenOverlay .secondaryContent
	{
		background-color: rgb(255, 255, 255);
padding: 4px 10px;
border: 1px solid rgb(255, 255, 255);
border-right-color: rgb(232, 232, 232);
border-bottom-color: rgb(232, 232, 232);

	}

	.xenOverlay .sectionFooter
	{
		background-color: rgb(255, 255, 255);
padding: 4px 10px;
border: 1px solid rgb(255, 255, 255);
border-right-color: rgb(232, 232, 232);
border-bottom-color: rgb(232, 232, 232);

	}

	.xenOverlay #jumpMenu .primaryContent .secondaryContent
	{
		background: transparent none;
	}

/* 700px and lower - small navigation menu */
@media only screen and (max-width: 700px), only screen and (max-device-width: 700px)
{
	.xenOverlay
	{
		width: 290px;
	}

	.xenOverlay .formOverlay,
	.xenOverlay .section,
	.xenOverlay .sectionMain
	{
		padding: 5px;
	}

}

.alerts .alertGroup
{
	margin-bottom: 20px;
}

.alerts .primaryContent
{
	overflow: hidden; zoom: 1;
	padding: 5px;
}

.alerts .avatar
{
	float: left;
}

.alerts .avatar img
{
	width: 32px;
	height: 32px;
}

.alerts .alertText
{
	margin-left: 32px;
	padding: 0 5px;
}

.alerts h3
{
	display: inline;
}

.alerts h3 .subject
{
	font-weight: bold;
}

.alerts .timeRow
{
	font-size: 11px;
	margin-top: 5px;
}
	
	.alerts .newIcon,
	.alertsPopup .newIcon
	{
		display: inline-block;
		vertical-align: baseline;
		margin-left: 2px;
		width: 11px;
		height: 11px;
		background: url('styles/soft_responsive_green/xenforo/xenforo-ui-sprite.png') no-repeat -144px -40px;
	}

/** Data tables **/

table.dataTable
{
	width: 100%;
	border-collapse: separate;
	_width: 99.5%;
	margin: 10px 0;
}

	.sectionMain > table.dataTable:first-child
	{
		margin-top: 0;
	}

	.sectionMain > table.dataTable:last-child
	{
		margin-bottom: 0;
	}

.dataTable caption
{
	font-weight: bold;
font-size: 11pt;
color: rgb(242, 251, 244);
background-color: rgb(119, 217, 148);
padding: 5px 10px;
margin-bottom: 3px;
border-bottom: 1px solid rgb(0, 155, 0);
-webkit-border-top-left-radius: 5px; -moz-border-radius-topleft: 5px; -khtml-border-top-left-radius: 5px; border-top-left-radius: 5px;
-webkit-border-top-right-radius: 5px; -moz-border-radius-topright: 5px; -khtml-border-top-right-radius: 5px; border-top-right-radius: 5px;

}

.dataTable tr.dataRow td
{
	border-top: 1px solid rgb(255, 255, 255);
	border-bottom: 1px solid rgb(232, 232, 232);
	padding: 5px 10px;
}

	.dataTable tr.dataRow:first-child td
	{
		border-top-width: 0;
	}

		.dataTable tr.dataRow.first-child td
		{
			border-top-width: 0;
		}

	.dataTable tr.dataRow:last-child td
	{
		border-bottom-width: 0;
	}

		.dataTable tr.dataRow.last-child td
		{
			border-bottom-width: 0;
		}
	
.dataTable tr.dataRow td.secondary
{
	background: rgb(242, 251, 244) url("styles/soft_responsive_green/xenforo/gradients/category-23px-light.png") repeat-x top;
}

.dataTable tr.dataRow th
{
	background: rgb(0, 155, 0) url("styles/soft_responsive_green/xenforo/gradients/category-23px-light.png") repeat-x top;
	color: #ffffff;
	font-size: 11px;
	padding: 6px 10px;
}

.dataTable .dataRow .dataOptions
{
	text-align: right;
	white-space: nowrap;
	word-wrap: normal;
	padding: 0;
}

.dataTable .dataRow .dataOptions a.secondaryContent
{
	display: inline-block;
	border-left: 1px solid rgb(217, 253, 227);
	border-bottom: none;
	padding: 7px 10px 6px;
	font-size: 11px;
}

	.dataTable .dataRow .dataOptions a.secondaryContent:hover
	{
		background-color: rgb(217, 253, 227);
		text-decoration: none;
	}

	.dataTable .dataRow .delete
	{
		padding: 0px;
		width: 26px;
		border-left: 1px solid rgb(217, 253, 227);
		
	}	
				
		.dataTable .dataRow .delete a
		{
			display: block;
			background: transparent url('styles/soft_responsive_green/xenforo/permissions/deny.png') no-repeat center center;
			cursor: pointer;
		
			padding: 5px;
			width: 16px;
			height: 16px;
			
			overflow: hidden;
			white-space: nowrap;
			text-indent: -1000px;
		}

.memberListItem
{
	background: transparent none;
padding: 0;
margin: 0;
border-width: 0;
-webkit-border-radius: 0; -moz-border-radius: 0; -khtml-border-radius: 0; border-radius: 0;
box-shadow: none !important;

	border-top: 1px solid rgb(255, 255, 255);
border-bottom: 1px solid rgb(232, 232, 232);
padding: 4px 0;
overflow: hidden;
zoom: 1;

}

	.memberListItem:first-child
	{
		border-top-width: 0;
padding-top: 0;

	}

	.memberListItem:last-child
	{
		border-bottom-width: 0;
padding-bottom: 0;

	}
	
	.memberListItem:after
	{
		display: none;
	}
	
	.memberListItem .avatar,
	.memberListItem .icon
	{
		float: left;

	}
	
	/* ----------------------- */
	
	.memberListItem .extra
	{
		font-size: 11px;
float: right;

	}

		.memberListItem .extra .DateTime
		{
			display: block;
		}
	
	.memberListItem .member
	{
		margin-left: 65px;

	}
	
	/* ----------------------- */
		
		.memberListItem h3.username
		{
			font-weight: bold;
font-size: 13pt;
margin-bottom: 3px;

		}
			
		.memberListItem .username.guest
		{
			font-style: italic;
font-weight: normal;

		}
	
	/* ----------------------- */
		
		.memberListItem .userInfo
		{
			font-size: 11px;
margin-bottom: 3px;

		}
		
			.memberListItem .userBlurb
			{
			}
		
				.memberListItem .userBlurb .userTitle
				{
					font-weight: bold;

				}
				
	
	/* ----------------------- */
		
		.memberListItem .member .contentInfo
		{
			margin-top: 5px;

		}
	
	/* ----------------------- */
	
	
/* extended member list items have a fixed 200px right column */

.memberListItem.extended .extra
{
	width: 200px;
}

.memberListItem.extended .member
{
	margin-right: 210px;
}



/* Styling for hover-dismiss controls */

.DismissParent .DismissCtrl
{
	position: absolute;
	top: 12px;
	right: 5px;
	
	display: block;
	background: transparent url('styles/soft_responsive_green/xenforo/xenforo-ui-sprite.png') no-repeat -80px 0;
	color: white;
	width: 15px;
	height: 15px;
	line-height: 15px;
	text-align: center;
	
	opacity: .4;
	-webkit-transition: opacity 0.3s ease-in-out;
	-moz-transition: opacity 0.3s ease-in-out;
	transition: opacity 0.3s ease-in-out;
	
	font-size: 10px;
	
	overflow: hidden;
	white-space: nowrap;
	text-indent: 20000em;
	
	cursor: pointer;
}

	.DismissParent:hover .DismissCtrl,
	.Touch .DismissParent .DismissCtrl
	{
		opacity: 1;
	}
	
		.DismissParent:hover .DismissCtrl:hover
		{
			background-position: -96px 0;
		}
		
			.DismissParent:hover .DismissCtrl:active
			{
				background-position: -112px 0;
			}

/* ***************************** */
/* un-reset, mostly from YUI */

.baseHtml h1
	{ font-size:138.5%; } 
.baseHtml h2
	{ font-size:123.1%; }
.baseHtml h3
	{ font-size:108%; } 
.baseHtml h1, .baseHtml h2, .baseHtml h3
	{  margin:1em 0; } 
.baseHtml h1, .baseHtml h2, .baseHtml h3, .baseHtml h4, .baseHtml h5, .baseHtml h6, .baseHtml strong
	{ font-weight:bold; } 
.baseHtml abbr, .baseHtml acronym
	{ border-bottom:1px dotted #000; cursor:help; }  
.baseHtml em
	{  font-style:italic; } 
.baseHtml blockquote, .baseHtml ul, .baseHtml ol, .baseHtml dl
	{ margin:1em; } 
.baseHtml ol, .baseHtml ul, .baseHtml dl
	{ margin-left:3em; margin-right:0; } 
.baseHtml ul ul, .baseHtml ul ol, .baseHtml ul dl, .baseHtml ol ul, .baseHtml ol ol, .baseHtml ol dl, .baseHtml dl ul, .baseHtml dl ol, .baseHtml dl dl
	{ margin-top:0; margin-bottom:0; }
.baseHtml ol li
	{ list-style: decimal outside; } 
.baseHtml ul li
	{ list-style: disc outside; } 
.baseHtml ol ul li, .baseHtml ul ul li
	{ list-style-type: circle; }
.baseHtml ol ol ul li, .baseHtml ol ul ul li, .baseHtml ul ol ul li, .baseHtml ul ul ul li
	{ list-style-type: square; }
.baseHtml ul ol li, .baseHtml ul ol ol li, .baseHtml ol ul ol li
	{ list-style: decimal outside; }
.baseHtml dl dd
	{ margin-left:1em; } 
.baseHtml th, .baseHtml td
	{ border:1px solid #000; padding:.5em; } 
.baseHtml th
	{ font-weight:bold; text-align:center; } 
.baseHtml caption
	{ margin-bottom:.5em; text-align:center; } 
.baseHtml p, .baseHtml pre, .baseHtml fieldset, .baseHtml table
	{ margin-bottom:1em; }

.PageNav
{
	font-size: 11px;
padding: 2px 0;
overflow: hidden;
zoom: 1;
line-height: 16px;
word-wrap: normal;

}
	
	.PageNav .pageNavHeader,
	.PageNav a,
	.PageNav .scrollable
	{
		display: block;
		float: left;
		margin-right: 3px;
	}
	
	.PageNav .pageNavHeader
	{
		padding: 1px 0;
	}

	.PageNav a
	{
		@property "pageNavLink";
		text-decoration: none;
		border: 1px solid transparent;
		-webkit-border-radius: 3px; -moz-border-radius: 3px; -khtml-border-radius: 3px; border-radius: 3px;
		text-align: center;
		@property "/pageNavLink";
		
		min-width: 19px;
		*width: 19px;
	}

		.PageNav a[rel=start]
		{
			width: 19px !important;
		}

		.PageNav a.text
		{
			width: auto !important;
			padding: 0 4px;
		}
	
		.PageNav a
		{
			@property "pageNavPage";
			color: rgb(64, 105, 76);
			background: rgb(255, 255, 255) url('styles/soft_responsive_green/xenforo/gradients/white_50_25.png') repeat-x top;
			border-color: rgb(228, 228, 228);
			background-size: 100% 100%;
			@property "/pageNavPage";
		}
		
		.PageNav a.currentPage
		{
			color: #ffffff;
background: rgb(0, 155, 0) url('styles/soft_responsive_green/xenforo/gradients/category-23px-light.png');
border-color: rgb(0, 155, 0);
position: relative;

		}

		a.PageNavPrev,
		a.PageNavNext
		{
			color: rgb(20,20,20);
background: transparent none;
padding: 1px;
border: 1px none transparent;
cursor: pointer;
width: 19px !important;

		}
		
		.PageNav a:hover,
		.PageNav a:focus
		{
			color: #ffffff;
text-decoration: none;
background: rgb(57,194,52) url('styles/soft_responsive_green/xenforo/gradients/category-23px-light.png');
border-color: rgb(57,194,52);

		}
		
	.PageNav a.distinct
	{
		margin-left: 3px;
	}
			
	.PageNav .scrollable
	{
		position: relative;
		overflow: hidden;
		width: 117px; /* width of 5 page numbers plus their margin & border */
		height: 18px; /* only needs to be approximate */
	}
	
		.PageNav .scrollable .items
		{
			display: block;
			width: 20000em; /* contains scrolling items, should be huge */
			position: absolute;
			display: block;
		}
		
/** Edge cases - large numbers of digits **/

.PageNav .gt999 
{
	font-size: 9px;
	letter-spacing: -0.05em; 
}

.PageNav.pn5 a { width: 29px; } .PageNav.pn5 .scrollable { width: 167px; }
.PageNav.pn6 a { width: 33px; } .PageNav.pn6 .scrollable { width: 187px; }
.PageNav.pn7 a { width: 37px; } .PageNav.pn7 .scrollable { width: 207px; }


/* 700px and lower - move navigation to its own line */
@media only screen and (max-width: 700px), only screen and (max-device-width: 700px)
{
	.PageNav
	{
		float: none;
		clear: both;
	}
}

/* ***************************** */
/* DL Name-Value Pairs */

.pairs dt,
.pairsInline dt,
.pairsRows dt,
.pairsColumns dt,
.pairsJustified dt
{
	color: rgb(102, 102, 102);
}

.pairsRows,
.pairsColumns,
.pairsJustified
{
	line-height: 1.5;
}

.pairsInline dl,
.pairsInline dt,
.pairsInline dd
{
	display: inline;
}

.pairsRows dt,
.pairsRows dd
{
	display: inline-block;
	vertical-align: top;

	*display: inline;
	*margin-right: 1ex;
	*zoom: 1;
}

dl.pairsColumns,
dl.pairsJustified,
.pairsColumns dl,
.pairsJustified dl
{
	overflow: hidden; zoom: 1;
}

.pairsColumns dt,
.pairsColumns dd
{
	float: left;
	width: 48%;
}

.pairsJustified dt
{
	float: left;
}
.pairsJustified dd
{
	float: right;
	text-align: right;
}


/* ***************************** */
/* Lists that put all elements on a single line */

.listInline ul,
.listInline ol,
.listInline li,
.listInline dl,
.listInline dt,
.listInline dd
{
	display: inline;
}

/* intended for use with .listInline, produces 'a, b, c, d' / 'a * b * c * d' lists */

.commaImplode li
{
	margin-right: 0.2em;
}

.commaImplode li:after,
.commaElements > *:after
{
	content: ',';
}

.commaImplode li:last-child:after,
.commaElements > *:last-child:after
{
	content: '';
}

.bulletImplode li:before
{
	content: '\2022\a0';
}

.bulletImplode li:first-child:before
{
	content: '';
}

/* Three column list display */

.threeColumnList
{
	overflow: hidden; zoom: 1;
}

.threeColumnList li
{
	float: left;
	width: 32%;
	margin: 2px 1% 2px 0;
}

/* ***************************** */
/* Preview tooltips (threads etc.) */

.previewTooltip
{
}
		
	.previewTooltip .avatar
	{
		float: left;
	}
	
	.previewTooltip .text
	{
		margin-left: 64px;
	}
	
		.previewTooltip blockquote
		{
			font-size: 15px;
font-family: 'Roboto',arial,sans-serif;
line-height: 1.4;

			
			font-size: 10pt;
			max-height: 150px;
			overflow: hidden;
		}
	
		.previewTooltip .posterDate
		{
			font-size: 11px;
			padding-top: 5px;
			border-top: 1px solid rgb(255, 255, 255);
			margin-top: 5px;
			position: relative;
		}
		
			.previewTooltip .posterDate:before
			{
				content: '';
				display: block;
				position: absolute;
				top: -2px;
				left: 0;
				right: 0;
				border-top: 1px solid rgb(232, 232, 232);
			}

/* ***************************** */
/* List of block links */

.blockLinksList
{
	font-size: 13px;
padding: 2px;

}
		
	.blockLinksList a,
	.blockLinksList label
	{
		color: rgb(0, 155, 0);
padding: 5px 10px;
-webkit-border-radius: 5px; -moz-border-radius: 5px; -khtml-border-radius: 5px; border-radius: 5px;
display: block;
outline: 0 none;

	}
	
		.blockLinksList a:hover,
		.blockLinksList a:focus,
		.blockLinksList li.kbSelect a,
		.blockLinksList label:hover,
		.blockLinksList label:focus,
		.blockLinksList li.kbSelect label
		{
			color: #ffffff !important;
text-decoration: none;
background: rgb(0, 155, 0) url('styles/soft_responsive_green/xenforo/gradients/category-23px-light.png') repeat-x top;

		}
		
		.blockLinksList a:active,
		.blockLinksList a.selected,
		.blockLinksList label:active,
		.blockLinksList label.selected
		{
			color: #ffffff !important;
background: rgb(57,194,52) url('styles/soft_responsive_green/xenforo/gradients/category-23px-light.png') repeat-x top;

		}
		
		.blockLinksList a.selected,
		.blockLinksList label.selected
		{
			font-weight: bold;
display: block;

		}
		
		.blockLinksList span.depthPad
		{
			display: block;
		}

/* ***************************** */
/* Normally-indented nested lists */

.indentList ul,
.indentList ol
{
	margin-left: 2em;
}

/* ***************************** */
/* AJAX progress image */

.InProgress
{
	background: transparent url('styles/soft_responsive_green/xenforo/widgets/ajaxload.info_B4B4DC_facebook.gif') no-repeat right center;
}

/* ***************************** */
/* Hidden inline upload iframe */

.hiddenIframe
{
	display: block;
	width: 500px;
	height: 300px;
}

/* ***************************** */
/* Exception display */

.traceHtml { font-size:11px; font-family:calibri, verdana, arial, sans-serif; }
.traceHtml .function { color:rgb(193, 167, 88); font-weight:normal; }
.traceHtml .file { font-weight:normal; }
.traceHtml .shade { color:rgb(128,128,128); }
.traceHtml .link { font-weight:bold; }

/* ***************************** */
/* Indenting for options */

._depth0 { padding-left:  0em; }
._depth1 { padding-left:  2em; }
._depth2 { padding-left:  4em; }
._depth3 { padding-left:  6em; }
._depth4 { padding-left:  8em; }
._depth5 { padding-left: 10em; }
._depth6 { padding-left: 12em; }
._depth7 { padding-left: 14em; }
._depth8 { padding-left: 16em; }
._depth9 { padding-left: 18em; }

.xenOverlay .errorOverlay
{
	color: #fff;
	padding: 25px;
	-webkit-border-radius: 20px; -moz-border-radius: 20px; -khtml-border-radius: 20px; border-radius: 20px;	
	border:  20px solid rgb(0,0,0); border:  20px solid rgba(0,0,0, 0.25); _border:  20px solid rgb(0,0,0);
	
	background: url(rgba.php?r=0&g=0&b=0&a=191); background: rgba(0,0,0, 0.75); _filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#BF000000,endColorstr=#BF000000);;
}

	.xenOverlay .errorOverlay .heading
	{
		padding: 5px 10px;
		font-weight: bold;
		font-size: 12pt;
		background: #c69400;
		color: #fff;
		margin-bottom: 10px;
		-webkit-border-radius: 5px; -moz-border-radius: 5px; -khtml-border-radius: 5px; border-radius: 5px;
		border: 1px solid #6f5300;
	}

	.xenOverlay .errorOverlay li
	{
		line-height: 2;
	}
	
	.xenOverlay .errorOverlay .exceptionMessage
	{
		color: rgb(102, 102, 102);
	}

/*** inline errors ***/

.formValidationInlineError
{
	display: none;
	position: absolute;
	z-index: 5000;
	background-color: #fff;
	border: 1px solid #c69400;
	color: #c69400;
	-webkit-box-shadow: 2px 2px 10px #999; -moz-box-shadow: 2px 2px 10px #999; -khtml-box-shadow: 2px 2px 10px #999; box-shadow: 2px 2px 10px #999;
	-webkit-border-radius: 3px; -moz-border-radius: 3px; -khtml-border-radius: 3px; border-radius: 3px;
	padding: 2px 5px;
	font-size: 11px;
	width: 175px;
	min-height: 2.5em;
	_height: 2.5em;
}

/** Block errors **/

.errorPanel
{
	margin: 10px 0 20px;
	color: #c69400;
	background: #fffbef url('styles/soft_responsive_green/xenforo/gradients/content.png') 0 0 repeat-x;
	-webkit-border-radius: 5px; -moz-border-radius: 5px; -khtml-border-radius: 5px; border-radius: 5px;
	border: 1px solid #c69400;
	position: relative;
}

	.errorPanel .errorHeading
	{
		margin: .75em;
		font-weight: bold;
		font-size: 12pt;
	}
	
	.errorPanel .errors
	{
		margin: .75em 2em;
		display: block;
		line-height: 1.5;
	}

/* Undo some nasties */

input[type=search]
{
	-webkit-appearance: textfield;
	-webkit-box-sizing: content-box;
}

/* ignored content hiding */

.ignored { display: none !important; }

/* Square-cropped thumbs */

.SquareThumb
{
	position: relative;
	display: block;
	overflow: hidden;
	padding: 0;
	direction: ltr;
	
	/* individual instances can override this size */
	width: 48px;
	height: 48px;
}

.SquareThumb img
{
	position: relative;
	display: block;
}

/* Basic, common, non-templated BB codes */

.bbCodeImage
{
	max-width: 100%;
}

.bbCodeImageFullSize
{
	position: absolute;
	z-index: 50000;
	
}

.bbCodeStrike
{
	text-decoration: line-through;
}

img.mceSmilie,
img.mceSmilieSprite
{
	vertical-align: text-bottom;
	margin: 0 1px;
}

/* smilie sprite classes */

img.mceSmilieSprite.mceSmilie1
{
	width: 18px; height: 18px; background: url('styles/default/xenforo/xenforo-smilies-sprite.png') no-repeat 0px 0px;
}

img.mceSmilieSprite.mceSmilie2
{
	width: 18px; height: 18px; background: url('styles/default/xenforo/xenforo-smilies-sprite.png') no-repeat -60px -21px;
}

img.mceSmilieSprite.mceSmilie3
{
	width: 18px; height: 18px; background: url('styles/default/xenforo/xenforo-smilies-sprite.png') no-repeat -40px -42px;
}

img.mceSmilieSprite.mceSmilie4
{
	width: 18px; height: 18px; background: url('styles/default/xenforo/xenforo-smilies-sprite.png') no-repeat -60px 0px;
}

img.mceSmilieSprite.mceSmilie5
{
	width: 18px; height: 18px; background: url('styles/default/xenforo/xenforo-smilies-sprite.png') no-repeat -40px -21px;
}

img.mceSmilieSprite.mceSmilie6
{
	width: 18px; height: 18px; background: url('styles/default/xenforo/xenforo-smilies-sprite.png') no-repeat -40px 0px;
}

img.mceSmilieSprite.mceSmilie7
{
	width: 18px; height: 18px; background: url('styles/default/xenforo/xenforo-smilies-sprite.png') no-repeat -20px -21px;
}

img.mceSmilieSprite.mceSmilie8
{
	width: 18px; height: 18px; background: url('styles/default/xenforo/xenforo-smilies-sprite.png') no-repeat -20px 0px;
}

img.mceSmilieSprite.mceSmilie9
{
	width: 18px; height: 18px; background: url('styles/default/xenforo/xenforo-smilies-sprite.png') no-repeat -20px -42px;
}

img.mceSmilieSprite.mceSmilie10
{
	width: 18px; height: 18px; background: url('styles/default/xenforo/xenforo-smilies-sprite.png') no-repeat 0px -42px;
}

img.mceSmilieSprite.mceSmilie11
{
	width: 18px; height: 18px; background: url('styles/default/xenforo/xenforo-smilies-sprite.png') no-repeat 0px -21px;
}

img.mceSmilieSprite.mceSmilie12
{
	width: 18px; height: 18px; background: url('styles/default/xenforo/xenforo-smilies-sprite.png') no-repeat -80px -42px;
}








@media only screen and (max-width: 640px) {
.ad_below_bottom {display: none; !important;}
}



/* --- form.css --- */

/** Forms **/

.xenForm
{
	margin: 10px auto;
	max-width: 800px;
}

	.xenOverlay .xenForm
	{
		max-width: 600px;
	}

.xenForm .ctrlUnit > dd
{
	width: 68%;
	-webkit-box-sizing: border-box; -moz-box-sizing: border-box; -ms-box-sizing: border-box; box-sizing: border-box;
	padding-right: 30px;
}

.xenForm .ctrlUnit > dd .textCtrl
{
	-webkit-box-sizing: border-box; -moz-box-sizing: border-box; -ms-box-sizing: border-box; box-sizing: border-box;
	width: 100%;
}

	.xenForm .ctrlUnit > dd .textCtrl[size],
	.xenForm .ctrlUnit > dd .textCtrl.autoSize
	{
		width: auto !important;
		min-width: 0;
	}

	.xenForm .ctrlUnit > dd .textCtrl.number
	{
		width: 150px;
	}


.xenForm > .sectionHeader:first-child,
.xenForm > fieldset > .sectionHeader:first-child
{
	margin-top: 0;
}

/** Sections **/

.xenForm fieldset,
.xenForm .formGroup
{
	border-top: 1px solid rgb(217, 253, 227);
	margin: 20px auto;
}

.xenForm > fieldset:first-child,
.xenForm > .formGroup:first-child
{
	border-top: none;
	margin: auto;
}

.xenForm .PreviewContainer + fieldset,
.xenForm .PreviewContainer + .formGroup
{
	border-top: none;
}

.xenForm fieldset + .ctrlUnit,
.xenForm .formGroup + .ctrlUnit,
.xenForm .submitUnit
{
	border-top: 1px solid rgb(217, 253, 227);
}

.xenForm fieldset + .ctrlUnit,
.xenForm .formGroup + .ctrlUnit
{
	padding-top: 10px;
}

.xenForm .primaryContent + .submitUnit,
.xenForm .secondaryContent + .submitUnit
{
	margin-top: 0;
	border-top: none;
}

.xenForm .ctrlUnit.submitUnit dd
{	
	line-height: 31px;
	padding-top: 0;
}

	.ctrlUnit.submitUnit dd .explain,
	.ctrlUnit.submitUnit dd .text,
	.ctrlUnit.submitUnit dd label
	{
		line-height: 1.28;
	}

/* now undo that */

.xenOverlay .ctrlUnit.submitUnit dd,
.Menu .ctrlUnit.submitUnit dd,
#QuickSearch .ctrlUnit.submitUnit dd
{
	border: none;
	background: none;
}

.xenForm .ctrlUnit
{
	
}

	/** Sections Immediately Following Headers **/

	.xenForm .sectionHeader + fieldset,
	.xenForm .heading + fieldset,
	.xenForm .subHeading + fieldset,
	.xenForm .sectionHeader + .formGroup,
	.xenForm .heading + .formGroup,
	.xenForm .subHeading + .formGroup
	{
		border-top: none;
		margin-top: 0;
	}
	
.xenForm .formHiderHeader
{
	margin: 10px;
	font-size: 15px;
	font-weight: bold;
}


/** *********************** **/
/** TEXT INPUTS             **/
/** *********************** **/

.textCtrl
{
	font-size: 13px;
font-family: Calibri, 'Trebuchet MS', Verdana, Geneva, Arial, Helvetica, sans-serif;
color: #000000;
background-color: #ffffff;
padding: 3px;
margin-bottom: 2px;
border-width: 1px;
border-style: solid;
border-top-color: rgb(192, 192, 192);
border-right-color: rgb(233, 233, 233);
border-bottom-color: rgb(233, 233, 233);
border-left-color: rgb(192, 192, 192);
-webkit-border-radius: 4px; -moz-border-radius: 4px; -khtml-border-radius: 4px; border-radius: 4px;
outline: 0;

}

select.textCtrl
{
	word-wrap: normal;
	-webkit-appearance: menulist;
}

select[multiple].textCtrl,
select[size].textCtrl
{
	-webkit-appearance: listbox;
}

select[size="0"].textCtrl,
select[size="1"].textCtrl
{
	-webkit-appearance: menulist;
}

textarea.textCtrl
{
	word-wrap: break-word;
}

	.textCtrl:focus,
	.textCtrl.Focus
	{
		background: rgb(255,255,240) url('styles/soft_responsive_green/xenforo/gradients/form-element-focus-25.png') repeat-x;
border-top-color: rgb(150,150,150);
border-bottom-color: rgb(230,230,230);

	}	

	textarea.textCtrl:focus
	{
		background-image: url('styles/soft_responsive_green/xenforo/gradients/form-element-focus-100.png');

	}

	input.textCtrl.disabled,
	textarea.textCtrl.disabled,
	.disabled .textCtrl
	{
		font-style: italic;
color: rgb(100,100,100);
background-color: rgb(245,245,245);

	}
	
	.textCtrl.prompt
	{
		font-style: italic;
color: rgb(160,160,160);

	}
	
	.textCtrl:-moz-placeholder
	{
		/* needs to be in its own rule due to weird selector */
		font-style: italic;
color: rgb(160,160,160);

	}
	
	.textCtrl::-moz-placeholder
	{
		/* needs to be in its own rule due to weird selector */
		font-style: italic;
color: rgb(160,160,160);

	}

	.textCtrl::-webkit-input-placeholder
	{
		/* needs to be in its own rule due to weird selector */
		font-style: italic;
color: rgb(160,160,160);

	}
	
	.textCtrl:-ms-input-placeholder
	{
		/* needs to be in its own rule due to weird selector */
		font-style: italic;
color: rgb(160,160,160);

	}
	
	.textCtrl.autoSize
	{
		width: auto !important;
	}

	.textCtrl.number,
	.textCtrl.number input
	{
		text-align: right;
		width: 150px;
	}
	
	.textCtrl.fillSpace
	{
		width: 100%;
		-webkit-box-sizing: border-box; -moz-box-sizing: border-box; -ms-box-sizing: border-box; box-sizing: border-box;
		_width: 95%;
	}

	.textCtrl.code,
	.textCtrl.code input
	{
		font-family: Consolas, "Courier New", Courier, monospace;
white-space: pre;
word-wrap: normal;
direction: ltr;

	}
	
	input.textCtrl[type="password"]
	{
		font-family: Verdana, Geneva, Arial, Helvetica, sans-serif;
	}

	input[type="email"],
	input[type="url"]
	{
		direction: ltr;
	}

	.textCtrl.titleCtrl,
	.textCtrl.titleCtrl input
	{
		font-size: 18pt;
	}

textarea.textCtrl.Elastic
{
	/* use for jQuery.elastic */
	max-height: 300px;
}

/* for use with wrapped inputs */
.textCtrlWrap
{
	display: inline-block;
}

.textCtrlWrap input.textCtrl
{
	padding: 0 !important;
	margin: 0 !important;
	border: none !important;
	background: transparent !important;
	-webkit-border-radius: 0 !important; -moz-border-radius: 0 !important; -khtml-border-radius: 0 !important; border-radius: 0 !important;
}

.textCtrlWrap.blockInput input.textCtrl
{
	border-top: 1px solid rgb(192, 192, 192) !important;
	margin-top: 4px !important;
}

/** *********************** **/
/** BUTTONS                 **/
/** *********************** **/

.button
{
	font-style: normal;
	
	font-size: 12px;
font-family: Calibri, 'Trebuchet MS', Verdana, Geneva, Arial, Helvetica, sans-serif;
color: rgb(0, 0, 0);
background: rgb(220,220,235) url('styles/soft_responsive_green/xenforo/gradients/form-button-white-25px.png') repeat-x top;
padding: 0px 6px;
border: 1px solid rgb(221, 221, 235);
border-top-color: rgb(255, 255, 255);
border-bottom-color: rgb(179, 179, 189);
-webkit-border-radius: 7px; -moz-border-radius: 7px; -khtml-border-radius: 7px; border-radius: 7px;
text-align: center;
-webkit-box-shadow: 0px 1px 4px 0px rgb(200,200,210); -moz-box-shadow: 0px 1px 4px 0px rgb(200,200,210); -khtml-box-shadow: 0px 1px 4px 0px rgb(200,200,210); box-shadow: 0px 1px 4px 0px rgb(200,200,210);
text-shadow: 0 0 0 transparent, 0px -1px 2px white;
outline: none;
line-height: 21px;
display: inline-block;
cursor: pointer;
-webkit-box-sizing: border-box; -moz-box-sizing: border-box; -ms-box-sizing: border-box; box-sizing: border-box;
height: 23px;

}

.button.smallButton
{
	font-size: 11px;
	padding: 0px 4px;
	line-height: 21px;
	height: 21px;
	-webkit-border-radius: 5px; -moz-border-radius: 5px; -khtml-border-radius: 5px; border-radius: 5px;
}

.button.primary
{
	background-color: rgb(176, 231, 192);

}

input.button.disabled,
a.button.disabled,
input.button.primary.disabled,
a.button.primary.disabled,
html .buttonProxy .button.disabled
{
	color: #999;
background-color: #EEE;
border-color: #CCC;
-webkit-box-shadow: 0 0 0 transparent; -moz-box-shadow: 0 0 0 transparent; -khtml-box-shadow: 0 0 0 transparent; box-shadow: 0 0 0 transparent;

}

	.button::-moz-focus-inner
	{
		border: none;
	}

	a.button
	{
		display: inline-block;
		color: rgb(0, 0, 0);
	}

	.button:hover,
	.button[href]:hover,
	.buttonProxy:hover .button
	{
		color: black;
text-decoration: none;
background-color: rgb(255,255,200);
border-color: rgb(255,255,200);
border-top-color: white;
border-bottom-color: rgb(190,190,170);

	}

	.button:focus
	{
		border-color: rgb(123, 231, 156);

	}

	.button:active,
	.button.ToggleButton.checked,
	.buttonProxy:active .button
	{
		color: black;
background-color: rgb(153, 153, 163);
border-color: rgb(200,200,215);
border-top-color: #b3b3bd;
border-bottom-color: white;
-webkit-box-shadow: 0px 0px 0px 0px transparent; -moz-box-shadow: 0px 0px 0px 0px transparent; -khtml-box-shadow: 0px 0px 0px 0px transparent; box-shadow: 0px 0px 0px 0px transparent;
outline: 0;

	}

	.button.ToggleButton
	{
		cursor: default;
		width: auto;
		color: rgb(179, 179, 189);
	}
	
	.button.ToggleButton.checked
	{
		background-color: rgb(255,150,50);
	}

	.button.inputSupplementary
	{
		width: 25px;
		position: absolute;
		top: 0px;
		right: 0px;
	}

	.button.inputSupplementary.add
	{
		color: green;
	}

	.button.inputSupplementary.delete
	{
		color: red;
	}

	.submitUnit .button
	{
		min-width: 100px;
		*min-width: 0;
	}

















/** Control Units **/

.xenForm .ctrlUnit
{
	position: relative;
	margin: 10px auto;
}

/* clearfix */ .xenForm .ctrlUnit { zoom: 1; } .xenForm .ctrlUnit:after { content: '.'; display: block; height: 0; clear: both; visibility: hidden; }

.xenForm .ctrlUnit.fullWidth
{
	overflow: visible;
}

/** Control Unit Labels **/

.xenForm .ctrlUnit > dt
{
	padding-top: 4px;
padding-right: 15px;
text-align: right;
vertical-align: top;

	-webkit-box-sizing: border-box; -moz-box-sizing: border-box; -ms-box-sizing: border-box; box-sizing: border-box;
	width: 32%;
	float: left;
}

/* special long-text label */
.xenForm .ctrlUnit > dt.explain
{
	font-size: 11px;
	text-align: justify;
}


.xenForm .ctrlUnit.fullWidth dt,
.xenForm .ctrlUnit.submitUnit.fullWidth dt
{
	float: none;
	width: auto;
	text-align: left;
	height: auto;
}

.xenForm .ctrlUnit.fullWidth dt
{
	margin-bottom: 2px;
}

	.xenForm .ctrlUnit > dt label
	{
		margin-left: 30px;
	}

	/** Hidden Labels **/

	.xenForm .ctrlUnit.surplusLabel dt label
	{
		display: none;
	}

	/** Section Links **/

	.ctrlUnit.sectionLink dt
	{
		text-align: left;
		font-size: 11px;
	}

		.ctrlUnit.sectionLink dt a
		{
			margin-left: 11px; /*TODO: sectionHeader padding + border*/
		}		

	/** Hints **/

	.ctrlUnit > dt dfn
	{
		font-style: italic;
font-size: 10px;
color: rgb(102, 102, 102);
margin-left: 30px;
display: block;

	}
	
	.ctrlUnit.fullWidth dt dfn
	{
		display: inline;
		margin: 0;
	}
	
		.ctrlUnit > dt dfn b,
		.ctrlUnit > dt dfn strong
		{
			color: rgb(64, 64, 64);
		}

	/** Inline Errors **/

	.ctrlUnit > dt .error
	{
		font-size: 10px;
color: red;
display: block;

	}
	
	.ctrlUnit > dt dfn,
	.ctrlUnit > dt .error,
	.ctrlUnit > dt a
	{
		font-weight: normal;
	}

.xenForm .ctrlUnit.submitUnit dt
{
	height: 19px;
	display: block;
}

	.ctrlUnit.submitUnit dt.InProgress
	{
		background: transparent url('styles/soft_responsive_green/xenforo/widgets/ajaxload.info_B4B4DC_facebook.gif') no-repeat center center;
	}

/** Control Holders **/

.xenForm .ctrlUnit > dd
{
	/*todo: kill property */
	
	float: left;
}

.xenForm .ctrlUnit.fullWidth > dd
{
	float: none;
	width: auto;
	padding-left: 30px;
}

/** Explanatory paragraph **/

.ctrlUnit > dd .explain
{
	font-size: 11px;
color: rgb(102, 102, 102);
margin-top: 2px;

	/*TODO:max-width: auto;*/
}
	
	.ctrlUnit > dd .explain b,
	.ctrlUnit > dd .explain strong
	{
		color: rgb(64, 64, 64);
	}

/** List items inside controls **/

.ctrlUnit > dd > * > li
{
	margin: 4px 0 8px;
	padding-left: 1px; /* fix a webkit display bug */
}

.ctrlUnit > dd > * > li:first-child > .textCtrl:first-child
{
	margin-top: -3px;
}

.ctrlUnit > dd .break
{
	margin-bottom: 0.75em;
	padding-bottom: 0.75em;
}

.ctrlUnit > dd .rule
{
	border-bottom: 1px solid rgb(217, 253, 227);
}

.ctrlUnit > dd .ddText
{
	margin-bottom: 2px;
}

/** Hints underneath checkbox / radio controls **/

.ctrlUnit > dd > * > li .hint
{
	font-size: 11px;
	color: rgb(102, 102, 102);
	margin-left: 16px;
	margin-top: 2px;
}

/** DISABLERS **/

.ctrlUnit > dd > * > li > ul,
.ctrlUnit .indented
{
	margin-left: 16px;
}

.ctrlUnit > dd > * > li > ul > li:first-child
{
	margin-top: 6px;
}

.ctrlUnit > dd .disablerList > li,
.ctrlUnit > dd .checkboxColumns > li,
.ctrlUnit > dd .choiceList > li
{
	margin-top: 6px;
}
	
/** Other stuff... **/

.ctrlUnit > dd .helpLink
{
	font-size: 10px;
}

.ctrlUnit.textValue dt
{
	padding-top: 0px;
}

.button.spinBoxButton
{
	font-family: 'Roboto',arial,sans-serif;
	font-size: 11pt;
}

.unitPairsJustified li
{
	overflow: hidden;
}

	.unitPairsJustified li .label
	{
		float: left;
	}
	
	.unitPairsJustified li .value
	{
		float: right;
	}

#calroot
{
	margin-top: -1px;
	width: 198px;
	padding: 2px;
	background-color: rgb(255, 255, 255);
	font-size: 11px;
	border: 1px solid rgb(119, 217, 148);
	-webkit-border-radius: 5px; -moz-border-radius: 5px; -khtml-border-radius: 5px; border-radius: 5px;
	-webkit-box-shadow: 0 0 15px #666; -moz-box-shadow: 0 0 15px #666; -khtml-box-shadow: 0 0 15px #666; box-shadow: 0 0 15px #666;
	z-index: 7500;
}

#calhead
{	
	padding: 2px 0;
	height: 22px;
} 

	#caltitle {
		font-size: 11pt;
		color: rgb(119, 217, 148);
		float: left;
		text-align: center;
		width: 155px;
		line-height: 20px;
	}
	
	#calnext, #calprev {
		display: block;
		width: 20px;
		height: 20px;
		font-size: 11pt;
		line-height: 20px;
		text-align: center;
		float: left;
		cursor: pointer;
	}

	#calnext {
		float: right;
	}

	#calprev.caldisabled, #calnext.caldisabled {
		visibility: hidden;	
	}

#caldays {
	height: 14px;
	border-bottom: 1px solid rgb(119, 217, 148);
}

	#caldays span {
		display: block;
		float: left;
		width: 28px;
		text-align: center;
		color: rgb(119, 217, 148);
	}

#calweeks {
	margin-top: 4px;
}

.calweek {
	clear: left;
	height: 22px;
}

	.calweek a {
		display: block;
		float: left;
		width: 27px;
		height: 20px;
		text-decoration: none;
		font-size: 11px;
		margin-left: 1px;
		text-align: center;
		line-height: 20px;
		-webkit-border-radius: 3px; -moz-border-radius: 3px; -khtml-border-radius: 3px; border-radius: 3px;
	} 
	
		.calweek a:hover, .calfocus {
			background-color: rgb(242, 251, 244);
		}

a.caloff {
	color: rgb(102, 102, 102);		
}

a.caloff:hover {
	background-color: rgb(242, 251, 244);		
}

a.caldisabled {
	background-color: #efefef !important;
	color: #ccc	!important;
	cursor: default;
}

#caltoday {
	font-weight: bold;
}

#calcurrent {
	background-color: rgb(119, 217, 148);
	color: rgb(242, 251, 244);
}
ul.autoCompleteList
{
	
	
	border: 1px solid rgb(123, 231, 156);
	padding: 2px;
	
	font-size: 11px;
	
	min-width: 180px;
	_width: 180px;
	
	z-index: 1000;
}

ul.autoCompleteList li
{
	padding: 3px 3px;
	height: 24px;
	line-height: 24px;
}

ul.autoCompleteList li:hover,
ul.autoCompleteList li.selected
{
	background-color: rgb(217, 253, 227);
	-webkit-border-radius: 3px; -moz-border-radius: 3px; -khtml-border-radius: 3px; border-radius: 3px;
}

ul.autoCompleteList img.autoCompleteAvatar
{
	float: left;
	margin-right: 3px;
	width: 24px;
	height: 24px;
}

ul.autoCompleteList li strong
{
	font-weight: bold;
}

/** status editor **/

.statusEditorCounter
{
	color: green;
}

.statusEditorCounter.warning
{
	color: orange;
	font-weight: bold;
}

.statusEditorCounter.error
{
	color: red;
	font-weight: bold;
}

.explain .statusHeader
{
	display: inline;
}

.explain .CurrentStatus
{
	color: rgb(20,20,20);
	font-style: italic;
	padding-left: 5px;
}

/* BB code-based editor styling */

.xenForm .ctrlUnit.fullWidth dd .bbCodeEditorContainer textarea
{
	margin-left: 0;
	min-height: 200px;
}

.bbCodeEditorContainer a
{
	font-size: 11px;
}

/*
 * Fix silly top padding. This may require additional tags in the padding-top selector.
 */

.xenForm .ctrlUnit > dd
{
	padding-top: 4px;
}

	.xenForm .ctrlUnit.fullWidth > dd
	{
		padding-top: 0;
	}

.xenForm .ctrlUnit > dd > input,
.xenForm .ctrlUnit > dd > select,
.xenForm .ctrlUnit > dd > textarea,
.xenForm .ctrlUnit > dd > ul
{
	margin-top: -4px;
}

	.xenForm .ctrlUnit.fullWidth > dd > input,
	.xenForm .ctrlUnit.submitUnit > dd > input,
	.xenForm .ctrlUnit.fullWidth > dd > select,
	.xenForm .ctrlUnit.submitUnit > dd > select,
	.xenForm .ctrlUnit.fullWidth > dd > textarea,
	.xenForm .ctrlUnit.submitUnit > dd > textarea,
	.xenForm .ctrlUnit.fullWidth > dd > ul,
	.xenForm .ctrlUnit.submitUnit > dd > ul
	{
		margin-top: 0;
	}
	
/*
 * Multi-column checkboxes
 */
 
.xenForm .checkboxColumns > dd > ul,
ul.checkboxColumns
{
	-webkit-column-count : 2; -moz-column-count : 2;column-count: 2;
	-webkit-column-gap : 8px; -moz-column-gap : 8px;column-gap: 8px;
}

	.xenForm .checkboxColumns > dd > ul li,
	ul.checkboxColumns li
	{
		-webkit-column-break-inside : avoid; -moz-column-break-inside : avoid;column-break-inside: avoid;
		break-inside: avoid-column;
		margin-bottom: 4px;
		display: inline-block;
		width: 100%;
	}
	
	.xenForm .checkboxColumns.blockLinksList > dd > ul li,
	ul.checkboxColumns.blockLinksList li
	{
		display: block;
	}

.xenForm .checkboxColumns.multiple > dd > ul
{
	-webkit-column-count : 1; -moz-column-count : 1;column-count: 1;
	-webkit-column-gap : 0; -moz-column-gap : 0;column-gap: 0;
}

.xenForm .checkboxColumns.multiple > dd
{
	-webkit-column-count : 2; -moz-column-count : 2;column-count: 2;
	-webkit-column-gap : 8px; -moz-column-gap : 8px;column-gap: 8px;
}

.xenForm .checkboxColumns.multiple > dd > ul
{
	margin-bottom: 18px;
}

#recaptcha_image
{
	-webkit-box-sizing: content-box; -moz-box-sizing: content-box; -ms-box-sizing: content-box; box-sizing: content-box;
}

#helper_birthday { display: inline-block; }
#helper_birthday > li
{
	display: inline;
}
html[dir=rtl] #helper_birthday input,
html[dir=rtl] #helper_birthday select
{
	direction: rtl;
}


@media (max-width:480px)
{
	.Responsive .xenForm .ctrlUnit > dt
	{
		float: none;
		width: auto;
		text-align: left;
		height: auto;
	}

		.Responsive .xenForm .ctrlUnit > dt label
		{
			margin-left: 0;
		}

	.Responsive .xenForm .ctrlUnit.submitUnit dt
	{
		height: auto;
	}

	.Responsive .xenForm .ctrlUnit > dd,
	.Responsive .xenForm .ctrlUnit.fullWidth dd
	{
		float: none;
		width: auto;
		text-align: left;
		height: auto;
		padding-left: 30px;
		overflow: hidden;
	}

	.Responsive .xenForm .checkboxColumns > dd > ul,
	.Responsive ul.checkboxColumns
	{
		-webkit-column-count : 1; -moz-column-count : 1;column-count: 1;
	}
	
	.Responsive #ctrl_upload
	{
		max-width: 200px;
	}
	
	.Responsive .xenForm .ctrlUnit > dd .textCtrl[size],
	.Responsive .xenForm .ctrlUnit > dd .textCtrl.autoSize
	{
		width: 100% !important;
	}
	
	.Responsive .xenForm .ctrlUnit > dd > input,
	.Responsive .xenForm .ctrlUnit > dd > select,
	.Responsive .xenForm .ctrlUnit > dd > textarea,
	.Responsive .xenForm .ctrlUnit > dd > ul
	{
		margin-top: -0;
	}
}

@media (max-width:610px)
{
	.Responsive .insideSidebar .xenForm .ctrlUnit > dt
	{
		float: none;
		width: auto;
		text-align: left;
		height: auto;
	}

		.Responsive .insideSidebar .xenForm .ctrlUnit > dt label
		{
			margin-left: 0;
		}

	.Responsive .insideSidebar .xenForm .ctrlUnit.submitUnit dt
	{
		height: auto;
	}

	.Responsive .insideSidebar .xenForm .ctrlUnit > dd,
	.Responsive .insideSidebar .xenForm .ctrlUnit.fullWidth dd
	{
		float: none;
		width: auto;
		text-align: left;
		height: auto;
		padding-left: 30px;
		overflow: hidden;
	}
	
	.Responsive .insideSidebar .xenForm .ctrlUnit > dd .textCtrl[size],
	.Responsive .insideSidebar .xenForm .ctrlUnit > dd .textCtrl.autoSize
	{
		width: 100% !important;
	}
	
	.Responsive .insideSidebar .xenForm .ctrlUnit > dd > input,
	.Responsive .insideSidebar .xenForm .ctrlUnit > dd > select,
	.Responsive .insideSidebar .xenForm .ctrlUnit > dd > textarea,
	.Responsive .insideSidebar .xenForm .ctrlUnit > dd > ul
	{
		margin-top: -0;
	}
}

@media (max-device-width:568px)
{
	.Responsive .textCtrl
	{
		font-size: 16px;
	}
}


/* --- public.css --- */

#header
{
	background-image: url('styles/soft_responsive_green/xenforo/layout/top.png');
background-repeat: repeat-x;
background-position: top;

	
}

/* clearfix */ #header .pageWidth .pageContent { zoom: 1; } #header .pageWidth .pageContent:after { content: '.'; display: block; height: 0; clear: both; visibility: hidden; }

#logoBlock
{
	
}

	.LoggedOut #logoBlock
	{
		
	}

	#logo
	{
		display: block;
		float: left;
		line-height: 100px;
		*line-height: 104px;
		height: 104px;
		vertical-align: middle;
	}

		/* IE6/7 vertical align fix */
		#logo span
		{
			*display: inline-block;
			*height: 100%;
		}

		#logo a:hover
		{
			text-decoration: none;
		}

		#logo img
		{
			vertical-align: middle;
		}
		
	#visitorInfo
	{
		float: right;
		min-width: 250px;
		_width: 250px;
		overflow: hidden; zoom: 1;
		background: rgb(176, 231, 192);
		padding: 5px;
		-webkit-border-radius: 5px; -moz-border-radius: 5px; -khtml-border-radius: 5px; border-radius: 5px;
		margin: 10px 0;
		border: 1px solid #0f4c22;
		color: #0f4c22;
	}

		#visitorInfo .avatar
		{
			float: left;
			display: block;
		}

			#visitorInfo .avatar .img
			{
				border-color: rgb(119, 217, 148);
			}

		#visitorInfo .username
		{
			font-size: 18px;
			text-shadow: 0 0 0 transparent, 1px 1px 10px white;
			color: #0f4c22;
			white-space: nowrap;
			word-wrap: normal;
		}

		#alerts
		{
			zoom: 1;
		}

		#alerts #alertMessages
		{
			padding-left: 5px;
		}

		#alerts li.alertItem
		{
			font-size: 11px;
		}

			#alerts .label
			{
				color: #0f4c22;
			}
			
/** 700px or lower - center logo */

@media only screen and (max-width: 700px), only screen and (max-device-width: 700px)
{
	#logoBlock .pageContent
	{
		overflow: hidden;
	}

	#logoBlock #logo
	{
		float: left;
		margin-left: 50%;
	}

	#logoBlock #logo a
	{
		display: block;
		float: left;
		margin-left: -50%;
	}

}


@media only screen and (max-width: 700px), only screen and (max-device-width: 700px)
{
	#header
	{
		
	}

	#logoBlock
	{
		
	}

		.LoggedOut #logoBlock
		{
			padding-top: 20px;

		}
		
	
}

#forumFooter
{
	background: transparent url('styles/soft_responsive_green/xenforo/layout/footer.png') repeat-x 0 0;
}

.footer .pageContent
{
	font-size: 11px;
color: rgb(176, 231, 192) !important;
padding: 10px 0 0;
overflow: hidden;
zoom: 1;

}

	.footer a,
	.footer a:visited
	{
		color: rgb(217, 253, 227) !important;
padding: 5px;
display: block;

	}

		.footerLegal a,
		.footerLegal a:visited
		{
			color: rgb(217, 253, 227) !important;
		}
	
		.footer a:hover,
		.footer a:active,
		.footerLegal a:hover,
		.footerLegal a:active
		{
			color: #fff !important;
text-decoration: underline;

		}

	.footer .choosers
	{
		float: left;
overflow: hidden;
zoom: 1;

	}
	
		.footer .choosers dt
		{
			display: none;
		}
		
		.footer .choosers dd
		{
			float: left;
			
		}
		
	.footerLinks
	{
		float: right;
overflow: hidden;
zoom: 1;

	}
	
		.footerLinks.left
		{
			float: left;
			padding-left: 5px;
		}
	
		.footerLinks li
		{
			float: left;
			
		}
		
			.footerLinks a.globalFeed,
			.footerLinks a.topLink,
			.footerLinks a.homeLink
			{
				width: 14px;
				height: 14px;
				display: block;
				text-indent: -9999px;
				white-space: nowrap;
				background: url('styles/soft_responsive_green/xenforo/xenforo-ui-sprite.png') no-repeat -186px -43px;
				padding: 0;
				margin: 5px;
			}

				.footerLinks a.topLink
				{
					background-position: -186px -28px;
				}

				.footerLinks a.homeLink
				{
					width: 15px;
					background-position: -170px -43px;
				}
				
		.footerLinks .contactLink,
		.footer .choosers dd
		{
			padding-left: 13px;
			position: relative;
		}
		
			.footerLinks .contactLink:before,
			.footer .choosers dd:before
			{
				content: '';
				display: block;
				position: absolute;
				left: 0;
				top: 5px;
				width: 14px;
				height: 14px;
				background: url('styles/soft_responsive_green/xenforo/xenforo-ui-sprite.png') no-repeat -186px -58px;
			}
			
				.footer .choosers dd:before
				{
					background-position: -171px -58px;
				}

.footerLegal .pageContent
{
	font-size: 11px;
	overflow: hidden; zoom: 1;
	padding: 5px 0 15px;
	text-align: left;
}

	.footerLegal .pageContent,
	.footerLegal dt,
	.footerLegal dd
	{
		color: rgb(176, 231, 192) !important;
	}
	
	#copyright
	{
		color: rgb(176, 231, 192);
		float: left;
		text-align: left;
	}
	
	#legal
	{
		float: right;
	}
	
		#legal li
		{
			float: left;
			
			margin-left: 10px;
		}
		
/* 700px and lower - small footer */
@media only screen and (max-width: 700px), only screen and (max-device-width: 700px)
{
	#legal,
	.footer .choosers,
	.footer .footerLinks
	{
		float: left;
		margin-left: -5px;
		position: relative;
		left: 50%;
		overflow: visible;
		clear: left;
		text-align: center;
	}
	
	#legal li,
	.footer .choosers dd,
	.footer .footerLinks li
	{
		margin-left: 0;
		position: relative;
		left: -50%;
	}
	
	.footerLegal .pageContent
	{
		text-align: center;
	}
	
	#copyright
	{
		float: none;
		text-align: center;
	}
}

.footer-links{width:100%}
.footer-links-content{width:100%;float:left}
.spacer{width:10%;height:10px;float:left}

.footer-links .pageContent:after{
content:' ';
display:block;
height:0;
clear:both;
visibility:hidden
}
.footer-links .menu{float:left;margin:5px;padding:10px;list-style:none}
.footer-links .pageContent {
   _border-bottom:  1px solid rgb(255,255,255); border-bottom:  1px solid rgba(255,255,255, 0.5); _border-bottom:  1px solid rgb(255,255,255);
   -webkit-box-shadow: 0px 5px 2px -4px rgba(255,255,255,0.15); -moz-box-shadow: 0px 5px 2px -4px rgba(255,255,255,0.15); -khtml-box-shadow: 0px 5px 2px -4px rgba(255,255,255,0.15); box-shadow: 0px 5px 2px -4px rgba(255,255,255,0.15);
   -moz-box-shadow:  0px 5px 2px -4px rgba(255,255,255,0.15);
   -webkit-box-shadow:  0px 5px 2px -4px rgba(255,255,255,0.15);
} 
.footer-links .pageContent .menu .menu_title h3{
	background: transparent url("styles/soft_responsive_green/xenforo/android/green_arrow_2.png") no-repeat;
	padding-left: 8px;
background-position: 0px 3px;
}
.footer-links .pageContent .menu .menu_title h3,
.footer-links .pageContent .menu .menu_title h3 a
{
	_font-size:11px;
	color:#231e22 !important;
text-decoration: none;
font-weight: bold;
}

.footer-links .menu a{_font-family: 'Open Sans Condensed',sans-serif;line-height:15px; font-size: 13px;color:#ffffff !important;}


/* 1000px and lower - small footer */
@media only screen and (max-width: 1000px), only screen and (max-device-width: 1000px)
{
.footer-links-content{width:80%;}
.spacer{width:10%;}
}

/* 860px and lower - small footer */
@media only screen and (max-width: 860px), only screen and (max-device-width: 860px)
{
.footer-links-content{width:90%;}
.spacer{width:5%;}
}

/* 765px and lower - small footer */
@media only screen and (max-width: 765px), only screen and (max-device-width: 765px)
{
.footer-links-content{width:98%;}
.spacer{width:1%;}
}

/* 700px and lower - small footer */
@media only screen and (max-width: 700px), only screen and (max-device-width: 700px)
{
.footer-links{display:none;}
}

.breadBoxTop,
.breadBoxBottom
{
	padding: 0;
margin: 10px 0;
overflow: hidden;
zoom: 1;
clear: both;

}

.breadBoxTop
{
}

.breadBoxTop .topCtrl
{
	margin-left: 15px;
float: right;
line-height: 26px;

}

	.breadBoxTop .callToAction,
	.breadBoxBottom .callToAction
	{
		display: block;
	}

.breadcrumb
{
	font-size: 15px;
padding: 0 6px 0 9px;
margin: 0;
border: 1px solid #e0e0e0;
-webkit-border-radius: 6px; -moz-border-radius: 6px; -khtml-border-radius: 6px; border-radius: 6px;
position: relative;
zoom: 1;
-webkit-box-shadow: 0 0 0 1px #fdfdfd inset; -moz-box-shadow: 0 0 0 1px #fdfdfd inset; -khtml-box-shadow: 0 0 0 1px #fdfdfd inset; box-shadow: 0 0 0 1px #fdfdfd inset;
height: 24px;

}

.breadcrumb .crumbs
{
	display: block;
	white-space: nowrap;
	line-height: 24px;
	margin-right: 20px;
}

.breadcrumb .boardTitle
{
	display: none;

}

.breadcrumb .crust
{
	
}

.breadcrumb .crust a.crumb
{
	text-decoration: none;
outline: 0 none;
-moz-outline-style: 0 none;

	-xenforo-nomatch-background: transparent none !important;
}

	.breadcrumb .crust:first-child a.crumb
	{
		
	}
	
	.breadcrumb .crust:last-child a.crumb
	{
		font-weight: bold;

	}

.breadcrumb .crust .arrow
{
	color: rgb(102, 102, 102);
padding: 0 2px;
display: inline-block;

}

	.breadcrumb .crust .arrow:after
	{
		content: '»';
		display: inline-block;
		font-size: 11px;
	}
	
	.breadcrumb .crust:last-child .arrow
	{
		display: none;
	}
	
	.breadcrumb .crust.last-child .arrow
	{
		display: none;
	}

.breadcrumb .crust .arrow span
{
	display: none;

}

.breadcrumb .crust:hover a.crumb
{
	text-decoration: underline;

}

.breadcrumb .jumpMenuTrigger
{
	background: transparent url('styles/soft_responsive_green/xenforo/xenforo-ui-sprite.png') no-repeat 0 0;
margin: 4px 0 0;
display: block;
float: right;
white-space: nowrap;
text-indent: 9999px;
overflow: hidden;
width: 13px;
height: 16px;

}


/* 700px and lower - collapse long breadcrumbs */
@media only screen and (max-width: 700px), only screen and (max-device-width: 700px)
{
	.breadcrumb
	{
		white-space: wrap;
height: auto;

	}
	
	.breadcrumb .crumbs
	{
		white-space: normal;
	}
}


#navigationContainer
{
	position: relative;
	margin: 0 auto;

}

	.LoggedOut #navigationContainer
	{
		
	}
	

	#navigation:before
	{
		content: '';
		display: block;
		position: absolute;
		top: 27px;
		left: 0;
		right: 0;
		bottom: 0;
		
	}


#navigation .pageContent
{
	_height: 55px;
height: auto;
	position: relative;
}

	.navTabs
	{
		padding: 0 10px 5px;

		
		height: 27px;
	}
	
		.navTabs .mobileTabs
		{
			display: none;
		}
	
		.navTabs .publicTabs
		{
			
			float: left;
			
		}
		
		.navTabs .visitorTabs
		{
			
			float: right;
			
		}
	
/* ---------------------------------------- */
/* Tabs */

.navTabs .navTab
{
	padding: 0;
margin: 0 0 0 1px;

	float: left;
	white-space: nowrap;
	word-wrap: normal;
	max-height: 27px;
}

	.navTabs .navTab.PopupClosed:hover
	{
	}
	
	.navTabs .navTab.PopupOpen,
	.navTabs .navTab.PopupOpen.selected
	{
		text-shadow: none;
	}
	
	.navTabs .navTab.selected
	{
	}
	
/* ---------------------------------------- */
/* Shadow */



/* ---------------------------------------- */
/* Links Inside Tabs */

.navTabs .navLink
{
	font-size: 15px;
color: #000000;
padding: 0 8px;
margin: 0;
border-bottom: 4px solid rgb(0, 0, 0);
display: block;
float: left;
vertical-align: text-bottom;
text-align: center;
_outline: 0 none;
white-space: nowrap;

	height: 27px;
	line-height: 27px;
}

	.navTabs .navLink.hasSplitCtrl
	{
		padding-right: 26px;
	}

	.navTabs .navLink:hover
	{
		color: rgb(0, 155, 0);
text-decoration: none;
background-color: #fdfdfd;

	}
	
	.navTabs .navLink strong
	{
		display: inline;
		float: left;
		height: 27px;
	}
	
	/* ---------------------------------------- */
	/* unselected tab, popup closed */
	
	.navTabs .navTab.PopupClosed .navLink
	{
	}

		.navTabs .navTab.PopupClosed:hover .navLink
		{
			color: rgb(0, 155, 0);
		}

	/* ---------------------------------------- */
	/* selected tab */

	.navTabs .navTab.selected .navLink
	{
		font-weight: bold;
color: rgb(0, 155, 0);
background-position: 0 -40px;
border-bottom-width: 4px;
border-bottom-color: rgb(0, 155, 0);
border-bottom-
border-bottom-
border-bottom-
border-bottom-
border-bottom-
border-bottom-
border-bottom-
border-bottom-
border-bottom-
border-bottom-
border-bottom-
border-bottom-
border-bottom-
border-bottom-
border-bottom-
border-bottom-
border-bottom-
border-bottom-
border-bottom-
border-bottom-
border-bottom-
border-bottom-
border-bottom-
border-bottom-
border-bottom-
border-bottom-
border-bottom-
border-bottom-
border-bottom-
border-bottom-
border-bottom-
border-bottom-
border-bottom-
border-bottom-
border-bottom-
border-bottom-
border-bottom-
border-bottom-
border-bottom-
border-bottom-
border-bottom-
border-bottom-
border-bottom-
border-bottom-
border-bottom-
border-bottom-
border-bottom-
position: relative;

	}
	
		
		.navTabs .navTab.selected .navLink:after
		{
			
		}
		

	/* ---------------------------------------- */
	/* unselected tab, popup open */
	
	.navTabs .navTab.PopupOpen .navLink,
	.navTabs .navTab.PopupOpen.selected .navLink
	{
		color: #ffffff;
background-color: rgb(0, 155, 0);
background-position: 0 -80px;
border-top-color: rgb(0,;
border-right-color: 155,;
border-bottom-color: 0);
border-left-color: 155,;
-webkit-box-shadow: 0 0 0 1px rgba(255, 255, 255, 0.15) inset; -moz-box-shadow: 0 0 0 1px rgba(255, 255, 255, 0.15) inset; -khtml-box-shadow: 0 0 0 1px rgba(255, 255, 255, 0.15) inset; box-shadow: 0 0 0 1px rgba(255, 255, 255, 0.15) inset;

	}

		.navTabs .navTab.PopupOpen.selected .navLink:after
		{
		}

/* ---------------------------------------- */
/* Arrow */

.navTabs .SplitCtrl,
.navTabs .navTab .arrowWidget
{
	display: block;
	float: left;
	width: 22px;
	margin-left: -8px;
	height: 27px;
	position: relative;
}

	.navTabs .SplitCtrl
	{
		margin-left: -23px;
		margin-top: 1px;
	}

.navTabs .navTab .arrowWidget
{
	background: none !important;
	margin: 0 0 0 4px;
	width: 10px;
}

	.navTabs .SplitCtrl:after,
	.navTabs .navTab .arrowWidget:after
	{
		content: '';
		display: block;
		position: absolute;
		height: 14px;
		background: transparent url('styles/soft_responsive_green/xenforo/xenforo-ui-sprite.png') no-repeat -64px 0;
left: 0;
top: 6px;
width: 14px;

	}

	.navTabs .navTab.PopupClosed.selected .SplitCtrl:after,
	.navTabs .navTab.PopupClosed.selected .arrowWidget:after
	{
		background-position: -32px 0;

	}
	
	.navTabs .navTab.PopupClosed:hover .SplitCtrl:after,
	.navTabs .navTab.PopupClosed:hover .arrowWidget:after,
	.navTabs .navTab.PopupClosed .SplitCtrl:hover:after,
	.navTabs .navTab.PopupClosed .arrowWidget:hover:after
	{
		background-position: -16px 0;

	}
	
	.navTabs .navTab.PopupOpen .SplitCtrl:after,
	.navTabs .navTab.PopupOpen .arrowWidget:after,
	.navTabs .navTab.PopupOpen.selected .SplitCtrl:after,
	.navTabs .navTab.PopupOpen.selected .arrowWidget:after
	{
		background-position: -128px 0;

	}
	
	.navTabs .navTab.selected .SplitCtrl,
	.navTabs .navTab.selected .arrowWidget
	{
		display: none;
	}

		.navTabs .navTab.selected.PopupControl .SplitCtrl,
		.navTabs .navTab.selected.PopupControl .arrowWidget
		{
			display: block;
		}

/* ---------------------------------------- */
/* Second Row */

.navTabs .navTab.selected .tabLinks
{
	padding: 0 15px;
margin: 4px -14px 0;
border-style: none;
position: absolute;
left: 0;
right: 0;
top: 27px;
z-index: 1;

	zoom: 1;	
	*clear:expression(style.width = document.getElementById('navigation').offsetWidth + 'px', style.clear = "none", 0);
}

	.navTabs .navTab.selected .tabLinks:hover
	{
		color: #33a154;

	}

	.navTabs .navTab.selected .blockLinksList
	{
		background: transparent none;
padding: 0;
margin: 0;
border-width: 0;
-webkit-border-radius: 0; -moz-border-radius: 0; -khtml-border-radius: 0; border-radius: 0;
box-shadow: none !important;

	}

	.navTabs .navTab.selected .tabLinks .menuHeader
	{
		display: none;
	}
	
	.navTabs .navTab.selected .tabLinks li
	{
		padding: 2px 0;
float: left;

	}

		.navTabs .navTab.selected .tabLinks a
		{
			line-height: 20px;
			font-size: 13px;
color: rgb(0, 155, 0);
padding: 1px 8px;
display: block;

		}
		
			.navTabs .navTab.selected .tabLinks a:hover,
			.navTabs .navTab.selected .tabLinks a:focus
			{
				font-size: 13px;
color: #33a154;
text-decoration: none;
background: rgb(0, 0, 0) url('styles/soft_responsive_green/xenforo/android/main_nav.png') repeat-x 0 0; background: rgba(0,0,0, 0.6) url('styles/soft_responsive_green/xenforo/android/main_nav.png') repeat-x 0 0;;
padding: 0 15px;
border: 1px solid rgb(64, 64, 64);
-webkit-border-radius: 5px; -moz-border-radius: 5px; -khtml-border-radius: 5px; border-radius: 5px;
_outline: 0;

				
			}
	
/* ---------------------------------------- */
/* Alert Balloons */
	
.navTabs .navLink .itemCount
{
	font-weight: bold;
font-size: 9px;
color: white;
background-color: rgb(9, 202, 99);
padding: 0 2px;
-webkit-border-radius: 4px; -moz-border-radius: 4px; -khtml-border-radius: 4px; border-radius: 4px;
position: absolute;
right: 2px;
top: -12px;
line-height: 16px;
min-width: 12px;
_width: 12px;
text-align: center;
text-shadow: none;
white-space: nowrap;
word-wrap: normal;
-webkit-box-shadow: 2px 2px 5px rgba(0,0,0, 0.25); -moz-box-shadow: 2px 2px 5px rgba(0,0,0, 0.25); -khtml-box-shadow: 2px 2px 5px rgba(0,0,0, 0.25); box-shadow: 2px 2px 5px rgba(0,0,0, 0.25);
z-index: 2;
height: 16px;

}

	.navTabs .navLink .itemCount .arrow
	{
		border: 3px solid transparent;
border-top-color: rgb(9, 202, 99);
border-bottom: 1px none black;
position: absolute;
bottom: -3px;
right: 4px;
line-height: 0px;
text-shadow: none;
_display: none;
/* Hide from IE6 */
width: 0px;
height: 0px;

	}
	
.navTabs .navLink .itemCount.Zero
{
	display: none;
}

/* ---------------------------------------- */
/* Popup Menu */

.Menu.tabMenu
{
}
	
/* ---------------------------------------- */
/* Account Popup Menu */

.navTabs .navTab.account .navLink
{
	font-weight: bold;
}

#AccountMenu
{
	width: 274px;
}

	.OldIE #AccountMenu
	{
		width: 276px;
	}

#AccountMenu .menuHeader
{
	position: relative;
}

	#AccountMenu .menuHeader .avatar
	{
		float: left;
		margin-right: 10px;
	}

	#AccountMenu .menuHeader .visibilityForm
	{
		margin-top: 10px;
		color: rgb(0, 155, 0);
	}
	
	#AccountMenu .menuHeader .links .fl
	{
		position: absolute;
		bottom: 10px;
		left: 116px;
	}

	#AccountMenu .menuHeader .links .fr
	{
		position: absolute;
		bottom: 10px;
		right: 10px;
	}
	
#AccountMenu .menuColumns
{
	overflow: hidden;
	zoom: 1;
}

	#AccountMenu .menuColumns ul
	{
		float: left;
		padding: 0;
		max-height: none;
		overflow: hidden;
	}
	
		#AccountMenu .menuColumns a,
		#AccountMenu .menuColumns label
		{
			width: 115px;
		}

#AccountMenu .statusPoster textarea
{
	width: 245px;
	margin: 0;
	resize: vertical;
	overflow: hidden;
}

#AccountMenu .statusPoster .submitUnit
{
	margin-top: 5px;
	text-align: right;
}

	#AccountMenu .statusPoster .submitUnit .statusEditorCounter
	{
		float: left;
		line-height: 23px;
		height: 23px;
	}
	
/* ---------------------------------------- */
/* Inbox, Alerts Popups */

.navPopup
{
	width: 260px;
}

.navPopup a:hover,
.navPopup .listItemText a:hover
{
	background: none;
	text-decoration: underline;
}

	.navPopup .menuHeader .InProgress
	{
		float: right;
		display: block;
		width: 20px;
		height: 20px;
	}

.navPopup .listPlaceholder
{
	max-height: 350px;
	overflow: auto;
}

	.navPopup .listPlaceholder ol.secondaryContent
	{
		padding: 0 10px;
	}

		.navPopup .listPlaceholder ol.secondaryContent.Unread .title a
		{
			color: rgb(57,194,52);
		}

.navPopup .listItem
{
	overflow: hidden; zoom: 1;
	border-bottom: 1px solid rgb(232, 232, 232);
	border-top: 1px solid rgb(255, 255, 255);
	padding: 5px 0;
}

	.navPopup .listItem:first-child
	{
		border-top: none;
	}

	.navPopup .listItem:last-child
	{
		border-bottom: none;
	}

.navPopup .PopupItemLinkActive:hover
{
	margin: 0 -8px;
	padding: 5px 8px;
	background-color: rgb(255, 255, 255);
	cursor: pointer;
}

.navPopup .avatar
{
	float: left;
}

	.navPopup .avatar img
	{
		width: 32px;
		height: 32px;
	}

.navPopup .listItemText
{
	margin-left: 37px;
}

	.navPopup .listItemText .muted
	{
		font-size: 9px;
	}

	.navPopup .unread .listItemText .title,
	.navPopup .listItemText .subject
	{
		font-weight: bold;
	}

.navPopup .sectionFooter .floatLink
{
	float: right;
}

/** 700px or lower - change navigation */
@media only screen and (max-width: 700px), only screen and (max-device-width: 700px)
{
	#navigationContainer
	{
		
	}
	
	#navigation:before
	{
		display: none;
	}

	#navigation .mobileTabs
	{
		padding: 5px 5px 0;
display: block !important;
text-align: center;

	}
	
	#navigation .pageContent
	{
		height: auto;
	}
	
	.navTabs
	{
		background: transparent none;
padding: 0 1px 1px;
margin: 0 10px 10px;
border: 1px solid rgb(228, 228, 228);
border-top-width: 0;
-webkit-border-radius: 0; -moz-border-radius: 0; -khtml-border-radius: 0; border-radius: 0;
position: relative;
height: auto;

		display: none;
		position: relative;
	}

		.noJS #navigation:hover .navTabs,
		#navigation:hover .navTabs.navTabsNoJS,
		#navigation.navTabsVisible .navTabs
		{
			display: block;
		}
		
		#navigation .navTabsSecondList .navTabsUL
		{
			display: none !important;
		}

		#navigation .navTabsSecondList .mobileMainTabs
		{
			display: block !important;
		}
	
		.navTabs:after
		{
			display: none;
		}

		
		.navTabs + .helper
		{
			_content: '';
_display: block;
_position: absolute;
_bottom: -10px;
_left: 3px;
_right: 3px;
_background-size: 100% 55px;
_pointer-events: none;
height: 10px;

			bottom: 0;
			left: 10px;
			right: 10px;
			display: none;
		}
			.noJS #navigation:hover .navTabs + .helper,
			#navigation:hover .navTabs.navTabsNoJS + .helper,
			#navigation.navTabsVisible .navTabs + .helper
			{
				display: block;
			}
		
	
	.navTabs .publicTabs,
	.navTabs .visitorTabs,
	.navTabs > ul
	{
		float: none;
		display: block;
		margin: 0;
	}
	
	.mobileExtraTabs
	{
		display: block !important;
		border-top: 5px solid rgb(0, 155, 0);

	}
	
		.mobileExtraTabs h3
		{
			display: none;

		}
		
		.mobileExtraTabs .blockLinksList
		{
			background: transparent none;
padding: 0;
margin: 0;
border-width: 0;
-webkit-border-radius: 0; -moz-border-radius: 0; -khtml-border-radius: 0; border-radius: 0;
box-shadow: none !important;

		}
	

	.navTabs .navTab
	{
		background: transparent none;
padding: 0;
margin: 0;
border-width: 0;
-webkit-border-radius: 0; -moz-border-radius: 0; -khtml-border-radius: 0; border-radius: 0;
box-shadow: none !important;

		float: none;
display: block;
max-height: none;

	}

	.navTabs .navTab .navLink,
	.mobileExtraTabs .blockLinksList a
	{
		font-size: 14px;
color: rgb(0, 155, 0);
border: 1px solid rgb(228, 228, 228);
border-top-color: rgb(255, 255, 255);
border-bottom-color: rgb(232, 232, 232);
-webkit-border-radius: 0; -moz-border-radius: 0; -khtml-border-radius: 0; border-radius: 0;
float: none !important;
background: rgb(255, 255, 255) none !important;
margin: 0;
padding: 6px 0 !important;
line-height: 1.28em;
height: auto;
display: block;
text-align: center;
box-shadow: none !important;

	}
	
		.mobileExtraTabs .blockLinksList a
		{
			padding: 5px 0 !important;

		}
	
		.navTabs .navTab.PopupClosed:hover .navLink,
		.mobileExtraTabs .blockLinksList a:hover
		{
			color: #ffffff;
background-color: rgb(57,194,52) !important;
border-color: rgb(57,194,52);
border-top-color: rgb(146,222,143);

		}
	
		.navTabs .navTab.selected .navLink
		{
			color: #ffffff;
background-color: rgb(0, 155, 0) !important;
border-color: rgb(0, 155, 0);
border-top-color: rgb(123, 231, 156);

		}
	
		.navTabs .navTab.PopupOpen .navLink, 
		.navTabs .navTab.PopupOpen.selected .navLink
		{
			color: #ffffff;
background-color: rgb(0, 155, 0) !important;
border-color: rgb(0, 155, 0);
border-top-color: rgb(123, 231, 156);

		}

		.navTabs .navTab .navLink strong
		{
			float: none;
			height: auto;
		}
		
		.navTabs .navTab .navLink:after
		{
			display: none !important;
		}
		
		.navTabs .navTab .arrowWidget
		{
			display: none !important;
		}
		
		.navTabs .navLink .itemCount
		{
			font-size: 11px;
top: 6px;
right: 7px;
line-height: 20px;
-webkit-box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.25); -moz-box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.25); -khtml-box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.25); box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.25);

		}
		
			.navTabs .navLink .itemCount .Total
			{
				min-width: 15px;
display: inline-block;

			}
		
			.navTabs .navLink .itemCount .arrow
			{
				display: none;

			}
	
	.navTabs .navTab.selected .tabLinks,
	.navTabs .navTab .navLink:before,
	.navTabs .navTab .navLink:after,
	.navTabs .navTab .tabLinks:before,
	.navTabs .navTab .tabLinks:after
	{
		display: none !important;
	}
	
	#navigation .mobileExtraAlerts
	{
		display: block !important;
		margin: 5px;

	}
	
		#navigation .mobileExtraAlerts li a
		{
			color: #ffffff;
background: rgb(57,194,52) url('styles/soft_responsive_green/xenforo/gradients/gradients-sprite.png') repeat-x 0 -80px;
padding: 5px;
margin: 0;
display: block;
text-align: center;

		}

			#navigation .mobileExtraAlerts li a:hover,
			#navigation .mobileExtraAlerts li a:active
			{
				
			}
		
			#navigation .mobileExtraAlerts li:first-child a
			{
				-webkit-border-top-left-radius: 5px; -moz-border-radius-topleft: 5px; -khtml-border-top-left-radius: 5px; border-top-left-radius: 5px;
-webkit-border-top-right-radius: 5px; -moz-border-radius-topright: 5px; -khtml-border-top-right-radius: 5px; border-top-right-radius: 5px;

			}

			#navigation .mobileExtraAlerts li:last-child a
			{
				-webkit-border-bottom-right-radius: 5px; -moz-border-radius-bottomright: 5px; -khtml-border-bottom-right-radius: 5px; border-bottom-right-radius: 5px;
-webkit-border-bottom-left-radius: 5px; -moz-border-radius-bottomleft: 5px; -khtml-border-bottom-left-radius: 5px; border-bottom-left-radius: 5px;

			}
}
#floatright {
position: fixed;
top: 0;
right: 50%;
margin-right: 520px;
bottom: 0;
width: 100%;
text-align: right;
}
#floatleft .link-full, #floatright .link-full {
width: 100%;
display: block;
position: absolute;
left: 0;
top: 0;
right: 0;
bottom: 0;
cursor: default;
}

#searchBar
{
	position: relative;
	zoom: 1;
	z-index: 52; /* higher than breadcrumb arrows */
}

	#QuickSearch
	{
		display: block;
		position: absolute;
		right: 45px;
		top: 0px;
		margin: 0;
		padding-top: 5px;
		z-index: 7500;
	}
	
		#QuickSearch .formPopup
		{
			background: transparent none;
		}
	
		.headerSearchBar #QuickSearch
		{
			right: 5px;
			top: 50.5px;
		}
		
		.LoggedIn .headerSearchBar #QuickSearch
		{
			right: 10px;
			top: 37px;
		}
			
		#QuickSearch .secondaryControls
		{
			display: none;
		}
	
		#QuickSearch.active
		{
			background-color: rgb(255, 255, 255);
padding-bottom: 5px;
-webkit-border-radius: 5px; -moz-border-radius: 5px; -khtml-border-radius: 5px; border-radius: 5px;
-webkit-box-shadow: 0 0 3px 1px rgba(255, 255, 255, 0.7) inset, 5px 5px 25px rgba(0,0,0, 0.5); -moz-box-shadow: 0 0 3px 1px rgba(255, 255, 255, 0.7) inset, 5px 5px 25px rgba(0,0,0, 0.5); -khtml-box-shadow: 0 0 3px 1px rgba(255, 255, 255, 0.7) inset, 5px 5px 25px rgba(0,0,0, 0.5); box-shadow: 0 0 3px 1px rgba(255, 255, 255, 0.7) inset, 5px 5px 25px rgba(0,0,0, 0.5);

		}
		
			.OldIE #QuickSearch.active
			{
				border: 1px solid rgb(0, 155, 0);

			}
		
	#QuickSearch .submitUnit .button
	{
		min-width: 0;
	}
		
	#QuickSearch input.button.primary
	{
		float: left;
		width: 110px;
	}
	
	#QuickSearch #commonSearches
	{
		float: right;
	}
	
		#QuickSearch #commonSearches .button
		{
			width: 24px;
			padding: 0;
		}
		
			#QuickSearch #commonSearches .arrowWidget
			{
				margin-top: -4px;
			}
	
	#QuickSearch .moreOptions
	{
		display: block;
		margin: 0 24px 0 110px;
		width: auto;
	}
	
	/*#QuickSearch .commonSearches li
	{
		width: 50%;
		float: left;
	}
	
		#QuickSearch .commonSearches li a
		{
			display: block;
			font-size: 11px;
			padding: 2px 5px;
			background: rgb(242, 251, 244);
			border: 1px solid rgb(217, 253, 227);
			-webkit-border-radius: 3px; -moz-border-radius: 3px; -khtml-border-radius: 3px; border-radius: 3px;
			margin: 0 1px 1px 0;
		}
		
			#QuickSearch .commonSearches li a:hover,
			#QuickSearch .commonSearches li a:focus
			{
				background: transparent;
				text-decoration: none;
			}
			
			#QuickSearch .commonSearches li a:active
			{
				background: rgb(217, 253, 227);
			}*/

#QuickSearchQuery
{
	_background-color: #fafafa;
background: url("http://www.google.com/cse/intl/en/images/google_custom_search_watermark.gif") no-repeat;
background-position: left;

}
#QuickSearchQuery:focus{background: none;}
.active #QuickSearchQuery
{
	background-color: #fff;
}

/** 700px or lower - hide search bar */
@media only screen and (max-width: 700px), only screen and (max-device-width: 700px)
{
	#searchBar
	{
		display: none !important;
	}
}


/** move the header to the top again **/

#headerMover
{
	position: relative;
	zoom: 1;
	/*padding-top: 160px;*/ /* +2 borders */
}

	#headerMover #headerProxy
	{
		height: 0;
		padding-top: 160px;*/ /* +2 borders */
	}

	#headerMover #header
	{
		width: 100%;
		position: absolute;
		top: 0px;
		left: 0px;
	}

		#headerMover #header.staticHeader
		{
			position: relative;
		}
		


/** Generic page containers **/

.pageWidth
{
	margin: 0 15px;
max-width: 1000px;
margin: 0 auto;

	min-width: 320px;
	_margin: 0 auto;
	width: auto; 
	
}



#content .pageWidth
{
	padding-top: 10px;
}

#content .pageContent
{
	padding: 30px 0 10px;

}

/* clearfix */ #content .pageContent { zoom: 1; } #content .pageContent:after { content: '.'; display: block; height: 0; clear: both; visibility: hidden; }

/* sidebar structural elements */

.mainContainer
{
	 float: left;
	 margin-right: -310px;
	 margin-bottom: 10px;
	 width: 100%;
}

	.mainContent
	{
		margin-right: 310px;
	}
	
.sidebar
{
	font-size: 15px;
float: right;
width: 300px;

}



/* visitor panel */

.sidebar .visitorPanel
{
	zoom: 1;
}

	.sidebar .visitorPanel h2 .muted
	{
		display: none;
	}

	.sidebar .visitorPanel .avatar
	{
		margin-right: 5px;
float: left;

		
		width: auto;
		height: auto;
	}
	
		.sidebar .visitorPanel .avatar img
		{
			width: ;
			height: ;
			display: block;
		}
		
	.sidebar .visitorPanel .visitorText:after
	{
		content: '';
		display: block;
		clear: both;
	}

	.sidebar .visitorPanel .username
	{
		font-weight: bold;
font-size: 11pt;

	}
	
	.sidebar .visitorPanel .stats
	{
		margin-top: 2px;

	}
	
	.sidebar .visitorPanel .stats .pairsJustified
	{
		line-height: normal;
	}













	
/* generic sidebar blocks */
		
.sidebar .section .primaryContent   h3,
.sidebar .section .secondaryContent h3,
.profilePage .mast .section.infoBlock h3
{
	font-size: 12pt;
color: rgb(0, 155, 0);
padding-bottom: 5px;
margin-bottom: 5px;
border-bottom: 1px solid rgb(255, 255, 255);
position: relative;

}
	.sidebar .section .primaryContent   h3:after,
	.sidebar .section .secondaryContent h3:after,
	.profilePage .mast .section.infoBlock h3:after
	{
		border-bottom: 1px solid rgb(232, 232, 232);
content: '';
display: block;
position: absolute;
bottom: 0;
left: 0;
right: 0;
height: 0;

	}


.sidebar .section .primaryContent   h3 a,
.sidebar .section .secondaryContent h3 a
{
	font-size: 12pt;
color: rgb(0, 155, 0);
}

	.sidebar .section .primaryContent   h3 a:hover,
	.sidebar .section .secondaryContent h3 a:hover
	{
		color: rgb(57,194,52);
	}

.sidebar .section .secondaryContent .footnote,
.sidebar .section .secondaryContent .minorHeading
{
	color: rgb(0, 155, 0);
margin-top: 5px;

}

	.sidebar .section .secondaryContent .minorHeading a
	{
		color: rgb(0, 155, 0);
	}


/* login bar */

.sidebar .section.loginButton .secondaryContent
{
	background: transparent none;
padding: 0;
margin: 0;
border-width: 0;
-webkit-border-radius: 0; -moz-border-radius: 0; -khtml-border-radius: 0; border-radius: 0;
box-shadow: none !important;

}




/* list of users with 32px avatars, username and user title */

.sidebar .avatarList li
{
	margin: 10px 0;
overflow: hidden;
zoom: 1;

}

	.sidebar .avatarList .avatar
	{
		margin-right: 15px;
float: left;
width: 70px;
height: 70px;

		
		width: auto;
		height: auto;
	}
		
	.sidebar .avatarList .avatar img
	{
		width: 70px;
		height: 70px;
	}
	
	.sidebar .avatarList .username
	{
		font-size: 11pt;
margin-top: 2px;
display: block;

	}
	
	.sidebar .avatarList .userTitle
	{
		font-size: 11px;
color: rgb(102, 102, 102);
margin-top: 5px;

	}









/* list of users */

.sidebar .userList
{
}

	.sidebar .userList .username
	{
		font-size: 11px;

	}

	.sidebar .userList .username.invisible
	{
		color: rgb(119, 217, 148);

	}
	
	.sidebar .userList .username.followed
	{
		
	}

	.sidebar .userList .moreLink
	{
		display: block;
	}
	
	
	
	
/* people you follow online now */

.followedOnline
{
	margin-top: 3px;
margin-bottom: -5px;
overflow: hidden;
zoom: 1;

}

.followedOnline li
{
	margin-right: 5px;
margin-bottom: 5px;
float: left;

}

	.followedOnline .avatar
	{
		width: 32px;
height: 32px;

		
		width: auto;
		height: auto;
	}
	
		.followedOnline .avatar img
		{
			width: 32px;
			height: 32px;
		}
	
	
	

	
	
/* call to action */

#SignupButton
{
	text-decoration: none;
padding: 0;
margin: 0;
text-align: center;
line-height: 38px;
display: block;
cursor: pointer;
height: 38px;

}

	#SignupButton .inner
	{
		font-weight: bold;
font-size: 12pt;
font-family: Calibri, 'Trebuchet MS', Verdana, Geneva, Arial, Helvetica, sans-serif;
color: #ffffff;
background: rgb(57,194,52) url('styles/soft_responsive_green/xenforo/gradients/gradients-sprite.png') repeat-x 0 -240px;
border: 0 solid transparent;
-webkit-border-radius: 6px; -moz-border-radius: 6px; -khtml-border-radius: 6px; border-radius: 6px;
display: block;
text-shadow: 0 0 0 transparent, 0px 0px 3px rgba(0,0,0, 0.5);
-webkit-box-shadow: 1px 1px 0 rgba(255, 255, 255, 0.2) inset, -1px -1px 0 rgba(0, 0, 0, 0.15) inset, -1px -1px 3px rgba(255, 255, 255, 0.2) inset, 1px 1px 3px rgba(0, 0, 0, 0.15) inset; -moz-box-shadow: 1px 1px 0 rgba(255, 255, 255, 0.2) inset, -1px -1px 0 rgba(0, 0, 0, 0.15) inset, -1px -1px 3px rgba(255, 255, 255, 0.2) inset, 1px 1px 3px rgba(0, 0, 0, 0.15) inset; -khtml-box-shadow: 1px 1px 0 rgba(255, 255, 255, 0.2) inset, -1px -1px 0 rgba(0, 0, 0, 0.15) inset, -1px -1px 3px rgba(255, 255, 255, 0.2) inset, 1px 1px 3px rgba(0, 0, 0, 0.15) inset; box-shadow: 1px 1px 0 rgba(255, 255, 255, 0.2) inset, -1px -1px 0 rgba(0, 0, 0, 0.15) inset, -1px -1px 3px rgba(255, 255, 255, 0.2) inset, 1px 1px 3px rgba(0, 0, 0, 0.15) inset;
height: 38px;

	}
	
	#SignupButton:hover .inner
	{
		text-decoration: none;
background-color: rgb(0, 155, 0);

	}
	
	#SignupButton:active
	{
		outline-style: none;

	}
	
/* 960px and lower - smaller sidebar */
@media only screen and (max-width: 960px), only screen and (max-device-width: 960px)
{
	.mainContainer
	{
		margin-right: -210px;
	}
	
	.mainContent
	{
		margin-right: 210px;
	}
	
	.sidebar
	{
		width: 200px;
	}
	
	.sidebar .fbRecommendations
	{
		display: none;
	}
}

/* 860px and lower - toggle sidebar */
@media only screen and (max-width: 860px), only screen and (max-device-width: 860px)
{
	.mainContainer, 
	.mainContent
	{
		float: none;
		margin-right: 0;
	}

	.sidebar
	{
		display: none;
		float: none;
		width: 300px;
		margin: 0 auto;
	}
	
		.sidebar .section
		{
			width: 300px;
			margin-right: 10px;
			float: none;
		}
		
		.sidebar:after
		{
			content: '';
			display: block;
			clear: both;
		}
		
	.mobileSidebarVisible .pageContent
	{
		position: relative;
	}

		.mobileSidebarVisible aside.sidebarContainer
		{
			position: absolute;
			top: 58px;
			left: 0;
			right: 0;
			z-index: 900;
			padding-bottom: 10px;
		}
		
			.mobileSidebarVisible .mobileSidebarToggleFooter + aside.sidebarContainer
			{
				position: relative;
				top: 0;
			}
		
			.mobileSidebarVisible aside.sidebarContainer .sidebar
			{
				display: block;
				border: 1px solid rgb(228, 228, 228);
				-webkit-border-radius: 6px; -moz-border-radius: 6px; -khtml-border-radius: 6px; border-radius: 6px;
				background: rgb(255, 255, 255);
				padding: 0 10px;
				-webkit-box-shadow: 0 2px 4px rgba(0, 0, 0, 0.25); -moz-box-shadow: 0 2px 4px rgba(0, 0, 0, 0.25); -khtml-box-shadow: 0 2px 4px rgba(0, 0, 0, 0.25); box-shadow: 0 2px 4px rgba(0, 0, 0, 0.25);
			}

				.mobileSidebarVisible .mobileSidebarToggleFooter + aside.sidebarContainer .sidebar
				{
					background: transparent none;
padding: 0;
margin: 0;
border-width: 0;
-webkit-border-radius: 0; -moz-border-radius: 0; -khtml-border-radius: 0; border-radius: 0;
box-shadow: none !important;

					margin: 0 auto;
				}

	.mobileSidebarToggle.hasJs
	{
		display: block !important;
		margin: 10px 6px;
		position: relative;
		text-align: center;
	}
}
	
@media only screen and (max-width: 700px), only screen and (max-device-width: 700px)
{
	.mobileSidebarVisible aside.sidebarContainer
	{
		top: 38px;
	}
}

/** Text used in message bodies **/

.messageText
{
	font-size: 15px;
font-family: 'Roboto',arial,sans-serif;
line-height: 1.4;

}

/** Link groups and pagenav container **/

.pageNavLinkGroup
{
	font-size: 11px;
margin: 10px 0;
line-height: 16px;

}

	.pageNavLinkGroup .linkGroup
	{
		float: right;
	}

.linkGroup
{
}
	
	.linkGroup a
	{
		padding: 3px 0;

	}

	.linkGroup a,
	.linkGroup .Popup
	{
		margin-left: 10px;
		display: block;
		float: left;
		
	}
	
		.linkGroup .Popup a
		{
			margin-left: -2px;
			margin-right: -5px;
			*margin-left: 10px;
			padding: 3px 5px;
		}

/** Call to action buttons **/

a.callToAction
{
	padding: 0;
display: inline-block;
line-height: 26px;
outline: 0 none;
cursor: pointer;
height: 26px;

	
}

	a.callToAction span
	{
		font-weight: bold;
font-size: 11px;
font-family: Calibri, 'Trebuchet MS', Verdana, Geneva, Arial, Helvetica, sans-serif;
color: #ffffff;
background: rgb(0, 155, 0) url('styles/soft_responsive_green/xenforo/gradients/gradients-sprite.png') repeat-x 0 -80px;
padding: 0 15px;
border: 0 solid transparent;
-webkit-border-radius: 4px; -moz-border-radius: 4px; -khtml-border-radius: 4px; border-radius: 4px;
display: block;
-webkit-box-shadow: 1px 1px 0 rgba(255, 255, 255, 0.2) inset, -1px -1px 0 rgba(0, 0, 0, 0.3) inset, -1px -1px 2px rgba(255, 255, 255, 0.4) inset, 1px 1px 2px rgba(0, 0, 0, 0.2) inset; -moz-box-shadow: 1px 1px 0 rgba(255, 255, 255, 0.2) inset, -1px -1px 0 rgba(0, 0, 0, 0.3) inset, -1px -1px 2px rgba(255, 255, 255, 0.4) inset, 1px 1px 2px rgba(0, 0, 0, 0.2) inset; -khtml-box-shadow: 1px 1px 0 rgba(255, 255, 255, 0.2) inset, -1px -1px 0 rgba(0, 0, 0, 0.3) inset, -1px -1px 2px rgba(255, 255, 255, 0.4) inset, 1px 1px 2px rgba(0, 0, 0, 0.2) inset; box-shadow: 1px 1px 0 rgba(255, 255, 255, 0.2) inset, -1px -1px 0 rgba(0, 0, 0, 0.3) inset, -1px -1px 2px rgba(255, 255, 255, 0.4) inset, 1px 1px 2px rgba(0, 0, 0, 0.2) inset;
height: 26px;

	}

	a.callToAction:hover
	{
		text-decoration: none;
	}

		a.callToAction:hover span
		{
			background-color: rgb(57,194,52);

		}
		
		a.callToAction:active
		{
			/*position: relative;
			top: 2px;*/
		}
		
		a.callToAction:active span
		{
			text-decoration: none;
background-color: rgb(57,194,52);

		}

/*********/

.avatarHeap
{
	position: relative;
	zoom: 1;
}

	.avatarHeap ol,
	ol.avatarHeap,
	ul.avatarHeap
	{
		margin-right: -4px;
		margin-top: -4px;
	}
		
		.avatarHeap ol:after,
		ul.avatarHeap:after,
		ol.avatarHeap:after
		{
			display: block;
			content: '';
			clear: both;
		}
	
		.avatarHeap li
		{
			float: left;
			margin-right: 4px;
			margin-top: 4px;
		}

/* User name classes */

.username .style3
{
	color: red;
font-weight: bold;
}


.username .banned
{
	text-decoration: line-through;
}

.prefix
{
	background: transparent url('styles/soft_responsive_green/xenforo/gradients/form-button-white-25px.png') repeat-x top;
padding: 0px 6px;
margin: -1px 0;
border: 1px solid transparent;
-webkit-border-radius: 4px; -moz-border-radius: 4px; -khtml-border-radius: 4px; border-radius: 4px;
display: inline-block;

}

a.prefixLink:hover
{
	text-decoration: none;
}

a.prefixLink:hover .prefix
{
	color: rgb(0, 155, 0);
text-decoration: none;
background-color: rgb(242, 251, 244);
padding: 0 6px;
border: 1px solid rgb(176, 231, 192);

}

.prefix a { color: inherit; }

.prefix.prefixPrimary    { color: rgb(0, 155, 0); background-color: rgb(217, 253, 227); border-color: rgb(217, 253, 227); }
.prefix.prefixSecondary  { color: rgb(73,128,70); background-color: rgb(196,234,194); border-color: rgb(196,234,194); }

.prefix.prefixRed        { color: white; background-color: red; border-color: #F88; }
.prefix.prefixGreen      { color: white; background-color: green; border-color: green; }
.prefix.prefixOlive      { color: black; background-color: olive; border-color: olive; }
.prefix.prefixLightGreen { color: black; background-color: lightgreen; border-color: lightgreen; }
.prefix.prefixBlue       { color: white; background-color: blue; border-color: #88F; }
.prefix.prefixRoyalBlue  { color: white; background-color: royalblue; border-color: #81A9E1;  }
.prefix.prefixSkyBlue    { color: black; background-color: skyblue; border-color: skyblue; }
.prefix.prefixGray       { color: black; background-color: gray; border-color: #AAA; }
.prefix.prefixSilver     { color: black; background-color: silver; border-color: silver; }
.prefix.prefixYellow     { color: black; background-color: yellow; border-color: #E0E000; }
.prefix.prefixOrange     { color: black; background-color: orange; border-color: #FFC520; }

.discussionListItem .prefix,
.searchResult .prefix
{
	font-size: 80%;
margin: 0;
line-height: 16px;

	
	font-weight: normal;
}

h1 .prefix
{
	font-size: 80%;
margin: 0;
line-height: 16px;

	
	line-height: normal;
}

.breadcrumb span.prefix,
.heading span.prefix
{
	font-style: italic;
font-weight: bold;
padding: 0;
margin: 0;
border: 0 none black;
-webkit-border-radius: 0; -moz-border-radius: 0; -khtml-border-radius: 0; border-radius: 0;
display: inline;

	color: inherit;
}

.mobileData
{
	display: none;
}

/* Navigation trigger */

.callToMenuAction
{
	text-decoration: none;
padding: 0;
margin: 0;
text-align: center;
line-height: 38px;
display: block;
cursor: pointer;
height: 38px;

}

	.callToMenuAction span
	{
		font-weight: bold;
font-size: 12pt;
font-family: Calibri, 'Trebuchet MS', Verdana, Geneva, Arial, Helvetica, sans-serif;
color: #ffffff;
background: rgb(57,194,52) url('styles/soft_responsive_green/xenforo/gradients/gradients-sprite.png') repeat-x 0 -240px;
border: 0 solid transparent;
-webkit-border-radius: 6px; -moz-border-radius: 6px; -khtml-border-radius: 6px; border-radius: 6px;
display: block;
text-shadow: 0 0 0 transparent, 0px 0px 3px rgba(0,0,0, 0.5);
-webkit-box-shadow: 1px 1px 0 rgba(255, 255, 255, 0.2) inset, -1px -1px 0 rgba(0, 0, 0, 0.15) inset, -1px -1px 3px rgba(255, 255, 255, 0.2) inset, 1px 1px 3px rgba(0, 0, 0, 0.15) inset; -moz-box-shadow: 1px 1px 0 rgba(255, 255, 255, 0.2) inset, -1px -1px 0 rgba(0, 0, 0, 0.15) inset, -1px -1px 3px rgba(255, 255, 255, 0.2) inset, 1px 1px 3px rgba(0, 0, 0, 0.15) inset; -khtml-box-shadow: 1px 1px 0 rgba(255, 255, 255, 0.2) inset, -1px -1px 0 rgba(0, 0, 0, 0.15) inset, -1px -1px 3px rgba(255, 255, 255, 0.2) inset, 1px 1px 3px rgba(0, 0, 0, 0.15) inset; box-shadow: 1px 1px 0 rgba(255, 255, 255, 0.2) inset, -1px -1px 0 rgba(0, 0, 0, 0.15) inset, -1px -1px 3px rgba(255, 255, 255, 0.2) inset, 1px 1px 3px rgba(0, 0, 0, 0.15) inset;
height: 38px;

		background-color: rgb(0, 155, 0);
	}
	
		.callToMenuAction span strong
		{
			font-weight: bold;
			padding-left: 5px;
			font-family: Arial;
			position: relative;
			top: -1px;
			text-shadow: 0 0 0 transparent, 1px 1px 1px rgba(0, 0, 0, 0.5);
		}
		
	.navTabsVisible .callToMenuAction span,
	.mobileSidebarVisible .mobileSidebarToggle .callToMenuAction span
	{
		text-decoration: none;
background-color: rgb(0, 155, 0);

		background-color: rgb(57,194,52);
	}

	.callToMenuAction:active
	{
		outline-style: none;

	}



/* Smoothly resize from normal layout to 960px */
@media only screen and (max-width: 980px), only screen and (max-device-width: 980px)
{
	.pageWidth
	{
		width: auto;
		margin: 0 10px;
	}
}

/* 960px and lower - smaller border */
@media only screen and (max-width: 960px), only screen and (max-device-width: 960px)
{
	.pageWidth
	{
		margin: 0 5px;
	}
}
	

/* 700px and lower - compact nodes list */
@media only screen and (max-width: 700px), only screen and (max-device-width: 700px)
{
	html
	{
		background-color: rgb(255, 255, 255);
	}
	
	#forumFooter
	{
		background-color: #33a154;
	}
	
	#content .pageWidth
	{
		margin-top: 0;
	}
	
	#content .pageContent
	{
		padding: 0;
	}
	
	.pageNavLinkGroup .linkGroup
	{
		float: none;
		clear: both;
	}
	
		.linkGroup a, .linkGroup .Popup
		{
			margin-left: 0;
			margin-right: 10px;
		}

	.mobileData
	{
		display: block;
	}
	
		.discussionListItem .mobileData
		{
			float: left;
			clear: left;
		}
		
	.xenPreviewTooltip .previewContent
	{
		padding: 5px;
	}
}

.sidebar h3.portal {
    background: url("styles/soft_responsive_green/xenforo/android/bullet.png") no-repeat,
                url("styles/soft_responsive_green/xenforo/android/sub_nav.png") repeat-x;
    background-position: 8px 5px, 0 0;
    border-top: 2px solid rgb(196, 22, 28);
    padding: 1px 5px 9px 5px !important;
    margin: -9px -9px 0px -9px;
    -webkit-border-radius: 3px 3px 0 0; -moz-border-radius: 3px 3px 0 0; -khtml-border-radius: 3px 3px 0 0; border-radius: 3px 3px 0 0;
}
.sidebar h3.portal span{
	background: none repeat scroll 0% 0% rgb(196, 22, 28);
	_margin-top:-9px;
	padding: 3px;
	-webkit-border-radius: 0 0 7px 7px; -moz-border-radius: 0 0 7px 7px; -khtml-border-radius: 0 0 7px 7px; border-radius: 0 0 7px 7px;
	color: rgb(255,255,255) !important;
	margin-left:  24px;
}
.breadcrumb .crumbs {
background: url(styles/soft_responsive_green/xenforo/android/homeico.png) no-repeat;
background-position: 2px 8px;
padding-left: 15px;
}
.breadcrumb .crust:hover a.crumb {
    text-decoration: none;
}
/*social stuff */
.social-block ul {margin:15px 0;padding:0;}
.social-block li {list-style:none;margin:7px 0 0;padding:0;background:url(styles/android/images/social-icons.png) no-repeat;height:32px;}
body #content-area .social-block a {display:block;height:32px;line-height:32px;font-size:14px;padding-left:50px;color:#999;}
.social-block em {font-style:normal;color:#666;font-weight:bold;}
.social-block .twitter {background-position:0 -40px;}
.social-block .youtube {background-position:0 -80px;}
.social-block .rss {background-position:0 -120px;}
.social-block .email {background-position:0 -160px;}
.social-block a {
display: block;
height: 32px;
line-height: 32px;
font-size: 14px;
padding-left: 50px;
color: #999;
}
.sidebar .userList .username {
    font-size: 13px !important;
}
/*sidebar_forum_list*/
.sidebar_forum_list ul {margin: -5px 0px -9px 0px; padding:0px;}
.sidebar_forum_list li {
list-style:none;
padding:5px;
background:#63ab01 url(styles/android/images/white-arrow.png) no-repeat;
background-position: 10px 6px;
height: 13px;
border-bottom:1px solid #39a200;
border-top:1px solid #62b620;
}
.sidebar_forum_list a {line-height: 12px;display: block;padding-left:15px;color: #ffffff !important;}
.sidebar_forum_list a:hover,
.sidebar_forum_list_cat a:hover{text-decoration: none;}


.sidebar_forum_list_cat ul {margin: 5px; padding:0px;}
.sidebar_forum_list_cat li {list-style:none;margin:0;padding:0;background:url(styles/android/images/sidebar-cat2.png) no-repeat;height:58px;}
.sidebar_forum_list_cat a {
    display: block;
    height: 60px;
    line-height: 60px;
    padding-left: 105px;
color: #ffffff !important;
}
.sidebar_forum_list_cat .sidebar_forum_list_cat_li1{background-position: -13px 0px}
.sidebar_forum_list_cat .sidebar_forum_list_cat_li2{background-position: -13px -55px}
.sidebar_forum_list_cat .sidebar_forum_list_cat_li3{background-position: -13px -110px}


/* Footer Fix */
#forumFooter {
    background: url(styles/soft_responsive_green/xenforo/android/footer_bg.png) repeat scroll 0px 0px rgb(51, 161, 84);
}
/*notices block*/
#Notices .panel .noticeContent {
    overflow: hidden;
}
.box-c{
background: url(../styles/notices/images/bg.gif) no-repeat top left;
width:748px;
height:98px;
font-size:13px;
font-family:Verdana, Geneva, Tahoma, sans-serif;
}
.box-c-p{
	padding:4px;
}
.box-c-img{
	border-right:1px solid #D2D2D2;
	float:left;
        padding-right: 10px;
}
.box-c-ct{
	width:630px;
	padding-top:5px;
	float:right;
}
.box-c-ct h2{
	color:#f96004;
	font-size:16px;
	font-weight:bold;
	background:url('../styles/notices/li.gif') no-repeat center left;
	padding:0px;
	padding-left:20px;
	margin:0px;
}
.box-c-ct h2 a{
	color:#f96004;
	text-decoration:none;
}
.box-c-ct h2 a:hover{
	color:#f96004;
	text-decoration:underline;
}

.ct{
width:550px;
font-size:12px;	
padding-left:20px;
padding-top: 7px;
}
/*
 * Metro UI CSS
 * Copyright 2012 Sergey Pimenov
 * Licensed under the MIT Lilcense
 *
 * Variables.less
 */
.fg-color-blue {
  color: #2d89ef !important;
}
.fg-color-blueLight {
  color: #eff4ff !important;
}
.fg-color-blueDark {
  color: #2b5797 !important;
}
.fg-color-green {
  color: #00a300 !important;
}
.fg-color-greenLight {
  color: #99b433 !important;
}
.fg-color-greenDark {
  color: #1e7145 !important;
}
.fg-color-red {
  color: #b91d47 !important;
}
.fg-color-yellow {
  color: #ffc40d !important;
}
.fg-color-orange {
  color: #e3a21a !important;
}
.fg-color-orangeDark {
  color: #da532c !important;
}
.fg-color-pink {
  color: #9f00a7 !important;
}
.fg-color-pinkDark {
  color: #7e3878 !important;
}
.fg-color-purple {
  color: #603cba !important;
}
.fg-color-darken {
  color: #1d1d1d !important;
}
.fg-color-lighten {
  color: #d5e7ec !important;
}
.fg-color-white {
  color: #ffffff !important;
}
.fg-color-grayDark {
  color: #525252 !important;
}
.bg-color-blue {
  background-color: #2d89ef !important;
}
.bg-color-blueLight {
  background-color: #eff4ff !important;
}
.bg-color-blueDark {
  background-color: #2b5797 !important;
}
.bg-color-green {
  background-color: #00a300 !important;
}
.bg-color-greenLight {
  background-color: #99b433 !important;
}
.bg-color-greenDark {
  background-color: #1e7145 !important;
}
.bg-color-red {
  background-color: #b91d47 !important;
}
.bg-color-yellow {
  background-color: #ffc40d !important;
}
.bg-color-orange {
  background-color: #e3a21a !important;
}
.bg-color-orangeDark {
  background-color: #da532c !important;
}
.bg-color-pink {
  background-color: #9f00a7 !important;
}
.bg-color-pinkDark {
  background-color: #7e3878 !important;
}
.bg-color-purple {
  background-color: #603cba !important;
}
.bg-color-darken {
  background-color: #1d1d1d !important;
}
.bg-color-lighten {
  background-color: #d5e7ec !important;
}
.bg-color-white {
  background-color: #ffffff !important;
}
.bg-color-grayDark {
  background-color: #525252 !important;
}
.htmlBlock .htmlBlockSpan {
  width: 100%;
margin-right: 10px;
}

.place-left {
  float: left !important;
  margin-right: 10px;
}
.place-right {
  float: right !important;
  margin-left: 10px;
}
.htmlBlock{
-webkit-border-radius: 20px 0 20px 0; -moz-border-radius: 20px 0 20px 0; -khtml-border-radius: 20px 0 20px 0; border-radius: 20px 0 20px 0;
border-top: 3px solid rgb(196, 22, 28);
}
.htmlBlock img{
margin-top: -4px;
}
.htmlBlock h2{
  font-family: 'Segoe UI Light', 'Open Sans', Verdana, Arial, Helvetica, sans-serif;
  letter-spacing: 0.01em;
  font-size:25px;
  line-height: 25px;
  margin: 5px 0px 10px;
  padding: 0;
  font-weight: 300;
}
.htmlBlock h2 span{
    background: none repeat scroll 0% 0% rgb(196, 22, 28);
    padding: 5px;
    margin-left: 25px;
    -webkit-border-radius: 0px 0px 17px 17px; -moz-border-radius: 0px 0px 17px 17px; -khtml-border-radius: 0px 0px 17px 17px; border-radius: 0px 0px 17px 17px;
}
@font-face {
  font-family: "Open Sans";
  font-style: normal;
  font-weight: 700;
  src: local("Open Sans Bold"), local("OpenSans-Bold"), url(http://themes.googleusercontent.com/static/fonts/opensans/v6/k3k702ZOKiLJc3WVjuplzJ1r3JsPcQLi8jytr04NNhU.woff) format('woff');
}
@font-face {
  font-family: "Open Sans";
  font-style: normal;
  font-weight: 300;
  src: local("Open Sans Light"), local("OpenSans-Light"), url(http://themes.googleusercontent.com/static/fonts/opensans/v6/DXI1ORHCpsQm3Vp6mXoaTZ1r3JsPcQLi8jytr04NNhU.woff) format('woff');
}
@font-face {
  font-family: "Open Sans";
  font-style: normal;
  font-weight: 800;
  src: local("Open Sans Extrabold"), local("OpenSans-Extrabold"), url(http://themes.googleusercontent.com/static/fonts/opensans/v6/EInbV5DfGHOiMmvb1Xr-hp1r3JsPcQLi8jytr04NNhU.woff) format('woff');
}
@font-face {
  font-family: "Open Sans";
  font-style: normal;
  font-weight: 400;
  src: local("Open Sans"), local("OpenSans"), url(http://themes.googleusercontent.com/static/fonts/opensans/v6/K88pR3goAWT7BTt32Z01mz8E0i7KZn-EPnyo3HZu7kw.woff) format('woff');
}

#content.EWRporta_Portal .footerBreakout {
    margin-top: 0px;
    display: none;
}

/* 1100px and lower*/
@media only screen and (max-width: 1100px), only screen and (max-device-width: 1100px)
{
	.newsDate {
		display:none;
	}
}

/* 960px and lower*/
@media only screen and (max-width: 960px), only screen and (max-device-width: 960px)
{

}


/* 860px and lower*/
@media only screen and (max-width: 860px), only screen and (max-device-width: 860px)
{
	.flexslider .slides img {
		height: 380px;
	}
}
/* IPad RES 768x1024*/
@media only screen and (max-width: 768px), only screen and (max-device-width: 768px)
{
	.slide_likebox{display:none}

}

/* 700px and lower */
@media only screen and (max-width: 700px), only screen and (max-device-width: 700px)
{
	.primaryContent .RightContent {
		display:none;
	}
	.newsDate {
		display:none;
	}
	div.post_comment_box {
		display:none;
	}
	#Block2nd{
		margin-left: 0 !important;
	}
	#Block1st{
		display:none;
	}
	.slide_likebox{display:none}
}

/* 670px and lower */
@media only screen and (max-width: 670px), only screen and (max-device-width: 670px)
{
	div.post_comment_box {
		display:none;
	}
	.flexslider {
		display:none;
	}
}

/* 652px and lower */
@media only screen and (max-width: 652px), only screen and (max-device-width: 652px)
{

}

/* 500px and lower */
@media only screen and (max-width: 500px), only screen and (max-device-width: 500px)
{
	.flexslider {
		display:none;
	}
	.flexslider .slides p a {
		font-size: 17px;
	}
	.messageUserBlock img {
		display:none;
	}
	.primaryContent .RightContent {
		display:none;
	}
	.newsDate {
		display:none;
	}
	div.post_comment_box {
		display:none;
	}
	.messageContent .continue{
		display:none;
	}
	.VietXfAdvStats {
		display:none;
	}
}
/* SmartPhone RES 360x640*/
@media only screen and (max-width: 360px), only screen and (max-device-width: 360px)
{
	#xenplaza_toolbox {display:none !important;}
	.slide_likebox{display:none !important;}
	#androidtabs{display:none !important;}
	.AndroidVNNews{padding:0 !important;}
	.AndroidVNNews {height:auto !important;}
	.AndroidVNNews .messageUserBlock img {display: block !important; margin: 0 !important;width:100% !important;}
	.AndroidVNNews .messageUserBlock {float: none !important;}
	.messageUserBlock div.avatarHolder a{text-align:center;}
	.imgPWrapper  {float: none !important;}
	.AndroidVNNews .primaryContent .contentnews{margin-top: 3px !important;}
	.AndroidVNNews .subHeading a{font-size:15px !important; line-height:20px !important;}
}


.sidebar .visitorPanel {
    margin-top: 50px;
}
#SignupButton{
margin: 0 50px !important;
line-height: 26px !important;
height:26px !important;
}
#SignupButton a.inner{
height: 26px !important;
_margin-left: 9px !important;
}
/**********/
#logo img {
    margin-left: -10px;
    width:260px;
}
.navTabs .navTab {
margin: 0px !important;
}
.navTabs .navLink:hover {
    background-color: rgb(255, 255, 255);
    border-bottom: 1px solid rgb(0, 155, 0) !important;
}
.navTabs .publicTabs {
    border-bottom:  1px solid rgb(0,0,0); border-bottom:  1px solid rgba(0,0,0, 0.15); _border-bottom:  1px solid rgb(0,0,0);
margin-left: -15px;
}
.navTabs .navLink {
border-bottom: none !important;
    font-size: 16px;
}

/* 14-03 */

.sidebar .section .secondaryContent .footnote,
.widget-container .pairsJustified{
font-size: 13px;
}
.sidebar .section .secondaryContent .footnote{color: rgb(102,102,102);}
.sidebar .section .secondaryContent .footnote span{color: rgb(0,0,0);}
#Block2nd .VietXfAdvStats_Block2ndContent,
#Block1st .VietXfAdvStats_Block1stContent {font-size:13px;}
.nodeList .categoryStrip .nodeTitle {margin-bottom: 5px;}
.nodeTitle {font-weight: normal !important;}
.titleBar {margin-top: 25px;}
.breadcrumb .crust a.crumb {color: rgba(0,0,0,0.5);}
.breadcrumb .crust:last-child a.crumb {font-style: italic;font-weight: normal !important;}
.footer-links .pageContent .menu .menu_title h3,
.footer-links .pageContent .menu .menu_title h3 a {margin-bottom:10px;color: rgb(255,255,255) !important;background:none;padding-left:0;font-size:16px;font-weight:normal;}
#forumFooter {background: none;}
#copyright, #copyright a{color: rgb(255,255,255) !important;}
.footerLegal a{color: rgb(255,255,255) !important;}
body .subForums .blockLinksList {border-top:none !important;}


/* 15-03 */
.xenOverlay .section .heading{background: rgb(0,155,0) !important;}

/*28-04-2013*/
#moderatorBar .adminLink {
	float:none;
}

#moderatorBar .visitorTabs{
	float: right;
	display: inline-block;
	padding-top: 2px;
}

.visitorTabs .Logout{
	display: inline-block;
}

/*28-04 loginbar*/
#loginBar{}
#loginBar .pageContent{padding:2px 0;}

#loginBar .visitorTabs
{
	background-color: rgb(0, 155, 0);
	border-bottom: 1px solid rgb(0, 155, 0);	
	font-size: 11px;
	text-align: right
}
	#loginBar .alert
	{
		background-color: rgb(57,194,52);
		border-bottom-color: rgb(57,194,52);	
	}

/* clearfix */ #loginBar .visitorTabs { zoom: 1; } #loginBar .visitorTabs:after { content: '.'; display: block; height: 0; clear: both; visibility: hidden; }

#loginBar .pageContent .visitorTabs 
{
	padding: 2px 0;
}

#loginBar .visitorTabs a
{
	display: inline-block;
	padding: 2px 10px;
	-webkit-border-radius: 4px; -moz-border-radius: 4px; -khtml-border-radius: 4px; border-radius: 4px;
	text-decoration: none
}

#loginBar .visitorTabs a,
#loginBar .visitorTabs .itemCount
{
	color: rgb(242, 251, 244);
}

	#loginBar .alert a,
	#loginBar .alert .itemCount
	{
		color: rgb(235,250,235);
	}

	#loginBar .visitorTabs a:hover
	{
		text-decoration: none;
		background: rgb(255, 255, 255) url('styles/soft_responsive_green/xenforo/gradients/white_50_25.png') repeat-x 0 0;
		color: rgb(0, 155, 0);
		-webkit-box-shadow: 0 1px 2px #0f4c22; -moz-box-shadow: 0 1px 2px #0f4c22; -khtml-box-shadow: 0 1px 2px #0f4c22; box-shadow: 0 1px 2px #0f4c22;
	}

		#loginBar .alert a:hover
		{
			color: rgb(57,194,52);
			-webkit-box-shadow: 0 1px 2px rgb(20,92,17); -moz-box-shadow: 0 1px 2px rgb(20,92,17); -khtml-box-shadow: 0 1px 2px rgb(20,92,17); box-shadow: 0 1px 2px rgb(20,92,17);
		}
	
	#loginBar .visitorTabs a:focus
	{
		outline-style: none;
	}

/* TODO: maybe sort out the vertical alignment of the counters so they they are properly centered */

#loginBar .visitorTabs .itemLabel,
#loginBar .visitorTabs .itemCount
{
	display: inline-block;
	height: 16px;
	line-height: 16px;
}

#loginBar .visitorTabs .itemCount
{	
	background: #0f4c22;
	padding-left: 6px;
	padding-right: 6px;
	
	text-align: center;
	
	font-weight: bold;
	
	-webkit-border-radius: 4px; -moz-border-radius: 4px; -khtml-border-radius: 4px; border-radius: 4px;
	text-shadow: none;
}

	#loginBar .alert .itemCount
	{
		background-color: rgb(20,92,17);
	}

	#loginBar .visitorTabs a:hover .itemCount
	{
		background: rgb(0, 155, 0);
	}

		#loginBar .alert a:hover .itemCount
		{
			background-color: rgb(57,194,52);
		}

	#loginBar .visitorTabs .itemCount.alert
	{
		background: rgb(255, 255, 255);
		color: rgb(57,194,52);
	}

		#loginBar .visitorTabs a:hover .itemCount.alert
		{
			background: rgb(57,194,52);
			color: rgb(255, 255, 255);
		}
	
#loginBar .visitorTabs .adminLink
{
	float: right;
}

/*07-05*/
.sidebar .secondaryContent{padding: 0px;}
.widget-tabs .tabs {
    margin-left: 0px !important; 
}

#waindigoCopyrightNotice {
display: none;
}


.subForumsPopup,
.subForumsPopup .blockLinksList,
.subForumsPopup ol,
.subForumsMenu ol li ol li
{
    width: 100%;
}
 
.subForumsPopup .blockLinksList
{
    float: left;
}
 
.subForumsPopup .dot
{
    position: relative;
    float: left; /* firefox fix */
}
.subForumsPopup .dot span
{
    height: 0px;
    left: 6px;
    top: 10px !important;
    position: absolute;
    width: 0px;
    border: 2px solid rgb(123, 231, 156);
    -webkit-border-radius: 6px; -moz-border-radius: 6px; -khtml-border-radius: 6px; border-radius: 6px;
}
 
.subForumsMenu ol li
{
    width: 49%;
    float: left;
}
 
.subForumsMenu .node .nodeTitle a
{
    padding-left: 16px;
}
 
.subForumsMenu .node .node.level-n
{
    display: none;
}

.ad_below_bottom img {
width: 100%;
}

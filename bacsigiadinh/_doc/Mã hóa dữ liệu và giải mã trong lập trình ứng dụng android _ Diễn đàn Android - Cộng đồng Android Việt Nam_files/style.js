(function($) {

	/*
	* Add .overlayExposeMask to mask when .overlay() function is triggered.
	* This function is triggered every time new popup is shown. It is not triggered
	* when cached popups are shown, but .xfSlideOut below takes care of that.
	*/
	$.fn._jQueryToolsOverlayBackup = $.fn.overlay;
	$.fn.overlay = function(options)
	{
		var result = this._jQueryToolsOverlayBackup(options);
		setTimeout(function() { $('#exposeMask').addClass('overlayExposeMask'); }, 1);
		return result; 
	};

	/*
	* Remove .overlayExposeMask when .xfSlideIn() is triggered.
	* This function is triggered only by login button.
	*/
	$.fn._xfSlideInBackup = $.fn.xfSlideIn;
	$.fn.xfSlideIn = function(duration, easing, callback)
	{
		$('#exposeMask').removeClass('overlayExposeMask');
		return this._xfSlideInBackup(duration, easing, callback);
	};

	/*
	* Add .overlayExposeMask to mask after animation is over.
	* This is redundancy function that does the same as .overlay() above,
	* in case if popup is triggered without calling .overlay(). That happens
	* to cached member card popups.
	*/
	$.fn._xfSlideOutBackup = $.fn.xfSlideOut;
	$.fn.xfSlideOut = function(duration, easing, callback)
	{
		setTimeout(function() { $('#exposeMask').addClass('overlayExposeMask'); }, duration + 100);
		return this._xfSlideOutBackup(duration, easing, callback);
	};

	/*
	* Do style stuff when DOM is ready
	*/
	$(document).ready(function() 
	{
		var oldIE = false,
			IE9 = false;

		// JS enabled
		$('html.noJs').removeClass('noJs');
		
		// Old IE check
		(function() 
		{
			var test = document.createElement('div');
			if (typeof test.style.borderRadius == 'undefined')
			{
				oldIE = true;
				$('html').addClass('OldIE');
			}
			else if (typeof test.style.msTransform == 'string' && typeof test.style.msTransition == 'undefined')
			{
				IE9 = true;
			}
			delete test;
		}) ();
		
		// IE9 logo and login handle fixes
		function fixIE9()
		{
			$('#logo, #loginBarHandle').each(function() {
				var $this = $(this),
					children = $this.children();
				if (children.length == 1)
				{
					$this.css('min-width', Math.floor(children.width()) + 'px');
				}
			});
		}
		if (IE9)
		{
			fixIE9();
			$(window).load(fixIE9);
			$(window).resize(fixIE9);
		}

		// Navigation
		$('#navigation .mobileTabs').click(function() {
			var parent = $('#navigation');
			parent.toggleClass('navTabsVisible');
			$('strong.small-arrow', this).html(parent.hasClass('navTabsVisible') ? '&uarr;' : '&darr;');
		}).find('span').append('<strong class="small-arrow">&darr;</strong>');
		$('#navigation .mobileTabs .callToAction').removeClass('callToAction').addClass('callToMenuAction');
		$('#navigation .navTabs').removeClass('navTabsNoJS');
		
		(function()
		{
			var tabs = $('#navigation .mobileExtraTabs');
			if (!tabs.length)
			{
				return;
			}
			tabs.before('<div class="mobileMainTabs" style="display: none;"><ul></ul></div>');

			var container = $('#navigation .mobileMainTabs ul'),
				found = false;
			tabs.siblings('ul').addClass('navTabsUL').children('li').each(function()
			{
				container.append($(this).clone(false));
				found = true;
			});
			
			if (!found)
			{
				return;
			}

			container.find('li').removeClass('PopupOpen PopupControl PopupContainerControl');
			container.find('.arrowWidget, .SplitCtrl, .tabLinks, .Menu').remove();
			container.find('[id]').attr('id', '');
			$('#navigation .navTabs').addClass('navTabsSecondList');
			
			// Add counters
			var counters = '';
			tabs.siblings('ul.navTabsUL').find('a[href] .itemCount[data-text]').each(function()
			{
				var $this = $(this),
					total = $this.find('.Total').text();

				if (!total.length || total == '0')
				{
					return;
				}

				counters += '<li><a href="' + $(this).closest('a[href]').attr('href') + '">' + $(this).data('text').replace('%d', total) + '</a></li>';
			});
			if (counters != '')
			{
				$('#navigation .navTabsSecondList').after('<div class="mobileExtraAlerts" style="display: none;"><ul>' + counters + '</ul></div>');
			}
		}) ();
		
		// Page sidebar
		if ($('.mobileSidebarToggle').addClass('hasJs').length)
		{
			$('.sidebar').parent('aside').addClass('sidebarContainer');
			$('.mobileSidebarToggle .callToAction').removeClass('callToAction').addClass('callToMenuAction').click(function() {
				var $body = $('body');
				$body.toggleClass('mobileSidebarVisible');
				$('strong.small-arrow', this).html($body.hasClass('mobileSidebarVisible') ? '&uarr;' : '&darr;');
			}).find('span').append('<strong class="small-arrow">&darr;</strong>');
		}

		// Help and account sidebar
		$('.helpSideBar .section > .heading, .helpSideBar .section > .subHeading').click(function() {
			var parent = $(this).parents('.section');
			if (!parent.hasClass('sectionHover'))
			{
				$('.helpSideBar .section.sectionHover').removeClass('sectionHover').find('strong.small-arrow').html('&darr;');
			}
			parent.toggleClass('sectionHover');
			$('strong.small-arrow', this).html(parent.hasClass('sectionHover') ? '&uarr;' : '&darr;');
		}).append('<strong class="small-arrow">&darr;</strong>');
		
		$('.helpSideBar .section a.secondaryContent').parents('.section:first').addClass('activeSection');

		// Fix nodes list
		$('.nodeList:not(.nodeList .nodeList)').each(function() {
			var nodeList = $(this);

			// Combine nodes into big list
			var children = nodeList.children(),
				total = children.length,
				joinList = $([]);

			function wrapList() {
				if (!joinList.length)
				{
					return;
				}
				joinList.wrapAll('<li class="node level_1 nodeNoTitle"><ol class="nodeList" /></li>');
				joinList = $([]);
			};

			children.each(function(i) {
				var node = $(this);
				if (node.hasClass('groupNoChildren') || node.hasClass('level_2'))
				{
					joinList = joinList.add(node);
				}
				else
				{
					wrapList();
				}
			});
			wrapList();
			
			// Add missing footer, count children
			nodeList.children().each(function() {
				var node = $(this);
				if (!node.children('span.tlc').length)
				{
					node.append('<span class="tlc"></span><span class="trc"></span><span class="blc"></span><span class="brc"></span>');
				}
				var count = node.children('ol.nodeList').children().length;
				if (count > 0 && count < 3)
				{
					node.addClass('shortNode');
				}
			});
		});
		
		// IE stuff
		if ($('html').hasClass('OldIE'))
		{
			$('.nodeList .nodeNoTitle li.first-child, .dataTable tr.dataRow:first-child').addClass('first-child');
			$('.breadcrumb .crust:last-child, .nodeList .nodeList li:last-child, .dataTable tr.dataRow:last-child').addClass('last-child');
		}
		
		// Account wrapper
		$('.accountSideBar, .helpSideBar').not('.containerSideBar .helpSideBar').each(function()
		{
			var $this = $(this).addClass('helpSideBar'),
				siblings = $(this).siblings();
			$this.wrap('<div class="containerSideBar" />');
			siblings.wrapAll('<div class="containerContent" />').closest('.accountContent, .helpContent').addClass('helpContent');
		});
		
		// Resize content
		function resizeContent() 
		{
			// Resize header
			var header = $('#header'),
				headerProxy = $('#headerProxy');
			if (header.length && headerProxy.length && !header.hasClass('staticHeader'))
			{
				headerProxy.css('padding-top', Math.ceil(header.height()) + 'px');
			}				
				
			// Move footer
			var content = $('#headerMover');
			if (!content.length)
			{
				return;
			}
			var contentHeight = content.height(),
				bodyHeight = $('body').height(),
				diff = bodyHeight - contentHeight,
				pageHeight = $(window).height();
			content.css('min-height', Math.floor(pageHeight - diff) + 'px');
		};
		
		resizeContent();
		$(window).load(resizeContent);
		$(window).resize(resizeContent);
		$('.navTabs .mobileTabs').click(resizeContent);
		
		// Clickable rows
		$('.discussionListItem .main, .nodeList .nodeInfo').click(function(event)
		{
			// Check resolution
			if ($(window).width() > 700)
			{
				return;
			}
			
			// Find all links
			var $this = $(this),
				target = $(this).find('.title a[href], .nodeTitle a[href]').not('.unreadLink'),
				links = $this.find('a, input').not('.posterDate a:not(.itemPageNav a)').not(target);

			function doClick()
			{
				document.location.href = target.attr('href');
				event.preventDefault();
				return true;
			}
			
			function getOffset(obj) 
			{
				var obj2 = obj,
					curtop = 0;
					curleft = 0;
				if (document.getElementById || document.all) 
				{
					do
					{
						curleft += obj.offsetLeft - obj.scrollLeft;
						curtop += obj.offsetTop - obj.scrollTop;
						obj = obj.offsetParent;
						obj2 = obj2.parentNode;
						while (obj2 != obj) 
						{
							curleft -= obj2.scrollLeft;
							curtop -= obj2.scrollTop;
							obj2 = obj2.parentNode;
						}
					}
					while (obj.offsetParent);
				} 
				else if (document.layers)
				{
					curtop += obj.y;
					curleft += obj.x;
				}
				return {top: curtop, left: curleft};
			} 

			if (target.length != 1 || (links.length == 0) && doClick())
			{
				return;
			}
			
			// Calculate coordinates
			var diff = 30,
				x = event.pageX,
				y = event.pageY,
				match = false;

			if (!x || !y) return;
			
			links.each(function() 
			{
				if (match) return;

				var item = $(this);
				if (!item.is(':visible'))
				{
					// hidden item
					return;
				}
				
				var offset = getOffset(this);
					
				if (offset.left > (x + diff) || offset.top > (y + diff))
				{
					// to left or above link
					return;
				}
				
				if ((offset.left + item.width()) < (x - diff) || (offset.top + item.height()) < (y - diff))
				{
					// to right or below link
					return;
				}
				
				match = true;
			});
			
			if (!match)
			{
				doClick();
			}
		});
	});
})(jQuery);
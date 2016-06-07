!function($, window, document, _undefined)
{
	XenForo.checkST = function($form)
	{
		$title = $form.find('input[name="title"]');
		$title.blur(function() {
	        XenForo.ajax(
	        		$('base').attr('href') + 'check/',
	        		$form.serializeArray(),
	                function(ajaxData, textStatus)
	                {
	                    if (ajaxData.templateHtml)
	                    {
	                        new XenForo.ExtLoader(ajaxData, function()
	                        {
	                        	$('#checkST-result').html('<div>' + ajaxData.templateHtml + '</div>');
	                        });
	                    }
	                }
	            );
		});
	}
	XenForo.register('#checkST', 'XenForo.checkST');

}
(jQuery, this, document);	
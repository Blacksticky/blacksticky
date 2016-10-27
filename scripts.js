(function ($, root, undefined) {
	$(function () {
		'use strict';
		// DOM ready, take it away
		
		
		$('.mainmenu-tggl').click(function(){
			$('.mainmenu-wrap').slideToggle(200);
		});
		
		$('.shopmenu-tggl').click(function(){
			$('.shopmenu-wrap').slideToggle(200);
		});

		$('.woo-mini-cart').click(function(){
			$('.woo-mini-cart-wrap').slideToggle(200);
		});
		
		//filter & search
			var options = {
				valueNames: [ 'type' ]
			};

			var featureList = new List('commission-prices', options);

			$('#Art').click(function() {
				featureList.filter(function(item) {
				if (item.values().type == "Art") {
					return true;
				} else {
					return false;
				}
			  });
			  return false;
			});
			
			$('#Fursuit').click(function() {
				featureList.filter(function(item) {
				if (item.values().type == "Fursuit") {
					return true;
				} else {
					return false;
				}
			  });
			  return false;
			});
			
			$('#Other').click(function() {
				featureList.filter(function(item) {
				if (item.values().type == "Other") {
					return true;
				} else {
					return false;
				}
			  });
			  return false;
			});
			
			$('#filter-none').click(function() {
				featureList.filter();
				return false;
			});
		
	});
})(jQuery, this);
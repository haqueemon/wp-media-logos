var txmFrame;
var txmFramePt;
;( function ($) {

    "use strict";

    $( document ).ready( function () {

		var html = $('#main-box').html();
		$('#txtSelect').val(html);


		$('body').on('keyup','.nbcLink',function(){
			if ($(this).val()) {
				$('body').find('.nbc-link').attr('href', $(this).val());
				var html = $('#main-box').html();
				$('#txtSelect').val(html);
			}else{
				$('body').find('.nbc-link').attr('href', '');
				var html = $('#main-box').html();
				$('#txtSelect').val(html);
			}
		});

		$('body').on('keyup','.cbsLink',function(){
			if ($(this).val()) {
				$('body').find('.cbs-link').attr('href', $(this).val());
				var html = $('#main-box').html();
				$('#txtSelect').val(html);
			}else{
				$('body').find('.cbs-link').attr('href', '');
				var html = $('#main-box').html();
				$('#txtSelect').val(html);
			}
		});


		$('body').on('keyup','.foxLink',function(){
			if ($(this).val()) {
				$('body').find('.fox-link').attr('href', $(this).val());
				var html = $('#main-box').html();
				$('#txtSelect').val(html);
			}else{
				$('body').find('.fox-link').attr('href', '');
				var html = $('#main-box').html();
				$('#txtSelect').val(html);
			}
		});

     
    } );

} )( jQuery );
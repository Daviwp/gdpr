//CONSTANT URL PLUGIN
jQuery("#id_radio input:radio" ).on( "click", function( event ) {
	//PREVIEW
	var rockClass = ['dwp_gdpr_ocean', 'dwp_gdpr_light', 'dwp_gdpr_forest'];
	for( var i = 0 ; i < rockClass.length; ++i )
		if(jQuery(this).val() != rockClass[i])											
		jQuery( '.dwp_gdpr-tema' ).removeClass( rockClass[i] );
		jQuery( '.dwp_gdpr-tema' ).addClass(jQuery(this).val());
});
jQuery(".dwp_gdpr-front .rock_button" ).on( "click", function( event ) {
	//COOKIES
	var date = new Date();
	date.setTime(date.getTime()+31536000000);
	document.cookie='dwp_gdpr_cookies=true; expires=' + date.toGMTString() + '';
	jQuery( '.dwp_gdpr-tema' ).fadeOut( "slow", function() {
		jQuery(this).remove();
	});
});
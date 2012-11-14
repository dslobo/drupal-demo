// vertically and horizontally center ring images

jQuery(document).ready( function() {
	var width = jQuery('.page-taxonomy .field-name-field-featured-image img').width();
	var lmargin = -(width/2);

	var height = jQuery('.page-taxonomy .field-name-field-featured-image img').height();
	var tmargin = -(height/2);

	jQuery('.page-taxonomy .field-name-field-featured-image img').css({ 
	    'margin-top' : tmargin,
	    'margin-left' : lmargin
	    });
});
$(function(){

	// Color - Hair
	var color 	 = $('#hair-color').val();
	var	hexcolor = $('#hexcolor-hair');

	hexcolor.html(color);

	$('#hair-color').on('change', function() {
	    hexcolor.html(this.value);
	});


	// Color - Eye
	var color_eye 	 = $('#eye-color').val();
	var	hexcolor_eye = $('#hexcolor-eye');

	hexcolor_eye.html(color);

	$('#eye-color').on('change', function() {
	    hexcolor_eye.html(this.value);
	});


	// Size - Nose
    var val = $('#nose-size').val();  
        output  = $('#output-nose-size');  
  
    output.html(val);  
  
    $('#nose-size').change(function(){  
        output.html(this.value);  
    }); 

});
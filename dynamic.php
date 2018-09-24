<!DOCTYPE html>
<html>
<head>
	<title>dynamic</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
</script>
</head>
<body>
<form name="FormData" method="post" action="" >
<div class="wrapper">
<div><input type="text" name="input_array_name[]" placeholder="Input Text Here" /></div>
</div>
<p><button class="add_fields">Add More Fields</button></p>
<input type="submit" value="Submit" />
</form>
</body>
</html>
<script>
$(document).ready(function() {
    var max_fields = 10; 
    var wrapper    = $(".wrapper"); 
    var add_button = $(".add_fields");
    var x = 1; 
	
	$(add_button).click(function(e){
        e.preventDefault();
        if(x < max_fields){ 
            x++; 
            $(wrapper).append('<div><input type="text" name="input_array_name[]" placeholder="Input Text Here" /> <a href="javascript:void(0);" class="remove_field">Remove</a></div>');
        }
    });
	
    $(wrapper).on("click",".remove_field", function(e){ 
        e.preventDefault();
		$(this).parent('div').remove(); 
		x--; 
    })
});
</script>
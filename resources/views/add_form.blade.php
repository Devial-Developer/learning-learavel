<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>


<script type="text/javascript">
	function addMore(argument) {
		var count = Number($('#count').val())+1;
		var addData='';
		addData +=`<li>
			<lavel for="mytext">Email:</lavel>
	    <input type="text" name="email[]" placeholder="email@gmail.com" id="email`+count+`" class="form-control">
	     <lavel for="mytext" class="ml-3">Age:</lavel>
	    <input type="number" name="age[]" placeholder="20 yaer" id="age`+count+`" class="form-control">
	     <lavel for="mytext" class="ml-3">password:</lavel>
	    <input type="password" name="password[]" placeholder="name@123" id="pass`+count+`" class="form-control">
	   <button class="btn btn-outline-primary" onclick="removeField(this)"><i class="fa fa-times" aria-hidden="true"></i></button>
        
		</li>`;
		$('#count').val(count);
		$('#mylist').append(addData);
	}
	function removeField(argument) {
		$(argument).parent().remove();
	}
	function insertData() {
		
	}



// validation in javascript
function insertData() {
	var count = $('#mylist li').length;
	for (var i = 1; i <=count; i++) {
		var email = $('#email'+i).val();
		var age = $('#age'+i).val();
		var pass = $('#pass'+i).val();
		if (email==""&&age==""&&pass=="") {
			
		}else{
			$('#myform').submit();
		}
	}
}



</script>


</head>
<body>   
	   <h3 class="text-center">Add More Form to the button</h3>

   

      <div class="input_fields_wrap ml-5">
   	  	     
	  <form name="getform" action="saveData" method="post" class="form-inline" id="myform">

	  	<input type="button" onclick="addMore()" value="Add More">
	  	<input type="button" onclick="insertData()" value="Submit">

         {{ csrf_field() }}
         <ol id="mylist"><li>
	    <lavel for="mytext">Email:</lavel>
	    <input type="text" name="email[]" placeholder="email@gmail.com" id="email1" class="form-control" >
	     <lavel for="mytext" class="ml-3">Age:</lavel>
	    <input type="number" name="age[]" placeholder="20 yaer" id="age1" class="form-control">
	     <lavel for="mytext" class="ml-3">password:</lavel>
	    <input type="password" name="password[]" placeholder="name@123" id="pass1" class="form-control">
	    <input type="hidden" id="count" value="1">
	    <button class="btn btn-outline-primary" onclick="removeField(this)"><i class="fa fa-times" aria-hidden="true"></i></button>
       
	    </div></li></ol>
    </form>
    </div>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="designlogin.css">
    <link rel="stylesheet" href="./../bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="./../font-awesome-4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
</head>
<body>
    

<div class="formlogin offset-2 col-md-7 col-sm-10">

<form>
<h2 class="text-primary">login</h2>
<div class="form-group">
<label for="">email:</label>
<input type="text" name="email" class="form-control " id="email">
</div>
<div class="form-group">
<label for="">mot de passe:</label>
<input type="text" class="form-control" name="mot" id="mot">
</div>



<a class="btn btn-primary" href="admin.php" id="submit">Login</a>

</form>

<div id="section"></div>


</div>

    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>


<script>

$(document).ready(function() {

    $("#submit").click(function() {
 
        var email = $("#email").val();
    
        var mot = $("#mot").val();
 var sec=$('#section')
 $.ajax({
 type: "POST",
 url: "./getlogin.php",
 data: {
  email: email,mot:mot
 },
 success: function(data) {
  console.log(data)
  $('#section').html(data)
 },
 error: function(xhr, status, error) {
 console.error(xhr);
 }
 });
 
 });
})
</script>




</body>
</html>
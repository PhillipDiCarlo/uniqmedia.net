<!DOCTYPE html>
<html>

<head>
<!meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sign Up </title>
<!style type="text/css">

<script src="http://d3js.org/d3.v3.min.js" charset="utf-8"></script>
<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

<script type="text/javascript">
	function validateForm(){
            var user=document.forms["myForm"]["user"].value;
            var pass=document.forms["myForm"]["pass"].value;
            var pass1=document.forms["myForm"]["pass1"].value;
            
            if (user==null || user==""){
                alert("Username must be filled out");
                return false;
            }
            if (pass == null || pass == "" || pass != pass1){
                alert("Password must not be empty and password fields must match");
                return false;
            }
            return true;
        }
		
</script>


</head>

<body>

<?php
echo "My first PHP script!";
?>

<form name="myForm" action="performSignUp.php" onsubmit="return validateForm()" method="post">
	Username:
	<input type="text" name="user">
	<br>
	Password:
	<input type="password" name="pass">
	<br>
	Retype Password:
	<input type="password" name="pass1">
	<br>
	<input type="submit" value="Submit">
</form>


</body>
</html>




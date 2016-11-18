
<!doctype html>
<html lang="en">

<html>
<head>


	<meta charset="utf-8"/>
	<title>Sign Up</title>
		
	<link rel="stylesheet"  href="css/bootstrap.css" type="text/css"/>
	<link rel="stylesheet"  href="css/bootstrap-responsive.css" type="text/css"/> 
	
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<script type="text/javascript"> 
	
	
		
		function showUser(str)
		{

			 

		  if (str=="")
		  {
		    document.getElementById("error-email").innerHTML="please input the email address";
		    
		    return;
		  } 
		  if (window.XMLHttpRequest)
		  {// code for IE7+, Firefox, Chrome, Opera, Safari
		    xmlhttp=new XMLHttpRequest();
		  }
		  else
		  {// code for IE6, IE5
		    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		  }


		  xmlhttp.onreadystatechange=function()
		  {
		    if (xmlhttp.readyState==4 && xmlhttp.status==200)
		    {
		    email=xmlhttp.responseText;
			document.getElementById("error-email").innerHTML=xmlhttp.responseText

		    }
		  }
		  xmlhttp.open("GET","validate_email_form.php?q="+str,true);
		  xmlhttp.send();
		}
		
		
		
		
		var first_pass="";
var second_pass="";
var email="";

		function testpass(password,email){
    var score = 0;
    if (password.length < 4 ) { return -4; }
    if (typeof(email) != 'undefined' && password.toLowerCase() == email.toLowerCase()){return -2}
    score += password.length * 4;
    score += ( repeat(1,password).length - password.length ) * 1;
    score += ( repeat(2,password).length - password.length ) * 1;
    score += ( repeat(3,password).length - password.length ) * 1;
    score += ( repeat(4,password).length - password.length ) * 1;
    if (password.match(/(.*[0-9].*[0-9].*[0-9])/)){ score += 5;}
    if (password.match(/(.*[!,@,#,$,%,^,&,*,?,_,~].*[!,@,#,$,%,^,&,*,?,_,~])/)){ score += 5 ;}
    if (password.match(/([a-z].*[A-Z])|([A-Z].*[a-z])/)){ score += 10;}
    if (password.match(/([a-zA-Z])/) && password.match(/([0-9])/)){ score += 15;}
    if (password.match(/([!,@,#,$,%,^,&,*,?,_,~])/) && password.match(/([0-9])/)){ score += 15;}
    if (password.match(/([!,@,#,$,%,^,&,*,?,_,~])/) && password.match(/([a-zA-Z])/)){score += 15;}
    if (password.match(/^\w+$/) || password.match(/^\d+$/) ){ score -= 10;}
    if ( score < 0 ){score = 0;}
    if ( score > 100 ){ score = 100;}
    return score;
     
    function repeat(len,str){
    var res = "";
    for (var i = 0; i < str.length; i++ ){
        var repeated = true;
        for (var j = 0, max = str.length - i - len; j < len && j < max; j++){
            repeated = repeated && (str.charAt(j + i) == str.charAt(j + i + len));
        }
        if (j < len) repeated = false;
        if (repeated) {
            i += len - 1;
            repeated = false;
        }else{
            res += str.charAt(i);
        }
    }
    return res;
    }
}


function checkpass(pass){
    var email = document.getElementById('email').value;
    var score = testpass(pass.value,email);
    var password1_label = document.getElementById('password1_label');
    if(score == -2){
        password1_label.innerHTML = 'can not be same with the email';
    }else{
	first_pass="1";
        var color = score < 34 ? '#edabab' : (score < 68 ? '#ede3ab' : '#d3edab');
        var text = score < 34 ? 'Weak' : (score < 68 ? 'Medium' : 'Strong');
        var width = score + '%';
        password1_label.innerHTML = "<span style='width:"+width+";display:block;overflow:hidden;height:20px;line-height:20px;background:"+color+";'>"+text+"</span>";
    }
}

function checksecondpass(secondpass){
var pass1=document.getElementById('pass1').value;
var pass2=document.getElementById('pass2').value;
if(pass1!=pass2){
document.getElementById("password2_label1").innerHTML="Your password do not match!";
}
else{
password2_label1.innerHTML='';
second_pass="1";
}

}

	</script>
</head>

<body>



<?php
// define variables and set to empty values
session_start();
 $FNErr = $LNErr = $emailErr = $FPErr=$SPErr='';
$FNErr1 = $LNErr1 = $emailErr1 = $FPErr1=$SPErr1='';
$FN=$LN=$email=$phone=$FP=$SP=$address=$city=$state=$ZIP='';
if ($_SERVER["REQUEST_METHOD"] == "POST") {


   if (empty($_POST["phone"])) {
     $phone='';
$_SESSION['sess_phone11']=$phone;
   } 
	else{
	$phone=$_POST["phone"];
$_SESSION['sess_phone11']=$phone;
	}


   
if (empty($_POST["address"])) {
     $address='';
$_SESSION['sess_addr11']=$address;
   } 
	else{
	$address=$_POST["address"];
$_SESSION['sess_addr11']=$address;
	}
   
if (empty($_POST["city"])) {
     $city='';
$_SESSION['sess_city11']=$city;
   } 
	else{
	$city=$_POST["city"];
$_SESSION['sess_city11']=$city;
	}
   
if (empty($_POST["state"])) {
     $state='';
$_SESSION['sess_state11']=$state;
   } 
	else{
	$state=$_POST["state"];
$_SESSION['sess_state11']=$state;
	}
   
if (empty($_POST["ZIP"])) {
     $ZIP='';
$_SESSION['sess_ZIP']=$ZIP;
   } 
	else{
	$ZIP=$_POST["ZIP"];
$_SESSION['sess_ZIP']=$ZIP;
	}
   





        
   
   
   if (empty($_POST["FP"])) {
     $FPErr = 'password is required';
   } 
	else{
	$FP=$_POST["FP"];
	$FPErr1='√'; 
$_SESSION['sess_fp11']=$FP;
	}
if (empty($_POST["SP"])) {
     $SPErr = 'second password is required';
   } 
	else{
	$SP=$_POST["SP"];
	if($SP!=$FP){
	$SPErr='first password and second password are different!';
	}
	else{
	$SPErr1='√';
$_SESSION['sess_sp11']=$SP;
	} 
	}


if (empty($_POST["FN"])) {
     $FNErr = 'first name is required';
   } else {
     $FN = $_POST["FN"];
	$FNErr1='√';
$_SESSION['sess_fn11']=$FN;
   }

if (empty($_POST["LN"])) {
     $LNErr = 'last name is required';
   } else {
     $LN =$_POST["LN"];
	$LNErr1='√';
$_SESSION['sess_ln11']=$LN;

   }
}



if($FNErr1 =='√'&& $LNErr1 =='√'&& $FPErr1=='√'&&$SPErr1=='√'&&$_SESSION['email_error1']=='√'){
header("Location:register.php");
}

?>
	<div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<a class="brand" href="#">UT Dallas</a>
					<div class="nav-collapse">
					<ul class="nav">
						<li><a href="sign-in.php">Sign In</a></li>
						<li class="active"><a href="sign-up.php">Sign Up</a></li>
					</ul>
				</div><!--/.nav-collapse -->
			</div>
		</div>
	</div>
	
	<div class="container">
		<div class="hero-unit">


	<div class="label1"><b>Email.</b> <span class="error" id="validate-email">* </span> 
	</br>
	<input style="width: 35%;" type="text" id="email" class="input-block-level" name="email" onchange="showUser(this.value)" /> 
	<span id="error-email"><p></p></span><span id="error-email" style="color:red;"><p></p></span></div>


  <div class="panel-body">
<form class="form-signup"  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	
			<div class="label1">First Name <span class="error">* </span></div>
				<input style="width: 25%;" type="text" class="input-block-level" name="FN" value=""><span class="error1"><?php echo $FNErr;?></span></span><span class="error2"><?php echo $FNErr1;?></span>
				
				
			<div class="label1">Last Name <span class="error">* </span></div>
				<input style="width: 25%;" type="text" class="input-block-level" name="LN" value=""><span class="error1"><?php echo $LNErr;?></span></span><span class="error2"><?php echo $LNErr1;?></span>

			<div class="label1">Phone</div>
				<input style="width: 25%;" type="text" class="input-block-level" name="phone" value="">

            <div class="label1">Password <span class="error">* </span></div>
				<input style="width: 25%;" type="password" class="input-block-level" placeholder="Password" name="FP" id="pass1" onkeyup="javascript:checkpass(this)" >
			<span id="password1_label" style="width:160px; border:1px solid #F0F0F0"></span> 
			
			<div class="label1">Password <span class="error">* </span></div>
				<input style="width: 25%;" style="width: 30%;" type="password" class="input-block-level" placeholder="Retype Password" name="SP" id="pass2" onkeyup="javascript:checksecondpass(this)"  >
			<span id="password2_label" style="width:160px;border:1px solid #F0F0F0"></span> 
				<p id="password2_label1" style="color:red"></p>

				
			<div class="label1">Address</div>
				<input type="text" class="input-block-level" name="address" value="">
				
			<div class="label1">City</div>
				<input type="text" class="input-block-level" name="city" value="">
				
			<div class="label1">State</div>
				<select name="state" id="state">
					<option value=" "> </option>
					<?php include("options-states.php"); ?>
				</select>
				
			<div class="label1">Zip Code</div>
				<input style="width: 25%;" type="text" class="input-block-level" name="ZIP" value="">
				
			<div class="label1"></div>
			<input class="btn btn-large btn-primary" type="submit" value="Sign Up" name="submit1" />
		</form>
		</div>	

	</div> 
	<hr>
		<footer>
			<p>Department of Computer Science<br>
			University of Texas at Dallas<br>
			800 W Campbell Rd, Richardson, TX 75080
			</p>
		</footer>	
	</div>
	
</body>
</html>
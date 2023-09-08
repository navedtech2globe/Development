<?php ob_start(); if(session_status()!=PHP_SESSION_ACTIVE){ @session_start(); } 
//session_regenerate_id(true);
//$_SESSION['name']=(string)"hello";
//echo $_SESSION['name'];
//print_r($_SESSION);
//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL); 
?>
<section class="inner-getin-touch"  >
<div class="container"> 
   	<h2>Discuss Your Project <span>For more information about our Services & Products, kindly write-in to us at</span></h2>  
	<div class="row">    
    <div class="col-md-4 col-xs-12">
	<div class="emailid-block rows">  
	<a href="mailto:info@tech2globe.com" class="transition" tabindex="-1">   
	<img class="lazyload" data-src="images/sprite.png">     
	<span class="small-text">mail to our sales department</span> 
	<span class="large-text">info@tech2globe.com</span>        </a>       
	</div>                </div>        <div class="col-md-4 col-xs-12">  
	<div class="emailid-block voicemsg rows marT20">      
	<a href="skype:info.tech2globe" class="transition" tabindex="-1"><img class="lazyload" data-src="images/sprite2.png" /> 
	<span class="small-text rows">Our Skype Id</span> <span class="large-text rows">info.tech2globe</span> </a>   
	</div>        </div>        <div class="col-md-4 col-xs-12">        <div class="emailid-block voicemsg rows marT20">  
	<a href="" class="transition" tabindex="-1"><img class="lazyload" data-src="images/sprite3.png" />
	<span class="small-text rows">Call Our Sales Department</span> <span class="large-text rows">IN : +91 - 9999875038, </span><br>
	<span class="large-text rows">US : +1-516-858-5840</span> </a>        </div>        </div>        </div>          
	<h3>Get in Touch</h3>		<div class="row"><!--<div class="alert alert-success" ng-show="emailConfirm">  
	<strong>Success!</strong> Email sent successfully!</a>.</div>-->		<!--<form method="post" ng-submit="submitForm()" name="contactForm" novalidate>--><!--<form id="contact" name="contact" method="post">-->
		<?php
$min  = 1;
$max  = 10;
$num1 = rand( $min, $max );
$num2 = rand( $min, $max );
$sum  = $num1 + $num2;
$actual_link = str_replace('.php','','http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF']);
?>
	<form method="post" action="" name='contact' onsubmit="IsEmpty();doSubmit();" id='contact-us'  enctype='multipart/form-data'>
	<div class="col-sm-6 col-xs-12">	
	<div class="form-group"><input class="form-control input-1" placeholder="Enter Name" type="text" onkeypress="return withoutspecialnumeric(event)" name="name" required></div>	
	<div class="form-group"><input class="form-control input-2" placeholder="Enter Email"  onkeyup="nospaces(this)"  type="email" name="mailid" required></div>
	<div class="form-group"><input name="pagelink" value="<?php echo $actual_link; ?>"  type="hidden" />
    <input name="sumin" value="<?php echo $sum; ?>"  type="hidden" />
    <input class="form-control input-3" placeholder="Enter Mobile No." type="text" name="phone" onkeypress='return isNumberKey(event)' minlength="10" maxlength="13" required></div>
	<div class="form-group"><select class="form-control input-4" name="countrycode" required>

	<?php include("include/countryCodes.php"); ?></select></div><div style="display:none" class="alert alert-danger" id='msgshow'>Please select country </div></div>
	<div class="col-sm-6 col-xs-12">	
	<div class="form-group"><textarea class="form-control input-5 inner-textbox" placeholder="Enter Message" name="comment" required></textarea></div>
	<div class="form-group"> 
    <div class="text-left text-white">
<strong>Captcha    Please enter sum :</strong>  <span class="badge badge-secondary" style="margin-right: 5px;background-color: black;
    color: #fff;
    padding: 6px 10px;"><?php echo $num1 ;?></span>+<span class="badge badge-secondary" style="margin-left: 5px;
    margin-right: 5px;background-color: black;
    color: #white;
    padding: 6px 10px;"><?php echo $num2 ;?></span> ?</div>
     <input type="text" class="form-control quiz-control" id="quiz">
	 <div style="display:none" class="alert alert-danger" id='msgcaptch'>Please enter right captcha </div>
     </div>
	
	<div class="form-group"><!--<input type="submit" class="form-control btn-submit btn" value="Submit Query" ng-disabled="contactForm.$invalid" >-->
	<input type="submit" class="form-control btn-submit btn" id='ali2' onclick='IsEmpty();' data-res="<?php echo $sum; ?>"  disabled value="Submit Query" name="Submit Query" ></div></div>
	</form> 
<script>
const submitButton = document.getElementById("ali2");
const quizInput = document.querySelector(".quiz-control");
quizInput.addEventListener("input", function(e) {
    const res = submitButton.getAttribute("data-res");
   if ( this.value == res ) {
		document.getElementById("msgcaptch").style.display="none";
		//var checkkk=IsEmpty();
		//if(checkkk == true){submitButton.removeAttribute("disabled");}else{submitButton.setAttribute("disabled", "");}
        submitButton.removeAttribute("disabled");
    } else {
		document.getElementById("msgcaptch").style.display="block";
        submitButton.setAttribute("disabled", "");
    }
});
	function doSubmit() {
  document.getElementById('contact-us').action ='innerformemail';
  return true;
}
</script>	
	
<script>
	function IsEmpty() {
  if (document.forms['contact'].countrycode.value === "") {
    //alert("Please select country");
     document.getElementById("msgshow").style.display="block";
	return false;
  }
   document.getElementById("msgshow").style.display="none";
  return true;
}
	function nospaces(t){
  if(t.value.match(/\s/g)){
    t.value=t.value.replace(/\s/g,'');
  }
}
	function isNumberKey(evt){
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
}
function alpha(e) {
    var k;
    document.all ? k = e.keyCode : k = e.which;
    return ((k > 64 && k < 91) || (k > 96 && k < 123) || k == 8 || k == 32 || (k >= 48 && k <= 57));
}

function withoutspecialnumeric(evt)
{
	var charCode = (evt.which) ? evt.which : event.keyCode
	if((64 < charCode && charCode < 91) || (96 <charCode && charCode< 123) || (charCode==32) || charCode == 8  || charCode == 46)
	{
		return true;
	}else
	{
		return false;
	}
}

</script>    </div></div>	</section>
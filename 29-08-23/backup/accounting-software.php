<!doctype html>
<html>
<?php include("include/meta.php"); ?>
<style>
p {
    color: #515151;
    font-family: calibri;
    font-size: 19px;
    line-height: 27px !important;
    text-align: justify;
}

h1 {
    display: inline-block;
    position: relative;
    font-size: 36px;
    margin-bottom: 10px;
    line-height: inherit;
    text-transform: capitalize;
    text-align: left !important;
    font-family: system-ui;
    font-weight: 700;
	    font-family: calibri;
}

.cartFeature h3 {
    margin-top: 5px;
    margin-bottom: 1px;
    color: #17161a;
    font-size: 26px;
	    font-family: calibri;
}

.faq-title {
    text-align: center;
    font-size: 17px;
    border-bottom: 2px dashed #ffffff;
    margin-bottom: 30px;
    padding-bottom: 10px;
    color: #ffffff;
	    font-family: calibri;
}

.faq .faq-list {
    padding: 0;
    list-style: none;
	    font-family: calibri;
}

.faq .faq-list li {
    background-color: #fff;
    margin-bottom: 10px;
    border-radius: 10px;
    padding: 10px 40px;
	    font-family: calibri;
}

.faq .faq-list a {
    display: block;
    position: relative;
    font-size: 16px;
    font-weight: 600;
    color: #333333;
    text-decoration: none;
	    font-family: calibri;
}

.collapsed i.fas.fa-arrow-up {
    transform: rotate(180deg);
}
.collapsed i.fas.fa-arrow-up {
}
.faq .faq-list i {
    font-size: 16px;
    position: absolute;
    left: -25px;
    top: 6px;
    transition: 1s;
	    font-family: calibri;
}


.Clientlg-outer {
    width: 20%;
    float: left;
    /* padding: 0px; */
    box-shadow: inset -1px -1px #c6ccd1, -1px -1px #c6ccd1;
}

.technologies-img {
    padding: 10px 10px;
    margin: 30px 0 0 0;
    transition: all 0.3s ease 0s;
    text-align: center;
    display: flex;
    align-items: center;
    min-height: 105px;
    background: #fff;
    border: 1px solid #a7a3a3;
	    font-family: calibri;
}

.padding-five-all {
    padding: 5%;
}
.border-width-2 {
    border-width: 2px;
}
.border-all {
    border: 2px solid #ededed;
}
.letter-spacing-minus-1 {
    letter-spacing: -1px;
}
.text-extra-dark-gray, .btn.text-extra-dark-gray {
    color: #232323;
}

.margin-10px-bottom {
    margin-bottom: 10px;
}

.feature-box-10 .number {
    display: flex;
    font-size: 30px;
    height: 90px;
    margin: 0 auto;
    text-align: center;
    vertical-align: middle;
    width: 90px;
    position: relative;
    align-items: center;
    justify-content: center;
	    font-family: calibri;
}
.border-color-deep-pink {
    border-color: var(--base-color) !important;
}

.feature-box-10:hover .number {
    background: var(--base-color);
      color: #dd1f1f;
    border: 20px solid red;
}

.icon-list li {
    position: relative;
    list-style: disc;
    padding-left: 17px;
    font-size: 15px;
    font-family: calibri;
    font-size: 18px;
    color: #000;
    line-height: 32px;
    /* padding-left: 25px; */
	    font-family: calibri;
}


.cartFeature ul li {
    color: #515151;
    font-size: 19px;
    line-height: 25px;
    padding: 0px 0;
	 font-family: calibri;
}

.imple1{
	border: 1px solid #858383dd;
    padding: 18px;
	height:250px;
	
}


.imple2{
    border: 1px solid #858383dd;
    padding: 18px;
	height:288px;
}


@media only screen and (min-width: 330px) and (max-width: 640px){
.imple1 {
    border: 1px solid #858383dd;
    padding: 18px;
    height: 320px;
}}


.form-group .form-control {
background: #fff;
    border: 1px solid #e8e8e8;
    font-size: 14px;
    font-family: 'Roboto', sans-serif;
    color: rgba(0, 0, 0, 0.8);
    box-shadow: inset 0 0 6px rgb(0 0 0 / 0%);
    width: 100%;
    padding: 10px 10px 10px 10px;
    height: auto;
    background-color: #fff;
    background-position: left center;
    background-repeat: no-repeat;
    border-radius: 0;
}


.item {
    background: #fff;
    text-align: center;
    padding: 30px 25px;
    -webkit-box-shadow: 0 0px 25px rgb(0 0 0 / 7%);
    box-shadow: 0 0px 25px rgb(0 0 0 / 7%);
    border-radius: 20px;
    border: 5px solid rgba(0, 0, 0, 0.07);
    margin-bottom: 30px;
    -webkit-transition: all .5s ease 0;
    transition: all .5s ease 0;
    transition: all 0.5s ease 0s;
    height: 280px;
}

.faq {
    padding: 46px 0 25px;
    background: #f7fbff;
}

.faq .section-title {
    margin-bottom: 0px;
}

.faq .section-title h2 {
    margin-bottom: 22px;
}

.faq .accordion .card {
    border: none;
    margin-bottom: 30px;
}

.faq .accordion .card:not(:first-of-type) .card-header:first-child {
    border-radius: 10px;
}

.faq .accordion .card .card-header {
    border: none;
    border-radius: 10px;
    padding: 0;
}

.faq .accordion .card .card-header h5 {
    padding: 0;
}

.faq .accordion .card .card-header h5 button {
    color: #1e3056;
    font-size: 18px;
    font-weight: 500;
    text-decoration: none;
    padding: 0 30px 0 70px;
    height: 80px;
    display: block;
    width: 100%;
    color: rgba(30, 48, 86, 0.8);
    text-align: left;
    background: #fff;
    -webkit-box-shadow: 0px -50px 140px 0px rgba(69, 81, 100, 0.1);
    box-shadow: 0px -50px 140px 0px rgba(69, 81, 100, 0.1);
    border-radius: 10px 10px 0 0;
    position: relative;
}

.faq .accordion .card .card-header h5 button:after {
    position: absolute;
    left: 30px;
    top: 50%;
    margin-top: -10px;
    width: 20px;
    height: 20px;
    background-color: transparent;
    color: #ff5f74;
    text-align: center;
    border: 1px solid #ff5f74;
    border-radius: 50%;
    line-height: 100%;
    content: '\f067';
    font-size: 10px;
    line-height: 18px;
    font-family: "Font Awesome 5 Free";
    font-weight: 900;
}

.faq .accordion .card .card-header h5 button.collapsed {
    background: #fff;
    border-radius: 10px;
    -webkit-box-shadow: none;
    box-shadow: none;
    border: 1px solid rgba(97, 125, 255, 0.2);
}

.faq .accordion .card .card-header h5 button[aria-expanded="true"]:after {
    content: '\f068';
    color: #fff;
    background-image: -webkit-linear-gradient(-180deg, #5e7eff 0%, #ff5f74 30%, #a85fff 100%);
}

.faq .accordion .card .card-body {
    -webkit-box-shadow: 0px 15px 140px 0px rgb(69 81 100 / 10%);
    box-shadow: 0px 15px 140px 0px rgb(69 81 100 / 10%);
    border-radius: 0 0 10px 10px;
    padding-top: 0;
    /* margin-top: 0px; */
    padding-left: 72px;
    padding-right: 70px;
    padding-bottom: 23px;
    color: rgba(30, 48, 86, 0.8);
    line-height: 30px;
    font-size: 17px;
    padding-top: 10px;
    font-family: calibri;
    font-size: 19px;
}
</style>

<body>
<?php include("include/header.php"); ?>
<div class="banner-outer inner-banner banner-1">
<div class="container">
	<div class="row">
    	<div class="col-xs-12">
        <!-- service name change start -->
        	<h2> Accounting Software Services</h2>
            <!-- service name change end -->
        </div>
    </div>
</div>
</div>


<!-- banner end -->
<div class="breadcrumbBg">
  <div class="container">
    <div class="row">
      <ul class="breadcrumb">
        <li><a href="http://www.tech2globe.com/">Home</a></li>
        <li><a href="#s">Services</a></li>
        <li>Accounting Software Services</li>
      </ul>
    </div>
  </div>
</div>
<div class="container-fluid">
  <div class="row  cartFeature">
  <div class="col-sm-10 col-sm-offset-1">
    <div class="col-md-9  col-xs-12">
      <h1 class="text-left pb-2">The Best Accounting Software </h1>
	  <br>
	  <br>
	   <img src="images/accounting-software-services.jpg" alt="accounting-software-services" class="img-responsive">
<br>
<p>
Every organization can only become successful with an advanced Accounting software program. It can assist you in creating professional invoices, recording incoming and outgoing payments, identifying and following up on past-due receivables, streamlining tax administration, and running reports that examine your company's financial health and project for the future, depending on the program.</p>
<br>
<p>While preparing one of the most advanced accounting software systems, we evaluated some of the most popular platforms today to help you pick the finest accounting software for your business. We looked for inexpensive and simple accounting software with time-saving features like automated bank feeds, automatic payment reminders, and online invoicing and payment acceptance. Thus, we have developed software that provides comprehensive, customized, real-time financial reporting, which is critical for monitoring and understanding your company's finances.</p>

<br>
<h2 style="font-size:26px;">Why Should Your Business Have Accounting Software?</h2>
<p>Maximize your financial efficiency with our comprehensive Accounting software solution!</p>
<br>
<div class="col-md-12 border-bottom pt-2 pb-2">
<div class="col-md-2 wpb_single_image" style="border: 2px dotted #e5e2e2;">
<img src="images/Increased-efficiency.png" class="img-responsive">
</div>
<div class="col-md-10 text-left pt-3">

<h2 style="color: #000000 !important; font-size: 19px;text-decoration: underline;"><strong>Improved efficiency</strong></h2>
<p class="text-start">Accounting software can automate many tasks, such as invoicing, payment processing, and financial reporting, which can save businesses time and increase efficiency.</p>
</div>
</div>



<div class="col-md-12 border-bottom pt-2 pb-2">
<div class="col-md-2 wpb_single_image" style="border: 2px dotted #e5e2e2;">
<img src="images/increased-accuracy.png" class="img-responsive">
</div>
<div class="col-md-10 text-left pt-3">

<h2 style="color: #000000 !important; font-size: 19px;text-decoration: underline;"><strong>Increased accuracy</strong></h2>
<p class="text-start">Our software can help to reduce errors and improve the accuracy of financial records. It can also provide features such as automatic alerts for unusual transactions or discrepancies, which can help to prevent mistakes.</p>
</div>
</div>


<div class="col-md-12 border-bottom pt-2 pb-2">
<div class="col-md-2 wpb_single_image" style="border: 2px dotted #e5e2e2;">
<img src="images/review-And-approval.png" class="img-responsive">
</div>
<div class="col-md-10 text-left pt-3">

<h2 style="color: #000000 !important; font-size: 19px;text-decoration: underline;"><strong>Better decision-making</strong></h2>
<p class="text-start">Our Advanced accounting software can provide real-time financial data and analysis tools, helping businesses to make informed decisions about their finances.
</p>
</div>
</div>


<div class="col-md-12 border-bottom pt-2 pb-2">
<div class="col-md-2 wpb_single_image" style="border: 2px dotted #e5e2e2;">
<img src="images/enhanced-security.png" class="img-responsive">
</div>
<div class="col-md-10 text-left pt-3">

<h2 style="color: #000000 !important; font-size: 19px;text-decoration: underline;"><strong>Enhanced security</strong></h2>
<p class="text-start"> Accounting software often includes robust security features such as data encryption and secure login protocols, which can help to protect sensitive financial information.
</p>
</div>
</div>


<div class="col-md-12 border-bottom pt-2 pb-2 mb-3">
<div class="col-md-2 wpb_single_image" style="border: 2px dotted #e5e2e2;">
<img src="images/data-gathering.png" class="img-responsive">
</div>
<div class="col-md-10 text-left pt-3">

<h2 style="color: #000000 !important; font-size: 19px;text-decoration: underline;"><strong>Scalability</strong></h2>
<p class="text-start"> Our Advanced software can scale with the needs of a business, making it a flexible and cost-effective solution for businesses of all sizes.

</p>
</div>
</div>


<div class="col-md-12 border-bottom pt-2 pb-2 mb-3">
<div class="col-md-2 wpb_single_image" style="border: 2px dotted #e5e2e2;">
<img src="images/processing-invoices.png" class="img-responsive">
</div>
<div class="col-md-10 text-left pt-3">

<h2 style="color: #000000 !important; font-size: 19px;text-decoration: underline;"><strong>Invoicing and payment processing</strong></h2>
<p class="text-start">  Tech2Globe's Accounting software can help businesses create and send invoices and process customer payments.

</p>
</div>
</div>



<div class="col-md-12 border-bottom pt-2 pb-2 mb-3">
<div class="col-md-2 wpb_single_image" style="border: 2px dotted #e5e2e2;">
<img src="images/financial-statements.png" class="img-responsive">
</div>
<div class="col-md-10 text-left pt-3">

<h2 style="color: #000000 !important; font-size: 19px;text-decoration: underline;"><strong>Financial reporting</strong></h2>
<p class="text-start">It can generate financial reports, such as profit and loss statements, balance sheets, and cash flow statements.

</p>
</div>
</div>


<div class="col-md-12 border-bottom pt-2 pb-2 mb-3">
<div class="col-md-2 wpb_single_image" style="border: 2px dotted #e5e2e2;">
<img src="images/budget-forecasting.png" class="img-responsive">
</div>
<div class="col-md-10 text-left pt-3">

<h2 style="color: #000000 !important; font-size: 19px;text-decoration: underline;"><strong>Budgeting</strong></h2>
<p class="text-start">Our accounting software includes tools for creating and tracking budgets.


</p>
</div>
</div>


<div class="col-md-12 border-bottom pt-2 pb-2 mb-3">
<div class="col-md-2 wpb_single_image" style="border: 2px dotted #e5e2e2;">
<img src="images/Invoicing-And-Billing.png" class="img-responsive">
</div>
<div class="col-md-10 text-left pt-3">
<h2 style="color: #000000 !important; font-size: 19px;text-decoration: underline;"><strong>Tax preparation</strong></h2>
<p class="text-start">Tech2Globe's accounting software can help businesses to prepare and file tax returns.</p>
</div>
</div>


<div class="col-md-12 border-bottom pt-2 pb-2 mb-3">
<div class="col-md-2 wpb_single_image" style="border: 2px dotted #e5e2e2;">
<img src="images/management-consulting-services.png" class="img-responsive">
</div>
<div class="col-md-10 text-left pt-3">
<h2 style="color: #000000 !important; font-size: 19px;text-decoration: underline;"><strong>Inventory management</strong></h2>
<p class="text-start">Some of our accounting software even includes features for tracking and managing inventory.</p>
</div>
</div>

<br>
<br>

<h2 style="font-size:26px;"class="mt-5"><br><br>You May Fulfill Multiple Purposes With Our Advanced Accounting Software</h2>
<p>Secure, cloud-based accounting software to keep your business running smoothly!</p>
<br>

<div class="col-md-12 border-bottom pt-2 pb-2">
<div class="col-md-2 wpb_single_image" style="border: 2px dotted #e5e2e2;">
<img src="images/compiled-fin.png" class="img-responsive">
</div>
<div class="col-md-10 text-left pt-3">

<h2 style="color: #000000 !important; font-size: 19px;text-decoration: underline;"><strong>General ledger</strong></h2>
<p class="text-start">This is the central database for a company's financial transactions and includes accounts for assets, liabilities, equity, revenue, and expenses.

</p>
</div>
</div>



<div class="col-md-12 border-bottom pt-2 pb-2">
<div class="col-md-2 wpb_single_image" style="border: 2px dotted #e5e2e2;">
<img src="images/account-receivable-monitor.png" class="img-responsive">
</div>
<div class="col-md-10 text-left pt-3">

<h2 style="color: #000000 !important; font-size: 19px;text-decoration: underline;"><strong>Accounts payable and accounts receivable</strong></h2>
<p class="text-start">We provided you with software programs that are efficient in performing and allow a company to track and manage its outstanding bills and invoices, respectively.

</p>
</div>
</div>


<div class="col-md-12 border-bottom pt-2 pb-2">
<div class="col-md-2 wpb_single_image" style="border: 2px dotted #e5e2e2;">
<img src="images/Invoicing-And-Billing.png" class="img-responsive">
</div>
<div class="col-md-10 text-left pt-3">

<h2 style="color: #000000 !important; font-size: 19px;text-decoration: underline;"><strong>Invoicing and billing</strong></h2>
<p class="text-start">Our software programs include tools for creating and sending invoices to customers and tracking payments.

</p>
</div>
</div>


<div class="col-md-12 border-bottom pt-2 pb-2">
<div class="col-md-2 wpb_single_image" style="border: 2px dotted #e5e2e2;">
<img src="images/Pricing-Evaluation.png" class="img-responsive">
</div>
<div class="col-md-10 text-left pt-3">

<h2 style="color: #000000 !important; font-size: 19px;text-decoration: underline;"><strong>Payroll</strong></h2>
<p class="text-start">Our accounting software programs have features for managing payroll, including the ability to calculate and track employee salaries and deductions.


</p>
</div>
</div>



<div class="col-md-12 border-bottom pt-2 pb-2">
<div class="col-md-2 wpb_single_image" style="border: 2px dotted #e5e2e2;">
<img src="images/budget-forecasting.png" class="img-responsive">
</div>
<div class="col-md-10 text-left pt-3">

<h2 style="color: #000000 !important; font-size: 19px;text-decoration: underline;"><strong>Budgeting and forecasting</strong></h2>
<p class="text-start">These features allow a company to plan and track its financial performance over time.


</p>
</div>
</div>



<div class="col-md-12 border-bottom pt-2 pb-2">
<div class="col-md-2 wpb_single_image" style="border: 2px dotted #e5e2e2;">
<img src="images/Bank-Financial-Analysis.png" class="img-responsive">
</div>
<div class="col-md-10 text-left pt-3">

<h2 style="color: #000000 !important; font-size: 19px;text-decoration: underline;"><strong>Reporting and analytics</strong></h2>
<p class="text-start">Many of our accounting software programs provide a range of reports and analytical tools to help a company understand its financial performance and make informed business decisions.
</p>
</div>
</div>

<div class="col-md-12 border-bottom pt-2 pb-2">
<div class="col-md-2 wpb_single_image" style="border: 2px dotted #e5e2e2;">
<img src="images/cash-flow-management.png" class="img-responsive">
</div>
<div class="col-md-10 text-left pt-3">

<h2 style="color: #000000 !important; font-size: 19px;text-decoration: underline;"><strong>Integration with other systems</strong></h2>
<p class="text-start">Our programs can be integrated with other systems, such as CRM software or e-commerce platforms, to provide a more comprehensive view of a company's financial data.
</p>
</div>
</div>


<div class="col-md-12 border-bottom pt-2 pb-2 mb-3">
<div class="col-md-2 wpb_single_image" style="border: 2px dotted #e5e2e2;">
<img src="images/mobile-access.png" class="img-responsive">
</div>
<div class="col-md-10 text-left pt-3">

<h2 style="color: #000000 !important; font-size: 19px;text-decoration: underline;"><strong>Mobile access</strong></h2>
<p class="text-start">Our advanced software can be accessed from various devices, including smartphones and tablets, allowing on-the-go access to financial data.
</p>
</div>
</div>




</div>
     <!-- right side resources start -->
	 

	 
    <!-- Links Changes according to menu -->
	<div class="col-md-3 col-xs-12 sidebar d-none d-sm-block"> 
      <div class="sideBox gotQuestion">
        <h2>Contact Us</h2>  
		  <div class="container contact-bg mb-4">
	<div class="form-sec"> 
	   <form name="qryform" name='contact1' method="post" action=""  onsubmit="doSubmit1();" id='contact-us1'  enctype='multipart/form-data'>
		<div class="form-group newform">         
		  <label>Name:</label>						
		  <input required="" type="text" class="form-control" id="name" onkeypress="return withoutspecialnumeric(event)" placeholder="Enter Name" name="name">
		</div> 
		<div class="form-group newform"> 
		  <label>Email:</label>
		  <input name="pagelink" value="#"  type="hidden" />
		  <input required="" type="email" class="form-control" id="email" placeholder="Enter Email" name="mailid">
		</div>		
		<div class="form-group newform">
		  <label>Phone No.:</label>
		  <input type="text" class="form-control"  placeholder="Enter Mobile No." name="phone" onkeypress='return isNumberKey(event)' minlength="10" maxlength="13" required>
		</div>
		<div class="form-group newform"> 
		  <label>Select Country:</label>
		 <select class="form-control " name="countrycode" required>
	     ﻿<option value="" >Select country</option>
<option value="USA (+1) " >USA (+1) </option>

<option value="UK (+44)" >UK (+44) </option>

<option value="Canada (+1) ">Canada (+1) </option>

<option value="Australia (+61)">Australia (+61) </option>

<option value="Germany (+49)">Germany (+49) </option>

<option value="France (+33) ">France (+33) </option>

<option value="Denmark (+45)">Denmark (+45) </option>

<option value="Singapore (+65)">Singapore (+65) </option>

<option value="UAE (+971)">UAE (+971) </option>

<option value="New Zealand (+64) ">New Zealand (+64) </option>

<option value="Saudi Arabia (+966) ">Saudi Arabia (+966) </option>

<option value="India (+91)">India (+91) </option>

<option value="Bulgaria (+359)">Bulgaria (+359) </option>

<option value="China (+86)">China (+86) </option>

<option value="Japan (+81)">Japan (+81) </option>

<option value="Argentina (+54)">Argentina (+54) </option>

<option value="Austrai (+43)">Austrai (+43) </option>

<option value="Belgium (+32)">Belgium (+32) </option>

<option value="Bahrain (+973)">Bahrain (+973) </option>

<option value="Burundi (+257) ">Burundi (+257) </option>

<option value="Cambodia (+855)">Cambodia (+855) </option>

<option value="Colombia (+57) ">Colombia (+57) </option>

<option value="Croatia (+385) ">Croatia (+385) </option>

<option value="Egypt (+20)">Egypt (+20) </option>

<option value="inland (+358)">Finland (+358) </option>

<option value="Ireland (+353) ">Ireland (+353) </option>

<option value="Georgia (+7880)">Georgia (+7880) </option>

<option value="Guatemala (+502) ">Guatemala (+502) </option>

<option value="Hong Kong (+852)">Hong Kong (+852) </option>

<option value="Iran (+98) ">Iran (+98) </option>

<option value="Indonesia (+62) ">Indonesia (+62) </option>

<option value="Israel (+972)">Israel (+972) </option>

<option value="Italy (+39)">Italy (+39) </option>

<option value="Kuwait (+965)">Kuwait (+965) </option>

<option value="Micronesia (+691) ">Micronesia (+691) </option>

<option value="Lebanon (+961)">Lebanon (+961) </option>

<option value="Norway (+47)">Norway (+47) </option>

<option value="Oman (+968)">Oman (+968) </option>

<option value="Philippines (+63) ">Philippines (+63) </option>

<option value="Poland (+48) ">Poland (+48) </option>

<option value="Russia (+7) ">Russia (+7) </option>

<option value="South Africa (+27)">South Africa (+27) </option>

<option value="Spain (+34)">Spain (+34) </option>

<option value="Sweden (+46) ">Sweden (+46) </option>

<option value="Turkey (+90) ">Turkey (+90) </option>

<option value="Ukraine (+380)">Ukraine (+380) </option>

 <option disabled>______________________________________________________________</option>

<option value="Algeria (+213)">Algeria (+213) </option>

<option value="Andorra (+376)">Andorra (+376) </option>

<option value="Angola (+244)">Angola (+244) </option>

<option value="Anguilla (+1264)">Anguilla (+1264) </option>

<option value="Antigua &amp; Barbuda (+1268)">Antigua &amp; Barbuda (+1268) </option>

<option value="Antilles (Dutch) (+599) ">Antilles (Dutch) (+599) </option>


<option value="Armenia (+374)">Armenia (+374) </option>

<option value="Aruba (+297)">Aruba (+297) </option>

<option value="scension Island (+247) ">Ascension Island (+247) </option>



<option value="Austria (+43) ">Austria (+43) </option>

<option value="Azerbaijan (+994)">Azerbaijan (+994) </option>

<option value="Bahamas (+1242)">Bahamas (+1242) </option>

<option value="Bangladesh (+880) ">Bangladesh (+880) </option>

<option value="Barbados (+1246)">Barbados (+1246) </option>

<option value="Belarus (+375)">Belarus (+375) </option>

<option value="Belize (+501) ">Belize (+501) </option>

<option value="Benin (+229) ">Benin (+229) </option>

<option value="Bermuda (+1441)">Bermuda (+1441) </option>

<option value="Bhutan (+975) ">Bhutan (+975) </option>

<option value="Bolivia (+591) ">Bolivia (+591) </option>

<option value="Bosnia Herzegovina (+387)">Bosnia Herzegovina (+387) </option>

<option value="Botswana (+267)">Botswana (+267) </option>

<option value="Brazil (+55) ">Brazil (+55) </option>

<option value="Brunei (+673) ">Brunei (+673) </option>


<option value="Burkina Faso (+226)">Burkina Faso (+226) </option>

<option value="Cameroon (+237) ">Cameroon (+237) </option>

<option value="Cape Verde Islands (+238) ">Cape Verde Islands (+238) </option>

<option value="Cayman Islands (+1345)">Cayman Islands (+1345) </option>

<option value="Central African Republic (+236)">Central African Republic (+236) </option>

<option value="Chile (+56)">Chile (+56) </option>

<option value="Comoros (+269) ">Comoros (+269) </option>

<option value="Congo (+242)">Congo (+242) </option>

<option value="Cook Islands (+682)">Cook Islands (+682) </option>

<option value="Costa Rica (+506)">Costa Rica (+506) </option>

<option value="Cuba (+53)">Cuba (+53) </option>

<option value="Cyprus North (+90392) ">Cyprus North (+90392) </option>

<option value="Cyprus South (+357)">Cyprus South (+357) </option>

<option value="Czech Republic (+42) ">Czech Republic (+42) </option>

<option value="Diego Garcia (+2463) ">Diego Garcia (+2463) </option>

<option value="Djibouti (+253) ">Djibouti (+253) </option>

<option value="Dominica (+1809)">Dominica (+1809) </option>

<option value="Dominican Republic (+1809)">Dominican Republic (+1809) </option>

<option value="Ecuador (+593)">Ecuador (+593) </option>

<option value="Eire (+353)">Eire (+353) </option>

<option value="El Salvador (+503)">El Salvador (+503) </option>

<option value="Equatorial Guinea (+240) ">Equatorial Guinea (+240) </option>

<option value="Eritrea (+291)">Eritrea (+291) </option>

<option value="Estonia (+372)">Estonia (+372) </option>

<option value="Ethiopia (+251)">Ethiopia (+251) </option>

<option value="Falkland Islands (+500)">Falkland Islands (+500) </option>

<option value="Faroe Islands (+298) ">Faroe Islands (+298) </option>

<option value="Fiji (+679) ">Fiji (+679) </option>

<option value="French Guiana (+594)">French Guiana (+594) </option>

<option value="French Polynesia (+689)">French Polynesia (+689) </option>

<option value="Gabon (+241) ">Gabon (+241) </option>

<option value="Gambia (+220) ">Gambia (+220) </option>

<option value="Ghana (+233) ">Ghana (+233) </option>

<option value="Gibraltar (+350) ">Gibraltar (+350) </option>

<option value="Greece (+30)">Greece (+30) </option>

<option value="Greenland (+299)">Greenland (+299) </option>

<option value="Grenada (+1473)">Grenada (+1473) </option>

<option value="Guadeloupe (+590)">Guadeloupe (+590) </option>

<option value="Guam (+671)">Guam (+671) </option>

<option value="Guinea (+224)">Guinea (+224) </option>

<option value="Guinea - Bissau (+245)">Guinea - Bissau (+245) </option>

<option value="Guyana (+592)">Guyana (+592) </option>

<option value="Haiti (+509) ">Haiti (+509) </option>

<option value="Honduras (+504)">Honduras (+504) </option>

<option value="Hungary (+36) ">Hungary (+36) </option>

<option value="Iceland (+354) ">Iceland (+354) </option>

<option value="Iraq (+964) ">Iraq (+964) </option>

<option value="Ivory Coast (+225) ">Ivory Coast (+225) </option>

<option value="Jamaica (+1876)">Jamaica (+1876) </option>

<option value="apan (+81) ">Japan (+81) </option>

<option value="Jordan (+962)">Jordan (+962) </option>

<option value="Kazakhstan (+7) ">Kazakhstan (+7) </option>

<option value="Kenya (+254) ">Kenya (+254) </option>

<option value="Kiribati (+686)">Kiribati (+686) </option>

<option value="Korea North (+850)">Korea North (+850) </option>

<option value="Korea South (+82) ">Korea South (+82) </option>


<option value="Kyrgyzstan (+996) ">Kyrgyzstan (+996) </option>

<option value="Laos (+856) ">Laos (+856) </option>

<option value="Latvia (+371)">Latvia (+371) </option>

<option value="Lesotho (+266)">Lesotho (+266) </option>

<option value="Liberia (+231)">Liberia (+231) </option>

<option value="Libya (+218) ">Libya (+218) </option>

<option value="Liechtenstein (+417) ">Liechtenstein (+417)  </option>

<option value="Lithuania (+370)">Lithuania (+370)</option>

<option value="Luxembourg (+352) ">Luxembourg (+352) </option>

<option value="Macao (+853)">Macao (+853) </option>

<option value="Macedonia (+389) ">Macedonia (+389) </option>

<option value="Madagascar (+261)">Madagascar (+261) </option>

<option value="Malawi (+265)">Malawi (+265) </option>

<option value="Malaysia (+60)">Malaysia (+60) </option>

<option value="Maldives (+960) ">Maldives (+960) </option>

<option value="Mali (+223) ">Mali (+223) </option>

<option value="Malta (+356)">Malta (+356) </option>

<option value="Marshall Islands (+692) ">Marshall Islands (+692) </option>

<option value="Martinique (+596)">Martinique (+596) </option>

<option value="Mauritania (+222) ">Mauritania (+222) </option>

<option value="Mayotte (+269)">Mayotte (+269) </option>

<option value="Mexico (+52)">Mexico (+52) </option>


<option value="Moldova (+373)">Moldova (+373) </option>

<option value="Monaco (+377)">Monaco (+377) </option>

<option value="Mongolia (+976)">Mongolia (+976) </option>

<option value="Montserrat (+1664)">Montserrat (+1664) </option>

<option value="212">Morocco (+212) </option>

<option value="Morocco (+212)">Mozambique (+258) </option>

<option value="Myanmar (+95) ">Myanmar (+95) </option>

<option value="Namibia (+264)">Namibia (+264) </option>

<option value="Nauru (+674)">Nauru (+674) </option>

<option value="Nepal (+977) ">Nepal (+977) </option>

<option value="Netherlands (+31)">Netherlands (+31) </option>

<option value="New Caledonia (+687)">New Caledonia (+687) </option>

<option value="Nicaragua (+505)">Nicaragua (+505) </option>

<option value="Niger (+227) ">Niger (+227) </option>

<option value="Nigeria (+234)">Nigeria (+234) </option>

<option value="Niue (+683) ">Niue (+683) </option>

<option value="Norfolk Islands (+672)">Norfolk Islands (+672) </option>

<option value="Northern Marianas (+670)">Northern Marianas (+670) </option>

<option value="Palau (+680)">Palau (+680) </option>

<option value="Panama (+507) ">Panama (+507) </option>

<option value="Papua New Guinea (+675) ">Papua New Guinea (+675) </option>

<option value="Paraguay (+595)">Paraguay (+595) </option>

<option value="Peru (+51)">Peru (+51) </option>



<option value="Portugal (+351) ">Portugal (+351) </option>

<option value="Puerto Rico (+1787) ">Puerto Rico (+1787) </option>

<option value="Qatar (+974) ">Qatar (+974) </option>

<option value="Reunion (+262)">Reunion (+262) </option>

<option value="Romania (+40) ">Romania (+40) </option>


<option value="Rwanda (+250)">Rwanda (+250) </option>

<option value="San Marino (+378) ">San Marino (+378) </option>

<option value="Sao Tome &amp; Principe (+239)">Sao Tome &amp; Principe (+239) </option>

<option value="Senegal (+221) ">Senegal (+221) </option>

<option value="Serbia (+381)">Serbia (+381) </option>

<option value="Seychelles (+248) ">Seychelles (+248) </option>

<option value="Sierra Leone (+232)">Sierra Leone (+232) </option>

<option value="Slovak Republic (+421)">Slovak Republic (+421) </option>

<option value="Slovenia (+386) ">Slovenia (+386) </option>

<option value="Solomon Islands (+677)">Solomon Islands (+677) </option>

<option value="Somalia (+252) ">Somalia (+252) </option>


<option value="Sri Lanka (+94)">Sri Lanka (+94) </option>

<option value="St. Helena (+290) ">St. Helena (+290) </option>

<option value="St. Kitts (+1869)">St. Kitts (+1869) </option>

<option value="St. Lucia (+1758) ">St. Lucia (+1758) </option>

<option value="Sudan (+249) ">Sudan (+249) </option>

<option value="Suriname (+597) ">Suriname (+597) </option>

<option value="Swaziland (+268)">Swaziland (+268) </option>


<option value="Switzerland (+41) ">Switzerland (+41) </option>

<option value="Syria (+963)">Syria (+963) </option>

<option value="Taiwan (+886)">Taiwan (+886) </option>

<option value="Tajikstan (+7) ">Tajikstan (+7) </option>

<option value="Thailand (+66)">Thailand (+66) </option>

<option value="Togo (+228)">Togo (+228) </option>

<option value="Tonga (+676)">Tonga (+676) </option>

<option value="Trinidad &amp; Tobago (+1868)">Trinidad &amp; Tobago (+1868) </option>

<option value="Tunisia (+216) ">Tunisia (+216) </option>

<option value="Turkmenistan (+7)">Turkmenistan (+7) </option>

<option value="Turkmenistan (+993)">Turkmenistan (+993) </option>

<option value="Turks &amp; Caicos Islands (+1649)">Turks &amp; Caicos Islands (+1649) </option>

<option value="Tuvalu (+688)">Tuvalu (+688) </option>

<option value="Uganda (+256) ">Uganda (+256) </option>


<option value="United Arab Emirates (+971)">United Arab Emirates (+971) </option>

<option value="Uruguay (+598)">Uruguay (+598) </option>

<option value="Uzbekistan (+7) ">Uzbekistan (+7) </option>

<option value="Vanuatu (+678) ">Vanuatu (+678) </option>

<option value="Vatican City (+379)">Vatican City (+379) </option>

<option value="Venezuela (+58)">Venezuela (+58) </option>

<option value="Vietnam (+84) ">Vietnam (+84) </option>

<option value="Virgin Islands - British (+1284)">Virgin Islands - British (+1284) </option>

<option value="Virgin Islands - US (+1340)">Virgin Islands - US (+1340) </option>

<option value="Wallis &amp; Futuna (+681) ">Wallis &amp; Futuna (+681) </option>

<option value="Yemen (North) (+969)">Yemen (North) (+969) </option>

<option value="Yemen (South) (+967)">Yemen (South) (+967) </option>

<option value="Yugoslavia (+381) ">Yugoslavia (+381) </option>

<option value="Zaire (+243)">Zaire (+243) </option>

<option value="Zambia (+260)">Zambia (+260) </option>

<option value="Zimbabwe (+263)">Zimbabwe (+263)</option>	      </select> 
		</div>
		
		<div class="form-group newform">
		  <label>Issues/query:</label>
		  <textarea name="comment" required class="form-control" id="iq" placeholder="Enter your Issues/query"></textarea>
		</div>  
		  	<div class="form-group newform">
			    <div class="text-left text-dark" style='font-size: 13px;'>
<strong>Captcha    Please enter sum :</strong>  <span class="badge badge-secondary" style="margin-right: 4px;background-color: black;
    color: #fff;
    padding: 6px 8px;">7</span>+<span class="badge badge-secondary" style="margin-left: 4px;
    margin-right: 5px;background-color: black;
    color: #white;
    padding: 6px 8px;">5</span> ?</div><br>
     <input type="text" class="form-control  quiz-control1" id="quiz1">
	 <div style="display:none" class="alert alert-danger" id='msgcaptch1'>Please enter right captcha </div>
			</div>
		
		 <input type="submit" class="btn btn-danger"  id="alii" data-mata="12"  disabled value="Submit" name="Submit"> 

	  </form>
	  </div> 
</div>
      </div> 
  </div> 
<!-- query form --> 
    <div class="col-md-3 col-xs-12 sidebar">
    <div class="sideBox gotQuestion">
      <h2>Resources</h2>
      <ul class="sidelink">
	  <li class="casestudies-link"><a href="#casestudies">Case Studies</a></li>
	  <li class="Ourclients-link"><a href="#Ourclients">Our Clients</a></li> 
	  <li class="Industries-link"><a href="#case-studies">Industries We Serve</a></li> 
		 </ul>
    </div><br>
	
	    <div class="sideBox gotQuestion">
      <h2>Useful Links</h2>
      <ul class="sidelink">
          <li><a href="/catalog-processing-services">Catalog Processing</a></li>
          <li><a href="/data-conversion-services">Data Conversion</a></li>
          <li><a href="/data-extraction-services">Data Extraction</a></li> 
          <li><a href="/document-processing-services">Document Processing</a></li>
          <li><a href="/forms-processing-services">Forms Processing</a></li>
          <li><a href="/insurance-claims-processing-services">Insurance Claims Processing</a></li>
          <li><a href="/invoice-processing-services">Invoice Processing</a></li>
          <li><a href="/order-processing-services">Order Processing</a></li>
          <li><a href="/survey-forms-processing">Survey Forms Processing</a></li>
        </ul>

    </div>
<br>
  
    </div>
    </div>
    </div>
    </div>
    <!-- right side resources end -->




<div class="container-fluid why-t2g-bg pt-3 pb-3 mb-5" style="background-color:#f3f3f3!important;">
    <div class="container">
      <div class="row">
        <div class="section-head col-sm-12 pt-3" style="padding-bottom:5px;"> 
		  <h2 class="main-heading text-center">Why Tech2Globe's  <span> Accounting Software</span></h2>
		  <p>Gain valuable insights into your financial performance with our powerful analytics tools!</p>
        </div>
		 <div class="row">
        <div class="col-lg-3 col-sm-6">
          <div class="item" style="height: 398px;"><img class="img-fluid" src="images/Dm-data/team-icon.png" height="100" width="100" alt="amazone-marketin-service">
            <h6><a href="#">Accounting analytics powered by AI.</a></h6>
            <p>To receive recommendations on the best payment queues and methods, depreciation calculation methods, and more.</p>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="item" style="height: 398px;">  <img class="img-fluid" src="images/Dm-data/budget.png" height="100" width="100" alt="amazone-marketin-service">
            <h6><a href="#">Advanced data security techniques </a></h6>
            <p>Multi-layer encryption, intelligent fraud detection, vulnerability scanning, patching, etc. To restrict access to sensitive financial and commercial data, detect non-compliant or fraudulent transactions, and reduce the risk of malicious user activity.</p>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="item" style="height: 398px;">  <img class="img-fluid" src="images/Dm-data/budget-management.png" height="100" width="100" alt="amazone-marketin-service">
            <h6><a href="#">Cloud computing</a></h6>
            <p>To reduce accounting software maintenance costs, enable speedier updates, and create an easily accessible platform for worldwide accounting process cooperation.</p>

          </div>
        </div>
		
        <div class="col-lg-3 col-sm-6">
          <div class="item" style="height: 398px;">  <img class="img-fluid" src="images/Dm-data/budget-management.png" height="100" width="100" alt="amazone-marketin-service">
            <h6><a href="#">APIs and connectors that are simple to use</a></h6>
            <p>To simplify the integration of accounting software with your critical back-office systems and required third-party applications.</p>

          </div>
        </div>		
		
		</div>
      </div>
    </div>
  </div>



<div class="container-fluid">
<!--testimonial--start--->
		<div class="col-sm-8 col-sm-offset-2 mt-3" id="amazone-testi">

      <h2 class="main-heading text-center"><span>Testimonial</span></h2>
 

               <div class="seprator"></div>
            <div id="#" class="carousel slide" data-ride="carousel">
              <!-- Wrapper for slides -->
              <div class="carousel-inner">
                <div class="item active" style="height: 340px;">
                  <div class="row" style="padding: 20px">
                    <button style="border: none;"><i class="fa fa-quote-left testimonial_fa" aria-hidden="true"></i></button>
                    <p class="testimonial_para">"I have used Tech2Globe Payroll Processing Services for the past five years and have always been extremely satisfied with their level of service. They handle our payroll calculations accurately and timely, and their customer service is always available to answer any questions. I highly recommend their Payroll Processing Services to businesses needing reliable and efficient payroll processing"</p><br>
                    <div class="row">
                        <div class="col-sm-12">
						 <img src="images/avtarte.png" alt="testi-icon">
                    </div>
                    </div>
                  </div>
                </div>
               <div class="item" style="height: 340px;">
                   <div class="row" style="padding: 20px">
                    <button style="border: none;"><i class="fa fa-quote-left testimonial_fa" aria-hidden="true"></i></button>
                    <p class="testimonial_para">"I have been using Tech2Globe online payroll processing for the past year and have had a great experience. Their team is professional, responsive, and always goes above and beyond to meet our needs. Their online platform is easy to use and allows us to track and manage payroll in real time."</p><br>
                    <div class="row">
                        <div class="col-sm-12" >
                         <img src="images/avtarte.png" alt="testi-icon">
                    </div>
                    </div>


                  </div>
                </div>
				
				
				
				
               <div class="item" style="height: 340px;">
                   <div class="row" style="padding: 20px">
                    <button style="border: none;"><i class="fa fa-quote-left testimonial_fa" aria-hidden="true"></i></button>
                    <p class="testimonial_para">"I have been very impressed with the level of service provided by Tech2Globe payroll processing services. They handle our payroll calculations accurately and ensure that our employees are paid on time. Their customer service is always available to answer any questions, and they have helped us stay compliant with changing tax laws and regulations.
"</p><br>
                    <div class="row">
                        <div class="col-sm-12" >
                         <img src="images/avtarte.png" alt="testi-icon">
                      </div>
                    </div>


                  </div>
                </div>				
              </div>
            </div>
            <div class="controls testimonial_control pull-right">
                <a class="left fa fa-chevron-left btn btn-default testimonial_btn" data-slide="prev"></a>

                <a class="right fa fa-chevron-right btn btn-default testimonial_btn" data-slide="next"></a>
              </div>
        </div>
<!--testimonial--end--->

</div>










<div class="container-fluid mt-3">
<section class="faq mb-5 mt-3">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-12 col-lg-12 text-center">
                    <div class="section-title text-center">
							<h2 class="main-heading">FAQ<span>'s</span></h2>
                    </div>
                </div>
            </div>
    
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <div class="accordion" id="accordionExample">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                                What features does the software offer?
                                            </button>
                                        </h5>
                                    </div>
    
                                    <div id="collapseOne" class="collapse" data-parent="#accordionExample">
                                        <div class="card-body">
                                            	Some standard features of our accounting software include the ability to create and send invoices, track expenses, manage payroll, generate financial reports, and track inventory. Different software packages may offer different sets of features, so it's essential to choose a package that meets the specific needs of your business.
                                        </div>
                                    </div>
                                </div>
    
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                	Is the software easy to use?
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseTwo" class="collapse" data-parent="#accordionExample">
                                        <div class="card-body">
                                   Most of our modern accounting software is designed to be user-friendly and easy to navigate. We bring the best in this business and offer training resources and customer support to help users get up to speed.
                                        </div>
                                    </div>
                                </div>
    
  
						
								
								
								
                            </div>
    
                            <div class="col-xl-6 col-lg-6">
 
                                       <div class="card">
                                    <div class="card-header">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                               How much does the software cost?
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseThree" class="collapse" data-parent="#accordionExample">
                                        <div class="card-body">
                                         The cost of our accounting software can vary depending on the features and capabilities of the package. Primarily, our software is available on a subscription basis, while others are purchased outright. It's essential to carefully consider the needs of your business while choosing our packages that offer good value for your money.
                                        </div>
                                    </div>
                                </div>
    
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapseThree">
                                              Is the software compatible with my other business tool
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapse4" class="collapse" data-parent="#accordionExample">
                                        <div class="card-body">
                                 Tech2Globe's accounting software packages integrate with other business tools, such as customer relationship management (CRM) and point-of-sale (POS) systems. It's essential to check that the software you choose is compatible with the other tools you use to run your business.
                                        </div>
                                    </div>
                                </div>
								
								

                            </div>
    
                        </div>
    
                    </div>
    
                </div>
            </div>
        </div>
    </section>

</div>



<?php include("include/inner-form.php"); ?>
<?php include("include/footer.php"); ?>


   
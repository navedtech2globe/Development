<?php

if (isset($_POST['name']) and isset($_REQUEST['pagelink'])) {

    //print_r($_POST);exit;
    //$email_a = $con->real_escape_string($_REQUEST['mailid']);
    $email_a = $_REQUEST['mailid'];
    //$Link = $con->real_escape_string($_REQUEST['pagelink']);
    $Link = str_replace("http:", "https:", $_REQUEST['pagelink']);

    if (filter_var($email_a, FILTER_VALIDATE_EMAIL)) {
        echo " ";
    } else {
        $Link = $_REQUEST['pagelink'];

        echo '<script>alert("Please enter a valid email.");location.href="' . $Link . '";</script>';
        exit();
    }

    //$name = $con->real_escape_string($_REQUEST['name']);
    $name = $_REQUEST['name'];
    //$countrycode = $con->real_escape_string($_REQUEST['countrycode']);
    $countrycode = $_REQUEST['countrycode'];
    //$phone = $con->real_escape_string($_REQUEST['phone']);
    $phone = $_REQUEST['phone'];
    //$comment = $con->real_escape_string($_REQUEST['comment']);
    $comment = $_REQUEST['comment'];
    $Link = $_REQUEST['pagelink'];
    //$UsdCode = $con->real_escape_string($_REQUEST['countrycode']);
    $UsdCode = $_REQUEST['countrycode'];

    //print_r($_REQUEST); exit;

    //$secretAPIkey = '6LcaW70hAAAAAKNwZz04TXOmY8w7H_eZKaTBKVo3';

    //$verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secretAPIkey.'&response='.$_REQUEST['g-recaptcha-response']);

    //$responseData = json_decode($verifyResponse);

    //if($responseData->success)

    //{

    $from_eml = 'info@tech2globe.com';


    $static = 'Tech2globe.com';



    /*$your_email = "info@tech2globe.com";*/

    $your_email = "info@tech2globe.com";

    $email_subject = "Enquiry on Tech2globe.com";
    //$email_content= "You have got an enquiry on \"https://www.tech2globe.com\":\n\n<br><br>";
    $header = "from: $static <" . $from_eml . ">";

    $header = "from: $static <" . $from_eml . ">";
    $header .= '' . "\r\n";
    $header .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    $headera = "from: $name <" . $email_a . ">";
    $headera .= '' . "\r\n";
    $headera .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";


    $message = '

<html>

<head>

  <title>Hire Virtual Assistant | #1 Database Management Company | Tech2globe</title>

</head>

<body style="font-family:Arial, Helvetica, sans-serif;">

  

  <p>Name: ' . $name . '</p>

  <p>Countrycode: ' . $UsdCode . '</p>

  <p>Phone: ' . $phone . '</p>

  <p>Mail ID: ' . $email_a . '</p>

  <p>Comment: ' . $comment . '</p>

  <table>';

    $message .= '<tr><td style=" font-size:14px; font-family:Arial, Helvetica, sans-serif;">Send from Page: ' . $Link . '<br><br></td></tr>';

    $message .= '</table></body></html>';



    $email_content1 = "Thank you for your enquiry. Our team will get back to you within 1 business day.";





    if (@mail($your_email, $email_subject, $message, $headera) && @mail($email_a, "Thank you - Enquiry Received On Tech2globe", $email_content1, $header)) {



        echo '<script>location.href="https://tech2globe.com/thank-you";</script>';
    } else {

        $Link = str_replace("http:", "https:", $_REQUEST['pagelink']);

        echo '<script>alert("Please enter a valid email.");location.href="' . $Link . '";</script>';

        exit();
    }



    //else{

    //  echo '<script>alert("Please submit captcha ");</script>';

    //  echo '<script>location.href="/";</script>';

    //}

    echo '<script>location.href="thank-you";</script>';

    $Link = str_replace("http:", "https:", $_REQUEST['pagelink']);

    echo '<script>alert("Thank you for your enquiry. Our team will get back to you within 1 business day. ");location.href="' . $Link . '";</script>';

    exit();
}
?>

<!doctype html>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta property="title" content="Data Extraction Services | Hire Virtual Assistant Experts - Tech2Globe">
<meta name="description" content="Tech2Globe's virtual assistant experts specialize in data extraction services. Extract valuable insights from your data efficiently." />
<meta name="keywords" content="Data Entry Services , Data Processing Services , Data Conversion Services , Data Extraction Services , Data Scraping Services , Customer Support Services , BPO Services (Business Process Outsourcing) , Backend Support Services , Hire Virtual Assistant">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="author" content="tech2globe">
<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">

<!-- theme meta -->


<title>Hire Virtual Assistant 
</title>

<!-- Favicon -->
<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico" />
<!-- bootstrap.min css -->
<link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
<!-- Animate Css -->
<link rel="stylesheet" href="plugins/animate-css/animate.css">
<!-- Themify icon Css -->
<link rel="stylesheet" href="plugins/themify/css/themify-icons.css">
<link rel="stylesheet" href="plugins/magnific-popup/magnific-popup.css">
<!-- Slick Carousel CSS -->
<link rel="stylesheet" href="plugins/slick-carousel/slick/slick.css">
<link rel="stylesheet" href="plugins/slick-carousel/slick/slick-theme.css">
<link rel="stylesheet" href="plugins/owl-carousel/owl.css">

<!-- Main Stylesheet -->
<link rel="stylesheet" href="css/style.css">

<style>
    .navbar-collapse.collapse.show{
        background-color: none !important;
        padding: 0px !important;
    }
    .hire-virtual-navbar ul.navbar-nav.ml-auto{
        margin-top: 20px;
    }
    .hire-virtual-navbar{
        background-color: #fff !important;
    }
    .alp-Addition .service-blocks {
        padding: 16px !important;
    }

    .alp-Addition .button {
        padding: 6px 38px !important;
    }

    @media only screen and (max-width: 1450px) {
        .alp-Addition .service-blocks {
            height: 272px;
        }
    }
    @media only screen and (max-width: 1024px) {
        .alp-Addition .service-blocks {
            height: 300px;
        }
    }
    @media only screen and (max-width: 768px) {
        .alp-Addition .service-blocks {
            height: auto !important;
        }
        
    }
    @media only screen and (max-width: 445px) {
        .formc{
            margin: 0 10px;
        }
        .formbottom-container{
            margin: 0 10px;
        }
    }
</style>

</head>


<body id="top-header">
    <!-- Navigation Menu -->

    <!-- NAVBAR
    ================================================= -->
    <div class="main-navigation fixed-top site-header" id="mainmenu-area">
        <nav class="navbar navbar-expand-lg ">
            <div class="container align-items-center">
                <a class="navbar-brand" href="#">
                    <div class="logo">

                        <img src="images/banner/logo.png" alt="" class="img-fluid 
                       ">
                    </div>
                </a>
                <!-- Toggler -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarmain" aria-controls="navbarmain" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="ti-menu-alt"></span>
                </button>

                <!-- Collapse -->
                <div class="collapse navbar-collapse text-center text-lg-left hire-virtual-navbar" id="navbarmain">
                    <!-- Links -->
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a href="#service" class="nav-link smoth-scroll">
                                Our Services
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#why-choose-us2" class="nav-link smoth-scroll">
                                why Choose Us
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#why-choose-us" class="nav-link smoth-scroll">
                                Our Clients
                            </a>
                        </li>



                        </li>
                        <li class="nav-item">
                            <a href="#contact" class="nav-link smoth-scroll">
                                Contact Us
                            </a>
                        </li>



                    </ul>


                </div>
            </div>
        </nav>
    </div>


    <!------------------banner1---------------------->
    <!-- Banner -->

    <section class="section cta-home" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h1 class="text-lg pt-5 text-size" style="font-size:50px;">HIRE VIRTUAL <br>ASSISTANT</h1>
                    <p style="color: white; text-align: left; text-shadow: 5px 5px 5px black; font-size: 20px;">Get flexible solutions to easily scale your workforce by hiring professional virtual assistant. With Tech2Globe, get access to support agents of diverse skill sets, offering expertise in various industries, from marketing to finance, enhancing your business's capabilities.</p>

                </div>
                <div class="col-md-4 pt-4 formc mt-5">
                    <h3 class="text-left pb-2" style="color: black;">Get a FREE Quote!</h3>
                    <!-- <form>
        <div class="row">
        <div class="col-md-6">
        <div class="form-group" id="contact-us">
    
    <input type="text" class="form-control" placeholder="Enter Your Name">
  </div>
  </div>
      <div class="col-md-6">
  <div class="form-group">
    
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Enter Email">
  </div></div></div>
  <div class="row">
        <div class="col-md-6">
  <div class="form-group">
    
    <input type="text" class="form-control" placeholder="Enter Phone">
  </div>
</div>
<div class="col-md-6">
  <div class="form-group">
    
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Enter Country">
  </div></div></div>
  
  
  

  <div class="form-group">
    
    <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Describe your business" rows="3"></textarea>
  </div><button type="submit" class="btn btn-primary mb-3 ">Sign in</button></div>
</form> -->

                    <div class="col-md-12 pt-1">
                        <?php // onsubmit="doSubmit1();"
                        $min1  = 0;
                        $max1  = 9;
                        $num11 = rand($min1, $max1);
                        $num21 = rand($min1, $max1);
                        $sum1  = $num11 + $num21;
                        $actual_link = str_replace('.php', '', 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF']);
                        ?>

                        <form name='contact1' method="POST" action="" id='contact-us1' enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group ">

                                        <input required="" type="text" class="form-control" id="name" onkeypress="return withoutspecialnumeric(event)" placeholder="Enter Name" name="name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input name="pagelink" value="<?php echo $actual_link; ?>" type="hidden" />
                                        <input type="email" required="" type="email" class="form-control" id="email" placeholder="Enter Email" name="mailid" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$">
                                    </div>
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group newform">

                                        <select class="form-control " name="countrycode" required>
                                            <option value="">Select country</option>
                                            <option value="USA (+1) ">USA (+1) </option>

                                            <option value="UK (+44)">UK (+44) </option>

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

                                            <option value="Liechtenstein (+417) ">Liechtenstein (+417) </option>

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

                                            <option value="Zimbabwe (+263)">Zimbabwe (+263)</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">

                                        <input type="text" class="form-control" placeholder="Enter Mobile No." name="phone" onkeypress='return isNumberKey(event)' minlength="10" maxlength="13" required>
                                    </div>
                                </div>
                            </div>




                            <div class="form-group">

                                <textarea name="comment" required class="form-control" id="iq" placeholder="Enter your query" rows="3"></textarea>
                            </div>
                            <div class="form-group">
                                <div class="text-left text-dark" style='font-size: 14px;'>
                                    <strong><b>Captcha Please enter sum :</b></strong> <span class="badge badge-secondary" style="margin-right: 4px;background-color: black;
    color: #fff;
    padding: 6px 8px;"><?php echo $num11; ?></span><b>+</b><span class="badge badge-secondary" style="margin-left: 4px;
    margin-right: 5px;background-color: black;
    color: white;
    padding: 6px 8px;"><?php echo $num21; ?></span> ?
                                </div><br>
                                <input type="text" class="form-control  quiz-control1" id="quiz1">
                                <div style="display:none" class="alert alert-danger" id='msgcaptch1'>Please enter right captcha </div>
                            </div>
                            <input type="submit" id="alii" data-mata="<?php echo $sum1; ?>" disabled value="Submit" name="Submit" class="btn btn-white text-dark mb-4" style="    background: #000 !important;
    color: #ffffff !important;" />
                    </div>
                    </form>
                    <script>
                        const submitButton1 = document.getElementById("alii");
                        const quizInput1 = document.querySelector("#quiz1");
                        quizInput1.addEventListener("input", function(e) {
                            const res1 = submitButton1.getAttribute("data-mata");
                            if (this.value == res1) {
                                document.getElementById("msgcaptch1").style.display = "none";
                                //var checkkk=IsEmpty();
                                //if(checkkk == true){submitButton.removeAttribute("disabled");}else{submitButton.setAttribute("disabled", "");}
                                submitButton1.removeAttribute("disabled");
                                //console.log('f1');
                            } else {
                                document.getElementById("msgcaptch1").style.display = "block";
                                submitButton1.setAttribute("disabled", "");
                                //console.log('f12');
                            }
                        });
                        //  function doSubmit1() {
                        //   document.getElementById('contact-us1').action ='innerformemail.php';

                        //   return true;
                        // }
                    </script>

                </div>
            </div>
    </section>




    <!-- Banner -->

    <!---------------phone--

<div class="section phone" id="why-amazon-ppc">
    <div class="container">
        <div class="section-heading">
                    <h2 class="text-lg"><span class="color">How Does Amazon</span> PPC Management<br> Benefit Your Business?</h2>
                      
                </div>
       
        <div class="row">
            <div class="col-md-6"> 
      
       <div class="about-img" style="padding: 20px;">
                    <img src="images/banner/phone.png" alt="" class="img-fluid w-100">
                </div>
            </div>

<div class="col-md-6"> 
<div class="col-md-12 pt-5 back">
    <h4>1.Boost Your Sales and Maximize Profits</h4>
    <p>At the end of the day, sales and profits are what matter most. Our Amazon marketing agency is focused on helping you increase revenue and improve conversions.</p>
<h4>2.Increase Your Visibility on Amazon</h4>
    <p>Simply launching an Amazon Sponsored Products Management campaign isn’t enough. </p>
<h4>3.Expert Management of Bidding Strategies</h4>
    <p>We know that careful monitoring of bidding strategies is crucial for the success of your Amazon Sponsored Products Management campaign. </p>
<h4>4.Regular Reporting and Tracking</h4>
    <p>Knowledge is power, and we want to empower you with the information you need to make informed decisions for your business.</p>


</div>
</div>
 </div>
</div>
    
</div>---------->
    <!---------------phone end ------------>



    <!-- Book preview 
<section class="setcion" id="book">
    <div class="container">
    <div class="section-heading">
                    <h2 class="text-lg"><span class="color">How Does Amazon</span> PPC Management<br> Benefit Your Business?</h2>
                      
                </div>

    

        <div class="row">

            <div class="col-lg-5">

                <div class="book-preview">
                    <img src="images/about/kindle.png" class="background-device img-fluid" alt="">
                    <div class="owl-book owl-carousel owl-theme" style="opacity: 1; display: block;">
                        <div class="owl-wrapper-outer">
                            <div class="owl-wrapper" style="width: 1920px; left: 0px; display: block; transition: all 800ms ease 0s; transform: translate3d(-640px, 0px, 0px);">
                                <div class="owl-item" style="width: 320px;">
                                    <div class="item">
                                        <img src="images/about/book_page.png" alt="" class="img-fluid">
                                        <div class="overlay">
                                            <a href="images/about/book_page.png" class="popup-gallery img-fluid" data-title="Image Caption"><i class="ti-fullscreen"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 320px;">
                                    <div class="item">
                                        <img src="images/about/book_page2.png" alt="" class="img-fluid"> 
                                        <div class="overlay">
                                            <a href="images/about/book_page2.png" class="popup-gallery img-fluid" data-title="Image Caption"><i class="ti-fullscreen"></i></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="owl-item" style="width: 320px;">
                                    <div class="item">
                                        <img src="images/banner/phone.png" alt="" class="img-fluid">
                                        <div class="overlay">
                                            <a href="images/about/book_page.png" class="popup-gallery img-fluid" data-title="Image Caption"><i class="ti-fullscreen"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="section-heading book-info mt-5 mt-lg-0">
                    
                    

                    <ul class="list-unstyled mt-4 mb-5">
                        <li><i class="ti-check mr-3"> Boost Your Sales and Maximize Profits</i><p> Our Amazon marketing agency is focused on helping you increase revenue and improve conversions. </p></li>
            <li><i class="ti-check mr-3"> Increase Your Visibility on Amazon</i><p>Amazon Sponsored Products Management campaign isn’t enough. </p></li>
            <li><i class="ti-check mr-3"> Regular Reporting and Tracking</i><p>We provide regular amazon advertising campaign tracking and reporting.</p></li>
            <li><i class="ti-check mr-3"> Expert Management of Bidding Strategies</i><p> careful monitoring of bidding strategies is crucial for the success of your Amazon Sponsored Products .</p></li>
            
                        
                    
                    </ul>

                
                </div>
            </div>
        </div>
    </div>
</section>  -->

    <!--Features -->
    


    <!-- 1801 -->
    <section class="pt-5" id="service">
        <div class="container">
            <div class="section-heading">
                <h2 class="text-lg"><span class="color">Virtual Assistant Services We Offer</span><br> </h2>
                <p>Curb the struggle of managing extensive administration tasks, and scale your business  growth with contemporary solutions. Hire virtual assistants from the global service provider Tech2Globe Web Solutions. We utilize the latest tools, techniques, and processes to provide world-class and 100% accurate services. Furthermore, we allocate you tech-savvy and proactive VAs that have aptitude in various fields to run admin errands for you and support challenges that you may be facing. Our comprehensive solutions include, but are not limited to:</p>

            </div>
            <div class="row alp-Addition">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="service-blocks mb-4 mb-lg-0">

                        <h4 class="mb-3 mt-2">Data Entry Services</h4>

                        <p>We have been in the data entry business for over 12 years, and our services are backed by this solid experience in handling diverse requirements.</p>
                        <a href="https://tech2globe.com/data-entry-services" class="button">Read More</a>

                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="service-blocks mb-4 mb-lg-0">

                        <h4 class="mb-3 mt-2">Data Processing Services</h4>
                        <p>Data processing is critical to get the most out of your data. We make data processing easy so you can focus on higher-value tasks. <br><br></p>
                        <a href="https://tech2globe.com/data-processing-services" class="button">Read More</a>

                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 mt-4">
                    <div class="service-blocks mb-4 mb-lg-0">

                        <h4 class="mb-3 mt-2">Data Conversion Services</h4>
                        <p>Our team of data experts have been handling data conversion requirements for a diverse clientele from across the world. Outsource data conversion services to us now for the best results.<br><br></p>
                        <a href="https://tech2globe.com/data-conversion-services" class="button">Read More</a>

                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 mt-4">
                    <div class="service-blocks mb-4 mb-lg-0">

                        <h4 class="mb-3 mt-2">Data Extraction Services</h4>

                        <p>Extracting data from huge databases can take time and effort. Our team leverages the power of scripts to browse through massive databases, indexes, fields, tables, etc., to provide clients with highly accurate and effective data for their businesses. </p>
                        <a href="https://tech2globe.com/data-extraction-services" class="button">Read More</a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 mt-4">
                    <div class="service-blocks mb-4 mb-lg-0">

                        <h4 class="mb-3 mt-2">Data Scraping Services</h4>
                        <p>Online data extraction is a tedious, time-consuming process that requires multiple expensive software, servers, and resources. At Tech2globe, we help you take the pain out of the game through our customized and automated web data scraping services. </p>
                        <a href="https://tech2globe.com/web-scraping-services" class="button">Read More</a>

                    </div>
                </div>

                <div class="col-lg-6 col-md-12 col-sm-12 mt-4">
                    <div class="service-blocks mb-4 mb-lg-0">

                        <h4 class="mb-3 mt-2">Customer Support Services</h4>
                        <p>We prioritise customer satisfaction and provide prompt support to address any concerns or inquiries. Our team of experts is readily available to assist you in resolving issues, providing top-notch support.</p>
                        <a href="https://tech2globe.com/customer-support-services" class="button">Read More</a>

                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 mt-4">
                    <div class="service-blocks mb-4 mb-lg-0">

                        <h4 class="mb-3 mt-2">BPO Services (Business Process Outsourcing)</h4>

                        <p>With end-to-end BPO services, focus on your core business activities while we handle your data-related processes. We can reduce operational costs while improving overall efficiency, giving your business a competitive edge.

                        </p>
                        <a href="https://tech2globe.com/call-centre-services" class="button">Read More</a>


                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 mt-4">
                    <div class="service-blocks mb-4 mb-lg-0">

                        <h4 class="mb-3 mt-2">Backend Support Services</h4>
                        <p>Tailored solutions to cater your unique demands. With Tech2Globe’s comprehensive database management keep your systems updated, secure, and optimized for peak performance. <br><br>
                        </p>
                        <a href="https://tech2globe.com/sales-support-services" class="button">Read More</a>

                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 mt-4">
                    <div class="service-blocks mb-4 mb-lg-0">

                        <h4 class="mb-3 mt-2">KPO Services <br>(Knowledge Process Outsourcing)</h4>
                        <p>Harness the prowess of industry experts and knowledge with our KPO services, which focus on high-value data analysis and research. Get strategic insights to make data-driven decisions. </p>
                        <a href="https://tech2globe.com/virtual-assistant-services" class="button">Read More</a>

                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 mt-4">
                    <div class="service-blocks mb-4 mb-lg-0">

                        <h4 class="mb-3 mt-2">Chat Support Services</h4>

                        <p>Upgrade customer engagement and support with professional Chat Support Services. Our agents are trained to provide prompt responses and 24/7 assistant, enhancing the overall customer experience. </p>
                        <a href="https://www.tech2globe.com/chat-support-services" class="button">Read More</a>
                    </div>
                </div>
            </div>

            <div class="row align-items-center mt-5">

                <!-- <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-blocks mb-4 mb-lg-0">

                        <h4 class="mb-3 mt-4">Data Scraping Services</h4>
                        <p>Online data extraction is a tedious, time-consuming process that requires multiple expensive software, servers, and resources. At Tech2globe, we help you take the pain out of the game through our customized and automated web data scraping services. </p>
                        <a href="https://tech2globe.com/web-scraping-services" class="button">Read More</a>

                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-blocks mb-4 mb-lg-0">

                        <h4 class="mb-3 mt-4">Customer Support Services</h4>
                        <p>We prioritise customer satisfaction and provide prompt support to address any concerns or inquiries. Our team of experts is readily available to assist you in resolving issues, providing top-notch support.<br><br></p>
                        <a href="https://tech2globe.com/customer-support-services" class="button">Read More</a>

                    </div>
                </div> -->

            </div>
        </div>
    </section>
    <!-- 1801 -->






    <!--Features 
<section class="" id="why-choose-us">
    <div class="container">
      <div class="section-heading text-center">
                    <h2 class="text-lg text-center"><span class="color">Why Choose Tech2Globe for Your</span><br> Amazon PPC Management?</h2>
                    <P>Looking to take your Amazon business to the next level? Look no further than Tech2Globe,<br> your go-to source for comprehensive Amazon PPC management.</P>
                    


                </div>
        <div class="row align-items-center">
            <div class="col-lg-4 col-md-6 col-sm-6">
                 <div class=" mb-4 mb-lg-0">
                   
                     <img src="images/banner/a1.png" class="img-fluid">
                    <h4 class="mb-3 mt-4">Campaign Audit</h4>
                    <p>First, we conduct a full campaign audit to identify strengths and weaknesses.<br><br></p>
                  
                    
                </div>
            </div>
             <div class="col-lg-4 col-md-6 col-sm-6">
                 <div class=" mb-4 mb-lg-0">
                  
                     <img src="images/banner/a1.png" class="img-fluid">
                    <h4 class="mb-3 mt-4">Analyze Your Competitors</h4>
                    <p>Next, we research and analyze your competitors to gain a competitive edge.</p>
                    
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                 <div class=" mb-4 mb-lg-0">
                    
                    <img src="images/banner/a1.png" class="img-fluid">
                    <h4 class="mb-3 mt-4">Understand Your Brand </h4>
                    <p>Finally, we delve deep into your industry to truly understand your brand and its unique value proposition.</p>
                    
                </div>
            </div>
        </div>
    </div>
</section>





-->
    <!--Features -->
    <section class="pt-4 pb-4" id="why-choose-us2">
        <div class="container">
            <div class="section-heading text-center">
                <h2 class="text-lg text-center" style="color: white;"><span class="color">Why Should You Hire  <br>Virtual Assistants From Tech2Globe?</h2>
            </div>
            <section class="wow fadeIn animated" style="visibility: visible; animation-name: fadeIn;">
                <div class="container">
                    <div class="row">
                        <!-- counter -->
                        <div class="col-lg-2 col-md-4 col-sm-12 bottom-margin text-center counter-section wow fadeInUp sm-margin-bottom-ten animated" data-wow-duration="300ms" style="visibility: visible; animation-duration: 300ms; animation-name: fadeInUp;">
                            <!------<i class="fa fa-beer medium-icon"></i>*/------->
                            <span id="anim-number-pizza" class="counter-number"></span>
                            <div><span class="timer counter alt-font appear" data-to="980" data-speed="7000" style="display: contents;">40 </span><b style="font-size: 32px; color: white!important;">%</b></div>
                            <p class="counter-title">Cost Reduction</p>
                        </div>
                        <!-- end counter -->
                        <!-- counter -->
                        <div class="col-lg-2 col-md-4 col-sm-12 bottom-margin text-center counter-section wow fadeInUp sm-margin-bottom-ten animated" data-wow-duration="600ms" style="visibility: visible; animation-duration: 600ms; animation-name: fadeInUp;">

                            <div><span class="timer counter alt-font appear" data-to="980" data-speed="7000" style="display:contents;">24</span><b style="font-size: 32px; color: white!important;">Hrs</b></div>
                            <span class="counter-title">Faster Turnaround </span>
                        </div>
                        <!-- end counter -->
                        <!-- counter -->
                        <div class="col-lg-2 col-md-4 col-sm-12 bottom-margin text-center counter-section wow fadeInUp sm-margin-bottom-ten animated" data-wow-duration="600ms" style="visibility: visible; animation-duration: 600ms; animation-name: fadeInUp;">

                            <div><span class="timer counter alt-font appear" data-to="980" data-speed="7000" style="display:contents;">500</span><b style="font-size: 32px; color:white!important;">+</b></div>
                            <span class="counter-title">Satisfied Clients </span>
                        </div>
                        <!-- end counter -->
                        <!-- counter -->
                        <div class="col-lg-2 col-md-4 col-sm-12 bottom-margin text-center counter-section wow fadeInUp sm-margin-bottom-ten animated" data-wow-duration="600ms" style="visibility: visible; animation-duration: 600ms; animation-name: fadeInUp;">

                            <div><span class="timer counter alt-font appear" data-to="980" data-speed="7000" style="display:contents;">250</span><b style="font-size: 32px; color:white;">+</b></div>
                            <span class="counter-title">Skilled Virtual Assistant Professionals</span>
                        </div>
                        <!-- end counter -->
                        <!-- counter -->
                        <div class="col-lg-2 col-md-4 col-sm-12 bottom-margin-small text-center counter-section wow fadeInUp xs-margin-bottom-ten animated" data-wow-duration="900ms" style="visibility: visible; animation-duration: 900ms; animation-name: fadeInUp;">

                            <div><span class="timer counter alt-font appear" data-to="980" data-speed="7000" style="display:contents;">99</span><b style="font-size: 32px; color:white;">%</b></div>
                            <span class="counter-title">Accuracy </span>
                        </div>
                        <!-- end counter -->
                        <!-- counter -->
                        <div class="col-lg-2 col-md-4 col-sm-12 text-center counter-section wow fadeInUp animated" data-wow-duration="1200ms" style="visibility: visible; animation-duration: 1200ms; animation-name: fadeInUp;">

                            <span class="timer counter alt-font appear" data-to="600" data-speed="7000">12</span>
                            <span class="counter-title">Years Experience</span>
                        </div>
                        <!-- end counter -->
                    </div>
                </div>
            </section>
        </div>
    </section>





    <!--Features -->
    <section class="" id="why-choose-us">
        <div class="container">
            <div class="section-heading text-center">
                <h2 class="text-lg text-center"><span class="color">Our Valued Customers</h2>




            </div>
            <div class="row align-items-center">
                <div class="col-lg-2 col-md-2 col-sm-2 col-6 client">
                    <div class=" mb-4 mb-lg-0 ">

                        <img src="images/client/client-1.png" class="img-fluid ">



                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 col-6 client">
                    <div class=" mb-4 mb-lg-0">

                        <img src="images/client/client-2.png" class="img-fluid">



                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 col-6 client">
                    <div class=" mb-4 mb-lg-0">

                        <img src="images/client/client-3.png" class="img-fluid">



                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 col-6 client">
                    <div class=" mb-4 mb-lg-0">

                        <img src="images/client/client-4.png" class="img-fluid">



                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 col-6 client">
                    <div class=" mb-4 mb-lg-0">

                        <img src="images/client/client-5.png" class="img-fluid">

                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 col-6 client">
                    <div class=" mb-4 mb-lg-0">

                        <img src="images/client/client-6.png" class="img-fluid">


                    </div>
                </div>
            </div>

            <div class="row align-items-center">
                <div class="col-lg-2 col-md-2 col-sm-2 col-6 client">
                    <div class=" mb-4 mb-lg-0">

                        <img src="images/client/client-7.png" class="img-fluid">



                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 col-6 client">
                    <div class=" mb-4 mb-lg-0">

                        <img src="images/client/client-8.png" class="img-fluid">



                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 col-6 client">
                    <div class=" mb-4 mb-lg-0">

                        <img src="images/client/client-9.png" class="img-fluid">



                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 col-6 client">
                    <div class=" mb-4 mb-lg-0">

                        <img src="images/client/client-10.png" class="img-fluid">


                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 col-6 client">
                    <div class=" mb-4 mb-lg-0">

                        <img src="images/client/client-11.png" class="img-fluid">

                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 col-6 client">
                    <div class=" mb-4 mb-lg-0">

                        <img src="images/client/client-12.png" class="img-fluid">


                    </div>
                </div>
            </div>
        </div>
    </section>




    <!-- Banner -->

    <section class="section mt-5" id="contacts">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <h1 class="text-lg2 pt-5">Avail Best-in-class Services At Affordable Rates </h1>
                    <p style="color: black; text-align: left; font-size: 1.125rm;">Decide In 24 Hours Whether Outsourcing Will Work For You</p>
                    <a href="mailto:info@tech2globe.ca">
                        <div class="mail" style="float: left;">
                            <img src="images/banner/mail.png" class="img-fluid" style="width:50px;">
                            info@tech2globe.ca
                        </div>
                    </a>

                </div>
                <div class="col-md-5 pt-5 formb formbottom-container">
                    <h3 class="text-left pb-2" style="color: white;">Get a FREE Quote!</h3>
                    <!-- <form>
        <div class="row">
        <div class="col-md-6">
        <div class="form-group" id="contact-us">
    
    <input type="text" class="form-control" placeholder="Enter Your Name">
  </div>
  </div>
      <div class="col-md-6">
  <div class="form-group">
    
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Enter Email">
  </div></div></div>
  <div class="row">
        <div class="col-md-6">
  <div class="form-group">
    
    <input type="text" class="form-control" placeholder="Enter Phone">
  </div>
</div>
<div class="col-md-6">
  <div class="form-group">
    
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Enter Country">
  </div></div></div>
  
  
  

  <div class="form-group">
    
    <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Describe your business" rows="3"></textarea>
  </div><button type="submit" class="btn btn-primary mb-4">Sign in</button></div>
</form> -->
                    <?php // onsubmit="doSubmit1();"
                    $min2  = 0;
                    $max2  = 9;
                    $num12 = rand($min1, $max1);
                    $num22 = rand($min1, $max1);
                    $sum2  = $num12 + $num22;
                    $actual_link = str_replace('.php', '', 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF']);
                    ?>
                    <form name='contact2' method="POST" action="" id='contact-us1' enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group ">

                                    <input required="" type="text" class="form-control" id="name" onkeypress="return withoutspecialnumeric(event)" placeholder="Enter Name" name="name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input name="pagelink" value="<?php echo $actual_link; ?>" type="hidden" />
                                    <input type="email" required="" type="email" class="form-control" id="email" placeholder="Enter Email" name="mailid" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$">
                                </div>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-group newform">

                                    <select class="form-control " name="countrycode" required>
                                        <option value="">Select country</option>
                                        <option value="USA (+1) ">USA (+1) </option>

                                        <option value="UK (+44)">UK (+44) </option>

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

                                        <option value="Liechtenstein (+417) ">Liechtenstein (+417) </option>

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

                                        <option value="Zimbabwe (+263)">Zimbabwe (+263)</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">

                                    <input type="text" class="form-control" placeholder="Enter Mobile No." name="phone" onkeypress='return isNumberKey(event)' minlength="10" maxlength="13" required>
                                </div>
                            </div>
                        </div>




                        <div class="form-group">

                            <textarea name="comment" required class="form-control" id="iq" placeholder="Enter your query" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <div class="text-left" style='font-size: 14px;'>
                                <strong style="color:black!important;"><b>Captcha Please enter sum :</b></strong> <span class="badge badge-secondary" style="margin-right: 4px;background-color: black;
    color: #fff;
    padding: 6px 8px;"><?php echo $num12; ?></span><b>+</b><span class="badge badge-secondary" style="margin-left: 4px;
    margin-right: 5px;background-color: black;
    color: white;
    padding: 6px 8px;"><?php echo $num22; ?></span> <b>?</b>
                            </div><br>
                            <input type="text" class="form-control  quiz-control1" id="quiz2">
                            <div style="display:none" class="alert alert-danger" id='msgcaptch2'>Please enter right captcha </div>
                        </div>
                        <input type="submit" id="khnna" data-mata="<?php echo $sum2; ?>" disabled value="Submit" name="Submit" class="btn btn-white text-dark mb-4" style="    background: #000 !important;
    color: #ffffff !important;" />
                </div>
                </form>
            </div>
        </div>
    </section>
    <script>
        const submitButton2 = document.getElementById("khnna");
        const quizInput2 = document.querySelector("#quiz2");
        quizInput2.addEventListener("input", function(e) {
            const res2 = submitButton2.getAttribute("data-mata");
            if (this.value == res2) {
                document.getElementById("msgcaptch2").style.display = "none";
                //var checkkk=IsEmpty();
                //if(checkkk == true){submitButton.removeAttribute("disabled");}else{submitButton.setAttribute("disabled", "");}
                submitButton2.removeAttribute("disabled");
                //console.log('f1');
            } else {
                document.getElementById("msgcaptch2").style.display = "block";
                submitButton2.setAttribute("disabled", "");
                //console.log('f12');
            }
        });
        //  function doSubmit1() {
        //   document.getElementById('contact-us1').action ='innerformemail.php';

        //   return true;
        // }
    </script>
    <!-- Chapter 
<section class="section chapter" id="ourprocess">
    <div class="container ">
        <div class="row ">
            <div class="col-lg-6">
                <div class="section-heading">
                    <h2 class="text-lg"><span class="color">How It Works: </span> Unleashing The Power Of Amazon PPC by Certified Experts</h2>

                   
                </div>
            </div>
            <div class="col-lg-6">
                <img src="images/banner/w.png">
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6 col-sm-6">
                <div class="chapter-inner">
                    <div class="chapter-item">
                        <h4 style="font-size: 24px;">01.Turbocharge Sales And Skyrocket Profits</h4>
                       
                        <ul>
  <li>Our amazon PPC agency is focused on maximizing your profitability.</li>
  <li>We employ cutting-edge PPC techniques.</li>
  <li>Optimize conversions to maximize profits.<br></li>
 </ul>  
 <img src="images/banner/k1.jpg" alt="" class="img-fluid pt-5"> 


                    </div>
                    <div class="chapter-item">
                        <h4 style="font-size: 24px;">03.Boost Discoverability Of Your Amazon Business</h4>
                        
                        <ul>
  <li>Our specialists work tirelessly to give your amazon advertising campaign.</li>
  <li>Using the latest research.</li>
  <li> tools to improve its visibility <br>and reach.</li>
</ul>
<img src="images/banner/k3.jpg" alt="" class="img-fluid pt-5">  
                    </div>
                  
                </div>
            </div>


 <div class="col-lg-6 col-sm-6">
                <div class="chapter-inner">
                    <div class="chapter-item">
                        <h4 style="font-size: 24px;">02.Precise Monitoring Of Bidding Strategies</h4>
                      
                        <ul>
                          <li>We know that every penny counts.</li>
                          <li>we carefully monitor your campaign's bidding strategies.</li>
                          <li>making real-time adjustments to ensure it stays <br>on track.</li>
                        </ul>
                        <img src="images/banner/k2.jpg" alt="" class="img-fluid pt-5"> 
                    </div>
                    




                    <div class="chapter-item">
                        <h4 style="font-size: 24px;">04.Transparent Campaign Tracking And Reporting</h4>
                        
                        <ul>
                          <li>Stay informed every step of the way.</li>
                          <li>weekly, bi-weekly, or monthly campaign reporting resources.</li>
                          <li>You'll always be in the loop when it comes to your Amazon PPC management progress.</li>
                        </ul>
                        <img src="images/banner/k4.jpg" alt="" class="img-fluid pt-5"> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>






<!-- Review
<section class="section-bottom testimonial" id="review">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6 col-md-12">
             <div class="section-heading text-center">
                <h2 class="mb-3 text-lg">What people are saying</h2>
                <p>Amazing reviews illo tenetur laboriosam excepturi velit in, temporibus ab rem dicta sint obcaecati!</p>
             </div>
          </div>
      </div>

      <div class="row align-items-center">
        <div class="col-lg-12 col-sm-12 col-md-12 testimonial-wrap">
            <div class="test-item">
               <div class="testimonial-item-content">
                   <div class="test-author-thumb mb-4">
                       <img src="images/client/test-1.jpg" alt="Testimonial author" class="img-fluid">

                        <div class="test-author-info mt-4">
                          <div class="rating">
                            <a href="#"><i class="ti-star"></i></a>
                            <a href="#"><i class="ti-star"></i></a>
                            <a href="#"><i class="ti-star"></i></a>
                            <a href="#"><i class="ti-star"></i></a>
                            <a href="#"><i class="ti-star"></i></a>
                          </div>

                           <h4 class="mb-0 mt-2">Barrow Hasi</h4>
                           <p>Sunrise ten</p>
                        </div>
                   </div>

                   <p class="mb-0">Quas ut distinctio tenetur animi nihil rem, amet dolorum totam. Ab repudiandae tempore qui fugiat amet ipsa id omnis ipsam.</p>
               </div>
            </div>
       
            <div class="test-item">
              <div class="testimonial-item-content">
                   <div class="test-author-thumb mb-4">
                       <img src="images/client/test-2.jpg" alt="Testimonial author" class="img-fluid">

                       <div class="test-author-info mt-4">
                          <div class="rating">
                            <a href="#"><i class="ti-star"></i></a>
                            <a href="#"><i class="ti-star"></i></a>
                            <a href="#"><i class="ti-star"></i></a>
                            <a href="#"><i class="ti-star"></i></a>
                            <a href="#"><i class="ti-star"></i></a>
                          </div>

                           <h4 class="mb-0 mt-2">Will Barrow</h4>
                           <p>Sunrise Paradise Hotel</p>
                        </div>
                        
                   </div>
                   <p class="mb-0">Quas ut distinctio tenetur animi nihil rem, amet dolorum totam. Ab repudiandae tempore qui fugiat amet ipsa id omnis ipsam.</p>
               </div>
            </div>

             <div class="test-item ">
                <div class="testimonial-item-content">
                   <div class="test-author-thumb mb-4">
                       <img src="images/client/test-1.jpg" alt="Testimonial author" class="img-fluid">

                       <div class="test-author-info mt-4">
                          <div class="rating">
                            <a href="#"><i class="ti-star"></i></a>
                            <a href="#"><i class="ti-star"></i></a>
                            <a href="#"><i class="ti-star"></i></a>
                            <a href="#"><i class="ti-star"></i></a>
                            <a href="#"><i class="ti-star"></i></a>
                          </div>

                           <h4 class="mb-0 mt-2">Michale john</h4>
                           <p>Suntech company</p>
                        </div>
                   </div>
                   <p class="mb-0">Quas ut distinctio tenetur animi nihil rem, amet dolorum totam. Ab repudiandae tempore qui fugiat amet ipsa id omnis ipsam.</p>
               </div>
            </div>

             <div class="test-item">
                <div class="testimonial-item-content">
                   <div class="test-author-thumb mb-4">
                       <img src="images/client/test-2.jpg" alt="Testimonial author" class="img-fluid">

                       <div class="test-author-info mt-4">
                          <div class="rating">
                            <a href="#"><i class="ti-star"></i></a>
                            <a href="#"><i class="ti-star"></i></a>
                            <a href="#"><i class="ti-star"></i></a>
                            <a href="#"><i class="ti-star"></i></a>
                            <a href="#"><i class="ti-star"></i></a>
                          </div>

                           <h4 class="mb-0 mt-2">John doe</h4>
                           <p>Paradise IT </p>
                        </div>
                   </div>
                   <p class="mb-0">Quas ut distinctio tenetur animi nihil rem, amet dolorum totam. Ab repudiandae tempore qui fugiat amet ipsa id omnis ipsam.</p>
               </div>
            </div>
          </div>
      </div>
    </div>
</section>-->

    <!-- Device feature 
<section class="feature-home section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6">
                <h2 class="mb-4">Read it on your favorite device!</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae quod, nobis repudiandae! In commodi accusamus molestiae, sunt, tempora fugiat doloribus sint quisquam illo numquam corporis tenetur necessitatibus expedita eius, sed.</p>

                <div class="feature-item d-flex mt-5 mb-3">
                    <div class="icon-block">
                        <i class="ti-bar-chart color-style-1"></i>
                    </div>
                    <div class="content">
                        <h5>Take a sneak peak insight</h5>
                        <p>Sed laborum omnis earum facere culpa optio natus quaerat minus.</p>
                    </div>
                </div>

                <div class="feature-item d-flex mb-4">
                    <div class="icon-block">
                        <i class="ti-write color-style-2"></i>
                    </div>
                    <div class="content">
                        <h5>Reporting & Analysis</h5>
                        <p>Sed laborum omnis earum facere culpa optio natus quaerat minus.</p>
                    </div>
                </div>

                <a href="#" class="btn btn-main-2">Purchase on amazon <i class="ti-angle-right ml-3"></i></a>
            </div>

            <div class="col-lg-6 col-md-6">
                <div class="mt-5 mt-lg-0">
                    <img src="images/about/ipad.jpg" alt="" class="img-fluid w-100">
                </div> 
            </div>
        </div>
    </div>
</section>-->
    <!-- About Author 
<section class="about section" id="author">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5">
                <div class="about-img">
                    <img src="images/banner/people.png" alt="" class="img-fluid w-100">
                </div>
            </div>

            <div class="col-lg-6">
                <div class="author-info pl-4 mt-5 mt-lg-0">
                  <div class="section-heading">
                    <h2 class="text-lg" style="font-size: 27px;"><span class="color">    Leverage outsourcing benefits</span>  with Tech2Globe, the premier Amazon PPC management agency.</h2>
               
                </div>
                    
                    <p class=" lead" style="font-size: 16px; margin-top: -60px;">Our team of Amazon experts has curated a suite of resources to deliver tailored solutions that propel your business beyond its potential. Say goodbye to stagnant growth and hello to unlimited success with Tech2Globe.</p>


                    
                   
                </div>
            </div>
        </div>
    </div>
</section>-->

    <!---------------phone------------>



    <!---------------phone end ------------>








    <!-- About Author 
<section class="about section" id="author">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5">
                <div class="about-img">
                    <img src="images/banner/phone.png" alt="" class="img-fluid w-100">
                </div>
            </div>

            <div class="col-lg-6">
                <div class="author-info pl-4 mt-5 mt-lg-0">
                  <div class="section-heading">
                    <h2 class="text-lg"><span class="color">Ad solutions</span> for every budget</h2>
                    
                </div>
                    
                    <p class="mb-4 lead">Get started with self-service advertising</p>


                    <p class="mb-5">Introduce customers to your brand and products with our self-service advertising solutions. </p>

                   
                </div>
            </div>
        </div>
    </div>
</section>-->
    <!-- Awards 
<section id="clients-logo-section" class="section-top">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8">
          <div class="section-heading text-center">
            <h2 class="text-lg">We are award winner best selling book among the top rated 10 books!</h2>
          </div>
      </div>
    </div>
    
    <div class="row">
      <div class="col-lg-3 col-sm-6">
        <div class="award-block text-center p-4 border mb-4">
          <h5 class="mb-3">International award</h5>
          <img src="images/about/award-1.png" alt="" class="img-fluid">
        </div>
      </div>
      <div class="col-lg-3 col-sm-6">
        <div class="award-block text-center p-4 border mb-4">
          <h5 class="mb-3">Meritorious award</h5>
          <img src="images/about/award-2.png" alt="" class="img-fluid">
        </div>
      </div>
      <div class="col-lg-3 col-sm-6">
        <div class="award-block text-center p-4 border mb-4">
          <h5 class="mb-3">Best book award</h5>
          <img src="images/about/award-3.png" alt="" class="img-fluid">
        </div>
      </div>
      <div class="col-lg-3 col-sm-6">
        <div class="award-block text-center p-4 border mb-4">
          <h5 class="mb-3">Excellence award</h5>
          <img src="images/about/award-4.png" alt="" class="img-fluid">
        </div>
      </div>
    </div>
  </div>
</section>-->
    <!-- Others books
<section class="section others-book">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section-heading text-center">
                    <h2 class="text-lg">Others books by the author</h2>
                    <p>Laboriosam eos aperiam excepturi accusamus velit repudiandae sit rem incidunt, similique facere quas blanditiis.</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="book-item mb-4 mb-lg-0">
                    <img src="images/about/b-1.jpg" alt="" class="img-fluid">
                    <a href="#" class="hover-item">
                        <i class="ti-link"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="book-item mb-4 mb-lg-0">
                    <img src="images/about/b-2.jpg" alt="" class="img-fluid">
                    <a href="#" class="hover-item">
                        <i class="ti-link"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="book-item mb-4 mb-lg-0">
                    <img src="images/about/b-3.jpg" alt="" class="img-fluid">
                    <a href="#" class="hover-item">
                        <i class="ti-link"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="book-item mb-4 mb-lg-0">
                    <img src="images/about/b-4.jpg" alt="" class="img-fluid">
                    <a href="#" class="hover-item">
                        <i class="ti-link"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>   -->

    <!-- Latest blog 
<section class="section blog-home border-top" id="blog">
    <div class="container">
         <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section-heading text-center">
                    <h2 class="text-lg mb-3">Our insights and articles </h2>
                    <p>Laboriosam eos aperiam excepturi accusamus velit repudiandae sit rem incidunt, similique facere quas blanditiis.</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="blog-item card mb-4 mb-lg-0 border-0">
                    <img src="images/blog/blog1.jpg" alt="" class="img-fluid w-100">
                    <div class="blog-item-content p-4">
                        <div class="blog-meta mb-2">
                            <span><i class="ti-time mr-2"></i>17 june 2019</span>
                            <a href="#">by Rahat Rishab</a>
                        </div>
                        <h4 class="mt-2 mb-3"><a href="blog-single.html">Corporate Workflow ethics make a diffrence</a></h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="blog-item card mb-4 mb-lg-0 border-0">
                    <img src="images/blog/blog2.jpg" alt="" class="img-fluid w-100">
                    <div class="blog-item-content  p-4">
                        <div class="blog-meta mb-2">
                            <span><i class="ti-time mr-2"></i>17 june 2019</span>
                            <a href="#" >by Rahat Rishab</a>
                        </div>

                        <h4 class="mt-2 mb-3"><a href="blog-single.html">Solution for the corporate and individual customer</a></h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="blog-item card mb-4 mb-lg-0 border-0">
                    <img src="images/blog/blog3.jpg" alt="" class="img-fluid w-100">
                    <div class="blog-item-content p-4">
                        <div class="blog-meta mb-2">
                            <span><i class="ti-time mr-2"></i>17 june 2019</span>
                            <a href="#">by Rahat Rishab</a>
                        </div>

                        <h4 class="mt-2 mb-3"><a href="blog-single.html">Software flexibility and hardware performance </a></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>-->

    <!------------our client ---------------->














    <!---------------our client end------------->

























    <!-- Cpntact -
<section class="section contact bg-grey p-5" id="contact" style="    background: #444090;
    padding-top: 64px !important;
    padding-bottom: 0px !important;">
        <div class="container">
        <div class="row">
            <div class="col-md-6">
               <div class="section-heading text-center">
                    <h2 class="mb-2 text-lg" style="font-size: 32px;color: white">Schedule a 30- Min Strategy Call</h2>
                    <div class="startup">
                           <center><a href="tel:+15168584836" class="button" style="text-align: center;">Call Now</a></center>
                         </div>
                     </div>     
               </div>
                              <div class="col-md-6">
               <div class="section-heading text-center">
                    <span style="color: white;font-size: 25px;    font-weight: 600;">Mail Id :</span>
                    <a href="mailto:info@tech2globe.com" style="color: white; font-size: 20px;">info@tech2globe.com</a><br>
                    <span style="color: white;font-size: 25px;    font-weight: 600;">Phone No :</span>
                    <a href="tell:+15168584836" style="color: white; font-size: 20px;">+15168584836</a>
                </div> 
               </div>
            </div>->
        </div>  <!-- / .row 

        <div class="row">
            <div class="col-lg-4 col-sm-6">
                <div class="contact-info-block text-center mb-4">
                    <i class="ti-headphone-alt"></i>
                    <p class="mb-0">Contact Quickly</p>
                    <h5>+23-68017684</h5>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="contact-info-block text-center mb-4">
                    <i class="ti-email"></i>
                    <p class="mb-0">Email</p>
                    <h5>startor@support.com</h5>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="contact-info-block text-center mb-4">
                    <i class="ti-location-pin"></i>
                    <p class="mb-0">Location</p>
                    <h5>397 Lake forest drive street USA</h5>
                </div>
            </div>
        </div>
    </div>-->
    </section>



    <!-- <div id="map" ></div> -->




    <div class="container">
        <div class="row footer-btm mt-5 pt-4 border-top">
            <div class="col-lg-6">
                <!-- Copyright -->
                <p class="footer-copy">
                    &copy; Copyright 2023 Tech2globe<span class="current-year"></span> All rights reserved.
                </p>
            </div>
            <div class="col-lg-6">
                <div class="footer-btm-menu text-lg-right">

                </div>
            </div>
        </div> <!-- / .row -->
    </div>
    </footer>





    <!--  Page Scroll to Top  -->

    <a class="scroll-to-top smoth-scroll" href="#top-header">
        <i class="ti-angle-up"></i>
    </a>





    <!-- 
    Essential Scripts
    =====================================-->


    <!-- Main jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 3.1 -->
    <script src="plugins/bootstrap/js/popper.min.js"></script>
    <script src="plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="plugins/owl-carousel/owl-carousel.js"></script>
    <!-- Slick Slider -->
    <script src="plugins/slick-carousel/slick/slick.min.js"></script>
    <script src="plugins/magnific-popup/jquery.magnific-popup.js"></script>
    <script src="js/theme.js"></script>

</body>

</html>
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
    // $from_eml = 'priya.chaudhary@tech2globe.in';


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

  <title>24/7 Live CCTV Monitoring - Tech2globe | Tech2globe</title>

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


<?php

if (isset($_REQUEST['contact_submit_form'])) {

    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $phone = $_REQUEST['phone'];
    $areaCode = $_REQUEST['areaCode'];
    $description = $_REQUEST['description'];

    //$Link = $con->real_escape_string($_REQUEST['pagelinks']);
    $Link = $_REQUEST['pagelinks'];

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Handle invalid email
        echo json_encode(array('error' => 'Please enter a valid email.'));
        exit();
    }

    $from_email = 'info@tech2globe.com';
    $static = 'Tech2globe.com';
    $your_email = 'info@tech2globe.com';
    $email_subject = "Enquiry on Tech2globe.com";

    $header = "From: $static <" . $from_email . ">\r\n";
    $header .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    $email_content1 = "Thank you for your enquiry. Our team will get back to you within 1 business day.";

    $message = "
    <html>
    <head>
      <title>Enquiry from Tech2globe</title>
    </head>
    <body>
      <p>Name: $name</p>
      <p>Country Code: $areaCode</p>
      <p>Phone: $phone</p>
      <p>Mail ID: $email</p>
      <p>Comment: $description</p>
      <table>
        <tr><td style='font-size:14px; font-family:Arial, Helvetica, sans-serif;'>Send from Page: $Link<br><br></td></tr>
      </table>
    </body>
    </html>";


    // Attempt to send email
    if (@mail($your_email, $email_subject, $message, $header) && @mail($email, "Thank you - Enquiry Received On Tech2globe", $email_content1, $header)) {
        // Successful email sending
        echo "<script>alert('Form submitted successfully.');
        window.location.replace('https://newsite.tech2globe.co.in/thank-you');</script>";
    } else {
        // Email sending failed
        echo "<script>alert('Something went wrong.');
        window.location.replace('https://newsite.tech2globe.co.in/data-extraction-services');</script>";
    }
}


?>






<!doctype html>
<html>
<?php include("include/meta.php"); ?>

<link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.4.0/css/all.css">

<script type="application/ld+json">
    {
        "@context": "https://schema.org/",
        "@type": "WebSite",
        "name": "Outsource Data Extraction Services",
        "url": "https://tech2globe.com/data-extraction-services",
        "potentialAction": {
            "@type": "SearchAction",
            "target": "{search_term_string}",
            "query-input": "required name=search_term_string"
        }
    }
</script>
<style>
    /* service of data-extraction page start */

    .smart-solution-data-extraction-service .col-md-2 i {
        font-size: 2.2em;
        width: 80px;
        height: 80px;
        border-radius: 50%;
        display: grid;
        place-content: center;
        border: 2px dotted gray;
    }

    .smart-solution-data-extraction-service .col-md-2 {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    /* service of data-extraction page end */

    /* why-choose-us data-extraction-service start */
    .why-choose-data-extraction-service-section{margin: 50px 3%;}
    .why-choose-data-extraction-service-section .row{margin-block: 20px;}
.row .col-md-2 .col-10.wpb_single_image.d-none.d-sm-block {width: max-content;}
    /* why-choose-us data-extraction-service end */
    /* 1801 */





    /*cta*/
    .popup form select {
        background-image: url(../image/arr-black.png);
        background-position: right 10px center;
        background-repeat: no-repeat;
        -moz-appearance: none;
        text-indent: 0.01px;
        text-overflow: '';
        -ms-appearance: none;
        color: #000000 !important;
    }

    .popup form input[type="text"]::placeholder,
    .popup form input[type="tel"]::placeholder,
    .popup form input[type="email"]::placeholder,
    .popup form textarea::placeholder {
        color: #000000 !important;
        font-weight: 500;
    }

    .popup form select {
        color: #fba420;
        font-weight: 500;
    }

    .popup form select {
        background-image: url(../image/arr-black.png);
        background-position: right 10px center;
        background-repeat: no-repeat;
        -moz-appearance: none;
        text-overflow: '';
        -ms-appearance: none;
        color: #adadad;
        font-weight: 500;
    }

    .popup form textarea {
        height: 78px;
        padding-top: 10px;
        color: #b3b3b3 !important;
        /* font-family: 'Font Awesome 5 Pro'; */
        resize: vertical;
    }

    #hp-ctn-howItWorks img {
        vertical-align: middle;
    }

    #hp-ctn-howItWorks {
        padding: 0px 0px 0px 0px;
        text-align: center;
        margin: 0px;
        width: 160px;
        height: 40px;
        background: #cb010d;
        z-index: 10000;
        border-radius: 5px 5px 0px 0px;
        -moz-transform: rotate(-90deg);
        -ms-transform: rotate(-90deg);
        -o-transform: rotate(-90deg);
        -webkit-transform: rotate(-270deg);
        transform-origin: right;
        position: fixed;
        right: 0px;
        border: none !important;
        margin-top: 17px;
        right: 19px;
    }

    #hp-ctn-howItWorks button {
        color: #fff;
        display: inline-block;
        line-height: 40px;
    }

    #hp-ctn-howItWorks p {
        color: #fff;
        display: inline-block;
        line-height: 40px;
    }

    /*cta end*/

    /*pop up*/
    .fixConnect a {
        position: fixed;
        top: 290px;
        right: -70px;
        color: #fff;
        z-index: 10;
        background: var(--dyelltwo);
        transform: rotate(90deg);
        padding: 10px 10px;
        min-width: 180px;
        text-align: center;
        border-radius: 0 0 4px 4px;
        transition: ease all 0.5s;
    }

    * {
        box-sizing: border-box;
    }

    .closess {
        float: right;
        font-size: 36px;
        font-weight: 700;
        line-height: 1;
        color: #000;
        /* text-shadow: 0 1px 0 #ff0000; */
        filter: alpha(opacity=20);
        /* opacity: .2; */
        padding: 5px;
        border: white;
        background: none;
    }

    #info {
        color: hotpink !important;
    }

    .popup form {
        width: 100%;
    }

    input[required]+label,
    .popup form input,
    .popup form select,
    .popup form textarea {
        font-family: inherit !important;
        font-weight: 300;
        color: #afafaf;
        font-size: 15px;
        font-weight: 400px !important;
    }

    .popup form input,
    .popup form select {
        height: 38px !important;
    }

    .popup form input[type="text"],
    .popup form input[type="email"],
    .popup form select,
    .popup form textarea {
        display: block !important;
        margin: 0 auto;
        margin-bottom: 20px;
        padding-left: 10px !important;
        width: 83.55% !important;
        color: black;
        background: transparent !important;
        border: 0px !important;
        border-bottom: 1px solid grey !important;
        box-shadow: none !important;
        border-top: navajowhite;
        border-left: none;
        border-right: none;
    }

    input[required]+label {
        position: absolute;
        transform: translateX(60px) translateY(-50px);
    }

    input[required]+label:after {
        content: '*';
        color: #d8d8d8;
    }

    input[required]:invalid+label {
        display: inline-block;
    }

    input[required]:valid+label {
        display: none;
    }

    .popup form select {
        background-image: url("../image/arr-black.png");
        background-position: right 10px center;
        background-repeat: no-repeat;
        -moz-appearance: none;
        text-indent: 0.01px;
        text-overflow: '';
        -ms-appearance: none;
        color: #adadad;
    }

    .popup form textarea {
        height: 75px;
        padding-top: 10px;
        color: black;
    }

    .popup form input[type="submit"] {
        background: #9b0000;
        border-radius: 3px;
        width: 246px;
        height: 40px;
        margin-bottom: 0;
        font-weight: 500;
        font-size: 16px;
        color: #ffffff;
        line-height: 23px;
        font-family: "roboto";
        border-radius: 25px;
        margin: 0px auto;
        display: block;
        border-color: #9b0000;
        border-width: inherit;
    }

    #myModal .modal-content {
        margin-inline: 50px;
    }

    #myModal .modal-content .modal-headerss {
        text-align: center;
        padding: 15px 15px 0px 15px;
    }

    /*pop end*/


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

    /* 1801 */
    /*form*/
    .form-control-text {
        border: 1px solid rgba(0, 0, 0, 0.04) !important;
        box-shadow: 12px 7px 90px 0 rgba(110, 123, 131, 0.1) !important;
        background: #ededed !important;
        height: 60px !important;
        padding-left: 15px !important;
        font-size: 14px !important;
        width: 100% !important;
        border: 1px solid #ced4da !important;
        border-radius: 0.25rem !important;
        color: #495057 !important;
    }

    .formc {
        background-color: white;
        /* border-radius: 25px; */
    }

    .form-group {
        margin-bottom: 12px !important;
    }

    @media only screen and (max-width: 600px) {
        #contact-form {
            width: 100% !important;
        }
    }

    @media only screen and (max-width: 600px) {
        .boxes {
            padding-right: 0px !important;
        }
    }

    .badge {
        display: inline-block;
        min-width: 10px;
        padding: 3px 7px;
        font-size: 12px;
        font-weight: 700;
        line-height: 1;
        color: #fff;
        text-align: center;
        white-space: nowrap;
        vertical-align: baseline;
        background-color: #777;
        border-radius: 0px !important;
    }

    .form-control {
        border: 1px solid rgba(0, 0, 0, 0.04) !important;
        box-shadow: 12px 7px 90px 0 rgba(110, 123, 131, 0.1) !important;
        background: #ededed !important;
        height: 36px !important;
        padding-left: 15px !important;
        font-size: 14px !important;
    }

    .form-control {
        display: block !important;
        width: 100% !important;
        height: calc(1.5em + 0.75rem + 2px) !important;
        padding: 0.375rem 0.75rem !important;
        /*font-size: 1rem!important;*/
        font-weight: 400 !important;
        line-height: 1.5 !important;
        color: #495057 !important;
        background-color: #ededed !important;
        background-clip: padding-box !important;
        border: 1px solid #ced4da !important;
        border-radius: 0.25rem !important;
        transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out !important;
    }

    @media (min-width: 768px) .col-md-6 {
        -ms-flex: 0 0 50%;
        flex: 0 0 50%;
        max-width: 50%;
    }

    .white {
        color: white;
    }

    .walmart-s {
        font-size: 48px !important;
        color: white;
    }

    @media only screen and (max-width: 600px) {
        .walmart-s {
            font-size: 30px !important;
            text-align: left;
        }
    }

    /*form end */


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


    @media only screen and (min-width: 330px) and (max-width: 640px) {
        .imple1 {
            border: 1px solid #858383dd;
            padding: 18px;
            height: 320px;
        }
    }



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

    .icon-list li {
        position: relative;
        list-style: disc;
        padding-left: 17px;
        font-size: 15px;
        font-family: calibri;
        font-size: 18px !important;
        color: #000;
        line-height: 32px;
        /* padding-left: 25px; */
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

    .imple2 {
        border: 1px solid #858383dd;
        padding: 18px;
        height: 288px;
    }


    @media only screen and (max-width: 425px) {
        #areaCode {
            margin-left: 29px !important;
        }

        #myModal .modal-content {
            margin-inline: 0px !important;
        }

        div#myModal {
            z-index: 11111;
        }
    }

    @media only screen and (max-width: 375px) {
        #areaCode {
            margin-left: 21px !important;
        }

        #myModal .modal-content {
            margin-inline: 0px !important;
        }
    }
</style>

<body>
    <?php include("include/header.php"); ?>

    <section class="banner" style="background-image: url(images/new/banner-2.jpg); background-repeat:no-repeat; background-position: bottom; background-size:cover;">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-lg-9 col-sm-12">
                    <div class="heads">
                        <h2 class="text-left walmart-s pub white">DATA EXTRACTION<br> SERVICES</h2>
                        <p style="color: #fff; width: 80%; margin-bottom: 10px;">Streamline your data acquisition process with our professional <strong> outsource data extraction services </strong>, saving you valuable time and resources.</p>
                        <button id="hp-ctn-howItWorks" data-toggle="modal" data-target="#myModal" tabindex="-1">
                            <p>Connect With Us</p>
                        </button>
                    </div>


                </div>
                <!-- <div class="col-md-4 col-lg-4 col-sm-4 text-center"> -->

                <div class="col-md-3 col-lg-3 col-sm-12" id="contact-form">
                    <h3 class="text-left pb-2" style="color: black;">Get a FREE Quote!</h3>


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
                            <div>
                                <div class="col-md-6 boxes" style="padding-left: 0px;">
                                    <div class="form-group ">

                                        <input required="" type="text" class="form-control" id="name" onkeypress="return withoutspecialnumeric(event)" placeholder="Enter Name*" name="name" required>
                                    </div>
                                </div>
                                <div class="col-md-6" style="padding-right: 0px; padding-left:0px;">
                                    <div class="form-group">
                                        <input name="pagelink" value="<?php echo $actual_link; ?>" type="hidden" />
                                        <input type="email" required="" type="email" class="form-control" id="email" placeholder="Enter Email*" name="mailid" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" required>
                                    </div>
                                </div>
                            </div>
                            <div>

                                <div class="col-md-6 boxes" style="padding-left:0px; padding-left:0px;">
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

                                <div class="col-md-6" style="padding-right:0px; padding-left:0px;">
                                    <div class="form-group">

                                        <input type="text" class="form-control" placeholder="Enter Mobile No.*" name="phone" onkeypress='return isNumberKey(event)' minlength="10" maxlength="13" required>
                                    </div>
                                </div>
                            </div>




                            <div class="form-group">

                                <textarea name="comment" required class="form-control-text" id="iq" placeholder="Enter your query*" rows="5" required></textarea>
                            </div>
                            <div class="form-group">

                                <div class="text-left text-dark" style='font-size: 14px;'>
                                    <strong><b style="color: black;">Captcha Please enter sum :</b></strong> <span class="badge badge-secondary" style="margin-right: 4px;background-color: black;color: #fff; padding: 6px 8px;"><?php echo $num11; ?></span><b style="color:black;">+</b><span class="badge badge-secondary" style="margin-left: 4px; margin-right: 5px;background-color: black;color: white;padding: 6px 8px;"><?php echo $num21; ?></span> ?
                                </div><br>
                                <input type="text" class="form-control  quiz-control1" id="quiz1" placeholder="Please Enter Sum*" required>
                                <div style="display:none" class="alert alert-danger" id='msgcaptch1'>Please enter right captcha </div>
                            </div>
                            <input type="submit" id="alii" data-mata="<?php echo $sum1; ?>" disabled value="Submit" name="Submit" class="btn btn-white text-dark" style="    background: #000 !important;
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
    <!-- -----------------banner end------------------ -->

    <!-- banner end -->
    <div class="breadcrumbBg">
        <div class="container">
            <div class="row">
                <ul class="breadcrumb">
                    <li><a href="http://www.tech2globe.com/">Home</a></li>
                    <li><a href="#s">Services</a></li>
                    <li>Data Extraction Services</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container cartFeature">
        <div class="row">
            <div class="col-md-9  col-xs-12">
                <h1> Comprehensive Web Data Extraction Services</h1>
                <img src="images/clients/data-extraction-services.jpg" alt="data-extraction" title="data-extraction" class="img-responsive" style="margin-right:15px;float:left;">
                <p> With the help of Tech2Globe Web Solutions' skilled <strong> data extraction services </strong>, you can make the most of your data. Businesses need precise and quick information to make decisions that will give them a competitive advantage in this constantly evolving data-driven landscape. <strong> Outsource data extraction services </strong> to Tech2Globe; we have the tools to unlock the potential of your data and stimulate growth by providing a complete solution for extracting priceless information from diverse sources. We guarantee flawless extraction, transformation, and delivery of high-quality data that is suited to your particular needs thanks to our knowledge and cutting-edge technology.</p>


                <div class="row smart-solution-data-extraction-service">
                    <h2>Tech2Globe’s Smart Solution For Varied Business</h2>
                    <p>Tech2Globe­ offers comprehensive­ data extraction services that cate­r to the evolving demands of various industrie­s and companies. With our expertise­ in gathering information from intricate sources, we­ ensure your company stays ahead. Our top-notch se­rvices employ cleve­r web scraping techniques to e­xtract data efficiently. Count on our expe­rts to promptly provide the information nee­ded for your company's modernization efforts. Our e­xceptional automation technologies e­liminate complexity and guarantee­ seamless adaptation to all data extracting re­quirements. Here­ are some of the offe­rings we provide:</p>

                    <div class="six-circle-data-extraction">
                        <div class="row">
                            <div class="col-lg-1 col-md-1 col-sm-3 col-xs-3">
                                <i class="fa-solid fa-chart-mixed-up-circle-dollar"></i>
                            </div>
                            <div class="col-lg-11 col-md-11 col-sm-12 col-xs-12">
                                <h3>1. Web Data Extraction Services:</h3>
                                <p> Use our advance­d <strong><a href="/web-scraping-services"> web scraping</a></strong> algorithms to extract valuable information from various we­bsites, including product specifications, pricing details, and custome­r testimonials. Our efficient te­chniques ensure swift and e­ffective data collection from online­ sources.</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-1 col-md-1 col-sm-3 col-xs-3">
                                <i class="fa-regular fa-folder-open"></i>
                            </div>
                            <div class="col-lg-11 col-md-11 col-sm-12 col-xs-12">
                                <h3>2. Document Extraction:</h3>
                                <p> Data can be e­fficiently extracted from dive­rse document formats, including PDFs, Word documents, and Exce­l spreadsheets. Both structure­d and unstructured data are handled with pre­cision to ensure the utmost accuracy and usability. Our te­am of professionals excels in e­xtracting relevant data for your specific ne­eds. </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-1 col-md-1 col-sm-3 col-xs-3">
                                <i class="fa-regular fa-images"></i>
                            </div>
                            <div class="col-lg-11 col-md-11 col-sm-12 col-xs-12">
                                <h3>3. Image and Text Extraction:</h3>
                                <p>Text is e­xtracted from photographs and scanned documents through the­ implementation of optical character re­cognition (OCR) technology. This solution demonstrates its optimal fit for industrie­s such as insurance, healthcare, and finance­, which regularly handle exte­nsive volumes of printed or handwritte­n information.</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-1 col-md-1 col-sm-3 col-xs-3">
                                <i class="fa-solid fa-database"></i>
                            </div>
                            <div class="col-lg-11 col-md-11 col-sm-12 col-xs-12">
                                <h3>4. Data Mining:</h3>
                                <p>Our <strong> <a href="/data-mining-services">data mining service­s</a></strong> offer a valuable solution for extracting important insights from vast datase­ts. By utilising our experts' analysis, pattern-spotting, and information e­xtraction services, you can make data-drive­n decisions and gain a competitive advantage­. Our specialists are skilled in de­aling with complex data structures, ensuring that you can harne­ss the power of your data effe­ctively.</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-1 col-md-1 col-sm-3 col-xs-3">
                                <i class="fa-solid fa-square-poll-vertical"></i>
                            </div>
                            <div class="col-lg-11 col-md-11 col-sm-12 col-xs-12">
                                <h3>5. Social Media Data Extraction:</h3>
                                <p>Utilise the­ vast amount of accessible data on <strong> social media </strong> platforms to uncove­r valuable insights about your target market, compe­titors, and industry trends. With our social media data extraction se­rvices, you can effortlessly acce­ss relevant information from leading we­bsites like Facebook, Twitte­r, and LinkedIn.</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-1 col-md-1 col-sm-3 col-xs-3">
                                <i class="fa-solid fa-user-magnifying-glass"></i>
                            </div>
                            <div class="col-lg-11 col-md-11 col-sm-12 col-xs-12">
                                <h3>6. Market Research Data Extraction:</h3>
                                <p>Our comprehe­nsive support for research activitie­s includes specific data extraction se­rvices tailored to mee­t your market research re­quirements. Our team of e­xperts diligently examine numerous online sources to provide­ you with relevant information on target marke­ts, prior research, and more. In addition, we­ offer additional services such as proce­ssing, enrichment, cleaning, and validation of your marke­t research data.</p>
                            </div>
                        </div>
                    </div>
                </div><!-- 6 circle close here -->
            </div>


            <!-- right side resources start -->
            <!-- Links Changes according to menu -->
            <div class="col-md-3 col-xs-12 sidebar">
                <div class="sideBox gotQuestion">
                    <h2>Resources</h2>
                    <ul class="sidelink">
                        <li class="casestudies-link"><a href="#casestudies">Case Studies</a></li>
                        <li class="Ourclients-link"><a href="#Ourclients">Our Clients</a></li>
                        <li class="Industries-link"><a href="#case-studies">Industries We Serve</a></li>
                    </ul>


                </div>

                <br><br>
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
            </div>
        </div>
        <!-- right side resources end -->
        <div class="clearfix"></div>

    </div>


    <div class="container">
        <div class="row why-choose-data-extraction-service-section">
            <h2 class="text-center"> Outsource Data Extraction Services to Tech2Globe Web Solutions</h2><br>
            <p class="text-center">Tech2Globe Web Solutions is an all-encompassing data extraction service provider with a proven track record of assisting numerous clients in accessing accurate data that aligns with their specific needs. By entrusting us with your <strong> data extraction services </strong>, you have the opportunity to save both time and resources, eliminating concerns about the precision and relevance of the extracted data. </p>
            <div class="row">
                <div class="col-md-2">
                    <div class="col-10 wpb_single_image d-none d-sm-block" style="border: 2px dotted #e5e2e2;padding:10px;">
                        <img src="/images/why-choose-data-extraction-image/why-choose-data-extraction-img1.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-10">
                    <h3>1. Experience and Proficiency:</h3>
                    <p>With our extensive tenure in this industry, Tech2Globe Web Solutions has earned a distinguished reputation as a leading supplier of top-notch <strong> data extraction services. </strong> Our team comprises highly skilled experts who possess intricate technical knowledge, enabling them to tackle even the most demanding extraction requirements and deliver exceptional outcomes.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <div class="col-10 wpb_single_image d-none d-sm-block" style="border: 2px dotted #e5e2e2;padding:10px;">
                        <img src="/images/why-choose-data-extraction-image/why-choose-data-extraction-img2.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-10">
                    <h3>2. Advanced Technology:</h3>
                    <p>As a leading firm in the field of data extraction, we continuously embrace the latest technological advancements. By using state-of-the-art equipment and software, we are able to extract data with utmost precision and effectiveness, ensuring that all your data needs are met accurately.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <div class="col-10 wpb_single_image d-none d-sm-block" style="border: 2px dotted #e5e2e2;padding:10px;">
                        <img src="/images/why-choose-data-extraction-image/why-choose-data-extraction-img3.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-10">
                    <h3>3. Emphasis on Quality Assurance:</h3>
                    <p>At our core, quality is paramount. To ensure the highest levels of data accuracy and integrity, we have implemented rigorous quality assurance procedures. Our team conducts thorough checks and validations to guarantee the reliability and error-free nature of the extracted data.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <div class="col-10 wpb_single_image d-none d-sm-block" style="border: 2px dotted #e5e2e2;padding:10px;">
                        <img src="/images/why-choose-data-extraction-image/why-choose-data-extraction-img4.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-10">
                    <h3>4. Flexibility in Scale:</h3>
                    <p>Whether you require a small project or large-scale data extraction solutions, Tech2Globe Web Solutions can accommodate your needs effortlessly. With our abundant resources and well-developed infrastructure, we possess the capability to manage projects of any size efficiently.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <div class="col-10 wpb_single_image d-none d-sm-block" style="border: 2px dotted #e5e2e2;padding:10px;">
                        <img src="/images/why-choose-data-extraction-image/why-choose-data-extraction-img5.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-10">
                    <h3>5. Ensuring Customer Satisfaction:</h3>
                    <p>Here at Tech2Globe Web Solutions, we prioritise the requirements of our valued clients. Through delivering exceptional services and surpassing their expectations, we strive to establish enduring connections with them. Our dedicated team of support professionals is consistently available to address any queries you may have and provide efficient aid
                    </p>
                </div>
            </div>

        </div>
    </div>



    <!--faq--startt--->
    <div class="container">
        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
            <div class="inner-page-heading-2">
                <h2>Frequently Asked Questions</h2>
            </div>
        </div>

        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
            <div id="faq" role="tablist" aria-multiselectable="true">

                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="questionOne">
                        <h5 class="panel-title">
                            <a data-toggle="collapse" data-parent="#faq" href="#answerOne" aria-expanded="false" aria-controls="answerOne">
                            1. How secure is my data with Tech2Globe Web Solutions?
                            </a>
                        </h5>
                    </div>
                    <div id="answerOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="questionOne">
                        <div class="panel-body">

                            <p>Data security is a top priority at Tech2Globe. To protect your data during the extraction process, we use strong security features including encryption and protocols for controlled access.
</p>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="questionTwo">
                        <h5 class="panel-title">
                            <a class="collapsed" data-toggle="collapse" data-parent="#faq" href="#answerTwo" aria-expanded="false" aria-controls="answerTwo">
                            2. Are you capable of managing significant data extraction projects?
                            </a>
                        </h5>
                    </div>
                    <div id="answerTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="questionTwo">
                        <div class="panel-body">
                            <p>Yes, we have the tools and materials necessary to manage tasks of any scale. Thus, you can outsource data extraction services to Tech2Globe Web Solutions, we can grow our services to fit your needs, whether you need to extract data from a few websites or a huge database.
</p>
                        </div>
                    </div>
                </div>


                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="questionTwo">
                        <h5 class="panel-title">
                            <a class="collapsed" data-toggle="collapse" data-parent="#faq" href="#answerThree" aria-expanded="false" aria-controls="answerTwo">
                            3. What kinds of data sources are available for extraction?

                            </a>
                        </h5>
                    </div>
                    <div id="answerThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="questionTwo">
                        <div class="panel-body">
                            <p> From websites, documents (PDFs, Word, Excel), photos, scanned papers, and social media platforms, to name a few, we are able to extract data.
</p>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="questionTwo">
                        <h5 class="panel-title">
                            <a class="collapsed" data-toggle="collapse" data-parent="#faq" href="#answerFour" aria-expanded="false" aria-controls="answerTwo">
                            4. How exact are the data that were extracted?
                            </a>
                        </h5>
                    </div>
                    <div id="answerFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="questionTwo">
                        <div class="panel-body">
                            <p>We put accuracy first and use cutting-edge technologies and methods to make sure that data extraction is done with extreme precision. For the purpose of preserving the accuracy and integrity of the retrieved data, our team conducts extensive quality checks and validations.
 </p>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="questionTwo">
                        <h5 class="panel-title">
                            <a class="collapsed" data-toggle="collapse" data-parent="#faq" href="#answerFive" aria-expanded="false" aria-controls="answerTwo">
                            5. How are the extracted data delivered?
                            </a>
                        </h5>
                    </div>
                    <div id="answerFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="questionTwo">
                        <div class="panel-body">
                            <p>We give the extracted data to you in the format of your choice, be it CSV, Excel, or another format that you have selected. We can also provide access through safe internet platforms or incorporate the data right into your systems.
</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--faq--ends----->



    

    <!--middle get a quote--->
    <div class="banner-bg banner-bpo d-block d-sm-none">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="d-block d-sm-none col-md-12" style="font-size: 33px;text-align: center;color: #deff00;">Data Extraction Services</h2>
                    <div class="contact-form-wrapper d-flex justify-content-center">
                        <form action="#" class="contact-form">
                            <h4 class="title" style="color:#fff;">Get a Quote </h4>
                            <br>
                            <div>
                                <input type="text" class="form-control rounded border-white mb-3 form-input" id="name" placeholder="Name" required>
                            </div>
                            <div>
                                <input type="email" class="form-control rounded border-white mb-3 form-input" placeholder="Email" required>
                            </div>
                            <div>
                                <input type="email" class="form-control rounded border-white mb-3 form-input" placeholder="Phone" required>
                            </div>
                            <div>
                                <textarea id="message" class="form-control rounded border-white mb-3 form-text-area" rows="2" cols="30" placeholder="Message" required></textarea>
                            </div>
                            <div class="submit-button-wrapper">
                                <input type="submit" value="Send">
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!--middle get a quote--->







    <!-- popup start here -->

    <div id="myModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-headerss"><button class="closess" type="button" data-dismiss="modal">×</button>
                    <a href=""></a>
                    <h4 class="modal-title" style="color: #c6010b;">Get in touch with us</h4>
                </div>
                <div class="modal-body">
                    <div class="popup">
                    <?php // onsubmit="doSubmit1();"
                        $min1  = 0;
                        $max1  = 9;
                        $num31 = rand($min1, $max1);
                        $num41 = rand($min1, $max1);
                        $sum2  = $num31 + $num41;
                        $actual_link = str_replace('.php', '', 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF']);
                        ?>
                        <form action=" " method="POST" enctype="multipart/form-data">
                            <?php $actual_link = str_replace('.php', '', 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF']); ?>
                            <input required="" type="text" class="form-control" id="name" onkeypress="return withoutspecialnumeric(event)" placeholder="Name" name="name" style="font-weight:500; color:black;">


                            <input name="pagelinks" id="pagelink" value="<?php echo $actual_link; ?>" type="hidden" />
                            <input type="email" required="" class="form-control" id="email" placeholder="Email" name="email" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" style="font-weight:500; color:black;">
                            <select id="areaCode" class="form-control " name="areaCode" required style="font-weight: 500 !important;margin-left: 36px; color:#808080 ;">



                                <option value="" data-dialcode="" style="color:#808080!important;">Select Country</option>
                                <option value="Maldives " data-dialcode="+960-">Maldives (+960) </option>
                                <option value="Mali" data-dialcode="+223-">Mali (+223) </option>
                                <option value="Malta" data-dialcode="+356-">Malta (+356) </option>
                                <option value="Marshall Islands " data-dialcode="+692-">Marshall Islands (+692) </option>
                                <option value="Martinique " data-dialcode="+596-">Martinique (+596) </option>
                                <option value="Mauritania " data-dialcode="+222-">Mauritania (+222) </option>
                                <option value="Mayotte " data-dialcode="+269-">Mayotte (+269) </option>
                                <option value="Mexico " data-dialcode="+52-">Mexico (+52) </option>
                                <option value="Moldova " data-dialcode="+373-">Moldova (+373) </option>
                                <option value="Monaco " data-dialcode="+377-">Monaco (+377) </option>
                                <option value="Mongolia " data-dialcode="+976-">Mongolia (+976) </option>
                                <option value="Montserrat " data-dialcode="+1664-">Montserrat (+1664) </option>
                                <option value="Morocco" data-dialcode="+212-">Morocco (+212) </option>
                                <option value="Mozambique " data-dialcode="+258-">Mozambique (+258) </option>
                                <option data-dialcode="+1" value="USA (+1) ">USA (+1) </option>

                                <option data-dialcode="+1-" value="USA (+1) ">USA (+1) </option>

                                <option data-dialcode="+44-" value="UK (+44)">UK (+44) </option>

                                <option data-dialcode="+1-" value="Canada (+1) ">Canada (+1) </option>

                                <option data-dialcode="+61-" value="Australia (+61)">Australia (+61) </option>

                                <option data-dialcode="+49-" value="Germany (+49)">Germany (+49) </option>

                                <option data-dialcode="+33-" value="France (+33) ">France (+33) </option>

                                <option data-dialcode="+45-" value="Denmark (+45)">Denmark (+45) </option>

                                <option data-dialcode="+65-" value="Singapore (+65)">Singapore (+65) </option>

                                <option data-dialcode="+971-" value="UAE (+971)">UAE (+971) </option>

                                <option data-dialcode="+64-" value="New Zealand (+64) ">New Zealand (+64) </option>

                                <option data-dialcode="+966-" value="Saudi Arabia (+966) ">Saudi Arabia (+966) </option>

                                <option data-dialcode="+91-" value="India (+91)">India (+91) </option>

                                <option data-dialcode="+359-" value="Bulgaria (+359)">Bulgaria (+359) </option>

                                <option data-dialcode="+86-" value="China (+86)">China (+86) </option>

                                <option data-dialcode="-" value="Japan (+81)">Japan (+81) </option>

                                <option data-dialcode="+54-" value="Argentina (+54)">Argentina (+54) </option>

                                <option data-dialcode="+43-" value="Austrai (+43)">Austrai (+43) </option>

                                <option data-dialcode="+32-" value="Belgium (+32)">Belgium (+32) </option>

                                <option data-dialcode="+973-" value="Bahrain (+973)">Bahrain (+973) </option>

                                <option data-dialcode="+257--" value="Burundi (+257) ">Burundi (+257) </option>

                                <option data-dialcode="+855-" value="Cambodia (+855)">Cambodia (+855) </option>

                                <option data-dialcode="+57-" value="Colombia (+57) ">Colombia (+57) </option>

                                <option data-dialcode="+385-" value="Croatia (+385) ">Croatia (+385) </option>

                                <option data-dialcode="+20-" value="Egypt (+20)">Egypt (+20) </option>

                                <option data-dialcode="+358-" value="inland (+358)">Finland (+358) </option>

                                <option data-dialcode="+353-" value="Ireland (+353) ">Ireland (+353) </option>

                                <option data-dialcode="+7880-" value="Georgia (+7880)">Georgia (+7880) </option>

                                <option data-dialcode="+502-" value="Guatemala (+502) ">Guatemala (+502) </option>

                                <option data-dialcode="+852-" value="Hong Kong (+852)">Hong Kong (+852) </option>

                                <option data-dialcode="+98-" value="Iran (+98) ">Iran (+98) </option>

                                <option data-dialcode="+62-" value="Indonesia (+62) ">Indonesia (+62) </option>

                                <option data-dialcode="+972-" value="Israel (+972)">Israel (+972) </option>

                                <option data-dialcode="+39-" value="Italy (+39)">Italy (+39) </option>

                                <option data-dialcode="+965-" value="Kuwait (+965)">Kuwait (+965) </option>

                                <option data-dialcode="+691-" value="Micronesia (+691) ">Micronesia (+691) </option>

                                <option data-dialcode="+961-" value="Lebanon (+961)">Lebanon (+961) </option>

                                <option data-dialcode="+47-" value="Norway (+47)">Norway (+47) </option>

                                <option data-dialcode="+968-" value="Oman (+968)">Oman (+968) </option>

                                <option data-dialcode="+63-" value="Philippines (+63) ">Philippines (+63) </option>

                                <option data-dialcode="+48-" value="Poland (+48) ">Poland (+48) </option>

                                <option data-dialcode="+7-" value="Russia (+7) ">Russia (+7) </option>

                                <option data-dialcode="+27-" value="South Africa (+27)">South Africa (+27) </option>

                                <option data-dialcode="+34-" value="Spain (+34)">Spain (+34) </option>

                                <option data-dialcode="+46-" value="Sweden (+46) ">Sweden (+46) </option>

                                <option data-dialcode="+90-" value="Turkey (+90) ">Turkey (+90) </option>

                                <option data-dialcode="+380-" value="Ukraine (+380)">Ukraine (+380) </option>

                                <option disabled>______________________________________________________________</option>

                                <option data-dialcode="+213-" value="Algeria (+213)">Algeria (+213) </option>

                                <option data-dialcode="+376-" value="Andorra (+376)">Andorra (+376) </option>

                                <option data-dialcode="+244-" value="Angola (+244)">Angola (+244) </option>

                                <option data-dialcode="+1264-" value="Anguilla (+1264)">Anguilla (+1264) </option>

                                <option data-dialcode="+1268-" value="Antigua &amp; Barbuda (+1268)">Antigua &amp; Barbuda (+1268) </option>

                                <option data-dialcode="+599-" value="Antilles (Dutch) (+599) ">Antilles (Dutch) (+599) </option>


                                <option data-dialcode="+374-" value="Armenia (+374)">Armenia (+374) </option>

                                <option data-dialcode="+297-" value="Aruba (+297)">Aruba (+297) </option>

                                <option data-dialcode="+247-" value="scension Island (+247) ">Ascension Island (+247) </option>



                                <option data-dialcode="+43-" value="Austria (+43) ">Austria (+43) </option>

                                <option data-dialcode="+994-" value="Azerbaijan (+994)">Azerbaijan (+994) </option>

                                <option data-dialcode="+1242-" value="Bahamas (+1242)">Bahamas (+1242) </option>

                                <option data-dialcode="+880-" value="Bangladesh (+880) ">Bangladesh (+880) </option>

                                <option data-dialcode="+1246-" value="Barbados (+1246)">Barbados (+1246) </option>

                                <option data-dialcode="+375-" value="Belarus (+375)">Belarus (+375) </option>

                                <option data-dialcode="+501-" value="Belize (+501) ">Belize (+501) </option>

                                <option data-dialcode="+229-" value="Benin (+229) ">Benin (+229) </option>

                                <option data-dialcode="+1441-" value="Bermuda (+1441)">Bermuda (+1441) </option>

                                <option data-dialcode="+975-" value="Bhutan (+975) ">Bhutan (+975) </option>

                                <option data-dialcode="+591-" value="Bolivia (+591) ">Bolivia (+591) </option>

                                <option data-dialcode="+387-" value="Bosnia Herzegovina (+387)">Bosnia Herzegovina (+387) </option>

                                <option data-dialcode="+267-" value="Botswana (+267)">Botswana (+267) </option>

                                <option data-dialcode="+55-" value="Brazil (+55) ">Brazil (+55) </option>

                                <option data-dialcode="+673-" value="Brunei (+673) ">Brunei (+673) </option>


                                <option data-dialcode="+226-" value="Burkina Faso (+226)">Burkina Faso (+226) </option>

                                <option data-dialcode="+237-" value="Cameroon (+237) ">Cameroon (+237) </option>

                                <option data-dialcode="+238-" value="Cape Verde Islands (+238) ">Cape Verde Islands (+238) </option>

                                <option data-dialcode="+1345-" value="Cayman Islands (+1345)">Cayman Islands (+1345) </option>

                                <option data-dialcode="+236-" value="Central African Republic (+236)">Central African Republic (+236) </option>

                                <option data-dialcode="+56-" value="Chile (+56)">Chile (+56) </option>

                                <option data-dialcode="+269-" value="Comoros (+269) ">Comoros (+269) </option>

                                <option data-dialcode="+242-" value="Congo (+242)">Congo (+242) </option>

                                <option data-dialcode="+682-" value="Cook Islands (+682)">Cook Islands (+682) </option>

                                <option data-dialcode="+506-" value="Costa Rica (+506)">Costa Rica (+506) </option>

                                <option data-dialcode="+53-" value="Cuba (+53)">Cuba (+53) </option>

                                <option data-dialcode="+90392-" value="Cyprus North (+90392) ">Cyprus North (+90392) </option>

                                <option data-dialcode="+357-" value="Cyprus South (+357)">Cyprus South (+357) </option>

                                <option data-dialcode="+42-" value="Czech Republic (+42) ">Czech Republic (+42) </option>

                                <option data-dialcode="+2463-" value="Diego Garcia (+2463) ">Diego Garcia (+2463) </option>

                                <option data-dialcode="+253-" value="Djibouti (+253) ">Djibouti (+253) </option>

                                <option data-dialcode="+1809-" value="Dominica (+1809)">Dominica (+1809) </option>

                                <option data-dialcode="+1809-" value="Dominican Republic (+1809)">Dominican Republic (+1809) </option>

                                <option data-dialcode="+593-" value="Ecuador (+593)">Ecuador (+593) </option>

                                <option data-dialcode="+353-" value="Eire (+353)">Eire (+353) </option>

                                <option data-dialcode="+503-" value="El Salvador (+503)">El Salvador (+503) </option>

                                <option data-dialcode="+240-" value="Equatorial Guinea (+240) ">Equatorial Guinea (+240) </option>

                                <option data-dialcode="+291-" value="Eritrea (+291)">Eritrea (+291) </option>

                                <option data-dialcode="+372-" value="Estonia (+372)">Estonia (+372) </option>

                                <option data-dialcode="+251-" value="Ethiopia (+251)">Ethiopia (+251) </option>

                                <option data-dialcode="+500-" value="Falkland Islands (+500)">Falkland Islands (+500) </option>

                                <option data-dialcode="+298-" value="Faroe Islands (+298) ">Faroe Islands (+298) </option>

                                <option data-dialcode="+679-" value="Fiji (+679) ">Fiji (+679) </option>

                                <option data-dialcode="+594-" value="French Guiana (+594)">French Guiana (+594) </option>

                                <option data-dialcode="+689-" value="French Polynesia (+689)">French Polynesia (+689) </option>

                                <option data-dialcode="+241-" value="Gabon (+241) ">Gabon (+241) </option>

                                <option data-dialcode="+220-" value="Gambia (+220) ">Gambia (+220) </option>

                                <option data-dialcode="+233-" value="Ghana (+233) ">Ghana (+233) </option>

                                <option data-dialcode="+350-" value="Gibraltar (+350) ">Gibraltar (+350) </option>

                                <option data-dialcode="+30-" value="Greece (+30)">Greece (+30) </option>

                                <option data-dialcode="+299-" value="Greenland (+299)">Greenland (+299) </option>

                                <option data-dialcode="+1473-" value="Grenada (+1473)">Grenada (+1473) </option>

                                <option data-dialcode="+590-" value="Guadeloupe (+590)">Guadeloupe (+590) </option>

                                <option data-dialcode="+671-" value="Guam (+671)">Guam (+671) </option>

                                <option data-dialcode="+224-" value="Guinea (+224)">Guinea (+224) </option>

                                <option data-dialcode="+245-" value="Guinea - Bissau (+245)">Guinea - Bissau (+245) </option>

                                <option data-dialcode="+592-" value="Guyana (+592)">Guyana (+592) </option>

                                <option data-dialcode="+509-" value="Haiti (+509) ">Haiti (+509) </option>

                                <option data-dialcode="+504-" value="Honduras (+504)">Honduras (+504) </option>

                                <option data-dialcode="+36-" value="Hungary (+36) ">Hungary (+36) </option>

                                <option data-dialcode="+354-" value="Iceland (+354) ">Iceland (+354) </option>

                                <option data-dialcode="+964-" value="Iraq (+964) ">Iraq (+964) </option>

                                <option data-dialcode="+225-" value="Ivory Coast (+225) ">Ivory Coast (+225) </option>

                                <option data-dialcode="+1876-" value="Jamaica (+1876)">Jamaica (+1876) </option>

                                <option data-dialcode="+81-" value="apan (+81) ">Japan (+81) </option>

                                <option data-dialcode="+962-" value="Jordan (+962)">Jordan (+962) </option>

                                <option data-dialcode="+7-" value="Kazakhstan (+7) ">Kazakhstan (+7) </option>

                                <option data-dialcode="+254-" value="Kenya (+254) ">Kenya (+254) </option>

                                <option data-dialcode="+686-" value="Kiribati (+686)">Kiribati (+686) </option>

                                <option data-dialcode="+850-" value="Korea North (+850)">Korea North (+850) </option>

                                <option data-dialcode="+82-" value="Korea South (+82) ">Korea South (+82) </option>


                                <option data-dialcode="+996-" value="Kyrgyzstan (+996) ">Kyrgyzstan (+996) </option>

                                <option data-dialcode="+856-" value="Laos (+856) ">Laos (+856) </option>

                                <option data-dialcode="+371-" value="Latvia (+371)">Latvia (+371) </option>

                                <option data-dialcode="+266-" value="Lesotho (+266)">Lesotho (+266) </option>

                                <option data-dialcode="+231-" value="Liberia (+231)">Liberia (+231) </option>

                                <option data-dialcode="+218-" value="Libya (+218) ">Libya (+218) </option>

                                <option data-dialcode="+417-" value="Liechtenstein (+417) ">Liechtenstein (+417) </option>

                                <option data-dialcode="+370-" value="Lithuania (+370)">Lithuania (+370)</option>

                                <option data-dialcode="+352-" value="Luxembourg (+352) ">Luxembourg (+352) </option>

                                <option data-dialcode="+853-" value="Macao (+853)">Macao (+853) </option>

                                <option data-dialcode="+389-" value="Macedonia (+389) ">Macedonia (+389) </option>

                                <option data-dialcode="+261-" value="Madagascar (+261)">Madagascar (+261) </option>

                                <option data-dialcode="+265-" value="Malawi (+265)">Malawi (+265) </option>

                                <option data-dialcode="+60-" value="Malaysia (+60)">Malaysia (+60) </option>

                            </select>

                            <!-- <input type="text" placeholder="Phone Number" id="dialCode"/> -->
                            <input type="text" class="form-control" placeholder="Mobile No." id="dialCode" name="phone" onkeypress='return isNumberKey(event)' minlength="10" maxlength="20" required style="font-weight:500; color:black;">


                            <textarea name="description" required class="form-control" id="description" placeholder="Description" rows="3" style="font-weight:500; color:black!important;"></textarea>


                            <div class="form-group">
                            
                                <div class="text-dark" style='font-size: 14px; margin-left: 50px;'>
                                    <strong><b style="color: black;">Captcha Please enter sum :</b></strong> <span class="badge badge-secondary" style="margin-right: 4px;background-color: black;color: #fff; padding: 6px 8px;"><?php echo $num31; ?></span><b style="color:black;">+</b><span class="badge badge-secondary" style="margin-left: 4px; margin-right: 5px;background-color: black;color: white;padding: 6px 8px;"><?php echo $num41; ?></span> ?
                                </div><br>
                                <input type="text" class="form-control  quiz-control1" id="quiz2" placeholder="Please Enter Sum*" required>
                            
                                <div style="display:none" class="alert alert-danger" id='msgcaptch2'>Please enter right captcha </div>

                            </div>



                            <input type="submit" id="contact" data-mata="<?php echo $sum2; ?>" disabled name="contact_submit_form" value="Send Query">

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--popup close here-->
    <script>
        // for form
        $("#areaCode").on("change", function() {
            $('#dialCode').val($('option:selected', this).data('dialcode'));
        });
        $("select[name=country]").change(function() {
            $('input#phone').val($('option:selected', this).data('countrycode'));
        });
    </script>
    <script>
        const submitButton2 = document.getElementById("contact");
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
                submitButton1.setAttribute("disabled", "");
                //console.log('f12');
            }
        });
        //  function doSubmit1() {
        //   document.getElementById('contact-us1').action ='innerformemail.php';

        //   return true;
        // }
    </script>


    <?php include("include/inner-form.php"); ?>
    <?php include("include/footer.php"); ?>
<!doctype html>
<html>
<?php include("include/meta.php"); ?>
<style>
h1 {display: inline-block;position: relative;font-size: 36px;margin-bottom: 10px;line-height: inherit;text-transform: capitalize;text-align: left !important;color: #17161a;font-family: system-ui;font-weight: 700;}
p {color: #515151;font-family: calibri;font-size: 17px;line-height: 24px !important;text-align: center;}
.center-heading {text-align: center;}
.center-heading .section-title {font-weight: 400;font-size: 28px;color: #3b566e;letter-spacing: 1.1px;line-height: 38px;margin-bottom: 20px;}
.center-heading.colored .section-title {color: #ffffff;}
.center-text {text-align: center;font-weight: 400;font-size: 16px;color: #6f8ba4;line-height: 28px;letter-spacing: 1px;margin-bottom: 50px;}
.center-text.colored {color: #c7e5ff;}
.center-text p {margin-bottom: 30px;}
.services-small-item {display: block;background: #fff;box-shadow: 0 2px 48px 0 rgba(0, 0, 0, 0.06);border-radius: 5px;padding: 40px 28px;text-align: center;
-webkit-transition: all 0.3s ease 0s;-moz-transition: all 0.3s ease 0s;-o-transition: all 0.3s ease 0s;transition: all 0.3s ease 0s;position: relative;
z-index: 2;margin-bottom: 30px;}
.services-small-item:before {content: '';position: absolute;width: 100%;height: 100%;top: 0px;left: 0px;border-radius: 5px;background-image: linear-gradient(135deg, #80d0c7 0%, #13547a 100%);-webkit-transition: all 0.3s ease 0s;-moz-transition: all 0.3s ease 0s;-o-transition: all 0.3s ease 0s;transition: all 0.3s ease 0s;opacity: 0;}

/*--blog----*/

.sec-title{position:relative;margin-bottom:30px;}

.sec-title .title{position: relative;display: block;font-size: 16px;line-height: 1em;color: #ff8a01;font-weight: 500;background: rgb(247,0,104);
background: -moz-linear-gradient(to left, rgba(247,0,104,1) 0%, rgba(68,16,102,1) 25%, rgba(247,0,104,1) 75%, rgba(68,16,102,1) 100%);
background: -webkit-linear-gradient(to left, rgba(247,0,104,1) 0%,rgba(68,16,102,1) 25%,rgba(247,0,104,1) 75%,rgba(68,16,102,1) 100%);
background: linear-gradient(to left, rgba(247,0,104) 0%,rgba(68,16,102,1) 25%,rgba(247,0,104,1) 75%,rgba(68,16,102,1) 100%);
filter: progid:dximagetransform.microsoft.gradient( startcolorstr='#f70068', endcolorstr='#441066',gradienttype=1 );
color: transparent;-webkit-background-clip: text;-webkit-text-fill-color: transparent;text-transform: uppercase;letter-spacing: 5px;margin-bottom: 15px;}

.sec-title h2{position:relative;display: inline-block;font-size:48px;line-height:1.2em;color:#1e1f36;font-weight:700;}
.sec-title .text{position: relative;font-size: 16px;line-height: 28px;color: #888888;margin-top: 30px;}
.sec-title.light h2,.sec-title.light .title{color: #ffffff;-webkit-text-fill-color:inherit; }
.pricing-section {position: relative;padding: 100px 0 80px;overflow: hidden;}
.pricing-section .outer-box{max-width: 1100px;margin: 0 auto;}
.pricing-section .row{margin: 0 -30px;}
.pricing-block{position: relative;padding: 0 30px;margin-bottom: 40px;}
.pricing-block .inner-box{position: relative;background-color: #ffffff;box-shadow: 0 20px 40px rgba(0,0,0,0.08);padding: 0 0 30px;max-width: 370px;
margin: 0 auto;border-bottom: 20px solid #40cbb4;height: 600px;}

.pricing-block .icon-box{position: relative;padding: 50px 30px 0;background-color: #40cbb4;text-align: center;}
.pricing-block .icon-box:before{position: absolute;left: 0;bottom: 0;height: 75px;width: 100%;border-radius: 50% 50% 0 0;background-color: #ffffff;
content: "";}

.pricing-block .icon-box .icon-outer{position: relative;height: 150px;width: 150px;background-color: #ffffff;border-radius: 50%;margin: 0 auto;padding: 20px;}
.pricing-block .icon-box i{position: relative;display: block;height: 130px;width: 130px;line-height: 120px;border: 5px solid #40cbb4;border-radius: 50%;
font-size: 50px;color: #40cbb4;-webkit-transition:all 600ms ease;-ms-transition:all 600ms ease;-o-transition:all 600ms ease;-moz-transition:all 600ms ease;
transition:all 600ms ease;}
.pricing-block .inner-box:hover .icon-box i{transform:rotate(360deg);}
.pricing-block .price-box{position: relative;text-align: center;padding: 10px 20px;}
.pricing-block .title{position: relative;display: block;font-size: 24px;line-height: 1.2em;color: #222222;font-weight: 600;}
.pricing-block .price{display: block;font-size: 30px;color: #222222;font-weight: 700;color: #40cbb4;}
.pricing-block .features{position: relative;max-width: 200px;margin: 0 auto 20px;}
.pricing-block .features li{position: relative;display: block;font-size: 14px;line-height: 30px;color: #848484;font-weight: 500;padding: 5px 0;
padding-left: 30px;border-bottom: 1px dashed #dddddd;}
.pricing-block .features li:before {position: absolute;left: 0;top: 50%;font-size: 16px;color: #2bd40f;-moz-osx-font-smoothing: grayscale;-webkit-font-smoothing: antialiased;display: inline-block;font-style: normal;font-variant: normal;text-rendering: auto;line-height: 1;content: "\f058";
font-family: "font awesome 5 free";margin-top: -8px;}
.pricing-block .features li.false:before{color: #e1137b;content: "\f057";}
.pricing-block .features li a{color: #848484;}
.pricing-block .features li:last-child{border-bottom: 0;}
.pricing-block .btn-box{position: relative;text-align: center;}
.pricing-block .btn-box a{position: relative;display: inline-block;font-size: 14px;line-height: 25px;color: #ffffff;font-weight: 500;padding: 8px 30px;
background-color: #40cbb4;border-radius: 10px;border-top:2px solid transparent;border-bottom:2px solid transparent;-webkit-transition: all 400ms ease;-moz-transition: all 400ms ease;-ms-transition: all 400ms ease;-o-transition: all 400ms ease;transition: all 300ms ease;}
.pricing-block .btn-box a:hover{color: #ffffff;}
.pricing-block .inner-box:hover .btn-box a{color:#40cbb4;background:none;border-radius:0px;border-color:#40cbb4;}
.pricing-block:nth-child(2) .icon-box i,.pricing-block:nth-child(2) .inner-box{border-color: #1d95d2;}
.pricing-block:nth-child(2) .btn-box a,.pricing-block:nth-child(2) .icon-box{background-color: #1d95d2;}

.pricing-block:nth-child(2) .inner-box:hover .btn-box a{color:#1d95d2;background:none;border-radius:0px;border-color:#1d95d2;}
.pricing-block:nth-child(2) .icon-box i,.pricing-block:nth-child(2) .price{color: #1d95d2;}
.pricing-block:nth-child(3) .icon-box i,.pricing-block:nth-child(3) .inner-box{border-color: #ffc20b;}
.pricing-block:nth-child(3) .btn-box a,.pricing-block:nth-child(3) .icon-box{background-color: #ffc20b;}
.pricing-block:nth-child(3) .icon-box i,.pricing-block:nth-child(3) .price{color: #ffc20b;}
.pricing-block:nth-child(3) .inner-box:hover .btn-box a{color:#ffc20b;background:none;border-radius:0px;border-color:#ffc20b;}

.pricing-block:nth-child(4) .icon-box i,.pricing-block:nth-child(4) .inner-box{border-color: #cddc39;}
.pricing-block:nth-child(4) .btn-box a,.pricing-block:nth-child(4) .icon-box{background-color: #cddc39;}
.pricing-block:nth-child(4) .icon-box i,.pricing-block:nth-child(4) .price{color: #cddc39;}
.pricing-block:nth-child(4) .inner-box:hover .btn-box a{color:#ffc20b;background:none;border-radius:0px;border-color:#cddc39;}

.pricing-block:nth-child(5) .icon-box i,.pricing-block:nth-child(5) .inner-box{border-color: pink;}
.pricing-block:nth-child(5) .btn-box a,.pricing-block:nth-child(5) .icon-box{background-color: pink;}
.pricing-block:nth-child(5) .icon-box i,.pricing-block:nth-child(5) .price{color: pink;}
.pricing-block:nth-child(5) .inner-box:hover .btn-box a{color:#ffc20b;background:none;border-radius:0px;border-color:pink;}

.section-title h2 {font-size: 40px;line-height: 45px;position: relative;margin-bottom: 20px;color: #333333;text-transform: capitalize;}
.services-area {margin-bottom: -30px;}
.serviecs-block .single-serviecs-block {margin: 30px 0;}
.single-serviecs-block {padding: 5px 5px;background-color: rgb(255, 255, 255);box-shadow: 0px 0px 20px 0px rgba(0, 0, 0, 0.1);border-radius: 5px;
text-align: center;overflow: hidden;position: relative;display: block;height: 425px;margin-bottom: 30px;}
.single-serviecs-block h3 a {color: #333333;margin-bottom: 15px;margin-top: 80px;display: block;overflow: hidden;transition: 0.5s;}
.single-serviecs-block i {color: #fff;font-size: 50px;height: 140px;width: 140px;line-height: 170px;text-align: center;background: #bd0000;border-radius: 50%;
position: absolute;top: -50px;left: 50%;transform: translateX(-50%);transition: 0.6s;}

.faq {padding: 46px 0 39px;background: #f7fbff;min-height: 52vh;}
.faq .section-title {margin-bottom: 54px;}
.faq .section-title h2 {margin-bottom: 22px;}
.faq .accordion .card {border: none;margin-bottom: 30px;}
.faq .accordion .card:not(:first-of-type) .card-header:first-child {border-radius: 10px;}
.faq .accordion .card .card-header {border: none;border-radius: 10px;padding: 0;}
.faq .accordion .card .card-header h5 {padding: 0;}
.faq .accordion .card .card-header h5 button {color: #1e3056;font-size: 18px;font-weight: 500;text-decoration: none;padding: 0 30px 0 70px;height: 80px;
display: block;width: 100%;color: rgba(30, 48, 86, 0.8);text-align: left;background: #fff;-webkit-box-shadow: 0px -50px 140px 0px rgba(69, 81, 100, 0.1);
box-shadow: 0px -50px 140px 0px rgba(69, 81, 100, 0.1);border-radius: 10px 10px 0 0;position: relative;}
.faq .accordion .card .card-header h5 button:after {position: absolute;left: 30px;top: 50%;margin-top: -10px;width: 20px;height: 20px;background-color: transparent;color: #ff5f74;text-align: center;border: 1px solid #ff5f74;border-radius: 50%;line-height: 100%;content: '\f067';font-size: 10px;
line-height: 18px;font-family: "Font Awesome 5 Free";font-weight: 900;}
.faq .accordion .card .card-header h5 button.collapsed {background: #fff;border-radius: 10px;-webkit-box-shadow: none;box-shadow: none;border: 1px solid rgba(97, 125, 255, 0.2);}

.faq .accordion .card .card-header h5 button[aria-expanded="true"]:after {content: '\f068';color: #fff;background-image: -webkit-linear-gradient(-180deg, #5e7eff 0%, #ff5f74 30%, #a85fff 100%);}

.faq .accordion .card .card-body {-webkit-box-shadow: 0px 15px 140px 0px rgb(69 81 100 / 10%);box-shadow: 0px 15px 140px 0px rgb(69 81 100 / 10%);
border-radius: 0 0 10px 10px;padding-top: 0;/* margin-top: 0px; */padding-left: 72px;padding-right: 70px;padding-bottom: 23px;color: rgba(30, 48, 86, 0.8);
line-height: 30px;font-size: 17px;padding-top: 10px;font-family: calibri;font-size: 19px;}

.home-testimonial{background-color: #207de9;height: 380px}.home-testimonial-bottom{background-color: #f8f8f8;transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;margin-top: 20px;margin-bottom: 0px;position: relative;height: 130px;top: 190px}.home-testimonial h3{color: var(--orange);font-size: 14px;font-weight: 500;text-transform: uppercase}.home-testimonial h2{color: white;font-size: 28px;font-weight: 700}.testimonial-inner{position: relative;top: -174px}.testimonial-pos{position: relative;top: 24px}.testimonial-inner .tour-desc{border-radius: 5px;padding: 40px}.color-grey-3{font-family: "Montserrat", Sans-serif;font-size: 14px;color: #6c83a2}.testimonial-inner img.tm-people{width: 60px;height: 60px;-webkit-border-radius: 50%;border-radius: 50%;-o-object-fit: cover;object-fit: cover;max-width: none}.link-name{font-family: "Montserrat", Sans-serif;font-size: 14px;color: #6c83a2}.link-position{font-family: "Montserrat", Sans-serif;font-size: 12px;color: #6c83a2}

.jumbotron {
	background-size: cover;
	    background-position: center center;
    background-repeat: no-repeat;
	background-color:#f6f6f6;
	background-image:url(images/seo-service-banner.svg);
	margin-bottom: 0px;
  position: relative;
  overflow: hidden;
  padding-top: 30px;
  padding-bottom: 5px;
  // padding-top: 250px;
  // padding-bottom: 250px;
  border-radius: 0px;
  background-color: $white;
  &-background {
    position: absolute;
    left: 50%;
    bottom: 0%;
    margin: auto;
    z-index: -1;
    overflow: hidden;
    height: 3000px;
    width: 3000px;
    background-image: radial-gradient($primary, $secondary);
    transform: translateX(-85%) rotate(15deg);
    z-index: 1;
    border-radius: 5000px;
  }
  .container {
    position: relative;
    z-index: 2;
    color: #212121;
  }
  &-title {
    text-transform: uppercase;
    font-weight: 900;
  }
  &-description {
    font-size: 16px;
    word-spacing: 2px;
    font-weight: 500;
  }
  .cta-btn {
    display: inline-flex;
    margin: 30px auto;
    text-decoration: none;
    padding: 16px 48px;
    color: $primary;
    background-color: #212121;
    text-transform: uppercase;
    letter-spacing: 1px;
    &:hover {
      background-color: darken(#212121, 10%);
    }
  }
}
.hero-image-container {
  height: 300px;
  width: 400px;
  display: inline-flex;
  justify-content: center;
  align-items: center;
  background-color: $primary;
  border-radius: 500px;
  position: relative;
  &::before,
  &::after {
    content: '';
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    margin: auto;
  }
  &::before {
    height: calc(100% - 40px);
    width: calc(100% - 40px);
    border-radius: 500px;
    background-color: $secondary;
    z-index: 1;
    background-image: radial-gradient($primary 50%, $secondary);
  }
  &::after {
    height: calc(100% - 80px);
    width: calc(100% - 80px);
    border-radius: 500px;
    background-image: radial-gradient($primary 20%, $secondary);
    z-index: 2;
    box-shadow: 0px 0px 2px rgba(0, 0, 0, 0.25);
  }
  img {
    max-height: 100%;
    position: relative;
    z-index: 3;
  }
}


.credits{
  position:fixed;
  bottom: 0;
  left: 0;
  right: 0;
  margin:auto;
  text-align:center;
  background-color: #000000;
  color:$primary;
  padding:8px auto;
}


.jumbotron h1{
    font-size: 39px;
    font-weight: 700;
}

@media screen and (max-width: 768px){
.jumbotron h1 {
font-size: 22px;
    font-weight: 600;
    text-align: center !important;
}}

@media screen and (max-width: 768px){
.jumbotron p {
    margin-bottom: 15px !important;
    font-size: 15px !important;
    font-weight: 500 !important;
    font-family: calibri !important;
    text-align: -webkit-center;
}}

.jumbotron p {
    color: #515151;
    font-family: calibri;
    font-size: 19px;
    line-height: 27px !important;
    text-align: justify;
}
h1:after {
    border-bottom: 1px;
    content: "";
    position: absolute;
    width: 100%;
    bottom: -7px;
    left: 0;
}

@media only screen and (max-width: 767px){
.breadcrumb > li {
    color: #000;
    text-transform: uppercase;
    font-size: 13px !important;
}}


.section-title {
  text-align: center;
  max-width: 720px;
  margin-top: -6px;
  margin-left: auto;
  margin-right: auto;
}

.section-title h2 {
  font-size: 35px;
  font-weight: 700;
  margin-bottom: 0;
}

.section-title p {
  max-width: 850px;
  margin: 0 auto;
}

.section-title .bar {
  height: 4px;
  width: 85px;
  background: #f44336;
  margin: 20px auto 25px;
  position: relative;
  border-radius: 5px;
  overflow: hidden;
}

.section-title .bar::before {
  content: '';
  position: absolute;
  left: 0;
  top: 0;
  height: 100%;
  width: 5px;
  background: #ffffff;
  -webkit-animation-duration: 2s;
          animation-duration: 2s;
  -webkit-animation-timing-function: linear;
          animation-timing-function: linear;
  -webkit-animation-iteration-count: infinite;
          animation-iteration-count: infinite;
  -webkit-animation-name: MOVE-BG;
          animation-name: MOVE-BG;
}

@-webkit-keyframes MOVE-BG {
  from {
    -webkit-transform: translateX(0);
  }
  to {
    -webkit-transform: translateX(85px);
  }
}

@keyframes MOVE-BG {
  from {
    -webkit-transform: translateX(0);
            transform: translateX(0);
  }
  to {
    -webkit-transform: translateX(85px);
            transform: translateX(85px);
  }
}

button {
  outline: 0 !important;
}


.pricing-table-box {
  padding-bottom: 30px;
  background: #ffffff;
  text-align: center;
  z-index: 1;
  position: relative;
  border-radius: 5px;
  background-position: center center;
  overflow: hidden;
  -webkit-box-shadow: 7px 5px 30px 0 rgba(72, 73, 121, 0.15);
          box-shadow: 7px 5px 30px 0 rgba(72, 73, 121, 0.15);
  -webkit-transition: .4s;
  transition: .4s;
}
.pricing-table-box:after {
    content: "";
    position: absolute;
    width: 100%;
    top: 0;
    background-image: url(https://i.ibb.co/kq1jLKz/background-dassed.png);
    opacity: 0.5;
    height: 100%;
    background-size: contain;
    background-repeat: repeat;
}
.pricing-table-box .pricingTable-header {
  padding: 30px 15px 45px;
  background: #f44336;
  -webkit-clip-path: polygon(50% 100%, 100% 60%, 100% 0, 0 0, 0 60%);
          clip-path: polygon(50% 100%, 100% 60%, 100% 0, 0 0, 0 60%);
  position: relative;
}

.pricing-table-box .pricingTable-header::before {
  content: "";
  width: 400px;
  height: 400px;
  border-radius: 50%;
  position: absolute;
  right: -50%;
  top: -130%;
  background: repeating-radial-gradient(rgba(255, 255, 255, 0.05), rgba(255, 255, 255, 0.2) 20%);
  -webkit-transition: .4s;
  transition: .4s;
}

.pricing-table-box .title {
  font-size: 23px;
  font-weight: 700;
  color: #ffffff;
  text-transform: uppercase;
  margin-bottom: 15px;
}

.pricing-table-box .price-value {
  display: block;
  font-size: 45px;
  font-weight: 700;
  color: #ffffff;
  margin-bottom: 30px;
}

.pricing-table-box .price-value span {
  font-size: 15px;
  text-transform: uppercase;
  margin-left: -10px;
}

.pricing-table-box .price-value sup {
  font-size: 23px;
  top: -25px;
}

.pricing-table-box .pricing-content {
  padding: 30px 25px;
  margin-bottom: 0;
  list-style-type: none;
}

.pricing-table-box .pricing-content li {
color: #828893;
    text-transform: capitalize;
    border-bottom: 1px solid #eee;
    margin-bottom: 12px;
    padding-bottom: 12px;
    color: #515151;
    font-family: calibri;
    font-size: 19px;
    text-align: center;
}


.pricing-table-box .pricing-content li:last-child {
  border-bottom: none;
  padding-bottom: 0;
  margin-bottom: 0;
}

.pricing-table-box:hover {
  -webkit-transform: translateY(-10px);
          transform: translateY(-10px);
}

.pricing-table-box:hover .pricingTable-header::before {
  right: 50%;
}



.partners-area {
    display: block;
}
.partners-area {
    background: url(img/fb/fb-advertising-bg.jpg) no-repeat;
    background-size: cover;
}
.partners-area {
    text-align: center;
    padding: 40px 0;
}

#content ul {
    font-size: 16px;
    padding: 0 0 0 20px;
    line-height: 25px;
}

.partners-area ul.partners {
    max-width: 60%;
    margin: 0 auto;
}
.partners-area ul.partners {
    display: flex;
    list-style: none;
    padding: 0 !important;
    justify-content: space-around;
}

.partners-area ul.partners li img {
    max-width: 100%;
}

.display-4 {
    /* font-size: 3.5rem; */
    font-weight: 300;
    line-height: 1.2;
    font-size: 48px;
}

</style>  
<body>
<?php include("include/header.php"); ?>

    <main role="main">
      <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="jumbotron">
        <div class="jumbotron-background"></div>
        <div class="container">
          <div class="row col-sm-10 col-sm-offset-1 mt-3 mb-2 text-left">
            <div class="col-md-8">
              <h1 class="display-3 jumbotron-title">SEO Services
</h1>
              <div class="row">
                <div class="col-md-11">
                  <p class="jumbotron-description">
Optimize your website by investing in the right SEO services provider company.
 </p><br>
                </div>
                <div class="col-md-3">
				<br>
                  <a href="/contact-us" class="btn btn-danger d-none d-sm-block">Contact Us »</a>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="h-100 d-flex justify-content-center align-items-center">
                <div class="hero-image-container">
                  
			      </div>
	              </div>
            </div>
          </div>
	        </div>
      </div>
    </main>

<!-- banner end -->
<div class="breadcrumbbg" style="background-color: #dbdbdb;">
  <div class="container">
    <div class="row">
      <ul class="breadcrumb">
        <li><a href="http://www.tech2globe.com/">home</a></li>
        <li><a href="#s">services</a></li>
        <li>SEO Services</li>
      </ul>
    </div>
  </div>
</div>
<!-- section 1 -->
<div class="partners-area d-none d-sm-block">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- <h2 class="title" style="margin: 0 0 30px;font-weight: 600;color:#0e2e67;">Hire Top Rated <span>B2B Web Designers</span></h2> -->
                            <ul class="partners">
                                <li><img src="images/top-digital-marketing-2021.webp" width="165" alt="Customer Choice Award Sitejabber" class="partner"></li>
                                <li><img src="images/top-small-business-seo-company-cluth-2021.webp" width="165"  alt="Top Small Business SEO Company Clutch" class="partner"></li>
                                <li><img src="images/top-wordpress-developers-2021.webp" width="165"  alt="Top Wordpress Developers Clutch" class="partner"></li>
                                <li><img src="images/customer-choice-award-sitejabber-2018.webp" width="165"  alt="Top SEO Services CompanyGoodFirms" class="partner"></li>
                                <li><img style="margin-top: -4px;" src="images/top-seo-services-company-goodfirms.webp" width="165"  alt="Top SEO Services CompanyGoodFirms" class="partner"></li>
                                <li><img src="images/search-berg-trustpilot-reviews.webp" width="165"  alt="Search Berg Trustpilot Reviews" class="partner"></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>

<section class="container">
<div class="row">
<div class="col-sm-10 col-sm-offset-1 mt-3 mb-2 text-left"> 
<br>
<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12">
 <h1>About Our SEO Company In New York</h1>
<p class="text-justify">Being a leading New York-based SEO firm Tech2Globe provides full digital marketing services to companies of all kinds. The business is committed to assisting customers in enhancing their online exposure, raising their search engine ranks, and boosting organic traffic to their websites by providing <strong>SEO services for small businesses.</strong><br>

Our team is made up of skilled SEO experts having experience of more than 14 years who are knowledgeable in all facets of search engine optimization (SEO). We approach SEO from a results-driven perspective, concentrating on enhancing our clients' online visibility and ultimately generating more leads and revenues.<br>



</p>
<br>
</div>




<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12">
<img src="images/seo-digital-marketing.webp" class="img-responsive img-fluid" alt="seo-services">
</div>

</div>
</div>
</section>
<!-- inner page content end -->


<section class="container">
<div class="row">
<div class="col-sm-10 col-sm-offset-1 mt-3 mb-2 text-left"> 
<br>

<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12">
<img src="images/know-About-1.png" class="img-responsive img-fluid" alt="seo-services">
</div>
<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12">
 <h1>Know More About Us</h1>
<p class="text-justify">One feature that distinguishes our <strong>affordable SEO services for small businesses</strong> from other New York-based SEO agencies is our dedication to openness and communication. In order to establish trusting, long-lasting relationships with our clients, we think that open, honest communication is crucial. As a result, it places a high focus on keeping clients updated and involved at every stage of the SEO process.<br>

Recognizing the individuality of every organization, Tech2Globe collaborates closely with clients to create <strong>SEO services for small businesses</strong> that are unique to their needs and objectives. No matter how big or small your company is, Tech2Globe can assist you in achieving your SEO goals and expanding your internet presence.
</p>
<br>
</div>





</div>
</div>
</section>
<!-- inner page content end -->

<section class="pb-5 mb-3" style="background-color: #ffc107;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="center-heading">
                        <h1 class="text-center">How To Get In Touch With Us In Relation To SEO For Small Businesses?
</h1>
						<br>
						<h1 class="text-center">Call us at <span class="display-4"><strong style=
						"color:#000;">+1-516-858-5840</strong></span></h1>
						<br>
<a href="/contact-us" class="btn btn-danger  btn-lg" style="background-color: #cb0016;">Contact Us</a>
                    </div>
                </div>
            </div>
			<br>
			<br>

 </div>
    </section>

<section class="pricing-section">
        <div class="container">
            <div class="col-md-12 text-center">
                <h2 style="color: #000000;
    font-size: 36px;
    text-transform: capitalize;">Affordable SEO Services For Small Businesses By Tech2Globe</h2><br>
				<p class="pb-3">Your online business will expand if you fully implement our technical SEO services and raise your visibility in Google search results. Our SEO services provider company will additionally report on the positions of your page with respect to the employed keywords, SEO link building, and indexed pages on a weekly and monthly basis.
</p><br>
            </div>

            <div class="outer-box">
                <div class="row">
                    <!-- pricing block -->
                    <div class="pricing-block col-lg-4 col-md-6 col-sm-12 wow fadeinup">
                        <div class="inner-box">
                            <div class="icon-box">
								 <div class="icon-outer"><img src="images/seo-dm.png" alt="seo-Services" class="img-responsive"></div>
		                           </div>
                            <div class="price-box">
                                <div class="title"> SEO Techniques</div>
                                <p>Our best SEO services in the USA give you all the details you need to know about your position in the search results, where you can make improvements, and how to get there. Every website is different, so we don't design similar solutions for them all. Our team of experienced SEO professionals will work with you to create a customized strategy that fits your business needs and budget.  The information you need about your position in the search results.
</p>
                            </div>
                        </div>
                    </div>

                    <!-- pricing block -->
                    <div class="pricing-block col-lg-4 col-md-6 col-sm-12 wow fadeinup" data-wow-delay="400ms">
                        <div class="inner-box">
                            <div class="icon-box">
								 <div class="icon-outer"><img src="images/Off-Page-Keyword-seo.png" alt="seo-Services" class="img-responsive"></div>
                            </div>
                            <div class="price-box">
                                <div class="title">Off-Page Keyword</div>
                                <p>Our SEO company in New York always has the tools it needs to produce relevant content, increase your chances of appearing in search results by using keywords strategically, and use SEO services for small businesses to identify the information that your audience is actively looking for due to our off-page keyword research services. The main aim is to hire SEO company is to find keywords for goods and services.

								</p>
                            </div>
                        </div>
                    </div>

                    <!-- pricing block -->
                    <div class="pricing-block col-lg-4 col-md-6 col-sm-12 wow fadeinup" data-wow-delay="800ms">
                        <div class="inner-box">
                            <div class="icon-box">
								 <div class="icon-outer"><img src="images/link-building-seo.png" alt="seo-Services" class="img-responsive"></div>
                            </div>
                            <div class="price-box">
                                <div class="title">Link Building</div>
                                <p>Our staff works with you by combining SEO for small business to send emails to website owners, evaluate your backlinks for problematic signals, and remove any links that can harm your ranking in search engines. We also give you thorough information on the state of your backlinks so you can monitor your development. Our affordable SEO services for small businesses can also assist you in creating fresh, high-quality backlinks that are pertinent to your website.
</p>
                            </div>
                        </div>
                    </div>
					
                    <!-- pricing block -->
                    <div class="pricing-block col-lg-4 col-md-6 col-sm-12 wow fadeinup">
                        <div class="inner-box">
                            <div class="icon-box">
                           		<div class="icon-outer"><img src="images/youtube-marketing-seo.png" alt="seo-Services" class="img-responsive"></div>
                            </div>
                            <div class="price-box">
                                <div class="title">Youtube Marketing</div>
                                <p>This platform receives the most visitors of any other. You can still advertise your services on other people's videos to reach a large audience even if your company doesn't make many films. Additionally, you may utilize this platform to market your goods and services and cultivate connections with possible clients by using SEO for small business. By using YouTube, you may strengthen your company's internet reputation.

</p>
                            </div>
                        </div>
                    </div>

                    <!-- pricing block -->
                    <div class="pricing-block col-lg-4 col-md-6 col-sm-12 wow fadeinup" data-wow-delay="400ms">
                        <div class="inner-box">
                            <div class="icon-box">
                                <div class="icon-outer"><img src="images/content-dm.png" alt="seo-Services" class="img-responsive"></div>
                            </div>
                            <div class="price-box">
                                <div class="title">Content Marketing</div>
                                <p>With a solid content strategy, we assist you with affordable SEO services for small businesses. We are aware that SEO services for small businesses are a long-term investment and that it needs a thorough approach to be effective. We'll examine your website, find areas for development, and create a content strategy to raise your search engine ranking with our technical SEO services. We'll keep an eye on the functionality of your website.


								</p>
								
                            </div>
                        </div>
                    </div>
					
					
	                    <!-- pricing block -->
                    <div class="pricing-block col-lg-4 col-md-6 col-sm-12 wow fadeinup" data-wow-delay="400ms">
                        <div class="inner-box">
                            <div class="icon-box">
                                <div class="icon-outer"><img src="images/ppc-dm.png" alt="seo-Services" class="img-responsive"></div>
                            </div>
                            <div class="price-box">
                                <div class="title">Pay Per Click</div>
                                <p>Tech2Globe, a company providing SEO for small businesses, has been assisting brands all around the world with our cutting-edge PPC advertising solutions. We are one of the few SEO company in New York that has begun developing sophisticated digital technologies that understand search engine intricacy. We provide an affordable SEO services provider company that you can hire right away. You could cooperate if you're looking for the same services.


								</p>
								<br>
                            </div>
                        </div>
                    </div>				
	                </div>
            </div>
        </div>
    </section>

		
<section class="container">
<div class="row">
<div class="col-sm-10 col-sm-offset-1 mt-2" style="min-height:400px;">
<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-12">
<img src="images/Dm-data/Group-37.webp" class="img-responsive" alt="">

</div>
<div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-xs-12">
<h1><strong>Why Only Tech2Globe For Technical SEO Services?</strong></h1>
<p style="text-align: justify;">
With a variety of SEO services for small businesses available, Tech2Globe can accommodate the requirements of companies of all shapes and sizes. Services like keyword research, on-page optimization, link building, content production, analytics, and reporting are all included in its packages. The business can also alter its offerings to suit your unique requirements and objectives.<br>

The team of specialists in our organization maintains current trends and SEO standards in order to keep the clients ahead of the competition. Tech2Globe stands out from other SEO for small business in New York due to its dedication to remaining up-to-date with the most recent methods and strategies. We offer a variety of different digital marketing services in addition to SEO, such as PPC advertising, social media marketing, email marketing, and more. Our objective is to offer clients a full range of digital marketing services that can assist them in achieving their objectives and expanding their enterprises.<br>

By selecting Tech2Globe as your SEO company in New York, you're collaborating with a group of professionals who are dedicated to your success. Our organization will put in an endless effort to support your online business growth by assisting you in achieving your SEO goals and increasing organic traffic to your website. Hire SEO company Tech2Globe, if you're seeking an SEO company in New York that can assist you in enhancing your online visibility, raising your search engine ranks, and bringing more organic traffic to your website. To find out more about our offerings and how they can support you in achieving your SEO goals, get in touch with us right away.<br>

</p>

</div>
</div>
</div>
</section>


		
<section class="pb-5" id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="center-heading">
                        <h1 class="text-center">We've partnered With</h1>
						<br>
						<p>We are happy to have teamed with big and credible names in the industry!
</p>
                    </div>
                </div>
            </div>
			<br>
			<br>

            <div class="row">
                <div class="col-lg-2 col-sm-6">
                    <a href="#" class="services-small-item">
                        <div class="center">
                            <img src="images/Dm-data/cer-1.png" class="img-responsive img-fluid" alt="seo-services">
                        </div>
                    </a>
                </div>
                <div class="col-lg-2 col-sm-6">
                    <a href="#" class="services-small-item">
                        <div class="center">
                            <img src="images/Dm-data/cer-2.png" class="img-responsive img-fluid" alt="seo-services">
                        </div>
                    </a>
                </div>
                <div class="col-lg-2 col-sm-6">
                    <a href="#" class="services-small-item">
                        <div class="center">
                           <img src="images/Dm-data/cer-3.png" class="img-responsive img-fluid" alt="seo-services">
                        </div>
                    </a>
                </div>
                <div class="col-lg-2 col-sm-6">
                    <a href="#" class="services-small-item">
                        <div class="center">
                           <img src="images/Dm-data/cer-7.png" class="img-responsive img-fluid" alt="seo-services">
                        </div>
                    </a>
                </div>
				
	                <div class="col-lg-2 col-sm-6">
                    <a href="#" class="services-small-item">
                        <div class="center">
                           <img src="images/Dm-data/cer-5.png" class="img-responsive img-fluid" alt="seo-services">
                        </div>
                    </a>
                </div>			
				
				
	                <div class="col-lg-2 col-sm-6">
                    <a href="#" class="services-small-item">
                        <div class="center">
                           <img src="images/Dm-data/cer-6.png" class="img-responsive img-fluid" alt="seo-services">
                        </div>
                    </a>
                </div>					
				
				
            </div>
        </div>
    </section>

<!-- new section -->

<!---------box-------->


<section class="container">
<div class="row">
<div class="col-sm-12 mt-2 mb-5 text-center"> 
            <div class="container">
              <div class="col-md-12 text-center">
                <h2 style="color: #000000;
    font-size: 36px;
    text-transform: capitalize;">What Makes Tech2Globe An Ideal Choice For SEO Services For Small Businesses?</h2><br>
        <p class="pb-3">For small businesses who wish to enhance their online presence and increase organic website traffic, Tech2Globe offers reasonably priced SEO services. Our team of knowledgeable SEO experts is aware of the special difficulties that small businesses have, and we collaborate closely with our clients to create SEO for small businesses that are tailored to their particular requirements and objectives.

</p><br>
            </div>
                
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="single-serviecs-block" style="padding: 22px 10px;">
                            <i class="fa fa-search"></i>
                            <h3><a href="#">Keyword Research</a></h3>
                            <p>We carry out in-depth research to determine the keywords that are most pertinent to the target markets and businesses of our clients. This helps in the creation of content that is search engine optimized and raises the ranks of our client's websites.


                             </p>
             
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="single-serviecs-block" style="padding: 22px 10px;">
                            <i class="fa fa-cart-arrow-down"></i>
              <i class="fas fa-shopping-basket"></i>
                            <h3><a href="#">Ecommerce</a></h3>
                            <p>Customer behaviour, technology integration, and competitive pressure all have an impact on how effectively your online store performs by providing exceptional user experiences for your digital marketing services across all touchpoints where clients are likely to contact you.

</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="single-serviecs-block" style="padding: 22px 10px;">
                            <i class="fa fa-file-text"></i>
                            <h3><a href="#">On-Page Optimisation</a></h3>
                            <p>We make our clients' websites user-friendly, straightforward to use, and search engine optimized. Title tags, meta descriptions, header tags, and other on-page components should all be optimized.

</p>
                        </div>
                    </div>
          
          
                    <div class="col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="single-serviecs-block" style="padding: 22px 10px;">
                            <i class="fa fa-file-text"></i>
                            <h3><a href="#">Content Creation</a></h3>
                            <p>We produce excellent, informative material that is search engine optimized and intended to interest and inform the target audiences of our companies.
 
</p>
                        </div>
                    </div>          
                </div>

                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="single-serviecs-block" style="padding: 22px 10px;">
                            <i class="fa fa-database"></i>
                            <h3><a href="#">Analytics And Data </a></h3>
                            <p>We often provide our clients with analytics and data so they can monitor their progress and see the outcomes of our work.


                             </p>
             
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="single-serviecs-block" style="padding: 22px 10px;">
                            <i class="fa fa-user"></i>
              <i class="fa fa-user"></i>
                            <h3><a href="#">Hire SEO company</a></h3>
                            <p>Tech2Globe right away if you are a small business searching for reasonably priced SEO services that may enhance your internet presence and increase natural traffic to your website. Our team of knowledgeable SEO experts is prepared to support you in achieving your objectives and expanding your online business.


</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="single-serviecs-block" style="padding: 22px 10px;">
                            <i class="fa fa-book"></i>
                            <h3><a href="#">An Analysis Of Our Projects</a></h3>
                            <p>A digital marketing company called Tech2Globe offers the greatest technical SEO services to assist you in utilizing the best advertising strategies to advertise your business on a global scale. Looking at our most recent projects will allow you to see the successful work we've accomplished for our clients.

</p>
                        </div>
                    </div>
          
          
                    <div class="col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="single-serviecs-block" style="padding: 22px 10px;">
                            <i class="fa fa-building"></i>
                            <h3><a href="#"> Affordable SEO Services for Small Businesses</a></h3>
                            <p>We offer a variety of services that are targeted to the demands of companies of different sizes and price ranges as part of our affordable SEO services for small businesses.
</p>
                        </div>
                    </div>          
                </div>
            </div>
</div>
</div>
</section>

<!-- new section end -->


<!-- TESTIMONIAL -->
!-- TESTIMONIALS -->

<section class="home-testimonial mt-5 mb-5">
    <div class="container-fluid">
        <div class="row justify-content-center testimonial-pos text-center">
            <div class="col-md-12 pt-4 justify-content-center text-white">
                <h1 style="color: white;">Client Testimonials That Demonstrate Our Professionalism In SEO For Small Business</h1>
            </div>
           <!--  <div class="col-md-12 d-flex justify-content-center">
                <h2>Explore the students experience</h2>
            </div> -->
        </div>
        <section class="home-testimonial-bottom">
            <div class="container testimonial-inner">
                <div class="row justify-content-center">
                    <div class="col-md-4 col-md-4 col-xl-4 col-lg-4 col-xs-12 style-3">
                        <div class="tour-item ">
                            <div class="tour-desc bg-white">
                                <div class="tour-text color-grey-3 text-center">&ldquo;<p>Our small company has benefited greatly from having Tech2Globe as a partner. Our online presence has increased thanks to their SEO services, which have also increased natural traffic to our website. Their staff of professionals is skilled, kind, and attentive to our demands.
<br><br></p>&rdquo;</div>
                                <div class="d-flex justify-content-center pt-2 pb-2"><img class="tm-people" src="https://images.pexels.com/photos/6625914/pexels-photo-6625914.jpeg" alt=""></div>
                                <div class="link-name d-flex justify-content-center">Balbir Kaur</div>
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-md-4 col-xl-4 col-lg-4 col-xs-12 style-3">
                        <div class="tour-item ">
                            <div class="tour-desc bg-white">
                                <div class="tour-text color-grey-3 text-center">&ldquo;<p>Since I have been working with Tech2Globe for a while, I have been really pleased with their SEO offerings. They have assisted me in boosting my website's traffic and search engine rankings. They always go above and beyond to make sure I am happy with their job and that their team is professional, experienced, and ready to do so.
</p>&rdquo;</div>
                                <div class="d-flex justify-content-center pt-2 pb-2"><img class="tm-people" src="https://images.pexels.com/photos/415829/pexels-photo-415829.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt=""></div>
                                <div class="link-name d-flex justify-content-center">Genki</div>
                              
                            </div>
                        </div>
                    </div>
                   <div class="col-md-4 col-md-4 col-xl-4 col-lg-4 col-xs-12 style-3 mb-5">
                        <div class="tour-item ">
                            <div class="tour-desc bg-white">
                                <div class="tour-text color-grey-3 text-center">&ldquo;<p>Their SEO services have helped us raise our website's search engine ranks and increase website traffic, which has eventually increased our revenue and sales. Their team always goes above and beyond to make sure we are happy with their job and is courteous, professional, and responsive.
</p>&rdquo;</div>
                                <div class="d-flex justify-content-center pt-2 pb-2"><img class="tm-people" src="https://images.pexels.com/photos/4946604/pexels-photo-4946604.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt=""></div>
                                <div class="link-name d-flex justify-content-center">Ahay</div>
                               
                            </div>
                        </div>
                    </div>
                </div>
        </section>
</section>
<!-- TESTIMONIAL END -->







<section class="faq mb-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-12 col-lg-12 text-center">
                    <div class="section-title text-center">
                        <h1>FAQ's</h1>
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
                                                	Can I Monitor How Your SEO Company In New York Is Doing On My Project?

                                            </button>
                                        </h5>
                                    </div>
    
                                    <div id="collapseOne" class="collapse" data-parent="#accordionExample">
                                        <div class="card-body">
                                          Yes, the majority of New York-based SEO agencies will give you regular updates on your progress that include information on your website's organic traffic, search engine rankings, and other important performance metrics. You may find areas for development and see how your SEO campaign is doing with the aid of these reports.

                                        </div>
                                    </div>
                                </div>
    
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                	
How Long Does It Take For Your SEO Services To Produce Results?




                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseTwo" class="collapse" data-parent="#accordionExample">
                                        <div class="card-body">
                                             The complexity of the website, the level of industry competition, and the particular services being offered can all affect how long it takes to see results from our SEO services. We will provide you with a schedule for anticipated outcomes depending on the particular requirements and circumstances of your company.

                                        </div>
                                    </div>
                                </div>
		
								
								
								
                            </div>
    
                            <div class="col-xl-6 col-lg-6">
 
                                    <div class="card">
                                    <div class="card-header">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse6" aria-expanded="false" aria-controls="collapseTwo">
                                              How Might Your Seo Company In New York Benefit My Business?
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapse6" class="collapse" data-parent="#accordionExample">
                                        <div class="card-body">
                                  By enhancing your website's online visibility, boosting your search engine ranks, and generating more organic traffic, our SEO company in New York can benefit your organization. In the end, this can increase leads and sales for your company.

                                        </div>
                                    </div>
                                </div>
								
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse7" aria-expanded="false" aria-controls="collapseThree">
                                                	What Are The Prices For Your SEO Services?

                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapse7" class="collapse" data-parent="#accordionExample">
                                        <div class="card-body">
The price of SEO services varies according to a number of variables, such as the size and complexity of the website, the level of industry competitiveness, and the particular services required. However, we aim to provide budget-friendly plans and flexible payment choices designed to satisfy the demands of small businesses.

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

















<!-- inner page content end -->



  <?php include("include/amazon-case-study.php"); ?>

<br><br> 
<!-- -----------------------------------------case studies end---------------------------------------------------->

<!-- client testimonials -->

<div class="testimonials" id="testimonials">

  <?php include("include/amazon-testimonials.php"); ?>

</div>

<!-- client testimonials end -->

<?php include("include/inner-form.php"); ?>
<?php include("include/footer.php"); ?>
    </body>
    </html>
	
	
	
	

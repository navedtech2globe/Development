<?php if(session_status()!=PHP_SESSION_ACTIVE){ @session_start(); } ?>
<!doctype html>

<html>
<?php include("include/meta.php"); ?>
  <body class="home" ng-app="tech2globe-app">
  <style>
  .trabble-bg {
    <!--background: transparent url(../images/second-section-bg.webp) no-repeat scroll center center/cover;---->
    position: relative;
}
.image-bg-padding-100 {
    padding: 100px 0;
}


.section-title, .section-title-white, .section-title-white-2 {
    margin-bottom: 60px;
    margin-top: 10px;
}

.section-title h2, .section-title-white h2, .section-title-white-2 h2 {
    font-size: 37px;
    text-transform: capitalize;
}
.section-title-white h2, .section-title-white-2 h2 {
    color: #ffffff;
}
.section-title h2, .section-title-white h2, .section-title-white-2 h2 {
background-color: #f5000000	;
    background-image: url(../images/line.png);
    background-repeat: no-repeat;
    color: #524949;
    font-size: 35px;
    font-weight: 600;
    padding-bottom: 20px;
    position: relative;
    text-transform: uppercase;
    background-position: center bottom;
    z-index: 2;
}

.section-title-white h2:before, .section-title-white h2:after, .section-title-white-2 h2:before, .section-title-white-2 h2:after {
    background: #ffffff none repeat scroll 0 0;
}

.section-title-white p, .section-title-white-2 p {
    color: #ffffff;
}
.section-title p, .section-title-white p, .section-title-white-2 p {
color: #c30009;
    margin: 0 auto;
    max-width: 785px;
    position: relative;
    z-index: 2;
    line-height: 25px;
    font-size: 22px;
    text-align: center;
}

.single-travel {
background: #e1e1e138 none repeat scroll 0 0;
    padding: 20px;
    margin-bottom: 40px;
    border-radius: 3px;
    position: relative;
    z-index: 2;
    transition: all ease-in-out 0.5s;
    margin-bottom: 30px;
    border: 1px solid #dddddd85;
}

.single-travel .travel-number {
float: left;
    margin-right: 12px;
    margin-top: 0px;
}

.single-travel .travel-number span {
    color: rgb(34 31 31);
    font-weight: 500;
    font-size: 42px;
}

.single-travel .travel-content h4 {
    font-size: 20px;
    color: #c30009;
    font-weight: 600;
}

.single-travel .travel-content p {
    margin: 0;
    width: 90%;
    line-height: 24px;
}

.our-portfolio-content > h4 {
    font-size: 45px;
    color: #c9040f;
    text-transform: uppercase;
    font-weight: 400;
    margin-bottom: 25px;
}

.owl-carousel .owl-item img {
    display: block;
    width: 17%;
    float: left;
    border: 5px solid #fff;
    border-radius: 20px;
    margin-left: 54px;
    margin-right: 35px;
    margin-top: 15px;
}
.testimonial-item.equal-height.style-6 {
    background-color: #eee;
    border-radius: 10px;
    margin: 10px;
}
.cell-right {
    text-align: center;
    margin-right: 80px;
    padding-top: 35px;
    padding-bottom: 20px;
}
.testimonial-name {
    font-weight: 600;
}
.testimonial-content.quote {
    padding: 17px 55px;
}
.et_right_sidebar #main-content .container:before{
    display: none;
}
#main-content .container {
    padding-top: 10px;
}
i.fa.fa-quote-left {
    padding: 0px 10px;
    color: #999;
}


.our-tool {
    padding: 1px 0 19px 0;
    background: url(../images/tool-bg.jpg) center center fixed;
    background-size: cover;
}
  </style>
<?php 
include("include/connection.php"); 
include("include/header.php"); 
?>
<!-- New Slider Update -->

<div class="container-fluid banner d-none d-sm-block">
 <img src="images/slidertg2.jpg" alt="slider_banner" class="img-fluid"> 
  <div class="green-box">
  <h1 class="text-align:left;">Tech2Globe services are geared to deliver results that you expect from consulting partner. </h1>
<p>Trust, transparency & collaborative approach is a start!</p>
<br>
<button type="button" class="btn btn-danger btn-lg mobile"><a href="/aboutus" class="abt">About Us</a></button>
<button type="button" class="btn btn-danger btn-lg mobile"><a href="/contact-us" class="abt">Contact Us</a></button>

</div>
 </div>
 
 
 <div class="container-fluid banner d-block d-sm-none">
 <img src="images/slidertg2.jpg" alt="slider_banner" class="img-fluid"> 
  <div class="green-box">
  <h1 class="text-align:left;">Tech2Globe services are geared to deliver results that you expect from consulting partner. </h1>
<p>Trust, transparency & collaborative approach is a start!</p>
<br>


</div>
 </div>
 
 


<!-- End Slider Update -->

<!-- Start Service Porfolio -->
<div class="bg-gray pt-5 pb-5 d-none d-sm-block">
    <div class="container">
      <div class="row">
        <div class="section-head col-sm-12">
          <h4><span>Leading </span> Services</h4>
          <p>We help you to enhance experiences and innovative business models to rapidly create more customer engagement and take through enterprise growth.</p>
        </div>
		 <div class="row">
        <div class="col-lg-4 col-sm-6">
          <div class="item"> <span class="icon feature_box_col_one"><i class="fa fa-globe"></i></span>
            <h6><a href="/ecommerce-marketplace-management">Ecommerce Development</a></h6>
            <p>We have a specialized talents to provide complete solutions for Ecommerce marketplaces.</p>
			<h2>
			<span class="badge bg-secondary tec2gb"><a href="/shopify-development-company">Shopify Development</a></span> 
			<span class="badge bg-secondary tec2gb"><a href="/magento-development-company">Magento Development</a></span> 
			<span class="badge bg-secondary tec2gb"><a href="/shopify-product-upload-services">Shopify Product Upload</a></span>
			<span class="badge bg-secondary tec2gb"><a href="/ebay-store-design-services">Ebay Store Design</a></span>
			<span class="badge bg-secondary tec2gb"><a href="/WooCommerce-development-services">Woocommerce Development</a></span>
			</h2>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="item"> <span class="icon feature_box_col_two"><i class="fa fa-anchor"></i></span>
            <h6><a href="/digital-marketing-services">Online Marketing</a></h6>
            <p>We provides the best 360° online marketing services for all your business needs.</p>
			<h2>
			<span class="badge bg-secondary tec2gb"><a href="/ecommerce-seo-services">Ecommerce SEO</a></span> 
			<span class="badge bg-secondary tec2gb"><a href="/influencer-marketing-package">Influencer Marketing</a></span> 
			<span class="badge bg-secondary tec2gb"><a href="/social-media-optimization">Social Media Optimization</a></span>
			<span class="badge bg-secondary tec2gb"><a href="/ppc-services">PPC Services</a></span>
			<span class="badge bg-secondary tec2gb"><a href="/search-engine-optimization">Search Engine Optimization</a></span>
			</h2>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="item"> <span class="icon feature_box_col_three"><i class="fa fa-hourglass-half"></i></span>
            <h6><a href="/amazon-consulting-services">Amazon Services</a></h6>
            <p>Want to skyrocket your sales? Our amazon consulting experts can assist you to get the best outcome.</p>
			<h2>
			<span class="badge bg-secondary tec2gb"><a href="/amazon-consulting-services">Amazon Consulting</a></span> 
			<span class="badge bg-secondary tec2gb"><a href="/store-creation">Amazon Store Creation</a></span> 
			<span class="badge bg-secondary tec2gb"><a href="/enhanced-brand-content">Enhanced Brand Content</a></span>
			<span class="badge bg-secondary tec2gb"><a href="/vendor-account-management">Vendor Account Management</a></span>
			<span class="badge bg-secondary tec2gb"><a href="/amazon-dropshipping">Amazon Dropshipping</a></span>
			</h2>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="item"> <span class="icon feature_box_col_four"><i class="fa fa-database"></i></span>
            <h6><a href="/software-development">Software & App Development</a></h6>
            <p>We provides software development services for completing software developing needs.</p>
			<h2>
			<span class="badge bg-secondary tec2gb"><a href="/php-development-services">PHP Development</a></span> 
			<span class="badge bg-secondary tec2gb"><a href="/java-development-services">Java Development</a></span> 
			<span class="badge bg-secondary tec2gb"><a href="/react-native-app-development">React Native App</a></span>
			<span class="badge bg-secondary tec2gb"><a href="/android-application-development-services">Android App</a></span>
			<span class="badge bg-secondary tec2gb"><a href="/iphone-ipad-application-development-services">IOS App</a></span>
			</h2>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="item"> <span class="icon feature_box_col_five"><i class="fa fa-upload"></i></span>
            <h6><a href="/image-photo-editing-services">Image Editing Services</a></h6>
            <p>We provides high quality services and 100% accuracy for your photo editing services needs.</p>
			<h2>
			<span class="badge bg-secondary tec2gb"><a href="/image-photo-editing-services">Photo Editing</a></span> 
			<span class="badge bg-secondary tec2gb"><a href="/watermark-removal-services">Watermark Removal</a></span> 
			<span class="badge bg-secondary tec2gb"><a href="/sky-replacement-services">Sky Replacement</a></span>
			<span class="badge bg-secondary tec2gb"><a href="/photo-enhancement-services">Photo Retouching</a></span>
			<span class="badge bg-secondary tec2gb"><a href="/sky-replacement-services">Background Removal</a></span>
			</h2>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="item"> <span class="icon feature_box_col_six"><i class="fa fa-camera"></i></span>
            <h6>BPO-KPO/Data Management</h6>
            <p>Tech2Globe is an IT Outsourcing Partner to complete your all Data Management Services.</p>
			<h2>
			<span class="badge bg-secondary tec2gb"><a href="/data-mining-services">Data Mining</a></span> 
			<span class="badge bg-secondary tec2gb"><a href="/data-entry-services">Data Entry</a></span> 
			<span class="badge bg-secondary tec2gb"><a href="/data-management-services">Data Management</a></span>
			<span class="badge bg-secondary tec2gb"><a href="/document-processing-services">Document Processing</a></span>
			<span class="badge bg-secondary tec2gb"><a href="/magento-product-upload-services">Magento Product Upload</a></span>
			</h2>
          </div>
        </div>
		</div>
      </div>
    </div>
  </div>


<!---mobie_screenStart-->
<div class="bg-gray pt-5 pb-5 d-block d-sm-none">
    <div class="row">
      <div class="row">
        <div class="section-head col-sm-12">
          <h4><span>Leading </span> Services</h4>
          <p>We help you to enhance experiences and innovative business models to rapidly create more customer engagement and take through enterprise growth.</p>
        </div>
		 <div class="row">
        <div class="col-lg-4 col-sm-6">
          <div class="item"> <span class="icon feature_box_col_one"><i class="fa fa-globe"></i></span>
            <h6><a href="/ecommerce-marketplace-management">Ecommerce Development</a></h6>
            <p>We have a specialized talents to provide complete solutions for Ecommerce marketplaces.</p>
			<h2>
			<span class="badge bg-secondary tec2gb1"><a href="/shopify-development-company">Shopify Development</a></span> 
			<span class="badge bg-secondary tec2gb1"><a href="/magento-development-company">Magento Development</a></span> 
			<span class="badge bg-secondary tec2gb1"><a href="/shopify-product-upload-services">Shopify Product Upload</a></span>
			<span class="badge bg-secondary tec2gb1"><a href="/ebay-store-design-services">Ebay Store Design</a></span>
			<span class="badge bg-secondary tec2gb1"><a href="/WooCommerce-development-services">Woocommerce Development</a></span>
			</h2>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="item"> <span class="icon feature_box_col_two"><i class="fa fa-anchor"></i></span>
            <h6><a href="/digital-marketing-services">Online Marketing</a></h6>
            <p>We provides the best 360° online marketing services for all your business needs.</p>
			<h2>
			<span class="badge bg-secondary tec2gb1"><a href="/ecommerce-seo-services">Ecommerce SEO</a></span> 
			<span class="badge bg-secondary tec2gb1"><a href="/influencer-marketing-package">Influencer Marketing</a></span> 
			<span class="badge bg-secondary tec2gb1"><a href="/social-media-optimization">Social Media Optimization</a></span>
			<span class="badge bg-secondary tec2gb1"><a href="/ppc-services">PPC Services</a></span>
			<span class="badge bg-secondary tec2gb1"><a href="/search-engine-optimization">Search Engine Optimization</a></span>
			</h2>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="item"> <span class="icon feature_box_col_three"><i class="fa fa-hourglass-half"></i></span>
            <h6><a href="/amazon-consulting-services">Amazon Services</a></h6>
            <p>Want to skyrocket your sales? Our amazon consulting experts can assist you to get the best outcome.</p>
			<h2>
			<span class="badge bg-secondary tec2gb1"><a href="/amazon-consulting-services">Amazon Consulting</a></span> 
			<span class="badge bg-secondary tec2gb1"><a href="/store-creation">Amazon Store Creation</a></span> 
			<span class="badge bg-secondary tec2gb1"><a href="/enhanced-brand-content">Enhanced Brand Content</a></span>
			<span class="badge bg-secondary tec2gb1"><a href="/vendor-account-management">Vendor Account Management</a></span>
			<span class="badge bg-secondary tec2gb1"><a href="/amazon-dropshipping">Amazon Dropshipping</a></span>
			</h2>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="item"> <span class="icon feature_box_col_four"><i class="fa fa-database"></i></span>
            <h6><a href="/software-development">Software & App Development</a></h6>
            <p>We provides software development services for completing software developing needs.</p>
			<h2>
			<span class="badge bg-secondary tec2gb1"><a href="/php-development-services">PHP Development</a></span> 
			<span class="badge bg-secondary tec2gb1"><a href="/java-development-services">Java Development</a></span> 
			<span class="badge bg-secondary tec2gb1"><a href="/react-native-app-development">React Native App</a></span>
			<span class="badge bg-secondary tec2gb1"><a href="/android-application-development-services">Android App</a></span>
			<span class="badge bg-secondary tec2gb1"><a href="/iphone-ipad-application-development-services">IOS App</a></span>
			</h2>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="item"> <span class="icon feature_box_col_five"><i class="fa fa-upload"></i></span>
            <h6><a href="/image-photo-editing-services">Image Editing Services</a></h6>
            <p>We provides high quality services and 100% accuracy for your photo editing services needs.</p>
			<h2>
			<span class="badge bg-secondary tec2gb1"><a href="/image-photo-editing-services">Photo Editing</a></span> 
			<span class="badge bg-secondary tec2gb1"><a href="/watermark-removal-services">Watermark Removal</a></span> 
			<span class="badge bg-secondary tec2gb1"><a href="/sky-replacement-services">Sky Replacement</a></span>
			<span class="badge bg-secondary tec2gb1"><a href="/photo-enhancement-services">Photo Retouching</a></span>
			<span class="badge bg-secondary tec2gb1"><a href="/sky-replacement-services">Background Removal</a></span>
			</h2>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="item"> <span class="icon feature_box_col_six"><i class="fa fa-camera"></i></span>
            <h6>BPO-KPO/Data Management</h6>
            <p>Tech2Globe is an IT Outsourcing Partner to complete your all Data Management Services.</p>
			<h2>
			<span class="badge bg-secondary tec2gb1"><a href="/data-mining-services">Data Mining</a></span> 
			<span class="badge bg-secondary tec2gb1"><a href="/data-entry-services">Data Entry</a></span> 
			<span class="badge bg-secondary tec2gb1"><a href="/data-management-services">Data Management</a></span>
			<span class="badge bg-secondary tec2gb1"><a href="/document-processing-services">Document Processing</a></span>
			<span class="badge bg-secondary tec2gb1"><a href="/magento-product-upload-services">Magento Product Upload</a></span>
			</h2>
          </div>
        </div>
		</div>
      </div>
    </div>
  </div>
<!---mobie_screen-close-->

<!-- about us start -->
<div class="office-vid">
  <section class="container">
    <div class="row">
      <div class="col-xs-12" id="counter">
      
        <iframe frameborder="0" allowfullscreen="" src="//www.youtube.com/embed/eUJc53n0cRg"></iframe>
        <h2>ABOUT <span>TECH2GLOBE</span>
        <!-- <span class="linkedin-follow"><script src="//platform.linkedin.com/in.js" type="text/javascript"> lang: en_US</script>
        	<script type="IN/FollowCompany" data-id="1337" data-counter="right"></script></span> -->
        </h2><br>
        <h1>Your IT Consulting Partner</h1>
    
        <p>Tech2Globe is a name that stands for reliability, efficiency and trust. A team that works hard to provide best solutions to our clients, a management that makes sure the timely execution of projects. A collective effort to form long lasting relations with our clients is what makes us Tech2Globe. Established in 2014, Tech2Globe is one of the youngest and most promising software developing companies incorporating in India. We specialize in web, windows and ERP solutions. With our passion and flare to innovate and create, we provide the best winning solutions to our clients. Amidst the same process, we continue to be cost efficient understanding what exactly your business requires to grow.</p>
        <p><a href="aboutus" class="btn">More information <i class="fa fa-angle-right" aria-hidden="true"></i></a></p>
        
          <!--SCHEMA START-->
          <script type="application/ld+json">
            {
              "@context": "https://schema.org",
              "@type": "LocalBusiness",
              "name": "Tech2Globe",
              "image": "https://www.tech2globe.com/images/tech2globe.jpg",
              "@id": "",
              "url": "https://www.tech2globe.com",
              "telephone": "516-858-5840",
              "address": {
                "@type": "PostalAddress",
                "streetAddress": "135, Spagnoli road, Melville,",
                "addressLocality": "New York",
                "addressRegion": "NY",
                "postalCode": "11747",
                "addressCountry": "US"
              },
              "openingHoursSpecification": {
                "@type": "OpeningHoursSpecification",
                "dayOfWeek": [
                  "Monday",
                  "Tuesday",
                  "Wednesday",
                  "Thursday",
                  "Friday",
                  "Saturday",
                  "Sunday"
                ],
                "opens": "00:00",
                "closes": "23:59"
              },
              "sameAs": [
                "https://www.facebook.com/tech2globe.software",
                "https://twitter.com/Tech2Globe",
                "https://www.linkedin.com/company/tech2globe",
                "https://www.instagram.com/tech2globeweb/",
                "https://www.youtube.com/user/Tech2Globe"
              ]
            }
          </script>
          <!--SCHEMA END-->

          <script>
            var a = 0;
            $(window).scroll(function() {

              var oTop = $('#counter').offset().top - window.innerHeight;
              if (a == 0 && $(window).scrollTop() > oTop) {
                $('.counter-value').each(function() {
                  var $this = $(this),
                    countTo = $this.attr('data-count');
                  $({
                    countNum: $this.text()
                  }).animate({
                      countNum: countTo
                    },

                    {

                      duration: 2000,
                      easing: 'swing',
                      step: function() {
                        $this.text(Math.floor(this.countNum));
                      },
                      complete: function() {
                        $this.text(this.countNum);
                        //alert('finished');
                      }

                    });
                });
                a = 1;
              }

            });
          </script>
        
      </div>
      
    </div>
  </section>
</div>
<!-- about us end -->


<!-- Pointers -->
<div class="container mb-5"> 
   <div class="counter-outer">
      <div class="counter-icon-outer"><img class="lazyload" src="https://tech2globe.com/images/counter-1.png" alt=""></div>
        <div class="num-counter">
            <span class="counter counter-value" data-count="14">0</span><b>+</b>
            <h5>Years Experience</h5>
        </div>
    </div>
        
    <div class="counter-outer">
      <div class="counter-icon-outer"><img class="lazyload" src="https://tech2globe.com/images/counter-2.png" alt=""></div>
        <div class="num-counter">
          <span class="counter counter-value" data-count="7000">0</span><b>+</b>
          <h5>Successful Projects</h5>
        </div>
    </div>
        
    <div class="counter-outer">
      <div class="counter-icon-outer"><img class="lazyload" src="https://tech2globe.com/images/counter-3.png" alt=""></div>
        <div class="num-counter">
            <span class="counter counter-value" data-count="300">0</span><b>+</b>
            <h5>Our Strength</h5>
        </div>
    </div>
  
    <div class="counter-outer">
      <div class="counter-icon-outer"><img class="lazyload" src="https://tech2globe.com/images/counter-4.png" alt=""></div>
        <div class="num-counter">
            <span class="counter counter-value" data-count="99">0</span><b>%</b>
            <h5>Customer Satisfaction Score</h5>
          </div>
    </div>

    <div class="counter-outer">
      <div class="counter-icon-outer"><img class="lazyload" src="https://tech2globe.com/images/counter-5.png" alt=""></div>
        <div class="num-counter">
            <span class="counter counter-value" data-count="25">0</span><b>+</b>
            <h5>Customer Based Countries</h5>
          </div>
    </div>
    <div class="clearfix"></div>
</div>
<!-- Pointers End-->

<!-- Awards Certification and Featured in -->


<div class="container-fluid mb-4">
<div class="row">
<div class="col-md-6 col-xs-12">
<div class="brandouter1">
      <div class="container">
        <div class="row">
		
		<div class="col-xs-12"> 
 <h3 class="h2 text-center text-uppercase mb-4"><strong>Awards &amp; <span class="">Certification</span></strong></h3>
        
        <div class="row">
        	<div class="Clientlg-outera">
            	<div class="Clientlg">  
                	<img class="img-responsive lazyloaded" src="https://tech2globe.com/images/awards/amazon-spn.png" alt="">
                </div>
            </div>


			<div class="Clientlg-outera"> 
            	<div class="Clientlg">  
                	<img class="img-responsive lazyloaded" src="https://tech2globe.com/images/awards/Payoneer-Log.png" alt="">
                </div>
            </div> 
			
			<div class="Clientlg-outera">
            	<div class="Clientlg">  
                	<img class="img-responsive lazyloaded" src="https://tech2globe.com/images/awards/shopify.png" alt="">
                </div>
            </div> 
			
			<div class="Clientlg-outera">
            	<div class="Clientlg">  
                	<img class="lazyload img-responsive" src="https://tech2globe.com/images/awards/iso.png" alt="">
                </div>
            </div> 			
			
			<div class="Clientlg-outera">
            	<div class="Clientlg">  
                	<img class="lazyload img-responsive" src="https://tech2globe.com/images/awards/flipkart.png" alt="">
                </div>
            </div> 	
			

			<div class="Clientlg-outera">
            	<div class="Clientlg">  
                	<img class="lazyload img-responsive" src="https://tech2globe.com/images/awards/ebay.png" alt="">
                </div>
            </div> 	
			
			
			<div class="Clientlg-outera">
            	<div class="Clientlg">  
                	<img class="lazyload img-responsive" src="https://tech2globe.com/images/awards/certificate.png" alt="">
                </div>
            </div> 	
			


			<div class="Clientlg-outera">
            	<div class="Clientlg">  
                	<img class="lazyload img-responsive" src="https://tech2globe.com/images/awards/msme.png" alt="">
                </div>
            </div> 	
			
			<div class="Clientlg-outera">
            	<div class="Clientlg">  
                	<img class="lazyload img-responsive" src="https://tech2globe.com/images/awards/google.png" alt="">
                </div>
            </div> 
 
         
        </div>
	</div>
        </div>
      </div>
      <div class="clear"></div>
    </div>



</div>
<div class="col-md-6 col-xs-12">
<div class="brandouter1">
      <div class="container">
        <div class="row">
		
		<div class="col-xs-12"> 
	   <h3 class="h2 text-center text-uppercase mb-4 text-default"><strong>Featured <span class="">In</span></strong></h3>
        
        <div class="row">
        	<div class="Clientlg-outera">
            	<div class="Clientlg">  
                	<img class="img-responsive lazyloaded" src="https://tech2globe.com/images/t2g-your-story.png" alt="">
                </div>
            </div>


			<div class="Clientlg-outera"> 
            	<div class="Clientlg">  
                	<img class="img-responsive lazyloaded" src="https://tech2globe.com/images/t2g-behance.png" alt="">
                </div>
            </div> 
			
			<div class="Clientlg-outera">
            	<div class="Clientlg">  
                	<img class="img-responsive lazyloaded" src="https://tech2globe.com/images/t2g-themenifest.png" alt="">
                </div>
            </div> 
			
			<div class="Clientlg-outera">
            	<div class="Clientlg">  
                	 <img class="lazyload img-responsive" src="https://tech2globe.com/images/t2g-clutch.png" alt="">
                </div>
            </div>
			
			<div class="Clientlg-outera">
            	<div class="Clientlg">  
                	 <img class="lazyload img-responsive" src="images/t2g-researchgate.png" alt="">
                </div>
            </div>

			<div class="Clientlg-outera">
            	<div class="Clientlg">  
                	   <img class="lazyload img-responsive" src="https://tech2globe.com/images/t2g-goodfirms.png" alt="">
                </div>
            </div>
    
			<div class="Clientlg-outera">
            	<div class="Clientlg">  
                	  <img class="lazyload img-responsive" src="https://tech2globe.com/images/t2g-social-media-today.png" alt="">
                </div>
            </div>
			
			<div class="Clientlg-outera">
            	<div class="Clientlg">  
                	  <img class="lazyload img-responsive" src="https://tech2globe.com/images/design-rush.png" alt="">
                </div>
            </div>
			
			
			<div class="Clientlg-outera">
            	<div class="Clientlg">  
                	   <img class="lazyload img-responsive" src="https://tech2globe.com/images/true-pilot.png" alt="">
                </div>
            </div>

        </div>
	</div>
        </div>
      </div>
      <div class="clear"></div>
    </div>

</div>
</div>
</div>



<div class="container-fluid our-tool" ng-controller="RequestDemo">
<!--modal popup!-->
<div id="hr-modal" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                  
                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title">Request Demo</h4>
                        </div>
                        <div class="modal-body" ng-include="formUrl">
                          
                          
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                      </div>
                  
                    </div>
                  </div>
                  <!--modal popup end-->
  <div class="container-fluid  d-none d-sm-block">
		<div class="col-sm-12" id="amazone-testi">
               <div class="seprator"></div>
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
              <!-- Wrapper for slides -->
              <div class="carousel-inner">
                <div class="item active" style="background-color: #e9f3fc;border: 2px solid #e9f3fc;">
                  <div class="row">
                    <div class="row">
                  <div class="col-md-6">
                    <div class="our-tool-heading">
                      <h2 class="main-heading">Digital <span>Marketing</span></h2>
                      <p>Your Brand Heard and Seen</p>
                     
                    </div>
                    <div class="home-video">
                      <iframe width="100%" height="396" src="https://www.youtube.com/embed/Xz5TzJWZ7h8" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                    </div>
                  </div>

                  <div class="col-md-6">
                     <div class="our-tool-heading">
                      <h2 class="main-heading">Data <span>Management</span></h2>
                      <p>Control &amp; Derive Insight From Your Data </p>
                     
                    </div>
                    
                    <div class="home-video">
                     <iframe width="100%" height="396" src="https://www.youtube.com/embed/GiIdagFVkkM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                    </div>
                  </div>

                  <div class="clearfix"></div>


 
                </div>
                  </div>
                </div>
               <div class="item" style="background-color: #e9f3fc;border: 2px solid #e9f3fc;">
                   <div class="row">
                  <div class="col-md-6">
                    <div class="our-tool-heading">
                      <h2 class="main-heading">Amazon <span>Marketing</span></h2>
                      <p>Your Brand Heard and Seen</p>
                     
                    </div>
                    <div class="home-video">
                    <iframe width="100%" height="396px" src="https://www.youtube.com/embed/C7ofG5HrRvI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					</div>
                  </div>
				  
				     <div class="col-md-6">
                     <div class="our-tool-heading">
                      <h2 class="main-heading">Digital <span>Marketing</span></h2>
                      <p>Control & Derive Insight From Your Data </p>
                     
                    </div>
                    
                    <div class="home-video">
                  <iframe width="100%" height="396px" src="https://www.youtube.com/embed/y-L_TxCNUB4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
</div>



<div class="container-fluid  d-block d-sm-none">
             <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
              <!-- Wrapper for slides -->
              <div class="carousel-inner">
                <div class="item active" style="padding:0px;">
                    <!--<div class="our-tool-heading">
                      <h2 class="main-heading">Digital <span>Marketing</span></h2>
                      <p>Your Brand Heard and Seen</p>
                     
                    </div>--->
                    	 <a class="" href="#carousel-example-generic"
                  data-slide="pause"> <div class="home-video" id='home-video'>
                      <iframe width="100%" height="396" src="https://www.youtube.com/embed/Xz5TzJWZ7h8" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                    </div> </a>
                    </div>
               <div class="item" style="padding:0px;"> 
                     <!---<div class="our-tool-heading">
                      <h2 class="main-heading">Data <span>Management</span></h2>
                      <p>Control &amp; Derive Insight From Your Data </p>
                     
                    </div>--->
                    
                    	 <a class="" href="#carousel-example-generic"
                  data-slide="pause"><div class="home-video" id='home-video'>
                     <iframe width="100%" height="396" src="https://www.youtube.com/embed/GiIdagFVkkM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                    </div> </a>
                  </div>
				
				
	               <div class="item" style="padding:0px;">
                    <!--<div class="our-tool-heading">
                      <h2 class="main-heading">Amazon <span>Marketing</span></h2>
                      <p>Your Brand Heard and Seen</p>
                     
                    </div>--->
                    	 <a class="" href="#carousel-example-generic"
                  data-slide="pause"> <div class="home-video" id='home-video'>
                    <iframe width="100%" height="396px" src="https://www.youtube.com/embed/C7ofG5HrRvI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					</div> </a>
                </div>			
				
				
				
	               <div class="item" style="padding:0px;">
                    <!--- <div class="our-tool-heading">
                      <h2 class="main-heading">Digital <span>Marketing</span></h2>
                      <p>Control & Derive Insight From Your Data </p>
                     
                    </div>--->
                    
              	 <a class="" href="#carousel-example-generic"
                  data-slide="pause">      <div class="home-video" id='home-video'>
                  <iframe width="100%" height="396px" src="https://www.youtube.com/embed/y-L_TxCNUB4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					</div></a>


                </div>					
		              </div>
            </div>
            <div class="controls testimonial_control pull-right">
                <a class="left fa fa-chevron-left btn btn-default testimonial_btn" data-slide="prev"></a>

                <a class="right fa fa-chevron-right btn btn-default testimonial_btn" data-slide="next"></a>
              </div>
     </div>














      <!------------------ our tools sectoins -------------->

           <!--- <div class="container">
                <div class="row">

                  <div class="col-sm-12">
                    
                  </div>

                  <div class="col-md-6">
                    <div class="our-tool-heading">
                      <h2 class="main-heading">Digital <span>Marketing</span></h2>
                      <p>Your Brand Heard and Seen</p>
                     
                    </div>
                    <div class="home-video">
                      <iframe width="100%" height="396" src="https://www.youtube.com/embed/Xz5TzJWZ7h8" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                  </div>

                  <div class="col-md-6">
                     <div class="our-tool-heading">
                      <h2 class="main-heading">Data <span>Management</span></h2>
                      <p>Control & Derive Insight From Your Data </p>
                     
                    </div>
                    
                    <div class="home-video">
                     <iframe width="100%" height="396" src="https://www.youtube.com/embed/GiIdagFVkkM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                  </div>

                  <div class="clearfix"></div>


 
                </div>
            </div>--->
			<!---
<div class="container-fluid d-none d-sm-block">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">

    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>


    <div class="carousel-inner">
      <div class="item active" style="background-color: #e9f3fc;
    border: 2px solid #e9f3fc;float:left;width:100%;-webkit-box-shadow: 0 0px 0px rgb(0 0 0 / 0%);">
                  <div class="col-md-6">
                    <div class="our-tool-heading">
                      <h2 class="main-heading">Digital <span>Marketing</span></h2>
                      <p>Your Brand Heard and Seen</p>
                     
                    </div>
                    <div class="home-video">
                      <iframe width="100%" height="396px" src="https://www.youtube.com/embed/Xz5TzJWZ7h8" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                  </div>
				  
				     <div class="col-md-6">
                     <div class="our-tool-heading">
                      <h2 class="main-heading">Data <span>Management</span></h2>
                      <p>Control & Derive Insight From Your Data </p>
                     
                    </div>
                    
                    <div class="home-video">
                     <iframe width="100%" height="396px" src="https://www.youtube.com/embed/GiIdagFVkkM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                  </div>
      </div>

      <div class="item" style="background-color: #e9f3fc;
    border: 2px solid #e9f3fc;float:left;width:100%;-webkit-box-shadow: 0 0px 0px rgb(0 0 0 / 0%);">
                  <div class="col-md-6">
                    <div class="our-tool-heading">
                      <h2 class="main-heading">Amazon <span>Marketing</span></h2>
                      <p>Your Brand Heard and Seen</p>
                     
                    </div>
                    <div class="home-video">
                    <iframe width="100%" height="396px" src="https://www.youtube.com/embed/C7ofG5HrRvI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					</div>
                  </div>
				  
				     <div class="col-md-6">
                     <div class="our-tool-heading">
                      <h2 class="main-heading">Digital <span>Marketing</span></h2>
                      <p>Control & Derive Insight From Your Data </p>
                     
                    </div>
                    
                    <div class="home-video">
                  <iframe width="100%" height="396px" src="https://www.youtube.com/embed/y-L_TxCNUB4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					</div>
                  </div>

      </div>
    
  
    </div>

    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>---->
  <!---------------end of our tools sectoins ----------------------->

</div>

<div class="brandouter">
      <div class="container">
        <div class="row">
		
		<div class="col-xs-12"> 
		<h2 class="main-heading">Our <span>Clients</span></h2> 
        
        <div class="row">
        	<div class="Clientlg-outer">
            	<div class="Clientlg">  
                	<img src="images/clients/hp.png" alt="HP" title="HP">  
                </div>
            </div>


			<div class="Clientlg-outer"> 
            	<div class="Clientlg">  
                	<img src="images/clients/deliveryhero.png" alt="Delivery Hero" title="Delivery Hero"> 
                </div>
            </div> 
			
			<div class="Clientlg-outer">
            	<div class="Clientlg">  
                	<img src="images/clients/aonHewit.png" alt="AON Hewitt" title="AON Hewitt">
                </div>
            </div> 
			
			
			<div class="Clientlg-outer"> 
            	<div class="Clientlg">  
                	<img src="images/clients/patanjali.png" alt="Patanjali" title="Patanjali">
                </div>
            </div>
			
			<div class="Clientlg-outer"> 
            	<div class="Clientlg">  
                	<img src="images/clients/instas.png" alt="Intas Medical" title="Intas Medical">
                </div>
            </div>
			<div class="Clientlg-outer"> 
            	<div class="Clientlg">  
                	<img src="images/clients/follett.png" alt="Follet" title="Follet"> 
                </div>
            </div>
			<div class="Clientlg-outer">
            	<div class="Clientlg">  
                	<img src="images/clients/cantabil.png" alt="Cantabil" title="Cantabil">
                </div>
            </div>
			
			
			
			<div class="Clientlg-outer">
            	<div class="Clientlg">  
                	<img src="images/clients/nike.png" alt="Nike" title="Nike">
                </div>
            </div>
			<div class="Clientlg-outer">
            	<div class="Clientlg">  
                	<img src="images/clients/snapdeal.png" alt="SnapDeal" title="SnapDeal">
                </div>
            </div>
			<div class="Clientlg-outer">
            	<div class="Clientlg">  
                	<img src="images/clients/amazon-usa.png" alt="Amazon USA" title="Amazon USA">
                </div>
            </div>
			<div class="Clientlg-outer">
            	<div class="Clientlg">  
                	<img src="images/clients/wellist.png" alt="Wellist" title="Wellist">
                </div>
            </div>
			<div class="Clientlg-outer">
            	<div class="Clientlg">  
                	<img src="images/clients/wooden-street.png" alt="Wooden Street" title="Wooden Street">
                </div>
            </div>
			<div class="Clientlg-outer">
            	<div class="Clientlg">  
                	<img src="images/clients/mahmayi.png" alt="Mahmayi" title="Mahmayi">
                </div>
            </div>
			<div class="Clientlg-outer">
            	<div class="Clientlg">  
                	<img src="images/clients/abrams.png" alt="Abrams MFG" title="Abrams MFG">
                </div>
            </div>
			<div class="Clientlg-outer"> 
            	<div class="Clientlg">  
                	<img src="images/clients/go-mechanic.png" alt="Go Mechanic" title="Go Mechanic">
                </div> 
            </div>

			<div class="Clientlg-outer"> 
            	<div class="Clientlg">  
                	<img src="images/clients/unacademy.png" alt="Unacademy" title="Unacademy">
                </div>
            </div>
			<div class="Clientlg-outer">
            	<div class="Clientlg">  
                	<img src="images/clients/epos.png" alt="Epos" title="epos">
                </div>
            </div>
			<div class="Clientlg-outer">
            	<div class="Clientlg">  
                	<img src="images/clients/indiaSoft.png" alt="indiaSoft" title="indiaSoft"> 
                </div> 
            </div> 
			<div class="Clientlg-outer">  
            	<div class="Clientlg">  
                	<img src="images/clients/aquatech.png" alt="Aquatech Waterproofing" title="Aquatech Waterproofing">
                </div>
            </div>
			<div class="Clientlg-outer">
            	<div class="Clientlg">  
                	<img src="images/clients/sports.png" alt="Sports456" title="Sports456">
                </div>
            </div>
			<div class="Clientlg-outer">
            	<div class="Clientlg">  
                	<img src="images/clients/frontier.png" alt="Frontier Buiscuits" title="Frontier Buiscuits">
                </div>
            </div> 
			
			<div class="Clientlg-outer">
            	<div class="Clientlg">  
                	<img src="images/clients/bluebird.png" alt="Bluebird Solar Panel" title="Bluebird Solar Panel">
                </div>
            </div>
			
			
			<div class="Clientlg-outer">
            	<div class="Clientlg">  
                	<img src="images/clients/foodora-1.png" alt="Foodora" title="Foodora">
                </div>  
            </div>
			
			<div class="Clientlg-outer">
            	<div class="Clientlg">  
                	<img src="images/clients/wow.png" alt="WOW Skincare" title="WOW Skincare">
                </div>
            </div>
			<div class="Clientlg-outer">
            	<div class="Clientlg">  
                	<img src="images/clients/getkart.png" alt="Getkart" title="Getkart">
                </div>
            </div>
			<div class="Clientlg-outer">
            	<div class="Clientlg">  
                	<img src="images/clients/sales-warp.png" alt="SalesWarp" title="SalesWarp">
                </div> 
            </div> 
			
			<div class="Clientlg-outer">
            	<div class="Clientlg">  
                	<img src="images/clients/swiggy.png" alt="Swiggy" title="Swiggy">
                </div>
            </div>
			<div class="Clientlg-outer">
            	<div class="Clientlg">  
                	<img src="images/clients/creative-arcades.png" alt="Creative Arcades" title="Creative Arcades">
                </div>
            </div>
			<div class="Clientlg-outer"> 
            	<div class="Clientlg">  
                	<img src="images/clients/ecommerce-guru.png" alt="Ecommerce Guru" title="Ecommerce Guru">
                </div>
            </div>
			<div class="Clientlg-outer">
            	<div class="Clientlg">  
                	<img src="images/clients/luiolui-1.png" alt="Luiolei" title="Luiolei">
                </div>  
            </div>
 	<div class="Clientlg-outer">
            	<div class="Clientlg">  
                	<img src="images/clients/shikhar-group.png" alt="shikhar-group" title="shikhar-group">
                </div>  
            </div>      

	<div class="Clientlg-outer">
            	<div class="Clientlg">  
                	<img src="images/clients/legend-logo_140x.png" alt="legend" title="legend">
                </div>  
            </div>


	<div class="Clientlg-outer">
            	<div class="Clientlg">  
                	<img src="images/clients/ss-mediacl.png" alt="ss-mediacl" title="ss-mediacl">
                </div>  
            </div>






	<div class="Clientlg-outer">
            	<div class="Clientlg">  
                	<img src="images/clients/logo-1-1.png" alt="logo-1-1" title="logo-1-1">
                </div>  
            </div>



	<div class="Clientlg-outer">
            	<div class="Clientlg">  
                	<img src="images/clients/sparsh-logo.png" alt="sparsh-logo-white" title="sparsh-logo-white">
                </div>  
            </div>

        </div>
	</div>

        </div>
      </div>
      <div class="clear"></div>
    </div>



<section class="trabble-bg image-bg-padding-100" style="padding: 43px 0">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="section-title-white text-center">
					<h2>Our Case <span style="color:rgb(188 1 1);">Studies</span></h2>
					<p>Customer who partner with us has increase their sales and business, while minimizing audits, errors and operational costs </p>
				</div>
			</div>
		</div>
		<div class="row">
			<!-- single travel start -->
			<div class="col-md-4 col-sm-6">
			<a href="https://www.tech2globe.com/pdf/restaurant-menu-data-entry.pdf" title="Restaurant Menu Data Entry" target="_blank">
				<div class="single-travel">
					<div class="media">
						<div class="media-left media-middle travel-number">
							<span><i class="fa fa-bars" aria-hidden="true"></i></span>
						</div>
						<div class="media-body travel-content">
							<h4>Restaurant  Menu Data Entry</h4>
							<p>They wanted to outsource their restaurant menu data entry work for one of their major....</p>
						</div>
					</div>
				</div>
				</a>
			</div> <!-- single travel end -->

			<div class="col-md-4 col-sm-6">
			<a href="https://www.tech2globe.com/pdf/mobile-app-development.pdf" title="Mobile APP Development" target="_blank">
				<div class="single-travel">
					<div class="media">
						<div class="media-left media-middle travel-number">
							<span><i class="fa fa-mobile" aria-hidden="true"></i></span>
						</div>
						<div class="media-body travel-content">
							<h4>Mobile APP  Development</h4>
							<p>Our client required a mobile solution to complement its social design service of creating....</p>
						</div>
					</div>
				</div>
				</a>
			</div> <!-- single travel end -->

			<div class="col-md-4 col-sm-6">
			<a href="https://www.tech2globe.com/pdf/nopCommerce-case-study.pdf" title="NopCommerce Development" target="_blank">
				<div class="single-travel">
					<div class="media">
						<div class="media-left media-middle travel-number">
							<span><i class="fa fa-shopping-cart" aria-hidden="true"></i></span>
						</div>
						<div class="media-body travel-content">
							<h4>NopCommerce   Development</h4>
							<p>Lui O Lei is the ultimate luxury fashion destination for the distribution and retail of Italian...</p>
						</div>
					</div>
				</div>
				</a>
			</div> <!-- single travel end -->

			<div class="col-md-4 col-sm-6">
			<a href="https://www.tech2globe.com/pdf/case-study-of-image-processing.pdf" title="Image Processing" target="_blank">
				<div class="single-travel">
					<div class="media">
						<div class="media-left media-middle travel-number">
							<span><i class="fa fa-file-image-o" aria-hidden="true"></i></span>
						</div>
						<div class="media-body travel-content">
							<h4>Image  Processing</h4>
							<p>The image processing case study features a customer based in US owning a coupleofstudios....</p>
						</div>
					</div>
				</div>
				</a>
			</div> <!-- single travel end -->


			<div class="col-md-4 col-sm-6">
			<a href="https://www.tech2globe.com/pdf/digital-marketing-SEO.pdf" title="Digital Marketing - SEO" target="_blank">
				<div class="single-travel">
					<div class="media">
						<div class="media-left media-middle travel-number">
							<span><i class="fa fa-area-chart" aria-hidden="true"></i></span>
						</div>
						<div class="media-body travel-content">
							<h4>Digital  Marketing </h4>
							<p>The biggest challenge for us is – the business niche is complete new for us and first ....</p>
						</div>
					</div>
				</div>
				</a>
			</div> <!-- single travel end -->
			
		<div class="col-md-4 col-sm-6">
			<a href="https://www.tech2globe.com/case-studies" title="VIEW ALL CASE STUDIES" target="_blank">
				<div class="single-travel">
					<div class="media">
						<div class="media-left media-middle travel-number">
							<span><i class="fa fa-search" aria-hidden="true"></i></span>
						</div>
						<div class="media-body travel-content">
							<h4>View All  Case Studies</h4>
							<p>Discover more about what our customers say about their experience of working with Tech2Globe...</p>
						</div>
					</div>
				</div>
				</a>
			</div> <!-- single travel end -->
		</div>
	</div>
</section>




<div class="container-fluid brandouter mt-5 mb-5">
<div class="col-md-6">
            <div class="our-portfolio-content" style="padding: 6rem 0rem;">
                <h4>Our Results speaks louder than words</h4>
                <a href="portfolio" class="btn">View Our Portfolio</a>
            </div>

</div>
<div class="col-md-6">
<!--testimonial--start--->
		<div class="col-sm-12" id="amazone-testi">

      <h2 class="main-heading text-center"><span>Testimonial</span></h2>
 

               <div class="seprator"></div>
            <div id="#" class="carousel slide" data-ride="carousel">
              <!-- Wrapper for slides -->
              <div class="carousel-inner">
                <div class="item active">
                  <div class="row" style="padding: 20px">
                    <button style="border: none;"><i class="fa fa-quote-left testimonial_fa" aria-hidden="true"></i></button>
                    <p class="testimonial_para">"Very co operative staff, managing my account very well."</p><br>
                    <div class="row">
                        <div class="col-sm-12">
						 <img src="images/avtarte.png" alt="testi-icon">
                        <h4><strong>GENKI</strong></h4>
                        <p class="testimonial_subtitle"><span>(Head of Partner Manager)	</span> </p>
                    </div>
                    </div>
                  </div>
                </div>
               <div class="item">
                   <div class="row" style="padding: 20px">
                    <button style="border: none;"><i class="fa fa-quote-left testimonial_fa" aria-hidden="true"></i></button>
                    <p class="testimonial_para">"I was very happy with the services and quality of work. Their team was open to feedback and flexible in meeting needs. "</p><br>
                    <div class="row">
                        <div class="col-sm-12" >
                         <img src="images/avtarte.png" alt="testi-icon">
                        <h4><strong>DAVID</strong></h4>
                        <p class="testimonial_subtitle"><span>(Director of Partner Management)</span>
                        </p>
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
</div>



















<!--blog--start-->
<div class="container-fluid mb-1">
<h2 class="main-heading">Tech2globe <span>Blogs</span></h2>
<div class="row">
<div class="col-md-3 mb-2">
<div class="card" style="min-height:440px;">
  <img class="card-img-top" src="images/blogStore-Creation-On-Shopify-Development-Company-In-15-Minutes-1.png" alt="Card image cap">
  <div class="card-body">
    <h3 class="card-title fw-bold" style="color:#d00115;" href="https://blog.tech2globe.com/store-creation-on-shopify-development-company-in-15-minutes/">Store Creation On Shopify Developme</h3>
    <p class="card-text text-justify">Starting an internet business can be exciting for anyone, 
	yet not so easy. You’ll have to deal with a variety ...</p>
    <a href="https://blog.tech2globe.com/store-creation-on-shopify-development-company-in-15-minutes/" class="btn btn-danger">READ MORE</a>
  </div>
</div>
</div>
<div class="col-md-3 mb-2">
<div class="card" style="min-height:440px;">
  <img class="card-img-top" src="images/blog4-Tips-1.png" alt="Card image cap">
  <div class="card-body">
    <h3 class="card-title fw-bold" style="color:#d00115;" href="https://blog.tech2globe.com/4-tips-on-what-to-know-before-applying-data-analytics/">4 Tips on What To Know Before Apply</h3>
    <p class="card-text text-justify">The world of data analytics is getting bigger day by day. Companies are investing billions
	of dollars in this ...</p>
    <a href="https://blog.tech2globe.com/4-tips-on-what-to-know-before-applying-data-analytics/" class="btn btn-danger">READ MORE</a>
  </div>
</div>
</div>
<div class="col-md-3 mb-2">
<div class="card" style="min-height:440px;">
  <img class="card-img-top" src="images/blogAmazon-Account-Suspension-Yes-You-Can-Overcome-This-Nightmare.png" alt="Card image cap">
  <div class="card-body">
    <h3 class="card-title fw-bold" style="color:#d00115;" href="https://blog.tech2globe.com/amazon-account-suspension-yes-you-can-overcome-this-nightmare/">Amazon Account Suspension: Yes! You</h3>
    <p class="card-text text-justify">‘An Amazon account suspension can be a nightmare for any seller’. You have worked hard to establish ...</p>
    <a href="https://blog.tech2globe.com/amazon-account-suspension-yes-you-can-overcome-this-nightmare/" class="btn btn-danger">READ MORE</a>
  </div>
</div>
</div>
<div class="col-md-3 mb-2">
<div class="card" style="min-height:436px;">
  <img class="card-img-top" src="images/blogTech2Globe-Web-Solutions-Records.png" alt="Card image cap">
  <div class="card-body">
    <h3 class="card-title fw-bold" style="color:#d00115;" href="https://blog.tech2globe.com/tech2globe-web-solutions-records-100-five-star-rating-for-may/">Tech2Globe Web Solutions Records 100% Five-Star Rating</h3>
    <p class="card-text text-justify">Tech2Globe Web Solutions Records 100% Five-Star Rating for May on Clutch Since we started our ...</p>
    <a href="https://blog.tech2globe.com/tech2globe-web-solutions-records-100-five-star-rating-for-may/" class="btn btn-danger">READ MORE</a>
  </div>
</div>
</div>
</div>
</div>
<!--blog--end-->





    <section id="pop-scroll" class="get-in-touch-section top-bofu selected">
<div class="container">
<div class="row">
<div class="main-content-block rows fadeInUp animated3 col-md-6 col-xs-12">
<h2>Interested in working with us? </h2>
<div class="title-bar">Let’s talk and get started</div>
</div>
</div>
<div class="from-block rows">

<div class="row">
<div class="col-md-6 col-xs-12">
<div class="from-left-block rows">
<div class="sparater-block">
<span>OR</span>
</div>
<div class="emailid-block rows">
<a href="mailto:info@tech2globe.com" class="transition" tabindex="-1">
<img class="lazyload" data-src="images/sprite.png" alt="" />
<span class="small-text">mail to our sales department</span>
<span class="large-text">info@tech2globe.com</span>
</a>
</div>
<div class="clearfix"></div>
<div class="emailid-block voicemsg rows marT20">
<a href="skype:info.tech2globe" class="transition" tabindex="-1"><img class="lazyload" data-src="images/sprite2.png" alt="" /> <span class="small-text rows">Our Skype Id</span> <span class="large-text rows">info.tech2globe</span> </a>
</div>
<div class="clearfix"></div>
<div class="emailid-block voicemsg rows marT20">
        <a href="tel:+91 - 9999875038" class="transition mb-4" tabindex="-1"><img class="lazyload" data-src="images/sprite3.png" alt=""> <span class="small-text rows">Call Our Sales Department</span> 
		<span class="large-text rows">IN : +91 - 9999875038</span> 
		</a>
		
        <a href="tel:+1-516-858-5840" class="transition" tabindex="-1"><img class="lazyload" data-src="images/sprite3.png" alt=""> <span class="small-text rows">Call Our Sales Department</span> 
		<span class="large-text rows">US : +1-516-858-5840</span> 
		</a>
		
        </div>
        <div class="clearfix"></div>
<!-- <div class="listing-block rows">
<h3>&amp; What you will get:</h3>
<ul class="bluts">
<li><i></i>On-call inquiry assistance</li>
<li><i></i>Project consulting by experts</li>
<li><i></i>Detailed project estimation</li>
</ul>
</div> -->
</div>
</div>
<div class="col-md-6 col-xs-12">
<div class="from-right-block rows" >
<!--<div class="alert alert-success" ng-show="emailConfirm">
  <strong>Success!</strong> Email sent successfully!</a>.
</div>-->
<?php 
$rand=rand(0000000000,999999999999);
$_SESSION['token']=$rand;
?>
<form method="post" action="" name='contact' onsubmit="IsEmpty();doSubmit();" id='contact-us'  enctype='multipart/form-data'>
<div class="form-group">
<input class="form-control input-1" placeholder="Enter Name" type="text" onkeypress="return withoutspecialnumeric(event)" name="name"  required>
	<!--<div class="alert alert-danger" ng-show="contactForm.name.$dirty && contactForm.name.$invalid">Please Enter Your Name</div>-->
</div>
<div class="form-group">
<input class="form-control input-2" placeholder="Enter Email" type="email" onkeyup="nospaces(this)" name="mailid"  required>
	<!--<div class="alert alert-danger" ng-show="contactForm.mailid.$dirty && contactForm.mailid.$invalid">Please Enter Your Email ID</div>-->
</div>

<div class="form-group">
<input class="form-control input-3" placeholder="Enter Mobile No." type="text" name="phone" max='9999999999999' min='0000000000000' onkeypress='return isNumberKey(event)' minlength="10" maxlength="13" required>
	<input type='hidden' name='token' value='<?php echo $rand; ?>' />
	<input type='hidden' name='pagelink'  value='<?php echo " "; ?>' />
	<!--<div class="alert alert-danger" ng-show="contactForm.phone.$dirty && contactForm.phone.$invalid">Please enter valid phone number</div>-->
</div>

<div class="form-group">
<select class="form-control input-4" name="countrycode" required>
		<?php include("include/countryCodes.php"); ?>
</select>

</div>
<div style="display:none" class="alert alert-danger" id='msgshow'>Please select country </div>
<div class="form-group">
<textarea class="form-control input-5" placeholder="Enter Message" name="comment"  required></textarea>
	<!--<div class="alert alert-danger" ng-show="contactForm.comment.$dirty && contactForm.comment.$invalid">Please Enter Your Message</div>-->
</div>
<div class="form-group"> 
<div class="g-recaptcha" data-sitekey="6LcaW70hAAAAAESpeJiSPE9lHoDd43rbhab_3gL8"></div>		
     </div>

<div class="form-group">

<input  type="submit" class="form-control btn-submit btn" onclick='IsEmpty();'value="Submit Query" />
</div>


</form>






</div>
<script type="text/javascript">

function doSubmit() {
  // You can also do any validation here if required
  document.getElementById('contact-us').action = 'data';
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

</script>
<script>
//	$('form').submit(function(e){
//		var response = grecaptcha.getResponse();
	//	if(response.length === 0){
	//		e.preventDefault();
	//		alert("Captcha not verified");
	//	}
	//});
	</script>
	<style>
	.alert.alert-danger {
    display: none;
}
	</style>
</div>
</div>
</div>
 </div>
</section>

<?php include("include/footer.php"); ?>
<script src="js/requestDemo.js"></script>
<script src="js/sendMail.js"></script>





<?php //$remove_cache = clear_all_cache(); ?> 
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
<meta http-equiv="refresh" content="{{ config('session.lifetime') * 10 }}">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<style>
.hidden-bar .side-menu ul.navigation ul.submenu {
    background: #c9040f !important;
    /* z-index: 999 !important; */
    /* position: absolute; */
    /* left: 4%; */
    
	width: 90% !important;
	margin-left: 10%;
}

.mCustomScrollBox {
    
    overflow: unset !important;
}

/*
.hidden-bar {
  
width: 100% !important;
}
*/
    
.hidden-bar .side-menu ul li a {
    border-top: unset !important;
}


.phn-menu {
    float: right;
    width: 40px;
	margin-right: 3%;
}

/* Styles for wrapping the search box */

.main-search {
    margin: 0px auto;
}

/* Bootstrap 3 text input with search icon */

.has-search .form-control-feedback {
    right: initial;
    left: 0;
    color: #ccc;
}

.has-search .form-control {
    padding-right: 12px;
    padding-left: 34px;
}
header {
    top: 0px;
    width: 100%;
    z-index: 999;
    background: #fff;
    padding-bottom: 0px;
    transition: all ease-in-out 0.5s;
    -moz-transition: all ease-in-out 0.5s;
    -webkit-transition: all ease-in-out 0.5s;
}
</style>  
<header>
  <div class="top_strip">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-xs-12">
          <ul class="mobileNos">
            <li><span class="aus"></span> <a href="tel:+1-516-858-5840">+1-516-858-5840</a></li>
            <li><span class="india"></span> <a href="tel:011-430-10-700">011-430-10-700</a></li>
            <li><span class="skype"></span> <a href="skype:info.tech2globe?call">Info.tech2globe</a></li>
            <li><span class="mail"></span> <a href="mailto:info@tech2globe.com">Info@tech2globe.com</a></li>
          </ul>
        </div>
		
		
 <div class="col-md-3 col-xs-12"> 	
<div class="main-search">
  
  <!-- Actual search box -->
  <div class="form-group has-feedback has-search" style="margin-bottom: -2px;height: 31px;">
<form action="/search" method="post" >
 <span class="glyphicon glyphicon-search form-control-feedback"></span>
    <input type="text" name="search_entered" class="form-control" placeholder="Search" style="height: 31px;">
	</form>
  </div>
  
</div>	
</div>	
        <div class="col-md-3 col-xs-12 t2g-social-top"> 
            <a href="https://www.facebook.com/tech2globe.software"><i class="fab fa-facebook-f"></i></a>
            <a href="https://twitter.com/Tech2Globe"><i class="fab fa-twitter"></i></a>
            <a href="https://www.linkedin.com/company/tech2globe"><i class="fab fa-linkedin-in"></i></a>
            <a href="https://www.youtube.com/user/Tech2Globe"><i class="fab fa-youtube"></i></a>
            <a href="https://www.instagram.com/tech2globeweb/"><i class="fab fa-instagram"></i></a>
        </div>
      </div>
    </div>
  </div>
  <div class="header">
  <div class="container">
    <div class="row">
      <nav class="navbar navbar-default">
        <div class="navbar-header">
            <button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            <a href="https://www.tech2globe.com/" class="logo"> <img class="lazyload" src="/images/tech2globe-logo.jpg" title="Tech2Globe" alt="websitelogo"> </a> 
            
			<div id="mobils8889">
             <?php
                include("include/new_menuresponsive.php");
                ?>
                <!--<div class="header-height">&nbsp;</div>-->
            </div>
			
			
			<div class="phn-menu">
            	<div class="nav-toggler">
                    <button class="hidden-bar-opener"><i class="fa fa-bars" aria-hidden="true"></i></button>
                </div>
                <div class="hidden-bar right-align">
                    <div class="hidden-bar-closer">
                        <button class="btn"><i class="fa fa-close"></i></button>
                    </div>
                    <div class="hidden-bar-wrapper">
                        <div class="side-menu">
                            <ul class="navigation">
                                <li><a href="https://www.tech2globe.com/">Home</a></li>
                                
                                <li class="dropdown"><a href="">About Us</a>
                                    <ul class="submenu">
                                        <li><a href="/aboutus">About Tech2Globe </a></li>
                                        <li><a href="/Infrastructure">Infrastructure </a></li>
                                        <li><a href="/our-values">Our Values </a></li>
                                        <li><a href="/associations-ascription">Associations Ascription </a></li>
                                        <li><a href="/clients">Clients </a></li>
                                        <li><a href="/csr-initiatives">CSR Initiatives</a></li>
                                        <li><a href="/5Years-milemakers">5 Years Milemakers</a></li>
                                        <li><a href="/our-team">Our Team </a></li>
                                        <li><a href="/life-at-tech2globe">Life@Tech2globe</a></li>
                                        <li><a href="/career">Career</a></li>
                                    </ul>
                                </li>

<!-- services menu for mobile view -->

                                
				<li class="dropdown"><a href="">Services</a>
                            <ul class="submenu">
									
									 <li class="dropdown"><a href="">Amazon Services</a>
                                            <ul class="submenu">
                                                <li class="dropdown"><a href="">Amazon Services</a>
                                                    <ul class="submenu">
                                                       <li><a href="/amazon-consulting-services">Amazon Consulting</a></li>
														<li><a href="/amazon-dropshipping">Amazon Dropshipping</a></li>
														<li><a href="/amazon-fba-consulting">Amazon FBA Consulting</a></li>
														<li><a href="/amazon-marketing-services">Amazon Marketing Services</a></li>   
														<li><a href="amazon-review-rating">Amazon Review & Rating</a></li>
														<li><a href="/amazon-sales-boost-strategy">Amazon Sales Boost Strategy</a></li>
														<li><a href="/enhanced-brand-content">Enhanced Brand Content</a></li>
														<li><a href="/store-creation">Amazon Store Creation</a></li>
														<li><a href="/amazon-account-management">Amazon Account Management Services</a></li>
														<li><a href="/amazon-product-translation">Amazon Product Translation</a></li>
                                                    </ul>
                                                </li>
                                            </ul>    
                                        </li>
										
									<li class="dropdown"><a href="/digital-marketing-services">Digital Marketing</a>
                                            <ul class="submenu">
                                                <li class="dropdown"><a href="/digital-marketing-services">Digital Marketing Services</a>
                                                    <ul class="submenu">
													<li><a href="/influencer-marketing-agency">Influencer Marketing Agency</a></li>
                                                        <li><a href="/seo-services">SEO Services</a></li>
                                                        <li><a href="/ecommerce-seo-services">E-Commerce SEO</a></li>
                                                        <li><a href="/link-building">Link building</a></li>
                                                        <li><a href="/ppc-management-services">PPC Management</a></li>
                                                        <li><a href="/social-media-marketing-services">Social Media Marketing</a></li>
                                                        <li><a href="/email-marketing-services">Email Marketing</a></li>
                                                        <li><a href="/online-reputation-management-services">Online Reputation Management</a></li>
                                                        <li><a href="/content-marketing">Content Marketing</a></li>
                                                        <li><a href="/guest-posting">Guest Posting</a></li>
                                                    </ul>
                                                </li>

                                            <ul class="submenu">
                                                <li class="dropdown"><a href="/digital-marketing-packages">Digital Marketing Packages</a>
                                                    <ul class="submenu">
														<li><a href="/influencer-marketing-package">Influencer Marketing</a></li>
                                                        <li><a href="/seo-packages">SEO Packages</a></li>
                                                        <li><a href="/social-media-marketing-packages">Social Media Marketing Packages</a></li>
                                                        <li><a href="/guest-posting-packages">Guest Posting Packages</a></li>
                                                        <li><a href="/ppc-packages">PPC Packages</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
										</ul>
									</li>
									
									     <li class="dropdown"><a href="">ECommerce Services</a>
                                            <ul class="submenu">
                                                <li class="dropdown">
                                                    <a href="/ecommerce-marketplace-management">Product Uploading</a>
                                                    <ul class="submenu">
                                                      <li><a href="/magento-product-upload-services">Magento</a></li>
													  <li><a href="/bigcommerce-product-upload-services">Bigcommerce</a></li>
													  <li><a href="/jet-product-upload-services">Jet.com</a></li>
													  <li><a href="/woocommerce-product-upload-services">WooCommerce</a></li>
													  <li><a href="/shopify-product-upload-services">Shopify</a></li>
													  <li><a href="/walmart-product-upload-services">Walmart</a></li>
													  <li><a href="/cdiscount-product-upload-services">cDiscount</a></li>
													  <li><a href="/prestashop-product-upload-services">Prestashop</a></li>
													</ul>
                                                </li>
                                            </ul>
                                            
                                            <ul class="submenu">
                                                <li class="dropdown"><a href="/webstore-design-and-development">Web Stores Design & Development</a>
                                                    <ul class="submenu">
                                                        <li><a href="/nop-commerce-development-services">nopCommerce</a></li>
														<li><a href="/magento-development-company">Magento</a></li>
														<li><a href="/shopify-development-company">Shopify</a></li>
														<li><a href="/WooCommerce-development-services">WooCommerce</a></li>
														<li><a href="/amazon-webstore-design-development-services">Amazon Webstore</a></li>
														<li><a href="/ebay-store-design-services">EBay Store Design</a></li>
														<li><a href="/bigcommerce-development-services">BigCommerce</a></li>
														<li><a href="/volusion-development-services">Volusion</a></li>
														<li><a href="/3dcart-development-services">3Dcart </a></li>
														<li><a href="/open-cart-development-services">Open Cart</a></li>
                                                    </ul>
                                                </li>
                                            </ul>

                                            <ul class="submenu">
                                                <li class="dropdown"><a href="/webstore-design-and-development">Indian Ecommerce Marketplace</a>
                                                    <ul class="submenu">
                                                        <li><a href="/online-business-management-flipkart">Flipkart</a></li>
                                                        <li><a href="/online-business-management-amazon-in">Amazon India</a></li>
                                                        <li><a href="/eBay-management">EBay India</a></li>
                                                        <li><a href="/online-business-management-snapdeal">Snapdeal</a></li>
                                                        <li><a href="/online-business-management-shopclues">ShopClues</a></li>
                                                        <li><a href="/online-business-management-paytm">paytmmall</a></li>
                                                    </ul>
                                                </li>
                                            </ul>

                                            <ul class="submenu">
                                                <li class="dropdown"><a href="/webstore-design-and-development">International Ecommerce Marketplace</a>
                                                    <ul class="submenu">
                                                        <li><a href="/amazon-consulting-services">Amazon Consulting</a></li>
                                                        <li><a href="/online-business-management-amazon-com">Amazon Marketplaces</a></li>
                                                        <li><a href="/online-business-management-ebay-com">EBay Marketplaces</a></li>
                                                        <li><a href="/online-business-management-sears">Sears</a></li>
                                                        <li><a href="/online-business-management-newegg">Newegg</a></li>
                                                        <li><a href="/online-business-management-rakuten">Rakuten</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        
                                        <li class="dropdown"><a href="">BPO/KPO/Data Management</a>
                                         <ul class="submenu">
											<li class="dropdown"><a href="/data-entry-services" style="background-color:pink;">Data Entry</a>
												 <ul class="submenu">
												  <li><a href="/accounting-data-entry-services">Accounting Data Entry </a></li>
												  <li><a href="/financial-data-entry-services">Financial Data Entry </a></li>
												  <li><a href="/logistics-services">Logistics Services </a></li>
												  <li><a href="/image-data-entry-services">Image Data Entry </a></li>
												  <li><a href="/insurance-claims-data-entry-services">Insurance Claims Data Entry </a></li>
												  <li><a href="/offline-data-entry-services">Offline Data Entry </a></li>
												  <li><a href="/online-data-entry-services">Online Data Entry </a></li>
												  <li><a href="/pdf-data-entry-services">PDF Data Entry </a></li>
												  <li><a href="/product-data-entry-services">Product Data Entry </a></li>
												  <li><a href="/yellow-and-white-pages-data-entry-services">Yellow & White Pages Data Entry </a></li>
												</ul>
											</li>
										</ul>
                          
										  <ul class="submenu">
										  <li class="dropdown"><a href="">Data Intelligence Services</a>
											<ul class="submenu">
											   <li><a href="/business-research-services">Business Research </a></li>
											  <li><a href="/dashboard-design-services">Dashboard Design</a></li>
											  <li><a href="/virtual-assistant-services">Virtual Assistant Services</a></li>
											  <li><a href="/chat-support-services">Chat Support Services</a></li>
											  <li><a href="/lead-generation-services">lead generation services</a></li>   
											  <li><a href="/banking-data-entry-services">Banking Data Entry Services</a></li>
											  <li><a href="/data-analytics-services">Data Analysis </a></li>
											  <li><a href="/microsoft-power-bi-consulting-services">Microsoft Power BI Consulting </a></li>
											  <li><a href="/reporting-and-analysis-services">Reporting and Analysis </a></li>
											  <li><a href="/e-commerce-support-services">E-Commerce Support </a></li>
											  <li><a href="/donor-research-data-analytics-services">Donor Research Data Analytics</a></li>
											  <li><a href="/automation-through-vba-macros-services">Automation Through VBA Macros</a></li>
										 </ul>
															</li>
                              
												</ul>
										  <ul class="submenu">
										  <li class="dropdown"><a href="/data-management-services">Data Management</a>
											<ul class="submenu">
											  
											  <li><a href="/bulk-product-upload-services">Bulk Product Upload</a></li>
											  <li><a href="/catalog-management-services">Catalog Management</a></li>
											  <li><a href="/data-analytics-services">Data Analytics</a></li>
											  <li><a href="/indexing-services">Indexing</a></li>
											  <li><a href="/restaurant-menu-entry-services">Restaurant Menu Entry</a></li>
											  <li><a href="/sales-support-services">Sales Support</a></li>                       
														</ul>
															</li>
										  </ul>

										  <ul class="submenu">
										  <li class="dropdown"><a href="/data-marketing-services">Data Marketing</a>
											<ul class="submenu">
											  
											  <li><a href="/custom-list-building-services">Custom List Building</a></li>
											  <li><a href="/event-data-management-services">Event Data Management</a></li>
											  <li><a href="/insurance-data-collection-services">Insurance Data Collection</a></li>
											  <li><a href="/lead-qualification-services">Lead Qualification</a></li>
											  <li><a href="/product-research-services">Product Research</a></li>
											  <li><a href="/web-scraping-services">Web Scraping</a></li>
									   </ul>
															</li>
										  </ul>

											  <ul class="submenu">
											  <li class="dropdown"><a href="/data-mining-services">Data Mining</a>
												<ul class="submenu">
												  
												  <li><a href="/web-research-services">Web Research</a></li>
												  <li><a href="/healthcare-data-mining-services">Healthcare Data Minings</a></li>
												  <li><a href="/social-media-research-services">Social Media Research</a></li>
												  
												  <li><a href="/data-cleansing-services">Data Cleansing</a></li>
												   <li><a href="/data-de-duplication-services">Data De-duplication</a></li>
												  <li><a href="/data-standardization-services">Data Standardization</a></li>
												  <li><a href="/data-scrubbing-services">Data Scrubbing</a></li>
												   <li><a href="/transcription-services">Transcription</a></li>
												   <li><a href="/audio-transcription-services">Audio Transcription</a></li>
												  <li><a href="/youtube-transcription-services">YouTube Transcription</a></li>
											 </ul>
											</li>
											  </ul>


												<ul class="submenu">
												 <li class="dropdown"><a href="/data-processing-services">Data Processing</a>
												<ul class="submenu">
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
																</li>
											  </ul>

										</li>
                                                                                      
                                        <li class="dropdown"><a href="">Graphics Services</a>
                                            <ul class="submenu">
                                                <li class="dropdown"><a href="/photo-editing-services">PHOTO EDITING</a>
                                                    <ul class="submenu">
                                                        <li><a href="/post-processing-of-real-estate-images">Post Processing Real Estate Images</a></li>
                                                        <li><a href="/photo-manipulation-services">Photo Manipulation</a></li>
                                                        <li><a href="/image-clipping-services">Image Clipping</a></li>
                                                        <li><a href="/photo-enhancement-services">Photo Enhancement</a></li>
                                                        <li><a href="/photoshop-Image-Masking-Service">Photo Masking Process</a></li>
                                                        <li><a href="/image-editing-packages">Image Editing Packages</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                            <ul class="submenu">
                                                <li class="dropdown"><a href="/photo-editing-services">UX/UI Designing</a>
                                                    <ul class="submenu">
                                                        <li><a href=" ">Responsive Web Design</a></li>
                                                        <li><a href=" ">Mailchimp Template Design</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                       </li>
                                                
                                        <li class="dropdown"><a href="">Web & Mobile</a>
                                            <ul class="submenu">
                                                <li class="dropdown"><a href="/software-development">Software Development</a>
                                                    <ul class="submenu">
                                                        <li><a href="/e-commerce-development">E-Commerce Development</a></li>
                                                        <li><a href="/enterprise-portal-development">Enterprise Portal Development</a></li>
                                                        <li><a href="/content-management-system">Content Management System</a></li>
                                                        <li><a href="/web-application-development">Web Application Development</a></li>
                                                        <li><a href="/complete-ecommerce-solution-india">ECommerce Solutions</a></li>
                                                        <li><a href="/IT-Staffing-Services">IT Staffing</a></li>
                                                       
                                                    </ul>
                                                </li>
                                            </ul>
                                            
                                            <ul class="submenu">
                                                <li class="dropdown"><a href="/mobile-app-development">Mobile App Development</a>
                                                    <ul class="submenu">
                                                        <li><a href="/android-application-development-services">Android Apps Development</a></li>
                                                        <li><a href="/iphone-ipad-application-development-services" style="text-transform:none;">iPhone iPad Apps Development</a></li>
                                                        <li><a href="/mobile-application-development-services">Mobile Apps Development</a></li>
                                                        <li><a href="/windows-application-development-services">Windows Apps Development</a></li>
                                                      
                                                        <li><a href="/phonegap-development-services">Phonegap Development</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                            <ul class="submenu">
                                                <li class="dropdown"><a href="/mobile-app-development">Database Competencies</a>
                                                    <ul class="submenu">
                                                     <li><a href="/oracle-applications">Oracle</a></li>
													</ul>
                                                </li>
                                            </ul>
                                        </li> 

								</ul>
                             </li> 										
                        <li class="dropdown"><a href="">Technologies</a>
                                    <ul class="submenu">
                                      <li class="dropdown"> <a href="">Custom Web Development</a>
            							              <ul class="submenu">
          							                	<li class="dropdown"><a href="/web-development">Web Development</a>
          							                		<ul class="submenu">
        									                    <li><a href="/php-development-services">PHP</a></li>                    
        									                    <li><a href="/java-development-services">Java</a></li>                    
        									                    <li><a href="/angular-js-development-services">Angular JS</a></li>
        									                    <li><a href="/node-js-development-services">Node JS</a></li>
        									                    <li><a href="/react-js-development-services">React JS</a></li>      
        									                    <li><a href="/ruby-on-rails-development">Ruby On Rails</a></li>
          							                		</ul>
          							                	</li>
            							              </ul>
            							              <ul class="submenu">
                                          <li class="dropdown"><a href="framework-development-services">Framework Development</a>
                                            <ul class="submenu">
                                              <li><a href="laravel-development-services">Laravel</a></li>                    
                                              <li><a href="codeigniter-development-services">Codeigniter</a></li>                    
                                              <li><a href="cake-php-web-development">CakePHP</a></li>
                                            </ul>
                                          </li>
            							              </ul>
                                        <ul class="submenu">
                                          <li class="dropdown"><a href="open-source-development-services">Opensource Development</a>
                                            <ul class="submenu">
                                              <li><a href="joomla-web-development">Joomla</a></li>                    
                                              <li><a href="drupal-web-development">Drupal</a></li>                    
                                              <li><a href="wordpress-development">WordPress</a></li>
                                            </ul>
                                          </li>
                                        </ul>
                                        <ul class="submenu">
                                          <li class="dropdown"><a href="microsoft-development-services">Microsoft Technology</a>
                                            <ul class="submenu">
                                              <li><a href="dot-net-development-services">Dot Net</a></li>                    
                                              <li><a href="azure-development-services">Azure</a></li>
                                            </ul>
                                          </li>
                                        </ul>
            						</li>
                                      <li class="dropdown"> <a href="">E-Commerce Solutions</a>
                                        <ul class="submenu">
                                          <li class="dropdown"><a href="e-commerce-development-service">Ecommerce & CMS Development</a>
                                            <ul class="submenu">
                                              <li><a href="magento-development-company">Magento</a></li>                    
                                              <li><a href="woocommerce-development">WooCommerce</a></li>                    
                                              <li><a href="shopify-development-company">Shopify</a></li>
                                              <li><a href="volusion-development-services">Volusion</a></li>
                                            </ul>
                                          </li>
                                        </ul>
                                        <ul class="submenu">
                                          <li class="dropdown"><a href="javascript:void(0)">Multivendor & B2B Solutions</a>
                                            <ul class="submenu">
                                              <li><a href="multi-vendor-b2b-solution">Multivendor & B2B Solutions</a></li> 
                                            </ul>
                                          </li>
                                        </ul>
                                        <ul class="submenu">
                                          <li class="dropdown"><a href="javascript:void(0)">E-Commerce Mobile Apps</a>
                                            <ul class="submenu">
                                              <li><a href="e-commerce-mobile-apps-development-services">E-Commerce Apps</a></li>     
                                            </ul>
                                          </li>
                                        </ul>
                                      </li>
                                      <li class="dropdown"> <a href="">Mobile Application Development</a>
                                        <ul class="submenu">
                                          <li><a href="android-application-development-services">Android App</a></li>
                                          <li><a href="iphone-app-development-services">iPhone App</a></li>
                                          <li><a href="ipad-app-development-company">iPads App</a></li>
                                        </ul>
                                        <ul class="submenu">
                                          <li class="dropdown"><a href="cross-platform-mobile-app-development">Cross Platform App Development</a>
                                            <ul class="submenu">
                                              <li><a href="react-native-app-development">React Native App</a></li>
                                              <li><a href="ionic-app-development-company">Ionic App</a></li>      
                                              <li><a href="flutter-app-development-services">Flutter App</a></li>
                                              <li><a href="kotlin-app-development">Kotlin App</a></li> 
                                              <li><a href="phonegap-app-development-service">PhoneGap App</a></li> 
                                              <li><a href="xamarin-mobile-app-development">Xamarin App</a></li> 
                                              <li><a href="hybrid-mobile-app-development">Hybrid App</a></li> 
                                            </ul>
                                          </li>
                                        </ul>
                                        <ul class="submenu">
                                          <li class="dropdown"><a href="javascript:void(0)">Mobile App Designing Services</a>
                                            <ul class="submenu">
                                              <li><a href="mobile-application-design-services">Mobile App Designing</a></li>
                                            </ul>
                                          </li>
                                        </ul>
                                      </li>
                                      <li class="dropdown"> <a href="">Emerging Technologies</a>
                                        <ul class="submenu">
                                          <li><a href="emerging-technology">Emerging Technologies</a></li>
                                          <li><a href="ai-chatbot-development">AI Chatbot Development</a></li>                    
                                          <li><a href="ar-vr-app-development-company">AR / VR Development </a></li>
                                          <li><a href="aws-development-services">AWS Development </a></li>
                                          <li><a href="blockchain-development-services">BlockChain Development </a></li>
                                          <li><a href="iot-development-services">IoT Development </a></li>
                                          <li><a href="iwatch-application-development-services">iWatch App Development </a></li>
                                          <li><a href="wearable-app-development-services">Wearable App Development </a></li>
                                          <li><a href="machine-learning-services-and-consultation">Machine Learning </a></li>
                                        </ul>
                                      </li>
                                      <li class="dropdown"> <a href="">UI/UX DESIGN</a>
                                        <ul class="submenu">
                                          <li><a href="ui-ux-design-services">UI/UX Design Services</a></li>
                                          <li><a href="front-end-development-company">Front End Designing</a></li>                    
                                          <li><a href="responsive-web-design">Responsive Web Designing </a></li>
                                          <li><a href="graphic-design-services">Graphic Design </a></li>
                                          <li><a href="corporate-branding">Corporate Branding </a></li>
                                        </ul>
                                      </li>
                                     <li class="dropdown"> <a href="">Web & Mobile Testing Services</a>
                                        <ul class="submenu">
                                          <li><a href="#">Testing Services</a></li>                    
                                          <li><a href="automation-testing-services">Automation</a></li>
                                          <li><a href="manual-testing-services">Manual Testing</a></li>
                                          <li><a href="ecommerce-testing-services">E-Commerce </a></li>
                                          <li><a href="mobile-apps">Mobile App</a></li>
                                        </ul>
                                      </li>
                                    </ul>
							
                                </li>							
                                <li class="dropdown"><a href="">Our Tools</a>
                                <ul class="submenu">
                                    <li><a href="/nopcommerce-themes">NopCommerce Themes and Plugins</a></li>
                                    <li><a href="/human-resource-management-system">Human Resource Management System</a></li>
                                    <li><a href="/lead-management-tool">Lead Managment Tool</a></li>
                                    <li><a href="/Performance-Evaluation-Discussion-Management-Application">Performance Evaluation & Discussion Management Application</a></li>
                                    <li><a href=" " data-toggle="modal" data-target=".bd-example3-modal-xl">Salary Calculator</a></li>
                                    <!--Modal: Name-->
                                            <div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                                              <div class="modal-dialog modal-xl">
                                                <div class="modal-content m-0 p-0">
                                                  <iframe width="100%" height="350"  src="https://www.youtube.com/embed/gTWniSME960" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> 
                                                </div>
                                              </div>
                                            </div>
                                    <!--Modal: Name-->
                                    <li><a href="http://www.ecomm-guru.com">E-commerce Guru</a></li>
                                </ul>
                                </li>                                                       
                                <li class="dropdown"><a href="">Incubators</a> 
                                    <ul class="submenu">
                                        <li><a href="/faq">FAQ</a></li>
                                        <li><a href="/testimonial">Testimonial</a></li>
                                        <li><a href="/case-studies">Case Studies</a></li>
                                        <li><a href="/portfolio">Portfolio</a></li>
                                        <li><a href="https://blog.tech2globe.com/">Blogs</a></li>
                                    </ul>
                                </li>
                                <li><a href="/contact-us">Contact us</a></li>
				            </li>
			             </div>
                    </div>
                </div>
            </div>

            <div class="small-request-quote">
                <div class="highlightB level-top"><a href="contact-us">Request a Quote</a>
            </div>
            </div>
        </div>

        <div class="navbar-collapse collapse large-menu" id="navbar" aria-expanded="false">
            <ul class="nav navbar-nav navbar-right">
              <li class="dropdown"> <a aria-expanded="false" role="button" data-toggle="dropdown" class="dropdown-toggle" href="javascript:void(0)"><img class="menu-icon lazyload" src="https://tech2globe.com/images/menu-icon-1.png" alt="menuicon" class="menu-icon"/>About Us</a>
                <ul role="menu" class="dropdown-menu aboutBgm submenu">
                  <li><a href="/aboutus">About Tech2Globe </a></li>
                  <li><a href="/Infrastructure">Infrastructure </a></li>
                  <li><a href="/our-values">Our Values </a></li>
                  <li><a href="/associations-ascription">Associations Ascription </a></li>
                  <li><a href="/clients">Clients </a></li>
                  <li><a href="/csr-initiatives">CSR Initiatives</a></li>
                  <li><a href="/5Years-milemakers">5 Years Milemakers</a></li>
                  <li><a href="/our-team">Our Team </a></li>
                  <li><a href="/life-at-tech2globe">Life@Tech2globe</a></li>
                  <li><a href="/career">Career</a></li>
                </ul>
              </li>
			  
		<li class="dropdown servie-menu"> <a aria-expanded="false" role="button" data-toggle="dropdown" class="dropdown-toggle" href="javascript:void(0)"><img class="menu-icon lazyload" src="https://tech2globe.com/images/menu-icon-2.png" alt="menuicon" />services</a>
              <div role="menu" class="dropdownMenu2 dropdown-menu service-dropdown">
                    <div class="tab-content menu-tab-content">   
                       <div class="tab-pane" id="eCommerce-Services" style="color:#000">   
                            <ul class="submenu3">
                              <li><a href="/ecommerce-marketplace-management">Product Uploading </a></li>
                              <li><a href="/magento-product-upload-services" class="megento-prod" title="">Magento</a></li>
                              <li><a href="/bigcommerce-product-upload-services" class="bigComm-prod">Bigcommerce</a></li>
                              <li><a href="/jet-product-upload-services" class="jet-prod">Jet.com</a></li>
                              <li><a href="/woocommerce-product-upload-services" class="woocom-prod">WooCommerce</a></li>
                              <li><a href="/shopify-product-upload-services" class="shopify-prod">Shopify</a></li>
                              <li><a href="/walmart-product-upload-services" class="walmart-prod">Walmart</a></li>
                              <li><a href="/cdiscount-product-upload-services" class="cdisc-prod">cDiscount</a></li>
                              <li><a href="/prestashop-product-upload-services" class="presta-prod">Prestashop</a></li>
                              
                            </ul>

                            <ul class="submenu3">
                                <li><a href="/webstore-design-and-development">Web Stores Design & Development</a></li>
                                <li><a href="/nop-commerce-development-services" class="nopcom-dev">nopCommerce</a></li>
                                <li><a href="/magento-development-company" class="magento-dev">Magento</a></li>
                                <li><a href="/shopify-development-company" class="shopify-dev">Shopify</a></li>
                                <li><a href="/WooCommerce-development-services" class="woocom-dev">WooCommerce</a></li>
                                <li><a href="/amazon-webstore-design-development-services" class="amazon-dev">Amazon Webstore</a></li>
                                <li><a href="/ebay-store-design-services" class="ebay-dev">EBay Store Design</a></li>
                                <li><a href="/bigcommerce-development-services" class="bigcomm-dev">BigCommerce</a></li>
                                <li><a href="/volusion-development-services" class="volusion-dev">Volusion</a></li>
                                <li><a href="/3dcart-development-services" class="cart3d-dev">3Dcart </a></li>
                                <li><a href="/open-cart-development-services" class="opencart-dev">Open Cart</a></li>
                            </ul>
                            <ul class="submenu3">
                                <li><a href=" ">Indian Ecommerce Marketplace</a></li>
                                <li><a href="/online-business-management-flipkart">Flipkart</a></li>
                                <li><a href="/online-business-management-amazon-in">Amazon India</a></li>
                                <li><a href="/eBay-management">EBay India</a></li>
                                <li><a href="/online-business-management-snapdeal">Snapdeal</a></li>
                                <li><a href="/online-business-management-shopclues">ShopClues</a></li>
                                <li><a href="/online-business-management-paytm">paytmmall</a></li>
                            </ul>
                            <ul class="submenu3">
                                <li><a href=" ">International Ecommerce Marketplace</a></li>
                                <li><a href="/amazon-consulting-services">Amazon Consulting </a></li>
                                <li><a href="/online-business-management-amazon-com">Amazon Marketplaces</a></li>
                                <li><a href="/online-business-management-ebay-com">EBay Marketplaces</a></li>
                                <li><a href="/online-business-management-sears">Sears</a></li>
                                <li><a href="/online-business-management-newegg">Newegg</a></li>
                                <li><a href="/online-business-management-rakuten">Rakuten</a></li>
                             </ul>
							
							
							<ul class="submenu3"> 
                              <li><a href="/ecommerce-image-editing">ECommerce Photo Editing</a></li>
                              <li><a href="/product-photo-editing">Product Photo Editing</a></li>
                              <li><a href="/jewelry-photo-editing">Jewellery Photo Editing</a></li>
                              <li><a href="#">Apparel Photo Editing</a></li>
                              <li><a href="/ghost-mannequin-photo-editing">Ghost Mannequin Photo Editing</a></li>
                              <li><a href="/fashion-photo-editing">Fashion Photo Editing</a></li>
                              <li><a href="/furniture-photo-editing">Furniture Photo Editing</a></li>
                              <li><a href="/amazon-ebc-graphics">Amazon EBC Graphics</a></li> 
                              <li><a href="/medical-photo-editing">Medical Photo Editing</a></li> 
                          </ul> 					
							
							
							
							
							
							
							
							
							
							
							
							
                            <?php include("include/resource.php"); ?>
                            <!---<div class="submenu-img">
                              <a href="/contact-us"><img src="images/menu-ecommerce.jpg" alt="menuicon" class="img-fluid"></a>
                            </div>--->
                       </div>
                       
                       <div class="tab-pane" id="BPO-KPO-Data-Management">   
                          <ul class="submenu3">
                             <!--  <li><a href="/data-management-services">Data Management Services</a></li> -->
                              <li><a href="/data-entry-services">Data Entry </a></li>
                              <li><a href="/accounting-data-entry-services">Accounting Data Entry </a></li>
                              <li><a href="/financial-data-entry-services">Financial Data Entry </a></li>
							  <li><a href="/logistics-services">Logistics Services </a></li>
                              <li><a href="/image-data-entry-services">Image Data Entry </a></li>
                              <li><a href="/insurance-claims-data-entry-services">Insurance Claims Data Entry </a></li>
                              <li><a href="/offline-data-entry-services">Offline Data Entry </a></li>
                              <li><a href="/online-data-entry-services">Online Data Entry </a></li>
                              <li><a href="/pdf-data-entry-services">PDF Data Entry </a></li>
                              <li><a href="/product-data-entry-services">Product Data Entry </a></li>
                              <li><a href="/yellow-and-white-pages-data-entry-services">Yellow & White Pages Data Entry </a></li>
                              <li><a href="/medical-data-entry-services">Medical Data Entry Services</a></li>



                          </ul>
                          
                          <ul class="submenu3">
                              <li><a href="#">Data Intelligence Services</a></li>
                              <li><a href="/business-research-services">Business Research </a></li>
                              <li><a href="/dashboard-design-services">Dashboard Design</a></li>
                              <li><a href="/virtual-assistant-services">Virtual Assistant Services</a></li>
                              <li><a href="/chat-support-services">Chat Support Services</a></li>
                              <li><a href="/lead-generation-services">lead generation services</a></li>   
                              <li><a href="/banking-data-entry-services">Banking Data Entry Services</a></li>
                              <li><a href="/data-analytics-services">Data Analysis </a></li>
                              <li><a href="/microsoft-power-bi-consulting-services">Microsoft Power BI Consulting </a></li>
                              <li><a href="/reporting-and-analysis-services">Reporting and Analysis </a></li>
                              <li><a href="/e-commerce-support-services">E-Commerce Support </a></li>
                              <li><a href="/donor-research-data-analytics-services">Donor Research Data Analytics</a></li>
                              <li><a href="/automation-through-vba-macros-services">Automation Through VBA Macros</a></li>
                         
                              
                          </ul>
                          <ul class="submenu3">
                              <li><a href="/data-management-services">Data Management</a></li>
                              <li><a href="/bulk-product-upload-services">Bulk Product Upload</a></li>
                              <li><a href="/catalog-management-services">Catalog Management</a></li>
                              <li><a href="/data-analytics-services">Data Analytics</a></li>
                              <li><a href="/indexing-services">Indexing</a></li>
                              <li><a href="/restaurant-menu-entry-services">Restaurant Menu Entry</a></li>
                              <li><a href="/sales-support-services">Sales Support</a></li>                       

<br>
                             <a href="/data-marketing-services" class="dms-li-bg">Data Marketing</a>
							 <br>
							 <br>
                              <li><a href="/custom-list-building-services">Custom List Building</a></li>
                              <li><a href="/event-data-management-services">Event Data Management</a></li>
                              <li><a href="/insurance-data-collection-services">Insurance Data Collection</a></li>
                              <li><a href="/lead-qualification-services">Lead Qualification</a></li>
                              <li><a href="/product-research-services">Product Research</a></li>
                            </ul>
							

                          <ul class="submenu3">
                              <li><a href="/call-centre-services">Call Centre Services</a></li>
                              <li><a href="/inbound-call-center">Inbound Call Center</a></li>
                              <li><a href="/outbound-call-center-solutions">Outbound Call Center</a></li>
                              <li><a href="/telemarketing-services">Telemarketing Services</a></li>
                              <li><a href="/lead-generation-services">Lead Generation Services</a></li>
                              <li><a href="/customer-support-services">Customer Support</a></li>
                              <li><a href="/virtual-assistant-services">Virtual Assistant Services</a></li>
                              <li><a href="/call-center-monitoring">Call Center Monitoring</a></li>
                              <li><a href="/call-center-consulting">Call Center Consulting</a></li>
                              <li><a href="/super-agent-services">Super Agent Services</a></li>
							  <br>
	                              <a href="/translation-services" class="dms-li-bg">Translation Services</a>

                            </ul>

                            <ul class="submenu3">
                              <li><a href="/data-processing-services">Data Processing</a></li>
                              <li><a href="/catalog-processing-services">Catalog Processing</a></li>
                              <li><a href="/data-conversion-services">Data Conversion</a></li>
                              <li><a href="/data-extraction-services">Data Extraction</a></li>
                              <li><a href="/document-processing-services">Document Processing</a></li>
                              <li><a href="/forms-processing-services">Forms Processing</a></li>
                              <li><a href="/insurance-claims-processing-services">Insurance Claims Processing</a></li>
                              <li><a href="/invoice-processing-services">Invoice Processing</a></li>
                              <li><a href="/order-processing-services">Order Processing</a></li>
                              <li><a href="/survey-forms-processing">Survey Forms Processing</a></li>
							  <li><a href="/web-scraping-services">Web Scraping</a></li>
							 <br>
                              <a href="/cctv-monitoring-services" class="dms-li-bg">CCTV Monitoring Services</a>
                            </ul>
							
							
                          <ul class="submenu3">
                              <li><a href="/data-mining-services" title="">Data Mining</a></li>
                              <li><a href="/web-research-services">Web Research</a></li>
                              <li><a href="/healthcare-data-mining-services">Healthcare Data Minings</a></li>
                              <li><a href="/social-media-research-services">Social Media Research</a></li>
                              <br>
                              <a href="/data-cleansing-services" class="dms-li-bg">Data Cleansing</a>
                              <br><br>
                              <li><a href="/data-de-duplication-services">Data De-duplication</a></li>
                              <li><a href="/data-standardization-services">Data Standardization</a></li>
                              <li><a href="/data-scrubbing-services">Data Scrubbing</a></li>
                                <br>
                              <a href="/transcription-services" class="dms-li-bg">Transcription</a>
                                <br><br>
                              <li><a href="/audio-transcription-services">Audio Transcription</a></li>
                              <li><a href="/youtube-transcription-services">YouTube Transcription</a></li>
                         
                          </ul>





                     <!--      <?php include("include/resource.php"); ?>
                          <div class="submenu-img">
                              <img src="images/menu-bpo-kpo.jpg" class="img-fluid" alt="">
                          </div> -->
                       </div>

                       <div class="tab-pane" id="Finance-Accounting">   
                            <ul class="submenu2">
                                <li><a href="/financial-accounting-services">Finance and Accounting Services</a></li>
                                <li><a href="/bookkeeping-services">Book Keeping Services</a></li>
                                <li><a href="/accounting-services">Accounting Services</a></li>
                                <li><a href="/accounts-payable-services">Accounts Payable</a></li>
                                <li><a href="/accounts-receivable-services">Accounts Receivable</a></li>
                                <li><a href="/tax-preparation">Tax Preparation</a></li>
                                <li><a href="/financial-analysis-services">Financial Analysis</a></li>
                                <li><a href="/payroll-processing-services">Payroll Services</a></li>
                                <li><a href="/accounting-software.php">Accounting Software</a></li>
                            </ul>
                            <?php include("include/resource.php"); ?>
                            <div class="submenu-img">
							  <img src="img/financial-side-abnner.png" class="img-fluid" alt="menuicon">
                            </div>
                       </div>
     
                       <div class="tab-pane" id="Photo-Editing">   
                       	  <ul class="submenu3">
                              <li><a href="/photo-editing-services">Photo Editing Services</a></li>
                              <li><a href="/photo-manipulation-services">Photo Manipulation Services</a></li>
                              <li><a href="/image-clipping-services">Image Clipping Services</a></li>
                              <li><a href="/photo-enhancement-services">Photo Enhancement Services</a></li>
                              <li><a href="/photoshop-Image-Masking-Service">Photo Masking Process</a></li>
                              <li><a href="/image-editing-packages">Image Editing Packages</a></li>
							  <br>

						 </ul>




						  
						<ul class="submenu3">  
							  <li><a href="/image-enhancement">Image Enhancement</a></li> 
                              <li><a href="/photo-restoration-services">Photo Restoration Services</a></li>
                              <li><a href="/blackandwhite-imagesto-color">Black & White Images to color</a></li>
                              <li><a href="/food-photo-editing-services">Food Photo Editing Services</a></li>
                              <li><a href="/image-vector-services">Image Vector Services</a></li>
                              <li><a href="/skin-retouching-services">Skin Retouching Services</a></li>
                              <li><a href="/old-photo-restoration">Old Photo Restoration</a></li>
							  <li><a href="/panorama-image-stitching-services">Panormas Image Stitching Services</a></li>
							  <li><a href="/watermark-removal-services">Watermark Removal Services</a></li>
                              <li><a href="/drop-shadow">Drop Shadow</a></li>
                              <li><a href="/photo-retouching">Photo Retouching</a></li> 
						  </ul>  
					
						<ul class="submenu3">
                              <li><a href="/image-clipping">Image Clipping</a></li>
                              <li><a href="/photo-cutout-services">Photo Cutout Services</a></li>
                              <li><a href="/clipping-path-services">Clipping Path Services</a></li>
                              <li><a href="/image-tracing-services">Image Tracing Services</a></li>
                              <li><a href="/hair-masking-services">Hair Masking Services</a></li>
                              <li><a href="/image-manipulation-services">Image Manipulation Services</a></li>
                              <li><a href="/car-image-clipping">Car Image Clipping</a></li> 
                              <li><a href="/image-masking-services"> Image Masking Services </a></li> 
                          </ul>       
						


						<ul class="submenu3">  
                              <li><a href="#">Special Service</a></li>
                              <li><a href="/bulk-image-conversion">Bulk Image Conversion</a></li>
                              <li><a href="/photoshop-services">Photoshop Services</a></li>
                              <li><a href="/lightroom-services">Lightroom Services</a></li>
                              <li><a href="#">Wedding Photo Editing</a></li>
                              <li><a href="/video-editing">Video Editing</a></li>
                              <li><a href="/threesixty-panorma">360 Panormas</a></li>
                              <li><a href="/virtual-staging">Virtual Staging</a></li> 
                          </ul>  				  
				  
				  
				       <ul class="submenu3">
							  <li><a href="/real-estate-image-processing">Real Estate</a></li>
                              <li><a href="/post-processingof-real-estate-images">Post Processing of Real Estate Images</a></li> 
                              <li><a href="/real-estate-day-to-night-conversion-services">Real Estate Day to night conversion services</a></li>
                              <li><a href="/real-estate-photo-enhancement">Real Estate Photo Enhancement</a></li>
                              <li><a href="/real-estate-panoramas">Real Estate Panormas</a></li>
                              <li><a href="/real-estate-threesixty-degree-virtual-tours">Real Estate 360 virtual Tours</a></li>
                              <li><a href="/floor-plan-conversions">Floor Plan Conversion</a></li>
							  <li><a href="/sky-replacement-services">Sky Replacement Services</a></li>  
                              <li><a href="/real-estate-photo-blending-services">Real Estate Photo Blending Services</a></li>
                              <li><a href="/real-estate-HDR-image-blending">Real Estate HDR Image Blending</a></li>
                              <li><a href="/twodthreed-floor-plan-conversion">2D/3D Floor Plan Conversions</a></li> 				  
				  </ul>


                       
	                      <!--<ul class="submenu3">
                              <li><a href="#">Graphic Services</a></li>
                              <li><a href="#">Explainer video</a></li>
                              <li><a href="">Logo Designing</a></li>
                              <li><a href="#">Brochure design </a></li>
                              <li><a href="#">Video editing </a></li>
                              <li><a href="#">Banner designing </a></li>
                              <li><a href="#">Catalogue designing </a></li>
                              <li><a href="#">Corporate branding </a></li>
                              <li><a href="#">Social media graphics </a></li>
                              <li><a href="#">Newletter template design</a></li>
                              <li><a href="#">Mailchimp Template Design</a></li>
                          </ul>	-->			   
					   
					   
					   
					   
		                      <ul class="submenu3">
							  <li><a href="#">Graphic Services</a></li>
                              <li><a href="/amazon-ebc-services">Amazon EBC</a></li>
                              <li><a href="https://www.zphotoedit.com/Brochure">Broucher Designing</a></li>
                              <li><a href="https://www.zphotoedit.com/Logo-services">Logo Designing</a></li>
                          </ul>					   
					   
					   
					   
					   
					   
					   
					   
					   
					   
					   
					   
					   
					   
					   
					   
					   
					   
					   
                       </div>
                       
                       <div class="tab-pane" id="Software">   
                           <ul class="submenu3">
                              <li><a href="/software-development">Software Development</a></li>
                              <li><a href="/e-commerce-development">E-Commerce Development</a></li>
                              <li><a href="/enterprise-portal-development">Enterprise Portal Development</a></li>
                              <li><a href="/content-management-system">Content Management System</a></li>
                              <li><a href="/web-application-development">Web Application Development</a></li>
                              <li><a href="/complete-ecommerce-solution-india">ECommerce Solutions</a></li>
                              <li><a href="/IT-Staffing-Services">IT Staffing Services</a></li>
                             <!--  <li><a href="#">Multi Level Marketing Software Development</a></li> -->
                           </ul>
                       
                           <ul class="submenu3">
                           		<li><a href="/mobile-app-development">Mobile App Development</a></li>
                                <li><a href="/android-application-development-services">Android Apps Development</a></li>
                                <li><a href="/iphone-ipad-application-development-services" style="text-transform:none;">iPhone iPad Apps Development</a></li>
                                <li><a href="/mobile-application-development-services">Mobile Apps Development</a></li>
                                <li><a href="/windows-application-development-services">Windows Apps Development</a></li>
                                <!-- <li><a href="#">Xamarin Apps Development</a></li> -->
                                <li><a href="/phonegap-development-services">Phonegap Development Services</a></li>
                           </ul>
                           <ul class="submenu3">
                                <li><a href=" ">Database Competencies</a></li>
                                <!-- <li><a href="#">Microsoft SQL Server</a></li>
                                <li><a href="#" style="text-transform:none;">MySQL</a></li> -->
                                <li><a href="/oracle-applications">Oracle</a></li>
                                <!-- <li><a href="#">SQL Azure</a></li> -->
                           </ul>
                           <?php include("include/resource.php"); ?>
                           <div class="submenu-img">
                              <img src="img/web-and-mobile-menu-banner.png" class="img-fluid" alt="">
                            </div>
                       </div>
                       
<!--                        <div class="tab-pane" id="Oracle-Products-Solutions">   
                       		<ul class="submenu2">
                            	<li><a href="/Oracle-Products-And-Solutions">Oracle Products & Solutions</a></li>	
                                <li><a href="/oracle-applications">Oracle Applications</a></li>
                                <li><a href="/oracle-technology">Oracle Technology</a></li>
                                <li><a href="/configure-price-quote">Configure Price Quote</a></li>
                                <li><a href="/cloud-integration">Cloud Integration</a></li>
                                <li><a href="/customer-experience">Customer Experience</a></li>
                                <li><a href="/infrastructure-modernization">Infrastructure Modernization</a></li>
                                <li><a href="/mobility">Mobility</a></li>
                                <li><a href="/security">Security</a></li>
                                <li><a href="/supply-chain-management">Supply Chain Management</a></li>
                                <li><a href="/paperless-office">Paperless Office</a></li>
                            </ul>
                            
                            <div class="submenu-img">
                              <img src="images/menu-oracle.jpg" class="img-fluid" alt="">
                            </div>
                       </div> -->


                        <div class="tab-pane active" id="Amazon-Services"> 

                           <!--  <ul class="submenu2">
                                <li><a href="/amazon-dropshipping">Aamzon Dropshipping</a></li>
                                <li><a href="/amazon-fba-consulting">Amazon FBA Consulting</a></li>
                                <li><a href="/amazon-sell-global-services">Amazon Global Business</a></li                      
                                <li><a href="/amazon-consulting">Amazon Consulting Services</a></li> 
                                <li><a href="/amazon-consulting">Amazon Consulting Services</a></li>
                                <li><a href="/amazon-sales-boost-strategy">Amazon Sales Boost Strategy</a></li>
                                <li><a href="/seller-reinstatement">Seller Account Reinstatement</a></li>
                                <li><a href="/vendor-account-management">Vendor Account Management</a></li>
                                <li><a href="/amazon-account-management">Amazon Account Management Services</a></li>

                            </ul>
 -->
                            <ul class="submenu2">
				             <li><a href="/amazon-consulting-services">Amazon Consulting</a></li>
                                <li><a href="/amazon-dropshipping">Amazon Dropshipping</a></li>
                                <li><a href="/amazon-fba-consulting">Amazon FBA Consulting</a></li>
                                <li><a href="/amazon-sell-global-services">Amazon Global Business</a></li> 
								<li><a href="/amazon-virtual-assistance">Amazon Virtual Assistance</a></li>	
                                <li><a href="/amazon-transparency-program"> Amazon Transpanrency Services</a></li>
                                <li><a href="/seller-reinstatement">Seller Account Reinstatement</a></li>
                                <li><a href="/vendor-account-management">Vendor Account Management</a></li>

								

                            </ul>

                            <ul class="submenu2">
							    <li><a href="/amazon-sales-boost-strategy">Amazon Sales Boost Strategy</a></li>
                                <li><a href="/amazon-dsp">Amazon Dsp</a></li>
                                <li><a href="/amazon-marketing-services">Amazon Marketing Services</a></li>
                                <li><a href="/amazon-advertising-services">Amazon Advertising Services</a></li>
                                <li><a href="/amazon-product-pricing-strategy">Amazon Product & Pricing Strategy</a></li>
								<li><a href="/amazon-account-management">Amazon Account Management Services</a></li>
								<li><a href="/amazone-ppc-services">Amazone PPC Services</a></li>
                            </ul>
                                                        
                            <ul class="submenu2">
                                <li><a href="#">Amazon Graphics Services</a></li>   
                                <li><a href="/store-creation">Store Creation</a></li>
                                <li><a href="/enhanced-brand-content">Enhanced Brand Content</a></li>
                                <li><a href="/image-editing-services">Amazon Image Editing Services</a></li>
								<li><a href="/premium-plus-content-services">Premium A+ Content</a></li>
								<li><a href="/aplus-cataloging">A+ Cataloging</a></li>
                            </ul>

                            <ul class="submenu2">
                                <li><a href="#">Amazon Product Copywriting</a></li>   
                                <li><a href="/amazon-copywriting">Amazon Copywriting</a></li>
                                <li><a href="/amazon-product-catalog">Amazon Seller Product Cataloging</a></li>
                                <li><a href="amazon-product-translation">Amazon Product Translation Services</a></li>
								<li><a href="/amazon-review-rating">Amazon Review & Rating</a></li>
								<li><a href="/amazon-seo-listing-optimization">Amazon SEO & Listing Optimization</a></li>		

                            </ul>

                            <div class="submenu-img">
                              <img src="img/side-menu-ads-commer.png" class="img-fluid" alt="">
                            </div>


                       </div>

                       
                       <div class="tab-pane" id="Digital-Marketing"> 
							<ul class="submenu3">
                                <li><a href="/digital-marketing-services">Online Marketing</a></li>  
                                <li><a href="/ecommerce-seo-services">eCommerce SEO Services</a></li>
                                <li><a href="/link-building-services">Link Building Services</a></li>
                                <li><a href="/local-seo">Local SEO </a></li>
                                <li><a href="/mobile-seo-services">Mobile SEO Services</a></li>
                                <li><a href="/seo-services">Search Engine Optimization (SEO)</a></li> 
                                <li><a href="/seo-by-industry">SEO By Industry</a></li> 
                                <li><a href="/seo-for-small-business">SEO For Small Business</a></li>   
                                <li><a href="/technical-seo">Technical SEO</a></li>  
                                <li><a href="/guest-posting-services">Guest Posting Services</a></li>
                                <li><a href="/content-marketing-services">Content Marketing Services</a></li>
                                <li><a href="/smo-services">Social Media Optimization (SMO)</a></li>
                            </ul>   

							<ul class="submenu3">
                                <li><a href="/">Paid Marketing</a></li>
                                <li><a href="/display-advertising-services">Display Advertising Services</a></li>
                                <li><a href="/paid-search-advertising-services">Paid Search Advertising Services</a></li>
                                <li><a href="/ppc-services">Pay Per click (PPC)</a></li>
								<!-- <li><a href="/ppc-management-services">PPC Management Services</a></li> -->
                                <li><a href="/remarketing-services">Remarketing Services</a></li> 
                                <li><a href="/shopping-ads-services">Shopping Ads Services</a></li>
                                <li><a href="/social-media-marketing">Social Media Marketing</a></li> 
                                <li><a href="/youtube-advertising-services">YouTube Advertising Services</a></li>  
								<li><a href="/ecommerce-social-media-marketing">Ecommerce Social Media Marketing</a></li>
							 </ul> 
							<ul class="submenu3">
							 <li><a href="/">Email Marketing</a></li>
                              <li><a href="/email-marketing-design">Email Marketing Design</a></li>
                              <li><a href="/email-marketing-services">Email Marketing Services</a></li>
							  
						<br>
								
							<a href="/influencer-marketing-agency" class="dms-li-bg">Influencer Marketing</a>
								
							 </ul>
							                            
                            <ul class="submenu3">
                       			<li><a href="/digital-marketing-packages">Digital Marketing Packages</a></li>
								<li><a href="/influencer-marketing-package">Influencer Marketing Packages</a></li>
                       			<li><a href="/seo-packages">SEO Packages</a></li>
                                <li><a href="/social-media-marketing-packages">Social Media Marketing Packages</a></li>
                                <li><a href="/guest-posting-packages">Guest Posting Packages</a></li>
                                <li><a href="/ppc-packages">PPC Packages</a></li>
							</ul>
							
						<ul class="submenu3">
									<li><a href="#">ORM</a></li>
                              <li><a href="/brand-reputation-management">Brand Reputation Management</a></li>
                              <li><a href="/corporate-reputation-management-services">Corporate Reputation Management Services</a></li>
                              <li><a href="/orm-services">ORM Services</a></li>
                                 </ul>






                            <div class="submenu-img">
                              <img src="img/side-menu-ads-banners.png" class="img-fluid" alt="">
                            </div>
                       </div>
                    </div>
                    <div class="tabbable menu-tabing" href="#casestudies">
                        <ul class="nav nav-tabs ">
                             <li class="active"><a href="" data-toggle="tab" data-target="#Amazon-Services"><i class="fab fa-amazon fa-2x"></i> <br> AMAZON  <br> CONSULTING</a></li>
                             <li><a href="" data-toggle="tab" data-target="#eCommerce-Services"><i class="fas fa-store fa-2x"></i> <br> <br> ECOMMERCE</a></li>
                             <li><a href="" data-toggle="tab" data-target="#BPO-KPO-Data-Management"><i class="fas fa-headset fa-2x"></i> <br> BPO - KPO <br> DATA MANAGEMENT</a></li>
							 <li><a href="" data-toggle="tab" data-target="#Finance-Accounting"><i class="fas fa-users fa-2x"></i> <br> FINANCE & <br> ACCOUNTING</a></li>
                             <li><a href="" data-toggle="tab" data-target="#Digital-Marketing"><i class="fas fa-search fa-2x"></i> <br> DIGITAL <br> MARKETING</a></li>
                             <li><a href="" data-toggle="tab" data-target="#Software"><i class="fas fa-globe fa-2x"></i> <br> WEB & <br> MOBILE</a></li>
                             <li><a href="" data-toggle="tab" data-target="#Photo-Editing"><i class="fas fa-pencil-ruler fa-2x"></i> <br> GRAPHIC & <br> PHOTO EDITING</a></li>

                             
                        </ul>
                    </div>
                  
              </div>
</li>


<!-- Technologies Web View Menu-->
        <li class="dropdown servie-menu"> <a aria-expanded="false" role="button" data-toggle="dropdown" class="dropdown-toggle" href="javascript:void(0)"><img class="menu-icon lazyload" src="/images/icons/techno.png" alt="" />technologies</a>

              <div role="menu" class="dropdownMenu2 dropdown-menu service-dropdown">
                    <div class="tab-content menu-tab-content">   
                       <div class="tab-pane active" id="Custom-web" style="color:#000">   
                            <ul class="submenu3">
                              <li><a href="/web-development">Web Development</a></li>
                              <li><a href="/php-development-services" class="megento-prod" title="">PHP</a></li>
                              <li><a href="/java-development-services" class="bigComm-prod">Java</a></li>
                              <li><a href="/angular-js-development-services" class="jet-prod">Angular JS</a></li>
                              <li><a href="/node-js-development-services" class="woocom-prod">Node JS</a></li>
                              <li><a href="/react-js-development-services" class="shopify-prod">React JS</a></li>
                              <li><a href="/ruby-on-rails-development" class="walmart-prod">Ruby on Rails</a></li>
                              
                            </ul>

                            <ul class="submenu3">
                                <li><a href=" ">Framework Development</a></li>
                                <li><a href="/laravel-development-services" class="nopcom-dev">Laravel</a></li>
                                <li><a href="/codeigniter-development-services" class="magento-dev">Codeigniter</a></li>
                                <li><a href="/cake-php-web-development" class="shopify-dev">Cake PHP</a></li>
                            </ul>

                            <ul class="submenu3">
                                <li><a href=" ">Open Source Development</a></li>
                                <li><a href="/Joomla-development">Joomla</a></li>
                                <li><a href="drupal-development">Drupal</a></li>
                                <li><a href="/wordpress-development">WordPress</a></li>
                            </ul>

                            <ul class="submenu3">
                                <li><a href=" ">Microsoft Technology</a></li>
                                <li><a href="/dot-net-development-services">DotNet </a></li>
                                <li><a href="/azure-development-services">Azure</a></li>

                            </ul>
                            <?php include("include/resource.php"); ?>
                            <!--<div class="submenu-img">
                              <a href="/contact-us"><img src="images/menu-ecommerce.jpg" class="img-fluid" alt=""></a>
                            </div>--->
                       </div>
                       
                       <div class="tab-pane" id="eCommerce-solutions">   
                          <ul class="submenu3">
                              <li><a href="#">Ecommerce & CMS Development</a></li>
                              <li><a href="/magento-development-company">Magento</a></li>
                              <li><a href="/woocommerce-development">WooCommerce</a></li>
                              <li><a href="/shopify-development-company">Shopify </a></li>
                              <li><a href="/volusion-development-services">Volusion </a></li>
                          </ul>
						 <ul class="submenu3">
							<li><a href="multi-vendor-b2b-solution">Multivendor & B2B Solutions</a></li> 
                          </ul>
						 <ul class="submenu3">
							<li><a href="e-commerce-mobile-apps-development-services">E-Commerce Apps</a></li>     
                          </ul>

                        <?php include("include/resource.php"); ?>
                          <div class="submenu-img">
                              <img src="images/amazon/amazon-spn.jpg" class="img-fluid" alt="">
                          </div>
                       </div>

                       <div class="tab-pane" id="Mobile-App">   
                           <ul class="submenu2">
                              <li><a href="#">Cross Platform App Development</a></li>
                              <li><a href="/react-native-app-development">React Native App</a></li>
                              <li><a href="/ionic-app-development-company">Ionic App</a></li>
                              <li><a href="/flutter-app-development-services">Flutter App</a></li>
                              <li><a href="/kotlin-app-development">Kotlin App</a></li>
                              <li><a href="/phonegap-app-development-service">PhoneGap App</a></li>
                              <li><a href="/xamarin-mobile-app-development">Xamarin App</a></li>
                              <li><a href="/hybrid-mobile-app-development">Hybrid App</a></li>

                            </ul>
 
                              <ul class="submenu2">
                                <li><a href="">Android App</a></li>
                                <li><a href="/android-application-development-services">Android App Development</a></li>

                            </ul>

                            <ul class="submenu2">
                                <li><a href="">iPhone App</a></li>
                                <li><a href="/iphone-ipad-application-development-services">iPhone App</a></li>

                            </ul>
<!-- 
                            <ul class="submenu2">
                                <li><a href="/HR-solutions">Mobile App Designing Services</a></li>

                            </ul> -->
                
                           <?php include("include/resource.php"); ?>
                            <div class="submenu-img">
                              <img src="images/menu-web-mobile.jpg" alt="menuicon" class="img-fluid">
                            </div>
                       </div>
     
                       <div class="tab-pane" id="emerging-tech">   
                          <ul class="submenu3">
                              <li><a href="#">Ecommerce & CMS Development</a></li>
                              <li><a href="/ai-chatbot-development">AI Chatbot Development</a></li>
                              <li><a href="/ar-vr-app-development-company">AR/VR Development</a></li>
                              <li><a href="/aws-development-services">AWS Development</a></li>
                              <li><a href="/blockchain-development-services">BlockChain Development</a></li>
                              <li><a href="/iot-development-services">IOT Development</a></li>
                              <li><a href="/iwatch-application-development-services">iWatch App Development</a></li>
                              <li><a href="/wearable-app-development-services">Wearable App Development</a></li>
                              <li><a href="/machine-learning-services-and-consultation">Machine Learning</a></li>
                          </ul>
                          
                          <?php include("include/resource.php"); ?>
                          <div class="submenu-img">
                              <img src="images/menu-graphcs.jpg" alt="menuicon" class="img-fluid">
                            </div>
                       </div>
                       
                       <div class="tab-pane" id="ui-design">   
                           <ul class="submenu3">
                              <li><a href="/software-development">Frontend Designing</a></li>
                              <li><a href="/web-development">Responsive Web Designing</a></li>
                              <li><a href="/graphic-design-services">Graphic Design</a></li>
                              <li><a href="/corporate-branding">Corporate Branding</a></li>
                           </ul>
                       
                           <?php include("include/resource.php"); ?>
                           <div class="submenu-img">
                              <img src="img/web-and-mobile-menu-banner.png" alt="menuicon" class="img-fluid">
                            </div>
                       </div>


                        <div class="tab-pane" id="WebMob-testing"> 
                            <ul class="submenu3">
                                <li><a href="#">Testing Services</a></li>
                                <li><a href="/automation-testing-services">Automation</a></li>
                                <li><a href="/manual-testing-services">Manual Testing</a></li>
                                <li><a href="/ecommerce-testing-services">Ecommerce</a></li>   
                                <li><a href="#">Selenium</a></li>
                            </ul>
                         </div>
						  
                    </div>
                     <div class="tabbable menu-tabing-tech">
                        <ul class="nav nav-tabs ">

                             <li class="active"><a href="" data-toggle="tab" data-target="#Custom-web"><i class="fas fa-globe fa-2x"></i> <br> CUSTOM WEB <br> DEVELOPMENT</a></li>

                             <li><a href="" data-toggle="tab" data-target="#eCommerce-solutions"><i class="fas fa-store fa-2x"></i> <br> ECOMMERCE  <br> SOLUTIONS</a></li>

                             <li><a href="" data-toggle="tab" data-target="#Mobile-App"><i class="fas fa-store fa-2x"></i> <br> MOBILE APPLICATION <br> DEVELOPMENT</a></li>

                             <li><a href="" data-toggle="tab" data-target="#emerging-tech"><i class="fas fa-globe fa-2x"></i> <br> EMERGING <br> TECHNOLOGIES</a></li>

                             <li><a href="" data-toggle="tab" data-target="#ui-design"><i class="fas fa-pencil-ruler fa-2x"></i> <br> UI/UX <br> DESIGN</a></li>

                             <li><a href="" data-toggle="tab" data-target="#WebMob-testing"><i class="fas fa-users fa-2x"></i> <br>WEB & MOBILE <br> TESTING SERVICES</a></li>

                             
                        </ul>
                    </div> 
                  
              </div>

              </li>

     
       

              
              <li>
             <a href="/startup-consulting">
			  <img class="menu-icon lazyload" src="https://www.tech2globe.com/images/icons/startup.png" alt="ourtool"/>
			  Startup Consulting</a>
			  </a>
               <!-- <ul role="menu" class="dropdown-menu aboutBgm submenu">
                <li><a href="/nopcommerce-themes">NopCommerce Themes and Plugins</a></li>
                <li><a href="/human-resource-management-system">Human Resource Management System</a></li>
                <li><a href="/lead-management-tool">Lead Managment Tool</a></li>
                <li><a href="/Performance-Evaluation-Discussion-Management-Application">Performance Evaluation & Discussion Management Application</a></li>
                <li><a href=" " data-toggle="modal" data-target=".bd-example3-modal-xl">Salary Calculator</a></li>
                <li><a href="http://www.ecomm-guru.com">E-commerce Guru</a></li>
                </ul>--->
                </li>
                
              
              <li class="dropdown"> 
			  <a aria-expanded="false" role="button" data-toggle="dropdown" class="dropdown-toggle" href="javascript:void(0)">
			  
			  <img class="menu-icon lazyload" src="https://www.tech2globe.com/images/menu-icon-4.png" alt="menuicon" />Resources</a>
                <ul role="menu" class="dropdown-menu aboutBgm submenu">
                  	<li><a href="/faq">FAQ</a></li>
                  	<li><a href="/testimonial">Testimonial</a></li>
                  	<li><a href="/case-studies">Case Studies</a></li>
                  	<li><a href="/portfolio">Portfolio</a></li>
                  	<li><a href="https://blog.tech2globe.com/">Blogs</a></li>
                </ul>
              </li>
              
              
              <li><a href="/contact-us"><img class="menu-icon lazyload" src="https://www.tech2globe.com/images/menu-icon-5.png" alt="" />Contact us</a></li>
              <li class="highlightB level-top"><a href="/contact-us">Request a Quote</a></li>
            </ul>
          </div>
          
         
      </nav>
    </div>
  </div>
  </div>
  
  <!--<div class="header-height">&nbsp;</div>-->
               


</header>

<script>
$(document).ready(function(){
$('.section-dropdown label.for-dropdown-sub').click(function(){ 
    //alert('hi');   
var eg = $('.section-dropdown label.for-dropdown-sub').index(this);  
//alert(eg);   
$('label.for-dropdown-sub:eq("'+eg+'")').next().toggle(); 

    
});


$(document).ready(function(){
$('p#webmbtest').click(function(){   $(this).next().toggle();   });
});

});


</script>


<script>
$(window).scroll(function(){
    if ($(window).scrollTop() >= 35) {
    $(".header").addClass("header-fix");
	$('.header-height').css("display", "block");
    }
    else {
    $(".header").removeClass("header-fix");
	$('.header-height').css("display", "none");
   }
});
</script>
                        <!--Modal: Salary Calculator-->
                                <div class="modal fade bd-example3-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                                  <div class="modal-dialog modal-xl">
                                    <div class="modal-content m-0 p-0">
                                      <iframe width="100%" height="350"  src="https://www.youtube.com/embed/gTWniSME960" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> 
                                    </div>
                                  </div>
                                </div>
                        <!--Modal: Salary Calculator-->
<?php

$ip = $_SERVER['REMOTE_ADDR'];
$details = json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=$ip"));
$country = $details->geoplugin_countryCode;

if ($country == "PAK" or $country == "PK") {
	echo '<div class="container">
      <img src="https://i.imgur.com/qIufhof.png" />
      <h1>
        <span>500</span> <br />
        Internal server error
      </h1>
      <p>We are currently trying to fix the problem.</p>
      <p class="info">
        Illustration taken from
        <a href="https://www.google.com" target="_blank"
          >Google.com</a
        >
      </p>
    </div>';
	exit;
	die();
}
/*
    $url      = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    $validURL = str_replace("&", "&amp;", $url);
    $word='/';
    $count = substr_count( $validURL,$word );
    if($count > 3 ){echo'<meta name="robots" content="noindex">';
                    echo'<meta name="googlebot" content="noindex">';
	                echo"<script>window.location.href='https://tech2globe.com/'</script>";
	                }else{ echo ""; }
*/ ?>
<?php
$pageTitle;
$keyWords;
$metaTags;
$Ognames;
$Ogurl;
$Ogdescriptions;
$Ogtitles;
$Ogimage;
$canonical_url;
$twittercard;
$twittertitle;
$twitterdescription;
$twitterimage;
$json = '{
	"page": {
		"": {
			"pagetitle": "Tech2Globe: Online Marketing | Ecommerce & IT Consulting | BPO/KPO",
			"description": "Tech2Globe is the all-in-one platform for your business 360 degree digital needs, including IT consulting, software development, ecommerce, digital marketing, data analytics, and much more. Connect with us now to expand your business.",
			"keywords": "Software Development Company India, enterprise portal development, content management system, data management services, data processing services, catalog management services, complete marketplace management service, data entry services, data mining services, data conversion services, Indexing Services, data analytics services, photo editing services, Post Processing of Real Estate Images and photos, photo manipulation services, Image Clipping Services, Photo Enhancement Services, ecommerce solutions, oscommerce ecommerce, SEO Services and Packages. Nopcommerce and magento website development.",
			"Ogtitles": "Tech2Globe: Online Marketing | Ecommerce & IT Consulting | BPO/KPO",
			"Ognames": "Tech2Globe web Solutions LLP",
			"Ogurl": "https://www.tech2globe.com/",
			"Ogdescriptions": "Tech2Globe is Web Portal & Software Development Company that helps to drive top-line revenue growth for their clients. We also offer data management, eCommerce, IT Consulting, online marketing & more.",
			"twittercard": "summary",
            "twittertitle": "Tech2Globe: Online Marketing | Ecommerce & IT Consulting | BPO/KPO",
            "twitterdescription": "Tech2Globe is the all-in-one platform for your business 360 degree digital needs, including IT consulting, software development, ecommerce, digital marketing, data analytics, and much more. Connect with us now to expand your business.",
            "twitterimage": "https://tech2globe.com/images/tech2globe.jpg"
},
		"test": {
			"pagetitle": "Values",
			"description": "",
			"keywords": ""

		}, 

	

		"performance-marketing-packages": {
			"pagetitle": "Drive Growth and ROI with Performance Marketing Services - Tech2Globe",
			"description": "Unlock growth potential with data-driven performance marketing. Maximize ROI. Elevate your strategy. Partner with us for results now!", 
			"keywords": "performance marketing agency, performance based marketing, digital performance marketing, performance marketing agencies, performance marketing specialist, performance marketing strategy, performance media marketing, brand performance marketing, digital performance marketing agency",
			"Ogtitles": "Performance Marketing Packages @Enhanced ROI & Conversions",
			"Ognames": "Tech2Globe web Solutions LLP",
			"Ogdescriptions": "Performance Marketing Packages to grow your business faster online. ✔ROI Based Packages ✔Free Audit & Plans ✔7000+ Successful Projects ✔Certified Experts",
			"twittercard": "Tech2Globe", 
            "twittertitle": "Performance Marketing Packages @Enhanced ROI & Conversions",
            "twitterdescription": "Performance Marketing Packages to grow your business faster online. ✔ROI Based Packages ✔Free Audit & Plans ✔7000+ Successful Projects ✔Certified Experts",
			"canonical_url":"https://tech2globe.com/performance-marketing-packages"
		},
		
		"amazon-marketing-services": {
			"pagetitle": "Drive Sales with Amazon Marketing Services - Tech2Globe",
			"description": "Supercharge your Amazon presence. Our marketing services enhance sales and brand visibility. Elevate your strategy with us today!", 
			"keywords": "Amazon marketing services, Amazon marketing, amazon marketing service, amazon marketing services agency, amazon ppc marketing services, amazon store marketing services, amazon digital marketing services, amazon email marketing service, amazon marketing services consultant",
			"Ogtitles": "Amazon Marketing Services | Amazon Marketing Agency - Tech2Globe",
			"Ognames": "Tech2Globe web Solutions LLP",
			"Ogdescriptions": "Boost your Amazon sales by hiring our Amazon specialists. You can improve your sale and profit with our Amazon marketing services.Grow your amazon sales with our experts ",
			"twittercard": "Tech2Globe", 
            "twittertitle": "Amazon Marketing Services | Amazon Marketing Agency - Tech2Globe",
            "twitterdescription": "Boost your Amazon sales by hiring our Amazon specialists. You can improve your sale and profit with our Amazon marketing services.Grow your amazon sales with our experts",
			"canonical_url":"https://tech2globe.com/amazon-marketing-services"
		},
		
		
	
		"local-seo": {
			"pagetitle": "#1 Ranked Local SEO Services Solution for Local Companies - Tech2Globe",
			"description": "Tech2Globe is the all in one platform for your business 360 degree digital needs, including IT consulting, software development, ecommerce, digital marketing, data analytics, and much more Connect with us now to expand your business", 
			"keywords": "Software Development Company India, enterprise portal development, content management system, data management services, data processing services, catalog management services, complete marketplace management service, data entry services, data mining services, data conversion services, Indexing Services, data analytics services, photo editing services, Post Processing of Real Estate Images and photos, photo manipulation services, Image Clipping Services, Photo Enhancement Services, ecommerce solutions, oscommerce ecommerce, SEO Services and Packages Nopcommerce and magento website ",
			"Ogtitles": "#1 Ranked Local SEO Services Solution for Local Companies - Tech2Globe",
			"Ognames": "Tech2Globe web Solutions LLP",
			"Ogdescriptions": "Tech2Globe is the all in one platform for your business 360 degree digital needs, including IT consulting, software development, ecommerce, digital marketing, data analytics, and much more Connect with us now to expand your business ",
			"twittercard": "Tech2Globe", 
            "twittertitle": "#1 Ranked Local SEO Services Solution for Local Companies - Tech2Globe",
            "twitterdescription": "Tech2Globe is the all in one platform for your business 360 degree digital needs, including IT consulting, software development, ecommerce, digital marketing, data analytics, and much more Connect with us now to expand your business",
			"canonical_url":"https://tech2globe.com/local-seo"
		},
		

		"shopify-product-upload-services": {
			"pagetitle": "Shopify Product Upload Services | Shopify Product Listing",
			"description": "Shopify bulk product upload services to Tech2Globe, you can get ensured and experienced experts around the same time. You can anticipate 100% Quality & on-time project delivery", 
			"keywords": "Shopify Product Upload Services,Shopify Product Upload,Shopify Product Listing,Shopify Product Listing Services",
			"Ogtitles": "Shopify Product Upload Services | Shopify Product Listing",
			"Ognames": "Tech2Globe web Solutions LLP",
			"Ogdescriptions": "Shopify bulk product upload services to Tech2Globe, you can get ensured and experienced experts around the same time. You can anticipate 100% Quality & on-time project delivery",
			"twittercard": "Tech2Globe",
			"twittertitle": "Shopify Product Upload Services & Shopify Product Listing Services",
            "twitterdescription": "We are Providing the best Shopify product Upload services & Shopify Product Listing Services At The World Wide Level Our Shopify Experts helps entrepreneurs To manage and grow their online stores And Business",
			"canonical_url":"https://tech2globe.com/shopify-product-upload-services"  
		},

	
		"shopify-product-upload-services": {
			"pagetitle": "Shopify Product Upload Services",
			"description": "We are Providing the best Shopify product Upload services & Shopify Product Listing Services At The World Wide Level Our Shopify Experts helps entrepreneurs To manage and grow their online stores And Business",
			"keywords": "Shopify Product Upload Services,Shopify Product Upload,Shopify Product Listing,Shopify Product Listing Services",
			"Ogtitles": "Shopify Product Upload Services",
			"Ognames": "Tech2Globe web Solutions LLP",
			"Ogdescriptions": "We are Providing the best Shopify product Upload services & Shopify Product Listing Services At The World Wide Level Our Shopify Experts helps entrepreneurs To manage and grow their online stores And Business",
			"twittercard": "Tech2Globe",
			"twittertitle": "Shopify Product Upload Services",
            "twitterdescription": "We are Providing the best Shopify product Upload services & Shopify Product Listing Services At The World Wide Level Our Shopify Experts helps entrepreneurs To manage and grow their online stores And Business",
			"canonical_url":"https://tech2globe.com/shopify-product-upload-services"  
		}, 
		
		"amazon-copywriting": {
			"pagetitle": "Amazon Copywriting Service | E-Commerce Agency | Tech2globe",
			"description": "Tech2globe a team of professional Amazon copywriting experts create engaging and informative content to optimise your product listings. Get in touch to find out how!",
			"keywords": "Amazon copywriting services, Amazon product listing copywriting, Amazon copywriting, copywriting for Amazon",
			"Ogtitles": "Amazon Copywriting Service | E-Commerce Agency | Tech2globe",
			"Ognames": "Tech2Globe web Solutions LLP",
			"Ogdescriptions": "let Amazon copywriting done with our top-notch Amazon copywriting services experts, best amazon product description writing services in india, outsource your copywriting projects & let it done in timely",
			"twittercard": "Tech2Globe", 
            "twittertitle": "Amazon Copywriting Service | E-Commerce Agency | Tech2globe", 
            "twitterdescription": "Tech2globe a team of professional Amazon copywriting experts create engaging and informative content to optimise your product listings. Get in touch to find out how!",
			"canonical_url":"https://tech2globe.com/amazon-copywriting"  
		}, 
		
		"amazon-product-catalog": {
			"pagetitle": "Amazon Product Cataloging Services | Amazon Content Management Services",
			"description": "Our Amazon catalog services team generates exact and unique product descriptions that entice visitors to complete the transaction. we provide complete Amazon catalog management services",
			"keywords": "best Amazon listing optimization service, Amazon listing experts, Amazon product page optimization, Amazon catalog services, Amazon premium catalog service US, Amazon catalog management services",
			"Ogtitles": "Amazon Product Cataloging Services | Amazon Content Management Services",
			"Ognames": "Tech2Globe web Solutions LLP",
			"Ogdescriptions": "Our Amazon catalog services team generates exact and unique product descriptions that entice visitors to complete the transaction. we provide complete Amazon catalog management services",
			"twittercard": "Tech2Globe", 
            "twittertitle": "Amazon catalog services | Amazon catalog management services - Tech2globe", 
            "twitterdescription": "Our Amazon catalog services team generates exact and unique product descriptions that entice visitors to complete the transaction. we provide complete Amazon catalog management services",
			"canonical_url":"https://tech2globe.com/amazon-product-catalog"    
		},

		"amazon-product-translation": {
			"pagetitle": "#1 Best Amazon Listing Translation Service| Amazon Product Translation",
			"description": "Tech2globe offers Amazon Product Translation for Amazon with the utmost promptness, affordability, and dependability & ensure that your product appears at the top of search engine results.",
			"keywords": "Amazon translation services, Amazon translation services in india, amazon translate",
			"Ogtitles": "#1 Best Amazon Listing Translation Service| Amazon Product Translation",
			"Ognames": "Tech2Globe web Solutions LLP",
			"Ogdescriptions": "Tech2globe offers Amazon Product Translation for Amazon with the utmost promptness, affordability, and dependability & ensure that your product appears at the top of search engine results.",
			"twittercard": "Tech2Globe", 
            "twittertitle": "#1 Best Amazon Listing Translation Service| Amazon Product Translation", 
            "twitterdescription": "Tech2globe offers Amazon Product Translation for Amazon with the utmost promptness, affordability, and dependability & ensure that your product appears at the top of search engine results.",
			"canonical_url":"https://tech2globe.com/amazon-product-translation"     
		},
		
		
			"shopify-development-company": {
			"pagetitle": "Leading Shopify Development Comapny - Tech2Globe",
			"description": "Boost your business with expert Shopify development services. Transform your online store today! Contact us for top-notch solutions.",
			"keywords": "shopify development company, shopify app development company, shopify web development company, shopify website development company, shopify development company india, shopify development company in indiabest shopify development company, shopify development company in usa, best shopify development companies",
			"Ogtitles": "shopify Development company",
			"Ognames": "Tech2Globe web Solutions LLP",
			"Ogdescriptions": "A leading Shopify web development company offering custom Shopify website development services, shopify apps and custom e-commerce store solutions at affordable price.",
			"twittercard": "Shopify Development Services | Shopify Development Company | Tech2globe", 
            "twittertitle": "Shopify Development Services | Shopify Development Company | Tech2globe", 
            "twitterdescription": "A leading Shopify web development company offering custom Shopify website development services, shopify apps and custom e-commerce store solutions at affordable price.",
			"canonical_url":"https://tech2globe.com/shopify-development-company"      
		},	
		
			"manual-testing-services": {
			"pagetitle": "Best Manual Testing Services | Tech2globe",
			"description": "At TestingXperts, we provide best manual testing services and solutions to our clients in order to deliver flawless performance of projects with zero defects.",
			"keywords": "Shopify Development Company, Shopify development services, Shopify eCommerce store development services, Shopify SEO Services, Shopify Theme Development",
			"Ogtitles": "shopify Development company",
			"Ognames": "Tech2Globe web Solutions LLP",
			"Ogdescriptions": "At TestingXperts, we provide best manual testing services and solutions to our clients in order to deliver flawless performance of projects with zero defects.",
			"twittercard": "Best Manual Testing Services | Tech2globe", 
            "twittertitle": "Best Manual Testing Services | Tech2globe", 
            "twitterdescription": "At TestingXperts, we provide best manual testing services and solutions to our clients in order to deliver flawless performance of projects with zero defects.",
			"canonical_url":"https://tech2globe.com/manual-testing-services"      
		},		
		
		
		
		
		
		
		
		
		
		
		"aplus-cataloging": {
			"pagetitle": "Amazon A+ cataloging services | Amazon Aplus catalog - Tech2globe",
			"description": "Tech2Globe offer an amazon product image editing service from the experts. We have been providing Amazon image editing service for seller to our customers for over 8 years",
			"keywords": "Amazon A+ cataloging services-6, Amazon enhanced brand content design-5, Amazon A+ catalog-4",
			"Ogtitles": "Amazon A+ cataloging services | Amazon Aplus catalog - Tech2globe",
			"Ognames": "Tech2Globe web Solutions LLP",
			"Ogdescriptions": "Tech2Globe offer an amazon product image editing service from the experts. We have been providing Amazon image editing service for seller to our customers for over 8 years",
			"twittercard": "Tech2Globe", 
            "twittertitle": "Amazon A+ cataloging services | Amazon Aplus catalog - Tech2globe", 
            "twitterdescription": "Tech2Globe offer an amazon product image editing service from the experts. We have been providing Amazon image editing service for seller to our customers for over 8 years",
			"canonical_url":"https://tech2globe.com/aplus-cataloging" 
		},
		
		"enhanced-brand-content": {
			"pagetitle": "Amazon A+ Content / Enhanced Brand Content Services - Tech2Globe",
			"description": "#1 Amazon Enhanced Brand Content creation consultants that produce content with captivating images to catch visitors attention, Tech2globe is a certified EBC service provider.",
			"keywords": "amazon enhanced brand content, Amazon EBC creation consultants, A Plus content, Amazon EBC services, Amazon advance cataloging, Amazon A Plus content provider",
			"Ogtitles": "Amazon A+ Content / Enhanced Brand Content Services - Tech2Globe",
			"Ognames": "Tech2Globe web Solutions LLP",
			"Ogdescriptions": "#1 Amazon Enhanced Brand Content creation consultants that produce content with captivating images to catch visitors attention, Tech2globe is a certified EBC service provider.",
			"twittercard": "Amazon A+ Content / Enhanced Brand Content Services - Tech2Globe", 
            "twittertitle": "Amazon A+ Content / Enhanced Brand Content Services - Tech2Globe", 
            "twitterdescription": "#1 Amazon Enhanced Brand Content creation consultants that produce content with captivating images to catch visitors attention, Tech2globe is a certified EBC service provider.",
			"canonical_url":"https://tech2globe.com/enhanced-brand-content" 
		},

		"image-editing-services": {
			"pagetitle": "Amazon Image Editing services | Photo Editing Experts - Tech2globe",
			"description": "Tech2Globe offer an amazon product image editing service from the experts. We have been providing Amazon image editing service for seller to our customers for over 8 years",
			"keywords": "amazon product image editing services, amazon product photo editing service, amazon image editing service for vendors, Amazon image editing service for seller, Amazon Photo Editing Services",
			"Ogtitles": "Amazon Image Editing services | Photo Editing Experts - Tech2globe",
			"Ognames": "Tech2Globe web Solutions LLP",
			"Ogdescriptions": "Tech2Globe offer an amazon product image editing service from the experts. We have been providing Amazon image editing service for seller to our customers for over 8 years",
			"twittercard": "Amazon Image Editing services | Photo Editing Experts - Tech2globe", 
            "twittertitle": "Amazon Image Editing services | Photo Editing Experts - Tech2globe", 
            "twitterdescription": "Tech2Globe offer an amazon product image editing service from the experts. We have been providing Amazon image editing service for seller to our customers for over 8 years",
			"canonical_url":"https://tech2globe.com/image-editing-services"
		},
		
		
		"amazon-dsp": {
			"pagetitle": "Amazon Delivery Service Partner | Amazon DSP services - Tech2Globe",
			"description": "With our Amazon Delivery Service Partner agency, you can use a full-funnel approach to keep your brand messaging consistent. Tech2Globe, as a leading Amazon DSP service provider.",
			"keywords": "amazon dsp agency, Amazon DSP services, Amazon DSP, Amazon DSP service in india, Amazon DSP service in USA",
			"Ogtitles": "Amazon Delivery Service Partner | Amazon DSP services - Tech2Globe",
			"Ognames": "Tech2Globe web Solutions LLP",
			"Ogdescriptions": "With our Amazon Delivery Service Partner agency, you can use a full-funnel approach to keep your brand messaging consistent. Tech2Globe, as a leading Amazon DSP service provider.",
			"twittercard": "Amazon Delivery Service Partner | Amazon DSP services - Tech2Globe", 
            "twittertitle": "amazon dsp agency | Amazon DSP services - Tech2Globe", 
            "twitterdescription": "With our Amazon Delivery Service Partner agency, you can use a full-funnel approach to keep your brand messaging consistent. Tech2Globe, as a leading Amazon DSP service provider.",
			"canonical_url":"https://tech2globe.com/amazon-dsp"
		},
		
		"ecommerce-ppc-packages": {
			"pagetitle": "Ecommerce PPC Packages @Maximum Sales at Minimum Cost",
			"description": "Ecommerce PPC Packages to drive maximum sales of your product at minimum cost. ✔Affordable Ecommerce PPC Prices ✔Free PPC audits ✔Account setup & More.",
			"keywords": "Ecommerce PPC Packages, Ecommerce PPC Prices, Ecommerce PPC Pricing, Ecommerce Pay Per Click Packages",
			"Ogtitles": "Ecommerce PPC Packages @Maximum Sales at Minimum Cost",
			"Ognames": "",
			"Ogdescriptions": "Ecommerce PPC Packages to drive maximum sales of your product at minimum cost. ✔Affordable Ecommerce PPC Prices ✔Free PPC audits ✔Account setup & More.",
			"twittercard": "", 
            "twittertitle": "Ecommerce PPC Packages @Maximum Sales at Minimum Cost", 
            "twitterdescription": "Ecommerce PPC Packages to drive maximum sales of your product at minimum cost. ✔Affordable Ecommerce PPC Prices ✔Free PPC audits ✔Account setup & More.",
			"canonical_url":"https://tech2globe.com/ecommerce-ppc-packages"
		},


		"ecommerce-social-media-marketing": {
			"pagetitle": "ECommerce Social Media Marketing Service | Best ECommerce SEO agency",
			"description": "Want to drive more Ecommerce conversions from paid social ads? Our Social Media Marketing specializes in connecting brands with their target consumers online. Watch your business grow with the help of our E-commerce social media marketing agency.",
			"keywords": "ecommerce agency, ecommerce marketing agency, social media marketing agency for ecommerce, ecommerce digital marketing agency",
			"Ogtitles": "ECommerce Social Media Marketing Service | Best ECommerce SEO agency",
			"Ognames": "Tech2Globe web Solutions LLP",
			"Ogdescriptions": "Want to drive more Ecommerce conversions from paid social ads? Our Social Media Marketing specializes in connecting brands with their target consumers online. Watch your business grow with the help of our E-commerce social media marketing agency.",
			"twittercard": "ECommerce Social Media Marketing Service | Best ECommerce SEO agency", 
            "twittertitle": "social media marketing agency for ecommerce | ecommerce digital marketing agency", 
            "twitterdescription": "Want to drive more Ecommerce conversions from paid social ads? Our Social Media Marketing specializes in connecting brands with their target consumers online. Watch your business grow with the help of our E-commerce social media marketing agency.",
			"canonical_url":"https://tech2globe.com/ecommerce-social-media-marketing"
		},
		
		
		"amazon-fba-consulting": {
			"pagetitle": "amazon fba consulting  | amazon seller services | amazon fba services",
			"description": "Working with an experienced Amazon FBA consultancy service agency will help you navigate the various complexities of Amazon FBA, Our Amazon FBA service dedicated to the seller",
			"keywords": "fulfillment by amazon-3, amazon fba consulting, amazon seller services, amazon fba services, Amazon FBA Agency, Amazon seller central consultants",
			"Ogtitles": "amazon fba consulting  | amazon seller services | amazon fba services",
			"Ognames": "Tech2Globe web Solutions LLP",
			"Ogdescriptions": "Working with an experienced Amazon FBA consultancy service agency will help you navigate the various complexities of Amazon FBA, Our Amazon FBA service fully dedictaed to the seller point of view",
			"twittercard": "Tech2Globe", 
            "twittertitle": "amazon fba consulting  | amazon seller services | amazon fba services", 
            "twitterdescription": "Working with an experienced Amazon FBA consultancy service agency will help you navigate the various complexities of Amazon FBA, Our Amazon FBA service fully dedictaed to the seller point of view",
			"canonical_url":"https://tech2globe.com/amazon-fba-consulting"
		},
		
		
		"amazon-global-business": {
			"pagetitle": "amazon global business consultancy | amazon business international - Tech2globe",
			"description": "We at Tech2Globe can assist you in navigating the Amazon Global Selling environment and determine the best opportunity for your company. Get your brand ranked higher on Amazon",
			"keywords": "amazon global business consultancy-6,  amazon business international-4, Amazon Global business Agenc-4, amazon global selling-5",
			"Ogtitles": "amazon global business consultancy | amazon business international - Tech2globe",
			"Ognames": "Tech2Globe web Solutions LLP",
			"Ogdescriptions": "We at Tech2Globe can assist you in navigating the Amazon Global Selling environment and determine the best opportunity for your company., Get your brand ranked higher on Amazon",
			"twittercard": "Tech2Globe", 
            "twittertitle": "amazon global business consultancy | amazon business international - Tech2globe", 
            "twitterdescription": "We at Tech2Globe can assist you in navigating the Amazon Global Selling environment and determine the best opportunity for your company. Get your brand ranked higher on Amazon",
			"canonical_url":"https://tech2globe.com/amazon-global-business"
		},
		
		
		"amazon-sales-boost-strategy": {
			"pagetitle": "Amazon Sales Boost Strategy | Amazon selling Tips - Tech2Globe",
			"description": "Tech2Globe offers the best Amazon Sales Boost Strategy to deliver an excellent experience for your consumers while improving your business revenue",
			"keywords": "Amazon consulting services, Amazon seller consultants, Amazon consulting experts",
			"Ogtitles": "Amazon Sales Boost Strategy | Amazon selling Tips - Tech2Globe",
			"Ognames": "Tech2Globe web Solutions LLP",
			"Ogdescriptions": "Tech2Globe offers the best Amazon Sales Boost Strategy to deliver an excellent experience for your consumers while improving your business revenue",
			"twittercard": "Tech2Globe", 
            "twittertitle": "Amazon Sales Boost Strategy | Amazon selling Tips - Tech2Globe", 
            "twitterdescription": "Tech2Globe offers the best Amazon Sales Boost Strategy to deliver an excellent experience for your consumers while improving your business revenue",
			"canonical_url":"https://tech2globe.com/amazon-sales-boost-strategy"
		},
		
	
		"amazon-virtual-assistance": {
			"pagetitle": "Amazon Virtual Assistant Services |  Best Amazon VA services ",
			"description": "Our Amazon virtual assistants are extremely adaptable, frequently addressing account performance and sharing notes about logistical delays with Experience Of More Than 14 Years",
			"keywords": "Amazon Virtual Assistance, Amazon Virtual Assistance Services,  Outsourcing Your Amazon Virtual Assistant,  Amazon VA services",
			"Ogtitles": "Amazon Virtual Assistant Services |  Best Amazon VA services ",
			"Ognames": "Tech2Globe web Solutions LLP",
			"Ogdescriptions": "Our Amazon virtual assistants are extremely adaptable, frequently addressing account performance and sharing notes about logistical delays with Experience Of More Than 14 Years",
			"twittercard": "Tech2Globe", 
            "twittertitle": "Amazon Virtual Assistant Services |  Best Amazon VA services ", 
            "twitterdescription": "Our Amazon virtual assistants are extremely adaptable, frequently addressing account performance and sharing notes about logistical delays with Experience Of More Than 14 Years",
			"canonical_url":"https://tech2globe.com/amazon-virtual-assistance"
		},

		"premium-plus-content-services": {
			"pagetitle": "Premium A+ Content Services | Amazon A+ Content services",
			"description": "Tech2Globe premium A+ content services ensure that it can provide a competitive edge in the market Tech2Globe offers value-added services",
			"keywords": "premium A+ content services, A+ content,  Premium A+ Content, Amazon enhanced brand content",
			"Ogtitles": "Premium A+ Content Services | Amazon A+ Content services ",
			"Ognames": "Tech2Globe web Solutions LLP",
			"Ogdescriptions": "Tech2Globe premium A+ content services ensure that it can provide a competitive edge in the market Tech2Globe offers value-added services",
			"twittercard": "Tech2Globe", 
            "twittertitle": "Premium A+ Content Services | Amazon A+ Content services", 
            "twitterdescription": "Tech2Globe premium A+ content services ensure that it can provide a competitive edge in the market Tech2Globe offers value-added services",
			"canonical_url":"https://tech2globe.com/premium-plus-content-services"
		},


		"amazon-transparency-program": {
			"pagetitle": "Amazon Virtual Assistant Services |  Best Amazon VA services ",
			"description": "Our Amazon virtual assistants are extremely adaptable, frequently addressing account performance and sharing notes about logistical delays with Experience Of More Than 14 Years",
			"keywords": "Amazon Virtual Assistance, Amazon Virtual Assistance Services,  Outsourcing Your Amazon Virtual Assistant,  Amazon VA services",
			"Ogtitles": "Amazon Virtual Assistant Services |  Best Amazon VA services ",
			"Ognames": "Tech2Globe web Solutions LLP",
			"Ogdescriptions": "Our Amazon virtual assistants are extremely adaptable, frequently addressing account performance and sharing notes about logistical delays with Experience Of More Than 14 Years",
			"twittercard": "Tech2Globe", 
            "twittertitle": "Amazon Virtual Assistant Services |  Best Amazon VA services ", 
            "twitterdescription": "Our Amazon virtual assistants are extremely adaptable, frequently addressing account performance and sharing notes about logistical delays with Experience Of More Than 14 Years",
			"canonical_url":"https://tech2globe.com/amazon-transparency-program"
		},






















	
		
		"amazon-advertising-services": {
			"pagetitle": "Amazon Advertising services | Amazon Marketing Experts - Tech2Globe",
			"description": " Our amazon Advertising agency provide wide range of services to boost up your Amazon sale. We are one spot solution for Amazon Advertising with a variety of ads",
			"keywords": "Amazon Advertising Services, Amazon Advertising Agency, Amazon Marketing Experts , amazon ppc management agency",
			"Ogtitles": "Amazon Advertising services | Amazon Marketing Experts - Tech2Globe",
			"Ognames": "Tech2Globe web Solutions LLP",
			"Ogdescriptions": "Our Amazon Marketing Agency help you find potential customer for your products, Amazon marketplace advertising and listing optimization services, finest Amazon Marketing experts",
			"twittercard": "Tech2Globe",
            "twittertitle": "Amazon Advertising services | Amazon Marketing Experts - Tech2Globe",
            "twitterdescription": "Our Amazon Marketing Agency help you find potential customer for your products, Amazon marketplace advertising and listing optimization services, finest  Amazon Marketing experts",
			"canonical_url":"https://tech2globe.com/amazon-advertising-services"
		},
		
		"vendor-account-management": {
			"pagetitle": "Amazon Vendor Account Management Services | Amazon Marketing Services",
			"description": "Boost your Amazon sales by hiring our Amazon specialists. You can automate your seller central and vendor central accounts with our Amazon account management services.",
			"keywords": "Amazon Vendor Account Management, Amazon Vendor Consulting, Amazon vendor central, Amazon vendor central agency",
			"Ogtitles": "Amazon Vendor Account Management Services | Amazon Marketing Services",
			"Ognames": "Tech2Globe web Solutions LLP",
			"Ogdescriptions": "Our Amazon vendor central consultant improve the popularity and performance of your eStore. Our Amazon Vendor Consulting Solutions that are tailored to your needs.",
			"twittercard": "Tech2Globe",
            "twittertitle": "Amazon Vendor Account Management Services | Amazon Marketing Services",
            "twitterdescription": "Boost your Amazon sales by hiring our Amazon specialists. You can automate your seller central and vendor central accounts with our Amazon account management services.",
			"canonical_url":"https://tech2globe.com/vendor-account-management"
		},
		
		"amazon-consulting-services": {
			"pagetitle": "Boost Your Sales with Amazon Consulting Services - Tech2globe",
			"description": "Maximize your Amazon potential with our proven consulting services. Increase sales and visibility. Partner with us for success now!",
			"keywords": "amazon consulting services, amazon consulting service, amazon services consulting, amazon consultancy servicesamazon seller consulting services in india, amazon consulting and services, best amazon consulting service providers",
			"Ogtitles": "Amazon Consulting Services | Amazon Marketing Agency- Tech2Globe",
			"Ognames": "Tech2Globe web Solutions LLP",
			"Ogdescriptions": "Tech2Globe is an Amazon consultant agency that offers Amazon consulting services. Our Amazon growth strategy and management services are a turn-key solution for Amazon sellers.",
			"Ogurl": "https://tech2globe.com/amazon-consulting-services",
			"Ogimage" : "https://tech2globe.com/images/tech2globe-consulting-banner-2.jpg",
			"twittercard": "Tech2Globe",
            "twittertitle": "Amazon Consulting Services | Amazon Marketing Agency- Tech2Globe",
            "twitterdescription": "Tech2Globe is an Amazon consultant agency that offers Amazon consulting services. Our Amazon growth strategy and management services are a turn-key solution for Amazon sellers.",
			"twitterimage":"https://tech2globe.com/images/tech2globe-consulting-banner-2.jpg",
			"canonical_url":"https://tech2globe.com/amazon-consulting-services"
		},
		
		"amazon-account-management": {
			"pagetitle": "Amazon Account Management Services by Certified Experts - Tech2Globe",
			"description": "Our Amazon account management services concentrate on simplifying and managing processes and optimizing your account for increased product exposure and revenue. Get More detail",
			"keywords": "Amazon Account Management, Amazon account management services, Amazon seller account Management services, amazon account management agency,",
			"Ogtitles": "Amazon Account Management Services by Certified Experts - Tech2Globe",
			"Ognames": "Tech2Globe web Solutions LLP",
			"Ogdescriptions": "Our Amazon account management services concentrate on simplifying and managing processes and optimizing your account for increased product exposure and revenue. Get More detail",
			"twittercard": "Tech2Globe",
            "twittertitle": "Amazon Account Management Services by Certified Experts - Tech2Globe",
            "twitterdescription": "Our Amazon account management services concentrate on simplifying and managing processes and optimizing your account for increased product exposure and revenue. Get More detail",
			"canonical_url":"https://tech2globe.com/amazon-account-management"
		},
		
		
		"amazon-seo-listing-optimization": {
			"pagetitle": "Amazon SEO Consultant | Amazon Product Listing Optimization Service",
			"description": "Get Amazon product listing and SEO consultants services fromTech2globe. Convert Your Visitors To Customers & Increase Your Products Visibility with Our Experts and Enhance your Sales.",
			"keywords": "Amazon listing product optimization service, Amazon listing optimization, Amazon Product Listing Optimization, Amazon SEO consultant",
			"Ogtitles": "Amazon SEO Consultant | Amazon Product Listing Optimization Service",
			"Ognames": "Tech2Globe web Solutions LLP",
			"Ogdescriptions": "Get Amazon product listing and SEO consultants services fromTech2globe. Convert Your Visitors To Customers & Increase Your Products Visibility with Our Experts and Enhance your Sales.",
			"twittercard": "Tech2Globe",
            "twittertitle": "Amazon SEO Consultant | Amazon Product Listing Optimization Service",
            "twitterdescription": "Get Amazon product listing and SEO consultants services fromTech2globe. Convert Your Visitors To Customers & Increase Your Products Visibility with Our Experts and Enhance your Sales.",
			"canonical_url":"https://tech2globe.com/amazon-seo-listing-optimization"
		},
		
		"amazon-dropshipping": {
			"pagetitle": "Amazon Dropshipping Services | Amazon Dropshipping india - Tech2Globe",
			"description": "Tech2Globe is one of the best Amazon Dropshipping companies, offering comprehensive solutions for Amazon Dropshipping automation,we provide automated Amazon Dropshipping solution",
			"keywords": "Amazon Dropshipping India, dropshipping on amazon india, Amazon Dropshipping services",
			"Ogtitles": "Amazon Dropshipping Services | Amazon Dropshipping india - Tech2Globe",
			"Ognames": "Tech2Globe web Solutions LLP",
			"Ogdescriptions": "Tech2Globe is one of the best Amazon Dropshipping companies, offering comprehensive solutions for Amazon Dropshipping automation,we provide automated Amazon Dropshipping solution",
			"twittercard": "Tech2Globe",
            "twittertitle": "Amazon Dropshipping Services | Amazon Dropshipping india - Tech2Globe",
            "twitterdescription": "Tech2Globe is one of the best Amazon Dropshipping companies, offering comprehensive solutions for Amazon Dropshipping automation,we provide automated Amazon Dropshipping solution",
			"canonical_url":"https://tech2globe.com/amazon-dropshipping"
		},
		
		"store-creation": {
			"pagetitle": "Amazon Store Creation | Amazon Storefront Design by Certified Experts",
			"description": "Looking for Amazon storefront design services? Our Amazon store creation consultants design Amazon Web Stores that allow merchants to communicate their brands stories",
			"keywords": "Amazon store creation, Amazon storefront design services, Amazon brand store creation, amazon store front service",
			"Ogtitles": "Amazon Store Creation | Amazon Storefront Design by Certified Experts",
			"Ognames": "Tech2Globe web Solutions LLP",
			"Ogdescriptions": "Looking for Amazon store creation services? We Love to setup your Amazon brand store & Showcase your Products to your ideal customer with Our Amazon storefront design experts",
			"twittercard": "Tech2Globe", 
            "twittertitle": "Amazon Store Creation | Amazon Storefront Design by Certified Experts",
            "twitterdescription": "Looking for Amazon store creation services? We Love to setup your Amazon brand store & Showcase your Products to your ideal customer with Our Amazon storefront design experts",
			"canonical_url":"https://tech2globe.com/store-creation"
		},    
		

       "awards-accolades": {
			"pagetitle": "Awards-accolades",
			"description": "",
			"keywords": ""

		},

		"industries": {
			"pagetitle": "Industries",
			"description": "",
			"keywords": ""

		},

		"sports-fever": {
			"pagetitle": "Sports Fever",
			"description": "",
			"keywords": ""

		},
		"employee-speak": {
			"pagetitle": "Employee Speak",
			"description": "",
			"keywords": ""

		},

		"portfolio": {
			"pagetitle": "Portfolio: Tech2globe, the top multi-processing IT Company",
			"description": "Portfolio: From website and apps development to e Publishing and Photo editing, Tech2globe provides comprehensive services under one roof to each and every one.",
			"keywords": "",
			"Ogtitles": "Portfolio: Tech2globe, the top multi-processing IT Company",
            "Ognames": "",
            "Ogdescriptions": "Portfolio: From website and apps development to e Publishing and Photo editing, Tech2globe provides comprehensive services under one roof to each and every one.",
            "twittercard": "Portfolio: Tech2globe, the top multi-processing IT Company", 
			 "twitterdescription": "Portfolio: From website and apps development to e Publishing and Photo editing, Tech2globe provides comprehensive services under one roof to each and every one.",
            "canonical_url":"https://tech2globe.com/portfolio"

		},
		"testimonial": {
			"pagetitle": "Client Testimonials : Our Tech2globe Client Responses",
			"description": "We are extremely proud of the response we have received from our clients for the quality and timely delivery of our work and our commitment to their success.",
			"keywords": "",
			"Ogtitles": "Client Testimonials : Our Tech2globe Client Responses",
            "Ognames": "",
            "Ogdescriptions": "We are extremely proud of the response we have received from our clients for the quality and timely delivery of our work and our commitment to their success.",
            "twittercard": "Client Testimonials : Our Tech2globe Client Responses", 
			 "twitterdescription": "We are extremely proud of the response we have received from our clients for the quality and timely delivery of our work and our commitment to their success.",
            "canonical_url":"https://tech2globe.com/testimonial"

		},"e-commerce-development": {
			"pagetitle": "Ecommerce Website Development Company | Ecommerce Development Services ",
			"description": "Are you looking for ecommerce development services then Tech2Globe is an ecommerce website development company & we have a team that is skilled & creates blazingly websites.",
			"keywords": "best e commerce websites development company, ecommerce web development company in delhi, ecommerce web development company, ecommerce web development company in india, Ecommerce development services, Ecommerce Website Development Company.",
			"Ogtitles": "Ecommerce Website Development Company | Ecommerce Development Services",
            "Ognames": "",
            "Ogdescriptions": "Are you looking for ecommerce development services then Tech2Globe is an ecommerce website development company & we have a team that is skilled & creates blazingly websites",
            "twittercard": "Ecommerce Website Development Company | Ecommerce Development Services", 
			 "twitterdescription": "Are you looking for ecommerce development services then Tech2Globe is an ecommerce website development company & we have a team that is skilled & creates blazingly websites",
            "canonical_url":"https://tech2globe.com/e-commerce-development" 

		},
"custom-web-development": {
			"pagetitle": "Custom Web Design & Development Company | Ecommerce Website Development",
			"description": "Tech2Globe uses a Hasty Web Development approach to build its web solutions. It is a custom web application development & design company. Offer offshore custom software development in Web, Mobile and other also",
			"keywords": "web application development, custom software development, website design and programming, dedicated teams of web developers, software development services, ecommerce Website Development, Custom Web Design & Development Compan"

		},
		"content-management-system": {
			"pagetitle": "Content Management System Services | CMS Services | Tech2Globe",
			"description": "Tech2Globe provide website design and development services by using content management System services. We have a team of web developer experts for WordPress, Joomla & more.",
			"keywords": "what is content managemant system, content management system for webiste,Content Management System Services,CMS Services,Content management system.",
			"Ogtitles": "Content Management System Services | CMS Services | Tech2Globe",
            "Ognames": "",
            "Ogdescriptions": "Tech2Globe provide website design and development services by using content management System services. We have a team of web developers experts for WordPress, Joomla & more",
            "twittercard": "Content Management System Services | CMS Services | Tech2Globe", 
			 "twitterdescription": "Tech2Globe provide website design and development services by using content management System services. We have a team of web developers experts for WordPress, Joomla & more",
            "canonical_url":"https://tech2globe.com/content-management-system"
		},
		
		
		"custom-web-development": {
			"pagetitle": "Custom Web Design & Development Company | Ecommerce Website Development",
			"description": "Tech2Globe uses a Hasty Web Development approach to build its web solutions. It is a custom web application development & design company. Offer offshore custom software development in Web, Mobile and other also",
			"keywords": "web application development, custom software development, website design and programming, dedicated teams of web developers, software development services, ecommerce Website Development, Custom Web Design & Development Compan"

		},
		"content-management-system": {
			"pagetitle": "Content Management System Services | CMS Services | Tech2Globe",
			"description": "Tech2Globe provide website design and development services by using content management System services. We have a team of web developers experts for WordPress, Joomla & more.",
			"keywords": "what is content managemant system, content management system for webiste,Content Management System Services,CMS Services,Content management system."

		},
		"web-application-development": {
			"pagetitle": "Web Application Development services | Web App development company",
			"description": "Tech2Globe offers web application development services. Our development team build powerful web applications with scalable features & process to full-fill key challenge.",
			"keywords": "Web Application Development,web app development,software development, open source development, nopcommerce development,oscommerce development.web design company, Web Application Development, Web Application Development services, Web app development company, Software development, Open source development, nopcommerce development, Oscommerce development.web design company ",
			"Ogtitles": "Web Application Development services | Web App development company",
            "Ognames": "",
            "Ogdescriptions": "Tech2Globe offers web application development services. Our development team build powerful web applications with scalable features & process to full-fill key challenge",
            "twittercard": "Web Application Development services | Web App development company", 
			 "twitterdescription": "Tech2Globe offers web application development services. Our development team build powerful web applications with scalable features & process to full-fill key challenge",
            "canonical_url":"https://tech2globe.com/web-application-development"
		},
		"mailchimp-template-design": {
			"pagetitle": "Mailchimp Template Design & Development Service | Mailchimp Email Template Design",
			"description": "Tech2Globe Provides Mailchimp Template Design & Development Service to worldwide. Responsive email Design and custom template creation to match your website and keep you branding consistent. We have created hundreds of custom MailChimp templates.",
			"keywords": "custom Mailchimp Template, Mailchimp Template, Mailchimp Template Design, Mailchimp Template Development, mailchimp email services."
		},

		"search-engine-optimization": {
			"pagetitle": "India  Most Trusted SEO Services Agency | SEO Company - Tech2globe",
			"description": "Achieve #1 rankings with Tech2globe - Best SEO Agecny in India. Our seo company offer powerful SEO services that drive clicks, quality organic traffic, enquires, and sales. Call Now for Top of Google rankings.",
			"keywords": "SEO India, SEO Company India, SEO Services India, SEO India Firm, SEO Services, SEO Packages, SEO Agency India, SEO Expert India, SEO Consultant India.",
			"Ogtitles": "India Most Trusted SEO Services Agency | SEO Company - Tech2globe",
            "Ognames": "",
            "Ogdescriptions": "Achieve #1 rankings with Tech2globe - Best SEO Agecny in India. Our seo company offer powerful SEO services that drive clicks, quality organic traffic, enquires, and sales. Call Now for Top of Google rankings.",
            "twittercard": "India Most Trusted SEO Services Agency | SEO Company - Tech2globe", 
			 "twitterdescription": "Achieve #1 rankings with Tech2globe - Best SEO Agecny in India. Our seo company offer powerful SEO services that drive clicks, quality organic traffic, enquires, and sales. Call Now for Top of Google rankings.",
            "canonical_url":"https://tech2globe.com/search-engine-optimization"
		},
		"seo-services": {
			"pagetitle": "SEO services | SEO services Delhi | SEO services India | Tech2Globe",
			"description": "Tech2globe offers SEO Services Delhi, we have a well-qualified & experienced SEO expert that will improve your site ranking & also helps in generating more organic traffic",
			"keywords": "SEO India, SEO Company India, SEO Services India, SEO India Firm, SEO Services, SEO Packages, SEO Agency India, SEO Expert India, SEO Consultant India.",
			"Ogtitles": "SEO services | SEO services Delhi | SEO services India | Tech2Globe",
            "Ognames": "Tech2Globe Web Solutions LLP",
            "Ogdescriptions": "Tech2globe offers SEO Services Delhi, we have a well-qualified & experienced SEO expert that will improve your site ranking & also helps in generating more organic traffic",
            "twittercard": "SEO services | SEO services Delhi | SEO services India | Tech2Globe", 
			"twitterdescription": "Tech2globe offers SEO Services Delhi, we have a well-qualified & experienced SEO expert that will improve your site ranking & also helps in generating more organic traffic",
            "canonical_url":"https://tech2globe.com/seo-services"
		},
		
		
		
		
		
		"local-listings-services": {
			"pagetitle": "Tech2globe-Local Listings Services",
			"description": "",
			"keywords": ""
		},

		"social-media-marketing-services": {
			"pagetitle": "Social Media Marketing Services | Social Media Marketing Agency",
			"description": "Want to get more lead through SMM services? Tech2Globe offers social media marketing services provide value that attracts, engages, &amp; converts your prospects into customers.",
			"keywords": "social media marketing agency, social media marketing services in india, social media marketing services in delhi, social media marketing services company, social media services"
		},

		"online-business-management-ebay-in": {
			"pagetitle": "eBay Product Listing Services | eBay Product Upload Services | eBay Data Entry Services ",
			"description": "Tech2globe provide best quality services on eBay like product listing, inventory management and product upload. we have skilled team with good experience.",
			"keywords": "E bay bulk listing, e bay store listing, eBay Product Listing Services, eBay Product Data Entry Services, Outsource eBay Listing Services"
		},


		"e-books-conversion": {
			"pagetitle": "eBooks Conversion | eBooks Conversion Services | eBooks Conversion Services India | Tech2Globe",
			"description": "Tech2Globe, eBook Conversion Services can help you to turn your files into an eye-catching ebook in no time. We can develop ebooks for ipad, iphone, Nook, PC-Based readers and more",
			"keywords": "ebook conversion, ebook conversion india,ebook conversion services, epub conversion, pdf conversion services, ebook conversion, ebook file conversion"
		},"epub-epub3-conversion": {
			"pagetitle": "ePub / ePub3 Conversion",
			"description": "",
			"keywords": ""
		},
		"fixed-layout-epub-conversion": {
			"pagetitle": "Fixed Layout ePub Conversion",
			"description": "",
			"keywords": ""
		},
		"read-aloud-epub-conversion": {
			"pagetitle": "Read Aloud ePub Conversion",
			"description": "",
			"keywords": ""
		},
		"enhanced-epub-conversion": {
			"pagetitle": "Enhanced ePub Conversion",
			"description": "",
			"keywords": ""
		},
		"kf8-conversion": {
			"pagetitle": "KF8 Conversion",
			"description": "",
			"keywords": ""
		},
		"nook-fixed-layout-format-conversion": {
			"pagetitle": "Nook Fixed Layout Format Conversion",
			"description": "",
			"keywords": ""
		},
		"mobipocket-kindle-conversion": {
			"pagetitle": "MobiPocket (Kindle) Conversion",
			"description": "",
			"keywords": ""
		},

		"mobile-apps": {
			"pagetitle": "Mobile Apps",
			"description": "",
			"keywords": ""
		},"mobile-application-development-services": {
			"pagetitle": "Mobile App Development services | Mobile Apps Development Company",
			"description": "Tech2globe is a Mobile App Development Company in India working for brands across the globe. We provides topnotch, savvy, money making mobile apps for your business.",
			"keywords": "mobile app development company, mobile app development services, mobile app development services, mobile app development company in india"
		},
		"windows-application-development-services": {
			"pagetitle": "Windows Development Services | Windows App Development services",
			"description": "Tech2Globe offers Windows App Development services by best phone developers. We are known for providing secure and results-driven Windows Phone Apps Development solutions.",
			"keywords": "windows mobile app development, windows phone application development company,  windows mobile app developer,  Windows App Development services.",
			"Ogtitles": "Windows Development Services | Windows App Development services",
            "Ognames": "",
            "Ogdescriptions": "Tech2Globe offers Windows App Development services by best phone developers. We are known for providing secure and results-driven Windows Phone Apps Development solutions",
            "twittercard": "Windows Development Services | Windows App Development services", 
			 "twitterdescription": "Tech2Globe offers Windows App Development services by best phone developers. We are known for providing secure and results-driven Windows Phone Apps Development solutions",
            "canonical_url":"https://tech2globe.com/windows-application-development-services"
		},

		"phonegap-development-services": {
			"pagetitle": "PhoneGap App Development Services | PhoneGap App Development Company",
			"description": "Tech2Globe is phoneGap app Development Company. We Design & build customer-engaging apps for insurance, ecommerce, retail, or banking that will achieve your business goals.",
			"keywords": "Phone gap app development, phone gap app development services, phone gap mobile app development, PhoneGap App Development Company",
			"Ogtitles": "PhoneGap App Development Services | PhoneGap App Development Company",
            "Ognames": "",
            "Ogdescriptions": "Tech2Globe is phoneGap app Development Company. We Design & build customer-engaging apps for insurance, ecommerce, retail, or banking that will achieve your business goals.",
            "twittercard": "PhoneGap App Development Services | PhoneGap App Development Company", 
			 "twitterdescription": "Tech2Globe is phoneGap app Development Company. We Design & build customer-engaging apps for insurance, ecommerce, retail, or banking that will achieve your business goals.",
            "canonical_url":"https://tech2globe.com/phonegap-development-services"
		},
		"ruby-on-rails-development": {
			"pagetitle": "Ruby on Rails Development Company | RoR Development Agency -Tech2globe",
			"description": "Hire Rails programmers at Tech2globe to get flexible and robust web application for business development and growth. Our RoR developers can create a powerful web application for your business boost and growth in several days using standard tools of Rails programming.",
			"keywords": "Ruby on Rails Development Company, RoR Development Agency, Ruby on Rails Development Services, Ruby on Rails Development Agency",
			"Ogtitles": "Ruby on Rails Development Company | RoR Development Agency -Tech2globe",
            "Ognames": "",
            "Ogdescriptions": "Hire Rails programmers at Tech2globe to get flexible and robust web application for business development and growth. Our RoR developers can create a powerful web application for your business boost and growth in several days using standard tools of Rails programming.",
            "twittercard": "Ruby on Rails Development Company | RoR Development Agency -Tech2globe", 
			 "twitterdescription": "Hire Rails programmers at Tech2globe to get flexible and robust web application for business development and growth. Our RoR developers can create a powerful web application for your business boost and growth in several days using standard tools of Rails programming.",
            "canonical_url":"https://tech2globe.com/ruby-on-rails-development"
		
		},"email-marketing-services": {
			"pagetitle": "Email Marketing services | Email Marketing service provider",
			"description": "Tech2globe is the best email marketing service provider which can help you to reach a wide audience in a short period of time &amp; allows recipients to act immediately.",
			"keywords": "Email Marketing services, Email Marketing service provider, Email Marketing services India, Email Marketing services Delhi",
			"Ogtitles": "Email Marketing services | Email Marketing service provider",
            "Ognames": "",
            "Ogdescriptions": "Tech2globe is the best email marketing service provider which can help you to reach a wide audience in a short period of time & allows recipients to act immediately.",
            "twittercard": "Email Marketing services | Email Marketing service provider", 
			 "twitterdescription": "Tech2globe is the best email marketing service provider which can help you to reach a wide audience in a short period of time & allows recipients to act immediately.",
            "canonical_url":"https://tech2globe.com/email-marketing-services"
		},


		"data-processing-services": {
			"pagetitle": "Data Processing Services | Tech2Globe: Simplifying Your Data Management",
			"description": "Improve your business operations with data processing services, Automated data analysis services Maximize productivity with expert data processing solutions. ",
			"keywords": "Data processing services, Outsource data processing services, Data processing experts.",
			"Ogtitles": "Data Processing Services | Tech2Globe: Simplifying Your Data Management",
            "Ognames": "",
            "Ogdescriptions": "Improve your business operations with data processing services, Automated data analysis services Maximize productivity with expert data processing solutions.",
            "twittercard": "Data Processing Services | Tech2Globe: Simplifying Your Data Management", 
			 "twitterdescription": "Improve your business operations with data processing services, Automated data analysis services Maximize productivity with expert data processing solutions.",
            "canonical_url":"https://tech2globe.com/data-processing-services"

		},
		"catalog-management-services": {
			"pagetitle": "ECommerce Catalog Management Services | Content Management Company",
			"description": "Tech2Globe delivers ecommerce catalog management services in time. We offer catalog management and brochure design services and more for eCommerce and retail businesses. Consult with us today.",
			"keywords": "ecommerce catalog management services, catalog management services, brochure design, brochure design company, brochure design service, catalogue design, professional brochure design, logo design company, catalog management services India.",
			"Ogtitles": "ECommerce Catalog Management Services | Content Management Company",
            "Ognames": "",
            "Ogdescriptions": "Tech2Globe delivers ecommerce catalog management services in time. We offer catalog management and brochure design services and more for eCommerce and retail businesses. Consult with us today.",
            "twittercard": "ECommerce Catalog Management Services | Content Management Company", 
			 "twitterdescription": "Tech2Globe delivers ecommerce catalog management services in time. We offer catalog management and brochure design services and more for eCommerce and retail businesses. Consult with us today.",
            "canonical_url":"https://tech2globe.com/catalog-management-services"
		},
		"amazon-ebay-marketplace-services": {
			"pagetitle": "Amazon Ebay Marketplace Services | Amazon Ebay Web Services - Tech2Globe",
			"description": "",
			"keywords": ""
		},
		"data-entry-services": {
			"pagetitle": "Boost Productivity with Efficient Data Entry Services | Tech2Globe",
			"description": "Looking for reliable data entry and data enrichment services? Get accurate and efficient solutions to manage and enhance your data. Contact us today!",
			"keywords": "Outsource Data Entry Services, Data Entry Outsourcing Company, Outsourcing Data Entry Services, Data Entry Services Outsourcing, Outsource Data Entry, Data Entry Outsourcing",
		   	"Ogtitles": "Boost Productivity with Efficient Data Entry Services | Tech2Globe",
			"Ognames": "Tech2Globe web Solutions LLP",
			"Ogdescriptions": "Looking for reliable data entry and data enrichment services? Get accurate and efficient solutions to manage and enhance your data. Contact us today!",
			"twittercard": "Tech2Globe", 
            "twittertitle": "Boost Productivity with Efficient Data Entry Services | Tech2Globe",
            "twitterdescription": "Looking for reliable data entry and data enrichment services? Get accurate and efficient solutions to manage and enhance your data. Contact us today!",
		   "canonical_url":"https://tech2globe.com/data-entry-services"
		},
		

		"data-mining-services": {
			"pagetitle": "Unlocking Insights: Data Mining Services | Tech2Globe",
			"description": "Discover valuable insights with professional data mining services offered by top data mining companies. Unlock hidden patterns and make informed decisions.",
			"Ogtitles" : "Unlocking Insights: Data Mining Services | Tech2Globe",
			"Ognames": "Tech2Globe web Solutions LLP",
			"Ogdescriptions": "Discover valuable insights with professional data mining services offered by top data mining companies. Unlock hidden patterns and make informed decisions.", 
            "twittercard": "Tech2Globe",  
			"keywords": "Top Data Mining Company | Outsource Data Mining Services - Tech2globe",
			"canonical_url":"https://tech2globe.com/data-mining-services"
		},
		"data-conversion-services": {
			"pagetitle": "Efficient Data Conversion Services | Tech2Globe",
			"description": "Looking for professional data conversion services? Outsource your data conversion needs to experts for accurate and efficient results. Contact us now!",
			"keywords": "Data Conversion Services, Outsource data conversion services, Data Conversion Services Company, Data conversion services providers, Data Conversion Specialists, Outsource conversion service provider company, Data conversion experts.",
		    "Ogtitles": "Efficient Data Conversion Services | Tech2Globe",
			"Ognames": "Tech2Globe web Solutions LLP",
			"Ogdescriptions": "Looking for professional data conversion services? Outsource your data conversion needs to experts for accurate and efficient results. Contact us now!",
			"twittercard": "Tech2Globe", 
            "twittertitle": "Efficient Data Conversion Services | Tech2Globe",
            "twitterdescription": "Looking for professional data conversion services? Outsource your data conversion needs to experts for accurate and efficient results. Contact us now!",
			"canonical_url":"https://www.tech2globe.com/data-conversion-services"
		},

		"indexing-services": {
			"pagetitle": "Outsource Indexing Services | Document Indexing Services | Tech2Globe",
			"description": "Tech2Globe is a trusted Outsourcing Company in India & our experts has delivered the best in class quality results for Document Indexing Services. Get in touch with us today.",
			"keywords": "Outsource indexing services, data indexing services, document indexing services, Book indexing services, professional indexing services",
			"Ogtitles": "Outsource Indexing Services | Document Indexing Services | Tech2Globe",
            "Ognames": "Tech2Globe is a trusted Outsourcing Company in India & our experts has delivered the best in class quality results for Document Indexing Services. Get in touch with us today.",
            "Ogdescriptions": "",
            "twittercard": "Outsource Indexing Services | Document Indexing Services | Tech2Globe", 
			 "twitterdescription": "Tech2Globe is a trusted Outsourcing Company in India & our experts has delivered the best in class quality results for Document Indexing Services. Get in touch with us today.",
            "canonical_url":"https://tech2globe.com/indexing-services"
		},
		"data-analytics-services": {
			"pagetitle": "Data analytics services | Big Data Services Providers | Tech2Globe",
			"description": "By Outsourcing Business Data Analytics Services with Tech2Globe you can beat all these difficulties at a reasonable cost & make a strong foundation for development.",
			"keywords": "Data analytic services provider, Data analytics experts, Data analytics support services, Big data analytics solutions",
			"Ogtitles": "Data analytics services | Big Data Services Providers | Tech2Globe",
            "Ognames": "Tech2Globe Web Solutions LLP",
            "Ogdescriptions": "By Outsourcing Business Data Analytics Services with Tech2Globe you can beat all these difficulties at a reasonable cost & make a strong foundation for development.",
            "twittercard": "Data Analytic Services Provider | Data Analytics Experts | Tech2Globe", 
			 "twitterdescription": "By Outsourcing Business Data Analytics Services with Tech2Globe you can beat all these difficulties at a reasonable cost & make a strong foundation for development.",
            "canonical_url":"https://tech2globe.com/data-analytics-services"
		},

		"order-processing-services": {
			"pagetitle": "Outsource Order Processing Services | Data Entry Order Processing",
			"description": "Tech2Globe offers start to finish eCommerce Order Processing Services. We are proficient at taking care of whole procedure of internet business order processing. Call us today.",
			"keywords": "Order Processing Services, outsource order processing services, outsourcing order processing services, Order Processing Services professionals, Order Processing Services Company, Data Entry Order Processing, eCommerce Order Processing Services, Order processing services India",
			"Ogtitles": "Outsource Order Processing Services | Data Entry Order Processing",
            "Ognames": "",
            "Ogdescriptions": "Tech2Globe offers start to finish eCommerce Order Processing Services. We are proficient at taking care of whole procedure of internet business order processing. Call us today.",
            "twittercard": "Outsource Order Processing Services | Data Entry Order Processing", 
			 "twitterdescription": "Tech2Globe offers start to finish eCommerce Order Processing Services. We are proficient at taking care of whole procedure of internet business order processing. Call us today.",
            "canonical_url":"https://tech2globe.com/order-processing-services"
		},

		"data-product-entry": {
			"pagetitle": "Data product entry services | Product data entry services | Tech2Globe",
			"description": "Outsource your Product Data Entry Services to the experts at Tech2Globe, provides a complete suite of data entry services. With a team that are skilled &amp; enhance the user experience.",
			"keywords": "ecommerce product data entry services, product data entry services, product data entry services india, magento product data entry services"
		},


		"post-processing-of-real-estate-images": {
			"pagetitle": "Real estate image editing services | Post processing of real estate images",
			"description": "Outsource your real estate photo editing, retouching and post-processing need to Tech2Globe a professional photo retouching service provider. ",
			"keywords": "real estate image editing, outsource real estate image editing, real estate post processing services, post processing of real estate images",
			"Ogtitles": "Real estate image editing services | Post processing of real estate images",
            "Ognames": "",
            "Ogdescriptions": "Outsource your real estate photo editing, retouching and post-processing need to Tech2Globe a professional photo retouching service provider. ",
            "twittercard": "Real estate image editing services | Post processing of real estate images", 
			 "twitterdescription": "Outsource your real estate photo editing, retouching and post-processing need to Tech2Globe a professional photo retouching service provider. ",
            "canonical_url":"https://tech2globe.com/post-processing-of-real-estate-images"
		},
		"photo-manipulation-services": {
			"pagetitle": "Image manipulation services | photo manipulation services | Tech2Globe",
			"description": "Tech2Globe offer Image manipulation services helps to add special effects in your photographs and turn its look ordinary into extraordinary.",
			"keywords": "image manipulation, photo manipulation services, outsource photo manipulation,  manipulation services",
			"Ogtitles": "Image manipulation services | photo manipulation services | Tech2Globe",
            "Ognames": "",
            "Ogdescriptions": "Tech2Globe offer Image manipulation services helps to add special effects in your photographs and turn its look ordinary into extraordinary.",
            "twittercard": "Image manipulation services | photo manipulation services | Tech2Globe", 
			 "twitterdescription": "Tech2Globe offer Image manipulation services helps to add special effects in your photographs and turn its look ordinary into extraordinary.",
            "canonical_url":"https://tech2globe.com/photo-manipulation-services"
		},
		"image-clipping-services": {
			"pagetitle": "Outsource image clipping services | Image clipping service | Tech2Globe",
			"description": "An outsourcing company providing clipping services, image masking, image retouching. We offer photo editing and retouching services with best price guarantee.",
			"keywords": "clipping path, image clipping, photo retouching services,  photo editing services,  outsource image clipping services",
			"Ogtitles": "Outsource image clipping services | Image clipping service | Tech2Globe",
            "Ognames": "",
            "Ogdescriptions": "An outsourcing company providing clipping services, image masking, image retouching. We offer photo editing and retouching services with best price guarantee.",
            "twittercard": "Outsource image clipping services | Image clipping service | Tech2Globe", 
			 "twitterdescription": "An outsourcing company providing clipping services, image masking, image retouching. We offer photo editing and retouching services with best price guarantee.",
            "canonical_url":"https://tech2globe.com/image-clipping-services"
		},
		"photo-enhancement-services": {
			"pagetitle": "Outsource photo enhancement services | Photo enhancement services",
			"description": "A leading photo enhancing outsourcing company from India expertise in quality picture enhancement, photographs enhancement, Image Enhancement outsourcing Services.",
			"keywords": "photo editing, image editing, photo enhancement, photo enhancement services, outsource image enhancement services",
			"Ogtitles": "Outsource photo enhancement services | Photo enhancement services",
            "Ognames": "",
            "Ogdescriptions": "A leading photo enhancing outsourcing company from India expertise in quality picture enhancement, photographs enhancement, Image Enhancement outsourcing Services",
            "twittercard": "Outsource photo enhancement services | Photo enhancement services", 
			 "twitterdescription": "A leading photo enhancing outsourcing company from India expertise in quality picture enhancement, photographs enhancement, Image Enhancement outsourcing Services",
            "canonical_url":"https://tech2globe.com/photo-enhancement-services"
		},
		"photoshop-Image-Masking-Service": {
			"pagetitle": "Outsource photo masking process | Image masking services | Tech2Globe",
			"description": "Outsource image masking services to Tech2Globe and get access to expert image masking, and Photoshop image masking. We provide high-quality image editing with the latest masking techniques and tools.",
			"keywords": "image masking services, image masking process, photo shop masking services, masking photos",
			"Ogtitles": "Outsource photo masking process | Image masking services | Tech2Globe",
            "Ognames": "",
            "Ogdescriptions": "Outsource image masking services to Tech2Globe and get access to expert image masking, and Photoshop image masking. We provide high-quality image editing with the latest masking techniques and tools.",
            "twittercard": "Outsource photo masking process | Image masking services | Tech2Globe", 
			 "twitterdescription": "Outsource image masking services to Tech2Globe and get access to expert image masking, and Photoshop image masking. We provide high-quality image editing with the latest masking techniques and tools.",
            "canonical_url":"https://tech2globe.com/photoshop-Image-Masking-Service"
		},"e-commerce-solutions": {
			"pagetitle": "E-Commerce Solutions",
			"description": "",
			"keywords": ""
		},
		"ecommerce-website-development": {
			"pagetitle": "eCommerce Website Design & Development | eCommerce Website India - Tech2Globe",
			"description": "",
			"keywords": ""
		},
		"magento-product-upload-services": {
			"pagetitle": "Magento product upload Services | Magento product listing services",
			"description": "Tech2Globe provide a complete range of magento product upload services including magento data entry, magento product listing and magento bulk product upload. We are comfortable with all source formats",
			"keywords": "magento product entry, magento data entry, magento product image upload, magento product data entry services, magento bulk product upload, outsource magento product entry,Magento Product Upload, Magento Product Upload Services, Magento Product Listing, Magento Product Listing Services",
			"Ogtitles": "Magento product upload Services | Magento product listing services",
			"Ognames": "Tech2Globe Web Solutions",
			"Ogurl":"https://tech2globe.com/magento-product-upload-services",
			"Ogdescriptions":"Tech2Globe provide a complete range of magento product upload services including   magento data entry, magento product listing and magento bulk product upload. We are comfortable with all source formats",
			"Ogimage":"https://tech2globe.com/images/services/magentoproductUpload.jpg",
			"twittercard":"Magento product upload Services | Magento product listing services",
			"twittertitle":"Magento product upload Services | Magento product listing services",
			"twitterdescription":"Tech2Globe provide a complete range of magento product upload services including   magento data entry, magento product listing and magento bulk product upload. We are comfortable with all source formats",
			"twitterimage":"https://tech2globe.com/images/services/magentoproductUpload.jpg",
			"canonical_url":"https://tech2globe.com/magento-product-upload-services"
			},
		
		
		"magento-development": {
			"pagetitle": "Magento Development Services | Magento Development company",
			"description": "Tech2globe offers customized Magento development services at affordable rates. Our motto is to provide our customers with robust storefront models.100% Authentic services",
			"keywords": "Magento Development Services, Magento Development company,  Magento Custom Development, Magento eCommerce Development"
		},"oscommerce-development": {
			"pagetitle": "osCommerce Development Services Company  Oscommerce Module Themes Template Design  Development Developer India",
			"description": "Tech2Globe osCommerce Development Services Company. We offer osCommerce module, themes & template design & development services to global. Please visit for more details Tech2Globe.com",
			"keywords": "osCommerce Development, oscommerce development services,oscommerce development services india,osCommerce module,themes design, template design,Oscommerce developers india,Oscommerce developer"
		},"3dcart-development": {
			"pagetitle": "3Dcart Development | 3Dcart Custom Theme Development Tech2Globe",
			"description": "Tech2Globe is an experienced 3d cart development company delivering extensive range of 3d cart development services at an unbeatable prices. Contact Us: info@tech2globe.com",
			"keywords": "3dcart Website Design, 3dcart Development Services, 3dcart mCommerce Design, 3dcart Store Design, 3dcart Store Development, Custom 3dcart Development, 3dcart Template Design, 3dcart custom programming, 3dcart ecommerce development, 3dcart Web Design, 3dcart Web Development, 3dcart Development Company, 3dcart Extension Development, 3dcart Theme Development, 3dcart Plugin Development"
		},

		"ebay-store-design-services": {
			"pagetitle": "Professional EBay Store Design services at Tech2globe ",
			"description": "Tech2Globe offers best eBay Store Design & eBay Custom Store Design services. We have an experienced management system to maximize and boost your sales and make your product stand out",
			"keywords": "ebay store and listing design, ebay custom store design,Professional EBay Store Design services",
			"Ogtitles": "Professional EBay Store Design services at Tech2globe ",
            "Ognames": "",
            "Ogdescriptions": "Tech2Globe offers best eBay Store Design & eBay Custom Store Design services. We have an experienced management system to maximize and boost your sales and make your product stand out",
            "twittercard": "Professional EBay Store Design services at Tech2globe ", 
			 "twitterdescription": "Tech2Globe offers best eBay Store Design & eBay Custom Store Design services. We have an experienced management system to maximize and boost your sales and make your product stand out",
            "canonical_url":"https://tech2globe.com/ebay-store-design-services"
		},
		"e-commerce-support": {
			"pagetitle": "E Commerce Support",
			"description": "",
			"keywords": ""
		},
		"Joomla-development": {
			"pagetitle": "Joomla CMS Development Services | Joomla Web development Company",
			"description": "Tech2Globe is a leading Joomla web-development company in India. Our joomla theming services contain creating new themes, customizing theme, theme modification and more.  ",
			"keywords": "Joomla CMS Development, Joomla Web Development Company, Joomla Development Services, Joomla Solutions, Custom Joomla Web Development Services, Joomla Development Company India, Joomla Website Design.",
			"Ogtitles": "Joomla CMS Development Services | Joomla Web development Company",
            "Ognames": "",
            "Ogdescriptions": "Tech2Globe is a leading Joomla web-development company in India. Our joomla theming services contain creating new themes, customizing theme, theme modification and more.",
            "twittercard": "Joomla CMS Development Services | Joomla Web development Company", 
			 "twitterdescription": "Tech2Globe is a leading Joomla web-development company in India. Our joomla theming services contain creating new themes, customizing theme, theme modification and more.",
            "canonical_url":"https://tech2globe.com/Joomla-development"
		},
		"hire-dedicated-resources": {
			"pagetitle": "Hire Dedicated Developers & Resources, IT Professionals Tech2Globe",
			"description": "Tech2Globe is worldwide software Development Company. hire dedicated resources, IT Professionals. Specializes in Custom Software Offshore Outsourcing Product Development, engaging 150 highly experienced professionals for your software development.",
			"keywords": "hire dedicated resources, hire IT Professionals, software development company, application development outsourcing, application development company, custom software development"
		},
		"drupal-development": {
			"pagetitle": "Drupal Development Services | Drupal Development Company | Tech2globe",
			"description": "Get professional Drupal development services such as Drupal web development, theme customization and design & more. We make your website stand out so ‘you’ll best outcome.",
			"keywords": "Drupal Development Services, Drupal Development Company, Drupal Theme Developers, Drupal Web Development Services, Professional Drupal Design Services, Drupal theme design and development ",
			"Ogtitles": "Drupal Development Services | Drupal Development Company | Tech2globe",
            "Ognames": "",
            "Ogdescriptions": "Get professional Drupal development services such as Drupal web development, theme customization and design & more. We make your website stand out so ‘you’ll best outcome.",
            "twittercard": "Drupal Development Services | Drupal Development Company | Tech2globe", 
			 "twitterdescription": "Get professional Drupal development services such as Drupal web development, theme customization and design & more. We make your website stand out so ‘you’ll best outcome.",
            "canonical_url":"https://tech2globe.com/drupal-development"
		},
		
		"wordpress-development": {
           "pagetitle": "How to Become a WordPress Developer in 2023 | Tech2globe",
            "description": "Learn what a WordPress developer is and does, and how to become one. Then explore the two major areas of development: plugin and theme development.",
            "Ogtitles": "How to Become a WordPress Developer in 2023 | Tech2globe",
            "Ognames": "Tech2Globe web Solutions LLP",
             "Ogdescriptions": "Learn what a WordPress developer is and does, and how to become one. Then explore the two major areas of development: plugin and theme development.",
            "twittercard": "How to Become a WordPress Developer in 2023 | Tech2globe", 
            "twittertitle": "How to Become a WordPress Developer in 2023 | Tech2globe",
            "twitterdescription": "Learn what a WordPress developer is and does, and how to become one. Then explore the two major areas of development: plugin and theme development.",
             "canonical_url":"https://tech2globe.com/wordpress-development"			
		},
		"prestashop-development": {
			"pagetitle": "Prestashop Development Tech2Globe",
			"description": "",
			"keywords": "WordPress Website Development Services, WordPress Development Company, Wordpress Website Design, Wordpress Development, Wordpress Development Company India, Custom WordPress Website Design"
		},


		"regression-testing-services": {
			"pagetitle": "Regression Testing Services",
			"description": "",
			"keywords": ""
		},
		"software-configuration-testing-services": {
			"pagetitle": "Software Configuration Testing Services",
			"description": "",
			"keywords": ""
		},

		"selenium-testing-services": {
			"pagetitle": "Selenium Testing Services",
			"description": "",
			"keywords": ""
		},
		"sitemap": {
			"pagetitle": "Site Map",
			"description": "",
			"keywords": ""
		},
		"backbone-js-web-development": {
			"pagetitle": "Backbone Js Web Development services | Backbone Js Development ",
			"description": "Tech2Globe offers Backbone Js Web Development services, our experts ensures that customers receives top quality and lucrative applications. Discuss your project today.",
			"keywords": "Backbone Js Web Development services, Backbone Js Development Company, Backbone.JS Web and App Development, Outsource Backbone.js Web Development"
		},
		"angularjs-development": {
			"pagetitle": "Angular JS Development services | Angular JS Developers | Tech2Globe",
			"description": "With hands on experience, Tech2Globe can provides best angular JS development services for all angular web applications at affordable price. Contact us today.",
			"keywords": "Angular JS Development services, Angular JS Developers, Angular JS Development Company India, Hire AngularJS Developers, Angularjs Development Services Provider Company, Angular JS Development Company"
		},
		"zend-framework-development": {
			"pagetitle": "Zend Framework Development",
			"description": "",
			"keywords": ""

		},
		"yii-custom-web-development": {
			"pagetitle": "Yii Custom Web Development",
			"description": "",
			"keywords": ""
		},
		"symfony-web-development": {
			"pagetitle": "Symfony Web Development",
			"description": "",
			"keywords": ""
		},
		"responsive-web-design": {
			"pagetitle": "Responsive Web Design Services | Web Design Company | Tech2Globe",
			"description": "Get compatible responsive web design services. Our experts having great experience in java, CSS, HTML etc. & making the website fully responsive and easy to use.",
			"keywords": "Responsive web design services, Web Design Company, Responsive Website Design and Development Services, Best web design services "
		},

		"codeigniter-development": {
			"pagetitle": "Codeigniter Development",
			"description": "",
			"keywords": ""
		},
		"blog": {
			"pagetitle": "Tech2Globe blog",
			"description": "",
			"keywords": ""
		},
		"data-entry-blog": {
			"pagetitle": "Data Entry Blog",
			"description": "",
			"keywords": ""
		},
		"data-management-blog": {
			"pagetitle": "Data Management Blog",
			"description": "",
			"keywords": ""
		},
		"magento-development-blog": {
			"pagetitle": "Magento Development Blog",
			"description": "",
			"keywords": ""
		},
		"nopcommerce-blog": {
			"pagetitle": "Nopcommerce Blog",
			"description": "",
			"keywords": ""
		},
		"seo-specialists-blog": {
			"pagetitle": "Seo Specialists Blog",
			"description": "",
			"keywords": ""
		},

		"nop_plugins": {
			"pagetitle": "nopCommerce Plugins",
			"description": "",
			"keywords": ""
		},
		"extensions-themes": {
			"pagetitle": "nopCommerce Themes",
			"description": "",
			"keywords": "" 
		},
		"restaurant-menu-entry-services": {
			"pagetitle": "Restaurant Menu Entry Services | Tech2Globe: Simplify Your Operations",
			"description": "Get professional restaurant menu entry services for accurate and efficient restaurant menu data entry. Experience hassle-free restaurant menu digitization.",
			"keywords": "Outsource restaurant menu entry services, Data entry for restaurant menu, Restaurant menu entry services India, Restaurant menu entry service provider, Menu data entry for restaurant, outsource restaurant menu entry services, outsource restaurant menu data entry services, restaurant menu entry, restaurant menu, data entry",
			"Ogtitles": "Restaurant Menu Entry Services | Tech2Globe: Simplify Your Operations",
            "Ognames": "",
            "Ogdescriptions": "Get professional restaurant menu entry services for accurate and efficient restaurant menu data entry. Experience hassle-free restaurant menu digitization.",
            "twittercard": "Restaurant Menu Entry Services | Tech2Globe: Simplify Your Operations", 
			 "twitterdescription": "Get professional restaurant menu entry services for accurate and efficient restaurant menu data entry. Experience hassle-free restaurant menu digitization.",
            "canonical_url":"https://tech2globe.com/restaurant-menu-entry-services"
		},
		"financial-data-entry-services": {
			"pagetitle": "Financial data entry service provider",
			"description": "We at Tech2Globe provide valid financial data entry services to business worldwide. Our financial data entry service help banks/institutes and accounting professionals.",
			"keywords": "finance data entry, financial data entry service provider, financial data entry services, financial data entry outsourcing, data entry services finance"
		},
		"sharePoint-web-development-services": {
			"pagetitle": "Sharepoint Development Services | Sharepoint Development Company",
			"description": "Tech2Globe is top leading Sharepoint Development Company & our experts provide SharePoint development services to his customers with feature-rich SharePoint applications.",
			"keywords": "SharePoint Development, Custom SharePoint Development Company, Hire SharePoint developers, SharePoint Web Parts, Offshore SharePoint Company India, SharePoint Outsourcing India, SharePoint application development services, SharePoint application maintenance, SharePoint Development Company, Migration to SharePoint 2010, SharePoint Consultancy, SharePoint Integration, Sharepoint Web Development Services, Sharepoint Development Company",
			"Ogtitles": "Professional Translation Services – French, German, Spanish & More",
            "Ognames": "",
            "Ogdescriptions": "Tech2globe - Translation Company in India. We have a tendency to work as a superior language services provider in all major global languages like French, Spanish, & German.",
            "twittercard": "Professional Translation Services – French, German, Spanish & More", 
			 "twitterdescription": "Tech2globe - Translation Company in India. We have a tendency to work as a superior language services provider in all major global languages like French, Spanish, & German.",
            "canonical_url":"https://tech2globe.com/translation-services"
		},
		"translation-services": {
			"pagetitle": "Professional Translation Services | Translation Services - Tech2globe",
			"description": "Tech2globe - Translation Company in India. We have a tendency to work as a superior language services provider in all major global languages like French, Spanish, & German and more.",
			"keywords": "translation, translation services, language translation, native translation, translation solution, outsourcing translation, offshore translation, human translation",
	        "Ognames": "Tech2Globe Web Solutions LLP",
            "Ogdescriptions": "Tech2globe - Translation Company in India. We have a tendency to work as a superior language services provider in all major global languages like French, Spanish, & German and more.",
            "twittercard": "Professional Translation Services | Translation Services - Tech2globe", 
			 "twitterdescription": "Tech2globe - Translation Company in India. We have a tendency to work as a superior language services provider in all major global languages like French, Spanish, & German and more.",
            "canonical_url":"https://tech2globe.com/translation-services"		
		},


		"web-development": {
			"pagetitle": "Best Web Development | tech2globe",
			"description": "Web development refers to building and maintaining websites. It includes web design, web publishing, web programming, and database management.",
			"keywords": "Best Web Development | tech2globe",
			"Ogtitles": "Best Web Development | tech2globe",
            "Ognames": "Tech2Globe Web Solutions LLP",
            "Ogdescriptions": "Web development refers to building and maintaining websites. It includes web design, web publishing, web programming, and database management.",
            "twittercard": "Best Web Development | tech2globe", 
			 "twitterdescription": "Web development refers to building and maintaining websites. It includes web design, web publishing, web programming, and database management.",
            "canonical_url":"https://tech2globe.com/web-development"	
		},











		"financial-accounting-services": {
			"pagetitle": "Finance and Accounting Outsourcing Services | Tech2globe ",
			"description": "Infosys BPM accounting and finance outsourcing services help leaders transform and operate finance functions digitally. Know how we add value with f&a services.",
			"keywords": "Finance and Accounting Outsourcing Services | Tech2globe ",
	        "Ognames": "Tech2Globe Web Solutions LLP",
            "Ogdescriptions": "Infosys BPM accounting and finance outsourcing services help leaders transform and operate finance functions digitally. Know how we add value with f&a services.",
            "twittercard": "Finance and Accounting Outsourcing Services | Tech2globe ", 
			 "twitterdescription": "Infosys BPM accounting and finance outsourcing services help leaders transform and operate finance functions digitally. Know how we add value with f&a services.",
            "canonical_url":"https://tech2globe.com/financial-accounting-services"		
		},


		"bookkeeping-services": {
			"pagetitle": "Bookkeeping Services - Advantages, Types, Procedure | Tech2globe ",
			"description": "Bookkeeping is a lengthy and diversified process, and it is very difficult for a businessperson to comply with the all the requirement and get it done by themselves.",
			"keywords": "Bookkeeping Services - Advantages, Types, Procedure | Tech2globe ",
			"Ogtitles": "Bookkeeping Services - Advantages, Types, Procedure | Tech2globe ",
            "Ognames": "Tech2Globe Web Solutions LLP",
            "Ogdescriptions": "Bookkeeping is a lengthy and diversified process, and it is very difficult for a businessperson to comply with the all the requirement and get it done by themselves.",
            "twittercard": "Bookkeeping Services - Advantages, Types, Procedure | Tech2globe ", 
			 "twitterdescription": "Bookkeeping is a lengthy and diversified process, and it is very difficult for a businessperson to comply with the all the requirement and get it done by themselves.",
            "canonical_url":"https://tech2globe.com/bookkeeping-services"	
		},


		"accounting-services": {
			"pagetitle": "Accounting Services | Accounting Services | Tech2globe ",
			"description": "Tech2globe accounting service provides the support, objectivity and expertise businesses need to succeed within the context of an ever-changing business landscape.",
			"keywords": "Accounting Services | Accounting Services | Tech2globe ",
			"Ogtitles": "Accounting Services | Accounting Services | Tech2globe ",
            "Ognames": "Tech2Globe Web Solutions LLP",
            "Ogdescriptions": "Tech2globe accounting service provides the support, objectivity and expertise businesses need to succeed within the context of an ever-changing business landscape.",
            "twittercard": "Accounting Services | Accounting Services | Tech2globe ", 
			 "twitterdescription": "Tech2globe accounting service provides the support, objectivity and expertise businesses need to succeed within the context of an ever-changing business landscape.",
            "canonical_url":"https://tech2globe.com/accounting-services"	
		},

		"tax-preparation": {
			"pagetitle": "Best Tax Preparation Services of 2023 | Tech2globe ",
			"description": "The best services will take the complexity out of doing your taxes. We rounded up the best tax preparation services based on cost, convenience, and more.",
			"keywords": "Accounting Services | Accounting Services | Tech2globe ",
			"Ogtitles": "Best Tax Preparation Services of 2023 | Tech2globe ",
            "Ognames": "Tech2Globe Web Solutions LLP",
            "Ogdescriptions": "The best services will take the complexity out of doing your taxes. We rounded up the best tax preparation services based on cost, convenience, and more.",
            "twittercard": "Best Tax Preparation Services of 2023 | Tech2globe ", 
			 "twitterdescription": "The best services will take the complexity out of doing your taxes. We rounded up the best tax preparation services based on cost, convenience, and more.",
            "canonical_url":"https://tech2globe.com/tax-preparation"	
		},

		"financial-analysis-services": {
			"pagetitle": "Financial Analysis Services | Tech2globe ",
			"description": "Our financial analysis services will help you thoroughly analyze your financial data so you get valuable insights to drive business growth. Contact us now!",
			"keywords": "Accounting Services | Accounting Services | Tech2globe ",
			"Ogtitles": "Financial Analysis Services | Tech2globe ",
            "Ognames": "Tech2Globe Web Solutions LLP",
            "Ogdescriptions": "Our financial analysis services will help you thoroughly analyze your financial data so you get valuable insights to drive business growth. Contact us now!",
            "twittercard": "Financial Analysis Services | Tech2globe ", 
			 "twitterdescription": "Our financial analysis services will help you thoroughly analyze your financial data so you get valuable insights to drive business growth. Contact us now!",
            "canonical_url":"https://tech2globe.com/financial-analysis-services"	
		},

		"payroll-processing-services": {
			"pagetitle": "Payroll Processing Services | Tech2globe ",
			"description": "We provide payroll processing for your business to simplify complex tasks and help you save time and money.",
			"keywords": "Accounting Services | Accounting Services | Tech2globe ",
			"Ogtitles": "Payroll Processing Services | Tech2globe ",
            "Ognames": "Tech2Globe Web Solutions LLP",
            "Ogdescriptions": "We provide payroll processing for your business to simplify complex tasks and help you save time and money.",
            "twittercard": "Payroll Processing Services | Tech2globe ", 
			 "twitterdescription": "We provide payroll processing for your business to simplify complex tasks and help you save time and money.",
            "canonical_url":"https://tech2globe.com/payroll-processing-services"	
		},


		"accounting-software": {
			"pagetitle": "Best Accounting Software Services | tech2globe  ",
			"description": "To help you choose the right business accounting software services for your company, we have identified the best in each class.",
			"keywords": "Accounting Services | Accounting Services | Tech2globe ",
			"Ogtitles": "Best Accounting Software Services | tech2globe ",
            "Ognames": "Tech2Globe Web Solutions LLP",
            "Ogdescriptions": "To help you choose the right business accounting software services for your company, we have identified the best in each class.",
            "twittercard": "Best Accounting Software Services | tech2globe ", 
			 "twitterdescription": "To help you choose the right business accounting software services for your company, we have identified the best in each class.",
            "canonical_url":"https://tech2globe.com/accounting-software"	
		},

		"bulk-product-upload-services": {
			"pagetitle": "Bulk Product Upload Services | Ecommerce Bulk Product Upload Services ",
			"description": "Bulk Product Upload Services from Tech2Globe is your definitive answer for be saved from problems of operational over-burden in product uploading. Get a free consultation today.",
			"keywords": "Bulk Product Upload Services, Affordable bulk product upload services, Ecommerce bulk product upload services, Product listing services, Product data entry services.",
			"Ogtitles": "Bulk Product Upload Services | Ecommerce Bulk Product Upload Services",
            "Ognames": "",
            "Ogdescriptions": "Bulk Product Upload Services from Tech2Globe is your definitive answer for be saved from problems of operational over-burden in product uploading. Get a free consultation today.",
            "twittercard": "Bulk Product Upload Services | Ecommerce Bulk Product Upload Services", 
			 "twitterdescription": "Bulk Product Upload Services from Tech2Globe is your definitive answer for be saved from problems of operational over-burden in product uploading. Get a free consultation today.",
            "canonical_url":"https://tech2globe.com/bulk-product-upload-services"
		},

		"chat-support-services": {
			"pagetitle": "Live Chat Support Services |Outsorce Chat support Services",
			"description": "Tech2Globe a leading outsourcing company in India,offers cost effective Live Chat Support Services to customers.We offered 24x7 chat support services  to your customers.",
			"keywords": "Live Chat, Help Desk, Support Desk, Online Live Chat, customer contact center, online chat support, live chat support outsourcing, technical chat support services.",
			"Ogtitles": "Live Chat Support Services | Outsource Chat support Services",
            "Ognames": "",
            "Ogdescriptions": "Tech2Globe a leading outsourcing company in India,offers cost effective Live Chat Support Services to customers.We offered 24x7 chat support services to your customers.",
            "twittercard": "Live Chat Support Services | Outsource Chat support Services", 
			 "twitterdescription": "Tech2Globe a leading outsourcing company in India,offers cost effective Live Chat Support Services to customers.We offered 24x7 chat support services to your customers.",
            "canonical_url":"https://tech2globe.com/chat-support-services"
		},

		"banking-data-entry-services": {
			"pagetitle": "Banking Data Entry Services | Banking Data Entry Services In India",
			"description": "Tech2Globe provide online & offline Banking Data Entry Services to various industries. The banking data entry plays essential role in financial organisations.",
			"keywords": "Banking data entry services in India, service providers, outsource banking data entry services.",
			"Ogtitles": "Banking Data Entry Services | Banking Data Entry Services In India",
            "Ognames": "",
            "Ogdescriptions": "Tech2Globe provide online & offline Banking Data Entry Services to various industries. The banking data entry plays essential role in financial organisations.",
            "twittercard": "Banking Data Entry Services | Banking Data Entry Services In India", 
			 "twitterdescription": "Tech2Globe provide online & offline Banking Data Entry Services to various industries. The banking data entry plays essential role in financial organisations.",
            "canonical_url":"https://tech2globe.com/banking-data-entry-services"
		},
		"customer-service-outsourcing-services": {
			"pagetitle": "Customer Care Service | Customer Service Outsourcing",
			"description": "Outsource customer service to Tech2Globe.we provide Customer support outsourcing for startups like Technical, Chat, Email and Inbound call center.View our benefits and services.",
			"keywords": "customer service outsourcing,customer service startup, customer care services."
		},

		"cloud-integration": {
			"pagetitle": "cloud-integration",
			"description": "",
			"keywords": ""
		},
		"customer-experience": {
			"pagetitle": "customer-experience",
			"description": "",
			"keywords": ""
		},
		"infrastructure-modernization": {
			"pagetitle": "infrastructure-modernization",
			"description": "",
			"keywords": ""
		},
		"mobility": {
			"pagetitle": "mobility",
			"description": "",
			"keywords": ""
		},
		"oracle-applications": {
			"pagetitle": "Oracle Services & Solutions | Oracle Applications | Tech2Globe",
			"description": "We offer solutions across all the applications in Oracle. such as CRM, SCM, or PLM. Tech2globe is well equipped and thoroughly trained with professional knowledge and experience",
			"keywords": "Oracle Services, Oracle Solutions,  Oracle Applications",
			"Ogtitles": "Oracle Services & Solutions | Oracle Applications | Tech2Globe",
            "Ognames": "",
            "Ogdescriptions": "We offer solutions across all the applications in Oracle. such as CRM, SCM, or PLM. Tech2globe is well equipped and thoroughly trained with professional knowledge and experience",
            "twittercard": "Oracle Services & Solutions | Oracle Applications | Tech2Globe", 
			 "twitterdescription": "We offer solutions across all the applications in Oracle. such as CRM, SCM, or PLM. Tech2globe is well equipped and thoroughly trained with professional knowledge and experience",
            "canonical_url":"https://tech2globe.com/oracle-applications"
		},
		"oracle-technology": {
			"pagetitle": "oracle-technology",
			"description": "",
			"keywords": ""
		},
		"configure-price-quote": {
			"pagetitle": "configure-price-quote",
			"description": "",
			"keywords": ""
		},
		"security": {
			"pagetitle": "Security",
			"description": "",
			"keywords": ""
		},
		"supply-chain-management": {
			"pagetitle": "Supply Chain Management",
			"description": "",
			"keywords": ""
		},

		"paperless-office": {
			"pagetitle": "Paperless Office",
			"description": "",
			"keywords": ""
		},
		"amazon-seller-central-management": {
			"pagetitle": "Selling on Amazon | Amazon Service Provider|online Market Place",
			"description": "Tech2Globe helps you managing Amazon online MarketPlace or managing your day to day operations through seller central Panel.",
			"keywords": "Selling on Amazon, Amazon Service Provider, online Market Place, Image uploading Services,  Listing Products, Image editing Services, Amazon Flat File Format"
		},
		"eBay-management": {
			"pagetitle": "Ebay Account Management services | Ebay Management Agency- Tech2globe",
			"description": "Tech2Globe has experienced resources for eBay management. We have expertise in manual product listing, bulk uploading through Excel/Turbolister for eBay marketplace",
			"keywords": "ebay inventory management, product listing, image editing, retouching images, uploading through excel, Ebay management, ebay inventory management system, ebay account management, Ebay order management system",
			"Ogtitles": "Ebay Account Management services | Ebay Management Agency- Tech2globe",
            "Ognames": "Tech2Globe Web Solutions LLP",
            "Ogdescriptions": "Tech2Globe has experienced resources for eBay management. We have expertise in manual product listing, bulk uploading through Excel/Turbolister for eBay marketplace",
            "twittercard": "Ebay Account Management services  | Ebay Management", 
			 "twitterdescription": "Tech2Globe has experienced resources for eBay management. We have expertise in manual product listing, bulk uploading through Excel/Turbolister for eBay marketplace",
            "canonical_url":"https://tech2globe.com/eBay-management"
		},
		"online-business-management-amazon-in": {
			"pagetitle": "Amazon Marketing Services India | Amazon Product Listing Services",
			"description": "Tech2globe is a certified partner of amazon, Offers the best quality services on amazon like amazon product listing services, store creation, inventory management.",
			"keywords": "amazon product upload services, amazon listing services usa, amazon product listing services"
		},

		"online-business-management-flipkart": {
			"pagetitle": "Flipkart product listing optimization services | Tech2Globe",
			"description": "Tech2globe provides Flipkart product listing optimization services & inventory management. Our finest team will focus on selling & bring a huge boost to your business revenue.",
			"keywords": "flipkart product listing services, flipkart product services",
			"Ogtitles": "Flipkart product listing optimization services | Tech2Globe",
            "Ognames": "Flipkart product listing optimization services, Flipkart Seller Central Management, flipkart product services, flipkart product listing services",
            "Ogdescriptions": "Tech2globe provides Flipkart product listing optimization services & inventory management. Our finest team will focus on selling & bring a huge boost to your business revenue.",
            "twittercard": "Flipkart product listing optimization services | Tech2Globe", 
			 "twitterdescription": "Tech2globe provides Flipkart product listing optimization services & inventory management. Our finest team will focus on selling & bring a huge boost to your business revenue.",
            "canonical_url":"https://tech2globe.com/online-business-management-flipkart"
		},


		"online-business-management-shopclues": {
			"pagetitle": "ShopClues Seller Central Management | ShopClues Seller | Tech2Globe",
			"description": "Tech2globe offers you ShopClues Seller Central Management services & assures you one of the finest seller experiences & helps to reach out to millions of users",
			"keywords": "ShopClues Seller Central Management services, ShopClues Seller, shopClues Seller registration, ShopClues Seller account",
			"Ogtitles": "ShopClues Seller Central Management | ShopClues Seller | Tech2Globe",
            "Ognames": "",
            "Ogdescriptions": "Tech2globe offers you ShopClues Seller Central Management services & assures you one of the finest seller experiences & helps to reach out to millions of users",
            "twittercard": "ShopClues Seller Central Management | ShopClues Seller | Tech2Globe", 
			 "twitterdescription": "Tech2globe offers you ShopClues Seller Central Management services & assures you one of the finest seller experiences & helps to reach out to millions of users",
            "canonical_url":"https://tech2globe.com/online-business-management-shopclues"	},

		"online-business-management-sears": {
			"pagetitle": "Sears product listing services | Sears Inventory Management Services",
			"description": "How to start selling on Sears Sell to millions of shoppers on Sears.com and grow your business. Tech2globe provides Sears product listing services for all major Sears marketplace models that will help your eCommerce company to sell their products.",
			"keywords": "Sears product listing services, sears product feed upload, sears product feed data entry, sears.com marketplace management, Sears Data Entry, sears bulk upload services",
			"Ogtitles": "Sears product listing services | Sears Inventory Management Services",
            "Ognames": "",
            "Ogdescriptions": "How to start selling on Sears Sell to millions of shoppers on Sears.com and grow your business. Tech2globe provides Sears product listing services for all major Sears marketplace models that will help your eCommerce company to sell their products.",
            "twittercard": "Sears product listing services | Sears Inventory Management Services", 
			 "twitterdescription": "How to start selling on Sears Sell to millions of shoppers on Sears.com and grow your business. Tech2globe provides Sears product listing services for all major Sears marketplace models that will help your eCommerce company to sell their products.",
            "canonical_url":"https://tech2globe.com/online-business-management-sears"
		},
		"online-business-management-newegg": {
			"pagetitle": "Newegg Product Listing Services | Newegg Product Data Entry Services",
			"description": "Tech2Globe provides Newegg product listing services & selling items on the Newegg marketplace. That will be responsible for handling day-to-day operations in Newegg. ",
			"keywords": "Newegg Product Listing Services, Newegg Data Entry Services, Newegg Bulk Product Upload Services, Newegg Product Entry Services, Newegg Product Data Entry Services, Newegg Catalog Management Services",
			"Ogtitles": "Newegg Product Listing Services | Newegg Product Data Entry Services",
            "Ognames": "",
            "Ogdescriptions": "Tech2Globe provides Newegg product listing services & selling items on the Newegg marketplace. That will be responsible for handling day-to-day operations in Newegg.",
            "twittercard": "Newegg Product Listing Services | Newegg Product Data Entry Services", 
			 "twitterdescription": "Tech2Globe provides Newegg product listing services & selling items on the Newegg marketplace. That will be responsible for handling day-to-day operations in Newegg.",
            "canonical_url":"https://tech2globe.com/online-business-management-newegg"
		},

		"online-business-management-rakuten": {
			"pagetitle": "Rakuten Product Listing Services | Rakuten Product Entry Services ",
			"description": "Rakuten is one of the largest Ecommerce site from Japan. Tech2globe provide uploading product data and selling items on Rakuten marketplace to boost sales. We provide Best quality services to our clients.",
			"keywords": " Rakuten product listing services, Buy.com product data entry services, Buy.com product listing services, Rakuten bulk product upload services, Rakuten product catalog management",
			"Ogtitles": "Rakuten Product Listing Services | Rakuten Product Entry Services",
            "Ognames": "",
            "Ogdescriptions": "Rakuten is one of the largest Ecommerce site from Japan. Tech2globe provide uploading product data and selling items on Rakuten marketplace to boost sales. We provide Best quality services to our clients.",
            "twittercard": "Rakuten Product Listing Services | Rakuten Product Entry Services", 
			 "twitterdescription": "Rakuten is one of the largest Ecommerce site from Japan. Tech2globe provide uploading product data and selling items on Rakuten marketplace to boost sales. We provide Best quality services to our clients.",
            "canonical_url":"https://tech2globe.com/online-business-management-rakuten"
		},

		"online-business-management-amazon-com": {
			"pagetitle": "Amazon Seller Central Consultants | Amazon Seller Account Management",
			"description": "Amazon Seller Account Management Services: Amazon Consultants at Tech2globe enhance performance, sales, reputation, & revenue for your Amazon Store. We can assist you to sell a lot online, so you will get the best outcome.",
			"keywords": "",
			"Ogtitles": "Amazon Seller Central Consultants | Amazon Seller Account Management",
            "Ognames": "",
            "Ogdescriptions": "Amazon Seller Account Management Services: Amazon Consultants at Tech2globe enhance performance, sales, reputation, & revenue for your Amazon Store. We can assist you to sell a lot online, so you will get the best outcome.",
            "twittercard": "Amazon Seller Central Consultants | Amazon Seller Account Management", 
			 "twitterdescription": "Amazon Seller Account Management Services: Amazon Consultants at Tech2globe enhance performance, sales, reputation, & revenue for your Amazon Store. We can assist you to sell a lot online, so you will get the best outcome.",
            "canonical_url":"https://tech2globe.com/"
			},
		"online-business-management-ebay-com": {
			"pagetitle": "eBay Product Listing Services | eBay Product Upload Services",
			"description": "Tech2globe offers ebay product Listing services like account management and order management. Our finest team enhance and maximize your web presence and boost your sales.",
			"keywords": "ebay product listing services, ebay product uplaod"
		},
		"online-business-management-ebay-com": {
			"pagetitle": "eBay Product Listing Services | eBay Product Upload Services",
			"description": "Tech2globe offers ebay product Listing services like account management and order management. Our finest team enhance and maximize your web presence and boost your sales.",
			"keywords": "ebay product listing services, ebay product uplaod",
			"Ogtitles": "eBay Product Listing Services | eBay Product Upload Services",
            "Ognames": "",
            "Ogdescriptions": "Tech2globe offers ebay product Listing services like account management and order management. Our finest team enhance and maximize your web presence and boost your sales.",
            "twittercard": "eBay Product Listing Services | eBay Product Upload Services", 
			 "twitterdescription": "Tech2globe offers ebay product Listing services like account management and order management. Our finest team enhance and maximize your web presence and boost your sales.",
            "canonical_url":"https://tech2globe.com/online-business-management-ebay-com"
		},

		

		"online-business-management-snapdeal": {
			"pagetitle": "Snapdeal Product Listing Services | Snapdeal Seller Central Management ",
			"description": "We provide you full support in the form of services to sell products or goods on Snapdeal. We have a separate team of professionals to provide Snapdeal Marketplace Services ",
			"keywords": "Snapdeal Product Listing Services, Snapdeal Seller Central Management",
			"Ogtitles": " Snapdeal Product Listing Services | Snapdeal Seller Central Management",
            "Ognames": "",
            "Ogdescriptions": "We provide you full support in the form of services to sell products or goods on Snapdeal. We have a separate team of professionals to provide Snapdeal Marketplace Services ",
            "twittercard": " Snapdeal Product Listing Services | Snapdeal Seller Central Management", 
			 "twitterdescription": "We provide you full support in the form of services to sell products or goods on Snapdeal. We have a separate team of professionals to provide Snapdeal Marketplace Services ",
            "canonical_url":"https://tech2globe.com/online-business-management-snapdeal"
		},



		"online-business-management-paytm": {
			"pagetitle": "Paytm Seller Central Management | Paytm for Seller | Tech2Globe",
			"description": "Are you having a hard time listing your products? Tech2Globe can help you to reach millions of customers by providing sell on paytm & paytm seller account services",
			"keywords": "Paytm seller, Paytm Seller account, Paytm Seller Central Management",
			"Ogtitles": "Paytm Seller Central Management | Paytm for Seller | Tech2Globe",
            "Ognames": "",
            "Ogdescriptions": "Are you having a hard time listing your products? Tech2Globe can help you to reach millions of customers by providing sell on paytm & paytm seller account services",
            "twittercard": "Paytm Seller Central Management | Paytm for Seller | Tech2Globe", 
			 "twitterdescription": "Are you having a hard time listing your products? Tech2Globe can help you to reach millions of customers by providing sell on paytm & paytm seller account services",
            "canonical_url":"https://tech2globe.com/online-business-management-paytm"
			},



		"volusion-development": {
			"pagetitle": " Volusion development services | Volusion Experts",
			"description": "Our volusion developers are expert in volusion store design, volusion templates, volusion custom integration. Contact us today to see how we can help.",
			"keywords": "volusion experts, volusion development, volusion website design, volusion custom design, volusion developers."
		},

		"open-cart-development": {
			"pagetitle": "Opencart development company | Opencart Web development services",
			"description": "Tech2Globe offers opencart web evelopment services with optimum quality standards to customize your store as per your business needs to reach a global audience.",
			"keywords": "open cart web development, Opencart development company, Opencart custom design, Opencart theme development, Opencart development services, Opencart services, Opencart development services"
		},

		"amazon-webstore-design-development-services": {
			"pagetitle": "Amazon webstore design and development services at tech2globe",
			"description": "We possess years of experience in the field of helping ecommerce platforms and we are here to help you with designing and implementing of Amazon’s webstore.",
			"keywords": "amazon webstore design, amazon store developer, amazon webstore development, amazon store design, amazon webstores, Amazon Store design & development, Amazon Store Page Design, Amazon Store Design Services",
			"Ogtitles": "Amazon webstore design and development services at tech2globe",
            "Ognames": "Tech2Globe Web Solutions LLP",
            "Ogdescriptions": "Try our staffing services to identify and hire employee who meet the specific needs of your organization. Tech2Globe is here to help you address your staffing needs ",
            "twittercard": "IT staffing services | IT staffing solutions", 
			 "twitterdescription": "Try our staffing services to identify and hire employee who meet the specific needs of your organization. Tech2Globe is here to help you address your staffing needs ",
            "canonical_url":"https://tech2globe.com/amazon-webstore-design-development-services"	
		},


		"amazone-ppc-services": {
			"pagetitle": "Amazon PPC Management Services | Amazon Sponsored Ads",
			"description": "The #1 Amazon PPC Management Service by amazon global certified partner. Served more than 7000+ amazon sellers globally. Our Amazon PPC expert team converts your unprofitable amazon ads into a profitable business.",
			"keywords": "IT staffing services, IT staffing solutions,  IT staffing companies",
			"Ogtitles": "Amazon PPC Management Services | Amazon Sponsored Ads",
            "Ognames": "",
            "Ogdescriptions": "The #1 Amazon PPC Management Service by amazon global certified partner. Served more than 7000+ amazon sellers globally. Our Amazon PPC expert team converts your unprofitable amazon ads into a profitable business.",
            "twittercard": "IT staffing services | IT staffing solutions", 
			 "twitterdescription": "The #1 Amazon PPC Management Service by amazon global certified partner. Served more than 7000+ amazon sellers globally. Our Amazon PPC expert team converts your unprofitable amazon ads into a profitable business. ",
            "canonical_url":"https://tech2globe.com/amazone-ppc-services"
		},

		"IT-Staffing-Services": {
			"pagetitle": "IT staffing services | IT staffing solutions",
			"description": "Try our staffing services to identify and hire employee who meet the specific needs of your organization. Tech2Globe is here to help you address your staffing needs ",
			"keywords": "IT staffing services, IT staffing solutions,  IT staffing companies",
			"Ogtitles": "IT staffing services | IT staffing solutions",
            "Ognames": "",
            "Ogdescriptions": "Try our staffing services to identify and hire employee who meet the specific needs of your organization. Tech2Globe is here to help you address your staffing needs ",
            "twittercard": "IT staffing services | IT staffing solutions", 
			 "twitterdescription": "Try our staffing services to identify and hire employee who meet the specific needs of your organization. Tech2Globe is here to help you address your staffing needs ",
            "canonical_url":"https://tech2globe.com/IT-Staffing-Services"
		},

		"recruitment-staffing-services": {
			"pagetitle": "Recruitment staffing services",
			"description": "Hiring the right Recruitment Agency is key to your business success. Thats why here at Tech2Globe, we are hard at work to give you as many options as possible.",
			"keywords": "recruitment services, staffing services, Human resource management, outsource recruitment services, outsource staffing services.",
			"Ogtitles": "Recruitment staffing services | Staffing solution | Tech2Globe",
            "Ognames": "",
            "Ogdescriptions": "Tech2Globe is here to help you to address your staffing needs and helps to achieve your business goals with proficiency. ",
            "twittercard": "Recruitment staffing services | Staffing solution | Tech2Globe", 
			 "twitterdescription": "Tech2Globe is here to help you to address your staffing needs and helps to achieve your business goals with proficiency. ",
            "canonical_url":"https://tech2globe.com/recruitment-staffing-services"
		},

		"accounts-payable": {
			"pagetitle": "Account payable services | Outsource Accounts Payable Services",
			"description": "Account payable services by tech2globe offer end-to-end account payable BPO services to clients globally. We analyze, detect, investigate, and inspection every fraud",
			"keywords": "Account payable services, Outsource Accounts Payable Services, Data Capture & Processing,  Accounts Payable process ",
			"Ogtitles": "Account payable services | Outsource Accounts Payable Services",
            "Ognames": "",
            "Ogdescriptions": "Account payable services by tech2globe offer end-to-end account payable BPO services to clients globally. We analyze, detect, investigate, and inspection every fraud",
            "twittercard": "Account payable services | Outsource Accounts Payable Services", 
			 "twitterdescription": "Account payable services by tech2globe offer end-to-end account payable BPO services to clients globally. We analyze, detect, investigate, and inspection every fraud",
            "canonical_url":"https://tech2globe.com/accounts-payable"
			
		},

		"accounts-receivable": {
			"pagetitle": "Accounts Receivable Services | Accounts Receivable process | Tech2Globe",
			"description": "Tech2globe provides high-quality account receivable services to clients around the world at cost-effective price. ",
			"keywords": "Accounts Receivable Services, Accounts Receivable process, Outsourcing Accounts Receivable services",
			"Ogtitles": "Accounts Receivable Services | Accounts Receivable process | Tech2Globe",
            "Ognames": "",
            "Ogdescriptions": "Tech2globe provides high-quality account receivable services to clients around the world at cost-effective price. ",
            "twittercard": "Accounts Receivable Services | Accounts Receivable process | Tech2Globe", 
			 "twitterdescription": "Tech2globe provides high-quality account receivable services to clients around the world at cost-effective price. ",
            "canonical_url":"https://tech2globe.com/accounts-receivable"
			
		},

		"image-editing-packages": {
			"pagetitle": "Image Editing Packages | Image editing services | images editing",
			"description": "Tech2Globe offers image editing packages outsourcing. We have experienced image editors who can transform your dull pictures &amp; highly proficient in handling imaging software.",
			"keywords": "Image Editing Packages, product image editing services,  image editing services outsourcing, ecommerce image editing services, image editing services in usa",
			"Ogtitles": "Image Editing Packages | Image editing services | images editing",
            "Ognames": "Tech2Globe Web Solutions LLP",
            "Ogdescriptions": "Tech2Globe offers image editing packages outsourcing. We have experienced image editors who can transform your dull pictures & highly proficient in handling imaging software.",
            "twittercard": "Image Editing Packages | Image editing services | images editing", 
			 "twitterdescription": "Tech2Globe offers image editing packages outsourcing. We have experienced image editors who can transform your dull pictures & highly proficient in handling imaging software.",
            "canonical_url":"https://tech2globe.com/image-editing-packages"
		},

		"photo-restoration-services": {
			"pagetitle": "Photo Restoration Services | Restoring Old Photos |Tech2globe",
			"description": "Photo Restoration Services  We Repair and Restore Old Photos. Fading and Damage can be Repaired, Preserving them for Future Generations.",
			"keywords": "",
			"Ogtitles": "Photo Restoration Services | Restoring Old Photos |Tech2globe",
            "Ognames": "Tech2Globe Web Solutions LLP",
            "Ogdescriptions": "Photo Restoration Services  We Repair and Restore Old Photos. Fading and Damage can be Repaired, Preserving them for Future Generations.",
            "twittercard": "Photo Restoration Services | Restoring Old Photos |Tech2globe", 
			 "twitterdescription": "Photo Restoration Services  We Repair and Restore Old Photos. Fading and Damage can be Repaired, Preserving them for Future Generations.",
            "canonical_url":"https://tech2globe.com/photo-restoration-services"
		},

		"blackandwhite-imagesto-color": {
			"pagetitle": "Colorize pictures: turn black and white photos to color with AI",
			"description": "Colorize black and white images online using AI. Reimagine the past by colorizing pictures of ancestors and historic figures",
			"keywords": "",
			"Ogtitles": "Colorize pictures: turn black and white photos to color with AI",
            "Ognames": "Tech2Globe Web Solutions LLP",
            "Ogdescriptions": "Colorize black and white images online using AI. Reimagine the past by colorizing pictures of ancestors and historic figures",
            "twittercard": "Colorize pictures: turn black and white photos to color with AI", 
			 "twitterdescription": "Colorize black and white images online using AI. Reimagine the past by colorizing pictures of ancestors and historic figures",
            "canonical_url":"https://tech2globe.com/blackandwhite-imagesto-color"
		},

		"food-photo-editing-services": {
			"pagetitle": "#1 Food Photography Editing Service | Online Food Retouching Service",
			"description": "Professional food photography editing service from $5 per image. If you want to make your food photos delicious-looking, refer to our food photo retouching service",
			"keywords": "",
			"Ogtitles": "#1 Food Photography Editing Service | Online Food Retouching Service",
            "Ognames": "Tech2Globe Web Solutions LLP",
            "Ogdescriptions": "Professional food photography editing service from $5 per image. If you want to make your food photos delicious-looking, refer to our food photo retouching service",
            "twittercard": "#1 Food Photography Editing Service | Online Food Retouching Service", 
			 "twitterdescription": "Professional food photography editing service from $5 per image. If you want to make your food photos delicious-looking, refer to our food photo retouching service",
            "canonical_url":"https://tech2globe.com/food-photo-editing-services"
		},

		"image-vector-services": {
			"pagetitle": "Outsource Image Vector Services | Tech2glbe",
			"description": "Outsource image vector services to Flatworld Solutions and get access to accurate vector images, and vector graphics services",
			"keywords": "",
			"Ogtitles": "Outsource Image Vector Services | Tech2glbe",
            "Ognames": "Tech2Globe Web Solutions LLP",
            "Ogdescriptions": "Outsource image vector services to Flatworld Solutions and get access to accurate vector images, and vector graphics services",
            "twittercard": "Outsource Image Vector Services | Tech2glbe", 
			 "twitterdescription": "Outsource image vector services to Flatworld Solutions and get access to accurate vector images, and vector graphics services",
            "canonical_url":"https://tech2globe.com/image-vector-services"
		},

		"skin-retouching-services": {
			"pagetitle": "Outsource Skin Retouching Services | Tech2globe",
			"description": "Tech2gobe provides high-quality skin retouching services to clients around the world at cost-effective rates starting at $7/hour. Contact us now!",
			"keywords": "",
			"Ogtitles": "Outsource Skin Retouching Services | Tech2globe",
            "Ognames": "Tech2Globe Web Solutions LLP",
            "Ogdescriptions": "Tech2gobe provides high-quality skin retouching services to clients around the world at cost-effective rates starting at $7/hour. Contact us now!",
            "twittercard": "Outsource Skin Retouching Services | Tech2globe", 
			 "twitterdescription": "Tech2gobe provides high-quality skin retouching services to clients around the world at cost-effective rates starting at $7/hour. Contact us now!",
            "canonical_url":"https://tech2globe.com/skin-retouching-services"
		},

		"old-photo-restoration": {
			"pagetitle": "Old Photo Restoration Services | Digital Photo Restoration Services",
			"description": "Tech2globe Photo Restorer helps restore old photos instantly. AI enables online old photo restoration as it auto-fixes damaged, faded, and scratch old photos. Get your Old Photo Restoration With Us today!",
			"keywords": "",
			"Ogtitles": "Old Photo Restoration Services | Digital Photo Restoration Services",
            "Ognames": "Tech2Globe Web Solutions LLP",
            "Ogdescriptions": "Tech2globe Photo Restorer helps restore old photos instantly. AI enables online old photo restoration as it auto-fixes damaged, faded, and scratch old photos. Get your Old Photo Restoration With Us today!",
            "twittercard": "Old Photo Restoration Services | Digital Photo Restoration Services", 
			 "twitterdescription": "Tech2globe Photo Restorer helps restore old photos instantly. AI enables online old photo restoration as it auto-fixes damaged, faded, and scratch old photos. Get your Old Photo Restoration With Us today!",
            "canonical_url":"https://tech2globe.com/old-photo-restoration"
		},


		"panorama-image-stitching-services": {
			"pagetitle": "Panorama Image Stitching Services | Tech2globe",
			"description": "Sign up with our panorama image stitching services to give your audience a real time experience of 360-degree panorama view of your products.",
			"keywords": "",
			"Ogtitles": "Panorama Image Stitching Services | Tech2globe",
            "Ognames": "Tech2Globe Web Solutions LLP",
            "Ogdescriptions": "Sign up with our panorama image stitching services to give your audience a real time experience of 360-degree panorama view of your products.",
            "twittercard": "Panorama Image Stitching Services | Tech2globe", 
			 "twitterdescription": "Sign up with our panorama image stitching services to give your audience a real time experience of 360-degree panorama view of your products.",
            "canonical_url":"https://tech2globe.com/panorama-image-stitching-services"
		},


		"watermark-removal-services": {
			"pagetitle": "Image Watermark Removal Service Provider - Delivery within 24 Hours",
			"description": "Sign up with our panorama image stitching services to give your audience a real time experience of 360-degree panorama view of your products.",
			"keywords": "",
			"Ogtitles": "Image Watermark Removal Service Provider - Delivery within 24 Hours",
            "Ognames": "Tech2Globe Web Solutions LLP",
            "Ogdescriptions": "Sign up with our panorama image stitching services to give your audience a real time experience of 360-degree panorama view of your products.",
            "twittercard": "Image Watermark Removal Service Provider - Delivery within 24 Hours", 
			 "twitterdescription": "Sign up with our panorama image stitching services to give your audience a real time experience of 360-degree panorama view of your products.",
            "canonical_url":"https://tech2globe.com/watermark-removal-services"
		},



		"drop-shadow": {
			"pagetitle": " Best Shadow Effects | tech2globe",
			"description": "Well organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, Python, PHP, Bootstrap, Java, XML and more.",
			"keywords": "",
			"Ogtitles": " Best Shadow Effects | tech2globe",
            "Ognames": "Tech2Globe Web Solutions LLP",
            "Ogdescriptions": "Well organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, Python, PHP, Bootstrap, Java, XML and more.",
            "twittercard": " Best Shadow Effects | tech2globe", 
			 "twitterdescription": "Well organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, Python, PHP, Bootstrap, Java, XML and more.",
            "canonical_url":"https://tech2globe.com/drop-shadow"
		},

		"photo-retouching": {
			"pagetitle": " Photo Retouching | Retouch Photos Online for Free | Tech2globe ",
			"description": "Well organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, Python, PHP, Bootstrap, Java, XML and more.",
			"keywords": "",
			"Ogtitles": "Photo Retouching | Retouch Photos Online for Free | Tech2globe ",
            "Ognames": "Tech2Globe Web Solutions LLP",
            "Ogdescriptions": "Well organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, Python, PHP, Bootstrap, Java, XML and more.",
            "twittercard": "Photo Retouching | Retouch Photos Online for Free | Tech2globe ", 
			 "twitterdescription": "Well organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, Python, PHP, Bootstrap, Java, XML and more.",
            "canonical_url":"https://tech2globe.com/photo-retouching"
		},

		"photo-cutout-services": {
			"pagetitle": "Photo Cutout Services | Image Cutout Services | Tech2globe",
			"description": "Get crisp, precise, and affordable Photo Cutout services for your every need by outsourcing to SunTec India. Also, get quick results and multiple related services.",
			"keywords": "",
			"Ogtitles": "Photo Cutout Services | Image Cutout Services | Tech2globe",
            "Ognames": "Tech2Globe Web Solutions LLP",
            "Ogdescriptions": "Get crisp, precise, and affordable Photo Cutout services for your every need by outsourcing to SunTec India. Also, get quick results and multiple related services.",
            "twittercard": "Photo Cutout Services | Image Cutout Services | Tech2globe", 
			 "twitterdescription": "Get crisp, precise, and affordable Photo Cutout services for your every need by outsourcing to SunTec India. Also, get quick results and multiple related services.",
            "canonical_url":"https://tech2globe.com/photo-cutout-services"
		},


		"photo-cutout-services": {
			"pagetitle": "Photo Cutout Services | Image Cutout Services | Tech2globe",
			"description": "Get crisp, precise, and affordable Photo Cutout services for your every need by outsourcing to SunTec India. Also, get quick results and multiple related services.",
			"keywords": "cut out picture, cut out images, photo cut out, cut out pictures, photo cut outs, photo cutouts, photo cutout, cut out photos, image cutout.",
			"Ogtitles": "Photo Cutout Services | Image Cutout Services | Tech2globe",
            "Ognames": "Tech2Globe Web Solutions LLP",
            "Ogdescriptions": "Get crisp, precise, and affordable Photo Cutout services for your every need by outsourcing to SunTec India. Also, get quick results and multiple related services.",
            "twittercard": "Photo Cutout Services | Image Cutout Services | Tech2globe", 
			 "twitterdescription": "Get crisp, precise, and affordable Photo Cutout services for your every need by outsourcing to SunTec India. Also, get quick results and multiple related services.",
            "canonical_url":"https://tech2globe.com/photo-cutout-services"
		},

		"clipping-path-services": {
			"pagetitle": "Photo Clipping Path Services | Clipping Path Services | Tech2globe",
			"description": "Get crisp, precise, and affordable Photo Cutout services for your every need by outsourcing to SunTec India. Also, get quick results and multiple related services.",
			"keywords": "clipping path, clipping paths, clipping path services, clipping path service, image clipping path",
			"Ogtitles": "Photo Clipping Path Services | Clipping Path Services | Tech2globe",
            "Ognames": "Tech2Globe Web Solutions LLP",
            "Ogdescriptions": "Get crisp, precise, and affordable Photo Cutout services for your every need by outsourcing to SunTec India. Also, get quick results and multiple related services.",
            "twittercard": "Photo Clipping Path Services | Clipping Path Services | Tech2globe", 
			 "twitterdescription": "Get crisp, precise, and affordable Photo Cutout services for your every need by outsourcing to SunTec India. Also, get quick results and multiple related services.",
            "canonical_url":"https://tech2globe.com/clipping-path-services"
		},

		"image-tracing-services": {
			"pagetitle": "Best and 100% Quality Image Tracing Service | Tech2gobe ",
			"description": "If you want to get a manual vector conversion service, take our image tracing service in Illustrator. We are the best image tracing and vector conversion provider",
			"keywords": "clipping path, clipping paths, clipping path services, clipping path service, image clipping path",
			"Ogtitles": "Best and 100% Quality Image Tracing Service | Tech2gobe ",
            "Ognames": "Tech2Globe Web Solutions LLP",
            "Ogdescriptions": "If you want to get a manual vector conversion service, take our image tracing service in Illustrator. We are the best image tracing and vector conversion provider",
            "twittercard": "Best and 100% Quality Image Tracing Service | Tech2gobe ", 
			 "twitterdescription": "If you want to get a manual vector conversion service, take our image tracing service in Illustrator. We are the best image tracing and vector conversion provider",
            "canonical_url":"https://tech2globe.com/image-tracing-services"
		},

		"hair-masking-services": {
			"pagetitle": "24 Best hair masking Services To Buy Online | Tech2globe ",
			"description": "Best hair masking freelance services online. Outsource your hair masking project and get it quickly done and delivered remotely online",
			"keywords": "",
			"Ogtitles": "24 Best hair masking Services To Buy Online | Tech2globe ",
            "Ognames": "Tech2Globe Web Solutions LLP",
            "Ogdescriptions": "Best hair masking freelance services online. Outsource your hair masking project and get it quickly done and delivered remotely online",
            "twittercard": "24 Best hair masking Services To Buy Online | Tech2globe ", 
			 "twitterdescription": "Best hair masking freelance services online. Outsource your hair masking project and get it quickly done and delivered remotely online",
            "canonical_url":"https://tech2globe.com/hair-masking-services"
		},


		"image-manipulation-services": {
			"pagetitle": "Image Manipulation Service | Online Photo Manipulation Services | Tech2globe",
			"description": "Image manipulation services for photographers from $25 per image. If you need a head replacement or any creative photo manipulation services.",
			"keywords": "image manipulation online,photo manipulation online,photo manipulation services",
			"Ogtitles": "Image Manipulation Service | Online Photo Manipulation Services | Tech2globe",
            "Ognames": "Tech2Globe Web Solutions LLP",
            "Ogdescriptions": "Image manipulation services for photographers from $25 per image. If you need a head replacement or any creative photo manipulation services.",
            "twittercard": "Image Manipulation Service | Online Photo Manipulation Services | Tech2globe", 
			 "twitterdescription": "Image manipulation services for photographers from $25 per image. If you need a head replacement or any creative photo manipulation services.",
            "canonical_url":"https://tech2globe.com/image-manipulation-services"
		},

		"car-image-clipping": {
			"pagetitle": "Photoshop Car Image Clipping and Effects | Tech2globe",
			"description": "Outsource car image clipping services to a specialized Photoshop artists to ensure accurate clipping, background removal, and added quality car effects.",
			"keywords": "image manipulation online,photo manipulation online,photo manipulation services",
			"Ogtitles": "Photoshop Car Image Clipping and Effects | Tech2globe",
            "Ognames": "Tech2Globe Web Solutions LLP",
            "Ogdescriptions": "Outsource car image clipping services to a specialized Photoshop artists to ensure accurate clipping, background removal, and added quality car effects.",
            "twittercard": "Photoshop Car Image Clipping and Effects | Tech2globe", 
			 "twitterdescription": "Outsource car image clipping services to a specialized Photoshop artists to ensure accurate clipping, background removal, and added quality car effects.",
            "canonical_url":"https://tech2globe.com/car-image-clipping"
		},

		"image-masking-services": {
			"pagetitle": "Creative Image Masking Services | Tech2globe",
			"description": "Reimagine your photos and give them a new, improved look with tech2glbe Creative image masking services. Visit our website to find out how it works",
			"keywords": "image manipulation online,photo manipulation online,photo manipulation services",
			"Ogtitles": "Creative Image Masking Services | Tech2globe",
            "Ognames": "Tech2Globe Web Solutions LLP",
            "Ogdescriptions": "Reimagine your photos and give them a new, improved look with tech2glbe Creative image masking services. Visit our website to find out how it works",
            "twittercard": "Creative Image Masking Services | Tech2globe", 
			 "twitterdescription": "Reimagine your photos and give them a new, improved look with tech2glbe Creative image masking services. Visit our website to find out how it works",
            "canonical_url":"https://tech2globe.com/image-masking-services"
		},

		"image-masking-services": {
			"pagetitle": "Photo Clipping Path Services | Clipping Path Services | Tech2globe",
			"description": "Boost process efficiency with cost-effective clipping path services and solutions from SunTec India. Our image clipping path company offers results within 12-24 hours with 99.95% accuracy and enterprise-grade quality.",
			"keywords": "clipping path, clipping paths, clipping path services, clipping path service, image clipping path",
			"Ogtitles": "Photo Clipping Path Services | Clipping Path Services | Tech2globe",
            "Ognames": "Tech2Globe Web Solutions LLP",
            "Ogdescriptions": "Boost process efficiency with cost-effective clipping path services and solutions from SunTec India. Our image clipping path company offers results within 12-24 hours with 99.95% accuracy and enterprise-grade quality.",
            "twittercard": "Photo Clipping Path Services | Clipping Path Services | Tech2globe", 
			 "twitterdescription": "Boost process efficiency with cost-effective clipping path services and solutions from SunTec India. Our image clipping path company offers results within 12-24 hours with 99.95% accuracy and enterprise-grade quality.",
            "canonical_url":"https://tech2globe.com/image-masking-services"
		},


		"photoshop-services": {
			"pagetitle": "Image Editing - Photoshop, Editing & Retouching Services | Tech2globe",
			"description": "Affordable Freelance Photoshop, Editing & Retouching Services. Hire a freelance Photoshop Designer expert services & get your Photoshop project within 24hr.",
			"keywords": "clipping path, clipping paths, clipping path services, clipping path service, image clipping path",
			"Ogtitles": "Image Editing - Photoshop, Editing & Retouching Services | Tech2globe",
            "Ognames": "Tech2Globe Web Solutions LLP",
            "Ogdescriptions": "Affordable Freelance Photoshop, Editing & Retouching Services. Hire a freelance Photoshop Designer expert services & get your Photoshop project within 24hr.",
            "twittercard": "Image Editing - Photoshop, Editing & Retouching Services | Tech2globe", 
			 "twitterdescription": "Affordable Freelance Photoshop, Editing & Retouching Services. Hire a freelance Photoshop Designer expert services & get your Photoshop project within 24hr.",
            "canonical_url":"https://tech2globe.com/photoshop-services"
		},


		"lightroom-services": {
			"pagetitle": "Lightroom Editing Services |Tech2globe",
			"description": "Lightroom services by Flatworld Solutions provide clients with top quality photo editing services at cost-effective prices.",
			"keywords": "lightroom, lightroom services, outsource lightroom services, services using adobe lightroom,",
			"Ogtitles": "Lightroom Editing Services |Tech2globe",
            "Ognames": "Tech2Globe Web Solutions LLP",
            "Ogdescriptions": "Lightroom services by Flatworld Solutions provide clients with top quality photo editing services at cost-effective prices.",
            "twittercard": "Lightroom Editing Services |Tech2globe", 
			 "twitterdescription": "Lightroom services by Flatworld Solutions provide clients with top quality photo editing services at cost-effective prices.",
            "canonical_url":"https://tech2globe.com/lightroom-services"
		},


		"video-editing": {
			"pagetitle": "Free Online Video Editor | Tech2globe",
			"description": "Create amazing videos with Clipchamp’s easy drag-and-drop video editor that has pro features and designer video templates. No downloads required. Trim, cut or crop any video, add transitions and even edit green screen videos quickly.",
			"keywords": "",
			"Ogtitles": "Free Online Video Editor | Tech2globe",
            "Ognames": "Tech2Globe Web Solutions LLP",
            "Ogdescriptions": "Create amazing videos with Clipchamp’s easy drag-and-drop video editor that has pro features and designer video templates. No downloads required. Trim, cut or crop any video, add transitions and even edit green screen videos quickly.",
            "twittercard": "Free Online Video Editor | Tech2globe", 
			 "twitterdescription": "Create amazing videos with Clipchamp’s easy drag-and-drop video editor that has pro features and designer video templates. No downloads required. Trim, cut or crop any video, add transitions and even edit green screen videos quickly.",
            "canonical_url":"https://tech2globe.com/video-editing"
		},



		"virtual-staging": {
			"pagetitle": "Virtual Staging Service Provider | Virtual Staging for Real Estate ",
			"description": "Tech2globe provides Virtually staging services for your real estate listings to let buyers visualize fully furnished empty homes & Sell faster and at top dollar with a digital remodel of any property.",
			"keywords": "",
			"Ogtitles": "Virtual Staging Service Provider | Virtual Staging for Real Estate ",
            "Ognames": "Tech2Globe Web Solutions LLP",
            "Ogdescriptions": "Tech2globe provides Virtually staging services for your real estate listings to let buyers visualize fully furnished empty homes & Sell faster and at top dollar with a digital remodel of any property.",
            "twittercard": "Virtual Staging Service Provider | Virtual Staging for Real Estate ", 
			 "twitterdescription": "Tech2globe provides Virtually staging services for your real estate listings to let buyers visualize fully furnished empty homes & Sell faster and at top dollar with a digital remodel of any property.",
            "canonical_url":"https://tech2globe.com/virtual-staging"
		},



		"post-processingof-real-estate-images": {
			"pagetitle": "Outsource Real Estate Image Post Processing | Tech2globe",
			"description": "Outsource Real Estate Image Editing Services to Flatworld Solutions & get access to skilled resources who provide quick, efficient, and affordable services.",
			"keywords": "real estate image post processing, real estate image post processing services, real estate photo editing services,",
			"Ogtitles": "Outsource Real Estate Image Post Processing | Tech2globe",
            "Ognames": "Tech2Globe Web Solutions LLP",
            "Ogdescriptions": "Outsource Real Estate Image Editing Services to Flatworld Solutions & get access to skilled resources who provide quick, efficient, and affordable services.",
            "twittercard": "Outsource Real Estate Image Post Processing | Tech2globe", 
			 "twitterdescription": "Outsource Real Estate Image Editing Services to Flatworld Solutions & get access to skilled resources who provide quick, efficient, and affordable services.",
            "canonical_url":"https://tech2globe.com/post-processingof-real-estate-images"
		},

		"real-estate-day-to-night-conversion-services": {
			"pagetitle": "Outsource Real Estate Day to Night Conversion Services | Tech2globe",
			"description": "Outsource Real Estate Day to Night Conversion Services to Flatworld Solutions and save considerable amount of time and money and generate greater revenues.",
			"keywords": "real estate day to night conversion, day to night conversion, real estate day to night conversion services, day to night conversion services",
			"Ogtitles": "Outsource Real Estate Day to Night Conversion Services | Tech2globe",
            "Ognames": "Tech2Globe Web Solutions LLP",
            "Ogdescriptions": "Outsource Real Estate Day to Night Conversion Services to Flatworld Solutions and save considerable amount of time and money and generate greater revenues.",
            "twittercard": "Outsource Real Estate Day to Night Conversion Services | Tech2globe", 
			 "twitterdescription": "Outsource Real Estate Day to Night Conversion Services to Flatworld Solutions and save considerable amount of time and money and generate greater revenues.",
            "canonical_url":"https://tech2globe.com/real-estate-day-to-night-conversion-services"
		},


		"real-estate-photo-enhancement": {
			"pagetitle": "#1 Real Estate Photo Editing Services | Tech2globe",
			"description": "Real estate photo editing services from $1 per image for photographers & real estate agents. We guarantee the best property photography for your listings. Start making real estate photo enhancement fast",
			"keywords": "real estate photo editing services,real estate photo enhancement,real estate photo retouching services,real estate photo editing",
			"Ogtitles": "#1 Real Estate Photo Editing Services | Tech2globe",
            "Ognames": "Tech2Globe Web Solutions LLP",
            "Ogdescriptions": "Real estate photo editing services from $1 per image for photographers & real estate agents. We guarantee the best property photography for your listings. Start making real estate photo enhancement fast",
            "twittercard": "#1 Real Estate Photo Editing Services | Tech2globe", 
			 "twitterdescription": "Real estate photo editing services from $1 per image for photographers & real estate agents. We guarantee the best property photography for your listings. Start making real estate photo enhancement fast",
            "canonical_url":"https://tech2globe.com/real-estate-photo-enhancement"
		},


		"floor-plan-conversions": {
			"pagetitle": "Floor Plan Conversion Services by The 2D3D Floor Plan Company | Tech2gobe",
			"description": "Floor Plan Conversion Services Floor plan conversion services are essential like real estate photo editing services in a real estate business.",
			"keywords": "residential, apartment, multi unit housing, private house, student housing, architecture, architecture news, architecture design,",
			"Ogtitles": "Floor Plan Conversion Services by The 2D3D Floor Plan Company | Tech2gobe",
            "Ognames": "Tech2Globe Web Solutions LLP",
            "Ogdescriptions": "Floor Plan Conversion Services Floor plan conversion services are essential like real estate photo editing services in a real estate business.",
            "twittercard": "Floor Plan Conversion Services by The 2D3D Floor Plan Company | Tech2gobe", 
			 "twitterdescription": "Floor Plan Conversion Services Floor plan conversion services are essential like real estate photo editing services in a real estate business.",
            "canonical_url":"https://tech2globe.com/floor-plan-conversions"
		},

		"sky-replacement-services": {
			"pagetitle": "Sky Replacement Services | Tech2globe",
			"description": "Tech2gobe has been providing professional Sky Replacement Services for real estate photos to clients around the globe at cost-effective prices.",
			"keywords": "residential, apartment, multi unit housing, private house, student housing, architecture, architecture news, architecture design,",
			"Ogtitles": "Sky Replacement Services | Tech2globe",
            "Ognames": "Tech2Globe Web Solutions LLP",
            "Ogdescriptions": "Tech2gobe has been providing professional Sky Replacement Services for real estate photos to clients around the globe at cost-effective prices.",
            "twittercard": "Sky Replacement Services | Tech2globe", 
			 "twitterdescription": "Tech2gobe has been providing professional Sky Replacement Services for real estate photos to clients around the globe at cost-effective prices.",
            "canonical_url":"https://tech2globe.com/sky-replacement-services"
		},


		"real-estate-photo-blending-services": {
			"pagetitle": "Outsource Real Estate Photo Blending Services - Tech2globe",
			"description": "Outsource Real Estate Photo Blending Services to Tech2glbe and get high-quality photo blending services at an affordable price.",
			"keywords": "residential, apartment, multi unit housing, private house, student housing, architecture, architecture news, architecture design,",
			"Ogtitles": "Outsource Real Estate Photo Blending Services - Tech2globe",
            "Ognames": "Tech2Globe Web Solutions LLP",
            "Ogdescriptions": "Outsource Real Estate Photo Blending Services to Tech2glbe and get high-quality photo blending services at an affordable price.",
            "twittercard": "Outsource Real Estate Photo Blending Services - Tech2globe", 
			 "twitterdescription": "Outsource Real Estate Photo Blending Services to Tech2glbe and get high-quality photo blending services at an affordable price.",
            "canonical_url":"https://tech2globe.com/real-estate-photo-blending-services"
		},

		"real-estate-HDR-image-blending": {
			"pagetitle": "Real Estate HDR Image Blending Services | Tech2globe",
			"description": "Outsource Real Estate Photo Blending Services to Tech2glbe and get high-quality photo blending services at an affordable price.",
			"keywords": "residential, apartment, multi unit housing, private house, student housing, architecture, architecture news, architecture design,",
			"Ogtitles": "Real Estate HDR Image Blending Services | Tech2globe",
            "Ognames": "Tech2Globe Web Solutions LLP",
            "Ogdescriptions": "Outsource Real Estate Photo Blending Services to Tech2glbe and get high-quality photo blending services at an affordable price.",
            "twittercard": "Real Estate HDR Image Blending Services | Tech2globe", 
			 "twitterdescription": "Outsource Real Estate Photo Blending Services to Tech2glbe and get high-quality photo blending services at an affordable price.",
            "canonical_url":"https://tech2globe.com/real-estate-HDR-image-blending"
		},

		"twodthreed-floor-plan-conversion": {
			"pagetitle": "2D to 3D Floor Plan Converter by The 2D3D Floor Plan Company | Tech2globe",
			"description": "2D to 3D Floor Plan Converter – Professional, Quick & Unbeatable Price: We do convert 2D plans, images, sketches to 3D floor plans at unbeatable prices.",
			"keywords": "",
			"Ogtitles": "2D to 3D Floor Plan Converter by The 2D3D Floor Plan Company | Tech2globe",
            "Ognames": "Tech2Globe Web Solutions LLP",
            "Ogdescriptions": "2D to 3D Floor Plan Converter – Professional, Quick & Unbeatable Price: We do convert 2D plans, images, sketches to 3D floor plans at unbeatable prices.",
            "twittercard": "2D to 3D Floor Plan Converter by The 2D3D Floor Plan Company | Tech2globe", 
			 "twitterdescription": "2D to 3D Floor Plan Converter – Professional, Quick & Unbeatable Price: We do convert 2D plans, images, sketches to 3D floor plans at unbeatable prices.",
            "canonical_url":"https://tech2globe.com/twodthreed-floor-plan-conversion"
		},


		"enterprise-portal-development": {
			"pagetitle": "Enterprise portal development services | Web Portal Development Company",
			"description": "Tech2Globe is a trustworthy enterprise portal development company, offers robust & scalable enterprise portal development services for your individual need at effective rate. ",
			"keywords": "enterprise portal, web and portal development, web portal India, software development, enterprise application development, Enterprise portal development services, Web Portal Development Company.",
			"Ogtitles": "Enterprise portal development services | Web Portal Development Company",
            "Ognames": "",
            "Ogdescriptions": "Tech2Globe is a trustworthy enterprise portal development company, that offers robust & scalable enterprise portal development services for your individual need at an effective rate",
            "twittercard": "Enterprise portal development services | Web Portal Development Company", 
			 "twitterdescription": "Tech2Globe is a trustworthy enterprise portal development company, that offers robust & scalable enterprise portal development services for your individual need at an effective rate",
            "canonical_url":"https://tech2globe.com/enterprise-portal-development"
		},

		"complete-ecommerce-solution-india": {
			"pagetitle": "Complete Ecommerce Solution Services | Sell Online | ecommerce web store",
			"description": "Are you looking for a complete e-commerce solution? Tech2Globe experts manage your business by focusing on conversion techniques that meet your specific objectives.",
			"keywords": "end to end ecommerce solutions india, complete ecommerce solution",
			"Ogtitles": "Complete Ecommerce Solution Services | Sell Online | E-commerce web store",
            "Ognames": "",
            "Ogdescriptions": "Are you looking for a complete e-commerce solution? Tech2Globe experts manage your business by focusing on conversion techniques that meet your specific objectives.",
            "twittercard": "Complete Ecommerce Solution Services | Sell Online | E-commerce web store", 
			 "twitterdescription": "Are you looking for a complete e-commerce solution? Tech2Globe experts manage your business by focusing on conversion techniques that meet your specific objectives.",
            "canonical_url":"https://tech2globe.com/complete-ecommerce-solution-india"
		},



		"android-application-development-services": {
			"pagetitle": "Android App development company | Android application development services",
			"description": "Tech2Globe is a top android App Development Company. That provides Android application development services around specific business requirement of the customers. ",
			"keywords": "android app, android application development,  android app development, android application development company, Android application development services",
			"Ogtitles": "Android App development company | Android application development services",
            "Ognames": "",
            "Ogdescriptions": "Tech2Globe is a top android App Development Company. That provides Android application development services around specific business requirement of the customers.",
            "twittercard": "Android App development company | Android application development services", 
			 "twitterdescription": "Tech2Globe is a top android App Development Company. That provides Android application development services around specific business requirement of the customers.",
            "canonical_url":"https://tech2globe.com/android-application-development-services"
		},

		"iphone-ipad-application-development-services": {
			"pagetitle": "iPhone app development company | iOS development services | Tech2Globe",
			"description": "Get experienced professionals IOS development services from reputed iPhone app Development Company. Our IOS Developers have hands-on experience of working on the latest tools. ",
			"keywords": "iPhone app development, ios development company,  iPhone app development services",
			"Ogtitles": "iPhone app development company | iOS development services | Tech2Globe",
            "Ognames": "",
            "Ogdescriptions": "Get experienced professionals IOS development services from reputed iPhone app Development Company. Our IOS Developers have hands-on experience of working on the latest tools.",
            "twittercard": "iPhone app development company | iOS development services | Tech2Globe", 
			 "twitterdescription": "Get experienced professionals IOS development services from reputed iPhone app Development Company. Our IOS Developers have hands-on experience of working on the latest tools.",
            "canonical_url":"https://tech2globe.com/iphone-ipad-application-development-services"
		},

		"ecommerce-seo-services": {
			"pagetitle": "Ecommerce SEO services | ecommerce SEO company | ecommerce SEO India",
			"description": "Tech2Globe can help you to gain higher visibility and reach to millions of customers. Contact the #1 eCommerce SEO Company today for eCommerce SEO services",
			"keywords": "Ecommerce SEO services, SEO Services for Ecommerce Sites, Ecommerce SEO Services India, Ecommerce SEO Company, Ecommerce SEO Agency, Best ecommerce SEO Company",
			"Ogtitles": "Ecommerce SEO services | ecommerce SEO company | ecommerce SEO India",
            "Ognames": "",
            "Ogdescriptions": "Tech2Globe can help you to gain higher visibility and reach to millions of customers. Contact the #1 eCommerce SEO Company today for eCommerce SEO services",
            "twittercard": "Ecommerce SEO services | ecommerce SEO company | ecommerce SEO India", 
			 "twitterdescription": "Tech2Globe can help you to gain higher visibility and reach to millions of customers. Contact the #1 eCommerce SEO Company today for eCommerce SEO services",
            "canonical_url":"https://tech2globe.com/ecommerce-seo-services"
		},

		"link-building-services": {
			"pagetitle": "Link Building Services | Link Building Packages | Tech2Globe",
			"description": "Get the best SEO with manual link-building services with tech2globe, our white hat, manual link-building services earn links that improve your site’s authority. Call Now!",
			"keywords": "Link Building Services, Link Building Packages, Affordable link building services, SEO link building services",
			"Ogtitles": "Link Building Services | Link Building Packages | Tech2Globe",
            "Ognames": "",
            "Ogdescriptions": "Get the best SEO with manual link-building services with tech2globe, our white hat, manual link-building services earn links that improve your site’s authority. Call Now!",
            "twittercard": "Link Building Services | Link Building Packages | Tech2Globe", 
			"twitterdescription": "Get the best SEO with manual link-building services with tech2globe, our white hat, manual link-building services earn links that improve your site’s authority. Call Now!",	 
            "canonical_url":"https://tech2globe.com/link-building-services"
		},

		"ppc-management-services": {
			"pagetitle": "PPC Management Services | Pay Per Click | PPC Services | Tech2Globe",
			"description": "Tech2globe offers PPC management services. Get guaranteed results and increase ROI with our experienced and well qualified PPC experts. Boost traffic now.",
			"keywords": "PPC Services in Delhi, Pay Per Click, PPC Services, PPC Management services, PPC Company"
		},

		"online-reputation-management-services": {
			"pagetitle": "Online Reputation Management Services | ORM Services | Tech2Globe",
			"description": "Protect your brand with our finest and experienced online reputation management services. Our consultants can bring your reputation on track so youll get the best outcome.",
			"keywords": "brand reputation management, online reputation management services packages, online reputation management services india, online reputation management service"
		},

		"content-marketing": {
			"pagetitle": "Content Marketing Services | Content Marketing Agency | Tech2Globe",
			"description": "Content marketing services Tech2globe provides you the great consistent content creation to engage your audience, build trust, and influence their purchasing decisions.",
			"keywords": "Content Marketing Services, Content Marketing Agency, Content Marketing Service Providers, Content Marketing Services India, Content Marketing Services Packages"
		},

		"guest-posting": {
			"pagetitle": "Guest Posting Services | Guest Blogging Services | Tech2Globe",
			"description": "Tech2Globe offers the best guest posting services at a cost-effective price. Guest posting is a great method to build authority backlinks to your websites.",
			"keywords": "guest posting service india, guest posting, guest post service, best guest posting service"
		},



		"cake-php-development": {
			"pagetitle": "Cake PHP development | Cake PHP development company",
			"description": "If you looking for best cake PHP development for you then Tech2Globe is right place for you. We have expert team for cake PHP development.",
			"keywords": "Cake PHP development, cake PHP web development, PHP development, best PHP development company, PHP developers."
		},


		"human-resource-management-system": {
			"pagetitle": "HRMS software | Human Resource Management System | HR Management System",
			"description": "Tech2Globe providing HRMS software which suits to all of your business need and it can be customized according to your needs.",
			"keywords": "HR management, HRMS Software, hr management software, hr management system, small business, software."
		},

		"nopcommerce-themes": {
			"pagetitle": "Nopcommerce Themes | Nopcommerce themes & templates",
			"description": "Grow your business faster with high quality and customized nopcommerce themes. Both free and premium themes available.",
			"keywords": "nopcommerce themes, nop plugins, nop templates, nop themes, nopcommerce design."
		},



		"nop-commerce-development": {
			"pagetitle": "Nopcommerce Website Development | Nopcommerce Development Company",
			"description": "Tech2Globe offer complete end to end services for Nopcommerce Website development. We develop custom nopcommerce plugins and create one such site for your company. ",
			"keywords": " nopcommerce development, Nopcommerce website development, nopcommerce development company, nop plugins, nop templates, nop themes."
		},

		"software-development": {
			"pagetitle": "Software Development company | Software Development Services",
			"description": "Tech2Globe is a leading software development company that provides software development services for completing software developing needs and provides you wide range of solutions. ",
			"keywords": "software development, software development company, software development services, software development India, software company.",
			"Ogtitles": "Software Development company | Software Development Services",
            "Ognames": "",
            "Ogdescriptions": "Tech2Globe is a leading software development company that provides software development services for completing software developing needs and provides you wide range of solutions",
            "twittercard": "Software Development company | Software Development Services", 
			 "twitterdescription": "Tech2Globe is a leading software development company that provides software development services for completing software developing needs and provides you wide range of solutions",
            "canonical_url":"https://tech2globe.com/software-development"
		},

		"digital-marketing": {
			"pagetitle": "Digital Marketing Services | Digital Marketing Agency | Tech2Globe",
			"description": "Tech2Globe is a Digital Marketing agency in India offers measurable and concrete results. Take your business to the next level with the best digital marketing services",
			"keywords": "digital marketing companies, digital marketing companies in delhi, digital marketing company in india, best digital marketing agency in india, best digital marketing agency in india"
		},

		"HR-solutions": {
			"pagetitle": "HR Solutions | HR consultants | HR services | Tech2Globe",
			"description": "Welcome to Tech2Globe, We deliver HR solutions that drive your business forward. Save you time and get real-time performance .",
			"keywords": "HR solutions, HR consultancy, hiring consultant,  HR solutions Delhi,  HR outsourcing, HR software",
			"Ogtitles": "HR Solutions | HR consultants | HR services | Tech2Globe",
            "Ognames": "",
            "Ogdescriptions": "Welcome to Tech2Globe, We deliver HR solutions that drive your business forward. Save you time and get real-time performance ",
            "twittercard": "HR Solutions | HR consultants | HR services | Tech2Globe", 
			 "twitterdescription": "Welcome to Tech2Globe, We deliver HR solutions that drive your business forward. Save you time and get real-time performance ",
            "canonical_url":"https://tech2globe.com/HR-solutions"
		},

		"data-management-services": {
			"pagetitle": "Streamline Your Data with Tech2Globe: Expert Data Management Services",
			"description": "Looking for reliable data management services? Our managed data services offer efficient solutions for your data needs. Get expert support today!",
			"keywords": "data management, data entry, data mining, data product entry, data management services, data outsourcing services.",
			"Ogtitles": "Streamline Your Data with Tech2Globe: Expert Data Management Services",
			"Ognames": "Tech2Globe web Solutions LLP",
			"Ogdescriptions": "Looking for reliable data management services? Our managed data services offer efficient solutions for your data needs. Get expert support today!",
			"twittercard": "Tech2Globe", 
            "twittertitle": "Streamline Your Data with Tech2Globe: Expert Data Management Services",
            "twitterdescription": "Looking for reliable data management services? Our managed data services offer efficient solutions for your data needs. Get expert support today!",
		    "canonical_url":"https://www.tech2globe.com/data-management-services"
		},

		"knowledge-process-outsourcing-services": {
			"pagetitle": "Knowledge Process Outsourcing Services | KPO Services",
			"description": "Tech2Globe have expertise in Reliable and professional KPO services. We offer Data conversion, legal transcription, drafting documentation and chat support services.",
			"keywords": "KPO services, KPO services India, KPO company, KPO outsourcing services, KPO solutions, KPO strategies."
		},

		"database-development-migration": {
			"pagetitle": "Database Development and Migration Services",
			"description": "By outsourcing Database Development and Migration Services to Tech2Globe, get well designed and cost effective database.",
			"keywords": "database development, database migration, database development services, outsource database development, database development India."
		},


		"ecommerce-marketplace-management": {
			"pagetitle": "Bulk Upload Products to Amazon | Amazon Product Uploading Services",
			"description": "Tech2globe offer complete Amazon Product Uploading Services including Bulk product Upload; Image Editing; Account Setup, Template Specific Data Feed; Inventory Management and more.",
			"keywords": " Bulk Upload Products. Bulk Upload Products to Amazon, Amazon Product Uploading Services, Amazon Product Uploading, Product Uploading Services, Product Uploading",
			"Ogtitles": "Bulk Upload Products to Amazon | Amazon Product Uploading Services",
            "Ognames": "Tech2Globe Web Solutions LLP",
            "Ogdescriptions": "Tech2globe offer complete Amazon Product Uploading Services including Bulk product Upload; Image Editing; Account Setup, Template Specific Data Feed; Inventory Management and more.",
            "twittercard": "Bulk Upload Products to Amazon | Amazon Product Uploading Services", 
			"twitterdescription": "Tech2globe offer complete Amazon Product Uploading Services including Bulk product Upload; Image Editing; Account Setup, Template Specific Data Feed; Inventory Management and more.",
			 "canonical_url":"https://tech2globe.com/ecommerce-marketplace-management"
		},

		"webstore-design-and-development": {
			"pagetitle": "Ecommerce store design and development | Webstore Design and development",
			"description": "Get highly visible webstore for your eCommerce website.Tech2Globe provide customized and cost effective designed templates for your store.",
			"keywords": "ecommerce development, ecommerce website design, ecommerce website development, webstore development, ecommerce development India, webstore development India."
		},

		"image-photo-editing-services": {
			"pagetitle": "Photo Editing Services | Image Editing Services | Tech2Globe",
			"description": "Tech2Globe offers wide variety of image editing services to fulfill your all image editing needs. We have a team of skilled and experienced professionals",
			"keywords": "image editing services, Photo editing services, affordable image editing services, photo editing company.",
			"Ogtitles": "Photo Editing Services | Image Editing Services | Tech2Globe",
            "Ognames": "",
            "Ogdescriptions": "Tech2Globe offers wide variety of image editing services to fulfill your all image editing needs. We have a team of skilled and experienced professionals",
            "twittercard": "Photo Editing Services | Image Editing Services | Tech2Globe", 
			 "twitterdescription": "Tech2Globe offers wide variety of image editing services to fulfill your all image editing needs. We have a team of skilled and experienced professionals",
            "canonical_url":"https://tech2globe.com/photo-editing-services"
		},

		"digital-marketing-services": {
			"pagetitle": "Strategic Digital Marketing Services - Tech2Globe",
			"description": "levate your brand with our comprehensive digital marketing services. Drive traffic and conversions. Contact us for a tailored strategy today!",
			"keywords": "digital marketing services, Digital marketing service, digital marketing agency services, digital marketing services near mebest digital marketing services, Digital marketing services company, digital marketing consulting services, digital marketing service provider, digital marketing services in usa, digital marketing services usadigital marketing services agency, professional digital marketing services",
			"Ogtitles": "Digital Marketing Services | Digital Marketing Services India",
            "Ognames": "",
            "Ogdescriptions": "Get 100% genuine results with Tech2Globe. We offer Digital marketing services at very cost-effective rates for all types of business. Grow your business faster",
            "twittercard": "Digital Marketing services | Digital Marketing services India", 
			 "twitterdescription": "Get 100% genuine results with Tech2Globe. We offer Digital marketing services at very cost-effective rates for all types of business. Grow your business faster",
            "canonical_url":"https://tech2globe.com/digital-marketing-services"
		},

		"digital-marketing-packages": {
			"pagetitle": "Digital Marketing Packages | Digital Marketing Packages India",
			"description": "Get 100% genuine results with Tech2Globe. We offer Digital marketing packages at very cost-effective rates for all types of business. Grow your business faster.",
			"keywords": "digital marketing services, digital marketing packages, seo packages, digital marketing company, digital marketing India, digital marketing packages India.",
			"Ogtitles": "Digital Marketing Packages | Digital Marketing Packages India",
            "Ognames": "",
            "Ogdescriptions": "Get 100% genuine results with Tech2Globe. We offer Digital marketing packages at very cost-effective rates for all types of business. Grow your business faster",
            "twittercard": "Digital Marketing Packages | Digital Marketing Packages India", 
			 "twitterdescription": "Get 100% genuine results with Tech2Globe. We offer Digital marketing packages at very cost-effective rates for all types of business. Grow your business faster",
            "canonical_url":"https://tech2globe.com/digital-marketing-packages"
		},


		"seo-packages": {
			"pagetitle": "Best SEO Packages | Result Driven Affordable SEO Plan",
			"description": "Choose the Best SEO Packages from Tech2Globe to improve your visibility on Google SERP ✔14+ Years of SEO Experience ✔Latest SEO Techniques ✔Free Quote",
			"keywords": "SEO Packages, SEO Prices, SEO Pricing",
			"Ogtitles": "SEO packages | SEO packages India | SEO services packages",
            "Ognames": "",
            "Ogdescriptions": "Looking for SEO packages, but worried about budget? Tech2globe provides you the best SEO packages India at an affordable price. Get guaranteed results and increase ROI",
            "twittercard": "SEO packages | SEO packages India | SEO services packages", 
			 "twitterdescription": "Looking for SEO packages, but worried about budget? Tech2globe provides you the best SEO packages India at an affordable price. Get guaranteed results and increase ROI",
            "canonical_url":"https://tech2globe.com/seo-packages"
		},

		"smo-packages": {
			"pagetitle": "Best SMO Packages | Social Media Optimization Pricing",
			"description": "Get the Best SMO Packages to build your brand presence with affordable social media optimization pricing. ✔FREE Audit & Proposal ✔Complimetary Ads & More.",
			"keywords": "SMO Packages, SMO Prices, SMO Pricing, Social Media Optimization Packages",
			"Ogtitles": "SMO packages | SMO packages India | SMO services packages",
            "Ognames": "",
            "Ogdescriptions": "Looking for SMO packages, but worried about budget? Tech2globe provides you the best SMO packages India at an affordable price. Get guaranteed results and increase ROI",
            "twittercard": "SMO packages | SMO packages India | SMO services packages", 
			 "twitterdescription": "Looking for SMO packages, but worried about budget? Tech2globe provides you the best SMO packages India at an affordable price. Get guaranteed results and increase ROI",
            "canonical_url":"https://tech2globe.com/smo-packages"
		},

		"social-media-marketing-packages": {
			"pagetitle": "Social Media Marketing Packages & Pricing for Your  Brand Growth",
			"description": "Best Social Media Marketing Packages to Unlock your brand&#39;s potential. Boost engagement, drive traffic &amp; elevate your online presence. ✔FREE Proposal &amp; Plan",
			"keywords": "Social Media Marketing Packages, SMM Packages, SMM Prices, SMM Pricing, Social Media Marketing Pricing",
			"Ogtitles": "Get the best social media package for your business! Browse Our packages include social media content posting, blogging, videos, and more. Get set up and running in 3 days!",
            "Ognames": "",
            "Ogdescriptions": "Best Social Media Marketing Packages for Your Business | Tech2Globe",
            "twittercard": "Get the best social media package for your business! Browse Our packages include social media content posting, blogging, videos, and more. Get set up and running in 3 days!", 
			 "twitterdescription": "Get the best social media package for your business! Browse Our packages include social media content posting, blogging, videos, and more. Get set up and running in 3 days!",
            "canonical_url":"https://tech2globe.com/social-media-marketing-packages"
		},


		"guest-posting-packages": {
			"pagetitle": "Guest Posting Services | Guest Posting Packages | Tech2Globe",
			"description": "Tech2globe offers guest posting packages for small or medium type of business across the globe. Improve your site authority and credibility and get more traffic today.",
			"keywords": "guest post packages, guest posting package",
			"Ogtitles": "Guest Posting Services | Guest Posting Packages | Tech2Globe",
            "Ognames": "",
            "Ogdescriptions": "Tech2globe offers guest posting packages for small or medium type of business across the globe. Improve your site authority and credibility and get more traffic today.",
            "twittercard": "Guest Posting Services | Guest Posting Packages | Tech2Globe", 
			 "twitterdescription": "Tech2globe offers guest posting packages for small or medium type of business across the globe. Improve your site authority and credibility and get more traffic today.",
            "canonical_url":"https://tech2globe.com/guest-posting-packages"
		},

		"lead-management-tool": {
			"pagetitle": "Lead Management Tool | Online Lead management software",
			"description": "Generate more sales with lead management. Tech2Globe provide online lead management tool helps you to manage leads from multiple lead channels. Powerful and easy to use.",
			"keywords": "lead management tool, best lead management tool, lead management software, lead management system, online lead management tool."
		},

		"Performance-Evaluation-Discussion-Management-Application": {
			"pagetitle": "Performance Evaluation | Performance Management and appraisal",
			"description": "Performance evaluation discussion management application helps your organization and HR to create development plans and discuss performance throughout the year.",
			"keywords": "performance management, performance evaluation, performance appraisal, performance management system, performance discussion."
		},

		"mobile-app-development": {
			"pagetitle": "Mobile app development services | Mobile app development company",
			"description": "Tech2Globe, a mobile app Development Company. Our extensive experts delivering a full range of mobile app development services that are a perfect match for the client’s needs.",
			"keywords": "Mobile app development services, Mobile app Development Company, Mobile Application Developers, Custom Mobile App Development Company, Mobile Application Development Services, Mobile App Design.",
			"Ogtitles": "Mobile app development services, Mobile app Development Company, Mobile Application Developers, Custom Mobile App Development Company",
            "Ognames": "",
            "Ogdescriptions": "Tech2Globe, a mobile app Development Company. Our extensive experts delivering a full range of mobile app development services that are a perfect match for the client’s needs.",
            "twittercard": "Mobile app development services | Mobile app development company", 
			 "twitterdescription": "Tech2Globe, a mobile app Development Company. Our extensive experts delivering a full range of mobile app development services that are a perfect match for the client’s needs.",
            "canonical_url":"https://tech2globe.com/mobile-app-development"
		},

		"data-cleansing-services": {
			"pagetitle": "Outsource data cleansing services | Data cleansing experts | Teh2Globe",
			"description": "Tech2Globe is a top data cleansing services provider. Our international team of data cleansing professionals can help with specialized tasks such as visual analytics & More. ",
			"keywords": "Data Cleansing Services, Outsource data cleansing services, Top data cleansing service provider, Data cleansing experts, data cleansing solutions, data cleansing professionals, Database cleansing services.",
			"Ogtitles": "Outsource data cleansing services | Data cleansing experts | Teh2Globe",
            "Ognames": "",
            "Ogdescriptions": "Tech2Globe is a top data cleansing services provider. Our international team of data cleansing professionals can help with specialized tasks such as visual analytics & More.",
            "twittercard": "Outsource data cleansing services | Data cleansing experts | Teh2Globe", 
			 "twitterdescription": "Tech2Globe is a top data cleansing services provider. Our international team of data cleansing professionals can help with specialized tasks such as visual analytics & More.",
            "canonical_url":"https://tech2globe.com/data-cleansing-services"
		},

		"data-de-duplication-services": {
			"pagetitle": "Outsourcing Data De-Duplication Services | Data De-Duplication experts ",
			"description": "Outsourcing data de-duplication services to Tech2Globe will offer you phenomenal outcomes at reasonable rates. Our team of workers who can cleanse your data with great ease.",
			"keywords": "Data De-duplication services, outsourcing data de-duplication services, data de-duplication experts, Data De-duplication services provider company.",
			"Ogtitles": "Outsourcing Data De-Duplication Services | Data De-Duplication experts",
            "Ognames": "",
            "Ogdescriptions": "Outsourcing data de-duplication services to Tech2Globe will offer you phenomenal outcomes at reasonable rates. Our team of workers who can cleanse your data with great ease.",
            "twittercard": "Outsourcing Data De-Duplication Services | Data De-Duplication experts", 
			 "twitterdescription": "Outsourcing data de-duplication services to Tech2Globe will offer you phenomenal outcomes at reasonable rates. Our team of workers who can cleanse your data with great ease.",
            "canonical_url":"https://tech2globe.com/data-de-duplication-services"
		},

		"data-scrubbing-services": {
			"pagetitle": "Outsource Data Scrubbing Services | Data Scrubbing Company | Tech2Globe",
			"description": "Tech2Globe offers data scrubbing services and gives help with checking & adjusting your business-critical information & we assist you with keeping up a perfect database. ",
			"keywords": "Data Scrubbing Services, Outsource Data Scrubbing Services, Data Scrubbing Services providers, Outsourcing data scrubbing services to India.",
			"Ogtitles": "Outsource Data Scrubbing Services | Data Scrubbing Company | Tech2Globe",
            "Ognames": "",
            "Ogdescriptions": "Tech2Globe offers data scrubbing services and gives help with checking & adjusting your business-critical information & we assist you with keeping up a perfect database.",
            "twittercard": "Outsource Data Scrubbing Services | Data Scrubbing Company | Tech2Globe", 
			 "twitterdescription": "Tech2Globe offers data scrubbing services and gives help with checking & adjusting your business-critical information & we assist you with keeping up a perfect database.",
            "canonical_url":"https://tech2globe.com/data-scrubbing-services"
		},

			"data-standardization-services": {
			"pagetitle": "Data Standardization Services | Outsource Data Standardization",
			"description": "Tech2globe empowers businesses to make timely and well-informed decisions by providing customized data standardization services at an affordable cost.",
			"keywords": "Data Standardization services, Address standardization services, outsource data standardization services, Ecommerce product Data Standardization services.",
			"Ogtitles": "Data Standardization Services | Outsource Data Standardization",
            "Ognames": "",
            "Ogdescriptions": "Tech2globe empowers businesses to make timely and well-informed decisions by providing customized data standardization services at an affordable cost.",
            "twittercard": "Data Standardization Services | Outsource Data Standardization", 
			 "twitterdescription": "Tech2globe empowers businesses to make timely and well-informed decisions by providing customized data standardization services at an affordable cost.",
            "canonical_url":"https://tech2globe.com/data-standardization-services"
		},

			"accounting-data-entry-services": {
			"pagetitle": "Outsource Accounting Data Entry Services | Data Entry Services",
			"description": "Outsource accounting data entry services & bookkeeping data entry services to the most trusted company in India with Tech2Globe avail quick, accurate, and reliable services at highly and cost-effective rates.",
			"keywords": "accounting data entry, accounts receivable data entry, accounting data entry, global data entry, data entry company, accounting data entry services, outsource accounting data entry, outsourcing accounting data entry services, accounting data entry solution, auditing data entry, outsource accounting data entry services, bookkeeping data entry, accounts payable data entry, outsource accounts receivable data entry
",
			"Ogtitles": "Outsource Accounting Data Entry Services | Data Entry Services",
            "Ognames": "",
            "Ogdescriptions": "Outsource accounting data entry services & bookkeeping data entry services to the most trusted company in India with Tech2Globe avail quick, accurate, and reliable services at highly and cost-effective rates.",
            "twittercard": "Outsource Accounting Data Entry Services | Data Entry Services", 
			 "twitterdescription": "Outsource accounting data entry services & bookkeeping data entry services to the most trusted company in India with Tech2Globe avail quick, accurate, and reliable services at highly and cost-effective rates.",
            "canonical_url":"https://tech2globe.com/accounting-data-entry-services"
			},

			"financial-data-entry-services": {
			"pagetitle": "Outsource Banking and Financial Data Entry Services | Tech2Globe",
			"description": "Tech2Globe is one of the best financial data entry service provider based in India. we provide the services in the entire major languages like German, French & more. ",
			"keywords": "Financial data entry services, Outsource banking and financial data entry services, Outsource financial data entry services.",
			"Ogtitles": "Outsource Banking and Financial Data Entry Services | Tech2Globe",
            "Ognames": "",
            "Ogdescriptions": "Tech2Globe is one of the best financial data entry service provider based in India. we provide the services in the entire major languages like German, French & more.",
            "twittercard": "Outsource Banking and Financial Data Entry Services | Tech2Globe", 
			 "twitterdescription": "Tech2Globe is one of the best financial data entry service provider based in India. we provide the services in the entire major languages like German, French & more.",
            "canonical_url":"https://tech2globe.com/financial-data-entry-services"
		},

			"image-data-entry-services": {
			"pagetitle": "Outsource Image Data Entry Services | Scanned Image Data Entry Service",
			"description": "Tech2Globe can help when you need high-quality image data entry services. Our prepared image data entry specialists can deal with any volume of images in any organization. ",
			"keywords": "Outsource image data entry services, Image data entry services, Scanned image data entry.",
			"Ogtitles": "Outsource Image Data Entry Services | Scanned Image Data Entry Service",
            "Ognames": "Tech2Globe Web Solutions LLP",
            "Ogdescriptions": "Tech2Globe can help when you need high-quality image data entry services. Our prepared image data entry specialists can deal with any volume of images in any organization.",
            "twittercard": "Outsource Image Data Entry Services | Scanned Image Data Entry Service", 
			 "twitterdescription": "Tech2Globe can help when you need high-quality image data entry services. Our prepared image data entry specialists can deal with any volume of images in any organization.",
            "canonical_url":"https://tech2globe.com/image-data-entry-services"
		},

			"insurance-claims-data-entry-services": {
			"pagetitle": "Outsource Insurance Claims Data Entry Services | Tech2Globe",
			"description": "Outsourcing your insurance claims data entry services to Tech2Globe. We are driving supplier of data processing services for insurance companies and third-party administrators. ",
			"keywords": "Insurance Claims Data Entry Services, Outsource insurance claims data entry services, insurance data entry services, Medical claims data entry services, Medical and insurance claims data entry services.",
			"Ogtitles": "Outsource Insurance Claims Data Entry Services | Tech2Globe",
            "Ognames": "Tech2Globe Web Solutions LLP",
            "Ogdescriptions": "Outsourcing your insurance claims data entry services to Tech2Globe. We are driving supplier of data processing services for insurance companies and third-party administrators.",
            "twittercard": "Outsource Insurance Claims Data Entry Services | Tech2Globe", 
			 "twitterdescription": "Outsourcing your insurance claims data entry services to Tech2Globe. We are driving supplier of data processing services for insurance companies and third-party administrators.",
            "canonical_url":"https://tech2globe.com/insurance-claims-data-entry-services"
		},


			"medical-data-entry-services": {
			"pagetitle": "Medical Data Entry Services | Tech2Globe",
			"description": "Accurate medical data entry services, remote or onsite. Efficiently manage healthcare records with our reliable medical data entry expertise.",
			"keywords": "Insurance Claims Data Entry Services, Outsource insurance claims data entry services, insurance data entry services, Medical claims data entry services, Medical and insurance claims data entry services.",
			"Ogtitles": "Medical Data Entry Services | Tech2Globe",
            "Ognames": "Tech2Globe Web Solutions LLP",
            "Ogdescriptions": "Accurate medical data entry services, remote or onsite. Efficiently manage healthcare records with our reliable medical data entry expertise.",
            "twittercard": "Medical Data Entry Services | Tech2Globe", 
			 "twitterdescription": "Accurate medical data entry services, remote or onsite. Efficiently manage healthcare records with our reliable medical data entry expertise.",
            "canonical_url":"https://tech2globe.com/medical-data-entry-services"
		},


			"virtual-assistant-services": {
			"pagetitle": "Virtual Assistant Services | Tech2Globe: Simplify Your Tasks",
			"description": "Find a comprehensive list of virtual assistant services to meet your business needs. Choose the right virtual assistant service for you.",
			"keywords": "",
			"Ogtitles": "Virtual Assistant Services | Tech2Globe: Simplify Your Tasks",
            "Ognames": "Tech2Globe Web Solutions LLP",
            "Ogdescriptions": "Find a comprehensive list of virtual assistant services to meet your business needs. Choose the right virtual assistant service for you.",
            "twittercard": "Virtual Assistant Services | Tech2Globe: Simplify Your Tasks", 
			 "twitterdescription": "Find a comprehensive list of virtual assistant services to meet your business needs. Choose the right virtual assistant service for you.",
            "canonical_url":"https://tech2globe.com/virtual-assistant-services"
		},


			"call-center-monitoring": {
			"pagetitle": "Best Call Center Monitoring Support Services By Tech2globe Expert",
			"description": " We provide global clients with a full range of call center quality monitoring services. We can help you achieve customer service excellence with ease",
			"keywords": "",
			"Ogtitles": "Best Call Center Monitoring Support Services By Tech2globe Expert",
            "Ognames": "Tech2Globe Web Solutions LLP",
            "Ogdescriptions": " We provide global clients with a full range of call center quality monitoring services. We can help you achieve customer service excellence with ease",
            "twittercard": " Best Call Center Monitoring Support Services By Tech2globe Expert", 
			 "twitterdescription": " We provide global clients with a full range of call center quality monitoring services. We can help you achieve customer service excellence with ease",
            "canonical_url":"https://tech2globe.com/call-center-monitoring"
		},

			"call-center-consulting": {
			"pagetitle": "Call Center Consulting Services | Best call center agency",
			"description": "We are a leading offshore call center consulting provider, with our 14 years of experience offering a wide range of services to international clients ",
			"keywords": "",
			"Ogtitles": "Call Center Consulting Services | Best call center agency",
            "Ognames": "Tech2Globe Web Solutions LLP",
            "Ogdescriptions": "We are a leading offshore call center consulting provider, with our 14 years of experience offering a wide range of services to international clients ",
            "twittercard": "Call Center Consulting Services | Best call center agency", 
			 "twitterdescription": "We are a leading offshore call center consulting provider, with our 14 years of experience offering a wide range of services to international clients ",
            "canonical_url":"https://tech2globe.com/call-center-consulting"
		},


			"super-agent-services": {
			"pagetitle": "Top Super Agent Services | outsource super agent services",
			"description": "Our super agent services offer decades of experience in both inbound and outbound call center services. We have a team of specialists who help you with the exact solution",
			"keywords": "",
			"Ogtitles": "Top Super Agent Services | outsource super agent services",
            "Ognames": "Tech2Globe Web Solutions LLP",
            "Ogdescriptions": "Our super agent services offer decades of experience in both inbound and outbound call center services. We have a team of specialists who help you with the exact solution",
            "twittercard": "Top Super Agent Services | outsource super agent services", 
			 "twitterdescription": "Our super agent services offer decades of experience in both inbound and outbound call center services. We have a team of specialists who help you with the exact solution",
            "canonical_url":"https://tech2globe.com/super-agent-services"
		},



			"offline-data-entry-services": {
			"pagetitle": "Outsource Offline Data Entry Services | Offline Data Entry Company ",
			"description": "Tech2Globe offers the widest range of offline data entry services to businesses in all major languages - French, German & many more. Get free consultation today. ",
			"keywords": "Offline data entry services, Offline data entry company, Outsource offline data entry services.",
			"Ogtitles": "Outsource Offline Data Entry Services | Offline Data Entry Company",
            "Ognames": "",
            "Ogdescriptions": "Tech2Globe offers the widest range of offline data entry services to businesses in all major languages - French, German & many more. Get free consultation today.",
            "twittercard": "Outsource Offline Data Entry Services | Offline Data Entry Company", 
			 "twitterdescription": "Tech2Globe offers the widest range of offline data entry services to businesses in all major languages - French, German & many more. Get free consultation today.",
            "canonical_url":"https://tech2globe.com/offline-data-entry-services"
		},

			"online-data-entry-services": {
			"pagetitle": "Outsource Online Data Entry Services | Data entry services in India",
			"description": "Tech2Globe is a pioneer in giving quality online data entry services. Our exceptionally trained specialists can assist you with finishing all your data section within time. ",
			"keywords": "Online data entry services, Outsource online data entry services, Online data entry services company, Data entry services in India.",
			"Ogtitles": "Outsource Online Data Entry Services | Data entry services in India",
            "Ognames": "",
            "Ogdescriptions": "Tech2Globe is a pioneer in giving quality online data entry services. Our exceptionally trained specialists can assist you with finishing all your data section within time.",
            "twittercard": "Outsource Online Data Entry Services | Data entry services in India", 
			 "twitterdescription": "Tech2Globe is a pioneer in giving quality online data entry services. Our exceptionally trained specialists can assist you with finishing all your data section within time.",
            "canonical_url":"https://tech2globe.com/online-data-entry-services"
		},

			"pdf-data-entry-services": {
			"pagetitle": "Outsource PDF Data Entry Services | PDF Conversion Services ",
			"description": "Tech2Globe has expertise in giving PDF data entry services at 60% cutting rates, with having huge experience. we offer dependable, financially savvy PDF data entry services.",
			"keywords": "PDF Data Entry Services, Outsource PDF data entry services, PDF conversion services, PDF to excel data entry services.",
			"Ogtitles": "Outsource PDF Data Entry Services |PDF Conversion Services- Tech2globe",
            "Ognames": "",
            "Ogdescriptions": "Tech2Globe has expertise in giving PDF data entry services at 60% cutting rates, with having huge experience. we offer dependable, financially savvy PDF data entry services.",
            "twittercard": "Outsource PDF Data Entry Services |PDF Conversion Services- Tech2globe", 
			 "twitterdescription": "Tech2Globe has expertise in giving PDF data entry services at 60% cutting rates, with having huge experience. we offer dependable, financially savvy PDF data entry services.",
            "canonical_url":"https://tech2globe.com/pdf-data-entry-services"
		},

			"product-data-entry-services": {
			"pagetitle": "Outsource E-commerce Product Data Entry Services | Tech2Globe",
			"description": "Experts at Tech2Globe are knowledgeable in offering exact and precise product data entry services to the various eCommerce retailers. Contact us today to get free consultation.",
			"keywords": "Product data entry services, Product data upload services, Data product entry services, Product data entry company, Product data entry specialists.",
			"Ogtitles": "Outsource E-commerce Product Data Entry Services | Tech2Globe",
            "Ognames": "",
            "Ogdescriptions": "Experts at Tech2Globe are knowledgeable in offering exact and precise product data entry services to the various eCommerce retailers. Contact us today to get free consultation.",
            "twittercard": "Outsource E-commerce Product Data Entry Services | Tech2Globe", 
			 "twitterdescription": "Experts at Tech2Globe are knowledgeable in offering exact and precise product data entry services to the various eCommerce retailers. Contact us today to get free consultation.",
            "canonical_url":"https://tech2globe.com/product-data-entry-services"
		},

			"yellow-and-white-pages-data-entry-services": {
			"pagetitle": "Yellow pages data entry services | White pages data entry services",
			"description": "Get professional yellow and white pages data entry services at lower cost with Tech2Globe, with the help of tools like Adobe reader, Prizmo & more. Get free consultation today. ",
			"keywords": "Yellow pages data entry services, White pages data entry services, Outsource White pages data entry services.",
			"Ogtitles": "Yellow pages data entry services | White pages data entry services",
            "Ognames": "",
            "Ogdescriptions": "Get professional yellow and white pages data entry services at lower cost with Tech2Globe, with the help of tools like Adobe reader, Prizmo & more. Get free consultation today.",
            "twittercard": "Yellow pages data entry services | White pages data entry services", 
			 "twitterdescription": "Get professional yellow and white pages data entry services at lower cost with Tech2Globe, with the help of tools like Adobe reader, Prizmo & more. Get free consultation today.",
            "canonical_url":"https://tech2globe.com/yellow-and-white-pages-data-entry-service"
		},

			"audio-transcription-services": {
			"pagetitle": "Outsource Audio Transcription Services | Video Transcription Services",
			"description": "Our audio transcription services can translate with 100% accuracy. We have built three-step transcription process to guarantee that you get a superior quality transcription.",
			"keywords": "Audio and Video Transcription Services, Audio transcription services, Outsource audio transcription services, Audio/video transcription services.",
			"Ogtitles": "",
            "Ognames": "",
            "Ogdescriptions": "",
            "twittercard": "", 
			 "twitterdescription": "",
            "canonical_url":"https://tech2globe.com/audio-transcription-services"
		},

			"transcription-services": {
			"pagetitle": "Outsource Transcription Services | Professional Transcription Services",
			"description": "Our professional transcription services come up with 99% accuracy guarantee for good audio. Get high quality-services at affordable rates with quick turnaround time with us.",
			"keywords": "Transcription Services, Online transcription services, Transcription services online, Outsource transcription services, Best transcription services, Professional transcription services.",
			"Ogtitles": "Outsource Transcription Services | Professional Transcription Services",
            "Ognames": "",
            "Ogdescriptions": "Our professional transcription services come up with 99% accuracy guarantee for good audio. Get high quality-services at affordable rates with quick turnaround time with us.",
            "twittercard": "Outsource Transcription Services | Professional Transcription Services", 
			 "twitterdescription": "Our professional transcription services come up with 99% accuracy guarantee for good audio. Get high quality-services at affordable rates with quick turnaround time with us.",
            "canonical_url":"https://tech2globe.com/transcription-services"
		
		},

			"youtube-transcription-services": {
			"pagetitle": "Outsource YouTube Transcription Services | Video Transcription Service",
			"description": "We at Tech2Globe utilize the professional YouTube transcription services to guarantee that you get precise transcription services. Contact us today for free consultation.",
			"keywords": "YouTube Video Transcription Services, Outsource YouTube Transcription Services, Video transcription services, Professional YouTube Audio/Video Transcription Services, High quality video transcription services.",
			"Ogtitles": "Outsource YouTube Transcription Services | Video Transcription Service",
            "Ognames": "",
            "Ogdescriptions": "We at Tech2Globe utilize the professional YouTube transcription services to guarantee that you get precise transcription services. Contact us today for free consultation.",
            "twittercard": "Outsource YouTube Transcription Services | Video Transcription Service", 
			 "twitterdescription": "We at Tech2Globe utilize the professional YouTube transcription services to guarantee that you get precise transcription services. Contact us today for free consultation.",
            "canonical_url":"https://tech2globe.com/youtube-transcription-services"
		},

			"sales-support-services": {
			"pagetitle": "Sales Support Service Provider Company | Tech2Globe",
			"description": "We give end-to-end Outsource Sales Support Services directly from finding contact to lead age. Our masters will help you in building your sales with gainful qualified leads.",
			"keywords": "Sales Support Services, Sales and marketing support services, Sale support service provider company, Marketing and sales support services.",
			"Ogtitles": "Sales Support Service Provider Company | Tech2Globe",
            "Ognames": "",
            "Ogdescriptions": "We give end-to-end Outsource Sales Support Services directly from finding contact to lead age. Our masters will help you in building your sales with gainful qualified leads.",
            "twittercard": "Sales Support Service Provider Company | Tech2Globe", 
			 "twitterdescription": "We give end-to-end Outsource Sales Support Services directly from finding contact to lead age. Our masters will help you in building your sales with gainful qualified leads.",
            "canonical_url":"https://tech2globe.com/sales-support-services"
		},

			"custom-list-building-services": {
			"pagetitle": "Custom List Building Services | B2B list building service | Tech2Globe",
			"description": "Tech2Globe offers you the most ideal method of streamlining your list enhancement initiative with a particular Custom List Building Services. With our B2B list building services, you can boost your marketing efforts & reduce your customer acquisition cost.",
			"keywords": "Custom List Building Services, B2B list building services, List building company.",
			"Ogtitles": "Custom List Building Services | B2B list building service | Tech2Globe",
            "Ognames": "",
            "Ogdescriptions": "Tech2Globe offers you the most ideal method of streamlining your list enhancement initiative with a particular Custom List Building Services. With our B2B list building services, you can boost your marketing efforts & reduce your customer acquisition cost.",
            "twittercard": "Custom List Building Services | B2B list building service | Tech2Globe", 
			 "twitterdescription": "Tech2Globe offers you the most ideal method of streamlining your list enhancement initiative with a particular Custom List Building Services. With our B2B list building services, you can boost your marketing efforts & reduce your customer acquisition cost.",
            "canonical_url":"https://tech2globe.com/custom-list-building-services"
		},

			"data-marketing-services": {
			"pagetitle": "Outsource Data Marketing Services | Database Marketing Services",
			"description": "Our Data Marketing Services offer complete answers for assisting you with accomplishing noteworthy market immersion. Build up your present customer relationships with Tech2Globe.",
			"keywords": "Data marketing services, Outsource data marketing services, Database marketing services.",
			"Ogtitles": "Outsource Data Marketing Services | Database Marketing Services",
            "Ognames": "",
            "Ogdescriptions": "Our Data Marketing Services offer complete answers for assisting you with accomplishing noteworthy market immersion. Build up your present customer relationships with Tech2Globe.",
            "twittercard": "Outsource Data Marketing Services | Database Marketing Services", 
			 "twitterdescription": "Tech2Globe offers you the most ideal method of streamlining your list enhancement initiative with a particular Custom List Building Services. With our B2B list building services, you can boost your marketing efforts & reduce your customer acquisition cost.",
            "canonical_url":"https://tech2globe.com/data-marketing-services"
			
		},

			"event-data-management-services": {
			"pagetitle": "Event Data Management services | Event Marketing Services | Tech2Globe",
			"description": "Tech2Globe offers you a total range of Event Data Management Services for your marketing & limited time events including shows & meetings, speaking events & more.",
			"keywords": "Event Data Management services, Trade Show Promotion Services, Event Marketing Services.",
			"Ogtitles": "Event Data Management services | Event Marketing Services | Tech2Globe",
            "Ognames": "",
            "Ogdescriptions": "Tech2Globe offers you a total range of Event Data Management Services for your marketing & limited time events including shows & meetings, speaking events & more.",
            "twittercard": "Event Data Management services | Event Marketing Services | Tech2Globe", 
			 "twitterdescription": "Tech2Globe offers you a total range of Event Data Management Services for your marketing & limited time events including shows & meetings, speaking events & more.",
            "canonical_url":"https://tech2globe.com/event-data-management-services"
		},

			"insurance-data-collection-services": {
			"pagetitle": "Outsource Insurance Data Collection Services Company - Tech2globe",
			"description": "Outsource insurance data collection services from Tech2globe that offers top-quality insurance claims, medical claims, health insurance, life insurance, and vehicle insurance data collection services at the lowest prices.",
			"keywords": "Insurance Claims Data Entry Services, Outsource insurance claims data entry services, Insurance data entry services, Medical claims data entry services, Medical and insurance claims data entry services.",
			"Ogtitles": "Outsource Insurance Data Collection Services Company - Tech2globe",
            "Ognames": "",
            "Ogdescriptions": "Outsource insurance data collection services from Tech2globe that offers top-quality insurance claims, medical claims, health insurance, life insurance, and vehicle insurance data collection services at the lowest prices.",
            "twittercard": "Outsource Insurance Data Collection Services Company - Tech2globe", 
			 "twitterdescription": "Outsource insurance data collection services from Tech2globe that offers top-quality insurance claims, medical claims, health insurance, life insurance, and vehicle insurance data collection services at the lowest prices.",
            "canonical_url":"https://tech2globe.com/insurance-data-collection-services"
		},

		"lead-qualification-services": {
			"pagetitle": "Outsourcing Lead Qualification Services | Sales Lead Qualification",
			"description": "Outsource Lead Qualification Services which will help in discovering qualifying prospects as well as help our customers in building an enduring bond with the leads. Call us today. ",
			"keywords": "Outsourcing lead qualification services, Lead Qualification strategy, Lead qualification services cost, Sales lead qualification.",
			"Ogtitles": "Outsourcing Lead Qualification Services | Sales Lead Qualification",
            "Ognames": "",
            "Ogdescriptions": "Outsource Lead Qualification Services which will help in discovering qualifying prospects as well as help our customers in building an enduring bond with the leads. Call us today.",
            "twittercard": "Outsourcing Lead Qualification Services | Sales Lead Qualification", 
			 "twitterdescription": "Outsource Lead Qualification Services which will help in discovering qualifying prospects as well as help our customers in building an enduring bond with the leads. Call us today.",
            "canonical_url":"https://tech2globe.com/lead-qualification-services"
		},

		"product-research-services": {
			"pagetitle": "Ecommerce Product Research Services | Market Research - Tech2globe",
			"description": "Tech2globe specialists use new product launch research to give end-to-end Product Research Services, directly from product launch research through to product packaging. Contact us now.",
			"keywords": "Product research services, Ecommerce product research services, Market research services.",
			"Ogtitles": "Ecommerce Product Research Services | Market Research - Tech2globe",
            "Ognames": "",
            "Ogdescriptions": "Tech2globe specialists use new product launch research to give end-to-end Product Research Services, directly from product launch research through to product packaging. Contact us now.",
            "twittercard": "Ecommerce Product Research Services | Market Research - Tech2globe", 
			 "twitterdescription": "Tech2globe specialists use new product launch research to give end-to-end Product Research Services, directly from product launch research through to product packaging. Contact us now.",
            "canonical_url":"https://tech2globe.com/product-research-services"
		},

		"web-scraping-services": {
			"pagetitle": "Expert Data Extraction Services for Efficient Insights | Tech2Globe",
			"description": "Need professional data extraction services? We have got you covered! Extract valuable data efficiently with our top-notch data extraction solutions.",
			"Ogdescriptions": "Need professional data extraction services? We have got you covered! Extract valuable data efficiently with our top-notch data extraction solutions.",
            "twittercard": "Expert Data Extraction Services for Efficient Insights | Tech2Globe", 
			"Ogtitles": "Expert Data Extraction Services for Efficient Insights | Tech2Globe",
            "twitterdescription": "Need professional data extraction services? We have got you covered! Extract valuable data efficiently with our top-notch data extraction solutions.",
			"keywords": "Web Scraping Services, Web crawling and scraping services, Data scraping services, Web scrapping experts.",
			"canonical_url":"https://tech2globe.com/data-extraction-services"
		},

		"catalog-processing-services": {
			"pagetitle": "Outsource Catalog Processing Services Company | Tech2Globe",
			"description": "Tech2Globe Provides the Catalog Processing Services directly from the most fundamental ecommerce product catalog processing outsourcing services like product data entry & more.",
			"keywords": "Catalog Processing Services, Outsource catalog processing services,eCommerce Product Catalog Processing Outsourcing Services,Outsource catalog processing services company, Online catalog processing services, ecommerce catalog processing services, Outsource eCommerce Product Catalog Processing Services.",
			"Ogtitles": "Outsource Catalog Processing Services Company | Tech2Globe",
            "Ognames": "",
            "Ogdescriptions": "Tech2Globe Provides the Catalog Processing Services directly from the most fundamental ecommerce product catalog processing outsourcing services like product data entry & more.",
            "twittercard": "Outsource Catalog Processing Services Company | Tech2Globe", 
			 "twitterdescription": "Tech2Globe Provides the Catalog Processing Services directly from the most fundamental ecommerce product catalog processing outsourcing services like product data entry & more.",
            "canonical_url":"https://tech2globe.com/catalog-processing-services"
		},

		"data-extraction-services": {
			"pagetitle": "Expert Data Extraction Services for Efficient Insights | Tech2Globe",
			"description": "Need professional data extraction services? We have got you covered! Extract valuable data efficiently with our top-notch data extraction solutions.",
			"keywords": "Data Extraction Services, Outsource data extraction services, Data extraction company, Data extraction solutions, Web data extraction services, Data extraction service provider company .",
			"Ogtitles": "Expert Data Extraction Services for Efficient Insights | Tech2Globe",
            "Ognames": "",
            "Ogdescriptions": "Need professional data extraction services? We have got you covered! Extract valuable data efficiently with our top-notch data extraction solutions.",
            "twittercard": "Outsource Data Extraction Services | Data Extraction Solutions", 
			 "twitterdescription": "Need professional data extraction services? We have got you covered! Extract valuable data efficiently with our top-notch data extraction solutions.",          
			"canonical_url":"https://tech2globe.com/data-extraction-services"
		},

		"document-processing-services": {
			"pagetitle": "Outsource Document Processing Services for Efficient Solutions | Tech2Globe",
			"description": "Discover the power of document processing and intelligent document processing solutions. Streamline your workflows and increase productivity effortlessly.",
			"keywords": "Document Processing Services, Document processing services and solutions, Legal document processing services, Outsource document processing services, Document processing solutions, Outsourcing Document Processing Services, Document processing company.",
			"Ogtitles": "Outsource Document Processing Services for Efficient Solutions | Tech2Globe",
            "Ognames": "",
            "Ogdescriptions": " Discover the power of document processing and intelligent document processing solutions. Streamline your workflows and increase productivity effortlessly.",
            "twittercard": "Outsource Document Processing Services | Document Processing Solutions", 
			 "twitterdescription": " Discover the power of document processing and intelligent document processing solutions. Streamline your workflows and increase productivity effortlessly.",
			"canonical_url":"https://tech2globe.com/document-processing-services"
		},

		"forms-processing-services": {
			"pagetitle": "Outsource Forms Processing Services | Forms Processing Experts",
			"description": "At Tech2Globe, we offer precise and dependable Forms Processing Services, which can enable your association to refute human errors via mechanizing the data collection.",
			"keywords": "Forms Processing Services, Outsource Forms Processing Services, Affordable Forms Processing Services, Online Forms Processing Services, Forms Processing Services provider company, Forms Processing Services Company.",
			"Ogtitles": "Outsource Forms Processing Services | Forms Processing Experts",
            "Ognames": "",
            "Ogdescriptions": "At Tech2Globe, we offer precise and dependable Forms Processing Services, which can enable your association to refute human errors via mechanizing the data collection.",
            "twittercard": "Outsource Forms Processing Services | Forms Processing Experts", 
			 "twitterdescription": "At Tech2Globe, we offer precise and dependable Forms Processing Services, which can enable your association to refute human errors via mechanizing the data collection.",
            "canonical_url":"https://tech2globe.com/forms-processing-services"
		},

		"insurance-claims-processing-services": {
			"pagetitle": "Efficient Insurance Claim Processing Service | Tech2Globe ",
			"description": "Get hassle-free insurance claim processing services for quick and efficient settlements. Simplify your insurance claims with our expert assistance.",
			"keywords": "Insurance Claims Processing Services, Outsource Insurance Claims Processing Services, insurance claims processing solutions, Outsource Medical Insurance Claims Processing Services, Insurance Claims Processing Outsourcing, Clam processing services, Insurance claim management services.",
			"Ogtitles": "Efficient Insurance Claim Processing Service | Tech2Globe",
            "Ognames": "",
            "Ogdescriptions": "Get hassle-free insurance claim processing services for quick and efficient settlements. Simplify your insurance claims with our expert assistance.",
            "twittercard": "Efficient Insurance Claim Processing Service | Tech2Globe", 
			 "twitterdescription": "Get hassle-free insurance claim processing services for quick and efficient settlements. Simplify your insurance claims with our expert assistance.",          
			"canonical_url":"https://tech2globe.com/insurance-claims-processing-services"
		},

		"invoice-processing-services": {
			"pagetitle": "Outsource Invoice Processing Services | Automated Invoice Processing",
			"description": "Comprehend the significance of invoicing services for the success of your business. We offer help to make it simpler for you to Outsource Invoice Processing Services to us. ",
			"keywords": "Accurate & Fast Invoice Processing Services, Outsource Invoice Processing Services, digital invoice processing services, outsourcing invoice processing services, Invoice Processing Services India, Invoice Automation and Invoice Processing Solution, Automated Invoice Processing.",
			"Ogtitles": "Outsource Invoice Processing Services | Automated Invoice Processing",
            "Ognames": "",
            "Ogdescriptions": "Comprehend the significance of invoicing services for the success of your business. We offer help to make it simpler for you to Outsource Invoice Processing Services to us.",
            "twittercard": "Outsource Invoice Processing Services | Automated Invoice Processing", 
			 "twitterdescription": "Comprehend the significance of invoicing services for the success of your business. We offer help to make it simpler for you to Outsource Invoice Processing Services to us.",
            "canonical_url":"https://tech2globe.com/invoice-processing-services"
		},

		"survey-forms-processing": {
			"pagetitle": "Outsource Survey Forms Processing Services | Forms Data Processing ",
			"description": "Tech2Globe gives productive Survey Data Processing Services to enable organizations to catch, process, and manage research data precisely. Get a free consultation today with us. ",
			"keywords": "Survey Forms Processing Services, Outsource Survey Forms Processing Services, Form and Survey Processing Services, Survey Processing Services, Form data processing services, Survey Forms Processing in Delhi.",
			"Ogtitles": "Outsource Survey Forms Processing Services | Forms Data Processing",
            "Ognames": "",
            "Ogdescriptions": "Tech2Globe gives productive Survey Data Processing Services to enable organizations to catch, process, and manage research data precisely. Get a free consultation today with us.",
            "twittercard": "Outsource Survey Forms Processing Services | Forms Data Processing", 
			 "twitterdescription": "Tech2Globe gives productive Survey Data Processing Services to enable organizations to catch, process, and manage research data precisely. Get a free consultation today with us.",
            "canonical_url":"https://tech2globe.com/survey-forms-processing"
		},

		"business-research-services": {
			"pagetitle": "Business Research Services | Business Research Specialist | Tech2Globe",
			"description": "Contact Tech2Globe to find out about full scope of Business Research Services. Our research and analysis team works away at the task according to your directions. Call us today. ",
			"keywords": "Business Research services, Business Research company, business research specialists, business research experts.",
			"Ogtitles": "Business Research Services | Business Research Specialist | Tech2Globe",
            "Ognames": "",
            "Ogdescriptions": "Contact Tech2Globe to find out about full scope of Business Research Services. Our research and analysis team works away at the task according to your directions. Call us today.",
            "twittercard": "Business Research Services | Business Research Specialist | Tech2Globe", 
			 "twitterdescription": "Contact Tech2Globe to find out about full scope of Business Research Services. Our research and analysis team works away at the task according to your directions. Call us today.",
            "canonical_url":"https://tech2globe.com/business-research-services"
		},

		"dashboard-design-services": {
			"pagetitle": "Dashboard designing services | Dashboard designers | Tech2Globe",
			"description": "Tech2globe Dashboard Designing services make a compact dashboard with perfect to expose group basic information and maintain a superior business. Get a free consultation today with us. ",
			"keywords": "Dashboard design services, Dashboard designing services, Dashboard designers .",
			"Ogtitles": "Dashboard designing services | Dashboard designers | Tech2Globe",
            "Ognames": "",
            "Ogdescriptions": "Tech2globe Dashboard Designing services make a compact dashboard with perfect to expose group basic information and maintain a superior business. Get a free consultation today with us.",
            "twittercard": "Dashboard designing services | Dashboard designers | Tech2Globe", 
			 "twitterdescription": "Tech2globe Dashboard Designing services make a compact dashboard with perfect to expose group basic information and maintain a superior business. Get a free consultation today with us.",
            "canonical_url":"https://tech2globe.com/dashboard-design-services"
		},

		"donor-research-data-analytics-services": {
			"pagetitle": "Donor Research & Data Analytics Services | Donor Research Services",
			"description": "Get Donor Research & Data Analytics Services with Tech2Globe, we have donor analysis experts who provides fast and convenient donor data transfer for thousands of clients worldwide. ",
			"keywords": "Donor Research & Data Analytics Services, Donor Research Services.",
			"Ogtitles": "Donor Research & Data Analytics Services | Donor Research Services",
            "Ognames": "",
            "Ogdescriptions": "Get Donor Research & Data Analytics Services with Tech2Globe, we have donor analysis experts who provides fast and convenient donor data transfer for thousands of clients worldwide.",
            "twittercard": "Donor Research & Data Analytics Services | Donor Research Services", 
			 "twitterdescription": "Get Donor Research & Data Analytics Services with Tech2Globe, we have donor analysis experts who provides fast and convenient donor data transfer for thousands of clients worldwide.",
            "canonical_url":"https://tech2globe.com/data-analytics-services"
		},

		"e-commerce-support-services": {
			"pagetitle": "E-Commerce Support Services | E-Commerce support specialists",
			"description": "Outsource eCommerce support services tasks to Tech2Globe. our eCommerce experts ensure you get sufficient opportunity to sale with the business tasks. Call us today.",
			"keywords": "E-Commerce Support Services, eCommerce Website Support Specialist, E-Commerce support team, E-Commerce support specialists, eCommerce Website Support experts, eCommerce maintenance services.",
			"Ogtitles": "E-Commerce Support Services | E-Commerce support specialists",
            "Ognames": "",
            "Ogdescriptions": "Outsource eCommerce support services tasks to Tech2Globe. Our eCommerce experts ensure you get sufficient opportunity to sale with the business tasks. Call us today.",
            "twittercard": "E-Commerce Support Services | E-Commerce support specialists", 
			 "twitterdescription": "Outsource eCommerce support services tasks to Tech2Globe. Our eCommerce experts ensure you get sufficient opportunity to sale with the business tasks. Call us today.",
            "canonical_url":"https://tech2globe.com/e-commerce-support-services"
		},

		"microsoft-power-bi-consulting-services": {
			"pagetitle": "Microsoft Power BI Consulting Services | Power BI consultants & Expert",
			"description": "Our Microsoft Power BI Consulting Services offer to start to finish business insight arrangement utilizing Power BI including dashboards, data management & more.",
			"keywords": "Microsoft Power BI Consulting Services, Microsoft Power BI consultants, Microsoft Power BI Solution, Power BI consulting services, Power BI consultants & Expert, Microsoft power BI partner.",
			"Ogtitles": "Microsoft Power BI Consulting Services | Power BI consultants & Expert",
            "Ognames": "",
            "Ogdescriptions": "Our Microsoft Power BI Consulting Services offer to start to finish business insight arrangement utilizing Power BI including dashboards, data management & more.",
            "twittercard": "Microsoft Power BI Consulting Services | Power BI consultants & Expert", 
			 "twitterdescription": "Our Microsoft Power BI Consulting Services offer to start to finish business insight arrangement utilizing Power BI including dashboards, data management & more.",
            "canonical_url":"https://tech2globe.com/microsoft-power-bi-consulting-services"
		},
			
		"reporting-and-analysis-services": {
			"pagetitle": "Data Reporting and Analysis Services | Data Analysis services ",
			"description": "Our experts help directly from gathering basic information to analysing it, recognizing sales & revealing opportunities for development with Data Reporting & Analysis Services. ",
			"keywords": "Data Reporting and Analysis Services, Data reporting services, Data Analysis services.",
			"Ogtitles": "Data Reporting and Analysis Services | Data Analysis services",
            "Ognames": "",
            "Ogdescriptions": "Our experts help directly from gathering basic information to analysing it, recognizing sales & revealing opportunities for development with Data Reporting & Analysis Services.",
            "twittercard": "Data Reporting and Analysis Services | Data Analysis services", 
			 "twitterdescription": "Our experts help directly from gathering basic information to analysing it, recognizing sales & revealing opportunities for development with Data Reporting & Analysis Services.",
            "canonical_url":"https://tech2globe.com/reporting-and-analysis-services"
		},	

		"automation-through-vba-macros-services": {
			"pagetitle": "Automation Through VBA Macros Services | VBA Services - Tech2Globe",
			"description": "Get Automation Through VBA Macros Services with Tech2Globe. Our VBA consultants will utilize VBA code and automation practices to assist you with expanding your productivity.",
			"keywords": "Automation Through VBA Macros Services, VBA macros services .",
			"Ogtitles": "Automation Through VBA Macros Services | VBA Services - Tech2Globe",
            "Ognames": "",
            "Ogdescriptions": "Get Automation Through VBA Macros Services with Tech2Globe. Our VBA consultants will utilize VBA code and automation practices to assist you with expanding your productivity.",
            "twittercard": "Automation Through VBA Macros Services | VBA Services - Tech2Globe", 
			 "twitterdescription": "Get Automation Through VBA Macros Services with Tech2Globe. Our VBA consultants will utilize VBA code and automation practices to assist you with expanding your productivity.",
            "canonical_url":"https://tech2globe.com/automation-through-vba-macros-services"
		},	

		"healthcare-data-mining-services": {
			"pagetitle": "Outsource Healthcare Data Mining Services | Data Entry Experts",
			"description": "Our end to end Healthcare Data Mining Services empowers human services suppliers to improve client relationship the board and offer best treatment to their patients.",
			"keywords": "Healthcare Data Mining Services, Complete healthcare data mining services, Remote/offshore healthcare data mining services, Healthcare Data Mining Services providers, End to end healthcare data mining services, Hire healthcare data mining experts, Outsource healthcare data mining services.",
			"Ogtitles": "Outsource Healthcare Data Mining Services | Data Entry Experts",
            "Ognames": "",
            "Ogdescriptions": "Our end to end Healthcare Data Mining Services empowers human services suppliers to improve client relationship the board and offer best treatment to their patients.",
            "twittercard": "Outsource Healthcare Data Mining Services | Data Entry Experts", 
			 "twitterdescription": "Our end to end Healthcare Data Mining Services empowers human services suppliers to improve client relationship the board and offer best treatment to their patients.",
            "canonical_url":"https://tech2globe.com/data-mining-services"
			
		},	

		"social-media-research-services": {
			"pagetitle": "Social Media Research Services | Social media Research Company",
			"description": "By Outsourcing Social Media Research Services you can spare more than 65% on working expenses. Our web research expert’s analysis your social channels to get helpful insights.",
			"keywords": "Social Media Research Services, Outsourcing social media research services, Remote/offshore Social media research services, Social media research and insight services, Social media Research Company.",
			"Ogtitles": "Social Media Research Services | Social media Research Company",
            "Ognames": "",
            "Ogdescriptions": "By Outsourcing Social Media Research Services you can spare more than 65% on working expenses. Our web research expert’s analysis your social channels to get helpful insights.",
            "twittercard": "Social Media Research Services | Social media Research Company", 
			 "twitterdescription": "By Outsourcing Social Media Research Services you can spare more than 65% on working expenses. Our web research expert’s analysis your social channels to get helpful insights.",
            "canonical_url":"https://tech2globe.com/social-media-research-services"
		},

		"web-research-services": {
			"pagetitle": "Outsource Web Research Services | Customized Web Research Solutions",
			"description": " Tech2Globe offers a wide range of customized web research services to various industry verticals and specialties including lawful, real estate, fund, & banking & more.",
			"keywords": "Web Research Services, Customized web research solutions, Online web researches services, Outsource web research services, Internet research services, Outsource internet research services, Internet research company.",
			"Ogtitles": "Outsource Web Research Services | Customized Web Research Solutions",
            "Ognames": "Tech2Globe Web Solutions LLP",
            "Ogdescriptions": " Tech2Globe offers a wide range of customized web research services to various industry verticals and specialties including lawful, real estate, fund, & banking & more.",
            "twittercard": "Outsource Web Research Services | Customized Web Research Solutions", 
			 "twitterdescription": " Tech2Globe offers a wide range of customized web research services to various industry verticals and specialties including lawful, real estate, fund, & banking & more.",
            "canonical_url":"https://tech2globe.com/web-research-services"
		},
		
		
			"social-media-optimization": {
			"pagetitle": "#1 Social Media Optimization Company For Branding | Tech2globe",
			"description": "Are you looking to work with a top-rated social media optimization company? Tech2globe helps to boost customers’ businesses effectively on various social networks.",
			"keywords": "Social Media Optimization Services, Social Media Optimization Agency, SMO Services Company, social media optimization company, Professional SMO Services, Top Social Media Optimization Agency, Social Media Optimization",
			"Ogtitles": "#1 Social Media Optimization Company For Branding | Tech2globe",
			"Ognames": "Tech2Globe web Solutions LLP",
			"Ogdescriptions": "Are you looking to work with a top-rated social media optimization company? Tech2globe helps to boost customers’ businesses effectively on various social networks.",
			"twittercard": "Tech2Globe", 
            "twitterdescription": "Are you looking to work with a top-rated social media optimization company? Tech2globe helps to boost customers’ businesses effectively on various social networks.",
			"canonical_url":"https://tech2globe.com/social-media-optimization"
		},
			
		
		"influencer-marketing-agency": {
			"pagetitle": "#1 Influencer Marketing Agency | Influencer Marketing Services",
			"description": "Tech2globe is an influencer marketing agency and the most trusted platform connecting brands with influencers for better sales. Consult our influencer specialists today!",
			"keywords": " Influencer Marketing Agency in India, Influencer marketing company, Influencer Marketing Companies In India,  Influencer agency in India.",
			"Ogtitles": "#1 Influencer Marketing Agency | Influencer Marketing Services",
            "Ognames": "",
            "Ogdescriptions": "Tech2globe is an influencer marketing agency and the most trusted platform connecting brands with influencers for better sales. Consult our influencer specialists today!",
            "twittercard": "#1 Influencer Marketing Agency | Influencer Marketing Services", 
			 "twitterdescription": "Tech2globe is an influencer marketing agency and the most trusted platform connecting brands with influencers for better sales. Consult our influencer specialists today!",			
            "canonical_url":"https://tech2globe.com/influencer-marketing-agency"
		},
		
		
		"WooCommerce-development-services": {
			"pagetitle": "WooCommerce Development Services | WooCommerce Website Development -Tech2Globe",
			"description": "Tech2Globe is one of the best Shopify development companies in India, helping to drive top-line revenue growth for our clients. In addition, we offer data management, ERP solutions, photo editing, online marketing, and eCommerce solutions.",
			"keywords": "WooCommerce Development Services, WooCommerce development Company",
			"Ogtitles": "WooCommerce Development Services | WooCommerce Website Development -Tech2Globe",
            "Ognames": "Tech2Globe web Solutions LLP",
            "Ogdescriptions": "Tech2Globe is one of the best Shopify development companies in India, helping to drive top-line revenue growth for our clients. In addition, we offer data management, ERP solutions, photo editing, online marketing, and eCommerce solutions.",
            "twittercard": "WooCommerce Development Services | WooCommerce development Company", 
			 "twitterdescription": "Tech2Globe is one of the best Shopify development companies in India, helping to drive top-line revenue growth for our clients. In addition, we offer data management, ERP solutions, photo editing, online marketing, and eCommerce solutions.",
            "canonical_url":"https://tech2globe.com/WooCommerce-development-services"
		},
		
		"amazon-sell-global-services": {
			"pagetitle": "Amazon Global Selling | International Selling Strategy | Tech2globe",
			"description": "If Amazon Global Selling is right for you. Tech2globe is the best Amazon Global Selling Solutions Providers Network. We help Amazon Sellers with international shipping, and more!",
			"keywords": "Amazon Sell Global Services, Amazon Global Selling, Selling Internationally On Amazon, Amazon Sell, Amazon Global",
			"Ogtitles": "Amazon Global Selling | International Selling Strategy | Tech2globe",
            "Ognames": "Tech2Globe web Solutions LLP",
            "Ogdescriptions": "If Amazon Global Selling is right for you. Tech2globe is the best Amazon Global Selling Solutions Providers Network. We help Amazon Sellers with international shipping, and more!",
            "twittercard": "Amazon Global Selling | International Selling Strategy | Tech2globe", 
			 "twitterdescription": "If Amazon Global Selling is right for you. Tech2globe is the best Amazon Global Selling Solutions Providers Network. We help Amazon Sellers with international shipping, and more!",
            "canonical_url":"https://tech2globe.com/amazon-sell-global-services"
		},
		"amazon-sales-boost-strategy": {
			"pagetitle": "Increase sales on amazon | Amazon sales boost strategy - Tech2globe",
			"description": "",
			"keywords": "increase sales on amazon, Amazon sales boost strategy, amazon selling tips, increase fba sales, increase sales on amazon",
			"Ogtitles": "Increase sales on amazon | Amazon sales boost strategy - Tech2globe",
            "Ognames": "",
            "Ogdescriptions": "",
            "twittercard": "", 
			 "twitterdescription": "",
            "canonical_url":"https://tech2globe.com/amazon-sales-boost-strategy"
		},
		"seller-reinstatement": {
			"pagetitle": "Amazon Seller Account Reinstatement | Amazon Marketing strategy",
			"description": "Reinstate Your Seller Account, Appeal Seller Reinstatement or suspended account. Call now for a free consultation on the Amazon Appeal Process and Get an Amazon Appeal and get your account reinstated today!",
			"keywords": "Amazon Seller Account Reinstatement, Amazon Marketing strategy, Seller Reinstatement, Amazon seller suspension, Amazon Suspension Consultant, Amazon seller account recovery, Amazon Suspension Consultants",
			"Ogtitles": "Amazon Seller Account Reinstatement | Amazon Marketing strategy",
            "Ognames": "",
            "Ogdescriptions": "Reinstate Your Seller Account, Appeal Seller Reinstatement or suspended account. Call now for a free consultation on the Amazon Appeal Process and Get an Amazon Appeal and get your account reinstated today!",
            "twittercard": "Amazon Seller Account Reinstatement | Amazon Marketing strategy", 
			 "twitterdescription": "Reinstate Your Seller Account, Appeal Seller Reinstatement or suspended account. Call now for a free consultation on the Amazon Appeal Process and Get an Amazon Appeal and get your account reinstated today!",
            "canonical_url":"https://tech2globe.com/amazon-sales-boost-strategy"
		},
		"amazon-review-rating": {
			"pagetitle": "#1 Best Amazon Review And Rating Services - Tech2Globe.com",
			"description": "Are you a seller looking for an Amazon reviews? Check and track reviews and ratings With Tech2globe a best Amazon Review And Rating Services. Learn how to get reviews too.",
			"keywords": "Amazon Review And Rating Services, Amazon Review Services, Amazon Rating Services, Amazon Marketing Services",
			"Ogtitles": "#1 Best Amazon Review And Rating Services - Tech2Globe.com",
            "Ognames": "",
            "Ogdescriptions": "Are you a seller looking for an Amazon reviews? Check and track reviews and ratings With Tech2globe a best Amazon Review And Rating Services. Learn how to get reviews too.",
            "twittercard": "#1 Best Amazon Review And Rating Services - Tech2Globe.com", 
			 "twitterdescription": "Are you a seller looking for an Amazon reviews? Check and track reviews and ratings With Tech2globe a best Amazon Review And Rating Services. Learn how to get reviews too.!",
            "canonical_url":"https://tech2globe.com/amazon-sales-boost-strategy"
		},
		"amazon-product-pricing-strategy": {
			"pagetitle": "Amazon Seller Pricing Strategies | Amazon Product & Pricing Strategy",
			"description": "An optimized Amazon pricing strategy is key to growing your sales on the marketplace. Learn about Amazons dynamic pricing, guidelines, and best practices at Tech2globe.",
			"keywords": "Amazon Seller Pricing Strategies, Amazon Product & Pricing Strategy, Amazon Product Strategy, Amazon Pricing Strategy, Amazon Seller Strategies",
			"Ogtitles": "Amazon Seller Pricing Strategies | Amazon Product & Pricing Strategy",
            "Ognames": "",
            "Ogdescriptions": "An optimized Amazon pricing strategy is key to growing your sales on the marketplace. Learn about Amazon s dynamic pricing, guidelines, and best practices at Tech2globe.",
            "twittercard": "Amazon Seller Pricing Strategies | Amazon Product & Pricing Strategy", 
			 "twitterdescription": "An optimized Amazon pricing strategy is key to growing your sales on the marketplace. Learn about Amazons dynamic pricing, guidelines, and best practices at Tech2globe.",
            "canonical_url":"https://tech2globe.com/amazon-product-pricing-strategy"
		},
		"bigcommerce-product-upload-services": {
			"pagetitle": "Bigcommerce Product Upload Services | Bulk Product Upload - Tech2globe",
			"description": "Tech2globe offer the best Bigcommerce Product Upload Services including product upload, listing, order, inventory management for store maintenance, & more at a very affordable price.",
			"keywords": "Bigcommerce Product Upload Services, Bulk Product Upload, Bigcommerce Product Data Entry Services, Bigcommerce Product Listing, Bigcommerce Bulk Product Listing, Bigcommerce Product Services, Bigcommerce Listing, Bigcommerce Product Importing Services, Bigcommerce Add Products, Bigcommerce Import Products",
			"Ogtitles": "Bigcommerce Product Upload Services | Bulk Product Upload - Tech2globe",
            "Ognames": "",
            "Ogdescriptions": "Tech2globe offer the best Bigcommerce Product Upload Services including product upload, listing, order, inventory management for store maintenance, & more at a very affordable price.",
            "twittercard": "Bigcommerce Product Upload Services | Bulk Product Upload - Tech2globe", 
			 "twitterdescription": "Tech2globe offer the best Bigcommerce Product Upload Services including product upload, listing, order, inventory management for store maintenance, & more at a very affordable price.",
            "canonical_url":"https://tech2globe.com/bigcommerce-product-upload-services"
		},
		"jet-product-upload-services": {
			"pagetitle": "Jet Product Upload Services | Jet Marketplace Product Listing Services",
			"description": "Advance Your Jet.Com Marketplace Strategy With Tech2Globe. get your Jet.com product data entry services on commercial centers rapidly, totally, and without losing quality.",
			"keywords": "Jet Product Upload Services, Jet Marketplace Product Listing Services, Jet Product Upload, Jet.com Product Listing, Jet product data entry services ",
			"Ogtitles": "Jet Product Upload Services | Jet Marketplace Product Listing Services",
            "Ognames": "",
            "Ogdescriptions": "Jet Product Upload Services is the new entrance in the e-commerce market which has picked up so fast that it has already defeated many strong and established marketplaces.",
            "twittercard": "Jet Product Upload Services | Jet Marketplace Product Listing Services", 
			 "twitterdescription": "Jet Product Upload Services is the new entrance in the e-commerce market which has picked up so fast that it has already defeated many strong and established marketplaces.",
            "canonical_url":"https://tech2globe.com/jet-product-upload-services"
		},
		"woocommerce-product-upload-services": {
			"pagetitle": "Shopify Product Upload Services",
			"description": "We are Providing the best Shopify product Upload services & Shopify Product Listing Services At The World Wide Level Our Shopify Experts helps entrepreneurs To manage and grow their online stores And Business",
			"keywords": "woocommerce data entry, woocommerce back office, woocommerce product upload, woocommerce product data entry, woocommerce product data management",
			"Ogtitles": "Shopify Product Upload Services",
            "Ognames": "Shopify Product Upload Services",
            "Ogdescriptions": "We are Providing the best Shopify product Upload services & Shopify Product Listing Services At The World Wide Level Our Shopify Experts helps entrepreneurs To manage and grow their online stores And Business",
            "twittercard": "Woocommerce Product Upload Services -Product Entry Services Tech2globe", 
			 "twitterdescription": "We are Providing the best Shopify product Upload services & Shopify Product Listing Services At The World Wide Level Our Shopify Experts helps entrepreneurs To manage and grow their online stores And Business",
            "canonical_url":"https://tech2globe.com/woocommerce-product-upload-services"
		},
		"cdiscount-product-upload-services": {
			"pagetitle": "CDiscount Product Upload Services | Cdiscount marketplace management",
			"description": "Avoid the heavy product uploading process and perform long periods of work in only a single click with our bulk product uploading on Cdiscount. Hire Tech2globe provides best CDiscount Product Upload Services. Call Us Today!",
			"keywords": "CDiscount Product Upload Services, Cdiscount marketplace management, CDiscount Product Upload, CDiscount Product Management Services, Product Upload Services",
			"Ogtitles": "CDiscount Product Upload Services | Cdiscount marketplace management",
            "Ognames": "",
            "Ogdescriptions": "Avoid the heavy product uploading process and perform long periods of work in only a single click with our bulk product uploading on Cdiscount. Hire Tech2globe provides best CDiscount Product Upload Services. Call Us Today!",
            "twittercard": "CDiscount Product Upload Services | Cdiscount marketplace managemente", 
			 "twitterdescription": "Avoid the heavy product uploading process and perform long periods of work in only a single click with our bulk product uploading on Cdiscount. Hire Tech2globe provides best CDiscount Product Upload Services. Call Us Today!",
            "canonical_url":"https://tech2globe.com/cdiscount-product-upload-services"
		},
		"walmart-product-upload-services": {
			"pagetitle": "#1 Top Walmart Product Upload Services |Walmart Marketplace Management",
			"description": "Tech2globe.com provides online merchants with Walmart Walmart Product Upload Services, Product Data Entry, product descriptions and much more under one roof. Contact us today for free consultation.",
			"keywords": "Walmart Product Data Entry, Walmart Product Data Entry outsourcing, Walmart Product upload services, Walmart Product Listing Services, Walmart Product Data Listing Outsource Services",
			"Ogtitles": "#1 Top Walmart Product Upload Services |Walmart Marketplace Management",
            "Ognames": "",
            "Ogdescriptions": "Tech2globe.com provides online merchants with Walmart Walmart Product Upload Services, Product Data Entry, product descriptions and much more under one roof. Contact us today for free consultation.",
            "twittercard": "#1 Top Walmart Product Upload Services |Walmart Marketplace Management", 
			 "twitterdescription": "Tech2globe.com provides online merchants with Walmart Walmart Product Upload Services, Product Data Entry, product descriptions and much more under one roof. Contact us today for free consultation.",
            "canonical_url":"https://tech2globe.com/walmart-product-upload-services"
		},
		"prestashop-product-upload-services": {
			"pagetitle": "Prestashop Product Upload Services | Prestashop Product Listing Service",
			"description": "we have a group of experienced and competent experts who give immaculate and adaptable Prestashop product upload services  Get in touch with us.",
			"keywords": "Prestashop Product Upload Services, Prestashop Product Listing Service, Prestashop product entry services",
			"Ogtitles": "Prestashop Product Upload Services | Prestashop Product Listing Service",
            "Ognames": "",
            "Ogdescriptions": "we have a group of experienced and competent experts who give immaculate and adaptable Prestashop product upload services  Get in touch with us.",
            "twittercard": "Prestashop Product Upload Services | Prestashop Product Listing Service", 
			 "twitterdescription": "we have a group of experienced and competent experts who give immaculate and adaptable Prestashop product upload services  Get in touch with us.",
            "canonical_url":"https://tech2globe.com/prestashop-product-upload-services"
		},
		"nop-commerce-development-services": {
			"pagetitle": "Nopcommerce Website Development | Nopcommerce Development Company",
			"description": "Tech2Globe offer complete end to end services for Nopcommerce Website development. We develop custom nopcommerce plugins and create one such site for your company",
			"keywords": "Nopcommerce website developmen, nopcommerce development company,nopcommerce development services ",
			"Ogtitles": "Nopcommerce Website Development | Nopcommerce Development Company",
            "Ognames": "",
            "Ogdescriptions": "Tech2Globe offer complete end to end services for Nopcommerce Website development. We develop custom nopcommerce plugins and create one such site for your company",
            "twittercard": "Nopcommerce Website Development | Nopcommerce Development Company", 
			 "twitterdescription": "Tech2Globe offer complete end to end services for Nopcommerce Website development. We develop custom nopcommerce plugins and create one such site for your company",
            "canonical_url":"https://tech2globe.com/nop-commerce-development-services"
		},
		"magento-development-company": {
			"pagetitle": "Magento Development Services | Magento Development company",
			"description": "Tech2Globe is a well-established and experienced company that offers customized Magento development services. we are a leading Magento Development Company",
			"keywords": "Magento Development Services, Magento Development company, expert Magento developers, Magento Website Development Services",
			"Ogtitles": "Magento Development Services | Magento Development company",
            "Ognames": "",
            "Ogdescriptions": "Tech2Globe is a well-established and experienced company that offers customized Magento development services. we are a leading Magento Development Company",
            "twittercard": "Magento Development Services | Magento Development company", 
			 "twitterdescription": "Tech2Globe is a well-established and experienced company that offers customized Magento development services. we are a leading Magento Development Company",
            "canonical_url":"https://tech2globe.com/magento-development-company"
		},
		"bigcommerce-development-services": {
			"pagetitle": "Bigcommerce Development Services | Bigcommerce Design Services",
			"description": "At Tech2globe, We Have Certified Team of Bigcommerce Designers & Developers to Provide High-End Bigcommerce Solutions Across the Globe. ",
			"keywords": "Bigcommerce Development Services, Bigcommerce Design Services, BigCommerce Store Development, BigCommerce App Development ",
			"Ogtitles": "Bigcommerce Development Services | Bigcommerce Design Services",
            "Ognames": "",
            "Ogdescriptions": "At Tech2globe, We Have Certified Team of Bigcommerce Designers & Developers to Provide High-End Bigcommerce Solutions Across the Globe. ",
            "twittercard": "Bigcommerce Development Services | Bigcommerce Design Services", 
			 "twitterdescription": "At Tech2globe, We Have Certified Team of Bigcommerce Designers & Developers to Provide High-End Bigcommerce Solutions Across the Globe. ",
            "canonical_url":"https://tech2globe.com/bigcommerce-development-services"
		},
		"volusion-development-services": {
			"pagetitle": "Volusion Development Services | Volusion Experts",
			"description": "Tech2Globe is a Volusion development services company to satisfy your particular project requirements. We succeed in Providing top-class facilities for the growth of volume stores.",
			"keywords": "Volusion Development Services, Volusion development company, Volusion custom web design, Volusion Experts",
			"Ogtitles": "Volusion Development Services | Volusion Experts",
            "Ognames": "",
            "Ogdescriptions": "Tech2Globe is a Volusion development services company to satisfy your particular project requirements. We succeed in Providing top-class facilities for the growth of volume stores.",
            "twittercard": "Volusion Development Services | Volusion Experts", 
			 "twitterdescription": "Tech2Globe is a Volusion development services company to satisfy your particular project requirements. We succeed in Providing top-class facilities for the growth of volume stores.",
            "canonical_url":"https://tech2globe.com/volusion-development-services"
		},
		"3dcart-development-services": {
			"pagetitle": "3Dcart Development | 3Dcart Custom Theme Development Tech2Globe",
			"description": "Tech2Globe we have a team of experts who have experience working with 3dcart, we will provide the best solutions that will definitely help in an increase in the returns.",
			"keywords": "3Dcart Development, 3Dcart Custom Theme Development, 3dcart Website Design, 3dcart Development Services,3dcart Store Development",
			"Ogtitles": "3Dcart Development | 3Dcart Custom Theme Development Tech2Globe",
            "Ognames": "",
            "Ogdescriptions": "Tech2Globe we have a team of experts who have experience working with 3dcart, we will provide the best solutions that will definitely help in an increase in the returns.",
            "twittercard": "3Dcart Development | 3Dcart Custom Theme Development Tech2Globe", 
			 "twitterdescription": "Tech2Globe we have a team of experts who have experience working with 3dcart, we will provide the best solutions that will definitely help in an increase in the returns.",
            "canonical_url":"https://tech2globe.com/3dcart-development-services"
		},
		"open-cart-development-services": {
			"pagetitle": "OpenCart Development Services | OpenCart Development Company",
			"description": "Tech2Globe offers opencart web evelopment services with optimum quality standards to customize your store as per your business needs to reach a global audience",
			"keywords": "OpenCart Development Services, OpenCart Development Company, Opencart Web development services, OpenCart Theme Design and Development",
			"Ogtitles": "OpenCart Development Services | OpenCart Development Company",
            "Ognames": "",
            "Ogdescriptions": "Tech2Globe offers opencart web evelopment services with optimum quality standards to customize your store as per your business needs to reach a global audience",
            "twittercard": "OpenCart Development Services | OpenCart Development Company", 
			 "twitterdescription": "Tech2Globe offers opencart web evelopment services with optimum quality standards to customize your store as per your business needs to reach a global audience",
            "canonical_url":"https://tech2globe.com/open-cart-development-services"
		},
		"case-studies": {
			"pagetitle": "Case Studies: Tech2globe, the top multi-processing IT Company",
			"description": "Browse our portfolio of case studies below to learn the difference we made to our clients through our integrated services and solutions, and how we can help you.",
			"keywords": "",
			"Ogtitles": "Case Studies: Tech2globe, the top multi-processing IT Company",
            "Ognames": "",
            "Ogdescriptions": "Browse our portfolio of case studies below to learn the difference we made to our clients through our integrated services and solutions, and how we can help you.",
            "twittercard": "Case Studies: Tech2globe, the top multi-processing IT Company", 
			 "twitterdescription": "Browse our portfolio of case studies below to learn the difference we made to our clients through our integrated services and solutions, and how we can help you.",
            "canonical_url":"https://tech2globe.com/case-studies"
		},
		"logistics-services": {
			"pagetitle": "Efficient Logistics Solutions | Tech2Globe: Simplifying Your Supply Chain ",
			"description": "Top-notch logistics services with Tech2Globe Pro Logistic Services. We provide expert service logistics for your every need.",
			"keywords": "logistics services, outsource logistics services, logistics services in india, outsourcing logistics services, logistics for trucking companies, logistics management, freight payment processing, freight payment & pre-audit",
			"Ogtitles": "Efficient Logistics Solutions | Tech2Globe: Simplifying Your Supply Chain ",
            "Ognames": "Tech2Globe Web Solutions LLP",
            "Ogdescriptions": "Top-notch logistics services with Tech2Globe Pro Logistic Services. We provide expert service logistics for your every need.",
            "twittercard": "Professional Logistics Outsourcing Services - Tech2globe", 
			 "twitterdescription": "Top-notch logistics services with Tech2Globe Pro Logistic Services. We provide expert service logistics for your every need.",
            "canonical_url":"https://tech2globe.com/logistics-services"
		},
		"lead-generation-services": {
			"pagetitle": "Best Lead Generation Services Agency & Specialists | Tech2globe",
			"description": "Tech2globe is one among the best companies offers lead generation services and boost your sales result by converting customer interest into enquiry. We offers quality leads generation services with the help of specialists for businesses of all sizes.",
			"keywords": "",
			"Ogtitles": "Best Lead Generation Services Agency & Specialists | Tech2globe",
            "Ognames": "",
            "Ogdescriptions": "Tech2globe is one among the best companies offers lead generation services and boost your sales result by converting customer interest into enquiry. We offers quality leads generation services with the help of specialists for businesses of all sizes.",
            "twittercard": "Best Lead Generation Services Agency & Specialists | Tech2globe", 
			 "twitterdescription": "Tech2globe is one among the best companies offers lead generation services and boost your sales result by converting customer interest into enquiry. We offers quality leads generation services with the help of specialists for businesses of all sizes.",
            "canonical_url":"https://tech2globe.com/lead-generation-services"
		},
		
		"customer-support-services": {
			"pagetitle": "Customer Support Services | Customer Support solution at Tech2globe",
			"description": "Tech2Globe customer support services are designed to provide comprehensive assistance to customers and clients in relation to their products or services.",
			"keywords": "",
			"Ogtitles": "Customer Support Services | Customer Support solution at Tech2globe",
            "Ognames": "Tech2Globe Web Solutions LLP",
            "Ogdescriptions": "Tech2Globe customer support services are designed to provide comprehensive assistance to customers and clients in relation to their products or services.",
            "twittercard": " Customer Support Services | Customer Support solution at Tech2globe", 
			 "twitterdescription": "Tech2Globe customer support services are designed to provide comprehensive assistance to customers and clients in relation to their products or services.",
            "canonical_url":"https://tech2globe.com/customer-support-services"
		},




























		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		"cctv-monitoring-services": {
			"pagetitle": "CCTV Monitoring Service Secure Your Space | Tech2Globe",
			"description": "Get reliable CCTV monitoring service for your security needs with high quality recording by Tech2Globe ✔Cost effective ✔24/7 Coverage ✔Real-Time Alerts",
			"keywords": "CCTV monitoring services, outsource CCTV monitoring services, CCTV monitoring outsourcing services, CCTV monitoring solutions, remote CCTV monitoring services",
			"Ogtitles": "CCTV Monitoring Service Secure Your Space | Tech2Globe",
            "Ognames": "",
            "Ogdescriptions": "Get reliable CCTV monitoring service for your security needs with high quality recording by Tech2Globe ✔Cost effective ✔24/7 Coverage ✔Real-Time Alerts",
            "twittercard": "Remote CCTV Monitoring Solutions | Outsource CCTV Monitoring Services", 
			 "twitterdescription": "Get reliable CCTV monitoring service for your security needs with high quality recording by Tech2Globe ✔Cost effective ✔24/7 Coverage ✔Real-Time Alerts",
            "canonical_url":"https://tech2globe.com/cctv-monitoring-services"
		},
		"call-centre-services": {
			"pagetitle": "Exceptional Call Centre Services for Your Business | Tech2Globe",
			"description": "Enhance your business operations withs Tech2Globe call center services. Choose the ideal call center service that meets your requirements.",
			"keywords": "call center services, call center service provider, call center customer service, call center solutions, outsourced call center solutions, call center services company, call center services Philippines, offshore call center services, call center outsourcing services, outsource call center services, outsourcing call center services,",
			"Ogtitles": "Exceptional Call Centre Services for Your Business | Tech2Globe",
            "Ognames": "Tech2Globe Web Solutions LLP",
            "Ogdescriptions": "Enhance your business operations withs Tech2Globe call center services. Choose the ideal call center service that meets your requirements.",
            "twittercard": "Exceptional Call Centre Services for Your Business | Tech2Globe", 
			 "twitterdescription": "Enhance your business operations withs Tech2Globe call center services. Choose the ideal call center service that meets your requirements.",
            "canonical_url":"https://tech2globe.com/call-centre-services"
		},
		
		
			"inbound-call-center": {
			"pagetitle": "inbound call center solutions | Inbound Call Center Services",
			"description": "At Tech2Globe, inbound call center solutions, we believe in    complete transparency and provide our customers with the information they need to make sound business decisions.",
			"keywords": "Inbound Call Center Services, inbound call center solutions, inbound call center outsourcing, inbound call center service provider, outsource inbound call center services, inbound contact center services, Inbound Call Center Price, Inbound Call Center,",
			"Ogtitles": " inbound call center solutions | Inbound Call Center services  ",
            "Ognames": "Tech2Globe Web Solutions LLP",
            "Ogdescriptions": "At Tech2Globe, inbound call center solutions, we believe in    complete transparency and provide our customers with the information they need to make sound business decisions.",
            "twittercard": " inbound call center solutions | Inbound Call Center Services", 
			 "twittertitle":" inbound call center solutions | Inbound Call Center Services",
			 "twitterdescription": "At Tech2Globe, inbound call center solutions, we believe in    complete transparency and provide our customers with the information they need to make sound business decisions.",
            "canonical_url":"https://tech2globe.com/inbound-call-center"
		},	
		
		
			"outbound-call-center-solutions": {
			"pagetitle": "Outbound Call Center Solutions | Outbound Call Center Services",
			"description": "At Tech2Globe, we have a step-by-step process for outbound call center services that are designed to ensure your business is always meeting the needs of your customers.",
			"keywords": "Inbound Call Center Services, inbound call center solutions, inbound call center outsourcing, inbound call center service provider, outsource inbound call center services, inbound contact center services, Inbound Call Center Price, Inbound Call Center,",
			"Ogtitles": "Outbound Call Center Solutions | Outbound Call Center Services",
            "Ognames": "Tech2Globe Web Solutions LLP",
            "Ogdescriptions": "At Tech2Globe, we have a step-by-step process for outbound call center services that are designed to ensure your business is always meeting the needs of your customers.",
            "twittercard": " inbound call center solutions | Inbound Call Center Services", 
			 "twittertitle":"Outbound Call Center Solutions | Outbound Call Center Services",
			 "twitterdescription": "At Tech2Globe, we have a step-by-step process for outbound call center services that are designed to ensure your business is always meeting the needs of your customers.",
            "canonical_url":"https://tech2globe.com/outbound-call-center-solutions"
		},			
		
		
			"telemarketing-services": {
			"pagetitle": "Telemarketing Services | outsourcing telemarketing company",
			"description": "Take your sales to the next level with telemarketing services from Tech2Globe telemarketing outsourcing company. our ability to deliver top-notch telemarketing services ",
			"keywords": "Inbound Call Center Services, inbound call center solutions, inbound call center outsourcing, inbound call center service provider, outsource inbound call center services, inbound contact center services, Inbound Call Center Price, Inbound Call Center,",
			"Ogtitles": " Telemarketing Services | outsourcing telemarketing company",
            "Ognames": "Tech2Globe Web Solutions LLP",
            "Ogdescriptions": "Take your sales to the next level with telemarketing services from Tech2Globe telemarketing outsourcing company. our ability to deliver top-notch telemarketing services",
            "twittercard": "Telemarketing Services | outsourcing telemarketing company", 
			 "twittertitle":"Telemarketing Services | outsourcing telemarketing company",
			 "twitterdescription": "Take your sales to the next level with telemarketing services from Tech2Globe telemarketing outsourcing company. our ability to deliver top-notch telemarketing services",
            "canonical_url":"https://tech2globe.com/telemarketing-services"
		},			
	
		
		"mobile-seo-services": {
			"pagetitle": "Mobile SEO Service In India | Mobile SEO agency | Tech2globe",
			"description": "Mobile SEO Services at Tech2globe can help you optimize your website to create new visitors and higher revenue. We use effective strategies to optimize your website for the mobile device. Get in touch with us Now!",
			"keywords": "",
			"Ogtitles": "Mobile SEO Service In India | Mobile SEO agency | Tech2globe",
            "Ognames": "Tech2Globe Web Solutions LLP",
            "Ogdescriptions": "Mobile SEO Services at Tech2globe can help you optimize your website to create new visitors and higher revenue. We use effective strategies to optimize your website for the mobile device. Get in touch with us Now!",
            "twittercard": "Mobile SEO Service In India | Mobile SEO agency | Tech2globe", 
			 "twitterdescription": "Mobile SEO Services at Tech2globe can help you optimize your website to create new visitors and higher revenue. We use effective strategies to optimize your website for the mobile device. Get in touch with us Now!",
            "canonical_url":"https://tech2globe.com/mobile-seo-services"
		},
		"seo-by-industry": {
			
			"pagetitle": "SEO By Industry | Industry Based SEO Services India - Tech2globe",
			"description": "Tech2globe is a #1 leading SEO Company In India providing SEO by Industry and Industry based SEO services in India. We will optimize your website according to the best SEO practices. Claim your FREE SEO website audit today.",
			"keywords": "",
			"Ogtitles": "SEO By Industry | Industry Based SEO Services India - Tech2globe",
            "Ognames": "",
            "Ogdescriptions": "Tech2globe is a #1 leading SEO Company In India providing SEO by Industry and Industry based SEO services in India. We will optimize your website according to the best SEO practices. Claim your FREE SEO website audit today.",
            "twittercard": "SEO By Industry | Industry Based SEO Services India - Tech2globe", 
			 "twitterdescription": "Tech2globe is a #1 leading SEO Company In India providing SEO by Industry and Industry based SEO services in India. We will optimize your website according to the best SEO practices. Claim your FREE SEO website audit today.",
            "canonical_url":"https://tech2globe.com/seo-by-industry"
		},
		"seo-for-small-business": {
			"pagetitle": "How to Find the Right SEO Service for Your Small Business ",
			"description": "Understanding SEO is hard enough, let alone finding an agency you can trust. This post equips you with everything you need to know to get the right small business SEO services for your site—including what to look for, questions to ask, and terms to know.",
			"keywords": "",
			"Ogtitles": "How to Find the Right SEO Service for Your Small Business",
            "Ognames": "",
            "Ogdescriptions": "Understanding SEO is hard enough, let alone finding an agency you can trust. This post equips you with everything you need to know to get the right small business SEO services for your site—including what to look for, questions to ask, and terms to know.",
            "twittercard": "How to Find the Right SEO Service for Your Small Business", 
			 "twitterdescription": "Understanding SEO is hard enough, let alone finding an agency you can trust. This post equips you with everything you need to know to get the right small business SEO services for your site—including what to look for, questions to ask, and terms to know.",
            "canonical_url":"https://tech2globe.com/seo-for-small-business"
		},
		"technical-seo": {
			"pagetitle": "Technical SEO Company | Professional Technical SEO Services-Tech2globe",
			"description": "Our Tech2globe technical SEO strategies and techniques to manage and maintain your website and Improve your rankings and build your website on a solid foundation with technical SEO tactics that put your user first.",
			"keywords": "",
			"Ogtitles": "Technical SEO Company | Professional Technical SEO Services-Tech2globe",
            "Ognames": "",
            "Ogdescriptions": "Our Tech2globe technical SEO strategies and techniques to manage and maintain your website and Improve your rankings and build your website on a solid foundation with technical SEO tactics that put your user first.",
            "twittercard": "Technical SEO Company | Professional Technical SEO Services-Tech2globe", 
			 "twitterdescription": "Our Tech2globe technical SEO strategies and techniques to manage and maintain your website and Improve your rankings and build your website on a solid foundation with technical SEO tactics that put your user first.",
            "canonical_url":"https://tech2globe.com/technical-seo"
		},
		"guest-posting-services": {
			"pagetitle": "Guest Posting Service | tech2globe",
			"description": "Niche guest posting services where you approve the sites. Improve rankings with our manual guest post outreach link building. Only real sites with traffic.",
			"keywords": "",
			"Ogtitles": "Guest Posting Service| tech2globe",
            "Ognames": "Tech2Globe Web Solutions LLP",
            "Ogdescriptions": "Niche guest posting services where you approve the sites. Improve rankings with our manual guest post outreach link building. Only real sites with traffic.",
            "twittercard": "Guest Posting Service| tech2globe", 
			 "twitterdescription": "Niche guest posting services where you approve the sites. Improve rankings with our manual guest post outreach link building. Only real sites with traffic.",
            "canonical_url":"https://tech2globe.com/guest-posting-services"
		},
		"content-marketing-services": {
			"pagetitle": "Content Marketing Services | SEO Content Creation| Tech2globe ",
			"description": "We offer content marketing services that include strategy development, content creation, and more. Browse our content marketing services packages",
			"keywords": "",
			"Ogtitles": "Content Marketing Services | SEO Content Creation| Tech2globe ",
            "Ognames": "Tech2Globe Web Solutions LLP",
            "Ogdescriptions": "We offer content marketing services that include strategy development, content creation, and more. Browse our content marketing services packages",
            "twittercard": "Content Marketing Services | SEO Content Creation| Tech2globe ", 
			 "twitterdescription": "We offer content marketing services that include strategy development, content creation, and more. Browse our content marketing services packages",
            "canonical_url":"https://tech2globe.com/content-marketing-services"
		},
		
		"smo-services": {
			"pagetitle": "SMO Services | Best Social Media Optimization Company| Tech2globe ",
			"description": "Get new followers and engage existing followers on your social media profiles with our top quality social media services now. Hire us for SMO Services",
			"keywords": "",
			"Ogtitles": "SMO Services | Best Social Media Optimization Company| Tech2globe ",
            "Ognames": "Tech2Globe Web Solutions LLP",
            "Ogdescriptions": "Get new followers and engage existing followers on your social media profiles with our top quality social media services now. Hire us for SMO Services",
            "twittercard": "SMO Services | Best Social Media Optimization Company| Tech2globe ", 
			 "twitterdescription": "Get new followers and engage existing followers on your social media profiles with our top quality social media services now. Hire us for SMO Services",
            "canonical_url":"https://tech2globe.com/smo-services"
		},		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		"display-advertising-services": {
			"pagetitle": "Display Advertising Services | Tech2globe - Digital Marketing Agency",
			"description": "Tech2globe is a display advertising company engaged in providing display adverting services that aware consumers of your products or services and generate sales and traffic.",
			"keywords": "",
			"Ogtitles": "Display Advertising Services | Tech2globe - Digital Marketing Agency",
            "Ognames": "",
            "Ogdescriptions": "Tech2globe is a display advertising company engaged in providing display adverting services that aware consumers of your products or services and generate sales and traffic.",
            "twittercard": "Display Advertising Services | Tech2globe - Digital Marketing Agency", 
			 "twitterdescription": "Tech2globe is a display advertising company engaged in providing display adverting services that aware consumers of your products or services and generate sales and traffic.",
            "canonical_url":"https://tech2globe.com/display-advertising-services"
		},
		"paid-search-advertising-services": {
			"pagetitle": "Display Advertising Services | Tech2globe - Digital Marketing Agency",
			"description": "Tech2globe is a display advertising company engaged in providing display adverting services that aware consumers of your products or services and generate sales and traffic.",
			"keywords": "",
			"Ogtitles": "Display Advertising Services | Tech2globe - Digital Marketing Agency",
            "Ognames": "",
            "Ogdescriptions": "Tech2globe is a display advertising company engaged in providing display adverting services that aware consumers of your products or services and generate sales and traffic.",
            "twittercard": "Display Advertising Services | Tech2globe - Digital Marketing Agency", 
			 "twitterdescription": "Tech2globe is a display advertising company engaged in providing display adverting services that aware consumers of your products or services and generate sales and traffic.",
            "canonical_url":"https://tech2globe.com/paid-search-advertising-services"
		},
		"ppc-services": {
			"pagetitle": "PPC Management Services India | PPC Company | Tech2globe",
			"description": "Get started with Google Ads today with the best PPC Company in India. Increase your number of leads or sales at a lower ad spend with our PPC services today.",
			"keywords": "",
			"Ogtitles": "PPC Management Services India | PPC Company | Tech2globe",
            "Ognames": "",
            "Ogdescriptions": "Get started with Google Ads today with the best PPC Company in India. Increase your number of leads or sales at a lower ad spend with our PPC services today.",
            "twittercard": "PPC Management Services India | PPC Company | Tech2globe", 
			 "twitterdescription": "Get started with Google Ads today with the best PPC Company in India. Increase your number of leads or sales at a lower ad spend with our PPC services today.",
            "canonical_url":"https://tech2globe.com/ppc-services"
		},
		"shopping-ads-services": {
			"pagetitle": "Google Shopping Ads Agency | Shopping Ads Services | Tech2globe",
			"description": "Make sure you get your products seen with Google Shopping. Get more information about Tech2globe Google Ads management.",
			"keywords": "Google Shopping Ads Agency, Shopping Ads Services, Shopping Ads Agency, Shopping Ads Company,",
			"Ogtitles": "Google Shopping Ads Agency | Shopping Ads Services | Tech2globe",
            "Ognames": "",
            "Ogdescriptions": "Make sure you get your products seen with Google Shopping. Get more information about Tech2globe Google Ads management.",
            "twittercard": "Google Shopping Ads Agency | Shopping Ads Services | Tech2globe", 
			 "twitterdescription": "Make sure you get your products seen with Google Shopping. Get more information about Tech2globe Google Ads management.",
            "canonical_url":"https://tech2globe.com/shopping-ads-services"
		},
		"social-media-marketing": {
			"pagetitle": "Social Media Marketing for Businesses | Tech2globe",
			"description": "Social media marketing is a powerful way to grow your business. Use these tips and steps to build your best social media marketing strategy yet.",
			"keywords": "",
			"Ogtitles": "Social Media Marketing for Businesses | Tech2globe",
            "Ognames": "",
            "Ogdescriptions": "Social media marketing is a powerful way to grow your business. Use these tips and steps to build your best social media marketing strategy yet.",
            "twittercard": "Social Media Marketing for Businesses | Tech2globe", 
			 "twitterdescription": "Social media marketing is a powerful way to grow your business. Use these tips and steps to build your best social media marketing strategy yet.",
            "canonical_url":"https://tech2globe.com/social-media-marketing"
		},
		"youtube-advertising-services": {
			"pagetitle": "YouTube Advertising Services | YouTube Marketing Agency",
			"description": "YouTube advertising services from Tech2globe can help your company reach new leads and grow. Learn more about our YouTube ad services now!",
			"keywords": "",
			"Ogtitles": "YouTube Advertising Services | YouTube Marketing Agency",
            "Ognames": "",
            "Ogdescriptions": "YouTube advertising services from Tech2globe can help your company reach new leads and grow. Learn more about our YouTube ad services now!",
            "twittercard": "YouTube Advertising Services | YouTube Marketing Agency", 
			 "twitterdescription": "YouTube advertising services from Tech2globe can help your company reach new leads and grow. Learn more about our YouTube ad services now!",
            "canonical_url":"https://tech2globe.com/youtube-advertising-services"
		},
		"email-marketing-design": {
			"pagetitle": "Design High-Performing Email Campaigns | Email Marketing | Tech2globe",
			"description": "Follow these examples of great email design and ensure your email campaigns convert. Great design never goes out of style. Learn from Really Good Emails.",
			"keywords": "",
			"Ogtitles": "Design High-Performing Email Campaigns | Email Marketing | Tech2globe",
            "Ognames": "",
            "Ogdescriptions": "Follow these examples of great email design and ensure your email campaigns convert. Great design never goes out of style. Learn from Really Good Emails.",
            "twittercard": "Design High-Performing Email Campaigns | Email Marketing | Tech2globe", 
			 "twitterdescription": "Follow these examples of great email design and ensure your email campaigns convert. Great design never goes out of style. Learn from Really Good Emails.",
            "canonical_url":"https://tech2globe.com/email-marketing-design"
		},
		"brand-reputation-management": {
			"pagetitle": "Guide to Brand Reputation Management | Tech2globe",
			"description": "Find out what is brand reputation management and shape the way the PUBLIC sees your business to match the way YOU see it.",
			"keywords": "",
			"Ogtitles": "Guide to Brand Reputation Management | Tech2globe",
            "Ognames": "",
            "Ogdescriptions": "Find out what is brand reputation management and shape the way the PUBLIC sees your business to match the way YOU see it.",
            "twittercard": "Guide to Brand Reputation Management | Tech2globe", 
			 "twitterdescription": "Find out what is brand reputation management and shape the way the PUBLIC sees your business to match the way YOU see it.",
            "canonical_url":"https://tech2globe.com/brand-reputation-management"
		},
		"corporate-reputation-management-services": {
			"pagetitle": "Best Reputation Management Services Providers in 2023 | Tech2globe",
			"description": "Ready to take control of your reputation? Choose from our list of top reputation management services (review management services, brand mention tools, and NPS).",
			"keywords": "",
			"Ogtitles": "Best Reputation Management Services Providers in 2023 | Tech2globe",
            "Ognames": "",
            "Ogdescriptions": "Ready to take control of your reputation? Choose from our list of top reputation management services (review management services, brand mention tools, and NPS).",
            "twittercard": "Best Reputation Management Services Providers in 2023 | Tech2globe", 
			 "twitterdescription": "Ready to take control of your reputation? Choose from our list of top reputation management services (review management services, brand mention tools, and NPS).",
            "canonical_url":"https://tech2globe.com/corporate-reputation-management-services"
		},
		"orm-services": {
			"pagetitle": "ORM Company | Online Reputation Management | Tech2globe",
			"description": "Looking an ORM Company? Reputation is everything. We understand it &amp; so is our online reputation Management Services team. Hire ORM Services.",
			"keywords": "",
			"Ogtitles": "ORM Company | Online Reputation Management | Tech2globe",
            "Ognames": "",
            "Ogdescriptions": "Looking an ORM Company? Reputation is everything. We understand it &amp; so is our online reputation Management Services team. Hire ORM Services.",
            "twittercard": "ORM Company | Online Reputation Management | Tech2globe", 
			 "twitterdescription": "Looking an ORM Company? Reputation is everything. We understand it &amp; so is our online reputation Management Services team. Hire ORM Services.",
            "canonical_url":"https://tech2globe.com/orm-services"
		},
		"influencer-marketing-package": {
			"pagetitle": "INFLUENCER MARKETING PACKAGES | INFLUNECR MARKETING PACKAGES INDIA",
			"description": "At Tech2Globe, we share and publish our influencer marketing prices online. We offer influencer marketing packages at very cost-effective rates for all types of business",
			"keywords": "INFLUENCER MARKETING PACKAGES, INFLUNECR MARKETING PACKAGES INDIA, influencer marketing services, influencer marketing company, ",
			"Ogtitles": "INFLUENCER MARKETING PACKAGES | INFLUNECR MARKETING PACKAGES INDIA",
            "Ognames": "",
            "Ogdescriptions": "At Tech2Globe, we share and publish our influencer marketing prices online. We offer influencer marketing packages at very cost-effective rates for all types of business",
            "twittercard": "", 
			 "twitterdescription": "At Tech2Globe, we share and publish our influencer marketing prices online. We offer influencer marketing packages at very cost-effective rates for all types of business",
            "canonical_url":"https://tech2globe.com/influencer-marketing-package"
		},
		"ppc-packages": {
			"pagetitle": "Affordable PPC Packages @Maximum ROI in Minimum Cost",
			"description": "Choose Affordable PPC Packages with certified PPC experts at Tech2Globe for small to large businesses & get High ROI. ✔Free PPC audits ✔Account setup & More.
			",
			"keywords": "PPC Packages, PPC Prices, PPC Pricing, Pay Per Click Packages",
			"Ogtitles": "Affordable PPC Services Packages | PPC packages India | PPC Packages",
            "Ognames": "",
            "Ogdescriptions": "Tech2globe offers Affordable PPC Packages. Choose our certified PPC company for Your Best PPC results. we handle From PPC audits, account setup, ad management, and campaign monitoring",
            "twittercard": "Affordable PPC Services Packages | PPC packages India | PPC Packages", 
			 "twitterdescription": "Tech2globe offers Affordable PPC Packages. Choose our certified PPC company for Your Best PPC results. we handle From PPC audits, account setup, ad management, and campaign monitoring",
            "canonical_url":"https://tech2globe.com/ppc-packages"
		},
		"responsive-web-design-services": {
			"pagetitle": "Responsive Web Design Services | Web Design Company | Tech2Globe",
			"description": "Get compatible responsive web design services. Our experts having great experience in java, CSS, HTML etc. & making the website fully responsive and easy to use.",
			"keywords": "Responsive web design services, Web Design Company,  Responsive Website Design and Development Services ",
			"Ogtitles": "Responsive Web Design Services | Web Design Company | Tech2Globe",
            "Ognames": "",
            "Ogdescriptions": "Get compatible responsive web design services. Our experts having great experience in java, CSS, HTML etc. & making the website fully responsive and easy to use.",
            "twittercard": "Responsive Web Design Services | Web Design Company | Tech2Globe", 
			 "twitterdescription": "Get compatible responsive web design services. Our experts having great experience in java, CSS, HTML etc. & making the website fully responsive and easy to use.",
            "canonical_url":"https://tech2globe.com/responsive-web-design-services"
		},
		"mailchimp-template-design-services": {
			"pagetitle": "Mailchimp Template Design & Development Service | Tech2globe",
			"description": "Tech2Globe Provides Mailchimp Template Design & Development Service to worldwide. Responsive email Design and custom template creation to match your website and keep you branding consistent. We have created hundreds of custom MailChimp templates.",
			"keywords": "mailchimp email services, Mailchimp Template Development, custom Mailchimp Template, Mailchimp Template Design",
			"Ogtitles": "Mailchimp Template Design & Development Service | Tech2globe",
            "Ognames": "",
            "Ogdescriptions": "Tech2Globe Provides Mailchimp Template Design & Development Service to worldwide. Responsive email Design and custom template creation to match your website and keep you branding consistent. We have created hundreds of custom MailChimp templates.",
            "twittercard": "Mailchimp Template Design & Development Service | Tech2globe", 
			 "twitterdescription": "Tech2Globe Provides Mailchimp Template Design & Development Service to worldwide. Responsive email Design and custom template creation to match your website and keep you branding consistent. We have created hundreds of custom MailChimp templates.",
            "canonical_url":"https://tech2globe.com/mailchimp-template-design-services"
		},
		"amazon-ebc-services": {
			"pagetitle": "Amazon EBC services | Amazon Enhanced Brand Content | Tech2Globe",
			"description": " hire Amazon EBC services by Tech2Globe to use correct pricing strategies to expand your rankings, conversions, and income. Adding EBC to your page has a larger number of advantages",
			"keywords": "",
			"Ogtitles": "Amazon EBC services | Amazon Enhanced Brand Content | Tech2Globe",
            "Ognames": "",
            "Ogdescriptions": " hire Amazon EBC services by Tech2Globe to use correct pricing strategies to expand your rankings, conversions, and income. Adding EBC to your page has a larger number of advantages",
            "twittercard": "Amazon EBC services | Amazon Enhanced Brand Content | Tech2Globe", 
			 "twitterdescription": " hire Amazon EBC services by Tech2Globe to use correct pricing strategies to expand your rankings, conversions, and income. Adding EBC to your page has a larger number of advantages",
            "canonical_url":"https://tech2globe.com/amazon-ebc-services"
		},
		"payroll-services": {
			"pagetitle": "Payroll Services For Every Sector | Payroll Services | Tech2Globe",
			"description": "Tech2Globe provide payroll services to each & every sector. Solve your all payroll and tax related issues. Don’t get in trouble! Get all Payroll solutions with 100% effectiveness.",
			"keywords": "",
			"Ogtitles": "Payroll Services For Every Sector | Payroll Services | Tech2Globe",
            "Ognames": "",
            "Ogdescriptions": "Tech2Globe provide payroll services to each & every sector. Solve your all payroll and tax related issues. Don’t get in trouble! Get all Payroll solutions with 100% effectiveness.",
            "twittercard": "Payroll Services For Every Sector | Payroll Services | Tech2Globe", 
			 "twitterdescription": "Tech2Globe provide payroll services to each & every sector. Solve your all payroll and tax related issues. Don’t get in trouble! Get all Payroll solutions with 100% effectiveness.",
            "canonical_url":"https://tech2globe.com/payroll-services"
		},
		"third-party-reference-check": {
			"pagetitle": "Third Party Reference Check | Third Party Reference Check Services",
			"description": "we are providing Third Party Reference Check in an effective way with right and accurate information. We have a specialized, experience and trained experts ",
			"keywords": "Third Party Reference Check, Third Party Reference Check Services",
			"Ogtitles": "Third Party Reference Check | Third Party Reference Check Services",
            "Ognames": "",
            "Ogdescriptions": "We are providing Third Party Reference Check in an effective way with right and accurate information. We have a specialized, experience and trained experts ",
            "twittercard": "Third Party Reference Check | Third Party Reference Check Services", 
			 "twitterdescription": "We are providing Third Party Reference Check in an effective way with right and accurate information. We have a specialized, experience and trained experts ",
            "canonical_url":"https://tech2globe.com/third-party-reference-check"
		},
		"data-analytics": {
			"pagetitle": "Data analytics services | Big Data Services Providers | Tech2Globe",
			"description": "Tech2Globe provides you the effective data analytics services that will help you to meet your organization goals. We have a specialist Data Scientist team",
			"keywords": "",
			"Ogtitles": "Data analytics services | Big Data Services Providers | Tech2Globe",
            "Ognames": "",
            "Ogdescriptions": "Tech2Globe provides you the effective data analytics services that will help you to meet your organization goals. We have a specialist Data Scientist team",
            "twittercard": "Data analytics services | Big Data Services Providers | Tech2Globe", 
			 "twitterdescription": "Tech2Globe provides you the effective data analytics services that will help you to meet your organization goals. We have a specialist Data Scientist team",
            "canonical_url":"https://tech2globe.com/data-analytics"
		},
		"php-development-services": {
			"pagetitle": "PHP Development Services | PHP development company | Tech2Globe",
			"description": "Tech2Globe offers you bespoken PHP development services. With our PHP development company, your business gains admittance to maximum functionality & great programming ",
			"keywords": "PHP development services, custom PHP development company, PHP development company, PHP developers, PHP web development services ",
			"Ogtitles": "PHP Development Services | PHP development company | Tech2Globe",
            "Ognames": "",
            "Ogdescriptions": "Tech2Globe offers you bespoken PHP development services. With our PHP development company, your business gains admittance to maximum functionality & great programming ",
            "twittercard": "PHP Development Services | PHP development company | Tech2Globe", 
			 "twitterdescription": "Tech2Globe offers you bespoken PHP development services. With our PHP development company, your business gains admittance to maximum functionality & great programming ",
            "canonical_url":"https://tech2globe.com/php-development-services"
		},
		"java-development-services": {
			"pagetitle": "Java Development Services | Java development company | Tech2Globe",
			"description": "At Tech2Globe, our expert Java developers help you to set up and run your Java application flawlessly. We modify our Java development services to best fit your business needs",
			"keywords": "Java development services, Java development company, java development solutions, Custom Java application development services",
			"Ogtitles": "Java Development Services | Java development company | Tech2Globe",
            "Ognames": "",
            "Ogdescriptions": "At Tech2Globe, our expert Java developers help you to set up and run your Java application flawlessly. We modify our Java development services to best fit your business needs",
            "twittercard": "Java Development Services | Java development company | Tech2Globe", 
			 "twitterdescription": "At Tech2Globe, our expert Java developers help you to set up and run your Java application flawlessly. We modify our Java development services to best fit your business needs",
            "canonical_url":"https://tech2globe.com/java-development-services"
		},
		"node-js-development-services": {
			"pagetitle": "Node JS Development Company | Node JS Development Services| Tech2globe",
			"description": "Tech2globe is the best NodeJS development company providing quality NodeJS development services to build secure, scalable, user-friendly and faster web applications.",
			"keywords": "node.js app development,node.js android development,node.js development company,node.js development services,node web development,node.js development company india,node.js mobile development",
			"Ogtitles": "Node JS Development Company | Node JS Development Services| Tech2globe",
            "Ognames": "",
            "Ogdescriptions": "Tech2globe is the best NodeJS development company providing quality NodeJS development services to build secure, scalable, user-friendly and faster web applications.",
            "twittercard": "Node JS Development Company | Node JS Development Services| Tech2globe", 
			 "twitterdescription": "Tech2globe is the best NodeJS development company providing quality NodeJS development services to build secure, scalable, user-friendly and faster web applications.",
            "canonical_url":"https://tech2globe.com/node-js-development-services"
		},
		"react-js-development-services": {
			"pagetitle": "React JS App Development Services | React js Development Company",
			"description": "Tech2globe is a leading React.js Development Company in India & USA. We offers custom react app development services and React js consulting services at affordable rate.",
			"keywords": "reactjs development company, reactjs development services",
			"Ogtitles": "React JS App Development Services | React js Development Company",
            "Ognames": "",
            "Ogdescriptions": "Tech2globe is a leading React.js Development Company in India & USA. We offers custom react app development services and React js consulting services at affordable rate.",
            "twittercard": "React JS App Development Services | React js Development Company", 
			 "twitterdescription": "Tech2globe is a leading React.js Development Company in India & USA. We offers custom react app development services and React js consulting services at affordable rate.",
            "canonical_url":"https://tech2globe.com/react-js-development-services"
		},
		"laravel-development-services": {
			"pagetitle": "Laravel Development Company | Top Services | Tech2globe",
			"description": "Tech2globe is a trusted Laravel development company, renowned for offering feature-packed web apps. Grow with our best Laravel development services. ",
			"keywords": "",
			"Ogtitles": "Laravel Development Company | Top Services | Tech2globe",
            "Ognames": "",
            "Ogdescriptions": "Tech2globe is a trusted Laravel development company, renowned for offering feature-packed web apps. Grow with our best Laravel development services. ",
            "twittercard": "Laravel Development Company | Top Services | Tech2globe", 
			 "twitterdescription": "Tech2globe is a trusted Laravel development company, renowned for offering feature-packed web apps. Grow with our best Laravel development services. ",
            "canonical_url":"https://tech2globe.com/laravel-development-services"
		},
		"codeigniter-development-services": {
			"pagetitle": "Codeigniter Development Company | Codeigniter Development Services | Tech2globe",
			"description": "Tech2globe is renowned CodeIgniter web development Company, and offer CodeIgniter solution that meet your business needs and offers excellent web apps, CMS and eCommerce websites solutions.",
			"keywords": "",
			"Ogtitles": "Codeigniter Development Company | Codeigniter Development Services | Tech2globe",
            "Ognames": "",
            "Ogdescriptions": "Tech2globe is renowned CodeIgniter web development Company, and offer CodeIgniter solution that meet your business needs and offers excellent web apps, CMS and eCommerce websites solutions.",
            "twittercard": "Codeigniter Development Company | Codeigniter Development Services | Tech2globe", 
			 "twitterdescription": "Tech2globe is renowned CodeIgniter web development Company, and offer CodeIgniter solution that meet your business needs and offers excellent web apps, CMS and eCommerce websites solutions.",
            "canonical_url":"https://tech2globe.com/codeigniter-development-services"
		},
		"cake-php-web-development": {
			"pagetitle": "Cake PHP Development Services | Hire Cake PHP Developer | Tech2globe",
			"description": "Hire Cake PHP developers from Tech2globe at flexible hiring model. We specialize in Cake PHP framework development and bring solutions that are compatible with the latest PHP versions.",
			"keywords": "Cake PHP Development Services, Cake PHP Developer, Cake PHP Development Company, Cake PHP Development Agency, Cake PHP Development",
			"Ogtitles": "Cake PHP Development Services | Hire Cake PHP Developer | Tech2globe",
            "Ognames": "",
            "Ogdescriptions": "Hire Cake PHP developers from Tech2globe at flexible hiring model. We specialize in Cake PHP framework development and bring solutions that are compatible with the latest PHP versions.",
            "twittercard": "Cake PHP Development Services | Hire Cake PHP Developer | Tech2globe", 
			 "twitterdescription": "Hire Cake PHP developers from Tech2globe at flexible hiring model. We specialize in Cake PHP framework development and bring solutions that are compatible with the latest PHP versions.",
            "canonical_url":"https://tech2globe.com/cake-php-web-development"
		},
		
		"dot-net-development-services": {
			"pagetitle": "Dot Net Development Company | Asp Dot NET Software Development",
			"description": "Tech2globe is a leading dot net development company in the USA, Australia, Netherlands, Canada, Dubai, and India. We offer ASP.NET web and application development services that are outstanding and perfect for any business.",
            "Ogtitles": "Dot Net Development Company | Asp Dot NET Software Development",
			"Ognames": "Tech2Globe web Solutions LLP",
			"Ogdescriptions": "Tech2globe is a leading dot net development company in the USA, Australia, Netherlands, Canada, Dubai, and India. We offer ASP.NET web and application development services that are outstanding and perfect for any business.",
			"twittercard": "Tech2Globe", 
            "twittertitle": "Dot Net Development Company | Asp Dot NET Software Development",
            "twitterdescription": "Tech2globe is a leading dot net development company in the USA, Australia, Netherlands, Canada, Dubai, and India. We offer ASP.NET web and application development services that are outstanding and perfect for any business.",
			"canonical_url":"https://tech2globe.com/dot-net-development-services"
		},		
	
	
		"azure-development-services": {
			"pagetitle": "Azure Development Services | Leading Microsoft Partner",
			"description": "Microsoft Azure is a great tool for process automation. We provides azure development services in USA, UK, Germany, India and other countries.",
            "Ogtitles": "Azure Development Services | Leading Microsoft Partner",
			"Ognames": "Tech2Globe web Solutions LLP",
			"Ogdescriptions": "Microsoft Azure is a great tool for process automation. We provides azure development services in USA, UK, Germany, India and other countries.",
			"twittercard": "Tech2Globe", 
            "twittertitle": "DAzure Development Services | Leading Microsoft Partner",
            "twitterdescription": "Microsoft Azure is a great tool for process automation. We provides azure development services in USA, UK, Germany, India and other countries.",
			"canonical_url":"https://tech2globe.com/azure-development-services"
		},			

			"multi-vendor-b2b-solution": {
			"pagetitle": "Best B2B eCommerce Platform Software with Multi-Vendor 2023 | Tech2globe",
			"description": "View the best B2B eCommerce Platform software with Multi-Vendor in 2023. Compare verified user ratings &amp; reviews to find the best match for your business size, need &amp; industry.",
            "Ogtitles": "Best B2B eCommerce Platform Software with Multi-Vendor 2023 | Tech2globe",
			"Ognames": "Tech2Globe web Solutions LLP",
			"Ogdescriptions": "View the best B2B eCommerce Platform software with Multi-Vendor in 2023. Compare verified user ratings &amp; reviews to find the best match for your business size, need &amp; industry.",
			"twittercard": "Tech2Globe", 
            "twittertitle": "Best B2B eCommerce Platform Software with Multi-Vendor 2023 | Tech2globe",
            "twitterdescription": "View the best B2B eCommerce Platform software with Multi-Vendor in 2023. Compare verified user ratings &amp; reviews to find the best match for your business size, need &amp; industry.",
			"canonical_url":"https://tech2globe.com/multi-vendor-b2b-solution"
		},		
		
     		"e-commerce-mobile-apps-development-services": {
			"pagetitle": "eCommerce App Development Company, eCommerce Mobile App",
			"description": "Tech2globe is the leading eCommerce app development company that provides custom eCommerce mobile app development solutions for Android and iOS users.",
            "Ogtitles": "eCommerce App Development Company, eCommerce Mobile App",
			"Ognames": "Tech2Globe web Solutions LLP",
			"Ogdescriptions": "Tech2globe is the leading eCommerce app development company that provides custom eCommerce mobile app development solutions for Android and iOS users.",
			"twittercard": "Tech2Globe", 
            "twittertitle": "eCommerce App Development Company, eCommerce Mobile App",
            "twitterdescription": "Tech2globe is the leading eCommerce app development company that provides custom eCommerce mobile app development solutions for Android and iOS users.",
			"canonical_url":"https://tech2globe.com/e-commerce-mobile-apps-development-services"
		},			
		
     		"react-native-app-development": {
			"pagetitle": "React Native App Development Company | React Development Services",
			"description": "Tech2globe is a leading React Native App Development Company offering consulting services for both Android and iOS apps. Call now to hire experienced React Native App developers.",
            "Ogtitles": "React Native App Development Company | React Development Services",
			"Ognames": "Tech2Globe web Solutions LLP",
			"Ogdescriptions": "Tech2globe is a leading React Native App Development Company offering consulting services for both Android and iOS apps. Call now to hire experienced React Native App developers.",
			"twittercard": "Tech2Globe", 
            "twittertitle": "React Native App Development Company | React Development Services",
            "twitterdescription": "Tech2globe is a leading React Native App Development Company offering consulting services for both Android and iOS apps. Call now to hire experienced React Native App developers.",
			"canonical_url":"https://tech2globe.com/react-native-app-development"
		},		
		
		
     		"ionic-app-development-company": {
			"pagetitle": "Ionic App Development Services | Ionic Development Company - Tech2globe",
			"description": "Tech2globe is top-rated Ionic Development Company which will help you build future-ready mobile applications with Ionic development services.",
            "Ogtitles": "Ionic App Development Services | Ionic Development Company - Tech2globe",
			"Ognames": "Tech2Globe web Solutions LLP",
			"Ogdescriptions": "Tech2globe is top-rated Ionic Development Company which will help you build future-ready mobile applications with Ionic development services.",
			"twittercard": "Tech2Globe", 
            "twittertitle": "Ionic App Development Services | Ionic Development Company - Tech2globe",
            "twitterdescription": "Tech2globe is top-rated Ionic Development Company which will help you build future-ready mobile applications with Ionic development services.",
			"canonical_url":"https://tech2globe.com/ionic-app-development-company"
		},			
	
     		"flutter-app-development-services": {
			"pagetitle": "Flutter App Development Services | Tech2globe",
			"description": "We offer flutter app development services to build scalable and highly functional mobile applications. Hire our flutter app developers.",
            "Ogtitles": "Flutter App Development Services | Tech2globe",
			"Ognames": "Tech2Globe web Solutions LLP",
			"Ogdescriptions": "We offer flutter app development services to build scalable and highly functional mobile applications. Hire our flutter app developers.",
			"twittercard": "Tech2Globe", 
            "twittertitle": "Flutter App Development Services | Tech2globe",
            "twitterdescription": "We offer flutter app development services to build scalable and highly functional mobile applications. Hire our flutter app developers.",
			"canonical_url":"https://tech2globe.com/flutter-app-development-services"
		},	


     		"kotlin-app-development": {
			"pagetitle": "Kotlin App Development Services | Hire Kotlin Developers",
			"description": "We use best-in-class tools and state-of-the-art Kotlin application development services to make Android development faster. Hire kotlin app developers from us.",
            "Ogtitles": "Kotlin App Development Services | Hire Kotlin Developers",
			"Ognames": "Tech2Globe web Solutions LLP",
			"Ogdescriptions": "We use best-in-class tools and state-of-the-art Kotlin application development services to make Android development faster. Hire kotlin app developers from us.",
			"twittercard": "Tech2Globe", 
            "twittertitle": "Kotlin App Development Services | Hire Kotlin Developers",
            "twitterdescription": "We use best-in-class tools and state-of-the-art Kotlin application development services to make Android development faster. Hire kotlin app developers from us.",
			"canonical_url":"https://tech2globe.com/kotlin-app-development"
		},	
		

     		"phonegap-app-development-service": {
			"pagetitle": "PhoneGap App Development Services Provider Company - Tech2lobe",
			"description": "Planning to build a hybrid app for your business? Quintero Solutions offers Phonegap App Development services with best user experience that reach out to a larger audience.",
            "Ogtitles": "PhoneGap App Development Services Provider Company - Tech2lobe",
			"Ognames": "Tech2Globe web Solutions LLP",
			"Ogdescriptions": "Planning to build a hybrid app for your business? Quintero Solutions offers Phonegap App Development services with best user experience that reach out to a larger audience.",
			"twittercard": "Tech2Globe", 
            "twittertitle": "PhoneGap App Development Services Provider Company - Tech2lobe",
            "twitterdescription": "Planning to build a hybrid app for your business? Quintero Solutions offers Phonegap App Development services with best user experience that reach out to a larger audience.",
			"canonical_url":"https://tech2globe.com/phonegap-app-development-service"
		},		
		
     		"xamarin-mobile-app-development": {
			"pagetitle": "Xamarin Development Services | Xamarin Mobile App Development Company",
			"description": "Leading Xamarin mobile app development company in USA, India to develop top-notch & high-end Xamarin cross platform mobile applications. Contact us now to get experts Xamarin app development services.",
            "Ogtitles": "Xamarin Development Services | Xamarin Mobile App Development Company",
			"Ognames": "Tech2Globe web Solutions LLP",
			"Ogdescriptions": "Leading Xamarin mobile app development company in USA, India to develop top-notch & high-end Xamarin cross platform mobile applications. Contact us now to get experts Xamarin app development services.",
			"twittercard": "Tech2Globe", 
            "twittertitle": "Xamarin Development Services | Xamarin Mobile App Development Company",
            "twitterdescription": "Leading Xamarin mobile app development company in USA, India to develop top-notch & high-end Xamarin cross platform mobile applications. Contact us now to get experts Xamarin app development services.",
			"canonical_url":"https://tech2globe.com/xamarin-mobile-app-development"
		},			
		
     		"hybrid-mobile-app-development": {
			"pagetitle": "What is Hybrid App Development? The Ultimate Guide",
			"description": "A hybrid app is a mix of web and native apps. The hybrid app development process involves building and running one project for every platform seamlessly.",
            "Ogtitles": "What is Hybrid App Development? The Ultimate Guide",
			"Ognames": "Tech2Globe web Solutions LLP",
			"Ogdescriptions": "A hybrid app is a mix of web and native apps. The hybrid app development process involves building and running one project for every platform seamlessly.",
			"twittercard": "Tech2Globe", 
            "twittertitle": "What is Hybrid App Development? The Ultimate Guide",
            "twitterdescription": "A hybrid app is a mix of web and native apps. The hybrid app development process involves building and running one project for every platform seamlessly.",
			"canonical_url":"https://tech2globe.com/hybrid-mobile-app-development"
		},			
				
		
	        "ai-chatbot-development": {
			"pagetitle": "Chatbot Development Services | AI Chatbot Development  | Tech2globe",
			"description": "Tech2globe is an AI-Based Chatbot Development provides industry specifc chatbots to improve customer engagement and business efficiency. We can integrated across multiple platforms and reduce overall operational costs. Get a FREE consultation today!",
            "Ogtitles": "Chatbot Development Services | AI Chatbot Development  | Tech2globe",
			"Ognames": "Tech2Globe web Solutions LLP",
			"Ogdescriptions": "Tech2globe is an AI-Based Chatbot Development provides industry specifc chatbots to improve customer engagement and business efficiency. We can integrated across multiple platforms and reduce overall operational costs. Get a FREE consultation today!",
			"twittercard": "Tech2Globe", 
            "twittertitle": "Chatbot Development Services | AI Chatbot Development  | Tech2globe",
            "twitterdescription": "Tech2globe is an AI-Based Chatbot Development provides industry specifc chatbots to improve customer engagement and business efficiency. We can integrated across multiple platforms and reduce overall operational costs. Get a FREE consultation today!",
			"canonical_url":"https://tech2globe.com/ai-chatbot-development"
		},		
		
		
	        "ar-vr-app-development-company": {
			"pagetitle": "AR VR App Development Company | AR VR Development Services| Tech2globe",
			"description": "Tech2globe offer multi-platform AR VR app development services for desktop & mobile. Contact our experts for most immersive AR VR software development solutions.",
            "Ogtitles": "AR VR App Development Company | AR VR Development Services| Tech2globe",
			"Ognames": "Tech2Globe web Solutions LLP",
			"Ogdescriptions": "Tech2globe offer multi-platform AR VR app development services for desktop & mobile. Contact our experts for most immersive AR VR software development solutions.",
			"twittercard": "Tech2Globe", 
            "twittertitle": "AR VR App Development Company | AR VR Development Services| Tech2globe",
            "twitterdescription": "Tech2globe offer multi-platform AR VR app development services for desktop & mobile. Contact our experts for most immersive AR VR software development solutions.",
			"canonical_url":"https://tech2globe.com/ar-vr-app-development-company"
		},		
		
	        "aws-development-services": {
			"pagetitle": "AWS Development Services | Amazon Consulting Services - Tech2globe",
			"description": "Tech2globe is a reliable AWS development company, We offer AWS cloud application development, migration, consulting, cloud BI & analytics, and managed cloud services on AWS.",
            "Ogtitles": "AWS Development Services | Amazon Consulting Services - Tech2globe",
			"Ognames": "Tech2Globe web Solutions LLP",
			"Ogdescriptions": "Tech2globe is a reliable AWS development company, We offer AWS cloud application development, migration, consulting, cloud BI & analytics, and managed cloud services on AWS.",
			"twittercard": "Tech2Globe", 
            "twittertitle": "AWS Development Services | Amazon Consulting Services - Tech2globe",
            "twitterdescription": "Tech2globe is a reliable AWS development company, We offer AWS cloud application development, migration, consulting, cloud BI & analytics, and managed cloud services on AWS.",
			"canonical_url":"https://tech2globe.com/aws-development-services"
		},		
		

	        "blockchain-development-services": {
			"pagetitle": "Blockchain Development Services | Best Blockchain Services -Tech2globe",
			"description": "Tech2globe, as a leading Blockchain Development Company, has multidisciplinary expertise in various custom Blockchain development services. Our global network services, expertly matched to fit your most urgent business needs, on demand.",
            "Ogtitles": "Blockchain Development Services | Best Blockchain Services -Tech2globe",
			"Ognames": "Tech2Globe web Solutions LLP",
			"Ogdescriptions": "Tech2globe, as a leading Blockchain Development Company, has multidisciplinary expertise in various custom Blockchain development services. Our global network services, expertly matched to fit your most urgent business needs, on demand.",
			"twittercard": "Tech2Globe", 
            "twittertitle": "Blockchain Development Services | Best Blockchain Services -Tech2globe",
            "twitterdescription": "Tech2globe, as a leading Blockchain Development Company, has multidisciplinary expertise in various custom Blockchain development services. Our global network services, expertly matched to fit your most urgent business needs, on demand.",
			"canonical_url":"https://tech2globe.com/blockchain-development-services"
		},

	        "iot-development-services": {
			"pagetitle": "IOT Application Development | IOT App Development Services -Tech2globe",
			"description": "We are one of the leading IoT service providers. At Tech2globe, we offer a complete suite of IoT consulting services and solutions to empower businesses of all sizes.",
            "Ogtitles": "IOT Application Development | IOT App Development Services -Tech2globe",
			"Ognames": "Tech2Globe web Solutions LLP",
			"Ogdescriptions": "We are one of the leading IoT service providers. At Tech2globe, we offer a complete suite of IoT consulting services and solutions to empower businesses of all sizes.",
			"twittercard": "Tech2Globe", 
            "twittertitle": "IOT Application Development | IOT App Development Services -Tech2globe",
            "twitterdescription": "We are one of the leading IoT service providers. At Tech2globe, we offer a complete suite of IoT consulting services and solutions to empower businesses of all sizes.",
			"canonical_url":"https://tech2globe.com/iot-development-services"
		},


	        "iwatch-application-development-services": {
			"pagetitle": "iWatch App Development Services | Apple Watch App Development Company",
			"description": "Tech2globe is known for building creative, innovative and responsive apple watch applications. Our iWatch app development services lead and inspire others in the industry.",
            "Ogtitles": "iWatch App Development Services | Apple Watch App Development Company",
			"Ognames": "Tech2Globe web Solutions LLP",
			"Ogdescriptions": "Tech2globe is known for building creative, innovative and responsive apple watch applications. Our iWatch app development services lead and inspire others in the industry.",
			"twittercard": "Tech2Globe", 
            "twittertitle": "iWatch App Development Services | Apple Watch App Development Company",
            "twitterdescription": "Tech2globe is known for building creative, innovative and responsive apple watch applications. Our iWatch app development services lead and inspire others in the industry.",
			"canonical_url":"https://tech2globe.com/iwatch-application-development-services"
		},

	        "wearable-app-development-services": {
			"pagetitle": "Wearable App Development Services | App Development Agency| Tech2globe",
			"description": "Tech2globe offers the best wearable app development services for different industries. Hire skilled Apple Watch and Android Wearable app developers. We deliver customized and customer-centric wearable applications,",
            "Ogtitles": "Wearable App Development Services | App Development Agency| Tech2globe",
			"Ognames": "Tech2Globe web Solutions LLP",
			"Ogdescriptions": "Tech2globe offers the best wearable app development services for different industries. Hire skilled Apple Watch and Android Wearable app developers. We deliver customized and customer-centric wearable applications,",
			"twittercard": "Tech2Globe", 
            "twittertitle": "Wearable App Development Services | App Development Agency| Tech2globe",
            "twitterdescription": "Tech2globe offers the best wearable app development services for different industries. Hire skilled Apple Watch and Android Wearable app developers. We deliver customized and customer-centric wearable applications,",
			"canonical_url":"https://tech2globe.com/wearable-app-development-services"
		},


	        "machine-learning-services-and-consultation": {
			"pagetitle": "Machine Learning Services And Consultation Services - Tech2globe",
			"description": "With our Machine Learning Development, we make your applications smarter. We provide reliable Machine Learning Services And Consultation to help your business thrive.",
            "Ogtitles": "Machine Learning Services And Consultation Services - Tech2globe",
			"Ognames": "Tech2Globe web Solutions LLP",
			"Ogdescriptions": "With our Machine Learning Development, we make your applications smarter. We provide reliable Machine Learning Services And Consultation to help your business thrive.",
			"twittercard": "Tech2Globe", 
            "twittertitle": "Machine Learning Services And Consultation Services - Tech2globe",
            "twitterdescription": "With our Machine Learning Development, we make your applications smarter. We provide reliable Machine Learning Services And Consultation to help your business thrive.",
			"canonical_url":"https://tech2globe.com/machine-learning-services-and-consultation"
		},


	        "graphic-design-services": {
			"pagetitle": "Graphic Designing Agency |Graphic Design Services Company - Tech2globe",
			"description": "Tech2globe provides professional graphic design services. Graphic Designing plays a vital role in promoting the brand better with visuals that attract. We offers affordable professional graphic design services to agencies all around the world.",
            "Ogtitles": "Graphic Designing Agency |Graphic Design Services Company - Tech2globe",
			"Ognames": "Tech2Globe web Solutions LLP",
			"Ogdescriptions": "Tech2globe provides professional graphic design services. Graphic Designing plays a vital role in promoting the brand better with visuals that attract. We offers affordable professional graphic design services to agencies all around the world.",
			"twittercard": "Tech2Globe", 
            "twittertitle": "Graphic Designing Agency |Graphic Design Services Company - Tech2globe",
            "twitterdescription": "Tech2globe provides professional graphic design services. Graphic Designing plays a vital role in promoting the brand better with visuals that attract. We offers affordable professional graphic design services to agencies all around the world.",
			"canonical_url":"https://tech2globe.com/graphic-design-services"
		},


	        "corporate-branding": {
			"pagetitle": "Corporate Branding Solutions | Tech2globe Branding Agency for Business",
			"description": "Corporate Branding solutions from a leading branding agency, Tech2globe, for corporate identity design –provide constructive branding solutions to define a business’s personality and we are here to do the exact same thing.",
            "Ogtitles": "Corporate Branding Solutions | Tech2globe Branding Agency for Business",
			"Ognames": "Tech2Globe web Solutions LLP",
			"Ogdescriptions": "Corporate Branding solutions from a leading branding agency, Tech2globe, for corporate identity design –provide constructive branding solutions to define a business’s personality and we are here to do the exact same thing.",
			"twittercard": "Tech2Globe", 
            "twittertitle": "Corporate Branding Solutions | Tech2globe Branding Agency for Business",
            "twitterdescription": "Corporate Branding solutions from a leading branding agency, Tech2globe, for corporate identity design –provide constructive branding solutions to define a business’s personality and we are here to do the exact same thing.",
			"canonical_url":"https://tech2globe.com/corporate-branding"
		},


		"automation-testing-services": {
			"pagetitle": "Software Automation Testing Services | Automation Testing - Tech2globe",
			"description": "Tech2globe Software Testing Automation Services enables you to increase productivity, expands test coverage and achieve faster time-to-market. Our home-grown automation testing framework increases efficiency in the overall process.",
            "Ogtitles": "Software Automation Testing Services | Automation Testing - Tech2globe",
			"Ognames": "Tech2Globe web Solutions LLP",
			"Ogdescriptions": "Tech2globe Software Testing Automation Services enables you to increase productivity, expands test coverage and achieve faster time-to-market. Our home-grown automation testing framework increases efficiency in the overall process.",
			"twittercard": "Tech2Globe", 
            "twittertitle": "Software Automation Testing Services | Automation Testing - Tech2globe",
            "twitterdescription": "Tech2globe Software Testing Automation Services enables you to increase productivity, expands test coverage and achieve faster time-to-market. Our home-grown automation testing framework increases efficiency in the overall process.",
			"canonical_url":"https://tech2globe.com/automation-testing-services"
		},
		
		"ecommerce-testing-services": {
			"pagetitle": "E-commerce Website Testing Services |Web Testing Services - Tech2globe",
			"description": "At Tech2globe, we leverage comprehensive testing frameworks and advanced technologies to deliver unparalleled E-commerce website and mobile application testing services.",
            "Ogtitles": "E-commerce Website Testing Services |Web Testing Services - Tech2globe",
			"Ognames": "Tech2Globe web Solutions LLP",
			"Ogdescriptions": "At Tech2globe, we leverage comprehensive testing frameworks and advanced technologies to deliver unparalleled E-commerce website and mobile application testing services.",
			"twittercard": "Tech2Globe", 
            "twittertitle": "E-commerce Website Testing Services |Web Testing Services - Tech2globe",
            "twitterdescription": "At Tech2globe, we leverage comprehensive testing frameworks and advanced technologies to deliver unparalleled E-commerce website and mobile application testing services.",
			"canonical_url":"https://tech2globe.com/ecommerce-testing-services"
		},		
		
			"startup-consulting": {
			"pagetitle": "Hire Startup Consultants | Startup Consulting Services - Tech2globe",
			"description": "Our Start-up consulting services help fast-growth businesses and entrepreneurs through every step of their journey to become global leaders. Learn more about Tech2globe Start-up consulting services.",
            "Ogtitles": "Hire Startup Consultants | Startup Consulting Services - Tech2globe",
			"Ognames": "Tech2Globe web Solutions LLP",
			"Ogdescriptions": "Our Start-up consulting services help fast-growth businesses and entrepreneurs through every step of their journey to become global leaders. Learn more about Tech2globe Start-up consulting services.",
			"twittercard": "Tech2Globe", 
            "twittertitle": "Hire Startup Consultants | Startup Consulting Services - Tech2globe",
            "twitterdescription": "Our Start-up consulting services help fast-growth businesses and entrepreneurs through every step of their journey to become global leaders. Learn more about Tech2globe Start-up consulting services.",
			"canonical_url":"https://tech2globe.com/startup-consulting"
		},		
		
		
			"startup-consulting": {
			"pagetitle": "Hire Startup Consultants | Startup Consulting Services - Tech2globe",
			"description": "Our Start-up consulting services help fast-growth businesses and entrepreneurs through every step of their journey to become global leaders. Learn more about Tech2globe Start-up consulting services.",
            "Ogtitles": "Hire Startup Consultants | Startup Consulting Services - Tech2globe",
			"Ognames": "Tech2Globe web Solutions LLP",
			"Ogdescriptions": "Our Start-up consulting services help fast-growth businesses and entrepreneurs through every step of their journey to become global leaders. Learn more about Tech2globe Start-up consulting services.",
			"twittercard": "Tech2Globe", 
            "twittertitle": "Hire Startup Consultants | Startup Consulting Services - Tech2globe",
            "twitterdescription": "Our Start-up consulting services help fast-growth businesses and entrepreneurs through every step of their journey to become global leaders. Learn more about Tech2globe Start-up consulting services.",
			"canonical_url":"https://tech2globe.com/startup-consulting"
		},		
				
		
		"contact-us": {
			"pagetitle": "Contact Us at Tech2globe IT Solution Company",
			"description": "For more information on any of our services or solutions, please contact us today, either via email or by phone or by filling out our Quotation Form.",
            "Ogtitles": "Contact Us at Tech2globe IT Solution Company",
			"Ognames": "Tech2Globe web Solutions LLP",
			"Ogdescriptions": "For more information on any of our services or solutions, please contact us today, either via email or by phone or by filling out our Quotation Form.",
			"twittercard": "Tech2Globe", 
            "twittertitle": "Contact Us at Tech2globe IT Solution Company",
            "twitterdescription": "For more information on any of our services or solutions, please contact us today, either via email or by phone or by filling out our Quotation Form.",
			"canonical_url":"https://tech2globe.com/contact-us"
		},		
		
		
		"contact-us": {
			"pagetitle": "Contact Us at Tech2globe IT Solution Company",
			"description": "For more information on any of our services or solutions, please contact us today, either via email or by phone or by filling out our Quotation Form.",
            "Ogtitles": "Contact Us at Tech2globe IT Solution Company",
			"Ognames": "Tech2Globe web Solutions LLP",
			"Ogdescriptions": "For more information on any of our services or solutions, please contact us today, either via email or by phone or by filling out our Quotation Form.",
			"twittercard": "Tech2Globe", 
            "twittertitle": "Contact Us at Tech2globe IT Solution Company",
            "twitterdescription": "For more information on any of our services or solutions, please contact us today, either via email or by phone or by filling out our Quotation Form.",
			"canonical_url":"https://tech2globe.com/contact-us"
		},		
		
		
		"aboutus": {
			"pagetitle": "Read about us to know us better - Tech2Globe",
			"description": "Tech2globe is a full service IT company. We are client-focused, value close relationships & work with small to medium-sized businesses. Our passion for providing better results at affordable prices has remained unabated. Read about us!",
            "Ogtitles": "Read about us to know us better - Tech2Globe",
			"Ognames": "Tech2Globe web Solutions LLP",
			"Ogdescriptions": "Tech2globe is a full service IT company. We are client-focused, value close relationships & work with small to medium-sized businesses. Our passion for providing better results at affordable prices has remained unabated. Read about us!",
			"twittercard": "Tech2Globe", 
            "twittertitle": "Read about us to know us better - Tech2Globe",
            "twitterdescription": "Tech2globe is a full service IT company. We are client-focused, value close relationships & work with small to medium-sized businesses. Our passion for providing better results at affordable prices has remained unabated. Read about us!",
			"canonical_url":"https://tech2globe.com/aboutus"
		},		
		
		"aboutus": {
			"pagetitle": "Read about us to know us better - Tech2Globe",
			"description": "Tech2globe is a full service IT company. We are client-focused, value close relationships & work with small to medium-sized businesses. Our passion for providing better results at affordable prices has remained unabated. Read about us!",
            "Ogtitles": "Read about us to know us better - Tech2Globe",
			"Ognames": "Tech2Globe web Solutions LLP",
			"Ogdescriptions": "Tech2globe is a full service IT company. We are client-focused, value close relationships & work with small to medium-sized businesses. Our passion for providing better results at affordable prices has remained unabated. Read about us!",
			"twittercard": "Tech2Globe", 
            "twittertitle": "Read about us to know us better - Tech2Globe",
            "twitterdescription": "Tech2globe is a full service IT company. We are client-focused, value close relationships & work with small to medium-sized businesses. Our passion for providing better results at affordable prices has remained unabated. Read about us!",
			"canonical_url":"https://tech2globe.com/aboutus"
		},		
				
		
			"Infrastructure": {
			"pagetitle": "OFFICE INFRASTRUCTURE DESIGN AND RELOCATION - Tech2globe",
			"description": "Tech2globe designed the infrastructure related components of the new space such as computer room, voice, data and power for the workspace.",
            "Ogtitles": "OFFICE INFRASTRUCTURE DESIGN AND RELOCATION - Tech2globe",
			"Ognames": "Tech2Globe web Solutions LLP",
			"Ogdescriptions": "Tech2globe designed the infrastructure related components of the new space such as computer room, voice, data and power for the workspace.",
			"twittercard": "Tech2Globe", 
            "twittertitle": "OFFICE INFRASTRUCTURE DESIGN AND RELOCATION - Tech2globe",
            "twitterdescription": "Tech2globe designed the infrastructure related components of the new space such as computer room, voice, data and power for the workspace.",
			"canonical_url":"https://tech2globe.com/Infrastructure"
		},
		
		"values": {
			"pagetitle": "Value Our Clients For Better Relationship: Tech2globe",
			"description": "Tech2globe leading-edge of latest technologies and apps, making sure that our professional record and knowledge, technical expertise, experience and level of client service is incomparable in the industry.",
            "Ogtitles": "Value Our Clients For Better Relationship: Tech2globe",
			"Ognames": "Tech2Globe web Solutions LLP",
			"Ogdescriptions": "Tech2globe leading-edge of latest technologies and apps, making sure that our professional record and knowledge, technical expertise, experience and level of client service is incomparable in the industry.",
			"twittercard": "Tech2Globe", 
            "twittertitle": "Value Our Clients For Better Relationship: Tech2globe",
            "twitterdescription": "Tech2globe leading-edge of latest technologies and apps, making sure that our professional record and knowledge, technical expertise, experience and level of client service is incomparable in the industry.",
			"canonical_url":"https://tech2globe.com/values"
		},	
		
		"associations-ascription": {
			"pagetitle": "Industry Certifications Associations Ascription :  Tech2globe",
			"description": "At Tech2globe, our commitment to providing high quality services is proved by the standards certifications and accreditation that we have achieved over the years.",
            "Ogtitles": "Industry Certifications Associations Ascription :  Tech2globe",
			"Ognames": "Tech2Globe web Solutions LLP",
			"Ogdescriptions": "At Tech2globe, our commitment to providing high quality services is proved by the standards certifications and accreditation that we have achieved over the years.",
			"twittercard": "Tech2Globe", 
            "twittertitle": "Industry Certifications Associations Ascription :  Tech2globe",
            "twitterdescription": "At Tech2globe, our commitment to providing high quality services is proved by the standards certifications and accreditation that we have achieved over the years.",
			"canonical_url":"https://tech2globe.com/associations-ascription"
		},			
		
	  "clients": {
			"pagetitle": "Our Portfolio of clients at Tech2globe",
			"description": "Over the past decade and a half, Tech2globe has catered to the needs of over 7,800 clients from different domains worldwide. Have a look at our clients!",
            "Ogtitles": "Our Portfolio of clients at Tech2globe",
			"Ognames": "Tech2Globe web Solutions LLP",
			"Ogdescriptions": "Over the past decade and a half, Tech2globe has catered to the needs of over 7,800 clients from different domains worldwide. Have a look at our clients!",
			"twittercard": "Tech2Globe", 
            "twittertitle": "Our Portfolio of clients at Tech2globe",
            "twitterdescription": "Over the past decade and a half, Tech2globe has catered to the needs of over 7,800 clients from different domains worldwide. Have a look at our clients!",
			"canonical_url":"https://tech2globe.com/clients"
		},	
		
		
			"csr-initiatives": {
			"pagetitle": "Corporate Social Responsibility (CSR) | CSR INITIATIVES",
			"description": "Corporate social responsibility (CSR) is a business model that helps a company be socially accountable to itself, its stakeholders, and the public.",
            "Ogtitles": "Corporate Social Responsibility (CSR) | CSR INITIATIVES",
			"Ognames": "Tech2Globe web Solutions LLP",
			"Ogdescriptions": "Corporate social responsibility (CSR) is a business model that helps a company be socially accountable to itself, its stakeholders, and the public.",
			"twittercard": "Tech2Globe", 
            "twittertitle": "Corporate Social Responsibility (CSR) | CSR INITIATIVES",
            "twitterdescription": "Corporate social responsibility (CSR) is a business model that helps a company be socially accountable to itself, its stakeholders, and the public.",
			"canonical_url":"https://tech2globe.com/csr-initiatives"
		},	
		
		
			"life-at-tech2globe": {
			"pagetitle": "Life@Tech2Globe: Social and cultural events",
			"description": "Folks who only work and never play are very dull indeed. Be it Diwali, Christmas, New Year, or Holi, we celebrate every holiday as a team in Tech2globe.",
            "Ogtitles": "Life@Tech2Globe: Social and cultural events",
			"Ognames": "Tech2Globe web Solutions LLP",
			"Ogdescriptions": "Folks who only work and never play are very dull indeed. Be it Diwali, Christmas, New Year, or Holi, we celebrate every holiday as a team in Tech2globe.",
			"twittercard": "Tech2Globe", 
            "twittertitle": "Life@Tech2Globe: Social and cultural events",
            "twitterdescription": "Folks who only work and never play are very dull indeed. Be it Diwali, Christmas, New Year, or Holi, we celebrate every holiday as a team in Tech2globe.",
			"canonical_url":"https://tech2globe.com/life-at-tech2globe"
		}	
	}
}';


//$data = json_decode($json,true);
$data = json_decode(preg_replace('/[\x00-\x1F\x80-\xFF]/', '', $json), true);

@$url = 'https://www.tech2globe.com' . $_SERVER['REQUEST_URI'];
foreach ($data as $key => $value) {

	foreach (@$value as $ke => $val) {
		if (@$url === 'https://www.tech2globe.com/') {
			$PAIR = "/index";
			@$pageTitle = 'Tech2Globe: Online Marketing | Ecommerce & IT Consulting | BPO/KPO';

			@$keyWords = 'Tech2Globe is Web Portal and Software Development Company that helps to drive top-line revenue growth for our clients. We also offer data management services, ERP solutions, photo editing services, online marketing and ecommerce solutions as well.';
			@$metaTags = 'Software Development Company India, enterprise portal development, content management system, data management services, data processing services, catalog management services, complete marketplace management service, data entry services, data mining services, data conversion services, Indexing Services, data analytics services, photo editing services, Post Processing of Real Estate Images and photos, photo manipulation services, Image Clipping Services, Photo Enhancement Services, ecommerce solutions, oscommerce ecommerce, SEO Services and Packages. Nopcommerce and magento website development.';
			@$Ogtitles = 'Tech2Globe: Online Marketing | Ecommerce & IT Consulting | BPO/KPO';
			@$Ognames = 'Tech2Globe web Solutions LLP';
			@$Ogurl = 'https://www.tech2globe.com/';
			@$Ogdescriptions = 'Tech2Globe is Web Portal & Software Development Company that helps to drive top-line revenue growth for their clients. We also offer data management, eCommerce, IT Consulting, online marketing & more.';
			@$canonical_url = 'https://www.tech2globe.com';
			@$Ogimage = 'https://tech2globe.com/images/tech2globe.jpg';
			@$twittercard = "summary";
			@$twittertitle = "Tech2Globe: Online Marketing | Ecommerce & IT Consulting | BPO/KPO";
			@$twitterdescription = "Tech2Globe is Web Portal & Software Development Company that helps to drive top-line revenue growth for their clients. We also offer data management, eCommerce, IT Consulting, online marketing & more.";
			@$twitterimage = 'https://tech2globe.com/images/tech2globe.jpg';
		} else {
			$PAIR = "/" . $ke . "";

			if (strpos($url, $PAIR) > 0) {

				@$pageTitle = $val['pagetitle'];

				@$keyWords = $val['description'];

				@$metaTags = $val['keywords'];
				@$Ogtitles = $val['Ogtitles'];
				@$Ognames = $val['Ognames'];
				@$Ogurl = $val['Ogurl'];
				@$Ogdescriptions = $val['Ogdescriptions'];
				@$canonical_url = $val['canonical_url'];
				@$Ogimage = $val['Ogimage'];
				@$twittercard = $val['twittercard'];
				@$twittertitle = $val['twittertitle'];
				@$twitterdescription = $val['twitterdescription'];
				@$twitterimage = $val['twitterimage'];
			}
		}
	}
}
?>

<head>

	<meta charset="utf-8">
	<link rel="alternate" href="https://www.tech2globe.com" hreflang="en-us" />
	<!-- <link rel="alternate" href="https://www.tech2globe.com" hreflang="en-gb" />
<link rel="alternate" href="https://www.tech2globe.com/de" hreflang="de" /> -->

	<meta name="msvalidate.01" content="797022D3B21EFABB92F377EDA694AFDA" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<title><?php echo $pageTitle ?></title>

	<meta name="description" content="<?= @$keyWords ?>" />
	<meta name="keywords" content="<?= @$metaTags ?>" />
	<meta http-equiv="Cache-control" content="public">
	<meta http-equiv="Cache-control" content="no-store">
	<meta http-equiv="Cache-control" content="no-cache" />
	<meta http-equiv="expires" content="<?php $time = time();
										$check = $time + date("Z", $time);
										echo strftime("%B %d, %Y @ %H:%M:%S UTC", $check); ?>" />
	<meta name="google-site-verification" content="79ay6keH28PN3mTjpYHjeRGAfZAhr6w_kU6iF3LUuSM" />
	<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
	<meta http-equiv="Pragma" content="no-cache" />
	<link rel='canonical' href="<?= @$canonical_url ?>" />
	<meta property="og:title" content="<?= @$Ogtitles ?>">
	<meta property="og:site_name" content="<?= @$Ognames ?>">
	<meta property="og:locale" content="en_US">
	<meta property="og:url" content="<?= @$Ogurl ?>">
	<meta property="og:description" content="<?= @$Ogdescriptions ?>">
	<meta property="og:type" content="website">
	<meta property="og:image" content="<?= @$Ogimage ?>">
	<meta name="robots" content="index, follow" />
	<meta name="googlebot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
	<meta name="bingbot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
	<meta name="twitter:card" content="<?= @$twittercard ?>" />
	<meta name="twitter:title" content="<?= @$twittertitle ?>">
	<meta name="twitter:description" content="<?= @$twitterdescription ?>">
	<meta name="twitter:image" content="<?= @$twitterimage ?>">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<link type="text/css" rel="stylesheet" href="https://res.cloudinary.com/webinnovation/raw/upload/v1576617747/css/bootstrap.min_ysxhrv_rqctbc.css" media="all" />
	<link type="text/css" rel="stylesheet" href="https://res.cloudinary.com/webinnovation/raw/upload/v1576611580/css/jquery.smartmenus.bootstrap_afbprv.css" media="all" />
	<link type="text/css" rel="stylesheet" href="css/style.css" media="all" />
	<link type="text/css" rel="stylesheet" href="https://res.cloudinary.com/webinnovation/raw/upload/v1576611676/css/responsive_oqq19c.css" media="all" />
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" />
	<script src="https://res.cloudinary.com/webinnovation/raw/upload/v1576612145/css/jquery-1.11.0.min_wf7z5u.js"></script>
	<script type="text/javascript" src="https://res.cloudinary.com/webinnovation/raw/upload/v1576612145/css/pagination_j4wjm0.js" async></script>
	<script src="https://res.cloudinary.com/webinnovation/raw/upload/v1576612147/css/html5shiv_rpf0kb.js" async></script>
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
<![endif]-->

	<!-- NEW Bootstrap CSS -->

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script> <!--    integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"----->
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
	<!-- NEW Bootstrap CSS END -->

	<!--<script src="js/respond.min.js" async></script>--->

	<!-- Add fancyBox -->
	<link rel="stylesheet" href="https://res.cloudinary.com/webinnovation/raw/upload/v1576611963/css/jquery.fancybox_ajjvid.css" type="text/css" media="screen" />
	<script type="text/javascript" src="https://res.cloudinary.com/webinnovation/raw/upload/v1576612148/css/jquery.fancybox.pack_atckdo.js" async></script>

	<script type="text/javascript" src="https://res.cloudinary.com/webinnovation/raw/upload/v1576612147/css/bootstrap.min_it32zd.js" async></script>
	<script type="text/javascript" src="https://res.cloudinary.com/webinnovation/raw/upload/v1576612147/css/jquery.bxslider_zva006.js" async></script>
	<script type="text/javascript" src="https://res.cloudinary.com/webinnovation/raw/upload/v1576612147/css/function_t4znz3.js" async></script>
	<!--<script type="text/javascript" src="js/jquery.smartmenus.js"></script>
<!--<script type="text/javascript" src="https://res.cloudinary.com/webinnovation/raw/upload/v1576612148/css/jquery.smartmenus.bootstrap_mwikti.js"  async></script>-->
	<script type="text/javascript" src="https://res.cloudinary.com/webinnovation/raw/upload/v1576612148/css/jquery.colorbox-min_kinzv2.js" async></script>

	<link rel="icon" href="https://www.tech2globe.com/images/favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" href="https://www.tech2globe.com/images/favicon.ico" type="image/x-icon" />
	<link href="https://plus.google.com/+Tech2globe_Software_Web_Development_Comapany" rel="publisher">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap45.css">


	<script src="https://res.cloudinary.com/webinnovation/raw/upload/v1576612148/css/jquery.mCustomScrollbar.concat.min_ehsort.js" async></script>
	<script src="https://res.cloudinary.com/webinnovation/raw/upload/v1576612145/css/script_rdkf4r.js" async></script>

	<!--<script type="text/javascript" src="https://static1.clutch.co/sites/all/modules/custom/clutch_widget/js/widget.js" async></script>-->


	<script src="https://kit.fontawesome.com/16f1f0d601.js" async></script>
	<!--<script type="text/javascript" src="js/jquery.marquee.js"></script>
<script>
	$(function(){
		var $mwo = $('.marquee-with-options');
		$('.marquee').marquee();
		$('.marquee-with-options').marquee({
			//speed in milliseconds of the marquee
			speed: 40000,
			//gap in pixels between the tickers
			gap: 6,
			//gap in pixels between the tickers
			delayBeforeStart: 0,
			//'left' or 'right'
			direction: 'left',
			//true or false - should the marquee be duplicated to show an effect of continues flow
			duplicated: true,
			//on hover pause the marquee - using jQuery plugin https://github.com/tobia/Pause
			pauseOnHover: true
		});
		
	});
</script> --->

	<!-- Facebook Pixel Code -->
	<script>
		! function(f, b, e, v, n, t, s) {
			if (f.fbq) return;
			n = f.fbq = function() {
				n.callMethod ?
					n.callMethod.apply(n, arguments) : n.queue.push(arguments)
			};
			if (!f._fbq) f._fbq = n;
			n.push = n;
			n.loaded = !0;
			n.version = '2.0';
			n.queue = [];
			t = b.createElement(e);
			t.async = !0;
			t.src = v;
			s = b.getElementsByTagName(e)[0];
			s.parentNode.insertBefore(t, s)
		}(window, document, 'script',
			'https://connect.facebook.net/en_US/fbevents.js');
		fbq('init', '198071485682730');
		fbq('track', 'PageView');
	</script>
	<noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=198071485682730&ev=PageView&noscript=1" /></noscript>
	<!-- End Facebook Pixel Code -->
	<link href="cookies/cookies-message.min.css" rel="stylesheet" async>
	<script src="cookies/cookies-message.min.js" async></script>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-51012394-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'UA-51012394-1');
		var console = {};
		console.log = function() {};
	</script>
	<!-- Google tag (gtag.js) -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=AW-972611168"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());
		gtag('config', 'AW-972611168');
	</script>
	
</head>
<?php include 'header.php'; ?>


<div class="limoking-page-title-wrapper header-style-2-title-wrapper">
    <div class=limoking-page-title-overlay></div>
    <div class="limoking-page-title-container container">
        <h1 class="limoking-page-title">Contact Us</h1>
        <!-- <span class=limoking-page-caption>Caption placed here</span> -->
    </div>
</div>

<div class=content-wrapper>
        <div class=limoking-content>
            <div class=above-sidebar-wrapper>
                <section id=content-section-1>
                    <div class="limoking-full-size-wrapper gdlr-show-all " style="padding-bottom: 0px;  background-color: #ffffff; ">
                        <div class="limoking-item limoking-content-item" style="margin-bottom: 0px;">
                            <div class="wpgmp_map_container wpgmp-map-1" rel=map1>
                                <iframe style="width:100%; height:480px; border:0" src="https://maps.google.com/maps?q=28.900301,77.5884483&t=&z=13&ie=UTF8&iwloc=&output=embed" width="600" height="450" ></iframe>
                                <div style="position: absolute;width: 80%;bottom: 20px;left: 0;right: 0;margin-left: auto;margin-right: auto;color: #000;">
                            </div>
                        </div>
                        <div class=clear></div>
                        <div class=clear></div>
                    </div>
                    <div class=clear></div>
                </section>
            </div>



            <?php
if(!empty($_POST["send"])) {
	$name = $_POST["userName"];
	$email = $_POST["userEmail"];
	$number = $_POST["userNumber"];
	$content = $_POST["message"];

	$toEmail = "er.akshayone@gmail.com";
	$mailHeaders = "From: " . $name . "<". $email .">\r\n";
	if(mail($toEmail, $subject, $content, $mailHeaders)) {
	    $message = "Your contact information is received successfully.";
	    $type = "success";
	}
}
// require_once "contact-view.php";
?>
            <div class=with-sidebar-wrapper>
                <div class="with-sidebar-container container">
                    <div class="with-sidebar-left eight columns">
                        <div class="with-sidebar-content twelve columns">
                            <section id=content-section-2>
                                <div class="section-container container">
                                    <div class="limoking-item limoking-content-item" style="margin-bottom: 60px;"><span class=clear></span><span class=limoking-space style="margin-top: -22px; display: block;"></span>
                                        <h5 class="limoking-heading-shortcode " style="font-weight: bold;">Please fulfil the form below.</h5>
                                        <p> <span class=clear></span><span class=limoking-space style="margin-top: 25px; display: block;"></span>
                                            <div role=form class=wpcf7 id=wpcf7-f5-o1 lang=en-US dir=ltr>
                                                <div class=screen-reader-response></div>
                                                <form class="quform" action="plugins/quform/process.php" method="post" enctype="multipart/form-data" onclick="">

                                                    <div class="quform-elements">
                                                        <div class="quform-element">
                                                            
                                                                <br>
                                                                <span class="wpcf7-form-control-wrap your-name">
                                                                    <input id="name" type="text" name="userName" size="40" class="input1" aria-required="true" aria-invalid="false" placeholder="Name*">
                                                                </span> 
                                                            
                                                        </div>
                                                        <div class="quform-element">
                                                            
                                                                <br>
                                                                <span class="wpcf7-form-control-wrap your-email">
                                                                    <input id="email" type="email" name="userEmail" size="40" class="input1" aria-required="true" aria-invalid="false" placeholder="Email*">
                                                                </span> 
                                                            
                                                        </div>
                                                        <div class="quform-element">
                                                            
                                                            <br>
                                                            <span class="wpcf7-form-control-wrap your-email">
                                                                <input id="number" type="text" name="userNumber" size="10" class="input1" aria-required="true" aria-invalid="false" placeholder="Mobile Number*">
                                                            </span> 
                                                        
                                                        </div>
                                                        <div class="quform-element">
                                                            
                                                                <br>
                                                                <span class="wpcf7-form-control-wrap your-message">
                                                                    <textarea  id="message" name="message" cols="40" rows="10" class="input1" aria-invalid="false" placeholder="Message*"></textarea>
                                                                </span>
                                                            
                                                        </div>
                                                        
                                                        <!-- Begin Submit button -->
                                                        <div class="quform-submit">
                                                            <div class="quform-submit-inner">
                                                                <input type="submit" class="submit-button" name="Submit">
                                                            </div>
                                                            <div class="quform-loading-wrap"><span class="quform-loading"></span></div>
                                                        </div>
                                                        
                                                    </div>
                                                </form>
                                            </div>
                                        </p>
                                    </div>
                                    <div class=clear></div>
                                </div>
                            </section>
                        </div>
                        <div class=clear></div>
                    </div>
                    <div class="limoking-sidebar limoking-right-sidebar four columns">
                        <div class="limoking-item-start-content sidebar-right-item">
                            <div id=text-6 class="widget widget_text limoking-item limoking-widget">
                                <!-- <h3 class="limoking-widget-title">Before Contacting Us</h3> -->
                                <div class=clear></div>
                                <!-- <div class=textwidget>Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Non equidem invideo, miror magis posuere velit aliquet.</div> -->
                            </div>
                            <div id=text-7 class="widget widget_text limoking-item limoking-widget">
                                <h3 class="limoking-widget-title">Contact Information</h3>
                                <div class=clear></div>
                                <div class=textwidget>
                                    <p>164, Mohkampur Mini Metro EV LLP, Khasra No. 636/4, Village Dimoli, Mohiuddinpur, Meerut</p>
                                    <p><a style="color:black;" href="tel:+917617787857"><i class="limoking-icon fas fa-phone-alt" style="vertical-align: middle; color: #444444; font-size: 16px; "></i> +91-7617787857</p>
                                    <p><a style="color:black;" href="tel:18002704195"><i class="limoking-icon fas fa-phone-alt" style="vertical-align: middle; color: #444444; font-size: 16px; "></i> 1800-270-4195</p>
                                    <p><a style="color:black;" href="mailto:info@minimetro.com"><i class="limoking-icon fa fa-envelope" style="vertical-align: middle; color: #444444; font-size: 16px; "></i> info@minimetro.com</a></p>
                                    <p><i class="limoking-icon fa fa-clock-o" style="vertical-align: middle; color: #444444; font-size: 16px; "></i> Everyday 9:00-17:00</p>
                                </div>
                            </div>
                            <div id=text-8 class="widget widget_text limoking-item limoking-widget">
                                <h3 class="limoking-widget-title">Social Media</h3>
                                <div class=clear></div>
                                <div class=textwidget><a href=http://facebook.com><i class="limoking-icon fa fa-facebook" style="vertical-align: middle; color: #444444; font-size: 28px; " ></i></a> <a href=http://twitter.com><i class="limoking-icon fa fa-twitter" style="vertical-align: middle; color: #444444; font-size: 28px; " ></i></a> <a href=#><i class="limoking-icon fa fa-dribbble" style="vertical-align: middle; color: #444444; font-size: 28px; " ></i></a> <a href=#><i class="limoking-icon fa fa-pinterest" style="vertical-align: middle; color: #444444; font-size: 28px; " ></i></a> <a href=#><i class="limoking-icon fa fa-google-plus" style="vertical-align: middle; color: #444444; font-size: 28px; " ></i></a> <a href=#><i class="limoking-icon fa fa-instagram" style="vertical-align: middle; color: #444444; font-size: 28px; " ></i></a></div>
                            </div>
                        </div>
                    </div>
                    <div class=clear></div>
                </div>
            </div>
            <!-- <div class=below-sidebar-wrapper>
                <section id=content-section-3>
                    <div class="limoking-parallax-wrapper limoking-background-image gdlr-show-all no-skin" id=limoking-parallax-wrapper-1 data-bgspeed=0.2 style="background-image: url('upload/modern-bg1.jpg'); padding-top: 100px; padding-bottom: 50px; ">
                        <div class=container>
                            <div class="four columns">
                                <div class="limoking-box-with-icon-ux limoking-ux">
                                    <div class="limoking-item limoking-box-with-icon-item pos-top type-circle">
                                        <div class=box-with-circle-icon style="background-color: #36bddb"><i class="fa fa-envelope" style=color:#ffffff;></i>
                                        </div>
                                        <h4 class="box-with-icon-title">Contact By Email</h4>
                                        <div class=clear></div>
                                        <div class=box-with-icon-caption>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="four columns">
                                <div class="limoking-box-with-icon-ux limoking-ux">
                                    <div class="limoking-item limoking-box-with-icon-item pos-top type-circle">
                                        <div class=box-with-circle-icon style="background-color: #36bddb"><i class="fa fa-phone" style=color:#ffffff;></i>
                                            <br>
                                        </div>
                                        <h4 class="box-with-icon-title">Contact By Phone</h4>
                                        <div class=clear></div>
                                        <div class=box-with-icon-caption>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="four columns">
                                <div class="limoking-box-with-icon-ux limoking-ux">
                                    <div class="limoking-item limoking-box-with-icon-item pos-top type-circle">
                                        <div class=box-with-circle-icon style="background-color: #36bddb"><i class="fa fa-home" style=color:#ffffff;></i>
                                            <br>
                                        </div>
                                        <h4 class="box-with-icon-title">Come To See Us</h4>
                                        <div class=clear></div>
                                        <div class=box-with-icon-caption>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=clear></div>
                        </div>
                    </div>
                    <div class=clear></div> -->
                </section>
            </div>
        </div>
        <div class=clear></div>
    </div>

<?php include 'footer.php'; ?>
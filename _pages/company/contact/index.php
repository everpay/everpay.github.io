<?php
date_default_timezone_set ("PST8PDT");
print "<b>Date/Time (PST) Built: ".date("Ymd H:i:s e")." </b><p>\n";
print "Local time from the browser: <br>"."<script src='date.js'></script>"
?>
---
layout: default
title: Contact Us
description: Send us a message
permalink: /company/contact/index.php
sitemap: true
---

  <!-- Inner Page Header
    ================================================== -->
    <section class="tp--inner-header tp--section tp--section-with-bg-overlay tp--section-with-bg-cover tp--height-50 text-center" style="background: url('images/bg-intro-1.jpg');">

      <div class="container tp--vertical-align">
        
        <div class="row">
          
          <div class="col-xs-12">
            
            <h2>Contact Us</h2>
            <p>Send us a message and we'll get back to you as quickly as possible</p>

          </div>

        </div>

      </div>

    </section>




    <!-- Contact Section
    ================================================== -->
    <section id="contact" class="tp--section tp--contact tp--padding-lg">

      <div class="container">

        <div class="row">
	<div class="col-md-6">
					<h3 class="">CONTACT INFO</h3>
					<ul class="list-unstyled contact-address m-bottom-20">
						<li><i class="ti-location-pin"></i> <span>1234 North Main Street New York, NY 22222</span></li>
						<li><i class="ti-headphone"></i> <span>(1800) 765 - 4321</span></li>
						<li><i class="ti-email"></i> <span>email@yourdomain.com</span></li>
					</ul>
					<h3 class="">FOLLOW US</h3>
					<ul class="list-inline list-social-icons">
						<li><a href="#"><i class="fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa-twitter-alt"></i></a></li>
						<li><a href="#"><i class="fa-google"></i></a></li>
						<li><a href="#"><i class="fa-linkedin"></i></a></li>
					</ul>
				</div>
          <div class="col-sm-6">
            
            <form name="contact" id="contact-form" action="contact.html" netlify>

              <div class="messages"></div>

              <div class="controls">

                <div class="row">
                    <div class="col-md-12">

                      <label for="form_name">Full Name *</label>
                      
                      <div class="row">
                        
                      <div class="col-md-6">

                        <div class="form-group">
                          <label for="form_lastname" class="sr-only">First Name *</label> 
                          <input id="form_name" type="text" name="name" class="form-control" placeholder="First name" required="required">
                          <div class="help-block with-errors"></div>
                        </div>

                      </div>

                      <div class="col-md-6">

                        <div class="form-group">
                            <label for="form_lastname" class="sr-only">Last Name *</label>
                            <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Last name" required="required">
                            <div class="help-block with-errors"></div>
                        </div>

                      </div>

                      </div>
                        
                    </div>
                    
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="form_email">Email *</label>
                            <input id="form_email" type="email" name="email" class="form-control" placeholder="Please enter your email" required="required">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="form_message">Message *</label>
                            <textarea id="form_message" name="message" class="form-control" placeholder="Please enter your message" rows="4" required="required"></textarea>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
			
			
  <label for="recaptcha_response_field">Captcha</label>
  <div id="recaptcha_widget" class="recaptcha">
    <div class="image">
      <div id="recaptcha_image"></div>
    </div>

    <div class="headline recaptcha_only_if_image">Enter the words above:</div>
    <div class="headline recaptcha_only_if_audio">Enter the numbers you hear:</div>

    <input type="text" id="recaptcha_response_field" name="recaptcha_response_field" required />

    <span class="recaptcha_icon"><a href="javascript:Recaptcha.reload()"><i class="fa fa-refresh"></i></a></span>
    <span class="recaptcha_icon recaptcha_only_if_image"><a href="javascript:Recaptcha.switch_type('audio')"><i class="fa fa-volume-up"></i></a></span>
    <span class="recaptcha_icon recaptcha_only_if_audio"><a href="javascript:Recaptcha.switch_type('image')"><i class="fa fa-font"></i></a></span>
    <span class="recaptcha_icon"><a href="javascript:Recaptcha.showhelp()"><i class="fa fa-question-circle"></i></a></span>
  </div><br/>
  <div id="notice" class="notice" data-captcha-failed="Incorrect captcha!" data-error="There was an error sending the message, please try again."></div>
  
			
                    <div class="col-md-12 text-center">
                        <input type="submit" class="btn btn-primary btn-lg btn-send" value="Send your message">
                    </div>
                </div>

              </div>

            </form>

          </div>

        </div><!-- /.row -->
      </div>
<div class="contact-map">
			<a href="#" class="map-toggle wow rotateIn" data-toggle="tooltip" data-trigger="hover" title="Toggle Map"><i class="ti-map-alt"></i> <span class="sr-only">Map Toggle</span></a>
			<div id="map"></div>
    </section>

<script type="text/javascript" src="http://www.google.com/recaptcha/api/js/recaptcha_ajax.js"></script>


<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <title>BitCredits - Contact</title>
  <meta name="description" content="BitBank - Contact">
  <?php include "./includes/header.php"; ?>
  <div class="page-title-container">
    
    <div class="container">
      
      <div class="col-sm-12">
      
      <p class="page-title animated bounceInDown">Contact Minato</p>
      
    </div>
      
    </div>
    
  </div>
 
  <!--<div class='embed-container'><iframe src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387144.0075834208!2d-73.97800349999999!3d40.7056308!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY!5e0!3m2!1sen!2sus!4v1394298866288' width='100%' height='250' frameborder='0' style='border:0'></iframe></div>
   
  <!--////////// CONTENT SECTION ////////// -->
  <section id="content">  
  
  <div class="container">
  
    <div class="row">  
        
    <div class="section-title wow animated fadeIn">
      <h1>Contact Us</h1>
      <h2>Send us a secure message, dont forget to leave a way to reply in the message</h2>
    </div>
    
    </div><!-- /row -->    
    
    <div class="row">  
      
     
      <div id="note" class="col-sm-5 pull-right"></div><!-- End notification -->    
       <div class="col-sm-6">
          <!--////////// CONTACT FORM STARTS HERE ///////////-->
          <div class="contact-form">
          
            <form id="ajax-contact-form" class="form-horizontal" action="">
              <div class="group">
                <div class="form-group">
                  <label for="name" class="col-sm-3 control-label">Name</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Bit Credits">
                  </div>
                </div><!-- end form-group -->
              </div><!-- /group -->

              <div class="group">
                <div class="form-group">
                  <label for="name" class="col-sm-3 control-label">E-mail</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="email" name="email" placeholder="bitcredits@bitcoinrocks.com">
                  </div>
                </div><!-- end form-group -->
              </div><!-- /row -->

              <div class="group">
                <div class="form-group">
                  <label for="name" class="col-sm-3 control-label">Subject</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="subject" name="subject" placeholder="your subject">
                  </div>
                </div><!-- end form-group -->
              </div><!-- /row -->

              <div class="group">
                <div class="form-group textarea">
                  <label for="name" class="col-sm-3 control-label">Message</label>
                  <div class="col-sm-9">
                    <textarea class="form-control" id="message" rows="8" name="message" placeholder="Type your message..."></textarea>
                  </div>
                </div><!-- end form-group -->
                
                <input type="submit" value="Send Message" class="btn btn-large btn-primary contact-submit pull-right">

              </div><!-- /row -->
            </form>
          </div><!-- /contact-form -->
          <!-- ////////// END CONTACT FORM -->
        </div><!-- /col-sm-6 --> 
          
         
    </div><!-- /row -->
        
  </div><!-- /container -->
  
    
      
  </section>  


 <?php include "./includes/footer.php"?>
  <!--////////// JAVASCRIPT FILES INCLUDES //////////-->
  <script src="js/bootstrap.min.js"></script>
  <script src="js/bootstrap-hover-dropdown.min.js"></script>
  <script src="js/respond.min.js"></script>
  <script src="js/owl.carousel.js"></script>
  <script src="js/jquery.ui.totop.js"></script>
  <script src="js/custom.js"></script>
  <script type="text/javascript">                                 
  // contact form js
  jQuery(document).ready(function($) {
  $("#ajax-contact-form").submit(function() {
  var str = $(this).serialize();
  $.ajax({
    type: "POST",
    url: "inc/contact-process.php",
    data: str,
    success: function(msg) {
    // Message Sent? Show the 'Thank You' message and hide the form
    if(msg == 'OK') {
      result = '<div class="notification_ok">Your message has been sent. Thank you!</div>';
      $("#fields").hide();
    } else {
      result = msg;
    }
    $('#note').html(result);
    }
  });
  return false;
  });
  });
  </script>   
   <!-- End Contact -->
  </body>
</html>

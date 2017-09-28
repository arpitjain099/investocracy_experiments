<link rel="stylesheet" href="fonts/font-awesome-4.6.3/css/font-awesome.min.css">

<section class="mbr-section mbr-section--relative mbr-section--fixed-size" id="contact" style="background-color: rgb(239, 239, 239);">
    
    <div class="mbr-section__container container" >
        <div class="mbr-contacts mbr-contacts--wysiwyg row">
            <div class="col-sm-6">
                 <p class="mbr-contacts__text"><strong>Reach out</strong><br>
E-mail - <a href="mailto:reachout@fundmyventure.co">reachout@fundmyventure.co</a><br>
Phone - (+91) 7829369467<!--080-95994233--></p><br><br>
        
        <a href="https://angel.co/fundmyventure" target="_blank"><i class="fa fa-angellist fa-2x" ></i></a>
        &nbsp&nbsp&nbsp&nbsp<a href="https://medium.com/fund-my-venture" target="_blank"><i class="fa fa-medium fa-2x" ></i></a>&nbsp&nbsp&nbsp&nbsp
        <a href="https://www.facebook.com/FundMyVenture-1737471556494237/" target="_blank"><i class="fa fa-facebook fa-2x" ></i></a>&nbsp&nbsp&nbsp&nbsp
        <a href="https://twitter.com/fundmyventurehq" target="_blank"><i class="fa fa-twitter fa-2x" ></i></a>&nbsp&nbsp&nbsp&nbsp
        <a href="https://www.linkedin.com/company/fundmyventure-technologies" target="_blank"><i class="fa fa-linkedin fa-2x" ></i></a>


            </div>
            <div class="col-sm-6">
                <div class="row">
                    <div class="col-sm-5 col-sm-offset-1">
                       
                    </div>
                    <div class="col-sm-6"><p class="mbr-contacts__text"><strong>Join us</strong></p><ul class="mbr-contacts__list">
                        <a href="https://medium.com/fund-my-venture" target="_blank"><li>Learn</li></a>
                        <a href="glossary"><li>Glossary</li></a>
                        <a href="faq"><li>Frequently Asked Questions</li></a>
                        <a href="https://angel.co/fundmyventure/jobs/" target="_blank"><li>Join us</li></a>
                        <a href="https://medium.com/fund-my-venture" target="_blank"><li>Blog</li></a>
                    </ul></div>
                   

                </div>
            </div>

        </div>
 <center><p class="mbr-contacts__text">Made with <span class="glyphicon glyphicon-heart-empty"></span> in Bangalore!</p>
</center>

    </div>
</section>
  <div class="modal fade" id="sleepmodal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        
        <div class="modal-body">
              
                   <center> <div class="image"><img class="undefined" width="10%" src="assets/images/sleep.png"></div>
             <h2>Wake up!</h2></center>
            <p class="lead">You've been idle for <span class="badge-idle-popup-idleTime">3 minutes</span>. Click anywhere to dismiss.</p>
        </div>
       
      </div>
      
    </div>
  </div>



<script type="text/javascript" src="vanilla.idle.min.js"></script>
  <script type="text/javascript">
    idle({
      onIdle: function(){
       $('#sleepmodal').modal('toggle');
      },
      onActive: function(){
      },
      onHide: function(){
        
      },
      onShow: function(){
        // Add a slight pause so you can see the change
        setTimeout(function(){
         
        }, 250);
      },
      idle: 180000,
      keepTracking: true
    }).start();
  </script>

  <script src="https://maps.googleapis.com/maps/api/js"></script>
  <script src="assets/smooth-scroll/SmoothScroll.js"></script>
  <script src="assets/bootstrap-carousel-swipe/bootstrap-carousel-swipe.js"></script>
  <script src="assets/jarallax/jarallax.js"></script>
  <script src="assets/masonry/masonry.pkgd.min.js"></script>
  <script src="assets/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/social-likes/social-likes.js"></script>
  <script src="assets/fundmyventure/js/script.js"></script>
  <script src="assets/fundmyventure-gallery/script.js"></script>
  
  <script type="text/javascript">
$( window ).load(function() {
  
 // Code commented for now
 //$('#windowloadmodal').modal('show');
});
    </script>
</body>
</html>
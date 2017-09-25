<!DOCTYPE html>
<html>
<?php require('header.php'); ?>
<style>
#progress {   
 border: 1px solid black;
 position: relative;
 padding: 3px;
}

#percent {
 position: absolute;   
 left: 50%;
}

#bar {
 height: 20px;
 background-color: green;
 width: 0%;
}

</style>

<div id="showinterestmodal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Thank you for your interest in ABC Private Limited.</h4>
      </div>
      <div class="modal-body">
        You have requested access to Confidential Documents. The company will contact you if your request gets approved. In order to help prioritize your access request, please enter the maximum amount you are likely to invest. <br><b>This is a non-binding indication of interest.</b><br><br>


<div class="form-group c2 required" data-cid="c2">
  <label class="control-label" for="c2">Minimum Commitment Amount</label>

<div class="input-group"><span class="input-group-addon left"><i class="glyphicon glyphicon-tower"></i> </span>
<input type="email" class="form-control" id="c2" name="c2" value=""   
    data-rule-email="true" 
    data-rule-required="true"  />
</div>
<div class="form-group c150 " data-cid="c150">
  <label class="control-label" for="c150">LinkedIn URL</label>

<div class="input-group"><span class="input-group-addon left"><i class="fa fa-linkedin"></i> </span>
<input type="text" class="form-control" id="c150" name="c150" value="" placeholder="Please leave this empty if you provided your LinkedIn URL at the time of Signup."    />
</div>

  
</div>

<div class="form-group c28 required" data-cid="c28">
  <label class="control-label" for="c28">Additional Comments (Optional)</label>

<div class="input-group"><span class="input-group-addon left"><i class="glyphicon glyphicon-comment"></i> </span>
<input type="textarea" class="form-control" id="c28" name="c28" value=""    
    data-rule-required="true"  />
</div>

  
</div>
<div id="showinterestresponse"></div>
  <center><button  class="btn btn-primary btn-lg" style="z-index: 1;" id="submitbuttonid">
      Submit
  </button>
  </center>

        <img src="investor_investment_diagram.svg" width="100%"alt="Investment pitch process"></img>
</div>
      </div>
      
    </div>

  </div>
</div>


<script type="text/javascript">
function showinterest(){
    $("#showinterestmodal").modal();
}
</script>
<section class="mbr-box mbr-section mbr-section--relative mbr-section--fixed-size mbr-section--full-height mbr-section--bg-adapted mbr-parallax-background mbr-after-navbar" id="header1-73" >
    <div class="mbr-box__magnet mbr-box__magnet--md-padding mbr-box__magnet--center-left">
        <div class="mbr-overlay" style="opacity: 0.6; background-color: rgb(76, 105, 114);"></div>
        <div class="mbr-box__container mbr-section__container container">
            <div class="mbr-box mbr-box--stretched"><div class="mbr-box__magnet mbr-box__magnet--center-left">

  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.vertical-tabs.min.css">

                <div class="row">
                    <div class=" col-md-6">
                    <div class="mbr-hero animated fadeInUp">
                        <h1 class="mbr-hero__text">Homigo
                        <a href="https://www.linkedin.com/company/homigo"><i class="fa fa-linkedin" aria-hidden="true"></i></a>  
                       </a> 
                        </h1>
                        <p class="mbr-hero__subtext"><b><u>Don't just stay. Live. </u></b><br></p>
                        <p class="mbr-hero__subtext">Homigo is providing bachelors with fully-furnished houses on sharing basis with all the necessary appliances in place. <br></p>
                         <p class="mbr-hero__subtext"><u>Raising Rs. <b>12 crores ($2 million)</b> with a minimum reservation of Rs. <b>5 lacs ($7500) </b></u> <br></p>
                    </div>
                    <div class="mbr-buttons btn-inverse mbr-buttons--left"><a class="mbr-buttons__btn btn btn-lg animated fadeInUp delay btn-warning" onclick="showinterest()">Interested</a> <a class="mbr-buttons__btn btn btn-lg btn-default animated fadeInUp delay" onclick="bookmarkforlater()">Bookmark for later</a></div>
                </div>
                <div class=" col-md-6">
                    <video width="400" controls>
  <source src="homigo_video.mp4" type="video/mp4">
 
  Your browser does not support HTML5 video.
</video>
                </div>
            </div>
            </div></div>
        </div>
        <div class="mbr-arrow mbr-arrow--floating text-center">
            <div class="mbr-section__container container">
                <a class="mbr-arrow__link" href="#features1-75"><i class="glyphicon glyphicon-menu-down"></i></a>
            </div>
        </div>
    </div>
</section>

<section class="content-2 col-4" id="features1-75" style="background-color: rgb(255, 255, 255);">
    
    <div class="container">
        <div class="row">
            <div>
                <div class="thumbnail">
                    <div class="image"><img class="undefined" src="https://scontent-sin1-1.xx.fbcdn.net/v/t1.0-9/11202082_671533876323018_3964085553863375821_n.jpg?oh=fe4b21a9d703e11732eae0667bb0b7e2&oe=57A9F75B"></div>
                    <div class="caption">
                        <div>
                            <h3>Deal expires on 05<sup>th</sup> June 2016 <br>(30 days left)</h3>
                             
                             <div id="progress">
                            <div class="col-md-12">
                            <span id="percent">0% raised </span>
                        </div>
                            <div id="bar"></div>
                            </div>
                            Raising Rs. <b>12 crores ($2 million)</b> with a minimum reservation of Rs. <b>5 lacs ($7500) </b><br>
                            <!--Numbers displayed include non-binding reservations before investors are verified, signed, or closed.-->

                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="thumbnail">
                    <div class="caption">
                        <div>
                             <h1>Homigo</h1><br>
                             <h3>Homigo is providing bachelors with fully-furnished houses on sharing basis with all the necessary appliances in place. </h3>
                             <p>Numbers displayed include non-binding reservations before investors are verified, signed, or closed.</p>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div>
                <div class="thumbnail">
                    
                    <div class="caption">
                        <div>
                            <h2>Tags</h2>
                            <h3><a href="#">Rental Housing</a>, <a href="#">Affordable Housing </a></h3>
                            <h2>Location</h2>
                            <h3><a href="#">Bangalore, India  </a></h3>
                            <h2>Social Media</h2>
                            <h1>
                                <a href="https://www.linkedin.com/company/homigo"><i class="fa fa-linkedin" aria-hidden="true"></i></a>  
                                <a href="https://www.facebook.com/homigo.in"><i class="fa fa-facebook" aria-hidden="true"></i></a>  
                                <a href="https://twitter.com/homigoindia"><i class="fa fa-twitter" aria-hidden="true"></i></a>  
                                <a href="https://www.instagram.com/homigo.in/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                <a href="https://angel.co/homigo"><i class="fa fa-angellist" aria-hidden="true"></i></a>
                                
                            </h1>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div>
                <div class="thumbnail">
                   
                    <div class="caption">
                         <div class="mbr-buttons btn-inverse mbr-buttons--left">
                            <a class="mbr-buttons__btn btn btn-lg animated fadeInUp delay btn-warning" onclick="showinterest()">Express Interest</a><br> 
                            <a class="mbr-buttons__btn btn btn-lg animated fadeInUp delay btn-warning" onclick="bookmarkforlater()">Bookmark for later</a>

                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="mbr-box mbr-section mbr-section--relative mbr-section--fixed-size mbr-section--full-height mbr-section--bg-adapted mbr-parallax-background" id="header1-76">
    <div class="mbr-box__magnet mbr-box__magnet--md-padding mbr-box__magnet--center-left">
        <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(41, 105, 176);"></div>
        <div class="mbr-box__container mbr-section__container container">
      <br>
                <div class=" col-md-4">
                        

                          <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th><center>Team</center></th>
                                       
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <center><img src="https://d1qb2nb5cznatu.cloudfront.net/users/1361212-medium_jpg?1436139212"/></center>
                                            
                                            <center><b>Aakash Verma</b></center><center><u>Co-Founder & CTO</u></center><center>
                                            Studied at @IIT Kanpur | Interned at @Microsoft India R&D Pvt. | Research Experience at @Tsinghua University</center></td>
                                    </tr>
                                    <tr>
                                        <td><center><img src="https://d1qb2nb5cznatu.cloudfront.net/users/995285-medium_jpg?1436203453"/></center>
                                            
                                            <center><b>Jatin Mitruka</b></center><center><u>Co-Founder & COO</u></center><center>
                                            Formerly @Kirusa | Studied @IIT Kanpur | Research Experience @Texas A&M University</center></td>



                                    </tr>
                                     <tr>
                                        <td><center><img src="https://d1qb2nb5cznatu.cloudfront.net/users/515390-medium_jpg?1424861164"/></center>
                                            
                                            <center><b>Nikunj Batheja</b></center><center><u>Co-Founder and CEO</u></center><center>
                                            Formerly at @Corporate Executive Board | Studied @IIT Kanpur | Co-founded @AIESEC in Kanpur | International Internships | HPAIR Alumni</center></td>

                                     
                                    </tr>
                                    
                                </tbody>
                            </table>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th><center>Advisors</center></th>
                                       
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><center><img src="rahul_agarwal.jpg"/></center>
                                            
                                            <center><b>Rahul Agrawal</b></center><center><u>Co-Founder & CEO, <a href="https://angel.co/mebelkart-1" target="_blank">Mebelkart</a></u></center><center>
                                            Angel Investor, Founded $20 M worth company, Alum @IITKanpur</center></td>
                                    </tr>
                                     <tr>
                                        <td><center><img src="ranjeet_vimal.jpg"/></center>
                                            
                                            <center><b>Ranjeet Vimal</b></center><center><u>Co-Founder, <a href="https://angel.co/mebelkart-1" target="_blank">Mebelkart</a></u></center><center>
                                            Angel Investor, Founded $20 M worth company, Alum @IITBombay</center></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        
                          
                                        </div>

                 <div class=" col-md-8">
                    
        <div class="col-md-3"> <!-- required for floating -->
          <!-- Nav tabs -->
          <ul class="nav nav-tabs tabs-left">
           <li><a href="#pitchvideo" data-toggle="tab">Pitch Video</a></li>
            <li><a href="#presentation" data-toggle="tab">Company Slide Deck</a></li>
            <li><a href="#press" data-toggle="tab">Press Coverage</a></li>
            <li><a href="#investmentdetails" data-toggle="tab">Investment Details</a></li>
            <li><a href="#highlights" data-toggle="tab">Highlights</a></li>
            <li><a href="#testimonials" data-toggle="tab">Testimonials</a></li>
            <li><a href="#elevatorpitch" data-toggle="tab">Elevator Pitch</a></li>
            <li><a href="#traction" data-toggle="tab">Traction</a></li>
            <li><a href="#supplementarydata" data-toggle="tab">Supplementary Data</a></li>
            <li><a href="#existing_investors" data-toggle="tab">Investors</a></li>
            <li><a href="#documents" data-toggle="tab">Documents</a></li>
            <li><a href="#market" data-toggle="tab">Market</a></li>
            <li><a href="#competition" data-toggle="tab">Competition</a></li>
            <li><a href="#qna" data-toggle="tab">Q & A forum</a></li>
            <li><a href="#kpi" data-toggle="tab">Key Performance Indicators</a></li>

            

          </ul>
        </div>

        <div class="col-md-9">
          <!-- Tab panes -->










          <div class="tab-content">
            <div class="tab-pane active" id="pitchvideo">  
               <center> <iframe width="560" height="315" src="https://www.youtube.com/embed/UmdFkCBg4VY?rel=0" frameborder="0" allowfullscreen></iframe></center>
            </div>
            
            <div class="tab-pane" id="presentation">
                <iframe src="//www.slideshare.net/slideshow/embed_code/key/4EBUpW5IOmoJsC" width="560" height="315" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" style="border:1px solid #CCC; border-width:1px; margin-bottom:5px; max-width: 100%;" allowfullscreen> </iframe> 


            </div>

            <div class="tab-pane" id="investmentdetails">
                
                <center><h2>Raise Details</h2></center>
                <center>
                    <table class="table .table-bordered">
                    <tr>
                        <td>Deal Stage 
                        </td>
                        <td>Series A
                        </td>
                    </tr>
                    <tr>
                        <td>Funding Goal 
                        </td>
                        <td>Rs. 12 crores ($2 million)
                        </td>
                    </tr>
                    <tr>
                        <td>Equity offered 
                        </td>
                        <td>20%
                        </td>
                    </tr>
                    <tr>
                        <td>Market Valuation
                        </td>
                        <td>Rs. 60 crores ($10 million)
                        </td>
                    </tr>
                    <tr>
                        <td>Current Reservations
                        </td>
                        <td>Rs. 6 crores ($1 million)
                        </td>
                    </tr>
                    <tr>
                        <td>Converted Deals
                        </td>
                        <td>Rs. 0 
                        </td>
                    </tr>
                    <tr>
                        <td>In-Process Deals
                        </td>
                        <td>Rs. 6 crores ($1 million)
                        </td>
                    </tr>
                    <tr>
                        <td>Minimum Reservation
                        </td>
                        <td>Rs. 5 lacs ($7500)
                        </td>
                    </tr>

                    <tr>
                        <td>Term Length
                        </td>
                        <td>5 Years
                        </td>
                    </tr>
                    <tr>
                        <td>Valuation Cap
                        </td>
                        <td>Rs. 8,500,000
                        </td>
                    </tr>
                    <tr>
                        <td>Open Date 
                        </td>
                        <td>5<sup>th</sup> May 2016
                        </td>
                    </tr>
                     <tr>
                        <td>Closing Date
                        </td>
                        <td>5<sup>th</sup> June 2016
                        </td>
                    </tr>

                </table></center>

            </div>
                    <div class="tab-pane" id="testimonials">
                
                <center><h2>Testimonials</h2></center>
                  <div class="col-md-6">
          <div class="thumbnail flower"  data-category="green large medium africa">
            <img src="homigo_testimonial1.jpg">
              <div class="caption">
                <center><h4><a href="https://www.facebook.com/praneeth.menta">Praneeth Menta</a></h4></center>
                <p>Crib hunting made hassle free. Flexibility,comfort and value for money. The next big start-up.</p>
                <center><p><a href="https://www.facebook.com/praneeth.menta/posts/10206219699994902:0">Customer</a></p></center>
              </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="thumbnail flower"  data-category="green large medium africa">
            <img src="homigo_testimonial2.jpg">
              <div class="caption">
                <center><h4><a href="https://www.facebook.com/praneeth.menta">Vineeta Wagh</a></h4></center>
                <p>They really make sure you get a proper house and you enjoy staying there...thanks guys!</p>
                <center><p><a href="https://www.facebook.com/vineeta.wagh">Customer</a></p></center>
              </div>
          </div>
        </div>
                

            </div>
            <div class="tab-pane" id="highlights">
                <center><h2>Key highlights</h2></center>
                
                <div class="row">
                <img src="highlight.png" class="col-md-2"/>
                <div class="col-md-10">Advisory support from Mebelkart, one of the biggest names in online furniture space.</div>
                </div>
                <br>
                <div class="row">
                <img src="highlight.png" class="col-md-2"><div class="col-md-10">42% Month on Month Average Revenue Growth, 15% Month on Month Gross Income Growth</div>
                </div>
                <br>
                <div class="row">
                <img src="highlight.png" class="col-md-2"><div class="col-md-10">Rs. 80 lacs worth brokerage saved, 400 customers serviced, Rs. 50 lacs worth end term charges saved</div>
                </div><br>
                <div class="row">
                <img src="highlight.png" class="col-md-2"><div class="col-md-10">Projected annual revenues worth Rs. 1cr by Dec 2016</div>
                </div><br>
                <div class="row">
                <img src="highlight.png" class="col-md-2"><div class="col-md-10">Exclusive discount partnerships with Bars and Pubs, Eating joints, food delivery solutions & retail services</div>
                </div><br>
                <div class="row">
                <img src="highlight.png" class="col-md-2"><div class="col-md-10">260 houses registered so far. Brokerage paid - Rs. 98 lacs</div>
                </div><br>
                <div class="row">
                <img src="highlight.png" class="col-md-2"><div class="col-md-10">Houses across 31 localities in Bangalore, including 5 posh localities around city centre</div>
                </div>
                
             
            </div>
            <div class="tab-pane" id="elevatorpitch">
               
           <p style="font-size:20px">Homigo is dedicated to raising the standard of living of bachelors who are moving into a new city bachelors by providing fully-furnished houses on sharing basis with all the necessary appliances in place. </p>
            </div>

            <div class="tab-pane" id="traction">
                <center><h2>Traction</h2></center>
                    <iframe width="560" height="315" src="https://live.amcharts.com/E4OWU/embed/" frameborder="0"></iframe>

            </div>
            <div class="tab-pane" id="supplementarydata">
                <h2>Supplementary Data</h2>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/Pb8LT7uyzrc?rel=0" frameborder="0" allowfullscreen></iframe>

                <iframe width="560" height="315" src="https://www.youtube.com/embed/28utrRprjzw?rel=0" frameborder="0" allowfullscreen></iframe>


            </div>
            <div class="tab-pane" id="existing_investors">
                <center><h2>Existing Investors</h2></center>
                <div class="col-md-6">
          <div class="thumbnail flower"  data-category="green large medium africa">
            <img src="http://placehold.it/500x250/EEE">
              <div class="caption">
                <center><h4>Investor 1</h4></center>
                <p>Investor 1 had a very successful exit from this startup and also that startup.</p>
               
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="thumbnail flower" data-category="green yellow large antarctica">
            <img src="http://placehold.it/500x250/EEE">
              <div class="caption">
                <center><h4>Investor 2</h4></center>
                <p>Investor 2 has invested in this company, that company and also that company.</p>
               
            </div>
          </div>
        </div>



            </div>
            <div class="tab-pane" id="documents">
                <center><h2>Financial Documents</h2></center>
                <p style="font-size:20px">Click <a onclick="showinterest()">here</a> to express your interest in Homigo.</p>
            </div>
            <div class="tab-pane" id="market">
                <center><h2>Market</h2></center>
                <p style="font-size:20px">The market for Homigo is new and untapped. Homigo offers a unique value proposition where people who are new in the city do not have to worry about the hassles finding a new home in the city. <br><br> More content here. More content here.</p>
            </div>
            <div class="tab-pane" id="competition">
                <center><h2>Competitors</h2></center>
                   <div class="col-md-6">
          <div class="thumbnail flower"  data-category="green large medium africa">
            <img src="nestaway.png">
              <div class="caption">
                <center><h4>Nestaway</h4></center>
                <p>Big player in the market with 1000+ houses on its platform.</p>
               <center><a href="https://www.nestaway.com/" class="btn btn-info btn-xs" role="button">Website</a> </center>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="thumbnail flower" data-category="green yellow large antarctica">
            <img src="squareplums.png">
              <div class="caption">
                <center><h4>Square Plums</h4></center>
                <p>A new entrant into the market, is expanding aggressively.</p>
               <center><a href="http://www.squareplums.com/#/home" class="btn btn-info btn-xs" role="button">Website</a></center>
            </div>
          </div>
        </div>
            </div>
            <div class="tab-pane" id="qna">
                <center><h2>Questions and Answers Forum</h2></center>
               <!--Have a question of your own? Drop in a mail to <a href="mailto:reachout@fundmyventure.co">reachout@fundmyventure.co</a> with 'Homigo: QnA' as subject line and we will ask the company founders to respond to the question.
               <br><br>-->
                <p style="font-size:20px">Q1. What are your plans for using the funds raised? <br>
                A1. We plan to use the money to hire employees (2 programmers, 4 people in operations, and set up office space). We also look forward to have more partners offering exclusive discounts to our customers and add more houses to our listings. <br><br>
                Q2. Do you have plans to raise further rounds?  <br>
                A2. Lets see!</p> <br>
            </div>
            <div class="tab-pane" id="kpi">
                <center><h2>Key Performance Indicators</h2></center>
                <p style="font-size:20px">Occupany: 82% (28% higher than market)<br>
                Houses on rent: 200<br>
                Happy customers: 400
                </p>


                
            </div>
            <div class="tab-pane" id="press">
                <center><h2>Press Coverage</h2></center>
                 <div class="col-md-6">
          <div class="thumbnail flower"  data-category="green large medium africa">
            <img src="nestaway.png">
              <div class="indistart.png">
                <center><h4>IndiStart</h4></center>
                <p>Startups like Homigo are resulting fruitful in making life of bachelors moving in a new city easy.</p>
               <center><a href="http://www.indistart.com/homigo-raises-200000-seed-funding/" class="btn btn-info btn-xs" role="button">Link</a> </center>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="thumbnail flower" data-category="green yellow large antarctica">
            <img src="tropicalpost.jpg">
              <div class="caption">
                <center><h4>Tropical Post</h4></center>
                <p>They  take care of management of electricity & Internet so that people can move into new homes without any problems.</p>
               <center><a href="http://tropicalpost.com/2015/10/12/homigo-grabs-200k-in-seed-funding-round/" class="btn btn-info btn-xs">Link</a></center>
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




<section class="mbr-section mbr-section--relative mbr-section--fixed-size" id="form1-89" style="background-color: rgb(0, 168, 133);">

<center><h1>Announcements</h1></center>

 <div class="mbr-section__container mbr-section__container container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2" data-form-type="formoid">
                        
                       <center>09<sup>th</sup> April: <a href="#">Google Hangout</a> with Aakash, Jatin and Nikunj (Founding Team, Homigo)</center>
                        <center>12<sup>th</sup> April: <a href="#">Google Hangout</a> with Ranjeet, Rahul (Advisors, Homigo)</center><br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="mbr-section mbr-section--relative mbr-section--fixed-size" id="form1-89" style="background-color: rgb(255, 255, 255);">
    
    <div class="mbr-section__container mbr-section__container--std-padding container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2" data-form-type="formoid">
                        <div class="mbr-header mbr-header--center mbr-header--std-padding">
                            <h2 class="mbr-header__text">Disclaimer</h2>
                        </div>
                        FundMyVenture.co is a website owned and operated by FundMyVenture Technologies Pvt. Ltd. By accessing this website and any pages thereof, you agree to be bound by the Terms of Use and Privacy Policy, as amended from time to time. FundMyVenture is not a registered nor licensed broker, dealer, broker-dealer, funding portal, investment advisor, investment manager in the India, nor with any state, district, territory or municipality thereof, nor with any other country or territory. As such, it is not acting as in a fiduciary capacity with respect to any user of the FundMyVenture Services and FundMyVenture disclaims any broker-client or adviser-client relationship with respect to any party using this Service.<br><br> The securities are subject to legal restrictions on transfer and resale and investors should not assume they will be able to resell their securities. Investing in securities involves risk, and investors should be able to bear the loss of their entire investment. All investors should make their own determination of whether or not to make any investment, based on their own independent evaluation and analysis. FundMyVenture does not verify or assure that information provided by any company offering securities is accurate or complete or that the valuation is appropriate. Neither FundMyVenture nor any of its directors, officers, employees, representatives, affiliates or agents shall have any liability whatsoever arising, for any error or incompleteness of fact or opinion in, or lack of care in the preparation or publication, of the materials posted on this website. <br><br>FundMyVenture does not give investment advice, provide analysis or recommendations regarding any offering posted on the website. The information on this website does not constitute an offer of, or the solicitation of an offer to buy or subscribe for, any securities to any person in any jurisdiction to whom or in which such offer or solicitation is unlawful. FundMyVenture does not provide legal, accounting or tax advice. Any representation or implication to the contrary is expressly disclaimed. You should consult your own legal, accounting and tax experts before using FundMyVenture.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script type="text/javascript">
document.title = "Homigo | FundMyVenture";
function bookmarkforlater(){

 $.post("http://fundmyventure.co/server/bookmarkforlater.php", { 
    username:localStorage.getItem("username"),
  companyname:"homigo"
})
.done(function( data ) {
  //console.log(data);
    alert(data);

});


}

$("#submitbuttonid").click(function(){
if(document.getElementById("c2").value=="")
    alert("Please enter the minimum commitment amount.");


 $.post("http://fundmyventure.co/server/showinterest.php", { 
    username:localStorage.getItem("username"),
  value:document.getElementById("c2").value,
  comments:document.getElementById("c28").value,
  linkedin:document.getElementById("c150").value,
  companyname:"homigo"
})
.done(function( data ) {
  console.log(data);
    document.getElementById("showinterestresponse").innerHTML="<center>".concat(data).concat("</center>");
document.getElementById("showinterestresponse").style.color = 'green';
});

});

</script>
<?php require('footer.php'); ?>
  
  

<?php require('header.php'); ?>
<!--<section class="mbr-box mbr-section mbr-section--relative mbr-section--fixed-size  mbr-section--bg-adapted mbr-parallax-background mbr-after-navbar" id="header1-73" >
    <div class="mbr-box__magnet mbr-box__magnet--sm-padding mbr-box__magnet--center-left">
        <div class="mbr-overlay" style="opacity: 0.6; background-color: #80bfff;"></div>
        <div class="mbr-box__container mbr-section__container container">
            <div class="mbr-box mbr-box--stretched"><div class="mbr-box__magnet mbr-box__magnet--center-left">
                 <div class="col-xs-18 col-sm-12 col-md-12">

            <center><h1>Invest in businesses you truly believe in!</h1></center>
              <br>
                <h4><center>Discover a world of great investment opportunities, buy into businesses you believe in and share in their success through a simple online process.</center></h4>
                
           <br>
          <div class="mbr-buttons  mbr-buttons--left"><center><a class="mbr-buttons__btn btn btn-lg animated fadeInUp delay btn-warning" data-toggle="modal" href="#knowmore">Know more!</a></center>
        </div>
            </div></div>
        </div>
      
    </div>
</section>
-->
<script type="text/javascript">
function a(){
 
if(document.getElementById("c150").value=="")
    alert("Campaign description field cannot be left empty.");
if(!localStorage.getItem("username"))
  alert("Login before submitting campaign request.");
else{
 $.post("http://fundmyventure.co/server/submitcampaign.php", { 
    username:localStorage.getItem("username"),
  campaigndescription:document.getElementById("c150").value,
  additioncomments:document.getElementById("c28").value
})
.done(function( data ) {
  console.log(data);
    document.getElementById("showcampaignresponse").innerHTML="<center>".concat(data).concat("</center>");
document.getElementById("showcampaignresponse").style.color = 'green';
});
}
}

</script>

<div id="startcampaignmodal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"><center>Submit campaign details</center></h4>
      </div>
      <div class="modal-body">
        Campaigns are general business ideas which are in idea stage. Campaigns seek support from local patrons who believe in the vision of the campaign's promoter. An example campaign can be to set up a hospital/school/food chain in a city.<br><br>Alternatively, you can drop us a mail at <a href="mailto:reachout@fundmyventure.co">reachout@fundmyventure.co</a> with your campaign details.


<div class="form-group c150 " data-cid="c150">
  <label class="control-label" for="c150">Brief description</label>

<div class="input-group"><span class="input-group-addon left"><i class="glyphicon glyphicon-heart"></i> </span>
<input type="text" class="form-control" id="c150" name="c150" value="" placeholder="Provide a brief description of your campaign - what its about, roadmap, current stage, etc"    />
</div>

  
</div>

<div class="form-group c28 required" data-cid="c28">
  <label class="control-label" for="c28">Additional Comments (Optional)</label>

<div class="input-group"><span class="input-group-addon left"><i class="glyphicon glyphicon-comment"></i> </span>
<input type="textarea" class="form-control" id="c28" name="c28" value=""    
    data-rule-required="true"  />
</div>

  
</div>
<div id="showcampaignresponse"></div>
  <center><button  class="btn btn-primary btn-lg" style="z-index: 1;" id="campaignsubmitbutton" onclick="a()">
      Submit
  </button>
  </center>

        
</div>
      </div>
      
    </div>

  </div>
</div>
  <link rel="stylesheet" href="css/font-awesome.min.css">

<section class="content-2 col-4" style="background-color: rgb(255, 255, 255);">
    
    <div class="container">
  
        <center><h2>Investors, now you can <a data-toggle="modal" href="#startcampaignmodal">start</a> a fundraise for your business idea too!</h2></center>
       <u><h3>What is it about?</h3></u>
   FundMyVenture's vision is to enable people realize their dreams with the support of people around them. Start a campaign, if you feel that you have a business idea which has the potential to be raised by local community around you.
       <br><br>
       <u><h3>Examples</h3></u>
       <div class="row">
        
          <div class="col-md-4"><img src="assets/images/doctor.png" width="100%"/></div><div class="col-md-8">Praveen is a MBBS, MS opthalmology from AIIMS, New Delhi. He wants to set up a specialty eye hospital on the outskirts of his hometown Agra along with two of his medico friends. The total cost involved (along with the machines) is about INR 2 crore. He also seeks support from influential people in Agra so that he can focus on running the hospital. Praveen comes to FundMyVenture and creates his campaign giving expense breakup, projected cash flow cycles, time for the investment to pay off, and profit margins. People around Agra who understand the value behind Praveen's venture invest both time and money to help set up the hospital.</div>
          
          <div class="col-md-4"><img src="assets/images/graduate.png" width="100%"/></div><div class="col-md-8">Raj is a teacher from Kendriya Vidyalaya School, Lucknow. He has been teaching students for the past 25 years and has good understanding about running a school, curriculum and other aspects. Raj wants to set up a school for girls around his locality in Lucknow. He seeks INR 50L as starting capital along with 5 people as support staff. Raj puts his vision about the school on FundMyVenture and is able to raise 39L. The amount, though, is less than what Raj originally expected to raise but is sufficient for him  to begin.</div>
       
          

        </div> 

       <br><br>
       <u><h3>How is it different from fundraising by startups?</h3></u>
       Campaigns are different from startup fundraise as campaigns are focused on connecting businesses which are currently in idea stage, and require necessary local funds and support.  FundMyVenture is different from platforms like <a href="http://kickstarter.com" target="_blank">Kickstarter</a> as we focus on solid business ideas where investors can contribute effort, mentorship as well as financial assistance to help you set up the business.
       <br><br>
      


        </div>
    </div>
       </div>
    </div>   </div>
    </div>   </div>
    </div>   </div>
    </div>
   

    </div>
</section>

<style type="text/css">

.scroll-top {
  border-radius:6px;
   position:fixed;
   bottom:4%;
   right:4%;
   left:4%;
   z-index:100;
   background: #ffcc33;
   font-size:24px;
}
.scroll-top a:link,.scroll-top a:visited {
  color:#222;
} 


 #button {
     line-height: 12px;
     width: 18px;
     font-size: 8pt;
     font-family: tahoma;
     margin-top: 1px;
     margin-right: 2px;
     position:absolute;
     top:0;
     right:0;
 }
</style>
<script type="text/javascript">
function f(){
  document.getElementById("a").style.display="none";
}
</script>
<center>
<div class="nav pull-right scroll-top" id="a">
  <span class="glyphicon glyphicon-heart"></span>
 Have a startup of your own? <a href="venture_signup">Signup for free</a> to begin fundraise for your business.
        &nbsp&nbsp&nbsp<input id="button" type="button" onclick="f()" value="X">
 
</div>
</center>
<?php require('footer.php'); ?>
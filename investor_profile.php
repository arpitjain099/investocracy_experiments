
<?php require('header.php'); ?>
<script src="samplejson.js"></script>
<script type="text/javascript">
$.post("server/generateprofile.php", { 
    username:localStorage.getItem("username")
})
.done(function( data ) {
    data=JSON.parse(data);
    data=data[0];

    document.getElementById("profile_img_url").src=data.image_url;
    document.getElementById("name").innerHTML="<center>".concat(data.name).concat("</center>");
    document.getElementById("headline").innerHTML="<center>".concat(data.headline).concat("</center>");
    document.getElementById("shortlocation").innerHTML="<center>".concat(data["location"]).concat("</center>");
    document.getElementById("investortype").innerHTML="<b>Investor Type</b> : ".concat(data.investor_type);
    document.getElementById("phone").innerHTML="<b>Phone</b> : ".concat(data.phone);
    document.getElementById("emaildiv").innerHTML="<b>E-Mail</b> : ".concat(data["email"]);
    if (data.linkedin=="Not Available")
      document.getElementById("linkedinurl").innerHTML="<b>LinkedIn</b> : Not Available";
    else document.getElementById("linkedinurl").innerHTML="<b>LinkedIn</b> : <a target='_blank href' href='".concat(data.linkedin).concat("'>").concat(data.linkedin).concat("</a>");
    if (data.twitter=="Not Available")
      document.getElementById("twitter").innerHTML="<b>Twitter</b> : Not Available";
    else document.getElementById("linkedinurl").innerHTML="<b>Twitter</b> : <a target='_blank href' href='".concat(data.twitter).concat("'>").concat(data.twitter).concat("</a>");
    document.getElementById("currentorg").innerHTML="<b>Current Organization</b> : ".concat(data.currentorganization);
    document.getElementById("designation").innerHTML="<b>Designation</b> : ".concat(data.designation);
    document.getElementById("city").innerHTML="<b>City</b> : ".concat(data["location"]);
    document.getElementById("country").innerHTML="<b>Country</b> : ".concat(data.countryofresidence);
    document.getElementById("interests").innerHTML
    if(data.industry_preferences.length==0)
      document.getElementById("interests").innerHTML="Not Available";
    else {
      var sts=data.industry_preferences.split(",");
      var temp="";
      for (var i=0;i<sts.length;i++)
        temp=temp+sts[i]+"<br>";
      document.getElementById("interests").innerHTML=temp;
     
    }
    
    document.getElementById("typicalinvestmentamount").innerHTML="<b>Typical investment amount</b> : ".concat(data.typicalinvestmentamount);
    document.getElementById("portofolio").innerHTML=data.portofolio;
    
});
$.post("server/following.php", { 
    username:localStorage.getItem("username")
})
.done(function( data ) {

data=JSON.parse(data);
if(data.length==0)
      document.getElementById("following").innerHTML="You have not followed any companies yet.";
    else {
      var sts="";

      for(var i=0;i<data.length;i++)
        sts=sts.concat(' <div class="col-xs-18 col-sm-6 col-md-3"><div class="thumbnail flower" data-category="green yellow large antarctica"><img src="').concat(data[i]["photo"]).concat('"><div class="caption"><h4>').concat(data[i]["name"]).concat('</h4><p>').concat(data[i]["tagline"]).concat('</p><a href="').concat(data[i]["url"]).concat('"class="btn btn-info btn-xs" role="button">View offering</a></div></div></div>')
        document.getElementById("following").innerHTML=sts;
    }
});
</script>
 
<section class="mbr-box mbr-section mbr-section--relative mbr-section--fixed-size  mbr-section--bg-adapted mbr-parallax-background mbr-after-navbar" id="header1-73" >
    <div class="mbr-box__magnet mbr-box__magnet--sm-padding mbr-box__magnet--center-left">
        <div class="mbr-overlay" style="opacity: 0.6; background-color: rgb(76, 105, 114);"></div>
        <div class="mbr-box__container mbr-section__container container">
            <div class="mbr-box mbr-box--stretched"><div class="mbr-box__magnet mbr-box__magnet--center-left">
                 <div class="col-xs-18 col-sm-12 col-md-12">
         
            <center><img id="profile_img_url" ></center>
              <div class="caption">
                <h4 id="name"></h4>
                <p id="headline"></p>
                <p id="shortlocation"></p>
            </div>
        </div>      
    </div>
</section>



<section class="mbr-box mbr-section mbr-section--relative mbr-section--fixed-size mbr-section--full-height mbr-section--bg-adapted mbr-parallax-background mbr-after-navbar" >
    <div class=" mbr-box__magnet--sm-padding mbr-box__magnet--center-left" >


<div class="container">
  <ul class="nav nav-pills nav-justified">
    <li class="active"><a data-toggle="pill" href="#profile">Profile</a></li>
    <li><a data-toggle="pill" href="#portfolio">Portfolio</a></li>
    <li><a data-toggle="pill" href="#following">Following</a></li>
  </ul>
  
  <div class="tab-content">
    <div id="profile" class="tab-pane fade in active"><br>
<p id="investortype" >Investor type : </p>
<p id="linkedinurl">Linkedin : </p>
<p id="twitter">Twitter : </p>
<p id="emaildiv">E-Mail : </p>
<p id="phone">Phone : </p><br>

<h3>Current affiliation</h3>
<p id="currentorg">Current Organization : </p>
<p id="designation">Designation : </p>
<p id="city">City : </p>
<p id="country">Country : </p><br>



<h3>Investment Preferences</h3>
<b>Interests</b><br><div id="interests"></div>
<p id="typicalinvestmentamount"></p>

    </div>
    <div id="portfolio" class="tab-pane fade">
      <br>
      <p id="portofolio"></p>
    </div>
    <div id="following" class="tab-pane fade">
      <br>
         <div id="following"></div>
    </div>
        
  </div>
</div>


</div>
</section>

<?php require('footer.php'); ?>
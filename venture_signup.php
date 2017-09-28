
<?php require('header.php'); ?>
<style type="text/css">
.panel-title:hover {
     cursor: pointer;
}
</style>


<script type="text/javascript">
$(document).ready(function(){
    var i = $('input').size() + 1;  
    $('#teammemberadd').click(function() {

        $('<div><textarea rows="1" cols="40" type="text" class="teammembername" name="dynamic[]" placeholder="Name" /></div>').fadeIn('slow').appendTo('.teammemberinputs');
        $('<div><textarea rows="1" cols="40" type="text" class="teammemberrole" name="dynamic[]" placeholder="Role" /></div>').fadeIn('slow').appendTo('.teammemberinputs');
        $('<div><textarea rows="4" cols="40" type="text" class="teammemberbio" name="dynamic[]" placeholder="Brief Bio" /></div>').fadeIn('slow').appendTo('.teammemberinputs');
        $('<div><textarea rows="1" cols="40" type="text" class="teammemberemail" name="dynamic[]" placeholder="Contact E-mail" /></div>').fadeIn('slow').appendTo('.teammemberinputs');
        $('<div><textarea rows="1" cols="40" type="text" class="teammemberphone" name="dynamic[]" placeholder="Contact number" /></div>').fadeIn('slow').appendTo('.teammemberinputs');
        $('<div><textarea rows="1" cols="40" type="text" class="teammemberphotourl" name="dynamic[]" placeholder="Photo URL" /></div>').fadeIn('slow').appendTo('.teammemberinputs');
        $('<br class="teammemberphotobreak"/>').fadeIn('slow').appendTo('.teammemberinputs');
        i++;
    });
     
    $('#teammemberremove').click(function() {
    if(i > 1) {
        $('.teammembername:last').remove();
        $('.teammemberrole:last').remove();
        $('.teammemberbio:last').remove();
        $('.teammemberemail:last').remove();
        $('.teammemberphone:last').remove();
        $('.teammemberphotourl:last').remove();
        $('.teammemberphotobreak:last').remove();
        i--;
    }
    });
     
    $('#teammemberreset').click(function() {
    while(i > 2) {
        $('.teammembername:last').remove();
        $('.teammemberrole:last').remove();
        $('.teammemberphone:last').remove();
        $('.teammemberbio:last').remove();
        $('.teammemberemail:last').remove();
        $('.teammemberphotourl:last').remove();
        $('.teammemberphotobreak:last').remove();
        i--;
    }
    });
     



     var j = $('input').size() + 1;  
    $('#leadershipadd').click(function() {

        $('<div><textarea rows="1" cols="40" type="text" class="leadershipname" name="dynamic[]" placeholder="Name" /></div>').fadeIn('slow').appendTo('.leadershipinputs');
        $('<div><textarea rows="1" cols="40" type="text" class="leadershiprole" name="dynamic[]" placeholder="Role" /></div>').fadeIn('slow').appendTo('.leadershipinputs');
        $('<div><textarea rows="4" cols="40" type="text" class="leadershipbio" name="dynamic[]" placeholder="Brief Bio" /></div>').fadeIn('slow').appendTo('.leadershipinputs');
        $('<div><textarea rows="1" cols="40" type="text" class="leadershipemail" name="dynamic[]" placeholder="Contact E-mail" /></div>').fadeIn('slow').appendTo('.leadershipinputs');
        $('<div><textarea rows="1" cols="40" type="text" class="leadershipphone" name="dynamic[]" placeholder="Contact number" /></div>').fadeIn('slow').appendTo('.leadershipinputs');
        $('<div><textarea rows="1" cols="40" type="text" class="leadershipphotourl" name="dynamic[]" placeholder="Photo URL" /></div>').fadeIn('slow').appendTo('.leadershipinputs');
        $('<br class="leadershipphotobreak"/>').fadeIn('slow').appendTo('.leadershipinputs');
        j++;
    });
     
    $('#leadershipremove').click(function() {
    if(j > 1) {
        $('.leadershipname:last').remove();
        $('.leadershiprole:last').remove();
        $('.leadershipbio:last').remove();
        $('.leadershipemail:last').remove();
        $('.leadershipphone:last').remove();
        $('.leadershipphotourl:last').remove();
        $('.leadershipphotobreak:last').remove();
        j--;
    }
    });
     
    $('#leadershipreset').click(function() {
    while(j > 2) {
        $('.leadershipname:last').remove();
        $('.leadershiprole:last').remove();
        $('.leadershipphone:last').remove();
        $('.leadershipbio:last').remove();
        $('.leadershipemail:last').remove();
        $('.leadershipphotourl:last').remove();
        $('.leadershipphotobreak:last').remove();
        j--;
    }
    });
     
   
     var k = $('input').size() + 1;  
    $('#advisoradd').click(function() {

        $('<div><textarea rows="1" cols="40" type="text" class="advisorname" name="dynamic[]" placeholder="Name" /></div>').fadeIn('slow').appendTo('.advisorinputs');
        $('<div><textarea rows="1" cols="40" type="text" class="advisorrole" name="dynamic[]" placeholder="Role" /></div>').fadeIn('slow').appendTo('.advisorinputs');

        $('<div><textarea rows="4" cols="40" type="text" class="advisorbio" name="dynamic[]" placeholder="Brief Bio" /></div>').fadeIn('slow').appendTo('.advisorinputs');
        $('<div><textarea rows="1" cols="40" type="text" class="advisoremail" name="dynamic[]" placeholder="Contact E-mail" /></div>').fadeIn('slow').appendTo('.advisorinputs');
        $('<div><textarea rows="1" cols="40" type="text" class="advisorphone" name="dynamic[]" placeholder="Contact number" /></div>').fadeIn('slow').appendTo('.advisorinputs');
        $('<div><textarea rows="1" cols="40" type="text" class="advisorphotourl" name="dynamic[]" placeholder="Photo URL" /></div>').fadeIn('slow').appendTo('.advisorinputs');
        $('<br class="advisorphotobreak"/>').fadeIn('slow').appendTo('.advisorinputs');
        k++;
    });
     
    $('#advisorremove').click(function() {
    if(k > 1) {
        $('.advisorname:last').remove();
        $('.advisorrole:last').remove();
        $('.advisorbio:last').remove();
        $('.advisoremail:last').remove();
        $('.advisorphone:last').remove();
        $('.advisorphotourl:last').remove();
        $('.advisorphotobreak:last').remove();
        k--;
    }
    });
     
    $('#advisorreset').click(function() {
    while(k > 2) {
        $('.advisorname:last').remove();
        $('.advisorrole:last').remove();
        $('.advisorphone:last').remove();
        $('.advisorbio:last').remove();
        $('.advisoremail:last').remove();
        $('.advisorphotourl:last').remove();
        $('.advisorphotobreak:last').remove();
        k--;
    }
    });
 
    var l = $('input').size() + 1;  
    $('#testimonialadd').click(function() {

        $('<div><textarea rows="1" cols="40" type="text" class="testimonialname" name="dynamic[]" placeholder="Name" /></div>').fadeIn('slow').appendTo('.testimonialinputs');
        $('<div><textarea rows="1" cols="40" type="text" class="testimonialrole" name="dynamic[]" placeholder="Role" /></div>').fadeIn('slow').appendTo('.testimonialinputs');
        $('<div><textarea rows="4" cols="40" type="text" class="testimonialcontent" name="dynamic[]" placeholder="Testimonial Quote" /></div>').fadeIn('slow').appendTo('.testimonialinputs');
        $('<div><textarea rows="1" cols="40" type="text" class="testimonialemail" name="dynamic[]" placeholder="Contact E-mail" /></div>').fadeIn('slow').appendTo('.testimonialinputs');
        $('<div><textarea rows="1" cols="40" type="text" class="testimonialphone" name="dynamic[]" placeholder="Contact number" /></div>').fadeIn('slow').appendTo('.testimonialinputs');
        $('<div><textarea rows="1" cols="40" type="text" class="testimonialphotourl" name="dynamic[]" placeholder="Photo URL" /></div>').fadeIn('slow').appendTo('.testimonialinputs');
        $('<br class="testimonialphotobreak"/>').fadeIn('slow').appendTo('.testimonialinputs');
        l++;
    });
     
    $('#testimonialremove').click(function() {
    if(l > 1) {
        $('.testimonialname:last').remove();
        $('.testimonialrole:last').remove();
        $('.testimonialcontent:last').remove();
        $('.testimonialemail:last').remove();
        $('.testimonialphone:last').remove();
        $('.testimonialphotourl:last').remove();
        $('.testimonialphotobreak:last').remove();
        l--;
    }
    });
     
    $('#testimonialreset').click(function() {
    while(l > 2) {
        $('.testimonialname:last').remove();
        $('.testimonialrole:last').remove();
        $('.testimonialphone:last').remove();
        $('.testimonialcontent:last').remove();
        $('.testimonialemail:last').remove();
        $('.testimonialphotourl:last').remove();
        $('.testimonialphotobreak:last').remove();
        l--;
    }
    });
     
      
    var m = $('input').size() + 1;  
    $('#pressadd').click(function() {

        $('<div><textarea rows="1" cols="40" type="text" class="pressurl" name="dynamic[]" placeholder="Press URL" /></div>').fadeIn('slow').appendTo('.pressinputs');
        $('<br class="pressphotobreak"/>').fadeIn('slow').appendTo('.pressinputs');
        m++;
    });
     
    $('#pressremove').click(function() {
    if(m > 1) {
        $('.pressurl:last').remove();
        $('.pressphotobreak:last').remove();
        m--;
    }
    });
     
    $('#pressreset').click(function() {
    while(m > 2) {
        $('.pressurl:last').remove();
        $('.pressphotobreak:last').remove();
        m--;
    }
    });
    

    var n = $('input').size() + 1;  
    $('#partneradd').click(function() {

        $('<div><textarea rows="1" cols="40" type="text" class="partnerlogo" name="dynamic[]" placeholder="Customer/Partner Logo" /></div>').fadeIn('slow').appendTo('.partnerinputs');
         $('<div><textarea rows="1" cols="40" type="text" class="partnername" name="dynamic[]" placeholder="Customer/Partner Name" /></div>').fadeIn('slow').appendTo('.partnerinputs');
         $('<br class="partnerphotobreak"/>').fadeIn('slow').appendTo('.partnerinputs');
        n++;
    });
     
    $('#partnerremove').click(function() {
    if(n > 1) {
        $('.partnerlogo:last').remove();
        $('.partnername:last').remove();
        $('.partnerphotobreak:last').remove();
        n--;
    }
    });
     
    $('#partnerreset').click(function() {
    while(n > 2) {
        $('.partnerlogo:last').remove();
        $('.partnername:last').remove();
        $('.partnerphotobreak:last').remove();
        n--;
    }
    });






var o = $('input').size() + 1;  
    $('#previousfundingadd').click(function() {
        
        $('<div><textarea rows="1" cols="40" type="text" class="previousfundingsource" name="dynamic[]" placeholder="Funding Source" placeholder="Family/Friends/Angel/VC Firm/Investors/Bank/Other"/></div>').fadeIn('slow').appendTo('.previousfundinginputs');
        $('<div><textarea rows="1" cols="40" type="text" class="previousfundingamount" name="dynamic[]" placeholder="Funding Amount" /></div>').fadeIn('slow').appendTo('.previousfundinginputs');
        $('<div><textarea rows="1" cols="40" type="text" class="previousfundingdate" name="dynamic[]" placeholder="Funding Date" /></div>').fadeIn('slow').appendTo('.previousfundinginputs');
        $('<br class="previousfundingphotobreak"/>').fadeIn('slow').appendTo('.previousfundinginputs');
        o++;
    });
     
    $('#previousfundingremove').click(function() {
    if(o > 1) {
        $('.previousfundingsource:last').remove();
        $('.previousfundingamount:last').remove();
        $('.previousfundingdate:last').remove();
        $('.previousfundingphotobreak:last').remove();
        o--;
    }
    });
     
    $('#previousfundingreset').click(function() {
    while(o > 2) {
        $('.previousfundingsource:last').remove();
        $('.previousfundingamount:last').remove();
        $('.previousfundingdate:last').remove();
        $('.previousfundingphotobreak:last').remove();
        o--;
    }
    });
    });
</script>
<style type="text/css">
body{
  background-color: transparent;
}

.jf-form{
  margin-top: 28px;
}

.jf-option-box{
  display: none;
  margin-left: 8px;
}

.jf-hide{
  display: none;
}

.jf-disabled {
    background-color: #eeeeee;
    opacity: 0.6;
    pointer-events: none;
}

/* 
overwrite bootstrap default margin-left, because the <label> doesn't contain the <input> element.
*/
.checkbox input[type=checkbox], .checkbox-inline input[type=checkbox], .radio input[type=radio], .radio-inline input[type=radio] {
  position: absolute;
  margin-top: 4px \9;
  margin-left: 0px;
}

div.form-group{
  padding: 8px 8px 4px 8px;
}

.mainDescription{
  margin-bottom: 10px;
}
.responsive img{
  width: 100%;
}

p.error, p.validation-error{
  padding: 5px;
}

p.error{
  margin-top: 10px;
  color:#a94442;
}

p.server-error{
  font-weight: bold;
}

div.thumbnail{
  position: relative;
  text-align: center;
}

div.thumbnail.selected p{
  color: #ffffff;
}

div.thumbnail .glyphicon-ok-circle{
  position: absolute;
  top: 16px;
  left: 16px;
  color: #ffffff;
  font-size: 32px;
}

.jf-copyright{color: #888888; display: inline-block; margin: 16px;display:none;}

.form-group.required .control-label:after {
    color: #dd0000;
    content: "*";
    margin-left: 6px;
}

.submit .btn.disabled, .submit .btn[disabled]{
  background: transparent;
  opacity: 0.75;
}

/* for image option with span text */
.checkbox label > span, .radio label > span{
  display: block;
}

.form-group.inline .control-label,
.form-group.col-1 .control-label,
.form-group.col-2 .control-label,
.form-group.col-3 .control-label
{
  display: block;
}

.form-group.inline div.radio,
.form-group.inline div.checkbox{
  display: inline-block;
}

.form-group.col-1 div.radio,
.form-group.col-1 div.checkbox{
  display: block;
}

.form-group.col-2 div.radio,
.form-group.col-2 div.checkbox{
  display: inline-block;
  width: 48%;
}

.form-group.col-3 div.radio,
.form-group.col-3 div.checkbox{
  display: inline-block;
  width: 30%;
}

</style>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  
<section class="mbr-box mbr-section mbr-section--relative mbr-section--fixed-size mbr-section--full-height mbr-section--bg-adapted mbr-parallax-background mbr-after-navbar" id="header1-73" >
    <div class=" mbr-box__magnet--sm-padding mbr-box__magnet--center-left">

<div class="container">

<div id="general">
   <center><h4>Create your business's profile on FundMyVenture</h4></center>Tell a story that engages viewers and helps you stand out from the crowd. This is your opportunity to highlight what makes your company unique. This will be private to investors on FundMyVenture. Be sure not to share any confidential information here. Our team will reach out to take care of that.

<div class="panel-group" id="accordion1">
    <!-- First Panel -->
    <div class="panel panel-default">
        <div id="basics" class="panel-heading">
             <h4 class="panel-title"
                 data-toggle="collapse" 
                 data-target="#collapseOne">
                 Company Basics
             </h4>
        </div>
        <div id="collapseOne" class="panel-collapse collapse">
            <div class="panel-body">
               
<div  class="form-group required">
  <label id="c1_label" class="control-label" >Company Name</label>

<div class="input-group"><span class="input-group-addon left"></span>
<input type="text" class="form-control" id="c1" value=""  placeholder="ABC Private Limited"  
    data-rule-required="true"  />
</div>

  
</div>
<div class="form-group required">
  <label id="c2_label"class="control-label" >Company Location</label>

<div class="input-group"><span class="input-group-addon left"></span>
<input type="text" class="form-control" id="c2" value="" placeholder="Bangalore, India"   
    data-rule-required="true"  />
</div>

  
</div>
<div class="form-group required">
  <label id="c3_label"class="control-label" >Company Tagline</label>

<div class="input-group"><span class="input-group-addon left"></span>
<input type="text" class="form-control" id="c3" value="" Placeholder="Ex: Angel Investments Made Easy. For Everyone." 
    data-rule-required="true"  />
</div>

  
</div>



<div class="form-group " >
  <label id="industryarea_"class="control-label" >Industry Area</label>

<div  class="checkbox">
    <input  id="c64_1" name="c64[]"  type="checkbox" value="Advertising & Marketing" 
     >
    <label  for="c64_1">
      Advertising & Marketing
    </label>
  </div>

  <div class="checkbox">
    <input  id="c64_2" name="c64[]"  type="checkbox" value="Aerospace"  >
    <label  for="c64_2">
      Aerospace
    </label>
  </div>

  <div class="checkbox">
    <input  id="c64_3" name="c64[]"  type="checkbox" value="Agriculture"  >
    <label  for="c64_3">
      Agriculture
    </label>
  </div>

  <div class="checkbox">
    <input  id="c64_4" name="c64[]"  type="checkbox" value="Analytics"  >
    <label  for="c64_4">
      Analytics
    </label>
  </div>

  <div class="checkbox">
    <input  id="c64_5" name="c64[]"  type="checkbox" value="Arts"  >
    <label  for="c64_5">
      Arts
    </label>
  </div>

  <div class="checkbox">
    <input  id="c64_6" name="c64[]"  type="checkbox" value="Automotive"  >
    <label  for="c64_6">
      Automotive
    </label>
  </div>

  <div class="checkbox">
    <input  id="c64_7" name="c64[]"  type="checkbox" value="Bio - Technology"  >
    <label  for="c64_7">
      Bio - Technology
    </label>
  </div>

  <div class="checkbox">
    <input  id="c64_8" name="c64[]"  type="checkbox" value="Business to Business"  >
    <label  for="c64_8">
      Business to Business
    </label>
  </div>

  <div class="checkbox">
    <input  id="c64_9" name="c64[]"  type="checkbox" value="Cleantech"  >
    <label  for="c64_9">
      Cleantech
    </label>
  </div>

  <div class="checkbox">
    <input  id="c64_10" name="c64[]"  type="checkbox" value="Construction"  >
    <label  for="c64_10">
      Construction
    </label>
  </div>

  <div class="checkbox">
    <input  id="c64_11" name="c64[]"  type="checkbox" value="Consulting"  >
    <label  for="c64_11">
      Consulting
    </label>
  </div>

  <div class="checkbox">
    <input  id="c64_12" name="c64[]"  type="checkbox" value="Consumer Internet"  >
    <label  for="c64_12">
      Consumer Internet
    </label>
  </div>

  <div class="checkbox">
    <input  id="c64_13" name="c64[]"  type="checkbox" value="Consumer Products"  >
    <label  for="c64_13">
      Consumer Products
    </label>
  </div>

  <div class="checkbox">
    <input  id="c64_14" name="c64[]"  type="checkbox" value="Data Science"  >
    <label  for="c64_14">
      Data Science
    </label>
  </div>

  <div class="checkbox">
    <input  id="c64_15" name="c64[]"  type="checkbox" value="Design"  >
    <label  for="c64_15">
      Design
    </label>
  </div>

  <div class="checkbox">
    <input  id="c64_16" name="c64[]"  type="checkbox" value="Education"  >
    <label  for="c64_16">
      Education
    </label>
  </div>

  <div class="checkbox">
    <input  id="c64_17" name="c64[]"  type="checkbox" value="Electronics"  >
    <label  for="c64_17">
      Electronics
    </label>
  </div>

  <div class="checkbox">
    <input  id="c64_18" name="c64[]"  type="checkbox" value="Energy"  >
    <label  for="c64_18">
      Energy
    </label>
  </div>

  <div class="checkbox">
    <input  id="c64_19" name="c64[]"  type="checkbox" value="Environment"  >
    <label  for="c64_19">
      Environment
    </label>
  </div>

  <div class="checkbox">
    <input  id="c64_20" name="c64[]"  type="checkbox" value="Fashion & Apparel"  >
    <label  for="c64_20">
      Fashion & Apparel
    </label>
  </div>

  <div class="checkbox">
    <input  id="c64_21" name="c64[]"  type="checkbox" value="Film and Television"  >
    <label  for="c64_21">
      Film and Television
    </label>
  </div>

  <div class="checkbox">
    <input  id="c64_22" name="c64[]"  type="checkbox" value="Financial Services"  >
    <label  for="c64_22">
      Financial Services
    </label>
  </div>

  <div class="checkbox">
    <input  id="c64_23" name="c64[]"  type="checkbox" value="Food & Beverages"  >
    <label  for="c64_23">
      Food & Beverages
    </label>
  </div>

  <div class="checkbox">
    <input  id="c64_24" name="c64[]"  type="checkbox" value="Gaming"  >
    <label  for="c64_24">
      Gaming
    </label>
  </div>

  <div class="checkbox">
    <input  id="c64_25" name="c64[]"  type="checkbox" value="Government & Politics"  >
    <label  for="c64_25">
      Government & Politics
    </label>
  </div>

  <div class="checkbox">
    <input  id="c64_26" name="c64[]"  type="checkbox" value="Healthcare"  >
    <label  for="c64_26">
      Healthcare
    </label>
  </div>

  <div class="checkbox">
    <input  id="c64_27" name="c64[]"  type="checkbox" value="Hospitality"  >
    <label  for="c64_27">
      Hospitality
    </label>
  </div>

  <div class="checkbox">
    <input  id="c64_28" name="c64[]"  type="checkbox" value="Internet (Software & Services) "  >
    <label  for="c64_28">
      Internet (Software & Services) 
    </label>
  </div>

  <div class="checkbox">
    <input  id="c64_29" name="c64[]"  type="checkbox" value="Investment"  >
    <label  for="c64_29">
      Investment
    </label>
  </div>

  <div class="checkbox">
    <input  id="c64_30" name="c64[]"  type="checkbox" value="Legal Services"  >
    <label  for="c64_30">
      Legal Services
    </label>
  </div>

  <div class="checkbox">
    <input  id="c64_31" name="c64[]"  type="checkbox" value="Manufacturing"  >
    <label  for="c64_31">
      Manufacturing
    </label>
  </div>

  <div class="checkbox">
    <input  id="c64_32" name="c64[]"  type="checkbox" value="Market Research"  >
    <label  for="c64_32">
      Market Research
    </label>
  </div>

  <div class="checkbox">
    <input  id="c64_33" name="c64[]"  type="checkbox" value="Media"  >
    <label  for="c64_33">
      Media
    </label>
  </div>

  <div class="checkbox">
    <input  id="c64_34" name="c64[]"  type="checkbox" value="Mobile"  >
    <label  for="c64_34">
      Mobile
    </label>
  </div>

  <div class="checkbox">
    <input  id="c64_35" name="c64[]"  type="checkbox" value="Music"  >
    <label  for="c64_35">
      Music
    </label>
  </div>

  <div class="checkbox">
    <input  id="c64_36" name="c64[]"  type="checkbox" value="Non profit"  >
    <label  for="c64_36">
      Non profit
    </label>
  </div>

  <div class="checkbox">
    <input  id="c64_37" name="c64[]"  type="checkbox" value="Pharmaceutical"  >
    <label  for="c64_37">
      Pharmaceutical
    </label>
  </div>

  <div class="checkbox">
    <input  id="c64_38" name="c64[]"  type="checkbox" value="Professional Services"  >
    <label  for="c64_38">
      Professional Services
    </label>
  </div>

  <div class="checkbox">
    <input  id="c64_39" name="c64[]"  type="checkbox" value="Real Estate"  >
    <label  for="c64_39">
      Real Estate
    </label>
  </div>

  <div class="checkbox">
    <input  id="c64_40" name="c64[]"  type="checkbox" value="Restaurants"  >
    <label  for="c64_40">
      Restaurants
    </label>
  </div>

  <div class="checkbox">
    <input  id="c64_41" name="c64[]"  type="checkbox" value="Retail"  >
    <label  for="c64_41">
      Retail
    </label>
  </div>

  <div class="checkbox">
    <input  id="c64_42" name="c64[]"  type="checkbox" value="Security"  >
    <label  for="c64_42">
      Security
    </label>
  </div>

  <div class="checkbox">
    <input  id="c64_43" name="c64[]"  type="checkbox" value="Sports"  >
    <label  for="c64_43">
      Sports
    </label>
  </div>

  <div class="checkbox">
    <input  id="c64_44" name="c64[]"  type="checkbox" value="Technology"  >
    <label  for="c64_44">
      Technology
    </label>
  </div>

  <div class="checkbox">
    <input  id="c64_45" name="c64[]"  type="checkbox" value="Transportation"  >
    <label  for="c64_45">
      Transportation
    </label>
  </div>

  <div class="checkbox">
    <input  id="c64_46" name="c64[]"  type="checkbox" value="Travel/Tourism"  >
    <label  for="c64_46">
      Travel/Tourism
    </label>
  </div>

  
</div>

            </div>
        </div>
    </div>
    
    <!-- Second Panel -->
    <div class="panel panel-default">
        <div id="companykeywords"class="panel-heading">
             <h4 class="panel-title" 
                 data-toggle="collapse" 
                 data-target="#1_2">
                 Company Keywords
             </h4>
        </div>
        <div id="1_2" class="panel-collapse collapse">
            <div class="panel-body">
           
<div class="form-group  required" >
  <label id="c4_label"class="control-label" >Keywords</label>

<div class="input-group"><span class="input-group-addon left"></span>
<input type="text" class="form-control" id="c4"  value=""  aria-describedby="c4-help-block"  
    data-rule-required="true" placeholder="Virtual Reality, Mobile apps, Foodtech" />
</div>


  <p id="c4-help-block" class="description">Enter comma-separated keywords related to your industry that will help investors find you. </p>
  
</div>
</div>
        </div>
    </div>
    
    <!-- Third Panel -->
    <div class="panel panel-default">
        <div id="companyconnect"class="panel-heading">
             <h4 class="panel-title"
                 data-toggle="collapse"
                 data-target="#1_3">
                 Company Connect
             </h4>
        </div>
        <div id="1_3" class="panel-collapse collapse">
            <div class="panel-body">
                Connect your social networks and website. These educate and demonstrate your credibility.
                <div class="form-group  required" >
  <label id="c5_label"class="control-label" >Company E-Mail</label>

<div class="input-group"><span class="input-group-addon left"></span>
<input type="text" class="form-control" id="c5"  value=""  aria-describedby="c5-help-block"  
    data-rule-required="true" placeholder="contact@example.com" />
</div>

  
</div>

<div class="form-group  required" >
  <label id="c6_label"class="control-label" >Company Website</label>

<div class="input-group"><span class="input-group-addon left"></span>
<input type="text" class="form-control" id="c6"  value=""  aria-describedby="c6-help-block"  
    data-rule-required="true" placeholder="http://example.com" />
</div>


  
</div>

<div class="form-group  required" >
  <label id="c7_label"class="control-label" >Contact Number</label>

<div class="input-group"><span class="input-group-addon left"></span>
<input type="text" class="form-control" id="c7"  value=""  aria-describedby="c7-help-block"  
    data-rule-required="true" placeholder="+91-XXXXXXXXXX" />

</div>


  <p id="c7-help-block" class="description">Enter your busines's dedicated contact number. In case that is not available, please enter the company's main promoter's contact number.</p>
  

    <div class="checkbox">
    <input  id="confirmationtodeals" name="c64[]"  type="checkbox" value="agreementotrespondtoleads" 
     >
    <label  for="confirmationtodeals">
      I agree to respond to text messages about leads and deal reservations and will respond to leads within 24 hours.
    </label>
  </div>

</div>

<div class="form-group" >
  <label class="control-label" >Company's LinkedIn page</label>

<div class="input-group"><span class="input-group-addon left"></span>
<input type="text" class="form-control" id="c8"  value=""  aria-describedby="c8-help-block"  
    data-rule-required="true" placeholder="Company's LinkedIn page URL" />

</div>
</div>

<div class="form-group" >
  <label class="control-label" >Company's Facebook page</label>

<div class="input-group"><span class="input-group-addon left"></span>
<input type="text" class="form-control" id="c9"  value=""  aria-describedby="c9-help-block"  
    data-rule-required="true" placeholder="Company's Facebook page URL" />

</div>
</div>

<div class="form-group" >
  <label class="control-label" >Company's Twitter Handle</label>

<div class="input-group"><span class="input-group-addon left"></span>
<input type="text" class="form-control" id="c10"  value=""  aria-describedby="c10-help-block"  
    data-rule-required="true" placeholder="Company's Twitter page URL" />

</div>
</div>

<div class="form-group " >
  <label class="control-label" >Company Video</label>

<div class="input-group"><span class="input-group-addon left"></span>
<input type="text" class="form-control" id="c11"  value=""  aria-describedby="c11-help-block"  
    data-rule-required="true" placeholder="https://www.youtube.com/watch?v=ybCNjf80Y-c" />
</div>


  <p id="c11-help-block" class="description">Your video is one of the most effective ways to tell your story. Tell us about the problem your business solves and include a demo of your product or service if applicable. Whenever possible, feature yourself and your co-founders in the video as an opportunity for supporters to meet the real people behind your company.<br><br> If you don't have a company video ready yet, don't worry, let us know and we will help you out to prepare the video, absolutely free! :)</p>
  
</div>

<div class="form-group " >
  <label class="control-label" >Pitch Video</label>

<div class="input-group"><span class="input-group-addon left"></span>
<input type="text" class="form-control" id="c12"  value=""  aria-describedby="c12-help-block"  
    data-rule-required="true" placeholder="https://www.youtube.com/watch?v=E_avNkrUVbc" />
</div>


  <p id="c12-help-block" class="description">Your video is one of the most effective ways to tell your story. Tell us about the problem your business solves and include a demo of your product or service if applicable. Whenever possible, feature yourself and your co-founders in the video as an opportunity for supporters to meet the real people behind your company.<br><br> If you don't have a company video ready yet, don't worry, let us know and we will help you out to prepare the video, absolutely free! :)</p>
  
</div>


<div class="form-group  required" >
  <label id="c13_label"class="control-label" >Company Pitch Deck </label>

<div class="input-group"><span class="input-group-addon left"></span>
<input type="text" class="form-control" id="c13"  value=""  aria-describedby="c13-help-block"  
    data-rule-required="true" placeholder="http://www.slideshare.net/PitchDeckCoach/sequoia-capital-pitchdecktemplate" />
</div>


  <p id="c13-help-block" class="description">This is where you make your business case. Questions to help jumpstart your thinking: Who is your market? What are your differentiators? What makes you viable? What are your indicators of success? What are your plans to scale?<br><br> If you don't have a pitch deck ready yet, don't worry, let us know and we will help you out to prepare the deck, absolutely free! :)</p>
  
</div>



            </div>
        </div>
    </div>

     
      <div class="panel panel-default">
        <div id="companyassets" class="panel-heading">
             <h4 class="panel-title"
                 data-toggle="collapse"
                 data-target="#1_4">
                 Company Assets
             </h4>
        </div>
        <div id="1_4" class="panel-collapse collapse">
            <div class="panel-body">
                <div class="form-group  required" >
  <label id="c14_label"class="control-label" >Company Logo </label>
<div class="input-group"><span class="input-group-addon left"></span>
<input type="text" class="form-control" id="c14"  value=""  aria-describedby="c14-help-block"  
    data-rule-required="true" placeholder="http://goo.gl/7xCf9e" />
</div>


 
</div>
  <div class="form-group " >
  <label class="control-label" >Company Featured Image </label>

<div class="input-group"><span class="input-group-addon left"></span>
<input type="text" class="form-control" id="c15"  value=""  aria-describedby="c15-help-block"  
    data-rule-required="true" placeholder="https://support.apple.com/library/content/dam/edam/applecare/images/en_US/ipad/ipad/apple_logo.png" />
</div>
<p id="c15-help-block" class="description">Featured images act as 'cover photos' for your business's branding page. </p>
</div>

<div class="form-group  required" >
  <label id="c16_label"class="control-label" >Team Photo</label>

<div class="input-group"><span class="input-group-addon left"></span>
<input type="text" class="form-control" id="c16"  value=""  aria-describedby="c16-help-block"  
    data-rule-required="true" placeholder="http://www.wufoo.com/images/v3/about/team.png" />
</div>
<p id="c16-help-block" class="description">No selfies here, please.</p>
</div>
            </div>
        </div>
    </div>


<div class="panel panel-default">
        <div id="companyoverview" class="panel-heading">
             <h4 class="panel-title"
                 data-toggle="collapse"
                 data-target="#1_5">
                 Company Overview
             </h4>
        </div>
        <div id="1_5" class="panel-collapse collapse">
            <div class="panel-body">
                <div class="form-group  required" >
  <label id="c17_label" class="control-label" >Link to overview</label>
<div class="input-group"><span class="input-group-addon left"></span>
<input type="text" class="form-control" id="c17"  value=""  aria-describedby="c17-help-block"  
    data-rule-required="true" placeholder="http://goo.gl/7xCf9e" />
</div>
<p id="c17-help-block" class="description">Your company overview is what lets investors know what your company is about and why it's unique. Answering questions like why you started your company, what problem your company solves, and why your company will be successful can help get the attention of investors. Please include as much details as possible. Remember, nothing beats a clear explanation of what your company does, and how you plan to take it forward. <br> You can provide us a link with the overview so that you can also edit it later.</p>
</div>
            </div>
        </div>
    </div>

<div class="panel panel-default">
        <div id="teamheader" class="panel-heading">
             <h4 class="panel-title"
                 data-toggle="collapse"
                 data-target="#1_6">
                 Team
             </h4>
        </div>
        <div id="1_6" class="panel-collapse collapse">
            <div class="panel-body">
Add your team members, advisors and leadership team so that people know who is involved. Each stakeholder represents a powerful and personal way to demonstrate the strength of your company.
                 <div id="teamstatusresponse" class="form-group  required" >
  <label id="teamleadership"class="control-label">Leadership</label>
<center>
<a id="leadershipadd">Add</a> | <a  id="leadershipremove">Remove</a>  | <a  id="leadershipreset">Reset</a>  



<div class="leadershipinputs">
<div></div>
</div></center>
</div>

 <div class="form-group" >
  <label class="control-label">Advisory Board</label>
<center>
<a id="advisoradd">Add</a> | <a  id="advisorremove">Remove</a>  | <a  id="advisorreset">Reset</a>  



<div class="advisorinputs">
<div></div>
</div></center>
</div>

                <div class="form-group" >
  <label class="control-label">Team members</label>
<center>
<a id="teammemberadd">Add</a> | <a  id="teammemberremove">Remove</a>  | <a  id="teammemberreset">Reset</a>  



<div class="teammemberinputs">
<div></div>
</div></center>
</div>






            </div>
        </div>
    </div>

<div class="panel panel-default">
        <div class="panel-heading">
             <h4 class="panel-title"
                 data-toggle="collapse"
                 data-target="#1_7">
                 Reach - Customers, Press, Industry leaders
             </h4>
        </div>
        <div id="1_7" class="panel-collapse collapse">
            <div class="panel-body">

                 



             
 <div class="form-group" >
  <label class="control-label">Testimonials</label>
<center>
<a id="testimonialadd">Add</a> | <a  id="testimonialremove">Remove</a>  | <a  id="testimonialreset">Reset</a>  



<div class="testimonialinputs">
<div></div>
</div></center>
</div>

 <div class="form-group " >
  <label class="control-label">Press</label>
<center>
<a id="pressadd">Add</a> | <a  id="pressremove">Remove</a>  | <a  id="pressreset">Reset</a>  



<div class="pressinputs">
<div></div>
</div></center>
</div>


<div class="form-group " >
  <label class="control-label">Key Customers/Partners</label>
<center>
<a id="partneradd">Add</a> | <a  id="partnerremove">Remove</a>  | <a  id="partnerreset">Reset</a>  



<div class="partnerinputs">
<div></div>
</div></center>
</div>

            </div>
        </div>
    </div>

<div class="panel panel-default">
        <div id="investmentdetailsheader"class="panel-heading">
             <h4 class="panel-title"
                 data-toggle="collapse"
                 data-target="#1_8">
                 Investment Details
             </h4>
        </div>
        <div id="1_8" class="panel-collapse collapse">
            <div class="panel-body">
We currently support equity based fund-raise campaigns only. Please fill in the information below. We will reach out to you regarding collection of necessary documents for the fund raise.
                 
<div class="form-group">
  <label for="sel1">Fundraising Stage</label>
  <select class="form-control" id="sel1">
    
                          <option  type="checkbox" id="preseed" value="Pre-Seed" > Pre-seed                        </option><br>
                      
                                          
                        
                          <option  type="checkbox" id="seed" value="Seed"> Seed                        </option><br>
                      
                                          
                        
                          <option  type="checkbox" id="preseriesa" value="Pre Series A"> Pre Series A                        </option><br>
                      
                                          
                        
                          <option  type="checkbox" id="seriesa" value="Series A"> Series A                        </option><br>
                      
                                          
                        
                          <option  type="checkbox" id="preseriesb"value="Pre Series B" > Pre Series B                        </option><br>
                      
                                          
                        
                          <option  type="checkbox" id="seriesb" value="Series B"> Series B                        </option><br>
                      
                                          
                        
                          <option  type="checkbox" id="preseriesc" value="Pre Series C" > Pre Series C                        </option><br>
                      
                                          
                        
                          <option  type="checkbox" id="seriesc" value="Series C"> Series C                        </option><br>
                      
                                          
                        
                          <option  type="checkbox" id="preseriesd" value="Pre Series D"> Pre Series D                        </option><br>
                      
                                          
                        
                          <option  type="checkbox" id="seriesd" value="Series D"> Series D                        </option><br>
                      
                                          
                        
                          <option  type="checkbox" id="other" value="Other"> Other                        </option><br>
                      
  </select>
</div>

 <div class="form-group  required" >
  <label id="c18_label" class="control-label" >Fundraising Target</label>

<div class="input-group"><span class="input-group-addon left"></span>
<input type="text" class="form-control" id="c18"  value=""  aria-describedby="c18-help-block"  
    data-rule-required="true" placeholder="Fundraising Target" />
</div>
  <p id="c18-help-block" class="description">How much money do you intend to raise via this fundraise?</p>
</div>


<div class="form-group " >
  <label class="control-label" >Minimum Investment Amount Per Investor</label>

<div class="input-group"><span class="input-group-addon left"></span>
<input type="text" class="form-control" id="c19"  value=""  aria-describedby="c19-help-block"  
    data-rule-required="true" placeholder="Minimum ticket size" />

</div>


  <p id="c19-help-block" class="description">Please note that Companies Act 2013 allows a private limited company registered in India to have a maximum of 200 shareholders in one financial year. Please decide on the minimum investment amount per investor keeping this restriction in mind.</p>

</div>

<div class="form-group  required" >
    <div class="checkbox">
    <input  id="currentlyfundraisingtrue" name="c64[]"  type="checkbox" value="Advertising & Marketing" 
     >
    <label  for="confirmationtocurrentfundraising">
      Is your company currently fundraising?
    </label>
  </div>
<script type="text/javascript">
$('#currentlyfundraisingtrue').change(function () {
if(document.getElementById("currentlyfundraisingtrue").checked)document.getElementById("currentlyfundraising").style.display="block";
else document.getElementById("currentlyfundraising").style.display="none";
});
</script>
<div id="currentlyfundraising" style="display:none">

  <label class="control-label">Amount Raised in Current Round</label>

<div class="input-group"><span class="input-group-addon left"></span>
<input type="text" class="form-control" id="c20"  value=""  aria-describedby="c20-help-block"  
    data-rule-required="true" placeholder="Amount raised so far" />

</div>
</div>
</div>

<div class="form-group  " >
   


  <label class="control-label">Pre-money Valuation</label>

<div class="input-group"><span class="input-group-addon left"></span>
<input type="text" class="form-control" id="c21"  value=""  aria-describedby="c21-help-block"  
    data-rule-required="true" placeholder="Amount raised so far" />

</div>
<p id="c21-help-block" class="description"><a href="https://en.wikipedia.org/wiki/Pre-money_valuation" target="_blank">Pre Money Valuation</a> refers to the company's valuation before the investment.</p>
</div>  

    <div class="form-group " >
  <label class="control-label">Funding from previous sources</label>
<center>
<a id="previousfundingadd">Add</a> | <a id="previousfundingremove">Remove</a>  | <a id="previousfundingreset">Reset</a>  



<div class="previousfundinginputs">
<div></div>
</div></center>
</div>

</div>


            </div>

        </div>  <div class="panel panel-default">
        <div id="pitchcontentheader"class="panel-heading">
             <h4 class="panel-title"
                 data-toggle="collapse" 
                 data-target="#1_9">
                 Pitch Content
             </h4>
        </div>
        <div id="1_9" class="panel-collapse collapse">
            <div class="panel-body">
               
<div class="form-group required">
  <label id="highlights"class="control-label">Higlights</label>

<div class="input-group"><span class="input-group-addon left"></span>
<input type="text" class="form-control" id="c22" value=""  placeholder="Highlight 1"  
    data-rule-required="true"  />
</div>
<div class="input-group"><span class="input-group-addon left"></span>
<input type="text" class="form-control" id="c23" value=""  placeholder="Highlight 2"  
    data-rule-required="true"  />
</div>
<div class="input-group"><span class="input-group-addon left"></span>
<input type="text" class="form-control" id="c24" value=""  placeholder="Highlight 3"  
    data-rule-required="true"  />
</div>
  <p id="c22-help-block" class="description">Choose the 3 most buzz-worthy highlights about your current round that will impress investors.</p>
  
</div>
<div class="form-group required">
  <label id="c25_label"class="control-label" >Elevator Pitch</label>

<div class="input-group"><span class="input-group-addon left"></span>
<input type="text" class="form-control" id="c25" value="" placeholder="Imagine you 30 seconds of a very important investor's time. What will you pitch to him/her in 30 seconds?"   
    data-rule-required="true"  />
</div>

  
</div>



            </div>
        </div>
    </div>
    </div>




</div>
    
    </div>
    









    
    

    <div>
      <script type="text/javascript">
      $(function () {

    var active = true;

    $('#collapse-init').click(function () {
        if (active) {
            active = false;
            $('.panel-collapse').collapse('show');
            $('.panel-title').attr('data-toggle', '');
            $(this).text('Enable accordion behavior');
        } else {
            active = true;
            $('.panel-collapse').collapse('hide');
            $('.panel-title').attr('data-toggle', 'collapse');
            $(this).text('Disable accordion behavior');
        }
    });
    
    $('#accordion1').on('show.bs.collapse', function () {
        if (active) $('#accordion1 .in').collapse('hide');
    });

});


      </script>
</div><div id="postsubmitaction"></div>

<center><a class="mbr-buttons__btn btn btn-lg animated fadeInUp delay btn-warning" id="startupregistration">Register</a></center>
<hr>
<center>
    <h3>
Finding difficulties filling this form? <br>No Issues! Click <a  data-toggle="modal" href="#modalventure_signup">here</a> and we will reach out to you to help register your startup.  </h3></center>
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
  Need help? Drop a line to <a href="mailto:reachout@fundmyventure.co">reachout@fundmyventure.co</a> and we will get back to you within 24 hours.
        &nbsp&nbsp&nbsp<input id="button" type="button" onclick="f()" value="X">
 
</div>
</center>










<script type="text/javascript">
$('#startupregistration').click(function(){
var postsubmitactionmessage='<center>';
var flag_final=0;
if(document.getElementById("c1").value=="")
    {   flag_final=1;
        postsubmitactionmessage=postsubmitactionmessage+"Please enter your company's name.<br>";
        document.getElementById("basics").style.backgroundColor = '#FF0044';
        document.getElementById("c1_label").style.backgroundColor = '#FF0044';
    }
else if(document.getElementById("c1").value!="")
    {
        document.getElementById("basics").style.backgroundColor = '#ffffff';
        document.getElementById("c1_label").style.backgroundColor = '#ffffff';
    }

if(document.getElementById("c2").value=="")
      { flag_final=1;
        postsubmitactionmessage=postsubmitactionmessage+"Please enter your company's location.<br>";
        document.getElementById("basics").style.backgroundColor = '#FF0044';
        document.getElementById("c2_label").style.backgroundColor = '#FF0044';
    }
    else if(document.getElementById("c2").value!="")
    {
        document.getElementById("basics").style.backgroundColor = '#ffffff';
        document.getElementById("c2_label").style.backgroundColor = '#ffffff';
    }
if(document.getElementById("c3").value=="")
     {  flag_final=1;
        postsubmitactionmessage=postsubmitactionmessage+"Please enter your company's tagline.<br>";
        document.getElementById("basics").style.backgroundColor = '#FF0044';
        document.getElementById("c3_label").style.backgroundColor = '#FF0044';
    }
    else if(document.getElementById("c3").value!="")
    {
        document.getElementById("basics").style.backgroundColor = '#ffffff';
        document.getElementById("c3_label").style.backgroundColor = '#ffffff';
    }
    var flag=0;
   for(var i=1;i<47;i++)
  if(document.getElementById("c64_".concat(i.toString())).checked)
    {
      flag=1;
      break;
    }
     if(flag==0)
        {   flag_final=1;
        postsubmitactionmessage=postsubmitactionmessage+"Please enter your company's area of operation.<br>";
        document.getElementById("basics").style.backgroundColor = '#FF0044';
        document.getElementById("industryarea_").style.backgroundColor = '#FF0044';
    }

        else if(document.getElementById("c1").value!="")
    {
        document.getElementById("basics").style.backgroundColor = '#ffffff';
        document.getElementById("industryarea_").style.backgroundColor = '#ffffff';
    }
if(document.getElementById("c4").value=="")
     {  flag_final=1;
        postsubmitactionmessage=postsubmitactionmessage+"Please enter your keywords related to your business.<br>";
        document.getElementById("companykeywords").style.backgroundColor = '#FF0044';
        document.getElementById("c4_label").style.backgroundColor = '#FF0044';
    }
    else if(document.getElementById("c4").value!="")
    {
        document.getElementById("companykeywords").style.backgroundColor = '#ffffff';
        document.getElementById("c4_label").style.backgroundColor = '#ffffff';
    }

    if(document.getElementById("c5").value=="")
     {  flag_final=1;
        postsubmitactionmessage=postsubmitactionmessage+"Please enter your business's e-mail address.<br>";
        document.getElementById("companyconnect").style.backgroundColor = '#FF0044';
        document.getElementById("c5_label").style.backgroundColor = '#FF0044';
    }
    else if(document.getElementById("c5").value!="")
    {
        document.getElementById("companyconnect").style.backgroundColor = '#ffffff';
        document.getElementById("c5_label").style.backgroundColor = '#ffffff';
    }


    if(document.getElementById("c6").value=="")
     {  flag_final=1;
        postsubmitactionmessage=postsubmitactionmessage+"It is important for your business to have an online presence. Please enter your business's web address.<br>";
        document.getElementById("companyconnect").style.backgroundColor = '#FF0044';
        document.getElementById("c6_label").style.backgroundColor = '#FF0044';
    }
    else if(document.getElementById("c6").value!="")
    {
        document.getElementById("companyconnect").style.backgroundColor = '#ffffff';
        document.getElementById("c6_label").style.backgroundColor = '#ffffff';
    }

    if(document.getElementById("c7").value=="")
     {  flag_final=1;
        postsubmitactionmessage=postsubmitactionmessage+"Please enter the contact number where we can contact you to get more information about your business.<br>";
        document.getElementById("companyconnect").style.backgroundColor = '#FF0044';
        document.getElementById("c7_label").style.backgroundColor = '#FF0044';
    }
    else if(document.getElementById("c7").value!="")
    {
        document.getElementById("companyconnect").style.backgroundColor = '#ffffff';
        document.getElementById("c7_label").style.backgroundColor = '#ffffff';
    }

     if(document.getElementById("c13").value=="")
     {  flag_final=1;
        postsubmitactionmessage=postsubmitactionmessage+"You forgot to enter the URL to your business's slide deck. Company slide deck is an absolute must for your business's fundraise. It enables investors to understand your business better. P.S. Company slide deck is different from pitch slide deck.<br>";
        document.getElementById("companyconnect").style.backgroundColor = '#FF0044';
        document.getElementById("c13_label").style.backgroundColor = '#FF0044';
    }
    else if(document.getElementById("c13").value!="")
    {
        document.getElementById("companyconnect").style.backgroundColor = '#ffffff';
        document.getElementById("c13_label").style.backgroundColor = '#ffffff';
    }

     if(document.getElementById("c14").value=="")
     {  flag_final=1;
        postsubmitactionmessage=postsubmitactionmessage+"Please enter the URL to your business's logo.<br>";
        document.getElementById("companyassets").style.backgroundColor = '#FF0044';
        document.getElementById("c14_label").style.backgroundColor = '#FF0044';
    }
    else if(document.getElementById("c14").value!="")
    {
        document.getElementById("companyassets").style.backgroundColor = '#ffffff';
        document.getElementById("c14_label").style.backgroundColor = '#ffffff';
    }

     if(document.getElementById("c16").value=="")
     {  flag_final=1;
        postsubmitactionmessage=postsubmitactionmessage+"Please enter the URL to your team photo.<br>";
        document.getElementById("companyassets").style.backgroundColor = '#FF0044';
        document.getElementById("c16_label").style.backgroundColor = '#FF0044';
    }
    else if(document.getElementById("c16").value!="")
    {
        document.getElementById("companyassets").style.backgroundColor = '#ffffff';
        document.getElementById("c16_label").style.backgroundColor = '#ffffff';
    }
    if(document.getElementById("c17").value=="")
     {  flag_final=1;
        postsubmitactionmessage=postsubmitactionmessage+"Please enter an overview of what your business does.<br>";
        document.getElementById("companyoverview").style.backgroundColor = '#FF0044';
        document.getElementById("c17_label").style.backgroundColor = '#FF0044';
    }
    else if(document.getElementById("c17").value!="")
    {
        document.getElementById("companyoverview").style.backgroundColor = '#ffffff';
        document.getElementById("c17_label").style.backgroundColor = '#ffffff';
    }
    var flag_leadership=0;
     $.each($('.leadershipname'), function() {
       if($(this).val()=="")
        flag_leadership=1;
   });



    if($('.leadershipname').length==0)
        {   flag_final=1;
            postsubmitactionmessage=postsubmitactionmessage+"Please enter details of atleast one member from leadership team.";
         document.getElementById("teamstatusresponse").style.backgroundColor = '#FF0044';
        document.getElementById("teamheader").style.backgroundColor = '#FF0044';
    }
    else if(flag_leadership==1){
        {   flag_final=1;
            postsubmitactionmessage=postsubmitactionmessage+"The name of people in leadership team cannot be left empty";
     document.getElementById("teamstatusresponse").style.backgroundColor = '#FF0044';
        document.getElementById("teamheader").style.backgroundColor = '#FF0044';
    return false;}
   
    }
    else {
        document.getElementById("teamheader").style.backgroundColor = '#ffffff';
        document.getElementById("teamstatusresponse").style.backgroundColor = '#ffffff';   
    }
    if(document.getElementById("c18").value=="")
    {   flag_final=1;
        postsubmitactionmessage=postsubmitactionmessage+"Please enter your fundraising target.<br>";
        document.getElementById("investmentdetailsheader").style.backgroundColor = '#FF0044';
        document.getElementById("c18_label").style.backgroundColor = '#FF0044';
    }
else if(document.getElementById("c18").value!="")
    {
        document.getElementById("investmentdetailsheader").style.backgroundColor = '#ffffff';
        document.getElementById("c18_label").style.backgroundColor = '#ffffff';
    }
    if(document.getElementById("c22").value=="")
    {   flag_final=1;
        postsubmitactionmessage=postsubmitactionmessage+"Please enter Highlight 1 of your pitch content.<br>";
        document.getElementById("pitchcontentheader").style.backgroundColor = '#FF0044';
        document.getElementById("highlights").style.backgroundColor = '#FF0044';
    }
else if(document.getElementById("c22").value!="")
    {
        document.getElementById("pitchcontentheader").style.backgroundColor = '#ffffff';
        document.getElementById("highlights").style.backgroundColor = '#ffffff';
    }


     if(document.getElementById("c23").value=="")
    {   flag_final=1;
        postsubmitactionmessage=postsubmitactionmessage+"Please enter Highlight 2 of your pitch content.<br>";
        document.getElementById("pitchcontentheader").style.backgroundColor = '#FF0044';
        document.getElementById("highlights").style.backgroundColor = '#FF0044';
    }
else if(document.getElementById("c23").value!="")
    {
        document.getElementById("pitchcontentheader").style.backgroundColor = '#ffffff';
        document.getElementById("highlights").style.backgroundColor = '#ffffff';
    }



     if(document.getElementById("c24").value=="")
    {   flag_final=1;
        postsubmitactionmessage=postsubmitactionmessage+"Please enter Highlight 3 of your pitch content.<br>";
        document.getElementById("pitchcontentheader").style.backgroundColor = '#FF0044';
        document.getElementById("highlights").style.backgroundColor = '#FF0044';
    }
else if(document.getElementById("c24").value!="")
    {
        document.getElementById("pitchcontentheader").style.backgroundColor = '#ffffff';
        document.getElementById("highlights").style.backgroundColor = '#ffffff';
    }




    if(document.getElementById("c25").value=="")
    {   flag_final=1;
        postsubmitactionmessage=postsubmitactionmessage+"Please enter your elevator pitch.<br>";
        document.getElementById("pitchcontentheader").style.backgroundColor = '#FF0044';
        document.getElementById("c25_label").style.backgroundColor = '#FF0044';
    }
else if(document.getElementById("c25").value!="")
    {   
        document.getElementById("pitchcontentheader").style.backgroundColor = '#ffffff';
        document.getElementById("c25_label").style.backgroundColor = '#ffffff';
    }





 var industryarea_venture='';
  for(var i=1;i<47;i++)
  if(document.getElementById("c64_".concat(i.toString())).checked)
    industryarea_venture=industryarea_venture+document.getElementById("c64_".concat(i.toString())).value+',';

  var teammembername=[];
    var teammemberrole = [];
    var teammemberbio = [];
    var teammemberemail = [];
    var teammemberphone = [];
    var teammemberphotourl = [];
        
   $.each($('.teammembername'), function() {
        teammembername.push($(this).val());
    });
    $.each($('.teammemberrole'), function() {
        teammemberrole.push($(this).val());
    });
     $.each($('.teammemberbio'), function() {
        teammemberbio.push($(this).val());
    });
      $.each($('.teammemberemail'), function() {
        teammemberemail.push($(this).val());
    });
       $.each($('.teammemberphone'), function() {
        teammemberphone.push($(this).val());
    });
        $.each($('.teammemberphotourl'), function() {
        teammemberphotourl.push($(this).val());
    });

var leadershipname=[];
    var leadershiprole = [];
    var leadershipbio = [];
    var leadershipemail = [];
    var leadershipphone = [];
    var leadershipphotourl = [];

    
        
   $.each($('.leadershipname'), function() {
        leadershipname.push($(this).val());
    });
    $.each($('.leadershiprole'), function() {
        leadershiprole.push($(this).val());
    });
     $.each($('.leadershipbio'), function() {
        leadershipbio.push($(this).val());
    });
      $.each($('.leadershipemail'), function() {
        leadershipemail.push($(this).val());
    });
       $.each($('.leadershipphone'), function() {
        leadershipphone.push($(this).val());
    });
        $.each($('.leadershipphotourl'), function() {
        leadershipphotourl.push($(this).val());
    });

  var advisorname=[];
    var advisorrole = [];
    var advisorbio = [];
    var advisoremail = [];
    var advisorphone = [];
    var advisorphotourl = [];
        
   $.each($('.advisorname'), function() {
        advisorname.push($(this).val());
    });
    $.each($('.advisorrole'), function() {
        advisorrole.push($(this).val());
    });
     $.each($('.advisorbio'), function() {
        advisorbio.push($(this).val());
    });
      $.each($('.advisoremail'), function() {
        advisoremail.push($(this).val());
    });
       $.each($('.advisorphone'), function() {
        advisorphone.push($(this).val());
    });
        $.each($('.advisorphotourl'), function() {
        advisorphotourl.push($(this).val());
    });

 var testimonialname=[];
    var testimonialrole = [];
    var testimonialcontent = [];
    var testimonialemail = [];
    var testimonialphone = [];
    var testimonialphotourl = [];
        
   $.each($('.testimonialname'), function() {
        testimonialname.push($(this).val());
    });
    $.each($('.testimonialrole'), function() {
        testimonialrole.push($(this).val());
    });
     $.each($('.testimonialcontent'), function() {
        testimonialcontent.push($(this).val());
    });
      $.each($('.testimonialemail'), function() {
        testimonialemail.push($(this).val());
    });
       $.each($('.testimonialphone'), function() {
        testimonialphone.push($(this).val());
    });
        $.each($('.testimonialphotourl'), function() {
        testimonialphotourl.push($(this).val());
    });

         
    var pressurl = [];
        

        $.each($('.pressurl'), function() {
        pressurl.push($(this).val());
    });

  var partnername = [];
  var partnerlogo = [];
        
   $.each($('.partnername'), function() {
        partnername.push($(this).val());
    });
        $.each($('.partnerlogo'), function() {
        partnerlogo.push($(this).val());
    });

         var previousfundingsource = [];
  var previousfundingamount = [];
  var previousfundingdate = [];

        
   $.each($('.previousfundingsource'), function() {
        previousfundingsource.push($(this).val());
    });
        $.each($('.previousfundingamount'), function() {
        previousfundingamount.push($(this).val());
    });
        $.each($('.previousfundingdate'), function() {
        previousfundingdate.push($(this).val());
    });

if(flag_final==1)
 {
    postsubmitactionmessage=postsubmitactionmessage+"</center>";
document.getElementById("postsubmitaction").innerHTML=postsubmitactionmessage;
document.getElementById("postsubmitaction").style.color = 'red';
}
else{

$.post('http://fundmyventure.co/server/venture_signup.php', { 
   companyname:document.getElementById("c1").value,
  companylocation:document.getElementById("c2").value,
  companytagline:document.getElementById("c3").value,
  industryarea_venture:industryarea_venture,
  companykeywords:document.getElementById("c4").value,
  companyemail:document.getElementById("c5").value,
  companywebsite:document.getElementById("c6").value,
  companycontactnumber:document.getElementById("c7").value,
  companylinkedin:document.getElementById("c8").value,
  companyfacebook:document.getElementById("c9").value,
  companytwitter:document.getElementById("c10").value,
  companyvideo:document.getElementById("c11").value,
  companypitchvideo:document.getElementById("c12").value,
  companypitchdeck:document.getElementById("c13").value,
  companylogo:document.getElementById("c14").value,
  companyfeaturedimage:document.getElementById("c15").value,
  companyteamimage:document.getElementById("c16").value,
  companyoverview:document.getElementById("c17").value,
  companyfundraisestage:document.getElementById("sel1").value,
  companyfundraisetarget:document.getElementById("c18").value,
  companyfundraiseminimuminvestment:document.getElementById("c19").value,
  companymoneyraisedsofar:document.getElementById("c20").value,
  companypremoneyvaluation:document.getElementById("c21").value,
  companyhighlight1:document.getElementById("c22").value,
  companyhighlight2:document.getElementById("c23").value,
  companyhighlight3:document.getElementById("c24").value,
  companyelevatorpitch:document.getElementById("c25").value,
  teammembername:teammembername,
  teammemberrole:teammemberrole,
  teammemberbio: teammemberbio,
  teammemberemail: teammemberemail,
  teammemberphone: teammemberphone,
  teammemberphotourl: teammemberphotourl,
  leadershipname:leadershipname,
  leadershiprole:leadershiprole,
  leadershipbio: leadershipbio,
  leadershipemail: leadershipemail,
  leadershipphone: leadershipphone,
  leadershipphotourl: leadershipphotourl,
  advisorname:advisorname,
  advisorrole:advisorrole,
  advisorbio: advisorbio,
  advisoremail: advisoremail,
  advisorphone: advisorphone,
  advisorphotourl: advisorphotourl,
  testimonialname:testimonialname,
  testimonialrole:testimonialrole,
  testimonialcontent: testimonialcontent,
  testimonialemail: testimonialemail,
  testimonialphone: testimonialphone,
  testimonialphotourl: testimonialphotourl,
  pressurl:pressurl,
  partnername:partnername,
  partnerlogo:partnerlogo,
  previousfundingsource:previousfundingsource,
  previousfundingamount:previousfundingamount,
  previousfundingdate:previousfundingdate
}) 
.done(function( data ) {
 if(data=="ok"){
    document.getElementById("postsubmitaction").innerHTML="<center>Your company has been successfully registered on the platform. Someone from our team will contact you shortly.</center>";
document.getElementById("postsubmitaction").style.color = 'green';
 }
  if(data=="user already exists"){
    document.getElementById("postsubmitaction").innerHTML="<center>Our system already contains an entry with the Company Email ID you provided. Kindly drop a mail to <a href='reachout@fundmyventure.co'>reachout@fundmyventure.co</a>.</center>";
document.getElementById("postsubmitaction").style.color = 'red';
 }
});
}

});
  function modalsubmit(){
      if(document.getElementById("modalemail").value=="")
    alert("Email field cannot be left empty");
  else if(document.getElementById("modalcontactnumber").value=="")
    alert("Contact field cannot be left empty.");

$.post('http://fundmyventure.co/server/modal_venture_signup.php', { 
  modalemail: document.getElementById("modalemail").value,
  modalcontactnumber:document.getElementById("modalcontactnumber").value//document.getElementById("password").value
}) 
.done(function( data ) {

    if(data=="ok"){
        document.getElementById("modalstatus").innerHTML="Data submitted successfully. <br>Our team member will reach out to you to gather more information.";
         document.getElementById("modalstatus").style.color = 'green';
    }
        else
        {
            document.getElementById("modalstatus").innerHTML="Server under heavy load. <br> Please try again later or drop a mail to <a href='mailto:reachout@fundmyventure.co'>reachout@fundmyventure.co</a>.";
            document.getElementById("modalstatus").style.color = 'red';

        }
    
 });
 }

</script>

 <div class="modal fade" id="modalventure_signup" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
           <button type="button" class="close" data-dismiss="modal">x</button>

          <center><h4 class="modal-title">Need help with startup registration?</h4></center>
        </div>
        <div class="modal-body">
          
              <label for="modalemail">E-Mail</label>
              <p><input type="text" name="eid" id="modalemail" placeholder="Your mail address" autocomplete="off"></p>
              <label for="modalcontactnumber">Contact Number</label>
              <p><input type="text"  id="modalcontactnumber" name="password" placeholder="Your contact Number" autocomplete="off"></p>
              <div id="modalstatus"></div>
              <button id="modalsubmitbutton" class="btn btn-primary" onclick="modalsubmit()">Submit</button><br>
                
            
        </div>
        
      </div>
      
    </div>
  </div>
<?php require('footer.php'); ?>
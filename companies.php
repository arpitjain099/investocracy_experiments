<?php require('header.php'); ?>
<section class="mbr-box mbr-section mbr-section--relative mbr-section--fixed-size mbr-section--full-height mbr-section--bg-adapted mbr-parallax-background mbr-after-navbar" id="header1-73">
    <div class=" mbr-box__magnet--sm-padding mbr-box__magnet--center-left">


  
  

  


  

  

  
    <link rel="stylesheet" type="text/css" href="http://jsfiddle.net/css/result-light.css">
  

  

  <style type="text/css">
  .panel-title:hover {
     cursor: pointer;
}
    body { font-family:'Arial'; color:#646464; }    
  .continents-wrap { float:left; width:20%; margin:0 5% 0 0; padding:0; }   
  .flowers div { position:relative; }  
  </style>


<script type='text/javascript'>//<![CDATA[
$(function(){
                $('.flowers-wrap, .continents-wrap').delegate('input[type=checkbox]', 'change', function() {
          var $lis = $('.flowers> div'),
            $checked = $('input:checked');  
          if ($checked.length) {              
                        var selector = '';
                        $($checked).each(function(index, element){
              if(selector === '') {
                selector += "[data-category~='" + element.id + "']";                  
              } else {
                selector += ",[data-category~='" + element.id + "']";
              }
                        });                        
            $lis.hide(); 
                        console.log(selector);
            $('.flowers> div').hide().filter(selector).show();        
          } 
          else {
            $lis.show();
          }
        });
});//]]> 



</script>
<div class="container">  <div class="row">
  <div class="flowers-wrap">
            <div class="col-md-3">
                Filters



                <div class="panel-group">
    
    <div class="panel panel-default">
        <div class="panel-heading">
             <h4 class="panel-title"
                 data-toggle="collapse" 
                 data-target="#industryaccordion">
                 Industries ▼
             </h4>
        </div>
        <div id="industryaccordion" class="panel-collapse collapse">
            <div class="panel-body">
                 <form>
                                    <label style="font-size:12px;">
                        <input  type="checkbox" id="advertising"> Advertising & Marketing                      </label><br>
                    
                                      
                      <label style="font-size:12px;">
                        <input  type="checkbox" id="arts"> Arts, Fashion, & Media                      </label><br>
                    
                                      
                      <label style="font-size:12px;">
                        <input  type="checkbox" id="b2b"> Business to Business                      </label><br>
                    
                                      
                      <label style="font-size:12px;">
                        <input  type="checkbox" id="cleantech"> Cleantech                      </label><br>
                    
                                      
                      <label style="font-size:12px;">
                        <input  type="checkbox" id="construction"> Construction & Manufacturing                      </label><br>
                    
                                      
                      <label style="font-size:12px;">
                        <input  type="checkbox" id="consumerproducts"> Consumer Products                      </label><br>
                    
                                      
                      <label style="font-size:12px;">
                        <input  type="checkbox" id="energy"> Energy/Transport                      </label><br>
                    
                                      
                      <label style="font-size:12px;">
                        <input  type="checkbox" id="finance"> Finance                      </label><br>
                    
                                      
                      <label style="font-size:12px;">
                        <input  type="checkbox" id="fnb"> Food & Beverage                      </label><br>
                    
                                      
                      <label style="font-size:12px;">
                        <input  type="checkbox" id="healthcare"> Healthcare                      </label><br>
                    
                                      
                      <label style="font-size:12px;">
                        <input  type="checkbox" id="hospitality"> Hospitality                      </label><br>
                    
                                      
                      <label style="font-size:12px;">
                        <input  type="checkbox" id="internet"> Internet                      </label><br>
                    
                                      
                      <label style="font-size:12px;">
                        <input  type="checkbox" id="lifestyle"> Lifestyle                      </label><br>
                    
                                      
                      <label style="font-size:12px;">
                        <input  type="checkbox" id="mobileandgaming"> Mobile & Gaming                      </label><br>
                    
                                      
                      <label style="font-size:12px;">
                        <input  type="checkbox" id="realestate"> Real Estate                      </label><br>
                    
                                      
                      <label style="font-size:12px;">
                        <input  type="checkbox" id="technology"> Technology                      </label>
                </form>
              </div>
        </div>
    </div>
    
    <div class="panel panel-default">
        <div class="panel-heading">
             <h4 class="panel-title"
                 data-toggle="collapse" 
                 href="#stageaccordion">
                 Stage ▼
             </h4>
        </div>
        <div id="stageaccordion" class="panel-collapse collapse">
            <div class="panel-body">
                 <form>
                  <label style="font-size:12px;">
                          <input  type="checkbox" id="preseed"> Pre-seed                        </label><br>
                      
                                          
                        <label style="font-size:12px;">
                          <input  type="checkbox" id="seed"> Seed                        </label><br>
                      
                                          
                        <label style="font-size:12px;">
                          <input  type="checkbox" id="preseriesa"> Pre Series A                        </label><br>
                      
                                          
                        <label style="font-size:12px;">
                          <input  type="checkbox" id="seriesa"> Series A                        </label><br>
                      
                                          
                        <label style="font-size:12px;">
                          <input  type="checkbox" id="preseriesb"> Pre Series B                        </label><br>
                      
                                          
                        <label style="font-size:12px;">
                          <input  type="checkbox" id="seriesb"> Series B                        </label><br>
                      
                                          
                        <label style="font-size:12px;">
                          <input  type="checkbox" id="preseriesc"> Pre Series C                        </label><br>
                      
                                          
                        <label style="font-size:12px;">
                          <input  type="checkbox" id="seriesc"> Series C                        </label><br>
                      
                                          
                        <label style="font-size:12px;">
                          <input  type="checkbox" id="preseriesd"> Pre Series D                        </label><br>
                      
                                          
                        <label style="font-size:12px;">
                          <input  type="checkbox" id="seriesd"> Series D                        </label><br>
                      
                                          
                        <label style="font-size:12px;">
                          <input  type="checkbox" id="other"> Other                        </label><br>
                      
               
                </form>  </div>
        </div>
    </div>
    
    <div class="panel panel-default">
        <div class="panel-heading">
             <h4 class="panel-title"
                 data-toggle="collapse" 
                 href="#sizeaccordion">
                 Size ▼
             </h4>
        </div>
        <div id="sizeaccordion" class="panel-collapse collapse">
            <div class="panel-body">
                <form>
                  <label style="font-size:12px;"><input type="checkbox" id="tiny"/> Tiny (0-10 employees)</label><br>
                    <label style="font-size:12px;"><input type="checkbox" id="small"/> Small (10-50 employees)</label><br>
                    <label style="font-size:12px;"><input type="checkbox" id="medium"/> Medium(50-200 employees)</label><br>                  
                    <label style="font-size:12px;"><input type="checkbox" id="large"/> Large (200-500 employees)</label><br>
                    <label style="font-size:12px;"><input type="checkbox" id="giant"/> Giant (500+ employees)</label>
                </form>
            </div>
        </div>
    </div>
     
   
     <div class="panel panel-default">
        <div class="panel-heading">
             <h4 class="panel-title"
                 data-toggle="collapse" 
                 data-target="#locationaccordion">
                 Location ▼
             </h4>
        </div>
        <div id="locationaccordion" class="panel-collapse collapse">
            <div class="panel-body">
               <form>
                  <label style="font-size:12px;"><input type="checkbox" id="ncr"/> NCR</label><br>
                    <label style="font-size:12px;"><input type="checkbox" id="bangalore"/> Bangalore </label><br>
                    <label style="font-size:12px;"><input type="checkbox" id="chennai"/> Chennai</label><br>                  
                    <label style="font-size:12px;"><input type="checkbox" id="mumbai"/> Mumbai</label><br>
                    <label style="font-size:12px;"><input type="checkbox" id="indore"/> Indore</label><br>
                      <label style="font-size:12px;"><input type="checkbox" id="jaipur"/> Jaipur</label><br>
                         <label style="font-size:12px;"><input type="checkbox" id="trivandrum"/> Trivandrum</label><br>
                         <label style="font-size:12px;"><input type="checkbox" id="restofindia"/> Rest of India</label>
                </form>  </div>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
             <h4 class="panel-title"
                 data-toggle="collapse" 
                 data-target="#askaccordion">
                 Ask ▼
             </h4>
        </div>
        <div id="askaccordion" class="panel-collapse collapse">
            <div class="panel-body">
               <form>
                  <label style="font-size:12px;"><input type="checkbox" id="5l"/> 0-5 L</label><br>
                    <label style="font-size:12px;"><input type="checkbox" id="10l"/>5-10L </label><br>
                    <label style="font-size:12px;"><input type="checkbox" id="50l"/> 10-50L</label><br>                  
                    <label style="font-size:12px;"><input type="checkbox" id="250l"/> 50L - 250L</label><br>
                    <label style="font-size:12px;"><input type="checkbox" id="500l"/>250L - 500L</label><br>
                      <label style="font-size:12px;"><input type="checkbox" id="600l"/>500L +</label>
                </form> 
              </div>
        </div>
    </div>
    </div>
  </div>
	<div class="col-md-9">
			 <div class="flowers">
        <div class="col-md-4 flower" data-id="aloe" data-category="advertising ncr seed">
          <div class="thumbnail">
            <img src="http://placehold.it/500x250/EEE">
              <div class="caption">
                <h4>Company name</h4>
                <p>Brief description of what you do. Brief description of what you do. Brief description of what you do. Brief description of what you do. Brief description of what you do. </p>
               <a href="companypage" class="btn btn-info btn-xs" role="button">View offering</a> 
            </div>
          </div>
        </div>
        <div class="col-md-4 flower" data-id="aloe" data-category="bangalore seriesa tiny cleantech">
          <div class="thumbnail">
            <img src="http://placehold.it/500x250/EEE">
              <div class="caption">
                <h4>Company name</h4>
                <p>Brief description of what you do. Brief description of what you do. Brief description of what you do. Brief description of what you do. Brief description of what you do. </p>
               <a href="companypage" class="btn btn-info btn-xs" role="button">View offering</a>
            </div>
          </div>
        </div>

        <div class="col-md-4 flower" data-id="aloe" data-category="large seriesb finance">
          <div class="thumbnail">
            <img src="http://placehold.it/500x250/EEE">
              <div class="caption">
                <h4>Company name</h4>
                <p>Brief description of what you do. Brief description of what you do. Brief description of what you do. Brief description of what you do. Brief description of what you do. </p>
                 <a href="companypage" class="btn btn-info btn-xs" role="button">View offering</a> 
            </div>
          </div>
        </div>

         <div class="col-md-4 flower" data-id="aloe" data-category="giant seriesc realestate ">
          <div class="thumbnail">
            <img src="http://placehold.it/500x250/EEE">
              <div class="caption">
                <h4>Company name</h4>
                <p>Brief description of what you do. Brief description of what you do. Brief description of what you do. Brief description of what you do. Brief description of what you do. </p>
                 <a href="companypage" class="btn btn-info btn-xs" role="button">View offering</a> 
            </div>
          </div>
        </div>
		
		<div class="col-md-4 flower" data-id="aloe" data-category="giant seriesc realestate ">
          <div class="thumbnail">
            <img src="http://placehold.it/500x250/EEE">
              <div class="caption">
                <h4>Company name</h4>
                <p>Brief description of what you do. Brief description of what you do. Brief description of what you do. Brief description of what you do. Brief description of what you do. </p>
                 <a href="companypage" class="btn btn-info btn-xs" role="button">View offering</a> 
            </div>
          </div>
        </div>
		
		<div class="col-md-4 flower" data-id="aloe" data-category="giant seriesc realestate ">
          <div class="thumbnail">
            <img src="http://placehold.it/500x250/EEE">
              <div class="caption">
                <h4>Company name</h4>
                <p>Brief description of what you do. Brief description of what you do. Brief description of what you do. Brief description of what you do. Brief description of what you do. </p>
                 <a href="companypage" class="btn btn-info btn-xs" role="button">View offering</a> 
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
<?php require('footer.php'); ?>
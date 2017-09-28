<!DOCTYPE html>
<html>
<?php require('header.php'); ?>
<head>
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
    width: 42%;
    }

    .thumbnailimage {
       width: 64px;
       height: 64px;
       border-radius: 64px;
    }
    .companyscrollelement {
       width: 100%;
    }
    </style>
    <title></title>
</head>
<body onscroll="roll()">
    <div class="modal fade" id="showinterestmodal" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button class="close" data-dismiss="modal" type="button">&times;</button>
                    <h4 class="modal-title">Thank you for your interest in ABC Private Limited.</h4>
                </div>
                <div class="modal-body">
                    You have requested access to Confidential Documents. The company will contact you if your request gets approved. In order to help prioritize your access request, please enter the maximum amount you are likely to invest.<br>
                    <b>This is a non-binding indication of interest.</b><br>
                    <br>
                    <div class="form-group c2 required" data-cid="c2"><label class="control-label" for="c2">Minimum Commitment Amount</label>
                    <div class="input-group">
                        <span class="input-group-addon left"><i class="glyphicon glyphicon-tower"></i></span> <input class="form-control" data-rule-email="true" data-rule-required="true" id="c2" name="c2" type="email" value="">
                    </div>
                    <div class="form-group c150" data-cid="c150">
                        <label class="control-label" for="c150">LinkedIn URL</label>
                        <div class="input-group">
                            <span class="input-group-addon left"><i class="fa fa-linkedin"></i></span> <input class="form-control" id="c150" name="c150" placeholder="Please leave this empty if you provided your LinkedIn URL at the time of Signup." type="text" value="">
                        </div>
                    </div>
                    <div class="form-group c28 required" data-cid="c28">
                        <label class="control-label" for="c28">Additional Comments (Optional)</label>
                        <div class="input-group">
                            <span class="input-group-addon left"><i class="glyphicon glyphicon-comment"></i></span> <input class="form-control" data-rule-required="true" id="c28" name="c28" type="textarea" value="">
                        </div>
                    </div>
                    <div id="showinterestresponse"></div>
                    <center>
                        <button class="btn btn-primary btn-lg" id="submitbuttonid" style="z-index: 1;">Submit</button>
                    </center><img alt="Investment pitch process" src="investor_investment_diagram.svg" width="100%"></div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
    function showinterest(){
       $("#showinterestmodal").modal();
    }
    </script>
    <section class="mbr-box mbr-section mbr-section--relative mbr-section--fixed-size mbr-section--full-height mbr-section--bg-adapted mbr-parallax-background mbr-after-navbar" id="header1-73">
        <div class="mbr-box__magnet mbr-box__magnet--md-padding mbr-box__magnet--center-left">
            <div class="mbr-overlay" style="opacity: 0.6; background-color: rgb(76, 105, 114);"></div>
            <div class="mbr-box__container mbr-section__container container">
                <div class="mbr-box mbr-box--stretched">
                    <div class="mbr-box__magnet mbr-box__magnet--center-left">
                        <div class="row">
                            <div class=" col-md-6">
                                <div class="mbr-hero animated fadeInUp">
                                    <h1 class="mbr-hero__text">Company name</h1>
                                    <p class="mbr-hero__subtext">Tagline<br></p>
                                    <p class="mbr-hero__subtext">Explain your business here as briefly as possible!<br></p>
                                    <p class="mbr-hero__subtext">Put your key offering here. Again, put your key offering here!<br></p>
                                </div>
                                <div class="mbr-buttons btn-inverse mbr-buttons--left">
                                    <a class="mbr-buttons__btn btn btn-lg animated fadeInUp delay btn-warning" onclick="showinterest()">Interested</a> <a class="mbr-buttons__btn btn btn-lg btn-default animated fadeInUp delay" onclick="bookmarkforlater()">Bookmark for later</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mbr-arrow mbr-arrow--floating text-center">
                <div class="mbr-section__container container">
                    <a class="mbr-arrow__link" href="#companydetails"><i class="glyphicon glyphicon-menu-down"></i></a>
                </div>
            </div>
        </div>
    </section>
    <section class="content-2 col-4" id="companydetails" style="background-color: rgb(255, 255, 255);">
        <div class="container">
            <div class="row">
                <div>
                    <div class="thumbnail">
                        <div class="image"><img class="undefined" src="assets/images/fmv.png"></div>
                        <div class="caption">
                            <div>
                                <!--
                            <h3>Deal expires in X days</h3>
                             <div id="progress">
                                <div class="col-md-12">
                                    <span id="percent">42%</span>
                                </div>
                                <div id="bar"></div>
                            </div>
                            <span>Company Name is raising Rs. 5,00,000 with a minimum reservation of Rs. 20,000. Numbers displayed include non-binding reservations before investors are verified, signed, or closed.</span>
                        -->
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="thumbnail">
                        <div class="caption">
                            <div>
                                <h3>Name of company</h3><br>
                                <h3>Brief description about what does your company do.</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="thumbnail">
                        <div class="caption">
                            <div>
                                <h3>Tags</h3>Virtual Reality, Artifical Reality, Intelligent Systems.<br>
                                <br>
                                <h3>Location</h3>Bangalore, Karnataka, India
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
    <section class="mbr-box mbr-section mbr-section--relative mbr-section--fixed-size mbr-section--full-height mbr-section--bg-adapted mbr-parallax-background" id="parent" style="padding-bottom: 50px; position:relative">
        <div class="mbr-box__magnet mbr-box__magnet--md-padding mbr-box__magnet--center-left">
            <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(41, 105, 176);"></div>
            <div class="mbr-box__container mbr-section__container container">
                <div class=" col-md-12" style="padding-top: 50px;">
                    <div class="col-md-3">
                        <ul class="nav nav-tabs" id="child" style="width: min-content;">
                            <li class="companyscrollelement">
                                <a href="#team">Team</a>
                            </li>
                            <li class="companyscrollelement">
                                <a href="#pitchvideo">Pitch Video</a>
                            </li>
                            <li class="companyscrollelement">
                                <a href="#presentation">Company Slide Deck</a>
                            </li>
                            <li class="companyscrollelement">
                                <a href="#investmentdetails">Investment Details</a>
                            </li>
                            <li class="companyscrollelement">
                                <a href="#highlights">Highlights</a>
                            </li>
                            <li class="companyscrollelement">
                                <a href="#testimonials">Testimonials</a>
                            </li>
                            <li class="companyscrollelement">
                                <a href="#elevatorpitch">Elevator Pitch</a>
                            </li>
                            <li class="companyscrollelement">
                                <a href="#traction">Traction</a>
                            </li>
                            <li class="companyscrollelement">
                                <a href="#supplementarydata">Supplementary Data</a>
                            </li>
                            <li class="companyscrollelement">
                                <a href="#existing_investors">Investors</a>
                            </li>
                            <li class="companyscrollelement">
                                <a href="#documents">Documents</a>
                            </li>
                            <li class="companyscrollelement">
                                <a href="#market">Market</a>
                            </li>
                            <li class="companyscrollelement">
                                <a href="#competition">Competition</a>
                            </li>
                            <li class="companyscrollelement">
                                <a href="#qna">Q & A forum</a>
                            </li>
                            <li class="companyscrollelement">
                                <a href="#kpi">Key Performance Indicators</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-9">
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane active" id="team">
                                <div class="table-responsive">
                                    <h2>Team</h2>
                                    <table class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>
                                                    <center>
                                                        Leadership
                                                    </center>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <table>
                                                        <tr>
                                                            <td><img class="thumbnailimage" src="assets/images/Apple%20logo%20icon%20-%20Aluminum.png"></td>
                                                            <td>
                                                                <table>
                                                                    <tr>
                                                                        <td>Rockstar 1</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>CEO</td>
                                                                    </tr>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                    </table>My credentials. My credentials. My credentials. My credentials. My credentials. My credentials. My credentials. My credentials.
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <table>
                                                        <tr>
                                                            <td><img class="thumbnailimage" src="assets/images/Apple%20logo%20icon%20-%20Aluminum.png"></td>
                                                            <td>
                                                                <table>
                                                                    <tr>
                                                                        <td>Rockstar 2</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>CTO</td>
                                                                    </tr>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                    </table>My credentials. My credentials. My credentials. My credentials. My credentials. My credentials. My credentials. My credentials.
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>
                                                    <center>
                                                        Advisors
                                                    </center>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <table>
                                                        <tr>
                                                            <td><img class="thumbnailimage" src="assets/images/Apple%20logo%20icon%20-%20Aluminum.png"></td>
                                                            <td>
                                                                <table>
                                                                    <tr>
                                                                        <td>Awesome person 1</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Owner, Lannister Exports</td>
                                                                    </tr>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                    </table>My credentials. My credentials. My credentials. My credentials. My credentials. My credentials. My credentials. My credentials.
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <table>
                                                        <tr>
                                                            <td><img class="thumbnailimage" src="assets/images/Apple%20logo%20icon%20-%20Aluminum.png"></td>
                                                            <td>
                                                                <table>
                                                                    <tr>
                                                                        <td>Awesome person 2</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Partner, Gryffindor Tech</td>
                                                                    </tr>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                    </table>My credentials. My credentials. My credentials. My credentials. My credentials. My credentials. My credentials. My credentials.
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <hr>
                            <div id="pitchvideo">
                                <h2>Pitch Video</h2><iframe allowfullscreen frameborder="0" height="315" src="https://www.youtube.com/embed/UmdFkCBg4VY?rel=0" width="560"></iframe>
                            </div>
                            <hr>
                            <div id="presentation">
                                <h2>Pitch Presentation</h2><iframe allowfullscreen frameborder="0" height="315" marginheight="0" marginwidth="0" scrolling="no" src="//www.slideshare.net/slideshow/embed_code/key/HlffpWO9MWg5NQ" style="border:1px solid #CCC; border-width:1px; margin-bottom:5px; max-width: 100%;" width="560"></iframe>
                            </div>
                            <hr>
                            <div id="investmentdetails">
                                <h2>Raise Details</h2>Deal Stage Seed
                                <table>
                                    <tr>
                                        <td>Funding Goal</td>
                                        <td>Rs. 500,000</td>
                                    </tr>
                                    <tr>
                                        <td>Current Reservations</td>
                                        <td>Rs. 300,500</td>
                                    </tr>
                                    <tr>
                                        <td>Current Converted/In-process Reservations</td>
                                        <td>Rs. 12,000</td>
                                    </tr>
                                    <tr>
                                        <td>Minimum Reservation</td>
                                        <td>Rs. 20,000</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Interest (% per year)</td>
                                        <td>2.00%</td>
                                    </tr>
                                    <tr>
                                        <td>Term Length</td>
                                        <td>12 months</td>
                                    </tr>
                                    <tr>
                                        <td>Valuation Cap</td>
                                        <td>Rs. 8,500,000</td>
                                    </tr>
                                    <tr>
                                        <td>Open Date</td>
                                        <td>09/01/2016</td>
                                    </tr>
                                    <tr>
                                        <td>Closing Date</td>
                                        <td>11/30/2016</td>
                                    </tr>
                                </table>
                            </div>
                            <hr>
                            <div id="testimonials">
                                <h2>Testimonials</h2>
                                <div class="col-md-6">
                                    <div class="thumbnail flower" data-category="green large medium africa">
                                        <img src="http://placehold.it/500x250/EEE">
                                        <div class="caption">
                                            <h4>User 1</h4>
                                            <p>I love Company name because of its awesome service</p><!--<p class="btn btn-info btn-xs">Early investor in Uber</p>-->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="thumbnail flower" data-category="green large medium africa">
                                        <img src="http://placehold.it/500x250/EEE">
                                        <div class="caption">
                                            <h4>500 Startups</h4>
                                            <p>One of my best incubatee company! The leadership team is very professional!</p><!--<p class="btn btn-info btn-xs">Early stage incubator</p>-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div id="highlights">
                                <h2>Key highlights</h2>- 42% MoM Average Revenue Growth<br>
                                <br>
                                - Top 3 investors: Mohandas Pai, Narayana Murthy, 500 Startups<br>
                                <br>
                                - Dropped customer acquisition cost from Rs. 100.1 (May) to Rs. 24.1 (August)
                            </div>
                            <div id="elevatorpitch">
                                <h2>Elevator Pitch</h2>Order any ethnic cuisine and have it delivered in less than 15 minutes.
                            </div>
                            <hr>
                            <div id="traction">
                                <h2>Traction</h2><i class="glyphicon glyphicon-cup"></i> August annualized revenue is 705,000, SEPTEMBER, 2015<br>
                                <i class="glyphicon glyphicon-cup"></i> August annualized revenue is 405,000, SEPTEMBER, 2014<br>
                                <i class="glyphicon glyphicon-cup"></i> August annualized revenue is 205,000, SEPTEMBER, 2013<br>
                                <i class="glyphicon glyphicon-cup"></i> August annualized revenue is 105,000, SEPTEMBER, 2012<br>
                            </div>
                            <hr>
                            <div id="supplementarydata">
                                <h2>Supplementary Data</h2><iframe allowfullscreen frameborder="0" height="315" src="https://www.youtube.com/embed/Pb8LT7uyzrc?rel=0" width="560"></iframe> <iframe allowfullscreen frameborder="0" height="315" src="https://www.youtube.com/embed/28utrRprjzw?rel=0" width="560"></iframe>
                            </div>
                            <hr>
                            <div id="existing_investors">
                                <h2>Existing Investors</h2>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="thumbnail flower" data-category="green large medium africa">
                                            <img src="http://placehold.it/500x250/EEE">
                                            <div class="caption">
                                                <h4>Investor 1</h4>
                                                <p>Investor 1 had a very successful exit from this startup and also that startup.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="thumbnail flower" data-category="green yellow large antarctica">
                                            <img src="http://placehold.it/500x250/EEE">
                                            <div class="caption">
                                                <h4>Investor 2</h4>
                                                <p>Investor 2 has invested in this company, that company and also that company.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div id="documents">
                                <h2>Financial Documents</h2>Click <a onclick="showinterest()">here</a> to express your interest in Company Name.
                            </div>
                            <hr>
                            <div id="market">
                                <h2>Market</h2>The market for Company name is new and untapped. Company name offers a unique value proposition where they have the first movers advantage.
                            </div>
                            <hr>
                            <div id="competition">
                                <h2>Competitors</h2>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="thumbnail flower" data-category="green large medium africa">
                                            <img src="http://placehold.it/500x250/EEE">
                                            <div class="caption">
                                                <h4>Company 1</h4>
                                                <p>Company 1 is a very big global player with a possibility to enter Indian market.</p><!--<a href="#" class="btn btn-info btn-xs" role="button">Website</a> -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="thumbnail flower" data-category="green yellow large antarctica">
                                            <img src="http://placehold.it/500x250/EEE">
                                            <div class="caption">
                                                <h4>Company 2</h4>
                                                <p>Company 2 (backed by Company 3) might enter this market in the next 2 years.</p><!--<a href="#" class="btn btn-info btn-xs" role="button">Website</a><-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div id="qna">
                                <h2>Questions and Answers Forum</h2>Have a question of your own? Drop in a mail to <a href="mailto:reachout@fundmyventure.co">reachout@fundmyventure.co</a> with Company Name as subject line and we will ask the company founders to respond to the question.<br>
                                <br>
                                Q1. What are your plans for using the funds raised?<br>
                                A1. We plan to use the money to hire employees (2 programmers, 3 private equity analysts, set up office space)<br>
                                <br>
                                Q2. Do you have plans to raise further rounds?<br>
                                A2. Lets see!<br>
                            </div>
                            <div id="kpi">
                                <h2>Key Performance Indicators for Company Name</h2>Traction<br>
                                Number of X units consumed (daily)<br>
                                Number of Y units consumed (daily)<br>
                                Number of Z units consumed (daily)<br>
                                Number of A units produced (daily)<br>
                                Number of B units produced (daily)<br>
                                Number of C units produced (daily)
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="mbr-section mbr-section--relative mbr-section--fixed-size" id="form1-89" style="background-color: rgb(0, 168, 133);">
        <center>
            <h1>Announcements</h1>
        </center>
        <div class="mbr-section__container mbr-section__container container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2" data-form-type="formoid">
                            <center>
                                03-03-2016: <a href="#">Hangout</a> with Mr. ABC, CEO, Company Name
                            </center><br>
                            <center>
                                01-03-2016: <a href="#">Hangout</a> with Mr. XYZ, Principal Advisor, Company Name
                            </center><br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--
<section class="mbr-section mbr-section==relative mbr-section==fixed-size" id="form1-89" style="background-color: rgb(255, 255, 255);">
    
    <div class="mbr-section__container mbr-section__container==std-padding container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2" data-form-type="formoid">
                        <div class="mbr-header mbr-header==center mbr-header==std-padding">
                            <h2 class="mbr-header__text">Disclaimer</h2>
                        </div>
                        Disclaimer content. Disclaimer content. Disclaimer content. Disclaimer content. Disclaimer content. Disclaimer content. Disclaimer content. Disclaimer content. Disclaimer content. Disclaimer content. Disclaimer content. Disclaimer content. Disclaimer content. <br><br>Disclaimer content. Disclaimer content. Disclaimer content. Disclaimer content. Disclaimer content. Disclaimer content. Disclaimer content. <br><br>Disclaimer content. Disclaimer content. Disclaimer content. 
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
-->
    <script src="http://rawgit.com/customd/jquery-visible/master/jquery.visible.js">
    </script> 
    <script type="text/javascript">
    function bookmarkforlater() {

    $.post("http://fundmyventure.co/server/bookmarkforlater.php", {
            username: localStorage.getItem("username"),
            companyname: "Company1"
        })
        .done(function(data) {
            //console.log(data);
            alert(data);

        });
    }

    $("#submitbuttonid").click(function() {
        if (document.getElementById("c2").value == "")
            alert("Please enter the minimum commitment amount.");

        $.post("http://fundmyventure.co/server/showinterest.php", {
                username: localStorage.getItem("username"),
                value: document.getElementById("c2").value,
                comments: document.getElementById("c28").value,
                linkedin: document.getElementById("c150").value,
                companyname: "Company1"
            })
            .done(function(data) {
                console.log(data);
                document.getElementById("showinterestresponse").innerHTML = "<center>".concat(data).concat("<\/center>");
                document.getElementById("showinterestresponse").style.color = 'green';
            });
    });

    function roll() {
        console.log($('#child').offset().top - $(window).scrollTop())
        if (($('#child').offset().top - $(window).scrollTop()) < 100 && $('#parent').visible()) {
            console.log("i am here")
            $("#child").css({
                top: document.getElementById('headerid').offsetHeight,
                position: 'fixed'
            });
        } else {
            $("#child").css({
                position: 'relative'
            });
        }
    }

    </script> 
    <?php require('footer.php'); ?>
</body>
</html>
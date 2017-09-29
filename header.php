<?php session_start(); ?>

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="generator" content="FundMyVenture.co">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="assets/images/fmv.png" type="image/x-icon">
        <meta name="description" content="Making Angel Investments Easy. For Everyone.">
        <title>FundMyVenture | Angel Investing | #StartupIndia</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:700,400&amp;subset=cyrillic,latin,greek,vietnamese">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/animate.css/animate.min.css">
        <link rel="stylesheet" href="assets/socicon/css/socicon.min.css">
        <link rel="stylesheet" href="assets/fundmyventure/css/style.css">
        <link rel="stylesheet" href="assets/fundmyventure-slider/style.css">
        <link rel="stylesheet" href="assets/fundmyventure-gallery/style.css">
        <link rel="stylesheet" href="assets/fundmyventure/css/mbr-additional.css" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

        <script>
            (function(i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function() {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                    m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

            ga('create', 'UA-73144013-1', 'auto');
            ga('send', 'pageview');
        </script>
        <?php header( "Cache-Control: no-store, no-cache, must-revalidate, max-age=0"); header( "Cache-Control: post-check=0, pre-check=0", false); header( "Pragma: no-cache"); ?>
            <style type="text/css">
                div.polaroid {
                    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
                    text-align: center;
                }
            </style>

    </head>

    <div class="modal fade" id="loginmodal" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">x</button>

                    <center>
                        <h4 class="modal-title">Login/Signup</h4>
                    </center>
                </div>
                <div class="modal-body">
                    <label for="email">E-Mail</label>
                    <p>
                        <input type="text" name="eid" id="email" placeholder="Enter the mail address you used to register. " autocomplete="off">
                    </p>
                    <label for="password">Password</label>
                    <p>
                        <input type="password" id="password" name="password" placeholder="Password" autocomplete="off">
                    </p>
                    <div id="status"></div>
                    <button id="loginsubmit" class="btn btn-primary" onclick="login()">Sign in</button>
                    <br>
                    <p>
                        <a data-toggle="modal" href="#forgotpassword">Forgot Password?</a>
                    </p>
                </div>
                <div class="modal-footer">
                    New To FundMyVenture?
                    <a data-toggle="modal" href="#usersignupmodal" class="btn btn-default">Register</a>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="usersignupmodal" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">x</button>

                    <center>
                        <h4 class="modal-title">Create Your Account</h4>
                    </center>
                </div>
                <div class="modal-body">
                    <center>
                        <h5 class="font-bold m-b-32">
         Select a Profile Type
        </h5>
                    </center>
                    <form autocomplete="off">
                        <div class="row">

                            <center>
                                <div class="col-md-6 ">
                                    <a href="investor_signup">

                                        <center>
                                            <h4 class="m-b-16">
                  Investor
                </h4>
                                        </center>

                                        <p class="m-b-24" style="min-height:60px;">
                                            Includes Angels, VC's, Incubators and Accelerators
                                        </p>

                                    </a>
                                </div>
                                <div class="col-md-1"></div>
                                <div class="col-md-6  ">
                                    <a href="venture_signup">
                                        <center>
                                            <h4 class="m-b-16">
                  Startup
                </h4>
                                        </center>
                                        <p class="m-b-24" style="min-height:60px;">
                                            Create a startup profile to privately share data with potential investors
                                        </p>
                                    </a>
                                </div>
                            </center>
                        </div>
                    </form>

                    <div class="disclaimer">
                        <small>

              By creating your account, you agree to our 
                          <a href="/about/tos/">
                Terms
              </a>,
                          <a href="/about/privacy/">
                Privacy
              </a>
                          &amp;
                          <a href="/about/nda/">Data NDA</a>
                      </small>
                    </div>

                </div>

            </div>
        </div>
    </div>

    <div class="modal fade" id="forgotpassword" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">x</button>

                    <center>
                        <h4 class="modal-title">Recover your account password</h4>
                    </center>
                </div>
                <div class="modal-body">
                    <label for="email">E-mail</label>
                    <p>
                        <input type="text" name="eid" id="reset_email" placeholder="Enter the mail address you used to register. " autocomplete="off">
                    </p>
                    <div id="forgotpasswordstatus"></div>
                    <button id="loginsubmit" class="btn btn-primary" onclick="resetpassword()">Send reset password link</button>
                    <br>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="windowloadmodal" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <center>
                        <h4 class="modal-title">We are currently in Public Beta!</h4>
                    </center>
                </div>
                <div class="modal-body">
                    <p>We are working on building on a next-gen service for bridge the gap between startups / SME's and individual investors. We are currently working to improve our platform and have opened up this website to give everyone a sneak peek for investments of the future.
                        <br>
                        <br> We appreciate your interest and promise to deliver a first version of the platform by 20th February.

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    </div>

    <div class="modal fade" id="createacampaign" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <center>
                        <h4 class="modal-title">Investors, you can start a fundraise for your business dream too!</h4>
                    </center>
                </div>
                <div class="modal-body">
                    Have a startup of your own? <a href="venture_signup">Signup</a> for free to begin fundraise for your company.
                    <br>
                    <br> FundMyVenture's vision is to enable people realize their dreams with the support of people around them. Start a campaign, if you feel that you have a business idea which has the potential to be raised by local community around you. The advantages with such campaigns include
                    <ul>
                        <li>People are much more open to promoting projects close to them, as they can keep a better check on the project's progress.</li>
                        <li>You can connect with people around you who believe in your idea. Even if they don't invest money in your endeavour, they become strong advocates of your cause, thereby maximizing your reach.</li>
                        <li>Community support also helps tackle minor obstacles like getting local clearances and other smaller expenses.</li>
                        <li>Capture the true 'worth' of your idea by directly reaching out to people for whom the service/product is intended.</li>
                    </ul>

                    Campaigns are different from startup fundraise as campaigns are focused on connecting businesses which are currently in idea stage, and require necessary local funds and support. FundMyVenture is different from platforms like <a href="http://kickstarter.com" target="_blank">Kickstarter</a> as we focus on solid business ideas where investors can contribute effort, mentorship as well as financial assistance to help you set up the business.
                    <br>
                    <br>Some example campaigns include
                    <br>
                    <img class="col-md-2" width="10%" src="assets/images/doctor.png" />
                </div> Praveen is a MBBS, MS opthalmology from AIIMS, New Delhi. He wants to set up a specialty eye hospital on the outskirts of his hometown Agra along with two of his medico friends. The total cost involved (along with the machines) is about INR 2 crore. He also seeks support from influential people in Agra so that he can focus on running the hospital. Praveen comes to FundMyVenture and creates his campaign giving expense breakup, projected cash flow cycles, time for the investment to pay off, and profit margins. People around Agra who understand the value behind Praveen's venture invest both time and money to help set up the hospital.
                <br>
                <br>
                <img class="col-md-2" width="10%" src="assets/images/graduate.png" />
            </div> Raj is a teacher from Kendriya Vidyalaya School, Lucknow. He has been teaching students for the past 25 years and has good understanding about running a school, curriculum and other aspects. Raj wants to set up a school for girls around his locality in Lucknow. He seeks INR 50L as starting capital along with 5 people as support staff. Raj puts his vision about the school on FundMyVenture and is able to raise 39L. The amount, though, is less than what Raj originally expected to raise but is sufficient for him to begin.
            <br>
            <br>
            </center>

        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
    </div>
    </div>
    </div>

    <div class="modal fade" id="joinus" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <center>
                        <h4 class="modal-title">Openings with FundMyVenture.co</h4>
                    </center>
                </div>
                <div class="modal-body">
                    <p>We are working on building on a next-gen service to bridge the gap between startups / SME's and individual investors. We are currently a very small team and look forward to hearing back from people with diverse backgrounds.
                        <br>
                        <br>Please reach out to us if you:
                        <ul>
                            <li>Have an active interest in Private Equity Investments (or a very strong desire to learn about it).</li>

                            <li>Have a background with the working of debt instruments.</li>

                            <li>Belive in being brutally honest towards your work and the people you do deal with.</li>

                            <li>Are willing to put in good amount of hard work for practically little pay (we are a completely <a href="http://www.investopedia.com/terms/b/bootstrap.asp" target="_blank">bootstrapped company</a> ). </li>
                        </ul>
                        As our team size is small, we can also discuss about equity partnership depending upon your expertise, skills and experience.
                        <br>
                        <br> You can find our openings <a href="https://medium.com/fund-my-venture/fundmyventure-current-openings-485885479aec#.o6n5ml8g1" target="_blank">here</a>. We have a slight preference towards people who are currently based out of Bangalore or are willing to relocate. We have <strong>no bias</strong> towards CPI (Cumulative Performance Index) or your current work position. If working with private equity solutions excite you, we should have an opening for you.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="announcement" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <center>
                        <h4 class="modal-title">Did you know?</h4>
                    </center>
                </div>
                <div class="modal-body">
                    We will be working on a not-for-profit model for first 5 deals closed by our platform.
                    <br>
                    <br>We understand that we are new to the market, and will take time to establish ourselves in the market. But don't worry, this doesn't undermine our understanding of the market in any way and we will still work in the most diligent way possible to make your fundraise as smooth as possible!
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <body>

        <section class="mbr-navbar mbr-navbar--freeze mbr-navbar--relative mbr-navbar--sticky mbr-navbar--auto-collapse" id="menu-20">
            <div class="mbr-navbar__section mbr-section" id="headerid">
                <div class="mbr-section__container container">
                    <div class="mbr-navbar__container">
                        <div class="mbr-navbar__column mbr-navbar__column--s mbr-navbar__brand">
                            <span class="mbr-navbar__brand-link mbr-brand mbr-brand--inline">
                        <span class="mbr-brand__logo"><a href="index"><img class="mbr-navbar__brand-img mbr-brand__img" src="assets/images/fmv.png" alt="FundMyVenture"></a></span>
                            <span class="mbr-brand__name"><a class="mbr-brand__name text-white" href="index">FundMyVenture</a></span>
                            </span>
                        </div>
                        <div class="mbr-navbar__hamburger mbr-hamburger text-white"><span class="mbr-hamburger__line"></span>
                        </div>
                        <div class="mbr-navbar__column mbr-navbar__menu">
                            <nav class="mbr-navbar__menu-box mbr-navbar__menu-box--inline-right">
                                <div class="mbr-navbar__column">
                                    <ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-decorator mbr-buttons--active" id="navigation">
                                        <li class="mbr-navbar__item"><a class="mbr-buttons__link btn text-white" href="investors" id="investornav">Investors</a>
                                        </li>
                                        <li class="mbr-navbar__item"><a class="mbr-buttons__link btn text-white" href="businesses" id="businessnav">Businesses</a>
                                        </li>
                                        <li class="mbr-navbar__item"><a class="mbr-buttons__link btn text-white" href="about" id="aboutnav">About</a>
                                        </li>
                                        <li class="mbr-navbar__item"><a class="mbr-buttons__link btn text-white" href="https://medium.com/fund-my-venture" target="_blank" id="learn">Learn</a>
                                        </li>
                                        <li class="mbr-navbar__item"><a class="mbr-buttons__link btn text-white" href="companies" id="browsecompanies" style="display:none">Browse Companies</a>
                                        </li>
                                        <li class="mbr-navbar__item"><a class="mbr-buttons__link btn text-white" href="companypage" id="liveexample" style="display:none">Live example</a>
                                        </li>
                                        <!--<li class="mbr-navbar__item"><a class="mbr-buttons__link btn text-white" href="#contact" id="contactnav">Contact</a></li>-->
                                        <li class="mbr-navbar__item"><a class="mbr-buttons__link btn text-white" href="start-a-campaign" id="getfunded" style="display:none">Get Funded</a>
                                        </li>
                                        <li class="mbr-navbar__item" id="dropdownvalues">
                                            <script>
                                                $("#email").keyup(function(event) {
                                                    if (event.keyCode == 13) {
                                                        login();
                                                    }
                                                });
                                                $("#password").keyup(function(event) {
                                                    if (event.keyCode == 13) {
                                                        login();
                                                    }
                                                });
                                                if (localStorage.getItem("username") && Date.now() / 1000 < localStorage.getItem("timeout") && localStorage.getItem("usertype") == "investor") {
                                                    document.getElementById("browsecompanies").style.display = "block";
                                                    document.getElementById("aboutnav").style.display = "none";
                                                    document.getElementById("investornav").style.display = "none";
                                                    document.getElementById("businessnav").style.display = "none";
                                                    document.getElementById("dropdownvalues").innerHTML = '<div class="dropdown"><button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">My Profile <span class="caret"></span></button> <ul class="dropdown-menu"> <li><a href="investor_profile">Profile</a></li>  <li><a onclick="logout()">Logout</a></li> </ul> </div>';
                                                } else if (localStorage.getItem("username") && Date.now() / 1000 < localStorage.getItem("timeout") && localStorage.getItem("usertype") == "startup") {
                                                    document.getElementById("liveexample").style.display = "block";
                                                    document.getElementById("aboutnav").style.display = "none";
                                                    document.getElementById("investornav").style.display = "none";
                                                    document.getElementById("businessnav").style.display = "none";
                                                    document.getElementById("dropdownvalues").innerHTML = '<div class="dropdown"> <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">My Profile <span class="caret"></span></button> <ul class="dropdown-menu"> <li><a href="venture_profile">Profile</a></li> <li><a onclick="logout()">Logout</a></li> </ul> </div>';
                                                } else document.getElementById("dropdownvalues").innerHTML = '<div><center><a class="mbr-buttons__btn btn btn-lg animated fadeInUp delay btn-warning" data-toggle="modal" href="#loginmodal">Login/Signup</a></center>';

                                                function go_to_companies_page() {
                                                    window.location = 'companies'; // Members Area
                                                }

                                                function logout() {
                                                    localStorage.setItem("username", null);
                                                    localStorage.setItem("usertype", null);
                                                    localStorage.setItem("timeout", 0);
                                                    window.location.href = "index";
                                                }

                                                function login() {
                                                    if (document.getElementById("email").value == "")
                                                        alert("Username field is empty. Please enter the e-mail address you used to signup with FundMyVenture.");
                                                    else if (document.getElementById("password").value == "")
                                                        alert("Password field cannot be left empty.");
                                                    else {
                                                        $.post('server/checkcredentials.php', {
                                                                email: document.getElementById("email").value,
                                                                password: document.getElementById("password").value //document.getElementById("password").value
                                                            })
                                                            .done(function(data) {
                                                                if (data == '404') // ERROR?
                                                                {
                                                                    document.getElementById('status').innerHTML = "<center>Login credentials not found. Please try again.</center>";
                                                                    document.getElementById("status").style.color = 'red';
                                                                } else {
                                                                    document.getElementById('status').innerHTML = "<center>Login successful. Redirecting you to companies page.</center> ";
                                                                    document.getElementById("status").style.color = 'green';
                                                                    localStorage.setItem("username", data);
                                                                    localStorage.setItem("usertype", "investor");
                                                                    localStorage.setItem("timeout", Date.now() / 1000 + 1440);
                                                                    setTimeout('go_to_companies_page()', 3000);
                                                                }
                                                            });
                                                    }
                                                }

                                                function resetpassword() {
                                                    if (document.getElementById("reset_email").value == "")
                                                        alert("Username field is empty. Please enter e-mail address.");

                                                    $.post('http://fundmyventure.co/server/reset_password.php', {
                                                            email: document.getElementById("reset_email").value
                                                        })
                                                        .done(function(data) {
                                                            console.log(data);
                                                            if (data == "ok") {
                                                                document.getElementById('forgotpasswordstatus').innerHTML = "<center>Your recovered password has been sent to your mail address, if it was found in our system. <br>Please check your spam folders if you don't receive the link in the next 5 minutes.</center>";
                                                                document.getElementById("forgotpasswordstatus").style.color = 'green';
                                                            } else {
                                                                document.getElementById('forgotpasswordstatus').innerHTML = "<center>Server under heavy load. Please try again.</center>";
                                                                document.getElementById("forgotpasswordstatus").style.color = 'red';
                                                            }
                                                        });
                                                }
                                            </script>

                                        </li>

                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
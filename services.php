<!DOCTYPE html>
<html lang="en">
    <head>

        <!-- start: Meta -->
        <meta charset="utf-8">
        <title>AGGADH</title> 
        <meta name="description" content="AGGADH"/>
        <meta name="keywords" content="AGGADH,e-learning,quiz,application" />
        <!-- end: Meta -->

        <!-- start: Mobile Specific -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <!-- end: Mobile Specific -->

        <!-- start: Facebook Open Graph -->
        <meta property="og:title" content=""/>
        <meta property="og:description" content=""/>
        <meta property="og:type" content=""/>
        <meta property="og:url" content=""/>
        <meta property="og:image" content=""/>
        <!-- end: Facebook Open Graph -->

        <?
        include './includes/db.php';

        session_start();

        if (!isset($_SESSION['user'])) {
            ?>
            <script type="text/javascript">
                // alert("Not Logged In");
            </script>   

            <?
        }

        function echoActiveClassIfRequestMatches($requestUri) {
            $current_file_name = basename($_SERVER['REQUEST_URI'], ".php");

            if ($current_file_name == $requestUri)
                echo 'active';
        }
        ?>



        <!-- start: CSS -->
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/bootstrap-responsive.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Sans:400,700">
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Serif">
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Boogaloo">
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Economica:700,400italic">
        <!-- end: CSS -->


        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->


    </head>
    <body>

        <!--start: Header -->
        <header>

            <!--start: Container -->
            <div class="container">

                <!--start: Row -->
                <div class="row">

                    <!--start: Logo -->
                    <div class="logo span3">

                        <a class="brand" href="#"><img src="img/logo.png" alt="Logo"></a>

                    </div>
                    <!--end: Logo -->

                    <!--start: Navigation -->
                    <div class="span9">

                        <div class="navbar navbar-inverse">
                            <div class="navbar-inner">
                                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </a>
                                <div class="nav-collapse collapse">
                                    <ul class="nav">
                                      
                                        <li class="<?=echoActiveClassIfRequestMatches("index")?>"><a href="index.php">Home</a></li>
                                        <li class="<?=echoActiveClassIfRequestMatches("about")?>"><a href="about.php">About</a></li>
                                        <li class="<?=echoActiveClassIfRequestMatches("services")?>"><a href="service.php">Services</a></li>
                                        <li class="<?=echoActiveClassIfRequestMatches("contact")?>"><a href="">Contact</a></li>
                                        <li class="<?=echoActiveClassIfRequestMatches("signup")?>"><a href="signup.php">Sign Up</a></li>
                                        <? if(!isset($_SESSION['user']))
                                        {?>
                                        <li class="dropdown ">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Log In <b class="caret"></b></a>

                                            <ul class="dropdown-menu">
                                                <div class="login-form">
                                                    <form  method="post" action="profile.php">
                                                        <li>
                                                            <div class="input2">
                                                                <input type="text" name="user_name" value="" placeholder="Username"/>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="input2">
                                                                <input type="password" name="pass" value="" placeholder="Password"/>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="actions2">
                                                                <input type="submit" name="sub" value="Login"/>
                                                            </div>
                                                        </li>
                                                  
                                                     </form>

                                                </div>
                                                </div>
                                            </ul>
                                        </li>
                                        <? }
                                        ?>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>	
                    <!--end: Navigation -->

                </div>
                <!--end: Row -->

            </div>
            <!--end: Container-->			

        </header>
        <!--end: Header-->
        <P> 
        AGGADH provides its service to you.These policies may be updated by us from time to time without notice of you.

USAGE::
 AGGADH is an Open Database and operates with a motto of collecting and sharing questions and answers that were asked in our btech .This data is collected and submitted by our AGGADH members.The purpose of this site is to provide information to the students. Even though every care has been taken in compiling the information,AGGADH doesn’t guarantee the accuracy of the content or information that provided in this site and won’t take responsibility for any INCORRECT questions, answers, content and any form of errors. You can use this information solely at your own risk. 

REGISTRATION::
 This is an COMPULSERY service provided by AGGADH. Visitors must register into the site it is mandatory. This registration into the site permits the user to maintain and modify of the data submitted to/by the site. The personal information that collected during this registration process will NOT, be distributed and shared with any other third-parties. While submitting registration form, you also agreed to provide and maintain true, accurate, current and complete information about yourself as prompted by the Service's registration form.AGGADH NEVER verifies the accuracy of Personal Information that is submitted to the site, it is solely responsibility of the user. AGGADH reserves the right to suspend or permanently delete any user, If the data or information provided by the user is inaccurate, not related or incomplete or if the user violated our terms and conditions in any manner. 

ANTI-SPAM POLICY::
 AGGADH is against in sending spam, unsolicited emails. You should not use our service and you are not authorized to use our referral or email services, for your personal or commercial purposes. By usage of this service you agreed that to our policies. Violating these policies in any manner subject to violation of respected laws and necessary action will be initiated against the defaulters. 

COPY RIGHT::
 All pages, data and graphics presented on this website are the property of AGGADH. In this site, if you found any information that is owned by you or any content that violates your intellectual property rights, please contact to us with all necessary documents/information that authenticate your authority on your property. 

PRIVACY::
The Personal information, email that submitted while registering to the site, will NOT be distributed, shared with any other third-parties. We only use this data for our information, for research, to improve our services and for contacting you purposes.AGGADH is an Open Database Site,we verify your email address. AGGADH reserves the right to change this policy at any time. Any significant changes will be notified to you by sending an email to your email address that you provided while registering with us or by placing a notice on our site. 
        
        
        
        </P>
    </body>
</html>
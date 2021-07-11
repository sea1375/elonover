<?php 
  session_start(); 

  if (!isset($_SESSION['email_address'])) {
  	$_SESSION['msg'] = "You must log in first";
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['email_address']);
  }
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Title -->
    <title>ElonOver - Make Crypto Decentralized Again</title>
    <!-- Favicon -->
    <link rel="icon" href="img/core-img/faviconn.png">

    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700" rel="stylesheet">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Responsive Stylesheet -->
    <link rel="stylesheet" href="css/responsive.css">

</head>

<body class="darker">
    <!-- Preloader -->
    <div id="preloader">
        <div class="preload-content">
            <div id="dream-load"></div>
        </div>
    </div>

<!-- ##### Header Area Start ##### -->
<nav class="navbar navbar-expand-lg navbar-white fixed-top" id="banner">
    <div class="container">
        <!-- Brand -->
        <a class="navbar-brand" href="https://elonover.io/"><span><img src="img/others/icon.png" alt="logo"></span> ElonOver.io</a>

        <!-- Toggler/collapsibe Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="https://elonover.io/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#tokenomics">Tokenomics</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#technology">Technology</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#roadmap">Roadmap</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact">Contact</a>
                </li>
                <?php if(isset($_SESSION['email_address'])) { ?>
                <li class="lh-55px">
                    <a href="mypage" class="btn login-btn ml-50">My Page</a>
                </li>
                <?php } else { ?>
                
                <li class="lh-55px">
                    <a href="login" class="btn login-btn ml-50">Login</a>
                </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</nav>
<!-- ##### Header Area End ##### -->

<!-- ##### Welcome Area Start ##### -->
<section class="hero-section moving section-padding" id="home">
    <div class="moving-bg">
    </div>
    <!-- Hero Content -->
    <div class="hero-section-content">
        <div class="container ">
            <div class="row align-items-center">
                <!-- Welcome Content -->
                <div class="col-12 col-lg-5 col-md-12">
                    <div class="welcome-content">
                        <div class="promo-section">
                            <h3 class="special-head dark">What is ElonOver?</h3>
                        </div>
                        <p class="w-text fadeInUp" data-wow-delay="0.3s">ElonOver is a meme coin that makes fun of Elon Musk. It is just to show how much money crypto lovers are willing to pay to show how pissed off they are from Elon Musk.<br><br> We have created only <a style="color:yellow;">21 Million</a> tokens of Elon Over honoring Bitcoin, the greatest invention the mankind has ever done.<br><br><a style="color:yellow;">Yes, it is deflationary.</a></p>
                    </div>
                </div>
                <div class="col-lg-6 mb-sm-30 mb-md-30">
                    <div class="embed-responsive embed-responsive-16by9 fadeInUp" data-wow-delay="0.5s">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/QrtiWQEBgnk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Welcome Area End ##### -->
    
<!-- ##### Token Allocation start ##### -->    
<section class="token-distribution section-padding-100" id="tokenomics">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-sm-12">
                <div>
                    <h2 class="text-center mb-30 fadeInUp" data-wow-delay="0.3s">Token Allocation</h2>
                    <img src="img/others/piechart.png" class="center-block" alt="">
                </div>
            </div>
            <div class="col-lg-6 col-sm-12 mt-s">
                <h2 class="text-center mb-30 fadeInUp" data-wow-delay="0.3s">Fund Distribution</h2>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="">
                            <img src="img/others/graph-11.png" class="center-block mb-sm-30" alt="">
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="token-info">
                            <div class="info-wrapper one">
                                <div class="token-icon">12%</div>
                                <div class="token-descr">Platform R&D</div>
                            </div>
                        </div>
                        <div class="token-info">
                            <div class="info-wrapper two">
                                <div class="token-icon">25%</div>
                                <div class="token-descr">Mission Over-X</div>
                            </div>
                        </div>
                        <div class="token-info">
                            <div class="info-wrapper four">
                                <div class="token-icon">8%</div>
                                <div class="token-descr">Platform Operation</div>
                            </div>
                        </div>
                        <div class="token-info">
                            <div class="info-wrapper five">
                                <div class="token-icon">7%</div>
                                <div class="token-descr"> Overhead</div>
                            </div>
                        </div>
                        <div class="token-info">
                            <div class="info-wrapper three">
                                <div class="token-icon">5%</div>
                                <div class="token-descr">Charity</div>
                            </div>
                        </div>
                        <div class="token-info">
                            <div class="info-wrapper six">
                                <div class="token-icon">8%</div>
                                <div class="token-descr">Green Energy Support</div>
                            </div>
                        </div>
                        <div class="token-info">
                            <div class="info-wrapper seven">
                                <div class="token-icon">5%</div>
                                <div class="token-descr">Contingency</div>
                            </div>
                        </div>
                        <div class="token-info">
                            <div class="info-wrapper eight">
                                <div class="token-icon">30%</div>
                                <div class="token-descr">Liquidity</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Token Allocation End ##### --> 

<div class="clearfix"></div>

<!-- ##### BOARD OF THE BIG FISTS Start ##### -->
<section class="about-us-area section-padding-0-100 clearfix">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-lg-6 offset-lg-0 col-md-12 no-padding-left">
                <div class="welcome-meter fadeInUp" data-wow-delay="0.7s">
                    <img src="img/others/about.png"  alt="">
                </div>
            </div>
            <div class="col-12 col-lg-6 offset-lg-0">
                <div class="who-we-contant mt-s">
                    <div class="dream-dots text-left fadeInUp" data-wow-delay="0.2s" >
                        <span class="gradient-text ">BOARD OF THE BIG FISTS</span>
                    </div>
                    <h4 class="fadeInUp" data-wow-delay="0.3s">Beware of Pissed Fists</h4>
                    <p class="fadeInUp" data-wow-delay="0.4s">5,000,000 tokens were transferred into 5 new wallets and keys were sent via twitter to selected celebrities. Those celebrities are very well known of being big time crypto supporters and sort of pissed from what Elon Musk is doing around crypto.</p>
                    <p class="fadeInUp" data-wow-delay="0.5s">These celebrities understand very well the potential of crypto and are teaching Ellon lessons. The celebrities can keep the tokens and can donate some to charities.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### BOARD OF THE BIG FISTS End ##### -->

<!-- ##### Man Area Start ##### -->
<section class="our_team_area section-padding-0-0 clearfix" id="team">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <!-- Single Team Member -->
            <div class="col-12 col-sm-6 col-lg-2" style="padding:0px;">
                <div class="single-team-member-wrapper">
                    <div class="row single-team-member fadeInUp" data-wow-delay="0.2s">
                        <!-- Image -->
                        <div class="team-member-thumb">
                            <img src="img/others/1.png" class="center-block" alt="">
                        </div>
                        <!-- Team Info -->
                        <div class="team-info">
                            <p class="font-weight-bold">Max Keiser</p>
                            <h5 class="">1,000,000</h5>
                        </div>
                    </div>

                    <div class="key-proof text-center">
                        <a class="clearfix d-block" href="#">
                            <img src="img/others/key_proof.png" />
                            <span>Key Proof</span>
                        </a>
                    </div>

                    <div class="bsc-scan text-center">
                        <a class="clearfix d-block" href="https://bscscan.com/address/0xfA45b0f5db1FE9040e493F3cA1855644e368A132" target="_blank">
                            <img src="img/others/bsc_scan.png" />
                            <span>BSC SCAN</span>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Single Team Member -->
            <div class="col-12 col-sm-6 col-lg-2 " style="padding:0px;">
                <div class="single-team-member-wrapper">
                    <div class="row single-team-member fadeInUp" data-wow-delay="0.3s">
                        <!-- Image -->
                        <div class="team-member-thumb">
                            <img src="img/others/2.png" class="center-block" alt="">
                        </div>
                        <!-- Team Info -->
                        <div class="team-info">
                            <p class="font-weight-bold">Michael Saylor</p>
                            <h5 class="">1,000,000</h5>
                        </div>
                    </div>

                    <div class="key-proof text-center">
                        <a class="clearfix d-block"  href="#">
                            <img src="img/others/key_proof.png" />
                            <span>Key Proof</span>
                        </a>
                    </div>

                    <div class="bsc-scan text-center">
                        <a class="clearfix d-block" href="https://bscscan.com/address/0x70dF1bcB7Cdd393B71b562B4F37A5bcc25bd6388" target="_blank">
                            <img src="img/others/bsc_scan.png" />
                            <span>BSC SCAN</span>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Single Team Member -->
            <div class="col-12 col-sm-6 col-lg-2"  style="padding:0px;">
                <div class="single-team-member-wrapper">
                    <div class="row single-team-member fadeInUp" data-wow-delay="0.4s">
                        <!-- Image -->
                        <div class="team-member-thumb">
                            <img src="img/others/3.png" class="center-block" alt="">
                        </div>
                        <!-- Team Info -->
                        <div class="team-info">
                            <p class="font-weight-bold">Chamath</p>
                            <h5 class="">1,000,000</h5>
                        </div>
                    </div>

                    <div class="key-proof text-center">
                        <a class="clearfix d-block"  href="#">
                            <img src="img/others/key_proof.png" />
                            <span>Key Proof</span>
                        </a>
                    </div>

                    <div class="bsc-scan text-center">
                        <a class="clearfix d-block" href="https://bscscan.com/address/0x1142691F7da2bc6ed27c0b0788F9C233a32CDe61" target="_blank">
                            <img src="img/others/bsc_scan.png" />
                            <span>BSC SCAN</span>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Single Team Member -->
            <div class="col-12 col-sm-6 col-lg-2"  style="padding:0px;">
                <div class="single-team-member-wrapper">
                    <div class="row single-team-member fadeInUp" data-wow-delay="0.5s">
                        <!-- Image -->
                        <div class="team-member-thumb">
                            <img src="img/others/4.png" class="center-block" alt="">
                        </div>
                        <!-- Team Info -->
                        <div class="team-info">
                            <p class="font-weight-bold">Vitalik</p>
                            <h5 class="">1,000,000</h5>
                        </div>
                    </div>

                    <div class="key-proof text-center">
                        <a class="clearfix d-block"  href="#">
                            <img src="img/others/key_proof.png" />
                            <span>Key Proof</span>
                        </a>
                    </div>

                    <div class="bsc-scan text-center">
                        <a class="clearfix d-block" href="https://bscscan.com/address/0xB6be89664Ee2CfBE21FA33D32C34cf15Df35DF6f" target="_blank">
                            <img src="img/others/bsc_scan.png" />
                            <span>BSC SCAN</span>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Single Team Member -->
            <div class="col-12 col-sm-6 col-lg-2"  style="padding:0px;">
                <div class="single-team-member-wrapper">
                    <div class="row single-team-member fadeInUp" data-wow-delay="0.5s">
                        <!-- Image -->
                        <div class="team-member-thumb">
                            <img src="img/others/5.png" class="center-block" alt="">
                        </div>
                        <!-- Team Info -->
                        <div class="team-info">
                            <p class="font-weight-bold">Mr. President</p>
                            <h5 class="">1,000,000</h5>
                        </div>
                    </div>

                    <div class="key-proof text-center">
                        <a class="clearfix d-block"  href="#">
                            <img src="img/others/key_proof.png" />
                            <span>Key Proof</span>
                        </a>
                    </div>

                    <div class="bsc-scan text-center">
                        <a class="clearfix d-block" href="https://bscscan.com/address/0xf748C8102C788d17d7ceA6e87b01592e9202805D" target="_blank">
                            <img src="img/others/bsc_scan.png" />
                            <span>BSC SCAN</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Man Area End ##### -->

<!-- ##### Innovation of Fun Start ##### -->
<section class="about-us-area section-padding-0-100 clearfix" id="technology">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-lg-6 offset-lg-0">
                <div class="who-we-contant">
                    <div class="dream-dots text-left fadeInUp" data-wow-delay="0.2s">
                        <span class="gradient-text ">Innovation of Fun</span>
                    </div>
                    <h4 class="fadeInUp" data-wow-delay="0.3s">Blockchain becomes a Punchchain</h4>
                    <p class="fadeInUp" data-wow-delay="0.4s">Crypto is all about innovations around blockchains. We are sure you have heard of Proof of Work (POW) and Proof of Stake concepts and how each is revolutionizing crypto world. We are honored to introduce our innovation of Proof of Punch (POP) concept. It is just simply to punch the face of Elon Musk to verify the transactions and have the honor to build the new block of the Punch Chain and get ElonOver Token as a reward.</p>
                </div>
            </div>
            <img class="supportImg" src="img/svg/trading-strokes.svg" alt="image">
            <div class="col-12 col-lg-6 offset-lg-0 col-md-12 mt-30 no-padding-left">
                <div class="welcome-meter floating-anim fadeInUp" data-wow-delay="0.7s">
                    <img src="img/others/computer.png"  alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Innovation of Fun End ##### -->

<!-- ##### Our Token Prices start ##### -->    
<section class="features section-padding-0-70 ">
    <div class="container">
        <div class="section-heading text-center">
            <!-- Dream Dots -->
            <div class="dream-dots justify-content-center fadeInUp" data-wow-delay="0.2s">
                <span>Token Prices</span>
            </div>
            <h2 class="fadeInUp" data-wow-delay="0.3s">Our Token Prices</h2>
        </div>
        <div class="row">
            <div class="col-lg-3 col-sm-6 col-xs-12">
                <div class="pricing-item ">
                    <h4>Round 1</h4> 
                    <h3><strong class="xzc-1-month" style="font-size: 18px;">Allocation</strong></h3> 
                    <span>6,000,000</span> 
                    <div class="pricing">Tokens</div> 
                    <label><strong style="font-size: 12px;">Investors Locked for 2 Years</strong></label>
                </div>

                <div class="progress pricing-item-progress">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 100%" aria-valuemax="100">100%</div>
                </div>
            </div> 
            <div class="col-lg-3 col-sm-6 col-xs-12">
                <div class="pricing-item active">
                    <h4>Round 2</h4> 
                    <h3><strong class="xzc-1-month">0.10$</strong></h3> 
                    <span>5,000,000</span> 
                    <div class="pricing">Tokens</div> 
                    <label><strong style="font-size: 12px;">One life time chance</strong></label>
                </div>

                <div class="progress pricing-item-progress mb-3">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 30%" aria-valuemax="100">30%</div>
                </div>

                <button type="button" class="pricing-button btn btn-primary btn-sm btn-block">Buy with Crypto</button>
            </div> 
            <div class="col-lg-3 col-sm-6 col-xs-12">
                <div class="pricing-item ">
                    <h4>Round 3</h4> 
                    <h3><strong class="xzc-1-month">0.50$</strong></h3> 
                    <span>10,000,000</span> 
                    <div class="pricing">Tokens</div> 
                    <label><strong style="font-size: 12px;">Catch it if you can</strong></label>
                </div>

                <div class="progress pricing-item-progress">
                    <div class="progress-bar bg-white text-white" role="progressbar" style="width: 100%" aria-valuemax="100">SOON</div>
                </div>
            </div> 
            <div class="col-lg-3 col-sm-6 col-xs-12">
                <div class="pricing-item ">
                    <h4>Live Exchange</h4>
                    <img src="img/others/pngwing.png" width="127px">
                    <h3></h3>
                    <label><strong style="font-size: 12px;">Apollo Mission Launched</strong></label>
                </div>

                <div class="progress pricing-item-progress">
                    <div class="progress-bar bg-white text-white" role="progressbar" style="width: 100%" aria-valuemax="100">COMING</div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Our Token Prices End ##### -->  

<div class="clearfix"></div>

<!-- ##### Web Game Box start ##### -->
<section class="about-us-area section-padding-0-100 clearfix">
    <div class="container" style="border:3px solid white;">
        <div class="">
            <!-- Dream Dots -->
            <!-- <h2 class="fadeInUp" data-wow-delay="0.3s">Web Game Box</h2> -->

            <iframe class="game-box" src="https://elon-punch-demo6.netlify.app"></iframe>
        </div>
    </div>

    
</section>
<!-- ##### Web Game Box End ##### -->

<!-- ##### MISSION OVER-X Start ##### -->
<section class="about-us-area section-padding-0-0 clearfix" id="roadmap">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-lg-6 offset-lg-0">
                <div class="who-we-contant">
                    <div class="dream-dots text-left fadeInUp" data-wow-delay="0.2s">
                            <span class="gradient-text ">ROADMAP</span>
                    </div>
                    <h4 class="fadeInUp" data-wow-delay="0.3s">MISSION OVER-X</h4>
                    <p class="fadeInUp" data-wow-delay="0.4s">You know SpaceX right?</p>
                    <p class="fadeInUp" data-wow-delay="0.5s">OVER-X is our counter project and code name for the project mission to the moon. With such low and deflationary number of coins, the mission to the moon is never easier.</p>
                    <p class="fadeInUp" data-wow-delay="0.5s">We do it differently than others. We basically get everyone onboarded at initial coin offering (ICO) before trading at Live Exchange. This creates a fair opportunity to all to make money not only to those who got very early..</p>
                    <p class="fadeInUp" data-wow-delay="0.5s">Once all public tokens are sold at Round 1 and 2, then ElonOver will be going Live on exchange while the initial investors will have a lock period of 2 years to guarantee no Rug Pull.</p>
                    <p class="fadeInUp" data-wow-delay="0.5s">With such low number of 21M coins, we expect to get easily to a $21 M market cap (10x) at no time. Following our roadmap we expect to be a $210 M market cap (100x). Building a strong community should take us eventually to the average MEME tokens market cap which is $2B (1000x). Beyond that, we may be lucky enough to go viral and hit $20B market cap like some of the exceptional MEME tokens (10000x).</p>
                    <p class="fadeInUp" data-wow-delay="0.5s">Elon is a narcist person that work like a magnet of community anger. ElongOver token will continue to be in huge demand by community as long as Elon still exists.</p>
                </div>
            </div>
            <img class="supportImg" src="img/svg/trading-strokes.svg" alt="image">
            <div class="col-12 col-lg-6 offset-lg-0 col-md-12 mt-30 no-padding-left">
                <div class="welcome-meter floating-anim fadeInUp" data-wow-delay="0.7s" style="padding-bottom:30px;">
                    <img src="img/others/rocket.gif"  alt="">
                </div>
                <div class="row" style="display:none;">
                <div class="col-12 col-md-4 col-lg-4">
                    <!-- Content -->
                    <div class="service_single_content text-center fadeInUp" data-wow-delay="0.2s">
                        <!-- Icon -->
                        <h6>If you invest</h6>
                        <div class="service_icon">
                            <img src="img/others/100.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-4">
                    <!-- Content -->
                    <div class="service_single_content text-center fadeInUp" data-wow-delay="0.2s">
                        <!-- Icon -->
                        <h6>10x</h6>
                        <div class="service_icon">
                            <img src="img/others/1000.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-4">
                    <!-- Content -->
                    <div class="service_single_content text-center fadeInUp" data-wow-delay="0.2s">
                        <!-- Icon -->
                        <h6>100x</h6>
                        <div class="service_icon">
                            <img src="img/others/10000.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-4">
                    <!-- Content -->
                    <div class="service_single_content text-center fadeInUp" data-wow-delay="0.2s">
                        <!-- Icon -->
                        <h6>1000x</h6>
                        <div class="service_icon">
                            <img src="img/others/100000.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-4">
                    <!-- Content -->
                    <div class="service_single_content text-center fadeInUp" data-wow-delay="0.2s">
                        <!-- Icon -->
                        <h6>1000x</h6>
                        <div class="service_icon">
                            <img src="img/others/1000000.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### MISSION OVER-X End ##### -->
    
<!-- ##### invest Area Start ##### -->
<section class="our_services_area section-padding-0-0 clearfix" >
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-12 col-md-2 col-lg-2">
                <!-- Content -->
                <div class="service_single_content text-center fadeInUp" data-wow-delay="0.2s">
                    <!-- Icon -->
                    <h6>If you invest</h6>
                    <div class="service_icon">
                        <img src="img/others/11.png" alt="">
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-2 col-lg-2">
                <!-- Content -->
                <div class="service_single_content text-center fadeInUp" data-wow-delay="0.2s">
                    <!-- Icon -->
                    <h6>10x</h6>
                    <div class="service_icon">
                        <img src="img/others/12.png" alt="">
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-2 col-lg-2">
                <!-- Content -->
                <div class="service_single_content text-center fadeInUp" data-wow-delay="0.2s">
                    <!-- Icon -->
                    <h6>100x</h6>
                    <div class="service_icon">
                        <img src="img/others/13.png" alt="">
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-2 col-lg-2">
                <!-- Content -->
                <div class="service_single_content text-center fadeInUp" data-wow-delay="0.2s">
                        <!-- Icon -->
                    <h6>1000x</h6>
                    <div class="service_icon">
                        <img src="img/others/14.png" alt="">
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-2 col-lg-2">
                <!-- Content -->
                <div class="service_single_content text-center fadeInUp" data-wow-delay="0.2s">
                    <!-- Icon -->
                    <h6>1000x</h6>
                    <div class="service_icon">
                        <img src="img/others/15.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### invest Area end ##### -->

<!-- ##### ICO Roadmap Area start ##### -->
<section class="roadmap section-padding-100-0">
    <div class="section-heading text-center">
        <!-- Dream Dots -->
        <div class="dream-dots justify-content-center fadeInUp" data-wow-delay="0.2s">
            <span>ICO Roadmap</span>
        </div>
        <h2 class="fadeInUp" data-wow-delay="0.3s">Our ICO Roadmap</h2>
        <!-- <p class="fadeInUp" data-wow-delay="0.4s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis accumsan nisi Ut ut felis congue nisl hendrerit commodo.</p> -->
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="main-timeline">
                    <div class="timeline">
                        <div class="icon"></div>
                        <div class="date-content">
                            <div class="date-outer"> <span class="date"> <span class="month">Kick</span> <span class="year">Off</span> </span>
                            </div>
                        </div>
                        <div class="timeline-content">
                            <p class="description text-light-gray">Roadmap Development
                                </p>
                            <p class="description text-light-gray">Website Development.
                                </p>
                            <p class="description text-light-gray">Game Development.
                                </p>
                            <p class="description text-light-gray">Animation Development.
                                </p>
                            <p class="description text-light-gray">Smart Contract, Development.
                                </p>
                            <p class="description text-light-gray">Social Media Existence.
                                </p>
                        </div>
                    </div>
                    <div class="timeline">
                        <div class="icon"></div>
                        <div class="date-content">
                            <div class="date-outer"> <span class="date"> <span class="month">Round</span> <span class="year">1</span> </span>
                            </div>
                        </div>
                        <div class="timeline-content">
                            <p class="description text-light-gray"><br><br>Allocation of 6,000,000 tokens to initial investors of big fists.
                                </p>
                            <p class="description text-light-gray">Initial Marketing.
                                </p>
                            <br><br>
                        </div>
                    </div>
                    <div class="timeline">
                        <div class="icon"></div>
                        <div class="date-content">
                            <div class="date-outer"> <span class="date"> <span class="month">Round</span> <span class="year">2</span> </span>
                            </div>
                        </div>
                        <div class="timeline-content">
                            <br>
                            <p class="description text-light-gray">Sales of 5,000,000 tokens on Round 2.</p>
                            <p class="description text-light-gray">Reach 1M site visits.</p>
                            <p class="description text-light-gray">Reach 100K followers on social media accounts.</p>
                            <br><br>
                        </div>
                    </div>
                    <div class="timeline">
                        <div class="icon"></div>
                        <div class="date-content">
                            <div class="date-outer"> <span class="date"> <span class="month">Round</span> <span class="year">3</span> </span>
                            </div>
                        </div>
                        <div class="timeline-content">
                            <br>
                            <p class="description text-light-gray">Sales of 10,000,000 tokens on Round 3.</p>
                            <p class="description text-light-gray">Reach 5M site visits.</p>
                            <p class="description text-light-gray">Reach 500K followers on social media accounts.</p>
                            <br><br>
                        </div>
                    </div>
                    <div class="timeline">
                        <div class="icon"></div>
                        <div class="date-content">
                            <div class="date-outer"> <span class="date" style="margin-top:20px;"> <span class="month">Youtubers</span>  </span>
                            </div>
                        </div>
                        <div class="timeline-content">
                            <br>
                            <p class="description text-light-gray">Get Featured on several Crypto Youtuber channels with >1M subscribers.</p>
                            <p class="description text-light-gray">Reach 10M site visits.</p>
                            <p class="description text-light-gray">Reach 1M followers</p>
                            <br><br>
                        </div>
                    </div>
                    <div class="timeline">
                        <div class="icon"></div>
                        <div class="date-content">
                            <div class="date-outer"> <span class="date"> <span class="month">Dex</span> <span class="year">Listing</span> </span>
                            </div>
                        </div>
                        <div class="timeline-content">
                            <p class="description text-light-gray">Get listed on Pancake.</p>
                            <p class="description text-light-gray">Swap for Live Exchange.</p>
                            <p class="description text-light-gray">Marketing @ Chinese Social Media.</p>
                            <p class="description text-light-gray">Reach 10M followers.</p>
                            <br><br>
                        </div>
                    </div>
                    <div class="timeline">
                        <div class="icon"></div>
                        <div class="date-content">
                            <div class="date-outer"> <span class="date"> <span class="month">Cex</span> <span class="year">Listing</span> </span>
                            </div>
                        </div>
                        <div class="timeline-content">
                            <br>
                            <p class="description text-light-gray">Get Listed on big exchanges.</p>
                            <p class="description text-light-gray">ELOV Conference</p>
                            <p class="description text-light-gray">Reach 20M followers</p>
                            <br><br>
                        </div>
                    </div>
                    <div class="timeline">
                        <div class="icon"></div>
                        <div class="date-content">
                            <div class="date-outer"> <span class="date" style="margin-top:20px;"> <span class="month">Beyond</span>  </span>
                            </div>
                        </div>
                        <div class="timeline-content">
                            <p class="description text-light-gray">ElonOver Song by Snoop Dogg.</p>
                            <p class="description text-light-gray">ElonOver Song by BTS.</p>
                            <p class="description text-light-gray">Get Featured on CNBC</p>
                            <p class="description text-light-gray">Reach 100M followers</p>
                            <p class="description text-light-gray">Create Gaming Demand</p>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### ICO Roadmap Area end ##### -->

<div class="footer-content-area ">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-12 col-md-12">
                <div class="section-heading text-center" style="margin-bottom: 0px;">
                    <!-- Dream Dots -->
                    <!-- <div class="dream-dots justify-content-center fadeInUp" data-wow-delay="0.2s">
                        <div class="footer-logo  justify-content-center">
                            <a href="https://elonover.io"><img style="width:100px;" src="img/others/logoforfooter.png" alt="logo"> ElonOver.io</a>
                        </div>
                    </div> -->
                    <p class="fadeInUp" data-wow-delay="0.4s">© 2021 ElonOver.io - All Rights Reserved.</p>
                    <!-- Social Icon -->
                    <div class="footer-social-info fadeInUp" data-wow-delay="0.4s">
                        <!-- <a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                        <a href="#"> <i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a> -->

                        <a href="https://www.youtube.com/channel/UCILMMq4EirDeBXcb2jtqcSQ" target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                        <a href="https://twitter.com/ElonOver" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a href="https://discord.gg/cQFDuCkxtw" target="_blank">
							<img src="img/others/discord.png" class="discord-icon" />
						</a>
                        <!-- <a href="https://discord.gg/cQFDuCkxtw" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
    
    <!-- ########## All JS ########## -->
    <!-- jQuery js -->
    <script src="js/jquery.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins.js"></script>
    <!-- Parallax js -->
    <script src="js/dzsparallaxer.js"></script>

    <script src="js/jquery.syotimer.min.js"></script>

    <!-- script js -->
    <script src="js/script.js"></script>

</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Leo Rudin - Developer & Computer enthusiast</title>

    <link rel='shortcut icon' href='img/icon.png'>

    <!-- CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">

    <!-- Fonts -->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='//fonts.googleapis.com/css?family=Lato:400,300,700,900' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Gentium+Book+Basic' rel='stylesheet' type='text/css'>
    
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <!-- SEO -->
    <meta name='robots' content='index, follow'>
    <meta name="description" content="Leo Rudin - Developer & Computer enthusiast">
    <meta name="keywords" content="biography, leo, rudin, work, web, design, html, css, portfolio, personel, developer">
    
    <!-- JavaScript -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="js/app.js"></script>

</head>

<body>

    <!-- Intro -->
    <div class="intropage">
        <div class="container intro">
            <div class="row">
                <div class="col-md-4 me">
                    <img src="img/me.jpg" alt="Leo Rudin">
                </div>
                <div class="col-md-8 desc">
                    <h1>Leo Rudin</h1>
                    <p>Developer & Computer enthusiast</p>
                    <a href="#about">
                        <button>Scroll down <i class="fa fa-arrow-down"></i></button>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- About -->
    <section id="about" class="c1">
        <div class="container">
            <h1>About Me</h1>
            <p>
                I'm currently 18 years old and live in Switzerland. I got my first experience
                in creating websites with HTML when I was around 15 years old. Since then
                my passion for creating application for the web grow and grow. Today I still
                enjoy creating web stuff and I'm learning new things everyday.
            </p>
            <p>
                After school, I started an apprenticeship as an Application Developer at 
                <a href="http://credit-suisse.com" target="_blank">Credit Suisse.</a> There, 
                I primarly develop on IBM Mainframes with languages PL/1 and JCL but also 
                with Java.
            </p>
            <p>
                Besides the programming, I like to go swimming and bicycling. In winter I really
                enjoy skiing.
            </p>
        </div>
    </section>

    <!-- Skills -->
    <section id="skills">
        <div class="container">
            <h1>Skills</h1>
            <p>
                See here an overview of my current skills.
            </p>
            <!-- Skillbars from http://www.thethemelab.com/downloads/10-animated-skill-bars/ -->
            <div class="skillbar" data-percent="90%">
                <div class="count-bar color-1">
                    <div class="title">HTML5</div>
                    <div class="count"></div>
                </div>
            </div>
            <div class="skillbar" data-percent="85%">
                <div class="count-bar color-2">
                    <div class="title">CSS3</div>
                    <div class="count"></div>
                </div>
            </div>
            <div class="skillbar" data-percent="60%">
                <div class="count-bar color-3">
                    <div class="title">JS & jQuery</div>
                    <div class="count"></div>
                </div>
            </div>
            <div class="skillbar" data-percent="70%">
                <div class="count-bar color-4">
                    <div class="title">PHP</div>
                    <div class="count"></div>
                </div>
            </div>
            <div class="skillbar" data-percent="60%">
                <div class="count-bar color-5">
                    <div class="title">Java & JSF</div>
                    <div class="count"></div>
                </div>
            </div>
            <div class="skillbar" data-percent="80%">
                <div class="count-bar color-6">
                    <div class="title">SQL</div>
                    <div class="count"></div>
                </div>
            </div>
            <div class="skillbar" data-percent="70%">
                <div class="count-bar color-7">
                    <div class="title">WordPress</div>
                    <div class="count"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact -->
    <section id="about" class="c1">
        <div class="container">
            <h1>Contact Me</h1>
            <p>If you have any questions, feedback or just wanna say hi, don't hesitate to contact me. Since I speak german fluently, feel free to contact me in german too.</p>
            <div id="form-result">
                <!-- Form results will be displayed here -->
            </div>
            <form>
                <div class="row">
                    <div class="col-md-5">
                        <input type="text" placeholder="Your Name" id="name">
                        <input type="email" placeholder="Your E-Mail-Adress" id="email">
                        <input type="text" placeholder="Subject" id="subject">
                    </div>
                    <div class="col-md-7">
                        <textarea placeholder="Enter here your message" id="message"></textarea>
                    </div>
                </div>
                <button id="submit">Send message</button>
            </form>
        </div>
    </section>

    <section id="footer">
        <div class="container footer">
            <h2>Find Me On Other Plattforms</h2>
            <p>
                <a href="https://facebook.com/leo.rudin.3"><i class="fa fa-facebook-square fa-3x socialicons fb"></i></a>
                <a href="https://twitter.com/d3flox"><i class="fa fa-twitter-square fa-3x socialicons tw"></i></a>
                <a href="https://instagram.com/leorudin"><i class="fa fa-instagram fa-3x socialicons in"></i></a>
                <a href="https://plus.google.com/115763010941984456265"><i class="fa fa-google-plus-square fa-3x socialicons go"></i></a>
                <a href="https://github.com/deflox"><i class="fa fa-github-square fa-3x socialicons gi"></i></a>
            </p>
        </div>
    </section>
    
    <!-- Skill Bars -->
    <script src="js/appear.js"></script>
    <script>
        jQuery(function() {
            $(document).ready(function() {
                jQuery('.skillbar').each(function() {
                    jQuery(this).appear(function() {
                        jQuery(this).find('.count-bar').animate({
                            width: jQuery(this).attr('data-percent')
                        }, 2000);
                        var percent = jQuery(this).attr('data-percent');
                        jQuery(this).find('.count').html(percent);
                    });
                });
            });
        }());
    </script>

</body>

</html>
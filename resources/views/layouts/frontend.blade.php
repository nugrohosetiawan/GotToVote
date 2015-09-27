@extends('layouts.master')

@section('body-attr') data-spy="scroll" @endsection

@section('header')

<!---//Facebook button code-->
<div id="fb-root"></div>
<script>
    (function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>

<!-- ******HEADER****** -->
<header id="header" class="header">
    <div class="container">
        <h1 class="logo pull-left">
            <a class="scrollto" href="#promo">
                <span class="logo-title">GotToVote</span>
            </a>
        </h1><!--//logo-->
        <nav id="main-nav" class="main-nav navbar-right" role="navigation">
            <div class="navbar-header">
                <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!--//nav-toggle-->
            </div>
            <!--//navbar-header-->
            <div class="navbar-collapse collapse" id="navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active nav-item sr-only"><a class="scrollto" href="#promo">Home</a></li>
                    <li class="nav-item"><a class="scrollto" href="#about">About</a></li>
                    <li class="nav-item"><a class="scrollto" href="#features">Features</a></li>
                    <li class="nav-item"><a class="scrollto" href="#docs">Docs</a></li>
                    <li class="nav-item"><a class="scrollto" href="#license">License</a></li>
                    <li class="nav-item last"><a class="scrollto" href="#contact">Contact</a></li>
                </ul>
                <!--//nav-->
            </div>
            <!--//navabr-collapse-->
        </nav>
        <!--//main-nav-->
    </div>
</header><!--//header-->

@endsection


@section('footer')

<!-- ******CONTACT****** -->
<section id="contact" class="contact section has-pattern">
    <div class="container">
        <div class="contact-inner">
            <h2 class="title  text-center">Contact</h2>

            <p class="intro  text-center">I hope you find this Bootstrap template useful. <br/>Feel free to get in touch
                if you have any questions or suggestions.</p>

            <div class="author-message">
                <div class="profile">
                    <img class="img-responsive" src="assets/images/profile.png" alt=""/>
                </div>
                <!--//profile-->
                <div class="speech-bubble">
                    <h3 class="sub-title">Want to get more freebies in the future?</h3>

                    <p>I tweet about #UX and #webdev related resources/content at <a
                                href="https://twitter.com/3rdwave_themes" target="_blank">@3rdwave_themes</a>

                    <p>If you like what I do, you can follow me on twitter and I will keep you informed about my next
                        free template there :)</p>

                    <p><strong>[Tip for developers]:</strong> If you take on freelance work you can put a tailored
                        message here about your availability to attract potential clients. Be creative and good luck!
                    </p>

                    <div class="source">
                        <span class="name"><a href="https://twitter.com/3rdwave_themes" target="_blank">Xiaoying
                                Riley</a></span>
                        <br/>
                        <span class="title">UX/UI Designer</span>
                    </div>
                    <!--//source-->
                </div>
                <!--//speech-bubble-->
            </div>
            <!--//author-message-->
            <div class="clearfix"></div>
            <div class="info text-center">
                <h4 class="sub-title">Get Connected</h4>
                <ul class="social-icons list-inline">
                    <li><a href="https://twitter.com/3rdwave_themes" target="_blank"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li><a href="https://www.facebook.com/3rdwavethemes" target="_blank"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li><a href="https://www.linkedin.com/in/xiaoying"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="http://instagram.com/xyriley"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="https://dribbble.com/Xiaoying"><i class="fa fa-dribbble"></i></a></li>
                    <li class="last"><a href="mailto: hello@3rdwavemedia.com"><i class="fa fa-envelope"></i></a></li>
                </ul>
            </div>
            <!--//info-->
        </div>
        <!--//contact-inner-->
    </div>
    <!--//container-->
</section><!--//contact-->

<!-- ******FOOTER****** -->
<footer class="footer">
    <div class="container text-center">
        <small class="copyright">Designed with <i class="fa fa-heart"></i> by <a href="http://themes.3rdwavemedia.com"
                                                                                 target="_blank">Xiaoying Riley</a> for
            developers
        </small>
    </div>
    <!--//container-->
</footer><!--//footer-->

@endsection
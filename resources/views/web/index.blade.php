<!DOCTYPE html>
<html lang="en">
<head>
    <title>LakSriRadio</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="author" content="Your name">

    <link href="{!! asset("web/css/bootstrap.css") !!}" rel="stylesheet">
    <link href="{!! asset("web/css/font-awesome.css") !!}" rel="stylesheet">
    <link href="{!! asset("web/css/camera.css") !!}" rel="stylesheet">
    <link href="{!! asset("web/css/mediaelementplayer.css") !!}" rel="stylesheet">
    <link href="{!! asset("web/css/slick.css") !!}" rel="stylesheet">
    <link href="{!! asset("web/css/slick-theme.css") !!}" rel="stylesheet">
    <link href="{!! asset("web/css/animate.css") !!}" rel="stylesheet">
    <link href="{!! asset("web/css/style.css") !!}" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="onepage front" data-spy="scroll" data-target="#top1" data-offset="92">

<div id="load"></div>

<div id="main">

    <div id="home">
        <div class="logo3_wrapper">
            <a href="#home" class="logo3 scroll-to">
                <img src="{!! asset('web/images/logo_lk.png') !!}" alt="" class="img-responsive">
            </a>
        </div>
        <div class="add1 add2 clearfix">
            <div class="icon-search"><a href="#"></a></div>
            <div class="dropdown dropdown1">
                <button class="dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="true">EN
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                    <li><a href="javascript:void(0);">FR</a></li>
                    <li><a href="javascript:void(0);">DE</a></li>
                    <li><a href="javascript:void(0);">ES</a></li>
                </ul>
            </div>
        </div>
        <div id="slider_wrapper">
            <div class="go-down"><a href="#featured" class="scroll-to"></a></div>
            <div class="">
                <div id="slider_inner" class="clearfix">
                    <div id="slider" class="clearfix">
                        <div id="camera_wrap">
                            <div data-src="{!! asset('web/images/slider/slide_1.jpg') !!}">
                                {{--                                <div class="camera_caption fadeFromLeft nav1">--}}
                                {{--                                    <div class="txt1 txt">RADIO FM</div>--}}
                                {{--                                    <div class="txt2 txt">WE ARE</div>--}}
                                {{--                                    <div class="txt3 txt">LIVE</div>--}}
                                {{--                                    <div class="txt4">06:00 - 24:00</div>--}}
                                {{--                                    <div class="txt5"><a href="#" class="btn-default btn0">MORE INFORMATION</a></div>--}}
                                {{--                                </div>--}}
                            </div>
                            <div data-src="{!! asset('web/images/slider/slide_2.jpg') !!}">
                                {{--                                <div class="camera_caption fadeFromRight nav2">--}}
                                {{--                                    <div class="txt1 txt">RADIO FM</div>--}}
                                {{--                                    <div class="txt2 txt">WE ARE</div>--}}
                                {{--                                    <div class="txt3 txt">LIVE</div>--}}
                                {{--                                    <div class="txt4">06:00 - 24:00</div>--}}
                                {{--                                    <div class="txt5"><a href="#" class="btn-default btn0">MORE EPISODES</a></div>--}}
                                {{--                                </div>--}}
                            </div>
                            <div data-src="{!! asset("web/images/slider/slide_3.jpg") !!}"></div>
                            <div data-src="{!! asset("web/images/slider/slide_4.jpg") !!}"></div>
                            <div data-src="{!! asset("web/images/slider/slide_5.jpg") !!}"></div>
                            <div data-src="{!! asset("web/images/slider/slide_6.jpg") !!}"></div>
                            <div data-src="{!! asset("web/images/slider/slide_7.jpg") !!}"></div>
                            <div data-src="{!! asset("web/images/slider/slide_8.jpg") !!}"></div>
                            <div data-src="{!! asset("web/images/slider/slide_9.jpg") !!}"></div>
                            <div data-src="{!! asset("web/images/slider/slide_10.jpg") !!}"></div>
                            <div data-src="{!! asset("web/images/slider/slide_11.jpg") !!}"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="song1_wrapper">
            <div class="container">
                <div class="song1_inner clearfix">
                    <div class="song1 clearfix">
                        <div class="left clearfix">
                            <figure><img src="{!! asset('web/images/song1.jpg') !!}" alt=""></figure>
                            <div class="caption">
                                <div class="txt1">Radio chanel: My Funny Valentine</div>
                                <div class="txt2">Manhattan Jazz Quartett</div>
                            </div>
                        </div>
                        <div class="right">
                            <div class="audio1">
                                <audio class="audio" preload="none" style="width: 100%; visibility: hidden;"
                                       controls="controls">
                                    <source type="audio/mpeg" src="audio/song1.mp3"/>
                                    <a href="audio/song1.mp3">audio/song1.mp3</a>
                                </audio>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="top1">
        <div class="top2_wrapper" id="top2">
            <div class="container">

                <div class="top2 clearfix">

                    <header>
                        <div class="logo_wrapper">
                            <a href="#home" class="logo scroll-to">
                                <img width="40px" src="{!! asset('web/images/logo_lk.png') !!}" alt=""
                                     class="img-responsive">
                            </a>
                        </div>
                    </header>

                    <div class="menu_wrapper">
                        <div class="add1 clearfix">
                            <div class="icon-search"><a href="#"></a></div>
                            <div class="dropdown dropdown1">
                                <button class="dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="true">EN
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                    <li><a href="javascript:void(0);">FR</a></li>
                                    <li><a href="javascript:void(0);">DE</a></li>
                                    <li><a href="javascript:void(0);">ES</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="navbar navbar_ navbar-default">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                    data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <div class="navbar-collapse navbar-collapse_ collapse">
                                <ul class="nav navbar-nav sf-menu clearfix">
                                    <li><a href="#home">
                                            Home
                                        </a>
                                    </li>
                                    <li><a href="#featured">Programmes</a></li>
                                    <li><a href="#collection">Popular</a></li>
                                    <li><a href="about.html">pages</a>
                                    </li>
                                    <li><a href="#testimonial">About us</a></li>
                                    <li><a href="#contacts">contact us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>


                </div>

            </div>
        </div>

    </div>

    <div id="featured">
        <div class="container">

            <div class="title1 animated" data-animation="fadeInUp" data-animation-delay="100">
                Listen All Music On Laksri Radio
            </div>

            <div class="kand1 animated" data-animation="fadeInUp" data-animation-delay="200"></div>

            <div class="title2 animated" data-animation="fadeInUp" data-animation-delay="300">Our programs</div>


        </div>


        <div class="slick-slider-wrapper">
            <div class="container">
                <div class="slick-slider slider center">
                    <div>
                        <div class="slick-slider-inner">
                            <figure><img src="{!! asset('web/images/banner/banner1.jpg') !!}" alt=""
                                         class="img-responsive"></figure>
{{--                            <div class="caption">--}}
{{--                                <div class="txt1"><span>Music - John Coltrain</span></div>--}}
{{--                                <div class="txt2"><span>The Dream Of My Life</span></div>--}}
{{--                                <div class="txt3"><a href="#" class="btn-default btn1">MORE EPISODES</a></div>--}}
{{--                            </div>--}}
                            <div class="slick-slider-overlay"></div>
                        </div>
                    </div>
                    <div>
                        <div class="slick-slider-inner">
                            <figure><img src="{!! asset('web/images/banner/banner2.jpg') !!}" alt=""
                                         class="img-responsive"></figure>
{{--                            <div class="caption">--}}
{{--                                <div class="txt1"><span>Music - Janette Colins</span></div>--}}
{{--                                <div class="txt2"><span>The Music Is My Life</span></div>--}}
{{--                                <div class="txt3"><a href="#" class="btn-default btn1">MORE EPISODES</a></div>--}}
{{--                            </div>--}}
                            <div class="slick-slider-overlay"></div>
                        </div>
                    </div>
                    <div>
                        <div class="slick-slider-inner">
                            <figure><img src="{!! asset('web/images/banner/banner3.jpg') !!}" alt=""
                                         class="img-responsive"></figure>
{{--                            <div class="caption">--}}
{{--                                <div class="txt1"><span>Music - Marianna Johns</span></div>--}}
{{--                                <div class="txt2"><span>Bing & Bong</span></div>--}}
{{--                                <div class="txt3"><a href="#" class="btn-default btn1">MORE EPISODES</a></div>--}}
{{--                            </div>--}}
                            <div class="slick-slider-overlay"></div>
                        </div>
                    </div>
                    <div>
                        <div class="slick-slider-inner">
                            <figure><img src="{!! asset('web/images/banner/banner4.jpg') !!}" alt=""
                                         class="img-responsive"></figure>
{{--                            <div class="caption">--}}
{{--                                <div class="txt1"><span>Music - Lino Ventura</span></div>--}}
{{--                                <div class="txt2"><span>La Prima Di Casta</span></div>--}}
{{--                                <div class="txt3"><a href="#" class="btn-default btn1">MORE EPISODES</a></div>--}}
{{--                            </div>--}}
                            <div class="slick-slider-overlay"></div>
                        </div>
                    </div>
                    <div>
                        <div class="slick-slider-inner">
                            <figure><img src="{!! asset('web/images/banner/banner5.jpg') !!}" alt=""
                                         class="img-responsive"></figure>
{{--                            <div class="caption">--}}
{{--                                <div class="txt1"><span>Music - Amanda Geferson</span></div>--}}
{{--                                <div class="txt2"><span>Non Troppo Di Piano</span></div>--}}
{{--                                <div class="txt3"><a href="#" class="btn-default btn1">MORE EPISODES</a></div>--}}
{{--                            </div>--}}
                            <div class="slick-slider-overlay"></div>
                        </div>
                    </div>

                    <div>
                        <div class="slick-slider-inner">
                            <figure><img src="{!! asset('web/images/banner/banner6.jpg') !!}" alt=""
                                         class="img-responsive"></figure>
{{--                            <div class="caption">--}}
{{--                                <div class="txt1"><span>Music - Arturo Chiritto</span></div>--}}
{{--                                <div class="txt2"><span>You Are My Life</span></div>--}}
{{--                                <div class="txt3"><a href="#" class="btn-default btn1">MORE EPISODES</a></div>--}}
{{--                            </div>--}}
                            <div class="slick-slider-overlay"></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>


        <div class="container">

            <div class="title2 animated" data-animation="fadeInUp" data-animation-delay="100">Popular Programs List
            </div>

            <br/>

            <div class="radios animated" style="filter: blur(3px)" data-animation="fadeInUp" data-animation-delay="300">
                <div class="radio1 head clearfix">
                    <div class="sec1">#</div>
                    <div class="sec2">Program Name</div>
                    <div class="sec3">Genre</div>
                    <div class="sec4">Chanel</div>
                    <div class="sec5">URL address</div>
                    <div class="sec6">Followers</div>
                    <div class="sec7">&nbsp;</div>
                </div>
                <div class="radio1 clearfix">
                    <div class="sec1">1.</div>
                    <div class="sec2">Jazz Radio</div>
                    <div class="sec3">Jazz, Jazz - Rock</div>
                    <div class="sec4">FM 101.2</div>
                    <div class="sec5"><a href="#">www.jazzradio.com</a></div>
                    <div class="sec6">400 780</div>
                    <div class="sec7">
                        <div class="audio2">
                            <audio class="audio" preload="none" style="width: 100%; visibility: hidden;"
                                   controls="controls">
                                <source type="audio/mpeg" src="audio/song2.mp3"/>
                                <a href="audio/song2.mp3">audio/song2.mp3</a>
                            </audio>
                        </div>
                    </div>
                </div>
                <div class="radio1 clearfix">
                    <div class="sec1">2.</div>
                    <div class="sec2">Classical Music</div>
                    <div class="sec3">Classical Music</div>
                    <div class="sec4">AM 102.5</div>
                    <div class="sec5"><a href="#">www.music.com</a></div>
                    <div class="sec6">27 534</div>
                    <div class="sec7">
                        <div class="audio2">
                            <audio class="audio" preload="none" style="width: 100%; visibility: hidden;"
                                   controls="controls">
                                <source type="audio/mpeg" src="audio/song3.mp3"/>
                                <a href="audio/song3.mp3">audio/song3.mp3</a>
                            </audio>
                        </div>
                    </div>
                </div>
                <div class="radio1 clearfix">
                    <div class="sec1">3.</div>
                    <div class="sec2">Hard Rock</div>
                    <div class="sec3">Rock, JazzRock</div>
                    <div class="sec4">Sound 101.5</div>
                    <div class="sec5"><a href="#">www.radio.com</a></div>
                    <div class="sec6">25 134</div>
                    <div class="sec7">
                        <div class="audio2">
                            <audio class="audio" preload="none" style="width: 100%; visibility: hidden;"
                                   controls="controls">
                                <source type="audio/mpeg" src="audio/song4.mp3"/>
                                <a href="audio/song4.mp3">audio/song4.mp3</a>
                            </audio>
                        </div>
                    </div>
                </div>
                <div class="radio1 clearfix">
                    <div class="sec1">4.</div>
                    <div class="sec2">Latin Music</div>
                    <div class="sec3">Samba, Bossanova</div>
                    <div class="sec4">Music 98.5</div>
                    <div class="sec5"><a href="#">www.radioFM.com</a></div>
                    <div class="sec6">56 478</div>
                    <div class="sec7">
                        <div class="audio2">
                            <audio class="audio" preload="none" style="width: 100%; visibility: hidden;"
                                   controls="controls">
                                <source type="audio/mpeg" src="audio/song1.mp3"/>
                                <a href="audio/song1.mp3">audio/song1.mp3</a>
                            </audio>
                        </div>
                    </div>
                </div>
                <div class="radio1 clearfix">
                    <div class="sec1">5.</div>
                    <div class="sec2">Popular Music</div>
                    <div class="sec3">Jazz, PopMusic</div>
                    <div class="sec4">FM 99.5</div>
                    <div class="sec5"><a href="#">www.radioOne.com</a></div>
                    <div class="sec6">150 000</div>
                    <div class="sec7">
                        <div class="audio2">
                            <audio class="audio" preload="none" style="width: 100%; visibility: hidden;"
                                   controls="controls">
                                <source type="audio/mpeg" src="audio/song2.mp3"/>
                                <a href="audio/song2.mp3">audio/song2.mp3</a>
                            </audio>
                        </div>
                    </div>
                </div>
            </div>

            <div class="pager_wrapper animated" data-animation="fadeInUp" data-animation-delay="600">
                <ul class="pager clearfix">
                    <li class="prev"><a href="#">Previous</a></li>
                    <li class="active"><a href="#">1</a></li>
                    <li class="li"><a href="#">2</a></li>
                    <li class="li"><a href="#">3</a></li>
                    <li class="li"><a href="#">4</a></li>
                    <li class="next"><a href="#">Next</a></li>
                </ul>
            </div>

        </div>


    </div>

    <div id="collection">
        <div class="container">

            <div class="title1 animated" data-animation="fadeInUp" data-animation-delay="100">
                Download our app from appstore and playstore
            </div>

            <div class="title2 animated" data-animation="fadeInUp" data-animation-delay="200">

            </div>

            <div class="title3 animated" data-animation="fadeInUp" data-animation-delay="300">
                යන යන තැන අරන් යන්න,යන යන තැන සිංදු අහන්න,දැන් ලක් ශ්‍රි රෙඩියෝ ඔබේ සාක්කුවට
            </div>

            <br><br>

            <div class="row">
                <div class="col-sm-9 animated" data-animation="fadeInLeft" data-animation-delay="100">
                    <img src="{!! asset('web/images/apps.png') !!}" alt="" class="img-responsive">
                </div>
                <div class="col-sm-3 animated" data-animation="fadeInRight" data-animation-delay="200">

                    <div class="best0">
                        <div class="txt1">The Dream Of My Life</div>
                        <div class="txt2">JOHN COLTRAIN</div>
                        <div class="kand2"></div>
                        <div class="txt2">Now Supports</div>
                        <div class="txt2">IOS 13 &</div>
                        <div class="txt2">Android 10</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="collection2">
        <div class="container">

            <div class="title1 animated" data-animation="fadeInUp" data-animation-delay="100">
                Listen us on LaksriRadio.com
            </div>

            <div class="title2 animated" data-animation="fadeInUp" data-animation-delay="200">
                YouTube
            </div>

            <div class="title3 animated" data-animation="fadeInUp" data-animation-delay="300">
                පසුගිය දිනයන් තුල විකාශන කරනු ලබු වැඩසටහන් අපගේ <strong>youtube</strong> නාලිකාව ඔස්සේ ඔබට සවන් දිය හැක
            </div>

            <br><br>

            <div class="row">
                <div class="col-sm-6 animated" data-animation="fadeInLeft" data-animation-delay="200">
                    <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" width="614.1" height="345"
                            type="text/html"
                            src="https://www.youtube.com/embed/uGfc28XC-28?autoplay=0&fs=0&iv_load_policy=3&showinfo=0&rel=0&cc_load_policy=0&start=0&end=0">
                    </iframe>
                </div>
                <div class="col-sm-5 col-sm-offset-1 animated" data-animation="fadeInRight" data-animation-delay="200">
                    <div class="disk1">
                        <div class="txt1"><span>Created</span> &nbsp;|&nbsp; By: Admin</div>
                        <div class="txt2">බෝ සිසිල ( <span>PRGM</span> )</div>
                        <div class="txt3">ලක් ශ්‍රී රේඩියෝ විශේෂ පෝ දින වැඩසටහන සෑම පොහෝ දිනකම පෙ.ව. 8.00 ට විකාශනය වේ.
                            අප ලොව්තුරා අමා මෑණී වූ ගෞතම බුදුරජාණන් වහන්සේ විසින් දේශිත උතුම් වූ දහම් ශ්‍රවනයට, පිං
                            කැමති ඔබ සැමට ආරාධනා !
                        </div>
                        <div class="txt5"><a href="#" class="btn-default btn2">LISTEN NOW</a></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6 animated" data-animation="fadeInLeft" data-animation-delay="300">
                    <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" width="614.1" height="345"
                            type="text/html"
                            src="https://www.youtube.com/embed/6f8xiw11yHM?autoplay=0&fs=0&iv_load_policy=3&showinfo=0&rel=0&cc_load_policy=0&start=0&end=0">
                    </iframe>
                </div>
                <div class="col-sm-5 col-sm-offset-1 animated" data-animation="fadeInRight" data-animation-delay="300">
                    <div class="disk1">
                        <div class="txt1"><span>Created</span> &nbsp;|&nbsp; By: Admin</div>
                        <div class="txt2">නෙතු සැලුනා ( <span>STORY</span> )</div>
                        <div class="txt3">ඉසුරි නවෝදා කෞමදී විසින් රචිත නෙතු සැලුනා නම් කෘතිය පෙම්වතුන් බොහොමයකගේ හදවත්
                            දීනූ යොවුන් ආදර අන්දරයකි. එහී කතානුසාරමය දිගහැරුම අප මෙලෙස ඔබට සමීප කරන වගයි.
                        </div>
                        <div class="txt5"><a href="#" class="btn-default btn2">LISTEN NOW</a></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6 animated" data-animation="fadeInLeft" data-animation-delay="400">
                    <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" width="614.1" height="345"
                            type="text/html"
                            src="https://www.youtube.com/embed/9fXtWBa35AM?autoplay=0&fs=0&iv_load_policy=3&showinfo=0&rel=0&cc_load_policy=0&start=0&end=0">
                    </iframe>
                </div>
                <div class="col-sm-5 col-sm-offset-1 animated" data-animation="fadeInRight" data-animation-delay="400">
                    <div class="disk1">
                        <div class="txt1"><span>Created</span> &nbsp;|&nbsp; By: Admin</div>
                        <div class="txt2">සිහින සාගරය ( <span>PRGM</span> )</div>
                        <div class="txt3">කාර්යබහුල දිවියක් ගෙවන ඔබගෙ මුවගට සිනහව ගෙන්වා , ඔබව ප්‍රීතියෙන් මුසපත් කරන්නට
                            ලක් ශ්‍රී රේඩියෝ ඔබට ගෙනෙන සිහින සාගරය වැඩසටහන සමග නොවරදවාම එකතු වන්න.
                        </div>
                        <div class="txt5"><a href="#" class="btn-default btn2">LISTEN NOW</a></div>
                    </div>
                </div>
            </div>


        </div>
    </div>

    <div id="testimonial">
        <div class="container">

            <div class="row">
                <div class="col-sm-6">
                    <div class="speaker-wrapper">
                        <img src="{!! asset('web/images/about-us.jpg') !!}" alt="" class="img-responsive">
                        <div class="speaker-img"><img src="{!! asset('web/images/about-us.jpg') !!}" alt=""
                                                      class="img-responsive"></div>
                    </div>
                </div>
                <div class="col-sm-6">

                    <div id="testim_wrapper">

                        <div class="title1">What You say About us ?</div>
                        <div class="title2">ලක් ශ්‍රී රේඩියෝ</div>

                        <div id="testim">
                            <div class="carousel-box">
                                <div class="inner">
                                    <div class="carousel main">
                                        <ul>
                                            <li>
                                                <div class="testim">
                                                    <div class="testim_inner">
                                                        <div class="txt1">
                                                            ශ්‍රී ලංකාවේ සිට විකාශනය කරනු ලබන රෙඩියොවකි,සියලුම ජතීන්ට එක
                                                            ලෙස විකාශන කාලයක් ලබා දෙමින් ජතියේ සමගිය සහජීවනය සදහා උරදෙන
                                                            රෙඩියොවක් ලෙස කටයුතු කරයි.දුර ඇත රටක සිටින සියලුම ශ්‍රි
                                                            ලංකිකයන් ගේ පාලුව තනිකම මෙම රෙඩියොව හරහා නැති වෙවායි අපගේ
                                                            බලාපොරොතුව වේ.
                                                        </div>
                                                        {{--                                                        <div class="txt2">Amanda Hane Doe</div>--}}
                                                        {{--                                                        <div class="txt3">Art Director</div>--}}
                                                    </div>
                                                </div>
                                            </li>
                                            {{--                                            <li>--}}
                                            {{--                                                <div class="testim">--}}
                                            {{--                                                    <div class="testim_inner">--}}
                                            {{--                                                        <div class="txt1">“Lorem ispum dolor sit amet, concateur u naro--}}
                                            {{--                                                            prado non troppo, amoro sit amet incorporate alido nado--}}
                                            {{--                                                            sempre pensare. Sansunet trifono--}}
                                            {{--                                                            terasimo nanto all trapo, ritenuto largo pensare.” --}}
                                            {{--                                                        </div>--}}
                                            {{--                                                        <div class="txt2">Amanda Hane Doe</div>--}}
                                            {{--                                                        <div class="txt3">Art Director</div>--}}
                                            {{--                                                    </div>--}}
                                            {{--                                                </div>--}}
                                            {{--                                            </li>--}}
                                            {{--                                            <li>--}}
                                            {{--                                                <div class="testim">--}}
                                            {{--                                                    <div class="testim_inner">--}}
                                            {{--                                                        <div class="txt1">“Lorem ispum dolor sit amet, concateur u naro--}}
                                            {{--                                                            prado non troppo, amoro sit amet incorporate alido nado--}}
                                            {{--                                                            sempre pensare. Sansunet trifono--}}
                                            {{--                                                            terasimo nanto all trapo, ritenuto largo pensare.” --}}
                                            {{--                                                        </div>--}}
                                            {{--                                                        <div class="txt2">Amanda Hane Doe</div>--}}
                                            {{--                                                        <div class="txt3">Art Director</div>--}}
                                            {{--                                                    </div>--}}
                                            {{--                                                </div>--}}
                                            {{--                                            </li>--}}


                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="testim_pagination"></div>
                    </div>

                </div>
            </div>

        </div>
    </div>

    <div id="contacts">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-sm-push-6 animated" data-animation="fadeInUp" data-animation-delay="200">
                    <img src="{!! asset('web/images/contact-us.jpg') !!}" alt="" class="img-responsive dancer">
                </div>
                <div class="col-sm-6 col-sm-pull-6 animated" data-animation="fadeInLeft" data-animation-delay="200">

                    <div class="title1">Please send us your comments</div>

                    <div class="title2">CONTACT FORM</div>

                    <br>

                    <p>
                        ඔබගේ අදහස් හා යොජනා අප වෙත ලියන්න.මෙම රෙඩියොව වඩාත් පලදායි කර ගැනිමට එය මහගු උපකාරයක් වේ.ඔබ ගේ
                        උපන්දිනය නිමිති කරගෙන හෝ මිය පරලොව ගිය ඤාතියෙකුට පින් අනුමෝදන් කිරීම පිණිස හෝ වෙනත් කිසියම්
                        විශේෂ කරුණක් නිමිති කරගනිමින් බෝ සිසිල වැඩසටහනට ඔබේ දායකත්වය සැපයිය හැකි යි
                    </p>

                    <div class="social_wrapper">
                        <ul class="social clearfix">
                            <li class="nav1"><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li class="nav2"><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li class="nav3"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li class="nav4"><a href="#"><i class="fa fa-vimeo"></i></a></li>
                        </ul>
                    </div>

                    <div id="note"></div>
                    <div id="fields">
                        <form id="ajax-contact-form" class="form-horizontal" action="javascript:alert('success!');">

                            <div class="form-group">
                                <label for="inputName">Your Name</label>
                                <input type="text" class="form-control" id="inputName" name="name" value="Full Name"
                                       onBlur="if(this.value=='') this.value='Full Name'"
                                       onFocus="if(this.value =='Full Name' ) this.value=''">
                            </div>

                            <div class="form-group">
                                <label for="inputEmail">Email</label>
                                <input type="text" class="form-control" id="inputEmail" name="email"
                                       value="E-mail address" onBlur="if(this.value=='') this.value='E-mail address'"
                                       onFocus="if(this.value =='E-mail address' ) this.value=''">
                            </div>


                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="inputMessage">Your Message</label>
                                        <textarea class="form-control" rows="5" id="inputMessage" name="content"
                                                  onBlur="if(this.value=='') this.value='Message'"
                                                  onFocus="if(this.value =='Message' ) this.value=''">Message</textarea>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn-default btn-cf-submit">SUBMIT</button>
                        </form>
                    </div>


                </div>
            </div>
        </div>
    </div>

    <div class="bot1_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">

                    <div class="logo2_wrapper">
                        <a href="index.html" class="logo2">
                            <img src="{!! asset('web/images/logo_lk.png') !!}" alt="" class="img-responsive">
                        </a>
                    </div>

                    {{--                    <p>--}}
                    {{--                        Sed porttitor lectus nibh. Donec rutrum congue leo eget malesuada. Curabitur non nulla sit amet--}}
                    {{--                        nisl tempus convallis quis ac lectus. Donec sollicitudin molestie malesuada.Vestibulum ac diam .--}}
                    {{--                    </p>--}}

                    <div class="location1"><br>Kurunagala, Sri Lanka</div>

                    <div class="phone1">0000000</div>

                    <div class="mail1"><a href="#">laksriradio@gmail.com</a></div>

                </div>
                <div class="col-sm-3">

                    <div class="bot1_title">POPULAR TAGS</div>

                    <ul class="tags1 clearfix">
                        <li><a href="#">Songs</a></li>
                        <li><a href="#">90's POP</a></li>
                        <li><a href="#">Classical</a></li>
                        <li><a href="#">70's Hits</a></li>
                        <li><a href="#">BnS</a></li>
                        <li><a href="#">Daddy</a></li>
                    </ul>

                    <div class="bot1_title">MAILING LIST</div>

                    <div class="newsletter_block">
                        <div class="txt1">

                        </div>
                        <div class="newsletter-wrapper clearfix">
                            <form class="newsletter" action="javascript:void(0);">
                                <input type="text" name="s" value='Email Address'
                                       onBlur="if(this.value=='') this.value='Email Address'"
                                       onFocus="if(this.value =='Email Address' ) this.value=''">
                                <a href="javascript:void(0);"></a>
                            </form>
                        </div>
                        <div class="txt2">We respect your privacy</div>
                    </div>

                </div>
                <div class="col-sm-4 col-sm-offset-1">

                    <div class="bot1_title">LATEST NEWS</div>

                    <div class="latest1">
                        <a href="#" class="clearfix">
                            <figure><img src="{!! asset('web/images/latest01.jpg') !!}" alt=""></figure>
                            <div class="caption">
                                <div class="txt1">
                                    යන යන තැන අරන් යන්න,යන යන තැන සිංදු අහන්න,දැන් ලක් ශ්‍රි රෙඩියෝ ඔබේ සාක්කුවට
                                </div>
                                <div class="txt2">{!! date('YYYY-mm-dd') !!}</div>
                            </div>
                        </a>
                    </div>

                    <div class="latest1">
                        <a href="#" class="clearfix">
                            <figure><img src="{!! asset('web/images/latest02.jpg') !!}" alt=""></figure>
                            <div class="caption">
                                <div class="txt1">පසුගිය දිනයන් තුල විකාශන කරනු ලබු වැඩසටහන් අපගේ youtube නාලිකාව ඔස්සේ
                                    ඔබට සවන් දිය හැක
                                </div>
                                <div class="txt2">{!! date('YYYY-mm-dd') !!}</div>
                            </div>
                        </a>
                    </div>

                    <div class="latest1 last">
                        <a href="#" class="clearfix">
                            <figure><img src="{!! asset('web/images/latest03.jpg') !!}" alt=""></figure>
                            <div class="caption">
                                <div class="txt1">
                                    බෝ සිසිල වැඩසටහනට ඔබේ දායකත්වය සැපයිය හැකි යි
                                </div>
                                <div class="txt2">{!! date('YYYY-mm-dd') !!}</div>
                            </div>
                        </a>
                    </div>

                    <a href="#" class="btn-default btn3">READ MORE</a>

                </div>
            </div>
        </div>
    </div>

    <div class="bot2_wrapper">
        <div class="container">
            Copyright © {!! date('Y') !!} Designed by: <a rel="nofollow" href="https://m.facebook.com/profile.php?id=100012447918046"
                                                          target="_blank"><b>VTECH</b></a>
        </div>
    </div>

</div>
<script src="{!! asset("web/js/jquery.js") !!}"></script>
<script src="{!! asset("web/js/jquery-migrate-1.2.1.min.js") !!}"></script>
<script src="{!! asset("web/js/jquery.easing.1.3.js") !!}"></script>
<script src="{!! asset("web/js/bootstrap.min.js") !!}"></script>
<script src="{!! asset("web/js/superfish.js") !!}"></script>
<script src="{!! asset("web/js/camera.js") !!}"></script>
<script src="{!! asset("web/js/mediaelement-and-player.js") !!}"></script>
<script src="{!! asset("web/js/slick.min.js") !!}"></script>
<script src="{!! asset("web/js/jquery.jrumble.1.3.min.js") !!}"></script>
<script src="{!! asset("web/js/jquery.sticky.js") !!}"></script>
<script src="{!! asset("web/js/jquery.queryloader2.js") !!}"></script>
<script src="{!! asset("web/js/jquery.appear.js") !!}"></script>
<script src="{!! asset("web/js/jquery.ui.totop.js") !!}"></script>
<script src="{!! asset("web/js/jquery.equalheights.js") !!}"></script>
<script src="{!! asset("web/js/jquery.caroufredsel.js") !!}"></script>
<script src="{!! asset("web/js/jquery.touchSwipe.min.js") !!}"></script>
<script src="{!! asset("web/js/SmoothScroll.js") !!}"></script>
<script src="{!! asset("web/js/cform.js") !!}"></script>
<script src="{!! asset("web/js/scripts.js") !!}"></script>

</body>
</html>

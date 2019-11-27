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
                                    <li class="sub-menu sub-menu-1"><a href="#home">Home<em></em></a>
                                        <ul>
                                            <li><a href="index.html">RED STYLE</a></li>
                                            <li><a href="../Black-Style/index.html">BLACK STYLE</a></li>

                                        </ul>
                                    </li>
                                    <li><a href="#featured">FEATURED</a></li>
                                    <li><a href="#collection">Collection</a></li>
                                    <li class="sub-menu sub-menu-1"><a href="about.html">pages<em></em></a>
                                        <ul>
                                            <li><a href="about.html">ABOUT US</a></li>
                                            <li><a href="artists.html">ARTISTS</a></li>
                                            <li><a href="blog.html">BLOG</a></li>
                                            <li><a href="post.html">BLOG POST</a></li>
                                            <li><a href="channel.html">CHANNEL</a></li>
                                            <li><a href="styles.html">STYLES</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#testimonial">Testimonial</a></li>
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

            <div class="title1 animated" data-animation="fadeInUp" data-animation-delay="100">Listen All Music On Radio
                FM - <b>102.1</b></div>

            <div class="kand1 animated" data-animation="fadeInUp" data-animation-delay="200"></div>

            <div class="title2 animated" data-animation="fadeInUp" data-animation-delay="300">FEATURED PODCASTS</div>


        </div>


        <div class="slick-slider-wrapper">
            <div class="container">
                <div class="slick-slider slider center">
                    <div>
                        <div class="slick-slider-inner">
                            <figure><img src="{!! asset('web/images/banner/banner1.jpg') !!}" alt=""
                                         class="img-responsive"></figure>
                            <div class="caption">
                                <div class="txt1"><span>Music - John Coltrain</span></div>
                                <div class="txt2"><span>The Dream Of My Life</span></div>
                                <div class="txt3"><a href="#" class="btn-default btn1">MORE EPISODES</a></div>
                            </div>
                            <div class="slick-slider-overlay"></div>
                        </div>
                    </div>
                    <div>
                        <div class="slick-slider-inner">
                            <figure><img src="{!! asset('web/images/banner/banner2.jpg') !!}" alt=""
                                         class="img-responsive"></figure>
                            <div class="caption">
                                <div class="txt1"><span>Music - Janette Colins</span></div>
                                <div class="txt2"><span>The Music Is My Life</span></div>
                                <div class="txt3"><a href="#" class="btn-default btn1">MORE EPISODES</a></div>
                            </div>
                            <div class="slick-slider-overlay"></div>
                        </div>
                    </div>
                    <div>
                        <div class="slick-slider-inner">
                            <figure><img src="{!! asset('web/images/banner/banner3.jpg') !!}" alt=""
                                         class="img-responsive"></figure>
                            <div class="caption">
                                <div class="txt1"><span>Music - Marianna Johns</span></div>
                                <div class="txt2"><span>Bing & Bong</span></div>
                                <div class="txt3"><a href="#" class="btn-default btn1">MORE EPISODES</a></div>
                            </div>
                            <div class="slick-slider-overlay"></div>
                        </div>
                    </div>
                    <div>
                        <div class="slick-slider-inner">
                            <figure><img src="{!! asset('web/images/banner/banner4.jpg') !!}" alt=""
                                         class="img-responsive"></figure>
                            <div class="caption">
                                <div class="txt1"><span>Music - Lino Ventura</span></div>
                                <div class="txt2"><span>La Prima Di Casta</span></div>
                                <div class="txt3"><a href="#" class="btn-default btn1">MORE EPISODES</a></div>
                            </div>
                            <div class="slick-slider-overlay"></div>
                        </div>
                    </div>
                    <div>
                        <div class="slick-slider-inner">
                            <figure><img src="{!! asset('web/images/banner/banner5.jpg') !!}" alt=""
                                         class="img-responsive"></figure>
                            <div class="caption">
                                <div class="txt1"><span>Music - Amanda Geferson</span></div>
                                <div class="txt2"><span>Non Troppo Di Piano</span></div>
                                <div class="txt3"><a href="#" class="btn-default btn1">MORE EPISODES</a></div>
                            </div>
                            <div class="slick-slider-overlay"></div>
                        </div>
                    </div>

                    <div>
                        <div class="slick-slider-inner">
                            <figure><img src="{!! asset('web/images/banner/banner6.jpg') !!}" alt=""
                                         class="img-responsive"></figure>
                            <div class="caption">
                                <div class="txt1"><span>Music - Arturo Chiritto</span></div>
                                <div class="txt2"><span>You Are My Life</span></div>
                                <div class="txt3"><a href="#" class="btn-default btn1">MORE EPISODES</a></div>
                            </div>
                            <div class="slick-slider-overlay"></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>


        <div class="container">

            <div class="title2 animated" data-animation="fadeInUp" data-animation-delay="100">POPULAR ONLINE RADIOS
            </div>

            <div class="title3 animated" data-animation="fadeInUp" data-animation-delay="200">Lorem ipsum dolor sit amet
                concateur non tropp sit namo, allegro sustenuto al prada bravo pensare, chicco milo naturo<br>el spresso
                concateur non value maro noro strata.
            </div>

            <br><br><br>

            <div class="radios animated" data-animation="fadeInUp" data-animation-delay="300">
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

            <div class="title1 animated" data-animation="fadeInUp" data-animation-delay="100">Download it from
                www.RadioOne.com
            </div>

            <div class="title2 animated" data-animation="fadeInUp" data-animation-delay="200">BEST VINIL COLLECTION
            </div>

            <div class="title3 animated" data-animation="fadeInUp" data-animation-delay="300">Lorem ipsum dolor sit amet
                concateur non tropp sit namo, allegro sustenuto al prada bravo pensare, chicco milo naturo<br>el spresso
                concateur non value maro noro strata. notn troppo.
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
                        <div class="best_list">
                            <div class="clearfix">
                                <div class="right">2.25 / min</div>
                                <div class="left"><span>1</span>. The dream of my life</div>
                            </div>
                            <div class="clearfix">
                                <div class="right">2.35 / min</div>
                                <div class="left"><span>2</span>. Lorem ipsum dolor</div>
                            </div>
                            <div class="clearfix">
                                <div class="right">1.35 / min</div>
                                <div class="left"><span>3</span>. Concateur al duro</div>
                            </div>
                            <div class="clearfix">
                                <div class="right">3.05 / min</div>
                                <div class="left"><span>4</span>. Monreo del mundo</div>
                            </div>
                            <div class="clearfix">
                                <div class="right">2.48 / min</div>
                                <div class="left"><span>5</span>. Mine lorem ipusm</div>
                            </div>
                            <div class="clearfix">
                                <div class="right">1.55 / min</div>
                                <div class="left"><span>6</span>. Amoro set amondo</div>
                            </div>
                            <div class="clearfix">
                                <div class="right">2.48 / min</div>
                                <div class="left"><span>7</span>. Arturo dio pincalo seto</div>
                            </div>
                            <div class="clearfix">
                                <div class="right">1.38 / min</div>
                                <div class="left"><span>8</span>. Mango de primo</div>
                            </div>
                            <div class="clearfix">
                                <div class="right">2.39 / min</div>
                                <div class="left"><span>9</span>. My Luteccia</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="collection2">
        <div class="container">

            <div class="title1 animated" data-animation="fadeInUp" data-animation-delay="100">Download it from
                www.RadioOne.com
            </div>

            <div class="title2 animated" data-animation="fadeInUp" data-animation-delay="200">TOP LIST OF CD
                COLLECTION
            </div>

            <div class="title3 animated" data-animation="fadeInUp" data-animation-delay="300">Lorem ipsum dolor sit amet
                concateur non tropp sit namo, allegro sustenuto al prada bravo pensare, chicco milo naturo<br>el spresso
                concateur non value maro noro strata. notn troppo.
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
                        <img src="{!! asset('web/images/speaker.jpg') !!}" alt="" class="img-responsive">
                        <div class="speaker-img"><img src="{!! asset('web/images/speaker.jpg') !!}" alt=""
                                                      class="img-responsive"></div>
                    </div>
                </div>
                <div class="col-sm-6">

                    <div id="testim_wrapper">

                        <div class="title1">What You say About us ?</div>
                        <div class="title2">ලක් ශ්‍රී රේඩියෝ </div>

                        <div id="testim">
                            <div class="carousel-box">
                                <div class="inner">
                                    <div class="carousel main">
                                        <ul>
                                            <li>
                                                <div class="testim">
                                                    <div class="testim_inner">
                                                        <div class="txt1">ලක් ශ්‍රී රේඩියෝ අපි 24/7 ම ඔබ සමග රැදී සිටින ගුවන්විදුලි නාලිකාවකි. කුමන
                                                        </div>
{{--                                                        <div class="txt2">Amanda Hane Doe</div>--}}
{{--                                                        <div class="txt3">Art Director</div>--}}
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="testim">
                                                    <div class="testim_inner">
                                                        <div class="txt1">“Lorem ispum dolor sit amet, concateur u naro
                                                            prado non troppo, amoro sit amet incorporate alido nado
                                                            sempre pensare. Sansunet trifono
                                                            terasimo nanto all trapo, ritenuto largo pensare.” 
                                                        </div>
                                                        <div class="txt2">Amanda Hane Doe</div>
                                                        <div class="txt3">Art Director</div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="testim">
                                                    <div class="testim_inner">
                                                        <div class="txt1">“Lorem ispum dolor sit amet, concateur u naro
                                                            prado non troppo, amoro sit amet incorporate alido nado
                                                            sempre pensare. Sansunet trifono
                                                            terasimo nanto all trapo, ritenuto largo pensare.” 
                                                        </div>
                                                        <div class="txt2">Amanda Hane Doe</div>
                                                        <div class="txt3">Art Director</div>
                                                    </div>
                                                </div>
                                            </li>


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
                    <img src="{!! asset('web/images/dancer.png') !!}" alt="" class="img-responsive dancer">
                </div>
                <div class="col-sm-6 col-sm-pull-6 animated" data-animation="fadeInLeft" data-animation-delay="200">

                    <div class="title1">Please send us your comments</div>

                    <div class="title2">CONTACT FORM</div>

                    <br>

                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed elementum felis, a semper orci.
                        Nam id odio vel nulla vestibulum gravida. Sed eu ex sem. Suspendisse vestibulum urna magna.
                        Suspendisse hendrerit risus vel orci cursus sodales. Phasellus facilisis rutrum sollicitudin.
                        Aenean sodales libero sit amet felis elementum fringilla.
                    </p>

                    <p>
                        Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
                        Nulla at justo non nunc varius elementum sed at elit. Nulla gravida laoreet ex nec vehicula.
                        Praesent vitae lectus tempus, eleifend neque ac, hendrerit magna.
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

                    <p>
                        Sed porttitor lectus nibh. Donec rutrum congue leo eget malesuada. Curabitur non nulla sit amet
                        nisl tempus convallis quis ac lectus. Donec sollicitudin molestie malesuada.Vestibulum ac diam .
                    </p>

                    <div class="location1">22 No. Gridgum Valley, Website St. <br>New York, USA</div>

                    <div class="phone1">+1 917 3386831</div>

                    <div class="mail1"><a href="#">site@gridgum.com</a></div>

                </div>
                <div class="col-sm-3">

                    <div class="bot1_title">POPULAR TAGS</div>

                    <ul class="tags1 clearfix">
                        <li><a href="#">Amazing</a></li>
                        <li><a href="#">Gridgum</a></li>
                        <li><a href="#">Themes</a></li>
                        <li><a href="#">Clean</a></li>
                        <li><a href="#">Responsiveness</a></li>
                        <li><a href="#">SEO</a></li>
                    </ul>

                    <div class="bot1_title">MAILING LIST</div>

                    <div class="newsletter_block">
                        <div class="txt1">Lorem ipsum dolor sit amet concateur non troppo sustenuto largo pensare.</div>
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
                                <div class="txt1">Lorem ipsum dolor sit amet, concateur un otto bravo netto, sustenuto
                                    non troppo.
                                </div>
                                <div class="txt2">January 17 - 2016</div>
                            </div>
                        </a>
                    </div>

                    <div class="latest1">
                        <a href="#" class="clearfix">
                            <figure><img src="{!! asset('web/images/latest02.jpg') !!}" alt=""></figure>
                            <div class="caption">
                                <div class="txt1">Lorem ipsum dolor sit amet, concateur un otto bravo netto, sustenuto
                                    non troppo.
                                </div>
                                <div class="txt2">February 11 - 2016</div>
                            </div>
                        </a>
                    </div>

                    <div class="latest1 last">
                        <a href="#" class="clearfix">
                            <figure><img src="{!! asset('web/images/latest03.jpg') !!}" alt=""></figure>
                            <div class="caption">
                                <div class="txt1">Lorem ipsum dolor sit amet, concateur un otto bravo netto, sustenuto
                                    non troppo.
                                </div>
                                <div class="txt2">March 21 - 2016</div>
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
            Copyright © {!! date('Y') !!} Designed by: <a rel="nofollow" href="https://gridgum.com/"
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

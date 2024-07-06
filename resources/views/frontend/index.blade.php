<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title> Lara E-Paper | A PHP Laravel Script </title>
    <meta name="Author" content="ThemesBazar.Com" />
    <meta name="Developed By" content="ThemesBazar.Com" />
    <meta name="Developer" content="ThemesBazar.Com" />
    <meta name="keywords"
        content="ThemesBazar, Online newspaper, bangla newspaper, bangla newspapers, bangla newspapers, bangla paper, bd newspaper, newspaper bd, newspaper bangladesh" />
    <meta http-equiv="Cache-Control" content="no-cache" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta name="distribution" content="Global">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="Content-Language" content="bn" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">


    <meta property="og:title" content="Epaper-ThemesBazar" />

    <meta property="og:image"
        content="https://laraepaper.themebazar.xyz/uploads/epaper/2024/03/06/images/page65e9a50a9f4b6-65e9a7593fc84.jpg" />

    <link rel="image_src"
        href="https://laraepaper.themebazar.xyz/uploads/epaper/2024/03/06/images/page65e9a50a9f4b6-65e9a7593fc84.jpg" />

    <meta property="og:url" content="shared/2024/03/06/images/page65e9a50a9f4b6-65e9a7593fc84.jpg" />

    <meta property="og:image:type" content="image/jpeg" />
    <meta name="description" content="This Is Epaper Website, if You Read full News Plz Click here." />



    <meta property="twitter:title" content="Epaper-ThemesBazar" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:image"
        content="https://laraepaper.themebazar.xyz/uploads/epaper/2024/03/06/images/page65e9a50a9f4b6-65e9a7593fc84.jpg" />

    <meta property="twitter:url" content="shared/2024/03/06/images/page65e9a50a9f4b6-65e9a7593fc84.jpg" />
    <meta property="twitter:image:type" content="image/jpeg" />








    <!-- icon -->
    <link rel="icon" type="image/png" href="https://laraepaper.themebazar.xyz/assets/images/32x32.png" />
    <!-- font awesome css -->
    <link rel="stylesheet" type="text/css"
        href="{{asset('frontend/asset/css/fontawesome.css')}}" />
    <!-- main css -->
    <link rel="stylesheet" href="{{asset('frontend/asset/css/main.css')}}" />

    <link rel="stylesheet" href="{{asset('frontend/asset/css/themebazar.css')}}" />

    <link rel="stylesheet" href="{{asset('frontend/asset/css/common.css')}}" />

    <!-- fonts -->
    <link rel="stylesheet" href="{{asset('frontend/asset/css/style.css')}}" />
    <!-- jquery js -->
    <script src="{{asset('frontend/asset/js/main.js')}}"></script>
    <!-- maplight js -->
    <script src="{{asset('frontend/asset/js/map-highlight.js')}}"></script>
    <script type="text/javascript">
        $(function() {
            $('.map').maphilight();
        });
    </script>
    <!-- main js -->
    <script type="text/javascript" src="{{asset('frontend/asset/js/jquery.min.js')}}"></script>
    <!-- datepicker -->
    <link rel="stylesheet" href="{{asset('frontend/asset/js/jquery-ui.js')}}">
    <script src="{{asset('frontend/asset/css/jquery-ui.css')}}"></script>
    <style type="text/css">
        .ui-datepicker-inline {
            width: auto !important;
            border-radius: 0px;
        }
    </style>

    <style type="text/css">
        @media (min-width: 0px) and (max-width: 400px) {
            .footerLogo {
                display: none !important;
            }
        }
    </style>
</head>

<body id="body">




    <div class="main-container" style="box-shadow: rgba(0, 3, 6, 1) 0 5px 15px;margin-top: 10px;margin-bottom: 10px;">
        <div class="header-div">
            <div class="header-div">

                <!-- header top -->
                <div class="top_header">
                    <table width="100%" cellspacing="0" cellpadding="0" border="0" style="margin-top: 0px;">
                        <tr>
                            <td>
                                <div class="social_icon">
                                    <ul class="list-unstyled" style="height: 32px;margin-left: 0;padding-left: 0">
                                        <li class="fb btn"><a href="#" target="_blank"><i class="fa fa-facebook"
                                                    aria-hidden="true"></i></a>
                                        </li>
                                        <li class="twit btn"><a href="#" target="_blank"><i class="fa fa-twitter"
                                                    aria-hidden="true"></i></a>
                                        </li>
                                        <li class="youtube btn"><a href="#" target="_blank"><i
                                                    class="fa fa-youtube-play" aria-hidden="true"></i>
                                            </a>
                                        </li>

                                    </ul>
                                </div>
                            </td>
                            <td>
                                <div class="main_logo navbar-brand">
                                    <span class="rounded">
                                        <a href="https://laraepaper.themebazar.xyz"><img
                                                src="https://laraepaper.themebazar.xyz/assets/images/logo.gif"></a>
                                    </span>
                                </div>
                            </td>
                            <td>
                                <div class="social_icon" style="text-align: right;margin-top: 15px; margin-right:5px">
                                    <ul class="list-unstyled" style="height: 32px;margin-left: 0;padding-left: 0">

                                        <li class="linkedin btn"><a href="#" target="_blank"><i
                                                    class="fa fa-linkedin-square" aria-hidden="true"></i></a>
                                        </li>

                                        <li class="pinterest btn"><a href="#" target="_blank"><i
                                                    class="fa fa-pinterest" aria-hidden="true"></i></a>
                                        </li>

                                        <li class="instagram btn"><a href="#" target="_blank"><i
                                                    class="fa fa-instagram" aria-hidden="true"></i></a>
                                        </li>

                                    </ul>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>

                <div class="main_menu">
                    <ul>
                        <li class="active_menu"><a href="/"><i class="fa fa-home" aria-hidden="true"></i>
                                প্রচ্ছদ </a></li>
                        <li><a href="#"><i class="fa fa-globe" aria-hidden="true"></i> অনলাইন সংস্করণ </a></li>

                        <li>
                            <a href="https://laraepaper.themebazar.xyz/all/pages/nogor-edition/2024-03-06"><i
                                    class="fa fa-book" aria-hidden="true"></i> সকল পৃষ্ঠা </a>
                        </li>
                        <li>
                            <a href="javascript::void(0)"
                                onclick='printPage("https://laraepaper.themebazar.xyz/uploads/epaper/2024/03/06/pages/page65e9a50a9f4b6");'><i
                                    class="fa fa-print" aria-hidden="true"></i> সম্পূর্ণ পৃষ্ঠা প্রিন্ট </a>

                        </li>
                        <li><a href="#"><i class="fa fa-calendar" aria-hidden="true"></i> বুধবার, ০৬ মার্চ ২০২৪
                                </p>
                                <input type="hidden" id="bangla_date" name="bangla_date"
                                    value="বুধবার, ০৬ মার্চ ২০২৪">
                            </a></li>


                    </ul>
                </div>

                <!-- header top end -->


                <!-- epaper_header_top_ad -->

                <!-- end epaper_header_top_ad -->



            </div>

            </br>

            <div class="row-div" style="overflow: hidden;">
                <!-- left paper div -->
                <div class="row-div-left" style="padding-left: 20px;width: 170px;margin-left: 0px;">
                    <div class="calendar_themesbazar"> সকল পাতা </div>
                    <div class="page_content">
                        <ul style="list-style: unset;padding: 0px; margin: 0px;">
                            <li>
                                <a style="text-decoration: none;"
                                    href="https://laraepaper.themebazar.xyz/nogor-edition/2024-03-06/1">
                                    <div class="page_number">
                                        ১
                                    </div>

                                    <img src="https://laraepaper.themebazar.xyz/uploads/epaper/2024/03/06/thumb/page65e9a50a9f4b6"
                                        style="width: 100%">
                                    <!--
          প্রথম পাতা
          -->
                                </a>
                            </li>
                            <li>
                                <a style="text-decoration: none;"
                                    href="https://laraepaper.themebazar.xyz/nogor-edition/2024-03-06/2">
                                    <div class="page_number">
                                        ২
                                    </div>

                                    <img src="https://laraepaper.themebazar.xyz/uploads/epaper/2024/03/06/thumb/page65e9a5346259b"
                                        style="width: 100%">
                                    <!--
          ২য় পাতা
          -->
                                </a>
                            </li>
                            <li>
                                <a style="text-decoration: none;"
                                    href="https://laraepaper.themebazar.xyz/nogor-edition/2024-03-06/3">
                                    <div class="page_number">
                                        ৩
                                    </div>

                                    <img src="https://laraepaper.themebazar.xyz/uploads/epaper/2024/03/06/thumb/page65e9a54ea8d6b"
                                        style="width: 100%">
                                    <!--
          ৩য় পাতা
          -->
                                </a>
                            </li>
                            <li>
                                <a style="text-decoration: none;"
                                    href="https://laraepaper.themebazar.xyz/nogor-edition/2024-03-06/4">
                                    <div class="page_number">
                                        ৪
                                    </div>

                                    <img src="https://laraepaper.themebazar.xyz/uploads/epaper/2024/03/06/thumb/page65e9a55e6af59"
                                        style="width: 100%">
                                    <!--
          ৪র্থ পাতা
          -->
                                </a>
                            </li>
                            <li>
                                <a style="text-decoration: none;"
                                    href="https://laraepaper.themebazar.xyz/nogor-edition/2024-03-06/5">
                                    <div class="page_number">
                                        ৫
                                    </div>

                                    <img src="https://laraepaper.themebazar.xyz/uploads/epaper/2024/03/06/thumb/page65e9a56d767fd"
                                        style="width: 100%">
                                    <!--
          ৫ম পাতা
          -->
                                </a>
                            </li>
                            <li>
                                <a style="text-decoration: none;"
                                    href="https://laraepaper.themebazar.xyz/nogor-edition/2024-03-06/6">
                                    <div class="page_number">
                                        ৬
                                    </div>

                                    <img src="https://laraepaper.themebazar.xyz/uploads/epaper/2024/03/06/thumb/page65e9a57ad4eb1"
                                        style="width: 100%">
                                    <!--
          ৬ষ্ঠ পাতা
          -->
                                </a>
                            </li>
                            <li>
                                <a style="text-decoration: none;"
                                    href="https://laraepaper.themebazar.xyz/nogor-edition/2024-03-06/7">
                                    <div class="page_number">
                                        ৭
                                    </div>

                                    <img src="https://laraepaper.themebazar.xyz/uploads/epaper/2024/03/06/thumb/page65e9a58821be5"
                                        style="width: 100%">
                                    <!--
          ৭ম পাতা
          -->
                                </a>
                            </li>
                            <li>
                                <a style="text-decoration: none;"
                                    href="https://laraepaper.themebazar.xyz/nogor-edition/2024-03-06/8">
                                    <div class="page_number">
                                        ৮
                                    </div>

                                    <img src="https://laraepaper.themebazar.xyz/uploads/epaper/2024/03/06/thumb/page65e9a593a320d"
                                        style="width: 100%">
                                    <!--
          ৮ম পাতা
          -->
                                </a>
                            </li>
                        </ul>



                    </div>
                    </br>
                    <img src="https://laraepaper.themebazar.xyz/assets/images/ad250.gif" width="100%"
                        height="auto"> </br></br>

                    <img src="https://laraepaper.themebazar.xyz/assets/images/ad250.gif" width="100%"
                        height="auto"> </br></br>

                    <img src="https://laraepaper.themebazar.xyz/assets/images/ad250.gif" width="100%"
                        height="auto"> </br>


                </div>











                <!-- main paper div -->
                <div class="row-div-left" style="padding-left: 10px;">
                    <div>


                        <!-- content -->
                        <div class="row-div-left">

                            <table style="width: 100%; margin: 0px 0px 2px 0px">
                                <tr>
                                    <td>
                                        <center>
                                            <div class="pagination" style="margin: 0px;padding: 5px">
                                                <a style="margin-left: 0px;"
                                                    href="https://laraepaper.themebazar.xyz/nogor-edition/2024-03-06/0">&laquo;</a>
                                                <a class="active"
                                                    href="https://laraepaper.themebazar.xyz/nogor-edition/2024-03-06/1">1</a>
                                                <a class=""
                                                    href="https://laraepaper.themebazar.xyz/nogor-edition/2024-03-06/2">2</a>
                                                <a class=""
                                                    href="https://laraepaper.themebazar.xyz/nogor-edition/2024-03-06/3">3</a>
                                                <a class=""
                                                    href="https://laraepaper.themebazar.xyz/nogor-edition/2024-03-06/4">4</a>
                                                <a class=""
                                                    href="https://laraepaper.themebazar.xyz/nogor-edition/2024-03-06/5">5</a>
                                                <a class=""
                                                    href="https://laraepaper.themebazar.xyz/nogor-edition/2024-03-06/6">6</a>
                                                <a class=""
                                                    href="https://laraepaper.themebazar.xyz/nogor-edition/2024-03-06/7">7</a>
                                                <a class=""
                                                    href="https://laraepaper.themebazar.xyz/nogor-edition/2024-03-06/8">8</a>
                                                <a
                                                    href="https://laraepaper.themebazar.xyz/nogor-edition/2024-03-06/2">&raquo;</a>
                                            </div>
                                        </center>
                                    </td>
                                </tr>
                            </table>

                            <div class="left-content">

                                <!-- main page -->
                                <div class="main-img-div"
                                    style="padding-left: 20px;padding-right: 15px;padding-bottom: 5px">
                                    <img src="https://laraepaper.themebazar.xyz/uploads/epaper/2024/03/06/pages/page65e9a50a9f4b6"
                                        usemap="#enewspaper" class="map" />

                                    <map name="enewspaper">



                                        <area shape="rect"
                                            coords="11.052631578947,137.53228621291,279.26315789474,469.4520069808"
                                            data-image="page65e9a50a9f4b6-65e9a69fd7f5b.jpg" class="main-img"
                                            onclick="modalOpen('page65e9a50a9f4b6-65e9a69fd7f5b.jpg','uploads/epaper/2024/03/06/images','page65e9a57ad4eb1-65e9a7e6c76f3.jpg','next', '728')" />


                                        <area shape="rect"
                                            coords="281.47368421053,136.57940663176,419.63157894737,469.13438045375"
                                            data-image="page65e9a50a9f4b6-65e9a6b9b32fd.jpg" class="main-img"
                                            onclick="modalOpen('page65e9a50a9f4b6-65e9a6b9b32fd.jpg','uploads/epaper/2024/03/06/images','page65e9a58821be5-65e9a8cee299b.jpg','next', '375')" />


                                        <area shape="rect"
                                            coords="421.10526315789,135.94415357766,695.94736842105,469.13438045375"
                                            data-image="page65e9a50a9f4b6-65e9a6db9f7ed.jpg" class="main-img"
                                            onclick="modalOpen('page65e9a50a9f4b6-65e9a6db9f7ed.jpg','uploads/epaper/2024/03/06/images','page65e9a58821be5-65e9a8fec505c.jpg','next', '746')" />


                                        <area shape="rect"
                                            coords="9.9473684210526,470.0872600349,140.36842105263,889.35427574171"
                                            data-image="page65e9a50a9f4b6-65e9a6fa07565.jpg" class="main-img"
                                            onclick="modalOpen('page65e9a50a9f4b6-65e9a6fa07565.jpg','uploads/epaper/2024/03/06/images','page65e9a58821be5-65e9a824162ed.jpg','next', '354')" />


                                        <area shape="rect"
                                            coords="145.52631578947,470.72251308901,557.05263157895,675.2739965096"
                                            data-image="page65e9a50a9f4b6-65e9a70a1e732.jpg" class="main-img"
                                            onclick="modalOpen('page65e9a50a9f4b6-65e9a70a1e732.jpg','uploads/epaper/2024/03/06/images','page65e9a58821be5-65e9a87e8cc2a.jpg','next', '1117')" />


                                        <area shape="rect"
                                            coords="561.47368421053,471.35776614311,698.15789473684,676.22687609075"
                                            data-image="page65e9a50a9f4b6-65e9a72190eae.jpg" class="main-img"
                                            onclick="modalOpen('page65e9a50a9f4b6-65e9a72190eae.jpg','uploads/epaper/2024/03/06/images','page65e9a58821be5-65e9a8b898abd.jpg','next', '371')" />


                                        <area shape="rect"
                                            coords="145.52631578947,676.22687609075,280.36842105263,889.03664921466"
                                            data-image="page65e9a50a9f4b6-65e9a73490b00.jpg" class="main-img"
                                            onclick="modalOpen('page65e9a50a9f4b6-65e9a73490b00.jpg','uploads/epaper/2024/03/06/images','page65e9a58821be5-65e9a8412be10.jpg','next', '366')" />


                                        <area shape="rect"
                                            coords="285.15789473684,675.9092495637,557.78947368421,889.03664921466"
                                            data-image="page65e9a50a9f4b6-65e9a743db693.jpg" class="main-img"
                                            onclick="modalOpen('page65e9a50a9f4b6-65e9a743db693.jpg','uploads/epaper/2024/03/06/images','page65e9a58821be5-65e9a85793dba.jpg','next', '740')" />


                                        <area shape="rect"
                                            coords="562.57894736842,677.815008726,697.05263157895,889.98952879581"
                                            data-image="page65e9a50a9f4b6-65e9a7593fc84.jpg" class="main-img"
                                            onclick="modalOpen('page65e9a50a9f4b6-65e9a7593fc84.jpg','uploads/epaper/2024/03/06/images','page65e9a58821be5-65e9a8669914a.jpg','next', '365')" />
                                    </map>

                                </div>
                                <!-- end main page -->

                                <!-- page trigger -->
                                <table width="100%" class="page-trigger"
                                    style="padding: 10px 10px 0px 10px;margin-left: 0px">
                                    <tr>
                                        <td>
                                            <div class="next_page">
                                                <a style="float: left"
                                                    href="https://laraepaper.themebazar.xyz/all/pages/nogor-edition/2024-03-06"
                                                    style="padding: 8px">সকল পাতা </a>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="next_page">
                                                <a href="https://laraepaper.themebazar.xyz/nogor-edition/2024-03-06/2"
                                                    class="pull-right"> পরের পাতা </a>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                                <br>
                                <!-- end page trigger -->

                            </div>
                        </div>
                        <!-- end content -->


                        <!-- The Modal -->
                        <div id="newsPopup" class="modal">
                            <div class="modal-content customized_content loading_img" id="modal-content">
                                <div class="modal-head">
                                    <table width="100%" class="modal_table">
                                        <tr>

                                            <td class="text-center">
                                                <div class="model_images">
                                                    <a href="https://laraepaper.themebazar.xyz"><img
                                                            src="https://laraepaper.themebazar.xyz/assets/images/logo.gif"></a>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="modal_top_menu">
                                                    <button class="sahre_on_print type="button"
                                                        onclick='printDiv("বুধবার, ০৬ মার্চ ২০২৪");' name="b_print"
                                                        class="btn btn-success"><i class="fa fa-print"
                                                            aria-hidden="true"></i> প্রিন্ট </button>

                                                    <button class="sahre_on_print copy-button-class"><i
                                                            class="fa fa-link"></i> লিংক কপি </button>


                                                    <button class="sahre_on_print downloadImage"><i
                                                            class="fa fa-cloud-download"></i> ডাউনলোড </button>


                                                </div>
                                            </td>

                                            <td valign="top">
                                                <div class="close_icon">
                                                    <button class="btn btn-danger close" title="close"><i
                                                            class="fa fa-times"></i></button>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </div>


                                <div class="modal-body text-center">

                                    <div id='DivIdToPrint' class="modal-main-img" id="newsImg"
                                        style="overflow-x: auto;">

                                        <center>
                                            <img src="" id="singleNewsImg" class="image_view">
                                            <img src="" class="related_image">
                                        </center>

                                    </div>


                                    <div class="modal_footer">

                                        <div class="social_share">


                                            <button type="button" class="btn btn-default share_on_fb">
                                                <i class="fa fa-facebook" style="color: white"
                                                    aria-hidden="true"></i></button>
                                            <button type="button" class="btn btn-default share_on_twt">
                                                <i class="fa fa-twitter" style="color: white"
                                                    aria-hidden="true"></i></button>

                                            <button type="button" class="btn btn-default share_on_linkedin">

                                                <i class="fa fa-linkedin" style="color: white"
                                                    aria-hidden="true"></i>
                                            </button>


                                            <button type="button" class="btn btn-default share_on_whats">
                                                <i class="fa fa-whatsapp" style="color: white"
                                                    aria-hidden="true"></i>
                                            </button>

                                        </div>


                                        <div class="next_part">
                                            <button class="btn btn-info trigger-prev prvs"><i
                                                    class="fa fa-angle-double-left" aria-hidden="true"></i> খবরের
                                                পূর্ববর্তী অংশ </button>
                                            <button class="btn btn-info trigger-next nxt"> খবরের পরবর্তী অংশ <i
                                                    class="fa fa-angle-double-right" aria-hidden="true"></i> </button>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                        <!--modal end-->


                        <input type="hidden" class="get_pagination" value="8">
                        <input type="hidden" class="current_date" value="2024-03-06">
                        <input type="hidden" class="page_edition" value="nogor-edition">
                        <input type="hidden" class="current_page" value="1">
                        <img src="" class="main_image" style="display: none">


                        <!-- js for the page -->
                        <script type="text/javascript">
                            /*==Get the modal==*/
                            var modal = document.getElementById('newsPopup');
                            var body = document.getElementById('body');

                            /*==Get the button that opens the modal==*/
                            var btn = document.getElementById("myBtn");

                            /*==Get the <span> element that closes the modal==*/
                            var button = document.getElementsByClassName("close")[0];


                            /*################################
                            ## click on modal (x) close ##
                            #################################*/
                            button.onclick = function() {
                                /*==remove related image class==*/
                                var remove_image_item = document.getElementsByClassName("image_view")[0].innerHTML = "";
                                $(".modal-body .image_view").attr("src", remove_image_item);

                                var remove_related_item = document.getElementsByClassName("related_image")[0].innerHTML = "";
                                $(".modal-body .related_image").attr("src", remove_related_item);

                                modal.style.display = "none";
                                document.getElementById("body").style.overflow = 'scroll';
                            }


                            /*##################################
                            ## click on outside modal close ##
                            ###################################*/
                            window.onclick = function(event) {
                                if (event.target == modal) {
                                    /*==remove related image class==*/
                                    var remove_image_item = document.getElementsByClassName("image_view")[0].innerHTML = "";
                                    $(".modal-body .image_view").attr("src", remove_image_item);

                                    var remove_related_item = document.getElementsByClassName("related_image")[0].innerHTML = "";
                                    $(".modal-body .related_image").attr("src", remove_related_item);

                                    $('.image_view').show();
                                    modal.style.display = "none";
                                    $('.nxt').hide();
                                    $('.prvs').hide();
                                    document.getElementById("body").style.overflow = 'scroll';
                                }
                            }



                            /*##################################
                            ## modal open ##
                            ###################################*/
                            function modalOpen(image, image_location, related_item, image_relation, image_width) {

                                modal.style.display = "block";

                                var site_url = $('.site_url').val();

                                /*==modal width set==*/
                                var modal_width = image_width;
                                if (modal_width > 1050) {
                                    modal_width = 1050;
                                }

                                if (modal_width < 750) {
                                    modal_width = 750;
                                }

                                document.getElementById("modal-content").style.width = modal_width + 'px';
                                $('.related_image').hide();

                                var main_image = image_location + '/' + image;
                                $(".main_image").attr('src', main_image);


                                var image = site_url + '/' + image_location + '/' + image;
                                $(".modal-body .image_view").attr("src", image);


                                /*==next prev button==*/
                                if (related_item != '') {
                                    var related_image = site_url + '/' + image_location + '/' + related_item;
                                    $(".modal-body .related_image").attr("src", related_image);

                                    if (image_relation == 'next') {

                                        /*##################################
                                        ## click on next button ##
                                        ###################################*/
                                        $('.nxt').show();
                                        $(".nxt").click(function() {
                                            $('.prvs').show();
                                            $('.nxt').hide();
                                            $('.image_view').hide();
                                            $('.related_image').show();

                                            var modal_width = $('.related_image').width();
                                            if (modal_width > 1050) {
                                                modal_width = 1050;
                                            }
                                            if (modal_width < 750) {
                                                modal_width = 750;
                                            }
                                            document.getElementById("modal-content").style.width = modal_width + 'px';
                                        });


                                        /*##################################
                                        ## click on previous ##
                                        ###################################*/
                                        $(".prvs").click(function() {
                                            $('.nxt').show();
                                            $('.prvs').hide();
                                            $('.image_view').show();
                                            $('.related_image').hide();

                                            var modal_width = $('.image_view').width();
                                            if (modal_width > 1050) {
                                                modal_width = 1050;
                                            }
                                            if (modal_width < 750) {
                                                modal_width = 750;
                                            }
                                            document.getElementById("modal-content").style.width = modal_width + 'px';
                                        });
                                    }
                                    if (image_relation == 'previous') {
                                        $('.prvs').show();

                                        $(".prvs").click(function() {
                                            $('.prvs').hide();
                                            $('.nxt').show();
                                            $('.image_view').hide();
                                            $('.related_image').show();

                                            var modal_width = $('.related_image').width();
                                            if (modal_width > 1050) {
                                                modal_width = 1050;
                                            }
                                            if (modal_width < 750) {
                                                modal_width = 750;
                                            }
                                            document.getElementById("modal-content").style.width = modal_width + 'px';
                                        });

                                        $(".nxt").click(function() {
                                            $('.nxt').hide();
                                            $('.prvs').show();
                                            $('.image_view').show();
                                            $('.related_image').hide();

                                            var modal_width = $('.image_view').width();
                                            if (modal_width > 1050) {
                                                modal_width = 1050;
                                            }
                                            if (modal_width < 750) {
                                                modal_width = 750;
                                            }
                                            document.getElementById("modal-content").style.width = modal_width + 'px';

                                        });
                                    }

                                }

                            }


                            /*##################################
                            ## click on close button ##
                            ###################################*/
                            $(".close").click(function() {
                                $('.nxt').hide();
                                $('.prvs').hide();
                                $('.image_view').show();

                            });
                        </script>
                        <!--end modal-->



                        <!--pagination-->
                        <script src="https://laraepaper.themebazar.xyz/assets/js/jquery.paginate.js" type="text/javascript"></script>
                        <script type="text/javascript">
                            $(function() {

                                var total_pages = $('.get_pagination').val();
                                var current_page = $('.current_page').val();
                                var display_pages = total_pages;

                                if (total_pages > 24) {
                                    display_pages = 23;
                                }

                                $("#demo").paginate({
                                    count: total_pages,
                                    start: current_page,
                                    display: display_pages,
                                    border: false,
                                    text_color: '#888',
                                    background_color: '#EEE',
                                    text_hover_color: 'black',
                                    background_hover_color: '#CFCFCF'
                                });
                            });

                            function getPage(page) {

                                var page_edition = $('.page_edition').val();
                                var current_date = $('.current_date').val();
                                var site_url = $('.site_url').val();

                                var request_url = site_url + '/' + page_edition + '/' + current_date + '/' + page;
                                window.location = request_url;
                            }
                        </script>
                        <!--pagination end-->



                        <!-- article print-->
                        <script type="text/javascript">
                            function printDiv(bangla_date) {
                                var newWin = window.open('', 'Print-Window');

                                var site_url = $(".site_url").val();

                                var main_image_link = $(".image_view").attr("src");
                                var main_image = site_url + '/' + main_image_link;

                                var related_image_link = $(".related_image").attr("src");
                                var related_image = site_url + '/' + related_image_link;

                                newWin.document.open();

                                if (related_image_link != '') {
                                    newWin.document.write('<html><body onload="window.print()">' +
                                        '<center><img src="https://laraepaper.themebazar.xyz/assets/images/logo.gif" style="height:50px;" />' +
                                        '<p style="text-align:center;border-top:1px solid black;border-bottom:1px solid black;padding:5px;font-size:20px">' +
                                        bangla_date + '</p>' + '<img src=' + main_image_link + ' />' + '</center></body>' +
                                        '<body><center>' + '<img src=' + related_image_link + ' />' + '</center></body>' + '</html>');
                                } else {
                                    newWin.document.write('<html><body onload="window.print()">' +
                                        '<center><img src="https://laraepaper.themebazar.xyz/assets/images/logo.gif" style="height:50px;" />' +
                                        '<p style="text-align:center;border-top:1px solid black;border-bottom:1px solid black;padding:5px;font-size:20px">' +
                                        bangla_date + '</p>' + '<img src=' + main_image_link + ' />' + '</center></body></html>');
                                }

                                newWin.document.close();
                                setTimeout(function() {
                                    newWin.close();
                                }, 10);
                            }
                        </script>


                        <!-- share apis -->
                        <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                        <script type="text/javascript">
                            $('.share_on_fb').click(function() {
                                var fb_link = '/' + $(".main_image").attr("src");
                                var splitedfb = fb_link.split("images/");
                                var lengthfb = splitedfb.length;
                                var fb_link = splitedfb[lengthfb - 2];
                                var mainImage = splitedfb[lengthfb - 1];

                                var related_image = $(".related_image").attr("src");
                                var site_url = $(".site_url").val();
                                var current_date = $(".current_date").val();
                                if (related_image != '') {
                                    var splited = related_image.split("/");
                                    var length = splited.length;
                                    var related_image = splited[length - 1];

                                    var requested_url = site_url + fb_link + 'images/shared/' + mainImage + '/' + related_image;
                                    window.open('https://www.facebook.com/sharer/sharer.php?u=' + requested_url, '', 'window settings');
                                } else {
                                    var requested_url = site_url + fb_link + 'images/shared/' + mainImage;
                                    window.open('https://www.facebook.com/sharer/sharer.php?u=' + requested_url, '', 'window settings');
                                }

                            });



                            /*##################################
                          ## copy to clipborad ##
                          ###################################*/
                            function copyFunction() {
                                /* Get the text field */
                                var copyText = document.getElementById("copyInput");

                                /* Select the text field */
                                copyText.select();
                                copyText.setSelectionRange(0, 99999); /* For mobile devices */

                                /* Copy the text inside the text field */
                                navigator.clipboard.writeText(copyText.value);

                                /* Alert the copied text */
                                alert("Copied the text: " + copyText.value);
                            }
                            /*##################################
                              ## copy to clipborad new ##
                              ###################################*/
                            $(".copy-button-class").click(function() {

                                var fb_link = $(".image_view").attr("src");
                                var splitedfb = fb_link.split("images/");
                                var lengthfb = splitedfb.length;
                                var fb_link = splitedfb[lengthfb - 2];
                                var mainImage = splitedfb[lengthfb - 1];

                                var related_image = $(".related_image").attr("src");
                                var site_url = $(".site_url").val();
                                var current_date = $(".current_date").val();



                                var share_base = fb_link + 'images/shared/' + mainImage;
                                copyToClipboard(share_base);

                            });

                            function copyToClipboard(text) {
                                navigator.clipboard.writeText(text);

                            }


                            $(".downloadImage").click(function() {
                                var link = document.createElement('a');
                                var fb_link = $(".image_view").attr("src");
                                var splitedfb = fb_link.split("images/");
                                var lengthfb = splitedfb.length;
                                var fb_link = splitedfb[lengthfb - 2];
                                var mainImage = splitedfb[lengthfb - 1];

                                var related_image = $(".related_image").attr("src");
                                var site_url = $(".site_url").val();
                                var current_date = $(".current_date").val();




                                link.href = fb_link + 'images/' + mainImage;
                                link.download = mainImage;
                                link.click();




                            });



                            $('.share_on_twt').click(function() {
                                var tw_link = '/' + $(".main_image").attr("src");
                                var tw_splited = tw_link.split("images/");
                                var tw_length = tw_splited.length;
                                var tw_link = tw_splited[tw_length - 2];
                                var tw_mainImage = tw_splited[tw_length - 1];

                                var tw_related_image = $(".related_image").attr("src");
                                var site_url = $(".site_url").val();
                                var current_date = $(".current_date").val();
                                if (tw_related_image != '') {
                                    var tw_related_splited = tw_related_image.split("/");
                                    var tw_related_length = tw_related_splited.length;
                                    var tw_related_image = tw_related_splited[tw_related_length - 1];

                                    var tw_requested_url = site_url + tw_link + 'images/shared/' + tw_mainImage + '/' +
                                    tw_related_image;
                                    window.open('https://twitter.com/intent/tweet?url=' + tw_requested_url, '', 'window settings');
                                } else {
                                    var tw_requested_url = site_url + tw_link + 'images/shared/' + tw_mainImage;
                                    window.open('https://twitter.com/intent/tweet?url=' + tw_requested_url, '', 'window settings');
                                }
                            });

                            $('.share_on_gplus').click(function() {
                                var gp_link = '/' + $(".main_image").attr("src");
                                var gp_splited = gp_link.split("images/");
                                var gp_length = gp_splited.length;
                                var gp_link = gp_splited[gp_length - 2];
                                var gp_mainImage = gp_splited[gp_length - 1];

                                var gp_related_image = $(".related_image").attr("src");
                                var site_url = $(".site_url").val();
                                var current_date = $(".current_date").val();
                                if (gp_related_image != '') {
                                    var gp_related_splited = gp_related_image.split("/");
                                    var gp_related_length = gp_related_splited.length;
                                    var gp_related_image = gp_related_splited[gp_related_length - 1];

                                    var gp_requested_url = site_url + gp_link + 'images/shared/' + gp_mainImage + '/' +
                                    gp_related_image;
                                    window.open('https://plus.google.com/share?url=' + gp_requested_url, '', 'window settings');
                                } else {
                                    var gp_requested_url = site_url + gp_link + 'images/shared/' + gp_mainImage;
                                    window.open('https://plus.google.com/share?url=' + gp_requested_url, '', 'window settings');
                                }
                            });





                            $('.share_on_whats').click(function() {
                                var tw_link = $(".image_view").attr("src");
                                var tw_splited = tw_link.split("images/");
                                var tw_length = tw_splited.length;
                                var tw_link = tw_splited[tw_length - 2];
                                var tw_mainImage = tw_splited[tw_length - 1];

                                var tw_related_image = $(".related_image").attr("src");
                                var site_url = $(".site_url").val();
                                var current_date = $(".current_date").val();

                                if (tw_related_image != '') {
                                    var tw_related_splited = tw_related_image.split("/");
                                    var tw_related_length = tw_related_splited.length;
                                    var tw_related_image = tw_related_splited[tw_related_length - 1];
                                    var tw_requested_url = tw_link + 'images/shared/' + tw_mainImage + '/' + tw_related_image;
                                    window.open('https://api.whatsapp.com/send?text=' + encodeURIComponent(tw_requested_url), '',
                                        'window settings');
                                } else {
                                    var tw_requested_url = tw_link + 'images/shared/' + tw_mainImage;
                                    window.open('https://api.whatsapp.com/send?text=' + encodeURIComponent(tw_requested_url), '',
                                        'window settings');
                                }
                            });




                            $('.share_on_linkedin').click(function() {
                                var linkedin_link = $(".image_view").attr("src");
                                var linkedin_splited = linkedin_link.split("images/");
                                var linkedin_length = linkedin_splited.length;
                                var linkedin_link = linkedin_splited[linkedin_length - 2];
                                var linkedin_mainImage = linkedin_splited[linkedin_length - 1];

                                var linkedin_related_image = $(".related_image").attr("src");
                                var site_url = $(".site_url").val();
                                var current_date = $(".current_date").val();

                                if (linkedin_related_image != '') {
                                    var linkedin_related_splited = linkedin_related_image.split("/");
                                    var linkedin_related_length = linkedin_related_splited.length;
                                    var linkedin_related_image = linkedin_related_splited[linkedin_related_length - 1];
                                    var linkedin_requested_url = linkedin_link + 'images/shared/' + linkedin_mainImage + '/' +
                                        linkedin_related_image;
                                    window.open('https://www.linkedin.com/sharing/share-offsite/?url=' + encodeURIComponent(
                                        linkedin_requested_url), '', 'window settings');
                                } else {
                                    var linkedin_requested_url = linkedin_link + 'images/shared/' + linkedin_mainImage;
                                    window.open('https://www.linkedin.com/sharing/share-offsite/?url=' + encodeURIComponent(
                                        linkedin_requested_url), '', 'window settings');
                                }
                            });




                            function printPage(printPage) {

                                var newWinPage = window.open('', 'Print-Window');

                                newWinPage.document.open();

                                newWinPage.document.write('<html><body onload="window.print()">' + '<center>' + '<img src=' + printPage +
                                    ' />' + '</center></body></html>');

                                newWinPage.document.close();
                                setTimeout(function() {
                                    newWinPage.close();
                                }, 10);
                            }
                        </script>
                        <!-- end share apis -->

                    </div>
                </div>

                <!-- search result not found messages -->
                <!-- end search result not found messages -->


                <!-- right sidebar -->
                <div class="row-div-right" style="padding-right: 20px;width: 210px;margin-right: 0px;">
                    <div class="right-content"
                        style="margin-top: 0px;background-color: white;border: none;padding: 0px !important;overflow: hidden;">



                        <!-- categories -->
                        <div class="add text-center" style="margin-top: 0px">
                            <div class="calendar_themesbazar">আজকের পত্রিকা</div>
                            <div class="category_content">
                                <ul style="list-style: none;padding: 0px;margin: 0px;text-align: left;">
                                    <li style="border-bottom: 1px solid #c5c5c5;padding: 8px 10px 8px 10px"><a
                                            style="font-size: 18px;color: black;text-decoration: none;"
                                            href="https://laraepaper.themebazar.xyz/nogor-edition/2024-03-06/1"> <i
                                                class="fa fa-hand-o-right" aria-hidden="true"></i> ১. প্রথম পাতা</a>
                                    </li>
                                    <li style="border-bottom: 1px solid #c5c5c5;padding: 8px 10px 8px 10px"><a
                                            style="font-size: 18px;color: black;text-decoration: none;"
                                            href="https://laraepaper.themebazar.xyz/nogor-edition/2024-03-06/2"> <i
                                                class="fa fa-hand-o-right" aria-hidden="true"></i> ২. ২য় পাতা</a></li>
                                    <li style="border-bottom: 1px solid #c5c5c5;padding: 8px 10px 8px 10px"><a
                                            style="font-size: 18px;color: black;text-decoration: none;"
                                            href="https://laraepaper.themebazar.xyz/nogor-edition/2024-03-06/3"> <i
                                                class="fa fa-hand-o-right" aria-hidden="true"></i> ৩. ৩য় পাতা</a></li>
                                    <li style="border-bottom: 1px solid #c5c5c5;padding: 8px 10px 8px 10px"><a
                                            style="font-size: 18px;color: black;text-decoration: none;"
                                            href="https://laraepaper.themebazar.xyz/nogor-edition/2024-03-06/4"> <i
                                                class="fa fa-hand-o-right" aria-hidden="true"></i> ৪. ৪র্থ পাতা</a>
                                    </li>
                                    <li style="border-bottom: 1px solid #c5c5c5;padding: 8px 10px 8px 10px"><a
                                            style="font-size: 18px;color: black;text-decoration: none;"
                                            href="https://laraepaper.themebazar.xyz/nogor-edition/2024-03-06/5"> <i
                                                class="fa fa-hand-o-right" aria-hidden="true"></i> ৫. ৫ম পাতা</a></li>
                                    <li style="border-bottom: 1px solid #c5c5c5;padding: 8px 10px 8px 10px"><a
                                            style="font-size: 18px;color: black;text-decoration: none;"
                                            href="https://laraepaper.themebazar.xyz/nogor-edition/2024-03-06/6"> <i
                                                class="fa fa-hand-o-right" aria-hidden="true"></i> ৬. ৬ষ্ঠ পাতা</a>
                                    </li>
                                    <li style="border-bottom: 1px solid #c5c5c5;padding: 8px 10px 8px 10px"><a
                                            style="font-size: 18px;color: black;text-decoration: none;"
                                            href="https://laraepaper.themebazar.xyz/nogor-edition/2024-03-06/7"> <i
                                                class="fa fa-hand-o-right" aria-hidden="true"></i> ৭. ৭ম পাতা</a></li>
                                    <li style="border-bottom: 1px solid #c5c5c5;padding: 8px 10px 8px 10px"><a
                                            style="font-size: 18px;color: black;text-decoration: none;"
                                            href="https://laraepaper.themebazar.xyz/nogor-edition/2024-03-06/8"> <i
                                                class="fa fa-hand-o-right" aria-hidden="true"></i> ৮. ৮ম পাতা</a></li>
                                </ul>
                            </div>
                        </div>



                        <!-- datepicker -->
                        <div class="calendar_themesbazar">পুরোনো সংখ্যা</div>
                        <div id="Datepicker1"></div>


                        <!-- sidebar ad 4 -->
                        </br>

                        <img src="https://laraepaper.themebazar.xyz/assets/images/ad250.gif" width="100%"
                            height="auto"> </br></br>

                        <img src="https://laraepaper.themebazar.xyz/assets/images/ad250.gif" width="100%"
                            height="auto"> </br>


                    </div>
                </div>

            </div>

            <!-- epaper_header_bottom_ad -->
            <!-- end epaper_header_bottom_ad -->


            <div class="footer_section" style="margin-top: 0px">
                <div class="footer_info">
                    <div style="width: 100%;" class="footer_texts">
                        <table style="width: 100%">
                            <tr>
                                <td style="width: 250px">
                                    <div class="footer_Logo"> <a href="https://laraepaper.themebazar.xyz"><img
                                                src="https://laraepaper.themebazar.xyz/assets/images/logo.gif"></a>
                                    </div>
                                </td>
                                <td>
                                    <div class="editorial">


                                        সম্পাদক ও প্রকাশক : হাবিবুর রহমান সুমন </br>
                                        নির্বাহী সম্পাদক : মতিউর রহমান রুমেল</br>
                                        বার্তা সম্পাদক : হুমাহুন কবির আখন্দ


                                    </div>
                                </td>

                                <td>
                                    <div class="address">
                                        অফিস : মিরপুর-১, ঢাকা, বাংলাদেশ
                                        </br>
                                        মোবাইল : ০১৭১১-০০০০০০, ০১৭১২-০০০০০০
                                        </br>
                                        ই-মেইল : info@yourdomain.com


                                    </div>
                                </td>

                            </tr>
                        </table>
                    </div>
                </div>

                <div class="footer_copyright">

                    <table style="width: 100%">
                        <tr>
                            <td>
                                <div class="copyright"> Copyright © Lara E-Paper . All right reserved. </div>
                            </td>
                            <td style="text-align:right">
                                <div class="developed"> Powered BY <a href="" target="_blank"> ThemesBazar.Com
                                    </a></div>
                            </td>

                        </tr>
                    </table>


                </div>

            </div>



        </div>



        <!-- datepicker -->
        <script type="text/javascript">
            jQuery(function() {
                var enableDays = ["2020-02-03", "2020-02-07", "2020-02-08", "2020-05-07", "2020-05-08", "2020-05-08",
                    "2020-05-08", "2020-05-27", "2020-05-26", "2023-06-21", "2023-06-22", "2023-06-23",
                    "2023-06-23", "2023-07-08", "2024-03-06"
                ];

                function enableAllTheseDays(date) {
                    var sdate = $.datepicker.formatDate('yy-mm-dd', date)
                    if ($.inArray(sdate, enableDays) != -1) {
                        return [true];
                    }
                    return [false];
                }
                $('#Datepicker1').datepicker({
                    dateFormat: 'yy-mm-dd',
                    beforeShowDay: enableAllTheseDays
                });
            })


            $(function() {
                $("#Datepicker1").datepicker();
                $("#Datepicker1").on("change", function() {
                    var archive_date = $(this).val();
                    var site_url = $(".site_url").val();
                    if (archive_date == '') {
                        alert('Please Select A Valid Date !');
                        window.reload();
                    }
                    if (archive_date != null) {
                        var request_url = site_url + '/nogor-edition/' + archive_date + '/1';
                        window.location = request_url;
                    }
                });
            });
        </script>


        <!-- search result not found -->
        <script type="text/javascript">
            $(function() {
                $('<div class="alert-box message_body">আপনি যে বিষয়টি অনুসন্ধান করছেন তা খুজে পাওয়া যায়নি !! আপনাকে ধন্যবাদ খবর অনুসন্ধান করার জন্য ।</div>')
                    .insertBefore('#message_not_found')
                    .delay(3000)
                    .fadeOut(4000, function() {
                        $(this).remove();
                    });
            });
        </script>

        <input type="hidden" class="site_url" value="https://laraepaper.themebazar.xyz">
        <input type="hidden" class="site_url_name" value="By Edition">
        <input type="hidden" class="current_url" value="By Edition">

</body>

</html>

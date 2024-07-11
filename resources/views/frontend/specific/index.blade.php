@extends('frontend.master')

@section('content')

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
                                    href="/nogor-edition/{{$post->date}}/{{ max($key_id - 1, 1) }}">&laquo;</a>



                                    @foreach($post->contentData as $key=>$item)
                                <a class="{{$key == $key_id-1 ? 'active' : ''}}"
                                    href="/nogor-edition/{{$post->date}}/{{$key+1}}">{{$key+1}}</a>
                                    @endforeach





                                <a href="/nogor-edition/{{$post->date}}/{{ min($key_id + 1, $post->contentData->count()) }}" >&raquo;</a>
                            </div>
                        </center>
                     </td>
                </tr>
            </table>

            <div class="left-content">

                <!-- main page -->
                <div class="main-img-div" id="printable-area" style="padding-left: 20px;padding-right: 15px;padding-bottom: 5px">
                    <img src="{{asset('uploads/' .$content_data->content)}}"
                        usemap="#enewspaper" class="map" />



                </div>
                <!-- end main page -->

                <!-- page trigger -->
                <table width="100%" class="page-trigger" style="padding: 10px 10px 0px 10px;margin-left: 0px">
                    <tr>
                        <td>
                            <div class="next_page">
                                <a style="float: left"
                                    href="/nogor-edition/{{$post->date}}/{{ max($key_id - 1, 1) }}"
                                    style="padding: 8px">আগের পাতা  </a>
                            </div>
                        </td>
                        <td>
                            <div class="next_page">
                                <a href="/nogor-edition/{{$post->date}}/{{ min($key_id + 1, $post->contentData->count()) }}"
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
                                        class="btn btn-success"><i class="fa fa-print" aria-hidden="true"></i>
                                        প্রিন্ট </button>

                                    <button class="sahre_on_print copy-button-class"><i class="fa fa-link"></i> লিংক
                                        কপি </button>


                                    <button class="sahre_on_print downloadImage"><i class="fa fa-cloud-download"></i>
                                        ডাউনলোড </button>


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

                    <div id='DivIdToPrint' class="modal-main-img" id="newsImg" style="overflow-x: auto;">

                        <center>
                            <img src="" id="singleNewsImg" class="image_view">
                            <img src="" class="related_image">
                        </center>

                    </div>


                    <div class="modal_footer">

                        <div class="social_share">


                            <button type="button" class="btn btn-default share_on_fb">
                                <i class="fa fa-facebook" style="color: white" aria-hidden="true"></i></button>
                            <button type="button" class="btn btn-default share_on_twt">
                                <i class="fa fa-twitter" style="color: white" aria-hidden="true"></i></button>

                            <button type="button" class="btn btn-default share_on_linkedin">

                                <i class="fa fa-linkedin" style="color: white" aria-hidden="true"></i>
                            </button>


                            <button type="button" class="btn btn-default share_on_whats">
                                <i class="fa fa-whatsapp" style="color: white" aria-hidden="true"></i>
                            </button>

                        </div>


                        <div class="next_part">
                            <button class="btn btn-info trigger-prev prvs"><i class="fa fa-angle-double-left"
                                    aria-hidden="true"></i> খবরের
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

@endsection

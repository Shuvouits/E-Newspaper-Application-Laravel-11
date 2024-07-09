<div class="header-div">

    <!-- header top -->
    <div class="top_header">
        <table width="100%" cellspacing="0" cellpadding="0" border="0" style="margin-top: 0px;">
            <tr>
                <td>
                    <div class="social_icon">
                        <ul class="list-unstyled" style="height: 32px;margin-left: 0;padding-left: 0">

                            @if($facebook)
                            <li class="fb btn"><a href="{{$facebook->value}}" target="_blank"><i class="fa fa-facebook"
                                        aria-hidden="true"></i></a>
                            </li>
                            @endif

                            @if($twitter)
                            <li class="twit btn"><a href="{{$twitter->value}}" target="_blank"><i class="fa fa-twitter"
                                        aria-hidden="true"></i></a>
                            </li>
                            @endif

                            @if($youtube)

                            <li class="youtube btn"><a href="{{$youtube->value}}" target="_blank"><i
                                        class="fa fa-youtube-play" aria-hidden="true"></i>
                                </a>
                            </li>
                            @endif

                        </ul>
                    </div>
                </td>

                <td>
                    <div class="main_logo navbar-brand">
                        <span class="rounded">

                            @if($logo)
                            <a href="/"><img
                                    src="{{asset('uploads/' .$logo->value)}}"></a>
                            @else
                            <h3>No Logo Found</h3>

                            @endif
                        </span>
                    </div>
                </td>



                <td>
                    <div class="social_icon" style="text-align: right;margin-top: 15px; margin-right:5px">
                        <ul class="list-unstyled" style="height: 32px;margin-left: 0;padding-left: 0">

                            @if($linkedin)

                            <li class="linkedin btn"><a href="{{$linkedin->value}}" target="_blank"><i
                                        class="fa fa-linkedin-square" aria-hidden="true"></i></a>
                            </li>

                            @endif

                            @if($pinterest)

                            <li class="pinterest btn"><a href="{{$pinterest->value}}" target="_blank"><i
                                        class="fa fa-pinterest" aria-hidden="true"></i></a>
                            </li>

                            @endif

                            @if($instagram)

                            <li class="instagram btn"><a href="{{$instagram->value}}" target="_blank"><i
                                        class="fa fa-instagram" aria-hidden="true"></i></a>
                            </li>

                            @endif

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

@php

   use App\Models\TopFooter;
   use App\Models\SocialSetting;

   $title_1 = TopFooter::where('key','title_1')->first();
   $title_2 = TopFooter::where('key','title_2')->first();
   $title_3 = TopFooter::where('key','title_3')->first();
   $office = TopFooter::where('key','office')->first();
   $mobile = TopFooter::where('key','mobile')->first();
   $email = TopFooter::where('key','email')->first();
   $copyright = TopFooter::where('key','copyright')->first();
   $company = TopFooter::where('key','company')->first();

   $logo = SocialSetting::where('key','logo')->first();


@endphp

<div class="footer_section" style="margin-top: 0px">
    <div class="footer_info">
        <div style="width: 100%;" class="footer_texts">
            <table style="width: 100%">
                <tr>
                    <td style="width: 250px">

                        @if($logo)
                        <div class="footer_Logo"> <a href="https://laraepaper.themebazar.xyz"><img
                                    src="{{asset('uploads/' .$logo->value)}}"></a>
                        </div>
                        @endif
                    </td>
                    <td>
                        <div class="editorial">


                            সম্পাদক ও প্রকাশক : {{$title_1->value}} </br>
                            নির্বাহী সম্পাদক : {{$title_2->value}}</br>
                            বার্তা সম্পাদক : {{$title_3->value}}


                        </div>
                    </td>

                    <td>
                        <div class="address">
                            অফিস : {{$office->value}}
                            </br>
                            মোবাইল : {{$mobile->value}}
                            </br>
                            ই-মেইল : {{$email->value}}


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
                    <div class="copyright"> {{$copyright->value}} </div>
                </td>
                <td style="text-align:right">
                    <div class="developed"> Powered BY <a href="" target="_blank"> {{$company->value}}
                        </a></div>
                </td>

            </tr>
        </table>


    </div>

</div>

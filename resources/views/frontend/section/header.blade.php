@php
    use App\Models\SocialSetting;
    use App\Models\Post;
    use App\Models\Content;

    $facebook = SocialSetting::where('key', 'facebook')->first();
    $twitter = SocialSetting::where('key', 'twitter')->first();
    $youtube = SocialSetting::where('key', 'youtube')->first();
    $linkedin = SocialSetting::where('key', 'linkedin')->first();
    $pinterest = SocialSetting::where('key', 'pinterest')->first();
    $instagram = SocialSetting::where('key', 'instagram')->first();
    $logo = SocialSetting::where('key', 'logo')->first();

    $post = Post::latest()->with('contentData')->first();
    $content_data = "";

    if($post){
        $post_id = $post->id;
        $content_data = Content::where('post_id', $post_id)
            ->take(1)
            ->first();
    }
@endphp

@php
function convertToBanglaDate($date) {
    $englishDays = ['Saturday', 'Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'];
    $banglaDays = ['শনিবার', 'রবিবার', 'সোমবার', 'মঙ্গলবার', 'বুধবার', 'বৃহস্পতিবার', 'শুক্রবার'];

    $englishMonths = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
    $banglaMonths = ['জানুয়ারি', 'ফেব্রুয়ারি', 'মার্চ', 'এপ্রিল', 'মে', 'জুন', 'জুলাই', 'আগস্ট', 'সেপ্টেম্বর', 'অক্টোবর', 'নভেম্বর', 'ডিসেম্বর'];

    $day = date('l', strtotime($date));
    $dayNum = date('d', strtotime($date));
    $month = date('F', strtotime($date));
    $year = date('Y', strtotime($date));

    // Convert to Bangla
    $banglaDay = str_replace($englishDays, $banglaDays, $day);
    $banglaMonth = str_replace($englishMonths, $banglaMonths, $month);
    $banglaDayNum = str_replace(range(0, 9), ['০', '১', '২', '৩', '৪', '৫', '৬', '৭', '৮', '৯'], $dayNum);
    $banglaYear = str_replace(range(0, 9), ['০', '১', '২', '৩', '৪', '৫', '৬', '৭', '৮', '৯'], $year);

    return $banglaDay . ', ' . $banglaDayNum . ' ' . $banglaMonth . ' ' . $banglaYear;
}

$banglaDate = convertToBanglaDate(date('Y-m-d'));
@endphp




<div class="header-div">
    <!-- header top -->
    <div class="top_header">
        <table width="100%" cellspacing="0" cellpadding="0" border="0" style="margin-top: 0px;">
            <tr>
                <td>
                    <div class="social_icon">
                        <ul class="list-unstyled" style="height: 32px;margin-left: 0;padding-left: 0">
                            @if($facebook)
                            <li class="fb btn"><a href="{{$facebook->value}}" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            @endif
                            @if($twitter)
                            <li class="twit btn"><a href="{{$twitter->value}}" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            @endif
                            @if($youtube)
                            <li class="youtube btn"><a href="{{$youtube->value}}" target="_blank"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                            @endif
                        </ul>
                    </div>
                </td>

                <td>
                    <div class="main_logo navbar-brand">
                        <span class="rounded">
                            @if($logo)
                            <a href="/"><img src="{{asset('uploads/' .$logo->value)}}"></a>
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
                            <li class="linkedin btn"><a href="{{$linkedin->value}}" target="_blank"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
                            @endif
                            @if($pinterest)
                            <li class="pinterest btn"><a href="{{$pinterest->value}}" target="_blank"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                            @endif
                            @if($instagram)
                            <li class="instagram btn"><a href="{{$instagram->value}}" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            @endif

                        </ul>
                       
                    </div>
                </td>
            </tr>
        </table>
    </div>

    <div class="main_menu">
        <ul>
            <li class="active_menu"><a href="/"><i class="fa fa-home" aria-hidden="true"></i> প্রচ্ছদ </a></li>
            <li><a href="#"><i class="fa fa-globe" aria-hidden="true"></i> অনলাইন সংস্করণ </a></li>
            <li><a href="/all-page"><i class="fa fa-book" aria-hidden="true"></i> সকল পৃষ্ঠা </a></li>
            <li>
                <a href="javascript:void(0)"
                   onclick='printPage()'>
                   <i class="fa fa-print" aria-hidden="true"></i> সম্পূর্ণ পৃষ্ঠা প্রিন্ট
                </a>
            </li>
            <li><a href="#"><i class="fa fa-calendar" aria-hidden="true"></i> {{ $banglaDate }}

                </a>
            </li>
        </ul>
    </div>

    <!-- header top end -->

    <!-- epaper_header_top_ad -->
    <!-- end epaper_header_top_ad -->
</div>

@push('scripts')
<script>
    function printPage() {
        var printContents = document.getElementById('printable-area').innerHTML;
        var originalContents = document.body.innerHTML;

        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;

        // Optional: Restore the original content to prevent losing page state
        window.location.reload();
    }
</script>
@endpush

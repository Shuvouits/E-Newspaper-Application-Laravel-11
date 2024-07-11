@php

use App\Models\Post;
use App\Models\RightAdvertise;

$post = Post::latest()->with('contentData')->first();

$first_image = RightAdvertise::where('key', 'first_image')->first();
$second_image = RightAdvertise::where('key', 'second_image')->first();



@endphp



<div class="row-div-right" style="padding-right: 20px;width: 210px;margin-right: 0px;">
    <div class="right-content"
        style="margin-top: 0px;background-color: white;border: none;padding: 0px !important;overflow: hidden;">



        <!-- categories -->
        <div class="add text-center" style="margin-top: 0px">
            <div class="calendar_themesbazar">আজকের পত্রিকা</div>
            <div class="category_content">
                <ul style="list-style: none;padding: 0px;margin: 0px;text-align: left;">

                    @foreach($post->contentData as $key=>$item)
                    <li style="border-bottom: 1px solid #c5c5c5;padding: 8px 10px 8px 10px"><a
                            style="font-size: 18px;color: black;text-decoration: none;"
                            href="/nogor-edition/{{$post->date}}/{{$key+1}}"> <i
                                class="fa fa-hand-o-right" aria-hidden="true"></i> {{$key+1}}. পাতা-{{$key+1}}</a>
                    </li>
                    @endforeach


                </ul>
            </div>
        </div>



        <!-- datepicker -->
        <div class="calendar_themesbazar">পুরোনো সংখ্যা</div>
        <div id="Datepicker1"></div>


        <!-- sidebar ad 4 -->
        </br>

        <img src="{{asset('uploads/' .$first_image->value)}}" width="100%"
        height="auto"> </br></br>

        <img src="{{asset('uploads/' .$second_image->value)}}" width="100%"
        height="auto"> </br></br>


    </div>
</div>

@php

use App\Models\Post;
use App\Models\LeftAdvertisement;

$post = Post::latest()->with('contentData')->first();

$first_image = LeftAdvertisement::where('key', 'first_image')->first();
$second_image = LeftAdvertisement::where('key', 'second_image')->first();
$third_image = LeftAdvertisement::where('key', 'third_image')->first();

@endphp




<div class="row-div" style="overflow: hidden;">
    <!-- left paper div -->
    <div class="row-div-left" style="padding-left: 20px;width: 170px;margin-left: 0px;">
        <div class="calendar_themesbazar"> সকল পাতা </div>
        <div class="page_content">
            <ul style="list-style: unset;padding: 0px; margin: 0px;">

                @foreach($post->contentData as $key=>$item)
                <li>
                    <a style="text-decoration: none;"
                        href="/nogor-edition/{{$post->date}}/{{$key+1}}">
                        <div class="page_number">
                            {{$key+1}}
                        </div>

                        <img src="{{asset('uploads/' .$item->content)}}"
                            style="width: 100%">


                    </a>
                </li>
                @endforeach


            </ul>



        </div>
        </br>


        <img src="{{asset('uploads/' .$first_image->value)}}" width="100%"
            height="auto"> </br></br>

            <img src="{{asset('uploads/' .$second_image->value)}}" width="100%"
            height="auto"> </br></br>


            <img src="{{asset('uploads/' .$third_image->value)}}" width="100%"
            height="auto"> </br></br>



    </div>





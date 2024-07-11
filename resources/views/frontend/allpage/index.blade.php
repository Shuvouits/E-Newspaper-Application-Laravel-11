@extends('frontend.master')

@section('content')

<div class="row-div-left" style="padding-left: 10px;">
    <div>

        <!-- content -->
        <div class="row-div-left" style="padding-bottom: 0px;margin-left: 10px;width: 930px;">

            <div class="single-page-div">
                <ul class="list-unstyled">
                    @foreach($post->contentData as $key=>$item)
                    <li>
                        <a href="/nogor-edition/{{$post->date}}/{{$key+1}}">
                            <div class="all_page_image">
                                <img src="{{asset('uploads/' .$item->content)}}"
                                    class="img-responsive thumbnail" width="148px"
                                    style="border: 1px solid #ddd; border-radius: 2px">
                                <div class="all_page_name">পাতা - {{$key+1}}</div>
                            </div>
                        </a>
                    </li>
                    @endforeach


                </ul>
            </div>
        </div>
        <!-- end content -->

    </div>
</div>

@endsection

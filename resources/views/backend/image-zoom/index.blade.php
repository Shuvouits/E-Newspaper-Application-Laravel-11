@extends('backend.master')

@section('content')
<div class="page-content">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Zoom</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Add Zoom</li>
                </ol>
            </nav>
        </div>

    </div>
    <!--end breadcrumb-->

    <!--end row-->


    <div class="row">
        <div class="col-lg-10 mx-auto">

            <div class="card">
                <div class="card-body p-4">
                    <h5 class="mb-4">Insert Data</h5>

                    <form method="post" enctype="multipart/form-data" action="/store-zoom">
                        @csrf


                        <div class="mb-4">
                            <label for="single-select-field" class="form-label">Select Your Post</label>
                            <select class="form-select" id="single-select-field" name="post_id" data-placeholder="Choose one thing">
                                <option value="" disabled selected>--select--</option>
                                @foreach($post as $data)
                                <option value="{{$data->id}}">{{$data->post_title}}</option>
                                @endforeach

                            </select>
                        </div>

                        <div class="mb-4">
                            <label for="single-select-field" class="form-label">Coords Number</label>
                            <input type="text" name="coords" class="form-control" id="input49" required>

                        </div>

                        <div class="mb-4">
                            <label for="single-select-field" class="form-label">Take Image</label>
                            <input type="file" name="image" class="form-control" id="input49" required>

                            @error('image')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror

                        </div>


                        <div class="row">
                            <label class="col-sm-3 col-form-label"></label>
                            <div class="col-sm-9">
                                <div class="d-md-flex d-grid align-items-center gap-3">
                                    <button type="submit" class="btn btn-primary px-4">Update</button>

                                </div>
                            </div>
                        </div>

                    </form>





                </div>
            </div>
        </div>
    </div><!--end row-->







</div>
@endsection

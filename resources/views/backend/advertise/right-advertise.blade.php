@extends('backend.master')

@section('content')
<div class="page-content">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Advertise</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Left Item</li>
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
                    <h5 class="mb-4">Insert/Update Advertise</h5>

                    <form method="post" enctype="multipart/form-data" action="/right-advertise">
                        @csrf

                        <div class="row mb-3">
                            <label for="input49" class="col-sm-1 col-form-label">First Item</label>
                            <div class="col-sm-11">
                                <div class="input-group">

                                    <input type="file" name="first_image" class="form-control" id="input49">

                                </div>
                                @if($firstImage)
                                <img src="{{asset('uploads/' .$firstImage->value)}}" style="width: 150px; height: 150px; margin-top: 10px" />
                                @endif

                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="input49" class="col-sm-1 col-form-label">Second Item</label>
                            <div class="col-sm-11">
                                <div class="input-group">

                                    <input type="file" name="second_image" class="form-control" id="input49">
                                </div>
                                @if($secondImage)
                                <img src="{{asset('uploads/' .$secondImage->value)}}" style="width: 150px; height: 150px; margin-top: 10px" />
                                @endif
                            </div>
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

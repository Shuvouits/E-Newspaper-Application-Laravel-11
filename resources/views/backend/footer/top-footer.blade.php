@extends('backend.master')

@section('content')
<div class="page-content">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Footer</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Top Footer</li>
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
                    <h5 class="mb-4">Insert/Update Footer</h5>

                    <form method="post" action="/top-footer">
                        @csrf

                        <div class="row mb-3">
                            <label for="input49" class="col-sm-1 col-form-label">Title-1</label>
                            <div class="col-sm-11">
                                <div class="input-group">

                                    <input type="text" class="form-control" name="title_1" value="{{$title_1->value}}" id="input49"
                                        placeholder="Enter First Title">

                                        @error('title_1')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror

                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="input49" class="col-sm-1 col-form-label">Title-2</label>
                            <div class="col-sm-11">
                                <div class="input-group">

                                    <input type="text" class="form-control" name="title_2" value="{{$title_2->value}}" id="input49"
                                        placeholder="Enter Second Title">

                                        @error('title_2')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror

                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="input49" class="col-sm-1 col-form-label">Title-3</label>
                            <div class="col-sm-11">
                                <div class="input-group">

                                    <input type="text" class="form-control" value="{{$title_3->value}}" name="title_3" id="input49"
                                        placeholder="Enter Third Title">

                                        @error('title_3')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror

                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="input49" class="col-sm-1 col-form-label">Office</label>
                            <div class="col-sm-11">
                                <div class="input-group">

                                    <input type="text" name="office" class="form-control" value="{{$office->value}}" id="input49"
                                        placeholder="Enter Office">

                                        @error('office')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror

                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="input49" class="col-sm-1 col-form-label">Mobile</label>
                            <div class="col-sm-11">
                                <div class="input-group">

                                    <input type="text" name="mobile" class="form-control" value="{{$mobile->value}}" id="input49"
                                        placeholder="Your Mobile">

                                        @error('mobile')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror

                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="input49" class="col-sm-1 col-form-label">Email</label>
                            <div class="col-sm-11">
                                <div class="input-group">

                                    <input type="email" name="email" class="form-control" value="{{$email->value}}" id="input49"
                                        placeholder="Your Email">

                                        @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror

                                </div>
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

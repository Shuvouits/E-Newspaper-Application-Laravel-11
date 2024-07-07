@extends('backend.master')

@section('content')
<div class="page-content">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Header</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Social Settings</li>
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
                    <h5 class="mb-4">Horizontal Addon</h5>

                    <div class="row mb-3">
                        <label for="input49" class="col-sm-1 col-form-label">Facebook</label>
                        <div class="col-sm-11">
                            <div class="input-group">
                                <span class="input-group-text">

                                    <i class="fa fa-facebook" style="width: 20px"></i>


                                </span>
                                <input type="text" class="form-control" id="input49"
                                    placeholder="Your Name">
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="input49" class="col-sm-1 col-form-label">Twitter</label>
                        <div class="col-sm-11">
                            <div class="input-group">
                                <span class="input-group-text">

                                   <i class="fa fa-twitter" style="width: 20px"></i>

                                </span>
                                <input type="text" class="form-control" id="input49"
                                    placeholder="Your Name">
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="input49" class="col-sm-1 col-form-label">YouTube</label>
                        <div class="col-sm-11">
                            <div class="input-group">
                                <span class="input-group-text">

                                   <i class="fa fa-youtube-play" style="width: 20px"></i>

                                </span>
                                <input type="text" class="form-control" id="input49"
                                    placeholder="Your Name">
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="input49" class="col-sm-1 col-form-label">Linkedin</label>
                        <div class="col-sm-11">
                            <div class="input-group">
                                <span class="input-group-text">

                                   <i class="fa fa-linkedin" style="width: 20px"></i>

                                </span>
                                <input type="text" class="form-control" id="input49"
                                    placeholder="Your Name">
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="input49" class="col-sm-1 col-form-label">Pinterest</label>
                        <div class="col-sm-11">
                            <div class="input-group">
                                <span class="input-group-text">

                                   <i class="fa fa-pinterest" style="width: 20px"></i>

                                </span>
                                <input type="text" class="form-control" id="input49"
                                    placeholder="Your Name">
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="input49" class="col-sm-1 col-form-label">Instagram</label>
                        <div class="col-sm-11">
                            <div class="input-group">
                                <span class="input-group-text">

                                   <i class="fa fa-instagram" style="width: 20px"></i>

                                </span>
                                <input type="text" class="form-control" id="input49"
                                    placeholder="Your Name">
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <label class="col-sm-3 col-form-label"></label>
                        <div class="col-sm-9">
                            <div class="d-md-flex d-grid align-items-center gap-3">
                                <button type="button" class="btn btn-primary px-4">Update</button>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!--end row-->







</div>
@endsection

@extends('backend.master')

@section('content')
<div class="page-content">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Content</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Add Content</li>
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
                    <h5 class="mb-4">Insert Content</h5>


                    <form id="dynamic-form">
                        <button type="button" id="add-element" class="btn btn-success" style="margin-bottom: 15px">Add Content</button>

                        <div class="content-data">
                            <div class="row mb-3 dynamic-field">
                                <label class="col-sm-1 col-form-label">1st Content</label>
                                <div class="col-sm-11">
                                    <div class="input-group">
                                        <input type="file" class="form-control">
                                        <button type="button" class="remove-element btn btn-danger">Remove</button>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-1 col-form-label">Date</label>
                            <div class="col-sm-11">
                                <div class="input-group">
                                    <input type="date" class="form-control">

                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-1 col-form-label">Meta Title</label>
                            <div class="col-sm-11">
                                <div class="input-group">
                                    <input type="text" class="form-control">

                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-1 col-form-label">Meta Description</label>
                            <div class="col-sm-11">
                                <div class="input-group">

                                    <textarea class="form-control" style="height: 120px"></textarea>

                                </div>
                            </div>
                        </div>



                    </form>


                    <div class="row">
                        <label class="col-sm-3 col-form-label"></label>
                        <div class="col-sm-9">
                            <div class="d-md-flex d-grid align-items-center gap-3">
                                <button type="button" class="btn btn-primary px-4">Submit</button>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!--end row-->



</div>
@endsection

@push('scripts')

<script>

$(document).ready(function() {
    let elementCount = 1;

    // Function to get the ordinal suffix
    function getOrdinalSuffix(n) {
        let s = ["th", "st", "nd", "rd"],
            v = n % 100;
        return n + (s[(v - 20) % 10] || s[v] || s[0]);
    }

    // Add a new form element dynamically
    $('#add-element').on('click', function() {
        elementCount++;
        let labelText = getOrdinalSuffix(elementCount) + " Content";
        let newElement = `
            <div class="row mb-3 dynamic-field">
                <label class="col-sm-1 col-form-label">${labelText}</label>
                <div class="col-sm-11">
                    <div class="input-group">
                        <input type="file" class="form-control">
                        <button type="button" class="remove-element btn btn-danger">Remove</button>
                    </div>
                </div>
            </div>
        `;
        $('#dynamic-form .content-data').append(newElement);
    });

    // Attach event handler to dynamically added input elements
    $('#dynamic-form').on('input', '.dynamic-element', function() {
        console.log('Input value changed to: ' + $(this).val());
    });

    // Attach event handler to dynamically added remove buttons
    $('#dynamic-form').on('click', '.remove-element', function() {
        $(this).closest('.dynamic-field').remove();
    });
});


</script>


@endpush

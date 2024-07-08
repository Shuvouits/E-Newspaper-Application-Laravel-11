@extends('backend.master')

@section('content')
<div class="page-content">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Content</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a></li>
                    <li class="breadcrumb-item active" aria-current="page">Update Content</li>
                </ol>
            </nav>
        </div>
    </div>
    <!--end breadcrumb-->

    <div class="row">
        <div class="col-lg-10 mx-auto">
            <div class="card">
                <div class="card-body p-4">
                    <h5 class="mb-4">Update Content</h5>

                    <form id="dynamic-form" enctype="multipart/form-data" method="post" action="/update-content">
                        @csrf
                        <input type="hidden" name="id" value="{{$post->id}}" />
                        <button type="button" id="add-element" class="btn btn-success" style="margin-bottom: 15px">Add Content</button>

                        <div class="content-data">
                            @foreach($post->contentData as $index => $item)
                            <div class="row mb-3 dynamic-field">
                                <label class="col-sm-1 col-form-label">{{ $index + 1 }} Content</label>
                                <div class="col-sm-11">
                                    <div class="input-group">
                                        <input type="file" class="form-control" name="content[]" id="file-{{ $index + 1 }}">
                                        

                                    </div>
                                    <img id="preview-{{ $index + 1 }}" src="{{ asset('uploads/' . $item->content) }}" alt="Image Preview" style="max-width: 150px; margin-top: 10px;">
                                    <a href="/remove/image-content/{{$item->id}}" class="btn btn-danger">Remove Content</a>
                                </div>
                            </div>
                            @endforeach
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-1 col-form-label">Post Title</label>
                            <div class="col-sm-11">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="post_title" value="{{ $post->post_title }}" placeholder="Enter your post title">
                                </div>
                                @error('post_title')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-1 col-form-label">Date</label>
                            <div class="col-sm-11">
                                <div class="input-group">
                                    <input type="date" class="form-control" name="date" value="{{ $post->date }}">
                                </div>
                                @error('date')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-1 col-form-label">Meta Title</label>
                            <div class="col-sm-11">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="meta_title" value="{{ $post->meta_title }}" placeholder="Enter your meta title">
                                </div>
                                @error('meta_title')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-1 col-form-label">Meta Description</label>
                            <div class="col-sm-11">
                                <div class="input-group">
                                    <textarea class="form-control" name="meta_description" style="height: 120px">{{ $post->meta_description }}</textarea>
                                </div>
                                @error('meta_description')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="row">
                            <label class="col-sm-3 col-form-label"></label>
                            <div class="col-sm-9">
                                <div class="d-md-flex d-grid align-items-center gap-3">
                                    <button type="submit" class="btn btn-primary px-4">Submit</button>
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

@push('scripts')
<script>
    $(document).ready(function() {
        let elementCount = {{ $post->contentData->count() }};

        // Function to get the ordinal suffix
        function getOrdinalSuffix(n) {
            let s = ["th", "st", "nd", "rd"],
                v = n % 100;
            return n + (s[(v - 20) % 10] || s[v] || s[0]);
        }

        // Function to read and preview image
        function readURL(input, previewId) {
            if (input.files && input.files[0]) {
                let reader = new FileReader();

                reader.onload = function(e) {
                    $(previewId).attr('src', e.target.result).show();
                }

                reader.readAsDataURL(input.files[0]);
            }
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
                            <input type="file" class="form-control" name="content[]" id="file-${elementCount}">
                            <button type="button" class="remove-element btn btn-danger">Remove</button>
                        </div>
                        <img id="preview-${elementCount}" src="" alt="Image Preview" style="max-width: 150px; margin-top: 10px; display: none;">
                    </div>
                </div>
            `;
            $('#dynamic-form .content-data').append(newElement);
        });

        // Attach event handler to dynamically added input elements for image preview
        $('#dynamic-form').on('change', 'input[type="file"]', function() {
            let previewId = '#preview-' + $(this).attr('id').split('-')[1];
            readURL(this, previewId);
        });

        // Attach event handler to dynamically added remove buttons
        $('#dynamic-form').on('click', '.remove-element', function() {
            $(this).closest('.dynamic-field').remove();
        });
    });
</script>
@endpush

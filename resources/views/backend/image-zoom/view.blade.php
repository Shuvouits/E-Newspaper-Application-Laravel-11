@extends('backend.master')

@section('content')
<div class="page-content">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Tables</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Data Table</li>
                </ol>
            </nav>
        </div>

    </div>
    <!--end breadcrumb-->
    <h6 class="mb-0 text-uppercase">Zoom Example</h6>
    <hr />
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>SL</th>
                            <th>Post Title</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($zoom as $count=>$item)
                        <tr>
                            <td>{{$count+1}}</td>
                            <td>{{$item->postData->post_title}}</td>

                            <td>
                                <img src="{{asset('uploads/' .$item->image)}}"  style="width: 150px; height: 150px"/>
                            </td>
                            <td>
                                <button href="" class="btn btn-danger delete-button" data-id="{{ $item->id }}"><i class="fa fa-trash"></i></button>
                            </td>
                        </tr>
                        @endforeach




                    </tbody>
                    <tfoot>
                        <tr>
                            <th>SL</th>
                            <th>Post Title</th>
                            <th>Image</th>

                            <th>Action</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>

</div>
@endsection

@push('scripts')
<script>
$(document).ready(function() {
    $('.delete-button').on('click', function(e) {
        e.preventDefault();

        let zoomId = $(this).data('id');
        let url = '{{ route("zoom.destroy", ":id") }}';
        url = url.replace(':id', zoomId);

        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: url,
                    type: 'DELETE',
                    data: {
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        if(response.success) {
                            Swal.fire(
                                'Deleted!',
                                'Your post has been deleted.',
                                'success'
                            );
                            $('#post-row-' + zoomId).remove();
                            location.reload();
                        } else {
                            Swal.fire(
                                'Error!',
                                'There was an error deleting the post.',
                                'error'
                            );
                        }
                    }
                });
            }
        })
    });
});
</script>
@endpush

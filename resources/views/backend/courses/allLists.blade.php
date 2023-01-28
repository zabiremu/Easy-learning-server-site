@extends('backend.app.app')

@section('content')
    <!--**********************************
                Content body start
            ***********************************-->
    <div class="content-body">
        <div class="container-fluid">
            <!-- Add Project -->
            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                        <h4>Hi, welcome back!</h4>
                        <span>All Courses</span>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin-dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="{{ route('all.courses') }}">All Courses</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->


            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">All Courses</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example" class="display" style="min-width: 845px">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Title</th>
                                            <th>Description</th>
                                            <th>Image</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($result as $key=> $item)
                                            <tr>
                                                <td>{{ ++$key }}</td>
                                                <td>{{ $item->short_title	 }}</td>
                                                <td>{!! Str::limit($item->short_description, 20, '...') !!}</td>
                                                <td><img src="{{ $item->short_img }}" alt="{{ $item->short_title }}"
                                                        style="width: 100px"></td>
                                                <td class="d-flex">
                                                    <a href="{{ route('edit.course', $item->id) }}"
                                                        class="btn btn-primary btn-sm"><i
                                                            class="fa-regular fa-pen-to-square"></i></a>

                                                    <button class="btn btn-danger btn-sm button"><i
                                                            class="fa-regular  fa-trash-can"></i></button>
                                                    <form action="{{ route('delete-course', $item->id) }}" method="post">
                                                        @csrf
                                                    </form>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="5" class="text-center">No Courses</td>
                                            </tr>
                                        @endforelse

                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>#</th>
                                            <th>Title</th>
                                            <th>Description</th>
                                            <th>Image</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--**********************************
                Content body end
            ***********************************-->

    @push('script')
        <script>
            var button = $('.button');
            button.on('click', function() {
                var value = $(this).next('form');
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
                        Swal.fire(
                            'Deleted!',
                            'Your file has been deleted.',
                            'success'
                        )
                        value.submit()
                    }
                })
            })
        </script>
    @endpush
@endsection

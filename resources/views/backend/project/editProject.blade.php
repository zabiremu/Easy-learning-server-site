@extends('backend.app.app')

@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <div class="content-body">
        <div class="container-fluid">
            <div class="form-head mb-sm-5 mb-3 d-flex flex-wrap align-items-center">
                <h2 class="font-w600 mb-2 mr-auto">Edit Project</h2>
            </div>
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Edit Project</h4>
                        </div>
                        @error('p_name')
                            <div class="alert alert-danger alert-dismissible fade show">
                                <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2"
                                    fill="none" stroke-linecap="round" stroke-linejoin="round" class="mr-2">
                                    <polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2">
                                    </polygon>
                                    <line x1="15" y1="9" x2="9" y2="15"></line>
                                    <line x1="9" y1="9" x2="15" y2="15"></line>
                                </svg>
                                <strong>Error!</strong> {{ $message }}.
                                <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i
                                            class="mdi mdi-close"></i></span>
                                </button>
                            </div>
                        @enderror
                        @error('p_short_desc')
                            <div class="alert alert-danger alert-dismissible fade show">
                                <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2"
                                    fill="none" stroke-linecap="round" stroke-linejoin="round" class="mr-2">
                                    <polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2">
                                    </polygon>
                                    <line x1="15" y1="9" x2="9" y2="15"></line>
                                    <line x1="9" y1="9" x2="15" y2="15"></line>
                                </svg>
                                <strong>Error!</strong> {{ $message }}.
                                <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i
                                            class="mdi mdi-close"></i></span>
                                </button>
                            </div>
                        @enderror
                        @error('p_long_desc')
                            <div class="alert alert-danger alert-dismissible fade show">
                                <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2"
                                    fill="none" stroke-linecap="round" stroke-linejoin="round" class="mr-2">
                                    <polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2">
                                    </polygon>
                                    <line x1="15" y1="9" x2="9" y2="15"></line>
                                    <line x1="9" y1="9" x2="15" y2="15"></line>
                                </svg>
                                <strong>Error!</strong> {{ $message }}.
                                <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i
                                            class="mdi mdi-close"></i></span>
                                </button>
                            </div>
                        @enderror
                        <div class="card-body">
                            <div class="basic-form">
                                <form action="{{ route('update.project',$result->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="p_name">Project Name</label>
                                        <input type="text" class="form-control input-default"
                                            placeholder="Project Name" name="p_name" id="p_name" value="{{ $result->project_name }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="summernote">Project Short Description</label>
                                        <textarea id="summernote" name="p_short_desc">{{ $result->project_description }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="video">Project Long Description</label>
                                        <textarea id="video" name="p_long_desc">{{ $result->project_features }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="Image">Project Image One</label>
                                        <input type="file" class="form-control input-default"
                                            placeholder="Project Image One" id="Image" name="image_one">
                                    </div>
                                    <div class="form-group">
                                        <img id="show_image"
                                            src="{{ $result->image_one == null ? asset('uploads/no_image.jpg') : $result->image_one }}"
                                            alt="" width="110" style="border-radius: 8px">
                                    </div>
                                    <div class="form-group">
                                        <label for="image_two">Project Image Two</label>
                                        <input type="file" class="form-control input-default"
                                            placeholder="Project Image Two" id="image_two" name="image_two">
                                    </div>
                                    <div class="form-group">
                                        <img id="show_image_two"
                                            src="{{ $result->image_two == null ? asset('uploads/no_image.jpg') : $result->image_two }}"
                                            alt="" width="110" style="border-radius: 8px">
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary btn-block">Update</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('script')
    <script type="text/javascript">
        $(document).ready(function() {
            $('#Image').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#show_image').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0'])
            })
        })
    </script>
     <script type="text/javascript">
         $(document).ready(function() {
             $('#image_two').change(function(e) {
                 var reader = new FileReader();
                 reader.onload = function(e) {
                     $('#show_image_two').attr('src', e.target.result);
                 }
                 reader.readAsDataURL(e.target.files['0'])
             })
         })
     </script>
    @endpush
@endsection

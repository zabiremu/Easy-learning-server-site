@extends('backend.app.app')

@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <div class="content-body">
        <div class="container-fluid">
            <div class="form-head mb-sm-5 mb-3 d-flex flex-wrap align-items-center">
                <h2 class="font-w600 mb-2 mr-auto">Add Course</h2>
            </div>
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Add Course</h4>
                        </div>
                        @error('short_title')
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
                        @error('short_description')
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
                        @error('long_title')
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
                        @error('long_description')
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
                        @error('total_student')
                            <div class="alert alert-danger alert-dismissible fade show">
                                <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor"
                                    stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                    class="mr-2">
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
                        @error('total_lecture')
                            <div class="alert alert-danger alert-dismissible fade show">
                                <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor"
                                    stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                    class="mr-2">
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
                        @error('total_duration')
                            <div class="alert alert-danger alert-dismissible fade show">
                                <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor"
                                    stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                    class="mr-2">
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
                        @error('category')
                            <div class="alert alert-danger alert-dismissible fade show">
                                <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor"
                                    stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                    class="mr-2">
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
                        @error('tags')
                            <div class="alert alert-danger alert-dismissible fade show">
                                <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor"
                                    stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                    class="mr-2">
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
                        @error('image_one')
                            <div class="alert alert-danger alert-dismissible fade show">
                                <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor"
                                    stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                    class="mr-2">
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
                                <form action="{{ route('store.course') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="short_title">Short Title</label>
                                        <input type="text" class="form-control input-default"
                                            placeholder="Course Name" name="short_title" id="short_title">
                                    </div>
                                    <div class="form-group">
                                        <label for="summernote">Course Short Description</label>
                                        <textarea id="summernote" name="short_description"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="long_title">Long Title</label>
                                        <input type="text" class="form-control input-default"
                                            placeholder="Course Long Title" name="long_title" id="long_title">
                                    </div>
                                    <div class="form-group">
                                        <label for="video">Course Long Description</label>
                                        <textarea id="video" name="long_description"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="total_student">Total Student</label>
                                        <input type="number" class="form-control input-default"
                                            placeholder="Total Student" name="total_student" id="total_student">
                                    </div>
                                    <div class="form-group">
                                        <label for="total_lecture">Total Lecture</label>
                                        <input type="number" class="form-control input-default"
                                            placeholder="Total Lecture" name="total_lecture" id="total_lecture">
                                    </div>
                                    <div class="form-group">
                                        <label for="total_duration">Total Duration</label>
                                        <input type="text" class="form-control input-default"
                                            placeholder="Course Long Title" name="total_duration" id="total_duration">
                                    </div>
                                    <div class="form-group">
                                        <label for="category">Category</label>
                                        <input type="text" class="form-control input-default" placeholder="Category"
                                            name="category" id="category">
                                    </div>
                                    <div class="form-group">
                                        <label for="tag">Tags</label>
                                        <input type="text" class="form-control input-default"
                                            placeholder="write some tags" name="tags" id="tag">
                                    </div>
                                    <div class="form-group">
                                        <label for="Image">Course Image One</label>
                                        <input type="file" class="form-control input-default"
                                            placeholder="Project Image One" id="Image" name="image_one">
                                    </div>
                                    <div class="form-group">
                                        <img id="show_image" src="{{ asset('uploads/no_image.jpg') }}" alt=""
                                            width="110" style="border-radius: 8px">
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
    @endpush
@endsection

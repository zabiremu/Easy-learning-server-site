@extends('backend.app.app')

@section('content')
    @php
        $id = Auth::user()->id;
        $adminData = App\Models\User::find($id);
    @endphp
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <div class="content-body">
        <div class="container-fluid">
            <div class="form-head mb-sm-5 mb-3 d-flex flex-wrap align-items-center">
                <h2 class="font-w600 mb-2 mr-auto ">Admin Profile</h2>
            </div>
            <div class="row">
                <div class="col-xl-6">
                    <div class="card mb-3">
                        <img class="card-img-top img-fluid" src="{{ $adminData->image }}" alt="Card image cap">
                        <div class="card-header">
                            <h5 class="card-title">{{ $adminData->name }}</h5>
                        </div>
                        <div class="card-body">
                            <p class="card-text text-dark">Last Updated:
                                {{ Carbon\Carbon::parse($adminData->updated_at)->diffForHumans() }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Update Profile</h4>
                        </div>
                        @error('name')
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
                        @error('email')
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
                                <form action="{{ route('update-admin-profile') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <input type="text" class="form-control input-default "
                                            placeholder="Enter Your Name" name="name" value="{{ $adminData->name }}">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control input-default "
                                            placeholder="Enter Your Name" name="email" value="{{ $adminData->email }}">
                                    </div>
                                    <div class="form-group">
                                        <input type="file" class="form-control input-default" name="image"
                                            id="image">
                                    </div>
                                    <div class="form-group">
                                        <img id="show_image"
                                            src="{{ $adminData->image == null ? asset('uploads/no_image.jpg') : $adminData->image }}"
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
                $('#image').change(function(e) {
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

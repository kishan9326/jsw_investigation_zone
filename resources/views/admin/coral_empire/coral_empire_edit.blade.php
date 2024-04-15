@extends('admin.main-layout')

@section('content-header')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Edit Coral Empire</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Reconnect World</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
@endsection
@section('body')
    <!-- Main row -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Edit Coral Empire Content</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->

                        <form action="{{ route('updateCoralEmpire') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Ticker Time</label>
                                    <input type="text" class="form-control" name="ticker_time"
                                        value="{{ $data[0]->ticker_time }}" placeholder="Ticker Time" maxlength="4">

                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">First Screen Title</label>
                                    <input type="text" class="form-control" name="first_screen_title"
                                        value="{{ $data[0]->first_screen_title }}" placeholder="First Screen Title">

                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">First Screen Main Background</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" type="file" class="custom-file-input"
                                                id="exampleInputFile" name="first_screen_background_img">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                    </div>
                                    <img src="{{ url('/uploads') }}/{{ $data[0]->first_screen_background_img }}"
                                        height="100" width="100">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">First Screen Center Image</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" type="file" class="custom-file-input"
                                                id="exampleInputFile" name="first_screen_center_img">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                    </div>
                                </div>
                                <img src="{{ url('/uploads') }}/{{ $data[0]->first_screen_center_img }}" height="100"
                                    width="100">
                                <div class="form-group">
                                    <label for="exampleInputFile">First Screen Circle Img</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" type="file" class="custom-file-input"
                                                id="exampleInputFile" name="first_screen_circle_img">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                    </div>
                                    <img src="{{ url('/uploads') }}/{{ $data[0]->first_screen_circle_img }}" height="100"
                                        width="100">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">First Screen Button Text</label>
                                    <input type="text" class="form-control" name="first_screen_button_text"
                                        value="{{ $data[0]->first_screen_button_text }}" placeholder="Star Text">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Second Main Background</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" type="file" class="custom-file-input"
                                                id="exampleInputFile" name="second_screen_background_img">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                    </div>
                                    <img src="{{ url('/uploads') }}/{{ $data[0]->second_screen_background_img }}"
                                        height="100" width="100">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Second Screen Bakground Center Image</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" type="file" class="custom-file-input"
                                                id="exampleInputFile" name="second_screen_center_img">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                    </div>
                                    <img src="{{ url('/uploads') }}/{{ $data[0]->second_screen_center_img }}"
                                        height="100" width="100">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Second Screen Image</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" type="file" class="custom-file-input"
                                                id="exampleInputFile" name="second_screen_img">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                    </div>
                                    <img src="{{ url('/uploads') }}/{{ $data[0]->second_screen_img }}" height="100"
                                        width="100">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Second Screen Text</label>
                                    <textarea class="ckeditor" name="second_screen_text">
                                    {{ $data[0]->second_screen_text }}
                                    </textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Second Screen button text</label>
                                    <input type="text" class="form-control" name="second_screen_button_text"
                                        value="{{ $data[0]->second_screen_button_text }}"
                                        placeholder="Main tag line second">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Third Screen Background Image</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" type="file" class="custom-file-input"
                                                id="exampleInputFile" name="third_screen_background_img">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                    </div>
                                    <img src="{{ url('/uploads') }}/{{ $data[0]->third_screen_background_img }}"
                                        height="100" width="100">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Third Screen Bakground Center Image</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" type="file" class="custom-file-input"
                                                id="exampleInputFile" name="third_screen_center_img">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                    </div>
                                    <img src="{{ url('/uploads') }}/{{ $data[0]->third_screen_center_img }}"
                                        height="100" width="100">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Third Screen Text</label>
                                    <textarea class="ckeditor" name="third_screen_text">
                                        {{ $data[0]->third_screen_text }}
                                    </textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Third Screen button text</label>
                                    <input type="text" class="form-control" name="third_screen_button_text"
                                        value="{{ $data[0]->third_screen_button_text }}"
                                        placeholder="Main tag line second">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Fourth Screen Background Image</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" type="file" class="custom-file-input"
                                                id="exampleInputFile" name="fourth_screen_background_img">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                    </div>
                                    <img src="{{ url('/uploads') }}/{{ $data[0]->fourth_screen_background_img }}"
                                        height="100" width="100">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Fourth Screen Center Image</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" type="file" class="custom-file-input"
                                                id="exampleInputFile" name="fourth_screen_center_img">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                    </div>
                                    <img src="{{ url('/uploads') }}/{{ $data[0]->fourth_screen_center_img }}"
                                        height="100" width="100">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Fourth Screen Image</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" type="file" class="custom-file-input"
                                                id="exampleInputFile" name="fourth_screen_img">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                    </div>
                                    <img src="{{ url('/uploads') }}/{{ $data[0]->fourth_screen_img }}" height="100"
                                        width="100">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Fourth Screen Text</label>
                                    <textarea class="ckeditor" name="fourth_screen_text">
                                    {{ $data[0]->fourth_screen_text }}
                                    </textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Fourth Sub Screen Text</label>
                                    <textarea class="ckeditor" name="fourth_screen_sub_text">
                                    {{ $data[0]->fourth_screen_sub_text }}
                                    </textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Fourth Screen Button</label>
                                    <input type="text" class="form-control" name="fourth_screen_button_text"
                                        value="{{ $data[0]->fourth_screen_button_text }}"
                                        placeholder="Eight Screen Button Text">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputFile">Fifth Screen Background Image</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" type="file" class="custom-file-input"
                                                id="exampleInputFile" name="fifth_screen_background_img">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                    </div>
                                    <img src="{{ url('/uploads') }}/{{ $data[0]->fifth_screen_background_img }}"
                                        height="100" width="100">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Fifth Screen Background Center Image</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" type="file" class="custom-file-input"
                                                id="exampleInputFile" name="fifth_screen_center_img">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                    </div>
                                    <img src="{{ url('/uploads') }}/{{ $data[0]->fifth_screen_center_img }}"
                                        height="100" width="100">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Fifth Screen Text</label>
                                    <textarea class="ckeditor" name="fifth_screen_text">
                                         {{ $data[0]->fifth_screen_text }}
                                    </textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Fifth Screen Image</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" type="file" class="custom-file-input"
                                                id="exampleInputFile" name="fifth_screen_img">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                    </div>
                                    <img src="{{ url('/uploads') }}/{{ $data[0]->fifth_screen_img }}" height="100"
                                        width="100">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Fifth Screen Button Text</label>
                                    <input type="text" class="form-control" name="fifth_screen_button_text"
                                        value="{{ $data[0]->fifth_screen_button_text }}"
                                        placeholder="Ten Screen Button Text">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Sixth Screen Background Image</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" type="file" class="custom-file-input"
                                                id="exampleInputFile" name="sixth_screen_background_img">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                    </div>
                                    <img src="{{ url('/uploads') }}/{{ $data[0]->sixth_screen_background_img }}"
                                        height="100" width="100">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Sixth Screen Background Center Image</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" type="file" class="custom-file-input"
                                                id="exampleInputFile" name="sixth_screen_center_img">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                    </div>
                                    <img src="{{ url('/uploads') }}/{{ $data[0]->sixth_screen_center_img }}"
                                        height="100" width="100">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Sixth Screen Image</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" type="file" class="custom-file-input"
                                                id="exampleInputFile" name="sixth_screen_img">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                    </div>
                                    <img src="{{ url('/uploads') }}/{{ $data[0]->sixth_screen_img }}" height="100"
                                        width="100">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Sixth Screen Text</label>
                                    <textarea class="ckeditor" name="sixth_screen_text">
                                    {{ $data[0]->sixth_screen_text }}
                                    </textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Sixth Screen Sub Text</label>
                                    <textarea class="ckeditor" name="sixth_screen_sub_text">
                                    {{ $data[0]->sixth_screen_sub_text }}
                                    </textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Sixth Screen Button Text</label>
                                    <input type="text" class="form-control" name="sixth_screen_button_text"
                                        placeholder="Eight Screen Button Text"
                                        value="{{ $data[0]->sixth_screen_button_text }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Seventh Screen Background Image</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" type="file" class="custom-file-input"
                                                id="exampleInputFile" name="seventh_screen_background_img">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                    </div>
                                    <img src="{{ url('/uploads') }}/{{ $data[0]->seventh_screen_background_img }}"
                                        height="100" width="100">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Seventh Screen Background Center Image</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" type="file" class="custom-file-input"
                                                id="exampleInputFile" name="seventh_screen_center_img">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                    </div>
                                    <img src="{{ url('/uploads') }}/{{ $data[0]->seventh_screen_center_img }}"
                                        height="100" width="100">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Seventh Screen Image</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" type="file" class="custom-file-input"
                                                id="exampleInputFile" name="seventh_screen_img">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                    </div>
                                    <img src="{{ url('/uploads') }}/{{ $data[0]->seventh_screen_img }}" height="100"
                                        width="100">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Seventh Screen Calling Image</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" type="file" class="custom-file-input"
                                                id="exampleInputFile" name="seventh_screen_calling_img">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                    </div>
                                    <img src="{{ url('/uploads') }}/{{ $data[0]->seventh_screen_calling_img }}"
                                        height="100" width="100">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Seventh Screen Text</label>
                                    <textarea class="ckeditor" name="seventh_screen_text">
                                    {{ $data[0]->seventh_screen_text }}
                                    </textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Seventh Screen Button Text</label>
                                    <input type="text" class="form-control" name="seventh_screen_button_text"
                                        value="{{ $data[0]->seventh_screen_button_text }}"
                                        placeholder="Eight Screen Button Text">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Eight Screen Background Image</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" type="file" class="custom-file-input"
                                                id="exampleInputFile" name="eight_screen_background_img">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                    </div>
                                    <img src="{{ url('/uploads') }}/{{ $data[0]->eight_screen_background_img }}"
                                        height="100" width="100">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Eight Screen Background Center Image</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" type="file" class="custom-file-input"
                                                id="exampleInputFile" name="eight_screen_center_img">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                    </div>
                                    <img src="{{ url('/uploads') }}/{{ $data[0]->eight_screen_center_img }}"
                                        height="100" width="100">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Eight Screen Image</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" type="file" class="custom-file-input"
                                                id="exampleInputFile" name="eight_screen_img">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                    </div>
                                    <img src="{{ url('/uploads') }}/{{ $data[0]->eight_screen_img }}" height="100"
                                        width="100">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Eight Text</label>
                                    <textarea class="ckeditor" name="eight_screen_text">
                                     {{ $data[0]->eight_screen_text }}
                                    </textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Eight Screen Button text</label>
                                    <input type="text" class="form-control" name="eight_screen_button_text"
                                        value="{{ $data[0]->eight_screen_button_text }}"
                                        placeholder="Main tag line second">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Nine Screen Background Image</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" type="file" class="custom-file-input"
                                                id="exampleInputFile" name="nine_screen_background_img"
                                                value="$data[0]->nine_screen_background_img">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                    </div>
                                    <img src="{{ url('/uploads') }}/{{ $data[0]->nine_screen_background_img }}"
                                        height="100" width="100">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Nine Screen Center Image</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" type="file" class="custom-file-input"
                                                id="exampleInputFile" name="nine_screen_center_img">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                    </div>
                                    <img src="{{ url('/uploads') }}/{{ $data[0]->nine_screen_center_img }}"
                                        height="100" width="100">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Nine Screen Image</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" type="file" class="custom-file-input"
                                                id="exampleInputFile" name="nine_screen_img">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                    </div>
                                    <img src="{{ url('/uploads') }}/{{ $data[0]->nine_screen_img }}" height="100"
                                        width="100">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Nine Text</label>
                                    <textarea class="ckeditor" name="nine_screen_text">
                                    {{ $data[0]->nine_screen_text }}
                                    </textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Nine Screen Button text</label>
                                    <input type="text" class="form-control" name="nine_screen_button_text"
                                        value="{{ $data[0]->nine_screen_button_text }}"
                                        placeholder="Main tag line second">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Ten Screen Text</label>
                                    <textarea class="ckeditor" name="ten_screen_text">
                                    {{ $data[0]->ten_screen_text }}
                                    </textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Ten Screen Sub Text</label>
                                    <textarea class="ckeditor" name="ten_screen_sub_text">
                                    {{ $data[0]->ten_screen_sub_text }}
                                    </textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Ten Screen Background Image</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" type="file" class="custom-file-input"
                                                id="exampleInputFile" name="ten_screen_background_img">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                    </div>
                                    <img src="{{ url('/uploads') }}/{{ $data[0]->ten_screen_background_img }}"
                                        height="100" width="100">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Ten Screen Center Image</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" type="file" class="custom-file-input"
                                                id="exampleInputFile" name="ten_screen_center_img">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                    </div>
                                    <img src="{{ url('/uploads') }}/{{ $data[0]->ten_screen_center_img }}"
                                        height="100" width="100">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Right Answer Background Image</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" type="file" class="custom-file-input"
                                                id="exampleInputFile" name="right_background_img">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                    </div>
                                    <img src="{{ url('/uploads') }}/{{ $data[0]->right_background_img }}" height="100"
                                        width="100">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Wrong Answer Background Image</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" type="file" class="custom-file-input"
                                                id="exampleInputFile" name="wrong_background_img">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                    </div>
                                    <img src="{{ url('/uploads') }}/{{ $data[0]->wrong_background_img }}" height="100"
                                        width="100">
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                        </form>
                    </div>
                </div>
                <!-- /.card -->


            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.row (main row) -->
@endsection

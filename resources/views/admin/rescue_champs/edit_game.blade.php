@extends('admin.main-layout')

@section('content-header')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Edit Rescue Champs</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Rescue Champs</li>
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
                            <h3 class="card-title">Edit Rescue Champs</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ route('update_rescue_champs') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Ticker Time</label>
                                    <input type="text" class="form-control" name="ticker_time"
                                        value="{{ $data_img[0]->ticker_time }}" placeholder="Ticker Time" maxlength="4">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">First Screen Title</label>
                                    <input type="text" class="form-control" name="first_screen_title"
                                        placeholder="First Screen Title" value="{{ $data_img[0]->first_screen_title }}">
                                    <input type="hidden" name="member_id" value="{{ request('data') }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">First Screen Main Background</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" type="file" class="custom-file-input"
                                                id="exampleInputFile" name="first_screen_main_background_img">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                    </div>
                                    <img src="{{ asset('uploads/' . $data_img[0]->first_screen_circle_img) }}"
                                        alt="Tagline" width="100" class="tagline-img-preview" style="cursor: pointer">
                                </div>

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
                                </div>
                                <img src="{{ asset('uploads/' . $data_img[0]->first_screen_circle_img) }}" alt="Tagline"
                                    width="100" class="tagline-img-preview" style="cursor: pointer">

                                <div class="form-group">
                                    <label for="exampleInputPassword1">First Screen Button Text</label>
                                    <input type="text" class="form-control" name="first_screen_button_text"
                                        placeholder="Star Text" value="{{ $data_img[0]->first_screen_button_text }}">

                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Second Screen Title</label>
                                    <input type="text" class="form-control" name="second_screen_title"
                                        placeholder="Main tag line first"value="{{ $data_img[0]->second_screen_title }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Second Main Background</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" type="file" class="custom-file-input"
                                                id="exampleInputFile" name="second_main_background_img">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                    </div>
                                    <img src="{{ asset('uploads/' . $data_img[0]->second_main_background_img) }}"
                                        alt="Tagline" width="100" class="tagline-img-preview"
                                        style="cursor: pointer">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Second_screen_button_text</label>
                                    <input type="text" class="form-control" name="second_screen_button_text"
                                        placeholder="Main tag line second"value="{{ $data_img[0]->second_screen_button_text }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Third Screen Main Background</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" type="file" class="custom-file-input"
                                                id="exampleInputFile" name="third_screen_main_background_img">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                    </div>
                                     <img src="{{ asset('uploads/' . $data_img[0]->third_screen_main_background_img) }}"
                                        alt="Tagline" width="100" class="tagline-img-preview"
                                        style="cursor: pointer">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Third Screen wardname</label>
                                    <textarea class="ckeditor" name="third_screen_wardname">{{ $data_img[0]->third_screen_wardname }}
                      
                                    </textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Eight Screen Button Text</label>
                                    <input type="text" class="form-control" name="eight_screen_button_text"
                                        placeholder="Eight Screen Button Text"
                                        value="{{ $data_img[0]->eight_screen_button_text }}">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputFile">Nine Screen Video</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" type="file" class="custom-file-input"
                                                id="exampleInputFile" name="nine_screen_video">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                    </div>
                                </div>
                                <img src="{{ asset('uploads/' . $data_img[0]->nine_screen_video) }}" alt="Tagline"
                                    width="100" class="tagline-img-preview" style="cursor: pointer">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Ten Screen Text</label>
                                    <textarea class="ckeditor" name="ten_screen_text">{{ $data_img[0]->ten_screen_text }}
                      
                                    </textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Ten Screen Button Text</label>
                                    <input type="text" class="form-control" name="ten_screen_button_text"
                                        placeholder="Ten Screen Button Text"value="{{ $data_img[0]->ten_screen_button_text }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Eleven Screen Image</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" type="file" class="custom-file-input"
                                                id="exampleInputFile" name="eleven_screen_image">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                    </div>
                                </div>
                                <img src="{{ asset('uploads/' . $data_img[0]->eleven_screen_image) }}" alt="Tagline"
                                    width="100" class="tagline-img-preview" style="cursor: pointer">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Eleven Screen Text</label>
                                    <textarea class="ckeditor" name="eleven_screen_text">
                                    {{ $data_img[0]->eleven_screen_text }}
                                    </textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Twelve Screen Image</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" type="file" class="custom-file-input"
                                                id="exampleInputFile" name="twelve_screen_image">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                    </div>
                                </div>
                                <img src="{{ asset('uploads/' . $data_img[0]->twelve_screen_image) }}" alt="Tagline"
                                    width="100" class="tagline-img-preview" style="cursor: pointer">
                                <div class="form-group">
                                    <label for="exampleInputFile">Therteen Screen Image</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" type="file" class="custom-file-input"
                                                id="exampleInputFile" name="therteen_screen_image">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                    </div>
                                </div>
                                <img src="{{ asset('uploads/' . $data_img[0]->therteen_screen_image) }}" alt="Tagline"
                                    width="100" class="tagline-img-preview" style="cursor: pointer">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Therteen Screen Text</label>
                                    <textarea class="ckeditor" name="therteen_screen_text">
                                    {{ $data_img[0]->therteen_screen_text }}
                                    </textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Fourteen Screen Image</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" type="file" class="custom-file-input"
                                                id="exampleInputFile" name="fourteen_screen_image">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                    </div>
                                </div>
                                <img src="{{ asset('uploads/' . $data_img[0]->fourteen_screen_image) }}" alt="Tagline"
                                    width="100" class="tagline-img-preview" style="cursor: pointer">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Fourteen Screen Text</label>
                                    <textarea class="ckeditor" name="fourteen_screen_text">
                                    {{ $data_img[0]->fourteen_screen_text }}
                                    </textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Fourteen Screen Sub Text</label>
                                    <textarea class="ckeditor" name="fourteen_screen_sub_text">
                                    {{ $data_img[0]->fourteen_screen_sub_text }}
                                    </textarea>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Right Title text</label>
                                    <input type="text" class="form-control" name="right_title_text"
                                        placeholder="Main tag line first" value="{{ $data_img[0]->right_title_text }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Wrong title text</label>
                                    <input type="text" class="form-control" name="wrong_title_text"
                                        placeholder="Main tag line first" value="{{ $data_img[0]->wrong_title_text }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Try again button text</label>
                                    <input type="text" class="form-control" name="try_again_button_text"
                                        placeholder="Main tag line first"
                                        value="{{ $data_img[0]->try_again_button_text }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Next button text</label>
                                    <input type="text" class="form-control" name="next_button_text"
                                        placeholder="Main tag line first" value="{{ $data_img[0]->next_button_text }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Enter button text</label>
                                    <input type="text" class="form-control" name="enter_button_text"
                                        placeholder="Main tag line first" value="{{ $data_img[0]->enter_button_text }}">
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

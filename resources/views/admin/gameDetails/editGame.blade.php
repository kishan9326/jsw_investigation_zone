@extends('admin.main-layout')

@section('content-header')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Game Content</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Game Content</li>
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
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Add Game Content</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ route('updateGame') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Game Name</label>
                                    <input type="text" class="form-control" name="game_name" placeholder="Game Name" value="{{ $data[0]->game_name }}">
                                </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">About the mission</label>
                                <textarea class="ckeditor" name="about_mission">
                                {{ $data[0]->about_text }}
                                </textarea>
                            </div>
                           
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Duration</label>
                                    <input type="text" class="form-control" name="duration" placeholder="Duration" value="{{ $data[0]->duration_time }}">
                                    <input type="hidden" name="id" value="{{ $data[0]->id }}">
                                </div>
                       
                            <div class="form-group">
                                    <label for="exampleInputFile">Upload Big image</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" type="file" class="custom-file-input"
                                                id="exampleInputFile" name="big_image">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                    </div>
                                    <img src="{{ asset('uploads/' . $data[0]->big_img) }}"
                                alt="Tagline" width="100" class="tagline-img-preview" style="cursor: pointer">
                            </div>
                            <div class="form-group">
                                    <label for="exampleInputPassword1">Players Count</label>
                                    <input type="text" class="form-control" name="players_count" placeholder="Players Count" value="{{ $data[0]->players_count }}">
                            </div>

                            <!-- /.card-body -->

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

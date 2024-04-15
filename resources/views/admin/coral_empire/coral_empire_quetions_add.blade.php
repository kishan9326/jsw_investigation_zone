@extends('admin.main-layout')

@section('content-header')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Coral Quetions Content</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Coral Quetions Content</li>
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
                            <h3 class="card-title">Add Coral Quetions Content</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ route('savecosmicEmpireQuetions') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Quetion</label>
                                <textarea class="ckeditor" name="question">
                      
                                </textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Question Sub Text</label>
                                <textarea class="ckeditor" name="question_sub_text">
                      
                                </textarea>
                            </div>
                            <div class="form-group">
                                    <label for="exampleInputPassword1">Answer</label>
                                    <input type="text" class="form-control" name="answer" placeholder="Answer">
                            </div>
                            <div class="form-group">
                                    <label for="exampleInputFile">Background_img</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" type="file" class="custom-file-input"
                                                id="exampleInputFile" name="quetion_image">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                    </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Right Answer Fact</label>
                                <textarea class="ckeditor" name="right_answer_fact">
                      
                                </textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Wrong Answer Fact</label>
                                <textarea class="ckeditor" name="wrong_answer_fact">
                      
                                </textarea>
                            </div>
                           
                            <div class="form-group">
                                    <label for="exampleInputPassword1">MCQ options</label>
                                    <input type="text" class="form-control" name="macq_option" placeholder="MCQ options">
                            </div>              
                            <div class="form-group">
                                    <label for="exampleInputFile">MCQ image</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input"
                                                id="exampleInputFile" name="mcq_images" multiple>
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                            </div>
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

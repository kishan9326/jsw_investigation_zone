@extends('admin.main-layout')

@section('content-header')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Rescue Champ Questions Content</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Rescue Champ Questions Content</li>
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
                            <h3 class="card-title">Rescue Champ Questions Content</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ route('updateRescueChampQuetions') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Quetion</label>
                                <textarea class="ckeditor" name="question">
                                {{ $data[0]->question }}
                                </textarea>
                            </div>
                            <input type="hidden" name="id" value="{{ $data[0]->id }}">
                            <div class="form-group">
                                    <label for="exampleInputPassword1">Answer</label>
                                    <input type="text" class="form-control" name="answer" placeholder="Answer" value="{{ $data[0]->answer }}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Right Answer Fact</label>
                                <textarea class="ckeditor" name="right_answer_fact">
                                {{ $data[0]->right_answer_fact }}
                                </textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Wrong Answer Fact</label>
                                <textarea class="ckeditor" name="wrong_answer_fact">
                                {{ $data[0]->wrong_answer_fact }}
                                </textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Hint</label>
                                <textarea class="ckeditor" name="hint">
                                {{ $data[0]->hint }}
                                </textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">right_title_text</label>
                                <textarea class="ckeditor" name="right_title_text">
                                {{ $data[0]->right_title_text }}
                                </textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">wrong_title_text</label>
                                <textarea class="ckeditor" name="wrong_title_text">
                                {{ $data[0]->wrong_title_text }}
                                </textarea>
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

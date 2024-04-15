@extends('admin.main-layout')

@section('content-header')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Read Content</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Read Content</li>
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
                            <h3 class="card-title">Add Read Content</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ route('saveGameInfo2') }}" method="post" enctype="multipart/form-data">
                            @csrf

                            {{-- -------------------------SCREEN 1 STARTS---------------------------- --}}
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">S1headline</label>
                                    <input type="text" class="form-control" name="S1headline" placeholder="S1headline">
                                    <input type="hidden" name="member_id" value="{{ request('data') }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Bgvideo1</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" type="file" class="custom-file-input"
                                                id="exampleInputFile" name="Bgvideo1">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">S1FirstText</label>
                                    <input type="text" class="form-control" name="S1FirstText" placeholder="S1FirstText">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">S1SecondText</label>
                                    <input type="text" class="form-control" name="S1SecondText"
                                        placeholder="Main tag line first">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">S1Enter</label>
                                    <input type="text" class="form-control" name="S1Enter"
                                        placeholder="Main tag line first">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">S1Image</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" type="file" class="custom-file-input"
                                                id="exampleInputFile" name="S1Image">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                    </div>
                                </div>

                                {{-- -------------------------SCREEN 1 ENDS---------------------------- -- --}}

                                {{-- -------------------------SCREEN 2 STARTS---------------------------- --}}

                                <div class="form-group">
                                    <label for="exampleInputFile">Bgvideo2</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" type="file" class="custom-file-input"
                                                id="exampleInputFile" name="Bgvideo2">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">S2Infotext</label>
                                    <input type="text" class="form-control" name="S2Infotext"
                                        placeholder="Main tag line first">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputFile">S2Image</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" type="file" class="custom-file-input"
                                                id="exampleInputFile" name="S2Image">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">S2Enter</label>
                                    <input type="text" class="form-control" name="S2Enter" placeholder="S1FirstText">
                                </div>

                                {{-- -------------------------SCREEN 2 ENDS---------------------------- -- --}}

                                {{-- -------------------------SCREEN 3 STARTS---------------------------- --}}



                                    <div class="form-group">
                                        <label for="exampleInputPassword1">S3Infotext</label>
                                        <input type="text" class="form-control" name="S3Infotext"
                                            placeholder="Main tag line first">
                                    </div>



                                    <div class="form-group">
                                        <label for="exampleInputPassword1">S3Enter</label>
                                        <input type="text" class="form-control" name="S3Enter" placeholder="S1FirstText">
                                    </div>

                                {{-- -------------------------SCREEN 3 ENDS---------------------------- --}}







                                {{-- -------------------------SCREEN 4 STARTS---------------------------- --}}
                                
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">S4Infotext</label>
                                        <input type="text" class="form-control" name="S4Infotext"
                                            placeholder="S4Infotext">

                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputPassword1">S4Question</label>
                                        <input type="text" class="form-control" name="S4Question"
                                            placeholder="S4Question">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputPassword1">S4Answer1</label>
                                        <input type="text" class="form-control" name="S4Answer1"
                                            placeholder="Main tag line first">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">S4Answer2</label>
                                        <input type="text" class="form-control" name="S4Answer2"
                                            placeholder="Main tag line first">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputPassword1">S4Submit</label>
                                        <input type="text" class="form-control" name="S4Submit"
                                            placeholder="Main tag line first">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">S4Rightanswer</label>
                                        <input type="text" class="form-control" name="S4Rightanswer"
                                            placeholder="Main tag line first">
                                    </div>


                                    <div class="form-group">
                                        <label for="exampleInputFile">S4RightImage</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" type="file" class="custom-file-input"
                                                    id="exampleInputFile" name="S4RightImage">
                                                <label class="custom-file-label" for="exampleInputFile">Choose
                                                    file</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text">Upload</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputPassword1">S4RightFact</label>
                                        <input type="text" class="form-control" name="S4RightFact"
                                            placeholder="Main tag line first">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">S4Next</label>
                                        <input type="text" class="form-control" name="S4Next"
                                            placeholder="Main tag line first">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputPassword1">S4Wronganswer</label>
                                        <input type="text" class="form-control" name="S4Wronganswer"
                                            placeholder="Main tag line first">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">S4Tryagain</label>
                                        <input type="text" class="form-control" name="S4Tryagain"
                                            placeholder="Main tag line first">
                                    </div>
                                    {{-- -------------------------SCREEN 4 ENDS---------------------------- -- --}}



                                    {{-- -------------------------SCREEN 5 STARTS---------------------------- --}}

                                    <div class="form-group">
                                        <label for="exampleInputFile">S5Bgimage</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" type="file" class="custom-file-input"
                                                    id="exampleInputFile" name="S5Bgimage">
                                                <label class="custom-file-label" for="exampleInputFile">Choose
                                                    file</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text">Upload</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputPassword1">S5Infotext1</label>
                                        <input type="text" class="form-control" name="S5Infotext1"
                                            placeholder="S5Infotext1">

                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputPassword1">S5Infotext2</label>
                                        <input type="text" class="form-control" name="S5Infotext2"
                                            placeholder="S5Infotext2">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputPassword1">S5Enter</label>
                                        <input type="text" class="form-control" name="S5Enter"
                                            placeholder="Main tag line first">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputFile">S5QuestionImage</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" type="file" class="custom-file-input"
                                                    id="exampleInputFile" name="S5QuestionImage">
                                                <label class="custom-file-label" for="exampleInputFile">Choose
                                                    file</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text">Upload</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputPassword1">S5Question</label>
                                        <input type="text" class="form-control" name="S5Question"
                                            placeholder="Main tag line first">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">S5Submit</label>
                                        <input type="text" class="form-control" name="S5Submit"
                                            placeholder="Main tag line first">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">S5Answer</label>
                                        <input type="text" class="form-control" name="S5Answer"
                                            placeholder="Main tag line first">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">S5Rightanswer</label>
                                        <input type="text" class="form-control" name="S5Rightanswer"
                                            placeholder="Main tag line first">
                                    </div>


                                    <div class="form-group">
                                        <label for="exampleInputPassword1">S5RightFact</label>
                                        <input type="text" class="form-control" name="S5RightFact"
                                            placeholder="Main tag line first">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">S5Next</label>
                                        <input type="text" class="form-control" name="S5Next"
                                            placeholder="Main tag line first">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputPassword1">S5Wronganswer</label>
                                        <input type="text" class="form-control" name="S5Wronganswer"
                                            placeholder="Main tag line first">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">S5WrongInfo</label>
                                        <input type="text" class="form-control" name="S5WrongInfo"
                                            placeholder="Main tag line first">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">S5Tryagain</label>
                                        <input type="text" class="form-control" name="S5Tryagain"
                                            placeholder="Main tag line first">
                                    </div>
                                    {{-- -------------------------SCREEN 5 ENDS---------------------------- -- --}}





                                    {{-- -------------------------SCREEN 6 STARTS---------------------------- --}}



                                    <div class="form-group">
                                        <label for="exampleInputPassword1">S6Infotext</label>
                                        <input type="text" class="form-control" name="S6Infotext"
                                            placeholder="S6Infotext">

                                    </div>



                                    <div class="form-group">
                                        <label for="exampleInputPassword1">S6Enter</label>
                                        <input type="text" class="form-control" name="S6Enter"
                                            placeholder="Main tag line first">
                                    </div>



                                    <div class="form-group">
                                        <label for="exampleInputPassword1">S6Question</label>
                                        <input type="text" class="form-control" name="S6Question"
                                            placeholder="Main tag line first">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">S6Answer</label>
                                        <input type="text" class="form-control" name="S6Answer"
                                            placeholder="Main tag line first">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">S6Submit</label>
                                        <input type="text" class="form-control" name="S6Submit"
                                            placeholder="Main tag line first">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">S6Rightanswer</label>
                                        <input type="text" class="form-control" name="S6Rightanswer"
                                            placeholder="Main tag line first">
                                    </div>


                                    <div class="form-group">
                                        <label for="exampleInputPassword1">S6RightFact</label>
                                        <input type="text" class="form-control" name="S6RightFact"
                                            placeholder="Main tag line first">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">S6Next</label>
                                        <input type="text" class="form-control" name="S6Next"
                                            placeholder="Main tag line first">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputPassword1">S6Wronganswer</label>
                                        <input type="text" class="form-control" name="S6Wronganswer"
                                            placeholder="Main tag line first">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">S6Tryagain</label>
                                        <input type="text" class="form-control" name="S6Tryagain"
                                            placeholder="Main tag line first">
                                    </div>

                                    {{-- -------------------------SCREEN 6 ENDS---------------------------- -- --}}





                                    {{-- -------------------------SCREEN 7 STARTS---------------------------- --}}





                                    <div class="form-group">
                                        <label for="exampleInputPassword1">S7Infotext</label>
                                        <input type="text" class="form-control" name="S7Infotext"
                                            placeholder="Main tag line first">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">S7Enter</label>
                                        <input type="text" class="form-control" name="S7Enter"
                                            placeholder="Main tag line first">
                                    </div>



                                    {{-- -------------------------SCREEN 7 ENDS---------------------------- -- --}}






                                    {{-- -------------------------SCREEN 8 STARTS---------------------------- --}}






                                    <div class="form-group">
                                        <label for="exampleInputPassword1">S8Question</label>
                                        <input type="text" class="form-control" name="S8Question"
                                            placeholder="Main tag line first">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">S8Answer1</label>
                                        <input type="text" class="form-control" name="S8Answer1"
                                            placeholder="Main tag line first">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">S8Answer2</label>
                                        <input type="text" class="form-control" name="S8Answer2"
                                            placeholder="Main tag line first">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">S8Submit</label>
                                        <input type="text" class="form-control" name="S8Submit"
                                            placeholder="Main tag line first">
                                    </div>



                                    <div class="form-group">
                                        <label for="exampleInputPassword1">S8Rightanswer</label>
                                        <input type="text" class="form-control" name="S8Rightanswer"
                                            placeholder="Main tag line first">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">S8RightFact</label>
                                        <input type="text" class="form-control" name="S8RightFact"
                                            placeholder="Main tag line first">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputPassword1">S8Next</label>
                                        <input type="text" class="form-control" name="S8Next"
                                            placeholder="Main tag line first">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">S8Wronganswer</label>
                                        <input type="text" class="form-control" name="S8Wronganswer"
                                            placeholder="Main tag line first">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">S8Tryagain</label>
                                        <input type="text" class="form-control" name="S8Tryagain"
                                            placeholder="Main tag line first">
                                    </div>

                                    {{-- -------------------------SCREEN 8 ENDS---------------------------- -- --}}




                                    {{-- -------------------------SCREEN 9 STARTS---------------------------- --}}


                                    <div class="form-group">
                                        <label for="exampleInputPassword1">S9Infotext</label>
                                        <input type="text" class="form-control" name="S9Infotext"
                                            placeholder="Main tag line first">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">S9Enter</label>
                                        <input type="text" class="form-control" name="S9Enter"
                                            placeholder="Main tag line first">
                                    </div>
                                    {{-- -------------------------SCREEN 9 ENDS---------------------------- -- --}}
                                    {{-- -------------------------SCREEN 10 STARTS---------------------------- --}}


                                    <div class="form-group">
                                        <label for="exampleInputPassword1">S10Infotext</label>
                                        <input type="text" class="form-control" name="S10Infotext"
                                            placeholder="Main tag line first">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">S10Enter</label>
                                        <input type="text" class="form-control" name="S10Enter"
                                            placeholder="Main tag line first">
                                    </div>
                                    {{-- -------------------------SCREEN 10 ENDS---------------------------- -- --}}

                                    {{-- -------------------------SCREEN 11 STARTS---------------------------- --}}


                                    <div class="form-group">
                                        <label for="exampleInputPassword1">S11Title</label>
                                        <input type="text" class="form-control" name="S11Title"
                                            placeholder="Main tag line first">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">S11Infotext</label>
                                        <input type="text" class="form-control" name="S11Infotext"
                                            placeholder="Main tag line first">
                                    </div>
                                    {{-- -------------------------SCREEN 11 ENDS---------------------------- -- --}}

















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

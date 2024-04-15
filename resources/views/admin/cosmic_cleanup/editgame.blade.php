@extends('admin.main-layout')

@section('content-header')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Edit Cosmic Cleanup</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Cosmic Cleanup</li>
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
                            <h3 class="card-title">Edit Game 2 Data</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ route('updateGameInfo2') }}" method="post" enctype="multipart/form-data">
                            @csrf

                            {{-- -------------------------SCREEN 1 STARTS---------------------------- --}}
                            <div class="card-body">
                               <div class="form-group">
                                    <label for="exampleInputPassword1">Ticker Time</label>
                                    <input type="text" class="form-control" name="ticker_time" value="{{$data_img[0]->ticker_time}}" placeholder="Ticker Time" maxlength="4">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">S1headline</label>
                                    <input type="text" class="form-control" name="S1headline" placeholder="S1headline"  value="{{ $data_img[0]->S1headline }}">
                                    
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
                                    {{-- <input type="text" class="form-control" name="S1FirstText" placeholder="S1FirstText" value="{{ $data_img[0]->S1FirstText }}"> --}}
                                    <textarea class="ckeditor" name="S1FirstText" id="" cols="30" rows="10">{{ $data_img[0]->S1FirstText }}</textarea>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">S1SecondText</label>
                                    {{-- <input type="text" class="form-control" name="S1SecondText"
                                        placeholder="Main tag line first" value="{{ $data_img[0]->S1SecondText }}"> --}}
                                        <textarea class="ckeditor" name="S1SecondText" id="" cols="30" rows="10">{{ $data_img[0]->S1SecondText }}</textarea>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">S1Enter</label>
                                    <input type="text" class="form-control" name="S1Enter"
                                        placeholder="Main tag line first" value="{{ $data_img[0]->S1Enter }}">
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
                                <img src="{{ asset('uploads/game2/' . $data_img[0]->S1Image) }}"
                                alt="Tagline" width="100" class="tagline-img-preview" style="cursor: pointer">

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
                                    {{-- <input type="text" class="form-control" name="S2Infotext"
                                        placeholder="Main tag line first" value="{{ $data_img[0]->S2Infotext }}"> --}}
                                        <textarea class="ckeditor" name="S2Infotext" id="" cols="30" rows="10">{{ $data_img[0]->S2Infotext }}</textarea>
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
                                <img src="{{ asset('uploads/game2/' . $data_img[0]->S2Image) }}"
                                alt="Tagline" width="100" class="tagline-img-preview" style="cursor: pointer">

                                <div class="form-group">
                                    <label for="exampleInputPassword1">S2Enter</label>
                                    <input type="text" class="form-control" name="S2Enter" placeholder="S2Enter"  value="{{ $data_img[0]->S2Enter }}">
                                </div>

                                {{-- -------------------------SCREEN 2 ENDS---------------------------- -- --}}

                                {{-- -------------------------SCREEN 3 STARTS---------------------------- --}}


                                <div class="form-group">
                                    <label for="exampleInputFile">Bgvideo3</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" type="file" class="custom-file-input"
                                                id="exampleInputFile" name="Bgvideo3">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                    </div>
                                </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">S3Infotext</label>
                                        {{-- <input type="text" class="form-control" name="S3Infotext"
                                            placeholder="Main tag line first" value="{{ $data_img[0]->S3Infotext }}"> --}}
                                            <textarea class="ckeditor" name="S3Infotext" id="" cols="30" rows="10">{{ $data_img[0]->S3Infotext }}</textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputPassword1">S3subtext</label>
                                        {{-- <input type="text" class="form-control" name="S3subtext"
                                            placeholder="Main tag line first" value="{{ $data_img[0]->S3subtext }}"> --}}
                                            <textarea class="ckeditor" name="S3subtext" id="" cols="30" rows="10">{{ $data_img[0]->S3subtext }}</textarea>
                                    </div>
                                    
                                    <div class="form-group">
                                    <label for="exampleInputPassword1">S3enter_two</label>
                                    <input type="text" class="form-control" name="S3enter_two" placeholder="s3enter_two" value="{{ $data_img[0]->S3enter_two }}">
                                    </div>
                                    


                                    <div class="form-group">
                                        <label for="exampleInputPassword1">S3Enter</label>
                                        <input type="text" class="form-control" name="S3Enter" placeholder="S1FirstText" value="{{ $data_img[0]->S3Enter }}">
                                    </div>

                                {{-- -------------------------SCREEN 3 ENDS---------------------------- --}}







                                {{-- -------------------------SCREEN 4 STARTS---------------------------- --}}
                                <div class="form-group">
                                    <label for="exampleInputFile">Bgvideo4</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" type="file" class="custom-file-input"
                                                id="exampleInputFile" name="Bgvideo4">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                    </div>
                                </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">S4Infotext</label>
                                        <!-- <input type="text" class="form-control" name="S4Infotext"
                                            placeholder="S4Infotext" value="{{ $data_img[0]->S4Infotext }}"> -->
                                            <textarea class="ckeditor" name="S4Infotext" id="" cols="30" rows="10">{{ $data_img[0]->S4Infotext }}</textarea>

                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputPassword1">S4Question</label>
                                        {{-- <input type="text" class="form-control" name="S4Question"
                                            placeholder="S4Question" value="{{ $data_img[0]->S4Question }}"> --}}
                                            <textarea class="ckeditor" name="S4Question" id="" cols="30" rows="10">{{ $data_img[0]->S4Question }}</textarea>

                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputPassword1">S4Answer1</label>
                                        <input type="text" class="form-control" name="S4Answer1"
                                            placeholder="Main tag line first" value="{{ $data_img[0]->S4Answer1 }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">S4Answer2</label>
                                        <input type="text" class="form-control" name="S4Answer2"
                                            placeholder="Main tag line first" value="{{ $data_img[0]->S4Answer2 }}">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputPassword1">S4Submit</label>
                                        <input type="text" class="form-control" name="S4Submit"
                                            placeholder="Main tag line first" value="{{ $data_img[0]->S4Submit }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">S4Rightanswer</label>
                                        <input type="text" class="form-control" name="S4Rightanswer"
                                            placeholder="Main tag line first" value="{{ $data_img[0]->S4Rightanswer }}">
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
                                    <img src="{{ asset('uploads/game2/' . $data_img[0]->S4RightImage) }}"
                                    alt="Tagline" width="100" class="tagline-img-preview" style="cursor: pointer">

                                    <div class="form-group">
                                        <label for="exampleInputPassword1">S4RightFact</label>
                                        <input type="text" class="form-control" name="S4RightFact"
                                            placeholder="Main tag line first" value="{{ $data_img[0]->S4RightFact }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">S4Next</label>
                                        <input type="text" class="form-control" name="S4Next"
                                            placeholder="Main tag line first" value="{{ $data_img[0]->S4Next }}">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputPassword1">S4Wronganswer</label>
                                        <input type="text" class="form-control" name="S4Wronganswer"
                                            placeholder="Main tag line first" value="{{ $data_img[0]->S4Wronganswer }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">S4Tryagain</label>
                                        <input type="text" class="form-control" name="S4Tryagain"
                                            placeholder="Main tag line first" value="{{ $data_img[0]->S4Tryagain }}">
                                    </div>
                                    {{-- -------------------------SCREEN 4 ENDS---------------------------- -- --}}



                                    {{-- -------------------------SCREEN 5 STARTS---------------------------- --}}
                                    <div class="form-group">
                                        <label for="exampleInputFile">Bgvideo5</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" type="file" class="custom-file-input"
                                                    id="exampleInputFile" name="Bgvideo5">
                                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text">Upload</span>
                                            </div>
                                        </div>
                                    </div>
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
                                    <img src="{{ asset('uploads/game2/' . $data_img[0]->S5Bgimage) }}"
                                    alt="Tagline" width="100" class="tagline-img-preview" style="cursor: pointer">

                                    <div class="form-group">
                                        <label for="exampleInputPassword1">S5Infotext1</label>
                                        <input type="text" class="form-control" name="S5Infotext1"
                                            placeholder="S5Infotext1" value="{{ $data_img[0]->S5Infotext1 }}">

                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputPassword1">S5Infotext2</label>
                                        {{-- <input type="text" class="form-control" name="S5Infotext2"
                                            placeholder="S5Infotext2" value="{{ $data_img[0]->S5Infotext2 }}"> --}}
                                            <textarea class="ckeditor" name="S5Infotext2" id="" cols="30" rows="10">{{ $data_img[0]->S5Infotext2 }}</textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputPassword1">S5Enter</label>
                                        <input type="text" class="form-control" name="S5Enter"
                                            placeholder="Main tag line first" value="{{ $data_img[0]->S5Enter }}">
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
                                    <img src="{{ asset('uploads/game2/' . $data_img[0]->S5QuestionImage) }}"
                                    alt="Tagline" width="100" class="tagline-img-preview" style="cursor: pointer">

                                    <div class="form-group">
                                        <label for="exampleInputPassword1">S5Question</label>
                                        <input type="text" class="form-control" name="S5Question"
                                            placeholder="Main tag line first" value="{{ $data_img[0]->S5Question }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">S5Submit</label>
                                        <input type="text" class="form-control" name="S5Submit"
                                            placeholder="Main tag line first" value="{{ $data_img[0]->S5Submit }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">S5Answer</label>
                                        <input type="text" class="form-control" name="S5Answer"
                                            placeholder="Main tag line first" value="{{ $data_img[0]->S5Answer }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">S5Answer_2</label>
                                        <input type="text" class="form-control" name="S5Answer_2"
                                            placeholder="Main tag line first" value="{{ $data_img[0]->S5Answer_2 }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">S5Rightanswer</label>
                                        <input type="text" class="form-control" name="S5Rightanswer"
                                            placeholder="Main tag line first" value="{{ $data_img[0]->S5Rightanswer }}">
                                    </div>


                                    <div class="form-group">
                                        <label for="exampleInputPassword1">S5RightFact</label>
                                        <input type="text" class="form-control" name="S5RightFact"
                                            placeholder="Main tag line first" value="{{ $data_img[0]->S5RightFact }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">S5Next</label>
                                        <input type="text" class="form-control" name="S5Next"
                                            placeholder="Main tag line first" value="{{ $data_img[0]->S5Next }}">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputPassword1">S5Wronganswer</label>
                                        <input type="text" class="form-control" name="S5Wronganswer"
                                            placeholder="Main tag line first" value="{{ $data_img[0]->S5Wronganswer }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">S5WrongInfo</label>
                                        <input type="text" class="form-control" name="S5WrongInfo"
                                            placeholder="Main tag line first" value="{{ $data_img[0]->S5WrongInfo }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">S5Tryagain</label>
                                        <input type="text" class="form-control" name="S5Tryagain"
                                            placeholder="Main tag line first" value="{{ $data_img[0]->S5Tryagain }}">
                                    </div>
                                    {{-- -------------------------SCREEN 5 ENDS---------------------------- -- --}}





                                    {{-- -------------------------SCREEN 6 STARTS---------------------------- --}}

                                    <div class="form-group">
                                        <label for="exampleInputFile">Bgvideo6</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" type="file" class="custom-file-input"
                                                    id="exampleInputFile" name="Bgvideo6">
                                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text">Upload</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputPassword1">S6Infotext</label>
                                        {{-- <input type="text" class="form-control" name="S6Infotext"
                                            placeholder="S6Infotext" value="{{ $data_img[0]->S6Infotext }}"> --}}
                                            <textarea class="ckeditor" name="S6Infotext" id="" cols="30" rows="10">{{ $data_img[0]->S6Infotext }}</textarea>

                                    </div>



                                    <div class="form-group">
                                        <label for="exampleInputPassword1">S6Enter</label>
                                        <input type="text" class="form-control" name="S6Enter"
                                            placeholder="Main tag line first" value="{{ $data_img[0]->S6Enter }}">
                                    </div>



                                    <div class="form-group">
                                        <label for="exampleInputPassword1">S6Question</label>
                                        <input type="text" class="form-control" name="S6Question"
                                            placeholder="Main tag line first" value="{{ $data_img[0]->S6Question }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">S6Answer</label>
                                        <input type="text" class="form-control" name="S6Answer"
                                            placeholder="Main tag line first" value="{{ $data_img[0]->S6Answer }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">S6Submit</label>
                                        <input type="text" class="form-control" name="S6Submit"
                                            placeholder="Main tag line first" value="{{ $data_img[0]->S6Submit }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">S6Rightanswer</label>
                                        <input type="text" class="form-control" name="S6Rightanswer"
                                            placeholder="Main tag line first" value="{{ $data_img[0]->S6Rightanswer }}">
                                    </div>


                                    <div class="form-group">
                                        <label for="exampleInputPassword1">S6RightFact</label>
                                        <input type="text" class="form-control" name="S6RightFact"
                                            placeholder="Main tag line first" value="{{ $data_img[0]->S6RightFact }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">S6Next</label>
                                        <input type="text" class="form-control" name="S6Next"
                                            placeholder="Main tag line first" value="{{ $data_img[0]->S6Next }}">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputPassword1">S6Wronganswer</label>
                                        <input type="text" class="form-control" name="S6Wronganswer"
                                            placeholder="Main tag line first" value="{{ $data_img[0]->S6Wronganswer }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">S6Tryagain</label>
                                        <input type="text" class="form-control" name="S6Tryagain"
                                            placeholder="Main tag line first" value="{{ $data_img[0]->S6Tryagain }}">
                                    </div>

                                    {{-- -------------------------SCREEN 6 ENDS---------------------------- -- --}}





                                    {{-- -------------------------SCREEN 7 STARTS---------------------------- --}}


                                    <div class="form-group">
                                        <label for="exampleInputFile">Bgvideo7</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" type="file" class="custom-file-input"
                                                    id="exampleInputFile" name="Bgvideo7">
                                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text">Upload</span>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label for="exampleInputPassword1">S7Infotext</label>
                                        {{-- <input type="text" class="form-control" name="S7Infotext"
                                            placeholder="Main tag line first" value="{{ $data_img[0]->S7Infotext }}"> --}}
                                            <textarea class="ckeditor" name="S7Infotext" id="" cols="30" rows="10">{{ $data_img[0]->S7Infotext }}</textarea>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">S7Enter</label>
                                        <input type="text" class="form-control" name="S7Enter"
                                            placeholder="Main tag line first" value="{{ $data_img[0]->S7Enter }}">
                                    </div>



                                    {{-- -------------------------SCREEN 7 ENDS---------------------------- -- --}}






                                    {{-- -------------------------SCREEN 8 STARTS---------------------------- --}}



                                    <div class="form-group">
                                        <label for="exampleInputFile">Bgvideo8</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" type="file" class="custom-file-input"
                                                    id="exampleInputFile" name="Bgvideo8">
                                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text">Upload</span>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label for="exampleInputPassword1">S8Question</label>
                                        <input type="text" class="form-control" name="S8Question"
                                            placeholder="Main tag line first" value="{{ $data_img[0]->S8Question }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">S8Answer1</label>
                                        <input type="text" class="form-control" name="S8Answer1"
                                            placeholder="Main tag line first" value="{{ $data_img[0]->S8Answer1 }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">S8Answer2</label>
                                        <input type="text" class="form-control" name="S8Answer2"
                                            placeholder="Main tag line first" value="{{ $data_img[0]->S8Answer2 }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">S8Submit</label>
                                        <input type="text" class="form-control" name="S8Submit"
                                            placeholder="Main tag line first" value="{{ $data_img[0]->S8Submit }}">
                                    </div>



                                    <div class="form-group">
                                        <label for="exampleInputPassword1">S8Rightanswer</label>
                                        <input type="text" class="form-control" name="S8Rightanswer"
                                            placeholder="Main tag line first" value="{{ $data_img[0]->S8Rightanswer }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">S8RightFact</label>
                                        <input type="text" class="form-control" name="S8RightFact"
                                            placeholder="Main tag line first" value="{{ $data_img[0]->S8RightFact }}">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputPassword1">S8Next</label>
                                        <input type="text" class="form-control" name="S8Next"
                                            placeholder="Main tag line first" value="{{ $data_img[0]->S8Next }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">S8Wronganswer</label>
                                        <input type="text" class="form-control" name="S8Wronganswer"
                                            placeholder="Main tag line first" value="{{ $data_img[0]->S8Wronganswer }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">S8Tryagain</label>
                                        <input type="text" class="form-control" name="S8Tryagain"
                                            placeholder="Main tag line first" value="{{ $data_img[0]->S8Tryagain }}">
                                    </div>

                                    {{-- -------------------------SCREEN 8 ENDS---------------------------- -- --}}




                                    {{-- -------------------------SCREEN 9 STARTS---------------------------- --}}

                                    <div class="form-group">
                                        <label for="exampleInputFile">Bgvideo9</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" type="file" class="custom-file-input"
                                                    id="exampleInputFile" name="Bgvideo9">
                                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text">Upload</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">S9Infotext</label>
                                        <input type="text" class="form-control" name="S9Infotext"
                                            placeholder="Main tag line first" value="{{ $data_img[0]->S9Infotext }}">
                                            {{-- <textarea class="ckeditor" name="S9Infotext" id="" cols="30" rows="10">{{ $data_img[0]->S9Infotext }}</textarea> --}}

                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">S9Enter</label>
                                        <input type="text" class="form-control" name="S9Enter"
                                            placeholder="Main tag line first" value="{{ $data_img[0]->S9Enter }}">
                                    </div>
                                    {{-- -------------------------SCREEN 9 ENDS---------------------------- -- --}}
                                    {{-- -------------------------SCREEN 10 STARTS---------------------------- --}}

                                    <div class="form-group">
                                        <label for="exampleInputFile">Bgvideo10</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" type="file" class="custom-file-input"
                                                    id="exampleInputFile" name="Bgvideo10">
                                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text">Upload</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">S10Infotext</label>
                                        <input type="text" class="form-control" name="S10Infotext"
                                            placeholder="Main tag line first" value="{{ $data_img[0]->S10Infotext }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">S10Enter</label>
                                        <input type="text" class="form-control" name="S10Enter"
                                            placeholder="Main tag line first" value="{{ $data_img[0]->S10Enter }}">
                                    </div>
                                    {{-- -------------------------SCREEN 10 ENDS---------------------------- -- --}}

                                    {{-- -------------------------SCREEN 11 STARTS---------------------------- --}}

                                    <div class="form-group">
                                        <label for="exampleInputFile">Bgvideo11</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" type="file" class="custom-file-input"
                                                    id="exampleInputFile" name="Bgvideo11">
                                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text">Upload</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">S11Title</label>
                                        <input type="text" class="form-control" name="S11Title"
                                            placeholder="Main tag line first" value="{{ $data_img[0]->S11Title }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">S11Infotext</label>
                                        <!-- <input type="text" class="form-control" name="S11Infotext"
                                            placeholder="Main tag line first" value="{{ $data_img[0]->S11Infotext }}"> -->
                                            
                                    <textarea class="ckeditor" name="S11Infotext" id="" cols="30" rows="10">{{ $data_img[0]->S11Infotext }}</textarea>
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

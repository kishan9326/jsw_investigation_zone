@extends('admin.main-layout')

@section('content-header')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Add Reconnect World</h1>
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
                            <h3 class="card-title">Add Read Content</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ route('updateReconnectWorld') }}" method="post" enctype="multipart/form-data">
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
                                    <label for="exampleInputPassword1">Description First</label>
                                    <textarea class="ckeditor" name="description_first">
                                      {{ $data[0]->description_first }}  
                                    </textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Description Second</label>
                                    <textarea class="ckeditor" name="description_second">
                                    {{ $data[0]->description_second }} 
                                    </textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">First Screen Main Background</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" type="file" class="custom-file-input"
                                                id="exampleInputFile" name="background_img">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                    </div>
                                    <img src="{{ url('/uploads') }}/{{ $data[0]->background_img }}" height="100"
                                        width="100">
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
                                    <img src="{{ url('/uploads') }}/{{ $data[0]->first_screen_circle_img }}" height="100"
                                        width="100">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Bottom Line Text</label>
                                    <textarea class="ckeditor" name="bottom_line_text">
                                      {{ $data[0]->bottom_line_text }}   
                                    </textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">First Screen Button Text</label>
                                    <input type="text" class="form-control" name="button_text"
                                        value="{{ $data[0]->button_text }}" placeholder="Star Text">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Second Main Background</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" type="file" class="custom-file-input"
                                                id="exampleInputFile" name="second_screen_bakground_img">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                    </div>
                                    <img src="{{ url('/uploads') }}/{{ $data[0]->second_screen_bakground_img }}"
                                        height="100" width="100">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Second Screen Bakground Center Image</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" type="file" class="custom-file-input"
                                                id="exampleInputFile" name="second_screen_bakground_center_img">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                    </div>
                                    <img src="{{ url('/uploads') }}/{{ $data[0]->second_screen_bakground_center_img }}"
                                        height="100" width="100">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Second Screen Title</label>
                                    <input type="text" class="form-control" name="second_screen_title"
                                        value="{{ $data[0]->second_screen_title }}" placeholder="Main tag line second">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Second Screen Text</label>
                                    <textarea class="ckeditor" name="second_screen_text">
                                    {{ $data[0]->second_screen_text }}
                                    </textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Second Screen Password</label>
                                    <input type="text" class="form-control" name="second_screen_password"
                                        value="{{ $data[0]->second_screen_password }}"
                                        placeholder="Main tag line second">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Second Screen Bottom Line Text</label>
                                    <textarea class="ckeditor" name="second_screen_bottom_line_text">
                                        {{ $data[0]->second_screen_bottom_line_text }}
                                    </textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Second Screen Button Text</label>
                                    <input type="text" class="form-control" name="second_screen_button_text"
                                        value="{{ $data[0]->second_screen_button_text }}"
                                        placeholder="Main tag line second">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Third Screen Main Background</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" type="file" class="custom-file-input"
                                                id="exampleInputFile" name="third_background_img">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                    </div>
                                    <img src="{{ url('/uploads') }}/{{ $data[0]->third_background_img }}" height="100"
                                        width="100">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Third Screen Bakground Center Image</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" type="file" class="custom-file-input"
                                                id="exampleInputFile" name="third_screen_bakground_center_img">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                    </div>
                                    <img src="{{ url('/uploads') }}/{{ $data[0]->third_screen_bakground_center_img }}"
                                        height="100" width="100">
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
                                <!-- <div class="form-group">
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
                                        </div> -->
                                <input type="hidden" name="id" value="{{ $data[0]->id }}">
                                <div class="form-group">

                                    @if (!empty($data[0]->fourth_screen_img))
                                        <label for="exampleInputFile">MCQ image</label>
                                        <div id="image-container">
                                            @foreach (explode(',', $data[0]->fourth_screen_img) as $index => $image)
                                                <div class="form-group image-input-group">
                                                    <div class="input-group">
                                                        <div class="custom-file">
                                                            <input type="file" class="custom-file-input"
                                                                name="fourth_screen_img[{{ $index }}]">
                                                            <input type="hidden" name="image_indexes[]"
                                                                value="{{ $index }}">
                                                            <label class="custom-file-label" for="exampleInputFile">Choose
                                                                file</label>
                                                        </div>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text">Upload</span>
                                                        </div>
                                                    </div>
                                                    <img src="{{ url('/uploads/' . $image) }}" height="70"
                                                        width="70" />
                                                    {{-- <button type="button"
                                                        class="btn btn-outline-danger remove-input-field" onClick="removeImg({{$index}});">Remove</button> --}}
                                                    <br><br>
                                                </div>
                                            @endforeach
                                        </div>

                                        <!--  <button class="btn btn-info" type="button" id="add-image-btn">Add Image</button>

                                                <input type="hidden" name="removed_indexes[]" id="removed_indexes"
                                                    value=""> -->
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Fourth Screen Text</label>
                                    <textarea class="ckeditor" name="fourth_screen_text">
                                       {{ $data[0]->fourth_screen_text }} 
                                    </textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Fourth Screen Button</label>
                                    <input type="text" class="form-control" name="fourth_screen_button"
                                        value="{{ $data[0]->fourth_screen_button }}"
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
                                                id="exampleInputFile" name="fifth_screen_background_centerimg">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                    </div>
                                    <img src="{{ url('/uploads') }}/{{ $data[0]->fifth_screen_background_centerimg }}"
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
                                        placeholder="Fifth Screen Button Text"
                                        value="{{ $data[0]->fifth_screen_button_text }}">
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
                                                id="exampleInputFile" name="sixth_screen_background_center_img">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                    </div>
                                        <img src="{{ url('/uploads') }}/{{ $data[0]->sixth_screen_background_center_img }}"
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
                                    <img src="{{ url('/uploads') }}/{{ $data[0]->sixth_screen_img }}" width="100">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Sixth Text</label>
                                    <textarea class="ckeditor" name="sixth_text">
                                    {{ $data[0]->sixth_text }} 
                                    </textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Seventh Screen Background Image</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" type="file" class="custom-file-input"
                                                id="exampleInputFile" name="sevanth_screen_background_img">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                    </div>
                                    <img src="{{ url('/uploads') }}/{{ $data[0]->sevanth_screen_background_img }}"
                                        height="100" width="100">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Seventh Screen Background Center Image</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" type="file" class="custom-file-input"
                                                id="exampleInputFile" name="sevanth_screen_background_center_img">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                    </div>
                                    <img src="{{ url('/uploads') }}/{{ $data[0]->sevanth_screen_background_center_img }}"
                                        height="100" width="100">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Seventh Screen Image</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" type="file" class="custom-file-input"
                                                id="exampleInputFile" name="sevanth_screen_img">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                    </div>
                                    <img src="{{ url('/uploads') }}/{{ $data[0]->sevanth_screen_img }}" width="100">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Seventh Text</label>
                                    <textarea class="ckeditor" name="sevanth_text">
                                    {{ $data[0]->sevanth_text }} 
                                    </textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Seventh Screen Option</label>
                                    <input type="text" class="form-control" name="sevanth_screen_option"
                                        value="{{ $data[0]->sevanth_screen_option }}" placeholder="Main tag line second">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Final Screen Background Image</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" type="file" class="custom-file-input"
                                                id="exampleInputFile" name="final_screen_background_img">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                    </div>
                                    <img src="{{ url('/uploads') }}/{{ $data[0]->final_screen_background_img }}"
                                        height="100" width="100">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Final Screen Image</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" type="file" class="custom-file-input"
                                                id="exampleInputFile" name="final_screen_img">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                    </div>
                                    <img src="{{ url('/uploads') }}/{{ $data[0]->final_screen_img }}" height="100"
                                        width="100">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Final Screen Title</label>
                                    <input type="text" class="form-control" name="final_screen_title"
                                        value="{{ $data[0]->final_screen_title }}" placeholder="Main tag line second">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Final Screen Bottom Text</label>
                                    <textarea class="ckeditor" name="final_screen_bottom_text">
                                    {{ $data[0]->final_screen_bottom_text }} 
                                    </textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Answer Background Image</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" type="file" class="custom-file-input"
                                                id="exampleInputFile" name="answer_background_img">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                    </div>
                                    <img src="{{ url('/uploads') }}/{{ $data[0]->answer_background_img }}"
                                        height="100" width="100">
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

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const imageContainer = document.getElementById("image-container");
            const addImageButton = document.getElementById("add-image-btn");

            addImageButton.addEventListener("click", function() {
                const newIndex = imageContainer.querySelectorAll("input[name^='fourth_screen_img']").length;

                const newInputGroup = document.createElement("div");
                newInputGroup.classList.add("form-group", "image-input-group");

                newInputGroup.innerHTML = `
                  <div class="input-group">
                      <div class="custom-file">
                          <input type="file" class="custom-file-input" name="fourth_screen_img[${newIndex}]">
                          <input type="hidden" name="image_indexes[]" value="${newIndex}">
                          <label class="custom-file-label" for="fourth_screen_img_${newIndex}">Choose file</label>
                      </div>
                      <div class="input-group-append">
                          <span class="input-group-text">Upload</span>
                      </div>
                  </div>
                  <button type="button" class="btn btn-outline-danger remove-input-field">Remove</button>
              `;

                imageContainer.appendChild(newInputGroup);

                // Add event listener to the newly created input field to update the label text
                const fileInput = newInputGroup.querySelector(
                    `input[name='fourth_screen_img[${newIndex}]']`);
                const label = newInputGroup.querySelector(`label[for='fourth_screen_img_${newIndex}']`);

                fileInput.addEventListener("change", function() {
                    if (fileInput.files.length > 0) {
                        label.textContent = fileInput.files[0].name;
                    } else {
                        label.textContent = "Choose file";
                    }
                });
            });

            // Listen to remove button clicks and remove the corresponding image input group.
            imageContainer.addEventListener("click", function(event) {
                if (event.target && event.target.classList.contains("remove-input-field")) {
                    const inputGroup = event.target.closest(".image-input-group");
                    if (inputGroup) {
                        const input = inputGroup.querySelector("input[name^='fourth_screen_img']");
                        if (input) {
                            const index = input.getAttribute("name").match(/\[(\d+)\]/)[1];
                            console.log("Removing index:", index);

                            const removedIndexesInput = document.getElementById("removed_indexes");
                            const removedIndexes = removedIndexesInput.value.split(",").filter(Boolean);
                            removedIndexes.push(index);
                            removedIndexesInput.value = removedIndexes.join(",");
                        }
                        imageContainer.removeChild(inputGroup);
                    }
                }
            });
        });
    </script>
    <script type="text/javascript">
        function removeImg(id) {
            //alert(id);
            $.ajax({
                type: "GET",
                url: '/admin/removeImg/' + id, // This is what I have updated
                data: {
                    id: id
                }
            }).done(function(msg) {
                alert(msg);
            })
        }
    </script>
@endsection

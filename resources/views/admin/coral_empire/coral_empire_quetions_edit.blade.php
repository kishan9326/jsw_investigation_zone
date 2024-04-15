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
                            <h3 class="card-title">Coral Quetions Content</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ route('updateCosmicEmpireQuetions') }}" method="post" enctype="multipart/form-data">
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
                                <label for="exampleInputPassword1">Question Sub Text</label>
                                <textarea class="ckeditor" name="question_sub_text">
                                {{ $data[0]->question_sub_text }}
                                </textarea>
                            </div>
                            <div class="form-group">
                                    <label for="exampleInputPassword1">Question Button Text</label>
                                    <input type="text" class="form-control" name="quetion_button_text" placeholder="Question Button Text" value="{{ $data[0]->quetion_button_text }}">
                            </div>
                            <div class="form-group">
                                    <label for="exampleInputPassword1">Answer</label>
                                    <input type="text" class="form-control" name="answer" placeholder="Answer" value="{{ $data[0]->answer }}">
                            </div>
                            <div class="form-group">
                                    <label for="exampleInputFile">Question Image</label>
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
                                 <img src="{{ url('/uploads') }}/{{ $data[0]->quetion_image }}"
                                        height="100" width="100">
                            </div>
                            <div class="form-group">
                                    <label for="exampleInputFile">Background_img</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" type="file" class="custom-file-input"
                                                id="exampleInputFile" name="quetion_background_img">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                    </div>
                                 <img src="{{ url('/uploads') }}/{{ $data[0]->quetion_background_img }}"
                                        height="100" width="100">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Right Answer Fact</label>
                                <textarea class="ckeditor" name="right_answer_fact">
                                {{ $data[0]->right_fact }}
                                </textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Wrong Answer Fact</label>
                                <textarea class="ckeditor" name="wrong_answer_fact">
                                {{ $data[0]->wrong_fact }}
                                </textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Right Answer Text</label>
                                <textarea class="ckeditor" name="right_text">
                                {{ $data[0]->right_text }}
                                </textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Wrong Answer Text</label>
                                <textarea class="ckeditor" name="wrong_text">
                                {{ $data[0]->wrong_text }}
                                </textarea>
                            </div>
                            <div class="form-group">
                                    <label for="exampleInputPassword1">MCQ options</label>
                                    <input type="text" class="form-control" name="macq_option" placeholder="MCQ options" value="{{ $data[0]->macq_option }}">
                            </div>              
                            <div class="form-group">
                                    <!-- <label for="exampleInputFile">MCQ image</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input"
                                                id="exampleInputFile" name="mcq_images" multiple>
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                            </div> -->
                            @if (!empty($data[0]->mcq_images))
                            <label for="exampleInputFile">MCQ image</label>
                            <div id="image-container">
                                @foreach (explode(',', $data[0]->mcq_images) as $index => $image)
                                    <div class="form-group image-input-group">
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input"
                                                    name="mcq_images[{{ $index }}]">
                                                <input type="hidden" name="image_indexes[]"
                                                    value="{{ $index }}">
                                                <label class="custom-file-label" for="exampleInputFile">Choose
                                                    file</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text">Upload</span>
                                            </div>
                                        </div>
                                        <img src="{{ url('/uploads/' . $image) }}" height="70" width="70" />
                                        <button type="button"
                                            class="btn btn-outline-danger remove-input-field" onClick="removeImg({{$index}})">Remove</button>
                                        <br><br>
                                    </div>
                                @endforeach
                            </div>
<!-- 
                            <button class="btn btn-info" type="button" id="add-image-btn">Add Image</button>

                            <input type="hidden" name="removed_indexes[]" id="removed_indexes" value=""> -->
                        @endif

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
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const imageContainer = document.getElementById("image-container");
            const addImageButton = document.getElementById("add-image-btn");

            addImageButton.addEventListener("click", function() {
                const newIndex = imageContainer.querySelectorAll("input[name^='mcq_images']").length;

                const newInputGroup = document.createElement("div");
                newInputGroup.classList.add("form-group", "image-input-group");

                newInputGroup.innerHTML = `
                  <div class="input-group">
                      <div class="custom-file">
                          <input type="file" class="custom-file-input" name="mcq_images[${newIndex}]">
                          <input type="hidden" name="image_indexes[]" value="${newIndex}">
                          <label class="custom-file-label" for="mcq_images_${newIndex}">Choose file</label>
                      </div>
                      <div class="input-group-append">
                          <span class="input-group-text">Upload</span>
                      </div>
                  </div>
                  <button type="button" class="btn btn-outline-danger remove-input-field">Remove</button>
              `;

                imageContainer.appendChild(newInputGroup);

                // Add event listener to the newly created input field to update the label text
                const fileInput = newInputGroup.querySelector(`input[name='mcq_images[${newIndex}]']`);
                const label = newInputGroup.querySelector(`label[for='mcq_images_${newIndex}']`);

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
                        const input = inputGroup.querySelector("input[name^='mcq_images']");
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
        function removeImg(id)
        {
            //alert(id);
            $.ajax({
            type: "GET",
            url: '/admin/removeCoralImg/'+id, // This is what I have updated
            data: { id: id }
            }).done(function( msg ) {
            alert( msg );
            })    
        }
        
    </script>
@endsection

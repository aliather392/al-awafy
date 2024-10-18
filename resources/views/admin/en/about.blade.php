<x-admin.layouts>
    <div class="card">
        <div class="card-body">
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseZero" aria-expanded="true" aria-controls="collapseZero">
                            Meta Section
                        </button>
                    </h2>
                    <div id="collapseZero" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <form action="" class="mt-5 formValidation">
                                <input type="hidden" name="language" value="english">
                                <div class="row gy-4">
                                    <div class="col-6">

                                        <div>
                                            <label for="">Meta title</label>
                                            <input class="form-control"></input>
                                            <p class="errMsg text-danger"></p>
                                        </div>
                                    </div>
                                    <div class="col-6">

                                        <div>
                                            <label for="">Meta Description</label>
                                            <input class="form-control"></input>
                                            <p class="errMsg text-danger"></p>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div>
                                            <label for="">Canonical</label>
                                            <input class="form-control"></input>
                                            <p class="errMsg text-danger"></p>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary">Save</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseZero2" aria-expanded="false" aria-controls="collapseZero2">
                            Banner Image
                        </button>
                    </h2>
                    <div id="collapseZero2" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div>
                                <form action="" class="mt-5 formValidation2">
                                    <input type="hidden" name="language" value="english">
                                    <div class="row gy-4">
                                        <div class="col-6">
                                            <div>
                                                <label for="banner_1_image">Banner Image</label>
                                                <input type="file" class="form-control " name="banner_1_image"
                                                    id="bannerImageInput1">

                                                <p class="text-danger fileError"></p>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <img src="" alt="" id="uploadedImage1"
                                                style="background-color:lightgrey; max-width: 1600px; width: 100%; height: 460px; object-fit: contain; display: none;">
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary">Save</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                            About us section
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">

                            <div class="">

                                <form action="" class="mt-5 formValidation2">
                                    <input type="hidden" name="language" value="english">
                                    <div class="row gy-4">
                                        <div class="col-12">

                                            <div class="editorOut1">
                                                <label for="">Paragraph 1</label>
                                                <textarea id="editor1" class="editor1"></textarea>
                                                <p class="errMsg text-danger"></p>
                                            </div>
                                        </div>
                                        <div class="col-12">

                                            <div class="editorOut2">
                                                <label for="">Paragraph 2</label>
                                                <textarea id="editor2" class="editor2 "></textarea>
                                                <p class="errMsg text-danger"></p>
                                            </div>
                                        </div>
                                        <div class="col-12">

                                            <div class="editorOut3">
                                                <label for="">Paragraph 3</label>
                                                <textarea id="editor3" class="editor3 "></textarea>
                                                <p class="errMsg text-danger"></p>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary">Save</button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Our mission and Our vision
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">

                            <div class="">

                                <form action="" class="mt-5 formValidation3">
                                    <input type="hidden" name="language" value="english">
                                    <div class="row gy-4">
                                        <div class="col-12">
                                            <div class="editorOut4">
                                                <label for="">Blue Heading</label>
                                                <input type="text" class="form-control">
                                                <p class="errMsg text-danger"></p>
                                            </div>

                                        </div>
                                        <div class="col-12">
                                            <div class="editorOut5">
                                                <label for="">Green Heading</label>
                                                <input type="text" class="form-control">
                                                <p class="errMsg text-danger"></p>
                                            </div>

                                        </div>
                                        <div class="col-12">
                                            <div class="editorOut6">
                                                <label for="">Paragraph 1</label>
                                                <textarea class="editor4"></textarea>
                                                <p class="errMsg text-danger"></p>
                                            </div>

                                        </div>
                                        <div class="col-12">
                                            <div class="editorOut7">
                                                <label for="">Paragraph 1</label>
                                                <textarea class="editor5"></textarea>
                                                <p class="errMsg text-danger"></p>
                                            </div>

                                        </div>


                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary">Save</button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {

            const editor1 = new Jodit('.editor1');
            const editor2 = new Jodit('.editor2');
            const editor3 = new Jodit('.editor3');
            const editor4 = new Jodit('.editor4');
            const editor5 = new Jodit('.editor5');


            $(".formValidation").submit(function(event) {
                event.preventDefault();
                let isValid = true;

                $(this)
                    .find("input")
                    .each(function() {
                        let $inputField = $(this);
                        let $parentDiv = $inputField.closest('div');
                        let $errorMessage = $parentDiv.find('.errMsg');
                        let labelText = $parentDiv.find('label').text();

                        if ($inputField.hasClass("noVal")) {
                            $inputField.removeClass("is-invalid");
                            return;
                        }
                        if ($inputField.val().trim() === "") {
                            $inputField.addClass("is-invalid");
                            $errorMessage.text(labelText + " is required").css('display', 'block');
                            isValid = false;
                        } else {
                            $inputField.removeClass("is-invalid");
                            $errorMessage.text('').css('display', 'none');
                        }

                    });
                if (isValid) {
                    this.submit();
                }
            });

            $('.formValidation2').submit(function(event) {
                event.preventDefault();

                let valid = true;

                $('.errMsg').text('');

                if (!editor1.value.trim() || editor1.value.trim() === '<p><br></p>') {
                    $('.editorOut1 .errMsg').text('Paragraph 1 is required.');
                    valid = false;
                    console.log(editor1.value, 'ed1');
                }

                if (!editor2.value.trim() || editor2.value.trim() === '<p><br></p>') {
                    $('.editorOut2 .errMsg').text('Paragraph 2 is required.');
                    valid = false;
                    console.log(editor2.value, 'ed2');
                }

                if (!editor3.value.trim() || editor3.value.trim() === '<p><br></p>') {
                    $('.editorOut3 .errMsg').text('Paragraph 3 is required.');
                    valid = false;
                    console.log(editor3.value, 'ed3');
                }

                // If all validations pass, submit the form
                if (valid) {
                    this.submit();
                }
            });
            $('.formValidation3').submit(function(event) {
                event.preventDefault();

                let valid = true;

                $('.errMsg').text('');


                if ($(".editorOut4 input").val() == "") {
                    $(".editorOut4 input").addClass("is-invalid");
                    $(".editorOut4 .errMsg").text('Heading is required');
                    valid = false
                } else {
                    $(".editorOut4 input").removeClass("is-invalid");
                }

                if ($(".editorOut5 input").val() == "") {
                    $(".editorOut5 input").addClass("is-invalid");
                    $(".editorOut5 .errMsg").text('Heading is required');
                    valid = false
                } else {
                    $(".editorOut5 input").removeClass("is-invalid");
                }

                if (!editor4.value.trim() || editor4.value.trim() === '<p><br></p>') {
                    $('.editorOut6 .errMsg').text('Paragraph 1 is required.');
                    valid = false;
                }

                if (!editor5.value.trim() || editor5.value.trim() === '<p><br></p>') {
                    $('.editorOut7 .errMsg').text('Paragraph 2 is required.');
                    valid = false;
                }


                // If all validations pass, submit the form
                if (valid) {
                    this.submit();
                }
            });

            function handleImageChange(inputId, imageId) {
                $(inputId).on('change', function(event) {
                    var file = event.target.files[0];
                    var image = $(imageId);

                    if (file) {
                        var imageUrl = URL.createObjectURL(file);
                        image.attr('src', imageUrl).show();
                    } else {
                        image.hide();
                    }
                });
            }

            handleImageChange('#bannerImageInput1', '#uploadedImage1');


        });
    </script>
</x-admin.layouts>

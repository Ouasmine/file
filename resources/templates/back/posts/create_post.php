<?php 
submit_post()
?>
<div class="app-main__inner">
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                <i class="metismenu-icon fa fa-fw" aria-hidden="true" title="Copy to use newspaper-o"></i>
                </div>
                <div>
                Add a new post
                    <div class="page-title-subheading">
                    By submitting this form you will create a new post
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-xl-center">
        <div class="col-md-12">
            <div class="main-card mb-2 card">
                <div class="card-body">
                    <h5 class="card-title">New post</h5>
                    <form method="POST" enctype="multipart/form-data" class="needs-validation" novalidate="" >
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom01">Title</label>
                                <input type="text" class="form-control" id="validationCustom01" name="title" required="" />
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom01">Categories</label>
                                <!-- <input type="text" class="form-control" id="validationCustom01" placeholder="Écrivez ici la catégorie de post" name="cat" required="" /> -->
                                <select class="form-control" name="cat" required>
                                <option value selected="selected"> -- Select a category --</option>
                                <?php fetch_category() ?>
                                
                                </select>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>

                            <div class="col-md-12 mb-3">
                                <textarea name="content" id="editor1" required>
                                
                                </textarea>
                            </div>

                            <div class="col-md-12">
                                <label for="exampleFile" class="">Cover</label>
                                        <!-- MAX_FILE_SIZE must precede the file input field -->
                                <input type="hidden" name="MAX_FILE_SIZE" value="5000000" />
                                <input name="cover" id="exampleFile" type="file" class="form-control-file">
                                <big class="form-text text-muted" style="margin-bottom: 32px;">&#9888; Note: For a better visual appearance, use the cover image with a size of 1000 x 1000 px</big>
                            </div>
                        </div>
                        <input class="btn btn-primary" id="submit_post" type="submit" name="submit" value="Add" style="width: 12rem; margin:32px auto 0px; display:block;">
                    </form>
        
                    <script>
                        // Example starter JavaScript for disabling form submissions if there are invalid fields
                        (function () {
                            "use strict";
                            window.addEventListener(
                                "load",
                                function () {
                                    // Fetch all the forms we want to apply custom Bootstrap validation styles to
                                    var forms = document.getElementsByClassName("needs-validation");
                                    // Loop over them and prevent submission
                                    var validation = Array.prototype.filter.call(forms, function (
                                        form
                                    ) {
                                        form.addEventListener(
                                            "submit",
                                            function (event) {
                                                if (form.checkValidity() === false) {
                                                    event.preventDefault();
                                                    event.stopPropagation();
                                                }
                                                form.classList.add("was-validated");
                                            },
                                            false
                                        );
                                    });
                                },
                                false
                            );
                        })();
                    </script>
                </div>
            </div>
        </div>
    </div>

</div>
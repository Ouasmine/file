<?php 
submit_student()
?>
<div class="app-main__inner">
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="metismenu-icon fa fa-fw" aria-hidden="true"></i>
                </div>
                <div>
                Add a new student
                    <div class="page-title-subheading">
                    By submitting this form you will create a new student
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-xl-center">
        <div class="col-md-12">
            <div class="main-card mb-2 card">
                <div class="card-body">
                    <h5 class="card-title">New student</h5>
                    <form method="POST" enctype="multipart/form-data" class="needs-validation" novalidate="" >
                        <div class="form-row">

                            <div class="col-md-3 mb-3">
                                <label for="validationCustom01">Full name</label>
                                <input type="text" class="form-control" id="validationCustom01" name="full_name" required="" />
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>

                            <div class="col-md-3 mb-3">
                                <label for="validationCustom01">CIN</label>
                                <input type="text" class="form-control" id="validationCustom01" name="cin" required="" />
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>

                            <div class="col-md-3 mb-3">
                                <label for="validationCustom01">CNE</label>
                                <input type="text" class="form-control" id="validationCustom01" name="cne" required="" />
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>

                            <div class="col-md-3 mb-3">
                                <label for="validationCustom01">Division</label>
                                <input type="text" class="form-control" id="validationCustom01" name="division" required="" />
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>

                            <div class="col-md-12">
                                <label for="exampleFile" class="">Profile picture</label>
                                        <!-- MAX_FILE_SIZE must precede the file input field -->
                                <input type="hidden" name="MAX_FILE_SIZE" value="5000000" />
                                <input name="profile" id="exampleFile" type="file" class="form-control-file">
                                <big class="form-text text-muted" style="margin-bottom: 32px;">&#9888; Note: For a better visual appearance, use the profile image with a size of 1000 x 1000 px</big>
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
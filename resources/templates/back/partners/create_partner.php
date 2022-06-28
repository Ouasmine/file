<?php 
submit_company();

?>
<div class="app-main__inner">
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="fa fa-fw" aria-hidden="true" title="Copy to use handshake-o"></i>
                </div>
                <div>
                Add new partner
                    <div class="page-title-subheading">
                    By submitting this form you will create a new partner
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-xl-center">
        <div class="col-md-12">
            <div class="main-card mb-2 card">
                <div class="card-body">
                    <h5 class="card-title">New partner</h5>
                    <form method="POST" enctype="multipart/form-data" class="needs-validation" novalidate="" >
                        <div class="form-row">
                            <div class="col-md-12 mb-3">
                                <label for="validationCustom01">Partner name</label>
                                <input type="text" class="form-control" id="validationCustom01" name="partner_name" required="" />
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="exampleFile" class="">Logo</label>
                                        <!-- MAX_FILE_SIZE must precede the file input field -->
                                <input type="hidden" name="MAX_FILE_SIZE" value="5000000" />
                                <input name="partner_logo" id="exampleFile" type="file" class="form-control-file">
                                <big class="form-text text-muted">&#9888; Note: For a better visual appearance, use the profile image with a size of 500px x 500px</big>
                            </div>
                        </div>
                        <input class="btn btn-primary" id="submit_partner" type="submit" name="submit" value="Add" style="width: 12rem; margin:32px auto 0px; display:block;">
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
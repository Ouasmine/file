<?php 
submit_faq();

?>
<div class="app-main__inner">
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                <i class="metismenu-icon fa fa-fw" aria-hidden="true"></i>
                </div>
                <div>
                Add a new FAQ
                    <div class="page-title-subheading">
                    By submitting this form you will create a new FAQ</div>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-xl-center">
        <div class="col-12">
            <div class="main-card mb-2 card">
                <div class="card-body">
                    <h5 class="card-title">New FAQ</h5>
                    <form method="POST" enctype="multipart/form-data" class="needs-validation" novalidate="" >
                        <div class="form-row">
                            <div class="col-md-12 mb-3">
                                <label for="validationCustom01">Question</label>
                                <input type="text" class="form-control" id="validationCustom01" name="question" required="" />
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                            <div class="col-md-12 mb-3">
                                <textarea name="response" id="editor1" required>
                                
                                </textarea>
                            </div>
                        </div>
                        <input class="btn btn-primary" id="submit_faq" type="submit" name="submit" value="Add" style="width: 12rem; margin:32px auto 0px; display:block;">
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
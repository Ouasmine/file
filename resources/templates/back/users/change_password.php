<?php change_password() ?>
<div class="app-main__inner">
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="metismenu-icon fa fa-fw" aria-hidden="true" title="Copy to use key"></i>
                </div>
                <div>
                Change password
                    <div class="page-title-subheading">
                    By submitting this form, you change your password
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-xl-center">
        <div class="col-12">
            <div class="main-card mb-2 card">
                <div class="card-body">
                    <h5 class="card-title">Change Password</h5>
                    <form method="POST" enctype="multipart/form-data" class="needs-validation" novalidate="">
                        <div class="form-row">
                            <div class="col-md-12 mb-3">
                                <label for="validationCustom01">Current Password</label>
                                <div class="input-group">
                                    <input type="password" class="form-control" id="validationCustom01" name="current-password" required="" />
                                    <div class="input-group-append">
                                        <button type="button" class="btn btn-info eyeicon">
                                            <i class="fa fa-eye-slash"></i>
                                        </button>
                                    </div>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="validationCustom02">New Password</label>
                                <div class="input-group">
                                    <input type="password" class="form-control" pattern="^(?=.*\d).{4,12}$" id="newPass" name="new-password" required="" />
                                    <div class="input-group-append">
                                        <button type="button" class="btn btn-info eyeicon">
                                            <i class="fa fa-eye-slash"></i>
                                        </button>
                                    </div>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                    <div class="invalid-feedback">
                                    Password phrase. The password must be between 4 and 12 digits long and include at least one numeric number.
                                    </div>
                                </div>
                            </div>

                        </div>
                        <input class="btn btn-primary" id="submit_event" type="submit" name="submit"
                            value="Save"  style="width: 12rem; margin:32px auto 0px; display:block;" />
                    </form>
                </div>

                <script>

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


                    let showpassword = (() => {
                        let eyeTg = document.querySelectorAll('.eyeicon');
                        for (let eye of eyeTg) {
                            eye.addEventListener('click', (e)=>{
                            eye.classList.toggle('btn-info');
                            eye.classList.toggle('btn-success');
                            eye.children[0].classList.toggle('fa-eye-slash');
                            eye.children[0].classList.toggle('fa-eye');
                            if(eye.parentNode.parentNode.children[0].type === "text"){
                                eye.parentNode.parentNode.children[0].type = "password";
                            } else if(eye.parentNode.parentNode.children[0].type === "password" ){
                                eye.parentNode.parentNode.children[0].type = "text";
                            }
                            
                            

                        });
                        }

                    })()
                </script>
            </div>
        </div>
    </div>
</div>
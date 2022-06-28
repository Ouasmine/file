<?php update_partner()?>
<div class="app-main__inner">
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="fa fa-fw" aria-hidden="true" title="Copy to use handshake-o"></i>
                </div>
                <div>
                Update partner informations
                    <div class="page-title-subheading">
                    By submitting this form, you update partner information
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php 
    try {
        //code...
    
        $edit_partner_sql = "SELECT * FROM partners WHERE id = ?";
        $partner_edit = $pdo->prepare($edit_partner_sql);
        $partner_edit->execute([$_GET['edit_partner']]);
        $partner_result = $partner_edit->fetchAll();
    ?>
    <div class="row justify-content-xl-center">
        <div class="col-md-12">
            <div class="main-card mb-2 card">
                <div class="card-body">
                    <form method="POST" enctype="multipart/form-data" class="needs-validation" novalidate="" >
                    <?php if($partner_result): ?>
                        <?php foreach($partner_result as $pr): ?>
                        <div class="form-row">
                            <div class="col-md-12 mb-3"> 
                                <label for="validationCustom01">Partner name</label>
                                <input type="hidden" name="client_id" value="<?php echo $pr->id?>">
                                <input type="text" class="form-control" id="validationCustom01" name="partner_name" value="<?php echo $pr->partner_name ?>" required="" />
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="exampleFile" class="">Logo</label>
                                <!-- MAX_FILE_SIZE must precede the file input field -->
                                <input type="hidden" name="MAX_FILE_SIZE" value="2000000" />
                                <input type="hidden" name="cover_id" value="<?php echo $pr->partner_logo?>">
                                <input name="partner_logo" id="exampleFile" type="file" class="form-control-file">
                                <small class="form-text text-muted">Upload only if you want to replaced the existing image with a new one</small>
                                <big class="form-text text-muted">&#9888; Note: For a better visual appearance, use the profile image with a size of 500px x 500px</big>
                            </div>
                        </div>
                        <input class="btn btn-primary" id="submit_event" type="submit" name="submit" value="Save" style="width: 12rem; margin:32px auto 0px; display:block;">
                        
                        <?php endforeach ?>
                    <?php endif ?>
                    <?php 
                        }  catch (PDOException $e) {
                            echo 'query failed' . $e->getMessage();
                        }
                    ?>
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
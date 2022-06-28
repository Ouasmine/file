<?php 
update_notes()
?>
<div class="app-main__inner">
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="metismenu-icon fa fa-fw" aria-hidden="true"></i>
                </div>
                <div>
                Update notes
                    <div class="page-title-subheading">
                    By submitting this form, you update notes
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php 
    try {
          
        $edit_post_sql = "SELECT * FROM students WHERE id = ?";
        $post_edit = $pdo->prepare($edit_post_sql);
        $post_edit->execute([$_GET['edit_notes']]);
        $post_result = $post_edit->fetchAll();
    ?>
    <div class="row justify-content-xl-center">
        <div class="col-md-12">
            <div class="main-card mb-2 card">
                <div class="card-body">
                    <form method="POST" enctype="multipart/form-data" class="needs-validation" novalidate="" >
                    <?php if($post_result): ?>
                        <?php foreach($post_result as $pst): ?>
                        <div class="form-row">

                            <div class="col-md-3 mb-3">
                                <label for="validationCustom01">Mathematics</label>
                                <input type="hidden" name="student_id" value="<?php echo $pst->id?>">
                                <input type="text" class="form-control" id="validationCustom01" name="mathematics" value="<?php echo $pst->mathematics ?>" required="" />
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>

                            <div class="col-md-3 mb-3">
                                <label for="validationCustom01">Physics</label>
                                <input type="hidden" name="student_id" value="<?php echo $pst->id?>">
                                <input type="text" class="form-control" id="validationCustom01" name="physics" value="<?php echo $pst->physics ?>" required="" />
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>

                            <div class="col-md-3 mb-3">
                                <label for="validationCustom01">Arab</label>
                                <input type="hidden" name="student_id" value="<?php echo $pst->id?>">
                                <input type="text" class="form-control" id="validationCustom01" name="arab" value="<?php echo $pst->arab ?>" required="" />
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>

                            <div class="col-md-3 mb-3">
                                <label for="validationCustom01">English</label>
                                <input type="hidden" name="student_id" value="<?php echo $pst->id?>">
                                <input type="text" class="form-control" id="validationCustom01" name="english" value="<?php echo $pst->english ?>" required="" />
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>

                            <div class="col-md-3 mb-3">
                                <label for="validationCustom01">Frensh</label>
                                <input type="hidden" name="student_id" value="<?php echo $pst->id?>">
                                <input type="text" class="form-control" id="validationCustom01" name="frensh" value="<?php echo $pst->frensh ?>" required="" />
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>

                            <div class="col-md-3 mb-3">
                                <label for="validationCustom01">Philosophie</label>
                                <input type="hidden" name="student_id" value="<?php echo $pst->id?>">
                                <input type="text" class="form-control" id="validationCustom01" name="philosophie" value="<?php echo $pst->philosophie ?>" required="" />
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>

                        </div>
                        <input class="btn btn-primary" id="submit_post" type="submit" name="submit" value="Save" style="width: 12rem; margin:32px auto 0px; display:block;">
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
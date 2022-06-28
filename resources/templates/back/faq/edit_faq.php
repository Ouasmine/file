<?php update_faq()?>
<div class="app-main__inner">
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                <i class="metismenu-icon fa fa-fw" aria-hidden="true" title="Copy to use question"></i>
                </div>
                <div>
                Update FAQ's
                    <div class="page-title-subheading">
                    By submitting this form, you will update the FAQ's
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php 
    try {
        //code...
    
        $edit_faq_sql = "SELECT * FROM faq WHERE id = ?";
        $faq_edit = $pdo->prepare($edit_faq_sql);
        $faq_edit->execute([$_GET['edit_faq']]);
        $faq_result = $faq_edit->fetchAll();
    ?>
    <div class="row justify-content-xl-center">
        <div class="col-md-12">
            <div class="main-card mb-2 card">
                <div class="card-body">
                    <form method="POST" enctype="multipart/form-data" class="needs-validation" novalidate="" >
                    <?php if($faq_result): ?>
                        <?php foreach($faq_result as $fq): ?>
                        <div class="form-row">
                            <div class="col-12 mb-3"> 
                                <label for="validationCustom01">Question</label>
                                <input type="hidden" name="faq_id" value="<?php echo $fq->id?>">
                                <input type="text" class="form-control" id="validationCustom01" name="question" value="<?php echo $fq->question?>" required="" />
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                        
                            <div class="col-md-12 mb-3">
                                <textarea name="response" id="editor1" required>
                                    <?php echo $fq->response ?>
                                </textarea>
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
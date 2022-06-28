<?php 
update_categorie()
?>
<div class="app-main__inner">
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                <i class="metismenu-icon fa fa-fw" aria-hidden="true" title="Copy to use newspaper-o"></i>
                </div>
                <div>
                Update your category information
                    <div class="page-title-subheading">
                    By submitting this form, you update the category information
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php 
    try {
          
        $edit_categorie_sql = "SELECT * FROM category WHERE id = ?";
        $categorie_edit = $pdo->prepare($edit_categorie_sql);
        $categorie_edit->execute([$_GET['edit_categorie']]);
        $categorie_result = $categorie_edit->fetchAll();
    ?>
    <div class="row justify-content-xl-center">
        <div class="col-md-12">
            <div class="main-card mb-2 card">
                <div class="card-body">
                    <form method="POST" enctype="multipart/form-data" class="needs-validation" novalidate="" >
                    <?php if($categorie_result): ?>
                        <?php foreach($categorie_result as $cat): ?>
                        <div class="form-row">
                            <div class="col-md-12 mb-3">
                                <label for="validationCustom01">Category name</label>
                                <input type="hidden" name="categorie_id" value="<?php echo $cat->id?>">
                                <input type="text" class="form-control" id="validationCustom01" name="name" value="<?php echo $cat->cat_title ?>" required="" />
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
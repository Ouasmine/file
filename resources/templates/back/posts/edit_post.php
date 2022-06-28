<?php 
update_post()
?>
<div class="app-main__inner">
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                <i class="metismenu-icon fa fa-fw" aria-hidden="true" title="Copy to use newspaper-o"></i>
                </div>
                <div>
                Update your post information
                    <div class="page-title-subheading">
                    By submitting this form, you update the information of the posts
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php 
    try {
          
        $edit_post_sql = "SELECT * FROM blog WHERE id = ?";
        $post_edit = $pdo->prepare($edit_post_sql);
        $post_edit->execute([$_GET['edit_post']]);
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

                            <div class="col-md-6 mb-3">
                                <label for="validationCustom01">Title</label>
                                <input type="hidden" name="post_id" value="<?php echo $pst->id?>">
                                <input type="hidden" name="cover_id" value="<?php echo $pst->cover?>">
                                <input type="text" class="form-control" id="validationCustom01" name="title" value="<?php echo $pst->title ?>" required="" />
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="validationCustom01">Categories</label>
                                <select class="form-control" name="cat" required>
                                    <option value="<?php echo $pst->cat ?>" selected="selected"> <?php echo $pst->cat ?></option>
                                    <?php fetch_category() ?>
                                </select>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>

                            <div class="col-md-12 mb-3">
                                <textarea name="content" id="editor1" required>
                                <?php echo $pst->content ?>
                                </textarea>
                            </div>

                            <div class="col-md-12">
                                <label for="exampleFile" class="">Cover</label>
                                        <!-- MAX_FILE_SIZE must precede the file input field -->
                                <input type="hidden" name="MAX_FILE_SIZE" value="5000000" />
                                <input type="hidden" name="cover_id" value="<?php echo $pst->cover?>">
                                <input name="cover" id="exampleFile" type="file" class="form-control-file">
                                <small class="form-text text-muted">Upload only if you want to replaced the existing image with a new one</small>
                                <big class="form-text text-muted" style="margin-bottom: 32px;">&#9888; Note: For a better visual appearance, use the profile image with a size of 1000 x 1000 px</big>
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
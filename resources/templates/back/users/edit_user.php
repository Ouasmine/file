<?php update_users();?>
<?php 
$user_id_edit = $_GET['edit_user'];
$sql = "SELECT * FROM users WHERE id = ?";
$stmt_edit = $pdo->prepare($sql);
$stmt_edit->execute([$user_id_edit]);
$user_to_edit = $stmt_edit->fetchAll();
?>
<div class="app-main__inner">
<div class="app-page-title">
  <div class="page-title-wrapper">
    <div class="page-title-heading">
      <div class="page-title-icon">
      <i class="metismenu-icon fa fa-fw" aria-hidden="true" title="Copy to use user"></i>
      </div>
      <div>
      Edit administrator information
        <div class="page-title-subheading">
        Here you can modify the information of your administrators
        </div>
      </div>
    </div>
  </div>
</div>
<form action="" method="post" enctype="multipart/form-data" class="needs-validation" novalidate="">
<?php if($user_to_edit) : ?>
    <?php foreach($user_to_edit as $user): ?>
  <div class="main-card mb-3 card">
    <div class="card-body">
      <h5 class="card-title">Personal informations</h5>

      <div class="form-row">
        <div class="col-md-4 mb-3">
          <label for="validationCustom01">First name</label>
          <input type="hidden" name="user_id" value="<?php echo $user->id?>">
          <input type="text" class="form-control" id="validationCustom01" name="name" value="<?php echo trim($user->name); ?>"
            required="" />
          <div class="valid-feedback">
            Looks good!
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <label for="validationCustom02">Last name</label>
          <input type="text" class="form-control" id="validationCustom02" name="last-name" value="<?php echo trim($user->last_name); ?> "
            value="" required="" />
          <div class="valid-feedback">
            Looks good!
          </div>
        </div>

        <div class="col-md-4 mb-3">
          <label for="validationCustom03">Phone number</label>
          <input type="tel" name="phone" pattern="(\+212|0)([ \-_/]*)(\d[ \-_/]*){9}" class="form-control"
            id="validationCustom03" placeholder="phone number" value="<?php echo trim($user->tel); ?> " />
          <div class="invalid-feedback">
          Please provide a valid phone number
          </div>
        </div>

      </div>


      <div class="form-group">
        <label for="validationCustom02">Profile picture</label>
        <!-- MAX_FILE_SIZE must precede the file input field -->
        <input type="hidden" name="MAX_FILE_SIZE" value="2000000" />
        <input type="hidden" name="cover_id" value="<?php echo $user->avatar?>">
        <input name="profile_pic" id="exampleFile" type="file" class="form-control-file" />
        <div class="valid-feedback">
        File added successfully
        </div>
        <div class="invalid-feedback">
        Please upload a file
        </div>
      </div>



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

  <div class="main-card mb-3 card">
    <div class="card-body">
      <h5 class="card-title">Professional information</h5>

      <div class="position-relative row form-group">
        <label for="validationCustomUsername" class="col-sm-2 col-form-label">Username</label>
        <div class="col-sm-10">
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text" id="inputGroupPrepend">@</span>
            </div>
            <input type="text" class="form-control" name="username" id="validationCustomUsername" placeholder="Username" value="<?php echo trim($user->username); ?> "
              aria-describedby="inputGroupPrepend" required="">
            <div class="invalid-feedback">
            Please choose a username.
            </div>
          </div>
        </div>
      </div>
      <div class="position-relative row form-group">
        <label for="examplePassword" class="col-sm-2 col-form-label">Password</label>
        <div class="col-sm-10">
          <input type="hidden" name="Oldpass" value="<?php echo trim($user->password_hash); ?>" >
          <input name="password" id="examplePassword" minlength="8" placeholder="Password (8 characters minimum)"
            type="password" class="form-control"/>
            <div class="invalid-feedback">
            Password phrase. The password must be between 4 and 12 digits long and include at least one numeric number.
            </div>
        </div>
      </div>
      <div class="position-relative row form-group">
        <label for="useremail" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
          <input name="email" id="useremail" type="email" value="<?php echo trim($user->email); ?>"  class="form-control"
            required />
          <div class="invalid-feedback">
          Please choose a valid email
          </div>
        </div>
      </div>

      <div class="position-relative row form-group">
        <label for="useremail" class="col-sm-2 col-form-label">Role</label>
        <div class="col-sm-10">
          <input name="role" type="text" class="form-control" value="<?php echo trim($user->role); ?>"
            required />
        </div>
      </div>


      <div class="position-relative row ">
        <div class="col-sm-12 ">
          <input type="submit" class="btn btn-primary" value="Save" name="submit"
          style="width: 12rem; margin:32px auto 0px; display:block;">
        </div>
      </div>
    </div>
  </div>
  <?php endforeach ?>
<?php endif ?>
</form>
</div>
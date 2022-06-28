<?php 


// Functionality for displaying Administrateurs into dashboard
function display_users()
{
    global $pdo;

    $sql = "SELECT u.*, m.file_name FROM users u join media m on u.avatar = m.id WHERE username != 'admin' ";
    $stmt = $pdo->query($sql)->fetchAll();
    foreach ($stmt as $user) {
        $reg = date("F jS, Y, g:i a", strtotime($user->timestamp));
        if ($user->status == 0) {
            $status = "<div class='badge badge-danger'>Inactive</div>";
        }
        if ($user->status == 1) {
            $status = "<div class='badge badge-success'>active</div>";
        }

        echo <<<user
        <tr>
        <td class="text-center"><img width="56" src="../uploads/thumbnails/{$user->file_name}" class="br-a rounded-circle" alt="team thumbnail"></td>
        <td class="text-center"> {$user->name} {$user->last_name} </td>
        <td class="text-center"> {$user->role} </td>
        <td class="text-center">
            {$status}
        </td>
        <td class="text-center"> {$reg} </td>
        <td class="text-center">
            <a href="index?edit_user={$user->id}">
            <button type="button" id="PopoverCustomT-1"class=" btn-wide btn btn-success btn-icon-only">
                <i class="pe-7s-note" style="font-size: 1rem;"></i> Edit
            </button>
            </a>
            <a href="index?manage_users&status={$user->id}">
            <button type="button" id="PopoverCustomT-1"class=" btn-icon btn-icon-only btn btn-outline-danger">
                <i class="pe-7s-delete-user" style="font-size: 1rem;"></i>
            </button>
            </a>
            <button type="button" id="PopoverCustomT-1" class=" btn-icon btn-icon-only btn btn-outline-danger" value="index?manage_users&delete_user={$user->id}" data-toggle="modal" data-target="#exampleModal">
                <i class="pe-7s-trash" style="font-size: 1rem;"></i>
            </button>
        </td>
    </tr>
user;

    }
}


// Functionality for adding Administrateurs to the db from admin area
function add_users()
{
    global $pdo;

    if (isset($_POST['submit'])) {
        try {
            //Personal info
            $name = trim($_POST['name']);
            $lastname = trim($_POST['last-name']);
            $phone = trim($_POST['phone']);
            //professional info
            $username = trim($_POST['username']);
            $password = MD5(trim($_POST['password']));
            $access_right = intval($_POST['access_right']);
            $email = trim($_POST['email']);
            $role = trim($_POST['role']);
            
            if(empty($_FILES['profile_pic']['name'])){
                $cover_id = 5;
              }else{
                //**------  function for handling image upload-------*/
                upload_image('profile_pic', $cover_id);
            }

            $sql = "INSERT INTO `users` (`username`, `name`, `last_name`, `password_hash`, `access_right`,`timestamp`, `avatar`, `tel`, `email`, `role`) VALUES (?, ?, ?, ?, ?, CURRENT_TIMESTAMP, ?, ?, ?, ?);";
            $stmt = $pdo->prepare($sql);
            $result = $stmt->execute([$username, $name, $lastname, $password, $access_right,$cover_id ,  $phone, $email, $role]);
            if ($result) {
                header("location: ?manage_users&success=true");
            } else {
                set_message('error', 'try again later');

            }
        } catch (PDOException $e) {
            echo 'query failed' . $e->getMessage();
        }
    }
}


// Functionality toggle status for Administrateurs
function toggle_status()
{
    global $pdo;
    if (isset($_GET['status'])) {
        $user_id = $_GET['status'];
        $stmt_status = $pdo->prepare("SELECT status FROM users WHERE id = ?");
        $stmt_status->execute([$user_id]);
        $user_status = $stmt_status->fetch();
        if ($user_status) {
            if ($user_status->status == 1) {
                $pdo->prepare('UPDATE users SET status = 0 where id = ?')->execute([$user_id]);
                header("location: ?manage_users&success=true");

            } elseif ($user_status->status == 0) {
                $pdo->prepare('UPDATE users SET status = 1 where id = ?')->execute([$user_id]);
                header("location: ?manage_users&success=true");

            }
        }
    }
}

// Functionality for deleting admins from the admin area
function delete_user()
{
    global $pdo;
    if (isset($_GET['delete_user'])) {
        //Exeption Handling
        try {
            //The SQL statement.
            $sqlimg = "SELECT m.id, m.file_name FROM users u join media m on u.avatar = m.id WHERE u.id = ?";
            //Prepare our SELECT SQL statement.
            $stmtimg = $pdo->prepare($sqlimg);
            //Execute the statement GET the users's avatar data.
            $stmtimg->execute([$_GET['delete_user']]);
            //fetch the user avatar data.
            $img = $stmtimg->fetch();
            //Check if it's the default image, we don't want to delete the default image.
            if ($img->id !== '5') {
                //this is not the default image, Now we are going to delete thumbnail  from the uploads folder.
                !unlink('../uploads/thumbnails/' . $img->file_name) ? set_message('error', 'cannot delete image due to an error') : set_message('success', 'image has been deleted successfully');
                //this is not the default image, Now we are going to delete the actual image from the uploads folder.
                !unlink('../uploads/' . $img->file_name) ? set_message('error', 'cannot delete image due to an error') : set_message('success', 'image has been deleted successfully');
                //this is not the default image, The query to delete both the avatar and the user
                $sql = "DELETE u, m FROM users u join media m on u.avatar = m.id WHERE u.id = ?";
            } else {
                //this is the default image, The query to delete just the user
                $sql = "DELETE FROM users WHERE id = ?";
            }
            //Prepare our DELETE SQL statement.
            $stmt = $pdo->prepare($sql);
            //Execute the statement DELETE The event.
            $stmt->execute([$_GET['delete_user']]);
            //display toastr notification, event deleted successfully
            header("location: ?manage_users&success=true");
        } catch (PDOException $e) {
            echo 'query failed' . $e->getMessage();
        }
    }
}


// Functionality for updating admins from the admin area
function update_users()
{
    global $pdo;

    if (isset($_POST['submit'])) {
        try {
            //Personal info
            $name = trim($_POST['name']);
            $lastname = trim($_POST['last-name']);
            $phone = trim($_POST['phone']);
            //professional info
            $username = trim($_POST['username']);
            !empty($_POST['password']) ? $password = MD5(trim($_POST['password'])) : $password = $_POST['Oldpass'] ;
            $email = trim($_POST['email']);
            $role = trim($_POST['role']);
            if(empty($_FILES['profile_pic']['name'])){
                $cover_id = $_POST['cover_id'];
              }else{
                //**------  function for handling image upload-------*/
                upload_image('profile_pic', $cover_id);
            }
            $sql = "UPDATE `users` SET  `username` = ?, `name` = ?, `last_name` = ?, `password_hash` = ?, `avatar` = ?, `role` = ?, `tel` = ?, `email` = ? WHERE `users`.`id` = ?";
            $stmt = $pdo->prepare($sql);
            $result = $stmt->execute([$username, $name, $lastname, $password, $cover_id, $role,  $phone, $email, $_POST['user_id']]);
            if ($result) {
                header("location: ?manage_users&success=true");

            } else {
                set_message('error', 'try again later');

            }
        } catch (PDOException $e) {
            echo 'query failed' . $e->getMessage();
        }
    }
}



?>
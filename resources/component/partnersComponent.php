<?php

function display_partners(){
    global $pdo;
    try{
    $sql ="SELECT p.*, m.file_name FROM partners p join media m on p.partner_logo = m.id ORDER BY p.id DESC";
    $stmt = $pdo->query($sql)->fetchAll();
    foreach ($stmt as $clients){
        echo <<<clients


        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-4 col-6">
            <div class="brand__item text-center m-img mb-40">
            <img src="uploads/{$clients->file_name}" alt="{$clients->partner_name}">
            </div>
        </div>

clients;
    }
    } catch (PDOException $e) {
    set_message('error','query failed');
    echo 'query failed' . $e->getMessage();
    }
}


function submit_company(){
    global $pdo;
    if(isset($_POST['submit'])){
        try{
        $name = trim($_POST['partner_name']);
        $file = $_FILES['partner_logo']['name'];
        $cover_id = 1;

        //**------  function for handling image upload-------*/
        upload_image('partner_logo', $cover_id);
        $sql = "INSERT INTO `partners` (`id`, `partner_name`, `partner_logo` ) VALUES (NULL, ?, ?)";
        $stmt = $pdo->prepare($sql);
        $result = $stmt->execute([$name, $cover_id]);
        if($result){
            header("location: ?manage_partner&success=true");
            
          } else {
            set_message('error','try again later');
            
          }
        } catch (PDOException $e) {
            set_message('error','query failed');
            
            echo 'query failed' . $e->getMessage();
        }
    }
}

// Partner Management. display partners to be edited or deleted in admin area

function display_partners_admin()
{
    global $pdo;
    try{
        $sql = "SELECT p.*, m.file_name FROM partners p join media m on p.partner_logo = m.id ORDER BY p.id DESC"; 
        $stmt = $pdo->query($sql)->fetchAll();
        foreach ($stmt as $clients){
        echo <<<partner
        <tr>
        <td class="text-center"><img src="../uploads/thumbnails/{$clients->file_name}" class="br-a" alt="partner thumbnail"></td>
        <td class="text-center"> {$clients->partner_name} </td>


        <td class="text-center">
            <a href="index?edit_partner={$clients->id}">
            <button type="button" id="PopoverCustomT-1"class=" btn-wide btn btn-success btn-icon-only">
                <i class="pe-7s-note" style="font-size: 1rem;"></i> Edit
            </button>
            </a>
            <button type="button" id="PopoverCustomT-1" class=" btn-icon btn-icon-only btn btn-outline-danger" value="index?manage_partner&delete_partner={$clients->id}" data-toggle="modal" data-target="#exampleModal">
                <i class="pe-7s-trash" style="font-size: 1rem;"></i>
            </button>
        </td>
    </tr>
partner;
    }
} catch (PDOException $e) {
    echo 'query failed' . $e->getMessage();
}
}

// Delete a partner
function delete_partner()
{
    global $pdo;
    if (isset($_GET['delete_partner'])) {
        //Exeption Handling
        try {
            //The SQL statement.
            $sqlimg = "SELECT m.id, m.file_name FROM partners p join media m on p.partner_logo = m.id WHERE p.id = ?";
                //Prepare our SELECT SQL statement.
                $stmtimg = $pdo->prepare($sqlimg);
                //Execute the statement GET the Partner's image data.
                $stmtimg->execute([$_GET['delete_partner']]);
                //fetch the Partner cover data.
                $img = $stmtimg->fetch();
                //Check if it's the default image, we don't want to delete the default image.
                if ($img->id !== '1') {
                    //this is not the default image, Now we are going to delete thumbnail  from the uploads folder.
                    !unlink('../uploads/thumbnails/' . $img->file_name) ? set_message('error', 'cannot delete image due to an error') : set_message('success', 'image has been deleted successfully');
                    //this is not the default image, Now we are going to delete the actual image from the uploads folder.
                    !unlink('../uploads/' . $img->file_name) ? set_message('error', 'cannot delete image due to an error') : set_message('success', 'image has been deleted successfully');
                    //this is not the default image, The query to delete both the image and the partner
                    $sql = "DELETE p, m FROM partners p join media m on p.partner_logo = m.id WHERE p.id = ?";
                } else {
                    //this is the default image, The query to delete just the partner
                    $sql = "DELETE FROM partners WHERE id = ?";
                }
                            //Prepare our DELETE SQL statement.
                $stmt = $pdo->prepare($sql);
                //Execute the statement DELETE The partner.
                $stmt->execute([$_GET['delete_partner']]);
                //display toastr notification, event deleted successfully
                header("location: ?manage_partner&success=true");
}catch (PDOException $e) {
    echo 'query failed' . $e->getMessage();
}
}
}

// Update a partner information
function update_partner()
{
    global $pdo;
    if (isset($_POST['submit'])) {
        try {
          if(empty($_FILES['partner_logo']['name'])){
            $cover_id = $_POST['cover_id'];
          }else{
            //**------  function for handling image upload-------*/
            upload_image('partner_logo', $cover_id);
          }
            

            $sql = "UPDATE `partners` SET `partner_name` = ?, `partner_logo` = ?  WHERE `partners`.`id` = ?";
            $update_partner = $pdo->prepare($sql);
            $update_partner->execute([$_POST['partner_name'], $cover_id, $_POST['client_id']]);
            if ($update_partner) {
                header("location: ?manage_partner&success=true");
            } else {
                set_message('error', 'query failed try later');
            }
        } catch (PDOException $e) {
            echo 'query failed' . $e->getMessage();
        }
    }
}


?>
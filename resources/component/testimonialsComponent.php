<?php


function display_testimonials(){
    global $pdo;
    try{
    $sql ="SELECT t.full_name, t.details, t.role FROM testimonials t ORDER BY t.id DESC";
    $stmt = $pdo->query($sql)->fetchAll();
    foreach ($stmt as $testimonials){
        echo <<<testimonials

        <div class="testimonial__item transition-3 text-center white-bg">
            <div class="testimonial__avater">
            <img src="https://ui-avatars.com/api/?background=258E46&color=fff&name={$testimonials->full_name}'" alt="">
            </div>
            <div class="testimonial__text">
            <p>{$testimonials->details}</p>
            </div>
            <div class="testimonial__avater-info mb-5">
            <h3>{$testimonials->full_name}</h3>
            <span>{$testimonials->role}</span>
            </div>
            <div class="testimonial__rating">
            <ul>
                <li>
                    <a href="#"><i class="fa-solid fa-star"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fa-solid fa-star"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fa-solid fa-star"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fa-solid fa-star"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fa-solid fa-star"></i></a>
                </li>
            </ul>
            </div>
        </div>



testimonials;
    }
    } catch (PDOException $e) {
    set_message('error','query failed');
    echo 'query failed' . $e->getMessage();
    }
}



function submit_testimonials(){
    global $pdo;
    if(isset($_POST['submit'])){
        try{
        $name = trim($_POST['full_name']);
        $details = trim($_POST['details']);
        $role = trim($_POST['role']);
        // $file = $_FILES['profile']['name'];
        // $cover_id = 1;

        //**------  function for handling image upload-------*/
        upload_image('profile', $cover_id);
        $sql = "INSERT INTO `testimonials` (`id`, `full_name`, `details`, `role`) VALUES (NULL, ?, ?, ?)";
        $stmt = $pdo->prepare($sql);
        $result = $stmt->execute([$name, $details, $role]);
        if($result){
            header("location: ?manage_testimonials&success=true");
            
          } else {
            set_message('error','try again later');
            
          }
        } catch (PDOException $e) {
            set_message('error','query failed');
            
            echo 'query failed' . $e->getMessage();
        }
    }
}



function display_testimonials_admin()
{
    global $pdo;
    try{
        $sql = "SELECT t.* FROM testimonials t Order by t.id DESC"; 
        $stmt = $pdo->query($sql)->fetchAll();
        foreach ($stmt as $testimonials){
        echo <<<testimonials
        <tr>
        <td class="text-center"> {$testimonials->full_name} </td>
        <td class="text-center"> {$testimonials->role} </td>
        <td class="text-center" style="width: 40%;"> {$testimonials->details} </td>

        <td class="text-center">
            <a href="index?edit_testimonials={$testimonials->id}">
            <button type="button" id="PopoverCustomT-1"class=" btn-wide btn btn-success btn-icon-only">
                <i class="pe-7s-note" style="font-size: 1rem;"></i> Edit
            </button>
            </a>
            <button type="button" id="PopoverCustomT-1" class=" btn-icon btn-icon-only btn btn-outline-danger" value="index?manage_testimonials&delete_testimonials={$testimonials->id}" data-toggle="modal" data-target="#exampleModal">
                <i class="pe-7s-trash" style="font-size: 1rem;"></i>
            </button>
        </td>
    </tr>
testimonials;
    }
} catch (PDOException $e) {
    echo 'query failed' . $e->getMessage();
}
}





function delete_testimonials()
{
    global $pdo;
    if (isset($_GET['delete_testimonials'])) {
        //Exeption Handling
        try {
            $sql = "DELETE FROM testimonials WHERE id = ?";
            $stmt = $pdo->prepare($sql);
            //Execute the statement DELETE The partner.
            $stmt->execute([$_GET['delete_testimonials']]);
            //display toastr notification, event deleted successfully
            set_message('success', 'Testimonials deleted successfully');
}catch (PDOException $e) {
    echo 'query failed' . $e->getMessage();
}
}
}

// Update a testimonials information

function update_testimonials()
{
    global $pdo;
    if (isset($_POST['submit'])) {
        try {
            $sql = "UPDATE `testimonials` SET `full_name` = ?, `details` = ?, `role` = ? WHERE `testimonials`.`id` = ?";
            $update_testimonials = $pdo->prepare($sql);
            $update_testimonials->execute([$_POST['full_name'], $_POST['details'], $_POST['role'], $_POST['testimonials_id']]);
            if ($update_testimonials) {
                header("location: ?manage_testimonials&success=true");
            } else {
                set_message('error', 'query failed try later');
            }
        } catch (PDOException $e) {
            echo 'query failed' . $e->getMessage();
        }
    }
}




?>
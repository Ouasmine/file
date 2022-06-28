<?php

// Add new student
function submit_student(){
    global $pdo;
    if(isset($_POST['submit'])){
        try{
        $full_name = trim($_POST['full_name']);
        $cin = trim($_POST['cin']);
        $cne = trim($_POST['cne']);
        $division = trim($_POST['division']);

        $file = $_FILES['profile']['name'];

        $cover_id = 1;

        upload_image('profile', $cover_id);
        $sql = "INSERT INTO `students` ( `full_name`, `cin`, `cne`, `division`, `profile`) VALUES (?, ?, ?, ?, ?)";
        $stmt = $pdo->prepare($sql);
        $result = $stmt->execute([$full_name, $cin, $cne, $division , $cover_id]);
        if($result){
            header("location: ?manage_students&success=true");
            
          } else {
            set_message('error','try again later');
            
          }
        } catch (PDOException $e) {
            set_message('error','query failed');
            
            echo 'query failed' . $e->getMessage();
        }
    }
}


// isplaying students into admin panel
function display_students_admin()
{
    global $pdo;
    try{
        $sql = "SELECT s.*, m.file_name FROM students s join media m on s.profile = m.id ORDER BY s.id DESC"; 
        $stmt = $pdo->query($sql)->fetchAll();
        foreach ($stmt as $students){
        echo <<<students
        <tr>
        <td class="text-center"><img src="../uploads/thumbnails/{$students->file_name}" class="br-a" alt="post thumbnail"></td>
        <td class="text-center">{$students->full_name}</td>
        <td class="text-center">{$students->cin}</td>
        <td class="text-center">{$students->cne}</td>
        <td class="text-center">{$students->division}</td>

        <td class="text-center">
            <a href="index?edit_student={$students->id}">
              <button type="button" id="PopoverCustomT-1"class=" btn-wide btn btn-success btn-icon-only">
                  <i class="pe-7s-note" style="font-size: 1rem;"></i> Edit
              </button>
            </a>
            <a href="index?edit_notes={$students->id}">
              <button type="button" id="PopoverCustomT-1"class=" btn-wide btn btn-success btn-icon-only">
                  <i class="pe-7s-note" style="font-size: 1rem;"></i> Notes
              </button>
            </a>
            <button type="button" id="PopoverCustomT-1" class=" btn-icon btn-icon-only btn btn-outline-danger" value="index?manage_students&delete_students={$students->id}" data-toggle="modal" data-target="#exampleModal">
                <i class="pe-7s-trash" style="font-size: 1rem;"></i>
            </button>
        </td>
    </tr>
students;
    }
} catch (PDOException $e) {
    echo 'query failed' . $e->getMessage();
}
}


// Delete student
function delete_students()
{
    global $pdo;
    if (isset($_GET['delete_students'])) {
        //Exeption Handling
        try {
            //The SQL statement.
            $sqlimg = "SELECT m.id, m.file_name FROM students s join media m on s.profile = m.id WHERE s.id = ?";
                //Prepare our SELECT SQL statement.
                $stmtimg = $pdo->prepare($sqlimg);
                //Execute the statement GET the events image data.
                $stmtimg->execute([$_GET['delete_students']]);
                //fetch the student cover data.
                $img = $stmtimg->fetch();
                //Check if it's the default image, we don't want to delete the default image.
                if ($img->id !== '1') {
                    //this is not the default image, Now we are going to delete thumbnail  from the uploads folder.
                    !unlink('../uploads/thumbnails/' . $img->file_name) ? set_message('error', 'cannot delete image due to an error') : set_message('success', 'image has been deleted successfully');
                    //this is not the default image, Now we are going to delete the actual image from the uploads folder.
                    !unlink('../uploads/' . $img->file_name) ? set_message('error', 'cannot delete image due to an error') : set_message('success', 'image has been deleted successfully');
                    //this is not the default image, The query to delete both the image and the student
                    $sql = "DELETE s, m FROM students s join media m on s.profile = m.id WHERE s.id = ?";
                } else {
                    //this is the default image, The query to delete just the student
                    $sql = "DELETE FROM students WHERE id = ?";
                }
                            //Prepare our DELETE SQL statement.
                $stmt = $pdo->prepare($sql);
                //Execute the statement DELETE The event.
                $stmt->execute([$_GET['delete_students']]);
                //display toastr notification, student deleted successfully
                header("location: ?manage_students&success=true");
}catch (PDOException $e) {
    echo 'query failed' . $e->getMessage();
}
}
}


// Update student infos

function update_student()
{
    global $pdo;
    if (isset($_POST['submit'])) {
        try {
          if(empty($_FILES['profile']['name'])){
            $cover_id = $_POST['cover_id'];
          }else{
            //**------  function for handling image upload-------*/
            upload_image('profile', $cover_id);
          }
             
            $sql = "UPDATE `students` SET `full_name` = ?, `cin` = ?, `cne` = ?, `division` = ?, `profile` = ? WHERE `students`.`id` = ?";
            $update_post = $pdo->prepare($sql);
            $update_post->execute([$_POST['full_name'], $_POST['cin'], $_POST['cne'],  $_POST['division'], $cover_id, $_POST['student_id']]);
            if ($update_post) {
                header("location: ?manage_students&success=true");
            } else {
                set_message('error', 'query failed try later');
            }
        } catch (PDOException $e) {
            echo 'query failed' . $e->getMessage();
        }
    }
}


// Update student notes

function update_notes()
{
    global $pdo;
    if (isset($_POST['submit'])) {
        try {              
            $sql = "UPDATE `students` SET `mathematics` = ?, `physics` = ?, `arab` = ?, `english` = ?, `frensh` = ?, `philosophie` = ? WHERE `students`.`id` = ?";
            $update_post = $pdo->prepare($sql);
            $update_post->execute([$_POST['mathematics'], $_POST['physics'], $_POST['arab'],  $_POST['english'], $_POST['frensh'],  $_POST['philosophie'], $_POST['student_id']]);
            if ($update_post) {
                header("location: ?manage_students&success=true");
            } else {
                set_message('error', 'query failed try later');
            }
        } catch (PDOException $e) {
            echo 'query failed' . $e->getMessage();
        }
    }
}




// Search students notes by CNE
function search_cne_students(){
    global $pdo;
    if (isset($_POST['submit'])) {
        
        $cne = $_POST['cne'];
        $cne = preg_replace("#[^0-9a-z]#i", "", $cne);
        try{
            $sql = "SELECT s.*, m.file_name FROM students s join media m on s.profile = m.id WHERE s.cne LIKE '%$cne%'"; 
            $stmt = $pdo->query($sql)->fetchAll();
            foreach ($stmt as $students){
    
                echo <<<students

                <section class="teacher__area pt-120 pb-110">
                    <div class="page__title-shape">
                        <img class="page-title-shape-5 d-none d-sm-block" src="assets/img/page-title/page-title-shape-1.png" alt="">
                        <img class="page-title-shape-6" src="assets/img/page-title/page-title-shape-6.png" alt="">
                        <img class="page-title-shape-3" src="assets/img/page-title/page-title-shape-3.png" alt="">
                        <img class="page-title-shape-7" src="assets/img/page-title/page-title-shape-4.png" alt="">
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                <div class="teacher__details-thumb p-relative pr-30">
                                <img class="team-thumb" src="./uploads/{$students->file_name}" alt="">
                                <div class="teacher__details-shape">
                                    <img class="teacher-details-shape-1" src="assets/img/team/details/shape/shape-1.png" alt="">
                                    <img class="teacher-details-shape-2" src="assets/img/team/details/shape/shape-2.png" alt="">
                                </div>
                                </div>
                            </div>
                            <div class="col-xxl-8 col-xl-8 col-lg-8">
                                <div class="teacher__wrapper">
        
                                <div class="teacher__top d-md-flex align-items-end justify-content-between">
                                    <div class="teacher__info">
                                        <h4>{$students->full_name}</h4>
                                        <span>{$students->division}</span>
                                    </div>
                                    <div class="teacher__rating">
                                        <h5>CNE: {$students->cne}</h5>
                                    </div>
                                    <div class="teacher__rating">
                                        <h5>CNI: {$students->cin}</h5>
                                    </div>
                                </div>
        
                                <div class="teacher__bio">
                                    <h3>Notes:</h3>
                                    <p>Mathematics: {$students->mathematics}</p> </br>
                                    <p>Physics: {$students->physics}</p> </br>
                                    <p>Arab: {$students->arab}</p> </br>
                                    <p>English: {$students->english}</p> </br>
                                    <p>Frensh: {$students->frensh}</p> </br>
                                    <p>Philosophie: {$students->philosophie}</p> </br>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
    
students;
            
    }

    }catch(PDOException $e){
        echo 'query failed' . $e->getMessage();
    }
    }
}





?>
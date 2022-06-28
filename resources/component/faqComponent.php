<?php 


// Functionality for displaying FAQ's in home page
function display_faq_home()
{
    global $pdo;
    try{
    $sql ="SELECT f.* FROM faq f ORDER BY f.id";
    $stmt = $pdo->query($sql)->fetchAll();
    foreach ($stmt as $faq){
        echo <<<faq

        <div class="accordion-item">
            <h2 class="accordion-header" id="faqOne{$faq->id}">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne{$faq->id}" aria-expanded="true" aria-controls="collapseOne{$faq->id}">{$faq->question}</button>
            </h2>
            <div id="collapseOne{$faq->id}" class="accordion-collapse collapse" aria-labelledby="faqOne{$faq->id}" data-bs-parent="#faqaccordion">
                <div class="accordion-body">
                <p>{$faq->response}</p>
                </div>
            </div>
        </div>
faq;
    }
    } catch (PDOException $e) {
    set_message('error','query failed');
    echo 'query failed' . $e->getMessage();
    }
}


// Functionality for adding faq's from admin area to the db
function submit_faq()
{
    global $pdo;
    if(isset($_POST['submit'])){
        try{
        $question = trim($_POST['question']);
        $response = trim($_POST['response']);

        //**------  function for handling image upload-------*/
        $sql = "INSERT INTO `faq` (`id`, `question`, `response`) VALUES (NULL, ?, ?)";
        $stmt = $pdo->prepare($sql);
        $result = $stmt->execute([$question, $response]);
        if($result){
            header("location: ?manage_faq&success=true");
            
          } else {
            set_message('error','try again later');
            
          }
        } catch (PDOException $e) {
            set_message('error','query failed');
            
            echo 'query failed' . $e->getMessage();
        }
    }
}



// FAQ's Management: Display faq to be edited or deleted in admin area
function display_faq_admin()
{
    global $pdo;
    try{
        $sql = "SELECT f.* FROM faq f ORDER BY f.id DESC"; 
        $stmt = $pdo->query($sql)->fetchAll();
        foreach ($stmt as $faq){
        echo <<<faq
        <tr>
        <td class="text-center" style="width: 40%;"> {$faq->question} </td>
        <td class="text-center" style="width: 40%;"> {$faq->response} </td>

        <td class="text-center">
            <a href="index?edit_faq={$faq->id}">
            <button type="button" id="PopoverCustomT-1"class=" btn-wide btn btn-success btn-icon-only">
                <i class="pe-7s-note" style="font-size: 1rem;"></i> Edit
            </button>
            </a>
            <button type="button" id="PopoverCustomT-1" class=" btn-icon btn-icon-only btn btn-outline-danger" value="index?manage_faq&delete_faq={$faq->id}" data-toggle="modal" data-target="#exampleModal">
                <i class="pe-7s-trash" style="font-size: 1rem;"></i>
            </button>
        </td>
    </tr>
faq;
    }
} catch (PDOException $e) {
    echo 'query failed' . $e->getMessage();
}
}


// Functionality for deleting faq's admin area
function delete_faq()
{
    global $pdo;
    if (isset($_GET['delete_faq'])) {
        //Exeption Handling
        try {
                $sql = "DELETE FROM faq WHERE id = ?";
                            $stmt = $pdo->prepare($sql);
                //Execute the statement DELETE The partner.
                $stmt->execute([$_GET['delete_faq']]);
                //display toastr notification, event deleted successfully
                header("location: ?manage_faq&success=true");
}catch (PDOException $e) {
    echo 'query failed' . $e->getMessage();
}
}
}

// Functionality for updating faq's from admin area
function update_faq()
{
    global $pdo;
    if (isset($_POST['submit'])) {
        try {
            $sql = "UPDATE `faq` SET `question` = ?, `response` = ? WHERE `faq`.`id` = ?";
            $update_faq = $pdo->prepare($sql);
            $update_faq->execute([$_POST['question'], $_POST['response'], $_POST['faq_id']]);
            if ($update_faq) {
                header("location: ?manage_faq&success=true");
            } else {
                set_message('error', 'query failed try later');
            }
        } catch (PDOException $e) {
            echo 'query failed' . $e->getMessage();
        }
    }
}


?>
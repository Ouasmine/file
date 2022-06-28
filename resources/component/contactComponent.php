<?php 

// Contact Management. display messages in admin area
function display_msg_admin(){
    global $pdo;
    try{
    $sql ="SELECT c.* FROM contact c ORDER BY c.received_at DESC";
    $stmt = $pdo->query($sql)->fetchAll();
    foreach ($stmt as $msg){
        $reg = date("F jS, Y, g:i a", strtotime($msg->received_at));
        echo <<<msg
        <tr>
        <td class="text-center"> {$msg->full_name} </td>
        <td class="text-center"> {$msg->phone} </td>
        <td class="text-center"> {$msg->subjects} </td>
        <td class="text-center"><a href="mailto:{$msg->email}">{$msg->email}</a></td>
        <td class="text-center"> {$reg} </td>

        <td class="text-center">
            <a href="index?view_message={$msg->id}">
            <button type="button" id="PopoverCustomT-1"class=" btn-wide btn btn-success btn-icon-only">
            <i class="fa fa-fw" style="font-size: 1rem;" aria-hidden="true"></i>
            </button>
            </a>
        </td>
    </tr>
msg;
    }
    } catch (PDOException $e) {
    set_message('error','query failed');
    echo 'query failed' . $e->getMessage();
    }
}

// Display online admission tests in admin area
function display_admission_admin(){
    global $pdo;
    try{
    $sql ="SELECT a.* FROM admission a ORDER BY a.received_at DESC";
    $stmt = $pdo->query($sql)->fetchAll();
    foreach ($stmt as $msg){
        $reg = date("F jS, Y, g:i a", strtotime($msg->received_at));
        echo <<<msg
        <tr>
            <td class="text-center"> {$msg->full_name} </td>
            <td class="text-center"> {$msg->phone} </td>
            <td class="text-center"><a href="mailto:{$msg->email}">{$msg->email}</a></td>
            <td class="text-center"> {$reg} </td>
        </tr>
msg;
    }
    } catch (PDOException $e) {
    set_message('error','query failed');
    echo 'query failed' . $e->getMessage();
    }
}


// Display Become an Instructor in admin area
function display_becomeInstructor_admin(){
    global $pdo;
    try{
    $sql ="SELECT b.* FROM become_prof b ORDER BY b.received_at DESC";
    $stmt = $pdo->query($sql)->fetchAll();
    foreach ($stmt as $msg){
        $reg = date("F jS, Y, g:i a", strtotime($msg->received_at));
        echo <<<msg
        <tr>
            <td class="text-center"> {$msg->full_name} </td>
            <td class="text-center"> {$msg->phone} </td>
            <td class="text-center"><a href="mailto:{$msg->email}">{$msg->email}</a></td>
            <td class="text-center"> {$msg->grade} </td>
            <td class="text-center"> {$reg} </td>
        </tr>
msg;
    }
    } catch (PDOException $e) {
    set_message('error','query failed');
    echo 'query failed' . $e->getMessage();
    }
}

// Functionality for displaying single messages into admin area
function show_message()
{
    global $pdo;
    if (isset($_POST['submit'])) {
        try {

            $sql = "UPDATE contact SET full_name = ?, email = ?, subjects = ? , phone = ? , comments = ? WHERE contact.id = ?";
            $update_partner = $pdo->prepare($sql);
            $update_partner->execute([$_POST['full_name'], $_POST['email'], $_POST['subjects'], $_POST['phone'], $_POST['comments'], $_POST['contact_id']]);
            if ($update_partner) {
                set_message('success', 'Informations de lagence mises à jour avec succès');
                redirect('index.php?manage_offices&success');
            } else {
                set_message('error', 'query failed try later');
            }
        } catch (PDOException $e) {
            echo 'query failed' . $e->getMessage();
        }
    }
}

?>
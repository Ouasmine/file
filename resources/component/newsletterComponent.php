<?php 

// Subscribers Management: Displaying subscribers into admin panel
function display_sub_admin()
{
    global $pdo;
    try{
        $sql = "SELECT n.* FROM newsletter n ORDER BY n.created_at DESC"; 
        $stmt = $pdo->query($sql)->fetchAll();
        foreach ($stmt as $sub){
        $reg = date("F jS, Y, g:i a", strtotime($sub->created_at));
        echo <<<sub
        <tr>
            <td class="text-center">{$sub->email}</td>
            <td class="text-center">{$reg}</td>
        </tr>
sub;
    }
} catch (PDOException $e) {
    echo 'query failed' . $e->getMessage();
}
}




?>
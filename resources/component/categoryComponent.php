<?php 


// Ajouter categorie
function post_categorie(){
    global $pdo;
    if(isset($_POST['submit'])){
        try{
        $name = trim($_POST['name']);
        $slug =create_url_slug($name);
        $sql = "INSERT INTO `category` (`slug`, `cat_title`) VALUES (?, ?)";
        $stmt = $pdo->prepare($sql);
        $result = $stmt->execute([$slug, $name]);
        if($result){
            header("location: ?create_post&success=true"); 
            
          } else {
            set_message('error','try again later');
            
          }
        }catch(PDOException $e){
            echo 'query failed' . $e->getMessage();
        }
    }
}
// Fetch all categories
function fetch_category(){
    global $pdo;
    try{

    $sql = "SELECT * FROM category ORDER BY id";
    $stmt = $pdo->query($sql)->fetchAll();
    foreach ($stmt as $cat){
        echo " 
    <option value='{$cat->cat_title}'>
    $cat->cat_title
    </option>";
      
    }

    }catch(PDOException $e){
            echo 'query failed' . $e->getMessage();
        }
    
}

//Manage les categories
function display_categorie_admin(){
    global $pdo;
    try{
        $sql = "SELECT * FROM category ORDER BY id"; 
        $stmt = $pdo->query($sql)->fetchAll();
        foreach ($stmt as $cats){
        echo <<<cats
        <tr>
        <td class="text-center"> {$cats->cat_title} </td>

        <td class="text-center">
            <a href="index.php?edit_categorie={$cats->id}">
            <button type="button" id="PopoverCustomT-1"class=" btn-wide btn btn-success btn-icon-only">
                <i class="pe-7s-note" style="font-size: 1rem;"></i> Edit
            </button>
            </a>
            <button type="button" id="PopoverCustomT-1" class=" btn-icon btn-icon-only btn btn-outline-danger" value="index.php?manage_categorie&delete_categorie={$cats->id}" data-toggle="modal" data-target="#exampleModal">
                <i class="pe-7s-trash" style="font-size: 1rem;"></i>
            </button>
        </td>
    </tr>
cats;
    }
} catch (PDOException $e) {
    echo 'query failed' . $e->getMessage();
}  
}

// Update categorie

function update_categorie()
{
    global $pdo;
    if (isset($_POST['submit'])) {
        try { 
            $slug =create_url_slug($_POST['name']); 
            $sql = "UPDATE `category` SET `cat_title` = ?, `slug` = ? WHERE `category`.`id` = ?";
            $update_categorie = $pdo->prepare($sql);
            $update_categorie->execute([$_POST['name'], $slug, $_POST['categorie_id']]);
            if ($update_categorie) {
                header("location: ?manage_categorie&success=true"); 
            } else {
                set_message('error', 'query failed try later');
            }
        } catch (PDOException $e) {
            echo 'query failed' . $e->getMessage();
        }
    }
}

//Delete categorie
function delete_categorie()
{
    global $pdo;
    if (isset($_GET['delete_categorie'])) {
        //Exeption Handling
        try {
            //The SQL statement.        
            $sql = "DELETE FROM category WHERE id = ?";
            //Prepare our SELECT SQL statement.
            $stmt = $pdo->prepare($sql);
            //Execute the statement DELETE The category.
            $stmt->execute([$_GET['delete_categorie']]);
            //display toastr notification, event deleted successfully
            header("location: ?manage_categorie&success=true"); 
}catch (PDOException $e) {
    echo 'query failed' . $e->getMessage();
}
}
}

// Fetch all categorie
function fetch_category_list(){
    global $pdo;
    try{
        $sql = "SELECT * FROM category ORDER BY id"; 
        $stmt = $pdo->query($sql)->fetchAll();
        foreach ($stmt as $cats){

    echo <<<cats
    <li><a href="category-blog?categorie=$cats->cat_title">$cats->cat_title</a></li>  
cats;
        }
    } catch (PDOException $e) {
        echo 'query failed' . $e->getMessage();
    }
    

}

?>
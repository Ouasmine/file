<?php

// Display last 3 articles in home page
function display_posts_home(){
    global $pdo;
    try{
        $sql ="SELECT b.*, m.file_name FROM blog b join media m on b.cover = m.id ORDER BY b.id DESC Limit 3";
        $stmt = $pdo->query($sql)->fetchAll();
        foreach ($stmt as $posts) {
        
        echo <<<posts

        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
            <div class="course__item-2 transition-3 white-bg mb-30 fix">
                <div class="course__thumb-2 w-img fix">
                    <a href="blog-details?id={$posts->id}&post={$posts->slug}">
                        <img src="./uploads/{$posts->file_name}" alt="UPO - {$posts->title}">
                    </a>
                </div>
                <div class="course__content-2">
                    <div class="course__top-2 d-flex align-items-center justify-content-between">
                        <div class="course__tag-2">
                            <a href="#">{$posts->cat}</a>
                        </div>
                    </div>
                    <h3 class="course__title-2">
                        <a href="blog-details?id={$posts->id}&post={$posts->slug}">{$posts->title}</a>
                    </h3>
                </div>
            </div>
        </div>

posts;
    }

    } catch (PDOException $e) {
    set_message('error','query failed');
    echo 'query failed' . $e->getMessage();
    }
}
// Display last 3 articles in blog sidebar page
function display_posts_sidebar(){
    global $pdo;
    try{
        $sql ="SELECT b.*, m.file_name FROM blog b join media m on b.cover = m.id ORDER BY b.id DESC Limit 3";
        $stmt = $pdo->query($sql)->fetchAll();
        foreach ($stmt as $posts) {
            $reg = date("d M Y", strtotime($posts->published_at));
        
        echo <<<posts

        <div class="rc__post d-flex align-items-start">
            <div class="rc__thumb mr-20">
                <a href="blog-details?id={$posts->id}&post={$posts->slug}"><img src="./uploads/{$posts->file_name}" alt="UPO - {$posts->title}"></a>
            </div>
            <div class="rc__content">
                <div class="rc__meta">
                    <span>$reg</span>
                </div>
                <h6 class="rc__title"><a href="blog-details?id={$posts->id}&post={$posts->slug}">{$posts->title}</a></h6>
            </div>
        </div>

posts;
    }

    } catch (PDOException $e) {
    set_message('error','query failed');
    echo 'query failed' . $e->getMessage();
    }
}


// Display all articles in blog page order DESC
function display_posts_page(){
    global $pdo;
    try{
        $sql ="SELECT b.*, m.file_name FROM blog b join media m on b.cover = m.id ORDER BY b.id DESC";
        $stmt = $pdo->query($sql)->fetchAll();
        foreach ($stmt as $posts) {
        $reg = date("d M Y", strtotime($posts->published_at));
        
        echo <<<posts

        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-12">
            <article class="postbox__item format-image mb-50 transition-3">
                <div class="postbox__thumb w-img">
                    <a href="blog-details?id={$posts->id}&post={$posts->slug}">
                        <img src="./uploads/{$posts->file_name}" alt="UPO - {$posts->title}">
                    </a>
                </div>
                <div class="postbox__content">
                    <div class="postbox__meta">
                        <span><i class="far fa-calendar-check"></i>$reg</span>
                    </div>
                    <h3 class="postbox__title">
                        <a href="blog-details?id={$posts->id}&post={$posts->slug}">{$posts->title}</a>
                    </h3>
                    <div class="postbox__read-more">
                        <a href="blog-details?id={$posts->id}&post={$posts->slug}" class="tp-btn">read more</a>
                    </div>
                </div>
            </article>
        </div>
posts;
    }

    } catch (PDOException $e) {
    set_message('error','query failed');
    echo 'query failed' . $e->getMessage();
    }
}


// Add new post
function submit_post(){
    global $pdo;
    if(isset($_POST['submit'])){
        try{
        $title = trim($_POST['title']);
        $content = trim($_POST['content']);
        $category = trim($_POST['cat']);
        $slug =create_url_slug($title);

        $file = $_FILES['cover']['name'];

        $cover_id = 1;

        upload_image('cover', $cover_id);
        $sql = "INSERT INTO `blog` (`slug`, `title`, `content`, `cat`, `cover`, `published_at`) VALUES (?, ?, ?, ?, ?, CURRENT_TIMESTAMP)";
        $stmt = $pdo->prepare($sql);
        $result = $stmt->execute([$slug, $title, $content, $category, $cover_id]);
        if($result){
            header("location: ?manage_post&success=true"); 
            
          } else {
            set_message('error','try again later');
            
          }
        } catch (PDOException $e) {
            set_message('error','query failed');
            
            echo 'query failed' . $e->getMessage();
        }
    }
}

// Display post admin area
function display_posts_admin()
{
    global $pdo;
    try{
        $sql = "SELECT b.*, m.file_name FROM blog b join media m on b.cover = m.id ORDER BY b.id DESC"; 
        $stmt = $pdo->query($sql)->fetchAll();
        foreach ($stmt as $posts){
        echo <<<posts
        <tr>
        <td class="text-center"><img src="../uploads/thumbnails/{$posts->file_name}" class="br-a" alt="post thumbnail"></td>
        <td class="text-center">{$posts->title}</td>
        <td class="text-center">{$posts->cat}</td>
        <td class="text-center">{$posts->published_at}</td>

        <td class="text-center">
            <a href="index?edit_post={$posts->id}">
            <button type="button" id="PopoverCustomT-1"class=" btn-wide btn btn-success btn-icon-only">
                <i class="pe-7s-note" style="font-size: 1rem;"></i> Edit
            </button>
            </a>
            <button type="button" id="PopoverCustomT-1" class=" btn-icon btn-icon-only btn btn-outline-danger" value="index?manage_post&delete_post={$posts->id}" data-toggle="modal" data-target="#exampleModal">
                <i class="pe-7s-trash" style="font-size: 1rem;"></i>
            </button>
        </td>
    </tr>
posts;
    }
} catch (PDOException $e) {
    echo 'query failed' . $e->getMessage();
}
}

// Delete post

function delete_post()
{
    global $pdo;
    if (isset($_GET['delete_post'])) {
        //Exeption Handling
        try {
            //The SQL statement.
            $sqlimg = "SELECT m.id, m.file_name FROM blog b join media m on b.cover = m.id WHERE b.id = ?";
                //Prepare our SELECT SQL statement.
                $stmtimg = $pdo->prepare($sqlimg);
                //Execute the statement GET the Posts image data.
                $stmtimg->execute([$_GET['delete_post']]);
                //fetch the Partner cover data.
                $img = $stmtimg->fetch();
                //Check if it's the default image, we don't want to delete the default image.
                if ($img->id !== '1') {
                    //this is not the default image, Now we are going to delete thumbnail  from the uploads folder.
                    !unlink('../uploads/thumbnails/' . $img->file_name) ? set_message('error', 'cannot delete image due to an error') : set_message('success', 'image has been deleted successfully');
                    //this is not the default image, Now we are going to delete the actual image from the uploads folder.
                    !unlink('../uploads/' . $img->file_name) ? set_message('error', 'cannot delete image due to an error') : set_message('success', 'image has been deleted successfully');
                    //this is not the default image, The query to delete both the image and the partner
                    $sql = "DELETE b, m FROM blog b join media m on b.cover = m.id WHERE b.id = ?";
                } else {
                    //this is the default image, The query to delete just the partner
                    $sql = "DELETE FROM blog WHERE id = ?";
                }
                            //Prepare our DELETE SQL statement.
                $stmt = $pdo->prepare($sql);
                //Execute the statement DELETE The post.
                $stmt->execute([$_GET['delete_post']]);
                //display toastr notification, event deleted successfully
                header("location: ?manage_post&success=true"); 
}catch (PDOException $e) {
    echo 'query failed' . $e->getMessage();
}
}
}

// Update post

function update_post()
{
    global $pdo;
    if (isset($_POST['submit'])) {
        try {
          if(empty($_FILES['cover']['name'])){
            $cover_id = $_POST['cover_id'];
          }else{
            //**------  function for handling image upload-------*/
            upload_image('cover', $cover_id);
          } 
            
          $slug =create_url_slug($_POST['title']);  
            $sql = "UPDATE `blog` SET `title` = ?, `content` = ?, `slug` = ?, `cat` = ?, `cover` = ? WHERE `blog`.`id` = ?";
            $update_post = $pdo->prepare($sql);
            $update_post->execute([$_POST['title'], $_POST['content'], $slug, $_POST['cat'], $cover_id, $_POST['post_id']]);
            if ($update_post) {
                header("location: ?manage_post&success=true"); 
            } else {
                set_message('error', 'query failed try later');
            }
        } catch (PDOException $e) {
            echo 'query failed' . $e->getMessage();
        }
    }
}

// Affichier un seul post
function single_post(){
    global $pdo;
    $id= $_GET['id'];
    
        try{
        $sql = "SELECT b.*, m.file_name FROM blog b join media m on b.cover = m.id WHERE b.id ='$id'"; 
        $stmt = $pdo->query($sql)->fetchAll();
        foreach ($stmt as $posts){
            $reg = date("d M Y", strtotime($posts->published_at));
        
        echo <<<posts

        <div class="col-xxl-8 col-xl-8 col-lg-8">
            <div class="postbox__wrapper postbox__details pr-20">
            <div class="postbox__item transition-3 mb-70">
                <div class="postbox__thumb m-img">
                    <img src="./uploads/{$posts->file_name}" alt="UPO - $posts->title">
                </div>
                <div class="postbox__content">
                    <div class="postbox__meta">
                        <span><i class="far fa-calendar-check"></i>$reg</span>
                    </div>
                    <h3 class="postbox__title">$posts->title</h3>
                    <div class="postbox__text mb-40">
                        <p>$posts->content</p>
                    </div>
                </div>
            </div>
            </div>
        </div>

posts;
    }

    }catch(PDOException $e){
        echo 'query failed' . $e->getMessage();
    }
    

}


// Search by keyword
function search_blog(){
    global $pdo;
    if (isset($_POST['submit'])) {
        
        $keyword = $_POST['keyword'];
        $keyword = preg_replace("#[^0-9a-z]#i", "", $keyword);
        try{
            $sql = "SELECT b.*, m.file_name FROM blog b join media m on b.cover = m.id WHERE b.title LIKE '%$keyword%'"; 
            $stmt = $pdo->query($sql)->fetchAll();
            foreach ($stmt as $posts){
                $reg = date("d M Y", strtotime($posts->published_at));
    
                echo <<<posts

                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-12">
                    <article class="postbox__item format-image mb-50 transition-3">
                        <div class="postbox__thumb w-img">
                            <a href="blog-details?id={$posts->id}&post={$posts->slug}">
                                <img src="./uploads/{$posts->file_name}" alt="UPO - {$posts->title}">
                            </a>
                        </div>
                        <div class="postbox__content">
                            <div class="postbox__meta">
                                <span><i class="far fa-calendar-check"></i>$reg</span>
                            </div>
                            <h3 class="postbox__title">
                                <a href="blog-details?id={$posts->id}&post={$posts->slug}">{$posts->title}</a>
                            </h3>
                            <div class="postbox__read-more">
                                <a href="blog-details?id={$posts->id}&post={$posts->slug}" class="tp-btn">read more</a>
                            </div>
                        </div>
                    </article>
                </div>
    
posts;
            
    }

    }catch(PDOException $e){
        echo 'query failed' . $e->getMessage();
    }
    }
}


//Afficher les poste par categorie

function display_posts_by_category(){
    global $pdo;
    
    try{
        $cat = $_GET['categorie'];
        $sql ="SELECT b.*, m.file_name FROM blog b join media m on b.cover = m.id WHERE b.cat='$cat' ORDER BY b.id DESC";
    $stmt = $pdo->query($sql)->fetchAll();
    foreach ($stmt as $posts) {
        $reg = date("d M Y", strtotime($posts->published_at));
        echo <<<posts

        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-12">
            <article class="postbox__item format-image mb-50 transition-3">
                <div class="postbox__thumb w-img">
                    <a href="blog-details?id={$posts->id}&post={$posts->slug}">
                        <img src="./uploads/{$posts->file_name}" alt="UPO - {$posts->title}">
                    </a>
                </div>
                <div class="postbox__content">
                    <div class="postbox__meta">
                        <span><i class="far fa-calendar-check"></i>$reg</span>
                    </div>
                    <h3 class="postbox__title">
                        <a href="blog-details?id={$posts->id}&post={$posts->slug}">{$posts->title}</a>
                    </h3>
                    <div class="postbox__read-more">
                        <a href="blog-details?id={$posts->id}&post={$posts->slug}" class="tp-btn">read more</a>
                    </div>
                </div>
            </article>
        </div>
posts;
    }

    } catch (PDOException $e) {
    set_message('error','query failed');
    echo 'query failed' . $e->getMessage();
    }
}

?>
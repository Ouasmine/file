<?php

// Display last 4 events in home page
function display_events_home(){
    global $pdo;
    try{
        $sql ="SELECT e.*, m.file_name FROM events e join media m on e.cover = m.id ORDER BY e.id DESC Limit 4";
        $stmt = $pdo->query($sql)->fetchAll();
        foreach ($stmt as $events) {
        

        
        echo <<<events


        <div class="event__item white-bg mb-10 transition-3 p-relative d-lg-flex align-items-center justify-content-between">
            <div class="event__left d-sm-flex align-items-center">
                <div class="event__date">
                    <p>{$events->date}</p>
                </div>
                <div class="event__content">
                    <div class="event__meta">
                        <ul>
                            <li>
                            <a href="event-details?id={$events->id}&event={$events->slug}"><svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.49992 9.51253C9.72047 9.51253 10.7099 8.52308 10.7099 7.30253C10.7099 6.08198 9.72047 5.09253 8.49992 5.09253C7.27937 5.09253 6.28992 6.08198 6.28992 7.30253C6.28992 8.52308 7.27937 9.51253 8.49992 9.51253Z" stroke="#5F6160" stroke-width="1.5"/>
                                <path d="M2.56416 6.01334C3.95958 -0.120822 13.0475 -0.113738 14.4358 6.02043C15.2504 9.61876 13.0121 12.6646 11.05 14.5488C9.62625 15.9229 7.37375 15.9229 5.94291 14.5488C3.98791 12.6646 1.74958 9.61168 2.56416 6.01334Z" stroke="#5F6160" stroke-width="1.5"/>
                                </svg>{$events->location}</a>
                            </li>
                        </ul>
                    </div>
                    <h3 class="event__title">
                        <a href="event-details?id={$events->id}&event={$events->slug}">{$events->title}</a>
                    </h3>

                </div>
            </div>

            <div class="event__right d-sm-flex align-items-center">
                <div class="event__time">
                    <span>
                        <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M13.75 7.50024C13.75 10.9502 10.95 13.7502 7.5 13.7502C4.05 13.7502 1.25 10.9502 1.25 7.50024C1.25 4.05024 4.05 1.25024 7.5 1.25024C10.95 1.25024 13.75 4.05024 13.75 7.50024Z" stroke="#258E46" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M9.8188 9.48735L7.8813 8.3311C7.5438 8.1311 7.2688 7.64985 7.2688 7.2561V4.6936" stroke="#258E46" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        {$events->start_time} - {$events->end_time}
                    </span>
                </div>
                <div class="event__more ml-30">
                    <a href="event-details?id={$events->id}&event={$events->slug}" class="tp-btn-5 tp-btn-7">View Events </a>
                </div>
            </div>
        </div>

events;
    }

    } catch (PDOException $e) {
    set_message('error','query failed');
    echo 'query failed' . $e->getMessage();
    }
}

// Display all events in event page
function display_events(){
    global $pdo;
    try{
        $sql ="SELECT e.*, m.file_name FROM events e join media m on e.cover = m.id ORDER BY e.id DESC Limit 4";
        $stmt = $pdo->query($sql)->fetchAll();
        foreach ($stmt as $events) {
        

        
        echo <<<events


        <div class="event__item white-bg mb-10 transition-3 p-relative d-lg-flex align-items-center justify-content-between">
            <div class="event__left d-sm-flex align-items-center">
                <div class="event__date">
                    <p>{$events->date}</p>
                </div>
                <div class="event__content">
                    <div class="event__meta">
                        <ul>
                            <li>
                            <a href="event-details?id={$events->id}&event={$events->slug}"><svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.49992 9.51253C9.72047 9.51253 10.7099 8.52308 10.7099 7.30253C10.7099 6.08198 9.72047 5.09253 8.49992 5.09253C7.27937 5.09253 6.28992 6.08198 6.28992 7.30253C6.28992 8.52308 7.27937 9.51253 8.49992 9.51253Z" stroke="#5F6160" stroke-width="1.5"/>
                                <path d="M2.56416 6.01334C3.95958 -0.120822 13.0475 -0.113738 14.4358 6.02043C15.2504 9.61876 13.0121 12.6646 11.05 14.5488C9.62625 15.9229 7.37375 15.9229 5.94291 14.5488C3.98791 12.6646 1.74958 9.61168 2.56416 6.01334Z" stroke="#5F6160" stroke-width="1.5"/>
                                </svg>{$events->location}</a>
                            </li>
                        </ul>
                    </div>
                    <h3 class="event__title">
                        <a href="event-details?id={$events->id}&event={$events->slug}">{$events->title}</a>
                    </h3>

                </div>
            </div>

            <div class="event__right d-sm-flex align-items-center">
                <div class="event__time">
                    <span>
                        <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M13.75 7.50024C13.75 10.9502 10.95 13.7502 7.5 13.7502C4.05 13.7502 1.25 10.9502 1.25 7.50024C1.25 4.05024 4.05 1.25024 7.5 1.25024C10.95 1.25024 13.75 4.05024 13.75 7.50024Z" stroke="#258E46" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M9.8188 9.48735L7.8813 8.3311C7.5438 8.1311 7.2688 7.64985 7.2688 7.2561V4.6936" stroke="#258E46" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        {$events->start_time} - {$events->end_time}
                    </span>
                </div>
                <div class="event__more ml-30">
                    <a href="event-details?id={$events->id}&event={$events->slug}" class="tp-btn-5 tp-btn-7">View Events </a>
                </div>
            </div>
        </div>

events;
    }

    } catch (PDOException $e) {
    set_message('error','query failed');
    echo 'query failed' . $e->getMessage();
    }
}

// Add new event
function submit_event(){
    global $pdo;
    if(isset($_POST['submit'])){
        try{
        $title = trim($_POST['title']);
        $slug =create_url_slug($title);
        $date = trim($_POST['date']);
        $location = trim($_POST['location']);
        $start_time = trim($_POST['start_time']);
        $end_time = trim($_POST['end_time']);
        $content = trim($_POST['content']);

        $file = $_FILES['cover']['name'];

        $cover_id = 1;

        upload_image('cover', $cover_id);
        $sql = "INSERT INTO `events` (`slug`, `title`, `date`, `location`, `start_time`, `content`, `end_time`, `cover`) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $pdo->prepare($sql);
        $result = $stmt->execute([$slug, $title, $date, $location, $start_time, $content, $end_time, $cover_id]);
        if($result){
            header("location: ?manage_events&success=true");
            
          } else {
            set_message('error','try again later');
            
          }
        } catch (PDOException $e) {
            set_message('error','query failed');
            
            echo 'query failed' . $e->getMessage();
        }
    }
}

// Display event admin area
function display_events_admin()
{
    global $pdo;
    try{
        $sql = "SELECT e.*, m.file_name FROM events e join media m on e.cover = m.id ORDER BY e.id DESC"; 
        $stmt = $pdo->query($sql)->fetchAll();
        foreach ($stmt as $events){
        echo <<<events
        <tr>
        <td class="text-center"><img src="../uploads/thumbnails/{$events->file_name}" class="br-a" alt="post thumbnail"></td>
        <td class="text-center">{$events->title}</td>
        <td class="text-center">{$events->date}</td>
        <td class="text-center">{$events->start_time}</td>
        <td class="text-center">{$events->end_time}</td>
        <td class="text-center">{$events->location}</td>

        <td class="text-center">
            <a href="index?edit_event={$events->id}">
            <button type="button" id="PopoverCustomT-1"class=" btn-wide btn btn-success btn-icon-only">
                <i class="pe-7s-note" style="font-size: 1rem;"></i> Edit
            </button>
            </a>
            <button type="button" id="PopoverCustomT-1" class=" btn-icon btn-icon-only btn btn-outline-danger" value="index?manage_events&delete_event={$events->id}" data-toggle="modal" data-target="#exampleModal">
                <i class="pe-7s-trash" style="font-size: 1rem;"></i>
            </button>
        </td>
    </tr>
events;
    }
} catch (PDOException $e) {
    echo 'query failed' . $e->getMessage();
}
}

// Delete event

function delete_event()
{
    global $pdo;
    if (isset($_GET['delete_event'])) {
        //Exeption Handling
        try {
            //The SQL statement.
            $sqlimg = "SELECT m.id, m.file_name FROM events e join media m on e.cover = m.id WHERE e.id = ?";
                //Prepare our SELECT SQL statement.
                $stmtimg = $pdo->prepare($sqlimg);
                //Execute the statement GET the events image data.
                $stmtimg->execute([$_GET['delete_event']]);
                //fetch the Partner cover data.
                $img = $stmtimg->fetch();
                //Check if it's the default image, we don't want to delete the default image.
                if ($img->id !== '1') {
                    //this is not the default image, Now we are going to delete thumbnail  from the uploads folder.
                    !unlink('../uploads/thumbnails/' . $img->file_name) ? set_message('error', 'cannot delete image due to an error') : set_message('success', 'image has been deleted successfully');
                    //this is not the default image, Now we are going to delete the actual image from the uploads folder.
                    !unlink('../uploads/' . $img->file_name) ? set_message('error', 'cannot delete image due to an error') : set_message('success', 'image has been deleted successfully');
                    //this is not the default image, The query to delete both the image and the partner
                    $sql = "DELETE e, m FROM events e join media m on e.cover = m.id WHERE e.id = ?";
                } else {
                    //this is the default image, The query to delete just the partner
                    $sql = "DELETE FROM events WHERE id = ?";
                }
                            //Prepare our DELETE SQL statement.
                $stmt = $pdo->prepare($sql);
                //Execute the statement DELETE The event.
                $stmt->execute([$_GET['delete_event']]);
                //display toastr notification, event deleted successfully
                header("location: ?manage_events&success=true");
}catch (PDOException $e) {
    echo 'query failed' . $e->getMessage();
}
}
}

// Update event

function update_event()
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
            $sql = "UPDATE `events` SET `title` = ?, `content` = ?, `slug` = ?, `date` = ?, `start_time` = ?, `end_time` = ?, `location` = ?, `cover` = ? WHERE `events`.`id` = ?";
            $update_post = $pdo->prepare($sql);
            $update_post->execute([$_POST['title'], $_POST['content'], $slug, $_POST['date'],  $_POST['start_time'], $_POST['end_time'], $_POST['location'], $cover_id, $_POST['event_id']]);
            if ($update_post) {
                header("location: ?manage_events&success=true");
            } else {
                set_message('error', 'query failed try later');
            }
        } catch (PDOException $e) {
            echo 'query failed' . $e->getMessage();
        }
    }
}

// Affichier un seul event
function single_event(){
    global $pdo;
    $id= $_GET['id'];
    
        try{
        $sql = "SELECT e.*, m.file_name FROM events e join media m on e.cover = m.id WHERE e.id ='$id'"; 
        $stmt = $pdo->query($sql)->fetchAll();
        foreach ($stmt as $events){
        
        echo <<<events

        <section class="blog__area pt-120 pb-120">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="postbox__wrapper postbox__details pr-20">
                            <div class="postbox__item transition-3 mb-70">
                                <div class="postbox__thumb m-img">
                                    <img src="./uploads/{$events->file_name}" width=100% alt="UPO - $events->title">
                                </div>
                                <div class="postbox__content">
                                    <div class="postbox__meta">
                                        <span><i class="far fa-calendar-check"></i>$events->date</span>
                                    </div>
                                    <h3 class="postbox__title">$events->title</h3>
                                    <div class="postbox__text mb-40">
                                        <p>$events->content</p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


events;
    }

    }catch(PDOException $e){
        echo 'query failed' . $e->getMessage();
    }
    

}



?>
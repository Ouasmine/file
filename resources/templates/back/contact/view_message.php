<?php show_message()?>

<div class="app-main__inner">
    <div class="app-inner-layout chat-layout">
        <!-- <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i
                            class="metismenu-icon fa fa-fw"
                            aria-hidden="true"
                            title="Copy to use envelope"></i>
                    </div>
                    <div>
                        Détails du message
                    </div>
                </div>
            </div>
        </div> -->
        <?php 
        try {
            //code...
        
            $edit_message_sql = "SELECT * FROM contact WHERE id = ?";
            $message_edit = $pdo->prepare($edit_message_sql);
            $message_edit->execute([$_GET['view_message']]);
            $message_result = $message_edit->fetchAll(); ?>
        <div class="app-inner-layout__wrapper">
            <div class="app-inner-layout__content card">
                <div class="table-responsive">
                <?php if($message_result): ?>
                        <?php foreach($message_result as $msg): ?>
                    <div class="app-inner-layout__top-pane">
                        <div class="pane-left">
                            <input type="hidden" name="contact_id" value="<?php echo $msg->id?>">
                            <h4 class="mb-0 text-nowrap"><span style="color: black;">Subject : <?php echo $msg->subjects ?></span>
                            <div style="display: grid;grid-template-columns: max-content max-content;margin-top: 24px;">
                            <div style="margin: auto;">
                            <div class="avatar-icon-wrapper mr-1">
                                <div class="badge badge-bottom btn-shine badge-success badge-dot badge-dot-lg"></div>
                                <div class="avatar-icon avatar-icon-lg rounded"style="margin-right: 8px;">
                                    <img src="assets/images/avatars/default-avatar.png" alt=""></div>
                                </div>
                            </div>
                                <div class="opacity-7" style="margin: auto;">
                                    <input type="hidden" name="contact_id" value="<?php echo $msg->id?>">
                                    <?php echo $msg->full_name ?> <a href="mailto:<?php echo $msg->email ?>"><br><input type="hidden" name="contact_id" value="<?php echo $msg->id?>"><?php echo $msg->email ?></a>
                                    <a href="tel:<?php echo $msg->phone ?>"><br><input type="hidden" name="contact_id" value="<?php echo $msg->id?>"><?php echo $msg->phone ?></a>
                                </div>
                                </div>
                            </h4>
                        </div>
                    </div>
                    <div class="chat-wrapper">
                        <div class="chat-box-wrapper">

                            <div style="width: 100%;">
                                <div class="chat-box">
                                <input type="hidden" name="contact_id" value="<?php echo $msg->id?>">
                                <?php echo $msg->comments?>
                                </div>
                                <small class="opacity-6" style="font-size: 14px;">
                                    <i class="fa fa-calendar-alt mr-1"></i>
                                    <input type="hidden" name="contact_id" value="<?php echo $msg->id?>">
                                    <?php echo $msg->received_at?>
                                </small>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach ?>
                    <?php endif ?>
                    <?php 
                        }  catch (PDOException $e) {
                            echo 'query failed' . $e->getMessage();
                        }
                    ?>
            </div>
        </div>
    </div>
</div>
         <!-- Registration for online admission tests modal -->
         <div class="course__popup">
                <!-- Modal -->
            <div class="modal fade" id="start_learning_modal" tabindex="-1" aria-labelledby="start_learning_modal" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="course__popup-wrapper p-relative">
                        <div class="course__popup-close">
                            <button type="button" class="course__popup-close-btn" data-bs-toggle="modal" data-bs-target="#start_learning_modal"><i class="fa-light fa-xmark"></i></button>
                        </div>
                        <div class="course__popup-top d-flex align-items-start mb-40">
                            <div class="course__popup-content">
                                <h3 class="course__popup-title">
                                    <a href="javascript:void(0);">Registration for online admission tests</a>
                                </h3>

                            </div>
                        </div>
                        <div class="course__popup-info">
                            <form action="" method="post">
                                <div class="row gx-3">

                                    <div class="col-xl-12">
                                        <div class="course__popup-input">
                                            <input name="full_name" type="text" placeholder="Full name">
                                            <span class="course__popup-input-icon"><i class="fa-light fa-user"></i></span>
                                        </div>
                                    </div>
                                    
                                    <div class="col-xl-12">
                                        <div class="course__popup-input">
                                            <input name="email" type="email" placeholder="Email">
                                            <span class="course__popup-input-icon"><i class="fa-light fa-envelope"></i></span>
                                        </div>
                                    </div>

                                    <div class="col-xxl-12">
                                        <div class="course__popup-input">
                                            <input name="phone" type="text" placeholder="Phone">
                                            <span class="course__popup-input-icon"><i class="fa-light fa-phone"></i></span>
                                        </div>
                                    </div>

                                    <div class="col-xxl-12">
                                        <div class="course__popup-btn">
                                            <button name="submit" type="submit" class="tp-btn w-100">Send</button>
                                        </div>
                                    </div>

                                </div>
                            </form>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <?php 

            $dbHost = "localhost";
            $dbUser = "root";
            $dbPassword = "";
            $dbName = "upo";

            try {
            $dsn = "mysql:host=" . $dbHost . ";dbname=" . $dbName;
            $pdo = new PDO($dsn, $dbUser, $dbPassword);
            } catch(PDOException $e) {
            echo "DB Connection Failed: " . $e->getMessage();
            }


            if($_SERVER['REQUEST_METHOD'] == 'POST') {
            // $full_name = $_POST['full_name'];
            // $email = $_POST['email'];
            // $phone = $_POST['phone'];


            if(empty($full_name) || empty($email) || empty($phone) ) {
                set_message('error','All fields are compulsory.');
            } else {
                if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                set_message('error','Please enter a valid email');
                } else {

                $sql = "INSERT INTO admission (full_name, email, phone) VALUES (:full_name, :email, :phone)";

                $stmt = $pdo->prepare($sql);
                
                $stmt->execute(['full_name' => $full_name, 'email' => $email, 'phone' => $phone]);
                header("location: ./?Admissionsent=true");

                $full_name = "";
                $email = "";
                $phone = "";
                }
            }
            }


    ?>
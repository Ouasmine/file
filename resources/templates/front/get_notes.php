         <!-- Get your notes -->
         <div class="course__popup">
                <!-- Modal -->
            <div class="modal fade" id="get_notes" tabindex="-1" aria-labelledby="get_notes" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="course__popup-wrapper p-relative">
                        <div class="course__popup-close">
                            <button type="button" class="course__popup-close-btn" data-bs-toggle="modal" data-bs-target="#get_notes"><i class="fa-light fa-xmark"></i></button>
                        </div>
                        <div class="course__popup-top d-flex align-items-start mb-40">
                            <div class="course__popup-content">
                                <h3 class="course__popup-title">
                                    <a href="javascript:void(0);">Get your notes</a>
                                </h3>
                            </div>
                        </div>
                        <div class="course__popup-info">
                            <form role="search" method="POST" action="myNotes">
                                <div class="row gx-3">

                                    <div class="col-xl-12">
                                        <div class="course__popup-input">
                                            <input name="cne" type="text" placeholder="Type your CNE here ...">
                                            <span class="course__popup-input-icon"><i class="fa-light fa-note"></i></span>
                                        </div>
                                    </div>

                                    <div class="col-xxl-12">
                                        <div class="course__popup-btn">
                                            <button type="submit" name="submit" class="tp-btn w-100">Get your notes</button>
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
<div class="app-main__inner">
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                <i class="metismenu-icon fas fa-user-check"></i>
                </div>
                <div>Manage your subscribers
                    <div class="page-title-subheading">Here you can see the information of your subscribers
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="main-card mb-3 card">
                <div class="card-header">List of subscribers</div>
                <div class="table-responsive">
                    <table class="align-middle mb-0 table table-borderless table-striped table-hover" id="manage-subscribers">
                        <thead>
                            <tr>
                                <th class="text-center">Subscriber email</th>
                                <th class="text-center">Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php display_sub_admin() ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>





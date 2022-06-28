<?php delete_partner(); ?>
<div class="app-main__inner">
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="fa fa-fw" aria-hidden="true" title="Copy to use handshake-o"></i>
                </div>
                <div>Manage partners
                    <div class="page-title-subheading">Here you can edit partners informations
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="main-card mb-3 card">
                <div class="card-header">List of partners</div>
                <div class="table-responsive">
                    <table class="align-middle mb-0 table table-borderless table-striped table-hover" id="manage-partners">
                        <thead>
                            <tr>
                                <th class="text-center">Logo</th>
                                <th class="text-center">Partner name</th>
                                <th class="text-center desktop">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php display_partners_admin() ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    const delete_buttons = document.querySelectorAll('#PopoverCustomT-1');
    for(const el of delete_buttons ){
        el.addEventListener('click', (e) => {
        let link = e.currentTarget.value;
        document.querySelector('.deletion_link').href = link;
        });
    }
</script>
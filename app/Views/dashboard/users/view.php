<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row mb-2">
            <div class="col-6 d-flex">
                <!-- <a href="<?php echo $current_page ?>" style="margin-right: 20px;"><i class='bx bx-left-arrow-alt' style="font-size: 30px;"></i></a> -->
                <h4 class="fw-bold">View Users</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-6">
                                <h4>Users Details</h4>
                                <span></span>
                            </div>
                            <div class="col-6 d-flex gap-2 justify-content-end">
                                <div class="button-wrapper">
                                    <a href="<?php echo $current_page . '/edit/' . $record[0]->userID ?>" class="btn btn-outline-primary account-image-reset ">
                                        <i class='bx bx-edit'></i>
                                    </a>
                                </div>
                                <div class="button-wrapper">
                                    <a href="<?php echo $current_page . '/edit_password/' . $record[0]->userID ?>" class="btn btn-outline-primary account-image-reset ">
                                        <i class='bx bxs-key'></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Account -->
                    <div class="card-body">
                        <table class="table table-borderless">
                            <tbody>
                                <tr>
                                    <td style="width:150px; font-size:20px">First Name: </td>
                                    <td style="font-size: 20px"><?php echo $record[0]->firstname ?></td>
                                </tr>
                                <tr>
                                    <td style="width:150px; font-size:20px">Last Name: </td>
                                    <td style="font-size: 20px"><?php echo $record[0]->lastname ?></td>
                                </tr>
                                <tr>
                                    <td style="width:150px; font-size:20px">User Name:</td>
                                    <td style="font-size: 20px"><?php echo $record[0]->username ?></td>
                                </tr>
                            </tbody>
                        </table>
                        <!-- /Account -->
                    </div>
                </div>
            </div>
        </div>

        <div class="content-backdrop fade"></div>
    </div>
    <!-- / Content -->
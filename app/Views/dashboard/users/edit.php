<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row mb-2">
            <div class="col-6 d-flex">
                <h4 class="fw-bold">Edit User</h4>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <span class="card-header"></span>
                    <!-- Account -->
                    <div class="card-body">
                        <form id="formAccountSettings" method="POST" action="<?php echo site_url('users/update') ?>" enctype="multipart/form-data">
                            <input type="hidden" name="userID" id="userID" value="<?php echo $record[0]->userID ?>">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <td style="width:150px; font-size:20px">First Name </td>
                                        <td style="font-size: 20px">
                                            <input class="form-control" type="text" id="firstname" name="firstname" value="<?php echo $record[0]->firstname ?>" style="width:300px;" required />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width:150px; font-size:20px">Last Name </td>
                                        <td style="font-size: 20px">
                                            <input class="form-control" type="text" name="lastname" id="lastname" value="<?php echo $record[0]->lastname ?>" style="width:300px;" required />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width:150px; font-size:20px">User Name</td>
                                        <td style="font-size: 20px">
                                            <input class="form-control" type="text" id="username" name="username" value="<?php echo $record[0]->username ?>" style="width:300px;" required />
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="mt-2">
                                <button type="submit" class="btn btn-primary me-2">Update</button>
                                <a href="<?php echo $current_page . '/view/' . $record[0]->userID ?>" type="reset" class="btn btn-outline-secondary">Cancel</a>
                            </div>
                        </form>
                    </div>
                    <!-- /Account -->
                </div>
            </div>
        </div>
    </div>
    <!-- / Content -->
    <div class="content-backdrop fade"></div>
</div>
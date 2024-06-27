<style>
    .form-control {
        width: 300px;
    }

    .form-password-toggle {
        width: 300px;
    }
</style>
<div class="content-wrapper">
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold mb-4">Edit User</h4>

        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <h5 class="card-header"></h5>
                    <!-- Account -->
                    <div class="card-body">
                        <form id="formAccountSettings" method="POST" action="<?php echo site_url('users/update_password') ?>" enctype="multipart/form-data">
                            <input type="hidden" name="userID" id="userID" value="<?php echo $record[0]->userID ?>">
                            <div class="row d-block">
                                <table class="table table-borderless">
                                    <tbody>
                                        <tr>
                                            <td style="width:300px; font-size:20px"> <label>Password</label> </td>
                                            <td>
                                                <div class="d-flex form-password-toggle">
                                                    <div class="input-group input-group-merge">
                                                        <input type="password" id="password" class="form-control" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" required />
                                                        <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width:300px; font-size:20px"> <label>Confirm Password</label> </td>
                                            <td>
                                                <div class="d-flex form-password-toggle">
                                                    <div class="input-group input-group-merge">
                                                        <input type="password" class="form-control" name="cpassword" id="cpassword" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="cpassword" required />
                                                        <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
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
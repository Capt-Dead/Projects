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
        <h4 class="fw-bold  mb-4">Create Users</h4>
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <!-- Account -->
                    <div class="card-body">
                        <form id="formSubmit" method="POST" action="<?php echo site_url('users/save') ?>">
                            <table class="table table-borderless">
                                <tr>
                                    <td style="width:300px; font-size:20px"> <label>First Name</label></td>
                                    <td>
                                        <input class="form-control" type="redio" name="firstname" id="firstname" value="<?php if (isset($record['firstname'])) echo $record['firstname'] ?>" required />
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width:300px; font-size:20px"> <label>Last Name</label> </td>
                                    <td>
                                        <input class="form-control" type="redio" name="lastname" id="lastname" value="<?php if (isset($record['lastname'])) echo $record['lastname'] ?>" required />
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width:300px; font-size:20px"> <label>User Name</label> </td>
                                    <td>
                                        <input class="form-control" type="text" id="username" name="username" value="<?php if (isset($record['username'])) echo $record['username'] ?>" required />
                                    </td>
                                </tr>

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
                                    <td style="width:300px; font-size:20px"> Confirm Password</td>
                                    <td>
                                        <div class="d-flex form-password-toggle">
                                            <div class="input-group input-group-merge">
                                                <input type="password" class="form-control" name="cpassword" id="cpassword" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="cpassword" required />
                                                <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                            <div class="mt-2">
                                <button type="submit" class="btn btn-primary me-2">Save</button>
                                <a href="<?php echo $current_page ?>" type="reset" class="btn btn-outline-secondary">Cancel</a>
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
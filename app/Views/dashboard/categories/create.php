<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold  mb-4">Create Category</h4>

        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <!-- Account -->
                    <div class="card-body">
                        <form id="formSubmit" method="POST" action="<?php echo site_url('categories/save') ?>">
                            <div class="row d-block">
                                <div class="mb-3 col-md-5 ">
                                    <label for="ctgryName" class="form-label">Category Name</label>
                                    <input class="form-control" type="text" id="ctgryName" name="ctgryName" value="" required />
                                </div>
                                <div class="mb-3 col-md-5">
                                    <label for="ctgryDesc" class="form-label">Category Description</label>
                                    <input class="form-control" type="text" name="ctgryDesc" id="ctgryDesc" value="" required/>
                                </div>
                            </div>
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
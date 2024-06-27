<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-md-8">
                <div class="card mb-4">
                    <h5 class="card-header"></h5>
                    
                    <div class="card-body">
                        <form id="formSubmit" method="POST" action="<?php echo $current_page . '/update' ?>">
                        <input type="hidden" name="ctgryID" id="ctgryID" value="<?php echo $field->ctgryID ?>">
                            <div class="row d-block">
                                <div class="mb-3 col-md-5 ">
                                    <label for="ctgryName" class="form-label">Category Name</label>
                                    <input class="form-control" type="text" id="ctgryName" name="ctgryName" value="<?php echo $field->ctgryName ?>" required />
                                </div>
                                <div class="mb-3 col-md-5">
                                    <label for="ctgryDesc" class="form-label">Category Description</label>
                                    <input class="form-control" type="text" name="ctgryDesc" id="ctgryDesc" value="<?php echo $field->ctgryDesc ?>" required />
                                </div>
                            </div>
                            <div class="mt-2">
                                <button type="submit" class="btn btn-warning me-2">Update</button>
                                <a href="<?php echo $current_page ?>" type="reset" class="btn btn-outline-secondary">Cancel</a>
                            </div>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- / Content -->
</div>

<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold  mb-4">Create Category</h4>

        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <!-- Supply Content -->
                    <div class="card-body">
                        <form id="formSubmit" method="POST" action="<?php echo site_url('supply/save') ?>">
                            <div class="row d-block">
                                <div class="mb-3 col-md-5 ">
                                    <label for="suppName" class="form-label">Item Description</label>
                                    <input class="form-control" type="text" id="suppName" name="suppName" value="" required />
                                </div>
                                <div class="mb-3 col-md-5">
                                    <label for="suppSize" class="form-label">Item Size</label>
                                    <select id="suppSize" class="form-select" name="suppSize" required>
                                        <option value=""></option>
                                        <option value="Small">Small</option>
                                        <option value="Medium">Medium</option>
                                        <option value="Large">Large</option>
                                    </select>
                                </div>
                                <div class="mb-3 col-md-5">
                                    <label for="suppQuan" class="form-label">Item Quantity</label>
                                    <input class="form-control" type="text" name="suppQuan" id="suppQuan" value="" required/>
                                </div>
                                <div class="mb-3 col-md-5">
                                    <label for="suppUnit" class="form-label">Item Unit</label>
                                    <select id="suppUnit" class="form-select" name="suppUnit" required>
                                        <option value=""></option>
                                        <option value="pcs">pcs</option>
                                        <option value="kl">kl</option>
                                        <option value="bundle">bundle</option>
                                        <option value="pack">pack</option>
                                    </select>
                                </div>
                                <div class="mb-3 col-md-5">
                                    <label  class="form-label">Category <small class="text-danger">*</small></label>
                                    <select id="ctgryID" class="form-select" name="ctgryID" required>
                                        <option value=""></option>
                                        <?php foreach ($record as $rec) { ?>
                                            <option value="<?php echo $rec->ctgryID ?>"><?php echo $rec->ctgryName ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="mt-2">
                                <button type="submit" class="btn btn-primary me-2">Save</button>
                                <a href="<?php echo $current_page ?>" type="reset" class="btn btn-outline-secondary">Cancel</a>
                            </div>
                        </form>
                    </div>
                    <!-- /Supply Content -->
                </div>
            </div>
        </div>
    </div>
    <!-- / Content -->

    <div class="content-backdrop fade"></div>
</div>
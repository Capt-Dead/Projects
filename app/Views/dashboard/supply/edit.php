<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold  mb-4">Create Category</h4>

        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <!-- Supply Content -->
                    <div class="card-body">
                        <form id="formSubmit" method="POST" action="<?php echo site_url('supply/update') ?>">
                        <input type="hidden" name="suppID" id="suppID" value="<?php echo $record->suppID ?>">
                            <div class="row d-block">
                                <div class="mb-3 col-md-5 ">
                                    <label for="suppName" class="form-label">Item Description</label>
                                    <input class="form-control" type="text" id="suppName" name="suppName" value="<?php echo $record->suppName ?>" required />
                                </div>
                                <div class="mb-3 col-md-5">
                                    <label for="suppSize" class="form-label">Item Size</label>
                                    <select id="suppSize" class="form-select" name="suppSize" required>
                                        <?php if ($supply != null) { ?>
                                            <option value=""></option>
                                            <option value="Small" <?php if ($record->suppSize == "Small") echo 'selected' ?>>Small</option>
                                            <option value="Medium" <?php if ($record->suppSize == "Medium") echo 'selected' ?>>Medium</option>
                                            <option value="Large" <?php if ($record->suppSize == "Large") echo 'selected' ?>>Large</option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="mb-3 col-md-5">
                                    <label for="suppQuan" class="form-label">Item Quantity</label>
                                    <input class="form-control" type="text" name="suppQuan" id="suppQuan" value="<?php echo $record->suppQuan ?>" required/>
                                </div>
                                <div class="mb-3 col-md-5">
                                    <label for="suppUnit" class="form-label">Item Unit</label>
                                    <select id="suppUnit" class="form-select" name="suppUnit" required>
                                        <?php if ($supply != null) { ?>
                                            <option value=""></option>
                                            <option value="pcs" <?php if ($record->suppUnit == "pcs") echo 'selected' ?>>pcs</option>
                                            <option value="kl" <?php if ($record->suppUnit == "kl") echo 'selected' ?>>kl</option>
                                            <option value="bundle" <?php if ($record->suppUnit == "bundle") echo 'selected' ?>>bundle</option>
                                            <option value="pack" <?php if ($record->suppUnit == "pack") echo 'selected' ?>>pack</option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="mb-3 col-md-5">
                                    <label  class="form-label">Category <small class="text-danger">*</small></label>
                                    <select name="ctgryID" id="ctgryID" class="form-control">
                                        <option value=""></option>
                                        <?php foreach ($ctgry as $caty) { ?>
                                            <option value="<?php echo $caty->ctgryID ?>" <?php if ($record->ctgryID == $caty->ctgryID) echo 'selected' ?>><?php echo $caty->ctgryName ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="mt-2">
                                <button type="submit" class="btn btn-success me-2">Update</button>
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
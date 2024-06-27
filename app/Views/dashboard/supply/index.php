<div class="content-wrapper">
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row mb-2">
            <div class="col-6">
                <h4 class="fw-bold">Item Supply</h4>
            </div>
            <div class="col-6 text-end ">
                <a href="<?php echo $current_page . '/create/' ?>" class="btn btn-warning"><i class='bx bx-plus-medical me-3'></i>Add</a>
            </div>
        </div>
        <!-- Hoverable Table rows -->
        <div class="card">
            <h5 class="card-header"></h5>
            <div class="table-responsive text-nowrap p-3">
                <table class="table table-hover table-strip" id="myTable">
                    <thead>
                        <tr>
                            <th class="text-center">Item ID</th>
                            <th class="text-center">Item Description</th>
                            <th class="text-center">Item Size</th>
                            <th class="text-center">Item Quantity</th>
                            <th class="text-center">Item Unit</th>
                            <th class="text-center">Item Catergory</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        <?php foreach ($record as $rec) {  ?>
                            <tr>
                                <td class="text-center">
                                    <?php echo $rec->suppID ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $rec->suppName ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $rec->suppSize ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $rec->suppQuan ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $rec->suppUnit ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $rec->ctgryName ?>
                                </td>
                                <td class="text-center">
                                <a href="<?php echo $current_page . '/edit/' . $rec->suppID ?>" class="btn btn-success">Edit</a> 
                                <a href="<?php echo $current_page . '/delete/' . $rec->suppID ?>" onclick="return confirm('Are you sure you want to Delete this record?')" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
        <!--/ Hoverable Table rows -->
    </div>
    <!-- / Content -->
    <script>
        let table = new DataTable('#myTable');

        function view_here(id) {
            location.href = '<?php echo $current_page . "/view/" ?>' + id;
        }
    </script>
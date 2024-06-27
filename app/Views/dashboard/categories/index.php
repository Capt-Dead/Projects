<div class="content-wrapper">
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row mb-2">
            <div class="col-6"> 
                <h4 class="fw-bold">Category Supply</h4>
            </div>
            <div class="col-6 text-end">
                <a href="<?php echo $current_page . '/create/' ?>" class="btn btn-warning"><i class='bx bx-plus-medical me-3'></i>Add</a>
            </div>
        </div>
        <!-- Hoverable Table rows -->
        <div class="card">
            <h5 class="card-header"></h5>
            <div class="table-responsive text-nowrap p-4">
                <table class="table table-hover table-striped" id="myTable">
                    <thead>
                        <tr>
                            <th class="text-center">Category ID</th>
                            <th class="text-center">Category Names</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        <?php foreach ($record as $rec) {  ?>
                            <tr <?php echo  $rec->ctgryID ?>>
                                <td class="text-center">
                                    <?php echo $rec->ctgryID ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $rec->ctgryName ?>
                                </td>
                                <td class="text-center">
                                <a href="<?php echo $current_page . '/edit/' . $rec->ctgryID ?>" class="btn btn-success">Edit</a> 
                                <a href="<?php echo $current_page . '/delete/' . $rec->ctgryID ?>" onclick="return confirm('Are you sure you want to Delete this record?')" class="btn btn-danger">Delete</a>
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
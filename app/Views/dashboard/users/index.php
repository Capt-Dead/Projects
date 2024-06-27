<div class="content-wrapper">
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row mb-2">
            <div class="col-6">
                <h4 class="fw-bold">User List</h4>
            </div>
            <div class="col-6 text-end">
                <a href="<?php echo $current_page . '/create/' ?>" class="btn btn-primary"><i class='bx bx-plus-medical me-3'></i>Add Users</a>
            </div>
        </div>

        <!-- Hoverable Table rows -->
        <div class="card">
            <div class="table-responsive text-nowrap p-4">
                <table class="table table-hover table-striped" id="myTable">
                    <thead>
                        <tr>
                            <th class="text-center">Name</th>
                            <th class="text-center">Privilege</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        <?php foreach ($record as $rec) {  ?>
                            <tr onclick="view_here('<?php echo  $rec->userID ?>')">
                                <td class="text-center"><?php echo ucfirst($rec->lastname) . ' ' .  ucfirst($rec->firstname) ?></td>
                                <?php if ($rec->isAdmin == 1) { ?>
                                    <td class="text-center">Admin</td>
                                <?php } else { ?>
                                    <td class="text-center">User</td>
                                <?php } ?>

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
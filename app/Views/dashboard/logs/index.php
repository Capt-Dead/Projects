<div class="content-wrapper">
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row mb-2">
            <div class="col-6">
                <h4 class="fw-bold">User logs</h4>
            </div>
        </div>
        <!-- Hoverable Table rows -->
        <div class="card">
            <h5 class="card-header"></h5>
            <div class="table-responsive text-nowrap p-4">
                <table class="table table-hover table-strip" id="myTable">
                    <thead>
                        <tr>
                            <th class="text-center">Date</th>
                            <th class="text-center">Added</th>
                            <th class="text-center">Username</th>
                            <th class="text-center">Date Log</th>
                        </tr>
                    </thead>
                    
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
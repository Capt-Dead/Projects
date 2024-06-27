<div class="content-wrapper">
    <!-- Content -->
    <div class="container-sm container-p-y" >
        <div class="row mb-2">
                <div class="col-8">
                    <h4 class="fw-bold">Dashboard</h4>
                </div>
            </div>   
        <div class="row mb-3 justify-content-center">
        <div class="card col-3" >
            <div class="card-body">
                <a href="<?php echo base_url('categories')?>" class="app-brand-link">
                    <div class="demo menu-text ms-2 col-8 text-start ">
                        <h1><?php echo $categories ?><br></h1> 
                        <h6>Supply Categories</h6>
                    </div>  
                    <img src="<?php echo base_url() ?>/assets/slack.png" alt="" style="width: 30%" class="mx-3">
                </a>
            </div>
        </div>
        <div class="card col-3 mx-5" >
            <div class="card-body">
                <a href="<?php echo base_url('supply')?>" class="app-brand-link">
                    <div class="demo menu-text ms-2 col-8 text-start ">
                        <h1><?php echo $supply ?><br></h1> 
                        <h6>Supplies</h6>
                    </div>  
                    <img src="<?php echo base_url() ?>/assets/slack.png" alt="" style="width: 30%" class="mx-3">
                </a>
            </div>
        </div>
        <div class="card col-3" >
            <div class="card-body">
                <a href="<?php echo base_url('users')?>" class="app-brand-link">
                    <div class="demo menu-text ms-2 col-8 text-start ">
                        <h1><?php echo $users ?><br></h1> 
                        <h6>Users</h6>
                    </div>  
                    <img src="<?php echo base_url() ?>/assets/slack.png" alt="" style="width: 30%" class="mx-3">
                </a>
            </div>
        </div>
    </div>

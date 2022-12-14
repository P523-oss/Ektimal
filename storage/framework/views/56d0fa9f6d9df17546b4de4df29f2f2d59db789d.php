<?php echo $__env->make('template.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('template.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container-fluid" style="padding-top:15px;">
		    	<div class="row">
					<div class="col-xl-6 col-md-3">
					<a href="<?php echo e(url('manager/employee')); ?>"> 
			            <div class="card mini-stat bg-primary">
			                <div class="card-body mini-stat-img">
			                    <div class="mini-stat-icon">
			                        <!-- <i class="mdi mdi-cube-outline float-right"></i> -->
			                        <i class="mdi mdi-account-multiple float-right"></i>
			                    </div>
			                    <div class="text-white">
			                        <h6 class="text-uppercase mb-3">Manage User</h6>
			                        <h4 class="mb-4"><?php echo e(isset($total_employee[0]->user_num) ? $total_employee[0]->user_num:'0'); ?></h4>
			                        <!-- <span class="badge badge-info"> +11% </span> <span class="ml-2">From previous period</span> -->
			                    </div>
			                </div>
			            </div>
			        </a>
			        </div>
			        <div class="col-xl-6 col-md-3">
			        <a href="<?php echo e(url('manager/objective')); ?>"> 
			            <div class="card mini-stat bg-primary">
			                <div class="card-body mini-stat-img">
			                    <div class="mini-stat-icon">
			                        <i class="mdi mdi-buffer float-right"></i>
			                    </div>
			                    <div class="text-white">
			                        <h6 class="text-uppercase mb-3">Manage Objective</h6>
			                        <h4 class="mb-4"><?php echo e(isset($total_objective[0]->objective_num) ? $total_objective[0]->objective_num:'0'); ?></h4>
			                        <!-- <span class="badge badge-info"> +11% </span> <span class="ml-2">From previous period</span> -->
			                    </div>
			                </div>
			            </div>
			        </a>
			        </div>
			    </div>
			    <div class="row">
			        <div class="col-xl-6 col-md-3">
			        <a href="<?php echo e(url('manager/assign')); ?>"> 
			            <div class="card mini-stat bg-primary">
			                <div class="card-body mini-stat-img">
			                    <div class="mini-stat-icon">
			                        <i class="mdi mdi-table-edit float-right"></i>
			                    </div>
			                    <div class="text-white">
			                        <h6 class="text-uppercase mb-3">Performance</h6>
			                        <h4 class="mb-4"></h4>
			                        <!-- <span class="badge badge-info"> +11% </span> <span class="ml-2">From previous period</span> -->
			                    </div>
			                </div>
			            </div>
			        </a>
			        </div>
			    </div>
		    </div>


    </div> <!-- content -->

    
    

<!-- ============================================================== -->
<!-- End Right content here -->
<!-- ============================================================== -->


<?php echo $__env->make('template.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>  

<script type="text/javascript">
	var e='<?php echo e(Session::get('eval_date_error')); ?>';
  if(e !=''){
    Swal.fire(e);
  }
</script>
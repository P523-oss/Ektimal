            <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">
                <div class="slimscroll-menu" id="remove-scroll">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu" id="side-menu">
                           
                            <!-- Super Admin -->
                            <?php if(Session::get('user')['role'] == "superadmin"): ?> 
                            <li>
                                <a href="<?php echo e(url('superadmin')); ?>" class="waves-effect <?php echo e(Session::get('nav') =='dashboard' ? 'active':''); ?>">
                                    <i class="mdi mdi-view-dashboard "></i><span> Dashboard </span>
                                </a>
                            </li> 
                            <li>
                                <a href="<?php echo e(url('superadmin/profile')); ?>" class="waves-effect <?php echo e(Session::get('nav') =='profile' ? 'active':''); ?>">
                                    <i class="mdi mdi-calendar-check"></i><span> Manage Admin </span>
                                </a>
                            </li>
                            
                            <li>
                                <a href="<?php echo e(url('superadmin/membership')); ?>" class="waves-effect <?php echo e(Session::get('nav') =='membership' ? 'active':''); ?>">
                                    <i class="mdi mdi-calendar-check"></i><span> Manage Membership </span>
                                </a>
                            </li>
                            <?php endif; ?>
                            <?php if(Session::get('user')['role'] == "admin"): ?>  
                            <li>
                                <a href="<?php echo e(url('admin')); ?>" class="waves-effect <?php echo e(Session::get('nav') =='dashboard' ? 'active':''); ?>">
                                    <i class="mdi mdi-view-dashboard "></i><span> Dashboard </span>
                                </a>
                            </li>
                            <li >
                                <a href="<?php echo e(url('admin/manager')); ?>" class="waves-effect <?php echo e(Session::get('nav') =='user/manager' ? 'active':''); ?>">
                                    <i class="mdi mdi-account-multiple"></i><span> Manage User </span>
                                </a>
                            </li>
                            <li >
                                <a href="<?php echo e(url('admin/objective')); ?>" class="waves-effect <?php echo e(Session::get('nav') =='objective' ? 'active':''); ?>">
                                    <i class="mdi mdi-buffer"></i><span> Manage Objectives </span>
                                </a>
                            </li>
                            <li >
                                <a href="<?php echo e(url('admin/kpi')); ?>" class="waves-effect <?php echo e(Session::get('nav') =='kpi' ? 'active':''); ?>">
                                    <i class="mdi mdi-google-pages"></i><span> Manage KPIs </span>
                                </a>
                            </li>

                            <li class= "<?php echo e(Session::get('nav') =='setting' ? 'active':''); ?>">
                                <a href="javascript:void(0);" class="waves-effect <?php echo e(Session::get('nav') =='setting' ? 'active':''); ?>">
                                    <i class="mdi mdi-settings"></i>
                                    <span> Goal Settings <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span>
                                </a>
                                <ul class="submenu">
                                    
                                    <li class="<?php echo e(Session::get('nav') =='setting' && Session::get('sub_nav') =='rating_machanism' ? 'active':''); ?>"><a href="<?php echo e(url('admin/rating_mechanism')); ?>">Performance rating mechanism</a></li>
                                    <li class="<?php echo e(Session::get('nav') =='setting' && Session::get('sub_nav') =='force' ? 'active':''); ?>"><a href="<?php echo e(url('admin/force_ranking')); ?>">Force Ranking</a></li>
                                    <li class="<?php echo e(Session::get('nav') =='setting' && Session::get('sub_nav') =='grade' ? 'active':''); ?>"><a href="<?php echo e(url('admin/manage_grade')); ?>">Manage Grade</a></li>
                                    <li class="<?php echo e(Session::get('nav') =='setting' && Session::get('sub_nav') =='bonus' ? 'active':''); ?>"><a href="<?php echo e(url('admin/bonus_review')); ?>">Bonus review</a></li>
                                    <li class="<?php echo e(Session::get('nav') =='setting' && Session::get('sub_nav') =='increase' ? 'active':''); ?>"><a href="<?php echo e(url('admin/increase_review')); ?>">Pay increase review</a></li>
                                    <li class="<?php echo e(Session::get('nav') =='setting' && Session::get('sub_nav') =='percent' ? 'active':''); ?>"><a href="<?php echo e(url('admin/percent')); ?>">Department and individual achievements percent</a></li>
                                    <li class="<?php echo e(Session::get('nav') =='setting' && Session::get('sub_nav') =='cutedate' ? 'active':''); ?>"><a href="<?php echo e(url('admin/cute_date')); ?>">Manage Cute date</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="<?php echo e(url('admin/schedule')); ?>" class="waves-effect <?php echo e(Session::get('nav') =='schedule' ? 'active':''); ?>">
                                    <i class="mdi mdi-calendar-clock"></i><span> Evaluation Schedule </span>
                                </a>
                            </li>
                            <li  class= "<?php echo e(Session::get('nav') =='performance' ? 'active':''); ?>">
                                <a href="javascript:void(0);" class="waves-effect <?php echo e(Session::get('nav') =='performance' ? 'active':''); ?>">
                                    <i class="mdi mdi-table-edit"></i>
                                    <span> Performance  <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span>
                                </a>
                                <ul class="submenu">
                                    <li class="<?php echo e(Session::get('nav') =='performance' && Session::get('sub_nav') =='assign' ? 'active':''); ?>"><a href="<?php echo e(url('admin/assign')); ?>">Assign Objectives</a></li>
                                    <!-- Admin, Manager, Employee -->
                                    <li class="<?php echo e(Session::get('nav') =='performance' && Session::get('sub_nav') =='evaluation' ? 'active':''); ?>"><a href="<?php echo e(url('admin/evaluation')); ?>">Evaluate Performance</a></li>
                                    <!-- Admin -->
                                    <li class="<?php echo e(Session::get('nav') =='performance' && Session::get('sub_nav') =='report' ? 'active':''); ?>"><a href="<?php echo e(url('admin/report')); ?>">Report</a></li>
                                </ul>
                            </li>
                            <?php endif; ?>
                            <?php if(Session::get('user')['role'] == "manager"): ?>  
                            <li>
                                <a href="<?php echo e(url('manager')); ?>" class="waves-effect <?php echo e(Session::get('nav') =='manager/dashboard' ? 'active':''); ?>">
                                    <i class="mdi mdi-view-dashboard "></i><span> Dashboard </span>
                                </a>
                            </li>
                            <!-- <li >
                                <a href="<?php echo e(url('manager/employee')); ?>" class="waves-effect <?php echo e(Session::get('nav') =='user/employee' ? 'active':''); ?>">
                                    <i class="mdi mdi-account-multiple"></i><span> Manage User </span>
                                </a>
                            </li> -->
                            <li class= "<?php echo e(Session::get('nav') =='setting' ? 'active':''); ?>">
                                <a href="javascript:void(0);" class="waves-effect <?php echo e(Session::get('nav') =='setting' ? 'active':''); ?>">
                                    <i class="mdi mdi-settings"></i>
                                    <span> Goal Settings <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span>
                                </a>
                                <ul class="submenu">
                                    <li class="<?php echo e(Session::get('nav') =='setting' && Session::get('sub_nav') =='objective' ? 'active':''); ?>"><a href="<?php echo e(url('manager/objective')); ?>" >Manage Objectives</a></li>
                                    <li class="<?php echo e(Session::get('nav') =='setting' && Session::get('sub_nav') =='kpi' ? 'active':''); ?>"><a href="<?php echo e(url('manager/kpi')); ?>">Manage KPI</a></li>
                                </ul>
                            </li>
                            <li  class= "<?php echo e(Session::get('nav') =='performance' ? 'active':''); ?>">
                                <a href="javascript:void(0);" class="waves-effect <?php echo e(Session::get('nav') =='performance' ? 'active':''); ?>">
                                    <i class="mdi mdi-table-edit"></i>
                                    <span> Performance  <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span>
                                </a>
                                <ul class="submenu">
                                    <li class="<?php echo e(Session::get('nav') =='performance' && Session::get('sub_nav') =='assign' ? 'active':''); ?>"><a href="<?php echo e(url('manager/assign')); ?>">Assign Objectives</a></li>
                                    <!-- Admin, Manager, Employee -->
                                    <li class="<?php echo e(Session::get('nav') =='performance' && Session::get('sub_nav') =='evaluation' ? 'active':''); ?>"><a href="<?php echo e(url('manager/evaluation')); ?>">Evaluate Performance</a></li>
                                </ul>
                            </li>
                            <?php endif; ?>
                            <?php if(Session::get('user')['role'] == "employee"): ?>  
                            <li >
                                <a href="<?php echo e(url('employee')); ?>" class="waves-effect active">
                                    <i class="mdi mdi-chevron-right"></i><span> Evaluate Performance </span>
                                </a>
                            </li>
                            <?php endif; ?>

                        </ul>
                    </div>
                    <!-- Sidebar -->
                    <div class="clearfix"></div>
                </div>
                <!-- Sidebar -left -->
            </div>
            <!-- Left Sidebar End -->
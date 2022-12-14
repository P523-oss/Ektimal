<?php echo $__env->make('template.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('template.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-page">
                <!-- Start content -->
   <div class="content">
        <div class="container-fluid" style="padding-top:15px;">

            <div class="row">
                <div class="col-12">
                    <div class="card m-b-20">
                        <div class="card-body">
                            <div class="" style="padding:25px;">
                                <h4 class="mt-0 header-title" style="display:inline-block">Evaluation Performance</h4>
                            </div>
                            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 10; width: 100%;">
                            </table>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->
        </div> <!-- container-fluid -->
    </div> <!-- content -->
   
<!-- /.content-wrapper -->
<?php echo $__env->make('template.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>  
<script>
    var $table = $('#datatable');
    $(document).ready(function() {
        var datatable = $table.dataTable({
            "ordering": false,
            "info": true,
            "searching": true,
            "ajax": {
                "type": "POST",
                "async": true,
                "url": '<?php echo e(url("/admin/evaluation_list")); ?>',
                "data": {},
                "dataSrc": "data",
                "dataType": "json",
                "cache": false,
            },
            "columnDefs": [
                {
                        "targets": [0],
                        orderable: false,

                        "createdCell": function (td, cellData, rowData, row, col) {
                            if(rowData.has_sub==1){
                                $(td).html('<i data-toggle class="far fa-plus-square text-primary h5 m-0" style="cursor: pointer;"></i>');
                            }else if(rowData.has_sub==0) $(td).html('<i class="far fa-minus-square text-primary h5 m-0" style="cursor: pointer;"></i>');
                            else $(td).html('');
                       }
                    },
                    {
                    "targets": [3],
                    orderable: true,
                    "createdCell": function (td, cellData, rowData, row, col) {
                        var str = cellData;
                        if(str != null && str.length>20){
                            str=str.slice(0, 20);
                        }
                        $(td).html(str);
                        
                    }
                },{
                "targets": [5],
                orderable: true,
                "createdCell": function (td, cellData, rowData, row, col) {
                    html= '';
                    if(cellData=='num'){
                        html= 'Number';
                    } else if(cellData == 'percent')  {
                        html= 'Percent';
                    } else if(cellData == 'both'){
                        html= 'Both';
                    }
                    $(td).html(html);
                }
            },{
                    "targets": [6],
                    orderable: true,
                    "createdCell": function (td, cellData, rowData, row, col) {
                        if(rowData.target_type == 'percent'){
                            if(cellData == '' || cellData == null ){
                                html= '0 %';
                            }else
                            html= cellData + ' %';
                        } else html= cellData;
                        $(td).html(html);
                    }
                },{
                    "targets": [7],
                    orderable: true,
                    "createdCell": function (td, cellData, rowData, row, col) {
                        if(rowData.target_type == 'percent'){
                            if(cellData == '' || cellData == null ){
                                html= '0 %';
                            }else
                            html= cellData + ' %';
                        } else html= cellData;
                        $(td).html(html);
                    }
                },{
                    "targets": [8],
                    orderable: true,
                    "createdCell": function (td, cellData, rowData, row, col) {
                        html= cellData + ' %';
                        $(td).html(html);
                        
                    }
                },
                {
                "targets": [9],
                orderable: false,
                "createdCell": function (td, cellData, rowData, row, col) {
                    if(rowData.eval_date !='no'){
                        if(rowData.manager_id == 0 && rowData.employee_id == 0){
                            if(rowData.status==2){
                                html = '<a href="<?php echo e(url('admin/edit_evaluation/')); ?>/'+cellData+'"><input class="btn btn-info" type="button" value="ReEvaluate"></a>'
                            }else{
                                html = '<a href="<?php echo e(url('admin/edit_evaluation/')); ?>/'+cellData+'"><input class="btn btn-info" type="button" value="Evaluate"></a>'
                            }
                        }else{
                            if(rowData.status==2){
                                html = '<a href="<?php echo e(url('admin/edit_evaluation/')); ?>/'+cellData+'"><input class="btn btn-info" type="button" value="ReEvaluate"></a>'
                            }else if(rowData.status==1){
                                html = '<a href="<?php echo e(url('admin/edit_evaluation/')); ?>/'+cellData+'"><input class="btn btn-info" type="button" value="Evaluate"></a>'
                            }else{
                                // html = '<input class="btn btn-secondary waves-effect" type="button" value="Evaluate">'
                                html = '<a href="<?php echo e(url('admin/edit_evaluation/')); ?>/'+cellData+'"><input class="btn btn-info" type="button" value="Evaluate"></a>'
                            }
                            
                        }
                        
                    }else {
                        html = '<input class="btn btn-secondary waves-effect" type="button" value="Evaluate">'
                    }
                    $(td).html(html);
                }
            }],

            "columns": [
                {"title": "No", "data": "id", "class": "text-center", "width": "5%"},
                {"title": "Type", "data": "type", "class": "text-center", "width": "*"},
                {"title": "Objective", "data": "name", "class": "text-center", "width": "*"},
                {"title": "Target Description", "data": "descript_target", "class": "text-center", "width": "*"},
                {"title": "Date to Completion", "data": "completion_date", "class": "text-center", "width": "*"},
                {"title": "Target Type", "data": "target_type", "class": "text-center", "width": "*"},
                {"title": "Target", "data": "target", "class": "text-center", "width": "*"},
                {"title": "Actual Achived", "data": "actual_achived", "class": "text-center", "width": "*"},
                {"title": "Weights", "data": "weights", "class": "text-center", "width": "*"},
                {"title": "Action", "data": "obj_id", "class": "text-center", "width": "10%"},
            ],
            "lengthMenu": [
                [5, 10, 20, 50, 150, -1],
                [5, 10, 20, 50, 150, "All"] // change per page values here
            ],
            "scrollY": false,
            "scrollX": true,
            "scrollCollapse": false,
            "jQueryUI": true,
            "paging": true,
            "pagingType": "full_numbers",
            "pageLength": 20, // default record count per page
            bProcessing: true,
            autoWidth: true,
        });

        setTimeout(function () {
            var $table = $('#datatable');
            $table.find( 'tbody tr' ).each(function() {
                var objective=datatable.fnGetData( this );
                if(objective.is_sub==1)
                    $(this).css({"display": "none"});
            });
        },500)
        

        var datatableInit = function() {
            var $table = $('#datatable');

            $table.on('click', 'i[data-toggle]', function() {


                var $this = $(this),
                    tr = $(this).closest( 'tr' ).get(0);
                    var main=datatable.fnGetData(tr);
                if ($this.hasClass('fa-minus-square')) {
                    $this.removeClass( 'fa-minus-square' ).addClass( 'fa-plus-square' );
                    $table.find( 'tbody tr' ).each(function() {
                        var sub=datatable.fnGetData( this );
                        if(sub.parent_id==main.obj_id)
                            $(this).css({"display": "none"});
                    });
                } else {
                    $this.removeClass( 'fa-plus-square' ).addClass( 'fa-minus-square' );
                    
                    $table.find( 'tbody tr' ).each(function() {
                        var sub=datatable.fnGetData( this );
                        if(sub.parent_id==main.obj_id)
                            $(this).css({"display": ""});
                    });
                }
            });
        };

        $(function() {
            datatableInit();
        });
    });

        
</script>
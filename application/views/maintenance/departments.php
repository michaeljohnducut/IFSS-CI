<div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                         <h4 class="page-title">Manage Departments</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="#">Maintenance</a></li>
                            <li class="active">Departments</li>
                        </ol>
                    </div>
                
                </div>
            <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">          
                    <div class="col-sm-12">                            
                            <!-- <div class="row">
                                <div class="col-md-10">
                                    <h2>Lists of Departments</h2>
                                </div>
                            </div> -->
                            <h3 class="box-title m-b-0">Legend:</h3>
                            <div class="row" style="margin-left: 20px; margin-top: 5px;">
                                <div class="col-md-2">
                                    <button class="btn btn-success"><span class="fa fa-pencil"></span></button>&nbsp;
                                    <label style="margin-top: 5px;">Edit Department</label>
                                </div>
                                <!-- <div class="col-md-2">
                                    <button class="btn btn-danger"><span class="fa fa-trash"></span></button>&nbsp;
                                    <label style="margin-top: 5px;">Delete Department</label>
                                </div> -->
                            </div>
                            <br>

                            <div class="table-responsive">
                                <table id="dept-table" class="table colored-table inverse-tabl table-striped" >
                                    <thead>
                                        <tr>
                                            <th width="400px;">Department Code</th>
                                            <th>Department Name</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                     <tbody>
                                          
                                    </tbody>
                                </table>

                            </div>
                            
                            <div class="row">
                                <div class="col-md-3">
                                    <button type="button" class="btn btn-info" data-toggle = "modal" data-target ="#modalNewDept">Add Department</button>
                                </div>
                                
                            </div>
                        </div>
                    </div>


              
                <!-- /.row -->
                <!-- .right-sidebar -->
               
            </div>
        </div>

    <a data-toggle="modal" href="#modalEditDept" id="openMod"></a>

    <div class="modal fade bs-example-modal-lg" id="modalNewDept" tabindex="-1" role="dialog" aria-labelledby="modalNewDept" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h4 class="modal-title">Add a New Department</h4>
                                        </div>
                                        <div  class="col-md-12" style="background-color: gray; height: 3px; margin-top: -5px;">

                                        </div>
                                        <div class="modal-body">
                                            <form id="add_dept_form" method="POST" enctype="multipart/form-data">
                                                <div class="form-group col-md-6">
                                                    <label class="control-label">Department Code:</label>
                                                    <input class="form-control" type="text" id="dept_code" name="dept_code" pattern="[A-Z]{1,}" title="Capital letters only." required>
                                                </div>
                                                <div class="form-group col-md-6">
                                                        <label class="control-label">Department Name:</label>
                                                        <input class="form-control" type="text" id="dept_desc" name="dept_desc" pattern="[A-Za-z\s]{1,}" title="Characters only." required>
                                                </div>
                                            
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" onclick="resetForm1()">Clear</button>
                                                <button type="submit" name="btnAddDept" id="btnAddDept" class="btn btn-success waves-effect text-left">Save</button>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>

    <div class="modal fade bs-example-modal-lg" id="modalEditDept" tabindex="-1" role="dialog" aria-labelledby="modalEditDept" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h4 class="modal-title">Edit Department</h4>
                                        </div>
                                        <div  class="col-md-12" style="background-color: gray; height: 3px; margin-top: -5px;">

                                        </div>
                                        <div class="modal-body">
                                            <form id="edit_dept_form" method="POST" enctype="multipart/form-data">
                                                <div class="form-group col-md-6">
                                                    <label class="control-label">Department Code:</label>
                                                    <input class="form-control" type="text" id="edit_dept_code" name="edit_dept_code" pattern="[A-Z]{1,}" title="Capital letters only." required>
                                                </div>
                                                <div class="form-group col-md-6">
                                                        <label class="control-label">Course Name:</label>
                                                        <input class="form-control" type="text" id="edit_dept_desc" name="edit_dept_desc" pattern="[A-Za-z\s]{1,}" title="Characters only." required>
                                                </div>
                                                <input type="hidden" name="dept_id_hid" id="dept_id_hid" />
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" onclick="resetForm2()">Clear</button>
                                                <button type="submit" name="btnEditDept" id="btnEditDept" class="btn btn-success waves-effect text-left">Save</button>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>

    <script src="<?php echo base_url(); ?>assets/plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/bower_components/datatables/jquery.dataTables.min.js"></script>

    <!-- Ito ung inidagdag ko para sa may alert animation at ung nasa ajax part kasama nito ung mga title chuchu -->
    <script src="<?php echo base_url(); ?>assets/js/sweetalert.min.js"></script>

    <!-- BOOTSTRAP SELECT -->
    <script src="<?php echo base_url(); ?>assets/plugins/bower_components/bootstrap-select/bootstrap-select.min.js" type="text/javascript"></script>

    <!-- CUSTOM SELECT -->
    <script src="<?php echo base_url(); ?>assets/plugins/bower_components/custom-select/custom-select.min.js" type="text/javascript"></script>

    <script type="text/javascript">
        function resetForm1()
        {
            $('#add_dept_form')[0].reset();  
        }

        function resetForm2()
        {
            $('#edit_dept_form')[0].reset();
        }

        function loadtable()
        {
          $('#dept-table').dataTable().fnClearTable();
          $('#dept-table').dataTable().fnDraw();
          $('#dept-table').dataTable().fnDestroy();
          $('#dept-table').dataTable({
              "processing": true,
              "serverSide": false,
              "sAjaxSource": "<?php echo base_url('Maintenance/get_departments')?>",
              "deferLoading": 10,
              "bPaginate": true,
              "aaSorting": [[0,'asc']],
              "fnInitComplete": function(){
                        
              }
          });
        }

        $(document).ready(function(){
            loadtable();

            $('#add_dept_form').on("submit", function(event)
            {  
                event.preventDefault();  
                $.ajax({  
                url:"<?php echo base_url('Maintenance/add_departments')?>",  
                method:"POST",  
                data:$('#add_dept_form').serialize(),
                success:function(data)
                { 
                    if(data == 'INSERTED')
                    {
                        swal("Added!", "The department is added.", "success");
                        $('#add_dept_form')[0].reset();  
                        $('#modalNewDept').modal('hide');
                        $('#dept-table').DataTable().destroy();
                        loadtable();
                    }

                    if(data == 'NOT INSERTED')
                    {
                        swal("Not Added!", "Something blew up.", "error");
                        $('#add_dept_form')[0].reset();
                        $('#dept-table').DataTable().destroy();
                        loadtable();
                    }

                    if(data == 'THE DATA IS ALREADY INSERTED')
                    {
                        swal("Not Added!", "The data is already inserted.", "error");
                        $('#add_dept_form')[0].reset();
                        $('#dept-table').DataTable().destroy();
                        loadtable();
                    }   
                }
                });  
            });


            $(document).on('click', '#edit_data', function(e)
            {  
               e.preventDefault();
               var id = $(this).data("id");
               
               $.ajax({  
                    url:"<?php echo base_url('Maintenance/view_departments')?>", 
                    async: true,
                    method:"POST",  
                    data:{department_id:id},  
                    dataType: "json",
                    cache: false,
                    success:function(data){  
                         $('#edit_dept_code').val(data[0][1]);
                         $('#edit_dept_desc').val(data[0][2]);
                         $('#dept_id_hid').val(data[0][0]);
                         $('#openMod').trigger('click');

                    },
                    error: function (data) {
                        alert(JSON.stringify(data));
                    }
               }); 
            });


            $('#edit_dept_form').on("submit", function(event)
            {  
                event.preventDefault();  
                $.ajax({  
                url:"<?php echo base_url('Maintenance/edit_departments')?>",  
                method:"POST",  
                data:$('#edit_dept_form').serialize(),
                success:function(data)
                {  
                    if(data == 'UPDATED')
                    {
                        swal("Updated!", "The department is updated.", "success");
                        $('#edit_dept_form')[0].reset();  
                        $('#modalEditDept').modal('hide');
                        $('#dept-table').DataTable().destroy();
                        loadtable();
                    }

                    if(data == 'NOT UPDATED')
                    {
                        swal("Not Updated!", "Something blew up.", "error");
                        $('#edit_dept_form')[0].reset();
                        $('#dept-table').DataTable().destroy();
                        loadtable();
                    }

                    if(data == 'THE DATA IS ALREADY INSERTED')
                    {
                        swal("Not Updated!", "The data is already inserted.", "error");
                        $('#modalEditDept').modal('hide');
                        $('#dept-table').DataTable().destroy();
                        loadtable();
                    }
                }
                });  
            });


        });


    </script>
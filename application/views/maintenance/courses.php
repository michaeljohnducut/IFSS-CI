<div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                         <h4 class="page-title">Manage Courses</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="#">Maintenance</a></li>
                            <li class="active">Courses</li>
                        </ol>
                    </div>
                
                </div>
            <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">          
                    <div class="col-sm-12">                            
                            <div class="row">
                                <div class="col-md-10">
                                    <h2>Lists of Courses</h2>
                                </div>
                            </div>
                            <h3 class="box-title m-b-0">Legend:</h3>
                            <div class="row" style="margin-left: 20px; margin-top: 5px;">
                                <div class="col-md-2">
                                    <button class="btn btn-success"><span class="fa fa-pencil"></span></button>&nbsp;
                                    <label style="margin-top: 5px;">Edit Course</label>
                                </div>
                                <!-- <div class="col-md-2">
                                    <button class="btn btn-danger"><span class="fa fa-trash"></span></button>&nbsp;
                                    <label style="margin-top: 5px;">Delete Department</label>
                                </div> -->
                            </div>
                            <br>

                            <div class="table-responsive">
                                <table id="course-table" class="table colored-table inverse-tabl table-striped" >
                                    <thead>
                                        <tr>
                                            <th>Department</th>
                                            <th>Course Code</th>
                                            <th width="400px;">Course Name</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                     <tbody>
                                          
                                    </tbody>
                                </table>

                            </div>
                            
                            <div class="row">
                                <div class="col-md-3">
                                    <button type="button" class="btn btn-info" data-toggle = "modal" data-target ="#modalNewCourse">Add Course</button>
                                </div>
                                
                            </div>
                        </div>
                    </div>


              
                <!-- /.row -->
                <!-- .right-sidebar -->
               
            </div>
        </div>

    <a data-toggle="modal" href="#modalEditCourse" id="openMod"></a>

    <div class="modal fade bs-example-modal-lg" id="modalNewCourse" tabindex="-1" role="dialog" aria-labelledby="modalNewCourse" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h4 class="modal-title">Add a New Course</h4>
                                        </div>
                                        <div  class="col-md-12" style="background-color: gray; height: 3px; margin-top: -5px;">

                                        </div>
                                        <div class="modal-body">
                                            <form id="add_course_form" method="POST" enctype="multipart/form-data">
                                                <div class="form-group col-md-2">
                                                    <label class="control-label">Course Code:</label>
                                                    <input class="form-control" type="text" id="course_code" name="course_code" pattern="[A-Z]{1,}" title="Capital letters only." required>
                                                </div>
                                                <div class="form-group col-md-6">
                                                        <label class="control-label">Course Name:</label>
                                                        <input class="form-control" type="text" id="course_desc" name="course_desc" pattern="[A-Za-z\s]{1,}" title="Characters only." required>
                                                </div>
                                                <div class="form-group col-md-4">
                                                        <label class="control-label">Department:</label>
                                                        <select class="form-control" id="course_dept" name="course_dept" required>
                                                        <option value="" disabled selected>--SELECT DEPARTMENT--</option>
                                                        <?php foreach($dept as $r) echo '<option value="'.$r[3].'">'.$r[0].'</option>';?>
                                                        </select>  
                                                </div>
                                            
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" onclick="resetForm1()">Clear</button>
                                                <button type="submit" name="btnAddCourse" id="btnAddCourse" class="btn btn-success waves-effect text-left">Save</button>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>

    <div class="modal fade bs-example-modal-lg" id="modalEditCourse" tabindex="-1" role="dialog" aria-labelledby="modalEditCourse" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h4 class="modal-title">Edit Course</h4>
                                        </div>
                                        <div  class="col-md-12" style="background-color: gray; height: 3px; margin-top: -5px;">

                                        </div>
                                        <div class="modal-body">
                                            <form id="edit_course_form" method="POST" enctype="multipart/form-data">
                                                <div class="form-group col-md-2">
                                                    <label class="control-label">Course Code:</label>
                                                    <input class="form-control" type="text" maxlength="4" id="edit_course_code" name="edit_course_code" pattern="[A-Z]{1,}" title="Capital letters only." required>
                                                </div>
                                                <div class="form-group col-md-6">
                                                        <label class="control-label">Course Name:</label>
                                                        <input class="form-control" type="text" id="edit_course_desc" name="edit_course_desc" pattern="[A-Za-z\s]{1,}" title="Characters only." required>
                                                </div>
                                                <div class="form-group col-md-4">
                                                        <label class="control-label">Department:</label>
                                                        <select class="form-control" id="edit_course_dept" name="edit_course_dept" required>
                                                        <option value="" disabled selected>--SELECT DEPARTMENT--</option>
                                                        <?php foreach($dept as $r) echo '<option value="'.$r[3].'">'.$r[0].'</option>';?>
                                                        </select>  
                                                </div>
                                                <input type="hidden" name="course_id_hid" id="course_id_hid" />
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" onclick="resetForm2()">Clear</button>
                                                <button type="submit" name="btnEditCourse" id="btnEditCourse" class="btn btn-success waves-effect text-left">Save</button>
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
            $('#add_course_form')[0].reset();  
        }

        function resetForm2()
        {
            $('#edit_course_form')[0].reset();
        }

        function loadtable()
        {
          $('#course-table').dataTable().fnClearTable();
          $('#course-table').dataTable().fnDraw();
          $('#course-table').dataTable().fnDestroy();
          $('#course-table').dataTable({
              "processing": true,
              "serverSide": false,
              "sAjaxSource": "<?php echo base_url('Maintenance/get_courses')?>",
              "deferLoading": 10,
              "bPaginate": true,
              "aaSorting": [[0,'asc']],
              "fnInitComplete": function(){
                        
              }
          });
        }

        $(document).ready(function(){
            loadtable();

            $('#add_course_form').on("submit", function(event)
            {  
                event.preventDefault();  
                $.ajax({  
                url:"<?php echo base_url('Maintenance/add_courses')?>",  
                method:"POST",  
                data:$('#add_course_form').serialize(),
                success:function(data)
                { 
                    if(data == 'INSERTED')
                    {
                        swal("Added!", "The course is added.", "success");
                        $('#add_course_form')[0].reset();  
                        $('#modalNewCourse').modal('hide');
                        $('#course-table').DataTable().destroy();
                        loadtable();
                    }

                    if(data == 'NOT INSERTED')
                    {
                        swal("Not Added!", "Something blew up.", "error");
                        $('#add_course_form')[0].reset();
                        $('#course-table').DataTable().destroy();
                        loadtable();
                    }

                    if(data == 'THE DATA IS ALREADY INSERTED')
                    {
                        swal("Not Added!", "The data is already inserted.", "error");
                        $('#add_course_form')[0].reset();
                        $('#course-table').DataTable().destroy();
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
                    url:"<?php echo base_url('Maintenance/view_courses')?>", 
                    async: true,
                    method:"POST",  
                    data:{course_id:id},  
                    dataType: "json",
                    cache: false,
                    success:function(data){  
                         $('#edit_course_code').val(data[0][1]);
                         $('#edit_course_desc').val(data[0][2]);
                         $('#course_id_hid').val(data[0][0]);
                         $('#edit_course_dept').val(data[0][3]);
                         $('#openMod').trigger('click');

                    },
                    error: function (data) {
                        alert(JSON.stringify(data));
                    }
               }); 
            });


            $('#edit_course_form').on("submit", function(event)
            {  
                event.preventDefault();  
                $.ajax({  
                url:"<?php echo base_url('Maintenance/edit_courses')?>",  
                method:"POST",  
                data:$('#edit_course_form').serialize(),
                success:function(data)
                {  
                    if(data == 'UPDATED')
                    {
                        swal("Updated!", "The course is updated.", "success");
                        $('#edit_course_form')[0].reset();  
                        $('#modalEditCourse').modal('hide');
                        $('#course-table').DataTable().destroy();
                        loadtable();
                    }

                    if(data == 'NOT UPDATED')
                    {
                        swal("Not Updated!", "Something blew up.", "error");
                        $('#edit_course_form')[0].reset();
                        $('#course-table').DataTable().destroy();
                        loadtable();
                    }

                    if(data == 'THE DATA IS ALREADY INSERTED')
                    {
                        swal("Not Updated!", "The data is already inserted.", "error");
                        $('#modalEditCourse').modal('hide');
                        $('#course-table').DataTable().destroy();
                        loadtable();
                    }
                }
                });  
            });


        });


    </script>
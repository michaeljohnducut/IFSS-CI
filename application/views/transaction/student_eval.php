<div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                         <h4 class="page-title">Student Evaluations</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="#">Transaction</a></li>
                            <li class="active">Student Evaluations</li>
                        </ol>
                    </div>
                
                </div>

            <div class="row">      
                <div class="col-sm-12">
                    <div class="white-box">
                          <div class="row">
                            <!-- <h2>Student Evaluation Breakdown</h2>
                            <div  class="col-md-12" style="background-color: gray; height: 3px; margin-top: -5px;">

                            </div> -->
                           <div class="col-md-12">
                                <h2>Search Filter</h2>
                            </div>
                                <div class="col-md-2">
                                <label class="control-label">Select A.Y.</label>
                                <select class="form-control" name="select_ay" id="select_ay">
                                    <option disabled selected>--ACADEMIC YEAR--</option>
                                    <?php foreach($acad_yr as $r) echo '<option value="'.$r[2].'">'.$r[0].'</option>';?>
                                </select>
                            </div>

                            <div class="col-md-2">
                                <label class="control-label">Select Semester</label>
                                <select class="form-control" name="select_sem" id="select_sem">
                                    <option disabled selected>--SEMESTER--</option>
                                    <option value="1st">1st</option>
                                    <option value="2nd">2nd</option>
                                    <option value="Summer">Summer</option>
                                </select>
                            </div>

                            <div class="col-md-2">
                                <label class="control-label">Select Department</label>
                                <select class="form-control" name="select_dept" id="select_dept">
                                    <option disabled selected>--DEPARTMENT--</option>
                                    <?php foreach($dept as $r) echo '<option value="'.$r[3].'">'.$r[0].'</option>';?>
                                </select>
                                <br><br>
                            </div>


                            <div  class="col-md-12" style="background-color: gray; height: 3px; margin-top: -5px;">

                            </div> 


                        </div>
    
                        <br><br>
                        <div class="table-responsive">
                            <table id="eval-table" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th style="width: 160px;">Academic Year</th>
                                        <th>Semester</th>
                                        <th>Department</th>
                                        <th style="width: 300px;">Faculty Name</th>
                                        <th>Rating</th>
                                        <th>Interpretation</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                </tbody>
                            </table>
                        </div>

                         <div class="row">
                            
                            <div class="col-md-1">
                                    <!-- <label class="col-sm-12">Import Student Evaluation</label> -->
                               <div class="col-md-1"> 
                                        <button type="button" class="btn btn-info" data-toggle = "modal" data-target ="#modalNewFile" style="margin-top: 10px; margin-left: 88%;">Add Student Evaluation</button>
                                 </div> 
                            </div>
                        </div>

            
                    </div>
                </div>
              
                <!-- /.row -->
                <!-- .right-sidebar -->
            </div>

            <div class="modal fade bs-example-modal-lg" id="modalNewFile" tabindex="-1" role="dialog" aria-labelledby="modalNewFile" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h4 class="modal-title">Add New Student Evaluation</h4>
                                        </div>
                                        <div  class="col-md-12" style="background-color: gray; height: 3px; margin-top: -5px;">
                                        </div>
                                        <div class="modal-body">
                                            <form id="add_eval_form" method="POST" enctype="multipart/form-data">
                                                <div class="form-group col-md-4">
                                                    <label class="control-label">For Acad. Year:</label>
                                                    <select class="form-control" name="acadyr" id="acadyr" required>
                                                            <option value ="" disabled selected>-SELECT-</option>
                                                           <?php foreach($acad_yr as $r) echo '<option value="'.$r[2].'">'.$r[0].'</option>';?>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label class="control-label">Semester:</label>
                                                    <select class="form-control" name="sem" id="sem" required>
                                                            <option value ="" disabled selected>-SELECT-</option>
                                                            <option value="1st">1st</option>
                                                            <option value="2nd">2nd</option>
                                                            <option value="Summer">Summer</option>
                                                    </select>    
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label class="control-label">Department:</label>
                                                        <select class="form-control" name="dept" id="dept" required>
                                                            <option value ="" disabled selected>-SELECT-</option>
                                                            <?php foreach($dept as $r) echo '<option value="'.$r[3].'">'.$r[0].'</option>';?>
                                                        </select>
                                                </div>
                                                <br>
                                                <div class="col-md-12">

                                                <div class="form-group col-md-10">
                                                    <label class="control-label">Add File:</label>
                                                    <div class="fileinput fileinput-new input-group" data-provides="fileinput" style="height: 20%">
                                                            <input class="dropify" type="file" name="file" id="file" accept=".xls, .xlsx" />
                                                      
                                                    </div>
                                                </div>
                                                 </div>
                                         </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" onclick="resetForm1()">Reset</button>
                                                <button type="submit" name="btnAddEval" id="btnAddEval
                                                " class="btn btn-success waves-effect text-left">Import Student Evaluation</button>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>

                            <a data-toggle="modal" href="#modalEditEval" id="openMod"></a>

                            <div class="modal fade bs-example-modal-lg" id="modalEditEval" tabindex="-1" role="dialog" aria-labelledby="modalEditEval" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h4 class="modal-title">Edit Student Evaluation</h4>
                                        </div>
                                        <div  class="col-md-12" style="background-color: gray; height: 3px; margin-top: -5px;">
                                        </div>
                                        <div class="modal-body modal-lg">
                                            <form id="edit_eval_form" method="POST" enctype="multipart/form-data">
                                                <div class="form-group col-md-4">
                                                    <label class="control-label">For Acad. Year:</label>
                                                    <select class="form-control" name="edit_acad" id="edit_acad" required>
                                                        <option value ="" disabled selected>-SELECT-</option>
                                                        <?php foreach($acad_yr as $r) echo '<option value="'.$r[2].'">'.$r[0].'</option>';?>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label class="control-label">Semester:</label>
                                                    <select class="form-control" name="edit_sem" id="edit_sem" required>
                                                            <option value ="" disabled selected>-SELECT-</option>
                                                            <option value="1st">1st</option>
                                                            <option value="2nd">2nd</option>
                                                            <option value="Summer">Summer</option>
                                                    </select>    
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label class="control-label">Department:</label>
                                                        <select class="form-control" name="edit_dept" id="edit_dept" required>
                                                            <option value ="" disabled selected>-SELECT-</option>
                                                            <?php foreach($dept as $r) echo '<option value="'.$r[3].'">'.$r[0].'</option>';?>
                                                        </select>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label class="control-label">Faculty Name:</label>
                                                       <select class="form-control" name="edit_fac" id="edit_fac" required>
                                                            <option value ="" disabled selected>-SELECT-</option>
                                                            <?php foreach($faculty as $r) echo '<option value="'.$r[8].'">'.$r[1].', '.$r[2].' '.$r[3].'</option>';?>
                                                        </select>
                                                </div>
                                                <div class="form-group col-md-2">
                                                        <label class="control-label">Rating:</label>
                                                        <input class="form-control" name="edit_rating" id="edit_rating" pattern="^(\d*\.)?\d+$" title="Numbers only." required>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label class="control-label">Interpretation:</label>
                                                    <select class="form-control" name="edit_inter" id="edit_inter" required>
                                                         <option value ="" disabled selected>-SELECT-</option>
                                                            <option value="OUTSTANDING">Outstanding</option>
                                                            <option value="VERY SATISFACTORY">Very Satisfactory</option>
                                                            <option value="SATISFACTORY">Satisfactory</option>
                                                            <option value="FAIR">Fair</option>
                                                            <option value="POOR">Poor</option>
                                                    </select>
                                                </div>
                                                <input type="hidden" name="eval_id" id="eval_id">
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" onclick="resetForm1()">Reset</button>
                                                <button type="submit" name="btnEditEval" id="btnEditEval" class="btn btn-success waves-effect text-left">Edit Evaluation</button>
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

    <!-- jQuery file upload -->
    <script src="<?php echo base_url(); ?>assets/plugins/bower_components/dropify/dist/js/dropify.min.js"></script>

    <script type="text/javascript">
        //File Upload
        $('.dropify').dropify();

        function resetForm1()
        {
            $('#add_eval_form')[0].reset();  
        }

        function loadtable()
        {
          $('#eval-table').dataTable().fnClearTable();
          $('#eval-table').dataTable().fnDraw();
          $('#eval-table').dataTable().fnDestroy();
          $('#eval-table').dataTable({
              "processing": true,
              "serverSide": false,
              "sAjaxSource": "<?php echo base_url('Transaction/get_stud_eval')?>",
              "deferLoading": 10,
              "bPaginate": true,
              "aaSorting": [[0,'desc']],
              "fnInitComplete": function(){
                        
              }
          });
        }

         function fetch_data(ay_temp, sem_temp, dept_temp)
        {
            $('#eval-table').dataTable().fnClearTable();
            $('#eval-table').dataTable().fnDraw();
            $('#eval-table').dataTable().fnDestroy();
            $('#eval-table').DataTable({           
                "processing" : true,
                "serverSide" : false,
                "order" : [],
                "ajax" : {
                    url:"<?php echo base_url('Transaction/get_evals')?>",
                    data:{ay:ay_temp, sem:sem_temp, dept:dept_temp},
                    type:"POST"
                }
            });
        }

        $(document).ready(function(){
            loadtable();

            $('#add_eval_form').on('submit', function(event){
                event.preventDefault();
                $.ajax({
                    url:"<?php echo base_url('Transaction/student_import')?>",
                    method:"POST",
                    data:new FormData(this),
                    contentType:false,
                    cache:false,
                    processData:false,
                    success:function(data){
                        if(data == 'INSERTED')
                        {
                            swal("Added!", "Student evaluation is imported.", "success");
                            $('#add_eval_form')[0].reset();  
                            $('#modalNewFile').modal('hide');
                            $('#eval-table').DataTable().destroy();
                            loadtable();
                        }

                        if(data == 'NOT INSERTED')
                        {
                            swal("Not Added!", "Something blew up.", "error");
                            $('#add_eval_form')[0].reset();
                            $('#eval-table').DataTable().destroy();
                            loadtable();
                        }
                    },
                    error: function (data) {
                        alert(JSON.stringify(data));
                    }
                })
            });


            $(document).on('click', '#edit_data', function(e)
            {  
               e.preventDefault();
               var id = $(this).data("id");

               $.ajax({  
                    url:"<?php echo base_url('Transaction/view_evals')?>", 
                    method:"POST",  
                    data:'eval_id='+id,  
                    dataType: "json",
                    success:function(data){  
                         $('#edit_acad').val(data[0][0]);
                         $('#edit_sem').val(data[0][1]);
                         $('#edit_dept').val(data[0][2]);
                         $('#edit_fac').val(data[0][3]);
                         $('#edit_rating').val(data[0][4]);
                         $('#edit_inter').val(data[0][5]);
                         $('#eval_id').val(data[0][6]);
                         $('#openMod').trigger('click');
                    },
                    error: function (data) {
                        alert(JSON.stringify(data));
                    }
               }); 
            });

            $('#edit_eval_form').on("submit", function(event)
            {  
                event.preventDefault();  
                $.ajax({  
                url:"<?php echo base_url('Transaction/edit_evals')?>",  
                method:"POST",  
                data:$('#edit_eval_form').serialize(),
                success:function(data)
                {  
                    if(data == 'UPDATED')
                    {
                        swal("Updated!", "The evaluation has been updated.", "success");
                        $('#edit_eval_form')[0].reset();  
                        $('#modalEditEval').modal('hide');
                        $('#eval-table').DataTable().destroy();
                        loadtable();
                    }

                    if(data == 'NOT UPDATED')
                    {
                        swal("Not Added!", "Something blew up.", "error");
                        $('#edit_eval_form')[0].reset();
                    }

                    if(data == 'THE DATA IS ALREADY INSERTED')
                    {
                        swal("Not Added!", "The data is already inserted.", "error");
                        $('#edit_eval_form')[0].reset();
                        $('#modalEditEval').modal('hide');
                        $('#eval-table').DataTable().destroy();
                        loadtable();
                    }
                },
                error: function (data) {
                        alert(JSON.stringify(data));
                }
                });  
            });

            $('#select_ay').on('change', function()
            {
                var select_ay = $('#select_ay').val();
                var select_sem = $('#select_sem').val();
                var select_dept = $('#select_dept').val();
                fetch_data(select_ay, select_sem, select_dept);
            });

            $('#select_sem').on('change', function()
            {
                var select_ay = $('#select_ay').val();
                var select_sem = $('#select_sem').val();
                var select_dept = $('#select_dept').val();
                fetch_data(select_ay, select_sem, select_dept);
            });

            $('#select_dept').on('change', function()
            {
                var select_ay = $('#select_ay').val();
                var select_sem = $('#select_sem').val();
                var select_dept = $('#select_dept').val();
                fetch_data(select_ay, select_sem, select_dept);
            });

        $(".select2").select2();
        $('.selectpicker').selectpicker();
        });



    </script>
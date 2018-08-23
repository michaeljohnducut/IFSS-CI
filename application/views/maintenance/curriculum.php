
<div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                         <h4 class="page-title">Manage Curriculum</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="#">Maintenance</a></li>
                            <li class="active">Curriculum</li>
                        </ol>
                    </div>
                
                </div>
            <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <!-- <div class="panel-heading" style="background-color: gray; color:white;">
                                Filter Curriculum Details

                            </div> -->
                            <div class="row">
                                <div class="col-md-10">
                                    <h2>Search Filter</h2>
                                </div>
                                <div class="col-md-2">
                                <center><label class="control-label">Curriculum to use:</label></center>
                                    <select class="form-control select2" id="curr_year_use">
                                        <option value="0">--YEAR--</option>
                                        <?php foreach($curr_year as $r) echo '<option value="'.$r[2].'">'.$r[0].'</option>';?>
                                    </select>
                                </div>
                            </div>
                             <br>
                            <div  class="col-md-12" style="background-color: gray; height: 3px; margin-top: -5px;">

                            </div>
                            <br>
                            <div class="row">
                                <div class="form-group col-md-3">
                                    <center><label class="control-label">Curriculum Year:</label></center>
                                    <select class="form-control select2" id="curr_year_sf">
                                        <option value="0">--Curriculum Year--</option>
                                        <?php foreach($curr_year as $r) echo '<option value="'.$r[2].'">'.$r[0].'</option>';?>
                                    </select>
                                </div>

                                <div class="form-group col-md-3">
                                    <center><label class="control-label">Course:</label></center>
                                    <select class="form-control select2" id="department_sf">
                                    <option value="0">--Course--</option>
                                    <?php foreach($department as $r) echo '<option value="'.$r[4].'">'.$r[1].'</option>';?>
                                    </select>
                                </div>

                                <div class="form-group col-md-3">
                                    <center><label class="control-label">Semester:</label></center>
                                    <select class="form-control select2" id="semester_sf">
                                        <option value="0">--Semester--</option>
                                        <option value="1st">1st</option>
                                        <option value="2nd">2nd</option>
                                        <option value="Summer">Summer Term</option>
                                    </select>
                                </div>
                            </div>
                            
                             
                    <div class="col-sm-12">
                        <div class="white-box">
                            <div class="col-md-12">
                                <h1>First Year</h1>
                                <br>
                                
                            </div>
                            <div class="table-responsive">
                                <table id="firstYearTable" class="table colored-table inverse-tabl table-striped">
                                    <thead>
                                        <tr>
                                            <th>Course Code</th>
                                            <th>Course Title</th>
                                            <th>Credits</th>
                                            <th>Lec Hours</th>
                                            <th>Lab Hours</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                            <br>
                            <div  class="col-md-12" style="background-color: gray; height: 3px; margin-top: -5px;">

                            </div>
                            <div class="col-md-12">
                                <h1>Second Year</h1>
                                <br>
                                
                            </div>
                            <div class="table-responsive">
                                <table id="secondYearTable" class="table colored-table inverse-tabl table-striped">
                                    <thead>
                                        <tr>
                                            <th>Course Code</th>
                                            <th>Course Title</th>
                                            <th>Credits</th>
                                            <th>Lec Hours</th>
                                            <th>Lab Hours</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                            <br>
                            <div  class="col-md-12" style="background-color: gray; height: 3px; margin-top: -5px;">

                            </div>
                            <div class="col-md-12">
                                <h1>Third Year</h1>
                                <br>
                                
                            </div>
                            <div class="table-responsive">
                                <table id="thirdYearTable" class="table colored-table inverse-tabl table-striped">
                                    <thead>
                                        <tr>
                                            <th>Course Code</th>
                                            <th>Course Title</th>
                                            <th>Credits</th>
                                            <th>Lec Hours</th>
                                            <th>Lab Hours</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                            <br>
                            <div  class="col-md-12" style="background-color: gray; height: 3px; margin-top: -5px;">

                            </div>
                            <div class="col-md-12">
                                <h1>Fourth Year</h1>
                                <br>
                                
                            </div>
                            <div class="table-responsive">
                                <table id="fourthYearTable" class="table colored-table inverse-tabl table-striped">
                                    <thead>
                                        <tr>
                                            <th>Course Code</th>
                                            <th>Course Title</th>
                                            <th>Credits</th>
                                            <th>Lec Hours</th>
                                            <th>Lab Hours</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>



                             <div class="row">
                                <div class="col-md-6">
                                    <br>
                                    <button type="button" class="btn btn-success" id="update_curriculum">Update Curriculum</button>  
                                </div>
                            </div>
                            <br><br><br>   
                        </div>
                    </div>
                <!-- /.row -->
                <!-- .right-sidebar -->
               
            </div>
        </div>
    </div>
             <!-- /.right-sidebar -->
            </div>

            <div class="container-fluid" id="addSubDiv">
                <div class="white-box">
                    <h2>Add subjects to curriculum</h2>
                    <div  class="col-md-12" style="background-color: gray; height: 3px; margin-top: -5px;">
                    </div>
                    <br>
                    <div>
                    <form id="add_curri_form" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-3">
                            <label class="control-label">Select Curriculum Year:</label>
                            <select class="form-control select2" id="add_year" name="add_year">
                                <option value="" disabled selected>--YEAR--</option>
                               <?php foreach($curr_year as $r) echo '<option value="'.$r[2].'">'.$r[0].'</option>';?>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label class="control-label">Select Course</label>
                            <select class="form-control select2" id="edit_dept" name="edit_dept">
                                <option value="" disabled selected>--COURSE--</option>
                                <?php foreach($department as $r) echo '<option value="'.$r[4].'">'.$r[1].'</option>';?>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label class="control-label">Select Year Level:</label>
                            <select class="form-control select2" id="edit_yrlvl" name="edit_yrlvl">
                                <option value="" disabled selected>--YEAR LEVEL--</option>
                                <option value="1st">1st</option>
                                <option value="2nd">2nd</option>
                                <option value="3rd">3rd</option>
                                <option value="4th">4th</option>
                            </select>
                            
                        </div>
                        <div class="col-md-3">
                            <label class="control-label">Select Semester:</label>
                            <select class="form-control select2" id="edit_sem" name="edit_sem">
                                <option value="" disabled selected>--SEMESTER--</option>
                                <option value="1st">1st</option>
                                <option value="2nd">2nd</option>
                                <option value="Summer">Summer</option>
                            </select>
                        </div>
                    </div>
                    <div class="row" style="padding-left: 10px;">
                        <h3>Subjects to add</h3>
                    </div>
                    <div class="row" style="padding-left: 10px;">
                            <select class="select2 m-b-10 select2-multiple" multiple="multiple" data-placeholder="Choose" id="edit_subj" name="edit_subj[]">
                            <?php foreach($subjects as $r) echo '<option value="'.$r[7].'">'.$r[0].' - '.$r[1].'</option>';?>
                            </select>   
                    </div>
                        <button type="button" class="btn btn-default clear_btn_add">Clear</button>
                        <button type="submit" class="btn btn-info waves-effect text-left">Add Subjects</button>
                    </form>
                    </div>
                    </div>
                </div>

    <script src="<?php echo base_url(); ?>assets/plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/bower_components/datatables/jquery.dataTables.min.js"></script>

    <!-- Ito ung inidagdag ko para sa may alert animation at ung nasa ajax part kasama nito ung mga title chuchu -->
    <script src="<?php echo base_url(); ?>assets/js/sweetalert.min.js"></script>

    <!-- BOOTSTRAP SELECT -->
    <script src="<?php echo base_url(); ?>assets/plugins/bower_components/bootstrap-select/bootstrap-select.min.js" type="text/javascript"></script>

    <!-- CUSTOM SELECT -->
    <script src="<?php echo base_url(); ?>assets/plugins/bower_components/custom-select/custom-select.min.js" type="text/javascript"></script>

    <script src="<?php echo base_url(); ?>assets/plugins/bower_components/multiselect/js/jquery.multi-select.js" type="text/javascript"></script>

    <script type="text/javascript">


    function fetch_data(year_temp, dept_temp, sem_temp){
            
        if (year_temp != 0 || dept_temp != 0 ||  sem_temp !=0){

            var dataTable = $('#firstYearTable').DataTable({           
              "processing" : true,
              "serverSide" : true,
              "order" : [],
              destroy:true,
              "ajax" : {
               url:"<?php echo base_url('Maintenance/get_curriculum')?>",
               data:{year:year_temp, dept:dept_temp, sem:sem_temp, year_level:'1st'},
               type:"POST"
              }
             });
        

             var dataTable2 = $('#secondYearTable').DataTable({           
              "processing" : true,
              "serverSide" : true,
              "order" : [],
              destroy:true,
              "ajax" : {
               url:"<?php echo base_url('Maintenance/get_curriculum')?>",
               data:{year:year_temp, dept:dept_temp, sem:sem_temp,year_level:'2nd'},
               type:"POST"
              }
             });

             var dataTable3 = $('#thirdYearTable').DataTable({           
              "processing" : true,
              "serverSide" : true,
              destroy:true,
              "order" : [],
              "ajax" : {
               url:"<?php echo base_url('Maintenance/get_curriculum')?>",
               data:{year:year_temp, dept:dept_temp, sem:sem_temp,year_level:'3rd'},
               type:"POST"
              }
             });

             var dataTable4 = $('#fourthYearTable').DataTable({           
              "processing" : true,
              "serverSide" : true,
              destroy:true,
              "order" : [],
              "ajax" : {
               url:"<?php echo base_url('Maintenance/get_curriculum')?>",
               data:{year:year_temp, dept:dept_temp, sem:sem_temp,year_level:'4th'},
               type:"POST"
              }
             });

        }
    }

    function getUsedCurriculum(){

            $.ajax({  
                url:"<?php echo base_url('Maintenance/get_used_curr')?>", 
                method:"POST",  
                dataType: "json",
                success:function(data){
                     $('#curr_year_use').val(data);
                     $('#curr_year_use').trigger('change');
                },
                     error: function (data) {
                    alert(JSON.stringify(data));
                }
           });
        }


        $(document).ready(function()
        {

        $('.select2').select2();
        $('.selectpicker').selectpicker();

        getUsedCurriculum();

        $('#add_curri_form').on('submit', function(event)
        {  
            var year_temp = $('#curr_year_sf').val();
            var dept_temp = $('#department_sf').val();
            var sem_temp = $('#semester_sf').val();

            var acad_year = $('#add_year').val();
            var sem = $('#edit_sem').val();
            var year_level = $('#edit_yrlvl').val();
            var dept = $('#edit_dept').val();
            var subj = $('#edit_subj').val();

            event.preventDefault();  

            if(sem && year_level && dept && acad_year && subj)
            {
                $.ajax({  
                url:"<?php echo base_url('Maintenance/add_to_curriculum')?>",  
                method:"POST",  
                data:$('#add_curri_form').serialize(),
                success:function(data)
                {  
                    if(data == 'INSERTED')
                    {
                        x = 1;
                        $('#add_curri_form')[0].reset();
                        $('#add_year').select2().val('').trigger('change');
                        $('#edit_sem').select2().val('').trigger('change');
                        $('#edit_yrlvl').select2().val('').trigger('change');
                        $('#edit_dept').select2().val('').trigger('change');
                        $('#edit_subj').select2().val('').trigger('change');
                        $('.dynamic-added-update').remove();  
                        swal("Added!", "Subjects have been added to the curriculum", "success");
                        // $('#modalNewCurriculum').modal('hide');
                        // $('#subjectTable').DataTable().destroy();
                        fetch_data(year_temp, dept_temp, sem_temp);
                    }

                    if(data == 'NOT INSERTED')
                    {
                        swal("Not Added!", "Something's wrong.", "error");
                        $('#add_curri_form')[0].reset();
                    }
                },
                 error: function (data) {
                        alert(JSON.stringify(data));
                }
                }); 
            }
            else
            {
                swal("Not Added!", "Please complete the form before adding.", "error");
            }             
        });


        $('#curr_year_sf').on('change', function(){
            var year_temp = $('#curr_year_sf').val();
            var dept_temp = $('#department_sf').val();
            var sem_temp = $('#semester_sf').val();
            fetch_data(year_temp, dept_temp, sem_temp);
        });

        $('#department_sf').on('change',function(){
            var year_temp = $('#curr_year_sf').val();
            var dept_temp = $('#department_sf').val();
            var sem_temp = $('#semester_sf').val();
            fetch_data(year_temp, dept_temp, sem_temp);
            // alert(dept_temp);
        });

        $('#semester_sf').on('change',function(){
            var year_temp = $('#curr_year_sf').val();
            var dept_temp = $('#department_sf').val();
            var sem_temp = $('#semester_sf').val();
            fetch_data(year_temp, dept_temp, sem_temp);

        });

        $(document).on('click', '#delete_data', function(e)
        {  
            var year_temp = $('#curr_year_sf').val();
            var dept_temp = $('#department_sf').val();
            var sem_temp = $('#semester_sf').val();
            e.preventDefault();
            var id = $(this).data("id");

              swal({
                        title: "Unselect subject",
                        text: "from the curriculum?", 
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
              })
                .then((willApprove) => {
                  if (willApprove) {
                    // alert(id);
                    $.ajax({   
                      url:"<?php echo base_url('Maintenance/remove_from_curr')?>",  
                      method: "POST",
                      data: {id:id},
                      success: function (data) 
                      {
                         if(data == 'DELETED'){
                            fetch_data(year_temp, dept_temp, sem_temp);
                            swal("Success!", "Subject unselected.", "success");   
                         }

                         else{

                            swal("Not Deleted!", "Failed to remove subject.", "error");
                            alert(JSON.stringify(data));
                         }
                      },
                      error: function (data) {
                        swal("Not Deleted!", "Failed to remove subject.", "error");
                        alert(JSON.stringify(data));
                      }
                    });
                  } 

                  else {
                    swal("Cancelled", "");
                  }
                });
            });

        $('#edit_subj').on("select2-selecting", function(e) 
        {
            var subject= e.val;

            var acad_year = $('#add_year').val();
            var sem = $('#edit_sem').val();
            var year_level = $('#edit_yrlvl').val();
            var dept = $('#edit_dept').val();

            if(sem && year_level && dept && acad_year && subject)
            {
                $.ajax({  
                url:"<?php echo base_url('Maintenance/validate_subject_curri')?>",
                method:"POST",  
                data:{subject:subject, acad_year:acad_year, sem:sem, year_level:year_level, dept:dept}, 
                success:function(data)
                { 
                    if(data != 0)
                    {
                        $("#edit_subj option[value="+data+"]").prop("selected", false).trigger("change");
                        swal("Error", "Subject is already in the curriculum", "error"); 
                        $('#edit_subj option[value='+data+']').remove(); 
                    }  
                },
                error: function (data) {
                    alert(JSON.stringify(data));
                }
                });   
            }
        });

        $(document).on('click', '.clear_btn_add', function(e)
        {  
            $('#add_year').select2().val('').trigger('change');
            $('#edit_sem').select2().val('').trigger('change');
            $('#edit_yrlvl').select2().val('').trigger('change');
            $('#edit_dept').select2().val('').trigger('change');
            $('#edit_subj').val('').trigger('change');
        });  

        $(document).on('click', '.clear_btn_add', function(e)
        {  
            $('#edit_subj').val('').trigger('change');
        });  

         $(document).on('change','#curr_year_use', function()
        {

            var used_year = $('#curr_year_use').val();

            // e.preventDefault();
               $.ajax({  
                    url:"<?php echo base_url('Maintenance/reset_used_curr')?>",
                    method:"POST",  
                    data:{year_code:used_year}, 
                    success:function(data){ 
                        
                        if (data == 'CHANGED')
                        {
                            swal("Loaded!", "Curriculum on use has been loaded.", "success");
                        }  
                    },
                    error: function (data) {
                        alert(JSON.stringify(data));
                    }
               });   

            //     function setUsed(year_code){

            //         $.ajax({  
            //             url:"curriculum/set-used.php", 
            //             method:"POST",  
            //             data:{year_code:year_code}, 
            //             success:function(data){    
            //                  swal("Success!", "You're using a different curriculum", "success");
            //             },
            //             error: function (data) {
            //                 alert(JSON.stringify(data));
            //             }
            //          }); 
            // } 
            });

      });

    </script>
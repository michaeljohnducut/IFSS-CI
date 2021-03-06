<div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                         <h4 class="page-title">Faculty Profile</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="#">Faculty</a></li>
                            <li class="active">Faculty Profile</li>
                        </ol>
                    </div>
                
                </div>
            <!-- <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h2 class="box-title m-b-0">List of Accounts</h2>
                            <br>    
                            <h3 class="box-title m-b-0">Legend:</h3>
                            <div class="row" style="margin-left: 20px; margin-top: 5px;">
                                <div class="col-md-2">
                                    <button class="btn btn-success"><span class="fa fa-pencil"></span></button>&nbsp;
                                    <label style="margin-top: 5px;">Edit Profile</label>
                                </div>
                                <div class="col-md-3">
                                    <button class="btn btn-info"><span class="fa fa-eye"></span></button>&nbsp;
                                    <label style="margin-top: 5px;">View Profile</label>
                                </div>
                                <div class="col-md-4">

                                </div>
                            </div>
                            <br>
                            <div class="table-responsive">
                                <table class="table colored-table inverse-tabl table-striped" id="account-table">
                                <thead>
                                    <tr>
                                        <th>Faculty ID</th>
                                        <th>Last Name</th>
                                        <th>First Name</th>
                                        <th>Middle Name</th>
                                        <th>Faculty Type</th>
                                        <th>Contact #</th>
                                        <th style="width: 300px;">Email</th>
                                        <th>Action</th>  
                                    </tr>
                                </thead>
                                
                                <tbody>
                                    
                                </tbody>
                                </table>
                            </div>
                                 <div class="row">
                                    <div class="col-md-12">
                                        <center><button type="button" class="btn btn-info" id="create_account" style="margin-top: 10px;">New Faculty</button></center>
                                    </div>
                                </div>
                            
                        </div>
                    </div>
                </div> -->
                <!-- /.row -->   
            
        </div>

        <div class="container-fluid" id="fact-profile" >
            <div class="white-box" >
                <h2>FACULTY PROFILE</h2>

                <!-- Tab links -->
                <div class="tab">
                  <button class="tablinks" onclick="openCity(event, 'Personal_Info')" id="defaultOpen">Personal Info</button>
                  <button class="tablinks" onclick="openCity(event, 'Educ_bg')">Educational Background</button>
                  <button class="tablinks" onclick="openCity(event, 'Course_spec')">Course Specialization</button>
                  <button class="tablinks" onclick="openCity(event, 'Stud_eval')">Student Evaluation</button>
                </div>

                <!-- Tab content -->
                <div id="Personal_Info" class="tabcontent">
                <form id="add_fac_prof_form" method="POST" enctype="multipart/form-data"> 
                    <div class="row">
                        <br><br>
                        <div class="col-md-2" style="padding-top: 30px;">
                            <img id="imagepreview" style="height: 180px; width: 180px; border-style: solid; border-width: 1px; border-color: lightgray">
                            <br><br>
                             <input type="file" id="profilepic" name="profilepic" accept="image/*">
                        </div>
                        <div class="col-md-8 form-group">
                            <br><br>
                            <label class="control-label">Faculty ID:<span style="color:red;"> *</span></label>
                            <input class="form-control" maxlength="15" type="text" name="fact_id" id="fact_id" required style="width: 50%;">
                            <br>
                            <label class="control-label">Faculty Type:<span style="color:red;"> *</span></label>
                                <select class="form-control" name="fact_type" id="fact_type" required style="width: 50%;">
                                    <option value="" disabled selected>--SELECT FACULTY TYPE--</option>
                                    <?php foreach($fac_type as $r) echo '<option value="'.$r[2].'">'.$r[0].'</option>';?>
                                </select>
                            <br>
                            <label class="control-label">Department:<span style="color:red;"> *</span></label>
                                <select class="form-control" name="fact_dept" id="fact_dept" required style="width: 50%;">
                                    <option value="" disabled selected>--SELECT DEPARTMENT--</option>
                                    <?php foreach($dept as $r) echo '<option value="'.$r[3].'">'.$r[1].'</option>';?>
                                </select>
                            <input type="hidden" id="faculty_id_hid" name="faculty_id_hid"/>
                        </div>

                        <div class="col-md-4 form-group">
                            <br>
                            <label class="control-label">Surname:<span style="color:red;"> *</span></label>
                            <input class="form-control" id="fact_sname" name="fact_sname" maxlength="30" pattern="[A-Za-z\s'.-]{1,}" title="Characters only." type="text" required>
                        </div>
                        <div class="col-md-4 form-group">
                            <br>
                            <label class="control-label">First Name:<span style="color:red;"> *</span></label>
                            <input class="form-control" id="fact_fname" name="fact_fname" maxlength="40" type="text" pattern="[A-Za-z,\s'.-]{1,}" title="Characters only." required>
                        </div>
                        <div class="col-md-2 form-group">
                            <br>
                            <label class="control-label">Middle Name:</label>
                            <input class="form-control" id="fact_mname" name="fact_mname" maxlength=20 type="text" pattern="[A-Za-z,\s'.-]{1,}" title="Characters only.">
                        </div>
                        <!-- <div class="col-md-2 form-group">
                            <br>
                            <label class="control-label">Suffix:</label>
                            <input class="form-control" maxlength="3" type="text" required">
                        </div> -->
                        <div class="col-md-4 form-group">
                            <br>
                            <label class="control-label">Date of Birth:<span style="color:red;"> *</span></label>
                            <input class="form-control mydatepicker" id="fact_date_birth" name="fact_date_birth" type="text" pattern="([12]\d{3}-(0[1-9]|1[0-2])-(0[1-9]|[12]\d|3[01]))" title="YYYY-MM-DD" placeholder="YYYY-MM-DD" required>
                        </div>
                        <!-- <div class="col-md-4 form-group">
                            <br>
                            <label class="control-label">Place of Birth:</label>
                            <input class="form-control mydatepicker" id="fact_place_birth" name="fact_place_birth" type="text" pattern="[A-Za-z,\s'.-]{1,}" title="Characters only.">
                        </div> -->
                         <div class="col-md-4 form-group">
                            <br>
                            <label class="control-label">Citizenship:</label>
                            <input class="form-control" id="fact_citizen" name="fact_citizen" type="text" pattern="[A-Za-z\s'.-]{1,}" title="Characters only.">
                        </div>
                        <div class="col-md-4 form-group" style="padding-left: 20px;">
                            <br>
                            <label class="control-label">Gender:<span style="color:red;"> *</span></label><br>
                            <input type="radio" checked="" id="gen_male" name="rad_gender" value="male" style="margin-top: 10px; margin-left: 10px;">
                            <label for="gen_male">Male</label>
                            &nbsp;&nbsp; 
                            <input type="radio" id="gen_female" name="rad_gender" value="female" style="margin-top: 10px; margin-left: 10px;">
                            <label for="gen_female">Female</label>
                            
                        </div>

                        <div class="col-md-4 form-group">
                            <br>
                             <label class="control-label">Civil Status:</label>
                                    <select class="form-control" id="fact_civil_status" name="fact_civil_status">
                                        <option value=""  disabled selected>--OPTIONS--</option>
                                        <option value="Single">Single</option>
                                        <option value="Married">Married</option>
                                        <option value="Widowed">Widowed/Widower</option>
                                        <option value="Separated">Separated</option>
                                    </select>
                        </div>

                        <div class="col-md-4 form-group">
                            <br>
                            <label class="control-label">Phone Number:<span style="color:red;"> *</span></label>
                            <input class="form-control" id="fact_contact_no" name="fact_contact_no" type="text" pattern="^(09|\+639)\d{9}$" title="Input valid contact number" required>
                        </div>
                        <div class="col-md-4 form-group">
                            <br>
                            <label class="control-label">Email Address:<span style="color:red;"> *</span></label>
                            <input class="form-control" id="fact_email" name="fact_email" type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="Input valid email." required>
                        </div>
                        <div class="col-md-10 form-group">
                            <br>
                            <label class="control-label">Residential Address:</label>
                            <input class="form-control" id="fact_res_address" name="fact_res_address" type="text" pattern="[A-Za-z0-9,\s'.-]{1,}" title="Characters only.">
                        </div>
                        <div class="col-md-2 form-group">
                            <br>
                            <label class="control-label">Zip Code:</label>
                            <input class="form-control" id="fact_zip_res" name="fact_zip_res" maxlength="4" pattern="[0-9]" title="Numbers only." type="number">
                        </div>
                        <div class="col-md-10 form-group">
                            <br>
                            <label class="control-label">Permanent Address:</label>
                            <input class="form-control" id="fact_address" name="fact_address" type="text" pattern="[A-Za-z0-9,\s'.-]{1,}" title="Characters only.">
                        </div>
                        <div class="col-md-2 form-group">
                            <br>
                            <label class="control-label">Zip Code:</label>
                            <input class="form-control" id="fact_zip_address" name="fact_zip_address" maxlength="4" pattern="[0-9]" title="Numbers only." type="number">
                        </div>

                        <!-- <div class="col-md-3">
                            <label class="control-label">Name of Spouse:</label>
                            <input class="form-control" id="fact_slname" placeholder="Surname" name="fact_slname" type="text" pattern="[A-Za-z\s'.-]{1,}" title="Characters only." disabled>
                        </div>
                        <div class="col-md-3">
                            <label class="control-label"></label>
                            <input class="form-control" id="fact_sfname" name="fact_sfname" placeholder="First Name" type="text" pattern="[A-Za-z,\s'.-]{1,}" title="Characters only." disabled>
                        </div>
                        <div class="col-md-3">
                            <label class="control-label"></label>
                            <input class="form-control" id="fact_smname" name="fact_smname" placeholder="Middle Name" type="text" pattern="[A-Za-z,\s'.-]{1,}" title="Characters only." disabled>
                        </div> -->
                        <!-- <div class="col-md-1">
                            <label class="control-label">Suffix:</label>
                            <input class="form-control" placeholder="(Jr./III)" type="text">
                        </div> -->
                    </div>
                    <div class="row">
                        <div class="col-md-12" id="faculty_btn_update">
                            <center><button type="submit" class="btn btn-info" id="update_account" style="margin-top: 10px;">Update Faculty Details</button></center>
                        </div>
                    </div>
                </form>
                </div>

                <div id="Educ_bg" class="tabcontent">
                    <div class="row">
                        <br><br>
                        <div class="col-md-2" style="padding-top: 30px;">
                            <img id="imagepreview2" style="height: 180px; width: 180px; border-style: solid; border-width: 1px; border-color: lightgray">
                        </div>
                        
                        <div class="col-md-12">
                            <br>
                            <h3>Educational Background Form</h3>
                        <form id="add_fac_educ_form" method="POST" enctype="multipart/form-data">
                        <div class="table-responsive">
                            <table class="table colored-table inverse-tabl table-striped" id="dynamic_field">
                                <thead>
                                    <tr>
                                        <th>Level</th>
                                        <th>Name of School</th>
                                        <th>Degree Course</th>
                                        <th>Year Graduated</th>
                                        <th>Add/Remove</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <select class="form-control" id="educ_lvl" name="educ_lvl[]" required>
                                                <option value="" disabled selected>--SELECT LEVEL--</option>
                                                <option value="College">College</option>
                                                <option value="PBD">Post Baccalaureate Degree</option>
                                                <option value="Masteral Degree">Masteral Degree</option>
                                                <option value="Doctoral Degree">Doctoral Degree</option>
                                            </select>
                                        </td>
                                        <td>
                                            <input class="form-control" type="text" name="educ_school[]" id="educ_school" required>
                                        </td>
                                        <td>
                                            <input class="form-control" type="text" name="educ_degree[]" id="educ_degree" required>
                                        </td>
                                        <td>
                                            <input class="form-control" type="text" name="educ_yr[]" id="educ_yr" required>
                                        </td>
                                        <td>
                                            <button class="btn btn-success fa fa-plus" data-toggle="tooltip" data-placement="top" title="Add row" id='add_field' aria-hidden="true"></button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table> 
                        </div>
                        </form>
                        </div>
                        <!-- <div class="col-md-6">
                            <br>
                            <label class="control-label">Honors Received:</label>
                            <input class="form-control" type="text">
                        </div> -->
                        <!-- <div class="col-md-3">
                            <center><button type="submit" class="btn btn-success waves-effect text-left" style="margin-top: 48px;">Add Record</button></center>
                        </div> -->

                        <div class="col-md-12">
                        <div class="table-responsive">
                            <br><br>
                            <table class="table color-table info-table" id="educ-bg-table">
                                <thead>
                                    <tr>
                                        <th style="width: 10%">Level</th>
                                        <th style="width: 30%">Name of School</th>
                                        <th>Degree Course</th>
                                        <th>Year Graduated</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                
                            </table>
                        </div>
                        </div>
                        
                    </div>
                 
                </div>

                <div id="Course_spec" class="tabcontent">
                    <div class="row">
                        <br>
                        <div class="col-md-2" style="padding-top: 30px;">
                            <img id="imagepreview3" style="height: 180px; width: 180px; border-style: solid; border-width: 1px; border-color: lightgray">
                        </div>
                        <div class="col-md-12">
                            <h3>Select Specialized Courses</h3>
                        </div>
                        <div id="fac_course_spec_div">
                            <ul style='list-style-type:disc' id="fac_course_spec">

                            </ul>
                        </div>
                        
                    <form id="edit_spec_fac_form" method="POST" enctype="multipart/form-data">
                        <?php 
                            foreach($spec as $r)
                            {
                        ?>
                        <div class="col-md-5" id="spec_edit_div">
                            <input type="checkbox" name="edit_fac_spec" value="<?php echo $r[2]; ?>">
                            <label><?php echo $r[0]; ?></label>
                        </div>
                        <?php  
                            }
                        ?>
                    </form>
                        
                    <!-- <form id="add_spec_fac_form" method="POST" enctype="multipart/form-data">
                        <?php 
                            //foreach($spec as $r)
                            {
                        ?>
                        <div class="col-md-5" id="spec_edit_div">
                            <input type="checkbox" name="fac_spec[]" value="<?php //echo $r[2]; ?>">
                            <label><?php //echo $r[0]; ?></label>
                        </div>
                        <?php  
                            }
                        ?>
                    </form> -->
                        
                    </div>
                   
            </div>

            <div id="Stud_eval" class="tabcontent">
                    <div class="row">
                        <br><br>
                        <div class="col-md-2" style="padding-top: 30px;">
                            <img id="imagepreview4" style="height: 180px; width: 180px; border-style: solid; border-width: 1px; border-color: lightgray">
                        </div>
                        <div class="col-md-12">
                            <h3>Student Evaluation Ratings</h3>
                        </div>
                        <div class="table-responsive">
                                    <table class="table colored-table inverse-table table-striped" style="margin-top: 20px" id="student_eval_table">
                                        <thead>
                                            <tr>
                                                <th>Academic Year</th>
                                                <th>Semester</th>
                                                <th>Rating</th>
                                                <th>Interpretation</th>
                                            </tr>
                                        </thead>

                                         <tbody>
                                            
                                        </tbody>
                                    </table>

                                </div>
                        
                        
                    </div>
                   
            </div>
            
        

<a data-toggle="modal" href="#modalEditEducBg" id="openMod"></a>

    <div class="modal fade bs-example-modal-lg" id="modalEditEducBg" tabindex="-1" role="dialog" aria-labelledby="modalEditEducBg" aria-hidden="true" style="display: none;">
                                    <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h4 class="modal-title">Edit Faculty Educational Background Details</h4>
                                        </div>
                                        <div class="modal-body">
                                        <form id="edit_educbg_form" method="POST" enctype="multipart/form-data">
                                            <div class="form-group col-md-12">
                                            <div class="form-group col-md-6">
                                                    <label class="control-label">Level:<span style="color:red;"> *</span></label>
                                                    <select class="form-control" id="educ_lvl_edit" name="educ_lvl_edit" required>
                                                        <option value="" disabled selected>--SELECT LEVEL--</option>
                                                        <option value="College">College</option>
                                                        <option value="PBD">Post Baccalaureate Degree</option>
                                                        <option value="Masteral Degree">Masteral Degree</option>
                                                        <option value="Doctoral Degree">Doctoral Degree</option>
                                            </select>
                                            </div>
                                            <div class="form-group col-md-6">
                                                    <label class="control-label">Name of School:<span style="color:red;"> *</span></label>
                                                    <input class="form-control" type="text" name="educ_school_edit" id="educ_school_edit" required>
                                            </div>
                                            </div>
                                            <div class="form-group col-md-12">
                                            <div class="form-group col-md-6">
                                                    <label class="control-label">Degree Course:<span style="color:red;"> *</span></label>
                                                    <input class="form-control" type="text" name="educ_degree_edit" id="educ_degree_edit" required>
                                            </div>
                                            <div class="form-group col-md-6">
                                                    <label class="control-label">Year Graduated:<span style="color:red;"> *</span></label>
                                                    <input class="form-control" type="text" name="educ_yr_edit" id="educ_yr_edit">
                                            </div> 
                                            </div>
                                            <input type="hidden" name="educbg_id_hid" id="educbg_id_hid" />
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" onclick="resetForm()">Clear</button>
                                            <button type="submit" id="btnEditEducBg" name="btnEditEducBg" class="btn btn-success waves-effect text-left">Update Educational Background</button>
                                        </div>
                                    </form>
                                    </div>
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

    <script src="<?php echo base_url(); ?>assets/js/jasny-bootstrap.js" type="text/javascript"></script>

    <script type="text/javascript">
        function resetForm()
        {
            $('#edit_educbg_form')[0].reset();
        }

        function resetForm2()
        {
            $('#add_fac_prof_form')[0].reset();
            $('#imagepreview').attr('src', "<?php echo base_url('assets/images/profile.png');?>");
        }



        function loadtable()
        {
          $('#account-table').dataTable().fnClearTable();
          $('#account-table').dataTable().fnDraw();
          $('#account-table').dataTable().fnDestroy();
          $('#account-table').dataTable({
              "processing": true,
              "serverSide": false,
              "sAjaxSource": "<?php echo base_url('Maintenance/get_faculty')?>",
              "deferLoading": 10,
              "bPaginate": true,
              "aaSorting": [[0,'asc']],
              "fnInitComplete": function(){
                        
              }
          });
        }


        // function change_spouse()
        // {
        //     var civil_status = $('#fact_civil_status').val();

        //     if(civil_status == 'Married')
        //     {
        //         $('#fact_sfname').prop("disabled",false);
        //         $('#fact_slname').prop("disabled",false);
        //         $('#fact_smname').prop("disabled",false);
        //     }
        //     else
        //     {
        //         $('#fact_sfname').prop("disabled",true);
        //         $('#fact_slname').prop("disabled",true);
        //         $('#fact_smname').prop("disabled",true);
        //     }
        // }

        function show_educ_table(fac_id)
            {
                $('#educ-bg-table').dataTable().fnClearTable();
                $('#educ-bg-table').dataTable().fnDraw();
                $('#educ-bg-table').dataTable().fnDestroy();
                var dataTable = $('#educ-bg-table').DataTable({           
                    "processing" : true,
                    "serverSide" : false,
                    "deferLoading": 10,
                    "bPaginate": true,
                    "aaSorting": [[0,'asc']],
                    "sAjaxSource": "<?php echo base_url()?>Maintenance/get_educbg/"+fac_id,
                    "fnInitComplete": function(){
                        
                    }
                });
            }

        function loadsummary(id)
            {
                $('#student_eval_table').show();
                $('#student_eval_table').dataTable().fnClearTable();
                $('#student_eval_table').dataTable().fnDraw();
                $('#student_eval_table').dataTable().fnDestroy();
                $('#student_eval_table').dataTable({
                    "processing" : true,
                    "serverSide" : false,
                    "order" : [],
                    "ajax" : {
                        url:"<?php echo base_url('Maintenance/get_stud_eval')?>",
                        data:{faculty_id:id},
                        type:"POST"
                    }
                });
            }

        function load_details()
        {
            var id = "<?php echo $id?>";

            $('#educ-bg-table').show();
            $('#educ-bg-table').DataTable().destroy();
            show_educ_table(id);

            $.ajax({  
                        url:"<?php echo base_url('Maintenance/view_faculty')?>", 
                        method:"POST",  
                        data:'faculty_id='+id,  
                        dataType: "json",
                        success:function(data){
                             $('#fact_id').val(data[0][0]);
                             $('#fact_type').val(data[0][14]);
                             $('#fact_dept').val(data[0][15]);
                             $('#fact_sname').val(data[0][1]);
                             $('#fact_fname').val(data[0][2]);
                             $('#fact_mname').val(data[0][3]);
                             $('#fact_email').val(data[0][4]);
                             $('#fact_contact_no').val(data[0][5]);
                             $('#fact_date_birth').val(data[0][6]);
                             $('#fact_civil_status').val(data[0][8]);
                             $("input[name=rad_gender][value="+data[0][7]+"]").prop('checked', true);
                             $('#fact_citizen').val(data[0][9]);
                             $('#fact_res_address').val(data[0][10]);
                             $('#fact_zip_res').val(data[0][11]);
                             $('#fact_address').val(data[0][12]);
                             $('#fact_zip_address').val(data[0][13]);
                             $('#faculty_id_hid').val(data[0][16]);
                             loadsummary(id);
                        },
                        error: function (data) {
                            alert(JSON.stringify(data));
                        }
                   }); 


                    $.ajax({  
                        url:"<?php echo base_url('Maintenance/view_spec')?>", 
                        method:"POST",  
                        data:'faculty_id='+id,  
                        dataType: "json",
                        success:function(data){

                            // $("input[name = 'fac_spec']").prop('checked', false);
                            $('input:checkbox').removeAttr('checked');
                            var len = data.length;
                            for(var i=0; i<len; i++)
                            {
                                var spec_id = data[i][0];
                        
                               $("input[value ="+ "'" + spec_id + "'" + "]").prop('checked',true);
                            }
                            
                        },
                             error: function (data) {
                            alert(JSON.stringify(data));
                        }
                   });
        }

        function setImage()
        {
            if("<?php echo $this->session->userdata('IMAGE');?>" == 'undefined')
            {
                $('#imagepreview').attr('src', '<?php echo base_url('assets/images/profile.png');?>');
                $('#imagepreview2').attr('src', '<?php echo base_url('assets/images/profile.png');?>');
                $('#imagepreview3').attr('src', '<?php echo base_url('assets/images/profile.png');?>');
                $('#imagepreview4').attr('src', '<?php echo base_url('assets/images/profile.png');?>');
            }
            else
            {
                $('#imagepreview').attr('src', '<?php echo base_url('assets/images').'/'.$this->session->userdata('IMAGE');?>');
                $('#imagepreview2').attr('src', '<?php echo base_url('assets/images').'/'.$this->session->userdata('IMAGE');?>');
                $('#imagepreview3').attr('src', '<?php echo base_url('assets/images').'/'.$this->session->userdata('IMAGE');?>');
                $('#imagepreview4').attr('src', '<?php echo base_url('assets/images').'/'.$this->session->userdata('IMAGE');?>');
            }
        }

        function readURL(input) 
        {
          if (input.files && input.files[0]) 
          {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#imagepreview').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
          }
        }

        $(document).ready(function(){
            loadtable();

            load_details();

            setImage();

            $("#profilepic").change(function(){
                readURL(this);
            });

            $('#fact_id').prop("disabled",true);
            $('#fact_type').prop("disabled",true);
            $('#fact_dept').prop("disabled",true);
            
            $('#fact-profile').show();

            function hide_educ_table()
            {
                $('#educ-bg-table').DataTable( {
                        "paging":   false,
                        "ordering": false,
                        "info":     false,
                        "searching": false
                } );
            }

            function show_educ_table2(fac_id)
            {
                $('#educ-bg-table').dataTable().fnClearTable();
                $('#educ-bg-table').dataTable().fnDraw();
                $('#educ-bg-table').dataTable().fnDestroy();
                var dataTable = $('#educ-bg-table').DataTable({           
                    "processing" : true,
                    "serverSide" : false,
                    "deferLoading": 10,
                    "bPaginate": true,
                    "aaSorting": [[0,'asc']],
                    "sAjaxSource": "<?php echo base_url()?>Maintenance/get_educbg/"+fac_id,
                    "fnInitComplete": function(){
                        
                    }
                });

                dataTable.column(4).visible(false);
            }

            var x = 1;
        
            $('#add_field').click(function()
            {  
               x++;  
               $('#dynamic_field').append('<tr id="row'+x+'" class="dynamic-added">'+
                '<td><select class="form-control" name="educ_lvl[]" required><option value="" disabled selected>--SELECT LEVEL--</option>'+
                    '<option value="College">College</option>'+
                    '<option value="PBD">Post Baccalaureate Degree</option>'+
                    '<option value="Masteral Degree">Masteral Degree</option>'+
                    '<option value="Doctoral Degree">Doctoral Degree</option>'+
                    '</select></td>'+
                '<td><input class="form-control" type="text" name="educ_school[]" required></td>'+
                '<td><input class="form-control" type="text" name="educ_degree[]" required></td>'+
                '<td><input class="form-control" type="text" name="educ_yr[]" required></td>'+
                '<td><button type="button" data-toggle="tooltip" data-placement="top" title="Delete row" name="remove" id="'+x+'" class="btn btn-danger btn_remove">X</button></td>'+
                    '</tr>');  
            });

            $(document).on('click', '.btn_remove', function(){  
               var button_id = $(this).attr("id");   
               $('#row'+button_id+'').remove();  
            });

                //UPDATE FACULTY SPECIALIZATION (TOGGLE)
                $("input[name = 'edit_fac_spec']").on('change', function()
                {
                    var spec = $(this).attr('value');
                    var fac_id = $('#faculty_id_hid').val();
                    var spec_desc_add = "";
                    var spec_desc_removed = "";

                    if($(this).prop("checked"))
                    {
                        event.preventDefault();

                        $.ajax({  
                            url:"<?php echo base_url('Maintenance/view_specializations')?>", 
                            method:"POST",  
                            data:'spec_id='+spec,  
                            dataType: "json",
                            success:function(data){  
                                 spec_desc_add = data[0][1];
                            },
                            error: function (data) {
                                alert(JSON.stringify(data));
                            }
                       }); 

                        $.ajax({  
                            url:"<?php echo base_url('Maintenance/toggle_specs')?>",  
                            method:"POST",  
                            data:{fac_id:fac_id, spec:spec, act:"add"},
                            success:function(data)
                            {  
                                swal("Success!", "Specialization is added", "success");
                            }, 
                            error: function(data)
                            {
                               swal("Error!", "Refresh the page and try again", "error");
                            }
                        }); 
                    }

                    else
                    {
                        event.preventDefault(); 

                        $.ajax({  
                            url:"<?php echo base_url('Maintenance/view_specializations')?>", 
                            method:"POST",  
                            data:'spec_id='+spec,  
                            dataType: "json",
                            success:function(data){  
                                 spec_desc_removed = data[0][1];
                            },
                            error: function (data) {
                                alert(JSON.stringify(data));
                            }
                       }); 

                        $.ajax({  
                            url:"<?php echo base_url('Maintenance/toggle_specs')?>",  
                            method:"POST",  
                            data:{fac_id:fac_id, spec:spec, act:"delete"},
                            success:function(data)
                            {  
                                swal("Success!", "Specialization is removed.", "success");
                            }, 
                            error: function(data)
                            {
                               swal("Error!", "Refresh the page and try again", "error");
                            }
                        }); 
                    }
                  });
                
                //EDIT EDUCBG VIEW DETAILS
                $(document).on('click', '#edit_educbg_data', function(e)
                {  
                   e.preventDefault();
                   var id = $(this).data("id");
                   
                   $.ajax({  
                        url:"<?php echo base_url('Maintenance/view_educbg')?>", 
                        method:"POST",  
                        data:'educbg_id='+id,  
                        dataType: "json",
                        success:function(data){
                             $('#educ_lvl_edit').val(data[0][0]);
                             $('#educ_school_edit').val(data[0][1]);
                             $('#educ_degree_edit').val(data[0][2]);
                             $('#educ_yr_edit').val(data[0][3]);
                             $('#educbg_id_hid').val(data[0][4]);
                             $('#openMod').trigger('click');
                        },
                        error: function (data) {
                            alert(JSON.stringify(data));
                        }
                   }); 
                }); 

                //UPDATE EDUCBG TABLE
                $('#edit_educbg_form').on("submit", function(event)
                {  
                    $fac_id = $('#faculty_id_hid').val();
                    event.preventDefault();  
                    $.ajax({  
                    url:"<?php echo base_url('Maintenance/edit_educbg')?>",  
                    method:"POST",  
                    data:$('#edit_educbg_form').serialize(),
                    success:function(data)
                    {  
                        if(data == 'UPDATED')
                        {
                            swal("Updated!", "The educational background has been updated.", "success");
                            $('#edit_educbg_form')[0].reset();  
                            $('#modalEditEducBg').modal('hide');
                            $('#educ-bg-table').DataTable().destroy();
                            show_educ_table($fac_id);
                        }

                        if(data == 'NOT UPDATED')
                        {
                            swal("Not Updated!", "Something blew up.", "error"); 
                        }

                        if(data == 'THE DATA IS ALREADY INSERTED')
                        {
                            swal("Not Added!", "The data is already inserted.", "error");
                            $('#edit_educbg_form')[0].reset();  
                            $('#modalEditEducBg').modal('hide');
                            $('#educ-bg-table').DataTable().destroy();
                            show_educ_table($fac_id);
                        }
                    }
                    });  
                });

                //EDIT FACULTY DETAILS PROCESS
                $("#add_fac_prof_form").on("submit", function(event)
                {  
                    var id = "<?php echo $id?>";
                    
                    openCity(event, 'Personal_Info');
                    event.preventDefault();  
                    $.ajax({  
                    url:"<?php echo base_url('Maintenance/edit_faculty_profile')?>",  
                    method:"POST",  
                    data:new FormData(this),
                    dataType: 'json',
                    contentType:false,
                    cache:false,
                    processData:false,
                    success:function(data)
                    {  
                        if(data['mes'] == 'UPDATED')
                        {
                            swal("Updated!", "The faculty details is updated.", "success");
                            $('#fact-profile').show();
                            $('.dynamic-added').remove();
                            show_educ_table(id);
                            $('#educ_lvl').val('');
                            $('#educ_school').val('');
                            $('#educ_degree').val('');
                            $('#educ_yr').val('');
                            $('#profilepic').val("");

                            window.location.reload();
                        }

                        if(data['mes'] == 'NOT UPDATED')
                        {
                            swal("Not Updated!", "Something blew up.", "error");
                        }

                        if(data['mes'] == 'INVALID')
                        {
                            swal("Invalid file!", "You uploaded an invalid file. Make sure that the file format of the image you are uploading is JPG/JPEG/PNG.", "error");
                        }
                    },
                    error:function(data)
                    {
                        swal("Not Updated!", "Something blew up.", "error");
                    }
                    });

                    $.ajax({  
                        url:"<?php echo base_url('Maintenance/edit_profile_educbg')?>",  
                        method:"POST",  
                        data:$("#add_fac_educ_form").serialize() + "&main_id=" + id,
                        success:function(data)
                        {  
                           
                        },
                        error:function(data)
                        {
                            swal("Not Updated!", "Something blew up.", "error");
                        }
                    });   
                });
        });

        function openCity(evt, cityName) 
        {
            // Declare all variables
            var i, tabcontent, tablinks;

            // Get all elements with class="tabcontent" and hide them
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }

            // Get all elements with class="tablinks" and remove the class "active"
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }

            // Show the current tab, and add an "active" class to the button that opened the tab
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }

        document.getElementById("defaultOpen").click();
    </script>

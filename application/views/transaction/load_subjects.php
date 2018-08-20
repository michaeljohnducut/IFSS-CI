<div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                         <h4 class="page-title">Load Subjects</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="#">Transaction</a></li>
                            <li class="active">Load Subjects</li>
                        </ol>
                    </div>
                
                </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="white-box">
                        <div class="row">
                            <h3>Assign subjects to faculty members</h3>
                        </div>
                        <div  class="col-md-12" style="background-color: gray; height: 3px; margin-top: -5px;">

                        </div> 
                        <div class="row">
                            <div class="col-md-3">
                                <br>
                                <label class="control-label">Academic Year:</label>
                                <select class="form-control select2" id="select_acadyr">
                                    <option value="" disabled selected>-Academic Year-</option>
                                    <?php 
                                        for ($i = date("Y"); $i > 1900; $i-- ){
                                            echo '<option value ="' .$i. '&#x2010;'. ($i+1).'">' .$i. '&#x2010;'. ($i+1) .  '</option>'; 
                                        }
                                    ?>
                                </select>
                                <br>
                            </div>
                            <div class="col-md-3">
                                <br>
                                <label class="control-label">Semester:</label>
                                <select class="form-control select2" id="select_sem">
                                    <option value="" disabled selected>-Semester-</option>
                                    <option value="1st">1st</option>
                                    <option value="2nd">2nd</option>
                                    <option value="Summer">Summer</option>
                                </select>
                                <br><br><br>
                            </div>
                        </div> 
                        <div  class="col-md-12" style="background-color: gray; height: 3px; margin-top: -5px;">

                        </div>
                        <div class="row">
                            <div class="col-md-5">
                                <br>
                                <label class="control-label">Select subject:</label>
                                <select class="form-control select2" id="select_subject" style="height: 40px;">
                                    <option value="0" disabled selected>-Subjects-</option>
                                </select>
                                <div class="col-md-5" style="padding-left: 20px;">
                                    <h4>CURRICULUM on USE:</h4>
                                    <h4>SUBJECT CODE:</h4>
                                    <h4>UNITS:</h4>
                                    <h4>LECTURE HOURS:</h4>
                                    <h4>LABORATORY HOURS:</h4>
                                </div>
                                <div class="col-md-7">
                                    <h4 id="label_curr_use"></h4>
                                    <h4 id="label_subj_code"></h4>
                                    <h4 id="label_units"></h4>
                                    <h4 id="label_lec_hrs"></h4>
                                    <h4 id="label_lab_hrs"></h4>
                                </div>
                                <div class="col-md-12">
                                    <label style="margin-top: 40px" class="control-label">Available Sections:</label>
                                    <select class="form-control select2" id="select_section" style="height: 40px;">
                                        <option value="0" disabled selected>-Sections-</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="col-md-4">
                                    <br>
                                    <label  class="control-label">Filter by faculty type:</label>
                                    <select class="form-control select2" id="select_faculty_type" style="height: 40px;">
                                    <option value="0">All</option>
                                    <?php foreach($faculty_type as $r) echo '<option value="'.$r[2].'">'.$r[0].'</option>';?>
                                </select>
                                </div>
                                <div class="table-responsive">
                                    <br>
                                <table class="table colored-table inverse-table table-striped" style="margin-top: 20px" id="select_faculty">
                                    <thead>
                                        <tr>
                                            <th>Faculty Name</th>
                                            <th>Faculty Type</th>
                                            <th>Evaluation</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                     <tbody>

                                    </tbody>
                                </table>

                            </div>
                            </div>
                        </div>        
               
                    </div>

            </div>

            <div class="col-sm-12">
                <div class="white-box">
                        <h3>Subjects assigned to section:</h3>
                        <br>
                        <div class="row">
                            <div class="col-md-3">
                                <label class="control-label">Select Course</label>
                                <select class="form-control select2" id="select_course">
                                    <option value="0" disabled selected>-Course-</option>
                                    <?php foreach($courses as $r) echo '<option value="'.$r[4].'">'.$r[1].'</option>';?>
                                    </select>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label class="control-label">Select Year and Section</label>
                                <select class="form-control select2" id="select_year_sec">
                                    <option value="0" disabled selected>-Year - Section-</option>
                                    </select>
                                </select>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <br>
                                <table class="table colored-table inverse-table table-striped" style="margin-top: 10px" id="tbl_section_loads">
                                    <thead>
                                        <tr>
                                            <th>Subject Code</th>
                                            <th>Subject Description</th>
                                            <th>Professor</th>
                                            <th>Units</th>
                                            <th>Lecture Hours</th>
                                            <th>Lab Hours</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                     <tbody>

                                    </tbody>
                                </table>

                            </div>

                </div>
            </div>

            <a data-toggle="modal" href="#modalProfLoad" id="openMod"></a>

            <div class="modal fade bs-example-modal-lg" id="modalProfLoad" tabindex="-1" role="dialog" aria-labelledby="modalProfLoad" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h4 class="modal-title">Faculty Teaching Loads</h4>
                                        </div>
                                        <div  class="col-md-12" style="background-color: gray; height: 3px; margin-top: -5px;">

                                        </div>
                                        <div class="modal-body">
                                            <div class="col-md-6">
                                                <h4 id="lbl_fac_id"><b>FACULTY ID:</b>&nbsp;201504279MN0</h4>
                                            </div>
                                            <div class="col-md-6">
                                                <h4 id="lbl_fac_name"><b>FACULTY NAME:</b>&nbsp; Aglibot, Patricie Lei</h4>
                                            </div>
                                            <div class="col-md-6">
                                                <h4 id="lbl_fac_type"><b>FACULTY TYPE:</b>&nbsp; Regular - Full Time </h4>
                                            </div>
                                            <div class="col-md-6">
                                                <h4 id="lbl_spec"><b>SPECIALIZATIONS:</b>&nbsp; </h4>
                                            </div>
                                            <div class="col-md-6">
                                                <h4 id="lbl_load"><b>Current Load Count:</b>&nbsp; </h4>
                                            </div>
                                            <div class="table-responsive">
                                                <table class="table colored-table inverse-table table-striped" style="margin-top: 10px" id="tbl_subj_assigned">
                                                    <thead>
                                                        <tr>
                                                            <th>Year and Section</th>
                                                            <th>Course Code</th>
                                                            <th>Course Name</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>

                                                     <tbody>

                                                    </tbody>
                                                </table>

                                            </div> 
                                        </div>


                                        <!-- <div class="modal-footer">
                                            
                                        </div> -->

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

        $(".select2").select2();
        $('.selectpicker').selectpicker();

        function viewSubjectsSection(){

            var subject = $('#select_subject').val();
            var acad_yr = $('#select_acadyr').val();
            var type = $('#select_faculty_type').val();
            var sem = $('#select_sem').val();

            $.ajax({
                method:"POST",
                url:"<?php echo base_url('Transaction/view_subjects_sections')?>",
                dataType: "json",
                data:{temp_subject:subject, temp_acadyr:acad_yr, sem:sem},
                success:function(data)
                {   
                    $('#select_section').empty();
                    $('#select_section').append('<option value="0" disabled selected>-Sections-</option>');
                    var len = data.length;
                    for (var i=0; i<len; i++)
                    {
                      var temp_val = data[i][1];
                      var temp_text = data[i][0];
                      $('#select_section').append($('<option>',{
                         value: temp_val,
                         text: temp_text
                     }));
                    }
                }
               });
        }

        function viewFacultyLoadTbl(fac_id){
            var acad_yr = $('#select_acadyr').val();
            var sem = $('#select_sem').val();
            $('#tbl_subj_assigned').dataTable().fnClearTable();
            $('#tbl_subj_assigned').dataTable().fnDraw();
            $('#tbl_subj_assigned').dataTable().fnDestroy();
            $('#tbl_subj_assigned').dataTable({
                "processing" : true,
                "serverSide" : false,
                "order" : [],
                "ajax" : {
                    url:"<?php echo base_url('Transaction/view_facload_tbl')?>",
                    data:{fac_id:fac_id, acad_yr:acad_yr, sem:sem},
                    type:"POST"
                }
            });

        }

        function loadfaculty(id, type)
        {
            $('#select_faculty').dataTable().fnClearTable();
            $('#select_faculty').dataTable().fnDraw();
            $('#select_faculty').dataTable().fnDestroy();
            $('#select_faculty').dataTable({
                "processing" : true,
                "serverSide" : false,
                "order" : [],
                "ajax" : {
                    url:"<?php echo base_url('Transaction/view_subjects_faculty')?>",
                    data:{temp_subject:id, temp_type:type},
                    type:"POST"
                }
            });
        }

        function loadSectionSubjects(){
            var section_id = $('#select_year_sec').val();
            var acad_yr = $('#select_acadyr').val();
            var sem = $('#select_sem').val();
            $('#tbl_section_loads').dataTable().fnClearTable();
            $('#tbl_section_loads').dataTable().fnDraw();
            $('#tbl_section_loads').dataTable().fnDestroy();
            $('#tbl_section_loads').dataTable({
                "processing" : true,
                "serverSide" : false,
                "order" : [],
                "ajax" : {
                    url:"<?php echo base_url('Transaction/get_section_load_tbl')?>",
                    data:{section_id:section_id, acad_yr:acad_yr, sem:sem},
                    type:"POST"
                }
            });
        }

        $(document).ready(function()
        {
            $("#select_section").prop("disabled", true);
            $('#select_acadyr').on('change', function()
            {
                $("#select_section").prop("disabled", false);

                var subject = $('#select_subject').val();
                var acad_yr = $('#select_acadyr').val();

                if(subject)
                {
                    $.ajax({
                    method:"POST",
                    url:"<?php echo base_url('Transaction/view_subjects_sections')?>",
                    dataType: "json",
                    data:{temp_subject:subject, temp_acadyr:acad_yr},
                    success:function(data)
                    {   
                        $('#select_section').empty();
                        $('#select_section').append('<option value="0" disabled selected>-Sections-</option>');
                        var len = data.length;
                        for (var i=0; i<len; i++)
                        {
                          var temp_val = data[i][1];
                          var temp_text = data[i][0];
                          $('#select_section').append($('<option>',{
                             value: temp_val,
                             text: temp_text
                         }));
                        }
                    }
                   });
                }

            });

            $('#select_sem').on('change', function()
            {
                var sem = $('#select_sem').val();

                $.ajax({
                method:"POST",
                url:"<?php echo base_url('Transaction/get_subjects_per_sem')?>",
                dataType: "json",
                data:{temp_sem:sem},
                success:function(data)
                {   
                    $('#select_subject').empty();
                    $('#select_subject').append('<option value="0" disabled selected>-Subjects-</option>');
                    var len = data.length;
                    for (var i=0; i<len; i++)
                    {
                      var temp_val = data[i][1];
                      var temp_text = data[i][0];
                      $('#select_subject').append($('<option>',{
                         value: temp_val,
                         text: temp_text
                     }));
                    }
                }
               });
            });

            $('#select_subject').on('change', function()
            {
                var subject = $('#select_subject').val();
                var acad_yr = $('#select_acadyr').val();
                var type = $('#select_faculty_type').val();
                var sem = $('#select_sem').val();

                $.ajax({
                method:"POST",
                url:"<?php echo base_url('Transaction/view_subjects_details')?>",
                dataType: "json",
                data:{temp_subject:subject},
                success:function(data)
                {   
                    $('#label_curr_use').empty();
                    $('#label_subj_code').empty();
                    $('#label_units').empty();
                    $('#label_lec_hrs').empty();
                    $('#label_lab_hrs').empty();
                    $('#label_curr_use').append(data[0][1]);
                    $('#label_subj_code').append(data[0][2]);
                    $('#label_units').append(data[0][4]);
                    $('#label_lec_hrs').append(data[0][6]);
                    $('#label_lab_hrs').append(data[0][5]);
                }
               });

                viewSubjectsSection();
                loadfaculty(subject, type);
            });

            $('#select_faculty_type').on('change', function()
            {
                var select_type = $('#select_faculty_type').val();
                var subject = $('#select_subject').val();

                if(subject)
                {
                    loadfaculty(subject, select_type);
                }
            });


            $('#select_course').on('change', function(){
                var course_id = $('#select_course').val();
                var acad_yr = $('#select_acadyr').val();
                $.ajax({
                method:"POST",
                url:"<?php echo base_url('Transaction/get_all_sections')?>",
                dataType: "json",
                data:{course_id:course_id, acad_yr:acad_yr},
                success:function(data)
                {   
                    $('#select_year_sec').empty();
                    $('#select_year_sec').append('<option value="0" disabled selected>-Year-Section-</option>');
                    var len = data.length;
                    for (var i=0; i<len; i++)
                    {
                      var temp_val = data[i][0];
                      var temp_text = data[i][1];
                      $('#select_year_sec').append('<option value="'+temp_val +'">'+temp_text+ '</option>');
                    }
                }
               });

            });

            $('#select_year_sec').on('change', function(){
                loadSectionSubjects();
            });

            //8-20 UPDATE

            $(document).on('click', '#btn_prof_load', function(e){
                e.preventDefault();
                var fac_id = $(this).data("id");
                var acad_yr = $('#select_acadyr').val();
                var sem = $('#select_sem').val();

                $.ajax({
                method:"POST",
                url:"<?php echo base_url('Transaction/get_faculty_specs')?>",
                dataType: "json",
                data:{fac_id:fac_id, acad_yr:acad_yr, sem:sem},
                success:function(data)
                {    
                    $('#lbl_fac_id').empty();
                    $('#lbl_fac_name').empty();
                    $('#lbl_fac_type').empty();
                    $('#lbl_spec').empty();
                    $('#lbl_load').empty();
                    $('#lbl_fac_id').append('<b>FACULTY ID:</b>&nbsp;' + data[0][0]);
                    $('#lbl_fac_name').append('<b>FACULTY NAME:</b>&nbsp;' + data[0][1]);
                    $('#lbl_fac_type').append('<b>FACULTY TYPE:</b>&nbsp;' + data[0][2]);
                    $('#lbl_spec').append('<b>SPECIALIZATIONS:</b>&nbsp;' + data[0][3]);
                    $('#lbl_load').append('<b>CURRENT LOAD COUNT:</b>&nbsp;' + data[0][4]);
                    viewFacultyLoadTbl(fac_id);
                    $('#openMod').trigger('click');
                }
               });
            });

            $(document).on('click', '#btn_assign', function(e){
                e.preventDefault();
                var fac_id = $(this).data("id");
                var subj_id = $('#select_subject').val();
                var section_id = $('#select_section').val();
                var acad_yr = $('#select_acadyr').val();
                var sem = $('#select_sem').val();
                $.ajax({
                method:"POST",
                url:"<?php echo base_url('Transaction/add_subj_match')?>",
                data:{fac_id:fac_id, subj_id:subj_id, section_id:section_id, acad_yr:acad_yr, sem:sem},
                success:function(data)
                {    
                   if(data == 'INSERTED'){
                    swal("Success!", "Subject has been assigned", "success");
                    $('#select_section').val('');
                    viewSubjectsSection();
                   }
                   else{
                    swal("Error!", "Refresh the page and try again", "error");
                   }
                }
               });
            });

        });
      
    </script>
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
                            <div class="col-md-3">
                                <br>
                                <label class="control-label">Select subject:</label>
                                <select class="form-control select2" id="select_subject" >
                                    <option value="0" disabled selected>-Subjects-</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <br>
                                <label class="control-label">Available Sections:</label>
                                    <select class="form-control" id="select_section">
                                        <option value="0" disabled selected>-Sections-</option>
                                    </select>
                            </div>
                            <div class="col-md-3">
                                <p><b>CURRICULUM on USE:</b><p id="label_curr_use"></p></p>
                            </div>
                            <div class="col-md-3">
                                <p><b>SUBJECT CODE:</b><p id="label_subj_code"></p></p>
                            </div>
                            <div class="col-md-2">
                                <p><b>UNITS:</b><p id="label_units"></p></p>
                            </div>
                            <div class="col-md-2">
                                <p><b>LECTURE HOURS:</b><p id="label_lec_hrs"></p></p>
                            </div>
                            <div class="col-md-2">
                                <p><b>LAB HOURS:</b><p id="label_lab_hrs"></p></p>
                            </div>
                        </div> 
                        </div>
                            <div class="col-md-12" >
                                <div class="white-box" id="div_2">
                                <div class="col-md-12">
                                    <h3>List of available faculty</h3>
                                </div>
                                    
                                <div class="col-md-3">
                                    <br>
                                    <label  class="control-label">Filter by faculty type:</label>
                                    <select class="form-control select2" id="select_faculty_type" style="height: 40px;">
                                    <option value="0">All</option>
                                    <?php foreach($faculty_type as $r) echo '<option value="'.$r[2].'">'.$r[0].'</option>';?>
                                </select>
                                </div>
                                <div class="col-md-9">
                                    <h3 style="margin-top: 10px; margin-left: 30px" class="box-title m-b-0">Legend:</h3>
                                    <div class="row" style="margin-left: 50px; margin-top: 10px;">
                                        <div class="col-md-4">
                                            <button class="btn btn-info"><span class="ti-user"></span></button>&nbsp;
                                            <label style="margin-top: 5px;">View Subject Assignment</label>
                                        </div>
                                        <div class="col-md-4">
                                            <button class="btn btn-success"><span class="ti-arrow-right"></span></button>&nbsp;
                                            <label style="margin-top: 5px;">Assign Subject</label>
                                        </div>
                                     </div> 
                                </div>
                                <input type="hidden" id="limit" name="limit"/>
                                


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
                        <h3>View subjects assigned to section:</h3>
                        <br>
                        <div class="row">
                            <div class="col-md-3">
                                <label class="control-label">Academic Year:</label>
                                <select class="form-control select2" id="select_acadyr2">
                                    <option value="" disabled selected>-Academic Year-</option>
                                    <?php 
                                        for ($i = date("Y"); $i > 1900; $i-- ){
                                            echo '<option value ="' .$i. '&#x2010;'. ($i+1).'">' .$i. '&#x2010;'. ($i+1) .  '</option>'; 
                                        }
                                    ?>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label class="control-label">Semester:</label>
                                <select class="form-control select2" id="select_sem2">
                                    <option value="" disabled selected>-Semester-</option>
                                    <option value="1st">1st</option>
                                    <option value="2nd">2nd</option>
                                    <option value="Summer">Summer</option>
                                </select>
                            </div>
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
                                <select class="form-control" id="select_year_sec">
                                    <option value="0" disabled selected>-Year-Section-</option>
                                    </select>
                                </select>
                            </div>
                            <div class="col-md-6" style="margin-top: 10px;">
                            <h5 style="margin-left: 80px;" class="box-title m-b-0">Legend:</h5>
                            <div class="row" style="margin-left: 80px; margin-top: 10px;">
                                <div class="col-md-6">
                                    <button class="btn-sm btn btn-danger"><span class="ti-minus"></span></button>&nbsp;
                                    <label style="margin-top: 5px;">Unassign Subject</label>
                                </div>
                             </div> 
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
                                            <th>Lab Hours</th>
                                            <th>Lecture Hours</th>
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
                                        <div class="modal-body">
                                            <div  class="col-md-12" style="background-color: gray; height: 3px; margin-top: -5px;">

                                            </div>
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
                                                <h4 id="lbl_load_limit"><b>TOTAL LOAD LIMIT:</b>&nbsp; </h4>
                                                <br>
                                            </div>
                                            <div class="col-md-6">
                                                <h4 id="lbl_load"><b>Current Load Count:</b>&nbsp; </h4>
                                                <br>
                                            </div>
                                            <div  class="col-md-12" style="background-color: gray; height: 3px; margin-top: -5px;">

                                        </div>

                                        <div class="col-md-9">
                                            <h5 class="box-title m-b-0">Legend:</h5>
                                            <div class="row" style="margin-left: 50px; margin-top: 10px;">
                                                <div class="col-md-6">
                                                    <button class="btn-sm btn btn-danger"><span class="ti-minus"></span></button>&nbsp;
                                                    <label style="margin-top: 5px;">Unassign Subject</label>
                                                </div>
                                             </div> 
                                        </div>
                                            <div class="table-responsive">
                                                <br>
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

   <div class="ajax-loader">
        <img src="<?php echo base_url(); ?>assets/images/loader.gif" class="img-responsive" />
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

        // function setDivHeight(){
        //     var d2_height = $("#div_2").height();
        //     var d1_height = $("#div_1").height();
        //     if(d2_height < d1_height){
        //         $("#div_2").height(d1_height);
        //     }
        //     else{
        //         $("#div_1").height(d2_height);
        //     }
        // }

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
            var acad_yr = $('#select_acadyr2').val();
            var sem = $('#select_sem2').val();
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
            // setDivHeight();

            $("#select_section").prop("disabled", true);

            $('#select_acadyr').on('change', function()
            {
                $("#select_section").prop("disabled", false);

                var subject = $('#select_subject').val();
                var acad_yr = $('#select_acadyr').val();
                var course_id = $('#select_course').val();

                if(subject)
                {
                   viewSubjectsSection();
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
                // setDivHeight();
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

            $('#select_acadyr2').on('change', function()
            {
                var acad_yr = $('#select_acadyr2').val();
                var course_id = $('#select_course').val();
                var section = $('#select_year_sec').val();

                if(course_id && acad_yr)
                {
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

                    $('#tbl_section_loads').dataTable().fnClearTable();
                    $('#tbl_section_loads').dataTable().fnDraw();
                    $('#tbl_section_loads').dataTable().fnDestroy();
                }

                // if(course_id && acad_yr && section)
                // {
                //     loadSectionSubjects();
                // }
            });

            $('#select_course').on('change', function()
            {
                var course_id = $('#select_course').val();
                var acad_yr = $('#select_acadyr2').val();
                var section = $('#select_year_sec').val();

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

                $('#tbl_section_loads').dataTable().fnClearTable();
                $('#tbl_section_loads').dataTable().fnDraw();
                $('#tbl_section_loads').dataTable().fnDestroy();
                // if(course_id && acad_yr && section)
                // {
                //     loadSectionSubjects();
                // }

            });

            $('#select_year_sec').on('change', function(){
                loadSectionSubjects();
            });

            //8-20 UPDATE
            var fac_id_1;
            var statement = "";

            $(document).on('click', '#btn_prof_load', function(e){
                e.preventDefault();
                fac_id_1 = $(this).data("id");
                var acad_yr = $('#select_acadyr').val();
                var sem = $('#select_sem').val();
                
                $.ajax({  
                    url:"<?php echo base_url('Transaction/get_consec')?>",  
                    method:"POST",  
                    data:{faculty_id:fac_id_1},
                    async: false,
                    success:function(data)
                    {  
                        statement = data;
                    },
                    error: function (data) {
                        alert(JSON.stringify(data));
                    }
                }); 

                $.ajax({
                    method:"POST",
                    url:"<?php echo base_url('Transaction/get_faculty_specs')?>",
                    dataType: "json",
                    data:{fac_id:fac_id_1, acad_yr:acad_yr, sem:sem, eval:statement},
                    success:function(data)
                    {    
                        $('#lbl_fac_id').empty();
                        $('#lbl_fac_name').empty();
                        $('#lbl_fac_type').empty();
                        $('#lbl_spec').empty();
                        $('#lbl_load').empty();
                        $('#lbl_load_limit').empty();
                        $('#lbl_fac_id').append('<b>FACULTY ID:</b>&nbsp;' + data[0][0]);
                        $('#lbl_fac_name').append('<b>FACULTY NAME:</b>&nbsp;' + data[0][1]);
                        $('#lbl_fac_type').append('<b>FACULTY TYPE:</b>&nbsp;' + data[0][2]);
                        $('#lbl_spec').append('<b>SPECIALIZATIONS:</b>&nbsp;' + data[0][3]);
                        $('#lbl_load_limit').append('<b>TOTAL LOAD LIMIT:</b>&nbsp;' + data[0][5]);
                        $('#lbl_load').append('<b>CURRENT LOAD COUNT:</b>&nbsp;' + data[0][4]);
                        viewFacultyLoadTbl(fac_id_1);
                        $('#openMod').trigger('click');
                    }
                });
            });

            $(document).on('click', '#btn_assign', function(e)
            {
                e.preventDefault();
                var fac_id = $(this).data("id");
                var subj_id = $('#select_subject').val();
                var subj_desc = $('#select_subject option:selected').text();
                var section_id = $('#select_section').val();
                var section_desc = $('#select_section option:selected').text();
                var acad_yr = $('#select_acadyr').val();
                var sem = $('#select_sem').val();
                var fac_name = "";
                var statement2 = "";

                $.ajax({
                    method:"POST",
                    url:"<?php echo base_url('Maintenance/view_faculty')?>",
                    data:{faculty_id:fac_id},
                    async: false,
                    dataType: 'json',
                    success:function(data)
                    {    
                       fac_name = data[0][1] + ', ' + data[0][2] + ' ' + data[0][3];
                    }
                });

                if(section_id)
                {
                    $.ajax({  
                        url:"<?php echo base_url('Transaction/get_consec')?>",  
                        method:"POST",  
                        async: false,
                        data:{faculty_id:fac_id},
                        success:function(data)
                        {  
                            statement2 = data;
                        },
                        error: function (data) {
                            alert(JSON.stringify(data));
                        }
                    }); 

                    $.ajax({
                        method:"POST",
                        url:"<?php echo base_url('Transaction/get_faculty_specs')?>",
                        dataType: "json",
                        async:false,
                        data:{fac_id:fac_id, acad_yr:acad_yr, sem:sem, eval:statement2},
                        success:function(data)
                        {    
                            $('#limit').val(data[0][5]);
                        },
                        error: function (data) {
                            alert(JSON.stringify(data));
                        }
                    });

                    $('.ajax-loader').css("visibility", "visible");
                    $.ajax({
                    method:"POST",
                    url:"<?php echo base_url('Transaction/add_subj_match')?>",
                    data:{fac_id:fac_id, subj_id:subj_id, section_id:section_id, acad_yr:acad_yr, sem:sem, limit:$('#limit').val()},
                    async: false,
                    success:function(data)
                    {    
                       if(data == 'INSERTED')
                       {
                            swal("Success!", subj_desc + " has been assigned to faculty " + fac_name + " and section " + section_desc + "\n" + section_desc + " is now removed from Available Sections.", "success");
                            $('#select_section').val('');
                            viewSubjectsSection();
                            loadSectionSubjects();

                       }
                       if(data == 'OVERLOAD')
                       {
                            swal("Overload!", "You can't assign " + subj_desc + " to faculty " + fac_name + " because it will overload the load limit.\n Please choose another faculty.", "error");
                            loadSectionSubjects();
                       }
                       if(data == 'EQUAL')
                       {
                            swal("Equal!", "You can't assign anymore to faculty " + fac_name + " because it reached the load limit.\n Please choose another faculty.", "error");
                            loadSectionSubjects();
                       }
                    },
                    error: function (data) {
                        alert(JSON.stringify(data));
                    },
                    complete: function(){
                        $('.ajax-loader').css("visibility", "hidden");
                    }
                   });
                }
                else
                {
                    swal("There is no section!", "Please select a section from Available Sections.", "error"); 
                }
            });

            $(document).on('click', '#delete_match_data', function(e)
            {  
               e.preventDefault();
               var id = $(this).data("id");
               var fac_name = "";
               var section_desc = "";
               var subj_desc = "";

               $.ajax({
                    method:"POST",
                    url:"<?php echo base_url('Transaction/get_subjmatch_details')?>",
                    data:{subj_match:id},
                    dataType: 'json',
                    async: false,
                    success:function(data)
                    {    
                        subj_desc = data[0][0];
                        fac_name = data[0][1];
                        section_desc = data[0][2];
                        
                    }
                });

              swal({
                        title: "Are you sure?",
                        text: "You're about to unassign this " + fac_name + " from "+ section_desc + " and subject " + subj_desc, 
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
              })
                .then((willApprove) => {
                  if (willApprove) 
                  {
                    $.ajax({   
                      url: "<?php echo base_url('Transaction/delete_match_data')?>",
                      method: "POST",
                      data: {match_id:id, fac_id:fac_id_1},
                      dataType: 'json',
                      cache: false,
                      success: function(data) 
                      {
                        if(data['result'] == 'DELETED')
                        {
                            swal("Success!", fac_name + " has been unassigned from " + section_desc + " and subject " + subj_desc + ".\n" + section_desc + " is now added to Available Sections.", "success");
                            viewFacultyLoadTbl(fac_id_1);
                            viewSubjectsSection();
                            loadSectionSubjects();
                            $('#lbl_load').empty();
                            $('#lbl_load').append('<b>CURRENT LOAD COUNT:</b>&nbsp;' + data['total']);
                        }

                        if(data['result'] == 'NOT DELETED')
                        {
                            swal("Error!", "Refresh the page and try again", "error");
                        }       
                      },
                      error: function (data) 
                      {
                        swal("Error!", "Refresh the page and try again", "error");
                        alert(JSON.stringify(data));
                      }
                    });
                  } 
                  else 
                  {
                    swal("Cancelled");
                  }
                });
            });

        });
      
    </script>
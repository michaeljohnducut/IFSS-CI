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
                                    <h4><label id="label_curr_use"></label></h4>
                                    <h4><label id="label_subj_code"></label></h4>
                                    <h4><label id="label_units"></label></h4>
                                    <h4><label id="label_lec_hrs"></label></h4>
                                    <h4><label id="label_lab_hrs"></label></h4>
                                </div>
                                <label style="margin-top: 40px" class="control-label">Available Sections:</label>
                                <select class="form-control select2" id="select_section" style="height: 40px;">
                                    <option value="0" disabled selected>-Sections-</option>
                                </select>
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
                        <h2>DITO KO ILALAGAY YUNG NAKA-ASSIGN NA SUBJECTS KADA SECTION. WAG NYO ALISIN</h2>

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

    <script type="text/javascript">

        $(".select2").select2();
        $('.selectpicker').selectpicker();

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

                $.ajax({
                method:"POST",
                url:"<?php echo base_url('Transaction/view_subjects_details')?>",
                dataType: "json",
                data:{temp_subject:subject},
                success:function(data)
                {   
                    $('#label_curr_use').html(data[0][1]);
                    $('#label_subj_code').html(data[0][2]);
                    $('#label_units').html(data[0][4]);
                    $('#label_lec_hrs').html(data[0][6]);
                    $('#label_lab_hrs').html(data[0][5]);
                }
               });

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

        });
      
    </script>
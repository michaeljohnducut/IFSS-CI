<div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                         <h4 class="page-title">Query</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="#">Admin</a></li>
                            <li class="active">Query</li>
                        </ol>
                    </div>
                
                </div>

            <div class="row">      
                <div class="col-sm-12">
                    <div class="white-box">

                        <div class="row">
                            <h2>Queries</h2>
                            <div  class="col-md-12" style="background-color: gray; height: 3px; margin-top: -5px;">

                            </div>
                            <br>
                            <br>


                        </div>
                        <div class="row">
                            <div class="col-md-3" hidden="">
                                <label class="control-label">Email:</label>
                                <input id="fac_email" type="email" class="form-control" readonly>
                            </div>
                            <div class="col-md-3">
                                <label class="control-label">Acad Year:</label>
                                <select class="form-control select2" id="acad_year_drop">
                                    <option value="0">-ACAD YEAR-</option>
                                        <?php 
                                            for ($i = date("Y"); $i > 1900; $i-- ){
                                                echo '<option value ="' .$i. '&#x2010;'. ($i+1).'">' .$i. '&#x2010;'. ($i+1) .  '</option>'; 
                                            }
                                        ?>
                                </select>
                                
                            </div>
                            <div class="col-md-3">
                                <label class="control-label">Semester:</label>
                                <select class="form-control select2" id="sem_drop">
                                    <option value="0">-SELECT SEM-</option>
                                    <option value="1st">1st</option>
                                    <option value="2nd">2nd</option> 
                                    <option value="summer">Summer</option>        
                                </select>
                                
                            </div>
                        </div>
                        <br>
                    </div>
                </div>
            </div>

            <div class="row">      
                <div class="col-sm-12">
                    <div class="white-box">

                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="vtabs">
                     <ul class="nav tabs-vertical" >
                         <style>
                             .nav-item {
                              background-color:#fff; 
                              border:0px;
                              }
                        </style>
                    <li class="tab nav-item active">
                     <a data-toggle="tab" class="nav-link" href="#fac_query" aria-expanded="true"> <span class="visible-xs"><i class="ti-home"></i></span> <span class="hidden-xs">Faculty</span> </a>
                    </li>
                   <li class="tab nav-item" style="background-color:#fff; border:0px;">
                     <a data-toggle="tab" class="nav-link" href="#section_query" aria-expanded="false"> <span class="visible-xs"><i class="ti-user"></i></span> <span class="hidden-xs">Sections</span> </a>
                  </li>
                  <li class="tab nav-item" style="background-color:#fff; border:0px;">
                     <a data-toggle="tab" class="nav-link" href="#room_query" aria-expanded="false"> <span class="visible-xs"><i class="ti-user"></i></span> <span class="hidden-xs">Rooms/Labs</span> </a>
                  </li>
                  <li class="tab nav-item" style="background-color:#fff; border:0px;">
                     <a data-toggle="tab" class="nav-link" href="#subject_query" aria-expanded="false"> <span class="visible-xs"><i class="ti-user"></i></span> <span class="hidden-xs">Subjects</span> </a>
                  </li>
                   </ul>
                   <div class="tab-content" style="width: 100%">
                      <div id="fac_query" class="tab-pane active">
                         <div class="white-box" style="padding-top:0%; padding-bottom:0%;">
                            <div id="fac_members_div">
                                <div class="col-md-12">
                                    <h3>Select a Query</h3>
                                    <select class="form-control select2" id="query_faculty">
                                        <option value="0" selected="" disabled="">Queries</option>
                                        <option value="1">Available faculty members</option>
                                        <option value="2">Top 10 Faculty Members with highest evaluation</option>
                                        <option value="3">Faculty Members with consecutive satisfactory ratings</option>
                                        <!-- <option value="4">Teaching Assignments with no Schedules</option> -->
                                        <option value="5">Top 10 faculty members with highest total loads</option>
                                    </select>
                                </div>
                                <div class="col-md-12" id="fac_times">
                                    <div class="col-md-4">
                                        <br>
                                        <label class="control-label">Start time:</label>
                                        <input type="time" id="query_start_fac" class="form-control">
                                    </div>
                                    <div class="col-md-4">
                                        <br>
                                        <label class="control-label">End time:</label>
                                        <input type="time" id="query_end_fac" class="form-control">
                                    </div>
                                    <div class="col-md-4">
                                        <br>
                                        <label class="control-label">Day:</label>
                                        <select class="form-control select2" id="query_day_fac">
                                            <option value="0" selected="" disabled="">Day</option>
                                            <option value="Monday">Monday</option>
                                            <option value="Tuesday">Tuesday</option>
                                            <option value="Wednesday">Wednesday</option>
                                            <option value="Thursday">Thursday</option>
                                            <option value="Friday">Friday</option>
                                            <option value="Saturday">Saturday</option>
                                            <option value="Sunday">Sunday</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <div class="clearfix"></div>
                </div>
                <div id="section_query" class="tab-pane">
                    <div class="white-box" style="padding-top:0%; padding-bottom:0%;">
                        <div>
                            <div class="col-md-12">
                                    <h3>Select a Query</h3>
                                    <select class="form-control select2" id="query_section">
                                        <option value="0" selected="" disabled="">Queries</option>
                                        <option value="1">Available Sections</option>
                                        <!-- <option value="2">Sections with incomplete schedules</option> -->
                                    </select>
                                </div>
                                <div class="col-md-12" id="sec_times">
                                     <div class="col-md-4">
                                        <br>
                                        <label class="control-label">Start time:</label>
                                        <input type="time" id="query_start_sec" class="form-control">
                                    </div>
                                    <div class="col-md-4">
                                        <br>
                                        <label class="control-label">End time:</label>
                                        <input type="time" id="query_end_sec" class="form-control">
                                    </div>
                                    <div class="col-md-4">
                                        <br>
                                        <label class="control-label">Day:</label>
                                        <select class="form-control select2" id="query_day_sec">
                                            <option value="0" selected="" disabled="">Day</option>
                                            <option value="Monday">Monday</option>
                                            <option value="Tuesday">Tuesday</option>
                                            <option value="Wednesday">Wednesday</option>
                                            <option value="Thursday">Thursday</option>
                                            <option value="Friday">Friday</option>
                                            <option value="Saturday">Saturday</option>
                                            <option value="Sunday">Sunday</option>
                                        </select>
                                    </div>
                                </div>

                        </div>
                    </div>
                </div>
                <div id="room_query" class="tab-pane">
                    <div class="white-box" style="padding-top:0%; padding-bottom:0%;">
                        <div>
                            <div class="col-md-12">
                                    <h3>Select a Query</h3>
                                    <select class="form-control select2" id="query_rooms">
                                        <option value="0" selected="" disabled="">Queries</option>
                                        <option value="1">Available Rooms and Labs</option>
                                        <option value="2">Top 10 used rooms / labs</option>
                                    </select>
                                </div>
                                <div class="col-md-12" id="room_times">
                                     <div class="col-md-4">
                                        <br>
                                        <label class="control-label">Start time:</label>
                                        <input type="time" id="query_start_room" class="form-control">
                                    </div>
                                    <div class="col-md-4">
                                        <br>
                                        <label class="control-label">End time:</label>
                                        <input type="time" id="query_end_room" class="form-control">
                                    </div>
                                    <div class="col-md-4">
                                        <br>
                                        <label class="control-label">Day:</label>
                                        <select class="form-control select2" id="query_day_room">
                                            <option value="0" selected="" disabled="">Day</option>
                                            <option value="Monday">Monday</option>
                                            <option value="Tuesday">Tuesday</option>
                                            <option value="Wednesday">Wednesday</option>
                                            <option value="Thursday">Thursday</option>
                                            <option value="Friday">Friday</option>
                                            <option value="Saturday">Saturday</option>
                                            <option value="Sunday">Sunday</option>
                                        </select>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
                <div id="subject_query" class="tab-pane">
                    <div class="white-box" style="padding-top:0%; padding-bottom:0%;">
                        <div>
                            <div class="col-md-12">
                                    <h3>Select a Query</h3>
                                    <select class="form-control select2" id="query_subjects">
                                        <option value="0" selected="" disabled="">Queries</option>
                                        <option value="1">Unschedules Subjects</option>
                                        <option value="2">Unassigned Subjects</option>
                                    </select>
                                </div>
                                <!-- <div class="col-md-16" id="subj_type">
                                     <div class="col-md-12">
                                        <br>
                                        <input type="radio" name="edit_major" value="1" checked>
                                        <label class="control-label">Major Subjects</label>
                                        &nbsp&nbsp
                                        <input type="radio" name="edit_major" value="0">
                                        <label class="control-label">Minor Subjects</label>
                                    </div>
                                </div> -->
                        </div>
                    </div>
                </div>
             </div>
          </div>  
            
        </div>
        <div class="col-md-6" style="padding-top: 30px;">
            <h3>Results</h3>
            <textarea style="font-size: 16px;" readonly="" class="form-control" rows="20" cols="3" id="txtResult"></textarea>
        </div>
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

    <script type="text/javascript">

    //FUNCTIONS 
    function queryAvailProf(){
        var sem = $('#sem_drop').val();
        var acad_year = $('#acad_year_drop').val();
        var start_time = $('#query_start_fac').val();
        var end_time = $('#query_end_fac').val();
        var day = $('#query_day_fac').val();

         if (sem != 0 && acad_year != 0 && start_time != null && end_time != null && day != 0)
         {
            $.ajax({  
                url:"<?php echo base_url('Transaction/query_avail_prof')?>", 
                method:"POST", 
                data:{ acad_year:acad_year, sem:sem, start_time:start_time, end:end_time, day:day}, 
                dataType: "json",
                success:function(data){
                    $('#txtResult').empty();
                    var len = data.length;
                    for (var x = 0; x < len; x++)
                    {
                        $('#txtResult').append((x+1) + '. ' + data[x][0] + '\n');
                    }

                    if(len == 0)
                    {
                        $('#txtResult').append('--NO RESULTS--');
                    }
                },
                error: function (data) {
                // alert(JSON.stringify(data));
                }
            });
         }
    }

    function queryAvailSections(){
        var sem = $('#sem_drop').val();
        var acad_year = $('#acad_year_drop').val();
        var start_time = $('#query_start_sec').val();
        var end_time = $('#query_end_sec').val();
        var day = $('#query_day_sec').val();

         if (sem != 0 && acad_year != 0 && start_time != null && end_time != null && day != 0)
         {
            $.ajax({  
                url:"<?php echo base_url('Transaction/query_avail_sections')?>", 
                method:"POST", 
                data:{ acad_year:acad_year, sem:sem, start_time:start_time, end:end_time, day:day}, 
                dataType: "json",
                success:function(data){
                    $('#txtResult').empty();
                    var len = data.length;
                    for (var x = 0; x < len; x++)
                    {   
                        var section = data[x][0] + ' ' + data[x][1][0] + ' - ' + data[x][2];
                        $('#txtResult').append((x+1) + '. ' + section + '\n');
                    }

                    if(len == 0)
                    {
                        $('#txtResult').append('--NO RESULTS--');
                    }
                },
                error: function (data) {
                // alert(JSON.stringify(data));
                }
            });
         }
    }

    function queryAvailRooms(){
        var sem = $('#sem_drop').val();
        var acad_year = $('#acad_year_drop').val();
        var start_time = $('#query_start_room').val();
        var end_time = $('#query_end_room').val();
        var day = $('#query_day_room').val();

         if (sem != 0 && acad_year != 0 && start_time != null && end_time != null && day != 0)
         {
            $.ajax({  
                url:"<?php echo base_url('Transaction/query_avail_rooms')?>", 
                method:"POST", 
                data:{ acad_year:acad_year, sem:sem, start_time:start_time, end:end_time, day:day}, 
                dataType: "json",
                success:function(data){
                    $('#txtResult').empty();
                    var len = data.length;
                    for (var x = 0; x < len; x++)
                    {   
                        $('#txtResult').append((x+1) + '. ' + data[x][1] + '\n');
                    }

                    if(len == 0)
                    {
                        $('#txtResult').append('--NO RESULTS--');
                    }
                },
                error: function (data) {
                // alert(JSON.stringify(data));
                }
            });
         }
    }

    // KUYA! ETO UNG FUNCTION NA YUN!
    function queryConsecFaculty()
    {
        $.ajax({  
                url:"<?php echo base_url('Transaction/query_faculty_consec')?>", 
                method:"POST", 
                dataType: "json",
                success:function(data){
                    $('#txtResult').empty();
                    var len = data.length;
                    for (var x = 0; x < len; x++)
                    {   
                        $('#txtResult').append((x+1) + '. ' + data[x] + '\n');
                    }

                    if(len == 0)
                    {
                        $('#txtResult').append('--NO RESULTS--');
                    }
                },
                error: function (data) {
                // alert(JSON.stringify(data));
                }
            });
    }

    function getSubjType(picked_type)
    {
        if(picked_type == 1)
                {
                    var acad_year = $('#acad_year_drop').val();
                    var sem = $('#sem_drop').val();
                    $.ajax({  
                        url:"<?php echo base_url('Transaction/query_unsched_load')?>", 
                        method:"POST", 
                        data:{ acad_year:acad_year, sem:sem}, 
                        dataType: "json",
                        success:function(data){
                            $('#txtResult').empty();
                            var len = data.length;
                            for (var x = 0; x < len; x++)
                            {   
                                var name = data[x][0] + ', ' + data[x][1] + ' ' + data[x][2];
                                var section = data[x][3] + ' ' + data[x][4][0] + ' - ' + data[x][5];
                                var subject = data[x][6];
     
                                $('#txtResult').append((x+1) + '. ' + section + ' - ' + subject + ' - ' + name +   '\n');
                            }

                            if(len == 0)
                            {
                                $('#txtResult').append('--NO RESULTS--');
                            }
                        },
                        error: function (data) {
                        // alert(JSON.stringify(data));
                        }
                    });
                }

                if(picked_type == 0)
                {
                    var acad_year = $('#acad_year_drop').val();
                    var sem = $('#sem_drop').val();
                    $.ajax({  
                        url:"<?php echo base_url('Transaction/query_unsched_minor')?>", 
                        method:"POST", 
                        data:{ acad_year:acad_year, sem:sem}, 
                        dataType: "json",
                        success:function(data){
                            $('#txtResult').empty();
                            var len = data.length;
                            for (var x = 0; x < len; x++)
                            {   
                                var section = data[x][0] + ' ' + data[x][1][0] + ' - ' + data[x][2];
                                var subject = data[x][3];
     
                                $('#txtResult').append((x+1) + '. ' + section + ' - ' + subject +   '\n');
                            }

                            if(len == 0)
                            {
                                $('#txtResult').append('--NO RESULTS--');
                            }
                        },
                        error: function (data) {
                        // alert(JSON.stringify(data));
                        }
                    });
                }
    }


    //SELECT2
      $(".select2").select2();
      $('.selectpicker').selectpicker();

      $(document).ready(function(){

        $('#fac_times').hide();
        $('#room_times').hide();
        $('#sec_times').hide();

        //FACULTY QUERIES
        $('#query_start_fac').on('blur', function(){
            var picked_query = $('#query_faculty').val();
            if(picked_query == 1)
            {
                queryAvailProf();
            }
        });

        $('#fac_query').trigger('click', function(){
            $('#txtResult').empty();
        });

        $('#section_query').trigger('click', function(){
            $('#txtResult').empty();
        });

        $('#room_query').trigger('click', function(){
            $('#txtResult').empty();
        });

        $('#query_end_fac').on('blur', function(){
            var picked_query = $('#query_faculty').val();
            if(picked_query == 1)
            {
                queryAvailProf();
            }
        });

        $('#query_day_fac').on('change', function(){
            var picked_query = $('#query_faculty').val();
            if(picked_query == 1)
            {
                queryAvailProf();
            }
        });

        //SECTION QUERIES====================================

        $('#query_start_sec').on('blur', function(){
            var picked_query = $('#query_section').val();
            if(picked_query == 1)
            {
                queryAvailSections();
            }
        });

        $('#query_end_sec').on('blur', function(){
            var picked_query = $('#query_section').val();
            if(picked_query == 1)
            {
                queryAvailSections();
            }
        });

        $('#query_day_sec').on('change', function(){
            var picked_query = $('#query_section').val();
            if(picked_query == 1)
            {
                queryAvailSections();
            }
        });

        $('#query_section').on('change', function(){
            var picked_query = $('#query_section').val();
            if(picked_query == 1)
            {
                queryAvailSections();
                $('#sec_times').show();
            }
            else
            {
                $('#sec_times').hide();
            }
            if(picked_query == 2)
            {
                var acad_year = $('#acad_year_drop').val();
                var sem = $('#sem_drop').val();
                $.ajax({  
                    url:"<?php echo base_url('Transaction/query_inc_sec')?>", 
                    method:"POST", 
                    data:{ acad_year:acad_year, sem:sem}, 
                    dataType: "json",
                    success:function(data){
                        // $('#txtResult').empty();
                        // var len = data.length;
                        // for (var x = 0; x < len; x++)
                        // {   
                        //     var name = data[x][0] + ', ' + data[x][1] + ' ' + data[x][2];
                        //     var rating = data[x][3].substring(0,5);

                        //     $('#txtResult').append((x+1) + '. ' + name + ' - ' + rating + '%\n');
                        // }
                        alert(data);
                    },
                    error: function (data) {
                    // alert(JSON.stringify(data));
                    }
                });
            }
        });

        //===================================================

        $('#query_faculty').on('change', function(){
            var picked_query = $('#query_faculty').val();
            if(picked_query == 1)
            {
                queryAvailProf();
                $('#fac_times').show();
            }
            else
            {
                $('#fac_times').hide();
            }

            //TOP 10 EVALUATION
            if(picked_query == 2)
            {
                var acad_year = $('#acad_year_drop').val();
                var sem = $('#sem_drop').val();
                $.ajax({  
                    url:"<?php echo base_url('Transaction/query_top_eval')?>", 
                    method:"POST", 
                    data:{ acad_year:acad_year, sem:sem}, 
                    dataType: "json",
                    success:function(data){
                        $('#txtResult').empty();
                        var len = data.length;
                        for (var x = 0; x < len; x++)
                        {   
                            var name = data[x][0] + ', ' + data[x][1] + ' ' + data[x][2];
                            var rating = data[x][3].substring(0,5);

                            $('#txtResult').append((x+1) + '. ' + name + ' - ' + rating + '%\n');
                        }

                        if(len == 0)
                        {
                            $('#txtResult').append('--NO RESULTS--');
                        }
                    },
                    error: function (data) {
                    // alert(JSON.stringify(data));
                    }
                });
            }

            if(picked_query == 3)
            {
                queryConsecFaculty();
            }

            //SUBJECT MATCH WITH NO SCHEDULES
            if(picked_query == 4)
            {
                var acad_year = $('#acad_year_drop').val();
                var sem = $('#sem_drop').val();
                $.ajax({  
                    url:"<?php echo base_url('Transaction/query_unsched_load')?>", 
                    method:"POST", 
                    data:{ acad_year:acad_year, sem:sem}, 
                    dataType: "json",
                    success:function(data){
                        $('#txtResult').empty();
                        var len = data.length;
                        for (var x = 0; x < len; x++)
                        {   
                            var name = data[x][0] + ', ' + data[x][1] + ' ' + data[x][2];
                            var section = data[x][3] + ' ' + data[x][4][0] + ' - ' + data[x][5];
                            var subject = data[x][6];
 
                            $('#txtResult').append((x+1) + '. ' + name + ' - ' + section + ' - ' + subject +   '\n');
                        }

                        if(len == 0)
                        {
                            $('#txtResult').append('--NO RESULTS--');
                        }
                    },
                    error: function (data) {
                    // alert(JSON.stringify(data));
                    }
                });
            }

            //QuERY OF TOP 10 LOADS
            if(picked_query == 5)
            {
                var acad_year = $('#acad_year_drop').val();
                var sem = $('#sem_drop').val();
                $.ajax({  
                    url:"<?php echo base_url('Transaction/query_top_loads')?>", 
                    method:"POST", 
                    data:{ acad_year:acad_year, sem:sem}, 
                    dataType: "json",
                    success:function(data){
                        $('#txtResult').empty();
                        var len = data.length;
                        for (var x = 0; x < len; x++)
                        {   
                            var name = data[x][0];
                            var loads = data[x][1];
                            $('#txtResult').append((x+1) + '. ' + name + ' - ' + loads +   ' hours\n');
                        }

                        if(len == 0)
                        {
                            $('#txtResult').append('--NO RESULTS--');
                        }
                    },
                    error: function (data) {
                    // alert(JSON.stringify(data));
                    }
                });
            }

        });


        //QUERIES ON ROOMS
        $('#query_rooms').on('change', function(){
            var picked_query = $('#query_rooms').val();

            $('#query_start_room').on('blur',function(){
                queryAvailRooms();
            });

            $('#query_end_room').on('blur',function(){
                queryAvailRooms();
            });

            $('#query_day_room').on('change',function(){
                queryAvailRooms();
            });

            if(picked_query == 1)
            {
                queryAvailRooms();
                $('#room_times').show();
            }
            else
            {
                $('#room_times').hide();
            }

            if(picked_query == 2)
            {
                var acad_year = $('#acad_year_drop').val();
                var sem = $('#sem_drop').val();
                $.ajax({  
                    url:"<?php echo base_url('Transaction/query_top_used_room')?>", 
                    method:"POST", 
                    data:{ acad_year:acad_year, sem:sem}, 
                    dataType: "json",
                    success:function(data){
                        $('#txtResult').empty();
                        var len = data.length;
                        for (var x = 0; x < len; x++)
                        {   
                            $('#txtResult').append((x+1) + '. ' +  data[x][0] +   '\n');
                        }

                        if(len == 0)
                        {
                            $('#txtResult').append('--NO RESULTS--');
                        }
                    },
                    error: function (data) {
                    // alert(JSON.stringify(data));
                    }
                });
            }
        });

        //QUERIES ON SUBJECTS
        $('#query_subjects').on('change', function(){
            var picked_query = $('#query_subjects').val();
            var picked_type = $("input[name='edit_major']:checked").val();

            $('input[type=radio][name=edit_major]').change(function() 
            {
                picked_type = $("input[name='edit_major']:checked").val();
                getSubjType(picked_type);
            });

            if(picked_query == 1)
            {
                getSubjType(1);
            }

            if(picked_query == 2)
            {
                var acad_year = $('#acad_year_drop').val();
                var sem = $('#sem_drop').val();
                $.ajax({  
                        url:"<?php echo base_url('Transaction/query_unassign_load')?>", 
                        method:"POST", 
                        data:{ acad_year:acad_year, sem:sem}, 
                        dataType: "json",
                        success:function(data){
                            $('#txtResult').empty();
                            var len = data.length;
                            for (var x = 0; x < len; x++)
                            {   
                                var section = data[x][0] + ' ' + data[x][1][0] + ' - ' + data[x][2];
                                var subject = data[x][3];
     
                                $('#txtResult').append((x+1) + '. ' + section + ' - ' + subject +   '\n');
                            }

                            if(len == 0)
                            {
                                $('#txtResult').append('--NO RESULTS--');
                            }
                        },
                        error: function (data) {
                        // alert(JSON.stringify(data));
                        }
                });
            }

        });

      });

    </script>
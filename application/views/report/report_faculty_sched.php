<div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                         <h4 class="page-title">Reports</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="#">Admin</a></li>
                            <li><a href="#">Reports</a></li>
                            <li class="active">Teaching Assignments</li>
                        </ol>
                    </div>
                
                </div>

            <div class="row">      
                <div class="col-sm-12">
                    <div class="white-box">                        
                        <div class="row">
                            <h2>Reports on Teaching Assignments</h2>
                            <div  class="col-md-12" style="background-color: gray; height: 3px; margin-top: -5px;">
                            </div>
                            <br>
                            <br>
                        </div>

                        <div class="row">
                            <div class="col-md-3">
                                <label class="control-label">Select Faculty:</label>
                                <select class="form-control" id="select_faculty">
                                    <option value="">-SELECT FACULTY-</option>
                                    <?php foreach($faculty as $r) echo '<option value="'.$r[7].'">'.$r[1].', '.$r[2].' '.$r[3].'</option>';?>
                                </select>
                                
                            </div>
                            <div class="col-md-2">
                                <label class="control-label">Select A.Y.</label>
                                <select class="form-control" id="select_acadyr">
                                    <option value="">-SELECT ACAD YEAR-</option>
                                    <?php 
                                        for ($i = date("Y"); $i > 1900; $i-- ){
                                            echo '<option value ="' .$i. '&#x2010;'. ($i+1).'">' .$i. '&#x2010;'. ($i+1) .  '</option>'; 
                                        }
                                    ?>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <label class="control-label">Select Semester</label>
                                <select class="form-control" id="select_sem">
                                    <option value="">-SELECT SEM-</option>
                                    <option value="1st">1st</option>
                                    <option value="2nd">2nd</option>
                                    <option value="Summer">Summer</option>
                                </select>    
                            </div>
                            <div class="col-md-5" style="text-align: right;">
                                <br>
                                <button type="button" class="btn btn-info" id="btn_pdf" onclick="pdf_()" style="margin-top: 10px;">Print Teaching Assignment</button>
                            </div>
                        </div>
                        <br><br>
                        <div  class="col-md-12" style="background-color: gray; height: 3px; margin-top: -5px;">

                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-6">
                                <p><b>EMP NO:</b>&nbsp;&nbsp;&nbsp;<span id="emp_no"></span></p>
                                <p><b>EMP NAME:</b>&nbsp;&nbsp;&nbsp;<span id="emp_name"></span></p>
                                <p><b>EMP STATUS:</b>&nbsp;&nbsp;&nbsp;<span id="emp_stat"></span></p>
                            </div>

                            <div class="col-md-6">
                                <p><b>COLLEGE:</b>&nbsp;&nbsp;&nbsp;<span id="emp_college"></span></p>
                                <p><b>DEPT CODE:</b>&nbsp;&nbsp;&nbsp;<span id="emp_dept_code"></span></p>
                                <p><b>DEPARTMENT:</b>&nbsp;&nbsp;&nbsp;<span id="emp_dept"></span></p>
                            </div>
                            
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-3">
                                <h4><b>REGULAR LOAD</b></h4>
                            </div>
                        </div>
                        <div class="row">
                            <table class="table color-table inverse-table table-striped table-bordered table-condensed">
                                <thead>
                                    <tr>
                                        <th style="width: 120px;">Subject Code</th>
                                        <th style="width: 400px;">Subject Description</th>
                                        <th>Units</th>
                                        <th>Year & Section</th>
                                        <th>Time</th>
                                        <th>Day/s</th>
                                        <th>Room</th>
                                    </tr>
                                </thead>

                                <tbody id="regular_load">
                                    
                                </tbody>       
                            </table>   
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <h5><b>Total REGULAR LOAD:</b>&nbsp;&nbsp;&nbsp;<span id="total_regular"></span></h5>
                            </div>
                        </div>
                        <br><br>
                        <div class="row">
                            <div class="col-md-3">
                                <h4><b>PART-TIME</b></h4>
                            </div>
                        </div>
                        <div class="row">
                            <table class="table color-table inverse-table table-striped table-bordered table-condensed">
                                <thead>
                                    <tr>
                                        <th style="width: 120px;">Subject Code</th>
                                        <th style="width: 400px;">Subject Description</th>
                                        <th>Units</th>
                                        <th>Year & Section</th>
                                        <th>Time</th>
                                        <th>Day/s</th>
                                        <th>Room</th>
                                    </tr>
                                </thead>

                                <tbody id="part_time">
                                    
                                </tbody>       
                            </table>   
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <h5><b>Total PART-TIME LOAD:</b>&nbsp;&nbsp;&nbsp;<span id="total_pt"></span></h5>
                            </div>
                        </div>
                        <br><br>
                        <div class="row">
                            <div class="col-md-3">
                                <h4><b>TEACHING LOAD PER DAY (HOURS)</b></h4>
                            </div>
                        </div>
                        <div class="row">
                            <table class="table color-table inverse-table table-striped table-bordered table-condensed">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Mon</th>
                                        <th>Tues</th>
                                        <th>Wed</th>
                                        <th>Thur</th>
                                        <th>Fri</th>
                                        <th>Sat</th>
                                        <th>Sun</th>
                                    </tr>
                                </thead>

                                <tbody id="teaching_load">
                                    <tr>
                                        <th>REGULAR</th>
                                        <td id="reg_mon"></td>
                                        <td id="reg_tues"></td>
                                        <td id="reg_wed"></td>
                                        <td id="reg_thu"></td>
                                        <td id="reg_fri"></td>
                                        <td id="reg_sat"></td>
                                        <td id="reg_sun"></td>
                                    </tr>
                                    <tr>
                                        <th>PART-TIME</th>
                                        <td id="pt_mon"></td>
                                        <td id="pt_tues"></td>
                                        <td id="pt_wed"></td>
                                        <td id="pt_thu"></td>
                                        <td id="pt_fri"></td>
                                        <td id="pt_sat"></td>
                                        <td id="pt_sun"></td>
                                    </tr>
                                    <tr>
                                        <th>TOTAL</th>
                                        <td id="tot_mon"></td>
                                        <td id="tot_tues"></td>
                                        <td id="tot_wed"></td>
                                        <td id="tot_thu"></td>
                                        <td id="tot_fri"></td>
                                        <td id="tot_sat"></td>
                                        <td id="tot_sun"></td>
                                    </tr>
                                </tbody>       
                            </table>   
                        </div>
                        <br><br>
                        <div class="row">
                            <div class="col-md-3">
                                <h4><b>OFFICIAL TIME/ADVISING TIME</b></h4>
                            </div>
                        </div>
                        <div class="row">
                            <table class="table color-table inverse-table table-striped table-bordered table-condensed">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Mon</th>
                                        <th>Tues</th>
                                        <th>Wed</th>
                                        <th>Thur</th>
                                        <th>Fri</th>
                                        <th>Sat</th>
                                        <th>Sun</th>
                                    </tr>
                                </thead>

                                <tbody id="official_advising">
                                    <tr>
                                        <th>OFFICIAL TIME</th>
                                        <td id="oh_mon"></td>
                                        <td id="oh_tues"></td>
                                        <td id="oh_wed"></td>
                                        <td id="oh_thu"></td>
                                        <td id="oh_fri"></td>
                                        <td id="oh_sat"></td>
                                        <td id="oh_sun"></td>
                                    </tr>
                                    <tr>
                                        <th>ADVISING TIME</th>
                                        <td id="at_mon"></td>
                                        <td id="at_tues"></td>
                                        <td id="at_wed"></td>
                                        <td id="at_thu"></td>
                                        <td id="at_fri"></td>
                                        <td id="at_sat"></td>
                                        <td id="at_sun"></td>
                                    </tr>
                                </tbody>       
                            </table>   
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

        function pdf_()
        {
            var acadyr = $('#select_acadyr').val();
            var sem = $('#select_sem').val();
            var faculty = $('#select_faculty').val();
            window.open('<?php echo base_url("Report/faculty_sched_pdf")?>'+'?acadyr='+acadyr+'&sem='+sem+'&faculty='+faculty);
        }

        function enabled_button(acadyr, sem, faculty)
        {
            if(acadyr && sem && faculty)
            {
                $('#btn_pdf').prop("disabled", false);
            }
        }

        function empty_table_reg()
        {
            $('#reg_mon').empty();
            $('#reg_tues').empty();
            $('#reg_wed').empty();
            $('#reg_thu').empty();
            $('#reg_fri').empty();
            $('#reg_sat').empty();
            $('#reg_sun').empty();
        }

        function empty_table_pt()
        {
            $('#pt_mon').empty();
            $('#pt_tues').empty();
            $('#pt_wed').empty();
            $('#pt_thu').empty();
            $('#pt_fri').empty();
            $('#pt_sat').empty();
            $('#pt_sun').empty();
        }

        function empty_table_tot()
        {
            $('#tot_mon').empty();
            $('#tot_tues').empty();
            $('#tot_wed').empty();
            $('#tot_thu').empty();
            $('#tot_fri').empty();
            $('#tot_sat').empty();
            $('#tot_sun').empty();
        }

        function empty_table_oh()
        {
            $('#oh_mon').empty();
            $('#oh_tues').empty();
            $('#oh_wed').empty();
            $('#oh_thu').empty();
            $('#oh_fri').empty();
            $('#oh_sat').empty();
            $('#oh_sun').empty();
        }

        function empty_table_at()
        {
            $('#at_mon').empty();
            $('#at_tues').empty();
            $('#at_wed').empty();
            $('#at_thu').empty();
            $('#at_fri').empty();
            $('#at_sat').empty();
            $('#at_sun').empty();
        }


        function fetch_load(acadyr, sem, faculty)
        {
            if(acadyr && sem && faculty)
            {
                $.ajax({  
                    url:"<?php echo base_url('Report/get_teaching_load')?>", 
                    method:"POST",
                    dataType: 'json',
                    data:{acadyr:acadyr, sem:sem, faculty:faculty, load:'R'},
                    success:function(data){  
                        var html = '';
                        var i;

                        for(i=0; i<data.length; i++)
                        {
                            html += '<tr>'+
                                        '<td>'+data[i][0]+'</td>'+
                                        '<td>'+data[i][1]+'</td>'+
                                        '<td>'+data[i][2]+'</td>'+
                                        '<td>'+data[i][3]+'</td>'+
                                        '<td>'+data[i][4]+'</td>'+
                                        '<td>'+data[i][5]+'</td>'+
                                        '<td>'+data[i][6]+'</td>'+
                                    '</tr>';
                        }

                        $('#regular_load').html(html);
                        
                    },
                    error: function (data) {
                        alert(JSON.stringify(data));
                    }
               });

                $.ajax({  
                    url:"<?php echo base_url('Report/get_teaching_load')?>", 
                    method:"POST",
                    dataType: 'json',
                    data:{acadyr:acadyr, sem:sem, faculty:faculty, load:'PT'},
                    success:function(data){  
                        var html = '';
                        var i;

                        for(i=0; i<data.length; i++)
                        {
                            html += '<tr>'+
                                        '<td>'+data[i][0]+'</td>'+
                                        '<td>'+data[i][1]+'</td>'+
                                        '<td>'+data[i][2]+'</td>'+
                                        '<td>'+data[i][3]+'</td>'+
                                        '<td>'+data[i][4]+'</td>'+
                                        '<td>'+data[i][5]+'</td>'+
                                        '<td>'+data[i][6]+'</td>'+
                                    '</tr>';
                        }

                        $('#part_time').html(html);
                        
                    },
                    error: function (data) {
                        alert(JSON.stringify(data));
                    }
               });

               $.ajax({  
                    url:"<?php echo base_url('Report/get_teaching_load_total')?>", 
                    method:"POST",
                    dataType: 'json',
                    data:{acadyr:acadyr, sem:sem, faculty:faculty, load:'R'},
                    success:function(data){  

                        $('#total_regular').html(data[0][0]);
                        
                    },
                    error: function (data) {
                        alert(JSON.stringify(data));
                    }
               });

                $.ajax({  
                    url:"<?php echo base_url('Report/get_teaching_load_total')?>", 
                    method:"POST",
                    dataType: 'json',
                    data:{acadyr:acadyr, sem:sem, faculty:faculty, load:'PT'},
                    success:function(data){  

                        $('#total_pt').html(data[0][0]);

                    },
                    error: function (data) {
                        alert(JSON.stringify(data));
                    }
               });

                $.ajax({  
                    url:"<?php echo base_url('Report/get_teaching_load_perday')?>", 
                    method:"POST",
                    dataType: 'json',
                    data:{acadyr:acadyr, sem:sem, faculty:faculty},
                    success:function(data){  
                        var i;

                        for(i=0; i<data.length; i++)
                        {
                            if(data[i][0] == 'Monday' && data[i][2] == 'R')
                            {
                                $('#reg_mon').html(data[i][1]);
                            }

                            if(data[i][0] == 'Tuesday' && data[i][2] == 'R')
                            {
                                $('#reg_tues').html(data[i][1]);
                            }

                            if(data[i][0] == 'Wednesday' && data[i][2] == 'R')
                            {
                                $('#reg_wed').html(data[i][1]);
                            }

                            if(data[i][0] == 'Thursday' && data[i][2] == 'R')
                            {
                                $('#reg_thu').html(data[i][1]);
                            }

                            if(data[i][0] == 'Friday' && data[i][2] == 'R')
                            {
                                $('#reg_fri').html(data[i][1]);
                            }

                            if(data[i][0] == 'Saturday' && data[i][2] == 'R')
                            {
                                $('#reg_sat').html(data[i][1]);
                            }

                            if(data[i][0] == 'Sunday' && data[i][2] == 'R')
                            {
                                $('#reg_sun').html(data[i][1]);
                            }

                            if(data[i][0] == 'Monday' && data[i][2] == 'PT')
                            {
                                $('#pt_mon').html(data[i][1]);
                            }

                            if(data[i][0] == 'Tuesday' && data[i][2] == 'PT')
                            {
                                $('#pt_tues').html(data[i][1]);
                            }

                            if(data[i][0] == 'Wednesday' && data[i][2] == 'PT')
                            {
                                $('#pt_wed').html(data[i][1]);
                            }

                            if(data[i][0] == 'Thursday' && data[i][2] == 'PT')
                            {
                                $('#pt_thu').html(data[i][1]);
                            }

                            if(data[i][0] == 'Friday' && data[i][2] == 'PT')
                            {
                                $('#pt_fri').html(data[i][1]);
                            }

                            if(data[i][0] == 'Saturday' && data[i][2] == 'PT')
                            {
                                $('#pt_sat').html(data[i][1]);
                            }

                            if(data[i][0] == 'Sunday' && data[i][2] == 'PT')
                            {
                                $('#pt_sun').html(data[i][1]);
                            }
                        }
                        
                    },
                    error: function (data) {
                        alert(JSON.stringify(data));
                    }
               });

                $.ajax({  
                    url:"<?php echo base_url('Report/get_teaching_load_perday_total')?>", 
                    method:"POST",
                    dataType: 'json',
                    data:{acadyr:acadyr, sem:sem, faculty:faculty},
                    success:function(data){  
                        var i;

                        for(i=0; i<data.length; i++)
                        {
                            if(data[i][0] == 'Monday')
                            {
                                $('#tot_mon').html(data[i][1]);
                            }

                            if(data[i][0] == 'Tuesday')
                            {
                                $('#tot_tues').html(data[i][1]);
                            }

                            if(data[i][0] == 'Wednesday')
                            {
                                $('#tot_wed').html(data[i][1]);
                            }

                            if(data[i][0] == 'Thursday')
                            {
                                $('#tot_thu').html(data[i][1]);
                            }

                            if(data[i][0] == 'Friday')
                            {
                                $('#tot_fri').html(data[i][1]);
                            }

                            if(data[i][0] == 'Saturday')
                            {
                                $('#tot_sat').html(data[i][1]);
                            }

                            if(data[i][0] == 'Sunday')
                            {
                                $('#tot_sun').html(data[i][1]);
                            }
                        }
                    },
                    error: function (data) {
                        alert(JSON.stringify(data));
                    }
               });

                $.ajax({  
                    url:"<?php echo base_url('Report/get_other_time_perday')?>", 
                    method:"POST",
                    dataType: 'json',
                    data:{acadyr:acadyr, sem:sem, faculty:faculty},
                    success:function(data){  
                        var i;

                        for(i=0; i<data.length; i++)
                        {
                            if(data[i][0] == 'Monday' && data[i][2] == 'OH')
                            {
                                $('#oh_mon').html(data[i][1]);
                            }

                            if(data[i][0] == 'Tuesday' && data[i][2] == 'OH')
                            {
                                $('#oh_tues').html(data[i][1]);
                            }

                            if(data[i][0] == 'Wednesday' && data[i][2] == 'OH')
                            {
                                $('#oh_wed').html(data[i][1]);
                            }

                            if(data[i][0] == 'Thursday' && data[i][2] == 'OH')
                            {
                                $('#oh_thu').html(data[i][1]);
                            }

                            if(data[i][0] == 'Friday' && data[i][2] == 'OH')
                            {
                                $('#oh_fri').html(data[i][1]);
                            }

                            if(data[i][0] == 'Saturday' && data[i][2] == 'OH')
                            {
                                $('#oh_sat').html(data[i][1]);
                            }

                            if(data[i][0] == 'Sunday' && data[i][2] == 'OH')
                            {
                                $('#oh_sun').html(data[i][1]);
                            }

                            if(data[i][0] == 'Monday' && data[i][2] == 'AT')
                            {
                                $('#at_mon').html(data[i][1]);
                            }

                            if(data[i][0] == 'Tuesday' && data[i][2] == 'AT')
                            {
                                $('#at_tues').html(data[i][1]);
                            }

                            if(data[i][0] == 'Wednesday' && data[i][2] == 'AT')
                            {
                                $('#at_wed').html(data[i][1]);
                            }

                            if(data[i][0] == 'Thursday' && data[i][2] == 'AT')
                            {
                                $('#at_thu').html(data[i][1]);
                            }

                            if(data[i][0] == 'Friday' && data[i][2] == 'AT')
                            {
                                $('#at_fri').html(data[i][1]);
                            }

                            if(data[i][0] == 'Saturday' && data[i][2] == 'AT')
                            {
                                $('#at_sat').html(data[i][1]);
                            }

                            if(data[i][0] == 'Sunday' && data[i][2] == 'AT')
                            {
                                $('#at_sun').html(data[i][1]);
                            }
                        }
                        
                    },
                    error: function (data) {
                        alert(JSON.stringify(data));
                    }
               });


            }
        }


        $(document).ready(function()
        {
            $('#btn_pdf').prop("disabled", true);

            $('#select_faculty').on('change', function()
            {
                var faculty = $('#select_faculty').val();
                var acadyr = $('#select_acadyr').val();
                var sem = $('#select_sem').val();
                
                $.ajax({
                method:"POST",
                url:"<?php echo base_url('Report/get_faculty_details')?>",
                dataType: "json",
                data:{faculty_id:faculty},
                success:function(data)
                {   
                    $('#emp_no').empty();
                    $('#emp_name').empty();
                    $('#emp_stat').empty();
                    $('#emp_college').empty();
                    $('#emp_dept_code').empty();
                    $('#emp_dept').empty();
                    $('#emp_no').append(data[0][0]);
                    $('#emp_name').append(data[0][1]);
                    $('#emp_stat').append(data[0][2]);
                    $('#emp_college').append(data[0][3]);
                    $('#emp_dept_code').append(data[0][4]);
                    $('#emp_dept').append(data[0][5]);
                }
                });

                $('#regular_load').empty();
                $('#part_time').empty();
                
                empty_table_reg();
                empty_table_pt();
                empty_table_tot();
                empty_table_oh();
                empty_table_at();
                fetch_load(acadyr, sem, faculty);
                enabled_button(acadyr, sem, faculty);
            });

            $('#select_acadyr').on('change', function(){
                var acadyr = $('#select_acadyr').val();
                var sem = $('#select_sem').val();
                var faculty = $('#select_faculty').val();

                $('#regular_load').empty();
                $('#part_time').empty();

                empty_table_reg();
                empty_table_pt();
                empty_table_tot();
                empty_table_oh();
                empty_table_at();
                fetch_load(acadyr, sem, faculty);
                enabled_button(acadyr, sem, faculty);
            });

            $('#select_sem').on('change', function(){
                var acadyr = $('#select_acadyr').val();
                var sem = $('#select_sem').val();
                var faculty = $('#select_faculty').val();

                $('#regular_load').empty();
                $('#part_time').empty();

                empty_table_reg();
                empty_table_pt();
                empty_table_tot();
                empty_table_oh();
                empty_table_at();
                fetch_load(acadyr, sem, faculty);
                enabled_button(acadyr, sem, faculty);
            });

        });
    </script>

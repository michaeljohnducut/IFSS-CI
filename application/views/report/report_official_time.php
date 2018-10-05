<div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                         <h4 class="page-title">Reports</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="#">Admin</a></li>
                            <li><a href="#">Reports</a></li>
                            <li class="active">Official Time</li>
                        </ol>
                    </div>
                
                </div>

            <div class="row">      
                <div class="col-sm-12">
                    <div class="white-box">                        
                        <div class="row">
                            <h2>Report on Official Time (for Regular-Designee Only)</h2>
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
                                    <?php foreach($faculty as $r) echo '<option value="'.$r[0].'">'.$r[2].', '.$r[3].' '.$r[4].'</option>';?>
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
                                    <option value="1st">First</option>
                                    <option value="2nd">Second</option>
                                    <option value="Summer">Summer</option>
                                </select>    
                            </div>
                            <div class="col-md-5" style="text-align: right;">
                                <br>
                                <button type="button" class="btn btn-info" id="btn_pdf" onclick="pdf_()" style="margin-top: 10px;">Print Official Time</button>
                            </div>
                        </div>
                        <br><br>
                        <div  class="col-md-12" style="background-color: gray; height: 3px; margin-top: -5px;">

                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-6">
                                <p><b>NAME:</b>&nbsp;&nbsp;&nbsp;<span id="emp_name"></span></p>
                                <p><b>COLLEGE:</b>&nbsp;&nbsp;&nbsp;<span>COLLEGE OF COMPUTER AND INFORMATION SCIENCES</span></p>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <table class="table color-table table-striped table-bordered table-condensed">
                                    <tr>
                                        <th rowspan="2">DAYS</th>
                                        <th colspan="3">REGULAR TIME </th>
                                        <th colspan="2">PART TIME</th>
                                        <th colspan="2">TEMPORARY SUBSTITUTION</th>
                                        <th colspan="2">NIGHT SERVICE</th>
                                    </tr>
                                    <tr>
                                        <th>Administrative Time</th>
                                        <th>Teaching Time</th>
                                        <th>No. of Hrs</th>
                                        <th>Time</th>
                                        <th>No. of Hrs</th>
                                        <th>Time</th>
                                        <th>No. of Hrs</th>
                                        <th>Time</th>
                                        <th>No. of Hrs</th>
                                    </tr>
                                    <tr>
                                        <td>Monday</td>
                                        <td id="m_admin_time"></td>
                                        <td id="m_teach_time"></td>
                                        <td id="m_tot_reg"></td>
                                        <td id="m_pt_time"></td>
                                        <td id="m_tot_pt"></td>
                                        <td id="m_ts_time"></td>
                                        <td id="m_tot_ts"></td>
                                        <td id="m_ns_time"></td>
                                        <td id="m_tot_ns"></td>
                                    </tr>
                                    <tr>
                                        <td>Tuesday</td>
                                        <td id="t_admin_time"></td>
                                        <td id="t_teach_time"></td>
                                        <td id="t_tot_reg"></td>
                                        <td id="t_pt_time"></td>
                                        <td id="t_tot_pt"></td>
                                        <td id="t_ts_time"></td>
                                        <td id="t_tot_ts"></td>
                                        <td id="t_ns_time"></td>
                                        <td id="t_tot_ns"></td>
                                    </tr> 
                                    <tr>
                                        <td>Wednesday</td>
                                        <td id="w_admin_time"></td>
                                        <td id="w_teach_time"></td>
                                        <td id="w_tot_reg"></td>
                                        <td id="w_pt_time"></td>
                                        <td id="w_tot_pt"></td>
                                        <td id="w_ts_time"></td>
                                        <td id="w_tot_ts"></td>
                                        <td id="w_ns_time"></td>
                                        <td id="w_tot_ns"></td>
                                    </tr>
                                    <tr>
                                        <td>Thursday</td>
                                        <td id="th_admin_time"></td>
                                        <td id="th_teach_time"></td>
                                        <td id="th_tot_reg"></td>
                                        <td id="th_pt_time"></td>
                                        <td id="th_tot_pt"></td>
                                        <td id="th_ts_time"></td>
                                        <td id="th_tot_ts"></td>
                                        <td id="th_ns_time"></td>
                                        <td id="th_tot_ns"></td>
                                    </tr> 
                                    <tr>
                                        <td>Friday</td>
                                        <td id="f_admin_time"></td>
                                        <td id="f_teach_time"></td>
                                        <td id="f_tot_reg"></td>
                                        <td id="f_pt_time"></td>
                                        <td id="f_tot_pt"></td>
                                        <td id="f_ts_time"></td>
                                        <td id="f_tot_ts"></td>
                                        <td id="f_ns_time"></td>
                                        <td id="f_tot_ns"></td>
                                    </tr>
                                    <tr>
                                        <td>Saturday</td>
                                        <td id="st_admin_time"></td>
                                        <td id="st_teach_time"></td>
                                        <td id="st_tot_reg"></td>
                                        <td id="st_pt_time"></td>
                                        <td id="st_tot_pt"></td>
                                        <td id="st_ts_time"></td>
                                        <td id="st_tot_ts"></td>
                                        <td id="st_ns_time"></td>
                                        <td id="st_tot_ns"></td>
                                    </tr>
                                    <tr>
                                        <td>Sunday</td>
                                        <td id="sn_admin_time"></td>
                                        <td id="sn_teach_time"></td>
                                        <td id="sn_tot_reg"></td>
                                        <td id="sn_pt_time"></td>
                                        <td id="sn_tot_pt"></td>
                                        <td id="sn_ts_time"></td>
                                        <td id="sn_tot_ts"></td>
                                        <td id="sn_ns_time"></td>
                                        <td id="sn_tot_ns"></td>
                                    </tr>
                                    <tr>
                                        <td>Total</td>
                                        <td></td>
                                        <td></td>
                                        <td id="tot_reg"></td>
                                        <td></td>
                                        <td id="tot_pt"></td>
                                        <td></td>
                                        <td id="tot_ts"></td>
                                        <td></td>
                                        <td id="tot_ns"></td>
                                    </tr>                 
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
            var sem = $('#select_sem option:selected').text();
            var faculty = $('#select_faculty').val();
            var sem_desc = $('#select_sem').val();

            window.open('<?php echo base_url("Report/official_sched_pdf")?>'+'?acadyr='+acadyr+'&sem='+sem+'&faculty='+faculty+'&sem_desc='+sem_desc);
        }

        function enabled_button(acadyr, sem, faculty)
        {
            if(acadyr && sem && faculty)
            {
                $('#btn_pdf').prop("disabled", false);
            }
        }

        function empty_monday()
        {
            $('#m_admin_time').empty();
            $('#m_teach_time').empty();
            $('#m_tot_reg').empty();
            $('#m_pt_time').empty();
            $('#m_tot_pt').empty();
            $('#m_ts_time').empty();
            $('#m_tot_ts').empty();
            $('#m_ns_time').empty();
            $('#m_tot_ns').empty();
        }

        function empty_tuesday()
        {
            $('#t_admin_time').empty();
            $('#t_teach_time').empty();
            $('#t_tot_reg').empty();
            $('#t_pt_time').empty();
            $('#t_tot_pt').empty();
            $('#t_ts_time').empty();
            $('#t_tot_ts').empty();
            $('#t_ns_time').empty();
            $('#t_tot_ns').empty();
        }

        function empty_wednesday()
        {
            $('#w_admin_time').empty();
            $('#w_teach_time').empty();
            $('#w_tot_reg').empty();
            $('#w_pt_time').empty();
            $('#w_tot_pt').empty();
            $('#w_ts_time').empty();
            $('#w_tot_ts').empty();
            $('#w_ns_time').empty();
            $('#w_tot_ns').empty();
        }

        function empty_thursday()
        {
            $('#th_admin_time').empty();
            $('#th_teach_time').empty();
            $('#th_tot_reg').empty();
            $('#th_pt_time').empty();
            $('#th_tot_pt').empty();
            $('#th_ts_time').empty();
            $('#th_tot_ts').empty();
            $('#th_ns_time').empty();
            $('#th_tot_ns').empty();
        }

        function empty_friday()
        {
            $('#f_admin_time').empty();
            $('#f_teach_time').empty();
            $('#f_tot_reg').empty();
            $('#f_pt_time').empty();
            $('#f_tot_pt').empty();
            $('#f_ts_time').empty();
            $('#f_tot_ts').empty();
            $('#f_ns_time').empty();
            $('#f_tot_ns').empty();
        }

        function empty_saturday()
        {
            $('#st_admin_time').empty();
            $('#st_teach_time').empty();
            $('#st_tot_reg').empty();
            $('#st_pt_time').empty();
            $('#st_tot_pt').empty();
            $('#st_ts_time').empty();
            $('#st_tot_ts').empty();
            $('#st_ns_time').empty();
            $('#st_tot_ns').empty();
        }

        function empty_sunday()
        {
            $('#sn_admin_time').empty();
            $('#sn_teach_time').empty();
            $('#sn_tot_reg').empty();
            $('#sn_pt_time').empty();
            $('#sn_tot_pt').empty();
            $('#sn_ts_time').empty();
            $('#sn_tot_ts').empty();
            $('#sn_ns_time').empty();
            $('#sn_tot_ns').empty();
        }

        function empty_total()
        {
            $('#tot_reg').empty();
            $('#tot_pt').empty();
            $('#tot_ts').empty();
            $('#tot_ns').empty();
        }

        function fetch_data(acadyr, sem, faculty)
        {
            if(acadyr && sem && faculty)
            {
                $.ajax({
                    method:"POST",
                    url:"<?php echo base_url('Report/get_other_offtime')?>",
                    dataType: "json",
                    data:{acadyr:acadyr, sem:sem, faculty_id:faculty},
                    success:function(data)
                    {    
                        var i;

                        for(i=0; i<data.length; i++)
                        {
                            if(data[i][0] == 'Monday' && data[i][1] == 'OH')
                            {
                                $('#m_admin_time').html(data[i][2]);
                            }

                            if(data[i][0] == 'Tuesday' && data[i][1] == 'OH')
                            {
                                $('#t_admin_time').html(data[i][2]);
                            }

                            if(data[i][0] == 'Wednesday' && data[i][1] == 'OH')
                            {
                                $('#w_admin_time').html(data[i][2]);
                            }

                            if(data[i][0] == 'Thursday' && data[i][1] == 'OH')
                            {
                                $('#th_admin_time').html(data[i][2]);
                            }

                            if(data[i][0] == 'Friday' && data[i][1] == 'OH')
                            {
                                $('#f_admin_time').html(data[i][2]);
                            }

                            if(data[i][0] == 'Saturday' && data[i][1] == 'OH')
                            {
                                $('#st_admin_time').html(data[i][2]);
                            }

                            if(data[i][0] == 'Sunday' && data[i][1] == 'OH')
                            {
                                $('#sn_admin_time').html(data[i][2]);
                            }

                            if(data[i][0] == 'Monday' && data[i][1] == 'NO')
                            {
                                $('#m_ns_time').html(data[i][2]);
                            }

                            if(data[i][0] == 'Tuesday' && data[i][1] == 'NO')
                            {
                                $('#t_ns_time').html(data[i][2]);
                            }

                            if(data[i][0] == 'Wednesday' && data[i][1] == 'NO')
                            {
                                $('#w_ns_time').html(data[i][2]);
                            }

                            if(data[i][0] == 'Thursday' && data[i][1] == 'NO')
                            {
                                $('#th_ns_time').html(data[i][2]);
                            }

                            if(data[i][0] == 'Friday' && data[i][1] == 'NO')
                            {
                                $('#f_ns_time').html(data[i][2]);
                            }

                            if(data[i][0] == 'Saturday' && data[i][1] == 'NO')
                            {
                                $('#st_ns_time').html(data[i][2]);
                            }

                            if(data[i][0] == 'Sunday' && data[i][1] == 'NO')
                            {
                                $('#sn_ns_time').html(data[i][2]);
                            }
                        }
                    },
                    error: function(data) 
                    {
                        alert(JSON.stringify(data));
                    }
                });

                $.ajax({
                    method:"POST",
                    url:"<?php echo base_url('Report/get_teaching_offtime')?>",
                    dataType: "json",
                    data:{acadyr:acadyr, sem:sem, faculty_id:faculty},
                    success:function(data)
                    {    
                        var i;

                        for(i=0; i<data.length; i++)
                        {
                            if(data[i][0] == 'Monday' && data[i][1] == 'R')
                            {
                                $('#m_teach_time').html(data[i][2]);
                            }

                            if(data[i][0] == 'Tuesday' && data[i][1] == 'R')
                            {
                                $('#t_teach_time').html(data[i][2]);
                            }

                            if(data[i][0] == 'Wednesday' && data[i][1] == 'R')
                            {
                                $('#w_teach_time').html(data[i][2]);
                            }

                            if(data[i][0] == 'Thursday' && data[i][1] == 'R')
                            {
                                $('#th_teach_time').html(data[i][2]);
                            }

                            if(data[i][0] == 'Friday' && data[i][1] == 'R')
                            {
                                $('#f_teach_time').html(data[i][2]);
                            }

                            if(data[i][0] == 'Saturday' && data[i][1] == 'R')
                            {
                                $('#st_teach_time').html(data[i][2]);
                            }

                            if(data[i][0] == 'Sunday' && data[i][1] == 'R')
                            {
                                $('#sn_teach_time').html(data[i][2]);
                            }

                            if(data[i][0] == 'Monday' && data[i][1] == 'PT')
                            {
                                $('#m_pt_time').html(data[i][2]);
                            }

                            if(data[i][0] == 'Tuesday' && data[i][1] == 'PT')
                            {
                                $('#t_pt_time').html(data[i][2]);
                            }

                            if(data[i][0] == 'Wednesday' && data[i][1] == 'PT')
                            {
                                $('#w_pt_time').html(data[i][2]);
                            }

                            if(data[i][0] == 'Thursday' && data[i][1] == 'PT')
                            {
                                $('#th_pt_time').html(data[i][2]);
                            }

                            if(data[i][0] == 'Friday' && data[i][1] == 'PT')
                            {
                                $('#f_pt_time').html(data[i][2]);
                            }

                            if(data[i][0] == 'Saturday' && data[i][1] == 'PT')
                            {
                                $('#st_pt_time').html(data[i][2]);
                            }

                            if(data[i][0] == 'Sunday' && data[i][1] == 'PT')
                            {
                                $('#sn_pt_time').html(data[i][2]);
                            }

                            if(data[i][0] == 'Monday' && data[i][1] == 'TS')
                            {
                                $('#m_ts_time').html(data[i][2]);
                            }

                            if(data[i][0] == 'Tuesday' && data[i][1] == 'TS')
                            {
                                $('#t_ts_time').html(data[i][2]);
                            }

                            if(data[i][0] == 'Wednesday' && data[i][1] == 'TS')
                            {
                                $('#w_ts_time').html(data[i][2]);
                            }

                            if(data[i][0] == 'Thursday' && data[i][1] == 'TS')
                            {
                                $('#th_ts_time').html(data[i][2]);
                            }

                            if(data[i][0] == 'Friday' && data[i][1] == 'TS')
                            {
                                $('#f_ts_time').html(data[i][2]);
                            }

                            if(data[i][0] == 'Saturday' && data[i][1] == 'TS')
                            {
                                $('#st_ts_time').html(data[i][2]);
                            }

                            if(data[i][0] == 'Sunday' && data[i][1] == 'TS')
                            {
                                $('#sn_ts_time').html(data[i][2]);
                            }
                        }
                    },
                    error: function(data) 
                    {
                        alert(JSON.stringify(data));
                    }
                });

                $.ajax({
                    method:"POST",
                    url:"<?php echo base_url('Report/get_tot_day_offtime')?>",
                    dataType: "json",
                    data:{acadyr:acadyr, sem:sem, faculty_id:faculty},
                    success:function(data)
                    {    
                        var i;
                        var m_temp_hrs_1, m_temp_hrs_2, m_temp_total;
                        var t_temp_hrs_1, t_temp_hrs_2, t_temp_total;
                        var w_temp_hrs_1, w_temp_hrs_2, w_temp_total;
                        var th_temp_hrs_1, th_temp_hrs_2, th_temp_total;
                        var f_temp_hrs_1, f_temp_hrs_2, f_temp_total;
                        var st_temp_hrs_1, st_temp_hrs_2, st_temp_total;
                        var sn_temp_hrs_1, sn_temp_hrs_2, sn_temp_total;

                        for(i=0; i<data.length; i++)
                        {
                            if(data[i][0] == 'Monday' && data[i][1] == 'R')
                            {
                                m_temp_hrs_1 = data[i][2];
                            }

                            if(data[i][0] == 'Monday' && data[i][1] == 'OH')
                            {
                                m_temp_hrs_2 = data[i][2];
                            }

                            if(data[i][0] == 'Tuesday' && data[i][1] == 'R')
                            {
                                t_temp_hrs_1 = data[i][2];
                            }

                            if(data[i][0] == 'Tuesday' && data[i][1] == 'OH')
                            {
                                t_temp_hrs_2 = data[i][2];
                            }

                            if(data[i][0] == 'Wednesday' && data[i][1] == 'R')
                            {
                                w_temp_hrs_1 = data[i][2];
                            }

                            if(data[i][0] == 'Wednesday' && data[i][1] == 'OH')
                            {
                                w_temp_hrs_2 = data[i][2];
                            }

                            if(data[i][0] == 'Thursday' && data[i][1] == 'R')
                            {
                                th_temp_hrs_1 = data[i][2];
                            }

                            if(data[i][0] == 'Thursday' && data[i][1] == 'OH')
                            {
                                th_temp_hrs_2 = data[i][2];
                            }

                            if(data[i][0] == 'Friday' && data[i][1] == 'R')
                            {
                                f_temp_hrs_1 = data[i][2];
                            }

                            if(data[i][0] == 'Friday' && data[i][1] == 'OH')
                            {
                                f_temp_hrs_2 = data[i][2];
                            }

                            if(data[i][0] == 'Saturday' && data[i][1] == 'R')
                            {
                                st_temp_hrs_1 = data[i][2];
                            }

                            if(data[i][0] == 'Saturday' && data[i][1] == 'OH')
                            {
                                sn_temp_hrs_2 = data[i][2];
                            }

                            if(data[i][0] == 'Sunday' && data[i][1] == 'R')
                            {
                                sn_temp_hrs_1 = data[i][2];
                            }

                            if(data[i][0] == 'Sunday' && data[i][1] == 'OH')
                            {
                                sn_temp_hrs_2 = data[i][2];
                            }

                            if(data[i][0] == 'Monday' && data[i][1] == 'PT')
                            {
                                $('#m_tot_pt').html(data[i][2]);
                            }

                            if(data[i][0] == 'Tuesday' && data[i][1] == 'PT')
                            {
                                $('#t_tot_pt').html(data[i][2]);
                            }

                            if(data[i][0] == 'Wednesday' && data[i][1] == 'PT')
                            {
                                $('#w_tot_pt').html(data[i][2]);
                            }

                            if(data[i][0] == 'Thursday' && data[i][1] == 'PT')
                            {
                                $('#th_tot_pt').html(data[i][2]);
                            }

                            if(data[i][0] == 'Friday' && data[i][1] == 'PT')
                            {
                                $('#f_tot_pt').html(data[i][2]);
                            }

                            if(data[i][0] == 'Saturday' && data[i][1] == 'PT')
                            {
                                $('#st_tot_pt').html(data[i][2]);
                            }

                            if(data[i][0] == 'Sunday' && data[i][1] == 'PT')
                            {
                                $('#sn_tot_pt').html(data[i][2]);
                            }

                            if(data[i][0] == 'Monday' && data[i][1] == 'NO')
                            {
                                $('#m_tot_ns').html(data[i][2]);
                            }

                            if(data[i][0] == 'Tuesday' && data[i][1] == 'NO')
                            {
                                $('#t_tot_ns').html(data[i][2]);
                            }

                            if(data[i][0] == 'Wednesday' && data[i][1] == 'NO')
                            {
                                $('#w_tot_ns').html(data[i][2]);
                            }

                            if(data[i][0] == 'Thursday' && data[i][1] == 'NO')
                            {
                                $('#th_tot_ns').html(data[i][2]);
                            }

                            if(data[i][0] == 'Friday' && data[i][1] == 'NO')
                            {
                                $('#f_tot_ns').html(data[i][2]);
                            }

                            if(data[i][0] == 'Saturday' && data[i][1] == 'NO')
                            {
                                $('#st_tot_ns').html(data[i][2]);
                            }

                            if(data[i][0] == 'Sunday' && data[i][1] == 'NO')
                            {
                                $('#sn_tot_ns').html(data[i][2]);
                            }

                            if(data[i][0] == 'Monday' && data[i][1] == 'TS')
                            {
                                $('#m_tot_ts').html(data[i][2]);
                            }

                            if(data[i][0] == 'Tuesday' && data[i][1] == 'TS')
                            {
                                $('#t_tot_ts').html(data[i][2]);
                            }

                            if(data[i][0] == 'Wednesday' && data[i][1] == 'TS')
                            {
                                $('#w_tot_ts').html(data[i][2]);
                            }

                            if(data[i][0] == 'Thursday' && data[i][1] == 'TS')
                            {
                                $('#th_tot_ts').html(data[i][2]);
                            }

                            if(data[i][0] == 'Friday' && data[i][1] == 'TS')
                            {
                                $('#f_tot_ts').html(data[i][2]);
                            }

                            if(data[i][0] == 'Saturday' && data[i][1] == 'TS')
                            {
                                $('#st_tot_ts').html(data[i][2]);
                            }

                            if(data[i][0] == 'Sunday' && data[i][1] == 'TS')
                            {
                                $('#sn_tot_ts').html(data[i][2]);
                            }
                        }

                        if(!m_temp_hrs_1)
                        {
                            m_temp_hrs_1 = 0;
                        }

                        if(!m_temp_hrs_2)
                        {
                            m_temp_hrs_2 = 0;
                        }

                        if(!t_temp_hrs_1)
                        {
                            t_temp_hrs_1 = 0;
                        }

                        if(!t_temp_hrs_2)
                        {
                            t_temp_hrs_2 = 0;
                        }

                        if(!w_temp_hrs_1)
                        {
                            w_temp_hrs_1 = 0;
                        }

                        if(!w_temp_hrs_2)
                        {
                            w_temp_hrs_2 = 0;
                        }

                        if(!th_temp_hrs_1)
                        {
                            th_temp_hrs_1 = 0;
                        }

                        if(!th_temp_hrs_2)
                        {
                            th_temp_hrs_2 = 0;
                        }

                        if(!f_temp_hrs_1)
                        {
                            f_temp_hrs_1 = 0;
                        }

                        if(!f_temp_hrs_2)
                        {
                            f_temp_hrs_2 = 0;
                        }

                        if(!st_temp_hrs_1)
                        {
                            st_temp_hrs_1 = 0;
                        }

                        if(!st_temp_hrs_2)
                        {
                            st_temp_hrs_2 = 0;
                        }

                        if(!sn_temp_hrs_1)
                        {
                            sn_temp_hrs_1 = 0;
                        }

                        if(!sn_temp_hrs_2)
                        {
                            sn_temp_hrs_2 = 0;
                        }

                        m_temp_total = parseFloat(m_temp_hrs_1) + parseFloat(m_temp_hrs_2);
                        t_temp_total = parseFloat(t_temp_hrs_1) + parseFloat(t_temp_hrs_2);
                        w_temp_total = parseFloat(w_temp_hrs_1) + parseFloat(w_temp_hrs_2);
                        th_temp_total = parseFloat(th_temp_hrs_1) + parseFloat(th_temp_hrs_2);
                        f_temp_total = parseFloat(f_temp_hrs_1) + parseFloat(f_temp_hrs_2);
                        st_temp_total = parseFloat(st_temp_hrs_1) + parseFloat(st_temp_hrs_2);
                        sn_temp_total = parseFloat(sn_temp_hrs_1) + parseFloat(sn_temp_hrs_2);

                        if(m_temp_total != 0)
                        {
                            $('#m_tot_reg').html(m_temp_total);
                        }

                        if(t_temp_total != 0)
                        {
                            $('#t_tot_reg').html(t_temp_total);
                        }
                        
                        if(w_temp_total != 0)
                        {
                            $('#w_tot_reg').html(w_temp_total);
                        }
                        
                        if(th_temp_total != 0)
                        {
                            $('#th_tot_reg').html(th_temp_total);
                        }

                        if(f_temp_total != 0)
                        {
                            $('#f_tot_reg').html(f_temp_total);
                        }

                        if(st_temp_total != 0)
                        {
                            $('#st_tot_reg').html(st_temp_total);
                        }

                        if(sn_temp_total != 0)
                        {
                            $('#sn_tot_reg').html(sn_temp_total);
                        }
                       
                    },
                    error: function(data) 
                    {
                        alert(JSON.stringify(data));
                    }
                });

                $.ajax({
                    method:"POST",
                    url:"<?php echo base_url('Report/get_total_type_offtime')?>",
                    dataType: "json",
                    data:{acadyr:acadyr, sem:sem, faculty_id:faculty},
                    success:function(data)
                    {    
                        var i;

                        var temp_hrs_1, temp_hrs_2, temp_total, temp_pt, temp_ts, temp_no;

                        for(i=0; i<data.length; i++)
                        {
                            if(data[i][1] == 'NO')
                            {
                                temp_no = data[i][0];
                            }

                            if(data[i][1] == 'TS')
                            {
                                temp_ts = data[i][0];
                            }

                            if(data[i][1] == 'PT')
                            {
                                temp_pt = data[i][0];
                            }

                            if(data[i][1] == 'OH')
                            {
                                temp_hrs_1 = data[i][0];
                            }

                            if(data[i][1] == 'R')
                            {
                                temp_hrs_2 = data[i][0];
                            }
                        }

                        if(!temp_no)
                        {
                            temp_no = 0;
                        }

                        if(!temp_ts)
                        {
                            temp_ts = 0;
                        }

                        if(!temp_pt)
                        {
                            temp_pt = 0;
                        }

                        if(!temp_hrs_1)
                        {
                            temp_hrs_1 = 0;
                        }

                        if(!temp_hrs_2)
                        {
                            temp_hrs_2 = 0;
                        }

                        temp_total = parseFloat(temp_hrs_1) + parseFloat(temp_hrs_2);

                        $('#tot_ns').html(temp_no);
                        $('#tot_ts').html(temp_ts);
                        $('#tot_pt').html(temp_pt);
                        $('#tot_reg').html(temp_total);

                    },
                    error: function(data) 
                    {
                        alert(JSON.stringify(data));
                    }
                });
            }
        }

        $(document).ready(function()
        {
            $('#btn_pdf').prop("disabled", true);

            $('#select_faculty').on('change', function(){
                var acadyr = $('#select_acadyr').val();
                var sem = $('#select_sem').val();
                var faculty = $('#select_faculty').val();

                empty_monday();
                empty_tuesday();
                empty_wednesday();
                empty_thursday();
                empty_friday();
                empty_saturday();
                empty_sunday();
                empty_total();

                fetch_data(acadyr, sem, faculty);
                enabled_button(acadyr, sem, faculty);

                $.ajax({
                    method:"POST",
                    url:"<?php echo base_url('Maintenance/view_faculty')?>",
                    dataType: "json",
                    data:{faculty_id:faculty},
                    success:function(data)
                    {    
                        $('#emp_name').empty();
                        $('#emp_name').append(data[0][1] + ', ' + data[0][2] + ' ' + data[0][3]);
                    }
                });
            });

            $('#select_acadyr').on('change', function(){
                var acadyr = $('#select_acadyr').val();
                var sem = $('#select_sem').val();
                var faculty = $('#select_faculty').val();

                empty_monday();
                empty_tuesday();
                empty_wednesday();
                empty_thursday();
                empty_friday();
                empty_saturday();
                empty_sunday();
                empty_total();

                fetch_data(acadyr, sem, faculty);
                enabled_button(acadyr, sem, faculty);
            });

            $('#select_sem').on('change', function(){
                var acadyr = $('#select_acadyr').val();
                var sem = $('#select_sem').val();
                var faculty = $('#select_faculty').val();

                empty_monday();
                empty_tuesday();
                empty_wednesday();
                empty_thursday();
                empty_friday();
                empty_saturday();
                empty_sunday();
                empty_total();

                fetch_data(acadyr, sem, faculty);
                enabled_button(acadyr, sem, faculty);
            });

        });
    </script>

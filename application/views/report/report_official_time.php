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
                                    <option value="1st">1st</option>
                                    <option value="2nd">2nd</option>
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

        $(document).ready(function()
        {
            $('#btn_pdf').prop("disabled", true);

            $('#select_faculty').on('change', function(){
                var acadyr = $('#select_acadyr').val();
                var sem = $('#select_sem').val();
                var faculty = $('#select_faculty').val();
                //fetch_schedule(acadyr, sem, course);
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
                //fetch_schedule(acadyr, sem, course);
                enabled_button(acadyr, sem, faculty);
            });

            $('#select_sem').on('change', function(){
                var acadyr = $('#select_acadyr').val();
                var sem = $('#select_sem').val();
                var faculty = $('#select_faculty').val();
                //fetch_schedule(acadyr, sem, course);
                enabled_button(acadyr, sem, faculty);
            });

        });
    </script>

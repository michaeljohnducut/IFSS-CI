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
                                <button type="button" class="btn btn-info" style="margin-top: 10px;">Print Teaching Assignment</button>
                            </div>
                        </div>
                        <br><br>
                        <div  class="col-md-12" style="background-color: gray; height: 3px; margin-top: -5px;">

                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-6">
                                <p><b>EMP NO:</b><p id="emp_no"></p></p>
                                <p><b>EMP NAME:</b><p id="emp_name"></p></p>
                                <p><b>EMP STATUS:</b><p id="emp_stat"></p></p>
                            </div>

                            <div class="col-md-6">
                                <p><b>COLLEGE:</b><p id="emp_college"></p></p>
                                <p><b>DEPT CODE:</b><p id="emp_dept_code"></p></p>
                                <p><b>DEPARTMENT:</b><p id="emp_dept"></p></p>
                            </div>
                            
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-3">
                                <h4><b>REGULAR LOAD</b></h4>
                            </div>
                        </div>
                        <div class="row">
                            <table class="table color-table inverse-table table-striped table-bordered table-condensed" id="regular_load_tbl">
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

                                <tbody>
                                    
                                </tbody>       
                            </table>   
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <h5><b>Total REGULAR LOAD:</b></h5>
                            </div>
                        </div>
                        <br><br>
                        <div class="row">
                            <div class="col-md-3">
                                <h4><b>PART-TIME</b></h4>
                            </div>
                        </div>
                        <div class="row">
                            <table class="table color-table inverse-table table-striped table-bordered table-condensed" id="part_time_tbl">
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

                                <tbody>
                                    
                                </tbody>       
                            </table>   
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <h5><b>Total PART-TIME LOAD:</b></h5>
                            </div>
                        </div>
                        <br><br>
                        <div class="row">
                            <div class="col-md-3">
                                <h4><b>TEACHING LOAD PER DAY (HOURS)</b></h4>
                            </div>
                        </div>
                        <div class="row">
                            <table class="table color-table inverse-table table-striped table-bordered table-condensed" id="teaching_load_tbl">
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

                                <tbody>
                                    <tr>
                                        <th>REGULAR</th>
                                    </tr>
                                    <tr>
                                        <th>PART-TIME</th>
                                    </tr>
                                    <tr>
                                        <th>TOTAL</th>
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
                            <table class="table color-table inverse-table table-striped table-bordered table-condensed" id="official_advising_tbl">
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

                                <tbody>
                                    <tr>
                                        <th>OFFICIAL TIME</th>
                                    </tr>
                                    <tr>
                                        <th>ADVISING TIME</th>
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


        $(document).ready(function(){
            $('#select_faculty').on('change', function()
            {
                var faculty = $('#select_faculty').val();
                
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
            });

        });
    </script>

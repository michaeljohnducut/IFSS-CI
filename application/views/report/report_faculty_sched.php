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
                                <select class="form-control">
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
                        <br><br>

                        <div class="row">
                            <div class="col-md-6">
                                <p>EMP NO. :</p>
                                <p>EMP NAME: </p>
                                <p>EMP STATUS:</p>
                            </div>

                            <div class="col-md-6">
                                <p>COLLEGE: </p>
                                <p>DEPT CODE: </p>
                                <p>DEPARTMENT: </p>
                            </div>
                            
                        </div>
                        <br>
                        <div class="row">
                            <table class="table color-table inverse-table table-striped table-bordered table-condensed" id="account-table">
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
                                    <tr>
                                        <td>COMP2023</td>
                                        <td>Sample Subject</td>
                                        <td>3</td>
                                        <td>BSIT 2-4</td>
                                        <td>1:30PM - 4:30PM</td>
                                        <td>FR</td>
                                        <td>E408</td>
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

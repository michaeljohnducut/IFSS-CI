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
                        <br>
                        <br>
                        
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
                                    <option>--Faculty Member-</option>
                                    <option>Aldrin, Lily</option>
                                    <option>Eriksen, Marshall</option>
                                    <option>McConell, Tracy</option>
                                    <option>Mosby, Theodore</option>
                                    <option selected="">Scherbatsky, Robin</option>
                                    <option>Stinson, Barney</option>
                                </select>
                                
                            </div>
                            <div class="col-md-2">
                                <label class="control-label">Select A.Y.</label>
                                <select class="form-control">
                                    <option>2013</option>
                                    <option>2014</option>
                                    <option>2015</option>
                                    <option>2016</option>
                                    <option selected="">2017</option>
                                    <option>2018</option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <label class="control-label">Select Semester</label>
                                <select class="form-control">
                                    <option>1st</option>
                                    <option>2nd</option>
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

                                    <tr>
                                        <td>COMP2023</td>
                                        <td>Sample Subject</td>
                                        <td>3</td>
                                        <td>BSIT 2-4</td>
                                        <td>1:30PM - 4:30PM</td>
                                        <td>FR</td>
                                        <td>E408</td>
                                    </tr>

                                    <tr>
                                        <td>COMP2023</td>
                                        <td>Sample Subject</td>
                                        <td>3</td>
                                        <td>BSIT 2-4</td>
                                        <td>1:30PM - 4:30PM</td>
                                        <td>FR</td>
                                        <td>E408</td>
                                    </tr>

                                    <tr>
                                        <td>COMP2023</td>
                                        <td>Sample Subject</td>
                                        <td>3</td>
                                        <td>BSIT 2-4</td>
                                        <td>1:30PM - 4:30PM</td>
                                        <td>FR</td>
                                        <td>E408</td>
                                    </tr>

                                    <tr>
                                        <td>COMP2023</td>
                                        <td>Sample Subject</td>
                                        <td>3</td>
                                        <td>BSIT 2-4</td>
                                        <td>1:30PM - 4:30PM</td>
                                        <td>FR</td>
                                        <td>E408</td>
                                    </tr>

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

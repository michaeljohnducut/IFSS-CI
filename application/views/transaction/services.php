<div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                         <h4 class="page-title">Services</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="#">Transaction</a></li>
                            <li class="active">Services</li>
                        </ol>
                    </div>
                
                </div>

            <div class="row">      
                <div class="col-sm-12">
                    <div class="white-box">
                        <br>
                        <br>
                        
                        <div class="row">
                            <h2>Assign Faculty for Services</h2>
                            <div  class="col-md-12" style="background-color: gray; height: 3px; margin-top: -5px;">

                            </div>
                            <br>
                            <br>


                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <label class="control-label">Select A.Y.</label>
                                <select class="form-control">
                                    <option>2013</option>
                                    <option>2014</option>
                                    <option>2015</option>
                                    <option selected>2016</option>
                                    <option>2017</option>
                                    <option>2018</option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <label class="control-label">Select Semester</label>
                                <select class="form-control">
                                    <option>1st</option>
                                    <option>2nd</option>
                                </select>
                            <div class="col-md-3">
                                
                            </div>
                                
                            </div>
                            <div class="col-md-5">
                                    <label class="col-sm-12">Import Summary of Services</label>
                                    <div class="col-sm-12">
                                        <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                            <div class="form-control" data-trigger="fileinput">
                                                <i class="glyphicon glyphicon-file fileinput-exists"></i>
                                                <span class="fileinput-filename"></span>
                                            </div>
                                            <span class="input-group-addon btn btn-default btn-file"> 
                                            <span class="fileinput-new">Select file</span>
                                            <span class="fileinput-exists">Change</span>
                                            <input type="file" name="...">
                                            </span>
                                            <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a> 
                                        </div>
                                    </div>
                            </div>
                            <div class="col-md-3" style="text-align: center;">
                                <br>
                                <button type="button" class="btn btn-info" style="margin-top: 10px;">Encode Manually</button>
                                
                            </div>
                        </div>
                        <br><br>
                        <div  class="col-md-12" style="background-color: gray; height: 3px; margin-top: -5px;">

                        </div>
                        <h3 class="box-title m-b-0">Legend:</h3>
                        <div class="row" style="margin-left: 20px; margin-top: 5px;">
                            <div class="col-md-2">
                                <button class="btn btn-success">R</button>&nbsp;
                                <label style="margin-top: 5px;">Re-assign Professor</label>
                            </div>
                            <div class="col-md-3">
                                <button class="btn btn-info">A</button>&nbsp;
                                <label style="margin-top: 5px;">Assign Professor</label>
                            </div>
    
                        <br><br><br><br>
                        <div class="table-responsive">
                            <table id="myTable" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Subject</th>
                                        <th>Description</th>
                                        <th>Section</th>
                                        <th>Schedule</th>
                                        <th>Room</th>
                                        <th>Professor</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Comp 1153</td>
                                        <td>Introduction to Information and Communications Technology</td>
                                        <td>ABE 1-1</td>
                                        <td>T/F 7:30AM - 9:00AM/ 7:30AM - 9:00AM</td>
                                        <td>E417</td>
                                        <td>Aguila</td>
                                        <td><button class="btn btn-sm  btn-success">R</button></td>
                                    </tr>
                                    <tr>
                                        <td>Comp 1153</td>
                                        <td>Introduction to Information and Communications Technology</td>
                                        <td>ABE 2-1</td>
                                        <td>W/S 7:30AM - 9:00AM/ 7:30AM - 9:00AM</td>
                                        <td>E413</td>
                                        <td></td>
                                        <td><button class="btn btn-sm  btn-info">A</button></td>
                                    </tr>
                                </tbody>

                            </table>
                        </div>
            
                    </div>
                </div>

                </div>
             <!-- /.right-sidebar -->
            </div>

    <script src="<?php echo base_url(); ?>assets/plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/bower_components/datatables/jquery.dataTables.min.js"></script>

    <!-- Ito ung inidagdag ko para sa may alert animation at ung nasa ajax part kasama nito ung mga title chuchu -->
    <script src="<?php echo base_url(); ?>assets/js/sweetalert.min.js"></script>

    <!-- BOOTSTRAP SELECT -->
    <script src="<?php echo base_url(); ?>assets/plugins/bower_components/bootstrap-select/bootstrap-select.min.js" type="text/javascript"></script>

    <!-- CUSTOM SELECT -->
    <script src="<?php echo base_url(); ?>assets/plugins/bower_components/custom-select/custom-select.min.js" type="text/javascript"></script>

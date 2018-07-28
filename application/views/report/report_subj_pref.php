<div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                         <h4 class="page-title">Reports</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="#">Admin</a></li>
                            <li><a href="#">Reports</a></li>
                            <li class="active">Subject Preferences</li>
                        </ol>
                    </div>
                
                </div>

            <div class="row">      
                <div class="col-sm-12">
                    <div class="white-box">
                        <br>
                        <br>
                        
                        <div class="row">
                            <h2>Reports on Faculty Subject Preferences</h2>
                            <div  class="col-md-12" style="background-color: gray; height: 3px; margin-top: -5px;">

                            </div>
                            <br>
                            <br>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <label class="control-label">Select A.Y.</label>
                                <select class="form-control" name="acad_year" id="acad_year">
                                    <option value="0">-SELECT A.Y.-</option>
                                    <option value="2010-2011">2010-2011</option>
                                    <option value="2011-2012">2011-2012</option>
                                    <option value="2012-2013">2012-2013</option>
                                    <option value="2013-2014">2013-2014</option>
                                    <option value="2014-2015">2014-2015</option>
                                    <option value="2015-2016">2015-2016</option>
                                    <option value="2016-2017">2016-2017</option>
                                    <option value="2017-2018">2017-2018</option>
                                    <option value="2018-2019">2018-2019</option>                 
                                </select>
                            </div>
                            <div class="col-md-2">
                                <label class="control-label">Select Semester</label>
                                <select class="form-control" name="selected_sem" id="selected_sem">
                                    <option value="0">-SELECT SEM-</option>
                                    <option value="1st">1st</option>
                                    <option value="2nd">2nd</option> 
                                    <option value="summer">Summer</option>        
                                </select>  
                            </div>
                            <div class="col-md-6" style="margin-left: 30px">
                                <br>
                                <button type="button" class="btn btn-success" style="margin-top: 5px;"> <span class="fa fa-file"></span>&nbsp; Generate Summary (Excel)</button>&nbsp;
                                <button type="button" class="btn btn-info" style="margin-top: 5px;"> <span class="fa fa-file"></span>&nbsp; Generate Summary (PDF)</button>
                                
                            </div>
                        </div>
                        <br><br>

                        <div class="table-responsive">
                                
                            <table class="table table-striped" id="faculty_table">
                                <thead>
                                    <tr>
                                        <th>Faculty ID</th>
                                        <th>Faculty Name</th>
                                        <th>Action</th>  
                                    </tr>
                                </thead>
                                
                                <tbody>
                                    <tr>
                                        

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

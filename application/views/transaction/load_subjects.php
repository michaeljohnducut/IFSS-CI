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
                                <select class="form-control select2">
                                    <option>-ACAD YEAR-</option>
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
                                <select class="form-control select2">
                                    <option value="0">-Semester-</option>
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
                                <select class="form-control select2" style="height: 40px;">
                                    <option value="0">-Subjects-</option>
                                </select>
                                <div class="col-md-5" style="padding-left: 20px;">
                                    <h4>CURRICULUM on USE:</h4>
                                    <h4>SUBJECT CODE:</h4>
                                    <h4>UNITS:</h4>
                                    <h4>LECTURE HOURS:</h4>
                                    <h4>LAB HOURS:</h4>
                                </div>
                                <div class="col-md-7">
                                    <h4>2018</h4>
                                    <h4>COMP2021</h4>
                                    <h4>3</h4>
                                    <h4>3</h4>
                                    <h4>2</h4>
                                </div>
                                <label style="margin-top: 40px" class="control-label">Available Sections:</label>
                                <select class="form-control select2" style="height: 40px;">
                                    <option value="0">-Sections-</option>
                                    <option>BSIT 1 - 2&nbsp;&nbsp;&nbsp;(4/9)</option>
                                </select>
                            </div>
                            <div class="col-md-7">
                                <div class="table-responsive">
                                <table class="table colored-table inverse-table table-striped" style="margin-top: 40px">
                                    <thead>
                                        <tr>
                                            <th>Faculty Name</th>
                                            <th>Faculty Type</th>
                                            <th>Evaluation</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                     <tbody>
                                        <tr>
                                            <td>Ducut, Michael John L.</td>
                                            <td>Regular - Full Time</td>
                                            <td>No S Grade</td>
                                            <td><button type="button" class="btn btn-success">Assign</button></td>
                                        </tr>
                                        <tr>
                                            <td>Ducut, Michael John L.</td>
                                            <td>Regular - Full Time</td>
                                            <td>No S Grade</td>
                                            <td><button type="button" class="btn btn-success">Assign</button></td>
                                        </tr>
                                        <tr>
                                            <td>Ducut, Michael John L.</td>
                                            <td>Regular - Full Time</td>
                                            <td>No S Grade</td>
                                            <td><button type="button" class="btn btn-success">Assign</button></td>
                                        </tr>
                                        <tr>
                                            <td>Ducut, Michael John L.</td>
                                            <td>Regular - Full Time</td>
                                            <td>No S Grade</td>
                                            <td><button type="button" class="btn btn-success">Assign</button></td>
                                        </tr>
                                        <tr>
                                            <td>Ducut, Michael John L.</td>
                                            <td>Regular - Full Time</td>
                                            <td>No S Grade</td>
                                            <td><button type="button" class="btn btn-success">Assign</button></td>
                                        </tr>
                                        <tr>
                                            <td>Ducut, Michael John L.</td>
                                            <td>Regular - Full Time</td>
                                            <td>No S Grade</td>
                                            <td><button type="button" class="btn btn-success">Assign</button></td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>
                            </div>
                        </div>        
               
                    </div>

            </div>

            <div class="col-sm-12">
                <div class="white-box">
                        <h2>DITO KO ILALAGAY YUNG PAG AASSIGN NG SECTIONS. WAG NYO ALISIN</h2>

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

        //SELECT2
            $(".select2").select2();
            $('.selectpicker').selectpicker();
      
    </script>
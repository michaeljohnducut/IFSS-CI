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
                                <select class="form-control select2" name="acad_year" id="acad_year">
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
                                <select class="form-control select2" name="selected_sem" id="selected_sem">
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
                                <div class="col-md-12">
                                    <h3>Select a Query</h3>
                                    <select class="form-control select2" id="drop_query">
                                        <option value="0" selected="" disabled="">Queries</option>
                                        <option value="1">Available Professors</option>
                                        <option value="2">Available Rooms and Labs</option>
                                        <option value="3">Available Sections</option>
                                        <option value="4">Top 10 Faculty Members with highest evaluation</option>
                                        <option value="5">Faculty Members with satisfactory ratings</option>
                                        <option value="6">Teaching Assignments with no Schedules</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <br>
                                    <label class="control-label">Start time:</label>
                                    <input type="time" id="minor_start_a" class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <br>
                                    <label class="control-label">End time:</label>
                                    <input type="time" id="minor_start_a" class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <br>
                                    <label class="control-label">Day:</label>
                                    <select class="form-control select2" id="drop_query">
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

                            <div class="col-md-6">
                                <h3>Results</h3>
                                <textarea readonly="" class="form-control" rows="20" id="txtResult"></textarea>
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

    //SELECT2
      $(".select2").select2();
      $('.selectpicker').selectpicker();

      $(document).ready(function(){


      });



    </script>
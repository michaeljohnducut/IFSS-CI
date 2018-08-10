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
                        <div class="row">
                            <h2>Search Filter</h2>
                            <!-- <div  class="col-md-12" style="background-color: gray; height: 3px; margin-top: -5px;">
                            </div> -->
                            <br>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <label class="control-label">Select A.Y.</label>
                                <select class="form-control">
                                    <option value="" disabled selected>-ACAD YEAR-</option>
                                    <?php 
                                        for ($i = date("Y"); $i > 1900; $i-- ){
                                            echo '<option value ="' .$i. '&#x2010;'. ($i+1).'">' .$i. '&#x2010;'. ($i+1) .  '</option>'; 
                                        }
                                    ?>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <label class="control-label">Select Semester</label>
                                <select class="form-control">
                                    <option value="" disabled selected>--SEMESTER--</option>
                                    <option value="1st">1st</option>
                                    <option value="2nd">2nd</option>
                                    <option value="Summer">Summer</option>
                                </select>
                            <div class="col-md-3">
                                
                            </div>
                                
                            </div>
                            
                        </div>
                        <br>
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
                         </div>

                        <br><br><br>
                        <div class="table-responsive">
                            <table id="services-table" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th style="width: 140px;">Academic Year</th>
                                        <th>Semester</th>
                                        <th style="width: 125px;">Subject Code</th>
                                        <th style="width: 175px;">Subject Description</th>
                                        <th>Section</th>
                                        <th style="width: 150px;">Schedule</th>
                                        <th>Room</th>
                                        <th style="width: 155px;">Faculty</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>2017-2018</td>
                                        <td>2nd</td>
                                        <td>COMP1153</td>
                                        <td>Introduction to Information and Communications Technology</td>
                                        <td>ABE 1-1</td>
                                        <td>T/F 7:30AM - 9:00AM/ 7:30AM - 9:00AM</td>
                                        <td>E417</td>
                                        <td>Buena, Annthonite N.</td>
                                        <td><button class="btn btn-sm  btn-success">R</button></td>
                                    </tr>
                                </tbody>

                            </table>
                        </div>
                        <div class="row">
                            <div class="col-md-1">
                                <div class="col-md-1"> 
                                    <button type="button" class="btn btn-info" data-toggle = "modal" data-target ="#modalNewFile" style="margin-top: 10px; margin-left: 88%;">Import Services</button>
                                 </div> 
                            </div>
                            <div class="col-md-4">
                                <div class="col-md-4" style="text-align: center;">
                                <button type="button" class="btn btn-info" data-toggle = "modal" data-target ="#modalNewServices" style="margin-top: 10px; margin-left: 40%;">Encode Manually</button>
                                
                            </div>
                            </div>
                        </div>
                </div>

                </div>
             <!-- /.right-sidebar -->
            </div>

            <div class="modal fade bs-example-modal-lg" id="modalNewFile" tabindex="-1" role="dialog" aria-labelledby="modalNewFile" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h4 class="modal-title">Add Services</h4>
                                        </div>
                                        <div  class="col-md-12" style="background-color: gray; height: 3px; margin-top: -5px;">
                                        </div>
                                        <div class="modal-body">
                                        <form id="add_eval_form" method="POST" enctype="multipart/form-data">
                                            
                                                <div class="form-group col-md-4">
                                                    <label class="control-label">For Acad. Year:</label>
                                                    <select class="form-control" name="acadyr" id="acadyr" required>
                                                         <option value="" disabled selected>-ACAD YEAR-</option>
                                                            <?php 
                                                                for ($i = date("Y"); $i > 1900; $i-- ){
                                                                    echo '<option value ="' .$i. '&#x2010;'. ($i+1).'">' .$i. '&#x2010;'. ($i+1) .  '</option>'; 
                                                                }
                                                            ?>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label class="control-label">Semester:</label>
                                                    <select class="form-control" name="sem" id="sem" required>
                                                            <option value="" disabled selected>-SEMESTER-</option>
                                                            <option value="1st">1st</option>
                                                            <option value="2nd">2nd</option>
                                                            <option value="Summer">Summer</option>
                                                    </select>    
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label class="control-label">Department:</label>
                                                        <select class="form-control" name="dept" id="dept" required>
                                                            <option value="" disabled selected>-DEPARTMENT-</option>
                                                            <?php foreach($dept as $r) echo '<option value="'.$r[3].'">'.$r[0].'</option>';?>
                                                        </select>
                                                </div>
                                                <br>
                                                <div class="col-md-12">

                                                <div class="form-group col-md-10">
                                                    <label class="control-label">Add File:</label>
                                                    <div class="fileinput fileinput-new input-group" data-provides="fileinput" style="height: 20%">
                                                            <input class="dropify" type="file" name="file" id="file" accept=".xls, .xlsx" data-allowed-file-extensions="xls xlsx"  required />
                                                      
                                                    </div>
                                                </div>
                                                 </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" onclick="resetForm()">Clear</button>
                                                <button type="submit" name="btnAddEval" id="btnAddEval
                                                " class="btn btn-success waves-effect text-left">Save</button>
                                            </div>
                                            </form>
                                        </div>
                                        </div>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>


            <div class="modal fade bs-example-modal-lg" id="modalNewServices" tabindex="-1" role="dialog" aria-labelledby="modalNewServices" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h4 class="modal-title">Add Service</h4>
                                        </div>
                                        <div  class="col-md-12" style="background-color: gray; height: 3px; margin-top: -5px;">
                                        </div>
                                        <div class="modal-body modal-lg">
                                            <form id="edit_eval_form" method="POST" enctype="multipart/form-data">
                                                <div class="form-group col-md-4">
                                                    <label class="control-label">For Acad. Year:</label>
                                                    <select class="form-control" name="acad" id="acad" required>
                                                        <option value="" disabled selected>-SELECT-</option>
                                                        <?php 
                                                                for ($i = date("Y"); $i > 1900; $i-- ){
                                                                    echo '<option value ="' .$i. '&#x2010;'. ($i+1).'">' .$i. '&#x2010;'. ($i+1) .  '</option>'; 
                                                                }
                                                            ?>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label class="control-label">Semester:</label>
                                                    <select class="form-control" name="sem" id="sem" required>
                                                            <option value ="" disabled selected>-SELECT-</option>
                                                            <option value="1st">1st</option>
                                                            <option value="2nd">2nd</option>
                                                            <option value="Summer">Summer</option>
                                                    </select>    
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label class="control-label">Subject Code:</label>
                                                    <input class="form-control" type="text" name="code" id="code">
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label class="control-label">Room:</label>
                                                    <input class="form-control" type="text" name="room" id="room">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label class="control-label">Subject Description:</label>
                                                    <input class="form-control" type="text" name="desc" id="desc">
                                                </div>
                                                <div class="form-group col-md-2">
                                                        <label class="control-label">Section:</label>
                                                        <input class="form-control" name="sec" id="secg" pattern="^(\d*\.)?\d+$" title="Numbers only." required>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label class="control-label">Schedule:</label>
                                                    <input class="form-control" type="text" name="sched" id="sched">
                                                </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default">Clear</button>
                                                <button type="submit" name="btnEditEval" id="btnEditEval" class="btn btn-success waves-effect text-left">Save</button>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>


    <script src="<?php echo base_url(); ?>assets/plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/bower_components/datatables/jquery.dataTables.min.js"></script>

    <!-- Ito ung inidagdag ko para sa may alert animation at ung nasa ajax part kasama nito ung mga title chuchu -->
    <script src="<?php echo base_url(); ?>assets/js/sweetalert.min.js"></script>

    <!-- BOOTSTRAP SELECT -->
    <script src="<?php echo base_url(); ?>assets/plugins/bower_components/bootstrap-select/bootstrap-select.min.js" type="text/javascript"></script>

    <!-- CUSTOM SELECT -->
    <script src="<?php echo base_url(); ?>assets/plugins/bower_components/custom-select/custom-select.min.js" type="text/javascript"></script>

    <!-- jQuery file upload -->
    <script src="<?php echo base_url(); ?>assets/plugins/bower_components/dropify/dist/js/dropify.js"></script>

    <script type="text/javascript">
        //File Upload
        $('.dropify').dropify();

        $(document).ready(function(){
            $('#services-table').DataTable();
        });
    </script>

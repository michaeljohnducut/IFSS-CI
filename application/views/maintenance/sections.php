<div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                         <h4 class="page-title">Manage Sections</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="#">Maintenance</a></li>
                            <li class="active">Sections</li>
                        </ol>
                    </div>
                
                </div>
            <div class="white-box">    
            <div class="row">
                <!-- <h2>Search Filter</h2>
                <div  class="col-md-12" style="background-color: gray; height: 3px; margin-top: -5px;">
                    <br>
                </div> -->
                <!-- <div class="col-md-3">
                    <br>
                    <label class="control-label">Select Acad Year</label>
                    <select class="form-control" id="select_acad" onChange="fetch_select(this.value)">
                        <option value="def">ACADEMIC YEAR</option>
                        <?php //foreach($acad_yr as $r) echo '<option value="'.$r[2].'">'.$r[0].'</option>';?>    
                    </select>
                    <br><br>
                    
                </div> -->
                <!-- <div  class="col-md-12" style="background-color: gray; height: 3px; margin-top: -5px;">

                </div> -->                          
                <div class="col-md-12">
                    <br>
                    <h3 class="box-title m-b-0">Legend:</h3>
                    
                </div>
                        <div class="row" style="margin-left: 20px; margin-top: 5px;">
                            <div class="col-md-2">
                                <button class="btn btn-success"><span class="fa fa-pencil"></span></button>&nbsp;
                                <label style="margin-top: 5px;">Edit Section</label>
                            </div>
                            <!-- <div class="col-md-2">
                                <button class="btn btn-danger"><span class="fa fa-trash-o"></span></button>&nbsp;
                                <label style="margin-top: 5px;"> Delete Section</label>
                            </div> -->
                           <!--  <div class="col-md-3">
                                <button class="btn btn-info"><span class="fa fa-eye"></span></button>&nbsp;
                                <label style="margin-top: 5px;">View Section Schedule</label>
                            </div> -->
                            <br>
                            <br>
                            <br>
                            <br>

                        <div class="table-responsive">
                            <table id="section-table" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Course</th>
                                        <th>Year Level</th>
                                        <th>Section Description</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                </tbody>
                            </table>
                   </div>
                    <br>

                            <div class="row">
                                    <div class="col-md-12">
                                        <button type="button" class="btn btn-info" data-toggle = "modal" data-target ="#modalNewSection" style="margin-top: 10px;">Add Section</button>&nbsp;&nbsp;
                                        <!-- <button type="button" class="btn btn-success" data-toggle = "modal" data-target ="" style="margin-top: 10px;">Use Previous Sem</button> -->
                                    </div>
                            </div>

                </div>
              
                <!-- /.row -->
                <!-- .right-sidebar -->
               </div>
           </div>

           <a data-toggle="modal" href="#modalEditSection" id="openMod"></a>

                            <div class="modal fade bs-example-modal-lg" id="modalNewSection" tabindex="-1" role="dialog" aria-labelledby="modalNewSection" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h4 class="modal-title">Add New Section</h4>
                                        </div>
                                        <div  class="col-md-12" style="background-color: gray; height: 3px; margin-top: -5px;">
                                        </div>
                                        <div class="modal-body">
                                            <form id="add_section_form" method="POST" enctype="multipart/form-data">
                                                <!-- <div class="form-group col-md-4">
                                                    <label class="control-label">For Acad. Year:</label>
                                                    <select class="form-control" name="sec_acad" id="sec_acad" required>
                                                        <option value ="" disabled selected>-SELECT-</option>
                                                        <?php //foreach($acad_yr as $r) echo '<option value="'.$r[2].'">'.$r[0].'</option>';?>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label class="control-label">Semester:</label>
                                                    <select class="form-control" name="sec_sem" id="sec_sem" required>
                                                            <option value ="" disabled selected>-SELECT-</option>
                                                            <option value="1st">1st</option>
                                                            <option value="2nd">2nd</option>
                                                            <option value="Summer">Summer</option>
                                                    </select>    
                                                </div> -->
                                                <div class="form-group col-md-4">
                                                    <label class="control-label">Course:</label>
                                                        <select class="form-control" name="sec_dept" id="sec_dept" required>
                                                            <option value ="" disabled selected>-SELECT-</option>
                                                            <?php foreach($dept as $r) echo '<option value="'.$r[3].'">'.$r[0].'</option>';?>
                                                        </select>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label class="control-label">Year Level:</label>
                                                        <select class="form-control" name="sec_yrlvl" id="sec_yrlvl" required>
                                                            <option value ="" disabled selected>-SELECT-</option>
                                                            <option value="1st">1st</option>
                                                            <option value="2nd">2nd</option>
                                                            <option value="3rd">3rd</option>
                                                            <option value="4th">4th</option>
                                                        </select>
                                                </div>
                                                <div class="form-group col-md-4">
                                                        <label class="control-label">Section Description:</label>
                                                        <input class="form-control" type="text" name="sec_desc" id="sec_desc" maxlength="5" pattern="[A-Z0-9]|[A-Z]|[0-9][A-Z]" title="Input valid section." placeholder="1N" required>
                                                </div>      
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" onclick="resetForm1()">Clear</button>
                                                <button type="submit" name="btnAddSection" id="btnAddSection" class="btn btn-success waves-effect text-left">Save</button>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>

                            <div class="modal fade bs-example-modal-lg" id="modalEditSection" tabindex="-1" role="dialog" aria-labelledby="modalEditSection" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h4 class="modal-title">Edit Section Details</h4>
                                        </div>
                                        <div  class="col-md-12" style="background-color: gray; height: 3px; margin-top: -5px;">
                                        </div>
                                        <div class="modal-body">
                                            <form id="edit_section_form" method="POST" enctype="multipart/form-data">
                                                <!-- <div class="form-group col-md-4">
                                                    <label class="control-label">For Acad. Year:</label>
                                                    <select class="form-control" name="sec_edit_acad" id="sec_edit_acad" required>
                                                        <option value ="" disabled selected>-SELECT-</option>
                                                        <?php //foreach($acad_yr as $r) echo '<option value="'.$r[2].'">'.$r[0].'</option>';?>    
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label class="control-label">Semester:</label>
                                                    <select class="form-control" name="sec_edit_sem" id="sec_edit_sem" required>
                                                            <option value ="" disabled selected>-SELECT-</option>
                                                            <option value="1st">1st</option>
                                                            <option value="2nd">2nd</option>
                                                            <option value="Summer">Summer</option>
                                                    </select>    
                                                </div> -->
                                                <div class="form-group col-md-4">
                                                    <label class="control-label">Course:</label>
                                                        <select class="form-control" name="sec_edit_dept" id="sec_edit_dept" required>
                                                            <option value ="" disabled selected>-SELECT-</option>
                                                            <?php foreach($dept as $r) echo '<option value="'.$r[3].'">'.$r[0].'</option>';?>
                                                        </select>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label class="control-label">Year Level:</label>
                                                        <select class="form-control" name="sec_edit_yrlvl" id="sec_edit_yrlvl" required>
                                                            <option value ="" disabled selected>-SELECT-</option>
                                                            <option value="1st">1st</option>
                                                            <option value="2nd">2nd</option>
                                                            <option value="3rd">3rd</option>
                                                            <option value="4th">4th</option>
                                                        </select>
                                                </div>
                                                <div class="form-group col-md-4">
                                                        <label class="control-label">Section Description:</label>
                                                        <input class="form-control" type="text" name="sec_edit_desc" id="sec_edit_desc" maxlength="4" pattern="[A-Z0-9]|[A-Z]|[0-9][A-Z]" title="Input valid section." required>
                                                </div>
                                                <input type="hidden" name="section_id_hid" id="section_id_hid" />      
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" onclick="resetForm2()">Clear</button>
                                                <button type="submit" name="btnEditSection" id="btnEditSection" class="btn btn-success waves-effect text-left">Save</button>
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

    <script type="text/javascript">

         function fetch_select(val)
        {
            $('#section-table').dataTable().fnClearTable();
            $('#section-table').dataTable().fnDraw();
            $('#section-table').dataTable().fnDestroy();
            var dataTable = $('#section-table').DataTable({           
                    "processing" : true,
                    "serverSide" : false,
                    "deferLoading": 10,
                    "bPaginate": true,
                    "aaSorting": [[1,'asc']],
                    "sAjaxSource": "<?php echo base_url()?>Maintenance/get_sectiontbl/"+val,
                    "fnInitComplete": function(){
                        
                    }
            });

            $('#sec_acad').val(val);
        }

        function loadtable()
        {
          $('#section-table').dataTable().fnClearTable();
          $('#section-table').dataTable().fnDraw();
          $('#section-table').dataTable().fnDestroy();
          $('#section-table').dataTable({
              "processing": true,
              "serverSide": false,
              "sAjaxSource": "<?php echo base_url('Maintenance/get_sections')?>",
              "deferLoading": 10,
              "bPaginate": true,
              "aaSorting": [[1,'asc']],
              "fnInitComplete": function(){
                        
              }
          });
        }

        function resetForm1()
        {
            $('#add_section_form')[0].reset();
        }

        function resetForm2()
        {
            $('#edit_section_form')[0].reset();
        }

        function view_data()
        {
            var id = $(this).data("id");
            window.location.replace('<?php echo base_url("Transaction/view_schedule")?>');
        }


        $(document).ready(function(){
            loadtable();

            $('#add_section_form').on("submit", function(event)
            {  
                acad_yr = $('#select_acad').val();
                event.preventDefault();  
                $.ajax({  
                url:"<?php echo base_url('Maintenance/add_sections')?>",  
                method:"POST",  
                data:$('#add_section_form').serialize(),
                success:function(data)
                { 
                    if(data == 'INSERTED')
                    {
                        swal("Added!", "The section is added.", "success");
                        $('#add_section_form')[0].reset();  
                        $('#modalNewSection').modal('hide');
                        $('#section-table').DataTable().destroy();
                        loadtable();
                        // if(acad_yr == 'def')
                        // {
                        //     loadtable();
                        // }
                        // else
                        // {
                        //     fetch_select(acad_yr);
                        // }
                        
                    }

                    if(data == 'NOT INSERTED')
                    {
                        swal("Not Added!", "Something blew up.", "error");
                        $('#add_section_form')[0].reset(); 
                    }

                    if(data == 'THE DATA IS ALREADY INSERTED')
                    {
                        swal("Not Added!", "The data is already inserted.", "error");
                        $('#add_section_form')[0].reset();
                        $('#section-table').DataTable().destroy();
                        loadtable();
                        // if(acad_yr == 'def')
                        // {
                        //     loadtable();
                        // }
                        // else
                        // {
                        //     fetch_select(acad_yr);
                        // }
                    }
                    
                }
                });  
            });

            $(document).on('click', '#edit_data', function(e)
            {  
               e.preventDefault();
               var id = $(this).data("id");
               
               $.ajax({  
                    url:"<?php echo base_url('Maintenance/view_sections')?>", 
                    method:"POST",  
                    data:'section_id='+id,  
                    dataType: "json",
                    success:function(data){  
                         // $('#sec_edit_acad').val(data[0][3]);
                         // $('#sec_edit_sem').val(data[0][4]);
                         $('#sec_edit_dept').val(data[0][0]);
                         $('#sec_edit_yrlvl').val(data[0][1]);
                         $('#sec_edit_desc').val(data[0][2]);
                         $('#section_id_hid').val(data[0][3]);
                         $('#openMod').trigger('click');
                    },
                    error: function (data) {
                        alert(JSON.stringify(data));
                    }
               }); 
            });

            // $(document).on('click', '#view_data', function(e)
            // {  
            //    e.preventDefault();
            //    var id = $(this).data("id");
            
            //    // $var = $this->method_call->view_schedule();
            //    // $.ajax({  
            //    //      url:"<?php //echo base_url('Transaction/view_schedule')?>", 
            //    //      method:"",  
            //    //      data:'',  
            //    //      dataType: "",
            //    //      success:function(data){  
                        
            //    //      },
            //    //      error: function (data) {
            //    //          alert(JSON.stringify(data));
            //    //      }
            //    // }); 
            // });


            $('#edit_section_form').on("submit", function(event)
            {  
                acad_yr = $('#select_acad').val();
                event.preventDefault();  
                $.ajax({  
                url:"<?php echo base_url('Maintenance/edit_sections')?>",  
                method:"POST",  
                data:$('#edit_section_form').serialize(),
                success:function(data)
                {  
                    if(data == 'UPDATED')
                    {
                        swal("Updated!", "The section is updated.", "success");
                        $('#edit_section_form')[0].reset();  
                        $('#modalEditSection').modal('hide');
                        $('#section-table').DataTable().destroy();
                        loadtable();
                        // if(acad_yr == 'def')
                        // {
                        //     loadtable();
                        // }
                        // else
                        // {
                        //     fetch_select(acad_yr);
                        // }
                    }

                    if(data == 'NOT UPDATED')
                    {
                        swal("Not Edited!", "Something blew up.", "error");
                        $('#edit_section_form')[0].reset(); 
                    }

                    if(data == 'THE DATA IS ALREADY INSERTED')
                    {
                        swal("Not Updated!", "The data is already inserted.", "error");
                        $('#modalEditSection').modal('hide');
                        $('#section-table').DataTable().destroy();
                        loadtable();
                        // if(acad_yr == 'def')
                        // {
                        //     loadtable();
                        // }
                        // else
                        // {
                        //     fetch_select(acad_yr);
                        // }
                    }
                }
                });  
            });


        });

    </script>
    
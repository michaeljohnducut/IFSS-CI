<div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                         <h4 class="page-title">Manage Faculty Type Load Limits</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="#">Maintenance</a></li>
                            <li class="active">Load Limits</li>
                        </ol>
                    </div>
                
                </div>
            <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">          
                    <div class="col-sm-12">                            
                            <div class="row">
                                <div class="col-md-10">
                                    <h2>All load limits</h2>
                                </div>
                            </div>
                            <h3 class="box-title m-b-0">Legend:</h3>
                            <div class="row" style="margin-left: 20px; margin-top: 5px;">
                                <div class="col-md-2">
                                    <button class="btn btn-success"><span class="fa fa-pencil"></span></button>&nbsp;
                                    <label style="margin-top: 5px;">Edit Limit</label>
                                </div>
                                <!-- <div class="col-md-2">
                                    <button class="btn btn-danger"><span class="fa fa-trash"></span></button>&nbsp;
                                    <label style="margin-top: 5px;">Delete Limit</label>
                                </div> -->
                            </div>
                            <br>

                            <div class="table-responsive">
                                <table id="load-limit-table" class="table colored-table inverse-tabl table-striped" >
                                    <thead>
                                        <tr>
                                            <th>Faculty Type</th>
                                            <th>Load Type</th>
                                            <th width="400px;">Load Limit</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                     <tbody>
                                          
                                    </tbody>
                                </table>

                            </div>

                            
                            
                            <div class="row">
                                <div class="col-md-3">
                                    <button type="button" class="btn btn-info" data-toggle = "modal" data-target ="#modalNewLimit">Add Faculty Type Load Limit</button>
                                </div>
                                
                            </div>
                        </div>
                    </div>


              
                <!-- /.row -->
                <!-- .right-sidebar -->
               
            </div>
        </div>


        <a data-toggle="modal" href="#modalEditLimit" id="openMod"></a>

    <div class="modal fade bs-example-modal-lg" id="modalNewLimit" tabindex="-1" role="dialog" aria-labelledby="modalNewLimitt" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h4 class="modal-title">Add faculty type load limit</h4>
                                        </div>
                                        <div  class="col-md-12" style="background-color: gray; height: 3px; margin-top: -5px;">

                                        </div>
                                        <div class="modal-body">
                                            <form id="add_loadlimit_form" method="POST" enctype="multipart/form-data">
                                                <!-- <div class="form-group col-md-12"> -->
                                                <div class="form-group col-md-4">
                                                    <label class="control-label">Faculty Type:</label>
                                                    <select class="form-control" name="fact_type" id="fact_type" required >
                                                        <option value="" disabled selected>--SELECT FACULTY TYPE--</option>
                                                        <?php foreach($faculty_type as $r) echo '<option value="'.$r[2].'">'.$r[0].'</option>';?>
                                                    </select>
                                                    <!-- <input class="form-control" type="text" required> -->
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label class="control-label">Load Type:</label>
                                                    <input class="form-control" type="text" id="load_type" name="load_type" pattern="[A-Za-z-\s]{1,}" title="Characters only."  required>
                                                </div>
                                                <div class="form-group col-md-4">
                                                        <label class="control-label">Load Limit:</label>
                                                        <input class="form-control" type="number" min="1" max="40" pattern="[0-9]{1,}" title="Numbers only." id="load_limit" name="load_limit" required>
                                                </div>
                                                <!-- </div> -->
                                                
                                            
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" onclick="resetForm1()">Clear</button>
                                                <button type="submit" name="btnAddLimit" class="btn btn-success waves-effect text-left">Save</button>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>


    <div class="modal fade bs-example-modal-lg" id="modalEditLimit" tabindex="-1" role="dialog" aria-labelledby="modalEditLimit" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h4 class="modal-title">Edit faculty type load limit</h4>
                                        </div>
                                        <div  class="col-md-12" style="background-color: gray; height: 3px; margin-top: -5px;">

                                        </div>
                                        <div class="modal-body">
                                            <form id="edit_loadlimit_form" method="POST" enctype="multipart/form-data">
                                                <div class="form-group col-md-12">
                                                <div class="form-group col-md-6">
                                                    <label class="control-label">Faculty Type:</label>
                                                    <select class="form-control" name="edit_fact_type" id="edit_fact_type" required style="width: 50%;">
                                                        <option value="" disabled selected>--SELECT FACULTY TYPE--</option>
                                                        <?php foreach($faculty_type as $r) echo '<option value="'.$r[2].'">'.$r[0].'</option>';?>
                                                    </select>
                                                    <!-- <input class="form-control" type="text" required> -->
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label class="control-label">Load Type:</label>
                                                    <input class="form-control" type="text" id="edit_load_type" name="edit_load_type" pattern="[A-Za-z-\s]{1,}" title="Characters only."  required>
                                                </div>
                                                <div class="form-group col-md-6">
                                                        <label class="control-label">Load Limit:</label>
                                                        <input class="form-control" type="number" min="1" max="40" pattern="[0-9]{1,}" title="Numbers only." id="edit_load_limit" name="edit_load_limit" required>
                                                </div>
                                                <input type="hidden" name="limit_id_hid" id="limit_id_hid" />
                                                </div>
                                                
                                            
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" onclick="resetForm2()">Clear</button>
                                                <button type="submit" name="btnEditLimit" class="btn btn-success waves-effect text-left">Save</button>
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
        function resetForm1()
        {
            $('#add_loadlimit_form')[0].reset();
        }

        function resetForm2()
        {
            $('#edit_loadlimit_form')[0].reset();
        }

        function loadtable()
        {
          $('#load-limit-table').dataTable().fnClearTable();
          $('#load-limit-table').dataTable().fnDraw();
          $('#load-limit-table').dataTable().fnDestroy();
          $('#load-limit-table').dataTable({
              "processing": true,
              "serverSide": false,
              "sAjaxSource": "<?php echo base_url('Maintenance/get_load_limits')?>",
              "deferLoading": 10,
              "bPaginate": true,
              "aaSorting": [[0,'asc']],
              "fnInitComplete": function(){
                        
              }
          });
        }

        $(document).ready(function(){
            loadtable();

            $('#add_loadlimit_form').on("submit", function(event)
            {  
                event.preventDefault();  
                $.ajax({  
                url:"<?php echo base_url('Maintenance/add_load_limits')?>",  
                method:"POST",  
                data:$('#add_loadlimit_form').serialize(),
                success:function(data)
                { 
                    if(data == 'INSERTED')
                    {
                        swal("Added!", "The faculty load type is added.", "success");
                        $('#add_loadlimit_form')[0].reset();  
                        $('#modalNewLimit').modal('hide');
                        $('#load-limit-table').DataTable().destroy();
                        loadtable();
                    }

                    if(data == 'NOT INSERTED')
                    {
                        swal("Not Added!", "Something blew up.", "error");
                        $('#add_loadlimit_form')[0].reset();
                        $('#load-limit-table').DataTable().destroy();
                        loadtable();
                    }

                    if(data == 'THE DATA IS ALREADY INSERTED')
                    {
                        swal("Not Added!", "The data is already inserted.", "error");
                        $('#add_loadlimit_form')[0].reset();
                        $('#load-limit-table').DataTable().destroy();
                        loadtable();
                    }
                    
                }
                });  
            });

            $(document).on('click', '#edit_data', function(e)
            {  
               e.preventDefault();
               var id = $(this).data("id");
               
               $.ajax({  
                    url:"<?php echo base_url('Maintenance/view_load_limits')?>", 
                    method:"POST",  
                    data:'loadlimit_id='+id,  
                    dataType: "json",
                    success:function(data){  
                         $('#edit_fact_type').val(data[0][1]);
                         $('#edit_load_type').val(data[0][2]);
                         $('#edit_load_limit').val(data[0][3]);
                         $('#limit_id_hid').val(data[0][0]);
                         $('#openMod').trigger('click');
                    },
                    error: function (data) {
                        alert(JSON.stringify(data));
                    }
               }); 
            });

            $('#edit_loadlimit_form').on("submit", function(event)
            {  
                event.preventDefault();  
                $.ajax({  
                url:"<?php echo base_url('Maintenance/edit_load_limits')?>",  
                method:"POST",  
                data:$('#edit_loadlimit_form').serialize(),
                success:function(data)
                {  
                    if(data == 'UPDATED')
                    {
                        swal("Updated!", "The faculty load type is updated.", "success");
                        $('#edit_loadlimit_form')[0].reset();  
                        $('#modalEditLimit').modal('hide');
                        $('#load-limit-table').DataTable().destroy();
                        loadtable();
                    }

                    if(data == 'NOT UPDATED')
                    {
                        swal("Not Updated!", "Something blew up.", "error");
                        $('#edit_loadlimit_form')[0].reset();
                        $('#load-limit-table').DataTable().destroy();
                        loadtable();
                    }

                    if(data == 'THE DATA IS ALREADY INSERTED')
                    {
                        swal("Not Updated!", "The data is already inserted.", "error");
                        $('#modalEditLimit').modal('hide');
                        $('#load-limit-table').DataTable().destroy();
                        loadtable();
                    }
                }
                });  
            });

        });

    </script>
<div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                         <h4 class="page-title">Manage Course Specializations</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="#">Maintenance</a></li>
                            <li class="active">Course Specializations</li>
                        </ol>
                    </div>
                
                </div>
            <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">          
                    <div class="col-sm-12">                            
                            <!-- <div class="row">
                                <div class="col-md-10">
                                    <h2>Lists of Specializations</h2>
                                </div>
                            </div> -->
                            <h3 class="box-title m-b-0">Legend:</h3>
                            <div class="row" style="margin-left: 20px; margin-top: 5px;">
                                <div class="col-md-2">
                                    <button class="btn btn-success"><span class="fa fa-pencil"></span></button>&nbsp;
                                    <label style="margin-top: 5px;">Edit Specialization</label>
                                </div>
                                <!-- <div class="col-md-3">
                                    <button class="btn btn-danger"><span class="fa fa-trash"></span></button>&nbsp;
                                    <label style="margin-top: 5px;">Delete Specialization</label>
                                </div> -->
                            </div>
                            <br>

                            <div class="table-responsive">
                                <table id="spec-table" class="table colored-table inverse-tabl table-striped" >
                                    <thead>
                                        <tr>
                                            <th width="80%;">Specialization</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                     <tbody>
                                          
                                    </tbody>
                                </table>

                            </div>
                            
                            <div class="row">
                                <div class="col-md-3">
                                    <button type="button" class="btn btn-info" data-toggle = "modal" data-target ="#modalNewSpec">Add New Specialization</button>
                                </div>
                                
                            </div>
                        </div>
                    </div>


              
                <!-- /.row -->
                <!-- .right-sidebar -->
               
            </div>
        </div>


        <a data-toggle="modal" href="#modalEditSpec" id="openMod"></a>

    <div class="modal fade bs-example-modal-lg" id="modalNewSpec" tabindex="-1" role="dialog" aria-labelledby="modalNewSpec" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h4 class="modal-title">Add a new specialization</h4>
                                        </div>
                                        <div  class="col-md-12" style="background-color: gray; height: 3px; margin-top: -5px;">

                                        </div>
                                        <div class="modal-body">
                                            <form id="add_spec_form" method="POST" enctype="multipart/form-data">
                                                <div class="form-group col-md-8">
                                                    <label class="control-label">Specialization:</label>
                                                    <input class="form-control" type="text" id="new_spec" name="new_spec" pattern="[A-Za-z,\s'/#.-]{1,}" title="Characters only." required>
                                                </div>
                                            
                                                <div class="col-md-6">
                                                    <div class="col-md-3">
                                                        <button type="button" class="btn btn-default" onclick="resetForm1()">Clear</button>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <button type="submit" class="btn btn-success waves-effect text-left">Save</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>


    <div class="modal fade bs-example-modal-lg" id="modalEditSpec" tabindex="-1" role="dialog" aria-labelledby="modalEditSpec" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h4 class="modal-title">Edit specialization</h4>
                                        </div>
                                        <div  class="col-md-12" style="background-color: gray; height: 3px; margin-top: -5px;">

                                        </div>
                                        <div class="modal-body">
                                            <form id="edit_spec_form" method="POST" enctype="multipart/form-data">
                                                <div class="form-group col-md-8">
                                                    <label class="control-label">Specialization:</label>
                                                    <input class="form-control" type="text" id="edit_spec" name="edit_spec" pattern="[A-Za-z,\s'/#.-]{1,}" title="Characters only." required>
                                                </div>
                                                <input type="hidden" name="spec_id_hid" id="spec_id_hid" />

                                                <div class="col-md-6">
                                                    <div class="col-md-3">
                                                        <button type="button" class="btn btn-default" onclick="resetForm2()">Clear</button>
                                                    </div>
                                                    <div class="col-md-3">
                                                         <button type="submit" class="btn btn-success waves-effect text-left">Save</button>
                                                    </div>
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
            $('#add_spec_form')[0].reset();  
        }

        function resetForm2()
        {
            $('#edit_spec_form')[0].reset();
        }

        function loadtable()
        {
          $('#spec-table').dataTable().fnClearTable();
          $('#spec-table').dataTable().fnDraw();
          $('#spec-table').dataTable().fnDestroy();
          $('#spec-table').dataTable({
              "processing": true,
              "serverSide": false,
              "sAjaxSource": "<?php echo base_url('Maintenance/get_specializations')?>",
              "deferLoading": 10,
              "bPaginate": true,
              "aaSorting": [[0,'asc']],
              "fnInitComplete": function(){
                        
              }
          });
        }

        $(document).ready(function(){
            loadtable();

            $('#add_spec_form').on("submit", function(event)
            {  
                event.preventDefault();  
                $.ajax({  
                url:"<?php echo base_url('Maintenance/add_specializations')?>",  
                method:"POST",  
                data:$('#add_spec_form').serialize(),
                success:function(data)
                { 
                    if(data == 'INSERTED')
                    {
                        swal("Added!", "The specialization is added.", "success");
                        $('#add_spec_form')[0].reset();  
                        $('#modalNewSpec').modal('hide');
                        $('#spec-table').DataTable().destroy();
                        loadtable();
                    }

                    if(data == 'NOT INSERTED')
                    {
                        swal("Not Added!", "Something blew up.", "error");
                        $('#add_spec_form')[0].reset();
                        $('#spec-table').DataTable().destroy();
                        loadtable();
                    }

                    if(data == 'THE DATA IS ALREADY INSERTED')
                    {
                        swal("Not Added!", "The data is already inserted.", "error");
                        $('#add_spec_form')[0].reset();
                        $('#spec-table').DataTable().destroy();
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
                    url:"<?php echo base_url('Maintenance/view_specializations')?>", 
                    method:"POST",  
                    data:'spec_id='+id,  
                    dataType: "json",
                    success:function(data){  
                         $('#edit_spec').val(data[0][1]);
                         $('#spec_id_hid').val(data[0][0]);
                         $('#openMod').trigger('click');
                    },
                    error: function (data) {
                        alert(JSON.stringify(data));
                    }
               }); 
            });

            $('#edit_spec_form').on("submit", function(event)
            {  
                event.preventDefault();  
                $.ajax({  
                url:"<?php echo base_url('Maintenance/edit_specializations')?>",  
                method:"POST",  
                data:$('#edit_spec_form').serialize(),
                success:function(data)
                {  
                    if(data == 'UPDATED')
                    {
                        swal("Updated!", "The specialization is updated.", "success");
                        $('#edit_spec_form')[0].reset();  
                        $('#modalEditSpec').modal('hide');
                        $('#spec-table').DataTable().destroy();
                        loadtable();
                    }

                    if(data == 'NOT UPDATED')
                    {
                        swal("Not Updated!", "Something blew up.", "error");
                        $('#edit_spec_form')[0].reset();
                        $('#spec-table').DataTable().destroy();
                        loadtable();
                    }

                    if(data == 'THE DATA IS ALREADY INSERTED')
                    {
                        swal("Not Updated!", "The data is already inserted.", "error");
                        $('#modalEditSpec').modal('hide');
                        $('#spec-table').DataTable().destroy();
                        loadtable();
                    }
                }
                });  
            });


        });


    </script>
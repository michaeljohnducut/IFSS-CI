<div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                         <h4 class="page-title">Manage Curriculum Years</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="#">Maintenance</a></li>
                            <li class="active">Curriculum Years</li>
                        </ol>
                    </div>
                
                </div>
            <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">          
                    <div class="col-sm-12">                            
                            <div class="row">
                                <div class="col-md-10">
                                    <h2>All Curriculum Years</h2>
                                </div>
                            </div>
                            <h3 class="box-title m-b-0">Legend:</h3>
                            <div class="row" style="margin-left: 20px; margin-top: 5px;">
                                <div class="col-md-2">
                                    <button class="btn btn-success"><span class="fa fa-pencil"></span></button>&nbsp;
                                    <label style="margin-top: 5px;">Edit Year</label>
                                </div>
                            </div>
                            <br>

                            <div class="table-responsive">
                                <table id="curr-yr-table" class="table colored-table inverse-tabl table-striped">
                                    <thead>
                                        <tr>
                                            <th width="80%;">Curriculum Year</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                     <tbody>
                                         
                                    </tbody>
                                </table>

                            </div>

                            <div class="modal fade bs-example-modal-lg" id="modalNewCurrYear" tabindex="-1" role="dialog" aria-labelledby="modalNewSubject" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h4 class="modal-title">Add a new curriculum year</h4>
                                        </div>
                                        <div  class="col-md-12" style="background-color: gray; height: 3px; margin-top: -5px;">

                                        </div>
                                        <div class="modal-body">
                                            <form id="add_year_form" method="POST" enctype="multipart/form-data">
                                                <div class="form-group col-md-8">
                                                    <label class="control-label">Curriculum Year:</label>
                                                    <input class="form-control" id="curr_year" name="curr_year" type="text" maxlength="4" pattern="\d{4}" title="YYYY" required>
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

                            <a data-toggle="modal" href="#modalEditCurrYear" id="showMod"></a>

                            <div class="modal fade bs-example-modal-lg" id="modalEditCurrYear" tabindex="-1" role="dialog" aria-labelledby="modalEditCurrYear" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h4 class="modal-title">Edit curriculum year</h4>
                                        </div>
                                        <div  class="col-md-12" style="background-color: gray; height: 3px; margin-top: -5px;">

                                        </div>
                                        <div class="modal-body">
                                            <form id="update_year_form" method="POST" enctype="multipart/form-data">
                                                <div class="form-group col-md-8">
                                                    <label class="control-label">Curriculum Year:</label>
                                                    <input class="form-control" id="curr_year_update" name="curr_year_update" type="text" maxlength="4" pattern="\d{4}" title="YYYY" required>
                                                    <input type="hidden" name="hid_yr_id" id="hid_yr_id">
                                                </div>
                                            
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
                            
                            <div class="row">
                                <div class="col-md-3">
                                    <button type="button" class="btn btn-info" data-toggle = "modal" data-target ="#modalNewCurrYear">Add Curriculum Year</button>
                                </div>
                                
                            </div>
                        </div>
                    </div>


              
                <!-- /.row -->
                <!-- .right-sidebar -->
               
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
        function resetForm1()
        {
            $('#add_year_form')[0].reset();  
        }

        function resetForm2()
        {
            $('#update_year_form')[0].reset();
        }

        function loadtable()
        {
          $('#curr-yr-table').dataTable().fnClearTable();
          $('#curr-yr-table').dataTable().fnDraw();
          $('#curr-yr-table').dataTable().fnDestroy();
          $('#curr-yr-table').dataTable({
              "processing": true,
              "serverSide": false,
              "sAjaxSource": "<?php echo base_url('Maintenance/get_curriculum_years')?>",
              "deferLoading": 10,
              "bPaginate": true,
              "aaSorting": [[0,'asc']],
              "fnInitComplete": function(){
                        
              }
          });
        }

        $(document).ready(function(){
            loadtable();

            $('#add_year_form').on('submit', function(event)
            {
                event.preventDefault();  
                $.ajax({  
                url:"<?php echo base_url('Maintenance/add_curriculum_years')?>",  
                method:"POST",  
                data:$('#add_year_form').serialize(),
                success:function(data)
                {  
                    if(data == 'INSERTED')
                    {
                        swal("Added!", "The curriculum year has been added.", "success");
                        $('#add_year_form')[0].reset(); 
                        $('#modalNewCurrYear').modal('hide');
                        $('#curr-yr-table').DataTable().destroy();
                        loadtable();
                    }

                    if(data == 'NOT INSERTED')
                    {
                        swal("Not Added!", "Something blew up.", "error");
                        $('#add_year_form')[0].reset(); 
                        $('#curr-yr-table').DataTable().destroy();
                        loadtable();
                    }

                    if(data == 'THE DATA IS ALREADY INSERTED')
                    {
                        swal("Not Added!", "The data is already inserted.", "error");
                        $('#add_year_form')[0].reset(); 
                        $('#curr-yr-table').DataTable().destroy();
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
                    url:"<?php echo base_url('Maintenance/view_curriculum_years')?>", 
                    method:"POST",  
                    data:'year_code='+id,  
                    dataType: "json",
                    success:function(data){
                        $('#curr_year_update').val(data[0][1]);
                        $('#hid_yr_id').val(id);
                        $('#showMod').trigger('click');   
                    },
                    error: function (data) {
                        alert(JSON.stringify(data));
                    }
               }); 
            }); 


            $('#update_year_form').on("submit", function(event)
            {  
                var id = $('#hid_yr_id').val();
                var year_desc = $('#curr_year_update').val();
                event.preventDefault();  
                $.ajax({  
                url:"<?php echo base_url('Maintenance/edit_curriculum_years')?>",  
                method:"POST",  
                data:{year_code:id, year_desc:year_desc},
                success:function(data)
                {  
                    if(data == 'UPDATED')
                    {
                        swal("Updated!", "The curriculum year has been updated.", "success");
                        $('#update_year_form')[0].reset();  
                        $('#modalEditCurrYear').modal('hide');
                        $('#curr-yr-table').DataTable().destroy();
                        loadtable();
                    }

                    if(data == 'NOT UPDATED')
                    {
                        swal("Not Updated!", "Something blew up.", "error");
                        $('#update_year_form')[0].reset();  
                        $('#curr-yr-table').DataTable().destroy();
                        loadtable();
                    }

                    if(data == 'THE DATA IS ALREADY INSERTED')
                    {
                        swal("Not Updated!", "The data is already inserted.", "error");
                        $('#modalEditCurrYear').modal('hide');
                        $('#curr-yr-table').DataTable().destroy();
                        loadtable();
                    }
                },
                error: function (data) {
                        swal("ERROR!", "Error on updating.", "error");
                        alert(JSON.stringify(data));
                }
                });
            });

        });

    </script>
<div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                         <h4 class="page-title">Utilities</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="#">Admin</a></li>
                            <li class="active">Utilities</li>
                        </ol>
                    </div>
                
                </div>
            <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">          
                    <div class="col-sm-12">                            
                            <div class="row">
                                <div class="col-md-10">
                                    <h2>Lists of Accounts</h2>
                                </div>
                            </div>
                            <h3 class="box-title m-b-0">Legend:</h3>
                            <div class="row" style="margin-left: 20px; margin-top: 5px;">
                                <div class="col-md-2">
                                    <button class="btn btn-success"><span class="fa fa-pencil"></span></button>&nbsp;
                                    <label style="margin-top: 5px;">Edit Account Details</label>
                                </div>
                                <div class="col-md-3">
                                    <button class="btn btn-info"><span class="fa fa-eye"></span></button>&nbsp;
                                    <label style="margin-top: 5px;">View Account Details</label>
                                </div>
                            </div>
                            <br>

                            <div class="table-responsive">
                                <table id="account-table" class="table colored-table inverse-tabl table-striped" >
                                    <thead>
                                        <tr>
                                            <th width="400px;">Faculty ID</th>
                                            <th>Faculty Name</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                     <tbody>
                                          
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>


              
                <!-- /.row -->
                <!-- .right-sidebar -->
               
            </div>
        </div>

    <a data-toggle="modal" href="#modalEditDetails" id="openMod"></a>

    <a data-toggle="modal" href="#modalViewDetails" id="openMod2"></a>

    <div class="modal fade bs-example-modal-lg" id="modalEditDetails" tabindex="-1" role="dialog" aria-labelledby="modalEditDept" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h4 class="modal-title">Edit Account Details</h4>
                                        </div>
                                        <div  class="col-md-12" style="background-color: gray; height: 3px; margin-top: -5px;">

                                        </div>
                                        <div class="modal-body">
                                            <form id="edit_details_form" method="POST" enctype="multipart/form-data">
                                                <div class="form-group col-md-6">
                                                    <label class="control-label">Generated Password:</label>
                                                    <input class="form-control" type="text" id="edit_password" name="edit_password" pattern="[a-zA-Z0-9-]+" minlength="6" title="Characters and numbers only." required>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label class="control-label">Account Type:</label>
                                                    <select class="form-control" id="select_type" name="select_type" required>
                                                        <option value="" disabled selected>-Type-</option>
                                                        <option value="admin">Admin</option>
                                                        <option value="faculty">Faculty</option>
                                                    </select>
                                                </div>
                                                <input type="hidden" name="account_hid" id="account_hid">
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" onclick="resetForm2()">Clear</button>
                                                <button type="submit" name="btnEditDept" id="btnEditDept" class="btn btn-success waves-effect text-left">Save</button>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>

    <div class="modal fade bs-example-modal-lg" id="modalViewDetails" tabindex="-1" role="dialog" aria-labelledby="modalEditDept" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h4 class="modal-title">View Account Details</h4>
                                        </div>
                                        <div  class="col-md-12" style="background-color: gray; height: 3px; margin-top: -5px;">

                                        </div>
                                        <div class="modal-body">
                                            <form id="edit_details_form" method="POST" enctype="multipart/form-data">
                                                <div class="form-group col-md-6">
                                                    <label class="control-label">Generated Password:</label>
                                                    <input class="form-control" type="text" id="view_password" name="view_password" pattern="[a-zA-Z0-9-]+" title="Characters and numbers only." disabled>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label class="control-label">Account Type:</label>
                                                    <select class="form-control" id="view_type" name="view_type" disabled>
                                                        <option value="" disabled selected>-Type-</option>
                                                        <option value="admin">Admin</option>
                                                        <option value="faculty">Faculty</option>
                                                    </select>
                                                </div>
                                                <input type="hidden" name="account_hid" id="account_hid">
                                            <div class="modal-footer">
                                                <!-- <button type="button" class="btn btn-default" onclick="resetForm2()">Clear</button>
                                                <button type="submit" name="btnEditDept" id="btnEditDept" class="btn btn-success waves-effect text-left">Save</button> -->
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
        function resetForm2()
        {
            $('#edit_details_form')[0].reset();
        }

        function loadtable()
        {
          $('#account-table').dataTable().fnClearTable();
          $('#account-table').dataTable().fnDraw();
          $('#account-table').dataTable().fnDestroy();
          $('#account-table').dataTable({
              "processing": true,
              "serverSide": false,
              "sAjaxSource": "<?php echo base_url('Transaction/get_account')?>",
              "deferLoading": 10,
              "bPaginate": true,
              "aaSorting": [[1,'asc']],
              "fnInitComplete": function(){
                        
              }
          });
        }

        $(document).ready(function(){
            loadtable();

            $(document).on('click', '#edit_data', function(e)
            {  
               e.preventDefault();
               var id = $(this).data("id");
               
               $.ajax({  
                    url:"<?php echo base_url('Transaction/view_account')?>",
                    method:"POST",  
                    data:{account_id:id},  
                    dataType: "json",
                    cache: false,
                    success:function(data){  
                         $('#edit_password').val(data[0][0]);
                         $('#select_type').val(data[0][1]);
                         $('#account_hid').val(data[0][2]);
                         $('#openMod').trigger('click');

                    },
                    error: function (data) {
                        alert(JSON.stringify(data));
                    }
               }); 
            });

            $(document).on('click', '#view_data', function(e)
            {  
               e.preventDefault();
               var id = $(this).data("id");
               
               $.ajax({  
                    url:"<?php echo base_url('Transaction/view_account')?>",
                    method:"POST",  
                    data:{account_id:id},  
                    dataType: "json",
                    cache: false,
                    success:function(data){  
                         $('#view_password').val(data[0][0]);
                         $('#view_type').val(data[0][1]);
                         $('#openMod2').trigger('click');

                    },
                    error: function (data) {
                        alert(JSON.stringify(data));
                    }
               }); 
            });


            $('#edit_details_form').on("submit", function(event)
            {  
                event.preventDefault();  
                $.ajax({  
                url:"<?php echo base_url('Transaction/edit_account')?>",  
                method:"POST",  
                data:$('#edit_details_form').serialize(),
                success:function(data)
                {  
                    if(data == 'UPDATED')
                    {
                        swal("Updated!", "Account details is updated.", "success");
                        $('#edit_details_form')[0].reset();  
                        $('#modalEditDetails').modal('hide');
                        $('#account-table').DataTable().destroy();
                        loadtable();
                    }

                    if(data == 'NOT UPDATED')
                    {
                        swal("Not Updated!", "Something blew up.", "error");
                        $('#edit_details_form')[0].reset();
                        $('#account-table').DataTable().destroy();
                        loadtable();
                    }
                }
                });  
            });


        });


    </script>
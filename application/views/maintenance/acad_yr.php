<div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                         <h4 class="page-title">Manage Academic Year</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="#">Maintenance</a></li>
                            <li class="active">Academic Year</li>
                        </ol>
                    </div>
                
                </div>
            <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">          
                    <div class="col-sm-12">                            
                            <div class="row">
                                <div class="col-md-10">
                                    <h2>All Academic Years</h2>
                                </div>
                            </div>
                            <h3 class="box-title m-b-0">Legend:</h3>
                            <div class="row" style="margin-left: 20px; margin-top: 5px;">
                                <div class="col-md-2">
                                    <button class="btn btn-success"><span class="fa fa-pencil"></span></button>&nbsp;
                                    <label style="margin-top: 5px;">Edit Year</label>
                                </div>
                                <!-- <div class="col-md-2">
                                    <button class="btn btn-danger"><span class="fa fa-trash"></span></button>&nbsp;
                                    <label style="margin-top: 5px;">Delete Year</label>
                                </div> -->
                            </div>
                            <br>

                            <div class="table-responsive">
                                <table id="acad-year-table" class="table colored-table inverse-tabl table-striped">
                                    <thead>
                                        <tr>
                                            <th width="500px;">Academic Year</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                     <tbody>
                                        
                                    </tbody>
                                </table>

                            </div>
                            
                            <div class="row">
                                <div class="col-md-3">
                                    <button type="button" class="btn btn-info" data-toggle = "modal" data-target ="#modalNewAcadYear">Add Academic Year</button>
                                </div>
                                
                            </div>
                        </div>
                    </div>


              
                <!-- /.row -->
                <!-- .right-sidebar -->
               
            </div>
        </div>

        <a data-toggle="modal" href="#modalEditAcadYear" id="openMod"></a>

    <div class="modal fade bs-example-modal-lg" id="modalNewAcadYear" tabindex="-1" role="dialog" aria-labelledby="modalNewAcadYear" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h4 class="modal-title">Add a new academic year</h4>
                                        </div>
                                        <div  class="col-md-12" style="background-color: gray; height: 3px; margin-top: -5px;">

                                        </div>
                                        <div class="modal-body">
                                            <form id="add_acadyr_form" method="POST" enctype="multipart/form-data">
                                                <div class="form-group col-md-8">
                                                    <label class="control-label">Acad Year:</label>
                                                    <input class="form-control" type="text" id="new_acadyr" name="new_acadyr" placeholder="2017-2018" pattern="2[0-8][0-9]{2}-2[0-8][0-9]{2}" title="YYYY-YYYY" required>
                                                </div>
                                            
                                                 <div class="col-md-6">
                                                    <div class="col-md-3">
                                                        <button type="button" class="btn btn-default" onclick="resetForm1()">Reset</button>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <button type="submit" class="btn btn-success waves-effect text-left">Add Academic Year</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>

    <div class="modal fade bs-example-modal-lg" id="modalEditAcadYear" tabindex="-1" role="dialog" aria-labelledby="modalEditAcadYear" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h4 class="modal-title">Edit academic year</h4>
                                        </div>
                                        <div  class="col-md-12" style="background-color: gray; height: 3px; margin-top: -5px;">

                                        </div>
                                        <div class="modal-body">
                                            <form id="edit_acadyr_form" method="POST" enctype="multipart/form-data">
                                                <div class="form-group col-md-8">
                                                    <label class="control-label">Acad Year:</label>
                                                    <input class="form-control" type="text" id="edit_acadyr" name="edit_acadyr" placeholder="2017-2018" pattern="2[0-8][0-9]{2}-2[0-8][0-9]{2}" title="YYYY-YYYY" required>
                                                </div>
                                                <input type="hidden" name="acadyr_id_hid" id="acadyr_id_hid" />

                                                <div class="col-md-6">
                                                    <div class="col-md-3">
                                                        <button type="button" class="btn btn-default" onclick="resetForm2()">Reset</button>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <button type="submit" class="btn btn-success waves-effect text-left">Edit Academic Year</button>
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
            $('#add_acadyr_form')[0].reset();  
        }

        function resetForm2()
        {
            $('#edit_acadyr_form')[0].reset();
        }

        function loadtable()
        {
          $('#acad-year-table').dataTable().fnClearTable();
          $('#acad-year-table').dataTable().fnDraw();
          $('#acad-year-table').dataTable().fnDestroy();
          $('#acad-year-table').dataTable({
              "processing": true,
              "serverSide": false,
              "sAjaxSource": "<?php echo base_url('Maintenance/get_acad_yrs')?>",
              "deferLoading": 10,
              "bPaginate": true,
              "aaSorting": [[0,'asc']],
              "fnInitComplete": function(){
                        
              }
          });
        }

        $(document).ready(function(){
            loadtable();

            $('#add_acadyr_form').on("submit", function(event)
            {  
                event.preventDefault();  
                $.ajax({  
                url:"<?php echo base_url('Maintenance/add_acad_yrs')?>",  
                method:"POST",  
                data:$('#add_acadyr_form').serialize(),
                success:function(data)
                { 
                    if(data == 'INSERTED')
                    {
                        swal("Added!", "The academic year is added.", "success");
                        $('#add_acadyr_form')[0].reset();  
                        $('#modalNewAcadYear').modal('hide');
                        $('#acad-year-table').DataTable().destroy();
                        loadtable();
                    }

                    if(data == 'NOT INSERTED')
                    {
                        swal("Not Added!", "Something blew up.", "error");
                        $('#add_acadyr_form')[0].reset();
                        $('#acad-year-table').DataTable().destroy();
                        loadtable();
                    }

                    if(data == 'THE DATA IS ALREADY INSERTED')
                    {
                        swal("Not Added!", "The data is already inserted.", "error");
                        $('#add_acadyr_form')[0].reset();
                        $('#acad-year-table').DataTable().destroy();
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
                    url:"<?php echo base_url('Maintenance/view_acad_yrs')?>", 
                    method:"POST",  
                    data:'acadyr_id='+id,  
                    dataType: "json",
                    success:function(data){  
                         $('#edit_acadyr').val(data[0][1]);
                         $('#acadyr_id_hid').val(data[0][0]);
                         $('#openMod').trigger('click');
                    },
                    error: function (data) {
                        alert(JSON.stringify(data));
                    }
               }); 
            });

            $('#edit_acadyr_form').on("submit", function(event)
            {  
                event.preventDefault();  
                $.ajax({  
                url:"<?php echo base_url('Maintenance/edit_acad_yrs')?>",  
                method:"POST",  
                data:$('#edit_acadyr_form').serialize(),
                success:function(data)
                {  
                    if(data == 'UPDATED')
                    {
                        swal("Updated!", "The academic year is updated.", "success");
                        $('#edit_acadyr_form')[0].reset();  
                        $('#modalEditAcadYear').modal('hide');
                        $('#acad-year-table').DataTable().destroy();
                        loadtable();
                    }

                    if(data == 'NOT UPDATED')
                    {
                        swal("Not Updated!", "Something blew up.", "error");
                        $('#edit_acadyr_form')[0].reset();
                        $('#acad-year-table').DataTable().destroy();
                        loadtable();
                    }

                    if(data == 'THE DATA IS ALREADY INSERTED')
                    {
                        swal("Not Updated!", "The data is already inserted.", "error");
                        $('#modalEditAcadYear').modal('hide');
                        $('#acad-year-table').DataTable().destroy();
                        loadtable();
                    }
                }
                });  
            });

        });

    </script>
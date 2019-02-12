<div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                         <h4 class="page-title">Manage Room and Laboratories</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="#">Maintenance</a></li>
                            <li class="active">Rooms and Laboratories</li>
                        </ol>
                    </div>
                
                </div> 
                 <div class="white-box">
            <div class="row">
                    <!-- <div class="col-sm-12"> -->
                <div class="col-sm-12">
                    <br>
                    <h2>Search Filter</h2>
                    
                </div>
                <div  class="col-sm-12" style="background-color: gray; height: 3px; margin-top: -5px;">

                </div> 
                        
                <!-- <div class="col-md-3">
                    <br>
                    <label class="control-label">Select Acad Year:</label>
                        <select class="form-control" id="select_acad">
                            <option value="def">ACADEMIC YEAR</option>
                            <?php //foreach($acad_yr as $r) echo '<option value="'.$r[2].'">'.$r[0].'</option>';?>
                        </select>
                </div> -->

                 <div class="col-md-3">
                    <br>
                    <label class="control-label">Select Room Description</label>
                     <select class="form-control" id="select_rm" onChange="fetch_select(this.value)">
                        <option value="def">--ROOM DESCRIPTION--</option>
                        <option value="Lecture Room">Lecture Room</option>
                        <option value="Laboratory Room">Laboratory Room</option>
                      </select>
                      <br><br>
                </div>

                <div  class="col-md-12" style="background-color: gray; height: 3px; margin-top: -5px;">

                </div>
                    <div class="col-md-12">
                        <br>
                        <h3 class="box-title m-b-0">Legend:</h3>
                        
                    </div>
                        <div class="row" style="margin-left: 20px; margin-top: 5px;">
                            <div class="col-md-2">
                                <button class="btn btn-success"><span class="fa fa-pencil"></span></button>&nbsp;
                                <label style="margin-top: 5px;">Edit Room</label>
                            </div>
                            <!-- <div class="col-md-2">
                                <button class="btn btn-danger"><span class="fa fa-trash-o"></span></button>&nbsp;
                                <label style="margin-top: 5px;"> Delete Room</label>
                            </div> -->
                            <!-- <div class="col-md-3">
                                <button class="btn btn-info"><span class="fa fa-eye"></span></button>&nbsp;
                                <label style="margin-top: 5px;">View Room Schedule</label>
                            </div> -->
                          
                            <br>
                            <br>
                            <br>

                    <div class="table-responsive">
                        <h4> <strong></strong></h4>
                    <table id="room-table" class="table table-striped">
                        <thead>
                                    <tr>

                                        <th>Room Code</th>
                                        <th>Room Description</th>
                                        <th>Building</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                    </div>
                    <br>
                    <br>

                            <div class="row">
                                    <div class="col-md-12">
                                        <button type="button" class="btn btn-info" data-toggle = "modal" data-target="#modalAddRoom" style="margin-top: 10px;">Add Room</button>
                                    </div>
                            </div>
                        </div>
                             
                        </div>
                    </div>
                    <br>
                </div>

     <a data-toggle="modal" href="#modalEditRoom" id="openMod"></a>

                            <div class="modal fade bs-example-modal-lg" id="modalAddRoom" tabindex="-1" role="dialog" aria-labelledby="modalNewRoom" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h4 class="modal-title">Add Room</h4>
                                        </div>
                                        <div  class="col-md-12" style="background-color: gray; height: 3px; margin-top: -5px;">
                                        </div>
                                        <div class="modal-body">
                                        <form id="add_room_form" method="POST">
                                            <div class="form-group col-md-4">
                                                    <label class="control-label">Room Code:</label>
                                                    <input class="form-control" type="text" name="rm_code" id="rm_code" pattern="[A-Z]{1}[0-9]{3}" title ="Wing Code + Room Number (Ex: S501)" required>
                                            </div>
                                            <div class="form-group col-md-4">
                                                    <label class="control-label">Room Description:</label>
                                                    <select class="form-control" id="rm_desc" name="rm_desc" required>
                                                        <option value ="" disabled selected>-SELECT-</option>
                                                        <option value="Lecture Room">Lecture Room</option>
                                                        <option value="Laboratory Room">Laboratory Room </option>      
                                                    </select>
                                            </div>
                                            <div class="form-group col-md-4">
                                                    <label class="control-label">Building:</label>
                                                    <input class="form-control" type="text" name="building" id="building" pattern="[A-Za-z,-\s'.]{2,}" title ="Characters only." required>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" onclick="resetForm1()">Clear</button>
                                                <button type="submit" class="btn btn-success waves-effect text-left" id="btnAddRm" name="btnAddRm">Save</button>
                                            </div> 
                                        </form>
                                        </div> 
                                    </div>
                                </div>
                            </div>

<!--Modal 2-->
  
                                <div class="modal fade bs-example-modal-md" id="modalEditRoom" tabindex="-1" role="dialog" aria-labelledby="modalEditRoom" aria-hidden="true" style="display: none;">
                                    <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h4 class="modal-title">Edit Room</h4>
                                        </div>
                                        <div  class="col-md-12" style="background-color: gray; height: 3px; margin-top: -5px;">
                                        </div>
                                        <div class="modal-body">
                                        <form id="edit_room_form"  method="POST">
                                            <div class="form-group col-md-4">
                                                    <label class="control-label">Room Code:</label>
                                                    <input class="form-control" type="text" name="room_edit_code" id="room_edit_code" pattern="[A-Z]{1}[0-9]{3}" title ="Wing Code + Room Number (Ex: S501)" required>
                                            </div>
                                            <div class="form-group col-md-4">
                                                    <label class="control-label">Room Description:</label>
                                                    <select class="form-control" name="room_edit_desc" id="room_edit_desc" required>
                                                        <option value ="" disabled selected>-SELECT-</option>
                                                        <option value="Lecture Room">Lecture Room</option>
                                                        <option value="Laboratory Room">Laboratory Room </option>      
                                                    </select>
                                            </div>
                                            <div class="form-group col-md-4">
                                                    <label class="control-label">Building:</label>
                                                    <input class="form-control" type="text" name="edit_building" id="edit_building" pattern="[A-Za-z,-\s'.]{2,}" title ="Characters only." required>
                                            </div>
                                             <input type="hidden" name="room_id_hid" id="room_id_hid" /> 
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" onclick="resetForm2()" >Clear</button>
                                                <button type="submit" class="btn btn-success waves-effect text-left" id="btnEditRm" name="btnEditRm">Save</button>
                                            </div> 
                                        </form>
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
        function resetForm1()
        {
            $('#add_room_form')[0].reset();
        }

        function resetForm2()
        {
            $('#edit_room_form')[0].reset();
        }

        function view_data()
        {
            var id = $(this).data("id");
            window.location.replace('<?php echo base_url("Transaction/view_schedule")?>');
        }

        function fetch_select(val)
        {
            $('#room-table').dataTable().fnClearTable();
            $('#room-table').dataTable().fnDraw();
            $('#room-table').dataTable().fnDestroy();
            $('#room-table').DataTable({           
                    "processing" : true,
                    "serverSide" : false,
                    "deferLoading": 10,
                    "bPaginate": true,
                    "aaSorting": [[0,'asc']],
                    "sAjaxSource": "<?php echo base_url('Maintenance/get_roomtbl')?>"+"?loaddata="+val,
                    "fnInitComplete": function(){
                        
                    }
            });

            $('#rm_desc').val(val);
        }

        function loadtable()
        {
          $('#room-table').dataTable().fnClearTable();
          $('#room-table').dataTable().fnDraw();
          $('#room-table').dataTable().fnDestroy();
          $('#room-table').dataTable({
              "processing": true,
              "serverSide": false,
              "sAjaxSource": "<?php echo base_url('Maintenance/get_rooms')?>",
              "deferLoading": 10,
              "bPaginate": true,
              "aaSorting": [[1,'asc']],
              "fnInitComplete": function(){
                        
              }
          });
        }

        $(document).ready(function(){
            loadtable();

            $('#add_room_form').on("submit", function(event)
            {
                room_desc = $('#select_rm').val();
                event.preventDefault();  
                $.ajax({  
                url:"<?php echo base_url('Maintenance/add_rooms')?>",  
                method:"POST",  
                data:$('#add_room_form').serialize(),
                success:function(data)
                {  
                    if(data == 'INSERTED')
                    {
                        swal("Added!", "The room is added.", "success");
                        $('#add_room_form')[0].reset();  
                        $('#modalAddRoom').modal('hide');
                        $('#room-table').DataTable().destroy();
                        if(room_desc == 'def')
                        {
                            loadtable();
                   
                        }
                        else
                        {
                            fetch_select(room_desc);
                        }
                    }

                    if(data == 'NOT INSERTED')
                    {
                        swal("Not Added!", "Something blew up.", "error");
                        $('#add_room_form')[0].reset(); 
                    }

                    if(data == 'THE DATA IS ALREADY INSERTED')
                    {
                        swal("Not Added!", "The data is already inserted.", "error");
                        $('#add_room_form')[0].reset();
                        $('#room-table').DataTable().destroy();
                        if(room_desc == 'def')
                        {
                            loadtable();
                        }
                        else
                        {
                            fetch_select(room_desc);
                        }
                    }
                }
                });  
            });

            $(document).on('click', '#edit_data', function(e)
            {  
               e.preventDefault();
               var id = $(this).data("id");
               
               $.ajax({  
                    url:"<?php echo base_url('Maintenance/view_rooms')?>", 
                    method:"POST",  
                    data:'room_id='+id,  
                    dataType: "json",
                    success:function(data){
                         $('#room_id_hid').val(data[0][0]);  
                         $('#room_edit_code').val(data[0][1]);
                         $('#room_edit_desc').val(data[0][2]);
                         $('#edit_building').val(data[0][3]);
                         $('#openMod').trigger('click');
                    },
                    error: function (data) {
                        alert(JSON.stringify(data));
                    }
               }); 
            });

            $('#edit_room_form').on("submit", function(event)
            {  
                room_desc = $('#select_rm').val();
                event.preventDefault();  
                $.ajax({  
                url:"<?php echo base_url('Maintenance/edit_rooms')?>",  
                method:"POST",  
                data:$('#edit_room_form').serialize(),
                success:function(data)
                {
                    if(data == 'UPDATED')
                    {  
                        swal("Updated!", "The room is updated.", "success");
                        $('#edit_room_form')[0].reset();  
                        $('#modalEditRoom').modal('hide');
                        $('#room-table').DataTable().destroy();
                        if(room_desc == 'def')
                        {
                            
                            loadtable();
                        }
                        else
                        {
                            fetch_select(room_desc);
                        }
                    } 

                    if(data == 'NOT UPDATED')
                    {
                        swal("Not Edited!", "Something blew up.", "error");
                        $('#edit_room_form')[0].reset(); 
                    }

                    if(data == 'THE DATA IS ALREADY INSERTED')
                    {
                        swal("Not Updated!", "The data is already inserted.", "error");
                        $('#modalEditRoom').modal('hide');
                        $('#room-table').DataTable().destroy();
                        if(room_desc == 'def')
                        {
                            loadtable();
                        }
                        else
                        {
                            fetch_select(room_desc);
                        }
                    }

                }
                });  
            });



        });


    </script>
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
                                <select class="form-control" id="select_ay">
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
                                <select class="form-control" id="select_sem">
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
                                    
                                </tbody>

                            </table>
                        </div>
                        <div class="row">
                            <!-- <div class="col-md-1">
                                <div class="col-md-1"> 
                                    <button type="button" class="btn btn-info" data-toggle = "modal" data-target ="#modalNewFile" style="margin-top: 10px; margin-left: 88%;">Import Services</button>
                                 </div> 
                            </div> -->
                            <div class="col-md-1">
                                <div class="col-md-1" style="text-align: center;">
                                <button type="button" class="btn btn-info" data-toggle = "modal" data-target ="#modalNewServices" style="margin-top: 10px; margin-left: 40%;">Add Service</button>
                                
                            </div>
                            </div>
                        </div>
                </div>

                </div>
             <!-- /.right-sidebar -->
                <div class="container-fluid" id="editService" style="width: 100%; padding-left: 0.5%; padding-right: 0.5%">
                <div class="white-box">
                    <h2>Edit Service</h2>
                    <div  class="col-md-12" style="background-color: gray; height: 3px; margin-top: -5px;">

                    </div>
                    <br>
                    <form  id="edit_service_form" method="POST">
                    <div class="row">
                        <div class="form-group col-md-2">
                            <label class="control-label">For Acad. Year:</label>
                            <select class="form-control" name="edit_acadyr" id="edit_acadyr" required>
                                <option value="" disabled selected>-SELECT-</option>
                                    <?php 
                                        for ($i = date("Y"); $i > 1900; $i-- ){
                                            echo '<option value ="' .$i. '&#x2010;'. ($i+1).'">' .$i. '&#x2010;'. ($i+1) .  '</option>'; 
                                        }
                                    ?>
                            </select>
                        </div>
                        <div class="form-group col-md-2">
                            <label class="control-label">Semester:</label>
                            <select class="form-control" name="edit_sem" id="edit_sem" required>
                                <option value ="" disabled selected>-SELECT-</option>
                                <option value="1st">1st</option>
                                <option value="2nd">2nd</option>
                                <option value="Summer">Summer</option>
                            </select>    
                        </div>
                        <div class="form-group col-md-2">
                            <label class="control-label">Section:</label>
                            <input class="form-control" name="edit_sec" id="edit_sec" required>
                        </div>
                        <div class="form-group col-md-2">
                            <label class="control-label">Subject Code:</label>
                            <input class="form-control" type="text" name="edit_sub_code" id="edit_sub_code" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="control-label">Subject Description:</label>
                            <input class="form-control" type="text" name="edit_sub_desc" id="edit_sub_desc" required>
                        </div>
                        <input type="hidden" id="service_id_hid" name="service_id_hid"/>
                    </div>
                    <div class="row">
                            <div class="table-responsive">
                                                <table class="table colored-table inverse-tabl table-striped" id="edit-service-table">
                                                    <thead>
                                                        <tr>
                                                            <th style="width: 175px;">Day</th>
                                                            <th>Time Start</th>
                                                            <th>Time Finish</th>
                                                            <th>Room</th>
                                                            <th>Edit/Remove</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        
                                                    </tbody>
                                                </table> 
                                            </div>
                            <br><br><br>
                            <button type="button" class="btn btn-default" id="clear_btn_edit1">Clear</button>
                            <button type="submit" class="btn btn-info waves-effect text-left">Save</button>
                        </form>
                    </div>
                </div>

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
                                            <form id="add_services" method="POST" enctype="multipart/form-data">
                                                <div class="form-group col-md-4">
                                                    <label class="control-label">For Acad. Year:</label>
                                                    <select class="form-control" name="acadyr" id="acadyr" required>
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
                                                            <option value="" disabled selected>-SELECT-</option>
                                                            <option value="1st">1st</option>
                                                            <option value="2nd">2nd</option>
                                                            <option value="Summer">Summer</option>
                                                    </select>    
                                                </div>
                                                <div class="form-group col-md-4">
                                                        <label class="control-label">Section:</label>
                                                        <input class="form-control" name="sec" id="sec" required>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label class="control-label">Subject Description:</label>
                                                    <input class="form-control" type="text" name="sub_desc" id="sub_desc" required>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label class="control-label">Subject Code:</label>
                                                    <input class="form-control" type="text" name="sub_code" id="sub_code" required>
                                                </div>
                                                <div class="table-responsive">
                                                <table class="table colored-table inverse-tabl table-striped" id="dynamic_field">
                                                    <thead>
                                                        <tr>
                                                            <th style="width: 175px;">Day</th>
                                                            <th>Time Start</th>
                                                            <th>Time Finish</th>
                                                            <th>Room</th>
                                                            <th>Add/Remove</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <select class="form-control" id="sched_day" name="sched_day[]" required>
                                                                    <option value="" disabled selected>--SELECT--</option>
                                                                    <option value="Monday">Monday</option>
                                                                    <option value="Tuesday">Tuesday</option>
                                                                    <option value="Wednesday">Wednesday</option>
                                                                    <option value="Thursday">Thursday</option>
                                                                    <option value="Friday">Friday</option>
                                                                    <option value="Saturday">Saturday</option>
                                                                </select>
                                                            </td>
                                                            <td>
                                                                <input class="form-control" type="time" name="sched_timein[]" id="sched_timein" required>
                                                            </td>
                                                            <td>
                                                                <input class="form-control" type="time" name="sched_timeout[]" id="sched_timeout" required>
                                                            </td>
                                                            <td>
                                                                <input class="form-control" type="text" name="sched_room[]" id="sched_room" required>
                                                            </td>
                                                            <td>
                                                                <button class="btn btn-success fa fa-plus" id='add_field' aria-hidden="true"></button>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table> 
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" onclick="resetForm1()" id="clear_btn">Clear</button>
                                                <button type="submit" name="btnSaveService" id="btnSaveService" class="btn btn-success waves-effect text-left">Save</button>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>

            <a data-toggle="modal" href="#modalEditServiceSched" id="openMod"></a>

            <div class="modal fade bs-example-modal-lg" id="modalEditServiceSched" tabindex="-1" role="dialog" aria-labelledby="modalEditServiceSched" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h4 class="modal-title">Edit Schedule</h4>
                                        </div>
                                        <div  class="col-md-12" style="background-color: gray; height: 3px; margin-top: -5px;">
                                        </div>
                                        <div class="modal-body modal-lg">
                                            <form id="edit_service_sched_form" method="POST" enctype="multipart/form-data">
                                                <div class="form-group col-md-3">
                                                    <label class="control-label">Day:</label>
                                                    <select class="form-control" name="edit_sched_day" id="edit_sched_day" required>
                                                        <option value="" disabled selected>--SELECT--</option>
                                                        <option value="Monday">Monday</option>
                                                        <option value="Tuesday">Tuesday</option>
                                                        <option value="Wednesday">Wednesday</option>
                                                        <option value="Thursday">Thursday</option>
                                                        <option value="Friday">Friday</option>
                                                        <option value="Saturday">Saturday</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label class="control-label">Time Start:</label>
                                                     <input class="form-control" type="time" name="edit_sched_timein" id="edit_sched_timein" required>
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label class="control-label">Time Finish:</label>
                                                    <input class="form-control" type="time" name="edit_sched_timeout" id="edit_sched_timeout" required>
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label class="control-label">Room:</label>
                                                    <input class="form-control" type="text" name="edit_sched_room" id="edit_sched_room" required>
                                                </div>
                                                <input type="hidden" name="sched_id_hid" id="sched_id_hid" />
                                                <div class="col-md-6">
                                                    <div class="col-md-3">
                                                        <button type="button" class="btn btn-default" id="clear_btn_edit">Clear</button>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <button type="submit" class="btn btn-success waves-effect text-left">Save</button>
                                                    </div>
                                                </div>
                                            <!-- <div class="modal-footer">
                                                
                                            </div> -->
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
        // function resetForm1()
        // {
        //     alert('bwisit');
        //     // $('#acadyr').val("");
        //     // $('#sem').val("");
        //     // $('#section').val("");
        //     // $('#sub_code').val("");
        //     // $('#sub_desc').val("");
        //     // $('#sched_day').val("");
        //     // $('#sched_timein').val("");
        //     // $('#sched_timeout').val("");
        //     // $('#sched_room').val("");
        //     // $('.dynamic-added').remove();
        // }

        function loadtable()
        {
          $('#services-table').dataTable().fnClearTable();
          $('#services-table').dataTable().fnDraw();
          $('#services-table').dataTable().fnDestroy();
          $('#services-table').dataTable({
              "processing": true,
              "serverSide": false,
              "sAjaxSource": "<?php echo base_url('Transaction/get_services')?>",
              "deferLoading": 10,
              "aaSorting": [[0,'desc']],
              "bPaginate": true,
              "fnInitComplete": function(){
                        
              }
          });
        }

        function fetch_data(ay_temp, sem_temp)
        {
            $('#services-table').dataTable().fnClearTable();
            $('#services-table').dataTable().fnDraw();
            $('#services-table').dataTable().fnDestroy();
            $('#services-table').DataTable({           
                "processing" : true,
                "serverSide" : false,
                "order" : [],
                "ajax" : {
                    url:"<?php echo base_url('Transaction/get_services_search')?>",
                    data:{ay:ay_temp, sem:sem_temp},
                    type:"POST",
                }
            });
        }

        function hide_sched_table(acadyr, sem, section, code, desc)
            {
                $('#edit-service-table').dataTable().fnClearTable();
                $('#edit-service-table').dataTable().fnDraw();
                $('#edit-service-table').dataTable().fnDestroy();
                var dataTable = $('#edit-service-table').DataTable({           
                    "processing" : true,
                    "serverSide" : false,
                    "order" : [],
                    "ajax" :
                    {
                        url:"<?php echo base_url('Transaction/get_services_sched')?>",
                        data:{acadyr:acadyr, sem:sem, section:section, code:code, desc:desc},
                        type:"POST",
                    },
                    // "initComplete":function(settings, json)
                    // {
                    //     if(json.iTotalRecords == 1)
                    //     {
                    //         dataTable.column(4).visible(false);
                    //     }
                    // }
                });
            }

        $(document).ready(function(){
            loadtable();

            //File Upload
            $('.dropify').dropify();

            $('#editService').hide();

            var x = 1;
        
            $('#add_field').click(function()
            {  
               x++;  
               $('#dynamic_field').append('<tr id="row'+x+'" class="dynamic-added">'+
                '<td><select class="form-control" name="sched_day[]" required><option value="" disabled selected>--SELECT--</option>'+
                    '<option value="Monday">Monday</option>'+
                    '<option value="Tuesday">Tuesday</option>'+
                    '<option value="Wednesday">Wednesday</option>'+
                    '<option value="Thursday">Thursday</option>'+
                    '<option value="Friday">Friday</option>'+
                    '<option value="Saturday">Saturday</option>'+
                    '</select></td>'+
                '<td><input class="form-control" type="time" name="sched_timein[]" required></td>'+
                '<td><input class="form-control" type="time" name="sched_timeout[]" required></td>'+
                '<td><input class="form-control" type="text" name="sched_room[]" required></td>'+
                '<td><button type="button" name="remove" id="'+x+'" class="btn btn-danger btn_remove">X</button></td>'+
                    '</tr>');  
            });

            $(document).on('click', '.btn_remove', function(){  
               var button_id = $(this).attr("id");   
               $('#row'+button_id+'').remove();  
            });

            $('#add_services').on('submit', function(event){
                event.preventDefault();
                $.ajax({
                    url:"<?php echo base_url('Transaction/add_services')?>",
                    method:"POST",
                    data:new FormData(this),
                    contentType:false,
                    cache:false,
                    processData:false,
                    success:function(data){
                        if(data == 'INSERTED')
                        {
                            swal("Added!", "Services is added.", "success");
                            $('#add_services')[0].reset();  
                            $('.dynamic-added').remove();
                            $('#modalNewServices').modal('hide');
                            $('#services-table').DataTable().destroy();
                            loadtable();
                        }

                        if(data == 'NOT INSERTED')
                        {
                            swal("Not Added!", "Something blew up.", "error");
                            $('#add_services')[0].reset();
                            $('.dynamic-added').remove();
                            $('#services-table').DataTable().destroy();
                            loadtable();  
                        }

                        if(data == 'THE DATA IS ALREADY INSERTED')
                        {
                            swal("Not Added!", "The data is already inserted.", "error");
                            $('#add_services')[0].reset();
                            $('.dynamic-added').remove();
                            $('#services-table-table').DataTable().destroy();
                            loadtable();
                        }
                    },
                    error: function (data) {
                        alert(JSON.stringify(data));
                    }
                })
            });

            var acadyr, sem, section, code, desc;

            $(document).on('click', '#edit_data', function(e)
            {  
               e.preventDefault();
               var id = $(this).data("id");

               $('#editService').show();
               $('html, body').animate({
            scrollTop: $("#editService").offset().top
                }, 1000);
               
               $.ajax({  
                    url:"<?php echo base_url('Transaction/view_services')?>", 
                    method:"POST",  
                    data:'service_id='+id,  
                    dataType: "json",
                    success:function(data){  
                         $('#edit_acadyr').val(data[0][0]);
                         $('#edit_sem').val(data[0][1]);
                         $('#edit_sec').val(data[0][4]);
                         $('#edit_sub_desc').val(data[0][3]);
                         $('#edit_sub_code').val(data[0][2]);
                         $('#service_id_hid').val(data[0][5]);
                         acadyr = $('#edit_acadyr').val();
                         sem = $('#edit_sem').val();
                         section = $('#edit_sec').val();
                         code = $('#edit_sub_code').val();
                         desc = $('#edit_sub_desc').val();
                         hide_sched_table(acadyr, sem, section, code, desc);
                    },
                    error: function (data) {
                        alert(JSON.stringify(data));
                    }
               }); 
            });

            $(document).on('click', '#edit_sched_data', function(e)
            {  
                e.preventDefault();
                var id = $(this).data("id");
                   
                $.ajax({  
                    url:"<?php echo base_url('Transaction/view_services_sched')?>", 
                    method:"POST",  
                    data:'service_sched_id='+id,  
                    dataType: "json",
                    success:function(data){
                        $('#edit_sched_day').val(data[0][0]);
                        $('#edit_sched_timein').val(data[0][1]);
                        $('#edit_sched_timeout').val(data[0][2]);
                        $('#edit_sched_room').val(data[0][3]);
                        $('#sched_id_hid').val(data[0][4]);
                        $('#openMod').trigger('click');
                    },
                    error: function (data) {
                        alert(JSON.stringify(data));
                    }
                }); 
            }); 

            $('#edit_service_sched_form').on("submit", function(event)
                {  
                    event.preventDefault();  
                    $.ajax({  
                    url:"<?php echo base_url('Transaction/edit_services_sched')?>",  
                    method:"POST",  
                    data:$('#edit_service_sched_form').serialize(),
                    success:function(data)
                    {  
                        if(data == 'UPDATED')
                        {
                            swal("Updated!", "The schedule has been updated.", "success");
                            $('#edit_service_sched_form')[0].reset();  
                            $('#modalEditServiceSched').modal('hide');
                            $('#edit-service-table').DataTable().destroy();
                            hide_sched_table(acadyr, sem, section, code, desc);
                        }

                        if(data == 'NOT UPDATED')
                        {
                            swal("Not Updated!", "Something blew up.", "error"); 
                        }

                        if(data == 'THE DATA IS ALREADY INSERTED')
                        {
                            swal("Not Added!", "The data is already inserted.", "error");
                            $('#edit_service_sched_form')[0].reset();  
                            $('#modalEditServiceSched').modal('hide');
                            $('#edit-service-table').DataTable().destroy();
                            hide_sched_table(acadyr, sem, section, code, desc);
                        }
                    }
                    });  
                });

            $(document).on('click', '#delete_sched_data', function(e)
            {  
               e.preventDefault();
               var id = $(this).data("id");

              swal({
                        title: "Are you sure?",
                        text: "You're about to delete this schedule", 
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
              })
                .then((willApprove) => {
                  if (willApprove) {
                    $.ajax({   
                      url: "<?php echo base_url('Transaction/delete_services_sched')?>",
                      method: "POST",
                      data: 'service_sched_id='+id,
                      success: function(data) 
                      {
                        if(data == 'DELETED')
                        {
                            swal("Deleted!", "The schedule is deleted.", "success");
                            $('#edit-service-table').DataTable().destroy();
                            hide_sched_table(acadyr, sem, section, code, desc);
                        }

                        if(data == 'NOT DELETED')
                        {
                            swal("Not Deleted!", "Something blew up.", "error"); 
                        }       
                      },
                      error: function (data) 
                      {
                        swal("Not Deleted!", "Something blew up.", "error");
                        alert(JSON.stringify(data));
                      }
                    });
                  } else {
                    swal("Cancelled", "error");
                  }
                });
            });

            $('#edit_service_form').on("submit", function(event)
            {  
                event.preventDefault();  
                $.ajax({  
                    url:"<?php echo base_url('Transaction/edit_services')?>",  
                    method:"POST",  
                    data:$('#edit_service_form').serialize(),
                    success:function(data)
                    {  
                        if(data == 'UPDATED')
                        {
                            swal("Updated!", "The schedule has been updated.", "success");
                            $('#editService').hide();
                            $('#edit_service_form')[0].reset();  
                            $('#services-table').DataTable().destroy();
                            loadtable();
                        }

                        if(data == 'NOT UPDATED')
                        {
                            swal("Not Updated!", "Something blew up.", "error");
                            $('#editService').hide();
                            $('#edit_service_form')[0].reset();  
                            $('#services-table').DataTable().destroy();
                            loadtable(); 
                        }
                    }
                });  
            });

            $(document).on('click', '#clear_btn', function(e)
            {  
                $('#add_services')[0].reset();
                $('.dynamic-added').remove();
            }); 

            $(document).on('click', '#clear_btn_edit', function(e)
            {  
                $('#edit_service_sched_form')[0].reset();   
            });

            $(document).on('click', '#clear_btn_edit1', function(e)
            {  
                $('#edit_service_form')[0].reset();   
            });

            $('#select_ay').on('change', function()
            {
                var select_ay = $('#select_ay').val();
                var select_sem = $('#select_sem').val();
                fetch_data(select_ay, select_sem);
            });

            $('#select_sem').on('change', function()
            {
                var select_ay = $('#select_ay').val();
                var select_sem = $('#select_sem').val();
                fetch_data(select_ay, select_sem);
            }); 

        });
    </script>

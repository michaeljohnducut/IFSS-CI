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
                                                            <option value ="" disabled selected>-SELECT-</option>
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
                                                <button type="button" class="btn btn-default">Clear</button>
                                                <button type="submit" name="btnSaveService" id="btnSaveService" class="btn btn-success waves-effect text-left">Save</button>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>

        <a data-toggle="modal" href="#modalEditServices" id="openMod"></a>

        <div class="modal fade bs-example-modal-lg" id="modalEditServices" tabindex="-1" role="dialog" aria-labelledby="modalEditServices" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h4 class="modal-title">Edit Service</h4>
                                        </div>
                                        <div  class="col-md-12" style="background-color: gray; height: 3px; margin-top: -5px;">
                                        </div>
                                        <div class="modal-body modal-lg">
                                            <form id="add_services" method="POST" enctype="multipart/form-data">
                                                <div class="form-group col-md-4">
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
                                                <div class="form-group col-md-4">
                                                    <label class="control-label">Semester:</label>
                                                    <select class="form-control" name="edit_sem" id="edit_sem" required>
                                                            <option value ="" disabled selected>-SELECT-</option>
                                                            <option value="1st">1st</option>
                                                            <option value="2nd">2nd</option>
                                                            <option value="Summer">Summer</option>
                                                    </select>    
                                                </div>
                                                <div class="form-group col-md-4">
                                                        <label class="control-label">Section:</label>
                                                        <input class="form-control" name="edit_sec" id="edit_sec" required>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label class="control-label">Subject Description:</label>
                                                    <input class="form-control" type="text" name="edit_sub_desc" id="edit_sub_desc" required>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label class="control-label">Subject Code:</label>
                                                    <input class="form-control" type="text" name="edit_sub_code" id="edit_sub_code" required>
                                                </div>
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
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default">Clear</button>
                                                <button type="submit" name="btnEditService" id="btnEditService" class="btn btn-success waves-effect text-left">Save</button>
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
                    type:"POST"
                }
            });
        }

        $(document).ready(function(){
            loadtable();

            hide_sched_table();

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

            function hide_sched_table()
            {
                $('#edit-service-table').DataTable( {
                        "paging":   false,
                        "ordering": false,
                        "info":     false,
                        "searching": false
                } );
            }

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
                            $('#modalNewServices').modal('hide');
                            $('#services-table-table').DataTable().destroy();
                            loadtable();
                        }
                    },
                    error: function (data) {
                        alert(JSON.stringify(data));
                    }
                })
            });

            $(document).on('click', '#edit_data', function(e)
            {  
               e.preventDefault();
               var id = $(this).data("id");
               $('#openMod').trigger('click');

               // $.ajax({  
               //      url:"<?php //echo base_url('Transaction/view_evals')?>", 
               //      method:"POST",  
               //      data:'eval_id='+id,  
               //      dataType: "json",
               //      success:function(data){  
               //           $('#edit_acad').val(data[0][0]);
               //           $('#edit_sem').val(data[0][1]);
               //           $('#edit_dept').val(data[0][2]);
               //           $('#edit_fac').val(data[0][3]);
               //           $('#edit_rating').val(data[0][4]);
               //           $('#edit_inter').val(data[0][5]);
               //           $('#eval_id').val(data[0][6]);
               //           $('#openMod').trigger('click');
               //      },
               //      error: function (data) {
               //          alert(JSON.stringify(data));
               //      }
               // }); 
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

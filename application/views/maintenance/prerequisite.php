<div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                         <h4 class="page-title">Manage Subject Prerequisite</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="#">Maintenance</a></li>
                            <li class="active">Subject Prerequisite</li>
                        </ol>
                    </div>
                
                </div>
            <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">          
                    <div class="col-sm-12">                            
                            <div class="row">
                                <div class="col-md-10">
                                    <h2>All Subjects Prerequisite</h2>
                                </div>
                            </div>
                            <h3 class="box-title m-b-0">Legend:</h3>
                            <div class="row" style="margin-left: 20px; margin-top: 5px;">
                                <div class="col-md-3">
                                    <button class="btn btn-success"><span class="fa fa-pencil"></span></button>&nbsp;
                                    <label style="margin-top: 5px;">Edit Subject Prerequisite</label>
                                </div>
                            </div>
                            <br>

                            <div class="table-responsive">
                                <table id="prereq-table" class="table colored-table inverse-tabl table-striped">
                                    <thead>
                                        <tr>
                                            <th>Course Code</th>
                                            <th>Course Title</th>
                                            <th>Prerequisite</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                     <tbody>
                                       
                                    </tbody>
                                </table>

                            </div>

                            <a data-toggle="modal" href="#modalEditSubjPrereq" id="showMod"></a>

                            <div class="modal fade bs-example-modal-lg" id="modalNewSubjectPrereq" tabindex="-1" role="dialog" aria-labelledby="modalNewSubjectPrereq" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h4 class="modal-title">Add a Subject Prerequisite</h4>
                                        </div>
                                        <div  class="col-md-12" style="background-color: gray; height: 3px; margin-top: -5px;">

                                        </div>
                                        <div class="modal-body">
                                            <form id="add_prereq_form" method="POST" enctype="multipart/form-data">
                                                 <div class="form-group col-md-12">
                                                    <label class="control-label">Subject:</label>
                                                    <select class="form-control" id="subject" name="subject" required>
                                                    <option value="" disabled selected>--SELECT SUBJECT--</option>
                                                    <?php foreach($subjects as $r) echo '<option value="'.$r[6].'">'.$r[0].' - '.$r[1].'</option>';?>
                                                    </select>                         
                                                </div>
                                                
                                                <div class="form-group col-md-12">
                                                    <label class="control-label">Requisites/Prerequisites:</label>
                                                    <select class="select2 m-b-10 select2-multiple" multiple="multiple" data-placeholder="Choose" id="prereq" name="prereq[]" required>
                                                    <?php foreach($subjects as $r) echo '<option value="'.$r[0].'">'.$r[0].' - '.$r[1].'</option>';?>
                                                    </select>                         
                                                </div>
                                            
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" onclick="resetForm1()">Reset</button>
                                                <button type="submit" name="btnAddSubj" class="btn btn-success waves-effect text-left">Add Subject Prerequisite</button>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>

                            <div class="modal fade bs-example-modal-lg" id="modalEditSubjPrereq" tabindex="-1" role="dialog" aria-labelledby="modalEditSubjPrereq" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h4 class="modal-title">Edit subject prerequisite</h4>
                                        </div>
                                        <div  class="col-md-12" style="background-color: gray; height: 3px; margin-top: -5px;">

                                        </div>
                                        <div class="modal-body">
                                            <form id="edit_prereq_form" method="POST" enctype="multipart/form-data">
                                                <div class="form-group col-md-12">
                                                    <label class="control-label">Subject:</label>
                                                    <select class="form-control" id="edit_subject" name="edit_subject" disabled>
                                                    <option value="" disabled selected>--SELECT SUBJECT--</option>
                                                    <?php foreach($subjects as $r) echo '<option value="'.$r[6].'">'.$r[0].' - '.$r[1].'</option>';?>
                                                    </select>                         
                                                </div>
                                            
                                                <div class="form-group col-md-12">
                                                    <label class="control-label">Requisites/Prerequisites:</label>
                                                    <select class="select2 m-b-10 select2-multiple" multiple="multiple" data-placeholder="Choose" id="edit_prereq" name="edit_prereq[]">
                                                    <?php foreach($subjects as $r) echo '<option value="'.$r[0].'">'.$r[0].' - '.$r[1].'</option>';?>
                                                    </select>                         
                                                </div>
                                                <input type="hidden" name="subj_id_hid" id="subj_id_hid" />
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" onclick="resetForm2()">Reset</button>
                                                <button type="submit" name="btnSaveSubj" class="btn btn-success waves-effect text-left">Update Subject</button>
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
                                    <button type="button" class="btn btn-info" data-toggle = "modal" data-target ="#modalNewSubjectPrereq">Add Subject Prerequisite</button>
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

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/bower_components/multiselect/js/jquery.multi-select.js"></script>

    <script type="text/javascript">
        function resetForm1()
        {
            // $('#subject').select2().val('').trigger('change');
            $('#subject').val('');
            $('#prereq').select2().val('').trigger('change');
        }

        function resetForm2()
        {
            // $('#edit_prereq_form').select2().val('').trigger('change');
            $('#edit_subject').val('');
            $('#edit_prereq').select2().val('').trigger('change');
        }

    function loadtable()
        {
          $('#prereq-table').dataTable().fnClearTable();
          $('#prereq-table').dataTable().fnDraw();
          $('#prereq-table').dataTable().fnDestroy();
          $('#prereq-table').dataTable({
              "processing": true,
              "serverSide": false,
              "sAjaxSource": "<?php echo base_url('Maintenance/get_prerequisites')?>",
              "deferLoading": 10,
              "bPaginate": true,
              "aaSorting": [[0,'asc']],
              "fnInitComplete": function(){
                        
              }
          });
        }


    $(document).ready(function(){
        loadtable();

        $('#add_prereq_form').on('submit', function(event)
        {  
            event.preventDefault();  
            $.ajax({  
            url:"<?php echo base_url('Maintenance/add_prerequisites')?>",  
            method:"POST",  
            data: new FormData(this), 
            contentType: false,     
            processData: false,  
            success:function(data)
            {  
                if(data == 'INSERTED')
                {
                    swal("Added!", "The subject prerequisite is added.", "success");
                    $('#subject').val('');  
                    $('#modalNewSubjectPrereq').modal('hide');
                    $('#prereq').select2().val('').trigger('change');
                    $('#prereq-table').DataTable().destroy();
                    loadtable();
                }

                if(data == 'NOT INSERTED')
                {
                    swal("Not Added!", "Something blew up.", "error");
                    $('#subject').val('');
                    $('#prereq').select2().val('').trigger('change');
                }

                if(data == 'THE DATA IS ALREADY INSERTED')
                {
                    swal("Not Added!", "The subject is already inserted.", "error");
                    $('#subject').val('');
                    $('#prereq').select2().val('').trigger('change');
                    $('#prereq-table').DataTable().destroy();
                    loadtable();
                }
            },
             error: function (data) {
                    alert(JSON.stringify(data));
            }
            });  
        });


        $(document).on('click', '#edit_data', function(e)
        {  
           e.preventDefault();
           var id = $(this).data("id");
           
           $.ajax({  
                url:"<?php echo base_url('Maintenance/view_prerequisites')?>", 
                method:"POST",  
                data:'subj_code='+id,  
                dataType: "json",
                success:function(data){    
                    var pre_requisite = data[0][2].split(',');
                    $('#edit_prereq').select2().val(pre_requisite).trigger('change');
                    $('#edit_subject').val(data[0][0]);
                    $('#subj_id_hid').val(data[0][0]);
                    $('#showMod').trigger('click');   
                },
                error: function (data) {
                    alert(JSON.stringify(data));
                }
           }); 
        }); 


        // $('#edit_prereq_form').on("submit", function(event)
        // {  
        //     event.preventDefault();  
        //     $.ajax({  
        //     url:"<?php //echo base_url('Maintenance/edit_subjects')?>",  
        //     method:"POST",  
        //     data:$('#edit_subj_form').serialize(),
        //     success:function(data)
        //     {  
        //         if(data == 'UPDATED')
        //         {
        //             swal("Updated!", "The subject prerequisite has been updated.", "success");
        //             $('#edit_prereq').select2().val('').trigger('change'); 
        //             $('#modalEditSubjPrereq').modal('hide');
        //             loadtable();
        //         }

        //         if(data == 'NOT UPDATED')
        //         {
        //             swal("Not Added!", "Something blew up.", "error");
        //             $('#subject').val('');
        //             $('#edit_prereq').select2().val('').trigger('change');
        //         }
        //     },
        //     error: function (data) {
        //             alert(JSON.stringify(data));
        //     }
        //     });  
        // });

        $('#edit_prereq_form').on("submit", function(event)
        {  
            event.preventDefault(); 
            swal("Updated!", "The subject prerequisite has been updated.", "success");
            $('#edit_prereq').select2().val('').trigger('change'); 
            $('#modalEditSubjPrereq').modal('hide');
            loadtable(); 
           
        });


        //UPDATE PREREQ TOGGLE

        $('#edit_prereq').on('select2-removed', function (e) 
        {
            var subj_val = e.val;
            var subj_id = $('#subj_id_hid').val();

            event.preventDefault();  
                $.ajax({  
                    url:"<?php echo base_url('Maintenance/toggle_prereqs')?>",  
                    method:"POST",  
                    data:{subj_id:subj_id, subj_val:subj_val, act:"delete"},
                    success:function(data)
                    {  
                        
                    }, 
                    error: function(data)
                    {
                       alert('An error occured. Please reload the page and try again.');
                    }
                }); 
            
        });


        $('#edit_prereq').on("select2-selecting", function(e) 
        { 
            var subj_val = e.val;
            var subj_id = $('#subj_id_hid').val();

            event.preventDefault();  
                $.ajax({  
                    url:"<?php echo base_url('Maintenance/toggle_prereqs')?>",  
                    method:"POST",  
                    data:{subj_id:subj_id, subj_val:subj_val, act:"add"},
                    success:function(data)
                    {  
                        
                    }, 
                    error: function(data)
                    {
                       alert('An error occured. Please reload the page and try again.');
                    }
                }); 
        });

    });



    $(document).ready(function(){
        $(".select2").select2();
        $('.selectpicker').selectpicker();
    });

    </script>
<div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                         <h4 class="page-title">Manage Subjects</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="#">Maintenance</a></li>
                            <li class="active">Subjects</li>
                        </ol>
                    </div>
                
                </div>
            <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">          
                    <div class="col-sm-12">                            
                            <div class="row">
                                <div class="col-md-10">
                                    <h2>All Subjects</h2>
                                </div>
                            </div>
                            <h3 class="box-title m-b-0">Legend:</h3>
                            <div class="row" style="margin-left: 20px; margin-top: 5px;">
                                <div class="col-md-2">
                                    <button class="btn btn-success"><span class="fa fa-pencil"></span></button>&nbsp;
                                    <label style="margin-top: 5px;">Edit Subject</label>
                                </div>
                            </div>
                            <br>

                            <div class="table-responsive">
                                <table id="subject-table" class="table colored-table inverse-tabl table-striped">
                                    <thead>
                                        <tr>
                                            <th>Course Code</th>
                                            <th>Course Title</th>
                                            <th>Specialization</th>
                                            <th>Credits</th>
                                            <th>Lec Hours</th>
                                            <th>Lab Hours</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                     <tbody>

                                    </tbody>
                                </table>

                            </div>

                            <a data-toggle="modal" href="#modalEditSubj" id="showMod"></a>

                            <div class="modal fade bs-example-modal-lg" id="modalNewSubject" tabindex="-1" role="dialog" aria-labelledby="modalNewSubject" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h4 class="modal-title">Add a new subject</h4>
                                        </div>
                                        <div  class="col-md-12" style="background-color: gray; height: 3px; margin-top: -5px;">

                                        </div>
                                        <div class="modal-body">
                                            <form id="add_subj_form" method="POST" enctype="multipart/form-data">
                                                <div class="form-group col-md-4">
                                                    <label class="control-label">Course Code:</label>
                                                    <input class="form-control" type="text" name="subj_code" id="subj_code" maxlength="10" required>
                                                </div>
                                                <div class="form-group col-md-4">
                                                        <label class="control-label">Course Title:</label>
                                                        <input class="form-control" type="text" name="subj_desc" id="subj_desc" pattern="[a-zA-Z0-9\s-,'.\/]{2,}" title="Characters only." required>
                                                </div>
                                                <div class="form-group col-md-4">
                                                        <label class="control-label">Specialization:</label>
                                                        <select class="form-control" name="spec" id="spec">
                                                        <option value="" disabled selected>--SELECT--</option>
                                                        <?php foreach($spec as $r) echo '<option value="'.$r[2].'">'.$r[0].'</option>';?>
                                                        </select>
                                                </div>
                                                <div class="form-group col-md-4">
                                                        <label class="control-label">Credits:</label>
                                                        <input class="form-control" type="number" name="units" min="1" max="9" required>
                                                </div>
                                                <div class="form-group col-md-4">
                                                        <label class="control-label">Lecture Hours:</label>
                                                        <input class="form-control" type="number" name="lec_hrs" min="0" max="9" required>
                                                </div>
                                                <div class="form-group col-md-4">
                                                        <label class="control-label">Lab Hours:</label>
                                                        <input class="form-control" type="number" name="lab_hrs" min="0" max="9" required>
                                                </div>

                                                <div class="form-group col-md-8">
                                                        <input type="radio" name="major" value="1" checked>
                                                        <label class="control-label">Professional Course</label>
                                                        &nbsp&nbsp
                                                        <input type="radio" name="major" value="2">
                                                        <label class="control-label">Elective</label>
                                                        &nbsp&nbsp
                                                        <input type="radio" name="major" value="0">
                                                        <label class="control-label">General Education</label>
                                                </div>

                                                <!-- <div class="form-group col-md-12">
                                                    <label class="control-label">Requisites/Prerequisites:</label>
                                                    <select class="select2 m-b-10 select2-multiple" multiple="multiple" data-placeholder="Choose" id="prereq" name="prereq[]">
                                                    <?php //foreach($subjects as $r) echo '<option value="'.$r[0].'">'.$r[0].' - '.$r[1].'</option>';?>
                                                    </select>                         
                                                </div> -->
                                            
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" id="clear_btn_add">Clear</button>
                                                <button type="submit" name="btnAddSubj" class="btn btn-success waves-effect text-left">Save</button>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>

                            <div class="modal fade bs-example-modal-lg" id="modalEditSubj" tabindex="-1" role="dialog" aria-labelledby="modalEditSubj" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h4 class="modal-title">Edit subject details</h4>
                                        </div>
                                        <div  class="col-md-12" style="background-color: gray; height: 3px; margin-top: -5px;">

                                        </div>
                                        <div class="modal-body">
                                            <form id="edit_subj_form" method="POST" enctype="multipart/form-data">
                                                <div class="form-group col-md-4">
                                                    <label class="control-label">Course Code:</label>
                                                    <input class="form-control" type="text" name="edit_subj_code" id="edit_subj_code" maxlength="10" required>
                                                </div>
                                                <div class="form-group col-md-4">
                                                        <label class="control-label">Course Title:</label>
                                                        <input class="form-control" type="text" name="edit_subj_desc" id="edit_subj_desc" pattern="[a-zA-Z0-9,-\s'.\/]{2,}" title="Characters only." required>
                                                </div>
                                                <div class="form-group col-md-4">
                                                        <label class="control-label">Specialization:</label>
                                                        <select class="form-control" name="edit_spec" id="edit_spec">
                                                        <option value="" disabled selected>--SELECT--</option>
                                                        <?php foreach($spec as $r) echo '<option value="'.$r[2].'">'.$r[0].'</option>';?>
                                                        </select>
                                                </div>
                                                <div class="form-group col-md-4">
                                                        <label class="control-label">Credits:</label>
                                                        <input class="form-control" type="number" name="edit_units" id="edit_units" min="1" max="9" required>
                                                </div>
                                                <div class="form-group col-md-4">
                                                        <label class="control-label">Lecture Hours:</label>
                                                        <input class="form-control" type="number" name="edit_lec_hrs" id="edit_lec_hrs" min="0" max="9" required>
                                                </div>
                                                <div class="form-group col-md-4">
                                                        <label class="control-label">Lab Hours:</label>
                                                        <input class="form-control" type="text" name="edit_lab_hrs" id="edit_lab_hrs" min="0" max="9" required>
                                                </div>

                                                <div class="form-group col-md-8">
                                                        <input type="radio" name="edit_major" value="1" checked>
                                                        <label class="control-label">Professional Course</label>
                                                        &nbsp&nbsp
                                                        <input type="radio" name="edit_major" value="2">
                                                        <label class="control-label">Elective</label>
                                                        &nbsp&nbsp
                                                        <input type="radio" name="edit_major" value="0">
                                                        <label class="control-label">General Education</label>
                                                </div>
                                                
                                                <!-- <div class="form-group col-md-12">
                                                    <label class="control-label">Requisites/Prerequisites:</label>

                                                    <select class="select2 m-b-10 select2-multiple" multiple="multiple" data-placeholder="Choose" id="edit_prereq" name="edit_prereq[]">
                                                    <?php //foreach($subjects as $r) echo '<option value="'.$r[0].'">'.$r[0].' - '.$r[1].'</option>';?>
                                                    </select>                         
                                                </div> -->
                                                <input type="hidden" name="subj_id_hid" id="subj_id_hid" />
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" id="clear_btn_edit">Clear</button>
                                                <button type="submit" name="btnSaveSubj" class="btn btn-success waves-effect text-left">Save</button>
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
                                    <button type="button" class="btn btn-info" data-toggle = "modal" data-target ="#modalNewSubject">Add Subject</button>
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

    function loadtable()
        {
          $('#subject-table').dataTable().fnClearTable();
          $('#subject-table').dataTable().fnDraw();
          $('#subject-table').dataTable().fnDestroy();
          $('#subject-table').dataTable({
              "processing": true,
              "serverSide": false,
              "sAjaxSource": "<?php echo base_url('Maintenance/get_subjects')?>",
              "deferLoading": 10,
              "bPaginate": true,
              "aaSorting": [[0,'asc']],
              "fnInitComplete": function(){
                        
              }
          });
        }


    $(document).ready(function(){
        loadtable();

        $('#add_subj_form').on('submit', function(event)
        {  
            var subj_code = $('#subj_code').val();
            var desc = $('#subj_desc').val();
            var subj_desc = subj_code + ' - ' + desc;
            event.preventDefault();  
            $.ajax({  
            url:"<?php echo base_url('Maintenance/add_subjects')?>",  
            method:"POST",  
            data: new FormData(this), 
            contentType: false,     
            processData: false,  
            success:function(data)
            {  
                if(data == 'INSERTED')
                {
                    swal("Added!", "The subject is added.", "success");
                    $('#add_subj_form')[0].reset();  
                    $('#modalNewSubject').modal('hide');
                    $('#subject-table').DataTable().destroy();
                    // $("#prereq").select2("val","");
                    loadtable();
                    // $('#prereq').select2().val('').trigger('change');
                    // $('#prereq').append($('<option>',{
                    //     value: subj_code,
                    //     text: subj_desc
                    // }));
                    // $('#edit_prereq').append($('<option>',{
                    //     value: subj_code,
                    //     text: subj_desc
                    // }));
                }

                if(data == 'NOT INSERTED')
                {
                    swal("Not Added!", "Something blew up.", "error");
                    $('#add_subj_form')[0].reset();
                    // $('#prereq').select2().val('').trigger('change');
                }

                if(data == 'THE DATA IS ALREADY INSERTED')
                {
                    swal("Not Added!", "The data is already inserted.", "error");
                    $('#add_subj_form')[0].reset();
                    // $('#prereq').select2().val('').trigger('change');
                    $('#subject-table').DataTable().destroy();
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
                url:"<?php echo base_url('Maintenance/view_subjects')?>", 
                method:"POST",  
                data:'subj_code='+id,  
                dataType: "json",
                success:function(data){    
                     // if(data[0][6] != null)
                     // {
                     //    var pre_requisite = data[0][6].split(',');
                     //    $('#edit_prereq').select2().val(pre_requisite).trigger('change');
                     // }
                     // else
                     // {
                     //    $('#edit_prereq').select2().val('').trigger('change');
                     // }

                     $('#subj_id_hid').val(data[0][0])
                     $('#edit_subj_code').val(data[0][1]);
                     $('#edit_subj_desc').val(data[0][2]);
                     $('#edit_units').val(data[0][3]);
                     $('#edit_lec_hrs').val(data[0][5]);
                     $('#edit_lab_hrs').val(data[0][4]);
                     $('#edit_spec').val(data[0][8]);
                     $("input[name=edit_major][value="+data[0][7]+"]").prop('checked', true);
                     $('#showMod').trigger('click');   
                },
                error: function (data) {
                    alert(JSON.stringify(data));
                }
           }); 
        }); 


        $('#edit_subj_form').on("submit", function(event)
        {  
            event.preventDefault();  
            $.ajax({  
            url:"<?php echo base_url('Maintenance/edit_subjects')?>",  
            method:"POST",  
            data:$('#edit_subj_form').serialize(),
            success:function(data)
            {  
                if(data == 'UPDATED')
                {
                    swal("Updated!", "The subject has been updated.", "success");
                    $('#edit_subj_form')[0].reset(); 
                    $('#edit_prereq').select2().val('').trigger('change'); 
                    $('#modalEditSubj').modal('hide');
                    $('#subjectTable').DataTable().destroy();
                    loadtable();
                }

                if(data == 'NOT UPDATED')
                {
                    swal("Not Added!", "Something blew up.", "error");
                    $('#edit_subj_form')[0].reset();
                    // $('#edit_prereq').select2().val('').trigger('change');
                }

                if(data == 'THE DATA IS ALREADY INSERTED')
                {
                    swal("Not Added!", "The data is already inserted.", "error");
                    $('#edit_subj_form')[0].reset();
                    // $('#edit_prereq').select2().val('').trigger('change');
                    $('#modalEditSubj').modal('hide');
                    $('#subject-table').DataTable().destroy();
                    loadtable();
                }
            },
            error: function (data) {
                    alert(JSON.stringify(data));
            }
            });  
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

        $(document).on('click', '#clear_btn_add', function(e)
        {  
            $('#add_subj_form')[0].reset();
        });

        $(document).on('click', '#clear_btn_edit', function(e)
        {  
            $('#edit_subj_form')[0].reset();
        });

    });



    $(document).ready(function(){
        $(".select2").select2();
        $('.selectpicker').selectpicker();
    });

    </script>
<div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                         <h4 class="page-title">Subject Preferences</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="#">Admin</a></li>
                            <li><a href="#">Reports</a></li>
                            <li class="active">Subject Preferences</li>
                        </ol>
                    </div>
                
                </div>

            <div class="row">      
                <div class="col-sm-12">
                    <div class="white-box">
                        <div class="row">
                            <h2>Search Filter</h2>
                            <div  class="col-md-12" style="background-color: gray; height: 3px; margin-top: -5px;">
                            </div>
                            <br>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <label class="control-label">Select A.Y.</label>
                                <select class="form-control" name="select_acadyr" id="select_acadyr">
                                   <option value="" disabled selected>-SELECT ACAD YEAR-</option>
                                   <?php 
                                        for ($i = date("Y"); $i > 1900; $i-- ){
                                            echo '<option value ="' .$i. '&#x2010;'. ($i+1).'">' .$i. '&#x2010;'. ($i+1) .  '</option>'; 
                                        }
                                    ?>                 
                                </select>
                            </div>
                            <div class="col-md-2">
                                <label class="control-label">Select Semester</label>
                                <select class="form-control" name="select_sem" id="select_sem">
                                    <option value="" disabled selected>-SELECT SEM-</option>
                                    <option value="1st">1st</option>
                                    <option value="2nd">2nd</option> 
                                    <option value="summer">Summer</option>        
                                </select>  
                            </div>
                            <div class="col-md-6" style="margin-left: 30px">
                                <br>
                                <!-- <button type="button" onclick="excel_()" class="btn btn-success" style="margin-top: 5px;"> <span class="fa fa-file"></span>&nbsp; Generate Summary (Excel)</button>&nbsp; -->
                                <button type="button" onclick="pdf_()" class="btn btn-info" style="margin-top: 5px;"> <span class="fa fa-file"></span>&nbsp; Generate Summary (PDF)</button>
                                
                            </div>
                        </div>
                        <br>
                        <div  class="col-md-12" style="background-color: gray; height: 3px; margin-top: -5px;">
                        </div>
                        <br>
                        <div class="table-responsive">
                            <table class="table table-striped" id="faculty_table">
                                <thead>
                                    <tr>
                                        <th>Faculty ID</th>
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


    <script src="<?php echo base_url(); ?>assets/plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/bower_components/datatables/jquery.dataTables.min.js"></script>

    <!-- Ito ung inidagdag ko para sa may alert animation at ung nasa ajax part kasama nito ung mga title chuchu -->
    <script src="<?php echo base_url(); ?>assets/js/sweetalert.min.js"></script>

    <!-- BOOTSTRAP SELECT -->
    <script src="<?php echo base_url(); ?>assets/plugins/bower_components/bootstrap-select/bootstrap-select.min.js" type="text/javascript"></script>

    <!-- CUSTOM SELECT -->
    <script src="<?php echo base_url(); ?>assets/plugins/bower_components/custom-select/custom-select.min.js" type="text/javascript"></script>

    <script type="text/javascript">

        function pdf_()
        {
            var acadyr = $('#select_acadyr').val();
            var sem = $('#select_sem').val();
            window.open('<?php echo base_url("Report/subj_pref_pdf")?>'+'?acadyr='+acadyr+'&sem='+sem);
        }

        function excel_()
        {
            var acadyr = $('#select_acadyr').val();
            var sem = $('#select_sem').val();
            window.open('<?php echo base_url("Report/subj_pref_excel")?>'+'?acadyr='+acadyr+'&sem='+sem);
        }

        function loadtable()
        {
          $('#faculty_table').dataTable().fnClearTable();
          $('#faculty_table').dataTable().fnDraw();
          $('#faculty_table').dataTable().fnDestroy();
          $('#faculty_table').dataTable({
              "processing": true,
              "serverSide": false,
              "sAjaxSource": "<?php echo base_url('Report/get_faculty_list')?>",
              "deferLoading": 10,
              "bPaginate": true,
              "aaSorting": [[0,'asc']],
              "fnInitComplete": function(){
                        
              }
          });
        }

         $(document).ready(function()
         {
            loadtable();

            $(document).on('click', '#view_pdf', function(e)
            {  
               var id = $(this).data("id");
               var acadyr = $('#select_acadyr').val();
               var sem = $('#select_sem').val();
               
               window.open('<?php echo base_url("Report/subj_pref_indiv_pdf")?>'+'?acadyr='+acadyr+'&sem='+sem+'&faculty='+id);
            });

            $(document).on('click', '#view_excel', function(e)
            {  
               var id = $(this).data("id");
               var acadyr = $('#select_acadyr').val();
               var sem = $('#select_sem').val();
               
               window.open('<?php echo base_url("Report/subj_pref_indiv_excel")?>'+'?acadyr='+acadyr+'&sem='+sem+'&faculty='+id);
            });


         });
    </script>

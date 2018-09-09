<div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                         <h4 class="page-title">Reports</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="#">Admin</a></li>
                            <li><a href="#">Reports</a></li>
                            <li class="active">Subject Offerings</li>
                        </ol>
                    </div>
                
                </div>

            <div class="row">      
                <div class="col-sm-12">
                    <div class="white-box">                        
                        <div class="row">
                            <h2>Reports on Subject Offerings</h2>
                            <div  class="col-md-12" style="background-color: gray; height: 3px; margin-top: -5px;">

                            </div>
                            <br>
                            <br>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <label class="control-label">Select A.Y.</label>
                                <select class="form-control" id="select_acadyr">
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
                                <select class="form-control" id="select_sem">
                                    <option value="" disabled selected>-SELECT SEM-</option>
                                    <option value="1st">1st</option>
                                    <option value="2nd">2nd</option>
                                    <option value="Summer">Summer</option>
                                </select>  
                            </div>
                            <div class="col-md-2">
                                <label class="control-label">Select Semester</label>
                                <select class="form-control" id="select_course">
                                    <option value="" disabled selected>-SELECT COURSE-</option>
                                    <?php foreach($department as $r) echo '<option value="'.$r[4].'">'.$r[1].'</option>';?>
                                </select>  
                            </div>
                            <div class="col-md-6" style="text-align: right;">
                                <br>
                                <button type="button" class="btn btn-info" style="margin-top: 10px;" onclick="pdf_()">Print Subject Offering(PDF)</button>
                                <button type="button" class="btn btn-success" style="margin-top: 10px; margin-left: 10px;" onclick="excel_()">Print Subject Offering(EXCEL)</button>  
                            </div>
                        </div>
                        <br><br>
                        <div  class="col-md-12" style="background-color: gray; height: 3px; margin-top: -5px;">
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-3">
                                <h3><u><b>1st Year</b></u></h3>
                            </div>
                        </div>

                       <div class="row">
                            <table class="table color-table inverse-table table-striped table-bordered table-condensed">
                                <thead>
                                    <tr>
                                        <th style="width: 100px;">Course Code</th>
                                        <th style="width: 400px;">Course Title</th>
                                        <th>Units</th>
                                        <th>Hours</th>
                                        <th>Day</th>
                                        <th>Time</th>
                                        <th>Room</th>
                                        <th>Remarks</th>
                                    </tr>
                                </thead>

                                <tbody id="first_year">
                                    
                                </tbody>
                                     
                            </table>
                        </div>

                        <div class="row">
                            <div class="col-md-3">
                                <h3><u><b>2nd Year</b></u></h3>
                            </div>
                        </div>

                        <div class="row">
                            <table class="table color-table inverse-table table-striped table-bordered table-condensed">
                                <thead>
                                    <tr>
                                        <th style="width: 100px;">Course Code</th>
                                        <th style="width: 400px;">Course Title</th>
                                        <th>Units</th>
                                        <th>Hours</th>
                                        <th>Day</th>
                                        <th>Time</th>
                                        <th>Room</th>
                                        <th>Remarks</th>
                                    </tr>
                                </thead>

                                <tbody id="second_year">
                                    
                                </tbody>
                                     
                            </table>
                        </div>

                        <div class="row">
                            <div class="col-md-3">
                                <h3><u><b>3rd Year</b></u></h3>
                            </div>
                        </div>

                        <div class="row">
                            <table class="table color-table inverse-table table-striped table-bordered table-condensed">
                                <thead>
                                    <tr>
                                        <th style="width: 100px;">Course Code</th>
                                        <th style="width: 400px;">Course Title</th>
                                        <th>Units</th>
                                        <th>Hours</th>
                                        <th>Day</th>
                                        <th>Time</th>
                                        <th>Room</th>
                                        <th>Remarks</th>
                                    </tr>
                                </thead>

                                <tbody id="third_year">
                                    
                                </tbody>
                                     
                            </table>
                        </div>

                        <div class="row">
                            <div class="col-md-3">
                                <h3><u><b>4th Year</b></u></h3>
                            </div>
                        </div>

                        <div class="row">
                            <table class="table color-table inverse-table table-striped table-bordered table-condensed">
                                <thead>
                                    <tr>
                                        <th style="width: 100px;">Course Code</th>
                                        <th style="width: 400px;">Course Title</th>
                                        <th>Units</th>
                                        <th>Hours</th>
                                        <th>Day</th>
                                        <th>Time</th>
                                        <th>Room</th>
                                        <th>Remarks</th>
                                    </tr>
                                </thead>

                                <tbody id="fourth_year">
                                    
                                </tbody>
                                     
                            </table>
                        </div>

                      </div>
                  </div>

                <div class="ajax-loader">
                    <img src="<?php echo base_url(); ?>assets/images/giphy.gif" class="img-responsive" />
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
          // var data = $('#spmsForm').serialize();
          window.open('<?php echo base_url("Report/subj_offering_pdf")?>');
        }
        
        function fetch_schedule(acadyr, sem, course)
        {
            if(acadyr && sem && course)
            {
                $.ajax({  
                    url:"<?php echo base_url('Report/get_subject_offering')?>", 
                    method:"POST",
                    async: false,
                    dataType: 'json',  
                    data:{acadyr:acadyr, sem:sem, course:course},
                    success:function(data){  
                        var html1 = '';
                        var html2 = '';
                        var html3 = '';
                        var html4 = '';
                        var section_id = '';
                        var i;

                        for(i=0; i<data.length; i++)
                        {
                            section_id = data[i][0];
                            if(data[i][2] == '1st')
                            {
                                html1 +='<tr>'+ 
                                            '<th colspan="8">'+data[i][1]+
                                            '</th>'+
                                        '</tr>';
                                html1 += get_section_schedule(acadyr, sem, section_id);
                                html1 += get_section_total(acadyr, sem, section_id);
                                $('#first_year').html(html1);
                            }

                            if(data[i][2] == '2nd')
                            {
                                
                                html2 +='<tr>'+ 
                                            '<th colspan="8">'+data[i][1]+
                                            '</th>'+
                                        '</tr>';
                                html2 += get_section_schedule(acadyr, sem, section_id);
                                html2 += get_section_total(acadyr, sem, section_id);
                                $('#second_year').html(html2);
                            }

                            if(data[i][2] == '3rd')
                            {
                                
                                html3 +='<tr>'+ 
                                            '<th colspan="8">'+data[i][1]+
                                            '</th>'+
                                        '</tr>';
                                html3 += get_section_schedule(acadyr, sem, section_id);
                                html3 += get_section_total(acadyr, sem, section_id);
                                $('#third_year').html(html3);
                            }

                            if(data[i][2] == '4th')
                            {
                                
                                html4 +='<tr>'+ 
                                            '<th colspan="8">'+data[i][1]+
                                            '</th>'+
                                        '</tr>';
                                html4 += get_section_schedule(acadyr, sem, section_id);
                                html4 += get_section_total(acadyr, sem, section_id);
                                $('#fourth_year').html(html4);
                            }

                        }
                        
                    },
                    error: function (data) {
                        alert(JSON.stringify(data));
                    }
               }); 
            }
        }

        function get_section_schedule(acadyr, sem, section_id)
        {
            var html = '';

            $.ajax({  
                    url:"<?php echo base_url('Report/get_section_schedule')?>", 
                    method:"POST",
                    async: false,
                    dataType: 'json',  
                    data:{acadyr:acadyr, sem:sem, section_id:section_id},  
                    success:function(data){  
                        var i;

                        for(i=0; i<data.length; i++)
                        {
                            html += '<tr>'+
                                        '<td>'+data[i][0]+'</td>'+
                                        '<td>'+data[i][1]+'</td>'+
                                        '<td>'+data[i][2]+'</td>'+
                                        '<td>'+data[i][3]+'</td>'+
                                        '<td>'+data[i][4]+'</td>'+
                                        '<td>'+data[i][5]+'</td>'+
                                        '<td>'+data[i][6]+'</td>'+
                                        '<td>'+data[i][7]+'</td>'+
                                    '</tr>';
                        }
                    },
                    error: function (data) {
                        alert(JSON.stringify(data));
                    }
               }); 

            return html;
        }

        function get_section_total(acadyr, sem, section_id)
        {
            var html = '';

            $.ajax({  
                    url:"<?php echo base_url('Report/get_section_total')?>", 
                    method:"POST",
                    async: false,
                    dataType: 'json',  
                    data:{acadyr:acadyr, sem:sem, section_id:section_id},  
                    success:function(data){  
                        var i;

                        for(i=0; i<data.length; i++)
                        {
                            html += '<tr>'+
                                        '<th colspan="2"  style="text-align:right">'+'TOTAL'+'</th>'+
                                        '<td>'+data[i][0]+'</td>'+
                                        '<td>'+data[i][1]+'</td>'+
                                    '</tr>';
                        }
                    },
                    error: function (data) {
                        alert(JSON.stringify(data));
                    }
               }); 

            return html;
        }

        $(document).ready(function()
        {
            $('.ajax-loader').hide();

            $(document).ajaxStart(function(){
                $(".ajax-loader").css("display", "block");
            });

            $(document).ajaxComplete(function(){
                $(".ajax-loader").css("display", "none");
            });

            $('#select_acadyr').on('change', function(){
                var acadyr = $('#select_acadyr').val();
                var sem = $('#select_sem').val();
                var course = $('#select_course').val();
                $('#first_year').empty();
                $('#second_year').empty();
                $('#third_year').empty();
                $('#fourth_year').empty();
                fetch_schedule(acadyr, sem, course);
            });

            $('#select_sem').on('change', function(){
                var acadyr = $('#select_acadyr').val();
                var sem = $('#select_sem').val();
                var course = $('#select_course').val();
                $('#first_year').empty();
                $('#second_year').empty();
                $('#third_year').empty();
                $('#fourth_year').empty();
                fetch_schedule(acadyr, sem, course);
            });

            $('#select_course').on('change', function(){
                var acadyr = $('#select_acadyr').val();
                var sem = $('#select_sem').val();
                var course = $('#select_course').val();
                $('#first_year').empty();
                $('#second_year').empty();
                $('#third_year').empty();
                $('#fourth_year').empty();
                fetch_schedule(acadyr, sem, course);
            });

        });

    </script>

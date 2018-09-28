                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                         <h4 class="page-title">Dashboard</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="#">Admin</a></li>
                            <li class="active">Dashboard</li>
                        </ol>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12">
                        <div class="white-box">
                            <div class="row row-in">
                                <div class="col-lg-3 col-sm-6 row-in-br">
                                    <label class="control-label">Select Academic Year</label>
                                     <select class="form-control" id="selectAcadYr1">
                                        <option value="">-Academic Year-</option>
                                        <?php 
                                            for ($i = date("Y"); $i > 1900; $i-- ){
                                                echo '<option value ="' .$i. '&#x2010;'. ($i+1).'">' .$i. '&#x2010;'. ($i+1) .  '</option>'; 
                                            }
                                        ?>
                                      </select>
                                      <br>
                                      <label class="control-label">Select Semester</label>
                                     <select class="form-control" id="selectSem1">
                                        <option value="">--Semester--</option>
                                        <option value="1st">First</option>
                                        <option value="2nd">Second</option>
                                        <option value="Summer">Summer</option>
                                      </select>
                                </div>

                                <div class="col-lg-3 col-sm-6 row-in-br  b-r-none">
                                    <div class="col-in row">
                                        <div class="col-md-6 col-sm-6 col-xs-6"> <i class="linea-icon linea-basic" data-icon="&#xe01b;"></i>
                                            <h5 class="text-muted vb">FACULTY MEMBER <BR> WITH COMPLETE SCHEDULE</h5>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-6">
                                            <h3 class="counter text-right m-t-15 text-megna">52</h3>
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-megna" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 100%"> <span class="sr-only">40% Complete (success)</span> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6 row-in-br">
                                    <div class="col-in row">
                                        <div class="col-md-6 col-sm-6 col-xs-6"> <i class="linea-icon linea-basic" data-icon="&#xe00b;"></i>
                                            <h5 class="text-muted vb">SECTIONS WITH <BR>COMPLETE SCHEDULE</h5>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-6">
                                            <h3 class="counter text-right m-t-15 text-primary">43</h3>
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 75%"> <span class="sr-only">40% Complete (success)</span> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6  b-0">
                                    <div class="col-in row">
                                        <div class="col-md-6 col-sm-6 col-xs-6"> <i class="linea-icon linea-basic" data-icon="&#xe016;"></i>
                                            <h5 class="text-muted vb">SERVICES WITH ASSIGNED FACULTY MEMBER</h5>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-6">
                                            <h3 class="counter text-right m-t-15 text-success">28</h3>
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"> <span class="sr-only">40% Complete (success)</span> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    
                    <!--TOP 5 FACULTY MEMBERS-->
                    <div class="row">
                     <div class="col-md-5">
                         <div class="white-box">
                            <h3 class="box-title">Top 5 Faculty Members</h3>
                            <p class="text-muted m-b-30"> with 3 Consecutive Outstanding Ratings</p>
                            <div class="vtabs">
                                <ul class="nav tabs-vertical" >
                                    <style>
                                     .nav-item {
                                             background-color:#fff; 
                                             border:0px;
                                        }
                                    </style>
                                    <li class="tab nav-item active">
                                        <a data-toggle="tab" class="nav-link" href="#regularFulltimeTab" aria-expanded="true"> <span class="visible-xs"><i class="ti-home"></i></span> <span class="hidden-xs">Regular Full-Time</span> </a>
                                    </li>
                                    <li class="tab nav-item" style="background-color:#fff; border:0px;">
                                        <a data-toggle="tab" class="nav-link" href="#regularDesigneeTab" aria-expanded="false"> <span class="visible-xs"><i class="ti-user"></i></span> <span class="hidden-xs">Regular Designee</span> </a>
                                    </li>
                                    <li class="tab nav-item">
                                        <a data-toggle="tab" aria-expanded="false" class="nav-link" data-toggle="tab" href="#vmessages3"> <span class="visible-xs"><i class="ti-email"></i></span> <span class="hidden-xs">Part Time - Full Time</span> </a>
                                    </li>
                                    <li class="tab nav-item">
                                        <a data-toggle="tab" aria-expanded="false" class="nav-link" data-toggle="tab" href="#vmessages3"> <span class="visible-xs"><i class="ti-email"></i></span> <span class="hidden-xs">Part Time - Part Time</span> </a>
                                    </li>
                                </ul>
                            <div class="tab-content">
                                <div id="regularFulltimeTab" class="tab-pane active">
                                <div class="white-box"style="padding-top:0%; padding-bottom:0%;">
                                    <div class="steamline">
                                        <div class="sl-item">
                                             <div class="sl-left"> <img class="img-circle" alt="user" src="<?php echo base_url(); ?>assets/images/profile.png"> 
                                             </div>
                                        <div class="sl-right">
                                            <div><label>Rachel Nayre1</label></div>
                                            <p>Rating: 100%</p>
                                        </div>
                                    </div>
                                <div class="sl-item">
                                    <div class="sl-left"> <img class="img-circle" alt="user" src="<?php echo base_url(); ?>assets/images/profile.png"> </div>
                                    <div class="sl-right">
                                        <div><label>Rachel Nayre</label></div>
                                        <p>Rating: 100%</p>
                                    </div>
                                </div>
                                <div class="sl-item">
                                   <div class="sl-left"> <img class="img-circle" alt="user" src="<?php echo base_url(); ?>assets/images/profile.png"> </div>
                                    <div class="sl-right">
                                        <div><label>Rachel Atian-Nayre</label></div>
                                        <p>Rating: 100%</p>
                                    </div>
                                </div>
                                <div class="sl-item">
                                    <div class="sl-left"> <img class="img-circle" alt="user" src="<?php echo base_url(); ?>assets/images/profile.png"> </div>
                                    <div class="sl-right">
                                        <div><label>Rachel Nayre</label></div>
                                        <p>Rating: 100%</p>
                                    </div>
                                </div>
                                <div class="sl-item">
                                   <div class="sl-left"> <img class="img-circle" alt="user" src="<?php echo base_url(); ?>assets/images/profile.png"> </div>
                                    <div class="sl-right">
                                        <div><label>Rachel Nayre</label></div>
                                        <p>Rating: 100%</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                               <div class="clearfix"></div>
                                    </div>
                                    <div id="regularDesigneeTab" class="tab-pane">
                                           <div class="white-box"style="padding-top:0%; padding-bottom:0%;">
                            <div class="steamline">
                                <div class="sl-item">
                                   <div class="sl-left"> <img class="img-circle" alt="user" src="<?php echo base_url(); ?>assets/images/profile.png"> </div>
                                    <div class="sl-right">
                                        <div><label>Rachel Nayre2</label></div>
                                        <p>Rating: 100%</p>
                                    </div>
                                </div>
                                <div class="sl-item">
                                    <div class="sl-left"> <img class="img-circle" alt="user" src="<?php echo base_url(); ?>assets/images/profile.png"> </div>
                                    <div class="sl-right">
                                        <div><label>Rachel Nayre</label></div>
                                        <p>Rating: 100%</p>
                                    </div>
                                </div>
                                <div class="sl-item">
                                   <div class="sl-left"> <img class="img-circle" alt="user" src="<?php echo base_url(); ?>assets/images/profile.png"> </div>
                                    <div class="sl-right">
                                        <div><label>Rachel Nayre</label></div>
                                        <p>Rating: 100%</p>
                                    </div>
                                </div>
                                <div class="sl-item">
                                    <div class="sl-left"> <img class="img-circle" alt="user" src="<?php echo base_url(); ?>assets/images/profile.png"> </div>
                                    <div class="sl-right">
                                        <div><label>Rachel Nayre</label></div>
                                        <p>Rating: 100%</p>
                                    </div>
                                </div>
                                <div class="sl-item">
                                   <div class="sl-left"> <img class="img-circle" alt="user" src="<?php echo base_url(); ?>assets/images/profile.png"> </div>
                                    <div class="sl-right">
                                        <div><label>Rachel Nayre</label></div>
                                        <p>Rating: 100%</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                                    </div>
                                    <div id="vmessages3" class="tab-pane">
                                         <div class="white-box"style="padding-top:0%; padding-bottom:0%;">
                            <div class="steamline">
                                <div class="sl-item">
                                   <div class="sl-left"> <img class="img-circle" alt="user" src="<?php echo base_url(); ?>assets/images/profile.png"> </div>
                                    <div class="sl-right">
                                        <div><label>Rachel Nayre3</label></div>
                                        <p>Rating: 100%</p>
                                    </div>
                                </div>
                                <div class="sl-item">
                                    <div class="sl-left"> <img class="img-circle" alt="user" src="<?php echo base_url(); ?>assets/images/profile.png"> </div>
                                    <div class="sl-right">
                                        <div><label>Rachel Nayre</label></div>
                                        <p>Rating: 100%</p>
                                    </div>
                                </div>
                                <div class="sl-item">
                                   <div class="sl-left"> <img class="img-circle" alt="user" src="<?php echo base_url(); ?>assets/images/profile.png"> </div>
                                    <div class="sl-right">
                                        <div><label>Rachel Nayre</label></div>
                                        <p>Rating: 100%</p>
                                    </div>
                                </div>
                                <div class="sl-item">
                                    <div class="sl-left"> <img class="img-circle" alt="user" src="<?php echo base_url(); ?>assets/images/profile.png"> </div>
                                    <div class="sl-right">
                                        <div><label>Rachel Nayre</label></div>
                                        <p>Rating: 100%</p>
                                    </div>
                                </div>
                                <div class="sl-item">
                                   <div class="sl-left"> <img class="img-circle" alt="user" src="<?php echo base_url(); ?>assets/images/profile.png"> </div>
                                    <div class="sl-right">
                                        <div><label>Rachel Nayre</label></div>
                                        <p>Rating: 100%</p>
                                    </div>
                                  </div>
                            </div>
                        </div>
                 </div>
             </div>
          </div>  
     </div>
     </div>
            <div class="col-sm-5">
            <div class="white-box" style="padding-bottom: 15%;">
            <h3 class="box-title"> total number of faculty members</h3>
             <p class="text-muted m-b-30">with satisfactory rating per faculty type</p>
            <hr style="border: 1px solid">
            <div class="row">
                <div class="col-md-6">
                                 <label class="control-label">Select Academic Year</label>
                                     <select class="form-control" id="selectAcadYr2">
                                        <option value="">-Academic Year-</option>
                                        <?php 
                                            for ($i = date("Y"); $i > 1900; $i-- ){
                                                echo '<option value ="' .$i. '&#x2010;'. ($i+1).'">' .$i. '&#x2010;'. ($i+1) .  '</option>'; 
                                            }
                                        ?>
                                      </select>
                </div>
            
                <div class="col-md-6">
                
                                      <label class="control-label">Select Semester</label>
                                     <select class="form-control" id="selectSem2">
                                        <option value="">--Semester--</option>
                                        <option value="1st">First</option>
                                        <option value="2nd">Second</option>
                                        <option value="Summer">Summer</option>
                                      </select>
                                  </div>
                              </div>
             <hr style="border: 1px solid">
            <div>
                <ul class="basic-list">
                    <?php
                        foreach($fac_type as $ft)
                        {
                            echo '<li>'.$ft[0].'<span class="pull-right label-info label" id="'.$ft[2].'"></span></li>';
                        } 
                    ?>
                    <!-- <li>Regular Full Time <span class="pull-right label-danger label">21.8%</span></li>
                    <li>Regular Designee <span class="pull-right label-success label">21.8%</span></li>
                    <li>Part Time Full Time<span class="pull-right label-info label">21.8%</span></li>
                    <li>Part Time Part Time <span class="pull-right label-warning label">21.8%</span></li> -->
                </ul>
            </div>
        </div>
                
<!--  -->
            </div>
            <div class="col-md-2">
                <div class="row">
                    <div class="col-md-12">
                        <div class="white-box text-center bg-info">
                            <label id="curr_used"></label>
                            <p class="text-white">Curriculum year used</p>
                        </div>
                    </div>
                 </div>
                 <div class="row">
                    <div class="col-md-12">
                        <div class="white-box text-center bg-purple">
                            <h1 class="text-white">
                                <?php
                                    $year = date('Y');
                                    (date('m') < 6) ? $year - 1 : $year;
                                    echo $year.'-'.($year+1); 
                                ?>
                            </h1>
                            <p class="text-white">Academic Year</p>
                        </div>
                    </div>
                 </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="white-box">
                         <h3 class="box-title">Top 5 Specializations</h3>
                        <div>
                         <canvas id="chart4" height="255"></canvas>
                    </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
<!--2nd row  OF DASHBOARD-->
            <div class="row">
                <div class="col-md-6">
                    <div class="white-box">
                    <h3 class="box-title">TOTAL NUMBER OF SECTIONS</h3>
                     <div>
                        <canvas id="chart2" height="150"></canvas>
                    </div>
                </div>
                </div>
                <div class="col-md-3">
                    <div class="white-box">
                    <h3 class="box-title">Total Number of Faculty Members</h3>
                    <div>
                         <canvas id="chart3" height="270"></canvas>
                    </div>
                    <hr style="border: 1px solid; color: #EEF0F0;">
                    <label class="control-label" id="total_fac"></label>
                </div>
                </div>
                    <div class="col-md-3">
                    <div class="white-box">
                     <h3 class="box-title"> top 5 preferred teaching time </h3>
                        <label class="control-label">Select Academic Year</label>
                            <select class="form-control" id="selectAcadYr3">
                                <option value="">--ACADEMIC YEAR--</option>
                                    <?php 
                                        for ($i = date("Y"); $i > 1900; $i-- ){
                                            echo '<option value ="' .$i. '&#x2010;'. ($i+1).'">' .$i. '&#x2010;'. ($i+1) .  '</option>'; 
                                        }
                                    ?>
                            </select>
                            <hr>
                            <div>
                                <canvas id="chart5" height="230"></canvas>
                            </div>
                    </div>
                    </div>
            </div>

             
 <script src="<?php echo base_url(); ?>assets/plugins/bower_components/jquery/dist/jquery.min.js"></script>
 <script src="<?php echo base_url(); ?>assets/plugins/bower_components/datatables/jquery.dataTables.min.js"></script>

    <!-- Ito ung inidagdag ko para sa may alert animation at ung nasa ajax part kasama nito ung mga title chuchu -->
    <script src="<?php echo base_url(); ?>assets/js/sweetalert.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/bower_components/morrisjs/morris.js"></script>
<script src="<?php echo base_url(); ?>assets/js/widget.js"></script>
    <!-- BOOTSTRAP SELECT -->
    <script src="<?php echo base_url(); ?>assets/plugins/bower_components/bootstrap-select/bootstrap-select.min.js" type="text/javascript"></script>

    <!-- CUSTOM SELECT -->
    <script src="<?php echo base_url(); ?>assets/plugins/bower_components/custom-select/custom-select.min.js" type="text/javascript"></script>
     <!-- Chart JS -->
 <!--   <script src="<?php echo base_url(); ?>assets/plugins/bower_components/Chart.js/chartjs.init.js"></script> -->
    <script src="<?php echo base_url(); ?>assets/plugins/bower_components/Chart.js/Chart.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/bower_components/raphael/raphael-min.js"></script>
 
    <script src="<?php echo base_url(); ?>assets/js/morris-data.js"></script>

    <script type="text/javascript">

        function show_total_sec()
        {
            $.ajax({
               type:"POST",
               url:"<?php echo base_url('Maintenance/show_total_section')?>",
               dataType: 'json',
               cache: false,
               success: function(data)
                {
                    var ctx2 = document.getElementById("chart2").getContext("2d");
                    var data2 = {
                        labels: data[1],
                        datasets: [
                            {
                                label: "My First dataset",
                                fillColor: "rgba(180,193,215,0.8)",
                                strokeColor: "rgba(180,193,215,0.8)",
                                highlightFill: "rgba(180,193,215,1)",
                                highlightStroke: "rgba(180,193,215,1)",
                                data: data[0]
                            }
                        ]
                    };

                    var chart2 = new Chart(ctx2).Bar(data2, {
                    scaleBeginAtZero : true,
                    scaleShowGridLines : true,
                    scaleGridLineColor : "rgba(0,0,0,.005)",
                    scaleGridLineWidth : 0,
                    scaleShowHorizontalLines: true,
                    scaleShowVerticalLines: true,
                    barShowStroke : true,
                    barStrokeWidth : 0,
                    tooltipCornerRadius: 2,
                    barDatasetSpacing : 3,
                    legendTemplate : "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].fillColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>",
                    responsive: true
                });
                  
                },
                error: function(data)
                {
                    alerts('An error occured. Please reload the page and try again.','e');
                }
            });
        }

        function show_total_faculty_pertype()
        {
            $.ajax({
               type:"POST",
               url:"<?php echo base_url('Maintenance/get_total_fac_pertype')?>",
               dataType: 'json',
               cache: false,
               success: function(data)
                {
                    var ctx3 = document.getElementById("chart3").getContext("2d");
                    
                    var myPieChart = new Chart(ctx3).Pie(data,{
                        segmentShowStroke : true,
                        segmentStrokeColor : "#fff",
                        segmentStrokeWidth : 0,
                        animationSteps : 100,
                        tooltipCornerRadius: 0,
                        animationEasing : "easeOutBounce",
                        animateRotate : true,
                        animateScale : false,
                        legendTemplate : "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<segments.length; i++){%><li><span style=\"background-color:<%=segments[i].fillColor%>\"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>",
                        responsive: true
                    });
                  
                },
                error: function(data)
                {
                    alert('An error occured. Please reload the page and try again.','e');
                }
            });
        }

        function getUsedCurriculum()
        {
            $.ajax({  
                url:"<?php echo base_url('Maintenance/get_curr_desc')?>", 
                method:"POST",  
                dataType: "json",
                success:function(data){
                    $('#curr_used').html('<h1 class="text-white">'+ data +'</h1>')
                },
                     error: function (data) {
                    alert(JSON.stringify(data));
                }
           });
        }

        function getTotalFaculty()
        {
            $.ajax({  
                url:"<?php echo base_url('Maintenance/get_tot_faculty')?>", 
                method:"POST",  
                dataType: "json",
                success:function(data){
                    $('#total_fac').html('Total: '+ data)
                },
                     error: function (data) {
                    alert(JSON.stringify(data));
                }
           });
        }

        function show_top_specialization()
        {
            $.ajax({
               type:"POST",
               url:"<?php echo base_url('Maintenance/show_top_spec')?>",
               dataType: 'json',
               cache: false,
               success: function(data)
                {
                    var ctx4 = document.getElementById("chart4").getContext("2d");
                    
                    var myDoughnutChart = new Chart(ctx4).Doughnut(data,{
                        segmentShowStroke : true,
                        segmentStrokeColor : "#fff",
                        segmentStrokeWidth : 0,
                        animationSteps : 100,
                        tooltipCornerRadius: 2,
                        animationEasing : "easeOutBounce",
                        animateRotate : true,
                        animateScale : false,
                        legendTemplate : "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<segments.length; i++){%><li><span style=\"background-color:<%=segments[i].fillColor%>\"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>",
                        responsive: true
                    });
                },
                error: function(data)
                {
                    alert('An error occured. Please reload the page and try again.','e');
                }
            });
        }

        function fetch_data(acad_yr, sem)
        {
            //$('#1').text('21%');
            $.ajax({  
                url:"<?php echo base_url('Maintenance/get_tot_faculty')?>", 
                method:"POST",  
                dataType: "json",
                success:function(data){
                    
                },
                error: function (data) {
                    alert(JSON.stringify(data));
                }
           });           
        }

        $(document).ready(function()
        {
            show_total_sec();

            show_total_faculty_pertype();

            getUsedCurriculum();

            getTotalFaculty();

            show_top_specialization();

            $('#selectAcadYr3').on('change', function()
            {
                var acad_yr = $('#selectAcadYr3').val();
                $.ajax({
                   type:"POST",
                   url:"<?php echo base_url('Maintenance/show_pref_time')?>",
                   data: {acad_yr:acad_yr},
                   dataType: 'json',
                   cache: false,
                   success: function(data)
                    {
                        var ctx5 = document.getElementById("chart5").getContext("2d");
                        
                        var myPolarArea = new Chart(ctx5).PolarArea(data, {
                            scaleShowLabelBackdrop : true,
                            scaleBackdropColor : "rgba(255,255,255,0.75)",
                            scaleBeginAtZero : true,
                            scaleBackdropPaddingY : 2,
                            scaleBackdropPaddingX : 2,
                            scaleShowLine : true,
                            segmentShowStroke : true,
                            segmentStrokeColor : "#fff",
                            segmentStrokeWidth : 2,
                            animationSteps : 100,
                            tooltipCornerRadius: 2,
                            animationEasing : "easeOutBounce",
                            animateRotate : true,
                            animateScale : false,
                            legendTemplate : "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<segments.length; i++){%><li><span style=\"background-color:<%=segments[i].fillColor%>\"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>",
                            responsive: true
                        });
                    },
                    error: function(data)
                    {
                        alert('An error occured. Please reload the page and try again.','e');
                    }
                });
            });
        
            $('#selectAcadYr2').on('change', function(){
                var acad_yr = $('#selectAcadYr2').val();
                var sem = $('#selectSem2').val();
                fetch_data(acad_yr, sem);
            });

            $('#selectSem2').on('change', function(){
                var acad_yr = $('#selectAcadYr2').val();
                var sem = $('#selectSem2').val();
                fetch_data(acad_yr, sem);
            });

        });


    </script>
<div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                         <h4 class="page-title">Subject Preference</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="#">Transaction</a></li>
                            <li class="active">Subject Preference</li>
                        </ol>
                    </div>
                
                </div>

            <div class="row">      
                <div class="col-sm-12">
                    <div class="white-box">

                        <div class="row">
                            <h2>Subject Preference Form/Intent to Teach</h2>
                            <div  class="col-md-12" style="background-color: gray; height: 3px; margin-top: -5px;">

                            </div>
                            <br>
                            <br>


                        </div>
                        <div class="row">
                            <div class="col-md-3" id="for_hiding">
                                <label class="control-label">Select Faculty:</label>
                                <select class="form-control select2 " id="fac_list" name="fac_list">
                                    <option value="0">-SELECT FACULTY-</option>
                                    <?php foreach($faculty as $r) echo '<option value="'.$r[7].'">'.$r[1].', '.$r[2].' '.$r[3].'</option>';?>         
                                </select>
                            </div>
                            <div class="col-md-3" hidden="">
                                <label class="control-label">Email:</label>
                                <input id="fac_email" type="email" class="form-control" readonly>
                            </div>
                            <div class="col-md-3">
                                <label class="control-label">Acad Year:</label>
                                <select class="form-control select2" name="acad_year" id="acad_year">
                                    <option value="0">-ACAD YEAR-</option>
                                        <?php 
                                            for ($i = (date("Y") + 1); $i > 1900; $i-- ){
                                                echo '<option value ="' .$i. '&#x2010;'. ($i+1).'">' .$i. '&#x2010;'. ($i+1) .  '</option>'; 
                                            }
                                        ?>
                                </select>
                                
                            </div>
                            <div class="col-md-3">
                                <label class="control-label">Semester:</label>
                                <select class="form-control select2" name="selected_sem" id="selected_sem">
                                    <option value="0">-SELECT SEM-</option>
                                    <option value="1st">1st</option>
                                    <option value="2nd">2nd</option> 
                                    <option value="summer">Summer</option>        
                                </select>
                                
                            </div>
                        </div>
                        <br>
                        
                        <div class="row">
                            <h2>Preferred Teaching Time</h2>
                        </div>

                        <div class="row" style="margin-left: 20px;">
                            <div class="col-md-4">
                                <div class="col-md-12">
                                    <h3 style="color: red;">Monday</h3>
                                </div>

                                <div class="col-md-12 checkbox checkbox-circle checkbox-info">
                                    <input type="checkbox" id="mon_mor_id" name="set_time" value="mon_mor" >
                                    <label for="mon_mor_id">Morning (7:30AM to 12:00NN)</label>
                                </div>
                                <div class="col-md-12 checkbox checkbox-circle checkbox-info ">
                                    <input type="checkbox" id="mon_aft_id" name="set_time" value="mon_aft"  >
                                    <label for="mon_aft_id">Afternoon (12:00NN to 6:00PM)</label>
                                </div>
                                <div class="col-md-12 checkbox checkbox-circle checkbox-info">
                                    <input type="checkbox" id="mon_eve_id" name="set_time" value="mon_eve"  >
                                    <label for="mon_eve_id">Night (6:00PM to 9:00PM)</label>
                                </div>
                                <div class="col-md-12">
                                    <label class="control-label" style="color: gray;"><u> Other:</u> </label><br>
                                    <div class="col-md-5">
                                        <label class="control-label">Start: </label>
                                        <input class="form-control" type="time" id="strtMon" placeholder="Start" value="7:30">
                                    </div>
                                    <div class="col-md-5">
                                        <label class="control-label">End: </label>
                                        <input class="form-control" type="time" id="endMon" placeholder="Start">
                                    </div>
                                    <div class="col-md-2">
                                        <button type="button" data-toggle="tooltip" data-placement="top" title="Add time" id="btnOtherMon" style="margin-top: 25px;" class="btn btn-success waves-effect text-left"><span class="fa fa-plus"></span> </button>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="col-md-12">
                                    <h3 style="color: red;">Tuesday</h3>
                                </div>

                                <div class="col-md-12 checkbox checkbox-circle checkbox-info ">
                                    <input type="checkbox" id="tue_mor_id" name="set_time" value="tue_mor" >
                                    <label for="tue_mor_id">Morning (7:30AM to 12:00NN)</label>
                                </div>
                                <div class="col-md-12 checkbox checkbox-circle checkbox-info">
                                    <input type="checkbox" id="tue_aft_id" name="set_time" value="tue_aft" >
                                    <label for="tue_aft_id">Afternoon (12:00NN to 6:00PM)</label>
                                </div>
                                <div class="col-md-12 checkbox checkbox-circle checkbox-info">
                                    <input type="checkbox" id="tue_eve_id" name="set_time" value="tue_eve" >
                                    <label for="tue_eve_id">Night (6:00PM to 9:00PM)</label>
                                </div>
                                <div class="col-md-12">
                                    <label class="control-label" style="color: gray;"><u> Other:</u> </label><br>
                                    <div class="col-md-5">
                                        <label class="control-label">Start: </label>
                                        <input class="form-control" id="strTue" type="time">                                        
                                    </div>
                                    <div class="col-md-5">
                                        <label class="control-label">End: </label>
                                        <input class="form-control" id="endTue" type="time">
                                    </div>
                                    <div class="col-md-2">
                                        <button type="button" data-toggle="tooltip" data-placement="top" title="Add time" id="btnOtherTue" style="margin-top: 25px;" class="btn btn-success waves-effect text-left"><span class="fa fa-plus"></span> </button>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="col-md-12">
                                    <h3 style="color: red;">Wednesday</h3>
                                </div>

                                <div class="col-md-12 checkbox checkbox-circle checkbox-info">
                                    <input type="checkbox" id="wed_mor_id" name="set_time" value="wed_mor" >
                                    <label for="wed_mor_id">Morning (7:30AM to 12:00NN)</label>
                                </div>
                                <div class="col-md-12 checkbox checkbox-circle checkbox-info">
                                    <input type="checkbox" id="wed_aft_id" name="set_time" value="wed_aft" >
                                    <label for="wed_aft_id">Afternoon (12:00NN to 6:00PM)</label>
                                </div>
                                <div class="col-md-12 checkbox checkbox-circle checkbox-info">
                                    <input type="checkbox" id="wed_eve_id" name="set_time" value="wed_eve" >
                                    <label for="wed_eve_id">Night (6:00PM to 9:00PM)</label>
                                </div>
                                <div class="col-md-12">
                                    <label class="control-label" style="color: gray;"><u> Other:</u> </label><br>
                                    <div class="col-md-5">
                                        <label class="control-label">Start: </label>
                                        <input class="form-control" type="time" id="strWed">                                        
                                    </div>
                                    <div class="col-md-5">
                                        <label class="control-label">End: </label>
                                        <input class="form-control" type="time" id="endWed" >
                                    </div>
                                    <div class="col-md-2">
                                        <button type="button" data-toggle="tooltip" data-placement="top" title="Add time" id="btnOtherWed" style="margin-top: 25px;" class="btn btn-success waves-effect text-left"><span class="fa fa-plus"></span> </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                            
                        <br>

                        <div class="row" style="margin-left: 20px;">
                            <div class="col-md-4">
                                <div class="col-md-12">
                                    <h3 style="color: red;">Thursday</h3>
                                </div>

                                <div class="col-md-12 checkbox checkbox-circle checkbox-info">
                                    <input type="checkbox" id="thr_mor_id" name="set_time" value="thr_mor" >
                                    <label for="thr_mor_id">Morning (7:30AM to 12:00NN)</label>
                                </div>
                                <div class="col-md-12 checkbox checkbox-circle checkbox-info">
                                    <input type="checkbox" id="thr_aft_id" name="set_time" value="thr_aft" >
                                    <label for="thr_aft_id">Afternoon (12:00NN to 6:00PM)</label>
                                </div>
                                <div class="col-md-12 checkbox checkbox-circle checkbox-info">
                                    <input type="checkbox" id="thr_eve_id" name="set_time" value="thr_eve" >
                                    <label for="thr_eve_id">Night (6:00PM to 9:00PM)</label>
                                </div>
                                <div class="col-md-12">
                                    <label class="control-label" style="color: gray;"><u> Other:</u> </label><br>
                                    <div class="col-md-5">
                                        <label class="control-label">Start: </label>
                                        <input class="form-control" type="time" id="strThr">                                        
                                    </div>
                                    <div class="col-md-5">
                                        <label class="control-label">End: </label>
                                        <input class="form-control" type="time" id="endThr">
                                    </div>
                                    <div class="col-md-2">
                                        <button type="button" data-toggle="tooltip" data-placement="top" title="Add time" id="btnOtherThr" style="margin-top: 25px;" class="btn btn-success waves-effect text-left"><span class="fa fa-plus"></span> </button>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="col-md-12">
                                    <h3 style="color: red;">Friday</h3>
                                </div>

                                <div class="col-md-12 checkbox checkbox-circle checkbox-info">
                                    <input type="checkbox" id="fri_mor_id" name="set_time" value="fri_mor" >
                                    <label for="fri_mor_id">Morning (7:30AM to 12:00NN)</label>
                                </div>
                                <div class="col-md-12 checkbox checkbox-circle checkbox-info">
                                    <input type="checkbox" id="fri_aft_id" name="set_time" value="fri_aft" >
                                    <label for="fri_aft_id">Afternoon (12:00NN to 6:00PM)</label>
                                </div>
                                <div class="col-md-12 checkbox checkbox-circle checkbox-info">
                                    <input type="checkbox" id="fri_eve_id" name="set_time" value="fri_eve" >
                                    <label for="fri_eve_id">Night (6:00PM to 9:00PM)</label>
                                </div>
                                <div class="col-md-12">
                                    <label class="control-label" style="color: gray;"><u> Other:</u> </label><br>
                                    <div class="col-md-5">
                                        <label class="control-label">Start: </label>
                                        <input class="form-control" type="time" id="strFri">                                        
                                    </div>
                                    <div class="col-md-5">
                                        <label class="control-label">End: </label>
                                        <input class="form-control" type="time" id="endFri">
                                    </div>
                                    <div class="col-md-2">
                                        <button type="button" data-toggle="tooltip" data-placement="top" title="Add time" id="btnOtherFri" style="margin-top: 25px;" class="btn btn-success waves-effect text-left"><span class="fa fa-plus"></span> </button>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="col-md-12">
                                    <h3 style="color: red;">Saturday</h3>
                                </div>

                                <div class="col-md-12 checkbox checkbox-circle checkbox-info">
                                    <input type="checkbox" id="sat_mor_id" name="set_time" value="sat_mor" >
                                    <label for="sat_mor_id">Morning (7:30AM to 12:00NN)</label>
                                </div>
                                <div class="col-md-12 checkbox checkbox-circle checkbox-info">
                                    <input type="checkbox" id="sat_aft_id" name="set_time" value="sat_aft" >
                                    <label for="sat_aft_id">Afternoon (12:00NN to 6:00PM)</label>
                                </div>
                                <div class="col-md-12 checkbox checkbox-circle checkbox-info">
                                    <input type="checkbox" id="sat_eve_id" name="set_time" value="sat_eve">
                                    <label for="sat_eve_id">Night (6:00PM to 9:00PM)</label>
                                </div>
                                <div class="col-md-12">
                                    <label class="control-label" style="color: gray;"><u> Other:</u></label><br>
                                    <div class="col-md-5">
                                        <label class="control-label">Start: </label>
                                        <input class="form-control" type="time" id="strSat">                                        
                                    </div>
                                    <div class="col-md-5">
                                        <label class="control-label">End: </label>
                                        <input class="form-control" type="time" id="endSat">
                                    </div>
                                    <div class="col-md-2">
                                        <button type="button" data-toggle="tooltip" data-placement="top" title="Add time" id="btnOtherSat" style="margin-top: 25px;" class="btn btn-success waves-effect text-left"><span class="fa fa-plus"></span> </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div hidden>
                            <input class="form-control" type="time" id="hid_min">
                            <input class="form-control" type="time" id="hid_max">
                        </div>
                    </div>
                </div>

               
              
              <div class="modal fade bs-example-modal-lg" id="modalDisclaimer" tabindex="-1" role="dialog" aria-labelledby="modalDisclaimer" aria-hidden="true" style="margin-top: 150px;">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h3 class="modal-title" style="margin-top: 30px;">Agreement</h3>
                                        </div>
                                        <div  class="col-md-12" style="background-color: gray; height: 3px; margin-top: -5px;">

                                        </div>
                                        <div class="modal-body">
                                            <div class="col-md-12">
                                                <h4>I understand that my application for subject preference does not guarantee that I will be given teaching assignments for courses and schedules stated above and that preference for the assignment of load shall follow University policies.</h4>
                                            </div>
                                        </div>
                                            
                                            
                                        <div class="modal-footer">
                                            <!-- <button type="button" class="btn btn-default" onclick="resetForm1()">Reset</button> -->
                                            <button type="button" name="btnCloseDisclaimer" class="btn btn-success waves-effect text-left" data-dismiss="modal">Agree</button>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                            </div>
                <!-- /.row -->
                <!-- .right-sidebar -->
            </div>

             <!-- OTHER PREFERRED TIME  -->
                <div class="container-fluid">
                    <div class="white-box">
                        <div class="row">
                            <h2>Time Preference</h2>
                        </div>
                        <div  class="col-md-12" style="background-color: gray; height: 3px; margin-top: -5px;">
                        </div>
                        <br>
                        <div class="row">
                            <div class="table-responsive">
                                <table class="table colored-table table-striped" id="time_preference">
                                    <thead>
                                        <tr>
                                            <th>Day</th>
                                            <th>Start Time</th>
                                            <th>End Time</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div> 
                    </div>
                </div>

                <div class="container-fluid">
                    <div class="white-box">
                        <div>
                            <h2>Preferred Subjects</h2>
                        </div>
                        <div  class="col-md-12" style="background-color: gray; height: 3px; margin-top: -5px;">
                        </div>
                        <br>
                        <!-- <h3 style="color: red;">BS in Information Technology</h3> -->
                        <div class="row" style="margin-left: 20px;"> 

                            <?php foreach($subjects as $r) echo '<div class="col-md-12 checkbox checkbox-circle checkbox-success">
                                                        <input id = "'.$r[0].'" value = "'.$r[0].'" name = "chk_subj" type="checkbox">
                                                        <label for ="'.$r[0].'">'. $r[1]. ' -' .$r[2]. '</label>
                                                        </div>';
                            ?>

                            <div class="col-md-12 col-md-12 checkbox checkbox-circle checkbox-success">
                                <input value="0" id="none" type="checkbox" >
                                <label for="none" >NONE</label>
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


    //GLOBAL VARIABLES 
    var global_year = "<?php echo $curr_year?>";
    var global_month = "<?php echo $curr_month?>";
    var global_pref_subj = [];
    var global_acadyr; 
    var global_sem;

function hide_dropdown()
    {
        var data = "<?php echo $acc_type?>";
        if(data == 'faculty')
        {
            $('#for_hiding').hide();   
        }
        else
        {
            $('#for_hiding').show();
        }
    }


function loadtable(faculty_id, acad_year, sem){

          var dataTable = $('#time_preference').DataTable({           
              "processing" : true,
              "serverSide" : true,
              "order" : [],
              destroy:true,
              "ajax" : {
               url:"<?php echo base_url('Transaction/time_pref_table')?>",
               data:{fac_id: faculty_id, acad_year:acad_year, sem:sem},
               type:"POST"
              }
             });
        }

function getPrefTime(faculty_id, acad_year, sem){

        $.ajax({  
                url:"<?php echo base_url('Transaction/get_pref_time')?>", 
                method:"POST",  
                data: {fac_id: faculty_id, acad_year:acad_year, sem:sem},  
                dataType: "JSON",
                success:function(data){  

                    if(data == null ){
                        alert('No record');
                    }
                    else{
                            $("input[name = 'set_time']").prop('checked', false);
                            checkTime(data);            
                        }

                    }
                }); 
    }

    function checkTimeValidity(i, e){

        var return_value = '';
        document.getElementById("hid_min").value = "07:30:00";
        document.getElementById("hid_max").value = "21:00:00";
        value1 = document.getElementById("hid_min").value;
        value2 = document.getElementById("hid_max").value;

        if(i < e){

            if(i >=  value1 && i <= value2  || e >=  value1 && e <= value2 ){

                value = 'valid';
            }

            else{
                value = 'invalid';
            }

        }

        else if(i > e){
            value = 'invalid';
        }

        else{
            value = 'invalid';
        }

        return value;
    }

    function addMoreTime(day, start, end){

        var sem = $('#selected_sem').val();
        var acad_year = $('#acad_year').val();
        var data = "<?php echo $acc_type?>"; 
        if(data == 'admin'){
            var fac_id = $('#fac_list').val();
        }
        else{
            var fac_id = "<?php echo $fac_id?>";
        }

         $.ajax({  
            url:"<?php echo base_url('Transaction/add_pref_time')?>",  
            method:"POST",  
            data:{fac_id:fac_id, day:day, start:start, end:end, acad_year:acad_year, sem:sem},

                success:function(data)
                {  
                    if (fac_id == 0){

                        alert('Select a faculty member first.');
                    }

                    else
                    {
                        swal("Success!", day + " " + start + " - " + end + " is added.");
                    }
                }, 

                error: function(data)
                 {
                       alerts('An error occured. Please reload the page and try again.');
                 }
            }); 

    }


    function checkTime(arr){

        var day_temp = '';
        var start_temp = '';
        var end_temp = '';

        for(var i = 0; i < arr.length ; i++){

            day_temp = arr[i][0];
            start_temp = arr[i][1];
            end_temp = arr[i][2];

            if (day_temp == 'Monday'){

                if (start_temp == '07:30:00' && end_temp == '12:00:00'){

                    $("input[value = 'mon_mor']").prop('checked',true);
                }

                else if (start_temp == '12:00:00' && end_temp == '18:00:00'){

                    $("input[value = 'mon_aft']").prop('checked',true);
                }

                else if (start_temp == '18:00:00' && end_temp == '21:00:00'){

                    $("input[value = 'mon_eve']").prop('checked',true);
                }


            } //END OF MONDAY IF

            else if (day_temp == 'Tuesday'){

                if (start_temp == '07:30:00' && end_temp == '12:00:00'){

                    $("input[value = 'tue_mor']").prop('checked',true);
                }

                else if (start_temp == '12:00:00' && end_temp == '18:00:00'){

                    $("input[value = 'tue_aft']").prop('checked',true);
                }

                else if (start_temp == '18:00:00' && end_temp == '21:00:00'){

                    $("input[value = 'tue_eve']").prop('checked',true);
                }


            } //END OF TUESDAY IF

            else if (day_temp == 'Wednesday'){

                if (start_temp == '07:30:00' && end_temp == '12:00:00'){

                    $("input[value = 'wed_mor']").prop('checked',true);
                }

                else if (start_temp == '12:00:00' && end_temp == '18:00:00'){

                    $("input[value = 'wed_aft']").prop('checked',true);
                }

                else if (start_temp == '18:00:00' && end_temp == '21:00:00'){

                    $("input[value = 'wed_eve']").prop('checked',true);
                }


            } //END OF WEDNESDAY IF

            else if (day_temp == 'Thursday'){

                if (start_temp == '07:30:00' && end_temp == '12:00:00'){

                    $("input[value = 'thr_mor']").prop('checked',true);
                }

                else if (start_temp == '12:00:00' && end_temp == '18:00:00'){

                    $("input[value = 'thr_aft']").prop('checked',true);
                }

                else if (start_temp == '18:00:00' && end_temp == '21:00:00'){

                    $("input[value = 'thr_eve']").prop('checked',true);
                }

            } //END OF THURSDAY IF

            else if (day_temp == 'Friday'){

                if (start_temp == '07:30:00' && end_temp == '12:00:00'){

                    $("input[value = 'fri_mor']").prop('checked',true);
                }

                else if (start_temp == '12:00:00' && end_temp == '18:00:00'){

                    $("input[value = 'fri_aft']").prop('checked',true);
                }

                else if (start_temp == '18:00:00' && end_temp == '21:00:00'){

                    $("input[value = 'fri_eve']").prop('checked',true);
                }

            } //END OF FRIDAY IF

            else if (day_temp == 'Saturday'){

                if (start_temp == '07:30:00' && end_temp == '12:00:00'){

                    $("input[value = 'sat_mor']").prop('checked',true);
                }

                else if (start_temp == '12:00:00' && end_temp == '18:00:00'){

                    $("input[value = 'sat_aft']").prop('checked',true);
                }

                else if (start_temp == '18:00:00' && end_temp == '21:00:00'){

                    $("input[value = 'sat_eve']").prop('checked',true);
                }

            } //END OF SATURDAY IF

            
        }
    }

    // GET THE COUNT OF FACULTY MEMBER'S PREFERRED SUBJECT
    function getPrefSubj(faculty_id, acad_year, sem){

        $.ajax({  
                url:"<?php echo base_url('Transaction/get_prof_subj')?>", 
                method:"POST",  
                data: {fac_id: faculty_id, acad_year:acad_year, sem:sem},  
                dataType: "JSON",
                success:function(data){  

                    if(data == null ){
                        alert('No record');
                    }
                    else{
                            $("input[name = 'chk_subj']").prop('checked', false);
                            checkSubj(data);
                        }

                    }, 
               async:false
                }); 
    }

    function matchSpecialization(fac_id){

        $.ajax({  
                url:"<?php echo base_url('Transaction/match_specialization')?>", 
                method:"POST",  
                data: {fac_id: fac_id},  
                dataType: "JSON",
                success:function(data){  
                    global_pref_subj = data;
                }, 
               async:false
                });   
    }

    function checkSubjectSpecialization(subj_id){

        var len = global_pref_subj.length;
        var bool_match = false;

        for (var x = 0; x < len ; x ++)
        {
            if(global_pref_subj[x] == subj_id)
            {
                bool_match = true;
            }
        }

        if(bool_match == false)
        {
            swal({
                        title: "HOLD ON!",
                        text: "This subject does not belong to one of your specializations. Do you still want to select this subject?", 
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
              })
                .then((willApprove) => {
                    
                  if (willApprove) {
                    bool_match = true;
                  } 

                  else {
                    swal("Cancelled", "You have chosen to cancel", "info");
                  }
                });
        }
        alert (bool_match);

        return bool_match;
    }

    function disableButtons(){
        $("input[name = 'set_time']").attr('disabled', 'disabled');
        $("input[name = 'chk_subj']").attr('disabled', 'disabled');
    }

    function enableButtons(){
        $("input[name = 'set_time']").removeAttr('disabled');
        $("input[name = 'chk_subj']").removeAttr('disabled');
    }


    function checkSubj(arr){

            var code_temp = '';

            for (var i = 0; i < arr.length; i++){

                code_temp = arr[i][0];
                $("input[value ="+ "'" + code_temp + "'" + "]").prop('checked',true);
                // alert(code_temp);
            }
    }

    //FACULTY LIST ON CHANGE
    $('#fac_list').on('change', function(e){

        e.preventDefault();
        var sem = $('#selected_sem').val();
        var acad_year = $('#acad_year').val();
        var data = "<?php echo $acc_type?>"; 
        if(data == 'admin'){
            var fac_id = $('#fac_list').val();
        }
        else{
            var fac_id = "<?php echo $fac_id?>";
        }

        if(fac_id != 0 ){
            matchSpecialization(fac_id);
            getPrefTime(fac_id, acad_year, sem);
            getPrefSubj(fac_id, acad_year, sem);
            loadtable(fac_id, acad_year, sem);
        }   
    });

    //SEMESTER LIST ON CHANGE
    $('#selected_sem').on('change', function(e){

        e.preventDefault();
        var sem = $('#selected_sem').val();
        var acad_year = $('#acad_year').val();
        if(acad_year != global_acadyr)
        {
            disableButtons();
        }
        else
        {
            enableButtons();
        }
        var data = "<?php echo $acc_type?>"; 
        if(data == 'admin'){
            var fac_id = $('#fac_list').val();
            matchSpecialization(fac_id);
        }
        else{
            var fac_id = "<?php echo $fac_id?>";
        }

        if(fac_id != 0){
            matchSpecialization(fac_id);
            getPrefTime(fac_id, acad_year, sem);
            getPrefSubj(fac_id, acad_year, sem);
            loadtable(fac_id, acad_year, sem);
        }
    });

    //ACAD YEAR LIST ON CHANGE
    $('#acad_year').on('change', function(e){

        e.preventDefault();
        var sem = $('#selected_sem').val();
        var acad_year = $('#acad_year').val();
        if(acad_year != global_acadyr)
        {
            disableButtons();
        }
        else
        {
            enableButtons();
        }
        
        var data = "<?php echo $acc_type?>"; 
        if(data == 'admin'){
            var fac_id = $('#fac_list').val();
            matchSpecialization(fac_id);
        }
        else{
            var fac_id = "<?php echo $fac_id?>";
        }

        if(fac_id != 0){
            matchSpecialization(fac_id);
            getPrefTime(fac_id, acad_year, sem);
            getPrefSubj(fac_id, acad_year, sem);
            loadtable(fac_id, acad_year, sem);
        }
    });
        
        
$(document).ready(function(){

    $('#modalDisclaimer').modal('show');
    hide_dropdown();

});

$('#btnCloseDisclaimer').on('click', function(){

    $('#modalDisclaimer').modal('hide');

});

$(document).ready(function(){
    // TRANSFERRING PREFERRED TIME. NOTE: Experimental
    if (global_month == '06' || global_month == '07' || global_month == '08' || global_month == '09' || global_month == '10')
    {
        global_sem = '2nd';
    }
    else
    {
        global_sem = '1st';
    }

    var next_year = parseInt(global_year) + 1;
    $("input[name = 'set_time']").attr('disabled', 'disabled');

    global_acadyr = global_year + '\u2010' + next_year;
    $('#selected_sem option[value='+global_sem+']').attr('selected','selected');
    $('#acad_year option[value='+global_acadyr+']').attr('selected','selected');

    var acad_year = $('#acad_year').val();
        if(acad_year != global_acadyr)
        {
            disableButtons();
        }
        else
        {
            enableButtons();
        }

    $('#btnOtherMon').on('click',function()
    {
        var data = "<?php echo $acc_type?>";
        if(data == 'admin')
        {
            var fac_id = $('#fac_list').val();
        }
        else
        {
            var fac_id = "<?php echo $fac_id?>";
        }

        var start = $('#strtMon').val();
        var end = $('#endMon').val();
        var day = 'Monday';
        var sem = $('#selected_sem').val();
        var acad_year = $('#acad_year').val();

        var value = checkTimeValidity(start, end);

        if(value == 'invalid'){
            alert('Please enter a valid start and end time');
        }
        else{
            addMoreTime(day, start, end);
            loadtable(fac_id, acad_year, sem);
            $('#strtMon').val("");
            $('#endMon').val("");
        }
        
    });

    $('#btnOtherTue').on('click',function()
    {
        var data = "<?php echo $acc_type?>";
        if(data == 'admin')
        {
            var fac_id = $('#fac_list').val();
        }
        else
        {
            var fac_id = "<?php echo $fac_id?>";
        }

        var start = $('#strTue').val();
        var end = $('#endTue').val();
        var day = 'Tuesday';
        var sem = $('#selected_sem').val();
        var acad_year = $('#acad_year').val();

        var value = checkTimeValidity(start, end);

        if(value == 'invalid'){
            alert('Please enter a valid start and end time');
        }
        else{
            addMoreTime(day, start, end);
            loadtable(fac_id, acad_year, sem);
            $('#strTue').val("");
            $('#endTue').val("");
        }
        
    });

    $('#btnOtherWed').on('click',function()
    {
        var data = "<?php echo $acc_type?>";
        if(data == 'admin')
        {
            var fac_id = $('#fac_list').val();
        }
        else
        {
            var fac_id = "<?php echo $fac_id?>";
        }

        var start = $('#strWed').val();
        var end = $('#endWed').val();
        var day = 'Wednesday';
        var sem = $('#selected_sem').val();
        var acad_year = $('#acad_year').val();

        var value = checkTimeValidity(start, end);
        

        if(value == 'invalid'){
            alert('Please enter a valid start and end time');
        }
        else{
            addMoreTime(day, start, end);
            loadtable(fac_id, acad_year, sem);
            $('#strWed').val("");
            $('#endWed').val("");
        }
        
    });

    $('#btnOtherThr').on('click',function()
    {
        var data = "<?php echo $acc_type?>";
        if(data == 'admin')
        {
            var fac_id = $('#fac_list').val();
        }
        else
        {
            var fac_id = "<?php echo $fac_id?>";
        }

        var start = $('#strThr').val();
        var end = $('#endThr').val();
        var day = 'Thursday';
        var sem = $('#selected_sem').val();
        var acad_year = $('#acad_year').val();

        var value = checkTimeValidity(start, end);


        if(value == 'invalid'){
            alert('Please enter a valid start and end time');
        }
        else{
            addMoreTime(day, start, end);
            loadtable(fac_id, acad_year, sem);
            $('#strThr').val("");
            $('#endThr').val("");
        }
        
    });

    $('#btnOtherFri').on('click',function()
    {
        var data = "<?php echo $acc_type?>";
        if(data == 'admin')
        {
            var fac_id = $('#fac_list').val();
        }
        else
        {
            var fac_id = "<?php echo $fac_id?>";
        }

        var start = $('#strFri').val();
        var end = $('#endFri').val();
        var day = 'Friday';
        var sem = $('#selected_sem').val();
        var acad_year = $('#acad_year').val();
        var value = checkTimeValidity(start, end);

        if(value == 'invalid'){
            alert('Please enter a valid start and end time');
        }
        else{
            addMoreTime(day, start, end);
            loadtable(fac_id, acad_year, sem);
            $('#strFri').val("");
            $('#endFri').val("");
        }
        
    });

    $('#btnOtherSat').on('click',function()
    {
        var data = "<?php echo $acc_type?>";
        if(data == 'admin')
        {
            var fac_id = $('#fac_list').val();
        }
        else
        {
            var fac_id = "<?php echo $fac_id?>";
        }

        var start = $('#strSat').val();
        var end = $('#endSat').val();
        var day = 'Saturday';
        var sem = $('#selected_sem').val();
        var acad_year = $('#acad_year').val();

        var value = checkTimeValidity(start, end);

        if(value == 'invalid'){
            alert('Please enter a valid start and end time');
        }
        else{
            addMoreTime(day, start, end);
            loadtable(fac_id, acad_year, sem);
            $('#strSat').val("");
            $('#endSat').val("");
        }
        
    });


    $("input[name = 'set_time']").on('change',function(){

        var data = "<?php echo $acc_type?>"; 
        if(data == 'admin'){
            var fac_id = $('#fac_list').val();
        }
        else{
            var fac_id = "<?php echo $fac_id?>";
        }

        var val = $(this).attr('value');
        var sem = $('#selected_sem').val();
        var acad_year = $('#acad_year').val();
        var start = '';
        var end = '';
        var day = '';

        if(fac_id == 0 || sem == 0 || acad_year == 0){
            swal('Warning', 'Complete parameters first!', 'warning');
            $(this).prop("checked", false);
        }
        else{
            if($(this).prop("checked")){

            switch(val){
                case 'mon_mor': 
                    start = '07:30';
                    end = '12:00';
                    day = 'Monday';
                    break;

                case 'mon_aft': 
                    start = '12:00';
                    end = '18:00';
                    day = 'Monday';
                    break;

                case 'mon_eve': 
                    start = '18:00';
                    end = '21:00';
                    day = 'Monday';
                    break;

                case 'tue_mor': 
                    start = '07:30';
                    end = '12:00';
                    day = 'Tuesday';
                    break;

                case 'tue_aft': 
                    start = '12:00';
                    end = '18:00';
                    day = 'Tuesday';
                    break;

                case 'tue_eve': 
                    start = '18:00';
                    end = '21:00';
                    day = 'Tuesday';
                    break;

                case 'wed_mor': 
                    start = '07:30';
                    end = '12:00';
                    day = 'Wednesday';
                    break;

                case 'wed_aft': 
                    start = '12:00';
                    end = '18:00';
                    day = 'Wednesday';
                    break;

                case 'wed_eve': 
                    start = '18:00';
                    end = '21:00';
                    day = 'Wednesday';
                    break;

                case 'thr_mor': 
                    start = '07:30';
                    end = '12:00';
                    day = 'Thursday';
                    break;

                case 'thr_aft': 
                    start = '12:00';
                    end = '18:00';
                    day = 'Thursday';
                    break;

                case 'thr_eve': 
                    start = '18:00';
                    end = '21:00';
                    day = 'Thursday';
                    break;

                case 'fri_mor': 
                    start = '07:30';
                    end = '12:00';
                    day = 'Friday';
                    break;

                case 'fri_aft': 
                    start = '12:00';
                    end = '18:00';
                    day = 'Friday';
                    break;

                case 'fri_eve': 
                    start = '18:00';
                    end = '21:00';
                    day = 'Friday';
                    break;

                case 'sat_mor': 
                    start = '07:30';
                    end = '12:00';
                    day = 'Saturday';
                    break;

                case 'sat_aft': 
                    start = '12:00';
                    end = '18:00';
                    day = 'Saturday';
                    break;

                default: 
                    start = '18:00';
                    end = '21:00';
                    day = 'Saturday';
            }

            // alert(acad_year + " " + sem);

            event.preventDefault();  
            $.ajax({  
            url:"<?php echo base_url('Transaction/add_pref_time')?>",  
            method:"POST",  
            data:{fac_id:fac_id, day:day, start:start, end:end, acad_year:acad_year, sem:sem},

                success:function(data)
                {  
                    if (fac_id == 0){

                        alert('Select a faculty member first.');
                        $("input[name = 'set_time']").prop('checked', false);
                    }

                    else{
                        swal("Success!", day + " " + start + " - " + end + " is added.");
                        loadtable(fac_id, acad_year, sem);
                    }
                }, 

                error: function(data)
                 {
                       alerts('An error occured. Please reload the page and try again.');
                 }
            }); 
        }

        else{


            switch(val){
                case 'mon_mor': 
                    start = '07:30';
                    end = '12:00';
                    day = 'Monday';
                    break;

                case 'mon_aft': 
                    start = '12:00';
                    end = '18:00';
                    day = 'Monday';
                    break;

                case 'mon_eve': 
                    start = '18:00';
                    end = '21:00';
                    day = 'Monday';
                    break;

                case 'tue_mor': 
                    start = '07:30';
                    end = '12:00';
                    day = 'Tuesday';
                    break;

                case 'tue_aft': 
                    start = '12:00';
                    end = '18:00';
                    day = 'Tuesday';
                    break;

                case 'tue_eve': 
                    start = '18:00';
                    end = '21:00';
                    day = 'Tuesday';
                    break;

                case 'wed_mor': 
                    start = '07:30';
                    end = '12:00';
                    day = 'Wednesday';
                    break;

                case 'wed_aft': 
                    start = '12:00';
                    end = '18:00';
                    day = 'Wednesday';
                    break;

                case 'wed_eve': 
                    start = '18:00';
                    end = '21:00';
                    day = 'Wednesday';
                    break;

                case 'thr_mor': 
                    start = '07:30';
                    end = '12:00';
                    day = 'Thursday';
                    break;

                case 'thr_aft': 
                    start = '12:00';
                    end = '18:00';
                    day = 'Thursday';
                    break;

                case 'thr_eve': 
                    start = '18:00';
                    end = '21:00';
                    day = 'Thursday';
                    break;

                case 'fri_mor': 
                    start = '07:30';
                    end = '12:00';
                    day = 'Friday';
                    break;

                case 'fri_aft': 
                    start = '12:00';
                    end = '18:00';
                    day = 'Friday';
                    break;

                case 'fri_eve': 
                    start = '18:00';
                    end = '21:00';
                    day = 'Friday';
                    break;

                case 'sat_mor': 
                    start = '07:30';
                    end = '12:00';
                    day = 'Saturday';
                    break;

                case 'sat_aft': 
                    start = '12:00';
                    end = '18:00';
                    day = 'Saturday';
                    break;

                default: 
                    start = '18:00';
                    end = '21:00';
                    day = 'Saturday';
            }

            event.preventDefault();  
            $.ajax({  
            url:"<?php echo base_url('Transaction/delete_pref_time')?>", 
            method:"POST",  
            data:{fac_id:fac_id, day:day, start:start, end:end, acad_year:acad_year, sem:sem},

                success:function(data)
                {  
                    swal("Success!", day + " " + start + " - " + end + " is removed.");
                    loadtable(fac_id, acad_year, sem);
                }, 

                error: function(data)
                 {
                       alerts('An error occured. Please reload the page and try again.');
                 }
            }); 
            
        }
        }

    });
});

 //INPUTTING OF SUBJECT PREFERENCES

    $("input[name = 'chk_subj']").on('change', function(){

        var subj_code = $(this).attr('value');
        var sem = $('#selected_sem').val();
        var acad_year = $('#acad_year').val();
        var data = "<?php echo $acc_type?>"; 
        if(data == 'admin'){
            var fac_id = $('#fac_list').val();
        }
        else{
            var fac_id = "<?php echo $fac_id?>";
        }


         if($(this).prop("checked")){

            if(fac_id == 0 || sem == 0 || acad_year == 0)
            {
                swal('Warning','Complete parameters first!','warning');
                $(this).prop("checked", false);
            }

           else{
            var is_matched = checkSubjectSpecialization(subj_code);
           }
           if (is_matched == true)
           {
             event.preventDefault();  
                $.ajax({  
                url:"<?php echo base_url('Transaction/add_pref_subj')?>",   
                method:"POST",  
                data:{fac_id:fac_id, subj_code:subj_code, sem:sem, acad_year:acad_year},

                    success:function(data)
                    {  
                        swal("Success!", "Subject is added.");
                    }, 

                    error: function(data)
                     {
                           alerts('An error occured. Please reload the page and try again.');
                     }
                }); 
               }
               else
               {
                    $(this).prop("checked", false);
               }
            
         }

         else{

            event.preventDefault();  
            $.ajax({  
            url:"<?php echo base_url('Transaction/delete_pref_subj')?>", 
            method:"POST",  
            data:{fac_id:fac_id, subj_code:subj_code, acad_year:acad_year, sem:sem},

                success:function(data)
                {  
                    swal("Success!", "Subject is removed.");
                }, 

                error: function(data)
                 {
                       alerts('An error occured. Please reload the page and try again.');
                 }
            }); 

         }

    });

    $(document).on('click', '#remove_pref', function(e){  

        var sem = $('#selected_sem').val();
        var acad_year = $('#acad_year').val();
        var id = $(this).data("id");
        var data = "<?php echo $acc_type?>"; 
        if(data == 'admin'){
            var fac_id = $('#fac_list').val();
        }
        else{
            var fac_id = "<?php echo $fac_id?>";
        }

              swal({
                        title: "Unselect time preference?",
                        // text: "from your time preferences?", 
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
              })
                .then((willApprove) => {
                  if (willApprove) {
                    $.ajax({   
                      url:"<?php echo base_url('Transaction/delete_pref_time_id')?>",  
                      method: "POST",
                      data:{id},
                      success: function (data) 
                      {
                         if(data == 'DELETED'){
                            loadtable(fac_id, acad_year, sem);
                            getPrefTime(fac_id, acad_year, sem);
                            swal("Success!", "Time preference unselected.", "success");   
                         }

                         else{

                            swal("Not Deleted!", "Failed to unselect time.", "error");
                            alert(JSON.stringify(data));
                         } 
                      },
                      error: function (data) {
                        swal("Not Deleted!", "Failed to remove subject.", "error");
                        alert(JSON.stringify(data));
                      }
                    });
                  } 

                  else {
                    swal("Cancelled", "You have chosen to cancel", "info");
                  }
                });
        });


    </script>
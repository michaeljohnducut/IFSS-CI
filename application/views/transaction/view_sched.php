<div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                         <h4 class="page-title">View Schedules</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="#">Admin</a></li>
                            <!-- <li><a href="#">Schedules</a></li> -->
                            <li class="active">View Schedules</li>
                        </ol>
                    </div>
                
                </div>

            <div class="row">      
                <div class="col-sm-12">
                    <div class="white-box">
                        <br>
                        
                        <div class="row">
                            <div class="col-md-9">
                                <h2 style="margin-top: 30px;">Search for a schedule</h2>
                            </div>
                            <div class="col-md-3" id="view_div">
                                <label class="control-label">View Schedules by:</label>
                                <select class="form-control " id="change_view">
                                  <option selected="" value="1">Faculty</option>
                                  <option value="2">Sections</option>
                                  <option value="3">Rooms/Labs</option>
                                </select>
                                <br><br>
                            </div>
                            <div  class="col-md-12" style="background-color: gray; height: 3px; margin-top: -5px;">

                            </div>
                            <br>
                        </div>
                        <div class="row" id="div_by_faculty_a">
                            <div class="col-md-2">
                                <label class="control-label">Select A.Y.</label>
                                <select class="form-control " id="sched_acad_year">
                                    <option value="0" disabled selected>-ACAD YEAR-</option>
                                    <?php 
                                        for ($i = date("Y"); $i > 1900; $i-- ){
                                            echo '<option value ="' .$i. '&#x2010;'. ($i+1).'">' .$i. '&#x2010;'. ($i+1) .  '</option>'; 
                                        }
                                    ?>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <label class="control-label">Semester</label>
                                <select class="form-control" id="sched_sem">
                                    <option value="0" disabled selected>-SELECT SEM-</option>
                                    <option value="1st">1st</option>
                                    <option value="2nd">2nd</option> 
                                    <option value="summer">Summer</option> 
                                </select>   
                            </div>
                            <div class="col-md-3" id="for_hiding">
                                <label class="control-label">Select Faculty:</label>
                                <select class="form-control " id="sched_faculty">
                                    <option value="0" disabled selected>-SELECT FACULTY-</option>
                                    <?php foreach($faculty as $r) echo '<option value="'.$r[7].'">'.$r[1].', '.$r[2].' '.$r[3].'</option>';?>
                                </select>
                            </div>
                            <div class="col-md-5">
                                <div class="col-md-4" style="margin-top: 28px;" id="edit_at_div">
                                    <button type="button" class="btn legend-orange" id="btnUpdateAT">Update Advising Time</button>
                                    <div class="col-md-12" style="margin-top: 5px;" id="at_details">
                                        <div class="col-md-9">
                                            <label class="control-label">Hours Count</label>
                                            <input type="number" id="txt_at" readonly="" class="form-control" >
                                        </div>
                                        <div class="col-md-3">
                                            <button style="margin-top: 25px;" type="button" id="save_at" class="btn legend-orange"><span class="fa fa-check"></span></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4" style="margin-top: 28px;" id="edit_oh_div">
                                    <button type="button" class="btn legend-red" id="btnUpdateOH">Update Office Hours</button>
                                    <div class="col-md-12" style="margin-top: 5px;" id="oh_details">
                                        <div class="col-md-9">
                                            <label class="control-label">Hours Count</label>
                                            <input type="number" id="txt_oh" readonly="" class="form-control" >
                                        </div>
                                        <div class="col-md-3">
                                            <button style="margin-top: 25px;" type="button" id="save_oh" class="btn legend-red"><span class="fa fa-check"></span></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4" style="margin-top: 28px;" id="edit_no_div">
                                    <button type="button" class="btn legend-darkBlue" id="btnUpdateNO">Update Night Office</button>
                                    <div class="col-md-12" style="margin-top: 5px;" id="no_details">
                                        <div class="col-md-9">
                                            <label class="control-label">Hours Count</label>
                                            <input type="number" id="txt_no" readonly="" class="form-control" >
                                        </div>
                                        <div class="col-md-3">
                                            <button style="margin-top: 25px;" id="save_no" type="button" class="btn legend-darkBlue"><span class="fa fa-check"></span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row" id="div_by_section">
                            <div class="col-md-2">
                                <label class="control-label">Select A.Y.</label>
                                <select class="form-control" id="sec_acadyr">
                                    <option value="0">-ACAD YEAR-</option>
                                    <?php 
                                        for ($i = date("Y"); $i > 1900; $i-- ){
                                            echo '<option value ="' .$i. '&#x2010;'. ($i+1).'">' .$i. '&#x2010;'. ($i+1) .  '</option>'; 
                                        }
                                    ?>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <label class="control-label">Semester</label>
                                <select class="form-control" id="sec_sem">
                                    <option value="0">-SEM-</option>
                                    <option value="1st">1st</option>
                                    <option value="2nd">2nd</option> 
                                    <option value="summer">Summer</option> 
                                </select>   
                            </div>
                            <div class="col-md-3">
                                <label class="control-label">Select Course:</label>
                                <select class="form-control" id="sec_course">
                                    <option value="0">-COURSE-</option>
                                    <?php foreach($courses as $r) echo '<option value="'.$r[4].'">'.$r[1].'</option>';?>
                                    </select>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <label class="control-label">Select Year and Section</label>
                                <select class="form-control" id="sec_yearsec">
                                    <option value="0">-YEAR AND SECTION-</option>
                                </select>    
                            </div>
                        </div>

                        <div class="row" id="div_by_room" >
                            <div class="col-md-2">
                                <label class="control-label">Select A.Y.</label>
                                <select class="form-control" id="room_acad_year">
                                    <option value="0">-ACAD YEAR-</option>
                                    <?php 
                                        for ($i = date("Y"); $i > 1900; $i-- ){
                                            echo '<option value ="' .$i. '&#x2010;'. ($i+1).'">' .$i. '&#x2010;'. ($i+1) .  '</option>'; 
                                        }
                                    ?>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <label class="control-label">Semester</label>
                                <select class="form-control" id="room_sem">
                                    <option value="0">-SEM-</option>
                                    <option value="1st">1st</option>
                                    <option value="2nd">2nd</option> 
                                    <option value="summer">Summer</option> 
                                </select>   
                            </div>
                            <div class="col-md-3">
                                <label class="control-label">Select Room:</label>
                                <select class="form-control" id="room_labs">
                                    <option value="0">-ROOMS/LABS-</option>
                                    <?php foreach($rooms as $r) echo '<option value="'.$r[4].'">'.$r[0].'</option>';?>
                                </select>
                            </div>
                        </div>



                         <br><br><br>
                        <div  class="col-md-12" style="background-color: gray; height: 3px; margin-top: -5px;">

                        </div>
                        <br>
                        <div class="row" id="legend_div">
                            <div class="col-md-2" id="reg_box">
                                <div class="white-box text-center legend-green">
                                    <h4 class="text-white">Regular Load</h4>
                                    <!-- <p class="text-white">Curriculum year used</p> -->
                                </div>
                            </div>
                            <div class="col-md-2" id="pt_box">
                                <div class="white-box text-center legend-blue">
                                    <h4 class="text-white">Part-time Load</h4>
                                    <!-- <p class="text-white">Curriculum year used</p> -->
                                </div>
                            </div>
                            <div class="col-md-2" id="ts_box">
                                <div class="white-box text-center legend-purple">
                                    <h4 class="text-white">Temp. Sub.</h4>
                                    <!-- <p class="text-white">Curriculum year used</p> -->
                                </div>
                            </div>
                            <div class="col-md-2" id="at_box">
                                <div class="white-box text-center legend-orange">
                                    <h4 class="text-white">Advising Time</h4>
                                    <!-- <p class="text-white">Curriculum year used</p> -->
                                </div>
                            </div>
                            <div class="col-md-2" id="oh_box">
                                <div class="white-box text-center legend-red">
                                    <h4 class="text-white">Office Hours</h4>
                                    <!-- <p class="text-white">Curriculum year used</p> -->
                                </div>
                            </div>
                            <div class="col-md-2" id="no_box">
                                <div class="white-box text-center legend-darkBlue">
                                    <h4 class="text-white">Night Office</h4>
                                    <!-- <p class="text-white">Curriculum year used</p> -->
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <table id="new_sched" width='100%' cellspacing='0' cellpadding='0' style='border:1px #000000 solid;background:#FFFFFF;'>
<tr>
    <th width='12.5%' style='padding: 10px;border:1px lightgray  solid;background:#636e72; color: white; font-family:tahoma;font-size:11px;'>&nbsp;</th>
    <th width='12.5%' style='padding: 10px;border:1px lightgray  solid;background:#636e72; color: white; font-family:tahoma;font-size:11px;'>Monday</th>
    <th width='12.5%' style='padding: 10px;border:1px lightgray  solid;background:#636e72; color: white; font-family:tahoma;font-size:11px;'>Tuesday</th>
    <th width='12.5%' style='padding: 10px;border:1px lightgray  solid;background:#636e72; color: white; font-family:tahoma;font-size:11px;'>Wednesday</th>
    <th width='12.5%' style='padding: 10px;border:1px lightgray  solid;background:#636e72; color: white; font-family:tahoma;font-size:11px;'>Thursday</th>
    <th width='12.5%' style='padding: 10px;border:1px lightgray  solid;background:#636e72; color: white; font-family:tahoma;font-size:11px;'>Friday</th>
    <th width='12.5%' style='padding: 10px;border:1px lightgray  solid;background:#636e72; color: white; font-family:tahoma;font-size:11px;'>Saturday</th>
    <th width='12.5%' style='padding: 10px;border:1px lightgray  solid;background:#636e72; color: white; font-family:tahoma;font-size:11px;'>Sunday</th>
</tr>

<tr>
  <td rowspan='2' align='center' style='font-size:18px;border:1px lightgray solid;background:#636e72; color: white; font-family:tahoma;'><font style='font-size:9px;'>07:00 AM</font><br>07:30 AM<br><font style='font-size:9px;'>07:59 AM</font></td>
  <td id="07_00_mon_d" width='12.5%' class="schedBorder" rowspan='1' ><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="m70a" value="07:00:00_mon"></button></td>
  <td id="07_00_tue_d" width='12.5%' class="schedBorder" rowspan='1' ><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="t70a" value="07:00:00_tue"></button></td>
  <td id="07_00_wed_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="w70a" value="07:00:00_wed"></button></td>
  <td id="07_00_thu_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="th70a" value="07:00:00_thu"></button></td>
  <td id="07_00_fri_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="f70a" value="07:00:00_fri"></button></td>
  <td id="07_00_sat_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="sa70a" value="07:00:00_sat"></button></td>
  <td id="07_00_sun_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="su70a" value="07:00:00_sun"></button></td>
</tr>

<tr>
    <td id="07_30_mon_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="m73a" value="07:30:00_mon"></button></td>
    <td id="07_30_tue_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="t73a" value="07:30:00_tue"></button></td>
    <td id="07_30_wed_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="w73a" value="07:30:00_wed"></button></td>
    <td id="07_30_thu_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="th73a" value="07:30:00_thu"></button></td>
    <td id="07_30_fri_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="f73a" value="07:30:00_fri"></button></td>
    <td id="07_00_sat_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="sa73a" value="07:30:00_sat"></button></td>
    <td id="07_00_sun_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="su73a" value="07:30:00_sun"></button></td>
</tr>

<tr>
  <td rowspan='2' align='center' style='font-size:18px;border:1px lightgray solid;background:#636e72; color: white; font-family:tahoma;'><font style='font-size:9px;'>08:00 AM</font><br>08:30 AM<br><font style='font-size:9px;'>08:59 AM</font></td>
  <td id="08_00_mon_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="m80a" value="08:00:00_mon"></button></td>
  <td id="08_00_tue_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="t80a" value="08:00:00_tue"></button></td>
  <td id="08_00_wed_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="w80a" value="08:00:00_wed"></button></td>
  <td id="08_00_thu_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="th80a" value="08:00:00_thu"></button></td>
  <td id="08_00_fri_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="f80a" value="08:00:00_fri"></button></td>
  <td id="08_00_sat_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="sa80a" value="08:00:00_sat"></button></td>
  <td id="08_00_sun_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="su80a" value="08:00:00_sun"></button></td>
</tr>

<tr>
    <td id="08_30_mon_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="m83a" value="08:30:00_mon"></button></td>
    <td id="08_30_tue_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="t83a" value="08:30:00_tue"></button></td>
    <td id="08_30_wed_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="w83a" value="08:30:00_wed"></button></td>
    <td id="08_30_thu_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="th83a" value="08:30:00_thu"></button></td>
    <td id="08_30_fri_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="f83a" value="08:30:00_fri"></button></td>
    <td id="08_00_sat_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="sa83a" value="08:30:00_sat"></button></td>
    <td id="08_00_sun_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="su83a" value="08:30:00_sun"></button></td>
</tr>

<tr>
  <td rowspan='2' align='center' style='font-size:18px;border:1px lightgray solid;background:#636e72; color: white; font-family:tahoma;'><font style='font-size:9px;'>09:00 AM</font><br>09:30 AM<br><font style='font-size:9px;'>09:59 AM</font></td>
  <td id="09_00_mon_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="m90a" value="09:00:00_mon"></button></td>
  <td id="09_00_tue_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="t90a" value="09:00:00_tue"></button></td>
  <td id="09_00_wed_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="w90a" value="09:00:00_wed"></button></td>
  <td id="09_00_thu_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="th90a" value="09:00:00_thu"></button></td>
  <td id="09_00_fri_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="f90a" value="09:00:00_fri"></button></td>
  <td id="09_00_sat_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="sa90a" value="09:00:00_sat"></button></td>
  <td id="09_00_sun_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="su90a" value="09:00:00_sun"></button></td>
</tr>

<tr>
    <td id="09_30_mon_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="m93a" value="09:30:00_mon"></button></td>
    <td id="09_30_tue_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="t93a" value="09:30:00_tue"></button></td>
    <td id="09_30_wed_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="w93a" value="09:30:00_wed"></button></td>
    <td id="09_30_thu_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="th93a" value="09:30:00_thu"></button></td>
    <td id="09_30_fri_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="f93a" value="09:30:00_fri"></button></td>
    <td id="09_00_sat_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="sa93a" value="09:30:00_sat"></button></td>
    <td id="09_00_sun_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="su93a" value="09:30:00_sun"></button></td>
</tr>

<tr>
  <td rowspan='2' align='center' style='font-size:18px;border:1px lightgray solid;background:#636e72; color: white; font-family:tahoma;'><font style='font-size:9px;'>10:00 AM</font><br>10:30 AM<br><font style='font-size:9px;'>10:59 AM</font></td>
  <td id="10_00_mon_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="m100a" value="10:00:00_mon"></button></td>
  <td id="10_00_tue_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="t100a" value="10:00:00_tue"></button></td>
  <td id="10_00_wed_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="w100a" value="10:00:00_wed"></button></td>
  <td id="10_00_thu_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="th100a" value="10:00:00_thu"></button></td>
  <td id="10_00_fri_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="f100a" value="10:00:00_fri"></button></td>
  <td id="10_00_sat_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="sa100a" value="10:00:00_sat"></button></td>
  <td id="10_00_sun_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="su100a" value="10:00:00_sun"></button></td>
</tr>

<tr>
    <td id="10_30_mon_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="m103a" value="10:30:00_mon"></button></td>
    <td id="10_30_tue_d"  width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="t103a" value="10:30:00_tue"></button></td>
    <td id="10_30_wed_d"  width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="w103a" value="10:30:00_wed"></button></td>
    <td id="10_30_thu_d"  width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="th103a" value="10:30:00_thu"></button></td>
    <td id="10_30_fri_d"  width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="f103a" value="10:30:00_fri"></button></td>
    <td id="10_00_sat_d"  width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="sa103a" value="10:30:00_sat"></button></td>
    <td id="10_00_sun_d"  width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="su103a" value="10:30:00_sun"></button></td>
</tr>

<tr>
  <td rowspan='2' align='center' style='font-size:18px;border:1px lightgray solid;background:#636e72; color: white; font-family:tahoma;'><font style='font-size:9px;'>11:00 AM</font><br>11:30 AM<br><font style='font-size:9px;'>11:59 AM</font></td>
  <td id="11_00_mon_d"  width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="m110a" value="11:00:00_mon"></button></td>
  <td id="11_00_tue_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="t110a" value="11:00:00_tue"></button></td>
  <td id="11_00_wed_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="w110a" value="11:00:00_wed"></button></td>
  <td id="11_00_thu_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="th110a" value="11:00:00_thu"></button></td>
  <td id="11_00_fri_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="f110a" value="11:00:00_fri"></button></td>
  <td id="11_00_sat_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="sa110a" value="11:00:00_sat"></button></td>
  <td id="11_00_sun_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="su110a" value="11:00:00_sun"></button></td>
</tr>

<tr>
    <td id="11_30_mon_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="m113a" value="11:30:00_mon"></button></td>
    <td id="11_30_tue_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="t113a" value="11:30:00_tue"></button></td>
    <td id="11_30_wed_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="w113a" value="11:30:00_wed"></button></td>
    <td id="11_30_thu_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="th113a" value="11:30:00_thu"></button></td>
    <td id="11_30_fri_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="f113a" value="11:30:00_fri"></button></td>
    <td id="11_00_sat_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="sa113a" value="11:30:00_sat"></button></td>
    <td id="11_00_sun_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="su113a" value="11:30:00_sun"></button></td>
</tr>

<tr>
  <td rowspan='2' align='center' style='font-size:18px;border:1px lightgray solid;background:#636e72; color: white; font-family:tahoma;'><font style='font-size:9px;'>12:00 PM</font><br>12:30 PM<br><font style='font-size:9px;'>12:59 PM</font></td>
  <td id="12_00_mon_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="m120p" value="12:00:00_mon"></button></td>
  <td id="12_00_tue_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="t120p" value="12:00:00_tue"></button></td>
  <td id="12_00_wed_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="w120p" value="12:00:00_wed"></button></td>
  <td id="12_00_thu_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="th120p" value="12:00:00_thu"></button></td>
  <td id="12_00_fri_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="f120p" value="12:00:00_fri"></button></td>
  <td id="12_00_sat_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="sa120p" value="12:00:00_sat"></button></td>
  <td id="12_00_sun_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="su120p" value="12:00:00_sun"></button></td>
</tr>

<tr>
    <td id="12_30_mon_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="m123p" value="12:30:00_mon"></button></td>
    <td id="12_30_tue_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="t123p" value="12:30:00_tue"></button></td>
    <td id="12_30_wed_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="w123p" value="12:30:00_wed"></button></td>
    <td id="12_30_thu_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="th123p" value="12:30:00_thu"></button></td>
    <td id="12_30_fri_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="f123p" value="12:30:00_fri"></button></td>
    <td id="12_00_sat_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="sa123p" value="12:30:00_sat"></button></td>
    <td id="12_00_sun_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="su123p" value="12:30:00_sun"></button></td>
</tr>

<tr>
  <td rowspan='2' align='center' style='font-size:18px;border:1px lightgray solid;background:#636e72; color: white; font-family:tahoma;'><font style='font-size:9px;'>01:00 PM</font><br>01:30 PM<br><font style='font-size:9px;'>01:59 PM</font></td>
  <td id="13_00_mon_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="m10p" value="13:00:00_mon"></button></td>
  <td id="13_00_tue_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="t10p" value="13:00:00_tue"></button></td>
  <td id="13_00_wed_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="w10p" value="13:00:00_wed"></button></td>
  <td id="13_00_thu_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="th10p" value="13:00:00_thu"></button></td>
  <td id="13_00_fri_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="f10p" value="13:00:00_fri"></button></td>
  <td id="13_00_sat_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="sa10p" value="13:00:00_sat"></button></td>
  <td id="13_00_sun_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="su10p" value="13:00:00_sun"></button></td>
</tr>

<tr>
    <td id="13_30_mon_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="m13p" value="13:30:00_mon"></button></td>
    <td id="13_30_tue_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="t13p" value="13:30:00_tue"></button></td>
    <td id="13_30_wed_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="w13p" value="13:30:00_wed"></button></td>
    <td id="13_30_thu_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="th13p" value="13:30:00_thu"></button></td>
    <td id="13_30_fri_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="f13p" value="13:30:00_fri"></button></td>
    <td id="13_00_sat_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="sa13p" value="13:30:00_sat"></button></td>
    <td id="13_00_sun_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="su13p" value="13:30:00_sun"></button></td>
</tr>

<tr>
  <td rowspan='2' align='center' style='font-size:18px;border:1px lightgray solid;background:#636e72; color: white; font-family:tahoma;'><font style='font-size:9px;'>02:00 PM</font><br>02:30 PM<br><font style='font-size:9px;'>02:59 PM</font></td>
  <td id="14_00_mon_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="m20p" value="14:00:00_mon"></button></td>
  <td id="14_00_tue_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="t20p" value="14:00:00_tue"></button></td>
  <td id="14_00_wed_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="w20p" value="14:00:00_wed"></button></td>
  <td id="14_00_thu_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="th20p" value="14:00:00_thu"></button></td>
  <td id="14_00_fri_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="f20p" value="14:00:00_fri"></button></td>
  <td id="14_00_sat_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="sa20p" value="14:00:00_sat"></button></td>
  <td id="14_00_sun_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="su20p" value="14:00:00_sun"></button></td>
</tr>

<tr>
    <td id="14_30_mon_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="m23p" value="14:30:00_mon"></button></td>
    <td id="14_30_tue_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="t23p" value="14:30:00_tue"></button></td>
    <td id="14_30_wed_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="w23p" value="14:30:00_wed"></button></td>
    <td id="14_30_thu_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="th23p" value="14:30:00_thu"></button></td>
    <td id="14_30_fri_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="f23p" value="14:30:00_fri"></button></td>
    <td id="14_00_sat_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="sa23p" value="14:30:00_sat"></button></td>
    <td id="14_00_sun_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="su23p" value="14:30:00_sun"></button></td>
</tr>

<tr>
  <td rowspan='2' align='center' style='font-size:18px;border:1px lightgray solid;background:#636e72; color: white; font-family:tahoma;'><font style='font-size:9px;'>03:00 PM</font><br>03:30 PM<br><font style='font-size:9px;'>03:59 PM</font></td>
  <td id="15_00_mon_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="m30p" value="15:00:00_mon"></button></td>
  <td id="15_00_tue_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="t30p" value="15:00:00_tue"></button></td>
  <td id="15_00_wed_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="w30p" value="15:00:00_wed"></button></td>
  <td id="15_00_thu_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="th30p" value="15:00:00_thu"></button></td>
  <td id="15_00_fri_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="f30p" value="15:00:00_fri"></button></td>
  <td id="15_00_sat_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="sa30p" value="15:00:00_sat"></button></td>
  <td id="15_00_sun_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="su30p" value="15:00:00_sun"></button></td>
</tr>

<tr>
    <td id="15_30_mon_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="m33p" value="15:30:00_mon"></button></td>
    <td id="15_30_tue_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="t33p" value="15:30:00_tue"></button></td>
    <td id="15_30_wed_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="w33p" value="15:30:00_wed"></button></td>
    <td id="15_30_thu_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="th33p" value="15:30:00_thu"></button></td>
    <td id="15_30_fri_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="f33p" value="15:30:00_fri"></button></td>
    <td id="15_00_sat_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="sa33p" value="15:30:00_sat"></button></td>
    <td id="15_00_sun_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="su33p" value="15:30:00_sun"></button></td>
</tr>

<tr>
  <td rowspan='2' align='center' style='font-size:18px;border:1px lightgray solid;background:#636e72; color: white; font-family:tahoma;'><font style='font-size:9px;'>04:00 PM</font><br>04:30 PM<br><font style='font-size:9px;'>04:59 PM</font></td>
  <td id="16_00_mon_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="m40p" value="16:00:00_mon"></button></td>
  <td id="16_00_tue_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="t40p" value="16:00:00_tue"></button></td>
  <td id="16_00_wed_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="w40p" value="16:00:00_wed"></button></td>
  <td id="16_00_thu_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="th40p" value="16:00:00_thu"></button></td>
  <td id="16_00_fri_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="f40p" value="16:00:00_fri"></button></td>
  <td id="16_00_sat_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="sa40p" value="16:00:00_sat"></button></td>
  <td id="16_00_sun_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="su40p" value="16:00:00_sun"></button></td>
</tr>

<tr>
    <td id="16_30_mon_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="m43p" value="16:30:00_mon"></button></td>
    <td id="16_30_tue_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="t43p" value="16:30:00_tue"></button></td>
    <td id="16_30_wed_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="w43p" value="16:30:00_wed"></button></td>
    <td id="16_30_thu_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="th43p" value="16:30:00_thu"></button></td>
    <td id="16_30_fri_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="f43p" value="16:30:00_fri"></button></td>
    <td id="16_00_sat_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="sa43p" value="16:30:00_sat"></button></td>
    <td id="16_00_sun_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="su43p" value="16:30:00_sun"></button></td>
</tr>

<tr>
  <td rowspan='2' align='center' style='font-size:18px;border:1px lightgray solid;background:#636e72; color: white; font-family:tahoma;'><font style='font-size:9px;'>05:00 PM</font><br>05:30 PM<br><font style='font-size:9px;'>05:59 PM</font></td>
  <td id="17_00_mon_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="m50p" value="17:00:00_mon"></button></td>
  <td id="17_00_tue_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="t50p" value="17:00:00_tue"></button></td>
  <td id="17_00_wed_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="w50p" value="17:00:00_wed"></button></td>
  <td id="17_00_thu_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="th50p" value="17:00:00_thu"></button></td>
  <td id="17_00_fri_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="f50p" value="17:00:00_fri"></button></td>
  <td id="17_00_sat_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="sa50p" value="17:00:00_sat"></button></td>
  <td id="17_00_sun_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="su50p" value="17:00:00_sun"></button></td>
</tr>

<tr>
    <td id="17_30_mon_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="m53p" value="17:30:00_mon"></button></td>
    <td id="17_30_tue_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="t53p" value="17:30:00_tue"></button></td>
    <td id="17_30_wed_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="w53p" value="17:30:00_wed"></button></td>
    <td id="17_30_thu_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="th53p" value="17:30:00_thu"></button></td>
    <td id="17_30_fri_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="f53p" value="17:30:00_fri"></button></td>
    <td id="17_00_sat_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="sa53p" value="17:30:00_sat"></button></td>
    <td id="17_00_sun_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="su53p" value="17:30:00_sun"></button></td>
</tr>

<tr>
  <td rowspan='2' align='center' style='font-size:18px;border:1px lightgray solid;background:#636e72; color: white; font-family:tahoma;'><font style='font-size:9px;'>06:00 PM</font><br>06:30 PM<br><font style='font-size:9px;'>06:59 PM</font></td>
  <td id="18_00_mon_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="m60p" value="18:00:00_mon"></button></td>
  <td id="18_00_tue_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="t60p" value="18:00:00_tue"></button></td>
  <td id="18_00_wed_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="w60p" value="18:00:00_wed"></button></td>
  <td id="18_00_thu_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="th60p" value="18:00:00_thu"></button></td>
  <td id="18_00_fri_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="f60p" value="18:00:00_fri"></button></td>
  <td id="18_00_sat_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="sa60p" value="18:00:00_sat"></button></td>
  <td id="18_00_sun_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="su60p" value="18:00:00_sun"></button></td>
</tr>

<tr>
    <td width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="m63p" value="18:30:00_mon"></button></td>
    <td width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="t63p" value="18:30:00_tue"></button></td>
    <td width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="w63p" value="18:30:00_wed"></button></td>
    <td width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="th63p" value="18:30:00_thu"></button></td>
    <td width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="f63p" value="18:30:00_fri"></button></td>
    <td width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="sa63p" value="18:30:00_sat"></button></td>
    <td width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="su63p" value="18:30:00_sun"></button></td>
</tr>

<tr>
  <td rowspan='2' align='center' style='font-size:18px;border:1px lightgray solid;background:#636e72; color: white; font-family:tahoma;'><font style='font-size:9px;'>07:00 PM</font><br>07:30 PM<br><font style='font-size:9px;'>07:59 PM</font></td>
  <td id="19_00_mon_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="m70p" value="19:00:00_mon"></button></td>
  <td id="19_00_tue_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="t70p" value="19:00:00_tue"></button></td>
  <td id="19_00_wed_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="w70p" value="19:00:00_wed"></button></td>
  <td id="19_00_thu_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="th70p" value="19:00:00_thu"></button></td>
  <td id="19_00_fri_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="f70p" value="19:00:00_fri"></button></td>
  <td id="19_00_sat_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="sa70p" value="19:00:00_sat"></button></td>
  <td id="19_00_sun_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="su70p" value="19:00:00_sun"></button></td>
</tr>

<tr>
    <td id="19_30_mon_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="m73p" value="19:30:00_mon"></button></td>
    <td id="19_30_tue_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="t73p" value="19:30:00_tue"></button></td>
    <td id="19_30_wed_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="w73p" value="19:30:00_wed"></button></td>
    <td id="19_30_thu_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="th73p" value="19:30:00_thu"></button></td>
    <td id="19_30_fri_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="f73p" value="19:30:00_fri"></button></td>
    <td id="19_00_sat_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="sa73p" value="19:30:00_sat"></button></td>
    <td id="19_00_sun_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="su73p" value="19:30:00_sun"></button></td>
</tr>

<tr>
  <td rowspan='2' align='center' style='font-size:18px;border:1px lightgray solid;background:#636e72; color: white; font-family:tahoma;'><font style='font-size:9px;'>08:00 PM</font><br>08:30 PM<br><font style='font-size:9px;'>08:59 PM</font></td>
  <td id="20_00_mon_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="m80p" value="20:00:00_mon"></button></td>
  <td id="20_00_tue_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="t80p" value="20:00:00_tue"></button></td>
  <td id="20_00_wed_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="w80p" value="20:00:00_wed"></button></td>
  <td id="20_00_thu_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="th80p" value="20:00:00_thu"></button></td>
  <td id="20_00_fri_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="f80p" value="20:00:00_fri"></button></td>
  <td id="20_00_sat_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="sa80p" value="20:00:00_sat"></button></td>
  <td id="20_00_sun_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="su80p" value="20:00:00_sun"></button></td>
</tr>

<tr>
    <td id="20_30_mon_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="m83p" value="20:30:00_mon"></button></td>
    <td id="20_30_tue_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="t83p" value="20:30:00_tue"></button></td>
    <td id="20_30_wed_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="w83p" value="20:30:00_wed"></button></td>
    <td id="20_30_thu_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="th83p" value="20:30:00_thu"></button></td>
    <td id="20_30_fri_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="f83p" value="20:30:00_fri"></button></td>
    <td id="20_00_sat_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="sa83p" value="20:30:00_sat"></button></td>
    <td id="20_00_sun_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="su83p" value="20:30:00_sun"></button></td>
</tr>

<tr>
  <td rowspan='2' align='center' style='font-size:18px;border:1px lightgray solid;background:#636e72; color: white; font-family:tahoma;'><font style='font-size:9px;'>09:00 PM</font><br>09:30 PM<br><font style='font-size:9px;'>09:59 PM</font></td>
  <td id="21_00_mon_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="m90p" value="21:00:00_mon"></button></td>
  <td id="21_00_tue_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="t90p" value="21:00:00_tue"></button></td>
  <td id="21_00_wed_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="w90p" value="21:00:00_wed"></button></td>
  <td id="21_00_thu_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="th90p" value="21:00:00_thu"></button></td>
  <td id="21_00_fri_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="f90p" value="21:00:00_fri"></button></td>
  <td id="21_00_sat_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="sa90p" value="21:00:00_sat"></button></td>
  <td id="21_00_sun_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="su90p" value="21:00:00_sun"></button></td>
</tr>

<tr>
    <td id="21_30_mon_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="m93p" value="21:30:00_mon"></button></td>
    <td id="21_30_tue_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="t93p" value="21:30:00_tue"></button></td>
    <td id="21_30_wed_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="w93p" value="21:30:00_wed"></button></td>
    <td id="21_30_thu_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="th93p" value="21:30:00_thu"></button></td>
    <td id="21_30_fri_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="f93p" value="21:30:00_fri"></button></td>
    <td id="21_00_sat_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="sa93p" value="21:30:00_sat"></button></td>
    <td id="21_00_sun_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn plot-regular" style="width:100%; height: 40px;" id="su93p" value="21:30:00_sun"></button></td>
</tr>
    </table>
</div>

                <br>
                <!-- <h3 style="color: red;">Conflict Results:</h3> -->
                        <div class="row">
                            <!-- <div class="col-md-12">
                                <textarea class="form-control" rows="5"></textarea>
                                <br><br><br>
                            </div> -->
                            <input type="hidden" name="hid_room" id="hid_room">
                            <input type="hidden"  name="hid_section" id="hid_section">
                            <input type="hidden"  name="hid_data" id="hid_data">
                        </div>

<div>
    <h2>Summary</h2>
</div>

<div class="table-responsive" id="faculty_table">
    <table id="tbl_sched_sum" class="table colored-table table-bordered inverse-tabl table-striped" style="margin-top: 30px;">
        <thead>
            <tr>
                <th>Subject Code</th>
                <th>Subject Description</th>
                <th>Units</th>
                <th width="150px">Year and Section</th>
                <th width="200px">Time</th>
                <th>Day/s</th>
                <th>Room</th>
            </tr>
        </thead>

         <tbody>

        </tbody>
    </table>

</div>

<div class="table-responsive" id="section_table">
    <table id="tbl_section" class="table colored-table table-bordered inverse-tabl table-striped" style="margin-top: 50px;">
        <thead>
            <tr>
                <th>Subject Code</th>
                <th>Subject Description</th>
                <th>Units</th>
                <th width="150px">Professor</th>
                <th width="200px">Time</th>
                <th>Day/s</th>
                <th>Room</th>
            </tr>
        </thead>

         <tbody>

        </tbody>
    </table>

</div>

<div class="table-responsive" id="room_table">
    <table id="table_room" class="table colored-table table-bordered inverse-tabl table-striped" style="margin-top: 50px;">
        <thead>
            <tr>
                <th>Subject Code</th>
                <th>Subject Description</th>
                <th>Units</th>
                <th width="150px">Course, Year and Section</th>
                <th width="200px">Professor</th>
                <th>Time/s</th>
                <th>Day/s</th>
            </tr>
        </thead>

         <tbody>

        </tbody>
    </table>

</div>
                   
                        </div>
            
                    </div>
                </div>

<div class="ajax-loader">
    <img src="<?php echo base_url(); ?>assets/images/loader.gif" class="img-responsive" />
</div>


    <script src="<?php echo base_url(); ?>assets/plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/bower_components/datatables/jquery.dataTables.min.js"></script>

    <!-- Ito ung inidagdag ko para sa may alert animation at ung nasa ajax part kasama nito ung mga title chuchu -->
    <script src="<?php echo base_url(); ?>assets/js/sweetalert.min.js"></script>

    <!-- BOOTSTRAP SELECT -->
    <script src="<?php echo base_url(); ?>assets/plugins/bower_components/bootstrap-select/bootstrap-select.min.js" type="text/javascript"></script>

    <!-- CUSTOM SELECT -->
    <script src="<?php echo base_url(); ?>assets/plugins/bower_components/custom-select/custom-select.min.js" type="text/javascript"></script>
    <!-- PARTICLE SWARM OPTIMIZATION -->
    <script src="<?php echo base_url(); ?>assets/pso-js/src/pso.js"></script>
    <script type="text/javascript">


    //DECLARE GLOBAL VARIABLES
      var global_factype;
      var global_factypedesc;
      var global_labhour;
      var global_lechour;
      var global_total_hrs;
      var global_reg_load;
      var global_pt_load; 
      var global_ts_load;
      var global_eval;
      var global_minor_id;
      var global_start_time; 
      var global_end_time; 
      var global_subject_code;
      var global_match_id;
      var global_bool_sec_valid; 
      var global_room;
      var global_lab;
      var global_pref_day = [];
      var global_num_loads;
      var global_minor_split = 0;
      var global_splitcontrol = 0;
      var bool_at; 
      var bool_oh; 
      var bool_no;
      var global_bool_checker;
      var global_fac_id; //for account type variable only!

      //FUNCTIONS
      //SHOWS IF FACULTY HAS CONSECUTIVE S GRADES

      function hide_dropdown()
        {
            var data = "<?php echo $acc_type?>";
            if(data == 'faculty')
            {
                $('#for_hiding').hide();
                $('#view_div').hide(); 
            }
            else
            {
                $('#for_hiding').show();
                $('#view_div').show();
            }
        }

      function showSpec(id)
        {   
            event.preventDefault();  
                $.ajax({  
                url:"<?php echo base_url('Transaction/get_consec')?>",  
                method:"POST",  
                data:{faculty_id:id},
                success:function(data)
                {  
                    if(data == 'CONSECUTIVE')
                    {
                        $('#lbl_eval').empty();
                        $('#lbl_eval').append('WITH CONSECUTIVE "S" GRADE');
                    }
                    if(data == 'NONE')
                    {
                        $('#lbl_eval').empty();
                        $('#lbl_eval').append('NO CONSECUTIVE "S" GRADE');
                    }

                    global_eval = data;
                },
                error: function (data) {
                        alert(JSON.stringify(data));
                },
                async:false
                });  
        }

      function resetPlotForm(){
        $('.plot-green').removeClass().addClass('btn plot-regular');
        $('.plot-purple').removeClass().addClass('btn plot-regular');
        $('.plot-blue').removeClass().addClass('btn plot-regular');
        $('.plot-orange').removeClass().addClass('btn plot-regular');
        $('.plot-red').removeClass().addClass('btn plot-regular');
        $('.plot-darkBlue').removeClass().addClass('btn plot-regular')
        $('.plot-regular').text('');
      }

      function loadSchedTable(){

            var sem = $('#sched_sem').val();
            var acad_year = $('#sched_acad_year').val();
            var account = "<?php echo $acc_type?>"; 
            if(account == 'admin'){
                var fac_id = $('#sched_faculty').val();
                var dataTable = $('#tbl_sched_sum').DataTable({           
                  "processing" : true,
                  "serverSide" : true,
                  "order" : [],
                  destroy:true,
                  "ajax" : {
                   url:"<?php echo base_url('Transaction/load_sched_table')?>",
                   data:{sem: sem, acad_year:acad_year, fac_id:fac_id},
                   type:"POST"
                  }
                 });
            }
            else{
                var fac_id = "<?php echo $fac_id?>";
                var dataTable = $('#tbl_sched_sum').DataTable({           
                  "processing" : true,
                  "serverSide" : true,
                  "order" : [],
                  destroy:true,
                  "ajax" : {
                   url:"<?php echo base_url('Transaction/load_published_table')?>",
                   data:{sem: sem, acad_year:acad_year, fac_id:fac_id},
                   type:"POST"
                  }
                 });
            }

            

        }

        function loadSectionTable(){

            var sem = $('#sec_sem').val();
            var acad_year = $('#sec_acadyr').val();
            var section_id = $('#sec_yearsec').val();

            var dataTable = $('#tbl_section').DataTable({           
              "processing" : true,
              "serverSide" : true,
              "order" : [],
              destroy:true,
              "ajax" : {
               url:"<?php echo base_url('Transaction/load_section_table')?>",
               data:{sem: sem, acad_year:acad_year, section_id:section_id},
               type:"POST"
              }
             });

        }

        function getAdviseTime(){
            var sem = $('#sched_sem').val();
            var acad_year = $('#sched_acad_year').val();
            var data = "<?php echo $acc_type?>"; 
            if(data == 'admin'){
                var fac_id = $('#sched_faculty').val();
                $.ajax({  
                    url:"<?php echo base_url('Transaction/reflect_advise_time')?>", 
                    method:"POST", 
                    data:{fac_id:fac_id, acad_year:acad_year, sem:sem}, 
                    dataType: "json",
                    success:function(data){
                        changeSchedColor(data);
                        showTeachingLoads();
                    },
                    error: function (data) {
                    // alert(JSON.stringify(data));
                    }
               });
            }
            else{
                var fac_id = "<?php echo $fac_id?>";
                $.ajax({  
                    url:"<?php echo base_url('Transaction/reflect_published_at')?>", 
                    method:"POST", 
                    data:{fac_id:fac_id, acad_year:acad_year, sem:sem}, 
                    dataType: "json",
                    success:function(data){
                        changeSchedColor(data);
                        showTeachingLoads();
                    },
                    error: function (data) {
                    // alert(JSON.stringify(data));
                    }
               });
            }
        }

        function getNightOffice(){
            var sem = $('#sched_sem').val();
            var acad_year = $('#sched_acad_year').val();
            var data = "<?php echo $acc_type?>"; 
            if(data == 'admin'){
                var fac_id = $('#sched_faculty').val();
                $.ajax({  
                    url:"<?php echo base_url('Transaction/reflect_night_office')?>", 
                    method:"POST", 
                    data:{fac_id:fac_id, acad_year:acad_year, sem:sem}, 
                    dataType: "json",
                    success:function(data){
                        changeSchedColor(data);
                    },
                    error: function (data) {
                    // alert(JSON.stringify(data));
                    }
               }); 
            }
            else{
                var fac_id = "<?php echo $fac_id?>";
                $.ajax({  
                    url:"<?php echo base_url('Transaction/reflect_published_no')?>", 
                    method:"POST", 
                    data:{fac_id:fac_id, acad_year:acad_year, sem:sem}, 
                    dataType: "json",
                    success:function(data){
                        changeSchedColor(data);
                    },
                    error: function (data) {
                    // alert(JSON.stringify(data));
                    }
               }); 
            }

             
        }

        function getOfficeHours(){
            var sem = $('#sched_sem').val();
            var acad_year = $('#sched_acad_year').val();
            var data = "<?php echo $acc_type?>"; 
            if(data == 'admin'){
                var fac_id = $('#sched_faculty').val();
                $.ajax({  
                    url:"<?php echo base_url('Transaction/reflect_office_hours')?>", 
                    method:"POST", 
                    data:{fac_id:fac_id, acad_year:acad_year, sem:sem}, 
                    dataType: "json",
                    success:function(data){
                        changeSchedColor(data);
                    },
                    error: function (data) {
                    // alert(JSON.stringify(data));
                    }
               }); 
            }
            else{
                var fac_id = "<?php echo $fac_id?>";
                $.ajax({  
                    url:"<?php echo base_url('Transaction/reflect_published_oh')?>", 
                    method:"POST", 
                    data:{fac_id:fac_id, acad_year:acad_year, sem:sem}, 
                    dataType: "json",
                    success:function(data){
                        changeSchedColor(data);
                    },
                    error: function (data) {
                    // alert(JSON.stringify(data));
                    }
               }); 
            }

             
        }

        function loadRoomTable(){

            var sem = $('#room_sem').val();
            var acad_year = $('#room_acad_year').val();
            var room_id = $('#room_labs').val();

            var dataTable = $('#table_room').DataTable({           
              "processing" : true,
              "serverSide" : true,
              "order" : [],
              destroy:true,
              "ajax" : {
               url:"<?php echo base_url('Transaction/load_room_table')?>",
               data:{sem: sem, acad_year:acad_year, room_id:room_id},
               type:"POST"
              }
             });

        }

        function reflectRegular(){

            var sem = $('#sched_sem').val();
            var acad_year = $('#sched_acad_year').val();
            var data = "<?php echo $acc_type?>"; 
            if(data == 'admin'){

                var fac_id = $('#sched_faculty').val();
                $.ajax({  
                url:"<?php echo base_url('Transaction/reflect_sched_table')?>", 
                method:"POST", 
                data:{fac_id:fac_id, acad_year:acad_year, sem:sem, load_type:'R'}, 
                dataType: "json",
                success:function(data){
                    changeSchedColor(data);
                },
                error: function (data) {
                // alert(JSON.stringify(data));
                }
           });

            }
            else{
                var fac_id = "<?php echo $fac_id?>";
                $.ajax({  
                url:"<?php echo base_url('Transaction/reflect_published_load')?>", 
                method:"POST", 
                data:{fac_id:fac_id, acad_year:acad_year, sem:sem, load_type:'R'}, 
                dataType: "json",
                success:function(data){
                    changeSchedColor(data);
                },
                error: function (data) {
                // alert(JSON.stringify(data));
                }
           });
            }

        }

        function reflectPartTime(){

            var sem = $('#sched_sem').val();
            var acad_year = $('#sched_acad_year').val();
            var data = "<?php echo $acc_type?>"; 
            if(data == 'admin'){
                var fac_id = $('#sched_faculty').val();
                $.ajax({  
                url:"<?php echo base_url('Transaction/reflect_sched_table')?>", 
                method:"POST", 
                data:{fac_id:fac_id, acad_year:acad_year, sem:sem, load_type:'PT'}, 
                dataType: "json",
                success:function(data){
                    changeSchedColor(data);
                },
                error: function (data) {
                // alert(JSON.stringify(data));
                }
           });
            }
            else{
                var fac_id = "<?php echo $fac_id?>";
                $.ajax({  
                url:"<?php echo base_url('Transaction/reflect_published_load')?>", 
                method:"POST", 
                data:{fac_id:fac_id, acad_year:acad_year, sem:sem, load_type:'PT'}, 
                dataType: "json",
                success:function(data){
                    changeSchedColor(data);
                },
                error: function (data) {
                // alert(JSON.stringify(data));
                }
           });
            }


        }

        function reflectTS(){

            var sem = $('#sched_sem').val();
            var acad_year = $('#sched_acad_year').val();
            var data = "<?php echo $acc_type?>"; 
            if(data == 'admin'){
                var fac_id = $('#sched_faculty').val();
                $.ajax({  
                    url:"<?php echo base_url('Transaction/reflect_sched_table')?>", 
                    method:"POST", 
                    data:{fac_id:fac_id, acad_year:acad_year, sem:sem, load_type:'TS'}, 
                    dataType: "json",
                    success:function(data){
                        changeSchedColor(data);
                    },
                    error: function (data) {
                    // alert(JSON.stringify(data));
                    }
                });
            }
            else{
                var fac_id = "<?php echo $fac_id?>";
                $.ajax({  
                    url:"<?php echo base_url('Transaction/reflect_published_load')?>", 
                    method:"POST", 
                    data:{fac_id:fac_id, acad_year:acad_year, sem:sem, load_type:'TS'}, 
                    dataType: "json",
                    success:function(data){
                        changeSchedColor(data);
                    },
                    error: function (data) {
                    // alert(JSON.stringify(data));
                    }
               });
            }

             

        }

        function reflectServices(){

            var sem = $('#sched_sem').val();
            var acad_year = $('#sched_acad_year').val();
            var data = "<?php echo $acc_type?>"; 
            if(data == 'admin'){
                var fac_id = $('#sched_faculty').val();
                $.ajax({  
                    url:"<?php echo base_url('Transaction/reflect_services')?>", 
                    method:"POST", 
                    data:{fac_id:fac_id, acad_year:acad_year, sem:sem}, 
                    dataType: "json",
                    success:function(data){
                        changeSchedColor(data);
                    },
                    error: function (data) {
                    // alert(JSON.stringify(data));
                    }
               });
            }
            else{
                var fac_id = "<?php echo $fac_id?>";
                $.ajax({  
                    url:"<?php echo base_url('Transaction/reflect_published_services')?>", 
                    method:"POST", 
                    data:{fac_id:fac_id, acad_year:acad_year, sem:sem}, 
                    dataType: "json",
                    success:function(data){
                        changeSchedColor(data);
                    },
                    error: function (data) {
                    // alert(JSON.stringify(data));
                    }
               });
            }

             

        }

        function reflectSectionTable(){

            var sem = $('#sec_sem').val();
            var acad_year = $('#sec_acadyr').val();
            var section_id = $('#sec_yearsec').val();

             $.ajax({  
                url:"<?php echo base_url('Transaction/reflect_section_table')?>", 
                method:"POST", 
                data:{section_id:section_id, acad_year:acad_year, sem:sem}, 
                dataType: "json",
                success:function(data){
                    changeSchedColor(data);
                },
                error: function (data) {
                // alert(JSON.stringify(data));
                }
           });

        }

        function reflectSectionMinor(){

            var sem = $('#sec_sem').val();
            var acad_year = $('#sec_acadyr').val();
            var section_id = $('#sec_yearsec').val();

             $.ajax({  
                url:"<?php echo base_url('Transaction/reflect_section_minor')?>", 
                method:"POST", 
                data:{section_id:section_id, acad_year:acad_year, sem:sem}, 
                dataType: "json",
                success:function(data){
                    changeSchedColor(data);
                },
                error: function (data) {
                // alert(JSON.stringify(data));
                }
           });

        }

        function reflectRoomTable(){

            var sem = $('#room_sem').val();
            var acad_year = $('#room_acad_year').val();
            var room_id = $('#room_labs').val();

             $.ajax({  
                url:"<?php echo base_url('Transaction/reflect_room_table')?>", 
                method:"POST", 
                data:{room_id:room_id, acad_year:acad_year, sem:sem}, 
                dataType: "json",
                success:function(data){
                    changeSchedColor(data);
                },
                error: function (data) {
                // alert(JSON.stringify(data));
                }
           });

        }

      function getFacultyLoads(){
        var data = "<?php echo $acc_type?>"; 
            if(data == 'admin'){
                var fac_id = $('#sched_faculty').val();
            }
            else{
                var fac_id = "<?php echo $fac_id?>";
            }
        var acad_yr =  $('#sched_acad_year').val();
        var sem =  $('#sched_sem').val();
        $.ajax({
                method:"POST",
                url:"<?php echo base_url('Transaction/get_prof_load')?>",
                dataType: "json",
                data:{fac_id:fac_id, acad_yr:acad_yr, sem:sem},
                success:function(data)
                {   
                    $('#sched_load').empty();
                    $('#sched_load').append('<option value="0" disabled selected>-Loads-</option>');
                    var len = data.length;
                    for(var i = 0; i < len ; i++){
                      var val = data[i][4];
                      var text = '(' + data[i][0] + ') &nbsp;' + data[i][1] + ' - ' + data[i][2];
                      $('#sched_load').append('<option value="'+val+'">'+text+'</option>');
                      global_subject_code = data[0][1];
                      global_match_id = data[0][4];
                    }
                }, 
                async:false
               });
      }

      function getFacultyType(){
        var data = "<?php echo $acc_type?>"; 
            if(data == 'admin'){
                var fac_id = $('#sched_faculty').val();
            }
            else{
                var fac_id = "<?php echo $fac_id?>";
            }
        $.ajax({
                method:"POST",
                url:"<?php echo base_url('Transaction/get_faculty_type')?>",
                dataType: "json",
                data:{fac_id:fac_id},
                success:function(data)
                {   
                   global_factype = data[0][0];
                   global_factypedesc = data[0][1];
                   displayLegends();
                    if(global_factype == 1)
                    {
                        $('#edit_at_div').show();
                        $('#edit_no_div').hide();
                        $('#edit_oh_div').hide();
                    }
                    else if(global_factype == 3)
                    {
                        $('#edit_at_div').hide();
                        $('#edit_no_div').show();
                        $('#edit_oh_div').show();
                    }
                    else
                    {
                        $('#edit_at_div').hide();
                        $('#edit_no_div').hide();
                        $('#edit_oh_div').hide();
                    }
                }, 
                async:false

               });
      }

      function getPrefDay_gen(){
        var data = "<?php echo $acc_type?>"; 
            if(data == 'admin'){
                var fac_id = $('#sched_faculty').val();
            }
            else{
                var fac_id = "<?php echo $fac_id?>";
            }
        var acad_yr =  $('#sched_acad_year').val();
        var sem =  $('#sched_sem').val();
        $.ajax({
                method:"POST",
                url:"<?php echo base_url('Transaction/get_pref_day')?>",
                dataType: "json",
                data:{fac_id:fac_id, acad_yr:acad_yr, sem:sem},
                success:function(data)
                {   
                    global_pref_day = data;
                }, 
                async:false
               });
      }

      function resetLegends(){
        $('#reg_box').show();
        $('#pt_box').show();
        $('#ts_box').show();
        $('#at_box').show();
        $('#no_box').show();
        $('#oh_box').show();
      }

      function displayLegends(){
        if(global_factype == 1)
            {
                $('#reg_box').show();
                $('#pt_box').show();
                $('#ts_box').show();
                $('#at_box').show();
                $('#no_box').hide();
                $('#oh_box').hide();
            }
            else if(global_factype == 3)
            {
                $('#reg_box').show();
                $('#pt_box').show();
                $('#ts_box').show();
                $('#at_box').hide();
                $('#no_box').show();
                $('#oh_box').show();
            }

            else if(global_factype == 4 || global_factype == 5)
            {
                $('#reg_box').hide();
                $('#pt_box').show();
                $('#ts_box').show();
                $('#at_box').hide();
                $('#no_box').hide();
                $('#oh_box').hide();
            }
      }

      function showTeachingLoads(){

        reflectRegular();
        reflectPartTime();
        reflectTS();
      }

      function getUnitsUsed(){

            var sem = $('#sched_sem').val();
            var acad_year = $('#sched_acad_year').val();
            var data = "<?php echo $acc_type?>"; 
            if(data == 'admin'){
                var fac_id = $('#sched_faculty').val();
            }
            else{
                var fac_id = "<?php echo $fac_id?>";
            }

            $.ajax({  
                url:"<?php echo base_url('Transaction/get_units_used')?>", 
                method:"POST", 
                data:{fac_id:fac_id, acad_year:acad_year, sem:sem}, 
                dataType: "json",
                success:function(data){

                    global_total_hrs = data[0][0];
                    global_reg_load = data[0][1];
                    global_pt_load = data[0][2];
                    global_ts_load = data[0][3];

                    $('#factype_id').empty();
                    $('#factype_id').append(global_factypedesc);
                    if(global_reg_load == null)
                    {
                        $('#units_used').empty();
                        $('#RLoad_id').empty();
                        $('#PTLoad_id').empty();
                        $('#TSLoad_id').empty();
                        $('#units_used').append('<b>Total Units Used:</b> ');
                        $('#RLoad_id').append('<b>Regular Load:</b> ');
                        $('#PTLoad_id').append('<b>Part-time Load:</b> ');
                        $('#TSLoad_id').append('<b>Temporary Substitution:</b> ');
                    }

                    else
                    {
                      if(global_pt_load == null)
                      {
                        $('#units_used').empty();
                        $('#RLoad_id').empty();
                        $('#PTLoad_id').empty();
                        $('#TSLoad_id').empty();
                        $('#units_used').append('<b>Total Units Used:</b> ' + global_total_hrs + 'hrs');
                        $('#RLoad_id').append('<b>Regular Load:</b> '+ global_reg_load+ 'hrs');
                        $('#PTLoad_id').append('<b>Part-time Load:</b> ');
                        $('#TSLoad_id').append('<b>Temporary Substitution:</b> ');
                      }

                      else if(global_ts_load == null)
                      {
                        $('#units_used').empty();
                        $('#RLoad_id').empty();
                        $('#PTLoad_id').empty();
                        $('#TSLoad_id').empty();
                        $('#units_used').append('<b>Total Units Used:</b> ' + global_total_hrs+ 'hrs');
                        $('#RLoad_id').append('<b>Regular Load:</b> '+ global_reg_load+ 'hrs');
                        $('#PTLoad_id').append('<b>Part-time Load:</b> ' + global_pt_load+ 'hrs');
                        $('#TSLoad_id').append('<b>Temporary Substitution:</b> ');
                      }

                      else
                      {
                        $('#units_used').empty();
                        $('#RLoad_id').empty();
                        $('#PTLoad_id').empty();
                        $('#TSLoad_id').empty();
                        $('#units_used').append('<b>Total Units Used:</b> ' + global_total_hrs+ 'hrs');
                        $('#RLoad_id').append('<b>Regular Load:</b> '+ global_reg_load+ 'hrs');
                        $('#PTLoad_id').append('<b>Part-time Load:</b> ' + global_pt_load+ 'hrs');
                        $('#TSLoad_id').append('<b>Temporary Substitution:</b> '+global_ts_load+ 'hrs');
                      }
                    }
                    
                },
                error: function (data) {
                // alert(JSON.stringify(data));
                }, 
                async:false
           });

        }


    function checkTime(load_type, btn_value, class_name){

            var day_temp = 1; 
            var start; 
            var end;
            var day; 
            var day_id;
            var count_at = 0; 
            var start_time; 
            var first_id; 
            var second_id;
            var val_temp; 
            var day_loop; 
            var hour;
            var bool_validity = false;


            if(load_type == 'AT' || load_type == 'OH')
            {
                start = 8;
                end = 18;
            }

            else if(load_type == 'NO')
            {
                start = 17;
                end = 21;
            }

            for(day_loop = 1; day_loop <= 5; day_loop++)
            {
                switch(day_loop)
                {
                    case 1: day_id = '_mon';
                            day = 'Monday';
                            break;

                    case 2: day_id = '_tue';
                            day = 'Tuesday';
                            break;

                    case 3: day_id = '_wed';
                            day = 'Wednesday';
                            break;

                    case 4: day_id = '_thu';
                            day = 'Thursday';
                            break;

                    default:   day_id = '_fri';
                                day = 'Friday';
                }

                for(hour = start; hour < end; hour ++)
                {   
                    var first_val = '0' + hour + ':00:00' + day_id; 
                    var second_val = '0' + hour + ':30:00' + day_id; 
                    if(hour > 9)
                    {
                        first_val = hour + ':00:00' + day_id; 
                        second_val = hour + ':30:00' + day_id; 
                    }   

                    if(btn_value == first_val)
                    {
                        bool_validity = true;
                    }

                    if(btn_value == second_val)
                    {
                        bool_validity = true;
                    }
                }
            }

            global_bool_checker = bool_validity;

            if (bool_validity == false)
            {
                if(load_type == 'AT')
                {
                    swal("Invalid", "Advising Time is only between 8am to 6pm on Weekdays", "error");
                }

                if(load_type == 'OH')
                {
                    swal("Invalid", "Office Hours are only between 8am to 6pm on Weekdays", "error");
                }

                if(load_type == 'NO')
                {
                    swal("Invalid", "Night office can only be between 5pm to 9pm on Weekdays", "error");
                }

                $('button[type="button"][value="' + btn_value + '"]').removeClass(class_name).addClass('plot-regular');
            }
            
        }

      function changeSchedColor(arr){
            var len = arr.length;
            var temp_subj = '';
            var temp_sec = '';
            var temp_day = '';
            var temp_room = '';
            var temp_hour_start = '';
            var temp_min_start = '';
            var temp_hour_end = '';
            var temp_min_end = '';
            var temp_mins = '';
            var day_id = '';
            var final_val = '';
            var final_val2 = '';
            var div_id_top = '';
            var div_id_bot = '';
            var div_id_mid1 = '';
            var div_id_mid2 = '';
            var last_box = '';
            var last_text = '';
            var put_label = 0;


            for (ctr = 0 ; ctr < len ; ctr++){

                temp_subj = arr[ctr][0]; //GETS SUBJECT 
                temp_sec = arr[ctr][3]; //GETS SECTION
                temp_room = arr[ctr][6]; //GETS ROOM
                temp_load = arr[ctr][7];

                switch(arr[ctr][5]){
                    case 'Monday': 
                            day_id = '_mon';
                            break;

                    case 'Tuesday': 
                            day_id = '_tue';
                            break;

                    case 'Wednesday': 
                            day_id = '_wed';
                            break;

                    case 'Thursday': 
                            day_id = '_thu';
                            break;

                    case 'Friday': 
                            day_id = '_fri';
                            break;

                    case 'Saturday': 
                            day_id = '_sat';
                            break;

                    default: 
                            day_id = '_sun';
                }//END SWITCH
                
                temp_hour_start = arr[ctr][4][0] + arr[ctr][4][1];
                temp_min_start = arr[ctr][4][3] + arr[ctr][4][4];
                temp_hour_end = arr[ctr][4][11] + arr[ctr][4][12];
                temp_min_end = arr[ctr][4][14] + arr[ctr][4][15];
                var min_temp = arr[ctr][4][3] + arr[ctr][4][4];

                //CONTROLS WHERE TO PUT THE LABELS OF THE SCHEDULE
                if (min_temp == '30'){
                    put_label = 1;
                }
                else{
                    put_label = 2;
                }

                //FIRST LOOP TO COLOR BLOCKS
                var looper = parseInt(temp_hour_start);
                while (looper < temp_hour_end){
                    // put_label ++;
                    if (looper < 10){
                        if(min_temp == '30'){
                            final_val = '0' + looper + ':' + min_temp + ':00' + day_id;
                            min_temp = '00';
                            div_id_mid1 = '0' + looper + '_' + min_temp + day_id + '_d';
                        }
                        else{
                            final_val = '0' + looper + ':00:00' + day_id;
                            final_val2 = '0' + looper + ':30:00' + day_id;
                            div_id_mid1 = '0' + looper + '_00'  + day_id + '_d';
                            div_id_mid2 = '0' + looper + '_30' + day_id + '_d';
                        }
                    }

                    else{
                        if(min_temp == '30'){
                            final_val = looper + ':' + min_temp + ':00' + day_id;
                            min_temp = '00';
                            div_id_mid1 = looper + '_' + min_temp + day_id + '_d';
                            
                        }
                        else{
                            final_val = looper + ':00:00' + day_id;
                            final_val2 = looper + ':30:00' + day_id;
                            div_id_mid1 = looper + '_00'  + day_id + '_d';
                            div_id_mid2 = looper + '_30' + day_id + '_d';
                        }
                    }

                   if(temp_load == null || temp_load == 'R')
                   {
                     $('button[type="button"][value="'+final_val+'"]').removeClass().addClass("btn plot-green");                 
                    $('button[type="button"][value="'+final_val+'"]').addClass("btn plot-green");
                    $('button[type="button"][value="'+final_val2+'"]').removeClass().addClass("btn plot-green");                 
                    $('button[type="button"][value="'+final_val2+'"]').addClass("btn plot-green");
                   }
                   else if (temp_load == 'PT')
                   {
                    $('button[type="button"][value="'+final_val+'"]').removeClass().addClass("btn plot-blue");                 
                    $('button[type="button"][value="'+final_val+'"]').addClass("btn plot-blue");
                    $('button[type="button"][value="'+final_val2+'"]').removeClass().addClass("btn plot-blue");                 
                    $('button[type="button"][value="'+final_val2+'"]').addClass("btn plot-blue");
                   }

                   else if (temp_load == 'AT')
                   {
                    $('button[type="button"][value="'+final_val+'"]').removeClass().addClass("btn plot-orange");                 
                    $('button[type="button"][value="'+final_val+'"]').addClass("btn plot-orange");
                    $('button[type="button"][value="'+final_val2+'"]').removeClass().addClass("btn plot-orange");                 
                    $('button[type="button"][value="'+final_val2+'"]').addClass("btn plot-orange");
                   }

                   else if (temp_load == 'NO')
                   {
                    $('button[type="button"][value="'+final_val+'"]').removeClass().addClass("btn plot-darkBlue");                 
                    $('button[type="button"][value="'+final_val+'"]').addClass("btn plot-darkBlue");
                    $('button[type="button"][value="'+final_val2+'"]').removeClass().addClass("btn plot-darkBlue");                 
                    $('button[type="button"][value="'+final_val2+'"]').addClass("btn plot-darkBlue");
                   }

                   else if (temp_load == 'OH')
                   {
                    $('button[type="button"][value="'+final_val+'"]').removeClass().addClass("btn plot-red");                 
                    $('button[type="button"][value="'+final_val+'"]').addClass("btn plot-red");
                    $('button[type="button"][value="'+final_val2+'"]').removeClass().addClass("btn plot-red");                 
                    $('button[type="button"][value="'+final_val2+'"]').addClass("btn plot-red");
                   }

                   else if (temp_load == 'TS')
                   {
                     $('button[type="button"][value="'+final_val+'"]').removeClass().addClass("btn plot-purple");                 
                    $('button[type="button"][value="'+final_val+'"]').addClass("btn plot-purple");
                    $('button[type="button"][value="'+final_val2+'"]').removeClass().addClass("btn plot-purple");                 
                    $('button[type="button"][value="'+final_val2+'"]').addClass("btn plot-purple");
                   }

                    $('button[type="button"][value="'+final_val2+'"]').text('');
                    $('button[type="button"][value="'+final_val+'"]').text('');


                    //UNDER DEVELOPMENT
                    // $('#'+div_id_mid1).removeClass();
                    // $('#'+div_id_mid2).removeClass();
                    // $('#'+div_id_mid1).addClass('schedBorderMid');
                    // $('#'+div_id_mid2).addClass('schedBorderMid');
                    looper ++;
                }

                    var first_btn = '';
                    var second_btn = '';
                    var third_btn = '';
                    var parsed_hour = parseInt(temp_hour_start);
                    if(put_label == 1){
                        if( parsed_hour < 10){
                            if(parsed_hour == 9){
                                first_btn = temp_hour_start + ':30:00' +day_id ; 
                                second_btn = (parsed_hour + 1) + ':00:00' + day_id ; 
                                third_btn = (parsed_hour + 1) + ':30:00' + day_id ;
                            }
                            else{
                                first_btn = temp_hour_start + ':30:00' +day_id ; 
                                second_btn = '0' + (parsed_hour + 1) + ':00:00' + day_id ; 
                                third_btn = '0' + (parsed_hour + 1) + ':30:00' + day_id ;
                            } 
                        }
                        else{
                            first_btn = temp_hour_start + ':' + temp_min_start + ':00' +day_id ; 
                            second_btn = (parsed_hour + 1) + ':00:00' + day_id ; 
                            third_btn = (parsed_hour + 1) + ':30:00' + day_id ; 
                        }
                        $('button[type="button"][value="'+first_btn+'"]').text(temp_subj);
                        $('button[type="button"][value="'+second_btn+'"]').text(temp_sec);
                        $('button[type="button"][value="'+third_btn+'"]').text(temp_room);
                        // alert(first_btn + ' ' + second_btn + ' ' + third_btn); 
                        // put_label = 0;
                    }
                    else if (put_label == 2){
                        if(parsed_hour < 10){
                            if(parsed_hour == 9){
                                first_btn =  temp_hour_start + ':' + temp_min_start +':00' +day_id ; 
                                second_btn = temp_hour_start + ':30:00' + day_id ; 
                                third_btn = (parsed_hour + 1) + ':00:00' + day_id ;
                            }
                            else{
                                first_btn =  temp_hour_start + ':' + temp_min_start +':00' +day_id ; 
                                second_btn = temp_hour_start + ':30:00' + day_id ; 
                                third_btn = '0' + (parsed_hour + 1) + ':00:00' + day_id ;
                            }  
                        }
                        else{
                            first_btn =  temp_hour_start + ':' + temp_min_start + ':00' +day_id ; 
                            second_btn = temp_hour_start + ':30:00' + day_id ; 
                            third_btn = (parseInt(temp_hour_start) + 1) + ':00:00' + day_id ;
                        }
                        $('button[type="button"][value="'+first_btn+'"]').text(temp_subj);
                        $('button[type="button"][value="'+second_btn+'"]').text(temp_sec);
                        $('button[type="button"][value="'+third_btn+'"]').text(temp_room);
                        // alert(first_btn + ' ' + second_btn + ' ' + third_btn); 
                        // put_label = 0;
                    }

                if (temp_min_end == '30'){
                    if(looper < 10)
                    {
                        final_val2 = '0' + looper + ':00:00' + day_id;
                    }
                    else
                    {
                        final_val2 = looper + ':00:00' + day_id;
                    }
                   if(temp_load == null || temp_load == 'R')
                   {
                        $('button[type="button"][value="'+final_val2+'"]').removeClass();
                        $('button[type="button"][value="'+final_val2+'"]').addClass("btn plot-green");
                   }
                   else if(temp_load == 'PT')
                   {
                        $('button[type="button"][value="'+final_val2+'"]').removeClass();
                        $('button[type="button"][value="'+final_val2+'"]').addClass("btn plot-blue");
                   }
                   else if(temp_load == 'AT')
                   {
                        $('button[type="button"][value="'+final_val2+'"]').removeClass();
                        $('button[type="button"][value="'+final_val2+'"]').addClass("btn plot-orange");
                   }
                   else if(temp_load == 'OH')
                   {
                        $('button[type="button"][value="'+final_val2+'"]').removeClass();
                        $('button[type="button"][value="'+final_val2+'"]').addClass("btn plot-red");
                   }
                   else if(temp_load == 'NO')
                   {
                        $('button[type="button"][value="'+final_val2+'"]').removeClass();
                        $('button[type="button"][value="'+final_val2+'"]').addClass("btn plot-darkBlue");
                   }
                   else if(temp_load == 'TS')
                   {
                        $('button[type="button"][value="'+final_val2+'"]').removeClass();
                        $('button[type="button"][value="'+final_val2+'"]').addClass("btn plot-purple");
                   }

                    $('button[type="button"][value="'+final_val2+'"]').text(''); 
                }

            }
        }

        function countHours(class_name, start, end, input_id){
            var day_temp = 1; 
            var day; 
            var day_id;
            var count_at = 0; 
            var start_time; 
            var first_id; 
            var second_id;
            var val_temp; 
            var day_loop; 
            var hour;

            for(day_loop = 1; day_loop <= 5; day_loop++)
            {
                switch(day_loop)
                {
                    case 1: day_id = '_mon';
                            day = 'Monday';
                            break;

                    case 2: day_id = '_tue';
                            day = 'Tuesday';
                            break;

                    case 3: day_id = '_wed';
                            day = 'Wednesday';
                            break;

                    case 4: day_id = '_thu';
                            day = 'Thursday';
                            break;

                     default:   day_id = '_fri';
                                day = 'Friday';
                }

                for(hour = start; hour < end; hour ++)
                {   
                    var first_val = '0' + hour + ':00:00' + day_id; 
                    var second_val = '0' + hour + ':30:00' + day_id; 
                    if(hour > 9)
                    {
                        first_val = hour + ':00:00' + day_id; 
                        second_val = hour + ':30:00' + day_id; 
                    }

                    if($('button[type="button"][value="' + first_val + '"]').hasClass(class_name))
                    {
                        count_at +=1;
                    }

                    if($('button[type="button"][value="' + second_val + '"]').hasClass(class_name))
                    {
                        count_at += 1;
                    }
                }
            }
            
            var counted_hours = count_at/2;
            $('#' + input_id).val(counted_hours);
        }

        function saveAdviseTime()
      {
        var day_temp = 1; 
        var day; 
        var day_id;
        var count_at = 0; 
        var start_time; 
        var end_time;
        var first_id; 
        var second_id;
        var val_temp; 
        var day_loop; 
        var hour;
        var bool_label;
        var acad_yr = $('#sched_acad_year').val();
        //var fac_id = $('#sched_faculty').val();
        var sem = $('#sched_sem').val();

        var data = "<?php echo $acc_type?>"; 
        if(data == 'admin')
        {
            var fac_id = $('#sched_faculty').val();
        }
        else
        {
            var fac_id = "<?php echo $fac_id?>";
        }

        for(day_loop = 1; day_loop <= 5; day_loop++)
        {
            switch(day_loop)
            {
                case 1: day_id = '_mon';
                        day = 'Monday';
                        break;

                case 2: day_id = '_tue';
                        day = 'Tuesday';
                        break;

                case 3: day_id = '_wed';
                        day = 'Wednesday';
                        break;

                case 4: day_id = '_thu';
                        day = 'Thursday';
                        break;

                 default:   day_id = '_fri';
                            day = 'Friday';
            }

            for(hour = 8; hour < 18; hour ++)
            {   
                bool_label = true;
                var first_val = '0' + hour + ':00:00' + day_id; 
                var second_val = '0' + hour + ':30:00' + day_id; 
                if(hour > 9)
                {
                    first_val = hour + ':00:00' + day_id; 
                    second_val = hour + ':30:00' + day_id; 
                }

                var pre_time = hour - 1; 
                var pre_val = '0' + pre_time + ':30:00' + day_id;
                if(pre_time > 9)
                    pre_val = pre_time + ':30:00' + day_id;

                if($('button[type="button"][value="' + pre_val + '"]').hasClass('plot-green') || $('button[type="button"][value="' + pre_val + '"]').hasClass('plot-blue') || $('button[type="button"][value="' + pre_val + '"]').hasClass('plot-purple')|| $('button[type="button"][value="' + pre_val + '"]').hasClass('plot-regular'))
                {
                    if($('button[type="button"][value="' + first_val + '"]').hasClass('plot-orange'))
                    {
                        $('button[type="button"][value="' + first_val + '"]').text('Advising Time');
                        bool_label = false;
                        start_time = '0' + hour + ':00';
                        if(hour > 9)
                            start_time = hour + ':00';

                    }
                }

                var pre_time_b = hour
                var pre_val_b = '0' + pre_time_b + ':00:00' + day_id;
                if(hour > 9)
                    pre_val_b = hour + ':00:00' + day_id;
                if($('button[type="button"][value="' + pre_val_b + '"]').hasClass('plot-green') || $('button[type="button"][value="' + pre_val_b + '"]').hasClass('plot-blue') || $('button[type="button"][value="' + pre_val_b + '"]').hasClass('plot-purple')|| $('button[type="button"][value="' + pre_val + '"]').hasClass('plot-regular'))
                {
                    if($('button[type="button"][value="' + second_val + '"]').hasClass('plot-orange') && bool_label == true)
                    {
                        $('button[type="button"][value="' + second_val + '"]').text('Advising Time');
                        start_time = '0' + hour + ':30';
                        if(hour > 9)
                            start_time = hour + ':30';
                    }
                }

                //GETTING THE END TIME
                var post_time = hour;
                var bool_last = true;
                var post_val = '0' + post_time + ':30:00' + day_id;
                if(hour > 9)
                    post_val = post_time + ':30:00' + day_id;
                if($('button[type="button"][value="' + post_val + '"]').hasClass('plot-green') || $('button[type="button"][value="' + post_val + '"]').hasClass('plot-blue') || $('button[type="button"][value="' + post_val + '"]').hasClass('plot-purple')|| $('button[type="button"][value="' + post_val + '"]').hasClass('plot-regular'))
                {
                    if($('button[type="button"][value="' + first_val + '"]').hasClass('plot-orange'))
                    {
                       end_time = '0' + post_time + ':30';
                        if(hour > 9)
                            end_time = post_time + ':30';
                        bool_last = false;

                        $.ajax({  
                            url:"<?php echo base_url('Transaction/add_other_time')?>", 
                            method:"POST", 
                            data:{acad_yr:acad_yr, sem:sem, fac_id:fac_id, start_time:start_time, end_time:end_time, day:day, load_type:'AT'}, 
                            success:function(data){
                                // alert(data);
                            },  
                            error: function (data) {
                            alert(JSON.stringify(data));
                            }
                       });
                    }
                }

                var post_time_b = hour + 1;
                var post_val_b = '0' + post_time_b + ':00:00' + day_id;
                if(hour > 9)
                    post_val_b = post_time_b + ':00:00' + day_id;
                if($('button[type="button"][value="' + post_val_b + '"]').hasClass('plot-green') || $('button[type="button"][value="' + post_val_b + '"]').hasClass('plot-blue') || $('button[type="button"][value="' + post_val_b + '"]').hasClass('plot-purple')|| $('button[type="button"][value="' + post_val_b + '"]').hasClass('plot-regular'))
                {
                    if($('button[type="button"][value="' + second_val + '"]').hasClass('plot-orange') && bool_last == true)
                    {
                        end_time = '0' + post_time_b + ':00';
                        if(hour > 9)
                            end_time = post_time_b + ':00';

                        $.ajax({  
                            url:"<?php echo base_url('Transaction/add_other_time')?>", 
                            method:"POST", 
                            data:{acad_yr:acad_yr, sem:sem, fac_id:fac_id, start_time:start_time, end_time:end_time, day:day, load_type:'AT'},
                            success:function(data){
                                // alert(data);
                            },  
                            error: function (data) {
                            alert(JSON.stringify(data));
                            }
                       });

                    }
                }
                
            }
        }
        bool_at = false;
      }

      function saveOfficeHours()
      {
        var day_temp = 1; 
        var day; 
        var day_id;
        var count_at = 0; 
        var start_time; 
        var end_time;
        var first_id; 
        var second_id;
        var val_temp; 
        var day_loop; 
        var hour;
        var bool_label;
        var acad_yr = $('#sched_acad_year').val();
        //var fac_id = $('#sched_faculty').val();
        var sem = $('#sched_sem').val();

        var data = "<?php echo $acc_type?>"; 
        if(data == 'admin')
        {
            var fac_id = $('#sched_faculty').val();
        }
        else
        {
            var fac_id = "<?php echo $fac_id?>";
        }

        for(day_loop = 1; day_loop <= 5; day_loop++)
        {
            switch(day_loop)
            {
                case 1: day_id = '_mon';
                        day = 'Monday';
                        break;

                case 2: day_id = '_tue';
                        day = 'Tuesday';
                        break;

                case 3: day_id = '_wed';
                        day = 'Wednesday';
                        break;

                case 4: day_id = '_thu';
                        day = 'Thursday';
                        break;

                 default:   day_id = '_fri';
                            day = 'Friday';
            }

            for(hour = 8; hour < 18; hour ++)
            {   
                bool_label = true;
                var first_val = '0' + hour + ':00:00' + day_id; 
                var second_val = '0' + hour + ':30:00' + day_id; 
                if(hour > 9)
                {
                    first_val = hour + ':00:00' + day_id; 
                    second_val = hour + ':30:00' + day_id; 
                }

                var pre_time = hour - 1; 
                var pre_val = '0' + pre_time + ':30:00' + day_id;
                if(pre_time > 9)
                    pre_val = pre_time + ':30:00' + day_id;

                if($('button[type="button"][value="' + pre_val + '"]').hasClass('plot-green') || $('button[type="button"][value="' + pre_val + '"]').hasClass('plot-blue') || $('button[type="button"][value="' + pre_val + '"]').hasClass('plot-purple')|| $('button[type="button"][value="' + pre_val + '"]').hasClass('plot-regular') || $('button[type="button"][value="' + pre_val + '"]').hasClass('plot-darkBlue'))
                {
                    if($('button[type="button"][value="' + first_val + '"]').hasClass('plot-red'))
                    {
                        $('button[type="button"][value="' + first_val + '"]').text('Office Hours');
                        bool_label = false;
                        start_time = '0' + hour + ':00';
                        if(hour > 9)
                            start_time = hour + ':00';

                    }
                }

                var pre_time_b = hour
                var pre_val_b = '0' + pre_time_b + ':00:00' + day_id;
                if(hour > 9)
                    pre_val_b = hour + ':00:00' + day_id;
                if($('button[type="button"][value="' + pre_val_b + '"]').hasClass('plot-green') || $('button[type="button"][value="' + pre_val_b + '"]').hasClass('plot-blue') || $('button[type="button"][value="' + pre_val_b + '"]').hasClass('plot-purple')|| $('button[type="button"][value="' + pre_val_b + '"]').hasClass('plot-regular')|| $('button[type="button"][value="' + pre_val_b + '"]').hasClass('plot-darkBlue'))
                {
                    if($('button[type="button"][value="' + second_val + '"]').hasClass('plot-red') && bool_label == true)
                    {
                        $('button[type="button"][value="' + second_val + '"]').text('Office Hours');
                        start_time = '0' + hour + ':30';
                        if(hour > 9)
                            start_time = hour + ':30';
                    }
                }

                //GETTING THE END TIME
                var post_time = hour;
                var bool_last = true;
                var post_val = '0' + post_time + ':30:00' + day_id;
                if(hour > 9)
                    post_val = post_time + ':30:00' + day_id;
                if($('button[type="button"][value="' + post_val + '"]').hasClass('plot-green') || $('button[type="button"][value="' + post_val + '"]').hasClass('plot-blue') || $('button[type="button"][value="' + post_val + '"]').hasClass('plot-purple')|| $('button[type="button"][value="' + post_val + '"]').hasClass('plot-regular') || $('button[type="button"][value="' + post_val + '"]').hasClass('plot-darkBlue'))
                {
                    if($('button[type="button"][value="' + first_val + '"]').hasClass('plot-red'))
                    {
                       end_time = '0' + post_time + ':30';
                        if(hour > 9)
                            end_time = post_time + ':30';
                        bool_last = false;
                        $.ajax({  
                            url:"<?php echo base_url('Transaction/add_other_time')?>", 
                            method:"POST", 
                            data:{acad_yr:acad_yr, sem:sem, fac_id:fac_id, start_time:start_time, end_time:end_time, day:day, load_type:'OH'}, 
                            success:function(data){
                                // alert(data);
                            },  
                            error: function (data) {
                            alert(JSON.stringify(data));
                            }
                       });
                    }
                }

                var post_time_b = hour + 1;
                var post_val_b = '0' + post_time_b + ':00:00' + day_id;
                if(hour > 9)
                    post_val_b = post_time_b + ':00:00' + day_id;
                if($('button[type="button"][value="' + post_val_b + '"]').hasClass('plot-green') || $('button[type="button"][value="' + post_val_b + '"]').hasClass('plot-blue') || $('button[type="button"][value="' + post_val_b + '"]').hasClass('plot-purple')|| $('button[type="button"][value="' + post_val_b + '"]').hasClass('plot-regular') || $('button[type="button"][value="' + post_val_b + '"]').hasClass('plot-darkBlue'))
                {

                    if($('button[type="button"][value="' + second_val + '"]').hasClass('plot-red') && bool_last == true)
                    {
                        end_time = '0' + post_time_b + ':00';
                        if(hour > 9)
                            end_time = post_time_b + ':00';
                        $.ajax({  
                            url:"<?php echo base_url('Transaction/add_other_time')?>", 
                            method:"POST", 
                            data:{acad_yr:acad_yr, sem:sem, fac_id:fac_id, start_time:start_time, end_time:end_time, day:day, load_type:'OH'}, 
                            success:function(data){
                                // alert(data);
                            },  
                            error: function (data) {
                            alert(JSON.stringify(data));
                            }
                       });

                    }
                }
                
            }
            swal("Success!", "Office Hours have been updated!", "success");
            $('#oh_details').hide();
            bool_oh = false;
        }

          if(day_loop == 6)
            {
                if(global_officehrs < 68)
                {
                    var shortage = (68 - global_officehrs)/2;
                    swal("Warning!", "Generation of office hours lacks " + shortage +" hours. Move part-time loads to weekends and generate again.", "error");
                    removeOfficeHours();
                    getOfficeHours();
                }
            }
      }

      function saveNightOffice(){
        var day_temp = 1; 
        var day; 
        var day_id;
        var count_oh = 0; 
        var start_time; 
        var end_time;
        var first_id; 
        var second_id;
        var val_temp; 
        var day_loop; 
        var hour;
        var bool_label;
        var acad_yr = $('#sched_acad_year').val();
        //var fac_id = $('#sched_faculty').val();
        var sem = $('#sched_sem').val();

        var data = "<?php echo $acc_type?>"; 
        if(data == 'admin')
        {
            var fac_id = $('#sched_faculty').val();
        }
        else
        {
            var fac_id = "<?php echo $fac_id?>";
        }

        for(day_loop = 1; day_loop <= 5; day_loop++)
        {
            switch(day_loop)
            {
                case 1: day_id = '_mon';
                        day = 'Monday';
                        break;

                case 2: day_id = '_tue';
                        day = 'Tuesday';
                        break;

                case 3: day_id = '_wed';
                        day = 'Wednesday';
                        break;

                case 4: day_id = '_thu';
                        day = 'Thursday';
                        break;

                 default:   day_id = '_fri';
                            day = 'Friday';
            }

            for(hour = 17; hour <= 21; hour ++)
            {   
                bool_label = true;
                first_val = hour + ':00:00' + day_id; 
                second_val = hour + ':30:00' + day_id; 

                var pre_time = hour - 1;
                var pre_val = pre_time + ':30:00' + day_id;

                if($('button[type="button"][value="' + pre_val + '"]').hasClass('plot-green') || $('button[type="button"][value="' + pre_val + '"]').hasClass('plot-blue') || $('button[type="button"][value="' + pre_val + '"]').hasClass('plot-purple')|| $('button[type="button"][value="' + pre_val + '"]').hasClass('plot-regular') || $('button[type="button"][value="' + pre_val + '"]').hasClass('plot-red'))
                {
                    if($('button[type="button"][value="' + first_val + '"]').hasClass('plot-darkBlue'))
                    {
                        $('button[type="button"][value="' + first_val + '"]').text('Night Office');
                        bool_label = false;
                        start_time = hour + ':00';
                    }
                }

                var pre_time_b = hour
                var pre_val_b = hour + ':00:00' + day_id;
                if($('button[type="button"][value="' + pre_val_b + '"]').hasClass('plot-green') || $('button[type="button"][value="' + pre_val_b + '"]').hasClass('plot-blue') || $('button[type="button"][value="' + pre_val_b + '"]').hasClass('plot-purple')|| $('button[type="button"][value="' + pre_val + '"]').hasClass('plot-regular')|| $('button[type="button"][value="' + pre_val + '"]').hasClass('plot-red'))
                {
                    if($('button[type="button"][value="' + second_val + '"]').hasClass('plot-darkBlue') && bool_label == true)
                    {
                        $('button[type="button"][value="' + second_val + '"]').text('Night Office');
                            start_time = hour + ':30';
                    }
                }


                //GETTING THE END TIME
                var post_time = hour;
                var bool_last = true;
                var post_val = post_time + ':30:00' + day_id;
                if($('button[type="button"][value="' + post_val + '"]').hasClass('plot-green') || $('button[type="button"][value="' + post_val + '"]').hasClass('plot-blue') || $('button[type="button"][value="' + post_val + '"]').hasClass('plot-purple')|| $('button[type="button"][value="' + post_val + '"]').hasClass('plot-regular'))
                {
                    if($('button[type="button"][value="' + first_val + '"]').hasClass('plot-darkBlue'))
                    {
                        end_time = post_time + ':30';
                        bool_last = false;

                        $.ajax({  
                            url:"<?php echo base_url('Transaction/add_other_time')?>", 
                            method:"POST", 
                            data:{acad_yr:acad_yr, sem:sem, fac_id:fac_id, start_time:start_time, end_time:end_time, day:day, load_type:'NO'},
                            error: function (data) {
                            alert(JSON.stringify(data));
                            }
                       });
                    }
                }

                var post_time_b = hour + 1;
                var post_val_b = post_time_b + ':00:00' + day_id;
                if($('button[type="button"][value="' + post_val_b + '"]').hasClass('plot-green') || $('button[type="button"][value="' + post_val_b + '"]').hasClass('plot-blue') || $('button[type="button"][value="' + post_val_b + '"]').hasClass('plot-purple')|| $('button[type="button"][value="' + post_val_b + '"]').hasClass('plot-regular'))
                {
                    if($('button[type="button"][value="' + second_val + '"]').hasClass('plot-darkBlue') && bool_last == true)
                    {
                        end_time = post_time_b + ':00';
                        $.ajax({  
                            url:"<?php echo base_url('Transaction/add_other_time')?>", 
                            method:"POST", 
                            data:{acad_yr:acad_yr, sem:sem, fac_id:fac_id, start_time:start_time, end_time:end_time, day:day, load_type:'NO'},
                            error: function (data) {
                            alert(JSON.stringify(data));
                            }
                       });

                    }
                }
            }
        }

        bool_no = false;
      }

      function checkVacancy(class_name, btn_value){
        var day_temp = 1; 
            var start = 8; 
            var end = 18;
            var day; 
            var day_id;
            var count_vacant = 0; 
            var start_time; 
            var first_id; 
            var second_id;
            var val_temp; 
            var day_loop; 
            var hour;
            var bool_validity = false;
            var day_id = btn_value[8] + btn_value[9] + btn_value[10] + btn_value[11];
            
            for(hour = start; hour < end; hour ++)
            { 
                var first_val = '0' + hour + ':00:00' + day_id; 
                var second_val = '0' + hour + ':30:00' + day_id; 
                if(hour > 9)
                {
                    first_val = hour + ':00:00' + day_id; 
                    second_val = hour + ':30:00' + day_id; 
                }  

                if($('button[type="button"][value="' + first_val + '"]').hasClass('plot-regular'))
                {
                    count_vacant += 1;
                }
                if($('button[type="button"][value="' + second_val + '"]').hasClass('plot-regular'))
                {
                    count_vacant += 1;
                }

            }

            if(count_vacant == 0)
            {
                swal("Invalid", "Alot at least a 30-minute break for each faculty member a day!", "error");
                $('button[type="button"][value="' + btn_value + '"]').removeClass(class_name).addClass('plot-regular');
                countHours();
                global_bool_checker = false;
            }
        
      }

      function removeHours(temp_load){
        //var fac_id = $('#sched_faculty').val();
        var acad_year = $('#sched_acad_year').val();
        var sem = $('#sched_sem').val();

        var data = "<?php echo $acc_type?>"; 
        if(data == 'admin')
        {
            var fac_id = $('#sched_faculty').val();
        }
        else
        {
            var fac_id = "<?php echo $fac_id?>";
        }
        
        $.ajax({  
            url:"<?php echo base_url('Transaction/remove_office_hrs')?>", 
            method:"POST", 
            data:{fac_id:fac_id, acad_year:acad_year, sem:sem, load_type:temp_load}, 
            success:function(data){

                if(data == 'DELETED')
                {
                    if(temp_load == 'AT')
                    {
                        saveAdviseTime();
                        swal("Success!", "Advising Time has been updated!", "success");
                        $('#at_details').hide();
                        bool_at = false;
                    }

                    if(temp_load == 'OH')
                    {
                        saveOfficeHours();
                        bool_oh = false;
                    }

                    if(temp_load == 'NO')
                    {
                        saveNightOffice();
                        swal("Success!", "Night Office has been updated!", "success");
                        $('#no_details').hide();
                        bool_no = false;
                    }
                }
            },  
            error: function (data) {
            alert(JSON.stringify(data));
            }
       });

      }

      //SELECT2
      $(".select2").select2();
      $('.selectpicker').selectpicker();

      $(document).ready(function(){



        //===================================================================UPDATING OTHER TIMES

            //ADVISING TIME
            $('#btnUpdateAT').on('click', function(){
                bool_at = true;
                bool_oh = false;
                bool_no = false;
                $('#at_details').show();
                countHours('plot-orange', 8, 18, 'txt_at');
                $('#save_at').attr('disabled', 'disabled');
            });


            //OFFICE HOURS
            $('#btnUpdateOH').on('click', function(){
                bool_at = false;
                bool_oh = true;
                bool_no = false;
                $('#oh_details').show();
                countHours('plot-red', 8, 18, 'txt_oh');
                $('#save_oh').attr('disabled', 'disabled');
            });

            //OFFICE HOURS
            $('#btnUpdateNO').on('click', function(){
                bool_at = false;
                bool_oh = false;
                bool_no = true;
                $('#no_details').show();
                countHours('plot-darkBlue', 17, 21, 'txt_no');
                $('#save_no').attr('disabled', 'disabled');
            });

            //CLICKING OF PLOT-ORANGE
            $(document).on('click', '.plot-orange',function(){
                
                if(bool_at == true)
                {
                    var btn_value = $(this).attr('value');
                    $('button[type="button"][value="' + btn_value + '"]').removeClass('plot-orange').addClass('plot-regular');
                    $('button[type="button"][value="' + btn_value + '"]').text('');
                    countHours('plot-orange', 8, 18, 'txt_at');
                    $('#save_at').attr('disabled', 'disabled');
                }
            });

            //CLICKING OF PLOT-RED
            $(document).on('click', '.plot-red',function(){
                if(bool_oh == true)
                {
                    var btn_value = $(this).attr('value');
                    $('button[type="button"][value="' + btn_value + '"]').removeClass('plot-red').addClass('plot-regular');
                    $('button[type="button"][value="' + btn_value + '"]').text('');
                    countHours('plot-red', 8, 18, 'txt_oh');
                    $('#save_oh').attr('disabled', 'disabled');
                }
            });

            //CLICKING OF PLOT-DARKBLUE
            $(document).on('click', '.plot-darkBlue',function(){
                if(bool_no == true)
                {
                    var btn_value = $(this).attr('value');
                    $('button[type="button"][value="' + btn_value + '"]').removeClass('plot-darkBlue').addClass('plot-regular');
                    $('button[type="button"][value="' + btn_value + '"]').text('');
                    countHours('plot-darkBlue', 17, 21, 'txt_no');
                    $('#save_no').attr('disabled', 'disabled');
                }
            });


            //CLICKING OF PLOT-REGULAR
            $(document).on('click', '.plot-regular',function(){

                //ADVISING TIME
                var end_at = $('#txt_at').val();
                if(bool_at == true && end_at < 10)
                {
                    var btn_value = $(this).attr('value');
                    $('button[type="button"][value="' + btn_value + '"]').removeClass('plot-regular').addClass('plot-orange');
                    $('button[type="button"][value="' + btn_value + '"]').text('');
                    checkTime('AT', btn_value, 'plot-orange');
                    checkVacancy('plot-orange', btn_value);
                    countHours('plot-orange', 8, 18, 'txt_at');
                    if(end_at == 9.5 && global_bool_checker == true)
                    {
                        swal("Info!", "You have reached the maximum hours for Advising Time. Click the check button to save it!", "info");
                        $('#save_at').removeAttr('disabled');
                    }
                }

                if(end_at == 10 && bool_at == true)
                {
                    swal("Info!", "You have reached the maximum hours for Advising Time. Click the check button to save it!", "info");
                }

                //OFFICE HOURS
                var end_oh = $('#txt_oh').val();
                if(bool_oh == true && end_oh < 34)
                {
                    var btn_value = $(this).attr('value');
                    $('button[type="button"][value="' + btn_value + '"]').removeClass('plot-regular').addClass('plot-red');
                    $('button[type="button"][value="' + btn_value + '"]').text('');
                    checkTime('OH', btn_value, 'plot-red');
                    checkVacancy('plot-red', btn_value);
                    countHours('plot-red', 8, 18, 'txt_oh');
                    if(end_oh == 33.5 && global_bool_checker == true)
                    {   
                        swal("Info!", "You have reached the maximum hours for Office Hours. Click the check button to save it!", "info");
                        $('#save_oh').removeAttr('disabled');
                    }
                }

                if(end_oh == 34 && bool_oh == true)
                {
                    swal("Info!", "You have reached the maximum hours for Office Hours. Click the check button to save it!", "info");
                }

                //NIGHT OFFICE HOURS
                var end_no = $('#txt_no').val();
                if(bool_no == true && end_no < 15)
                {
                    var btn_value = $(this).attr('value');
                    $('button[type="button"][value="' + btn_value + '"]').removeClass('plot-regular').addClass('plot-darkBlue');
                    $('button[type="button"][value="' + btn_value + '"]').text('');
                    checkTime('NO', btn_value, 'plot-darkBlue');
                    countHours('plot-darkBlue', 17, 21, 'txt_no');
                    if(end_no == 14.5 && global_bool_checker == true)
                    {
                        swal("Info!", "You have reached the maximum hours for Night Office. Click the check button to save it!", "info");
                        $('#save_no').removeAttr('disabled');
                    }
                }

                if(end_no == 15 && bool_no == true)
                {
                    swal("Info!", "You have reached the maximum hours for Night Office. Click the check button to save it!", "info");
                }


            });


            $('#save_at').on('click', function(){
                removeHours('AT');
            });

            $('#save_oh').on('click', function(){
                removeHours('OH');
            });

            $('#save_no').on('click', function(){
                removeHours('NO');
            });



        //END OF UPDATING OTHER TIMES============================================================

        

        var data = "<?php echo $acc_type?>"; 
        if(data == 'faculty'){
            getFacultyType();
        }
        else{
            $('#edit_at_div').hide();
            $('#edit_no_div').hide();
            $('#edit_oh_div').hide();
            $('#at_details').hide();
            $('#oh_details').hide();
            $('#no_details').hide();
        }

        hide_dropdown();

        $('#sched_b').hide();
        // $('#divsplit').hide();
        $('#sched_lab').hide();
        $('#div_by_room').hide();
        $('#div_by_section').hide();
        $('#sched_b_minor').hide();
        $('#section_table').hide();
        $('#room_table').hide();
        $('#btnGenerate').hide();


        $('#sched_faculty').on('change', function(){

          global_total_hrs = 0;
          var data = "<?php echo $acc_type?>"; 
            if(data == 'admin'){
                var temp_fac = $('#sched_faculty').val();
            }
            else{
                var temp_fac = "<?php echo $fac_id?>";
            }

          var temp_sem = $('#sched_sem').val();
          var temp_acadyr = $('#sched_acad_year').val();
          if(temp_fac == 0 || temp_sem == 0 || temp_acadyr == 0)
          {
            $('#btnGenerate').hide();
            $('#reg_box').hide();
            $('#pt_box').hide();
            $('#ts_box').hide();
            $('#at_box').hide();
            $('#no_box').hide();
            $('#oh_box').hide();
          }
          else
          {
            $('#btnGenerate').show();
            getFacultyType();
            displayLegends();

          }

            getPrefDay_gen();
            getFacultyType();
            getFacultyLoads();
            getUnitsUsed();
            loadSchedTable();
            reflectServices();
            showSpec(temp_fac);
            resetPlotForm();


            if(global_factype == 1)
            {
                getAdviseTime();
                $('#edit_at_div').show();
                $('#edit_no_div').hide();
                $('#edit_oh_div').hide();
                

            }
            if(global_factype == 3)
            {
                getNightOffice();
                getOfficeHours(); 
                showTeachingLoads();
                $('#edit_at_div').hide();
                $('#edit_no_div').show();
                $('#edit_oh_div').show();
            }
            if(global_factype == 4 || global_factype == 5)
            {
                showTeachingLoads();
                $('#edit_at_div').hide();
                $('#edit_no_div').hide();
                $('#edit_oh_div').hide();
            }
        });

        $('#sched_acad_year').on('change', function(){
          global_total_hrs = 0;
          var data = "<?php echo $acc_type?>"; 
            if(data == 'admin'){
                var temp_fac = $('#sched_faculty').val();
            }
            else{
                var temp_fac = "<?php echo $fac_id?>";
            }
          var temp_sem = $('#sched_sem').val();
          var temp_acadyr = $('#sched_acad_year').val();
          if(temp_fac == 0 || temp_sem == 0 || temp_acadyr == 0)
          {
            $('#btnGenerate').hide();
          }
          else
          {
            $('#btnGenerate').show();
          }
            getPrefDay_gen();
            getFacultyType();
            getFacultyLoads();
            getUnitsUsed();
            loadSchedTable();
            showTeachingLoads();
            reflectServices();
            resetPlotForm();
            if(global_factype == 1)
            {
                getAdviseTime();
            }
            if(global_factype == 3)
            {
                getNightOffice();
                getOfficeHours();
            }

        });

        $('#sched_sem').on('change', function(){
          global_total_hrs = 0;
          var data = "<?php echo $acc_type?>"; 
            if(data == 'admin'){
                var temp_fac = $('#sched_faculty').val();
            }
            else{
                var temp_fac = "<?php echo $fac_id?>";
            }
          var temp_sem = $('#sched_sem').val();
          var temp_acadyr = $('#sched_acad_year').val();
          if(temp_fac == 0 || temp_sem == 0 || temp_acadyr == 0)
          {
            $('#btnGenerate').hide();
          }
          else
          {
            $('#btnGenerate').show();
          }
            getPrefDay_gen();
            getFacultyType();
            getFacultyLoads();
            getUnitsUsed();
            loadSchedTable();
            showTeachingLoads();
            reflectServices();
            resetPlotForm();
            if(global_factype == 1)
            {
                getAdviseTime();
            }
            if(global_factype == 3)
            {
                getNightOffice();
                getOfficeHours();
            }
        });

        //=========================================================
        //SECTION VIEW

        $('#sec_sem').on('change', function(){
          resetPlotForm();
          reflectSectionTable();
          reflectSectionMinor();
          loadSectionTable();
        });

        $('#sec_acadyr').on('change', function(){
          resetPlotForm();
          reflectSectionTable();
          reflectSectionMinor();
          loadSectionTable();
        });

        $('#sec_yearsec').on('change', function(){
          resetPlotForm();
          reflectSectionTable();
          reflectSectionMinor();
          loadSectionTable();
        });


        //=========================================================
        // ENDSECTION VIEW

        //=========================================================
        //ROOM VIEW

        $('#room_sem').on('change', function(){
          resetPlotForm();
          reflectRoomTable();
          loadRoomTable();
        });

        $('#room_acad_year').on('change', function(){
          resetPlotForm();
          reflectRoomTable();
          loadRoomTable();
        });

        $('#room_labs').on('change', function(){
          resetPlotForm();
          reflectRoomTable();
          loadRoomTable();
        });


        //=========================================================
        // END ROOM VIEW

        $('#sched_load').on('change', function(){
          showTeachAssignModal();
        });

        $('#chk_split').on('change', function(){
            if($(this).prop("checked")){
              $('#sched_b').show();
            }
            else{
              $('#sched_b').hide();
            }
        });

        $('#day_a').on('change', function(){
            var day = $('#day_a').val();
            var start = $('#starttime_a').val();
            var end = $('#endtime_a').val();
            showAvailRoom(day, start, end,'rooms_a');
            validateSectionSched(start, end, day, 'starttime_a', 'endtime_a', 'day_a');
        });

        $('#day_b').on('change', function(){
            var day = $('#day_b').val();
            var start = $('#starttime_b').val();
            var end = $('#endtime_b').val();
            showAvailRoom(day, start, end,'rooms_b');
            validateSectionSched(start, end, day, 'starttime_b', 'endtime_b', 'day_b');
        });

         $('#day_c').on('change', function(){
            var day = $('#day_c').val();
            var start = $('#starttime_c').val();
            var end = $('#endtime_c').val();
            showAvailLab(day, start, end,'rooms_c');
            validateSectionSched(start, end, day, 'starttime_c', 'endtime_c', 'day_c')
        });

        //CHANGE VIEW DROP DOWN
        $('#change_view').on('change',function(){
          var temp_val = $('#change_view').val();
          if(temp_val == 1){
            resetPlotForm();
            $('#div_by_faculty_a').show();
            $('#div_by_faculty_b').show();
            $('#div_by_section').hide();
            $('#div_by_room').hide();
            $('#sec_acadyr').val('0');
            $('#sec_sem').val('0');
            $('#sec_course').val('0');
            $('#sec_yearsec').val('0');
            $('#room_acad_year').val('0');
            $('#room_sem').val('0');
            $('#room_labs').val('0');
            $('#faculty_table').show();
            $('#section_table').hide();
            $('#room_table').hide();
            $('#btnGenerate').hide();
            $('#legend_div').show();
            resetLegends();

          }

          else if(temp_val == 2){
            resetPlotForm();
            $('#div_by_faculty_a').hide();
            $('#div_by_faculty_b').hide();
            $('#div_by_section').show();
            $('#div_by_room').hide();
            $('#sched_acad_year').val('0');
            $('#sched_sem').val('0');
            $('#sched_faculty').val('0');
            $('#sched_load').val('0');
            $('#room_acad_year').val('0');
            $('#room_sem').val('0');
            $('#room_labs').val('0');
            $('#faculty_table').hide();
            $('#section_table').show();
            $('#room_table').hide();
            $('#btnGenerate').hide();
            $('#legend_div').hide();
          }

          else{
            resetPlotForm();
            $('#div_by_faculty_a').hide();
            $('#div_by_faculty_b').hide();
            $('#div_by_section').hide();
            $('#div_by_room').show();
            $('#sched_acad_year').val('0');
            $('#sched_sem').val('0');
            $('#sched_faculty').val('0');
            $('#sched_load').val('0');
            $('#sec_acadyr').val('0');
            $('#sec_sem').val('0');
            $('#sec_course').val('0');
            $('#sec_yearsec').val('0');
            $('#faculty_table').hide();
            $('#section_table').hide();
            $('#room_table').show();
            $('#btnGenerate').hide();
            $('#legend_div').hide();
          }
        });

        $('#sec_course').on('change',function(){

          var course_id = $('#sec_course').val();
          var acad_yr = $('#sec_acadyr').val();
                $.ajax({
                method:"POST",
                url:"<?php echo base_url('Transaction/get_all_sections')?>",
                dataType: "json",
                data:{course_id:course_id, acad_yr:acad_yr},
                success:function(data)
                {   
                    $('#sec_yearsec').empty();
                    $('#sec_yearsec').append('<option value="0" disabled selected>-Year-Section-</option>');
                    var len = data.length;
                    for (var i=0; i<len; i++)
                    {
                      var temp_val = data[i][0];
                      var temp_text = data[i][1];
                      $('#sec_yearsec').append('<option value="'+temp_val +'">'+temp_text+ '</option>');
                    }
                }
               });
        });


        $('#add_sched_form').on('submit', function(event){
          event.preventDefault();
            var acad_yr = $('#sched_acad_year').val();
            var sem = $('#sched_sem').val();
            var load_id = $('#sched_load').val();
            var load_control; 

            if(global_factype == 1)
            {
              if(global_total_hrs < 15 || global_total_hrs == null)
              {
                load_control = 'R';
              }
              else
              {
                load_control = 'PT';
              }
            }

            if(global_factype == 3)
            {
              if(global_total_hrs < 6 || global_total_hrs == null)
              {
                load_control = 'R';
              }
              else
              {
                load_control = 'PT';
              }
            }

            if(global_factype == 4)
            {
              if(global_total_hrs < 12 || global_total_hrs == null)
              {
                load_control = 'PT';
              }
              else
              {
                load_control = 'TS';
              }
            }

            if($('#chk_split').prop("checked")){
              global_splitcontrol = 1;
            }
            else{
              global_splitcontrol = 0;
            }

            var data = {
              'acad_yr': acad_yr, 
              'sem': sem, 
              'load_id': load_id,
              'control':global_labhour,
              's_control':global_splitcontrol,
              'load_type': load_control
            };

            if(global_factype == 1 || global_factype == 3)
            {
                if (global_eval == 'CONSECUTIVE')
                {
                    if(global_total_hrs > 21)
                    {
                        alert('This faculty has consecutive satisfactory grade and is only entitled with:\n - 15 regular load \n - 6 part time load')
                    }

                    else
                    {
                        $.ajax({  
                        url:"<?php echo base_url('Transaction/add_to_sched')?>",  
                        type:"POST",  
                        data: $('#add_sched_form').serialize() + '&' + $.param(data), 
                        success:function(data)
                        {  
                            // alert(data);
                            if (data == 'INSERTED')
                            {
                              $('#starttime_a').val('');
                              $('#endtime_a').val('');
                              $('#day_a').val('');
                              $('#rooms_a').val('');
                              $('#starttime_b').val('');
                              $('#endtime_b').val('');
                              $('#day_b').val('');
                              $('#rooms_b').val('');
                              $('#starttime_c').val('');
                              $('#endtime_c').val('');
                              $('#day_c').val('');
                              $('#rooms_c').val('');
                              $('#modalAddTime').modal('hide');
                              $('#sched_b').hide();
                              $('#divsplit').hide();
                              $('#chk_split').prop('checked', false);
                              $('#sched_lab').hide();
                              $('#sched_load').empty();
                              $('#sched_load').append('<option value="0">-SELECT TEACHING ASSIGNMENT-</option>');
                              showTeachingLoads();
                              reflectServices();
                              getFacultyLoads();
                              loadSchedTable();
                              getUnitsUsed();
                            }
                        },
                         error: function (data) {
                                alert(JSON.stringify(data));
                        }
                        });  
                    }
                }

                else
                {
                    $.ajax({  
                    url:"<?php echo base_url('Transaction/add_to_sched')?>",  
                    type:"POST",  
                    data: $('#add_sched_form').serialize() + '&' + $.param(data), 
                    success:function(data)
                    {  
                        if (data == 'INSERTED')
                        {
                          $('#starttime_a').val('');
                          $('#endtime_a').val('');
                          $('#day_a').val('');
                          $('#rooms_a').val('');
                          $('#starttime_b').val('');
                          $('#endtime_b').val('');
                          $('#day_b').val('');
                          $('#rooms_b').val('');
                          $('#starttime_c').val('');
                          $('#endtime_c').val('');
                          $('#day_c').val('');
                          $('#rooms_c').val('');
                          $('#modalAddTime').modal('hide');
                          $('#sched_b').hide();
                          $('#divsplit').hide();
                          $('#chk_split').prop('checked', false);
                          $('#sched_lab').hide();
                          $('#sched_load').empty();
                          $('#sched_load').append('<option value="0">-SELECT TEACHING ASSIGNMENT-</option>');
                            showTeachingLoads();
                            reflectServices();
                            getFacultyLoads();
                            loadSchedTable();
                            getUnitsUsed();
                        }
                    },
                     error: function (data) {
                            alert(JSON.stringify(data));
                    }
                    });  
                }
            }

            else
            {
                if (global_eval == 'CONSECUTIVE')
                {
                    if(global_total_hrs > 6)
                    {
                        alert('This faculty has consecutive satisfactory grade and is limited with: \n - 6 part time load\n - No temporary substitution')
                    }

                    else
                    {
                        $.ajax({  
                        url:"<?php echo base_url('Transaction/add_to_sched')?>",  
                        type:"POST",  
                        data: $('#add_sched_form').serialize() + '&' + $.param(data), 
                        success:function(data)
                        {  
                            if (data == 'INSERTED')
                            {
                              $('#starttime_a').val('');
                              $('#endtime_a').val('');
                              $('#day_a').val('');
                              $('#rooms_a').val('');
                              $('#starttime_b').val('');
                              $('#endtime_b').val('');
                              $('#day_b').val('');
                              $('#rooms_b').val('');
                              $('#starttime_c').val('');
                              $('#endtime_c').val('');
                              $('#day_c').val('');
                              $('#rooms_c').val('');
                              $('#modalAddTime').modal('hide');
                              $('#sched_b').hide();
                              $('#divsplit').hide();
                              $('#chk_split').prop('checked', false);
                              $('#sched_lab').hide();
                              $('#sched_load').empty();
                              $('#sched_load').append('<option value="0">-SELECT TEACHING ASSIGNMENT-</option>');
                                showTeachingLoads();
                                reflectServices();
                                getFacultyLoads();
                                loadSchedTable();
                                getUnitsUsed();
                            }
                        },
                         error: function (data) {
                                alert(JSON.stringify(data));
                        }
                        });  
                    }
                }

                else
                {
                    $.ajax({  
                    url:"<?php echo base_url('Transaction/add_to_sched')?>",  
                    type:"POST",  
                    data: $('#add_sched_form').serialize() + '&' + $.param(data), 
                    success:function(data)
                    {  
                        if (data == 'INSERTED')
                        {
                          $('#starttime_a').val('');
                          $('#endtime_a').val('');
                          $('#day_a').val('');
                          $('#rooms_a').val('');
                          $('#starttime_b').val('');
                          $('#endtime_b').val('');
                          $('#day_b').val('');
                          $('#rooms_b').val('');
                          $('#starttime_c').val('');
                          $('#endtime_c').val('');
                          $('#day_c').val('');
                          $('#rooms_c').val('');
                          $('#modalAddTime').modal('hide');
                          $('#sched_b').hide();
                          $('#divsplit').hide();
                          $('#chk_split').prop('checked', false);
                          $('#sched_lab').hide();
                          $('#sched_load').empty();
                          $('#sched_load').append('<option value="0">-SELECT TEACHING ASSIGNMENT-</option>');
                            showTeachingLoads();
                            reflectServices();
                            getFacultyLoads();
                            loadSchedTable();
                            getUnitsUsed();
                        }
                    },
                     error: function (data) {
                            alert(JSON.stringify(data));
                    }
                    });  
                }
            }

           
        });
      });

$('#add_minor_form').on('submit', function(e){
    e.preventDefault();
    minorFirstSave();
});


$(document).on('click', '#btn_reschedule', function(e){  

            e.preventDefault();
            var id = $(this).data("id");

              swal({
                        title: "Are you sure?",
                        text: "Reschedule this teaching assignment?", 
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
              })
                .then((willApprove) => {
                  if (willApprove) {
                    // alert(id);
                    $.ajax({   
                      url:"<?php echo base_url('Transaction/remove_sched')?>",  
                      method: "POST",
                      data: {id:id},
                      success: function (data) 
                      {
                         if(data == 'DELETED'){
                            swal("Success!", "Teaching load available for rescheduling.", "success");  
                            getFacultyLoads();
                            resetPlotForm();
                            showTeachingLoads();
                            reflectServices();
                            loadSchedTable();

                         }

                         else{

                            swal("Error!", "Failed to reschedule.", "error");
                            alert(JSON.stringify(data));
                         }
                      },
                      error: function (data) {
                        swal("Error!", "Failed to reschedule.", "error");
                        alert(JSON.stringify(data));
                      }
                    });
                  } 

                  else {
                    swal("Cancelled", "");
                  }
                });
            });

    </script>
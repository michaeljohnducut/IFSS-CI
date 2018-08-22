<div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                         <h4 class="page-title">New Schedule</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="#">Transaction</a></li>
                            <li class="active">Plot Schedules</li>
                        </ol>
                    </div>
                
                </div>

            <div class="row">      
                <div class="col-sm-12">
                    <div class="white-box">
                        <br>
                        <br>
                        
                        <div class="row">
                            <div class="col-md-9">
                                <h2 style="margin-top: 30px;">Plotting Form</h2>
                            </div>
                            <div class="col-md-3">
                                <label class="control-label">View Schedules by:</label>
                                <select class="form-control select2" id="change_view">
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
                                <select class="form-control select2" id="sched_acad_year">
                                    <option>-ACAD YEAR-</option>
                                    <?php 
                                        for ($i = date("Y"); $i > 1900; $i-- ){
                                            echo '<option value ="' .$i. '&#x2010;'. ($i+1).'">' .$i. '&#x2010;'. ($i+1) .  '</option>'; 
                                        }
                                    ?>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <label class="control-label">Semester</label>
                                <select class="form-control select2" id="sched_sem">
                                    <option>-SELECT SEM-</option>
                                    <option value="1st">1st</option>
                                    <option value="2nd">2nd</option> 
                                    <option value="summer">Summer</option> 
                                </select>   
                            </div>
                            <div class="col-md-3">
                                <label class="control-label">Select Faculty:</label>
                                <select class="form-control select2" id="sched_faculty">
                                    <option>-SELECT FACULTY-</option>
                                    <?php foreach($faculty as $r) echo '<option value="'.$r[7].'">'.$r[1].', '.$r[2].' '.$r[3].'</option>';?>
                                </select>
                            </div>
                            <div class="col-md-5">
                                <label class="control-label">Teaching Assignments:</label>
                                <select class="form-control" id="sched_load">
                                    <option>-SELECT TEACHING ASSIGNMENT-</option>
                                </select>    
                            </div>
                        </div>
                        <br>
                        <div class="row" id="div_by_faculty_b">
                            <div class="col-md-2" style="text-align: right; color: red;">
                                <p id="factype_id">Faculty Type:</p>
                            </div>
                            <div class="col-md-2" style="text-align: right;">
                                <p id="RLoad_id">Regular Load: </p>
                            </div>
                            <div class="col-md-2" style="text-align: right;">
                                <p id="PTLoad_id">Part-time Load: </p>
                            </div>
                            <div class="col-md-3" style="text-align: right;">
                                <p id="TSLoad_id">Temporary Substitution: </p>
                            </div>
                            <div class="col-md-2" style="text-align: right;">
                                <p id="units_used">Total Hours: </p>
                            </div>
                        </div>

                        <div class="row" id="div_by_section">
                            <div class="col-md-2">
                                <label class="control-label">Select A.Y.</label>
                                <select class="form-control select2" id="sec_acadyr">
                                    <option>-ACAD YEAR-</option>
                                    <?php 
                                        for ($i = date("Y"); $i > 1900; $i-- ){
                                            echo '<option value ="' .$i. '&#x2010;'. ($i+1).'">' .$i. '&#x2010;'. ($i+1) .  '</option>'; 
                                        }
                                    ?>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <label class="control-label">Semester</label>
                                <select class="form-control select2" id="sec_sem">
                                    <option>-SEM-</option>
                                    <option value="1st">1st</option>
                                    <option value="2nd">2nd</option> 
                                    <option value="summer">Summer</option> 
                                </select>   
                            </div>
                            <div class="col-md-3">
                                <label class="control-label">Select Course:</label>
                                <select class="form-control select2" id="sec_course">
                                    <option>-COURSE-</option>
                                    <?php foreach($courses as $r) echo '<option value="'.$r[4].'">'.$r[1].'</option>';?>
                                    </select>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <label class="control-label">Select Year and Section</label>
                                <select class="form-control select2" id="sec_yearsec">
                                    <option>-YEAR AND SECTION-</option>
                                </select>    
                            </div>
                            <div class="col-md-3">
                                <button style="margin-top: 25px; margin-left: 10px" type="button" class="btn btn-info">Add minor subjects</button>
                            </div>
                        </div>

                        <div class="row" id="div_by_room" >
                            <div class="col-md-2">
                                <label class="control-label">Select A.Y.</label>
                                <select class="form-control select2" id="room_acad_year">
                                    <option>-ACAD YEAR-</option>
                                    <?php 
                                        for ($i = date("Y"); $i > 1900; $i-- ){
                                            echo '<option value ="' .$i. '&#x2010;'. ($i+1).'">' .$i. '&#x2010;'. ($i+1) .  '</option>'; 
                                        }
                                    ?>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <label class="control-label">Semester</label>
                                <select class="form-control select2" id="room_sem">
                                    <option>-SEM-</option>
                                    <option value="1st">1st</option>
                                    <option value="2nd">2nd</option> 
                                    <option value="summer">Summer</option> 
                                </select>   
                            </div>
                            <div class="col-md-3">
                                <label class="control-label">Select Room:</label>
                                <select class="form-control select2" id="room_labs">
                                    <option>-ROOMS/LABS-</option>
                                </select>
                            </div>
                        </div>



                         <br><br><br>
                        <div  class="col-md-12" style="background-color: gray; height: 3px; margin-top: -5px;">

                        </div>
                        <br><br>

                        <div class="row">
                            <table id="new_sched" width='100%' cellspacing='0' cellpadding='0' style='border:1px #000000 solid;background:#FFFFFF;'>
<tr>
    <th width='12.5%' style='padding: 10px;border:1px #000000 solid;background:#D4D9E5;font-family:tahoma;font-size:11px;'>&nbsp;</th>
    <th width='12.5%' style='padding: 10px;border:1px #000000 solid;background:#D4D9E5;font-family:tahoma;font-size:11px;'>Monday</th>
    <th width='12.5%' style='padding: 10px;border:1px #000000 solid;background:#D4D9E5;font-family:tahoma;font-size:11px;'>Tuesday</th>
    <th width='12.5%' style='padding: 10px;border:1px #000000 solid;background:#D4D9E5;font-family:tahoma;font-size:11px;'>Wednesday</th>
    <th width='12.5%' style='padding: 10px;border:1px #000000 solid;background:#D4D9E5;font-family:tahoma;font-size:11px;'>Thursday</th>
    <th width='12.5%' style='padding: 10px;border:1px #000000 solid;background:#D4D9E5;font-family:tahoma;font-size:11px;'>Friday</th>
    <th width='12.5%' style='padding: 10px;border:1px #000000 solid;background:#D4D9E5;font-family:tahoma;font-size:11px;'>Saturday</th>
    <th width='12.5%' style='padding: 10px;border:1px #000000 solid;background:#D4D9E5;font-family:tahoma;font-size:11px;'>Sunday</th>
</tr>

<tr>
  <td rowspan='2' align='center' style='font-size:18px;border:1px #000000 solid;background:#D4D9E5;font-family:tahoma;'><font style='font-size:9px;'>07:00 AM</font><br>07:30 AM<br><font style='font-size:9px;'>07:59 AM</font></td>
  <td id="07_00_mon_d" width='12.5%' class="schedBorder" rowspan='1' ><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="m70a" value="07:00:00_mon"></button></td>
  <td id="07_00_tue_d" width='12.5%' class="schedBorder" rowspan='1' ><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="t70a" value="07:00:00_tue"></button></td>
  <td id="07_00_wed_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="w70a" value="07:00:00_wed"></button></td>
  <td id="07_00_thu_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="th70a" value="07:00:00_thu"></button></td>
  <td id="07_00_fri_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="f70a" value="07:00:00_fri"></button></td>
  <td id="07_00_sat_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="sa70a" value="07:00:00_sat"></button></td>
  <td id="07_00_sun_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="su70a" value="07:00:00_sun"></button></td>
</tr>

<tr>
    <td id="07_30_mon_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="m73a" value="07:30:00_mon"></button></td>
    <td id="07_30_tue_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="t73a" value="07:30:00_tue"></button></td>
    <td id="07_30_wed_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="w73a" value="07:30:00_wed"></button></td>
    <td id="07_30_thu_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="th73a" value="07:30:00_thu"></button></td>
    <td id="07_30_fri_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="f73a" value="07:30:00_fri"></button></td>
    <td id="07_00_sat_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="sa73a" value="07:30:00_sat"></button></td>
    <td id="07_00_sun_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="su73a" value="07:30:00_sun"></button></td>
</tr>

<tr>
  <td rowspan='2' align='center' style='font-size:18px;border:1px #000000 solid;background:#D4D9E5;font-family:tahoma;'><font style='font-size:9px;'>08:00 AM</font><br>08:30 AM<br><font style='font-size:9px;'>08:59 AM</font></td>
  <td id="08_00_mon_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="m80a" value="08:00:00_mon"></button></td>
  <td id="08_00_tue_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="t80a" value="08:00:00_tue"></button></td>
  <td id="08_00_wed_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="w80a" value="08:00:00_wed"></button></td>
  <td id="08_00_thu_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="th80a" value="08:00:00_thu"></button></td>
  <td id="08_00_fri_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="f80a" value="08:00:00_fri"></button></td>
  <td id="08_00_sat_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="sa80a" value="08:00:00_sat"></button></td>
  <td id="08_00_sun_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="su80a" value="08:00:00_sun"></button></td>
</tr>

<tr>
    <td id="08_30_mon_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="m83a" value="08:30:00_mon"></button></td>
    <td id="08_30_tue_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="t83a" value="08:30:00_tue"></button></td>
    <td id="08_30_wed_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="w83a" value="08:30:00_wed"></button></td>
    <td id="08_30_thu_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="th83a" value="08:30:00_thu"></button></td>
    <td id="08_30_fri_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="f83a" value="08:30:00_fri"></button></td>
    <td id="08_00_sat_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="sa83a" value="08:30:00_sat"></button></td>
    <td id="08_00_sun_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="su83a" value="08:30:00_sun"></button></td>
</tr>

<tr>
  <td rowspan='2' align='center' style='font-size:18px;border:1px #000000 solid;background:#D4D9E5;font-family:tahoma;'><font style='font-size:9px;'>09:00 AM</font><br>09:30 AM<br><font style='font-size:9px;'>09:59 AM</font></td>
  <td id="09_00_mon_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="m90a" value="09:00:00_mon"></button></td>
  <td id="09_00_tue_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="t90a" value="09:00:00_tue"></button></td>
  <td id="09_00_wed_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="w90a" value="09:00:00_wed"></button></td>
  <td id="09_00_thu_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="th90a" value="09:00:00_thu"></button></td>
  <td id="09_00_fri_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="f90a" value="09:00:00_fri"></button></td>
  <td id="09_00_sat_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="sa90a" value="09:00:00_sat"></button></td>
  <td id="09_00_sun_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="su90a" value="09:00:00_sun"></button></td>
</tr>

<tr>
    <td id="09_30_mon_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="m93a" value="09:30:00_mon"></button></td>
    <td id="09_30_tue_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="t93a" value="09:30:00_tue"></button></td>
    <td id="09_30_wed_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="w93a" value="09:30:00_wed"></button></td>
    <td id="09_30_thu_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="th93a" value="09:30:00_thu"></button></td>
    <td id="09_30_fri_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="f93a" value="09:30:00_fri"></button></td>
    <td id="09_00_sat_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="sa93a" value="09:30:00_sat"></button></td>
    <td id="09_00_sun_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="su93a" value="09:30:00_sun"></button></td>
</tr>

<tr>
  <td rowspan='2' align='center' style='font-size:18px;border:1px #000000 solid;background:#D4D9E5;font-family:tahoma;'><font style='font-size:9px;'>10:00 AM</font><br>10:30 AM<br><font style='font-size:9px;'>10:59 AM</font></td>
  <td id="10_00_mon_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="m100a" value="10:00:00_mon"></button></td>
  <td id="10_00_tue_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="t100a" value="10:00:00_tue"></button></td>
  <td id="10_00_wed_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="w100a" value="10:00:00_wed"></button></td>
  <td id="10_00_thu_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="th100a" value="10:00:00_thu"></button></td>
  <td id="10_00_fri_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="f100a" value="10:00:00_fri"></button></td>
  <td id="10_00_sat_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="sa100a" value="10:00:00_sat"></button></td>
  <td id="10_00_sun_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="su100a" value="10:00:00_sun"></button></td>
</tr>

<tr>
    <td id="10_30_mon_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="m103a" value="10:30:00_mon"></button></td>
    <td id="10_30_tue_d"  width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="t103a" value="10:30:00_tue"></button></td>
    <td id="10_30_wed_d"  width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="w103a" value="10:30:00_wed"></button></td>
    <td id="10_30_thu_d"  width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="th103a" value="10:30:00_thu"></button></td>
    <td id="10_30_fri_d"  width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="f103a" value="10:30:00_fri"></button></td>
    <td id="10_00_sat_d"  width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="sa103a" value="10:30:00_sat"></button></td>
    <td id="10_00_sun_d"  width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="su103a" value="10:30:00_sun"></button></td>
</tr>

<tr>
  <td rowspan='2' align='center' style='font-size:18px;border:1px #000000 solid;background:#D4D9E5;font-family:tahoma;'><font style='font-size:9px;'>11:00 AM</font><br>11:30 AM<br><font style='font-size:9px;'>11:59 AM</font></td>
  <td id="11_00_mon_d"  width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="m110a" value="11:00:00_mon"></button></td>
  <td id="11_00_tue_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="t110a" value="11:00:00_tue"></button></td>
  <td id="11_00_wed_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="w110a" value="11:00:00_wed"></button></td>
  <td id="11_00_thu_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="th110a" value="11:00:00_thu"></button></td>
  <td id="11_00_fri_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="f110a" value="11:00:00_fri"></button></td>
  <td id="11_00_sat_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="sa110a" value="11:00:00_sat"></button></td>
  <td id="11_00_sun_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="su110a" value="11:00:00_sun"></button></td>
</tr>

<tr>
    <td id="11_30_mon_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="m113a" value="11:30:00_mon"></button></td>
    <td id="11_30_tue_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="t113a" value="11:30:00_tue"></button></td>
    <td id="11_30_wed_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="w113a" value="11:30:00_wed"></button></td>
    <td id="11_30_thu_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="th113a" value="11:30:00_thu"></button></td>
    <td id="11_30_fri_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="f113a" value="11:30:00_fri"></button></td>
    <td id="11_00_sat_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="sa113a" value="11:30:00_sat"></button></td>
    <td id="11_00_sun_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="su113a" value="11:30:00_sun"></button></td>
</tr>

<tr>
  <td rowspan='2' align='center' style='font-size:18px;border:1px #000000 solid;background:#D4D9E5;font-family:tahoma;'><font style='font-size:9px;'>12:00 PM</font><br>12:30 PM<br><font style='font-size:9px;'>12:59 PM</font></td>
  <td id="12_00_mon_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="m120p" value="12:00:00_mon"></button></td>
  <td id="12_00_tue_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="t120p" value="12:00:00_tue"></button></td>
  <td id="12_00_wed_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="w120p" value="12:00:00_wed"></button></td>
  <td id="12_00_thu_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="th120p" value="12:00:00_thu"></button></td>
  <td id="12_00_fri_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="f120p" value="12:00:00_fri"></button></td>
  <td id="12_00_sat_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="sa120p" value="12:00:00_sat"></button></td>
  <td id="12_00_sun_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="su120p" value="12:00:00_sun"></button></td>
</tr>

<tr>
    <td id="12_30_mon_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="m123p" value="12:30:00_mon"></button></td>
    <td id="12_30_tue_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="t123p" value="12:30:00_tue"></button></td>
    <td id="12_30_wed_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="w123p" value="12:30:00_wed"></button></td>
    <td id="12_30_thu_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="th123p" value="12:30:00_thu"></button></td>
    <td id="12_30_fri_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="f123p" value="12:30:00_fri"></button></td>
    <td id="12_00_sat_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="sa123p" value="12:30:00_sat"></button></td>
    <td id="12_00_sun_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="su123p" value="12:30:00_sun"></button></td>
</tr>

<tr>
  <td rowspan='2' align='center' style='font-size:18px;border:1px #000000 solid;background:#D4D9E5;font-family:tahoma;'><font style='font-size:9px;'>01:00 PM</font><br>01:30 PM<br><font style='font-size:9px;'>01:59 PM</font></td>
  <td id="13_00_mon_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="m10p" value="13:00:00_mon"></button></td>
  <td id="13_00_tue_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="t10p" value="13:00:00_tue"></button></td>
  <td id="13_00_wed_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="w10p" value="13:00:00_wed"></button></td>
  <td id="13_00_thu_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="th10p" value="13:00:00_thu"></button></td>
  <td id="13_00_fri_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="f10p" value="13:00:00_fri"></button></td>
  <td id="13_00_sat_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="sa10p" value="13:00:00_sat"></button></td>
  <td id="13_00_sun_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="su10p" value="13:00:00_sun"></button></td>
</tr>

<tr>
    <td id="13_30_mon_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="m13p" value="13:30:00_mon"></button></td>
    <td id="13_30_tue_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="t13p" value="13:30:00_tue"></button></td>
    <td id="13_30_wed_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="w13p" value="13:30:00_wed"></button></td>
    <td id="13_30_thu_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="th13p" value="13:30:00_thu"></button></td>
    <td id="13_30_fri_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="f13p" value="13:30:00_fri"></button></td>
    <td id="13_00_sat_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="sa13p" value="13:30:00_sat"></button></td>
    <td id="13_00_sun_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="su13p" value="13:30:00_sun"></button></td>
</tr>

<tr>
  <td rowspan='2' align='center' style='font-size:18px;border:1px #000000 solid;background:#D4D9E5;font-family:tahoma;'><font style='font-size:9px;'>02:00 PM</font><br>02:30 PM<br><font style='font-size:9px;'>02:59 PM</font></td>
  <td id="14_00_mon_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="m20p" value="14:00:00_mon"></button></td>
  <td id="14_00_tue_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="t20p" value="14:00:00_tue"></button></td>
  <td id="14_00_wed_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="w20p" value="14:00:00_wed"></button></td>
  <td id="14_00_thu_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="th20p" value="14:00:00_thu"></button></td>
  <td id="14_00_fri_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="f20p" value="14:00:00_fri"></button></td>
  <td id="14_00_sat_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="sa20p" value="14:00:00_sat"></button></td>
  <td id="14_00_sun_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="su20p" value="14:00:00_sun"></button></td>
</tr>

<tr>
    <td id="14_30_mon_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="m23p" value="14:30:00_mon"></button></td>
    <td id="14_30_tue_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="t23p" value="14:30:00_tue"></button></td>
    <td id="14_30_wed_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="w23p" value="14:30:00_wed"></button></td>
    <td id="14_30_thu_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="th23p" value="14:30:00_thu"></button></td>
    <td id="14_30_fri_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="f23p" value="14:30:00_fri"></button></td>
    <td id="14_00_sat_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="sa23p" value="14:30:00_sat"></button></td>
    <td id="14_00_sun_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="su23p" value="14:30:00_sun"></button></td>
</tr>

<tr>
  <td rowspan='2' align='center' style='font-size:18px;border:1px #000000 solid;background:#D4D9E5;font-family:tahoma;'><font style='font-size:9px;'>03:00 PM</font><br>03:30 PM<br><font style='font-size:9px;'>03:59 PM</font></td>
  <td id="15_00_mon_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="m30p" value="15:00:00_mon"></button></td>
  <td id="15_00_tue_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="t30p" value="15:00:00_tue"></button></td>
  <td id="15_00_wed_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="w30p" value="15:00:00_wed"></button></td>
  <td id="15_00_thu_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="th30p" value="15:00:00_thu"></button></td>
  <td id="15_00_fri_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="f30p" value="15:00:00_fri"></button></td>
  <td id="15_00_sat_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="sa30p" value="15:00:00_sat"></button></td>
  <td id="15_00_sun_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="su30p" value="15:00:00_sun"></button></td>
</tr>

<tr>
    <td id="15_30_mon_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="m33p" value="15:30:00_mon"></button></td>
    <td id="15_30_tue_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="t33p" value="15:30:00_tue"></button></td>
    <td id="15_30_wed_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="w33p" value="15:30:00_wed"></button></td>
    <td id="15_30_thu_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="th33p" value="15:30:00_thu"></button></td>
    <td id="15_30_fri_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="f33p" value="15:30:00_fri"></button></td>
    <td id="15_00_sat_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="sa33p" value="15:30:00_sat"></button></td>
    <td id="15_00_sun_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="su33p" value="15:30:00_sun"></button></td>
</tr>

<tr>
  <td rowspan='2' align='center' style='font-size:18px;border:1px #000000 solid;background:#D4D9E5;font-family:tahoma;'><font style='font-size:9px;'>04:00 PM</font><br>04:30 PM<br><font style='font-size:9px;'>04:59 PM</font></td>
  <td id="16_00_mon_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="m40p" value="16:00:00_mon"></button></td>
  <td id="16_00_tue_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="t40p" value="16:00:00_tue"></button></td>
  <td id="16_00_wed_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="w40p" value="16:00:00_wed"></button></td>
  <td id="16_00_thu_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="th40p" value="16:00:00_thu"></button></td>
  <td id="16_00_fri_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="f40p" value="16:00:00_fri"></button></td>
  <td id="16_00_sat_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="sa40p" value="16:00:00_sat"></button></td>
  <td id="16_00_sun_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="su40p" value="16:00:00_sun"></button></td>
</tr>

<tr>
    <td id="16_30_mon_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="m43p" value="16:30:00_mon"></button></td>
    <td id="16_30_tue_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="t43p" value="16:30:00_tue"></button></td>
    <td id="16_30_wed_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="w43p" value="16:30:00_wed"></button></td>
    <td id="16_30_thu_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="th43p" value="16:30:00_thu"></button></td>
    <td id="16_30_fri_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="f43p" value="16:30:00_fri"></button></td>
    <td id="16_00_sat_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="sa43p" value="16:30:00_sat"></button></td>
    <td id="16_00_sun_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="su43p" value="16:30:00_sun"></button></td>
</tr>

<tr>
  <td rowspan='2' align='center' style='font-size:18px;border:1px #000000 solid;background:#D4D9E5;font-family:tahoma;'><font style='font-size:9px;'>05:00 PM</font><br>05:30 PM<br><font style='font-size:9px;'>05:59 PM</font></td>
  <td id="17_00_mon_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="m50p" value="17:00:00_mon"></button></td>
  <td id="17_00_tue_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="t50p" value="17:00:00_tue"></button></td>
  <td id="17_00_wed_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="w50p" value="17:00:00_wed"></button></td>
  <td id="17_00_thu_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="th50p" value="17:00:00_thu"></button></td>
  <td id="17_00_fri_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="f50p" value="17:00:00_fri"></button></td>
  <td id="17_00_sat_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="sa50p" value="17:00:00_sat"></button></td>
  <td id="17_00_sun_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="su50p" value="17:00:00_sun"></button></td>
</tr>

<tr>
    <td id="17_30_mon_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="m53p" value="17:30:00_mon"></button></td>
    <td id="17_30_tue_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="t53p" value="17:30:00_tue"></button></td>
    <td id="17_30_wed_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="w53p" value="17:30:00_wed"></button></td>
    <td id="17_30_thu_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="th53p" value="17:30:00_thu"></button></td>
    <td id="17_30_fri_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="f53p" value="17:30:00_fri"></button></td>
    <td id="17_00_sat_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="sa53p" value="17:30:00_sat"></button></td>
    <td id="17_00_sun_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="su53p" value="17:30:00_sun"></button></td>
</tr>

<tr>
  <td rowspan='2' align='center' style='font-size:18px;border:1px #000000 solid;background:#D4D9E5;font-family:tahoma;'><font style='font-size:9px;'>06:00 PM</font><br>06:30 PM<br><font style='font-size:9px;'>06:59 PM</font></td>
  <td id="18_00_mon_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="m60p" value="18:00:00_mon"></button></td>
  <td id="18_00_tue_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="t60p" value="18:00:00_tue"></button></td>
  <td id="18_00_wed_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="w60p" value="18:00:00_wed"></button></td>
  <td id="18_00_thu_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="th60p" value="18:00:00_thu"></button></td>
  <td id="18_00_fri_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="f60p" value="18:00:00_fri"></button></td>
  <td id="18_00_sat_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="sa60p" value="18:00:00_sat"></button></td>
  <td id="18_00_sun_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="su60p" value="18:00:00_sun"></button></td>
</tr>

<tr>
    <td width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="m63p" value="18:30:00_mon"></button></td>
    <td width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="t63p" value="18:30:00_tue"></button></td>
    <td width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="w63p" value="18:30:00_wed"></button></td>
    <td width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="th63p" value="18:30:00_thu"></button></td>
    <td width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="f63p" value="18:30:00_fri"></button></td>
    <td width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="sa63p" value="18:30:00_sat"></button></td>
    <td width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="su63p" value="18:30:00_sun"></button></td>
</tr>

<tr>
  <td rowspan='2' align='center' style='font-size:18px;border:1px #000000 solid;background:#D4D9E5;font-family:tahoma;'><font style='font-size:9px;'>07:00 PM</font><br>07:30 PM<br><font style='font-size:9px;'>07:59 PM</font></td>
  <td id="19_00_mon_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="m70p" value="19:00:00_mon"></button></td>
  <td id="19_00_tue_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="t70p" value="19:00:00_tue"></button></td>
  <td id="19_00_wed_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="w70p" value="19:00:00_wed"></button></td>
  <td id="19_00_thu_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="th70p" value="19:00:00_thu"></button></td>
  <td id="19_00_fri_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="f70p" value="19:00:00_fri"></button></td>
  <td id="19_00_sat_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="sa70p" value="19:00:00_sat"></button></td>
  <td id="19_00_sun_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="su70p" value="19:00:00_sun"></button></td>
</tr>

<tr>
    <td id="19_30_mon_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="m73p" value="19:30:00_mon"></button></td>
    <td id="19_30_tue_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="t73p" value="19:30:00_tue"></button></td>
    <td id="19_30_wed_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="w73p" value="19:30:00_wed"></button></td>
    <td id="19_30_thu_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="th73p" value="19:30:00_thu"></button></td>
    <td id="19_30_fri_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="f73p" value="19:30:00_fri"></button></td>
    <td id="19_00_sat_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="sa73p" value="19:30:00_sat"></button></td>
    <td id="19_00_sun_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="su73p" value="19:30:00_sun"></button></td>
</tr>

<tr>
  <td rowspan='2' align='center' style='font-size:18px;border:1px #000000 solid;background:#D4D9E5;font-family:tahoma;'><font style='font-size:9px;'>08:00 PM</font><br>08:30 PM<br><font style='font-size:9px;'>08:59 PM</font></td>
  <td id="20_00_mon_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="m80p" value="20:00:00_mon"></button></td>
  <td id="20_00_tue_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="t80p" value="20:00:00_tue"></button></td>
  <td id="20_00_wed_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="w80p" value="20:00:00_wed"></button></td>
  <td id="20_00_thu_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="th80p" value="20:00:00_thu"></button></td>
  <td id="20_00_fri_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="f80p" value="20:00:00_fri"></button></td>
  <td id="20_00_sat_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="sa80p" value="20:00:00_sat"></button></td>
  <td id="20_00_sun_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="su80p" value="20:00:00_sun"></button></td>
</tr>

<tr>
    <td id="20_30_mon_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="m83p" value="20:30:00_mon"></button></td>
    <td id="20_30_tue_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="t83p" value="20:30:00_tue"></button></td>
    <td id="20_30_wed_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="w83p" value="20:30:00_wed"></button></td>
    <td id="20_30_thu_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="th83p" value="20:30:00_thu"></button></td>
    <td id="20_30_fri_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="f83p" value="20:30:00_fri"></button></td>
    <td id="20_00_sat_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="sa83p" value="20:30:00_sat"></button></td>
    <td id="20_00_sun_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="su83p" value="20:30:00_sun"></button></td>
</tr>

<tr>
  <td rowspan='2' align='center' style='font-size:18px;border:1px #000000 solid;background:#D4D9E5;font-family:tahoma;'><font style='font-size:9px;'>09:00 PM</font><br>09:30 PM<br><font style='font-size:9px;'>09:59 PM</font></td>
  <td id="21_00_mon_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="m90p" value="21:00:00_mon"></button></td>
  <td id="21_00_tue_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="t90p" value="21:00:00_tue"></button></td>
  <td id="21_00_wed_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="w90p" value="21:00:00_wed"></button></td>
  <td id="21_00_thu_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="th90p" value="21:00:00_thu"></button></td>
  <td id="21_00_fri_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="f90p" value="21:00:00_fri"></button></td>
  <td id="21_00_sat_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="sa90p" value="21:00:00_sat"></button></td>
  <td id="21_00_sun_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="su90p" value="21:00:00_sun"></button></td>
</tr>

<tr>
    <td id="21_30_mon_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="m93p" value="21:30:00_mon"></button></td>
    <td id="21_30_tue_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="t93p" value="21:30:00_tue"></button></td>
    <td id="21_30_wed_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="w93p" value="21:30:00_wed"></button></td>
    <td id="21_30_thu_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="th93p" value="21:30:00_thu"></button></td>
    <td id="21_30_fri_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="f93p" value="21:30:00_fri"></button></td>
    <td id="21_00_sat_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="sa93p" value="21:30:00_sat"></button></td>
    <td id="21_00_sun_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="su93p" value="21:30:00_sun"></button></td>
</tr>
    </table>
</div>

                <br>
                <h3 style="color: red;">Conflict Results:</h3>
                        <div class="row">
                            <div class="col-md-12">
                                <textarea class="form-control" rows="5"></textarea>
                                <br><br><br>
                            </div>
                            <input type="hidden" name="hid_room" id="hid_room">
                            <input type="hidden"  name="hid_section" id="hid_section">
                            <input type="hidden"  name="hid_data" id="hid_data">
                        </div>

<div>
    <h2>Summary</h2>
</div>

<div class="table-responsive">
    <table id="tbl_sched_sum" class="table colored-table table-bordered inverse-tabl table-striped" style="margin-top: 50px;">
        <thead>
            <tr>
                <th>Subject Code</th>
                <th>Subject Description</th>
                <th>Units</th>
                <th width="150px">Year and Section</th>
                <th width="200px">Time</th>
                <th>Day/s</th>
                <th>Room</th>
                <th>Action</th>
            </tr>
        </thead>

         <tbody>

        </tbody>
    </table>

</div>
                   
                        </div>
            
                    </div>
                </div>
<a data-toggle="modal" href="#modalAddTime" id="openMod"></a>

<div class="modal fade bs-example-modal-lg" id="modalAddTime" tabindex="-1" role="dialog" aria-labelledby="modalAddTime" aria-hidden="true" style=" display: none;">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title">Teaching load breakdown</h4>
                    </div>
                    <div  class="col-md-12" style="background-color: gray; height: 3px; margin-top: -5px;">

                    </div>
                    <div class="modal-body">
                            <div class="col-md-12">
                              <div class="form-group col-md-6">
                                <h4><b>Subject Code:</b></h4><span id="lbl_subj_code"></span>
                              </div>
                              <div class="form-group col-md-6">
                                  <h4><b>Subject Description:</b></h4><span id="lbl_subj_desc"></span>
                              </div>
                            </div>
                            <div class="col-md-12">
                              <div class="form-group col-md-6">
                                <h4><b>Assigned Section:</b></h4><span id="lbl_section"></span>
                              </div>
                              <div class="col-md-6">
                                  <h4><b>Units:</b></h4><span id="lbl_units"></span>
                              </div>
                            </div>
                            <div class="col-md-12">
                              <div class="col-md-6">
                                <h4><b>Lecture Hours:</b></h4><span id="lbl_lechrs"></span>
                              </div>
                              <div class="col-md-6">
                                  <h4><b>Lab Hours:</b></h4><span id="lbl_labhrs"></span>
                              </div>
                            </div>
                            <!-- <div class="col-md-12">
                                <br>
                                <p style="color: red">WARNING: Once the generation of schedule starts, all existing schedule of the faculty member for this selected semester and academic year will be changed. Click 'Start' to begin the process.</p>
                            </div> -->
                    </div>
                    <div  class="col-md-12" style="background-color: gray; height: 3px; margin-top: -5px;">

                    </div>
                    <div class="modal-body">
                      <div class="col-md-12">
                        <div class="col-md-8">
                          <h4>Assign day, time and room</h4>
                        </div>
                        <div class="col-md-4" id="divsplit" style="text-align:right;">
                          <input style="margin-top: 15px;" type="checkbox" id="chk_split">
                          <label style="margin-top: 15px;" for="chk_split">Split hours</label>
                        </div>
                      </div>
                      <form id="add_sched_form" method="POST">
                      <div class="col-md-12" id="sched_a">
                        <div class="col-md-3">
                          <label class="control-label">Start time:</label>
                          <input type="time" id="starttime_a" name="start_time[]" class="form-control" required="">
                        </div>
                        <div class="col-md-3">
                          <label class="control-label">End time:</label>
                          <input type="time" id="endtime_a" name="end_time[]" readonly="" class="form-control"required="">
                        </div>
                        <div class="col-md-3">
                          <label class="control-label">Day:</label>
                          <select class="form-control" id="day_a" name="day[]" required="">
                            <option value="0">-Day-</option>
                            <option value="Monday">Monday</option>
                            <option value="Tuesday">Tuesday</option>
                            <option value="Wednesday">Wednesday</option>
                            <option value="Thursday">Thursday</option>
                            <option value="Friday">Friday</option>
                            <option value="Saturday">Saturday</option>
                            <option value="Sunday">Sunday</option>
                          </select>
                      </div>
                      <div class="col-md-3">
                          <label class="control-label">Lecture Room:</label>
                          <select class="form-control" id="rooms_a" name="rooms[]" required="">
                            
                          </select>
                          <br>
                        </div>

                    </div>
                    <div class="col-md-12" id="sched_b">
                        <div class="col-md-3">
                          <br>
                          <label class="control-label">Start time:</label>
                          <input type="time" id="starttime_b" name="start_time[]" class="form-control">
                        </div>
                        <div class="col-md-3">
                          <br>
                          <label class="control-label">End time:</label>
                          <input type="time" id="endtime_b" name="end_time[]" readonly="" class="form-control">
                        </div>
                        <div class="col-md-3">
                          <br>
                          <label class="control-label">Day:</label>
                          <select class="form-control" id="day_b" name="day[]">
                            <option value="0">-Day-</option>
                            <option value="Monday">Monday</option>
                            <option value="Tuesday">Tuesday</option>
                            <option value="Wednesday">Wednesday</option>
                            <option value="Thursday">Thursday</option>
                            <option value="Friday">Friday</option>
                            <option value="Saturday">Saturday</option>
                            <option value="Sunday">Sunday</option>
                          </select>
                      </div>
                      <div class="col-md-3">
                        <br>
                          <label class="control-label">Lecture Room:</label>
                          <select class="form-control" id="rooms_b"  name="rooms[]">
                            
                          </select>
                          <br>
                        </div>
                        
                      </div>
                      <div class="col-md-12" id="sched_lab">
                        <div class="col-md-3">
                          <br>
                          <label class="control-label">Start time (Lab):</label>
                          <input type="time" id="starttime_c" name="start_time[]" class="form-control">
                        </div>
                        <div class="col-md-3">
                          <br>
                          <label class="control-label">End time (Lab):</label>
                          <input type="time" id="endtime_c" name="end_time[]" readonly="" class="form-control">
                        </div>
                        <div class="col-md-3">
                          <br>
                          <label class="control-label">Day:</label>
                          <select class="form-control" id="day_c" name="lab_day">
                            <option value="0">-Day-</option>
                            <option value="Monday">Monday</option>
                            <option value="Tuesday">Tuesday</option>
                            <option value="Wednesday">Wednesday</option>
                            <option value="Thursday">Thursday</option>
                            <option value="Friday">Friday</option>
                            <option value="Saturday">Saturday</option>
                            <option value="Sunday">Sunday</option>
                          </select>
                      </div>
                      <div class="col-md-3">
                        <br>
                          <label class="control-label">Lab Room:</label>
                          <select class="form-control" id="rooms_c" name="rooms[]">
                          </select>
                          <br>
                        </div>
                        
                      </div>
                    <div class="modal-footer">
                            <button type="submit" class="btn btn-info waves-effect text-left">Save</button>
                    </div>
                  </form>
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
    <!-- PARTICLE SWARM OPTIMIZATION -->
    <script src="<?php echo base_url(); ?>assets/pso-js/src/pso.js"></script>
    <script type="text/javascript">

      var global_factype;
      var global_factypedesc;
      var global_labhour;
      var global_total_hrs;
      var global_reg_load;
      var global_pt_load; 
      var global_ts_load;
      var global_splitcontrol = 0;

      //FUNCTIONS

      function resetPlotForm(){
        $('.btn-success').removeClass().addClass('btn btn-default')
        $('.btn-default').text('');
      }

      function loadSchedTable(){

            var sem = $('#sched_sem').val();
            var acad_year = $('#sched_acad_year').val();
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

        function reflectSchedTable(){

            var sem = $('#sched_sem').val();
            var acad_year = $('#sched_acad_year').val();
            var fac_id = $('#sched_faculty').val();

             $.ajax({  
                url:"<?php echo base_url('Transaction/reflect_sched_table')?>", 
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

      function getFacultyLoads(){
        var fac_id =  $('#sched_faculty').val();
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
                        }
                    }

                   });
      }


      function showAvailRoom(day, start_time, end, dropdown_id){

            var sem = $('#sched_sem').val();
            var acad_year = $('#sched_acad_year').val();
            $.ajax({  
                url:"<?php echo base_url('Transaction/get_avail_rooms')?>", 
                method:"POST", 
                data:{sem:sem, day:day, acad_year:acad_year, start_time:start_time, end:end}, 
                dataType: "json",
                success:function(data){

                     var len = data.length;
                     $('#'+ dropdown_id).empty();
                     $('#'+ dropdown_id).append('<option value = "0">-Room-</option>');
                     for(var i = 0 ; i < len ; i++){
                        $('#'+ dropdown_id).append('<option value = "' + data[i][0]+ '">' + data[i][1] + '</option>');
                     }
                },  
                error: function (data) {
                alert(JSON.stringify(data));
                }
           });
        }

        function showAvailLab(day, start_time, end, dropdown_id){

            var sem = $('#sched_sem').val();
            var acad_year = $('#sched_acad_year').val();
            $.ajax({  
                url:"<?php echo base_url('Transaction/get_avail_labs')?>", 
                method:"POST", 
                data:{sem:sem, day:day, acad_year:acad_year, start_time:start_time, end:end}, 
                dataType: "json",
                success:function(data){

                     var len = data.length;
                     $('#'+ dropdown_id).empty();
                     $('#'+ dropdown_id).append('<option value = "0">-Room-</option>');
                     for(var i = 0 ; i < len ; i++){
                        $('#'+ dropdown_id).append('<option value = "' + data[i][0]+ '">' + data[i][1] + '</option>');
                     }
                },  
                error: function (data) {
                alert(JSON.stringify(data));
                }
           });
        }

      function getFacultyType(){
        var fac_id =  $('#sched_faculty').val();
        $.ajax({
                method:"POST",
                url:"<?php echo base_url('Transaction/get_faculty_type')?>",
                dataType: "json",
                data:{fac_id:fac_id},
                success:function(data)
                {   
                   global_factype = data[0][0];
                   global_factypedesc = data[0][1];
                }, 
                async:false

               });
      }

      function getUnitsUsed(){

            var sem = $('#sched_sem').val();
            var acad_year = $('#sched_acad_year').val();
            var fac_id = $('#sched_faculty').val();

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

      function showTeachAssignModal(){
        var load_id = $('#sched_load').val();

            $.ajax({
                    method:"POST",
                    url:"<?php echo base_url('Transaction/get_subj_details')?>",
                    dataType: "json",
                    data:{load_id:load_id},
                    success:function(data)
                    {   
                      $('#lbl_subj_code').empty();
                      $('#lbl_subj_desc').empty();
                      $('#lbl_section').empty();
                      $('#lbl_units').empty();
                      $('#lbl_lechrs').empty();
                      $('#lbl_labhrs').empty();
                      $('#lbl_subj_code').append(data[0][0]);
                      $('#lbl_subj_desc').append(data[0][1]);
                      $('#lbl_section').append(data[0][2]);
                      $('#lbl_units').append(data[0][3]);
                      $('#lbl_lechrs').append(data[0][4]);
                      $('#lbl_labhrs').append(data[0][5]);
                      var temp = data[0][5];
                      global_labhour = temp;
                      if(temp == 3){
                        $('#sched_lab').show();
                        $('#divsplit').hide();
                        $('#starttime_b').removeAttr('required');
                        $('#endtime_b').removeAttr('required');
                        $('#day_b').removeAttr('required');
                        $('#rooms_b').removeAttr('required');
                        $('#starttime_c').prop('required', true);
                        $('#endtime_c').prop('required', true);
                        $('#day_c').prop('required', true);
                        $('#rooms_c').prop('required', true);
                      }
                      else{

                          if(global_splitcontrol == 1){
                              $('#starttime_c').removeAttr('required');
                              $('#endtime_c').removeAttr('required');
                              $('#day_c').removeAttr('required');
                              $('#rooms_c').removeAttr('required');
                              $('#starttime_b').prop('required', true);
                              $('#endtime_b').prop('required', true);
                              $('#day_b').prop('required', true);
                              $('#rooms_c').prop('required', true);
                          }
                          else{
                              $('#starttime_b').removeAttr('required');
                              $('#endtime_b').removeAttr('required');
                              $('#day_b').removeAttr('required');
                              $('#rooms_b').removeAttr('required');
                          }
                      }
                      $('#openMod').trigger('click');
                    },
                    async:false

                   });
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

                    $('button[type="button"][value="'+final_val+'"]').removeClass().addClass("btn btn-success");                 
                    $('button[type="button"][value="'+final_val+'"]').addClass("btn btn-success");
                    $('button[type="button"][value="'+final_val2+'"]').removeClass().addClass("btn btn-success");                 
                    $('button[type="button"][value="'+final_val2+'"]').addClass("btn btn-success");
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
                    final_val2 = looper + ':00:00' + day_id;
                    $('button[type="button"][value="'+final_val2+'"]').removeClass();
                    $('button[type="button"][value="'+final_val2+'"]').addClass("btn btn-success");
                $('button[type="button"][value="'+final_val2+'"]').text(''); 
                }

                // 
                // if (looper < 10){

                //     last_box = '0' + looper + ':' + temp_min_end + ':00' + day_id; 
                //     last_text = looper + ':'
                // }
                // else{
                //     last_box = looper + ':' + temp_min_end + ':00' + day_id; 
                // }

                // $('button[type="button"][value="'+last_box+'"]').removeClass().addClass("btn btn-default"); 
                // $('button[type="button"][value="'+last_box+'"]').text('');

            }
        }

      //SELECT2
      $(".select2").select2();
      $('.selectpicker').selectpicker();

      $(document).ready(function(){

        $('#sched_b').hide();
        // $('#divsplit').hide();
        $('#sched_lab').hide();
        $('#div_by_room').hide();
        $('#div_by_section').hide();

        $('#starttime_a').on('blur',function(){
          if(global_factype == 3){
              if(global_labhour == 3)
              {

                var temp_start = $('#starttime_a').val();
                var added_value = '';
                var adder;
                var end_value;
                if (temp_start > '07:29' && temp_start < '09:01' || temp_start > '11:59' && temp_start < '13:31' || temp_start > '16:29' && temp_start < '18:01' ){
                  var temp_start_hour = parseInt(temp_start[0] + temp_start[1]);
                  var temp_start_mins = temp_start[3] + temp_start[4];
                  
                  adder = 2;

                  temp_start_hour += adder;
                  if (temp_start_hour < 10){
                    end_value = '0' + temp_start_hour + ':' + temp_start_mins;
                  }
                  else{
                    end_value = temp_start_hour + ':' + temp_start_mins;
                  }

                  $('#endtime_a').val(end_value);
                }

                else{
                  alert('Loads allowed for Designees are only:\n-7:30am - 9:00am\n-12:00nn - 1:30pm\n-4:30pm - 6:00pm');
                  $('#starttime_a').val('');
                  $('#endtime_a').val('');
                }

              }
              else
              {
                var temp_start = $('#starttime_a').val();
                var added_value = '';
                var adder;
                var end_value;
                if (temp_start > '07:29' && temp_start < '09:01' || temp_start > '11:59' && temp_start < '13:31' || temp_start > '16:29' && temp_start < '18:01' ){
                  var temp_start_hour = parseInt(temp_start[0] + temp_start[1]);
                  var temp_start_mins = temp_start[3] + temp_start[4];
                  if($('#chk_split').prop("checked")){
                    if(temp_start_mins == '30'){
                      adder = 2;
                      temp_start_mins = '00';
                    }
                    else{
                      adder = 1;
                      temp_start_mins = '30';
                    }
                  }
                  else{
                    adder = 3;
                  }

                  temp_start_hour += adder;
                  if (temp_start_hour < 10){
                    end_value = '0' + temp_start_hour + ':' + temp_start_mins;
                  }
                  else{
                    end_value = temp_start_hour + ':' + temp_start_mins;
                  }

                  $('#endtime_a').val(end_value);
                }

                else{
                  alert('Loads allowed for Designees are only:\n-7:30am - 9:00am\n-12:00nn - 1:30pm\n-4:30pm - 6:00pm');
                  $('#starttime_a').val('');
                  $('#endtime_a').val('');
                }
              }
          }
          else
          { 
            if(global_labhour == 3)
            {
              var temp_start = $('#starttime_a').val();
              var added_value = '';
              var adder;
              var end_value;
              var temp_start_hour = parseInt(temp_start[0] + temp_start[1]);
              var temp_start_mins = temp_start[3] + temp_start[4];
              adder = 2;
              temp_start_hour += adder;
              if (temp_start_hour < 10){
                end_value = '0' + temp_start_hour + ':' + temp_start_mins;
              }
              else{
                end_value = temp_start_hour + ':' + temp_start_mins;
              }

              $('#endtime_a').val(end_value);
            }
            else
            {
              var temp_start = $('#starttime_a').val();
              var added_value = '';
              var adder;
              var end_value;
              var temp_start_hour = parseInt(temp_start[0] + temp_start[1]);
              var temp_start_mins = temp_start[3] + temp_start[4];
                if($('#chk_split').prop("checked")){
                  if(temp_start_mins == '30'){
                    adder = 2;
                    temp_start_mins = '00';
                  }
                  else{
                    adder = 1;
                    temp_start_mins = '30';
                  }
                }
                else{
                  adder = 3;
                }

                temp_start_hour += adder;
                if (temp_start_hour < 10){
                  end_value = '0' + temp_start_hour + ':' + temp_start_mins;
                }
                else{
                  end_value = temp_start_hour + ':' + temp_start_mins;
                }

                $('#endtime_a').val(end_value);

            }

          }
        });

        $('#starttime_b').on('blur',function(){
          if(global_factype == 3){
              var temp_start = $('#starttime_b').val();
              var added_value = '';
              var adder;
              var end_value;
              if (temp_start > '07:29' && temp_start < '09:01' || temp_start > '11:59' && temp_start < '13:31' || temp_start > '16:29' && temp_start < '18:01' ){
                var temp_start_hour = parseInt(temp_start[0] + temp_start[1]);
                var temp_start_mins = temp_start[3] + temp_start[4];

                  if(temp_start_mins == '30'){
                    adder = 2;
                    temp_start_mins = '00';
                  }
                  else{
                    adder = 1;
                    temp_start_mins = '30';
                  }

                temp_start_hour += adder;
                if (temp_start_hour < 10){
                  end_value = '0' + temp_start_hour + ':' + temp_start_mins;
                }
                else{
                  end_value = temp_start_hour + ':' + temp_start_mins;
                }

                $('#endtime_b').val(end_value);
              }

              else{
                alert('Loads allowed for Designees are only:\n-7:30am - 9:00am\n-12:00nn - 1:30pm\n-4:30pm - 6:00pm');
                $('#starttime_b').val('');
                $('#endtime_b').val('');
              }
          }
          else
          {
              var temp_start = $('#starttime_b').val();
              var added_value = '';
              var adder;
              var end_value;
              var temp_start_hour = parseInt(temp_start[0] + temp_start[1]);
              var temp_start_mins = temp_start[3] + temp_start[4];

              if(temp_start_mins == '30'){
                adder = 2;
                temp_start_mins = '00';
              }
              else{
                adder = 1;
                temp_start_mins = '30';
              }

              temp_start_hour += adder;
              if (temp_start_hour < 10){
                end_value = '0' + temp_start_hour + ':' + temp_start_mins;
              }
              else{
                end_value = temp_start_hour + ':' + temp_start_mins;
              }

              $('#endtime_b').val(end_value);
          }

        });

        $('#starttime_c').on('blur',function(){
          if(global_factype == 3){
              var temp_start = $('#starttime_c').val();
              var added_value = '';
              var adder;
              var end_value;
              if (temp_start > '07:29' && temp_start < '09:01' || temp_start > '11:59' && temp_start < '13:31' || temp_start > '16:29' && temp_start < '18:01' ){
                var temp_start_hour = parseInt(temp_start[0] + temp_start[1]);
                var temp_start_mins = temp_start[3] + temp_start[4];

                adder = 3;
                temp_start_hour += adder;
                if (temp_start_hour < 10){
                  end_value = '0' + temp_start_hour + ':' + temp_start_mins;
                }
                else{
                  end_value = temp_start_hour + ':' + temp_start_mins;
                }

                $('#endtime_c').val(end_value);
              }

              else{
                alert('Time is not valid since the faculty is a Designee');
                $('#starttime_c').val('');
                $('#endtime_c').val('');
              }
          }
          else
          {
              var temp_start = $('#starttime_c').val();
              var added_value = '';
              var adder;
              var end_value;
              var temp_start_hour = parseInt(temp_start[0] + temp_start[1]);
              var temp_start_mins = temp_start[3] + temp_start[4];

              adder = 3;

              temp_start_hour += adder;
              if (temp_start_hour < 10){
                end_value = '0' + temp_start_hour + ':' + temp_start_mins;
              }
              else{
                end_value = temp_start_hour + ':' + temp_start_mins;
              }

              $('#endtime_c').val(end_value);
          }

        });

        $('#sched_faculty').on('change', function(){
            getFacultyType();
            getFacultyLoads();
            getUnitsUsed();
            loadSchedTable();
            reflectSchedTable();
            resetPlotForm();
        });

        $('#sched_acad_year').on('change', function(){
            getFacultyType();
            getFacultyLoads();
            getUnitsUsed();
            loadSchedTable();
            reflectSchedTable();
            resetPlotForm();
        });

        $('#sched_sem').on('change', function(){
            getFacultyType();
            getFacultyLoads();
            getUnitsUsed();
            loadSchedTable();
            reflectSchedTable();
            resetPlotForm();
        });

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
        });

        $('#day_b').on('change', function(){
            var day = $('#day_b').val();
            var start = $('#starttime_b').val();
            var end = $('#endtime_b').val();
            showAvailRoom(day, start, end,'rooms_b');
        });

         $('#day_c').on('change', function(){
            var day = $('#day_c').val();
            var start = $('#starttime_c').val();
            var end = $('#endtime_c').val();
            showAvailLab(day, start, end,'rooms_c');
        });

        //CHANGE VIEW DROP DOWN
        $('#change_view').on('change',function(){
          var temp_val = $('#change_view').val();
          if(temp_val == 1){
            $('#div_by_faculty_a').show();
            $('#div_by_faculty_b').show();
            $('#div_by_section').hide();
            $('#div_by_room').hide();
          }
          else if(temp_val == 2){
            $('#div_by_faculty_a').hide();
            $('#div_by_faculty_b').hide();
            $('#div_by_section').show();
            $('#div_by_room').hide();
          }
          else{
            $('#div_by_faculty_a').hide();
            $('#div_by_faculty_b').hide();
            $('#div_by_section').hide();
            $('#div_by_room').show();
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
              'load_type': 'R'
            };

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
                  reflectSchedTable();
                  getFacultyLoads();
                  loadSchedTable();
                  getUnitsUsed();
                }
            },
             error: function (data) {
                    alert(JSON.stringify(data));
            }
            });  
        });
      });

    </script>

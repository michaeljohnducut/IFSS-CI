<div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                         <h4 class="page-title">New Schedule</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="#">Transaction</a></li>
                            <li class="active">Create New Schedule</li>
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
                                <h2>Create new schedule</h2>
                            </div>
                            <div class="col-md-3">
                                <button style="margin-top: 10px; margin-left: 90px;" type="button" class="btn btn-success"="">AUTO GENERATE SCHEDULE</button>
                            </div>
                            <div  class="col-md-12" style="background-color: gray; height: 3px; margin-top: -5px;">

                            </div>
                            <br>
                        </div>
                        <div class="row">
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
                                <label class="control-label">Select Subject:</label>
                                <select class="form-control select2" id="sched_subj">
                                    <option>--Subjects--</option>
                                </select>    
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-2" style="text-align: right; color: red;">
                                <p>Load Count:</p>
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
                                <p id="units_used">Total Units Used: </p>
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
  <td id="07_00_mon_d" width='12.5%' class="schedBorder" rowspan='1' ><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="m70a" value="07:00:00_mon">7:00AM</button></td>
  <td id="07_00_tue_d" width='12.5%' class="schedBorder" rowspan='1' ><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="t70a" value="07:00:00_tue">7:00AM</button></td>
  <td id="07_00_wed_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="w70a" value="07:00:00_wed">7:00AM</button></td>
  <td id="07_00_thu_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="th70a" value="07:00:00_thu">7:00AM</button></td>
  <td id="07_00_fri_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="f70a" value="07:00:00_fri">7:00AM</button></td>
  <td id="07_00_sat_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="sa70a" value="07:00:00_sat">7:00AM</button></td>
  <td id="07_00_sun_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="su70a" value="07:00:00_sun">7:00AM</button></td>
</tr>

<tr>
    <td id="07_30_mon_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="m73a" value="07:30:00_mon">7:30AM</button></td>
    <td id="07_30_tue_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="t73a" value="07:30:00_tue">7:30AM</button></td>
    <td id="07_30_wed_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="w73a" value="07:30:00_wed">7:30AM</button></td>
    <td id="07_30_thu_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="th73a" value="07:30:00_thu">7:30AM</button></td>
    <td id="07_30_fri_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="f73a" value="07:30:00_fri">7:30AM</button></td>
    <td id="07_00_sat_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="sa73a" value="07:30:00_sat">7:30AM</button></td>
    <td id="07_00_sun_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="su73a" value="07:30:00_sun">7:30AM</button></td>
</tr>

<tr>
  <td rowspan='2' align='center' style='font-size:18px;border:1px #000000 solid;background:#D4D9E5;font-family:tahoma;'><font style='font-size:9px;'>08:00 AM</font><br>08:30 AM<br><font style='font-size:9px;'>08:59 AM</font></td>
  <td id="08_00_mon_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="m80a" value="08:00:00_mon">8:00AM</button></td>
  <td id="08_00_tue_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="t80a" value="08:00:00_tue">8:00AM</button></td>
  <td id="08_00_wed_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="w80a" value="08:00:00_wed">8:00AM</button></td>
  <td id="08_00_thu_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="th80a" value="08:00:00_thu">8:00AM</button></td>
  <td id="08_00_fri_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="f80a" value="08:00:00_fri">8:00AM</button></td>
  <td id="08_00_sat_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="sa80a" value="08:00:00_sat">8:00AM</button></td>
  <td id="08_00_sun_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="su80a" value="08:00:00_sun">8:00AM</button></td>
</tr>

<tr>
    <td id="08_30_mon_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="m83a" value="08:30:00_mon">8:30AM</button></td>
    <td id="08_30_tue_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="t83a" value="08:30:00_tue">8:30AM</button></td>
    <td id="08_30_wed_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="w83a" value="08:30:00_wed">8:30AM</button></td>
    <td id="08_30_thu_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="th83a" value="08:30:00_thu">8:30AM</button></td>
    <td id="08_30_fri_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="f83a" value="08:30:00_fri">8:30AM</button></td>
    <td id="08_00_sat_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="sa83a" value="08:30:00_sat">8:30AM</button></td>
    <td id="08_00_sun_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="su83a" value="08:30:00_sun">8:30AM</button></td>
</tr>

<tr>
  <td rowspan='2' align='center' style='font-size:18px;border:1px #000000 solid;background:#D4D9E5;font-family:tahoma;'><font style='font-size:9px;'>09:00 AM</font><br>09:30 AM<br><font style='font-size:9px;'>09:59 AM</font></td>
  <td id="09_00_mon_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="m90a" value="09:00:00_mon">9:00AM</button></td>
  <td id="09_00_tue_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="t90a" value="09:00:00_tue">9:00AM</button></td>
  <td id="09_00_wed_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="w90a" value="09:00:00_wed">9:00AM</button></td>
  <td id="09_00_thu_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="th90a" value="09:00:00_thu">9:00AM</button></td>
  <td id="09_00_fri_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="f90a" value="09:00:00_fri">9:00AM</button></td>
  <td id="09_00_sat_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="sa90a" value="09:00:00_sat">9:00AM</button></td>
  <td id="09_00_sun_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="su90a" value="09:00:00_sun">9:00AM</button></td>
</tr>

<tr>
    <td id="09_30_mon_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="m93a" value="09:30:00_mon">9:30AM</button></td>
    <td id="09_30_tue_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="t93a" value="09:30:00_tue">9:30AM</button></td>
    <td id="09_30_wed_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="w93a" value="09:30:00_wed">9:30AM</button></td>
    <td id="09_30_thu_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="th93a" value="09:30:00_thu">9:30AM</button></td>
    <td id="09_30_fri_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="f93a" value="09:30:00_fri">9:30AM</button></td>
    <td id="09_00_sat_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="sa93a" value="09:30:00_sat">9:30AM</button></td>
    <td id="09_00_sun_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="su93a" value="09:30:00_sun">9:30AM</button></td>
</tr>

<tr>
  <td rowspan='2' align='center' style='font-size:18px;border:1px #000000 solid;background:#D4D9E5;font-family:tahoma;'><font style='font-size:9px;'>10:00 AM</font><br>10:30 AM<br><font style='font-size:9px;'>10:59 AM</font></td>
  <td id="10_00_mon_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="m100a" value="10:00:00_mon">10:00AM</button></td>
  <td id="10_00_tue_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="t100a" value="10:00:00_tue">10:00AM</button></td>
  <td id="10_00_wed_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="w100a" value="10:00:00_wed">10:00AM</button></td>
  <td id="10_00_thu_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="th100a" value="10:00:00_thu">10:00AM</button></td>
  <td id="10_00_fri_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="f100a" value="10:00:00_fri">10:00AM</button></td>
  <td id="10_00_sat_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="sa100a" value="10:00:00_sat">10:00AM</button></td>
  <td id="10_00_sun_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="su100a" value="10:00:00_sun">10:00AM</button></td>
</tr>

<tr>
    <td id="10_30_mon_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="m103a" value="10:30:00_mon">10:30AM</button></td>
    <td id="10_30_tue_d"  width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="t103a" value="10:30:00_tue">10:30AM</button></td>
    <td id="10_30_wed_d"  width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="w103a" value="10:30:00_wed">10:30AM</button></td>
    <td id="10_30_thu_d"  width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="th103a" value="10:30:00_thu">10:30AM</button></td>
    <td id="10_30_fri_d"  width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="f103a" value="10:30:00_fri">10:30AM</button></td>
    <td id="10_00_sat_d"  width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="sa103a" value="10:30:00_sat">10:30AM</button></td>
    <td id="10_00_sun_d"  width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="su103a" value="10:30:00_sun">10:30AM</button></td>
</tr>

<tr>
  <td rowspan='2' align='center' style='font-size:18px;border:1px #000000 solid;background:#D4D9E5;font-family:tahoma;'><font style='font-size:9px;'>11:00 AM</font><br>11:30 AM<br><font style='font-size:9px;'>11:59 AM</font></td>
  <td id="11_00_mon_d"  width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="m110a" value="11:00:00_mon">11:00AM</button></td>
  <td id="11_00_tue_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="t110a" value="11:00:00_tue">11:00AM</button></td>
  <td id="11_00_wed_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="w110a" value="11:00:00_wed">11:00AM</button></td>
  <td id="11_00_thu_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="th110a" value="11:00:00_thu">11:00AM</button></td>
  <td id="11_00_fri_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="f110a" value="11:00:00_fri">11:00AM</button></td>
  <td id="11_00_sat_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="sa110a" value="11:00:00_sat">11:00AM</button></td>
  <td id="11_00_sun_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="su110a" value="11:00:00_sun">11:00AM</button></td>
</tr>

<tr>
    <td id="11_30_mon_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="m113a" value="11:30:00_mon">11:30AM</button></td>
    <td id="11_30_tue_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="t113a" value="11:30:00_tue">11:30AM</button></td>
    <td id="11_30_wed_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="w113a" value="11:30:00_wed">11:30AM</button></td>
    <td id="11_30_thu_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="th113a" value="11:30:00_thu">11:30AM</button></td>
    <td id="11_30_fri_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="f113a" value="11:30:00_fri">11:30AM</button></td>
    <td id="11_00_sat_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="sa113a" value="11:30:00_sat">11:30AM</button></td>
    <td id="11_00_sun_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="su113a" value="11:30:00_sun">11:30AM</button></td>
</tr>

<tr>
  <td rowspan='2' align='center' style='font-size:18px;border:1px #000000 solid;background:#D4D9E5;font-family:tahoma;'><font style='font-size:9px;'>12:00 PM</font><br>12:30 PM<br><font style='font-size:9px;'>12:59 PM</font></td>
  <td id="12_00_mon_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="m120p" value="12:00:00_mon">12:00NN</button></td>
  <td id="12_00_tue_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="t120p" value="12:00:00_tue">12:00NN</button></td>
  <td id="12_00_wed_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="w120p" value="12:00:00_wed">12:00NN</button></td>
  <td id="12_00_thu_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="th120p" value="12:00:00_thu">12:00NN</button></td>
  <td id="12_00_fri_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="f120p" value="12:00:00_fri">12:00NN</button></td>
  <td id="12_00_sat_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="sa120p" value="12:00:00_sat">12:00NN</button></td>
  <td id="12_00_sun_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="su120p" value="12:00:00_sun">12:00NN</button></td>
</tr>

<tr>
    <td id="12_30_mon_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="m123p" value="12:30:00_mon">12:30NN</button></td>
    <td id="12_30_tue_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="t123p" value="12:30:00_tue">12:30NN</button></td>
    <td id="12_30_wed_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="w123p" value="12:30:00_wed">12:30NN</button></td>
    <td id="12_30_thu_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="th123p" value="12:30:00_thu">12:30NN</button></td>
    <td id="12_30_fri_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="f123p" value="12:30:00_fri">12:30NN</button></td>
    <td id="12_00_sat_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="sa123p" value="12:30:00_sat">12:30NN</button></td>
    <td id="12_00_sun_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="su123p" value="12:30:00_sun">12:30NN</button></td>
</tr>

<tr>
  <td rowspan='2' align='center' style='font-size:18px;border:1px #000000 solid;background:#D4D9E5;font-family:tahoma;'><font style='font-size:9px;'>01:00 PM</font><br>01:30 PM<br><font style='font-size:9px;'>01:59 PM</font></td>
  <td id="13_00_mon_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="m10p" value="13:00:00_mon">1:00PM</button></td>
  <td id="13_00_tue_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="t10p" value="13:00:00_tue">1:00PM</button></td>
  <td id="13_00_wed_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="w10p" value="13:00:00_wed">1:00PM</button></td>
  <td id="13_00_thu_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="th10p" value="13:00:00_thu">1:00PM</button></td>
  <td id="13_00_fri_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="f10p" value="13:00:00_fri">1:00PM</button></td>
  <td id="13_00_sat_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="sa10p" value="13:00:00_sat">1:00PM</button></td>
  <td id="13_00_sun_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="su10p" value="13:00:00_sun">1:00PM</button></td>
</tr>

<tr>
    <td id="13_30_mon_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="m13p" value="13:30:00_mon">1:30PM</button></td>
    <td id="13_30_tue_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="t13p" value="13:30:00_tue">1:30PM</button></td>
    <td id="13_30_wed_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="w13p" value="13:30:00_wed">1:30PM</button></td>
    <td id="13_30_thu_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="th13p" value="13:30:00_thu">1:30PM</button></td>
    <td id="13_30_fri_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="f13p" value="13:30:00_fri">1:30PM</button></td>
    <td id="13_00_sat_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="sa13p" value="13:30:00_sat">1:30PM</button></td>
    <td id="13_00_sun_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="su13p" value="13:30:00_sun">1:30PM</button></td>
</tr>

<tr>
  <td rowspan='2' align='center' style='font-size:18px;border:1px #000000 solid;background:#D4D9E5;font-family:tahoma;'><font style='font-size:9px;'>02:00 PM</font><br>02:30 PM<br><font style='font-size:9px;'>02:59 PM</font></td>
  <td id="14_00_mon_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="m20p" value="14:00:00_mon">2:00PM</button></td>
  <td id="14_00_tue_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="t20p" value="14:00:00_tue">2:00PM</button></td>
  <td id="14_00_wed_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="w20p" value="14:00:00_wed">2:00PM</button></td>
  <td id="14_00_thu_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="th20p" value="14:00:00_thu">2:00PM</button></td>
  <td id="14_00_fri_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="f20p" value="14:00:00_fri">2:00PM</button></td>
  <td id="14_00_sat_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="sa20p" value="14:00:00_sat">2:00PM</button></td>
  <td id="14_00_sun_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="su20p" value="14:00:00_sun">2:00PM</button></td>
</tr>

<tr>
    <td id="14_30_mon_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="m23p" value="14:30:00_mon">2:30PM</button></td>
    <td id="14_30_tue_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="t23p" value="14:30:00_tue">2:30PM</button></td>
    <td id="14_30_wed_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="w23p" value="14:30:00_wed">2:30PM</button></td>
    <td id="14_30_thu_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="th23p" value="14:30:00_thu">2:30PM</button></td>
    <td id="14_30_fri_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="f23p" value="14:30:00_fri">2:30PM</button></td>
    <td id="14_00_sat_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="sa23p" value="14:30:00_sat">2:30PM</button></td>
    <td id="14_00_sun_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="su23p" value="14:30:00_sun">2:30PM</button></td>
</tr>

<tr>
  <td rowspan='2' align='center' style='font-size:18px;border:1px #000000 solid;background:#D4D9E5;font-family:tahoma;'><font style='font-size:9px;'>03:00 PM</font><br>03:30 PM<br><font style='font-size:9px;'>03:59 PM</font></td>
  <td id="15_00_mon_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="m30p" value="15:00:00_mon">3:00PM</button></td>
  <td id="15_00_tue_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="t30p" value="15:00:00_tue">3:00PM</button></td>
  <td id="15_00_wed_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="w30p" value="15:00:00_wed">3:00PM</button></td>
  <td id="15_00_thu_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="th30p" value="15:00:00_thu">3:00PM</button></td>
  <td id="15_00_fri_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="f30p" value="15:00:00_fri">3:00PM</button></td>
  <td id="15_00_sat_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="sa30p" value="15:00:00_sat">3:00PM</button></td>
  <td id="15_00_sun_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="su30p" value="15:00:00_sun">3:00PM</button></td>
</tr>

<tr>
    <td id="15_30_mon_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="m33p" value="15:30:00_mon">3:30PM</button></td>
    <td id="15_30_tue_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="t33p" value="15:30:00_tue">3:30PM</button></td>
    <td id="15_30_wed_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="w33p" value="15:30:00_wed">3:30PM</button></td>
    <td id="15_30_thu_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="th33p" value="15:30:00_thu">3:30PM</button></td>
    <td id="15_30_fri_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="f33p" value="15:30:00_fri">3:30PM</button></td>
    <td id="15_00_sat_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="sa33p" value="15:30:00_sat">3:30PM</button></td>
    <td id="15_00_sun_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="su33p" value="15:30:00_sun">3:30PM</button></td>
</tr>

<tr>
  <td rowspan='2' align='center' style='font-size:18px;border:1px #000000 solid;background:#D4D9E5;font-family:tahoma;'><font style='font-size:9px;'>04:00 PM</font><br>04:30 PM<br><font style='font-size:9px;'>04:59 PM</font></td>
  <td id="16_00_mon_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="m40p" value="16:00:00_mon">4:00PM</button></td>
  <td id="16_00_tue_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="t40p" value="16:00:00_tue">4:00PM</button></td>
  <td id="16_00_wed_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="w40p" value="16:00:00_wed">4:00PM</button></td>
  <td id="16_00_thu_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="th40p" value="16:00:00_thu">4:00PM</button></td>
  <td id="16_00_fri_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="f40p" value="16:00:00_fri">4:00PM</button></td>
  <td id="16_00_sat_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="sa40p" value="16:00:00_sat">4:00PM</button></td>
  <td id="16_00_sun_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="su40p" value="16:00:00_sun">4:00PM</button></td>
</tr>

<tr>
    <td id="16_30_mon_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="m43p" value="16:30:00_mon">4:30PM</button></td>
    <td id="16_30_tue_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="t43p" value="16:30:00_tue">4:30PM</button></td>
    <td id="16_30_wed_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="w43p" value="16:30:00_wed">4:30PM</button></td>
    <td id="16_30_thu_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="th43p" value="16:30:00_thu">4:30PM</button></td>
    <td id="16_30_fri_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="f43p" value="16:30:00_fri">4:30PM</button></td>
    <td id="16_00_sat_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="sa43p" value="16:30:00_sat">4:30PM</button></td>
    <td id="16_00_sun_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="su43p" value="16:30:00_sun">4:30PM</button></td>
</tr>

<tr>
  <td rowspan='2' align='center' style='font-size:18px;border:1px #000000 solid;background:#D4D9E5;font-family:tahoma;'><font style='font-size:9px;'>05:00 PM</font><br>05:30 PM<br><font style='font-size:9px;'>05:59 PM</font></td>
  <td id="17_00_mon_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="m50p" value="17:00:00_mon">5:00PM</button></td>
  <td id="17_00_tue_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="t50p" value="17:00:00_tue">5:00PM</button></td>
  <td id="17_00_wed_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="w50p" value="17:00:00_wed">5:00PM</button></td>
  <td id="17_00_thu_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="th50p" value="17:00:00_thu">5:00PM</button></td>
  <td id="17_00_fri_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="f50p" value="17:00:00_fri">5:00PM</button></td>
  <td id="17_00_sat_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="sa50p" value="17:00:00_sat">5:00PM</button></td>
  <td id="17_00_sun_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="su50p" value="17:00:00_sun">5:00PM</button></td>
</tr>

<tr>
    <td id="17_30_mon_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="m53p" value="17:30:00_mon">5:30PM</button></td>
    <td id="17_30_tue_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="t53p" value="17:30:00_tue">5:30PM</button></td>
    <td id="17_30_wed_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="w53p" value="17:30:00_wed">5:30PM</button></td>
    <td id="17_30_thu_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="th53p" value="17:30:00_thu">5:30PM</button></td>
    <td id="17_30_fri_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="f53p" value="17:30:00_fri">5:30PM</button></td>
    <td id="17_00_sat_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="sa53p" value="17:30:00_sat">5:30PM</button></td>
    <td id="17_00_sun_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="su53p" value="17:30:00_sun">5:30PM</button></td>
</tr>

<tr>
  <td rowspan='2' align='center' style='font-size:18px;border:1px #000000 solid;background:#D4D9E5;font-family:tahoma;'><font style='font-size:9px;'>06:00 PM</font><br>06:30 PM<br><font style='font-size:9px;'>06:59 PM</font></td>
  <td id="18_00_mon_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="m60p" value="18:00:00_mon">6:00PM</button></td>
  <td id="18_00_tue_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="t60p" value="18:00:00_tue">6:00PM</button></td>
  <td id="18_00_wed_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="w60p" value="18:00:00_wed">6:00PM</button></td>
  <td id="18_00_thu_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="th60p" value="18:00:00_thu">6:00PM</button></td>
  <td id="18_00_fri_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="f60p" value="18:00:00_fri">6:00PM</button></td>
  <td id="18_00_sat_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="sa60p" value="18:00:00_sat">6:00PM</button></td>
  <td id="18_00_sun_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="su60p" value="18:00:00_sun">6:00PM</button></td>
</tr>

<tr>
    <td width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="m63p" value="18:30:00_mon">6:30PM</button></td>
    <td width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="t63p" value="18:30:00_tue">6:30PM</button></td>
    <td width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="w63p" value="18:30:00_wed">6:30PM</button></td>
    <td width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="th63p" value="18:30:00_thu">6:30PM</button></td>
    <td width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="f63p" value="18:30:00_fri">6:30PM</button></td>
    <td width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="sa63p" value="18:30:00_sat">6:30PM</button></td>
    <td width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="su63p" value="18:30:00_sun">6:30PM</button></td>
</tr>

<tr>
  <td rowspan='2' align='center' style='font-size:18px;border:1px #000000 solid;background:#D4D9E5;font-family:tahoma;'><font style='font-size:9px;'>07:00 PM</font><br>07:30 PM<br><font style='font-size:9px;'>07:59 PM</font></td>
  <td id="19_00_mon_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="m70p" value="19:00:00_mon">7:00PM</button></td>
  <td id="19_00_tue_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="t70p" value="19:00:00_tue">7:00PM</button></td>
  <td id="19_00_wed_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="w70p" value="19:00:00_wed">7:00PM</button></td>
  <td id="19_00_thu_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="th70p" value="19:00:00_thu">7:00PM</button></td>
  <td id="19_00_fri_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="f70p" value="19:00:00_fri">7:00PM</button></td>
  <td id="19_00_sat_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="sa70p" value="19:00:00_sat">7:00PM</button></td>
  <td id="19_00_sun_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="su70p" value="19:00:00_sun">7:00PM</button></td>
</tr>

<tr>
    <td id="19_30_mon_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="m73p" value="19:30:00_mon">7:30PM</button></td>
    <td id="19_30_tue_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="t73p" value="19:30:00_tue">7:30PM</button></td>
    <td id="19_30_wed_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="w73p" value="19:30:00_wed">7:30PM</button></td>
    <td id="19_30_thu_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="th73p" value="19:30:00_thu">7:30PM</button></td>
    <td id="19_30_fri_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="f73p" value="19:30:00_fri">7:30PM</button></td>
    <td id="19_00_sat_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="sa73p" value="19:30:00_sat">7:30PM</button></td>
    <td id="19_00_sun_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="su73p" value="19:30:00_sun">7:30PM</button></td>
</tr>

<tr>
  <td rowspan='2' align='center' style='font-size:18px;border:1px #000000 solid;background:#D4D9E5;font-family:tahoma;'><font style='font-size:9px;'>08:00 PM</font><br>08:30 PM<br><font style='font-size:9px;'>08:59 PM</font></td>
  <td id="20_00_mon_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="m80p" value="20:00:00_mon">8:00PM</button></td>
  <td id="20_00_tue_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="t80p" value="20:00:00_tue">8:00PM</button></td>
  <td id="20_00_wed_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="w80p" value="20:00:00_wed">8:00PM</button></td>
  <td id="20_00_thu_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="th80p" value="20:00:00_thu">8:00PM</button></td>
  <td id="20_00_fri_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="f80p" value="20:00:00_fri">8:00PM</button></td>
  <td id="20_00_sat_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="sa80p" value="20:00:00_sat">8:00PM</button></td>
  <td id="20_00_sun_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="su80p" value="20:00:00_sun">8:00PM</button></td>
</tr>

<tr>
    <td id="20_30_mon_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="m83p" value="20:30:00_mon">8:30PM</button></td>
    <td id="20_30_tue_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="t83p" value="20:30:00_tue">8:30PM</button></td>
    <td id="20_30_wed_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="w83p" value="20:30:00_wed">8:30PM</button></td>
    <td id="20_30_thu_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="th83p" value="20:30:00_thu">8:30PM</button></td>
    <td id="20_30_fri_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="f83p" value="20:30:00_fri">8:30PM</button></td>
    <td id="20_00_sat_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="sa83p" value="20:30:00_sat">8:30PM</button></td>
    <td id="20_00_sun_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="su83p" value="20:30:00_sun">8:30PM</button></td>
</tr>

<tr>
  <td rowspan='2' align='center' style='font-size:18px;border:1px #000000 solid;background:#D4D9E5;font-family:tahoma;'><font style='font-size:9px;'>09:00 PM</font><br>09:30 PM<br><font style='font-size:9px;'>09:59 PM</font></td>
  <td id="21_00_mon_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="m90p" value="21:00:00_mon">9:00PM</button></td>
  <td id="21_00_tue_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="t90p" value="21:00:00_tue">9:00PM</button></td>
  <td id="21_00_wed_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="w90p" value="21:00:00_wed">9:00PM</button></td>
  <td id="21_00_thu_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="th90p" value="21:00:00_thu">9:00PM</button></td>
  <td id="21_00_fri_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="f90p" value="21:00:00_fri">9:00PM</button></td>
  <td id="21_00_sat_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="sa90p" value="21:00:00_sat">9:00PM</button></td>
  <td id="21_00_sun_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="su90p" value="21:00:00_sun">9:00PM</button></td>
</tr>

<tr>
    <td id="21_30_mon_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="m93p" value="21:30:00_mon">9:30PM</button></td>
    <td id="21_30_tue_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="t93p" value="21:30:00_tue">9:30PM</button></td>
    <td id="21_30_wed_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="w93p" value="21:30:00_wed">9:30PM</button></td>
    <td id="21_30_thu_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="th93p" value="21:30:00_thu">9:30PM</button></td>
    <td id="21_30_fri_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="f93p" value="21:30:00_fri">9:30PM</button></td>
    <td id="21_00_sat_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="sa93p" value="21:30:00_sat">9:30PM</button></td>
    <td id="21_00_sun_d" width='12.5%' class="schedBorder" rowspan='1'><button type="button" class="btn btn-default" style="width:100%; height: 40px;" id="su93p" value="21:30:00_sun">9:30PM</button></td>
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
            </tr>
        </thead>

         <tbody>

        </tbody>
    </table>

</div>
                   
                        </div>
            
                    </div>
                </div>

 

<div class="modal fade bs-example-modal-lg" id="modalSelectParam" tabindex="-1" role="dialog" aria-labelledby="modalSelectParam" aria-hidden="true" style="margin-top: 30px;">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header" style="margin-top: 30px;">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title">Section and Room Selection</h4>
                    </div>
                    <div  class="col-md-12" style="background-color: gray; height: 3px; margin-top: -5px;">

                    </div>
                    <div class="modal-body">
                        <form method="POST" enctype="multipart/form-data" id="addSchedForm">
                            <div class="form-group col-md-6">
                                <label class="control-label">Select Section:</label>
                                <select class="form-control" id="avail_sections" required="">
                                    <option>--Available Sections--</option>
                                </select>                                
                            </div>
                            <div class="form-group col-md-6">
                                    <label class="control-label">Select Room:</label>
                                    <select class="form-control" id="avail_rooms" required="">
                                        <option>--Available Rooms--</option>
                                    </select>
                            </div>

                            <input type="hidden" name="hid_start" id="hid_start">
                            <input type="hidden" name="hid_end" id="hid_end">
                            <input type="hidden" name="hid_units_used" id="hid_units_used">
                        <div class="modal-footer">
                            <input type="hidden" name="hid_day" id="hid_day">
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" onclick="resetForm1()">Reset</button>
                            <button type="submit" name="btnAddSched" id="btnAddSched" class="btn btn-success waves-effect text-left">Add to schedule</button>
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
    <script type="text/javascript">

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

        //INITIALLY GETS PROFESSOR'S SCHEDULE BEFORE SEETING TO TABLE
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

        //CHANGES PLOTTING FORM COLOR TO GREEN
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
                var min_temp = temp_min_start = arr[ctr][4][3] + arr[ctr][4][4];

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
                        alert(first_btn + ' ' + second_btn + ' ' + third_btn); 
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
                        alert(first_btn + ' ' + second_btn + ' ' + third_btn); 
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

        //LISTS FACULTY MEMBER'S LOAD COUNT
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
                    
                    if (data[0][1] == null){

                        $('#units_used').empty();
                        $('#RLoad_id').empty();
                        $('#PTLoad_id').empty();
                        $('#TSLoad_id').empty();
                        $('#units_used').append('Total Units Used: ');
                        $('#RLoad_id').append('Regular Load: ');
                        $('#PTLoad_id').append('Part-time Load: ');
                        $('#TSLoad_id').append('Temporary Substitution: ');
                        $('#hid_units_used').val(data[0][1]);
                    }
                    else{

                        $('#units_used').empty();
                        $('#RLoad_id').empty();
                        $('#units_used').append('Total Units Used: ' + data[0][1]);
                        $('#RLoad_id').append('Regular Load: ' + data[0][2]);

                        if(data[0][3] == null){
                            $('#PTLoad_id').empty();
                            $('#TSLoad_id').empty();
                            $('#PTLoad_id').append('Part-time Load: ');
                            $('#TSLoad_id').append('Temporary Substitution: ');
                        }
                        else if(data[0][4] == null){
                            $('#TSLoad_id').empty();
                            $('#TSLoad_id').append('Temporary Substitution: ');
                        }

                        else{
                            $('#units_used').empty();
                            $('#RLoad_id').empty();
                            $('#PTLoad_id').empty();
                            $('#TSLoad_id').empty();
                            $('#units_used').append('Total Units Used: ' + data[0][1]);
                            $('#RLoad_id').append('Regular Load: ' + data[0][2]);
                            $('#PTLoad_id').append('Part-time Load: ' + data[0][3]);
                            $('#TSLoad_id').append('Temporary Substitution: ' + data[0][4]);
                            $('#hid_units_used').val(data[0][1]);
                                }
                    }
                    
                },
                error: function (data) {
                // alert(JSON.stringify(data));
                }
           });

        }

        //GETS PROFESSOR'S PREFERRED SUBJ
        function getProfSubj(){

            var sem = $('#sched_sem').val();
            var acad_year = $('#sched_acad_year').val();
            var fac_id = $('#sched_faculty').val();

            $.ajax({  
                url:"<?php echo base_url('Transaction/get_prof_subj')?>", 
                method:"POST", 
                data:{fac_id:fac_id, acad_year:acad_year, sem:sem}, 
                dataType: "json",
                success:function(data){
                    var len = data.length;
                     $("#sched_subj").empty();  //RESETS SUBJECTS FOR FACULTY
                     $("#sched_subj").append('<option value = "0">--Subjects--</option>');
                     for( var i = 0; i<len; i++){

                            var id = data[i][0];
                            var code = data[i][1];
                            var name = data[i][2];   
                            $("#sched_subj").append("<option value='"+id+"'>"+code+" - "+name+"</option>");
                        }
                },
                error: function (data) {
                alert(JSON.stringify(data));
                }
           });

        }

        //INITIALLY GETS THE HOURS OF THE SUBJECTS
        function getSubjHours(day, start, btn_id){

            var id = $('#sched_subj').val();
            var subj_details = {};
            var temp_day = day; 
            var temp_start = start;
            var temp_id = btn_id;

           $.ajax({  
                url:"<?php echo base_url('Maintenance/view_subjects')?>", 
                method:"POST",  
                data:'subj_code='+id,  
                dataType: "json",
                success:function(data){    
                    subj_details[0] = data[0][3];   //UNITS
                    subj_details[1] = data[0][5];   //LECTURE HOURS
                    subj_details[2] = data[0][4];   //LAB HOURS
                    setToTable(subj_details, temp_day, temp_start, temp_id);   //CALLS FUNCTION
                },
                error: function (data) {
                    alert(JSON.stringify(data));
                }
           }); 
        }

        //FUNCTION TO PLOT THE SUBJECT IN THE TABLE
        function setToTable(arr, day, start, id){

            var units = arr[0];
            var lec_hrs = arr[1];
            var lab_hrs = arr[2];
            var start_time = start;
            var temp_hour = start[0] + start[1];
            var added_hour = parseInt(temp_hour) + parseInt(lec_hrs) + parseInt(lab_hrs);
            var end_time = added_hour + ':' + start[3] + start[4] + ':00';
            var temp_day = '';
            switch(day){
                case 'mon':
                        temp_day = 'Monday';
                        break;
                case 'tue': 
                        temp_day = 'Tuesday';
                        break;
                case 'wed': 
                        temp_day = 'Wednesday';
                        break;
                case 'thu': 
                        temp_day = 'Thursday';
                        break;
                case 'fri':
                        temp_day = 'Friday';
                        break; 
                case 'sat': 
                        temp_day = 'Saturday';
                        break;
                default: 
                        temp_day = 'Sunday';
            }
            $('#hid_start').val(start_time); 
            $('#hid_end').val(end_time);
            $('#hid_day').val(temp_day);

            showAvailSections();
            showAvailRoom(temp_day, start_time, end_time);
           $('#modalSelectParam').modal('show'); //SHOWS MODAL WHERE USER CAN SELECT AVAIL ROOMS AND LABS


        }


        //FUNCTION TO GET THE AVAILABLE ROOMS FOR THE CHOSEN TIME AND SUBJECT
        function showAvailRoom(day, start_time, end){

            var sem = $('#sched_sem').val();
            var acad_year = $('#sched_acad_year').val();
            $.ajax({  
                url:"<?php echo base_url('Transaction/get_avail_rooms')?>", 
                method:"POST", 
                data:{sem:sem, day:day, acad_year:acad_year, start_time:start_time, end:end}, 
                dataType: "json",
                success:function(data){

                     var len = data.length;
                     $("#avail_rooms").empty(); 
                     $("#avail_rooms").append('<option value = "0">--Available Rooms--</option>');

                     for( var i = 0; i<len; i++){

                        var opt_val = data[i][0];
                        var opt_name = data[i][1];
                        $("#avail_rooms").append("<option value='"+opt_val+"'>"+opt_name +"</option>");
                        }
                },
                error: function (data) {
                alert(JSON.stringify(data));
                }
           });
        }

        //FUNCTION TO GET THE AVAILABLE SECTION FOR THE CHOSEN TIME AND SUBJECT
        function showAvailSections(){

            var subj_id = $('#sched_subj').val();
            var sem = $('#sched_sem').val();
            var acad_year = $('#sched_acad_year').val();
            $.ajax({  
                url:"<?php echo base_url('Transaction/get_avail_sections')?>", 
                method:"POST", 
                data:{subj_id:subj_id, sem:sem, acad_year:acad_year}, 
                dataType: "json",
                success:function(data){
                     var len = data.length;
                    // alert(len);
                     $("#avail_sections").empty(); 
                     $("#avail_sections").append('<option value = "0">--Available Sections--</option>');

                     for( var i = 0; i<len; i++){

                            var id = data[i][1];
                            var section = data[i][0] + ' ' + data[i][2][0] + ' - ' + data[i][3]; 
                            $("#avail_sections").append("<option value='"+id+"'>"+section +"</option>");
                        }
                },
                error: function (data) {
                alert(JSON.stringify(data));
                }
           });
        } 

         function getPrefTime(){

            var sem = $('#sched_sem').val();
            var acad_year = $('#sched_acad_year').val();
            var fac_id = $('#sched_faculty').val();

            $.ajax({  
                url:"<?php echo base_url('Transaction/get_pref_time')?>", 
                method:"POST", 
                data:{fac_id:fac_id, acad_year:acad_year, sem:sem}, 
                dataType: "json",
                success:function(data){

                    reflectPrefTime(data);

                },
                error: function (data) {
                alert(JSON.stringify(data));
                }
           });
        }

        function resetPlottingForm(){

            var ctr = 0; 
            var day_val = '';
            var final_val = '';
            var hour_loop = 0;
            var no_mins_val = ''; 
            var with_mins_val = '';
            var btn_text_a = '';
            var btn_text_b = '';
            var aft_temp = 0;

            for (ctr = 0 ; ctr < 7 ; ctr ++){

                switch (ctr){
                    case 0:
                        day_val = '_mon';
                        break;

                    case 1:
                        day_val = '_tue';
                        break;

                    case 2:
                        day_val = '_wed';
                        break;

                    case 3:
                        day_val = '_thu';
                        break;

                    case 4:
                        day_val = '_fri';
                        break;

                    case 5:
                        day_val = '_sat';
                        break;

                    case 6:
                        day_val = '_sun';
                        break;

                    default:
                        day_val = '';
                }

                for (hour_loop = 7 ; hour_loop <= 21 ; hour_loop++){

                    if (hour_loop < 10){
                        no_mins_val = '0' + hour_loop + ':00:00' + day_val;
                        with_mins_val = '0' + hour_loop + ':30:00' + day_val;
                        btn_text_a = hour_loop + ':00AM';
                        btn_text_b = hour_loop + ':30AM'; 
                    }
                    else{
                        no_mins_val =  hour_loop + ':00:00' + day_val;
                        with_mins_val = hour_loop + ':30:00' + day_val;
                        btn_text_a = hour_loop + ':00AM';
                        btn_text_b = hour_loop + ':30AM'; 

                        if (hour_loop == 12){
                            btn_text_a = hour_loop + ':00NN';
                            btn_text_b = hour_loop + ':30NN'; 
                        }
                        else if (hour_loop >12){
                            aft_temp = hour_loop; 
                            aft_temp -= 12;
                            btn_text_a = aft_temp + ':00PM';
                            btn_text_b = aft_temp + ':30PM'; 
                        }
                    }

                     $('button[type="button"][value="'+no_mins_val+'"]').removeClass().addClass("btn btn-default"); 
                     $('button[type="button"][value="'+with_mins_val+'"]').removeClass().addClass("btn btn-default"); 
                     $('button[type="button"][value="'+no_mins_val+'"]').text(btn_text_a);
                     $('button[type="button"][value="'+with_mins_val+'"]').text(btn_text_b);

                    var no_mins_val = ''; 
                    var with_mins_val = '';
                    var btn_text_a = '';
                    var btn_text_b = '';

                }


            }
        }

        function reflectPrefTime(arr){  //CHANGES THE BUTTON COLORS TO GREEN BASED FROM TIME PREFERENCES

            var len = arr.length;
            var ctr = 0;
            var day = '';
            var start_time = '';
            var end_time = '';
            var id = '';
            var id2 = '';

            for (ctr = 0 ; ctr < len ; ctr++){

                day = arr[ctr][0]; 
                start_time = arr[ctr][1];
                end_time = arr[ctr][2];

                switch(day){
                    case 'Monday':
                        id += 'm';
                        id2 += 'm';
                        break; 

                    case 'Tuesday':
                        id += 't';
                        id2 += 't';
                        break; 

                    case 'Wednesday':
                        id += 'w';
                        id2 += 'w';
                        break; 

                    case 'Thursday':
                        id += 'th';
                        id2 += 'th';
                        break; 

                    case 'Friday':
                        id += 'f';
                        id2 += 'f';
                        break; 

                    case 'Saturday':
                        id += 'sa';
                        id2 += 'sa';
                        break; 

                    default:
                        id += 'su';
                }

                if (start_time == '07:30:00' && end_time == '12:00:00'){

                    $('#'+ id + '73a').removeClass("btn btn-default").addClass("btn btn-info");               
                    $('#'+ id + '73a').addClass("btn btn-info");  

                    $('#'+ id + '80a').removeClass("btn btn-default").addClass("btn btn-info");                 
                    $('#'+ id + '80a').addClass("btn btn-info");  

                    $('#'+ id + '83a').removeClass("btn btn-default").addClass("btn btn-info");                 
                    $('#'+ id + '83a').addClass("btn btn-info");  

                    $('#'+ id + '90a').removeClass("btn btn-default").addClass("btn btn-info");                 
                    $('#'+ id + '90a').addClass("btn btn-info");

                    $('#'+ id + '93a').removeClass("btn btn-default").addClass("btn btn-info");                 
                    $('#'+ id + '93a').addClass("btn btn-info");  

                    $('#'+ id + '100a').removeClass("btn btn-default").addClass("btn btn-info");                 
                    $('#'+ id + '100a').addClass("btn btn-info");  

                    $('#'+ id + '103a').removeClass("btn btn-default").addClass("btn btn-info");                 
                    $('#'+ id + '103a').addClass("btn btn-info");  

                    $('#'+ id + '110a').removeClass("btn btn-default").addClass("btn btn-info");                 
                    $('#'+ id + '110a').addClass("btn btn-info");  

                    $('#'+ id + '113a').removeClass("btn btn-default").addClass("btn btn-info");                 
                    $('#'+ id + '113a').addClass("btn btn-info");  

                    $('#'+ id + '120p').removeClass("btn btn-default").addClass("btn btn-info");                 
                    $('#'+ id + '120p').addClass("btn btn-info");  

                 }

                else if (start_time == '12:00:00' && end_time == '06:00:00'){

                    $('#'+ id + '120p').removeClass("btn btn-default").addClass("btn btn-info");                 
                    $('#'+ id + '120p').addClass("btn btn-info");  

                    $('#'+ id + '123p').removeClass("btn btn-default").addClass("btn btn-info");                 
                    $('#'+ id + '123p').addClass("btn btn-info");  

                    $('#'+ id + '10p').removeClass("btn btn-default").addClass("btn btn-info");                 
                    $('#'+ id + '10p').addClass("btn btn-info");  

                    $('#'+ id + '13p').removeClass("btn btn-default").addClass("btn btn-info");                 
                    $('#'+ id + '13p').addClass("btn btn-info");  

                    $('#'+ id + '20p').removeClass("btn btn-default").addClass("btn btn-info");                 
                    $('#'+ id + '20p').addClass("btn btn-info");  

                    $('#'+ id + '23p').removeClass("btn btn-default").addClass("btn btn-info");                 
                    $('#'+ id + '23p').addClass("btn btn-info");  

                    $('#'+ id + '30p').removeClass("btn btn-default").addClass("btn btn-info");                 
                    $('#'+ id + '30p').addClass("btn btn-info");  

                    $('#'+ id + '33p').removeClass("btn btn-default").addClass("btn btn-info");                 
                    $('#'+ id + '33p').addClass("btn btn-info");  

                    $('#'+ id + '40p').removeClass("btn btn-default").addClass("btn btn-info");                 
                    $('#'+ id + '40p').addClass("btn btn-info");  

                    $('#'+ id + '43p').removeClass("btn btn-default").addClass("btn btn-info");                 
                    $('#'+ id + '43p').addClass("btn btn-info");  

                    $('#'+ id + '50p').removeClass("btn btn-default").addClass("btn btn-info");                 
                    $('#'+ id + '50p').addClass("btn btn-info");  

                    $('#'+ id + '53p').removeClass("btn btn-default").addClass("btn btn-info");                 
                    $('#'+ id + '53p').addClass("btn btn-info");  

                    $('#'+ id + '60p').removeClass("btn btn-default").addClass("btn btn-info");                 
                    $('#'+ id + '60p').addClass("btn btn-info");  

                }

                else if (start_time == '06:00:00' && end_time == '09:00:00'){

                    $('#'+ id + '60p').removeClass("btn btn-default").addClass("btn btn-info");                 
                    $('#'+ id + '60p').addClass("btn btn-info");  

                    $('#'+ id + '63p').removeClass("btn btn-default").addClass("btn btn-info");                 
                    $('#'+ id + '63p').addClass("btn btn-info");  

                    $('#'+ id + '70p').removeClass("btn btn-default").addClass("btn btn-info");                 
                    $('#'+ id + '70p').addClass("btn btn-info");  

                    $('#'+ id + '73p').removeClass("btn btn-default").addClass("btn btn-info");                 
                    $('#'+ id + '73p').addClass("btn btn-info");  

                    $('#'+ id + '80p').removeClass("btn btn-default").addClass("btn btn-info");                 
                    $('#'+ id + '80p').addClass("btn btn-info");  

                    $('#'+ id + '83p').removeClass("btn btn-default").addClass("btn btn-info");                 
                    $('#'+ id + '83p').addClass("btn btn-info");  

                    $('#'+ id + '90p').removeClass("btn btn-default").addClass("btn btn-info");                 
                    $('#'+ id + '90p').addClass("btn btn-info");  

                    $('#'+ id + '93p').removeClass("btn btn-default").addClass("btn btn-info");                 
                    $('#'+ id + '93p').addClass("btn btn-info");  
                  
                }

                id = '';

            }
        }

        $(document).ready(function(){
            //SELECT2
            $(".select2").select2();
            $('.selectpicker').selectpicker();

            //ADDING SCHEDULES
            $('#addSchedForm').on("submit", function(event)
            {   
                var temp_room = $('#avail_rooms').val();
                var temp_subj = $('#sched_subj').val();
                var temp_start = $('#hid_start').val();
                var temp_end = $('#hid_end').val();
                var temp_section = $('#avail_sections').val();
                var temp_day = $('#hid_day').val();
                var temp_acadyr = $('#sched_acad_year').val();
                var temp_sem = $('#sched_sem').val();
                var temp_faculty = $('#sched_faculty').val();
                var total_units = $('#hid_units_used').val();
                var parsed_total = parseInt(total_units);
                var temp_load = '';

                if (total_units < 15){
                    temp_load = 'R';
                }
                else if (total_units >= 15 && total_units < 27){
                    temp_load = 'PT';
                }
                else if (total_units >= 27){
                    temp_load = 'TS';   
                }

                event.preventDefault();  
                $.ajax({  
                url:"<?php echo base_url('Transaction/add_to_sched')?>",  
                method:"POST",
                data:{temp_room:temp_room, temp_subj:temp_subj, temp_start:temp_start, temp_end:temp_end, temp_section:temp_section, temp_day:temp_day, temp_acadyr:temp_acadyr, temp_sem:temp_sem, temp_faculty:temp_faculty, temp_load:temp_load},
                success:function(data)
                { 
                    if(data == 'INSERTED')
                    {
                        $('#modalSelectParam').modal('hide');
                        swal("Success!", "Added to schedule!", "success");
                        $('#avail_sections').val('0');
                        $('#avail_rooms').val('0');
                        loadSchedTable();
                        getUnitsUsed();
                        reflectSchedTable();
                    }

                    if(data == 'NOT INSERTED')
                    {
                       swal("Not Added!", "Something went wrong", "error");
                    }

                    if(data == 'EXISTING')
                    {
                       swal("CONFLICT!", "Schedules overlap", "error");
                    }
                }
                });  
            });

            //FACULTY MEMBER ON CHANGE
            $('#sched_faculty').on('change',function(){
                $('.btn-info').removeClass("btn-info").addClass("btn-default");                 
                $('.btn-info').addClass("btn-default"); 
                getProfSubj();
                resetPlottingForm();
                getPrefTime();
                loadSchedTable();
                getUnitsUsed();
                reflectSchedTable();
            });

            //ACAD YEAR ON CHANGE
            $('#sched_acad_year').on('change',function(){
                $('.btn-info').removeClass("btn-info").addClass("btn-default");                 
                $('.btn-info').addClass("btn-default"); 
                getProfSubj();
                resetPlottingForm();
                getPrefTime();
                loadSchedTable();
                getUnitsUsed();
                reflectSchedTable();
            });

            //SEM ON CHANGE
            $('#sched_sem').on('change',function(){
                $('.btn-info').removeClass("btn-info").addClass("btn-default");                 
                $('.btn-info').addClass("btn-default"); 
                getProfSubj();
                resetPlottingForm();
                getPrefTime();
                loadSchedTable();
                getUnitsUsed();
                reflectSchedTable();
            });

            //SUBJECT ON CHANGE
            // $('#sched_subj').on('change',function(){
            //     // var arr = getSubjHours();
            //     // alert (arr[0]);
            // });

        });

        //CLICKING OF TIME SHOWN
        $(document).on('click', '.btn-info', function(){

            var x = $(this).attr('value');
            var id = $(this).attr('id');
            var day = x[9] + x[10] + x[11];
            var time = x[0] + x[1] + ':' + x[3] + x[4] + ':00';
            getSubjHours(day, time, id);
        });

    </script>

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
                                <h2>Plotting Form</h2>
                            </div>
                            <div class="col-md-3">
                                <button style="margin-top: 10px; margin-left: 90px;" type="button" class="btn btn-success" id="btnOpenGenerate" data-toggle = "modal" data-target ="#modalGenerateStart">AUTO GENERATE SCHEDULE</button>
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
                                <label class="control-label">Teaching Loads:</label>
                                <select class="form-control select2" id="sched_subj">
                                    <option>-Loads-</option>
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
                                <p id="units_used">Total Hours: </p>
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
            </tr>
        </thead>

         <tbody>

        </tbody>
    </table>

</div>
                   
                        </div>
            
                    </div>
                </div>

<div class="modal fade bs-example-modal-lg" id="modalGenerateStart" tabindex="-1" role="dialog" aria-labelledby="modalGenerateStart" aria-hidden="true" style=" display: none;">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title">Confirm Auto-Generation</h4>
                    </div>
                    <div  class="col-md-12" style="background-color: gray; height: 3px; margin-top: -5px;">

                    </div>
                    <div class="modal-body">
                            <div class="form-group col-md-12">
                                <h4>Generate schedule for:<span id="gen_fac_name"></span></h4>                              
                            </div>
                            <div class="form-group col-md-12">
                                <h4>Load Limits:</h4>
                                <div class="col-md-4">
                                    <p>Regular Load:</p>
                                </div>
                                <div class="col-md-4">
                                    <p>Part-Time Load Load:</p>
                                </div>
                                <div class="col-md-4">
                                    <p>Temporary Substitution:</p>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <h3>Assign maximum sections for each subjects</h3>
                            </div>
                            <div class="col-md-12" id="subject_to_section">
                                <div class="col-md-6 form-control">
                                    <h4>SUBJECT<h4>
                                </div>
                                <div class="col-md-2">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <br>
                                <p style="color: red">WARNING: Once the generation of schedule starts, all existing schedule of the faculty member for this selected semester and academic year will be changed. Click 'Start' to begin the process.</p>
                            </div>
                    </div>
                    <div class="modal-footer">
                            <button type="button" class="btn btn-success waves-effect text-left" id="btnStartGenerate">Start</button>
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
    <!-- PARTICLE SWARM OPTIMIZATION -->
    <script src="<?php echo base_url(); ?>assets/pso-js/src/pso.js"></script>
    <script type="text/javascript">
      $(".select2").select2();
      $('.selectpicker').selectpicker();

      

    </script>

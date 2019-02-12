<div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                         <h4 class="page-title">Room Schedules</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="#">Admin</a></li>
                            <li><a href="#">Reports</a></li>
                            <li class="active">Room Schedules</li>
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
                        <div class="row" id="div_by_room" >
                            <div class="col-md-2">
                                <label class="control-label">Select A.Y.</label>
                                <select class="form-control" id="room_acad_year">
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
                                <select class="form-control" id="room_sem">
                                    <option value="0" disabled selected>-SEM-</option>
                                    <option value="1st">1st</option>
                                    <option value="2nd">2nd</option> 
                                    <option value="summer">Summer</option> 
                                </select>   
                            </div>
                            <div class="col-md-3">
                                <label class="control-label">Select Room:</label>
                                <select class="form-control" id="room_labs">
                                    <option value="0" disabled selected>-ROOMS/LABS-</option>
                                    <?php foreach($rooms as $r) echo '<option value="'.$r[4].'">'.$r[0].'</option>';?>
                                </select>
                            </div>
                            <div class="col-md-4" style="text-align: right;">
                                <button style="margin-top: 25px" type="btn" class="btn btn-info" id="btnPrint">Print Room Schedule</button>
                            </div>
                        </div>
                        <br>
                        <div  class="col-md-12" style="background-color: gray; height: 3px; margin-top: -5px;">
                        </div>
                        <br>
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

<div class="table-responsive" id="room_table">
    <table id="table_room" class="table colored-table table-bordered inverse-tabl table-striped" style="margin-top: 30px;">
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

      //FUNCTIONS
      //SHOWS IF FACULTY HAS CONSECUTIVE S GRADES

      function resetPlotForm(){
        $('.plot-green').removeClass().addClass('btn plot-regular');
        $('.plot-blue').removeClass().addClass('btn plot-regular');
        $('.plot-orange').removeClass().addClass('btn plot-regular');
        $('.plot-red').removeClass().addClass('btn plot-regular');
        $('.plot-darkBlue').removeClass().addClass('btn plot-regular')
        $('.plot-regular').text('');
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
                     $('button[type="button"][value="'+final_val+'"]').removeClass().addClass("btn plot-darkBlue");                 
                    $('button[type="button"][value="'+final_val+'"]').addClass("btn plot-darkBlue");
                    $('button[type="button"][value="'+final_val2+'"]').removeClass().addClass("btn plot-darkBlue");                 
                    $('button[type="button"][value="'+final_val2+'"]').addClass("btn plot-darkBlue");
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
                        $('button[type="button"][value="'+final_val2+'"]').addClass("btn plot-darkBlue");
                   }

                    $('button[type="button"][value="'+final_val2+'"]').text(''); 
                }

            }
        }



      //SELECT2
      $(".select2").select2();
      $('.selectpicker').selectpicker();

      $(document).ready(function(){
        $('#room_table').show();
        $('#btnPrint').attr('disabled','disabled');


        $('#room_sem').on('change', function(){
            var sem = $('#room_sem').val();
            var acad_year = $('#room_acad_year').val();
            var room_labs = $('#room_labs').val();
            if(sem != 0 && acad_year != 0 && room_labs != 0)
            {
                $('#btnPrint').removeAttr('disabled');
            }
            else
            {
                $('#btnPrint').attr('disabled','disabled');
            }
            resetPlotForm();
            reflectRoomTable();
            loadRoomTable();
        });

        $('#room_acad_year').on('change', function(){
            var sem = $('#room_sem').val();
            var acad_year = $('#room_acad_year').val();
            var room_labs = $('#room_labs').val();
            if(sem != 0 && acad_year != 0 && room_labs != 0)
            {
                $('#btnPrint').removeAttr('disabled');
            }
            else
            {
                $('#btnPrint').attr('disabled','disabled');
            }
            resetPlotForm();
            reflectRoomTable();
            loadRoomTable();
        });

        $('#room_labs').on('change', function(){
            var sem = $('#room_sem').val();
            var acad_year = $('#room_acad_year').val();
            var room_labs = $('#room_labs').val();
            if(sem != 0 && acad_year != 0 && room_labs != 0)
            {
                $('#btnPrint').removeAttr('disabled');
            }
            else
            {
                $('#btnPrint').attr('disabled','disabled');
            }
            resetPlotForm();
            reflectRoomTable();
            loadRoomTable();
        });
    });

    $('#btnPrint').on('click', function(){

      var acadyr = $('#room_acad_year').val();
      var sem = $('#room_sem').val();
      var faculty = 1;
      var room_val = $('#room_labs').val();
      var room_text = $('#room_labs option:selected').text();
      window.open('<?php echo base_url("Report/report_room_sched_pdf")?>'+'?acadyr='+acadyr+'&sem='+sem+'&faculty='+faculty+'&room_val='+room_val+'&room_text='+room_text);

    });

        //=========================================================
        // END ROOM VIEW

     

    </script>
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
                                <p>Allowed units:</p>
                            </div>
                            <div class="col-md-2" style="text-align: right;">
                                <p>Regular Load: </p>
                            </div>
                            <div class="col-md-2" style="text-align: right;">
                                <p>Part-time Load: </p>
                            </div>
                            <div class="col-md-3" style="text-align: right;">
                                <p>Temporary Substitution: 0</p>
                            </div>
                            <div class="col-md-2" style="text-align: right;">
                                <p>Total Units Used: 0</p>
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
  <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="m70a" value="07:00:00_mon">7:00AM</button></td>
  <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="t70a" value="07:00:00_tue">7:00AM</button></td>
  <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="w70a" value="07:00:00_wed">7:00AM</button></td>
  <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="th70a" value="07:00:00_thu">7:00AM</button></td>
  <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="f70a" value="07:00:00_fri">7:00AM</button></td>
  <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="sa70a" value="07:00:00_sat">7:00AM</button></td>
  <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="su70a" value="07:00:00_sun">7:00AM</button></td>
</tr>

<tr>
    <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="m73a" value="07:30:00_mon">7:30AM</button></td>
    <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="t73a" value="07:30:00_tue">7:30AM</button></td>
    <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="w73a" value="07:30:00_wed">7:30AM</button></td>
    <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="th73a" value="07:30:00_thu">7:30AM</button></td>
    <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="f73a" value="07:30:00_fri">7:30AM</button></td>
    <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="sa73a" value="07:30:00_sat">7:30AM</button></td>
    <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="su73a" value="07:30:00_sun">7:30AM</button></td>
</tr>

<tr>
  <td rowspan='2' align='center' style='font-size:18px;border:1px #000000 solid;background:#D4D9E5;font-family:tahoma;'><font style='font-size:9px;'>08:00 AM</font><br>08:30 AM<br><font style='font-size:9px;'>08:59 AM</font></td>
  <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="m80a" value="08:00:00_mon">8:00AM</button></td>
  <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="t80a" value="08:00:00_tue">8:00AM</button></td>
  <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="w80a" value="08:00:00_wed">8:00AM</button></td>
  <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="th80a" value="08:00:00_thu">8:00AM</button></td>
  <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="f80a" value="08:00:00_fri">8:00AM</button></td>
  <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="sa80a" value="08:00:00_sat">8:00AM</button></td>
  <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="su80a" value="08:00:00_sun">8:00AM</button></td>
</tr>

<tr>
    <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="m83a" value="08:30:00_mon">8:30AM</button></td>
    <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="t83a" value="08:30:00_tue">8:30AM</button></td>
    <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="w83a" value="08:30:00_wed">8:30AM</button></td>
    <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="th83a" value="08:30:00_thu">8:30AM</button></td>
    <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="f83a" value="08:30:00_fri">8:30AM</button></td>
    <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="sa83a" value="08:30:00_sat">8:30AM</button></td>
    <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="su83a" value="08:30:00_sun">8:30AM</button></td>
</tr>

<tr>
  <td rowspan='2' align='center' style='font-size:18px;border:1px #000000 solid;background:#D4D9E5;font-family:tahoma;'><font style='font-size:9px;'>09:00 AM</font><br>09:30 AM<br><font style='font-size:9px;'>09:59 AM</font></td>
  <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="m90a" value="09:00:00_mon">9:00AM</button></td>
  <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="t90a" value="09:00:00_tue">9:00AM</button></td>
  <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="w90a" value="09:00:00_wed">9:00AM</button></td>
  <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="th90a" value="09:00:00_thu">9:00AM</button></td>
  <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="f90a" value="09:00:00_fri">9:00AM</button></td>
  <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="sa90a" value="09:00:00_sat">9:00AM</button></td>
  <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="su90a" value="09:00:00_sun">9:00AM</button></td>
</tr>

<tr>
    <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="m93a" value="09:30:00_mon">9:30AM</button></td>
    <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="t93a" value="09:30:00_tue">9:30AM</button></td>
    <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="w93a" value="09:30:00_wed">9:30AM</button></td>
    <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="th93a" value="09:30:00_thu">9:30AM</button></td>
    <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="f93a" value="09:30:00_fri">9:30AM</button></td>
    <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="sa93a" value="09:30:00_sat">9:30AM</button></td>
    <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="su93a" value="09:30:00_sun">9:30AM</button></td>
</tr>

<tr>
  <td rowspan='2' align='center' style='font-size:18px;border:1px #000000 solid;background:#D4D9E5;font-family:tahoma;'><font style='font-size:9px;'>10:00 AM</font><br>10:30 AM<br><font style='font-size:9px;'>10:59 AM</font></td>
  <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="m100a" value="10:00:00_mon">10:00AM</button></td>
  <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="t100a" value="10:00:00_tue">10:00AM</button></td>
  <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="w100a" value="10:00:00_wed">10:00AM</button></td>
  <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="th100a" value="10:00:00_thu">10:00AM</button></td>
  <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="f100a" value="10:00:00_fri">10:00AM</button></td>
  <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="sa100a" value="10:00:00_sat">10:00AM</button></td>
  <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="su100a" value="10:00:00_sun">10:00AM</button></td>
</tr>

<tr>
    <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="m103a" value="10:30:00_mon">10:30AM</button></td>
    <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="t103a" value="10:30:00_tue">10:30AM</button></td>
    <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="w103a" value="10:30:00_wed">10:30AM</button></td>
    <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="th103a" value="10:30:00_thu">10:30AM</button></td>
    <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="f103a" value="10:30:00_fri">10:30AM</button></td>
    <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="sa103a" value="10:30:00_sat">10:30AM</button></td>
    <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="su103a" value="10:30:00_sun">10:30AM</button></td>
</tr>

<tr>
  <td rowspan='2' align='center' style='font-size:18px;border:1px #000000 solid;background:#D4D9E5;font-family:tahoma;'><font style='font-size:9px;'>11:00 AM</font><br>11:30 AM<br><font style='font-size:9px;'>11:59 AM</font></td>
  <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="m110a" value="11:00:00_mon">11:00AM</button></td>
  <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="t110a" value="11:00:00_tue">11:00AM</button></td>
  <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="w110a" value="11:00:00_wed">11:00AM</button></td>
  <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="th110a" value="11:00:00_thu">11:00AM</button></td>
  <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="f110a" value="11:00:00_fri">11:00AM</button></td>
  <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="sa110a" value="11:00:00_sat">11:00AM</button></td>
  <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="su110a" value="11:00:00_sun">11:00AM</button></td>
</tr>

<tr>
    <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="m113a" value="11:30:00_mon">11:30AM</button></td>
    <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="t113a" value="11:30:00_tue">11:30AM</button></td>
    <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="w113a" value="11:30:00_wed">11:30AM</button></td>
    <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="th113a" value="11:30:00_thu">11:30AM</button></td>
    <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="f113a" value="11:30:00_fri">11:30AM</button></td>
    <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="sa113a" value="11:30:00_sat">11:30AM</button></td>
    <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="su113a" value="11:30:00_sun">11:30AM</button></td>
</tr>

<tr>
  <td rowspan='2' align='center' style='font-size:18px;border:1px #000000 solid;background:#D4D9E5;font-family:tahoma;'><font style='font-size:9px;'>12:00 PM</font><br>12:30 PM<br><font style='font-size:9px;'>12:59 PM</font></td>
  <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="m120p" value="12:00:00_mon">12:00NN</button></td>
  <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="t120p" value="12:00:00_tue">12:00NN</button></td>
  <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="w120p" value="12:00:00_wed">12:00NN</button></td>
  <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="th120p" value="12:00:00_thu">12:00NN</button></td>
  <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="f120p" value="12:00:00_fri">12:00NN</button></td>
  <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="sa120p" value="12:00:00_sat">12:00NN</button></td>
  <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="su120p" value="12:00:00_sun">12:00NN</button></td>
</tr>

<tr>
    <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="m123p" value="12:30:00_mon">12:30NN</button></td>
    <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="t123p" value="12:30:00_tue">12:30NN</button></td>
    <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="w123p" value="12:30:00_wed">12:30NN</button></td>
    <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="th123p" value="12:30:00_thu">12:30NN</button></td>
    <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="f123p" value="12:30:00_fri">12:30NN</button></td>
    <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="sa123p" value="12:30:00_sat">12:30NN</button></td>
    <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="su123p" value="12:30:00_sun">12:30NN</button></td>
</tr>

<tr>
  <td rowspan='2' align='center' style='font-size:18px;border:1px #000000 solid;background:#D4D9E5;font-family:tahoma;'><font style='font-size:9px;'>01:00 PM</font><br>01:30 PM<br><font style='font-size:9px;'>01:59 PM</font></td>
  <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="m10p" value="13:00:00_mon">1:00PM</button></td>
  <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="t10p" value="13:00:00_tue">1:00PM</button></td>
  <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="w10p" value="13:00:00_wed">1:00PM</button></td>
  <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="th10p" value="13:00:00_thu">1:00PM</button></td>
  <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="f10p" value="13:00:00_fri">1:00PM</button></td>
  <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="sa10p" value="13:00:00_sat">1:00PM</button></td>
  <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="su10p" value="13:00:00_sun">1:00PM</button></td>
</tr>

<tr>
    <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="m13p" value="13:30:00_mon">1:30PM</button></td>
    <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="t13p" value="13:30:00_tue">1:30PM</button></td>
    <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="w13p" value="13:30:00_wed">1:30PM</button></td>
    <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="th13p" value="13:30:00_thu">1:30PM</button></td>
    <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="f13p" value="13:30:00_fri">1:30PM</button></td>
    <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="sa13p" value="13:30:00_sat">1:30PM</button></td>
    <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="su13p" value="13:30:00_sun">1:30PM</button></td>
</tr>

<tr>
  <td rowspan='2' align='center' style='font-size:18px;border:1px #000000 solid;background:#D4D9E5;font-family:tahoma;'><font style='font-size:9px;'>02:00 PM</font><br>02:30 PM<br><font style='font-size:9px;'>02:59 PM</font></td>
  <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="m20p" value="14:00:00_mon">2:00PM</button></td>
  <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="t20p" value="14:00:00_tue">2:00PM</button></td>
  <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="w20p" value="14:00:00_wed">2:00PM</button></td>
  <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="th20p" value="14:00:00_thu">2:00PM</button></td>
  <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="f20p" value="14:00:00_fri">2:00PM</button></td>
  <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="sa20p" value="14:00:00_sat">2:00PM</button></td>
  <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="su20p" value="14:00:00_sun">2:00PM</button></td>
</tr>

<tr>
    <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="m23p" value="14:30:00_mon">2:30PM</button></td>
    <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="t23p" value="14:30:00_tue">2:30PM</button></td>
    <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="w23p" value="14:30:00_wed">2:30PM</button></td>
    <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="th23p" value="14:30:00_thu">2:30PM</button></td>
    <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="f23p" value="14:30:00_fri">2:30PM</button></td>
    <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="sa23p" value="14:30:00_sat">2:30PM</button></td>
    <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="su23p" value="14:30:00_sun">2:30PM</button></td>
</tr>

<tr>
  <td rowspan='2' align='center' style='font-size:18px;border:1px #000000 solid;background:#D4D9E5;font-family:tahoma;'><font style='font-size:9px;'>03:00 PM</font><br>03:30 PM<br><font style='font-size:9px;'>03:59 PM</font></td>
  <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="m30p" value="15:00:00_mon">3:00PM</button></td>
  <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="t30p" value="15:00:00_tue">3:00PM</button></td>
  <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="w30p" value="15:00:00_wed">3:00PM</button></td>
  <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="th30p" value="15:00:00_thu">3:00PM</button></td>
  <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="f30p" value="15:00:00_fri">3:00PM</button></td>
  <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="sa30p" value="15:00:00_sat">3:00PM</button></td>
  <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="su30p" value="15:00:00_sun">3:00PM</button></td>
</tr>

<tr>
    <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="m33p" value="15:30:00_mon">3:30PM</button></td>
    <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="t33p" value="15:30:00_tue">3:30PM</button></td>
    <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="w33p" value="15:30:00_wed">3:30PM</button></td>
    <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="th33p" value="15:30:00_thu">3:30PM</button></td>
    <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="f33p" value="15:30:00_fri">3:30PM</button></td>
    <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="sa33p" value="15:30:00_sat">3:30PM</button></td>
    <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="su33p" value="15:30:00_sun">3:30PM</button></td>
</tr>

<tr>
  <td rowspan='2' align='center' style='font-size:18px;border:1px #000000 solid;background:#D4D9E5;font-family:tahoma;'><font style='font-size:9px;'>04:00 PM</font><br>04:30 PM<br><font style='font-size:9px;'>04:59 PM</font></td>
  <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="m40p" value="16:00:00_mon">4:00PM</button></td>
  <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="t40p" value="16:00:00_tue">4:00PM</button></td>
  <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="w40p" value="16:00:00_wed">4:00PM</button></td>
  <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="th40p" value="16:00:00_thu">4:00PM</button></td>
  <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="f40p" value="16:00:00_fri">4:00PM</button></td>
  <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="sa40p" value="16:00:00_sat">4:00PM</button></td>
  <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="su40p" value="16:00:00_sun">4:00PM</button></td>
</tr>

<tr>
    <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="m43p" value="16:30:00_mon">4:30PM</button></td>
    <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="t43p" value="16:30:00_tue">4:30PM</button></td>
    <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="w43p" value="16:30:00_wed">4:30PM</button></td>
    <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="th43p" value="16:30:00_thu">4:30PM</button></td>
    <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="f43p" value="16:30:00_fri">4:30PM</button></td>
    <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="sa43p" value="16:30:00_sat">4:30PM</button></td>
    <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="su43p" value="16:30:00_sun">4:30PM</button></td>
</tr>

<tr>
  <td rowspan='2' align='center' style='font-size:18px;border:1px #000000 solid;background:#D4D9E5;font-family:tahoma;'><font style='font-size:9px;'>05:00 PM</font><br>05:30 PM<br><font style='font-size:9px;'>05:59 PM</font></td>
  <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="m50p" value="19:00:00_mon">5:00PM</button></td>
  <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="t50p" value="19:00:00_tue">5:00PM</button></td>
  <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="w50p" value="19:00:00_wed">5:00PM</button></td>
  <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="th50p" value="19:00:00_thu">5:00PM</button></td>
  <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="f50p" value="19:00:00_fri">5:00PM</button></td>
  <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="sa50p" value="19:00:00_sat">5:00PM</button></td>
  <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="su50p" value="19:00:00_sun">5:00PM</button></td>
</tr>

<tr>
    <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="m53p" value="19:30:00_mon">5:30PM</button></td>
    <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="t53p" value="19:30:00_tue">5:30PM</button></td>
    <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="w53p" value="19:30:00_wed">5:30PM</button></td>
    <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="th53p" value="19:30:00_thu">5:30PM</button></td>
    <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="f53p" value="19:30:00_fri">5:30PM</button></td>
    <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="sa53p" value="19:30:00_sat">5:30PM</button></td>
    <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="su53p" value="19:30:00_sun">5:30PM</button></td>
</tr>

<tr>
  <td rowspan='2' align='center' style='font-size:18px;border:1px #000000 solid;background:#D4D9E5;font-family:tahoma;'><font style='font-size:9px;'>06:00 PM</font><br>06:30 PM<br><font style='font-size:9px;'>06:59 PM</font></td>
  <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="m60p" value="18:00:00_mon">6:00PM</button></td>
  <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="t60p" value="18:00:00_tue">6:00PM</button></td>
  <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="w60p" value="18:00:00_wed">6:00PM</button></td>
  <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="th60p" value="18:00:00_thu">6:00PM</button></td>
  <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="f60p" value="18:00:00_fri">6:00PM</button></td>
  <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="sa60p" value="18:00:00_sat">6:00PM</button></td>
  <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="su60p" value="18:00:00_sun">6:00PM</button></td>
</tr>

<tr>
    <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="m63p" value="18:30:00_mon">6:30PM</button></td>
    <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="t63p" value="18:30:00_tue">6:30PM</button></td>
    <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="w63p" value="18:30:00_wed">6:30PM</button></td>
    <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="th63p" value="18:30:00_thu">6:30PM</button></td>
    <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="f63p" value="18:30:00_fri">6:30PM</button></td>
    <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="sa63p" value="18:30:00_sat">6:30PM</button></td>
    <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="su63p" value="18:30:00_sun">6:30PM</button></td>
</tr>

<tr>
  <td rowspan='2' align='center' style='font-size:18px;border:1px #000000 solid;background:#D4D9E5;font-family:tahoma;'><font style='font-size:9px;'>07:00 PM</font><br>07:30 PM<br><font style='font-size:9px;'>07:59 PM</font></td>
  <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="m70p" value="19:00:00_mon">7:00PM</button></td>
  <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="t70p" value="19:00:00_tue">7:00PM</button></td>
  <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="w70p" value="19:00:00_wed">7:00PM</button></td>
  <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="th70p" value="19:00:00_thu">7:00PM</button></td>
  <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="f70p" value="19:00:00_fri">7:00PM</button></td>
  <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="sa70p" value="19:00:00_sat">7:00PM</button></td>
  <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="su70p" value="19:00:00_sun">7:00PM</button></td>
</tr>

<tr>
    <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="m73p" value="19:30:00_mon">7:30PM</button></td>
    <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="t73p" value="19:30:00_tue">7:30PM</button></td>
    <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="w73p" value="19:30:00_wed">7:30PM</button></td>
    <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="th73p" value="19:30:00_thu">7:30PM</button></td>
    <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="f73p" value="19:30:00_fri">7:30PM</button></td>
    <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="sa73p" value="19:30:00_sat">7:30PM</button></td>
    <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="su73p" value="19:30:00_sun">7:30PM</button></td>
</tr>

<tr>
  <td rowspan='2' align='center' style='font-size:18px;border:1px #000000 solid;background:#D4D9E5;font-family:tahoma;'><font style='font-size:9px;'>08:00 PM</font><br>08:30 PM<br><font style='font-size:9px;'>08:59 PM</font></td>
  <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="m80p" value="20:00:00_mon">8:00PM</button></td>
  <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="t80p" value="20:00:00_tue">8:00PM</button></td>
  <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="w80p" value="20:00:00_wed">8:00PM</button></td>
  <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="th80p" value="20:00:00_thu">8:00PM</button></td>
  <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="f80p" value="20:00:00_fri">8:00PM</button></td>
  <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="sa80p" value="20:00:00_sat">8:00PM</button></td>
  <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="su80p" value="20:00:00_sun">8:00PM</button></td>
</tr>

<tr>
    <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="m83p" value="20:30:00_mon">8:30PM</button></td>
    <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="t83p" value="20:30:00_tue">8:30PM</button></td>
    <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="w83p" value="20:30:00_wed">8:30PM</button></td>
    <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="th83p" value="20:30:00_thu">8:30PM</button></td>
    <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="f83p" value="20:30:00_fri">8:30PM</button></td>
    <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="sa83p" value="20:30:00_sat">8:30PM</button></td>
    <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="su83p" value="20:30:00_sun">8:30PM</button></td>
</tr>

<tr>
  <td rowspan='2' align='center' style='font-size:18px;border:1px #000000 solid;background:#D4D9E5;font-family:tahoma;'><font style='font-size:9px;'>09:00 PM</font><br>09:30 PM<br><font style='font-size:9px;'>09:59 PM</font></td>
  <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="m90p" value="21:00:00_mon">9:00PM</button></td>
  <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="t90p" value="21:00:00_tue">9:00PM</button></td>
  <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="w90p" value="21:00:00_wed">9:00PM</button></td>
  <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="th90p" value="21:00:00_thu">9:00PM</button></td>
  <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="f90p" value="21:00:00_fri">9:00PM</button></td>
  <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="sa90p" value="21:00:00_sat">9:00PM</button></td>
  <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="su90p" value="21:00:00_sun">9:00PM</button></td>
</tr>

<tr>
    <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="m93p" value="21:30:00_mon">9:30PM</button></td>
    <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="t93p" value="21:30:00_tue">9:30PM</button></td>
    <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="w93p" value="21:30:00_wed">9:30PM</button></td>
    <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="th93p" value="21:30:00_thu">9:30PM</button></td>
    <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="f93p" value="21:30:00_fri">9:30PM</button></td>
    <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="sa93p" value="21:30:00_sat">9:30PM</button></td>
    <td width='12.5%' style='border:1px #000000 solid;height:30px;text-align:center;font-family:tahoma;font-size:11px;' rowspan='1'><button type="button" class="btn btn-info" style="width:150px;" id="su93p" value="21:30:00_sun">9:30PM</button></td>
</tr>
    </table>
</div>

                <br>
                <h3 style="color: red;">Conflict Results:</h3>
                        <div class="row">
                            <div class="col-md-12">
                                <textarea class="form-control" rows="5"></textarea>
                            </div>
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
                        <form method="POST" enctype="multipart/form-data">
                            <div class="form-group col-md-6">
                                <label class="control-label">Select Section:</label>
                                <select class="form-control select2" id="avail_sections">
                                    <option>--Available Sections--</option>
                                </select>                                
                            </div>
                            <div class="form-group col-md-6">
                                    <label class="control-label">Select Room:</label>
                                    <select class="form-control select2" id="avail_rooms">
                                        <option>--Available Rooms--</option>
                                    </select>
                            </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" onclick="resetForm1()">Reset</button>
                            <button type="submit" name="btnAddDept" id="btnAddDept" class="btn btn-primary waves-effect text-left">Add to schedule</button>
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

    
        function roomAndSecSelect(day, time){
            $('#modalSelectParam').modal('show');
        }


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
                    // alert(len);
                     $("#sched_subj").empty();  //RESETS SUBJECTS FOR FACULTY
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

                    $('#'+ id + '73a').removeClass("btn btn-info").addClass("btn btn-primary");               
                    $('#'+ id + '73a').addClass("btn btn-primary");  

                    $('#'+ id + '80a').removeClass("btn btn-info").addClass("btn btn-primary");                 
                    $('#'+ id + '80a').addClass("btn btn-primary");  

                    $('#'+ id + '83a').removeClass("btn btn-info").addClass("btn btn-primary");                 
                    $('#'+ id + '83a').addClass("btn btn-primary");  

                    $('#'+ id + '90a').removeClass("btn btn-info").addClass("btn btn-primary");                 
                    $('#'+ id + '90a').addClass("btn btn-primary");

                    $('#'+ id + '93a').removeClass("btn btn-info").addClass("btn btn-primary");                 
                    $('#'+ id + '93a').addClass("btn btn-primary");  

                    $('#'+ id + '100a').removeClass("btn btn-info").addClass("btn btn-primary");                 
                    $('#'+ id + '100a').addClass("btn btn-primary");  

                    $('#'+ id + '103a').removeClass("btn btn-info").addClass("btn btn-primary");                 
                    $('#'+ id + '103a').addClass("btn btn-primary");  

                    $('#'+ id + '110a').removeClass("btn btn-info").addClass("btn btn-primary");                 
                    $('#'+ id + '110a').addClass("btn btn-primary");  

                    $('#'+ id + '113a').removeClass("btn btn-info").addClass("btn btn-primary");                 
                    $('#'+ id + '113a').addClass("btn btn-primary");  

                    $('#'+ id + '120p').removeClass("btn btn-info").addClass("btn btn-primary");                 
                    $('#'+ id + '120p').addClass("btn btn-primary");  

                 }

                else if (start_time == '12:00:00' && end_time == '06:00:00'){

                    $('#'+ id + '120p').removeClass("btn btn-info").addClass("btn btn-primary");                 
                    $('#'+ id + '120p').addClass("btn btn-primary");  

                    $('#'+ id + '123p').removeClass("btn btn-info").addClass("btn btn-primary");                 
                    $('#'+ id + '123p').addClass("btn btn-primary");  

                    $('#'+ id + '10p').removeClass("btn btn-info").addClass("btn btn-primary");                 
                    $('#'+ id + '10p').addClass("btn btn-primary");  

                    $('#'+ id + '13p').removeClass("btn btn-info").addClass("btn btn-primary");                 
                    $('#'+ id + '13p').addClass("btn btn-primary");  

                    $('#'+ id + '20p').removeClass("btn btn-info").addClass("btn btn-primary");                 
                    $('#'+ id + '20p').addClass("btn btn-primary");  

                    $('#'+ id + '23p').removeClass("btn btn-info").addClass("btn btn-primary");                 
                    $('#'+ id + '23p').addClass("btn btn-primary");  

                    $('#'+ id + '30p').removeClass("btn btn-info").addClass("btn btn-primary");                 
                    $('#'+ id + '30p').addClass("btn btn-primary");  

                    $('#'+ id + '33p').removeClass("btn btn-info").addClass("btn btn-primary");                 
                    $('#'+ id + '33p').addClass("btn btn-primary");  

                    $('#'+ id + '40p').removeClass("btn btn-info").addClass("btn btn-primary");                 
                    $('#'+ id + '40p').addClass("btn btn-primary");  

                    $('#'+ id + '43p').removeClass("btn btn-info").addClass("btn btn-primary");                 
                    $('#'+ id + '43p').addClass("btn btn-primary");  

                    $('#'+ id + '50p').removeClass("btn btn-info").addClass("btn btn-primary");                 
                    $('#'+ id + '50p').addClass("btn btn-primary");  

                    $('#'+ id + '53p').removeClass("btn btn-info").addClass("btn btn-primary");                 
                    $('#'+ id + '53p').addClass("btn btn-primary");  

                    $('#'+ id + '60p').removeClass("btn btn-info").addClass("btn btn-primary");                 
                    $('#'+ id + '60p').addClass("btn btn-primary");  

                }

                else if (start_time == '06:00:00' && end_time == '09:00:00'){

                    $('#'+ id + '60p').removeClass("btn btn-info").addClass("btn btn-primary");                 
                    $('#'+ id + '60p').addClass("btn btn-primary");  

                    $('#'+ id + '63p').removeClass("btn btn-info").addClass("btn btn-primary");                 
                    $('#'+ id + '63p').addClass("btn btn-primary");  

                    $('#'+ id + '70p').removeClass("btn btn-info").addClass("btn btn-primary");                 
                    $('#'+ id + '70p').addClass("btn btn-primary");  

                    $('#'+ id + '73p').removeClass("btn btn-info").addClass("btn btn-primary");                 
                    $('#'+ id + '73p').addClass("btn btn-primary");  

                    $('#'+ id + '80p').removeClass("btn btn-info").addClass("btn btn-primary");                 
                    $('#'+ id + '80p').addClass("btn btn-primary");  

                    $('#'+ id + '83p').removeClass("btn btn-info").addClass("btn btn-primary");                 
                    $('#'+ id + '83p').addClass("btn btn-primary");  

                    $('#'+ id + '90p').removeClass("btn btn-info").addClass("btn btn-primary");                 
                    $('#'+ id + '90p').addClass("btn btn-primary");  

                    $('#'+ id + '93p').removeClass("btn btn-info").addClass("btn btn-primary");                 
                    $('#'+ id + '93p').addClass("btn btn-primary");  
                  
                }

                id = '';

            }
        }

        //FUNCTION TO VIEW AVAILABLE SECTIONS FOR A SPECIFIC TIME
        function getAvailSections(){

        }

        //FUNCTION GO GET THE HOURS OF THE SUBJECT
        function getSubjHours(){

            $.ajax({  
                url:"<?php echo base_url('Transaction/get_prof_subj')?>", 
                method:"POST", 
                data:{fac_id:fac_id, acad_year:acad_year, sem:sem}, 
                dataType: "json",
                success:function(data){
                    var len = data.length;
                    // alert(len);
                     $("#sched_subj").empty();  //RESETS SUBJECTS FOR FACULTY
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

        //FUNCTION TO GET THE AVAILABLE ROOMS FOR A SPECIFIC TIME
        function getAvailRooms(day, time){


        }

        $(document).ready(function(){

            $(".select2").select2();
            $('.selectpicker').selectpicker();

            //FACULTY MEMBER ON CHANGE
            $('#sched_faculty').on('change',function(){
                $('.btn-primary').removeClass("btn-primary").addClass("btn-info");                 
                $('.btn-primary').addClass("btn-info"); 
                getProfSubj();
                getPrefTime();

            });

            //ACAD YEAR ON CHANGE
            $('#sched_acad_year').on('change',function(){
                $('.btn-primary').removeClass("btn-primary").addClass("btn-info");                 
                $('.btn-primary').addClass("btn-info"); 
                getProfSubj();
                getPrefTime();
            });

            //SEM ON CHANGE
            $('#sched_sem').on('change',function(){
                $('.btn-primary').removeClass("btn-primary").addClass("btn-info");                 
                $('.btn-primary').addClass("btn-info"); 
                getProfSubj();
                getPrefTime();
            });

        });

        //CLICKING OF TIME SHOWN
        $(document).on('click', '.btn-primary', function(){
            var x = $(this).attr('value');
            var day = x[9] + x[10] + x[11];
            var time = x[0] + x[1] + ':' + x[3] + x[4] + ':00';
            alert(day + ' ' + time);
            roomAndSecSelect(day, time);
        });

    </script>
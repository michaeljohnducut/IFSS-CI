<!DOCTYPE html>
<html>
<head>
	<title>ROOM SCHEDULE</title>
	<style type="text/css">
		table
		{
		    border: 1px solid black;
		    border-collapse: collapse;
            width: 100%
		}

		th, td 
		{
		    padding: 5px;
            border: 1px solid black;
            border-collapse: collapse;
		}

        @page 
        {
            margin: 50px 50px;
        }
        h5
        {
            margin-bottom: 1%;
        }
        h6
        {
            margin-top: 1%;
        }
	</style>
</head>
<body style="font-family: 'Arial Narrow',Arial,sans-serif;">
        
            <div align="center">
                <label>Polytechnic University of the Philippines</label><br>
                <label>Sta.Mesa, Manila</label><br><br>
                <label style="font-size:120%"><?php echo $room_text; ?>&nbsp;SCHEDULE<br></label>
                <label style="font-size:100%"><?php echo $sem; ?>&nbsp;Semester, AY&nbsp;<?php echo $acadyr; ?></label>
            </div>
           	<div style="text-align: left;">
                <h5>WEEKLY SCHEDULE</h5>
                <div style="font-size:11px; page-break-inside: avoid;">
                	<table>
                        <thead>
                            <tr>
                                <th>Day</th>
                                <th>Time</th>
                                <th>Subject Code</th>
                                <th>Subject Description</th>
                                <th>Units</th>
                                <th>Course, Year & Section</th>
                                <th>Professor</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php 
                            	foreach($sched as $r)
                            	{
                            		echo '<tr>
                                            <td>'.$r[6].'</td>
                                            <td>'.$r[5].'</td>
                            				<td>'.$r[0].'</td>
                            				<td>'.$r[1].'</td>
                            				<td>'.$r[2].'</td>
                            				<td>'.$r[3].'</td>
                            				<td>'.$r[4].'</td>
                            				</tr>';
                            	}
                            ?>    
                        </tbody>       
                    </table>   
                </div>
           	</div>
           	
<!--            	<div style="text-align: left;">
               	<h5>PART-TIME</h5>
                <div style="font-size:11px; page-break-inside: avoid;">
                	<table >
                        <thead>
                            <tr>
                               <th>Subject Code</th>
                                <th>Subject Description</th>
                                <th>Units</th>
                                <th>Year & Section</th>
                                <th>Time</th>
                                <th>Day/s</th>
                                <th>Room</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php 
                            	foreach($teach_pt as $pt)
                            	{
                            		echo '<tr>
                            				<td>'.$pt[0].'</td>
                            				<td>'.$pt[1].'</td>
                            				<td>'.$pt[2].'</td>
                            				<td>'.$pt[3].'</td>
                            				<td>'.$pt[4].'</td>
                            				<td>'.$pt[5].'</td>
                            				<td>'.$pt[6].'</td>
                            				</tr>';
                            	}
                            ?>    
                        </tbody>       
                    </table>   
                </div>
                <h6><b>Total PART-TIME LOAD:</b>&nbsp;&nbsp;&nbsp;<span>
                    	<?php foreach($teach_pt_total as $t)
                    			{
                    				echo $t[0];
                    			} ?>
                    </span></h6>
           	</div> -->
           	
  <!--          	<div style="text-align: center;">
                <h5>TEACHING LOAD PER DAY (HOURS)</h5>
                <div style="font-size:11px; page-break-inside: avoid;">
                <table>
                    <thead>
                    	<tr>
                            <th></th>
                            <th>Mon</th>
                            <th>Tues</th>
                            <th>Wed</th>
                            <th>Thur</th>
                            <th>Fri</th>
                            <th>Sat</th>
                            <th>Sun</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <th>REGULAR</th>
                            <td id="reg_mon">
                            	<?php 
                            		foreach($load_day as $ld)
                            		{
                            			if($ld[0] == 'Monday' && $ld[2] == 'R')
                            				echo $ld[1];
                            		} 
                            	?>
                            </td>
                            <td id="reg_tues">
                            	<?php 
                            		foreach($load_day as $ld)
                            		{
                            			if($ld[0] == 'Tuesday' && $ld[2] == 'R')
                            				echo $ld[1];
                            		} 
                            	?>
                            </td>
                            <td id="reg_wed">
                            	<?php 
                            		foreach($load_day as $ld)
                            		{
                            			if($ld[0] == 'Wednesday' && $ld[2] == 'R')
                            				echo $ld[1];
                            		} 
                            	?>
                            </td>
                            <td id="reg_thu">
                            	<?php 
                            		foreach($load_day as $ld)
                            		{
                            			if($ld[0] == 'Thursday' && $ld[2] == 'R')
                            				echo $ld[1];
                            		} 
                            	?>
                            </td>
                            <td id="reg_fri">
                            	<?php 
                            		foreach($load_day as $ld)
                            		{
                            			if($ld[0] == 'Friday' && $ld[2] == 'R')
                            				echo $ld[1];
                            		} 
                            	?>
                            </td>
                            <td id="reg_sat">
                            	<?php 
                            		foreach($load_day as $ld)
                            		{
                            			if($ld[0] == 'Saturday' && $ld[2] == 'R')
                            				echo $ld[1];
                            		} 
                            	?>
                            </td>
                            <td id="reg_sun">
                            	<?php 
                            		foreach($load_day as $ld)
                            		{
                            			if($ld[0] == 'Sunday' && $ld[2] == 'R')
                            				echo $ld[1];
                            		} 
                            	?>
                            </td>
                        </tr>
                        <tr>
                            <th>PART-TIME</th>
                            <td id="pt_mon">
                            	<?php 
                            		foreach($load_day as $ld)
                            		{
                            			if($ld[0] == 'Monday' && $ld[2] == 'PT')
                            				echo $ld[1];
                            		} 
                            	?>
                            </td>
                            <td id="pt_tues">
                            	<?php 
                            		foreach($load_day as $ld)
                            		{
                            			if($ld[0] == 'Tuesday' && $ld[2] == 'PT')
                            				echo $ld[1];
                            		} 
                            	?>
                            </td>
                            <td id="pt_wed">
                            	<?php 
                            		foreach($load_day as $ld)
                            		{
                            			if($ld[0] == 'Wednesday' && $ld[2] == 'PT')
                            				echo $ld[1];
                            		} 
                            	?>
                            </td>
                            <td id="pt_thu">
                            	<?php 
                            		foreach($load_day as $ld)
                            		{
                            			if($ld[0] == 'Thursday' && $ld[2] == 'PT')
                            				echo $ld[1];
                            		} 
                            	?>
                            </td>
                            <td id="pt_fri">
                            	<?php 
                            		foreach($load_day as $ld)
                            		{
                            			if($ld[0] == 'Friday' && $ld[2] == 'PT')
                            				echo $ld[1];
                            		} 
                            	?>
                            </td>
                            <td id="pt_sat">
                            	<?php 
                            		foreach($load_day as $ld)
                            		{
                            			if($ld[0] == 'Saturday' && $ld[2] == 'PT')
                            				echo $ld[1];
                            		} 
                            	?>
                            </td>
                            <td id="pt_sun">
                            	<?php 
                            		foreach($load_day as $ld)
                            		{
                            			if($ld[0] == 'Sunday' && $ld[2] == 'PT')
                            				echo $ld[1];
                            		} 
                            	?>
                            </td>
                        </tr>
                        <tr>
                            <th>TOTAL</th>
                            <td id="tot_mon">
                            	<?php 
                            		foreach($load_day_tot as $ldt)
                            		{
                            			if($ldt[0] == 'Monday')
                            				echo $ldt[1];
                            		} 
                            	?>
                            </td>
                            <td id="tot_tues">
                            	<?php 
                            		foreach($load_day_tot as $ldt)
                            		{
                            			if($ldt[0] == 'Tuesday')
                            				echo $ldt[1];
                            		} 
                            	?>
                            </td>
                            <td id="tot_wed">
                            	<?php 
                            		foreach($load_day_tot as $ldt)
                            		{
                            			if($ldt[0] == 'Wednesday')
                            				echo $ldt[1];
                            		} 
                            	?>
                            </td>
                            <td id="tot_thu">
                            	<?php 
                            		foreach($load_day_tot as $ldt)
                            		{
                            			if($ldt[0] == 'Thursday')
                            				echo $ldt[1];
                            		} 
                            	?>
                            </td>
                            <td id="tot_fri">
                            	<?php 
                            		foreach($load_day_tot as $ldt)
                            		{
                            			if($ldt[0] == 'Friday')
                            				echo $ldt[1];
                            		} 
                            	?>
                            </td>
                            <td id="tot_sat">
                            	<?php 
                            		foreach($load_day_tot as $ldt)
                            		{
                            			if($ldt[0] == 'Saturday')
                            				echo $ldt[1];
                            		} 
                            	?>
                            </td>
                            <td id="tot_sun">
                            	<?php 
                            		foreach($load_day_tot as $ldt)
                            		{
                            			if($ldt[0] == 'Sunday')
                            				echo $ldt[1];
                            		} 
                            	?>
                            </td>
                        </tr>
                    </tbody>       
                </table>
                </div>		
           	</div> -->
           	
<!--            	<div style="text-align: center;">
                <h5>OFFICIAL TIME / ADVISING TIME</h5>
                <div style="font-size:11px; page-break-inside: avoid;">
                	<table>
                        <thead>
                           <tr>
                                <th></th>
                                <th>Mon</th>
                                <th>Tues</th>
                                <th>Wed</th>
                                <th>Thur</th>
                                <th>Fri</th>
                                <th>Sat</th>
                                <th>Sun</th>
                            </tr>
                        </thead>

                        <tbody id="official_advising">
                            <tr>
                                <th>OFFICIAL TIME</th>
                                <td id="oh_mon">
                                	<?php 
	                            		foreach($other_time as $ot)
	                            		{
	                            			if($ot[0] == 'Monday' && $ot[2] == 'OH')
	                            				echo $ot[1];
	                            		} 
                            		?>
                                </td>
                                <td id="oh_tues">
                                	<?php 
	                            		foreach($other_time as $ot)
	                            		{
	                            			if($ot[0] == 'Tuesday' && $ot[2] == 'OH')
	                            				echo $ot[1];
	                            		} 
                            		?>
                                </td>
                                <td id="oh_wed">
                                	<?php 
	                            		foreach($other_time as $ot)
	                            		{
	                            			if($ot[0] == 'Wednesday' && $ot[2] == 'OH')
	                            				echo $ot[1];
	                            		} 
                            		?>
                                </td>
                                <td id="oh_thu">
                                	<?php 
	                            		foreach($other_time as $ot)
	                            		{
	                            			if($ot[0] == 'Thursday' && $ot[2] == 'OH')
	                            				echo $ot[1];
	                            		} 
                            		?>
                                </td>
                                <td id="oh_fri">
                                	<?php 
	                            		foreach($other_time as $ot)
	                            		{
	                            			if($ot[0] == 'Friday' && $ot[2] == 'OH')
	                            				echo $ot[1];
	                            		} 
                            		?>
                                </td>
                                <td id="oh_sat">
                                	<?php 
	                            		foreach($other_time as $ot)
	                            		{
	                            			if($ot[0] == 'Saturday' && $ot[2] == 'OH')
	                            				echo $ot[1];
	                            		} 
                            		?>
                                </td>
                                <td id="oh_sun">
                                	<?php 
	                            		foreach($other_time as $ot)
	                            		{
	                            			if($ot[0] == 'Sunday' && $ot[2] == 'OH')
	                            				echo $ot[1];
	                            		} 
                            		?>
                                </td>
                            </tr>
                            <tr>
                                <th>ADVISING TIME</th>
                                <td id="at_mon">
                                	<?php 
	                            		foreach($other_time as $ot)
	                            		{
	                            			if($ot[0] == 'Monday' && $ot[2] == 'AT')
	                            				echo $ot[1];
	                            		} 
                            		?>
                                </td>
                                <td id="at_tues">
                                	<?php 
	                            		foreach($other_time as $ot)
	                            		{
	                            			if($ot[0] == 'Tuesday' && $ot[2] == 'AT')
	                            				echo $ot[1];
	                            		} 
                            		?>
                                </td>
                                <td id="at_wed">
                                	<?php 
	                            		foreach($other_time as $ot)
	                            		{
	                            			if($ot[0] == 'Wednesday' && $ot[2] == 'AT')
	                            				echo $ot[1];
	                            		} 
                            		?>
                                </td>
                                <td id="at_thu">
                                	<?php 
	                            		foreach($other_time as $ot)
	                            		{
	                            			if($ot[0] == 'Thursday' && $ot[2] == 'AT')
	                            				echo $ot[1];
	                            		} 
                            		?>
                                </td>
                                <td id="at_fri">
                                	<?php 
	                            		foreach($other_time as $ot)
	                            		{
	                            			if($ot[0] == 'Friday' && $ot[2] == 'AT')
	                            				echo $ot[1];
	                            		} 
                            		?>
                                </td>
                                <td id="at_sat">
                                	<?php 
	                            		foreach($other_time as $ot)
	                            		{
	                            			if($ot[0] == 'Saturday' && $ot[2] == 'AT')
	                            				echo $ot[1];
	                            		} 
                            		?>
                                </td>
                                <td id="at_sun">
                                	<?php 
	                            		foreach($other_time as $ot)
	                            		{
	                            			if($ot[0] == 'Sunday' && $ot[2] == 'AT')
	                            				echo $ot[1];
	                            		} 
                            		?>
                                </td>
                            </tr>
                        </tbody>       
                    </table>
                </div>
           	</div> -->
           	<br><br>
<!--            	<div style="text-align: right;">
	           	<br><br><br>
	           	<div style="page-break-inside: avoid;">
	           		<p>
	           			DR. EMANUEL C. DE GUZMAN<br>
	           			<span style="font-size:90%; margin-right: 10%;">President
	           		</p>
	           	</div>
           	</div> -->
           	
</body>
</html>
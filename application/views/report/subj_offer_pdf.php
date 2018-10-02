<!DOCTYPE html>
<html>
<head>
	<title>Subject Offering</title>
	<style type="text/css">
		table, th, td 
		{
		    border: 1px solid black;
		    border-collapse: collapse;
		}

		th, td 
		{
		    padding: 5px;
		}

        @page 
        {
            margin: 100px 25px;
        }

        header 
        {
            position: fixed;
            top: -80px;
            left: 0px;
            right: 0px;
            height: 250px;
        }

       footer 
       {
            position: fixed; 
            bottom: -10px; 
            left: 0px; 
            right: 0px;
            height: 50px;  
        }

	</style>
</head>
<body style="font-family: 'Arial Narrow',Arial,sans-serif;">
		<header>
			<img src = "<?php echo base_url(); ?>assets/images/PUPLogo.png" style= "width:7%;float: left; margin-right:1%; margin-left: 5%;">
				<label >Republic of the Philippines <br> 
				<label style="font-size: 100%">POLYTECHNIC UNIVERSITY OF THE PHILIPPINES<br>
				<label style="font-size: 100%">Office of the Vice President for Academic Affairs<br>
				<label style="font-size: 150%">COLLEGE OF COMPUTER AND INFORMATION SCIENCES<br>
			 <hr style="border: 1px solid">    
        </header>

        <!-- <footer>
            <hr style="border: 1px solid">
			<center>
				CCIS Office N207 2F North Wing PUP A. Mabini Campus Anonas Street, Sta. Mesa, 1016 Manila  Phone: (Direct Line) 335-1768<br>
		 		(Trunk Line) 335-1PUP or 3351777 (Local)272 / 264 ; website: www.pup.edu.ph &emsp;e ccis@pup.edu.ph 
			<br>
			<br>

			<label style="font-size:130%">“<span style="font-size:135%">T</span>HE <span style="font-size:135%">C</span>OUNTRY’S <span style="font-size:135%">1</span><sup>st</sup> <span style="font-size:135%">P</span>OLYTECHNIC<span style="font-size:135%">U”</span>
			</label>
			</center>
        </footer> -->

        <!-- <br><br><br><br> -->

        <main>
            <div>
                <p><center>COURSE OFFERINGS</center></p>
                <p><center><strong><?php echo $course; ?></strong></center></p>
                <p><center><strong><?php echo $sem; ?>&nbsp;Semester, AY&nbsp;<?php echo $acadyr; ?></strong></center></p>
            </div>

            <br>
            <div>
                <div style="margin-left: 10%;">
                    <h5><u><b>FIRST YEAR</b></u></h5>
                </div>
                <div style="margin-left: 10%;">
                <?php 
                	$result2 = array();
                	$result3 = array();
                	foreach($section as $s)
                	{
                		if($s[2] == '1st')
                		{
                			$section_id = $s[0];
                			$result2 = $this->getdata_model->get_section_schedule($acadyr, $sem, $section_id);
                			$result3 = $this->getdata_model->get_section_total($acadyr, $sem, $section_id);
                			echo '<label><b>'.$s[1].'</b></label>';
                			echo '<div style="font-size:11px; page-break-inside: avoid;">
                					<table>
			                			<thead>
					                       <tr>
					                        	<th>Course Code</th>
					                            <th>Course Title</th>
					                            <th>Units</th>
					                            <th>Hours</th>
					                            <th>Day</th>
					                            <th>Time</th>
					                            <th>Room</th>
					                            <th>Remarks</th>
					                        </tr>
					                    </thead>
					                    <tbody>';
						                foreach($result2 as $ss)
						                {
					                        echo '<tr>
					                                <td>'.$ss[0].'</td>
					                                <td>'.$ss[1].'</td>
					                                <td>'.$ss[2].'</td>
					                                <td>'.$ss[3].'</td>
					                                <td>'.$ss[4].'</td>
					                                <td>'.$ss[5].'</td>
					                                <td>'.$ss[6].'</td>
					                                <td>'.$ss[7].'</td>
					                               </tr>';
                						}
                						foreach($result3 as $st)
                						{
                							echo '<tr>
                									<th colspan="2"  style="text-align:right">TOTAL</th>
                									<td>'.$st[0].'</td>
					                                <td>'.$st[1].'</td>
					                                <td></td>
					                                <td></td>
					                                <td></td>
					                                <td></td>
                								  </tr>';
                						}

							echo 		'</tbody>
					                </table>
					            </div><br><br>';
                		}
                	}
                ?>
                </div>
           	</div>

           	<br>

           	<div>
                <div style="margin-left: 10%;">
                    <h5><u><b>SECOND YEAR</b></u></h5>
                </div>
                <div style="margin-left: 10%;">
                <?php 
                	$result2 = array();
                	$result3 = array();
                	foreach($section as $s)
                	{
                		if($s[2] == '2nd')
                		{
                			$section_id = $s[0];
                			$result2 = $this->getdata_model->get_section_schedule($acadyr, $sem, $section_id);
                			$result3 = $this->getdata_model->get_section_total($acadyr, $sem, $section_id);
                			echo '<label><b>'.$s[1].'</b></label>';
                			echo '<div style="font-size:11px; page-break-inside: avoid;">
                					<table>
			                			<thead>
					                       <tr>
					                        	<th>Course Code</th>
					                            <th>Course Title</th>
					                            <th>Units</th>
					                            <th>Hours</th>
					                            <th>Day</th>
					                            <th>Time</th>
					                            <th>Room</th>
					                            <th>Remarks</th>
					                        </tr>
					                    </thead>
					                    <tbody>';
						                foreach($result2 as $ss)
						                {
					                        echo '<tr>
					                                <td>'.$ss[0].'</td>
					                                <td>'.$ss[1].'</td>
					                                <td>'.$ss[2].'</td>
					                                <td>'.$ss[3].'</td>
					                                <td>'.$ss[4].'</td>
					                                <td>'.$ss[5].'</td>
					                                <td>'.$ss[6].'</td>
					                                <td>'.$ss[7].'</td>
					                               </tr>';
                						}
                						foreach($result3 as $st)
                						{
                							echo '<tr>
                									<th colspan="2"  style="text-align:right">TOTAL</th>
                									<td>'.$st[0].'</td>
					                                <td>'.$st[1].'</td>
					                                <td></td>
					                                <td></td>
					                                <td></td>
					                                <td></td>
                								  </tr>';
                						}

							echo 		'</tbody>
					                </table>
					            </div><br><br>';
                		}
                	}
                ?>
                </div>
           	</div>

           	<br>

           	<div>
                <div style="margin-left: 10%;">
                    <h5><u><b>THIRD YEAR</b></u></h5>
                </div>
                <div style="margin-left: 10%;">
                <?php 
                	$result2 = array();
                	$result3 = array();
                	foreach($section as $s)
                	{
                		if($s[2] == '3rd')
                		{
                			$section_id = $s[0];
                			$result2 = $this->getdata_model->get_section_schedule($acadyr, $sem, $section_id);
                			$result3 = $this->getdata_model->get_section_total($acadyr, $sem, $section_id);
                			echo '<label><b>'.$s[1].'</b></label>';
                			echo '<div style="font-size:11px; page-break-inside: avoid;">
                					<table>
			                			<thead>
					                       <tr>
					                        	<th>Course Code</th>
					                            <th>Course Title</th>
					                            <th>Units</th>
					                            <th>Hours</th>
					                            <th>Day</th>
					                            <th>Time</th>
					                            <th>Room</th>
					                            <th>Remarks</th>
					                        </tr>
					                    </thead>
					                    <tbody>';
						                foreach($result2 as $ss)
						                {
					                        echo '<tr>
					                                <td>'.$ss[0].'</td>
					                                <td>'.$ss[1].'</td>
					                                <td>'.$ss[2].'</td>
					                                <td>'.$ss[3].'</td>
					                                <td>'.$ss[4].'</td>
					                                <td>'.$ss[5].'</td>
					                                <td>'.$ss[6].'</td>
					                                <td>'.$ss[7].'</td>
					                               </tr>';
                						}
                						foreach($result3 as $st)
                						{
                							echo '<tr>
                									<th colspan="2"  style="text-align:right">TOTAL</th>
                									<td>'.$st[0].'</td>
					                                <td>'.$st[1].'</td>
					                                <td></td>
					                                <td></td>
					                                <td></td>
					                                <td></td>
                								  </tr>';
                						}

							echo 		'</tbody>
					                </table>
					            </div><br><br>';
                		}
                	}
                ?>
                </div>
           	</div>

           	<br>

           	<div>
                <div style="margin-left: 10%;">
                    <h5><u><b>FOURTH YEAR</b></u></h5>
                </div>
                <div style="margin-left: 10%;">
                <?php 
                	$result2 = array();
                	$result3 = array();
                	foreach($section as $s)
                	{
                		if($s[2] == '4th')
                		{
                			$section_id = $s[0];
                			$result2 = $this->getdata_model->get_section_schedule($acadyr, $sem, $section_id);
                			echo '<label><b>'.$s[1].'</b></label>';
                			echo '<div style="font-size:11px; page-break-inside: avoid;">
                					<table>
			                			<thead>
					                       <tr>
					                        	<th>Course Code</th>
					                            <th>Course Title</th>
					                            <th>Units</th>
					                            <th>Hours</th>
					                            <th>Day</th>
					                            <th>Time</th>
					                            <th>Room</th>
					                            <th>Remarks</th>
					                        </tr>
					                    </thead>
					                    <tbody>';
						                foreach($result2 as $ss)
						                {
					                        echo '<tr>
					                                <td>'.$ss[0].'</td>
					                                <td>'.$ss[1].'</td>
					                                <td>'.$ss[2].'</td>
					                                <td>'.$ss[3].'</td>
					                                <td>'.$ss[4].'</td>
					                                <td>'.$ss[5].'</td>
					                                <td>'.$ss[6].'</td>
					                                <td>'.$ss[7].'</td>
					                               </tr>';
                						}
                						foreach($result3 as $st)
                						{
                							echo '<tr>
                									<th colspan="2"  style="text-align:right">TOTAL</th>
                									<td>'.$st[0].'</td>
					                                <td>'.$st[1].'</td>
					                                <td></td>
					                                <td></td>
					                                <td></td>
					                                <td></td>
                								  </tr>';
                						}

							echo 		'</tbody>
					                </table>
					            </div><br><br>';
                		}
                	}
                ?>
                </div>
           	</div>
           	<br><br>
           	<div style="margin-left: 10%;">
           		<label>Prepared by:</label>
	           	<br><br><br>
	           	<div style="page-break-inside: avoid;">
	           		<p>
	           			<b>Melvin C. Roxas</b><br>
	           			Chairperson, Department of Computer Science
	           		</p>
	           	</div>
	           	<br><br><br>
	           	<div style="page-break-inside: avoid;">
	           		<p>
	           			<b>Rachel A. Nayre</b><br>
	           			Chairperson, Department of Information Technology
	           		</p>
	           	</div>
	           	<br><br><br><br>
	           	<label>Noted by:</label>
	           	<br><br><br>
	           	<div style="page-break-inside: avoid;">
	           		<p>
	           			<b>Dr. Gisela May A. Albano</b><br>
	           			Dean, CCIS
	           		</p>
	           	</div>
           	</div>
           	
        </main>
</body>
</html>
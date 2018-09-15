<!DOCTYPE html>
<html>
<head>
	<title>Subject Preference</title>
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
            margin: 50px 25px;
        }
	</style>
</head>
<body style="font-family: 'Arial Narrow',Arial,sans-serif;">
            <div>
                <p><center>SUBJECT PREFERENCE REPORT</center></p>
                <p><center><strong>For: <?php echo $sem; ?>&nbsp;Semester, AY&nbsp;<?php echo $acadyr; ?></strong></center></p>
            </div>

            <br>

            <div>
                <div style="margin-left: 10%;">
                    <h5>FACULTY ID:&nbsp;&nbsp;<span>
                        <?php
                            foreach($faculty as $f)
                            {
                                echo $f[0];
                            }
                        ?>
                    </span></h5>
                    <h5>FACULTY NAME:&nbsp;&nbsp;<span>
                    	<?php 
                    		$type = array();
                    		foreach($faculty as $f)
                    		{
                    			echo $f[1].', '.$f[2].' '.$f[3];
                    		}

                    		$type = $this->getdata_model->view_faculty_type($f[14]);
                    	?>
                    </span></h5>
                    <h5>FACULTY TYPE:&nbsp;&nbsp;<span>
                    	<?php
                    		foreach($type as $ty)
                    		{
                    			echo $ty[1];
                    		}
                    	?>
                    </span></h5>
                </div>
           	</div>
            <div style="margin-left: 10%;">
                <h5><b>PREFERRED TIME</b></h5>
                <div style="font-size:11px; page-break-inside: avoid;">
                	<table>
                		<thead>
                			<tr>
                				<th>Day</th>
                				<th>Time</th>
                			</tr>
                		</thead>
                		<tbody>
                			<?php
                				foreach($time as $t)
                				{
                					echo '<tr>
                							<td>'.$t[0].'</td>
                							<td>'.$t[1].'</td>
                						  </tr>';
                				} 
                			?>
                		</tbody>
                	</table>
                </div>
           	</div>

           	<div style="margin-left: 10%;">
              <h5><b>PREFERRED SUBJECT</b></h5>
                <div style="font-size:11px; page-break-inside: avoid;">
                	<table>
                		<thead>
                			<tr>
                				<th>Subject</th>
                			</tr>
                		</thead>
                		<tbody>
                			<?php
                				foreach($subj as $s)
                				{
                					echo '<tr>
                							<td>'.$s[0].'</td>
                						  </tr>';
                				} 
                			?>
                		</tbody>
                	</table>
                </div>
           	</div>
</body>
</html>
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

            <div style="margin-left: 5%;">
                <div style="font-size:11px; page-break-inside: avoid;">
                	<table>
                		<thead>
                			<tr>
                                <th>Faculty ID</th>
                                <th>Faculty Name</th>
                				<th>Day</th>
                				<th>Time</th>
                                <th>Subject</th>
                			</tr>
                		</thead>
                		<tbody>
                			<?php
                                $result2 = array();
                                $result3 = array();

                				foreach($faculty as $f)
                                {
                                    $fac_id = $f[7];
                                    echo '<tr>
                                            <td>'.$f[0].'</td>
                                            <td>'.$f[1].', '.$f[2].' '.$f[3].'</td>';

                                    $result2 = $this->getdata_model->get_preftime($acadyr, $sem, $fac_id);

                                    foreach($result2 as $pt)
                                    {
                                        echo '<td>'.$pt[0].'</td>
                                                <td>'.$pt[1].'</td>';
                                    }

                                    $result3 = $this->getdata_model->get_prefsub($acadyr, $sem, $fac_id);

                                    foreach($result3 as $s)
                                    {
                                        echo '<td>'.$s[0].'</td>
                                                </tr>';
                                    }
                                }
                			?>
                		</tbody>
                	</table>
                </div>
           	</div>
</body>
</html>
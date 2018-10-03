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

            <div style="margin-left: 2%; margin-right: 2%">
                <?php 
                    $result2 = array();
                    $result3 = array();
                    foreach($faculty as $f)
                    {
                        $fac_id = $f[7];

                        $result2 = $this->getdata_model->get_preftime($acadyr, $sem, $fac_id);
                        $result3 = $this->getdata_model->get_prefsub($acadyr, $sem, $fac_id);

                            echo '<div style="font-size:11px; page-break-inside: avoid;">
                                    <table style="width:100%;">
                                        <thead>
                                           <tr>
                                                <th>Faculty ID: '.$f[0].'</th>
                                                <th>Faculty Name: '.$f[1].', '.$f[2].' '.$f[3].'</th>
                                            </tr>
                                        </thead>
                                        <tbody>';

                                        echo '<tr>
                                                    <th>Preferred Day</th>
                                                    <th>Preferred Time</th>
                                                 </tr>';

                                        foreach($result2 as $pt)
                                        {
                                            echo '<tr>
                                                    <td>'.$pt[0].'</td>
                                                    <td>'.$pt[1].'</td>
                                                  </tr>';
                                        }

                                        echo '<tr>
                                                    <th></th>
                                                    <th></th>
                                              </tr>
                                              <tr>
                                                    <th>Preferred Subjects</th>
                                                    <th></th>
                                              </tr>';
                                        
                                        foreach($result3 as $s)
                                        {
                                            echo '<tr>
                                                    <td>'.$s[0].'</td>
                                                    <td> </td>
                                                  </tr> ';
                                        }

                            echo        '</tbody>
                                    </table>
                                </div><br><br>';
                        
                    }
                ?>
                </div>

            <!-- <div style="margin-left: 5%;">
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
           	</div> -->
</body>
</html>
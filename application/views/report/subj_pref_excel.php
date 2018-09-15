<!DOCTYPE html>
<html>
<head>
	<title>Subject Preference</title>
	<link href="<?php echo base_url(); ?>assets/plugins/bower_components/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
	<style type="text/css">
		body{
			
			font-size: 12px;
			font-style: normal;
			font-weight: 500;
			line-height: 13.2px;
		}

	</style>
</head>
<body style="font-family: 'Arial Narrow',Arial,sans-serif;">
	 	<table id="tblExport">
            <div>
            		<tr>
            			<td><center>SUBJECT PREFERENCE REPORT</center></td>
            		</tr>
            		<tr>
            			<td><center><strong><?php echo $sem; ?>&nbsp;Semester, AY&nbsp;<?php echo $acadyr; ?></strong></center></td>
            		</tr>
            </div>
            <tr><td></td></tr>
            <tr><td></td></tr>
            <div>
              <tr>
                <th>Faculty ID</th>
                <th>Faculty Name</th>
                <th>Day</th>
                <th>Time</th>
                <th>Subject</th>
              </tr>
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
           	</div>
           	</table>
    <script type='text/javascript' src='<?php echo base_url(); ?>assets/js/jquery-1.10.2.min.js'></script> 
    <script src="<?php echo base_url(); ?>assets/plugins/bower_components/datatables/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.battatech.excelexport.js"></script>
    <script type="text/javascript">
    	$("#tblExport").battatech_excelexport({
           containerid: "tblExport"
          , datatype: 'table'
          , worksheetName: "Subject Preference"
       });
    window.close();
    </script>

</body>
</html>
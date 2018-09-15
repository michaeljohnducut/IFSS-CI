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
                <td>
                  FACULTY ID:
                </td>
                <td>
                  <?php
                    foreach($faculty as $f)
                    {
                      echo $f[0];
                    }
                  ?>
                </td>
              </tr>
              <tr>
                <td>
                  FACULTY NAME:
                </td>
                <td>
                  <?php 
                    $type = array();
                    foreach($faculty as $f)
                    {
                      echo $f[1].', '.$f[2].' '.$f[3];
                    }

                    $type = $this->getdata_model->view_faculty_type($f[14]);
                  ?>
                </td>
              </tr>
              <tr>
                <td>
                  FACULTY TYPE:
                </td>
                <td>
                  <?php
                    foreach($type as $ty)
                    {
                      echo $ty[1];
                    }
                  ?>
                </td>
              </tr>
            </div>
            <tr><td></td></tr>
            <tr><td></td></tr>
            <div>
            	<tr>
            		<td>
            			<u><b>PREFERRED TIME</b></u>
            		</td>
            	</tr>
              <tr>
                <th>Day</th>
                <th>Time</th>
              </tr>
              <?php
                  foreach($time as $t)
                  {
                    echo '<tr>
                            <td>'.$t[0].'</td>
                            <td>'.$t[1].'</td>
                          </tr>';
                  } 
              ?>
           	</div>
            <tr><td></td></tr>
            <tr><td></td></tr>
           	<div>
              <tr>
            		<td>
            			<u><b>PREFERRED SUBJECT</b></u>
            		</td>
            	</tr>
              <tr>
                <th>Subject</th>
              </tr>
              <?php
                  foreach($subj as $s)
                  {
                    echo '<tr>
                            <td>'.$s[0].'</td>
                          </tr>';
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
<!DOCTYPE html>
<html>
<head>
	<title>Subject Offering</title>
	<link href="<?php echo base_url(); ?>assets/plugins/bower_components/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
	<style type="text/css">
		body{
			
			font-size: 12px;
			font-style: normal;
			font-weight: 500;
			line-height: 13.2px;
		}

    table, th, td 
    {
        border: 1px solid black;
        border-collapse: collapse;

    }

    th, td 
    {
        padding: 5px;
    }

	</style>
</head>
<body style="font-family: 'Arial Narrow',Arial,sans-serif;">
	 	<table id="tblExport">
            <div>
            		<tr>
            			<td colspan="8"><center>COURSE OFFERINGS</center></td>
            		</tr>
            		<tr>
            			<td colspan="8"><center><strong><?php echo $course; ?></strong></center></td>
            		</tr>
            		<tr>
            			<td colspan="8"><center><strong><?php echo $sem; ?>&nbsp;Semester, AY&nbsp;<?php echo $acadyr; ?></strong></center></td>
            		</tr>
            </div>
            <tr><td></td></tr>
            <tr><td></td></tr>
            <div>
            	<tr>
            		<td>
            			<u><b>FIRST YEAR</b></u>
            		</td>
            	</tr>
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
                			echo '<tr><td><b>'.$s[1].'</b></td></tr>';
                			echo '
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
					                   ';
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
                								  </tr>
                								  <tr><td></td></tr>';
                						}
                		}
                	}
                ?>
           	</div>
           	<div>
                <tr>
            		<td>
            			<u><b>SECOND YEAR</b></u>
            		</td>
            	</tr>
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
                			echo '<tr><td><b>'.$s[1].'</b></td></tr>';
                			echo ' <tr>
					                        	<th>Course Code</th>
					                            <th>Course Title</th>
					                            <th>Units</th>
					                            <th>Hours</th>
					                            <th>Day</th>
					                            <th>Time</th>
					                            <th>Room</th>
					                            <th>Remarks</th>
					                        </tr>';
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
                								  </tr>
                								  <tr><td></td></tr>';
                						}
                		}
                	}
                ?>
           	</div>
           	<div>
               	<tr>
            		<td>
            			<u><b>THIRD YEAR</b></u>
            		</td>
            	</tr>
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
                			echo '<tr><td><b>'.$s[1].'</b></td></tr>';
                			echo '<tr>
					                        	<th>Course Code</th>
					                            <th>Course Title</th>
					                            <th>Units</th>
					                            <th>Hours</th>
					                            <th>Day</th>
					                            <th>Time</th>
					                            <th>Room</th>
					                            <th>Remarks</th>
					                        </tr>';
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
                								  </tr>
                								  <tr><td></td></tr>';
                						}
                		}
                	}
                ?>
           	</div>
           	<div>
                <tr>
            		<td>
            			<u><b>FOURTH YEAR</b></u>
            		</td>
            	</tr>
                <?php 
                	$result2 = array();
                	$result3 = array();
                	foreach($section as $s)
                	{
                		if($s[2] == '4th')
                		{
                			$section_id = $s[0];
                			$result2 = $this->getdata_model->get_section_schedule($acadyr, $sem, $section_id);
                      $result3 = $this->getdata_model->get_section_total($acadyr, $sem, $section_id);
                			echo '<tr><td><b>'.$s[1].'</b></td></tr>';
                			echo '<tr>
					                        	<th>Course Code</th>
					                            <th>Course Title</th>
					                            <th>Units</th>
					                            <th>Hours</th>
					                            <th>Day</th>
					                            <th>Time</th>
					                            <th>Room</th>
					                            <th>Remarks</th>
					                        </tr>';
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
                								  </tr>
                								  <tr><td></td></tr>';
                						}
                		}
                	}
                ?>
           	</div>
           	</table>
           	<br><br>
           	<table>
           		<tr>
           			<td>
           				Prepared by:
           			</td>
           		</tr>
           		<tr></tr>
           		<tr></tr>
           		<tr></tr>
           		<tr>
           			<td><b>Melvin C. Roxas</b></td>
           		</tr>
           		<tr>
           			<td>Chairperson, Department of Computer Science</td>
           		</tr>
           		<tr></tr>
           		<tr></tr>
           		<tr></tr>
           		<tr>
           			<td><b>Rachel A. Nayre</b></td>
           		</tr>
           		<tr>
           			<td>Chairperson, Department of Information Technology</td>
           		</tr>
           		<tr></tr>
           		<tr></tr>
           		<tr></tr>
           		<tr></tr>
           		<tr>
           			<td>Noted by:</td>
           		</tr>
           		<tr></tr>
           		<tr></tr>
           		<tr></tr>
           		<tr>
           			<td><b>Dr. Gisela May A. Albano</b></td>
           		</tr>
           		<tr>
           			<td><b>Dean, CCIS</b></td>
           		</tr>
           	</table>
    <script type='text/javascript' src='<?php echo base_url(); ?>assets/js/jquery-1.10.2.min.js'></script> 
    <script src="<?php echo base_url(); ?>assets/plugins/bower_components/datatables/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.battatech.excelexport.js"></script>
    <script type="text/javascript">
      function createExcel(tableID, filename)
      {
        var downloadLink;
        var dataType = 'application/vnd.ms-excel';
        var tableSelect = document.getElementById(tableID);
        var tableHTML = tableSelect.outerHTML.replace(/ /g, '%20');
        
        // Specify file name
        filename = filename?filename+'.xls':'excel_data.xls';
        
        // Create download link element
        downloadLink = document.createElement("a");
        
        document.body.appendChild(downloadLink);
        
        if(navigator.msSaveOrOpenBlob){
            var blob = new Blob(['\ufeff', tableHTML], {
                type: dataType
            });
            navigator.msSaveOrOpenBlob( blob, filename);
        }else{
            // Create a link to the file
            downloadLink.href = 'data:' + dataType + ', ' + tableHTML;
        
            // Setting the file name
            downloadLink.download = filename;
            
            //triggering the function
            downloadLink.click();
        }
      }

      $(document).ready(function()
      {
        var acadyr = "<?php echo $acadyr; ?>";

        createExcel('tblExport', 'Course Offering AY '+acadyr);

        setTimeout(function() {
          window.close();
          }, 1000);
      });

    	// $("#tblExport").battatech_excelexport({
     //       containerid: "tblExport"
     //      , datatype: 'table'
     //      , worksheetName: "Subject Offering"
     //   });
    //window.close();
    </script>

</body>
</html>
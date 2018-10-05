<!DOCTYPE html>
<html>
<head>
	<title>Official Time</title>
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
                <label style="font-size:120%">REPORT ON OFFICIAL TIME<br></label>
                <label style="font-size:100%"><?php echo $sem; ?>&nbsp;Semester, AY&nbsp;<?php echo $acadyr; ?></label>
            </div>
            <br>

            <div align="left">
                <label>Name: <?php foreach($details as $d) { echo $d[1]; }?></label><br><br>
                <label>College: COLLEGE OF COMPUTER AND INFORMATION SCIENCES</label>
            </div>
            <br>
            
           	<div>
                <div style="font-size:11px; page-break-inside: avoid;">
                <table>
                    	<tr>
                            <th rowspan="2">DAYS</th>
                            <th colspan="3">REGULAR TIME </th>
                            <th colspan="2">PART TIME</th>
                            <th colspan="2">TEMPORARY SUBSTITUTION</th>
                            <th colspan="2">NIGHT SERVICE</th>
                        </tr>
                        <tr>
                            <th>Administrative Time</th>
                            <th>Teaching Time</th>
                            <th>No. of Hrs</th>
                            <th>Time</th>
                            <th>No. of Hrs</th>
                            <th>Time</th>
                            <th>No. of Hrs</th>
                            <th>Time</th>
                            <th>No. of Hrs</th>
                        </tr>
                        <tr>
                            <td>Monday</td>
                            <td id="m_admin_time">
                                <?php 
                                    foreach($other_off as $oo)
                                    {
                                        if($oo[0] == 'Monday' && $oo[1] == 'OH')
                                            echo $oo[2];
                                    } 
                                ?>
                            </td>
                            <td id="m_teach_time">
                                <?php 
                                    foreach($teach_off as $to)
                                    {
                                        if($to[0] == 'Monday' && $to[1] == 'R')
                                            echo $oo[2];
                                    } 
                                ?>
                            </td>
                            <td id="m_tot_reg">
                                <?php 
                                    $temp_mon_oh = '';
                                    $temp_mon_r = '';
                                    $temp_mon_tot = '';
                                    foreach($total_day as $td)
                                    {
                                        if($td[0] == 'Monday' && $td[1] == 'OH')
                                        {
                                            $temp_mon_oh = $td[2];
                                        }

                                        if($td[0] == 'Monday' && $td[1] == 'R')
                                        {
                                            $temp_mon_r= $td[2];
                                        }
                                    } 

                                    if(empty($temp_mon_oh))
                                    {
                                        $temp_mon_oh = 0;
                                    }

                                    if(empty($temp_mon_r))
                                    {
                                        $temp_mon_r = 0;
                                    }

                                    $temp_mon_tot = $temp_mon_oh + $temp_mon_r;

                                    if($temp_mon_tot != 0)
                                    {
                                        echo $temp_mon_tot;
                                    }
                                ?>
                            </td>
                            <td id="m_pt_time">
                                <?php 
                                    foreach($teach_off as $to)
                                    {
                                        if($to[0] == 'Monday' && $to[1] == 'PT')
                                            echo $oo[2];
                                    } 
                                ?>
                            </td>
                            <td id="m_tot_pt">
                                <?php 
                                    foreach($total_day as $td)
                                    {
                                        if($td[0] == 'Monday' && $td[1] == 'PT')
                                            echo $td[2];
                                    } 
                                ?>
                            </td>
                            <td id="m_ts_time">
                                <?php 
                                    foreach($teach_off as $to)
                                    {
                                        if($to[0] == 'Monday' && $to[1] == 'TS')
                                            echo $oo[2];
                                    } 
                                ?>
                            </td>
                            <td id="m_tot_ts">
                                <?php 
                                    foreach($total_day as $td)
                                    {
                                        if($td[0] == 'Monday' && $td[1] == 'TS')
                                            echo $td[2];
                                    } 
                                ?>
                            </td>
                            <td id="m_ns_time">
                                <?php 
                                    foreach($other_off as $oo)
                                    {
                                        if($oo[0] == 'Monday' && $oo[1] == 'NO')
                                            echo $oo[2];
                                    } 
                                ?>
                            </td>
                            <td id="m_tot_ns">
                                <?php 
                                    foreach($total_day as $td)
                                    {
                                        if($td[0] == 'Monday' && $td[1] == 'NO')
                                            echo $td[2];
                                    } 
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Tuesday</td>
                            <td id="t_admin_time">
                                <?php 
                                    foreach($other_off as $oo)
                                    {
                                        if($oo[0] == 'Tuesday' && $oo[1] == 'OH')
                                            echo $oo[2];
                                    } 
                                ?>
                            </td>
                            <td id="t_teach_time">
                                <?php 
                                    foreach($teach_off as $to)
                                    {
                                        if($to[0] == 'Tuesday' && $to[1] == 'R')
                                            echo $oo[2];
                                    } 
                                ?>
                            </td>
                            <td id="t_tot_reg">
                                <?php 
                                    $temp_tues_oh = '';
                                    $temp_tues_r = '';
                                    $temp_tues_tot = '';
                                    foreach($total_day as $td)
                                    {
                                        if($td[0] == 'Tuesday' && $td[1] == 'OH')
                                        {
                                            $temp_tues_oh = $td[2];
                                        }

                                        if($td[0] == 'Tuesday' && $td[1] == 'R')
                                        {
                                            $temp_tues_r= $td[2];
                                        }
                                    } 

                                    if(empty($temp_tues_oh))
                                    {
                                        $temp_tues_oh = 0;
                                    }

                                    if(empty($temp_mon_r))
                                    {
                                        $temp_tues_r = 0;
                                    }

                                    $temp_tues_tot = $temp_tues_oh + $temp_tues_r;

                                    if($temp_tues_tot != 0)
                                    {
                                        echo $temp_tues_tot;
                                    }
                                ?>
                            </td>
                            <td id="t_pt_time">
                                <?php 
                                    foreach($teach_off as $to)
                                    {
                                        if($to[0] == 'Tuesday' && $to[1] == 'PT')
                                            echo $oo[2];
                                    } 
                                ?>
                            </td>
                            <td id="t_tot_pt">
                                <?php 
                                    foreach($total_day as $td)
                                    {
                                        if($td[0] == 'Tuesday' && $td[1] == 'PT')
                                            echo $td[2];
                                    } 
                                ?>
                            </td>
                            <td id="t_ts_time">
                                <?php 
                                    foreach($teach_off as $to)
                                    {
                                        if($to[0] == 'Tuesday' && $to[1] == 'TS')
                                            echo $oo[2];
                                    } 
                                ?>
                            </td>
                            <td id="t_tot_ts">
                                <?php 
                                    foreach($total_day as $td)
                                    {
                                        if($td[0] == 'Tuesday' && $td[1] == 'TS')
                                            echo $td[2];
                                    } 
                                ?>
                            </td>
                            <td id="t_ns_time">
                                <?php 
                                    foreach($other_off as $oo)
                                    {
                                        if($oo[0] == 'Tuesday' && $oo[1] == 'NO')
                                            echo $oo[2];
                                    } 
                                ?>
                            </td>
                            <td id="t_tot_ns">
                                <?php 
                                    foreach($total_day as $td)
                                    {
                                        if($td[0] == 'Tuesday' && $td[1] == 'NO')
                                            echo $td[2];
                                    } 
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Wednesday</td>
                            <td id="w_admin_time">
                                <?php 
                                    foreach($other_off as $oo)
                                    {
                                        if($oo[0] == 'Wednesday' && $oo[1] == 'OH')
                                            echo $oo[2];
                                    } 
                                ?>
                            </td>
                            <td id="w_teach_time">
                                <?php 
                                    foreach($teach_off as $to)
                                    {
                                        if($to[0] == 'Wednesday' && $to[1] == 'R')
                                            echo $oo[2];
                                    } 
                                ?>
                            </td>
                            <td id="w_tot_reg">
                                <?php 
                                    $temp_wed_oh = '';
                                    $temp_wed_r = '';
                                    $temp_wed_tot = '';
                                    foreach($total_day as $td)
                                    {
                                        if($td[0] == 'Wednesday' && $td[1] == 'OH')
                                        {
                                            $temp_wed_oh = $td[2];
                                        }

                                        if($td[0] == 'Wednesday' && $td[1] == 'R')
                                        {
                                            $temp_wed_r= $td[2];
                                        }
                                    } 

                                    if(empty($temp_wed_oh))
                                    {
                                        $temp_wed_oh = 0;
                                    }

                                    if(empty($temp_wed_r))
                                    {
                                        $temp_wed_r = 0;
                                    }

                                    $temp_wed_tot = $temp_wed_oh + $temp_wed_r;

                                    if($temp_wed_tot != 0)
                                    {
                                        echo $temp_wed_tot;
                                    }
                                ?>
                            </td>
                            <td id="w_pt_time">
                                <?php 
                                    foreach($teach_off as $to)
                                    {
                                        if($to[0] == 'Wednesday' && $to[1] == 'PT')
                                            echo $oo[2];
                                    } 
                                ?>
                            </td>
                            <td id="w_tot_pt">
                                <?php 
                                    foreach($total_day as $td)
                                    {
                                        if($td[0] == 'Wednesday' && $td[1] == 'PT')
                                            echo $td[2];
                                    } 
                                ?>
                            </td>
                            <td id="w_ts_time">
                                <?php 
                                    foreach($teach_off as $to)
                                    {
                                        if($to[0] == 'Wednesday' && $to[1] == 'TS')
                                            echo $oo[2];
                                    } 
                                ?>
                            </td>
                            <td id="w_tot_ts">
                                <?php 
                                    foreach($total_day as $td)
                                    {
                                        if($td[0] == 'Wednesday' && $td[1] == 'TS')
                                            echo $td[2];
                                    } 
                                ?>
                            </td>
                            <td id="w_ns_time">
                                <?php 
                                    foreach($other_off as $oo)
                                    {
                                        if($oo[0] == 'Wednesday' && $oo[1] == 'NO')
                                            echo $oo[2];
                                    } 
                                ?>
                            </td>
                            <td id="w_tot_ns">
                                <?php 
                                    foreach($total_day as $td)
                                    {
                                        if($td[0] == 'Wednesday' && $td[1] == 'NO')
                                            echo $td[2];
                                    } 
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Thursday</td>
                            <td id="th_admin_time">
                                <?php 
                                    foreach($other_off as $oo)
                                    {
                                        if($oo[0] == 'Thursday' && $oo[1] == 'OH')
                                            echo $oo[2];
                                    } 
                                ?>
                            </td>
                            <td id="th_teach_time">
                                <?php 
                                    foreach($teach_off as $to)
                                    {
                                        if($to[0] == 'Thursday' && $to[1] == 'R')
                                            echo $oo[2];
                                    } 
                                ?>
                            </td>
                            <td id="th_tot_reg">
                                <?php 
                                    $temp_thu_oh = '';
                                    $temp_thu_r = '';
                                    $temp_thu_tot = '';
                                    foreach($total_day as $td)
                                    {
                                        if($td[0] == 'Thursday' && $td[1] == 'OH')
                                        {
                                            $temp_thu_oh = $td[2];
                                        }

                                        if($td[0] == 'Thursday' && $td[1] == 'R')
                                        {
                                            $temp_thu_r= $td[2];
                                        }
                                    } 

                                    if(empty($temp_thu_oh))
                                    {
                                        $temp_thu_oh = 0;
                                    }

                                    if(empty($temp_thu_r))
                                    {
                                        $temp_thu_r = 0;
                                    }

                                    $temp_thu_tot = $temp_thu_oh + $temp_thu_r;

                                    if($temp_thu_tot)
                                    {
                                        echo $temp_thu_tot;
                                    }
                                ?>
                            </td>
                            <td id="th_pt_time">
                                <?php 
                                    foreach($teach_off as $to)
                                    {
                                        if($to[0] == 'Thursday' && $to[1] == 'PT')
                                            echo $oo[2];
                                    } 
                                ?>
                            </td>
                            <td id="th_tot_pt">
                                <?php 
                                    foreach($total_day as $td)
                                    {
                                        if($td[0] == 'Thursday' && $td[1] == 'PT')
                                            echo $td[2];
                                    } 
                                ?>
                            </td>
                            <td id="th_ts_time">
                                <?php 
                                    foreach($teach_off as $to)
                                    {
                                        if($to[0] == 'Thursday' && $to[1] == 'TS')
                                            echo $oo[2];
                                    } 
                                ?>
                            </td>
                            <td id="th_tot_ts">
                                <?php 
                                    foreach($total_day as $td)
                                    {
                                        if($td[0] == 'Thursday' && $td[1] == 'TS')
                                            echo $td[2];
                                    } 
                                ?>
                            </td>
                            <td id="th_ns_time">
                                <?php 
                                    foreach($other_off as $oo)
                                    {
                                        if($oo[0] == 'Thursday' && $oo[1] == 'NO')
                                            echo $oo[2];
                                    } 
                                ?>
                            </td>
                            <td id="th_tot_ns">
                                <?php 
                                    foreach($total_day as $td)
                                    {
                                        if($td[0] == 'Thursday' && $td[1] == 'NO')
                                            echo $td[2];
                                    } 
                                ?>
                            </td>
                        </tr> 
                        <tr>
                            <td>Friday</td>
                            <td id="f_admin_time">
                                <?php 
                                    foreach($other_off as $oo)
                                    {
                                        if($oo[0] == 'Friday' && $oo[1] == 'OH')
                                            echo $oo[2];
                                    } 
                                ?>
                            </td>
                            <td id="f_teach_time">
                                <?php 
                                    foreach($teach_off as $to)
                                    {
                                        if($to[0] == 'Friday' && $to[1] == 'R')
                                            echo $oo[2];
                                    } 
                                ?>
                            </td>
                            <td id="f_tot_reg">
                                <?php 
                                    $temp_fri_oh = '';
                                    $temp_fri_r = '';
                                    $temp_fri_tot = '';
                                    foreach($total_day as $td)
                                    {
                                        if($td[0] == 'Friday' && $td[1] == 'OH')
                                        {
                                            $temp_fri_oh = $td[2];
                                        }

                                        if($td[0] == 'Friday' && $td[1] == 'R')
                                        {
                                            $temp_fri_r= $td[2];
                                        }
                                    } 

                                    if(empty($temp_fri_oh))
                                    {
                                        $temp_fri_oh = 0;
                                    }

                                    if(empty($temp_fri_r))
                                    {
                                        $temp_fri_r = 0;
                                    }

                                    $temp_fri_tot = $temp_fri_oh + $temp_fri_r;

                                    if($temp_fri_tot != 0)
                                    {
                                        echo $temp_fri_tot;
                                    }
                                ?>
                            </td>
                            <td id="f_pt_time">
                                <?php 
                                    foreach($teach_off as $to)
                                    {
                                        if($to[0] == 'Friday' && $to[1] == 'PT')
                                            echo $oo[2];
                                    } 
                                ?>
                            </td>
                            <td id="f_tot_pt">
                                <?php 
                                    foreach($total_day as $td)
                                    {
                                        if($td[0] == 'Friday' && $td[1] == 'PT')
                                            echo $td[2];
                                    } 
                                ?>
                            </td>
                            <td id="f_ts_time">
                                <?php 
                                    foreach($teach_off as $to)
                                    {
                                        if($to[0] == 'Friday' && $to[1] == 'TS')
                                            echo $oo[2];
                                    } 
                                ?>
                            </td>
                            <td id="f_tot_ts">
                                <?php 
                                    foreach($total_day as $td)
                                    {
                                        if($td[0] == 'Friday' && $td[1] == 'TS')
                                            echo $td[2];
                                    } 
                                ?>
                            </td>
                            <td id="f_ns_time">
                                <?php 
                                    foreach($other_off as $oo)
                                    {
                                        if($oo[0] == 'Friday' && $oo[1] == 'NO')
                                            echo $oo[2];
                                    } 
                                ?>
                            </td>
                            <td id="f_tot_ns">
                                <?php 
                                    foreach($total_day as $td)
                                    {
                                        if($td[0] == 'Friday' && $td[1] == 'NO')
                                            echo $td[2];
                                    }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Saturday</td>
                            <td id="st_admin_time">
                                <?php 
                                    foreach($other_off as $oo)
                                    {
                                        if($oo[0] == 'Saturday' && $oo[1] == 'OH')
                                            echo $oo[2];
                                    } 
                                ?>
                            </td>
                            <td id="st_teach_time">
                                <?php 
                                    foreach($teach_off as $to)
                                    {
                                        if($to[0] == 'Saturday' && $to[1] == 'R')
                                            echo $oo[2];
                                    } 
                                ?>
                            </td>
                            <td id="st_tot_reg">
                                <?php 
                                    $temp_sat_oh = '';
                                    $temp_sat_r = '';
                                    $temp_sat_tot = '';
                                    foreach($total_day as $td)
                                    {
                                        if($td[0] == 'Saturday' && $td[1] == 'OH')
                                        {
                                            $temp_sat_oh = $td[2];
                                        }

                                        if($td[0] == 'Saturday' && $td[1] == 'R')
                                        {
                                            $temp_sat_r= $td[2];
                                        }
                                    } 

                                    if(empty($temp_fri_oh))
                                    {
                                        $temp_sat_oh = 0;
                                    }

                                    if(empty($temp_fri_r))
                                    {
                                        $temp_sat_r = 0;
                                    }

                                    $temp_sat_tot = $temp_sat_oh + $temp_sat_r;

                                    if($temp_sat_tot != 0)
                                    {
                                        echo $temp_sat_tot;
                                    }
                                ?>
                            </td>
                            <td id="st_pt_time">
                                <?php 
                                    foreach($teach_off as $to)
                                    {
                                        if($to[0] == 'Saturday' && $to[1] == 'PT')
                                            echo $oo[2];
                                    } 
                                ?>
                            </td>
                            <td id="st_tot_pt">
                                <?php 
                                    foreach($total_day as $td)
                                    {
                                        if($td[0] == 'Saturday' && $td[1] == 'PT')
                                            echo $td[2];
                                    } 
                                ?>
                            </td>
                            <td id="st_ts_time">
                                <?php 
                                    foreach($teach_off as $to)
                                    {
                                        if($to[0] == 'Saturday' && $to[1] == 'TS')
                                            echo $oo[2];
                                    } 
                                ?>
                            </td>
                            <td id="st_tot_ts">
                                <?php 
                                    foreach($total_day as $td)
                                    {
                                        if($td[0] == 'Saturday' && $td[1] == 'TS')
                                            echo $td[2];
                                    } 
                                ?>
                            </td>
                            <td id="st_ns_time">
                                <?php 
                                    foreach($other_off as $oo)
                                    {
                                        if($oo[0] == 'Saturday' && $oo[1] == 'NO')
                                            echo $oo[2];
                                    } 
                                ?>
                            </td>
                            <td id="st_tot_ns">
                                <?php 
                                    foreach($total_day as $td)
                                    {
                                        if($td[0] == 'Saturday' && $td[1] == 'NO')
                                            echo $td[2];
                                    } 
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Sunday</td>
                            <td id="sn_admin_time">
                                <?php 
                                    foreach($other_off as $oo)
                                    {
                                        if($oo[0] == 'Sunday' && $oo[1] == 'OH')
                                            echo $oo[2];
                                    } 
                                ?>
                            </td>
                            <td id="sn_teach_time">
                                <?php 
                                    foreach($teach_off as $to)
                                    {
                                        if($to[0] == 'Sunday' && $to[1] == 'R')
                                            echo $oo[2];
                                    } 
                                ?>
                            </td>
                            <td id="sn_tot_reg">
                                <?php 
                                    $temp_sun_oh = '';
                                    $temp_sun_r = '';
                                    $temp_sun_tot = '';
                                    foreach($total_day as $td)
                                    {
                                        if($td[0] == 'Sunday' && $td[1] == 'OH')
                                        {
                                            $temp_sun_oh = $td[2];
                                        }

                                        if($td[0] == 'Sunday' && $td[1] == 'R')
                                        {
                                            $temp_sun_r= $td[2];
                                        }
                                    } 

                                    if(empty($temp_sun_oh))
                                    {
                                        $temp_sun_oh = 0;
                                    }

                                    if(empty($temp_sun_r))
                                    {
                                        $temp_sun_r = 0;
                                    }

                                    $temp_sun_tot = $temp_sun_oh + $temp_sun_r;

                                    if($temp_sun_tot != 0)
                                    {
                                        echo $temp_sun_tot;
                                    }
                                ?>
                            </td>
                            <td id="sn_pt_time">
                                <?php 
                                    foreach($teach_off as $to)
                                    {
                                        if($to[0] == 'Sunday' && $to[1] == 'PT')
                                            echo $oo[2];
                                    } 
                                ?>
                            </td>
                            <td id="sn_tot_pt">
                                <?php 
                                    foreach($total_day as $td)
                                    {
                                        if($td[0] == 'Sunday' && $td[1] == 'PT')
                                            echo $td[2];
                                    } 
                                ?>
                            </td>
                            <td id="sn_ts_time">
                                <?php 
                                    foreach($teach_off as $to)
                                    {
                                        if($to[0] == 'Sunday' && $to[1] == 'TS')
                                            echo $oo[2];
                                    } 
                                ?>
                            </td>
                            <td id="sn_tot_ts">
                                <?php 
                                    foreach($total_day as $td)
                                    {
                                        if($td[0] == 'Sunday' && $td[1] == 'TS')
                                            echo $td[2];
                                    } 
                                ?>
                            </td>
                            <td id="sn_ns_time">
                                <?php 
                                    foreach($other_off as $oo)
                                    {
                                        if($oo[0] == 'Sunday' && $oo[1] == 'NO')
                                            echo $oo[2];
                                    } 
                                ?>
                            </td>
                            <td id="sn_tot_ns">
                                <?php 
                                    foreach($total_day as $td)
                                    {
                                        if($td[0] == 'Sunday' && $td[1] == 'NO')
                                            echo $td[2];
                                    } 
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Total</td>
                            <td></td>
                            <td></td>
                            <td id="tot_reg">
                                <?php 
                                    $temp_oh = '';
                                    $temp_r = '';
                                    $temp_total = '';
                                    foreach($total_type as $tt)
                                    {
                                        if($tt[1] == 'OH')
                                        {
                                            $temp_oh = $tt[0];
                                        }

                                        if($tt[1] == 'R')
                                        {
                                            $temp_r = $tt[0];
                                        }
                                    }

                                    if(empty($temp_oh))
                                    {
                                        $temp_oh = 0;
                                    }

                                    if(empty($temp_r))
                                    {
                                        $temp_r = 0;
                                    }

                                    $temp_total = $temp_oh + $temp_r;

                                    echo $temp_total;
                                ?>
                            </td>
                            <td></td>
                            <td id="tot_pt">
                                <?php 
                                    $temp_pt = '';
                                    foreach($total_type as $tt)
                                    {
                                        if($tt[1] == 'PT')
                                        {
                                            $temp_pt = $tt[0];
                                        }
                                    }

                                    if(empty($temp_pt))
                                    {
                                        $temp_pt = 0;
                                    }

                                    echo $temp_pt;
                                ?>
                            </td>
                            <td></td>
                            <td id="tot_ts">
                                <?php 
                                    $temp_ts = '';
                                    foreach($total_type as $tt)
                                    {
                                        if($tt[1] == 'TS')
                                        {
                                            $temp_ts = $tt[0];
                                        }
                                    } 

                                    if(empty($temp_ts))
                                    {
                                        $temp_ts = 0;
                                    }

                                    echo $temp_ts;
                                ?>
                            </td>
                            <td></td>
                            <td id="tot_ns">
                                <?php 
                                    $temp_no = '';
                                    foreach($total_type as $tt)
                                    {
                                        if($tt[1] == 'NO')
                                        {
                                            $temp_no = $tt[0];
                                        }
                                    } 

                                    if(empty($temp_no))
                                    {
                                        $temp_no = 0;
                                    }

                                    echo $temp_no;
                                ?>
                            </td>
                        </tr>            
                </table>
                </div>		
           	</div>
           	
           	<br><br>
           	<div style="text-align: left;">
	           	<br><br><br>
	           	<div style="page-break-inside: avoid;">
	           		<p>
	           			<?php echo date("d/m/Y"); ?><br>
	           			<span style="font-size:90%; margin-right: 10%;">Date
                        <span style="font-size:90%; margin-left: 30%;">Signature of Faculty
                        <span style="font-size:90%; margin-left: 20%;">Immediate Supervisor(Signature over printed name)
	           		</p>
	           	</div>
           	</div>
           	
</body>
</html>
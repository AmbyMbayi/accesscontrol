<?php 
class Accesscontrol_model extends CI_Model{

	public function get_list(){

		

		 $date= $this->db->query("select `USERID`,`username`,`devicename` ,substring(checktime, 1, 10) as date,substring(checktime, 11) as time from accesscontrols where substring(checktime, 1, 10) < '2018-09-31' and substring(checktime, 1, 10) > '2018-09-01' group by time");

		return $date;
		

		
	

 	/* $date= $this->db->query("SELECT USERID, username, devicename,  MAX(CHECKTIME) AS   date, substring(checktime, 11) as time FROM accesscontrols WHERE DATE(CHECKTIME) > '2018-09-01' AND DATE(CHECKTIME) >'2018-09-12' GROUP BY USERID");

		return $date;
*/
	}
}

 ?>
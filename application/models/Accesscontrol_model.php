<?php 
class Accesscontrol_model extends CI_Model{
	public function __construct(){
			$this->load->database();
		}

	public function get_list(){


		// Get the list of all the dates
		$all_dates = "SELECT substr(checktime, 1, 10) as date from checkinout group by date;";
		$dates = $this->db->query($all_dates)->result();

		$entryLogin = [];

		// Now we traverse all the dates available getting all user records for that date and merging them with the previous one.
		foreach($dates as $date){
			$date = $date->date;

			$sqlString= "SELECT `NAME`,`TITLE`,`DEPTNAME` , substring(CHECKTIME,1,10)as date ,substring(CHECKTIME,11) AS time FROM `checkinout` c INNER JOIN userinfo u on c.USERID=u.USERID INNER JOIN departments d on d.DEPTID=u.DEFAULTDEPTID WHERE `CHECKTIME` LIKE '%".$date."%' GROUP BY c.USERID";

			$entryLogin  = array_merge($entryLogin, $this->db->query($sqlString)->result());
		}
		
		return $entryLogin;
	}
}

 ?>
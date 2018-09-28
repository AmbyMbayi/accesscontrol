<?php 
class Accesscontrol_model extends CI_Model{

	public function get_list(){


		// Get the list of all the dates
		$all_dates = "SELECT substr(checktime, 1, 10) as date from accesscontrols group by date;";
		$dates = $this->db->query($all_dates)->result();

		$entryLogin = [];

		// Now we traverse all the dates available getting all user records for that date and merging them with the previous one.
		foreach($dates as $date){
			$date = $date->date;

			// Select only the records of the given date.
			$sqlString = "SELECT `USERID`,`username`,`devicename`, substring(CHECKTIME,1,10)as date ,substring(CHECKTIME,11) AS time FROM `accesscontrols` WHERE `CHECKTIME` LIKE '%".$date."%' GROUP BY USERID";

			$entryLogin  = array_merge($entryLogin, $this->db->query($sqlString)->result());
		}
		
		return $entryLogin;
	}
}

 ?>
# accesscontrol

SELECT `USERID`,`username`,`devicename`, substring(CHECKTIME,1,10)as date ,substring(CHECKTIME,11) AS time FROM `accesscontrols` WHERE `CHECKTIME` LIKE '2018-09-12%' GROUP BY USERID

if i run the above query, it displays records of users in that date with their earliest time.

example when you search FAITH, it will bring her records as 06:58:08
Ruth N  earliest time is 07:12:25
Abdile earliest time is 09:12:28

now thats only for 2018-09-12

I want it to display records of a given range with users and their earliest time.

eg faith 2018-09-12 06:58:08
 faith 2018-09-13 06:45:09
 faith 2018-09-14 07:45:03

 same for every user in that sql file.

 naeleweka hope so. Kindly help!


 you can try running it. just pull the project copy it and boom! no crazy configs. Im only working with Accesscontrol_model.php(model folder), accesscontrols_view.php(view folder), Accesscontrols.php(controller)

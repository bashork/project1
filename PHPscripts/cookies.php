<?php   // when you access website xxx that piece of data will be relayed 
			//is stored for later access
			//are useful to store data which is meaningful to hold a long time

$time =time();
setcookie('username','Pjotr', time()+ 1000); //main 3 arguments are: name, value,exp.date(in sec)
echo $_COOKIE['username']; 
setcookie('username','Pjotr', time()- 1000); // unsetting the cookie
															//	f.e. for logout
 ?>
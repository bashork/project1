<?php
include_once 'psl-config.php';
function sec_session_start(){
	$session_name = 'sec_session_id'; //set custom! session name
	$secure = SECURE; 
	//thus stops javascript from accessing to the session id
	$httponly = true; 

	//forces sessions to only use cookies
	if (ini_set('session.use_only_cookies',1) === false) {
		header('location: ../error.php?err=Could not initiate a safe session(ini_set)');
		exit();
	} 
	#get current cookies parameters
	$cookieParams = session_get_cookie_params();
	session_set_cookie_params(

	$cookieParams['lifetime'],
	$cookieParams['path'],
	$cookieParams['domain'],
	$secure,
	$httponly);

//sets the session name to the one set above
	session_name($session_name);
	session_start();
	//session_regenerate_id(false); //regenerates the session, delete the old one

}

function login($email,$password,$mysqli){
//using prepared statements denies possibility for SQL injection
	if($stmt = $mysqli->prepare('SELECT id,username,password,salt FROM members WHERE email = ? limit 1' )){
	$stmt->bind_param('s',$email);
	$stmt->execute(); //execute the prepared query upside in() 
	$stmt->store_result();

	//get result from variables
	$stmt->bind_result($user_id,$username,$db_password,$salt);
	$stmt->fetch();

	//hash the pasword 
	$password = hash('sha512',$password . $salt);
	if ($stmt->num_rows == 1) {
		//check does the acc exist ---> check is locked cause too many login attempts
		if(checkbrute($user_id,$mysqli) == true){
			return false;

		} else {
			//check if the password in the db matches to that what was submitted
			if ($db_password == $password) {
				# password is correct
				# get the user-browser
				$user_brouser = $_SERVER['HTTP_USER_AGENT'];
				// XSS protection as we might print this value
				$username = preg_replace('/[^a-zA-Z0-9_\-]+/', '', $username);
				$_session['username'] = $username;
				$_session['login_string'] = hash('sha512', $password . $user_brouser);
				//login successful
				return true;
			} else{
				//pswd is incorrect
				//record thus in db
				$now = time();
				$mysqli = query('INSERT INTO login_attempts(user_id,time) values (\'$user_id\',"$now")');
				return false;
			}
		}
	} else{
		//no user exists
		return false;
	}


	}
}

#next function sanitizes the output from the PHP_SELF server variable
#it's modification of a function of the same name used by the wordpress CMS
#it's better than simple wrap to htmlentities due to sequrity reasons

function esc_url($url){
	if('' == $url){
		return $url;
	}
	$url = preg_replace('|[^a-z0-9-~+_.?#=!&;,/:%@$\|*\'()\\x80-\\xff]|i', '', $url);
 
    $strip = array('%0d', '%0a', '%0D', '%0A');
    $url = (string) $url;
 
    $count = 1;
    while ($count) {
        $url = str_replace($strip, '', $url, $count);
    }
 
    $url = str_replace(';//', '://', $url);
 
    $url = htmlentities($url);
 
    $url = str_replace('&amp;', '&#038;', $url);
    $url = str_replace("'", '&#039;', $url);
 
    if ($url[0] !== '/') {
        // We're only interested in relative links from $_SERVER['PHP_SELF']
        return '';
    } else {
        return $url;
    }
}
function login_check($mysqli) {
    // Check if all session variables are set 
    if (isset($_SESSION['user_id'], 
                        $_SESSION['username'], 
                        $_SESSION['login_string'])) {
 
        $user_id = $_SESSION['user_id'];
        $login_string = $_SESSION['login_string'];
        $username = $_SESSION['username'];
 
        // Get the user-agent string of the user.
        $user_browser = $_SERVER['HTTP_USER_AGENT'];
 
        if ($stmt = $mysqli->prepare("SELECT password 
                                      FROM members 
                                      WHERE id = ? LIMIT 1")) {
            // Bind "$user_id" to parameter. 
            $stmt->bind_param('i', $user_id);
            $stmt->execute();   // Execute the prepared query.
            $stmt->store_result();
 
            if ($stmt->num_rows == 1) {
                // If the user exists get variables from result.
                $stmt->bind_result($password);
                $stmt->fetch();
                $login_check = hash('sha512', $password . $user_browser);
 
                if ($login_check == $login_string) {
                    // Logged In!!!! 
                    return true;
                } else {
                    // Not logged in 
                    return false;
                }
            } else {
                // Not logged in 
                return false;
            }
        } else {
            // Not logged in 
            return false;
        }
    } else {
        // Not logged in 
        return false;
    }
}

?>
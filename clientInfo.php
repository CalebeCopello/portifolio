<?php
// IP
if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    echo 'IP = '.$_SERVER['HTTP_CLIENT_IP'].' parte de uma rede compartilhada<br>';
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    echo 'IP = '. $_['HTTP_X_FORWARDED_FOR'].' vindo de um servidor de proxy<br>';
} else { 
    echo 'IP ='.$_SERVER['REMOTE_ADDR'].' cliente remoto<br>';
}
// OS
$os = $_SERVER['HTTP_USER_AGENT'];
echo $os.'<br>';
// Lingua
$language = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
echo $language.'<br>';
?>

<?php
/*
function get_operating_system() {
    $u_agent = isset($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : '';
    $operating_system = 'Unknown Operating System';

    //Get the operating_system name
	if($u_agent) {
		if (preg_match('/linux/i', $u_agent)) {
			$operating_system = 'Linux';
		} elseif (preg_match('/macintosh|mac os x|mac_powerpc/i', $u_agent)) {
			$operating_system = 'Mac';
		} elseif (preg_match('/windows|win32|win98|win95|win16/i', $u_agent)) {
			$operating_system = 'Windows';
		} elseif (preg_match('/ubuntu/i', $u_agent)) {
			$operating_system = 'Ubuntu';
		} elseif (preg_match('/iphone/i', $u_agent)) {
			$operating_system = 'IPhone';
		} elseif (preg_match('/ipod/i', $u_agent)) {
			$operating_system = 'IPod';
		} elseif (preg_match('/ipad/i', $u_agent)) {
			$operating_system = 'IPad';
		} elseif (preg_match('/android/i', $u_agent)) {
			$operating_system = 'Android';
		} elseif (preg_match('/blackberry/i', $u_agent)) {
			$operating_system = 'Blackberry';
		} elseif (preg_match('/webos/i', $u_agent)) {
			$operating_system = 'Mobile';
		}
	} else {
		$operating_system = php_uname('s');
	}
    
    return $operating_system;
}

echo get_operating_system();
*/
?>
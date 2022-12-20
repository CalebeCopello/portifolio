<?php

// IP

if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    echo 'IP = '.$_SERVER['HTTP_CLIENT_IP'].' parte de uma rede compartilhada<br>';
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    echo 'IP = '. $_['HTTP_X_FORWARDED_FOR'].' vindo de um servidor de proxy<br>';
} else { 
    echo 'IP ='.$_SERVER['REMOTE_ADDR'].' cliente remoto<br>';
}

// Browser

$u_agent = $_SERVER['HTTP_USER_AGENT'];
if (preg_match('/Opera/i', $u_agent) || preg_match('/OPR/i', $u_agent)) {
    echo 'Opera'.'<br>';
} 
elseif (preg_match('/Edg/i', $u_agent) || preg_match('/Edge/i', $u_agent)) {
    echo 'Edge'.'<br>';
} 
elseif (preg_match('/Chrome/i', $u_agent)) {
    echo 'Chrome'.'<br>';
} 
elseif (preg_match('/Safari/i', $u_agent)) {
    echo 'Safari'.'<br>';
} 
elseif (preg_match('/Firefox/i', $u_agent)) {
    echo 'Firefox'.'<br>';
} 
elseif (preg_match('/MSIE/i', $u_agent) || preg_match('/Trident/i', $u_agent) || preg_match('/Trident/////i', $u_agent)) {
    echo 'Internet Explorer'.'<br>';
} 
else {
    echo 'Outro.'.'<br>';
}

//OS

//Linux
if (preg_match('/linux/', $u_agent)) {
    echo 'Linux'.'<br>';
} 
elseif (preg_match('/Ubuntu/i', $u_agent)) {
    echo 'Ubuntu'.'<br>';
}
//Mobile 
elseif (preg_match('/webos/', $u_agent)) {
    echo 'Mobile/Webos'.'<br>';
} 
elseif (preg_match('/blackberry/i', $u_agent)) {
    echo 'Blackberry'.'<br>';
}  
elseif (preg_match('/android/i', $u_agent)) {
    echo 'Android'.'<br>';
}
//Mac
elseif (preg_match('/ipod/i', $u_agent)) {
    echo 'IPod'.'<br>';
} 
elseif (preg_match('/ipad/i', $u_agent)) {
    echo 'IPad'.'<br>';
} 
elseif (preg_match('/iphone/i', $u_agent)) {
    echo 'IPhone'.'<br>';
} 
elseif (preg_match('/mac_power/i', $u_agent) || (preg_match('/mac os x/i', $u_agent))) {
    echo 'Mac OS X'.'<br>';
} 
elseif (preg_match('/mac_powerpc/i', $u_agent)) {
    echo 'Mac OS 9'.'<br>';
}
//Windows
elseif (preg_match('/windows nt 10/i', $u_agent)) {
    echo 'Windows 10'.'<br>';
}
elseif (preg_match('/windows nt 6.3/i', $u_agent)) {
    echo 'Windows 8.1'.'<br>';
} 
elseif (preg_match('/windows nt 6.2/i', $u_agent)) {
    echo 'Windows 8'.'<br>';
}
elseif (preg_match('/windows nt 6.1/i', $u_agent)) {
    echo 'Windows 7'.'<br>';
}
elseif (preg_match('/windows nt 6.0/i', $u_agent)) {
    echo 'Windows Vista'.'<br>';
}
elseif (preg_match('/windows nt 5.2/i', $u_agent)) {
    echo 'Windows Server 2003/XP x64'.'<br>';
}
elseif (preg_match('/windows nt 5.1/i', $u_agent)) {
    echo 'Windows XP'.'<br>';
}
elseif (preg_match('/windows xp/i', $u_agent)) {
    echo 'Windows XP'.'<br>';
}
elseif(preg_match('/windows nt 5.0/i', $u_agent)) {
    echo 'Windows 2000'.'<br>';
}
elseif(preg_match('/windows me/i', $u_agent)) {
    echo 'Windows ME'.'<br>';
}
elseif(preg_match('/win98/i', $u_agent)) {
    echo 'Windows 98'.'<br>';
}
elseif(preg_match('/win95/i', $u_agent)) {
    echo 'Windows 95'.'<br>';
}
elseif(preg_match('/win16/i', $u_agent)) {
    echo 'Windows 3.11'.'<br>';
}
//Não encontrado
else {
    echo 'Outro'.'<br>';
}

//Lingua

$language = locale_accept_from_http($_SERVER['HTTP_ACCEPT_LANGUAGE']);
echo $language.'<br>';

//Localização

//ip de exemplo
$ip = '179.189.152.132';

$geo = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.$ip));
echo $geo['geoplugin_countryName'].'<br>';
//$teste = array('teste'=>'resultado', 'teste2'=>'segundo resultado');
//echo $teste;
?>
<?php
class clientInfo {
    private $ip;
    private $ipExtra;
    private $browser;
    private $os;
    private $language;
    private $countryName;
    private $countryCode;
    private $stateName;
    private $stateCode;
    private $city;
    function __construct() {
        //**IP
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            $this->ip = $_SERVER['HTTP_CLIENT_IP'];
            $this->ipExtra = 'Parte de uma rede compartilhada';
        } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $this->ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
            $this->ipExtra = 'Vindo de um servidor de proxy';
        } else { 
            $this->ip = $_SERVER['REMOTE_ADDR'];
            $this->ipExtra = 'Cliente remoto';
        }
        //**Browser
        $user_agent = $_SERVER['HTTP_USER_AGENT'];
        if (preg_match('/Opera/i', $user_agent) || preg_match('/OPR/i', $user_agent)) {
            $this->browser = 'Opera';
        } 
        elseif (preg_match('/Edg/i', $user_agent) || preg_match('/Edge/i', $user_agent)) {
            $this->browser = 'Edge';
        } 
        elseif (preg_match('/Chrome/i', $user_agent)) {
            $this->browser = 'Chrome';
        } 
        elseif (preg_match('/Safari/i', $user_agent)) {
            $this->browser = 'Safari';
        } 
        elseif (preg_match('/Firefox/i', $user_agent)) {
            $this->browser = 'Firefox';
        } 
        elseif (preg_match('/MSIE/i', $user_agent) || preg_match('/Trident/i', $user_agent) || preg_match('/Trident/////i', $user_agent)) {
            $this->browser = 'Internet Explorer';
        } 
        else {
            $this->browser = 'Outro.';
        }
        //**OS
        //*Linux
        if (preg_match('/linux/', $user_agent)) {
            $this->os = 'Linux';
        } 
        elseif (preg_match('/Ubuntu/i', $user_agent)) {
            $this->os = 'Ubuntu';
        }
        //*Mobile 
        elseif (preg_match('/webos/', $user_agent)) {
            $this->os = 'Mobile/Webos';
        } 
        elseif (preg_match('/blackberry/i', $user_agent)) {
            $this->os = 'Blackberry';
        }  
        elseif (preg_match('/android/i', $user_agent)) {
            $this->os = 'Android';
        }
        //*Mac
        elseif (preg_match('/ipod/i', $user_agent)) {
            $this->os = 'IPod';
        } 
        elseif (preg_match('/ipad/i', $user_agent)) {
            $this->os = 'IPad';
        } 
        elseif (preg_match('/iphone/i', $user_agent)) {
            $this->os = 'IPhone';
        } 
        elseif (preg_match('/mac_power/i', $user_agent) || (preg_match('/mac os x/i', $user_agent))) {
            $this->os = 'Mac OS X';
        } 
        elseif (preg_match('/mac_powerpc/i', $user_agent)) {
            $this->os = 'Mac OS 9';
        }
        //*Windows
        elseif (preg_match('/windows nt 10/i', $user_agent)) {
            $this->os = 'Windows 10';
        }
        elseif (preg_match('/windows nt 6.3/i', $user_agent)) {
            $this->os = 'Windows 8.1';
        } 
        elseif (preg_match('/windows nt 6.2/i', $user_agent)) {
            $this->os = 'Windows 8';
        }
        elseif (preg_match('/windows nt 6.1/i', $user_agent)) {
            $this->os = 'Windows 7';
        }
        elseif (preg_match('/windows nt 6.0/i', $user_agent)) {
            $this->os = 'Windows Vista';
        }
        elseif (preg_match('/windows nt 5.2/i', $user_agent)) {
            $this->os = 'Windows Server 2003/XP x64';
        }
        elseif (preg_match('/windows nt 5.1/i', $user_agent)) {
            $this->os ='Windows XP';
        }
        elseif (preg_match('/windows xp/i', $user_agent)) {
            $this->os = 'Windows XP';
        }
        elseif(preg_match('/windows nt 5.0/i', $user_agent)) {
            $this->os = 'Windows 2000';
        }
        elseif(preg_match('/windows me/i', $user_agent)) {
            $this->os = 'Windows ME';
        }
        elseif(preg_match('/win98/i', $user_agent)) {
            $this->os = 'Windows 98';
        }
        elseif(preg_match('/win95/i', $user_agent)) {
            $this->os = 'Windows 95';
        }
        elseif(preg_match('/win16/i', $user_agent)) {
            $this->os = 'Windows 3.11';
        }
         //**Lingua
        else {
            $this->os = 'Outro';
        }
        $this->language = locale_accept_from_http($_SERVER['HTTP_ACCEPT_LANGUAGE']);
        //**GeoPlugin
        $ip = '179.189.152.132'; //IP para exemplificar
        //$ip = $this->ip;
        $geo = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.$ip));
        //*Country
        $this->countryName = $geo['geoplugin_countryName'];
        $this->countryCode = $geo['geoplugin_countryCode'];
        //*State
        $this->stateName = $geo['geoplugin_regionName'];
        $this->stateCode = $geo['geoplugin_regionCode'];
        //*City
        $this->city = $geo['geoplugin_city'];
    }
    //TODO ajudar para quando as variaveis estiverem vazias!
    function getIP($a =''){
        if ($a == 'extra') {
            return $this->ip.'('.$this->ipExtra.')'; 
        } else {
            return $this->ip;
        }
    }
    function getBrowser() {
        return $this->browser;
    }
    function getOS() {
        return $this->os;
    }
    function getLanguage() {
        return $this->language;
    }
    function getCountry($a ='') {
        if($a == 'name') {
            return $this->countryName;
        } elseif ($a == 'code') {
            return $this->countryCode;
        } else {
            return $this->countryName.', '.$this->countryCode;
        }
    }
    function getState ($a ='') {
        if($a == 'name') {
            return $this->stateName;
        } elseif ($a == 'code') {
            return $this->stateCode;
        } else {
            return $this->stateName.', '.$this->stateCode;
        }
    }
    function getCity () {
        return $this->city;
    }
}
$client = new clientInfo();
echo 'IP = '.$client->getIP('extra').'<br>';
echo 'Browser = '.$client->getBrowser().'<br>';
echo 'OS = '.$client->getOS().'<br>';
echo 'Língua = '.$client->getLanguage().'<br>';
echo 'Pais = '.$client->getCountry().'<br>';
echo 'Estado = '.$client->getState().'<br>';
echo 'Cidade = '.$client->getCity().'<br>';
?>
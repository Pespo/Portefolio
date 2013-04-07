<?php
$file = isset($_GET['f']) ? $_GET['f'] : null;
$parts = explode('.', $file);  
$extension = $parts[count($parts) - 1];  
switch ($extension) {  
    /* Mise à jour de sécurité suite au commentaire de Quentin_C */  
    case 'php':  
        exit(0);  
        break;  
    case 'css':  
        $contentType = 'text/css';  
        break;  
    case 'js':  
        $contentType = 'text/javascript';  
        break;  
    case 'xml':  
        $contentType = 'text/xml';  
        break;  
    case 'htm':  
    case 'html':  
        $contentType = 'text/html';  
        break;  
    default:  
        $contentType = 'text/plain';  
        break;  
}  
if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip'))  
  ob_start("ob_gzhandler");  
else ob_start();  
  
if (file_exists($_GET['file']))  
{  
    header("Last-Modified: " . gmdate("D, d M Y H:i:s",time()-36000) . " GMT");  
    header("Content-type: $contentType; charset: UTF-8");  
    echo (file_get_contents($_GET['file']));  
    ob_end_flush();  
}  
else  
{  
    header("HTTP/1.0 404 Not Found");  
}  
?> 
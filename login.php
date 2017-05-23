<?php
 
/* Iniciando la sesi�n*/
session_start();
 
/* Cambiar seg�n la ubicaci�n de tu directorio*/
require_once __DIR__ . '/facebook/src/Facebook/autoload.php';
 
$fb = new Facebook\Facebook([
  'app_id' => '428124097567667',
  'app_secret' => '6447f81ed44dc3a258ccd223576abde5',
  'default_graph_version' => 'v2.9',
]);
  
$helper = $fb->getRedirectLoginHelper();
  
$permissions = ['email']; // Permisos opcionales
$loginUrl = $helper->getLoginUrl('http://www.legendofanime.com ', $permissions);
  
/* Link a la p�gina de login*/
echo '<a href="' . htmlspecialchars($loginUrl) . '">Login con Facebook!</a>';
 
?>
<?php 

require 'tropo.class.php';

$session = new Session(); 
$to = "+".$session->getParameters("numberToDial"); 
$name = $session->getParameters("customerName"); 
$msg = $session->getParameters("msg"); 
$msg = $session->getParameters("msg"); 
    
$tropo = new Tropo(); 
    
$tropo->call($to, array('network'=>'PSTN')); 
$tropo->say("Hi ".$name.", ". $msg ); 

return $tropo->RenderJson(); 

?> 


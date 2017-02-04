<?php

require '../vendor/autoload.php';

use MikrotikAPI\Talker\Talker;
use \MikrotikAPI\Entity\Auth;
use MikrotikAPI\Commands\IP\Address;
use MikrotikAPI\Commands\IP\Firewall\FirewallFilter;


$auth = new Auth();
$auth->setHost("1.4.157.45");
$auth->setUsername("admin");
$auth->setPassword("1261");
$auth->setDebug(true);


$talker = new Talker($auth);
//$filter = new FirewallFilter($talker);
//$a = $filter->getAll();


$ipaddr = new Address($talker);
$listIP = $ipaddr->getAll();


MikrotikAPI\Util\DebugDumper::dump($listIP);

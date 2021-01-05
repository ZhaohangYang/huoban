<?php
require_once __DIR__ . "/vendor/autoload.php";

use Huoban\Models\HuobanItem;
use Huoban\Models\HuobanApplication;

defined('IS_TEST') or define('IS_TEST', false);

$application_id = '';
$application_secret = '';
$ticket = HuobanApplication::getEnterpriseTicket($application_id, $application_secret);
HuobanApplication::setTicket($ticket);

$res = HuobanItem::get('2300001282173559');
var_dump($res);

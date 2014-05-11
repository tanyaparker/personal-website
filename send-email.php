<?php 

require_once('ses.php');

$ses = new SimpleEmailService('AKIAIRX3CJYDKYASHY7Q', 'Kh7y4A9BmfSoT9EQq');

$m = new SimpleEmailServiceMessage();
$m->addTo('tanyacparker@gmail.com');
$m->setFrom('Test Name <test@example.com>');
$m->setSubject('You have got Email!');
$m->setMessageFromString('Your message');
$ses->sendEmail($m);

?>
<?php

require __DIR__ . '/lib_ext/autoload.php';

use Notification\Email;

$novoemail = new Email(2,"smtp.live.com", "contato.lvg@hotmail.com", "Lvg@2015","tls", "587");
$novoemail->SendMail('Teste','<p><b>Isso é um teste de  email</b></p>', 'contato.lvg@hotmail.com','Leonardo','webvendedor@yahoo.com.br','Leo Netto');
var_dump($novoemail);
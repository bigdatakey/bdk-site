<?php
if (isset($_POST['project_name'])) {$project_name = $_POST['project_name'];} 
if (isset($_POST['form_subject'])) {$form_subject = $_POST['form_subject'];} 
if (isset($_POST['name'])) {$name = $_POST['name'];} 
if (isset($_POST['tel'])) {$tel = $_POST['tel'];}   
if (isset($_POST['text'])) {$text = $_POST['text'];}   

  
$address  = 'info@bigdatak.com, philip.prosandeev@gmail.com, bigdatak@yandex.ru';
$mes = "От: $project_name\nТема: $form_subject\nИмя: $name\nТелефон: $tel\nEmail: $email\nВопрос: $text";   
$sub='Заявка с сайта BigDATAkey'; 
$email='bigdatak@yandex.ru'; 
$send = mail ($address,$sub,$mes,"Content-type:text/plain; charset = utf-8\r\nFrom:$email");  
?> 
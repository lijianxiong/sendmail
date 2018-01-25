<?php 
require_once "Smtp.class.php";
//******************** 配置信息 ********************************
$smtpserver = "smtp.exmail.qq.com";
//SMTP服务器
$smtpserverport = 25;
//SMTP服务器端口
$smtpusermail = "jianxiongli@essence-edu.com";
//SMTP服务器的用户邮箱
$smtpemailto = "jeromefeng@essence-edu.com";
//发送给谁
$smtpuser = "jianxiongli@essence-edu.com";
//SMTP服务器的用户帐号，注：部分邮箱只需@前面的用户名
$smtppass = "";
//SMTP服务器的用户密码
$mailtitle = '课程更新成功通知！';
//邮件主题
$landingref = '<a href="http://www.essence-edu.com/landing-m.html#freeenroll">查看着陆页!</a>';
$mailtype = "HTML";
//邮件格式（HTML/TXT）,TXT为文本邮件
//************************ 配置信息 ****************************
$smtp = new Smtp($smtpserver, $smtpserverport, true, $smtpuser, $smtppass);
//这里面的一个true是表示使用身份验证,否则不使用身份验证.
$smtp->debug = false;
//是否显示发送的调试信息
//课程配置信息
$path = './txt/count.txt';
$course = '../coursetime.html';
$coursecontent = '../coursecontent.html';
$count = intval(file_get_contents($path));
$times = './txt/times.txt';
$content = './txt/content.txt';
$times_open = file_get_contents($times);
$content_open = file_get_contents($content);
$course_time = explode("\r\n", $times_open);
$course_content = explode("\r\n", $content_open);
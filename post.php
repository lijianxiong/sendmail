<?php 
$from = $_POST['times'];
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
	<title>EssenceEdu HongKong GMAT Exam Training</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta name="description"  content="Have you ever thought that the knowledge and skills learnt in current educational systems cannot really help you to handle harsh problems in reality? Essence Educational aims at solving this. By imparting to our clients essential principles and knowledge, such as problem solving philosophy, principles on mistakes and risks, principles on human interactions and so on, we try to help them build up the courage, wisdom, and resilience to shine in reality. We are currently providing HongKong GMAT Exam training course, SAT Exam training course, High School Mathematics training course and GMAT/SAT vocabulary APP"/>
    <meta name="keywords" content="gmat exam,gmat 香港,gmat hongkong,gmat hk,gmat prep,gmat mba" />
    <meta name="author"  content="Essence Educational"/>
    <link rel="stylesheet" href="./css/style.css">
 </head>
 <body>
<?php if (empty($from)): ?>
<style>
.login-body {
    text-align: center;
    padding-top: 5%;
}
</style>
<div class="froyo-frame login-body">
    <h1 class="admin-login-tittle">「你没有输入课程内容，请输入！」</h1>
    <div class="admin-login-form">
        <form action="post.php" method="post">
            <textarea class="form-control" rows="4" placeholder="更新课程时间，一个一行" id="times" name="times"></textarea>
            <br />
            <input type="submit" value="提交" id="login-button" />
        </form>
    </div>
</div>
<?php else: ?>
<style>
.login-body {
    text-align: center;
    padding-top: 3%;
}
</style>
<div class="froyo-frame login-body">
    <div class="admin-face">
        <div class="face-img">
            <a href="index.php">
            <img src="http://www.essence-edu.cn/theme/essence/images/logo.png" alt="EssenceEducational">
            </a>
        </div>
    </div>
    <h1 class="admin-login-tittle">「日期记录成功，下个周末开始执行」</h1>
    <div class="admin-login-form">
        <?php 
        	$course_time = explode("\r\n", $from);
        	foreach ($course_time as $value) {
        		echo '<p class="admin-login-tittle">时间：'.$value.'</p>';
        	}
	file_put_contents('./txt/times.txt', $from."\r\n");
	file_put_contents('./log/times'. date("Y-m-d-H-i", time()) . '.txt', $from."\r\n");
         ?>
    </div>
</div>
<?php endif ?>
 </body>
 </html>
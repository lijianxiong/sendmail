<?php 
$login = $_POST['login'];
$content = './txt/times.txt';
$content_open = file_get_contents($content);
$course_content = explode("\r\n", $content_open);
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
<?php if($login == 'lijianxiong' ): ?>
<style>
.login-body {
    text-align: center;
    padding-top: 5%;
}
</style>
<div class="froyo-frame login-body">
    <h1 class="admin-login-tittle">「开始添加课程」</h1>
    <div class="admin-login-form">
        <form action="post.php" method="post">
            <textarea class="form-control" rows="4" placeholder="更新课程时间，一个一行" id="times" name="times"></textarea>
            <br />
            <input type="submit" value="提交" id="login-button" />
        </form>
    </div>
</div>
<div class="course-time">
<p id="show" class="admin-login-tittle" style="margin-top: 3em;">「目前课程时间,点击显示」</p>
<div class="time-info" style="display: none">
 <?php 
            foreach ($course_content as $value) {
                echo '<p class="admin-login-tittle">'.$value.'</p>';
            }
         ?>
         </div>
     </div>
<?php else: ?>
<div class="froyo-frame login-body">
    <div class="admin-face">
        <div class="face-img">
            <a href="index.php">
            <img src="http://www.essence-edu.cn/theme/essence/images/logo.png" alt="EssenceEducational">
            </a>
        </div>
    </div>
    <h1 class="admin-login-tittle">「输入密码更新课程」</h1>
    <div class="admin-login-form">
        <form action="index.php" method="post">
            <input type="password" name="login">
            <br />
            <div class="loginbtn">
                <input type="submit" value="登录" id="login-button" />
            </div>
        </form>
    </div>
</div>
<?php endif ?>
<script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
<script>
$('#show').click(
    function(){
        var disnone = $('.time-info').css('display')=='none';
        if (disnone) {
            $('.time-info').show();
            $('#show').html('「目前课程时间,点击隐藏」');
        }else{
            $('.time-info').hide();
            $('#show').html('「目前课程时间,点击显示」');
        }
    }
    );
</script>
</body>
</html>
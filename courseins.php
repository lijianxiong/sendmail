<?php
include('config.php');
$password = empty($_GET['login']) ? 'gues' : $_GET['login'];
if ($password == 'essence') {
    if ($count == 0) {
        file_put_contents($course, $course_time['0']);
        file_put_contents($coursecontent, $course_content['0']);
        file_put_contents($path, 1);
        $mailcon = $course_time['0'] . $course_content['0'] . $landingref;
        $state = $smtp->sendmail($smtpemailto, $smtpusermail, $mailtitle, $mailcon, $mailtype);
        echo $course_time['0'], $course_content['0'];
    }
    if ($count == 1) {
        file_put_contents($course, $course_time['2']);
        file_put_contents($coursecontent, $course_content['1']);
        file_put_contents($path, 2);
        $mailcon = $course_time['2'] . $course_content['1'] . $landingref;
        $state = $smtp->sendmail($smtpemailto, $smtpusermail, $mailtitle, $mailcon, $mailtype);
        echo $course_time['2'], $course_content['1'];
    }
    if ($count == 2) {
        file_put_contents($course, $course_time['4']);
        file_put_contents($coursecontent, $course_content['2']);
        file_put_contents($path, 3);
        $mailcon = $course_time['4'] . $course_content['2'] . $landingref;
        $state = $smtp->sendmail($smtpemailto, $smtpusermail, $mailtitle, $mailcon, $mailtype);
        echo $course_time['4'], $course_content['2'];
    }
    if ($count == 3) {
        file_put_contents($course, $course_time['6']);
        file_put_contents($coursecontent, $course_content['3']);
        file_put_contents($path, 4);
        $mailcon = $course_time['6'] . $course_content['3'] . $landingref;
        $state = $smtp->sendmail($smtpemailto, $smtpusermail, $mailtitle, $mailcon, $mailtype);
        echo $course_time['6'], $course_content['3'];
    }
    if ($count == 4) {
        file_put_contents($course, $course_time['8']);
        file_put_contents($coursecontent, $course_content['4']);
        file_put_contents($path, 5);
        $mailcon = $course_time['8'] . $course_content['4'] . $landingref;
        $state = $smtp->sendmail($smtpemailto, $smtpusermail, $mailtitle, $mailcon, $mailtype);
        echo $course_time['8'], $course_content['4'];
    }
    //一周课程结束
    //
    //
    //
    if ($count == 5) {
        file_put_contents($course, $course_time['10']);
        file_put_contents($coursecontent, $course_content['0']);
        file_put_contents($path, 6);
        $mailcon = $course_time['10'] . $course_content['0'] . $landingref;
        $state = $smtp->sendmail($smtpemailto, $smtpusermail, $mailtitle, $mailcon, $mailtype);
        echo $course_time['10'], $course_content['0'];
    }
    //课程结束第一个周六
    if ($count == 6) {
        file_put_contents($course, $course_time['11']);
        file_put_contents($coursecontent, $course_content['0']);
        echo $course_time['11'], $course_content['0'];
        $mailcon = $course_time['11'] . $course_content['0'] . $landingref;
        $state = $smtp->sendmail($smtpemailto, $smtpusermail, $mailtitle, $mailcon, $mailtype);
        file_put_contents($path, 0);
    }
    //课程结束第二个周六
} else {
    echo '无权访问本页面！';
}
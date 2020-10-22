<?php if(!defined('access') or !access) die('This file cannot be directly accessed.'); ?>
<?php  

$body_arr   = [ // Mail body array (easier to edit)
	'Backimg'	=> 'https://img.resbeta.com/images/2019/02/22/365027cf0b5e911c3212750373c9f684.jpg',
	'Name'	=> G\get_global('theme_mail')['user']['name'],
	'Username'	=> G\get_global('theme_mail')['user']['username'],
	'Userlink'	=> G\get_global('theme_mail')['user']['url'],
	'Link'		=> G\get_global('theme_mail')['link'],
	'URL'       => G\get_base_url(),
	'Web_name'  => CHV\getSettings()['website_name']
];

$mail_html = <<<EOF
<div style="width: 550px;height: auto;border-radius: 5px;margin:0 auto;border:1px solid #666;box-shadow: 0px 0px 20px #888888;position: relative;padding-bottom: 5px;">
    <div style="background-image: url({$body_arr['Backimg']});width:550px;height: 250px;background-size: cover;background-repeat: no-repeat;border-radius: 5px 5px 0px 0px;"></div>
    <div style="width: 200px;height: 40px;background-color: #91a5a5;margin-top: -20px;margin-left: 20px;box-shadow: 3px 3px 3px rgba(0, 0, 0, 0.3);color: rgb(255, 255, 255);text-align: center;line-height: 40px;">Dear: <a style="text-decoration:none;color:#FFF;" href="{$body_arr['Userlink']}" rel="noopener" target="_blank">{$body_arr['Name']}</a></div>
    <div style="background-color:white;line-height:180%;padding:0 15px 12px;width:520px;margin:30px auto;color:#555555;font-family:'Century Gothic','Trebuchet MS','Hiragino Sans GB',微软雅黑,'Microsoft Yahei',Tahoma,Helvetica,Arial,'SimSun',sans-serif;font-size:12px;margin-bottom: 0px;">  
        <h2 style="border-bottom:1px solid #DDD;font-size:14px;font-weight:normal;padding:13px 0 10px 8px;"><span style="color: #12ADDB;font-weight: bold;">&gt; </span>欢迎光临<a style="text-decoration:none;color: #12ADDB;" href="{$body_arr['URL']}" target="_blank" rel="noopener">《{$body_arr['Web_name']}》</a><br><span style="color: #12ADDB;font-weight: bold;">&gt; </span>现在, 您的帐户已准备就绪, 您可以上传你的图片, 创建相册并设置您的内容的私密性, 以及许多很酷的事情, 你会发现并享受它.</h2>  
        <div style="padding:0 12px 0 12px;margin-top:18px">  
        	<p>还有，这是你的个人资料页，来吧，<a style="text-decoration:none;color:#12ADDB;" href="{$body_arr['Userlink']}" rel="noopener" target="_blank">{$body_arr['Username']}</a> 定制你的个人主页!</p>       
        </div>  
    </div>
    <a style="text-decoration:none; color:#FFF;width: 40%;text-align: center;background-color:#91a5a5;height: 40px;line-height: 35px;box-shadow: 3px 3px 3px rgba(0, 0, 0, 0.30);margin: -10px auto;display: block;" href="{$body_arr['Link']}" target="_blank" rel="noopener">来吧，个性化您的主页</a>
    <div style="background-color:white;line-height:180%;padding:0 15px 12px;width:520px;margin:30px auto;color:#555555;font-family:'Century Gothic','Trebuchet MS','Hiragino Sans GB',微软雅黑,'Microsoft Yahei',Tahoma,Helvetica,Arial,'SimSun',sans-serif;font-size:12px;margin-bottom: 0px;">
            <div style="padding:0 12px 0 12px;margin-top:18px;word-break:break-all;">        
            <p>另外, 您可以复制并粘贴网址到浏览器: <br><a style="text-decoration:none;color: #555555;" href="{$body_arr['Link']}" target="_blank" rel="noopener">{$body_arr['Username']}</a></p>  
    </div>
    <div style="color:#8c8c8c;;font-family: 'Century Gothic','Trebuchet MS','Hiragino Sans GB',微软雅黑,'Microsoft Yahei',Tahoma,Helvetica,Arial,'SimSun',sans-serif;font-size: 10px;width: 100%;text-align: center;margin-top: 30px;">
        <p>如果您不打算注册或不是您注册的, 请忽略此消息.</p>
        <p>本邮件为系统自动发送，请勿直接回复~</p>
    </div>
    <div style="color:#8c8c8c;;font-family: 'Century Gothic','Trebuchet MS','Hiragino Sans GB',微软雅黑,'Microsoft Yahei',Tahoma,Helvetica,Arial,'SimSun',sans-serif;font-size: 10px;width: 100%;text-align: center;">
        <p>&copy; Copyright <span style="border-bottom:1px dashed #ccc;z-index:1" t="7" onclick="return false;" data="2017-2019">2018-2019</span> <a style="text-decoration:none;color: #8c8c8c;" href="{$body_arr['URL']}" target="_blank" rel="noopener">{$body_arr['Web_name']}</a></p>
    </div>
</div>
</div>
EOF;

echo $mail_html;
?>
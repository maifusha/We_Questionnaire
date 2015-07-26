<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh" class="body-full-height">
    <head>        
        <title>问卷系统 — — 登录</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" type="text/css" href="/Public/Plugins/ui-frame/ui.css" />
        <link rel="stylesheet" type="text/css" href="/Public/Css/Admin-default.css" />
    </head>


    <body>
        <div class="login-container">
            <div class="login-box animated fadeInDown">
                <div class="login-logo"><h2>问卷系统后台</h2></div>
                <div class="login-body">
                    <div class="login-title"><strong>欢迎使用</strong>, 请登录</div>
                    <form action="<?php echo U('Auth/login');?>" class="form-horizontal" method="post">
                    <div class="form-group">
                        <div class="col-md-12">
                            <input name="account" type="text" class="form-control" placeholder="你的账号"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <input name="password" type="password" class="form-control" placeholder="你的密码"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6">
                            <a href="#" class="btn btn-link btn-block">忘记密码?</a>
                        </div>
                        <div class="col-md-6">
                            <button class="btn btn-info btn-block">登录</button>
                        </div>
                    </div>
                    </form>
                </div>
                <div class="login-footer">
                    <div class="pull-left">
                        &copy; 2014 微信问卷系统
                    </div>
                    <div class="pull-right">
                        <a href="#">关于</a> |
                        <a href="#">隐私</a> |
                        <a href="#">联系我们</a>
                    </div>
                </div>
            </div>            
        </div>

    	<!-- 在登录页，预加载系统所需js脚本 -->
        <script type="text/javascript" src="/Public/Plugins/jquery/jquery-2.1.1.min.js"></script>
        <script type="text/javascript" src="/Public/Plugins/jquery/jquery-ui.js"></script>
        <script type="text/javascript" src="/Public/Plugins/bootstrap/bootstrap.js"></script>
        <script type="text/javascript" src="/Public/Plugins/datatables/jquery-dataTables.js"></script>
        <script type="text/javascript" src="/Public/Plugins/bootstrap/bootstrap-datepicker.js"></script>
        <script type="text/javascript" src="/Public/Plugins/bootstrap/bootstrap-select.js"></script>
        <script type="text/javascript" src="/Public/Plugins/ui-frame/plugins.js"></script>
        <script type="text/javascript" src="/Public/Plugins/ui-frame/actions.js"></script>
        <script type="text/javascript" src="/Public/Plugins/dropzone/dropzone.js"></script>
    </body>
</html>
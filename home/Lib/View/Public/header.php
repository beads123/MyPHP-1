<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title><?php echo  isset($titlenow)?$titlenow.'——':'';?><?php echo $title ?></title>
<link rel="stylesheet" type="text/css" href="<?php echo PUBLIC_PATH ?>bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo PUBLIC_PATH ?>style/style.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="<?php echo PUBLIC_PATH ?>bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
<script src="<?php echo PUBLIC_PATH ?>Jquery/jquery-1.9.1.min.js"></script>
<script src="<?php echo PUBLIC_PATH ?>bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo PUBLIC_PATH ?>js/my.js"></script>
</head>
<body>
<div id="header" class="row-fluid page-header">
	<div id="logo" class="span4">
    	<h1><a href="<?php echo __APP__;?>"><?php echo $title;?></a><small>a simple blog</small></h1>
    </div>
    <div id="nav" class="span5">
    	<ul class="nav nav-pills">
    		<li><a href="<?php echo __APP__;?>" title="首页"><i class="icon-home"></i></a>
    	</ul>
    </div>
    <div id="admin" class="span3">
    	<ul class="nav nav-pills">
    		<li><a href="<?php checkLogin()?createUrl('User','index'):createUrl('Login','index')?>" title="<?php echo checkLogin()?'管理':'登录'?>"><i class="icon-user"></i></a></li>
 			<li class="home"><a href="mailto:imaguowei@gmail.com" title="联系我"><i class="icon-envelope"></i></a>
    	</ul>
    </div>
</div>


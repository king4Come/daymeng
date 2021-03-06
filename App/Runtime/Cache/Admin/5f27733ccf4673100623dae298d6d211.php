<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html><html><head><title></title><style type="text/css">	body{

		background-color:#f3f3f3;

		font-size: 14px;

		font-family: 'Microsoft Yahei';

	}

	

	ul{

		list-style-type:none;

		padding: 0px;

		margin: 0px;

		padding-left: 10px;

	}

	.menu{

		color: #fff;

		cursor: pointer;

		padding: 5px 0px 10px 20px ;

		margin: 0px;

		background: url("__PUBLIC__/res/images/nv.jpg") no-repeat;

		background-size:100px 30px;

	}

	

	.menus{

		display: none;

	}

	.min_menu + ul{

		display: none;

	}

	.min_menu{

		color: #fff;

		cursor: pointer;

		padding: 3px ;

		margin: 0px;

		margin-left: 10px;

		background: #33a600;

		border-radius: 5px;

		-moz-border-radius: 5px;

		-webkit-border-radius: 5px;

		max-width: 250px;



	}

	.min_menu a{

		color:#fff;

	}

	.menus li{

		margin: 10px 0px;

	}

	.mmin_menu a{

		color: #33a600;

		background: #fff;

		border-radius: 5px;

		-moz-border-radius: 5px;

		-webkit-border-radius: 5px;

	}

	.number{

		display: inline-block;

min-width: 10px;

padding: 3px 7px;

font-size: 12px;

font-weight: bold;

color: red;

line-height: 1;

vertical-align: baseline;

white-space: nowrap;

text-align: center;

background-color: #999999;

border-radius: 10px;

	}

	</style></head><body><div><ul ><li class="menu">用户管理</li><ul class="menus" style="width:100%;max-height:1000px;"><li class="min_menu" ><a style="text-decoration:none" href="<?php echo U('admin/index/user_manage','','');?>" target="main">用户一览 <span class="number"><?php echo ($user_count); ?></span></a></li><li class="min_menu" ><a style="text-decoration:none" href="<?php echo U('admin/index/user_manage','','');?>" target="main">已冻结用户 <span class="number"><?php echo ($deleted_user); ?></span></a></li></ul><li class="menu">项目管理</li><ul class="menus" style="width:100%;max-height:1000px;"><li class="min_menu" ><a style="text-decoration:none" href="###" >已审核申请信息一览<span class="number"><?php echo ($apply_checked_count); ?></span></a></li><ul class="mmin_menu" ><li ><a  href="<?php echo U('admin/index/company_apply_info_manage','','');?>" target="main">企业申请信息一览<span class="number"><?php echo ($company_apply_checked_count); ?></span></a></li><li ><a href="<?php echo U('admin/index/campus_apply_info_manage','','');?>" target="main">校园申请信息一览<span class="number"><?php echo ($campus_apply_checked_count); ?></span></a></li><li ><a href="<?php echo U('admin/index/club_apply_info_manage','','');?>" target="main">社团申请信息一览<span class="number"><?php echo ($club_apply_checked_count); ?></span></a></li><li ><a href="<?php echo U('admin/index/person_apply_info_manage','','');?>" target="main">个人申请信息一览<span class="number"><?php echo ($person_apply_checked_count); ?></span></a></li><li ><a href="<?php echo U('admin/index/others_apply_info_manage','','');?>" target="main">其它申请信息一览<span class="number"><?php echo ($others_apply_checked_count); ?></span></a></li></ul><li class="min_menu" ><a style="text-decoration:none" href="###" > 待审核申请信息<span class="number"><?php echo ($apply_unchecked_count); ?></span></a></li><ul class="mmin_menu"><li ><a href="<?php echo U('admin/index/company_apply_info_check','','');?>" target="main">企业待审核信息<span class="number"><?php echo ($company_apply_unchecked_count); ?></span></a></li><li ><a href="<?php echo U('admin/index/campus_apply_info_check','','');?>" target="main">校园待审核信息<span class="number"><?php echo ($campus_apply_unchecked_count); ?></span></a></li><li ><a href="<?php echo U('admin/index/club_apply_info_check','','');?>" target="main">社团待审核信息一览<span class="number"><?php echo ($club_apply_unchecked_count); ?></span></a></li><li ><a href="<?php echo U('admin/index/person_apply_info_check','','');?>" target="main">个人待审核信息<span class="number"><?php echo ($person_apply_unchecked_count); ?></span></a></li><li ><a href="<?php echo U('admin/index/others_apply_info_check','','');?>" target="main">其它待审核信息<span class="number"><?php echo ($others_apply_unchecked_count); ?></span></a></li></ul><li class="min_menu" ><a style="text-decoration:none" href="###" > 已删除待审核申请信息<span class="number"><?php echo ($apply_deleted_count); ?></span></a></li><ul class="mmin_menu"><li ><a href="<?php echo U('admin/index/company_apply_info_deleted','','');?>" target="main">已删除的企业待审核信息<span class="number"><?php echo ($company_apply_deleted_count); ?></span></a></li><li ><a href="<?php echo U('admin/index/campus_apply_info_deleted','','');?>" target="main">已删除的校园待审核信息<span class="number"><?php echo ($campus_apply_deleted_count); ?></span></a></li><li ><a href="<?php echo U('admin/index/club_apply_info_deleted','','');?>" target="main">已删除的社团待审核信息一览<span class="number"><?php echo ($club_apply_deleted_count); ?></span></a></li><li ><a href="<?php echo U('admin/index/person_apply_info_deleted','','');?>" target="main">已删除的个人待审核信息<span class="number"><?php echo ($person_apply_deleted_count); ?></span></a></li><li ><a href="<?php echo U('admin/index/others_apply_info_deleted','','');?>" target="main">已删除的其它待审核信息<span class="number"><?php echo ($others_apply_deleted_count); ?></span></a></li></ul><li class="min_menu" ><a  style="text-decoration:none"href="###" >已审核项目一览<span class="number"><?php echo ($items_checked_count); ?></span></a></li><ul class="mmin_menu"><li style="font-size:13px;" ><a href="<?php echo U('admin/index/items_manage_company','','');?>" target="main">公司发起的项目<span class="number"><?php echo ($company_items_checked_count); ?></span></a></li><li style="font-size:13px;"><a href="<?php echo U('admin/index/items_manage_campus','','');?>" target="main">学校发起的项目<span class="number"><?php echo ($campus_items_checked_count); ?></span></a></li><li style="font-size:13px;"><a href="<?php echo U('admin/index/items_manage_club','','');?>" target="main">社团发起的项目<span class="number"><?php echo ($club_items_checked_count); ?></span></a></li><li style="font-size:13px;"><a href="<?php echo U('admin/index/items_manage_person','','');?>" target="main">个人发起的项目<span class="number"><?php echo ($person_items_checked_count); ?></span></a></li><li style="font-size:13px;"><a href="<?php echo U('admin/index/items_manage_others','','');?>" target="main">其它组织发起的项目<span class="number"><?php echo ($others_items_checked_count); ?></span></a></li></ul><li class="min_menu" ><a style="text-decoration:none"href="<?php echo U('admin/index/item_check','','');?>" target="main"> 待审核项目<span class="number"><?php echo ($items_unchecked_count); ?></span></a></li><li class="min_menu" ><a style="text-decoration:none"href="<?php echo U('admin/index/show_deleted_items','','');?>" target="main"> 已删除待审核项目<span class="number"><?php echo ($items_deleted_unchecked_count); ?></span></a></li><li class="min_menu" ><a style="text-decoration:none"href="<?php echo U('admin/index/repay','','');?>" target="main"> 待审核回报信息<span class="number"><?php echo ($repay_unchecked_count); ?></span></a></li><li class="min_menu" ><a style=" text-decoration:none"href="<?php echo U('admin/index/repay_checked','','');?>" target="main"> 已审核回报信息<span class="number"><?php echo ($repay_checked_count); ?></span></a></li><li class="min_menu" ><a style="ctext-decoration:none"href="<?php echo U('admin/index/repay_deleted','','');?>" target="main"> 已删除回报信息<span class="number"><?php echo ($repay_deleted_checked_count); ?></span></a></li></ul><li class="menu">帖子管理</li><ul class="menus" style="width:100%;max-height:1000px;"><li class="min_menu"><a style="text-decoration:none" href="<?php echo U('admin/index/comment_manage','','');?>"target="main">帖子一览</a></li><li class="min_menu"><a style="text-decoration:none" href="<?php echo U('admin/index/comment_manage_deleted','','');?>"target="main">已删除帖子</a></li><li  class="min_menu"><a  style="text-decoration:none"href="<?php echo U('admin/index/comment_second_manage','','');?>" target="main">评论一览</a></li><li  class="min_menu"><a  style="text-decoration:none"href="<?php echo U('admin/index/comment_second_manage_deleted','','');?>" target="main">已删除帖子评论</a></li></ul><li class="menu"><a style="color:#fff;text-decoration:none" href="<?php echo U('admin/statistics/all_number','','');?>"target="main">实时用户</a></li><li class="menu"><a style="color:#fff;text-decoration:none" href="<?php echo U('admin/index/complaint1','','');?>"target="main">用户吐槽</a></li><li class="menu"><a style="color:#fff;text-decoration:none" href="<?php echo U('admin/index/complaint2','','');?>"target="main">路人吐槽</a></li><li class="menu"><a style="color:#fff;text-decoration:none" href="<?php echo U('admin/index/send_msg','','');?>"target="main">发送信息</a></li></ul></div><script type="text/javascript" src="__PUBLIC__/res/js/jquery-1.11.1.min.js"></script><script type="text/javascript" src="__PUBLIC__/res/js/menu.js"></script></body></html>
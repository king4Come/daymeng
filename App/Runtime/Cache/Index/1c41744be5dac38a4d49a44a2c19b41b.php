<?php if (!defined('THINK_PATH')) exit();?><!DOCTTYPE html><html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><meta http-equiv="pragma" content="no-cache"><meta http-equiv="Cache-Control" content="no-cache"><meta http-equiv="expires" content="0"><!-- 指定以最新的IE版本模式来显示网页 --><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="description" content="呆萌网,呆萌众筹,呆萌帮助,呆萌基金,小呆助手,大学生公益"/><meta name="Keywords" content="呆萌网,众筹,呆萌众筹,呆萌帮助,呆萌基金,小呆助手呆萌公益,大学生社交,大学生公益/"><link rel="stylesheet" href="__PUBLIC__/res/bootstrap/css/bootstrap.css"/><link rel="stylesheet" href="__PUBLIC__/res/css/hf.css"/><link rel="stylesheet" href="__PUBLIC__/res/css/help.css"/><link rel="Shortcut Icon" href="__PUBLIC__/res/images/sty.ico"></head><body><!--导航条部分--><!--导航条部分--><!-- Fixed navbar --><div id="bar1"><div class="badge">您好，欢迎来到呆萌！</div><?php  if($_SESSION["user_id"]) { echo "<a href=".U('/my','','').">".$_SESSION["niker"]."</a>"; echo "<a href='###'  class='_exit'>退出</a>"; } else { echo "<a href=".U('/login','','')."  target='_blank'>登录</a>"; echo "<a href=".U('/register','','')." target='_blank'>[免费注册]</a>"; } ?><a href="<?php echo U('/help/124','','');?>">帮助中心</a></div><div id="head_"><ul ><li style="margin-left:100px;"><a href="<?php echo U('/index','','');?>"><img class="top_img" src="__PUBLIC__/res/images/top_pic/1.9.png" style="width:160px"></a></li><li><a class="active_" style=" text-decoration: none;" href="<?php echo U('/index');?>" onfocus="this.blur();">首页</a></li><li><a class="active_" style=" text-decoration: none;"href="<?php echo U('/item','','');?>" target="_blank">浏览项目</a></li><li><a class="active_" style=" text-decoration: none;"href="<?php echo U('/start/agreement','','');?>" target="_blank">发起项目</a></li><li><a class="active_" style=" text-decoration: none;"href="<?php echo U('/community','','');?>" target="_blank">呆萌社区</a></li><li><form action="<?php echo U('index/items/index');?>" method="post" ><input class="search_content" type="text" name="search_content" style="width:200px;" placeholder="搜索喜爱的项目" maxlength="15" /><input class="search_sub" type="submit" style="color:#fff;width:70" value="搜索" /></form></li><li    style="margin-left:35px;"><ul id="hid"style="display:inline;"><li class="menus" style="display:block;"><img class="person_img" src="__PUBLIC__/res/images/small_pic/person.png" style="width:46px;"><a  style=" text-decoration: none;color:#33a600;" href="<?php echo U('/person/'.session("user_id"));?>" >个人中心</a></li><li  class="top_dashed" style="padding:0px;margin:0px;"></li><li class="person_blur" style="display:none;padding:5px 55px 5px 55px;margin:10px 0px"><a style="text-decoration:none;;"href="<?php echo U('/support','','');?>">我的众筹</a></li><li class="person_blur"  style="display:none;padding:5px 55px 5px 55px;margin:10px 0px"><a style="text-decoration:none;;"href="<?php echo U('/news','','');?>">消息中心</a></li><li class="person_blur"  style="display:none;padding:5px 55px 5px 55px;margin:10px 0px"><a style="text-decoration:none;;"href="<?php echo U('/my','','');?>">个人信息</a></li></ul></li></ul></div><script type="text/javascript">    var check_rem="<?php echo U('publicmodel/check_rem','','');?>";

    var exit_url="<?php echo U('/index/publicmodel/exit1','','');?>";

    _home="<?php echo U('/Index','','');?>";

    </script><!--头文件的包含--
 <!--帮助中心的部分--><div class="body" style="height:800px;"><div class="title">帮助中心</div><div class="panel panel-default main" style="height:700px;"><div class="main_title"><div class="about_our"><a href="<?php echo U('index/help/index.html','','');?>"><div class="big_title" id="about_us"><img src="__PUBLIC__/res/images/small_pic/42.png"  class="title_img"/><div class="title_content">								关于我们
							</div></div></a><div class="small_title"><div class="first"><div class="word"><a href="<?php echo U('index/help/index.html','','');?>">呆萌介绍</a></div></div><div class="second"><div class="word"><a href="<?php echo U('index/help/help121.html','','');?>">社区介绍</a></div></div><div class="three"><div class="word"><a href="<?php echo U('index/help/help122.html','','');?>">公众平台</a></div></div></div></div><div class="new_help"><a href="<?php echo U('index/help/help123.html','','');?>"><div class="big_title" id="new_help"><img src="__PUBLIC__/res/images/small_pic/44.png"  class="title_img"/><div class="title_content">								新手帮助
							</div></div></a><div class="small_title"><div class="main_first"><div class="word"><a href="<?php echo U('index/help/help123.html','','');?>">发起者指南</a></div></div><div class="main_second"><div class="word"><a href="<?php echo U('index/help/help124.html','','');?>">支持者指南</a></div></div><div class="main_three"><div class="word"><a href="<?php echo U('index/help/help125.html','','');?>">用户协议</a></div></div><div class="main_four"><div class="word"><a href="<?php echo U('index/help/help126.html','','');?>">社区规范</a></div></div><div class="four"><div class="word"><a href="<?php echo U('index/help/help127.html','','');?>">免责申明</a></div></div><div class="four"><div class="word"><a href="<?php echo U('index/help/help128.html','','');?>">隐私权说明</a></div></div></div></div><div class="question"><a href="<?php echo U('index/help/help129.html','','');?>"><div class="big_title" id="question"><img src="__PUBLIC__/res/images/small_pic/43.png"  class="title_img"/><div class="title_content">								常见问题&nbsp
							</div></div></a><div class="small_title"><div class="main_first"><div class="word"><a href="<?php echo U('index/help/help129.html','','');?>">问题解答</a></div></div></div></div><div class="other"><a href="<?php echo U('index/help/help130.html','','');?>"><div class="big_title" id="other"><img src="__PUBLIC__/res/images/small_pic/1.png"  class="title_img"/><div class="title_content">								其他
							</div></div></a><div class="small_title"><div class="main_first"><div class="word"><a href="<?php echo U('index/help/help130.html','','');?>">客服联系</a></div></div></div></div></div><!--这是右边的内容--><div id="new_help_content" ><div class="second " ><div class="panel panel-default content "><div class="panel-heading content_title_main" style="background-color:#ffffff"><img src="__PUBLIC__/res/images/small_pic/15.png" class="content_img"><div class="content_title">					==支持者指南==
				</div></div><ul class="list-group"><li class="list-group-item" ><span id="help1"> 1.如何支持我喜欢的众筹项目？</span></br>					&nbsp;&nbsp;&nbsp;支持一个项目，只需在喜欢项目的页面上点击“支持”，通过支付宝完成支付即可。</br><span id="help2">2.能否取消支持？</span></br>					&nbsp;&nbsp;&nbsp;目前无法取消支持，一旦支持之后，是无法取消订单的。</br><span id="help3">3.我支持的项目众筹失败了会怎么样？</span></br>					&nbsp;&nbsp;&nbsp;如果项目众筹失败了，你支付的金额会在第一时间全额返还到你的支付宝账户。</br><span id="help4">4.怎样知道发起项目团队身份是否属实？</span></br>					&nbsp;&nbsp;&nbsp;呆萌网会对所有在平台发起项目的个人or官方进行严格的实名认证。</br><span id="help5">5.我支持的项目在众筹过程中被迫暂停了，怎么办？</span></br>					&nbsp;&nbsp;&nbsp;如果项目在众筹过程中被迫暂停，呆萌网会在第一时间返还支付的金额到你的支付宝账户。</br><span id="help6">6.参与支持后，我没有收到回报，这时应怎么做？</span></br>					&nbsp;&nbsp;&nbsp;如果已经过了项目发起者公布的“预计发送日期”，可查看该项目公共账号公布的解释原因，有时发起人遇到了意想不到的问题，或低估了完成项目所需的工作量。如果发生了意外，发起人会与支持者沟通。如果发起人未发布原因或未与支持者沟通，请联系呆萌网客服，我们会联系项目团队了解情况，并督促发起人发表进度公告。</br><span id="help7">7.怎么保证我支持的项目得到回报呢？</span></br>					&nbsp;&nbsp;&nbsp;项目团队有责任履行他们对项目所做的承诺。呆萌网在众筹项目上线之前会做实名认证，并且确保项目内容完整、可执行等， 确定没有违反项目准则和要求。然而呆萌网无法保证项目团队有完成项目的能力，万一项目没有100%执行，项目团队有责任和义务退款给大家。呆萌网会在项目筹资成功后监督和督促发起者。</br></li></ul></div></div></div><!----></div></div><!--帮助中心的部分--><!--包含底部文件的渲染--><link rel="stylesheet" href="__PUBLIC__/res/css/hf.css"/><div class="footer"><div class="footer1" style="height:200px;width:100%;float:left;padding:0px;margin:0px;background: url('__PUBLIC__/res/images/small_pic/ft_bj.png') no-repeat;"><a class="start_it" href="<?php echo U('/start/agreement','','');?>"><img src="__PUBLIC__/res/images/small_pic/start_it.png" style='margin-top:20px;' ></a></div><div id='backtotop'></div><div class="footer2"><div class="intro" ><span ><a href="<?php echo U('/help','','');?>" target="_blank">关于呆萌</a></span>|

  	 			<span><a href="<?php echo U('/help/130','','');?>" target="_blank">洽谈合作</a></span>|

  	 			<span><a href="<?php echo U('/help/130','','');?>" target="_blank">加入我们</a></span>|

  	 			<span><a href="<?php echo U('/help/130','','');?>" target="_blank">联系我们</a></span>|

  	 			<span><a href="<?php echo U('/help/127','','');?>" target="_blank">免责声明</a></span>|

  	 			 <p>Copyright © 2014 呆萌网 www.daymeng.com<br><a href="http://www.miitbeian.gov.cn" style="color:#474e5d">湘ICP备09043258号-2</a> 湖南橙讯科技有限公司 版权所有 <span style="font-size:12px;color:#474e5d">投资有风险，购买需谨慎</span></p></div><div class="calls"><ul ><li><img  style='width:120px;' src="__PUBLIC__/res/images/small_pic/tow_code.jpg" class="tow_code"></li><li><img class="mcalls wx"  src="__PUBLIC__/res/images/small_pic/wx.png"><span class='wx' style='color:#fff;padding-left:5px;'>官方微信</span></li><li><a href="http://weibo.com/u/5240303575" target='_blank'><img class="mcalls" src="__PUBLIC__/res/images/small_pic/sina.png"><span style='color:#fff;padding-left:5px;cursor:pointer;'>官方微博</span></a></li><li><a href="http://wpa.qq.com/msgrd?v=3&amp;uin=521187146&amp;site=qq&amp;menu=yes"><img src="__PUBLIC__/res/images/small_pic/kefu.png"></a><span style='color:#fff;padding-left:5px;cursor:pointer;'>在线客服</span></li><!-- 百度统计 --><div style='display:none;'><script type="text/javascript">              var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");

              document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F86c414347828cadccc690dd5e0ddd83e' type='text/javascript'%3E%3C/script%3E;"));

              </script></div></ul></div></div></div><!--  <div class="row" ><div class="col-lg-4 "></div><div class="col-lg-2"><a href="<?php echo U('startitem/index');?>"><img src="__PUBLIC__/res/images/small_pic/project.png" style="margin-top:50px;"></a></div><div class="col-lg-3  yxs_change"><div class="row"><div class="col-lg-6 "><img class="tubiao"  src="__PUBLIC__/res/images/small_pic/wx.png"><span >关注微信</span><img src="__PUBLIC__/res/images/small_pic/wx1.png"></div><div class="col-lg-6 "><img class="tubiao" src="__PUBLIC__/res/images/small_pic/wb.png"><span >关注微博</span><a target="_blank" href="http://weibo.com/5240303575/profile?rightmod=1&wvr=5&mod=personinfo"><img  src="__PUBLIC__/res/images/small_pic/wb1.png"></a><p class="address">weibo.stm.com</p></div></div></div><div class="col-lg-3  _email yxs_change"><div class="col-lg-6 "><p>联系邮箱</p><a href="http://mail.163.com/"><img src="__PUBLIC__/res/images/small_pic/email.png">daymeng@163.com</a></div></div></div> --><script language="javascript" type="text/javascript" src="__PUBLIC__/res/jquery/jquery-1.9.0.min.js"></script><script language="javascript" type="text/javascript" src="__PUBLIC__/res/js/md5.js"></script><script language="javascript" type="text/javascript" src="__PUBLIC__/res/bootstrap/js/bootstrap.min.js"></script><script language="javascript" type="text/javascript" src="__PUBLIC__/res/js/zc.js"></script><script language="javascript" type="text/javascript" src="__PUBLIC__/res/js/hf.js"></script><script language="javascript" type="text/javascript" src="__PUBLIC__/res/js/login.js"></script><script type="text/javascript">            var exit_url='<?php echo U("index/login/exit1",'','');?>';
            var sort_url='<?php echo U("index/index/sort1",'','');?>';
            var opnion_url='<?php echo U("index/index/opnion",'','');?>';
            var complaint_url='<?php echo U("index/index/complaint",'','');?>';
            var _home='__ROOT__';
            var PUBLIC='__PUBLIC__';
           $('#'+document.location.href.split('#')[1]).css('color','red');
        </script></body></html>
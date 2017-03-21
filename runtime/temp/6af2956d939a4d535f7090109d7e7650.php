<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:32:"./themes/default/index/page.html";i:1482475731;}*/ ?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
<title><?php echo config('web_site_title'); ?></title>
<meta name="keywords" content="<?php echo config('web_site_keyword'); ?>"/>
<meta name="description" content="<?php echo config('web_site_description'); ?>"/>
<!-- Bootstrap -->
<link href="<?php echo config('theme_path'); ?>/index/css/bootstrap.css" rel="stylesheet">
<!--引用通用样式-->
<link href="<?php echo config('theme_path'); ?>/index/css/common.css" rel="stylesheet">
<link href="<?php echo config('theme_path'); ?>/index/css/news_detail.css" rel="stylesheet">
<!--[if lt IE 9]>
    <script src="<?php echo config('theme_path'); ?>/index/js/html5shiv.min.js"></script>
    <script src="<?php echo config('theme_path'); ?>/index/js/respond.min.js"></script>
<![endif]-->
</head>
<body>

<header>
  <nav class="navbar navbar-default">
    <div class="container"> 
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header"> <a href="#"><img class="logo" src="<?php echo config('theme_path'); ?>/index/images/logo.png"></a> <span class="navbar-line"></span> </div>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
        <?php $__NAV__ = db('navigation')->field(true)->where("hide",0)->order("sort")->select();if(is_array($__NAV__) || $__NAV__ instanceof \think\Collection): $i = 0; $__LIST__ = $__NAV__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$nav): $mod = ($i % 2 );++$i;?>
          <li><a href="<?php echo url($nav['url']); ?>"><?php echo $nav['name']; ?></a></li>
        <?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>

        <ul class="nav navbar-nav navbar-right">
          <li>
            <form class="navbar-form navbar-left" action="<?php echo url('search/index'); ?>" method="GET">
              <div class="custom-search">
                <input type="hidden" value="posts" name="module" >
                <input type="text" name="query" class="text-search" placeholder="按enter搜索">
              </div>
            </form>
          </li>
          <?php if(session('index_user_auth.nickname')): ?>
          <li class="icon-shop"><a href="<?php echo url('cart/index'); ?>"><img src="<?php echo config('theme_path'); ?>/index/images/icon_shop.png"></a></li>
          <li> <span class="login-box"><span data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" style="display:block" class="name">您好，<?php echo session('index_user_auth.nickname'); ?><span class="caret"></span></span> 
          <ul class="dropdown-menu">
            <li class="i-order"><a href="<?php echo url('order/orderLists'); ?>"><span><img src="<?php echo config('theme_path'); ?>/index/images/order.png" alt=""></span>我的订单</a></li>
            <li class="i-address"><a href="<?php echo url('address/userAddress'); ?>"><span><img src="<?php echo config('theme_path'); ?>/index/images/address.png" alt=""></span>收货地址</a></li>
            <!-- <li class="i-complaint"><a href="#"><span><img src="<?php echo config('theme_path'); ?>/index/images/complaint.png" alt=""></span>投诉管理</a></li>
            <li class="i-debit"><a href="#"><span><img src="<?php echo config('theme_path'); ?>/index/images/debit.png" alt=""></span>退款管理</a></li> -->
            <li class="i-comment"><a href="<?php echo url('comment/commentlist'); ?>"><span><img src="<?php echo config('theme_path'); ?>/index/images/comment.png" alt=""></span>我的评价</a></li>
            <li class="i-collection"><a href="<?php echo url('collection/collection'); ?>"><span><img src="<?php echo config('theme_path'); ?>/index/images/collectionone.png" alt=""></span>我的收藏</a></li>
            <li class="i-member"><a href="<?php echo url('user/userCenter'); ?>"><span><img src="<?php echo config('theme_path'); ?>/index/images/member.png" alt=""></span>个人中心</a></li>
            <li class="i-logout"><a href="<?php echo url('common/logout'); ?>"><span><img src="<?php echo config('theme_path'); ?>/index/images/logout.png" alt=""></span>退出登录</a></li>
          </ul></span>
          </li>
          <?php else: ?>
          <li class="icon-shop"><a href="<?php echo url('cart/index'); ?>"><img src="<?php echo config('theme_path'); ?>/index/images/icon_shop.png"></a></li>
          <li><span class="login-register-box"><a href="<?php echo url('Index/login'); ?>">登录</a>&nbsp; | &nbsp;<a href="<?php echo url('Index/register'); ?>">注册 </a></span> </li>
          <?php endif; ?>
        </ul>
      </div>
      <!-- /.navbar-collapse --> 
    </div>
    <!-- /.container-fluid --> 
  </nav>
</header>

<div class="banner">
  <div class="container">
      <?php $__BANNER__ = db("banner")
        ->alias("a")
        ->join("banner_position b","b.id= a.position","LEFT")        
        ->where("a.status",1)->where("a.position",4)
        ->order("a.createtime")->select();if(is_array($__BANNER__) || $__BANNER__ instanceof \think\Collection): if( count($__BANNER__)==0 ) : echo "" ;else: foreach($__BANNER__ as $key=>$banner): ?>
        <div><a href="<?php echo url($banner['link']); ?>"><img src="<?php echo root_path(); ?><?php echo $banner['banner_path']; ?>" width="<?php echo $banner['width']; ?>" height="<?php echo $banner['height']; ?>" /></a></div>
      <?php endforeach; endif; else: echo "" ;endif; ?>
  
  </div>
</div>
<!--main start-->
<div class="main">
  <div class="container">
    <div class="title-index">
    <div class="red">
      <p>
      <?php if(is_array(get_self_page($pidInfo['id'])) || get_self_page($pidInfo['id']) instanceof \think\Collection): $k = 0; $__LIST__ = get_self_page($pidInfo['id']);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($k % 2 );++$k;if($k == '1'): if($pageInfo['title'] == $data['title']): ?>
            <a href="<?php echo url('Article/page?name='.$data['name']); ?>" style="color:#FF2D4B"><?php echo $data['title']; ?></a>
          <?php else: ?> 
            <a href="<?php echo url('Article/page?name='.$data['name']); ?>"><?php echo $data['title']; ?></a>
          <?php endif; else: if($pageInfo['title'] == $data['title']): ?>
            <span>|</span></p><p><a href="<?php echo url('Article/page?name='.$data['name']); ?>" style="color:#FF2D4B"><?php echo $data['title']; ?></a>
          <?php else: ?>
            <span>|</span></p><p><a href="<?php echo url('Article/page?name='.$data['name']); ?>"><?php echo $data['title']; ?></a>
          <?php endif; endif; endforeach; endif; else: echo "" ;endif; ?>
      </p>
    </div>
    <div style="float:right">首页 
    <?php if(!(empty($pidInfo) || ($pidInfo instanceof \think\Collection && $pidInfo->isEmpty()))): ?>
    / <?php echo $pidInfo['title']; endif; ?>
    / <?php echo $pageInfo['title']; ?></div>
    </div>

  <div class="content">
    <div class="row">
      <div class="col-xs-9" >
        <div class="content-index" >
          <h3><?php echo $pageInfo['title']; ?></h3>
          <div class="bottom-line"></div>
          <div class="content-text">
              <?php echo $pageInfo['content']; ?>
          </div>
        </div>
      </div>
      <div class="col-xs-3" >
        <div class="news">
          <!--行业资讯 开始-->
        <div class="hyzx-bar-box">
          <div class="hbb-left">行业资讯</div>
          <div class="hbb-right"><a href="<?php echo url('Article/lists?category=info'); ?>">更多</a></div>
        </div>
          <div class="news-content">
              <?php $__POSTS__ = db('TermRelationships')->alias('a')->join('posts b','b.id= a.object_id','LEFT')->field('b.*,a.term_taxonomy_id as category')->where('a.term_taxonomy_id','in',2)->where('b.status','publish')->order("id desc")->limit(10)->select();if(is_array($__POSTS__) || $__POSTS__ instanceof \think\Collection): $i = 0; $__LIST__ = $__POSTS__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?>
                <p><a href="<?php echo url('Article/detail?id='.$list['id'].'&category=info'); ?>"><?php echo msubstr($list['title'],0,12); ?></a></p>
              <?php endforeach; endif; else: echo "" ;endif; ?>
          </div>          
        </div>
        <!--行业资讯 结束-->
        <div class="" style="padding:10px;background:#fff;">
            <div id="map" style="width:256px;height:300px;"></div>
          </div>
      </div>
    </div>
  </div>

</div>
</div>
<!--main end-->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="<?php echo config('theme_path'); ?>/index/js/jquery.min.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="<?php echo config('theme_path'); ?>/index/js/bootstrap.min.js"></script>
<!--footer start-->
<div class="footer">
	<div class="footer-main">
    	<div class="container">
			<div class="footer-main-left">
        		<ul>
            		<li>
                    	<p class="title"><a>关于我们</a></p>
						<div style="clear:both"></div>
                    	<p><a href="<?php echo url('article/page?name=company'); ?>">公司简介</a></p>
                    	<p><a href="<?php echo url('article/page?name=culture'); ?>">企业文化</a></p>
                    	<p><a href="<?php echo url('article/page?name=history'); ?>">发展历程</a></p>
                    	<p><a href="<?php echo url('article/page?name=honor'); ?>">荣誉资质</a></p>
                    </li>
            		<li>
                    	<p class="title"><a>新闻资讯</a></p>
						<div style="clear:both"></div>
                    	<p><a href="<?php echo url('article/lists?category=news'); ?>">新闻中心</a></p>
                    	<p><a href="<?php echo url('article/lists?category=info'); ?>">行业资讯</a></p>
                    </li>
            		<li>
                    	<p class="title"><a>联系我们</a></p>
						<div style="clear:both"></div>
                    	<p><a href="<?php echo url('article/page?name=job'); ?>">招贤纳士</a></p>
                    	<p><a href="<?php echo url('article/page?name=address'); ?>">在线留言</a></p>
                    </li>
            	</ul>
        	</div>
			<div class="footer-main-right">
            	<div class="wap-erweima">
                	<p><img src="<?php echo config('theme_path'); ?>/index/images/code.png"></p>
                	<p>手机版</p>
                </div>
            	<div class="wx-erweima">
                	<p><img src="<?php echo config('theme_path'); ?>/index/images/code.png"></p>
                	<p>微信平台</p>
                </div>
            </div>
        </div>
    </div>
	<div class="footer-bottom">
     <?php echo config('web_site_icp'); ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;版权所有 ® 2005-2015 迁安深蓝信息技术有限公司 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;技术支持：<a href="#">深蓝科技</a>
    </div>
</div>



<!--footer end-->

<!-- 地图   -->
<?php if(config('baidu_map_ak')): ?>
<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=<?php echo config('baidu_map_ak'); ?>">
</script>
<script type="text/javascript"> 
var map = new BMap.Map("map");          // 创建地图实例  
var point = new BMap.Point(<?php echo config('baidu_map_lon'); ?>,<?php echo config('baidu_map_lat'); ?>);  // 创建点坐标  
map.centerAndZoom(point, 15);                 // 初始化地图，设置中心点坐标和地图级别
map.enableScrollWheelZoom(true);          //开启缩放
map.enableDragging();           //开启拖拽
var marker = new BMap.Marker(point);        // 创建标注    
map.addOverlay(marker);        
</script> 
<?php else: ?> 
  <script>
    str = "<img src='<?php echo config('theme_path'); ?>/index/images/map.jpg' alt='' width='255' height='300' >";
    $('#map').append(str);
  </script>
<?php endif; ?>


 
</body>
</html>
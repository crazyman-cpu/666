<?php if (!defined('HKCMS_VERSION')) exit(); ?>
<style type="text/css">
a{
  text-decoration: none;
}

.container{
  max-width: 1080px;
  margin: 0 auto;
  display:block;
}

.fl{
  float: left;
}

.fr{
  float: right;
}

.clearfix:after,
.clearfix:before {
  
  display: block;
  clear: both;
}

.col-1,
.col-2,
.col-3,
.col-4,
.col-5,
.col-6,
.col-7,
.col-8,
.col-9{
  float: left;
  display: block;
  position: relative;
  min-height: 1px;
}

.col-1{
   width: 10%;
}
.col-2{
   width: 20%;
}
.col-3{
   width: 30%;
}
.col-4{
   width: 40%;
}
.col-5{
   width: 50%;
}
.col-6{
   width: 60%;
}
.col-7{
   width: 70%;
}
.col-8{
   width: 80%;
}
.col-9{
   width: 90%;
}
.top-nav{

  background: #eee;

}

.top-nav .item{
  display: inline-block;
  padding: 6px 10px;
  color: #666;
}

.top-nav .item:hover{
  color: #333;
}
</style>
<header>
    <div class="top-nav clearfix">
    <div class="container">
      <div class="fl">
        <a class="item" href="#">首页</a href="#">
      </div>
      <div class="fr">
          <a class="item" href="#">我的订单</a href="#">
          <a class="item" href="#">收藏夹</a href="#">
          <a class="item" href="#">登录</a href="#">
          <a class="item" href="#">注册</a href="#">
      </div>
    </div>
  </div>
</header>

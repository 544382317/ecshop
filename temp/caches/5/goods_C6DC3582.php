<?php exit;?>a:3:{s:8:"template";a:17:{i:0;s:53:"/usr/local/www/htdocs/ecshop/themes/default/goods.dwt";i:1;s:67:"/usr/local/www/htdocs/ecshop/themes/default/library/page_header.lbi";i:2;s:63:"/usr/local/www/htdocs/ecshop/themes/default/library/ur_here.lbi";i:3;s:60:"/usr/local/www/htdocs/ecshop/themes/default/library/cart.lbi";i:4;s:69:"/usr/local/www/htdocs/ecshop/themes/default/library/category_tree.lbi";i:5;s:69:"/usr/local/www/htdocs/ecshop/themes/default/library/goods_related.lbi";i:6;s:70:"/usr/local/www/htdocs/ecshop/themes/default/library/goods_fittings.lbi";i:7;s:69:"/usr/local/www/htdocs/ecshop/themes/default/library/goods_article.lbi";i:8;s:72:"/usr/local/www/htdocs/ecshop/themes/default/library/goods_attrlinked.lbi";i:9;s:63:"/usr/local/www/htdocs/ecshop/themes/default/library/history.lbi";i:10;s:69:"/usr/local/www/htdocs/ecshop/themes/default/library/goods_gallery.lbi";i:11;s:66:"/usr/local/www/htdocs/ecshop/themes/default/library/goods_tags.lbi";i:12;s:68:"/usr/local/www/htdocs/ecshop/themes/default/library/bought_goods.lbi";i:13;s:73:"/usr/local/www/htdocs/ecshop/themes/default/library/bought_note_guide.lbi";i:14;s:64:"/usr/local/www/htdocs/ecshop/themes/default/library/comments.lbi";i:15;s:60:"/usr/local/www/htdocs/ecshop/themes/default/library/help.lbi";i:16;s:67:"/usr/local/www/htdocs/ecshop/themes/default/library/page_footer.lbi";}s:7:"expires";i:1464670926;s:8:"maketime";i:1464667326;}<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="" />
<meta name="Description" content="" />
<title>青菜_食品_ECSHOP演示站 - Powered by ECShop</title>
<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="themes/default/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/common.js"></script><script type="text/javascript">
function $id(element) {
  return document.getElementById(element);
}
//切屏--是按钮，_v是内容平台，_h是内容库
function reg(str){
  var bt=$id(str+"_b").getElementsByTagName("h2");
  for(var i=0;i<bt.length;i++){
    bt[i].subj=str;
    bt[i].pai=i;
    bt[i].style.cursor="pointer";
    bt[i].onclick=function(){
      $id(this.subj+"_v").innerHTML=$id(this.subj+"_h").getElementsByTagName("blockquote")[this.pai].innerHTML;
      for(var j=0;j<$id(this.subj+"_b").getElementsByTagName("h2").length;j++){
        var _bt=$id(this.subj+"_b").getElementsByTagName("h2")[j];
        var ison=j==this.pai;
        _bt.className=(ison?"":"h2bg");
      }
    }
  }
  $id(str+"_h").className="none";
  $id(str+"_v").innerHTML=$id(str+"_h").getElementsByTagName("blockquote")[0].innerHTML;
}
</script>
</head>
<body>
<script type="text/javascript">
var process_request = "正在处理您的请求...";
</script>
<div class="block clearfix">
 <div class="f_l"><a href="index.php" name="top"><img src="themes/default/images/logo.gif" /></a></div>
 <div class="f_r log">
   <ul>
   <li class="userInfo">
   <script type="text/javascript" src="js/transport.js"></script><script type="text/javascript" src="js/utils.js"></script>   <font id="ECS_MEMBERZONE">554fcae493e564ee0dc75bdf2ebf94camember_info|a:1:{s:4:"name";s:11:"member_info";}554fcae493e564ee0dc75bdf2ebf94ca </font>
   </li>
      </ul>
 </div>
</div>
<div  class="blank"></div>
<div id="mainNav" class="clearfix">
  <a href="index.php" class="cur">首页<span></span></a>
  </div>
<div id="search"  class="clearfix">
  <div class="keys f_l">
   <script type="text/javascript">
    
    <!--
    function checkSearchForm()
    {
        if(document.getElementById('keyword').value)
        {
            return true;
        }
        else
        {
            alert("请输入搜索关键词！");
            return false;
        }
    }
    -->
    
    </script>
      </div>
  <form id="searchForm" name="searchForm" method="get" action="search.php" onSubmit="return checkSearchForm()" class="f_r"  style="_position:relative; top:5px;">
   <select name="category" id="category" class="B_input">
      <option value="0">所有分类</option>
      <option value="1" >食品</option>    </select>
   <input name="keywords" type="text" id="keyword" value="" class="B_input" style="width:110px;"/>
   <input name="imageField" type="submit" value="" class="go" style="cursor:pointer;" />
   <a href="search.php?act=advanced_search">高级搜索</a>
   </form>
</div>
<div class="block box">
 <div id="ur_here">
  当前位置: <a href=".">首页</a> <code>&gt;</code> <a href="category.php?id=1">食品</a> <code>&gt;</code> 青菜 </div>
</div>
<div class="blank"></div>
<div class="block clearfix">
  
  <div class="AreaL">
    
<div class="cart" id="ECS_CARTINFO">
 554fcae493e564ee0dc75bdf2ebf94cacart_info|a:1:{s:4:"name";s:9:"cart_info";}554fcae493e564ee0dc75bdf2ebf94ca</div>
<div class="blank5"></div>
<div class="box">
 <div class="box_1">
  <div id="category_tree">
         <dl>
     <dt><a href="category.php?id=1">食品</a></dt>
            
       </dl>
     
  </div>
 </div>
</div>
<div class="blank5"></div>
    
    <div class="box" id='history_div'>
 <div class="box_1">
  <h3><span>浏览历史</span></h3>
  <div class="boxCenterList clearfix" id='history_list'>
    554fcae493e564ee0dc75bdf2ebf94cahistory|a:1:{s:4:"name";s:7:"history";}554fcae493e564ee0dc75bdf2ebf94ca  </div>
 </div>
</div>
<div class="blank5"></div>
<script type="text/javascript">
if (document.getElementById('history_list').innerHTML.replace(/\s/g,'').length<1)
{
    document.getElementById('history_div').style.display='none';
}
else
{
    document.getElementById('history_div').style.display='block';
}
function clear_history()
{
Ajax.call('user.php', 'act=clear_history',clear_history_Response, 'GET', 'TEXT',1,1);
}
function clear_history_Response(res)
{
document.getElementById('history_list').innerHTML = '您已清空最近浏览过的商品';
}
</script>  </div>
  
  
  <div class="AreaR">
   
   <div id="goodsInfo" class="clearfix">
     
     <div class="imgInfo">
          <a href="javascript:;" onclick="window.open('gallery.php?id=1'); return false;">
      <img src="images/201605/1464638486590771655.jpg" alt="青菜"/>
     </a>
              <div class="blank5"></div>
     
      <div class="clearfix">
      <span onmouseover="moveLeft()" onmousedown="clickLeft()" onmouseup="moveLeft()" onmouseout="scrollStop()"></span>
      <div class="gallery">
        <div id="demo">
          <div id="demo1" style="float:left">
            <ul>
                         <li><a href="gallery.php?id=1&amp;img=1" target="_blank"><img src="images/no_picture.gif" alt="青菜" class="B_blue" /></a>
            </li>
                        </ul>
          </div>
          <div id="demo2" style="display:inline; overflow:visible;"></div>
        </div>
      </div>
      <span onmouseover="moveRight()" onmousedown="clickRight()" onmouseup="moveRight()" onmouseout="scrollStop()" class="spanR"></span>
      <script>
      function $gg(id){  
        return (document.getElementById) ? document.getElementById(id): document.all[id]
      }
      
      var boxwidth=53;//跟图片的实际尺寸相符
      
      var box=$gg("demo");
      var obox=$gg("demo1");
      var dulbox=$gg("demo2");
      obox.style.width=obox.getElementsByTagName("li").length*boxwidth+'px';
      dulbox.style.width=obox.getElementsByTagName("li").length*boxwidth+'px';
      box.style.width=obox.getElementsByTagName("li").length*boxwidth*3+'px';
      var canroll = false;
      if (obox.getElementsByTagName("li").length >= 4) {
        canroll = true;
        dulbox.innerHTML=obox.innerHTML;
      }
      var step=5;temp=1;speed=50;
      var awidth=obox.offsetWidth;
      var mData=0;
      var isStop = 1;
      var dir = 1;
      
      function s(){
        if (!canroll) return;
        if (dir) {
      if((awidth+mData)>=0)
      {
      mData=mData-step;
      }
      else
      {
      mData=-step;
      }
      } else {
        if(mData>=0)
        {
        mData=-awidth;
        }
        else
        {
        mData+=step;
        }
      }
      
      obox.style.marginLeft=mData+"px";
      
      if (isStop) return;
      
      setTimeout(s,speed)
      }
      
      
      function moveLeft() {
          var wasStop = isStop;
          dir = 1;
          speed = 50;
          isStop=0;
          if (wasStop) {
            setTimeout(s,speed);
          }
      }
      
      function moveRight() {
          var wasStop = isStop;
          dir = 0;
          speed = 50;
          isStop=0;
          if (wasStop) {
            setTimeout(s,speed);
          }
      }
      
      function scrollStop() {
        isStop=1;
      }
      
      function clickLeft() {
          var wasStop = isStop;
          dir = 1;
          speed = 25;
          isStop=0;
          if (wasStop) {
            setTimeout(s,speed);
          }
      }
      
      function clickRight() {
          var wasStop = isStop;
          dir = 0;
          speed = 25;
          isStop=0;
          if (wasStop) {
            setTimeout(s,speed);
          }
      }
      </script> 
     </div>
		       
         <div class="blank5"></div>
         
     </div>
     
     <div class="textInfo">
     <form action="javascript:addToCart(1)" method="post" name="ECS_FORMBUY" id="ECS_FORMBUY" >
     <div class="clearfix">
      <p class="f_l">青菜</p>
      <p class="f_r">
                  </p>
      </div>
      <ul>
             <li class="clearfix">
       <dd>
              <strong>商品货号：</strong>1              </dd>
       <dd class="ddR">
                         <strong>商品库存：</strong>
          1                      </dd>
      </li>
      <li class="clearfix">
       <dd>
              <strong>商品品牌：</strong><a href="brand.php?id=1" >三无</a>
              </dd>
       <dd class="ddR">
              <strong>商品重量：</strong>0克              </dd>
      </li>
      <li class="clearfix">
       <dd>
             <strong>上架时间：</strong>2016-05-31             </dd>
       <dd class="ddR">
       
       <strong>商品点击数：</strong>0       </dd>
      </li>
      <li class="clearfix">
       <dd class="ddL">
              <strong>市场价格：</strong><font class="market">￥24元</font><br />
              
       <strong>本店售价：</strong><font class="shop" id="ECS_SHOPPRICE">￥20元</font><br />
              <strong>注册用户：</strong><font class="shop" id="ECS_RANKPRICE_1">￥20元</font><br />
              </dd>
       <dd style="width:48%; padding-left:7px;">
       <strong>用户评价：</strong>
      <img src="themes/default/images/stars5.gif" alt="comment rank 5" />
       </dd>
      </li>
            <li class="padd">
       <font class="f1">购买商品达到以下数量区间时可享受的优惠价格：</font><br />
       <table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#aad6ff">
        <tr>
          <td align="center" bgcolor="#FFFFFF"><strong>数量</strong></td>
          <td align="center" bgcolor="#FFFFFF"><strong>优惠价格</strong></td>
        </tr>
                <tr>
        <td align="center" bgcolor="#FFFFFF" class="shop">10</td>
        <td align="center" bgcolor="#FFFFFF" class="shop">￥18元</td>
        </tr>
               </table>
      </li>
      
            <li class="clearfix">
       <dd>
       <strong>商品总价：</strong><font id="ECS_GOODS_AMOUNT" class="shop"></font>
       </dd>
       <dd class="ddR">
              </dd>
      </li>
            <li class="clearfix">
       <dd>
       <strong>购买数量：</strong>
        <input name="number" type="text" id="number" value="1" size="4" onblur="changePrice()" style="border:1px solid #ccc; "/>
       </dd>
       <dd class="ddR">
              <strong>购买此商品可使用：</strong><font class="f4">0 积分</font>
              </dd>
      </li>
            
            
      <li class="padd">
      <a href="javascript:addToCart(1)"><img src="themes/default/images/bnt_cat.gif" /></a>
      <a href="javascript:collect(1)"><img src="themes/default/images/bnt_colles.gif" /></a>
            <a href="user.php?act=affiliate&goodsid=1"><img src='themes/default/images/bnt_recommend.gif'></a>
            </li>
      </ul>
      </form>
     </div>
   </div>
   <div class="blank"></div>
   
   
     <div class="box">
     <div class="box_1">
      <h3 style="padding:0 5px;">
        <div id="com_b" class="history clearfix">
        <h2>商品描述：</h2>
        <h2 class="h2bg">商品属性</h2>
                </div>
      </h3>
      <div id="com_v" class="boxCenterList RelaArticle"></div>
      <div id="com_h">
       <blockquote>
               </blockquote>
     <blockquote>
      <table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#dddddd">
              </table>
     </blockquote>
     
      </div>
     </div>
    </div>
    <script type="text/javascript">
    <!--
    reg("com");
    //-->
    </script>
  <div class="blank"></div>
  
  
<div class="box">
     <div class="box_1">
      <h3><span class="text">商品标签</span></h3>
      <div class="boxCenterList clearfix ie6">
       <form name="tagForm" action="javascript:;" onSubmit="return submitTag(this)" id="tagForm">
        <p id="ECS_TAGS" style="margin-bottom:5px;">
                  </p>
        <p>
          <input type="text" name="tag" id="tag" class="inputBg" size="35" />
          <input type="submit" value="添 加" class="bnt_blue" style="border:none;" />
          <input type="hidden" name="goods_id" value="1"  />
        </p>
                <script type="text/javascript">
                //<![CDATA[
                
                /**
                 * 用户添加标记的处理函数
                 */
                function submitTag(frm)
                {
                  try
                  {
                    var tag = frm.elements['tag'].value;
                    var idx = frm.elements['goods_id'].value;
                    if (tag.length > 0 && parseInt(idx) > 0)
                    {
                      Ajax.call('user.php?act=add_tag', "id=" + idx + "&tag=" + tag, submitTagResponse, "POST", "JSON");
                    }
                  }
                  catch (e) {alert(e);}
                  return false;
                }
                function submitTagResponse(result)
                {
                  var div = document.getElementById('ECS_TAGS');
                  if (result.error > 0)
                  {
                    alert(result.message);
                  }
                  else
                  {
                    try
                    {
                      div.innerHTML = '';
                      var tags = result.content;
                      for (i = 0; i < tags.length; i++)
                      {
                        div.innerHTML += '<a href="search.php?keywords='+tags[i].word+'" style="color:#006ace; text-decoration:none; margin-right:5px;">' +tags[i].word + '[' + tags[i].count + ']<\/a>&nbsp;&nbsp; ';
                      }
                    }
                    catch (e) {alert(e);}
                  }
                }
                
                //]]>
                </script>
              </form>
      </div>
     </div>
    </div>
    <div class="blank5"></div><div id="ECS_BOUGHT">554fcae493e564ee0dc75bdf2ebf94cabought_notes|a:2:{s:4:"name";s:12:"bought_notes";s:2:"id";i:1;}554fcae493e564ee0dc75bdf2ebf94ca</div><div id="ECS_COMMENT"> 554fcae493e564ee0dc75bdf2ebf94cacomments|a:3:{s:4:"name";s:8:"comments";s:4:"type";i:0;s:2:"id";i:1;}554fcae493e564ee0dc75bdf2ebf94ca</div>
  </div>
  
</div>
<div class="blank5"></div>
<div class="block">
  <div class="box">
   <div class="helpTitBg clearfix">
       </div>
  </div>
</div>
<div class="blank"></div>
<div class="blank"></div>
<div id="bottomNav" class="box">
 <div class="box_1">
  <div class="bNavList clearfix">
   <div class="f_l">
      </div>
   <div class="f_r">
   <a href="#top"><img src="themes/default/images/bnt_top.gif" /></a> <a href="index.php"><img src="themes/default/images/bnt_home.gif" /></a>
   </div>
  </div>
 </div>
</div>
<div class="blank"></div>
<div id="footer">
 <div class="text">
 &copy; 2005-2016 ECSHOP 版权所有，并保留所有权利。<br />
                                                                                     <br />
    554fcae493e564ee0dc75bdf2ebf94caquery_info|a:1:{s:4:"name";s:10:"query_info";}554fcae493e564ee0dc75bdf2ebf94ca<br />
  <a href="http://www.ecshop.com" target="_blank" style=" font-family:Verdana; font-size:11px;">Powered&nbsp;by&nbsp;<strong><span style="color: #3366FF">ECShop</span>&nbsp;<span style="color: #FF9966">v2.7.3</span></strong></a>&nbsp;<a href="http://www.ecshop.com/license.php?product=ecshop_b2c&url=http%3A%2F%2F192.168.2.132%2Fecshop%2F" target="_blank"
>&nbsp;&nbsp;Licensed</a><br />
        <div align="left"  id="rss"><a href=""><img src="themes/default/images/xml_rss2.gif" alt="rss" /></a></div>
 </div>
</div>
</body>
<script type="text/javascript">
var goods_id = 1;
var goodsattr_style = 1;
var gmt_end_time = 0;
var day = "天";
var hour = "小时";
var minute = "分钟";
var second = "秒";
var end = "结束";
var goodsId = 1;
var now_time = 1464638526;
onload = function(){
  changePrice();
  fixpng();
  try {onload_leftTime();}
  catch (e) {}
}
/**
 * 点选可选属性或改变数量时修改商品价格的函数
 */
function changePrice()
{
  var attr = getSelectedAttributes(document.forms['ECS_FORMBUY']);
  var qty = document.forms['ECS_FORMBUY'].elements['number'].value;
  Ajax.call('goods.php', 'act=price&id=' + goodsId + '&attr=' + attr + '&number=' + qty, changePriceResponse, 'GET', 'JSON');
}
/**
 * 接收返回的信息
 */
function changePriceResponse(res)
{
  if (res.err_msg.length > 0)
  {
    alert(res.err_msg);
  }
  else
  {
    document.forms['ECS_FORMBUY'].elements['number'].value = res.qty;
    if (document.getElementById('ECS_GOODS_AMOUNT'))
      document.getElementById('ECS_GOODS_AMOUNT').innerHTML = res.result;
  }
}
</script>
</html>
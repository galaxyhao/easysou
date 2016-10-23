<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>全易搜 - <?php echo $_GET["key"] ?></title>
<link rel="shortcut icon" href="images/icon.png">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<script>
  function load()
  {
    var x = document.getElementById("iframe");
    var y = (x.contentWindow || x.contentDocument);
    if (y.document)
      y = y.document;
    y.getElementById("src1").src = "https://www.baidu.com/s?wd=" + "<?php echo $_GET["key"] ?>"
    y.getElementById("src2").src = "https://www.baidu.com/s?wd=" + "<?php echo $_GET["key"] ?>"
    y.getElementById("src3").src = "https://www.baidu.com/s?wd=" + "<?php echo $_GET["key"] ?>"
    y.getElementById("src4").src = "https://www.baidu.com/s?wd=" + "<?php echo $_GET["key"] ?>"
  }
</script>
</head>
<style>
  body 
  { 
    padding-top: 50px;
  }
</style>
<body onload="load()">
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.html"><strong>全易搜</strong></a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
<!--——————————————————————————搜索引擎数目————————————————————————————————-->
      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> 多搜 <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">搜一下</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="search1.php">单搜</a></li>
            <li><a href="search2.php">双搜</a></li>
            <li><a href="search3.php">三搜</a></li>
            <li><a href="search4.php">四搜</a></li>
          </ul>
        </li>
      </ul>
<!--————————————————————————————————搜索引擎选择————————————————————————————————————-->
      <div class="navbar-form navbar-right">
      <label>右下：</label>
    <select class="form-control" id="search_engines4">
      <option value="baidu">百度</option>
      <option value="google">google</option>
      <option value="sougou">搜狗</option>
      <option value="bing">bing</option>
      <option value="tuling">图灵搜索</option>
      <option value="360">360搜索</option>
    </select>
  </div>
  <div class="navbar-form navbar-right">
      <label>右上：</label>
    <select class="form-control" id="search_engines3">
      <option value="baidu">百度</option>
      <option value="google">google</option>
      <option value="sougou">搜狗</option>
      <option value="bing">bing</option>
      <option value="tuling">图灵搜索</option>
      <option value="360">360搜索</option>
    </select>
  </div>
  <div class="navbar-form navbar-right ">
      <label>左下：</label>
    <select class="form-control" id="search_engines2">
      <option value="baidu">百度</option>
      <option value="google">google</option>
      <option value="sougou">搜狗</option>
      <option value="bing">bing</option>
      <option value="tuling">图灵搜索</option>
      <option value="360">360搜索</option>
    </select>
  </div>
  <div class="navbar-form navbar-right ">
      <label>左上：</label>
    <select class="form-control" id="search_engines1">
      <option value="baidu">百度</option>
      <option value="google">google</option>
      <option value="sougou">搜狗</option>
      <option value="bing">bing</option>
      <option value="tuling">图灵搜索</option>
      <option value="360">360搜索</option>
    </select>
  </div>
<!--—————————————————————————————————搜索内容—————————————————————————————————————-->
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" id="search_input" value = "<?php echo $_GET["key"] ?>" onkeyup="search()">
        </div>
        <input type="text" style="display:none">  <!--防止回车提交数据-->
        <button type="button" class="btn btn-default" onclick="search()">搜索</button>
      </form>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<iframe frameborder="0" width="100%" height="600px" src="frameset4.php" id="iframe">
</iframe>
<!-- 动态获取调整iframe框架的高度 -->
<script>
  var height = window.screen.height;
  document.getElementById("iframe").height = height;
</script>

<script>
function select(engines,search_key,y,src)
  {

    if (engines == "baidu")
      y.getElementById(src).src = "https://www.baidu.com/s?wd=" +  search_key;
    else if(engines == "google")
      y.getElementById(src).src = "https://g.inspire-energy.com.cn/#q=" + search_key;
    else if(engines == "bing")
      y.getElementById(src).src = "http://cn.bing.com/search?q=" + search_key;
    else if(engines == "sougou")
      y.getElementById(src).src = "https://www.sogou.com/web?query=" + search_key;
    else if(engines == "tuling")
      y.getElementById(src).src = "https://www.tlss.space/search?q=" + search_key;
    else if(engines == "360")
      y.getElementById(src).src = "https://www.so.com/s?q=" + search_key;
  }
  function search()
  {
    var search_key = document.getElementById("search_input").value;
    var engines1 = document.getElementById("search_engines1").value;
    var engines2 = document.getElementById("search_engines2").value;
    var engines3 = document.getElementById("search_engines3").value;
    var engines4 = document.getElementById("search_engines4").value;
    document.title = "全易搜 - " + search_key;
    var x = document.getElementById("iframe");
    var y = (x.contentWindow || x.contentDocument);
    if (y.document)
      y = y.document;
    select(engines1,search_key,y,"src1");
    select(engines2,search_key,y,"src2");
    select(engines3,search_key,y,"src3");
    select(engines4,search_key,y,"src4");
  }
  
</script>
<script src="http://apps.bdimg.com/libs/jquery/2.0.0/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
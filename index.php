<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">
</head>

<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #A854BF;
  top: 0;
  width: 100%;
  opacity: 0.8;
 
}
li {
  float: left; 
  font-size: 18px;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #722E84;
}

.active {
  background-color: #FAE88B;
  color:black;
}
body, html {
  height: 100%;
  margin: 0;
}

.bgimg {
  background-image: url('page_one4.gif');
  height: 100%;
  background-position: center;
  background-size: cover;
  position: relative;
  color: white;
  font-family: 'Itim', cursive;
  font-size: 25px;
}

.topleft {
  position: absolute;
  top: 0;
  left: 16px;
}

.bottomleft {
  position: absolute;
  bottom: 0;
  left: 16px;
}

.middle {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
}

hr {
  margin: auto;
  width: 40%;
}
img{
  width: 30%;
  height: 30%;
}
.bigfont{
  font-size: 75px;
  font-weight: bold;
  width: 400px; 
  text-shadow: 2px 2px 5px gray;
}
a:hover{
  color:#FAE88B;
}

@media screen and (max-width: 600px) {
  .bigfont{
  font-size: 50px;
  font-weight: bold;
  width: 240px; 
}
li {
  float: left; 
  font-size: 14px;
}

}
</style>
<body>
<div class="bgimg">
<ul>
  <li><a class="active" href="/dss_webproject/index.php">หน้าหลัก</a></li>
  <li><a href="/dss_webproject/form_predict.php">แบบทดสอบ</a></li>
  <li><a href="/dss_webproject/contect.php">เกี่ยวกับเรา</a></li>
</ul>
  <div class="topleft">
  </div>
  <a href="/dss_webproject/form_predict.php">
  <div class="middle">
  <p class="bigfont">คุณจะมีโอกาสที่จะได้ฝึกงานสหกิจหรือไม่ ?</p> 
  </div>
  </a>
  <div class="bottomleft"> 
  <p><img src="FITM.png"></p>
  </div>
</div>
</body>
</html>

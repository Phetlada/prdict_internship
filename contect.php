<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">
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
body {
  font-family: 'Itim', cursive;
  margin: 0;
  background-image: url('page_two.png');
  color:white;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}
.row{
  width: 80%;
}
.column {
  float: left;
  width: 33.33%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
  background-color: #671180;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #671180;
  color: white;
}

.container {
  padding: 0 16px;  
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}
img{
  height: 300px;
}
.logo{
  height: 50px;
}
.logo3{
  height: 40px;
}
@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
  .logo{
  height: 50px;
}
.logo3{
  height: 30px;
}
}
</style>
<body>
<center>
<ul>
  <li><a href="/dss_webproject/index.php">หน้าหลัก</a></li>
  <li><a href="/dss_webproject/form_predict.php">แบบทดสอบ</a></li>
  <li><a  class="active" href="/dss_webproject/contect.php">เกี่ยวกับเรา</a></li>
</ul>
<div class="about-section">
  <h1>เกี่ยวกับเรา</h1>
  <img src="kmutnb.png" class="logo" alt="">
  <img src="FITM.png" class="logo" alt="">
</div>

<h2 style="text-align:center">กลุ่มของเรา</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="yok.jpg" alt="Jane" style="width:100%">
      <div class="container">
        <h2>เพชรลดา ทองการ</h2>
        <p >PROJECT MANAGER</p>
        <p>Full Stack Developer</p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="may.jpg" alt="Mike" style="width:100%">
      <div class="container">
        <h2>หทัยรัตน์ ตันจิตวิริยะ</h2>
        <p >Document Controller</p>
        <p>Tranform and Classsify data</p>
      </div>
    </div>
  </div>
  <div class="column">
    <div class="card">
      <img src="joom.jpg" alt="John" style="width:100%">
      <div class="container">
        <h2>สมฤทัย อินทพันธ์</h2>
        <p>Designer</p>
        <p>Select data and pre
      </div>
    </div>
  </div>
  <div class="column">
    <div class="card">
      <img src="top.jpg" alt="John" style="width:100%">
      <div class="container">
        <h2>ธีรัตม์ โรจนประดิษฐ์</h2>
        <p>Select data and preprocess</p>
      </div>
    </div>
  </div>
  <div class="column">
    <div class="card">
      <img src="manao.jpg" alt="John" style="width:100%">
      <div class="container">
        <h2>มนัสชนก เพ็งมีศรี </h2>
        <p>Tranform data and Classsify data</p>
      </div>
    </div>
  </div>
  <div class="column">
    <div class="card">
      <img src="bam.jpg" alt="John" style="width:100%">
      <div class="container">
        <h2>ปิยนุช เทพอาษา</h2>
        <p>Document Controller</p>
      </div>
    </div>
  </div>
</div>
</center>
</body>
</html>

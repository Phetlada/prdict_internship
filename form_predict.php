<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">
<style>
* {
  box-sizing: border-box;
  font-family: 'Itim', cursive;
}
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
input[type=text], select, textarea {
  width: 70%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
  background-color: #EDD6F4;
  float: left;
}

label {
  padding: 12px 12px 12px 0px;
  display: inline-block;

}
.tab{
}
input[type=submit] {
  background-color: black;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #FAE88B;
}

.container {
  border-radius: 5px;
  background-color: #671180;
  padding: 20px;
  width: 90%;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
 
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
body{
  background-image: url('page_two3.png');
  width: 100%;
  height: 100%;
  margin: 0;
  color: white;
  background-repeat:no-repeat;
  background-position:center;
  background-attachment:fixed;
}
.bottomleft {
  position: absolute;
  bottom: 0;
  left: 16px;
}
/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
  li {
  float: left; 
  font-size: 14px;
}
.container{
  font-size:16px
}
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
  background-color: #EDD6F4;
  float: left;
}
}
</style>
</head>
<body>
<ul>
  <li><a  href="/dss_webproject/index.php">หน้าหลัก</a></li>
  <li><a class="active" href="/dss_webproject/form_predict.php">แบบทดสอบ</a></li>
  <li><a href="/dss_webproject/contect.php">เกี่ยวกับเรา</a></li>
</ul>

<center>
<h1>แบบทดสอบ</h1>
<div class="container" align="center" >
  <form  method="POST" action="/dss_webproject/model.php" style="width:80%">
    <div class="row">
      <div class="col-25">
        <label for="fname">ชื่อ :</label>
      </div>
      <div class="col-25">
        <input type="text" id="fname" name="firstname" placeholder="ชื่อของคุณ..">
      </div>  
      <div class="col-25">
        <label for="lname">นามสกุล :</label>
      </div>
      <div class="col-25">
        <input type="text" id="lname" name="lastname" placeholder="นามสกุลของคุณ..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="year">ชั้นปีการศึกษา : </label>
      </div>
      <div class="col-75">
        <select id="year" name="year">
          <option value="1">ปี 1</option>
          <option value="2">ปี 2</option>
          <option value="3">ปี 3</option>
        </select>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="subject">คำสั่ง :</label>
      </div>
      <div class="col-75" >
        <label for="subject">กรอกข้อมูลให้ครบถ้วน ถ้าวิชาไหนยังไม่เคยเรียน ให้คาดเดาเกรดที่จะได้ลงในช่อง</label>
      </div>
      <div class="col-25">
        <label for="subject_data_com">DATA COMMU & COMP NETWORK</label>
      </div>
      <div class="col-25">
        <select id="subject_data_com" name="subject_data_com">
          <option value="4">A</option>
          <option value="3.5">B+</option>
          <option value="3">B</option>
          <option value="2.5">C+</option>
          <option value="2">C</option>
          <option value="1.5">D+</option>
          <option value="1">D</option>
          <option value="0">F</option>
          <option value="-1">Drop</option>
        </select>
      </div>
      <div class="col-25">
        <label for="subject_data_com">DATA STRUCTURE & ALGORITHM</label>
      </div>
      <div class="col-25">
        <select id="subject_data_structure" name="subject_data_structure">
          <option value="4">A</option>
          <option value="3.5">B+</option>
          <option value="3">B</option>
          <option value="2.5">C+</option>
          <option value="2">C</option>
          <option value="1.5">D+</option>
          <option value="1">D</option>
          <option value="0">F</option>
          <option value="-1">Drop</option>
        </select>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="subject_oop">OBJECT-ORIENTED PROGRAM</label>
      </div>
      <div class="col-25">
        <select id="subject_oop" name="subject_oop">
          <option value="4">A</option>
          <option value="3.5">B+</option>
          <option value="3">B</option>
          <option value="2.5">C+</option>
          <option value="2">C</option>
          <option value="1.5">D+</option>
          <option value="1">D</option>
          <option value="0">F</option>
          <option value="-1">Drop</option>
        </select>
      </div>
      <div class="col-25">
        <label for="subject_sa">SYSTEM ANALYSIS & DESIGN</label>
      </div>
      <div class="col-25">
        <select id="subject_sa" name="subject_sa">
          <option value="4">A</option>
          <option value="3.5">B+</option>
          <option value="3">B</option>
          <option value="2.5">C+</option>
          <option value="2">C</option>
          <option value="1.5">D+</option>
          <option value="1">D</option>
          <option value="0">F</option>
          <option value="-1">Drop</option>
        </select>
      </div>
      <div class="col-25">
        <label for="subject_webpro">WEB PROGRMMIMG</label>
      </div>
      <div class="col-25">
        <select id="subject_webpro" name="subject_webpro">
          <option value="4">A</option>
          <option value="3.5">B+</option>
          <option value="3">B</option>
          <option value="2.5">C+</option>
          <option value="2">C</option>
          <option value="1.5">D+</option>
          <option value="1">D</option>
          <option value="0">F</option>
          <option value="-1">Drop</option>
        </select>
      </div>
      <div class="col-25">
        <label for="subject_englishI">ENGLISH I</label>
      </div>
      <div class="col-25">
        <select id="subject_englishI" name="subject_englishI">
          <option value="4">A</option>
          <option value="3.5">B+</option>
          <option value="3">B</option>
          <option value="2.5">C+</option>
          <option value="2">C</option>
          <option value="1.5">D+</option>
          <option value="1">D</option>
          <option value="0">F</option>
          <option value="-1">Drop</option>
        </select>
      </div>
      <div class="col-25">
        <label for="subject_englishII">ENGLISH II</label>
      </div>
      <div class="col-25">
        <select id="subject_englishII" name="subject_englishII">
          <option value="4">A</option>
          <option value="3.5">B+</option>
          <option value="3">B</option>
          <option value="2.5">C+</option>
          <option value="2">C</option>
          <option value="1.5">D+</option>
          <option value="1">D</option>
          <option value="0">F</option>
          <option value="-1">Drop</option>
        </select>
      </div>
      <div class="col-25">
        <label for="subject_math">DISCRETE MATH & APPLICATION</label>
      </div>
      <div class="col-25">
        <select id="subject_math" name="subject_math">
          <option value="4">A</option>
          <option value="3.5">B+</option>
          <option value="3">B</option>
          <option value="2.5">C+</option>
          <option value="2">C</option>
          <option value="1.5">D+</option>
          <option value="1">D</option>
          <option value="0">F</option>
          <option value="-1">Drop</option>
        </select>
      </div>
    </div>
    <br>
    <div class="row">
      <input type="submit" value="ทำนาย" name="submit">
    </div>
  </form>
</div>
<h1>ลองทำนายดูสิ !</h1>
</center>
</body>
</html>

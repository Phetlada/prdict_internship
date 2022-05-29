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
  background-color: #671180;
  padding: 50px;
  text-align: center;

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
  height: 300px;
}
.logo2{
  height: 200px;
  width: 200px;
  background: red; /* สี */
-moz-border-radius: 90px;
-webkit-border-radius: 90px;
border-radius: 90px;
}
.row{
  background-color: #671180;
  width: 80%;
}
.column {
  float: left;
  width: 25%;
  margin-bottom: 16px;
  padding: 0 8px;
}
@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
  .logo{
  height: 140px;
}
.logo2{
  height: 140px;
  width: 140px;
}
h1,h2,h3,h4{
    font-size: 18px;
}
}
</style>
<body>
<center>
<ul>
  <li><a href="/dss_webproject/index.php">หน้าหลัก</a></li>
  <li><a href="/dss_webproject/form_predict.php">แบบทดสอบ</a></li>
  <li><a href="/dss_webproject/contect.php">เกี่ยวกับเรา</a></li>
</ul>
</body>
</html>

<?php

    $s1 = $_POST['subject_data_com'];
    $s2 = $_POST['subject_data_structure'];
    $s3 = $_POST['subject_oop'];
    $s4 = $_POST['subject_sa'];
    $s5 = $_POST['subject_webpro'];
    $s6 = $_POST['subject_englishI'];
    $s7 = $_POST['subject_englishII'];
    $s8 = $_POST['subject_math'];
$data = array(
    'DATA COMMU & COMP NETWORK,DATA STRUCTURE & ALGORITHM,DISCRETE MATH & APPLICATION,ENGLISH I,ENGLISH II,OBJECT-ORIENTED PROGRAM,SYSTEM ANALYSIS & DESIGN,WEB PROGRAMMING,CLASS',
                            '3.5,3.5,3,2,2,2,3.5,4,A',
                            '-1,2.5,2,1,2.5,1.5,2.5,2.5,B',
                            '2,-1,2.5,1.5,1,1,2.5,1.5,C',
                            "$s1,$s2,$s3,$s4,$s5,$s6,$s7,$s8,?"
);
$fp = fopen('unseen_model.csv', 'w');
foreach ($data as $line) {
    $val = explode(",", $line);
    fputcsv($fp, $val);
}
fclose($fp);

$convert_cmd = 'java -classpath "weka.jar" weka.core.converters.CSVLoader unseen_model.csv > internship.arff';
exec($convert_cmd, $output);
//$cmd = 'java -classpath "weka.jar" weka.classifiers.lazy.IBk -K -t "new.arff" -x 10 -d "internship_model.model"';
//$cmd = 'java -classpath "weka.jar" weka.classifiers.trees.J48 -t "tain.arff" -x 5 -d "internship_model.model"';
$cmd = 'java -classpath "weka.jar" weka.classifiers.lazy.IBk -T "internship.arff" -l "internship_model.model" -p 9';
//$cmd = 'java -classpath "weka.jar" weka.classifiers.trees.J48 -T "internship.arff" -l "new.model" -p 9';
exec($cmd , $output1);
    for ($i = 0; $i < sizeof($output1); $i++)    
    {
        trim($output1[$i]);
        //echo $output1[$i] . "<br>";
        if($i==sizeof($output1)-2) {
            $result = implode($output1);
            //echo $result . "<br>"; // thisisstring
            ltrim($result);
            if(substr_count($result,"A")==3){
                echo "<div><h1>คุณมีโอกาสที่จะได้ฝึกงานสหกิจแน่นอน</h1>";
                echo "<img src='pig_A.png' class='logo'><br>" . 
                     "<a href ='https://docs.google.com/forms/d/e/1FAIpQLSe6shwmMf3ICrEU-TcCXZ7vI_yUZzNZO9NWTUyfQDYua7DgiQ/viewform?usp=sf_link'>แบบฟอร์มประเมินเว็บไซต์</a>" .
                     "<h2>บริษัทแนะนำ สำหรับสายโปรแกรมเมอร์ หรือนักศึกษาที่ชื่นชอบในการเขียนโปรแกรม</h2>" . 
                     "<div class='row'>
                     <div class='column'><h3>บริษัทบิลค์วันกรุ๊ป จำกัด</h3><a href ='https://www.builk.one/th/' ><img src='builkone.jpg' class='logo2'></a></div>" .
                     "<div class='column'><h3>บริษัทเจนเทิลวูแมน จำกัด</h3><a href ='https://www.gentlewomanonline.com/' ><img src='woman.jpg' class='logo2'></a></div>" .
                     "<div class='column'><h3>บริษัทผลิตภัณฑ์และวัตถุก่อสร้าง จำกัด</h3><a href ='https://web.cpac.co.th/' ><img src='cpac.jpg' class='logo2'></a></div>" .
                     "<div class='column'><h3>บริษัทกสิกรเทคโนโลยีกรุ๊ปเซเครเทเรียต จำกัด</h3><a href ='https://h201.co/company/kasikorn-technology-group-secretariat-co-ltd' ><img src='kbtg.jpg' class='logo2'></a></div></div>" . 
                     "<h2>บริษัทแนะนำ สำหรับนักศึกษาที่สนใจสายออกแบบ UX/UI </h2>" . 
                     "<div class='row'>
                     <div class='column'><h3>บริษัทผลิตภัณฑ์และวัตถุก่อสร้าง จำกัด</h3><a href ='https://web.cpac.co.th/' ><img src='cpac.jpg' class='logo2'></a></div>" .
                     "<div class='column'><h3>บริษัทนีโอเน็ตเวิร์ค จำกัด</h3><a href ='https://www.thaijob.com/neonetworkscan' ><img src='neo.png' class='logo2'></a></div></div>" .
                     "<h2>บริษัทแนะนำ สำหรับนักศึกษาที่สนใจและต้องการหาประสบการ์ณสายเครือข่าย Network</h2>" . 
                     "<div class='row'>
                     <div class='column'><h3>บริษัทดีเน็ตเทคโนโลยี จำกัด</h3><a href ='https://www.dnet.co.th/' ><img src='dnet.jpg' class='logo2'></a></div>" .
                     "<div class='column'><h3>บริษัทแอ็ดวานซ์อินฟอร์เมชั่นเทคโนโลยี จำกัด(มหาชน)</h3><a href ='https://www.ait.co.th/th/home' ><img src='ait.png' class='logo2'></a></div>" .
                     "<div class='column'><h3>บริษัทผลิตภัณฑ์และวัตถุก่อสร้าง จำกัด</h3><a href ='https://web.cpac.co.th/' ><img src='cpac.jpg' class='logo2'></a></div>" . 
                     "<div class='column'><h3>บริษัทกสิกรเทคโนโลยีกรุ๊ปเซเครเทเรียต จำกัด</h3><a href ='https://h201.co/company/kasikorn-technology-group-secretariat-co-ltd' ><img src='kbtg.jpg' class='logo2'></a></div></div>";        
            }else if(substr_count($result,"B")==3){
                echo "<h1>คุณมีโอกาสที่จะได้ฝึกงานสหกิจหรืออาจจะไม่ได้ไป ระวังหน่อยน้า</h1>";
                echo "<img src='pig_B.png' class='logo'>" . "<p>คำแนะนำ : เกรดเฉลี่ยอาจจะยังไม่ถึงหรือสุ่มเสี่ยง พยายามรักษาเกรดเฉลี่ยไว้</p>" .
                "<a href ='https://docs.google.com/forms/d/e/1FAIpQLSe6shwmMf3ICrEU-TcCXZ7vI_yUZzNZO9NWTUyfQDYua7DgiQ/viewform?usp=sf_link'>แบบฟอร์มประเมินเว็บไซต์</a>" .
                "<h2>บริษัทแนะนำ สำหรับสายโปรแกรมเมอร์ หรือนักศึกษาที่ชื่นชอบในการเขียนโปรแกรม</h2>" . 
                "<div class='row'>
                <div class='column'><p>บริษัทบิลค์วันกรุ๊ป จำกัด</p><a href ='https://www.builk.one/th/' ><img src='builkone.jpg' class='logo2'></a></div>" .
                "<div class='column'><p>บริษัทเจนเทิลวูแมน จำกัด</p><a href ='https://www.gentlewomanonline.com/' ><img src='woman.jpg' class='logo2'></a></div>" .
                "<div class='column'><p>บริษัทผลิตภัณฑ์และวัตถุก่อสร้าง จำกัด</p><a href ='https://web.cpac.co.th/' ><img src='cpac.jpg' class='logo2'></a></div>" .
                "<div class='column'><p>บริษัทกสิกรเทคโนโลยีกรุ๊ปเซเครเทเรียต จำกัด</p><a href ='https://h201.co/company/kasikorn-technology-group-secretariat-co-ltd' ><img src='kbtg.jpg' class='logo2'></a></div></div>" . 
                "<h2>บริษัทแนะนำ สำหรับนักศึกษาที่สนใจสายออกแบบ UX/UI </h2>" . 
                "<div class='row'>
                <div class='column'><p>บริษัทผลิตภัณฑ์และวัตถุก่อสร้าง จำกัด</p><a href ='https://web.cpac.co.th/' ><img src='cpac.jpg' class='logo2'></a></div>" .
                "<div class='column'><p>บริษัทนีโอเน็ตเวิร์ค จำกัด</p><a href ='https://www.thaijob.com/neonetworkscan' ><img src='neo.png' class='logo2'></a></div></div>" .
                "<h2>บริษัทแนะนำ สำหรับนักศึกษาที่สนใจและต้องการหาประสบการ์ณสายเครือข่าย Network</h2>" . 
                "<div class='row'>
                <div class='column'><p>บริษัทดีเน็ตเทคโนโลยี จำกัด</p><a href ='https://www.dnet.co.th/' ><img src='dnet.jpg' class='logo2'></a></div>" .
                "<div class='column'><p>บริษัทแอ็ดวานซ์อินฟอร์เมชั่นเทคโนโลยี จำกัด(มหาชน)</p><a href ='https://www.ait.co.th/th/home' ><img src='ait.png' class='logo2'></a></div>" .
                "<div class='column'><p>บริษัทผลิตภัณฑ์และวัตถุก่อสร้าง จำกัด</p><a href ='https://web.cpac.co.th/' ><img src='cpac.jpg' class='logo2'></a></div>" . 
                "<div class='column'><p>บริษัทกสิกรเทคโนโลยีกรุ๊ปเซเครเทเรียต จำกัด</p><a href ='https://h201.co/company/kasikorn-technology-group-secretariat-co-ltd' ><img src='kbtg.jpg' class='logo2'></a></div></div>";        
            }else if(substr_count($result,"C")==3){
                echo "<h1>คุณมีโอกาสที่จะไม่ได้ฝึกงานสหกิจ เสียใจด้วยน้า</h1>";
                echo "<img src='pig_C.png' class='logo'>" . "<a href ='https://docs.google.com/forms/d/e/1FAIpQLSe6shwmMf3ICrEU-TcCXZ7vI_yUZzNZO9NWTUyfQDYua7DgiQ/viewform?usp=sf_link'>แบบฟอร์มประเมินเว็บไซต์</a>";
            }
        }
   
    } 

?>
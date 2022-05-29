<?php
$data = array(
    'COMPUTER ARCHITECTURE,COMPUTER PROGRAMMING,DATA STRUCTURE & ALGORITHM,DATABASE SYSTEM ,INTRO TO INFORMATION TECH , OBJECT-ORIENTED PROGRAM , SYSTEM ANALYSIS & DESIGN, WEB PROGRAMMING,COMPUTER GRAPHICS,class',
                            '4,1.5,0,2.5,2.5,1.5,4,1,1,2',
                            '2.5,3,3,1.5,2.5,3,3,1.5,1,1',
                            '1.5,1,2.5,3,3,1.5,0,2.5,3,3',
                            '1.5,3,2,1,4,3.5,2,2.5,1.5,?'
);
$fp = fopen('unseen_maker.csv', 'w');
foreach ($data as $line) {
    $val = explode(",", $line);
    fputcsv($fp, $val);
}
fclose($fp);

$convert_cmd = 'java -classpath "weka.jar" weka.core.converters.CSVLoader -N "last" unseen_maker.csv > DSS_data_unseen.arff ';
exec($convert_cmd, $output);

$cmd = 'java -classpath "weka.jar" weka.classifiers.lazy.IBk -T "C:\Users\masam\Desktop\dataset_Project\DSS_data_unseen.arff" -l "C:\Users\masam\Desktop\dataset_Project\KStar.model" -p 10';
exec($cmd , $output1);
if($output1 != null){
    for ($i = 0; $i < sizeof($output); $i++)    
    {
        trim($output1[$i]);
        echo $output1[$i] . "<br>";
    }
}
else{
    echo "failed";
}

?>
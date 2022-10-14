<?php declare(strict_types=1);
if(isset($_POST['register'])){
$name=$_POST['fullname'];
$email=$_POST['email'];
$dob=$_POST['birthdate'];
$gender=$_POST['gender'];
$country=$_POST['country'];
};
$data=[$name,$email,$dob,$gender,$country];

$file=fopen('userdata.csv','a');
    if($file){
        echo 'file opened';
        fputcsv($file,$data);

    }
    else{
        echo 'file not opened';
    };
    fclose($file);
print_r('Name:'.$name. "<br>".
 "Email:".$email."<br>".
 "Date of Birth:" .$dob. "<br>".
 "Gender:".$gender. "<br>".
"Country:".$country);
?>
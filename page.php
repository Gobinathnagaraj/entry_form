<?php
$dsn = 'mysql:host=localhost;dbname=student';
$username = 'root';
$password = '';

try {
    $db = new PDO($dsn, $username, $password);
    } 
catch (PDOException $e) 
{
    $error_message = $e->getMessage();
    echo $db->$error_message;
    exit();
}
//inserting data
if(isset($_POST['submit']))
    {
        $name = $_POST['name'];
        $age = $_POST['age'];
        $school = $_POST['scl']; 
    }
    if($name !='' && $age !='' && $school !='')
    {
    $query = "INSERT INTO stu (name, age, scl) VALUE(?,?,?)";
    $stmt = $db->prepare($query);
    $stmt->execute([$name, $age, $school]);
    echo 'data stored';
    }
    else{
        echo 'insert data fail'. $query."<br>".$db->$e;
    }
    

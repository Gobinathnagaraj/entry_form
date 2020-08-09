<?php
<?php
$dsn = 'mysql:host=localhost;dbname=student';
$username = 'root';
$password = '';

try {
    $db = new PDO($dsn, $username, $password, $dbname);
    } 
catch (PDOException $e) 
{
    $error_message = $e->getMessage();
    echo $conn->$error_message;
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
    }
    if($conn->query($sql) === TRUE)
    {
      $stmt = $conn->prepare($query);
      $stmt->execute([$name, $age, $school]);
      echo 'data stored';
    }
    else{
        echo 'insert data fail'. $query."<br>".$conn->$e;
    }
    

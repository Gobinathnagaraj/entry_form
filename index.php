<!doctype html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="page.css">
        <title>Student data entry form</title>
        <script>
        function page() { 
var name = document.forms["form"]["name"];
var age = document.forms["form"]["age"];
var scl = document.forms["form"]["scl"];
if(name.value == "") {
    name.focus();
    windowalert("Name field is required");
    return false;
    }
if(age.value == "") {
    age.focus();
    alert("Age field is required");
    return false;
    }
if(scl.value == "") {
    scl.focus();
    alert("School field is required");
    return false;
    }
return true;
}
</script>
    </head>
    <body>
        <h2 style="text-align: center;">Student data entry form</h2>
    <form name="form" action="index.php" onsubmit="return page()" method="post">
        <label>Name:</label>
        <input id="name" type="text" placeholder="Enter your name" required name="name"><br><br>
        <label>Standard:</label>
        <select name="Standard">
            <option>10th</option>
            <option>12th</option>
        </select><br><br>
        <label>School:</label>
        <input id="scl" type="text" placeholder="Enter your school name" required name="scl"> <br><br>
        <label>Age:</label>
        <input id="age" type="date" placeholder="Enter your age" required name="age"><br><br>
        <label>Gender:</label>
        <select id="gen">
        <option>Male</option>
        <option>Female</option>
        </select>
        <h4 style="text-align: center;">Student mark details</h4>
        <table>
            <tr>
            <th>Subject</th>
            <th>Mark</th>
            </tr>
            <tr>
            <td>Biology</td>
            <td><input name="bio" type="tel" id="bio" required value="75"></td> 
            </tr>
            <tr>
            <td>Computer Science</td>
            <td><input type="tel" name="com" id="bio" value="75" required></td>   
            </tr>
            <tr>
            <td>Mathematics</td>
            <td><input type="tel" id="bio" value="75" name="math" required></td>
            </tr>
            <tr>
            <td>Physics</td>
            <td><input type="tel" id="bio" value="75" name="phy" required></td>
            </tr>
            <tr>
            <td>Chemistry</td>
            <td><input type="tel" id="bio" value="75" name="che" required></td>
            </tr>
        </table>
            <input id="sub" class="btn btn-success" type="submit" name="submit">
            <input id="res" class="btn btn-danger" type="reset" value="reset">
    </form>
    <?php
    echo "<h1>Your input is: </h1>";
    ?>
    </body>
</html>

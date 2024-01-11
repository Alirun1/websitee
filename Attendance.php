
<html>
<head>
    <title>Attendace</title>

    <style>

.bback {
    background-color: white;
    transition: 1s;
    float: left;
    margin-left: 20px;
    margin-top: 20px;
    margin-right: 96%;
    height: 40px;
    width: 90px;
    border-radius: 20px;
    border-style: outset;
    border-width: 3px;
}

.bback:hover {
    border-width: 2px;
    background-color: grey;
    transition: 0.2s;
}
    
    body, html {
  height: 100%;
  margin: 0;
  font-family: Arial, sans-serif;
  background-color: 
        rgb(9, 38, 53);
        background-color: 
        rgb(27, 66, 66);
        background-color: 
        rgb(92, 131, 116);
        background-color: 
        rgb(158, 200, 185);
}

.login-container {
  position: relative;
  width: 100%;
  height: 100%;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}

.login-header {
    margin: 0 50 0 0;
    padding: 5% 0 0 0;
}

.login-header, .login-footer {
  color: #ffffff;
}

.login-form {
  margin: 50 255 0 208;
  background: #FFECD6;
  border-radius: 8px;
  text-align: center;
  width: 300px;
}

.input-group {
  position: relative;
  margin-bottom: 20px;
}

.input-group input {
 margin-top: 10px;
  width: calc(100% - 15px);
  padding: 12px;
  border: 1px solid #000;
  background: transparent;
  color: #000;
  outline: none;
  border-radius: 4px;
}

.input-label {
  position: absolute;
  top: 0;
  left: 20px;
  color: #aaa;
  pointer-events: none;
  transition: all 0.3s;
  transform: translateY(-50%);
}

.input-group input:focus + .input-label,
.input-group input:valid + .input-label {
  top: 18px;
  font-size: 12px;
}

button {
  background-color: #DED0B6;
  color: #607274;
  border: none;
  transition: 0.5s;
  padding: 10px 20px;
  border-radius: 4px;
  cursor: pointer;
  outline: none;
  width: 100%;
}

button:hover {
    transform: scale(0.9);
    border-radius: 15px;
    transition: 0.5s;
    background-color: #88AB8E;
    color: white
}



html {
  background-size: cover;
  background-color: 
        rgb(9, 38, 53);
        background-color: 
        rgb(27, 66, 66);
        background-color: 
        rgb(92, 131, 116);
        background-color: 
        rgb(158, 200, 185);
}

body {
  display: flex;
  justify-content: center;
  text-align: center;
  min-height: 10vh;
  background: transparent;
  background-color: 
        rgb(9, 38, 53);
        background-color: 
        rgb(27, 66, 66);
        background-color: 
        rgb(92, 131, 116);
        background-color: 
        rgb(158, 200, 185);
}

.login-form {
    margin: 0 260 0 150;
  padding: 2em;
  box-shadow: 0 10px 25px;
}

.input-group select {
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    background-color: transparent;
    width: 96%;
    padding: 10px 15px; 
    margin: 8px 0; 
    border: 1px solid #000;
    border-radius: 4px;
    font-family: inherit;
    font-size: 12px;
    cursor: pointer;
    position: relative;
    background: url('path-to-your-dropdown-arrow-image') no-repeat right 10px center;
    background-size: 12px;
}

.input-group {
    position: relative;
}

.input-group select:focus {
    outline: none;
    border-color: #aaa;
}

.input-group select {
    padding-right: 30px;
}



</style>

</head>

<script>   
    function validateForm() {
    let x = document.forms["loginForm"]["name"].value;
    let y = document.forms["loginForm"]["date"].value;
 
    if (x == "") {
        alert("ID must be filled out");
        return false;
    }
 
    if (!/^\d+$/.test(x)) {
        alert("ID must be an integer");
        return false;
    }
 
    if (y == "") {
        alert("Date must be filled out");
        return false;
    }
 
    return true;
}
</script>

<body>

<a class="back" href="indexs.html">
            <button class="bback">Go Back</button>
        </a>

        <form class="login-container" name="loginForm" method="post" action="Attendance.php" onsubmit="return validateForm()">

        <h1 class="login-header"><div class="login-header">SMART SCHOOL</div></h1>

        <div class="login-form" style="margin-top: 50px">

            <form>
                <h3>ATTENDACNE</h3>
                <div class="input-group">
                    <input name="name" type="text">
                    <span class="input-label">Student ID</span>
                </div>
                <div class="input-group">
                    <input name="date" type="date">
                    <span class="input-label">Date</span>
                </div>
                <div class="input-group">
                    <span class="input-label">Status</span>
                    <select id="status" name="status">
                    <option value="present">Present</option>
                    <option value="absent">Absent</option>
                </select>
                </div>
                <button name="submit" type="submit">Submit</button>
            </form>
            <br>
            <br>
        </div>
        </form>

    <?php
$link = mysqli_connect("localhost", "root", "", "smart_school");

if ($link === false) {
    die("ERROR: Could not connect. ");
}

if (isset($_POST['submit'])) {
    $student_id = $_POST['name'];
    $class_date = $_POST['date'];
    $status = $_POST['status'];

    $sql = "INSERT INTO attendance (student_id, class_date, status) VALUES ('$student_id', '$class_date', '$status')";

    if(mysqli_query($link, $sql)){
            echo "<script>alert('Attendance recorded successfully.')</script>";
        } else{
            echo "<script>alert('ERROR: Could not execute query:')</script>";
        }
    };
?>




</body>
</html>
<html>
<head>
    <title>Document</title>

    <style>
    
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
    padding: 5% 0 0 0;
}

.login-header, .login-footer {
  color: #ffffff;
}

.login-form {
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

.login-footer {
  color: #B2A59B;
  text-align: center;
  margin-top: 10px;
}

.login-footer a {
  color: #B2A59B;
  text-decoration: none;
  display: inline-block;
  transition: transform 0.3s ease, margin-left 0.3s ease;
}

.login-footer a:hover {
  transform: scale(1.1);
  margin-left: 3px;
  color: #57a0ee;
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
  align-items: center;
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
  margin: auto;
  padding: 2em;
  box-shadow: 0 10px 25px;
}
</style>

</head>

<script>
document.addEventListener('mousemove', (e) => {
  const light = document.querySelector('.login-container');
  light.style.background = `radial-gradient(circle 50px at ${e.clientX}px ${e.clientY}px,         
        rgb(9, 38, 53),
        rgb(27, 66, 66),
        rgb(92, 131, 116),
        rgb(158, 200, 185))`;
});

function validateForm() {
    let x = document.forms["loginForm"]["name"].value;
    let y = document.forms["loginForm"]["email"].value;
    let z = document.forms["loginForm"]["pass"].value;
 
    if (x == "") {
        alert("Name must be filled out");
        return false;
    }
 
    if (!/^[a-zA-Z\s]+$/.test(x)) {
        alert("Name must contain only letters and spaces");
        return false;
    }
 
    if (y == "") {
        alert("Email must be filled out");
        return false;
    }

    if (!/^\S+@\S+\.\S+$/.test(y)) {
        alert("Invalid email format");
        return false;
    }
 
    if (z == "") {
        alert("Password must be entered");
        return false;
    }

    if (z.length < 8 || z.length > 15) {
        alert("Password must be at least 8 and no more than 15 characters");
        return false;
    }
 
    return true;
}
 
</script>

<body>

<form class="login-container" name="loginForm" method="post" action="regform.php" onsubmit="return validateForm()">
        <h1 class="login-header"><div class="login-header">SMART SCHOOL</div></h1>
        <div class="login-form" style="margin-top: 50px">

            <form>
                <h3>REGISTRATION</h3>
                <div class="input-group">
                    <input name="name" type="text" required>
                    <span class="input-label">Name</span>
                </div>
                <div class="input-group">
                    <input name="email" type="text" required>
                    <span class="input-label">Email</span>
                </div>
                <div class="input-group">
                    <input name="pass" type="password" required>
                    <span class="input-label">Password</span>
                </div>
                <button name="submit" type="submit">Let me in.</button>
            </form>
            <br>
            <br>
            <div><p class="login-footer">Already registered? <a href="index.php">Log In</a></p></div>
        </div>
</form>

<?php

        $link = mysqli_connect("localhost", "root", "", "smart_school");
        if ( $link === false ) {
            die("Connection failed: ");
        }

    if (isset($_POST['submit'])) {

        $name = $_POST['name'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $date = date("Y-m-d H:i:s");

        $sql = "INSERT INTO users (name, email, password, date) VALUES ('$name', '$email','" . md5($pass) . "', '$date')";

        $result = mysqli_query($link, $sql);

            if ($result) {
                echo "<script>alert('You have registered successfully!'); window.location.href = 'indexs.html';</script>";
                } else {
                    echo "<script>alert('Required fields are missing!')</script>";
            }

}

?>

</body>
</html>
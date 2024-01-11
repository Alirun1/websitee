<html>
    <head>



    <style>

        option {
            text-align: center;
        }

        input {
            font-size: 17px;
            text-align: center;
        }

        .input1:hover, .input2:hover, .input3:hover {
            transform: scale(1.2);
            margin-left: 5px;
            border-style: solid;
            border-color: black;
        }

        .submit:hover {
            background-color: #8EAC50;
            transition: 0.5s;
            transform: scale(1.1);
        }

        .bodyy {
            margin: 4% 0 0 0;
            font-size: 25px;
        }

        
        .bback {
            background-color: white;
            transition: 1s;
            float: left;
            margin-top: 20px;
            margin-left: 20px;
            height: 30px;
            width: 75px;
        }

        .bback:hover {
            border-width: 2px;
            background-color: grey;
            transition: 0.2s;
        }

        .privacy {
            color: grey;
        }

        img {
            padding: 9px;
            width: 20px;
        }

        .smart {
            margin: 1%;
            padding: 0 0 0 0;
            font-family: serif;
        }

        .footer-basic {
        margin: 3.2% 0 0 0;
        width: 100%;
        height: 25%;
        padding: 2 10 0 0;
        background-color: rgb(238, 231, 218);
        color: #4b4c4d;
        }

        .footer-basic ul {
        padding: 0;
        list-style:none;
        text-align:center;
        font-size: 18px;
        line-height: 1.6;
        word-spacing: 10px;
        margin-bottom: 0;
        }

        .footer-basic li {
        padding: 0 10px;
        }

        .footer-basic ul a {
        color: inherit;
        text-decoration: none;
        opacity: 0.8;
        }

        ul a:hover {
        transform: scale(1.1);
        color: red;
        opacity: 0.7;
        }

        .social a:hover {
        transform: scale(1.1);
        transition: transform 0.3s;
        }

        .footer-basic .social {
        margin-top: 20px;
        text-align:center;
        padding-bottom: 5px;
        }

        .footer-basic .social > a {
        font-size:23px;
        width:40px;
        height:40px;
        line-height:40px;
        display:inline-block;
        text-align:center;
        border-radius:50%;
        border:1px solid #ccc;
        margin:0 8px;
        color:inherit;
        opacity:0.75;
        }

        .footer-basic .social > a:hover {
        opacity:0.9;
        }

        .footer-basic .copyright {
        background-color: black;
        text-align: center;
        margin-top: 1%;
        font-size: 13px;
        color: #aaa;
        margin-bottom: 0;
        }

        .submit {
        margin-top: 1%;
        transition: 1s;
        border-radius: 20px;
        border-color: black;
        color: white;
        background-color: #A9A9A9;
        font-weight: bold;
        width: 130px;
        height: 40px;
        font-size: 15px;
        }

        body {
        margin: 0;
        text-align: center;
        font-size: larger;

        background-color: 
        rgb(9, 38, 53);
        background-color: 
        rgb(27, 66, 66);
        background-color: 
        rgb(92, 131, 116);
        background-color: 
        rgb(158, 200, 185);

        color: black;
        }

        input {
            border-radius: 20px;
        }

        select {
            border-radius: 20px;
        }

        button {
            margin-right: 96%;
            margin-top: 1%;
            border-radius: 20px;
            border-style: outset;
            border-width: 3px;
        }

        a {
            text-decoration: none;
        }

        h1 {
        }



    </style>

    </head>

    <script>
function validateForm() {
    let x = document.forms["myForm"]["sid"].value;
    let y = document.forms["myForm"]["namee"].value;
    let z = document.forms["myForm"]["email"].value;
 
    if (x == "") {
        alert("ID must be filled out");
        return false;
    }
 
    if (!/^\d+$/.test(x)) {
        alert("ID must be an integer");
        return false;
    }
 
    if (y == "") {
        alert("Name must be filled out");
        return false;
    }
 
    if (!/^[a-zA-Z\s]+$/.test(y)) {
        alert("Name must contain only letters and spaces");
        return false;
    }
 
    if (z == "") {
        alert("Email must be entered");
        return false;
    }
 
    if (!/^\S+@\S+\.\S+$/.test(z)) {
        alert("Invalid email format");
        return false;
    }

    if (x.length < 3) {
        alert("ID must be at least 3 characters");
        return false;
    }
 
    return true;
}
 
</script>

<body>

        <a class="back" href="indexs.html">
            <button class="bback">Go Back</button>
        </a>


    <br>
    <br>

<div class="bodyy">


        <h2>Fill the form below</h2>

        <br>
    
    <form name="myForm" method="post" action="AddStudent.php" onsubmit="return validateForm()">

        <input class="input2" type="text" name="namee" placeholder="Full Name">

        <br>
        <br>

        <input class="input3" type="text" name="email" placeholder="Email">

        <br>
        <br>

        <input class="input3" type="text" name="address" placeholder="Address">

        <br>
        <br>
        
        <label for="parent_id">Select Parent:</label>
        <select class="input4" placeholder="Select" name="parent_id">


        <?php

        $link = mysqli_connect("localhost", "root", "", "smart_school");
        if ( $link === false ) {
            die("Connection failed: ");
        }

        $sql = mysqli_query($link, "SELECT pid, name, email FROM parent");
        while ($row = mysqli_fetch_assoc($sql)) {
        echo 
        "
        <option value = {$row['pid']}>
        {$row['name']} >
        {$row['email']}
        </option>";
        
        }

        ?>

        </select>

        <br>
        <br>

        <label for="class_id">Select Class:</label>
        <select class="input4" placeholder="Select" name="class_id">


        <?php

        $link = mysqli_connect("localhost", "root", "", "smart_school");
        if ( $link === false ) {
            die("Connection failed: ");
        }

        $sql = mysqli_query($link, "SELECT cid, name, field FROM class");
        while ($row = mysqli_fetch_assoc($sql)) {
        echo 
        "<option>Choose here:</option>
        <option value = {$row['cid']}>
        {$row['name']} >
        {$row['field']}
        </option>";
        
        }

        ?>

        </select>

        <br>
        <br>

        <input class="submit" type="submit" name="Submit" value="Submit">

        <br>
        <br>
    
    </form>

</div>

<div>

    <?php

error_reporting(E_ALL);
ini_set('display_errors', 1);



            $link = mysqli_connect("localhost", "root", "", "smart_school");
            if ( $link === false ) {
                die("Connection failed: ");
            }

        if (isset($_POST['Submit'])) {

            $name = $_POST['namee'];
            $email = $_POST['email'];
            $address = $_POST['address'];
            $class_id = $_POST['class_id'];
            $parent_id = $_POST['parent_id'];

            $sql = "INSERT INTO student (name, email, address, cid, pid) VALUES ('$name', '$email', '$address', '$class_id', '$parent_id')";

                if (mysqli_query($link, $sql)) {
                    echo "<script>alert('New record added successfully')</script>";
                    } else {
                        echo "<script>alert('Error adding record')</script>";
                }


        }

    ?>

</div>


    <footer class="footer-basic">
        

            <h3 class="smart">Smart School</h3>

            <div class="social">
                <a href="indexs.html"><img src="home.png" alt=""></a>
                <a href="ViewStudent.php"><img src="list.png" alt=""></a>
                <a href="upstudent.php"><img src="edit.png" alt=""></a>
                <a href="DelStudent.php"><img src="delete.png" alt=""></a>
            </div>

            <div>
                <p class="privacy">All rights and data on this site are reserved. The information is not distributed to third parties. This is stated in our <a href="">Privacy Terms</a>.</p>
            </div>

            <div>
                <p class="copyright">Alirun's Project © 2023</p>
            </div>
    </footer>
</body>
</html>

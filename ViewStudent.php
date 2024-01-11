<html>
    <head>

    <style>

        .smart {
            margin: 0;
            padding: 10 0 0 0;
            font-family: serif;
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

        .footer-basic {
        margin: 26.2% 0 0 0;
        width: 100%;
        height: 27%;
        padding: 0 0 0 0;
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
        font-family: 'Times New Roman', Times, serif;
        background-color: black;
        text-align: center;
        margin-top: 1%;
        font-size: 11px;
        color: #aaa;
        margin-bottom: 0;
        }

        body {
        font-family: 'Times New Roman', Times, serif;
        background-color: #f4f4f4;
        color: #333;
        line-height: 1.6;
        }

        .container {
        max-width: 1100px;
        margin-left: auto;
        margin-right: auto;
        padding: 0 20px;
        }

        #student-list {
        background: white;
        margin: 20px auto;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
        }

        #student-list h2 {
        text-align: center;
        color: #333;
        }

        #student-list table {
        width: 100%;
        border-collapse: collapse;
        margin: 20px 0;
        }

        #student-list table td, #student-list table th {
        padding: 12px;
        border: 1px solid #ddd;
        text-align: left;
        }

        #student-list table th {
        background-color: #f8f8f8;
        }

        #student-list table tr:nth-child(even) {
        background-color: #f2f2f2;
        }

        @media (max-width: 768px) {
        .container {
            padding: 0 10px;
        }
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

</style>

    </head>

<body>

        <a class="back" href="indexs.html">
            <button class="bback">Go Back</button>
        </a>

    <br>
    <br>


    <h2>Students list</h2>

    <div>
<table id="student-list">
<tr>
    <th width="150px">Student ID<br><hr></th>
    <th width="250px">Name<br><hr></th>
    <th width="250px">Email<br><hr></th>
    <th width="250px">Address<br><hr></th>
    <th width="250px">Class<br><hr></th>
    <th width="250px">Parent<br><hr></th>
</tr>




<?php


    $link = mysqli_connect("localhost", "root", "", "smart_school");
    if ( $link === false ) {
        die("Connection failed: ");
    }

    $sql = mysqli_query( $link,"SELECT sid, name, email, address, cid, pid FROM student");
    while ( $row = mysqli_fetch_assoc( $sql ) ) {
    echo "
    <tr>
        <th>#{$row['sid']}</th>
        <th>{$row['name']}</th>
        <th>{$row['email']}</th>
        <th>{$row['address']}</th>
        <th>#{$row['cid']}</th>
        <th>#{$row['pid']}</th>
    </tr>
    ";
    }
?>

</table>
</div>

<footer class="footer-basic">
        
            <h3 class="smart">Smart School</h3>

            <div class="social">
                <a href="indexs.html"><img src="home.png" alt=""></a>
                <a href="AddStudent.php"><img src="bookmark.png" alt=""></a>
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

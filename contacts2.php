<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>

    <style>

.footer-basic .copyright {
        background-color: black;
        text-align: center;
        margin-top: 1%;
        font-size: 13px;
        color: #aaa;
        margin-bottom: 0;
        }

        .footer-basic {
            padding: 2 0 0 0;
        }

.smart {
            margin: 0;
            padding: 0 0 0 0;
            font-family: serif;
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


        .submit:hover {
            background-color: #8EAC50;
            transition: 0.5s;
            transform: scale(1.1);
        }

        .submit {
        margin-left: 37%;
        margin-top: 1%;
        transition: 1s;
        border-radius: 20px;
        border-color: black;
        color: white;
        background-color: #A9A9A9;
        font-weight: bold;
        height: 40px;
        width: 150px;
        font-size: 15px;
        }

        body {
    font-family: 'Times New Roman', Times, serif;
    margin: 0;
    padding: 0;
    background-color: 
        rgb(9, 38, 53);
        background-color: 
        rgb(27, 66, 66);
        background-color: 
        rgb(92, 131, 116);
        background-color: 
        rgb(158, 200, 185);
}

header {
    background-color: rgb(238, 231, 218);
    color: black;
    text-align: center;
    padding: 1rem 0;
}

.contact-form {
    margin: 2rem auto;
    width: 80%;
    max-width: 600px;
}

.contact-form input,
.contact-form textarea {
    width: 100%;
    padding: 0.5rem;
    margin-bottom: 1rem;
    border: 1px solid #ddd;
    border-radius: 4px;
}

.contact-info {
    text-align: center;
    margin: 2rem 0;
}

footer {
    width: 100%;
    background-color: rgb(238, 231, 218);
    color: black;
    text-align: center;
    padding: 10px 0;
}

.social a {
    color: black;
    margin: 0 10px;
    text-decoration: none;
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

    </style>

</head>

<script>

function validateForm() {
    let x = document.forms["MyForm"]["name"].value;
    let y = document.forms["MyForm"]["email"].value;
 
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

    }
 
    return true;

</script>

<body>

<a class="back" href="indexs.html">
            <button class="bback">Go Back</button>
        </a>
        <br>
        <br>
        <br>
        <br>

    <header>
        <h1>Contact Us</h1>
    </header>

    <section class="contact-form">
        <form name="MyForm" action="contacts.php" method="POST" onsubmit="return validateForm()">
            <input type="text" name="name" placeholder="Your Name" required>
            <input type="email" name="email" placeholder="Your Email" required>
            <input type="text" name="subject" placeholder="Subject" required>
            <textarea name="message" placeholder="Your Message" required></textarea>
            <button class="submit" name="submit" type="submit">Send Message</button>
        </form>
    </section>

    <section class="contact-info">
        <p>Old Trafford, UA92</p>
        <p>+44 7884 705214</p>
        <p>alirunkhamidov@gmail.com</p>
    </section>

    <footer class="footer-basic">
    <h3 class="smart">Smart School</h3>

<div class="social">
    <a href="https://t.me/Aliryn"><img src="telegram.png" alt=""></a>
    <a href="https://www.instagram.com/alirun_s"><img src="instagram.png" alt=""></a>
</div>
<div>
                <p class="privacy">All rights and data on this site are reserved. The information is not distributed to third parties. This is stated in our <a href="">Privacy Terms</a>.</p>
            </div>

            <div>
                <p class="copyright">Alirun's Project © 2023</p>
            </div>
    </footer>

    <?php

        if (isset($_POST['submit'])) {
            echo "<script>alert('Message has been sent!');</script>";
        } else {
            echo "<script>alert('Something went wrong :(');</script>";
        }
    ?>
</body>
</html>

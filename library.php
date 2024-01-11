<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Bookstore</title>

    <style>


.bback {
            margin-top: 2%;
            border-radius: 20px;
            border-style: outset;
            border-width: 3px;
            margin-right: 96%;
            color: black;
            background-color: white;
            transition: 1s;
            float: left;
            margin-left: 20px;
            height: 30px;
            width: 100px;
            cursor: pointer;
            text-align: center;
        }

        .bback:hover {
            border-width: 2px;
            background-color: grey;
            transition: 0.2s;
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
  background: rgb(238, 231, 218);
  color: #000; 
  padding: 20px 0;
  text-align: center;
}


nav ul {
  list-style: none;
  padding: 0;
}

nav ul li {
  display: inline; 
  margin-right: 20px;
}

nav a {
  text-decoration: none;
  color: #fff; 
}

nav a:hover {
  color: #ddd; 
}

main {
  padding: 20px;
}

.featured-books h2, .about-us h2 {
  color: #333; 
}


.book {
  background: rgb(238, 231, 218); 
  padding: 15px;
  margin-bottom: 20px; 
  display: inline-block; 
}

.book img {
  max-width: 100%;
  height: auto;
  margin-bottom: 10px; 
}


.butonn {
  background: #5cb85c; 
  color: #fff;
  border: none;
  border-radius: 20px;
  transition: 0.5s;
  padding: 10 10;
  cursor: pointer;

}

.butonn:hover {
transform: scale(1.1);
transition: 0.5s;
  background: #4cae4c; 
}


footer {
  background: rgb(238, 231, 218);
  color: #000;
  text-align: center;
  padding: 10px 0;
  bottom: 0;
  width: 100%;
}

    </style>

</head>
<body>

<a class="back" href="indexs.html">
            <button class="bback">Go Back</button>
        </a>

    <header>
        <h1>Welcome to Smart School's Online Library</h1>
    </header>

    <main>
        <section style="text-align: center; margin-top: 6%;" class="featured-books">
            <h2>Featured Books</h2>
            <!-- Featured books will be listed here -->
            <div class="book">
                <img src="https://m.media-amazon.com/images/I/81yP+dpbmeL._AC_UF1000,1000_QL80_.jpghttps://m.media-amazon.com/images/I/81yP+dpbmeL._AC_UF1000,1000_QL80_.jpg" style="width: 140px; height: 190px;" alt="Book Cover">
                <h3>Steve Jobs</h3>
                <p>Author: John Doe</p>
                <button class="butonn">Open</button>
            </div>
            <div class="book">
                <img src="https://d28hgpri8am2if.cloudfront.net/book_images/onix/cvr9781982181284/elon-musk-9781982181284_hr.jpg" style="width: 140px; height: 190px;" alt="Book Cover">
                <h3>Elon Musk</h3>
                <p>Author: John Doe</p>
                <button class="butonn">Open</button>
            </div>
            <div class="book">
                <img src="https://m.media-amazon.com/images/I/71OamczC99L._AC_UF1000,1000_QL80_.jpg" style="width: 140px; height: 190px;" alt="Book Cover">
                <h3>Warren Buffett</h3>
                <p>Author: John Doe</p>
                <button class="butonn">Open</button>
            </div>
            <div class="book">
                <img src="https://m.media-amazon.com/images/I/61EfifL3e8L._AC_UF894,1000_QL80_.jpg" style="width: 140px; height: 190px;" alt="Book Cover">
                <h3>Jeff Bezzos</h3>
                <p>Author: John Doe</p>
                <button class="butonn">Open</button>
            </div>
        
            
            <!-- Repeat for other books -->
        </section>

        <br>
        <br>
    </main>

    <footer>
        <p>&copy; Made by Alirun Khamidov</p>
    </footer>
    
    <!-- Link to your JavaScript file -->
    <script src="script.js"></script>
</body>
</html>
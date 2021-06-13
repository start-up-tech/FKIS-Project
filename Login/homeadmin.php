<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FKIS Online</title>
    <link rel="stylesheet" href="main.css">
</head>
   <nav><?php include '../styles/sidebaradmin.php'?>FK Inventory System</nav>
</head>
   <style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Style the header */
header {
  background-color:rgba(255, 99, 71, 0.6);
  padding: 30px;
  text-align: center;
  font-size: 35px;
  color: black;
}

/* Container for flexboxes */
section {
  display: -webkit-flex;
  display: flex;
}

/* Style the navigation menu */
b {
  -webkit-flex: 1;
  -ms-flex: 1;
  flex: 1;
  background: blue;
  padding: 20px;
}

/* Style the list inside the menu */
nav ul {
  list-style-type: none;
  padding: 0;
}

/* Style the content */
article {
  -webkit-flex: 3;
  -ms-flex: 3;
  flex: 3;
  background-color: #f1f1f1;
  padding: 10px;
}

/* Style the footer */
footer {
    background-color:hsl(0, 80%, 50%);
  padding: 10px;
  text-align: center;
  color: white;
}

/* Responsive layout - makes the menu and the content (inside the section) sit on top of each other instead of next to each other */
@media (max-width: 600px) {
  section {
    -webkit-flex-direction: column;
    flex-direction: column;
  }
}
</style>
</head>
<body>
<header>
  <h2>Welcome to the Admin page of FKIS System :]</h2>
</header>

<section>
  <b>
    <ul>
      <a href="#"><img src ="images/petakom.jpg"/><br>
    </ul>
</b>
  
  <article>
    <h1>Welcome to Faculty of Computing<h1>
<P>
Faculty of Computing (formerly known as Faculty of Computer Systems & Software Engineering) was established on 16 February 2002 to produce knowledgeable, high skilled and competitive graduates within the sphere of software engineering, system and computer network. At the beginning, the faculty had two fields which are Software Engineering and Networking.
The faculty has also embarked on research and development activities in the area such as information systems, software engineering, computer systems, communication systems, graphic and multimedia technology to produce technologies that are relevant to the needs of industries.
</p>
</article>
</section>

<footer>
  <p><a href="#"><img src ="images/socmed.png"/></p>
</footer>

</body>
</html>
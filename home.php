<?php
session_start();
include("header.html");

if (isset($_SESSION['Name'])) {
    $name = $_SESSION['Name'];
} else {
    $name = "Guest";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/home2.css">
</head>

<body>

<div id="HeroPIC">
    <img id="HeroPic" src="Images/HeroPic.jpg" alt="An image of mountains">
</div>

<main  id="mainContent"> 
    <div id="leftBar">
        <img id="profilePic" src="Images/profilePic.jpg" alt="An image of Hunter Dietzenbach">
        <h1>My Skills</h1> 

        <p>HTML</p> 
        <div class="container"><div class="skill html">90%</div></div>

        <p>PHP</p> 
        <div class="container"><div class="skill php">60%</div></div>

        <p>Python</p> 
        <div class="container"><div class="skill python">80%</div></div>

        <p>Java</p> 
        <div class="container"><div class="skill java">95%</div></div>

        <p>English</p> 
        <div class="container"><div class="skill english">100%</div></div>

        <p>Spanish</p> 
        <div class="container"><div class="skill spanish">60%</div></div>

        <p>Enthusiasm</p> 
        <div class="container"><div class="skill enthusiasm">110%</div></div>
    </div>
    
    <div id="rightBar">
        <p>
            Welcome to my Web Resume <?php echo $name; ?>,<br>
            My name is Hunter Dietzenbach. I am currently a student at Montana State University. GO CATS! 
            I'm currently working at MilTech, a Partnership of Montana State University and the DOD, that looks to increase the transition of new technology to the government. My current role is in developing and maintaining automated test suites for a DoD web system using Selenium and Playwright. 
            <br>   <br>
           I am expecting to graduate in the Spring of 2026 and am currently working on several extracurricular programming projects, including this website, which showcases my skills in HTML, CSS, and PHP. Development began in July 2024, and I plan to continue updating it over time. I first discovered my passion for computer science in my junior year of high school when I took AP Computer Science. I fell in love with the discipline—it perfectly blends creativity with tangible results, making all the hard work feel worthwhile.
            <br>   <br>
            In my free time, I enjoy off-roading in my Jeep, camping, and exploring the outdoors. I also express my creativity through watercolor painting and blacksmithing in my home-built forge. I am proficient in a wide range of programming languages, including Python, Java, C, HTML, CSS, UML, and PHP, as well as digital tools such as Linux, Git, GitHub, Eclipse, Visual Studio Code, and the Adobe Suite.
            Whether you are a potential employer, a friend of mine, or just looking around, I hope you enjoy what you see.
        </p>

        <h2>-----Change Log-----</h2>
        <ul>
            <li>Update 1 (12/21/2024): Added a Projects tab and improved usability heuristics; slightly altered color scheme.</li>
            <li>Update 2 (4/11/2025): Added another project and small QOL improvements.</li>
            <li>Update 3 (9/23/2025): Added an email notification and updated home page.</li>
            <li>Update 4 (12/7/2025): Updated the Confirm button to immediately redirect users to the Home page.</li>
        </ul>

        <p>Thank you for taking a look.</p>
        <a id="signin" href="index.php">sign in.</a>
    </div>
</main>

<?php
include("footer.html");
?>

</body>
</html>

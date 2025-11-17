<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/CMS TASK/includes/helpers.php';
$head = '<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="css/stylesheet.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300..700;1,300..700&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300..700;1,300..700&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <title>Index</title>
</head>
<body>
<div id="wrapper">';

$header = '<header >
    <h1> LeBron James Fan Hub</h1>
    <img src="img/lebron-dunk.jpg" alt="lebron-dunk">
</header>';
$nav = '
<nav>
    <ul>
        <li> <a href="index.php"> Home </a> </li>
        <li> <a href="index.php"> Gallery </a> </li>
        <li> <a href="index.php"> Contact </a> </li>
        <li> <a href="index.php"> Records </a> </li>
        <li> <a href="index.php"> Charity </a> </li>
        
    </ul>
</nav>';

$main1 = '<main> 
        <section class="cards">
        <h3> About LeBron James </h3>
        <p>LeBron James, born in 1984, is one of the greatest basketball players ever, currently playing for the Los Angeles Lakers.</p>
        <p>He’s a 4-time NBA champion and MVP, known as "King James" for his dominance on the court.</p>
        <p>LeBron is the NBA’s all-time leading scorer and a 20-time All-Star.</p>
        <p>Off the court, he’s a successful businessman and philanthropist, making major moves beyond basketball.</p>
        <p>His legacy is built on talent, hard work, and a drive to inspire others worldwide.</p>
        <img src="img/lebron.gif" alt="lebron-dunk">
        </section>
        
        <section class="cards">
        <h3> Awards and Achievements </h3>  
        <p>  🏆 4× NBA Champion — 2012, 2013 (Miami Heat), 2016 (Cavs), 2020 (Lakers)</p>
        <p>  👑 4× NBA MVP — 2009, 2010, 2012, 2013</p>
        <p>  ⭐ 20× NBA All-Star — 2005 to 2024</p>
        <p>  🔥 4× NBA Finals MVP</p>
        <p>  📈 NBA All-Time Leading Scorer — Passed Kareem in 2023</p>
        <p>  🎯 Top 5 All-Time in Assists</p>
        <p>  🛡️ 6× All-Defensive Team</p>
        <p>  📚 19× All-NBA Selections (13× First Team)</p>
        <img src="img/championship.gif" alt="championship">
        </section>
        
        <section class="cards">
        <h3> Career Timeline </h3>
        <p>2003: Drafted 1st overall by the Cleveland Cavaliers straight outta high school.</p>
        <p>2007: Led Cavaliers to their first NBA Finals appearance.</p>
        <p>2010: Shocked the world by joining the Miami Heat in a super team move.</p>
        <p>2012-2013: Won back-to-back NBA championships and Finals MVPs with Miami Heat.</p>
        <p>2014: Returned to Cleveland Cavaliers, promising to bring a title home.</p>
        <p>2016: Delivered on the promise, winning Cleveland’s first NBA championship.</p>
        <p>2018: Signed with the Los Angeles Lakers, starting a new chapter.</p>
        <p>2020: Won NBA championship with Lakers, securing his 4th ring.</p>
        <img src="img/cavs.gif" alt="career">
        </section>
        
        <section class="cards">
        <h3> Off court movements</h3>
         <p>LeBron James is way more than a baller — he’s a major force for good off the court.</p>
        <p>He founded the iPromise School in Akron, aiming to give at-risk kids a real shot at success.</p>
        <p>Through his LeBron James Family Foundation, he supports education, mentorship, and community programs.</p>
        <p>LeBron uses his platform to speak up on social justice issues and empower voices that need to be heard.</p>
        <p>His off-court hustle shows he’s about legacy, not just trophies.</p>
        <img src="img/lebrongif.gif" alt="lebrongif">
        </section>
        
        <section class="formmain1">
        <h3> Feedback Form</h3>
        <form action="?" method="post" enctype="multipart/form-data" class="form2" >
            <label for="fullname">Full Name:</label>
            <input type="text" id="fullname" name="fullname" placeholder="Enter your full name" required>
    
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Enter your email" required>
    
            <label for="feedback">Give us feedback to improve our website:</label>
            <textarea id="feedback" name="feedback" placeholder="Enter your feedback here" required></textarea>
            
             <label for="imageUpload" class="upload-btn">Upload an image (optional)</label>
               <input type="file" id="imageUpload" name="image" accept="image/*" style="display: none;">
            
            <button type="submit" name="submit">Submit</button>
        </form>
        </section>
        <section class="feedbackmain">
        <h2> The Kings Corner </h2>
        </section>';
$main2 = '</section>
</main>';

$footer =  '<footer>
    <section class="footer1">
    <h4> Social Medias </h4>
    <a href="index.php" class="fa fa-facebook"></a>
    <a href="index.php" class="fa fa-twitter"></a>
    <a href="index.php" class="fa fa-instagram"></a>
    <a href="index.php" class="fa fa-github"></a>
    <a href="index.php" class="fa fa-linkedin"></a>
    <a href="index.php" class="fa fa-youtube"></a>
    </section>
    <section class="footer2">
    <h4> Website information</h4>
    <a href="index.php"> Sitemap </a>
    <a href="index.php">Copyright</a>
    <a href="index.php">Back to top</a>
    <a href="index.php">Our Mission</a>
    <a href="index.php"> Contact </a>
     </section>
    <section class="footer3">
    <blockquote>“ Always strive for greatness.” – LeBron James</blockquote>
    <p>LeBron James Fan hub is a fan hub dedicated to celebrating the career, legacy, and influence of LeBron James. All hail the King.</p>
    </section>
</footer>
</div>
</body>
</html>'; ?>
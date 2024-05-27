<?php


$conn = mysqli_connect('localhost','root','','contact_db') or die('connection failed');

if(isset($_POST['send'])){
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $number = mysqli_real_escape_string($conn, $_POST['number']);
    $msg = mysqli_real_escape_string($conn, $_POST['message']);


    $select_message = mysqli_query($conn, "SELECT * FROM `contact_form` WHERE name = '$name' AND email = '$email' AND number = '$number' AND message = '$msg' ") or die('query failed');
    if(mysqli_num_rows($select_message) > 0){
        $message[] = 'message sent already!';
    }else{
        mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, message) VALUES('$name','$email','$number','$msg')") or die('query failed');
        $message[] = 'message sent successfully!';
    }
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>



    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css'>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php

if(isset($$message)){
    foreach($$message as $$message){
        echo '
        <div class="message" data-aos = "zoom-out">
            <span>'.$message.'</span>
            <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
        </div>
        ';
    }
}

?>


<header class='header'>

    <div id='menu-btn' class='fas fa-bars'></div>

    <a href='#home' class='logo'>Portfolio</a>

    <nav class="navbar">
        <a href='#home' class='active'>home</a>
        <a href='#about'>about</a>
        <a href='#services'>services</a>
        <a href='#portfolio'>portfolio</a>
        <a href='#contact'>contact</a>
    </nav>

    <div class="follow">
        <a href='#' class='fab fa-facebook-f'></a>
        <a href='#' class='fab fa-twitter'></a>
        <a href='#' class='fab fa-instagram'></a>
        <a href='#' class='fab fa-linkedin'></a>
        <a href='#' class='fab fa-github'></a>
    </div>

</header>



<section class='home' id="home">
    <div class='image' data-aos = "fade-right">
        <img src='Finalpic1.png',alt="">
    </div>

    <div class='content'>
        <h3 data-aos = "fade-up">Hi, I am Shreyashi Roy</h3>
        <span data-aos = "fade-up"> Web Designer & Developer</span>
        <p data-aos = "fade-up">I am a dedicated Web Designer and Developer with expertise in crafting visually stunning, responsive websites using HTML, CSS, JavaScript, and modern frameworks. I blend creativity with technical skill to deliver exceptional user experiences and stay ahead of industry trends.</p>
        <a data-aos = "fade-up" href='#about' class='btn'>About Me</a>

    </div>
</section>


<section class="about" id="about">

    <h1 class="heading" data-aos = "fade-up"><span>Biography</span></h1>
    
    <div class='biography'>
        <p data-aos = "fade-up">I am dedicated to delivering exceptional user experiences through meticulous attention to detail and a deep understanding of both design and development principles. </p>
    
        <div class='bio'>
            <h3 data-aos = "zoom-in"><span>Name :</span>Shreyashi Roy</h3>
            <h3 data-aos = "zoom-in"><span>Email :</span>rshreyashi800@gmail.com</h3>
            <h3 data-aos = "zoom-in"><span>Address :</span>Kolkata,India</h3>
            <h3 data-aos = "zoom-in"><span>Phone :</span>+123-456-789</h3>
            <h3 data-aos = "zoom-in"><span>Age :</span>21 Years</h3>
            <h3 data-aos = "zoom-in"><span>Experience :</span>1+ Years</h3>
        </div>
        <a href='#' class='btn' data-aos = "fade-up"> Download CV </a>
</div>

<div class="skills" data-aos = "fade-up">
    <h1 class="heading"><span>Skills</span></h1>
    <div class="progress">
        <div class="bar" data-aos = "fade-left"><h3><span>HTML</span><span>96%</span></h3></div>
        <div class="bar" data-aos = "fade-right"><h3><span>CSS</span><span>90%</span></h3></div>
        <div class="bar" data-aos = "fade-left"><h3><span>JavaScript</span><span>66%</span></h3></div>
        <div class="bar" data-aos = "fade-right"><h3><span>PHP</span><span>80%</span></h3></div>
        <div class="bar" data-aos = "fade-left"><h3><span>MYSQL</span><span>90%</span></h3></div>

    </div>
</div>

<div class = "edu-exp">
    <h1 class='heading' data-aos = "fade-up"><span>Education and Projects</span></h1>
    <div class='row'>
        <div class="box-container">
            <h3 class="title" data-aos = "fade-right">Education</h3>
            <div class="box" data-aos = "fade-right">
                <span>(2021 - 2025)</span>
                <h3>B Tech in Artificial Intelligence & Machine Learning</h3>
                <p>Currently pursuing a B.Tech in Artificial Intelligence and Machine Learning (2021-2025), I integrate advanced AI and ML techniques into my web design and development projects.</p>
            </div>
            <div class="box" data-aos = "fade-right">
                <span>(2019 - 2021)</span>
                <h3>ISC - 82%</h3>
                <p>I completed my ISC (Indian School Certificate) from 2019 to 2021, achieving 82%.</p>
            </div>
            <div class="box" data-aos = "fade-right">
                <span>(2019)</span>
                <h3>ICSE - 85%</h3>
                <p>In 2019, I completed my ICSE (Indian Certificate of Secondary Education) with an 85% score.</p>
            </div>
        </div>
        <div class="box-container">
            <h3 class="title" data-aos = "fade-left">Projects</h3>
            <div class="box" data-aos = "fade-left">
                <span>IEEE ICAIIHI 2023</span>
                <h3>Deep Learning Empowered IoT Toothbrush: A Paradigm Shift in Dental Health Monitoring</h3>
                <p>Proposed an innovative solution in dentistry leveraging dental selfies and advanced machine learning algorithms to identify and classify dental conditions. </p>
            </div>
            <div class="box" data-aos = "fade-left">
                <span>2022</span>
                <h3>A User-friendly virtual assistant system </h3>
                <p>Developed a Virtual Assistant system utilizing Python programming language and Microsoft Visual Studio Code IDE.</p>
            </div>
            <div class="box" data-aos = "fade-left">
                <span>IEEE InCACCT 2024</span>
                <h3>Advanced Handwriting Analysis for Trait Assessment and Health Fitness Prediction </h3>
                <p>Developed a pioneering methodology in graphological analysis leveraging advanced technologies like CRNN and specialized CNNs. </p>
            </div>
        </div>
    </div>
</div>
</section>
<section class="services" id="services">
    <h1 class='heading' data-aos = "fade-up"><span>Services</span></h1>
    <div class="box-container">
        <dic class="box" data-aos = "zoom-in">
            <i class="fas fa-code"></i>
            <h3>Web Development</h3>
            <p>I create unique, visually appealing designs tailored to your brand's identity, ensuring a memorable user experience.</p>
        </dic>
        <dic class="box" data-aos = "zoom-in">
            <i class="fas fa-pen"></i>
            <h3>Technical Content Writting</h3>
            <p>I create engaging, informative, and SEO-optimized blog posts that cater to your audience's interests and enhance your online presence</p>
        </dic>
        <dic class="box" data-aos = "zoom-in">
            <i class="fas fa-chart-line"></i>
            <h3>Bootstrap</h3>
            <p>I design and develop unique Bootstrap themes tailored to your brand’s identity, ensuring a cohesive and professional look for your website.</p>
        </dic>
        <dic class="box" data-aos = "zoom-in">
            <i class="fas fa-bullhorn"></i>
            <h3>Wordpress</h3>
            <p>I design and develop bespoke WordPress themes that reflect your brand's unique identity, ensuring a distinct and professional online presence.</p>
        </dic>
        <dic class="box" data-aos = "zoom-in">
            <i class="fas fa-camera"></i>
            <h3>Advanced AI and Data Services</h3>
            <p>Developing deep learning models for complex data analysis and pattern recognition.</p>
        </dic>
        <dic class="box" data-aos = "zoom-in">
            <i class="fas fa-brush"></i>
            <h3>Graphic and Motion Design</h3>
            <p>Creating engaging graphics, illustrations, and animations.</p>
        </dic>
    </div>
</section>
<section class='portfolio' id='portfolio'>
    <h1 class='heading' data-aos = "fade-up"><span> Portfolio </span></h1>

    <div class="box-container">
        <div class="box" data-aos = "zoom-in">
            <img src='https://2.bp.blogspot.com/-U1AjRHtZyMk/UbX4mj4aN3I/AAAAAAAAAFE/fVgiMfyeRns/s1600/monarch-butterfly-2-flower.jpg' alt=''>
            <h3>Web Development</h3>
            <span> (2021 - 2024) </span>
        </div>
        
        <div class="box" data-aos = "zoom-in">
            <img src='https://wallpapercave.com/wp/wp6956340.jpg' alt=''>
            <h3>Content Writting</h3>
            <span> (2021 - 2024) </span>
        </div>
        <div class="box" data-aos = "zoom-in">
            <img src='http://media.nj.com/salem_impact/photo/butterflyjpg-232ff144b34ff690.jpg' alt=''>
            <h3>Full Stack Development</h3>
            <span> (2021 - 2024) </span>
        </div>
        
        <div class="box" data-aos = "zoom-in">
            <img src='https://wallpapercave.com/wp/flrqAm6.jpg' alt=''>
            <h3>AI Automation</h3>
            <span> (2021 - 2024) </span>
        </div>
        <div class="box" data-aos = "zoom-in">
            <img src='https://live.staticflickr.com/173/472268668_0341171563_z.jpg' alt=''>
            <h3>Android App Development</h3>
            <span> (2021 - 2024) </span>
        </div>
        <div class="box" data-aos = "zoom-in">
            <img src='https://butterflyreleasecompany.com/media/ecom/prodlg/iStock_000003156262_450.jpg' alt=''>
            <h3>Data Science and Analytics</h3>
            <span> (2021 - 2024) </span>
        </div>
    </div>
</section>

<section class="contact" id="contact">
    <h1 class="heading" data-aos = "fade-up"><span>Contact Me</span></h1>
    <form action='' method='post'>
        <div class="flex">
            <input data-aos = "fade-right" type='text' name='name' placeholder='enter your name' class='box' required>
            <input data-aos = "fade-left" type='email' name='email' placeholder='enter your email' class='box' required>
        </div>
        <input data-aos = "fade-up" type='number'min='0' name='number' placeholder='enter your number' class='box' required>
        <textarea data-aos = "fade-up" name="message" class='box' required placeholder='enter your message' cols="30" rows="10"></textarea>
        <input type='submit' data-aos = "zoom-in" value='send message' name='send' class='btn'>
    </form>
    <div class="box-container">
        <div class="box" data-aos = "zoom-in">
            <i class="fas fa-phone"></i>
            <h3>phone</h3>
            <p>+123-456-789</p>
        </div>
        <div class="box" data-aos = "zoom-in">
            <i class="fas fa-envelope"></i>
            <h3>email</h3>
            <p>rshreyashi800@gmail.com</p>
        </div>
        <div class="box" data-aos = "zoom-in">
            <i class="fas fa-map-marker-alt"></i>
            <h3>address</h3>
            <p>Kolkata,India - 711106</p>
        </div>
    </div>
</section>
<div class="credit"> &copy; copyright @ <?php echo date('Y');?>by<span>Shreyashi</span> </div>
















<script src="script.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script> 
<script>
    AOS.init({
        duration: 800,
        delay: 300
    })
</script>
</body>
</html>
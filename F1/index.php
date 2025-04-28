<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pua, Charles Michael G.</title>
    <link rel="stylesheet" href="style.css"
</head>
<body>
    
    <?php
    //variable declarations
    $fName = "Charles Michael G. Pua";
    $p1 = "BSIT - Web and Mobile Applications";
    $p2 = "Caloocan, Philippines";
    $p3 = "Email: charlespuasdf@gmail.com";
    $p4 = "Mobile: 09766491851";
    $about = "A dedicated student with a passion for learning new technologies,
          strong problem-solving skills, and a commitment to working and
          striving for growth.";
    $acadbg = "Academic Background";
    $eduleft = "College &nbsp; &nbsp; &nbsp;";
    $eduright = "FEU Institute of Technology <br />
              BSIT - Web and Mobile Applications <br />
              (2023 - Present)";
    $eduleft2 = "Senior High School&nbsp;&nbsp;&nbsp;";
    $eduright2 = "Arellano University - JAS Campus <br />
              ICT Strand <br />
              (2021 - 2023)";
    $eduleft3 = "Junior High School&nbsp;&nbsp;&nbsp;";
    $eduright3 = "Systems Plus Computer College <br />
              (2017 - 2021)";
    $eduleft4 = "Primary School&nbsp;&nbsp;&nbsp;";
    $eduright4 = "Systems Plus Computer College <br />
              (2011 - 2017)";
    $skills = "Skills";
    $skillsList = "<li>&nbsp;&nbsp;HTML, CSS, JavaScript</li>
            <li>&nbsp;&nbsp;C++, Java</li>
            <li>&nbsp;&nbsp;Adobe Photoshop</li>
            <li>&nbsp;&nbsp;Microsoft Office</li>
            <li>&nbsp;&nbsp;Video Editing</li>";
    


    ?>
<div class="resume-wrapper">
      <button onclick="toggleTheme()">Toggle Theme</button>
      <header class="header">
        <div class="profile-pic">
          <img src="pua.jpeg" alt="Profile Picture" />
        </div>
        <div class="profile-details">
          <h1><?= $fName; ?> </h1>
          <p> <?= $p1; ?> </p>
          <p> <?= $p2; ?> </p>
          <p> <?= $p3; ?></p>
          <p> <?= $p4; ?></p>
        </div>
      </header>

      <section class="about">
        <h2>About Me</h2>
        <p>
        <?= $about; ?>
        </p>
      </section>

      <div class="content">
        <section class="education">
          <h2><?= $acadbg; ?></h2>
          <div class="education-entry">
            <div class="edu-left"><i> <?= $eduleft; ?> </i></div>
            <div class="edu-right">
            <?= $eduright; ?>
            </div>
          </div>
          <div class="education-entry">
            <div class="edu-left">
              <i><?= $eduleft2; ?></i>
            </div>
            <div class="edu-right">
            <?= $eduright2; ?>
            </div>
          </div>
          <div class="education-entry">
            <div class="edu-left">
              <i> <?= $eduleft3; ?></i>
            </div>
            <div class="edu-right">
            <?= $eduright3; ?>
            </div>
          </div>
          <div class="education-entry">
            <div class="edu-left"><i> <?= $eduleft4; ?></i></div>
            <div class="edu-right">
            <?= $eduright4; ?>
              
            </div>
          </div>

          <h2><?= $skills; ?></h2>
          <ul class="skills-list">
          <?= $skillsList; ?>
            
          </ul>
        </section>
      </div>

      <script>
        function toggleTheme() {
          document.body.classList.toggle("dark-mode");
        }
      </script>
    </div>
</body>

</html>
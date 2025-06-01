<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pua, Charles Michael G.</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="resume-wrapper">
    <button onclick="toggleTheme()">Toggle Theme</button>

    <?php include('personal_info.php'); ?>
    <?php include('career_objective.php'); ?>
    <?php include('educational_attainment.php'); ?>
    <?php include('skills.php'); ?>
    <?php include('affiliation.php'); ?>
    <?php include('work_experience.php'); ?>
</div>

<script>
    function toggleTheme() {
        document.body.classList.toggle("dark-mode");
    }
</script>
</body>
</html>

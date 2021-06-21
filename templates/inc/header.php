<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job List</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="container">
  <!-- class="header clearfix" -->
      <div class="navigation-holder">
      <h3 class="project-name"> <?php echo SITE_TITLE; ?> </h3>
        <nav class="navigation">
          <ul class="navigation-item">
            <li class="navigation-items" role="presentation"><a href="index.php">Home</a></li>
            <li class="navigation-items" role="presentation"><a href="create.php">Create Listing</a></li>
          </ul>
        </nav>
      </div>
      <?php displayMessage(); ?>
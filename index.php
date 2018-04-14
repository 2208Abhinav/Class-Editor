<?php
  if (isset($_POST['save'])) {
    //SQL query to update table USER CUSTOM STYLES
    //with user entered $_POST['color'] and $_POST['bgcolor'] values
  }
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Class Editor</title>

  <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
  <button class="btn">Button</button>
  <p>Edit CSS class of this button</p>
  <form method="post">
    <label for="col">Color</label>
    <input type="text" id="col" name="color">
    <br>
    <br>
    <label for="bgcpl">Background Color</label>
    <input type="text" id="bgcol" name="bgcolor">
    <br>
    <br>
    <input type="submit" name="save" value="Save Changes">
  </form>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <?php
    //SQL query to get $_POST['color'] and $_POST['bg-color'] values
    //from table USER CUSTOM STYLES

    //for now using POST values
    $user_text_color = $_POST['color'];
    $user_bg_color = $_POST['bgcolor'];

    //script to update DOM with changes
    echo('<script type="text/javascript">');
    echo("$(document).ready(function() {
            var bodyStyles = document.body.style;
            bodyStyles.setProperty('--text-color', '".$user_text_color."');
            bodyStyles.setProperty('--background-color', '".$user_bg_color."');
          });");
    echo('</script>');
  ?>
</body>
</html>

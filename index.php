<!DOCTYPE html>
<html>
<head>
    <title>Welcome to second second devops on AWS</title>
</head>
<body>
    <?php
        require 'Welcome.php';
        $welcome = new Welcome();
    ?>
    <h1><?php echo $welcome->greet() ?></h1>
</body>
</html>

<?php
/**
 * Created by PhpStorm.
 * User: Anthony
 * Date: 28-04-16
 * Time: 15:23
 */
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title><?php echo $data['ressource_title']; ?></title>
</head>
<body>
<?php include('_connect.php'); ?>
<?php include($data['view']); ?>
</body>
</html>
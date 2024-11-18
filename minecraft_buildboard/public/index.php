<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/css/styles.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'> 
    <title>Minecraft BuildBoard</title>
</head>
<body>
    <div>
        <?php include '../src/views/layouts/includes/nav-welcome.php'; ?>

        <div class="parallax-images-wrapper">
            <?php include  '../src/views/layouts/includes/bg-hero.php'; ?>
            <?php include '../src/views/layouts/includes/about-us.php'; ?>
        </div>

        <?php include '../src/views/users/create-login.php'; ?>
        <?php include '../src/views/layouts/includes/footer.php'; ?>
    </div>
</body>
</html>
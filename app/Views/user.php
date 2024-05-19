<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
</head>
<body>
<section>
        <h1>Get Users Data:</h1>
        <ul>
            <li><?php echo $user->getId(); ?></li>
            <li><?php echo $user->getLastName(); ?></li>
            <li><?php echo $user->getFirstName(); ?></li>
            <li><?php echo $user->getAddress(); ?></li>
            <li><?php echo $user->getCity(); ?></li>
            <li><?php echo $user->getIsAdmin(); ?></li>
            <li><?php echo $user->getImage(); ?></li>
        </ul>
        <a href="<?php echo $routes->get('homepage')->getPath(); ?>">Back to homepage</a>
    <section>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" 
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" 
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
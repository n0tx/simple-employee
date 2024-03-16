<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= isset($title) ? $title : 'Welcome to CodeIgniter 4!' ?></title>
</head>
<body style="text-align:center;">
    <?= isset($body) ? $body : '
    <h1>Welcome to CodeIgniter <?= CodeIgniter\CodeIgniter::CI_VERSION ?></h1>
    <h2>The small framework with powerful features</h2>'
    ?>
</body>
</html>

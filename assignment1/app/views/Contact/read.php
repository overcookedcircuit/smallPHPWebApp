<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <title>Message Log</title>
</head>
<header>
    <div class="p-3 text-primary-emphasis">
        <h1>Read Message log page</h1>
    </div>
    <ul>
        <li><a href='/Main/index'>Landing page</a></li>
        <li><a href='/Main/about_us'>About us</a></li>
        <li><a href='/Contact/index'>Contact us</a></li>
        <li><a href='/Contact/read'>See the messages we get</a></li>
    </ul>
</header>
<body>
    <h1>Contact us - messages sent</h1>
    <table>
    <?php
    foreach($data as $index => $message){
        echo "<tr><td>$message->email</td></tr><tr><td>$message->name</td></tr>";
    }
    ?>
    </table>
</body>
</html>
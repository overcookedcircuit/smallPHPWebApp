<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <title><?= $name ?> view</title>
</head>
<header>
    <div class="p-3 text-primary-emphasis">
    <h1>Contact Us</h1>
    </div>
    <ul>
        <li><a href='/Main/index'>Landing page</a></li>
        <li><a href='/Main/about_us'>About us</a></li>
        <li><a href='/Contact/index'>Contact us</a></li>
        <li><a href='/Contact/read'>See the messages we get</a></li>
    </ul>
</header>
<body>
    <h1>Contact us</h1>
    <p>Wanna reach us? Write your email information and message in the following form and then submit.</p>

    
    <div class="col-sm-3">
        <form method='post' action='/Contact/messageSent'>
            <label>Email: <input type="email" placeholder="example@email.com" class="form-control" name="email"></label><br>
            <label>Message: <textarea placeholder="Write your message here." class="form-control" name="name"></textarea></label><br>
            <input type="submit" name="action" value="Send!" class="form-control"/> 
        </form>
    </div>


</body>
</html>
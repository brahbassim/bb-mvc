<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BB-MVC</title>
    <!-- Load CSS -->
    <link rel="stylesheet" href="<?= ASSET; ?>/css/app.css">
    <link rel="stylesheet" href="<?= ASSET; ?>/css/style.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?= URL.'/home/index'; ?>">BB-MVC</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="<?= URL.'/home/index'; ?>">Home</a></li>
                <li><a href="<?= URL.'/contact/index'; ?>">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="page-header">
                <h1>Welcome to the home/index view</h1>
            </div>
            <p>Below is the result of the parameters passed into the URL...</p>
            <p><?= $data['name']; ?></p>
        </div>
    </div>
</div>
<footer class="footer">
    <div class="container">
        <p class="text-muted">BB-MVC.</p>
    </div>
</footer>
</body>
</html>

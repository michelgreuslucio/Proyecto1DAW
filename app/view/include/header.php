<!DOCTYPE html>
<html>
    <head>
        <meta charset = "UTF-8"/>
        <title><?php echo $pageTitle; ?></title>
        <link href='app/view/css/reset.css' rel='stylesheet' type='text/css'>
        <link href='app/view/css/index.css' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Dancing+Script' rel='stylesheet' type='text/css'>
    </head>
        <body>
        <div class="container">
            <ul id="nav">
                <li><a href="#">Home</a></li>
                
                <li><a href="#s1">Menu 1</a>
                    <span id="s1"></span>
                    <ul class="subs">
                        <li><a href="#">Header a</a>
                            <ul>
                                <li><a href="#">Submenu x</a></li>
                                <li><a href="#">Submenu y</a></li>
                                <li><a href="#">Submenu z</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Header b</a>
                            <ul>
                                <li><a href="#">Submenu x</a></li>
                                <li><a href="#">Submenu y</a></li>
                                <li><a href="#">Submenu z</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="active"><a href="#s2">Menu 2</a>
                    <span id="s2"></span>
                    <ul class="subs">
                        <li><a href="#">Header c</a>
                            <ul>
                                <li><a href="#">Submenu x</a></li>
                                <li><a href="#">Submenu y</a></li>
                                <li><a href="#">Submenu z</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Header d</a>
                            <ul>
                                <li><a href="#">Submenu x</a></li>
                                <li><a href="#">Submenu y</a></li>
                                <li><a href="#">Submenu z</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="#">Menu 3</a></li>
                <li><a href="#">Menu 4</a></li>
                <li><a href="#">Menu 5</a></li>
            </ul>
        </div>
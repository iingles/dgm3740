<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    
    <link rel="stylesheet" type="text/css" href="./slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="./slick/slick-theme.css"/>
    
    <link rel="stylesheet" href="css/main.css" />
    <title><?php echo $title;?></title>
</head>
    <body>
        <header class="main-header">
            <div class="container">
                <figure class="logo">
                    <img
                    class="main-logo"
                    src="img/logo3x.png"
                    srcset="
                    img/logo/logo1x.png 1x,
                    img/logo/logo2x.png 2x,
                    img/logo/logo3x.png 3x"
                    alt="Logo for Cabot Cruises"
                    />
                </figure> 
                <h1 class="header-phone"><a href="tel:1-800-555-1234">1-800-555-1234</a></h1>
            </div>
        </header>

        <nav class="main-nav" >
            <div class="container">
                <button id="mobileMenu">
                    <i class="fas fa-bars"></i>
                    <i class="fas fa-times"></i>
                </button>
                <ul class="main-menu" id="topNav">
                    <li class="top-link"><a href="/index.php">home</a></li>
                    <li class="top-link"><a href="/cruises.php">cruises</a></li>
                    <li class="top-link">
                        <a href="#">agents</a>
                        <ul class="sub-menu">
                            <li><a href="/agent-1.php">Agent 1</a></li>
                            <li><a href="/agent-2.php">Agent 2</a></li>
                        </ul>
                    </li>
                    <li class="top-link"><a href="/book">book</a></li>
                </ul>
                <div class="main-search">
                    <form id="searchForm">
                        <input type="search" placeholder="search.." name="mainSearch">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
                </div>
            </div>
        </nav>
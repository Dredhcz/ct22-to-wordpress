<!DOCTYPE html>
<html lang="en">
<head>
    <?php wp_head();?>
    <link rel="stylesheet" href="styles/queries.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <header class="header">
        <nav class="header__nav-menu">
            <span class="header__nav-menu--ct">ČT</span>
            <button class="header__nav-menu--menu-button"><svg class="header__nav-menu--menu-button--svg" aria-hidden="true" fill="none" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path clip-rule="evenodd" d="M19 17a2 2 0 110 4 2 2 0 010-4zm-7 0a2 2 0 110 4 2 2 0 010-4zm-7 0a2 2 0 110 4 2 2 0 010-4zm14-7a2 2 0 110 4 2 2 0 010-4zm-7 0a2 2 0 110 4 2 2 0 010-4zm-7 0a2 2 0 110 4 2 2 0 010-4zm14-7a2 2 0 110 4 2 2 0 010-4zm-7 0a2 2 0 110 4 2 2 0 010-4zM5 3a2 2 0 110 4 2 2 0 010-4z" fill="white" fill-rule="evenodd"></path></svg></button>
            <button class="header__nav-menu--magnifying-glass"><svg class="header__nav-menu--magnifying-glass--svg" aria-hidden="true" fill="none" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path clip-rule="evenodd" d="M9.5 2a7.5 7.5 0 015.83 12.22c.404-.066.83.034 1.17.302l.115.102 4.43 4.3a1.5 1.5 0 01-1.974 2.254l-.116-.102-4.43-4.3a1.498 1.498 0 01-.43-1.348A7.5 7.5 0 119.5 2zm0 1.8a5.7 5.7 0 100 11.4 5.7 5.7 0 000-11.4z" fill="white" fill-rule="evenodd"></path></svg></button>
                            <input class="header__nav-menu--input" placeholder="Hledat..." type="text">

                <button><img class="header__nav-menu--logo" aria-hidden="true" alt="logo čt 24" class="ctg-header__global-menu-logo" src="https://ctfs.ceskatelevize.cz/static/channels/ct24_onDark.svg"></button>
            
            <div class="header__nav-menu__tv-menu">
                <div class="header__nav-menu__tv-menu__logos-container">
                    <ul class="header__nav-menu__tv-menu__ul">
                        
                        <li class="header__nav-menu__tv-menu__ul--element"><button><img class="header__nav-menu__tv-menu__ul--image" alt="Česká televize" src="https://ctfs.ceskatelevize.cz/static/channels/Ceska_televize_logo.svg"></button></li>
                        <div class="header__nav-menu__tv-menu__ul--container">
                            <li class="header__nav-menu__tv-menu__ul--down-element"><button><img class="header__nav-menu__tv-menu__ul--down-element--image" alt="iVysílání" src="https://ctfs.ceskatelevize.cz/static/channels/ivysilani.svg"></button></li>
                            <li class="header__nav-menu__tv-menu__ul--down-element"><button><img class="header__nav-menu__tv-menu__ul--down-element--image" alt="ČT24" src="https://ctfs.ceskatelevize.cz/static/channels/ct24.svg"></button></li>
                            <li class="header__nav-menu__tv-menu__ul--down-element"><button><img class="header__nav-menu__tv-menu__ul--down-element--image" alt="ČT Déčko" src="https://ctfs.ceskatelevize.cz/static/channels/ctd.svg"></button></li>
                            <li class="header__nav-menu__tv-menu__ul--down-element"><button><img class="header__nav-menu__tv-menu__ul--down-element--image" alt="ČT Sport" src="https://ctfs.ceskatelevize.cz/static/channels/ctsport.svg"></button></li>
                            <li class="header__nav-menu__tv-menu__ul--down-element"><button><img class="header__nav-menu__tv-menu__ul--down-element--image" alt="ČT art" src="https://ctfs.ceskatelevize.cz/static/channels/ctart.svg"></button></li>
                            <li class="header__nav-menu__tv-menu__ul--down-element"><button><img class="header__nav-menu__tv-menu__ul--down-element--image" alt="ČT edu" src="https://ctfs.ceskatelevize.cz/static/channels/edu.svg"></button></li>
                        </div>
                    </ul>
                </div>
                <div class="header__nav-menu__tv-menu__live-and-program">
                    <span class="header__nav-menu__tv-menu__live-and-program--live-span"><a class="header__nav-menu__tv-menu__live-and-program--live-link" href="#">Živé vysílání</a></span>
                    <span class="header__nav-menu__tv-menu__live-and-program--program-span"><a class="header__nav-menu__tv-menu__live-and-program--program-link" href="#">TV program</a></span>
                </div>
                
                <div class="header__nav-menu__tv-menu__list-of-links">
                    <ul class="header__nav-menu__tv-menu__list-of-links--ul">
                        <li class="header__nav-menu__tv-menu__list-of-links--ul--element"><a class="header__nav-menu__tv-menu__list-of-links--ul--link" href="#">Počasí</a></li>
                        <li class="header__nav-menu__tv-menu__list-of-links--ul--element"><a class="header__nav-menu__tv-menu__list-of-links--ul--link" href="#">Teletext</a></li>
                        <li class="header__nav-menu__tv-menu__list-of-links--ul--element"><a class="header__nav-menu__tv-menu__list-of-links--ul--link" href="#">E-shop</a></li>
                        <li class="header__nav-menu__tv-menu__list-of-links--ul--element"><a class="header__nav-menu__tv-menu__list-of-links--ul--link" href="#">Vše o ČT</a></li>
                        <li class="header__nav-menu__tv-menu__list-of-links--ul--element"><a class="header__nav-menu__tv-menu__list-of-links--ul--link" href="#">TV poplatky</a></li>
                        <li class="header__nav-menu__tv-menu__list-of-links--ul--element"><a class="header__nav-menu__tv-menu__list-of-links--ul--link" href="#">Kontakty</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="header__rubrics-menu">
            <?php 
                wp_nav_menu(
                    array(
                        "menu" => "Main Menu",
                        "container" => "",
                        "theme_location" => "Main Menu"
                    )
                );
            ?>
            <ul class="header__rubrics-menu--ul">
                <li class="header__rubrics-menu--element"><a class="header__rubrics-menu--element-link" href="#">Hlavní události</a></li>
                <li class="header__rubrics-menu--element"><a class="header__rubrics-menu--element-link" href="#">Ukrajina</a></li>
                <li class="header__rubrics-menu--element"><a class="header__rubrics-menu--element-link" href="#">Americké volby</a></li>
                <li class="header__rubrics-menu--element"><a class="header__rubrics-menu--element-link" href="#">Domácí</a></li>
                <li class="header__rubrics-menu--element"><a class="header__rubrics-menu--element-link" href="#">Svět</a></li>
                <li class="header__rubrics-menu--element"><a class="header__rubrics-menu--element-link" href="#">Regiony</a></li>
                <li class="header__rubrics-menu--element"><a class="header__rubrics-menu--element-link" href="#">Ekonomika</a></li>
                <li class="header__rubrics-menu--element"><a class="header__rubrics-menu--element-link" href="#">Kultura</a></li>
                <li class="header__rubrics-menu--element"><a class="header__rubrics-menu--element-link" href="#">Věda</a></li>
                <li class="header__rubrics-menu--element"><a class="header__rubrics-menu--element-link" href="#">Počasí</a></li>
                <li class="header__rubrics-menu--element"><a class="header__rubrics-menu--element-link" href="#">Média</a></li>
                <li class="header__rubrics-menu--element"><a class="header__rubrics-menu--element-link" href="#">Podcasty</a></li>
                <li class="header__rubrics-menu--element"><a class="header__rubrics-menu--element-link" href="#">Obrazem</a></li>
                <li class="header__rubrics-menu--element"><a class="header__rubrics-menu--element-link" href="#">Archiv krátkých zpráv</a></li>
                <li class="header__rubrics-menu--element"><a class="header__rubrics-menu--element-link" href="#">Komiks</a></li>
                <li class="header__rubrics-menu--element"><a class="header__rubrics-menu--element-link" href="#">Britské volby</a></li>
            </ul>
        </div>
        <div class="header__subnav-menu">
            <div class="header__subnav-menu__rubrics">    
                
                <button class="header__subnav-menu--burger-button"><svg class="header__subnav-menu--burger-button" fill="none" height="24" viewBox="0 0 24 25" width="24" xmlns="http://www.w3.org/2000/svg"><path clip-rule="evenodd" d="M20.4 16.5a.6.6 0 01.6.6v.8a.6.6 0 01-.6.6H3.6a.6.6 0 01-.6-.6v-.8a.6.6 0 01.6-.6h16.8zm0-5a.6.6 0 01.6.6v.8a.6.6 0 01-.6.6H3.6a.6.6 0 01-.6-.6v-.8a.6.6 0 01.6-.6h16.8zm0-5a.6.6 0 01.6.6v.8a.6.6 0 01-.6.6H3.6a.6.6 0 01-.6-.6v-.8a.6.6 0 01.6-.6h16.8z" fill="currentColor" fill-rule="evenodd"></path></svg></button>
                <span class="header__subnav-menu__rubrics--span">Rubriky</span>
            </div>
            <div class="header__subnav-menu__rubrics__desktop">
                <ul class="header__subnav-menu__rubrics__desktop--ul">
                    <li class="header__rubrics-menu__desktop--element"><a class="header__rubrics-menu__desktop--element-link" href="#">Hlavní události</a></li>
                    <li class="header__rubrics-menu__desktop--element"><a class="header__rubrics-menu__desktop--element-link" href="#">Ukrajina</a></li>
                    <li class="header__rubrics-menu__desktop--element"><a class="header__rubrics-menu__desktop--element-link" href="#">Americké volby</a></li>
                    <li class="header__rubrics-menu__desktop--element"><a class="header__rubrics-menu__desktop--element-link" href="#">Domácí</a></li>
                    <li class="header__rubrics-menu__desktop--element"><a class="header__rubrics-menu__desktop--element-link" href="#">Svět</a></li>
                    <li class="header__rubrics-menu__desktop--element"><a class="header__rubrics-menu__desktop--element-link" href="#">Regiony</a></li>
                    <li class="header__rubrics-menu__desktop--element"><a class="header__rubrics-menu__desktop--element-link" href="#">Ekonomika</a></li>
                    <li class="header__rubrics-menu__desktop--element"><a class="header__rubrics-menu__desktop--element-link" href="#">Kultura</a></li>
                    <li class="header__rubrics-menu__desktop--element"><a class="header__rubrics-menu__desktop--element-link" href="#">Věda</a></li>
                    <li class="header__rubrics-menu__desktop--element"><a class="header__rubrics-menu__desktop--element-link" href="#">Počasí</a></li>
                    
                        
                   <button class="header__subnav-menu__rubrics__desktop--next">Další...</button>

                    
                </ul>
                <ul class="header__subnav-menu__rubrics__desktop__menu--ul">

                    <li class="header__rubrics-menu__desktop__menu--element"><a class="header__rubrics-menu__desktop--element-link" href="#">Média</a></li>
                    <li class="header__rubrics-menu__desktop__menu--element"><a class="header__rubrics-menu__desktop--element-link" href="#">Podcasty</a></li>
                    <li class="header__rubrics-menu__desktop__menu--element"><a class="header__rubrics-menu__desktop--element-link" href="#">Obrazem</a></li>
                    <li class="header__rubrics-menu__desktop__menu--element"><a class="header__rubrics-menu__desktop--element-link" href="#">Archiv krátkých zpráv</a></li>
                    <li class="header__rubrics-menu__desktop__menu--element"><a class="header__rubrics-menu__desktop--element-link" href="#">Komiks</a></li>
                    <li class="header__rubrics-menu__desktop__menu--element"><a class="header__rubrics-menu__desktop--element-link" href="#">Britské volby</a></li>
                </ul>
               
                </div>

                <div class="header__subnav-menu--desktop__sport-and-live-wrapper">
                <div class="header__subnav-menu__desktop__sport">
                    <button><span class="header__subnav-menu__desktop__sport--span">Sport</span></button>
                </div>
               <div class="header__subnav-menu__desktop__live">
                    <button class="header__subnav-menu__desktop--button">
                        <svg class="header__subnav-menu__desktop--button--red-dot" fill="none" height="8" viewBox="0 0 8 8" width="8" xmlns="http://www.w3.org/2000/svg"><circle cx="4" cy="4" fill="red" r="4"></circle></svg>
                        <span class="header__subnav-menu__desktop--bottun--live header__subnav-menu--bottun--live">ŽIVÉ&nbsp;VYSÍLÁNÍ</span>
                    </button>
                </div>
                </div>
                 
            
            <div class="header__subnav-menu__sport">
                <button><span class="header__subnav-menu__sport--span">Sport</span></button>
            </div>
            <div class="header__subnav-menu__live">
                <button class="header__subnav-menu--button">
                    <svg class="header__subnav-menu--button--red-dot" fill="none" height="8" viewBox="0 0 8 8" width="8" xmlns="http://www.w3.org/2000/svg"><circle cx="4" cy="4" fill="red" r="4"></circle></svg>
                    <span class="header__subnav-menu--bottun--live">ŽIVĚ</span>
                </button>
            </div>
            
        </div>
        
        
    </header>
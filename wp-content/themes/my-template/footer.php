<footer class="footer">
        <div class="footer-container">
            <a class="footer-container--ct-logo-link" href="https://www.ceskatelevize.cz/" title="Úvodní stránka České televize"><img class="footer-container--ct-logo" alt="logo ČT" aria-hidden="true" src="https://ctfs.ceskatelevize.cz/static/channels/Ceska_televize_logo.svg"></a>
              <div class="footer-container__contact">
                <span class="footer-container__contact--audience-center">Divácké centrum</span>
                <span class="footer-container__contact--oppening-hours">Každý všední den: 7:30-17:30 hodin</span>
                <div class="footer-container__contact__phone">
                    <img class="footer-container__contact--phone-image" alt="telefon" height="20" src="https://ctfs.ceskatelevize.cz/static/icons/phone.svg">
                    <span class="footer-container__contact--phone-number">+420 261 136 113</span>
                </div>
                <div class="footer-container__contact__email">
                    <img class="footer-container__contact--email-image" alt="dopis" height="20" src="https://ctfs.ceskatelevize.cz/static/icons/mail.svg">
                    <span class="footer-container__contact--email">info@ceskatelevize.cz</span>
                </div>
              </div>
              <?php
                wp_nav_menu(
                    array(
                        'menu' => 'Footer Menu',
                        'container' => '',
                        'theme_location' => 'Footer Menu',
                        'items_wrap' => '<ul class="footer-container__link-list">%3$s</ul>'
                    )
                );
            ?>
            
            <div class="footer-container__social-sites">
                <span class="footer-container__social-sites--follow-us">Česká televize na sociálních sítích:</span>
                <a class="footer-container__social-sites--link" href="#">
                    <img class="footer-container__social-sites--logo" alt="Instagram logo" src="https://ctfs.ceskatelevize.cz/static/icons/instagram.svg">
                    <span class="footer-container__social-sites--title">Instagram</span>
                </a>
                <a class="footer-container__social-sites--link" href="#">
                    <img class="footer-container__social-sites--logo" alt="Facebook logo" src="https://ctfs.ceskatelevize.cz/static/icons/facebook.svg">
                    <span class="footer-container__social-sites--title">Facebook</span>
                </a>
                <a class="footer-container__social-sites--link" href="#">
                    <img class="footer-container__social-sites--logo" alt="Youtube logo" src="https://ctfs.ceskatelevize.cz/static/icons/youtube.svg">
                    <span class="footer-container__social-sites--title">Youtube</span>
                </a>
                <a class="footer-container__social-sites--link" href="#">
                    <img class="footer-container__social-sites--logo" alt="X logo" src="https://ctfs.ceskatelevize.cz/static/icons/x.svg">
                    <span class="footer-container__social-sites--title">(X) Twitter</span>
                </a>
                <a class="footer-container__social-sites--link" href="#">
                    <img class="footer-container__social-sites--logo" alt="Threads logo" class="iconNoHover-0-2-27" src="https://ctfs.ceskatelevize.cz/static/icons/threads.svg">
                    <span class="footer-container__social-sites--title">Threads</span>
                </a>
            </div>
            <div class="footer-container__subfooter">
                <span class="footer-container__subfooter--copyright">© Česká televize</span>
                <div class="footer-container__subfooter-container">
                    <a href="#" class="footer-container__subfooter--english-version">English version</a>
                    <span class="footer-container__subfooter--dot">•</span>
                    <a href="#" class="footer-container__subfooter--privacy">Ochrana soukromí</a>
                </div>
            </div>
            <div class="footer-container__ct-logos">
                <ul class="footer-container__ct-logos--ul">
                    <li class="footer-container__ct-logos--logo"><button><img class="footer-container__ct-logos--logo--image" alt="ČT24" src="https://ctfs.ceskatelevize.cz/static/channels/ct24.svg"></button></li>
                    <li class="footer-container__ct-logos--logo"><button><img class="footer-container__ct-logos--logo--image" alt="ČT Sport" src="https://ctfs.ceskatelevize.cz/static/channels/ctsport.svg"></button></li>
                    <li class="footer-container__ct-logos--logo"><button><img class="footer-container__ct-logos--logo--image" alt="iVysílání" src="https://ctfs.ceskatelevize.cz/static/channels/ivysilani.svg"></button></li>
                    <li class="footer-container__ct-logos--logo"><button><img class="footer-container__ct-logos--logo--image" alt="ČT Déčko" src="https://ctfs.ceskatelevize.cz/static/channels/ctd.svg"></button></li>
                    <li class="footer-container__ct-logos--logo"><button><img class="footer-container__ct-logos--logo--image" alt="ČT art" src="https://ctfs.ceskatelevize.cz/static/channels/ctart.svg"></button></li>
                    <li class="footer-container__ct-logos--logo"><button><img class="footer-container__ct-logos--logo--image" alt="ČT edu" src="https://ctfs.ceskatelevize.cz/static/channels/edu.svg"></button></li>
                </ul>
            </div>
        </div>
    </footer>
    <?php wp_footer();?>
</body>
</html>
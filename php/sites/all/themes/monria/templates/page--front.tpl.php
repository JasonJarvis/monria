<div id="task_bar" >
    <a href="https://www.facebook.com/monriathegame" target="_blank" alt="Monria Facebook" title="Monria Facebook"> <div id="facebook"></div></a>
    <a href="https://www.youtube.com/monriathegame" target="_blank" alt="Monria Youtube" title="Monria Youtube"><div id="youtube"></div></a>
    <a href="https://twitter.com/monriathegame" target="_blank" alt="Monria Twitter" titlle ="Monria Twitter"><div id="twitter"></div></a>
</div>

<div class="gamecontent_reposition">

    <div class="navigation">

        <div class="bar">
            <a class="home" href=""></a>
            <a class="download" href=""></a>
            <a class="forum" href=""></a>
            <a class="login" href=""></a>
            <a class="guide" href=""></a>
            <a class="media" href=""></a>
            <a class="about" href=""></a>
        </div>

    </div>
    <div class="bg1">
        <div id="flashContent" >
            <div id="flashBox">
                <a href="register/?ccode=affimoon130401" class="top_register"></a>
                <a href="download/?ccode=affimoon130401" class="top_download"></a>

                <span class="card_left_span">Screenshots</span>
                <span class="card_middle_span">Video</span>
                <span class="card_right_span">Story</span>

                <a href="download/?ccode=affimoon130401" class="card_left">

                </a>
                <a href="download/?ccode=affimoon130401" class="card_middle">

                </a>
                <a href="download/?ccode=affimoon130401" class="card_right">

                </a>

                <div id="video_container">
                    <video id="flashObj" class="video-background" loop="loop" webkit-playsinline="true"
                           src=""
                           style="opacity: 1;"></video>
                </div>
            </div>
        </div>

    </div>
    <div class="bg2"></div>
    <div class="bg3">

    </div>
    <div class="content">

        <div class="reposition monria">
            <h1>Monria</h1>

            <?php print render($page['news']); ?>

            <div class="ship_content">
                <img src="<?php echo path_to_theme() ;?>img/text.png">
                <a href="#"></a>

            </div>
            <div class="btns_content">
                <a href="#" class="btn_faq"></a>
                <a href="#" class="btn_forum"></a>
            </div>

        </div>

        <div id="footer"><img width="1000" height="1" style="margin-bottom: 20px" src="<?php echo path_to_theme() ;?>/img/logos/footergradient.jpg"
                              alt="">
            <a target="_blank" href="http://www.mindark.com"><img width="115" height="35" style="display:inline;"
                                                                  src="<?php echo path_to_theme() ;?>/img/logos/mindark_footer_logo.jpg" alt=""></a>
            <img width="155" height="35" style="display:inline;" src="<?php echo path_to_theme() ;?>/img/logos/eu_footer_logo.jpg" alt=""><br>
            <br>
            <span id="legal-links"><a target="_blank" href="http://legal.entropiauniverse.com">Rules and Policies</a> | <a
                    href="/legal/">Legal Notice</a></span>

            <p>Monria is trademark or registered trademark of Entropa. All other trademarks are the property of their
                respective owners.<br>
                2013 Monria. All rights reserved.</p>
        </div>

    </div>
</div>
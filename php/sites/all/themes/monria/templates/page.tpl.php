<div class="gamecontent_reposition_inner">

    <div class="navigation">

        <div class="bar">
        <?php include('menu.php'); ?>
        </div>

    </div>
    <div class="bg1">
        <div id="flashContent">
            <div id="flashBox">
                <?php include('boxes.php'); ?>
            </div>
        </div>

    </div>

    <div class="content">
        <div id="repeater-offset"></div>
        <div class="reposition monria">
            <?php print render($page['content']); ?>
        </div>
    </div>

    <div class="bottom">
        <div id="site_map">
            <div class="footer_list_container">
                <ul>
                    <li><span> Main </span></li>
                    <li><a href="<?php echo base_path(); ?>">Home</a></li>
                    <li><a href="<?php echo base_path(); ?>news">News</a></li>
                    <li><a href="http://monria.com/forum">Forum</a></li>
                    <li><a href="<?php echo base_path(); ?>download">Download</a></li>
                </ul>
            </div>
            <div class="footer_list_container">
                <ul>
                    <li><span> Media</span></li>
                    <li><a href="<?php echo base_path(); ?>screenshot">Screenshots</a></li>
                    <li><a href="<?php echo base_path(); ?>video">Videos</a></li>
                    <li><a href="<?php echo base_path(); ?>story">Story</a></li>
                </ul>
            </div>
            <div class="footer_list_container">
                <ul>
                    <li><span> Reach Us</span></li>
                    <li><a href="<?php echo base_path(); ?>about">About</a></li>
                    <li><a href="<?php echo base_path(); ?>">Contact</a></li>
                    <li><a href="<?php echo base_path(); ?>">Guide</a></li>
                    <li><a href="<?php echo base_path(); ?>">Support</a></li>
                </ul>
            </div>
            <div class="footer_list_container">
                <ul>
                    <li><span> Social</span></li>
                    <li><a href="https://www.facebook.com/monriathegame">Facebook</a></li>
                    <li><a href="https://twitter.com/monriathegame">Twitter</a></li>
                    <li><a href="https://www.youtube.com/monriathegame">Youtube</a></li>
                </ul>
            </div>
            <div class="blank"></div>
        </div>
        <div id="footer"><img width="1000" height="1" style="margin-bottom: 20px"
                              src="<?php echo path_to_theme(); ?>/img/logos/footergradient.jpg"
                              alt="">
            <a target="_blank" href="http://www.mindark.com"><img width="115" height="35" style="display:inline;"
                                                                  src="<?php echo path_to_theme(); ?>/img/logos/mindark_footer_logo.jpg"
                                                                  alt=""></a>
            <img width="155" height="35" style="display:inline;"
                 src="<?php echo path_to_theme(); ?>/img/logos/eu_footer_logo.jpg" alt=""><br>
            <br>
            <span id="legal-links"><a target="_blank" href="http://legal.entropiauniverse.com">Rules and Policies</a> | <a
                    href="/legal/">Legal Notice</a></span>

            <p>Monria is trademark or registered trademark of Entropia. All other trademarks are the property of their
                respective owners.<br>
                2013 Monria. All rights reserved.</p>
        </div>
    </div>
</div>
<div id="bg" style="display:none"></div>
<div id="lightbox-monria" style="display:none">
    <div id="container">
        <img src="">

        <div id="inner"></div>
        <div id="m-top"></div>
        <div id="arrow-left"></div>
        <div id="arrow-right"></div>
        <div id="m-top-bg"></div>
        <div id="m-bottom-bg"></div>
        <div id="m-right"></div>
        <div id="m-bottom"></div>
        <div id="m-left"></div>
        <div id="cr-top-left"></div>
        <div id="cr-top-right"></div>
        <div id="cr-bottom-left"></div>
        <div id="cr-bottom-right"></div>
        <div id="close-lightbox"></div>
    </div>

</div>

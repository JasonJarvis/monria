<script src="<?php print $base_path . path_to_theme(); ?>/js/video.js"></script>
<style>
    #site_map
    {
        left:129px ;
        top: 155px ;
    }
</style>
<div id="task_bar" >
    <a href="https://www.facebook.com/monriathegame" target="_blank" alt="Monria Facebook" title="Monria Facebook"> <div id="facebook"></div></a>
    <a href="https://www.youtube.com/monriathegame" target="_blank" alt="Monria Youtube" title="Monria Youtube"><div id="youtube"></div></a>
    <a href="https://twitter.com/monriathegame" target="_blank" alt="Monria Twitter" title ="Monria Twitter"><div id="twitter"></div></a>
</div>

<div class="gamecontent_reposition">

    <div class="navigation">
        <div class="bar">
            <?php include('menues/menu.php'); ?>
        </div>
    </div>
    <div class="bg1">
        <div id="flashContent" >
            <div id="flashBox">

                <a href="<?php echo base_path(); ?>play" class="top_play"></a>
                <div class="top_play_text"></div>
                <?php include('menues/boxes.php'); ?>

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
            <a href="<?php echo base_path();?>news" class="news_link"></a>
            <?php print render($page['news']); ?>

            <div class="ship_content">
                <img src="<?php echo path_to_theme() ;?>/img/text.png">
                <a href="#"></a>

            </div>
            <div class="btns_content">
                <a href="<?php echo base_path();?>media" class="btn_faq"></a>
                <a href="<?php echo base_path();?>forum" class="btn_forum"></a>
            </div>

        </div>
        <div class="bottom">
            <?php include('menues/sitemap.php'); ?>
            <?php include('menues/copyright.php'); ?>
        </div>
    </div>
</div>

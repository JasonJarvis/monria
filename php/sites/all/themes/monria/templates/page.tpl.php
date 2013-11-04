<div class="gamecontent_reposition_inner">

    <div class="navigation">

        <div class="bar">
        <?php include('menues/menu.php'); ?>
        </div>

    </div>
    <div class="bg1">
        <div id="flashContent">
            <div id="flashBox">
                <?php include('menues/boxes.php'); ?>
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
     <?php include('menues/sitemap.php'); ?>
     <?php include('menues/copyright.php'); ?>
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

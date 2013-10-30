<?php drupal_add_css(drupal_get_path('module', 'media') . "/css/media_style.css"); ?>
<?php drupal_add_js(drupal_get_path('module', 'media') . "/js/media.js"); ?>
<?php $path = base_path() . drupal_get_path('module', 'media'); ?>
<div class="media_title"></div>
<div class="media_menu">
    <a href="" class="images_link"></a>
    <a href="" class="story_link"></a>
    <a href="" class="videos_link"></a>
</div>

<div class="media_slide">
    <div class="media_border"></div>
    <div class="screenshot-carousel" id="screenshot-carousel">
        <div class="screen">

            <?php foreach($nodes as $node):

                ?>

            <img class="item" src="<?php echo image_style_url('media_style',$node->artwork_image['und'][0]['filename']) ?>"
                 data-full="<?php echo image_style_url('media_style',$node->artwork_image['und'][0]['filename']) ?>" data-title="Screenshots"/>
            <?php  endforeach; ?>
        </div>

        <div id="screenshot-indicators" class="indicators">

        </div>
    </div>

</div>
<div class="btn_wrapper">
<a href="<?php echo base_path(); ?>media/artwork" class="artwork"></a>
<a href="<?php echo base_path(); ?>media/screenshot" class="screenshots"></a>
<a href="<?php echo base_path(); ?>media/wallpaper" class="wallpaper"></a>
</div>
<script>
    var screenshotCarousel = ScreenshotCarousel.build("#screenshot-carousel");
</script>
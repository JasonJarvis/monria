<?php drupal_add_css(drupal_get_path('module', 'media') . "/css/media_style.css"); ?>
<?php drupal_add_css(drupal_get_path('module', 'media') . "/css/lightboxme.css"); ?>

<?php drupal_add_js(drupal_get_path('module', 'media') . "/js/media.js"); ?>


<?php $path = base_path() . drupal_get_path('module', 'media'); ?>
    <div class="media_title"></div>
    <div class="media_menu">
        <a href="<?php echo base_path(); ?>media"
           class="images_link <?php echo ($type != 'video' and $type != 'story') ? 'fixed' : '' ?>"></a>
        <a href="<?php echo base_path(); ?>media/story" class="story_link <?php echo $type == 'story' ? 'fixed' : '' ?>"></a>
        <a href="<?php echo base_path(); ?>media/video"
           class="videos_link <?php echo $type == 'video' ? 'fixed' : '' ?>"></a>
    </div>

<?php if ($type != 'story') : ?>
    <div class="media_slide">
        <div class="overlay-controls">
            <div id="screenshot-prev" class="prev"></div>
            <div id="screenshot-next" class="next"></div>
            <div id="screenshot-zoom" class="zoom"></div>
        </div>

        <div class="media_border"></div>
        <div class="screenshot-carousel" id="screenshot-carousel">
            <div class="screen">

                <?php foreach ($nodes as $node):

                    ?>
                    <?php $name = $type . '_image';
                    $node_val = $node->$name;?>

                    <?php if ($type != 'video') : ?>
                    <img class="item"
                         src="<?php echo image_style_url('media_style', $node_val['und'][0]['filename']) ?>"
                         data-full="<?php echo base_path() . '/sites/default/files/' . $node_val['und'][0]['filename'] ?>"
                         rel="lightbox-cats" data-title="Screenshots"/>
                <?php else : ?>
                    <img class="item" id="isVideo"
                         src="<?php echo image_style_url('media_style', $node_val['und'][0]['filename']) ?>"
                         data-full="<?php echo $node->video['und'][0]['value'] ?>"
                         rel="lightbox-cats" data-title="Screenshots"/>
                <?php endif; ?>
                <?php endforeach; ?>
            </div>

            <div id="screenshot-indicators" class="indicators">

            </div>
        </div>


    </div>
    <?php if ($type != 'video') : ?>
        <div class="btn_wrapper">

        </div>
    <?php endif; ?>
    <script>
        var screenshotCarousel = ScreenshotCarousel.build("#screenshot-carousel");
    </script>
<?php else : ?>
<div style="margin:20px">
    <?php echo $nodes[0]->field_body['und'][0]['value']; ?>
</div>
<?php endif; ?>
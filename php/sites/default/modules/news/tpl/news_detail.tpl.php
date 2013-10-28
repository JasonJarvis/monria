<?php drupal_add_css(drupal_get_path('module', 'news') . "/css/news_style.css"); ?>
<?php drupal_add_js(drupal_get_path('module', 'news') . "/js/load_news.js"); ?>
<?php $path = base_path() . drupal_get_path('module', 'news'); ?>
<div class="news_title"></div>
<div class="news_detail_left">
    <h4><?php echo $node->title; ?></h4>
    <?php echo $node->body['und'][0]['value']; ?>
</div>
<div class="news_detail_right">
    <div class="recene_title"></div>

</div>
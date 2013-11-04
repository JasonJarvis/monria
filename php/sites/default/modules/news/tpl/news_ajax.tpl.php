<link rel="stylesheet" href="<?php echo base_path().drupal_get_path('module', 'news'); ?>/css/news_ajax.css"></style>
<?php foreach ($nodes as $node): ?>
    <div class="news_ajax_block">
<div class="block_news_left">
            <img height="65" width="90"
                 src="<?php echo base_path() . 'sites/default/files/' . $node->news_image['und'][0]['filename']; ?>" >
</div>
<div class="block_news_right">

         <a href="<?php echo base_path() ?>news_detail/<?php echo $node->nid; ?>"> <?php echo $node->title; ?></a>
</div>
    </div>
<?php endforeach; ?>

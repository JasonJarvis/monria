<link rel="stylesheet" href="<?php echo base_path().xdrupal_get_path('module', 'news'); ?>/css/news_ajax.css"></style>
<?php foreach ($nodes as $node): ?>
    <div class="news_ajax_block">

            <img height="65" width="90"
                 src="<?php echo base_path() . '/sites/default/files/' . $node->news_image['und'][0]['filename']; ?>" >


         <a href="<?php echo base_path() ?>news"> <?php echo $node->title; ?></a>

    </div>
<?php endforeach; ?>

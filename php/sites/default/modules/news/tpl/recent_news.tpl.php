<div class="news_content">

    <?php foreach ($nodes as $node): ?>
        <div class="news_block">
            <div class="img_wrapper">
                <div class="border"></div>
                <img height="152" width="225" src="<?php echo base_path().'/sites/default/files/'.$node->news_image['und'][0]['filename']; ?>">
            </div>
            <div class="text_wrapper">
                <?php echo $node->body['und'][0]['safe_summary']; print_r($node->news_image['und'][0]); ?>
            </div>
        </div>
    <?php endforeach; ?>
    <div class="read_more_news">
        <a href="#"></a>
    </div>
</div>
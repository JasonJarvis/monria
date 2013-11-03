<div class="news_content">

    <?php foreach ($nodes as $node): ?>
        <div class="news_block">
            <div class="img_wrapper">
                <div class="border"></div>
                <img height="152" width="225" src="<?php echo base_path().'/sites/default/files/'.$node->news_image['und'][0]['filename']; ?>">
            </div>
            <div class="text_wrapper">
                <h4> <a href="<?php echo base_path() ?>news_detail/<?php echo $node->nid; ?>"> <?php echo $node->title;   ?></a></h4>
                <?php echo $node->body['und'][0]['safe_summary'];   ?>
            </div>
            <a href="<?php echo base_path() ?>news_detail/<?php echo $node->nid; ?>" class="single_read_more">Read More..</a>
        </div>
    <?php endforeach; ?>
    <div class="read_more_news">
        <a href="<?php echo base_path(); ?>news"></a>
    </div>
</div>
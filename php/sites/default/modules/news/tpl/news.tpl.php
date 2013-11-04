<style>
    .read_more {
        bottom: 10px;
        right:30px;
        color: #ADD8E6 !important;
        font-size: 12px;
        position: absolute;
        text-decoration: none;

    }
    .read_more:hover {
        text-decoration: underline;
    }
</style>
<div class="news_title">

</div>

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

            <a   class="read_more"  href="<?php echo base_path() ?>news_detail/<?php echo $node->nid; ?>"> Read More</a>
        </div>

    <?php endforeach; ?>

</div>
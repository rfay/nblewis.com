<div class="art-Post">
    <div class="art-Post-body">
<div class="art-Post-inner">
<h2 class="art-PostHeaderIcon-wrapper"> <span class="art-PostHeader"><a href="<?php echo $node_url; ?>" title="<?php echo $title; ?>"><?php echo $title; ?></a></span>
</h2>
<div class="art-PostMetadataHeader">
<div class="art-PostHeaderIcons art-metadata-icons">
<?php if ($submitted) { echo art_submitted_worker($submitted, $date, $name);} ?>

</div>

</div>
<div class="art-PostContent">
<div class="art-article"><?php echo $content;?>
<?php if (isset($node->links['node_read_more'])) { echo artReadMoreLink($node->links['node_read_more']); }?></div>
</div>
<div class="cleared"></div>
<?php ob_start(); ?>
<div class="art-PostFooterIcons art-metadata-icons">
<?php if (!empty($links)) { echo art_links_woker($node->links);} ?>
      <?php if (!empty($terms)) { echo art_terms_worker($node);} ?>

</div>
<?php $metadataContent = ob_get_clean(); ?>
<?php if (trim($metadataContent) != ''): ?>
<div class="art-PostMetadataFooter">
<?php echo $metadataContent; ?>

</div>
<?php endif; ?>

</div>

    </div>
</div>

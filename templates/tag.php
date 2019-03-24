<div class="photoswipe" itemscope itemtype="http://schema.org/ImageGallery">
    <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
        <a href="<?= $image->url(); ?>" itemprop="contentUrl" data-size="<?= $image->width(); ?>x<?= $image->height(); ?>" title="<?= $text; ?>">
            <img src="<?= $thumb->url(); ?>" itemprop="thumbnail" alt="<?= $text; ?>" class="<?= $class; ?>"/>
        </a>
    </figure>
</div>
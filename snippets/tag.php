<div class="<?= $class; ?>">
    <a href="<?= $image->url(); ?>"
       data-pswp-width="<?= $image->width(); ?>"
       data-pswp-height="<?= $image->height(); ?>"
       target="_blank">
        <img src="<?= $thumb->url(); ?>" class="img-fluid" alt="<?= $image->alt(); ?>">
    </a>
</div>
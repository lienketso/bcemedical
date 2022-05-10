<article class="postbox post format-image mb-40">
    <div class="postbox__thumb">
        <a href="<?= the_permalink() ?>">
           <?= the_post_thumbnail() ?>
        </a>
    </div>
    <div class="postbox__text p-50">
        <h3 class="blog-title">
            <a href="<?= the_permalink() ?>"><?= the_title() ?></a>
        </h3>
        <div class="post-text mb-20">
            <p><?= the_excerpt() ?></p>
        </div>
        <div class="read-more mt-30">
            <a href="<?= the_permalink() ?>" class="btn theme-btn">Xem thêm</a>
        </div>
    </div>
</article>

<div class="basic-pagination basic-pagination-2 mb-40">
    <?php
            wp_link_pages(
            array(
            'before' => '<div class="basic-pagination basic-pagination-2 mb-40">' . esc_html__( 'Pages:', 'bcemedical' ),
                'after'  => '</div>',
            )
            );
      ?>
</div>
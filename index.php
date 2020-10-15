<?php get_header(); ?>
<div class="page-container">

    <h1 class="page-title">Projects</h1>

    <?php if(is_active_sidebar('cat-index')) : ?>
        <?php dynamic_sidebar('cat-index'); ?>
    <?php endif; ?>

    <?php $counter = 1; ?>

    <?php if(have_posts()) : ?>
        <?php while(have_posts()) : the_post(); ?>

            <?php if($counter%2==0) : ?>
                <?php $postReverse = "post-reverse"; 
                      $thumbnailReverse = "thumbnail-reverse";
                      $metaReverse = "meta-reverse";
                      $buttonsReverse = "buttons-reverse";
                ?>
            <?php else :?>
                <?php $postReverse = ""; 
                      $thumbnailReverse = "";
                      $metaReverse = "";
                      $buttonsReverse = "";
                ?>
            <?php endif; ?>

            <div class="post <?php echo $postReverse?>">

                <div class="post-thumbnail <?php echo $thumbnailReverse?>">
                    <?php the_post_thumbnail(); ?>
                </div>

                <div class="post-meta <?php echo $metaReverse?>">
                    <h1 class="post-title"><?php the_title(); ?></h1>
                    <p cl
                    ass="post-excerpt"><?php the_excerpt(); ?></p>
                    <div class="buttons <?php echo $buttonsReverse?>">
                        <a class="btn post-btn green" href="<?php echo get_post_meta($post->ID, 'github-link', true); ?>">View Code</a>
                        <a class="btn post-btn pink" href="<?php echo get_post_meta($post->ID, 'demo-link', true); ?>">See Demo</a>
                    </div>
                </div>

            </div>
            <?php $counter++; ?>
        <?php endwhile; ?>
    <?php endif; ?>
</div>
<?php get_footer(); ?>
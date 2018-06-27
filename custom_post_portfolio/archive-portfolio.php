<?php
/**
 * The template for displaying archive pages
 *
 *
 * @package WP_Bootstrap_4
 */
get_header();
?>


<div class="filterable-grid container clearfix mt-4">

    <?php $wpbp = new WP_Query(array('post_type' => 'portfolio', 'posts_per_page' => '-1')); ?>


    <div class="portfolioFilter">
        <ul class="row filter_row portfolio-category">
            <li> <a class="filter-all">All</a> </li>
            <?php
            $termsfilter = get_terms([
                'taxonomy' => 'portfolio_cat',
                'hide_empty' => false,
            ]);
            ?>
            <?php
            foreach ($termsfilter as $term) {
                ?>
                <li> <a class="filter-button" data-filter=".<?php echo strtolower(preg_replace('/\s+/', '-', $term->name)) . ' '; ?>"> <?php echo $term->name; ?> </a>  </li>
            <?php }
            ?>
        </ul>
    </div>


    <div class="portfolioContainer row gallery-part">
        <?php if ($wpbp->have_posts()) : while ($wpbp->have_posts()) : $wpbp->the_post(); ?>

                <?php $terms = get_the_terms(get_the_ID(), 'portfolio_cat'); ?>

                <div data-id="id-<?php echo $count; ?>" class="col-md-3 col-sm-3 col-xs-12 isotope-item teaser-box <?php
                foreach ($terms as $term) {
                    echo strtolower(preg_replace('/\s+/', '-', $term->name)) . '';
                }
                ?>">
                    <div class="gallery_section">
                        <?php
                        $post_thumbnail_id = get_post_thumbnail_id($post->ID);
                        $post_thumbnail_url = wp_get_attachment_url($post_thumbnail_id);
                        ?>
                        <a href="<?php echo $post_thumbnail_url; ?>">
                            <?php if ((function_exists('has_post_thumbnail')) && (has_post_thumbnail())) : ?>

                                <?php echo get_the_post_thumbnail($post->ID, 'medium'); ?>

                            <?php endif; ?>
                        </a>

                        <div class="izotop_hide"> <a href="<?php echo $post_thumbnail_url; ?>"> 
                                <h3><?php echo get_the_title(); ?></h3> 
                                <span> <?php echo $term->name; ?></span>
                            </a>
                        </div>
                    </div>
                </div>

                <?php $count++; ?>
                <?php
            endwhile;
        endif;
        ?>
    </div>
    <?php wp_reset_query(); ?>

</div>


<?php
get_footer();

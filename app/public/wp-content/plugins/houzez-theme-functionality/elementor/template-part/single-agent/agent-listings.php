<?php 
global $settings, $paged, $total_listing_found;
$the_query = Houzez_Query::loop_agent_properties();
$total_listing_found = $the_query->found_posts;

$item_layout = $view_class = $cols_in_row = '';
$card_deck = 'card-deck';
$listing_view = $settings['listings_layout'];

if($listing_view == 'list-view-v1') {
    $wrap_class = 'listing-v1';
    $item_layout = 'v1';
    $view_class = 'list-view';

} elseif($listing_view == 'grid-view-v1') {
    $wrap_class = 'listing-v1';
    $item_layout = 'v1';
    $view_class = 'grid-view';

} elseif($listing_view == 'list-view-v2') {
    $wrap_class = 'listing-v2';
    $item_layout = 'v2';
    $view_class = 'list-view';

} elseif($listing_view == 'grid-view-v2') {
    $wrap_class = 'listing-v2';
    $item_layout = 'v2';
    $view_class = 'grid-view';

} elseif($listing_view == 'grid-view-v3') {
    $wrap_class = 'listing-v3';
    $item_layout = 'v3';
    $view_class = 'grid-view';

} elseif($listing_view == 'grid-view-v4') {
    $wrap_class = 'listing-v4';
    $item_layout = 'v4';
    $view_class = 'grid-view';

} elseif($listing_view == 'list-view-v4') {
    $wrap_class = 'listing-v4';
    $item_layout = 'list-v4';
    $view_class = 'list-view listing-view-v4';

} elseif($listing_view == 'list-view-v5') {
    $wrap_class = 'listing-v5';
    $item_layout = 'v5';
    $view_class = 'list-view';

} elseif($listing_view == 'grid-view-v5') {
    $wrap_class = 'listing-v5';
    $item_layout = 'v5';
    $view_class = 'grid-view';

} elseif($listing_view == 'grid-view-v6') {
    $wrap_class = 'listing-v6';
    $item_layout = 'v6';
    $view_class = 'grid-view';

} elseif($listing_view == 'grid-view-v7') {
    $wrap_class = 'listing-v7';
    $item_layout = 'v7';
    $view_class = 'grid-view';

} elseif($listing_view == 'list-view-v7') {
    $wrap_class = 'listing-v7';
    $item_layout = 'list-v7';
    $view_class = 'list-view';
    $card_deck = '';
} else {
    $wrap_class = 'listing-v1';
    $item_layout = 'v1';
    $view_class = 'grid-view';
}

$active_listings_tab = 'active';
$active_listings_content = 'show active';

if(isset($_GET['tab']) || $paged > 0) {
    ?>
    <script>
        jQuery(document).ready(function ($) {
            $('html, body').animate({
                scrollTop: $(".hzele-agent-listings-wrap").offset().top - 30
            }, 'slow');
        });
    </script>
    <?php
};
?>

<div class="hzele-agent-listings-wrap">
    
    <div class="listing-tools-wrap">
        <div class="d-flex align-items-center">
            <div id="houzez-listings-tabs-wrap" class="listing-tabs flex-grow-1">
                <?php htf_get_template_part('elementor/template-part/listing-tabs'); ?> 
            </div>
            <?php get_template_part('template-parts/listing/listing-sort-by'); ?>  
        </div><!-- d-flex -->
    </div><!-- listing-tools-wrap -->

    <section class="listing-wrap <?php echo esc_attr($wrap_class); ?>">
        <div class="listing-view <?php echo esc_attr($view_class).' '.esc_attr($card_deck).' '.esc_attr($settings['module_type']); ?>">
            <?php
            if ( $the_query->have_posts() ) :
                while ( $the_query->have_posts() ) : $the_query->the_post();

                    $agent_listing_ids[] = get_the_ID(); 
                    get_template_part('template-parts/listing/item', $item_layout);

                endwhile;
                wp_reset_postdata();
            else:
                get_template_part('template-parts/listing/item', 'none');
            endif;
            ?> 
        </div><!-- listing-view -->

        <?php houzez_pagination( $the_query->max_num_pages ); ?>
    </section>
    
</div><!-- hzele-agent-listings-wrap -->
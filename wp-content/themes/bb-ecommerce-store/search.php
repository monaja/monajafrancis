<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package Ecommerce Store
 */

get_header(); ?>

<div class="container">
    <?php
        $left_right = get_theme_mod( 'bb_ecommerce_store_theme_options','One Column');
        if($left_right == 'Left Sidebar'){ ?>
      <div class="row">  
        <div class="col-md-4 col-sm-4"><?php get_sidebar(); ?></div>
        <div id="our-services" class="services col-md-8 col-sm-8">
            <h1 class="search-title"><?php /* translators: %s: search term */ printf( esc_html__( 'Search Results for: %s','bb-ecommerce-store'), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?></h1>
            <?php if ( have_posts() ) :
              /* Start the Loop */
                
                while ( have_posts() ) : the_post();

                  get_template_part( 'template-parts/content', get_post_format() ); 
                
                endwhile;

                else :

                  get_template_part( 'no-results' ); 

                endif; 
            ?>
            <div class="navigation">
              <?php
                  // Previous/next page navigation.
                  the_posts_pagination( array(
                      'prev_text'          => __( 'Previous page', 'bb-ecommerce-store' ),
                      'next_text'          => __( 'Next page', 'bb-ecommerce-store' ),
                      'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'bb-ecommerce-store' ) . ' </span>',
                  ) );
              ?>
                <div class="clearfix"></div>
            </div>
        </div>
      </div>
    <?php }else if($left_right == 'Right Sidebar'){ ?>
      <div class="row">
        <div id="our-services" class="services col-md-8 col-sm-8">
            <h1 class="search-title"><?php /* translators: %s: search term */ printf( esc_html__( 'Search Results for: %s','bb-ecommerce-store'), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?></h1>
            <?php if ( have_posts() ) :
              /* Start the Loop */
                
                while ( have_posts() ) : the_post();

                  get_template_part( 'template-parts/content', get_post_format() ); 
                
                endwhile;

                else :

                  get_template_part( 'no-results' ); 

                endif; 
            ?>
            <div class="navigation">
              <?php
                  // Previous/next page navigation.
                  the_posts_pagination( array(
                      'prev_text'          => __( 'Previous page', 'bb-ecommerce-store' ),
                      'next_text'          => __( 'Next page', 'bb-ecommerce-store' ),
                      'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'bb-ecommerce-store' ) . ' </span>',
                  ) );
              ?>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="col-md-4 col-sm-4"><?php get_sidebar(); ?></div>
      </div>
    <?php }else if($left_right == 'One Column'){ ?>
        <div id="our-services" class="services">
             <h1 class="search-title"><?php /* translators: %s: search term */ printf( esc_html__( 'Search Results for: %s','bb-ecommerce-store'), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?></h1>
            <?php if ( have_posts() ) :
              /* Start the Loop */
                
                while ( have_posts() ) : the_post();

                  get_template_part( 'template-parts/content', get_post_format() ); 
                
                endwhile;

                else :

                  get_template_part( 'no-results' ); 

                endif; 
            ?>
            <div class="navigation">
              <?php
                  // Previous/next page navigation.
                  the_posts_pagination( array(
                      'prev_text'          => __( 'Previous page', 'bb-ecommerce-store' ),
                      'next_text'          => __( 'Next page', 'bb-ecommerce-store' ),
                      'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'bb-ecommerce-store' ) . ' </span>',
                  ) );
              ?>
                <div class="clearfix"></div>
            </div>
        </div>
    <?php }else if($left_right == 'Three Columns'){ ?>
      <div class="row">
        <div id="sidebar" class="col-md-3 col-ms-3"><?php dynamic_sidebar('sidebar-1');?></div>
        <div id="our-services" class="services col-md-6 col-sm-6">
            <h1 class="search-title"><?php /* translators: %s: search term */ printf( esc_html__( 'Search Results for: %s','bb-ecommerce-store'), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?></h1>
            <?php if ( have_posts() ) :
              /* Start the Loop */
                
                while ( have_posts() ) : the_post();

                  get_template_part( 'template-parts/content', get_post_format() ); 
                
                endwhile;

                else :

                  get_template_part( 'no-results' ); 

                endif; 
            ?>
            <div class="navigation">
              <?php
                  // Previous/next page navigation.
                  the_posts_pagination( array(
                      'prev_text'          => __( 'Previous page', 'bb-ecommerce-store' ),
                      'next_text'          => __( 'Next page', 'bb-ecommerce-store' ),
                      'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'bb-ecommerce-store' ) . ' </span>',
                  ) );
              ?>
                <div class="clearfix"></div>
            </div>
        </div>
        <div id="sidebar" class="col-md-3 col-ms-3"><?php dynamic_sidebar('sidebar-2');?></div>
      </div>
    <?php }else if($left_right == 'Four Columns'){ ?>
      <div class="row">
        <div id="sidebar" class="col-md-3 col-ms-3"><?php dynamic_sidebar('sidebar-1');?></div>
        <div id="our-services" class="services col-md-3 col-sm-3">
             <h1 class="search-title"><?php /* translators: %s: search term */ printf( esc_html__( 'Search Results for: %s','bb-ecommerce-store'), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?></h1>
            <?php if ( have_posts() ) :
              /* Start the Loop */
                
                while ( have_posts() ) : the_post();

                  get_template_part( 'template-parts/content', get_post_format() ); 
                
                endwhile;

                else :

                  get_template_part( 'no-results' ); 

                endif; 
            ?>
            <div class="navigation">
              <?php
                  // Previous/next page navigation.
                  the_posts_pagination( array(
                      'prev_text'          => __( 'Previous page', 'bb-ecommerce-store' ),
                      'next_text'          => __( 'Next page', 'bb-ecommerce-store' ),
                      'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'bb-ecommerce-store' ) . ' </span>',
                  ) );
              ?>
                <div class="clearfix"></div>
            </div>
        </div>
        <div id="sidebar" class="col-md-3 col-ms-3"><?php dynamic_sidebar('sidebar-2');?></div>
        <div id="sidebar" class="col-md-3 col-ms-3"><?php dynamic_sidebar('sidebar-3');?></div>
      </div>
    <?php }else if($left_right == 'Grid Layout'){ ?>
        <div id="our-services" class="services row">
             <h1 class="search-title"><?php /* translators: %s: search term */ printf( esc_html__( 'Search Results for: %s','bb-ecommerce-store'), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?></h1>
            <?php if ( have_posts() ) :
              /* Start the Loop */
                
                while ( have_posts() ) : the_post();

                  get_template_part( 'template-parts/grid-layout' ); 
                
                endwhile;

                else :

                  get_template_part( 'no-results' ); 

                endif; 
            ?>
            <div class="navigation">
              <?php
                  // Previous/next page navigation.
                  the_posts_pagination( array(
                      'prev_text'          => __( 'Previous page', 'bb-ecommerce-store' ),
                      'next_text'          => __( 'Next page', 'bb-ecommerce-store' ),
                      'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'bb-ecommerce-store' ) . ' </span>',
                  ) );
              ?>
                <div class="clearfix"></div>
            </div>
        </div>
    <?php }?>
</div>
<div class="clearfix"></div>

<?php get_footer(); ?>
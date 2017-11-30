<?php 

    get_header(); 


    if ( have_posts() ) :

            /* Start the Loop */
            while ( have_posts() ) : the_post();

                /*
                 * Include the Post-Format-specific template for the content.
                 * If you want to override this in a child theme, then include a file
                 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                 */
                //get_template_part( 'template-parts/content', get_post_format() );


            ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <header class="entry-header">
                        <?php
                            if ( is_single() ) {
                                // is_single => vi er på en page.
                                the_title( '<h1 class="entry-title">', '<hr></h1>' );
                            } else {
                                the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a><hr></h2>' );
                            }
                    ?>
                    </header><!-- .entry-header -->
                    
                    <div class="entry-content" <?php if(is_page()):?>id="wrapper"<?php endif; ?>>
                        <?php
                            if ( has_post_thumbnail() ) : ?>

                                <div class="right" >
                                <a class="featured-image" href="<?php echo esc_url( get_permalink()); ?>" rel="bookmark">
                                    <?php the_post_thumbnail('medium'); ?>
                                </a>
                                </div>
                        <?php endif; ?>

                        <div class="left">
                        <?php
                            the_content( sprintf(
                                /* translators: %s: Name of current post. */
                                wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'js-no' ), array( 'span' => array( 'class' => array() ) ) ),
                                the_title( '<span class="screen-reader-text">"', '"</span>', false )
                            ) );

                        ?>
                        </div>

                        <?php
                            wp_link_pages( array(
                                'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'js-no' ),
                                'after'  => '</div>',
                            ) );
                        ?>
                    </div><!-- .entry-content -->

                    <footer class="entry-footer">
                        
                    </footer><!-- .entry-footer -->
                </article><!-- #post-## -->

                <hr>
                
            <?php endwhile;

            the_posts_navigation();

        endif; ?>


<?php get_footer(); ?>

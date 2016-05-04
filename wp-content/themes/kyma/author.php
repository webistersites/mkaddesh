<?php get_header(); ?>
    <section class="content_section page_title">
        <div class="content clearfix">
            <h1 class="">
                <?php printf(__('Author Archives: %s', 'kyma'), '<span class="vcard"><a class="url fn n" href="' . esc_url(get_author_posts_url(get_the_author_meta("ID"))) . '" title="' . esc_attr(get_the_author()) . '" rel="me">' . get_the_author() . '</a></span>'); ?>
            </h1>
            <?php kyma_breadcrumbs(); ?>
        </div>
    </section>
    <!-- Our Blog Grids -->
<?php $kyma_theme_options = kyma_theme_options(); ?>
    <section class="content_section">
        <div class="content row_spacer">
            <div class="main_title centered upper">
                <h2><span class="line"><i
                            class="fa fa-pencil"></i></span><?php printf(__('Posts By %s ', 'kyma'), get_the_author()); ?>
                </h2>
            </div>
            <?php
            $blog_layout = $kyma_theme_options['blog_layout'];
            $imageSize = $blog_layout == "fullwidth" ? 'kyma_home_post_full_thumb' : 'kyma_home_post_thumb';
            if ($blog_layout == "blogleft") {
                get_sidebar();
                $float = "f_right";
            } elseif ($blog_layout == "blogfull") {
                $float = "";
            } elseif ($blog_layout == "blogright") {
                $float = "f_left";
            }?>
            <!-- All Content -->
            <div class="content_spacer clearfix">
                <?php if ($blog_layout == "blogleft" || $blog_layout == "blogright"){ ?>
                <div class="content_block col-md-9 <?php echo $float; ?> ">
                    <?php } ?>
                    <div class="hm_blog_list clearfix"><?php
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $args = array('post_type' => 'post', 'paged' => $paged);
                        $wp_query = new WP_Query($args);
                        while ($wp_query->have_posts()):
                            $wp_query->the_post(); ?>
                            <?php get_template_part('blog', 'content');
                        endwhile;
                        ?>
                    </div>
                    <!-- End blog List -->

                    <!-- Pagination -->
                    <div id="pagination" class="pagination">
                        <?php kyma_pagination(); ?>
                    </div>
                    <!-- End Pagination -->
                    <?php if ($blog_layout == "blogleft" || $blog_layout == "blogright"){ ?>
                </div>
            <?php } ?>
                <!-- End Content Block -->

                <!-- sidebar -->
                <?php if ($blog_layout == "blogright") {
                    get_sidebar();
                } ?>
                <!-- End sidebar -->
            </div>
            <!-- All Content -->
        </div>
    </section>
    <!-- End Our Blog Grids -->
<?php get_footer(); ?>
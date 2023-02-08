<?php get_header() ; 
// get The Header Funcation */?>
    <div class="container">
            <?php 
            if(have_posts())  // check if there 's posts
            {
                while(have_posts()) // Loop throw posts
                { 
                    the_post(); ?>
                        <div class="main-post single-post">
                            <?php edit_post_link()?>
                            <h3 class="post-title">
                                <!-- permalink function to make title of poar clickable and make u to vist it -->
                                <div class='name_title'>
                                    <?php the_title()?>
                                </div>
                                <span class='post-author'>
                                <i class="fa fa-user fa-fw"></i>   
                                <?php the_author_posts_link() ?> ,</span>
                                <span class="post-date">
                                <i class="fa-regular fa-calendar-days fa-fw   "></i>
                                <?php the_date(); ?> ,
                                </span>
                                <span class="post-comments">
                                <i class="fa-solid fa-comment fa-fw ">
                                </i>
                                <?php comments_popup_link('0 Comment', '1 Comment', '% Comments', 'comment-url', 'Comments Off' ) ?> 
                            </span>
                            <div class="row">
                                <div class="col-lg-6 col-sm-12">
                                <?php the_post_thumbnail('post-thumbnail',['class' => 'image img-responsive img-thumbnail', 'title' => 'post image'])?>
                                </div>
                                <div class="col-lg-6 col-sm-12 m-auto">
                                <div class="post-content align-middle">
                                <?php the_content()?>
                                </div>
                                </div>
                            </div>

                            <!-- <?php //the_content("Read The Full Artical") ?> -->
                            </p>
                            <p class="categories">
                            <i class="fa fa-tags fa-fw "></i>
                            <?php the_category(' , ')?>
                            </p>
                            <p class="post-tags">
                                <?php 
                                if(has_tag())
                                {
                                    the_tags();
                                } else
                                {
                                    echo 'Tags : 0 Tags';
                                }
                                ?>
                            </p>
                            <!-- <?php the_title('<h3 class="post-title">','</h3>')?> -->
                        </div>
                    <?php
                    
                }// End While Loop
            } // End If Condtion
            ?>
    </div>
    <?php get_footer() ;?>
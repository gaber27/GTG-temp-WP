<?php get_header() ; 
// get The Header Funcation */?>
    <div class="container">
        <div class="row">
            <?php 
            if(have_posts())  // check if there 's posts
            {
                while(have_posts()) // Loop throw posts
                { 
                    the_post(); ?>
                    <div class="col-lg-6 col-sm-12">
                        <div class="main-post">
                            <h3 class="post-title">
                                <!-- permalink function to make title of poar clickable and make u to vist it -->
                                <a class='name_title' href="<?php the_permalink() ?>">
                                    <?php the_title()?>
                                </a>
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
                            <?php the_post_thumbnail('post-thumbnail',['class' => 'img-responsive img-thumbnail', 'title' => 'post image'])?>
                            <div class="post-content">
                            <?php the_excerpt()?>
                            </div>
                            <!-- <?php the_content("Read The Full Artical") ?> -->
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
                        </div>
                    <?php
                    
                }// End While Loop
            } // End If Condtion

            echo '<div class="post-pagination">';
                if(get_previous_posts_link())
                {
                    previous_posts_link('<i class="fa-solid fa-chevron-left fa-fw fa-lg"></i> <span class="prev">Prev</span>');
                }
                else
                {
                    echo  '<span  class ="pre-span" > No prev page </span>';
                }
                if(get_next_posts_link())
                {
                    next_posts_link('<span  class ="Next" > Next </span> <i class="fa-solid fa-chevron-right fa-fw fa-lg"></i>');
                }
                else
                {
                    echo '<span class ="next-span" > No Next page </span>';
                }
            echo '</div>';
            ?>
        </div>
    </div>
    <?php 
    get_footer() ;
    /*
    get The footer
    */
    ?>
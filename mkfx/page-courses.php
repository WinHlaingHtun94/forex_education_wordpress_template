<?php get_header()?>
    <!-- ctArea -->
    <div id="ctArea">
        <div class="ctCourses">
            <div class="ctInner block">
                <h2 class="leadTitle" data-aos="fade-up">Courses of MKFX for Forex Trading</h2>
                <figure class="banner" data-aos="fade-up">
                    <img src="<?=get_template_directory_uri()?>/assets/img/course_banner.png" alt="course_banner" width="1280" height="867">
                </figure>
                <p class="txt" data-aos="fade-right">Welcome! Are you new to trading forex?<br>The courses of Forex Trading is our free online course that helps beginners learn how to trade forex. If you've always wanted to learn to trade but have no idea where to begin, then this course is for you.</p>
            </div>
            <div class="courses">
                <div class="ctInner">
                    <ul class="card">
                        <?php
                            $args = array(
                                'post_type' => 'lesson'
                            );
                            $the_query = new WP_Query($args);
                        ?>
                        <?php if($the_query -> have_posts()): while($the_query ->have_posts()): $the_query ->the_post();?>
                        <?php 
                            $image  = get_field('image');
                            $content  = get_field('content');
                        ?>
                            <li  data-aos="flip-up">
                                <a href="<?php the_permalink();?>">
                                    <figure>
                                        <?php if($image):?>
                                            <img src="<?php echo $image['url'];?>" alt="<?php echo $image['alt'];?>" data-aos="zoom-in">
                                        <?php endif;?>
                                    </figure>
                                    <div class="txt">
                                        <h3><?php the_title()?></h3>
                                        <p><?php echo $content?></p>
                                    </div>
                                    <p class="more">see more...</p>
                                </a>
                            </li>
                        <?php endwhile; endif;?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- ctArea -->
<?php get_footer()?>
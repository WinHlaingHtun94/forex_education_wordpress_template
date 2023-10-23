<?php get_header();?>
    <!-- ctArea -->
    <div id="ctArea">
        <div class="ctAnalysis">
            <div class="ctInner block">
                <h2 class="leadTitle" data-aos="zoom-in">Daily Analysis Of MKFX</h2>
                <div id="images">
                    <?php
                        $args = array(
                            'post_type' => 'daliy_analysis'
                        );
                        $the_query = new WP_Query($args);
                    ?>
                    <?php if($the_query -> have_posts()): while($the_query ->have_posts()): $the_query ->the_post();?>
                    <?php 
                        $gallery  = get_field('images');
                    ?>
                        <div class="day">
                            <h3 class="title" data-aos="zoom-in"><?php the_title();?></h3>
                            <ul>
                                <?php if($gallery):?>
                                    <?php foreach($gallery as $image):?>
                                        <li><img src="<?php echo $image['url'];?>" alt="<?php echo $image['alt'];?>" data-aos="zoom-in"></li>
                                    <?php endforeach;?>
                                <?php endif;?>
                                <!-- <li><img src="<?=get_template_directory_uri()?>/assets/img/analysis.jpg" alt="Picture 1" data-aos="zoom-in"></li> -->
                            </ul>
                        </div>
                    <?php endwhile; endif;?>
                </div>
            </div>
        </div>
    </div>
    <!-- ctArea -->
<?php get_footer();?>
<script>
    //image Viewer
    const gallery = document.getElementById('images');
    const viewer = new Viewer(gallery);
</script>
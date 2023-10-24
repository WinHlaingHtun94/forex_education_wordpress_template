<?php get_header()?>
    <!-- ctArea -->
    <div id="ctArea">
        <div class="ctDetail">
            <div class="course ctInner">
                <?php
                    $args = array(
                        'post_type' => 'lesson'
                    );
                    $the_query = new WP_Query($args);
                    $gallery  = get_field('gallery');
                    $content  = get_field('content');
                    $link = get_field('youtube_link');
                    $pdf = get_field('pdf');
                ?>
                <h2 class="title" data-aos="zoom-in"><?php the_title()?></h2>
                <figure class="imgBlock" data-aos="zoom-in" id="images">
                    <?php if($gallery):?>
                        <?php foreach($gallery as $image):?>
                            <img src="<?php echo $image['url'];?>" alt="<?php echo $image['alt'];?>" width="5812" height="3875">
                        <?php endforeach;?>
                    <?php endif;?>
                </figure>
                <p class="leadTxt" data-aos="zoom-in"><?php echo $content?></p>
                <div class="ytVideo" data-aos="zoom-in">
                    <?php echo $link;?>
                </div>
                <div class="btnBlock" data-aos="zoom-in" data-aos-offset="0">
                    <a href="<?php echo $pdf['url']?>" class="btn btnL" download>Download pdf</a>
                </div>
            </div>
        </div>
    </div>
    <!-- ctArea -->
<?php get_footer()?>
<script>
    //image Viewer
    const gallery = document.getElementById('images');
    const viewer = new Viewer(gallery);
</script>
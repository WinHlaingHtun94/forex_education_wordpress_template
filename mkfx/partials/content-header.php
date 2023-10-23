<header>
    <div class="header col">
        <h1 class="logo">
            <span>logo</span>
            <a href="<?=site_url();?>/">
                <figure>
                    <img src="<?=get_template_directory_uri()?>/assets/img/logo.png" alt="logo" width="546" height="317">
                </figure>
            </a>
        </h1>
        <div class="humberger spOnly">
            <span></span>
        </div>
        <ul class="col nav">
            <li><a href="<?= site_url();?>/#about" class="<?php echo is_front_page() ? 'active' : ''?>">About</a></li>
            <li><a href="<?= site_url();?>/analysis/" class="<?php echo is_page('analysis') ? 'active' : ''?>">Analysis</a></li>
            <li><a href="<?= site_url();?>/courses/" class="<?php echo is_page('courses') ? 'active' : ''?>">Courses</a></li>
            <li><a href="<?= site_url();?>/calender/" class="<?php echo is_page('calender') ? 'active' : ''?>">Calender</a></li>
            <li><a href="<?= site_url();?>/broker/" class="<?php echo is_page('brokers') ? 'active' : ''?>">Brokers</a></li>
            <li><a href="<?= site_url();?>/#contact">Contact</a></li>
        </ul>
    </div>
</header>

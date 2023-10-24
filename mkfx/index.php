<?php get_header()?>
    <!-- ctArea -->
    <div id="ctArea">
        <div class="ctTop">
            <div class="ctInner">
                <div class="banner col" data-aos="fade-up">
                    <figure class="imgGp" data-aos="fade-right">	
                        <img src="<?=get_template_directory_uri()?>/assets/img/laptop.png" alt="bull" width="1280" height="1063">
                        <figcaption id="liveTxt" class="liveTxt"></figcaption>
                    </figure>
                    <div class="txtgp" data-aos="fade-left">
                        <h2>Unlock Your Forex Potential: Learn, Trade, Succeed!</h2>
                        <p>At Forex Education Hub, we are dedicated to helping traders of all levels unlock their full potential in the world of foreign exchange trading. Our comprehensive educational resources, expert guidance, and community support empower you to become a confident and successful forex trader.</p>
                    </div>
                </div>
            </div>
            <section class="block bg" id="about">
                <div class="ctInner">
                    <h2 class="leadTitle" data-aos="fade-up">About Us</h2>
                    <div class="col">
                        <div class="left" data-aos="fade-left">
                            <figure class="imgGp">
                                <img src="<?=get_template_directory_uri()?>/assets/img/about_us.png" alt="about_us" width="1713" height="1409">
                            </figure>
                        </div>
                        <div class="right" data-aos="fade-right">
                            <p>At Forex Education Hub, we are dedicated to helping traders of all levels unlock their full potential in the world of foreign exchange trading. Our comprehensive educational resources, expert guidance, and community support empower you to become a confident and successful forex trader.</p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="block">
                <div class="ctInner">
                    <h2 class="leadTitle" data-aos="fade-up">Why Choose Us?</h2>
                    <div class="col reverse">
                        <div class="left" data-aos="fade-right">
                            <figure class="imgGp">
                                <img src="<?=get_template_directory_uri()?>/assets/img/why_choose.png" alt="why choose" width="2083" height="2083">
                            </figure>
                        </div>
                        <div class="right" data-aos="fade-left">
                            <p>Our commitment to your success sets us apart:</p>
                            <ul>
                                <li><strong>Expert Educators:</strong> Learn from seasoned professionals with years of trading experience.</li>
                                <li><strong>Comprehensive Curriculum:</strong> Access a wide range of courses, from beginner basics to advanced strategies.</li>
                                <li><strong>Interactive Learning:</strong> Engage in hands-on practice, live webinars, and interactive quizzes.</li>
                                <li><strong>Community Support:</strong> Join a thriving community of traders, share insights, and collaborate for success.</li>
                                <li><strong>Latest Market Insights:</strong> Stay updated with our market analysis and trading tips.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <section class="block bg" id="course">
                <div class="ctInner">
                    <h2 class="leadTitle" data-aos="fade-up">Our Courses</h2>
                    <div class="col">
                        <div class="left" data-aos="fade-left">
                            <figure class="imgGp">
                                <img src="<?=get_template_directory_uri()?>/assets/img/courses.png" alt="courses" width="1280" height="792">
                            </figure>
                        </div>
                        <div class="right" data-aos="fade-right">
                            <p>Our curriculum covers a wide range of topics, including:</p>
                            <ul class="list">
                                <li>Forex Basics for Beginners</li>
                                <li>Technical and Fundamental Analysis</li>
                                <li>Risk Management Strategies</li>
                                <li>Advanced Trading Techniques</li>
                                <li>Psychology of Trading</li>
                            </ul>
                            <p>Whether you're just starting or looking to enhance your skills, our courses cater to traders of all levels.</p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="block" id="contact">
                <div class="ctInner">
                    <h2 class="leadTitle" data-aos="fade-up">Contact Us</h2>
                    <div class="col reverse">
                        <div class="left" data-aos="fade-right">
                            <figure class="imgGp">
                                <img src="<?=get_template_directory_uri()?>/assets/img/contact.png" alt="courses" width="791" height="1280">
                            </figure>
                        </div>
                        <div class="right" data-aos="fade-left">
                            <form method="POST" class="contactForm">
                                <dl>
                                    <dt><label for="name">Name</label></dt>
                                    <dd><input type="text" id="name" name="name" placeholder="Please enter your name.."></dd>
                                </dl>
                                <dl>
                                    <dt><label for="email">Email</label></dt>
                                    <dd><input type="email" id="email" name="email" placeholder="Please enter your email.."></dd>
                                </dl>
                                <dl>
                                    <dt><label for="text">Inquiry</label></dt>
                                    <dd><textarea name="text" id="text" placeholder="Please enter your inquiry.."></textarea></dd>
                                </dl>
                                <input type="submit" class="submit" name="submit" value="Submit">
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <!-- /ctArea -->
<?php get_footer()?>
<?php 
/**
 * Template Name: Front Page Template
 * 
 * 
 */
get_header()?> 
    <div class="page-header py-4 px-3">
        <div class="page-header__inner container d-md-flex align-items-center justify-content-between">
            <div class="page-header__col-left d-none d-md-flex">
                <a href="https://www.instagram.com/chantal.gabrielle.freeman/" target="_blank" class="mr-3" href="">Instagram</a>
                <a href="https://www.youtube.com/channel/UCCjE9XP8xI8OVPfhSjn9OvQ" target="_blank">YouTube</a>
            </div>
            <div class="page-header__col-center">
                <div class="logo m-auto m-md-0"></div>
            </div>
            <div class="page-header__col-right d-none d-md-block">
                <span>Full site coming soon!</span>
            </div>
        </div>
    </div>
    <div class="page-hero px-3">
        <div class="page-hero__inner container img--cover">
            <figure>
                <picture>
                    <img src="<?php echo get_bloginfo('template_url');?>/img/img00.jpg"/>
                </picture>
            </figure>
        </div>
        <div class="page-hero__subtext container py-3 d-block d-md-none align-items-center justify-content-between">
            <div class="subtext__col text-center">
                <a class="d-block text-center" href="https://www.instagram.com/chantal.gabrielle.freeman/" target="_blank">Instagram</a>
                <a class="d-block text-center" href="https://www.youtube.com/channel/UCCjE9XP8xI8OVPfhSjn9OvQ" target="_blank">YouTube</a>
                <span class="d-block">Full site coming soon!</span>
            </div>
        </div>
    </div>
    <div class="page-quote py-5 px-3">
        <div class="page-quote__inner container">
            <div class="quote-icon"></div>
            <div class="quote-text">
                <p>As we let our own Light shine, we consciously give other people permission to do the same. As we are liberated from our own fear, our presence automatically liberates others.</p>
                <span class="quote-credit">-  Mariannne Williamson</span>
            </div>
        </div>
    </div>
    <div class="page-cta py-5 px-3">
        <div class="page-cta__inner container d-md-flex align-items-md-center flex-row-reverse">
            <div class="page-cta__col--img img--cover col-md pr-md-0 pl-0 pl-md-3 mb-5">
                <figure>
                    <picture>
                        <img src="<?php echo get_bloginfo('template_url');?>/img/img01.jpg"/>
                    </picture>
                </figure>
            </div>
            <div class="page-cta__col--text col-md pl-0 ">
                <div class="col__inner">
                    <h3 class="d-block mb-0">In My Own Words</h3>
                    <p class="d-block py-4">Music is life's way of speaking straight from the soul. Every step in the process to bring a score to life, the technique, language, dramatic intent and sound all converge to communicate the most elusive moments and emotions of our lived experience. I'm happy to be a part of that story and that sharing, and hope to share it as long as I have breath in my lungs.</p>
                    <a href="<?php echo get_bloginfo('template_url');?>/resume.pdf" target="_blank" class="btn"><span>View my resume</span><span class="arrow"></span></a>
                </div>
            </div>
        </div>
    </div>
    <div class="page-section py-5 px-3">
        <div class="page-section__inner container">
            <div class="page-section__title d-md-flex align-items-center justify-content-between">
                <h2>Videos</h2>
                <a href="https://www.youtube.com/channel/UCCjE9XP8xI8OVPfhSjn9OvQ" target="_blank" class="cta--text">Check out my YouTube channel<span class="arrow"></span></a>
            </div>
            <div class="page-section__content container px-0 py-5 d-md-flex">
                <div class="content-item col-md px-0" data-content="Qyxwxn4SuEk" data-title="Robert, toi que j'aime">
                    <div class="content-img img--cover mb-3">
                        <figure>
                            <picture>
                                <img src="<?php echo get_bloginfo('template_url');?>/img/img03.jpg"/>
                            </picture>
                        </figure>
                    </div>
                    <span class="content-item__title">Robert, toi que j'aime</span>
                </div>
                <div class="content-item col-md px-0 px-md-3" data-content="ySR-v4urg6Q" data-title="Come in quest'ora bruna">
                    <div class="content-img img--cover mb-3">
                        <figure>
                            <picture>
                                <img src="<?php echo get_bloginfo('template_url');?>/img/img04.jpg"/>
                            </picture>
                        </figure>
                    </div>
                    <span class="content-item__title">Come in quest'ora bruna</span>
                </div>
                <div class="content-item col-md px-0" data-content="bkKyBwg5818" data-title="Alabama Song">
                    <div class="content-img img--cover mb-3">
                        <figure>
                            <picture>
                                <img src="<?php echo get_bloginfo('template_url');?>/img/img05.jpg"/>
                            </picture>
                        </figure>
                    </div>
                    <span class="content-item__title">Alabama Song</span>
                </div>
            </div>
        </div>
    </div>
    <div class="page-section py-5 px-3">
        <div class="page-section__inner container d-md-flex align-items-md-center">
            <div class="page-cta__col--text col-md mb-5 mb-md-0">
                <div class="col__inner">
                    <h2 class="d-block mb-0">Let's connect</h2>
                    <p class="d-block mb-0 py-4">Feel free to reach out for gigs, or if you wanna say hi!</p>
                    <a href="mailto:cfreeman04@gmail.com" target="_blank" class="btn"><span>Contact me</span> <span class="arrow"></span></a>
                </div>
            </div>
            <div class="page-cta__col--img img--round img--cover col-md">
                <div class="img__inner">
                    <figure>
                        <picture>
                            <img src="<?php echo get_bloginfo('template_url');?>/img/img02.jpg"/>
                        </picture>
                    </figure>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-window">
        <div class="close-btn">
            <div class="close-btn__slice"></div>
            <div class="close-btn__slice"></div>
        </div>
        <div class="video-container"></div>
    </div>
<?php get_footer();?>
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
                <a href="<?php echo get_bloginfo('template_url');?>/resume.pdf" target="_blank">View my resumé</a>
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
                <a class="d-block text-center m-auto" href="https://www.instagram.com/chantal.gabrielle.freeman/" target="_blank">Instagram</a>
                <a class="d-block text-center m-auto" href="https://www.youtube.com/channel/UCCjE9XP8xI8OVPfhSjn9OvQ" target="_blank">YouTube</a>
                <a class="d-block text-center m-auto"href="<?php echo get_bloginfo('template_url');?>/resume.pdf" target="_blank">View my resumé</a>
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
                    <h3 class="d-block mb-0">More About Chantal</h3>
                    <p class="d-block py-4">Recently engaged with On Site Opera, American Lyric Theater and New York Choral Society, Chantal is an inspiring, versatile soprano poised to make an impact in the classical world.</p>
                    <div class="btn bio-modal-trigger"><span>Read my bio</span> <span class="arrow"></span></div>
                </div>
            </div>
        </div>
    </div>
    <div class="page-section py-5 px-3">
        <div class="page-section__inner container">
            <div class="page-section__title d-md-flex align-items-center">
                <h2>Upcoming Events</h2>
            </div>
            <div class="event-list pt-4">
                <ul class="pl-0">
                    <li class="d-flex justify-content-between mb-3 py-2">
                        <div class="list-col">
                            <div class="event__date col-md text-center text-uppercase px-0"><span>Nov</span><br/><span>17 - 18</span></div>
                        </div> 
                        <div class="list-col col-md d-md-flex justify-content-between">
                            <div class="event__info col-md mb-4 mb-md-0">
                                <span>Angel of Many Signs with New York Choral Society</span><span>New York City, NY</span>
                            </div> 
                            <div class="event__link justify-md-self-end ml-2 ml-md-0">
                                <a class="btn" href="https://nychoral.org/event/angel-of-many-signs/" target="_blank"><span>Get tickets</span> <span class="arrow"></span></a>
                            </div>
                        </div>
                    </li>
                    <li class="d-flex justify-content-between mb-3 py-2">
                        <div class="list-col">
                            <div class="event__date col-md text-center text-uppercase pl-0"><span>Dec</span><br/><span>9</span></div>
                        </div> 
                        <div class="list-col col-md d-md-flex justify-content-between">
                            <div class="event__info col-md mb-4 mb-md-0">
                                <span>French Chanson: Songs of Love, Hope and Fidelity</span><span>Philadelphia, PA</span>
                            </div> 
                            <div class="event__link justify-md-self-end ml-2 ml-md-0">
                                <a class="btn" href="https://www.eventbrite.com/e/743127132257?aff=oddtdtcreator" target="_blank"><span>Get tickets</span> <span class="arrow"></span></a>
                            </div>
                        </div>
                    </li>
                    <li class="d-flex justify-content-between mb-3 py-2">
                        <div class="list-col">
                            <div class="event__date col-md text-center text-uppercase pl-0"><span>Dec</span><br/><span>17</span></div>
                        </div> 
                        <div class="list-col col-md d-md-flex justify-content-between">
                            <div class="event__info col-md mb-4 mb-md-0">
                                <span>Soprano Soloist at Salem Baptist Church of Abington</span><span>Philadelphia, PA</span>
                            </div> 
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="page-section py-5 px-3">
        <div class="page-section__inner container">
            <div class="page-section__title d-md-flex align-items-center justify-content-between">
                <h2>Videos</h2>
                <a href="https://www.youtube.com/channel/UCCjE9XP8xI8OVPfhSjn9OvQ" target="_blank" class="cta--text">Check out my YouTube channel</a>
            </div>
            <div class="page-section__content container px-0 py-5 d-md-flex">
                <div class="content-item col-md px-0" data-content="U2GZFo95umI" data-title="E Susanna non vien....dove sono from Mozart's Le Nozze di Figaro"></div>
                <div class="content-item col-md px-0 px-md-3" data-content="SsM_bUN4CAM" data-title="Hold Fast to Dreams"></div>
                <div class="content-item col-md px-0" data-content="qagG8DnAu7Y" data-title="Si, mi chiamano Mimi from Puccini's La Boheme"></div>
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
            <div class="close-icon"></div>
        </div>
        <div class="about-container">
            <div class="about-info text-white">
                <p>Chantal is a Haitian-American soprano originally from Chicago, Illinois. She received her B.A. in Music and Theology from Fordham University, and her Master of Music from the University of Texas at Austin. She has been a young artist and performed with several companies such as Chicago Summer Opera, AIMs in Graz and Gilbert and Sullivan of Austin. She was a finalist in the NANM’s Marian Anderson Vocal Award Competition, 3rd place winner in Harlem Opera Theater’s Vocal Competition and a semi-finalist with Young Concert Artists in New York City. In May 2021, Chantal completed her Professional Studies Diploma at Mannes School of Music and was awarded the prestigious Richard F. Gold Career Grant by the Shoshana Foundation. In August 2021, she premiered “Joy’s Aria” from HL Freeman’s opera, American Romance with On Site Opera. In 2022, she was a finalist in the Gerda Lissner International Vocal Competition and semi-finalist in the Joy in Singing competition. Up next, she will perform as the soprano soloist in New York Choral Society’s Angel of Many Signs Concert.</p>
                <a href="<?php echo get_bloginfo('template_url');?>/resume.pdf" target="_blank" class="btn"><span>View my resumé</span> <span class="arrow"></span></a>
            </div>
        </div>
        <div class="video-container"></div>
    </div>
<?php get_footer();?>
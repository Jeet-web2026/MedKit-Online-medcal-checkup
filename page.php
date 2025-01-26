<?php
get_header();
while (have_posts()) {
    the_post();
?>
    <section class="banner-content px-4">
        <div class="container-fluid p-5">
            <div class="row bg-primary p-5">
                <div class="col-md-6">
                    <h2 class="text-light fs-1 font-500"><?php echo the_title(); ?></h2>
                    <p class="text-capitalize text-light mt-2">home <i class="fa-solid fa-angles-right"></i> <?php echo the_title(); ?></p>
                </div>
                <div class="col-md-6"></div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card mb-3 border-0 bg-transparent shadow">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="<?php echo get_theme_file_uri('/images/about-us.jpg') ?>" class="page-image" alt="page-image">
                            </div>
                            <div class="col-md-8 px-3">
                                <div class="card-body">
                                    <p class="card-text"><?php echo the_content(); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
}
get_footer();
?>
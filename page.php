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
                    <div class="card mb-3 border-0 bg-transparent">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="..." class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text"><?php echo the_content();?></p>
                                    <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
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
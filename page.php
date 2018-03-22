<?php get_header(); ?>

<main class="page-content text-left">
    <?php if(have_posts()) : ?>
		<?php while(have_posts()) : the_post(); ?>
        <section class="section-full">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <?php the_title( '<h1>', '</h1>' ); ?>
                        <p></p>
                        <ol class="breadcrumb">
                            <li><a href="">Home</a></li>
                            <li class="active"><?php the_title(); ?></li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-sm">
            <div class="container">
                <?php the_title( '<h2>', '</h2>' ); ?>
                <hr>
                <div class="row">
                    <div class="col-sm-12 inset-4">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
        </section>
        <?php endwhile; ?>
    <?php else : ?>
        <div class="alert alert-info">
        <strong>No content in this loop</strong>
        </div>
    <?php endif; ?>
</main>
<?php get_footer(); ?>
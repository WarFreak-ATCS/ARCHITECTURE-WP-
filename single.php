<?php get_header()?>
<?php while(have_posts()) : the_post()?>

    <section class="project__banner">
      <div class="container">
        <div class="project__banner__wrapper">
          <h1><?php the_title()?></h1>
          <img src="<?php the_field('thumbnail')?>" class="single_img" alt=""/>
        </div>
      </div>
    </section>

    <section class="project__blurb">
      <div class="container">
        <div class="project__container">
          <h2>
            <?php the_field('description')?>
          </h2>
        </div>
      </div>
    </section>

    <section class="project__about">
      <div class="project__container">
        <div class="project__about__grid">
          <h3>About Project</h3>
          <div class="project__about__content">
            <?php the_content()?>
          </div>
        </div>
      </div>
    </section>

    <?php get_template_part('partials/part' , 'quote')?>


<?php endwhile; ?>
<?php get_footer()?>
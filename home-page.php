<?php
    /*
    Template Name: Home page
    */
    ?>


<?php get_header();?>   <!--  Tells WordPress to include header.php -->
         <section class="container-fluid aboutbg text-center">
            <div class="container">
                <h2> GAMES &amp; LEVEL DESIGNER </h2>
                <p class="particle">  and particle wizard</p>
                <p class="about-text"> My name is josh Whitkin. I’m a professional with more than 7 years of industry experience in Games Design, Level design, Scripting and Visual Effects. What makes me passionate about games is the combination of technology and creativity, and how multiple disciplines come together to create an interactive experience. Whether I'm designing for puzzle games, 2D platformers or 3D environments. I always tell a story.</p>
            </div><!-- container-->
            <div class="blocker"></div>
        </section>

<section class="container-fluid aboutbg text-center">

<div class="container">
<h2><?php the_field('titleforaboutme'); ?></h2><!--  custom field for the aboutme content-->
<p class="particle"><?php the_field('subtitleforaboutme'); ?></p>
<p class="about-text"><?php the_field('paragraphforaboutme'); ?></p>

</div> <!-- container -->

</section>


<section class="container-fluid articlesbg">
<div class="container">
    <h3 class="text-center"><?php the_field('titleforarticles'); ?></h3>
    LATEST ARTICLES</h3>
    <div class="row">

<div class="col-md-4">
<img class="img-fluid" alt=“portait” src="<?php the_field('articleimage');?>">
<h4 class="article-title"><?php the_field('articletitle'); ?></h4>
< <p class="date" ><?php the_field('articledate'); ?></p>
<p class="article-p"><?php the_field('articleexcerpt'); ?></p>
<a href="<?php the_field('readmore'); ?>" class="readmore">CONTINUE READING</a>
</div>

<div class="col-md-4">
<img class="img-fluid" alt=“portait” src="<?php the_field('articleimagemiddle');?>">
<h4 class="article-title"><?php the_field('articletitlemiddle'); ?></h4>
< <p class="date" ><?php the_field('articledatemiddle'); ?></p>
<p class="article-p"><?php the_field('articleexcerptmiddle'); ?></p>
<a href="<?php the_field('readmoremiddle'); ?>" class="readmore">CONTINUE READING</a>
</div>

<div class="col-md-4">
<img class="img-fluid" alt=“portait” src="<?php the_field('articleimageright');?>">
<h4 class="article-title"><?php the_field('articletitleright'); ?></h4>
< <p class="date" ><?php the_field('articledateright'); ?></p>
<p class="article-p"><?php the_field('articleexcerptright'); ?></p>
<a href="<?php the_field('readmoreright'); ?>" class="readmore">CONTINUE READING</a>
</div>

    </div> <!-- row -->
</div> <!-- container -->
</section>
<?php get_footer();?>   <!-- Tells WordPress to include footer.php   -->
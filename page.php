<?php get_header(); ?>
 
<div class="container single-post">
    <?php
    if(have_posts( ))
    {
      the_post(); ?>

    <div class="row">

        <div class="col-md-4">
         
           <h2> <?php  the_title( ); ?> </h2> 
           <p><?php  the_content( ); ?></p>

        </div>

    </div>

    <?php
        }
?>

</div>

<?php get_footer(); ?>
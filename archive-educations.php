<?php get_header(); ?>

<div class="container">
    <?php
    if(have_posts( ))
    {
        while (have_posts()){
            the_post(); ?>

    <div class="row post">

        <div class="col-md-6">
           <a href="<?php echo get_the_permalink(); ?>">
             <h2> <?php  the_title( ); ?> </h2> 
        </a>
        </div>

        <div class='col-md-6'>
            <h4> <?php echo (get_field("collage")); ?> </h4>
        </div>
    
    </div>

    <?php
        }
    }
?>

</div>

<?php get_footer(); ?>
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
            <li class="list-group-item"> <?php  the_title( ); ?> </li> 
        </a>
        </div>

        <div class="col-md-6">
             <h2> <?php echo (get_field("name")); ?> </h2> 
        </div>

    </div>
       
    <?php
        }
    }
?>
  
</div>

<?php get_footer(); ?>
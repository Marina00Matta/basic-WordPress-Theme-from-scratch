<?php get_header(); ?>

<div class="container single-post">
<?php
    if(have_posts( ))
    {
      the_post(); ?>

    <div class="row">

        <div class="col-md-6">
         
           <h2> <?php  the_title( ); ?> </h2> 
           <h4> <?php echo ('Skill Name : '.get_field("name")); ?> </h4>
           <h4> <?php echo ("Skill Type : ".get_field("skill_type")[0]); ?> </h4>
           <h4> <?php echo ('Level : '.get_field("rate").'%'); ?> </h4>

        </div>

    </div>

    <?php
        }
?>

</div>
<?php get_footer(); ?>
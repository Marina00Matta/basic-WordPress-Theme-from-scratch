<?php get_header(); ?>

<div class="container single-post">
<?php
    if(have_posts( ))
    {
      the_post(); ?>

    <div class="row">

        <div class="col-md-6">
         
           <h2> <?php  the_title( ); ?> </h2> 
           <h4> <?php echo ("Collage : ".get_field("collage")); ?> </h4>
           <h4> <?php echo ("Degree : ".get_field("degree")); ?> </h4>
            <h4> <?php echo ('GPA : '.get_field("gpa"). '%'); ?> </h4>
            <h4> <?php echo ("Study : ".get_field("field_of_study")); ?> </h4>
            <h4> <?php echo ('Graduation Year : ' .get_field("graduation_year")); ?> </h4>

        </div>

    </div>

    <?php
        }
?>

</div>
<?php get_footer(); ?>
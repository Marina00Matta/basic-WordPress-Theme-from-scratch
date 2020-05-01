<?php get_header(); ?>

<div class="container single-post">
<?php
    if(have_posts( ))
    {
      the_post(); ?>

    <div class="row">

        <div class="col-md-6">
         
           <h2> <?php  the_title( ); ?> </h2> 
           <h4> <?php echo ("Company Name : ".get_field("company_name")); ?> </h4>
           <h4> <?php echo ("Role : ".get_field("role")); ?> </h4>
           <h4> <?php echo ("Start Date : ".get_field("start_date")); ?> </h4>

        </div>

    </div>

    <?php
        }
?>

</div>
<?php get_footer(); ?>
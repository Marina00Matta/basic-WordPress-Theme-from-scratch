
<?php get_header(); ?>

<section class="About">

<div class="container">
 
    <?php
     $args=array(
         'post_type' => 'page' );

     $query = new wp_Query( $args );
    if($query->have_posts())
    {
        $query->the_post(); ?>
    <div class="row">
        
        <div class="col-md-9">
           <h2> <?php  the_content(); ?> </h2> 
        </div>

    </div>

    <?php
        }
    
?>
</div>
</section>

<section class="skills">

<div class="container">

    <?php
     $args=array(
         'post_type' => 'work_experiences' );

     $query = new wp_Query( $args );
    if($query->have_posts( ))
    {
        while ($query->have_posts( )){
            $query->the_post(); ?>
        <div class="row">
        <h4>Some work Experiences :</h4>
        </div>
    <div class="row">
        
        <div class="col-md-6">
        <a href="<?php echo get_the_permalink(); ?>">
           <h2> <?php  the_title( ); ?> </h2> 
        </a>
        </div>

    </div>

    <?php
        }
    }
?>
</div>
</section>
       
<?php get_footer(); ?>
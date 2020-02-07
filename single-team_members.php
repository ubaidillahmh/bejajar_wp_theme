<?php
    /**
     * The template for displaying all single posts
     *
     * Template Name: Team Member
     * 
     * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
     *
     * @package Testing
     */
?>

<?php get_header(); ?>
<div class="col-sm-8 blog-main">
    <?php
        
        if ( have_posts() ) { 
        while ( have_posts() ) : the_post();
        // get_template_part( 'template-parts/content', get_post_type() );
        $id         = get_the_ID(  );
        $position   = get_post_meta($id, 'member_position', true);
        $email      = get_post_meta($id, 'member_email', true);
        $website    = get_post_meta($id, 'member_website', true); 
        $image      = get_post_meta($id, 'member_image', true);
        // var_dump($position);die;
    ?>
    <div class="grid-item">
        <?php if($image != null) 
        {
        ?>
            <p><img href="<?php echo $image; ?>" alt="Photo Profile"/></p>
        <?php 
        }
        ?>
        <p><?php echo the_title(); ?></p>
        
        <p><?php echo $email ?></p>
        <p><?php echo $website ?></p>
    </div>
    <?php endwhile; 
    } ?>
    
</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
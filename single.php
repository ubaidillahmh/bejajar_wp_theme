<?php /* Template Name: Team Member Template */ ?>

<?php get_header(); ?>
<div class="col-sm-8 blog-main">
    <?php
        $args = array('post_type' => 'team_members');
        $query = new WP_Query($args);
        // var_dump(json_encode($query));
        $i = 1;
        while ( $query->have_posts() ) : $query->the_post();
        $id         = $query->post->ID;
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
        <p><?php echo $position; ?></p>
        <p><?php echo $email ?></p>
        <p><?php echo $website ?></p>
    </div>
    <?php endwhile; ?>
    
</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
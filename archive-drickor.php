<?php

get_header();

?>

<div>
    <?php if (have_posts()) : while (have_posts()) : the_post();
    ?>
    <div>
        <?php
                echo the_title();
                ?>
        <a href="<?php echo the_permalink(); ?>">Checka</a>
        <?php
                ?>
    </div>
    <?php
        endwhile;
    else : ?>
    <p>Sorry, no posts found.
    <p></p>
    <?php endif; ?>
</div>



<?php
get_footer();
?>
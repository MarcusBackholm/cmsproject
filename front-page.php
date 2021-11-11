<?php
$title = get_field("title");
$description = get_field("description");
get_header();
?>
<div>
    <?php
    echo $title;
    ?>
</div>
<div>
    <?php
    echo $description;
    ?>
</div>
<?php
get_footer();
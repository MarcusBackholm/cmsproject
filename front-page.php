<?php
$title = get_field("title");
$description = get_field("description");
$picture = get_field("picture");
$linkURL = get_field("link");
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
<div>
    <a href="<?php echo $linkURL; ?>">klicka här för att spela med mig</a>
</div>
<img src="<?php echo $picture; ?>" alt="">

<?php
get_footer();
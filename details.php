
<?php
//this is to show the active tab for now it's feeds page
    $home = false;
    $fds = "active";
    $about = false;
?>

<?php include('config/db.php'); ?>

<?php 
if(isset($_GET['feed_id'])){
		
    // escape sql chars
    $feed_id = mysqli_real_escape_string($conn, $_GET['feed_id']);

    // make sql
    $sql = " 
        SELECT * FROM feed 
        INNER JOIN  Author ON feed.author_id = Author.author_id
        INNER JOIN  Feed_class ON  feed.feedClass_id = Feed_class.feedClass_id
        WHERE feed_id = $feed_id
    ;";

    // get the query result
    $result = mysqli_query($conn, $sql);

    // fetch result in array format
    $feeds = mysqli_fetch_assoc($result);

    mysqli_free_result($result);
    mysqli_close($conn);

}
?>
<?php
require('./templates/header.php');
?>
<section>
    <h4 class="_title">Feeds</h4>
    <div>

    <?php print_r($feeds); ?>
    

    </div>
</section
<?php
require('./templates/footer.php');
?>

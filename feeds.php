
<?php
//this is to show the active tab for now it's feeds page
    $home = false;
    $fds = "active";
    $about = false;
?>
<?php 
// connect to databases
$conn = mysqli_connect('localhost','moses','lastking7','hultech');

if (!$conn) {
	echo "connection error" . mysqli_connect_error();
}
// write query for feeds
$sql = "SELECT feed.title, feed.imgsrc, feed.details, Author.author_name, Feed_class.class_name, feed.create_at \n"

    . "    FROM feed JOIN Author JOIN Feed_class \n"

    . "    ON feed.author_id = Author.author_id AND feed.feedClass_id = \n"

    . "    Feed_class.feedClass_id ORDER BY feed.create_at;";

//make aquery
$result = mysqli_query($conn,$sql);

//fetch data as arrrays
$feeds = mysqli_fetch_all($result, MYSQLI_ASSOC);

//free results
mysqli_free_result($result);

// close connection
mysqli_close($conn);
?>
<?php
require('./templates/header.php');
?>
<section>
    <h4 class="_title">Feeds</h4>
    <div>

    <?php print_r($feeds); ?>
    <?php foreach ($feeds as $feed) { ?>
        
            <div class="post_card">
                <h1> <?php echo htmlspecialchars($feed['title']); ?> </h1>
            </div>

    <?php } ?>

    </div>
</section
<?php
require('./templates/footer.php');
?>

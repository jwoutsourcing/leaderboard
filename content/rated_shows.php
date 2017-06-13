
<?php

    $con = @new mysqli('localhost', 'root', '', 'rating');
        if ($con->connect_error) {
                echo "Error: " . $con->connect_error;
                    exit();
}
$query = "SELECT COUNT(show_id) as votes , show_id, ROUND(SUM(vote),1) as Rating, ROUND(AVG(vote),1) as Average"
        . " FROM rating group BY show_id "
        . "ORDER BY Average DESC , votes DESC";
$result = mysqli_query($con,$query); ?>


<div class="row shows">

<?php while($row = mysqli_fetch_array($result)) :?>

    <?php $xml = simplexml_load_file("shows.xml") or die("Error: Cannot create object"); ?>
 
        <?php foreach($xml->children() as $children):?>
            <?php if($row['show_id'] == $children->id) :?>
    
    <div class = "col-sm-12 pull-right">
    <div class = "col-sm-3 show">
        
        <div class = "show_img center-align">
            <h3><img src = "<?php echo $children->image_path;?>" class = "img-responsive" alt = "No Content"></h3>
        </div>
        <div class = "col-sm-12 show_name">
            <h4 class = "centre-align name-size"> <?php echo $children->name;?> </h4>
        </div>
        <div class = "col-sm-12 show_name">
            <h4 class = "centre-align name-size"> Total Score: <?php echo $row['Rating'];?> </h4> 
            <h4 class = "centre-align name-size"> Total Votes: <?php echo $row['votes'];?> </h4>
            <h4 class = "centre-align name-size"> <strong> Average Rating: <?php echo $row['Average'];?> </strong></h4>
        </div>
    </div> 
        
            <?php endif; ?>
        <?php endforeach; ?>   
</div>

<?php endwhile;?>
</div>

<?php mysqli_close($con);?>


 
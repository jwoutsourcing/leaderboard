<!DOCTYPE html>

<?php include_once('rating.php');?>

<?php $xml = simplexml_load_file("shows.xml") or die("Error: Cannot create object"); ?>


<div class = "row shows">
    
<?php foreach($xml->children() as $children):?>
    <div class = "col-sm-2 show">
        <div class = "show_img center-align">
            <h3> <img src = "<?php echo $children->image_path;?>" class = "img-responsive" alt = "No Content"> </h3>
        </div>
        <div class = "col-sm-12 show_name">
            <h4 class = "centre-align name-size"> <?php echo $children->name;?> </h4>
        </div><div>
        <input value = "0" type = "number" class = "rating" min = 0 max = 5 
               step = 0.1 data-size = "xs" data-stars = "5" show_id = "<?php echo $children->id;?>">
        </div>
    </div>
<?php endforeach;?>  
</div>

<script type="text/javascript">
        $(function(){
               $('.rating').on('rating.change', function(event, value, caption) {
                show_id = $(this).attr('show_id');
                $.ajax({
                  url: "rating.php",
                  dataType: "json",
                  data: {vote:value, show_id:show_id, type:'save'},
                  success: function( data ) {
                     alert("rating saved");
                  },
              error: function(e) {
                console.log(e);
              },
              timeout: 30000  
            });
              });
        });
</script>



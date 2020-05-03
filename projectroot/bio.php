<?
include("retwis.php");
if (!isLoggedIn()) {
    header("Location: index.php");
    exit;
}
include("header.php");
$r = redisLink();
?>

<script>
function changeBackground() {
    var bg = document.getElementById("color").value;
    console.log(bg);
    document.body.style.background = bg;
}
</script>  
<div id="">


Set the background color:
<form action="savebg.php" method="post">
<div>
<input id="color"  name="color" type="color" value="<?php echo $r->HGET('user:'.$User['id'], 'background')?>"
    onchange="changeBackground()">
</div> 
<input type="submit" value="Save">
</form>




<?
include("footer.php")
?>
<?
include("retwis.php");
if (!isLoggedIn()) {
    header("Location: index.php");
    exit;
}
include("header.php");
?>
<h2>Timeline</h2>
<i>Latest registered users</i><br>
<?
showLastUsers();
?>

<div>
<i>Last 20 messages from people you follow in Chronological order! amazing!</i><br>
<?
showFollowedUserPosts();
?>

</div>

<br>

<div onclick="toggleDiv('latest50')">
    <i>(click to see) Latest 50 messages from users aroud the world!</i><br>
    <div id="latest50" style="display: none;">
    <?
    showUserPosts(-1,0,50);
    include("footer.php")
    ?>
    </div>
</div>
<script>
function toggleDiv(id) {
    var div = document.getElementById(id);
    div.style.display = div.style.display == "none" ? "block" : "none";
}
</script>
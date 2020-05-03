<?
include("retwis.php");

if (!isLoggedIn()) {
    header("Location:index.php");
    exit;
}

$r = redisLink();

//If Post Exists

if($r->EXISTS('post:'.gt('post'))){
    $post =  $r->HGETALL('post:'.gt('post'));

    // If Post owned by user
    if($post['user_id'] == $User['id']){
        $r->DEL('post:'.gt('post'));
        header("Location:index.php");
        exit;
    } else {
        goback('Cant delete this');
    }
} else {
    goback('Cant delete this');
}
exit;
?>

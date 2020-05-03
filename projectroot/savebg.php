<?
include("retwis.php");

if (!isLoggedIn()) {
    header("Location:index.php");
    exit;
}

$r = redisLink();


if (gt('color')){
    // if(!$r->HEXISTS('user:'.$User['id'], 'background')){
        $r->HSET('user:'.$User['id'], 'background', gt('color'));
        header("Location:bio.php");
    // }
    exit;
}
header("Location:bio.php");
exit;
?>

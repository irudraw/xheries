<?php
if($_SERVER['HTTP_X_REQUESTED_WITH'] == "zg.tv" OR $_SERVER['HTTP_X_REQUESTED_WITH'] == "com.zgtv.zgrafic"){
?>
estas en una zona no segura
<?php
}
else{
?>

<script src="http://zgrafic.com/list/code/android.js"></script>

<?php
}
?>


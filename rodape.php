<?php
$e = explode("/", $_SERVER['PHP_SELF']);
if (end($e) == basename(__FILE__))
    header('location: index');
?>
<div style="width: 100%; background-color: #111; color: #fff;">
    <p>Este será o rodapé</p>
</div>
<script src="js/jQuery.js"></script>
<script src="js/functions.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js"></script>
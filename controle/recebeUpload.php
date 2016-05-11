<?php
print_r($_FILES);


if(move_uploaded_file($_FILES["arquivos"]["tmp_name"], 'upload/'.$_FILES["arquivos"]['name']))
        echo 'upload feito';

?>

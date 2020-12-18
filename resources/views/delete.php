<?php

if (is_dir(HS_TMP_FOLDER) ) {
    $files = glob(HS_TMP_FOLDER.'*');
    foreach($files as $file){
        if(is_file($file)) {
            unlink($file); // delete file
        }
    }
    echo "<center>Les fichiers temporaires ont été supprimé avec succès.</center>";
}

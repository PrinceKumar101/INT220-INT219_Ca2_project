<?php  
function render_blocks_ntimes($html_block, $n){
    for($i=0;$i<$n;$i++){
        echo $html_block;
    }
}



?>
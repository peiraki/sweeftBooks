<?php        
    if(isset($_POST['button2'])){
        $mainBook = 'book1';
    }else if(isset($_POST['button3'])){
        $mainBook = 'book2';
    }else if(isset($_POST['button4'])){
        $mainBook = 'book3';
    }else {
        $mainBook = 'book1';
    }
?>
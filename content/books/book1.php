<?php 

    $book1 = array(
        'Foreword'  => 3,
        'Preface' => 6,
        'Introduc' => 9,
        'chapter 1'  => 11,
        'chapter 2' => 22,
        'chapter 3' => 29,
        'chapter 4'  => 42,
        'chapter 5' => 75,
        'chapter 6' => 121
    );
    $book1About = array(
        '<p>The Project Gutenberg EBook of The "Genius", by Theodore Dreiser</p>',
        '<p>This eBook is for the use of anyone anywhere at no cost and with
        almost no restrictions whatsoever.  You may copy it, give it away or
        re-use it under the terms of the Project Gutenberg License included
        with this eBook or online at www.gutenberg.net</p>
        <p>Title: The "Genius"</p>',
        '<p>Author: Theodore Dreiser</p>',
        '<p>Release Date: March 30, 2010 [EBook #31824]</p>',
        '<p>Language: English</p>',
        '<p>*** START OF THIS PROJECT GUTENBERG EBOOK THE "GENIUS" ***</p>'
    );

    
    
    $book3= array(
        'Foreword'  => 3,
        'Preface' => 6,
        'Introduc' => 9,
        'chapter 1'  => 13,
        'chapter 2' => 27,
        'chapter 3' => 42,
        'chapter 4'  => 69,
        'chapter 5' => 95,
        'chapter 6' => 144
    );

    $chapters = $book1;


    if(isset($_POST['submit'])){
       $chapters = $book2;
    }

?>
    



<div class="book">
    <div class="leftPage">
        <h3>Table of Contents</h3>
        <ul class="tableOfBook">

            <?php     
                foreach ($chapters as $key => $value) {
                    ?>
                    <li>
                            <span class="chapters">
                                <i><?= $key ?></i>
                                <i><?= $value ?></i>
                            </span>
                    </li>
            <?php
                }
            ?>
        </ul>
    </div>
    <div class="rightPage">
        <h1>The Genius</h1>

        <?php     
                foreach ($book1About as $value) {
                    ?>
                    <p><?= $value ?></p>
            <?php
                }
            ?>
    </div>
</div>

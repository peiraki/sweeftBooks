<?php
    $book3 = array(
            'Inspiration Behind the Book'  => 3,
            'Chapter Summaries' => 12,
            'chapter 1' => 20,
            'chapter 2'  => 38,
            'chapter 3' => 77,
            'chapter 4' => 97

    );
    $book3About = array(
        '<p>Napoleon Hill, then a young special investigator for a nationally known business magazine, was sent to interview Andrew Carnegie. During that interview, Carnegie slyly dropped a hint of a certain master power he used—a magic law of the human mind, a little-known psychological principle—that was amazing in its power. Carnegie suggested to Hill that upon that principle he could build the philosophy of all personal success—whether it be measured in terms of money, power, position, prestige, influence, or the accumulation of wealth. That part of the interview never made it into Hill’s magazine, but it did launch the young author on a research journey that lasted twenty years. Think and Grow Rich is the result of Hill’s study of over five hundred self-made millionaires—a condensed, accessible explanation of his Law of Success philosophy, which includes thirteen steps to riches (financial, emotional, and spiritual).</p>'
    );

    $chapters = $book3;

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
        <h1>Think and Grow</h1>

        <?php     
                foreach ($book3About as $value) {
                    ?>
                    <p><?= $value ?></p>
            <?php
                }
            ?>
    </div>
</div>
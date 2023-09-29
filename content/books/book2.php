<?php
    $book2 = array(
            'Company'  => 3,
            'Insights' => 22,
            'Acceleration' => 29,
            'Careers'  => 42,
            'Projects' => 75,
            'Services' => 121,
            'Contact' => 152
    );
    $book2About = array(
        '<p>1200+ Employees Team who creates constant digital motion</p>',
        '<p>Physical Offices in 14 Countries Worldwide</p>',
        '<p>Apply to our acceleration program. Achieve your career goals.</p>',
        '<p>#LIFEATSWEEFT ACHIEVE MORE AT GEORGIA’S FASTEST GROWING TECH COMPANY</p>',
        '<p>We’re passionate about finding exceptional solutions for out clients, get to know us a little better by browsing through our recent work below.</p>',
        '<p>Our services are tailored to your digital needs.</p>',
        '<p>Start more than a job - Join our team of 1200+ Developers</p>'
    );

    $chapters = $book2;

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
        <h1>Sweeft Digital</h1>

        <?php     
                foreach ($book2About as $value) {
                    ?>
                    <p><?= $value ?></p>
            <?php
                }
            ?>
    </div>
</div>
<?php if ( have_posts() ) : while ( have_posts() ) :    the_post(); ?>

<div class="mainDisplayContainer">

    <div class="displayContainer mySlides">



        <img src="">

    </div>

<!--    <div class="displayContainer mySlides">-->
<!--        <img src="" >-->
<!---->
<!--    </div>-->
<!---->
<!--    <div class="displayContainer mySlides">-->
<!--        <img src="" >-->
<!---->
<!--    </div>-->
<!---->
<!--    <div class="displayContainer mySlides">-->
<!--        <img src="">-->
<!---->
<!--    </div>-->
<!---->
<!--    <div class="displayContainer mySlides">-->
<!--        <img src="" >-->

    </div>

    <button class="displayLeft" onclick="plusDivs(-1)">&#10094;</button>
    <button class="displayRight" onclick="plusDivs(1)">&#10095;</button>

</div>

<?php endwhile; ?>
    <!-- post navigation -->
<?php else: ?>
    <!-- no posts found -->
<?php endif; ?>
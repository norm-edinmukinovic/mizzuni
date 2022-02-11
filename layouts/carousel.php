




<div class="carousel">

    <div class="carousel__header">
        <div class="carousel__header-title headline__medium">
            <?php echo $data['carousel__title']?>
        </div>

        <div class="carousel__header-arrow">
            <img onclick="slide('left')" id="carouselLeftBtn" class="back" src="../../assetst/icons/pupup_arrow.svg" alt="">
            <img onclick="slide()" id="carouselRightBtn" class="next" src="../../assetst/icons/pupup_arrow.svg" alt="">
        </div>
    </div>




    <section id="container">
    <div id="posts">

    <div id="posts__card">

        <div id="posts__card-image">
        <img src="<?php echo $data['first_card_image']?>" alt="">

            <div id="posts__card-image--filter">
                <img src="../../assetst/icons/config_black.svg" alt="">
                <div id="textXS_light">
                    anpassen
                </div>
            </div>
        </div>

        <div id="posts__card-info">
            <div id="posts__card-info--name">
                <div class="title base-small_medium">
                    <?php echo $data['first_card_title'] ?> </div>

                <div class="subtitle textXS_light">
                    <?php echo $data['first_card_subtitle']?>
                </div>
            </div>

            <div id="posts__card-info--price">
                <div class="price base-small_light">
                    <?php echo $data['first_card_price']?></div>

                <div class="includes textXS_light">
                <?php echo $data['first_card_includes']?>
                </div>
            </div>
        </div>

    </div>

    <div id="posts__card">
        <div id="posts__card-image">
        <img src="<?php echo $data['second_card_image'] ?>" alt="">

            <div id="posts__card-image--filter">
                <img src="../../assetst/icons/config_white.svg" alt="">
                <div id="textXS_light">
                    anpassen
                </div>
            </div>
        </div>

        <div id="posts__card-info">
            <div id="posts__card-info--name">
                <div class="title base-small_medium">
                <?php echo $data['second_card_title'] ?>
                </div>

                <div class="subtitle textXS_light">
                <?php echo $data['second_card_subtitle'] ?>
                </div>
            </div>

            <div id="posts__card-info--price">
                <div class="price base-small_light">
                <?php echo $data['second_card_price'] ?>
                </div>
                <div class="includes textXS_light">
                <?php echo $data['second_card_includes'] ?>
                </div>
            </div>
        </div>

    </div>


    <div id="posts__card">
        <div id="posts__card-image">
        <img src="<?php echo $data['third_card_image']?> " alt="">

            <div id="posts__card-image--filter">
                <img src="../../assetst/icons/config_black.svg" alt="">
                <div id="textXS_light">
                    anpassen
                </div>
            </div>
        </div>

        <div id="posts__card-info">
            <div id="posts__card-info--name">
                <div class="title base-small_medium">
                <?php echo $data['third_card_title']?>
                </div>
                <div class="subtitle textXS_light">
                <?php echo $data['third_card_subtitle']?>
                </div>
            </div>

            <div id="posts__card-info--price">
                <div class="price base-small_light">
                <?php echo $data['third_card_price']?>
                </div>
                <div class="includes textXS_light">
                <?php echo $data['third_card_includes']?>
                </div>
            </div>
        </div>

    </div>


    <div id="posts__card">
        <div id="posts__card-image">
        <img src="<?php echo $data['fourth_card_image'] ?>" alt="">

            <div id="posts__card-image--filter">
                <img src="../../assetst/icons/config_white.svg" alt="">
                <div id="textXS_light">
                    anpassen
                </div>
            </div>
        </div>

        <div id="posts__card-info">
            <div id="posts__card-info--name">
                <div class="title base-small_medium">
                <?php echo $data['fourth_card_title'] ?>
                </div>
                <div class="subtitle textXS_light">
                <?php echo $data['fourth_card_subtitle'] ?>
                </div>
            </div>

            <div id="posts__card-info--price">
                <div class="price base-small_light">
                <?php echo $data['fourth_card_price'] ?>
                </div>
                <div class="includes textXS_light">
                <?php echo $data['fourth_card_includes'] ?>
                </div>
            </div>
        </div>

    </div>


    <div id="posts__card">
        <div id="posts__card-image">
        <img src="<?php echo $data['fifth_card_image'] ?>" alt="">

            <div id="posts__card-image--filter">
                <img src="../../assetst/icons/config_black.svg" alt="">
                <div id="textXS_light">
                    anpassen
                </div>
            </div>
        </div>

        <div id="posts__card-info">
            <div id="posts__card-info--name">
                <div class="title base-small_medium">
                <?php echo $data['fifth_card_title'] ?>
                </div>
                <div class="subtitle textXS_light">
                <?php echo $data['fifth_card_subtitle'] ?>
                </div>
            </div>

            <div id="posts__card-info--price">
                <div class="price base-small_light">
                <?php echo $data['fifth_card_price'] ?>
                </div>
                <div class="includes textXS_light">
                <?php echo $data['fifth_card_includes'] ?>
                </div>
            </div>
        </div>

    </div>


    <div id="posts__card">
        <div id="posts__card-image">
        <img src="<?php echo $data['sixth_card_image']?>" alt="">

            <div id="posts__card-image--filter">
                <img src="../../assetst/icons/config_white.svg" alt="">
                <div id="textXS_light">
                    anpassen
                </div>
            </div>
        </div>

        <div id="posts__card-info">
            <div id="posts__card-info--name">
                <div class="title base-small_medium">
                <?php echo $data['sixth_card_title']?>
                </div>
                <div class="subtitle textXS_light">
                <?php echo $data['sixth_card_subtitle']?>
                </div>
            </div>

            <div id="posts__card-info--price">
                <div class="price base-small_light">
                <?php echo $data['sixth_card_price']?>
                </div>
                <div class="includes textXS_light">
                <?php echo $data['sixth_card_includes']?>
                </div>
            </div>
        </div>


    </div>


    
</div>
</section>





<script>
    function slide(direction){
    var container = document.getElementById('container');
    scrollCompleted = 0;
    var slideVar = setInterval(function(){
        if(direction == 'left'){
            container.scrollLeft -= 50;
        } else {
            container.scrollLeft += 50;
        }
        scrollCompleted += 10;
        if(scrollCompleted >= 100){
            window.clearInterval(slideVar);
        }
    }, 50);
}
</script>

</div>


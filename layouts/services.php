<div class="services">
    <div class="services__subtitle overline">
        <?php echo $data['subtitle-text'] ?>
    </div>

    <div class="services__title headline__medium">
        <?php echo $data['title-text'] ?>
    </div>

    <div class="services__grid">

        <div class="services__grid-card">
            <div class="services__grid-card--image">
            <img src="<?php echo $data['first_card_image'] ?>" alt="">

            <div class="base_light">
            <a href="#">    
            Online-Beratung <img src="../../assetst/icons/arrow.svg" alt="">
            </a>
            </div>
            </div>

            <div class="services__grid-card--text base-small_light">
            <?php echo $data['first_card_text'] ?>
            </div>


        </div>

        <div class="services__grid-card">
            <div class="services__grid-card--image">
            <img src="<?php echo $data['second_card_image'] ?>" alt="">

            <div class="base_light">
            <a href="#">    
            Muster bestellen <img src="../../assetst/icons/arrow.svg" alt="">
            </a>
            </div>
            </div>

            <div class="services__grid-card--text base-small_light">
            <?php echo $data['second_card_text'] ?>
            </div>

        </div>

        <div class="services__grid-card">
            <div class="services__grid-card--image">
            <img src="<?php echo $data['third_card_image'] ?>" alt="">

            <div class="base_light">
            <a href="#">    
            Produktberatung <img src="../../assetst/icons/arrow.svg" alt="">
            </a>
            </div>
            </div>

            <div class="services__grid-card--text base-small_light">
            <?php echo $data['third_card_text'] ?>
            </div>

        </div>

    </div>



</div>
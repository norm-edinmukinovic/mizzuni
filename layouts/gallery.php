<div class="gallery">

    <div class="gallery__overline overline" style="color:#7C7269;">
        <?php echo $data['overline__text']?>
    </div>

    <div class="gallery__title headline__medium" >
        <?php echo $data['overline__title']?>
    </div>

    <div class="gallery__grid">

        <div class="gallery__grid-large">
        <img src="<?php echo $data['grid-image-wohnzimmer']?>" alt="">

                <div class="gallery__grid-large--button base_light">
                <a href="#">Wohnzimmer <img class="button-arrow"src="../../assetst/icons/arrow.svg" alt=""></a>  
                </div>
        </div>

        <div class="gallery__grid-small">

            <div class="gallery__grid-small--one">
            <img src="<?php echo $data['grid-image-schlafzimmer'] ?>" alt="">

                <div class="gallery__grid-small--one--button base_light">
                <a href="#"> Schlafzimmer <img class="button-arrow"src="../../assetst/icons/arrow.svg" alt=""></a>
                </div>
            </div>

            <div class="gallery__grid-small--one">
            <img src="<?php echo $data['grid-image-homeoffice'] ?>" alt="">

                <div class="gallery__grid-small--one--button base_light">
                <a href="#"> Home-Office <img class="button-arrow"src="../../assetst/icons/arrow.svg" alt=""></a>
                </div>
            </div>

        </div>

    </div>


    <div class="gallery__mehr headline_light">
    <a href="#"> <span class="underline">Mehr Räume</span>  <img src="../../assetst/icons/arrow.svg" alt=""></a>
    </div>



</div>
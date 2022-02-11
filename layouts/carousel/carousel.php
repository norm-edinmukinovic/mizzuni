<div class="carousel">

    <div class="carousel__header">
        <div class="carousel__header-title headline__medium">
            Unsere Topseller
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
        <img src="../../assetst/images/carousel1.jpg" alt="">

            <div id="posts__card-image--filter">
                <img src="../../assetst/icons/config_black.svg" alt="">
                <div id="textXS_light">
                    anpassen
                </div>
            </div>
        </div>

        <div id="posts__card-info">
            <div id="posts__card-info--name">
                <div class="title base-small_light">Fen</div>
                <div class="subtitle textXS_light">NowyStyl</div>
            </div>

            <div id="posts__card-info--price">
                <div class="price base-small_light">ab €123,00</div>
                <div class="includes textXS_light">inkl.MwSt.</div>
            </div>
        </div>

    </div>

    <div id="posts__card">
        <div id="posts__card-image">
        <img src="../../assetst/images/carousel2.jpg" alt="">

            <div id="posts__card-image--filter">
                <img src="../../assetst/icons/config_white.svg" alt="">
                <div id="textXS_light">
                    anpassen
                </div>
            </div>
        </div>

        <div id="posts__card-info">
            <div id="posts__card-info--name">
                <div class="title base-small_light">Fen</div>
                <div class="subtitle textXS_light">NowyStyl</div>
            </div>

            <div id="posts__card-info--price">
                <div class="price base-small_light">ab €123,00</div>
                <div class="includes textXS_light">inkl.MwSt.</div>
            </div>
        </div>

    </div>


    <div id="posts__card">
        <div id="posts__card-image">
        <img src="../../assetst/images/carousel1.jpg" alt="">

            <div id="posts__card-image--filter">
                <img src="../../assetst/icons/config_black.svg" alt="">
                <div id="textXS_light">
                    anpassen
                </div>
            </div>
        </div>

        <div id="posts__card-info">
            <div id="posts__card-info--name">
                <div class="title base-small_light">Fen</div>
                <div class="subtitle textXS_light">NowyStyl</div>
            </div>

            <div id="posts__card-info--price">
                <div class="price base-small_light">ab €123,00</div>
                <div class="includes textXS_light">inkl.MwSt.</div>
            </div>
        </div>

    </div>


    <div id="posts__card">
        <div id="posts__card-image">
        <img src="../../assetst/images/carousel2.jpg" alt="">

            <div id="posts__card-image--filter">
                <img src="../../assetst/icons/config_white.svg" alt="">
                <div id="textXS_light">
                    anpassen
                </div>
            </div>
        </div>

        <div id="posts__card-info">
            <div id="posts__card-info--name">
                <div class="title base-small_light">Fen</div>
                <div class="subtitle textXS_light">NowyStyl</div>
            </div>

            <div id="posts__card-info--price">
                <div class="price base-small_light">ab €123,00</div>
                <div class="includes textXS_light">inkl.MwSt.</div>
            </div>
        </div>

    </div>


    <div id="posts__card">
        <div id="posts__card-image">
        <img src="../../assetst/images/carousel1.jpg" alt="">

            <div id="posts__card-image--filter">
                <img src="../../assetst/icons/config_black.svg" alt="">
                <div id="textXS_light">
                    anpassen
                </div>
            </div>
        </div>

        <div id="posts__card-info">
            <div id="posts__card-info--name">
                <div class="title base-small_light">Fen</div>
                <div class="subtitle textXS_light">NowyStyl</div>
            </div>

            <div id="posts__card-info--price">
                <div class="price base-small_light">ab €123,00</div>
                <div class="includes textXS_light">inkl.MwSt.</div>
            </div>
        </div>

    </div>


    <div id="posts__card">
        <div id="posts__card-image">
        <img src="../../assetst/images/carousel2.jpg" alt="">

            <div id="posts__card-image--filter">
                <img src="../../assetst/icons/config_white.svg" alt="">
                <div id="textXS_light">
                    anpassen
                </div>
            </div>
        </div>

        <div id="posts__card-info">
            <div id="posts__card-info--name">
                <div class="title base-small_light">Fen</div>
                <div class="subtitle textXS_light">NowyStyl</div>
            </div>

            <div id="posts__card-info--price">
                <div class="price base-small_light">ab €123,00</div>
                <div class="includes textXS_light">inkl.MwSt.</div>
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


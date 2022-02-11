<?php 

include "./includes/header.php";


getLayout("intro", array(
    'intro__headline' => 'Die Eichholtz <br> Signature Collection',
    'intro__image' => './assetst/images/image.jpg'
));




getLayout("gallery", array(
    'overline__text' => 'Overline text',
    'overline__title' => 'Raumideen für Ihr Zuhase',


    'grid-image-wohnzimmer' => './assetst/images/gallery1.jpg',
    'grid-image-schlafzimmer' => './assetst/images/gallery2.jpg',
    'grid-image-homeoffice' => './assetst/images/gallery3.jpg',


));




getLayout("carousel", array(

    'carousel__title' => 'Unsere Topseller',

    'first_card_image' => './assetst/images/carousel1.jpg',
    'first_card_title' => 'Fen',
    'first_card_subtitle' => 'NowyStyl',
    'first_card_price' => 'ab €123,00',
    'first_card_includes' => 'inkl. MwSt.',

    'second_card_image' => './assetst/images/carousel2.jpg',
    'second_card_title' => 'eleven 861',
    'second_card_subtitle' => 'Alias',
    'second_card_price' => 'ab €123,00',
    'second_card_includes' => 'inkl. MwSt.',

    'third_card_image' => './assetst/images/carousel1.jpg',
    'third_card_title' => 'Fen',
    'third_card_subtitle' => 'NowyStyl',
    'third_card_price' => 'ab €123,00',
    'third_card_includes' => 'inkl. MwSt.',

    'fourth_card_image' => './assetst/images/carousel2.jpg',
    'fourth_card_title' => 'eleven 8661',
    'fourth_card_subtitle' => 'Alias',
    'fourth_card_price' => 'ab €123,00',
    'fourth_card_includes' => 'inkl. MwSt.',

    'fifth_card_image' => './assetst/images/carousel1.jpg',
    'fifth_card_title' => 'Fen',
    'fifth_card_subtitle' => 'NewyStyl',
    'fifth_card_price' => 'ab €123,00',
    'fifth_card_includes' => 'inkl. MwSt.',

    'sixth_card_image' => './assetst/images/carousel2.jpg',
    'sixth_card_title' => 'eleven 861',
    'sixth_card_subtitle' => 'Alias',
    'sixth_card_price' => 'ab €123,00',
    'sixth_card_includes' => 'inkl. MwSt.',
));

getLayout('unterschied', array(

    'unterschied_title' => 'Der Mizzuni-Unterschied',

    'first_card_image' => './assetst/icons/table.svg',
    'first_card_title' => 'Hochwertige und fair produzierte Möbel',
    'first_card_text' => 'von ausgewählten Marken',

    'second_card_image' => './assetst/icons/sofa.svg',
    'second_card_title' => 'Persönlich, schnell und kompetent beraten',
    'second_card_text' => 'Wir sind für Sie da!',

    'third_card_image' => './assetst/icons/shelf.svg',
    'third_card_title' => 'Auf den Millimeter genau geliefert (und montiert)',
    'third_card_text' => 'Lieferoptionen ansehen',

));


getLayout('shop', array(
    'background_image' => './assetst/images/shop_img.jpg',

    'first_tooltip_title' => 'Okme Table',
    'first_tooltip_subtitle' => 'Alias',

    'second_tooltip_title' => 'Okme Lamp',
    'second_tooltip_subtitle' => 'Alias',

    'third_tooltip_title' => 'Okme Sofa',
    'third_tooltip_subtitle' => 'Alias',

    'fourth_tooltip_title' => 'Okme Bowl',
    'fourth_tooltip_subtitle' => 'Alias',
));



getLayout('services', array(

    'subtitle-text' => 'Services',
    'title-text' => 'Wir helfen Ihnen gerne weiter',

    'first_card_image' => './assetst/images/card1.svg',
    'first_card_text' => 'Weit hinten, hinter den Wortbergen, fern der Länder Vokalien und Konsonantien leben die Blindtexte.',

    'second_card_image' => './assetst/images/card2.svg',
    'second_card_text' => 'Ein kleines Bächlein namens Duden fließt durch ihren Ort und versorgt sie mit den nötigen Regelialien.',

    'third_card_image' => './assetst/images/card3.svg',
    'third_card_text' => 'Es ist ein paradiesmatisches Land, in dem einem gebratene Satzteile in den Mund fliegen.',

));

include "./includes/footer.php";


?>

<?php

if(isset($_GET['r'])) {

    if($_GET['r'] == 0) {

        $description = "V PŘÍZEMÍ: najdete vybavenou kuchyni, dvě ložnice - 2x pro 3 osoby, obývací pokoj s přímým přístupem do pergoly a do zahrady. Koupelna + vana + WC.

            Topení v celém objektu obstarává tepelné čerpadlo. Možnost využití přistýlek. Pes povolen - malé až střední plemeno na dotaz.

            <strong>Uvnitř celého objektu není povoleno kouřit</strong>";

        $title = "PŘÍZEMÍ";

        $roomCssName = "room_img";

        $directory = "./img/rooms/room_zero";

        $roomsArray = array("<b>Vchod:</b>", "<b>Koupelna:</b>", "<b>Kuchyně:</b>", "<b>Obývací pokoj:</b>",  "<b>První ložnice:</b>", "<b>Druhá ložnice:</b>");

        $roomThingsArray = array(" chodba, botník, komora", " vana se sprchou, umyvadlo, WC", " vybavená kuchyňská linka, mikrovlnná trouba, elektrický sporák 4 plotny + trouba, varná konvice, lednice s mrazákem, jídelní stůl, lavice, židle",

            " sedací souprava, stolek, televize, vstup na prosklenou pergolu s posezením", " 1x dvojlůžko, 1x jednolůžko, 2x skřín, televize", " 1x dvojlůžko, 1x jednolůžko, skříň");

        $defmax = 9;

    } else if($_GET['r'] == 1) {

        $description = "V APARTMÁNU č.1: - je v patře, jsou tam 2 samostatné pokoje po 2 osobách. Z obývacího pokoje je vchod na terasu, společnou s apartmánem č. 3. Apartmán se nachází v patře.

            Topení v celém objektu obstarává tepelné čerpadlo. Možnost využití přistýlek. Pes povolen - malé až střední plemeno na dotaz.

            <strong>Uvnitř celého objektu není povoleno kouřit</strong>";

        $title = "Apartmán č. 1";

        $roomCssName = "room_img";

        $directory = "./img/rooms/room_one";

        $roomsArray = array("<b>První ložnice:</b>", "<b>Druhá ložnice:</b>", "<b>Kuchyňka:</b>", "<b>Obývák:</b>", "<b>Koupelna:</b>");

        $roomThingsArray = array(" 1x dvojlůžko, skřín", " 1x dvojlůžko, skříň", " vybavená kuchyňská linka, EL sporák, El trouba, lednice, rychlovarná konvice, mikrovlnná trouba, jídelní stůl, židle",

            " Rozkládací pohovka, 1x křeslo, skříňka, stolek, TV, WIFI na pokoji, Z obýváku východ na společnou terásku ven.", " sprchový kout, umyvadlo, zrcadlo, WC");

        $defmax = 9;

        } else if($_GET['r'] == 2) {

        $description = "APARTMÁN č. 2: je v patře. Je pro dvě osoby. Je zde 1 dvojlůžko, televize a rozkládací pohovka. Je v prvním patře.  

            Topení v celém objektu obstarává tepelné čerpadlo. Možnost využití přistýlek. Pes povolen - malé až střední plemeno na dotaz.

            <strong>Uvnitř celého objektu není povoleno kouřit</strong>";

        $title = "Apartmán č. 2";

        $directory = "./img/rooms/room_two";

        $roomCssName = "room_second_img";

        $roomsArray = array("<b>První pokoj:</b>", "<b>Kuchyňka:</b>", "<b>Koupelna:</b>");

        $roomThingsArray = array(" 1x dvojlůžko, rozkládací pohovka, skříňka, stolek, TV", " vybavená kuchyňská linka, EL dvouplotýnka, mikrovlnná trouba, vestavná lednička, rychlovarná konvice, jídelní stůl, židle", " sprchový kout, umyvadlo, zrcadlo, WC");

        $defmax = 8;

    } else if($_GET['r'] == 3) {

        $description = "APARTMÁN č. 3: je v patře. obsahuje 2x jednolůžko, 2 skříně a televizi. V obývacím pokoji najdete vstup na společnou terasu. Apartmán je v 1. patře.

            Topení v celém objektu obstarává tepelné čerpadlo.  Pes povolen - malé až střední plemeno na dotaz.

            <strong>Uvnitř celého objektu není povoleno kouřit</strong>";

        $title = "Apartmán č. 3";

        $roomCssName = "room_third_img";

        $directory = "./img/rooms/room_three";

        $roomsArray = array("<b>První pokoj:</b>", "<b>Kuchyňka:</b>", "<b>Koupelna:</b>");

        $roomThingsArray = array("1x dvojlůžko, 2x skříňka, TV, Z obýváku východ na společnou terásku ven.", " vybavená kuchyňská linka, EL dvouplotýnka, mikrovlnná trouba, vestavná lednička, rychlovarná konvice, jídelní stůl, židle", " sprchový kout, umyvadlo, zrcadlo, WC");

        $defmax = 9;

    }

}

?>

<div class="left room_div">

    <section class="room_select_section">

            <select onchange="ChangeRoomBySelect();" id="room_select" class="room_select">

                <?php

                $rooms = array("PŘÍZEMÍ", "Apartmán č. 1", "Apartmán č. 2", "Apartmán č. 3");

                $roomIndex = array_search($title, $rooms);

                $roomForeachIndex = 0;
                foreach ($rooms as $room) { 

                    $selected = $roomForeachIndex === $roomIndex ? " selected" : "";

                    echo "<option $selected>$room</option>";

                    $roomForeachIndex++;

                }

                ?>



            </select>

    </section>

    <div class="room_gallery_div" id="room_gallery_div">

        <?php $imageId = 0; ?>

        <div class="room_gallery">

            <?php

            $images = glob($directory."/*.jpg");

            $imagesCount = count($images) - 1;

            natsort($images);

            $max = $defmax;

            foreach ($images as $image) {

                if($max == 0)

                    break;

                $max--;

                $imageIdString = explode("$directory"."/img", $image);

                $imageIdArray = explode(".jpg", $imageIdString[1]);

                $imageId = $imageIdArray[0];

                echo "<div class='gallery_item $roomCssName--$imageId'>";

                echo "<img src='". $image ."' onclick='OpenImg($imageId,\"$directory\", $imagesCount)' alt='Fotka číslo $imageId'>";

                echo "</div>";

            }

            ?>

        </div>

        <p class="show_more" onclick="OpenImg(<?php echo "$defmax, '$directory',$imagesCount";?>);">Ukázat další obrázky</p>

    </div>

    <section class="room_info">

        <p><?php echo $description; ?></p>

        <h2>Místnosti</h2>

        <ul>

            <?php

            for ($i = 0; $i < count($roomsArray); $i++) {

                echo "<li>$roomsArray[$i]$roomThingsArray[$i]</li>";

            }

            ?>

        </ul>

    </section>

</div>
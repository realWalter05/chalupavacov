<article class="home_text">
    <h1>Chalupa a její okolí</h1>
    <p>
        Nabízíme ubytování v nově zrekonstruovaném dvoupodlažním domku na okraji obce Vacov - Vlkonice. Může se stát vaší branou po cestách za poznáváním krás Šumavy.
        V&nbsp;okolí je možné provozovat jak letní (cykloturistika, koupání, turistika, letní sporty, rybaření, houbaření), tak i zimní sportovní aktivity (běžecké i sjezdové lyžování). Dvoupodlažní rodinný dům je posazen do krásné šumavské krajiny cca 12 km severozápadně od města Vimperk.
        Prostředí je ideální pro rekreaci v každém ročním období, a to pro kvalitní značené cyklotrasy i nedaleké lyžařské ski areály.
        Objekt je ideálním výchozím místem pro Vaše toulky šumavskou přírodou a jejími zajímavostmi. U domu je k dispozici oplocená zahrada s možností příjemného posezení v prosklené uzavíratelné verandě a gril. Zastavěná plocha objektu je 120 m2.
        Mimo hlavní sezónu je možno v případě ubytování menšího počtu osob využít pouze část objektu. V roce 2017 byla rekonstrukce celého horního podlaží.
    </p>
</article>
<article class="gallery_article">
    <div class="gallery_div">
        <?php $imageId = 0; ?>
        <div class="residence_gallery">
                <?php
                $directory = "./img/residence";
                $images = glob($directory."/*.jpg");
                $imagesCount = count($images) - 1;
                natsort($images);
                $max = 12;
                foreach ($images as $image) {
                    if($max == 0)
                        break;
                    $max--;
                    $imageIdString = explode("$directory"."/img", $image);
                    $imageIdArray = explode(".jpg", $imageIdString[1]);
                    $imageId = $imageIdArray[0];
                    echo "<div class='gallery_item gallery_item--$imageId'>";
                    echo "<div onclick='OpenImg($imageId,\"$directory\", $imagesCount)'></div>";
                    echo "<img src='". $image ."' alt='Fotka číslo $imageId'>";
                    echo "</div>";
                }
                ?>
        </div>
    </div>
</article>
<article>
    <h2 class="interesting_text_title">Zajímavosti v okolí</h2>
    <section class="interesting_places_section">
        <ul>
            <li>
                <a href="http://www.javornik.cz" target="_blank">Javorník</a>
                <p>Turisticky zajímavé místo.</p>
            </li>
            <li>
                <a href="https://www.npsumava.cz" target="_blank">Národní park Šumava</a>
                <p>Webové stránky národního parku.</p>
            </li>
            <li>
                <a href="http://www.lazadov.cz" target="_blank">Lyžařský areál Zadov</a>
                <p>Stránky areálu</p>
            </li>
            <li>
                <a href="http://bazen.horazdovice.cz/" target="_blank">Bazén Horažďovice</a>
                <p>Stránky bazénu.</p>
            </li>
            <li>
                <a href="https://www.sumavanet.cz" target="_blank">Šumavanet</a>
                <p>Informační portál.</p>
            </li>
            <li>
                <a href="https://www.hrad-rabi.eu/cs" target="_blank">Hrad Rabí</a>
                <p>Stránky hradu.</p>
            </li>
            <li>
                <a href="http://www.biofarmavojetice.cz" target="_blank">Biofarma Vojetice</a>
                <p>Biofarma s hospůdkou U Štěpána (znáte z Ano Šéfe!).</p>
            </li>
        </ul>
        <ul>
            <a href="https://www.kasperk.cz" target="_blank">Hrad Kašperk</a>
            <p>Stránky hradu.</p>
            </li>
            <li>
                <a href="http://muzeum.sumava.net/" target="_blank">Muzeum Šumavy</a>
                <p>Kašperské Hory, Sušice, Železná Ruda, Dobrá Voda.</p>
            </li>
            <li>
                <a href="http://www.hradstrakonice.cz/hrad/" target="_blank">Hrad Strakonice</a>
                <p>Stránky hradu.</p>
            </li>
            <li>
                <a href="https://www.vacov.cz" target="_blank">Obec Vacov</a>
                <p>Oficiální stránky obce.</p>
            <li>
                <a href="http://rozhledny.webzdarma.cz/churanov.htm" target="_blank">Rozhledna Churáňov</a>
                <p>Stránky rozhledny.</p>
            </li>
            <li>
                <a href="https://www.zamek-vimperk.cz/cs" target="_blank">Zámek Vimperk</a>
                <p>Stránky zámku.</p>
            </li>
            <li>
                <a href="http://www.muzeum-st.cz/cs/mlyn-hoslovice/" target="_blank">Mlýn Hoslovice</a>
                <p>Informace o mlýnu.</p>
            </li>
        </ul>
    </section>
</article>
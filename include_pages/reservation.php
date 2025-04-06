<?php

mb_internal_encoding("UTF-8");

$name = isset($_GET['n']) ? $_GET['n'] : "";

$fromDate = isset($_GET['fd'])  ? $_GET['fd'] : "";

$toDate = isset($_GET['td']) ? $_GET['td'] : "";

$email = isset($_GET['e']) ? $_GET['e'] : "";

$phoneNumber =isset($_GET['pn']) ? $_GET['pn'] : "";

$numberPerson = isset($_GET['np']) ? $_GET['np'] : "";

$addMessage = isset($_GET['am']) ? $_GET['am'] : "";

$subject = isset($_GET['s']) ? $_GET['s'] : "";

$message = isset($_GET['m']) ? $_GET['m'] : "";

$contactEmail = isset($_GET['ce']) ? $_GET['ce'] : "";

$contactName = isset($_GET['cn']) ? $_GET['cn'] : "";



$formMessage = isset($_GET['f']) ? $_GET['f'] : "";;

?>

<section>

    <?php

    if(isset($_GET['success'])) {

        $formMessage = "<p class='green_text align_text'>Email odeslán.</p>";

    }

    echo "<p class='red_text align_text'>$formMessage</p>";

    ?>

    <article class="forms_article">

       <form id="form_reservation" method="post" action="./includes/reservation_process.php">

            <table>

                <caption><h1>Rezervace</h1></caption>

                <tr>

                    <td colspan="2">Vaše jméno*<input name="name" type="text" value="<?= htmlspecialchars($name) ?>"/></td>

                </tr>

                <tr>

                    <td colspan="2">

                        Vyberte si apartmán*

                        <select name="apartment">

                            <option>Přízemí</option>

                            <option>Apartmán 1</option>

                            <option>Apartmán 2</option>

                            <option>Apartmán 3</option>

                        </select>

                    </td>

                </tr>

                <tr>

                    <td>Od*<input name="fromDate" type="date" value="<?= htmlspecialchars($fromDate) ?>"/></td>

                    <td>Do*<input name="toDate" type="date" value="<?= htmlspecialchars($toDate) ?>"/></td>

                </tr>

                <tr>

                    <td>

                        Email*

                        <input name="email" type="email" value="<?= htmlspecialchars($email) ?>"/></td>

                    <td>

                        Telefonní číslo*

                        <input name="phoneNumber" type="tel" value="<?= htmlspecialchars($phoneNumber) ?>"/>

                    </td>

                </tr>

                <tr>

                    <td>Počet osob*<input name="numberPerson" type="number" value="<?= htmlspecialchars($numberPerson) ?>"/></td>

                    <td>Dnešní rok*<input type="number" name="year" placeholder="Ochrana proti spamu"/></td>

                </tr>

                <tr>

                    <td colspan="2">

                        Dodatečná zpráva

                        <textarea name="addMessage"><?= htmlspecialchars($addMessage) ?></textarea>

                    </td>

                </tr>

                <tr>

                    <td class="ie_button"></td>

                    <td><input name="reservationSubmit" type="submit" value="Rezervovat"></td>

                </tr>

            </table>

       </form>

        <form id="form_reservation" method="post" action="./includes/reservation_process.php">

            <table>

                <caption><h1>Kontakt</h1></caption>

                <tr>

                    <td colspan="2">Vaše jméno*<input name="contactName" type="text" value="<?= htmlspecialchars($contactName) ?>"/></td>

                </tr>

                <tr>

                    <td colspan="2">

                        Email*

                        <input name="contactEmail" type="email" value="<?= htmlspecialchars($contactEmail) ?>"/>

                    </td>

                </tr>

                <tr>

                    <td>Předmět zprávy*<input name="subject" type="text" value="<?= htmlspecialchars($subject) ?>"/></td>

                    <td>Dnešní rok*<input name="year" type="number" placeholder="Ochrana proti spamu"/></td>

                </tr>

                <tr>

                    <td colspan="2">

                         Zpráva*

                        <textarea name="message"><?= htmlspecialchars($message) ?></textarea>

                    </td>

                </tr>

                <tr>

                    <td class="ie_button"></td>

                    <td><input name="contactSubmit" type="submit" value="Odeslat"></td>

                </tr>

            </table>

        </form>

    </article>

    <article id="apartmentCalendarDiv">
        <h2>Kalendář obsazenosti</h2>
        <div>Zobrazit pro apartmán: 
            <select onChange="ShowCalendar(this);">
                <option selected value='https://calendar.google.com/calendar/embed?height=600&wkst=2&ctz=Europe%2FPrague&showPrint=0&hl=cs&showTabs=0&showCalendars=0&showTz=0&src=N2VkZmQyZDExNjlkMzU1ZDc0ZTJlOWNkMzBhMTJhOTFhYmEwOGQ0OTU3NjQzZGY1YjE0OWE4ZDNmY2RlNTNkNkBncm91cC5jYWxlbmRhci5nb29nbGUuY29t&color=%23E67C73'>Přízemí</option>
                <option value='https://calendar.google.com/calendar/embed?height=600&wkst=2&ctz=Europe%2FPrague&showPrint=0&showTabs=0&showCalendars=0&showTz=0&hl=cs&src=YjAxZDYwODUwMmU2NzdmOTExOWIwOGQ4YTViZjliNDY1M2VhMzNjYTM2OTUyM2JlZmRlYmRkYjhhYjNjNjNlMEBncm91cC5jYWxlbmRhci5nb29nbGUuY29t&color=%239E69AF'>Apartmán 1</option>
                <option value='https://calendar.google.com/calendar/embed?height=600&wkst=2&ctz=Europe%2FPrague&showPrint=0&showTabs=0&showCalendars=0&showTz=0&hl=cs&src=MmI2MjM4ZmVhNzRkMzEzYzBjMDgxYzk4MjBiNTZlNzAyZmYzMGRiMmMzN2U2MzhmYmQwZjZhNGRmNTIxNjA4M0Bncm91cC5jYWxlbmRhci5nb29nbGUuY29t&color=%23D81B60'>Apartmán 2</option>
                <option value='https://calendar.google.com/calendar/embed?height=600&wkst=2&ctz=Europe%2FPrague&showPrint=0&showTabs=0&showCalendars=0&showTz=0&hl=cs&src=OTVkZGNiMDQ4MTIzZTY4YjFhMDc4YmFmMWIwZWJhOGYzOTJiMzNkNjZlMDJjNjg2YWVkNGJkYTA5YTAzZGQzNUBncm91cC5jYWxlbmRhci5nb29nbGUuY29t&color=%23F09300'>Apartmán 3</option>
            </select>
        </div>
        <iframe id="iframeCalendar" style="margin: 2rem 0 2rem 0;" src="https://calendar.google.com/calendar/embed?height=600&wkst=2&ctz=Europe%2FPrague&showPrint=0&hl=cs&showTabs=0&showCalendars=0&showTz=0&src=N2VkZmQyZDExNjlkMzU1ZDc0ZTJlOWNkMzBhMTJhOTFhYmEwOGQ0OTU3NjQzZGY1YjE0OWE4ZDNmY2RlNTNkNkBncm91cC5jYWxlbmRhci5nb29nbGUuY29t&color=%23E67C73"  width="100%" height="500" frameborder="0" scrolling="no"></iframe>    
    <article>

    <h2>Platební podmínky</h2>
    <p>

    Rezervace je platná po zaplacení zálohy ve výši 50% předem na účet 3472490267/0100 nebo složenkou.

    Doplatek do výše celkové ceny bude uhrazen 14 dní před příjezdem na výše uvedený účet nebo složenkou.

    Při zahájení pobytu je po dohodě s majitelem objektu vybírána vratná kauce 3000,- Kč, která bude vrácena při bezchybném předání  objektu zpět majiteli.

    Hosté uhradí pronajimateli místní poplatek obecnímu úřadu (15Kč na osobu a den) proti vydanému potvrzení

    </p>

    <h2>Storno podmínky</h2>

        <ul class="nice_full_page_ul">

            <li>30 dní před nástupem ... 50% ze zálohy</li>

            <li>14 dní před nástupem ... 100% ze zálohy</li>

        </ul>

    <h2>Podmínky ubytování</h2>

    <ol class="rules">

        <li><strong>Uvnitř celého objektu není povoleno kouřit.</strong></li>

        <li>Host užívá apartmán sjednanou dobu. Příjezd a odjezd dle dohody.</li>

        <li><strong>V případě, že host nepřijede do apartmánu ve sjednaný den a čas, zaniká mu nárok na ubytování bez náhrady.</strong></li>

        <li><strong>Host se musí prokázat platným dokladem totožnosti</strong>i (občanským průkazem, cestovním pasem). Identifikační údaje z dokladu totožnosti zanese provozovatel do knihy ubytovaných hostů.</li>

        <li>Host má právo užívat apartmán a jeho zařízení, zádveří hlavního vchodu do objektu, hostům vyhrazenou místnost pro uskladnění kol/lyží v&nbsp;přízemí garáže, hostům vyhrazený prostor pro venkovní posezení na pozemku příslušejícímu k&nbsp;objektu, parkovací stání a přístupové cesty k objektu. Host nesmí vstupovat do jiných než výše uvedených prostor.</li>

        <li>Neodkládejte žádné věci přímo na přímotopy nebo v jejich těsné blízkosti z důvodu nebezpečí vzniku požáru.</li>

        <li><strong>Host plně zodpovídá za způsobené škody. Jestliže ztrátí klíče od apartmánu, je host povinen plně uhradit veškeré náklady s tím spojené.</strong></li>

        <li>Provozovatel nezodpovídá hostu za škody, které nezavinil.</li>

        <li>Návštěvy v apartmánu mohou hosté přijímat pouze se souhlasem provozovatele.</li>

        <li>Host je povinen při odchodu zregulovat topení, uzavřít okna a dveře, zhasnout světla, vypnout elektrospotřebiče, přesvědčit se, zda jsou uzavřeny vodovodní uzávěry, uzamknout apartmán a vchodové dveře do objektu. Host je povinen při odchodu z místnosti pro uskladnění kol a lyží zhasnout světlo a místnost uzavřít.</li>

        <li>Od 21. do 7. hodiny host dodržuje noční klid.</li>

        <li>Host je plně zodpovědný za své děti.</li>

        <li>Psi a jiná zvířata mohou do objektu až po dohodě s provozovatelem</li>

        <li>Host je povinen dodržovat všechna ustanovení tohoto ubytovacího řádu. V případě, že je host hrubým způsobem poruší, má provozovatel právo ubytovací služby okamžitě ukončit bez nároku hosta na vrácení poplatků za pobyt.</li>

    </ol>

    <h2>Všeobecné platební podmínky</h2>

    <p>

        Všeobecné podmínky upravují vzájemné smluvní vztahy mezi zákazníkem a provozovatelem služeb. Smluvní vztahy jsou v souladu s příslušnými ustanovenými obecně závazných právních předpisů České republiky.

        Podmínky jsou pro všechny zúčastněné strany závazné.

    </p>

    <ul class="terms_ul">

        <li>

            <h4 onclick="ShowTerm(0)">Vznik smluvního vztahu - objednání a rezervace <i class="arrow down"></i></h4>

            <ul class="term_zero none">

                <li>Na základě telefonické nebo písemné objednávky (i faxem nebo e-mailem) majitelé pensionu /dále jen pension/ blokují zájemci o ubytování místo v pensionu po předem dohodnutou dobu.</li>

                <li>Zákazník oznámí  termín pobytu, počet osob /včetně dětí a datum jejich narození/, jméno a adresu objednavatele, jeho telefonní číslo a podpis objednavatele.</li>

                <li>Po odsouhlasení termínu pronajímatelem, zaplatí dohodnutou zálohu. Zákazník zaplacením stvrzuje, že těmto podmínkám rozumí a v plném rozsahu je respektuje.</li>

            </ul>

        </li>

        <li>

            <h4 onclick="ShowTerm(1)">Cena a její úhrada <i class="arrow down"></i></h4>

            <ul class="term_one none">

                <li>Cena za ubytování a služby (polopenze atd.) jsou cenami sjednanými č. 526/1990 Sb. dohodou mezi zákazníkem a pensionem v souladu se zákonem.</li>

                <li>Zákazník předem dohodnutým způsobem (poštovní průvodkou, fakturou, převodem na účet, atd.) do 5-ti pracovních dnů zašlete na adresu  zálohu na pobyt ve výši 50%  z celkové ceny.</li>

                <li>Po zaplacení zálohy potvrdí pension písemně (faxem, emailem) rezervování termínu.</li>

                <li>Plná cena pobytu musí být uhrazena nejpozději v den  nástupu (není-li s penzionem písemně dohodnuto jinak).</li>

                <li>Není-li cena pobytu uhrazena v termínu je pobyt bez oznámení a náhrady stornován. V takovém případě zákazník hradí storno poplatky podle odstavce III.</li>

                <li>V případě neuhrazení dohodnuté zálohy a doplatku v termínu je pobyt automaticky zrušen bez náhrady.</li>

            </ul>

        </li>

        <li>

            <h4 onclick="ShowTerm(2)">Odstoupení od smlouvy a stornovací poplatky <i class="arrow down"></i></h4>

            <ul class="term_two none">

                <li>Zákazník má právo kdykoli před započtením pobytu a udání důvodu od smlouvy odstoupit, vždy je však potřeba písemného vyrozumění doporučeným dopisem. Zrušení smlouvy nastává okamžikem převzetí tohoto dopisu.</li>

                <li>

                    Dojde-li k odstoupení od smlouvy před začátkem pobytu je zákazník povinen uhradit následující stornopoplatky:

                    <ul>

                        <li>do 35 dní před nástupem 30%, nejméně však 300 Kč / za osobu</li>

                        <li>do 34 - 15 dní 60%, nejméně však 500 Kč</li>

                        <li>do 14 - 1 den 100%.</li>

                    </ul>

                </li>

                <li>Storno poplatek se vypočte ze zaplacené zálohy.<br/>

                    <strong>Poznámka:</strong> Počítají se vždy jednotlivé kalendářní dny a to takto:

                    1. počítaný den je den doručení doporučeného dopisu.

                    Poslední den je den plánovaného začátku pobytu.

                </li>

                <li>Vyžadujeme zaplacení storno poplatků i v případě závažných rodinných důvodů. Pro tento případ doporučujeme sjednat kvalitní pojištění proti storno poplatkům a nárokovat náhradu na pojišťovně!</li>

                <li>Nepřízeň počasí není důvodem ke stornování pobytu.</li>

                <li>V každém případě je zákazník oprávněn stanovit vhodného náhradníka, který přebírá jeho práva a povinnosti. Oznámení se musí poslat písemně a neprodleně.</li>

                <li>Storno je odečteno od zaplacené zálohy nebo z celkové ceny.

                    Vyúčtováno a vráceno nejpozději do 20 dnů.</li>

            </ul>

        </li>

        <li>

            <h4 onclick="ShowTerm(3)">Pojištění <i class="arrow down"></i></h4>

            <ul class="term_three none">

                <li>Do ceny pobytu není zahrnuto pojištění.</li>

                <li>Zákazníkovi se doporučuje sjednat u vybraného pojišťovacího ústavu v ČR "Úrazové pojištění pro cesty a pobyt v tuzemsku včetně nákladů souvisejících se zrušením pobytu".</li>

            </ul>

        </li>

        <li>

            <h4 onclick="ShowTerm(4)">Přechodná a závěrečná ustanovení <i class="arrow down"></i></h4>

            <ul class="term_four none">

                <li>Platnost těchto podmínek může být mezi zákazníkem a ubytovatelem individuálně upravena výlučně písemnou formou.</li>

                <li>Zákazník zaplacením stvrzuje, že těmto podmínkám rozumí a v plném rozsahu je respektuje.</li>

                <li>Majitelé  nemají zájem vydělávat na storno poplatcích, ale naopak mají eminentní zájem na plné spokojenosti svých hostů, jak s ubytováním tak i s nabízenými službami.</li>

            </ul>

        </li>

    </ul>

</section>
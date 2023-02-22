<?php

mb_internal_encoding("UTF-8");

$name = isset($_POST['name']) ? $_POST['name'] : "";

$fromDate = isset($_POST['fromDate'])  ? $_POST['fromDate'] : "";

$toDate = isset($_POST['toDate']) ? $_POST['toDate'] : "";

$email = isset($_POST['email']) ? $_POST['email'] : "";

$phoneNumber =isset($_POST['phoneNumber']) ? $_POST['phoneNumber'] : "";

$numberPerson = isset($_POST['numberPerson']) ? $_POST['numberPerson'] : "";

$addMessage = isset($_POST['addMessage']) ? $_POST['addMessage'] : "";

$subject = isset($_POST['subject']) ? $_POST['subject'] : "";

$message = isset($_POST['message']) ? $_POST['message'] : "";

$contactEmail = isset($_POST['contactEmail']) ? $_POST['contactEmail'] : "";

$contactName = isset($_POST['contactName']) ? $_POST['contactName'] : "";

$apartment = isset($_POST['apartment']) ? $_POST['apartment'] : "";

$year = isset($_POST['year']) ? $_POST['year'] : "";



$formMessage = "";



if($_POST) {

    if(isset($_POST['reservationSubmit'])) {

        if(!empty($_POST['name']) && !empty($_POST['apartment'])

        && !empty($_POST['fromDate']) && !empty($_POST['toDate']) && isset($_POST['email']) && !empty($_POST['phoneNumber']) &&

        !empty($_POST['numberPerson']) && !empty($_POST['year'])) {



            if($year == date("Y")) {

                $header = 'From:' . $email;

                $header .= "\nMIME-Version: 1.0\n";

                $header .= "Content-Type: text/html; charset=\"utf-8\"\n";

                $emailTo = "mir.fol@tiscali.cz";



                $emailSubject = "Rezervace - $name - $apartment";

                $emailMessage = "Zpráva byla odeslána z webového rezervačního formuláře.<br/>

                            Rezervaci provedl/a: $name<br/><br/>

                            Přeje si objednat aparmán: $apartment<br/>

                            Od: $fromDate<br/>

                            Do: $toDate<br>

                            Počet osob: $numberPerson<br/><br/>

                            Kontakt zpátky: <br/>

                            Email: $email<br/>

                            Telefonní číslo: $phoneNumber<br/><br/>

                            A posílá dodatečnou zprávu: <br/>$addMessage";

                $success = mb_send_mail($emailTo, $emailSubject, $emailMessage, $header);

                if ($success) {

                    header("Location: /index.php?p=reservation&success");

                } else {

                    $formMessage = "Při odeslání emailu došlo k nějaké chybě. Zkuste to prosím později.";

                    header("Location: /index.php?p=reservation&f=$formMessage");

                    exit();

                }

            } else {

                $formMessage = "Vyplnili jste špatný rok";

                header("Location: /index.php?p=reservation&n=$name&a=$apartment&fd=$fromDate&td=$toDate&e=$email&pn=$phoneNumber&np$numberPerson&am=$addMessage&f=$formMessage");

                exit();

            }

        } else {

            $formMessage = "Vyplňtě prosím všechna pole.";

            header("Location: /index.php?p=reservation&n=$name&a=$apartment&fd=$fromDate&td=$toDate&e=$email&pn=$phoneNumber&np$numberPerson&y=$year&am=$addMessage&f=$formMessage");

            exit();

        }

    } elseif (isset($_POST['contactSubmit'])) {

        if (!empty($_POST['contactName']) && isset($_POST['contactEmail']) && !empty($_POST['subject']) && !empty($_POST['year'])) {

            if ($year == date("Y")) {

                $header = 'From:' . $contactEmail;

                $header .= "\nMIME-Version: 1.0\n";

                $header .= "Content-Type: text/html; charset=\"utf-8\"\n";

                $emailTo = "mir.fol@tiscali.cz";



                $emailSubject = "$subject - $name";

                $emailMessage = "Zpráva byla odeslána z webového kontaktního formuláře.<br/>

                            Zprávu provedl/a: $contactEmail<br/><br/>

                            A poslal zprávu:<br/>

                            $message<br/><br/>

                            Kontakt zpátky: <br/>

                            Email: $contactEmail";

                $success = mb_send_mail($emailTo, $emailSubject, $emailMessage, $header);

                if ($success) {

                    header("Location: /index.php?p=reservation&success");

                } else {

                    $formMessage = "Při odeslání emailu došlo k nějaké chybě. Zkuste to prosím později.";

                    header("Location: /index.php?p=reservation&f=$formMessage");

                    exit();

                }

            } else {

                $formMessage = "Vyplnili jste špatný rok";

                header("Location: /index.php?p=reservation&cn=$contactName&ce=$contactEmail&s=$subject&f=$formMessage");

                exit();

            }

        } else {

            $formMessage = "Vyplňtě prosím všechna pole.";

            header("Location: /index.php?p=reservation&cn=$contactName&ce=$contactEmail&s=$subject&f=$formMessage");

            exit();

        }

    }

}
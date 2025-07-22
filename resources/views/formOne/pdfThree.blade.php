<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <title>Anmeldeformular Ketten</title>
    <style>
        body {
            margin: 1cm;
            font-family: Arial, sans-serif;
            font-size: 0.9em;
            line-height: 1.4;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 1em;
            table-layout: fixed;
        }

        th,
        td {
            border: 1px solid #000;
            padding: 0.4em 0.6em;
            vertical-align: top;
            word-wrap: break-word;
        }

        .section-header {
            background: #fdebd0;
            font-weight: bold;
            text-transform: uppercase;
        }

        .checkbox-cell {
            text-align: center;
        }

        .page-break {
            page-break-before: always;
        }

        .signature-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 2em;
        }

        .signature-table td {
            border: none;
            text-align: center;
            padding: 0.5em;
        }

        .signature-table .line {
            border-bottom: 1px solid #000;
            width: 200px;
            margin: 0 auto 0.5em;
            height: 0;
        }

        /* float the Lieferando logo top-right */
        .logo-right {
            float: right;
            width: 80px;
            margin-bottom: 0.5em;
        }

        /* container to clear that float */
        .signature-section {
            clear: both;
            margin-bottom: 1.5em;
        }

        /* signature grid */
        .signature-table {
            width: 100%;
            border-collapse: collapse;
        }

        .signature-table th,
        .signature-table td {
            border: 1px solid #000;
            padding: 0.4em 0.6em;
            text-align: center;
        }

        /* float the Lieferando-Logo top-right */
        .logo-right {
            float: right;
            width: 80px;
            margin-bottom: 0.5em;
        }

        /* clear the float and give some breathing room */
        .signature-section {
            clear: both;
            margin-bottom: 1.5em;
        }

        /* simple 2-col grid */
        .signature-table {
            width: 100%;
            border-collapse: collapse;
        }

        .signature-table th,
        .signature-table td {
            border: 1px solid #000;
            padding: 0.4em 0.6em;
            vertical-align: top;
        }

        @media print {
            .footer-container {
                position: fixed;
                bottom: 1cm;
                left: 0;
                width: 100%;
            }
        }
    </style>
</head>

<body onload="window.print()">

    <!-- ========== Seite 1 ========== -->
    <table>
        <tr class="section-header">
            <th colspan="2">Ketten Netzwerk</th>
        </tr>
        <tr>
            <td>Brand</td>
            <td></td>
        </tr>
        <tr>
            <td>Kette</td>
            <td></td>
        </tr>
        <tr>
            <td>Rahmenvereinbarung</td>
            <td>RV mit CloudEatery GmbH vom 16.06.23</td>
        </tr>
    </table>

    <table>
        <tr class="section-header">
            <th colspan="2">Geschäftsdetails</th>
        </tr>
        <tr>
            <td>Alte Kundennummer (falls zutreffend)</td>
            <td></td>
        </tr>
        <tr>
            <td>Gesetzlicher Name / Firmierung</td>
            <td>{{ $form->owner_name }}</td>
        </tr>
        <tr>
            <td>Vor- und Nachname des Inhabers/Geschäftsführers</td>
            <td>{{ $form->managing_director }}</td>
        </tr>
        <tr>
            <td>Telefonnummer des Unternehmens</td>
            <td></td>
        </tr>
        <tr>
            <td>Kontaktperson</td>
            <td>{{ $form->contact_person  }}</td>
        </tr>
        <tr>
            <td>Mobilnummer (Kontaktperson)</td>
            <td>{{ $form->mobile_number }}</td>
        </tr>
        <tr>
            <td>Straße und Hausnummer</td>
            <td>{{ $form->post_address }}</td>
        </tr>
        <tr>
            <td>Postleitzahl und Ort</td>
            <td></td>
        </tr>
        <tr>
            <td>E-Mail-Adresse (für Rechnungen)</td>
            <td></td>
        </tr>
        <tr>
            <td>E-Mail-Adresse (zur Kommunikation)</td>
           <td>{{ $form->email }}</td>
        </tr>
        <tr>
            <td>Handelsregisternummer</td>
            <td></td>
        </tr>
        <tr>
            <td>Umsatzsteuer-ID</td>
            <td>{{ $form->vat_id }}</td>
        </tr>
        <tr>
            <td>Steuernummer</td>
            <td></td>
        </tr>
        <tr>
            <td>
                Hat das Unternehmen eine Betriebsstätte /
                Zweigniederlassung in einem anderen EU-Mitgliedsland?
            </td>
            <td>
                Ja <input type="checkbox" class="checkbox-cell">
                Nein <input type="checkbox" class="checkbox-cell">
            </td>
        </tr>
        <tr>
            <td>Werden Sie als politisch exponierte Person (PEP) betrachtet?*</td>
            <td>
                Ja <input type="checkbox" class="checkbox-cell">
                Nein <input type="checkbox" class="checkbox-cell">
            </td>
        </tr>
        <tr>
            <td colspan="2" style="font-size:0.8em; color:#555;">
                * Sie sind eine PEP, wenn:<br>
                1. Sie eine höhere politische oder öffentliche Rolle einnehmen…<br>
                2. Sie ein Familienmitglied von…<br>
                3. Sie eine enge Geschäftsbeziehung…<br>
                Warum wir fragen… dieser Teil der Anmeldung ist…
            </td>
        </tr>
    </table>

    <table>
        <tr class="section-header">
            <th colspan="2">Gebühren &amp; Zahlungen</th>
        </tr>
        <tr>
            <td>Provision** pro Own-Delivery Bestellung</td>
            <td>lt. Rahmenvertrag</td>
        </tr>
        <tr>
            <td>Provision** pro Lieferung durch Lieferando Bestellung</td>
            <td>lt. Rahmenvertrag</td>
        </tr>
        <tr>
            <td>Provision** pro Bestellung bei Abholung</td>
            <td>lt. Rahmenvertrag</td>
        </tr>
        <tr>
            <td>Online-Zahlungsgebühr pro Bestellung (EUR)</td>
            <td>0,64 €</td>
        </tr>
        <tr>
            <td>Kosten für Terminal (EUR)</td>
            <td>[kostenfrei]</td>
        </tr>
    </table>

    <!-- ========== Seite 2 ========== -->
    <div class="page-break"></div>

    <table>
        <tr>
            <td>NEU – Banner (zunächst 4 Wochen)</td>
            <td>[kostenfrei]</td>
        </tr>
        <tr>
            <td>Einrichtungsgebühr</td>
            <td>[kostenfrei]</td>
        </tr>
        <tr>
            <td>Monatliche Gebühr</td>
            <td>[kostenfrei]</td>
        </tr>
        <tr>
            <td>Kosten für Bestellübermittlung</td>
            <td>[kostenfrei]</td>
        </tr>
        <tr>
            <td colspan="2" style="font-size:0.8em; color:#555;">
                **Die Provision wird auf den Bruttobestellwert inkl. MwSt. und sonstiger (anwendbarer) Steuern
                berechnet. Auf die Provision und (ggf.) die Verwaltungsgebühr wird zusätzlich die Mehrwertsteuer
                erhoben. Die von uns erhobenen Gebühren können sich ändern und wir behalten uns das Recht vor, die
                Gebühren einseitig anzupassen.
            </td>
        </tr>
    </table>

    <table>
        <tr class="section-header">
            <th colspan="2">Angaben zum Bankkonto für den Zahlungseingang</th>
        </tr>
        <tr>
            <td>Name Kontoinhaber</td>
            <td></td>
        </tr>
        <tr>
            <td>IBAN</td>
            <td>{{ $form->iban }}</td>
        </tr>
    </table>

    <table>
        <tr class="section-header">
            <th colspan="1">Franchisenehmer-Erklärung</th>
        </tr>
        <tr>
            <td style="padding:0.8em;">
                Diese zusätzlichen Erklärungen gelten, wenn Sie Teil einer Franchise-Organisation sind, die mit uns
                zusammenarbeitet.
                <ul style="margin:0.5em 1.5em;">
                    <li>● Sie erklären, die Bedingungen aller Vereinbarungen zwischen dem Franchisegeber und uns
                        erhalten zu haben und anzuerkennen und alle Rechte und Pflichten zu übernehmen, die sich daraus
                        ergeben, soweit diese für Sie gelten;</li>
                    <li>● Sie bevollmächtigen den Franchisegeber, Sie in allen Angelegenheiten, die Ihren Eintrag auf
                        der Plattform betreffen, zu vertreten (z. B. bei der Verwaltung von Preisen, Speisekarten oder
                        Lieferzonen);</li>
                    <li>Sie erklären sich damit einverstanden, dass Ihre Umsatz- und Leistungsdaten (einschließlich der
                        aggregierten Bestellwerte und der Anzahl der Bestellungen) an den Franchisegeber weitergegeben
                        werden; und</li>
                    <li>● Sie erklären sich hiermit unwiderruflich damit einverstanden, dass wir alle Beträge, die wir
                        Ihnen aufgrund einer Vereinbarung zwischen uns schulden, mit sofortiger Wirkung direkt an den
                        Franchisegeber zahlen, sofern dies zwischen dem Franchisegeber und uns vereinbart wurde. Mit der
                        Zahlung dieser Beträge an den Franchisegeber sind unsere Verpflichtungen zur Zahlung dieser
                        Beträge an Sie aus diesem Vertrag vollständig erfüllt</li>
                </ul>
            </td>
        </tr>
    </table>

    <!-- ========== Seite 3 ========== -->
    <div class="page-break"></div>

    <table>
        <tr class="section-header">
            <th>Sonstiges</th>
        </tr>
        <tr>
            <td style="height:4em;"></td>
        </tr>
    </table>

    <table>
        <tr class="section-header">
            <th>Bedingungen</th>
        </tr>
        <tr>
            <td style="padding:0.8em;">
                <strong>Deutsch</strong><br>
                Allgemeine Geschäftsbedingungen:
                http://takeaway-restaurant-portal.s3.amazonaws.com/partnersTerms/de/TC_Restaurants_DE_DE.pdf<br>
                Courier App:
                https://takeaway-restaurant-portal.s3.eu-west-1.amazonaws.com/partnersTerms/courierApp/Terms-of-Use-TK-CourierApp-DE.pdf<br>
                Datenschutz Erklärung:
                http://takeaway-restaurant-portal.s3.amazonaws.com/privacy_policies/Privacy-Statement-Restaurants-DE.pdf
                <br>
                <br>
                <strong>English</strong><br>
                Allgemeine Geschäftsbedingungen:
                http://takeaway-restaurant-portal.s3.amazonaws.com/partnersTerms/de/TC_Restaurants_DE_ENG.pdf<br>
                Courier App:
                https://takeaway-restaurant-portal.s3.eu-west-1.amazonaws.com/partnersTerms/courierApp/Terms-of-Use-TK-CourierApp-EN.pdf<br>
                Datenschutz Erklärung:
                http://takeaway-restaurant-portal.s3.amazonaws.com/privacy_policies/Privacy-Statement-Restaurants-EN.pdf
                <br>
            </td>
        </tr>
    </table>

    <table>
        <tr class="section-header">
            <th>Selbstzertifizierung</th>
        </tr>
        <tr>
            <td style="padding:0.8em;">
                Mit der Unterzeichnung dieses Formulars bestätigen Sie, dass (i) alle Produkte und Dienstleistungen, die
                Sie zum Verkauf anbieten, den geltenden Gesetzen und Vorschriften sowie den Richtlinien, die wir Ihnen
                zur Verfügung stellen, entsprechen; (ii) Sie keine Produkte oder Dienstleistungen zum Verkauf anbieten
                werden, die illegal, gefälscht oder gefährlich sind oder anderweitig die Verbraucherrechte verletzen;
                und (iii) Sie Wirtschaftsbeteiligter sind und über angemessene Produktrückrufverfahren verfügen
            </td>
        </tr>
    </table>
    <!-- ────────────── Unterschrift Footer ────────────── -->
    <table>
        <tr class="section-header">
            <th>UNTERSCHRIFT</th>
        </tr>
        <tr>
            <!-- leeres Feld für Unterschrift -->
            <td> yd. yourdelivery GmbH (Lieferando) | Cuvrystr. 50, 52, 54 / Schlesische Str. 34 | 10997 Berlin |
                Geschäftsführung: Lennard Neubauer</td>
        </tr>
    </table>

    <!-- ────────────── Seite-Aufteilung ────────────── -->
    <div class="page-break"></div>

    <!-- ────────────── Unterschrift & Logo ────────────── -->
    <!-- ───────────────── Unterschrift ───────────────── -->
    <div class="signature-section">
        <img src="{{ asset('assets/pdf_logo/03.png') }}"alt="Lieferando Logo" class="logo-right">

        <table class="signature-table">
            <tr>
                <th>Vor- und Nachname</th>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <th>Datum</th>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <th>Unterschrift</th>
                <td style="height:4em;">&nbsp;</td>
            </tr>
        </table>
    </div>
    <div class="footer-container">
        <p class="footer-text">
            yd. yourdelivery GmbH (Lieferando) | Cuvrystr. 50, 52, 54 / Schlesische Str. 34 | 10997 Berlin |
            Geschäftsführung: Lennard Neubauer
        </p>
        <p class="footer-page-number">1</p>
    </div>


    <!-- ────────────── ANHANG 1 – ANGABEN ZUM STANDORT ────────────── -->
    <div class="page-break"></div>

    <table>
        <tr class="section-header">
            <th colspan="2">ANGABEN ZUM STANDORT</th>
        </tr>
        <tr>
            <td>Name des Unternehmens</td>
            <td></td>
        </tr>
        <tr>
            <td>Kategorie</td>
            <td></td>
        </tr>
        <tr>
            <td>Straße und Hausnummer</td>
            <td></td>
        </tr>
        <tr>
            <td>Postleitzahl und Ort</td>
            <td></td>
        </tr>
        <tr>
            <td>Telefon-Nummer</td>
            <td></td>
        </tr>
        <tr>
            <td>Kontaktperson</td>
            <td></td>
        </tr>
        <tr>
            <td>Mobilnummer (Kontaktperson)</td>
            <td></td>
        </tr>
        <tr>
            <td>E-Mail-Adresse für Kunden</td>
            <td></td>
        </tr>
        <tr>
            <td colspan="2" style="font-size:0.8em; color:#555;">
                Wie gesetzlich vorgeschrieben, müssen Sie eine E-Mail-Adresse angeben, die für Kunden sichtbar ist,
                damit diese Sie kontaktieren können.
                Wir werden diese E-Mail-Adresse auf Lieferando anzeigen. Bitte stellen Sie sicher, dass Sie keine
                persönliche E-Mail-Adresse für diesen Zweck
                verwenden
            </td>
        </tr>
    </table>

    <!-- ────────────── Übersicht & Leistungen ────────────── -->
    <div class="page-break"></div>

    <table>
        <tr class="section-header">
            <th colspan="2">ÜBERSICHT &amp; LEISTUNGEN</th>
        </tr>
        <tr>
            <td>Art der Lieferung</td>
            <td></td>
        </tr>
        <tr>
            <td>Abholung</td>
            <td></td>
        </tr>
        <tr>
            <td>Zufahrts- möglichkeiten</td>
            <td></td>
        </tr>
        <tr>
            <td>Barzahlung (nur für Own Delivery)</td>
            <td></td>
        </tr>
        <tr>
            <td>Teilnahme am Stempelkarten-Programm</td>
            <td></td>
        </tr>
        <tr>
            <td>Website &amp; Domain registriert und verwaltet von Lieferando</td>
            <td></td>
        </tr>
        <tr>
            <td>Verbindungs­methode</td>
            <td></td>
        </tr>
    </table>

    <!-- ────────────── Ihr Liefergebiet ────────────── -->
    <div class="page-break"></div>

    <table>
        <tr class="section-header">
            <th colspan="4">IHR LIEFERGEBIET</th>
        </tr>
        <tr>
            <td>Postleitzahl</td>
            <td>Mindest-bestellwert</td>
            <td>Lieferkosten</td>
            <td>ab welchem Betrag kostenfrei</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>€</td>
            <td>€</td>
            <td>€</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>€</td>
            <td>€</td>
            <td>€</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>€</td>
            <td>€</td>
            <td>€</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>€</td>
            <td>€</td>
            <td>€</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>€</td>
            <td>€</td>
            <td>€</td>
        </tr>
    </table>

    <!-- ────────────── Ihre Lieferzeiten ────────────── -->
    <div class="page-break"></div>

    <table>
        <tr class="section-header">
            <th colspan="7">IHRE LIEFERZEITEN</th>
        </tr>
        <tr>
            <td>Montag</td>
            <td>Dienstag</td>
            <td>Mittwoch</td>
            <td>Donnerstag</td>
            <td>Freitag</td>
            <td>Samstag</td>
            <td>Sonntag</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
    </table>

    <!-- ────────────── Ihre Abholzeiten ────────────── -->
    <table>
        <tr class="section-header">
            <th colspan="7">IHRE ABHOLZEITEN</th>
        </tr>
        <tr>
            <td>Montag</td>
            <td>Dienstag</td>
            <td>Mittwoch</td>
            <td>Donnerstag</td>
            <td>Freitag</td>
            <td>Samstag</td>
            <td>Sonntag</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
    </table>



</body>

</html>
<script>
    window.addEventListener('DOMContentLoaded', () => {
    window.print();
  });
  window.addEventListener('afterprint', () => {
    window.close();
  });
</script>

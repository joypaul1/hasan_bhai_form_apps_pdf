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

        .signature-table td {
            border: none;
            text-align: center;
            padding: 0.5em;
        }

        .signature-table .line {
            border-bottom: 1px solid #000;
            width: 200px;
            margin: 0 auto 0.5em;
        }

        .logo-right {
            float: right;
            width: 80px;
            margin-bottom: 0.5em;
        }

        .signature-section {
            clear: both;
            margin-bottom: 1.5em;
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
            <td>{{ $form->brand }}</td>
        </tr>
        <tr>
            <td>Kette</td>
            <td>{{ $form->chain }}</td>
        </tr>
        <tr>
            <td>Rahmenvereinbarung</td>
            <td>{{ $form->framework_agreement }}</td>
        </tr>
    </table>

    <table>
        <tr class="section-header">
            <th colspan="2">Geschäftsdetails</th>
        </tr>
        <tr>
            <td>Alte Kundennummer (falls zutreffend)</td>
            <td>{{ $form->old_customer_number }}</td>
        </tr>
        <tr>
            <td>Gesetzlicher Name / Firmierung</td>
            <td>{{ $form->legal_name }}</td>
        </tr>
        <tr>
            <td>Vor- und Nachname des Inhabers/Geschäftsführers</td>
            <td>{{ $form->owner_name }}</td>
        </tr>
        <tr>
            <td>Telefonnummer des Unternehmens</td>
            <td>{{ $form->company_phone }}</td>
        </tr>
        <tr>
            <td>Kontaktperson</td>
            <td>{{ $form->contact_person }}</td>
        </tr>
        <tr>
            <td>Mobilnummer (Kontaktperson)</td>
            <td>{{ $form->contact_mobile }}</td>
        </tr>
        <tr>
            <td>Straße und Hausnummer</td>
            <td>{{ $form->street }}</td>
        </tr>
        <tr>
            <td>Postleitzahl und Ort</td>
            <td>{{ $form->postal_code_city }}</td>
        </tr>
        <tr>
            <td>E-Mail-Adresse (für Rechnungen)</td>
            <td>{{ $form->billing_email }}</td>
        </tr>
        <tr>
            <td>E-Mail-Adresse (zur Kommunikation)</td>
            <td>{{ $form->communication_email }}</td>
        </tr>
        <tr>
            <td>Handelsregisternummer</td>
            <td>{{ $form->commercial_register_number }}</td>
        </tr>
        <tr>
            <td>Umsatzsteuer-ID</td>
            <td>{{ $form->vat_id }}</td>
        </tr>
        <tr>
            <td>Steuernummer</td>
            <td>{{ $form->tax_number }}</td>
        </tr>
        <tr>
            <td>Hat das Unternehmen eine Betriebsstätte / Zweigniederlassung in einem anderen EU-Mitgliedsland?</td>
            <td class="checkbox-cell">
                Ja <input type="checkbox" {{ $form->has_eu_branch ? 'checked' : '' }}>
                Nein <input type="checkbox" {{ !$form->has_eu_branch ? 'checked' : '' }}>
            </td>
        </tr>
        <tr>
            <td>Werden Sie als politisch exponierte Person (PEP) betrachtet?*</td>
            <td class="checkbox-cell">
                Ja <input type="checkbox" {{ $form->is_pep ? 'checked' : '' }}>
                Nein <input type="checkbox" {{ !$form->is_pep ? 'checked' : '' }}>
            </td>
        </tr>
        <tr>
            <td colspan="2" style="font-size:0.8em; color:#555;">
                * Sie sind eine PEP, wenn… (Text unverändert)
            </td>
        </tr>
    </table>

    <table>
        <tr class="section-header">
            <th colspan="2">Gebühren &amp; Zahlungen</th>
        </tr>
        <tr>
            <td>Provision pro Own-Delivery Bestellung</td>
            <td>{{ $form->fee_own_delivery ?? '—' }} €</td>
        </tr>
        <tr>
            <td>Provision pro Lieferung durch Lieferando Bestellung</td>
            <td>{{ $form->fee_platform_delivery ?? '—' }} €</td>
        </tr>
        <tr>
            <td>Provision pro Bestellung bei Abholung</td>
            <td>{{ $form->fee_pickup ?? '—' }} €</td>
        </tr>
        <tr>
            <td>Online-Zahlungsgebühr pro Bestellung</td>
            <td>{{ $form->fee_online_payment ?? '—' }} €</td>
        </tr>
        <tr>
            <td>Kosten für Terminal</td>
            <td>{{ $form->terminal_cost ?? '—' }} €</td>
        </tr>
    </table>

    <!-- ========== Seite 2 ========== -->
    <div class="page-break"></div>

    <table>
        <tr>
            <td>NEU – Banner (zunächst 4 Wochen)</td>
            <td>{{ $form->banner_fee ?? '—' }} €</td>
        </tr>
        <tr>
            <td>Einrichtungsgebühr</td>
            <td>{{ $form->setup_fee ?? '—' }} €</td>
        </tr>
        <tr>
            <td>Monatliche Gebühr</td>
            <td>{{ $form->monthly_fee ?? '—' }} €</td>
        </tr>
        <tr>
            <td>Kosten für Bestellübermittlung</td>
            <td>{{ $form->order_transmission_cost ?? '—' }} €</td>
        </tr>
        <tr>
            <td colspan="2" style="font-size:0.8em; color:#555;">
                ** Hinweistext unverändert
            </td>
        </tr>
    </table>

    <table>
        <tr class="section-header">
            <th colspan="2">Angaben zum Bankkonto für den Zahlungseingang</th>
        </tr>
        <tr>
            <td>Name Kontoinhaber</td>
            <td>{{ $form->account_holder }}</td>
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

    <!-- Franchisenehmer-Erklärung unverändert… -->


    <!-- Sonstiges & Bedingungen unverändert… -->

    <!-- ========== ANHANG 1 – ANGABEN ZUM STANDORT ========== -->
    <div class="page-break"></div>

    <table>
        <tr class="section-header">
            <th colspan="2">Angaben zum Standort</th>
        </tr>
        <tr>
            <td>Name des Unternehmens</td>
            <td>{{ $form->site_name }}</td>
        </tr>
        <tr>
            <td>Kategorie</td>
            <td>{{ $form->site_category }}</td>
        </tr>
        <tr>
            <td>Straße und Hausnummer</td>
            <td>{{ $form->site_street }}</td>
        </tr>
        <tr>
            <td>Postleitzahl und Ort</td>
            <td>{{ $form->site_postal_code_city }}</td>
        </tr>
        <tr>
            <td>Telefon-Nummer</td>
            <td>{{ $form->site_phone }}</td>
        </tr>
        <tr>
            <td>Kontaktperson</td>
            <td>{{ $form->site_contact_person }}</td>
        </tr>
        <tr>
            <td>Mobilnummer (Kontaktperson)</td>
            <td>{{ $form->site_contact_mobile }}</td>
        </tr>
        <tr>
            <td>E-Mail-Adresse für Kunden</td>
            <td>{{ $form->site_customer_email }}</td>
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

    <!-- ========== Übersicht & Leistungen ========== -->
    <div class="page-break"></div>

    <table>
        <tr class="section-header">
            <th colspan="2">Übersicht &amp; Leistungen</th>
        </tr>
        <tr>
            <td>Anfangsdatum</td>
            <td>{{ optional($form->service_start_date)->format('d.m.Y') }}</td>
        </tr>
        <tr>
            <td>Art der Lieferung</td>
            <td>{{ $form->delivery_type }}</td>
        </tr>
        <tr>
            <td>Abholung</td>
            <td class="checkbox-cell">
                Ja <input type="checkbox" {{ $form->pickup_option ? 'checked' : '' }}>
                Nein <input type="checkbox" {{ !$form->pickup_option ? 'checked' : '' }}>
            </td>
        </tr>
        <tr>
            <td>Zufahrts­möglichkeiten</td>
            <td>{{ $form->access_info }}</td>
        </tr>
        <tr>
            <td>Barzahlung (Own Delivery)</td>
            <td class="checkbox-cell">
                Ja <input type="checkbox" {{ $form->cash_payment ? 'checked' : '' }}>
                Nein <input type="checkbox" {{ !$form->cash_payment ? 'checked' : '' }}>
            </td>
        </tr>
        <tr>
            <td>Teilnahme am Stempelkarten-Programm</td>
            <td class="checkbox-cell">
                Ja <input type="checkbox" {{ $form->stempelkarte_participation ? 'checked' : '' }}>
                Nein <input type="checkbox" {{ !$form->stempelkarte_participation ? 'checked' : '' }}>
            </td>
        </tr>
        <tr>
            <td>Website &amp; Domain</td>
            <td>{{ $form->website_domain }}</td>
        </tr>
        <tr>
            <td>Verbindungsmethode</td>
            <td>{{ $form->connection_method }}</td>
        </tr>
    </table>

    <!-- ========== Ihr Liefergebiet ========== -->
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
        @php
            // Wenn delivery_area_postal_codes kommagetrennt sind:
            $zips = explode(',', $form->delivery_area_postal_codes);
        @endphp
        @foreach ($zips as $zip)
            <tr>
                <td>{{ trim($zip) }}</td>
                <td>{{ $form->min_order_value }}</td>
                <td>{{ $form->delivery_cost }}</td>
                <td>{{ $form->free_delivery_threshold }}</td>
            </tr>
        @endforeach
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
    <!-- restliche Teile (Liefer- & Abholzeiten, Unterschrift, Footer) unverändert -->
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

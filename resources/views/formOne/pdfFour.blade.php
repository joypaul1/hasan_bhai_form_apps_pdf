<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="utf-8">
    <title>Lieferando.de UBO Formular</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            color: #454648;
        }

        .header {
            background-color: #ff6600;
            color: white;
            padding: 20px;
            display: flex;
            align-items: center;
        }

        .header img {
            height: 40px;
            margin-right: 20px;
        }

        .header .title {
            font-size: 18px;
            font-weight: bold;
            text-transform: uppercase;
        }

        .header .subtitle {
            font-size: 12px;
            margin-left: auto;
        }

        .section {
            margin: 20px;
        }

        .section h2 {
            margin: 0;
            font-size: 14px;
            background-color: #ff6600;
            color: white;
            padding: 8px;
            text-transform: uppercase;
        }

        .grey-bg {
            background-color: #f2f2f2;
            padding: 0.5%;
            /*margin-top: 10px; */
        }

        table {
            width: 100%;
            border-collapse: collapse;
            /*margin-top: 10px;*/
        }

        table tr {
            text-align: left;
        }

        th,
        td {
            padding: 8px 8px;
            vertical-align: top;
        }

        th {
            background-color: #e6e6e6;
            width: 25%;
            font-weight: normal;
            border-bottom: 1px solid lightgray;
        }

        td.input {
            background-color: #f9f9f9;
        }

        td.input input {
            width: 100%;
            border: none;
            border-bottom: 1px dotted #454648;
            padding: 4px;
            box-sizing: border-box;
            background: transparent;
        }

        tfoot {
            background-color: #f2f2f2;
            color: #454648;
        }

        .ubo-declaration-header {
            text-align: right;
            font-size: 1.25rem;
            font-weight: bold;
            color: #ff6600;
            text-transform: uppercase;
            margin: 1em 0;
        }

        .checkbox-list {
            margin: 10px 0;
            list-style: none;
            padding-left: 0;
        }

        .checkbox-list li {
            margin-bottom: 6px;
        }

        .checkbox-list input[type="checkbox"] {
            margin-right: 8px;
        }

        .note {
            font-size: 14px;
            margin-top: 4px;
            margin-left: 3%;
        }

        .signature {
            text-align: right;
            font-size: 10px;
            color: white;
            background-color: #454648;
            padding: 6px;
            width: 80px;
            float: right;
            margin-top: 20px;
        }

        .clearfix::after {
            content: "";
            display: block;
            clear: both;
        }

        /* page break for print/PDF */
        .page-break {
            page-break-before: always;
        }
    </style>
</head>

<body onload="window.print()">

    <!-- Page 1 -->
    <div class="header">
        <img src="{{ asset('assets/pdf_logo/02.png') }}" alt="Lieferando.de Logo">
        <div class="title">Ultimate Beneficial Ownership (UBO) Declaration Form</div>
        <div class="subtitle">Erklärung des Inhabers/Gesellschafters</div>
    </div>

    <div class="section">
        <h2>Restaurant Details</h2>
        <table>
            <tr>
                <th>Name des Restaurants</th>
                <td class="input"><input type="text" value="{{ $form->restaurantname }}"></td>
            </tr>
            <tr>
                <th>Gesetzlicher Name des Restaurants</th>
                <td class="input"><input type="text" name="legal_name" value="{{ $form->owner_name }}"></td>
            </tr>
            <tr>
                <th>Handelsregisternummer / Gemeindekennzahl</th>
                <td class="input"><input type="text" name="registry_number" placeholder="z. B. HRB …"></td>
            </tr>
        </table>
    </div>

    <div class="section grey-bg">
        <p><strong>A.</strong>Ein UBO ist eine Person, die das Restaurant durch einen direkten oder indirekten Anteil
            <strong>von mehr als 25%</strong> besitzt
            oder kontrolliert.
        </p>
        <ul class="checkbox-list">
            <li><label><input type="checkbox" name="has_ubo">Das Restaurant hat einen oder mehrere UBO’s → fahren Sie
                    mit
                    Abschnitt B fort</label></li>
            <li><label><input type="checkbox" name="no_ubo">Das Restaurant hat keinen UBO → fahren Sie mit Abschnitt C
                    fort</label></li>
            <li>
                <label><input type="checkbox" name="public_company">Das Restaurant ist im Besitz eines börsennotierten
                    Unternehmens</label>
                <div class="note">
                    • Name des Unternehmens:<br>
                    • Name der Börse:<br>
                    → fahren Sie mit Abschnitt C fort
                </div>
            </li>
        </ul>
    </div>

    <!-- Page 2 -->


    <div class="section">
        <p><strong>B. </strong> Ultimate Beneficial Owner(s)</p>

        <!-- 1. UBO DETAILS -->
        <h2 style="font-size:13px; background-color:#ff6600; margin-top:20px;">1. UBO Details</h2>
        <table>
            <tr>
                <th>Vorname</th>
                <td class="input"><input type="text" name="ubo1_first_name" value="{{ $form->contact_person }}"></td>
                <th>Nachname</th>
                <td class="input"><input type="text" name="ubo1_last_name" value="{{ $form->contact_person }}"></td>
            </tr>
            <tr>
                <th>Geburtsdatum</th>
                <td class="input"><input type="text" name="ubo1_dob" placeholder="TT.MM.JJJJ"></td>
                <th>Geburtsort und -land</th>
                <td class="input"><input type="text" name="ubo1_birth_place"></td>
            </tr>
            <tr>
                <th>% der Anteile</th>
                <td class="input"><input type="text" name="ubo1_shares" placeholder="%"></td>
                <th>Wohnadresse</th>
                <td class="input"><input type="text" name="ubo1_address"></td>
            </tr>
            <tfoot>
                <tr>
                    <td colspan="4" class="note">
                        Bitte fügen Sie dem Formular eine Kopie vom Reisepass
                        oder Personalausweis bei.
                    </td>
                </tr>
            </tfoot>
        </table>

        <!-- 2. UBO DETAILS -->
        <h2 style="font-size:13px; background-color:#ff6600; margin-top:20px;">2. UBO Details</h2>
        <table>
            <tr>
                <th>Vorname</th>
                <td class="input"><input type="text" name="ubo2_first_name"></td>
                <th>Nachname</th>
                <td class="input"><input type="text" name="ubo2_last_name"></td>
            </tr>
            <tr>
                <th>Geburtsdatum</th>
                <td class="input"><input type="text" name="ubo2_dob" placeholder="TT.MM.JJJJ"></td>
                <th>Geburtsort und -land</th>
                <td class="input"><input type="text" name="ubo2_birth_place"></td>
            </tr>
            <tr>
                <th>% der Anteile</th>
                <td class="input"><input type="text" name="ubo2_shares" placeholder="%"></td>
                <th>Wohnadresse</th>
                <td class="input"><input type="text" name="ubo2_address"></td>
            </tr>
            <tfoot>
                <tr>
                    <td colspan="4" class="note">
                        Bitte fügen Sie dem Formular eine Kopie vom Reisepass
                        oder Personalausweis bei.
                    </td>
                </tr>
            </tfoot>

        </table>

        <div class="page-break"></div>
        <!-- UBO Declaration Form Header -->
        <div class="ubo-declaration-header">
            ULTIMATE BENEFICIAL OWNERSHIP (UBO) DECLARATION FORM
        </div>

        <!-- 3. UBO DETAILS -->
        <h2 style="font-size:13px; background-color:#ff6600; margin-top:20px;">3. UBO Details</h2>
        <table>
            <tr>
                <th>Vorname</th>
                <td class="input"><input type="text" name="ubo3_first_name"></td>
                <th>Nachname</th>
                <td class="input"><input type="text" name="ubo3_last_name"></td>
            </tr>
            <tr>
                <th>Geburtsdatum</th>
                <td class="input"><input type="text" name="ubo3_dob" placeholder="TT.MM.JJJJ"></td>
                <th>Geburtsort und -land</th>
                <td class="input"><input type="text" name="ubo3_birth_place"></td>
            </tr>
            <tr>
                <th>% der Anteile</th>
                <td class="input"><input type="text" name="ubo3_shares" placeholder="%"></td>
                <th>Wohnadresse</th>
                <td class="input"><input type="text" name="ubo3_address"></td>
            </tr>
            <tfoot>
                <tr>
                    <td colspan="4" class="note">
                        Bitte fügen Sie dem Formular eine Kopie vom Reisepass
                        oder Personalausweis bei.
                    </td>
                </tr>
            </tfoot>

        </table>

    </div>



    <div class="section">
        <p><strong>C.</strong> Person(en), die das Restaurant gegenüber Takeaway.com oder einem seiner verbundenen
            Unternehmen vertreten
            (weiter: „Takeaway.com“)</p>
        <h2>Gesetzliche Vertreter</h2>
        <table>
            <tr>
                <th>Vor- und Nachname</th>
                <th>Geburtsdatum</th>
                <th>Dokument zur Überprüfung der Vertreterrechte</th>
                <th>Bitte fügen Sie dem Formular eine Kopie vom Reisepass oder Personalausweis des gesetzlichen
                    Vertreters bei</th>
            </tr>
            <!-- Drei Zeilen als Beispiel -->
            <tr>
                <td class="input"><input type="text" name="rep1_name"></td>
                <td class="input"><input type="text" name="rep1_dob" placeholder="TT.MM.JJJJ"></td>
                <td class="input"><input type="text" name="rep1_doc"></td>
                <td class="input" style="text-align:center"><input type="checkbox" name="rep1_id"></td>
            </tr>
            <tr>
                <td class="input"><input type="text" name="rep2_name"></td>
                <td class="input"><input type="text" name="rep2_dob" placeholder="TT.MM.JJJJ"></td>
                <td class="input"><input type="text" name="rep2_doc"></td>
                <td class="input" style="text-align:center"><input type="checkbox" name="rep2_id"></td>
            </tr>
            <tr>
                <td class="input"><input type="text" name="rep3_name"></td>
                <td class="input"><input type="text" name="rep3_dob" placeholder="TT.MM.JJJJ"></td>
                <td class="input"><input type="text" name="rep3_doc"></td>
                <td class="input" style="text-align:center"><input type="checkbox" name="rep3_id"></td>
            </tr>
        </table>
    </div>



    <div class="section">
        <p>
            Wir erklären, dass wir Lieferando.de schriftlich über jede Änderung der oben genannten Details informieren
            werden.<br>
            Der Unterzeichner erklärt hiermit, dass die in diesem Formular eingegebenen Informationen wahr und richtig
            sind.
            Der Unterzeichner erklärt sich als gesetzlicher Vertreter der Gesellschaft.
        </p>

        <!-- <table>
      <tr>
        <th>Vor- und Nachname Unterzeichner</th>
        <td class="input"><input type="text" name="sig_name"></td>
        <th>Unterschrift</th>
        <td class="input"><input type="text" name="signature" placeholder="…" /></td>
      </tr>
      <tr>
        <th>Funktion</th>
        <td class="input"><input type="text" name="sig_role"></td>
        <th></th>
        <td></td>
      </tr>
      <tr>
        <th>Datum und Ort</th>
        <td class="input"><input type="text" name="sig_date" placeholder="TT.MM.JJJJ, Ort"></td>
      </tr>
    </table> -->
        <table class="signature-table">
            <tr>
                <th>Vor- und Nachname<br>Unterzeichner</th>
                <td class="input"><input type="text" name="sig_name" value="{{ $form->contact_person }}" /></td>
                <!-- pull the signature label down over 3 rows -->
                <th class="sig-label" rowspan="3" style="vertical-align: middle;">Unterschrift</th>
                <!-- pull the blank signature area down over 3 rows -->
                <td class="input sig-area" style="vertical-align: middle;" rowspan="3">
                    <input type="text" name="signature" />
                </td>
            </tr>
            <tr>
                <th>Funktion</th>
                <td class="input"><input type="text" name="sig_role" /></td>
            </tr>
            <tr>
                <th>Datum und Ort</th>
                <td class="input"><input type="text" name="sig_date" placeholder="TT.MM.JJJJ, Ort" /></td>
            </tr>
        </table>

    </div>

    <div class="clearfix section">
        <img src="{{ asset('assets/pdf_logo/03.png') }}" alt="Lieferando.de Logo" style="height:40px; float:right; margin:20px 0;">
    </div>

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

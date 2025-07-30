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
            text-align: justify;
        }

        .header {
            display: flex;
        }

        .header img {
            width: 100%;
            height: 100px;
        }

        .section {
            margin: 5%;
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
        }

        table {
            width: 100%;
            border-collapse: collapse;
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

        .page-break {
            page-break-before: always;
        }

        .footer {
            position: absolute;
            bottom: 0;
            right: 0;
        }

        .footer img {
            height: 100px;
            margin-right: 5%;
        }
    </style>
</head>

<body>

    <!-- Page 1 -->
    <div class="header">
        <img src="{{ asset('assets/pdf_logo/02.png') }}" alt="Lieferando.de Logo">
    </div>

    <div class="section">
        <h2>Restaurant Details</h2>
        <table>
            <tr>
                <th>Name des Restaurants</th>
                <td class="input"><input type="text" value="{{ $form->restaurant_name }}"></td>
            </tr>
            <tr>
                <th>Gesetzlicher Name des Restaurants</th>
                <td class="input"><input type="text" value="{{ $form->legal_restaurant_name }}"></td>
            </tr>
            <tr>
                <th>Handelsregisternummer</th>
                <td class="input"><input type="text" value="{{ $form->trade_register_number }}"></td>
            </tr>
        </table>
    </div>

    <div class="section grey-bg">
        <p><strong>A.</strong>Ein UBO ist eine Person, die das Restaurant durch einen direkten oder indirekten Anteil
            <strong>von mehr als 25%</strong> besitzt oder kontrolliert.
        </p>
        <ul class="checkbox-list">
            <li><label><input type="checkbox" name="has_ubo">Das Restaurant hat einen oder mehrere UBO’s → fahren Sie
                    mit Abschnitt B fort</label></li>
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
    @php use Carbon\Carbon; @endphp
    <div class="section">
        <p><strong>B. </strong> Ultimate Beneficial Owner(s)</p>

        <h2>1. UBO Details</h2>
        <table>
            <tr>
                <th>Vorname</th>
                <td class="input"><input type="text" value="{{ $form->ubo1_first_name }}"></td>
                <th>Nachname</th>
                <td class="input"><input type="text" value="{{ $form->ubo1_last_name }}"></td>
            </tr>
            <tr>
                <th>Geburtsdatum</th>
                <td class="input"><input type="text"
                        value="{{ $form->ubo1_dob ? Carbon::parse($form->ubo1_dob)->format('d.m.Y') : '' }}"></td>
                <th>Geburtsort</th>
                <td class="input"><input type="text" value="{{ $form->ubo1_birthplace }}"></td>
            </tr>
            <tr>
                <th>% der Anteile</th>
                <td class="input"><input type="text" value="{{ $form->ubo1_share_percentage }}"></td>
                <th>Wohnadresse</th>
                <td class="input"><input type="text" value="{{ $form->ubo1_address }}"></td>
            </tr>
            <tfoot>
                <tr>
                    <td colspan="4" class="note">
                        Bitte fügen Sie dem Formular eine Kopie vom Reisepass oder Personalausweis bei.
                    </td>
                </tr>
            </tfoot>
        </table>

        <h2>2. UBO Details</h2>
        <table>
            <tr>
                <th>Vorname</th>
                <td class="input"><input type="text" value="{{ $form->ubo2_first_name }}"></td>
                <th>Nachname</th>
                <td class="input"><input type="text" value="{{ $form->ubo2_last_name }}"></td>
            </tr>
            <tr>
                <th>Geburtsdatum</th>
                <td class="input"><input type="text"
                        value="{{ $form->ubo2_dob ? Carbon::parse($form->ubo2_dob)->format('d.m.Y') : '' }}"></td>
                <th>Geburtsort</th>
                <td class="input"><input type="text" value="{{ $form->ubo2_birthplace }}"></td>
            </tr>
            <tr>
                <th>% der Anteile</th>
                <td class="input"><input type="text" value="{{ $form->ubo2_share_percentage }}"></td>
                <th>Wohnadresse</th>
                <td class="input"><input type="text" value="{{ $form->ubo2_address }}"></td>
            </tr>
            <tfoot>
                <tr>
                    <td colspan="4" class="note">
                        Bitte fügen Sie dem Formular eine Kopie vom Reisepass oder Personalausweis bei.
                    </td>
                </tr>
            </tfoot>
        </table>

        <div class="page-break"></div>

        <div class="ubo-declaration-header" style="margin-bottom: 5%;margin-top: 5%">
            ULTIMATE BENEFICIAL OWNERSHIP (UBO) DECLARATION FORM
        </div>

        <h2>3. UBO Details</h2>
        <table>
            <tr>
                <th>Vorname</th>
                <td class="input"><input type="text" value="{{ $form->ubo3_first_name }}"></td>
                <th>Nachname</th>
                <td class="input"><input type="text" value="{{ $form->ubo3_last_name }}"></td>
            </tr>
            <tr>
                <th>Geburtsdatum</th>
                <td class="input"><input type="text"
                        value="{{ $form->ubo3_dob ? Carbon::parse($form->ubo3_dob)->format('d.m.Y') : '' }}"></td>
                <th>Geburtsort</th>
                <td class="input"><input type="text" value="{{ $form->ubo3_birthplace }}"></td>
            </tr>
            <tr>
                <th>% der Anteile</th>
                <td class="input"><input type="text" value="{{ $form->ubo3_share_percentage }}"></td>
                <th>Wohnadresse</th>
                <td class="input"><input type="text" value="{{ $form->ubo3_address }}"></td>
            </tr>
            <tfoot>
                <tr>
                    <td colspan="4" class="note">
                        Bitte fügen Sie dem Formular eine Kopie vom Reisepass oder Personalausweis bei.
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
                <th>Dokument</th>
                <th>Kopie beigelegt</th>
            </tr>
            <tr>
                <td class="input"><input type="text" name="rep1_name"></td>
                <td class="input"><input type="text" name="rep1_dob" placeholder=""></td>
                <td class="input"><input type="text" name="rep1_doc"></td>
                <td class="input" style="text-align:center"><input type="checkbox" name="rep1_id"></td>
            </tr>
            <tr>
                <td class="input"><input type="text" name="rep2_name"></td>
                <td class="input"><input type="text" name="rep2_dob" placeholder=""></td>
                <td class="input"><input type="text" name="rep2_doc"></td>
                <td class="input" style="text-align:center"><input type="checkbox" name="rep2_id"></td>
            </tr>
            <tr>
                <td class="input"><input type="text" name="rep2_name"></td>
                <td class="input"><input type="text" name="rep2_dob" placeholder=""></td>
                <td class="input"><input type="text" name="rep2_doc"></td>
                <td class="input" style="text-align:center"><input type="checkbox" name="rep2_id"></td>
            </tr>
        </table>
    </div>

    <div class="section">
        <p>   Wir erklären, dass wir Lieferando.de schriftlich über jede Änderung der oben genannten Details informieren
            werden.<br>
            Der Unterzeichner erklärt hiermit, dass die in diesem Formular eingegebenen Informationen wahr und richtig
            sind.
            Der Unterzeichner erklärt sich als gesetzlicher Vertreter der Gesellschaft.</p>
        <table class="signature-table">
            <tbody>
                <tr>
                    <th>Vor- und Nachname</th>
                    <td class="input"><input type="text" value="{{ $form->signatory_first_name }}"></td>
                    <th rowspan="3">Unterschrift</th>
                    <td class="input sig-area" rowspan="3">
                        <img src="{{ asset('storage/' . $form->signature_file) }}" style="max-height:80px;">
                    </td>
                </tr>
                <tr>
                    <th>Funktion</th>
                    <td class="input"><input type="text" value="{{ $form->signatory_function }}"></td>
                </tr>
                <tr>
                    <th>Datum und Ort</th>
                    <td class="input"><input type="text"
                            value="{{ $form->signatory_date ? Carbon::parse($form->signatory_date)->format('d.m.Y') : '' }}">
                    </td>
                </tr>
            </tbody>
        </table>

        <!-- ✅ Add footer image only here to prevent extra page -->
        <div style="position: relative; height: 120px; margin-top: 60px;">
            <div style="position: absolute; bottom: 0; right: 0; width: 100%; text-align: right; padding-right: 5%;">
                <img src="{{ asset('assets/pdf_logo/03.png') }}" alt="Lieferando.de Logo" style="height:120px;">
            </div>
        </div>
    </div>

</body>

</html>

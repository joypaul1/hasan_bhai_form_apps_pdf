<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <title>Neukundenmeldung</title>
    <style>
        /* reset & basic */
        body {
            margin: 1em;
            font-family: Arial, sans-serif;
        }

        form.neukunde {
            width: 100%;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            table-layout: fixed;
        }

        th,
        td {
            border: 1px solid #000;
            padding: 0.4em 0.6em;
            vertical-align: top;
            word-wrap: break-word;
        }

        /* HEADER ROWS */
        .header-main th {
            border-bottom: none;
            font-size: 1.1em;
            font-weight: bold;
            text-transform: uppercase;
        }

        .header-main th:nth-child(1) {
            text-decoration: underline;
            text-align: left;
        }

        .header-main th:nth-child(2) {
            text-align: center;
            width: 10%;
        }

        .header-main th:nth-child(3) {
            text-align: right;
            width: 15%;
        }

        .header-main input {
            width: 90%;
            border: none;
            outline: none;
            font-size: 1em;
        }

        /* MANDATORY NOTICE */
        .notice td {
            border-top: none;
            border-bottom: 1px solid #000;
            text-align: center;
            color: #c00;
            font-weight: bold;
            font-size: 0.95em;
        }

        /* FORM LABELS & FIELDS */
        th {
            background: #f0f0f0;
            font-weight: normal;
            width: 25%;
        }

        td input {
            width: 100%;
            border: none;
            outline: none;
            font-size: 0.9em;
            background: transparent;
        }

        /* YELLOW HIGHLIGHT */
        .highlight td {
            background: #fffa8c;
        }

        .highlight th {
            background: #f0f0f0;
        }

        /* TRANS GOURMET SECTION */
        .tg-section td {
            background: #ccc;
            color: #c00;
            font-weight: bold;
            text-align: left;
            border-top: 2px solid #000;
        }

        /* PRINT FRIENDLY */
        @media print {
            body {
                margin: 0.5cm;
            }

            .header-main th {
                font-size: 1em;
            }
        }
    </style>
</head>

<body onload="window.print()">
    <form class="neukunde">
        <table>
            <!-- Title row -->
            <tr class="header-main">
                <th>Neukundenmeldung</th>
                <th>TG</th>
                <th>
                    <label for="date">Date</label><br>
                   <span> {{ date('d/m/Y', strtotime($form->created_at)) }}</span>
                    {{-- <input type="text" id="date" value=""> --}}
                </th>
            </tr>

            <!-- Red notice -->
            <tr class="notice">
                <td colspan="3">
                    Bitte reichen Sie die Daten bis spätestens 14 Tagen vor der geplanten Eröffnung ein
                </td>
            </tr>

            <!-- Data rows -->
            <tr>
                <th for="company_name">Firmierung</th>
                <td colspan="2"><input type="text" id="company_name" name="company_name"
                        value="{{ $form->company_name }}"></td>
            </tr>
            <tr>
                <th for="billing_address">Rechnungsadresse</th>
                <td colspan="2"><input type="text" id="billing_address" name="billing_address"
                        value="{{ $form->billing_address }}"></td>
            </tr>
            <tr>
                <th for="delivery_address">Lieferadresse</th>
                <td colspan="2"><input type="text" id="delivery_address" name="delivery_address"
                        value="{{ $form->delivery_address }}"></td>
            </tr>

            <!-- Yellow highlight block -->
            <tr class="highlight">
                <th for="bank_details">Bankverbindung (IBAN, BIC)</th>
                <td colspan="2"><input type="text" id="bank_details" name="bank_details"
                        value="{{ $form->bank_details }}"></td>
            </tr>
            <tr class="highlight">
                <th for="vat_id">Umsatzsteuer-ID-Nr.</th>
                <td colspan="2"><input type="text" id="vat_id" name="vat_id"
                        value="{{ $form->vat_id_number }}"></td>
            </tr>
            <tr class="highlight">
                <th for="tax_number">Steuernummer</th>
                <td colspan="2"><input type="text" id="tax_number" name="tax_number"
                        value="{{ $form->tax_number }}"></td>
            </tr>

            <tr>
                <th for="primary_contact">Hauptansprechpartner</th>
                <td colspan="2"><input type="text" id="primary_contact" name="primary_contact"
                        value="{{ $form->primary_contact }}"></td>
            </tr>
            <tr>
                <th for="mobile_number">Handy-Nr.</th>
                <td colspan="2"><input type="tel" id="mobile_number" name="mobile_number"
                        value="{{ $form->mobile_number }}"></td>
            </tr>
            <tr>
                <th for="email">e-mail</th>
                <td colspan="2"><input type="email" id="email" name="email" value="{{ $form->email }}"></td>
            </tr>
            <tr>
                <th for="landline">Festnetz</th>
                <td colspan="2"><input type="tel" id="landline" name="landline" value="{{ $form->landline }}">
                </td>
            </tr>

            <!-- Trans Gourmet section header -->
            <tr class="tg-section">
                <td colspan="3">Nur für Trans Gourmet:</td>
            </tr>

            <tr>
                <th for="first_delivery_date">Datum Erstanlieferung</th>
                <td colspan="2"><input type="text" id="first_delivery_date" name="first_delivery_date"
                        value="{{ date('d/m/Y', strtotime($form->first_delivery_date)) }}"></td>
            </tr>
            <tr>
                <th for="delivery_contact">Ansprechpartner für Handheld (Lieferabwicklung)</th>
                <td colspan="2"><input type="text" id="delivery_contact" name="delivery_contact"
                        value="{{ $form->handheld_contact }}"></td>
            </tr>
            <tr>
                <th for="tg_email">e-mail (später für Trans Gourmet)</th>
                <td colspan="2"><input type="email" id="tg_email" name="tg_email"
                        value="{{ $form->email_trans_gourmet }}"></td>
            </tr>
        </table>
    </form>
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

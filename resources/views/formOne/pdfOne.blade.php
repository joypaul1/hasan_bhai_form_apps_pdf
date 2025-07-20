<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <title>Kooperationsvereinbarung</title>
    <style>
        <style>body {
            margin: 2cm;
            font-family: Arial, sans-serif;
            line-height: 1.4;
        }

        /* Logo */
        .logo {
            display: block;
            margin: 0 auto 1em;
            width: 120px;
        }

        /* Titel */
        h1 {
            text-align: center;
            font-size: 1.6em;
            margin: 0.2em 0 1em;
        }

        /* Einleitung */
        .intro p {
            margin: 0.4em 0;
        }

        .intro .sub {
            font-style: italic;
            text-align: center;
            margin: 0.2em 0 1em;
        }

        .intro .and {
            text-align: center;
            margin: 1em 0;
            font-style: italic;
        }

        /* ── 2-Spalten-Table für Blöcke ───────────────────────────────── */
        .block-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 1.5em;
            table-layout: fixed;
            /* FIXED layout */
        }

        .block-table col.col-label {
            width: 20%;
        }

        .block-table col.col-field {
            width: 80%;
        }

        .block-table th,
        .block-table td {
            box-sizing: border-box;
            /* padding zählt zur Breite */
            border: none;
            padding: 0;
            vertical-align: top;
        }

        .block-table .label {
            padding-right: 1em;
            font-weight: bold;
            text-align: left;
        }

        .block-table .field {
            padding-left: 0.5em;
        }

        /* Hint + Unterstrich */
        .hint-line {
            margin-bottom: 1em;
        }

        .hint-line .hint-text {
            display: block;
            font-size: 0.95em;
            color: #666;
            margin-bottom: 0.2em;
        }

        .hint-line .line {
            border-bottom: 1px solid #000;
            height: 0;
            width: 100%;
        }

        /* Fußnote unter Kooperationspartner */
        .subnote {
            font-style: italic;
            font-size: 0.9em;
            margin-top: -0.5em;
        }

        /* Box-Abschnitt für I. */
        .box-section {
            border: 1px solid #000;
            padding: 0.8em;
            margin-bottom: 1.5em;
        }

        .label-inline {
            font-weight: bold;
            display: inline-block;
            margin-right: 0.5em;
        }

        .checkbox-line {
            margin-bottom: 0.5em;
        }

        .checkbox-line input {
            margin-right: 0.5em;
        }

        /* Abschnitts-Überschriften */
        h2 {
            margin: 1em 0 0.5em;
            font-size: 1.1em;
            text-transform: uppercase;
        }

        /* Signatur-Table */
        .sign-table {
            width: 100%;
            border-collapse: collapse;
            margin: 2em 0;
        }

        .sign-table td {
            border: none;
            text-align: center;
            padding: 0.5em;
        }

        .sign-table .line {
            border-bottom: 1px solid #000;
            width: 200px;
            margin: 0 auto 0.5em;
            height: 0;
        }

        /* Anlagenverzeichnis */
        .attachment-title {
            text-align: center;
            font-weight: bold;
            margin: 2em 0 0.5em;
            text-transform: uppercase;
        }

        h3 {
            margin: 1.5em 0 0.5em;
            font-size: 1em;
            font-weight: bold;
        }

        /* ── Seite für Anlage 2 mit fixem Footer ─────────────────────────── */
        .anl2-page {
            position: relative;
            min-height: calc(100vh - 4cm);
            /* Body-Ränder abziehen */
            padding-bottom: 2cm;
            /* Platz für Footer-Linie */
        }

        .anl3-placeholder {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            text-align: center;
            margin: 0;
            font: inherit;
        }

        /* Page-Break */
        .page-break {
            page-break-before: always;
        }

        /* Druck-Ränder und fixer Footer für PDF */
        @media print {
            body {
                margin: 1cm;
            }

            /* fixed sorgt dafür, dass es unabhängig vom Flow am Druckrand klebt */
            .anl3-placeholder {
                position: fixed;
                bottom: 1cm;
                /* genau über der Papierkante */
            }
        }
    </style>

    </style>
</head>

<body>

    <!-- ========== Seite 1 ========== -->
    <img src="logo.png" alt="Cloud Eatery Logo" class="logo">
    <h1>Kooperationsvereinbarung</h1>

    <div class="intro">
        <p>zwischen der <strong>CloudEatery GmbH</strong>, vertreten durch den Geschäftsführer Remo Gianfrancesco,
            Kaiserstraße 65, 60329 Frankfurt</p>
        <p class="sub">(nachfolgend: „Lizenzgeber“)</p>
        <p class="and">und</p>
    </div>
    <!-- Kooperationspartner -->
    <table class="block-table">
        <colgroup>
            <col class="col-label">
            <col class="col-field">
        </colgroup>
        <tr>
            <th class="label" rowspan="5">Kooperationspartner:</th>
            <td class="field">
                <div class="hint-line">
                    <span class="hint-text">{{ $form->restaurantname }}</span>
                    <div class="line"></div>
                </div>
            </td>
        </tr>
        <tr>
            <td class="field">
                <div class="hint-line">
                    <span class="hint-text">{{ $form->owner_name }}</span>
                    <div class="line"></div>
                </div>
            </td>
        </tr>
        <tr>
            <td class="field">
                <div class="hint-line">
                    <span class="hint-text">{{ $form->managing_director }}</span>
                    <div class="line"></div>
                </div>
            </td>
        </tr>
        <tr>
            <td class="field">
                <div class="hint-line">
                    <span class="hint-text">{{ $form->post_address }}</span>
                    <div class="line"></div>
                </div>
            </td>
        </tr>
        <tr>
            <td class="field">
                <div class="subnote">(nachfolgend: „Lizenznehmer“)</div>
            </td>
        </tr>
    </table>

    <!-- Kontaktdaten -->
    <table class="block-table">
        <colgroup>
            <col class="col-label">
            <col class="col-field">
        </colgroup>
        <tr>
            <th class="label" rowspan="4">Kontaktdaten:</th>
            <td class="field">
                <div class="hint-line">
                    <span class="hint-text">{{ $form->contact_person }}</span>
                    <div class="line"></div>
                </div>
            </td>
        </tr>
        <tr>
            <td class="field">
                <div class="hint-line">
                    <span class="hint-text">{{ $form->phone_number }}</span>
                    <div class="line"></div>
                </div>
            </td>
        </tr>
        <tr>
            <td class="field">
                <div class="hint-line">
                    <span class="hint-text">{{ $form->mobile_number }}</span>

                    <div class="line"></div>
                </div>
            </td>
        </tr>
        <tr>
            <td class="field">
                <div class="hint-line">
                    <span class="hint-text">{{ $form->email }}</span>
                    <div class="line"></div>
                </div>
            </td>
        </tr>
    </table>

    <!-- Standortdaten -->
    <table class="block-table">
        <colgroup>
            <col class="col-label">
            <col class="col-field">
        </colgroup>
        <tr>
            <!-- rowspan increased to 3 -->
            <th class="label" rowspan="3">Standortdaten:</th>
            <td class="field">
                <div class="hint-line">
                    <span class="hint-text">{{ $form->location_address }}</span>
                    <div class="line"></div>
                </div>
            </td>
        </tr>
        <tr>
            <td class="field">
                <div class="hint-line">
                    <span class="hint-text">{{ \Carbon\Carbon::parse($form->start_date)->format('d.m.Y') }}</span>
                    <div class="line"></div>
                </div>
            </td>
        </tr>
        <!-- Neue, dritte Zeile für die zusätzliche Linie -->
        <tr>
            <td class="field">
                <div class="hint-line">
                    <!-- keine hint-text, nur die Unterstrich-Linie -->
                    <span class="hint-text">{{ $form->opening_hours_days }}</span>
                    <div class="line"></div>
                </div>
            </td>
        </tr>
    </table>


    <!-- ========== Seite 2 ========== -->
    <div class="page-break"></div>

    <!-- Öffnungszeiten & Sonstige Daten -->
    <table class="block-table">
        <tr>
            <th class="label">Sonstige Daten:</th>
            <td class="field">
                <div class="hint-line">
                    <div class="line"></div>
                </div>
            </td>
        </tr>
        <tr>
            <th class="label"></th>
            <td class="field">
                <div class="hint-line">
                    <span class="hint-text">{{ $form->vat_id }}</span>
                    <div class="line"></div>
                </div>
            </td>
        </tr>
        <tr>
            <th class="label"></th>
            <td class="field">
                <div class="hint-line">
                    <span class="hint-text">{{ $form->iban }}</span>
                    <div class="line"></div>
                </div>
            </td>
        </tr>
    </table>

    <h2 class="preamble-title">PRÄAMBEL</h2>
    <div class="preamble">
        <p>Der Lizenzgeber hat unter hohem zeitlichem und finanziellem Einsatz ein virtuelles
            Gastronomiekonzept entwickelt. Darunter lässt sich ein mehrstufiges Vertragskonzept
            verstehen, dass unter der Mitwirkung verschiedener selbstständiger Lizenznehmer sowie
            diversen Absatzkanälen, die zentral durch den Lizenzgeber verwaltet, eingerichtet und
            unterhalten werden, Speisen- und Getränkeangebote Endkunden anzubieten, solche zu
            bewerben und zu vertreiben.</p>

        <p>Der Lizenzgeber hat in diesem Zusammenhang ein Lizenzkonzept entwickelt, welches er
            regelmäßig anhand von neuen Erkenntnissen und Bedürfnissen weiterentwickelt und mit
            welchem er ein möglichst hohes Qualitätsniveau gegenüber seinen Kunden anstrebt. Zur
            weiteren Skalierung des Angebotes des Lizenzgebers möchte dieser mit selbstständigen
            Lizenznehmern ein Lizenzkonzept aufbauen und unterhalten, um mittels einer Vielzahl von
            Lizenznehmern ein bundesweites Netzwerk aufzubauen und zu unterhalten. Der Lizenzgeber
            verfügt dabei über ein weitgehendes Know-How im Bereich der Unternehmensführung,
            Kundenverhalten und Verkaufsstrategien und verhandelt die Zutaten mit Lieferanten.</p>

        <p>Das Lizenzkonzept, welchem der Lizenznehmer beitreten will, sieht neben einer Vielzahl an
            Beratungsangeboten insbesondere die Abnahme und den Einsatz der vom Lizenzgeber mit
            Lieferanten verhandelten Lizenzprodukte vor, die der Lizenznehmer verarbeitet und letztlich
            dem Lizenzgeber im auslieferungs- und verzehrfähigen Zustand (zurück-)verkauft, welcher
            das Produkt dann an den Endkunden bringt. Ferner sieht das Lizenzkonzept einen möglichst
            einheitlichen Werbeauftritt durch die Lizenznehmer vor, der sich nach einheitliche Regeln,
            insbesondere hinsichtlich der Vorgehensweise, des Logos, Slogans, der Ausstattung und der
            Präsentation, des Leistungsangebots sowie der Betriebs- und Vertriebsmethoden richtet. Am
            Markt soll die Marke „CloudEatery" mit all Ihren Submarken (z.B. „Vegan Pirates“, „Nonna
            Filomena“, „Noko Noko“, etc.) etabliert und von den Lizenznehmern im Rahmen der Produktion
            bereitgestellt werden.</p>
        <p>Das mit dem Lizenzsystem verbundene Know-How und die Methoden, nach denen die
            Endprodukte aus den Zutaten und Produkten des Lizenzgebers herzustellen sind, ergeben
            sich aus den CloudEatery Handbüchern, die nach Bedarf und im Rahmen fortlaufender
            Weiterentwicklungen durch den Lizenzgeber angepasst und aktualisiert werden können.
        </p>
        <p>Das Lizenzkonzept des Lizenzgebers ist dem Lizenznehmer bekannt. Der Lizenznehmer soll
            stets eigenständig bei der Eröffnung, Führung und Unterhaltung seines Unternehmens
            bleiben. Er verpflichtet sich gleichwohl im Rahmen des Lizenzkonzeptes zur Teilnahme an den
            angebotenen Leistungen des Lizenzgebers, sowie zu weiteren im Folgenden niedergelegten
            Vorgaben.</p>
    </div>

    <!-- ========== Seite 3 ========== -->
    <div class="page-break"></div>

    <!-- Neue Preambel-Absätze -->
    <div class="preamble">
        <p>Der Erfolg der gemeinsamen Weiterentwicklung des Lizenzkonzepts „CloudEatery“ hängt maßgeblich davon ab, dass
            der
            Lizenznehmer die vertraglichen Vereinbarungen und ergänzenden Richtlinien uneingeschränkt beachtet und mit
            dem
            Lizenzgeber vorbehaltslos zusammenarbeitet. Die Qualität der Produkte und Dienstleistungen des Lizenzgebers
            genießen in der Öffentlichkeit einen anerkannt guten Ruf. Dieses positive Image ist sowohl für den
            Lizenzgeber als
            auch für die Lizenznehmer von einzigartigem Vorteil. Dem Lizenznehmer sind die Vorteile bekannt, die ihm
            durch
            seine Identifizierung mit dem Lizenzgeber, durch die Gewährung der damit einhergehenden Rechte, insbesondere
            der
            Nutzung des Know-how der Marken des Lizenzgebers, zukommen. Dem Lizenznehmer ist bewusst, dass sein
            wirtschaftlicher Erfolg nicht allein vom Geschäftskonzept und der Unterstützung durch den Lizenzgeber
            abhängt,
            sondern weitgehend von seiner Umsetzung des Konzepts, sowie seinen eigenen Fähigkeiten und seinem
            persönlichen
            Engagement.</p>
        <p>Die Adaption des Lizenzkonzepts bietet damit keine Garantie für den wirtschaftlichen Erfolg. In jedem Fall
            wird
            vom Lizenzgeber keine Gewährleistung für die Erzielbarkeit bestimmter Umsätze oder Erträge übernommen.</p>
    </div>

    <h2>I. Vereinbarungsgegenstand & Konditionen</h2>
    <div class="box-section">
        <div class="hint-line">
            <span class="label-inline">Startgebühr:</span>
            <span class="hint-text">{{ $form->start_fee }} Euro</span>
            {{-- <div class="line" style="display:inline-block; width:200px;"> {{ $form->start_fee }}</div>
            <span> Euro</span> --}}
        </div>

        <p><strong>Lizenzgebühr:</strong></p>
        <p><em>Lohnherstellungssatz:</em><br>
            Der Lohnherstellungssatz beträgt 52 % (Zweiundfünfzig Prozent) des Brutto-Endkundenumsatzes. Die
            Lizenzgebühr
            beträgt 48 %.</p>

        <p><em>Eigenlieferungssatz:</em><br>
            Der Eigenlieferungssatz beträgt 18 % (achtzehn Prozent) vom Brutto-Endkundenumsatzes, so dass sich bei
            Eigenlieferung der Lohnherstellungssatz auf 70 % (siebzig Prozent) des Brutto-Endkundenumsatzes erhöht. Die
            Lizenzgebühr beträgt bei Eigenlieferung 30 %.</p>

        <div class="hint-line">
            <span class="label-inline">Benötigte zusätzliche Küchen­ausstattung:</span>
            {{-- <div class="line" style="display:inline-block; width:100%;"></div> --}}
            <span class="hint-text">{{ $form->additional_kitchen_equipment }}</span>
        </div>

        <p><strong>Auslieferung:</strong></p>
        <div class="checkbox-line">
            <input type="checkbox" disabled {{ $form->delivery_licensee ? 'checked' : '' }}>
            <label for="own_driver">Eigene Fahrer: Zustellung durch den
                Lizenznehmer</label>
        </div>
        <div class="checkbox-line">
            <input type="checkbox" disabled {{ $form->delivery_platform ? 'checked' : '' }}>
            <label for="platform">Plattform: Zustellung durch den
                Lieferdienst</label>
        </div>
    </div>

    <!-- ========== Seite 4 ========== -->
    <div class="page-break"></div>

    <h2>II. Geltung der Allgemeinen Lizenzbedingungen</h2>
    <p>Die Grundlage der Zusammenarbeit bildet diese Vereinbarung sowie deren Anlagen, insbesondere die Allgemeinen
        Lizenzbedingungen. Zum Zeitpunkt des Vertragsschlusses geltende Allgemeine Lizenzbedingungen sind dem
        Lizenznehmer
        einsehbar gemacht worden. Sie sind jederzeit unter <a
            href="https://www.cloudeatery.de/AllgemeineLizenzBedingungen">www.cloudeatery.de/AllgemeineLizenzBedingungen</a>
        einsehbar.</p>

    <h2>III. Anpassungen und Weiterentwicklungen des Lizenzkonzepts</h2>
    <p>Dem Lizenznehmer ist bewusst, dass der Lizenzgeber berechtigt ist, unter Berücksichtigung von Treu und Glauben im
        Rahmen des Zumutbaren das Lizenzsystem und/oder die Richtlinien zu ändern und/oder zusammenzufassen,
        insbesondere um
        Effizienz, Wirtschaftlichkeit und Wettbewerbsfähigkeit des Lizenzsystems zu wahren und zu steigern. Der
        Lizenznehmer
        wird nach entsprechender Unterrichtung die neuen Vorgaben unverzüglich umsetzen.</p>

    <h2>IV. Vereinbarungslaufzeit</h2>
    <p>Die Vereinbarung beginnt am __________ und gilt für unbestimmte Zeit. Die Parteien vereinbaren eine Testphase von
        3
        (drei) Monaten. Nach Ablauf der ungekündigten Testphase bleibt die Vereinbarung in Kraft.</p>
    <p>Sowohl Lizenzgeber als auch Lizenznehmer sind nach Ablauf der Testphase berechtigt, die Vereinbarung jederzeit
        ordentlich durch eine schriftliche Kündigungsanzeige mit einer Frist von 30 (dreißig) Tagen zu kündigen.</p>

    <h2>V. Weitere Bestimmungen</h2>
    <p>Diese Vereinbarung ersetzt alle früheren Absprachen zwischen den Parteien. Nebenabreden, Ergänzungen oder
        Änderungen sowie die Aufhebung bedürfen der Schriftform.</p>
    <p>Mit Unterzeichnung erklärt der Lizenznehmer, dass er Anschreiben und Anlagen gelesen und verstanden hat und
        zustimmt. Er bestätigt, ausreichend Gelegenheit gehabt zu haben, das Lizenzkonzept sowie Leistungen und
        Pflichten
        kennenzulernen. Ihm ist bekannt, dass er als selbstständiger Unternehmer Risiken trägt und der Erfolg maßgeblich
        von
        seinem Einsatz abhängt.</p>

    <!-- Signaturen -->
    <table class="sign-table">
        <tr>
            <td>
                <div class="line"></div>
                Ort, Datum
            </td>
            <td>
                <div class="line"></div>
                Ort, Datum
            </td>
        </tr>
        <tr>
            <td>
                <div class="line"></div>
                <img src="{{ asset('storage/' . $form->signature_licensee) }}" alt="Lizenznehmer Signatur" style="width: 200px; height: auto;"><br>
                <br>Lizenznehmer
            </td>
            <td>
                <div class="line"></div>
                {{-- {{ asset('storage/' . $form->signature_licensor) }} --}}
                <img src="{{ asset('storage/' . $form->signature_licensor) }}" alt="Lizenzgeber Signatur" style="width: 200px; height: auto;"><br>
                <br>Lizenzgeber
            </td>
        </tr>
    </table>

    <div class="page-break"></div>
    <!-- Anlagenverzeichnis -->
    <h2 class="attachment-title">ANLAGENVERZEICHNIS</h2>
    <p>
        Anlage 1 Gebühren und Leistungsziele<br>
        Anlage 2 Allgemeine Lizenzbedingungen<br>
        Anlage 3 Datenschutzhinweise<br>
        Anlage 4 Widerrufsbelehrung
    </p>

    <!-- Anlage 1 -->
    <div class="page-break"></div>
    <h3>Anlage 1: Gebühren &amp; Leistungsziele</h3>
    <p><strong>Gebühren:</strong><br>
        Der Lizenzgeber vereinbart monatlich den Umsatz und überweist anschließend diesen Betrag abzüglich der in der
        Kooperationsvereinbarung angegebenen Lizenzgebühren und der monatlich getätigten Waren­­einkäufe beim
        CloudEatery-Logistiker. Die Zahlung erfolgt innerhalb der ersten 15 Kalendertage des Folgemonats.</p>
    <p><strong>Leistungsziele:</strong><br>
        Diese Gebühren setzen voraus, dass die Leistungsziele in den folgenden 4 Kategorien eingehalten werden. Werden
        die
        Ziele nicht erreicht, behält sich der Lizenzgeber vor, die Lizenzgebühren zur Korrektur der Leistung zu erhöhen
        oder
        die Zusammenarbeit zu beenden.</p>
    <p><strong>Kundenfeedback:</strong><br>
        Der Lizenznehmer hat als Zielerreichung ein Kundenfeedback von 4.5 (von 5) Bewertungspunkten anzustreben.</p>
    <p><strong>Inaktive Zeiten des Lizenznehmers:</strong><br>
        Der Lizenznehmer soll während der angegebenen Öffnungszeiten die inaktive Zeit auf den Tablets von 0.5 Stunden
        pro
        Woche nicht überschreiten.</p>
    <p><strong>Qualitätsprüfungen:</strong><br>
        In regelmäßigen Abständen wird die CloudEatery GmbH eigenständig oder durch ein Partnerunternehmen
        Qualitätskontrollen durchführen.</p>
    <p><strong>Bestellung Akzeptanzrate:</strong><br>
        Der Lizenznehmer soll während der angegebenen Öffnungszeiten die Bestellungen entsprechend akzeptieren.</p>

    <!-- Anlage 2 -->
    <div class="page-break"></div>
    <div class="anl2-page">
        <h3>Anlage 2: Allgemeine Lizenzbedingungen (ALB)</h3>
        <p>Siehe<br>
            <a href="https://www.cloudeatery.de/allgemeinelizenzbedingungen">
                www.cloudeatery.de/allgemeinelizenzbedingungen
            </a>
        </p>

        <!-- Anlage 3 Platzhalter: immer ganz unten auf dieser Seite -->
        <p class="anl3-placeholder">
            ........................................................................................
        </p>
    </div>


</body>

</html>

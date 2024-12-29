<?php include 'header.php'; ?>
<main>
    <h2 class="nadpis">Hodnocení alba</h2>
    <table class="containerhodnoceni">
        <tr class="hlavicka">
            <th class="nadpisy">Datum</th>
            <th class="nadpisy">Jméno</th>
            <th class="nadpisy">Příjmení</th>
            <th class="nadpisy">Pohlaví</th>
            <th class="nadpisy">Email</th>
            <th class="nadpisy">Název</th>
            <th class="nadpisy">Umělec</th>
            <th class="nadpisy">Žánr</th>
            <th class="nadpisy">Hodnocení</th>
            <th class="nadpisy">Explicitní</th>
            <th class="nadpisy">Komentář</th>
        </tr>
        <?php
        if (file_exists('data.txt')) {
            $lines = file('data.txt');
            foreach ($lines as $line) {
                $parts = explode(';', $line);
                echo '<tr>';
                foreach ($parts as $part) {
                    echo '<td>' . htmlspecialchars($part) . '</td>';
                }
                echo '</tr>';
            }
        } else {
            echo '<tr><td colspan="7">Žádná hodnocení zatím nebyla přidána.</td></tr>';
        }
        ?>
    </table>
</main>
<?php include 'footer.php'; ?>
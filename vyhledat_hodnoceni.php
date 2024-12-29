<?php include 'header.php'; ?>

<main>
    <div class="containerform">
        <h2>Vyhledat hodnocení</h2>
        <form method="GET" action="vyhledat_hodnoceni.php" class="containerhledani">
            <label for="krit">Hledat podle:</label>
            <select id="krit" name="krit">
                <option value="umelec">Umělec</option>
                <option value="nazev">Název alba</option>
            </select><br>

            <label for="hodnota">Hodnota:</label>
            <input type="text" id="hodnota" name="hodnota" required><br>

            <button type="submit">Vyhledat</button>
        </form>

        <?php
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['krit']) && isset($_GET['hodnota'])) {
    $krit = htmlspecialchars($_GET['krit']);
    $hodnota = htmlspecialchars($_GET['hodnota']);

    if (file_exists('data.txt')) {
        $lines = file('data.txt');
        $results = [];

        foreach ($lines as $line) {
            $parts = explode(';', $line);
            if (
                ($krit === 'umelec' && isset($parts[6]) && stripos($parts[6], $hodnota) !== false) ||
                ($krit === 'nazev' && isset($parts[5]) && stripos($parts[5], $hodnota) !== false)
            ) {
                $results[] = $parts;
            }
        }

        if (!empty($results)) {
            echo '<h3>Výsledky vyhledávání:</h3>';
            echo '<table>';
            echo '<tr><th>Datum</th><th>Jméno</th><th>Příjmení</th><th>Pohlaví</th><th>Email</th><th>Název</th><th>Umělec</th><th>Žánr</th><th>Hodnocení</th><th>Explicitní</th><th>Komentář</th></tr>';

            foreach ($results as $result) {
                echo '<tr>';
                foreach ($result as $field) {
                    echo '<td>' . htmlspecialchars($field) . '</td>';
                }
                echo '</tr>';
            }

            echo '</table>';
        } else {
            echo '<p>Žádné výsledky nenalezeny.</p>';
        }
    } else {
        echo '<p>Žádná data nejsou k dispozici.</p>';
    }
}
?>
    </div>
</main>

<?php include 'footer.php'; ?>
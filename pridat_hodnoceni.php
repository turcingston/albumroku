<?php include 'header.php'; ?>
<main>
    
    <form method="POST" action="uloz.php" class="containerform">
        <h2>Přidat hodnocení</h2>
        <label for="jmeno">Vaše jméno:</label>
        <input type="text" id="jmeno" name="jmeno" required><br>

        <label for="prijmeni">Vaše příjmení:</label>
        <input type="text" id="prijmeni" name="prijmeni" required><br>
        <table>
    <tr>
        <td><label for="pohlavi">Pohlaví:</label></td>
        <td>
            <div style="display: flex; gap: 10px;">
                <label>
                    <input type="radio" name="pohlavi" value="Muž" required/>
                    <span>Muž</span>
                </label>
                <label>
                    <input type="radio" name="pohlavi" value="Žena"/>
                    <span>Žena</span>
                </label>        
                <label>
                    <input type="radio" name="pohlavi" value="Jiné"/>
                    <span>Jiné</span>
                </label>
            </div>
        </td>
    </tr>
</table>
        <label for="email">Váš email:</label>
        <input type="email" id="email" name="email" required><br>

        <label for="nazev">Název alba:</label>
        <input type="text" id="nazev" name="nazev" required><br>

        <label for="umelec">Umělec:</label>
        <input type="text" id="umelec" name="umelec" required><br>


        <label for="zanr">Žánr:</label>
        <select id="zanr" name="zanr">
            <option value="hiphop">Hip hop</option>
            <option value="pop">Pop</option>
            <option value="rock">Rock</option>
            <option value="jazz">Jazz</option>
            <option value="techno">Techno</option>
            <option value="house">House</option>
            <option value="dnb">Drum and Bass</option>
            <option value="punk">Punk</option>
            <option value="indie">Indie</option>
            <option value="alternative">Alternative</option>
            <option value="reggaeton">Reggaeton</option>
            <option value="rnb">R&B</option>
            <option value="metal">Metal</option>
            <option value="country">Country</option>
            <option value="folk">Folk</option>
        </select><br>

        <label for="hodnoceni">Hodnocení (z 10):</label>
        <input type="number" id="hodnoceni" name="hodnoceni" min="0" max="10" required>

        <label for="explicitni">Explicitní?</label>
        <input type="checkbox" id="explicitni" name="explicitni"><br>

        <label for="komentar">Komentář:</label>
        <textarea id="komentar" name="komentar"></textarea><br>

        <button type="submit">Odeslat hodnocení</button>
    </form>
</main>
<?php include 'footer.php'; ?>
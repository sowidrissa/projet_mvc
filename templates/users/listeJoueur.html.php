<div class="liste-joueurs">

    <h2>LISTE DES JOUEURS PAR SCORE</h2>

    <table>
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Score</th>
        </tr>

    
        <?php foreach($data as $value) : ?>
        <tr>
            <td><?= $value['nom'] ?></td>
            <td><?= $value['prenom'] ?></td>
            <td><?= $value['score'] ?></td>
        </tr>
        <?php endforeach ?>
    </table>

</div>
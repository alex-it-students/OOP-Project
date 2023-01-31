<div class="container w-50 py-5">
    <div class="card text-center">
        <h5 class="card-header"><?php echo $data['Title'] ?></h5>
        <div class="card-body">
            <div class="thumbnail">
                <img src="<?php echo $data['Poster']?>" alt="..." height="350">
            </div>
            <p class="card-text py-3"><?php echo $data['Synopsis'];?></p>
            <table class="table">
                <tbody>
                <tr>
                    <th>Year of release</th>
                    <td><?php echo $data['Release Year'];?></td>
                </tr>
                <tr>
                    <th>Realisator</th>
                    <td><?php echo $data['Realisator'];?></td>
                </tr>
                <tr>
                    <th>Genre</th>
                    <td><?php echo $data['Genre'];?></td>
                </tr>
                <tr>
                    <th>Rating</th>
                    <td><?php echo $data['Rating'];?></td>
                </tr>
                <tr>
                    <th>Season(s)</th>
                    <td><?php echo $data['Seasons'];?></td>
                </tr>
                </tbody>
            </table>

            <table class="table">
                <tbody>
                <tr>
                    <th>Episode list</th>
                    <td></td>
                </tr>

                <?php foreach ($data['Episodes'] as $key => $value):?>
                    <?php echo
                        "<tr><th>".$value."</th><td></td>
                            </tr>";?>
                <?php endforeach;?>

                </tbody>
            </table>




            <a href="#" class="btn btn-secondary" onclick="window.history.back()">Go back</a>
        </div>
    </div>
</div>
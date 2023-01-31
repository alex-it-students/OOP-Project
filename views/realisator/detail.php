<div class="container w-50 py-5">
<div class="card text-center">
    <h5 class="card-header"><?php echo $data['Name'] ?></h5>
    <div class="card-body">
        <div class="thumbnail">
            <img src="<?php echo $data['Poster']?>" alt="..." height="350">
        </div>
        <p class="card-text py-3"><?php echo $data['Biography'];?></p>
        <table class="table">
            <tbody>
            <tr>
                <th>Age</th>
                <td><?php echo $data['Age'];?></td>
            </tr>
            <tr>
                <th>Country</th>
                <td><?php echo $data['Country'];?></td>
            </tr>
            </tbody>
        </table>
        <a href="#" class="btn btn-secondary" onclick="window.history.back()">Go back</a>
    </div>
</div>
</div>



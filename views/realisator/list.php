<div class="mx-auto container row border">

    <?php foreach($datas as $key => $value) :?>
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="<?php echo $value['Poster']?>" alt="..." height="350">
                <div class="caption">
                    <h3><?php echo "<p>".$value['Name']. "</p>"?></h3>

                    <p><a href="<?php echo '/realisator/detail/'.$value['id'];?>" class="btn btn-secondary" role="button">Details</a>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>

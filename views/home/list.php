
<div class="container py-5">
<div class="mx-auto container row border">
    <h2>Featured Films</h2>
    <p><a href="/film">see all >></a></p>
      <?php foreach($datas['Films'] as $key => $value) :?>
    <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="<?php echo $value['Poster']?>" alt="..." height="350">
      <div class="caption">
        <h3><?php echo "<p>".$value['Title']. "</p>"?></h3>
        <?php echo "<p>".$value['Synopsis']."</p>" ;?>
          <p><a href="<?php echo '/film/detail/'.$value['id'];?>" class="btn btn-secondary" role="button">Details</a></p>
      </div>
    </div>
    </div>
      <?php endforeach; ?>
</div>
<br>
<div class="mx-auto container row border">
    <h2>Featured Series</h2>
    <p><a href="/serie">see all >></a></p>
    <?php foreach($datas['Series'] as $key => $value) :?>
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="<?php echo $value['Poster']?>" alt="..." height="350">
                <div class="caption">
                    <h3><?php echo "<p>".$value['Title']. "</p>"?></h3>
                    <?php echo "<p>".$value['Synopsis']."</p>" ;?>
                    <p><a href="<?php echo '/serie/detail/'.$value['id'];?>" class="btn btn-secondary" role="button">Details</a>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>
<br>
<div class="mx-auto container row border">
    <h2>Featured Realisators</h2>
    <p><a href="/realisator">see all >></a></p>
    <?php foreach($datas['Realisators'] as $key => $value) :?>
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
</div>
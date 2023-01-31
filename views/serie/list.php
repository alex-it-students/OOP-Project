<table class="table list align-middle">
    <?php echo "<tr>";?>
    <?php foreach(array_slice($datas[0],0,8) as $key => $value):?>
        <?php echo "<th scope 'col'>" .  $key   . "</th>";?>
    <?php endforeach;?>
    <?php echo "</tr>";?>
    </thead>
    <tbody>

    <?php foreach($datas as $key => $value) :?>

        <?php echo "<tr>"; ?>
        <?php echo "<td>" .  $value['id']   . "</td>";?>
        <?php echo '<td><a href="'.$value['Poster']. '">
            <img  class="thumbnail" style="min-height:200px;height:200px;" src="' .$value['Poster'].  '"</td>';?>

        <?php echo "<td><a href='/serie/detail/" .$value['id']. "'>" . $value['Title']   . "</a></td>"; ?>

        <!-- <?php echo "<td><a href='/serie/detail/'" .$value['id']. "</a>". $value['Title']   . "</td>"; ?> -->
        <?php echo "<td>" .  $value['Realisator']   . "</td>";?>
        <?php echo "<td>" .  $value['Release Year']   . "</td>";?>
        <?php echo "<td>" .  $value['Genre']   . "</td>";?>
        <?php echo "<td>" .  $value['Synopsis']   . "</td>";?>
        <?php echo "<td>" .  $value['Rating']   . "</td>";?>
        <?php echo "</tr>"?>

    <?php endforeach; ?>
    </tbody>

</table>

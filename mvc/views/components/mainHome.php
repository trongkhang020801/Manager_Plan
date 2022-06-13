<?php
    $infflight = json_decode($data['infflight']);
?>

   <article class="col2 pad_left1">
        <h2>Flight information</h2>
        
        <table class="table table-hover">
            <thead>
            <tr>
                <th>NumID</th>
                <th>NameFlight</th>
                <th>Departure</th>
                <th>Destination</th>
                <th>TimeGo</th>
                <th>TimeArrival</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach($infflight as $item) { ?>
                <tr>
                    <td><?php echo $item->soHieu?></td>
                    <td><?php echo $item->tenChuyenBay?></td>
                    <td><?php echo $item->diemDen?></td>
                    <td><?php echo $item->diemDi?></td>
                    <td><?php echo $item->thoigiandi?></td>
                    <td><?php echo $item->thoigianden?></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </article>
</section>
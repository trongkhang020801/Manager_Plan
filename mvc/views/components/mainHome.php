<?php
    $infflight = json_decode($data['infflight']);
?>

   <article class="col2 pad_left1">
        <h2>Flight information</h2>
        <table id="example" class="table table-striped" width="100%">
  <thead>
    <tr>
      <th class="th-sm">IdAir

      </th>
      <th class="th-sm">NameAir

      </th>
      <th class="th-sm">Departure

      </th>
      <th class="th-sm">Destination

      </th>
      <th class="th-sm">TimeGo

      </th>
      <th class="th-sm">TimeArrival

      </th>
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
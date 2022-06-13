<?php
class StatisticalModel extends DB
{

    function delete()
    {
        $qr = "DELETE from statistical";
        $rs = false;
        if (mysqli_query($this->con, $qr)) {
            $rs = true;
        }
        return $rs;
    }
    function insert()
    {
        $this->delete();
        $qr = "SELECT date(ngaydac) as date, sum(hoadon.tongtien) as total, count(DISTINCT(hoadon.id)) as order_total , count(*) as quantity FROM hoadon, chitiethoadon WHERE hoadon.id = chitiethoadon.id_hd GROUP BY date(ngaydac)";
        $rows = mysqli_query($this->con, $qr);
        while ($row = mysqli_fetch_assoc($rows)) {
            $date = $row['date'];
            $total = $row['total'];
            $profit = $total * 20/100;
            $order_total = $row['order_total'];
            $quantity = $row['quantity'];
            $qr = "INSERT into statistical VALUE('$date', '$total', '$profit', '$quantity',  '$order_total')";
            $rs = false;
            if (mysqli_query($this->con, $qr)) {
                $rs = true;
            }
        }

        return $rs;
    }

    function total($fromDate, $nextDate) {
        $qr = "SELECT * FROM statistical where order_date between '$fromDate' and '$nextDate'";
        $rows = mysqli_query($this->con, $qr);
        $arr = array();
        while($row = mysqli_fetch_assoc($rows)) {
            $arr[] = $row;
        }
        return json_encode($arr);
    }   

    function getSalesMonth($month) {
        $qr = "SELECT sum(sales) as total from statistical where month(order_date) = '$month'";
        $rows = mysqli_query($this->con, $qr);
        $row = mysqli_fetch_assoc($rows);
        return json_encode($row);
    }
    function getSalesYear($month) {
        $qr = "SELECT sum(sales) as total from statistical where year(order_date) = '$month'";
        $rows = mysqli_query($this->con, $qr);
        $row = mysqli_fetch_assoc($rows);
        return json_encode($row);
    }
}

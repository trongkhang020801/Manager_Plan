<?php
$nameAirline = json_decode($data['nameAirline']);
?>
<div class="main">
        <!-- content -->
        <section id="content">
            <article class="col1">
                <div class="pad_1">
                    <h2>Look up flight information</h2>
                    <form id="form_1" action="home/search" method="post">
                        <div class="wrapper pad_bot1">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                            Flight To
                            </label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                            <label class="form-check-label" for="flexRadioDefault2">
                            Flight Away
                            </label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Destination</label>
                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Enter destination">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Departure</label>
                            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Enter Departure">
                        </div>
                        Date
                            <div class="row">
                                <div class='col-sm-11'>
                                    <div class="form-group">
                                        <div class='input-group date' id='datetimepicker1'>
                                        <input type='text' class="form-control" />
                                        <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                        </span>
                                        </div>
                                    </div>
                                </div>
                                <script type="text/javascript">
                                    $(function () {
                                        $('#datetimepicker1').datetimepicker();
                                    });
                                </script>
                            </div>
                            <div class="mb-3">                
                            Choose an Airline
                            <select class="form-select" aria-label="Default select example" name="nameair" id="nameair">
                                <option values="0">All an Airline</option>
                                <?php foreach($nameAirline as $item) {?>
                                <option value=<?php echo '"'.$item->idHang.'"'?>><?php echo $item->tenHang?></option>
                                <?php } ?>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Search</button>
                    </form>

                </div>
            </article>
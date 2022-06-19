<?php
$nameAirline = json_decode($data['nameAirline']);
$nameTo = json_decode($data['nameTo']);
$nameflight = json_decode($data['nameflight']);
?>
<div class="main">
        <!-- content -->
        <section id="content">
            <article class="col1">
                <div class="pad_1">
                    <h2>Look up flight information</h2>
                    <form id="form_1" action="home/search" method="post">
                        <div class="mb-3">                
                            Choose an Destination
                            <select class="form-select" aria-label="Default select example" name="namedes" id="namedes">
                                <option values=""></option>
                                <?php foreach($nameTo as $item) {?>
                                <option value=<?php echo '"'.$item->diemDen.'"'?>><?php echo $item->diemDen?></option>
                                <?php } ?>
                                </select>
                        </div>
                        <div class="mb-3">                
                            Choose an FLIGHT TYPE
                            <select class="form-select" aria-label="Default select example" name="namefl" id="namefl">
                                <option values=""></option>
                                <?php foreach($nameflight as $item) {?>
                                <option value=<?php echo '"'.$item->soHieu.'"'?>><?php echo $item->soHieu?></option>
                                <?php } ?>
                                </select>
                        </div>
                        <!-- <div class="mb-3">
                                <div class="row form-group">
                                    <label for="date" class="col-sm-11 col-form-label">Date</label>
                                    <div class="col-sm-12">
                                        <div class="input-group date" id="datepicker">
                                            <input type="text" class="form-control">
                                            <span class="input-group-append">
                                                <span class="input-group-text bg-white d-block">
                                                    <i class="fa fa-calendar"></i>
                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <div class="mb-3">                
                                Choose an Airline
                                <select class="form-select" aria-label="Default select example" name="nameair" id="nameair">
                                <option values=""></option>
                                <?php foreach($nameAirline as $item) {?>
                                <option value=<?php echo '"'.$item->idHang.'"'?>><?php echo $item->tenHang?></option>
                                <?php } ?>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Search</button>
                    </form>

                </div>
            </article>
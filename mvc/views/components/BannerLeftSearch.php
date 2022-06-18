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
                        
                            <button type="submit" class="btn btn-primary">Search</button>
                    </form>

                </div>
            </article>
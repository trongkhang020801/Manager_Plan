<div class="main">
        <!-- content -->
        <section id="content">
            <article class="col1">
                <div class="pad_1">
                    <h2>Your Flight Planner</h2>
                    <form id="form_1" action="" method="post">
                        <div class="wrapper pad_bot1">
                            <div class="radio marg_right1">
                                <input type="radio" name="name1">Round Trip<br>
                                <input type="radio" name="name1">One Way
                            </div>
                            <div class="radio">
                                <input type="radio" name="name1">Empty-Leg<br>
                                <input type="radio" name="name1">Multi-Leg
                            </div>
                        </div>
                        <div class="wrapper">
                            Leaving From:
                            <div class="bg"><input type="text" class="input input1" value="Enter City or Airport Code" onblur="if(this.value=='') this.value='Enter City or Airport Code'" onFocus="if(this.value =='Enter City or Airport Code' ) this.value=''"></div>
                        </div>
                        <div class="wrapper">
                            Going To:
                            <div class="bg"><input type="text" class="input input1" value="Enter City or Airport Code" onblur="if(this.value=='') this.value='Enter City or Airport Code'" onFocus="if(this.value =='Enter City or Airport Code' ) this.value=''"></div>
                        </div>
                        <div class="wrapper">
                            Departure Date and Time:
                            <div class="wrapper">
                                <div class="bg left"><input type="text" class="input input2" value="mm/dd/yyyy " onblur="if(this.value=='') this.value='mm/dd/yyyy '" onFocus="if(this.value =='mm/dd/yyyy ' ) this.value=''"></div>
                                <div class="bg right"><input type="text" class="input input2" value="12:00am" onblur="if(this.value=='') this.value='12:00am'" onFocus="if(this.value =='12:00am' ) this.value=''"></div>
                            </div>
                        </div>
                        <div class="wrapper">
                            Return Date and Time:
                            <div class="wrapper">
                                <div class="bg left"><input type="text" class="input input2" value="mm/dd/yyyy " onblur="if(this.value=='') this.value='mm/dd/yyyy '" onFocus="if(this.value =='mm/dd/yyyy ' ) this.value=''"></div>
                                <div class="bg right"><input type="text" class="input input2" value="12:00am" onblur="if(this.value=='') this.value='12:00am'" onFocus="if(this.value =='12:00am' ) this.value=''"></div>
                            </div>
                        </div>
                        <div class="wrapper">
                            <p>Passenger(s):</p>
                            <div class="bg left"><input type="text" class="input input2" value="# passengers" onblur="if(this.value=='') this.value='# passengers'" onFocus="if(this.value =='# passengers' ) this.value=''"></div>
                            <a href="#" class="button2" onClick="document.getElementById('form_1').submit()">go!</a>
                        </div>
                    </form>

                </div>
            </article>
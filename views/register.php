<div class="container">

    <div class="row">
        <div class="col col-xs-12 kruimel">
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Make an account</li>
            </ol>
        </div>
        <div class="col col-xs-12">
            <div class="col col-xs-12">
                <h2 class="center grey topbottom20">Make your account in 3 steps...</h2></div>
            <div class="col col-xs-12">
                <div class="col col-xs-offset-2 col-md-3">
                    <figure class="stap stap-actief">1</figure><span class="stap-text hidden-sm hidden-xs">Make an account</span>
                </div>
                <div class="col col-md-3">
                    <figure class="stap">2</figure><span class="stap-text hidden-sm hidden-xs">Verify your account</span>
                </div>
                <div class="col col-md-3">
                    <figure class="stap">3</figure><span class="stap-text hidden-sm hidden-xs">Done!</span></div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <form role="form" method="post" action="" autocomplete="off">
                <h1 class="top20">Make an account</h1>
                <p>Already a member? <a href='?page=login'>Login</a></p>
                <hr>
                <div class="col-md-5">
                    <div class="col col-xs-12">
                        <h4>Account</h4>
                    </div>

                    <?php
					//check for any errors
					if(isset($error)){
						foreach($error as $error){
							echo '<p class="bg-danger">'.$error.'</p>';
						}
					}

					//if action is joined show sucess
					if(isset($_GET['action']) && $_GET['action'] == 'joined'){
						echo "<h2 class='bg-success'>Registration successful, please check your email to activate your account.</h2>";
					}
					?>

                        <div class="form-group">
                            <input type="text" name="username" id="username" class="form-control input-lg" placeholder="User Name" value="<?php if(isset($error)){ echo $_POST['username']; } ?>" tabindex="1">
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email Address" value="<?php if(isset($error)){ echo $_POST['email']; } ?>" tabindex="2">
                        </div>
                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" tabindex="3">
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="password" name="passwordConfirm" id="passwordConfirm" class="form-control input-lg" placeholder="Confirm Password" tabindex="4">
                                </div>
                            </div>
                        </div>
                        <div class="col col-xs-12">
                            <h4>Personal</h4>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <div class="col-sm-4">
                                    <input type="radio" name="sex" value="male" tabindex="5"> Male</div>
                                <div class="col-sm-4">
                                    <input type="radio" name="sex" value="female" tabindex="6"> Female</div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="firstname" id="firstname" class="form-control input-lg" placeholder="First name" tabindex="7">
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="lastname" id="lastname" class="form-control input-lg" placeholder="Last name" tabindex="8">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" name="address" id="address" class="form-control input-lg" placeholder="Address" tabindex="9">
                        </div>

                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="zipcode" id="zipcode" class="form-control input-lg" placeholder="Zip Code" tabindex="10">
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="city" id="city" class="form-control input-lg" placeholder="City" tabindex="11">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" name="number" id="number" class="form-control input-lg" placeholder="Phone Number" tabindex="12">
                        </div>

                </div>
                <div class="col col-xs-12 col-sm-7 col-md-7 col-lg-7">
                    <div class="col col-xs-12">
                        <h4>Select languages</h4>
                    </div>
                    <div class="col col-sm-12 col-md-6">
                        <div class="input-group taal">
                            <span class="input-group-addon">
                                <img src="images/vlaggen/Netherlands.png" alt="Nederlands" class="taal-vlag">
                                <span class="taal-titel">Dutch</span>
                            </span>
                            <select name="NL" class="form-control selectpicker">
                                <option selected value="onvoldoende">Onvoldoende (Insufficient)</option>
                                <option value="matig">Matig (Moderate)</option>
                                <option value="goed">Goed (Good)</option>
                            </select>
                        </div>
                    </div>
                    <div class="col col-sm-12 col-md-6">
                        <div class="input-group taal">
                            <span class="input-group-addon">
                                <img src="images/vlaggen/United-Kingdom.png" alt="Nederlands" class="taal-vlag">
                                <span class="taal-titel">English</span>
                            </span>
                            <select name="EN" class="form-control selectpicker">

                                <option selected value="onvoldoende">Insufficient</option>
                                <option value="matig">Moderate</option>
                                <option value="goed">Good</option>
                            </select>
                        </div>
                    </div>
                    <div class="col col-sm-12 col-md-6">
                        <div class="input-group taal">
                            <span class="input-group-addon">
                                <img src="images/vlaggen/Germany.png" alt="Nederlands" class="taal-vlag">
                                <span class="taal-titel">German</span>
                            </span>
                            <select name="GE" class="form-control selectpicker">

                                <option selected value="onvoldoende">Unzureichende (Insufficient)</option>
                                <option value="matig">Mäßigen (Moderate)</option>
                                <option value="goed">Gut (Good)</option>
                            </select>
                        </div>
                    </div>
                    <div class="col col-sm-12 col-md-6">
                        <div class="input-group taal">
                            <span class="input-group-addon">
                                <img src="images/vlaggen/France.png" alt="Nederlands" class="taal-vlag">
                                <span class="taal-titel">France</span>
                            </span>
                            <select name="FR" class="form-control selectpicker">

                                <option selected value="onvoldoende">Insuffisant (Insufficient)</option>
                                <option value="matig">Modéré (Moderate)</option>
                                <option value="goed">Bon (Good)</option>
                            </select>
                        </div>
                    </div>
                    <div class="col col-sm-12 col-md-6">
                        <div class="input-group taal">
                            <span class="input-group-addon">
                                <img src="images/vlaggen/Spain.png" alt="Nederlands" class="taal-vlag">
                                <span class="taal-titel">Spanish</span>
                            </span>
                            <select name="ES" class="form-control selectpicker">

                                <option selected value="onvoldoende">Insuficiente (Insufficient)</option>
                                <option value="matig">Moderado (Moderate)</option>
                                <option value="goed">Buena (Good)</option>
                            </select>
                        </div>
                    </div>
                    <div class="col col-sm-12 col-md-6">
                        <div class="input-group taal">
                            <span class="input-group-addon">
                                <img src="images/vlaggen/Italy.png" alt="Nederlands" class="taal-vlag">
                                <span class="taal-titel">Italian</span>
                            </span>
                            <select name="IT" class="form-control selectpicker">

                                <option selected value="onvoldoende">Insufficiente (Insufficient)</option>
                                <option value="matig">Moderato (Moderate)</option>
                                <option value="goed">Buono (Good)</option>
                            </select>
                        </div>
                    </div>
                    <div class="col col-sm-12 col-md-6">
                        <div class="input-group taal">
                            <span class="input-group-addon">
                                <img src="images/vlaggen/Russia.png" alt="Nederlands" class="taal-vlag">
                                <span class="taal-titel">Russian</span>
                            </span>
                            <select name="RU" class="form-control selectpicker">

                                <option selected value="onvoldoende">недостаточное (Insufficient)</option>
                                <option value="matig">умеренный (Moderate)</option>
                                <option value="goed">плохой (Good)</option>
                            </select>
                        </div>
                    </div>
                    <div class="col col-sm-12 col-md-6">
                        <div class="input-group taal">
                            <span class="input-group-addon">
                                <img src="images/vlaggen/China.png" alt="Nederlands" class="taal-vlag">
                                <span class="taal-titel">Chinese</span>
                            </span>
                            <select name="CH" class="form-control selectpicker">

                                <option selected value="onvoldoende">不足 (Insufficient)</option>
                                <option value="matig">緩和 (Moderate)</option>
                                <option value="goed">善 (Good)</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <br>
                    </div>
                    <div class="col-xs-6 col-md-6">
                        <input type="submit" name="submit" value="Register" class="btn btn-primary btn-block btn-lg" tabindex="20">
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>

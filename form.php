<!--=====================================
      FORM MODAL
     =====================================-->

<div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="register form" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-info text-white">
                <h5 class="modal-title" id="exampleModalLabel">Register for Full Stack Conf</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- registration form -->
                <form action = "register.php" method = "POST">
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <strong>Hurry!</strong> Early bird registration ends in two days.
                    </div>
                    <h5 class="mb-4">Basic Info</h5>
                    <div class="form-group">
                        <label class="form-control-label" for="name">Name:</label>
                        <input id="name" type="text" class="form-control" name="name">
                    </div>
                    <div id="nameError" class="alert alert-danger fade show" role="alert">
                        <strong>Error!</strong> Please type a valid name!
                    </div>
                    <div id="test"> Hello </div>
                    <div class="form-group">
                        <label class="form-control-label" for="email">Email:</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="role">Job Role:</label>
                        <select class="custom-select form-control" id="role" name="role">
                            <option value="full stack js developer">Full Stack JavaScript Developer</option>
                            <option value="front end developer">Front End Developer</option>
                            <option value="back end developer">Back End Developer</option>
                            <option value="designer">Designer</option>
                            <option value="student">Student</option>
                        </select>
                    </div>

                    <hr class="my-4">
                    <h5 class="mb-4">Which Topics Interest You Most?</h5>

                    <div class="form-check">
                        <label class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" name="1">
                            <span class="custom-control-indicator"></span>
                            <span class="custom-control-description">JavaScript Frameworks</span>
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" name="2">
                            <span class="custom-control-indicator"></span>
                            <span class="custom-control-description">JavaScript Libraries</span>
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" name="3">
                            <span class="custom-control-indicator"></span>
                            <span class="custom-control-description">Node.js</span>
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" name="4">
                            <span class="custom-control-indicator"></span>
                            <span class="custom-control-description">Build Tools</span>
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" name="5">
                            <span class="custom-control-indicator"></span>
                            <span class="custom-control-description">ES2015</span>
                        </label>
                    </div>

                    <hr class="mb-4">
                    <div class="form-check">
                        <label class="custom-control custom-checkbox">
                            <input id="certificate" name="certificate" type="checkbox" class="custom-control-input">
                            <span class="custom-control-indicator"></span>
                            <span class="custom-control-description">I want to receive a certificate</span>
                        </label>
                    </div>

                    <div id="payment"> <!-- Payment Info Div-->
                        <h5 class="mb-4">Payment Info</h5>

                        <div class="form-row">
                            <div class="col-lg-6 form-group">
                                <label for="cc-num">Card Number:</label>
                                <input class="form-control" id="cc-num" name="cc-num" type="text">
                            </div>

                            <div class="col-lg form-group">
                                <label for="zip">Zip Code:</label>
                                <input class="form-control" id="zip" name="zip" type="text">
                            </div>

                            <div class="col-lg form-group">
                                <label for="cvv">CVV:</label>
                                <input class="form-control" id="cvv" name="cvv" type="text">
                            </div>
                        </div>

                        <div class="form-row">
                            <label class="col-lg-12">Expiration Date:</label>

                            <div class="form-group col-lg-8">
                                <select class="custom-select form-control" id="exp-month" name="exp-month">
                                    <option value="1">1 - January</option>
                                    <option value="2">2 - February</option>
                                    <option value="3">3 - March</option>
                                    <option value="4">4 - April</option>
                                    <option value="5">5 - May</option>
                                    <option value="6">6 - June</option>
                                    <option value="7">7 - July</option>
                                    <option value="8">8 - August</option>
                                    <option value="9">9 - September</option>
                                    <option value="10">10 - October</option>
                                    <option value="11">11 - November</option>
                                    <option value="12">12 - December</option>
                                </select>
                            </div>

                            <div class="form-group col-lg">
                                <select class="custom-select form-control" id="exp-year" name="exp-year">
                                    <option value="2016">2016</option>
                                    <option value="2017">2017</option>
                                    <option value="2018">2018</option>
                                    <option value="2019">2019</option>
                                    <option value="2020">2020</option>
                                </select>
                            </div>
                        </div>
                    </div> <!-- End of Payment Info Div-->
                    <hr class="mb-4">
                    <button id="submit" type="submit" class="btn btn-primary btn-lg">Register</button>
                </form><!-- /registration form -->
            </div>
        </div>
    </div>
</div>
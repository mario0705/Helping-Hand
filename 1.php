<?php include("head.php") ?>


    <!-- Grid row -->
    <div class="row">

        <!-- Grid column -->
        <div class="col-md-6 col-lg-7 mb-4">
 <div class="header peach-gradient">
                    <div class="row d-flex justify-content-center">
                        <h3 class="white-text mb-0 py-5 font-weight-bold">Request for Volunteering</h3>
                    </div>
                </div>
            <!--Card-->
            <div class="card">

                <!--Card image-->
                

                <!--Card content-->
                <div class="card-body ">
                    <!--Title-->
                   <div class="row">
                        <div class="col-md-6">
                            <label for="date" class="">Enter date:</label>
                            <input type="text" id="date" class="form-control" name="date" placeholder="DD/MM/YY" style="width: 8em;">
                        </div>
                        <div class="col-md-6">
                            
                            
                            <div class="form">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="subject" id="exampleRadiosInline4" value="computerscience">
                                    <label class="form-check-label" for="exampleRadiosInline4">
                                        Computer Science
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="subject" id="exampleRadiosInline5" value="mathematics">
                                    <label class="form-check-label" for="exampleRadiosInline5">
                                        Mathematics
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="subject" id="exampleRadiosInline6" value="physics">
                                    <label class="form-check-label" for="exampleRadiosInline6">
                                        Physics
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="subject" id="exampleRadiosInline7" value="chemistry">
                                    <label class="form-check-label" for="exampleRadiosInline7">
                                        Chemistry
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="subject" id="exampleRadiosInline8" value="biology">
                                    <label class="form-check-label" for="exampleRadiosInline8">
                                        Biology
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="subject" id="exampleRadiosInline9" value="accounts">
                                    <label class="form-check-label" for="exampleRadiosInline9">
                                        Accounts
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="subject" id="exampleRadiosInline10" value="history">
                                    <label class="form-check-label" for="exampleRadiosInline10">
                                        History
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="subject" id="exampleRadiosInline11" value="english">
                                    <label class="form-check-label" for="exampleRadiosInline11">
                                        English
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="subject" id="exampleRadiosInline12" value="management">
                                    <label class="form-check-label" for="exampleRadiosInline12">
                                        Management
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="subject" id="exampleRadiosInline13" value="finance">
                                    <label class="form-check-label" for="exampleRadiosInline13">
                                        Finance
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="subject" id="exampleRadiosInline14" value="electronics">
                                    <label class="form-check-label" for="exampleRadiosInline14">
                                        Electronics
                                    </label>
                                </div>
                            </div>
                        </div>
                        <!--Grid row-->
                        <div class="row">
                            <!--Grid column-->
                            <div class="col-md-6">
                                <div class=""><label for="name" class="">From</label>
                                <input type="text" id="name" name="from" class="form-control">
                                
                            </div>
                        </div>
                        <!--Grid column-->
                        <!--Grid column-->
                        <div class="col-md-6">
                            <div class=""><label for="email" class="">Till</label>
                            <input type="text" id="email" name="till" class="form-control">
                            
                        </div>
                    </div>
                    <!--Grid column-->
                </div>
                <div class="form-group">
                    <label for="address">Enter address:</label>
                    <textarea class="form-control rounded-0" id="address" name="address" rows="3" placeholder="Address..."></textarea>
                </div>
                <div class="md-form">
                    <button style="cursor: pointer;" type="Submit" class="btn btn-cyan">Submit</button>
                </div>
            </div>
                </div>

            </div>
            <!--/.Card-->

        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-6 col-lg-5">

            <!--Card-->
            <div class="card green darken-3">

                <!--Card image-->
                <div class="view">
                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(131).jpg" class="card-img-top" alt="photo">
                    <a href="#">
                        <div class="mask rgba-white-slight"></div>
                    </a>
                </div>

                <!--Card content-->
                <div class="card-body text-center">
                    <!--Title-->
                    <h4 class="card-title white-text">Read about polish plants</h4>
                    <!--Text-->
                    <p class="card-text white-text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto vitae.</p>
                    <a href="#" class="btn btn-outline-white btn-md waves-effect">Read more</a>
                </div>

            </div>
            <!--/.Card-->

        </div>
        <!-- Grid column -->

    </div>
    <!-- Grid row -->
<?php
    include("foot.php")
?>
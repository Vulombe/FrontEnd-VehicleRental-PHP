<?php include("templates/inc_header.html"); ?>
        <ul class="list-group">
            <li class="list-group-item">
                <h1>Update Customer</h1>
                <!-- buttons to select the category for the car -->
                <form name="customerForm" id="customerForm">

                    <!-- Details for the car you are inserting -->

                    <!-- Name input textfield -->
                    <div class="form-group row">
                        <!--suppress XmlInvalidId -->
                        <label for="name" class="col-sm-1 col-form-label">Name</label>
                        <div class="col-sm-5">
                            <input type="text" id="txtName" class="form-control">
                            <small id="errorName" class="text-danger"></small>
                        </div>
                    </div>
                    <!-- End of Name text field  -->

                    <!-- Surname input textfield -->
                    <div class="form-group row">
                        <!--suppress XmlInvalidId -->
                        <label for="surname" class="col-sm-1 col-form-label">Surname</label>
                        <div class="col-sm-5">
                            <input type="text" id="txtSurname" class="form-control">
                            <small id="errorSurname" class="text-danger"></small>
                        </div>
                    </div>
                    <!-- End of Surname text field  -->


                    <!-- Email input textfield -->
                    <div class="form-group row">
                        <!--suppress XmlInvalidId -->
                        <label for="email" class="col-sm-1 col-form-label">Email</label>
                        <div class="col-sm-5">
                            <input type="text" readonly id="txtEmail" class="form-control">
                            <small id="errorEmail" class="text-danger"></small>
                        </div>
                    </div>
                    <!-- End of Email text field  -->

                    <!-- House Number Plate input textfield -->
                    <div class="form-group row">
                        <!--suppress XmlInvalidId -->
                        <label for="houseNumber" class="col-sm-1 col-form-label">House Number</label>
                        <div class="col-sm-5">
                            <input type="text" id="txtHouseNumber" class="form-control">
                            <small id="errorHouseNumber" class="text-danger"></small>
                        </div>
                    </div>
                    <!-- End of House Number text field  -->

                    <!-- City input textfield -->
                    <div class="form-group row">
                        <!--suppress XmlInvalidId -->
                        <label for="city" class="col-sm-1 col-form-label">City</label>
                        <div class="col-sm-5">
                            <input type="text" id="txtCity" class="form-control">
                            <small id="errorCity" class="text-danger"></small>
                        </div>
                    </div>
                    <!-- End of City text field  -->


                    <!-- Province input textfield -->
                    <div class="form-group row">
                        <!--suppress XmlInvalidId -->
                        <label for="province" class="col-sm-1 col-form-label">Province</label>
                        <div class="col-sm-5">
                            <input type="text" id="txtProvince" class="form-control">
                            <small id="errorProvince" class="text-danger"></small>
                        </div>
                    </div>
                    <!-- End of Province text field  -->

                    <!-- Postal Code input textfield -->
                    <div class="form-group row">
                        <!--suppress XmlInvalidId -->
                        <label for="postalCode" class="col-sm-1 col-form-label">Postal Code</label>
                        <div class="col-sm-5">
                            <input type="text" id="txtPostalCode" class="form-control">
                            <small id="errorPostalCode" class="text-danger"></small>
                        </div>
                    </div>
                    <!-- End of Postal Code text field  -->


                    <!-- Complex input textfield -->
                    <div class="form-group row">
                        <!--suppress XmlInvalidId -->
                        <label for="complex" class="col-sm-1 col-form-label">Complex</label>
                        <div class="col-sm-5">
                            <input type="text" id="txtComplex" class="form-control">
                            <small id="errorComplex" class="text-danger"></small>
                        </div>
                    </div>
                    <!-- End of Complex text field  -->

                    <!-- Street input textfield -->
                    <div class="form-group row">
                        <!--suppress XmlInvalidId -->
                        <label for="numberStreet" class="col-sm-1 col-form-label">Street</label>
                        <div class="col-sm-5">
                            <input type="text" id="txtStreet" class="form-control">
                            <small id="errorStreet" class="text-danger"></small>
                        </div>
                    </div>
                    <!-- End of Street text field  -->



                    <!--Button to submit the form -->
                    <div class="form-group row">
                        <input type="submit" name="submitAddCar" class="btn btn-outline-success" value="Update Customer" onclick="validate(); return false;">
                    </div>
                    <!-- End of submit button  -->

                    <!-- Temporary hidden button to avoid bottom section  of button from being hidden under the footer -->
                    <div class="form-group row">
                        <input style="visibility: hidden" type="submit" name="submitAddCustomer" class="btn btn-outline-success" value="Add Customer" onclick="addUser()">
                    </div>
                    <!-- End of Temporary hidden button -->
                </form>
            </li>
        </ul>

<br />
<script src="js/customer/updateCustomer.js"></script>
<?php include("templates/inc_footer.html"); ?>


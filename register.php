<?php include("templates/inc_header.html"); ?>
        <ul class="list-group">
            <li class="list-group-item">
                <h1>Register User</h1>
                <!-- Regster Form -->
                <form name="registerForm" id="registerForm">

                    <!-- Details for the car you are inserting -->

                    <!-- Name input textfield -->
                    <div class="form-group row">
                        <!--suppress XmlInvalidId -->
                        <label for="email" class="col-sm-1 col-form-label">Email</label>
                        <div class="col-sm-5">
                            <input type="text" id="txtEmail" class="form-control">
                            <small id="errorEmail" class="text-danger"></small>
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


                    <!-- Password input textfield -->
                    <div class="form-group row">
                        <!--suppress XmlInvalidId -->
                        <label for="password" class="col-sm-1 col-form-label">Password</label>
                        <div class="col-sm-5">
                            <input type="password" id="txtPassword" class="form-control">
                            <small id="errorPassword" class="text-danger"></small>
                        </div>
                    </div>
                    <!-- Password input textfield -->
                    <div class="form-group row">
                        <!--suppress XmlInvalidId -->
                        <label for="password" class="col-sm-1 col-form-label">Confirm Password</label>
                        <div class="col-sm-5">
                            <input type="password" id="txtConfirm" class="form-control">
                            <small id="errorConfirmPassword" class="text-danger"></small>
                        </div>
                    </div>
                    <!-- End of Password text field  -->

                    <!--Button to submit the form -->
                    <div class="form-group row">
                        <input type="submit" name="submitUserRegistration" class="btn btn-outline-success" value="Add User" onclick="validate(); return false;">
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
        <?php include("templates/inc_footer.html"); ?>
@extends("layout.layout")
@section("link")
<link rel="stylesheet" href="asset/css/profile.css">


@section("content")

<div>
@include("inc.navbar")
    <div class="container first-div">
        <form action="">
            <div class="row">
                <div class="col-lg-6 col-sm-6">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12 profile">
                                <h3>Profile Settings</h3><br>
                                <div class="container-fluid">
                                    <div class= "row">
                                        <div class="col-lg-12  col-sm-12">
                                            <label for="name">Full Name</label>
                                            <input type="text" name="name" placeholder="Full Name">
                                        </div>
                                        <div class="col-lg-12  col-sm-12">
                                            <br>
                                            <label for="Email">Email</label>
                                            <input type="email" name="email" placeholder="Email">
    
                                        </div>
                                        <div class="col-lg-7  col-sm-7">
                                            <br>
                                            <label for="nickname">Nick Name</label>
                                            <input type="text" name="nickname" placeholder="Name you wish to be called">
                                        </div>
                                        <div class="col-lg-5  col-sm-5">
                                            <br>
                                            <label for="dob">Date Of Birth</label>
                                            <input type="date" name="dob" placeholder="Date of Birth">
                                        </div>
                                        <div class="col-lg-4  col-sm-4">
                                            <br>
                                            <label for="country">Country</label>
                                            <select name="country" id="country">
                                                <option value="nigeria">Nigeria</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-4  col-sm-4">
                                            <br>
                                            <label for="state">State</label>
                                            <select name="state" id="state">
                                                <option value="F.C.T">F.C.T</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-4  col-sm-4">
                                            <br>
                                            <label for="city">City</label>
                                            <select name="city" id="city">
                                                <option value="city">City</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-12  col-sm-12">
                                            <br>
                                            <label for="street-address">Street Address</label>
                                            <input type="text" name="street-address" placeholder="Street Address">
                                        </div>
                                        <div class="col-lg-4  col-sm-4">
                                            <br>
                                            <label for="postal-code">Postal Code</label>
                                            <input type="text" name="postal-code" placeholder="Postal Code">
                                        </div>
                                        <div class="col-lg-6  col-sm-6">
                                            <br>
                                            <label for="mobile-number">Mobile Number</label>
                                            <input type="number" name="mobile-number" placeholder="Mobile Number">
                                        </div>
                                    </div>
                                </div>
                                

                            </div>
                            <div class="col-lg-12 password-settings">
                                <h3>Password Settings</h3><br>
                                <div class="container">
                                    <div class= "row">
                                        <div class="col-lg-12  col-sm-12">
                                            <label for="password">New Password</label>
                                            <input type="password" name="password" placeholder="New password">
                                        </div>
                                        <div class="col-lg-12  col-sm-12">
                                            <br>
                                            <label for="password_confirmation">Confirm Password</label>
                                            <input type="password" name="confirm_password" placeholder="Confirm Password">
    
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 bio">
                                <h3>Your Bio</h3><br>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <input type="textarea" name="bio" placeholder="Short description about you">
                                        <!-- <textarea name="bio" class="bio"></textarea> -->
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            
                            
                            
                        </div>
                    </div>
                    
                </div>
                <div class="col-lg-6 col-sm-6 g">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 ">
                                <div class="profile-img">
                                    <h3>Profile Image</h3>
                                    <div class="conatiner img-center">
                                        <div class="img">
                                        <!-- <img src="" alt=""> -->

                                        </div>
                                        <button class="change-img">Change Image</button>
                                        <p>JPEG or PNG is recommended</p>
                                    </div>
                                </div>
                                
                                

                            </div>
                            <div class="col-lg-12">
                                <div class="contacts">
                                
                                    <div class="container">
                                    <h3>Other Contacts</h3>
                                        <div class="row">
                                            <div class="col-auto">
                                                <label class="sr-only" for="inlineFormInputGroup">Username</label>
                                                <div class="input-group mb-2">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text">@</div>
                                                    </div>
                                                    <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Username">
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <label class="sr-only" for="inlineFormInputGroup">Username</label>
                                                <div class="input-group mb-2">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text">@</div>
                                                    </div>
                                                    <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Username">
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <label class="sr-only" for="inlineFormInputGroup">Username</label>
                                                <div class="input-group mb-2">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text">@</div>
                                                    </div>
                                                    <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Username">
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <label class="sr-only" for="inlineFormInputGroup">Username</label>
                                                <div class="input-group mb-2">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text">@</div>
                                                    </div>
                                                    <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Username">
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
       
</div>
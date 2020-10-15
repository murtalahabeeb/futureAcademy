@extends("layout.layout")
@section("link")
<link rel="stylesheet" href="asset/css/app.css">
<link rel="stylesheet" href="asset/css/index.css">
<link rel="stylesheet" href="asset/css/contact.css">
<script type="text/javascript" src="lib/jq.js"></script>
<script type="text/javascript" src="asset/js/index.js"></script>


@section("content")
<div>
@include("inc.navbar")
    
    
<div class="main-div">
    <div class="container">
        <div class="row">
            <div class="col-lg-2  col-sm-2 white-line"></div>
            <div class="col-lg-10  col-sm-10">
                <div class="header header-white">
                    <p>Contact Us</p>
                    <p>
                        A club which is a world leader in football and basketball that, through its sporting achievements, fulfils the expectations of all of its supporters both nationally and internationally, that preserves its important historical legacy, that manages its heritage with rigour and transparency to benefit its members, and that acts with social responsibility and good corporate management.
                    </p>
                </div>
                            
            </div>
            <div class="col-lg-12 col-sm-12">
                <div class="content">
                    <div class="form login s">

                        <div class="container">
                            <form action="">
                                <div class="row">
                                    
                                    <div class="col-lg-12  col-sm-12">
                                        <label for="Name">Name</label>
                                        <input type="text" name="Name">
                                    </div><br><br>
                                    <div class="col-lg-12  col-sm-12">
                                        <label for="Email">Email</label>
                                        <input type="Email" name="Email">
                                    </div><br><br>
                                    
                                    
                                    <div class="col-lg-12  col-sm-12 ">
                                        <button type="submit" name="Submit" class="send-mgs">Sign In</button>
                                    </div><br>

                                    
                                    
                                </div>
                            </form><br>
                            
                            
                        </div>


                        </div>
                </div>
            </div>
        </div>
    </div>

    


    

</div>

    

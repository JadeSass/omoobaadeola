<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="theme-color" content="#388E3C">
        <meta content="Get Exclusive Access To Premium Informations That Will Make You Rich Within a Short Period Of Time Using Just Your Phone Or Laptop" name="description">
        <title>How To Earn 6-7 Figures a Month By Pressing Your Phone Or Laptop</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/materialize.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/font-awesome/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>
        <div id="app">
            <div class="bg-particles black darken-3" id="particles-js">
                <div class="container">
                    <div class="panel" style="padding:10px;">
                        <h4 class="black-text center-align"><b>HOW TO EARN <br>
                        <span class="red-text">6 FIGURES</span> <br>IN A MONTH BY PRESSING YOUR PHONE OR LAPTOP.</b></h4>
                        <h5 class="green-text center-align"><b>GET EXCLUSIVE ACCESS TO PREMIUM INFORMATIONS THAT WILL MAKE YOU EARN 6 FIGURES INCOME WITHIN A SHORT PERIOD OF TIME.</b></h5><br>
                        <div class="iconix center-align">
                            <i class="fa fa-caret-down red-text text-darken-3"></i>
                            <h5 class="black-text center-align"><b>Enter Your <span class="green-text">Name</span> And Active <span class="green-text">Email</span> To Get Access.</b></h5>
                        </div>
                        <div class="footer-field">
                            <form action="/affiliate/subscribe" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                                <div class="row">
                                    <!-- Name field -->
                                    <div class="input-field col s12 m12 l6 xl6">
                                        <i class="fa fa-user prefix"></i>
                                        <input type="text" name="name" class="validate" id="name" required>
                                        <label for="name">Your Name<span class="red-text">*</span></label>
                                        <span class="helper-text" data-error="not valid: should contain alphabet A-Z or a-z" data-success="Valid Name">Should contain alphabet</span>
                                    </div>
                                    <!-- Email field -->
                                    <div class="input-field col s12 m12 l6 xl6">
                                        <i class="fa fa-envelope prefix"></i>
                                        <input type="email" name="email" class="validate" id="email" required>
                                        <label for="user-email">Email Address<span class="red-text">*</span></label>
                                        <span class="helper-text" data-error="not valid: should contain @ and domain suffix like .com, .co, .co.za" data-success="Valid Email Address">Should contain an email address</span><br>
                                    </div>
                                    <div class="btn-mid center-align">
                                        <button type="submit" class="btn btn-flat green waves-effect white-text darken-3"><b>Give me Access</b></button type="submit">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <p class="grey-text center-align"><b>&copy; {{ date('Y') }} Pelumi Ezekiel.</b></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Scripts -->
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/materialize.min.js') }}"></script>
        <script src="{{ asset('js/particles.min.js') }}"></script>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>

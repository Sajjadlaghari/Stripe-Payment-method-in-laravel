
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <link rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
      integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7"
      crossorigin="anonymous">
    <link rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">

      <style>
        *{
    margin: 0;
    padding: 0;
}

.main{
    width: 100%;
    background: linear-gradient(to top, rgba(0,0,0,0.5)50%,rgba(0,0,0,0.5)50%), url(1.jpg);
    background-position: center;
    background-size: cover;
    height: auto;
}

.navbar{
    width: 1200px;
    height: 75px;
    margin: auto;
}

.icon{
    width: 200px;
    float: left;
    height: 70px;
}

.logo{
    color: #ff7200;
    font-size: 35px;
    font-family: Arial;
    padding-left: 20px;
    float: left;
    padding-top: 10px;
    margin-top: 5px
}

.menu{
    width: 400px;
    float: left;
    height: 70px;
}

ul{
    float: left;
    display: flex;
    justify-content: center;
    align-items: center;
}

ul li{
    list-style: none;
    margin-left: 62px;
    margin-top: 27px;
    font-size: 14px;
}

ul li a{
    text-decoration: none;
    color: #fff;
    font-family: Arial;
    font-weight: bold;
    transition: 0.4s ease-in-out;
}

ul li a:hover{
    color: #ff7200;
}

.search{
    width: 330px;
    float: left;
    margin-left: 270px;
}

.srch{
    font-family: 'Times New Roman';
    width: 200px;
    height: 40px;
    background: transparent;
    border: 1px solid #ff7200;
    margin-top: 13px;
    color: #fff;
    border-right: none;
    font-size: 16px;
    float: left;
    padding: 10px;
    border-bottom-left-radius: 5px;
    border-top-left-radius: 5px;
}

.btn{
    width: 100px;
    height: 40px;
    background: #ff7200;
    border: 2px solid #ff7200;
    margin-top: 13px;
    color: #fff;
    font-size: 15px;
    border-bottom-right-radius: 5px;
    border-bottom-right-radius: 5px;
    transition: 0.2s ease;
    cursor: pointer;
}
.btn:hover{
    color: #000;
}

.btn:focus{
    outline: none;
}

.srch:focus{
    outline: none;
}

.content{
    width: 1200px;
    height: auto;
    margin: auto;
    color: #fff;
    position: relative;
}

.content .par{
    padding-left: 20px;
    padding-bottom: 25px;
    font-family: Arial;
    letter-spacing: 1.2px;
    line-height: 30px;
}

.content h1{
    font-family: 'Times New Roman';
    font-size: 50px;
    padding-left: 20px;
    margin-top: 9%;
    letter-spacing: 2px;
}

.content .cn{
    width: 160px;
    height: 40px;
    background: #ff7200;
    border: none;
    margin-bottom: 10px;
    margin-left: 20px;
    font-size: 18px;
    border-radius: 10px;
    cursor: pointer;
    transition: .4s ease;
    
}
.btn-primary
{
  margin-top: 10px;
    background: #4285F4;
    width: 200px;
    border: none;
    border: 2px solid red;
    border-radius: 48px;
}
.form-control
{
  height: 55px;
}

.content .cn a{
    text-decoration: none;
    color: #000;
    transition: .3s ease;
}

.cn:hover{
    background-color: #fff;
}

.content span{
    color: #ff7200;
    font-size: 65px
}

.form{
  width: 23%;
  height: 399px;
    background: linear-gradient(to top, rgba(0,0,0,0.8)50%,rgba(0,0,0,0.8)50%);
    position: absolute;
    top: -20px;
    left: 870px;
    transform: translate(0%,-5%);
    border-radius: 10px;
    padding: 25px;
}

.form h2{
    width: 220px;
    font-family: sans-serif;
    text-align: center;
    color: #ff7200;
    font-size: 22px;
    background-color: #fff;
    border-radius: 10px;
    margin: 2px;
    padding: 8px;
}

.form input{
    width: 240px;
    height: 35px;
    background: transparent;
    border-bottom: 1px solid #ff7200;
    border-top: none;
    border-right: none;
    border-left: none;
    color: #fff;
    font-size: 15px;
    letter-spacing: 1px;
    margin-top: 30px;
    font-family: sans-serif;
}

.form input:focus{
    outline: none;
}

::placeholder{
    color: #fff;
    font-family: Arial;
}

.btnn{
    width: 240px;
    height: 40px;
    background: #ff7200;
    border: none;
    margin-top: 30px;
    font-size: 18px;
    border-radius: 10px;
    cursor: pointer;
    color: #fff;
    transition: 0.4s ease;
}
.btnn:hover{
    background: #fff;
    color: #ff7200;
}
.btnn a{
    text-decoration: none;
    color: #000;
    font-weight: bold;
}
.form .link{
    font-family: Arial, Helvetica, sans-serif;
    font-size: 17px;
    padding-top: 20px;
    text-align: center;
}
.form .link a{
    text-decoration: none;
    color: #ff7200;
}
.liw{
    padding-top: 15px;
    padding-bottom: 10px;
    text-align: center;
}
.icons a{
    text-decoration: none;
    color: #fff;
}
.icons ion-icon{
    color: #fff;
    font-size: 30px;
    padding-left: 14px;
    padding-top: 5px;
    transition: 0.3s ease;
}
.icons ion-icon:hover{
    color: #ff7200;
}
.payment-method
{
  background: #FFF;
    color: #000;
    margin-top: 26px;
    position: relative;
    left: 25%;
    top: 87px;
    padding: 29px;
    border-radius: 40px;
    height: auto;
    margin-bottom: 16%;
}
.icons
{
  display: flex;
}
      </style>
    </head>
    
    <body>


      <div class="main">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo">PraRoz</h2>
            </div>

            <div class="menu">
                <ul>
                    <li><a href="#">HOME</a></li>
                    <li><a href="#">ABOUT</a></li>
                    <li><a href="#">SERVICE</a></li>
                    <li><a href="#">DESIGN</a></li>
                    <li><a href="#">CONTACT</a></li>
                </ul>
            </div>

            <div class="search">
                <input class="srch" type="search" name="" placeholder="Type To text">
                <a href="#"> <button class="btn">Search</button></a>
            </div>

        </div> 
        <div class="content">
            <h1>Web Design & <br><span>Development</span> <br>Course</h1>
            <p class="par">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt neque 
                 expedita atque eveniet <br> quis nesciunt. Quos nulla vero consequuntur, fugit nemo ad delectus 
                <br> a quae totam ipsa illum minus laudantium?</p>

                <button class="cn"><a href="#">JOIN US</a></button>
            <div class="container">
              <div class="container">
                <div class='row'>

                  <div class='col-md-6  d-flex justify-content-center payment-method'>
                    <script src='https://js.stripe.com/v2/' type='text/javascript'></script>
                    <form accept-charset="UTF-8" class="p-4" action="stripe" class="require-validation"
                      data-cc-on-file="false"
                      data-stripe-publishable-key="Use Your Stripe Key Here"
                      id="payment-form" method="post">
                      @csrf
                      <div class='form-row'>
                        <div class='col-xs-12 form-group required'>
                          <label class='control-label'>Card Holder Name</label> <input
                            class='form-control' name="name" size='4' type='text' placeholder="Enter Card Holder Name">
                        </div>
                      </div>
                      <div class='form-row'>
                        <div class='col-xs-12 form-group card required'>
                          <label class='control-label'>Card Number</label> <input
                            autocomplete='off' name="card" class='form-control card-number' size='20'
                            type='text' placeholder="Enter Card number">
                        </div>
                      </div>
                      <div class='form-row'>
                        <div class='col-xs-12 form-group card required'>
                          <label class='control-label'>Amount</label> <input
                            autocomplete='off' name="amount" class='form-control card-number' size='20'
                            type='text' placeholder="Enter Amount">
                        </div>
                      </div>
                      <div class='form-row'>
                        <div class='col-xs-4 form-group cvc required'>
                          <label class='control-label'>CVC</label> <input
                            autocomplete='off' name="cvc" class='form-control card-cvc'
                            placeholder='CVV' size='4' type='text'>
                        </div>
                        <div class='col-xs-4 form-group expiration required'>
                          <label class='control-label'>Expiration</label> <input
                            class='form-control card-expiry-month' name="mm" placeholder='MM' size='2'
                            type='text'>
                        </div>
                        <div class='col-xs-4 form-group expiration required'>
                          <label class='control-label'>YEAR</label> <input name="year"
                            class='form-control card-expiry-year' placeholder='YYYY'
                            size='4' type='text'>
                        </div>
                      </div>
                      <!-- <div class='form-row'>
                        <div class='col-md-12'>
                          <div class='form-control total btn btn-info'>
                            Total: <span class='amount'>$300</span>
                          </div>
                        </div>
                      </div> -->
                      <div class='form-row'>
                        <div class='col-md-12 form-group'>
                          <button class='form-control btn btn-primary submit-button'
                            type='submit' style="margin-top: 10px;">Confirm</button>
                        </div>
                      </div>
                      <div class='form-row'>
                        <div class='col-md-12 error form-group hide'>
                          <div class='alert-danger alert'>Please correct the errors and try
                            again.</div>
                        </div>
                      </div>
                    </form>
                    @if ((Session::has('success-message')))
                    <div class="alert alert-success col-md-12">{{
                      Session::get('success-message') }}</div>
                    @endif @if ((Session::has('fail-message')))
                    <div class="alert alert-danger col-md-12">{{
                      Session::get('fail-message') }}</div>
                    @endif
                  </div>
                  <div class='col-md-4'></div>
                </div>
              </div>
            </div>
                <div class="form">
                    <h2>Login Here</h2>
                    <input type="email" name="email" placeholder="Enter Email Here">
                    <input type="password" name="" placeholder="Enter Password Here">
                    <button class="btnn"><a href="#">Login</a></button>

                    <p class="link">Don't have an account<br>
                    <a href="#">Sign up </a> here</a></p>
                    <p class="liw">Log in with</p>

                    <div class="icons">
                        <a href="#"><ion-icon name="logo-facebook"></ion-icon></a>
                        <a href="#"><ion-icon name="logo-instagram"></ion-icon></a>
                        <a href="#"><ion-icon name="logo-twitter"></ion-icon></a>
                        <a href="#"><ion-icon name="logo-google"></ion-icon></a>
                        <a href="#"><ion-icon name="logo-skype"></ion-icon></a>
                    </div>

                </div>
                    </div>
                </div>
        </div>
    </div>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    
      <script src="https://code.jquery.com/jquery-1.12.3.min.js"
        integrity="sha256-aaODHAgvwQW1bFOGXMeX+pC4PZIPsvn2h1sArYOhgXQ="
        crossorigin="anonymous"></script>
      <script
        src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
        integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
        crossorigin="anonymous"></script>
      <script>
        $(function() {
            $('form.require-validation').bind('submit', function(e) {
              var $form         = $(e.target).closest('form'),
                  inputSelector = ['input[type=email]', 'input[type=password]',
                                   'input[type=text]', 'input[type=file]',
                                   'textarea'].join(', '),
                  $inputs       = $form.find('.required').find(inputSelector),
                  $errorMessage = $form.find('div.error'),
                  valid         = true;
    
              $errorMessage.addClass('hide');
              $('.has-error').removeClass('has-error');
              $inputs.each(function(i, el) {
                var $input = $(el);
                if ($input.val() === '') {
                  $input.parent().addClass('has-error');
                  $errorMessage.removeClass('hide');
                  e.preventDefault(); // cancel on first error
                }
              });
            });
          });
    
          $(function() {
            var $form = $("#payment-form");
    
            $form.on('submit', function(e) {
              if (!$form.data('cc-on-file')) {
                e.preventDefault();
                Stripe.setPublishableKey($form.data('stripe-publishable-key'));
                Stripe.createToken({
                  number: $('.card-number').val(),
                  cvc: $('.card-cvc').val(),
                  exp_month: $('.card-expiry-month').val(),
                  exp_year: $('.card-expiry-year').val()
                }, stripeResponseHandler);
              }
            });
    
            function stripeResponseHandler(status, response) {
              if (response.error) {
                $('.error')
                  .removeClass('hide')
                  .find('.alert')
                  .text(response.error.message);
              } else {
                // token contains id, last4, and card type
                var token = response['id'];
                // insert the token into the form so it gets submitted to the server
                $form.find('input[type=text]').empty();
                $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
                console.log(token);
                $form.get(0).submit();
              }
            }
          })
        </script>
    </body>
    </html>
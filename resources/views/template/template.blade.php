<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <title>WINSLOTS</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <link rel="icon" type="image/png" sizes="16x16" href="{{URL::asset('images/logo.png')}}">
    <!--// Meta tag Keywords -->
    <!-- css files -->
    <!-- Bootstrap-css -->
    <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/bootstrap-table.min.css') }}" rel="stylesheet">
    <!-- Style-css -->
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}" type="text/css" media="all" />
    <!-- jQuery custom content scroller -->
    <link rel="stylesheet" href="{{ URL::asset('css/jquery.mCustomScrollbar.min.css') }}" />
    <!-- Banner-css -->
    <link rel="stylesheet" href="{{ URL::asset('css/settings.min.css') }}" type="text/css" media="all" />
    <!-- //css files -->

    <!-- Vendor CSS-->
    <!-- signup modal -->
    <link href="{{ URL::asset('css/intlTelInput/intlTelInput.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/daterangepicker.css') }}" rel="stylesheet" media="all">
    <link href="{{ URL::asset('css/bootstrap-select.min.css') }}" type="text/css" rel="stylesheet" />
    <link href="{{ URL::asset('css/select2.css') }}" rel="stylesheet" media="all">
    <link href="{{ URL::asset('css/custom.css') }}" rel="stylesheet">

    @yield('custom-css')
</head>

<body>
    <!-- Page Wrap -->
    <div class="main-agile">
        <!-- banner -->
        <div class="agile-top">
            <div class="row">
                <!-- navigation -->
                <div class="menu">

                    <a id="menuToggle">
                        <span class="navClosed"></span>
                    </a>
                    <div class="top-lang">
                        <div class="btn-group ps-dropdown">
                            <!-- 
							<a class="dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="assets/images/flags/flag-en.svg" alt="en" /></a>						
							<ul class="dropdown-menu">
								<li><a href="#" role="button"><img src="assets/images/flags/flag-cn.svg" alt="cn" /></a></li>
								<li><a href="#" role="button"><img src="assets/images/flags/flag-jp.svg" alt="jp" /></a></li>
							</ul>
							 -->
                            <a class="dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">EN</a>
                            <ul class="dropdown-menu">
                                <li><a href="#" role="button">EN</a></li>
                                <li><a href="#" role="button">FR</a></li>
                            </ul>
                        </div>
                    </div>
                    <nav class="navbar mCustomScrollbar">
                        @if(session()->has('f_id'))
                            <div class="nav-signup-btn"><a href="#" role="button" data-toggle="modal" data-target="#modalSignup"><span class="iconcasino icon-signup1" aria-hidden="true"></span> Sign Up </a></div>
                        @else
                        <div class="nav-profile">
                            <ul class="user_data">
                                <li class="user_id">
                                    <i class="iconcasino icon-profile_1" aria-hidden="true"></i> <span>{{ session('f_username') }}</span>
                                </li>
                                <li class="balance">
                                    Balance&nbsp; : <span> ₩ 0</span>
                                    {{-- Balance&nbsp; : <span> ₩ <?= number_format($info['data']['balance'], 2) ?></span> --}}

                                </li>
                                <li class="bonus">
                                    Bonus&nbsp;&nbsp;&nbsp;&nbsp; : <span><a href="#" role="button" data-toggle="modal" data-target="#modalBonus" rel="nofollow">$ 0</a></span>
                                    {{-- Bonus&nbsp;&nbsp;&nbsp;&nbsp; : <span><a href="#" role="button" data-toggle="modal" data-target="#modalBonus" rel="nofollow">$ <?= number_format($user['bonus'], 2) ?></a></span> --}}

                                </li>
                            </ul>
                        </div>
                        @endif


                        <div class="main-menu">
                            <a href="index.php" role="button"><i class="iconcasino icon-home-page"></i> HOME</a>
                            <a href="index.php#favorites" role="button"><i class="iconcasino icon-star-full"></i> FAVOURITES</a>
                            <a href="index.php#slots" role="button"><i class="iconcasino icon-slot-machine" aria-hidden="true"></i> SLOTS</a>
                            <a href="index.php#virtual-games" role="button"><i class="iconcasino icon-trophy2" aria-hidden="true"></i> VIRTUAL GAMES</a>
                            <a href="{{route('payment.index')}}" role="button"><i class="iconcasino icon-payment-method" aria-hidden="true"></i> PAYMENT METHODS</a>
                            <a href="promotions.php" role="button"><i class="iconcasino icon-megaphone" aria-hidden="true"></i> PROMOTIONS</a>
                        </div>

                        @if(session()->has('f_id'))
                            <ul class="main-menu-myaccount">
                                <li class="main-menu-title">MY ACCOUNT</li>

                                <li class="main-menu-item main-menu-my">
                                    <a href="{{ url('/deposit') }}" role="button"><i class="iconcasino icon-download" aria-hidden="true"></i> Deposit</a>
                                </li>
                                <li class="main-menu-item main-menu-my">
                                    <a href="{{ url('/deposit') }}" role="button"><i class="iconcasino icon-upload" aria-hidden="true"></i> Withdraw</a>
                                </li>
                                <li class="main-menu-item main-menu-my">
                                    <a href="#" role="button" data-toggle="modal" data-target="#modalBonus" rel="nofollow"><i class="iconcasino icon-bonus3" aria-hidden="true"></i> Bonus</a>
                                </li>
                                <li class="main-menu-item main-menu-my">
                                    <a href="#" role="button" data-toggle="modal" data-target="#modalCoupon" rel="nofollow"><i class="iconcasino icon-coupon2" aria-hidden="true"></i> Coupon</a>
                                </li>
                                <li class="main-menu-item main-menu-my">
                                    <a href="#" role="button" data-toggle="modal" data-target="#modalPaymentHistory" rel="nofollow"><i class="iconcasino icon-payment_history2" aria-hidden="true"></i> </i> Payment history</a>
                                </li>
                                <li class="main-menu-item main-menu-my">
                                    <a href="#" role="button" data-toggle="modal" data-target="#modalProfile" rel="nofollow"><i class="iconcasino icon-profile4" aria-hidden="true"></i> Profile</a>
                                </li>
                                <li class="main-menu-item main-menu-my">
                                    <a href="#" role="button" data-toggle="modal" data-target="#modalChangePassword" rel="nofollow"><i class="iconcasino icon-login6" aria-hidden="true"></i> Change Password</a>
                                </li>
                                <li class="main-menu-item main-menu-my main-menu-logout-btn">
                                    <a href="{{ url('/logout') }}" role="button"><i class="iconcasino icon-logout_485963" aria-hidden="true"></i> Log Out</a>
                                </li>
                            </ul>
                        @endif

                    </nav>
                </div>
                <!-- //navigation -->
                <div class="logo">
                    <a href="{{ route('index') }}" role="button">
                        <div class="toplogo"><img src="{{URL::asset('images/logo.png')}}" alt=""></div>
                    </a>
                </div>

                @if(session('f_id') == '')
                
                    <div class="header-right hidden-sm  hidden-xs">
                        <ul>
                            <li>
                                <a class="signin-btn" href="#" data-toggle="modal" data-target="#modalLogin">
                                    <span class="iconcasino icon-logout1" aria-hidden="true"></span> Log In </a>
                            </li>
                            <li>
                                <a class="signup-btn" href="#" data-toggle="modal" data-target="#modalSignup">
                                    <span class="iconcasino icon-signup1" aria-hidden="true"></span> Sign Up </a>
                            </li>
                        </ul>
                    </div>
                @else
                    <div class="header-right">
                        <ul>
                            <li class="hidden-sm  hidden-xs">
                                <div class="top-balance">
                                    <div class="btn-group dropdown">
                                        <a class="dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <!-- <img src="assets/images/currency/btc.png" alt="btc" />  -->
                                            <i class="fa fa-krw"></i>&nbsp;<span class="holding-balance">0</span>
                                            {{-- <i class="fa fa-krw"></i>&nbsp;<span class="holding-balance"><?= number_format($info['data']['balance'], 2) ?></span> --}}

                                            <!--<b class="caret"></b>-->
                                        </a>
                                        <!--<ul class="dropdown-menu">-->
                                        <!--    <li><a href="#" role="button"><img src="assets/images/currency/btc.png" alt="btc" /> 1000.00</a></li>-->
                                        <!--    <li><a href="#" role="button"><img src="assets/images/currency/eth.png" alt="eth" /> 0.00</a></li>-->
                                        <!--    <li><a href="#" role="button"><img src="assets/images/currency/bch.png" alt="bch" /> 0.00</a></li>-->
                                        <!--    <li><a href="#" role="button"><img src="assets/images/currency/ltc.png" alt="ltc" /> 0.00</a></li>-->
                                        <!--    <li><a href="#" role="button"><img src="assets/images/currency/etc.png" alt="etc" /> 0.00</a></li>-->
                                        <!--    <li><a href="#" role="button"><img src="assets/images/currency/dash.png" alt="dash" /> 0.00</a></li>-->
                                        <!--    <li><a href="#" role="button"><img src="assets/images/currency/qtum.png" alt="qtum" /> 0.00</a></li>-->
                                        <!--    <li><a href="#" role="button"><img src="assets/images/currency/steem.png" alt="steem" /> 0.00</a></li>-->
                                        <!--</ul>-->
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="message">
                                    <a href="#" role="button" data-toggle="modal" data-target="#modalMessage" rel="nofollow">
                                        <i class="fa fa-envelope-o"></i>
                                        <span class="message-badge">3</span>
                                    </a>
                                </div>
                            </li>
                            <li class="hidden-sm  hidden-xs">
                                <a href="{{route('deposit')}}" role="button" class="deposit-btn">
                                    <span class="iconcasino icon-download" aria-hidden="true"></span>Deposit</a>
                            </li>
                        </ul>
                    </div>
                @endif
            </div>
        </div>
    </div>

    @yield('content')

    <script>
        var elem = document.getElementById("game-block");

        function openFullscreen() {
            if (elem.requestFullscreen) {
                elem.requestFullscreen();
            } else if (elem.mozRequestFullScreen) {
                /* Firefox */
                elem.mozRequestFullScreen();
            } else if (elem.webkitRequestFullscreen) {
                /* Chrome, Safari & Opera */
                elem.webkitRequestFullscreen();
            } else if (elem.msRequestFullscreen) {
                /* IE/Edge */
                elem.msRequestFullscreen();
            }
            if (document.exitFullscreen) {
                document.exitFullscreen();
            } else if (document.mozCancelFullScreen) {
                document.mozCancelFullScreen();
            } else if (document.webkitExitFullscreen) {
                document.webkitExitFullscreen();
            } else if (document.msExitFullscreen) {
                document.msExitFullscreen();
            }
        }

        function closeFullscreen() {
            if (document.exitFullscreen) {
                document.exitFullscreen();
            } else if (document.mozCancelFullScreen) {
                document.mozCancelFullScreen();
            } else if (document.webkitExitFullscreen) {
                document.webkitExitFullscreen();
            } else if (document.msExitFullscreen) {
                document.msExitFullscreen();
            }
        }
    </script>
    <!-- gameModal end -->

    <!-- footer -->
    <footer>
        <div class="footer_partner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <ul>
                            <li>
                                <a href="https://www.evolution.com/" target="_blank" role="button"><img src="{{URL::asset('images/partner/logo_evolution.png')}}" alt="Evolution"></a>
                            </li>
                            <li>
                                <a href="https://www.pragmaticplay.com/en/" target="_blank" role="button"><img src="{{URL::asset('images/partner/logo_pragmaticplay.png')}}" alt="Pragmatic Play"></a>
                            </li>
                            <li>
                                <a href="https://www.netent.com/en/" target="_blank" role="button"><img src="{{URL::asset('images/partner/logo_netent.png')}}" alt="Netent"></a>
                            </li>
                            <li>
                                <a href="https://www.bgaming.com/" target="_blank" role="button"><img src="{{URL::asset('images/partner/logo_bgaming.png')}}" alt="BGAMING"></a>
                            </li>
                            <li>
                                <a href="https://www.pgsoft.com/en/" target="_blank" role="button"><img src="{{URL::asset('images/partner/logo_pgsoft.png')}}" alt="PG Soft"></a>
                            </li>
                            <li>
                                <a href="https://habanerosystems.com/" target="_blank" role="button"><img src="{{URL::asset('images/partner/logo_habanero.png')}}" alt="HABANERO"></a>
                            </li>
                            <li>
                                <a href="https://booongo.com/" target="_blank" role="button"><img src="{{URL::asset('images/partner/logo_bcoongo.png')}}" alt="bcoongo"></a>
                            </li>
                            <li>
                                <a href="https://www.redtiger.com/" target="_blank" role="button"><img src="{{URL::asset('images/partner/logo_redtiger.png')}}" alt="RED TIGER"></a>
                            </li>
                            <li>
                                <a href="https://www.microgaming.co.uk/" target="_blank" role="button"><img src="{{URL::asset('images/partner/logo_mg.png')}}" alt="Microgaming"></a>
                            </li>
                            <li>
                                <a href="https://www.yggdrasilgaming.com/" target="_blank" role="button"><img src="{{URL::asset('images/partner/logo_yggdrasil.png')}}" alt="YGGDRASIL"></a>
                            </li>
                            <li>
                                <a href="https://www.sagaming.com/" target="_blank" role="button"><img src="{{URL::asset('images/partner/logo_sa.png')}}" alt="SA Gaming"></a>
                            </li>
                            <li>
                                <a href="https://kironinteractive.com/" target="_blank" role="button"><img src="{{URL::asset('images/partner/logo_kiron.png')}}" alt="Kiron"></a>
                            </li>
                            <li>
                                <a href="https://www.cta666.com/" target="_blank" role="button"><img src="{{URL::asset('images/partner/logo_ct855.png')}}" alt="CT855"></a>
                            </li>
                            <li>
                                <img src="{{URL::asset('images/partner/logo_18.png')}}" alt="18+">
                            </li>
                            <li>
                                <a href="https://www.gamcare.org.uk/" target="_blank" role="button"><img src="{{URL::asset('images/partner/logo_gamecare.png')}}" alt="GAMECARE"></a>
                            </li>
                            <li>
                                <a href="https://www.rgf.org.mt/" target="_blank" role="button"><img src="{{URL::asset('images/partner/logo_rgf.png')}}" alt="RESPONSIBLE GAMING FOUNDATION"></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer-site -->
        <div class="footer_menu">
            <div class="container">
                <div class="row col-lg-12">
                    <div class="col-lg-3">
                        <div class="footer-widget footer-widget__about">
                            <a href="index.php">
                                <img src="{{URL::asset('images/logo.png')}}" width="110" alt="">
                            </a>
                            <h3>Payment Methods</h3>
                            <div class="footer-widget__payment">
                                <img src="{{URL::asset('images/partner/logo_bitcoin.png')}}" alt="BITCOIN">
                                <img src="{{URL::asset('images/partner/logo_ethereum.png')}}" alt="ETHEREUM">
                                <img src="{{URL::asset('images/partner/logo_tether.png')}}" alt="TETHER">
                            </div><!-- /.footer-widget__payment -->
                        </div><!-- /.footer-widget -->
                    </div><!-- /.col-lg-4 -->

                    <div class="col-lg-9">
                        <div class="footer-widget__links-wrap">
                            <div class="footer-widget">
                                <h3 class="footer-widget__title">About</h3>
                                <ul class="list-unstyled footer-widget__links-list">
                                    <li><a href="promotions.html" role="button">Promotions</a></li>
                                    <li><a href="affiliate.html" target="_blank" role="button">Affiliate Program</a></li>
                                    <li><a href="#" role="button">VIP Club</a></li>
                                    <li><a href="why_use_bitcoin.html" role="button">Whe use Bitcoin</a></li>
                                    <li><a href="{{route('payment.index')}}" role="button">Payment Methods</a></li>
                                    <li><a href="security.html" role="button">Security and Privacy</a></li>
                                    <li><a href="faq.html" role="button">FAQ</a></li>
                                    <li><a href="contact_us.html" role="button">Contact Us</a></li>
                                </ul><!-- /.list-unstyled footer-widget__links-list -->
                            </div><!-- /.footer-widget -->
                            <div class="footer-widget">
                                <h3 class="footer-widget__title">Games</h3>
                                <ul class="list-unstyled footer-widget__links-list">
                                    <li><a href="index.html#game-menu" role="button">Live Baccarat</a></li>
                                    <li><a href="index.html#game-menu" role="button">Live Blackjack</a></li>
                                    <li><a href="index.html#game-menu" role="button">Live Roulette</a></li>
                                    <li><a href="index.html#game-menu" role="button">Live Poker</a></li>
                                    <li><a href="index.html#game-menu" role="button">Slots</a></li>
                                    <li><a href="index.html#game-menu" role="button">Table Games</a></li>
                                    <li><a href="index.html#game-menu" role="button">Virtual Games</a></li>
                                </ul><!-- /.list-unstyled footer-widget__links-list -->
                            </div><!-- /.footer-widget -->
                            <div class="footer-widget">
                                <h3 class="footer-widget__title">Support</h3>
                                <ul class="list-unstyled footer-widget__links-list">
                                    <li><a href="#" onclick="openTab('#Section1');return false;" role="button" data-target="#modalTerms" data-toggle="modal" rel="nofollow">Terms and Conditions</a></li>
                                    <li><a href="#" onclick="openTab('#Section2');return false;" role="button" data-target="#modalTerms" data-toggle="modal" rel="nofollow">Responsible Gaming</a></li>
                                    <li><a href="#" onclick="openTab('#Section3');return false;" role="button" data-target="#modalTerms" data-toggle="modal" rel="nofollow">Self-Exclusion</a></li>
                                    <li><a href="#" onclick="openTab('#Section4');return false;" role="button" data-target="#modalTerms" data-toggle="modal" rel="nofollow">Dispute Resolution</a></li>
                                    <li><a href="#" onclick="openTab('#Section5');return false;" role="button" data-target="#modalTerms" data-toggle="modal" rel="nofollow">Anti-Money Laundering</a></li>
                                    <li><a href="#" onclick="openTab('#Section6');return false;" role="button" data-target="#modalTerms" data-toggle="modal" rel="nofollow">Fairness &amp; RNG Testing Methods</a></li>
                                    <li><a href="#" onclick="openTab('#Section7');return false;" role="button" data-target="#modalTerms" data-toggle="modal" rel="nofollow">KYC Policies, Privacy &amp; Management of Personal Data</a></li>
                                    <li><a href="#" onclick="openTab('#Section8');return false;" role="button" data-target="#modalTerms" data-toggle="modal" rel="nofollow">Accounts, Payouts &amp; Bonuses.</a></li>
                                    <li><a href="#" onclick="openTab('#Section9');return false;" role="button" data-target="#modalTerms" data-toggle="modal" rel="nofollow">Privacy Policy</a></li>
                                </ul><!-- /.list-unstyled footer-widget__links-list -->
                            </div><!-- /.footer-widget -->
                        </div><!-- /.footer-widget__links-wrap -->
                    </div><!-- /.col-lg-8 -->

                </div><!-- /.row -->
            </div><!-- /.container -->
        </div>
        <!-- //footer-site -->
        <!-- curcao -->
        <div class="curcao_copy">
            <div class="container">
                <div class="row">
                    <ul>
                        <li>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="curcao col-lg-1 col-md-1 col-sm-1 col-xs-2">
                                    <img src="{{URL::asset('images/partner/curcao_lisence.png')}}" alt="curcao lisence">
                                </div>
                                <div class="footer_copy col-lg-11 col-md-11 col-sm-11 col-xs-10">
                                    <p>Copyright © 2021 winslots.com is operated by Kumac Holdings. N.V., a company registered and established under the laws of Curaçao. Kumac Holdings N.V.'s registration number is ****** and its registered address is ******,******, Curaçao.</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- //curcao -->
        <!-- copyright -->
        <div class="container">
            <div class="copy-right">
                <p>&copy; 2021 <span>WINSLOTS</span>. All Rights Reserved.</p>
            </div>
        </div>
        <!-- //copyright -->
    </footer>
    <!-- //footer -->
    <!-- //footer-sticky-buttons -->

    <div class="footer-sticky-buttons hidden-md  hidden-lg">
        <div class="left-cell">
            <a href="#" role="button" data-toggle="modal" data-target="#modalLogin">
                <span class="left-cell-text">Log in</span>
            </a>
        </div>
        <!-- <div class="right-cell">
			<a href="#" role="button" data-toggle="modal" data-target="#modalSignup">
				<span class="right-cell-text">Sign up</span>
			</a>
		</div> -->
    </div>

    <!-- 
	<div class="footer-sticky-buttons hidden-md  hidden-lg">		
		<div class="left-cell deposit-cell">
			<a href="balance.html" role="button">
				<span class="left-cell-text">Deposit</span>
			</a>
		</div>
		<div class="right-cell balance-cell">
			<div class="foot-balance">
				<div class="btn-group dropup">
					<a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<img src="assets/images/currency/btc.png" alt="btc" /> 1000.00 <b class="caret"></b>
					</a>
					<ul class="dropdown-menu">
						<li><a href="#" role="button"><img src="assets/images/currency/btc.png" alt="btc" /> 1000.00</a></li>
						<li><a href="#" role="button"><img src="assets/images/currency/eth.png" alt="eth" /> 0.00</a></li>
						<li><a href="#" role="button"><img src="assets/images/currency/bch.png" alt="bch" /> 0.00</a></li>
						<li><a href="#" role="button"><img src="assets/images/currency/ltc.png" alt="ltc" /> 0.00</a></li>
						<li><a href="#" role="button"><img src="assets/images/currency/etc.png" alt="etc" /> 0.00</a></li>
						<li><a href="#" role="button"><img src="assets/images/currency/dash.png" alt="dash" /> 0.00</a></li>
						<li><a href="#" role="button"><img src="assets/images/currency/qtum.png" alt="qtum" /> 0.00</a></li>
						<li><a href="#" role="button"><img src="assets/images/currency/steem.png" alt="steem" /> 0.00</a></li>
					</ul>
				</div> 
			</div>						
		</div>
	</div>
	-->
    <!-- //footer-sticky-buttons -->

    <!-- Modal Start -->

    <!-- Login Modal -->
    <div class="modal fade" id="modalLogin" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg">
            <!-- Modal content-->
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <div class="modal-body card">
                    <div class="card-left hidden-xs"></div>
                    <div class="card-right">
                        <div>
                            <h3 class="modal-title">Log In</h3>
                            <form method="POST" class='form-login'>
                                {!! csrf_field() !!}
                                <div class="alert alert-danger invalid" style="display:none;"></div>
                                <div>
                                    <input type="text" name="uname" id="" class="form-control input-md uname" placeholder="Username or Email Address" required>

                                    <div class="form-group">
                                        <input type="password" name="pw" id="login-password" class="form-control input-md passw" placeholder="Password" required />
                                        <span toggle="#login-password" class="fa fa-eye-slash field-icon toggle-password"></span>
                                    </div>

                                </div>
                                <div>
                                    <a class="btn btn-md submit_btn" id="" value="Login">Login</a>
                                </div>
                                <div>
                                    <div class="forgot_password">
                                        <a href="#modalForgotPassword" role="button" data-toggle="modal" data-dismiss="modal" rel="nofollow">Forgot your password?</a>
                                    </div>
                                </div>

                            </form>
                            <div class="clearfix"></div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- //Modal content-->
        </div>
    </div>
    <!-- //Login Modal -->

    <!-- Forgot Password Modal -->
    <div id="modalForgotPassword" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog lg modal-lg">
            <!-- Modal content-->
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <div class="modal-body card">
                    <div class="card-left hidden-xs"></div>
                    <div class="card-right">
                        <div class="">
                            <h3 class="modal-title">Forgot Password</h3>
                            <form action="#">
                                <p class="hint-text">Enter your email address and your date of birth below
                                    and we'll send you a quick reply with instructions on
                                    how to recover or reset your password - Simple!</p>
                                <div>
                                    <input type="text" id="" class="form-control input-md" placeholder="Username" required>
                                    <input type="email" id="" class="form-control input-md" placeholder="Enter your email address here" required>
                                </div>
                                <div>
                                    <button type="submit" class="btn submit_btn" id="" value="Login">Send Link</button>
                                </div>
                            </form>
                            <div class="clearfix"></div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- //Modal content-->
        </div>
    </div>
    <!-- //Forgot Password Modal -->

    <!-- Signup Model -->
    <div id="modalSignup" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <!-- Modal content-->
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <div class="modal-body card">
                    <div class="card-left hidden-xs"></div>
                    <div class="card-right">
                        <div>
                            <h3 class="modal-title">Sing Up</h3>

                            <form id="regForm" action="index1.php">
                                <div class="tab">
                                    <div class="input-group">
                                        <input type="text" id="user_id" class="form-control" placeholder="User ID" required>
                                        <span class="input-group-btn">
                                            <button type="button" class="check-btn" onclick="idCheck()">Check</button>
                                        </span>
                                    </div>
                                    <input type="email" class="form-control" placeholder="Email Address" required>
                                    <div class="form-group">
                                        <input type="password" class="form-control" id="signup-password" placeholder="Password" />
                                        <span toggle="#signup-password" class="fa fa-eye-slash field-icon toggle-password"></span>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" id="confirm-password" placeholder="Confirm Password" />
                                        <span toggle="#confirm-password" class="fa fa-eye-slash field-icon toggle-password"></span>
                                    </div>
                                    <div class="chk_box">
                                        <label class="chk-container">&nbsp;By checking this box I accept the <a href="#" onclick="openTab('#Section1');return false;" role="button" data-target="#modalTerms" data-toggle="modal" rel="nofollow">Terms and Conditions</a>, <a href="#" onclick="openTab('#Section9');return false;" role="button" data-target="#modalTerms" data-toggle="modal" rel="nofollow">Privacy policy</a> and confirm that I am over 18years of age.<span>*</span>
                                            <input type="checkbox" id="inpCterms">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="tab">
                                    <input type="text" class="form-control" placeholder="Full Name" required>
                                    <div>
                                        <input type="text" id="phone" class="form-control" placeholder="Phone" required>
                                    </div>
                                    <div class="input-group-icon">
                                        <input class="js-datepicker" type="text" name="birthday" class="form-control" autocomplete="off" placeholder="Date Of Birth">
                                        <i class="fa fa-calendar input-icon js-btn-calendar"></i>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Withdrawal PIN" required>
                                    <select name="currency" class="selectpicker currencypicker" data-live-search="false" title="Currency" data-default="" data-coin="true"></select>
                                </div>
                                <div style="overflow:auto;">
                                    <div style="float:right;">
                                        <button type="button" id="prevBtn" class="prev-btn" onclick="nextPrev(-1)">Previous</button>
                                        <button type="button" id="nextBtn" class="next-btn" onclick="nextPrev(1)">Next</button>
                                    </div>
                                </div>
                                <div style="text-align:center;margin-top:30px;">
                                    <span class="step"></span>
                                    <span class="step"></span>
                                </div>
                            </form>

                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <!-- //Modal content-->
        </div>
    </div>
    <script>
        var currentTab = 0; // Current tab is set to be the first tab (0)
        showTab(currentTab); // Display the current tab

        function showTab(n) {
            // This function will display the specified tab of the form ...
            var x = document.getElementsByClassName("tab");
            x[n].style.display = "block";
            // ... and fix the Previous/Next buttons:
            if (n == 0) {
                document.getElementById("prevBtn").style.display = "none";
            } else {
                document.getElementById("prevBtn").style.display = "inline";
            }
            if (n == (x.length - 1)) {
                document.getElementById("nextBtn").innerHTML = "Submit";
            } else {
                document.getElementById("nextBtn").innerHTML = "Next";
            }
            // ... and run a function that displays the correct step indicator:
            fixStepIndicator(n)
        }

        function nextPrev(n) {
            // This function will figure out which tab to display
            var x = document.getElementsByClassName("tab");
            // Exit the function if any field in the current tab is invalid:
            //if (n == 1 && !validateForm()) return false;
            // Hide the current tab:
            x[currentTab].style.display = "none";
            // Increase or decrease the current tab by 1:
            currentTab = currentTab + n;
            // if you have reached the end of the form... :
            if (currentTab >= x.length) {
                //...the form gets submitted:
                document.getElementById("regForm").submit();
                return false;
            }
            // Otherwise, display the correct tab:
            showTab(currentTab);
        }
        /*
        function validateForm() {
          // This function deals with validation of the form fields
          var x, y, i, valid = true;
          x = document.getElementsByClassName("tab");
          y = x[currentTab].getElementsByTagName("input");
          // A loop that checks every input field in the current tab:
          for (i = 0; i < y.length; i++) {
            // If a field is empty...
            if (y[i].value == "") {
              // add an "invalid" class to the field:
              y[i].className += " invalid";
              // and set the current valid status to false:
              valid = false;
            }
          }
          // If the valid status is true, mark the step as finished and valid:
          if (valid) {
            document.getElementsByClassName("step")[currentTab].className += " finish";
          }
          return valid; // return the valid status
        }
        */
        function fixStepIndicator(n) {
            // This function removes the "active" class of all steps...
            var i, x = document.getElementsByClassName("step");
            for (i = 0; i < x.length; i++) {
                x[i].className = x[i].className.replace(" active", "");
            }
            //... and adds the "active" class to the current step:
            x[n].className += " active";
        }
    </script>
    <!-- //signup Model -->

    <!-- Terms and Condition Modal -->
    <div id="modalTerms" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg">
            <!-- Modal content-->
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <div class="modal-body">

                    <!-- Terms and Conditions -->
                    <div class="tab" role="tabpanel">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#Section1" aria-controls="Section1" role="tab" data-toggle="tab">Terms and Conditions</a></li>
                            <li role="presentation"><a href="#Section2" aria-controls="Section2" role="tab" data-toggle="tab">Responsible Gaming</a></li>
                            <li role="presentation"><a href="#Section3" aria-controls="Section3" role="tab" data-toggle="tab">Self-Exclusion</a></li>
                            <li role="presentation"><a href="#Section4" aria-controls="Section4" role="tab" data-toggle="tab">Dispute Resolution</a></li>
                            <li role="presentation"><a href="#Section5" aria-controls="Section5" role="tab" data-toggle="tab">Anti-Money Laundering</a></li>
                            <li role="presentation"><a href="#Section6" aria-controls="Section6" role="tab" data-toggle="tab">Fairness &amp; RNG Testing Methods</a></li>
                            <li role="presentation"><a href="#Section7" aria-controls="Section7" role="tab" data-toggle="tab">KYC Policies, Privacy &amp; Management of Personal Data</a></li>
                            <li role="presentation"><a href="#Section8" aria-controls="Section8" role="tab" data-toggle="tab">Accounts, Payouts &amp; Bonuses.</a></li>
                            <li role="presentation"><a href="#Section9" aria-controls="Section8" role="tab" data-toggle="tab">Privacy police</a></li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="Section1">
                                <h4>TERMS AND CONDITIONS</h4>
                                <p>1. SOME GENERAL PROVISIONS</p>
                                <p>1.1. Your use of any service and play of any game provided on this website www.winslots.com (the “Website”), means that you agree on and accept the following legally binding Terms and Conditions. If you do not agree to be bound by these Terms and Conditions, you should quit using the services and leave the Website immediately. Please, read these Terms and Conditions carefully before using the Website or any of the services.</p>
                                <p>1.2. The Website is operated by Kumac Holdings N.V., a limited liability Company registered and established under the laws of Curaçao, with company registration number ******** (the “Company” or “We”). We hold a gaming license allowing us to operate games of chance on the international market via Internet, duly issued and granted by Kumac Holdings N.V.. Under the valid gaming license, we offer you the games and services on this Website (the “Gaming Services” or “Services”). Unless otherwise stated, "We” or the “Company” refers collectively to our subsidiaries, directors, officers, employees, agents and contractors.</p>
                                <p>1.3. When you (the “End User” or “User” or “You” or “Customer”) use the Website or Services, these Terms and Conditions together with any and all documents referred to hereby and being an integral part of this document (the “Terms of Services” “Terms of Use” or “Agreement” or “User Agreement”) shall apply to such use.</p>
                                <p>1.4. In addition to this document, the Privacy Policy, Bonus Terms and Conditions and List of Prohibited Territories apply to your use of the Website and the Services, and You should review it prior to any use of the Website or the Services. The Privacy Policy, Bonus Terms and Conditions, casino Terms and Conditions and List of Prohibited Territories are provided on the Website and form the integral part of this Terms and Conditions.</p>
                                <p>1.5. We may publish the Agreement in several languages in order to make the information more easily accessible for the Users. In the event there is any discrepancy between the English version and any other version of the Agreement, the English version shall prevail.</p>
                                <p>1.6. The terms and conditions of our game and service suppliers shall complement the Agreement as long as they are not in conflict with the Agreement.</p>
                                <p>1.7. If You do not agree to any of the provisions of the User Agreement, You should immediately stop using the Website and the Services and cease the access from Your computer and/or any other applicable device.</p>
                                <p>1.8. We reserve the right to amend, modify, update and change any of the terms and conditions of the User Agreement from time to time. We will notify You of any such amendment, modification or change by publishing the new version of the User Agreement on the Website. Any modified version of the User Agreement will take effect and enter into force immediately once the updated version of the User Agreement is published on the Website. Your continued use of the Website and the Services after the changes become effective will be deemed to constitute Your acceptance of the changes to the User Agreement. It remains Your responsibility to ensure that You are aware of the correct, current terms and conditions of the User Agreement and We advise You to check for updates on a regular basis.</p>
                                <p>1.9. By registering in the system of the Company and/or by using the Gaming Services and/or by marking the "I accept these Terms and Conditions" box (or any other similar wording), You agree to be bound by the User Agreement in its entirety and without reservation. As such, the User Agreement constitutes a binding legal document between You and the Company and the Agreement, as amended from time to time, shall govern Your use of our Gaming Services at all times.</p>
                                <p>1.10. The Website allows You to use our Gaming Services. The Company reserves the right to either partially or entirely suspend, modify, remove or add to the Services in its sole discretion with immediate effect and without any notification to You. We encourage You to check for such updates, available on our Website, periodically and be updated if any of such changes are made by the Company. The Company shall not be liable for any loss suffered by You resulting from any changes made and You shall have no claims against the Company in such regard.</p>
                                <p>1.11. Our Website is not an exchange platform and therefore We do not execute any conversion between the currencies, including between crypto currency and fiat currency or visa versa.</p>
                                <p>2. YOUR ACCOUNT</p>
                                <p>2.1. You shall access the Services only via Your own account registered with Us (the “Account”) and You may never access the Services by means of another user's account. You may only receive Gaming Services if you have sufficient funds on any of the electronic wallet (fiat or crypto) of your Account.</p>
                                <p>2.2. You must not use disposable email address for registering Your Account. Also, you must not use disposable phone number for verifying your account. If we find out that you have used a disposable email or phone number respectively for registering or verifying Your Account, we reserve the right to block and terminate your Account and/or confiscate all monetary funds available on such Account.</p>
                                <p>2.3. Your Account is for Your sole personal use only and shall not be used for any professional, business or commercial purpose. You do not earn interest on the balance credited to your crypto or fiat Account. The company is neither a financial institution, nor an exchange platform and shall not be treated as such. We offer no fiat to crypto or crypto to fiat exchange services.</p>
                                <p>2.4. You access your Account by username and password. We guarantee that We will not disclose your username and password to any third party. We will also take reasonable efforts to implement protective mechanisms to prevent unauthorized access to Your Account. You, on Your behalf, should protect Your username and password and never disclose them to any third party, also You should take all technical and other efforts to prevent Your username and password from being accessed and obtained by any other person without Your authorization. If We suspect that other person has been using Your Account, We will be entitled to immediately suspend Your Account and block all transactions made from or to Your Account and notify You about our suspicions that an unauthorized access may be taking place. However, it is not our obligation to monitor and detect all unauthorized access to Your Account. You hereby acknowledge and agree, that We take no responsibility for any third-party access to Your Account and under no circumstances shall the Company be liable for any losses and damages incurred by You as a result of misuse of Your username and password by any person or for any unauthorized access to Your Account and all transactions where Your username and password have been entered correctly will be regarded as valid, whether or not authorized by You.</p>
                                <p>2.5. You are allowed to register only one Account. Registering and operating multiple Accounts (more than one) is strictly prohibited. The Company reserves the right to qualify the account(s) registered on anyone from Your family, household, relative, friend or otherwise connected person to be Your another Account and, thus, decide that You have multiple Accounts. In case of multiple Accounting, We reserve the right to immediately block and terminate all such Accounts and confiscate all monetary funds available on such Accounts.</p>
                                <p>2.6. You are not allowed to transfer funds from your Account to the Account of another Customer registered on the Website.</p>
                                <p>2.7. If You do not log in to Your Account for a consecutive period of 12 (twelve) months or if no deposit has been made for a consecutive period of 6 (six) months after registering and opening the Account on the Website, Your Account will be considered a "dormant account" and We may block and terminate such dormant account any time after the lapse of above-mentioned time period. Any monetary funds available on such dormant account may be removed by us without a further obligation to refund. Before removal, We will use reasonable efforts to reach and notify You about the removal of funds via the most current contact details You have provided to us.</p>
                                <p>2.8 If You are no longer willing to hold an Account on our Website, We kindly request You to contact us at support@winslots.com and submit your request about the termination or suspension of your account.</p>
                                <p>2.9. We will block and terminate Your account if You notify us or We have reasonable doubt to suspect that you are gambling-addict. You will be able to withdraw any remaining balance to your other account before such termination, however, You expressly covenant that You shall not have any claim in relation to any previous activity held on Your account, including, but not limited to losses or winnings as the result of these activities. We reserve the right not to reopen or validate Your Account once closed in accordance with this clause.</p>
                                <p>2.10. Without prejudice to any term of this Agreement, We reserve the right to block and terminate Your Account any time, at our sole discretion, without providing cause or explanation. We will notify You if this happens and refund You all funds available on Your Account at the time of termination.</p>
                                <p>2.11. If we refund You all the funds available on Your Account upon the termination of Your Account, we will deduct the relevant withdrawal charges. The method of repayment will be at our discretion.</p>
                                <p>2.12. When depositing funds in any currency on your Account, please ensure you are depositing an amount equal to or greater than the minimum deposit limit for that particular currency, as displayed on the deposit page of your Account. Deposits below this limit may not be processed and may not reach your Account and nor can it be returned back to You.</p>
                                <p>3. ACCEPTED CURRENCIES</p>
                                <p>3.1. Your Account will be opened and maintained in all currencies available on our Website. The provided list may change and the currencies may be added or removed from the Website periodically.</p>
                                <p>3.2. You must consider, that ETH (Ethereum) deposits and withdrawals are made through ETH (Ethereum) currency, and other technologies are currently not supported. Smart Contract is not supported for deposits and withdrawals made in ETH (Ethereum), and Tokens are not supported when sending ETH (Ethereum) transactions.</p>
                                <p>3.3. You must consider, that Tether (USDT) deposits and withdrawals are made through Tether (USDT) currency, and other technologies are currently not supported. Smart Contract is not supported for deposits and withdrawals made in Tether (USDT).</p>
                                <p>3.4. In case you are a BTC (Bitcoin) user, you must consider, that for the withdrawal purposes, SegWit Wallet is not currently supported by theWebsite.</p>
                                <p>4. COMPLIANCE WITH LAWS</p>
                                <p>4.1. Internet gambling may not be legal or may be restricted under some jurisdictions. You understand and accept that the Company is unable to provide You with any legal advice or assurance in respect to Your use of the Services and the Company makes no representations whatsoever as to the legality of the Services under Your jurisdiction. Please, authenticate the relevant laws in your jurisdiction before registering with the Company on the Website and using the Services. Restricted territories (Curacao license restricted territories - USA, France, The Netherlands, the Dutch Caribbean Islands; Curaçao, Aruba, Bonaire, St. Maarten, St Eustatia and Saba)</p>
                                <p>4.2. The Services are meant only for users who are not prohibited or restricted by the laws of any applicable jurisdiction from gambling on the Internet. The Company does not intend to enable You to contravene applicable law. You represent, warrant and agree to ensure that Your use of the Services will comply with all applicable laws, statutes and regulations. The Company shall not be responsible for any illegal or unauthorized use of the Services by You. Please consult legal counsel in the applicable jurisdiction if You have any doubts about the legality of Your use of the Services under the laws of any jurisdiction that applies to You. By accepting these Terms of Use, You agree to assist the Company, to the extent You are able, with its compliance with applicable laws and regulations.</p>
                                <p>5. AGE REQUIREMENT AND VERIFICATION</p>
                                <p>5.1. No-one under the age of 18 or the age of legal consent for engaging in the activities included in the Services under the laws of any jurisdiction, whichever is higher ("Legally of Age") may use the Services under any circumstances and any person not Legally of Age who uses the Services will be in material breach of the terms of the User Agreement. The Company reserves the right to request proof of age at any stage, to verify that persons not Legally of Age are not using the Services. The Company may terminate Your Account and/or bar You from using the Services if proof of age is not provided by You within a reasonable period of time or if the Company suspects that You are not Legally of Age. The Company reserves the right to suspend your Account and all transactions from or to Your Account until Your age is verified.</p>
                                <p>5.2. We reserve the right to verify Your registration details and all other personal data provided by You to Us any time after the registration of the Account, such as : name, surname, identity information, personal number and passport number, address, age and any other personal data, at any time, by requesting certain type of documents. These documents shall typically include an identity card, proof of address such as a utility bill, and proof of Your payment method, and can be uploaded and submitted to us. If deemed necessary, We may request that the said document copies are notarized and/or certified with Apostille, meaning that the documents are stamped and attested by a Public Notary and/or that certain documents are issued and certified by the respective authorities. In the event our requests for documents are not duly completed by the User within the established time period, the Company may at its sole discretion, block and terminate the Account and confiscate any funds that are present therein. Should the documents fail our internal security checks – for example, if We suspect that they have been interfered with, or are in any way provided to mislead or misrepresent – We shall be under no obligation to accept such documents as valid, and under no obligation to provide feedback on the exact nature of our findings with regards to these documents.</p>
                                <p>5.3. You hereby explicitly consent to the Company performing background checks for any reason, including, but not limited to, any investigation into the identity of the User, any payment method and payment source checks performed on the User, or any inquiries into the User’s personal history or professional background. The basis for such investigations will be dependent on the specific case, but could include, but is not limited to, verification of the User’s registration details and personal data, verification of the User’s financial transactions, and examination of the user’s gaming activity and behavior pattern. The Company shall be under no obligation to advise the User of such an investigation taking place. Such investigation activities may include the use of specific private or public third-party companies and investigation agencies, state or private, who perform the investigations as required, as well as the partner companies and gaming industry stakeholders. Solely for the investigation purposes the Company may transfer the personal information, registration details, gaming activity patterns about the User to any such third-party company conducting any part of the investigation without the prior consent of and notification to the User. The Company may decide, in its sole discretion, to block and terminate or temporarily suspend the Account and/or confiscate all funds available on the Account, on the basis and results of such investigation. The Company will notify You about its decision to do so and will tell You about the facts and suspicions revealed from such investigation.</p>
                                <p>6. YOUR REPRESENTATIONS AND UNDERTAKINGS</p>
                                <p>6.1. In consideration of the rights granted to You to use the Services, You represent, warrant, covenant, undertake and agree that:</p>
                                <p>6.1.1. As the End User, You are Legally of Age, as defined in this Agreement, of sound mind and capable of taking responsibility for Your own actions;</p>
                                <p>6.1.2. As the End User, You shall play the games under the Gaming Services only for yourself, only for fun and in a non-professional manner. Professional play is defined as a play by a person who is or was directly or indirectly working in or is otherwise related to the casino, gambling and/or game provider industry or by a person who is a professional sports player with respect to the Sportsbook Services;</p>
                                <p>6.1.3. As the End User, You understand that crypto-currencies are not considered as official currencies and as such on the Website they are treated as virtual funds with no intrinsic value. You understand that crypto-currencies exchange rate can change dramatically or even fall to zero depending on the market value;</p>
                                <p>6.1.4. All details, contact information and personal data provided and submitted by You to the Company either during the registration process or at any time thereafter, including as part of any payment deposit transaction are true, up-to-date, correct and complete and solely You are responsible for the authenticity, validity and accuracy of any transaction to or from Your Account;</p>
                                <p>6.1.5. As the End User, Your Account with the Company is solely for Your benefit. You shall not allow anyone (including a relative, friend or otherwise connected person) to use Your Account, password or identity to access or use the Services and You shall be fully responsible for any activities commenced on Your Account by a third party. You will not reveal Your Account username or password to any person and You shall take all effort to ensure that such details are not revealed to any person. You shall inform us immediately on support@winslots.com if You suspect that Your Account is being used by a third party and/or any third party has an access to Your Account username or password so that We may investigate such matter and You will cooperate with us respectively, in the event of such investigation;</p>
                                <p>6.1.6. As the End User, You are responsible for the security of Your username and password on Your own computer and any device on which the Website is or may be accessible including an Internet access location. If this username password combination is “hacked” from Your computer, due to any virus or malware that may be present on the computer that You access Your Account with, this is Your responsibility. You should report any possible hacking attempts or security breaches from Your computer immediately to the Company at support@winslots.com ;</p>
                                <p>6.1.7. As the End User, You have verified and determined that Your use of the Services does not violate any laws or regulations of any jurisdiction. You fully understand the methods, rules and procedures of the Services and Internet gambling in general. You will not commit any acts or display, any conduct that damages the reputation of the Company and/or inflicts any direct or indirect financial damage to the Company;</p>
                                <p>6.1.8. As the End User, You are fully aware that there is a risk of losing money when gambling by means of our Services and You are fully responsible for such loss. You agree that Your use of the Services is at Your sole option, discretion and risk. In relation to any loss, You shall have no claims whatsoever against the Company or any Company within the same group of companies as the Company or their respective directors, officers, employees, Service providers, agents, or any affiliates of any of the foregoing;</p>
                                <p>6.1.9. As the End User, You acknowledge that by registering and using the Services You have to provide the Company with certain personal details about Yourself. The Company shall handle all information provided by You diligently and shall not disclose such information to third parties except as provided for in this document and in the Privacy Policy. We urge You to read Privacy Policy to ensure that You agree with our policies in relation to how Your information is handled;</p>
                                <p>6.1.10. As the End User, You agree to use the Website and Services in complete accordance with the terms and conditions of this Agreement, as amended from time to time, and shall abide by all rules and instructions for playing the games that comprise the Services;</p>
                                <p>6.1.11. You are solely responsible for all taxes and tax reporting to any relevant governmental taxation or any other authorities on any winnings paid to You by the Company or any other related or affiliated entity, subject to applicable local, state and/or federal tax regulations.</p>
                                <p>6.1.12. The external accounts from which You deposit funds to Your Account, as well as the external accounts to which you withdraw funds from Your Account belong only to You and are opened on Your name.</p>
                                <p>6.2. As the End User, You shall use the Services in full compliance with the terms and conditions of the Agreement and only in good faith towards both the Company and the other users of the Company using the Services. In the event that the Company deems that You have been using the Services in violation of Your obligations, representations and warranties contained herein or any applicable laws and/or You have been causing direct or indirect harm or injury to the Company or any user of the Company, the Company shall have the right, subject to any applicable law, to block and terminate Your Account and confiscate all monetary funds available therein.</p>
                                <p>6.3. You hereby grant the Company Your consent to monitor, record and keep Your written and verbal communications with the Company and other users of the Company, as well as, Your personal and non-personal information set out in the Privacy Policy at all times.</p>
                                <p>7. PROHIBITED USES OF THE WEBSITE AND THE SERVICES</p>
                                <p>Illegal Funds and Unlawful Activities</p>
                                <p>7.1. As the End User, You declare that the funds used by You for gambling on the Website is not illegal and that You will not use the Services and You will not use the Services for any unlawful or fraudulent activity or prohibited transaction (including money laundering). If we find out that Your are in breach of this clause, We reserve the right to block and terminate your Account and confiscate all monetary funds available on Your Account.</p>
                                <p>7.2. If the Company has a suspicion that You may be engaging in or have engaged in fraudulent, unlawful or improper activity including, without limitation to money laundering activities or conduct in violation of this Agreement, Your access to the Services may be terminated immediately and/or Your Account blocked and terminated, in this event the Company is under no obligation to refund You any funds that may be in Your Account.</p>
                                <p>Circumvention</p>
                                <p>7.3. We have developed and employed sophisticated proprietary technology intended to seek out and identify users making fraudulent or unlawful use of the Services. You shall not break into, access or attempt to break into or access or otherwise circumvent the Company’s security measures.</p>
                                <p>7.4. The Company reserves the right to declare the wager and/or the winning void partially or in full if the Company, at its own discretion, deems it obvious that any of the following circumstances has occurred:</p>
                                <p>7.4.1. People associated with the End User may directly or indirectly influence the outcome of an event, to obtain an unlawful advantage;</p>
                                <p>7.4.2. People associated with the End User are directly or indirectly avoiding the rules of the Company;</p>
                                <p>7.4.3. The result of an event has been directly or indirectly affected by criminal or suspicious activity;</p>
                                <p>7.4.4. Wagers have been placed that would not have been accepted otherwise, but that were accepted during periods when the Website malfunctioning or experiencing technical problems;</p>
                                <p>7.4.5. Due to an error, such as a mistake, misprint on the table, odds or software, technical error, force majeure or otherwise, wagers have been offered, placed and or accepted due to this error.</p>
                                <p>7.5. If the Company believes that You are in breach of this clause, it may terminate Your access to the Services immediately and have Your Account terminated and blocked, initiate investigation, and/or notify the proper authorities of the suspected activity, which may result in the closure of all Your Accounts and You being barred from future use of the Services, in this event the Company is under no obligation to refund You any funds that may be in Your Account.</p>
                                <p>Artificial Intelligence</p>
                                <p>7.6. The use of any automated tool designed to provide assistance in betting decisions or used in any way in connection with Your use of the Services is strictly prohibited. Therefore, the use of software, external devices, programs or applications is strictly prohibited. You are not allowed to use any software program which, in our opinion, is endowed with Artificial Intelligence in connection with Your use of the Services.</p>
                                <p>7.7. We review the use of the Services in order to detect the use of AI software on a daily basis and in the event that We deem it has been used, Company reserves the right to take any action We deem fit, including immediately blocking access to the Services to the offending user and terminating such user’s Account, in this event the Company is under no obligation to refund You any funds that may be in Your Account.</p>
                                <p>7.8. We reserve the right to apply a wagering requirement up to 10 (Ten) times the deposit amount if we suspect that You are using our Service as a mixer (e.g. making deposits in one currency and making withdrawal of the same amount as of deposit in the same currency or equivalent in another currency). It is strictly forbidden to use our Service for any other purpose than entertainment.</p>
                                <p>8. CUSTOMER DUE DILIGENCE</p>
                                <p>8.1. In order to identify and verify the End User, mitigate the risks of money laundering and terrorism financing, examine the legality of source of funds used by the End User in the Gaming Services, as well as, check whether the End User complies with the terms of the present Agreement, the Company shall have the right to use any and all Customer due diligence measures (the “CDD” or “CDD Measures”) and KYC (“know your client”) procedures (the “KYC Procedures”) and You are obliged to comply with any and all such requests of the Company in due and timely manner. This rule applies to any User making any transaction to or from his/her Account in fiat or crypto currency.</p>
                                <p>8.2. CDD Measures and KYC Procedures may include any of the following: requesting personal information about the End User in order to identify him/her, which may include requesting a valid and duly certified identification document and a selfie; verifying the personal information provided by the End User; requesting the information and documents about the End User’s occupation, source of funds and source of income used by the End User in the Gaming Services; checking the personal and professional information about the End User; checking and analyzing the gambling activity pattern of the End User, etc.</p>
                                <p>8.3. The Company may apply CDD Measures any time, at its sole discretion and with or without providing the reasons and explanations of doing so, and especially in the following circumstances:</p>
                                <p>8.3.1. The End User carries out transaction of withdrawing or depositing funds from or on his/her Account, that is more than a particular limit established by the Company from time to time;</p>
                                <p>8.3.2. The transaction in relation to the Account is made from or to a high risk suspicious account /wallet;</p>
                                <p>8.3.3. The Company doubts the veracity or adequacy of documents or information about the End User previously obtained for the purposes of identification or verification or the Company discovers that the Customer has provided false or stolen identification documentation or information;</p>
                                <p>8.3.4. The Company suspects money laundering or terrorism financing;</p>
                                <p>8.3.5. The End User is located and/or makes transactions from the territories and countries, which the Company considers as high-risk territories, and countries in respect with money laundering or terrorism financing. In order to determine that a country and customers from that country pose a higher risk, the Company uses its own experience, as well as takes into account a variety of other credible sources of information, such as information available from FATF and nongovernmental organizations;</p>
                                <p>8.3.6. The Company suspects that the End User is engaged in fraudulent activity, has multiple Accounts, does not play fairly and/or is in breach of any of his/her obligations or prohibitions set out in this Agreement;</p>
                                <p>8.3.7. The Customer or a potential Customer is a Politically Exposed Person (PEP), or a family member or known close associate of a PEP;</p>
                                <p>8.3.8. A transaction made by the User is complex or unusually large, or there is an unusual pattern of transactions, and the transaction or transactions have no apparent economic or legal purpose;</p>
                                <p>8.3.9. There is other case, which, by its nature, can present a higher risk of money laundering, terrorism financing or possible breach of this Agreement by the User.</p>
                                <p>8.4. In the event when the Company suspects any of the activities set out in Section 7.3, the Company takes necessary measures to examine the backgrounds of any those activities, including, but not limited to, seeking additional independent, reliable sources to verify the information provided and to determine whether the transaction to be suspicious, taking additional measures to understand the background, ownership and financial situation of the User and other parties to the transaction, making a video or voice call with the User by any means of electronic communications, assessing whether the transaction is consistent with the purpose and intended nature of the business relationship, increasing the monitoring of the business relationship and applying greater scrutiny to the transaction made. At the point where the threshold is reached, the Company may put all funds owed to the Customer into an account (or equivalent) from and on which no withdrawals and deposits can be made, until CDD is completed successfully, to the full satisfaction of the Company.</p>
                                <p>8.5. As part of KYC procedures or CDD Measures in general, we may request a phone call with You on the phone number provided to us. We may suspend Your Account and all transactions from or to Your Account until the phone conversation and interview has been conducted duly, to the satisfaction of the Company. In case the provided phone number is incorrect, missing or false or You do not answer our phone call irrespective of our multiple attempts to reach You within a reasonable period of time, We reserve the right to block and terminate Your Account and confiscate all monetary funds available on Your Account.</p>
                                <p>8.6. We reserve the right to record and keep all written and oral communication with You during the CDD process, also use it as necessary to conduct checks, verifications and investigations, as well as to protect our interests and rights before the respective third parties, in case any dispute arises between You and the Company.</p>
                                <p>8.7. You are obliged to submit to the Company all KYC and CDD documents requested by the Company during 14 (fourteen) calendar days after the request is made by the Company. If You do not meet the set deadline the Company shall have the right to block and terminate Your Account and confiscate all funds available on Your Account.</p>
                                <p>8.8. The Company should be entitled to inform any relevant authority or entity of any payment fraud or otherwise unlawful activity and under no circumstances shall the Company be liable for any unauthorized transactions through the Accounts, irrespective of whether or not the Customer is the beneficial owner of the respective Accounts.</p>
                                <p>8.9. As the End User, You hereby consent to be duly aware of the Company’s Customer Due Diligence measures to be applied to You whether the Company suspects any of the suspicious customer activity requiring further inquiry and investigation, that You agree to be bound by the Company’s policy to access, monitor, process Your personal information based on the requirements set out in Section 7. If you do not comply with the respective KYC and/or CDD requirements set by the Company or if the Company, as a result of KYC Procedures and/or CDD Measures, discovers that You are in breach of any provisions of this Agreement, the Company reserves the right to block and terminate Your Account and confiscate all Your funds available on Your Account.</p>
                                <p>9. WITHDRAWALS AND MAXIMUM WIN LIMITATION</p>
                                <p>9.1. You are allowed to withdraw monetary funds accumulated on Your Account, including Your deposits and winnings, to Your external account only if: a) You are a verified User, meaning that You have verified your email address and/or the phone number and/or complied with any other verification requirement established by the Company, from time to time, and b) You comply with the wagering requirement established by the Company. Wagering requirement means the amount of monetary value or number of times You need to make bets before You are allowed to withdraw all or part of your funds from Your Account to Your other external account (the “Wagering Requirement”). We establish different Wagering Requirements for different Gaming Services, in particular:</p>
                                <p>9.1.1. On Slots, Casino Games and Live Games Your deposit amount must be wagered, be turned over 2 (two) times;</p>
                                <p>9.1.2. On Sportsbook Services You have to make at least one bet with minimum stake of 50% of Your deposit amount (example: if Your deposit amount is equivalent to EUR 100, You have to bet minimum EUR 50 on any position You can select on Sportsbook Services);</p>
                                <p>9.1.3. Wagering Requirement in case of bonuses and promotions is set out in Bonus Terms and Conditions;</p>
                                <p>9.1.4. We have no Wagering Requirement on cashbacks.</p>
                                <p>9.2. When reviewing Your withdrawal request, the Company reserves the right to allow You to withdraw monetary funds from Your Account in installments. The number of installments and the period of time when the funds will be fully released will be determined by the Company reasonably, on case by case basis and may vary depending on the payment channel used for the withdrawal.</p>
                                <p>9.3. Certain requests on withdrawals can take considerable amount of time to be processed and approved by the Company. The Company reserves a right to consider and approve any of such requests within reasonable period of time.</p>
                                <p>9.4. You are solely responsible for the transaction validity and compliance with the respective currency between your wallets while making sum transactions to or from Your Account. The Company is under no obligation to refund You any sum erroneously lost due to negligence during transaction.</p>
                                <p>9.5. You are solely responsible for transaction fees or commissions when withdrawing funds from Your Account. In case of depositing or withdrawing funds in fiat currency, note that your bank or payments service provider may charge you additional transaction fees according to their terms and conditions or user agreement applicable to You.</p>
                                <p>9.6. The maximum amount that we shall be obliged to pay to You in respect of any single bet or spin, including any single bonus round or free spin, shall be limited to and in no event shall exceed the amount of any crypto or fiat currency equivalent to EUR 10,000(Ten thousand) (the “Maximum Win Limit”). The Maximum Win Limit does not include any Jackpot winnings. You acknowledge and agree that for certain Gaming Services your approved staking level may mean that You may have the opportunity to win above the Maximum Win Limit. Also, the amount of the total winning, including the amount above the Maximum Win Limit, may be deposited on Your Account. You acknowledge and agree that we shall have the right to cut the amount above the Maximum Win Limit from Your Account and pay to You only the Maximum Win Limit.</p>
                                <p>9.7. You are allowed to make withdrawals in the same currency (fiat or crypto) and through the same payment channel you deposited your funds with.</p>
                                <p>9.8. If we no longer support the currency in which you hold the funds on Your Account, or if we encounter the problems beyond our control when carrying out withdrawal transactions in a certain currency or through a certain payment channel, we reserve the right to offer and release your funds to you in other currency or other payment channel per our discretion. In this case you have to arrange to receive funds in the respective currency or through the respective payment channel. If you are unable to arrange to receive the funds, we will not be responsible.</p>
                                <p>10. OBLIGATIONS OF THE COMPANY</p>
                                <p>10.1. We undertake to arrange the Website and the Gaming Services fairly and in compliance with the applicable laws and regulations and the terms of our gaming license. If you play fairly and use our Services in full compliance with this Agreement and the applicable laws and regulations, We undertake to release all Your winnings and monetary funds duly and legally deposited on Your Account to You. If We suspect or have proof that You do not play fairly and/or violate any of Your obligations and rules contained in this Agreement, We will notify You accordingly, provide You with the respective reasoning and take measures that are set out in this Agreement.</p>
                                <p>10.2. The Company shall handle all personal information provided by You strictly in accordance with our Privacy Policy.</p>
                                <p>10.3. The Company has no obligation to check whether users are using the Services in accordance with the User Agreement, as amended from time to time.</p>
                                <p>10.4. Under no circumstances shall the Company be obligated to investigate or pursue any complaint made by a User against any other User using the Services or to take any other action in connection therewith or take any action against a User for any reason, including without limitation to violating the terms of the User Agreement. The Company may, at its sole discretion, decide to take appropriate action against any person it suspects of engaging in any illicit behavior or otherwise violating the terms of the User Agreement, but is under no obligation to do so.</p>
                                <p>11. INTELLECTUAL PROPERTY RIGHTS</p>
                                <p>11.1. All Website design, text, graphics, music, sound, photographs, video, the selection and arrangement thereof, software compilations, underlying source code, software and all other material forming part of the Services are subject to copyright and other proprietary rights which are either owned by us or used under license from third party rights owners. To the extent that any material comprised within the Services may be downloaded or printed then such material may be downloaded to a single device only (and hard copies may be printed) solely for Your own personal, non-commercial use.</p>
                                <p>11.2. Under no circumstances shall the use of the Services grant to You any interest in any intellectual property rights (for example copyright, know-how or trademarks) owned by us or by any third party whatsoever, other than a personal, non-exclusive, non-sub-licensable license to use such intellectual property rights in connection with Your personal, non-commercial use of the Services pursuant to the Terms of Use.</p>
                                <p>11.3. No rights whatsoever are granted to use or reproduce any trademarks or logos, which appear on the Website except as specifically, permitted in accordance with the Terms of Use.</p>
                                <p>11.4. You must not, nor must You allow any other person to copy, store, publish, rent, license, sell, distribute, alter, add to, delete, remove or tamper with the Website or any part of it in any way or directly or indirectly disrupt or interfere (or attempt to disrupt or interfere) with or alter the Website, other than in the course of viewing or using the Website in accordance with the Terms of Use.</p>
                                <p>11.5. All intellectual property rights in the name “XXXXX" and or “XXXXX”, the logos, designs, trademarks and other distinctive brand features of the Company and any content provided by the Company or any third party for inclusion on the Website vest in the Company or the applicable third party. You agree not to display or use such logos, designs, trademarks and other distinctive brand features in any manner without our prior written consent.</p>
                                <p>12. DISPUTES</p>
                                <p>12.1. You accept and agree that the random number generator will determine the randomly generated events required in connection with the Services and where the result shown on the Website conflicts with the result shown on our server, the result shown on our server shall in all circumstances take preference. You understand and agree that (without prejudice to Your other rights and remedies) the Company records are unbiased and shall be the final authority in determining the terms of Your use of the Services and You shall have no right to dispute the Company's decisions in regard to such matters.</p>
                                <p>12.2. No claims or disputes will be considered more than 7 (seven) business days after the date of the original transaction. You hereby undertake to raise such claims or disputes with the customer support office at support@winslots.com and to provide the Company with all the pertinent information or evidence, which the Company reasonably requires to review Your claim or dispute.</p>
                                <p>12.3. The Company’s support team will review Your claim and provide You with its decision within reasonable period of time of You submitting Your claim or dispute.</p>
                                <p>12.4. If You do not agree with the Company’s decision, You should contact our Support Manager to appeal the Company’s decision and provide the Company with all the relevant evidence in relation to Your appeal promptly and thoroughly.</p>
                                <p>12.5. The Support Manager will re-review Your claim or dispute and provide You with the Company’s final and binding decision within 14 (fourteen) business days.</p>
                                <p>12.6. In the event that You have exhausted all reasonable means in resolving a complaint which You may have in relation to the Services, You may refer to the Alternative Dispute Resolution sources at Your sole discretion, providing, that You consent to the jurisdiction of Curaçao to resolve any disputes arising out of the gambling Services or use of the Website.</p>
                                <p>13. LIMITATION OF LIABILITY</p>
                                <p>13.1. You agree that You are free to choose whether to use the Services and do so at Your sole option, discretion and risk.</p>
                                <p>13.2. We will provide the Services with reasonable skill and care and substantially as described in this Agreement. We do not make any other promises or warranties regarding the Services, or any products or Services forming a part of the Services, and hereby exclude (to the extent permitted by law) all implied warranties in respect of the same (including implied warranties as to satisfactory quality and/or proper for Your purpose). In particular, We do not warrant that the Website and/or the Services will have uninterrupted availability, will be accessible without interruptions or that it will be free of bugs, viruses or other errors.</p>
                                <p>13.3. The Company shall not be liable to You or any third party in contract, negligence, tort or otherwise, for any loss or damage whatsoever arising from or in any way connected with Your, or any third party’s, use of the Services, whether direct or indirect, including, without limitation, damage for loss of business, loss of profits (including loss of or failure to receive anticipated winnings), business interruption, loss of business information, or any other pecuniary or significant loss.</p>
                                <p>13.4. The Company shall not be liable in contract, tort or otherwise, for any loss or damage whatsoever arising from or in any way connected with Your use, of any link contained on the Websites. The Company is not responsible for the content contained on any Internet Website linked to from the Websites or via the Services.</p>
                                <p>13.5. You confirm that the Company shall not be responsible to You or any third party for any modification to, suspension of or interruption of the Services.</p>
                                <p>13.6. You agree that, in the event that the Services, either owned by the Company or provided by the Service Providers, or the Website fails to operate correctly as a result of, but not limited to, any delay or interruption in operation, transaction or transmission, any loss or corruption of data or communication or lines failure, any person's misuse of the Websites or its contents or any error or any other factors beyond our control:</p>
                                <p>13.6.1. The Company will not be responsible for any loss, including loss of winnings, that may result, in such manner no loss will be refunded.</p>
                                <p>13.6.2. If any such errors result in an increase in winnings owed or paid to You, You shall not be entitled to the winnings falling within such increase. You shall immediately inform the Company of the error and shall repay any winnings credited to Your Account in error to the Company (as directed by the Company) or the Company may, at its discretion, deduct an amount equal to those winnings from Your Account. You shall not withdraw money that has been credited to your account in error, and if you do so, that amount will constitute a debt owed to us by you.</p>
                                <p>13.7. The maximum pecuniary liability in relation to Your use of the Website and the Gaming Services shall not exceed the value of the authentic wagers You placed in respect to the Gaming Service that the liability arose from, during 1 (one) month period before you submit to Us a written request about the compensation. However, Our liability shall in no event exceed EUR 1 000 (one thousand) or its equivalent in other monetary value. You are required to submit to us the written request about the compensation within 1 (one) month from the event causing our liability took place, otherwise, we may not consider your request and claim.</p>
                                <p>14. BREACH OF THE USER AGREEMENT</p>
                                <p>14.1. You will fully indemnify, defend and hold us and our officers, directors, employees, agents, contractors and suppliers harmless from and against any and all losses, costs, expenses, claims, demands, liabilities and damages (including legal fees), however caused, that may arise, whether or not reasonably foreseeable, as a result of or in connection with:</p>
                                <p>14.1.1. The access to and use of the Services by You or by anyone else using Your username and password;</p>
                                <p>14.1.2. Any breach by You of any of the terms and provisions of the Terms of Use.</p>
                                <p>14.2. If You are in breach of the Agreement, We may at our sole discretion, prior to any suspension or termination of Your Account, notify You (using Your Contact Details) that You are in breach, requiring You to stop the relevant act or failure to act, and/or requiring You to put right an act or fault on Your part and warning You of our intended action if You do not do so, provided always that such notification shall not be deemed as a preliminary warning before any suspension or termination of Your Account.</p>
                                <p>14.3. We have the right to disable any User Account, whether chosen by You or allocated by us, at any time, if in our reasonable opinion You have failed to comply with any of the provisions of this Agreement.</p>
                                <p>15. CHAT FEATURE</p>
                                <p>15.1. As part of Your use of the Service the Company may provide You with a chat facility via which You will be able to communicate with other Users of the Service. The Company reserves the right to review the chat and to keep a record of all statements made on such facility. Your use of the chat facility is subject to the following rules:</p>
                                <p>15.1.1. You shall not make any statements that are sexually explicit or grossly offensive, including expressions of bigotry, racism, hatred or profanity.</p>
                                <p>15.1.2. You shall not make statements that advertise, promote or otherwise relate to any other online entities.</p>
                                <p>15.1.3. You shall not make statements about the Company or the Websites or any other Internet Website connected to the Company that are untrue and/or malicious and/or damaging to the Company.</p>
                                <p>15.2. In the event of You violating any of the above provisions relating to the chat facility, the Company shall have the right to remove Your chat privilege or even temporarily or permanently terminate Your Account.</p>
                                <p>16. MISCELLANEOUS</p>
                                <p>16.1. This Agreement, as well as all matters relating to is, is governed and shall be interpreted by the laws of Curaçao. The courts of Curaçao shall have exclusive jurisdiction to resolve any dispute arising from or related to this Agreement.</p>
                                <p>16.2. If any part of the User Agreement shall be deemed unlawful, void or for any reason unenforceable, then that provision shall be deemed to be severable from the rest of the User Agreement and shall not affect the validity and enforceability of any of the remaining provisions of the User Agreement. In such cases, the part deemed invalid or unenforceable shall be construed in a manner consistent with applicable law to reflect, as closely as possible, the original intent of the parties and the true spirit of this Agreement.</p>
                                <p>16.3. No waiver by us of any terms of the User Agreement and no refusal by us to exercise any of our rights under this User Agreement shall be interpreted as a waiver of any preceding or succeeding breach of any terms of the User Agreement.</p>
                                <p>16.4. Unless otherwise expressly stated, nothing in the User Agreement shall create or confer any rights or any other benefits to third parties.</p>
                                <p>16.5. You agree that this Agreement and any of your rights and obligations thereunder are non-transferrable and, therefore You cannot transfer or assign this Agreement or any of your rights or obligations under this Agreement to any third party. However, the Company reserves the right to transfer or assign this Agreement or any of its rights or obligations thereunder without your consent to any third party</p>
                                <p>16.6. Pursuant to state and/or applicable jurisdiction, You may be required to complete certain tax forms before winnings that exceed a taxable threshold can be released to You. By using the Services, You agree to fully comply with all applicable tax laws and hereby release the Company from any liability associated with Your compliance.</p>

                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="Section2">
                                <h4>Responsible Gaming</h4>
                                <p>We offer a platform and services that enable our clients to enjoy gaming and betting. We aim to provide you with a safe, secure, regulated environment which will give you a pleasant and rewarding experience. We encourage our clients to use our services responsibly and in a reasonable manner.</p>
                                <p>Gambling of all varieties has been a popular form of entertainment for many years. Here at winslots.com, we encourage it to be exactly that, fun. We also encourage our customers, while having fun, not to allow their gambling to affect their usual daily routine or time spent with family and friends. Making sure that the money they spend is set aside for leisure time and not for other purposes. It is very important not to rely on paying for life's necessities with possible gains from gambling as this is not guaranteed in any way.</p>
                                <p>While most customers do gamble in this manner, we do understand that a small minority of customers can develop problems with their gambling.</p>
                                <p>At winslots.com, our customer's wellbeing is of utmost importance, we take our role within responsible gambling very seriously and recommend that you:</p>
                                <ul>
                                    <li>Treat your betting and gaming as a form of entertainment and only use money that you have set aside for your entertainment.</li>
                                    <li>Do not bet or wager amounts larger than you are comfortable with.</li>
                                    <li>Do not bet or wager with money you cannot afford to lose.</li>
                                    <li>Do not chase your losses.</li>
                                    <li>Do not let your betting and/or gaming take up time that you would usually spend on other activities.</li>
                                </ul>
                                <p>If you have any concerns about your gambling habits and feel that you can’t follow these recommendations, we urge you to seek advice from accredited organisations that can offer support and advice, such as</p>
                                <ul>
                                    <li>GamCare https://www.gamcare.org.uk/</li>
                                    <li>Keep It Fun https://keepitfun.rank.com/</li>
                                    <li>Gambling Therapy https://www.gamblingtherapy.org/</li>
                                </ul>
                                <p>In addition, you can contact our friendly winslots.com support agents at compliance@winslots.com if you would like to discuss our self-exclusion process. Sometimes a short break away can be really useful in assisting you with gathering your thoughts and stopping you from making any rash wagering decision that you wouldn't usually make.</p>
                                <p>On request, we will place your account on the minimum of a 24-hour cooling off period. This will be followed by one of our support agents informing you of the voluntary 1-week, 1-month, 6-months or permanent self-exclusions available.</p>
                                <p>Please take note; accounts closed under our self-exclusion policy cannot be reversed or reopened for any reason. However, once your self-exclusion has expired, we will email you to let you know your account is active again. Permanent self-exclusion will remain in place indefinitely.</p>
                                <p>Underage</p>
                                <p>If you wish to gamble with us at winslots.com, you must be over 18 years of age or the legal minimum age for gambling in the jurisdiction you reside in under the laws applicable to you.</p>
                                <p>We recommended if you have any minors living in your household, to review the following parental control software links, which could prove a useful tool, regarding control and restrictions of the content accessible on your devices.</p>
                                <p>https://www.netnanny.com/</p>
                                <p>https://www.cyberpatrol.com/</p>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="Section3">
                                <h4>Self-Exclusion Terms and Conditions</h4>
                                <p>By requesting one of the winslots.com self-exclusion time periods on offer you agree to the following terms and conditions, which will be effective from the minute you receive a confirmation email of your chosen self-exclusion, this email will be sent to the email address used to register your account only and will display the date of self-exclusion completion.</p>
                                <p>Self-exclusion requests must be made by email from the account’s registered email address to our customer support department at compliance@winslots.com.</p>
                                <p>Requests made via our Chat function will not be actioned. However, a customer support agent will direct you to our customer support email service.</p>
                                <p>All winslots.com customers' self-exclusion requests will be effective from January 1, 2022. Thereafter, you will not be permitted to open any future winslots.com accounts during your selected self-exclusion time period or indefinitely if you request a permanent self-exclusion.</p>
                                <p>On receipt, of an email request for account closure, the requested account and any linked accounts of winslots.com will be placed on our first stage, 24-hr cooling off period which will disable your account or accounts, allowing no gambling activity. The following associations determine linked accounts: accounts held within the same household, shared devices, email addresses, payment addresses, IP addresses and environments where computers are shared such as universities, fraternities, public libraries, workplace etc.)</p>
                                <p>Once the first stage 24hr cooling off period has passed; while your account or accounts remain closed, a customer support agent will inform you of the 1week, 1month, 6months and permanent self-exclusions available. There will be no variation of these time periods.</p>
                                <p>To proceed with this process, we will require an email response. If we do not receive a response within a further 24hrs, your account will be reopened and confirmed by email.</p>
                                <p>If after reviewing our self-exclusion options you decide you would like to proceed with a permanent self-exclusion, please, inform us of this in your response.</p>
                                <p>On occasion, we might decide to place an account on a short self-exclusion period if we believe it to be needed and or beneficial to the customer. This will be communicated by email; the above terms and conditions will apply.</p>
                                <p>When you request, or we deem it necessary to add a winslots.com self-exclusion; all remaining funds left in your account will be returned to you manually. You are not permitted to leave any balance in your account during a self-exclusion time period. You will not be able to access your account to withdraw any funds during your requested self-exclusion.</p>
                                <p>If you have a winslots.com account affected by a self-exclusion that has any active bets, the Cash Out function will be applied at the point of self-exclusion confirmation. Bets will not be void; stakes will not be returned or remain active throughout a self-exclusion time period. Bets will not be reinstated after a self-exclusion completion.</p>
                                <p>Once a self-exclusion is applied to your account, it will stay in place until the request time has finished, it will not be reversed or decreased for any reason. Permanent self-exclusions will remain closed indefinitely.</p>
                                <p>winslots.com will use all reasonable endeavours to ensure compliance with our responsible gambling self-exclusion policy. However, you accept that we will not be held responsible or liable if you attempt to open any new winslots.com accounts or indeed succeed. In addition, winslots.com will not be held liable or accountable if you continue to deposit and wager using additional accounts which have previously not been disclosed. Any future wagers, Bonus funds and entries in any promotions during a requested self-exclusion time will be forfeited, resulting in no return of stakes or payment of winnings. We will not be able to reinstate these if the account is reopened after the self-exclusion period.</p>
                                <p>You acknowledge that:</p>
                                <ul>
                                    <li>You should not attempt to, deposit or place any wager on any of your winslots.com accounts that you have requested to be excluded from during your selected self-exclusion.</li>
                                    <li>You should not attempt or proceed to open any new winslots.com accounts during your self-exclusion period, or indefinitely if a permanent self-exclusion has been selected.</li>
                                    <li>If you succeed in opening any new winslots.com accounts during a self-exclusion period, we will endeavour to close any and all such accounts at our earliest detection.</li>
                                    <li>winslots.com responsibility is only to take reasonable steps to prevent you from gambling on any of our products. It is also the customer’s responsibility to refrain from breaching these agreed terms.</li>
                                    <li>This is a voluntary request made by you. If you proceed to breach this agreement, winslots.com any of its employees are not held accountable or liable for any losses you may suffer. Any losses acquired during your self-exclusion period will not be refunded.</li>
                                </ul>
                                <p>This is a voluntary agreement, therefore if you proceed to breach the terms within, in the first instance only, any wagering that has taken place will stand, losses will not be refunded. However, multiple breaches of the terms within, all wagering will be void and dealt with at winslots.com discretion. Also, if we have suspicions or further investigation provides evidence that you have actively attempted to disguise the source of your account or accounts; which affects our ability to block your account or accounts promptly, this will also be dealt with at winslots.com discretion.</p>
                                <p>Once your selected self-exclusion has come to an end, your account will automatically be reopened. However, you will receive an email confirmation of this information which will be sent to your registered email address.</p>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="Section4">
                                <h4></h4>
                                <p>12.1. You accept and agree that the random number generator will determine the randomly generated events required in connection with the Services and where the result shown on the Website conflicts with the result shown on our server, the result shown on our server shall in all circumstances take preference. You understand and agree that (without prejudice to Your other rights and remedies) the Company records are unbiased and shall be the final authority in determining the terms of Your use of the Services and You shall have no right to dispute the Company's decisions in regard to such matters.</p>
                                <p>12.2. No claims or disputes will be considered more than 7 (seven) business days after the date of the original transaction. You hereby undertake to raise such claims or disputes with the customer support office at support@winslots.com and to provide the Company with all the pertinent information or evidence, which the Company reasonably requires to review Your claim or dispute.</p>
                                <p>12.3. The Company’s support team will review Your claim and provide You with its decision within reasonable period of time of You submitting Your claim or dispute.</p>
                                <p>12.4. If You do not agree with the Company’s decision, You should contact our Support Manager to appeal the Company’s decision and provide the Company with all the relevant evidence in relation to Your appeal promptly and thoroughly.</p>
                                <p>12.5. The Support Manager will re-review Your claim or dispute and provide You with the Company’s final and binding decision within 14 (fourteen) business days.</p>
                                <p>12.6. In the event that You have exhausted all reasonable means in resolving a complaint which You may have in relation to the Services, You may refer to the Alternative Dispute Resolution sources at Your sole discretion, providing, that You consent to the jurisdiction of Curaçao to resolve any disputes arising out of the gambling Services or use of the Website.</p>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="Section5">
                                <h4>AML/KYC Policy</h4>
                                <p>Introduction</p>
                                <p>The Kumac Holdings N.V. (“Company”) Anti-Money Laundering and Know Your Customer Policy (“AML/KYC Policy”) is designated to prevent and mitigate possible risks of the Company being involved in any kind of illegal activity.</p>
                                <p>The goal of the Company’s AML/KYC Policy is to ensure there are effective internal procedures and mechanisms to prevent money laundering, terrorist financing, drug/human trafficking, corruption, and bribery and to take action in case of any form of suspicious activity from its customers.</p>
                                <p>The AML/KYC Policy covers the following matters: 1. Verification procedures; 2. Sanctions and PEP lists screening; 3. Compliance Officer; 4. Monitoring Transactions; 5. Risk Assessment</p>
                                <p>1.1. Verification procedures</p>
                                <p>One of the international standards for preventing illegal activity is customer due diligence (“CDD”). According to CDD, the Company establishes its own verification procedures within the standards of anti-money laundering and “Know Your Customer” frameworks.</p>
                                <p>1.1.1. Identity verification: The Company’s identity verification procedure requires customers to provide reliable, independent source documents, data, or information (e.g., national ID, international passport, bank statement, utility bill). For such purposes the Company reserves the right to collect a customer’s identification information for the AML/KYC Policy purposes.</p>
                                <p>For corporate customers, the minimum evidence includes at least two of the following items:</p>
                                <ul>
                                    <li>Original or certified copy of the certificate of incorporation and memorandum and articles of association,</li>
                                    <li>Company registry search</li>
                                    <li>Latest audited financial statements</li>
                                    <li>Independent data sources, and</li>
                                    <li>Personal visit to principle place of business</li>
                                </ul>
                                <p>1.1.2. In circumstances where information is not already publicly available, minimum requirements are to verify the identity of directors or similar persons who have authority to operate a relationship or give instructions concerning the use/transfer of assets. Beneficial owners must be identified including at a minimum, those holding 25% or more interest in the capital of the entity extending to those with a material interest depending on the risk profile. Reasonable measures must also be taken to obtain verification documentation depending upon the risk profile of the entity. Where non face-to-face identification and verification is carried out, a certified copy of the identification documentation is required (by a notary public or other qualified professional able to legally certify documents).</p>
                                <p>1.1.3. For individual customers, the Company has contracted with Jumio Corporation to provide automated KCY verification. These services include ID verification to ensure an ID is authentic and has no been altered and identity verification to ensure the customer is the individual they purport to be.</p>
                                <p>1.1.4. The Company will take steps to confirm the authenticity of documents and information provided by all customers. All legal methods for double-checking identification information will be used and the Company reserves the right to investigate any customers who have been determined to be risky or suspicious.</p>
                                <p>1.1.5. The Company reserves the right to verify customer’s identity in an on-going basis, especially when their identification information has been changed or their activity seemed to be suspicious or unusual for the particular customer. In addition, the Company reserves the right to request up-to-date documents from customers, even though they have passed identity verification in the past.</p>
                                <p>1.1.6. Card verification: Customers who are intended to use payment cards in connection with the Company’s services have to pass card verification in accordance with the Company’s card processing vendors.</p>
                                <p>1.2 Sanctions and PEP lists: Enhanced measures are required for those potential customers deemed to be of higher risk. This might take into account factors such as Politically Exposed Persons (PEPs) risk, client not physically present for identification purposes, correspondent banking relationships, jurisdictional risk, and types of activity. Additional due diligence, enhanced scrutiny, and monitoring is required on all accounts that have links with PEPs but particularly those with links to countries that are vulnerable to corruption. Statutory requirements specifically identify correspondent banking relationships as a trigger for enhanced measures. Specific measures include obtaining further identification information, commissioning due diligence reports from independent experts, and requiring higher levels of management approval for new customers.</p>
                                <p>1.3. Compliance Officer: The Compliance Officer is the person, duly authorized by the Company, whose duty is to ensure the effective implementation and enforcement of the AML/KYC Policy. It is the Compliance Officer’s responsibility to supervise all aspects of the Company’s anti-money laundering and counter-terrorist financing, including but not limited to:</p>
                                <ul>
                                    <li>Ensuring the collection of customer’s identification information</li>
                                    <li>Establishing and updating internal policies and procedures for the completion, review, submission and retention of all reports and records required under the applicable laws and regulations</li>
                                    <li>Monitoring transactions and investigating any significant deviations from normal activity</li>
                                    <li>Implementing a records management system for appropriate storage and retrieval of documents, files, forms, and logs</li>
                                    <li>Updating risk assessment regularly</li>
                                    <li>Providing law enforcement with information as required under the applicable laws and regulations</li>
                                </ul>
                                <p>1.3.1. The Compliance Officer is entitled to interact with law enforcement, which are involved in prevention of money laundering, terrorist financing and other illegal activity.</p>
                                <p>1.4. Monitoring Transactions: The customers are known not only by verifying their identity (who they are) but, more importantly, by analyzing their transactional patterns (what they do). Therefore, the Company relies on data analysis as a risk-assessment and suspicion detection tool. The Company performs a variety of compliance-related tasks, including capturing data, filtering, record-keeping, investigation management, and reporting. System functionalities include:</p>
                                <p>With regard to the AML/KYC Policy, the Company will monitor all transactions and it reserves the right to:</p>
                                <ul>
                                    <li>Ensure that transactions of suspicious nature are reported to the proper law enforcement through the Compliance Officer</li>
                                    <li>Request the customer to provide any additional information and documents in case of suspicious transactions</li>
                                </ul>
                                <p>Suspend or terminate a customer’s account when the Company has reasonably suspicion that such customer engaged in illegal activity</p>
                                <p>The above list is not exhaustive, and the Compliance Officer will monitor customers’ transactions on a day-to-day basis in order to define whether such transactions are to be reported and treated as suspicious or are to be treated as bona fide.</p>
                                <p>1.5. Cryptocurrency transactions</p>
                                <p>1.5.1. Due to the higher level of risk associated with cryptocurrencies the Company will apply additional due diligence requirements and security checks to those customers and accounts who wish to deposit and transact using crypto currencies.</p>
                                <p>1.5.2. The due diligence and security checks detailed below are in addition to the checks already applied to customers using fiat currencies, not instead of.</p>
                                <p>1.5.3. Where the Company is not able to complete any check to its satisfaction it will suspend the customer account until such time as checks have been completed.</p>
                                <p>1.5.4. Where it is not able to complete all necessary checks or assure itself of either the identity of the customer or the source of funding, the matter will be referred to the management board and /or service provider for review and final decision.</p>
                                <p>1.5.5. Where the decision is to terminate the relationship any retained customer funds will be held in a seized funds account and declared as part of any suspicious activity report made to law enforcement.</p>
                                <p>1.6. Risk Assessment: The Company has adopted a risk-based approach to combating money laundering and terrorist financing. By adopting a risk-based approach, the Company is able to ensure that measures to prevent or mitigate money laundering and terrorist financing are commensurate to the identified risks. This will allow resources to be allocated in the most efficient manner. The principle is that resources should be directed in accordance with priorities so that the greatest risks receive the highest attention.</p>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="Section6">
                                <h4>Fairness and RNG Testing Methods</h4>
                                <p>At winslots.com we understand that integrity and fairness of our games is important to all of our players.</p>
                                <ul>
                                    <li>Random Number Generators (RNG) are utilised on all games such as Slots, Roulette and Blackjack. All RNGs are certified and tested externally and tested prior to going live on our site.</li>
                                    <li>All games are monitored for any discrepancies and action taken if any are found.</li>
                                    <li>The theoretical RTP (Return to player) is available on all games within the 'information' or 'help' section of the game.</li>
                                </ul>
                                <h4>What does ‘Return to Player' (‘RTP') mean?</h4>
                                <p>Each game has a ‘Theoretical RTP' value, and an ‘Actual RTP' value.</p>
                                <p>The ‘Theoretical RTP' is the expected return of the total money bet over an extended number (millions) of plays on the game and expressed as a percentage. Therefore, games with a theoretical RTP value of 98% indicates that 98% of the total money bet on the game is returned to players.</p>
                                <p>The ‘Actual RTP' is determined by way of periodic analysis of the game outcomes, also expressed as a percentage, to ensure that this remains close to the ‘Theoretical RTP' and an indicator that the game continues to function properly, randomly and fairly. </p>
                                <p>Analysis to ensure that the ‘Actual RTP's' of the games remain close to the ‘Theoretical RTPs' of games are carried out quarterly. How can I be sure that the ‘RNG' is indeed random and fair?</p>
                                <p>The ‘RNG' provided by our software suppliers has been rigorously tested and certified as random and fair by independent test houses that have met the highest standards required by the regulator.</p>
                                <p>The RTP for the game is not true, I have not received the percentage return that is published for the game.</p>
                                <p>RTP is a measure of all the play of all the players of the game pooled together. It is not the play or return to any one player. Some people will win and have an RTP in excess of 100%, some will lose and have an RTP of less than 100%. A player who wins $500 from $10 play has an RTP of 5000%. Players must recognise that if some winners have an RTP of 5000%, many other players are likely to have an RTP lower than the advertised average.</p>
                                <h4>How can I be sure that ‘live gaming' is fair?</h4>
                                <p>'Live gaming' takes place in strictly controlled studios, is fully recorded and monitored and is subject to statistical performance checking in the same way that software ‘RNG' gaming is checked. Live dealers can make mistakes in their handling of cards, spinning a wheel, etc., but these errors should be immediately apparent to all the players and the supervisor and can be checked.</p>
                                <p>For any issues customers should contact the Live Casino ‘Pit Boss' using the chat function on Live games, or Customer Services via Live Chat, email or telephone and can report any issues they feel have not been resolved. Customers should make a note of the game ID to ensure that Customer Services can respond quickly and efficiently.</p>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="Section7">
                                <h4>KYC Policies, Privacy &amp; Management of Personal Data</h4>
                                <p>This Privacy Policy describes the way in which Winslots deals with the information and data you provide to us to enable us to manage your relationship with winslots.</p>
                                <p>We will process any personal information provided to us or otherwise held by us relating to you in the manner set out in this Privacy Policy. Information may be provided via the Winslots Website (the "Website"), telephone calls or any other means.</p>
                                <p>By accepting this Privacy Policy you agree that you understand and accept the use of your personal information as set out in this policy. If you do not agree with the terms of this Privacy Policy please do not use the Website or otherwise provide us with your personal information.</p>
                                <h4>WHO WE ARE</h4>
                                <p>References in this Privacy Policy to “WINSLOTS” (hereinafter referred as “We”, “us” or “our”) shall mean winslots.com (the “Website” or “Site”) operated by Kumac Holdings N.V., a limited liability company registered and established under the laws of Curaçao with registration number ******. We offer and provide Internet-based and/or web based mobile version interactive gaming services (hereinafter referred to as the “Gambling Service” or “Services”.) We control the ways your Personal Data is collected and the purposes for which your Personal Data is used by Winslots, acting as the “data controller” for the purposes of applicable data protection legislation.</p>
                                <h4>OUR PRIVACY PRINCIPLES</h4>
                                <ul>
                                    <li>We protect, according to strict standards of security and confidentiality, all non-public personal information we collect about our customers;</li>
                                    <li>We maintain physical, electronic and organizational safeguards to protect this information;</li>
                                    <li>We require any party providing products to us or our customers on our behalf to protect the confidentiality of this information;</li>
                                    <li>We permit only authorized employees and contractors, including but not limited to Support and Fraud team to have access to non-public information of yours;</li>
                                    <li>We afford former customers the same protections as existing customers with respect to the use and sharing of their information;</li>
                                </ul>
                                <h4>PROTECTING YOUR PERSONAL DATA</h4>
                                <p>Your Personal Data isn’t just protected by the quality, commitment and high standards of Winslots, it’s also protected by law. We can only process your Personal Data when there is a genuine reason to do so and it must meet one of the following:</p>
                                <ul>
                                    <li>contractual relationship</li>
                                    <li>legal obligation</li>
                                    <li>your consent to process</li>
                                    <li>our legitimate interest</li>
                                    <li>public interest</li>
                                    <li>your vital interests</li>
                                </ul>
                                <h4>PROTECTING YOUR PERSONAL DATA</h4>
                                <p>When We have a business or commercial reason to process your Personal Data this is referred to as a legitimate interest. Your Personal Data is still protected and We must not process it in a way that would be unfair to you or your interests.</p>
                                <p>If We do use legitimate interests as a reason to process your Personal Data We will tell you that We are doing so, what our legitimate interests are and provide you with a method to raise any questions or objections you may have. However, compelling grounds for processing such information may over-ride your right to object.</p>
                                <h4>WHY WE PROCESS YOUR PERSONAL DATA</h4>
                                <p>Considering legal obligations undertook to fulfill the contract signed between us and the customers, including and not limited to the legal obligations undertook to comply with laws or regulations that apply to us, and for to be efficient about how We fulfil our legal and contractual duties, We process your Personal Data in order to:</p>
                                <ul>
                                    <li>Manage customer relationship</li>
                                    <li>Develop and manage our brands, new and existing products and Services for our customers, grow our business</li>
                                    <li>Create, develop, send and review marketing</li>
                                    <li>Learn from our customers’ behavior in relation to our product and Services</li>
                                    <li>To provide support for our products and Services</li>
                                    <li>To test new products, systems or Services</li>
                                    <li>To compare and manage our relationship with and the performance of other companies that provide Services to us and our customers</li>
                                    <li>Deliver quality products and Services to you</li>
                                    <li>Manage customer accounts, winnings, losses, payments and withdrawals</li>
                                    <li>Investigate, resolve and respond to any customer complaints</li>
                                    <li>Prevent and detect improper use of our systems</li>
                                    <li>Prevent crime happening</li>
                                    <li>Detect, investigate and report crime</li>
                                    <li>Managing risk for us and our customers</li>
                                    <li>Complying with any laws and regulations that apply to us</li>
                                    <li>Ensure corporate governance and compliance to all legal and regulatory obligations</li>
                                    <li>Fulfil our obligations as an accountable and responsible organization</li>
                                    <li>To exercise our rights set out in agreements or contracts</li>
                                </ul>
                                <p>Internal reporting</p>
                                <p>If you choose not to provide your Personal Data it may prevent us from meeting legal obligations, fulfilling a contract, or performing Services required to run your account. Not providing your Personal Data may mean We are unable to provide you with products or Services.</p>
                                <h4>INFORMATION COLLECTED</h4>
                                <p>The information and data about you which We may (Please, note that the scope of the information provided below is not mandatorily collected/stored/used/processed by us, Winslots reserves a right to collect/store/use/process data in certain cases when necessary for the various purposes stated in this Privacy Policy) collect, store, use and process may include but not exceed the following:</p>
                                <p>1.Personal Information:</p>
                                <p>1.1. Account details: when you open an account and register to use the Services, you may be asked to provide us certain details about yourself, such as: first and last name, email address, gender, birth data, physical address, ID number, phone number, occupation, etc. In addition, We may collect certain information as required under various KYC and Anti-Money Laundering (AML) regulatory requirements, such as your source of funds, identity, connection to criminal authorities, utility bill copies and etc.</p>
                                <p>1.2. Governmental-issued ID or Passport: in certain instances, you will be required to provide a copy of a governmental-issued ID or Passport, for identity verification process. Please, note that this information is required for certain features of our Services.</p>
                                <p>1.3. Gaming information: in order to provide the Services, We may automatically record different information related to your account and use of our Services, including, with respect to your transactions, wallets, deposits, balances, bets, winnings, bonuses and withdraws.</p>
                                <p>1.4. Voluntary information: We also collect information which you provide us voluntarily. For example, when you respond to communications from us, communicate with us via email or share additional information about yourself through your use of the Services, such as on the live chat with the support team or the game chat (e.g. Dice game).</p>
                                <p>2.Non-personal Information:</p>
                                <p>2.1. Log-in history and technical information: In order to enhance the functionality of the Services and to provide you with a better user experience, We collect technical information transmitted by your device, including certain software and hardware information (e.g. the type of browser and operating system your device uses, language preference, access time and the domain name of the Website from which you linked to the Services; etc.).</p>
                                <p>2.2. Gameplay information: We record gameplay information including, which, amongst other things, may include information regarding your deposits, crypto-wallet balances, bets, bonuses, game session duration and your high scores. We may also share and publish such information through any of our Platforms using your nickname or initials in cases if the user wins a sum worthy of publicity.</p>
                                <p>2.3. Device and connection information: If you download the Software to your device, We may collect information from the particular device you are using, for security and fraud detection and prevention purposes. For example, We may gather information with regard to other software which is running simultaneously with the Software for detecting if you are using software which is associated with fraudulent activity (e.g. robots, malware, AI, etc.) or checking if the connection you are using is via a VPN or proxy.</p>
                                <p>2.4. Analytic information: We may collect information about your use of the Services, such as applications' usage, log files, user activity (e.g. pages viewed, the amount of time spent on particular pages, online browsing, clicks, actions, etc.), time stamps, alerts, etc. This information is collected for amongst other things troubleshooting errors and bugs as well as for research and analytics purposes about your use of the Services.</p>
                                <p>2.5. Anonymous information: We may anonymize or de-identify the information collected by the Services or via other means so that the information cannot, on its own, personally identify you. Our use and disclosure of such aggregated or de-identified information is not subject to any restrictions under this Privacy Policy, and We may disclose it to others without limitation and for any purpose, such as for advertising or marketing purposes.</p>
                                <p>Where it is reasonable for us to do so and not detrimental to your rights and freedoms, We may also collect Personal Data from publicly available sources such as internet searches, social media or broadcast media.</p>
                                <h4>HOW LONG WE KEEP YOUR PERSONAL DATA</h4>
                                <p>Whenever your data is kept by Winslots We will ensure that it is appropriately protected and only for acceptable purposes.</p>
                                <p>We will keep your data for the period that you are a customer of Winslots. If you are no longer a customer of Winslots, We will keep your data for 10 years as required to comply with the purposes set out in this policy. Your personal records will be kept even if the customer account is blocked/deactivated/deleted/otherwise no longer active or cannot be deleted for technical reasons.</p>
                                <h4>DATA SHARED WITH THIRD PARTIES</h4>
                                <p>When necessary for the following purposes, We may share your Personal Data within the Winslots group and with other organizations stated below:</p>
                                <ul>
                                    <li>Law enforcement agencies, regulators and other authorities</li>
                                    <li>Credit reference agencies</li>
                                    <li>Fraud prevention agencies</li>
                                    <li>Identity verification agencies</li>
                                    <li>Organizations that introduce you to us</li>
                                    <li>Third parties you ask us (or permit us) to share your data with</li>
                                    <li>Third parties necessary to provide products or Services which you have requested</li>
                                </ul>
                                <p>The Site may use your Personal Information, including, but not limited to your name, email address or telephone number, ourselves or by using our third-party subcontractors/affiliates/game providers/joint marketing partners/business partners for the purpose of providing you with promotional materials, concerning the Services as well as products, services, websites and applications which relate to you or interest you. </p>
                                <ul>
                                    <li>We may share and disclose said Personal Information with our Marketing Affiliates for the purpose of providing you different marketing offers, which We, or our Marketing Affiliates, believe are relevant for you. Our Marketing Affiliates may use this Personal Information for different marketing techniques, such as direct email, post, SMS and telephone marketing purposes.</li>
                                    <li>We may share any Personal information We collect from and about you with non-affiliated third parties. Information may be shared with or collected by third party service providers who provide us with Services such as information processing (e.g. under AML or KYC policy adopted by our Website and etc.). We require these providers to exercise reasonable care to protect your Personal Information and restrict the use of the data provided to the purposes for which it was provided to them. </li>
                                </ul>
                                <p>Your personal information may be transferred between the countries and disclosed to other companies within associated or subsidiary companies and to business partners, or successors in title to our business.</p>
                                <h4>HOW WE KEEP YOUR INFORMATION SECURED</h4>
                                <p>We take great care in implementing and maintaining the security of the Services and your information. We have put in place appropriate physical and technological safeguards to help prevent unauthorized access, to maintain data security, and to use correctly the information We collect online. These safeguards vary based on the sensitivity of the information that We collect and store.</p>
                                <p>We employ industry standard procedures and controls to ensure the safety of our users’ information, such as:</p>
                                <ul>
                                    <li>Secure network topology, which includes intrusion prevention and Firewall systems;</li>
                                    <li>Encrypted communication;</li>
                                    <li>Authentication and Access Control;</li>
                                    <li>External and Internal audit tests, etc.</li>
                                </ul>
                                <h4>ONLINE SECURITY</h4>
                                <p>Although We take reasonable steps to safeguard information, however, due to the design of the Internet, We cannot be responsible for the acts of those who gain unauthorized access, abuse the Services or hacking and We make no warranty, express, implied or otherwise, that We will prevent such access.</p>
                                <p>The Site may contain hyperlinks to other websites that may have information policies and practices that are different from ours. The fact that We have provided a link to a site is not an endorsement, authorization, sponsorship, or affiliation by us with respect to such site, its owners, or its providers. Links to other websites are provided only as a convenience to you. We are not responsible for the content, validity, privacy policies or reliability of any website linked to this Site that is not within our family of properties. There are risks in using any information, products, software or Services found on the Internet, and you should make sure that you completely understand these risks before using, relying upon, or purchasing anything via the Internet.</p>
                                <h4>USE OF COOKIES</h4>
                                <p>The Website uses cookies to deliver a better and more personalized Service to users.</p>
                                <p>Cookies are small text files containing minimum amounts of information which are sent to and stored on your computer, smartphone or other device when you access a Website. Cookies are then sent back to the originating Website on each subsequent visit or to another website that recognizes that cookie.</p>
                                <p>Cookies are generally used to improve and enhance the user experience. Some of the cookies We use are essential for the Website to operate.</p>
                                <p>Winslots’s use of cookies on the Website falls into the following categories:</p>
                                <ul>
                                    <li>Session Management</li>
                                    <li>Functionality</li>
                                    <li>Fraud Prevention</li>
                                    <li>Tracking</li>
                                    <li>Analysis</li>
                                </ul>
                                <p>Third party advertising companies/affiliates, that work with us, may also use cookies and related technologies to collect and store Information to provide you with advertisements that are likely to interest you.</p>
                                <p>You can find more information about cookies at www.allaboutcookies.org.</p>
                                <h4>YOUR RIGHTS OVER YOUR PERSONAL DATA</h4>
                                <p>We will assist you if you choose to exercise any of your rights over your Personal Data, including:</p>
                                <ul>
                                    <li>Withdrawing your previously granted consent (however, this will not invalidate any information processed under your previous consent)</li>
                                    <li>Lodging a complaint with any relevant Data Protection Authority</li>
                                    <li>Access to your Personal Data that We hold or process</li>
                                    <li>Correction of any Personal Data that is incorrect or out of date</li>
                                    <li>Erasure of any Personal Data that We process</li>
                                    <li>Please be noted, that upon your request We can delete any Personal Data after the account is blocked/deactivated/deleted/otherwise no longer active, except email and mobile number. We reserve the right to keep the email and mobile number to avoid unlawful registering using the same email and mobile number, even though, standalone email and/or mobile number is not considered as Personal Data</li>
                                    <li>Personal Data cannot be deleted when the account is temporarily suspended upon your request. We reserve the right to keep the Personal Data in order to match the information when the account is pending to be reopened.</li>
                                    <li>Asking us to provide you or another company you nominate with certain aspects of your Personal Data, often referred to as “the right to portability”</li>
                                    <li>The ability to object to any processing data where We are doing it for our legitimate interests</li>
                                    <li>The ability to contest a decision made entirely by automated processing, to express your point of view and to request that a human review the decision</li>
                                </ul>
                                <p>For more information on these rights you can contact support@winslots.com</p>
                                <h4>MINORS</h4>
                                <p>The Services are not designed or directed to persons under the age of 18 or persons under the age of legal consent with respect to the use of the Services of any jurisdiction, whichever is higher (“Legally of Age”). If you are not Legally of Age, you should not download or use the Services nor provide any Personal Information to us.</p>
                                <p>We reserve the right to access and verify any Personal Information collected from you. In the event that We become aware that a user who is not Legally of Age has shared any information, we may discard such information. If you have any reason to believe that a minor has shared any information with us, please contact us.</p>
                                <h4>CHANGES TO OUR PRIVACY STATEMENT</h4>
                                <p>Over time, it may be necessary to modify or supplement our Privacy Policy. When We make changes, We will post the changes to our Websites and change the date at the top of the policy. The amended Privacy Policy will be effective upon posting on the site. We encourage you to visit our Website from time to time to review our Privacy Policy in the event it has changed. Your continued provision of information to us or use of our Websites following the posting of changes to the Privacy Policy means that you accept the changes and our use of your Personal Information in accordance with the revised Privacy Policy. If any material changes are made to this Privacy Policy We will use reasonable endeavors to inform you in advance by email, notice on the Website or other agreed communications channels.</p>
                                <p>Additionally, in relation to the Privacy Policy, We reserve right to amend, modify, update and change any of the terms and conditions of the Privacy Policy from time to time and you may be required to accept such changes to the Privacy Policy in order to continue using the online Services and products.</p>
                                <p>We will communicate the changes to you in advance, giving an appropriate amount of time for you to consider and understand the changes before they become effective. We will not enforce material changes to the Privacy Policy without your express consent. If you decline to accept the changes to the Privacy Policy, or otherwise do not accept the changes within the time period, We may not be able to continue to provide some or all products and Services.</p>
                                <h4>TERMS OF USE</h4>
                                <p>Your use of our Site constitutes your acceptance of automatic use of cookies according to this Privacy Policy. This Privacy Policy is an integral part of Website’s Terms and Conditions and can be fully enforced as the Terms and Conditions are accepted by registering on our Website.</p>
                                <h4>CONTACTING US</h4>
                                <p>If you have any concerns, or would like more detail about how We process your Personal Data, you can contact us at support@winslots.com</p>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="Section8">
                                <h4>Accounts, Payouts &amp; Bonuses.</h4>
                                <p>At Winslots, players can win rewards or bonuses in the following ways:</p>
                                <ul>
                                    <li>Participating in Winslots regular promotions and/or tournaments</li>
                                    <li>Activating the Casino Boost if the player has one</li>
                                    <li>Being a part of Winslots Loyalty Club</li>
                                </ul>
                                <p>All rewards that a player wins come without any wagering requirements. Winslots does not offer deposit or welcome bonuses. </p>
                                <p>Depending on the promotion or tournament, there are 3 types of bonuses/rewards that players can get:</p>
                                <ul>
                                    <li>Free spins - free rounds on a game</li>
                                    <li>Free chips - given to players specifically for table games</li>
                                    <li>Cash rewards - cash that is added to a player’s balance automatically</li>
                                </ul>
                                <p>Players can find bonuses/rewards that are available to them in the Rewards tab of player account settings. Promo or bonus codes that players have been given can also be enabled in the Rewards tab. winslots.com may change or cancel any promotion at its sole discretion at any given time.</p>
                                <p>Reward money can not be wagered in the following games: 1429 Uncharted Seas, Atlantean Treasures Mega Moolah, Beautiful Bones, Blood Suckers, Blood Suckers II, Book of Oz, Castle Builder II, Chilli Pop, Cops n Robbers, Dead or Alive, Dice (Spribe Gaming), Dwarfs Gone Wild, Dynamite Riches, EggOMatic, Fa Cai Shen Deluxe, Fairytale Legends: Hansel and Gretel, First Person Mega Ball, Fish Hunter Asia Gaming, Fishing God, Fishing War, Football Manager, Gemix, Goal (Spribe Gaming), Gold Rush, Guns N Roses, Gunslinger Reloaded, Gypsy Rose, Gypsy Rose, Hammer of Fortune, Happy Ape, Heads and Tails, Hilo (Spribe Gaming), Immortal Romance, Jack Hammer 2, Jack Hammer 2: Fishy Business, Jackpot 6000, Jammin Jars, Jellyfish Flow Ultra, Jokerizer, Keno (Spribe Gaming), Koi Princess, Le Kaffee Bar, Loony Blox, Lucky Angler, Mahjong, Marching Legions, Mega Moolah, Mega Rise, Mines (Spribe Gaming), Motorhead, Pearls of India, Peek-a-Boo - 5 Reel, Phoenix Jackpot, Plinko (BGAMING), Plinko (Spribe Gaming), Power of Elements, Queen of Gold, Rage to Riches, Reel Rush 2, Relic Hunters and the Book of Faith, Roulette (Spribe Gaming), Secret of the Stones, Solar Temple, Stardust, Steam Vault, Sugar Pop, Sugar Pop 2, Taberna De Los Muertos, The True Sheriff, The Twisted Circus, The Wish Master, Thrones of Persia, Tomb Raider, Tomb Raider: Secret of the Sword, Tower Quest, Treasures of Lion City, Vampire: The Masquerade - Las Vegas, Vegas Wins, Vikings, Well of Wishes, Wizards Want War.</p>
                                <p>Winslots Loyalty Club</p>
                                <p>Players receive loyalty level points from real money bets on the games that they play. There are different loyalty levels that players can reach, all of which give milestone rewards that are tailored to the player’s gameplay.</p>
                                <p>Withdrawals</p>
                                <p>Withdrawals cannot be made when a player has an active bonus/reward. To make a withdrawal, an active reward/bonus has to be completed. The player also has the option to forfeit or cancel his/her bonus if they wish to do so. Players can check and forfeit active rewards under the Rewards tab of their player account.</p>
                                <p>All games by Evolution Gaming cannot be accessed if a player has an active reward in their account.</p>
                                <p>Reward abuse includes but is not limited to:</p>
                                <ul>
                                    <li>Breaching Terms &amp; Conditions of a reward, cash reward or other promotional offers;</li>
                                    <li>Opening multiple accounts to claim multiple rewards;</li>
                                    <li>Allowing a person other than a player himself to place bets on his account whilst a reward is active.</li>
                                </ul>
                                <p>If reasonable suspicion, or proof, exists that the account holder has been found in violation of these reward terms in the form of reward abuse, either individually or acting as a group, winslots.com reserves the right to forfeit the reward and any winnings from that reward, remove funds related to this reward, block the player from accessing certain products, exclude the player from any future promotions or terminate the player account with immediate effect.</p>
                                <p>Using methods, techniques or software which allow a player to gain an edge over other players and/or the reward system are prohibited and considered abuse. All rewards are meant for non-professional and entertainment purposes only.</p>
                                <p>By enabling a reward or using reward funds for play, a player has accepted and agreed to all the above Terms and Conditions and any other requirements or conditions stated in the promotional material and the General Terms and Conditions.</p>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="Section9">
                                <h4>Privacy police</h4>
                                <p>This Privacy Policy describes the way in which Winslots deals with the information and data you provide to us to enable us to manage your relationship with Winslots.</p>
                                <p>We will process any personal information provided to us or otherwise held by us relating to you in the manner set out in this Privacy Policy. Information may be provided via the Winslots Website (the "Website"), telephone calls or any other means.</p>
                                <p>By accepting this Privacy Policy you agree that you understand and accept the use of your personal information as set out in this policy. If you do not agree with the terms of this Privacy Policy please do not use the Website or otherwise provide us with your personal information.</p>
                                <h4>WHO WE ARE</h4>
                                <p>References in this Privacy Policy to “WINSLOTS” (hereinafter referred as “We”, “us” or “our”) shall mean winslots.com (the “Website” or “Site”) operated by Kumac Holdings N.V., a limited liability company registered and established under the laws of Curaçao with registration number ******. We offer and provide Internet-based and/or web based mobile version interactive gaming services (hereinafter referred to as the “Gambling Service” or “Services”.) We control the ways your Personal Data is collected and the purposes for which your Personal Data is used by Winslots, acting as the “data controller” for the purposes of applicable data protection legislation.</p>
                                <h4>OUR PRIVACY PRINCIPLES</h4>
                                <ul>
                                    <li>We protect, according to strict standards of security and confidentiality, all non-public personal information we collect about our customers;</li>
                                    <li>We maintain physical, electronic and organizational safeguards to protect this information;</li>
                                    <li>We require any party providing products to us or our customers on our behalf to protect the confidentiality of this information;</li>
                                    <li>We permit only authorized employees and contractors, including but not limited to Support and Fraud team to have access to non-public information of yours;</li>
                                    <li>We afford former customers the same protections as existing customers with respect to the use and sharing of their information;</li>
                                </ul>
                                <h4>PROTECTING YOUR PERSONAL DATA</h4>
                                <p>Your Personal Data isn’t just protected by the quality, commitment and high standards of Winslots, it’s also protected by law. We can only process your Personal Data when there is a genuine reason to do so and it must meet one of the following:</p>
                                <ul>
                                    <li>contractual relationship</li>
                                    <li>legal obligation</li>
                                    <li>your consent to process</li>
                                    <li>our legitimate interest</li>
                                    <li>public interest</li>
                                    <li>your vital interests</li>
                                </ul>
                                <h4>OUR INTERESTS</h4>
                                <p>When We have a business or commercial reason to process your Personal Data this is referred to as a legitimate interest. Your Personal Data is still protected and We must not process it in a way that would be unfair to you or your interests.</p>
                                <p>If We do use legitimate interests as a reason to process your Personal Data We will tell you that We are doing so, what our legitimate interests are and provide you with a method to raise any questions or objections you may have. However, compelling grounds for processing such information may over-ride your right to object.</p>
                                <h4>WHY WE PROCESS YOUR PERSONAL DATA</h4>
                                <p>Considering legal obligations undertook to fulfill the contract signed between us and the customers, including and not limited to the legal obligations undertook to comply with laws or regulations that apply to us, and for to be efficient about how We fulfil our legal and contractual duties, We process your Personal Data in order to:</p>
                                <ul>
                                    <li>Manage customer relationship</li>
                                    <li>Develop and manage our brands, new and existing products and Services for our customers, grow our business</li>
                                    <li>Create, develop, send and review marketing</li>
                                    <li>Learn from our customers’ behavior in relation to our product and Services</li>
                                    <li>To provide support for our products and Services</li>
                                    <li>To test new products, systems or Services</li>
                                    <li>To compare and manage our relationship with and the performance of other companies that provide Services to us and our customers</li>
                                    <li>Deliver quality products and Services to you</li>
                                    <li>Manage customer accounts, winnings, losses, payments and withdrawals</li>
                                    <li>Investigate, resolve and respond to any customer complaints</li>
                                    <li>Prevent and detect improper use of our systems</li>
                                    <li>Prevent crime happening</li>
                                    <li>Detect, investigate and report crime</li>
                                    <li>Managing risk for us and our customers</li>
                                    <li>Complying with any laws and regulations that apply to us</li>
                                    <li>Ensure corporate governance and compliance to all legal and regulatory obligations</li>
                                    <li>Fulfil our obligations as an accountable and responsible organization</li>
                                    <li>To exercise our rights set out in agreements or contracts</li>
                                </ul>
                                <p>Internal reporting</p>
                                <p>If you choose not to provide your Personal Data it may prevent us from meeting legal obligations, fulfilling a contract, or performing Services required to run your account. Not providing your Personal Data may mean We are unable to provide you with products or Services.</p>
                                <h4>INFORMATION COLLECTED</h4>
                                <p>The information and data about you which We may (Please, note that the scope of the information provided below is not mandatorily collected/stored/used/processed by us, Winslots reserves a right to collect/store/use/process data in certain cases when necessary for the various purposes stated in this Privacy Policy) collect, store, use and process may include but not exceed the following:</p>
                                <p>1.Personal Information:</p>
                                <p>1.1. Account details: when you open an account and register to use the Services, you may be asked to provide us certain details about yourself, such as: first and last name, email address, gender, birth data, physical address, ID number, phone number, occupation, etc. In addition, We may collect certain information as required under various KYC and Anti-Money Laundering (AML) regulatory requirements, such as your source of funds, identity, connection to criminal authorities, utility bill copies and etc.</p>
                                <p>1.2. Governmental-issued ID or Passport: in certain instances, you will be required to provide a copy of a governmental-issued ID or Passport, for identity verification process. Please, note that this information is required for certain features of our Services.</p>
                                <p>1.3. Gaming information: in order to provide the Services, We may automatically record different information related to your account and use of our Services, including, with respect to your transactions, wallets, deposits, balances, bets, winnings, bonuses and withdraws.</p>
                                <p>1.4. Voluntary information: We also collect information which you provide us voluntarily. For example, when you respond to communications from us, communicate with us via email or share additional information about yourself through your use of the Services, such as on the live chat with the support team or the game chat (e.g. Dice game).</p>
                                <p>2.Non-personal Information:</p>
                                <p>2.1. Log-in history and technical information: In order to enhance the functionality of the Services and to provide you with a better user experience, We collect technical information transmitted by your device, including certain software and hardware information (e.g. the type of browser and operating system your device uses, language preference, access time and the domain name of the Website from which you linked to the Services; etc.).</p>
                                <p>2.2. Gameplay information: We record gameplay information including, which, amongst other things, may include information regarding your deposits, crypto-wallet balances, bets, bonuses, game session duration and your high scores. We may also share and publish such information through any of our Platforms using your nickname or initials in cases if the user wins a sum worthy of publicity.</p>
                                <p>2.3. Device and connection information: If you download the Software to your device, We may collect information from the particular device you are using, for security and fraud detection and prevention purposes. For example, We may gather information with regard to other software which is running simultaneously with the Software for detecting if you are using software which is associated with fraudulent activity (e.g. robots, malware, AI, etc.) or checking if the connection you are using is via a VPN or proxy.</p>
                                <p>2.4. Analytic information: We may collect information about your use of the Services, such as applications' usage, log files, user activity (e.g. pages viewed, the amount of time spent on particular pages, online browsing, clicks, actions, etc.), time stamps, alerts, etc. This information is collected for amongst other things troubleshooting errors and bugs as well as for research and analytics purposes about your use of the Services.</p>
                                <p>2.5. Anonymous information: We may anonymize or de-identify the information collected by the Services or via other means so that the information cannot, on its own, personally identify you. Our use and disclosure of such aggregated or de-identified information is not subject to any restrictions under this Privacy Policy, and We may disclose it to others without limitation and for any purpose, such as for advertising or marketing purposes.</p>
                                <p>Where it is reasonable for us to do so and not detrimental to your rights and freedoms, We may also collect Personal Data from publicly available sources such as internet searches, social media or broadcast media.</p>
                                <h4>HOW LONG WE KEEP YOUR PERSONAL DATA</h4>
                                <p>Whenever your data is kept by Winslots We will ensure that it is appropriately protected and only for acceptable purposes.</p>
                                <p>We will keep your data for the period that you are a customer of Winslots. If you are no longer a customer of Winslots, We will keep your data for 10 years as required to comply with the purposes set out in this policy. Your personal records will be kept even if the customer account is blocked/deactivated/deleted/otherwise no longer active or cannot be deleted for technical reasons.</p>
                                <h4>DATA SHARED WITH THIRD PARTIES</h4>
                                <p>When necessary for the following purposes, We may share your Personal Data within the Winslots group and with other organizations stated below:</p>
                                <ul>
                                    <li>Law enforcement agencies, regulators and other authorities</li>
                                    <li>Credit reference agencies</li>
                                    <li>Fraud prevention agencies</li>
                                    <li>Identity verification agencies</li>
                                    <li>Organizations that introduce you to us</li>
                                    <li>Third parties you ask us (or permit us) to share your data with</li>
                                    <li>Third parties necessary to provide products or Services which you have requested</li>
                                </ul>
                                <p>The Site may use your Personal Information, including, but not limited to your name, email address or telephone number, ourselves or by using our third-party subcontractors/affiliates/game providers/joint marketing partners/business partners for the purpose of providing you with promotional materials, concerning the Services as well as products, services, websites and applications which relate to you or interest you. </p>
                                <ul>
                                    <li>We may share and disclose said Personal Information with our Marketing Affiliates for the purpose of providing you different marketing offers, which We, or our Marketing Affiliates, believe are relevant for you. Our Marketing Affiliates may use this Personal Information for different marketing techniques, such as direct email, post, SMS and telephone marketing purposes.</li>
                                    <li>We may share any Personal information We collect from and about you with non-affiliated third parties. Information may be shared with or collected by third party service providers who provide us with Services such as information processing (e.g. under AML or KYC policy adopted by our Website and etc.). We require these providers to exercise reasonable care to protect your Personal Information and restrict the use of the data provided to the purposes for which it was provided to them. </li>
                                </ul>
                                <p>Your personal information may be transferred between the countries and disclosed to other companies within associated or subsidiary companies and to business partners, or successors in title to our business.</p>
                                <h4>HOW WE KEEP YOUR INFORMATION SECURED</h4>
                                <p>We take great care in implementing and maintaining the security of the Services and your information. We have put in place appropriate physical and technological safeguards to help prevent unauthorized access, to maintain data security, and to use correctly the information We collect online. These safeguards vary based on the sensitivity of the information that We collect and store.</p>
                                <p>We employ industry standard procedures and controls to ensure the safety of our users’ information, such as:</p>
                                <ul>
                                    <li>Secure network topology, which includes intrusion prevention and Firewall systems;</li>
                                    <li>Encrypted communication;</li>
                                    <li>Authentication and Access Control;</li>
                                    <li>External and Internal audit tests, etc.</li>
                                </ul>
                                <h4>ONLINE SECURITY</h4>
                                <p>Although We take reasonable steps to safeguard information, however, due to the design of the Internet, We cannot be responsible for the acts of those who gain unauthorized access, abuse the Services or hacking and We make no warranty, express, implied or otherwise, that We will prevent such access.</p>
                                <p>The Site may contain hyperlinks to other websites that may have information policies and practices that are different from ours. The fact that We have provided a link to a site is not an endorsement, authorization, sponsorship, or affiliation by us with respect to such site, its owners, or its providers. Links to other websites are provided only as a convenience to you. We are not responsible for the content, validity, privacy policies or reliability of any website linked to this Site that is not within our family of properties. There are risks in using any information, products, software or Services found on the Internet, and you should make sure that you completely understand these risks before using, relying upon, or purchasing anything via the Internet. </p>
                                <h4>USE OF COOKIES</h4>
                                <p>The Website uses cookies to deliver a better and more personalized Service to users.</p>
                                <p>Cookies are small text files containing minimum amounts of information which are sent to and stored on your computer, smartphone or other device when you access a Website. Cookies are then sent back to the originating Website on each subsequent visit or to another website that recognizes that cookie.</p>
                                <p>Cookies are generally used to improve and enhance the user experience. Some of the cookies We use are essential for the Website to operate.</p>
                                <p>Winslots’s use of cookies on the Website falls into the following categories:</p>
                                <ul>
                                    <li>Session Management</li>
                                    <li>Functionality</li>
                                    <li>Fraud Prevention</li>
                                    <li>Tracking</li>
                                    <li>Analysis</li>
                                </ul>
                                <p>Third party advertising companies/affiliates, that work with us, may also use cookies and related technologies to collect and store Information to provide you with advertisements that are likely to interest you.</p>
                                <p>You can find more information about cookies at www.allaboutcookies.org.</p>
                                <h4>YOUR RIGHTS OVER YOUR PERSONAL DATA</h4>
                                <p>We will assist you if you choose to exercise any of your rights over your Personal Data, including:</p>
                                <ul>
                                    <li>Withdrawing your previously granted consent (however, this will not invalidate any information processed under your previous consent)</li>
                                    <li>Lodging a complaint with any relevant Data Protection Authority</li>
                                    <li>Access to your Personal Data that We hold or process</li>
                                    <li>Correction of any Personal Data that is incorrect or out of date</li>
                                    <li>Erasure of any Personal Data that We process</li>
                                    <li>Please be noted, that upon your request We can delete any Personal Data after the account is blocked/deactivated/deleted/otherwise no longer active, except email and mobile number. We reserve the right to keep the email and mobile number to avoid unlawful registering using the same email and mobile number, even though, standalone email and/or mobile number is not considered as Personal Data</li>
                                    <li>Personal Data cannot be deleted when the account is temporarily suspended upon your request. We reserve the right to keep the Personal Data in order to match the information when the account is pending to be reopened.</li>
                                    <li>Asking us to provide you or another company you nominate with certain aspects of your Personal Data, often referred to as “the right to portability”</li>
                                    <li>The ability to object to any processing data where We are doing it for our legitimate interests</li>
                                    <li>The ability to contest a decision made entirely by automated processing, to express your point of view and to request that a human review the decision</li>
                                </ul>
                                <p>For more information on these rights you can contact support@winslots.com</p>
                                <h4>MINORS</h4>
                                <p>The Services are not designed or directed to persons under the age of 18 or persons under the age of legal consent with respect to the use of the Services of any jurisdiction, whichever is higher (“Legally of Age”). If you are not Legally of Age, you should not download or use the Services nor provide any Personal Information to us.</p>
                                <p>We reserve the right to access and verify any Personal Information collected from you. In the event that We become aware that a user who is not Legally of Age has shared any information, we may discard such information. If you have any reason to believe that a minor has shared any information with us, please contact us.</p>
                                <h4>CHANGES TO OUR PRIVACY STATEMENT</h4>
                                <p>Over time, it may be necessary to modify or supplement our Privacy Policy. When We make changes, We will post the changes to our Websites and change the date at the top of the policy. The amended Privacy Policy will be effective upon posting on the site. We encourage you to visit our Website from time to time to review our Privacy Policy in the event it has changed. Your continued provision of information to us or use of our Websites following the posting of changes to the Privacy Policy means that you accept the changes and our use of your Personal Information in accordance with the revised Privacy Policy. If any material changes are made to this Privacy Policy We will use reasonable endeavors to inform you in advance by email, notice on the Website or other agreed communications channels.</p>
                                <p>Additionally, in relation to the Privacy Policy, We reserve right to amend, modify, update and change any of the terms and conditions of the Privacy Policy from time to time and you may be required to accept such changes to the Privacy Policy in order to continue using the online Services and products.</p>
                                <p>We will communicate the changes to you in advance, giving an appropriate amount of time for you to consider and understand the changes before they become effective. We will not enforce material changes to the Privacy Policy without your express consent. If you decline to accept the changes to the Privacy Policy, or otherwise do not accept the changes within the time period, We may not be able to continue to provide some or all products and Services.</p>
                                <h4>TERMS OF USE</h4>
                                <p>Your use of our Site constitutes your acceptance of automatic use of cookies according to this Privacy Policy. This Privacy Policy is an integral part of Website’s Terms and Conditions and can be fully enforced as the Terms and Conditions are accepted by registering on our Website.</p>
                                <h4>CONTACTING US</h4>
                                <p>If you have any concerns, or would like more detail about how We process your Personal Data, you can contact us at support@winslots.com</p>
                            </div>
                        </div>
                    </div>
                    <!-- //Terms and Conditions -->
                </div>
            </div>
            <!-- //Modal content-->
        </div>
    </div>
    <!-- //Terms and Condition Model -->

    <!-- Bonus Modal -->
    <div id="modalBonus" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <div class="modal-body">
                    <h3 class="modal-title">Bonus</h3>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <table class="change-table">
                                    <tbody>
                                        <tr>
                                            <td colspan="2">
                                                <p><i class="fa fa-volume-up"></i>&nbsp;&nbsp;If you have more than 100 bonus points, you can switch cash in 100 -point increments.</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="bonus-title">
                                                My Bonus
                                            </td>
                                            <td>
                                                <span class="orange-color">0.00</span> Point
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="bonus-title">
                                                Change Amount
                                            </td>
                                            <td>
                                                <input type="text" id="amount" placeholder="0" />
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                                <div>
                                    <div class="bottom-btn"><button type="button" class="btn change-btn" onclick="bonusChange()">Bonus Change</button></div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="bonus-table" style="overflow-x:auto;">
                                <div id="toolbar-bonus">
                                    <button id="btn-bonus" type="button" onclick="couponDelete()" class="btn toolbar-delete-btn"><i class="fa fa-trash"></i> Delete</button>
                                </div>
                                <table id="bonus_table" data-toggle="table" data-toolbar="#toolbar-bonus" data-classes="table table-no-bordered" data-detail-view="true" data-detail-formatter="bonusDetailFormatter" data-pagination="true" data-page-size="5" data-page-list="[5, 10, 25, 50, 100, ALL]" class="table table-no-bordered">
                                    <thead>
                                        <tr>
                                            <th data-align="center" data-field="check_box" data-width="40"><input name="btSelectAll" type="checkbox"></th>
                                            <th data-align="center" data-field="no">No</th>
                                            <th data-align="center" data-field="status">Used</th>
                                            <th data-align="center" data-field="amount">Amount</th>
                                            <th data-align="center" data-field="createdAt">Date of issue</th>
                                            <th data-align="center" data-field="use_date">Use</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <input data-index="0" name="btSelectItem" type="checkbox">
                                            </td>
                                            <td>1</td>
                                            <td>Used</td>
                                            <td>100</td>
                                            <td>2020-04-03 13:43:24</td>
                                            <td>2020-04-03 13:43:35</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input data-index="1" name="btSelectItem" type="checkbox">
                                            </td>
                                            <td>2</td>
                                            <td>Used</td>
                                            <td>50</td>
                                            <td>2020-04-26 20:25:59</td>
                                            <td>2020-04-26 23:59:59</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="clearfix"></div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- //Bonus Modal -->

    <!-- Coupon Modal -->
    <div id="modalCoupon" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <div class="modal-body">
                    <h3 class="modal-title">Coupon</h3>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="coupon-table" style="overflow-x:auto;">
                                <div id="toolbar-coupon">
                                    <button id="btn-coupon" type="button" onclick="couponDelete()" class="btn toolbar-delete-btn"><i class="fa fa-trash"></i> Delete</button>
                                </div>
                                <table id="coupon-table" data-toggle="table" data-toolbar="#toolbar-coupon" data-classes="table table-no-bordered" data-detail-view="true" data-detail-formatter="couponDetailFormatter" data-pagination="true" data-page-size="5" data-page-list="[5, 10, 25, 50, 100, ALL]" class="table table-no-bordered">
                                    <thead>
                                        <tr>
                                            <th data-align="center" data-field="check_box" data-width="40"><input name="btSelectAll" type="checkbox"></th>
                                            <th data-align="center" data-field="no">No</th>
                                            <th data-align="center" data-field="createdAt">Date of issue</th>
                                            <th data-align="center" data-field="expiration_date">Expiration date</th>
                                            <th data-align="center" data-field="amount">Amount</th>
                                            <th data-align="center" data-field="status">Used</th>
                                            <th data-align="center" data-field="use">Use</th>
                                            <th data-align="center" data-field="delete">Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <input data-index="0" name="btSelectItem" type="checkbox">
                                            </td>
                                            <td>1</td>
                                            <td>2020-04-25 04:29:17</td>
                                            <td>2020-04-25 23:55:00</td>
                                            <td>50</td>
                                            <td>N</td>
                                            <td><button type="button" role="button" rel="nofollow" class="btn-coupon-use">Use</button></td>
                                            <td><button type="button" role="button" rel="nofollow" class="btn-coupon-delete">Delete</button></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input data-index="1" name="btSelectItem" type="checkbox">
                                            </td>
                                            <td>2</td>
                                            <td>2020-04-26 23:59:59</td>
                                            <td>2020-05-26 23:59:59</td>
                                            <td>50</td>
                                            <td>N</td>
                                            <td><button type="button" role="button" rel="nofollow" class="btn-coupon-use">Use</button></td>
                                            <td><button type="button" role="button" rel="nofollow" class="btn-coupon-delete">Delete</button></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="clearfix"></div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>

                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- //Coupon Modal -->

    <!-- Payment Modal -->
    <div id="modalPaymentHistory" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <div class="modal-body">
                    <h3 class="modal-title">Payment History</h3>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="payment-table" style="overflow-x:auto;">
                                <div id="toolbar-payment">
                                    <button id="btn-payment" type="button" onclick="paymentDelete()" class="btn toolbar-delete-btn"><i class="fa fa-trash"></i> Delete</button>
                                </div>
                                <table id="exchange_table" data-toggle="table" data-toolbar="#toolbar-payment" data-classes="table table-no-bordered" data-detail-view="true" data-detail-formatter="paymentDetailFormatter" data-pagination="true" data-page-size="5" data-page-list="[5, 10, 25, 50, 100, ALL]" class="table table-no-bordered">
                                    <thead>
                                        <tr>
                                            <th data-align="center" data-field="check_box" data-width="40"><input name="btSelectAll" type="checkbox"></th>
                                            <th data-align="center" data-field="no">No</th>
                                            <th data-align="center" data-field="direction">Content</th>
                                            <th data-align="center" data-field="currency">Payment</th>
                                            <th data-align="center" data-field="usd">USD</th>
                                            <th data-align="center" data-field="currency_amount">Amount</th>
                                            <th data-align="center" data-field="my_state">Confirm</th>
                                            <th data-align="center" data-field="createdAt">Application Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <input data-index="0" name="btSelectItem" type="checkbox">
                                            </td>
                                            <td>1</td>
                                            <td>Deposit</td>
                                            <td>BTC</td>
                                            <td>73.00</td>
                                            <td>0.01</td>
                                            <td><span class="red-color">Cancel</span></td>
                                            <td>2020-04-10 01:08:28</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input data-index="1" name="btSelectItem" type="checkbox">
                                            </td>
                                            <td>2</td>
                                            <td>Deposit</td>
                                            <td>BTC</td>
                                            <td>146.01</td>
                                            <td>0.02</td>
                                            <td><span class="green-color">Pending</span></td>
                                            <td>2020-04-10 01:08:06</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input data-index="2" name="btSelectItem" type="checkbox">
                                            </td>
                                            <td>3</td>
                                            <td>Deposit</td>
                                            <td>BTC</td>
                                            <td>365.02</td>
                                            <td>0.05</td>
                                            <td><span class="orange-color">Complete</span></td>
                                            <td>2020-04-10 01:06:58</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input data-index="3" name="btSelectItem" type="checkbox">
                                            </td>
                                            <td>4</td>
                                            <td>Deposit</td>
                                            <td>BTC</td>
                                            <td>726.29</td>
                                            <td>0.1</td>
                                            <td><span class="red-color">Cancel</span></td>
                                            <td>2020-04-10 01:05:29</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input data-index="0" name="btSelectItem" type="checkbox">
                                            </td>
                                            <td>5</td>
                                            <td>Deposit</td>
                                            <td>BTC</td>
                                            <td>73.00</td>
                                            <td>0.01</td>
                                            <td><span class="red-color">Cancel</span></td>
                                            <td>2020-04-10 01:08:28</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input data-index="1" name="btSelectItem" type="checkbox">
                                            </td>
                                            <td>6</td>
                                            <td>Deposit</td>
                                            <td>BTC</td>
                                            <td>146.01</td>
                                            <td>0.02</td>
                                            <td><span class="green-color">Pending</span></td>
                                            <td>2020-04-10 01:08:06</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input data-index="2" name="btSelectItem" type="checkbox">
                                            </td>
                                            <td>7</td>
                                            <td>Deposit</td>
                                            <td>BTC</td>
                                            <td>365.02</td>
                                            <td>0.05</td>
                                            <td><span class="orange-color">Complete</span></td>
                                            <td>2020-04-10 01:06:58</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input data-index="3" name="btSelectItem" type="checkbox">
                                            </td>
                                            <td>8</td>
                                            <td>Deposit</td>
                                            <td>BTC</td>
                                            <td>726.29</td>
                                            <td>0.1</td>
                                            <td><span class="red-color">Cancel</span></td>
                                            <td>2020-04-10 01:05:29</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="clearfix"></div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>

                    <div class="clearfix"></div>
                </div>
            </div>

        </div>
    </div>
    <!-- //Payment Modal -->

    <!-- Profile Modal -->
    <div id="modalProfile" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <div class="modal-body">
                    <h3 class="modal-title">Profile</h3>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 col-xs-6 profile_grid">
                                <ul class="list-unstyled">
                                    <li>
                                        <div class="row">
                                            <div class="col-xs-2">
                                                <i class="iconcasino icon-profile1"></i>
                                            </div>
                                            <div class="col-xs-10">
                                                <h6>User Name</h6>
                                                <p>user1234@example.com</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row">
                                            <div class="col-xs-2">
                                                <i class="iconcasino icon-profile1"></i>
                                            </div>
                                            <div class="col-xs-10">
                                                <h6>User ID</h6>
                                                <p>user1234</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row">
                                            <div class="col-xs-2">
                                                <i class="iconcasino icon-profile1"></i>
                                            </div>
                                            <div class="col-xs-10">
                                                <h6>Title</h6>
                                                <p>Mr</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row">
                                            <div class="col-xs-2">
                                                <i class="iconcasino icon-profile1"></i>
                                            </div>
                                            <div class="col-xs-10">
                                                <h6>First Name</h6>
                                                <p>mikey</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row">
                                            <div class="col-xs-2">
                                                <i class="iconcasino icon-profile1"></i>
                                            </div>
                                            <div class="col-xs-10">
                                                <h6>Last Name</h6>
                                                <p>bakery</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row">
                                            <div class="col-xs-2">
                                                <i class="fa fa-envelope-o"></i>
                                            </div>
                                            <div class="col-xs-10">
                                                <h6>Email Address</h6>
                                                <p>user1234@example.com</p>
                                            </div>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                            <div class="col-md-6 col-xs-6 profile_grid border-left">
                                <ul class="list-unstyled">
                                    <li>
                                        <div class="row">
                                            <div class="col-xs-2">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <div class="col-xs-10">
                                                <h6>Birth Date</h6>
                                                <p>1975-10-02</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row">
                                            <div class="col-xs-2">
                                                <i class="iconcasino icon-location2"></i>
                                            </div>
                                            <div class="col-xs-10">
                                                <h6>Country</h6>
                                                <p>china</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row">
                                            <div class="col-xs-2">
                                                <i class="iconcasino icon-location2"></i>
                                            </div>
                                            <div class="col-xs-10">
                                                <h6>City</h6>
                                                <p>chengdu</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row">
                                            <div class="col-xs-2">
                                                <i class="iconcasino icon-mobile"></i>
                                            </div>
                                            <div class="col-xs-10">
                                                <h6>Mobile</h6>
                                                <p>123456789</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row">
                                            <div class="col-xs-2">
                                                <i class="iconcasino icon-bitcoin2"></i>
                                            </div>
                                            <div class="col-xs-10">
                                                <h6>Currency</h6>
                                                <p>BTC</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row">
                                            <div class="col-xs-2">
                                                &nbsp;
                                            </div>
                                            <div class="col-xs-10">
                                                <h6>&nbsp;</h6>
                                                <p>&nbsp;</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- //Profile Modal -->
    <!-- Change Password Modal -->
    <div id="modalChangePassword" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <div class="modal-body">
                    <h3 class="modal-title">Change Password</h3>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <table>
                                    <tbody>
                                        <tr>
                                            <td class="password-title">
                                                <span>Current Password</span>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <input type="password" class="form-control" id="current-password" placeholder="Current Password" />
                                                    <span toggle="#current-password" class="fa fa-eye-slash field-icon toggle-password"></span>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="password-title">
                                                <span>New Password</span>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <input type="password" class="form-control" id="new-password" placeholder="New Password" />
                                                    <span toggle="#new-password" class="fa fa-eye-slash field-icon toggle-password"></span>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="password-title">
                                                <span>Confirm Password</span>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <input type="password" class="form-control" id="change-confirm-password" placeholder="Conrirm Password" />
                                                    <span toggle="#change-confirm-password" class="fa fa-eye-slash field-icon toggle-password"></span>
                                                </div>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                                <div>
                                    <div class="bottom-btn"><button type="button" class="btn btn-md change-btn" onclick="passwordChange()">Password Change</button></div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- //Change Password Modal -->

    <!-- Message Modal -->
    <div id="modalMessage" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <div class="modal-body">
                    <h3 class="modal-title">Message Center</h3>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="message-table" style="overflow-x:auto;">
                                <div id="toolbar-message">
                                    <button id="btn-message" type="button" onclick="messageDelete()" class="btn toolbar-delete-btn"><i class="fa fa-trash"></i> Delete</button>
                                </div>
                                <table id="message-table" data-toggle="table" data-toolbar="#toolbar-message" data-classes="table table-no-bordered" data-detail-view="true" data-detail-formatter="messageDetailFormatter" data-pagination="true" data-page-size="5" data-page-list="[5, 10, 25, 50, 100, ALL]" class="table table-no-bordered">
                                    <thead>
                                        <tr>
                                            <th data-align="center" data-field="check_box" data-width="40"><input name="btSelectAll" type="checkbox"></th>
                                            <th data-halign="center" data-align="center"></th>
                                            <th data-halign="center" data-align="center" data-field="subject">Subject</th>
                                            <th data-halign="center" data-align="center" data-field="createdAt">Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <input data-index="0" name="btSelectItem" type="checkbox">
                                            </td>
                                            <td><img src="{{ URL::asset('images/icons/open_envelope.png') }}"></td>
                                            <td class="message_title">
                                                <a href="#" role="button" data-toggle="modal" data-target="#modalMessageView" rel="nofollow">
                                                    I HAVE FORGOTTEN MY LOGIN. WHAT SHOULD I DO?
                                                </a>
                                            </td>
                                            <td>2020/05/05 10:15:25</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input data-index="1" name="btSelectItem" type="checkbox">
                                            </td>
                                            <td><img src="{{ URL::asset('images/icons/closed_envelope.png') }}"></td>
                                            <td class="message_title">
                                                <a href="#" role="button" data-toggle="modal" data-target="#modalMessageView" rel="nofollow">
                                                    HOW SECURE IS WINSLOTS?
                                                </a>
                                            </td>
                                            <td>2020/05/05 10:15:25</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="clearfix"></div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>

                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- //Message Modal -->
    <!-- Message View Modal -->
    <div id="modalMessageView" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <div class="modal-body">
                    <h3 class="modal-title">Message Center</h3>
                    <div class="message-content">
                        <h4 class="content-title">I HAVE FORGOTTEN MY LOGIN. WHAT SHOULD I DO?</h4>
                        <p class="content-meta">
                            <i class="fa fa-user"></i>&nbsp;&nbsp;by admin&nbsp;&nbsp;|&nbsp;&nbsp;<i class="fa fa-calendar"></i>&nbsp;&nbsp;09 Jan 2019
                        </p>
                        <span class="content-text">If you have forgotten your login,
                            please write an email to the support team at support@winslots.com or reach us via Live Chat.
                            Please specify the name, surname, e-mail and phone number that you provided during registration.
                            This information is needed to prove that it is your login.
                            It is quite possible that the support team will need to request more information about your account.
                        </span>
                    </div>

                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- //Message View Modal -->
    <!-- //Modal End -->

    <!-- js-scripts -->

    <!-- jquery -->
    <script src="{{ URL::asset('js/jquery-1.9.0.min.js') }}"></script>
    <script src="{{ URL::asset('js/jquery-2.1.4.min.js') }}"></script>

    <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('js/bootstrap-table.min.js') }}"></script>
    <!-- Necessary-JavaScript-File-For-Bootstrap -->

    <!-- Revolution Slider -->
    <script type="text/javascript" src="{{ URL::asset('js/jquery.themepunch.tools.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/jquery.themepunch.revolution.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/revolution.extension.carousel.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/revolution.extension.layeranimation.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/revolution.extension.navigation.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/revolution.extension.slideanims.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/jquery.revolution.min.js') }}"></script>
    <!-- //Revolution Slider -->

    <!-- navigation -->
    <script>
        (function($) {
            // Menu Functions
            $(document).ready(function() {
                $('#menuToggle').click(function(e) {
                    var $parent = $(this).parent('.menu');
                    $parent.toggleClass("open");
                    var navState = $parent.hasClass('open') ? "hide" : "show";
                    $(this).attr("title", navState + " navigation");
                    // Set the timeout to the animation length in the CSS.
                    setTimeout(function() {
                        console.log("timeout set");
                        $('#menuToggle > span').toggleClass("navClosed").toggleClass("navOpen");
                    }, 200);
                    e.preventDefault();

                });
                $(document).on('click', function(event) {
                    (!$(event.target).is('#menuToggle') && !$(event.target).is('#menuToggle span')) && $('.menu').removeClass('open');
                });

            });
        })(jQuery);
    </script>
    <!-- //navigation -->

    <!-- side menu scrollbar - jQuery custom content scroller -->
    <script src="{{ URL::asset('js/jquery-ui.js') }}"></script>
    <script src="{{ URL::asset('js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function() {

            $("#container").mCustomScrollbar({
                theme: "dark",
                scrollbarPosition: "outside",
                autoExpandScrollbar: "ture",
            });

            $(".mCSB_outside+.mCSB_scrollTools").css({
                right: 0
            });
            setTimeout(function() {
                $("#container").mCustomScrollbar("scrollTo", "top");
            }, 3000);

        });
    </script>

    <!-- game modal background image -->
    <script>
        function gameBg(bgImg) {
            $("#gameModal").css({
                "background-image": "url(" + bgImg + ")"
            });
        };
    </script>
    <!-- //game modal background image -->


    <script>
        /**/
        function paymentDetailFormatter(index, row, element) {
            $(element).html("<ul><li><span class='tr-title'>Content</span><span class='tr-data'>" + row.direction + "</span></li>" +
                "<li><span class='tr-title'>Payment</span><span class='tr-data'>" + row.currency + "</span></li>" +
                "<li><span class='tr-title'>USD</span><span class='tr-data'>" + row.usd + "</span></li>" +
                "<li><span class='tr-title'>Amount</span><span class='tr-data'>" + row.currency_amount + "</span></li>" +
                "<li><span class='tr-title'>Confirm</span><span class='tr-data'>" + row.my_state + "</span></li>" +
                "<li><span class='tr-title'>Application Date</span><span class='tr-data'>" + row.createdAt + "</span></li></ul>");
        }

        function couponDetailFormatter(index, row, element) {
            $(element).html("<ul><li><span class='tr-title'>Date Of Issue</span><span class='tr-data'>" + row.createdAt + "</span></li>" +
                "<li><span class='tr-title'>Expiration Date</span><span class='tr-data'>" + row.expiration_date + "</span></li>" +
                "<li><span class='tr-title'>Amount</span><span class='tr-data'>" + row.amount + "</span></li>" +
                "<li><span class='tr-title'>Used</span><span class='tr-data'>" + row.status + "</span></li>" +
                "<li><span class='tr-title'>Use</span><span class='tr-data'>" + row.use + "</span></li>" +
                "<li><span class='tr-title'>Delete</span><span class='tr-data'>" + row.delete + "</span></li></ul>");
        }

        function bonusDetailFormatter(index, row, element) {
            $(element).html("<ul><li><span class='tr-title'>Used</span><span class='tr-data'>" + row.status + "</span></li>" +
                "<li><span class='tr-title'>Amount</span><span class='tr-data'>" + row.amount + "</span></li>" +
                "<li><span class='tr-title'>Date Of Issue</span><span class='tr-data'>" + row.createdAt + "</span></li>" +
                "<li><span class='tr-title'>Use</span><span class='tr-data'>" + row.use_date + "</span></li>");
        }

        function messageDetailFormatter(index, row, element) {
            $(element).html("<ul><li><span class='tr-title'>Subject</span><span class='tr-data'>" + row.subject + "</span></li>" +
                "<li><span class='tr-title'>Date</span><span class='tr-data'>" + row.createdAt + "</span></li>");
        }
    </script>

    <!-- copy clipboard -->
    <script src="{{URL::asset('js/clipboard.min.js')}}"></script>
    <script>
        $(".modal").on("shown.bs.modal", function() {
            console.log('a', Clipboard, $('#copy'), $("#qr_code").val());
            var clipboard = new Clipboard('#copy')
        });
    </script>

    <!-- signup modal date of birth -->
    <script src="{{ URL::asset('js/moment.min.js') }}"></script>
    <script src="{{ URL::asset('js/daterangepicker.js') }}"></script>
    <script src="{{ URL::asset('js/main.js') }}"></script>
    <!-- //signup modal date of birth -->

    <!-- signup modal Phone, Gender, Currency, Country -->

    <script src="{{ URL::asset('js/intlTelInput/intlTelInput.js') }}"></script>
    <script>
        var input = document.querySelector("#phone");
        window.intlTelInput(input, {
            // allowDropdown: false,
            // autoHideDialCode: false,
            // autoPlaceholder: "off",
            // dropdownContainer: document.body,
            // excludeCountries: ["us"],
            // formatOnDisplay: false,
            // geoIpLookup: function(callback) {
            //   $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
            //     var countryCode = (resp && resp.country) ? resp.country : "";
            //     callback(countryCode);
            //   });
            // },
            geoIpLookup: function(callback) {
                callback(config.country);
            },
            hiddenInput: "full_number",
            //initialCountry: "auto",
            // localizedCountries: { 'de': 'Deutschland' },
            nationalMode: false,
            // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
            // placeholderNumberType: "MOBILE",
            preferredCountries: ['gb', 'jp'],
            // separateDialCode: true,
            utilsScript: "{{ URL::asset('js/intlTelInput/utils.js') }}",
        });
    </script>
    <!-- signup modal currency -->
    <script src="{{ URL::asset('js/select2.min.js') }}"></script>
    <script src="{{ URL::asset('js/bootstrap-select.min.js') }}"></script>
    <script src="{{ URL::asset('js/currencypicker.js') }}"></script>
    <script src="{{ URL::asset('js/intlTelInput/intlTelInput.js') }}"></script>
    <!-- //signup modal currency -->
    <!-- //signup modal Phone, Currency  -->
    @yield('custom-js')
</body>

</html>
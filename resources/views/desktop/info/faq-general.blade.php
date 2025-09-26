<x-desktop.app>
    <div class="content my01">

        <script>
            setTimeout(function() {
                document.getElementById("Acollapse1").setAttribute("aria-expanded", true);
            }, 3000);
        </script>
        <div class="container-wrapper info ">
            <div class="container container-box info-view">
                <div class="info-nav nav-icon">
                    <div class="row no-gutters flex-div">
                        <div>
                            <a href="{{ url('info/terms-terms_conditions') }}" class="">
                                <div>
                                    <i class="icon-clipboard"></i>
                                </div>
                                <div>TERMS & CONDITIONS</div>
                            </a>
                        </div>
                        <div>
                            <a href="{{ url('info/faq-general') }}" class="active">
                                <div><i class="icon-help-circle"></i></div>
                                <div>FAQ</div>
                            </a>
                        </div>
                        <div>
                            <a href="{{ url('info/how-sportsbook') }}" class="">
                                <div><i class="icon-list-numbered"></i></div>
                                <div>HOW TO PLAY</div>
                            </a>
                        </div>
                        <div>
                            <a href="{{ url('info/referral') }}" class="">
                                <div><i class="icon-clipboard1"></i></div>
                                <div>REFERRAL</div>
                            </a>
                        </div>
                        <div>
                            <a href="{{ url('info/responsiblegaming') }}" class="">
                                <div><i class="icon-clipboard1"></i></div>
                                <div>RESPONSIBLE GAMING</div>
                            </a>
                        </div>
                    </div>
                </div>

                <nav class="navbar navbar-expand-lg navbar-light navbar-default">
                    <div class="navbar-header d-lg-none clearfix">
                        <button class="navbar-toggler" id="navbar-toggler--info" type="button"
                            aria-controls="navbarTogglerDemo02" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <i class="icon-bars navbar-toggler-icon"></i>
                        </button>
                        <div class="menu-select d-lg-none" id="menu-select--info"></div>
                    </div>

                    <div class="collapse navbar-collapse">
                        <ul class="navbar-nav mt-lg-0" style="list-style-type:none;">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('info/faq-general') }}" data-pg="general">General</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('info/faq-deposit') }}" data-pg="deposit">Deposits</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('info/faq-faq_withdrawal') }}" data-pg="faq_withdrawal">Withdrawal</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('info/faq-games') }}" data-pg="games">Gaming</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('info/faq-technical') }}" data-pg="technical">Technical</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('info/faq-banking') }}" data-pg="banking">Banking</a>
                            </li>
                        </ul>
                    </div>
                </nav>

                <div class="panel-group" id="info_accordion">
                    <!-- 1 -->
                    <div class="panel info panel-default">
                        <div class="info panel-heading" id="Acollapse1" data-toggle="collapse"
                            data-parent="#info_accordion" data-target="#collapse1">
                            <h5 class="panel-title info">
                                1. About {{ $siteConfig->site_name }}
                            </h5>
                        </div>
                        <div id="collapse1" class="panel-collapse collapse in">
                            <div class="info panel-body">
                                <p>
                                    {{ $siteConfig->site_name }} is an online entertainment brand serving the Asia Pacific market, mainly Indonesia, Malaysia, and China. Our products include a wide variety of online games such as football betting, online casinos, slots, keno and lottery, binary, poker, and more.
                                    <br><br>
                                    {{ $siteConfig->site_name }} is one of the leading casinos in Asia.
                                    <br><br>
                                    The vision of {{ $siteConfig->site_name }} is to provide high-quality entertainment and great value games to our customers. We are committed to delivering industry-leading gaming products always supported by exciting promotions. A team of professional staff is provided to ensure that by playing at {{ $siteConfig->site_name }}, you will always get the best experience here.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- 2 -->
                    <div class="panel info panel-default">
                        <div class="info panel-heading" id="Acollapse2" data-toggle="collapse"
                            data-parent="#info_accordion" data-target="#collapse2">
                            <h5 class="panel-title info">2. Why {{ $siteConfig->site_name }}?</h5>
                        </div>
                        <div id="collapse2" class="panel-collapse collapse">
                            <div class="info panel-body">
                                <p>
                                    Along with continuous promotions, {{ $siteConfig->site_name }} offers the best opportunities in at least 1,000 types of leading online sportsbook games in the market such as football leagues from England, Spain, Europe, Germany, as well as other sports like NBA, NFL, NCAA, Tennis, F1, and more.
                                    In addition to sports betting, {{ $siteConfig->site_name }} also provides a variety of live games, supported by live casino dealers. Through our Live Casino Lobby, you will be brought to Live Baccarat, Live Sic Bo, Live Dragon Tiger, Live Roulette, Live Casino, Slots, and other exciting games.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- 3 -->
                    <div class="panel info panel-default">
                        <div class="info panel-heading" id="Acollapse3" data-toggle="collapse"
                            data-parent="#info_accordion" data-target="#collapse3">
                            <h5 class="panel-title info">3. Affiliate?</h5>
                        </div>
                        <div id="collapse3" class="panel-collapse collapse">
                            <div class="info panel-body">
                                <p>
                                    Become our partner and earn high-value monthly commissions by inviting your friends to play at {{ $siteConfig->site_name }}. Click <a href="#">here</a> to learn how to become our affiliate.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- 4 -->
                    <div class="panel info panel-default">
                        <div class="info panel-heading" id="Acollapse4" data-toggle="collapse"
                            data-parent="#info_accordion" data-target="#collapse4">
                            <h5 class="panel-title info">4. How to Join?</h5>
                        </div>
                        <div id="collapse4" class="panel-collapse collapse">
                            <div class="info panel-body">
                                <p>Join as a MEMBER or AGENT</p>
                                <ol type='a'>
                                    <li>
                                        <strong>MEMBER:</strong><br>
                                        <ol>
                                            <li>Log in to {{ $siteConfig->site_name }} website and select "JOIN".</li>
                                            <li>Fill in the registration form with valid data, then select "SUBMIT".</li>
                                            <li>A confirmation email will be sent to your registered email to confirm your username and password.</li>
                                            <li>Return to {{ $siteConfig->site_name }} and select "LOGIN".</li>
                                            <li>You can proceed to the next step starting with Deposit.</li>
                                        </ol>
                                    </li>
                                    <br><br>
                                    <li>
                                        <strong>AGENT:</strong><br>
                                        <ol>
                                            <li>Log in to {{ $siteConfig->site_name }} website and select "AFFILIATE".</li>
                                            <li>Fill in the registration form with valid data, then select "SUBMIT".</li>
                                            <li>A confirmation email will be sent to your registered email to confirm and activate your username and password.</li>
                                            <li>The submitted form will go through a selection process by {{ $siteConfig->site_name }}.</li>
                                            <li>Successful applicants will be contacted by {{ $siteConfig->site_name }} via email regarding the Affiliate Terms & Conditions.</li>
                                        </ol>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>

                    <!-- 5 -->
                    <div class="panel info panel-default">
                        <div class="info panel-heading" id="Acollapse5" data-toggle="collapse"
                            data-parent="#info_accordion" data-target="#collapse5">
                            <h5 class="panel-title info">5. What currency is used on {{ $siteConfig->site_name }}?</h5>
                        </div>
                        <div id="collapse5" class="panel-collapse collapse">
                            <div class="info panel-body">
                                <p>{{ $siteConfig->site_name }} currently only accepts Rupiah (IDR).</p>
                            </div>
                        </div>
                    </div>

                    <!-- 6 -->
                    <div class="panel info panel-default">
                        <div class="info panel-heading" id="Acollapse6" data-toggle="collapse"
                            data-parent="#info_accordion" data-target="#collapse6">
                            <h5 class="panel-title info">6. Age requirements?</h5>
                        </div>
                        <div id="collapse6" class="panel-collapse collapse">
                            <div class="info panel-body">
                                <p>To join, you must agree to the Terms & Conditions and be at least 18 years old. Most countries have their own regulations on online gaming, so you must ensure that you are aware of and comply with their rules.</p>
                            </div>
                        </div>
                    </div>

                    <!-- 7 -->
                    <div class="panel info panel-default">
                        <div class="info panel-heading" id="Acollapse7" data-toggle="collapse"
                            data-parent="#info_accordion" data-target="#collapse7">
                            <h5 class="panel-title info">7. How to deposit into my {{ $siteConfig->site_name }} account?</h5>
                        </div>
                        <div id="collapse7" class="panel-collapse collapse">
                            <div class="info panel-body">
                                <p>Funds can be deposited into your {{ $siteConfig->site_name }} account through several methods. For more details, see INFO <a href='{{ url('info/faq-banking') }}'>here</a>.</p>
                            </div>
                        </div>
                    </div>

                    <!-- 8 -->
                    <div class="panel info panel-default">
                        <div class="info panel-heading" id="Acollapse8" data-toggle="collapse"
                            data-parent="#info_accordion" data-target="#collapse8">
                            <h5 class="panel-title info">8. How can I be sure the games are fair?</h5>
                        </div>
                        <div id="collapse8" class="panel-collapse collapse">
                            <div class="info panel-body">
                                <p>We have professionals calculating payout percentages for all our games to ensure you can be confident that our games meet industry-standard fairness regulations.</p>
                            </div>
                        </div>
                    </div>

                    <!-- 9 -->
                    <div class="panel info panel-default">
                        <div class="info panel-heading" id="Acollapse9" data-toggle="collapse"
                            data-parent="#info_accordion" data-target="#collapse9">
                            <h5 class="panel-title info">9. Is my personal information safe?</h5>
                        </div>
                        <div id="collapse9" class="panel-collapse collapse">
                            <div class="info panel-body">
                                <p>We ensure your details are safe at all times. We use industry-leading Secure Socket encryption (128-bit SSL) and store data in a secure operating environment, so online payments have never been safer. {{ $siteConfig->site_name }} will not disclose your personal information to any third party.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <script>
            $(function() {
                var pg = "general";
                var selectedMenu = $('.navbar-nav .nav-link').filter(function() {
                    return $(this).data("pg").toLowerCase() == pg.toLowerCase();
                }).text();
                $('#menu-select--info').text(selectedMenu);

                $('#navbar-toggler--info').click(function() {
                    $('.info .navbar-collapse').toggleClass('show in');
                })
            });
        </script>

    </div>
</x-desktop.app>

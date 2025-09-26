<x-desktop.app>
    <div class="content my01">

        <div class="container-wrapper info ">
            <div class="container container-box info-view">
                <div class="info-nav nav-icon">
                    <div class="row no-gutters flex-div">
                        <div>
                            <a href="{{ url('info/terms-terms_conditions') }}" class="">
                                <div>
                                    <i class="icon-clipboard"></i>
                                </div>
                                <div>TERMS & CONDITIONS </div>
                            </a>
                        </div>
                        <div>
                            <a href="{{ url('info/faq-general') }}" class="">

                                <div> <i class="icon-help-circle"></i></div>

                                <div>FAQ</div>
                            </a>
                        </div>
                        <div>
                            <a href="{{ url('info/how-sportsbook') }}" class="active">
                                <div><i class="icon-list-numbered"></i> </div>
                                <div>HOW TO PLAY </div>
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

                                <div>Responsible Gaming</div>
                            </a>
                        </div>

                    </div>
                </div>
                <nav class="navbar navbar-expand-lg navbar-light navbar-default ">
                    <!--<span class="menu-select" id="menu-select">General</span>-->
                    <div class="navbar-header d-lg-none clearfix">
                        <button class="navbar-toggler" id="navbar-toggler--info" type="button"
                            aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                            <!-- <span class="navbar-toggler-icon"></span> -->
                            <i class="icon-bars navbar-toggler-icon"></i>
                        </button>
                        <div class="menu-select d-lg-none" id="menu-select--info"></div>
                    </div>

                    <div class="collapse navbar-collapse">
                        <ul class="navbar-nav mt-lg-0" style="list-style-type:none;">
                            <li class="nav-item">
                                <a class="nav-link" data-pg="sportsbook" href="{{ url('info/how-sportsbook') }}"
                                    (click)="strSelectedMenu='sportsbook';">Sportsbook and Live Betting <span
                                        class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-pg="live_casino" href="{{ url('info/how-live_casino') }}"
                                    (click)="strSelectedMenu='live_casino';">Live Casino</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-pg="slots" href="{{ url('info/how-slots') }}"
                                    (click)="strSelectedMenu='slots';">Slots</a>
                            </li>


                            <li class="nav-item">
                                <a class="nav-link" data-pg="poker" href="{{ url('info/how-poker') }}"
                                    (click)="strSelectedMenu='poker';">Poker</a>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="border-box">
                    <h5 style="font-size: 1.09375rem;">How to Play Sportsbook and Live Betting</h5>
                    <p>
                        Below is an introduction to the menus on the Sports page with an example of Soccer betting.
                        Please refer to the image below.
                    </p>
                    <div>
                        <img src="https://files.sitestatic.net/images/Tutorial/Poker/howplay_sports.jpg"
                            class="img-responsive" alt="how to play Sportsbook" />
                    </div>
                    <br />
                    <div>
                        <div class="fs-lg t">Description</div>
                        <ul id="term-list">
                            <dl>
                                <dt>
                                    <div class="fs-md title"><b>Game Types (Sports Menu)</b></div>
                                </dt>
                                <dd>
                                    <ul style="list-style-type: disc;">
                                        <li>
                                            <p align="justify">
                                                You can choose from various types of sports games such as Number Games,
                                                Virtual Sports, Basketball, and many more. As shown in image 1,
                                                there are <i>Early, Today, and Live</i> options.
                                            </p>
                                        </li>
                                        <li>
                                            <p align="justify"><b>Early</b> means the match will take place soon, either
                                                tomorrow or the next day.</p>
                                        </li>
                                        <li>
                                            <p align="justify"><b>Today</b> means matches that will take place today.
                                            </p>
                                        </li>
                                        <li>
                                            <p align="justify"><b>Live</b> means matches that are currently taking place
                                                in real time.</p>
                                        </li>
                                    </ul>
                                </dd>
                            </dl>
                            <dl>
                                <dt>
                                    <div class="fs-md title"><b>Time</b></div>
                                </dt>
                                <dd>
                                    <ul style="list-style-type: disc;">
                                        <li>
                                            <p align="justify">This indicates when the match is being played.</p>
                                        </li>
                                    </ul>
                                </dd>
                            </dl>
                            <dl>
                                <dt>
                                    <div class="fs-md title"><b>Event</b></div>
                                </dt>
                                <dd>
                                    <ul style="list-style-type: disc;">
                                        <li>
                                            <p align="justify">The event shows the match title. In the image above, it
                                                shows a match in the China Football Super League.</p>
                                        </li>
                                    </ul>
                                </dd>
                            </dl>
                            <dl>
                                <dt>
                                    <div class="fs-md title"><b>Competing Teams</b></div>
                                </dt>
                                <dd>
                                    <ul style="list-style-type: disc;">
                                        <li>
                                            <p align="justify">
                                                This shows the match between Guizhou Renhe versus Guangzhou R&F,
                                                and another match between Shanghai SIPG (in red) versus Tianjin Teda (in
                                                blue).
                                            </p>
                                        </li>
                                        <li>
                                            <p align="justify">The red team means the team is giving a handicap (voor)
                                                to its opponent.</p>
                                        </li>
                                    </ul>
                                </dd>
                            </dl>
                            <dl>
                                <dt>
                                    <div class="fs-md title"><b>Bets & Market Types</b></div>
                                </dt>
                                <dd>
                                    <ul style="list-style-type: disc;">
                                        <li>
                                            <p align="justify">
                                                This shows several types of bets you can play. In the image above,
                                                you can see bet types such as FT. HDP, FT. O/U, FT. 1X2, 1H. HDP,
                                                1H. O/U, 1H. 1X2. Each bet type also has different markets and odds
                                                values,
                                                depending on the bet you choose. Odds values appear in red and blue.
                                                Red and negative odds are subject to tax. How to play different bet
                                                types
                                                will be explained further.
                                            </p>
                                        </li>
                                    </ul>
                                </dd>
                            </dl>
                            <div class="title"><b>How to Place a Bet on Sports Products</b></div>
                            <p align="justify">
                                Placing a bet on Sports products is very easy. You only need to click on the Odds you
                                want.
                            </p>
                        </ul>
                        <div class="fs-md">Example:</div>
                        <p>
                            Here we will place an FT. HDP bet in the match between Guizhou Renhe and Guangzhou
                            with a handicap market of 0, choosing Guizhou Renhe to win. So what we do is click
                            the Odds -1.26 (red) for Guizhou Renhe with a handicap of 0. Then on the left, a
                            betting box will appear where you can enter the stake amount you wish to place,
                            then click Process Bet. <br /><br />
                            If you want to place other types of bets, you can follow the same steps
                            as explained above.
                        </p>
                    </div>
                </div>

            </div>
        </div>



        <script>
            $(function() {
                var pg = "sportsbook";
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

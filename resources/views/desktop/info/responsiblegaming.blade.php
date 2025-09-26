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
                            <a href="{{ url('info/how-sportsbook') }}" class="">
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
                            <a href="{{ url('info/responsiblegaming') }}" class="active">
                                <div><i class="icon-clipboard1"></i></div>

                                <div>Responsible Gaming</div>
                            </a>
                        </div>

                    </div>
                </div>
                <div class="border-box">
                    <h3> Responsible Gambling </h3>
                    <p>
                        As a Premium Malaysian Casino, we handle Online Games responsibly for every player.
                        We are licensed by well-known authorities. This also means that we must be very strict
                        in monitoring players and the time they spend online.
                    </p>
                    <p>
                        At {{ $siteConfig->site_name }} Referral, we understand the appeal of online gaming and
                        betting across top categories. Moreover, the luxury and thrill of winning can even
                        encourage players to continue betting regularly or for long periods of time.
                    </p>
                    <p>
                        On the other hand, we also recognize players who lose all their bets without control.
                        Therefore, we have ensured to introduce various methods that enable Online Games to be
                        played responsibly.
                    </p>

                    <h4> Measures Taken by {{ $siteConfig->site_name }} Referral </h4>
                    <ol>
                        <li>
                            <p><b>Automatic Betting Limit:</b> We believe that to help you curb your
                                Online Gaming activity, the best and most practical way is by limiting deposits.
                                This is effective and is set at a maximum of 1000 Ringgit. Once you reach this daily
                                limit, you will not be able to bet or spend money further. Since our site only allows
                                one USER ID per person, we will also not allow you to try from any other account. </p>
                        </li>
                        <li>
                            <p><b>Set Limits:</b> This is the second method we use. As a player, you set your
                                daily, weekly, and monthly spending limits. This is something you should do once
                                at the beginning of the month. Once you reach this level, you cannot bet more.
                                We recommend this method to every new gamer or beginner to practice.</p>
                        </li>
                        <li>
                            <p><b>Complaints of Online Gambling Problems:</b> On our site, we have players who
                                truly enjoy our platform and games. However, their love sometimes exceeds their
                                spending capacity. They may eventually become a problem for their entire family.
                                This is where our 24-hour hotline services will be useful.</p>
                        </li>
                    </ol>
                    <p>
                        Bankroll management is something everyone needs to work on before coming to play online.
                    </p>

                    <h4> Signs of Gambling Problems </h4>
                    <p>
                        As a proud member of Responsible Online Gaming, our company has a strong policy on how
                        to help people gamble carefully. These are the signs of gambling problems we provide help for:
                    </p>
                    <ul>
                        <li>Borrowing or selling jewelry and personal items to gamble</li>
                        <li>Stealing and/or selling things that do not belong to you</li>
                        <li>Difficulty resisting Online Games</li>
                        <li>Constantly thinking about Online Games</li>
                        <li>Spending more than you can win</li>
                        <li>Believing you can repay loans by gambling and winning</li>
                        <li>Assuming that long hours of online play can help you win big</li>
                        <li>Isolating yourself from family and social circles</li>
                        <li>Reducing interaction with others</li>
                        <li>Feeling guilty about irresponsible attitudes towards family or work</li>
                    </ul>
                    <p>
                        If you have or see someone with these behavioral changes, do not hesitate to contact us.
                        These are some of the issues, among others, highlighted by the Responsible Online Gaming
                        Council.
                    </p>

                    <h4> Call for Self-Exclusion </h4>
                    <p>
                        We appreciate it if you wish to self-exclude your account for some time.
                        Simply contact us at our customer support number, and we will gladly assist.
                    </p>

                    <h4> Seeking Professional Help </h4>
                    <br>
                    <p><b>BeGambleAware</b></p>
                    <p>
                        BeGambleAware is an international NGO that is constantly helping gamblers reduce or quit
                        any gambling addiction. There is a big difference between casual play and hard-core
                        gambling, and this is often unnoticed by gamblers themselves. The three aspects of
                        BeGambleAware’s mission are: firstly, to inform the public about the importance and
                        dangers of gambling addiction. Secondly, to enhance preventive measures against its causes.
                        Lastly, to save people who are currently facing gambling-related issues by offering
                        professional assistance, counseling, and guidance. <br><br>
                        info.Name: BeGambleAware <br>
                        info.Contact Number: +44 808 802 0133 <br>
                        info.Email: [email&nbsp;protected] <br>
                        info.Website: https://about.gambleaware.org/
                    </p>

                    <p><b>GamCare</b></p>
                    <p>
                        One of the leading providers of information, counseling, and support for people facing
                        gambling-related problems. GamCare has been offering compassionate services since 1997.
                        They help people by offering one-to-one counseling, advice, emotional support, and more.
                        People may contact GamCare via phone, email, forums, or even the 24/7 live chat on their
                        official website. <br><br>
                        info.Name: GamCare <br>
                        info.Contact Number: +44 207 801 7000 <br>
                        info.Email: [email&nbsp;protected] <br>
                        info.Website: https://www.gamcare.org.uk/
                    </p>
                </div>

            </div>
        </div>



        <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
        <script>
            $(function() {
                var pg = "";
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

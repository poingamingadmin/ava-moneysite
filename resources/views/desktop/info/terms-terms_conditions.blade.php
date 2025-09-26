<x-desktop.app>
    <div class="content my01">

        <div class="container-wrapper info ">
            <div class="container container-box info-view">
                <div class="info-nav nav-icon">
                    <div class="row no-gutters flex-div">
                        <div>
                            <a href="{{ url('info/terms-terms_conditions') }}" class="active">
                                <div>
                                    <i class="icon-clipboard"></i>
                                </div>
                                <div>TERMS & CONDITIONS</div>
                            </a>
                        </div>
                        <div>
                            <a href="{{ url('info/faq-general') }}" class="">
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
                            aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                            <i class="icon-bars navbar-toggler-icon"></i>
                        </button>
                        <div class="menu-select d-lg-none" id="menu-select--info">Terms & Conditions</div>
                    </div>

                    <div class="collapse navbar-collapse">
                        <ul class="navbar-nav mt-lg-0" style="list-style-type:none;">
                            <li class="nav-item">
                                <a class="nav-link" data-pg="terms_conditions"
                                    href="{{ url('info/terms-terms_conditions') }}"
                                    routerLink="{{ url('info/terms-terms_conditions') }}"
                                    (click)="strSelectedMenu='Terms & Conditions';">Terms & Conditions</a>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="panel-group" id="info_accordion">
                    <!-- First Panel -->
                    <div class="panel info panel-default">
                        <div class="info panel-heading" data-toggle="collapse" data-parent="#info_accordion"
                            data-target="#collapse1">
                            <h5 class="panel-title info">
                                1. General Terms &amp; Conditions </h5>
                        </div>
                        <div id="collapse1" class="panel-collapse collapse">
                            <div class="info panel-body">
                                <br>
                                <p>
                                    Apart from the Terms &amp; Conditions of this Agreement, please review our Privacy
                                    Policy and other rules, policies and terms and conditions relating to games and
                                    promotions available on the Site as posted on the Site from time to time, which are
                                    included here by reference, together- the same as any other policy that you may
                                    notify us of from time to time.
                                    <br><br>
                                    By clicking the "Submit upon account registration" button below and using the
                                    Software (as defined below) you agree to the terms and conditions set out in this
                                    Agreement along with the Privacy Policy and other rules relating to games and
                                    promotions available as their respective. can be updated or changed from time to
                                    time in accordance with the conditions below. You further acknowledge that your
                                    failure to comply with this agreement may result in disqualification, account
                                    closure, confiscation of your funds as deemed appropriate and more specifically
                                    described below.
                                    <br><br>
                                </p>
                                <ul>
                                    <li>Each person / individual is only allowed to register and have 1 account on our
                                        site.</li>
                                    <br>
                                    <li>We only accept individual / personal registration and do not justify using the
                                        company / legal entity name to be registered on our site.</li>
                                    <br>
                                    <li>Member / Player Must comply with the Terms &amp; Conditions as well as the Rules
                                        and Procedures for the game of the Games Provider, if the Member / player is
                                        indicated to have cheated to get an unauthorized profit by taking advantage of
                                        system weaknesses such as massive two-sided bets both on our own website and by
                                        using Among other Company's websites, we have the right to close the account /
                                        cancel the overall bet as well as the bonus that has been received.</li>
                                    <br>
                                    <li>Our site only accepts deposits via bank transfer, cash deposits, deposits via
                                        ATM, E-walet and credit, deposits using bank EDC machines or Checks and Giro Not
                                        correct.</li>
                                    <br>
                                    <li>Withdrawal of Deposit Money is only justified if the member has made a Minimum
                                        Bet 1 x Turn Over of the amount deposited.</li>
                                    <br>
                                    <li>Members are free to withdraw money for 24 hours and money withdrawals will only
                                        be sent to the member's bank account / account that has been registered.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="panel info panel-default">
                        <div class="info panel-heading" data-toggle="collapse" data-parent="#info_accordion"
                            data-target="#collapse2">
                            <h5 class="panel-title info">
                                2. Definations </h5>
                        </div>
                        <div id="collapse2" class="panel-collapse collapse">
                            <div class="info panel-body">
                                <p>
                                    "Games" means the internet gaming system accessible and/or offered on the Site.
                                    <br><br>

                                    "Device(s)" means any application access devices, including but not limited to
                                    personal computers, laptops, mobile telephones, personal digital assistants, PDA
                                    telephones employed for the use of and access to the Site and participation in the
                                    Services.
                                    <br><br>
                                    "The information" means information provided on the Site including but not limited
                                    to results, statistics, sports data, odds and betting data.
                                    <br><br>
                                    "Software" means any computer programme, data file or any other content that is
                                    required to be installed on your Device in order to enable you to use, access and
                                    participate in the Services for the purpose of using, accessing and participating in
                                    the foregoing on the Website through your Device.
                                    <br><br>
                                    "The Services" means the Software and Games together.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="panel info panel-default">
                        <div class="info panel-heading" data-toggle="collapse" data-parent="#info_accordion"
                            data-target="#collapse3">
                            <h5 class="panel-title info">
                                3. Grant of License/Intellectual Property </h5>
                        </div>
                        <div id="collapse3" class="panel-collapse collapse">
                            <div class="info panel-body">
                                <p>
                                    GBO303 is licensed and therefore regulated to operate online sportsbook and casino
                                    via electronic media on a global basis under permits from the Isle of Man and
                                    Kahnawake, Canada. Whilst it is intended that the online sportsbook and casino will
                                    operate under (GBO303`s licences), GBO303 reserves the right to switch any of the
                                    operations of the business to another jurisdiction at any time.
                                    <br><br>
                                    Subject to the terms &amp; conditions contained herein GBO303 grants you a personal,
                                    non-transferable and non-exclusive right to use the GBO303 Software, to access
                                    information on the GBO303 website through the Device(s) and to play the Games
                                    available.
                                    <br><br>
                                    You acknowledge and agree that the Software that is made accessible to you is part
                                    of the Services and is the property of GBO303 and/or our licensor, and that you do
                                    not gain any rights to such Software. The Software is licensed to you by GBO303 for
                                    your private personal use. Please note that the Software is not for use by (i)
                                    individuals under 18 years of age, (ii) individuals under the legal age of majority
                                    in their jurisdiction, and (iii) individuals connecting to the Site from
                                    jurisdictions from which it is illegal to do so. GBO303 is not able to verify the
                                    legality of the Service in each jurisdiction and it is your responsibility to verify
                                    such matters.
                                    <br><br>
                                    GBO303 assumes no liability for correctness, completeness or up-to-datedness of the
                                    Services provided, for example results made available on the Site. GBO303 also
                                    assumes no liability for the accuracy of livescores, statistics and intermediate
                                    results in in-running betting.
                                    <br><br>
                                    GBO303 reserves the right at any time to request from you evidence of age in order
                                    to ensure that minors are not using the Service. We further reserve the right to
                                    suspend or cancel your account and exclude you, temporarily or permanently, from
                                    using the Service if satisfactory proof of age is not provided or if we suspect that
                                    you are underage.
                                    <br><br>
                                    The Software`s code, structure and organisation are protected by copyright, trade
                                    secrets, intellectual property and other rights.
                                    <br><br>
                                    You may not:
                                </p>
                                <ul>
                                    <li>copy, distribute, publish, reverse engineer, decompile, disassemble, modify, or
                                        translate the Software or make any attempt to access the source code to create
                                        derivate works of the source code of the Software, or otherwise;</li>
                                    <br>
                                    <li>sell, assign, sublicense, transfer, distribute or lease the Software;</li>
                                    <br>
                                    <li>make the Software available to any third party through a computer network or
                                        otherwise;</li>
                                    <br>
                                    <li>export the Software to any country (whether by physical or electronic means)
                                        without the prior written consent of GBO303; or</li>
                                    <br>
                                    <li>use the Software in a manner prohibited by applicable laws or regulations,</li>
                                    <br>
                                </ul>
                                <p>
                                    each of the above is an "Unauthorised Use"
                                    <br><br>
                                    You will be solely liable for any damage, costs or expenses arising out of or in
                                    connection with the commission by you of any Unauthorised Use. You shall notify
                                    GBO303 immediately upon becoming aware of the commission by any person of any
                                    Unauthorised Use and shall provide GBO303 with reasonable assistance with any
                                    investigations it conducts in light of the information provided by you in this
                                    respect.
                                    <br><br>
                                    The terms "GBO303", and any other trademarks, service marks and/or trade names used
                                    by GBO303 on the Site from time to time ("Trademarks"), are the trademarks, service
                                    marks and/or trade names of GBO303 or one of its group companies and/or its
                                    licensors, and these entities reserve all rights to such Trademarks. In addition,
                                    other content on the Site, including, but not limited to, the Software, images,
                                    pictures, graphics, photographs, animations, videos, music, audio and text ("Site
                                    Content") belongs to GBO303 or one of its group companies and/or its licensors and
                                    is protected by copyright and/or other intellectual property or other rights.
                                    <br><br>
                                    You hereby acknowledge that by using the Service and the Site you obtain no rights
                                    in the Site Content, or any part there of. Under no circumstances may you use the
                                    Site Content without GBO303`s prior written consent or in accordance with any
                                    legislation applicable from time to time for the protections of the Intellectual
                                    Property of GBO303.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="panel info panel-default">
                        <div class="info panel-heading" data-toggle="collapse" data-parent="#info_accordion"
                            data-target="#collapse4">
                            <h5 class="panel-title info">
                                4. Modification and Amendment </h5>
                        </div>
                        <div id="collapse4" class="panel-collapse collapse">
                            <div class="info panel-body">
                                <p>
                                    You fully understand and agree to be bound by this Agreement as modified and/or
                                    amended by GBO303 from time to time. GBO303 reserves the right to amend this
                                    Agreement or any part thereof at any time. If we make such modification and/or
                                    amendment we will place a notice of such change on the Site. It is your
                                    responsibility to check these Terms &amp; Conditions and the Privacy Policy from
                                    time to time to ensure that you agree with them and your continued use of the Site
                                    will be deemed to be your acceptance of any amendments and/or modifications to the
                                    Agreement.
                                    <br><br>
                                    Any bets placed prior to the time of amendment and/or modification will be subject
                                    to the pre-existing Terms &amp; Conditions. Any bets placed after the time of
                                    amendment and/or modification will be subject to the changed Terms &amp; Conditions.
                                    If any modification is unacceptable to you, your only recourse is to terminate this
                                    Agreement.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="panel info panel-default">
                        <div class="info panel-heading" data-toggle="collapse" data-parent="#info_accordion"
                            data-target="#collapse5">
                            <h5 class="panel-title info">
                                5. General Conditions of use - Your Representations and Warranties </h5>
                        </div>
                        <div id="collapse5" class="panel-collapse collapse">
                            <div class="info panel-body">
                                <p>
                                    As a condition of use of the Services, you warrant and undertake that you shall not
                                    use or access the Site, Services, Software and the Information for any unlawful
                                    purpose under any law that is applicable to you or that is prohibited by or in
                                    breach of the Agreement. In particular (and in addition to all other representations
                                    and warranties set out in the Agreement) you warrant and undertake as a condition of
                                    use of the Services that:
                                </p>
                                <ul>
                                    <li>You are not restricted by limited legal capacity;</li>
                                    <br>
                                    <li>You are acting in your own legal capacity and not on behalf of another person or
                                        company;</li>
                                    <br>
                                    <li>You agree that your use of the Service is at your sole discretion and risk;</li>
                                    <br>
                                    <li>You are not diagnosed or classified as a compulsive gambler;</li>
                                    <br>
                                    <li>You are over 18 years of age or over the age of majority in your jurisdiction,
                                        whichever is the greater;</li>
                                    <br>
                                    <li>You agree that you are required to provide us with certain personal details
                                        about yourself (including details regarding your methods of payment) for the
                                        purpose of using the Service. Our control of the information provided by you
                                        shall be subject to our Privacy Policy;</li>
                                    <br>
                                    <li>You are solely responsible for any applicable taxes which may be payable on
                                        winnings paid to you;</li>
                                    <br>
                                    <li>You are using the Site solely for your own personal use. You are only allowed to
                                        wager for your personal entertainment;</li>
                                    <br>
                                    <li>You are not a resident of Hong Kong, the Netherlands, Philippines, Singapore,
                                        Switzerland, Taiwan, Turkey or United States of America;</li>
                                    <br>
                                    <li>You acknowledge the possible risk of losing money arising from the use of the
                                        Services and the Site and that GBO303 has no responsibility to you for any such
                                        loss;</li>
                                    <br>
                                    <li>Your deposits do not originate from illegal or criminal activities;</li>
                                    <br>
                                    <li>You will not conduct criminal or other unlawful activities through any account
                                        opened with us and you shall not allow other persons to use your betting account
                                        and the Services for any unlawful activities under any law applicable to you or
                                        us;</li>
                                    <br>
                                    <li>You agree to keep your account name and password secret and confidential and not
                                        to allow anyone else to use it. If you misplace, forget, or lose your account
                                        name or password, you should notify our customer services department
                                        immediately. New security details will then be allocated to you;</li>
                                    <br>
                                    <li>You will ensure the secrecy of your account and log-in details. Any betting made
                                        on GBO303 where the user name and password have been used will be regarded as
                                        valid;</li>
                                    <br>
                                    <li>You will not use the Services, the Site, the Software or the Information in any
                                        way that may interfere with their availability to other users;</li>
                                    <br>
                                    <li>You will not solicit or in any way seek to obtain any information relating to
                                        other users;</li>
                                    <br>
                                    <li>You will not upload or distribute any program, file or data that contain
                                        viruses, are corrupted or may affect the operational performance of the
                                        Device(s), Software, Services and/or Site;</li>
                                    <br>
                                    <li>You may not attempt to modify, decompile, reverse-engineer or disassemble the
                                        Software in any way;</li>
                                    <br>
                                    <li>You will not use any device, robot, spider, software, routine or other method
                                        (or anything in the nature of the foregoing) to interfere or attempt to
                                        interfere with the normal proper functioning of the Services, Device(s),
                                        Software, Site, Information or any transactions offered on the Site and/or
                                        through the Device(s);</li>
                                    <br>
                                    <li>You will not post or transmit to the Site and/or to the Device(s) or to any
                                        other users, any unlawful, harassing, abusive, threatening, libelous,
                                        defamatory, obscene, indecent, inflammatory, racially or ethnically
                                        objectionable, pornographic or profane material, or any material that could
                                        constitute or encourage conduct that would be considered a criminal offence,
                                        give rise to civil liability, or otherwise violate any law;</li>
                                    <br>
                                    <li>You will not initiate and/or engage in surveys, contests, chain letters or
                                        post/transmit "junk mail", "spam" or any unsolicited mass dissemination of email
                                        against GBO303;</li>
                                    <br>
                                    <li>You will not hold more than one account. Should more than one account be
                                        identified as belonging or relating to you, GBO303 reserves the right to treat
                                        any such accounts as a single joint account or to close such accounts and
                                        terminate this Agreement.</li>
                                    <br>
                                </ul>
                                <p>
                                    By agreeing to the above General Conditions of Use, should your activities pertain
                                    to criminal or suspicious conduct, GBO303 reserves the right to report you to the
                                    federal or local authorities without prior notice or explanation.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="panel info panel-default">
                        <div class="info panel-heading" data-toggle="collapse" data-parent="#info_accordion"
                            data-target="#collapse6">
                            <h5 class="panel-title info">
                                6. Account Registration </h5>
                        </div>
                        <div id="collapse6" class="panel-collapse collapse">
                            <div class="info panel-body">
                                <p>
                                    You are required to complete the application for the opening of an account and
                                    membership as set out on Site.
                                    <br><br>
                                    You agree that you are required to provide us with certain personal details about
                                    yourself (including details regarding your methods of payment) for the purpose of
                                    using the Services. Our control of the information provided by you shall be subject
                                    to our Privacy Policy.
                                    <br><br>
                                    You undertake that you will provide full and truthful information in respect of all
                                    details and information provided by you to GBO303. You are obligated to update such
                                    details in the event of any change thereto. To confirm your name and address GBO303
                                    reserves the right to confirm such data by post and to correspond by post.
                                    <br><br>
                                    Your account must match your true and legal name and identity and the name on your
                                    account registration must match the name on the credit card(s) or other payment
                                    accounts used to deposit or receive monies in your account.
                                    <br><br>
                                    We reserve the right to reject your registration without reference to you or without
                                    assigning any reason thereto and without liability to you. Where account
                                    registration details are found to be inaccurate, misleading or incomplete, GBO303
                                    reserves the right to close the account, returning monies deposited to the same
                                    funding account but voiding any wagers placed.
                                    <br><br>

                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="panel info panel-default">
                        <div class="info panel-heading" data-toggle="collapse" data-parent="#info_accordion"
                            data-target="#collapse7">
                            <h5 class="panel-title info">
                                7. Terms Under Which Bet Are Accepted </h5>
                        </div>
                        <div id="collapse7" class="panel-collapse collapse">
                            <div class="info panel-body">
                                <ul>
                                    <li>All bets made on GBO303 website are subject to the relevant Games rules
                                        applicable to each event or game, and to this Agreement.</li>
                                    <br>
                                    <li>GBO303 cannot be held responsible for any typing or human error in posting odds
                                        other than those intended. In the event that this occurs, GBO303 reserves the
                                        right to void any affected bets (wagers).</li>
                                    <br>
                                    <li>Notwithstanding any other provision in this Agreement, GBO303 reserves the right
                                        to refuse any bet without explanation.</li>
                                    <br>
                                    <li>Only bets made through the internet and/or Device(s) in compliance with these
                                        Terms &amp; Conditions shall be accepted. Any other form of bets (whether by
                                        post, email, fax or otherwise) shall not be accepted and where received will be
                                        void regardless of the outcome. Bets are only valid if the username and password
                                        has been correctly entered with sufficient available funds in your account and
                                        you have received confirmation from us that the bet has been received. The bet
                                        will be deemed to be validated when a confirmation message appears on the
                                        screen.</li>
                                    <br>
                                    <li>All bets will be considered validly placed if your username and password have
                                        been entered correctly, subject to availability of funds in your account.</li>
                                    <br>
                                    <li>You are responsible and liable for all activities and transactions that take
                                        place through the use of your name, account number, username, password (or any
                                        combination thereof) regardless of whether such transactions were authorized by
                                        you.</li>
                                    <br>
                                    <li>You are solely responsible for ensuring that the details of your bets are
                                        correct. Once your bets have been placed and their acceptance confirmed by us
                                        they may not be cancelled, revoked or changed and shall be deemed to be
                                        conclusive evidence of the bets that you have placed.</li>
                                    <br>
                                    <li>All bets are logged and recorded in GBO303`s transaction log database and are
                                        conclusive evidence of all transactions and times at which the transactions are
                                        placed.</li>
                                    <br>
                                    <li>All bets will be deemed valid and accepted by www.GBO303.com when confirmation
                                        is displayed in your transaction history statement.</li>
                                    <br>
                                    <li>Except for "in play" bet type, all bets placed after the commencement of an
                                        event will be deemed invalid. GBO303 reserves the right to void such wagers
                                        placed.</li>
                                    <br>
                                    <li>All bets will be deemed invalid where the outcome of an event is known at the
                                        time of placement of your bet. GBO303 reserves the right to void such wagers
                                        placed.</li>
                                    <br>
                                    <li>Advertised start times, red cards, scores and or any information displayed on
                                        the Website(s) are for information purposes only.</li>
                                    <br>
                                    <li>The result of a match or event will be determined on the day of its conclusion
                                        for betting purposes unless otherwise stated within the rules for each sport or
                                        event. Any subsequent enquiry that may result in an overturned decision will not
                                        be recognized by GBO303 after 72 hours from the processing of results. Within 72
                                        hours after results are processed, GBO303 will only reset / correct the results
                                        due to human error or mistakes on the referring website.</li>
                                    <br>
                                    <li>If the venue for a sporting event is changed, all bets placed based on the
                                        original venue will be null and void, except for games played on neutral ground.
                                    </li>
                                    <br>
                                    <li>The winner of an event or game will be determined on the date of the event`s
                                        conclusion according to the Games rules.</li>
                                    <br>
                                    <li>GBO303 does not recognize suspended games, protests or overturned decisions for
                                        betting purposes.</li>
                                    <br>
                                    <li>Should you include a non-runner or void selection in a multiple bet, the
                                        potential payout will be adjusted according to the remaining valid selections.
                                    </li>
                                    <br>
                                    <li>You acknowledge and accept that all prices and odds are subject to variation and
                                        only become fixed at the time a bet is placed.</li>
                                    <br>
                                    <li>Where a manifest error, mistake or system failure results in an incorrect odd,
                                        line or handicap taken in a bet, the bet, or that part of the bet if it is a
                                        multiple bet/parlay will be null and void.</li>
                                    <br>
                                    <li>Simultaneously placed bets on one event will not be accepted.</li>
                                    <br>
                                    <li>The decision of GBO303 is final in respect of any bet and the associated
                                        transactions therewith.</li>
                                    <br>
                                    <li>You fully accept and agree that random number generator ("RNG") software will
                                        determine the shuffling and dealing of cards and other randomly generated events
                                        required in the Games.</li>
                                    <br>
                                    <li>You fully accept and agree that WAP internet connection is not absolutely
                                        stable. The company is not responsible for any misplaced bets. All bets placed
                                        will be based on the bet records in our system. If you are unsure about any of
                                        the bets you have placed, please contact our customer service team or check your
                                        bet record in your account statement.</li>
                                    <br>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="panel info panel-default">
                        <div class="info panel-heading" data-toggle="collapse" data-parent="#info_accordion"
                            data-target="#collapse8">
                            <h5 class="panel-title info">
                                8. Settlement of Transactions </h5>
                        </div>
                        <div id="collapse8" class="panel-collapse collapse">
                            <div class="info panel-body">
                                <p>
                                    To use a credit or debit card, the cardholder`s name must be the same as the name
                                    given in the registration process. GBO303 reserves the right to withhold settlement
                                    of any transaction should there be discrepancies between the cardholder`s name and
                                    the name given in the registration process.
                                    <br><br>
                                    You are responsible for paying all monies owed to GBO303 and/or other members. In
                                    respect of any payment made by you, if we suspect that you have engaged or attempted
                                    to engage in fraudulent, unlawful, dishonest or improper activity whilst using the
                                    Site, including without limitation, engaging in game manipulation using stolen
                                    credit cards, or any other fraudulent activity (including any chargeback, other
                                    reversal of a payment, or money laundering) GBO303 shall be entitled to take such
                                    action as it sees fit, including immediately blocking access to the Site, suspending
                                    and/or closing your account, seizing all monies held in your GBO303 account and
                                    sharing this information (together with your identity) with other online gaming
                                    sites, financial institutions, relevant authorities and/or any person or entity that
                                    has the legal right to such information. GBO303 may also take legal action against
                                    you. Any expenses incurred by GBO303 shall be claimed from you.
                                    <br><br>
                                    In accordance with the laws of the Isle of Man all online gambling debts are
                                    enforceable by law.
                                    <br><br>
                                    The maximum amount that can be won by one customer in any one day of betting,
                                    regardless of the stake, is IDR 500,000,000.
                                    <br><br>
                                    Winnings are exclusive of bet amount. Where selections taken from different
                                    categories are combined in multiple or accumulative bets the lowest maximum winnings
                                    limit will apply.
                                    <br><br>
                                    Should funds be credited to your account in error, it is your responsibility to
                                    notify GBO303 of the error without delay. Any winnings subsequent to the error and
                                    prior to the notification of GBO303, whether linked to the error or not, shall be
                                    deemed invalid and must be returned to GBO303.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="panel info panel-default">
                        <div class="info panel-heading" data-toggle="collapse" data-parent="#info_accordion"
                            data-target="#collapse9">
                            <h5 class="panel-title info">
                                9. SettlementWithdrawal of Money From Your Account </h5>
                        </div>
                        <div id="collapse9" class="panel-collapse collapse">
                            <div class="info panel-body">
                                <p>
                                    Your winnings will be credited to your account and may only be withdrawn in
                                    accordance with our Terms &amp; Conditions and upon provision of a copy of valid
                                    photographic identification and/or credit/debit card to our satisfaction.<br><br>
                                    We will not release your funds under any circumstances if the full value of your
                                    deposit is not played through in full.
                                    <br>

                                    <br>
                                    Withdrawals of money from your account may only be made in the same currency in
                                    which deposits were made.
                                    <br><br>
                                    All bank charges that GBO303 incurs arising in connection with any of your betting
                                    transactions shall be reimbursed by you. GBO303 is entitled to deduct and offset the
                                    foregoing from the winnings payable to you or from your account as the case may be
                                    <br><br>
                                    Each deposit requires at least 1 (one) turnover / rollover of the deposit amount
                                    before any withdrawal can be made. Example of a deposit = IDR 100 thousand, then the
                                    terms of turnover / rollover = IDR 100 thousand x 1 = IDR 100 thousand<br>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="panel info panel-default">
                        <div class="info panel-heading" data-toggle="collapse" data-parent="#info_accordion"
                            data-target="#collapse10">
                            <h5 class="panel-title info">
                                10. Bonuses </h5>
                        </div>
                        <div id="collapse10" class="panel-collapse collapse">
                            <div class="info panel-body">
                                <p>
                                    Bonuses may only be used in the Games as may be specified when the Bonus is offered
                                    to you. Acceptance of any Bonus shall be in accordance this Agreement.
                                    <br><br>
                                    You are not entitled to withdraw any Bonus amounts and you may not take cash to fund
                                    your account without first complying with the applicable terms including, without
                                    limitation, in respect of any qualifiers or restrictions.
                                    <br>

                                    <br>
                                    GBO303 reserves the right, without any liability to you or any other party, to
                                    withdraw or modify such bonuses or promotions and/or the specific terms and
                                    conditions governing the same at any time.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="panel info panel-default">
                        <div class="info panel-heading" data-toggle="collapse" data-parent="#info_accordion"
                            data-target="#collapse11">
                            <h5 class="panel-title info">
                                11. Disclaimers and Limitation of Liability </h5>
                        </div>
                        <div id="collapse11" class="panel-collapse collapse">
                            <div class="info panel-body">
                                <p>

                                    Any participation in the Games is at your sole option, discretion and risk. By
                                    playing the Games, you acknowledge that you do not find the Games or Services to be
                                    offensive, objectionable, unfair, or indecent in any way.
                                    <br><br>
                                    Some legal jurisdictions have not addressed the legality of online and offshore
                                    online gambling while others have specifically made online and/or offshore gambling
                                    illegal. We do not intend that anyone should use the Site and/or the Services where
                                    such use is illegal. The availability of the Services and the Site should not be
                                    construed as an offer, solicitation or invitation by us to use the Site in any
                                    country in which such use is illegal. It is your sole responsibility to ensure that
                                    at all times you comply with the laws that govern you and that you have the complete
                                    legal right to use the Site and the Services.
                                    <br><br>
                                    Under no circumstances, including negligence, shall GBO303 be liable for any damages
                                    or losses, without limitation, that are deemed or alleged to have resulted from or
                                    caused by the Site or its content, including without limitation delays or
                                    interruptions in operation or transmission, communications, lines failure, any
                                    person`s use or misuse of the site or its content, or any errors or omissions in
                                    content.
                                    <br><br>
                                    GBO303 disclaims any and all warranties, representations and responsibilities in
                                    respect of any aspect of the Services, the Site and the Information, which may be
                                    provided by third parties, including but not limited to information and
                                    telecommunication providers, and shall not on any account be liable for any default,
                                    breach or inaction of such third party partners.
                                    <br><br>
                                    Under no circumstances, including negligence, shall GBO303, our related
                                    corporations, affiliates, partners, officers, employees and agents be responsible or
                                    liable for any damages, losses or expenses, including without limitation direct,
                                    indirect, consequential or special damage or economic loss arising from or in
                                    connection with your access or use of the Services, the Site, the Software and the
                                    Information, or your loading, installation or use of the Software regardless of
                                    whether GBO303 has been advised of such a possibility or not.
                                    <br><br>
                                    You acknowledge that part or all of the Information may be provisional in nature and
                                    may be subject to revision, change or modification, as provided in these Terms &amp;
                                    Conditions. You therefore acknowledge that the Information is provided solely for
                                    reference and does not constitute advice or solicitation, and is not the subject of,
                                    and shall not constitute the basis of any binding representation, warranty,
                                    contractual obligation, or reliance on your part of any nature.
                                    <br><br>
                                    You hereby acknowledge and agree that all disclaimers and exclusions of liability
                                    contained in this Agreement represent a fair and reasonable allocation of the risks
                                    and benefits of the Agreement, taking all relevant factors into consideration,
                                    including without limitation the value of the consideration provided by you to
                                    GBO303. You further agree that these disclaimers and limitations shall be
                                    enforceable to the extent permitted by applicable law.
                                    <br><br>
                                    If there is a discrepancy between the result showing on your Device and our server,
                                    the result showing on our server shall govern the result of the Game. Moreover, you
                                    understand and agree that (without prejudice to your other rights and remedies) the
                                    GBO303 records shall be the final authority in determining the terms of your
                                    participation in the Games, the activity resulting there from and the circumstances
                                    in which they occurred.
                                    <br><br>
                                    GBO303 disclaims any and all warranties, expressed or implied, in connection with
                                    the Services which are provided to you "as is" and we provide you with no warranty
                                    or representation whatsoever regarding its quality, fitness for purpose,
                                    completeness or accuracy.
                                    <br><br>
                                    Regardless of our efforts to provide you with service of the highest quality, safety
                                    and security, we make no warranty that the Services will be uninterrupted, timely or
                                    error-free, that defects will be corrected or that the Services found therein shall
                                    be free from viruses or bugs.
                                    <br><br>
                                    GBO303 reserves the right to suspend, discontinue, modify, remove or add to the
                                    Services, temporarily or permanently, in its absolute discretion with immediate
                                    effect and without an obligation to provide you with notice and we shall not be
                                    liable in any way whatsoever for any loss suffered as a consequence or any decision
                                    made by GBO303 in this regard.<br>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="panel info panel-default">
                        <div class="info panel-heading" data-toggle="collapse" data-parent="#info_accordion"
                            data-target="#collapse12">
                            <h5 class="panel-title info">
                                12. Termination, Account Closure or Forfeiture </h5>
                        </div>
                        <div id="collapse12" class="panel-collapse collapse">
                            <div class="info panel-body">
                                <p>
                                    GBO303 reserves the right, in its sole discretion, to void any winnings and forfeit
                                    any balance in your betting account, to terminate the Agreement and/or to suspend
                                    the provision of the Services/deactivate your account if:
                                </p>
                                <ul>
                                    <li>we identify that you have more than one account with us;</li>
                                    <br>
                                    <li>you are in breach of herein, the provision of the Services any term of this
                                        Agreement;</li>
                                    <br>
                                    <li>we are aware that you have played at any online gaming site or services and are
                                        suspected of fraud, collusion (including in relation to charge-backs) or
                                        unlawful or improper activity;</li>
                                    <br>
                                    <li>your registration information is incorrect or misleading;</li>
                                    <br>
                                    <li>you failed to provide the identification information requested;</li>
                                    <br>
                                    <li>you are not of legal age;</li>
                                    <br>
                                    <li>you have "charged back" or caused a "charge back" against us or denied any of
                                        the purchases or deposits that you made to your account;</li>
                                    <br>
                                    <li>you have allowed (intentionally or unintentionally) someone else to use your
                                        account;</li>
                                    <br>
                                    <li>you are depositing money originating from criminal or other illegal or
                                        unauthorized activities;</li>
                                    <br>
                                    <li>you fail to disclose that you are located in Hong Kong, the Netherlands,
                                        Philippines, Singapore, Switzerland, Taiwan, Turkey and United States of
                                        America;</li>
                                    <br>
                                </ul>
                                <p>
                                    If the provision of the Services is suspended and/or your account is deactivated in
                                    accordance to the terms herein, the provision of the Services will only be
                                    reinstated and/or your account reactivated after the necessary rectification (if
                                    capable of being rectified) action has been taken by you and such rectification has
                                    been verified to our full satisfaction.
                                    <br><br>
                                    GBO303 retains authority over the issuing, maintenance and closing of user`s
                                    accounts. The decision of GBO303`s management as regards to any aspect of your
                                    account, use of the Services or the Site, is final and shall not be open to review
                                    or appeal. We therefore reserve the right to close your account at any time for any
                                    reason. We will give you reasonable notice before doing so, unless circumstances
                                    dictate that we legally or practically cannot do so.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="panel info panel-default">
                        <div class="info panel-heading" data-toggle="collapse" data-parent="#info_accordion"
                            data-target="#collapse13">
                            <h5 class="panel-title info">
                                13. Breach of Agreement and Indemnity </h5>
                        </div>
                        <div id="collapse13" class="panel-collapse collapse">
                            <div class="info panel-body">
                                <p>
                                    Without prejudice to any other rights, if you breach in whole or in part any
                                    provision contained herein, GBO303 reserves the right to take such action as it sees
                                    fit, including terminating this Agreement, immediately blocking your access to the
                                    Services and the Site, terminating your account with GBO303, seizing all monies held
                                    in the relevant GBO303 account and/or taking legal action against you.
                                    <br><br>
                                    You agree to fully indemnify, defend and hold harmless GBO303 and its shareholders
                                    directors, employees, officers, licensees, licensors, affiliates and subsidiaries
                                    from and against all claims, demands, liabilities, damages, losses, costs and
                                    expenses, including legal fees and any other charges whatsoever, however caused,
                                    that may arise as a result of:
                                </p>
                                <ul>
                                    <li>your breach of the Agreement, in whole or in part;</li>
                                    <br>
                                    <li>violation by you of any law or any third party rights;</li>
                                    <br>
                                    <li>Use by you of the Services and/or the Site or use by any other person accessing
                                        the Services and/or the Site using your login details, whether or not with your
                                        authorisation.</li>
                                    <br>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="panel info panel-default">
                        <div class="info panel-heading" data-toggle="collapse" data-parent="#info_accordion"
                            data-target="#collapse14">
                            <h5 class="panel-title info">
                                14. Precedence </h5>
                        </div>
                        <div id="collapse14" class="panel-collapse collapse">
                            <div class="info panel-body">
                                <p>The Game rules and any other terms and conditions governing the use of and access to
                                    the Services and the Site shall form an integral part of the Agreement.
                                    <br><br>
                                    In the event that there is any conflict between the provisions of the Games rules,
                                    any other terms and conditions governing the use of and access to the Services and
                                    the Site and the Agreement, unless expressly provided otherwise, the Games rules
                                    shall prevail.<br>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="panel info panel-default">
                        <div class="info panel-heading" data-toggle="collapse" data-parent="#info_accordion"
                            data-target="#collapse15">
                            <h5 class="panel-title info">
                                15. Governing Law </h5>
                        </div>
                        <div id="collapse15" class="panel-collapse collapse">
                            <div class="info panel-body">
                                <p>
                                    The Agreement and any matters relating hereto shall be governed by, and construed in
                                    accordance with, the laws of the Isle of Man. Each party irrevocably agrees that the
                                    relevant courts of the Isle of Man shall have the exclusive jurisdiction in relation
                                    to any claim, dispute, or difference concerning the Agreement and any matter arising
                                    therefrom and irrevocably waives any right that it may have to object to an action
                                    being brought in those courts, or to claim that the action has been brought in an
                                    inconvenient forum, or that those courts do not have jurisdiction.
                                </p>
                                <h3>Miscellaneous</h3>
                                <p>
                                    The English language version of this Agreement shall be the prevailing version in
                                    the event of any discrepancy between any translated versions of this Agreement.
                                    <br><br>
                                    If a provision of this Agreement is or becomes illegal, invalid or unenforceable in
                                    any jurisdiction, that shall not affect the validity or enforceability in that
                                    jurisdiction of any other provision hereof or the validity or enforceability in
                                    other jurisdictions of that or any other provision hereof.
                                    <br><br>
                                    The headings in this Agreement are for convenience of reference only and do not
                                    affect the construction or interpretation of any provision.
                                    <br><br>
                                    If GBO303 fails or delays the performance of any obligation under the Agreement due
                                    to the reasons of the occurrence of events which are beyond GBO303`s control,
                                    including, but not limited to Acts of God, Government restrictions, wars,
                                    insurrections, transmission or system failures, failure or interruption in the
                                    provision of telecommunications or broadband services and failure or shortage of
                                    power supplies or equipment, such failure or delay does not constitute a breach of
                                    the Agreement.
                                    <br><br>
                                    Neither failure nor delay on the part of GBO303 to exercise any right, remedy, power
                                    or privilege hereunder shall operate as a waiver thereof, or of the exercise of any
                                    other right, remedy, power or privilege.
                                    <br><br>
                                    GBO303 reserves the right to assign this agreement, in whole or in part, at any time
                                    without notice. You may not assign any of your rights or obligations under this
                                    Agreement.
                                    <br><br>
                                    Nothing in this Agreement shall create or confer any rights or other benefits in
                                    favour of any third parties not party to this Agreement.
                                    <br><br>
                                    Nothing in this Agreement shall create or be deemed to create a partnership, agency,
                                    trust arrangement, fiduciary relationship or joint venture between GBO303 and you.
                                    <br><br>
                                    This Agreement constitutes the entire understanding and agreement between GBO303 and
                                    you regarding the Services and the Site and supersedes any prior agreement,
                                    understanding or arrangement between GBO303 and you.
                                    <br><br>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            $(function() {
                var pg = "terms_conditions";
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

<div class="app-info row">

    <div class="col-md-6 col-lg-4 col-xs-12 gradient-border mobile-border">
        <h4 class="title">SERVICE ADVANTAGES</h4>
        <div class="ml-md-2 mt-2 ">
            <div class="row center no-gutters">
                <div class="col-xs-8">
                    <div class="fs-md">DEPOSIT</div>
                    <div>Average Time</div>
                </div>
                <div class="col-xs-4 text-right">
                    <div class="mb-0 progressNumber">1<span class="fs-sm">Mins</span>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 1%" aria-valuenow="1"
                            aria-valuemin="0" aria-valuemax="100">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-3 center no-gutters">
                <div class="col-xs-8">
                    <div class="fs-md">WITHDRAW</div>
                    <div>Average Time</div>
                </div>
                <div class="col-xs-4 text-right">
                    <div class="mb-0 progressNumber">3<span class="fs-sm">Mins</span>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 3%" aria-valuenow="3"
                            aria-valuemin="0" aria-valuemax="100">
                        </div>
                    </div>
                </div>
            </div>
            <p class="mt-3 fs-sm">
                *Average Time Reference does not apply if banks are offline, connection issues occur,
                or incomplete information is provided.
            </p>
        </div>
    </div>

    <div class="col-md-6 col-lg-4 col-xs-12 gradient-border mobile-border">
        <h4 class="title">GAME TYPES</h4>

        <section class="carousel-fixed-height">
            <div id="pagination-info" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#pagination-info" data-slide-to="0" class="active"></li>
                    <li data-target="#pagination-info" data-slide-to="1"></li>
                </ol>

                <div class="carousel-inner" role="listbox">
                    <div class="item active">

                        <div class="d-block mb-3 pointer text-left">
                            <div class="mb-0 font-weight-bold">FISH HUNTER</div>
                            <div style="white-space: normal;">A simple yet exciting fishing game,
                                an adventure with many features that everyone will enjoy.</div>
                        </div>

                        <div class="d-block mb-3 pointer text-left">
                            <div class="mb-0 font-weight-bold">SLOTS</div>
                            <div style="white-space: normal;">Over 10 famous slot brands to choose from,
                                with more than 1000+ slot games featuring realistic sound and graphics.</div>
                        </div>

                    </div>
                    <div class="item">

                        <div class="d-block mb-3 pointer text-left">
                            <div class="mb-0 font-weight-bold">SPORTSBOOK</div>
                            <div style="white-space: normal;">Thousands of betting opportunities every day
                                for all types of sports worldwide.</div>
                        </div>

                        <div class="d-block mb-3 pointer text-left">
                            <div class="mb-0 font-weight-bold">RNG</div>
                            <div style="white-space: normal;">Win more by betting with more number choices
                                in our classic and ultimate keno!</div>
                        </div>

                        <div class="d-block mb-3 pointer text-left">
                            <div class="mb-0 font-weight-bold">LIVE CASINO</div>
                            <div style="white-space: normal;">Experience the thrill and atmosphere
                                of a real casino.</div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </div>

    <div class="col-md-6 col-lg-4 col-xs-12 gradient-border mobile-border">
        <h4 class="title">INFO CENTER</h4>
        <div class="ml-md-3 mt-md-4">
            <div class="pointer mb-md-4 mb-3">
                <a class="flex" href="{{ url('info/how-sportsbook') }}">
                    <i class="i-stop icon-stop2"></i>&nbsp;&nbsp;
                    <div>How to Play Sportsbook</div> &nbsp;
                </a>
            </div>
            <div class="pointer mb-md-4 mb-3">
                <a class="flex" href="{{ url('info/faq-deposit') }}">
                    <i class="i-stop icon-stop2"></i>&nbsp;&nbsp;
                    <div>How to Make a Deposit</div> &nbsp;
                </a>
            </div>
            <div class="pointer">
                <a class="flex" href="{{ url('info/faq-faq_withdrawal') }}">
                    <i class="i-stop icon-stop2"></i>&nbsp;&nbsp;
                    <div>How to Make a Withdrawal</div> &nbsp;
                </a>
            </div>
        </div>
    </div>

    <x-social-media />
</div>

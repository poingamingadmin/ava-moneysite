<div id="sideNav" class="side-nav">
    <nav class="nav-content">
        <ul class="side-nav-items">
            <li class="nav-item">
                <a class="navlink" href="{{ url('') }}" onclick="closeNav(-1);">
                    <div><i class="icon-home"></i></div>
                    <div class="nav-title" i18n="@HOME">HOME</div>
                </a>
            </li>
            @auth
                <li class="nav-item">
                    <a href="javascript:void(0);" class="navlink has-sub" onclick="openNavItem(0);">
                        <div><i class="icon-coins"></i></div>
                        <div class="nav-title" i18n="@Funds">Funds</div>
                    </a>
                    <div class="nav-item-content">
                        <ul class="submenu account">
                            <li>
                                <a href="{{ url('account/deposit') }}" (click)="closeNav($event);">
                                    <div><span class="circle"><i class="icon-pig"></i></span></div>
                                    <div class="fs-sm mt-1" i18n>Deposit</div>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('account/withdrawal') }}" (click)="closeNav($event);">
                                    <div><span class="circle"><i class="icon-transfer"></i></span></div>
                                    <div class="fs-sm mt-1" i18n>Withdraw</div>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('account/history') }}" (click)="closeNav($event);">
                                    <div><span class="circle"><i class="icon-history"></i></span></div>
                                    <div class="fs-sm mt-1" i18n="@History">Statement</div>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('profile/activate-referral') }}" (click)="closeNav($event);">
                                    <div><span class="circle"><i class="icon-users"></i></span></div>
                                    <div class="fs-sm mt-1" i18n>Referral</div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            @endauth

            <li class="nav-item">
                <a href="javascript:void(0);" class="navlink has-sub"
                    onclick="openNavItem({{ Auth::check() ? '1' : '0' }});">
                    <div><i class="icon-videogame_asset"></i></div>
                    <div class="nav-title" i18n>GAMES</div>
                </a>
                <div class="nav-item-content">
                    <ul class="submenu">
                        <li>
                            <a href="{{ url('slots') }}" (click)="closeNav(-1);">
                                <div class="">
                                    <span class="circle">
                                        <i class="icon-slot"></i>
                                    </span>
                                    <span class='hot sub' style="">HOT</span>
                                </div>
                                <div class="fs-sm mt-1">SLOTS</div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('sports') }}" (click)="closeNav(-1);">
                                <div class="">
                                    <span class="circle">
                                        <i class="icon-soccer"></i>
                                    </span>
                                </div>
                                <div class="fs-sm mt-1">SPORTS</div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('casino') }}" (click)="closeNav(-1);">
                                <div class="">
                                    <span class="circle">
                                        <i class="icon-casino"></i>
                                    </span>
                                </div>
                                <div class="fs-sm mt-1">CASINO</div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('cockfight') }}" (click)="closeNav(-1);">
                                <div class="">
                                    <span class="circle">
                                        <i class="icon-cockfight"></i>
                                    </span>
                                </div>
                                <div class="fs-sm mt-1">Cockfight</div>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item">
                <a class="navlink" href="{{ url('promotion') }}" onclick="closeNav(-1);">
                    <div><i class="icon-gift"></i></div>
                    <div class="nav-title" i18n="@PROMOS">PROMOTIONS</div>
                </a>
            </li>
            <li class="nav-item">
                <a class="navlink" href="{{ url('referral') }}" onclick="closeNav(-1);">
                    <div><i class="icon-users"></i></div>
                    <div class="nav-title" i18n="@REFERRAL">REFERRAL</div>
                </a>
            </li>
            <li class="nav-item">
                <a class="navlink" href="{{ url('info/faq-general') }}" onclick="closeNav(-1);">
                    <div><i class="icon-info"></i></div>
                    <div class="nav-title" i18n="@INFO">INFO</div>
                </a>
            </li>
            <li class="nav-item">
                <a class="navlink" href="{{ url('contact-us') }}" onclick="closeNav(-1);">
                    <div><i class="icon-address-book"></i></div>
                    <div class="nav-title" i18n>CONTACT US</div>
                </a>
            </li>
            <li class="nav-item">
                <a href="javascript:void(0);" class="navlink" onclick="closeNav();" data-trigger='nifty'
                    data-target='#langModal-mobile'>
                    <div><i class="icon-language"></i></div>
                    Language
                </a>
            </li>
            <li class="nav-item">
                <a class="navlink" href="/" onclick="closeNav(-1);">
                    <div><i class="icon-display"></i></div>
                    <div class="nav-title">Desktop View</div>
                </a>
            </li>
            <li class="nav-item"><a href="javascript:void(0);" class="navlink" onclick="closeNav();"> <i
                        class="icon-double_arrow_l"></i></a></li>
        </ul>
    </nav>

    <script>
        var arr = [0, 0];

        function openNavItem(index) {
            $('.nav-item-content').removeClass('open');
            $('.navlink.has-sub').removeClass('active');
            if (index >= 0) {
                $('.nav-item-content').eq(index).addClass('open');
                $('.navlink.has-sub').eq(index).addClass('active');
                $("#mainContent").addClass("navContentOpen");
                $("#sideNav").addClass("navContentOpen");
            }
        }

        function closeNav() {
            $('.nav-item-content').removeClass('open');
            $('.navlink.has-sub').removeClass('active');
            $("#sideNav").removeClass("navContentOpen");
            $("#sideNav").removeClass("open");
            $("#mainContent").removeClass("navContentOpen");
            $("#mainContent").removeClass("sideNavOpen");
        }
    </script>
</div>

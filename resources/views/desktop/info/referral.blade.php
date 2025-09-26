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
                            <a href="{{ url('info/referral') }}" class="active">
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

                <div class="border-box">
                    <div class="fs-lg title">
                        {{ $siteConfig->site_name }} Referral
                    </div>
                    <p>
                        {{ $siteConfig->site_name }} Referral is an online business that leverages the rapid development
                        of online marketing today. We are not the first in the Referral business, but we are the only
                        one offering the easiest partnership process in this industry.
                    </p>

                    <div class="fs-md title">Why Choose {{ $siteConfig->site_name }} Referral Business?</div>
                    <p>
                        {{ $siteConfig->site_name }} Referral offers a reliable business with growing prospects every
                        day.
                        Flexibility and trust are our motto in building close cooperation. For us, the success of
                        {{ $siteConfig->site_name }} is our shared success. Therefore, we ensure you are making the
                        right
                        choice by partnering with us, with trustworthy and clear online business prospects for the
                        future.
                    </p>

                    <div class="fs-md title">Our Promise</div>
                    <p>
                        {{ $siteConfig->site_name }} will always strive to provide fast and reliable service as well as
                        high-quality, safe, and enjoyable products for members around the world, not just in Indonesia.
                        We further optimize our excellent service with 24/7 online customer support.
                    </p>

                    <div class="fs-md title">Stability and Security</div>
                    <p>
                        We guarantee the security of your data with high-level protection supported by the latest
                        technology. The high stability of our company ensures that your transactions run smoothly and
                        securely.
                    </p>
                    <p>&nbsp;</p>
                </div>


            </div>
        </div>



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

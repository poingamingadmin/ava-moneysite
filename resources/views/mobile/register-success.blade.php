<x-mobile.app>
    <div class="content my01">
        <div class="container-wrapper pt-4 reg-success">
            <div class="container container-box noSidePadding">
                <h3 class="title">REGISTRATION SUCCESSFUL</h3>
                <div class="content">
                    <p style="text-align: center;">
                        Congratulations! You have successfully joined <b>{{ $siteConfig->site_name}}</b>!
                    </p>
                    <p style="text-align: center;">
                        To make a deposit, click "
                        <b>
                            <font color="#ffff00">
                                <a href="/account/deposit" target="_blank">
                                    <font color="#ffff00">HERE</font>
                                </a>
                                &nbsp;
                            </font>
                        </b>
                        "<br>
                    </p>
                </div>
            </div>
            <script>
                $(document).ready(function() {
                    if (window.agentCode == 'CDTUGAA' && typeof RegisterFBConversion === 'function') {
                        console.log('RegisterFBConversion is defined.');
                        RegisterFBConversion();
                    }
                });
            </script>
        </div>
    </div>
</x-mobile.app>

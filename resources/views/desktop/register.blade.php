<x-desktop.app>
    <div class="content my01">
        <div class="register container">
            <div class="row">

                <div class="col-md-3">
                    <div class="promo-box">
                        <div class="text-center text-primary">
                            <h4>{{ $config_firebase['promo-box']['title'] }}</h4>
                        </div>

                        @foreach ($config_firebase['promo-box']['items'] as $item)
                            <ul class="fs-md">
                                <li>
                                    <div class="s">
                                        {{ $item }}
                                    </div>
                                </li>
                            </ul>
                        @endforeach
                    </div>
                </div>
                <div class="col-md-6 clearfix">
                    <div class="p-title">
                        <span id="step_title" class="skew" data-title="Daftar Akun"> <span>REGISTER
                            </span></span>
                    </div>

                    <form class="register-form form form-horizontal " [formGroup]="register-form" id="registerForm1"
                        method="post" action="{{ url('register') }}" class="needs-validation">
                        <input type='hidden' name='stage_val' value="0" id='stage_val'>
                        @csrf
                        <div class="register_form_one">
                            <div class="sub-title">Account Details</div>
                            <div class="form-group">
                                <div class="col-md-5">
                                    <label>Username</label>
                                </div>
                                <div class="col-md-7">
                                    <input type="text" class="form-control" placeholder="" name="user_name"
                                        id="user_name" required autocomplete="nope">
                                    <small class="text-left">
                                        * Username must be 6–12 characters, only letters and/or numbers (0–9),
                                        no symbols (@#$~%&) <br> Example: <b>username1</b>
                                    </small>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-5">
                                    <label>Password</label>
                                </div>
                                <div class="col-md-7">
                                    <input type="password" class="form-control" name="password_register"
                                        id="password_register_1" placeholder="" required autocomplete="new-password">
                                    <small class="text-left">
                                        * Minimum 8 characters, must include at least 1 letter, 1 number,
                                        and 1 special character (!@#$%^&amp;*()_+) <br> Example: <b>password1@</b>
                                    </small>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-5">
                                    <label>Confirm Password</label>
                                </div>
                                <div class="col-md-7">
                                    <input type="password" class="form-control input_text" name="password_confirmation"
                                        id="password_confirmation" placeholder="" required autocomplete="new-password">
                                </div>
                            </div>
                            <div class="sub-title">Contact Information</div>
                            <div class="form-group">
                                <div class="col-md-5">
                                    <label>Email Address</label>
                                </div>
                                <div class="col-md-7">
                                    <input type="email" class="form-control" placeholder="" name="email"
                                        id="email" value="" required autocomplete="off">
                                    <div class="loader-b" id="email-validate-loader"
                                        style="position: absolute; display:none; top:3px; right:23px; width:10px; height:10px;">
                                    </div>
                                    <small class="text-left">* Please provide a valid email address for password
                                        recovery</small>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-5">
                                    <label>Phone Number</label>
                                </div>
                                <div class="col-md-7">
                                    <div class="input-group">
                                        <input type="tel" class="form-control" placeholder="" id="mobileno"
                                            name="mobileno" required autocomplete="off" minlength="5" maxlength="20">
                                        <div class="loader-b" id="mobile-validate-loader"
                                            style="position: absolute; display:none; top:3px; right:23px; width:10px; height:10px;">
                                        </div>
                                    </div><!-- /input-group -->
                                </div>
                            </div>

                            <div class="form-group" id="refCode_formgrp" style="display:none">
                                <div class="col-xs-5 col-md-5">
                                    <label>Referral / Affiliate Code</label>
                                </div>
                                <div class="col-xs-7 col-md-7">
                                    <span class="txt-refCode" id="txt-refCode__reg"></span>
                                    <input type="hidden" class="refCode" value="" name="referralCode">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-xs-4 text-right" style="padding-top:15px"></div>
                                <input type="hidden" value="1" name="isRegHasBank">
                                <div class="col-xs-8 text-right" style="padding-top:15px"
                                    id="register_form_two_next_btn">
                                    <button type="button" class="btn btn-secondary next_btn">Next</button>
                                </div>
                            </div>
                        </div>
                        <div class="register_form_two">
                            <input type="hidden" value="1" name="isRegHasBank">
                            <div class="sub-title">Bank Information</div>
                            <div class="form-group">
                                <div class="col-md-5">
                                    <label>Account Holder Name</label>
                                </div>
                                <div class="col-md-7">
                                    <input type="text" class="form-control" id="name1" placeholder=""
                                        name="name" maxlength="100">
                                    <small class="text-left">
                                        * The registered name must match the bank account used for deposits and
                                        withdrawals.
                                    </small>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-5 ">
                                    <label for="acc_type" style="padding-top: 7.5px;">Transaction Account Type<span
                                            class="text-danger">*</span></label>
                                </div>
                                <div class="col-md-7">
                                    <div class="row">
                                        <div class="col-xs-6 radio_2">
                                            <input name="acc_type" id="radioBank5" checked type="radio"
                                                value="5">
                                            <label for="radioBank5">
                                                <span class="radio-title">Bank</span>
                                                <span class="marked"><i class="icon-checkmark"></i></span>
                                            </label>
                                        </div>
                                        <div class="col-xs-6 radio_2">
                                            <input name="acc_type" id="radioEwallet7" type="radio" value="7">
                                            <label for="radioEwallet7">
                                                <span class="radio-title">E-wallet</span>
                                                <span class="marked"><i class="icon-checkmark"></i></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group" id="isShowBankOptions">
                                <div class="col-md-5"><label>Bank</label></div>
                                <div class="col-md-7">
                                    <select class="form-control" data-plugin="bank_list" id="bankOpts--register"
                                        name="bank_name">
                                        <option selected value="">- Please Select -</option>
                                        <option value="BCA" data-bcode="BCA">BCA</option>
                                        <option value="BNI" data-bcode="BNI">BNI</option>
                                        <option value="MANDIRI" data-bcode="MDR">MANDIRI</option>
                                        <option value="BRI" data-bcode="BRI">BRI</option>
                                        <option value="CIMB" data-bcode="CIMBN">CIMB</option>
                                        <option value="BSI" data-bcode="Other">BSI</option>
                                        <option value="BANKJAGO" data-bcode="Other">BANK JAGO</option>
                                        <option value="SMBC" data-bcode="Other">SMBC</option>
                                        <option value="NEO" data-bcode="Other">NEO BANK</option>
                                        <option value="DANAMON" data-bcode="Other">DANAMON</option>
                                        <option value="PERMATA" data-bcode="Other">PERMATA</option>
                                        <option value="SEABANK" data-bcode="Other">SEABANK</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group" id="isShowEwalletOptions" style="display:none;">
                                <div class="col-md-5"><label>E-wallet</label></div>
                                <div class="col-md-7">
                                    <select class="form-control" data-plugin="bank_list" id="ewalletOpts--register"
                                        name="ewallet_name" disabled>
                                        <option selected value="">- Please Select -</option>
                                        <option value="OVO">OVO</option>
                                        <option value="DANA">DANA</option>
                                        <option value="LINKAJA">LINK AJA</option>
                                        <option value="GOPAY">GOPAY</option>
                                        <option value="SHOPEEPAY">SHOPEEPAY</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-5">
                                    <label id="isShowBankLable">Bank Account Number</label>
                                    <label id="isShowEwalletLable" style="display:none;">E-wallet Number</label>
                                </div>
                                <div class="col-md-7">
                                    <input type="tel" class="form-control" placeholder="" name="acc_no"
                                        id="acc_no" required autocomplete="off" minlength="8" maxlength="20">
                                    <div class="loader-b" id="accno-validate-loader"
                                        style="position: absolute; display:none; top:3px; right:23px; width:10px; height:10px;">
                                    </div>
                                    <small class="text-left">* Make sure your account is Valid, Active, and not already
                                        registered on this site</small>
                                </div>
                            </div>

                            <div class="form-group row no-gutters">
                                <div class="col-xs-4 col-md-5" style="margin-left:15px;">
                                    <label>Captcha</label>
                                </div>
                                <div class="col-xs-3 col-md-2">
                                    <input type="tel" id='registerCaptchaimg' class="form-control"
                                        name="registerCaptchaimg" maxlength="4" autocomplete="off"
                                        style="height: 38px;">
                                </div>
                                <button class="btn btn-refresh col-xs-4 col-md-4 text-left" type="button"
                                    id="registerfreshCaptcha">
                                    <img data-url="{{ url('captcha-image-register') }}?v=" id="Captchaimga"
                                        class="captcha_img" autocomplete="off">
                                    <i class="icon-refresh"></i>
                                </button>
                            </div>
                            <div class="form-group form-check submit-box">
                                <div class="col-md-12">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" id="terms" name="terms" value="on">
                                            &nbsp;By clicking the REGISTER button, I confirm that I am 18 years old or
                                            above.
                                            I have read and agree to the
                                            <a href="{{ url('info/terms-conditions/terms') }}" target="_blank">Terms &
                                                Conditions</a>.
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-xs-4 text-right" style="padding-top:15px"
                                    id="register_form_two_prev_btn">
                                    <button type="button" class="btn btn-tertiery prev_btn">Previous</button>
                                </div>
                                <div class="col-xs-8 text-right" style="padding-top:15px"
                                    id="register_form_two_submit_btn">
                                    <button type="submit" class="btn btn-secondary">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>


                    <script type="text/javascript">
                        $(document).ready(function() {
                            var captcha_v = 1;
                            $('#registerfreshCaptcha').click(function(e) {

                                captcha_v++;
                                e.preventDefault();
                                e.stopPropagation();
                                $("#registerCaptchaimg").val('');
                                var url = '{{ url('captcha-image-register') }}?v=' + Date.now() + Math.floor(
                                    Math.random() * 100000000);
                                $('#Captchaimga').attr("src", url);
                            })

                            var is_term_required = '1' ? true : false;
                            var is_lineID_required = '1' ? true : false;
                            var register_form_no_steps = 1;
                            var is_register_need_acc = 1;
                            if (register_form_no_steps == 1) {
                                $('#registerfreshCaptcha').trigger('click');
                                $('.register_form_two').css('display', 'block');
                                $('#register_form_two_next_btn').css('display', 'none');
                                $('#register_form_two_prev_btn').css('display', 'none');

                                $("#stage_val").val(parseInt('1'));

                                if (is_register_need_acc == 1) {
                                    $('#register_form_two_btn').css('display', 'none');
                                    $('#register_form_two_submit_btn').removeClass('col-xs-8').addClass("col-xs-12");
                                }
                            }

                            @if (Session::has('ref'))
                                localStorage.setItem('refCode', '{{ Session::get('ref') }}');
                            @endif


                            @if (Session::has('removeRef'))
                                localStorage.removeItem('refCode');
                            @endif

                            var formSteps = parseInt('1'); //count fr  0
                            var ref_code = "";
                            var pwd_regex = /^(?=.*[a-zA-Z])(?=.*\d)(?=.*[!@#$%^&*()_+])[A-Za-z\d!@#$%^&*()_+]{8,20}$/;
                            var minPwdLen = 8;
                            var minPwdMsg = "Diperlukan minimal 8 karakter";
                            if (minPwdLen == 6) {
                                minPwdLen = 6;
                                minPwdMsg = "Diperlukan minimal 6 karakter";
                            }

                            if (!!ref_code) {
                                if (ref_code == 'null') {
                                    ref_code = '';
                                }
                                localStorage.setItem('refCode', ref_code);

                                if (!!ref_code) {
                                    $('#refCode_formgrp').show();
                                }
                            } else {
                                var refCode = localStorage.getItem('refCode');
                                if (!!refCode) {
                                    $('.register-form .refCode').val(refCode);
                                    $('#txt-refCode__reg').text(refCode);
                                    $('#refCode_formgrp').show();
                                }
                            }


                            $('input[name=acc_type]').change(function() {
                                $('#bankOpts--register').val(null);
                                $('#ewalletOpts--register').val(null);
                                $("#acc_no").val(null);

                                if ($(this).val() == '7') {
                                    $('#isShowBankOptions,#isShowBankLable').hide();
                                    $('#isShowEwalletOptions,#isShowEwalletLable').show();
                                    $('#bankOpts--register').prop('disabled', true);
                                    $('#ewalletOpts--register').prop('disabled', false);
                                    $("#acc_no").removeAttr("minlength");
                                    $("#acc_no").attr("maxlength", "20");
                                    if (window.currencyCode == 'BRL') {
                                        $("#agency_code_show").hide();
                                    }
                                    if (window.currencyCode == 'AUD') {
                                        $("#bsb_code_show").hide();
                                    }
                                    if (window.currencyCode == 'INR') {
                                        $("#ifsc_code_show").hide();
                                    }
                                } else {
                                    $('#isShowBankOptions,#isShowBankLable').show();
                                    $('#isShowEwalletOptions,#isShowEwalletLable').hide();
                                    $('#bankOpts--register').prop('disabled', false);
                                    $('#ewalletOpts--register').prop('disabled', true);
                                    $("#acc_no").attr("minlength", window.accLength);
                                    if (window.currencyCode == 'BRL') {
                                        $("#agency_code_show").show();
                                    }
                                    if (window.currencyCode == 'AUD') {
                                        $("#bsb_code_show").show();
                                    }
                                    if (window.currencyCode == 'INR') {
                                        $("#ifsc_code_show").show();
                                    }
                                }
                            });

                            var thankyou = "Thank you for your registration";
                            var email_regex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i;
                            var captchaCode = $('#6_letters_code').val();
                            var datastring = "6_letters_code=" + captchaCode;
                            var username = $("#username").val();
                            var acc_no = $("#acc_no").val();
                            var securecode = $("#registerCaptchaimg").val();
                            var email_id = $("#email_id").val();
                            var mobileno = $("#mobileno").val();
                            var birthDate = $("#birthDate").val();

                            var fullNameRegexPattern = /^[^0-9*|\":<>[\]{}`\\();@#%^*&$~!`=+?-]+$/;
                            if (window.currencyCode == 'HKD' || window.currencyCode == '$') {
                                fullNameRegexPattern = /^\s{0,1}[a-zA-Z-.\/,\']+(?:\s[a-zA-Z]+)*\s{0,1}$/;
                            }

                            var nameRegexPattern = /^[a-zA-Z0-9]+$/;
                            var lineRegexPattern = /^[a-zA-Z0-9_\-\.]+$/;

                            function isInputSuccess(selector) {
                                return $(selector + ".has-success:not(.pending)").length > 0;
                            }

                            $regi_validator = $("#registerForm1").validate({
                                ignore: ":hidden:not(.always-validate)",
                                rules: {
                                    name: {

                                        required: true,
                                        //pattern: /^[a-z A-Z]+$/,
                                        // pattern : /^\s{0,1}[a-zA-Z_.\/,\']+(?:\s[a-zA-Z]+)*\s{0,1}$/,
                                        pattern: fullNameRegexPattern,

                                        minlength: 3
                                    },

                                    user_name: {
                                        required: true,
                                        minlength: 6,
                                        maxlength: 12,
                                        pattern: nameRegexPattern,
                                        remote: {
                                            url: '{{ url('checkUserNameAvailability') }}',
                                            type: "post",
                                            //  headers: {
                                            //      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                            //  },
                                        }
                                    },

                                    acc_no: {
                                        required: true,
                                        minlength: function(element) {
                                            return $("#acc_no").attr('minlength');
                                        },
                                        maxlength: function(element) {
                                            return $("#acc_no").attr('maxlength');
                                        },
                                        pattern: /^[0-9]+$/,
                                        remote: {
                                            url: '{{ url('checkAccNo') }}',
                                            type: "post",
                                            dataType: "json",
                                            async: true,
                                            data: {
                                                acc_type: function() {
                                                    return $('#registerForm1 input[type=radio][name=acc_type]:checked')
                                                        .val();
                                                }
                                            },
                                            complete: function(data) {
                                                if (!$('#acc_no').hasClass('pending')) {
                                                    $('#accno-validate-loader').hide();
                                                }
                                            },
                                            //  headers: {
                                            //      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                            //  },
                                        }
                                    },
                                    bsb_no: {
                                        required: true,
                                        minlength: function(element) {
                                            return $("#bsb_no").attr('minlength');
                                        },
                                        maxlength: function(element) {
                                            return $("#bsb_no").attr('maxlength');
                                        },
                                        pattern: /^[0-9]+$/,

                                    },
                                    ifsc_code: {
                                        required: true,
                                        minlength: function(element) {
                                            return $("#ifsc_code").attr('minlength');
                                        },
                                        maxlength: function(element) {
                                            return $("#ifsc_code").attr('maxlength');
                                        },
                                        pattern: /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{11}$/,
                                    },
                                    agency_code: {
                                        minlength: 1,
                                        maxlength: 4,
                                        pattern: /^[0-9]+$/,
                                    },
                                    bank_name: {
                                        required: true
                                    },
                                    password_register: {
                                        required: true,
                                        minlength: minPwdLen,
                                        maxlength: 20,
                                        pattern: pwd_regex
                                    },
                                    password_confirmation: {
                                        required: true,
                                        equalTo: '#password_register_1'
                                    },
                                    email: {
                                        required: true,
                                        email: true,
                                        remote: {
                                            url: '{{ url('checkExistingEmail') }}',
                                            type: "post",
                                            dataType: "json",
                                            async: true,
                                            complete: function(data) {
                                                if (!$('#email').hasClass('pending')) {
                                                    $('#email-validate-loader').hide();
                                                }
                                            },
                                            //  headers: {
                                            //      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                            //  },
                                        }
                                    },
                                    line_id: {
                                        required: is_lineID_required,
                                        maxlength: 50,
                                        pattern: lineRegexPattern,
                                        remote: {
                                            url: '{{ url('checkExistingLineID') }}',
                                            type: "post",
                                        }
                                    },
                                    otp_success_code: {
                                        required: true,
                                    },
                                    mobileno: {
                                        required: true,
                                        minlength: function(element) {
                                            return $("#mobileno").attr('minlength');
                                        },
                                        maxlength: function(element) {
                                            return $("#mobileno").attr('maxlength');
                                        },
                                        pattern: /^[0-9]+$/,
                                        remote: {
                                            url: '{{ url('checkExistingMobile') }}',
                                            type: "post",
                                            dataType: "json",
                                            async: true,
                                            complete: function(data) {
                                                if (!$('#mobileno').hasClass('pending')) {
                                                    $('#mobile-validate-loader').hide();
                                                }
                                            },
                                            //  headers: {
                                            //      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                            //  },
                                        }
                                    },
                                    identity: {
                                        required: true,
                                        pattern: /^\d{3}\.\d{3}\.\d{3}-\d{2}$/,
                                        remote: {
                                            url: '{{ url('checkIdentity') }}',
                                            type: "post",
                                            dataType: "json",
                                            async: true,
                                            complete: function(data) {
                                                if (!$('#identity').hasClass('pending')) {
                                                    $('#identity-validate-loader').hide();
                                                }
                                            },
                                        }
                                    },
                                    terms: {
                                        required: is_term_required,
                                    },
                                    registerCaptchaimg: {
                                        required: true,
                                        minlength: 4,
                                        maxlength: 4,
                                        remote: {
                                            url: '{{ url('check_register_captcha') }}',
                                            type: "post",
                                            dataType: "json",
                                            complete: function(data) {
                                                console.log(data);
                                                if (data && data.responseJSON == "refreshCaptcha")
                                                    $('#registerfreshCaptcha').trigger('click');
                                            },
                                            //  headers: {
                                            //      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                            //  },
                                        }
                                    },
                                    birthDate: {
                                        dateISO: true,
                                    },
                                    address: {
                                        required: true,
                                        maxlength: 200,
                                    }

                                },
                                // Specify validation error messages
                                messages: {
                                    required: true,
                                    name: {
                                        required: "Full Name is required",
                                        pattern: "Full name can only contain letters and spaces, consecutive spaces are not allowed",
                                        minlength: "A minimum of 3 characters is required",
                                    },
                                    user_name: {
                                        required: "Username is required",
                                        pattern: "Username can only contain letters and numbers",
                                        minlength: "A minimum of 6 characters is required",
                                        maxlength: "Maximum of 12 characters only",
                                        remote: "Username is not available"
                                    },
                                    acc_no: {
                                        required: "Bank Account Number is required",
                                        pattern: "Bank Account Number can only contain numbers",
                                        minlength: function(element) {
                                            var min_length = $("#acc_no").attr('minlength');
                                            var str = "A minimum of :acc_length characters is required";
                                            var minlength_msg = str.replace(":acc_length", min_length);
                                            return minlength_msg;
                                        },
                                        maxlength: "Maximum of 20 characters only",
                                        remote: "Bank Account Number is already registered"
                                    },
                                    agency_code: {
                                        required: "Agency Code is required",
                                        pattern: "Agency Code can only contain numbers",
                                        minlength: function(element) {
                                            var min_length = 1;
                                            var str = "A minimum of :acc_length characters is required";
                                            var minlength_msg = str.replace(":acc_length", min_length);
                                            return minlength_msg;
                                        },
                                        maxlength: "Maximum of 4 characters only",
                                    },
                                    bank_name: {
                                        required: "Bank is required",
                                    },
                                    password_register: {
                                        required: "Password is required",
                                        minlength: minPwdMsg,
                                        maxlength: "Maximum of 20 characters only",
                                        pattern: "Invalid format",
                                    },
                                    password_confirmation: {
                                        required: "Password Confirmation is required",
                                        equalTo: "Password Confirmation does not match the password",
                                    },
                                    email: {
                                        required: "Email is required",
                                        email: "Invalid email address",
                                        remote: "Email is not available"
                                    },
                                    line_id: {
                                        required: "Line ID is required",
                                        maxlength: "Maximum of 50 characters only",
                                        pattern: "Invalid format",
                                        remote: "Line ID is not available"
                                    },
                                    otp_success_code: {
                                        required: "OTP code is not verified",
                                    },
                                    mobileno: {
                                        required: "Phone Number is required",
                                        minlength: function(element) {
                                            var min_length = $("#mobileno").attr('minlength');
                                            var str = "A minimum of :mobno_minlength characters is required";
                                            var minlength_msg = str.replace(":mobno_minlength", min_length);
                                            return minlength_msg;
                                        },
                                        maxlength: function(element) {
                                            var max_length = $("#mobileno").attr('maxlength');
                                            var str = "A maximum of :mobno_maxlength characters is allowed";
                                            var maxlength_msg = str.replace(":mobno_maxlength", max_length);
                                            return maxlength_msg;
                                        },
                                        pattern: "Phone Number must contain numbers only",
                                        remote: "Phone Number is not available"
                                    },
                                    identity: {
                                        required: "This field is required",
                                        pattern: "Invalid format",
                                    },
                                    terms: {
                                        required: "Confirmation of Terms & Conditions is required",
                                    },
                                    registerCaptchaimg: {
                                        required: "Captcha is required",
                                        remote: "Invalid Captcha",
                                        minlength: "A minimum of 4 characters is required",
                                    },
                                    birthDate: {
                                        required: "Date of Birth is required",
                                        dateISO: "Invalid date format",
                                    },
                                    address: {
                                        required: "Address is required",
                                        maxlength: "Maximum of 200 characters only",
                                    },
                                    ifsc_code: {
                                        required: "IFSC Code is required",
                                        pattern: "IFSC Code must contain at least one letter and one number",
                                        minlength: "A minimum of 11 characters is required",
                                        maxlength: "Maximum of 11 characters only",
                                    },
                                    currency: {
                                        required: "Currency is required",
                                    }
                                },

                                errorElement: "em",
                                errorPlacement: function(error, element) {
                                    error.addClass("help-block");
                                    element.addClass("has-feedback");
                                    if (element.prop("type") === "checkbox") {
                                        error.insertAfter(element.parent("label"));
                                    } else {
                                        error.insertAfter(element);
                                    }

                                    function addErrorEleIcon(element) {
                                        if (!$(element).next("i")[0]) {
                                            $("<i class='icon-cancel form-control-feedback absolute'></i>").insertAfter(
                                                element);
                                        }
                                    }

                                    let eleId = element.id;
                                    if (eleId == 'email' && !$('#email').hasClass('pending')) {
                                        addErrorEleIcon(element);
                                    } else if (eleId == 'mobileno' && !$('#mobileno').hasClass('pending')) {
                                        addErrorEleIcon(element);
                                    } else if (eleId == 'acc_no' && !$('#acc_no').hasClass('pending')) {
                                        addErrorEleIcon(element);
                                    } else {
                                        addErrorEleIcon(element);
                                    }

                                },

                                success: function(label, element) {
                                    // Add the span element, if doesn't exists, and apply the icon classes to it.
                                    function addSuccessEleIcon(element) {
                                        if (!$(element).next("i")[0]) {
                                            $("<i class='icon-checkmark  form-control-feedback absolute'></i>")
                                                .insertAfter(element);
                                        }
                                    }
                                    let eleId = element.id;

                                    if (eleId == 'email' && !$('#email').hasClass('pending')) {
                                        addSuccessEleIcon(element);
                                    } else if (eleId == 'mobileno' && !$('#mobileno').hasClass('pending')) {
                                        addSuccessEleIcon(element);
                                    } else if (eleId == 'acc_no' && !$('#acc_no').hasClass('pending')) {
                                        addSuccessEleIcon(element);
                                    } else {
                                        addSuccessEleIcon(element);
                                    }

                                },
                                highlight: function(element, errorClass, validClass) {

                                    function chgEleShowError(element) {
                                        $(element).addClass("has-error").removeClass("has-success");
                                        $(element).next("i").addClass("icon-cancel").removeClass("icon-checkmark");
                                    }

                                    let eleId = element.id;

                                    if (eleId == 'email' && !$('#email').hasClass('pending')) {
                                        chgEleShowError(element);
                                    } else if (eleId == 'mobileno' && !$('#mobileno').hasClass('pending')) {
                                        chgEleShowError(element);
                                    } else if (eleId == 'acc_no' && !$('#acc_no').hasClass('pending')) {
                                        chgEleShowError(element);
                                    } else {
                                        chgEleShowError(element);
                                    }
                                },
                                unhighlight: function(element, errorClass, validClass) {

                                    function chgEleShowSuccess(element) {
                                        $(element).addClass("has-success").removeClass("has-error");
                                        $(element).next("i").addClass("icon-checkmark").removeClass("icon-cancel");
                                    }

                                    let eleId = element.id;

                                    if (eleId == 'email' && !$('#email').hasClass('pending')) {
                                        chgEleShowSuccess(element);
                                    } else if (eleId == 'mobileno' && !$('#mobileno').hasClass('pending')) {
                                        chgEleShowSuccess(element);
                                    } else if (eleId == 'acc_no' && !$('#acc_no').hasClass('pending')) {
                                        chgEleShowSuccess(element);
                                    } else {
                                        chgEleShowSuccess(element);
                                    }

                                },
                                submitHandler: function(form, event) {
                                    event.preventDefault();
                                    event.stopPropagation();
                                    $('button[type=submit]').prop('disabled', true);
                                    var curr_stage = parseInt($("#stage_val").val());
                                    if (formSteps == curr_stage) {

                                        //form.submit();
                                        var action = $(form).attr('action');
                                        var data = $(form).serialize();
                                        json_post(action, data).done(function(d) {
                                            //if success reset form



                                            let __cbRedirectTo = function cbRedirectTo(d, form) {
                                                if (!d.redirectUrl) {
                                                    d.redirectUrl = "/";
                                                }
                                                window.location.href = window.uriPrefix + d.redirectUrl;

                                                $(form).each(function() {
                                                    this.reset();
                                                });
                                                $(form).validate().resetForm();

                                                return true;
                                            }.bind(null, d, form);

                                            if (d.m) {
                                                sweetAlert(d.m, 'success', 'success').then(function() {
                                                    return __cbRedirectTo();
                                                });
                                            } else {
                                                return __cbRedirectTo();
                                            }


                                        }).always(function() {

                                            $('button[type=submit]').prop('disabled', false);
                                            return true;
                                        });
                                    } else {
                                        $('button[type=submit]').prop('disabled', false);
                                        return true;
                                    }
                                }
                            });

                            $('#mobileno').keyup(function() {
                                if ($('#mobileno').hasClass('pending')) {
                                    $('#mobileno-error').text("Validating mobile number...");
                                    $('#mobile-validate-loader').show();
                                }
                            });

                            $('#email').keyup(function() {
                                if ($('#email').hasClass('pending')) {
                                    $('#email-error').text("Validating email...");
                                    $('#email-validate-loader').show();
                                }
                            });

                            $('#acc_no').keyup(function() {
                                if ($('#acc_no').hasClass('pending')) {
                                    $('#acc_no-error').text("Validating bank account number...");
                                    $('#accno-validate-loader').show();
                                }
                            });

                            $('#identity').keyup(function() {
                                if ($('#identity').hasClass('pending')) {
                                    $('#identity-error').text("Verifying...");
                                    $('#identity-validate-loader').show();
                                }
                            });

                            $('.next_btn').on('click', function() {

                                validatingForm(0);
                            });

                            function validatingForm(times) {
                                times++;
                                if (times > 2) {
                                    sweetAlert("Formulir memiliki bidang yang tidak valid. Silahkan dicek kembali", 'warning');
                                }

                                if (($('#mobileno').hasClass('pending') || $('#email').hasClass('pending'))) {
                                    showLoadingImgFn();
                                }

                                setTimeout(function() {
                                    if ($("#registerForm1").valid()) {
                                        if (!$('#mobileno').hasClass('pending') && !$('#email').hasClass('pending')) {
                                            removeLoadingImgFn();
                                            switchForm(1);
                                        } else {
                                            validatingForm(times);
                                        }
                                    } else if ($('#mobileno').hasClass('pending') || $('#email').hasClass('pending')) {
                                        validatingForm(times);
                                    } else {
                                        removeLoadingImgFn();
                                        sweetAlert("Formulir memiliki bidang yang tidak valid. Silahkan dicek kembali",
                                            'warning');
                                    }
                                }, 1000);
                            }

                            function switchForm(val) {
                                var stepTwo_lang = "Langkah";
                                var stepLast_lang = "Langkah Terakhir";

                                var curr_stage = $("#stage_val").val();
                                var up_val = parseInt(curr_stage) + val; // val -1 = previous tab, 1 = next tab
                                $("#stage_val").val(up_val);
                                window.scrollTo(0, 0);
                                switch (up_val) {
                                    case 0:
                                        $('.register_form_one').css("display", "block");
                                        $('.register_form_two,.register_form_three').css("display", "none");
                                        $('#step_title').find('span').text($('#step_title').attr('data-title'));
                                        break;
                                    case 1:
                                        $('#registerfreshCaptcha').trigger('click');
                                        $('.register_form_one,.register_form_three').css("display", "none");
                                        $('.register_form_two,.prev_btn').css("display", "block");
                                        $('#step_title').find('span').text($('#step_title').attr('data-title') + ' - ' +
                                            stepTwo_lang + ' 2 ');
                                        break;
                                    case 2:
                                        $('#registerfreshCaptcha').trigger('click');
                                        $('.register_form_one,.register_form_two').css("display", "none");
                                        $('.register_form_three,.prev_btn').css("display", "block");
                                        $('#step_title').find('span').text(stepLast_lang);
                                        break;

                                }
                            }

                            $('.prev_btn').on('click', function() {
                                switchForm(-1);
                            });

                            $(document).on('keyup', function(event) {
                                event.preventDefault();
                                if (event.which == 13) {
                                    var el = $(this).find('#registerForm1 .next_btn:visible')
                                    if (!el) {

                                        el = $(this).find('#registerForm1  button[type="submit"]:visible');
                                    }
                                    el.click();
                                }
                            });


                            /*min and max length changing based on bank id*/
                            var default_minlength, default_maxlength, custom_minLength, custom_maxLength, selectedBank;
                            default_minlength = $("#acc_no").attr('minlength');
                            default_maxlength = $("#acc_no").attr('maxlength');
                            custom_minLength = default_minlength;
                            custom_maxLength = default_maxlength;

                            $('#bankOpts--register').on('change', function() {
                                selectedBank = $(this).find("option:selected").attr('data-bcode');
                                console.log(selectedBank);
                                if (selectedBank == 'MDR') {
                                    custom_minLength = 13;
                                    custom_maxLength = 13;
                                } else if (selectedBank == 'BNI' || selectedBank == 'BCA' || selectedBank == 'DMN' ||
                                    selectedBank == 'BSI' || selectedBank == 'BLA') {
                                    custom_minLength = 10;
                                    custom_maxLength = 10;
                                } else if (selectedBank == 'BRI') {
                                    custom_minLength = 15;
                                    custom_maxLength = 15;
                                } else if (selectedBank == 'CIMBN' || selectedBank == 'BANKJAGO' || selectedBank ==
                                    'MDRLV' || selectedBank == 'SEABANK') {
                                    custom_minLength = 12;
                                    custom_maxLength = 12;
                                } else {
                                    var custom_minLength = default_minlength;
                                    var custom_maxLength = default_maxlength;
                                }
                                $("#acc_no").attr('minlength', custom_minLength);
                                $("#acc_no").attr('maxlength', custom_maxLength);
                            });
                            if (window.location.href.indexOf("ref") > -1) {
                                var url = new URL(location);
                                url.searchParams.delete('ref');
                                history.pushState(null, document.title, url);
                            }

                        });
                    </script>

                </div>

            </div>

        </div>

    </div>
</x-desktop.app>

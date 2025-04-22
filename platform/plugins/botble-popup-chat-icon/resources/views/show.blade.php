<div id="button-contact-vr" class="d-none d-sm-block">
    <div id="gom-all-in-one">
        @if($facebook = theme_option('chat_btn_facebook'))
            <div id="fanpage-vr" class="button-contact">
                <a target="_blank" href="{{$facebook}}">
                    <div class="phone-vr">
                        <div class="phone-vr-circle-fill"></div>
                        <div class="phone-vr-img-circle">
                            <img data-bb-lazy="true" width="200" height="200" loading="lazy"
                                 src="/vendor/core/plugins/popup-chat/images/Facebook.png"
                                 alt="{{$facebook}}">

                        </div>
                    </div>
                </a>
            </div>
        @endif
        @if($tiktok = theme_option('chat_btn_tiktok'))
            <div id="tiktok-vr" class="button-contact">
                <a target="_blank" href="{{ $tiktok }}">

                    <div class="phone-vr">
                        <div class="phone-vr-circle-fill"></div>
                        <div class="phone-vr-img-circle">
                            <img data-bb-lazy="true" width="200" height="200" loading="lazy"
                                 src="/vendor/core/plugins/popup-chat/images/tiktok.png"
                                 alt="{{$tiktok}}">

                        </div>
                    </div>
                </a>
            </div>
        @endif
        @if($zalo = theme_option('chat_btn_zalo'))
            <div id="zalo-vr" class="button-contact">
                <a target="_blank" href="{{$zalo}}">
                    <div class="phone-vr">
                        <div class="phone-vr-circle-fill"></div>
                        <div class="phone-vr-img-circle">

                            <img data-bb-lazy="true" width="200" height="200" loading="lazy"
                                 src="/vendor/core/plugins/popup-chat/images/zalo.png"
                                 alt="{{$zalo}}">
                        </div>
                    </div>
                </a>

            </div>
        @endif
        @if($inta = theme_option('chat_btn_instagram'))
            <div id="instagram-vr" class="button-contact">
                <a target="_blank" href="{{ $inta }}">

                    <div class="phone-vr">
                        <div class="phone-vr-circle-fill"></div>
                        <div class="phone-vr-img-circle">
                            <img data-bb-lazy="true" width="200" height="200" loading="lazy"
                                 src="/vendor/core/plugins/popup-chat/images/instagram.png"
                                 alt="{{$inta}}">

                        </div>
                    </div>
                </a>
            </div>
        @endif

        @if ($hotline = theme_option('hotline'))
            <div id="phone-vr" class="button-contact">
                <a href="tel:{{ $hotline }}">
                    <div class="phone-vr">
                        <div class="phone-vr-circle-fill"></div>
                        <div class="phone-vr-img-circle">
                            <img data-bb-lazy="true" width="200" height="200" loading="lazy"
                                 src="/vendor/core/plugins/popup-chat/images/phone.png"
                                 alt="{{$hotline}}">
                        </div>
                    </div>
                </a>
            </div>
            <div class="phone-bar phone-bar-n">
                <a href="tel:{{ $hotline }}">
                    <span class="text-phone">{{$hotline}}</span>
                </a>
            </div>
        @endif

    </div>
</div>


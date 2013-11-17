<div id="service">
    <ul class="service-bar">
        <li class="service-cell service-home">
            <a href="http://monria.com/" tabindex="50" accessKey="1" title="Monria Home"
               data-action="Monria Home">&nbsp;</a>
        </li>
        <li class="service-cell service-welcome">
            <a href="https://account.entropiauniverse.com/account/my-account/my-items/?ccode=<?php echo $code; ?>" onclick="return Login.open()">Log in</a>
            or
            <a href="https://account.entropiauniverse.com/new-account/?ccode=<?php echo $code; ?>">Create an Account</a>
        </li>
        <li class="service-cell service-shop" style="display:none">
            <a href="" class="service-link" data-action="Shop">Shop</a>
        </li>

        <li class="service-cell service-support service-support-enhanced">
            <a href="#support" class="service-link service-link-dropdown" tabindex="50" accesskey="4" id="support-link"
               style="cursor: pointer;" rel="javascript" data-action="Support - Support">Support<span
                    class="no-support-tickets" id="support-ticket-count"></span></a>

            <div class="support-menu" id="support-menu" style="display:none;">
                <div class="support-primary">
                    <ul class="support-nav">
                        <li>
                            <a href="https://account.entropiauniverse.com/support-faq/contact/my-support-cases/?ccode=<?php echo $code; ?>" tabindex="55" class="support-category"
                               id="support-nav-kb" data-action="Support Cases">
                                <strong class="support-caption">Support Cases</strong>

                            </a>
                        </li>
                        <li>
                            <a href="https://account.entropiauniverse.com/support-faq/in-game-issues/?ccode=<?php echo $code; ?>" tabindex="55" class="support-category"
                               id="support-nav-tickets" data-action="In-world FAQ">
                                <strong class="support-caption">In-world FAQ</strong>
                               </a>
                        </li>
                        <li>
                            <a href="https://account.entropiauniverse.com/support-faq/technical-issues-1/?ccode=<?php echo $code; ?>" tabindex="55" class="support-category"
                               id="support-nav-tickets" data-action="Technical Support">
                                <strong class="support-caption">Technical Support</strong>
                            </a>
                        </li>
                        <li>
                            <a href="https://account.entropiauniverse.com/support-faq/forgotreset-password/?ccode=<?php echo $code; ?>" tabindex="55" class="support-category"
                               id="support-nav-tickets" data-action="Password Retrieval">
                                <strong class="support-caption">Password Retrieval</strong>
                            </a>
                        </li>   <li>
                            <a href="https://www.entropiauniverse.com/entropia-universe/beginners-guide/video-tutorials/?ccode=<?php echo $code; ?>" tabindex="55" class="support-category"
                               id="support-nav-tickets" data-action="Video tutorials">
                                <strong class="support-caption">Video tutorials</strong>
                            </a>
                        </li>
                    </ul>
                    <span class="clear"><!-- --></span>
                </div>
                <div class="support-secondary"></div>

            </div>
        </li>

    </ul>
</div>
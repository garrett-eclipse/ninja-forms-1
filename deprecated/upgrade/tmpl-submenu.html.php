<img class="nf-logo" src="<?php echo NF_PLUGIN_URL . 'images/nf-logo.png'; ?>">
<div class="nf-upgrade">
    <h1>Ninja Forms THREE is Here!</h1>

    <p>You are only moments away from the biggest thing to ever happen to the WordPress form building experience.</p>

    <p>Ninja Forms THREE is the most <em>intuitive</em>, <em>powerful</em>, and <em>enjoyable</em> form builder you will ever use.</p>

    <img src="<?php echo NF_PLUGIN_URL; ?>images/ninja-forms-three.png" />

    <h2>Before you update, we want to make you aware of a few <strong>very important points:</strong></h2>

    <ol>
        <li>
            <p>
                <span class="dashicons dashicons-welcome-widgets-menus"></span><strong>This is completely new form building experience</strong>
                <br />The Ninja Forms 3.0 form builder looks nothing like what you're used to currently. We've spent considerable resources to improve this over all experience, but we want you to be prepared for the difference.
            </p>
        </li>
        <li>
            <p>
                <span class="dashicons dashicons-admin-page"></span><strong><a href='https://ninjaforms.com/documentation/'>Our documentation has been updated to assist through this change</a></strong>
                <br />Ninja Forms documentation has been completely reworked in preparation of Ninja Forms 3.0. We will continue to invest time and energy to improve this resource.
            </p>
        </li>
        <li>
            <p>
                <span class="dashicons dashicons-smiley"></span><strong><a href='https://ninjaforms.com/contact/'>We are here if you have any questions</a></strong>
                <br />This is a big change. We've tested everything. And yet we know that things happen and questions arise. Don't hesitate to reach out to us during your transition to THREE.
            </p>
        </li>
    </ol>

    <hr>

    <div id="nfUpgradeApp">

    </div>

    <script type="text/html" id="tmpl-test">
        Test
    </script>

    <script type="text/html" id="tmpl-table">

        <h2>{{ data.title }}</h2>

        <!--{{{ data.legend }}}-->

        <table>
            <thead>
            <tr>
                <# _.each( data.headers, function( header ) { #>
                <th>{{header}}</th>
                <# }); #>
            </tr>
            </thead>
            <tbody>

                <# _.each( data.rows, function( row ) { #>
                    <# if( ! row.title ) { return; } #>
                <tr>
                    <td>{{row.title}}</td>
                    <td>
                        <span class="dashicons dashicons-{{row.icon}}"></span>
                    </td>
                </tr>
                <# }); #>

                <# if( 'checking' == data.step && ! data.readyToConvert ) { #>
                <tr>
                    <td colspan="2" style="text-align: center;"><span class="dashicons dashicons-update"></span></td>
                </tr>
                <# } #>

            </tbody>

        </table>

        <# if( 'undefined' != typeof data.showSupportLink && data.showSupportLink ) { #>
            <div style="text-align: center;">
                There was an error converting one or more of your forms.<br />
                Please contact <a href="http://ninjaforms.com/contact/">support</a>.
            </div>
        <# } #>

        <# if( 'checking' == data.step && data.readyToConvert ) { #>
            <button class="nf-upgrade-button js-nfUpgrade-startConversion">{{data.next}}</button>
        <# } #>
    </script>

    <script type="text/html" id="tmpl-legend">
        <span class="dashicons dashicons-yes"></span> = {{data.no_issues_detected}}
        &nbsp;
        <span class="dashicons dashicons-flag"></span> = {{data.will_need_attention}}
    </script>

<!--    <hr />-->
<!---->
<!--    <div id="nfThreeFormCheck">-->
<!---->
<!--        <h2>Form Upgrade Compatibility</h2>-->
<!---->
<!--        --><?php //$no_issues_detected  = __( 'No Issues Detected', 'ninja-forms' ); ?>
<!--        --><?php //$will_need_attention = __( 'Will Need Attention', 'ninja-forms' ); ?>
<!--        <span class="dashicons dashicons-yes"></span> = --><?php //echo $no_issues_detected; ?><!-- &nbsp; <span class="dashicons dashicons-flag"></span> = --><?php //echo $will_need_attention; ?>
<!---->
<!--        <table id="nfThreeFormCheckTable">-->
<!--            <thead>-->
<!--            <tr>-->
<!--                <th>ID#</th>-->
<!--                <th>Title</th>-->
<!--                <th>Status</th>-->
<!--            </tr>-->
<!--            </thead>-->
<!--            <tbody>-->
<!--            <tr id="nfThreeFormCheckEmptyRow">-->
<!--                <td colspan="3" style="text-align: center;">-->
<!--                    <span class="dashicons dashicons-update spin"></span>-->
<!--                    <div class="progress-bar--wrapper">-->
<!--                        <div class="progress-bar"></div>-->
<!--                    </div>-->
<!--                </td>-->
<!--            </tr>-->
<!--            </tbody>-->
<!--        </table>-->
<!---->
<!--        <button id="goNinjaGo" class="button go-ninja-go">--><?php //echo __( 'Upgrade Forms', 'ninja-forms' ); ?><!--</button>-->
<!---->
<!--    </div>-->
<!---->
<!--    <div id="nfThreeFormConvert">-->
<!---->
<!--        <h2>Upgrading Forms</h2>-->
<!---->
<!--        <table id="nfThreeFormConvertTable">-->
<!--            <thead>-->
<!--            <tr>-->
<!--                <th>ID#</th>-->
<!--                <th>Title</th>-->
<!--                <th>Status</th>-->
<!--            </tr>-->
<!--            </thead>-->
<!--            <tbody>-->
<!--                <tr class="js-tmp-row">-->
<!--                    <td colspan="3" style="text-align: center;">-->
<!--                        <span class="dashicons dashicons-update spin"></span>-->
<!--                    </td>-->
<!--                </tr>-->
<!--            </tbody>-->
<!--        </table>-->
<!---->
<!--        <a href="--><?php //echo admin_url( 'admin.php?page=ninja-forms&nf-switcher=upgrade' ); ?><!--" id="goToThree">Go To Three</a>-->
<!---->
<!--    </div>-->

</div>


<!--
<div id="optin-modal" style="display:none;">
    <h2>Help make Ninja Forms better!</h2>
    <p>
        If you agree, we'll collect some server data and information about how you use Ninja Forms. 
        <em>No submission data will be collected.</em>
        This data will help us troubleshoot errors and improve your Ninja Forms experience.
    </p>
    <p>    
        <input id="optin-send-email" type="checkbox" checked="checked"> You can also occasionally send me an email about using Ninja Forms.
    </p>
    <span id="optin-spinner" class="spinner"></span>
    <button id="optin" class="button-primary" style="margin-bottom: 10px; font-size: 16px;">Yes, I want to make Ninja Forms better!</button> <button id="optout" class="button-secondary" style="margin-bottom: 10px;">No, please don't collect errors or other data.</button>
</div>
-->

<div style="display:none;">
    <div id="optin-modal-title">
        <h2 style="font-size:180%;">Help make Ninja Forms better!</h2>
    </div>
</div>

<div id="optin-modal" style="display:none; padding:5px 15px;">
    <p>
        We would like to collect data about how Ninja Forms is used so that we can improve the experience for everyone. This data will not include ANY submission data or personally identifiable information.
    </p>
    <p>    
        Please check out our <a href="https://ninjaforms.com/privacy-policy/" target="_blank">privacy policy</a> for additional clarification.
    </p>
    <p>
        <input id="optin-send-email" type="checkbox" style="margin:7px;"><label for="optin-send-email"> Yes, please send me occasional emails about Ninja Forms.</label>
    </p>
    <?php
        $current_user = wp_get_current_user();
    ?>
    <p id="optin-block" style="padding-top:10px; display:none;">
        <input type="text" id="optin-email-address" value="<?php echo $current_user->user_email;  ?>" style="width:100%; font-size:16px;">
    </p>
    <span id="optin-spinner" class="spinner"></span>
    <div id="optin-buttons" style="padding-top:15px; width:100%; clear:both;">
        <button id="optout" class="button-secondary" style="margin-bottom:10px; font-size:18px;">Not Now</button>
        <button id="optin" class="button-primary" style="margin-bottom:10px; font-size:18px; float:right;">Yes, I agree!</button>
    </div>
</div>

<div id="optin-thankyou" style="display:none; padding: 10px 15px; font-size:120%;">
    Thank you for opting in!
</div>
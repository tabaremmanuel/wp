<?php
/** no direct access **/
defined('MECEXEC') or die();

$notifications = $this->main->get_notifications();
?>

<div class="wns-be-container wns-be-container-sticky">
    <div id="wns-be-infobar">
        <a href="" id="" class="dpr-btn dpr-save-btn"><?php _e('Save Changes', 'modern-events-calendar-lite'); ?></a>
    </div>

    <div class="wns-be-sidebar">

        <ul class="wns-be-group-menu">

            <li class="wns-be-group-menu-li has-sub">
                <a href="<?php echo $this->main->remove_qs_var('tab'); ?>" id="" class="wns-be-group-tab-link-a">
                    <span class="extra-icon">
                        <i class="sl-arrow-down"></i>
                    </span>
                    <i class="mec-sl-settings"></i> 
                    <span class="wns-be-group-menu-title"><?php _e('Settings', 'modern-events-calendar-lite'); ?></span>
                </a>
                <ul id="" class="submneu-hover">
                    <li class="submenu-item">
                        <a href="<?php echo $this->main->remove_qs_var('tab'); ?>#general_option"><?php _e('General Options', 'modern-events-calendar-lite'); ?></a>
                        <a href="<?php echo $this->main->remove_qs_var('tab'); ?>#archive_options"><?php _e('Archive Pages', 'modern-events-calendar-lite'); ?></a>
                        <a href="<?php echo $this->main->remove_qs_var('tab'); ?>#slug_option"><?php _e('Slugs/Permalinks', 'modern-events-calendar-lite'); ?></a>
                        <a href="<?php echo $this->main->remove_qs_var('tab'); ?>#currency_option"><?php _e('Currency Options', 'modern-events-calendar-lite'); ?></a>
                        <a href="<?php echo $this->main->remove_qs_var('tab'); ?>#recaptcha_option"><?php _e('Google Recaptcha Options', 'modern-events-calendar-lite'); ?></a>
                        <a href="<?php echo $this->main->remove_qs_var('tab'); ?>#fes_option"><?php _e('Frontend Event Submission', 'modern-events-calendar-lite'); ?></a>
                        <a href="<?php echo $this->main->remove_qs_var('tab'); ?>#user_profile_options"><?php _e('User Profile', 'modern-events-calendar-lite'); ?></a>
                        <a href="<?php echo $this->main->remove_qs_var('tab'); ?>#search_bar_options"><?php _e('Search Bar', 'modern-events-calendar-lite'); ?></a>
                        <?php if($this->main->getPRO()): ?>
                            <a href="<?php echo $this->main->remove_qs_var('tab'); ?>#mailchimp_option"><?php _e('Mailchimp Integration', 'modern-events-calendar-lite'); ?></a>
                        <?php endif; ?>
                        <a href="<?php echo $this->main->remove_qs_var('tab'); ?>#uploadfield_option"><?php _e('Upload Field', 'modern-events-calendar-lite'); ?></a>
                    </li>
                </ul>
            </li>

            <li class="wns-be-group-menu-li">
                <a href="<?php echo $this->main->add_qs_var('tab', 'MEC-single'); ?>" id="" class="wns-be-group-tab-link-a">
                    <i class="mec-sl-note"></i> 
                    <span class="wns-be-group-menu-title"><?php echo __('Single Event', 'modern-events-calendar-lite'); ?></span>
                </a>
                <ul id="" class="submneu-hover">
                    <li class="submenu-item">
                        <a href="<?php echo $this->main->add_qs_var('tab', 'MEC-single'); ?>#event_options"><?php _e('Single Event Page', 'modern-events-calendar-lite'); ?></a>
                        <a href="<?php echo $this->main->add_qs_var('tab', 'MEC-single'); ?>#countdown_option"><?php _e('Countdown Options', 'modern-events-calendar-lite'); ?></a>
                        <a href="<?php echo $this->main->add_qs_var('tab', 'MEC-single'); ?>#exceptional_option"><?php _e('Exceptional Days', 'modern-events-calendar-lite'); ?></a>
                        <a href="<?php echo $this->main->add_qs_var('tab', 'MEC-single'); ?>#additional_organizers"><?php _e('Additional Organizers', 'modern-events-calendar-lite'); ?></a>
                        <a href="<?php echo $this->main->add_qs_var('tab', 'MEC-single'); ?>#additional_locations"><?php _e('Additional Locations', 'modern-events-calendar-lite'); ?></a>
                        <a href="<?php echo $this->main->add_qs_var('tab', 'MEC-single'); ?>#related_events"><?php _e('Related Events', 'modern-events-calendar-lite'); ?></a>
                    </li>
                </ul>
            </li>

            <?php if($this->main->getPRO()): ?>

                <li class="wns-be-group-menu-li">
                    <a href="<?php echo $this->main->add_qs_var('tab', 'MEC-booking'); ?>" id="" class="wns-be-group-tab-link-a">
                        <i class="mec-sl-credit-card"></i> 
                        <span class="wns-be-group-menu-title"><?php echo __('Booking', 'modern-events-calendar-lite'); ?></span>
                    </a>
                    <ul id="" class="submneu-hover">
                        <li class="submenu-item">
                            <a href="<?php echo $this->main->add_qs_var('tab', 'MEC-booking'); ?>#booking_option"><?php _e('Booking', 'modern-events-calendar-lite'); ?></a>
                            <?php if(isset($this->settings['booking_status']) and $this->settings['booking_status']): ?>
                                <a href="<?php echo $this->main->add_qs_var('tab', 'MEC-booking'); ?>#coupon_option"><?php _e('Coupons', 'modern-events-calendar-lite'); ?></a>
                                <a href="<?php echo $this->main->add_qs_var('tab', 'MEC-booking'); ?>#taxes_option"><?php _e('Taxes / Fees', 'modern-events-calendar-lite'); ?></a>
                                <a href="<?php echo $this->main->add_qs_var('tab', 'MEC-booking'); ?>#ticket_variations_option"><?php _e('Ticket Variations & Options', 'modern-events-calendar-lite'); ?></a>
                            <?php endif; ?>
                        </li>
                    </ul>
                </li>

            <?php endif; ?>

            <li class="wns-be-group-menu-li">
                <a href="<?php echo $this->main->add_qs_var('tab', 'MEC-modules'); ?>" id="" class="wns-be-group-tab-link-a">
                    <i class="mec-sl-grid"></i> 
                    <span class="wns-be-group-menu-title"><?php echo __('Modules', 'modern-events-calendar-lite'); ?></span>
                </a>
                <ul id="" class="submneu-hover">
                    <li class="submenu-item">
                        <a href="<?php echo $this->main->add_qs_var('tab', 'MEC-modules'); ?>#speakers_option"><?php _e('Speakers', 'modern-events-calendar-lite'); ?></a>
                        <?php if($this->main->getPRO()): ?>
                            <a href="<?php echo $this->main->add_qs_var('tab', 'MEC-modules'); ?>#googlemap_option"><?php _e('Google Maps Options', 'modern-events-calendar-lite'); ?></a>
                        <?php endif; ?>
                        <a href="<?php echo $this->main->add_qs_var('tab', 'MEC-modules'); ?>#export_module_option"><?php _e('Export Options', 'modern-events-calendar-lite'); ?></a>
                        <a href="<?php echo $this->main->add_qs_var('tab', 'MEC-modules'); ?>#time_module_option"><?php _e('Local Time', 'modern-events-calendar-lite'); ?></a>
                        <?php if($this->main->getPRO()): ?>
                            <a href="<?php echo $this->main->add_qs_var('tab', 'MEC-modules'); ?>#qrcode_module_option"><?php _e('QR Code', 'modern-events-calendar-lite'); ?></a>
                            <a href="<?php echo $this->main->add_qs_var('tab', 'MEC-modules'); ?>#weather_module_option"><?php _e('Weather', 'modern-events-calendar-lite'); ?></a>
                        <?php endif; ?>
                        <a href="<?php echo $this->main->add_qs_var('tab', 'MEC-modules'); ?>#social_options"><?php _e('Social Networks', 'modern-events-calendar-lite'); ?></a>
                        <a href="<?php echo $this->main->add_qs_var('tab', 'MEC-modules'); ?>#next_event_option"><?php _e('Next Event', 'modern-events-calendar-lite'); ?></a>
                        <?php if($this->main->getPRO()): ?>
                            <a href="<?php echo $this->main->add_qs_var('tab', 'MEC-modules'); ?>#buddy_option"><?php _e('BuddyPress Integration', 'modern-events-calendar-lite'); ?></a>
                        <?php endif; ?>
                    </li>
                </ul>
            </li>

            <?php if($this->main->getPRO() and isset($this->settings['booking_status']) and $this->settings['booking_status']): ?>

                <li class="wns-be-group-menu-li">
                    <a href="<?php echo $this->main->add_qs_var('tab', 'MEC-reg-form'); ?>" id="" class="wns-be-group-tab-link-a">
                        <i class="mec-sl-layers"></i> 
                        <span class="wns-be-group-menu-title"><?php _e('Booking Form', 'modern-events-calendar-lite'); ?></span>
                    </a>
                </li>

                <li class="wns-be-group-menu-li">
                    <a href="<?php echo $this->main->add_qs_var('tab', 'MEC-gateways'); ?>" id="" class="wns-be-group-tab-link-a">
                        <i class="mec-sl-wallet"></i> 
                        <span class="wns-be-group-menu-title"><?php _e('Payment Gateways', 'modern-events-calendar-lite'); ?></span>
                    </a>
                </li>
                
            <?php endif;?>

            <li class="wns-be-group-menu-li active">
                <a href="<?php echo $this->main->add_qs_var('tab', 'MEC-notifications'); ?>" id="" class="wns-be-group-tab-link-a">
                    <span class="extra-icon">
                        <i class="mec-sl-arrow-down"></i>
                    </span>
                    <i class="mec-sl-envelope"></i> 
                    <span class="wns-be-group-menu-title"><?php _e('Notifications', 'modern-events-calendar-lite'); ?></span>
                </a>

                <ul id="" class="subsection" style="display: block;">
                    <?php if($this->main->getPRO() and isset($this->settings['booking_status']) and $this->settings['booking_status']): ?>
                    <li id="" class="pr-be-group-menu-li active">
                        <a data-id="booking_notification" class="wns-be-group-tab-link-a WnTabLinks">
                            <span class="pr-be-group-menu-title"><?php _e('Booking', 'modern-events-calendar-lite'); ?></span>
                        </a>
                    </li>

                    <li id="" class="pr-be-group-menu-li">
                        <a data-id="booking_verification" class="wns-be-group-tab-link-a WnTabLinks">
                            <span class="pr-be-group-menu-title"><?php _e('Booking Verification', 'modern-events-calendar-lite'); ?></span>
                        </a>
                    </li>

                    <li id="" class="pr-be-group-menu-li">
                        <a data-id="booking_confirmation" class="wns-be-group-tab-link-a WnTabLinks">
                            <span class="pr-be-group-menu-title"><?php _e('Booking Confirmation', 'modern-events-calendar-lite'); ?></span>
                        </a>
                    </li>

                    <li id="" class="pr-be-group-menu-li">
                        <a data-id="cancellation_notification" class="wns-be-group-tab-link-a WnTabLinks">
                            <span class="pr-be-group-menu-title"><?php _e('Booking Cancellation', 'modern-events-calendar-lite'); ?></span>
                        </a>
                    </li>

                    <li id="" class="pr-be-group-menu-li">
                        <a data-id="admin_notification" class="wns-be-group-tab-link-a WnTabLinks">
                            <span class="pr-be-group-menu-title"><?php _e('Admin', 'modern-events-calendar-lite'); ?></span>
                        </a>
                    </li>

                    <li id="" class="pr-be-group-menu-li">
                        <a data-id="booking_reminder" class="wns-be-group-tab-link-a WnTabLinks">
                            <span class="pr-be-group-menu-title"><?php _e('Booking Reminder', 'modern-events-calendar-lite'); ?></span>
                        </a>
                    </li>
                    <?php endif;?>
                    <li id="" class="pr-be-group-menu-li <?php if($this->settings['booking_status'] == 0) echo 'active'; ?>">
                        <a data-id="new_event" class="wns-be-group-tab-link-a WnTabLinks">
                            <span class="pr-be-group-menu-title"><?php _e('New Event', 'modern-events-calendar-lite'); ?></span>
                        </a>
                    </li>

                </ul>
                
            </li>

            <li class="wns-be-group-menu-li">
                <a href="<?php echo $this->main->add_qs_var('tab', 'MEC-styling'); ?>" id="" class="wns-be-group-tab-link-a">
                    <i class="mec-sl-equalizer"></i> 
                    <span class="wns-be-group-menu-title"><?php _e('Styling Options', 'modern-events-calendar-lite'); ?></span>
                </a>
            </li>

            <li class="wns-be-group-menu-li">
                <a href="<?php echo $this->main->add_qs_var('tab', 'MEC-customcss'); ?>" id="" class="wns-be-group-tab-link-a">
                    <i class="mec-sl-wrench"></i> 
                    <span class="wns-be-group-menu-title"><?php _e('Custom CSS', 'modern-events-calendar-lite'); ?></span>
                </a>
            </li>

            <li class="wns-be-group-menu-li">
                <a href="<?php echo $this->main->add_qs_var('tab', 'MEC-messages'); ?>" id="" class="wns-be-group-tab-link-a">
                    <i class="mec-sl-bubble"></i> 
                    <span class="wns-be-group-menu-title"><?php _e('Messages', 'modern-events-calendar-lite'); ?></span>
                </a>
            </li>

            <li class="wns-be-group-menu-li">
                <a href="<?php echo $this->main->add_qs_var('tab', 'MEC-ie'); ?>" id="" class="wns-be-group-tab-link-a">
                    <i class="mec-sl-refresh"></i> 
                    <span class="wns-be-group-menu-title"><?php _e('Import / Export', 'modern-events-calendar-lite'); ?></span>
                </a>
            </li>

        </ul>
    </div>


    <div class="wns-be-main">
        <div id="wns-be-notification"></div>
        <div id="wns-be-content">
            <div class="wns-be-group-tab">
                <div class="mec-container">

                    <form id="mec_notifications_form">

                        <!-- <ul> -->
                        <?php if($this->main->getPRO() and isset($this->settings['booking_status']) and $this->settings['booking_status']): ?>

                        <div id="booking_notification" class="mec-options-fields active">

                            <h4 class="mec-form-subtitle"><?php _e('Booking', 'modern-events-calendar-lite'); ?></h4>
                            <div class="mec-form-row">
                                <label>
                                    <input type="hidden" name="mec[notifications][booking_notification][status]" value="0" />
                                    <input onchange="jQuery('#mec_notification_booking_notification_container_toggle').toggle();" value="1" type="checkbox" name="mec[notifications][booking_notification][status]" <?php if(!isset($notifications['booking_notification']['status']) or (isset($notifications['booking_notification']['status']) and $notifications['booking_notification']['status'])) echo 'checked="checked"'; ?> /> <?php _e('Enable booking notification', 'modern-events-calendar-lite'); ?>
                                </label>
                            </div>
                            <div id="mec_notification_booking_notification_container_toggle" class="<?php if(isset($notifications['booking_notification']) and isset($notifications['booking_notification']['status']) and !$notifications['booking_notification']['status']) echo 'mec-util-hidden'; ?>">
                                <p class="description"><?php _e('It sends to attendee after booking for notifying him/her.', 'modern-events-calendar-lite'); ?></p>
                                <div class="mec-form-row">
                                    <label for="mec_notifications_booking_notification_subject"><?php _e('Email Subject', 'modern-events-calendar-lite'); ?></label>
                                    <input type="text" name="mec[notifications][booking_notification][subject]" id="mec_notifications_booking_notification_subject" value="<?php echo (isset($notifications['booking_notification']['subject']) ? stripslashes($notifications['booking_notification']['subject']) : ''); ?>" />
                                </div>
                                <div class="mec-form-row">
                                    <label for="mec_notifications_booking_notification_recipients"><?php _e('Custom Recipients', 'modern-events-calendar-lite'); ?></label>
                                    <input type="text" name="mec[notifications][booking_notification][recipients]" id="mec_notifications_booking_notification_recipients" value="<?php echo (isset($notifications['booking_notification']['recipients']) ? $notifications['booking_notification']['recipients'] : ''); ?>" />
                                    <span class="mec-tooltip">
                                        <div class="box top">
                                            <h5 class="title"><?php _e('Custom Recipients', 'modern-events-calendar-lite'); ?></h5>
                                            <div class="content"><p><?php esc_attr_e('Insert comma separated emails for multiple recipients.', 'modern-events-calendar-lite'); ?><a href="https://webnus.net/dox/modern-events-calendar/notifications/" target="_blank"><?php _e('Read More', 'modern-events-calendar-lite'); ?></a></p></div>    
                                        </div>
                                        <i title="" class="dashicons-before dashicons-editor-help"></i>
                                    </span> 
                                </div>
                                <div class="mec-form-row">
                                    <input type="checkbox" name="mec[notifications][booking_notification][send_to_organizer]" value="1" id="mec_notifications_booking_notification_send_to_organizer" <?php echo ((isset($notifications['booking_notification']['send_to_organizer']) and $notifications['booking_notification']['send_to_organizer'] == 1) ? 'checked="checked"' : ''); ?> />
                                    <label for="mec_notifications_booking_notification_send_to_organizer"><?php _e('Send the email to event organizer', 'modern-events-calendar-lite'); ?></label>
                                </div>
                                <div class="mec-form-row">
                                    <label for="mec_notifications_booking_notification_content"><?php _e('Email Content', 'modern-events-calendar-lite'); ?></label>
                                    <?php wp_editor((isset($notifications['booking_notification']) ? stripslashes($notifications['booking_notification']['content']) : ''), 'mec_notifications_booking_notification_content', array('textarea_name'=>'mec[notifications][booking_notification][content]')); ?>
                                </div>
                                <p class="description"><?php _e('You can use following placeholders', 'modern-events-calendar-lite'); ?></p>
                                <ul>
                                    <li><span>%%first_name%%</span>: <?php _e('First name of attendee', 'modern-events-calendar-lite'); ?></li>
                                    <li><span>%%last_name%%</span>: <?php _e('Last name of attendee', 'modern-events-calendar-lite'); ?></li>
                                    <li><span>%%user_email%%</span>: <?php _e('Email of attendee', 'modern-events-calendar-lite'); ?></li>
                                    <li><span>%%book_date%%</span>: <?php _e('Booked date of event', 'modern-events-calendar-lite'); ?></li>
                                    <li><span>%%book_time%%</span>: <?php _e('Booked time of event', 'modern-events-calendar-lite'); ?></li>
                                    <li><span>%%book_price%%</span>: <?php _e('Booking Price', 'modern-events-calendar-lite'); ?></li>
                                    <li><span>%%blog_name%%</span>: <?php _e('Your website title', 'modern-events-calendar-lite'); ?></li>
                                    <li><span>%%blog_url%%</span>: <?php _e('Your website URL', 'modern-events-calendar-lite'); ?></li>
                                    <li><span>%%blog_description%%</span>: <?php _e('Your website description', 'modern-events-calendar-lite'); ?></li>
                                    <li><span>%%event_title%%</span>: <?php _e('Event title', 'modern-events-calendar-lite'); ?></li>
                                    <li><span>%%event_link%%</span>: <?php _e('Event link', 'modern-events-calendar-lite'); ?></li>
                                    <li><span>%%event_speaker_name%%</span>: <?php _e('Speaker name of booked event', 'modern-events-calendar-lite'); ?></li>
                                    <li><span>%%event_organizer_name%%</span>: <?php _e('Organizer name of booked event', 'modern-events-calendar-lite'); ?></li>
                                    <li><span>%%event_organizer_tel%%</span>: <?php _e('Organizer tel of booked event', 'modern-events-calendar-lite'); ?></li>
                                    <li><span>%%event_organizer_email%%</span>: <?php _e('Organizer email of booked event', 'modern-events-calendar-lite'); ?></li>
                                    <li><span>%%event_location_name%%</span>: <?php _e('Location name of booked event', 'modern-events-calendar-lite'); ?></li>
                                    <li><span>%%event_location_address%%</span>: <?php _e('Location address of booked event', 'modern-events-calendar-lite'); ?></li>
                                    <li><span>%%attendees_full_info%%</span>: <?php _e('Full Attendee info such as booking form data, name, email etc.', 'modern-events-calendar-lite'); ?></li>
                                    <li><span>%%invoice_link%%</span>: <?php _e('Invoice Link', 'modern-events-calendar-lite'); ?></li>
                                    <li><span>%%total_attendees%%</span>: <?php _e('Total Attendees', 'modern-events-calendar-lite'); ?></li>
                                    <li><span>%%ticket_name%%</span>: <?php _e('Ticket name', 'modern-events-calendar-lite'); ?></li>
                                    <li><span>%%ticket_time%%</span>: <?php _e('Ticket time', 'modern-events-calendar-lite'); ?></li>
                                    <li><span>%%ics_link%%</span>: <?php _e('Download ICS file', 'modern-events-calendar-lite'); ?></li>
                                    <li><span>%%google_calendar_link%%</span>: <?php _e('Add to Google Calendar', 'modern-events-calendar-lite'); ?></li>
                                </ul>
                            </div>
                        </div>

                        <div id="booking_verification" class="mec-options-fields">

                            <h4 class="mec-form-subtitle"><?php _e('Booking Verification', 'modern-events-calendar-lite'); ?></h4>
                            <p class="description"><?php _e('It sends to attendee email for verifying their booking/email.', 'modern-events-calendar-lite'); ?></p>
                            <div class="mec-form-row">
                                <label for="mec_notifications_email_verification_subject"><?php _e('Email Subject', 'modern-events-calendar-lite'); ?></label>
                                <input type="text" name="mec[notifications][email_verification][subject]" id="mec_notifications_email_verification_subject" value="<?php echo (isset($notifications['email_verification']['subject']) ? stripslashes($notifications['email_verification']['subject']) : ''); ?>" />
                            </div>
                            <div class="mec-form-row">
                                <label for="mec_notifications_email_verification_recipients"><?php _e('Custom Recipients', 'modern-events-calendar-lite'); ?></label>
                                <input type="text" name="mec[notifications][email_verification][recipients]" id="mec_notifications_email_verification_recipients" value="<?php echo (isset($notifications['email_verification']['recipients']) ? $notifications['email_verification']['recipients'] : ''); ?>" />
                                <span class="mec-tooltip">
                                    <div class="box top">
                                        <h5 class="title"><?php _e('Custom Recipients', 'modern-events-calendar-lite'); ?></h5>
                                        <div class="content"><p><?php esc_attr_e('Insert comma separated emails for multiple recipients.', 'modern-events-calendar-lite'); ?><a href="https://webnus.net/dox/modern-events-calendar/notifications/" target="_blank"><?php _e('Read More', 'modern-events-calendar-lite'); ?></a></p></div>    
                                    </div>
                                    <i title="" class="dashicons-before dashicons-editor-help"></i>
                                </span>
                            </div>
                            <div class="mec-form-row">
                                <label for="mec_notifications_email_verification_content"><?php _e('Email Content', 'modern-events-calendar-lite'); ?></label>
                                <?php wp_editor((isset($notifications['email_verification']) ? stripslashes($notifications['email_verification']['content']) : ''), 'mec_notifications_email_verification_content', array('textarea_name'=>'mec[notifications][email_verification][content]')); ?>
                            </div>
                            <p class="description"><?php _e('You can use following placeholders', 'modern-events-calendar-lite'); ?></p>
                            <ul>
                                <li><span>%%first_name%%</span>: <?php _e('First name of attendee', 'modern-events-calendar-lite'); ?></li>
                                <li><span>%%last_name%%</span>: <?php _e('Last name of attendee', 'modern-events-calendar-lite'); ?></li>
                                <li><span>%%user_email%%</span>: <?php _e('Email of attendee', 'modern-events-calendar-lite'); ?></li>
                                <li><span>%%book_date%%</span>: <?php _e('Booked date of event', 'modern-events-calendar-lite'); ?></li>
                                <li><span>%%book_time%%</span>: <?php _e('Booked time of event', 'modern-events-calendar-lite'); ?></li>
                                <li><span>%%book_price%%</span>: <?php _e('Booking Price', 'modern-events-calendar-lite'); ?></li>
                                <li><span>%%blog_name%%</span>: <?php _e('Your website title', 'modern-events-calendar-lite'); ?></li>
                                <li><span>%%blog_url%%</span>: <?php _e('Your website URL', 'modern-events-calendar-lite'); ?></li>
                                <li><span>%%blog_description%%</span>: <?php _e('Your website description', 'modern-events-calendar-lite'); ?></li>
                                <li><span>%%event_title%%</span>: <?php _e('Event title', 'modern-events-calendar-lite'); ?></li>
                                <li><span>%%event_link%%</span>: <?php _e('Event link', 'modern-events-calendar-lite'); ?></li>
                                <li><span>%%event_speaker_name%%</span>: <?php _e('Speaker name of booked event', 'modern-events-calendar-lite'); ?></li>
                                <li><span>%%event_organizer_name%%</span>: <?php _e('Organizer name of booked event', 'modern-events-calendar-lite'); ?></li>
                                <li><span>%%event_organizer_tel%%</span>: <?php _e('Organizer tel of booked event', 'modern-events-calendar-lite'); ?></li>
                                <li><span>%%event_organizer_email%%</span>: <?php _e('Organizer email of booked event', 'modern-events-calendar-lite'); ?></li>
                                <li><span>%%event_location_name%%</span>: <?php _e('Location name of booked event', 'modern-events-calendar-lite'); ?></li>
                                <li><span>%%event_location_address%%</span>: <?php _e('Location address of booked event', 'modern-events-calendar-lite'); ?></li>
                                <li><span>%%verification_link%%</span>: <?php _e('Email/Booking verification link.', 'modern-events-calendar-lite'); ?></li>
                                <li><span>%%total_attendees%%</span>: <?php _e('Total Attendees', 'modern-events-calendar-lite'); ?></li>
                                <li><span>%%ticket_name%%</span>: <?php _e('Ticket name', 'modern-events-calendar-lite'); ?></li>
                                <li><span>%%ticket_time%%</span>: <?php _e('Ticket time', 'modern-events-calendar-lite'); ?></li>
                                <li><span>%%ics_link%%</span>: <?php _e('Download ICS file', 'modern-events-calendar-lite'); ?></li>
                                <li><span>%%google_calendar_link%%</span>: <?php _e('Add to Google Calendar', 'modern-events-calendar-lite'); ?></li>
                            </ul>

                        </div>

                        <div id="booking_confirmation" class="mec-options-fields">

                            <h4 class="mec-form-subtitle"><?php _e('Booking Confirmation', 'modern-events-calendar-lite'); ?></h4>
                            <p class="description"><?php _e('It sends to attendee after confirming the booking by admin.', 'modern-events-calendar-lite'); ?></p>
                            <div class="mec-form-row">
                                <label for="mec_notifications_booking_confirmation_subject"><?php _e('Email Subject', 'modern-events-calendar-lite'); ?></label>
                                <input type="text" name="mec[notifications][booking_confirmation][subject]" id="mec_notifications_booking_confirmation_subject" value="<?php echo (isset($notifications['booking_confirmation']['subject']) ? stripslashes($notifications['booking_confirmation']['subject']) : ''); ?>" />
                            </div>
                            <div class="mec-form-row">
                                <label for="mec_notifications_booking_confirmation_recipients"><?php _e('Custom Recipients', 'modern-events-calendar-lite'); ?></label>
                                <input type="text" name="mec[notifications][booking_confirmation][recipients]" id="mec_notifications_booking_confirmation_recipients" value="<?php echo (isset($notifications['booking_confirmation']['recipients']) ? $notifications['booking_confirmation']['recipients'] : ''); ?>" />
                                <span class="mec-tooltip">
                                    <div class="box top">
                                        <h5 class="title"><?php _e('Custom Recipients', 'modern-events-calendar-lite'); ?></h5>
                                        <div class="content"><p><?php esc_attr_e('Insert comma separated emails for multiple recipients.', 'modern-events-calendar-lite'); ?><a href="https://webnus.net/dox/modern-events-calendar/notifications/" target="_blank"><?php _e('Read More', 'modern-events-calendar-lite'); ?></a></p></div>    
                                    </div>
                                    <i title="" class="dashicons-before dashicons-editor-help"></i>
                                </span>
                            </div>
                            <div class="mec-form-row">
                                <label for="mec_notifications_booking_confirmation_content"><?php _e('Email Content', 'modern-events-calendar-lite'); ?></label>
                                <?php wp_editor((isset($notifications['booking_confirmation']) ? stripslashes($notifications['booking_confirmation']['content']) : ''), 'mec_notifications_booking_confirmation_content', array('textarea_name'=>'mec[notifications][booking_confirmation][content]')); ?>
                            </div>
                            <p class="description"><?php _e('You can use following placeholders', 'modern-events-calendar-lite'); ?></p>
                            <ul>
                                <li><span>%%first_name%%</span>: <?php _e('First name of attendee', 'modern-events-calendar-lite'); ?></li>
                                <li><span>%%last_name%%</span>: <?php _e('Last name of attendee', 'modern-events-calendar-lite'); ?></li>
                                <li><span>%%user_email%%</span>: <?php _e('Email of attendee', 'modern-events-calendar-lite'); ?></li>
                                <li><span>%%book_date%%</span>: <?php _e('Booked date of event', 'modern-events-calendar-lite'); ?></li>
                                <li><span>%%book_time%%</span>: <?php _e('Booked time of event', 'modern-events-calendar-lite'); ?></li>
                                <li><span>%%book_price%%</span>: <?php _e('Booking Price', 'modern-events-calendar-lite'); ?></li>
                                <li><span>%%blog_name%%</span>: <?php _e('Your website title', 'modern-events-calendar-lite'); ?></li>
                                <li><span>%%blog_url%%</span>: <?php _e('Your website URL', 'modern-events-calendar-lite'); ?></li>
                                <li><span>%%blog_description%%</span>: <?php _e('Your website description', 'modern-events-calendar-lite'); ?></li>
                                <li><span>%%event_title%%</span>: <?php _e('Event title', 'modern-events-calendar-lite'); ?></li>
                                <li><span>%%event_link%%</span>: <?php _e('Event link', 'modern-events-calendar-lite'); ?></li>
                                <li><span>%%event_speaker_name%%</span>: <?php _e('Speaker name of booked event', 'modern-events-calendar-lite'); ?></li>
                                <li><span>%%event_organizer_name%%</span>: <?php _e('Organizer name of booked event', 'modern-events-calendar-lite'); ?></li>
                                <li><span>%%event_organizer_tel%%</span>: <?php _e('Organizer tel of booked event', 'modern-events-calendar-lite'); ?></li>
                                <li><span>%%event_organizer_email%%</span>: <?php _e('Organizer email of booked event', 'modern-events-calendar-lite'); ?></li>
                                <li><span>%%event_location_name%%</span>: <?php _e('Location name of booked event', 'modern-events-calendar-lite'); ?></li>
                                <li><span>%%event_location_address%%</span>: <?php _e('Location address of booked event', 'modern-events-calendar-lite'); ?></li>
                                <li><span>%%cancellation_link%%</span>: <?php _e('Booking cancellation link.', 'modern-events-calendar-lite'); ?></li>
                                <li><span>%%invoice_link%%</span>: <?php _e('Invoice Link', 'modern-events-calendar-lite'); ?></li>
                                <li><span>%%total_attendees%%</span>: <?php _e('Total Attendees', 'modern-events-calendar-lite'); ?></li>
                                <li><span>%%ticket_name%%</span>: <?php _e('Ticket name', 'modern-events-calendar-lite'); ?></li>
                                <li><span>%%ticket_time%%</span>: <?php _e('Ticket time', 'modern-events-calendar-lite'); ?></li>
                                <li><span>%%ics_link%%</span>: <?php _e('Download ICS file', 'modern-events-calendar-lite'); ?></li>
                                <li><span>%%google_calendar_link%%</span>: <?php _e('Add to Google Calendar', 'modern-events-calendar-lite'); ?></li>
                            </ul>

                        </div>

                        <div id="cancellation_notification" class="mec-options-fields">
                            <h4 class="mec-form-subtitle"><?php _e('Booking Cancellation', 'modern-events-calendar-lite'); ?></h4>
                            <div class="mec-form-row">
                                <label>
                                    <input type="hidden" name="mec[notifications][cancellation_notification][status]" value="0" />
                                    <input onchange="jQuery('#mec_notification_cancellation_notification_container_toggle').toggle();" value="1" type="checkbox" name="mec[notifications][cancellation_notification][status]" <?php if((isset($notifications['cancellation_notification']['status']) and $notifications['cancellation_notification']['status'])) echo 'checked="checked"'; ?> /> <?php _e('Enable cancellation notification', 'modern-events-calendar-lite'); ?>
                                </label>
                            </div>
                            <div id="mec_notification_cancellation_notification_container_toggle" class="<?php if((isset($notifications['cancellation_notification']) and !$notifications['cancellation_notification']['status']) or !isset($notifications['cancellation_notification'])) echo 'mec-util-hidden'; ?>">
                                <p class="description"><?php _e('It sends to selected recipients after booking cancellation for notifying them.', 'modern-events-calendar-lite'); ?></p>
                                <div class="mec-form-row">
                                    <label for="mec_notifications_cancellation_notification_subject"><?php _e('Email Subject', 'modern-events-calendar-lite'); ?></label>
                                    <input type="text" name="mec[notifications][cancellation_notification][subject]" id="mec_notifications_cancellation_notification_subject" value="<?php echo (isset($notifications['cancellation_notification']['subject']) ? stripslashes($notifications['cancellation_notification']['subject']) : 'Your booking is canceled.'); ?>" />
                                </div>
                                <div class="mec-form-row">
                                    <label for="mec_notifications_cancellation_notification_recipients"><?php _e('Custom Recipients', 'modern-events-calendar-lite'); ?></label>
                                    <input type="text" name="mec[notifications][cancellation_notification][recipients]" id="mec_notifications_cancellation_notification_recipients" value="<?php echo (isset($notifications['cancellation_notification']['recipients']) ? $notifications['cancellation_notification']['recipients'] : ''); ?>" />
                                    <span class="mec-tooltip">
                                        <div class="box top">
                                            <h5 class="title"><?php _e('Custom Recipients', 'modern-events-calendar-lite'); ?></h5>
                                            <div class="content"><p><?php esc_attr_e('Insert comma separated emails for multiple recipients.', 'modern-events-calendar-lite'); ?><a href="https://webnus.net/dox/modern-events-calendar/notifications/" target="_blank"><?php _e('Read More', 'modern-events-calendar-lite'); ?></a></p></div>    
                                        </div>
                                        <i title="" class="dashicons-before dashicons-editor-help"></i>
                                    </span>
                                </div>
                                <div class="mec-form-row">
                                    <input type="checkbox" name="mec[notifications][cancellation_notification][send_to_admin]" value="1" id="mec_notifications_cancellation_notification_send_to_admin" <?php echo ((!isset($notifications['cancellation_notification']['send_to_admin']) or $notifications['cancellation_notification']['send_to_admin'] == 1) ? 'checked="checked"' : ''); ?> />
                                    <label for="mec_notifications_cancellation_notification_send_to_admin"><?php _e('Send the email to admin', 'modern-events-calendar-lite'); ?></label>
                                </div>
                                <div class="mec-form-row">
                                    <input type="checkbox" name="mec[notifications][cancellation_notification][send_to_organizer]" value="1" id="mec_notifications_cancellation_notification_send_to_organizer" <?php echo ((isset($notifications['cancellation_notification']['send_to_organizer']) and $notifications['cancellation_notification']['send_to_organizer'] == 1) ? 'checked="checked"' : ''); ?> />
                                    <label for="mec_notifications_cancellation_notification_send_to_organizer"><?php _e('Send the email to event organizer', 'modern-events-calendar-lite'); ?></label>
                                </div>
                                <div class="mec-form-row">
                                    <input type="checkbox" name="mec[notifications][cancellation_notification][send_to_user]" value="1" id="mec_notifications_cancellation_notification_send_to_user" <?php echo ((isset($notifications['cancellation_notification']['send_to_user']) and $notifications['cancellation_notification']['send_to_user'] == 1) ? 'checked="checked"' : ''); ?> />
                                    <label for="mec_notifications_cancellation_notification_send_to_user"><?php _e('Send the email to booking user', 'modern-events-calendar-lite'); ?></label>
                                </div>
                                <div class="mec-form-row">
                                    <label for="mec_notifications_cancellation_notification_content"><?php _e('Email Content', 'modern-events-calendar-lite'); ?></label>
                                    <?php wp_editor((isset($notifications['cancellation_notification']) ? stripslashes($notifications['cancellation_notification']['content']) : ''), 'mec_notifications_cancellation_notification_content', array('textarea_name'=>'mec[notifications][cancellation_notification][content]')); ?>
                                </div>
                                <p class="description"><?php _e('You can use following placeholders', 'modern-events-calendar-lite'); ?></p>
                                <ul>
                                    <li><span>%%first_name%%</span>: <?php _e('First name of attendee', 'modern-events-calendar-lite'); ?></li>
                                    <li><span>%%last_name%%</span>: <?php _e('Last name of attendee', 'modern-events-calendar-lite'); ?></li>
                                    <li><span>%%user_email%%</span>: <?php _e('Email of attendee', 'modern-events-calendar-lite'); ?></li>
                                    <li><span>%%book_date%%</span>: <?php _e('Booked date of event', 'modern-events-calendar-lite'); ?></li>
                                    <li><span>%%book_time%%</span>: <?php _e('Booked time of event', 'modern-events-calendar-lite'); ?></li>
                                    <li><span>%%book_price%%</span>: <?php _e('Booking Price', 'modern-events-calendar-lite'); ?></li>
                                    <li><span>%%blog_name%%</span>: <?php _e('Your website title', 'modern-events-calendar-lite'); ?></li>
                                    <li><span>%%blog_url%%</span>: <?php _e('Your website URL', 'modern-events-calendar-lite'); ?></li>
                                    <li><span>%%blog_description%%</span>: <?php _e('Your website description', 'modern-events-calendar-lite'); ?></li>
                                    <li><span>%%event_title%%</span>: <?php _e('Event title', 'modern-events-calendar-lite'); ?></li>
                                    <li><span>%%event_link%%</span>: <?php _e('Event link', 'modern-events-calendar-lite'); ?></li>
                                    <li><span>%%event_speaker_name%%</span>: <?php _e('Speaker name of booked event', 'modern-events-calendar-lite'); ?></li>
                                    <li><span>%%event_organizer_name%%</span>: <?php _e('Organizer name of booked event', 'modern-events-calendar-lite'); ?></li>
                                    <li><span>%%event_organizer_tel%%</span>: <?php _e('Organizer tel of booked event', 'modern-events-calendar-lite'); ?></li>
                                    <li><span>%%event_organizer_email%%</span>: <?php _e('Organizer email of booked event', 'modern-events-calendar-lite'); ?></li>
                                    <li><span>%%event_location_name%%</span>: <?php _e('Location name of booked event', 'modern-events-calendar-lite'); ?></li>
                                    <li><span>%%event_location_address%%</span>: <?php _e('Location address of booked event', 'modern-events-calendar-lite'); ?></li>
                                    <li><span>%%admin_link%%</span>: <?php _e('Admin booking management link.', 'modern-events-calendar-lite'); ?></li>
                                    <li><span>%%attendees_full_info%%</span>: <?php _e('Full Attendee info such as booking form data, name, email etc.', 'modern-events-calendar-lite'); ?></li>
                                    <li><span>%%total_attendees%%</span>: <?php _e('Total Attendees', 'modern-events-calendar-lite'); ?></li>
                                </ul>
                            </div>
                        </div>

                        <div id="admin_notification" class="mec-options-fields">

                            <h4 class="mec-form-subtitle"><?php _e('Admin', 'modern-events-calendar-lite'); ?></h4>
                            <div class="mec-form-row">
                                <label>
                                    <input type="hidden" name="mec[notifications][admin_notification][status]" value="0" />
                                    <input onchange="jQuery('#mec_notification_admin_notification_container_toggle').toggle();" value="1" type="checkbox" name="mec[notifications][admin_notification][status]" <?php if(!isset($notifications['admin_notification']['status']) or (isset($notifications['admin_notification']['status']) and $notifications['admin_notification']['status'])) echo 'checked="checked"'; ?> /> <?php _e('Enable admin notification', 'modern-events-calendar-lite'); ?>
                                </label>
                            </div>
                            <div id="mec_notification_admin_notification_container_toggle" class="<?php if(isset($notifications['admin_notification']) and isset($notifications['admin_notification']['status']) and !$notifications['admin_notification']['status']) echo 'mec-util-hidden'; ?>">
                                <p class="description"><?php _e('It sends to admin to notify him/her that a new booking received.', 'modern-events-calendar-lite'); ?></p>
                                <div class="mec-form-row">
                                    <label for="mec_notifications_admin_notification_subject"><?php _e('Email Subject', 'modern-events-calendar-lite'); ?></label>
                                    <input type="text" name="mec[notifications][admin_notification][subject]" id="mec_notifications_admin_notification_subject" value="<?php echo (isset($notifications['admin_notification']['subject']) ? stripslashes($notifications['admin_notification']['subject']) : ''); ?>" />
                                </div>
                                <div class="mec-form-row">
                                    <label for="mec_notifications_admin_notification_recipients"><?php _e('Custom Recipients', 'modern-events-calendar-lite'); ?></label>
                                    <input type="text" name="mec[notifications][admin_notification][recipients]" id="mec_notifications_admin_notification_recipients" value="<?php echo (isset($notifications['admin_notification']['recipients']) ? $notifications['admin_notification']['recipients'] : ''); ?>" />
                                    <span class="mec-tooltip">
                                        <div class="box top">
                                            <h5 class="title"><?php _e('Custom Recipients', 'modern-events-calendar-lite'); ?></h5>
                                            <div class="content"><p><?php esc_attr_e('Insert comma separated emails for multiple recipients.', 'modern-events-calendar-lite'); ?><a href="https://webnus.net/dox/modern-events-calendar/notifications/" target="_blank"><?php _e('Read More', 'modern-events-calendar-lite'); ?></a></p></div>    
                                        </div>
                                        <i title="" class="dashicons-before dashicons-editor-help"></i>
                                    </span>
                                </div>
                                <div class="mec-form-row">
                                    <input type="checkbox" name="mec[notifications][admin_notification][send_to_organizer]" value="1" id="mec_notifications_admin_notification_send_to_organizer" <?php echo ((isset($notifications['admin_notification']['send_to_organizer']) and $notifications['admin_notification']['send_to_organizer'] == 1) ? 'checked="checked"' : ''); ?> />
                                    <label for="mec_notifications_admin_notification_send_to_organizer"><?php _e('Send the email to event organizer', 'modern-events-calendar-lite'); ?></label>
                                </div>
                                <div class="mec-form-row">
                                    <label for="mec_notifications_admin_notification_content"><?php _e('Email Content', 'modern-events-calendar-lite'); ?></label>
                                    <?php wp_editor((isset($notifications['admin_notification']) ? stripslashes($notifications['admin_notification']['content']) : ''), 'mec_notifications_admin_notification_content', array('textarea_name'=>'mec[notifications][admin_notification][content]')); ?>
                                </div>
                                <p class="description"><?php _e('You can use following placeholders', 'modern-events-calendar-lite'); ?></p>
                                <ul>
                                    <li><span>%%first_name%%</span>: <?php _e('First name of attendee', 'modern-events-calendar-lite'); ?></li>
                                    <li><span>%%last_name%%</span>: <?php _e('Last name of attendee', 'modern-events-calendar-lite'); ?></li>
                                    <li><span>%%user_email%%</span>: <?php _e('Email of attendee', 'modern-events-calendar-lite'); ?></li>
                                    <li><span>%%book_date%%</span>: <?php _e('Booked date of event', 'modern-events-calendar-lite'); ?></li>
                                    <li><span>%%book_time%%</span>: <?php _e('Booked time of event', 'modern-events-calendar-lite'); ?></li>
                                    <li><span>%%book_price%%</span>: <?php _e('Booking Price', 'modern-events-calendar-lite'); ?></li>
                                    <li><span>%%blog_name%%</span>: <?php _e('Your website title', 'modern-events-calendar-lite'); ?></li>
                                    <li><span>%%blog_url%%</span>: <?php _e('Your website URL', 'modern-events-calendar-lite'); ?></li>
                                    <li><span>%%blog_description%%</span>: <?php _e('Your website description', 'modern-events-calendar-lite'); ?></li>
                                    <li><span>%%event_title%%</span>: <?php _e('Event title', 'modern-events-calendar-lite'); ?></li>
                                    <li><span>%%event_link%%</span>: <?php _e('Event link', 'modern-events-calendar-lite'); ?></li>
                                    <li><span>%%event_speaker_name%%</span>: <?php _e('Speaker name of booked event', 'modern-events-calendar-lite'); ?></li>
                                    <li><span>%%event_organizer_name%%</span>: <?php _e('Organizer name of booked event', 'modern-events-calendar-lite'); ?></li>
                                    <li><span>%%event_organizer_tel%%</span>: <?php _e('Organizer tel of booked event', 'modern-events-calendar-lite'); ?></li>
                                    <li><span>%%event_organizer_email%%</span>: <?php _e('Organizer email of booked event', 'modern-events-calendar-lite'); ?></li>
                                    <li><span>%%event_location_name%%</span>: <?php _e('Location name of booked event', 'modern-events-calendar-lite'); ?></li>
                                    <li><span>%%event_location_address%%</span>: <?php _e('Location address of booked event', 'modern-events-calendar-lite'); ?></li>
                                    <li><span>%%admin_link%%</span>: <?php _e('Admin booking management link.', 'modern-events-calendar-lite'); ?></li>
                                    <li><span>%%attendees_full_info%%</span>: <?php _e('Full Attendee info such as booking form data, name, email etc.', 'modern-events-calendar-lite'); ?></li>
                                    <li><span>%%total_attendees%%</span>: <?php _e('Total Attendees', 'modern-events-calendar-lite'); ?></li>
                                </ul>
                            </div>
                        </div>

                        <div id="booking_reminder" class="mec-options-fields">

                            <h4 class="mec-form-subtitle"><?php _e('Booking Reminder', 'modern-events-calendar-lite'); ?></h4>
                            <div class="mec-form-row">
                                <label>
                                    <input type="hidden" name="mec[notifications][booking_reminder][status]" value="0" />
                                    <input onchange="jQuery('#mec_notification_booking_reminder_container_toggle').toggle();" value="1" type="checkbox" name="mec[notifications][booking_reminder][status]" <?php if(isset($notifications['booking_reminder']) and $notifications['booking_reminder']['status']) echo 'checked="checked"'; ?> /> <?php _e('Enable booking reminder notification', 'modern-events-calendar-lite'); ?>
                                </label>
                            </div>
                            <div id="mec_notification_booking_reminder_container_toggle" class="<?php if((isset($notifications['booking_reminder']) and !$notifications['booking_reminder']['status']) or !isset($notifications['booking_reminder'])) echo 'mec-util-hidden'; ?>">
                                <div class="mec-form-row">
                                    <?php $cron = MEC_ABSPATH.'app'.DS.'crons'.DS.'booking-reminder.php'; ?>
                                    <p class="mec-col-12"><strong><?php _e('Important Note', 'modern-events-calendar-lite'); ?>: </strong><?php echo sprintf(__("Set a cronjob to call %s file once per day otherwise it won't send the reminders. Please note that you should call this file %s otherwise it may send the reminders multiple times.", 'modern-events-calendar-lite'), '<code>'.$cron.'</code>', '<strong>'.__('only once per day', 'modern-events-calendar-lite').'</strong>'); ?></p>
                                </div>
                                <div class="mec-form-row">
                                    <label for="mec_notifications_booking_reminder_subject"><?php _e('Email Subject', 'modern-events-calendar-lite'); ?></label>
                                    <input type="text" name="mec[notifications][booking_reminder][subject]" id="mec_notifications_booking_reminder_subject" value="<?php echo ((isset($notifications['booking_reminder']) and isset($notifications['booking_reminder']['subject'])) ? stripslashes($notifications['booking_reminder']['subject']) : ''); ?>" />
                                </div>
                                <div class="mec-form-row">
                                    <label for="mec_notifications_booking_reminder_recipients"><?php _e('Custom Recipients', 'modern-events-calendar-lite'); ?></label>
                                    <input type="text" name="mec[notifications][booking_reminder][recipients]" id="mec_notifications_booking_reminder_recipients" value="<?php echo ((isset($notifications['booking_reminder']) and isset($notifications['booking_reminder']['recipients'])) ? $notifications['booking_reminder']['recipients'] : ''); ?>" />
                                    <span class="mec-tooltip">
                                        <div class="box top">
                                            <h5 class="title"><?php _e('Custom Recipients', 'modern-events-calendar-lite'); ?></h5>
                                            <div class="content"><p><?php esc_attr_e('Insert comma separated emails for multiple recipients.', 'modern-events-calendar-lite'); ?><a href="https://webnus.net/dox/modern-events-calendar/notifications/" target="_blank"><?php _e('Read More', 'modern-events-calendar-lite'); ?></a></p></div>    
                                        </div>
                                        <i title="" class="dashicons-before dashicons-editor-help"></i>
                                    </span>
                                </div>
                                <div class="mec-form-row">
                                    <label for="mec_notifications_booking_reminder_days"><?php _e('Days', 'modern-events-calendar-lite'); ?></label>
                                    <input type="text" name="mec[notifications][booking_reminder][days]" id="mec_notifications_booking_reminder_days" value="<?php echo ((isset($notifications['booking_reminder']) and isset($notifications['booking_reminder']['days'])) ? $notifications['booking_reminder']['days'] : '1,3,7'); ?>" />
                                    <span class="mec-tooltip">
                                        <div class="box top">
                                            <h5 class="title"><?php _e('Custom Recipients', 'modern-events-calendar-lite'); ?></h5>
                                            <div class="content"><p><?php esc_attr_e('Insert comma separated emails for multiple recipients.', 'modern-events-calendar-lite'); ?><a href="https://webnus.net/dox/modern-events-calendar/notifications/" target="_blank"><?php _e('Read More', 'modern-events-calendar-lite'); ?></a></p></div>    
                                        </div>
                                        <i title="" class="dashicons-before dashicons-editor-help"></i>
                                    </span>
                                </div>
                                <div class="mec-form-row">
                                    <label for="mec_notifications_booking_reminder_content"><?php _e('Email Content', 'modern-events-calendar-lite'); ?></label>
                                    <?php wp_editor((isset($notifications['booking_reminder']) ? stripslashes($notifications['booking_reminder']['content']) : ''), 'mec_notifications_booking_reminder_content', array('textarea_name'=>'mec[notifications][booking_reminder][content]')); ?>
                                </div>
                                <p class="description"><?php _e('You can use following placeholders', 'modern-events-calendar-lite'); ?></p>
                                <ul>
                                    <li><span>%%first_name%%</span>: <?php _e('First name of attendee', 'modern-events-calendar-lite'); ?></li>
                                    <li><span>%%last_name%%</span>: <?php _e('Last name of attendee', 'modern-events-calendar-lite'); ?></li>
                                    <li><span>%%user_email%%</span>: <?php _e('Email of attendee', 'modern-events-calendar-lite'); ?></li>
                                    <li><span>%%book_date%%</span>: <?php _e('Booked date of event', 'modern-events-calendar-lite'); ?></li>
                                    <li><span>%%book_time%%</span>: <?php _e('Booked time of event', 'modern-events-calendar-lite'); ?></li>
                                    <li><span>%%book_price%%</span>: <?php _e('Booking Price', 'modern-events-calendar-lite'); ?></li>
                                    <li><span>%%blog_name%%</span>: <?php _e('Your website title', 'modern-events-calendar-lite'); ?></li>
                                    <li><span>%%blog_url%%</span>: <?php _e('Your website URL', 'modern-events-calendar-lite'); ?></li>
                                    <li><span>%%blog_description%%</span>: <?php _e('Your website description', 'modern-events-calendar-lite'); ?></li>
                                    <li><span>%%event_title%%</span>: <?php _e('Event title', 'modern-events-calendar-lite'); ?></li>
                                    <li><span>%%event_link%%</span>: <?php _e('Event link', 'modern-events-calendar-lite'); ?></li>
                                    <li><span>%%event_speaker_name%%</span>: <?php _e('Speaker name of booked event', 'modern-events-calendar-lite'); ?></li>
                                    <li><span>%%event_organizer_name%%</span>: <?php _e('Organizer name of booked event', 'modern-events-calendar-lite'); ?></li>
                                    <li><span>%%event_organizer_tel%%</span>: <?php _e('Organizer tel of booked event', 'modern-events-calendar-lite'); ?></li>
                                    <li><span>%%event_organizer_email%%</span>: <?php _e('Organizer email of booked event', 'modern-events-calendar-lite'); ?></li>
                                    <li><span>%%event_location_name%%</span>: <?php _e('Location name of booked event', 'modern-events-calendar-lite'); ?></li>
                                    <li><span>%%event_location_address%%</span>: <?php _e('Location address of booked event', 'modern-events-calendar-lite'); ?></li>
                                    <li><span>%%cancellation_link%%</span>: <?php _e('Booking cancellation link.', 'modern-events-calendar-lite'); ?></li>
                                    <li><span>%%invoice_link%%</span>: <?php _e('Invoice Link', 'modern-events-calendar-lite'); ?></li>
                                    <li><span>%%total_attendees%%</span>: <?php _e('Total Attendees', 'modern-events-calendar-lite'); ?></li>
                                    <li><span>%%ticket_name%%</span>: <?php _e('Ticket name', 'modern-events-calendar-lite'); ?></li>
                                    <li><span>%%ticket_time%%</span>: <?php _e('Ticket time', 'modern-events-calendar-lite'); ?></li>
                                    <li><span>%%ics_link%%</span>: <?php _e('Download ICS file', 'modern-events-calendar-lite'); ?></li>
                                    <li><span>%%google_calendar_link%%</span>: <?php _e('Add to Google Calendar', 'modern-events-calendar-lite'); ?></li>
                                </ul>
                            </div>
                        </div>

                        <?php endif; ?>

                        <div id="new_event" class="mec-options-fields  <?php if($this->settings['booking_status'] == 0) echo 'active'; ?>">

                            <h4 class="mec-form-subtitle"><?php _e('New Event', 'modern-events-calendar-lite'); ?></h4>
                            <div class="mec-form-row">
                                <label>
                                    <input type="hidden" name="mec[notifications][new_event][status]" value="0" />
                                    <input onchange="jQuery('#mec_notification_new_event_container_toggle').toggle();" value="1" type="checkbox" name="mec[notifications][new_event][status]" <?php if(isset($notifications['new_event']['status']) and $notifications['new_event']['status']) echo 'checked="checked"'; ?> /> <?php _e('Enable new event notification', 'modern-events-calendar-lite'); ?>
                                </label>
                            </div>
                            <div id="mec_notification_new_event_container_toggle" class="<?php if((isset($notifications['new_event']) and !$notifications['new_event']['status']) or !isset($notifications['new_event'])) echo 'mec-util-hidden'; ?>">
                                <p class="description"><?php _e('It sends after adding a new event from frontend event submission or from website backend.', 'modern-events-calendar-lite'); ?></p>
                                <div class="mec-form-row">
                                    <label for="mec_notifications_new_event_subject"><?php _e('Email Subject', 'modern-events-calendar-lite'); ?></label>
                                    <input type="text" name="mec[notifications][new_event][subject]" id="mec_notifications_new_event_subject" value="<?php echo (isset($notifications['new_event']['subject']) ? stripslashes($notifications['new_event']['subject']) : ''); ?>" />
                                </div>
                                <div class="mec-form-row">
                                    <label for="mec_notifications_new_event_recipients"><?php _e('Custom Recipients', 'modern-events-calendar-lite'); ?></label>
                                    <input type="text" name="mec[notifications][new_event][recipients]" id="mec_notifications_new_event_recipients" value="<?php echo (isset($notifications['new_event']['recipients']) ? $notifications['new_event']['recipients'] : ''); ?>" />
                                    <span class="mec-tooltip">
                                        <div class="box top">
                                            <h5 class="title"><?php _e('Custom Recipients', 'modern-events-calendar-lite'); ?></h5>
                                            <div class="content"><p><?php esc_attr_e('Insert comma separated emails for multiple recipients.', 'modern-events-calendar-lite'); ?><a href="https://webnus.net/dox/modern-events-calendar/notifications/" target="_blank"><?php _e('Read More', 'modern-events-calendar-lite'); ?></a></p></div>    
                                        </div>
                                        <i title="" class="dashicons-before dashicons-editor-help"></i>
                                    </span>                                             
                                </div>
                                <div class="mec-form-row">
                                    <label for="mec_notifications_new_event_content"><?php _e('Email Content', 'modern-events-calendar-lite'); ?></label>
                                    <?php wp_editor((isset($notifications['new_event']) ? stripslashes($notifications['new_event']['content']) : ''), 'mec_notifications_new_event_content', array('textarea_name'=>'mec[notifications][new_event][content]')); ?>
                                </div>
                                <p class="description"><?php _e('You can use following placeholders', 'modern-events-calendar-lite'); ?></p>
                                <ul>
                                    <li><span>%%event_title%%</span>: <?php _e('Title of event', 'modern-events-calendar-lite'); ?></li>
                                    <li><span>%%event_link%%</span>: <?php _e('Link of event', 'modern-events-calendar-lite'); ?></li>
                                    <li><span>%%event_status%%</span>: <?php _e('Status of event', 'modern-events-calendar-lite'); ?></li>
                                    <li><span>%%event_note%%</span>: <?php _e('Event Note', 'modern-events-calendar-lite'); ?></li>
                                    <li><span>%%blog_name%%</span>: <?php _e('Your website title', 'modern-events-calendar-lite'); ?></li>
                                    <li><span>%%blog_url%%</span>: <?php _e('Your website URL', 'modern-events-calendar-lite'); ?></li>
                                    <li><span>%%blog_description%%</span>: <?php _e('Your website description', 'modern-events-calendar-lite'); ?></li>
                                    <li><span>%%admin_link%%</span>: <?php _e('Admin events management link.', 'modern-events-calendar-lite'); ?></li>
                                </ul>
                            </div>

                        </div>

                        <!-- </ul> -->

                        <div class="mec-options-fields">
                            <?php wp_nonce_field('mec_options_form'); ?>
                            <button style="display: none;" id="mec_notifications_form_button" class="button button-primary mec-button-primary" type="submit"><?php _e('Save Changes', 'modern-events-calendar-lite'); ?></button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>



    <div id="wns-be-footer">
        <a href="" id="" class="dpr-btn dpr-save-btn"><?php _e('Save Changes', 'modern-events-calendar-lite'); ?></a>
    </div>

</div>

<script type="text/javascript">
jQuery(document).ready(function()
{
    jQuery(".dpr-save-btn").on('click', function(event)
    {
        event.preventDefault();
        jQuery("#mec_notifications_form_button").trigger('click');
    });
});

jQuery("#mec_notifications_form").on('submit', function(event)
{
    event.preventDefault();
    
    jQuery("#mec_notifications_booking_notification_content-html").click();
    jQuery("#mec_notifications_booking_notification_content-tmce").click();
    
    jQuery("#mec_notifications_email_verification_content-html").click();
    jQuery("#mec_notifications_email_verification_content-tmce").click();
    
    jQuery("#mec_notifications_booking_confirmation_content-html").click();
    jQuery("#mec_notifications_booking_confirmation_content-tmce").click();
    
    jQuery("#mec_notifications_admin_notification_content-html").click();
    jQuery("#mec_notifications_admin_notification_content-tmce").click();

    jQuery("#mec_notifications_booking_reminder_content-html").click();
    jQuery("#mec_notifications_booking_reminder_content-tmce").click();

    jQuery("#mec_notifications_new_event_content-html").click();
    jQuery("#mec_notifications_new_event_content-tmce").click();

});
</script>

<script type="text/javascript">
jQuery(document).ready(function()
{   
    jQuery('.WnTabLinks').each(function()
    {
        var ContentId = jQuery(this).attr('data-id');
         jQuery(this).click(function()
         {
            jQuery('.pr-be-group-menu-li').removeClass('active');
            jQuery(this).parent().addClass('active');
            jQuery(".mec-options-fields").hide();
            jQuery(".mec-options-fields").removeClass('active');
            jQuery("#"+ContentId+"").show();
            jQuery("#"+ContentId+"").addClass('active');
            jQuery('html, body').animate({
                scrollTop: jQuery("#"+ContentId+"").offset().top - 140
            }, 300);
        });
        var hash = window.location.hash.replace('#', '');
        jQuery('[data-id="'+hash+'"]').trigger('click');
    });
   
    jQuery(".wns-be-sidebar .pr-be-group-menu-li").on('click', function(event)
    {
        jQuery(".wns-be-sidebar .pr-be-group-menu-li").removeClass('active');
        jQuery(this).addClass('active');
    });
});

jQuery("#mec_notifications_form").on('submit', function(event)
{
    event.preventDefault();
    
    // Add loading Class to the button
    jQuery(".dpr-save-btn").addClass('loading').text("<?php echo esc_js(esc_attr__('Saved', 'modern-events-calendar-lite')); ?>");
    jQuery('<div class="wns-saved-settings"><?php echo esc_js(esc_attr__('Settings Saved!', 'modern-events-calendar-lite')); ?></div>').insertBefore('#wns-be-content');

    if(jQuery(".mec-purchase-verify").text() != '<?php echo esc_js(esc_attr__('Verified', 'modern-events-calendar-lite')); ?>')
    {
        jQuery(".mec-purchase-verify").text("<?php echo esc_js(esc_attr__('Checking ...', 'modern-events-calendar-lite')); ?>");
    }
    
    var settings = jQuery("#mec_notifications_form").serialize();
    jQuery.ajax(
    {
        type: "POST",
        url: ajaxurl,
        data: "action=mec_save_settings&"+settings,
        beforeSend: function () {
            jQuery('.wns-be-main').append('<div class="mec-loarder-wrap mec-settings-loader"><div class="mec-loarder"><div></div><div></div><div></div></div></div>');
        },
        success: function(data)
        {
            // Remove the loading Class to the button
            setTimeout(function()
            {
                jQuery(".dpr-save-btn").removeClass('loading').text("<?php echo esc_js(esc_attr__('Save Changes', 'modern-events-calendar-lite')); ?>");
                jQuery('.wns-saved-settings').remove();
                jQuery('.mec-loarder-wrap').remove();
                if(jQuery(".mec-purchase-verify").text() != '<?php echo esc_js(esc_attr__('Verified', 'modern-events-calendar-lite')); ?>')
                {
                    jQuery(".mec-purchase-verify").text("<?php echo esc_js(esc_attr__('Please Refresh Page', 'modern-events-calendar-lite')); ?>");
                }
            }, 1000);
        },
        error: function(jqXHR, textStatus, errorThrown)
        {
            // Remove the loading Class to the button
            setTimeout(function()
            {
                jQuery(".dpr-save-btn").removeClass('loading').text("<?php echo esc_js(esc_attr__('Save Changes', 'modern-events-calendar-lite')); ?>");
                jQuery('.wns-saved-settings').remove();
                jQuery('.mec-loarder-wrap').remove();
            }, 1000);
        }
    });
});

</script>
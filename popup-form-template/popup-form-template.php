<?php

if (!defined('ABSPATH')) {
    exit;
}
// Popup Form Template
function wp_bookings_multi_step_form()
{
    // ob_start();
?>
    <div class="open-popup" id="openPopup">
        <div class="booking-pop-up view-none" id="bookingPopup">
            <div>
                <img src="<?php echo plugin_dir_url(__DIR__) . 'assets/img/close.png' ?>" class="close-pop-up" id="closePopup" alt="">
                <!-- ---------------------Header-Start--------------------------- -->
                <h1 class="top-heading">Membership Booking</h1>
            </div>
            <div class="header-bg view-none" id="header">
                <div class="header">
                    <div class="steps">
                        <h2 class="step-number" id="stepOne">1</h2>
                        <h3 class="step-heading">Plan Type</h3>
                    </div>
                    <div class="steps">
                        <h2 class="step-number" id="stepTwo">2</h2>
                        <h3 class="step-heading">Agreement Details</h3>
                    </div>
                    <div class="steps">
                        <h2 class="step-number" id="stepThree">3</h2>
                        <h3 class="step-heading">Personal Information</h3>
                    </div>
                    <div class="steps">
                        <h2 class="step-number" id="stepFour">4</h2>
                        <h3 class="step-heading">Payment Information</h3>
                    </div>
                </div>
                <!-- ----------------------Plan-Info-Start-------------------------- -->
                <div class="booking-header-info" id="bookingHeaderInfo">
                    <div class="plan-info">
                        <h3>Plan Type</h3>
                        <div class="info">
                            <img src="<?php echo plugin_dir_url(__DIR__) . 'assets/img/private-office.png' ?>" alt="" id="pvtimg">
                            <h2 class="plan-type-name" id="planTypeName"></h2>
                        </div>
                    </div>
                    <div class="plan-info">
                        <h3>No. of People</h3>
                        <div class="info">
                            <img src="<?php echo plugin_dir_url(__DIR__) . 'assets/img/group.png' ?>" alt="" id="nop">
                            <h2 class="no-of-people" id="people">0</h2>
                        </div>
                    </div>
                    <div class="plan-info">
                        <h3>Start Date</h3>
                        <div class="info">
                            <img src="<?php echo plugin_dir_url(__DIR__) . 'assets/img/schedule.png' ?>" alt="">
                            <h2 class="start-date" id="startDate"></h2>
                        </div>
                    </div>
                    <div class="plan-info">
                        <h3>Duration</h3>
                        <div class="info">
                            <img src="<?php echo plugin_dir_url(__DIR__) . 'assets/img/hourglass.png' ?>" alt="">
                            <h2 class="plan-duration" id="duration"></h2>
                        </div>
                    </div>
                    <div class="plan-info" id="monthlycostheader">
                        <h3>Monthly Cost</h3>
                        <div class="info">
                            <h2><span class="spanbdt">BDT </span><span class="plan-monthly-cost" id="monthlyCost"></span>/-</h2>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ----------------------Plan-Info-End-------------------------- -->
            <!-- ----------------------Header-End--------------------------- -->
            <!-- ----------------------Private-Office-Start----------------------- -->
            <div class="private-office office private-workspace view-none" id="privateOfficePopup">
                <h2 id="privateOfficeTitle">Private Office</h2>
                <p>BDT</p>
                <hr>
                <div class="plan-selection">
                    <div class="">
                        <input type="radio" id="privateOfficePlanOne" name="chosen_plan" value="<?php echo esc_attr(get_theme_mod('private_office_price_one')); ?>" />
                        <label for="privateOfficePlanOne"><?php echo esc_html(get_theme_mod('private_office_duration_one')); ?></label><br>
                        <input type="radio" id="privateOfficePlanTwo" name="chosen_plan" value="<?php echo esc_attr(get_theme_mod('private_office_price_two')); ?>">
                        <label for="privateOfficePlanTwo"><?php echo esc_html(get_theme_mod('private_office_duration_two')); ?></label><br>
                        <input type="radio" id="privateOfficePlanThree" name="chosen_plan" value="<?php echo esc_attr(get_theme_mod('private_office_price_three')); ?>">
                        <label for="privateOfficePlanThree"><?php echo esc_html(get_theme_mod('private_office_duration_three')); ?></label><br>
                    </div>
                    <div class="values">
                        <p><?php echo esc_html(get_theme_mod('private_office_price_one')); ?>/-</p>
                        <p><?php echo esc_html(get_theme_mod('private_office_price_two')); ?>/-</p>
                        <p><?php echo esc_html(get_theme_mod('private_office_price_three')); ?>/-</p>
                    </div>
                </div>
                <hr>
                <div class="services">
                    <p>- 24/7 access</p>
                    <p>- Free wifi and wired internet</p>
                    <p>- Secured lockable room with storage</p>
                    <p>- Business Address (with 1 year agreement)</p>
                    <p>- Free access to all commons</p>
                    <p>- Bookable access to meeting rooms and event space</p>
                    <p>- Front desk service including printing, copying and admin support available</p>
                    <p>- 1 free espresso of your choice per day, and more</p>
                </div>
            </div>
            <!-- ----------------------Private-Office-End----------------------- -->
            <!-- ----------------------Team-Suite-Office-Start----------------------- -->
            <div class="team-office-suite office private-workspace view-none" id="teamOfficeSuitePopup">
                <h2 id="teamOfficeSuiteTitle">Team Office Suite</h2>
                <p>BDT</p>
                <hr>
                <div class="plan-selection">
                    <div class="">
                        <input type="radio" id="timeOfficeSuitePlan" name="chosen_plan" value="<?php echo esc_attr(get_theme_mod('team_office_suite_price')); ?>">
                        <label for="timeOfficeSuitePlan"><?php echo esc_html(get_theme_mod('team_office_suite_duration')); ?> <sub><?php echo esc_html(get_theme_mod('team_office_suite_duration_for_people')); ?></sub></label><br>
                    </div>
                    <div class="values">
                        <p><?php echo esc_html(get_theme_mod('team_office_suite_price')); ?>/-</p>
                    </div>
                </div>
                <hr>
                <div class="services">
                    <p>- 24/7 access</p>
                    <p>- Free wifi and wired internet</p>
                    <p>- Secured lockable room with storage</p>
                    <p>- Business Address (with 1 year agreement)</p>
                    <p>- Free access to all commons</p>
                    <p>- Bookable access to meeting rooms and event space</p>
                    <p>- Front desk service including printing, copying and admin support available</p>
                    <p>- 1 free espresso of your choice per day, and more</p>
                    <p>- Minimum 7 persons booking</p>
                </div>
            </div>
            <!-- ----------------------Team-Suite-Office-End----------------------- -->
            <!-- ----------------------Hybrid-Office-Start----------------------- -->
            <div class="hybrid-office office private-workspace view-none" id="hybridOfficePopup">
                <h2 id="hybridOfficeTitle">Hybrid Office</h2>
                <p>BDT</p>
                <hr>
                <div class="plan-selection">
                    <div class="">
                        <input type="radio" id="hybridOfficePlanOne" name="chosen_plan" value="<?php echo esc_attr(get_theme_mod('hybrid_office_price_one')); ?>">
                        <label for="hybridOfficePlanOne"><?php echo esc_html(get_theme_mod('hybrid_office_duration_one')); ?></label><br>
                        <input type="radio" id="hybridOfficePlanTwo" name="chosen_plan" value="<?php echo esc_attr(get_theme_mod('hybrid_office_price_two')); ?>">
                        <label for="hybridOfficePlanTwo"><?php echo esc_html(get_theme_mod('hybrid_office_duration_two')); ?></label><br>
                    </div>
                    <div class="values">
                        <p><?php echo esc_html(get_theme_mod('hybrid_office_price_one')); ?>/-</p>
                        <p><?php echo esc_html(get_theme_mod('hybrid_office_price_two')); ?>/-</p>

                    </div>
                </div>
                <hr>
                <div class="services">
                    <p>- 24/7 access</p>
                    <p>- Free wifi and wired internet</p>
                    <p>- Secured lockable room with storage</p>
                    <p>- Business Address (with 1 year agreement)</p>
                    <p>- Free access to all commons</p>
                    <p>- Bookable access to meeting rooms and event space</p>
                    <p>- Front desk service including printing, copying and admin support available</p>
                    <p>- 1 free espresso of your choice per day, and more</p>
                </div>
            </div>
            <!-- ----------------------Hybrid-Office-End----------------------- -->
            <!-- ----------------------Day-Office-Start----------------------- -->
            <div class="day-office office shared-workspace view-none" id="dayOfficePopup">
                <h2 id="dayOfficeTitle">Day Office</h2>
                <p>BDT</p>
                <hr>
                <div class="plan-selection">
                    <div class="">
                        <input type="radio" id="dayOfficePlanOne" name="chosen_plan" value="<?php echo esc_attr(get_theme_mod('day_office_price_one')); ?>">
                        <label for="dayOfficePlanOne"><?php echo esc_html(get_theme_mod('day_office_duration_one')); ?></label><br>
                        <input type="radio" id="dayOfficePlanTwo" name="chosen_plan" value="<?php echo esc_attr(get_theme_mod('day_office_price_two')); ?>">
                        <label for="dayOfficePlanTwo"><?php echo esc_html(get_theme_mod('day_office_duration_two')); ?></label><br>
                    </div>
                    <div class="values">
                        <p><?php echo esc_html(get_theme_mod('day_office_price_one')); ?>/-</p>
                        <p><?php echo esc_html(get_theme_mod('day_office_price_two')); ?>/-</p>

                    </div>
                </div>
                <hr>
                <div class="services">
                    <p>- 24/7 access</p>
                    <p>- Free wifi and wired internet</p>
                    <p>- Secured lockable room with storage</p>
                    <p>- Business Address (with 1 year agreement)</p>
                    <p>- Free access to all commons</p>
                    <p>- Bookable access to meeting rooms and event space</p>
                    <p>- Front desk service including printing, copying and admin support available</p>
                    <p>- 1 free espresso of your choice per day, and more</p>
                </div>
            </div>
            <!-- ----------------------Day-Office-End----------------------- -->
            <!-- ----------------------Dedicated-Desk-Start----------------------- -->
            <div class="dedicated-desk office shared-workspace view-none" id="dedicatedDeskPopup">
                <h2 id="dedicatedDeskTitle">Dedicated Desk</h2>
                <p>BDT</p>
                <hr>
                <div class="plan-selection">
                    <div class="">
                        <input type="radio" id="dedicatedDeskPlan" name="chosen_plan" value="<?php echo esc_attr(get_theme_mod('dedicated_desk_price')); ?>">
                        <label for="dedicatedDeskPlan"><?php echo esc_html(get_theme_mod('dedicated_desk_duration')); ?></label><br>
                    </div>
                    <div class="values">
                        <p><?php echo esc_html(get_theme_mod('dedicated_desk_price')); ?>/-</p>
                    </div>
                </div>
                <hr>
                <div class="services">
                    <p>- 24/7 access</p>
                    <p>- Free wifi and wired internet</p>
                    <p>- Secured lockable room with storage</p>
                    <p>- Business Address (with 1 year agreement)</p>
                    <p>- Free access to all commons</p>
                    <p>- Bookable access to meeting rooms and event space</p>
                    <p>- Front desk service including printing, copying and admin support available</p>
                    <p>- 1 free espresso of your choice per day, and more</p>
                </div>
            </div>
            <!-- ----------------------Dedicated-Desk-End----------------------- -->
            <!-- ----------------------Day-Pass-Start----------------------- -->
            <div class="day-pass office shared-workspace view-none" id="dayPassPopup">
                <h2 id="dayPassTitle">Day Pass</h2>
                <p>BDT</p>
                <hr>
                <div class="plan-selection">
                    <div class="">
                        <input type="radio" id="dayPassPlanOne" name="chosen_plan" value="<?php echo esc_attr(get_theme_mod('day_pass_price_one')); ?>">
                        <label for="dayPassPlanOne"><?php echo esc_html(get_theme_mod('day_pass_duration_one')); ?></label><br>
                        <input type="radio" id="dayPassPlanTwo" name="chosen_plan" value="<?php echo esc_attr(get_theme_mod('day_pass_price_two')); ?>">
                        <label for="dayPassPlanTwo"><?php echo esc_html(get_theme_mod('day_pass_duration_two')); ?></label><br>
                    </div>
                    <div class="values">
                        <p><?php echo esc_html(get_theme_mod('day_pass_price_one')); ?>/-</p>
                        <p><?php echo esc_html(get_theme_mod('day_pass_price_two')); ?>/-</p>
                    </div>
                </div>
                <hr>
                <div class="services">
                    <p>- 24/7 access</p>
                    <p>- Free wifi and wired internet</p>
                    <p>- Secured lockable room with storage</p>
                    <p>- Business Address (with 1 year agreement)</p>
                    <p>- Free access to all commons</p>
                    <p>- Bookable access to meeting rooms and event space</p>
                    <p>- Front desk service including printing, copying and admin support available</p>
                    <p>- 1 free espresso of your choice per day, and more</p>
                </div>
            </div>
            <!-- ----------------------Day-Pass-End----------------------- -->
            <!-- ----------------------Flexible-Desk-Start----------------------- -->
            <div class="flexible-desk office shared-workspace view-none" id="flexibleDeskPopup">
                <h2 id="flexibleDeskTitle">Flexible Desk</h2>
                <p>BDT</p>
                <hr>
                <div class="plan-selection">
                    <div class="">
                        <input type="radio" id="flexibleDeskPlanOne" name="chosen_plan" value="<?php echo esc_attr(get_theme_mod('flexible_desk_price_one')); ?>">
                        <label for="flexibleDeskPlanOne"><?php echo esc_html(get_theme_mod('flexible_desk_duration_one')); ?></label><br>
                        <input type="radio" id="flexibleDeskPlanTwo" name="chosen_plan" value="<?php echo esc_attr(get_theme_mod('flexible_desk_price_two')); ?>">
                        <label for="flexibleDeskPlanTwo"><?php echo esc_html(get_theme_mod('flexible_desk_duration_two')); ?></label><br>
                        <input type="radio" id="flexibleDeskPlanThree" name="chosen_plan" value="<?php echo esc_attr(get_theme_mod('flexible_desk_price_three')); ?>">
                        <label for="flexibleDeskPlanThree"><?php echo esc_html(get_theme_mod('flexible_desk_duration_three')); ?></label><br>
                    </div>
                    <div class="values">
                        <p><?php echo esc_html(get_theme_mod('flexible_desk_price_one')); ?>/-</p>
                        <p><?php echo esc_html(get_theme_mod('flexible_desk_price_two')); ?>/-</p>
                        <p><?php echo esc_html(get_theme_mod('flexible_desk_price_three')); ?>/-</p>
                    </div>
                </div>
                <hr>
                <div class="services">
                    <p>- 24/7 access</p>
                    <p>- Free wifi and wired internet</p>
                    <p>- Secured lockable room with storage</p>
                    <p>- Business Address (with 1 year agreement)</p>
                    <p>- Free access to all commons</p>
                    <p>- Bookable access to meeting rooms and event space</p>
                    <p>- Front desk service including printing, copying and admin support available</p>
                    <p>- 1 free espresso of your choice per day, and more</p>
                </div>
            </div>
            <!-- ----------------------Flexible-Desk-End----------------------- -->
            <!-- ----------------------Virtual-Office-Start----------------------- -->
            <div class="virtual-office office shared-workspace view-none" id="virtualOfficePopup">
                <h2 id="virtualOfficeTitle">Virtual Office</h2>
                <p>BDT</p>
                <hr>
                <div class="plan-selection">
                    <div class="">
                        <input type="radio" id="virtualOfficePlan" name="chosen_plan" value="<?php echo esc_attr(get_theme_mod('virtual_office_price')); ?>">
                        <label for="virtualOfficePlan"><?php echo esc_html(get_theme_mod('virtual_office_duration')); ?></label><br>
                    </div>
                    <div class="values">
                        <p><?php echo esc_html(get_theme_mod('virtual_office_price')); ?>/-</p>
                    </div>
                </div>
                <hr>
                <div class="services">
                    <p>- 24/7 access</p>
                    <p>- Free wifi and wired internet</p>
                    <p>- Secured lockable room with storage</p>
                    <p>- Business Address (with 1 year agreement)</p>
                    <p>- Free access to all commons</p>
                    <p>- Bookable access to meeting rooms and event space</p>
                    <p>- Front desk service including printing, copying and admin support available</p>
                    <p>- 1 free espresso of your choice per day, and more</p>
                </div>
            </div>
            <!-- ----------------------Virtual-Office-End----------------------- -->
            <!-- ----------------------Conference-Room-Start----------------------- -->
            <div class="conference-room office collaborative-workspace view-none" id="conferenceRoomPopup">
                <h2 id="conferenceRoomTitle">Conference Room</h2>
                <p>BDT</p>
                <hr>
                <div class="plan-selection">
                    <div class="">
                        <input type="radio" id="conferenceRoomPlan" name="chosen_plan" value="<?php echo esc_attr(get_theme_mod('conference_room_price')); ?>">
                        <label for="conferenceRoomPlan"><?php echo esc_html(get_theme_mod('conference_room_duration')); ?></label><br>
                    </div>
                    <div class="values">
                        <p><?php echo esc_html(get_theme_mod('conference_room_price')); ?>/-</p>
                    </div>
                </div>
                <hr>
                <div class="services">
                    <p>- 24/7 access</p>
                    <p>- Free wifi and wired internet</p>
                    <p>- Secured lockable room with storage</p>
                    <p>- Business Address (with 1 year agreement)</p>
                    <p>- Free access to all commons</p>
                    <p>- Bookable access to meeting rooms and event space</p>
                    <p>- Front desk service including printing, copying and admin support available</p>
                    <p>- 1 free espresso of your choice per day, and more</p>
                </div>
            </div>
            <!-- ----------------------Conference-Room-End----------------------- -->
            <!-- ----------------------Event-Space-Start----------------------- -->
            <div class="event-space office collaborative-workspace view-none" id="eventSpacePopup">
                <h2 id="eventSpaceTitle">Event Space</h2>
                <p>BDT</p>
                <hr>
                <div class="plan-selection">
                    <div class="">
                        <input type="radio" id="eventSpacePlan" name="chosen_plan" value="<?php echo esc_attr(get_theme_mod('event_space_price')); ?>">
                        <label for="eventSpacePlan"><?php echo esc_html(get_theme_mod('event_space_duration')); ?></label><br>
                    </div>
                    <div class="values">
                        <p><?php echo esc_html(get_theme_mod('event_space_price')); ?>/-</p>
                    </div>
                </div>
                <hr>
                <div class="services">
                    <p>- 24/7 access</p>
                    <p>- Free wifi and wired internet</p>
                    <p>- Secured lockable room with storage</p>
                    <p>- Business Address (with 1 year agreement)</p>
                    <p>- Free access to all commons</p>
                    <p>- Bookable access to meeting rooms and event space</p>
                    <p>- Front desk service including printing, copying and admin support available</p>
                    <p>- 1 free espresso of your choice per day, and more</p>
                </div>
            </div>
            <!-- ----------------------Event-Space-End----------------------- -->
            <!-- ----------------------Podcast-Studio-Start----------------------- -->
            <div class="podcast-studio office collaborative-workspace view-none" id="podcastStudioPopup">
                <h2 id="podcastStudioTitle">Podcast Studio</h2>
                <p>BDT</p>
                <hr>
                <div class="plan-selection">
                    <div class="">
                        <input type="radio" id="podcastStudioPlan" name="chosen_plan" value="<?php echo esc_attr(get_theme_mod('podcast_studio_price')); ?>">
                        <label for="podcastStudioPlan"><?php echo esc_html(get_theme_mod('podcast_studio_duration')); ?></label><br>
                    </div>
                    <div class="values">
                        <p><?php echo esc_html(get_theme_mod('podcast_studio_price')); ?>/-</p>
                    </div>
                </div>
                <hr>
                <div class="services">
                    <p>- 24/7 access</p>
                    <p>- Free wifi and wired internet</p>
                    <p>- Secured lockable room with storage</p>
                    <p>- Business Address (with 1 year agreement)</p>
                    <p>- Free access to all commons</p>
                    <p>- Bookable access to meeting rooms and event space</p>
                    <p>- Front desk service including printing, copying and admin support available</p>
                    <p>- 1 free espresso of your choice per day, and more</p>
                </div>
            </div>
            <!-- ----------------------Podcast-Studio-End----------------------- -->
            <!-- ----------------------Zoom-Call-Room-Start----------------------- -->
            <div class="zoom-call-room office collaborative-workspace view-none" id="zoomCallRoomPopup">
                <h2 id="zoomCallRoomTitle">Zoom Call Room</h2>
                <p>BDT</p>
                <hr>
                <div class="plan-selection">
                    <div class="">
                        <input type="radio" id="zoomCallRoomPlan" name="chosen_plan" value="<?php echo esc_attr(get_theme_mod('zoom_call_room_price')); ?>">
                        <label for="zoomCallRoomPlan"><?php echo esc_html(get_theme_mod('zoom_call_room_duration')); ?></label><br>
                    </div>
                    <div class="values">
                        <p><?php echo esc_html(get_theme_mod('zoom_call_room_price')); ?>/-</p>
                    </div>
                </div>
                <hr>
                <div class="services">
                    <p>- 24/7 access</p>
                    <p>- Free wifi and wired internet</p>
                    <p>- Secured lockable room with storage</p>
                    <p>- Business Address (with 1 year agreement)</p>
                    <p>- Free access to all commons</p>
                    <p>- Bookable access to meeting rooms and event space</p>
                    <p>- Front desk service including printing, copying and admin support available</p>
                    <p>- 1 free espresso of your choice per day, and more</p>
                </div>
            </div>
            <!-- ----------------------Zoom-Call-Room-End----------------------- -->
            <!-- ----------------------Color-Burst-Room-Start----------------------- -->
            <div class="color-burst-room office collaborative-workspace view-none" id="colorBurstRoomPopup">
                <h2 id="colorBurstRoomTitle">Color Burst Room</h2>
                <p>BDT</p>
                <hr>
                <div class="plan-selection">
                    <div class="">
                        <input type="radio" id="colorBurstRoomPlan" name="chosen_plan" value="<?php echo esc_attr(get_theme_mod('color_burst_room_price')); ?>">
                        <label for="colorBurstRoomPlan"><?php echo esc_html(get_theme_mod('color_burst_room_duration')); ?></label><br>
                    </div>
                    <div class="values">
                        <p><?php echo esc_html(get_theme_mod('color_burst_room_price')); ?>/-</p>
                    </div>
                </div>
                <hr>
                <div class="services">
                    <p>- 24/7 access</p>
                    <p>- Free wifi and wired internet</p>
                    <p>- Secured lockable room with storage</p>
                    <p>- Business Address (with 1 year agreement)</p>
                    <p>- Free access to all commons</p>
                    <p>- Bookable access to meeting rooms and event space</p>
                    <p>- Front desk service including printing, copying and admin support available</p>
                    <p>- 1 free espresso of your choice per day, and more</p>
                </div>
            </div>
            <!-- ----------------------Color-Burst-Room-End----------------------- -->
            <!-- ----------------------Alap-Room-Start----------------------- -->
            <div class="alap-room office collaborative-workspace view-none" id="alapRoomPopup">
                <h2 id="alapRoomTitle">Alap Room</h2>
                <p>BDT</p>
                <hr>
                <div class="plan-selection">
                    <div class="">
                        <input type="radio" id="alapRoomPlan" name="chosen_plan" value="<?php echo esc_attr(get_theme_mod('alap_room_price')); ?>">
                        <label for="alapRoomPlan"><?php echo esc_html(get_theme_mod('alap_room_duration')); ?></label><br>
                    </div>
                    <div class="values">
                        <p><?php echo esc_html(get_theme_mod('alap_room_price')); ?>/-</p>
                    </div>
                </div>
                <hr>
                <div class="services">
                    <p>- 24/7 access</p>
                    <p>- Free wifi and wired internet</p>
                    <p>- Secured lockable room with storage</p>
                    <p>- Business Address (with 1 year agreement)</p>
                    <p>- Free access to all commons</p>
                    <p>- Bookable access to meeting rooms and event space</p>
                    <p>- Front desk service including printing, copying and admin support available</p>
                    <p>- 1 free espresso of your choice per day, and more</p>
                </div>
            </div>
            <!-- ----------------------Alap-Room-End----------------------- -->
            <!-- ----------------------Alochona-Room-Start----------------------- -->
            <div class="alochona-room office collaborative-workspace view-none" id="alochonaRoomPopup">
                <h2 id="alochonaRoomTitle">Alochona Room</h2>
                <p>BDT</p>
                <hr>
                <div class="plan-selection">
                    <div class="">
                        <input type="radio" id="alochonaRoomPlan" name="chosen_plan" value="<?php echo esc_attr(get_theme_mod('alochona_room_price')); ?>">
                        <label for="alochonaRoomPlan"><?php echo esc_html(get_theme_mod('alochona_room_duration')); ?></label><br>
                    </div>
                    <div class="values">
                        <p><?php echo esc_html(get_theme_mod('alochona_room_price')); ?>/-</p>
                    </div>
                </div>
                <hr>
                <div class="services">
                    <p>- 24/7 access</p>
                    <p>- Free wifi and wired internet</p>
                    <p>- Secured lockable room with storage</p>
                    <p>- Business Address (with 1 year agreement)</p>
                    <p>- Free access to all commons</p>
                    <p>- Bookable access to meeting rooms and event space</p>
                    <p>- Front desk service including printing, copying and admin support available</p>
                    <p>- 1 free espresso of your choice per day, and more</p>
                </div>
            </div>
            <!-- ----------------------Alochona-Room-End----------------------- -->
            <!-- ----------------------Chosen-Plan-Overview-Start---------------------------------- -->
            <!-- ----------------------Selected-Office-or-Room-overview-Start---------------------- -->

            <div class="chosen-plan-overview view-none" id="chosenPlanOverview">
                <h1 id="selectedOfficeOrRoomType"></h1>
                <h3><span id="selectedPlanDuration"></span> booking</h3>
                <div class="others-plan-info">
                    <div class="">
                        <h4 class="opih4">Type Of Workspace*</h4>
                        <select class="selected-plan-overview" id="selectedPlanOverview" name="selectedPlanOverview">
                            <!-- ---------For-Private-Workspace---------- -->
                            <option id="optionPrivateOffice" value="Private Office">Private Office</option>
                            <option id="optionTeamOfficeSuite" value="Shuffle Team Office">Shuffle Team Office</option>
                            <option id="optionHybridOffice" value="Studio Office">Studio Office</option>
                            <!-- ---------For-Shared-Workspace---------- -->
                            <option id="optionDayOffice" value="Day Office">Day Office</option>
                            <option id="optionDedicatedDesk" value="Dedicated Desk">Dedicated Desk</option>
                            <option id="optionDayPass" value="Day Pass">Day Pass</option>
                            <option id="optionFlexibleDesk" value="Flexible Desk">Flexible Desk</option>
                            <option id="optionVirtualOffice" value="Virtual Office">Virtual Office</option>
                            <!-- ---------For-Collaborative-Workspace---------- -->
                            <option id="optionConferenceRoom" value="Conference Room">Conference Room</option>
                            <option id="optionEventRoom" value="Event Room">Event Room</option>
                            <option id="optionPodcastRoom" value="Podcast Room">Podcast Room</option>
                            <option id="optionZoomCallRoom" value="Zoom Call Room">Zoom Call Room</option>
                            <option id="optionColorBurstRoom" value="Color Burst Room">Color Burst Room</option>
                            <option id="optionAlapRoom" value="Alap Room">Alap Room</option>
                            <option id="optionAlochonaRoom" value="Alochona Room">Alochona Room</option>
                        </select>
                    </div>
                    <div class="">
                        <h4 class="opih4">Number of People*</h4>
                        <div class="people-quantity" id="peopleQuantity">
                            <p class="decrement" id="decrement">&#8722;</p>
                            <p class="people"><span id="zero">0</span><span id="noOfPeople">0</span></p>
                            <p class="increment" id="increment">&#x2B;</p>
                        </div>
                    </div>
                    <div class="">
                        <h4 class="opih4">Date*</h4>
                        <input class="date" type="date" id="date" name="date">
                    </div>
                </div>
                <!-- -------------Choose-a-Duraton-Start------------------- -->
                <div class="choose-duration">
                    <h2>Choose a duration</h2>
                    <div class="monthly-durations">
                        <h4 id="per">Monthly<br>BDT <span id="permonth">73500</span><br>per month</h4>
                        <h4 id="three">3 Months<br>BDT <span id="threemonth">73500</span><br>per month</h4>
                        <h4 id="six">6 Months<br>BDT <span id="sixmonth">73500</span><br>per month</h4>
                        <h4 id="twelve">12 Months<br>BDT <span id="twelvemonth">73500</span><br>per month</h4>
                    </div>
                </div>
                <!-- ---------------------Choose-a-Duraton-End------------------- -->
                <a class="back" id="chosenPlanBackBtn">Back</a>
                <a class="continue" id="chosenPlanContinueBtn">Continue</a>
            </div>
            <!-- ----------------------Selected-Office-or-Room-overview-End---------------------- -->
            <!-- ----------------------Chosen-Plan-Overview-End---------------------------------- -->
            <!-- ----------------------Main-Form-Start---------------------------------- -->

            <form id="wp-bookings-form" method="POST">
                <input type="hidden" name="action" value="wp_bookings_submit">
                <input type="hidden" name="booked_plan" id="bookedPlan" value="">
                <input type="hidden" name="booked_for_people" id="bookedForPeople" value="">
                <input type="hidden" name="booking_date" id="bookingDate" value="">
                <input type="hidden" name="sub_total" id="subTotal" value="">
                <input type="hidden" name="tax_vat" id="taxVat" value="">
                <input type="hidden" name="total" id="total" value="">
                <input type="hidden" name="security" value="<?php echo wp_create_nonce('wp_bookings_nonce'); ?>">
                <!-- ---------------------Personal-Details-Start-------------------- -->
                <div class="personal-details view-none" id="personalDetails">
                    <div class="personal-details-form">
                        <div class="" id="personal-details-field">
                            <h1>Enter Your Personal Details</h1>
                            <p class="required-fields-text">*Required Fields</p>

                            <input type="text" class="required-inputs" id="firstName" name="first_name" placeholder="First Name" required>
                            <br>
                            <input type="text" class="required-inputs" id="lastName" name="last_name" placeholder="Last Name" required>
                            <br>
                            <input type="email" class="required-inputs" id="email" name="email" placeholder="Email: example@gmail.com"
                                required>
                            <br>
                            <input type="tel" class="required-inputs" id="phone" name="phone" placeholder="Phone: +880" required>
                            <br>
                        </div>
                        <div class="" id="business-details-field">
                            <h1>Enter Your Business Details</h1>
                            <p class="required-fields-text">*Required Fields</p>
                            <input type="text" class="required-inputs" id="country" name="country" placeholder="Country*: e.g. 'Bangladesh'"
                                required>
                            <br>
                            <input type="text" class="required-inputs" id="companyName" name="company_name" placeholder="Company Name*" required>
                            <br>
                            <input type="text" class="required-inputs" id="address" name="address" placeholder="Address*" required>
                            <br>
                            <input type="text" class="required-inputs" id="apartment" name="apartment" placeholder="Apartment, Suite, etc*"
                                required>
                            <br>
                            <input type="text" class="required-inputs" id="cityTown" name="city_town" placeholder="City/Town*" required>
                            <br>
                            <input type="text" class="required-inputs" id="postcode" name="postcode" placeholder="Postcode*" required>
                            <br>
                        </div>
                    </div>
                    <div class="conditions-checkbox">
                        <input type="checkbox" class="terms-and-conditions" id="termsAndConditions" name="terms_conditions"
                            value="Agreed" required>
                        <label for="termsAndConditions" class="term-and-conditons-label">By selecting this you agree to our Terms &
                            Conditions and Privacy Policy</label>
                    </div>
                    <a class="back" id="personalDetailsBackBtn">Back</a>
                    <a class="continue" id="personalDetailsContinueBtn">Continue</a>
                </div>
                <!-- ---------------------Personal-Details-End-------------------- -->
                <!-- ---------------------Review-Payment-Details-Start-------------------- -->
                <div class="review-payment-details view-none" id="reviewPaymentDetails">
                    <h1 class="hh">Review Your Payment Details</h1>
                    <p class="pp">Your payment is calculated pro rata from your start date to the end of the month.
                        <br> you will be charged in BDT.
                    </p>
                    <p class="pp">A one year agreement term requires one months security deposit and the last month's advanced payment. The
                        security deposit will be returned to you at the end or upon cancellation of your term provided all dues are
                        paid. You will be asked to sign a physical version of your one year agreement contract with us upon your
                        arrival.</p>
                    <div class="monthly-payment">
                        <div class="first-monthly-payment">
                            <h2>First Monthly Payment</h2>
                            <h4>BDT</h4>
                            <div class="">
                                <h5>Initial month pro-rata*</h5>
                                <h5 id="reviewSubTotal"></h5>
                            </div>
                            <div class="">
                                <h5 class="taxvath5">Tax/VAT<sup>15%</sup></h5>
                                <h5 id="reviewTaxVat"></h5>
                            </div>
                            <hr class="fmhr">
                            <div class="">
                                <h5>Total amount due today</h5>
                                <h5 id="reviewTotal"></h5>
                            </div>
                        </div>
                        <div class="ongoing-monthly-payment">
                            <h2>Ongoing Monthly Payment</h2>
                            <h4>BDT</h4>
                            <div class="">
                                <h5>Subsequent month*</h5>
                                <h5 id="reviewSubsequentSubTotal"></h5>
                            </div>
                            <div class="">
                                <h5 class="taxvath5">Tax/VAT<sup>15%</sup></h5>
                                <h5 id="reviewSubsequentTaxVat"></h5>
                            </div>
                            <hr class="fmhr">
                            <div class="">
                                <h5 id="tsm">Total subsequent month</h5>
                                <h5 id="reviewSubsequentTotal"></h5>
                            </div>
                            <h6>Billed each month</h6>
                        </div>
                    </div>
                    <h3>*Excluding services</h3>
                    <hr id="pshr">
                    <div class="payment-radio">
                        <h3 class="view-none" id="paymentRadioInput">Please Select One</h3>
                        <input type="radio" class="payment-now" id="payNow" name="payment_option" value="paid" onclick=""><label class="payment-now" for="payNow">Pay now</label><br>
                        <input type="radio" id="payOnArrival" name="payment_option" value="pay on arrival" onclick=""><label class="payment-arrival" for="payOnArrival">Pay on arrival</label><br>
                    </div>
                    <a class="back" id="reviewPaymentDetailsBackBtn">Back</a>
                    <input type="submit" value="Booking Summary" class="continue" id="submit"><!--Rijone-->
            </form>
            <!-- ---------------------Main-Form-End----------------------- -->
        </div>
        <!-- ---------------------Review-Payment-Details-End-------------------- -->
        <!-- -------------------------Multi-Step-Form-End------------------------ -->
        <!-- --------------------Booking-details-overview-Start----------------------- -->
        <div class="booking-details-overview view-none" id="bookingSummary">
            <h1>Congratulations, <span id="bookerMemberName"></span><span>!</span> Your booking is now complete.</h1>
            <div class="booking-details">
                <div class="booking-confirmation">
                    <h3>Booking confirmation</h3>
                    <hr>
                    <div class="">
                        <img src="<?php echo plugin_dir_url(__DIR__) . 'assets/img/mail.png' ?>" alt="">
                        <p>In the next 10 minutes you'll receive an email containing your booking confirmation
                            and details at: <span class="booking-email bold-text" id="bookingEmail"></span></p>
                    </div>
                    <div class="">
                        <img src="<?php echo plugin_dir_url(__DIR__) . 'assets/img/member-card.png' ?>" alt="">
                        <p>Your Member ID is:
                            <br>
                            Your Booking ID is: <span class="booking-id bold-text" id="summaryBookingId"></span>
                        </p>
                    </div>
                    <div class="">
                        <img src="<?php echo plugin_dir_url(__DIR__) . 'assets/img/notepad.png' ?>" alt="">
                        <p>Please present this confirmation upon arrival.</p>
                    </div>
                    <div class="">
                        <img src="<?php echo plugin_dir_url(__DIR__) . 'assets/img/telephone.png' ?>" alt="">
                        <p>Contact Details: <span class="bold-text" id="contactEmail"></span> <br> <span class="bold-text" id="contactNumber"></span></p>
                    </div>
                </div>
                <div class="booking-plan-details">
                    <h3>Plan Details</h3>
                    <hr>
                    <div class="">
                        <img src="<?php echo plugin_dir_url(__DIR__) . 'assets/img/planning.png' ?>" alt="">
                        <p>Plan Type: <span class="bold-text" id="summaryBookedPlan"></span></p>
                    </div>
                    <div class="">
                        <img src="<?php echo plugin_dir_url(__DIR__) . 'assets/img/group.png' ?>" alt="">
                        <p>Number of People: <span class="bold-text" id="summaryBookedForPeople"></span></p>
                    </div>
                    <div class="">
                        <img src="<?php echo plugin_dir_url(__DIR__) . 'assets/img/date.png' ?>" alt="">
                        <p>Date: <span class="bold-text" id="summaryBookingDate"></span></p>
                    </div>
                    <div class="">
                        <img src="<?php echo plugin_dir_url(__DIR__) . 'assets/img/clock.png' ?>" alt="">
                        <p>Time and Duration <span class="bold-text" id="bookedForTime">13:00 - 16:00</span> [3 Hours]</p>
                    </div>
                    <div class="">
                        <img src="<?php echo plugin_dir_url(__DIR__) . 'assets/img/maps-and-flags.png' ?>" alt="">
                        <p>Location: Akota Coworking, 73A Gulshan Avenue, Dhaka- 1212</p>
                    </div>
                    <div class="">
                        <img src="<?php echo plugin_dir_url(__DIR__) . 'assets/img/skyscrapers.png' ?>" alt="">
                        <p>Neighborhod: Gulshan Avenue</p>
                    </div>
                </div>
                <div class="booking-payment-details">
                    <h3>Payment Details</h3>
                    <hr>
                    <div class="">
                        <img src="<?php echo plugin_dir_url(__DIR__) . 'assets/img/check-mark.png' ?>" alt="">
                        <p>Booking Status: <span class="bold-text">Your booking is <span id="bookingStatus">pay on arrival</span> and confirmed</span></p>
                    </div>
                    <div class="">
                        <img src="<?php echo plugin_dir_url(__DIR__) . 'assets/img/credit-card.png' ?>" alt="">
                        <p>Payment Method: Card holder name <span class="bold-text" id="bookerName">Member Name</span><br>Card/Payment type <span class="bold-text" id="paymentType">Master Card</span><br>Card number <span class="bold-text" id="cardNumber">xxx-000-xxx-000</span></p>
                    </div>
                    <div class="">
                        <img src="<?php echo plugin_dir_url(__DIR__) . 'assets/img/access-denied.png' ?>" alt="">
                        <p>Booking Conditions <span class="booking-condition bold-text">Non-refundable</span></p>
                    </div>
                </div>
            </div>
            <h2 class="ovh">You are now a part of our Akota Online Community!</h2>
            <h4 class="ovh">To activate your account, check you email and build your professional space.</h4>
            <a href="https://mail.google.com" target="_blank" rel="noopener noreferrer">
                <button class="check-email">Check Email</button>
            </a>
        </div>
    </div>
    <!-- --------------------Booking-details-overview-End----------------------- -->
    <script>
        document.getElementById('wp-bookings-form').addEventListener('submit', function(e) {
            e.preventDefault();
            const formData = new FormData(this);
            fetch('<?php echo admin_url('admin-ajax.php'); ?>', {
                    method: 'POST',
                    body: formData
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        const summaryBookingId = document.getElementById('summaryBookingId');
                        const bookingSummary = document.getElementById('bookingSummary');
                        const closePopup = document.getElementById('closePopup');
                        summaryBookingId.innerHTML = data.data.booking_id;
                        if (summaryBookingId.innerHTML.trim() !== '') {
                            bookingSummary.removeChild(popup);
                            closePopup.style.visibility = 'visible';
                        }
                    } else {
                        alert('Error: ' + data.data.message);
                    }
                });
        });
    </script>
<?php
    // return ob_get_clean();
}
add_action('wp_footer', 'wp_bookings_multi_step_form');

?>
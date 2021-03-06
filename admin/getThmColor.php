<?php
/*
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code
 * which is considered copyrighted (c) material of the original comment or credit authors.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 */

/**
 * @copyright   {@link http://xoops.org/ XOOPS Project}
 * @license     {@link http://www.fsf.org/copyleft/gpl.html GNU public license}
 * @package
 * @since
 * @author       XOOPS Development Team,
 * @author       Antiques Promotion (http://www.antiquespromotion.ca)
 */

require_once __DIR__ . '/../../../mainfile.php';
require_once XOOPS_ROOT_PATH . '/modules/apcal/class/cssParser.php';

error_reporting(0);
$xoopsLogger->activated = false;

$useDefault = isset($_GET['default']) && $_GET['default'] == 2;
$css        = new CSSParser($_GET['filename']);

$color                          = $css->parseColor('a', 'color');
$colors['apcal_saturday_color'] = $color && !$useDefault ? $color : '#666666';
$colors['apcal_sunday_color']   = $color && !$useDefault ? $color : '#666666';
$colors['apcal_holiday_color']  = $color && !$useDefault ? $color : '#666666';

$color                            = $css->parseColor('odd', 'background');
$colors['apcal_saturday_bgcolor'] = $color && !$useDefault ? $color : '#E9E9E9';
$colors['apcal_sunday_bgcolor']   = $color && !$useDefault ? $color : '#E9E9E9';
$colors['apcal_holiday_bgcolor']  = $color && !$useDefault ? $color : '#E9E9E9';

$color                         = $css->parseColor('body', 'color');
$colors['apcal_weekday_color'] = $color && !$useDefault ? $color : '#000000';
$colors['apcal_calhead_color'] = $color && !$useDefault ? $color : '#000000';

$color                           = $css->parseColor('even', 'background');
$colors['apcal_weekday_bgcolor'] = $color && !$useDefault ? $color : '#dee3e7';
$colors['apcal_calhead_bgcolor'] = $color && !$useDefault ? $color : '#dee3e7';

$color                             = $css->parseColor('head', 'background');
$colors['apcal_targetday_bgcolor'] = $color && !$useDefault ? $color : '#6699FF';
$colors['apcal_allcats_color']     = $color && !$useDefault ? $color : '#6699FF';

$color                     = $css->parseColor('table', 'border');
$colors['apcal_frame_css'] = $color && !$useDefault ? $color : '#000000';

$colors['apcal_event_bgcolor'] = '#EEEEEE';
$colors['apcal_event_color']   = '#000000';
$colors['apcal_allcats_color'] = '#5555AA';

echo json_encode($colors);

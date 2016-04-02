<?php

//  ------------------------------------------------------------------------ //
//                XOOPS - PHP Content Management System                      //
//                  Copyright (c) 2000-2016 XOOPS.org                        //
//                       <http://xoops.org/>                             //
//  ------------------------------------------------------------------------ //
//  This program is free software; you can redistribute it and/or modify     //
//  it under the terms of the GNU General Public License as published by     //
//  the Free Software Foundation; either version 2 of the License, or        //
//  (at your option) any later version.                                      //
//                                                                           //
//  You may not change or alter any portion of this comment or credits       //
//  of supporting developers from this source code or any supporting         //
//  source code which is considered copyrighted (c) material of the          //
//  original comment or credit authors.                                      //
//                                                                           //
//  This program is distributed in the hope that it will be useful,          //
//  but WITHOUT ANY WARRANTY; without even the implied warranty of           //
//  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the            //
//  GNU General Public License for more details.                             //
//                                                                           //
//  You should have received a copy of the GNU General Public License        //
//  along with this program; if not, write to the Free Software              //
//  Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307 USA //
//  ------------------------------------------------------------------------ //

/**
 * @copyright   {@link http://xoops.org/ XOOPS Project}
 * @license     {@link http://www.fsf.org/copyleft/gpl.html GNU public license}
 * @author      GIJ=CHECKMATE (PEAK Corp. http://www.peak.ne.jp/)
 */

$this->holidays = array(
    '2005-1-3'   => 'New Years Bank Holiday',
    '2005-3-25'  => 'Good Friday',
    '2005-3-28'  => 'Easter Monday',
    '2005-5-2'   => 'Early May Bank Holiday',
    '2005-5-30'  => 'Spring Bank Holiday',
    '2005-8-29'  => 'Summer Bank Holiday',
    '2005-12-27' => 'Christmas Bank Holiday',

    '2006-1-2'  => 'New Years Bank Holiday',
    '2006-4-14' => 'Good Friday',
    '2006-4-17' => 'Easter Monday',
    '2006-5-1'  => 'Early May Bank Holiday',
    '2006-5-29' => 'Spring Bank Holiday',
    '2006-8-28' => 'Summer Bank Holiday',

    '2007-4-6'  => 'Good Friday',
    '2007-4-9'  => 'Easter Monday',
    '2007-5-7'  => 'Early May Bank Holiday',
    '2007-5-28' => 'Spring Bank Holiday',
    '2007-8-27' => 'Summer Bank Holiday',

    '2008-3-21' => 'Good Friday',
    '2008-3-24' => 'Easter Monday',
    '2008-5-5'  => 'Early May Bank Holiday',
    '2008-5-26' => 'Spring Bank Holiday',
    '2008-8-25' => 'Summer Bank Holiday',

);

for ($y = 2001; $y < 2020; ++$y) {
    $this->holidays["$y-1-1"]   = 'New Years Day';
    $this->holidays["$y-12-25"] = 'Christmas';
    $this->holidays["$y-12-26"] = 'Boxing Day';
}
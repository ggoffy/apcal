<{*
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
 * @copyright   XOOPS Project (http://xoops.org)
 * @license     http://www.fsf.org/copyleft/gpl.html GNU public license
 * @author      Antiques Promotion (http://www.antiquespromotion.ca)
 */
 *}>

<script type="text/javascript">
    function showHTMLCode()
    {
        var t = document.calendar.t;
        for(var i=0; i<3; i++)
        {
            if(t[i].checked)
            {
                t = t[i].value;
                break;
            }
        }

        var container = document.getElementById('htmlCode');
        var src = '<{$xoops_url}>/modules/APCal/assets/api/APscript.js'
                + '?h='+encodeURIComponent(document.calendar.h.value)
                + '&c='+document.calendar.c.value
                + '&n='+document.calendar.n.value
                + '&w='+document.calendar.w.value + document.calendar.u.value
                + '&t='+t;
        document.getElementById('APScript').src = src;

        if(t == 'custom')
        {
            container.innerHTML =
                '<textarea style="width: 100%; height: 200px;">'
                +'&lt;script type="text/javascript" id="APScript" src="'+src+'"&gt;&lt;/script&gt;'+"\r\n"
                +'&lt;script type="text/javascript"&gt;'+"\r\n"
                +'    var APborder = "' + document.custom.APborder.value + '";'+"\r\n"
                +'    var APtitle = "'  + document.custom.APtitle.value  + '";'+"\r\n"
                +'    var APtext = "'   + document.custom.APtext.value   + '";'+"\r\n"
                +'    var APlink = "'   + document.custom.APlink.value   + '";'+"\r\n"
                +'    var APeven = "'   + document.custom.APeven.value   + '";'+"\r\n"
                +'    var APodd = "'    + document.custom.APodd.value    + '";'+"\r\n"
                +'&lt;/script&gt;'+"\r\n"
                +'&lt;div id="APContainer"&gt;&lt;/div&gt;'
                +'</textarea>';
            APborder = document.custom.APborder.value;
            APtitle =  document.custom.APtitle.value;
            APtext =   document.custom.APtext.value;
            APlink =   document.custom.APlink.value;
            APeven =   document.custom.APeven.value;
            APodd =    document.custom.APodd.value;
        }
        else
        {
            container.innerHTML =
                '<textarea style="width: 100%; height: 100px;">'
                +'&lt;script type="text/javascript" id="APScript" src="'+src+'"&gt;&lt;/script&gt;'+"\r\n"
                +'&lt;div id="APContainer"&gt;&lt;/div&gt;'
                +'</textarea>';
        }
        getEvents();
    }

    function showCustomSettings()
    {
        if(document.calendar.t[2].checked)
        {
            document.getElementById('customSettings').style.display = 'block';
        }
        else
        {
            document.getElementById('customSettings').style.display = 'none';
        }
    }
</script>
<br />
<script type="text/javascript" id="APScript" src="<{$xoops_url}>/modules/APCal/assets/api/APscript.js?h=APCal&c=0&n=10&w=100%&t=default"></script>
<script type="text/javascript">
    var APborder = "";
    var APtitle = "";
    var APtext = "";
    var APlink = "";
    var APeven = "";
    var APodd = "";
</script>
<div id="APContainer"></div>
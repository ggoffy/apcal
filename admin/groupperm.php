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
 * @author       GIJ=CHECKMATE (PEAK Corp. http://www.peak.ne.jp/)
 */

$moduleDirName = basename(dirname(__DIR__));
require_once __DIR__ . '/admin_header.php';
//require_once __DIR__ . '/../../../include/cp_header.php';
require_once __DIR__ . '/mygrouppermform.php';

// for "Duplicatable"
$moduleDirName = basename(dirname(__DIR__));
if (!preg_match('/^(\D+)(\d*)$/', $moduleDirName, $regs)) {
    echo('invalid dirname: ' . htmlspecialchars($moduleDirName));
}
$mydirnumber = $regs[2] === '' ? '' : (int)$regs[2];

require_once XOOPS_ROOT_PATH . "/modules/$moduleDirName/include/gtickets.php";

// language files
$language = $xoopsConfig['language'];
if (!file_exists(XOOPS_ROOT_PATH . "/modules/system/language/$language/admin/blocksadmin.php")) {
    $language = 'english';
}
require_once XOOPS_ROOT_PATH . "/modules/system/language/$language/admin.php";
xoops_loadLanguage('main', $moduleDirName);

if (!empty($_POST['submit'])) {

    // Ticket Check
    if (!$xoopsGTicket->check(true, 'myblocksadmin')) {
        redirect_header(XOOPS_URL . '/', 3, $xoopsGTicket->getErrors());
    }

    include __DIR__ . '/mygroupperm.php';
    redirect_header(XOOPS_URL . "/modules/$moduleDirName/admin/groupperm.php", 1, _AM_APCALAM_APCALDBUPDATED);
    exit;
}

$item_list = array(
    '1'  => _AM_APCAL_GPERM_G_INSERTABLE,
    '2'  => _AM_APCAL_GPERM_G_SUPERINSERT,
    '4'  => _AM_APCAL_GPERM_G_EDITABLE,
    '8'  => _AM_APCAL_GPERM_G_SUPEREDIT,
    //  '16' => _AM_APCAL_GPERM_G_DELETABLE ,
    '32' => _AM_APCAL_GPERM_G_SUPERDELETE//  '64' => _AM_APCAL_GPERM_G_TOUCHOTHERS
);

$form = new MyXoopsGroupPermForm(_AM_APCAL_GROUPPERM, $xoopsModule->mid(), 'apcal_global', _AM_APCAL_GROUPPERMDESC);
foreach ($item_list as $item_id => $item_name) {
    $form->addItem($item_id, $item_name);
}

xoops_cp_header();
$adminObject->displayNavigation(basename(__FILE__));
echo $form->render();

require_once __DIR__ . '/admin_footer.php';

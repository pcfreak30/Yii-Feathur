<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    <?php
    $cs = Yii::app()->clientScript;
    CGoogleApi::register('jqueryui');
    $baseUrl = Yii::app()->theme->baseUrl ? Yii::app()->theme->baseUrl : Yii::app()->baseUrl;
    $cssFiles = array(
        'css/reset.css',
        'css/font-awesome.min.css',
        'css/root.css',
        'css/grid.css',
        'css/typography.css',
        'css/basic.css',
    );
    foreach ($cssFiles as $file) {
        $cs->registerCssFile($baseUrl . '/' . $file);
    }
    $cs->registerCssFile($baseUrl . '/css/ie7-style.css');
    ?>

    <!--[if IE 7]>
    <?php  $cs->registerCssFile($baseUrl.'/css/ie7-style.css'); ?>
    <![endif]-->
    <!--[if lt IE 7]>
    <?php  $cs->registerCssFile($baseUrl.'/css/basic_ie.css');?>
    <![endif]-->
    <?php
    $scriptFiles = array(
        'js/jquery-settings.js',
        'js/jquery.tipsy.js',
        'js/jquery.uniform.min.js',
        'js/jquery.wysiwyg.js',
        'js/jquery.tablesorter.min.js',
        'js/analytics.js',
        'js/popup.js',
        'js/fullcalendar.min.js',
        'js/jquery.prettyPhoto.js',
        'js/raphael.js',
        'js/plupload.full.js',
        'js/basic.js',
        'js/jquery.form.js',
        'js/jquery.dataTables.js',
    );
    foreach ($scriptFiles as $file) {
        $cs->registerScriptFile($baseUrl . '/' . $file);
    }
    ?>
<body>
<div class="wrapper">
    <!-- START HEADER -->
    <div id="header">
        <!-- logo -->
        <div class="logo" style="margin:0px;padding-top:10px;"><a href="main.php"><img
                    src="templates/default/img/logo.png" alt="logo"/></a></div>

        <!-- notifications -->
        <div id="notifications">
            <div class="clear"></div>
        </div>

        <!-- profile box -->
        <div id="profilebox">
            <a href="#" class="display">
                <img src="templates/default/img/simple.jpg" width="33" height="33" alt="profile"/> <b>Logged in as</b>
                <span>{%?Username}</span>
            </a>

            <div class="profilemenu">
                <ul>
                    <li><a href="profile.php">Account Settings</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </div>

        </div>


        <div class="clear"></div>
    </div>
    <!-- END HEADER -->
    <!-- START MAIN -->
    <div id="main">
        <!-- START SIDEBAR -->
        <div id="sidebar">

            {%if UserPermissions == 7}
            <!-- start searchbox -->
            <div id="searchbox">
                <div class="in">
                    <script type="text/javascript">
                        $(document).ready(function () {
                            $("#SearchSystem").keypress(function (event) {
                                if (event.which == 13) {
                                    var search = $('#SearchSystem').attr('value');
                                    window.location = "admin.php?view=list&type=search&search=" + search;
                                }
                            });
                        });
                    </script>
                    <input id="SearchSystem" type="text" name="search" style="width:100%" class="input"
                           value="{%if isset|Search == true}{%?Search}{%/if}">
                </div>
            </div>
            <!-- end searchbox -->
            {%/if}
            <!-- start sidemenu -->
            <div id="sidemenu">
                <ul>
                    {%if UserPermissions != 7}
                    <li class="subtitle">
                        <a class="action tips-right" href="dashboard.php" title="Dashboard"><img
                                src="templates/default/img/icons/sidemenu/laptop.png" width="16" height="16"
                                alt="icon"/>Dashboard<img src="templates/default/img/arrow-down.png" width="7"
                                                          height="4" alt="arrow" class="arrow"/></a>
                        <ul class="submenu" id="dashboard">
                            {%if isset|UserVPS == true}
                            {%foreach server in UserVPS}
                            <li{%if isempty|server[viewing] == false} class="active"{%/if}><a
                                href="view.php?id={%?server[id]}"><img
                                    src="templates/default/img/icons/sidemenu/star.png" width="16" height="16"
                                    alt="icon"/>{%?server[hostname]}</a></li>
                    {%/foreach}
                    {%/if}
                </ul>
                </li>
                {%/if}
                {%if UserPermissions == 7}
                <li class="subtitle">
                    <a class="action tips-right" href="#" title="Admin"><img
                            src="templates/default/img/icons/sidemenu/file_edit.png" width="16" height="16"
                            alt="icon"/>Admin<img src="templates/default/img/arrow-down.png" width="7"
                                                  height="4" alt="arrow" class="arrow"/></a>
                    <ul class="submenu" id="admin">
                        <li{%if Page == dashboard} class="active"{%/if}><a href="admin.php"><img
                                src="templates/default/img/icons/sidemenu/file.png" width="16" height="16"
                                alt="icon"/>Dashboard</a></li>
                </ul>
                </li>
                <li class="subtitle">
                    <a class="action tips-right" href="#" title="Users"><img
                            src="templates/default/img/icons/sidemenu/user.png" width="16" height="16"
                            alt="icon"/>Users<img src="templates/default/img/arrow-down.png" width="7"
                                                  height="4" alt="arrow" class="arrow"/></a>
                    <ul class="submenu" id="users">
                        <li{%if Page == listusers} class="active"{%/if}><a
                            href="admin.php?view=list&type=users"><img
                                src="templates/default/img/icons/sidemenu/user.png" width="16" height="16"
                                alt="icon"/>List Users</a></li>
                <li{%if Page == adduser} class="active"{%/if}><a href="admin.php?view=adduser"><img
                        src="templates/default/img/icons/sidemenu/user_add.png" width="16"
                        height="16" alt="icon"/>Create User</a></li>
                </ul>
                </li>
                <li class="subtitle">
                    <a class="action tips-right" href="#" title="VPS"><img
                            src="templates/default/img/icons/sidemenu/vcard.png" width="16" height="16"
                            alt="icon"/>VPS<img src="templates/default/img/arrow-down.png" width="7" height="4"
                                                alt="arrow" class="arrow"/></a>
                    <ul class="submenu" id="vps">
                        <li{%if Page == listvps} class="active"{%/if}><a href="admin.php?view=list&type=vps"><img
                                src="templates/default/img/icons/sidemenu/info.png" width="16" height="16"
                                alt="icon"/>List VPS</a></li>
                <li{%if Page == create} class="active"{%/if}><a href="admin.php?view=createvps"><img
                        src="templates/default/img/icons/sidemenu/star.png" width="16" height="16"
                        alt="icon"/>Create VPS</a></li>
                </ul>
                </li>
                <li class="subtitle">
                    <a class="action tips-right" href="#" title="Servers"><img
                            src="templates/default/img/icons/sidemenu/laptop.png" width="16" height="16"
                            alt="icon"/>Servers<img src="templates/default/img/arrow-down.png" width="7"
                                                    height="4" alt="arrow" class="arrow"/></a>
                    <ul class="submenu" id="servers">
                        <li{%if Page == listservers} class="active"{%/if}><a
                            href="admin.php?view=list&type=servers"><img
                                src="templates/default/img/icons/sidemenu/laptop.png" width="16" height="16"
                                alt="icon"/>List Servers</a></li>
                <li{%if Page == addserver} class="active"{%/if}><a href="admin.php?view=addserver"><img
                        src="templates/default/img/icons/sidemenu/laptop.png" width="16" height="16"
                        alt="icon"/>Add Server</a></li>
                </ul>
                </li>
                <li class="subtitle">
                    <a class="action tips-right" href="#" title="Settings"><img
                            src="templates/default/img/icons/sidemenu/key.png" width="16" height="16"
                            alt="icon"/>Settings<img src="templates/default/img/arrow-down.png" width="7"
                                                     height="4" alt="arrow" class="arrow"/></a>
                    <ul class="submenu" id="settings">
                        <li{%if Page == settings} class="active"{%/if}><a href="admin.php?view=settings"><img
                                src="templates/default/img/icons/sidemenu/gear.png" width="16" height="16"
                                alt="icon"/>Feathur Settings</a></li>
                <li{%if Page == templates} class="active"{%/if}><a href="admin.php?view=templates"><img
                        src="templates/default/img/icons/sidemenu/zip.png" width="16" height="16"
                        alt="icon"/>Template Manager</a></li>
                <li{%if Page == ippools} class="active"{%/if}><a href="admin.php?view=ippools"><img
                        src="templates/default/img/icons/sidemenu/network.png" width="16"
                        height="16" alt="icon"/>IP Pools</a></li>
                <li{%if Page == update} class="active"{%/if}><a href="admin.php?view=update"><img
                        src="templates/default/img/icons/sidemenu/network.png" width="16"
                        height="16" alt="icon"/>Update Settings</a></li>
                </ul>
                </li>
                <li><a href="./phpmyadmin/" target="_blank"><img src="templates/default/img/icons/sidemenu/pma.png"
                                                                 width="16" height="16" alt="icon"/>PHPMyAdmin</a>
                </li>
                {%/if}
                <li><a href="about.php"><img src="templates/default/img/icons/sidemenu/info.png" width="16"
                                             height="16" alt="icon"/>About Feathur</a></li>
                </ul>
            </div>
            <!-- end sidemenu -->

        </div>
        <!-- END SIDEBAR -->

        <!-- START PAGE -->
        <div id="page" style="margin:0;">
            {%if isset|License == true}
            {%if isempty|License == true}
            {%if UserPermissions == 7}
            <div align="center"><br><a href="http://feathur.com" target="_blank">This copy of Feathur is unlicensed.
                    Consider purchasing a license.</a></div>
            <br><br>
            {%/if}
            {%/if}
            {%/if}
            {%?Content}
        </div>

        <div class="clear"></div>
    </div>
    <!-- END MAIN -->
    <!-- START FOOTER -->
    <div id="footer">
        <div class="left-column"></div>
        <div class="right-column">&copy Copyright 2013 <a href="http://feathur.com" target="_blank">Feathur</a> - All
            rights reserved.
        </div>
    </div>
    <!-- END FOOTER -->
</div>
</body>
</html>
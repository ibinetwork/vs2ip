<?php
/* Smarty version 3.1.48, created on 2025-05-13 11:04:04
  from '/var/www/html/themes/vs2ip/_common/_menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6823515480b589_33339185',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e4f94a3df1729caaa7fb6ebd1c7a193532182279' => 
    array (
      0 => '/var/www/html/themes/vs2ip/_common/_menu.tpl',
      1 => 1621348770,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6823515480b589_33339185 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type='text/javascript'>
var themeName='elastixneo'; //nombre del tema
$(document).ready(function(){
    $("#togglebookmark").click(function() {
        var imgBookmark = $("#togglebookmark").attr('src');
        if(/bookmarkon.png/.test(imgBookmark)) {
            $("#togglebookmark").attr('src',"web/themes/"+themeName+"/images/bookmark.png");
        } else {
            $("#togglebookmark").attr('src',"web/themes/"+themeName+"/images/bookmarkon.png");
        }
    });



    $("#export_button").hover(
      function () {
          $(this).addClass("exportBorder");
      },
      function () {
          $(this).removeClass("exportBorder");
          $(this).attr("aria-expanded","false");
          $(this).removeClass("exportBackground");
          $(".letranodec").css("color","#444444");
          $("#subMenuExport").addClass("neo-display-none");
      }
    );
    $("#neo-table-button-download-right").click(
      function () {
          if($(this).attr("aria-expanded") == "false"){
          var exportPosition = $('#export_button').position();
          var top = exportPosition.top + 41;
          var left = exportPosition.left - 3;
          $("#subMenuExport").css('top',top+"px");
          $("#subMenuExport").css('left',left+"px");
          $(this).attr("aria-expanded","true");
          $(this).addClass("exportBackground");
          $(".letranodec").css("color","#FFFFFF");
          $("#subMenuExport").removeClass("neo-display-none");
          }
          else{
          $(".letranodec").css("color","#444444");
          $("#subMenuExport").addClass("neo-display-none");
          $(this).removeClass("exportBackground");
          $(this).attr("aria-expanded","false");
          }
      }
    );

    $("#subMenuExport").hover(
      function () {
        $(this).removeClass("neo-display-none");
        $(".letranodec").css("color","#FFFFFF");
        $("#export_button").attr("aria-expanded","true");
        $("#export_button").addClass("exportBackground");
      },
      function () {
        $(this).addClass("neo-display-none");
        $(".letranodec").css("color","#444444");
        $("#export_button").removeClass("exportBackground");
        $("#export_button").attr("aria-expanded","false");
      }
    );

   $('#header_open_sidebar, a.chat-close').click(function (e) {
      $('div.page-container').toggleClass('chat-visible');
      toggle_sidebar_menu(true);
      e.stopPropagation();
   });

});

function removeNeoDisplayOnMouseOut(ref){
    $(ref).find('div').addClass('neo-display-none');
}

function removeNeoDisplayOnMouseOver(ref){
    $(ref).find('div').removeClass('neo-display-none');
}
<?php echo '</script'; ?>
>


<input type="hidden" id="lblRegisterCm"   value="<?php echo $_smarty_tpl->tpl_vars['lblRegisterCm']->value;?>
" />
<input type="hidden" id="lblRegisteredCm" value="<?php echo $_smarty_tpl->tpl_vars['lblRegisteredCm']->value;?>
" />
<input type="hidden" id="userMenuColor" value="<?php echo $_smarty_tpl->tpl_vars['MENU_COLOR']->value;?>
" />
<input type="hidden" id="lblSending_request" value="<?php echo $_smarty_tpl->tpl_vars['SEND_REQUEST']->value;?>
" />
<input type="hidden" id="toolTip_addBookmark" value="<?php echo $_smarty_tpl->tpl_vars['ADD_BOOKMARK']->value;?>
" />
<input type="hidden" id="toolTip_removeBookmark" value="<?php echo $_smarty_tpl->tpl_vars['REMOVE_BOOKMARK']->value;?>
" />
<input type="hidden" id="toolTip_addingBookmark" value="<?php echo $_smarty_tpl->tpl_vars['ADDING_BOOKMARK']->value;?>
" />
<input type="hidden" id="toolTip_removingBookmark" value="<?php echo $_smarty_tpl->tpl_vars['REMOVING_BOOKMARK']->value;?>
" />
<input type="hidden" id="toolTip_hideTab" value="<?php echo $_smarty_tpl->tpl_vars['HIDE_IZQTAB']->value;?>
" />
<input type="hidden" id="toolTip_showTab" value="<?php echo $_smarty_tpl->tpl_vars['SHOW_IZQTAB']->value;?>
" />
<input type="hidden" id="toolTip_hidingTab" value="<?php echo $_smarty_tpl->tpl_vars['HIDING_IZQTAB']->value;?>
" />
<input type="hidden" id="toolTip_showingTab" value="<?php echo $_smarty_tpl->tpl_vars['SHOWING_IZQTAB']->value;?>
" />
<input type="hidden" id="amount_char_label" value="<?php echo $_smarty_tpl->tpl_vars['AMOUNT_CHARACTERS']->value;?>
" />
<input type="hidden" id="save_note_label" value="<?php echo $_smarty_tpl->tpl_vars['MSG_SAVE_NOTE']->value;?>
" />
<input type="hidden" id="get_note_label" value="<?php echo $_smarty_tpl->tpl_vars['MSG_GET_NOTE']->value;?>
" />
<input type="hidden" id="issabel_theme_name" value="<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
" />
<input type="hidden" id="lbl_no_description" value="<?php echo $_smarty_tpl->tpl_vars['LBL_NO_STICKY']->value;?>
" />

<!-- inicio del menú tipo acordeon-->
<div class="sidebar-menu">
    <header class="logo-env">
        <!-- logo -->
        <div class="logo">
            <a href="index.php">
                <img src="<?php echo $_smarty_tpl->tpl_vars['WEBPATH']->value;?>
themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/images/logo_mini2.png" width="240" alt="" alt="VS2IP logo" />
            </a>
        </div>
        <!-- logo collapse icon -->
        <div class="sidebar-collapse">
            <a href="#" class="sidebar-collapse-icon with-animation"><!-- add class "with-animation" if you want sidebar to have animation during expanding/collapsing transition -->
                <i class="entypo-menu"></i>
            </a>
        </div>
        <!-- open/close menu icon (do not remove if you want to enable menu on mobile devices) -->
        <div class="sidebar-mobile-menu visible-xs">
            <a href="#" class="with-animation"><!-- add class "with-animation" to support animation -->
                <i class="entypo-menu"></i>
            </a>
        </div>
    </header>

    <ul id="main-menu" class="">
        <!-- add class "multiple-expanded" to allow multiple submenus to open -->
        <!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->
        <!-- Search Bar -->
        <li id="search">
            <form method="get" action="">
                <input type="text" id="search_module_issabel" name="search_module_issabel" class="search-input" placeholder="<?php echo $_smarty_tpl->tpl_vars['MODULES_SEARCH']->value;?>
"/>
                <button type="submit">
                    <i class="entypo-search"></i>
                </button>
            </form>
        </li>
        <!--recorremos el arreglo del menu nivel primario-->
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrMainMenu']->value, 'menu', false, 'idMenu', 'menuMain', array (
));
$_smarty_tpl->tpl_vars['menu']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['idMenu']->value => $_smarty_tpl->tpl_vars['menu']->value) {
$_smarty_tpl->tpl_vars['menu']->do_else = false;
?>
            <?php if ($_smarty_tpl->tpl_vars['idMenu']->value == $_smarty_tpl->tpl_vars['idMainMenuSelected']->value) {?>
                <li class="active opened active">
            <?php } else { ?>
                <li>
            <?php }?>
                    <a href="index.php?menu=<?php echo $_smarty_tpl->tpl_vars['idMenu']->value;?>
">
                         <i class="<?php echo $_smarty_tpl->tpl_vars['menu']->value['icon'];?>
"></i>
			<!--<span><?php echo $_smarty_tpl->tpl_vars['idMenu']->value;?>
</span>-->
                        <!--<span><?php echo $_smarty_tpl->tpl_vars['menu']->value['description'];?>
</span>-->
			<span><?php echo $_smarty_tpl->tpl_vars['menu']->value['Name'];?>
</span>
                    </a>
                    <ul>
                        <!--recorremos el arreglo del menu nivel secundario-->
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['menu']->value['children'], 'subMenu', false, 'idSubMenu');
$_smarty_tpl->tpl_vars['subMenu']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['idSubMenu']->value => $_smarty_tpl->tpl_vars['subMenu']->value) {
$_smarty_tpl->tpl_vars['subMenu']->do_else = false;
?>
                            <?php if ($_smarty_tpl->tpl_vars['idSubMenu']->value == $_smarty_tpl->tpl_vars['idSubMenuSelected']->value) {?>
                                <li class="active opened active">
                            <?php } else { ?>
                                <li>
                            <?php }?>
                                    <a href="index.php?menu=<?php echo $_smarty_tpl->tpl_vars['idSubMenu']->value;?>
">
					<i class="<?php echo $_smarty_tpl->tpl_vars['subMenu']->value['icon'];?>
"></i>
					<!--<span><?php echo $_smarty_tpl->tpl_vars['idSubMenu']->value;?>
</span>-->
                                        <!--<span><?php echo $_smarty_tpl->tpl_vars['subMenu']->value['description'];?>
</span>-->
					<span><?php echo $_smarty_tpl->tpl_vars['subMenu']->value['Name'];?>
</span>
                                    </a>
                                    <?php if ($_smarty_tpl->tpl_vars['subMenu']->value['children']) {?>
                                        <ul>
                                            <!--recorremos el arreglo del menu de tercer nivel-->
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['subMenu']->value['children'], 'subMenu2', false, 'idSubMenu2');
$_smarty_tpl->tpl_vars['subMenu2']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['idSubMenu2']->value => $_smarty_tpl->tpl_vars['subMenu2']->value) {
$_smarty_tpl->tpl_vars['subMenu2']->do_else = false;
?>
                                                <li>
                                                    <a href="index.php?menu=<?php echo $_smarty_tpl->tpl_vars['idSubMenu2']->value;?>
">
							<!--<span><?php echo $_smarty_tpl->tpl_vars['idSubMenu2']->value;?>
</span>-->
                                                        <!--<span><?php echo $_smarty_tpl->tpl_vars['subMenu2']->value['description'];?>
</span>-->
							<span><?php echo $_smarty_tpl->tpl_vars['subMenu2']->value['Name'];?>
</span>
                                                    </a>
                                                </li>
                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </ul>
                                    <?php }?>
                                </li>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </ul>
                </li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

        <?php echo $_smarty_tpl->tpl_vars['SHORTCUT']->value;?>


    </ul>
</div>
<!-- fin del menú tipo acordeon-->

<!-- inicio del head principal-->
<div class="main-content">
<div style="height:160px;background-color:#2c6882;padding:15px;">
    <!-- Profile Info and Notifications -->
    <span style='float:right; text-align:right; padding:0px 5px 0px 0px; width:175px;' class="col-md-6 col-sm-8 clearfix">
        <ul style='float:right;' class="user-info pull-none-xsm">
            <!-- Profile Info -->
            <li class="profile-info dropdown pull-right"><!-- add class "pull-right" if you want to place this from right -->
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <!--<img  style="border:0px" src="index.php?menu=_issabelutils&action=getImage&ID=<?php echo $_smarty_tpl->tpl_vars['USER_ID']->value;?>
&rawmode=yes" alt="" class="img-circle" width="44" />-->
            <img  style="border:0px" src="/themes/tenant/images/Icon-user.png" alt="" class="img-circle" width="44" />
                    <?php echo $_smarty_tpl->tpl_vars['USER_LOGIN']->value;?>

                </a>
                <!-- Reverse Caret -->
                <i style='font-size:15px;font-weight:bold;' class="dropdown-menu"></i>
                <!-- Profile sub-links -->
                <ul class="dropdown-menu">

                    <!-- Reverse Caret -->
                    <li class="caret"></li>
					
				
                    <!-- Profile sub-links -->
                    <li class="">
                        <a href="#" class="">
						
                         <!--   <i class="fa fa-user"></i>-->
                            <?php echo $_smarty_tpl->tpl_vars['USER_LOGIN']->value;?>

							VS2IP
                        </a>
                    </li>
                    <li class="dropdown">
                        <a  href="index.php?logout=yes" >
                            <i class="fa fa-sign-out"></i>
                            <?php echo $_smarty_tpl->tpl_vars['LOGOUT']->value;?>

                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </span>

    <!-- Raw Links -->
    <span style='float:right; width:400px;'>
        <ul style="padding-top:12px;" class="list-inline links-list pull-right neo-topbar-notification">

       <li id="header_notification_bar" class="profile-info dropdown">
            <a data-toggle="dropdown" class="" href="#">
			<i id='notibell' class="fa fa-bell-o <?php echo $_smarty_tpl->tpl_vars['ANIMATE_NOTIFICATION']->value;?>
"></i>
              <!--  <i class="fa fa-info-circle"></i> -->
            </a>
            <ul class="dropdown-menu">

                <!-- Reverse Caret -->
                <li class="caret"></li>

                <!-- Profile sub-links -->
                <li><a href="#" class="">REGISTRADO</a></li>
                <li><a href="http://www.vs2ip.com.br" target="_blank"><i class="fa fa-external-link"></i>VS2IP SITE</a></li>
				<li><a href="http://vs2ip.freshdesk.com" target="_blank"><i class="fa fa-external-link"></i>VS2IP SUPORTE</a></li>
              
            </ul>
        </li>

        <!-- AQUI -->
<?php if ($_smarty_tpl->tpl_vars['ISSABEL_PANELS']->value) {?>
        <!-- SIDEBAR LIST -->
        <li id="header_open_sidebar">
            <a href="#" data-toggle="chat" data-collapse-sidebar="1"><i class="fa fa-th-list"></i></a>
        </li>
<?php }?>
        </ul>
    </span>


</div>

				<!-- Breadcrumb 3 -->
<!-- <ol class="breadcrumb bc-2">

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['BREADCRUMB']->value, 'value', false, NULL, 'menu', array (
  'first' => true,
  'last' => true,
  'index' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_menu']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_menu']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_menu']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_menu']->value['index'];
$_smarty_tpl->tpl_vars['__smarty_foreach_menu']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_menu']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_menu']->value['total'];
?>
        <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_menu']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_menu']->value['first'] : null)) {?>
             <li>
                <a href="/"> <i class="entypo-home"></i></a>
                <a href="#"> <?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</a>
             </li>
        <?php } elseif ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_menu']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_menu']->value['last'] : null)) {?>
            <li class="active"><strong><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</strong></li>
        <?php } else { ?>
            <li><a href="#"><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</a></li>
        <?php }?>
   <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
   <li id="tenant-help">
    <a class="" href="#" onclick="popUp('help/?id_nodo=<?php if (!empty($_smarty_tpl->tpl_vars['idSubMenu2Selected']->value)) {
echo $_smarty_tpl->tpl_vars['idSubMenu2Selected']->value;?>
&name_nodo=<?php echo $_smarty_tpl->tpl_vars['nameSubMenu2Selected']->value;
} else {
echo $_smarty_tpl->tpl_vars['idSubMenuSelected']->value;?>
&name_nodo=<?php echo $_smarty_tpl->tpl_vars['nameSubMenuSelected']->value;
}?>','1000','460')"> 
	
        <i class="fa fa-support"></i>
    </a>
   </li>
   <li id="tenant-sticky" class="dropdown">
   	<a id="togglestickynote1" href="#">
   		<i class="fa fa-sticky-note"></i>
   	</a>
   </li>
</ol> -->

<!-- contenido del modulo-->
<div id="neo-contentbox">
    <div id="neo-contentbox-maincolumn">
        <input type="hidden" id="issabel_framework_module_id" value="<?php if (empty($_smarty_tpl->tpl_vars['idSubMenu2Selected']->value)) {
echo $_smarty_tpl->tpl_vars['idSubMenuSelected']->value;
} else {
echo $_smarty_tpl->tpl_vars['idSubMenu2Selected']->value;
}?>" />
        <input type="hidden" id="issabel_framework_webCommon" value="<?php echo $_smarty_tpl->tpl_vars['WEBCOMMON']->value;?>
" />
        <div class="neo-module-content">




<?php }
}

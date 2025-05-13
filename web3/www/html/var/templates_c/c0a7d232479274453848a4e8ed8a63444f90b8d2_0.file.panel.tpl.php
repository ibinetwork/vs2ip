<?php
/* Smarty version 3.1.48, created on 2025-05-13 11:10:56
  from '/var/www/html/modules/control_panel/themes/default/panel.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_682352f0b56685_49555719',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c0a7d232479274453848a4e8ed8a63444f90b8d2' => 
    array (
      0 => '/var/www/html/modules/control_panel/themes/default/panel.tpl',
      1 => 1721078010,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_682352f0b56685_49555719 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="controlPanelApplication">



<?php echo '<script'; ?>
 type="text/x-handlebars" data-template-name="desktop">
    <div class="containerAll">
        <div class="statusbar">
            <!-- TODO: i18n -->
            
                {{#if connected}}
                    <span style="color: green; font-weight: bold;">Connected</span>
                    <div class="utilities-container">


                        <div class="Extensions-Calls-Count">
                          <div class="Registered">
                            <span>Ramais Online</span><br>
                            <span class="Count-Registered" style="font-size: 35px; color: #06ea06c4; padding: 10px; text-shadow: -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000;"></span>
                          </div>
                          <div class="NotRegistered">
                            <span>Ramais Offline</span><br>
                            <span class="Count-NotRegistered" style="font-size: 35px; color: red; padding: 10px; text-shadow: -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000;"></span>
                          </div>
                        </div>
                    </div>

                {{else}}
                    <span style="color: red; font-weight: bold;">Connecting...</span>
                {{/if}}
            
        </div>


		<div class="left-container" id="left-container">
        {{#view App.BaseSortableView }}
                
            {{#view App.PBXPanelView controllerBinding="extensions" }}
              <dt class="operator-title-container" id="operator-title-container">
                <i class="fa fa-phone" style="font-size:20px; padding-right:5px;"></i> <?php echo $_smarty_tpl->tpl_vars['AREA_DESCR_EXTENSION']->value;?>

              </dt>
                 <div class="Extensions-List" id="Extensions-List">
                    {{#if finishedloading}}
                        {{#view App.SortablePanelView }}
                            {{#each }}
                                  {{view App.ExtensionView}}
                            {{else}}
                                <br/>
                            {{/each}}
                        {{/view}}
                    {{else}}
                <img class="icon" src="modules/<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
/images/loading.gif"/>
                {{/if}}
                </div>
            {{/view}}
        
        {{/view}}
                {{#view App.FAQView }}
        {{#view App.BaseSortableView }}

                    
                {{#view App.PBXPanelView controllerBinding="area1" }}
                    {{view App.EditableTitleView }}
                    <dd>
                    <div class="Extensions-List" id="Extensions-List">
                        {{#if finishedloading}}
                            {{#view App.SortablePanelView }}
                                {{#each }}
                                    {{view App.ExtensionView}}
                                {{else}}
                                    <br/>
                                {{/each}}
                                {{/view}}
                            {{else}}
                            <img class="icon" src="modules/<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
/images/loading.gif"/>
                        {{/if}}
                    </div>
                    </dd>
                {{/view}}
            </br>

                        
                {{#view App.PBXPanelView controllerBinding="area2" }}
                    {{view App.EditableTitleView }}
                    <dd>
                    <div class="Extensions-List" id="Extensions-List">
                        {{#if finishedloading}}
                            {{#view App.SortablePanelView }}
                                {{#each }}
                                    {{view App.ExtensionView}}
                                {{else}}
                                    <br/>
                                {{/each}}
                                {{/view}}
                            {{else}}
                            <img class="icon" src="modules/<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
/images/loading.gif"/>
                        {{/if}}
                    </div>
                    </dd>
                {{/view}}
            </br>

                    
                {{#view App.PBXPanelView controllerBinding="area3" }}
                    {{view App.EditableTitleView }}
                    <dd>
                    <div class="Extensions-List" id="Extensions-List">
                        {{#if finishedloading}}
                            {{#view App.SortablePanelView }}
                                {{#each }}
                                    {{view App.ExtensionView}}
                                {{else}}
                                    <br/>
                                {{/each}}
                                {{/view}}
                            {{else}}
                            <img class="icon" src="modules/<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
/images/loading.gif"/>
                        {{/if}}
                    </div>
                    </dd>
                {{/view}}
            </br>

                    
                {{#view App.PBXPanelView controllerBinding="area4" }}
                    {{view App.EditableTitleView }}
                    <dd>
                    <div class="Extensions-List" id="Extensions-List">
                        {{#if finishedloading}}
                            {{#view App.SortablePanelView }}
                                {{#each }}
                                    {{view App.ExtensionView}}
                                {{else}}
                                    <br/>
                                {{/each}}
                                {{/view}}
                            {{else}}
                            <img class="icon" src="modules/<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
/images/loading.gif"/>
                        {{/if}}
                    </div>
                    </dd>
                {{/view}}
            </br>

                    
                {{#view App.PBXPanelView controllerBinding="area5" }}
                    {{view App.EditableTitleView }}
                    <dd>
                    <div class="Extensions-List" id="Extensions-List">
                        {{#if finishedloading}}
                            {{#view App.SortablePanelView }}
                                {{#each }}
                                    {{view App.ExtensionView}}
                                {{else}}
                                    <br/>
                                {{/each}}
                                {{/view}}
                            {{else}}
                            <img class="icon" src="modules/<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
/images/loading.gif"/>
                        {{/if}}
                    </div>
                    </dd>
                {{/view}}
            </br>

                    
                {{#view App.PBXPanelView controllerBinding="area6" }}
                    {{view App.EditableTitleView }}
                    <dd>
                    <div class="Extensions-List" id="Extensions-List">
                        {{#if finishedloading}}
                            {{#view App.SortablePanelView }}
                                {{#each }}
                                    {{view App.ExtensionView}}
                                {{else}}
                                    <br/>
                                {{/each}}
                                {{/view}}
                            {{else}}
                            <img class="icon" src="modules/<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
/images/loading.gif"/>
                        {{/if}}
                    </div>
                    </dd>
                {{/view}}
            </br>

                    
                {{#view App.PBXPanelView controllerBinding="area7" }}
                    {{view App.EditableTitleView }}
                    <dd>
                    <div class="Extensions-List" id="Extensions-List">
                        {{#if finishedloading}}
                            {{#view App.SortablePanelView }}
                                {{#each }}
                                    {{view App.ExtensionView}}
                                {{else}}
                                    <br/>
                                {{/each}}
                                {{/view}}
                            {{else}}
                            <img class="icon" src="modules/<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
/images/loading.gif"/>
                        {{/if}}
                    </div>
                    </dd>
                {{/view}}
            </br>

                    
                {{#view App.PBXPanelView controllerBinding="area8" }}
                    {{view App.EditableTitleView }}
                    <dd>
                    <div class="Extensions-List" id="Extensions-List">
                        {{#if finishedloading}}
                            {{#view App.SortablePanelView }}
                                {{#each }}
                                    {{view App.ExtensionView}}
                                {{else}}
                                    <br/>
                                {{/each}}
                                {{/view}}
                            {{else}}
                            <img class="icon" src="modules/<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
/images/loading.gif"/>
                        {{/if}}
                    </div>
                    </dd>
                {{/view}}
            </br>

                    
                {{#view App.PBXPanelView controllerBinding="area9" }}
                    {{view App.EditableTitleView }}
                    <dd>
                    <div class="Extensions-List" id="Extensions-List">
                        {{#if finishedloading}}
                            {{#view App.SortablePanelView }}
                                {{#each }}
                                    {{view App.ExtensionView}}
                                {{else}}
                                    <br/>
                                {{/each}}
                                {{/view}}
                            {{else}}
                            <img class="icon" src="modules/<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
/images/loading.gif"/>
                        {{/if}}
                    </div>
                    </dd>
                {{/view}}
            </br>


        {{/view }}         {{/view}}         
        </div>

        
        <div class="right-container">

        {{#view App.FAQView }}
        {{#view App.BaseSortableView }}
        
                    
                {{#view App.PBXPanelView controllerBinding="queues" }}
                    <dt>{{description}}</dt>
                    <dd>
                        {{#if finishedloading}}
                            <div>
                                {{#each }}
                                    {{view App.QueueView class="QueueView-large"}}
                                {{else}}
                                    <br/>
                                {{/each}}
                            </div>
                    {{else}}
                        <img class="icon" src="modules/<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
/images/loading.gif"/>
                    {{/if}}
                    </dd>
                {{/view}}
            <br>

                    
                {{#view App.PBXPanelView controllerBinding="conferences" }}
                    <dt>{{description}}</dt>
                    <dd>
                        {{#if finishedloading}}
                            <div>
                                {{#each }}
                                    {{view App.ConferenceView class="ConferenceView-large"}}
                                {{else}}
                                    <br/>
                                {{/each}}
                            </div>
                    {{else}}
                        <img class="icon" src="modules/<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
/images/loading.gif"/>
                    {{/if}}
                    </dd>
                {{/view}}
            <br>

                    
                {{#view App.PBXPanelView controllerBinding="parkinglots" }}
                    <dt>{{description}}</dt>
                    <dd>
                        {{#if finishedloading}}
                            <div class="parkinglots-list">
                                {{#each }}
                                    {{view App.ParkinglotView class="ParkinglotView-large"}}
                                {{else}}
                                    <br/>
                                {{/each}}
                            </div>
                    {{else}}
                        <img class="icon" src="modules/<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
/images/loading.gif"/>
                    {{/if}}
                    </dd>
                {{/view}}
            
         {{/view }}          {{/view}}          </div>
            

        <div class="left-container"> 
        {{#view App.BaseSortableView }}

                <div style="width:50%; float:left"> 
        
            {{#view App.PBXPanelView controllerBinding="iptrunks" }}
                <dt class="operator-title-container" id="operator-title-container";">
                    <?php echo $_smarty_tpl->tpl_vars['AREA_DESCR_TRUNKSSIP']->value;?>

                </dt>
                {{#if finishedloading}}
                    <div>
                        {{#each }}
                            {{view App.IPTrunkView }}
                        {{else}}
                            <br/>
                        {{/each}}
                    </div>
                {{else}}
                    <img class="icon" src="modules/<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
/images/loading.gif"/>
                {{/if}}
            {{/view}}
        
        </div>

                <div style="width:50%; float:left"> 
        
            {{#view App.PBXPanelView controllerBinding="dahdi" }}
            <dt class="operator-title-container" id="operator-title-container";">
                <?php echo $_smarty_tpl->tpl_vars['AREA_DESCR_TRUNKS']->value;?>

              </dt>
                    {{#if finishedloading}}
                        <div>
                            {{#each }}
                                {{view App.DAHDISpanView }}
                            {{else}}
                                <br/>
                            {{/each}}
                        </div>
                    {{else}}
                <img class "icon" src="modules/<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
/images/loading.gif"/>
                {{/if}}
            {{/view}}
        
        </div>

        {{/view}}        </div>
        
    </div>
<?php echo '</script'; ?>
><!-- data-template-name="desktop"  -->



<?php echo '<script'; ?>
 type="text/x-handlebars" data-template-name="extension">
<div style="float:left; border: black solid 0px; z-index:2;">
	<a class="pbxtooltip" href="#">
    	<img src="modules/<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
/images/info.png"/>
    	<div>
    		
    		{{channel}} {{#if registered}} - ({{ip}}){{/if}}<br/>
            {{description}}<br/>
    		{{#if active }}
    		<ul>
    	    {{#each active}}
    	    <li>{{formatSince}}: {{remoteExten}}</li>
    	    {{/each}}
    	    </ul>
    	    {{/if}}
    		
    	</div>
	</a>
</div>
<div style="float:left; width:115px; text-align:left; padding-left:4px;">
	
	<b>{{extension}}:</b> {{view.truncatedDescription}}<br/>
        <div class="line-monitor">
              <div class="line" style="width:30%">
              <span>Line1:</span> <br>
              <span>Line2:</span>
              </div>
              <div class="RemoteExtension"style="width:70%">
              {{#each active}}
                  <span class="monitor" title="{{Channel}}">{{formatSince}}: {{remoteExten}}</span><br>
              {{/each}}
            </div>
        </div>
	
</div>


<div class="phone-mail-container">
  <div class="phone-icon">
    {{view App.DraggablePhoneIconView iconBinding="view.extensionIcon"}}
  </div>
  {{#if unreadMail }}
  <div class="mail-icon">
    <a class="pbxtooltip">
      <img class="icon" src="modules/<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
/images/mail.png" style="width:30px; height: 20px;" />
      <div><?php echo $_smarty_tpl->tpl_vars['LBL_NEW']->value;?>
: {{NewMessages}}, <?php echo $_smarty_tpl->tpl_vars['LBL_OLD']->value;?>
: {{OldMessages}}</div>
    </a>
  </div>
  {{/if}}
</div>

<?php echo '</script'; ?>
>


<?php echo '<script'; ?>
 type="text/x-handlebars" data-template-name="iptrunk">
<div style="float:left; border: black solid 0px;">
    <a class="pbxtooltip" href="#">
    <img src="modules/<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
/images/info.png"/>
    <div>
        
        {{channel}} {{#if registered}}({{ip}}){{/if}}<br/>
        {{#if active}}
        <ul>
	    {{#each active}}
	    <li>{{formatSince}}: {{CallerIDNum}}</li>
	    {{/each}}
	    </ul>
	    {{/if}}
        
    </div>
    </a>
</div>
<div style="float:left; width:115px; text-align:left; padding-left:4px;">
    
    <b>{{view.truncatedDescription}}</b><br/>
    {{#each active}}
    <span class="monitor">{{formatSince}}: {{CallerIDNum}}</span><br/>
    {{/each}}
    
</div>

<div style="float: right; border: black solid 0px;">
    <img class="icon" src="modules/<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
/images/icon_trunk2.png"/>
</div>

<?php echo '</script'; ?>
>


<?php echo '<script'; ?>
 type="text/x-handlebars" data-template-name="dahdispan">
<div style="float:left; border: black solid 0px;">
    <a class="pbxtooltip" href="#">
    <img src="modules/<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
/images/info.png"/>
    <div>
        
        DAHDI/{{span}}: {{formatChanRange}}<br/>

        <!-- Mostrar los números de los canales en la alarma -->
        {{#each chan}}<span {{bindAttr style="alarmstyle"}}>{{chan}}</span>{{/each}}
        
        <!-- Mostrar las llamadas activas no clasificadas en un canal canal -->
        {{#if active}}
        <ul>
        {{#each active}}
        <li>{{formatSince}}: {{CallerIDNum}}</li>
        {{/each}}
        </ul>
        {{/if}}

        <!-- Mostrar las llamadas activas en cada canal -->
        <ul>
        {{#each chan}}
            {{#if active }}
	            <li>{{chan}}:
	            {{#each active}}
	                {{formatSince}}: {{CallerIDNum}}
	            {{else}}
	                (idle)
	            {{/each}}
	            </li>
            {{/if}}
        {{/each}}
        </ul>
        
    </div>
    </a>
</div>
<div style="float:left; width:135px; text-align:left; padding-left:4px;">
    
    <b>DAHDI/{{span}}:</b> {{formatChanRange}}<br/>
    
</div>
<div style="float: right; border: black solid 0px;">
    <img class="icon" src="modules/<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
/images/icon_trunk2.png"/>
</div>
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/x-handlebars" data-template-name="queue">
    <div class="Queue-Container">
        
        <b>Queue: {{extension}} </b>({{view.truncatedDescription}})
        <i title="Reestablece los parámetros a 0" class="fa fa-refresh" style="cursor:pointer; font-size:25px; position:absolute; right:0; padding:2px" onclick="refreshQueueParameters(this.offsetParent.dataset.idattr)"></i>
        <div class="queueParameters">
        </div>
    </div>
    <div class="Queue-Container-Agent-Client">
        <div class="Queue-Agents" style="width:60%;"> 
            </div>
        <div style="width:40%;">
                <b>Clientes na Fila:</b><span class="monitor"><b>{{callers.length}}</b></span><br/>
                {{#each callers}}<li><img src="modules/<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
/images/cliente.png" style="width: 15px; height: 15px;">{{CallerIDNum}}</li>{{/each}}
            
        </div>
    </div>
<?php echo '</script'; ?>
>



<?php echo '<script'; ?>
 type="text/x-handlebars" data-template-name="conference">
<div style="float:left; border: black solid 0px;">
	<a class="pbxtooltip" href="#">
	<img src="modules/<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
/images/info.png"/>
	<div>
		
		{{extension}}: {{description}}<br/>
		{{#if callers}}
		<?php echo $_smarty_tpl->tpl_vars['LBL_QUEUE_CALLERS']->value;?>
:<br/>
		<ul>
		{{#each callers}}
		<li>{{CallerIDName}} &lt;{{CallerIDNum}}&gt;</li>
		{{/each}}
		</ul>
		{{else}}
		<?php echo $_smarty_tpl->tpl_vars['LBL_QUEUE_NO_CALLERS']->value;?>

		{{/if}}
		
	</div>
	</a>
</div>
<div style="float:left; width:135px; text-align:left; padding-left:4px;">
	
	<b>{{extension}}:</b> {{view.truncatedDescription}}<br/>
	{{#if callers }}
	<span class="monitor"><?php echo $_smarty_tpl->tpl_vars['LBL_CONF_PARTICIPANTS']->value;?>
: {{callers.length}} - {{formatSince}}</span><br/>
	{{/if}}
	
</div>
<div style="float: right; border: black solid 0px;">
    {{view App.DroppableIconView icon="modules/<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
/images/conference.png" }}
</div>
<?php echo '</script'; ?>
>





<?php echo '<script'; ?>
 type="text/x-handlebars" data-template-name="parkinglot">
<div style="float:left; border: black solid 0px;">
	<a class="pbxtooltip" href="#">
	<img src="modules/<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
/images/info.png"/>
	<div>
		
		{{extension}}
		
	</div>
	</a>
</div>
<div style="float:left; width:135px; text-align:left; padding-left:4px;">
	
	<b><?php echo $_smarty_tpl->tpl_vars['LBL_PARKED']->value;?>
 ({{extension}})</b><br/>
	{{#if shortchannel }}
	<span class="monitor">{{shortchannel}}: {{formatTimeout}}</span><br/>
	{{/if}}
	
</div>
<div style="float: right; border: black solid 0px;">
	{{view App.DroppableIconView icon="modules/<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
/images/parking.png" }}
</div>
<?php echo '</script'; ?>
>



<?php echo '<script'; ?>
 type="text/x-handlebars" data-template-name="editable-title">

{{#if editing }}
{{view Ember.TextField valueBinding="description" }}
<button {{action "save" bubbles=false }}><?php echo $_smarty_tpl->tpl_vars['LBL_SAVE_NAME']->value;?>
</button>
{{else}}
{{description}} -- {{length}} ext
<span class="paneledittitle" {{action "edit" bubbles=false }}>[<?php echo $_smarty_tpl->tpl_vars['LBL_EDIT_NAME']->value;?>
]</span>
{{/if}}

<?php echo '</script'; ?>
>
</div>

 

<?php echo '<script'; ?>
 type="text/javascript">
var arrLang_main = <?php echo $_smarty_tpl->tpl_vars['ARRLANG_MAIN']->value;?>
;
var var_init = <?php echo $_smarty_tpl->tpl_vars['VAR_INIT']->value;?>


<?php echo '</script'; ?>
>

<?php }
}

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>{#style_dlg.title}</title>
	<script type="text/javascript" src="../../tiny_mce_popup.js"></script>
	<script type="text/javascript" src="../../utils/mctabs.js"></script>
	<script type="text/javascript" src="../../utils/editable_selects.js"></script>
	<script type="text/javascript" src="../../utils/form_utils.js"></script>
	<script type="text/javascript" src="js/props.js"></script>
	<link href="css/props.css" rel="stylesheet" type="text/css" />
	<base target="_self" />
</head>

<body id="styleprops" style="display: none">
<form onsubmit="updateAction();return false;" action="#">
<div class="tabs">
	<ul>
		<li id="text_tab" class="current"><span><a href="javascript:mcTabs.displayTab('text_tab','text_panel');" onMouseDown="return false;">{#style_dlg.text_tab}</a></span></li>
		<li id="background_tab"><span><a href="javascript:mcTabs.displayTab('background_tab','background_panel');" onMouseDown="return false;">{#style_dlg.background_tab}</a></span></li>
		<li id="block_tab"><span><a href="javascript:mcTabs.displayTab('block_tab','block_panel');" onMouseDown="return false;">{#style_dlg.block_tab}</a></span></li>
		<li id="box_tab"><span><a href="javascript:mcTabs.displayTab('box_tab','box_panel');" onMouseDown="return false;">{#style_dlg.box_tab}</a></span></li>
		<li id="border_tab"><span><a href="javascript:mcTabs.displayTab('border_tab','border_panel');" onMouseDown="return false;">{#style_dlg.border_tab}</a></span></li>
		<li id="list_tab"><span><a href="javascript:mcTabs.displayTab('list_tab','list_panel');" onMouseDown="return false;">{#style_dlg.list_tab}</a></span></li>
		<li id="positioning_tab"><span><a href="javascript:mcTabs.displayTab('positioning_tab','positioning_panel');" onMouseDown="return false;">{#style_dlg.positioning_tab}</a></span></li>
	</ul>
</div>

<div class="panel_wrapper">
<div id="text_panel" class="panel current">
	<table border="0" width="100%">
		<tr>
			<td><label for="text_font">{#style_dlg.text_font}</label></td>
			<td colspan="3">
				<select id="text_font" name="text_font" class="mceEditableSelect mceFocus"></select>
			</td>
		</tr>
		<tr>
			<td><label for="text_size">{#style_dlg.text_size}</label></td>
			<td>
				<table border="0" cellspacing="0" cellpadding="0">
					<tr>
						<td><select id="text_size" name="text_size" class="mceEditableSelect"></select></td>
						<td>&nbsp;</td>
      <td><select id="text_size_measurement" name="text_size_measurement"></select></td>
					</tr>
				</table>
			</td>
			<td><label for="text_weight">{#style_dlg.text_weight}</label></td>
			<td>
				<select id="text_weight" name="text_weight"></select>
			</td>
		</tr>
		<tr>
			<td><label for="text_style">{#style_dlg.text_style}</label></td>
			<td>
				<select id="text_style" name="text_style" class="mceEditableSelect"></select>
			</td>
			<td><label for="text_variant">{#style_dlg.text_variant}</label></td>
			<td>
				<select id="text_variant" name="text_variant"></select>
			</td>
		</tr>
		<tr>
			<td><label for="text_lineheight">{#style_dlg.text_lineheight}</label></td>
			<td>
				<table border="0" cellspacing="0" cellpadding="0">
					<tr>
						<td>
							<select id="text_lineheight" name="text_lineheight" class="mceEditableSelect"></select>
						</td>
						<td>&nbsp;</td>
						<td><select id="text_lineheight_measurement" name="text_lineheight_measurement"></select></td>
					</tr>
				</table>
			</td>
			<td><label for="text_case">{#style_dlg.text_case}</label></td>
			<td>
				<select id="text_case" name="text_case"></select>
			</td>
		</tr>
		<tr>
			<td><label for="text_color">{#style_dlg.text_color}</label></td>
			<td colspan="2">
				<table border="0" cellpadding="0" cellspacing="0">
					<tr>
						<td><input id="text_color" name="text_color" type="text" value="" size="9" onChange="updateColor('text_color_pick','text_color');" /></td>
						<td id="text_color_pickcontainer">&nbsp;</td>
					</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td valign="top" style="vertical-align: top; padding-top: 3px;">{#style_dlg.text_decoration}</td>
			<td colspan="2">
				<table border="0" cellspacing="0" cellpadding="0">
					<tr>
						<td><input id="text_underline" name="text_underline" class="checkbox" type="checkbox" /></td>
						<td><label for="text_underline">{#style_dlg.text_underline}</label></td>
					</tr>
					<tr>
						<td><input id="text_overline" name="text_overline" class="checkbox" type="checkbox" /></td>
						<td><label for="text_overline">{#style_dlg.text_overline}</label></td>
					</tr>
					<tr>
						<td><input id="text_linethrough" name="text_linethrough" class="checkbox" type="checkbox" /></td>
						<td><label for="text_linethrough">{#style_dlg.text_striketrough}</label></td>
					</tr>
					<tr>
						<td><input id="text_blink" name="text_blink" class="checkbox" type="checkbox" /></td>
						<td><label for="text_blink">{#style_dlg.text_blink}</label></td>
					</tr>
					<tr>
						<td><input id="text_none" name="text_none" class="checkbox" type="checkbox" /></td>
						<td><label for="text_none">{#style_dlg.text_none}</label></td>
					</tr>
				</table>
			</td>
		</tr>
	</table>
</div>

<div id="background_panel" class="panel">
	<table border="0">
		<tr>
			<td><label for="background_color">{#style_dlg.background_color}</label></td>
			<td>
				<table border="0" cellpadding="0" cellspacing="0">
					<tr>
						<td><input id="background_color" name="background_color" type="text" value="" size="9" onChange="updateColor('background_color_pick','background_color');" /></td>
						<td id="background_color_pickcontainer">&nbsp;</td>
					</tr>
				</table>
			</td>
		</tr>

		<tr>
			<td><label for="background_image">{#style_dlg.background_image}</label></td>
			<td><table border="0" cellspacing="0" cellpadding="0">
				<tr> 
				  <td><input id="background_image" name="background_image" type="text" /></td> 
				  <td id="background_image_browser">&nbsp;</td>
				</tr>
				</table>
			</td>
		</tr>

		<tr>
			<td><label for="background_repeat">{#style_dlg.background_repeat}</label></td>
			<td><select id="background_repeat" name="background_repeat" class="mceEditableSelect"></select></td>
		</tr>

		<tr>
			<td><label for="background_attachment">{#style_dlg.background_attachment}</label></td>
			<td><select id="background_attachment" name="background_attachment" class="mceEditableSelect"></select></td>
		</tr>

		<tr>
			<td><label for="background_hpos">{#style_dlg.background_hpos}</label></td>
			<td>
				<table border="0" cellspacing="0" cellpadding="0">
					<tr>
						<td><select id="background_hpos" name="background_hpos" class="mceEditableSelect"></select></td>
						<td>&nbsp;</td>
						<td><select id="background_hpos_measurement" name="background_hpos_measurement"></select></td>
					</tr>
				</table>
			</td>
		</tr>

		<tr>
			<td><label for="background_vpos">{#style_dlg.background_vpos}</label></td>
			<td>
				<table border="0" cellspacing="0" cellpadding="0">
					<tr>
						<td><select id="background_vpos" name="background_vpos" class="mceEditableSelect"></select></td>
						<td>&nbsp;</td>
						<td><select id="background_vpos_measurement" name="background_vpos_measurement"></select></td>
					</tr>
				</table>
			</td>
		</tr>
	</table>
</div>

<div id="block_panel" class="panel">
	<table border="0">
		<tr>
			<td><label for="block_wordspacing">{#style_dlg.block_wordspacing}</label></td>
			<td>
				<table border="0" cellspacing="0" cellpadding="0">
					<tr>
						<td><select id="block_wordspacing" name="block_wordspacing" class="mceEditableSelect"></select></td>
						<td>&nbsp;</td>
						<td><select id="block_wordspacing_measurement" name="block_wordspacing_measurement"></select></td>
					</tr>
				</table>
			</td>
		</tr>

		<tr>
			<td><label for="block_letterspacing">{#style_dlg.block_letterspacing}</label></td>
			<td>
				<table border="0" cellspacing="0" cellpadding="0">
					<tr>
						<td><select id="block_letterspacing" name="block_letterspacing" class="mceEditableSelect"></select></td>
						<td>&nbsp;</td>
						<td><select id="block_letterspacing_measurement" name="block_letterspacing_measurement"></select></td>
					</tr>
				</table>
			</td>
		</tr>

		<tr>
			<td><label for="block_vertical_alignment">{#style_dlg.block_vertical_alignment}</label></td>
			<td><select id="block_vertical_alignment" name="block_vertical_alignment" class="mceEditableSelect"></select></td>
		</tr>

		<tr>
			<td><label for="block_text_align">{#style_dlg.block_text_align}</label></td>
			<td><select id="block_text_align" name="block_text_align" class="mceEditableSelect"></select></td>
		</tr>

		<tr>
			<td><label for="block_text_indent">{#style_dlg.block_text_indent}</label></td>
			<td>
				<table border="0" cellspacing="0" cellpadding="0">
					<tr>
						<td><input type="text" id="block_text_indent" name="block_text_indent" /></td>
						<td>&nbsp;</td>
						<td><select id="block_text_indent_measurement" name="block_text_indent_measurement"></select></td>
					</tr>
				</table>
			</td>
		</tr>

		<tr>
			<td><label for="block_whitespace">{#style_dlg.block_whitespace}</label></td>
			<td><select id="block_whitespace" name="block_whitespace" class="mceEditableSelect"></select></td>
		</tr>

		<tr>
			<td><label for="block_display">{#style_dlg.block_display}</label></td>
			<td><select id="block_display" name="block_display" class="mceEditableSelect"></select></td>
		</tr>
	</table>
</div>

<div id="box_panel" class="panel">
<table border="0">
	<tr>
		<td><label for="box_width">{#style_dlg.box_width}</label></td>
		<td>
			<table border="0" cellspacing="0" cellpadding="0">
				<tr>
					<td><input type="text" id="box_width" name="box_width" class="mceEditableSelect" onChange="synch('box_width','positioning_width');" /></td>
					<td>&nbsp;</td>
					<td><select id="box_width_measurement" name="box_width_measurement"></select></td>
				</tr>
			</table>
		</td>
		<td>&nbsp;&nbsp;&nbsp;<label for="box_float">{#style_dlg.box_float}</label></td>
		<td><select id="box_float" name="box_float" class="mceEditableSelect"></select></td>
	</tr>

	<tr>
		<td><label for="box_height">{#style_dlg.box_height}</label></td>
		<td>
			<table border="0" cellspacing="0" cellpadding="0">
				<tr>
					<td><input type="text" id="box_height" name="box_height" class="mceEditableSelect" onChange="synch('box_height','positioning_height');" /></td>
					<td>&nbsp;</td>
					<td><select id="box_height_measurement" name="box_height_measurement"></select></td>
				</tr>
			</table>
		</td>
		<td>&nbsp;&nbsp;&nbsp;<label for="box_clear">{#style_dlg.box_clear}</label></td>
		<td><select id="box_clear" name="box_clear" class="mceEditableSelect"></select></td>
	</tr>
</table>
<div style="float: left; width: 49%">
	<fieldset>
		<legend>{#style_dlg.padding}</legend>

		<table border="0">
			<tr>
				<td>&nbsp;</td>
				<td><input type="checkbox" id="box_padding_same" name="box_padding_same" class="checkbox" checked="checked" onClick="toggleSame(this,'box_padding');" /> <label for="box_padding_same">{#style_dlg.same}</label></td>
			</tr>
			<tr>
				<td><label for="box_padding_top">{#style_dlg.top}</label></td>
				<td>
					<table border="0" cellspacing="0" cellpadding="0">
						<tr>
							<td><input type="text" id="box_padding_top" name="box_padding_top" class="mceEditableSelect" /></td>
							<td>&nbsp;</td>
							<td><select id="box_padding_top_measurement" name="box_padding_top_measurement"></select></td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td><label for="box_padding_right">{#style_dlg.right}</label></td>
				<td>
					<table border="0" cellspacing="0" cellpadding="0">
						<tr>
							<td><input type="text" id="box_padding_right" name="box_padding_right" class="mceEditableSelect" disabled="disabled" /></td>
							<td>&nbsp;</td>
							<td><select id="box_padding_right_measurement" name="box_padding_right_measurement" disabled="disabled"></select></td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td><label for="box_padding_bottom">{#style_dlg.bottom}</label></td>
				<td>
					<table border="0" cellspacing="0" cellpadding="0">
						<tr>
							<td><input type="text" id="box_padding_bottom" name="box_padding_bottom" class="mceEditableSelect" disabled="disabled" /></td>
							<td>&nbsp;</td>
							<td><select id="box_padding_bottom_measurement" name="box_padding_bottom_measurement" disabled="disabled"></select></td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td><label for="box_padding_left">{#style_dlg.left}</label></td>
				<td>
					<table border="0" cellspacing="0" cellpadding="0">
						<tr>
							<td><input type="text" id="box_padding_left" name="box_padding_left" class="mceEditableSelect" disabled="disabled" /></td>
							<td>&nbsp;</td>
							<td><select id="box_padding_left_measurement" name="box_padding_left_measurement" disabled="disabled"></select></td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
	</fieldset>
</div>

<div style="float: right; width: 49%">
	<fieldset>
		<legend>{#style_dlg.margin}</legend>

		<table border="0">
			<tr>
				<td>&nbsp;</td>
				<td><input type="checkbox" id="box_margin_same" name="box_margin_same" class="checkbox" checked="checked" onClick="toggleSame(this,'box_margin');" /> <label for="box_margin_same">{#style_dlg.same}</label></td>
			</tr>
			<tr>
				<td><label for="box_margin_top">{#style_dlg.top}</label></td>
				<td>
					<table border="0" cellspacing="0" cellpadding="0">
						<tr>
							<td><input type="text" id="box_margin_top" name="box_margin_top" class="mceEditableSelect" /></td>
							<td>&nbsp;</td>
							<td><select id="box_margin_top_measurement" name="box_margin_top_measurement"></select></td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td><label for="box_margin_right">{#style_dlg.right}</label></td>
				<td>
					<table border="0" cellspacing="0" cellpadding="0">
						<tr>
							<td><input type="text" id="box_margin_right" name="box_margin_right" class="mceEditableSelect" disabled="disabled" /></td>
							<td>&nbsp;</td>
							<td><select id="box_margin_right_measurement" name="box_margin_right_measurement" disabled="disabled"></select></td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td><label for="box_margin_bottom">{#style_dlg.bottom}</label></td>
				<td>
					<table border="0" cellspacing="0" cellpadding="0">
						<tr>
							<td><input type="text" id="box_margin_bottom" name="box_margin_bottom" class="mceEditableSelect" disabled="disabled" /></td>
							<td>&nbsp;</td>
							<td><select id="box_margin_bottom_measurement" name="box_margin_bottom_measurement" disabled="disabled"></select></td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td><label for="box_margin_left">{#style_dlg.left}</label></td>
				<td>
					<table border="0" cellspacing="0" cellpadding="0">
						<tr>
							<td><input type="text" id="box_margin_left" name="box_margin_left" class="mceEditableSelect" disabled="disabled" /></td>
							<td>&nbsp;</td>
							<td><select id="box_margin_left_measurement" name="box_margin_left_measurement" disabled="disabled"></select></td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
	</fieldset>
</div>
<br style="clear: both" />
</div>

<div id="border_panel" class="panel">
<table border="0" cellspacing="0" cellpadding="0" width="100%">
<tr>
	<td class="tdelim">&nbsp;</td>
	<td class="tdelim delim">&nbsp;</td>
	<td class="tdelim">{#style_dlg.style}</td>
	<td class="tdelim delim">&nbsp;</td>
	<td class="tdelim">{#style_dlg.width}</td>
	<td class="tdelim delim">&nbsp;</td>
	<td class="tdelim">{#style_dlg.color}</td>
</tr>

<tr>
	<td>&nbsp;</td>
	<td class="delim">&nbsp;</td>
	<td><input type="checkbox" id="border_style_same" name="border_style_same" class="checkbox" checked="checked" onClick="toggleSame(this,'border_style');" /> <label for="border_style_same">{#style_dlg.same}</label></td>
	<td class="delim">&nbsp;</td>
	<td><input type="checkbox" id="border_width_same" name="border_width_same" class="checkbox" checked="checked" onClick="toggleSame(this,'border_width');" /> <label for="border_width_same">{#style_dlg.same}</label></td>
	<td class="delim">&nbsp;</td>
	<td><input type="checkbox" id="border_color_same" name="border_color_same" class="checkbox" checked="checked" onClick="toggleSame(this,'border_color');" /> <label for="border_color_same">{#style_dlg.same}</label></td>
</tr>

<tr>
	<td>{#style_dlg.top}</td>
	<td class="delim">&nbsp;</td>
	<td><select id="border_style_top" name="border_style_top" class="mceEditableSelect"></select></td>
	<td class="delim">&nbsp;</td>
	<td>
		<table border="0" cellspacing="0" cellpadding="0">
			<tr>
				<td><select id="border_width_top" name="border_width_top" class="mceEditableSelect"></select></td>
				<td>&nbsp;</td>
				<td><select id="border_width_top_measurement" name="border_width_top_measurement"></select></td>
			</tr>
		</table>
	</td>
	<td class="delim">&nbsp;</td>
	<td>
		<table border="0" cellpadding="0" cellspacing="0">
			<tr>
				<td><input id="border_color_top" name="border_color_top" type="text" value="" size="9" onChange="updateColor('border_color_top_pick','border_color_top');" /></td>
				<td id="border_color_top_pickcontainer">&nbsp;</td>
			</tr>
		</table>
	</td>
</tr>

<tr>
	<td>{#style_dlg.right}</td>
	<td class="delim">&nbsp;</td>
	<td><select id="border_style_right" name="border_style_right" class="mceEditableSelect" disabled="disabled"></select></td>
	<td class="delim">&nbsp;</td>
	<td>
		<table border="0" cellspacing="0" cellpadding="0">
			<tr>
				<td><select id="border_width_right" name="border_width_right" class="mceEditableSelect" disabled="disabled"></select></td>
				<td>&nbsp;</td>
				<td><select id="border_width_right_measurement" name="border_width_right_measurement" disabled="disabled"></select></td>
			</tr>
		</table>
	</td>
	<td class="delim">&nbsp;</td>
	<td>
		<table border="0" cellpadding="0" cellspacing="0">
			<tr>
				<td><input id="border_color_right" name="border_color_right" type="text" value="" size="9" onChange="updateColor('border_color_right_pick','border_color_right');" disabled="disabled" /></td>
				<td id="border_color_right_pickcontainer">&nbsp;</td>
			</tr>
		</table>
	</td>
</tr>

<tr>
	<td>{#style_dlg.bottom}</td>
	<td class="delim">&nbsp;</td>
	<td><select id="border_style_bottom" name="border_style_bottom" class="mceEditableSelect" disabled="disabled"></select></td>
	<td class="delim">&nbsp;</td>
	<td>
		<table border="0" cellspacing="0" cellpadding="0">
			<tr>
				<td><select id="border_width_bottom" name="border_width_bottom" class="mceEditableSelect" disabled="disabled"></select></td>
				<td>&nbsp;</td>
				<td><select id="border_width_bottom_measurement" name="border_width_bottom_measurement" disabled="disabled"></select></td>
			</tr>
		</table>
	</td>
	<td class="delim">&nbsp;</td>
	<td>
		<table border="0" cellpadding="0" cellspacing="0">
			<tr>
				<td><input id="border_color_bottom" name="border_color_bottom" type="text" value="" size="9" onChange="updateColor('border_color_bottom_pick','border_color_bottom');" disabled="disabled" /></td>
				<td id="border_color_bottom_pickcontainer">&nbsp;</td>
			</tr>
		</table>
	</td>
</tr>

<tr>
	<td>{#style_dlg.left}</td>
	<td class="delim">&nbsp;</td>
	<td><select id="border_style_left" name="border_style_left" class="mceEditableSelect" disabled="disabled"></select></td>
	<td class="delim">&nbsp;</td>
	<td>
		<table border="0" cellspacing="0" cellpadding="0">
			<tr>
				<td><select id="border_width_left" name="border_width_left" class="mceEditableSelect" disabled="disabled"></select></td>
				<td>&nbsp;</td>
				<td><select id="border_width_left_measurement" name="border_width_left_measurement" disabled="disabled"></select></td>
			</tr>
		</table>
	</td>
	<td class="delim">&nbsp;</td>
	<td>
		<table border="0" cellpadding="0" cellspacing="0">
			<tr>
				<td><input id="border_color_left" name="border_color_left" type="text" value="" size="9" onChange="updateColor('border_color_left_pick','border_color_left');" disabled="disabled" /></td>
				<td id="border_color_left_pickcontainer">&nbsp;</td>
			</tr>
		</table>
	</td>
</tr>
</table>
</div>

<div id="list_panel" class="panel">
	<table border="0">
		<tr>
			<td><label for="list_type">{#style_dlg.list_type}</label></td>
			<td><select id="list_type" name="list_type" class="mceEditableSelect"></select></td>
		</tr>

		<tr>
			<td><label for="list_bullet_image">{#style_dlg.bullet_image}</label></td>
			<td><input id="list_bullet_image" name="list_bullet_image" type="text" /></td>
		</tr>

		<tr>
			<td><label for="list_position">{#style_dlg.position}</label></td>
			<td><select id="list_position" name="list_position" class="mceEditableSelect"></select></td>
		</tr>
	</table>
</div>

<div id="positioning_panel" class="panel">
<table border="0">
	<tr>
		<td><label for="positioning_type">{#style_dlg.positioning_type}</label></td>
		<td><select id="positioning_type" name="positioning_type" class="mceEditableSelect"></select></td>
		<td>&nbsp;&nbsp;&nbsp;<label for="positioning_visibility">{#style_dlg.visibility}</label></td>
		<td><select id="positioning_visibility" name="positioning_visibility" class="mceEditableSelect"></select></td>
	</tr>

	<tr>
		<td><label for="positioning_width">{#style_dlg.width}</label></td>
		<td>
			<table border="0" cellspacing="0" cellpadding="0">
				<tr>
					<td><input type="text" id="positioning_width" name="positioning_width" onChange="synch('positioning_width','box_width');" /></td>
					<td>&nbsp;</td>
					<td><select id="positioning_width_measurement" name="positioning_width_measurement"></select></td>
				</tr>
			</table>
		</td>
		<td>&nbsp;&nbsp;&nbsp;<label for="positioning_zindex">{#style_dlg.zindex}</label></td>
		<td><input type="text" id="positioning_zindex" name="positioning_zindex" /></td>
	</tr>

	<tr>
		<td><label for="positioning_height">{#style_dlg.height}</label></td>
		<td>
			<table border="0" cellspacing="0" cellpadding="0">
				<tr>
					<td><input type="text" id="positioning_height" name="positioning_height" onChange="synch('positioning_height','box_height');" /></td>
					<td>&nbsp;</td>
					<td><select id="positioning_height_measurement" name="positioning_height_measurement"></select></td>
				</tr>
			</table>
		</td>
		<td>&nbsp;&nbsp;&nbsp;<label for="positioning_overflow">{#style_dlg.overflow}</label></td>
		<td><select id="positioning_overflow" name="positioning_overflow" class="mceEditableSelect"></select></td>
	</tr>
</table>

<div style="float: left; width: 49%">
	<fieldset>
		<legend>{#style_dlg.placement}</legend>

		<table border="0">
			<tr>
				<td>&nbsp;</td>
				<td><input type="checkbox" id="positioning_placement_same" name="positioning_placement_same" class="checkbox" checked="checked" onClick="toggleSame(this,'positioning_placement');" /> <label for="positioning_placement_same">{#style_dlg.same}</label></td>
			</tr>
			<tr>
				<td>{#style_dlg.top}</td>
				<td>
					<table border="0" cellspacing="0" cellpadding="0">
						<tr>
							<td><input type="text" id="positioning_placement_top" name="positioning_placement_top" /></td>
							<td>&nbsp;</td>
							<td><select id="positioning_placement_top_measurement" name="positioning_placement_top_measurement"></select></td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td>{#style_dlg.right}</td>
				<td>
					<table border="0" cellspacing="0" cellpadding="0">
						<tr>
							<td><input type="text" id="positioning_placement_right" name="positioning_placement_right" disabled="disabled" /></td>
							<td>&nbsp;</td>
							<td><select id="positioning_placement_right_measurement" name="positioning_placement_right_measurement" disabled="disabled"></select></td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td>{#style_dlg.bottom}</td>
				<td>
					<table border="0" cellspacing="0" cellpadding="0">
						<tr>
							<td><input type="text" id="positioning_placement_bottom" name="positioning_placement_bottom" disabled="disabled" /></td>
							<td>&nbsp;</td>
							<td><select id="positioning_placement_bottom_measurement" name="positioning_placement_bottom_measurement" disabled="disabled"></select></td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td>{#style_dlg.left}</td>
				<td>
					<table border="0" cellspacing="0" cellpadding="0">
						<tr>
							<td><input type="text" id="positioning_placement_left" name="positioning_placement_left" disabled="disabled" /></td>
							<td>&nbsp;</td>
							<td><select id="positioning_placement_left_measurement" name="positioning_placement_left_measurement" disabled="disabled"></select></td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
	</fieldset>
</div>

<div style="float: right; width: 49%">
	<fieldset>
		<legend>{#style_dlg.clip}</legend>

		<table border="0">
			<tr>
				<td>&nbsp;</td>
				<td><input type="checkbox" id="positioning_clip_same" name="positioning_clip_same" class="checkbox" checked="checked" onClick="toggleSame(this,'positioning_clip');" /> <label for="positioning_clip_same">{#style_dlg.same}</label></td>
			</tr>
			<tr>
				<td>{#style_dlg.top}</td>
				<td>
					<table border="0" cellspacing="0" cellpadding="0">
						<tr>
							<td><input type="text" id="positioning_clip_top" name="positioning_clip_top" /></td>
							<td>&nbsp;</td>
							<td><select id="positioning_clip_top_measurement" name="positioning_clip_top_measurement"></select></td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td>{#style_dlg.right}</td>
				<td>
					<table border="0" cellspacing="0" cellpadding="0">
						<tr>
							<td><input type="text" id="positioning_clip_right" name="positioning_clip_right" disabled="disabled" /></td>
							<td>&nbsp;</td>
							<td><select id="positioning_clip_right_measurement" name="positioning_clip_right_measurement" disabled="disabled"></select></td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td>{#style_dlg.bottom}</td>
				<td>
					<table border="0" cellspacing="0" cellpadding="0">
						<tr>
							<td><input type="text" id="positioning_clip_bottom" name="positioning_clip_bottom" disabled="disabled" /></td>
							<td>&nbsp;</td>
							<td><select id="positioning_clip_bottom_measurement" name="positioning_clip_bottom_measurement" disabled="disabled"></select></td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td>{#style_dlg.left}</td>
				<td>
					<table border="0" cellspacing="0" cellpadding="0">
						<tr>
							<td><input type="text" id="positioning_clip_left" name="positioning_clip_left" disabled="disabled" /></td>
							<td>&nbsp;</td>
							<td><select id="positioning_clip_left_measurement" name="positioning_clip_left_measurement" disabled="disabled"></select></td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
	</fieldset>
</div>
<br style="clear: both" />
</div>
</div>

<div class="mceActionPanel">
	<div style="float: left">
		<div style="float: left"><input type="submit" id="insert" name="insert" value="{#update}" /></div>

		<div style="float: left">&nbsp;<input type="button" class="button" id="apply" name="apply" value="{#style_dlg.apply}" onClick="applyAction();" /></div>
		<br style="clear: both" />
	</div>

	<div style="float: right">
		<input type="button" id="cancel" name="cancel" value="{#cancel}" onClick="tinyMCEPopup.close();" />
	</div>
</div>
</form>

<div style="display: none">
	<div id="container"></div>
</div>

</body>
</html>

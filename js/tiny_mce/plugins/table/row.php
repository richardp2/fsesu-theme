<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>{#table_dlg.row_title}</title>
	<script type="text/javascript" src="../../tiny_mce_popup.js"></script>
	<script type="text/javascript" src="../../utils/mctabs.js"></script>
	<script type="text/javascript" src="../../utils/form_utils.js"></script>
	<script type="text/javascript" src="js/row.js"></script>
	<link href="css/row.css" rel="stylesheet" type="text/css" />
	<base target="_self" />
</head>
<body id="tablerow" style="display: none">
	<form onsubmit="updateAction();return false;">
		<div class="tabs">
			<ul>
				<li id="general_tab" class="current"><span><a href="javascript:mcTabs.displayTab('general_tab','general_panel');" onmousedown="return false;">{#table_dlg.general_tab}</a></span></li>
				<li id="advanced_tab"><span><a href="javascript:mcTabs.displayTab('advanced_tab','advanced_panel');" onmousedown="return false;">{#table_dlg.advanced_tab}</a></span></li>
			</ul>
		</div>

		<div class="panel_wrapper">
			<div id="general_panel" class="panel current">
				<fieldset>
					<legend>{#table_dlg.general_props}</legend>

					<table border="0" cellpadding="4" cellspacing="0">
						<tr>
							<td><label for="rowtype">{#table_dlg.rowtype}</label></td>
							<td class="col2">
								<select id="rowtype" name="rowtype" class="mceFocus">
									<option value="thead">{#table_dlg.thead}</option>
									<option value="tbody">{#table_dlg.tbody}</option>
									<option value="tfoot">{#table_dlg.tfoot}</option>
								</select>
							</td>
						</tr>

						<tr>
							<td><label for="align">{#table_dlg.align}</label></td>
							<td class="col2">
								<select id="align" name="align">
									<option value="">{#not_set}</option>
									<option value="center">{#table_dlg.align_middle}</option>
									<option value="left">{#table_dlg.align_left}</option>
									<option value="right">{#table_dlg.align_right}</option>
								</select>
							</td>
						</tr>

						<tr>
							<td><label for="valign">{#table_dlg.valign}</label></td>
							<td class="col2">
								<select id="valign" name="valign">
									<option value="">{#not_set}</option>
									<option value="top">{#table_dlg.align_top}</option>
									<option value="middle">{#table_dlg.align_middle}</option>
									<option value="bottom">{#table_dlg.align_bottom}</option>
								</select>
							</td>
						</tr>

						<tr id="styleSelectRow">
							<td><label for="class">{#class_name}</label></td>
							<td class="col2">
								<select id="class" name="class">
									<option value="" selected="selected">{#not_set}</option>
								</select>
							</td>
						</tr>

						<tr>
							<td><label for="height">{#table_dlg.height}</label></td>
							<td class="col2"><input name="height" type="text" id="height" value="" size="4" maxlength="4" onchange="changedSize();" /></td>
						</tr>
					</table>
				</fieldset>
			</div>

			<div id="advanced_panel" class="panel">
				<fieldset>
					<legend>{#table_dlg.advanced_props}</legend>

					<table border="0" cellpadding="0" cellspacing="4">
						<tr>
							<td class="column1"><label for="id">{#table_dlg.id}</label></td> 
							<td><input id="id" name="id" type="text" value="" style="width: 200px" /></td> 
						</tr>

						<tr>
							<td><label for="style">{#table_dlg.style}</label></td>
							<td><input type="text" id="style" name="style" value="" style="width: 200px;" onchange="changedStyle();" /></td>
						</tr>

						<tr>
							<td class="column1"><label for="dir">{#table_dlg.langdir}</label></td> 
							<td>
								<select id="dir" name="dir" style="width: 200px"> 
										<option value="">{#not_set}</option> 
										<option value="ltr">{#table_dlg.ltr}</option> 
										<option value="rtl">{#table_dlg.rtl}</option> 
								</select>
							</td> 
						</tr>

						<tr>
							<td class="column1"><label for="lang">{#table_dlg.langcode}</label></td> 
							<td>
								<input id="lang" name="lang" type="text" value="" style="width: 200px" />
							</td> 
						</tr>

						<tr>
							<td class="column1"><label for="backgroundimage">{#table_dlg.bgimage}</label></td> 
							<td>
								<table border="0" cellpadding="0" cellspacing="0">
									<tr>
										<td><input id="backgroundimage" name="backgroundimage" type="text" value="" style="width: 200px" onchange="changedBackgroundImage();" /></td>
										<td id="backgroundimagebrowsercontainer">&nbsp;</td>
									</tr>
								</table>
							</td> 
						</tr>

						<tr>
							<td class="column1"><label for="bgcolor">{#table_dlg.bgcolor}</label></td> 
							<td>
								<table border="0" cellpadding="0" cellspacing="0">
									<tr>
										<td><input id="bgcolor" name="bgcolor" type="text" value="" size="9" onchange="updateColor('bgcolor_pick','bgcolor');changedColor();" /></td>
										<td id="bgcolor_pickcontainer">&nbsp;</td>
									</tr>
								</table>
							</td> 
						</tr>
					</table>
				</fieldset>
			</div>
		</div>

		<div class="mceActionPanel">
			<div>
				<select id="action" name="action">
					<option value="row">{#table_dlg.row_row}</option>
					<option value="odd">{#table_dlg.row_odd}</option>
					<option value="even">{#table_dlg.row_even}</option>
					<option value="all">{#table_dlg.row_all}</option>
				</select>
			</div>

			<div style="float: left">
				<div><input type="submit" id="insert" name="insert" value="{#update}" /></div>
			</div>

			<div style="float: right">
				<input type="button" id="cancel" name="cancel" value="{#cancel}" onclick="tinyMCEPopup.close();" />
			</div>
		</div>
	</form>
</body>
</html>

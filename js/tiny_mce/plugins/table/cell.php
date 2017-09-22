<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>{#table_dlg.cell_title}</title>
	<script type="text/javascript" src="../../tiny_mce_popup.js"></script>
	<script type="text/javascript" src="../../utils/mctabs.js"></script>
	<script type="text/javascript" src="../../utils/form_utils.js"></script>
	<script type="text/javascript" src="js/cell.js"></script>
	<link href="css/cell.css" rel="stylesheet" type="text/css" />
	<base target="_self" />
</head>
<body id="tablecell" style="display: none">
	<form onsubmit="updateAction();return false;" action="#">
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
							<td><label for="align">{#table_dlg.align}</label></td>
							<td>
								<select id="align" name="align" class="mceFocus">
									<option value="">{#not_set}</option>
									<option value="center">{#table_dlg.align_middle}</option>
									<option value="left">{#table_dlg.align_left}</option>
									<option value="right">{#table_dlg.align_right}</option>
								</select>
							</td>
		
							<td><label for="celltype">{#table_dlg.cell_type}</label></td>
							<td>
								<select id="celltype" name="celltype">
									<option value="td">{#table_dlg.td}</option>
									<option value="th">{#table_dlg.th}</option>
								</select>
							</td>
						</tr>

						<tr>
							<td><label for="valign">{#table_dlg.valign}</label></td>
							<td>
								<select id="valign" name="valign">
									<option value="">{#not_set}</option>
									<option value="top">{#table_dlg.align_top}</option>
									<option value="middle">{#table_dlg.align_middle}</option>
									<option value="bottom">{#table_dlg.align_bottom}</option>
								</select>
							</td>

							<td><label for="scope">{#table_dlg.scope}</label></td>
							<td>
								<select id="scope" name="scope">
									<option value="">{#not_set}</option>
									<option value="col">{#table.col}</option>
									<option value="row">{#table.row}</option>
									<option value="rowgroup">{#table_dlg.rowgroup}</option>
									<option value="colgroup">{#table_dlg.colgroup}</option>
								</select>
							</td>

						</tr>

						<tr>
							<td><label for="width">{#table_dlg.width}</label></td>
							<td><input id="width" name="width" type="text" value="" size="4" maxlength="4" onchange="changedSize();" /></td>

							<td><label for="height">{#table_dlg.height}</label></td>
							<td><input id="height" name="height" type="text" value="" size="4" maxlength="4" onchange="changedSize();" /></td>
						</tr>

						<tr id="styleSelectRow">
							<td><label for="class">{#class_name}</label></td>
							<td colspan="3">
								<select id="class" name="class">
									<option value="" selected="selected">{#not_set}</option>
								</select>
							</td>
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
							<td class="column1"><label for="bordercolor">{#table_dlg.bordercolor}</label></td> 
							<td>
								<table border="0" cellpadding="0" cellspacing="0">
									<tr>
										<td><input id="bordercolor" name="bordercolor" type="text" value="" size="9" onchange="updateColor('bordercolor_pick','bordercolor');changedColor();" /></td>
										<td id="bordercolor_pickcontainer">&nbsp;</td>
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
					<option value="cell">{#table_dlg.cell_cell}</option>
					<option value="row">{#table_dlg.cell_row}</option>
					<option value="all">{#table_dlg.cell_all}</option>
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

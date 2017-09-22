<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title></title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<script type="text/javascript" src="../../tiny_mce.js"></script>
	<script type="text/javascript">
		function patchCallback(settings, key) {
			if (settings[key])
				settings[key] = "window.opener." + settings[key];
		}

		var settings = {}, paSe = window.opener.tinyMCE.activeEditor.settings;

		// Clone array
		for (var n in paSe)
			settings[n] = paSe[n];

		// Override options for fullscreen
		for (var n in paSe.fullscreen_settings)
			settings[n] = paSe.fullscreen_settings[n];

		// Patch callbacks, make them point to window.opener
		patchCallback(settings, 'urlconverter_callback');
		patchCallback(settings, 'insertlink_callback');
		patchCallback(settings, 'insertimage_callback');
		patchCallback(settings, 'setupcontent_callback');
		patchCallback(settings, 'save_callback');
		patchCallback(settings, 'onchange_callback');
		patchCallback(settings, 'init_instance_callback');
		patchCallback(settings, 'file_browser_callback');
		patchCallback(settings, 'cleanup_callback');
		patchCallback(settings, 'execcommand_callback');
		patchCallback(settings, 'oninit');

		// Set options
		delete settings.id;
		settings['mode'] = 'exact';
		settings['elements'] = 'fullscreenarea';
		settings['add_unload_trigger'] = false;
		settings['ask'] = false;
		settings['document_base_url'] = window.opener.tinyMCE.activeEditor.documentBaseURI.getURI();
		settings['fullscreen_is_enabled'] = true;
		settings['fullscreen_editor_id'] = window.opener.tinyMCE.activeEditor.id;
		settings['theme_advanced_resizing'] = false;
		settings['strict_loading_mode'] = true;

		settings.save_onsavecallback = function() {
			window.opener.tinyMCE.activeEditor.setContent(tinyMCE.get('fullscreenarea').getContent({format : 'raw'}), {format : 'raw'});
			window.opener.tinyMCE.activeEditor.execCommand('mceSave');
			window.close();
		};

		function unloadHandler(e) {
			moveContent();
		}

		function moveContent() {
			window.opener.tinyMCE.activeEditor.setContent(tinyMCE.activeEditor.getContent());
		}

		function closeFullscreen() {
			moveContent();
			window.close();
		}

		function doParentSubmit() {
			moveContent();

			if (window.opener.tinyMCE.selectedInstance.formElement.form)
				window.opener.tinyMCE.selectedInstance.formElement.form.submit();

			window.close();

			return false;
		}

		function render() {
			var e = document.getElementById('fullscreenarea'), vp, ed, ow, oh, dom = tinymce.DOM;

			e.value = window.opener.tinyMCE.activeEditor.getContent();

			vp = dom.getViewPort();
			settings.width = vp.w;
			settings.height = vp.h - 15;

			tinymce.dom.Event.add(window, 'resize', function() {
				var vp = dom.getViewPort();

				tinyMCE.activeEditor.theme.resizeTo(vp.w, vp.h);
			});

			tinyMCE.init(settings);
		}

		// Add onunload
		tinymce.dom.Event.add(window, "beforeunload", unloadHandler);
	</script>
	<base target="_self" />
</head>
<body style="margin:0;overflow:hidden;width:100%;height:100%" scrolling="no" scroll="no">
<form onsubmit="doParentSubmit();">
<textarea id="fullscreenarea" style="width:100%; height:100%"></textarea>
</form>

<script type="text/javascript">
	render();
</script>

</body>
</html>

﻿tinyMCE.init(
{
   // General options
   mode : 'textareas',
   theme : 'advanced',
   plugins : 'safari,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template',

   // Theme options
   theme_advanced_buttons1 : 'newdocument,opendocument,save,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,styleselect,formatselect,fontselect,fontsizeselect',
   theme_advanced_buttons2 : 'cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor',
   theme_advanced_buttons3 : 'tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen',
   theme_advanced_buttons4 : 'insertlayer,moveforward,movebackward,absolute,|,styleprops,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,pagebreak',
   auto_resize : true,
   theme_advanced_toolbar_location : 'top',
   theme_advanced_toolbar_align : 'left',
   theme_advanced_statusbar_location : 'bottom',
   theme_advanced_resizing : false,
   force_p_newlines : true,
   width : 758,
   height : 500,

   // Content CSS
   content_css : "./../css/stylesheet3.css",
});
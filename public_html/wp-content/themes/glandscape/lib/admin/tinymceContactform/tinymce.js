function insertContactformShortcode() {
	
	var shortcodeText;
	var emailId = document.getElementById('email').value;
	

	
	shortcodeText = '[contactform email="' + emailId + '"]';
	
	//shortcodeText = "Portfolio inserted"
		
	
	if(window.tinyMCE) {
		//TODO: For QTranslate we should use here 'qtrans_textarea_content' instead 'content'
		window.tinyMCE.execInstanceCommand('content', 'mceInsertContent', false, shortcodeText);
		//Peforms a clean up of the current editor HTML. 
		//tinyMCEPopup.editor.execCommand('mceCleanup');
		//Repaints the editor. Sometimes the browser has gragbluc glitches. 
		tinyMCEPopup.editor.execCommand('mceRepaint');
		tinyMCEPopup.close();
	}
	return;
}

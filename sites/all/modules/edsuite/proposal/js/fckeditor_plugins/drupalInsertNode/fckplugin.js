// drupalInsertNodeObject constructor
var drupalInsertNodeToolbarCommand = function() {
}

// register the command
FCKCommands.RegisterCommand('drupalInsertNode', new drupalInsertNodeToolbarCommand());

// create the toolbar  button
var drupalInsertNodeButton = new FCKToolbarButton('drupalInsertNode', 'Insert a Drupal Node');
drupalInsertNodeButton.IconPath = FCKPlugins.Items['drupalInsertNode'].Path + 'images/toolbarIcon_default.gif'; // or pick any other in folder 'images'
FCKToolbarItems.RegisterItem('drupalInsertNode', drupalInsertNodeButton);

// manage the plugins' button behavior
drupalInsertNodeToolbarCommand.prototype.GetState = function() {
	return FCK_TRISTATE_OFF;
}

// drupalInsertNode's button click function
drupalInsertNodeToolbarCommand.prototype.Execute = function() {
	var dialog = new FCKDialogCommand('drupalInsertNode', 'Insert a Drupal Node', FCKPlugins.Items['drupalInsertNode'].Path + 'drupalInsertNode.html', 600, 500);
	dialog.Execute();
}

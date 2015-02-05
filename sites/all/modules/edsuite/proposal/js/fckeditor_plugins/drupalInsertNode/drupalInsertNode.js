var dialog = window.parent;
var editorWindow = dialog.InnerDialogLoaded();
var editorInstance = editorWindow.FCK;
var FCKConfig = editorWindow.FCKConfig;
var FCKTools = editorWindow.FCKTools;
var FCKBrowserInfo = editorWindow.FCKBrowserInfo;

var contentToInsert = '';

$().ready(function() {
    $('#drupalInsertNodeTitle').autocomplete(editorInstance.Config.drupalInsertNode_autocomplete_url, {formatItem: function(row) {return(row);}});
    $('#drupalInsertNodeTitle').result(function(event, data, formatted) {
        if (formatted) {
            var node_id = formatted.match(/\(node:(\d+)\)/)[1];
            // Fetch the node in question and output it into the text area.
            $.get(editorInstance.Config.drupalInsertNode_fetch_url + node_id, null, function(json) {
                $('body').append('<div id="copy-content-temp-holder"></div>');
                document.getElementById('copy-content-temp-holder').innerHTML = json.body;

                $('div#copy-content-temp-holder div.report_change').remove();

                if ($('div#copy-content-temp-holder div.content').html()) {
                    contentToInsert = $('div#copy-content-temp-holder div.content').html();
                } else
                if ($('div#copy-content-temp-holder div.node').html()) {
                    $('div#copy-content-temp-holder div.node div.clear-block').remove();
                    $('div#copy-content-temp-holder div.node div.full-article').remove();
                    $('div#copy-content-temp-holder div.node div.bottom-links').remove();
                    $('div#copy-content-temp-holder div.node form#eds-send-email-contact').remove();
                    contentToInsert = $('div#copy-content-temp-holder div.node').html();
                } else {
                    contentToInsert = json.body;
                }
                $('div#copy-content-temp-holder').remove();

                $('#drupalInsertNodePreview').html(contentToInsert);
            }, "json");
        }
    });
});

// onload
window.onload = function()
{
	// translate the dialog box texts
	editorWindow.FCKLanguageManager.TranslatePage(document);

	// activate the "OK" button
	dialog.SetOkButton(true);
}

// dialog's 'ok' button function to insert the Html
function Ok()
{
	if ($('#drupalInsertNodePreview').html())
	{
		editorInstance.InsertHtml(contentToInsert);
		editorWindow.FCKUndo.SaveUndoStep();

		return true; // makes the dialog to close
	}
}
FCKConfig.PluginsPath = '../../plugins/' ;
FCKConfig.Plugins.Add( 'imgassist' ) ;
FCKConfig.Plugins.Add( 'pastetable' ) ;

FCKConfig.Plugins.Add( 'drupalInsertNode', null, '../../../../../proposal/js/fckeditor_plugins/' ) ;

/*
 This toolbar set is for the proposal nodes
 */
FCKConfig.ToolbarSets["EDsuiteFull"] = [
['Source'],
['Cut','Copy','Paste','PasteText','PasteWord','EDSPasteTable','SpellCheck','drupalInsertNode'],
['Undo','Redo','-','RemoveFormat'],
['Bold','Italic','Underline','StrikeThrough','-'],
['OrderedList','UnorderedList','-','Outdent','Indent'],
['JustifyLeft','JustifyCenter','JustifyRight'],
['Link','Unlink','Anchor'],
['Image','Table','Rule','SpecialChar'],
'/',
['FontFormat'],
['TextColor','FontSize']
] ;

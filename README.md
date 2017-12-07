# ForceWatchers

## Add Watchers
This extension allows you to use {{#forcewatchers:username,username1,username3}} to add multiple users as watchers to a page. They will not be able to unwatch the page unless their username is removed from the parser function.

## Output
This extension will have an output that shows the user's real name, and say they have been added as a watcher. To turn the output off/on set "ForceWatchersShowOutput" in the extension.json file to true or false.

### Example
{{#info:{{#forcewatchers: {{#show:{{PAGENAME}} |?Project members usernames}}}}|note}} 
{{#forcewatchers:username,username1,username3}}

# ez AJAX Shop


Created for Rune-Server.

This is a project where I will constantly be pushing updates, forks etc where I deem fit. This is completely free, the reason why this is on GitHub. License is Mozilla Public License 2.0

Under no circumstances may you re-use ANYTHING (including, but not limited to: snippets of code, sprites or images, (not including those which do not belong to us) for the purpose of selling.

# Features
  - AJAX Based 
  - See HTML in the right
  - Magic

You can also:
  - Import and save files from GitHub, Dropbox, Google Drive and One Drive
  - Drag and drop files into Dillinger
  - Export documents as Markdown, HTML and PDF

Markdown is a lightweight markup language based on the formatting conventions that people naturally use in email.  As [John Gruber] writes on the [Markdown site][df1]

> The overriding design goal for Markdown's
> formatting syntax is to make it as readable
> as possible. The idea is that a
> Markdown-formatted document should be
> publishable as-is, as plain text, without
> looking like it's been marked up with tags
> or formatting instructions.

This text you see here is *actually* written in Markdown! To get a feel for Markdown's syntax, type some text into the left window and watch the results in the right.

### JavaScript Libraries

ez AJAX Shop uses a number of open source projects to work properly:

* [AlertifyJS] - Enhanced notifications & alerts for web apps.
* [jQuery] - The ultimate JavaScript simplicity framework.

And of course Dillinger itself is open source with a [public repository][dill]
 on GitHub.

### Installation

Download and extract the [latest release](https://github.com/Brandito24/ezajaxshop).

Place in web root or similar and start the web server/service.





# **For production environments:**
**DO NOT USE IN A PRODUCTION ENVIRONMENT!**

Always contact Brandon (original & current author) before deploying this in a production environment.
The project should be thoroughly checked for any possible security issues, including but not limited to:,
- **SQL Injection** (Where a user attempts to do wrong by attempting to escape any parsed string that is used in MySQL)
    To avoid this, either use PDO to connect to your MySQL server, or use MySQLi combined with MySQLi functions to clean your strings
- **XSS Cross-Site Scripting** (Where a user attempts to do wrong by attempting to interfere with any HTML by placing HTML markup inside input that is then to be printed on the page)


### Plugins

In future, I (Brandon) plan to create a plugin system allowing the integration & creation of new user submitted additions


### Development

Want to contribute? Great!

ez AJAX Shop is hosted on GitHub for fast and easy developing.
Push/Merge requests are filtered by Brandon personally.

**Git Repository URL**
```
https://github.com/Brandito24/ezajaxshop.git
```

**Git Clone Repository Example**
```sh
$ git clone https://github.com/Brandito24/ezajaxshop.git
```


### Todo List

 - Back-end developing
 - Rethink current theme/layout & continue to improve styling
 - Add Control Panel

License
----

Mozilla Public License 2.0


**Created by Brandon** open-source for **Rune-Server** &amp; **RuneScape Private Servers**
**Brandon _&copy;_ 2016**


#### Credits
Couldn't leave this out :)
------
| Who        	| Role                                   	|
|------------	|----------------------------------------	|
| Brandon    	| Creator, Lead Developer, Lead Designer 	|
| BurntToast 	| Product Testing, Design Critic         	|
------


[//]: # (These are reference links used in the body of this note and get stripped out when the markdown processor does its job. There is no need to format nicely because it shouldn't be seen. Thanks SO - http://stackoverflow.com/questions/4823468/store-comments-in-markdown-syntax)


   [dill]: <https://github.com/joemccann/dillinger>
   [git-repo-url]: <https://github.com/joemccann/dillinger.git>
   [john gruber]: <http://daringfireball.net>
   [@thomasfuchs]: <http://twitter.com/thomasfuchs>
   [df1]: <http://daringfireball.net/projects/markdown/>
   [markdown-it]: <https://github.com/markdown-it/markdown-it>
   [Ace Editor]: <http://ace.ajax.org>
   [node.js]: <http://nodejs.org>
   [Twitter Bootstrap]: <http://twitter.github.com/bootstrap/>
   [keymaster.js]: <https://github.com/madrobby/keymaster>
   [jQuery]: <http://jquery.com>
   [@tjholowaychuk]: <http://twitter.com/tjholowaychuk>
   [express]: <http://expressjs.com>
   [AngularJS]: <http://angularjs.org>
   [Gulp]: <http://gulpjs.com>

   [PlDb]: <https://github.com/joemccann/dillinger/tree/master/plugins/dropbox/README.md>
   [PlGh]:  <https://github.com/joemccann/dillinger/tree/master/plugins/github/README.md>
   [PlGd]: <https://github.com/joemccann/dillinger/tree/master/plugins/googledrive/README.md>
   [PlOd]: <https://github.com/joemccann/dillinger/tree/master/plugins/onedrive/README.md>


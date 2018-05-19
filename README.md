DokuWiki-matomo
===============

This is a plugin for DokuWiki (https://www.dokuwiki.org). In integrates a editable tracking code or image into DokuWiki pages to track user actions with Matomo (see https://matomo.org/).

Plugin Data
===============

Field        | Data
:------------|:--------------------------------------------------------------------------------------
description  | Plugin for the new 3.x version of Matomo (formaly Piwik), the open source Google Analytics alternative. It's the followup version of https://www.dokuwiki.org/plugin:piwik2.
author       | Bravehartk2 (Marcel Lange)
email        | info@ask-sheldon.de
type         | admin
lastupdate   | 2018-05-19
compatible   | binky, 2014-04-28, Detritus, Elenor of Tsort, Frusterick Manners, Greebo
conflicts    | piwik, piwik2
similar      | googleanalytics
tags         | Tracking, Statistics, Piwik, Google Analytics alternativ
downloadurl  | https://github.com/Bravehartk2/dokuwiki-matomo/tarball/master
bugtracker   | https://github.com/Bravehartk2/dokuwiki-matomo/issues
sourcerepo   | https://github.com/Bravehartk2/dokuwiki-matomo

Description
===============
Plugin for the new 3.x version of Matomo (formaly Piwik), the open source Google Analytics alternative. It's the followup version of https://www.dokuwiki.org/plugin:piwik2. 
(inspired by the piwik plugin from Heikki Hokkanen <hoxu@users.sf.net>, https://www.dokuwiki.org/plugin:piwik)

Installation
===============
Just install the plugin using the PluginManager(https://www.dokuwiki.org/plugin:plugin) or download it from the github account mentioned above.

Or you can clone it directly from repository:
```bash
$> cd dokuwiki/lib/plugins/
$> git clone https://github.com/Bravehartk2/dokuwiki-matomo
```

External requirements
===============

This plugin requires the following additional components that must be installed separately:

  * MySQL Database for Matomo
  * PHP with mysql support (now PHP7 ready)
  * an existing matomo installation that the matomo trackingscript can send data to

Install the plugin using the Plugin Manager (https://www.dokuwiki.org/plugin:plugin) and the download URL above, which points to latest version of the plugin. Refer to https://www.dokuwiki.org/plugin on how to install plugins manually.

Configuration
===============
  - Go to Plugin Management and make sure “matomo” is enabled
  - Configure the plugin in ***Admin -> Configuration Manager –> Plugin Settings –> Matomo*** (Values partly have to be taken from an existing matomo installation -> From ***Settings -> Tracking Code***, more information https://developer.matomo.org/api-reference/tracking-javascript)
  - Matomo plugin should now be enabled and you should see the trackingcode in the rendered html on wiki pages (f.e. with firebug)

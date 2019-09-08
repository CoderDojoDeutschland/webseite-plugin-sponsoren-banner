# Sponsoren Banner Plugin

**This README.md file should be modified to describe the features, installation, configuration, and general usage of the plugin.**

The plugin is an extension for [Grav CMS](http://github.com/getgrav/grav). Ein Banner welcher die Sponsoren zeigt

## Installation

Installing the plugin can be done in one of three ways: The GPM (Grav Package Manager) installation method lets you quickly install the plugin with a simple terminal command, the manual method lets you do so via a zip file, and the admin method lets you do so via the Admin Plugin.

### GPM Installation (Preferred)

To install the plugin via the [GPM](http://learn.getgrav.org/advanced/grav-gpm), through your system's terminal (also called the command line), navigate to the root of your Grav-installation, and enter:

    bin/gpm install sponsoren-banner

This will install the Sponsoren Banner plugin into your `/user/plugins`-directory within Grav. Its files can be found under `/your/site/grav/user/plugins/sponsoren-banner`.

### Manual Installation

To install the plugin manually, download the zip-version of this repository and unzip it under `/your/site/grav/user/plugins`. Then rename the folder to `sponsoren-banner`. You can find these files on [GitHub](https://github.com/CoderDojoDeutschland/webseite-plugin-sponsoren-banner) or via [GetGrav.org](http://getgrav.org/downloads/plugins#extras).

You should now have all the plugin files under

    /your/site/grav/user/plugins/sponsoren-banner

> NOTE: This plugin is a modular component for Grav which may require other plugins to operate, please see its [blueprints.yaml-file on GitHub](https://github.com/andi1984/grav-plugin-sponsoren-banner/blob/master/blueprints.yaml).

### Admin Plugin

If you use the Admin Plugin, you can install the plugin directly by browsing the `Plugins`-menu and clicking on the `Add` button.

## Configuration

Before configuring this plugin, you should copy the `user/plugins/sponsoren-banner/sponsoren-banner.yaml` to `user/config/plugins/sponsoren-banner.yaml` and only edit that copy.

Here is the default configuration and an explanation of available options:

```yaml
enabled: true
text_var: Sponsorenliste im JSON Format {label, image, url}
```

Note that if you use the Admin Plugin, a file with your configuration named sponsoren-banner.yaml will be saved in the `user/config/plugins/`-folder once the configuration is saved in the Admin.

## Usage

### Save sponsors information in plugin settings (admin area)

You can use the text variable field in the plugin settings admin page to save a serialized JSON file in the following format

```json
[
    {
        "label": "Sponsor #1",
        "image": "<image url>",
        "url": "<url to sponosr website>"
    },
    …
]
```

### Create a related twig file in your theme

Create a twig file in `partials/sponsors.html.twig` of your theme. The plugin will inject the `sponsors` variable as type array into the twig file and thus you can usage in whatever way you like.

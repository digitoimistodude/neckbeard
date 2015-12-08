# Neckbeard [![Designed for WooCommerce](http://img.shields.io/badge/Designed%20for-WooCommerce-a46497.svg)](http://woothemes.com/woocommerce/)

Neckbeard is a WordPress starter theme based on [storefront](https://github.com/woothemes/storefront), [dudestarter](https://github.com/digitoimistodude/dudestarter) and [_s](https://github.com/automattic/_s), currently used by Digitoimisto Dude Oy, a boutique digital agency from Central Finland, Jyväskylä.

![Neckbeard logo](https://cdn.rawgit.com/digitoimistodude/neckbeard/master/neckbeard.svg "Neckbeard logo")

**Theme is currently in early alpha-development.**

More documentation coming soon.

## Table of contents

1. [Please note before using](#please-note-before-using)
2. [License](#license)
3. [Features](#features)
    1. [Layout base & grid](#layout-base--grid)
    2. [Typography](#typography)
    3. [Development](#development)
4. [What about clutter?](#what-about-clutter)
5. [Requirements](#requirements)
6. [Usage](#usage)
7. [TODO](#todo)
8. [Contributing](#contributing)

### Please note before using

Neckbeard is a **development theme**, so it has updates almost daily. By using this starter theme, you agree that the fonts can change, layout can change, everything can change, and they will, without a warning. After all, this is a development theme for Dude's personal preferences and principles and should be considered as yet another agency-boilerplate rather than "a theme for everyone".

If you for some crazy reason happen to use this theme as base, please note the theme won't necessarily be that much fun or won't necessarily look any good. This is just a plain skeleton and nothing else. I recommend using [Underscores](https://github.com/Automattic/_s) or [Sage](https://roots.io/sage/) if you need something more "complete".

### License

Neckbeard is licensed with [The MIT License (MIT)](http://choosealicense.com/licenses/mit/) which means you can freely use this theme commercially or privately, modify it, or distribute it, but you have to lisence it with the same conditions and you are forbidden to hold Dude liable for anything, or claim that what you do with this is completely, partially or directed made by us.

### Features

#### Layout base & grid

* All usable things from the latest [Storefront](https://github.com/woothemes/storefront), [Underscores](https://github.com/Automattic/_s) and [dudestarter](https://github.com/digitoimistodude/dudestarter) themes
* [SASS](http://sass-lang.com/)-support (SCSS-syntax)
* [Susy grid](susydocs.oddbird.net)
* CSS reset with a combination with Nicolas Gallagher's [normalize*css](https://github.com/necolas/normalize.css/)

#### Typography

* Google Webfonts with Penman's [Sass-Web-Fonts](https://github.com/penman/Sass-Web-Fonts) and custom web fonts with [Sass Boilerplate's fontFace-mixin](https://github.com/magnetikonline/sassboilerplate/blob/master/fontface.scss)
* [Font-Awesome](https://github.com/FortAwesome/Font-Awesome) Glyph icons

#### Development

* [BrowserSync](http://www.browsersync.io/) for keeping multiple browsers and devices synchronized while testing, along with injecting updated CSS and JS into your browser while you're developing (included in [devpackages](https://github.com/digitoimistodude/devpackages))
* [gulp](http://gulpjs.com/) build script that compiles both Less and Sass, checks for JavaScript errors, optimizes images, and concatenates and minifies files (see Dude's [devpackages](https://github.com/digitoimistodude/devpackages))
* [Bower](http://bower.io/) for front-end package management (see Dude's [devpackages](https://github.com/digitoimistodude/devpackages))

## What about clutter?

Since Neckbeard is based on multiple themes, it tries to combine the best bits without having too much clutter. This is a challenging tasks, but here's something that is left out from Storefront or Underscores to achieve more *DRY* theme:

* No customizer (this is dev-theme, not a theme for everyone)
* No welcome screen (see above)
* No Jetpack stuff (see above)
* No bourbon (mostly bloat and useless mixins)
* No child theme support (this is going to be a starter theme for dev-Dudes)
* No widgets (see above)
* No useless functions by default, like social icons
* No sidebar by default
* Full width by default

### Requirements

* Mac OS X (development only - not tested on other systems, but feel free to try and report back)
* [Devpackages](https://github.com/digitoimistodude/devpackages) by Dude - Npm, Gulp and Bower (if you are going to use your own gulpfile, at least see that the paths and bower packages are correct to compile the theme successfully)
* [Dudestack](https://github.com/digitoimistodude/dudestack) - A toolkit for creating a new professional WordPress project with deployments. Heavily based on Bedrock by Roots.

### Usage

Go through [Dudestack Instructions](https://github.com/digitoimistodude/dudestack-instructions) to install vagrant development environment and dudestack. Then:

1. Clone this repository and unpack it to your project folder (or under test directory, for example for us it's `~/Projects/dudetest/content/themes/neckbeard`)
2. Edit `STARTERTHEMEPATH` to point out to neckbeard in `newtheme.sh`
3. Navigate to theme directory with Terminal and run script with `sh newtheme.sh` (requires [Dudestack](https://github.com/digitoimistodude/dudestack)'s `createproject` command to be run before)
4. Go to Projects folder and run `npm install`
5. Run `gulp watch` in project-folder
6. Start with `sass/base/config.scss` and continue editing from there. The main CSS file will always be `sass/base/layout.scss`.

## TODO

- [x] Replace bourbon with useful and sensible SASS
- [x] Add normalize.scss
- [x] Add responsive typograhpy
- [ ] Clean up clutter
- [x] Include parts of concise
- [ ] Add screenshot
- [ ] Add default responsive navigation
- [ ] Remove WooCommerce hooks that are not needed
- [ ] Simplify CSS a LOT
- [x] Disable sidebar by default
- [x] Make page templates more flexible
- [ ] Use containers instead of full wrapper from header to footer

### Contributing

If you have ideas about the theme or spot an issue, please let us know. Before contributing ideas or reporting an issue about "missing" features or things regarding to the nature of that matter, please read [Please note](#please-note-before-using) section. Thank you very much.

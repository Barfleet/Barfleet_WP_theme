# WP_theme
New wordpress theme for Barfleet


## Instructions

In order to compile the SASS/scss on the fly, you'll need to install and run npm and gulp.

First install NPM (Node Package Manager), part of Node.js. https://nodejs.org/en/download/
Next, install gulp via npm, from the command line.

sudo npm install -g gulp

Then cd into the root directory of the git repo and run the following commands:

```
npm install
gulp
```

This will set up a watch task so that any time a scss file is changed and saved, the resulting css files will automatically be generated.

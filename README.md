# Genesis Gulp  Browser Sync Dev Theme


From the Genesis Sample Theme:

Github project link: https://github.com/copyblogger/genesis-sample


## Installation Instructions

1. Upload the Genesis Framework to your site, but don't activate it. 
2. Clone or download the zip of this project to your themes directory.
3. Change the name of the child theme in the `assets/sass/style.scss` file to reflect your project.
4. In terminal, navigate to this theme's directory.
5. Run `npm install` to get dependencies
6. In `gulpfile.js` update the browsersync `proxy` with your install.
7. Then run `gulp` to create your style.css file and style.css.map
8. In the wp-admin go to Apperance>>Themes, and activate this child theme.

You should be ready to go. 

If you don't see the child theme, or it says the stylesheet is missing, make sure you've run `npm install` and `gulp` correctly.




Drupal 7 blank theme
==================
A blank theme based in SASS, Bourbon, Neat and Bitters.

Requisites
==========
* SASS: gem install sass
* Bourbon: gem install bourbon
* Neat: gem install neat
* Bitters: gem install bitters

How to use
==========
* Clone this repo into sites/all/themes folder in your project.
* Rename the folder to your theme name.
* Go to Appearance / Install new theme and check this theme to default.

Theming
=======
If you want to change anything here, you have to run sass watch command in the theme folder:

```
sass --watch sass/style.scss:css/style.css
```

The sass folder contains all of components of your theme.

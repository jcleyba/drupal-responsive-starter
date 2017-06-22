; starter make file for d.o. usage
core = "7.x"
api = "2"

; +++++ Modules +++++

projects[admin_menu][version] = "3.0-rc5"
projects[admin_menu][subdir] = "contrib"

projects[ctools][version] = "1.12"
projects[ctools][subdir] = "contrib"

projects[profiler_builder][version] = "1.2"
projects[profiler_builder][subdir] = "contrib"

projects[email][version] = "1.3"
projects[email][subdir] = "contrib"

projects[link][version] = "1.4"
projects[link][subdir] = "contrib"

projects[l10n_update][version] = "1.1"
projects[l10n_update][subdir] = "contrib"

projects[backup_migrate][version] = "2.8"
projects[backup_migrate][subdir] = "contrib"

projects[block_class][version] = "2.3"
projects[block_class][subdir] = "contrib"

projects[libraries][version] = "2.3"
projects[libraries][subdir] = "contrib"

projects[node_class][version] = "1.3"
projects[node_class][subdir] = "contrib"

projects[pathauto][version] = "1.3"
projects[pathauto][subdir] = "contrib"

projects[retina_images][version] = "1.0-beta5"
projects[retina_images][subdir] = "contrib"

projects[token][version] = "1.7"
projects[token][subdir] = "contrib"

projects[globalredirect][version] = "1.5"
projects[globalredirect][subdir] = "contrib"

projects[metatag][version] = "1.21"
projects[metatag][subdir] = "contrib"

projects[ckeditor][version] = "1.17"
projects[ckeditor][subdir] = "contrib"

projects[elfinder][version] = "0.8"
projects[elfinder][subdir] = "contrib"

projects[views][version] = "3.16"
projects[views][subdir] = "contrib"

projects[views_slideshow][version] = "3.9"
projects[views_slideshow][subdir] = "contrib"

projects[webform][version] = "3.27"
projects[webform][subdir] = "contrib"

projects[xmlsitemap][version] = "2.3"
projects[xmlsitemap][subdir] = "contrib"

; +++++ Themes +++++

; zen
projects[zen][type] = "theme"
projects[zen][version] = "5.6"
projects[zen][subdir] = "contrib"

; +++++ Libraries +++++

; ColorBox
libraries[colorbox][directory_name] = "colorbox"
libraries[colorbox][type] = "library"
libraries[colorbox][destination] = "libraries"
libraries[colorbox][download][type] = "get"
libraries[colorbox][download][url] = "https://github.com/jackmoore/colorbox/archive/master.zip"


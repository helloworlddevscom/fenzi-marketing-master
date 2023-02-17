let mix = require('laravel-mix');

mix.js('web/wp-content/themes/astra-child/hwd/src/menu/sub_navbar.js', 'web/wp-content/themes/astra-child/hwd/dist/js')
    .sass('web/wp-content/themes/astra-child/hwd/src/style/hwd_common.scss' , 'web/wp-content/themes/astra-child/hwd/dist/css')
    .sass('web/wp-content/themes/astra-child/hwd/src/style/hwd_footer.scss' , 'web/wp-content/themes/astra-child/hwd/dist/css')
    .sass('web/wp-content/themes/astra-child/hwd/src/style/hwd_navbar.scss' , 'web/wp-content/themes/astra-child/hwd/dist/css')
    .sass('web/wp-content/themes/astra-child/hwd/src/style/hwd_templates.scss' , 'web/wp-content/themes/astra-child/hwd/dist/css')
    .sass('web/wp-content/themes/astra-child/hwd/src/style/hwd_widgets.scss' , 'web/wp-content/themes/astra-child/hwd/dist/css');

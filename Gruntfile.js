module.exports = function(grunt) {

    var mobile = false;

    var tablet = false;

    var adaptive = true;


    var ft_target = 'src/';
    var ft_folder = 'webdone.info/www/standarts/';
    var ft_host = 'webdone.ftp.ukraine.com.ua';
    

    var time = new Date().getTime();
   
    var dist_valid_array = ['dist/index.php'];  

    var src_valid_array = ['src/index.php'];  

    if(tablet){
        dist_valid_array.push('dist/tablet/index.php');
        src_valid_array.push('src/tablet/index.php');
    }

    if(mobile){
        dist_valid_array.push('dist/mobile/index.php');
        src_valid_array.push('src/mobile/index.php');
    }

    var async_init = '</style><script>!function(e,t,n){function r(){for(;u[0]&&"loaded"==u[0][l];)o=u.shift(),o[f]=!a.parentNode.insertBefore(o,a)}for(var i,s,o,u=[],a=e.scripts[0],f="onreadystatechange",l="readyState";i=n.shift();)s=e.createElement(t),"async"in a?(s.async=!1,e.head.appendChild(s)):a[l]?(u.push(s),s[f]=r):e.write("<"+t+\' src="\'+i+\'" defer></\'+t+">"),s.src=i}(document,"script",["https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js","js/init.js"]);</script>';

    grunt.option("force", true);

    grunt.registerTask('unusedimages', function(test) {
        if (test == 'desktop') {
            var i_cwd = 'dist/img/';
            var i_expand = ['dist/index.php','dist/*.html','dist/*.php','dist/ajax/*.html', 'dist/css/full.min.css', 'dist/js/main.min.js', 'dist/js/map.min.js'];
        }


        var assets = [],
            links = [];

        grunt.file.expand({
            filter: 'isFile',
            cwd: i_cwd 
        }, ['**/*']).forEach(function(file) {
            assets.push(file);
        });

        grunt.file.expand({
            filter: 'isFile',
        }, i_expand).forEach(function(file) {
            var content = grunt.file.read(file);
            assets.forEach(function(asset) {
                if (content.search(asset) !== -1) {
                    links.push(asset);
                }
            });
        });

        var unused = grunt.util._.difference(assets, links);
        console.log('Found ' + unused.length + ' unused images:');
        unused.forEach(function(el) {
            grunt.file.delete(i_cwd + el)
            console.log('unused and deleted: ' + i_cwd + el);
        });
    });

    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),


        jsbeautifier: {
            desktop: {
                src : ["src/js/main.js","src/js/init.js","src/js/map.js"]
            }
        },


        csslint: {
          desktop: {
            src: ['src/css/*.css']
          }
        },


        csscomb: {
            desktop: {
                files: {
                    'src/css/style.css': ['src/css/style.css'],
                    'src/css/media.css': ['src/css/media.css'],
                    'src/css/head.css': ['src/css/head.css'],
                    'src/css/scripts.css': ['src/css/scripts.css'],
                }
            }
        },


        htmlcomb: {
            desktop: {
                options: {
                    removeEmptyValue: false
                },
                files: ['dist/*.html','dist/*.php','dist/ajax/*.html']
            }
        },


        prettify: {
            options: {
                "indent": 4,
                "indent_char": " ",
                "indent_scripts": "normal",
                "wrap_line_length": 0,
                "brace_style": "collapse",
                "preserve_newlines": true,
                "max_preserve_newlines": 1,
                "unformatted": [
                    "code",
                    "pre",
                    "br"
                ]
            },
            desktop: {
                files: ['dist/*.html','dist/*.php','dist/ajax/*.html']
            }
        },

        criticalcss: {
            desktop: {
                options: {
                    url: "src/index_fc.html",
                    width: 1200,
                    height: 900,
                    outputfile: "src/css/bp/critical.css",
                    filename: "src/css/full.css",
                    //buffer: 1200 * 1920,
                    ignoreConsole: false
                }
            },
            desktop_tab: {
                options: {
                    url: "src/index_fc.html",
                    width: 800,
                    height: 1024,
                    outputfile: "src/css/bp/critical_t.css",
                    filename: "src/css/full.css",
                    //buffer: 1200 * 1920,
                    ignoreConsole: false
                }
            },
            desktop_mob: {
                options: {
                    url: "src/index_fc.html",
                    width: 340,
                    height: 1024,
                    outputfile: "src/css/bp/critical_m.css",
                    filename: "src/css/full.css",
                    //buffer: 1200 * 1920,
                    ignoreConsole: false
                }
            }
        },


        inlineImgSize: {
            desktop: {
                files: {
                    src: ['dist/index.php']
                }
            }
        },


        validation: {
            dist: {
                options: {
                    relaxerror: ['(XML processing instructions are not supported in HTML.)'],
                },
                files: {
                    src: dist_valid_array
                }
            },
            src: {
                options: {
                    relaxerror: ['(XML processing instructions are not supported in HTML.)'],
                },
                files: {
                    src: src_valid_array
                }
            }
        },


        copy: {
            desktop_for_critical: {
                src: 'src/index.*',
                dest: 'src/index_fc.html',
            },
            desktop_index: {
                expand: true,
                flatten: true,
                cwd: 'src/',
                src: '*.*',
                dest: 'dist/',
            },
            desktop_httaccess: {
                expand: true,
                flatten: true,
                src: 'src/.htaccess',
                dest: 'dist/',
            },
            desktop_ajax: {
                expand: true,
                flatten: true,
                cwd: 'src/ajax/',
                src: '**',
                dest: 'dist/ajax/',
            },
            desktop_html: {
                expand: true,
                flatten: true,
                cwd: 'src/html/',
                src: '**',
                dest: 'dist/html/',
            },
            desktop_img: {
                expand: true,
                flatten: true,
                cwd: 'src/img/',
                src: '**',
                dest: 'dist/img/',
            },
            desktop_settings: {
                expand: true,
                flatten: true,
                cwd: 'src/settings/',
                src: '**',
                dest: 'dist/settings/',
            },
            desktop_fonts: {
                expand: true,
                flatten: true,
                cwd: 'src/fonts/',
                src: '**',
                dest: 'dist/fonts/',
            },
            track: {
                expand: true,
                flatten: true,
                cwd: 'src/track/',
                src: '**',
                dest: 'dist/track/',
            },
            desktop_libs_js: {
                src: 'src/js/libs.js',
                dest: 'dist/js/libs.min.js',
            },
            desktop_fonts_css: {
                src: 'src/css/fonts.css',
                dest: 'dist/css/fonts.css',
            },
            desktop_bp_init_js: {
                src: 'src/js/init.js',
                dest: 'src/js/bp/init.js',
            }
        },


        htmlmin: {
            desktop: {
                options: {
                    removeComments: true,
                    collapseWhitespace: true,
                    minifyJS: true,
                    removeAttributeQuotes: true
                },
                files: ['dist/*.html','dist/*.php','dist/ajax/*.html']
            }
        },


        clean: {
            options: {
                force: true
            },

            desktop: ['src/index_fc.html','src/css/full.css', 'src/css/bp', 'src/css/ap', 'src/js/bp']

        },


        'string-replace': {

            //для src/
            change_livereload_port_grunt: { //cмена порта livereload в Gruntfile.js
                files: {
                    './': ['Gruntfile.js']
                },
                options: {
                    replacements: [{
                        pattern: /port: \d\d\d\d\, \/\/LIVERELOAD_PORT/ig,
                        replacement: 'port: ' + time.toString().slice(-4).replace(/^0/gi, '1') + ', //LIVERELOAD_PORT'
                    }]
                }

            },
            change_livereload_port_index: { //cмена порта livereload в index.php
                files: {
                    './': ['src/*.php','src/*.html']
                },
                options: {
                    replacements: [{
                        pattern: /localhost:\d\d\d\d\/livereload.js/ig,
                        replacement: 'localhost:' + time.toString().slice(-4).replace(/^0/gi, '1') + '/livereload.js'
                    }]
                }

            },
            desktop_rebase: {
                files: {
                    './': ['dist/js/main.min.js','dist/js/init.min.js', 'dist/index.*', 'dist/ajax/map.php','dist/*.html','dist/*.php','dist/ajax/*.html','dist/js/*.js']
                },
                options: {
                    replacements: [{
                        pattern: /main.js/ig,
                        replacement: 'main.min.js'
                    }, {
                        pattern: /libs.js/ig,
                        replacement: 'libs.min.js'
                    }, {
                        pattern: /init.js/ig,
                        replacement: 'init.min.js'
                    }, {
                        pattern: /map.js/ig,
                        replacement: 'map.min.js'
                    }, {
                        pattern: /full.css/ig,
                        replacement: 'full.min.css'
                    }, {
                        pattern: /head.css/ig,
                        replacement: 'head.min.css'
                    }, {
                        pattern: /\.\.\/mobile/ig,
                        replacement: 'mobile'
                    }, {
                        pattern: /\.\.\/tablet/ig,
                        replacement: 'tablet'
                    }, {
                        pattern: /\.\.\/track/ig,
                        replacement: 'track'
                    }]
                }
            },
            desktop_beforebase: {
                files: {
                    './': 'dist/css/head.min.css'
                },
                options: {
                    replacements: [{
                        pattern: /\/img/ig,
                        replacement: '../img'
                    }]
                }
            },
            desktop_afterbase: {
                files: {
                    './': ['dist/css/head.min.css']
                },
                options: {
                    replacements: [{
                        pattern: /..\/img/ig,
                        replacement: 'img'
                    }]
                }
            },
            desktop_remove_img_from_head: {
                files: {
                    './': 'src/css/bp/critical.css'
                },
                options: {
                    replacements: [{
                        pattern: /(?:background-image)[ ]*:[ ]*[^;]+/ig,
                        replacement: ' '
                    }, {
                        pattern: /(?:url)\([^*]*\)+/ig,
                        replacement: ' '
                    }]
                }
            },
            desktop_for_lazyload: {
                files: {
                    './': ['dist/index.php']
                },
                options: {
                    replacements: [{
                        pattern: /src="img\//ig,
                        replacement: 'src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACwAAAAAAQABAAACAkQBADs=" data-original="img/'
                    }, {
                        pattern: /src=img\//ig,
                        replacement: 'src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACwAAAAAAQABAAACAkQBADs=" data-original=img/'
                    }, {
                        pattern: /src='img\//ig,
                        replacement: "src='data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACwAAAAAAQABAAACAkQBADs=' data-original='img/"
                    }]
                }
            },
            desktop_for_lazyload_js: {
                files: {
                    './': ['dist/js/main.min.js']
                },
                options: {
                    replacements: [{
                        pattern: '$(document).ready(',
                        replacement: '$("img").each(function(){var a=$(this).attr("data-original");"undefined"!=typeof a&&a!==!1&&$(this).attr("src",$(this).data("original"))}),$(document).ready('
                    }]
                }
            }, 
            desktop_async_css: {
                files: {
                    './': ['src/js/bp/init.js']
                },
                options: {
                    replacements: [{
                        pattern: '//loadCSS',
                        replacement: 'loadCSS'
                    }]
                }
            },
            desktop_async_init: {
                files: {
                    './': ['dist/index.php']
                },
                options: {
                    replacements: [{
                        pattern: '</style>',
                        replacement: async_init
                    }]
                }
            },
            desktop_remove_link_css: {
                files: {
                    './': ['dist/index.php']
                },
                options: {
                    replacements: [{
                        pattern: /<link[^>]*css[^>]*>/ig,
                        replacement: ' '
                    }]
                }
            },
            desktop_remove_sync_init: {
                files: {
                    './': ['dist/index.php']
                },
                options: {
                    replacements: [{
                        pattern: /<script[^>]*(?:webfont.js|init.js)[^>]*>[^>]*\/script>/ig,
                        replacement: ' '
                    }]
                }
            },
            desktop_br_space: {
                files: {
                    './': ['dist/index.php']
                },
                options: {
                    replacements: [{
                        pattern: /<br>/ig,
                        replacement: ' <br>'
                    }]
                }
            },
            comment_livereload: { //закоментировать livereload в index.html
                files: {
                    './': ['dist/*.*']
                },
                options: {
                    replacements: [{
                        pattern: /<script src="http:\/\/localhost:\d\d\d\d\/livereload\.js"><\/script>/ig,
                        replacement: '<!-- <script src="http://localhost:0000/livereload.js"></script> -->'
                    }]
                }

            }
        },


        dataUri: {
            desktop: {
                src: ['dist/css/full.min.css', 'dist/css/head.min.css'], 
                dest: 'dist/css/',
                options: {
                    target: ['dist/img/*.*'],
                    fixDirLevel: true,
                    maxBytes: 2048

                }
            }
        },


        concat: {
            desktop_libs_js: {
                src: 'src/js/libs/*.js',
                dest: 'src/js/libs.js'
            },
            desktop_libs_css: {
                src: 'src/css/libs/*.css',
                dest: 'src/css/libs.css'
            },
            desktop_full_css: {
                src: ['src/css/libs.css', 'src/css/style.css', 'src/css/media.css', 'src/css/scripts.css'],
                dest: 'src/css/full.css'
            },
            desktop_head_css: {
                src: ['src/css/head.css', 'src/css/bp/critical.css'],
                dest: 'src/css/bp/head.css'
            },
            allcritical: {
                src: ['src/css/bp/critical.css', 'src/css/bp/critical_t.css','src/css/bp/critical_m.css'],
                dest: 'src/css/bp/critical.css'
            }
        },


        cssmin: {
            desktop: {
                files: [{
                        src: 'src/css/ap/head.css',
                        dest: 'dist/css/head.min.css'
                    }, {
                        src: 'src/css/ap/full.css',
                        dest: 'dist/css/full.min.css'
                    }]
            }
        },


        uglify: {
            options: {
                compress: {
                    drop_console: true
                }
            },
            desktop_src: {
                files: [{
                    'dist/js/init.min.js': 'src/js/bp/init.js'
                }, {
                    'dist/js/main.min.js': 'src/js/main.js'
                }, {
                    'dist/js/map.min.js': 'src/js/map.js'
                }]
            },
            desktop_libs: {
                files: [{
                    expand: true,
                    cwd: 'src/js/libs/',
                    src: '**/*.js',
                    dest: 'src/js/libs/'
                }]
            }
        },


        sass: {
            desktop: {
                options: {
                    style: 'expanded'
                },
                files: {
                    'src/css/style.css': 'src/css/sass/style.scss'
                }
            }
        },


        imagemin: {
            desktop: {
                files: [{
                        expand: true,
                        cwd: 'src/img/',
                        src: ['**/*.{png,jpg,gif}'],
                        dest: 'dist/img/'
                    }]
            }
        },


        autoprefixer: {
            options: {
                browsers: ['ie >= 8', 'last 10 versions', '> 0.1%', 'ff >= 20', 'Android > 1']
            },
            desktop: {
                files: [{
                        'src/css/ap/full.css': 'src/css/full.css'
                    }, {
                        'src/css/ap/head.css': 'src/css/bp/head.css'
                    }]
            }
        },
        watch: {
            desktop_sass: {
                files: 'src/css/sass/*.scss',
                tasks: ['sass:desktop']
            },
            desktop_concat_libs_css: {
                files: ['src/css/libs/*.css'],
                tasks: ['concat:desktop_libs_css'],
            },
            desktop_concat_libs_js: {
                files: ['src/js/libs/*.js'],
                tasks: ['concat:desktop_libs_js'],
            },

            livereload: { //перезагрузка страницы в браузере
                options: {
                    spawn: true,
                    livereload: {
                        host: 'localhost',
                        port: 1985, //LIVERELOAD_PORT
                    }
                },
                //при изменеии любых сорс файлов
                files: ['src/**/*.php', 'src/**/*.js', 'src/**/*.css', 'src/**/*.html'],
                tasks: []
            }
        }
    });

    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-contrib-imagemin');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-autoprefixer');
    grunt.loadNpmTasks('grunt-contrib-copy');
    grunt.loadNpmTasks('grunt-string-replace');
    grunt.loadNpmTasks('grunt-contrib-clean');
    grunt.loadNpmTasks('grunt-data-uri');
    grunt.loadNpmTasks('grunt-contrib-htmlmin');
    grunt.loadNpmTasks('grunt-w3c-html-validation');
    grunt.loadNpmTasks('grunt-inline-imgsize');
    grunt.loadNpmTasks('grunt-criticalcss');
    grunt.loadNpmTasks('grunt-csscomb');
    grunt.loadNpmTasks('grunt-htmlcomb');
    grunt.loadNpmTasks('grunt-prettify');
    grunt.loadNpmTasks("grunt-jsbeautifier");
    grunt.loadNpmTasks('grunt-contrib-csslint');


    grunt.registerTask('start-desktop', [
        'uglify:desktop_libs', //Минификация src/js/libs/*.js
        'concat:desktop_libs_js', //Склейка src/js/libs/*.js в src/js/libs.js
        'concat:desktop_libs_css', //Склейка src/css/libs/*.css в src/css/libs.css
        'csscomb:desktop', //beautify src/css/**/* 
        //'htmlcomb:desktop', //beautify src/index.php ,src/ajax/map.html часть1
        //'prettify:desktop', //beautify src/index.php ,src/ajax/map.html часть2
        'jsbeautifier:desktop', //beautify (src/js/) init.js, main.js, map.js
        //'csslint:desktop'
    ]);

    

var critical_array = ['criticalcss:desktop'];

if(!mobile&&!tablet&&adaptive){
    critical_array.push('criticalcss:desktop_tab');
    critical_array.push('criticalcss:desktop_mob');
    critical_array.push('concat:allcritical');
}
    
    grunt.registerTask('critical-dtm',critical_array);


    grunt.registerTask('fin-desktop', [
        'concat:desktop_full_css', //Склейка (src/css/) libs.css,style.css,media.css,scripts.css, в src/css/full.css
        'copy:desktop_for_critical', //Копия (src/) index.* в кеш файл index_fc.html для выдиление критического css
        
        //'critical-dtm', //Выделение критического css для src/index_fc.html с src/css/full.css в src/css/bp/critical.css 
        'string-replace:desktop_remove_img_from_head', //Удаление всех графических ресурсов с src/css/bp/critical.css
        'concat:desktop_head_css', // Склейка src/css/head.css и src/css/bp/critical.css в src/css/bp/head.css
        'autoprefixer:desktop', //autoprefix src/css/full.css в src/css/ap/full.css, src/css/bp/head.css в src/css/ap/head.css
        'copy:desktop_bp_init_js', //Копирование src/js/init.js в src/js/bp/init.js для добавления асинхронной загрузки css
        'string-replace:desktop_async_css', //Изменение src/js/bp/init.js для асинхронной загрузки css
        'uglify:desktop_src', //Сжатие (src/js/) init.js, main.js, init.js в dist/js/*.min.js
        'copy:desktop_libs_js', //Копирование src/js/libs.js в dist/js/libs.min.js
        'cssmin:desktop', //Сжатие (src/css/ap/) head.css,full.css в dist/css/*.min.css
        //'imagemin:desktop', //Сжатие src/img/*.* в dist/img/
        'clean:desktop', //Удаление src/index_fc.html,src/css/bp,src/css/ap,src/js/bp
        'copy:desktop_fonts',
        'copy:desktop_fonts_css',
        'copy:desktop_index', //Копирование src/*.* в dist/
        'string-replace:comment_livereload',
        'copy:desktop_httaccess', //Копирование src/.httaccess в dist/
        'copy:desktop_ajax', //Копирование src/ajax/ в dist/ajax/
        'copy:desktop_html', //Копирование src/ajax/ в dist/ajax/
        'copy:desktop_img', //Копирование src/ajax/ в dist/ajax/
        'copy:desktop_settings', //Копирование src/ajax/ в dist/ajax/
        'string-replace:desktop_async_init', //добавления блока асинхронной инициализации в index.php
        'string-replace:desktop_remove_sync_init', //Удаление синхронной инициализации в index.php
        'string-replace:desktop_rebase', //Замена путей к track/ mobile/ tablet/ в dist/ версии desktop
        //'inlineImgSize:desktop', //Добавление width и height на img
        //'string-replace:desktop_for_lazyload', //замена установка lazy-load закгрузки <img> на dist/index.php
        //'string-replace:desktop_for_lazyload_js',
        'string-replace:desktop_remove_link_css', //удаление link[rel="stylesheet"] из dist/index.php
        'string-replace:desktop_beforebase', //замена путей /img->../img для base64uri маленьких картинок в dist/css/head.min.css
        'dataUri:desktop', //перевод картинок до 2048 байт в base64uri в dist/css/head.min.css, dist/css/full.min.css
        'string-replace:desktop_afterbase', //замена путей ../img->img непереведдных картинок в dist/css/head.min.css
        //'htmlmin:desktop', //сжатие dist/index.php и dist/ajax/map.html
        //'unusedimages:desktop', //Удаление неиспользованных картинок из dist/img/
        'copy:track', //Копирование src/track/ в dist/track/
        'string-replace:desktop_br_space'
    ]);


    grunt.registerTask('check-desktop', [
        'concat:desktop_libs_css', 
        'csscomb:desktop'
    ]);


var start_command = ['start-desktop'];

var fin_array = ['start-desktop','fin-desktop'];

var fin_command = ['fin-desktop'];

var validate_command = ['validation'];

var check_command = ['check-desktop'];


//fin_array.push('validation:dist');

check_command.push('validation:src');


    grunt.registerTask('res', [ //сменить порт в индексе
        'string-replace:change_livereload_port_grunt', //сменить порт в грунтфайле
        'string-replace:change_livereload_port_index']);
    grunt.registerTask('check', check_command);
    grunt.registerTask('start', start_command);
    grunt.registerTask('fin', fin_array);
    grunt.registerTask('default', [ //сменить порт в индексе
        'watch']);


};
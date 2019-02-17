module.exports = function(grunt) {
    const sass = require("node-sass");

    // Just In Time plugin loader
    require("jit-grunt")(grunt);

    grunt.initConfig({
        sass: {
            options: {
                implementation: sass,
                sourceMap: true
            },
            dist: {
                files: {
                    "css/main.css": "scss/main.scss"
                }
            }
        },

        postcss: {
            options: {
                map: true,
                processors: [require("autoprefixer")]
            },
            dist: {
                src: "css/*.css"
            }
        },

        cssmin: {
            dist: {
                files: [
                    {
                        expand: true,
                        cwd: "css",
                        src: ["style.css", "!*.min.css"],
                        dest: "css",
                        ext: ".min.css"
                    }
                ]
            }
        },

        watch: {
            default: {
                files: ["scss/**/**/*.scss"],
                tasks: ["css"]
            }
        }
    });

    grunt.registerTask("css", ["sass", "postcss", "cssmin"]);
    grunt.registerTask("default", ["watch"]);
};

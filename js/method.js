/* ------------------------------------------------------ *\
    [Variables] 'Zone'
\* ------------------------------------------------------ */
    var sectiion;
/* ------------------------------------------------------ *\
    [Methods] isMobile
\* ------------------------------------------------------ */
    var isMobile = {
        Android: function() {
            return navigator.userAgent.match(/Android/i);
        },
        BlackBerry: function() {
            return navigator.userAgent.match(/BlackBerry/i);
        },
        iOS: function() {
            return navigator.userAgent.match(/iPhone|iPad|iPod/i);
        },
        Opera: function() {
            return navigator.userAgent.match(/Opera Mini/i);
        },
        Windows: function() {
            return navigator.userAgent.match(/IEMobile/i);
        },
        any: function() {
            return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
        }
    }
/* ------------------------------------------------------ *\
    [function] bgLoaded
\* ------------------------------------------------------ */
    /*
     * BG Loaded
     * Copyright (c) 2014 Jonathan Catmull
     * Licensed under the MIT license.
     */
        $.fn.bgLoaded = function(custom) {
            var self = this;

            // Default plugin settings
            var defaults = {
                afterLoaded : function(){
                    this.addClass('bg-loaded');
                }
            };

            // Merge default and user settings
            var settings = $.extend({}, defaults, custom);

            // Loop through element
            self.each(function(){
                var $this = $(this),
                    bgImgs = window.getComputedStyle($this.get(0), '::before').getPropertyValue('content').replace(/'/g, "").replace(/"/g, "").split(', ');
                $this.data('loaded-count',0);
                $.each( bgImgs, function(key, value){
                    var img = value.replace(/^url\(["']?/, '').replace(/["']?\)$/, '');
                    $('<img/>').attr('src', img).load(function() {
                        $(this).remove(); // prevent memory leaks
                        $this.data('loaded-count',$this.data('loaded-count')+1);
                        if ($this.data('loaded-count') >= bgImgs.length) {
                            settings.afterLoaded.call($this);
                        }
                    });
                });

            });
        };
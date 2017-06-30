$(document).ready(function() {

    /* ------------------------------------------------------ *\
        [METHOS Control] Serialize Form
    \* ------------------------------------------------------ */

    //This method change a form into a JSON
    $.fn.serializeFormJSON = function() {
        var o = {};
        var a = this.serializeArray();
        $.each(a, function() {
            if (o[this.name]) {
                if (!o[this.name].push) {
                    o[this.name] = [o[this.name]];
                }
                o[this.name].push(this.value || "");
            } else {
                o[this.name] = this.value || "";
            }
        });
        return o;
    };

    /* ------------------------------------------------------ *\
        [METHOS Control] Currency Format
    \* ------------------------------------------------------ */

    Number.prototype.format = function(n, x) {
        var re = '(\\d)(?=(\\d{' + (x || 3) + '}) + ' + (n > 0 ? '\\.' : '$') + ')';
        return this.toFixed(Math.max(0, ~~n)).replace(new RegExp(re, 'g'), '$1,');
    };

    /* ------------------------------------------------------ *\
        EVENT CONTROL
    \* ------------------------------------------------------ */

    //check if background-images have been loaded and show list items
    $('.cd-single-project').bgLoaded({
        afterLoaded : function(){
            showCaption($('.projects-container li').eq(0));
        }
    });

    //open project
    $('.cd-single-project').on('click', function(){
        var selectedProject = $(this),
            toggle = !selectedProject.hasClass('is-full-width');
        if(toggle) toggleProject($(this), $('.projects-container'), toggle);
    });

    //close project
    $('.projects-container .cd-close').on('click', function(){
        toggleProject($('.is-full-width'), $('.projects-container'), false);
    });

    //scroll to project info
    $('.projects-container .cd-scroll').on('click', function(){
        $('.projects-container').animate({'scrollTop':$(window).height()}, 500); 
    });

    //update title and .cd-scroll opacity while scrolling
    $('.projects-container').on('scroll', function(){
        window.requestAnimationFrame(changeOpacity);
    });

    function toggleProject(project, container, bool) {
        if(bool) {
            //expand project
            container.addClass('project-is-open');
            project.addClass('is-full-width').siblings('li').removeClass('is-loaded');
        } else {
            //check media query
            var mq = window.getComputedStyle(document.querySelector('.projects-container'), '::before').getPropertyValue('content').replace(/"/g, "").replace(/'/g, ""),
                delay = ( mq == 'mobile' ) ? 100 : 0;

            container.removeClass('project-is-open');
            //fade out project
            project.animate({opacity: 0}, 800, function(){
                project.removeClass('is-loaded');
                $('.projects-container').find('.cd-scroll').attr('style', '');
                setTimeout(function(){
                    project.attr('style', '').removeClass('is-full-width').find('.cd-title').attr('style', '');
                }, delay);
                setTimeout(function(){
                    showCaption($('.projects-container li').eq(0));
                }, 300);
            });     
        }
    }

    function changeOpacity(){
        var newOpacity = 1- ($('.projects-container').scrollTop())/300;
        $('.projects-container .cd-scroll').css('opacity', newOpacity);
        $('.is-full-width .cd-title').css('opacity', newOpacity);
        //Bug fixed - Chrome background-attachment:fixed rendering issue
        $('.is-full-width').hide().show(0);
    }

    function showCaption(project) {
        if(project.length > 0 ) {
            setTimeout(function(){
                project.addClass('is-loaded');
                showCaption(project.next());
            }, 150);
        }
    }
});
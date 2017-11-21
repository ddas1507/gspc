/*!
 * jQuery ClassyLightbox
 * http://www.class.pm/projects/jquery/classylightbox
 *
 * Copyright 2011 - 2012, Class.PM www.class.pm
 * Written by Marius Stanciu - Sergiu <marius@picozu.net>
 * Licensed under the GPL Version 3 license.
 * Version 1.1.0
 *
 */
var ClassyLightbox = {
    skeleton: '<div id="ClassyLightboxOverlay" style="display:none" class="opaque"><div id="ClassyLightbox" class="shadow top bottom" style="display:none"><div id="lbHeader" class="top"></div><div id="lbContent"></div><div id="lbFooter" class="bottom"></div></div></div>',
    settings: {},
    init: function(opts) {
        ClassyLightbox.settings = opts;
        $('body').append(ClassyLightbox.skeleton);
        if (ClassyLightbox.settings.override) {
            $('<script />').attr({
                type:'text/javascript'
            }).html("function alert(val){ ClassyLightbox.alert({ title: 'Alert', text: val, rightButtons: ['OK'] }); }").appendTo('head');
            if (ClassyLightbox.settings.background != "none" && (ClassyLightbox.settings.background == 'white' || ClassyLightbox.settings.background == 'black')) {
                $('#ClassyLightboxOverlay').addClass(ClassyLightbox.settings.background);
            }
            else {
                $('#ClassyLightboxOverlay').addClass('none');
            }
        }
        if (ClassyLightbox.settings.centerOnResize) {
            $(window).bind('resize', function() {
                ClassyLightbox.resize();
            });
        }
    },
    alert: function(options) {
        if (ClassyLightbox.isOpen()) {
            return false;
        }
        $('#ClassyLightbox').css({
            width: options.width
        });
        ClassyLightbox.resize();
        $('#ClassyLightbox #lbHeader').html('<header>'+options.title+'</header>');
        buttons = '';
        lb = options.leftButtons;
        rb = options.rightButtons;
        if (lb) {
            for (var i=(options.leftButtons).length-1; i>=0; i--) {
                buttons += '<input type="button" class="flat" value="'+options.leftButtons[i]+'">';
            }
        }
        if (rb) {
            for (var i=(options.rightButtons).length-1; i>=0; i--) {
                buttons += '<input type="button" class="flat floatRight" value="'+options.rightButtons[i]+'">';
            }
        }
        if (!lb && !rb) {
            buttons += '<input type="button" class="flat floatRight" value="OK">';
        }
        $('#ClassyLightbox #lbFooter').html(buttons);
        $('#ClassyLightbox #lbContent').html(options.text);
        ClassyLightbox.listen();
        if (ClassyLightbox.settings.fade) {
            $('#ClassyLightboxOverlay').fadeIn();
        }
        else {
            $('#ClassyLightboxOverlay').show();
        }
        if (!!window.jQuery.ui) {
            $('#ClassyLightbox').draggable({
                handle: '#lbHeader', 
                containment: 'parent'
            }).show();
        }
        else {
            $('#ClassyLightbox').show();
        }
        if (typeof options.opened == 'function') {
            options.opened.call(this);
        }
        if (typeof options.onClick == 'function') {
            ClassyLightbox.onClick = options.onClick;
        }
    },
    isOpen: function() {
        var open = $('#ClassyLightbox').css('display') == "block";
        return open;
    },
    clear: function() {
        $('#ClassyLightboxOverlay').remove();
        if (ClassyLightbox.settings.fade) {
            $('#ClassyLightboxOverlay').fadeOut();
        }
        else {
            $('#ClassyLightboxOverlay').hide();
        }	
        $('body').append(ClassyLightbox.skeleton);
        ClassyLightbox.resize();
    },
    listen: function() {
        $('#lbFooter input').each(function() {
            $(this).attr({
                'id': this.value
            });
        });
        $('#lbFooter input').click(function() {
            ClassyLightbox.action($(this).val());
        });
    },
    action: function(key) {
        if (key == "Cancel" || key == "Close" || key == "Quit" || key == "Back" || key == "OK") {
            ClassyLightbox.clear();
        }
        ClassyLightbox.onClick(key);
    },
    resize: function() {
        var lbox = $('#ClassyLightbox');
        var height = parseInt((lbox.css('height')).replace('px', ''));
        var width = parseInt((lbox.css('width')).replace('px', ''));
        lbox.css({
            top: ($(window).height()/2 ) - 100 + 'px',
            left: ($(window).width() - width)/2 + 'px'
        });
    },
    onClick: function() {
        
    },
    destroy: function() {
        $('#ClassyLightboxOverlay').remove();
        $(window).unbind('resize');
    }
}
function send_to_editor(b) {
    var a;
    if (typeof tinyMCE != "undefined" && (a = tinyMCE.activeEditor) && !a.isHidden()) {
        a.focus();
        if (tinymce.isIE) {
            a.selection.moveToBookmark(tinymce.EditorManager.activeEditor.windowManager.bookmark)
        }
        if (b.indexOf("[caption") === 0) {
            if (a.plugins.wpeditimage) {
                b = a.plugins.wpeditimage._do_shcode(b)
            }
        } else {
            if (b.indexOf("[gallery") === 0) {
                if (a.plugins.wpgallery) {
                    b = a.plugins.wpgallery._do_gallery(b)
                }
            } else {
                if (b.indexOf("[embed") === 0) {
                    if (a.plugins.wordpress) {
                        b = a.plugins.wordpress._setEmbed(b)
                    }
                }
            }
        }
        a.execCommand("mceInsertContent", false, b)
    } else {
        if (typeof edInsertContent == "function") {
            edInsertContent(edCanvas, b)
        } else {
            jQuery(edCanvas).val(jQuery(edCanvas).val() + b)
        }
    }
    tb_remove()
}
var tb_position;
(function (a) {
    tb_position = function () {
        var e = a("#TB_window"),
            d = a(window).width(),
            c = a(window).height(),
            b = (720 < d) ? 720 : d;
        if (e.size()) {
            e.width(b - 50).height(c - 45);
            a("#TB_iframeContent").width(b - 50).height(c - 75);
            e.css({
                "margin-left": "-" + parseInt(((b - 50) / 2), 10) + "px"
            });
            if (typeof document.body.style.maxWidth != "undefined") {
                e.css({
                    top: "20px",
                    "margin-top": "0"
                })
            }
        }
        return a("a.thickbox").each(function () {
            var f = a(this).attr("href");
            if (!f) {
                return
            }
            f = f.replace(/&width=[0-9]+/g, "");
            f = f.replace(/&height=[0-9]+/g, "");
            a(this).attr("href", f + "&width=" + (b - 80) + "&height=" + (c - 85))
        })
    };
    a(window).resize(function () {
        tb_position()
    })
})(jQuery);
jQuery(document).ready(function (a) {
    a("a.thickbox").click(function () {
        if (typeof tinyMCE != "undefined" && tinyMCE.activeEditor) {
            tinyMCE.get("content").focus();
            tinyMCE.activeEditor.windowManager.bookmark = tinyMCE.activeEditor.selection.getBookmark("simple")
        }
    })
});
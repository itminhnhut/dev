jQuery(document).ready(function($) {
    $(document).on('click', '.product a.compare:not(.added)', function(e) {
        e.preventDefault();
        var button = $(this),
            data = {
                _yitnonce_ajax: yith_woocompare.nonceadd,
                action: yith_woocompare.actionadd,
                id: button.data('product_id'),
                context: 'frontend'
            },
            widget_list = $('.yith-woocompare-widget ul.products-list');
        if (typeof woocommerce_params != 'undefined') {
            button.block({
                message: null,
                overlayCSS: {
                    background: '#fff url(' + yith_woocompare.loader + ') no-repeat center',
                    backgroundSize: '16px 16px',
                    opacity: 0.6
                }
            });
            widget_list.block({
                message: null,
                overlayCSS: {
                    background: '#fff url(' + yith_woocompare.loader + ') no-repeat center',
                    backgroundSize: '16px 16px',
                    opacity: 0.6
                }
            });
        }
        $.ajax({
            type: 'post',
            url: yith_woocompare.ajaxurl,
            data: data,
            dataType: 'json',
            success: function(response) {
                if (typeof woocommerce_params != 'undefined') {
                    button.unblock();
                    widget_list.unblock()
                }
                button.addClass('added').attr('href', response.table_url).text(yith_woocompare.added_label);
                widget_list.html(response.widget_table);
                if (yith_woocompare.auto_open == 'yes')
                    $('body').trigger('yith_woocompare_open_popup', {
                        response: response.table_url,
                        button: button
                    });
            }
        });
    });
    $(document).on('click', '.product a.compare.added', function(ev) {
        ev.preventDefault();
        var table_url = this.href;
        if (typeof table_url == 'undefined')
            return;
        $('body').trigger('yith_woocompare_open_popup', {
            response: table_url,
            button: $(this)
        });
    });
    $('body').on('yith_woocompare_open_popup', function(e, data) {
        var response = data.response;
        if ($(window).width() >= 768) {
            $.colorbox({
                href: response,
                iframe: true,
                width: '90%',
                height: '90%',
                onClosed: function() {
                    var widget_list = $('.yith-woocompare-widget ul.products-list'),
                        data = {
                            action: yith_woocompare.actionview,
                            context: 'frontend'
                        };
                    if (typeof woocommerce_params != 'undefined') {
                        widget_list.block({
                            message: null,
                            overlayCSS: {
                                background: '#fff url(' + yith_woocompare.loader + ') no-repeat center',
                                backgroundSize: '16px 16px',
                                opacity: 0.6
                            }
                        });
                    }
                    $.ajax({
                        type: 'post',
                        url: yith_woocompare.ajaxurl,
                        data: data,
                        success: function(response) {
                            if (typeof woocommerce_params != 'undefined') {
                                widget_list.unblock().html(response);
                            }
                            widget_list.html(response);
                        }
                    });
                }
            });
            $(window).resize(function() {
                $.colorbox.resize({
                    width: '90%',
                    height: '90%'
                });
            });
        } else {
            var urlparts = response.split('?');
            var parameter = 'iframe';
            if (urlparts.length >= 2) {
                var prefix = encodeURIComponent(parameter) + '=';
                var pars = urlparts[1].split(/[&;]/g);
                for (var i = pars.length; i-- > 0;) {
                    if (pars[i].lastIndexOf(prefix, 0) !== -1) {
                        pars.splice(i, 1);
                    }
                }
                response = urlparts[0] + '?' + pars.join('&');
            }
            window.open(response, yith_woocompare.table_title);
        }
    });
    $(document).on('click', '.remove a', function(e) {
        e.preventDefault();
        var button = $(this),
            data = {
                _yitnonce_ajax: yith_woocompare.nonceremove,
                action: yith_woocompare.actionremove,
                id: button.data('product_id'),
                context: 'frontend'
            },
            product_cell = $('td.product_' + data.id + ', th.product_' + data.id);
        if (typeof woocommerce_params != 'undefined') {
            button.block({
                message: null,
                overlayCSS: {
                    background: '#fff url(' + yith_woocompare.loader + ') no-repeat center',
                    backgroundSize: '16px 16px',
                    opacity: 0.6
                }
            });
        }
        $.ajax({
            type: 'post',
            url: yith_woocompare.ajaxurl,
            data: data,
            dataType: 'html',
            success: function(response) {
                if (typeof woocommerce_params != 'undefined') {
                    button.unblock();
                }
                var table = $(response).filter('table.compare-list');
                $('body > table.compare-list').replaceWith(table);
                $(window).trigger('yith_woocompare_product_removed');
            }
        });
    });
    $('.yith-woocompare-open a, a.yith-woocompare-open').on('click', function(e) {
        e.preventDefault();
        $('body').trigger('yith_woocompare_open_popup', {
            response: yith_add_query_arg('action', yith_woocompare.actionview) + '&iframe=true'
        });
    });
    $('.yith-woocompare-widget').on('click', 'a.compare', function(e) {
        e.preventDefault();
        $('body').trigger('yith_woocompare_open_popup', {
            response: $(this).attr('href')
        });
    }).on('click', 'li a.remove, a.clear-all', function(e) {
        e.preventDefault();
        var lang = $('.yith-woocompare-widget .products-list').data('lang');
        var button = $(this),
            data = {
                _yitnonce_ajax: yith_woocompare.nonceremove,
                action: yith_woocompare.actionremove,
                id: button.data('product_id'),
                context: 'frontend',
                responseType: 'product_list',
                lang: lang
            },
            product_list = button.parents('.yith-woocompare-widget').find('ul.products-list');
        if (typeof woocommerce_params != 'undefined') {
            product_list.block({
                message: null,
                overlayCSS: {
                    background: '#fff url(' + yith_woocompare.loader + ') no-repeat center',
                    backgroundSize: '16px 16px',
                    opacity: 0.6
                }
            });
        }
        $.ajax({
            type: 'post',
            url: yith_woocompare.ajaxurl,
            data: data,
            dataType: 'html',
            success: function(response) {
                product_list.html(response);
                if (typeof woocommerce_params != 'undefined') {
                    product_list.unblock();
                }
            }
        });
    });

    function yith_add_query_arg(key, value) {
        key = escape(key);
        value = escape(value);
        var s = document.location.search;
        var kvp = key + "=" + value;
        var r = new RegExp("(&|\\?)" + key + "=[^\&]*");
        s = s.replace(r, "$1" + kvp);
        if (!RegExp.$1) {
            s += (s.length > 0 ? '&' : '?') + kvp;
        };
        return s;
    }
});;
/*
 Colorbox v1.5.10 - 2014-06-26
 jQuery lightbox and modal window plugin
 (c) 2014 Jack Moore - http://www.jacklmoore.com/colorbox
 license: http://www.opensource.org/licenses/mit-license.php
*/
(function(t, e, i) {
    function n(i, n, o) {
        var r = e.createElement(i);
        return n && (r.id = Z + n), o && (r.style.cssText = o), t(r)
    }

    function o() {
        return i.innerHeight ? i.innerHeight : t(i).height()
    }

    function r(e, i) {
        i !== Object(i) && (i = {}), this.cache = {}, this.el = e, this.value = function(e) {
            var n;
            return void 0 === this.cache[e] && (n = t(this.el).attr("data-cbox-" + e), void 0 !== n ? this.cache[e] = n : void 0 !== i[e] ? this.cache[e] = i[e] : void 0 !== X[e] && (this.cache[e] = X[e])), this.cache[e]
        }, this.get = function(e) {
            var i = this.value(e);
            return t.isFunction(i) ? i.call(this.el, this) : i
        }
    }

    function h(t) {
        var e = W.length,
            i = (z + t) % e;
        return 0 > i ? e + i : i
    }

    function a(t, e) {
        return Math.round((/%/.test(t) ? ("x" === e ? E.width() : o()) / 100 : 1) * parseInt(t, 10))
    }

    function s(t, e) {
        return t.get("photo") || t.get("photoRegex").test(e)
    }

    function l(t, e) {
        return t.get("retinaUrl") && i.devicePixelRatio > 1 ? e.replace(t.get("photoRegex"), t.get("retinaSuffix")) : e
    }

    function d(t) {
        "contains" in y[0] && !y[0].contains(t.target) && t.target !== v[0] && (t.stopPropagation(), y.focus())
    }

    function c(t) {
        c.str !== t && (y.add(v).removeClass(c.str).addClass(t), c.str = t)
    }

    function g(e) {
        z = 0, e && e !== !1 && "nofollow" !== e ? (W = t("." + te).filter(function() {
            var i = t.data(this, Y),
                n = new r(this, i);
            return n.get("rel") === e
        }), z = W.index(_.el), -1 === z && (W = W.add(_.el), z = W.length - 1)) : W = t(_.el)
    }

    function u(i) {
        t(e).trigger(i), ae.triggerHandler(i)
    }

    function f(i) {
        var o;
        if (!G) {
            if (o = t(i).data(Y), _ = new r(i, o), g(_.get("rel")), !$) {
                $ = q = !0, c(_.get("className")), y.css({
                    visibility: "hidden",
                    display: "block",
                    opacity: ""
                }), L = n(se, "LoadedContent", "width:0; height:0; overflow:hidden; visibility:hidden"), b.css({
                    width: "",
                    height: ""
                }).append(L), D = T.height() + k.height() + b.outerHeight(!0) - b.height(), j = C.width() + H.width() + b.outerWidth(!0) - b.width(), A = L.outerHeight(!0), N = L.outerWidth(!0);
                var h = a(_.get("initialWidth"), "x"),
                    s = a(_.get("initialHeight"), "y"),
                    l = _.get("maxWidth"),
                    f = _.get("maxHeight");
                _.w = (l !== !1 ? Math.min(h, a(l, "x")) : h) - N - j, _.h = (f !== !1 ? Math.min(s, a(f, "y")) : s) - A - D, L.css({
                    width: "",
                    height: _.h
                }), J.position(), u(ee), _.get("onOpen"), O.add(I).hide(), y.focus(), _.get("trapFocus") && e.addEventListener && (e.addEventListener("focus", d, !0), ae.one(re, function() {
                    e.removeEventListener("focus", d, !0)
                })), _.get("returnFocus") && ae.one(re, function() {
                    t(_.el).focus()
                })
            }
            v.css({
                opacity: parseFloat(_.get("opacity")) || "",
                cursor: _.get("overlayClose") ? "pointer" : "",
                visibility: "visible"
            }).show(), _.get("closeButton") ? B.html(_.get("close")).appendTo(b) : B.appendTo("<div/>"), w()
        }
    }

    function p() {
        !y && e.body && (V = !1, E = t(i), y = n(se).attr({
            id: Y,
            "class": t.support.opacity === !1 ? Z + "IE" : "",
            role: "dialog",
            tabindex: "-1"
        }).hide(), v = n(se, "Overlay").hide(), S = t([n(se, "LoadingOverlay")[0], n(se, "LoadingGraphic")[0]]), x = n(se, "Wrapper"), b = n(se, "Content").append(I = n(se, "Title"), R = n(se, "Current"), P = t('<button type="button"/>').attr({
            id: Z + "Previous"
        }), K = t('<button type="button"/>').attr({
            id: Z + "Next"
        }), F = n("button", "Slideshow"), S), B = t('<button type="button"/>').attr({
            id: Z + "Close"
        }), x.append(n(se).append(n(se, "TopLeft"), T = n(se, "TopCenter"), n(se, "TopRight")), n(se, !1, "clear:left").append(C = n(se, "MiddleLeft"), b, H = n(se, "MiddleRight")), n(se, !1, "clear:left").append(n(se, "BottomLeft"), k = n(se, "BottomCenter"), n(se, "BottomRight"))).find("div div").css({
            "float": "left"
        }), M = n(se, !1, "position:absolute; width:9999px; visibility:hidden; display:none; max-width:none;"), O = K.add(P).add(R).add(F), t(e.body).append(v, y.append(x, M)))
    }

    function m() {
        function i(t) {
            t.which > 1 || t.shiftKey || t.altKey || t.metaKey || t.ctrlKey || (t.preventDefault(), f(this))
        }
        return y ? (V || (V = !0, K.click(function() {
            J.next()
        }), P.click(function() {
            J.prev()
        }), B.click(function() {
            J.close()
        }), v.click(function() {
            _.get("overlayClose") && J.close()
        }), t(e).bind("keydown." + Z, function(t) {
            var e = t.keyCode;
            $ && _.get("escKey") && 27 === e && (t.preventDefault(), J.close()), $ && _.get("arrowKey") && W[1] && !t.altKey && (37 === e ? (t.preventDefault(), P.click()) : 39 === e && (t.preventDefault(), K.click()))
        }), t.isFunction(t.fn.on) ? t(e).on("click." + Z, "." + te, i) : t("." + te).live("click." + Z, i)), !0) : !1
    }

    function w() {
        var e, o, r, h = J.prep,
            d = ++le;
        if (q = !0, U = !1, u(he), u(ie), _.get("onLoad"), _.h = _.get("height") ? a(_.get("height"), "y") - A - D : _.get("innerHeight") && a(_.get("innerHeight"), "y"), _.w = _.get("width") ? a(_.get("width"), "x") - N - j : _.get("innerWidth") && a(_.get("innerWidth"), "x"), _.mw = _.w, _.mh = _.h, _.get("maxWidth") && (_.mw = a(_.get("maxWidth"), "x") - N - j, _.mw = _.w && _.w < _.mw ? _.w : _.mw), _.get("maxHeight") && (_.mh = a(_.get("maxHeight"), "y") - A - D, _.mh = _.h && _.h < _.mh ? _.h : _.mh), e = _.get("href"), Q = setTimeout(function() {
                S.show()
            }, 100), _.get("inline")) {
            var c = t(e);
            r = t("<div>").hide().insertBefore(c), ae.one(he, function() {
                r.replaceWith(c)
            }), h(c)
        } else _.get("iframe") ? h(" ") : _.get("html") ? h(_.get("html")) : s(_, e) ? (e = l(_, e), U = new Image, t(U).addClass(Z + "Photo").bind("error", function() {
            h(n(se, "Error").html(_.get("imgError")))
        }).one("load", function() {
            d === le && setTimeout(function() {
                var e;
                t.each(["alt", "longdesc", "aria-describedby"], function(e, i) {
                    var n = t(_.el).attr(i) || t(_.el).attr("data-" + i);
                    n && U.setAttribute(i, n)
                }), _.get("retinaImage") && i.devicePixelRatio > 1 && (U.height = U.height / i.devicePixelRatio, U.width = U.width / i.devicePixelRatio), _.get("scalePhotos") && (o = function() {
                    U.height -= U.height * e, U.width -= U.width * e
                }, _.mw && U.width > _.mw && (e = (U.width - _.mw) / U.width, o()), _.mh && U.height > _.mh && (e = (U.height - _.mh) / U.height, o())), _.h && (U.style.marginTop = Math.max(_.mh - U.height, 0) / 2 + "px"), W[1] && (_.get("loop") || W[z + 1]) && (U.style.cursor = "pointer", U.onclick = function() {
                    J.next()
                }), U.style.width = U.width + "px", U.style.height = U.height + "px", h(U)
            }, 1)
        }), U.src = e) : e && M.load(e, _.get("data"), function(e, i) {
            d === le && h("error" === i ? n(se, "Error").html(_.get("xhrError")) : t(this).contents())
        })
    }
    var v, y, x, b, T, C, H, k, W, E, L, M, S, I, R, F, K, P, B, O, _, D, j, A, N, z, U, $, q, G, Q, J, V, X = {
            html: !1,
            photo: !1,
            iframe: !1,
            inline: !1,
            transition: "elastic",
            speed: 300,
            fadeOut: 300,
            width: !1,
            initialWidth: "600",
            innerWidth: !1,
            maxWidth: !1,
            height: !1,
            initialHeight: "450",
            innerHeight: !1,
            maxHeight: !1,
            scalePhotos: !0,
            scrolling: !0,
            opacity: .9,
            preloading: !0,
            className: !1,
            overlayClose: !0,
            escKey: !0,
            arrowKey: !0,
            top: !1,
            bottom: !1,
            left: !1,
            right: !1,
            fixed: !1,
            data: void 0,
            closeButton: !0,
            fastIframe: !0,
            open: !1,
            reposition: !0,
            loop: !0,
            slideshow: !1,
            slideshowAuto: !0,
            slideshowSpeed: 2500,
            slideshowStart: "start slideshow",
            slideshowStop: "stop slideshow",
            photoRegex: /\.(gif|png|jp(e|g|eg)|bmp|ico|webp|jxr|svg)((#|\?).*)?$/i,
            retinaImage: !1,
            retinaUrl: !1,
            retinaSuffix: "@2x.$1",
            current: "image {current} of {total}",
            previous: "previous",
            next: "next",
            close: "close",
            xhrError: "This content failed to load.",
            imgError: "This image failed to load.",
            returnFocus: !0,
            trapFocus: !0,
            onOpen: !1,
            onLoad: !1,
            onComplete: !1,
            onCleanup: !1,
            onClosed: !1,
            rel: function() {
                return this.rel
            },
            href: function() {
                return t(this).attr("href")
            },
            title: function() {
                return this.title
            }
        },
        Y = "colorbox",
        Z = "cbox",
        te = Z + "Element",
        ee = Z + "_open",
        ie = Z + "_load",
        ne = Z + "_complete",
        oe = Z + "_cleanup",
        re = Z + "_closed",
        he = Z + "_purge",
        ae = t("<a/>"),
        se = "div",
        le = 0,
        de = {},
        ce = function() {
            function t() {
                clearTimeout(h)
            }

            function e() {
                (_.get("loop") || W[z + 1]) && (t(), h = setTimeout(J.next, _.get("slideshowSpeed")))
            }

            function i() {
                F.html(_.get("slideshowStop")).unbind(s).one(s, n), ae.bind(ne, e).bind(ie, t), y.removeClass(a + "off").addClass(a + "on")
            }

            function n() {
                t(), ae.unbind(ne, e).unbind(ie, t), F.html(_.get("slideshowStart")).unbind(s).one(s, function() {
                    J.next(), i()
                }), y.removeClass(a + "on").addClass(a + "off")
            }

            function o() {
                r = !1, F.hide(), t(), ae.unbind(ne, e).unbind(ie, t), y.removeClass(a + "off " + a + "on")
            }
            var r, h, a = Z + "Slideshow_",
                s = "click." + Z;
            return function() {
                r ? _.get("slideshow") || (ae.unbind(oe, o), o()) : _.get("slideshow") && W[1] && (r = !0, ae.one(oe, o), _.get("slideshowAuto") ? i() : n(), F.show())
            }
        }();
    t[Y] || (t(p), J = t.fn[Y] = t[Y] = function(e, i) {
        var n, o = this;
        if (e = e || {}, t.isFunction(o)) o = t("<a/>"), e.open = !0;
        else if (!o[0]) return o;
        return o[0] ? (p(), m() && (i && (e.onComplete = i), o.each(function() {
            var i = t.data(this, Y) || {};
            t.data(this, Y, t.extend(i, e))
        }).addClass(te), n = new r(o[0], e), n.get("open") && f(o[0])), o) : o
    }, J.position = function(e, i) {
        function n() {
            T[0].style.width = k[0].style.width = b[0].style.width = parseInt(y[0].style.width, 10) - j + "px", b[0].style.height = C[0].style.height = H[0].style.height = parseInt(y[0].style.height, 10) - D + "px"
        }
        var r, h, s, l = 0,
            d = 0,
            c = y.offset();
        if (E.unbind("resize." + Z), y.css({
                top: -9e4,
                left: -9e4
            }), h = E.scrollTop(), s = E.scrollLeft(), _.get("fixed") ? (c.top -= h, c.left -= s, y.css({
                position: "fixed"
            })) : (l = h, d = s, y.css({
                position: "absolute"
            })), d += _.get("right") !== !1 ? Math.max(E.width() - _.w - N - j - a(_.get("right"), "x"), 0) : _.get("left") !== !1 ? a(_.get("left"), "x") : Math.round(Math.max(E.width() - _.w - N - j, 0) / 2), l += _.get("bottom") !== !1 ? Math.max(o() - _.h - A - D - a(_.get("bottom"), "y"), 0) : _.get("top") !== !1 ? a(_.get("top"), "y") : Math.round(Math.max(o() - _.h - A - D, 0) / 2), y.css({
                top: c.top,
                left: c.left,
                visibility: "visible"
            }), x[0].style.width = x[0].style.height = "9999px", r = {
                width: _.w + N + j,
                height: _.h + A + D,
                top: l,
                left: d
            }, e) {
            var g = 0;
            t.each(r, function(t) {
                return r[t] !== de[t] ? (g = e, void 0) : void 0
            }), e = g
        }
        de = r, e || y.css(r), y.dequeue().animate(r, {
            duration: e || 0,
            complete: function() {
                n(), q = !1, x[0].style.width = _.w + N + j + "px", x[0].style.height = _.h + A + D + "px", _.get("reposition") && setTimeout(function() {
                    E.bind("resize." + Z, J.position)
                }, 1), i && i()
            },
            step: n
        })
    }, J.resize = function(t) {
        var e;
        $ && (t = t || {}, t.width && (_.w = a(t.width, "x") - N - j), t.innerWidth && (_.w = a(t.innerWidth, "x")), L.css({
            width: _.w
        }), t.height && (_.h = a(t.height, "y") - A - D), t.innerHeight && (_.h = a(t.innerHeight, "y")), t.innerHeight || t.height || (e = L.scrollTop(), L.css({
            height: "auto"
        }), _.h = L.height()), L.css({
            height: _.h
        }), e && L.scrollTop(e), J.position("none" === _.get("transition") ? 0 : _.get("speed")))
    }, J.prep = function(i) {
        function o() {
            return _.w = _.w || L.width(), _.w = _.mw && _.mw < _.w ? _.mw : _.w, _.w
        }

        function a() {
            return _.h = _.h || L.height(), _.h = _.mh && _.mh < _.h ? _.mh : _.h, _.h
        }
        if ($) {
            var d, g = "none" === _.get("transition") ? 0 : _.get("speed");
            L.remove(), L = n(se, "LoadedContent").append(i), L.hide().appendTo(M.show()).css({
                width: o(),
                overflow: _.get("scrolling") ? "auto" : "hidden"
            }).css({
                height: a()
            }).prependTo(b), M.hide(), t(U).css({
                "float": "none"
            }), c(_.get("className")), d = function() {
                function i() {
                    t.support.opacity === !1 && y[0].style.removeAttribute("filter")
                }
                var n, o, a = W.length;
                $ && (o = function() {
                    clearTimeout(Q), S.hide(), u(ne), _.get("onComplete")
                }, I.html(_.get("title")).show(), L.show(), a > 1 ? ("string" == typeof _.get("current") && R.html(_.get("current").replace("{current}", z + 1).replace("{total}", a)).show(), K[_.get("loop") || a - 1 > z ? "show" : "hide"]().html(_.get("next")), P[_.get("loop") || z ? "show" : "hide"]().html(_.get("previous")), ce(), _.get("preloading") && t.each([h(-1), h(1)], function() {
                    var i, n = W[this],
                        o = new r(n, t.data(n, Y)),
                        h = o.get("href");
                    h && s(o, h) && (h = l(o, h), i = e.createElement("img"), i.src = h)
                })) : O.hide(), _.get("iframe") ? (n = e.createElement("iframe"), "frameBorder" in n && (n.frameBorder = 0), "allowTransparency" in n && (n.allowTransparency = "true"), _.get("scrolling") || (n.scrolling = "no"), t(n).attr({
                    src: _.get("href"),
                    name: (new Date).getTime(),
                    "class": Z + "Iframe",
                    allowFullScreen: !0
                }).one("load", o).appendTo(L), ae.one(he, function() {
                    n.src = "//about:blank"
                }), _.get("fastIframe") && t(n).trigger("load")) : o(), "fade" === _.get("transition") ? y.fadeTo(g, 1, i) : i())
            }, "fade" === _.get("transition") ? y.fadeTo(g, 0, function() {
                J.position(0, d)
            }) : J.position(g, d)
        }
    }, J.next = function() {
        !q && W[1] && (_.get("loop") || W[z + 1]) && (z = h(1), f(W[z]))
    }, J.prev = function() {
        !q && W[1] && (_.get("loop") || z) && (z = h(-1), f(W[z]))
    }, J.close = function() {
        $ && !G && (G = !0, $ = !1, u(oe), _.get("onCleanup"), E.unbind("." + Z), v.fadeTo(_.get("fadeOut") || 0, 0), y.stop().fadeTo(_.get("fadeOut") || 0, 0, function() {
            y.hide(), v.hide(), u(he), L.remove(), setTimeout(function() {
                G = !1, u(re), _.get("onClosed")
            }, 1)
        }))
    }, J.remove = function() {
        y && (y.stop(), t[Y].close(), y.stop(!1, !0).remove(), v.remove(), G = !1, y = null, t("." + te).removeData(Y).removeClass(te), t(e).unbind("click." + Z).unbind("keydown." + Z))
    }, J.element = function() {
        return t(_.el)
    }, J.settings = X)
})(jQuery, document, window);;
! function(a) {
    function b() {
        var a = location.href;
        return hashtag = -1 !== a.indexOf("#prettyPhoto") ? decodeURI(a.substring(a.indexOf("#prettyPhoto") + 1, a.length)) : !1, hashtag && (hashtag = hashtag.replace(/<|>/g, "")), hashtag
    }

    function c() {
        "undefined" != typeof theRel && (location.hash = theRel + "/" + rel_index + "/")
    }

    function d() {
        -1 !== location.href.indexOf("#prettyPhoto") && (location.hash = "prettyPhoto")
    }

    function e(a, b) {
        a = a.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
        var c = "[\\?&]" + a + "=([^&#]*)",
            d = new RegExp(c),
            e = d.exec(b);
        return null == e ? "" : e[1]
    }
    a.prettyPhoto = {
        version: "3.1.6"
    }, a.fn.prettyPhoto = function(f) {
        function g() {
            a(".pp_loaderIcon").hide(), projectedTop = scroll_pos.scrollTop + (A / 2 - r.containerHeight / 2), projectedTop < 0 && (projectedTop = 0), $ppt.fadeTo(settings.animation_speed, 1), $pp_pic_holder.find(".pp_content").animate({
                height: r.contentHeight,
                width: r.contentWidth
            }, settings.animation_speed), $pp_pic_holder.animate({
                top: projectedTop,
                left: B / 2 - r.containerWidth / 2 < 0 ? 0 : B / 2 - r.containerWidth / 2,
                width: r.containerWidth
            }, settings.animation_speed, function() {
                $pp_pic_holder.find(".pp_hoverContainer,#fullResImage").height(r.height).width(r.width), $pp_pic_holder.find(".pp_fade").fadeIn(settings.animation_speed), isSet && "image" == l(pp_images[set_position]) ? $pp_pic_holder.find(".pp_hoverContainer").show() : $pp_pic_holder.find(".pp_hoverContainer").hide(), settings.allow_expand && (r.resized ? a("a.pp_expand,a.pp_contract").show() : a("a.pp_expand").hide()), !settings.autoplay_slideshow || x || s || a.prettyPhoto.startSlideshow(), settings.changepicturecallback(), s = !0
            }), p(), f.ajaxcallback()
        }

        function h(b) {
            $pp_pic_holder.find("#pp_full_res object,#pp_full_res embed").css("visibility", "hidden"), $pp_pic_holder.find(".pp_fade").fadeOut(settings.animation_speed, function() {
                a(".pp_loaderIcon").show(), b()
            })
        }

        function i(b) {
            b > 1 ? a(".pp_nav").show() : a(".pp_nav").hide()
        }

        function j(a, b) {
            if (resized = !1, k(a, b), imageWidth = a, imageHeight = b, (w > B || v > A) && doresize && settings.allow_resize && !z) {
                for (resized = !0, fitting = !1; !fitting;) w > B ? (imageWidth = B - 200, imageHeight = b / a * imageWidth) : v > A ? (imageHeight = A - 200, imageWidth = a / b * imageHeight) : fitting = !0, v = imageHeight, w = imageWidth;
                (w > B || v > A) && j(w, v), k(imageWidth, imageHeight)
            }
            return {
                width: Math.floor(imageWidth),
                height: Math.floor(imageHeight),
                containerHeight: Math.floor(v),
                containerWidth: Math.floor(w) + 2 * settings.horizontal_padding,
                contentHeight: Math.floor(t),
                contentWidth: Math.floor(u),
                resized: resized
            }
        }

        function k(b, c) {
            b = parseFloat(b), c = parseFloat(c), $pp_details = $pp_pic_holder.find(".pp_details"), $pp_details.width(b), detailsHeight = parseFloat($pp_details.css("marginTop")) + parseFloat($pp_details.css("marginBottom")), $pp_details = $pp_details.clone().addClass(settings.theme).width(b).appendTo(a("body")).css({
                position: "absolute",
                top: -1e4
            }), detailsHeight += $pp_details.height(), detailsHeight = detailsHeight <= 34 ? 36 : detailsHeight, $pp_details.remove(), $pp_title = $pp_pic_holder.find(".ppt"), $pp_title.width(b), titleHeight = parseFloat($pp_title.css("marginTop")) + parseFloat($pp_title.css("marginBottom")), $pp_title = $pp_title.clone().appendTo(a("body")).css({
                position: "absolute",
                top: -1e4
            }), titleHeight += $pp_title.height(), $pp_title.remove(), t = c + detailsHeight, u = b, v = t + titleHeight + $pp_pic_holder.find(".pp_top").height() + $pp_pic_holder.find(".pp_bottom").height(), w = b
        }

        function l(a) {
            return a.match(/youtube\.com\/watch/i) || a.match(/youtu\.be/i) ? "youtube" : a.match(/vimeo\.com/i) ? "vimeo" : a.match(/\b.mov\b/i) ? "quicktime" : a.match(/\b.swf\b/i) ? "flash" : a.match(/\biframe=true\b/i) ? "iframe" : a.match(/\bajax=true\b/i) ? "ajax" : a.match(/\bcustom=true\b/i) ? "custom" : "#" == a.substr(0, 1) ? "inline" : "image"
        }

        function m() {
            if (doresize && "undefined" != typeof $pp_pic_holder) {
                if (scroll_pos = n(), contentHeight = $pp_pic_holder.height(), contentwidth = $pp_pic_holder.width(), projectedTop = A / 2 + scroll_pos.scrollTop - contentHeight / 2, projectedTop < 0 && (projectedTop = 0), contentHeight > A) return;
                $pp_pic_holder.css({
                    top: projectedTop,
                    left: B / 2 + scroll_pos.scrollLeft - contentwidth / 2
                })
            }
        }

        function n() {
            return self.pageYOffset ? {
                scrollTop: self.pageYOffset,
                scrollLeft: self.pageXOffset
            } : document.documentElement && document.documentElement.scrollTop ? {
                scrollTop: document.documentElement.scrollTop,
                scrollLeft: document.documentElement.scrollLeft
            } : document.body ? {
                scrollTop: document.body.scrollTop,
                scrollLeft: document.body.scrollLeft
            } : void 0
        }

        function o() {
            A = a(window).height(), B = a(window).width(), "undefined" != typeof $pp_overlay && $pp_overlay.height(a(document).height()).width(B)
        }

        function p() {
            isSet && settings.overlay_gallery && "image" == l(pp_images[set_position]) ? (itemWidth = 57, navWidth = "facebook" == settings.theme || "pp_default" == settings.theme ? 50 : 30, itemsPerPage = Math.floor((r.containerWidth - 100 - navWidth) / itemWidth), itemsPerPage = itemsPerPage < pp_images.length ? itemsPerPage : pp_images.length, totalPage = Math.ceil(pp_images.length / itemsPerPage) - 1, 0 == totalPage ? (navWidth = 0, $pp_gallery.find(".pp_arrow_next,.pp_arrow_previous").hide()) : $pp_gallery.find(".pp_arrow_next,.pp_arrow_previous").show(), galleryWidth = itemsPerPage * itemWidth, fullGalleryWidth = pp_images.length * itemWidth, $pp_gallery.css("margin-left", -(galleryWidth / 2 + navWidth / 2)).find("div:first").width(galleryWidth + 5).find("ul").width(fullGalleryWidth).find("li.selected").removeClass("selected"), goToPage = Math.floor(set_position / itemsPerPage) < totalPage ? Math.floor(set_position / itemsPerPage) : totalPage, a.prettyPhoto.changeGalleryPage(goToPage), $pp_gallery_li.filter(":eq(" + set_position + ")").addClass("selected")) : $pp_pic_holder.find(".pp_content").unbind("mouseenter mouseleave")
        }

        function q(b) {
            if (settings.social_tools && (facebook_like_link = settings.social_tools.replace("{location_href}", encodeURIComponent(location.href))), settings.markup = settings.markup.replace("{pp_social}", ""), a("body").append(settings.markup), $pp_pic_holder = a(".pp_pic_holder"), $ppt = a(".ppt"), $pp_overlay = a("div.pp_overlay"), isSet && settings.overlay_gallery) {
                currentGalleryPage = 0, toInject = "";
                for (var c = 0; c < pp_images.length; c++) pp_images[c].match(/\b(jpg|jpeg|png|gif)\b/gi) ? (classname = "", img_src = pp_images[c]) : (classname = "default", img_src = ""), toInject += "<li class='" + classname + "'><a href='#'><img src='" + img_src + "' width='50' alt='' /></a></li>";
                toInject = settings.gallery_markup.replace(/{gallery}/g, toInject), $pp_pic_holder.find("#pp_full_res").after(toInject), $pp_gallery = a(".pp_pic_holder .pp_gallery"), $pp_gallery_li = $pp_gallery.find("li"), $pp_gallery.find(".pp_arrow_next").click(function() {
                    return a.prettyPhoto.changeGalleryPage("next"), a.prettyPhoto.stopSlideshow(), !1
                }), $pp_gallery.find(".pp_arrow_previous").click(function() {
                    return a.prettyPhoto.changeGalleryPage("previous"), a.prettyPhoto.stopSlideshow(), !1
                }), $pp_pic_holder.find(".pp_content").hover(function() {
                    $pp_pic_holder.find(".pp_gallery:not(.disabled)").fadeIn()
                }, function() {
                    $pp_pic_holder.find(".pp_gallery:not(.disabled)").fadeOut()
                }), itemWidth = 57, $pp_gallery_li.each(function(b) {
                    a(this).find("a").click(function() {
                        return a.prettyPhoto.changePage(b), a.prettyPhoto.stopSlideshow(), !1
                    })
                })
            }
            settings.slideshow && ($pp_pic_holder.find(".pp_nav").prepend('<a href="#" class="pp_play">Play</a>'), $pp_pic_holder.find(".pp_nav .pp_play").click(function() {
                return a.prettyPhoto.startSlideshow(), !1
            })), $pp_pic_holder.attr("class", "pp_pic_holder " + settings.theme), $pp_overlay.css({
                opacity: 0,
                height: a(document).height(),
                width: a(window).width()
            }).bind("click", function() {
                settings.modal || a.prettyPhoto.close()
            }), a("a.pp_close").bind("click", function() {
                return a.prettyPhoto.close(), !1
            }), settings.allow_expand && a("a.pp_expand").bind("click", function(b) {
                return a(this).hasClass("pp_expand") ? (a(this).removeClass("pp_expand").addClass("pp_contract"), doresize = !1) : (a(this).removeClass("pp_contract").addClass("pp_expand"), doresize = !0), h(function() {
                    a.prettyPhoto.open()
                }), !1
            }), $pp_pic_holder.find(".pp_previous, .pp_nav .pp_arrow_previous").bind("click", function() {
                return a.prettyPhoto.changePage("previous"), a.prettyPhoto.stopSlideshow(), !1
            }), $pp_pic_holder.find(".pp_next, .pp_nav .pp_arrow_next").bind("click", function() {
                return a.prettyPhoto.changePage("next"), a.prettyPhoto.stopSlideshow(), !1
            }), m()
        }
        f = jQuery.extend({
            hook: "rel",
            animation_speed: "fast",
            ajaxcallback: function() {},
            slideshow: 5e3,
            autoplay_slideshow: !1,
            opacity: .8,
            show_title: !0,
            allow_resize: !0,
            allow_expand: !0,
            default_width: 500,
            default_height: 344,
            counter_separator_label: "/",
            theme: "pp_default",
            horizontal_padding: 20,
            hideflash: !1,
            wmode: "opaque",
            autoplay: !0,
            modal: !1,
            deeplinking: !0,
            overlay_gallery: !0,
            overlay_gallery_max: 30,
            keyboard_shortcuts: !0,
            changepicturecallback: function() {},
            callback: function() {},
            ie6_fallback: !0,
            markup: '<div class="pp_pic_holder">       <div class="ppt">&nbsp;</div>       <div class="pp_top">        <div class="pp_left"></div>        <div class="pp_middle"></div>        <div class="pp_right"></div>       </div>       <div class="pp_content_container">        <div class="pp_left">        <div class="pp_right">         <div class="pp_content">          <div class="pp_loaderIcon"></div>          <div class="pp_fade">           <a href="#" class="pp_expand" title="Expand the image">Expand</a>           <div class="pp_hoverContainer">            <a class="pp_next" href="#">next</a>            <a class="pp_previous" href="#">previous</a>           </div>           <div id="pp_full_res"></div>           <div class="pp_details">            <div class="pp_nav">             <a href="#" class="pp_arrow_previous">Previous</a>             <p class="currentTextHolder">0/0</p>             <a href="#" class="pp_arrow_next">Next</a>            </div>            <p class="pp_description"></p>            <div class="pp_social">{pp_social}</div>            <a class="pp_close" href="#">Close</a>           </div>          </div>         </div>        </div>        </div>       </div>       <div class="pp_bottom">        <div class="pp_left"></div>        <div class="pp_middle"></div>        <div class="pp_right"></div>       </div>      </div>      <div class="pp_overlay"></div>',
            gallery_markup: '<div class="pp_gallery">         <a href="#" class="pp_arrow_previous">Previous</a>         <div>          <ul>           {gallery}          </ul>         </div>         <a href="#" class="pp_arrow_next">Next</a>        </div>',
            image_markup: '<img id="fullResImage" src="{path}" />',
            flash_markup: '<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="{width}" height="{height}"><param name="wmode" value="{wmode}" /><param name="allowfullscreen" value="true" /><param name="allowscriptaccess" value="always" /><param name="movie" value="{path}" /><embed src="{path}" type="application/x-shockwave-flash" allowfullscreen="true" allowscriptaccess="always" width="{width}" height="{height}" wmode="{wmode}"></embed></object>',
            quicktime_markup: '<object classid="clsid:02BF25D5-8C17-4B23-BC80-D3488ABDDC6B" codebase="http://www.apple.com/qtactivex/qtplugin.cab" height="{height}" width="{width}"><param name="src" value="{path}"><param name="autoplay" value="{autoplay}"><param name="type" value="video/quicktime"><embed src="{path}" height="{height}" width="{width}" autoplay="{autoplay}" type="video/quicktime" pluginspage="http://www.apple.com/quicktime/download/"></embed></object>',
            iframe_markup: '<iframe src ="{path}" width="{width}" height="{height}" frameborder="no"></iframe>',
            inline_markup: '<div class="pp_inline">{content}</div>',
            custom_markup: "",
            social_tools: '<div class="twitter"><a href="http://twitter.com/share" class="twitter-share-button" data-count="none">Tweet</a><script type="text/javascript" src="widgets.js"/*tpa=http://platform.twitter.com/widgets.js*/></script></div><div class="facebook"><iframe src="http://www.facebook.com/plugins/like.php?locale=en_US&href={location_href}&layout=button_count&show_faces=true&width=500&action=like&font&colorscheme=light&height=23" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:500px; height:23px;" allowTransparency="true"></iframe></div>'
        }, f);
        var r, s, t, u, v, w, x, y = this,
            z = !1,
            A = a(window).height(),
            B = a(window).width();
        return doresize = !0, scroll_pos = n(), a(window).unbind("resize.prettyphoto").bind("resize.prettyphoto", function() {
            m(), o()
        }), f.keyboard_shortcuts && a(document).unbind("keydown.prettyphoto").bind("keydown.prettyphoto", function(b) {
            if ("undefined" != typeof $pp_pic_holder && $pp_pic_holder.is(":visible")) switch (b.keyCode) {
                case 37:
                    a.prettyPhoto.changePage("previous"), b.preventDefault();
                    break;
                case 39:
                    a.prettyPhoto.changePage("next"), b.preventDefault();
                    break;
                case 27:
                    settings.modal || a.prettyPhoto.close(), b.preventDefault()
            }
        }), a.prettyPhoto.initialize = function() {
            return settings = f, "pp_default" == settings.theme && (settings.horizontal_padding = 16), theRel = a(this).attr(settings.hook), galleryRegExp = /\[(?:.*)\]/, isSet = galleryRegExp.exec(theRel) ? !0 : !1, pp_images = isSet ? jQuery.map(y, function(b, c) {
                return -1 != a(b).attr(settings.hook).indexOf(theRel) ? a(b).attr("href") : void 0
            }) : a.makeArray(a(this).attr("href")), pp_titles = isSet ? jQuery.map(y, function(b, c) {
                return -1 != a(b).attr(settings.hook).indexOf(theRel) ? a(b).find("img").attr("alt") ? a(b).find("img").attr("alt") : "" : void 0
            }) : a.makeArray(a(this).find("img").attr("alt")), pp_descriptions = isSet ? jQuery.map(y, function(b, c) {
                return -1 != a(b).attr(settings.hook).indexOf(theRel) ? a(b).attr("title") ? a(b).attr("title") : "" : void 0
            }) : a.makeArray(a(this).attr("title")), pp_images.length > settings.overlay_gallery_max && (settings.overlay_gallery = !1), set_position = jQuery.inArray(a(this).attr("href"), pp_images), rel_index = isSet ? set_position : a("a[" + settings.hook + "^='" + theRel + "']").index(a(this)), q(this), settings.allow_resize && a(window).bind("scroll.prettyphoto", function() {
                m()
            }), a.prettyPhoto.open(), !1
        }, a.prettyPhoto.open = function(b) {
            return "undefined" == typeof settings && (settings = f, pp_images = a.makeArray(arguments[0]), pp_titles = arguments[1] ? a.makeArray(arguments[1]) : a.makeArray(""), pp_descriptions = arguments[2] ? a.makeArray(arguments[2]) : a.makeArray(""), isSet = pp_images.length > 1 ? !0 : !1, set_position = arguments[3] ? arguments[3] : 0, q(b.target)), settings.hideflash && a("object,embed,iframe[src*=youtube],iframe[src*=vimeo]").css("visibility", "hidden"), i(a(pp_images).size()), a(".pp_loaderIcon").show(), settings.deeplinking && c(), settings.social_tools && (facebook_like_link = settings.social_tools.replace("{location_href}", encodeURIComponent(location.href)), $pp_pic_holder.find(".pp_social").html(facebook_like_link)), $ppt.is(":hidden") && $ppt.css("opacity", 0).show(), $pp_overlay.show().fadeTo(settings.animation_speed, settings.opacity), $pp_pic_holder.find(".currentTextHolder").text(set_position + 1 + settings.counter_separator_label + a(pp_images).size()), "undefined" != typeof pp_descriptions[set_position] && "" != pp_descriptions[set_position] ? $pp_pic_holder.find(".pp_description").show().html(unescape(pp_descriptions[set_position])) : $pp_pic_holder.find(".pp_description").hide(), movie_width = parseFloat(e("width", pp_images[set_position])) ? e("width", pp_images[set_position]) : settings.default_width.toString(), movie_height = parseFloat(e("height", pp_images[set_position])) ? e("height", pp_images[set_position]) : settings.default_height.toString(), z = !1, -1 != movie_height.indexOf("%") && (movie_height = parseFloat(a(window).height() * parseFloat(movie_height) / 100 - 150), z = !0), -1 != movie_width.indexOf("%") && (movie_width = parseFloat(a(window).width() * parseFloat(movie_width) / 100 - 150), z = !0), $pp_pic_holder.fadeIn(function() {
                switch (settings.show_title && "" != pp_titles[set_position] && "undefined" != typeof pp_titles[set_position] ? $ppt.html(unescape(pp_titles[set_position])) : $ppt.html("&nbsp;"), imgPreloader = "", skipInjection = !1, l(pp_images[set_position])) {
                    case "image":
                        imgPreloader = new Image, nextImage = new Image, isSet && set_position < a(pp_images).size() - 1 && (nextImage.src = pp_images[set_position + 1]), prevImage = new Image, isSet && pp_images[set_position - 1] && (prevImage.src = pp_images[set_position - 1]), $pp_pic_holder.find("#pp_full_res")[0].innerHTML = settings.image_markup.replace(/{path}/g, pp_images[set_position]), imgPreloader.onload = function() {
                            r = j(imgPreloader.width, imgPreloader.height), g()
                        }, imgPreloader.onerror = function() {
                            alert("Image cannot be loaded. Make sure the path is correct and image exist."), a.prettyPhoto.close()
                        }, imgPreloader.src = pp_images[set_position];
                        break;
                    case "youtube":
                        r = j(movie_width, movie_height), movie_id = e("v", pp_images[set_position]), "" == movie_id && (movie_id = pp_images[set_position].split("youtu.be/"), movie_id = movie_id[1], movie_id.indexOf("?") > 0 && (movie_id = movie_id.substr(0, movie_id.indexOf("?"))), movie_id.indexOf("&") > 0 && (movie_id = movie_id.substr(0, movie_id.indexOf("&")))), movie = "http://www.youtube.com/embed/" + movie_id, e("rel", pp_images[set_position]) ? movie += "?rel=" + e("rel", pp_images[set_position]) : movie += "?rel=1", settings.autoplay && (movie += "&autoplay=1"), toInject = settings.iframe_markup.replace(/{width}/g, r.width).replace(/{height}/g, r.height).replace(/{wmode}/g, settings.wmode).replace(/{path}/g, movie);
                        break;
                    case "vimeo":
                        r = j(movie_width, movie_height), movie_id = pp_images[set_position];
                        var b = /http(s?):\/\/(www\.)?vimeo.com\/(\d+)/,
                            c = movie_id.match(b);
                        movie = "http://player.vimeo.com/video/" + c[3] + "?title=0&amp;byline=0&amp;portrait=0", settings.autoplay && (movie += "&autoplay=1;"), vimeo_width = r.width + "/embed/?moog_width=" + r.width, toInject = settings.iframe_markup.replace(/{width}/g, vimeo_width).replace(/{height}/g, r.height).replace(/{path}/g, movie);
                        break;
                    case "quicktime":
                        r = j(movie_width, movie_height), r.height += 15, r.contentHeight += 15, r.containerHeight += 15, toInject = settings.quicktime_markup.replace(/{width}/g, r.width).replace(/{height}/g, r.height).replace(/{wmode}/g, settings.wmode).replace(/{path}/g, pp_images[set_position]).replace(/{autoplay}/g, settings.autoplay);
                        break;
                    case "flash":
                        r = j(movie_width, movie_height), flash_vars = pp_images[set_position], flash_vars = flash_vars.substring(pp_images[set_position].indexOf("flashvars") + 10, pp_images[set_position].length), filename = pp_images[set_position], filename = filename.substring(0, filename.indexOf("?")), toInject = settings.flash_markup.replace(/{width}/g, r.width).replace(/{height}/g, r.height).replace(/{wmode}/g, settings.wmode).replace(/{path}/g, filename + "?" + flash_vars);
                        break;
                    case "iframe":
                        r = j(movie_width, movie_height), frame_url = pp_images[set_position], frame_url = frame_url.substr(0, frame_url.indexOf("iframe") - 1), toInject = settings.iframe_markup.replace(/{width}/g, r.width).replace(/{height}/g, r.height).replace(/{path}/g, frame_url);
                        break;
                    case "ajax":
                        doresize = !1, r = j(movie_width, movie_height), doresize = !0, skipInjection = !0, a.get(pp_images[set_position], function(a) {
                            toInject = settings.inline_markup.replace(/{content}/g, a), $pp_pic_holder.find("#pp_full_res")[0].innerHTML = toInject, g()
                        });
                        break;
                    case "custom":
                        r = j(movie_width, movie_height), toInject = settings.custom_markup;
                        break;
                    case "inline":
                        myClone = a(pp_images[set_position]).clone().append('<br clear="all" />').css({
                            width: settings.default_width
                        }).wrapInner('<div id="pp_full_res"><div class="pp_inline"></div></div>').appendTo(a("body")).show(), doresize = !1, r = j(a(myClone).width(), a(myClone).height()), doresize = !0, a(myClone).remove(), toInject = settings.inline_markup.replace(/{content}/g, a(pp_images[set_position]).html())
                }
                imgPreloader || skipInjection || ($pp_pic_holder.find("#pp_full_res")[0].innerHTML = toInject, g())
            }), !1
        }, a.prettyPhoto.changePage = function(b) {
            currentGalleryPage = 0, "previous" == b ? (set_position--, set_position < 0 && (set_position = a(pp_images).size() - 1)) : "next" == b ? (set_position++, set_position > a(pp_images).size() - 1 && (set_position = 0)) : set_position = b, rel_index = set_position, doresize || (doresize = !0), settings.allow_expand && a(".pp_contract").removeClass("pp_contract").addClass("pp_expand"), h(function() {
                a.prettyPhoto.open()
            })
        }, a.prettyPhoto.changeGalleryPage = function(a) {
            "next" == a ? (currentGalleryPage++, currentGalleryPage > totalPage && (currentGalleryPage = 0)) : "previous" == a ? (currentGalleryPage--, currentGalleryPage < 0 && (currentGalleryPage = totalPage)) : currentGalleryPage = a, slide_speed = "next" == a || "previous" == a ? settings.animation_speed : 0, slide_to = currentGalleryPage * (itemsPerPage * itemWidth), $pp_gallery.find("ul").animate({
                left: -slide_to
            }, slide_speed)
        }, a.prettyPhoto.startSlideshow = function() {
            "undefined" == typeof x ? ($pp_pic_holder.find(".pp_play").unbind("click").removeClass("pp_play").addClass("pp_pause").click(function() {
                return a.prettyPhoto.stopSlideshow(), !1
            }), x = setInterval(a.prettyPhoto.startSlideshow, settings.slideshow)) : a.prettyPhoto.changePage("next")
        }, a.prettyPhoto.stopSlideshow = function() {
            $pp_pic_holder.find(".pp_pause").unbind("click").removeClass("pp_pause").addClass("pp_play").click(function() {
                return a.prettyPhoto.startSlideshow(), !1
            }), clearInterval(x), x = void 0
        }, a.prettyPhoto.close = function() {
            $pp_overlay.is(":animated") || (a.prettyPhoto.stopSlideshow(), $pp_pic_holder.stop().find("object,embed").css("visibility", "hidden"), a("div.pp_pic_holder,div.ppt,.pp_fade").fadeOut(settings.animation_speed, function() {
                a(this).remove()
            }), $pp_overlay.fadeOut(settings.animation_speed, function() {
                settings.hideflash && a("object,embed,iframe[src*=youtube],iframe[src*=vimeo]").css("visibility", "visible"), a(this).remove(), a(window).unbind("scroll.prettyphoto"), d(), settings.callback(), doresize = !0, s = !1, delete settings
            }))
        }, !pp_alreadyInitialized && b() && (pp_alreadyInitialized = !0, hashIndex = b(), hashRel = hashIndex, hashIndex = hashIndex.substring(hashIndex.indexOf("/") + 1, hashIndex.length - 1), hashRel = hashRel.substring(0, hashRel.indexOf("/")), setTimeout(function() {
            a("a[" + f.hook + "^='" + hashRel + "']:eq(" + hashIndex + ")").trigger("click")
        }, 50)), this.unbind("click.prettyphoto").bind("click.prettyphoto", a.prettyPhoto.initialize)
    }
}(jQuery);
var pp_alreadyInitialized = !1;;
! function(a) {
    a(function() {
        a("http://demo.roadthemes.com/maroko/wp-content/cache/minify/000000/a.zoom").prettyPhoto({
            hook: "data-rel",
            social_tools: !1,
            theme: "pp_woocommerce",
            horizontal_padding: 20,
            opacity: .8,
            deeplinking: !1
        }), a("a[data-rel^='prettyPhoto']").prettyPhoto({
            hook: "data-rel",
            social_tools: !1,
            theme: "pp_woocommerce",
            horizontal_padding: 20,
            opacity: .8,
            deeplinking: !1
        })
    })
}(jQuery);;
(function(a) {
    var b = this.SelectBox = function(c, d) {
        if (c instanceof jQuery) {
            if (c.length > 0) {
                c = c[0]
            } else {
                return
            }
        }
        this.typeTimer = null;
        this.typeSearch = "";
        this.isMac = navigator.platform.match(/mac/i);
        d = "object" === typeof d ? d : {};
        this.selectElement = c;
        if (!d.mobile && navigator.userAgent.match(/iPad|iPhone|Android|IEMobile|BlackBerry/i)) {
            return false
        }
        if ("select" !== c.tagName.toLowerCase()) {
            return false
        }
        this.init(d)
    };
    b.prototype.version = "1.2.0";
    b.prototype.init = function(o) {
        var j = a(this.selectElement);
        if (j.data("selectBox-control")) {
            return false
        }
        var f = a('<a class="selectBox" />'),
            h = j.attr("multiple") || parseInt(j.attr("size")) > 1,
            d = o || {},
            c = parseInt(j.prop("tabindex")) || 0,
            m = this;
        f.width(j.outerWidth()).addClass(j.attr("class")).attr("title", j.attr("title") || "").attr("tabindex", c).css("display", "inline-block").bind("focus.selectBox", function() {
            if (this !== document.activeElement && document.body !== document.activeElement) {
                a(document.activeElement).blur()
            }
            if (f.hasClass("selectBox-active")) {
                return
            }
            f.addClass("selectBox-active");
            j.trigger("focus")
        }).bind("blur.selectBox", function() {
            if (!f.hasClass("selectBox-active")) {
                return
            }
            f.removeClass("selectBox-active");
            j.trigger("blur")
        });
        if (!a(window).data("selectBox-bindings")) {
            a(window).data("selectBox-bindings", true).bind("scroll.selectBox", this.hideMenus).bind("resize.selectBox", this.hideMenus)
        }
        if (j.attr("disabled")) {
            f.addClass("selectBox-disabled")
        }
        j.bind("click.selectBox", function(p) {
            f.focus();
            p.preventDefault()
        });
        if (h) {
            o = this.getOptions("inline");
            f.append(o).data("selectBox-options", o).addClass("selectBox-inline selectBox-menuShowing").bind("keydown.selectBox", function(p) {
                m.handleKeyDown(p)
            }).bind("keypress.selectBox", function(p) {
                m.handleKeyPress(p)
            }).bind("mousedown.selectBox", function(p) {
                if (1 !== p.which) {
                    return
                }
                if (a(p.target).is("A.selectBox-inline")) {
                    p.preventDefault()
                }
                if (!f.hasClass("selectBox-focus")) {
                    f.focus()
                }
            }).insertAfter(j);
            if (!j[0].style.height) {
                var n = j.attr("size") ? parseInt(j.attr("size")) : 5;
                var e = f.clone().removeAttr("id").css({
                    position: "absolute",
                    top: "-9999em"
                }).show().appendTo("body");
                e.find(".selectBox-options").html("<li><a>\u00A0</a></li>");
                var l = parseInt(e.find(".selectBox-options A:first").html("&nbsp;").outerHeight());
                e.remove();
                f.height(l * n)
            }
            this.disableSelection(f)
        } else {
            var i = a('<span class="selectBox-label" />'),
                k = a('<span class="selectBox-arrow" />');
            i.attr("class", this.getLabelClass()).text(this.getLabelText());
            o = this.getOptions("dropdown");
            o.appendTo("BODY");
            f.data("selectBox-options", o).addClass("selectBox-dropdown").append(i).append(k).bind("mousedown.selectBox", function(p) {
                if (1 === p.which) {
                    if (f.hasClass("selectBox-menuShowing")) {
                        m.hideMenus()
                    } else {
                        p.stopPropagation();
                        o.data("selectBox-down-at-x", p.screenX).data("selectBox-down-at-y", p.screenY);
                        m.showMenu()
                    }
                }
            }).bind("keydown.selectBox", function(p) {
                m.handleKeyDown(p)
            }).bind("keypress.selectBox", function(p) {
                m.handleKeyPress(p)
            }).bind("open.selectBox", function(q, p) {
                if (p && p._selectBox === true) {
                    return
                }
                m.showMenu()
            }).bind("close.selectBox", function(q, p) {
                if (p && p._selectBox === true) {
                    return
                }
                m.hideMenus()
            }).insertAfter(j);
            var g = f.width() - k.outerWidth() - parseInt(i.css("paddingLeft")) || 0 - parseInt(i.css("paddingRight")) || 0;
            i.width(g);
            this.disableSelection(f)
        }
        j.addClass("selectBox").data("selectBox-control", f).data("selectBox-settings", d).hide()
    };
    b.prototype.getOptions = function(j) {
        var f;
        var c = a(this.selectElement);
        var e = this;
        var d = function(i, k) {
            i.children("OPTION, OPTGROUP").each(function() {
                if (a(this).is("OPTION")) {
                    if (a(this).length > 0) {
                        e.generateOptions(a(this), k)
                    } else {
                        k.append("<li>\u00A0</li>")
                    }
                } else {
                    var l = a('<li class="selectBox-optgroup" />');
                    l.text(a(this).attr("label"));
                    k.append(l);
                    k = d(a(this), k)
                }
            });
            return k
        };
        switch (j) {
            case "inline":
                f = a('<ul class="selectBox-options" />');
                f = d(c, f);
                f.find("A").bind("mouseover.selectBox", function(i) {
                    e.addHover(a(this).parent())
                }).bind("mouseout.selectBox", function(i) {
                    e.removeHover(a(this).parent())
                }).bind("mousedown.selectBox", function(i) {
                    if (1 !== i.which) {
                        return
                    }
                    i.preventDefault();
                    if (!c.selectBox("control").hasClass("selectBox-active")) {
                        c.selectBox("control").focus()
                    }
                }).bind("mouseup.selectBox", function(i) {
                    if (1 !== i.which) {
                        return
                    }
                    e.hideMenus();
                    e.selectOption(a(this).parent(), i)
                });
                this.disableSelection(f);
                return f;
            case "dropdown":
                f = a('<ul class="selectBox-dropdown-menu selectBox-options" />');
                f = d(c, f);
                f.data("selectBox-select", c).css("display", "none").appendTo("BODY").find("A").bind("mousedown.selectBox", function(i) {
                    if (i.which === 1) {
                        i.preventDefault();
                        if (i.screenX === f.data("selectBox-down-at-x") && i.screenY === f.data("selectBox-down-at-y")) {
                            f.removeData("selectBox-down-at-x").removeData("selectBox-down-at-y");
                            e.hideMenus()
                        }
                    }
                }).bind("mouseup.selectBox", function(i) {
                    if (1 !== i.which) {
                        return
                    }
                    if (i.screenX === f.data("selectBox-down-at-x") && i.screenY === f.data("selectBox-down-at-y")) {
                        return
                    } else {
                        f.removeData("selectBox-down-at-x").removeData("selectBox-down-at-y")
                    }
                    e.selectOption(a(this).parent());
                    e.hideMenus()
                }).bind("mouseover.selectBox", function(i) {
                    e.addHover(a(this).parent())
                }).bind("mouseout.selectBox", function(i) {
                    e.removeHover(a(this).parent())
                });
                var h = c.attr("class") || "";
                if ("" !== h) {
                    h = h.split(" ");
                    for (var g in h) {
                        f.addClass(h[g] + "-selectBox-dropdown-menu")
                    }
                }
                this.disableSelection(f);
                return f
        }
    };
    b.prototype.getLabelClass = function() {
        var c = a(this.selectElement).find("OPTION:selected");
        return ("selectBox-label " + (c.attr("class") || "")).replace(/\s+$/, "")
    };
    b.prototype.getLabelText = function() {
        var c = a(this.selectElement).find("OPTION:selected");
        return c.text() || "\u00A0"
    };
    b.prototype.setLabel = function() {
        var c = a(this.selectElement);
        var d = c.data("selectBox-control");
        if (!d) {
            return
        }
        d.find(".selectBox-label").attr("class", this.getLabelClass()).text(this.getLabelText())
    };
    b.prototype.destroy = function() {
        var c = a(this.selectElement);
        var e = c.data("selectBox-control");
        if (!e) {
            return
        }
        var d = e.data("selectBox-options");
        d.remove();
        e.remove();
        c.removeClass("selectBox").removeData("selectBox-control").data("selectBox-control", null).removeData("selectBox-settings").data("selectBox-settings", null).show()
    };
    b.prototype.refresh = function() {
        var c = a(this.selectElement),
            e = c.data("selectBox-control"),
            f = e.hasClass("selectBox-dropdown"),
            d = e.hasClass("selectBox-menuShowing");
        c.selectBox("options", c.html());
        if (f && d) {
            this.showMenu()
        }
    };
    b.prototype.showMenu = function() {
        var e = this,
            d = a(this.selectElement),
            j = d.data("selectBox-control"),
            h = d.data("selectBox-settings"),
            f = j.data("selectBox-options");
        if (j.hasClass("selectBox-disabled")) {
            return false
        }
        this.hideMenus();
        var g = parseInt(j.css("borderBottomWidth")) || 0;
        f.width(j.innerWidth()).css({
            top: j.offset().top + j.outerHeight() - g,
            left: j.offset().left
        });
        if (d.triggerHandler("beforeopen")) {
            return false
        }
        var i = function() {
            d.triggerHandler("open", {
                _selectBox: true
            })
        };
        switch (h.menuTransition) {
            case "fade":
                f.fadeIn(h.menuSpeed, i);
                break;
            case "slide":
                f.slideDown(h.menuSpeed, i);
                break;
            default:
                f.show(h.menuSpeed, i);
                break
        }
        if (!h.menuSpeed) {
            i()
        }
        var c = f.find(".selectBox-selected:first");
        this.keepOptionInView(c, true);
        this.addHover(c);
        j.addClass("selectBox-menuShowing");
        a(document).bind("mousedown.selectBox", function(k) {
            if (1 === k.which) {
                if (a(k.target).parents().andSelf().hasClass("selectBox-options")) {
                    return
                }
                e.hideMenus()
            }
        })
    };
    b.prototype.hideMenus = function() {
        if (a(".selectBox-dropdown-menu:visible").length === 0) {
            return
        }
        a(document).unbind("mousedown.selectBox");
        a(".selectBox-dropdown-menu").each(function() {
            var d = a(this),
                c = d.data("selectBox-select"),
                g = c.data("selectBox-control"),
                e = c.data("selectBox-settings");
            if (c.triggerHandler("beforeclose")) {
                return false
            }
            var f = function() {
                c.triggerHandler("close", {
                    _selectBox: true
                })
            };
            if (e) {
                switch (e.menuTransition) {
                    case "fade":
                        d.fadeOut(e.menuSpeed, f);
                        break;
                    case "slide":
                        d.slideUp(e.menuSpeed, f);
                        break;
                    default:
                        d.hide(e.menuSpeed, f);
                        break
                }
                if (!e.menuSpeed) {
                    f()
                }
                g.removeClass("selectBox-menuShowing")
            } else {
                a(this).hide();
                a(this).triggerHandler("close", {
                    _selectBox: true
                });
                a(this).removeClass("selectBox-menuShowing")
            }
        })
    };
    b.prototype.selectOption = function(d, j) {
        var c = a(this.selectElement);
        d = a(d);
        var k = c.data("selectBox-control"),
            h = c.data("selectBox-settings");
        if (k.hasClass("selectBox-disabled")) {
            return false
        }
        if (0 === d.length || d.hasClass("selectBox-disabled")) {
            return false
        }
        if (c.attr("multiple")) {
            if (j.shiftKey && k.data("selectBox-last-selected")) {
                d.toggleClass("selectBox-selected");
                var e;
                if (d.index() > k.data("selectBox-last-selected").index()) {
                    e = d.siblings().slice(k.data("selectBox-last-selected").index(), d.index())
                } else {
                    e = d.siblings().slice(d.index(), k.data("selectBox-last-selected").index())
                }
                e = e.not(".selectBox-optgroup, .selectBox-disabled");
                if (d.hasClass("selectBox-selected")) {
                    e.addClass("selectBox-selected")
                } else {
                    e.removeClass("selectBox-selected")
                }
            } else {
                if ((this.isMac && j.metaKey) || (!this.isMac && j.ctrlKey)) {
                    d.toggleClass("selectBox-selected")
                } else {
                    d.siblings().removeClass("selectBox-selected");
                    d.addClass("selectBox-selected")
                }
            }
        } else {
            d.siblings().removeClass("selectBox-selected");
            d.addClass("selectBox-selected")
        }
        if (k.hasClass("selectBox-dropdown")) {
            k.find(".selectBox-label").text(d.text())
        }
        var f = 0,
            g = [];
        if (c.attr("multiple")) {
            k.find(".selectBox-selected A").each(function() {
                g[f++] = a(this).attr("rel")
            })
        } else {
            g = d.find("A").attr("rel")
        }
        k.data("selectBox-last-selected", d);
        if (c.val() !== g) {
            c.val(g);
            this.setLabel();
            c.trigger("change")
        }
        return true
    };
    b.prototype.addHover = function(d) {
        d = a(d);
        var c = a(this.selectElement),
            f = c.data("selectBox-control"),
            e = f.data("selectBox-options");
        e.find(".selectBox-hover").removeClass("selectBox-hover");
        d.addClass("selectBox-hover")
    };
    b.prototype.getSelectElement = function() {
        return this.selectElement
    };
    b.prototype.removeHover = function(d) {
        d = a(d);
        var c = a(this.selectElement),
            f = c.data("selectBox-control"),
            e = f.data("selectBox-options");
        e.find(".selectBox-hover").removeClass("selectBox-hover")
    };
    b.prototype.keepOptionInView = function(e, d) {
        if (!e || e.length === 0) {
            return
        }
        var c = a(this.selectElement),
            j = c.data("selectBox-control"),
            g = j.data("selectBox-options"),
            h = j.hasClass("selectBox-dropdown") ? g : g.parent(),
            i = parseInt(e.offset().top - h.position().top),
            f = parseInt(i + e.outerHeight());
        if (d) {
            h.scrollTop(e.offset().top - h.offset().top + h.scrollTop() - (h.height() / 2))
        } else {
            if (i < 0) {
                h.scrollTop(e.offset().top - h.offset().top + h.scrollTop())
            }
            if (f > h.height()) {
                h.scrollTop((e.offset().top + e.outerHeight()) - h.offset().top + h.scrollTop() - h.height())
            }
        }
    };
    b.prototype.handleKeyDown = function(c) {
        var k = a(this.selectElement),
            g = k.data("selectBox-control"),
            l = g.data("selectBox-options"),
            e = k.data("selectBox-settings"),
            f = 0,
            h = 0;
        if (g.hasClass("selectBox-disabled")) {
            return
        }
        switch (c.keyCode) {
            case 8:
                c.preventDefault();
                this.typeSearch = "";
                break;
            case 9:
            case 27:
                this.hideMenus();
                this.removeHover();
                break;
            case 13:
                if (g.hasClass("selectBox-menuShowing")) {
                    this.selectOption(l.find("LI.selectBox-hover:first"), c);
                    if (g.hasClass("selectBox-dropdown")) {
                        this.hideMenus()
                    }
                } else {
                    this.showMenu()
                }
                break;
            case 38:
            case 37:
                c.preventDefault();
                if (g.hasClass("selectBox-menuShowing")) {
                    var d = l.find(".selectBox-hover").prev("LI");
                    f = l.find("LI:not(.selectBox-optgroup)").length;
                    h = 0;
                    while (d.length === 0 || d.hasClass("selectBox-disabled") || d.hasClass("selectBox-optgroup")) {
                        d = d.prev("LI");
                        if (d.length === 0) {
                            if (e.loopOptions) {
                                d = l.find("LI:last")
                            } else {
                                d = l.find("LI:first")
                            }
                        }
                        if (++h >= f) {
                            break
                        }
                    }
                    this.addHover(d);
                    this.selectOption(d, c);
                    this.keepOptionInView(d)
                } else {
                    this.showMenu()
                }
                break;
            case 40:
            case 39:
                c.preventDefault();
                if (g.hasClass("selectBox-menuShowing")) {
                    var j = l.find(".selectBox-hover").next("LI");
                    f = l.find("LI:not(.selectBox-optgroup)").length;
                    h = 0;
                    while (0 === j.length || j.hasClass("selectBox-disabled") || j.hasClass("selectBox-optgroup")) {
                        j = j.next("LI");
                        if (j.length === 0) {
                            if (e.loopOptions) {
                                j = l.find("LI:first")
                            } else {
                                j = l.find("LI:last")
                            }
                        }
                        if (++h >= f) {
                            break
                        }
                    }
                    this.addHover(j);
                    this.selectOption(j, c);
                    this.keepOptionInView(j)
                } else {
                    this.showMenu()
                }
                break
        }
    };
    b.prototype.handleKeyPress = function(e) {
        var c = a(this.selectElement),
            f = c.data("selectBox-control"),
            d = f.data("selectBox-options");
        if (f.hasClass("selectBox-disabled")) {
            return
        }
        switch (e.keyCode) {
            case 9:
            case 27:
            case 13:
            case 38:
            case 37:
            case 40:
            case 39:
                break;
            default:
                if (!f.hasClass("selectBox-menuShowing")) {
                    this.showMenu()
                }
                e.preventDefault();
                clearTimeout(this.typeTimer);
                this.typeSearch += String.fromCharCode(e.charCode || e.keyCode);
                d.find("A").each(function() {
                    if (a(this).text().substr(0, this.typeSearch.length).toLowerCase() === this.typeSearch.toLowerCase()) {
                        this.addHover(a(this).parent());
                        this.selectOption(a(this).parent(), e);
                        this.keepOptionInView(a(this).parent());
                        return false
                    }
                });
                this.typeTimer = setTimeout(function() {
                    this.typeSearch = ""
                }, 1000);
                break
        }
    };
    b.prototype.enable = function() {
        var c = a(this.selectElement);
        c.prop("disabled", false);
        var d = c.data("selectBox-control");
        if (!d) {
            return
        }
        d.removeClass("selectBox-disabled")
    };
    b.prototype.disable = function() {
        var c = a(this.selectElement);
        c.prop("disabled", true);
        var d = c.data("selectBox-control");
        if (!d) {
            return
        }
        d.addClass("selectBox-disabled")
    };
    b.prototype.setValue = function(f) {
        var c = a(this.selectElement);
        c.val(f);
        f = c.val();
        if (null === f) {
            f = c.children().first().val();
            c.val(f)
        }
        var g = c.data("selectBox-control");
        if (!g) {
            return
        }
        var e = c.data("selectBox-settings"),
            d = g.data("selectBox-options");
        this.setLabel();
        d.find(".selectBox-selected").removeClass("selectBox-selected");
        d.find("A").each(function() {
            if (typeof(f) === "object") {
                for (var h = 0; h < f.length; h++) {
                    if (a(this).attr("rel") == f[h]) {
                        a(this).parent().addClass("selectBox-selected")
                    }
                }
            } else {
                if (a(this).attr("rel") == f) {
                    a(this).parent().addClass("selectBox-selected")
                }
            }
        });
        if (e.change) {
            e.change.call(c)
        }
    };
    b.prototype.setOptions = function(m) {
        var l = a(this.selectElement),
            f = l.data("selectBox-control"),
            d = l.data("selectBox-settings"),
            k;
        switch (typeof(m)) {
            case "string":
                l.html(m);
                break;
            case "object":
                l.html("");
                for (var g in m) {
                    if (m[g] === null) {
                        continue
                    }
                    if (typeof(m[g]) === "object") {
                        var c = a('<optgroup label="' + g + '" />');
                        for (var e in m[g]) {
                            c.append('<option value="' + e + '">' + m[g][e] + "</option>")
                        }
                        l.append(c)
                    } else {
                        var h = a('<option value="' + g + '">' + m[g] + "</option>");
                        l.append(h)
                    }
                }
                break
        }
        if (!f) {
            return
        }
        f.data("selectBox-options").remove();
        k = f.hasClass("selectBox-dropdown") ? "dropdown" : "inline";
        m = this.getOptions(k);
        f.data("selectBox-options", m);
        switch (k) {
            case "inline":
                f.append(m);
                break;
            case "dropdown":
                this.setLabel();
                a("BODY").append(m);
                break
        }
    };
    b.prototype.disableSelection = function(c) {
        a(c).css("MozUserSelect", "none").bind("selectstart", function(d) {
            d.preventDefault()
        })
    };
    b.prototype.generateOptions = function(e, f) {
        var c = a("<li />"),
            d = a("<a />");
        c.addClass(e.attr("class"));
        c.data(e.data());
        d.attr("rel", e.val()).text(e.text());
        c.append(d);
        if (e.attr("disabled")) {
            c.addClass("selectBox-disabled")
        }
        if (e.attr("selected")) {
            c.addClass("selectBox-selected")
        }
        f.append(c)
    };
    a.extend(a.fn, {
        selectBox: function(e, c) {
            var d;
            switch (e) {
                case "control":
                    return a(this).data("selectBox-control");
                case "settings":
                    if (!c) {
                        return a(this).data("selectBox-settings")
                    }
                    a(this).each(function() {
                        a(this).data("selectBox-settings", a.extend(true, a(this).data("selectBox-settings"), c))
                    });
                    break;
                case "options":
                    if (undefined === c) {
                        return a(this).data("selectBox-control").data("selectBox-options")
                    }
                    a(this).each(function() {
                        if (d = a(this).data("selectBox")) {
                            d.setOptions(c)
                        }
                    });
                    break;
                case "value":
                    if (undefined === c) {
                        return a(this).val()
                    }
                    a(this).each(function() {
                        if (d = a(this).data("selectBox")) {
                            d.setValue(c)
                        }
                    });
                    break;
                case "refresh":
                    a(this).each(function() {
                        if (d = a(this).data("selectBox")) {
                            d.refresh()
                        }
                    });
                    break;
                case "enable":
                    a(this).each(function() {
                        if (d = a(this).data("selectBox")) {
                            d.enable(this)
                        }
                    });
                    break;
                case "disable":
                    a(this).each(function() {
                        if (d = a(this).data("selectBox")) {
                            d.disable()
                        }
                    });
                    break;
                case "destroy":
                    a(this).each(function() {
                        if (d = a(this).data("selectBox")) {
                            d.destroy();
                            a(this).data("selectBox", null)
                        }
                    });
                    break;
                case "instance":
                    return a(this).data("selectBox");
                default:
                    a(this).each(function(g, f) {
                        if (!a(f).data("selectBox")) {
                            a(f).data("selectBox", new b(f, e))
                        }
                    });
                    break
            }
            return a(this)
        }
    })
})(jQuery);
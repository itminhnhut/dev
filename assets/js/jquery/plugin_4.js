jQuery(function(a) {
    if ("undefined" == typeof wc_cart_fragments_params) return !1;
    var b;
    try {
        b = "sessionStorage" in window && null !== window.sessionStorage, window.sessionStorage.setItem("wc", "test"), window.sessionStorage.removeItem("wc")
    } catch (c) {
        b = !1
    }
    var d = {
        url: wc_cart_fragments_params.wc_ajax_url.toString().replace("%%endpoint%%", "get_refreshed_fragments"),
        type: "POST",
        success: function(c) {
            c && c.fragments && (a.each(c.fragments, function(b, c) {
                a(b).replaceWith(c)
            }), b && (sessionStorage.setItem(wc_cart_fragments_params.fragment_name, JSON.stringify(c.fragments)), sessionStorage.setItem("wc_cart_hash", c.cart_hash)), a(document.body).trigger("wc_fragments_refreshed"))
        }
    };
    if (b) {
        a(document.body).bind("added_to_cart", function(a, b, c) {
            sessionStorage.setItem(wc_cart_fragments_params.fragment_name, JSON.stringify(b)), sessionStorage.setItem("wc_cart_hash", c)
        });
        try {
            var e = a.parseJSON(sessionStorage.getItem(wc_cart_fragments_params.fragment_name)),
                f = sessionStorage.getItem("wc_cart_hash"),
                g = a.cookie("woocommerce_cart_hash");
            if ((null === f || void 0 === f || "" === f) && (f = ""), (null === g || void 0 === g || "" === g) && (g = ""), !e || !e["div.widget_shopping_cart_content"] || f !== g) throw "No fragment";
            a.each(e, function(b, c) {
                a(b).replaceWith(c)
            }), a(document.body).trigger("wc_fragments_loaded")
        } catch (c) {
            a.ajax(d)
        }
    } else a.ajax(d);
    a.cookie("woocommerce_items_in_cart") > 0 ? a(".hide_cart_widget_if_empty").closest(".widget_shopping_cart").show() : a(".hide_cart_widget_if_empty").closest(".widget_shopping_cart").hide(), a(document.body).bind("adding_to_cart", function() {
        a(".hide_cart_widget_if_empty").closest(".widget_shopping_cart").show()
    })
});
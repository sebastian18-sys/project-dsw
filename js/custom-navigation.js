(function(a) {
    var f = a(window),
        e = a(document),
        h = a(".loader"),
        i = a(".main-navbar"),
        k = a("#top-bar"),
        m = a(".search-button"),
        b = a("#close-button"),
        c = a("#closebtn"),
        g = a("#menu-button"),
        j = a("#mySidenav"),
        l = a(".overlay"),
        d = a("#colorPanel");
    f.on("load", function() { h.fadeOut("slow") });
    e.on("ready", function() { i.affix({ offset: { top: function() { return k.height() } } }) });
    e.on("ready", function() { m.click(function() { l.css("transform", "translateY(0%)") }) });
    e.on("ready", function() { b.click(function() { l.css("transform", "translateY(-120%)") }) });
    e.on("ready", function() { g.on("click", function() { j.css("transform", "translateX(0%)") }) });
    e.on("ready", function() { c.on("click", function() { j.css("transform", "translateX(120%)") }) });
    a(document).ready(function() {
        a(".landing-page-navbar a").on("click", function(n) {
            if (this.hash !== "") {
                n.preventDefault();
                var o = this.hash;
                a("html, body").animate({ scrollTop: a(o).offset().top }, 800, function() { window.location.hash = o })
            }
        })
    });
    e.on("ready", function() { d.ColorPanel({ styleSheet: "#cpswitch", colors: { "#faa61a": "css/orange.css", "#00adef": "css/lightblue.css", "#a6ce39": "css/green.css", "#e62a2b": "css/red.css", "#cc6699": "css/purple.css", "#00cc99": "css/caribbean-green.css", "#00cccc": "css/egg-blue.css", "#ff884d": "css/atomic.css", }, linkClass: "linka", animateContainer: false }) })
})(jQuery);
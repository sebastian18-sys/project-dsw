(function(a) {
    var d = a(".dpd1"),
        e = a(".dpd2"),
        f = a(".dpd3");
    var h = new Date();
    var g = new Date(h.getFullYear(), h.getMonth(), h.getDate(), 0, 0, 0, 0);
    var b = d.datepicker({ onRender: function(i) { return i.valueOf() < g.valueOf() ? "disabled" : "" } }).on("changeDate", function(i) {
        if (i.date.valueOf() > c.date.valueOf()) {
            var j = new Date(i.date);
            j.setDate(j.getDate() + 1);
            c.setValue(j)
        }
        b.hide();
        e[0].focus()
    }).data("datepicker");
    var c = e.datepicker({ onRender: function(i) { return i.valueOf() <= b.date.valueOf() ? "disabled" : "" } }).on("changeDate", function(i) { c.hide() }).data("datepicker");
    f.datepicker({ format: "dd-mm-yyyy" })
})(jQuery);
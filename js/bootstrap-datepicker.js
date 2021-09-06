! function(a) {
    var b = function(d, e) {
        this.element = a(d);
        this.format = c.parseFormat(e.format || this.element.data("date-format") || "dd/mm/yyyy");
        this.picker = a(c.template).appendTo("body").on({ click: a.proxy(this.click, this) });
        this.isInput = this.element.is("input");
        this.component = this.element.is(".date") ? this.element.find(".add-on") : false;

        if (this.isInput) {
            this.element.on({
                focus: a.proxy(this.show, this),
                keyup: a.proxy(this.update, this)
            })
        } else {
            if (this.component) {
                this.component.on("click", a.proxy(this.show, this))
            } else {
                this.element.on("click", a.proxy(this.show, this))
            }
        }
        this.minViewMode = e.minViewMode || this.element.data("date-minviewmode") || 0;
        if (typeof this.minViewMode === "string") {
            switch (this.minViewMode) {
                case "months":
                    this.minViewMode = 1;
                    break;
                case "years":
                    this.minViewMode = 2;
                    break;
                default:
                    this.minViewMode = 0;
                    break
            }
        }
        this.viewMode = e.viewMode || this.element.data("date-viewmode") || 0;
        if (typeof this.viewMode === "string") { switch (this.viewMode) {
                case "months":
                    this.viewMode = 1; break;
                case "years":
                    this.viewMode = 2; break;
                default:
                    this.viewMode = 0; break } }
        this.startViewMode = this.viewMode;
        this.weekStart = e.weekStart || this.element.data("date-weekstart") || 0;
        this.weekEnd = this.weekStart === 0 ? 6 : this.weekStart - 1;
        this.onRender = e.onRender;
        this.fillDow();
        this.fillMonths();
        this.update();
        this.showMode()
    };
    b.prototype = { constructor: b, show: function(d) { this.picker.show();
            this.height = this.component ? this.component.outerHeight() : this.element.outerHeight();
            this.place();
            a(window).on("resize", a.proxy(this.place, this)); if (d) { d.stopPropagation();
                d.preventDefault() } if (!this.isInput) {} var f = this;
            a(document).on("mousedown", function(e) { if (a(e.target).closest(".datepicker").length == 0) { f.hide() } });
            this.element.trigger({ type: "show", date: this.date }) }, hide: function() { this.picker.hide();
            a(window).off("resize", this.place);
            this.viewMode = this.startViewMode;
            this.showMode(); if (!this.isInput) { a(document).off("mousedown", this.hide) }
            this.element.trigger({ type: "hide", date: this.date }) }, set: function() { var d = c.formatDate(this.date, this.format); if (!this.isInput) { if (this.component) { this.element.find("input").prop("value", d) }
                this.element.data("date", d) } else { this.element.prop("value", d) } }, setValue: function(d) { if (typeof d === "string") { this.date = c.parseDate(d, this.format) } else { this.date = new Date(d) }
            this.set();
            this.viewDate = new Date(this.date.getFullYear(), this.date.getMonth(), 1, 0, 0, 0, 0);
            this.fill() }, place: function() { var d = this.component ? this.component.offset() : this.element.offset();
            this.picker.css({ top: d.top + this.height, left: d.left }) }, update: function(d) { this.date = c.parseDate(typeof d === "string" ? d : (this.isInput ? this.element.prop("value") : this.element.data("date")), this.format);
            this.viewDate = new Date(this.date.getFullYear(), this.date.getMonth(), 1, 0, 0, 0, 0);
            this.fill() }, fillDow: function() { var d = this.weekStart; var e = "<tr>"; while (d < this.weekStart + 7) { e += '<th class="dow">' + c.dates.daysMin[(d++) % 7] + "</th>" }
            e += "</tr>";
            this.picker.find(".datepicker-days thead").append(e) }, fillMonths: function() { var d = ""; var e = 0; while (e < 12) { d += '<span class="month">' + c.dates.monthsShort[e++] + "</span>" }
            this.picker.find(".datepicker-months td").append(d) }, fill: function() { var h = new Date(this.viewDate),
                s = h.getFullYear(),
                m = h.getMonth(),
                f = this.date.valueOf();
            this.picker.find(".datepicker-days th:eq(1)").text(c.dates.months[m] + " " + s); var q = new Date(s, m - 1, 28, 0, 0, 0, 0),
                j = c.getDaysInMonth(q.getFullYear(), q.getMonth());
            q.setDate(j);
            q.setDate(j - (q.getDay() - this.weekStart + 7) % 7); var o = new Date(q);
            o.setDate(o.getDate() + 42);
            o = o.valueOf(); var k = []; var e, r, p; while (q.valueOf() < o) { if (q.getDay() === this.weekStart) { k.push("<tr>") }
                e = this.onRender(q);
                r = q.getFullYear();
                p = q.getMonth(); if ((p < m && r === s) || r < s) { e += " old" } else { if ((p > m && r === s) || r > s) { e += " new" } } if (q.valueOf() === f) { e += " active" }
                k.push('<td class="day ' + e + '">' + q.getDate() + "</td>"); if (q.getDay() === this.weekEnd) { k.push("</tr>") }
                q.setDate(q.getDate() + 1) }
            this.picker.find(".datepicker-days tbody").empty().append(k.join("")); var g = this.date.getFullYear(); var n = this.picker.find(".datepicker-months").find("th:eq(1)").text(s).end().find("span").removeClass("active"); if (g === s) { n.eq(this.date.getMonth()).addClass("active") }
            k = "";
            s = parseInt(s / 10, 10) * 10; var t = this.picker.find(".datepicker-years").find("th:eq(1)").text(s + "-" + (s + 9)).end().find("td");
            s -= 1; for (var l = -1; l < 11; l++) { k += '<span class="year' + (l === -1 || l === 10 ? " old" : "") + (g === s ? " active" : "") + '">' + s + "</span>";
                s += 1 }
            t.html(k) }, click: function(f) { f.stopPropagation();
            f.preventDefault(); var h = a(f.target).closest("span, td, th"); if (h.length === 1) { switch (h[0].nodeName.toLowerCase()) {
                    case "th":
                        switch (h[0].className) {
                            case "switch":
                                this.showMode(1); break;
                            case "prev":
                            case "next":
                                this.viewDate["set" + c.modes[this.viewMode].navFnc].call(this.viewDate, this.viewDate["get" + c.modes[this.viewMode].navFnc].call(this.viewDate) + c.modes[this.viewMode].navStep * (h[0].className === "prev" ? -1 : 1));
                                this.fill();
                                this.set(); break } break;
                    case "span":
                        if (h.is(".month")) { var g = h.parent().find("span").index(h);
                            this.viewDate.setMonth(g) } else { var i = parseInt(h.text(), 10) || 0;
                            this.viewDate.setFullYear(i) } if (this.viewMode !== 0) { this.date = new Date(this.viewDate);
                            this.element.trigger({ type: "changeDate", date: this.date, viewMode: c.modes[this.viewMode].clsName }) }
                        this.showMode(-1);
                        this.fill();
                        this.set(); break;
                    case "td":
                        if (h.is(".day") && !h.is(".disabled")) { var d = parseInt(h.text(), 10) || 1; var g = this.viewDate.getMonth(); if (h.is(".old")) { g -= 1 } else { if (h.is(".new")) { g += 1 } } var i = this.viewDate.getFullYear();
                            this.date = new Date(i, g, d, 0, 0, 0, 0);
                            this.viewDate = new Date(i, g, Math.min(28, d), 0, 0, 0, 0);
                            this.fill();
                            this.set();
                            this.element.trigger({ type: "changeDate", date: this.date, viewMode: c.modes[this.viewMode].clsName }) } break } } }, mousedown: function(d) { d.stopPropagation();
            d.preventDefault() }, showMode: function(d) { if (d) { this.viewMode = Math.max(this.minViewMode, Math.min(2, this.viewMode + d)) }
            this.picker.find(">div").hide().filter(".datepicker-" + c.modes[this.viewMode].clsName).show() } };
    a.fn.datepicker = function(d, e) { return this.each(function() { var f = a(this),
                g = f.data("datepicker"),
                h = typeof d === "object" && d; if (!g) { f.data("datepicker", (g = new b(this, a.extend({}, a.fn.datepicker.defaults, h)))) } if (typeof d === "string") { g[d](e) } }) };
    a.fn.datepicker.defaults = { onRender: function(d) { return "" } };
    a.fn.datepicker.Constructor = b;
    var c = { modes: [{ clsName: "days", navFnc: "Month", navStep: 1 }, { clsName: "months", navFnc: "FullYear", navStep: 1 }, { clsName: "years", navFnc: "FullYear", navStep: 10 }], dates: { days: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"], daysShort: ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun"], daysMin: ["Su", "Mo", "Tu", "We", "Th", "Fr", "Sa", "Su"], months: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"], monthsShort: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"] }, isLeapYear: function(d) { return (((d % 4 === 0) && (d % 100 !== 0)) || (d % 400 === 0)) }, getDaysInMonth: function(e, d) { return [31, (c.isLeapYear(e) ? 29 : 28), 31, 30, 31, 30, 31, 31, 30, 31, 30, 31][d] }, parseFormat: function(d) { var f = d.match(/[.\/\-\s].*?/),
                e = d.split(/\W+/); if (!f || !e || e.length === 0) { throw new Error("Invalid date format.") } return { separator: f, parts: e } }, parseDate: function(e, g) { var k = e.split(g.separator),
                e = new Date(),
                l;
            e.setHours(0);
            e.setMinutes(0);
            e.setSeconds(0);
            e.setMilliseconds(0); if (k.length === g.parts.length) { var m = e.getFullYear(),
                    f = e.getDate(),
                    j = e.getMonth(); for (var h = 0, d = g.parts.length; h < d; h++) { l = parseInt(k[h], 10) || 1; switch (g.parts[h]) {
                        case "dd":
                        case "d":
                            f = l;
                            e.setDate(l); break;
                        case "mm":
                        case "m":
                            j = l - 1;
                            e.setMonth(l - 1); break;
                        case "yy":
                            m = 2000 + l;
                            e.setFullYear(2000 + l); break;
                        case "yyyy":
                            m = l;
                            e.setFullYear(l); break } }
                e = new Date(m, j, f, 0, 0, 0) } return e }, formatDate: function(e, f) { var h = { d: e.getDate(), m: e.getMonth() + 1, yy: e.getFullYear().toString().substring(2), yyyy: e.getFullYear() };
            h.dd = (h.d < 10 ? "0" : "") + h.d;
            h.mm = (h.m < 10 ? "0" : "") + h.m; var e = []; for (var g = 0, d = f.parts.length; g < d; g++) { e.push(h[f.parts[g]]) } return e.join(f.separator) }, headTemplate: '<thead><tr><th class="prev">&lsaquo;</th><th colspan="5" class="switch"></th><th class="next">&rsaquo;</th></tr></thead>', contTemplate: '<tbody><tr><td colspan="7"></td></tr></tbody>' };
    c.template = '<div class="datepicker dropdown-menu"><div class="datepicker-days"><table class=" table-condensed">' + c.headTemplate + '<tbody></tbody></table></div><div class="datepicker-months"><table class="table-condensed">' + c.headTemplate + c.contTemplate + '</table></div><div class="datepicker-years"><table class="table-condensed">' + c.headTemplate + c.contTemplate + "</table></div></div>"
}(window.jQuery);
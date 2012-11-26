(function($) {
$.fn.lavaLamp = function(o) {
    alert(12);
     o = $.extend({ fx: "linear", speed: 500, click: function(){} }, o || {});

    return this.each(function() {
        var me = $(this), noop = function(){},
            $back = $('<li class="back"><div class="imgleft"></div></li>').appendTo(me),
            $li = $("li", this), curr = $("li.current_page_item", this)[0] || $($li[0]).addClass("current_page_item")[0];

        $li.not(".back").mouseover(function(){move(this)},noop);

        $(this).hover(noop, function() {
            move(curr);
        });

        $li.click(function(e) {
            setCurr(this);
            return o.click.apply(this, [e, this]);
        });

        setCurr(curr);

        function setCurr(el) {
            $back.css({ "right": el.offsetRight+"px", "width": el.offsetWidth+"px" });
            curr = el;
        };

        function move(el) {
            $back.each(function() {
                $(this).dequeue(); }
            ).animate({
                width: el.offsetWidth,
                right: el.offsetRight
            }, o.speed, o.fx);
        };

    });
};
})(jQuery);
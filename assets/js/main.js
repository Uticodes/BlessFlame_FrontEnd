function openMenu() {
    let x = document.getElementById("mobileLinks");
    if (x.style.display === "block") {
        x.style.display = "none";
    } else {
        x.style.display = "block";
    }
    }


    function goTo(selector, timeout, cb) {
        let $el = $(selector);
        if (!$el[0]) return;
        let $par = $el.parent();
        if ($par.is("body")) $par = $("html, body");
        setTimeout(() => {
            $par.stop().animate({scrollTop: $el.offset().top}, 1000, cb && cb.call($el[0]));
        }, timeout || 0);
        }

        $("[href^='#']").on("click", function(e) {
        e.preventDefault();
        goTo($(this).attr("href"));
        });
(function ($) {
    function animateCounters() {
        $('.counter').each(function () {
            var el = $(this);
            if (el.data('done')) return;
            var target = parseInt(el.data('count'), 10);
            if (isNaN(target)) return;
            el.data('done', true);
            $({ value: 0 }).animate({ value: target }, {
                duration: 1200,
                easing: 'swing',
                step: function () {
                    el.text(Math.floor(this.value));
                },
                complete: function () {
                    el.text(target);
                }
            });
        });
    }

    function revealBlocks() {
        var observer = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-visible');
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.15 });

        document.querySelectorAll('.dashboard-reveal').forEach(function (node) {
            observer.observe(node);
        });
    }

    function bindInlineLogin() {
        $(document).on('submit', '#dashboard-inline-login', function (event) {
            event.preventDefault();
            var form = $(this);
            var verification_data = {
                username: form.find('[name=username]').val(),
                password: form.find('[name=password]').val(),
                csrftoken: form.find('[name=csrftoken]').val(),
                remember_me: form.find('[name=remember_me]').is(':checked')
            };

            Web.ajax_manager.post('/auth/login/request', verification_data, function (result) {
                if (result.status == 'pincode_required') {
                    setTimeout(function () {
                        Web.dialog_manager.create('confirm', Locale.web_fill_pincode, Locale.web_twostep, null, 'pincode', function (pincode) {
                            verification_data.pincode = pincode.toString();
                            Web.ajax_manager.post('/auth/login/request', verification_data);
                        });
                    }, 500);
                }
            });
        });
    }

    $(function () {
        animateCounters();
        bindInlineLogin();
        if ('IntersectionObserver' in window) {
            revealBlocks();
        } else {
            $('.dashboard-reveal').addClass('is-visible');
        }
    });
})(jQuery);

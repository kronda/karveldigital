<script type="text/javascript">
    (function ($) {
        var _DELTA = 80,
            event_data = <?php echo json_encode($data) ?>,
            $window = $(window),
            trigger_elements = function (elem) {
                if (elem.offset().top + _DELTA < $window.height() + $window.scrollTop() && elem.offset().top + elem.outerHeight() > $window.scrollTop() + _DELTA) {
                    elem.addClass('tve-leads-scroll-triggered');
                    ThriveGlobal.$j(TL_Front).trigger('showform.thriveleads', event_data);
                }
            };
        event_data.source = 'scroll_element';
        $(document).ready(function () {
            var _elem = $(<?php echo json_encode($selector) ?>);
            if (!_elem.length) {
                return;
            }

            $window.scroll(function() {
                if (!_elem.hasClass('tve-leads-scroll-triggered')) {
                    trigger_elements(_elem);
                }
            });
            trigger_elements(_elem);
        });
    })(ThriveGlobal.$j);
</script>
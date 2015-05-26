<script type="text/javascript">
    (function ($) {
        var event_data = <?php echo json_encode($data) ?>,
            _percent = <?php echo floatval($this->config['p'] / 100) ?>,
            $window = $(window);
        event_data.source = 'scroll_percent';
        $(document).ready(function () {
            var _triggered = false,
                $element = $("#tve_leads_end_content"),
                _check = function () {
                    if (_triggered) {
                        return;
                    }

                    var _h = $('body').height() - $window.height();

                    if($element.length) {
                        _h = $element.offset().top - $window.height();
                    }

                    if ($window.scrollTop() / _h >= _percent) {
                        ThriveGlobal.$j(TL_Front).trigger('showform.thriveleads', event_data);
                        _triggered = true;
                    }
                };
            $window.scroll(_check);
            _check();
        });
    })(ThriveGlobal.$j);
</script>
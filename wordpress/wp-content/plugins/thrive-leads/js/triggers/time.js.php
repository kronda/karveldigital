<script type="text/javascript">
    (function ($) {
        $(function () {
            var event_data = <?php echo json_encode($data) ?>,
                _ms = parseInt(<?php echo intval(1000 * $this->config['s']) ?>);
            event_data.source = 'time';
            setTimeout(function () {
                ThriveGlobal.$j(TL_Front).trigger('showform.thriveleads', event_data);
            }, _ms);
        });
    })(ThriveGlobal.$j);
</script>
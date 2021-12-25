<div class="w-full">
    <canvas data-test="<?= htmlspecialchars(json_encode($networkTraffics), ENT_QUOTES, 'UTF-8') ?>" id="myChart"
        width="100" height="50"></canvas>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="{{ asset('js/formatBytes.js') }}"></script>
    <script src="{{ asset('js/custom_chart.js') }}"></script>
</div>
<div class="w-full p-4 bg-gray-50 rounded-lg">
    <select name="days" wire:model="days" class="float-right rounded text-sm">
        <option value="1">Day</option>
        <option value="7">Week</option>
        <option value="30">Month</option>
    </select>

    <canvas data-nt="<?= htmlspecialchars(json_encode($networkTraffics), ENT_QUOTES, 'UTF-8') ?>" id="myChart"
        width="100" height="50"></canvas>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="{{ asset('js/formatBytes.js') }}"></script>
    <script src="{{ asset('js/custom_chart.js') }}"></script>
</div>

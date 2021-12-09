<div>
    <h2 class="text-xl">Utilisateurs</h2>
    <div class="overflow-hidden shadow-sm sm:rounded-lg">
        <div>
            @foreach ($users as $user)
                <livewire:dashboard-user-card :user="$user" :wire:key="$user->id" />
            @endforeach
        </div>
    </div>
</div>

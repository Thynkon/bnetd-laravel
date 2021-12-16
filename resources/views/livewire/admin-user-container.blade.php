<div>
    <h2 class="text-2xl">{{ __('Users') }}</h2>
    <div class="overflow-hidden shadow-sm sm:rounded-lg">
        <div>
            @foreach ($users as $user)
                <livewire:admin-user-card :user="$user" :wire:key="$user->id" />
            @endforeach
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
    <div class="bg-green-200 p-2 mb-4">
        <strong>{{ $message }}</strong>
    </div>
@endif


@if ($message = Session::get('error'))
    <div class="bg-red-200 text-center py-4 lg:px-4 mb-4 p-2">
        <div class="p-2 bg-indigo-800 items-center text-indigo-100 leading-none lg:rounded-full flex lg:inline-flex"
            role="alert">
            <span class="flex rounded-full bg-indigo-500 uppercase px-2 py-1 text-xs font-bold mr-3">New</span>
            <span class="font-semibold mr-2 text-left flex-auto">{{ $message }}</span>
            <svg class="fill-current opacity-75 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                <path d="M12.95 10.707l.707-.707L8 4.343 6.586 5.757 10.828 10l-4.242 4.243L8 15.657l4.95-4.95z" />
            </svg>
        </div>
    </div>
@endif


@if ($message = Session::get('warning'))
    <div class="bg-red-200 p-2 mb-4">
        <strong>{{ $message }}</strong>
    </div>
@endif


@if ($message = Session::get('info'))
    <div class="bg-red-200 p-2 mb-4">
        <strong>{{ $message }}</strong>
    </div>
@endif


@if ($errors->any())
    <div class="text-center py-4 lg:px-4">
        @foreach ($errors->all() as $error)
            <div class="p-2 mx-2 bg-red-200 items-center text-indigo-100 leading-none lg:rounded-full flex lg:inline-flex"
                role="alert">
                <a class="flex rounded-full bg-indigo-500 uppercase px-2 py-1 text-xs font-bold mr-3 close" href="#">
				  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
				  </svg>
				</a>
                <span class="font-semibold mr-2 text-left flex-auto">{{ $error }}</span>
            </div>
        @endforeach
    </div>
@endif

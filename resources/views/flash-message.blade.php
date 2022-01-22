@if ($message = Session::get('success'))
    <div class="bg-green-200 p-2 mb-4">
        <strong>{{ $message }}</strong>
    </div>
@endif


@if ($message = Session::get('error'))
    <div class="text-center py-4 lg:px-4 flex justify-center">
        <div class="p-2 mx-2 bg-gray-50 items-center leading-none lg:rounded-full flex lg:inline-flex"
            role="alert">
            <a class="flex rounded-full bg-gray-800 px-2 py-1 text-white text-xs font-bold mr-3 close" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </a>
            <span class="font-semibold mr-2 text-left flex-auto">{{ $message }}</span>
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
    <div class="text-center py-4 lg:px-4 flex justify-content">
        @foreach ($errors->all() as $error)
            <div class="text-center py-4 lg:px-4">
                <div class="p-2 mx-2 bg-gray-50 items-center leading-none lg:rounded-full flex lg:inline-flex"
                    role="alert">
                    <a class="flex rounded-full bg-gray-800 px-2 py-1 text-white text-xs font-bold mr-3 close" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </a>
                    <span class="font-semibold mr-2 text-left flex-auto">{{ $error }}</span>
                </div>
            </div>
        @endforeach
    </div>
@endif

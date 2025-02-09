
@props(['isDanger' => false,'isDisabled'=>false])
<div class="flex justify-center p-4">
    <form method="GET" action="" class="w-full max-w-md">
        <div class="relative d-flex flex-row w-[35vw]">
            <!-- Search input field -->
            <input
                type="text"
                name="query"
                placeholder="Search..."
                class="w-[35vw] px-4 py-2 text-gray-700 bg-white border rounded-2xl shadow focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:border-transparent disabled:opacity-50 {{ $isDanger ? 'border-red-500 text-red-500' : 'border-gray-300' }}"
                {{ $isDisabled ? 'disabled' : '' }}
                value="{{ request('query') }}"
            >

            <!-- Search button -->
            <button
                type="submit"
                class="absolute inset-y-0 right-[-15px] flex items-center pr-3 text-indigo-500 hover:text-indigo-700 focus:outline-none"
                {{ $isDisabled ? 'disabled' : '' }}
            >
                <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect width="36" height="36" rx="8" fill="currentColor"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M16.6535 10.7122C15.572 10.7901 14.5247 11.1255 13.5992 11.6904C12.6736 12.2553 11.8966 13.0333 11.3329 13.9596C10.7692 14.8859 10.4352 15.9336 10.3588 17.0152C10.2823 18.0968 10.4657 19.1811 10.8935 20.1774C11.3213 21.1738 11.9811 22.0534 12.818 22.7429C13.6549 23.4324 14.6445 23.9117 15.7044 24.141C16.7642 24.3702 17.8635 24.3426 18.9105 24.0606C19.9575 23.7786 20.9219 23.2503 21.7232 22.5197L24.8468 25.2242C25.0078 25.3588 25.2151 25.4247 25.4242 25.4078C25.6333 25.391 25.8274 25.2926 25.9647 25.1341C26.102 24.9755 26.1715 24.7693 26.1583 24.56C26.1451 24.3506 26.0501 24.1548 25.894 24.0148L22.7703 21.3103C23.4867 20.2535 23.8912 19.0163 23.9373 17.7404C23.9834 16.4644 23.6694 15.2013 23.0312 14.0955C22.393 12.9897 21.4563 12.0859 20.3284 11.4876C19.2005 10.8892 17.927 10.6205 16.6535 10.7122ZM11.9547 17.8677C11.8558 16.4921 12.3073 15.1336 13.21 14.091C14.1128 13.0483 15.3927 12.407 16.7683 12.3081C18.1438 12.2091 19.5024 12.6607 20.545 13.5634C21.5876 14.4661 22.229 15.7461 22.3279 17.1216C22.4268 18.4972 21.9753 19.8558 21.0725 20.8984C20.1698 21.941 18.8899 22.5823 17.5143 22.6813C16.1387 22.7802 14.7802 22.3286 13.7376 21.4259C12.6949 20.5232 12.0536 19.2433 11.9547 17.8677Z" fill="white"/>
                    </svg>

            </button>
        </div>

        @if ($isDanger)
            <p class="mt-2 text-sm text-red-500">Please enter a valid search term.</p>
        @endif
    </form>
</div>

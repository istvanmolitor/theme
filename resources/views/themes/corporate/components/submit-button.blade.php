<button {{ $attributes->merge(['type' => 'submit', 'class' => 'bg-blue-800 hover:bg-blue-900 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline w-full transition duration-150 ease-in-out']) }}>
    {{ $slot }}
</button>

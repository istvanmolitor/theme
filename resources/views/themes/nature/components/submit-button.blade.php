<button {{ $attributes->merge(['type' => 'submit', 'class' => 'bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline w-full transition duration-150 ease-in-out']) }}>
    {{ $slot }}
</button>

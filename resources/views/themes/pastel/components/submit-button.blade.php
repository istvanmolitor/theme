<button {{ $attributes->merge(['type' => 'submit', 'class' => 'bg-pink-400 hover:bg-pink-500 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline w-full transition duration-150 ease-in-out']) }}>
    {{ $slot }} Pastel
</button>

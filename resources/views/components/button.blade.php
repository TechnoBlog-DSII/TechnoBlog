<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center centrado px-4 py-4 bg-gray-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-400 focus:bg-gray-700 active:bg-cyan-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
<style>
    .centrado {
      display: flex;
      justify-content: center;
    }
  </style>
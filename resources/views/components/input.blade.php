<div>
    <label
        for="{{ $name }}"
        class="block mb-2 text-sm font-medium text-gray-900"
    >{{ $label }}</label>
    <input
        type="{{ $type }}"
        id="{{ $name }}"
        name="{{ $name }}"
        value="{{ $value ?? "" }}"
        class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-4 focus:outline-none focus:ring-[#A5D6A7] block w-full p-2.5 outline-none"
        placeholder="{{ $placeholder }}"
        required
    />
</div>

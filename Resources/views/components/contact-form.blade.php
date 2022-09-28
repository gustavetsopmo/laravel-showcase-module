<div>
    <form method="post">
        @csrf
        <x-input-label-required for='title'>Votre nom</x-input-label-required>
        <div class="mb-6">
            <x-text-input type="text" value="" class="w-full rounded md:py-3 md:px-[14px] " />
            <x-input-error for='name' class="mt-2" />
        </div>
        <x-input-label-required for='phone'>Numéro de téléphone</x-input-label-required>
        <div class="mb-6">
            <x-text-input type="tel" class="w-full rounded md:py-3 md:px-[14px]" />
            <x-input-error for='phone' class="mt-2" />
        </div>
        <x-input-label-optionale for='email'>Adresse E-mail</x-input-label-optionale>
        <div class="mb-6">
            <x-text-input type="email" value="" class="w-full rounded md:py-3 md:px-[14px]" />
            <x-input-error for='email' class="mt-2" />
        </div>
        <x-input-label-required for='message'>Votre méssage</x-input-label-required>
        <div class="mb-6">
            <textarea rows={4}
                class="w-full border-gray-300 focus:border-sky-300 focus:ring focus:ring-sky-200 focus:ring-opacity-50 rounded-md shadow-sm "></textarea>
            <x-input-error for={errors.content} class="mt-2" />
        </div>
        <div>
            <x-showcase::button type="button" {{-- disabled={loading} --}} class="w-full md:p-3 justify-center">
                Envoyer le Méssage
            </x-showcase::button>
        </div>
    </form>
</div>

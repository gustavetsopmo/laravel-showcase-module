<div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto"
    id="contactModalCenter" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="contactModalCenterTitle" aria-modal="true" role="dialog">
    <div class="modal-dialog modal-lg modal-dialog-centered relative w-auto pointer-events-none">
        <div
            class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
            <div
                class="modal-header flex flex-shrink-0 items-start justify-between p-4 border-b border-gray-200 rounded-t-md">
                <div>

                    <h5 class="text-center mb-3 custom-title text-4xl">
                        <strong>Laissez-nous un méssage</strong>
                        <div class="light-bar mt-4 mx-auto"></div>
                    </h5>
                    <p class="mb-3">Nous vous répondrons dans de bref delais.</p>
                </div>
                <button type="button" title="Fermer"
                    class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
                    data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4 relative">
                <x-showcase::contact-form />
            </div>
            {{-- <div
                class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end p-4 border-t border-gray-200 rounded-b-md">
                <button type="button"
                    class="inline-block px-6 py-2.5 bg-purple-600 text-gray-400 font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-purple-700 hover:shadow-lg focus:bg-purple-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-purple-800 active:shadow-lg transition duration-150 ease-in-out"
                    data-bs-dismiss="modal">
                    Annuler
                </button>
            </div> --}}
        </div>
    </div>
</div>

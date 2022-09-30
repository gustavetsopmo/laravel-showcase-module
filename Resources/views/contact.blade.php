@extends('showcase::layouts.master')
@section('title', 'Contact')
@php
$items = [
    [
        'title' => 'Téléphone',
        'icon' => 'assets/contact-icons/call.svg',
        'description' => "Quelque soit votre besoin, <strong>Figuil Corporation</strong> est
        joignable par téléphone 24H/24, n’hesitez surtout pas, nous serons très
        ravis de discuter avec vous.",
        'link' => "<a class='text-sky-500 font-bold my-4' href='tel:+237595705725'>+237 695 705 725 </a>",
    ],
    [
        'title' => 'E-mail',
        'icon' => 'assets/contact-icons/mail.svg',
        'description' => 'Vous pouvez nous écrire à notre adresse email ci-dessous. Nous nous ferons un plaisir de vous répondre promptement.',
        'link' => "<a class='text-sky-500 font-bold my-4' href='#laisser-un-message'>contact@figuil.com</a>",
    ],
    [
        'title' => 'Localisation',
        'icon' => 'assets/contact-icons/location.svg',
        'description' => "Notre local se trouve à Nkomo, Yaoundé, En face de l'agence Camtel (Blue) Nkomo.",
        'link' => "<button class='text-sky-500 font-bold my-4'>Voir sur la map</button>",
    ],
];
@endphp

@section('content')

    <section class="section relative overflow-hidden">
        <div class="absolute z-[1] w-[15%] h-[80%] bottom-40 -left-40 sky-gradient"></div>
        <div class="absolute z-[0] w-[10%] h-[20%] -left-0 bottom-20 opacity-50 blue-gradient"></div>
        <div class="bg-[url({{asset('/assets/small-design.png')}})] bg-no-repeat bg-right absolute opacity-25 -right-20 inset-0 z-0">
        </div>
        <div class="padding-y max-w-7xl padding-x mx-auto relative">
            <div class="flex flex-col items-center">
                <h1 class="text-center custom-title px-3">
                    <strong>Nos contacts</strong>
                </h1>
                <p class="lg:w-2/3 text-center px-3 w-full md:w-3/5 mx-auto leading-relaxed text-md text-gray-700 text-p">
                    Nous sommes disponible pour vous de Lundi à Samedi de 08H00 à
                    17H00
                </p>
                <div class="blue-bar mt-3"></div>

                <div
                    class="flex mt-4 md:mt-12 flex-wrap flex-col md:gap-x-6 md:grid md:grid-cols-3 justify-between md:flex-row">
                    @forelse ($items as $item)
                        <x-showcase::animated-card class="flex flex-col items-center" :title="$item['title']" :description="$item['description']">
                            <x-slot:link>
                                {!! $item['link'] !!}
                            </x-slot:link>
                            <div class="text-center">
                                <x-slot:svgIcon class="flex justify-center">
                                    {{ $item['icon'] }}
                                </x-slot:svgIcon>
                            </div>
                        </x-showcase::animated-card>
                    @empty
                    @endforelse
                </div>
            </div>
        </div>
    </section>

    <section id="laisser-un-message" class="bg-light-gradient section padding-x relative">
        <div class="flex flex-col items-center">
            <h1 class="text-center mb-6 custom-title">
                <strong>Laissez-nous un méssage</strong>
                <div class="light-bar mt-4 mx-auto"></div>
            </h1>
        </div>
        <div class="max-w-4xl lg:max-w-2xl mx-auto py-6 flex justify-center items-center z-0">
            <div class="md:bg-white relative w-full md:w-[93%] rounded-lg p-2 sm:p-10 md:p-12 md:shadow-lg">
                <x-showcase::contact-form redirect={true} />
            </div>
        </div>
        <div class="absolute z-[1] w-[20%] h-[20%] bottom-40 opacity-30 -right-10 sky-gradient"></div>
        <div class="absolute z-[0] w-[10%] h-[10%] -right-10 bottom-20 opacity-50 sky-gradient"></div>
    </section>

    {{-- <section id="faq" class="max-w-7xl mx-auto bg-white section relative">
        <div class="bg-[url({{asset('/assets/small-design.png')}})] bg-no-repeat bg-left absolute opacity-25 inset-0 z-0"></div>
        <div class="flex flex-col items-center relative z-1">
            <h1 class="text-center custom-title">
                <strong>Question Fréquentes</strong>
                <div class="blue-bar mt-4 mx-auto"></div>
            </h1>
        </div>
    </section> --}}

@endsection

@extends('_layouts.master')

@section('body')
<section class="container max-w-2xl mx-auto px-6 py-10 md:py-12">
    <div class="flex flex-col-reverse mb-10 lg:flex-row lg:mb-24">
        <div class="mt-8">
            <h1 id="intro-docs-template">{{ $page->siteName }}</h1>

            <h2 id="intro-powered-by-jigsaw" class="font-light mt-4">{{ $page->siteDescription }}</h2>

            <p class="text-lg">
                Start using credit cards the right way - to get free travel. <br class="hidden sm:block">
                Leverage the loopholes to see the world.</p>

            <div class="flex my-10">
                <a href="/docs/getting-started" title="{{ $page->siteName }} getting started" class="bg-blue hover:bg-blue-dark font-normal text-white hover:text-white rounded mr-4 py-2 px-6">Get Started</a>

                <a href="https://cardhacking.com" title="CardHacking.com" class="bg-grey-light hover:bg-grey-dark text-blue-darkest font-normal hover:text-white rounded py-2 px-6">About CardHacking.com</a>
            </div>
        </div>

        <img src="/assets/img/logo-large.svg" alt="{{ $page->siteName }} large logo" class="mx-auto mb-6 lg:mb-0 ">
    </div>

    <hr class="block my-8 border lg:hidden">

    <div class="md:flex -mx-2 -mx-4">
        <div class="mb-8 mx-3 px-2 md:w-1/3">
            <img src="/assets/img/icon-window.svg" class="h-12 w-12" alt="window icon">

            <h3 id="intro-laravel" class="text-2xl text-blue-darkest mb-0">A Simple Guide on <br>using credit cards properly</h3>

            <p>
                Credit cards, if used properly, can be used to travel the world. Learn how to do
                it the right way, actually bettering your credit scores over time.
            </p>
        </div>

        <div class="mb-8 mx-3 px-2 md:w-1/3">
            <img src="/assets/img/icon-terminal.svg" class="h-12 w-12" alt="terminal icon">

            <h3 id="intro-markdown" class="text-2xl text-blue-darkest mb-0">Get Started and <br>know what to do next </h3>

            <p>
                Get started quickly and easily. Once you see how easy it is to travel for free,
                it's hard not to see why so many people do this, but keep it a secret.
            </p>
        </div>

        <div class="mx-3 px-2 md:w-1/3">
            <img src="/assets/img/icon-stack.svg" class="h-12 w-12" alt="stack icon">

            <h3 id="intro-mix" class="text-2xl text-blue-darkest mb-0">Stack your Knowledge <br>using great resources </h3>

            <p>
                We'll teach you which tools (many free) to use and give you tips on how and when
                to keep, cancel, or negotiate for even more loyalty miles and points.
            </p>
        </div>
    </div>
</section>
@endsection

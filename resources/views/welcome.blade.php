<x-layout>
    <div class="space-y-6 text-center mb-10">
        <div>
            <h1 class="text-[5.5rem] font-bold uppercase leading-none">Dall-E</h1>
            <p class="uppercase font['Red Hat Display'] tracking-[7px]">Powered by Open AI</p>
        </div>

        <h3 class="text-3xl font-semibold">Empower Your Creativity with Dall-E Free</h3>
        <p class="max-w-xl mx-auto font-medium text-base">
            Bring your ideas to life with Dall-E Free. Think of a textual prompt and
            convert it into visual images for your dream project
        </p>
    </div>

    <form action="/generate" method="POST">
        @csrf
        <div class="flex items-center space-x-3">
            <input
                type="text"
                name="prompt"
                placeholder="Enter prompt to generate image"
                class="border rounded-full py-3 px-4 placeholder:text-gray-400 focus:outline-none flex-1 shadow"
            />
            <button type="submit" class="btn-primary" id="generate-img">Generate</button>
        </div>
    </form>

    <section class="my-16">
        @if(session()->has('images'))
            <div class="grid grid-cols-3 gap-3">
                @foreach(session('images') as $image)
                    <a>
                        <img src="{{$image}}" alt="" class="rounded">
                    </a>
                @endforeach
            </div>
        @endif
    </section>
</x-layout>

<x-guest-layout>

    <div class="container">
        <!--Hero Section-->
        <div>
            <form action="" class="mt-20">
                <div class="w-full relative max-w-[860px] mx-auto px-5 pb-[138px] pt-24">
                    <div class="w-full mx-auto flex flex-col items-center justify-center">
                    <h1 class="text-center w-full mx-auto heading-primary mb-3"> The best Courses and Books on the <span class="text-orange">Laravel</span> ecosystem </h1>
                    <p class="text-secoundery-color w-full text-lg text-center my-4 mb-10"> Find the right books and courses on the Laravel framework and related topics to suite your level of expertise. Know how good a course is through your peers review and share your own too. </p>

                    <!--Search Form-->
                    <div class="flex w-[700px] gap-x-6">
                        <input type="search" name="keyword" placeholder="Enter keywords to search courses" class="w-4/5 bg-white h-12 border input-focus border-orange rounded-lg px-3.5 outline-none" required>
                        <button type="submit" class="btn-primary w-1/5 text-white"> Search </button>
                    </div>
                    </div>
                    <!--hero icon-->
                    <img src="https://laravel-courses.com/img/left-top-angle.png" alt="angle" class="absolute pointer-events-none top-[150px] -left-28">
                    <img src="https://laravel-courses.com/img/left-bottom-angle.png" alt="angle" class="absolute  pointer-events-none top-[370px] -left-12">
                    <img src="https://laravel-courses.com/img/right-angle.png" alt="angle" class="absolute pointer-events-none top-[70px] -right-6">
                    <img src="https://laravel-courses.com/img/right-bottom-angle.png" alt="angle" class="absolute   pointer-events-none top-[360px] -right-24">
            </div>
            </form>
            <img src="https://laravel-courses.com/img/right-center-angle.png" alt="angle" class="w-auto h-auto object-contain absolute top-1/2 -translate-y-1/2 right-10 pointer-events-none">
        </div>



        <!--Brand Logo Section-->
        <div>
            <ul class="flex items-center flex-nowrap justify-between gap-y-7 gap-3">
                @foreach ($series as $item)
                <li class="w-full lg:max-w-[165px]">
                <a href="#" class="bg-white border mx-auto border-orange box-shadow w-full rounded-lg flex items-center justify-center">
                    <img src="{{ $item->image }}" alt="{{ $item->name }}" class="w-20 md:w-auto h-auto object-contain">
                </a>
                </li>
                @endforeach
                {{-- <li class="w-full lg:max-w-[165px]">
                <a href="#" class="bg-white border mx-auto border-orange box-shadow w-full h-12 md:h-16 rounded-lg flex items-center justify-center">
                    <img src="https://laravel-courses.com/storage/series/c9cb9b3c-4d8c-4df6-a7b7-54047ce907ad.png" alt="PHP" class="w-20 md:w-auto h-auto object-contain">
                </a>
                </li>
                <li class="w-full lg:max-w-[165px]">
                <a href="#" class="bg-white border mx-auto border-orange box-shadow w-full h-12 md:h-16 rounded-lg flex items-center justify-center">
                    <img src="https://laravel-courses.com/storage/series/4dfa5245-e2fc-4dfe-88c9-5f001a180da6.png" alt="Livewire" class="w-20 md:w-auto h-auto object-contain">
                </a>
                </li>
                <li class="w-full lg:max-w-[165px]">
                <a href="#" class="bg-white border mx-auto border-orange box-shadow w-full h-12 md:h-16 rounded-lg flex items-center justify-center">
                    <img src="https://laravel-courses.com/storage/series/7d2e33b5-fcd0-4227-bce6-aa49b976bd7c.png" alt="Vue.js" class="w-20 md:w-auto h-auto object-contain">
                </a>
                </li>
                <li class="w-full lg:max-w-[165px]">
                <a href="#" class="bg-white border mx-auto border-orange box-shadow w-full h-12 md:h-16 rounded-lg flex items-center justify-center">
                    <img src="https://laravel-courses.com/storage/series/fe7d56b4-906c-4970-8c69-25956acb3988.png" alt="Alpine.js" class="w-20 md:w-auto h-auto object-contain">
                </a>
                </li>
                <li class="w-full lg:max-w-[165px]">
                <a href="#" class="bg-white border mx-auto border-orange box-shadow w-full h-12 md:h-16 rounded-lg flex items-center justify-center">
                    <img src="https://laravel-courses.com/storage/series/e63d6d09-4af0-4a6d-9cee-2daf537afcc8.png" alt="Tailwind CSS" class="w-20 md:w-auto h-auto object-contain">
                </a>
                </li> --}}
            </ul>
        </div>

        <!--Feature Section-->
        <section class="mt-20 lg:mt-[140px]">
        <h1 class="heading-tertiory text-center mb-10 md:mb-16"> Featured Courses </h1>
        <div class="max-w-7xl w-full inline-flex single-feature gap-10 flex-wrap mx-auto">
            @foreach ($courses as $course)
                @include('components.course-box', ['course', $course])
            @endforeach



            {{-- <div class="bg-white rounded overflow-hidden shadow-card">
            <a href="single.html">
                <img srcset="https://laravel-courses.com/storage/courses/4d3d4fca-a33c-40c7-ba2d-4e23db49a0ec.png 2000w, https://laravel-courses.com/storage/courses/fe693edb-b8b8-4aa4-8818-3d9a97f76c9b.png 1200w, https://laravel-courses.com/storage/courses/18909833-0342-4597-b903-c4b017e1760f.png 400w" sizes="(max-width: 600px) 400px, (max-width: 1200px) 1200px, 2000px" src="https://laravel-courses.com/storage/courses/fe693edb-b8b8-4aa4-8818-3d9a97f76c9b.png" alt="Mastering Laravel Validation Rules" class="w-full h-auto object-contain">
            </a>
            <div class="px-6 pb-5">
                <div class="mt-7 flex justify-between items-center gap-4 mb-4">
                <a href="single.html" class="text-lg-primary w-full hover:underline">Mastering Laravel Validation Rules</a>
                </div>
                <div>
                <div class="flex items-center mb-2">
                    <div class="flex items-center">
                    <img src="https://laravel-courses.com/storage/thumbnails/default/8z/p1/nkwmbcw08s04s000cwkg0.png?p=authors%2F8a21d7d4-58c7-47f6-993f-72fafc671030.png&amp;s=pd&amp;smartcrop=28x28" alt="Joel Clermont" class="w-7 h-7 object-contain flex shrink-0 rounded-full">
                    <img src="https://laravel-courses.com/storage/thumbnails/default/1t/gg/pmh7dmas0co0wow4gksok.png?p=authors%2F106fdb67-5829-4f02-9017-a454d8f2d376.png&amp;s=pd&amp;smartcrop=28x28" alt="Aaron Saray" class="w-7 h-7 object-contain border border-white rounded-full -translate-x-2 flex shrink-0">
                    </div>
                    <h4 class="text-sm-primary w-full leading-5 ml-2"> Joel Clermont &amp; Aaron Saray </h4>
                </div>
                <div class="mt-3">
                    <div class="flex items-center gap-3 mt-6">
                    <p class="text-sm-primary bg-accent-100 py-1.5 px-1.5 rounded-[3px] flex items-center gap-1.5 w-max">
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="13" fill="none">
                        <path fill="#464646" d="M14.063 12.188h-3.75V0h3.75v12.188Zm-2.813-.938h1.875V.937H11.25V11.25Zm-1.875.938h-3.75V3.75h3.75v8.438Zm-2.813-.938h1.875V4.687H6.563v6.563Zm-1.875.938H.938V6.561h3.75v5.625Zm-2.812-.938H3.75V7.5H1.875v3.75Z"></path>
                        </svg> Beginner
                    </p>
                    </div>
                </div>
                </div>
            </div>
            </div>
            <div class="bg-white rounded overflow-hidden shadow-card">
            <a href="single.html">
                <img srcset="https://laravel-courses.com/storage/courses/73432585-1a11-4144-8117-0b171506d9b3.png 2000w, https://laravel-courses.com/storage/courses/392a17fb-7b83-4663-a75f-82bcb0a23519.png 1200w, https://laravel-courses.com/storage/courses/c865ccb8-6953-492f-aaa8-01a4c77bd504.png 400w" sizes="(max-width: 600px) 400px, (max-width: 1200px) 1200px, 2000px" src="https://laravel-courses.com/storage/courses/392a17fb-7b83-4663-a75f-82bcb0a23519.png" alt="Testing Laravel" class="w-full h-auto object-contain">
            </a>
            <div class="px-6 pb-5">
                <div class="mt-7 flex justify-between items-center gap-4 mb-4">
                <a href="single.html" class="text-lg-primary w-full hover:underline">Testing Laravel</a>
                </div>
                <div>
                <div class="flex items-center mb-2">
                    <div class="flex items-center">
                    <img src="https://laravel-courses.com/storage/thumbnails/default/3n/cl/gvpzjn40os4ssc8080088.png?p=authors%2F5eb9fd04-7c8d-4f04-8946-b09ad0a8750a.png&amp;s=pd&amp;smartcrop=28x28" alt="Brent Roose" class="w-7 h-7 object-contain flex shrink-0 rounded-full">
                    <img src="https://laravel-courses.com/storage/thumbnails/default/dw/6b/ce76mg8owkockcco8ww4k.png?p=authors%2F04ff15e2-69b1-4110-a7a8-0ec15616abaf.png&amp;s=pd&amp;smartcrop=28x28" alt="Freek Van der Herten" class="w-7 h-7 object-contain border border-white rounded-full -translate-x-2 flex shrink-0">
                    </div>
                    <h4 class="text-sm-primary w-full leading-5 ml-2"> Brent Roose &amp; Freek Van der Herten </h4>
                </div>
                <div class="mt-3">
                    <div class="flex items-center gap-3 mt-6">
                    <p class="text-sm-primary bg-parrot-100 py-1.5 px-1.5 rounded-[3px] flex items-center gap-1.5 w-max">
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="none">
                        <path fill="#464646" d="M7.493 0A7.08 7.08 0 0 0 .417 7.083a7.08 7.08 0 0 0 7.076 7.084 7.088 7.088 0 0 0 7.09-7.084A7.087 7.087 0 0 0 7.493 0ZM7.5 12.75a5.665 5.665 0 0 1-5.667-5.667A5.665 5.665 0 0 1 7.5 1.417a5.665 5.665 0 0 1 5.667 5.666A5.665 5.665 0 0 1 7.5 12.75Zm-.156-9.208h-.042a.508.508 0 0 0-.51.51v3.343c0 .248.127.482.347.61l2.94 1.763a.505.505 0 0 0 .763-.358.502.502 0 0 0-.247-.513l-2.74-1.63V4.053a.508.508 0 0 0-.51-.51Z"></path>
                        </svg> 06 h 00 min
                    </p>
                    <p class="text-sm-primary bg-accent-100 py-1.5 px-1.5 rounded-[3px] flex items-center gap-1.5 w-max">
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="13" fill="none">
                        <path fill="#464646" d="M14.063 12.188h-3.75V0h3.75v12.188Zm-2.813-.938h1.875V.937H11.25V11.25Zm-1.875.938h-3.75V3.75h3.75v8.438Zm-2.813-.938h1.875V4.687H6.563v6.563Zm-1.875.938H.938V6.561h3.75v5.625Zm-2.812-.938H3.75V7.5H1.875v3.75Z"></path>
                        </svg> Intermediate
                    </p>
                    </div>
                </div>
                </div>
            </div>
            </div>
            <div class="bg-white rounded overflow-hidden shadow-card">
            <a href="single.html">
                <img srcset="https://laravel-courses.com/storage/courses/09fac06d-eb12-4828-8003-25e0e1c3bdd5.png 2000w, https://laravel-courses.com/storage/courses/c9c5fd6f-1705-410d-bb4b-66cd64a9d5ed.png 1200w, https://laravel-courses.com/storage/courses/2d68add9-163b-48f6-b3d1-88774ab7ed27.png 400w" sizes="(max-width: 600px) 400px, (max-width: 1200px) 1200px, 2000px" src="https://laravel-courses.com/storage/courses/c9c5fd6f-1705-410d-bb4b-66cd64a9d5ed.png" alt="PHP For Beginners" class="w-full h-auto object-contain">
            </a>
            <div class="px-6 pb-5">
                <div class="mt-7 flex justify-between items-center gap-4 mb-4">
                <a href="single.html" class="text-lg-primary w-full hover:underline">PHP For Beginners</a>
                </div>
                <div>
                <div class="flex items-center mb-2">
                    <div class="flex items-center">
                    <img src="https://laravel-courses.com/storage/thumbnails/default/4s/4g/qb05vxus40ogocsw4sk88.png?p=authors%2Fd60f2e38-05f7-4608-b129-2ab901941771.png&amp;s=pd&amp;smartcrop=28x28" alt="Jeffrey Way" class="w-7 h-7 object-contain flex shrink-0 rounded-full">
                    </div>
                    <h4 class="text-sm-primary w-full leading-5 ml-2"> Jeffrey Way </h4>
                </div>
                <div class="mt-3">
                    <div class="flex items-center gap-3 mt-6">
                    <p class="text-sm-primary bg-parrot-100 py-1.5 px-1.5 rounded-[3px] flex items-center gap-1.5 w-max">
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="none">
                        <path fill="#464646" d="M7.493 0A7.08 7.08 0 0 0 .417 7.083a7.08 7.08 0 0 0 7.076 7.084 7.088 7.088 0 0 0 7.09-7.084A7.087 7.087 0 0 0 7.493 0ZM7.5 12.75a5.665 5.665 0 0 1-5.667-5.667A5.665 5.665 0 0 1 7.5 1.417a5.665 5.665 0 0 1 5.667 5.666A5.665 5.665 0 0 1 7.5 12.75Zm-.156-9.208h-.042a.508.508 0 0 0-.51.51v3.343c0 .248.127.482.347.61l2.94 1.763a.505.505 0 0 0 .763-.358.502.502 0 0 0-.247-.513l-2.74-1.63V4.053a.508.508 0 0 0-.51-.51Z"></path>
                        </svg> 04 h 05 min
                    </p>
                    <p class="text-sm-primary bg-accent-100 py-1.5 px-1.5 rounded-[3px] flex items-center gap-1.5 w-max">
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="13" fill="none">
                        <path fill="#464646" d="M14.063 12.188h-3.75V0h3.75v12.188Zm-2.813-.938h1.875V.937H11.25V11.25Zm-1.875.938h-3.75V3.75h3.75v8.438Zm-2.813-.938h1.875V4.687H6.563v6.563Zm-1.875.938H.938V6.561h3.75v5.625Zm-2.812-.938H3.75V7.5H1.875v3.75Z"></path>
                        </svg> Beginner
                    </p>
                    </div>
                </div>
                </div>
            </div>
            </div>
            <div class="bg-white rounded overflow-hidden shadow-card">
            <a href="single.html">
                <img srcset="https://laravel-courses.com/storage/courses/82ec52d4-7898-4d82-9b72-995ed0fcdb06.png 2000w, https://laravel-courses.com/storage/courses/4f69da91-87df-4bdf-b299-11889167dc72.png 1200w, https://laravel-courses.com/storage/courses/feec4eaf-6de2-41e8-bb82-13b5a9c36ad6.png 400w" sizes="(max-width: 600px) 400px, (max-width: 1200px) 1200px, 2000px" src="https://laravel-courses.com/storage/courses/4f69da91-87df-4bdf-b299-11889167dc72.png" alt="Writing Readable PHP" class="w-full h-auto object-contain">
            </a>
            <div class="px-6 pb-5">
                <div class="mt-7 flex justify-between items-center gap-4 mb-4">
                <a href="single.html" class="text-lg-primary w-full hover:underline">Writing Readable PHP</a>
                </div>
                <div>
                <div class="flex items-center mb-2">
                    <div class="flex items-center">
                    <img src="https://laravel-courses.com/storage/thumbnails/default/56/tp/g7t7058gcgwk00s48cwww.png?p=authors%2Fa489f89a-4866-4c10-961f-5fa6526d9709.png&amp;s=pd&amp;smartcrop=28x28" alt="Christoph Rumpel" class="w-7 h-7 object-contain flex shrink-0 rounded-full">
                    <img src="https://laravel-courses.com/storage/thumbnails/default/dw/6b/ce76mg8owkockcco8ww4k.png?p=authors%2F04ff15e2-69b1-4110-a7a8-0ec15616abaf.png&amp;s=pd&amp;smartcrop=28x28" alt="Freek Van der Herten" class="w-7 h-7 object-contain border border-white rounded-full -translate-x-2 flex shrink-0">
                    </div>
                    <h4 class="text-sm-primary w-full leading-5 ml-2"> Christoph Rumpel &amp; Freek Van der Herten </h4>
                </div>
                <div class="mt-3">
                    <div class="flex items-center gap-3 mt-6">
                    <p class="text-sm-primary bg-parrot-100 py-1.5 px-1.5 rounded-[3px] flex items-center gap-1.5 w-max">
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="none">
                        <path fill="#464646" d="M7.493 0A7.08 7.08 0 0 0 .417 7.083a7.08 7.08 0 0 0 7.076 7.084 7.088 7.088 0 0 0 7.09-7.084A7.087 7.087 0 0 0 7.493 0ZM7.5 12.75a5.665 5.665 0 0 1-5.667-5.667A5.665 5.665 0 0 1 7.5 1.417a5.665 5.665 0 0 1 5.667 5.666A5.665 5.665 0 0 1 7.5 12.75Zm-.156-9.208h-.042a.508.508 0 0 0-.51.51v3.343c0 .248.127.482.347.61l2.94 1.763a.505.505 0 0 0 .763-.358.502.502 0 0 0-.247-.513l-2.74-1.63V4.053a.508.508 0 0 0-.51-.51Z"></path>
                        </svg> 02 h 37 min
                    </p>
                    <p class="text-sm-primary bg-accent-100 py-1.5 px-1.5 rounded-[3px] flex items-center gap-1.5 w-max">
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="13" fill="none">
                        <path fill="#464646" d="M14.063 12.188h-3.75V0h3.75v12.188Zm-2.813-.938h1.875V.937H11.25V11.25Zm-1.875.938h-3.75V3.75h3.75v8.438Zm-2.813-.938h1.875V4.687H6.563v6.563Zm-1.875.938H.938V6.561h3.75v5.625Zm-2.812-.938H3.75V7.5H1.875v3.75Z"></path>
                        </svg> Beginner
                    </p>
                    </div>
                </div>
                </div>
            </div>
            </div>
            <div class="bg-white rounded overflow-hidden shadow-card">
            <a href="single.html">
                <img srcset="https://laravel-courses.com/storage/courses/4960c69f-174b-43d2-a868-d913de6678a9.png 2000w, https://laravel-courses.com/storage/courses/598e2682-0977-496c-b274-29f8101966ea.png 1200w, https://laravel-courses.com/storage/courses/6baba847-ec06-4be5-8967-5f3ab5d42f0e.png 400w" sizes="(max-width: 600px) 400px, (max-width: 1200px) 1200px, 2000px" src="https://laravel-courses.com/storage/courses/598e2682-0977-496c-b274-29f8101966ea.png" alt="Laravel Queues in Action" class="w-full h-auto object-contain">
            </a>
            <div class="px-6 pb-5">
                <div class="mt-7 flex justify-between items-center gap-4 mb-4">
                <a href="single.html" class="text-lg-primary w-full hover:underline">Laravel Queues in Action</a>
                </div>
                <div>
                <div class="flex items-center mb-2">
                    <div class="flex items-center">
                    <img src="https://laravel-courses.com/storage/thumbnails/default/20/u3/dg5y8u5cocc8ogco8ckgg.png?p=authors%2F31a436d0-f246-41fe-8097-e3546f6af15b.png&amp;s=pd&amp;smartcrop=28x28" alt="Mohamed Said" class="w-7 h-7 object-contain flex shrink-0 rounded-full">
                    </div>
                    <h4 class="text-sm-primary w-full leading-5 ml-2"> Mohamed Said </h4>
                </div>
                <div class="mt-3">
                    <div class="flex items-center gap-3 mt-6">
                    <p class="text-sm-primary bg-accent-100 py-1.5 px-1.5 rounded-[3px] flex items-center gap-1.5 w-max">
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="13" fill="none">
                        <path fill="#464646" d="M14.063 12.188h-3.75V0h3.75v12.188Zm-2.813-.938h1.875V.937H11.25V11.25Zm-1.875.938h-3.75V3.75h3.75v8.438Zm-2.813-.938h1.875V4.687H6.563v6.563Zm-1.875.938H.938V6.561h3.75v5.625Zm-2.812-.938H3.75V7.5H1.875v3.75Z"></path>
                        </svg> Intermediate
                    </p>
                    </div>
                </div>
                </div>
            </div>
            </div> --}}
        </div>
        <div class="flex justify-center mt-12 mb-12">
            <a href="https://laravel-courses.com/courses">
            <button class="btn-primary text-white h-14 w-32"> Browse all </button>
            </a>
        </div>
        </section>
    </div>



    <div>
        <!--Email Subscribe section-->
        <div class="w-full bg-update bg-no-repeat bg-cover h-[400px] py-0">
            <div class="container px-8 w-full flex flex-row justify-between items-center gap-5 mx-auto h-full">
              <div class="max-w-[579px] w-full">
                <h2 class="heading-secondary"> Don’t miss any updates </h2>
                <p class="mt-3.5 text-base-primary"> We will be covering course reviews, comparison between the best courses, and will be sharing exclusive discounts with you on a monthly basis. </p>
                <div class="mt-6 md:mt-12 w-full flex flex-col sm:flex-row items-center gap-5">
                  <input wire:model="email" type="email" placeholder="Your email address" class="md:max-w-[385px] input-focus w-full h-14 bg-white border border-orange rounded-lg px-3.5 text-base-primary text-[#262626] placeholder:text-current outline-none" required="">
                  <button wire:click="subscribe" class="bg-white w-full sm:w-[135px] shrink-0 h-14 rounded-lg flex justify-center items-center border border-orange text-lg-primary font-medium text-orange-100 bg-button-hover hover:text-white transition-all duration-300"> Subscribe </button>
                </div>
              </div>
              <div class="justify-center">
                <img src="https://laravel-courses.com/img/letter.png" alt="letter" class="w-auto h-auto object-contain">
              </div>
            </div>
        </div>
    </div>
</x-guest-layout>

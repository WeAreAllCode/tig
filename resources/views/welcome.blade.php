@extends('layouts.app')

@section('content')
	<section class="content lg:flex">

        {{-- HERO --}}
		<section>
			<img class="mx-auto" src="/images/intermittent-geek-logo.svg" alt="" width="300">
			<div class="m-8">
				<p class="text-sm text-center uppercase">An entertaining journey through some of my geeky adventures.</p>
			</div>
        </section>

        {{-- POSTS --}}
		<section class="main lg:ml-8">
			<div class="bg-white rounded overflow-hidden border border-gray-3">
                <div>
                    <a href="#">
                        <img class="w-full" src="https://placezombie.com/982x360" alt="Sunset in the mountains">
                    </a>
                </div>
                <div class="lg:flex lg:border-b lg:border-gray-3">
                    <div class="px-6 py-4 mx-3 text-center lg:text-left">
                        <a href="#" class="">
                            <div class="font-bold text-xl mb-2 leading-tight hover:text-orange-5">Setup a Mac Environment for PHP Development</div>
                            <p class="text-gray-7 text-base hover:text-orange-5">
                                A quick look at my dev environment
                            </p>
                        </a>
                    </div>
                    <hr class="border border-gray-3 mx-auto w-1/2 my-0 lg:hidden">
                    <div class="flex justify-center px-6 py-4 text-xs font-light text-gray-9 lg:flex-wrap lg:justify-start lg:border-l lg:border-gray-3">
                        <span class="flex mr-2 lg:mr-0">
                            <svg class="fill-current text-gray-5 mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18">
                                <path class="heroicon-ui" d="M12 12a5 5 0 1 1 0-10 5 5 0 0 1 0 10zm0-2a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm9 11a1 1 0 0 1-2 0v-2a3 3 0 0 0-3-3H8a3 3 0 0 0-3 3v2a1 1 0 0 1-2 0v-2a5 5 0 0 1 5-5h8a5 5 0 0 1 5 5v2z"/>
                            </svg>
                            <a href="#" class="hover:text-orange-5">The Intermittent Geek</a>
                        </span>
                        <span class="flex ml-2 lg:ml-0">
                            <svg class="fill-current text-gray-5 mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18">
                                <path class="heroicon-ui" d="M2.59 13.41A1.98 1.98 0 0 1 2 12V7a5 5 0 0 1 5-5h4.99c.53 0 1.04.2 1.42.59l8 8a2 2 0 0 1 0 2.82l-8 8a2 2 0 0 1-2.82 0l-8-8zM20 12l-8-8H7a3 3 0 0 0-3 3v5l8 8 8-8zM7 8a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
                            </svg>
                            <a href="#" class="hover:text-orange-5">Tooling</a>
                        </span>
                    </div>
                </div>
				<div class="flex mt-2 mb-6 mx-8 lg:mt-6">
					<a href="#" class="bg-transparent font-semibold hover:text-orange-5 border border-gray-3 hover:border-orange-5 rounded py-4 w-full uppercase text-center text-sm">
						Continue Reading
					</a>
				</div>
			</div>
        </section>

	</section>
@endsection

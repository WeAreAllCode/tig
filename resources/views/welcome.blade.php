@extends('layouts.app')

@section('content')
	<section class="sidebar">
		<img src="/images/intermittent-geek-logo.svg" alt="" width="300">	
	</section>
	<section class="main ml-8">
		<div class="bg-white rounded overflow-hidden border border-gray-3">
			<img class="w-full" src="https://www.fillmurray.com/1012/360" alt="Sunset in the mountains">
			<div class="px-6 py-4">
				<div class="font-bold text-xl mb-2">The Coldest Sunset</div>
				<p class="text-gray-700 text-base">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
				</p>
			</div>
			<div class="px-6 py-4">
				<span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">#photography</span>
				<span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">#travel</span>
				<span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700">#winter</span>
			</div>
		</div>
	</section>
@endsection
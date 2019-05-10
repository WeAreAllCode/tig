		<header class="bg-white border-b border-gray-3 mb-10">
			<div class="container flex justify-between">
				<h1 class="text-base font-extrabold uppercase hover:text-orange-5 p-4 md:border-l md:border-r md:border-gray-3">
					<a href="{{ route('welcome') }}">The Intermittent Geek</a>
				</h1>
				<nav>
					<ul class="flex justify-between">
						<li class="border-l border-gray-3 hidden md:flex md:inline-block">
							<a class="hover:text-orange-5 p-4 w-full" href="#search">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
									<path class="heroicon-ui fill-current" d="M16.32 14.9l5.39 5.4a1 1 0 0 1-1.42 1.4l-5.38-5.38a8 8 0 1 1 1.41-1.41zM10 16a6 6 0 1 0 0-12 6 6 0 0 0 0 12z"/>
								</svg>
							</a>
							<form id="search" class="hidden" method="get" action="#">
								<input type="text" name="query" placeholder="Search" />
							</form>
						</li>
						<li class="border-l border-r border-gray-3 flex">
							<a class="hover:text-orange-5 p-4 w-full" href="#menu">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
									<path class="heroicon-ui fill-current" d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"/>
								</svg>
							</a>
						</li>
					</ul>
				</nav>
			</div>
		</header>

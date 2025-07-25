@extends('frontend.layout.app')

@section('styles')
    <style>
        /* From Uiverse.io by BHARGAVPATEL1244 */
        .viewBtn {
            outline: none;
            cursor: pointer;
            border: none;
            padding: 8px 12px;
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 16px;
            position: relative;
            display: inline-block;
            letter-spacing: 0.05rem;
            font-weight: 700;
            font-size: 17px;
            border-radius: 500px;
            overflow: hidden;
            background: #549254;
            color: white;
        }

        .viewBtn span {
            position: relative;
            z-index: 10;
            transition: color 0.4s;
        }

        .viewBtn:hover span {
            color: black;
        }

        .viewBtn::before,
        .viewBtn::after {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 0;
        }

        .viewBtn::before {
            content: "";
            background: #3d883e;
            width: 120%;
            left: -10%;
            transform: skew(30deg);
            transition: transform 0.4s cubic-bezier(0.3, 1, 0.8, 1);
        }

        .viewBtn:hover::before {
            transform: translate3d(100%, 0, 0);
        }




        /* about us button */

        /* From Uiverse.io by alexmaracinaru */
        .aboutusBtn {
            cursor: pointer;
            font-weight: 700;
            transition: all 0.2s;
            padding: 10px 20px;
            border-radius: 100px;
            background: #cfef00;
            border: 1px solid transparent;
            display: flex;
            align-items: center;
            font-size: 15px;
            color: black;
        }

        .aboutusBtn:hover {
            background: #c4e201;
        }

        .aboutusBtn>svg {
            width: 34px;
            margin-left: 10px;
            transition: transform 0.3s ease-in-out;
        }

        .aboutusBtn:hover svg {
            transform: translateX(5px);
        }

        .aboutusBtn:active {
            transform: scale(0.95);
        }
    </style>
@endsection

@section('content')
    {{-- hero section start --}}

    <section class="relative h-screen w-full overflow-hidden">
        <!-- Background Video -->
        <video autoplay muted loop playsinline class="absolute top-0 left-0 w-full h-full object-cover z-[-1]">
            <source src="{{ asset('frontend/video/home-page-banner-video.mp4') }}" type="video/mp4" />
            Your browser does not support the video tag.
        </video>

        <!-- Overlay (darkens the video slightly for readability) -->
        <div class="absolute inset-0 bg-black bg-opacity-50 z-0"></div>

        <!-- Hero Content -->
        <div class="relative z-10 flex flex-col items-center justify-center h-full text-center px-4 text-white">
            <h1 class="text-4xl sm:text-5xl md:text-6xl font-bold mb-4"> <a href="" class="typewrite" data-period="2000"
                    data-type='[ "Explore the Beauty of Nepal.", "Adventure Awaits in the Heart of the Himalayas.", "Discover Hidden Trails and Timeless Traditions.", "Unforgettable Journeys Through Nepals Natural Wonders." ]'>
                    <span class="wrap"></span>
                </a></h1>
            <p class="text-lg sm:text-xl md:text-2xl max-w-2xl">Trek the Himalayas with expert guides and discover
                unforgettable landscapes.</p>
            <form action="/search" method="GET" class="mt-6 w-full max-w-xl mx-auto px-4">
                <div class="flex bg-white rounded-full overflow-hidden shadow-lg">
                    <input type="text" name="query" placeholder="Search for treks or destinations..."
                        class="w-full px-6 py-3 text-gray-800 focus:outline-none text-base" />
                    <button type="submit"
                        class="bg-yellow-700 text-white px-6 py-3 text-base font-semibold hover:bg-yellow-900 transition">
                        Search
                    </button>
                </div>
            </form>

        </div>
    </section>


    {{-- most selling treks --}}

    <section class="relative w-full py-16 px-4 md:px-10 bg-cover bg-center"
        style="background-image: url('frontend/images/bestselltrekbackground.jpg');">
        <!-- White background overlay -->
        <div class="absolute inset-0 bg-white bg-opacity-60 z-0"></div>

        <div class="relative z-10 max-w-7xl mx-auto mb-12 pl-[40px] font-caveat">
            <h2 class="text-h3 md:text-h1 font-bold text-green-800 ">Best Selling Treks in Nepal</h2>
            <p class="mt-2 text-gray-600 text-para">Discover the most loved trekking experiences by adventurers around the
                world.</p>
        </div>

        <!-- Cards Section -->
        <div class="relative z-10 max-w-7xl mx-auto flex flex-wrap justify-center gap-6">

            <!-- Trek Card -->
            <div class="w-full sm:w-[48%] lg:w-[30%] mb-6 bg-white shadow-lg rounded-xl overflow-hidden group relative ">

                <div
                    class="absolute top-[100px] left-0 bg-gradient-to-r from-pink-500 to-red-500 text-white text-sm font-bold px-4 py-1 rounded-r-xl shadow-md z-10">
                    10% OFF
                </div>
                <!-- Image -->
                <img src="{{ asset('frontend/images/at-everest-base-camp-1920x950.jpg') }}" alt="Trek 1"
                    class="w-full h-56 sm:h-60 object-cover">

                <!-- Title -->
                <div class="p-4">
                    <h3 class="text-lg sm:text-xl font-semibold text-slate-800 py-[10px]">Everest Base Camp Trek </h3>
                    <div class="w-full flex justify-between pt-[10px] items-center flex-wrap gap-4">
                        <!-- Time / Duration -->
                        <div class="flex items-center gap-2 bg-slate-100 px-4 py-1.5 rounded-full shadow-sm">
                            <i class="fa-regular fa-clock text-green-600 text-base"></i>
                            <span class="font-semibold text-gray-700">14 Days</span>
                        </div>

                        <!-- Price with Best Deal Badge -->
                        <div class="relative flex items-end gap-3">
                            <!-- Old Price -->
                            <span
                                class="text-sm font-semibold text-black line-through bg-gray-100 px-4 py-2 rounded-full shadow-sm">
                                $1500
                            </span>

                            <!-- New Price with Superscript Badge -->
                            <div class="relative">
                                <!-- Superscript Badge -->
                                <div
                                    class="absolute -top-4 -right-3 bg-yellow-400 text-black text-[10px] font-semibold px-1.5 py-0.5 rounded-full shadow">
                                    Best Deal
                                </div>

                                <!-- New Price -->
                                <span
                                    class="bg-gradient-to-r from-green-600 to-blue-600 text-white font-bold text-lg px-5 py-2 rounded-full shadow-md">
                                    $1350
                                </span>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Overlay -->
                <div
                    class="absolute inset-0 bg-gradient-to-b from-[#494848c2] via-[#43434399] to-[#51505066] flex flex-col gap-y-2 items-center justify-center transform -translate-y-full group-hover:translate-y-0 transition-transform duration-500 ease-in-out z-10">
                    <a href="#"
                        class="viewBtn opacity-0 group-hover:opacity-100 translate-y-4 group-hover:translate-y-0 transition-all duration-500 bg-gradient-to-r  text-white px-6 py-2 rounded-full font-semibold shadow-lg hover:shadow-xl hover:brightness-110">
                        <span>View More</span>
                    </a>
                </div>
            </div>

            <div class="w-full sm:w-[48%] lg:w-[30%] mb-6 bg-white shadow-lg rounded-xl overflow-hidden group relative ">

                <div
                    class="absolute top-[100px] left-0 bg-gradient-to-r from-pink-500 to-red-500 text-white text-sm font-bold px-4 py-1 rounded-r-xl shadow-md z-10">
                    20% OFF
                </div>
                <!-- Image -->
                <img src="{{ asset('frontend/images/abc 1.webp') }}" alt="Trek 1"
                    class="w-full h-56 sm:h-60 object-cover">

                <!-- Title -->
                <div class="p-4">
                    <h3 class="text-lg sm:text-xl font-semibold text-slate-800 py-[10px]">Annapurna Base Camp Trek </h3>
                    <div class="w-full flex justify-between pt-[10px] items-center flex-wrap gap-4">
                        <!-- Time / Duration -->
                        <div class="flex items-center gap-2 bg-slate-100 px-4 py-1.5 rounded-full shadow-sm">
                            <i class="fa-regular fa-clock text-green-600 text-base"></i>
                            <span class="font-semibold text-gray-700">11 Days</span>
                        </div>

                        <!-- Price with Best Deal Badge -->
                        <div class="relative flex items-end gap-3">
                            <!-- Old Price -->
                            <span
                                class="text-sm font-semibold text-black line-through bg-gray-100 px-4 py-2 rounded-full shadow-sm">
                                $1000
                            </span>

                            <!-- New Price with Superscript Badge -->
                            <div class="relative">
                                <!-- Superscript Badge -->
                                <div
                                    class="absolute -top-4 -right-3 bg-yellow-400 text-black text-[10px] font-semibold px-1.5 py-0.5 rounded-full shadow">
                                    Best Deal
                                </div>

                                <!-- New Price -->
                                <span
                                    class="bg-gradient-to-r from-green-600 to-blue-600 text-white font-bold text-lg px-5 py-2 rounded-full shadow-md">
                                    $800
                                </span>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Overlay -->
                <div
                    class="absolute inset-0 bg-gradient-to-b from-[#494848c2] via-[#43434399] to-[#51505066] flex flex-col gap-y-2 items-center justify-center transform -translate-y-full group-hover:translate-y-0 transition-transform duration-500 ease-in-out z-10">
                    <a href="#"
                        class="viewBtn opacity-0 group-hover:opacity-100 translate-y-4 group-hover:translate-y-0 transition-all duration-500 bg-gradient-to-r  text-white px-6 py-2 rounded-full font-semibold shadow-lg hover:shadow-xl hover:brightness-110">
                        <span>View More</span>
                    </a>
                </div>
            </div>

            <div class="w-full sm:w-[48%] lg:w-[30%] mb-6 bg-white shadow-lg rounded-xl overflow-hidden group relative ">

                <div
                    class="absolute top-[100px] left-0 bg-gradient-to-r from-pink-500 to-red-500 text-white text-sm font-bold px-4 py-1 rounded-r-xl shadow-md z-10">
                    20% OFF
                </div>
                <!-- Image -->
                <img src="{{ asset('frontend/images/ghorepani-6-1080x720.jpeg') }}" alt="Trek 1"
                    class="w-full h-56 sm:h-60 object-cover">

                <!-- Title -->
                <div class="p-4">
                    <h3 class="text-lg sm:text-xl font-semibold text-slate-800 py-[10px]">Ghorepani Poon Hill Trek</h3>
                    <div class="w-full flex justify-between pt-[10px] items-center flex-wrap gap-4">
                        <!-- Time / Duration -->
                        <div class="flex items-center gap-2 bg-slate-100 px-4 py-1.5 rounded-full shadow-sm">
                            <i class="fa-regular fa-clock text-green-600 text-base"></i>
                            <span class="font-semibold text-gray-700">9 Days</span>
                        </div>

                        <!-- Price with Best Deal Badge -->
                        <div class="relative flex items-end gap-3">
                            <!-- Old Price -->
                            <span
                                class="text-sm font-semibold text-black line-through bg-gray-100 px-4 py-2 rounded-full shadow-sm">
                                $950
                            </span>

                            <!-- New Price with Superscript Badge -->
                            <div class="relative">
                                <!-- Superscript Badge -->
                                <div
                                    class="absolute -top-4 -right-3 bg-yellow-400 text-black text-[10px] font-semibold px-1.5 py-0.5 rounded-full shadow">
                                    Best Deal
                                </div>

                                <!-- New Price -->
                                <span
                                    class="bg-gradient-to-r from-green-600 to-blue-600 text-white font-bold text-lg px-5 py-2 rounded-full shadow-md">
                                    $750
                                </span>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Overlay -->
                <div
                    class="absolute inset-0 bg-gradient-to-b from-[#494848c2] via-[#43434399] to-[#51505066] flex flex-col gap-y-2 items-center justify-center transform -translate-y-full group-hover:translate-y-0 transition-transform duration-500 ease-in-out z-10">
                    <a href="#"
                        class="viewBtn opacity-0 group-hover:opacity-100 translate-y-4 group-hover:translate-y-0 transition-all duration-500 bg-gradient-to-r  text-white px-6 py-2 rounded-full font-semibold shadow-lg hover:shadow-xl hover:brightness-110">
                        <span>View More</span>
                    </a>
                </div>
            </div>

            <div class="w-full sm:w-[48%] lg:w-[30%] mb-6 bg-white shadow-lg rounded-xl overflow-hidden group relative ">

                <div
                    class="absolute top-[100px] left-0 bg-gradient-to-r from-pink-500 to-red-500 text-white text-sm font-bold px-4 py-1 rounded-r-xl shadow-md z-10">
                    25% OFF
                </div>
                <!-- Image -->
                <img src="{{ asset('frontend/images/langtang-trek-1080x720.jpg') }}" alt="Trek 1"
                    class="w-full h-56 sm:h-60 object-cover">

                <!-- Title -->
                <div class="p-4">
                    <h3 class="text-lg sm:text-xl font-semibold text-slate-800 py-[10px]">Langang Valley Trek </h3>
                    <div class="w-full flex justify-between pt-[10px] items-center flex-wrap gap-4">
                        <!-- Time / Duration -->
                        <div class="flex items-center gap-2 bg-slate-100 px-4 py-1.5 rounded-full shadow-sm">
                            <i class="fa-regular fa-clock text-green-600 text-base"></i>
                            <span class="font-semibold text-gray-700">14 Days</span>
                        </div>

                        <!-- Price with Best Deal Badge -->
                        <div class="relative flex items-end gap-3">
                            <!-- Old Price -->
                            <span
                                class="text-sm font-semibold text-black line-through bg-gray-100 px-4 py-2 rounded-full shadow-sm">
                                $1000
                            </span>

                            <!-- New Price with Superscript Badge -->
                            <div class="relative">
                                <!-- Superscript Badge -->
                                <div
                                    class="absolute -top-4 -right-3 bg-yellow-400 text-black text-[10px] font-semibold px-1.5 py-0.5 rounded-full shadow">
                                    Best Deal
                                </div>

                                <!-- New Price -->
                                <span
                                    class="bg-gradient-to-r from-green-600 to-blue-600 text-white font-bold text-lg px-5 py-2 rounded-full shadow-md">
                                    $750
                                </span>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Overlay -->
                <div
                    class="absolute inset-0 bg-gradient-to-b from-[#494848c2] via-[#43434399] to-[#51505066] flex flex-col gap-y-2 items-center justify-center transform -translate-y-full group-hover:translate-y-0 transition-transform duration-500 ease-in-out z-10">
                    <a href="#"
                        class="viewBtn opacity-0 group-hover:opacity-100 translate-y-4 group-hover:translate-y-0 transition-all duration-500 bg-gradient-to-r  text-white px-6 py-2 rounded-full font-semibold shadow-lg hover:shadow-xl hover:brightness-110">
                        <span>View More</span>
                    </a>
                </div>
            </div>

            <div class="w-full sm:w-[48%] lg:w-[30%] mb-6 bg-white shadow-lg rounded-xl overflow-hidden group relative ">

                <div
                    class="absolute top-[100px] left-0 bg-gradient-to-r from-pink-500 to-red-500 text-white text-sm font-bold px-4 py-1 rounded-r-xl shadow-md z-10">
                    20% OFF
                </div>
                <!-- Image -->
                <img src="{{ asset('frontend/images/manasulutrek.jpg') }}" alt="Trek 1"
                    class="w-full h-56 sm:h-60 object-cover">

                <!-- Title -->
                <div class="p-4">
                    <h3 class="text-lg sm:text-xl font-semibold text-slate-800 py-[10px]">Manaslu Circuit Trek </h3>
                    <div class="w-full flex justify-between pt-[10px] items-center flex-wrap gap-4">
                        <!-- Time / Duration -->
                        <div class="flex items-center gap-2 bg-slate-100 px-4 py-1.5 rounded-full shadow-sm">
                            <i class="fa-regular fa-clock text-green-600 text-base"></i>
                            <span class="font-semibold text-gray-700">15 Days</span>
                        </div>

                        <!-- Price with Best Deal Badge -->
                        <div class="relative flex items-end gap-3">
                            <!-- Old Price -->
                            <span
                                class="text-sm font-semibold text-black line-through bg-gray-100 px-4 py-2 rounded-full shadow-sm">
                                $1600
                            </span>

                            <!-- New Price with Superscript Badge -->
                            <div class="relative">
                                <!-- Superscript Badge -->
                                <div
                                    class="absolute -top-4 -right-3 bg-yellow-400 text-black text-[10px] font-semibold px-1.5 py-0.5 rounded-full shadow">
                                    Best Deal
                                </div>

                                <!-- New Price -->
                                <span
                                    class="bg-gradient-to-r from-green-600 to-blue-600 text-white font-bold text-lg px-5 py-2 rounded-full shadow-md">
                                    $1380
                                </span>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Overlay -->
                <div
                    class="absolute inset-0 bg-gradient-to-b from-[#494848c2] via-[#43434399] to-[#51505066] flex flex-col gap-y-2 items-center justify-center transform -translate-y-full group-hover:translate-y-0 transition-transform duration-500 ease-in-out z-10">
                    <a href="#"
                        class="viewBtn opacity-0 group-hover:opacity-100 translate-y-4 group-hover:translate-y-0 transition-all duration-500 bg-gradient-to-r  text-white px-6 py-2 rounded-full font-semibold shadow-lg hover:shadow-xl hover:brightness-110">
                        <span>View More</span>
                    </a>
                </div>
            </div>

            <div class="w-full sm:w-[48%] lg:w-[30%] mb-6 bg-white shadow-lg rounded-xl overflow-hidden group relative ">

                <div
                    class="absolute top-[100px] left-0 bg-gradient-to-r from-pink-500 to-red-500 text-white text-sm font-bold px-4 py-1 rounded-r-xl shadow-md z-10">
                    15% OFF
                </div>
                <!-- Image -->
                <img src="{{ asset('frontend/images/mardi 2.webp') }}" alt="Trek 1"
                    class="w-full h-56 sm:h-60 object-cover">

                <!-- Title -->
                <div class="p-4">
                    <h3 class="text-lg sm:text-xl font-semibold text-slate-800 py-[10px]">Mardi Himal Trek </h3>
                    <div class="w-full flex justify-between pt-[10px] items-center flex-wrap gap-4">
                        <!-- Time / Duration -->
                        <div class="flex items-center gap-2 bg-slate-100 px-4 py-1.5 rounded-full shadow-sm">
                            <i class="fa-regular fa-clock text-green-600 text-base"></i>
                            <span class="font-semibold text-gray-700">8 Days</span>
                        </div>

                        <!-- Price with Best Deal Badge -->
                        <div class="relative flex items-end gap-3">
                            <!-- Old Price -->
                            <span
                                class="text-sm font-semibold text-black line-through bg-gray-100 px-4 py-2 rounded-full shadow-sm">
                                $800
                            </span>

                            <!-- New Price with Superscript Badge -->
                            <div class="relative">
                                <!-- Superscript Badge -->
                                <div
                                    class="absolute -top-4 -right-3 bg-yellow-400 text-black text-[10px] font-semibold px-1.5 py-0.5 rounded-full shadow">
                                    Best Deal
                                </div>

                                <!-- New Price -->
                                <span
                                    class="bg-gradient-to-r from-green-600 to-blue-600 text-white font-bold text-lg px-5 py-2 rounded-full shadow-md">
                                    $680
                                </span>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Overlay -->
                <div
                    class="absolute inset-0 bg-gradient-to-b from-[#494848c2] via-[#43434399] to-[#51505066] flex flex-col gap-y-2 items-center justify-center transform -translate-y-full group-hover:translate-y-0 transition-transform duration-500 ease-in-out z-10">
                    <a href="#"
                        class="viewBtn opacity-0 group-hover:opacity-100 translate-y-4 group-hover:translate-y-0 transition-all duration-500 bg-gradient-to-r  text-white px-6 py-2 rounded-full font-semibold shadow-lg hover:shadow-xl hover:brightness-110">
                        <span>View More</span>
                    </a>
                </div>
            </div>
        </div>
    </section>




    {{-- about us section --}}

    <section class="relative w-full h-auto overflow-hidden">
        <!-- Background Video -->
        <video autoplay muted loop playsinline class="absolute inset-0 w-full h-full object-cover z-0">
            <source src="{{ asset('frontend/images/aboutusvideo1.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div class="bg-black bg-opacity-60 w-full h-full absolute top-0 left-0"></div>

        <div
            class="relative z-10 max-w-7xl mx-auto px-6 py-16 flex flex-col lg:flex-row items-center justify-between gap-10">

            <!-- Left Image -->
            <div class="w-full lg:w-1/2">
                <img src="{{ asset('frontend/images/everest-base-camp-trek-everesthikes-1536x1152.jpg') }}" alt="Our Team"
                    class="rounded-2xl shadow-xl w-full object-cover">
            </div>

            <!-- Right Content -->
            <div class="w-full lg:w-1/2 text-white">
                <h2 class="text-h2 font-bold mb-4">About Us</h2>
                <p class="text-para leading-relaxed mb-6">
                    At Everest Trekking, we specialize in offering unforgettable journeys through the majestic Himalayas.
                    Our team is dedicated to safety, sustainability, and creating experiences that last a lifetime.
                    At Everest Trekking, we specialize in offering unforgettable journeys through the majestic Himalayas.
                    Our team is dedicated to safety, sustainability, and creating experiences that last a lifetime.
                    At Everest Trekking, we specialize in offering unforgettable journeys through the majestic Himalayas.
                    Our team is dedicated to safety, sustainability, and creating experiences that last a lifetime.
                    At Everest Trekking, we specialize in offering unforgettable journeys through the majestic Himalayas.
                    Our team is dedicated to safety, sustainability, and creating experiences that last a lifetime.
                </p>
                <a class="aboutusBtn w-[150px]">
                    <span>Continue</span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 74 74" height="34"
                        width="34">
                        <circle stroke-width="3" stroke="black" r="35.5" cy="37" cx="37"></circle>
                        <path fill="black"
                            d="M25 35.5C24.1716 35.5 23.5 36.1716 23.5 37C23.5 37.8284 24.1716 38.5 25 38.5V35.5ZM49.0607 38.0607C49.6464 37.4749 49.6464 36.5251 49.0607 35.9393L39.5147 26.3934C38.9289 25.8076 37.9792 25.8076 37.3934 26.3934C36.8076 26.9792 36.8076 27.9289 37.3934 28.5147L45.8787 37L37.3934 45.4853C36.8076 46.0711 36.8076 47.0208 37.3934 47.6066C37.9792 48.1924 38.9289 48.1924 39.5147 47.6066L49.0607 38.0607ZM25 38.5L48 38.5V35.5L25 35.5V38.5Z">
                        </path>
                    </svg>
                </a>
            </div>

        </div>
    </section>


    {{-- most selling treks --}}

    <section class="relative w-full py-16 px-4 md:px-10 bg-cover bg-center"
        style="background-image: url('frontend/images/tourbackground1.jpg');">
        <!-- White background overlay -->
        <div class="absolute inset-0 bg-white bg-opacity-60 z-0"></div>

        <div class="relative z-10 max-w-7xl mx-auto mb-12 pl-[40px] font-caveat">
            <h2 class="text-h3 md:text-h1 font-bold text-blue-800">Best Selling Tours in Nepal</h2>
            <p class="mt-2 text-gray-600 text-para">
                Explore Nepal’s most popular and breathtaking tour experiences loved by travelers worldwide.
            </p>
        </div>

        <!-- Cards Section -->
        <div class="relative z-10 max-w-7xl mx-auto flex flex-wrap justify-center gap-6">

            <!-- Trek Card -->
            <div class="w-full sm:w-[48%] lg:w-[30%] mb-6 bg-white shadow-lg rounded-xl overflow-hidden group relative ">

                <div
                    class="absolute top-[100px] left-0 bg-gradient-to-r from-pink-500 to-red-500 text-white text-sm font-bold px-4 py-1 rounded-r-xl shadow-md z-10">
                    10% OFF
                </div>
                <!-- Image -->
                <img src="{{ asset('frontend/images/ktm tour.jpg') }}" alt="Trek 1"
                    class="w-full h-56 sm:h-60 object-cover">

                <!-- Title -->
                <div class="p-4">
                    <h3 class="text-lg sm:text-xl font-semibold text-slate-800 py-[10px]">Kathmandu Tour</h3>
                    <div class="w-full flex justify-between pt-[10px] items-center flex-wrap gap-4">
                        <!-- Time / Duration -->
                        <div class="flex items-center gap-2 bg-slate-100 px-4 py-1.5 rounded-full shadow-sm">
                            <i class="fa-regular fa-clock text-green-600 text-base"></i>
                            <span class="font-semibold text-gray-700">5 Days</span>
                        </div>

                        <!-- Price with Best Deal Badge -->
                        <div class="relative flex items-end gap-3">
                            <!-- Old Price -->
                            <span
                                class="text-sm font-semibold text-black line-through bg-gray-100 px-4 py-2 rounded-full shadow-sm">
                                $600
                            </span>

                            <!-- New Price with Superscript Badge -->
                            <div class="relative">
                                <!-- Superscript Badge -->
                                <div
                                    class="absolute -top-4 -right-3 bg-yellow-400 text-black text-[10px] font-semibold px-1.5 py-0.5 rounded-full shadow">
                                    Best Deal
                                </div>

                                <!-- New Price -->
                                <span
                                    class="bg-gradient-to-r from-green-600 to-blue-600 text-white font-bold text-lg px-5 py-2 rounded-full shadow-md">
                                    $540
                                </span>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Overlay -->
                <div
                    class="absolute inset-0 bg-gradient-to-b from-[#494848c2] via-[#43434399] to-[#51505066] flex flex-col gap-y-2 items-center justify-center transform -translate-y-full group-hover:translate-y-0 transition-transform duration-500 ease-in-out z-10">
                    <a href="#"
                        class="viewBtn opacity-0 group-hover:opacity-100 translate-y-4 group-hover:translate-y-0 transition-all duration-500 bg-gradient-to-r  text-white px-6 py-2 rounded-full font-semibold shadow-lg hover:shadow-xl hover:brightness-110">
                        <span>View More</span>
                    </a>
                </div>
            </div>

            <div class="w-full sm:w-[48%] lg:w-[30%] mb-6 bg-white shadow-lg rounded-xl overflow-hidden group relative ">

                <div
                    class="absolute top-[100px] left-0 bg-gradient-to-r from-pink-500 to-red-500 text-white text-sm font-bold px-4 py-1 rounded-r-xl shadow-md z-10">
                    15% OFF
                </div>
                <!-- Image -->
                <img src="{{ asset('frontend/images/pokhara tour 1.webp') }}" alt="Trek 1"
                    class="w-full h-56 sm:h-60 object-cover">

                <!-- Title -->
                <div class="p-4">
                    <h3 class="text-lg sm:text-xl font-semibold text-slate-800 py-[10px]">Pokhara Tour</h3>
                    <div class="w-full flex justify-between pt-[10px] items-center flex-wrap gap-4">
                        <!-- Time / Duration -->
                        <div class="flex items-center gap-2 bg-slate-100 px-4 py-1.5 rounded-full shadow-sm">
                            <i class="fa-regular fa-clock text-green-600 text-base"></i>
                            <span class="font-semibold text-gray-700">6 Days</span>
                        </div>

                        <!-- Price with Best Deal Badge -->
                        <div class="relative flex items-end gap-3">
                            <!-- Old Price -->
                            <span
                                class="text-sm font-semibold text-black line-through bg-gray-100 px-4 py-2 rounded-full shadow-sm">
                                $800
                            </span>

                            <!-- New Price with Superscript Badge -->
                            <div class="relative">
                                <!-- Superscript Badge -->
                                <div
                                    class="absolute -top-4 -right-3 bg-yellow-400 text-black text-[10px] font-semibold px-1.5 py-0.5 rounded-full shadow">
                                    Best Deal
                                </div>

                                <!-- New Price -->
                                <span
                                    class="bg-gradient-to-r from-green-600 to-blue-600 text-white font-bold text-lg px-5 py-2 rounded-full shadow-md">
                                    $675
                                </span>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Overlay -->
                <div
                    class="absolute inset-0 bg-gradient-to-b from-[#494848c2] via-[#43434399] to-[#51505066] flex flex-col gap-y-2 items-center justify-center transform -translate-y-full group-hover:translate-y-0 transition-transform duration-500 ease-in-out z-10">
                    <a href="#"
                        class="viewBtn opacity-0 group-hover:opacity-100 translate-y-4 group-hover:translate-y-0 transition-all duration-500 bg-gradient-to-r  text-white px-6 py-2 rounded-full font-semibold shadow-lg hover:shadow-xl hover:brightness-110">
                        <span>View More</span>
                    </a>
                </div>
            </div>

            <div class="w-full sm:w-[48%] lg:w-[30%] mb-6 bg-white shadow-lg rounded-xl overflow-hidden group relative ">

                <div
                    class="absolute top-[100px] left-0 bg-gradient-to-r from-pink-500 to-red-500 text-white text-sm font-bold px-4 py-1 rounded-r-xl shadow-md z-10">
                    20% OFF
                </div>
                <!-- Image -->
                <img src="{{ asset('frontend/images/chitwantour.webp') }}" alt="Trek 1"
                    class="w-full h-56 sm:h-60 object-cover">

                <!-- Title -->
                <div class="p-4">
                    <h3 class="text-lg sm:text-xl font-semibold text-slate-800 py-[10px]">Chitwan Wildlife Safari</h3>
                    <div class="w-full flex justify-between pt-[10px] items-center flex-wrap gap-4">
                        <!-- Time / Duration -->
                        <div class="flex items-center gap-2 bg-slate-100 px-4 py-1.5 rounded-full shadow-sm">
                            <i class="fa-regular fa-clock text-green-600 text-base"></i>
                            <span class="font-semibold text-gray-700">9 Days</span>
                        </div>

                        <!-- Price with Best Deal Badge -->
                        <div class="relative flex items-end gap-3">
                            <!-- Old Price -->
                            <span
                                class="text-sm font-semibold text-black line-through bg-gray-100 px-4 py-2 rounded-full shadow-sm">
                                $800
                            </span>

                            <!-- New Price with Superscript Badge -->
                            <div class="relative">
                                <!-- Superscript Badge -->
                                <div
                                    class="absolute -top-4 -right-3 bg-yellow-400 text-black text-[10px] font-semibold px-1.5 py-0.5 rounded-full shadow">
                                    Best Deal
                                </div>

                                <!-- New Price -->
                                <span
                                    class="bg-gradient-to-r from-green-600 to-blue-600 text-white font-bold text-lg px-5 py-2 rounded-full shadow-md">
                                    $640
                                </span>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Overlay -->
                <div
                    class="absolute inset-0 bg-gradient-to-b from-[#494848c2] via-[#43434399] to-[#51505066] flex flex-col gap-y-2 items-center justify-center transform -translate-y-full group-hover:translate-y-0 transition-transform duration-500 ease-in-out z-10">
                    <a href="#"
                        class="viewBtn opacity-0 group-hover:opacity-100 translate-y-4 group-hover:translate-y-0 transition-all duration-500 bg-gradient-to-r  text-white px-6 py-2 rounded-full font-semibold shadow-lg hover:shadow-xl hover:brightness-110">
                        <span>View More</span>
                    </a>
                </div>
            </div>


        </div>
    </section>


    {{-- review section --}}

    <section class=" bg-white py-16 bg-cover bg-center "
        style="background-image: url('frontend/images/reviewbackground.jpg');">

        <div class="max-w-7xl mx-auto px-4">
            <!-- Heading -->
            <div class="text-center mb-12 font-caveat">
                <h2 class="text-h3 md:text-h1 font-bold text-green-800">What Others Are Saying</h2>
                <p class="text-gray-600 text-para mt-2">See how others enjoyed their adventures with us.</p>
            </div>

            <!-- Swiper -->
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">

                    <!-- Slide 1 -->
                    <div class="swiper-slide bg-gray-200 p-6 rounded-2xl shadow-md">
                        <p class="text-black text-base mb-4">"Amazing experience! The Everest Base Camp trek was
                            unforgettable. Everything was perfectly organized..." <a href=""
                                class="inline  text-sm font-medium text-blue-600 hover:underline ml-1">
                                See More
                            </a></p>

                        <div class="flex items-center gap-4 mt-6">
                            <img src="https://randomuser.me/api/portraits/women/1.jpg" class="w-12 h-12 rounded-full"
                                alt="Reviewer 1">
                            <div>
                                <h4 class="font-bold text-gray-800">Sarah M.</h4>
                                <p class="text-sm text-gray-500">United States
                                </p>
                                <span class="text-yellow-400 ml-2 space-x-1">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </span>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 2 -->
                    <div class="swiper-slide bg-gray-200 p-6 rounded-2xl shadow-md">
                        <p class="text-gray-700 text-base mb-4">"I loved every bit of my trip. The team was very helpful
                            and the views were breathtaking!"...<a href=""
                                class="inline  text-sm font-medium text-blue-600 hover:underline ml-1">
                                See More
                            </a> </p>
                        <div class="flex items-center gap-4 mt-6">
                            <img src="https://randomuser.me/api/portraits/men/2.jpg" class="w-12 h-12 rounded-full"
                                alt="Reviewer 2">
                            <div>
                                <h4 class="font-bold text-gray-800">John D.</h4>
                                <p class="text-sm text-gray-500">Australia</p>
                                <span class="text-yellow-400 ml-2 space-x-1">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </span>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 3 -->
                    <div class="swiper-slide bg-gray-200 p-6 rounded-2xl shadow-md">
                        <p class="text-gray-700 text-base mb-4">"One of the best trekking companies in Nepal! Safe, fun,
                            and incredibly scenic."...<a href=""
                                class="inline  text-sm font-medium text-blue-600 hover:underline ml-1">
                                See More
                            </a></p>
                        <div class="flex items-center gap-4 mt-6">
                            <img src="https://randomuser.me/api/portraits/women/3.jpg" class="w-12 h-12 rounded-full"
                                alt="Reviewer 3">
                            <div>
                                <h4 class="font-bold text-gray-800">Emma W.</h4>
                                <p class="text-sm text-gray-500">UK</p>
                                <span class="text-yellow-400 ml-2 space-x-1">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide bg-gray-200 p-6 rounded-2xl shadow-md">
                        <p class="text-gray-700 text-base mb-4">"One of the best trekking companies in Nepal! Safe, fun,
                            and incredibly scenic."..<a href=""
                                class="inline  text-sm font-medium text-blue-600 hover:underline ml-1">
                                See More
                            </a></p>
                        <div class="flex items-center gap-4 mt-6">
                            <img src="https://randomuser.me/api/portraits/women/3.jpg" class="w-12 h-12 rounded-full"
                                alt="Reviewer 3">
                            <div>
                                <h4 class="font-bold text-gray-800">Emma W.</h4>
                                <p class="text-sm text-gray-500">UK</p>
                                <span class="text-yellow-400 ml-2 space-x-1">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide bg-gray-200 p-6 rounded-2xl shadow-md">
                        <p class="text-gray-700 text-base mb-4">"Amazing experience! The Everest Base Camp trek was
                            unforgettable. Everything was perfectly organized."</p>
                        <div class="flex items-center gap-4 mt-6">
                            <img src="https://randomuser.me/api/portraits/women/1.jpg" class="w-12 h-12 rounded-full"
                                alt="Reviewer 1">
                            <div>
                                <h4 class="font-bold text-gray-800">Sarah M.</h4>
                                <p class="text-sm text-gray-500">United States</p>
                                <span class="text-yellow-400 ml-2 space-x-1">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </span>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 2 -->
                    <div class="swiper-slide bg-gray-200 p-6 rounded-2xl shadow-md">
                        <p class="text-gray-700 text-base mb-4">"I loved every bit of my trip. The team was very helpful
                            and the views were breathtaking!"</p>
                        <div class="flex items-center gap-4 mt-6">
                            <img src="https://randomuser.me/api/portraits/men/2.jpg" class="w-12 h-12 rounded-full"
                                alt="Reviewer 2">
                            <div>
                                <h4 class="font-bold text-gray-800">John D.</h4>
                                <p class="text-sm text-gray-500">Australia</p>
                                <span class="text-yellow-400 ml-2 space-x-1">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </span>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 3 -->
                    <div class="swiper-slide bg-gray-200 p-6 rounded-2xl shadow-md">
                        <p class="text-gray-700 text-base mb-4">"One of the best trekking companies in Nepal! Safe, fun,
                            and incredibly scenic."</p>
                        <div class="flex items-center gap-4 mt-6">
                            <img src="https://randomuser.me/api/portraits/women/3.jpg" class="w-12 h-12 rounded-full"
                                alt="Reviewer 3">
                            <div>
                                <h4 class="font-bold text-gray-800">Emma W.</h4>
                                <p class="text-sm text-gray-500">UK</p>
                                <span class="text-yellow-400 ml-2 space-x-1">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide bg-gray-200 p-6 rounded-2xl shadow-md">
                        <p class="text-gray-700 text-base mb-4">"One of the best trekking companies in Nepal! Safe, fun,
                            and incredibly scenic."</p>
                        <div class="flex items-center gap-4 mt-6">
                            <img src="https://randomuser.me/api/portraits/women/3.jpg" class="w-12 h-12 rounded-full"
                                alt="Reviewer 3">
                            <div>
                                <h4 class="font-bold text-gray-800">Emma W.</h4>
                                <p class="text-sm text-gray-500">UK</p>
                                <span class="text-yellow-400 ml-2 space-x-1">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- Add more slides as needed -->

                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>

                <!-- Swiper Pagination -->
                <div class="swiper-pagination mt-6"></div>
            </div>
            <div class="text-center mt-10">
                <a href="#all-reviews"
                    class="inline-block px-6 py-3 text-white bg-green-700 font-semibold rounded-full shadow-md hover:shadow-xl hover:bg-green-900 transition duration-300 text-base md:text-lg">
                    See All Reviews
                </a>
            </div>
        </div>
    </section>



    {{-- destination section --}}

    <section class="bg-white py-16 px-4">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-12 font-caveat">
                <h2 class="text-h3 md:text-h1 font-bold text-green-800">Top Destinations</h2>
                <p class="text-gray-600 text-para mt-2 max-w-xl mx-auto">
                    Discover the most popular places to explore and experience unforgettable journeys.
                </p>
            </div>

            <div class="flex flex-wrap gap-6 justify-center">
                <!-- Destination Card -->
                <div
                    class="relative w-full sm:w-[48%] lg:w-[31%] xl:w-[23%] overflow-hidden group cursor-pointer rounded-lg shadow-lg">
                    <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=800&q=80"
                        alt="Nepal"
                        class="w-full h-80 object-cover transition-transform duration-500 ease-in-out group-hover:scale-105 rounded-lg" />
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex flex-col justify-end p-6 text-white rounded-lg">
                        <h3 class="text-3xl font-extrabold mb-2">Nepal</h3>
                        <p class="text-base mb-4 leading-relaxed max-w-[260px]">
                            The Himalayan kingdom known for Mount Everest and diverse trekking routes.
                        </p>
                        <a href="#"
                            class="w-auto max-w-[120px] text-center inline-block bg-gradient-to-r from-green-400 to-blue-600 text-white px-5 py-3 rounded-full font-semibold shadow-lg hover:brightness-110 transition">
                            25 Trips
                        </a>
                    </div>
                </div>

                <!-- Repeat similar blocks for Bhutan, India, Tibet, etc... -->

                <div
                    class="relative w-full sm:w-[48%] lg:w-[31%] xl:w-[23%] overflow-hidden group cursor-pointer rounded-lg shadow-lg">
                    <img src="https://images.unsplash.com/photo-1504384308090-c894fdcc538d?auto=format&fit=crop&w=800&q=80"
                        alt="Bhutan"
                        class="w-full h-80 object-cover transition-transform duration-500 ease-in-out group-hover:scale-105 rounded-lg" />
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex flex-col justify-end p-6 text-white rounded-lg">
                        <h3 class="text-3xl font-extrabold mb-2">Bhutan</h3>
                        <p class="text-base mb-4 leading-relaxed max-w-[260px]">
                            The land of the Thunder Dragon, famous for its monasteries and culture.
                        </p>
                        <a href="#"
                            class="w-auto max-w-[120px] text-center inline-block bg-gradient-to-r from-green-400 to-blue-600 text-white px-5 py-3 rounded-full font-semibold shadow-lg hover:brightness-110 transition">
                            12 Trips
                        </a>
                    </div>
                </div>

                <div
                    class="relative w-full sm:w-[48%] lg:w-[31%] xl:w-[23%] overflow-hidden group cursor-pointer rounded-lg shadow-lg">
                    <img src="https://images.unsplash.com/photo-1500534623283-312aade485b7?auto=format&fit=crop&w=800&q=80"
                        alt="Tibet"
                        class="w-full h-80 object-cover transition-transform duration-500 ease-in-out group-hover:scale-105 rounded-lg" />
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex flex-col justify-end p-6 text-white rounded-lg">
                        <h3 class="text-3xl font-extrabold mb-2">Tibet</h3>
                        <p class="text-base mb-4 leading-relaxed max-w-[260px]">
                            The Roof of the World, offering stunning landscapes and rich Tibetan culture.
                        </p>
                        <a href="#"
                            class="w-auto max-w-[120px] text-center inline-block bg-gradient-to-r from-green-400 to-blue-600 text-white px-5 py-3 rounded-full font-semibold shadow-lg hover:brightness-110 transition">
                            20 Trips
                        </a>
                    </div>
                </div>

                <!-- Repeat similar blocks for Bhutan, India, Tibet, etc... -->

                <div
                    class="relative w-full sm:w-[48%] lg:w-[31%] xl:w-[23%] overflow-hidden group cursor-pointer rounded-lg shadow-lg">
                    <img src="https://images.unsplash.com/photo-1501594907352-04cda38ebc29?auto=format&fit=crop&w=800&q=80"
                        alt="India"
                        class="w-full h-80 object-cover transition-transform duration-500 ease-in-out group-hover:scale-105 rounded-lg" />
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex flex-col justify-end p-6 text-white rounded-lg">
                        <h3 class="text-3xl font-extrabold mb-2">India</h3>
                        <p class="text-base mb-4 leading-relaxed max-w-[260px]">
                            A vast and diverse country with spiritual heritage and majestic landscapes.
                        </p>
                        <a href="#"
                            class="w-auto max-w-[120px] text-center inline-block bg-gradient-to-r from-green-400 to-blue-600 text-white px-5 py-3 rounded-full font-semibold shadow-lg hover:brightness-110 transition">
                            10 Trips
                        </a>
                    </div>
                </div>


                <!-- Add more destination cards similarly -->

            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script>
        var TxtType = function(el, toRotate, period) {
            this.toRotate = toRotate;
            this.el = el;
            this.loopNum = 0;
            this.period = parseInt(period, 10) || 2000;
            this.txt = '';
            this.tick();
            this.isDeleting = false;
        };

        TxtType.prototype.tick = function() {
            var i = this.loopNum % this.toRotate.length;
            var fullTxt = this.toRotate[i];

            if (this.isDeleting) {
                this.txt = fullTxt.substring(0, this.txt.length - 1);
            } else {
                this.txt = fullTxt.substring(0, this.txt.length + 1);
            }

            this.el.innerHTML = '<span class="wrap">' + this.txt + '</span>';

            var that = this;
            var delta = 200 - Math.random() * 100;

            if (this.isDeleting) {
                delta /= 2;
            }

            if (!this.isDeleting && this.txt === fullTxt) {
                delta = this.period;
                this.isDeleting = true;
            } else if (this.isDeleting && this.txt === '') {
                this.isDeleting = false;
                this.loopNum++;
                delta = 800;
            }

            setTimeout(function() {
                that.tick();
            }, delta);
        };

        window.onload = function() {
            var elements = document.getElementsByClassName('typewrite');
            for (var i = 0; i < elements.length; i++) {
                var toRotate = elements[i].getAttribute('data-type');
                var period = elements[i].getAttribute('data-period');
                if (toRotate) {
                    new TxtType(elements[i], JSON.parse(toRotate), period);
                }
            }
            // INJECT CSS
            var css = document.createElement("style");
            css.type = "text/css";
            css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
            document.body.appendChild(css);
        };



        //for review

        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 1,
            spaceBetween: 20,
            loop: true,
            autoplay: {
                delay: 1500,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },

            breakpoints: {
                640: {
                    slidesPerView: 1,
                },
                768: {
                    slidesPerView: 2,
                },
                1024: {
                    slidesPerView: 3,
                },
            },
        });
    </script>
@endpush

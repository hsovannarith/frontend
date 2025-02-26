<nav class="bg-white border-gray-200">
    <div class="max-w-screen-2xl flex flex-wrap items-center justify-between mx-auto p-2 sm:p-4">
        <a href="" class="flex items-center space-x-3 mt-1 md:mt-0">
            <img src="../img/rupp.png" alt="" class="h-10 sm:h-12 md:h-16">
            <div class="flex flex-col text-left items-start text-red-800 uppercase">
                <span class="text-xs sm:text-sm md:text-base sm:font-semibold whitespace-nowrap">Faculty of Science</span>
                <span class="text-xs sm:text-sm md:text-base sm:font-semibold whitespace-nowrap">Department of Computer Science</span>
            </div>
        </a>

        <!-- Search -->
        <div class="flex items-center 2xl:order-2 space-x-1 lg:space-x-0">
            <div class="border-r-1 pr-4 cursor-pointer border-gray-400" id="search-icon">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                </svg>
            </div>
            <button type="button" data-dropdown-toggle="language-dropdown-menu"
                class=" inline-flex items-center font-medium justify-center px-4 py-2 text-sm text-gray-900 rounded-lg cursor-pointer hover:bg-gray-100">
                <img src="../img/us.png" alt="" class="h-5 w-5 me-2">
                <span class="hidden lg:block">English (US)</span>
            </button>
            <!-- Dropdown -->
            <div class="absolute left-0 mt-2 z-50 hidden text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow-lg w-12 lg:w-36"
                id="language-dropdown-menu">
                <ul class="py-2 font-medium" role="none">
                    <li>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 " role="menuitem">
                            <div class="inline-flex items-center">
                                <img src="../img/us.png" alt="" class="h-4 w-4 me-2">
                                <span class="hidden lg:block">English (US)</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 " role="menuitem">
                            <div class="inline-flex items-center">
                                <img src="../img/kh.png" alt="" class="h-4 w-4 me-2">
                                <span class="hidden lg:block">Khmer</span>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
            <button data-collapse-toggle="navbar-language" type="button"
                class="cursor-pointer inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg 2xl:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 "
                aria-controls="navbar-language" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
        </div>

        <!-- Search Fields (with animation) -->
        <div id="search-bar"
            class="w-full bg-red-900 p-3 opacity-0 -translate-y-full fixed top-0 left-0 z-50 transition-all duration-500 ease-in-out hidden">
            <div class="max-w-screen-lg mx-auto flex items-center justify-between">
                <!-- Search Input -->
                <div class="flex items-center bg-white rounded-full px-3 py-1 w-full max-w-lg mx-auto">
                    <input type="text" id="search-input" class="w-full px-2 py-1 text-sm outline-none text-gray-900"
                        placeholder="Search...">
                    <button class="text-gray-500 hover:text-gray-700">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                        </svg>
                    </button>
                </div>

                <!-- Close Button -->
                <button id="close-search" class="text-white ml-2 hover:text-gray-300">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>

        <div class="items-center justify-between hidden w-full 2xl:flex 2xl:w-auto lg:order-1 uppercase" id="navbar-language">
            <ul
                class="flex flex-col font-medium p-4 2xl:p-0 mt-4 border border-gray-100 uppercase rounded-lg bg-gray-50 2xl:space-x-8 rtl:space-x-reverse 2xl:flex-row 2xl:mt-0 2xl:border-0 2xl:bg-white">
                <li>
                    <a href="home.php"
                        class="block py-2 px-3 text-white bg-red-700 rounded-sm 2xl:bg-transparent 2xl:text-red-700 2xl:p-0"
                        aria-current="page">Home</a>
                </li>

                <!-- Academics -->
                <li class="relative group">
                    <button id="academics-toggle"
                        class="flex justify-between items-center w-full py-2 px-3 2xl:p-0 text-gray-900 rounded-sm hover:bg-red-100 2xl:hover:bg-transparent 2xl:hover:text-red-700 z-50"
                        style="text-transform: uppercase;">
                        Academics
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                            class="w-4 h-4 ml-1 transition-transform duration-300">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                        </svg>
                    </button>

                    <!-- Submenu for Desktop (Hover) -->
                    <ul id="academics-submenu-desktop" class="hidden 2xl:block opacity-0 scale-95 transform transition-all duration-500 ease-in-out z-50 mt-2
                                   absolute left-0 top-full w-44 bg-white 2xl:border 2xl:border-gray-200 shadow-lg rounded-md
                                   group-hover:opacity-100 group-hover:scale-100 group-hover:block">
                        <li>
                            <a href="undergraduate.php" class="hidden 2xl:block px-4 py-2 text-gray-900 hover:bg-red-100 hover:text-red-700">
                                Undergraduate
                            </a>
                        </li>
                        <li>
                            <a href="graduate.php" class="hidden 2xl:block px-4 py-2 text-gray-900 hover:bg-red-100 hover:text-red-700">
                                Graduate
                            </a>
                        </li>
                    </ul>

                    <!-- Submenu for Mobile & Tablet (Click) -->
                    <ul id="academics-submenu-mobile" class="hidden opacity-0 scale-95 transform transition-all duration-500 ease-in-out z-50
                                   w-full bg-gray-50 ">
                        <li>
                            <a href="undergraduate.php" class="pl-6 block pr-4 py-2 text-gray-900 hover:bg-red-100 hover:text-red-700">
                                Undergraduate
                            </a>
                        </li>
                        <li>
                            <a href="graduate.php" class="pl-6 block pr-4 py-2 text-gray-900 hover:bg-red-100 hover:text-red-700">
                                Graduate
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- People -->
                <li class="relative group">
                    <button id="people-toggle"
                        class="flex justify-between items-center w-full py-2 px-3 2xl:p-0 text-gray-900 rounded-sm hover:bg-red-100 2xl:hover:bg-transparent 2xl:hover:text-red-700 z-50"
                        style="text-transform: uppercase;">
                        People
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                            class="w-4 h-4 ml-1 transition-transform duration-300">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                        </svg>
                    </button>

                    <!-- Submenu for Desktop (Hover) -->
                    <ul id="people-submenu-desktop" class="hidden 2xl:block opacity-0 scale-95 transform transition-all duration-500 ease-in-out z-50 mt-2
                                                       absolute left-0 top-full w-44 bg-white 2xl:border 2xl:border-gray-200 shadow-lg rounded-md
                                                       group-hover:opacity-100 group-hover:scale-100 group-hover:block">
                        <li>
                            <a href="faculty.php"
                                class="hidden 2xl:block px-4 py-2 text-gray-900 hover:bg-red-100 hover:text-red-700">
                                Faculty
                            </a>
                        </li>
                        <li>
                            <a href="staff.php"
                                class="hidden 2xl:block px-4 py-2 text-gray-900 hover:bg-red-100 hover:text-red-700">
                                Staff
                            </a>
                        </li>
                    </ul>

                    <!-- Submenu for Mobile & Tablet (Click) -->
                    <ul id="people-submenu-mobile" class="hidden opacity-0 scale-95 transform transition-all duration-500 ease-in-out z-50
                                                       w-full bg-gray-50 ">
                        <li>
                            <a href="faculty.php" class="pl-6 block pr-4 py-2 text-gray-900 hover:bg-red-100 hover:text-red-700">
                                Faculty
                            </a>
                        </li>
                        <li>
                            <a href="staff.php" class="pl-6 block pr-4 py-2 text-gray-900 hover:bg-red-100 hover:text-red-700">
                                Staff
                            </a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="research.php"
                        class="block py-2 px-3 2xl:p-0 text-gray-900 rounded-sm hover:bg-red-100 2xl:hover:bg-transparent 2xl:hover:text-red-700">
                        Research
                    </a>
                </li>
                <li>
                    <a href="facilities.php"
                        class="block py-2 px-3 2xl:p-0 text-gray-900 rounded-sm hover:bg-red-100 2xl:hover:bg-transparent 2xl:hover:text-red-700">
                        Facilities
                    </a>
                </li>
                <li>
                    <a href="news.php"
                        class="block py-2 px-3 2xl:p-0 text-gray-900 rounded-sm hover:bg-red-100 2xl:hover:bg-transparent 2xl:hover:text-red-700">
                        News
                    </a>
                </li>
                <li>
                    <a href="about.php"
                        class="block py-2 px-3 2xl:p-0 text-gray-900 rounded-sm hover:bg-red-100 2xl:hover:bg-transparent 2xl:hover:text-red-700">
                        About
                    </a>
                </li>
                <li>
                    <a href="contact.php"
                        class="block py-2 px-3 2xl:p-0 text-gray-900 rounded-sm hover:bg-red-100 2xl:hover:bg-transparent 2xl:hover:text-red-700">
                        Contact
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
    <header class="header bg-white dark:bg-slate-800 absolute top-0 left-0 w-full flex items-center z-20 transition-colors duration-300">
        <div class="container">
            <nav class="bg-white dark:bg-slate-800 w-full z-20 top-0 left-0 transition-colors duration-300">
                <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto py-4 xl:px-3 px-4">
                    <a href="/" class="flex items-center">
                        <img class="h-8 mr-3 bg-gray-100 rounded-full" src="/img/profileku.png?v=<?= date('YmdHis') ?>"
                            alt="tantan">
                        <span class="self-center text-xl text-primary font-bold uppercase">Tantan taryana</span>
                    </a>
                    <div class="flex items-center lg:order-2">
                        <!-- Dark Mode Toggle -->
                        <button id="theme-toggle" type="button" aria-label="Toggle Dark Mode"
                            class="text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 
                            focus:outline-none focus:ring-2 focus:ring-gray-200 dark:focus:ring-gray-700 
                            rounded-lg text-sm p-2.5 mr-2 transition-colors duration-200">
                            <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                            </svg>
                            <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" fill-rule="evenodd" clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        
                        <a href="https://wa.me/6281315048059" target="_blank" rel="noopener"
                        class="hidden md:flex bg-transparent hover:bg-primary hover:bg-opacity-80
                                text-primary font-medium hover:text-white mx-8 border border-primary
                                hover:border-transparent rounded-full tracking-wide text-sm
                                px-3 py-2 text-center mr-3 lg:mr-0">
                            
                            <!-- WhatsApp Icon -->
                            <svg class="h-5 w-5 mr-2" viewBox="0 0 32 32" fill="currentColor"
                                xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path d="M19.11 17.33c-.28-.14-1.65-.81-1.91-.9-.26-.1-.45-.14-.64.14s-.73.9-.9 1.08c-.16.18-.33.2-.61.07-.28-.14-1.18-.43-2.24-1.37-.83-.74-1.39-1.65-1.55-1.93-.16-.28-.02-.43.12-.57.13-.13.28-.33.43-.5.14-.16.19-.28.28-.47.1-.18.05-.35-.02-.5-.07-.14-.64-1.55-.88-2.12-.23-.56-.47-.48-.64-.49h-.55c-.18 0-.5.07-.76.35s-1 1-1 2.44 1.02 2.83 1.16 3.02c.14.18 2.01 3.07 4.87 4.3.68.29 1.21.46 1.63.59.68.22 1.3.19 1.79.11.55-.08 1.65-.67 1.88-1.32.23-.65.23-1.2.16-1.32-.07-.12-.26-.19-.54-.33z"/>
                                <path d="M16.02 3C9.39 3 4 8.38 4 15c0 2.62.85 5.05 2.28 7.02L4 29l7.18-2.25A11.94 11.94 0 0016.02 27C22.64 27 28 21.62 28 15S22.64 3 16.02 3zm0 21.82c-2.12 0-4.1-.62-5.77-1.69l-.41-.25-4.25 1.33 1.35-4.14-.27-.42A9.79 9.79 0 016.23 15c0-5.38 4.39-9.76 9.79-9.76S25.8 9.62 25.8 15s-4.4 9.82-9.78 9.82z"/>
                            </svg>

                            Let's talk
                        </a>
                        

                        <!-- Hamburger -->
                        <button id="hamburger" name="hamburger" aria-label="Menu" type="button"
                            class="block items-center p-0 text-sm text-secondary dark:text-gray-400 rounded-lg
                                hover:bg-gray-200 dark:hover:bg-gray-700 focus:outline-none focus:ring-2
                                focus:ring-gray-200 dark:focus:ring-gray-700 lg:hidden transition-colors duration-200">
                            <svg fill="none" stroke="currentColor" class="h-8 w-8 inline-flex"
                                stroke-width="1.5" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3.75 6.75h16.5M3.75 12h16.5M12 17.25h8.25"></path>
                            </svg>
                        </button>
                    </div>
                    <div class="items-center justify-between hidden absolute bg-white dark:bg-slate-800 shadow-lg rounded-lg max-w-[250px] my-1 right-6 w-full top-full lg:my-0 lg:flex lg:static lg:bg-white dark:lg:bg-slate-800 lg:max-w-full lg:shadow-none lg:rounded-none lg:w-auto lg:order-1 transition-colors duration-300"
                        id="nav-menu">
                        <ul
                            class="flex flex-col p-2 lg:p-0 mt-2 font-medium lg:flex-row lg:space-x-1 lg:mt-0 lg:border-0 lg:bg-white dark:lg:bg-slate-800">
                            <li class="section-active">
                                <a href="#about"
                                    class="list nav-active block py-2 pl-3 pr-4 text-sm text-gray-900 dark:text-gray-200 uppercase hover:text-primary dark:hover:text-primary transition duration-500">About</a>
                            </li>
                            <li>
                                <a href="#education"
                                    class="list block py-2 pl-3 pr-4 text-sm text-gray-900 dark:text-gray-200 uppercase hover:text-primary dark:hover:text-primary transition duration-500">Education</a>
                            </li>
                            <li>
                                <a href="#skills"
                                    class="list block py-2 pl-3 pr-4 text-sm text-gray-900 dark:text-gray-200 uppercase hover:text-primary dark:hover:text-primary transition duration-500">Skills</a>
                            </li>
                            <li>
                                <a href="#projects"
                                    class="list block py-2 pl-3 pr-4 text-sm text-gray-900 dark:text-gray-200 uppercase hover:text-primary dark:hover:text-primary transition duration-500">Projects</a>
                            </li>
                            <li>
                                <a href="#services"
                                    class="list block py-2 pl-3 pr-4 text-sm text-gray-900 dark:text-gray-200 uppercase hover:text-primary dark:hover:text-primary transition duration-500">Services</a>
                            </li>
                            @auth
                                <li>
                                    <a href="/dashboard"
                                        class="list block hover:text-white border border-primary hover:bg-primary hover:bg-opacity-80 rounded-full py-2 pl-3 pr-4 text-sm text-dark dark:text-gray-200 uppercase transition duration-500"
                                        target="_blank">Manage</a>
                                </li>
                            @endauth
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!-- HEADER END -->
    
    <script>
        // Update theme toggle icons based on current theme
        const themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
        const themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');
        
        if (localStorage.getItem('theme') === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            themeToggleLightIcon.classList.remove('hidden');
        } else {
            themeToggleDarkIcon.classList.remove('hidden');
        }
        
        const themeToggleBtn = document.getElementById('theme-toggle');
        
        if (themeToggleBtn) {
            themeToggleBtn.addEventListener('click', function() {
                // toggle icons
                themeToggleDarkIcon.classList.toggle('hidden');
                themeToggleLightIcon.classList.toggle('hidden');
            });
        }
    </script>

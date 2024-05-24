    <nav class="bg-black border-gray-20">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
                <span class="text-white text-3xl font-semibold whitespace-nowrap">Ticket</span>
            </a>
            <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
            <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                <ul class="flex flex-col p-4 md:p-0 mt-4  md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0">
                    <a href="<?= base_url('Home') ?>" class="block py-2 px-3 text-white hover:text-slate-300">Home</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 px-3 text-white hover:text-slate-300">Line Up</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 px-3 text-white hover:text-slate-300">Partnership</a>
                    </li>
                    <li>
                        <a href="<?= base_url('Dashboard') ?>" class="block py-2 px-3 text-white hover:text-slate-300">Dashboard</a>
                    </li>
                    <?php if ($this->session->userdata('email')) : ?>
                        <li>
                            <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="text-white bg-purple-500 hover:bg-purple-600 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center" type="button">Hai, <?= (($this->session->fullname) ?? '') ?> <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                                </svg>
                            </button>
                            <!-- Dropdown menu -->
                            <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                                    <li>
                                        <a href="<?= base_url('Auth/Logout') ?>" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Logout</a>
                                    </li>

                                </ul>
                            </div>

                        </li>
                    <?php else : ?>
                        <li>
                            <a href="<?= base_url('Auth') ?>" class="block py-2 px-3 text-white hover:text-slate-300">Login</a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>
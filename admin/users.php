<?php require_once("./addons/session.php"); ?>
<?php require_once('../db/config.php'); ?>
<?php require_once('../models/Review.php'); ?>
<?php require_once('../models/Service.php'); ?>
<?php require_once('../models/User.php'); ?>
<?php require_once('../utils/country_fee.php'); ?>
<?php require_once('../functions/index.php'); ?>


<?php 
    $active = $title = "users";
    $users = new User($connect);
    $services = new Service($connect);
?>

<!doctype html>
<html lang="en">
    <?php include('./components/main_header.php'); ?>
        <?php include('./components/alert.php'); ?>
            <main>
                <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">
                    <div class="sm:flex sm:justify-between sm:items-center mb-8">
                        <div class="mb-4 sm:mb-0">
                            <h1 class="text-2xl md:text-3xl text-gray-800 font-bold">Manage Users</h1>
                        </div>
                        <div class="grid grid-flow-col sm:auto-cols-max justify-start sm:justify-end gap-2">
                            <form class="relative">
                                <label for="action-search" class="sr-only">Search</label> 
                                <input
                                    id="action-search" class="form-input pl-9 focus:border-gray-300" type="search"
                                    placeholder="Search…" /> 
                                <button class="absolute inset-0 right-auto group"
                                    type="submit" aria-label="Search">
                                    <svg
                                        class="w-4 h-4 shrink-0 fill-current text-gray-400 group-hover:text-gray-500 ml-3 mr-2"
                                        viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M7 14c-3.86 0-7-3.14-7-7s3.14-7 7-7 7 3.14 7 7-3.14 7-7 7zM7 2C4.243 2 2 4.243 2 7s2.243 5 5 5 5-2.243 5-5-2.243-5-5-5z" />
                                        <path
                                            d="M15.707 14.293L13.314 11.9a8.019 8.019 0 01-1.414 1.414l2.393 2.393a.997.997 0 001.414 0 .999.999 0 000-1.414z" />
                                        </svg>
                                    </button>
                                </form>
                        </div>
                    </div>
                    <?php if(!isset($_GET['q'])): ?>
                        <div class="grid grid-cols-12 gap-6">
                            <?php if(count($users->get_all_users())): ?>
                                <?php foreach($users->get_all_users() as $user):  ?>
                                    <div class="col-span-full sm:col-span-6 xl:col-span-3 bg-white shadow-lg rounded-sm border border-gray-200">
                                        <div class="flex flex-col h-full">
                                            <div class="grow p-5">
                                                <?=  print_r($user); ?>
                                                <div class="relative">
                                                    <div class="absolute top-0 right-0 inline-flex" x-data="{ open: false }">
                                                        <button class="text-gray-400 hover:text-gray-500 rounded-full" :class="{ 'bg-gray-100 text-gray-500': open }" aria-haspopup="true" @click.prevent="open = !open" :aria-expanded="open" aria-expanded="false">
                                                            <span class="sr-only">Menu</span> 
                                                            <svg class="w-8 h-8 fill-current" viewBox="0 0 32 32">
                                                                <circle cx="16" cy="16" r="2"></circle>
                                                                <circle cx="10" cy="16" r="2"></circle>
                                                                <circle cx="22" cy="16" r="2"></circle>
                                                            </svg>
                                                        </button>
                                                        <div class="origin-top-right z-10 absolute top-full right-0 min-w-36 bg-white border border-gray-200 py-1.5 rounded shadow-lg overflow-hidden mt-1" @click.outside="open = false" @keydown.escape.window="open = false" x-show="open" x-transition:enter="transition ease-out duration-200 transform" x-transition:enter-start="opacity-0 -translate-y-2" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-out duration-200" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" style="display: none;">
                                                            <ul>
                                                                <li>
                                                                    <a class="font-medium text-sm text-gray-600 hover:text-gray-800 flex py-1 px-3" href="#0" @click="open = false" @focus="open = true" @focusout="open = false">Option 1</a>
                                                                </li>

                                                                <li>
                                                                    <a class="font-medium text-sm text-gray-600 hover:text-gray-800 flex py-1 px-3" href="#0" @click="open = false" @focus="open = true" @focusout="open = false">Option 2</a>
                                                                </li>

                                                                <li>
                                                                    <a class="font-medium text-sm text-red-500 hover:text-red-600 flex py-1 px-3" href="#0" @click="open = false" @focus="open = true" @focusout="open = false">Remove</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <header>
                                                    <div class="flex justify-center mb-2">
                                                        <a class="relative inline-flex items-start" href="#0">
                                                            <div class="absolute top-0 right-0 -mr-2 bg-white rounded-full shadow" aria-hidden="true">
                                                                <svg class="w-8 h-8 fill-current text-yellow-500" viewBox="0 0 32 32">
                                                                    <path d="M21 14.077a.75.75 0 01-.75-.75 1.5 1.5 0 00-1.5-1.5.75.75 0 110-1.5 1.5 1.5 0 001.5-1.5.75.75 0 111.5 0 1.5 1.5 0 001.5 1.5.75.75 0 010 1.5 1.5 1.5 0 00-1.5 1.5.75.75 0 01-.75.75zM14 24.077a1 1 0 01-1-1 4 4 0 00-4-4 1 1 0 110-2 4 4 0 004-4 1 1 0 012 0 4 4 0 004 4 1 1 0 010 2 4 4 0 00-4 4 1 1 0 01-1 1z"></path>
                                                                </svg>
                                                            </div>
                                                            <img class="rounded-full" src="images/user-64-02.jpg" alt="User 02" width="64" height="64">
                                                        </a>
                                                    </div>

                                                    <div class="text-center">
                                                        <a class="inline-flex text-gray-800 hover:text-gray-900" href="#0">
                                                            <h2 class="text-xl leading-snug justify-center font-semibold">
                                                                <?= "{$user['firstname']} {$user['lastname']}" ?>
                                                            </h2>
                                                        </a>
                                                    </div>
                                                    <div class="flex justify-center items-center">
                                                        <span class="text-sm font-medium text-gray-400 -mt-0.5 mr-1">-&gt;</span> 
                                                        <span>🇫🇷</span>
                                                    </div>
                                                </header>
                                                <div class="text-center mt-2">
                                                    <div class="text-sm">
                                                        <?= $services->getUserService($user['service']); ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="border-t border-gray-200">
                                                <a class="block text-center text-sm text-indigo-500 hover:text-indigo-600 font-medium px-3 py-4" href="messages.html">
                                                    <div class="flex items-center justify-center">
                                                        <svg class="w-4 h-4 fill-current shrink-0 mr-2" viewBox="0 0 16 16">
                                                            <path d="M8 0C3.6 0 0 3.1 0 7s3.6 7 8 7h.6l5.4 2v-4.4c1.2-1.2 2-2.8 2-4.6 0-3.9-3.6-7-8-7zm4 10.8v2.3L8.9 12H8c-3.3 0-6-2.2-6-5s2.7-5 6-5 6 2.2 6 5c0 2.2-2 3.8-2 3.8z"></path>
                                                        </svg> 
                                                        <span>Send Message</span>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>

                            <?php else: ?>
                                <div class="h-56 flex items-center col-span-full justify-center">
                                    <h4 class="text-gray-500">No reviews found!</h4>
                                </div>
                            <?php endif; ?>
                        </div>
                    <?php else: ?>
                        <div class="grid grid-cols-12 gap-6">
                            <?php if(count($reviews->getAllReviews())): ?>
                                <?php foreach($reviews->getAllReviews() as $review): ?>
                                    
                                <?php endforeach; ?>
                            <?php else: ?>
                                <div class="h-56 flex items-center col-span-full justify-center">
                                    <h4 class="text-gray-500">No reviews found!</h4>
                                </div>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>
                </div>
                <?php if(count([])): ?>
                    <div class="mt-8">
                        <div class="flex justify-center">
                            <nav class="flex" role="navigation" aria-label="Navigation">
                                <div class="mr-2">
                                    <span class="inline-flex items-center justify-center rounded leading-5 px-2.5 py-2 bg-white border border-gray-200 text-gray-300">
                                        <span class="sr-only">Previous</span><wbr/> 
                                        <svg class="h-4 w-4 fill-current" viewBox="0 0 16 16">
                                            <path d="M9.4 13.4l1.4-1.4-4-4 4-4-1.4-1.4L4 8z" />
                                        </svg>
                                    </span>
                                </div>
                                <ul class="inline-flex text-sm font-medium -space-x-px shadow-sm">
                                    <li><span
                                            class="inline-flex items-center justify-center rounded-l leading-5 px-3.5 py-2 bg-white border border-gray-200 text-indigo-500">1</span>
                                    </li>
                                    <li><a class="inline-flex items-center justify-center leading-5 px-3.5 py-2 bg-white hover:bg-indigo-500 border border-gray-200 text-gray-600 hover:text-white"
                                            href="#0">2</a></li>
                                    <li><a class="inline-flex items-center justify-center leading-5 px-3.5 py-2 bg-white hover:bg-indigo-500 border border-gray-200 text-gray-600 hover:text-white"
                                            href="#0">3</a></li>
                                    <li><span
                                            class="inline-flex items-center justify-center leading-5 px-3.5 py-2 bg-white border border-gray-200 text-gray-400">…</span>
                                    </li>
                                    <li><a class="inline-flex items-center justify-center rounded-r leading-5 px-3.5 py-2 bg-white hover:bg-indigo-500 border border-gray-200 text-gray-600 hover:text-white"
                                            href="#0">9</a></li>
                                </ul>
                                <div class="ml-2">
                                    <a href="#0"
                                        class="inline-flex items-center justify-center rounded leading-5 px-2.5 py-2 bg-white hover:bg-indigo-500 border border-gray-200 text-gray-600 hover:text-white shadow-sm"><span
                                            class="sr-only">Next</span><wbr/> 
                                            <svg class="h-4 w-4 fill-current" viewBox="0 0 16 16">
                                                <path d="M6.6 13.4L5.2 12l4-4-4-4 1.4-1.4L12 8z" />
                                        </svg>
                                    </a>
                                </div>
                            </nav>
                        </div>
                    </div>
                <?php endif; ?>
            </main>
        </div>
    </div>
    <script src="main.75545896273710c7378c.js"></script>
</body>

</html>
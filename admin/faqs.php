<?php $title  ?>
<?php require_once("./addons/session.php"); ?>
<?php require_once('../db/config.php'); ?>
<?php require_once('../models/FAQs.php'); ?>
<?php require_once('../utils/country_fee.php'); ?>
<?php require_once('../functions/index.php'); ?>


<?php 
    $faqs = new FAQs($connect); 
?>

<!doctype html>
<html lang="en">
    <?php include('./components/main_header.php'); ?>

			<main>
                <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">
                    <div class="max-w-3xl m-auto">
                        <div class="mb-5 flex justify-between">
                            <h1 class="text-2xl md:text-3xl text-gray-800 font-bold">Manage FAQs</h1>

                            <div x-data="{ modalOpen: false }"><button class="btn bg-indigo-500 hover:bg-indigo-600 text-white" @click.prevent="modalOpen = true" aria-controls="feedback-modal">
                                <svg class="w-4 h-4 fill-current opacity-50 shrink-0" viewBox="0 0 16 16">
                                    <path d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z" />
                                </svg> 
                                <span class="hidden xs:block ml-2">Add FAQs</span>
                            </button>
                                <div class="fixed inset-0 bg-gray-900 bg-opacity-30 z-50 transition-opacity" x-show="modalOpen" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition ease-out duration-100" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" aria-hidden="true" x-cloak></div>
                                <div id="feedback-modal" class="fixed inset-0 z-50 overflow-hidden flex items-center my-4 justify-center transform px-4 sm:px-6" role="dialog" aria-modal="true" x-show="modalOpen" x-transition:enter="transition ease-in-out duration-200" x-transition:enter-start="opacity-0 translate-y-4" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in-out duration-200" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 translate-y-4" x-cloak>
                                    <form method="post" action="./handler/faqs_handler.php" class="bg-white rounded shadow-lg overflow-auto max-w-lg w-full max-h-full" @click.outside="modalOpen = false" @keydown.escape.window="modalOpen = false">
                                        <div class="px-5 py-3 border-b border-gray-200">
                                            <div class="flex justify-between items-center">
                                                <div class="font-semibold text-gray-800">Create a FAQ</div>
                                                <button class="text-gray-400 hover:text-gray-500" type="button" @click="modalOpen = false">
                                                    <div class="sr-only">Close</div><svg class="w-4 h-4 fill-current">
                                                        <path d="M7.95 6.536l4.242-4.243a1 1 0 111.415 1.414L9.364 7.95l4.243 4.242a1 1 0 11-1.415 1.415L7.95 9.364l-4.243 4.243a1 1 0 01-1.414-1.415L6.536 7.95 2.293 3.707a1 1 0 011.414-1.414L7.95 6.536z" /></svg>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="px-5 py-4">
                                            <div class="space-y-3">
                                                <div>
                                                    <label class="block text-sm font-medium mb-1" for="question">Question <span class="text-red-500">*</span></label> 
                                                    <input name="question" id="question" class="form-input w-full px-2 py-2" required />
                                                </div>

                                                <div>
                                                    <label class="block text-sm font-medium mb-1" for="tags">Tags <span class="text-red-500">*</span></label> 
                                                    <input name="tags" list="tag" id="tags" class="form-input w-full px-2 py-2" type="text" required />

                                                    <datalist id="tag">
                                                        <option>Payment</option>
                                                        <option>Usage</option>
                                                        <option>Time</option>
                                                    </datalist>
                                                </div>

                                                <div>
                                                    <label class="block text-sm font-medium mb-1" for="answer">Answer <span class="text-red-500">*</span></label> 
                                                    <textarea id="answer" name="answer" class="form-textarea w-full px-2 py-1" rows="4" required=""></textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="px-5 py-4 border-t border-gray-200">
                                            <div class="flex flex-wrap justify-end space-x-2">
                                                <button class="btn-sm border-gray-200 hover:border-gray-300 text-gray-600" type="button" @click="modalOpen = false">Cancel</button> 
                                            <button type="submit" name="add" class="btn-sm bg-indigo-500 hover:bg-indigo-600 text-white">Create</button></div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="mb-6">
                            <form class="relative"><label for="action-search" class="sr-only">Search</label> <input id="action-search" class="form-input pl-9 py-3 focus:border-gray-300 w-full" type="search" /> <button class="absolute inset-0 right-auto group" type="submit" aria-label="Search"><svg class="w-4 h-4 shrink-0 fill-current text-gray-400 group-hover:text-gray-500 ml-3 mr-2" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7 14c-3.86 0-7-3.14-7-7s3.14-7 7-7 7 3.14 7 7-3.14 7-7 7zM7 2C4.243 2 2 4.243 2 7s2.243 5 5 5 5-2.243 5-5-2.243-5-5-5z" />
                                        <path d="M15.707 14.293L13.314 11.9a8.019 8.019 0 01-1.414 1.414l2.393 2.393a.997.997 0 001.414 0 .999.999 0 000-1.414z" /></svg></button></form>
                        </div>
                        <div>
                            <?php if(count($faqs->get_all_questions())): ?>
                                <article class="py-4 border-b border-gray-200">
                                    <header class="flex items-start mb-2">
                                        <div class="mt-2 mr-3"><svg class="w-4 h-4 shrink-0 fill-current" viewBox="0 0 16 16">
                                                <path class="text-indigo-300" d="M4 8H0v4.9c0 1 .7 1.9 1.7 2.1 1.2.2 2.3-.8 2.3-2V8z" />
                                                <path class="text-indigo-500" d="M15 1H7c-.6 0-1 .4-1 1v11c0 .7-.2 1.4-.6 2H13c1.7 0 3-1.3 3-3V2c0-.6-.4-1-1-1z" /></svg></div>
                                        <h3 class="text-xl leading-snug text-gray-800 font-bold">How can the widget to my website?</h3>
                                    </header>
                                    <div class="pl-7">
                                        <div class="mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad minim veniam, quis nostrud exercitation ullamco.</div>
                                        <ul class="flex flex-wrap">
                                            <li class="flex items-center after:block after:content-['·'] last:after:content-[''] after:text-sm after:text-gray-400 after:px-2"><a class="text-sm font-medium text-indigo-500 hover:text-indigo-600" href="#0">General</a></li>
                                            <li class="flex items-center after:block after:content-['·'] last:after:content-[''] after:text-sm after:text-gray-400 after:px-2"><a class="text-sm font-medium text-indigo-500 hover:text-indigo-600" href="#0">Marketing</a></li>
                                        </ul>
                                    </div>
                                </article>  
                            <?php else: ?>
                                <div class="flex items-center h-56 justify-center">
                                    <p class="text-gray-400 text-sm">No FAQs Found!</p>
                                </div>
                            <?php endif;  ?>
                        </div>
                        <!-- <div class="mt-6">
                            <div class="flex justify-end"><a class="btn bg-white border-gray-200 hover:border-gray-300 text-indigo-500" href="#0">See All Questions -&gt;</a></div>
                        </div> -->
                    </div>
                </div>
            </main>
		</div>
	</div>
	<script src="main.75545896273710c7378c.js"></script>
</body>

</html>
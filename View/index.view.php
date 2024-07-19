<?php require "partials/head.php" ?>
<?php require "partials/banner.php" ?>

<?php require "partials/nav.php" ?>

    <main class="min-h-screen relative">
        <img class="absolute top-0 left-0 z-0 w-full h-full object-cover"
             src="https://images.unsplash.com/photo-1441984904996-e0b6ba687e04?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
             alt="">
        <div class="text-center pt-40 relative z-50">
            <h1 class="text-5xl font-bold text-white">Mid-Season Sale</h1>
            <button class="mt-10 bg-gray-400 py-3 px-8 rounded-xl text-white">
                <a href="#">Shop Collection</a>
            </button>
        </div>
    </main>
    <!--    img section-->
    <section class="img-section px-8 mx-auto absolute -bottom-80 mx-auto w-full">
        <div class="grid grid-cols-3 gap-60 font-bold">
            <div class="relative px-6">
                <img src="https://images.unsplash.com/photo-1521223890158-f9f7c3d5d504?q=80&w=1492&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                     alt="Image 1" class="object-cover rounded-xl" style="width:25rem; height:34rem">
                <div class="absolute bottom-5 left-8 text-orange-600">
                    <p class="">Shop the collection</p>
                    <p class="">Men's</p>
                </div>
            </div>
            <div class="relative px-6">
                <img src="https://images.unsplash.com/photo-1656074166642-c1c22b309d9a?q=80&w=1964&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                     alt="Image 1" class="object-cover rounded-xl" style="width:25rem; height:34rem">
                <div class="absolute bottom-5 left-8 text-orange-600">
                    <p class="">Shop the collection</p>
                    <p class="">Women's</p>
                </div>
            </div>
            <div class="relative px-6">
                <img src="https://plus.unsplash.com/premium_photo-1678739395192-bfdd13322d34?q=80&w=1932&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                     alt="Image 1" class="object-cover rounded-xl" style="width:25rem; height:34rem">
                <div class="absolute bottom-5 left-8 text-orange-600">
                    <p class="">Shop the collection</p>
                    <p class="">Bags</p>
                </div>
            </div>
        </div>
    </section>

    <!--    Trending section-->
    <section class="px-8 mt-80 min-h-screen">
        <div class="flex justify-between items-center">
            <h1 class="text-4xl">Treanding Products</h1>
            <a href="#"><h3 class="mr-14">Shop the collections</h3></a>
        </div>
        <div class="lg:grid lg:grid-cols-3 gap-60 mt-20">
            <article
                    class="transition-colors duration-300 hover:bg-gray-100 rounded-xl border border-black border-opacity-0 hover:border-opacity-5">
                <div class="px-5 py-6">
                    <div>
                        <img src="https://images.unsplash.com/photo-1511405946472-a37e3b5ccd47?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                             alt=""
                             class="rounded-xl" style="width:25rem; height:34rem">
                    </div>
                    <div class="mt-8 flex flex-col justify-between">
                        <header>
                            <div class="space-x-2">
                                <a href="#"
                                   class="border border-blue-400 uppercase px-3 py-1 rounded-full text-xs text-blue-400 font-semibold">Lether</a>
                                <a href="#"
                                   class="border border-red-400 uppercase px-3 py-1 rounded-full text-xs text-red-400 font-semibold">Bag</a>
                            </div>
                            <div class="mt-4">
                                <h1 class="text-3xl">ZARA Bag</h1>
                                <span class="block text-blue-400 text-xs mt-2">Published November <time>17,2024</time></span>
                            </div>
                        </header>
                        <div class="text-md mt-2">
                            <p>85$</p>
                        </div>
                    </div>
                </div>
            </article>
            <article
                    class="transition-colors duration-300 hover:bg-gray-100 rounded-xl border border-black border-opacity-0 hover:border-opacity-5">
                <div class="px-5 py-6">
                    <div>
                        <img src="https://images.unsplash.com/photo-1635715390924-3936ee04f584?q=80&w=2080&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                             alt=""
                             class="rounded-xl" style="width:25rem; height:34rem">
                    </div>
                    <div class="mt-8 flex flex-col justify-between">
                        <header>
                            <div class="space-x-2">
                                <a href="#"
                                   class="border border-blue-400 uppercase px-3 py-1 rounded-full text-xs text-blue-400 font-semibold">Brand</a>
                                <a href="#"
                                   class="border border-red-400 uppercase px-3 py-1 rounded-full text-xs text-red-400 font-semibold">Shirt</a>
                            </div>
                            <div class="mt-4">
                                <h1 class="text-3xl">Anti Social Social Club</h1>
                                <span class="block text-blue-400 text-xs mt-2">Published November <time>17,2024</time></span>
                            </div>
                        </header>
                        <div class="text-md mt-2">
                            <p>200$</p>
                        </div>
                    </div>
                </div>
            </article>
            <article
                    class="transition-colors duration-300 hover:bg-gray-100 rounded-xl border border-black border-opacity-0 hover:border-opacity-5">
                <div class="px-5 py-6">
                    <div>
                        <img src="https://images.unsplash.com/photo-1608234934808-addc77e651b3?q=80&w=1953&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                             alt=""
                             class="rounded-xl" style="width:25rem; height:34rem">
                    </div>
                    <div class="mt-8 flex flex-col justify-between">
                        <header>
                            <div class="space-x-2">
                                <a href="#"
                                   class="border border-blue-400 uppercase px-3 py-1 rounded-full text-xs text-blue-400 font-semibold">Office
                                    wear</a>
                                <a href="#"
                                   class="border border-red-400 uppercase px-3 py-1 rounded-full text-xs text-red-400 font-semibold">Blouse</a>
                            </div>
                            <div class="mt-4">
                                <h1 class="text-3xl">Blouse Shirt</h1>
                                <span class="block text-blue-400 text-xs mt-2">Published November <time>17,2024</time></span>
                            </div>
                        </header>
                        <div class="text-md mt-2">
                            <p>20$</p>
                        </div>
                    </div>
                </div>
            </article>
        </div>
    </section>

<?php require "partials/footer.php" ?>
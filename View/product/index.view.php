<?php require base_path('view/partials/head.php') ?>

<main class="p-10 max-w-7xl mx-auto">
    <section class="grid grid-cols-2 gap-x-10">
        <div class="hidden lg:grid lg:grid-cols-1 lg:gap-y-8">
            <div class="aspect-h-2 aspect-w-3 overflow-hidden rounded-lg">
                <img src="<?= './' . htmlspecialchars($product['image_path'] ?? " ") ?>" alt="product photo"
                     class="h-full w-full object-cover object-center">
            </div>
        </div>
        <div>
            <header>
                <div class="flex items-center justify-between">
                <h1 class="text-4xl font-bold"><?= $product['name'] ?> </h1>
                <a href="<?= previouseUrl() ?>" class="h-6 w-6">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path d="M32 15H3.41l8.29-8.29-1.41-1.42-10 10a1 1 0 0 0 0 1.41l10 10 1.41-1.41L3.41 17H32z" data-name="4-Arrow Left"/></svg>
                </a>
                </div>
                <p class="text-3xl tracking-tight text-gray-900 mt-2">$<?= $product['price'] ?></p>
            </header>
            <div>
                <p class="text-base text-gray-900 mt-10"> <?= $product['description'] ?></p>
            </div>
            <form class="mt-10">
                <!-- Colors -->
                <div>
                    <h3 class="text-sm font-medium text-gray-900">Color</h3>

                    <fieldset aria-label="Choose a color" class="mt-4">
                        <div class="flex items-center space-x-3">
                            <!-- Active and Checked: "ring ring-offset-1" -->
                            <label aria-label="White"
                                   class="relative -m-0.5 flex cursor-pointer items-center justify-center rounded-full p-0.5 ring-gray-400 focus:outline-none">
                                <input type="radio" name="color-choice" value="White" class="sr-only">
                                <span aria-hidden="true"
                                      class="h-8 w-8 rounded-full border border-black border-opacity-10 bg-white"></span>
                            </label>
                            <!-- Active and Checked: "ring ring-offset-1" -->
                            <label aria-label="Gray"
                                   class="relative -m-0.5 flex cursor-pointer items-center justify-center rounded-full p-0.5 ring-gray-400 focus:outline-none">
                                <input type="radio" name="color-choice" value="Gray" class="sr-only">
                                <span aria-hidden="true"
                                      class="h-8 w-8 rounded-full border border-black border-opacity-10 bg-gray-200"></span>
                            </label>
                            <!-- Active and Checked: "ring ring-offset-1" -->
                            <label aria-label="Black"
                                   class="relative -m-0.5 flex cursor-pointer items-center justify-center rounded-full p-0.5 ring-gray-900 focus:outline-none">
                                <input type="radio" name="color-choice" value="Black" class="sr-only">
                                <span aria-hidden="true"
                                      class="h-8 w-8 rounded-full border border-black border-opacity-10 bg-gray-900"></span>
                            </label>
                        </div>
                    </fieldset>
                </div>

                <!-- Sizes -->
                <div class="mt-10">
                    <div class="flex items-center justify-between">
                        <h3 class="text-sm font-medium text-gray-900">Size</h3>
                        <a href="#" class="text-sm font-medium text-indigo-600 hover:text-indigo-500">Size guide</a>
                    </div>

                    <fieldset aria-label="Choose a size" class="mt-4">
                        <div class="grid grid-cols-4 gap-4 sm:grid-cols-8 lg:grid-cols-4">
                            <!-- Active: "ring-2 ring-indigo-500" -->
                            <label class="group relative flex cursor-not-allowed items-center justify-center rounded-md border bg-gray-50 px-4 py-3 text-sm font-medium uppercase text-gray-200 hover:bg-gray-50 focus:outline-none sm:flex-1 sm:py-6">
                                <input type="radio" name="size-choice" value="XXS" disabled class="sr-only">
                                <span>XXS</span>
                                <span aria-hidden="true"
                                      class="pointer-events-none absolute -inset-px rounded-md border-2 border-gray-200">
                    <svg class="absolute inset-0 h-full w-full stroke-2 text-gray-200" viewBox="0 0 100 100"
                         preserveAspectRatio="none" stroke="currentColor">
                      <line x1="0" y1="100" x2="100" y2="0" vector-effect="non-scaling-stroke"/>
                    </svg>
                  </span>
                            </label>
                            <!-- Active: "ring-2 ring-indigo-500" -->
                            <label class="group relative flex cursor-pointer items-center justify-center rounded-md border bg-white px-4 py-3 text-sm font-medium uppercase text-gray-900 shadow-sm hover:bg-gray-50 focus:outline-none sm:flex-1 sm:py-6">
                                <input type="radio" name="size-choice" value="XS" class="sr-only">
                                <span>XS</span>
                                <!--
                                  Active: "border", Not Active: "border-2"
                                  Checked: "border-indigo-500", Not Checked: "border-transparent"
                                -->
                                <span class="pointer-events-none absolute -inset-px rounded-md"
                                      aria-hidden="true"></span>
                            </label>
                            <!-- Active: "ring-2 ring-indigo-500" -->
                            <label class="group relative flex cursor-pointer items-center justify-center rounded-md border bg-white px-4 py-3 text-sm font-medium uppercase text-gray-900 shadow-sm hover:bg-gray-50 focus:outline-none sm:flex-1 sm:py-6">
                                <input type="radio" name="size-choice" value="S" class="sr-only">
                                <span>S</span>
                                <!--
                                  Active: "border", Not Active: "border-2"
                                  Checked: "border-indigo-500", Not Checked: "border-transparent"
                                -->
                                <span class="pointer-events-none absolute -inset-px rounded-md"
                                      aria-hidden="true"></span>
                            </label>
                            <!-- Active: "ring-2 ring-indigo-500" -->
                            <label class="group relative flex cursor-pointer items-center justify-center rounded-md border bg-white px-4 py-3 text-sm font-medium uppercase text-gray-900 shadow-sm hover:bg-gray-50 focus:outline-none sm:flex-1 sm:py-6">
                                <input type="radio" name="size-choice" value="M" class="sr-only">
                                <span>M</span>
                                <!--
                                  Active: "border", Not Active: "border-2"
                                  Checked: "border-indigo-500", Not Checked: "border-transparent"
                                -->
                                <span class="pointer-events-none absolute -inset-px rounded-md"
                                      aria-hidden="true"></span>
                            </label>
                            <!-- Active: "ring-2 ring-indigo-500" -->
                            <label class="group relative flex cursor-pointer items-center justify-center rounded-md border bg-white px-4 py-3 text-sm font-medium uppercase text-gray-900 shadow-sm hover:bg-gray-50 focus:outline-none sm:flex-1 sm:py-6">
                                <input type="radio" name="size-choice" value="L" class="sr-only">
                                <span>L</span>
                                <!--
                                  Active: "border", Not Active: "border-2"
                                  Checked: "border-indigo-500", Not Checked: "border-transparent"
                                -->
                                <span class="pointer-events-none absolute -inset-px rounded-md"
                                      aria-hidden="true"></span>
                            </label>
                            <!-- Active: "ring-2 ring-indigo-500" -->
                            <label class="group relative flex cursor-pointer items-center justify-center rounded-md border bg-white px-4 py-3 text-sm font-medium uppercase text-gray-900 shadow-sm hover:bg-gray-50 focus:outline-none sm:flex-1 sm:py-6">
                                <input type="radio" name="size-choice" value="XL" class="sr-only">
                                <span>XL</span>
                                <!--
                                  Active: "border", Not Active: "border-2"
                                  Checked: "border-indigo-500", Not Checked: "border-transparent"
                                -->
                                <span class="pointer-events-none absolute -inset-px rounded-md"
                                      aria-hidden="true"></span>
                            </label>
                            <!-- Active: "ring-2 ring-indigo-500" -->
                            <label class="group relative flex cursor-pointer items-center justify-center rounded-md border bg-white px-4 py-3 text-sm font-medium uppercase text-gray-900 shadow-sm hover:bg-gray-50 focus:outline-none sm:flex-1 sm:py-6">
                                <input type="radio" name="size-choice" value="2XL" class="sr-only">
                                <span>2XL</span>
                                <!--
                                  Active: "border", Not Active: "border-2"
                                  Checked: "border-indigo-500", Not Checked: "border-transparent"
                                -->
                                <span class="pointer-events-none absolute -inset-px rounded-md"
                                      aria-hidden="true"></span>
                            </label>
                            <!-- Active: "ring-2 ring-indigo-500" -->
                            <label class="group relative flex cursor-pointer items-center justify-center rounded-md border bg-white px-4 py-3 text-sm font-medium uppercase text-gray-900 shadow-sm hover:bg-gray-50 focus:outline-none sm:flex-1 sm:py-6">
                                <input type="radio" name="size-choice" value="3XL" class="sr-only">
                                <span>3XL</span>
                                <!--
                                  Active: "border", Not Active: "border-2"
                                  Checked: "border-indigo-500", Not Checked: "border-transparent"
                                -->
                                <span class="pointer-events-none absolute -inset-px rounded-md"
                                      aria-hidden="true"></span>
                            </label>
                        </div>
                    </fieldset>
                </div>

                <button type="submit"
                        class="mt-10 flex w-full items-center justify-center rounded-md border border-transparent bg-indigo-600 px-8 py-3 text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                    Add to bag
                </button>
            </form>
            <div class="flex w-full gap-x-10">
                <div class="flex-1">
            <form action="/destory" method="POST">
                <input type="hidden" name="id" value="<?= $product['id'] ?>">
                <input type="hidden" name="_method" value="DELETE">
                <button type="submit" class="mt-10 flex items-center justify-center py-3 w-full rounded-md border border-transparent text-red-500 bg-gray-200">Delete</button>
            </form>
                </div>
                <div class="flex-1">
                    <a href="/edit?id=<?=$product['id']?>" class="mt-10 flex items-center justify-center py-3 w-full rounded-md border border-transparent text-red-500 bg-gray-200">Edit</a>
                </div>
                </div>
            </div>
    </section>
</main>





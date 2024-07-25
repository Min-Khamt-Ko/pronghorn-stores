<?php require base_path('view/partials/head.php') ?>
<section class="max-h-screen">
    <a href="/" class="pt-16 pl-10 block">
        <svg xmlns="http://www.w3.org/2000/svg" width="21" height="19.908"><path d="M17 7.908H8v4h9V14l4-4.043-4-4.043v1.994z"/><path d="M13.919 6.908V2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v15.908a2 2 0 0 0 2 2h9.919a2 2 0 0 0 2-2v-5h-6.87v-6z"/></svg>
    </a>
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8 mt-10">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
        <img class="mx-auto h-20 w-auto" src="./img/logo-text.png" alt="Your Company">
        <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Sign Up your
            account</h2>
    </div>

    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
        <form class="space-y-6" action="/register" method="POST">
            <div>
                <label for="name" class="block text-sm font-medium leading-6 text-gray-900">User Name</label>
                <div class="mt-2">
                    <input id="name" name="name" type="text"
                           class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    <p class="text-sm text-red-500"><?= $errors['name'] ?? ' ' ?></p>
                </div>
            </div>
            <div>
                <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email address</label>
                <div class="mt-2">
                    <input id="email" name="email" type="email" autocomplete="email"
                           class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    <p class="text-sm text-red-500"><?= $errors['email'] ?? ' ' ?></p>
                </div>
            </div>

            <div>
                <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
                <div class="mt-2">
                    <input id="password" name="password" type="password" autocomplete="current-password"
                           class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    <p class="text-sm text-red-500"><?= $errors['password'] ?? ' ' ?></p>
                </div>
            </div>

            <div>
                <button type="submit"
                        class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                    Sign up
                </button>
            </div>
        </form>

        <p class="mt-10 text-center text-sm text-gray-500">
            Already have an account?
            <a href="/login" class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500">Sign in here.</a>
        </p>
    </div>
</div>
</section>

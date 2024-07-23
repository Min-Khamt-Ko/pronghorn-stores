<nav class="py-4 px-8">
    <div class="flex items-center justify-between mr-4">
        <div class="flex space-x-6 items-center">
            <div class="logo">
                <a href="/">
                    <img src="./img/logo-text.png" alt="" style="width:110px; height:80px;">
<!--                    <h1 class="text-3xl font-bold">Logo</h1>-->
                </a>
            </div>
            <div class="text-md space-x-6">
                <span><a href="/men">Men</a></span>
                <span><a href="/women">Women</a></span>
                <span><a href="/bags">Bags</a></span>
                <span><a href="/collections">Stores</a></span>
            </div>
        </div>
        <div class="flex gap-10 font-semibold">
            <p>Search</p>
            <?php if(isset($_SESSION['user']['user_name'])): ?>
                <?= $_SESSION['user']['user_name'] ?>
                <form action="/session" method="POST">
                    <input type="hidden" name="_method" value="DELETE">
                    <button class="text-gray-600">Log out</button>
                </form>
            <?php else:?>
            <a href="/register">Sign Up</a>
            <?php endif; ?>
        </div>
</nav>
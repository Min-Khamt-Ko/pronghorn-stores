<?php require "partials/head.php" ?>
<?php require "partials/banner.php" ?>

<?php require "partials/nav.php" ?>

<div class="bg-white">
    <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
        <h1 class="flex justify-end mb-10">
            <a href="/add-product">
            Add products
            </a>
        </h1>
        <h2 class="sr-only">Products</h2>

        <div class="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
            <?php foreach ($products as $product): ?>
                <a href="#" class="group">
                    <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
                        <img src="<?= './' . htmlspecialchars($product['image_path'] ?? " ") ?>" alt="Product Image" class="h-96 w-96 object-cover object-center group-hover:opacity-75">
                    </div>
                    <h3 class="mt-4 text-sm text-gray-700"><?= htmlspecialchars($product['name'] ?? " ") ?></h3>
                    <p class="mt-1 text-lg font-medium text-gray-900">$<?= htmlspecialchars($product['price'] ?? " ") ?></p>
                </a>
            <?php endforeach; ?>

        </div>
    </div>
</div>

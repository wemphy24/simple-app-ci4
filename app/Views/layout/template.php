<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title><?= $title; ?></title>
</head>
<body class="m-4 bg-gray-200">
    <div class="flex items-center justify-center gap-4">
        <a href="/">Home</a>
        <a href="/admin/product">Product</a>
        <a href="/admin/category">Category</a>
    </div>

    <?= $this->renderSection('content') ?>

    <div class="section mt-4 flex items-center justify-center">
        <h1>Simple CRUD</h1>
    </div>

</body>
</html>



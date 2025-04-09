<?= $this->extend('layout/template'); ?>

<?= $this->section('content') ?>
<div class="section my-4">
    <div class="flex items-center justify-center">
        <div class="bg-white w-100 rounded-md overflow-hidden shadow-md">
            <div class="px-6 py-4 flex items-center justify-between">
                <div class="font-bold text-xl mb-2">Edit Category</div>
                <a href="/admin/category">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                    </svg>
                </a>
            </div>
            <div class="px-6 pb-4">
                <form action="/admin/category/update/<?= $category['id'] ?>" method="POST">
                    <?= csrf_field(); ?>
                    <label>Name</label>
                    <div class="w-full p-2 rounded-md border border-gray-600 focus-within:border-2 focus-within:border-solid">
                        <input name="name" class="outline-none w-full" type="text" value="<?= $category['name'] ?>" placeholder="Category Name" autofocus required>
                    </div>
                    <div class="flex items-center justify-end mt-4">
                        <button type="submit" class="cursor-pointer py-2 px-3 bg-zinc-800 text-white rounded-md text-center">Edit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection('content') ?>
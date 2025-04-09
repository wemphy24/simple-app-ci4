<?= $this->extend('layout/template'); ?>

<?= $this->section('content') ?>
<div class="section my-4">
    <div class="max-w-4xl mx-auto">
        <div class="flex flex-col">
            <div class="flex items-center justify-between my-4">
                <h1 class="text-2xl font-bold">Category List</h1>
                <a href="category/create" class="py-2 px-3 w-32 bg-zinc-800 text-white rounded-md text-center">Add Category</a>
            </div>

            <form action="/admin/category" method="GET">
                <div class="flex items-center mb-4">
                    <div class="w-full p-2 rounded-l-md border border-gray-600 focus-within:border-2 focus-within:border-solid">
                        <input name="keyword" class="outline-none w-full" type="text" placeholder="Search..." autofocus>
                    </div>
                    <button type="submit" class="cursor-pointer py-2 px-3 bg-zinc-800 text-white rounded-r-md text-center">Search</button>
                </div>
            </form>
            
            <!-- Alert Message -->
            <?php if (session()->getFlashdata('pesan')) : ?>
            <div class="mb-4 bg-green-100 border border-green-400 text-green-700 px-4 py-2 rounded relative" role="alert">
                <strong class="font-bold"><?= session()->getFlashdata('pesan') ?></strong>
            </div>
            <?php endif; ?>

            <div class="overflow-x-auto shadow-md rounded-md">
                <div class="inline-block min-w-full align-middle">
                    <div class="overflow-hidden ">
                        <table class="min-w-full table-fixed">
                            <thead class="bg-gray-300">
                                <tr>
                                    <th scope="col" class="py-3 px-3 text-xs font-medium tracking-wider text-left text-black uppercase">
                                        #
                                    </th>
                                    <th scope="col" class="py-3 px-3 text-xs font-medium tracking-wider text-left text-black uppercase">
                                        Category Name
                                    </th>
                                    <th scope="col" class="py-3 px-3 text-xs font-medium tracking-wider text-center text-black uppercase">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-gray-100 divide-y divide-gray-400">
                                <?php foreach($categories as $c)  : ?>
                                <tr>
                                    <td class="py-4 px-3 text-sm font-medium text-black whitespace-nowrap"><?= $c['id'] ?></td>
                                    <td class="py-4 px-3 text-sm font-medium text-black whitespace-nowrap"><?= $c['name'] ?></td>
                                    <td class="py-4 px-3 text-sm font-medium text-center whitespace-nowrap">
                                        <div class="flex items-center gap-4 justify-center">
                                            <a href="/admin/category/edit/<?= $c['id'] ?>" class="py-2 px-3 bg-blue-400 text-white rounded-md text-center">Edit</a>

                                            <form action="/admin/category/delete/<?= $c['id'] ?>" method="POST">
                                                <?= csrf_field(); ?>
                                                <input type="hidden" name="_method" value="DELETE">
                                                <button type="submit" class="py-2 px-3 bg-red-400 text-white rounded-md text-center cursor-pointer" onclick="return confirm('Are you sure want to delete this?')">Delete</button>
                                            </form>

                                        </div>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>

                        <!-- Pagination -->
                        <?= $pager->links() ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection('content') ?>
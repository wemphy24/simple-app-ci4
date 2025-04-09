<?= $this->extend('layout/template'); ?>

<?= $this->section('content') ?>
    
<div class="section my-4">
    <div class="max-w-4xl mx-auto">
        <div class="flex flex-col">
            <div class="overflow-x-auto shadow-md rounded-md">
                <div class="inline-block min-w-full align-middle">
                    <div class="overflow-hidden ">
                        <table class="min-w-full divide-y divide-gray-200 table-fixed">
                            <thead class="bg-gray-100">
                                <tr>
                                    <th scope="col" class="py-3 px-3 text-xs font-medium tracking-wider text-left text-black uppercase">
                                        Product Name
                                    </th>
                                    <th scope="col" class="py-3 px-3 text-xs font-medium tracking-wider text-left text-black uppercase">
                                        Category
                                    </th>
                                    <th scope="col" class="py-3 px-3 text-xs font-medium tracking-wider text-left text-black uppercase">
                                        Price
                                    </th>
                                    <th scope="col" class="py-3 px-3">
                                        
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-gray-600 divide-y divide-gray-200">
                                <?php foreach($products as $p)  : ?>
                                <tr>
                                    <td class="py-4 px-3 text-sm font-medium text-white whitespace-nowrap"><?= $p['name'] ?></td>
                                    <td class="py-4 px-3 text-sm font-medium text-white whitespace-nowrap"><?= $p['category_name'] ?></td>
                                    <td class="py-4 px-3 text-sm font-medium text-white whitespace-nowrap">Rp<?= number_format($p['price'], 0, ',', '.') ?></td>
                                    <td class="py-4 px-3 text-sm font-medium text-center whitespace-nowrap">
                                        <a href="#" class="text-blue-500 hover:underline">Edit</a>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    
<?= $this->endSection('content') ?>
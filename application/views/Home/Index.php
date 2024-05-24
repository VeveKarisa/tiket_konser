<div>
    <div class="w-full h-screen bg-black">
        <div class="flex justify-between items-center py-28 px-10">
            <div class="w-1/2">
                <h2 class="text-5xl font-bold text-yellow-300">Fast, Cheap, & Easy Concert Tickets Enjoy Music with No Hassle!</h2>
                <h3 class="text-xl font-semibold text-gray-600 my-4">Access easily without many obstacles when you book tickets here.</h3>
                <a href="<?= base_url('Auth/Register') ?>" class="bg-purple-500 px-4 py-1.5 rounded-md text-white hover:bg-purple-600">Register</a>
            </div>
            <div class="w-1/2 mb-0 bottom-0 ">
                <img src="<?= base_url('assets/img/bg-1.png') ?>" alt="Imagen relacionada con el programa de fidelización" class="w-full h-auto">
            </div>
        </div>
    </div>


    <div class="w-full h-screen">
        <div>
            <h1 class="p-10 font-bold text-xl">Our Concerts List</h1>
            <div class="grid grid-cols-4 gap-4 p-10">
                <?php if (!empty($concerts)) : ?>
                    <?php foreach ($concerts as $index => $row) : ?>
                        <a href="<?= base_url('home/detail_concert/') . $row['id'] ?>" class="">
                            <div class="flex gap-3 w-1/2">
                                <h1><?= $index + 1; ?></h1>
                                <img src="<?= base_url('assets/img/Concert/' . $row['flyer_img']); ?>" alt="">
                                <p class="text-sm font-bold w-28"><?= $row['name']; ?></p>
                            </div>
                        </a>
                    <?php endforeach; ?>
                <?php else : ?>
                    <p>No concerts found</p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
</div>
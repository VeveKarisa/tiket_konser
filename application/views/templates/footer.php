<div class="bg-gradient-to-r from-black to-white p-10 rounded-lg mt-10">
    <h2 class="text-white text-3xl text-center">Únete a FidelizaMás</h2>
    <p class="text-white mt-2 text-center">Descubre cómo podemos transformar la fidelización en una ventaja competitiva para tu empresa.</p>
    <div class="flex justify-center">
        <button class="mt-4 bg-white text-cyan-600 rounded-lg px-4 py-2">Saber más</button>
    </div>
</div>

<?php if (isset($customJs)) : ?>
    <?php if (gettype($customJs) == 'array') : ?>
        <?php foreach ($customJs as $index => $row) : ?>
            <?php $this->load->view('templates/' . $row) ?>
        <?php endforeach ?>
    <?php elseif (gettype($customJs) == 'string') : ?>
        <?php $this->load->view('templates/' . $customJs) ?>
    <?php endif ?>
<?php endif ?>
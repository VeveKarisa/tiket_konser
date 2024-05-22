<!-- This is an example component -->
<div>
    <div class="flex overflow-hidden bg-white pt-16">
        <div class="bg-gray-900 opacity-50 hidden fixed inset-0 z-10" id="sidebarBackdrop"></div>
        <div id="main-content" class="h-full w-full bg-gray-50 relative overflow-y-auto lg:ml-64">
            <main>
                <div class="w-full justify-end flex px-5">
                    <button data-modal-target="crud-modal" data-modal-toggle="crud-modal" class=" text-white bg-purple-500 hover:bg-purple-600 font-medium rounded-lg px-5 py-2.5 text-center" type="button">
                        Toggle modal
                    </button>
                </div>
                <!-- Main modal -->
                <div id="crud-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                    <div class="relative p-4 w-full max-w-2xl max-h-full">
                        <!-- Modal content -->
                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                            <!-- Modal header -->
                            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                    Add Concert
                                </h3>
                                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="crud-modal">
                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                    </svg>
                                    <span class="sr-only">Close modal</span>
                                </button>
                            </div>
                            <!-- Modal body -->
                            <form action="" method="POST" class="p-4 md:p-5" enctype="multipart/form-data">
                                <div class="grid gap-4 mb-4 grid-cols-2">
                                    <div class="col-span-2">
                                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Concert Theme</label>
                                        <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Type product name" required="">
                                    </div>
                                    <div class="col-span-2">
                                        <label for="venue" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Venue</label>
                                        <input type="text" name="venue" id="venue" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Type venue name" required="">
                                    </div>
                                    <div class="col-span-2">
                                        <label for="date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date</label>
                                        <input type="date" name="date" id="date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Type venue name" required="">
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <label for="flyer_img" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Flyer Upload <span class="text-sm text-red-500">*should in 1:1 size</span></label>
                                    <div class="flex items-center justify-center w-full">
                                        <label class="flex flex-col rounded-lg border-4 border-dashed w-full h-60 p-10 group text-center">
                                            <div class="h-full w-full text-center flex flex-col justify-center items-center  ">
                                                <div class="flex flex-auto max-h-48 mx-auto -mt-10">
                                                    <img class="has-mask h-36 object-center" src="https://img.freepik.com/free-vector/image-upload-concept-landing-page_52683-27130.jpg?size=338&ext=jpg">
                                                </div>
                                                <p class="pointer-none text-gray-500 ">Drag and drop files here from your computer</p>
                                            </div>
                                            <input type="file" name="flyer_img" accept="image/*" class="">
                                        </label>
                                    </div>
                                    <p class="text-sm text-gray-500">
                                        <span>File type: doc,pdf,types of images</span>
                                    </p>
                                </div>
                                <div class="mb-4">
                                    <label for="seat_img" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Seats Map Upload</label>
                                    <div class="flex items-center justify-center w-full">
                                        <label class="flex flex-col rounded-lg border-4 border-dashed w-full h-60 p-10 group text-center">
                                            <div class="h-full w-full text-center flex flex-col justify-center items-center  ">
                                                <div class="flex flex-auto max-h-48 mx-auto -mt-10">
                                                    <img class="has-mask h-36 object-center" src="https://img.freepik.com/free-vector/image-upload-concept-landing-page_52683-27130.jpg?size=338&ext=jpg">
                                                </div>
                                                <p class="pointer-none text-gray-500 ">Drag and drop files here from your computer</p>
                                            </div>
                                            <input type="file" name="seat_img" accept="image/*" class="">
                                        </label>
                                    </div>
                                    <p class="text-sm text-gray-500">
                                        <span>File type: doc,pdf,types of images</span>
                                    </p>
                                </div>
                                <button type="button" onclick="addSeatPricelist()" class="text-white inline-flex items-center bg-purple-500 hover:bg-purple-600 focus:ring-4 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                                    <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path>
                                    </svg>
                                    Add Seat Pricelist
                                </button>
                                <div id="seatPricelistInputs" class="my-4"></div>
                                <div class="mb-4">
                                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Payment Number <span class="text-sm text-red-500">*make sure you upload rigt number</span></label>
                                </div>
                                <div class="mb-4">
                                    <label for="bank_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Bank</label>
                                    <select name="bank_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" required="">
                                        <option value="" disabled selected>Choose Your Bank</option>
                                        <option value="BNI">BNI</option>
                                        <option value="BCA">BCA</option>
                                        <option value="MANDIRI">MANDIRI</option>
                                    </select>
                                </div>
                                <div class="mb-4">
                                    <label for="bank_number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Bank Number</label>
                                    <input type="number" name="bank_number" id="bank_number" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Type venue name" required="">
                                </div>
                                <button type="submit" name="submit" class="text-white inline-flex items-center bg-purple-500 hover:bg-purple-600 focus:ring-4 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                                    Add Concert
                                </button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="p-4">
                    <table class="border w-full">
                        <thead class="border bg-purple-500 text-white">
                            <tr>
                                <th>Song</th>
                                <th>Artist</th>
                                <th>Year</th>
                            </tr>
                        </thead>
                        <tbody class="border">
                            <tr>
                                <td>The Sliding Mr. Bones (Next Stop, Pottersville)</td>
                                <td>Malcolm Lockyer</td>
                                <td>1961</td>
                            </tr>
                            <tr>
                                <td>Witchy Woman</td>
                                <td>The Eagles</td>
                                <td>1972</td>
                            </tr>
                            <tr>
                                <td>Shining Star</td>
                                <td>Earth, Wind, and Fire</td>
                                <td>1975</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </main>
        </div>
    </div>
</div>

<script>
    function addSeatPricelist() {
        const seatPricelistInputs = document.getElementById('seatPricelistInputs');
        const div = document.createElement('div');
        div.className = 'mb-4 flex gap-4 items-center';

        div.innerHTML = `
                <input type="text" name="seatType[]" placeholder="Seat Type" class="w-1/3 p-2 border border-gray-300 rounded" required>
                <input type="number" name="seatCount[]" placeholder="Jumlah" class="w-1/3 p-2 border border-gray-300 rounded" required>
                <input type="number" name="seatPrice[]" placeholder="Harga" class="w-1/3 p-2 border border-gray-300 rounded" required>
                <button type="button" onclick="removeSeatPricelist(this)" class="text-white inline-flex items-center bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-2.5 py-1.5 text-center">
                    Remove
                </button>
            `;

        seatPricelistInputs.appendChild(div);
    }

    function removeSeatPricelist(button) {
        const div = button.parentElement;
        div.remove();
    }

    document.getElementById('concertForm').addEventListener('submit', function(event) {
        event.preventDefault();
        // Here you can add your form submission logic, e.g., sending the form data to the server
        alert('Form submitted!');
    });
</script>

<!-- Jika mau buat seat type pake select option -->
<!-- <select name="seatType[]" class="w-1/3 p-2 border border-gray-300 rounded" required>
    <option value="" disabled selected>Pilih Tipe Seat</option>
    <option value="VIP">VIP</option>
    <option value="Regular">Regular</option>
    <option value="Economy">Economy</option>
</select> -->
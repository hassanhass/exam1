<div>
    <form wire:submit.prevent="addCars">
        <div class="m-10 mt-5">
        <div class="mb-6">
          <label  class="block mb-2 text-sm font-medium text-gray-900 ">اسم السيارة </label>
          <input wire:model="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"  required>
        </div>
        <div class="mb-6">
          <label  class="block mb-2 text-sm font-medium text-gray-900"> نوع السيارة</label>
          <input wire:model="model" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " required>
        </div>
        <div class="mb-6">
            <label  class="block mb-2 text-sm font-medium text-gray-900"> لون السيارة</label>
            <input wire:model="color" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " required>
          </div>

          <div class="mb-6">
            <label  class="block mb-2 text-sm font-medium text-gray-900"> السعر</label>
            <input wire:model="price" type="number" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " required>
          </div>
        <button type="submit" class="text-white text-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center ">اضافة</button>
    </div>
    </form>
</div>

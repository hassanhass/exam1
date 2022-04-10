<div>

    <div class="mb-10  bg-white">
    <form wire:submit.prevent="addCars">
        <div class="m-10 mt-5">
        <div class="mb-6">
          <label  class="block mb-2 text-sm font-medium text-gray-900 ">Car Name </label>
          <input wire:model="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="name@flowbite.com" required>
        </div>
        <div class="mb-6">
          <label  class="block mb-2 text-sm font-medium text-gray-900"> Car model</label>
          <input wire:model="model" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " required>
        </div>
        <div class="mb-6">
            <label  class="block mb-2 text-sm font-medium text-gray-900"> Car Color</label>
            <input wire:model="color" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " required>
          </div>

          <div class="mb-6">
            <label  class="block mb-2 text-sm font-medium text-gray-900"> Price</label>
            <input wire:model="price" type="number" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " required>
          </div>
        <button type="submit" class="text-white text-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center ">Add</button>
    </div>
    </form>
    </div>
      <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full  text-sm text-gray-500 dark:text-gray-400">
                    <thead class="text-center text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                #
                            </th>
                            <th scope="col" class="px-6 py-3">Car name
                            </th>
                            <th scope="col" class="px-6 py-3">Car model
                            </th>
                            <th scope="col" class="px-6 py-3">Car color
                            </th>
                            <th scope="col" class="px-6 py-3">Price
                            </th>
                            <th scope="col" class="px-6 py-3">Action
                            </th>

                        </tr>
                    </thead>
                    <tbody class="text-center">
                        @forelse($available_car as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    @if ($edit_id ==$item->id)
                                        <td>
                                            <input type="text" wire:model="name" placeholder="{{ $item->name }}" class="form-control">
                                            @error('name')
                                                <span class="text-red-500">{{ $message }}</span>
                                            @enderror
                                        </td>
                                        <td>
                                            <input type="text" wire:model="model" placeholder="{{ $item->model }}" class="form-control">
                                            @error('model')
                                                <span class="text-red-500">{{ $message }}</span>
                                            @enderror
                                        </td>
                                        <td>
                                            <input type="text" wire:model="color" placeholder="{{ $item->color }}" class="form-control">
                                            @error('color')
                                                <span class="text-red-500">{{ $message }}</span>
                                            @enderror
                                        </td>
                                        <td>
                                            <input type="number" wire:model="price" placeholder="{{ $item->price }}" class="form-control">
                                            @error('price')
                                                <span class="text-red-500">{{ $message }}</span>
                                            @enderror
                                        </td>
                                        <td>
                                            <button wire:click="updateCars({{ $item->id }})" class="btn btn-success">Update</button>
                                            <button wire:click="$set('edit_id', {{null}})" class="btn btn-danger">Cancel</button>

                                        </td>
                                    @else
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->model }}</td>
                                        <td>{{ $item->color }}</td>
                                        <td>{{ $item->price }}</td>
                                        <td>
                                            <button wire:click="$set('edit_id', {{$item->id}})" class="btn btn-primary">Edit</button>
                                            <button wire:click="deleteCars({{ $item->id }})" class="btn btn-danger">Delete</button>
                                            <button wire:click="sellCars({{ $item->id }})" class="btn btn-danger">sell</button>
                                        </td>
                                    @endif
                                </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center">لا يوجد  </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>

                <div class=" container mx-auto m-10 bg-white mt-10">

                    <h1 class="text-center  bg-green-50">
                        cars sold
                    </h1>
                <table class="w-full  text-sm text-gray-500 ">
                    <thead class="text-center text-xs text-gray-700 uppercase ">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                #
                            </th>
                            <th scope="col" class="px-6 py-3">Car name
                            </th>
                            <th scope="col" class="px-6 py-3">Car model
                            </th>
                            <th scope="col" class="px-6 py-3">Car color
                            </th>
                            <th scope="col" class="px-6 py-3">Price
                            </th>
                            <th scope="col" class="px-6 py-3">State
                            </th>

                        </tr>
                    </thead>
                    <tbody class="text-center">
                        @forelse($sold_car as $item)

                                <tr class=" bg-green-50">
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->model }}</td>
                                    <td>{{ $item->color }}</td>
                                    <td>{{ $item->price }}</td>
                                    <td>sold</td>
                                </tr>

                               @empty
                            <tr>
                                <td colspan="5" class="text-center">لا يوجد  </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
                </div>
    </div>
</div>

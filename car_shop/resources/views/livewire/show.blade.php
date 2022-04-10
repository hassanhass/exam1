<div>

    <div class="p-6  mx-auto text-right bg-gray-200 rounded-lg border border-gray-200 ">
        <div class="p-6  mx-auto text-right bg-white rounded-lg border border-gray-200  ">
                <div dir="rtl" class="x-auto  p-4 bg-gray-50 rounded-lg ">
                    <div class="relative overflow-x-auto  sm:rounded-lg" >
                        @livewire('add')
                       <div class="">
                           <h1 class="text-center bg-yellow-100 mr-20 ml-20  ">
                               السيارات المتاحة
                           </h1>

                           <table class="w-full mt-4 text-sm text-center text-gray-500 " >
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
                                   <tr>
                                       <th scope="col" class="px-6 py-3">
                                               #
                                       </th>
                                       <th scope="col" class="px-6 py-3">
                                           اسم السيارة
                                       </th>
                                       <th scope="col" class="px-6 py-3">
                                             نوع السيارة
                                       </th>
                                       <th scope="col" class="px-6 py-3">
                                        لون السيارة
                                       </th>
                                       <th scope="col" class="px-6 py-3">
                                           السعر
                                       </th>
                                       <th scope="col" class="px-6 py-3">
                                        الاجراءات
                                    </th>

                                   </tr>
                               </thead>
                               <tbody>
                                @forelse($available_car as $item)
                                <tr>
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 ">
                                        {{ $loop->iteration }}
                                    </th>
                                    @if ($edit_id ==$item->id)
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 ">
                                            <input type="text" wire:model="name"  class="form-control">
                                            @error('name')
                                                <span class="text-red-500">{{ $message }}</span>
                                            @enderror
                                        </th>
                                        <td class="px-6 py-4">
                                            <input type="text" wire:model="model"  class="form-control">
                                            @error('model')
                                                <span class="text-red-500">{{ $message }}</span>
                                            @enderror
                                        </td>
                                        <td class="px-6 py-4">
                                            <input type="text" wire:model="color" class="form-control">
                                            @error('color')
                                                <span class="text-red-500">{{ $message }}</span>
                                            @enderror
                                        </td>
                                        <td class="px-6 py-4">
                                            <input type="number" wire:model="price"  class="form-control">
                                            @error('price')
                                                <span class="text-red-500">{{ $message }}</span>
                                            @enderror
                                        </td>
                                        <td class="px-6 py-4">
                                            <button wire:click="updateCars({{ $item->id }})" type="button" class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:focus:ring-yellow-900">تحديث</button>
                                            <button wire:click="$set('edit_id', {{null}})" type="button" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">الغاء</button>
                                        </td>
                                    @else
                                    <td class="px-6 py-4">{{ $item->name }}</td>
                                        <td class="px-6 py-4">{{ $item->model }}</td>
                                        <td class="px-6 py-4">{{ $item->color }}</td>
                                        <td class="px-6 py-4">{{ $item->price }}</td>
                                        <td class="px-6 py-4">
                                            <button wire:click="sellCars({{ $item->id }})" type="button" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">بيع</button>
                                            <button wire:click="editCars({{$item->id}})" type="button" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">تعديل</button>
                                            <button wire:click="deleteCars({{ $item->id }})" type="button" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">حذف</button>
                                        </td>
                                    @endif
                                </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center">لا يوجد  </td>
                            </tr>
                        @endforelse
                               </tbody>
                           </table>

                       </div>

                        <br>
                        <br>
                        <div>
                            <h1 class="text-center bg-green-100 mr-20 ml-20  ">
                                السيارات المباعة
                            </h1>
                            <table class="w-full mt-4 text-sm text-center text-gray-500 " >
                                <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
                                    <tr>
                                        <th scope="col" class="px-6 py-3">
                                                #
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            اسم السيارة
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            نوع السيارة
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            لون السيارة
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            السعر
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            الحالة
                                        </th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($sold_car as $item)
                                    <tr class="bg-white border-b  hover:bg-gray-50 ">
                                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 ">
                                            {{ $loop->iteration }}
                                        </th>
                                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 ">
                                            {{ $item->name }}
                                        </th>
                                        <td class="px-6 py-4">
                                            {{ $item->model }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $item->color }}
                                        </td>
                                        <td class="px-6 py-4">
                                            ${{ $item->price }}
                                        </td>
                                        <td class="px-6 py-4 ">
                                            <h1 class="text-green-500">
                                                بيعت
                                            </h1>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="6" class="text-center">لا يوجد  </td>
                                    </tr>
                                @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

        </div>
        </div>
</div>




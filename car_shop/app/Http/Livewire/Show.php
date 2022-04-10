<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Car as CarModel;
class Show extends Component
{
    public $name, $model, $color, $is_available=true, $price, $edit_id;
    protected $listeners = ['$refresh'];
   


public function editCars($id)
{
    $car = CarModel::findOrfail($id);
    $this->name = $car->name;
    $this->model = $car->model;
    $this->color = $car->color;
    $this->price = $car->price;
    $this->edit_id = $id;
}
public function updateCars($id)
{

    $car = CarModel::findOrfail($id);
    $car->name = $this->name;
    $car->model = $this->model;
    $car->color = $this->color;
    $car->price = $this->price;
    $car->save();
    $this->edit_id = null;
    $this->reset();
}
public function deleteCars($id)
{
    $car = CarModel::findOrfail($id);
    $car->delete();
}
public function sellCars($id)
{
    $car = CarModel::findOrfail($id);
    $car->is_available = false;
    $car->save();
}

    public function render()
    {
        $available_car=CarModel::where('is_available',true)->get();
        $sold_car=CarModel::where('is_available',false)->get();

        return view('livewire.show',
        [
            'available_car'=>$available_car,
            'sold_car'=>$sold_car
        ]);

    }
}

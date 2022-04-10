<?php

namespace App\Http\Livewire;

use Livewire\Component;

use function Symfony\Component\String\u;
use App\Models\Car as CarModel;
class Add extends Component
{
    public $name, $model, $color, $is_available=true, $price, $edit_id;
    protected $rules = [
        'name' => 'required',
        'model' => 'required',
        'color' => 'required',
        'is_available' => 'required',
        'price' => 'required'
    ];

    public function addCars()
    {
        $this->validate();
        CarModel::create([
            'name' => $this->name,
            'model' => $this->model,
            'color' => $this->color,
            'is_available' => $this->is_available,
            'price' => $this->price
        ]);
      $this->emitTo('add', '$refresh');
        $this->reset();
    }
    public function render()
    {
        $cars=CarModel::get();
        return view('livewire.add',
        [
            'cars'=>$cars
        ]);

    }
}

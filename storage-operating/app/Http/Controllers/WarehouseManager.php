<?php

namespace App\Http\Controllers;

use App\Models\Warehouse;
use Illuminate\Http\Request;

use function PHPUnit\Framework\isEmpty;

class WarehouseManager extends Controller
{
    function addWarehouse() {
        return view('pages.addWarehouse');
    }

    function updateWarehouse() {
        return view('pages.updateWarehouse');
    }

    function deleteWarehouse() {
        return view('pages.deleteWarehouse');
    }

    function showAllWarehouses() {
        $warehouses = Warehouse::all();

        return view('pages.showAllWarehouses', compact('warehouses'));
    }

    function addWarehousePost(Request $request) {
        $acceptableData = $request->validate([
            'name' => 'required',
            'manager' => 'required',
            'address' => 'required',
            'city' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'price' => 'required',
            'capacity' => 'required',
            'details' => 'required'
        ]);

        $Warehouse = Warehouse::create([
            'name' => $acceptableData['name'],
            'manager' => $acceptableData['manager'],
            'address' => $acceptableData['address'],
            'city' => $acceptableData['city'],
            'phone' => $acceptableData['phone'],
            'email' => $acceptableData['email'],
            'price' => $acceptableData['price'],
            'capacity' => $acceptableData['capacity'],
            'details' => $acceptableData['details']
        ]);

        if(!$Warehouse){
            return redirect(route('addWarehouse'))->with('error', 'Depo kayıt işlemi gerçekleştirilemedi, tekrar deneyiniz');
        }
        return redirect(route('addWarehouse'))->with('success', 'Depo başarıyla kayıt edildi');
    }

    function updateWarehousePost(Request $request) {
        $acceptableData = $request->validate([
            'name' => 'required|exists:warehouses',
            'manager' => 'required',
            'address' => 'required',
            'city' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'price' => 'required',
            'capacity' => 'required',
            'details' => 'required'
        ]);

        $Warehouse = Warehouse::where('name', $acceptableData['name'])->firstOrFail();

        $updateData = [];
        if (isset($acceptableData['address'])) {
            $updateData['address'] = $acceptableData['address'];
        }
        if (isset($acceptableData['name'])) {
            $updateData['name'] = $acceptableData['name'];
        }
        if (isset($acceptableData['manager'])) {
            $updateData['manager'] = $acceptableData['manager'];
        }
        if (isset($acceptableData['city'])) {
            $updateData['city'] = $acceptableData['city'];
        }
        if (isset($acceptableData['phone'])) {
            $updateData['phone'] = $acceptableData['phone'];
        }
        if (isset($acceptableData['email'])) {
            $updateData['email'] = $acceptableData['email'];
        }
        if (isset($acceptableData['price'])) {
            $updateData['price'] = $acceptableData['price'];
        }
        if (isset($acceptableData['capacity'])) {
            $updateData['capacity'] = $acceptableData['capacity'];
        }
        if (isset($acceptableData['details'])) {
            $updateData['details'] = $acceptableData['details'];
        }
        if (isEmpty($Warehouse)) {
            return redirect(route('updateWarehouse'))->with('error', 'Girdiğiniz Depo sistemde kayıtlı değil.');
        } else {
            $Warehouse->update($updateData);

            return redirect(route('updateWarehouse'))->with('success', 'Depo bilgileri başarıyla güncellendi.');
        }
    }

    function deleteWarehousePost(Request $request) {
        $acceptableData = $request->validate([
            'name' => 'required|exists:warehouses',
        ]);

        $warehouse = Warehouse::where('name', $acceptableData['name'])->firstOrFail();

        $warehouse->delete();

        return redirect(route('deleteWarehouse'))->with('success', 'Depo başarıyla silindi.');
    }
}


<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Facades\Storage;
use Stevebauman\Purify\Facades\Purify;
use Illuminate\Http\Request;
use Exception;
use Throwable;

class ProductController extends Controller
{
    private $model;
    public function __construct(Product $model)
    {
        $this->model = $model;
    }

    public function index(Request $request)
    {
        $products = $this->model->all();
        echo json_encode($products);
    }

    public function get(Request $request, int $id)
    {
        $product = $this->model->where("id", $id)->get();
        echo json_encode($product);
    }

    public function update(Request $request, int $id)
    {
        $request->validate(['image' => 'nullable|image|mimes:jpg,png,jpeg,webp|max:5120']);

        $data = Purify::clean($request->all());
        $file = $request->file("image");

        if ($file) {
            $hash = $file->hashName();
            $file->storeAs("public/", $hash);
            $data["image"] = $hash;
        } else {
            $data["image"] = null;
        }

        $this->model->patch($id, $data);
    }

    public function create(Request $request)
    {
        $request->validate([
            'image' => 'nullable|image|mimes:jpg,png,jpeg,webp|max:5120',
        ]);

        $data = Purify::clean($request->all());
        $file = $request->file("image");
        if ($file) {
            $hash = $file->hashName();
            $file->storeAs("public/", $hash);
            $data["image"] = $hash;
        } else {
            $data["image"] = null;
        }

        $this->model->store($data);

        $res = ["message" => "The item was created successfully"];
        echo json_encode($res);
        http_response_code(201);
    }

    public function deleteCollection(Request $request)
    {
        $selection = $request->all();
        $this->model->whereIn('id', $selection)->delete();
    }

    public function delete(int $code)
    {
        $this->model->where('id', $code)->delete();
        http_response_code(204);
    }
}

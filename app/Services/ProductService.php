<?php

namespace App\Services;

use App\Models\Product;

class ProductService
{
    /**
     * Get list Product
     *
     * @param Array $option ['order_by' => value, 'key' => value]
     * @return Collection
    */
    public function getList($option = []){
        $query = new Product;

        if(isset($option['order_by'])){
           $query = $query->orderBy($option['order_by'], 'DESC'); 
        }

        if(isset($option['where_null'])){
           $query = $query->whereNull($option['where_null']); 
        }

        return $query->get();
    }

    /**
     * Create Product
     *
     * @param Array $data ['user_id' => value, 'parent_id' => value, 'name' => value]
     * @return boolean
    */ 
    public function create($data){


        try {
           Product::create($data);
        } catch (\Exception $e) {
            \Log::error($e);

            return false;
        }

        return true;

    }

    /**
     * update Product
     *
     * @param Array $data ['user_id' => value, 'parent_id' => value, 'name' => value]
     * @return boolean
    */ 
    public function update($id, $data){
        $categories = Product::findOrFail($id);

        try {
            $categories->update($data);
        } catch (\Exception $e) {
            \Log::error($e);

            return false;
        }

        return true;
    }

    /**
     * delete Product
     *
     * @param string $id
     * @return boolean
    */ 
    public function delete($id){
        $categories = Product::findOrFail($id);

        try {
            $categories->delete();
        } catch (\Exception $e) {
            \Log::error($e);

            return false;
        }

        return true;
    }

    /**
     * upload file
     *
     * @param string $id
     * @return boolean
    */ 
    public function uploadImage($id){
        $categories = Product::finndOrFail($id);

        try {
            $categories->delete();
        } catch (\Exception $e) {
            \Log::error($e);

            return false;
        }

        return true;
    }
}

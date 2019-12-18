<?php

namespace App\Services;

use App\Models\Category;

class CategoryService
{
    /**
     * Get list category
     *
     * @param Array $option ['order_by' => value, 'key' => value]
     * @return Collection
    */
    public function getList($option = []){
        $query = new Category;

        if(isset($option['order_by'])){
           $query = $query->orderBy($option['order_by'], 'DESC'); 
        }

        return $query->get();
    }

    /**
     * Create category
     *
     * @param Array $data ['user_id' => value, 'parent_id' => value, 'name' => value]
     * @return boolean
    */ 
    public function create($data){
        try {
           Category::create($data);
        } catch (\Exception $e) {
            \Log::error($e);

            return false;
        }

        return true;

    }

    /**
     * update category
     *
     * @param Array $data ['user_id' => value, 'parent_id' => value, 'name' => value]
     * @return boolean
    */ 
    public function update($id, $data){
        $categories = Category::findOrFail($id);

        try {
            $categories->update($data);
        } catch (\Exception $e) {
            \Log::error($e);

            return false;
        }

        return true;
    }

    /**
     * delete category
     *
     * @param string $id
     * @return boolean
    */ 
    public function delete($id){
        $categories = Category::findOrFail($id);

        try {
            $categories->delete();
        } catch (\Exception $e) {
            \Log::error($e);

            return false;
        }

        return true;
    }


}

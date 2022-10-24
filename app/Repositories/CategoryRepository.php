<?php

namespace App\Repositories;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryRepository {

    /**
     * Method to return the list of categories
     * 
     * @return Array categories a list of all the categories 
     */
    public function index() {
        return Category::latest()->get();
    }

    public function store(Request $request) {
        $request->validate([
            'name' => ['required', 'string', 'min:3', 'max:15'],
            'user_id' => ['required', 'int', 'min:1']
        ]);

        Category::create($request->only('name', 'user_id'));
    }

    public function update(Request $request, Category $category) {
        $request->validate([
            'name' => ['required', 'string', 'min:3', 'max:15'],
            'user_id' => ['required', 'int', 'min:1']
        ]);

        $category->update($request->only('name', 'user_id'));
    }

    public function delete(Category $category) {
        $category->delete();
    }
}
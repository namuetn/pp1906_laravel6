<?php


if (! function_exists('showCartQuantity')) {
    function showCartQuantity() {
        $currentUser = auth()->user();
        $newOrder = $currentUser->orders->where('status', 1)->first();

        return $newOrder->products->sum('pivot.quantity');
    }
}
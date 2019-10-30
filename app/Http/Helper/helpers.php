<?php


if (! function_exists('showCartQuantity')) {
    function showCartQuantity() {
    	if (auth()->id()) {
	        $currentUser = auth()->user();
	        $newOrder = $currentUser->orders->where('status', 1)->first();

	        return $newOrder->products->sum('pivot.quantity');
	    }

    }
}

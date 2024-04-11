<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1 class="max-w-sm mx-auto bold text-center text-2xl my-12 ">Edit Product</h1>
    <div>
    </div>
    <form method="post" class="max-w-sm mx-auto" action="{{route('product.update', ['product' => $product])}}">
        @csrf 
        @method('put')
        <div>
            <label class="block mb-2 text-sm font-medium text-gray-900 light:text-white">Name</label>
            <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 light:bg-gray-700 light:border-gray-600 light:placeholder-gray-400 light:text-white light:focus:ring-blue-500 light:focus:border-blue-500" type="text" name="product_name" placeholder="Name" value='{{$product->product_name}}' />
        </div>
        <div>
            <label class="block mb-2 text-sm font-medium text-gray-900 light:text-white">Qty</label>
            <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 light:bg-gray-700 light:border-gray-600 light:placeholder-gray-400 light:text-white light:focus:ring-blue-500 light:focus:border-blue-500" type="text" name="qty" placeholder="Qty" value='{{$product->qty}}'/>
        </div>
        <div>
            <label class="block mb-2 text-sm font-medium text-gray-900 light:text-white">Price</label>
            <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 light:bg-gray-700 light:border-gray-600 light:placeholder-gray-400 light:text-white light:focus:ring-blue-500 light:focus:border-blue-500" type="text" name="price" placeholder="Price" value='{{$product->price}}'/>
        </div>
        <div>
            <label class="block mb-2 text-sm font-medium text-gray-900 light:text-white">Description</label>
            <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 light:bg-gray-700 light:border-gray-600 light:placeholder-gray-400 light:text-white light:focus:ring-blue-500 light:focus:border-blue-500" type="text" name="description" placeholder="Description" value='{{$product->description}}'/>
        </div>
        <div>
            <input class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="submit" value="Update Product" />
        </div>
    </form>
</html>


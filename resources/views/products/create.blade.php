<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body >
    <div class="bg-white border-1 pt-1 pb-2">
    <h1 class="max-w-sm mx-auto bold text-center text-2xl my-12 ">Create New Product</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
    </div>
    <form method="post" action="{{route('product.store')}}" class="max-w-sm mx-auto">
        @csrf 
        @method('post')
        <div class="mb-5">
            <label class="block mb-2 text-sm font-medium text-gray-900 light:text-white">Name</label>
            <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 light:bg-gray-700 light:border-gray-600 light:placeholder-gray-400 light:text-white light:focus:ring-blue-500 light:focus:border-blue-500"  name="product_name" placeholder="Product Name" />
        </div>
        <div class="mb-5">
            <label class="block mb-2 text-sm font-medium text-gray-900 light:text-white" >Qty</label>
            <input type="text" name="qty" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 light:bg-gray-700 light:border-gray-600 light:placeholder-gray-400 light:text-white light:focus:ring-blue-500 light:focus:border-blue-500" placeholder="Qty" />
        </div class="mb-5">
        <div class="mb-5">
            <label class="block mb-2 text-sm font-medium text-gray-900 light:text-white">Price</label>
            <input type="text" name="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 light:bg-gray-700 light:border-gray-600 light:placeholder-gray-400 light:text-white light:focus:ring-blue-500 light:focus:border-blue-500" placeholder="Price" />
        </div class="mb-5">
        <div class="mb-5"   >
            <label class="block mb-2 text-sm font-medium text-gray-900 light:text-white">Description</label>
            <input type="text" name="description"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 light:bg-gray-700 light:border-gray-600 light:placeholder-gray-400 light:text-white light:focus:ring-blue-500 light:focus:border-blue-500" placeholder="Description" />
        </div class="mb-5"  >
        <div>
            <input type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" value="Save a New Product" />
        </div>
    </form>
    </div>
</html>
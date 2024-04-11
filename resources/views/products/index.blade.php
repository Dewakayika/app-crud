<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body class="bg-gray-200">
    <div class="containerm-12  w-full">
    <div class="w-full my-8">
        <h1 class="text-3xl font-bold center text-center">Products</h1>
        <h4 class="text-center">List of All Product</h4>
    </div>
    <div>
        @if(session()-> has('success'))
            <div>
                {{session('success')}}
            </div>
        @endif
    </div>
        <a href="/product/create" class="mx-12 text-left text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 light:bg-blue-600 light:hover:bg-blue-700 focus:outline-none light:focus:ring-blue-80">Create New</a>
        <div class="mx-12 my-8 relative overflow-x-auto shadow-md">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 light:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 light:bg-gray-700 light:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            ID
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Product Name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Quantity
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Price
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Description
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                @foreach($products as $product)
                    <tr class="odd:bg-white odd:light:bg-gray-900 even:bg-gray-50 even:light:bg-gray-800 border-b light:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap light:text-white">
                        {{$product->id}}
                        </th>
                        <td class="px-6 py-4">
                        {{$product->product_name}}
                        </td>
                        <td class="px-6 py-4">
                        {{$product->qty}}
                        </td>
                        <td class="px-6 py-4">
                        {{$product->price}}
                        </td>
                        <td class="px-6 py-4">
                        {{$product->description}}
                        </td>
                        <td class="px-6 py-4">
                            <a href="{{route('product.edit', ['product' => $product])}}" class="font-medium text-blue-600 light:text-blue-500 hover:underline">Edit</a>
                            <form method="post" action="{{route('product.delete', ['product' => $product])}}">
                                    @csrf
                                    @method('delete')
                                    <input type="submit" value="Delete">
                                </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
</div>
</div>
</body>
</html>

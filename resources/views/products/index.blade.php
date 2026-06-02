<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <title>Product List</title>

    <style>
        body{
            background: linear-gradient(to right, #141e30, #243b55);
            min-height: 100vh;
            font-family: Arial, Helvetica, sans-serif;
        }

        .product-container{
            padding: 50px 0;
        }

        .title{
            color: white;
            font-weight: bold;
            text-align: center;
            margin-bottom: 40px;
        }

        .table-card{
            background: white;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.3);
        }

        .table thead{
            background: #0d6efd;
            color: white;
        }

        .table tbody tr{
            transition: 0.3s;
        }

        .table tbody tr:hover{
            background: #f1f5ff;
            transform: scale(1.01);
        }

        .product-image{
            width: 90px;
            height: 90px;
            object-fit: cover;
            border-radius: 12px;
            border: 3px solid #0d6efd;
        }

        .badge-stock{
            padding: 8px 14px;
            border-radius: 20px;
            font-size: 14px;
        }

        .price{
            font-weight: bold;
            color: #198754;
        }
    </style>
</head>
<body>

    <div class="container product-container">

        <h1 class="title">
            <i class="bi bi-bag-check-fill"></i>
            Product Management
        </h1>

        <div class="table-card p-4">

            <div class="table-responsive">
                <table class="table align-middle table-hover">
                    <thead>
                        <tr class="text-center">
                            <th>#</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Stock</th>
                            <th>Actions</th>
                        </tr>
                    </thead>

                    <tbody>

                        @foreach ($products as $index => $product)
                            <tr class="text-center">

                                <td>
                                    {{ $index + 1 }}
                                </td>

                                <td>
                                    <img 
                                        src="{{ asset('storage/' . $product->image) }}" 
                                        alt="{{ $product->name }}"
                                        class="product-image"
                                    >
                                </td>

                                <td class="fw-bold">
                                    {{ $product->name }}
                                </td>
                                <td class="fw-bold">
                                    {{ $product->category->name }}
                                </td>

                                <td class="price">
                                    ${{ number_format($product->price, 2) }}
                                </td>

                                <td>
                                    @if ($product->stock > 0)
                                        <span class="badge bg-success badge-stock">
                                            {{ $product->stock }} In Stock
                                        </span>
                                    @else
                                        <span class="badge bg-danger badge-stock">
                                            Out of Stock
                                        </span>
                                    @endif
                                </td>
                                <td>
                                    <form action="{{route('destroy.delete',$product->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" onclick="return confirm('Are you sure you want to delete this product?')" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                    
                                    <a href="{{ route('edit.get', $product->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                </td>

                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>

        </div>

    </div>

</body>
</html>
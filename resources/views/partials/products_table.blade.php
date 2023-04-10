<table class="table table-striped">
    <thead>
        <tr>
            <th>No</th>
            <th>Heading 1</th>
            <th>Heading 2</th>
            <th>Price</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $index => $product)
            
            <tr id="product-{{ $product['id'] }}">
                <td>{{ $serial++ }}</td>
                <td>{{ $product['title'] }}</td>
                <td>{{ $product['title'] }}</td>
                <td>{{ $product['price'] }}</td>
                <td>
                    <button class="btn btn-success mark-btn" data-id="{{ $product['id'] }}">Select</button>
                    <button class="btn btn-danger delete-product" data-url="{{ route('products.delete', $product['id']) }}" data-id="{{ $product['id'] }}">Delete</button>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>


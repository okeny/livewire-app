<div class="container">
    <h2>Category Products</h2>
    <table class="u-full-width">
        <thead>
          <tr>
            <th>Name</th>
            <th>Price</th>
            <th>Category</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
          <tr>
            <td>{{ $product->name }}</td>
            <td>{{ $product->price }}</td>
            <td>{{ $product->cat_name }}</td>
          </tr> 
          @endforeach
        </tbody>
         </table>
</div>

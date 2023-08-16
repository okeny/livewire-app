<div class="container">
    <div>
    <h2>Search for {{ $query }}</h2>
        <input wire:model="query" type="text" name="query" placeholder="Product Name">
        <button wire:click="handle_search">Search</button>
    </div>
    <br/>
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

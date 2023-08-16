<div class="container">
    <h2>create Product</h2>
    @if (session()->has('message'))

            <div class="alert alert-success">

                {{ session('message') }}

            </div>

        @endif
    <form wire:submit.prevent="store" class="six columns" style="display: flex; flex-direction:column">
         <input wire:model.debounce.500ms="name" type="text" name="name" placeholder="Product Name">
         @error('name') <span class="text-danger">{{ $message }} </span> @enderror
         <input wire:model.debounce.500ms="price" type="number" name="price" placeholder="Price">
         @error('price') <span class="text-danger">{{ $message }} </span> @enderror

         <select wire:model.debounce.500ms="category_id" type="text" name="category_id" placeholder="Category">
            <option value="" >Select Options</option>
            @foreach($categories as $item) 
               <option value="{{ $item->id}}" >{{ $item->name}}</option>
            @endforeach
        </select>
        @error('category_id') <span class="text-danger">{{ $message }} </span> @enderror

         <button class="button-primary" type="submit">submit</button>
     </form>
</div>

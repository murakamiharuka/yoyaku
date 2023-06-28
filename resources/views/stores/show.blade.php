@extends('layouts.app')
 
 @section('content')
 <div class="container">
     <h1>新しい商品を追加</h1>
         <div class="form-group">
             <label for="product-name">商品名</label>
             <p>{{ $store->name }}</p>
             <input type="text" name="name" id="product-name" class="form-control">
         </div>
         <div class="form-group">
             <label for="product-description">商品説明</label>
             <p>{{ $store->address }}</p>
             <textarea name="address" id="product-description" class="form-control"></textarea>
         </div>
         <div class="form-group">
             <label for="product-price">価格</label>
             <p>{{ $store->pr }}</p>
             <input type="text" name="pr" id="product-price" class="form-control">
         </div>
         {{-- <div class="form-group">
             <label for="product-category">カテゴリ</label>
             <select name="category_id" class="form-control" id="product-category">
                 @foreach ($categories as $category)
                     <option value="{{ $category->id }}">{{ $category->name }}</option>
                 @endforeach
             </select>
         </div> --}} 
         <button  class="btn btn-success"><a href="{{ route('stores.edit', $store) }}">商品を編集</a></button>
         <form action="{{route('stores.destroy', $store->id)}}" method="post">
          @csrf
          @method('delete')
          <input type="submit" value="削除" class="btn btn-danger" onclick='return confirm("削除しますか？");'>
      </form>
 </div>
 @endsection
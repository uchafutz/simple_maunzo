@extends('layouts.app')
@section('content')
<div class="body flex-grow-1 px-3">
        <div class="container-lg">
            <div class="row">
                 <div class="col-12 col-md-8">
                <div class="card custom-card">
                    <div class="card-header justify-content-between">
                        <div class="card-title"> New Item</div>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <form action="{{route('items.store')}}" method="post" >
                                @csrf
                                 <input type="hidden" value="{{$store->id}}" name="store_id"/>
                                 <input type="hidden" value="{{ Auth::user()->id}}" name="user_id"/>
                                <x-layout.form-input label="Name" name="name" required placeholder="Item Name" />
                                <x-layout.form-input label="Code" name="code"  placeholder="Item Code" />
                                <div class="form-group mb-2">
                                 <label for="category" class="form-label mb-2">Select Category</label>
                                 <select name="category_id" class="form-control"  id="" required>
                                    @foreach ($categories as $category )
                                         <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                   
                                 </select> 
                                </div>
                                 <div class="form-group mb-2">
                                 <label for="category" class="form-label mb-2">Select Unity</label>
                                 <select name="unity_id" class="form-control"  id="" required>
                                    @foreach ($unities as $unity )
                                         <option value="{{$unity->id}}">{{$unity->name}}<b>"{{$unity->code}}"</b></option>
                                    @endforeach
                                 </select> 
                                </div>
                                <x-layout.form-input label="Stock Level" type="number" name="level"  placeholder="Item Stock Level" />
                                <x-layout.form-input label="Image" type="file" name="featureImage"  placeholder="Upload Image" />
                                <x-layout.form-input label="Sell Price" type="number" name="sell_price"  placeholder="Sell Price" />
                                <x-layout.form-text-area label="Description" name="description" placeholder="Description"/>

                                <div class="d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>

          </div>
          <!-- /.row-->
        </div>
      </div>
@endsection
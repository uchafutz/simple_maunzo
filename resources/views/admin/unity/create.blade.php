@extends('layouts.app')
@section('content')
<div class="body flex-grow-1 px-3">
        <div class="container-lg">
            <div class="row">
                 <div class="col-12 col-md-8">
                <div class="card custom-card">
                    <div class="card-header justify-content-between">
                        <div class="card-title"> New Unity</div>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <form action="{{route('unities.store')}}" method="post">
                                @csrf
                                
                                <x-layout.form-input label="Name" name="name" required placeholder="Unity Name" />
                                <x-layout.form-input label="Code" name="code" required placeholder="Unity Code" />
                                <x-layout.form-input label="Value" name="value"  placeholder="Unity Value" />
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
@extends('layouts.app')
@section('content')
<div class="body flex-grow-1 px-3">
        <div class="container-lg">
            <div class="row">
            <div class="col-12 d-flex justify-content-end mb-2">
                <a href="{{route('unities.create')}}" class="btn label-btn btn-primary">
                    <i class="label-btn-icon me-2 ri-add-line"></i>
                    New Unity
                </a>
            </div>

            <div class="col-xl-12">
                <div class="card custom-card">
                    <div class="card-header justify-content-between">
                        <div class="card-title"> Unity</div>
                        <div class="d-flex">
                            <div class="me-3">
                                <input class="form-control form-control-sm" type="text" placeholder="Search" aria-label=".form-control-sm example">
                            </div>
                            <div class="dropdown">
                                <a href="javascript:void(0);" class="btn btn-primary btn-sm btn-wave waves-effect waves-light"
                                   data-bs-toggle="dropdown" aria-expanded="false"> Sort By
                                    <i class="ri-arrow-down-s-line align-middle ms-1 d-inline-block"></i>
                                </a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a class="dropdown-item" href="javascript:void(0);">New</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0);">Popular</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0);">Relevant</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table text-nowrap table-bordered">
                                <thead>
                                <tr>
                                    <th scope="col" style="width: 20px;">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Code</th>
                                    <th scope="col">Value</th>
                                    <th></th>
                                </tr>
                                </thead>
                              <tbody>
                                @foreach($unities as $unity)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                            <td>
                                             <div class="fs-14">{{$unity->name}}</div>
                                        </td>
                                        
                                        <td>{{$unity->code}}</td>
                                        <td>{{$unity->value}}</td>
                                        <td style="width: 80px;">
                                            <div class="hstack gap-2 fs-15 text-center">
                                                <a href="{{route('unities.show', $unity)}}" type="success" icon="ri-eye-2-line">show</a>
                                               
                                            </div>

                                        </td>
                                    </tr>

                                @endforeach
                                </tbody> 
                            </table>
                        </div>
                    </div>

                    <div class="card-footer">
                        <div class="d-flex">
                            <div class="ms-auto">
                               
                                  {{$unities->links()}}  
                               
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
       </div>
      </div>
@endsection
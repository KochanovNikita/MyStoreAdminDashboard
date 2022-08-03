@extends('layouts.admin')

@section('content-header')
    <x-content-header>
        Панель управления категорией:
        <div class="actions__icon"> {{ $category->title }}
            <a href="{{ route('admin.category.edit', $category) }}" class="mx-4 ">
                <i class="fas fa-pen text-warning"></i>
            </a>
            <form class="d-inline" action="{{route('admin.category.destroy', $category)}}" method="post">
                @csrf
                @method('delete')
                <input type='submit' class="d-none" id="{{'deletecategory'.$category->id}}">
                <label for="{{'deletecategory'.$category->id}}" class="delete">
                    <i class="fas fa-trash-alt text-danger"></i>
                </label>
            </form>
        </div>
    </x-content-header>
@endsection

@section('content')
    <div class="col-12 col-lg-6 col-xl-4">
        <div class="card">
            <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                    <tbody>
                        <tr>
                            <th>ID</th>
                            <th>{{ $category->id }}</th>
                        </tr>
                        <tr>
                            <th>Имя</th>
                            <th>{{ $category->title }}</th>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
@endsection

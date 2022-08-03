@extends('layouts.admin')

@section('content-header')
    <x-content-header>Создать цвет</x-content-header>
@endsection

@section('content')
<div class="col-12 col-lg-6 col-xl-4">
    <form action="{{route('admin.color.store')}}" method="post">
        @csrf
        <div class="mb-3">
            <label class="form-label">Введите цвет<span class="text-danger">*</span></label>
            @error('title')
            <span class="text-danger">{{$message}}</span>
            @enderror
            <input type="text" name="title"
            value="{{old('title')}}" class="form-control">
          </div>

          <div class="mb-3">
            <label class="form-label">Введите цвет(на английском)<span class="text-danger">*</span></label>
            @error('title_en')
            <span class="text-danger">{{$message}}</span>
            @enderror
            <input type="text" name="title_en"
            value="{{old('title_en')}}" class="form-control">
          </div>

          <button type="submit" class="btn btn-primary">Отправить</button>
      </form>
</div>
@endsection

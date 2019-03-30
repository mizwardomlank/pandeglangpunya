@extends('layouts.app')

@section('content')

<section style="background: transparent;display: flex;justify-content: center; margin-top:100px;">
    <form class="box tw-py-8 tw-px-10 tw-rounded" role="form" method="POST" method="POST" action="{{ route('products.store') }}" enctype="multipart/form-data">
        @csrf
        <h1 class="tw-text-lg tw-font-bold tw-text-black">
            Tambahkan KaryaKu
        </h1>
        <div class="tw-py-4">
            
            <div class="control">
                <input type="text" id="name" name="name" class="input is-minimal" placeholder="Nama Produk" value="{{ old('name') }}" required>
                @if ($errors->has('name'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
            </div>
            <div class="control">
                <label for="image">Logo Produk</label>
                <br>
                <br>
                <input type="file" id="image" name="image" class="input is-minimal" placeholder="Nama Produk" value="{{ old('image') }}" accept="image/*" required>
                @if ($errors->has('image'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('image') }}</strong>
                    </span>
                @endif
            </div>
            <div class="control">
                <textarea name="description" id="description" class="input is-minimal" placeholder="Description" style="height:100px;" required>{{old('description')}}</textarea>
                @if ($errors->has('description'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('description') }}</strong>
                    </span>
                @endif
            </div>
            <div class="control">
                <select name="category_id" id="category" class="input is-minimal">
                    <option selected disabled>Pilih Kategori</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
                @if ($errors->has('category_id'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('category') }}</strong>
                    </span>
                @endif
            </div>
            <div class="control">
                <input type="text" id="phone" name="phone" class="input is-minimal" placeholder="Nomor Telepon" value="{{ old('phone') }}" required>
                @if ($errors->has('phone'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('phone') }}</strong>
                    </span>
                @endif
            </div>
            <div class="control">
                <input type="text" id="instagram" name="instagram" class="input is-minimal" placeholder="Link Instagram (contoh: http://instagram.com/username)" value="{{ old('instagram') }}">
                @if ($errors->has('instagram'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('instagram') }}</strong>
                    </span>
                @endif
            </div>
            <div class="control">
                <input type="text" id="twitter" name="twitter" class="input is-minimal" placeholder="Link Twitter (contoh: http://twitter.com/username)" value="{{ old('twitter') }}">
                @if ($errors->has('twitter'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('twitter') }}</strong>
                    </span>
                @endif
            </div>
            <div class="control">
                <input type="text" id="facebook" name="facebook" class="input is-minimal" placeholder="Link Facebook (contoh: http://facebook.com/username)" value="{{ old('facebook') }}">
                @if ($errors->has('facebook'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('facebook') }}</strong>
                    </span>
                @endif
            </div>
            <div class="control">
                <input type="text" id="website" name="website" class="input is-minimal" placeholder="Link Website (contoh: http://websitekamu.com)" value="{{ old('website') }}">
                @if ($errors->has('website'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('website') }}</strong>
                    </span>
                @endif
            </div>
            <div class="control tw-my-6">
                <button type="submit" class="tw-button is-blue">
                    Simpan
                </button>
            </div>
        </div>
    </form>
</section>
@endsection

@section('styles-top')
<style>
    form.box {
        width: 800px;
    }
</style>
@endsection
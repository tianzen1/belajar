{{-- extend digunakan untuk menggunakan template --}}
@extends('layout.main')

{{-- section digunakan untuk memasukkan codingan baru ke dalam template (codingan dibawah akan masuk ke dalam @yield->container)--}}
@section('container')
    <p>Website ini adalah website yang digunakan untuk belajar</p>
    <p>Hello Christian felix</p>
@endsection

@section('js')
    <script>
        console.log('abcdertg')
    </script>
@endsection

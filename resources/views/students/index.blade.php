@extends('layout')
@section('content')

<div class="container">
    <div class="row">
        <a href="{{ route('students.create') }}" class="btn info">
            Add Student
        </a>
        <table class="table">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Mobile</th>
                <th scope="col">Address</th>
                </tr>
            </thead>
            <tbody>
                @forelse($students as $item)
                <tr>
                    <td>
                        {{ $loop->iteration }}
                    </td>
                    <td>
                        {{ $item->name }}
                    </td>
                    <td>
                        {{ $item->mobile }}
                    </td>
                    <td>
                        {{ $item->address }}
                    </td>
                </tr>
                @empty
                <tr>
                    <td>
                        <p>No Students Found</p>
                    </td>
                </tr>

                @endforelse
            </tbody>
        </table>
    </div>
</div>

@endsection
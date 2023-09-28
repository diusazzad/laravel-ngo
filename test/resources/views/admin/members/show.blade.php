@extends('layout.dashboard')

@section('content')
<!-- Display a single member -->
<p>{{ $member->name }} - {{ $member->society->name }}</p>
<a href="{{ route('members.edit', $member->id) }}">Edit</a>
<form action="{{ route('members.destroy', $member->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit">Delete</button>
</form>

@endsection

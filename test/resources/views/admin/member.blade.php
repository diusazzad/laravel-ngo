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


    <a href="{{ route('members.create') }}">Create New Member</a>
    <!-- Create a new member form -->
    <form action="{{ route('members.store') }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Name" required>
        <input type="text" name="contact_info" placeholder="Contact Info" required>
        <select name="society_id">
            @foreach ($societies as $society)
            <option value="{{ $society->id }}">{{ $society->name }}</option>
            @endforeach
        </select>
        <button type="submit">Create Member</button>
    </form>
    <!-- Edit member form -->
    <form action="{{ route('members.update', $member->id) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="name" value="{{ $member->name }}" required>
        <input type="text" name="contact_info" value="{{ $member->contact_info }}" required>
        <select name="society_id">
            @foreach ($societies as $society)
            <option value="{{ $society->id }}" {{ $member->society_id == $society->id ? 'selected' : '' }}>{{
                $society->name }}</option>
            @endforeach
        </select>
        <button type="submit">Update Member</button>
    </form>

    <!-- Display a single member -->
    <p>{{ $member->name }} - {{ $member->society->name }}</p>
    <a href="{{ route('members.edit', $member->id) }}">Edit</a>
    <form action="{{ route('members.destroy', $member->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>


@endsection

@extends('layouts.app')

@section('content')
<h2>Dashboard</h2>

<div class="dashboard-cards">
    <div class="card">
        <h3>Total Books</h3>
        <p>{{ $booksCount }}</p>
    </div>
    <div class="card">
        <h3>Total Borrowers</h3>
        <p>{{ $borrowersCount }}</p>
    </div>
    <div class="card">
        <h3>Borrow Records</h3>
        <p>{{ $borrowRecordsCount }}</p>
    </div>
</div>

<style>
.dashboard-cards { display: flex; gap: 20px; margin-top: 20px; }
.card { flex: 1; background: #fff; border: 1px solid #ccc; padding: 20px; text-align: center; }
</style>
@endsection

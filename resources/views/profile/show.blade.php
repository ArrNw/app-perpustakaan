@extends('layouts.app')

@section('content')
<div class="container" style="max-width: 600px; margin: 20px auto;">
    <h1>Profil Pengguna</h1>

    @if (session('success'))
        <div style="background: #dcfce7; color: #166534; padding: 12px; border-radius: 4px; margin-bottom: 16px;">
            {{ session('success') }}
        </div>
    @endif

    <div style="background: #f8fafc; padding: 16px; border: 1px solid #e2e8f0; border-radius: 6px; margin-bottom: 24px;">
        <p><strong>Nama:</strong> {{ $user->name }}</p>
        <p><strong>Email:</strong> {{ $user->email }}</p>
        <p><strong>Role:</strong> {{ ucfirst($user->role) }}</p>
    </div>

    <h2>Ganti Password</h2>
    <form action="{{ route('profile.password.update') }}" method="POST">
        @csrf
        @method('PUT')

        <div style="margin-bottom: 12px;">
            <label for="current_password" style="display:block; font-weight:bold;">Password Lama</label>
            <input type="password" name="current_password" id="current_password" style="width:100%; padding:8px; box-sizing: border-box;">
            @error('current_password')
                <div style="color:red; font-size:14px; margin-top:4px;">{{ $message }}</div>
            @enderror
        </div>

        <div style="margin-bottom: 12px;">
            <label for="password" style="display:block; font-weight:bold;">Password Baru (Min. 8 Karakter)</label>
            <input type="password" name="password" id="password" style="width:100%; padding:8px; box-sizing: border-box;">
            @error('password')
                <div style="color:red; font-size:14px; margin-top:4px;">{{ $message }}</div>
            @enderror
        </div>

        <div style="margin-bottom: 16px;">
            <label for="password_confirmation" style="display:block; font-weight:bold;">Konfirmasi Password Baru</label>
            <input type="password" name="password_confirmation" id="password_confirmation" style="width:100%; padding:8px; box-sizing: border-box;">
        </div>

        <button type="submit" style="padding: 8px 16px; background: #2563eb; color: #fff; border: none; border-radius: 4px; cursor: pointer;">Perbarui Password</button>
    </form>
</div>
@endsection
@extends('layout.layout')


@section('content')

    <main>        
        <div class="login" >
            <form action="{{ route('loginsubmit') }}" method="POST">
            @csrf
            <label for="role">Role:</label>
            <select id="role" name="role">
                <option value="None">--Select Role--</option>
                @foreach ($roles as $role)
                <option value="{{ $role->name }}">{{ $role->name }}</option>
                @endforeach
            </select>
            <label for="Email"><b> Email</b></label>
            <input type="email" name="email" placeholder="Email" required>

            <label for="password"><b>password</b></label>
            <input type="password" name="password" placeholder="Password" required>

            <button type="submit">Login</button>
            <label>
            <input type="checkbox" checked="checked" name="remember"> Remember me
            </label>
            </form>
        </div>
        <div class="Familylogin" >
            <form action="/familyhome" method="GET">
            <label for="ID"><b>Or enter Your Family Code Here!</b></label><br>
            <input type="text" placeholder="Enter Family Code" name="ID" required>
            <input type="submit" value="Submit">
            <label>
            <input type="checkbox" checked="checked" name="remember"> Remember me
            </label>
            </form>
        </div>
    <div class="container" >
        <!-- <button type="button" class="cancelbtn">Cancel</button> -->
        <span class="sgnup">Dont have an account? <a href="/signup">password?</a></span>
    </div>
    </main>

    @endsection

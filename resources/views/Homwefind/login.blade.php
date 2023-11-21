@extends('layout.layout')


@section('content')

    <main>        <div class="login" >
            <form action="/home" method="GET">
            <label for="ID"><b>Patient ID</b></label>
            <input type="text" placeholder="Enter Patient ID" name="ID" required>

            <label for="password"><b>password</b></label>
            <input type="text" placeholder="Enter Patient password" name="password" required>

            <input type="submit" value="Submit">
            <label>
            <input type="checkbox" checked="checked" name="remember"> Remember me
            </label>
            </form>
        </div>
        <div class="Familylogin" >
            <form action="/familyhome" method="GET">
            <label for="ID"><b>Family Members Login Here!</b></label><br>

            <label for="ID"><b>Family Member ID</b></label>
            <input type="text" placeholder="Enter ID" name="ID" required>

            <label for="password"><b>password</b></label>
            <input type="text" placeholder="Enter password" name="password" required>

            <input type="text" placeholder="Enter Family Code" name="ID" required>

            <input type="submit" value="Submit">
            
            <label>

            <input type="checkbox" checked="checked" name="remember"> Remember me
            </label>
            </form>
        </div>
    <div class="container" style="background-color:#f1f1f1">
        <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
    </main>

    @endsection

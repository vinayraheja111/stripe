@extends('layouts.app')

@section('content')

<div class="container mt-5">
<form action="{{ route('userRegister') }}" method="post">
	@csrf
           
           @if(Session::has('success'))
             <p style="color: green;">{{ Session::get('success') }}</p>
            @else
             <p style="color: red;">{{ Session::get('error')}}</p>
            @endif 

        <h1>Registration</h1>
        <fieldset>
        	<label for="mail">Name:</label>
            <input type="text" name="name" required>

            <label for="mail">Email:</label>
            <input type="email" name="email" required>

            <label for="password">Password:</label>
            <input type="password" name="password" required>

        </fieldset>
        <button type="submit">Register</button>
    </form>
</div>

@endsection
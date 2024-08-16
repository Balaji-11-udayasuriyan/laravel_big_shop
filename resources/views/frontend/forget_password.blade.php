@extends('frontend.layout.app')

@section('title')

Forget PASSWORD

@endsection

@section('content')

<div class="container">

    <h1>Welcome to Forget Password Page.</h1>
    
    <form id="forgetpasswordForm" onsubmit="return validatorForm()">

        <div class="input-group">

            <label for="email" id="email">Email Address</label>

            <input type = "email" id="email" reqiured />
            
        </div>
        
        <button type="submit" class="btn">Submit</button>

        <div id="error-message" class="error-message"></div>

    </form>    

</div>

@endsection
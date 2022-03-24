<title>Home</title>
@include('components\header')

<h1 class="text">Hey {{$user->uname}}</h1>
@include('components\footer')
<style>
    .text{
        text-align: center;
    }
</style>

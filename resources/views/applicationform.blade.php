@extends('layout')
@section('title', 'Application Form')
@section('content')
<style>

body {
  font-family: sans-serif;
}

form {
  width: 500px;
  margin: 0 auto;
}

input,
select,
textarea {
  width: 100%;
  padding: 10px;
  margin-bottom: 10px;
  border: 1px solid #ccc;
}

label {
  display: block;
  margin-bottom: 10px;
}

button {
  width: 100%;
  padding: 10px;
  background-color: blue;
  color: #fff;
  border: none;
}
h1{
    text-align: center;
}
</style>


<h1>Job Application Form</h1>
<div class=" container">
    <form method="POST" >
        
        <label for="name">Name</label>
        <input type="text" name="name" id="name" required>
      
        <label for="email">Email</label>
        <input type="email" name="email" id="email" required>
      
        <label for="phone">Phone Number</label>
        <input type="tel" name="phone" id="phone" required>
      
        <label for="resume">Resume</label>
        <input type="file" name="resume" id="resume" required>
      
        <label for="cover_letter">Cover Letter</label>
        <textarea name="cover_letter" id="cover_letter" required></textarea>
      
        <button type="submit">Submit</button>
      </form>
</div>



@endsection
@extends('layouts.app'
)
<div class="max-w-xl mx-auto mt-6">
  <div class="bg-white shadow-md rounded-lg overflow-hidden">
    <div class="px-6 py-4">
      <h3 class="text-xl font-bold text-gray-800">Post Title</h3>
      <p class="text-gray-600 mt-2">This is the content of the post. It can be a short or long message written by the user.</p>
    </div>
    <div class="px-6 py-2 bg-gray-100 text-sm text-gray-500 flex justify-between items-center">
      <span>Posted by: <strong>username</strong></span>
      <span>Aug 7, 2025</span>
    </div>
  </div>
</div>
@endsection

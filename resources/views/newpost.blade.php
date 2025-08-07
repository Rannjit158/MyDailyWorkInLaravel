@extends('layouts.app')
@section('content')
    @

<div class="max-w-xl mx-auto mt-10 p-6 bg-white rounded-xl shadow-md">
  <h2 class="text-2xl font-bold mb-4">Create New Post</h2>
  <form action="/posts" method="POST">
    <!-- Title Field -->
    <div class="mb-4">
      <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
      <input type="text" id="title" name="title" required
             class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
    </div>

    <!-- Content Field -->
    <div class="mb-4">
      <label for="content" class="block text-sm font-medium text-gray-700">Content</label>
      <textarea id="content" name="content" rows="5" required
                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"></textarea>
    </div>

    <!-- Submit Button -->
    <div>
      <button type="submit"
              class="px-4 py-2 bg-blue-600 text-white font-semibold rounded hover:bg-blue-700 transition">
        Submit Post
      </button>
    </div>
  </form>
</div>
@endsection

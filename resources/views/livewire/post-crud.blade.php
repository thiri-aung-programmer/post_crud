<div class="max-w-2xl mx-auto bg-white rounded-xl p-5 shadow-md">
    {{-- Nothing in the world is as soft and yielding as water. --}}
   
    <h1 class="text-2xl font-bold mb-4">Manage Posts</h1>

    {{-- form --}}
    <form action="" class="space-y-4">
        <div class="block text-sm font-semibold mb-1">
            <label for="">Title</label>
            <input type="text" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:ring-blue-200">
        </div>
        
        <div class="block text-sm font-semibold mb-1">
            <label for="">Title</label>
            <textarea row="2" name="" id=""class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:ring-blue-200"></textarea>
        </div>
        <div class="flex items-center gap-2 my-4 justify-end">
            <button type="submit" class="bg-blue-600 hover:bg-blue-700 rounded text-white px-4 py-2">Create Post</button>
             <button type="reset" class="bg-gray-600 hover:bg-gray-700 rounded text-white px-4 py-2">Cancel</button>
        </div>

    </form>
    <div class="mt-8">
        <h2 class="text-lg font-semibold mb-3"><i class="bi bi-pencil-square me-3"></i>All Posts</h2>
        <div class="border border-gray-200 rounded mb-4 shadow-sm p-4">
        
            <h3 class="text-lg font-bold">Demo Title</h3>
            <p class="text-gray-700 mt-1">This is descriptio for the post</p>
            <div>
                <button class="text-blue-600 hover:underline">Update</button>
                <button class="text-red-600 hover:underline">Delete</button>
            </div>
        </div>

    </div>
</div>

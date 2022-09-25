<x-layout>

  <x-card class="p-10 max-w-lg mx-auto mt-24">
    <header class="text-center">
        <h2 class="text-2xl font-bold uppercase mb-1">
            Edit details
        </h2>
        <p class="mb-4">{{$listing->title}}</p>
    </header>
  
    <form method="POST" action="/listings/{{$listing->id}}">
      @csrf
      @method('PUT')
        <div class="mb-6">
            <label
                for="gym"
                class="inline-block text-lg mb-2"
                >Gym Name</label
            >
            <input
                type="text"
                class="border border-gray-200 rounded p-2 w-full"
                name="gym"
                value="{{$listing->gym}}"
            />
            @error('gym')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>
  
        <div class="mb-6">
            <label for="title" class="inline-block text-lg mb-2"
                >Title</label
            >
            <input
                type="text"
                class="border border-gray-200 rounded p-2 w-full"
                name="title"
                value="{{$listing->title}}"
                placeholder="Example: Yoga trainer"
            />
            @error('title')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>
  
        <div class="mb-6">
            <label
                for="location"
                class="inline-block text-lg mb-2"
                >Location</label
            >
            <input
                type="text"
                class="border border-gray-200 rounded p-2 w-full"
                name="location"
                value="{{$listing->location}}"
            />
            @error('location')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>
  
        <div class="mb-6">
            <label for="email" class="inline-block text-lg mb-2"
                >Contact Email</label
            >
            <input
                type="text"
                class="border border-gray-200 rounded p-2 w-full"
                name="email"
                value="{{$listing->email}}"
            />
            @error('email')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>
  
        <div class="mb-6">
            <label for="tags" class="inline-block text-lg mb-2">
                Tags (Comma Separated)
            </label>
            <input
                type="text"
                class="border border-gray-200 rounded p-2 w-full"
                name="tags"
                value="{{$listing->tags}}"
            />
            @error('tags')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>
  
        <div class="mb-6">
            <label
                for="description"
                class="inline-block text-lg mb-2"
            >
                Description
            </label>
            <textarea
                class="border border-gray-200 rounded p-2 w-full"
                name="description"
                rows="10"
            >{{$listing->description}}</textarea>
            @error('description')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>
  
        <div class="mb-6">
            <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
                Update
            </button>
  
            <a href="/" class="text-black ml-4"> Back to Main</a>
        </div>
    </form>
  </x-card>
  </x-layout>
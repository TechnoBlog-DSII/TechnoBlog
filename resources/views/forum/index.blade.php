<x-app-layout>

    <ul>
        @foreach ($forums as $forum)
            <li class="grid grid-cols-2">
                <figure>
                    <img src="{{ asset('storage/' . $forum->image->url) }}" alt="">
                </figure>

                <div>
                    <h1 class="text-xl font semibold">
                        {{ $forum->title }}
                    </h1>
                </div>

            </li>
        @endforeach
    </ul>


</x-app-layout>

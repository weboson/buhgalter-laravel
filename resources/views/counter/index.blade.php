{{-- счетчик - компонент --}}
<x-layout>

    <ul class="about-us_counter">
        @foreach($posts as $post)
        <li class="block-first">
            <p>{{ $post->title }}</p>
            <p>{{ $post->article }}</p>
        </li>
        @endforeach
    </ul>
</x-layout>

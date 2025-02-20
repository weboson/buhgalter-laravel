{{-- счетчик - компонент --}}
<x-layout>

    <ul class="about-us_counter">
        @foreach($posts as $post)
        <li class="block-counter">
            <div class="counter-title">
                <p>{{ $post->title }}</p>
            </div>
            <div class="counter-article">
                <p>{{ $post->article }}</p>
            </div>
        </li>
        @endforeach
    </ul>
</x-layout>

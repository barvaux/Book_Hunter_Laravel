<div class="tag-cloud">
    @foreach ($tags as $tag)
        <a class="text-gray-300 hover:text-white" href="#"
            style="font-size: calc(0.8em + {{ count($tag->books) / 10 }}em)">
            {{ $tag->name }}
        </a>
    @endforeach
</div>

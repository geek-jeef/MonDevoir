<div x-data="{isTyped: false}">
    <div>
        <div class="relative">
            <input type="text"
                placeholder="{{__('Search ...')}}"
                x-on:input.debounce.400ms="isTyped = ($event.target.value != '')"
                autocomplete="off"
                wire:model.debounce.500ms="search"
                aria-label="Search input" />
        </div>
        {{-- search box --}}
            <div x-show="isTyped" x-cloak>
                <div>
                    <div>
                            @forelse($articles as $article)
                                <div>
                                    <ul>
                                        <li>
                                            <a href="{{route('blog.show', $article->slug)}}">
                                                {{Str::limit($article->title, 40)}}
                                            </a>
                                            <a href="{{route('category.show', $article->category->slug ?? 'uncategorized')}}">
                                                {{$article->category->name}}
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            @empty
                                <div x-cloak>
                                    {{$isEmpty}}
                                </div>
                            @endforelse
                    </div>
                </div>
            </div>
    </div>

</div>
<div
    x-data="{}"
    x-on:focus-first-global-search-result.stop="$el.querySelector('.fi-global-search-result-link')?.focus()"
    class="fi-global-search flex items-center"
>
    {{ FilamentView::renderHook(PanelsRenderHook::GLOBAL_SEARCH_START) }}

    <div class="sm:relative">
        <x-filament-panels::global-search.field />

        @if ($results !== null)
            <x-filament-panels::global-search.results-container
                :results="$results"
            />
        @endif
    </div>

    {{ FilamentView::renderHook(PanelsRenderHook::GLOBAL_SEARCH_END) }}
</div>

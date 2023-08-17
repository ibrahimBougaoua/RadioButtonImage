<x-dynamic-component :component="$getFieldWrapperView()" :field="$field">
    @php
        $gridDirection = $getGridDirection() ?? 'column';
        $id = $getId();
        $isDisabled = $isDisabled();
        $statePath = $getStatePath();
    @endphp

    <ul role="list" class="grid gap-8 xl:grid-cols-4 lg:grid-cols-3">
        @foreach ($getOptions() as $value => $label)
            @php
                $shouldOptionBeDisabled = $isDisabled || $isOptionDisabled($value, $label);
            @endphp
            <li>
                <label class="">
                    <input
                        @disabled($shouldOptionBeDisabled)
                        id="{{ $id }}-{{ $value }}"
                        name="{{ $id }}"
                        type="radio"
                        value="{{ $value }}"
                        wire:loading.attr="disabled"
                        {{ $applyStateBindingModifiers('wire:model') }}="{{ $statePath }}"
                        class="rb-image"
                    />
                    <div class="img-radio">
                        <img src="{{ asset('storage') }}/{{ $label }}" alt="{{ $label }}" class="focus:bg-primary-500 cursor-pointer">
                    </div>
                </label>
            </li>
        @endforeach
    </ul>
</x-dynamic-component>

<style>
/* HIDE RADIO */
.rb-image { 
  position: absolute;
  opacity: 0;
  width: 0;
  height: 0;
}

/* IMAGE STYLES */
.rb-image + img {
  cursor: pointer;
}

/* CHECKED STYLES */
.rb-image:checked + img {
  outline: 2px solid #f00;
}


.img-radio {
    border: 1px solid #dee2e6;
    max-width: 100%;
    border-radius: 5px;
    cursor: pointer;
    display: block;
    height: auto;
    margin: auto;
    padding: 5px;
    position: relative;
    width: 100%;
}

.img-radio:hover img {
    -o-object-position: bottom;
    object-position: bottom;
}

.img-radio img {
    height: 400px;
    -o-object-fit: cover;
    object-fit: cover;
    -o-object-position: top;
    object-position: top;
    transform-origin: 50% 50%;
    transition-duration: .2s;
    transition: all 5s ease;
    width: 100%;
}
</style>
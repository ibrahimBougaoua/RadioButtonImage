<x-dynamic-component :component="$getFieldWrapperView()" :field="$field">
    @php
        $gridDirection = $getGridDirection() ?? 'column';
        $id = $getId();
        $isDisabled = $isDisabled();
        $statePath = $getStatePath();
    @endphp

    <style>/*
        input[name="{{ $id }}"]:checked + .img-radio {
            background-color: rgba(var(--primary-500),var(--tw-bg-opacity));
        }*/
        input[name="{{ $id }}"]:checked + .img-radio {
            background-color: rgba(var(--primary-500),var(--tw-bg-opacity));
        }
    </style>

    <ul role="list" class="grid gap-8 xl:grid-cols-4 lg:grid-cols-3">
        @foreach ($getOptions() as $value => $image)
            @php
                $shouldOptionBeDisabled = $isDisabled || $isOptionDisabled($value, $image);
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
                        <span class="img-radio-selected"></span>
                        <img src="{{ asset('storage') }}/{{ $image }}" alt="{{ $value }}" class="focus:bg-primary-500 cursor-pointer">
                    </div>
                </label>
            </li>
        @endforeach
    </ul>
</x-dynamic-component>

<style>
.rb-image {
    position: absolute;
    opacity: 0;
    width: 0;
    height: 0;
}

.img-radio {
    border: 1px solid #dee2e6;
    max-width: 100%;
    border-radius: 5px;
    cursor: pointer;
    display: block;
    height: auto;
    margin: auto;
    overflow: hidden;
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
    transition-duration: .1s;
    transition: all 2s ease;
    width: 100%;
}

.img-radio-selected {
    background-color: rgba(var(--primary-500),var(--tw-bg-opacity));
    transform: rotate(0.8648rad);
    width: 110px;
    height: 20px;
    position: absolute;
    top: 15px;
    right: -30px;
}
</style>
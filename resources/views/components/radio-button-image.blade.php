<x-dynamic-component
    :component="$getFieldWrapperView()"
    :id="$getId()"
    :label="$getLabel()"
    :label-sr-only="$isLabelHidden()"
    :helper-text="$getHelperText()"
    :hint="$getHint()"
    :hint-action="$getHintAction()"
    :hint-color="$getHintColor()"
    :hint-icon="$getHintIcon()"
    :required="$isRequired()"
    :state-path="$getStatePath()"
>
    <x-filament-support::grid
        :default="$getColumns('default')"
        :sm="$getColumns('sm')"
        :md="$getColumns('md')"
        :lg="$getColumns('lg')"
        :xl="$getColumns('xl')"
        :two-xl="$getColumns('2xl')"
        direction="column"
        :attributes="
            \Filament\Support\prepare_inherited_attributes($attributes->merge($getExtraAttributes())->class([
        'filament-forms-radio-component grid gap-8 sm:grid-cols-2 xl:grid-cols-5 sm:gap-y-16 xl:col-span-2'
            ]))
        "
    >
        @php
            $isDisabled = $isDisabled();
        @endphp

        @foreach ($getOptions() as $value => $label)
            @php
                $shouldOptionBeDisabled = $isDisabled || $isOptionDisabled($value, $label);
            @endphp
            
            <div x-data="{ selected: null }"
                @class([
                    'relative cursor-pointer rounded-lg hover:bg-success-500 focus:bg-success-700 focus:ring-offset-success-700',
                ])
            >
                <input
                    name="{{ $getId() }}"
                    id="{{ $getId() }}-{{ $value }}"
                    type="radio"
                    value="{{ $value }}"
                    dusk="filament.forms.{{ $getStatePath() }}"
                    class="hidden"
                    {{ $applyStateBindingModifiers('wire:model') }}="{{ $getStatePath() }}"
                    {!! $shouldOptionBeDisabled ? 'disabled' : null !!}
                    wire:loading.attr="disabled"
                />
                <div class="img-radio" x-on:click="selected !== item ? selected = item : selected = null" :class="{ 'bg-success-500': selected === item }">
                    <img src="{{ asset('storage') }}/{{ $label }}" alt="Image 1" class=" focus:bg-primary-500 cursor-pointer">
                </div>
            </div>
        @endforeach
    </x-filament-support::grid>

</x-dynamic-component>

<style>
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
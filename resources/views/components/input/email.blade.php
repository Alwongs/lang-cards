@props(['classes'])

<div {!! $attributes->merge(['class' => '$classes']) !!} >
    <input 
        id="email"
        type="email"
        name="email"
        placeholder="email"
        :value="old('email')"
        required
        autofocus
    />
</div>
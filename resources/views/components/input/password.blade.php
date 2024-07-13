@props(['classes'])

<div {!! $attributes->merge(['class' => '$classes']) !!} >
    <input 
        id="password"
        type="password"
        name="password"
        placeholder="password"
        required
        autocomplete="current-password"
    />
</div>

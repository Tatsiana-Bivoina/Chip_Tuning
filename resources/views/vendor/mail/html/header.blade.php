@props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}">
@if (trim($slot) === 'Chip_Tuning')
<img src="#" class="logo" alt="Chip_Tuning_Logo">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>

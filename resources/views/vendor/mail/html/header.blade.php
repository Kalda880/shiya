<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (true || trim($slot) === 'Laravel')
<img src="{{ $image_url }}" class="logo" alt="Shya Logo">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>

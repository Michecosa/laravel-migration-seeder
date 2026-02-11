<tr class="single-train">
    <td class="time">{{ $departureTime }}</td>
    <td class="code">{{ $trainCode }}</td>
    <td class="dest">{{ $destination }}</td>
    <td class="status {{ $status == 'Cancellato' ? 'status-cancelled' : '' }}">
        {{ $status }}
    </td>
</tr>
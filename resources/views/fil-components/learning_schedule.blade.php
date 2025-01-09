<div>
    @php
        // Ensure $getState() is an array
        $data = is_string($getState()) ? json_decode($getState(), true) : $getState();
    @endphp
    @if ($data && is_array($data))
        <ul class="list-disc ml-4">
            @foreach ($data as $item)
                <li style="list-style: none">{{ is_array($item) ? implode(', ', $item) : $item }}</li>
            @endforeach
        </ul>
    @else
        <span class="text-gray-500">No data available</span>
    @endif
</div>

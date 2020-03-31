@foreach($items as $item)
    <tr>
        <td>{{ $loop->index + 1 }}</td>
        <td>{{ $item->categoryName }}</td>
        <td>{{ $item->description }}</td>
        <td>
            <button class="btn btn-danger deleteCate" data-toggle="modal" data-target="#confirm-delete">Delete</button>
            <button class="btn btn-edit btn-warning" data-id="{{ $item->id }}" data-toggle="modal" data-target="#poupCategory">edit</button>
            <input name="txtHdnId" type="hidden" value="{{ $item->id }}">
{{--            <input name="txtHdnName" type="hidden" value="{{ $item->categoryName }}">--}}
{{--            <input name="txtHdnDescription" type="hidden" value="{{ $item->description }}">--}}
            <input name="txtHdnUrl" type="hidden" value="{{ $item->description }}">
        </td>
    </tr>
@endforeach

@foreach ($childs as $child)
    <option value="{{ $child->id }}"        
        @if(isset($parentid) && $parentid == $child->id) {{ "selected" }} @endif
        >{!! str_repeat('&#160;', $level * 1) !!} {{ $child->translate->title ?? '' }}
        @if (count($child->children))
            <x-backend.cms.select-single-option-childs :childs="$child->children" : level="{{ $level + 1 }}" :parentid="$parentid" />
        @endif
    </option>
@endforeach

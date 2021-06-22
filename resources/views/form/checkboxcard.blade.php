@include("admin::form._header")

        <div class="card-group checkbox-group-toggle">
        @foreach($options as $option => $label)
            <label class="panel panel-default {{ false !== array_search($option, array_filter(old($column, $value ?? []))) || ($value === null && in_array($option, $checked)) ?'active':'' }}">
                <div class="panel-body">
                <input type="checkbox" name="{{$name}}[]" value="{{$option}}" class="hide {{$class}}" {{ false !== array_search($option, array_filter(old($column, $value ?? []))) || ($value === null && in_array($option, $checked)) ?'checked':'' }} {!! $attributes !!} />&nbsp;{{$label}}&nbsp;&nbsp;
                </div>
            </label>
        @endforeach
        </div>

        <input type="hidden" name="{{$name}}[]">

@include("admin::form._footer")
@foreach($coffeeBreakPreferenceRepository as $preference)
    <ul>
        {{$preference->staff_member_id}}
    </ul>


@endforeach